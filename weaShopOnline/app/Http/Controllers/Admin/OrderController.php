<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductInterface;
use Illuminate\Http\Request;
// use App\Http\Requests\OrderRequest;
use App\Repositories\Order\OrderInterface;
use Carbon\Carbon;
use App\Models\Order;

class OrderController extends Controller
{
    private $orderRepository;
    private $productRepository;

    public function __construct(OrderInterface $orderRepos, ProductInterface $productRepos)
    {
        $this->orderRepository = $orderRepos;
        $this->productRepository = $productRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderRepository->getAll();
        return view('admin.layouts.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = $this->orderRepository->find($id);

        return view('admin.layouts.orders.detail', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = $this->orderRepository->find($id);

        return view('admin.layouts.orders.edit', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {        
        $order = $this->orderRepository->find($request->id);
        $order->is_deleted = true;
        $orders = $this->orderRepository->update($order->id, $order->toArray());

        if ($orders) { 
            $orders->update();
            return back()->with('message','Delete success!');
        } else return back()->with('err','Delete false!');
    }
}
