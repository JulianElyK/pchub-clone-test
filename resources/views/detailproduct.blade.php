@extends('layouts.main')


{{-- detail produk (/detail). css di custom.style.css --}}

@section('container')
@if (session()->has('signin_error'))
        <div class="alret alert-danger alertdismissible fade show" role="alert">
                {{ session('signin_error') }}
        </div>
@endif
<div class="detail-product-container">
    <div class="img-product">
        <img src="{{ asset('storage/'. $product->image) }}" alt="">
    </div>
    <div class="info-product">
        <h2>{{ $product->name }}</h2>
        <div class="konten">
            <div class="konten-label">
                <ul>
                    <li>Price</li>
                    <li>Stock</li>
                </ul>
            </div>
            <div class="konten-label-value">
                <ul>
                    <li>: {{ $product->price }}</li>
                    <li>: {{ $product->stock }}</li>
                </ul>
            </div>
        </div>
        <div class="detail-product-form">
            <form action="/detailproduct/{{ $product->id }}" method="POST">
                @csrf
                <ul>
                    <li>Jumlah: <input type="number" class="banyak" id="quantity" name="quantity" min="1" max="1000"></li>
                    <div class="detail-product-button">
                        @if (Session::get('user') == 'customer')
                            <li><button type="submit" name="beli" class="btn btn-primary" value="Beli"><i class="fal fa-shopping-cart"></i> Add to Cart</button></li>
                        @else
                            <li><button type="submit" name="beli" class="btn btn-primary disabled" value="Beli"><i class="fal fa-shopping-cart"></i> Add to Cart</button></li>
                        @endif
                    </div>
                </ul>
            </form>
        </div>
    </div>
    <div class="desc-product">
        <h4>Description</h4>
        <div>
            <h5>{{ $product->description }}</h5>
        </div>
    </div>
</div>


@endsection
