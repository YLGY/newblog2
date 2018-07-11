@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <section class="user-info">
        @include('shared._user_info', ['user' => $user])
    </section>
@endsection