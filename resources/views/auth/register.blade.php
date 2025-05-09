<!-- Extending the guest layout -->
@extends('layouts.guest')

<!-- Set the page title -->
@section('title', '- Register')

@section('content')
    <section class="auth-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{ asset('images/auth-banner.jpg') }}" alt="auth banner"
                        class="w-100 h-100 object-fit-cover rounded-4 my-3" />
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="auth-form-wraper my-3">
                        <div class="mb-3 text-center">
                            <h1 class="poppins-semibold mb-3">Create new Account</h1>
                            <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe autem non facilis optio nemo vel corporis laudantium nostrum fugit esse ea minus provident vitae quae, labore accusamus explicabo quo voluptatibus?</small>
                        </div>

                        <form class="w-100">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="full_name" id="full_name" class="form-control" placeholder="John Doe">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" id="phone" class="form-control" placeholder="John Doe">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="mb-3 mt-4">
                                <button class="btn btn-dark py-3 w-100">Register</button>
                            </div>

                            <div class="mb-3 text-center">
                                <small>Already Have an Account?
                                    <a href="{{ route('login') }}" class="text-primary poppins-medium"> Sign in</a>
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
