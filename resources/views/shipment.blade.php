@extends('layouts.main')
@section('container')
<div class="judul">
    <h1>Shipment</h1>
</div>
<div class="container-md mt-3">
    @if (session()->has('sendSuccess'))
        <div class="alert alert-success" role="alert">
            {{ session('sendSuccess') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Date Order</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </thead>
            @foreach ($orders as $order)
                <tbody>
                    <th schope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->Customer->name }}</th>
                    <td>{{ $order->date }}</th>
                    <td>{{ $order->total_price }}</th>
                    <td>
                        <form action="/shipment/{{ $order->id }}" method="post">
                            @csrf
                            <button id="shipment-{{ $order->id }}" class="badge bg-success border-8"">Send</button>
                        </form>
                    </th>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
