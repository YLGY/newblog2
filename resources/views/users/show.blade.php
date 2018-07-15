@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <section class="user-info">
        @include('shared._user_info')
    </section>
    <div class="status-container">
        @if (count($statuses) > 0)
            <ol>
                @foreach ($statuses as $status)
                    @include('statuses._status')
                @endforeach
            </ol>
            {!! $statuses->render() !!}
        @endif
    </div>
@endsection