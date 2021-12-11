@extends('layouts.main')

@section('container')

<div class="container">
    <div class="body-profile">
        <div class="row">
            <div class="image-profile col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ $customer->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-customer col-md-6">
                <div class="size-profile">
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="mb-0">Full Name</h6>
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
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            -
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-info " target="blank" href="#">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
