@extends('layouts.main')
@section('container')
    <div class="container">
        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            <p>
                {{ $post->body }}
            </p>
        </article>
        <a href="/posts" class="text-decoration-none">Back to post</a>
    </div>
@endsection
