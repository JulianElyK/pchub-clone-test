@extends('layouts.main')

@section('container')
    <div class="container-left">
        @if (session()->has('success'))
            <div class="alert alert-success alertdismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="h2-regis">Register</h2>
        <p class="p-regis">Please fill this form to create an account.</p>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" name="confirm" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="register" class="btn btn-primary" value="Sign Up">
            </div>
        </form>
    </div>
    <div class="container-right">
        @if (session()->has('loginError'))
            <div class="alert alert-danger alertdismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
        @endif
        <h2 class="h2-in">Login</h2>
        <p class="p-in">Please fill in your credentials to login.</p>
        <form action="/signin" method="post">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required id="signin_email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required id="signin_password">
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
    <div class="clear"></div>
@endsection
