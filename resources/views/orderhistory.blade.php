@extends('layouts.main')
@section('container')
    <div class="judul">
        <h1>Order History</h1>
        <!-- <hr class="line"> -->
    </div>
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
                <th scope="col">Status*</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Modified</th>
            </thead>
            @foreach ($orders as $order)
                <tbody>
                    <th schope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->Customer->name }}</th>
                    <td>{{ $order->date }}</th>
                    <td>{{ $order->total_price }}</th>
                    <td>{{ $order->status }}</th>
                    <td>{{ $order->created_at }}</th>
                    <td>{{ $order->updated_at }}</th>
                </tbody>
            @endforeach
        </table>
        <p>*0: still on cart, 1: paid and confirmed, 2: confirmed by admin, 3: received</p>
    </div>
@endsection
