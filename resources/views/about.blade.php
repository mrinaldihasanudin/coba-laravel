@extends('layouts.main')
@section('container')
    <section>
        <div class="container">
            <h1>Hallo World</h1>
            <h2>{{ $name }}</h2>
            <h3>{{ $email }}</h3>
            <img src="{{ $image }}" alt="{{ $name }}" />
        </div>
    </section>
@endsection
