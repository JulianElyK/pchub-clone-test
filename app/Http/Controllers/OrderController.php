<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Payment;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
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

    public function showCart(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', 0)->get();

        //$detail_order = Order
        return view('cart', ["title" =>  'Cart' , 'orders' => $order]);
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
        $order = Order::orderBy('id', 'desc')->where('customer_id', Session::get('id'))->first();
        $payment = New Payment;
        $payment->amount = $order->total_price;
        $payment->method = $request->payment;
        $payment->order_id = $order->id;
        $payment->save();
        $shipment = new Shipment;
        $shipment->address = $request->address;
        $shipment->ship_date = date("Y-m-d");
        $tiga_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        $shipment->arrival_date = date("Y-m-d", $tiga_hari);
        $shipment->order_id = $order->id;
        $shipment->type = $request->shipment;
        $shipment->save();
        $order->status = 1;
        $order->save();
        return redirect()->intended('/')->with('paymentSuccess', 'Payment An Order Was Successfully, Thanks!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
