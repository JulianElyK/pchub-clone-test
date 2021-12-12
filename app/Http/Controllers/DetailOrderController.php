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

        if(Session::get('id') == null){
            return back()->with('signin_warning', 'Sign in to purchase.');
        }
        
        $order = Order::orderBy('id', 'desc')->where('customer_id', Session::get('id'))->first();
        if($product->stock < $request->quantity){
            return redirect()->intended('/')->with('lowStock', 'Stock is empty, choose another product!');
        }
        $product->stock = $product->stock - $request->quantity;
        $product->save();
        if(is_null($order)){
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
        }elseif($order->status != 0){
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
        elseif($order->status == 0){
            $temp_harga = ($order->total_price) + ($product->price * $request->quantity);
            $order->total_price = $temp_harga;
            $order->save();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $id;
            $detail_order->quantity = $request->quantity;
            $detail_order->price = $product->price * $request->quantity;
            $detail_order->save();
        }
        return redirect()->intended('/')->with('addCartSuccess', 'Item added to cart.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DetailOrder $detailOrder)
    {
        
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
    public function destroy($id)
    {
        $detail_order = DetailOrder::where('id', $id)->first();

        $product = Product::find($detail_order->Product->id);
        $product->stock = $product->stock + $detail_order->quantity;
        $product->save();
        $detail_order->delete();
        return redirect()->intended('/cart')->with('deleteCartSuccess', 'Item removed from cart.');
    }
}
