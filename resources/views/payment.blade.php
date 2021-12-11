@extends('layouts.main')

@section('container')
    <div class="container-left">
        <h2 class="h2-regis">Select Payment Method</h2>
        
        <form action="/payment" method="post">
            @csrf
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="payment" value="Credit Card" autocomplete="off" checked> Credit Card
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="payment" value="Bank Transfer" autocomplete="off"> Bank Transfer
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="payment" value="PayPal" autocomplete="off"> PayPal
                </label>
            </div>
            <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" id="name" name="namecard" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cardnumber">Card Number</label>
                <input type="cardnumber" id="cardnumber" name="cardnum" class="form-control" required>
            </div>
            <h2 class="h2-regis">Select Expedition Method</h2>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="shipment" value="JNE" autocomplete="off" checked> JNE
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="shipment" value="J&T" autocomplete="off"> J&T
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="shipment" value="Ninja Express" autocomplete="off"> Ninja Express
                </label>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="address" id="address" name="address" class="form-control" required>
            </div>
            </div>
            <div class="container-right">
                <h2 class="h2-in">Order Summary</h2>
                    <!-- Bagian Isi Order -->
                <div class="form-group">
                    <h3 class="h2-in">{{ date('l, d-m-Y'); }}</h3>
                </div>
                <div class="form-group">
                    <input type="submit" name="pay" class="btn btn-primary" value="PURCHASE NOW">
                </div>
        </form>
    </div>
    <div class="clear"></div>
@endsection
