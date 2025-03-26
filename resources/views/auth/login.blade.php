@extends('navbar')  <!-- Extend the navbar layout -->

@section('title', 'Login Page')  <!-- Set the page title -->

@section('content')
    <div class="form-container">
        <h3>Login</h3>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-cancel">Cancel</button>
                <button type="submit" class="btn btn-login">Login</button>
            </div>
        </form>
    </div>
@endsection
