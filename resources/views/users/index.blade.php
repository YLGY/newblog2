@extends('layouts.default')
@section('title', 'User List')

@section('content')
    <div class="users-container">
        <h1>Users List</h1>
        <ul class="users">
            @foreach ($users as $user)
                @include('users._user')
            @endforeach
        </ul>
        {!! $users->render() !!}
    </div>
@endsection