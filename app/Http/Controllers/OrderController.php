<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
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
	$datas = $request->json()->all();
    $order = new \App\Order;
    foreach($datas as $data){
        if(isset($data['name'])){
            $order->name = $data['name'];
        }else{
            $order->name = " ";
        }

        if(isset($data['comments'])){
            $order->comments = $data['comments'];
        }else{
            $order->comments = " ";
        }

        if(isset($data['quantity'])){
            $order->quantity = $data['quantity'];
        }else{
            $order->quantity = 0;
        }

        if(isset($data['bake'])){
            $order->nameBaking = $data['bake'];
        }else{
            $order->nameBaking = " ";
        }

        if(isset($data['presta'])){
            $order->namePresta = $data['presta'];
        }else{
            $order->namePresta = " ";
        }

        if(isset($data['extras'])){
            $order->extras = serialize($data['name']);
        }else{
            $order->extras = " ";
        }

        if(isset($data['price'])){
            $order->totalPrice = $data['price'];
        }else{
            $order->totalPrice = 0;
        }
        $order->save();
    }
    
	
	return $order;
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
