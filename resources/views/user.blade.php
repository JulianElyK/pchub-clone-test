@extends('layouts.main')

@section('container')

<div class="header-product">
    {{-- untuk foto profile --}}
    <div class="img-product">
        <img src="img/RAZER BLADE 15.jpg" alt="">
    </div>
    {{-- data diri --}}
    <div class="info-product">
        <h3>Biodata Diri</h3>
        <div class="konten">
            <label>Nama:</label>
            <div>{{ Session::get('name') }}</div>
        </div>
        <div class="konten">
            <label>Email:</label>
            <div>{{ Session::get('email') }}</div>
        </div>
        <div class="konten">
            <label>No. Telp:</label>
            <div>{{ Session::get('phone') }}</div>
        </div>
    </div>
    <form method="post" action="#" class="mb-5">
        <div id="upload-profil" class="mb-3">
            <label for="image" class="form-label">Ganti/Upload Foto</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
