@extends('layouts.main')

@section('container')
<div class="judul" style="margin-bottom:-2rem">
    @if($title=="Product")
        <h1>Showing All Products</h1>
    @else
        <h1>{{ $result }}</h1>
    @endif      
</div>
<div class="list-product">
    <div class="list-product-container">
        @foreach ($product as $item)
        {{-- css ada di custom.style.css --}}

        @if($item->compability!=0)
            <div class="card" style="width: 20rem;">
                <div class="size-img" style="overflow: hidden;">
                    <img src="{{ asset('storage/'. $item->image) }}" class="card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <div id="posisi" class="position-absolute bottom-0 end-0">
                        <a href="/product/{{ $item->id }}" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>
        @endif

        @endforeach
        <div class="clear"></div>
    </div>
</div>
@endsection
