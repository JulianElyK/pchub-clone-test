@extends('layouts.main')

@section('container')
    <h1>
        @foreach ($product as $item)
            <h1>{{ $item->name }}</h1><tr>
        @endforeach
    </h1>
@endsection