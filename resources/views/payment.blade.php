@extends('layouts.main')

@section('container')
    <div class="container-left">
        <h2 class="h2-regis">Select Payment Method</h2>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="option" id="creditcard" autocomplete="off" checked> Credit Card
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="option" id="banktransfer" autocomplete="off"> Bank Transfer
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="option" id="paypal" autocomplete="off"> PayPal
            </label>
        </div>
        <form action="/" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" name="namecard" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Card Number</label>
                <input type="email" name="cardnum" class="form-control" required>
            </div>
        </form>
    </div>
    <div class="container-right">
        <h2 class="h2-in">Order Summary</h2>
        <form>
            <!-- Bagian Isi Order -->
            <div class="form-group">
                <h2 class="h2-in">Friday</h2><br>
                <h3 class="h2-in">July 31, 2021 | 06.00 PM</h3>
            </div>
            <div class="form-group">
                <input type="submit" name="pay" class="btn btn-primary" value="PURCHASE NOW">
            </div>
        </form>
    </div>
    <div class="clear"></div>
@endsection
