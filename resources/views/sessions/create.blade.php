@extends('layouts.default')
@section('title', 'Login')

@section('content')
<div class="form-container">
    <form action="{{ route('login') }}" class="form" method="POST">
        @include('shared._errors')

        @csrf

        <div class="form__group">
            <label for="email" class="form__label">Email:</label>
            <input type="email" class="form__input" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form__group">
            <label for="password" class="form__label">Password: 
                ( <a href="{{ route('password.request') }}">Forget Password</a> )
            </label>
            <input type="password" class="form__input" name="password" id="password">
        </div>
        <div class="form__group">
            <label for="remember"><input type="checkbox" id="remember" name="remember">
                Remember Me
            </label>
        </div>

        <div class="form__btn-container">
            <button class="btn btn-primary form__btn">Login</button>
        </div>

        <p>Not have account? <a href="{{ route('signup') }}">Register Now!</a></p>
    </form>
</div>
@endsection