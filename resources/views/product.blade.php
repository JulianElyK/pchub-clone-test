@extends('layouts.main')

@section('container')
@foreach ($product as $item)
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'. $item->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $item->name }}</h5>
        <p class="card-text">{{ $item->description }}</p>
        <a href="/product/{{ $item->id }}" class="btn btn-primary">Lihat Produk</a>
        </div>
    </div>
@endforeach
@endsection