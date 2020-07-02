<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Customer\CustomerInterface;
use App\Repositories\Order\OrderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request; 
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    protected $orderRepository;
    protected $customerRepository;

    public function __construct(OrderInterface $orderRepos, CustomerInterface $customerRepos)
    {
        $this->orderRepository = $orderRepos;
        $this->customerRepository = $customerRepos;
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
        $customers = $this->customerRepository->getPluck('full_name','id');

        return view('admin.layouts.orders.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(OrderRequest $request)
    {
        $request->validated();
        
        $data = new Order([
            'order_status' => $request->order_status,
            'payment_status' => $request->payment_status,
            'customer_id' => $request->customer_id,
            'is_deleted' => false,
        ]);
        $orders = $this->orderRepository->create($data->toArray());
        $orders->save();
        if ($orders) return redirect('/admin/order')->with('message','Create New successfully!');
        else return back()->with('err','Save error!');  
    }

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
        $orders = $this->orderRepository->find($request->id);
        $order->is_deleted = true;
        $orders = $this->orderRepository->update($order->id, $order->toArray());

        if ($orders) { 
            $orders->update();
            return back()->with('message','Delete success!');
        } else return back()->with('err','Delete failse!');
    }
}
