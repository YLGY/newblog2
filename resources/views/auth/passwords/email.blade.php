@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
<div class="form-container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('password.email') }}" class="form" method="POST">
        @csrf

        <div class="form__group">
            <label for="email" class="form__label">Email:</label>
            <input type="email" class="form__input" name="email" id="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="form__help">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__btn-container">
            <button class="btn btn-primary form__btn">Send password reset email</button>
        </div>
    </form>
</div>
@endsection