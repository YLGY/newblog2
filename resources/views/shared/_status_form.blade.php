<form action="{{ route('statuses.store') }}" class="form" method="POST">
    @csrf

    @include('shared._errors')

    <div class="form__group">    
        <textarea name="content" id="content" cols="3" class="form__input">
            {{ old('content') }}
        </textarea>
    </div>

    <div class="form__btn-container">
        <button class="btn btn-primary form__btn">Post</button>
    </div>
</form>