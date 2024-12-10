@extends('layout.layout')

@section('content')
@include('components.navBarLanding')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
                            <form action="{{ route('login.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="email" class="form-control form-control-lg" name="email" required />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4 d-flex align-items-center">
                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" required />
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5>Doesn't Have An Account? <a href="{{ route('Register.create') }}">Register</a></h5>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
