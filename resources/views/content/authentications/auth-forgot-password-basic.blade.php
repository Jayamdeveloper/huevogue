@extends('layouts/adminLogin')

@section('title', 'Forgot Password')

<!-- @section('page-style')

<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection -->

@section('layoutContent')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">

            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-2">
                        <a href="{{url('/Login')}}" class="app-brand-link gap-2">
                            <img src="{{ asset('assets/logo-dark.png') }}" class="company-logo" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Forgot Password? </h4>
                    <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                    <form id="formAuthentication" class="mb-3" action="{{url('/admin/dashboard')}}" method="GET">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email" autofocus>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="{{url('/Login')}}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>
@endsection