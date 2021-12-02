@extends('layouts.main')

@section('container')
<form method="post" action="addproducts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="name" class="form-control" id="name" name="name">
      <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label class="form-label" for="category">Category</label>
      <input type="category" class="form-control" id="category" name="category">
    </div>
    <div class="input-group mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" aria-label="Harga dalam Rupiah" name="price">
        <div id="priceHelp" class="form-text">Masukan Harga dalam satuan Rupiah</div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="compability">Compability</label>
        <input type="compability" class="form-control" id="compability" name="compability">
    </div>
    <div class="mb-3">
        <label class="form-label" for="vendor">Vendor</label>
        <input type="vendor" class="form-control" id="vendor" name="vendor">
    </div>
    <div class="mb-3">
      <label class="form-label" for="description">Description</label>
      <input type="description" class="form-control" id="description" name="description">
  </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection