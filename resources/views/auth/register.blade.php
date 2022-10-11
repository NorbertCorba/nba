@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <form method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"/>
        </div>
        <br>

        @error('name')
        @include('partials.error')
        @enderror
        
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control"/>
        </div>
        <br>

        @error('email')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control"/>
        </div>
        <br>

        @error('password')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control"/>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
