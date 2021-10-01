@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin"> 
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                <form action="/register" method="POST">
                  @csrf
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name') 
                    <div class="invlaid-feedback">
                      {{ $message }}
                     </div> 
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username') 
                    <div class="invlaid-feedback">
                      {{ $message }}
                     </div> 
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email') 
                    <div class="invlaid-feedback">
                      {{ $message }}
                     </div> 
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('nama') }}">
                    <label for="password">Password</label>
                    @error('password') 
                    <div class="invlaid-feedback">
                      {{ $message }}
                     </div> 
                    @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">
                    Back to login <a href="/login">Login</a>
                </small>
              </main>
        </div>
    </div>

@endsection