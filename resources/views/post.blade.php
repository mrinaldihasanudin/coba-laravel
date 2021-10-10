@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                        {{ $post->title }}
                    </h1>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}?" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    <p class="mt-3">
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    <article class="my-3 fs-5 text-justify">
                    <p>
                    {!! $post->body !!}
                    </p>
                    </article>
                <a href="/posts" class="text-decoration-none btn btn-primary mt-3">Back to post</a>
            </div>
        </div>
    </div>
@endsection
