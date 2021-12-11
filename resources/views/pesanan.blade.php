@extends('layouts.main')
@section('container')
<div class="container-md mt-3">
    @if (session()->has('itemReceived'))
    <div class="alret alert-success" role="alert">
        {{ session('itemReceived') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </thead>
            @foreach ($orders as $order)
                <tbody>
                    <th schope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->date }}</td>
                    @if ($order->status == 0)
                        <td>Not yet Pay the Order</td>
                    @elseif($order->status == 1)
                        <td>Order in Progress</td>
                    @elseif($order->status == 2)
                        <td>Item is in delivary</td>
                    @else
                        <td>Item was Received</td>
                    @endif
                    <td>
                        @if ($order->status == 2)
                            <form action="/order/{{ $order->id }}" method="post">
                                @csrf
                                <button class="badge bg-success border-8" style="color: #6ECB63" onclick="return confirm('Are Yout Sure?')">Sudah Diterima</button>
                            </form>
                        @endif
                    </td>
                </tbody>
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