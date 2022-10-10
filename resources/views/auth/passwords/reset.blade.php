@extends('layouts.master')
@section('title', 'I-Blog Reset Password')
    
@section('content')
<h1 class="text-center pt-3">Reset Password</h1>
<div>
    @include('partials.message')
  </div>
  <form method="POST" action="{{ route('password.update') }}" class="row  m-auto py-5 form-group text-start">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}" />
        <div class="col-10 mb-4">
          <label for="email" class="col-3">Email Address</label>
          <input id="email" type="email" class="col-7 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your e-mail" name="email" value="{{ old('Email address') }}" required>
        </div>
        <div class="col-10 mb-4">
            <label for="password" class="col-3">Password</label>
            <input id="password" type="password" class="col-7 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="New Password" name="password" value="Password" required>
         </div>

         <div class="col-10 mb-4">
            <label for="" class="col-3">Password confirm</label>
            <input id="password-confirm" type="password" class="col-7 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="New Password Again" name="password_confirmation" value=""  autocomplete="new-password" required>
         </div>  

        <div class="col-10 mt-3">
            <button type="submit" class="col-2 btn btn-primary">Reset</button>
        </div>   
    </form>
@endsection
