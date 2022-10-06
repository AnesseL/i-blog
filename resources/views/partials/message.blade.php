@if($errors->count())
    <div class="message is-error">
        @foreach ($errors->all() as $error)
          {{ $error }}
        @endforeach
    </div>
@endif
@if(session('message'))
    <div class="message">{{ session('message') }}</div>
@endif