<!-- Extending the guest layout -->
@extends('layouts.guest')

<!-- Set the page title -->
@section('title', '- Login')

@section('content')
    <section class="auth-section">
        <div class="container-fluid">
            <div class="row auth-form-row">
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{ asset('images/auth-banner.jpg') }}" alt="auth banner"
                        class="w-100 h-100 object-fit-cover rounded-4 my-3" />
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="auth-form-wraper my-3">
                        <div class="mb-3 text-center">
                            <h1 class="poppins-semibold mb-3">welcome!</h1>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, minima. </small>
                        </div>

                        <form class="w-100" action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="form-check-input m-0">
                                    <label for="remember-me" class="form-check-label text-gray mb-0">
                                        <small>Remember Me</small>
                                    </label>
                                </div>

                                <div>
                                    <label class="form-label m-0"><a href="{{ route('forgot-password') }}">Forgot
                                            password?</a></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark py-3 w-100">Login</button>
                            </div>

                            <div class="mb-3 text-center">
                                <small>Don't Have an Account?
                                    <a href="{{ route('register') }}" class="text-primary poppins-medium"> Sign Up</a>
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
