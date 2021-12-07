@extends('layouts.main')

@section('container')
@foreach ($product as $item)
{{-- css ada di custom.style.css --}}

<div class="list-product">
    <div class="card" style="width: 20rem;">
        <div class="size-img">
            <img src="{{ asset('img/'. $item->image) }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <div id="posisi" class="position-absolute bottom-0 end-0">
                <a href="/product/{{ $item->id }}" class="btn btn-primary">Lihat Produk</a>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection
