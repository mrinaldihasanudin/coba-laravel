@extends('layouts.main')
@section('container')
    <section>
        <div class="container">
            <h1 class="mb-5">Post Category : {{ $name_category }}</h1>
            @foreach ($posts as $post)
                <article class="mb-5">
                    <h2>
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                    </h2>
                    {{ $post->excerpt }}
                </article>
            @endforeach
        </div>
    </section>
@endsection