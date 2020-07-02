<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\Order\OrderInterface;
use App\Repositories\Product\ProductInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class CartController extends Controller
{
    private $productRepository;
    private $orderRepository;

    public function __construct(ProductInterface $productRepos, OrderInterface $orderRepos)
    {
        $this->productRepository = $productRepos;
        $this->orderRepository = $orderRepos;
    }

    //Page cart index
    public function cartpage()
    {
        return view('client.layouts.cartpage');
    }

    //Add product to cart
    public function addToCart(Request $request){
        $product = Product::find($request->product_id);
        //dd($product);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            if (intval($request->quantity) > $product->quantity) {
                session()->flash('err', 'Quantity less than '.$product->quantity);
                return redirect()->back()->with('err', 'Quantity less than '.$product->quantity);
            }else{
                $cart = [
                    $product->id => [
                        "id" => $product->id,
                        "name" => $product->name,
                        "slug" => $product->slug,
                        "quantity" => intval($request->quantity),
                        "price" => $product->promotion_price ?? $product->price,
                        "image" => $product->url_image,
                    ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('message', 'Product added to cart successfully!');
            }
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$product->id])) {
            if (intval($request->quantity) > $product->quantity) {
                session()->flash('err', 'Quantity less than '.$product->quantity);
                return redirect()->back()->with('err', 'Quantity less than '.$product->quantity);
            }else{
                $cart[$product->id]['quantity'] += $request->quantity;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
        }
        // if item not exist in cart then add to cart
        if (intval($request->quantity) > $product->quantity) {
            session()->flash('err', 'Quantity less than '.$product->quantity);
            return redirect()->back()->with('err', 'Quantity less than '.$product->quantity);
        }else{
            $cart[$product->id] = [
                    "id" => $product->id,
                    "name" => $product->name,
                    "slug" => $product->slug,
                    "quantity" => intval($request->quantity),
                    "price" => $product->promotion_price ?? $product->price,
                    "image" => $product->url_image,
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $product_id = Product_detail::select('product_id')->where('id',$request->id)->first();
            $product = Product::find($product_id->product_id);
            if (intval($request->quantity) > $product->quantity) {
                session()->flash('err', 'Quantity less than '.$product->quantity);
            }else{
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = intval($request->quantity);
                session()->put('cart', $cart);
                session()->flash('success', 'Cart updated successfully');
            }
        }
    }

    //Update cart
    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $product = Product::find($request->id);
            if($product){
                if (intval($request->quantity) > $product->quantity) {
                    session()->flash('err', 'Quantity less than '.$product->quantity);
                }else{
                    $cart = session()->get('cart');
                    $cart[$request->id]["quantity"] = intval($request->quantity);
                    session()->put('cart', $cart);
                    session()->flash('success', 'Cart updated successfully!');
                }
            }else{
                abort(404);
            }
        }
    }

    //Remove product from cart
    public function removeFromCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product has been removed successfully');
        }
    }

    //Page cart checkout
    public function checkout()
    {
        if (Auth::check()){
            return view('client.layouts.payment');
        }else{
            return redirect()->back()->with('err', 'You need to login before checkout!');
        }
    }

    //Payment
    public function payment(Request $request)
    {
        $status = 'unconfimred';
        if ($request->payment != 'cod') {
            $status = 'cancel';
        }
        $order = new Order([
            'order_code' => uniqid(),
            'total_amount' => $request->total_amount,
            'status' => $status,
            'payment' => $request->payment,
            'transaction_date' => Carbon::now()->toDateTimeString(),
            'notes' => $request->note.' '.$request->address,
            'user_id' => Auth::guard('client')->user()->id,
            'created_by' => Auth::guard('client')->user()->id,
            'updated_at' => null,
        ]);
        $result = $this->orderRepo->addNew($order);
        foreach ($request->product_detail_id as $key => $value) {
            $order_detail = new Order_detail([
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
                'total_amount' => $request->price[$key]*$request->quantity[$key],
                'order_id' => $order->id,
                'product_detail_id' => $value,
                'isfeedback' => false,
                'created_by' => Auth::guard('client')->user()->id,
                'updated_at' => null,
            ]);
            $result = $this->orderdetailRepo->addNew($order_detail);
        }
        if ($request->payment == 'momo') {
            //MoMo
            $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
            $partnerCode = "MOMOBKUN20180529";
            $accessKey = "klm05TvNBzhg7h7j";
            $serectkey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
            $orderId = date("YmdHis").$order->id; // Mã đơn hàng
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $request->total_amount;
            $notifyurl = "http://localhost:8000/cart";
            $returnUrl = "http://localhost:8000/returnpayment";
            $extraData = "merchantName=MoMo Partner";
            $requestId = time() . "";
            $requestType = "captureMoMoWallet";
            $extraData = ($request->extraData ? $request->extraData : "");
            //before sign HMAC SHA256 signature
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array('partnerCode' => $partnerCode,
                'accessKey' => $accessKey,
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'returnUrl' => $returnUrl,
                'notifyUrl' => $notifyurl,
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            return redirect($jsonResult['payUrl']);
        }
        $request->session()->forget('cart');
        return redirect('/cart')->with('success','Order successfully!');
    }
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function returnpayment(Request $request)
    {
        if ($request->errorCode == "0") {
            $id = substr($request->orderId, (14-strlen($request->orderId)));
            $order = Order::findOrFail($id);
            $order->status = "unconfimred";
            $order->update();
            $request->session()->forget('cart');
        }
        return redirect('/cart')->with('success' ,'Payment success. Thanks you!');
    }
}
