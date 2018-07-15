@extends('layouts.default')
@section('title', 'Home')

@section('content')
    @if (Auth::check())
        <div class="home">
            <div class="home__form">
                @include('shared._status_form')
                
                <div class="statuses-container">
                    <h3>Status List</h3>
                    @include('shared._feed')
                </div>
            </div>
            <div class="home__user">
                @include('shared._user_info', ['user' => Auth::user()])
            </div>
        </div>
    @else
        <div class="content">
            <h1 class="content__heading">
                Hello Blog 2
            </h1>
            <p class="content__text">
                This is the second one
            </p>
            <p>
                <a href="{{ route('signup') }}" class="btn btn-lg btn-success">Register Now</a>
            </p>
        </div>
    @endif
@endsection