@extends('layouts.main')

@section('container')
    <div class="container-left">
        <h2>Register</h2>
        <p>Please fill this form to create an account.</p>
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
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
@endsection
