@extends('layouts.main')

@section('container')

<div class="container">
    <div class="body-profile data-customer">
        <h1>Data Diri</h1>
        <div class="size-profile">
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $customer->name }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $customer->email }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $customer->phone }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <form method="get" action="/edituser">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
