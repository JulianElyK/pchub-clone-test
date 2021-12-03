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

        @foreach ($customer as $member)
            <p>{{$member->name}}</p>
        @endforeach

    </div>
</div>
@endsection
