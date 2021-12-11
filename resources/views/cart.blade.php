@extends('layouts.main')
@section('container')
<div class="container-md mt-3">
    @if (session()->has('deleteCartSuccess'))
    <div class="alret alert-success" role="alert">
        {{ session('deleteCartSuccess') }}
    </div>
@endif
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </thead>
            @foreach ($orders as $order)
                @foreach ($order->DetailOrder as $detail_order)
                    <tbody>
                        <th schope="row">{{ $loop->iteration }}</th>
                        <td>{{ $detail_order->Product->name }}</th>
                        <td>{{ $detail_order->quantity }}</th>
                        <td>{{ $detail_order->price }}</th>
                        <td>
                            <form action="/shipment/{{ $order->id }}" method="post">
                                @csrf
                                <button class="badge bg-danger border-8" onclick="return confirm('Are You Sure?')">Delete</button>
                            </form>
                        </th>
                    </tbody>
                @endforeach
            @endforeach
        </table>
        <form action="/gotopayment" method="post">
            <div class="konten-beli">
                <a href="/payment"><button type="button" class="btn btn-primary">Bayar</button></a>
            </div>
        </form>
    </div>
</div>
@endsection