<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Payment;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    }

    public function customPc(Request $request){
        dd($request);
    }

    public function getForShipment(){
        $order = Order::where('status', 1)->get();
        return view('shipment', ["title" =>  'Shipment' , 'orders' => $order]);
    }

    public function getAllForShow()
    {
        $order = Order::all();
        return view('orderhistory', ['orders' => $order, 'title' => 'Order History']);
    }

    public function showCart(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', 0)->get();

        //$detail_order = Order
        return view('cart', ["title" =>  'Cart' , 'orders' => $order]);
    }

    public function showPesanan(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', '!=', 0)->get();


        return view('pesanan', ["title" =>  'Order' , 'orders' => $order]);
    }

    public function hasBeenReceived($id){
        $order = Order::where('id', $id)->first();
        $order->status = 3;
        $order->save();

        return back()->with('itemReceived', 'Item received, Thank You');
    }

    public function sendOrder($id){
        $shipment = Shipment::where('order_id', $id)->first();
        $shipment->ship_date = date("Y-m-d");
        $tiga_hari = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        $shipment->arrival_date = date("Y-m-d", $tiga_hari);
        $shipment->save();
        $order = Order::where('id', $id)->first();
        $order->status = 2;
        $order->save();
        return back()->with('sendSuccess', 'Success Send the Order!');
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
        DB::table('shipments')->insert([
            'address' => $request->address,
            'order_id' => $order->id,
            'type' => $request->shipment
        ]);
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
