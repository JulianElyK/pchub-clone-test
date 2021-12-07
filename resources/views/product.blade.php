@extends('layouts.main')

@section('container')
<div class="list-product">
    <div class="list-product-container">
        @foreach ($product as $item)
        {{-- css ada di custom.style.css --}}

        
            <div class="card" style="width: 20rem;">
                <div class="size-img">
                    <img src="{{ asset('storage/product-images'. $item->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <div id="posisi" class="position-absolute bottom-0 end-0">
                        <a href="/product/{{ $item->id }}" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>

        @endforeach
        <div class="clear"></div>
    </div>
</div>
@endsection
