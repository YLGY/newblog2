@extends('layouts.default')
@section('title', 'Home')

@section('content')
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
@endsection