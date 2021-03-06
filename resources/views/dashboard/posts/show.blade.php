@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">
                    {{ $post->title }}
                </h1>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}?" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                <a href="/dashboard/posts" class="btn btn-success mt-3"><span data-feather="arrow-left"></span> Back to all my posts
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-3"><span data-feather="edit"></span> Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mt-3" onclick="return confirm('are you sure for delete this ?')">
                      <span data-feather="x-circle"></span>Delete
                    </button>
                </form>
                <article class="my-3 fs-5 text-justify">
                <p>
                {!! $post->body !!}
                </p>
                </article>
            <a href="/dashboard/posts" class="text-decoration-none btn btn-primary mt-3">Back to post</a>
        </div>
    </div>
</div>
@endsection