@extends('layouts.master')
@section('title', 'I-Blog Verify Email')
    
@section('content')
<h1 class="text-center pt-3">Verify Your Email Address</h1>
    <div>
    @include('partials.message')
    </div>
    <div class="row  m-auto py-5 form-group text-start">
        {{-- <p>Didn't get an email?
            <a href="{{ route('verification.resend') }}">
            Request antother.</a>
           </p> --}}
        <p>Before proceeding, please check your email for a verification link.</p>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <p>If you did not receive the email:
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-white">Click here to request another!</button>
            </p>
        </form>
    </div>
@endsection
