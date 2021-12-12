<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Product;
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
        $order = Order::orderBy('id', 'desc')->where('customer_id', Session::get('id'))->first();
        $product = Product::where('name', 'Custom PC')->first();
        if(is_null($order)){
            $order = new Order;
            $order->customer_id = Session::get('id');
            $order->total_price = $request->total_harga + 500000;
            $order->status = 0;
            $order->save();
            $order = Order::orderBy('id', 'desc')->first();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $product->id;
            $detail_order->quantity = 1;
            $detail_order->price = $request->total_harga;
            $detail_order->save();
        }elseif($order->status != 0){
            $order = new Order;
            $order->customer_id = Session::get('id');
            $order->total_price = $request->total_harga + 500000;
            $order->status = 0;
            $order->save();
            $order = Order::orderBy('id', 'desc')->first();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $product->id;
            $detail_order->quantity = 1;
            $detail_order->price = $request->total_harga;
            $detail_order->save();
        }
        elseif($order->status == 0){
            $temp_harga = ($order->total_price) + ($request->total_harga);
            $order->total_price = $temp_harga;
            $order->save();
            $detail_order = new DetailOrder;
            $detail_order->order_id = $order->id;
            $detail_order->product_id = $product->id;
            $detail_order->quantity = 1;
            $detail_order->price = $request->total_harga;
            $detail_order->save();
        }
        return redirect()->intended('/')->with('customPcSuccess', 'Custom PC was successfully, please pay you order!.');
    }

    public function getForShipment(){
        $order = Order::where('status', 1)->get();
        return view('shipment', ["title" =>  'Shipment' , 'orders' => $order]);
    }

    public static function getAllorder(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', 0)->get();
        return $order;
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

    public function showOrderSummary(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', 0)->get();

        //$detail_order = Order
        return view('payment', ["title" =>  'Payment Methods' , 'orders' => $order]);
    }

    public function showPesanan(){
        $order = Order::where('customer_id', Session::get('id'))->where('status', '!=', 0)->get();


        return view('pesanan', ["title" =>  'Order' , 'orders' => $order]);
    }

    public function hasBeenReceived($id){
        $order = Order::where('id', $id)->first();
        $order->status = 3;
        $order->save();

        return back()->with('itemReceived', 'Item received, thanks for purchasing!');
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
        return back()->with('sendSuccess', 'Order sent succesfully.');
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
        return redirect()->intended('/')->with('paymentSuccess', 'Order paid successfully.');

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
