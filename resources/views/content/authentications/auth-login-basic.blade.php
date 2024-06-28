@extends('layouts/adminLogin')

@section('title', 'Login')

<!-- @section('page-style')

<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection -->

@section('layoutContent')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-2">
                        <a href="{{url('/Login')}}" class="app-brand-link gap-2">
                            <img src="{{ asset('assets/logo-dark.png') }}" class="company-logo" alt="">
                        </a>
                    </div>

                    <!-- <form id="formAuthentication" class="mb-3" action="{{url('/admin/dashboard')}}" method="GET"> -->
                    <form id="formAuthentication" class="mb-3" action="{{route('admin.login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="text" class="form-control" id="email" name="username" placeholder="Enter your email or username" value="" autofocus required>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" value="" required />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <!-- <div class="mb-3">
                            <a href="{{route('admin-forgot-password')}}">
                                <small>Forgot Password?</small>
                            </a>
                        </div> -->

                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    @if(session('success'))
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        close: true,
        gravity: "top", // Position of the toast
        position: 'right', // Position of the toast
        backgroundColor: "#4CAF50", // Background color of the toast
        stopOnFocus: true // Stop auto close when the toast is focused
    }).showToast();
    @endif

    @if(session('error'))
    Toastify({
        text: "{{ session('error') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: 'right',
        backgroundColor: "#FF0000",
        stopOnFocus: true
    }).showToast();
    @endif
</script>

@endsection