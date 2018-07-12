@extends('layouts.default')
@section('title', 'Edit')

@section('content')
    <div class="form-container">
        <form action="{{ route('users.update', $user) }}" class="form" method="POST">
            @include('shared._errors')

            <a href=" {{ route('users.show', $user->id) }}" class="user-info__container">
                <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
            </a>

            @csrf
            @method('PATCH')

            <div class="form__group">
                <label for="name" class="form__label">Name:</label>
                <input type="text" class="form__input" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="form__group">
                <label for="email" class="form__label">Email:</label>
                <input type="email" class="form__input" name="email" id="email" value="{{ $user->email }}" disabled>
            </div>
            <div class="form__group">
                <label for="password" class="form__label">Password:</label>
                <input type="password" class="form__input" name="password" id="password">
            </div>
            <div class="form__group">
                <label for="password_confirmation" class="form__label">Confirm Password:</label>
                <input type="password" class="form__input" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="form__btn-container">
                <button class="btn btn-primary form__btn">Update</button>
            </div>
        </form>
    </div>
@endsection