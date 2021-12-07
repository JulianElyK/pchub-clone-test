<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $order = Order::orderBy('id', 'desc')->first();
        if($product->stock < $request->quantity){
            return redirect()->intended('/')->with('lowStock', 'Stock is Low, buy another product!');
        }
        if($order->status == 0){
            $temp_harga = ($order->total_price) + ($product->price * $request->quantity);
            $order->total_price = $temp_harga;
            $order->save();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $id;
            $detail_order->quantity = $request->quantity;
            $detail_order->price = $product->price * $request->quantity;
            $detail_order->save();
        }else{
            $order = new Order;
            $order->customer_id = Session::get('id');
            $order->total_price = $product->price * $request->quantity;
            $order->status = 0;
            $order->save();
            $order = Order::orderBy('id', 'desc')->first();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $id;
            $detail_order->quantity = $request->quantity;
            $detail_order->price = $product->price * $request->quantity;
            $detail_order->save();

        }
        return redirect()->intended('/')->with('addCartSuccess', 'Add Item to Cart was Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DetailOrder $detailOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailOrder $detailOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailOrder $detailOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailOrder $detailOrder)
    {
        //
    }
}
