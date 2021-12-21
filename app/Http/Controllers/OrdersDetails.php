<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orders_Detail;
use Illuminate\Http\Request;

class OrdersDetails extends Controller
{

    public function index()
    {
        $ordersdetails = Orders_Detail::all();
        foreach($ordersdetails as $ordersdetail)
        {
            $orderdet = $ordersdetail->get();
        }
        return view('ordersdetails',compact("ordersdetails"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderdetails = new Orders_Detail($request->all());
            if($orderdetails->save()) return response($orderdetails,201);
            return response('',409);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function orderDetails($id)
    {
        $order = Order::find($id);
        $orderDetails = $order->OrderDetails()->get();
        $order["details"] = $orderDetails;
//        return response($order, 200);
        return view('OrdersDetails', compact('order'));
    }

    public function display_create_win($id)
    {
        return view('CreateOrderDetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
