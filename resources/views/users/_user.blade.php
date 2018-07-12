<li class="users__item">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="users__img">
    
    <div class="users__right">
        <a href="{{ route('users.show', $user->id) }}" class="users__name">{{ $user->name }}</a>

        @can('destroy', $user)
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="users__form">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @endcan
    </div>
</li>