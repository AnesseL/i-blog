@extends('layouts.master')
@section('title', 'I-Blog Login')
    
@section('content')
<h1 class="text-center pt-3">Login Form</h1>
<div>
    @include('partials.message')
  </div>
  <form method="POST" action="{{ route('account.login') }}" class="row  m-auto py-5 form-group text-start">
      @csrf
        <div class="col-10 mb-4">
          <label for="email" class="col-3">Email Address</label>
          <input id="email" type="email" class="col-7 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your e-mail" name="email" value="{{ old('Email address') }}" required>
        </div>
        <div class="col-10 mb-4">
           <label for="password" class="col-3">Password</label>
           <input id="password" type="password" class="col-7 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" value="Password" required>
        </div>
        <div class="col-10 mt-3">
            <button type="submit" class="col-2 btn btn-primary">Submit</button>
        </div>   
    </form>
    <div>
        <p>New to I-Blog? Create an account &#187; 
            <a href="{{ route('account.register') }}" class="text-decoration-none text-white">
                Register
            </a>
        </p>
        <p>Forgot password? &#187; 
            <a href="" class="text-decoration-none text-white">
                Reset your password
            </a>
        </p>
    </div>
@endsection
