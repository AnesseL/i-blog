@extends('layouts.master')
@section('title', 'I-Blog - Home - All Posts')
@section('content')
    <h1 class="text-center pt-3">All News</h1>
    <div class="col my-5">
        @foreach ($posts as $post)
        @if($post->type === 'text')  
        <article class="postText col-md-9 mb-4">
          <div class="row border overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <a href="{{ route('posts.post', $post->slug )}}" class="text-decoration-none mb-3 text-white">
                <h2 >{{ $post->title }}</h2>
              </a>
              <div class="mb-1">
                <a href="{{ route('admin.post.edit', $post->id) }}" class="text-decoration-none text-danger">
                  <i class="bi bi-pencil-square"></i>
                  Edit Post</a>
              </div>
              <div class="mb-1 text-primary">
                <i class="bi bi-calendar"></i>
                {{ $post->date }}
              </div>
              <p class="card-text mb-auto">{{ $post->excerpt }}
                <a href="{{ route('posts.post', $post->slug )}}" class="stretched-link text-decoration-none text-white">
                  &#187; Continue reading &raquo;
                </a>
              </p>
            </div>
          </div>
        </article>
        @elseif($post->type === 'photo')  
        <article class="postPhoto col-md-9 mb-4">
          <div class="row border overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-absolute z-index-1">
              <a href="{{ route('posts.post', $post->slug )}}" class="text-decoration-none mb-3 text-white">
                <h2 >{{ $post->title }}</h2>
              </a>
              <div class="mb-1">
                <a href="{{ route('admin.post.edit', $post->id) }}" class="text-decoration-none text-danger">
                  <i class="bi bi-pencil-square"></i>
                  Edit Post</a>
              </div>
              <div class="mb-1 text-muted">
                <i class="bi bi-calendar"></i>
                {{ $post->date }}
              </div>
            </div>
            <figure class="figure col-auto d-block p-0 mb-0">
                <a href="{{ route('posts.post', $post->slug )}}" class="col-auto d-block">
                    <img src="{{ $post->image }}" alt="" class="img-fluid bd-placeholder-img">
                </a>
            </figure>
          </div>
        </article>
        @endif
        @endforeach
        <div class="pagination col m-auto text-center">
          @include('partials.pagination', ['pagination'=> $posts])
        </div>
      </div>
@endsection