@extends('layouts.main')
@section('container')
    <div class="show-title">
        <h1>All Product</h1>
        <hr class="line">
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Compability</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Vendor</th>
                <th scope="col">Description</th>
                <th scope="col">Stock</th>
            </thead>
            @foreach ($product as $item)
                <tbody>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->compability }}</th>
                    <th>{{ $item->name }}</th>
                    <th>{{ $item->price }}</th>
                    <th>{{ $item->category }}</th>
                    <th>{{ $item->vendor }}</th>
                    <th>{{ $item->description }}</th>
                    <th>{{ $item->stock }}</th>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
