@extends('layouts.main')
@section('container')
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Actiion</th>
            </thead>
            @foreach ($orders as $order)
                @foreach ($order->DetailOrder as $detail_order)
                    <tbody>
                        <th schope="row">{{ $loop->iteration }}</th>
                        <th>{{ $detail_order->name }}</th>
                        <th>{{ $detail_order->quantity }}</th>
                        <th>{{ $detail_order->price }}</th>
                    </tbody>
                @endforeach
                
            @endforeach
        </table>
    </div>
@endsection