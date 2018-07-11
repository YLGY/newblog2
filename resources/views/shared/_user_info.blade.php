<a href=" {{ route('users.show', $user->id) }}" class="user-info__container">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar">
</a>
<h1>{{ $user->name }}</h1>