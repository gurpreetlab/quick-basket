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
                            <h1 class="poppins-semibold mb-3">Reset Password</h1>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolores, maiores non pariatur error aut?</small>
                        </div>

                        <form class="w-100">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-dark py-3 w-100">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
