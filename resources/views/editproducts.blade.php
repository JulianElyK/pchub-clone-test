@extends('layouts.main')

@section('container')
    <div class="judul">
        <h1>Edit Product</h1>
        <!-- <hr class="line"> -->
    </div>
    <div class="edit-product">
        <form method="post" action="/editproducts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="category">Category</label>
                <input type="category" class="form-control" id="category" name="category" value="{{ $product->category }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" aria-label="Harga dalam Rupiah" name="price" value="{{ $product->price }}">
                <div id="priceHelp" class="form-text">Masukan Harga dalam satuan Rupiah</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="compability">Compability</label>
                <input type="compability" class="form-control" id="compability" name="compability" value="{{ $product->compability }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="vendor">Vendor</label>
                <input type="vendor" class="form-control" id="vendor" name="vendor" value="{{ $product->vendor }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="stock">Stock</label>
                <input type="stock" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <input type="description" class="form-control" id="description" name="description" value="{{ $product->description }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Path: {{ $product->image }}</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection