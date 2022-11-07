@extends('layouts.master')
@section('title', 'I-Blog - Register')   
@section('content')
<h1 class="text-center pt-3">Registration Form</h1>
<div>
  @include('partials.message')
</div>
<form method="POST" action="{{ route('account.register') }}" class="row  m-auto py-5 form-group text-start">
    @csrf
      <div class="col-10 mb-4">
        <label for="name" class="col-3">Name</label>
        <input id="name" type="text" class="col-7 {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required >
      </div>
      <div class="col-10 mb-4">
        <label for="email" class="col-3">Email Address</label>
        <input id="email" type="email" class="col-7 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('Email address') }}" required>
      </div>
      <div class="col-10 mb-4">
         <label for="password" class="col-3">Password</label>
         <input id="password" type="password" class="col-7 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" value="" required>
      </div>
      <div class="col-10 mb-4">
         <label for="password-confirm" class="col-3">Password confirm</label>
         <input id="password-confirm" type="password" class="col-7" placeholder="Password confirm" name="password_confirmation" value=""  autocomplete="new-password" required>
      </div>  
      <div class="col-10 mt-3">
          <button type="submit" class="col-2 btn btn-primary">Submit</button>
      </div>   
  </form>
@endsection