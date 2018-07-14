@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
<div class="form-container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.update') }}" class="form" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form__group">
            <label for="email" class="form__label">Email:</label>
            <input type="email" class="form__input" name="email" id="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="form-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form__group">
            <label for="password" class="form__label">Password: 
                ( <a href="{{ route('password.request') }}">Forget Password</a> )
            </label>
            <input type="password" class="form__input" name="password" id="password">
            @if ($errors->has('password'))
                <span class="form-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form__group">
            <label for="password_confirmation" class="form__label">Password: 
                ( <a href="{{ route('password.request') }}">Forget Password</a> )
            </label>
            <input type="password" class="form__input" name="password_confirmation" id="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="form-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__btn-container">
            <button class="btn btn-primary form__btn">Update Password</button>
        </div>
    </form>
</div>
@endsection