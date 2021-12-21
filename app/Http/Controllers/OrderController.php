<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $orders = Order::all();
        foreach ($orders as $order) {
            $ods = $order->OrderDetails()->get();
            if (count($ods) != 0) {
                foreach ($ods as $od)
                {
                    $product = $od->product()->get()[0];
                    $od['product'] = $product;
                }
            }
            $order['details'] = $ods;
        }
//          return response($orders, 200);
        return view('orders', compact('orders'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'date_added' => "required",
        ]);
        $order = new Order($request->all());
        if($order->save()) return response($order, 201);
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
        $fields = $request->validate([
            'date_added' => "required",
        ]);
        if(($order=Order::find($id)!=null))
        {
            $order->update(['date_added'=>$fields['date_added']]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy(id);
        return $this->index();
    }
}
