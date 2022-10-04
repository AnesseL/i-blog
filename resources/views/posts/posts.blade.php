@extends('layouts.master')
@section('title', 'Home - All Posts')
@section('content')
    <h1 class="text-center pt-3">All News</h1>
    <div class="col my-5">
        @foreach ($posts as $post)
        @if($post->type === 'text')  
        <article class="postText col-md-9 mb-4">
          <div class="row border overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h2 class="mb-3">{{ $post->title }}</h2>
              <div class="mb-1 text-primary">{{ $post->date }}</div>
              <p class="card-text mb-auto">{{ $post->content }}</p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
          </div>
        </article>
        @elseif($post->type === 'photo')  
        <article class="postPhoto col-md-9 mb-4">
          <div class="row border overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-absolute z-index-1">
              <h2 class="mb-3">{{ $post->title }}</h2>
              <div class="mb-1 text-muted">{{ $post->date }}</div>
            </div>
            <figure class="figure col-auto d-block p-0 mb-0">
                <a href="" class="col-auto d-block">
                    <img src="{{ $post->image }}" alt="" class="img-fluid bd-placeholder-img">
                </a>
            </figure>
          </div>
        </article>
        @endif
        @endforeach
      </div>
@endsection