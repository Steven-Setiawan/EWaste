@extends('layout.layout')

@section('content')
@include('components.navBarLanding')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form action="{{ route('Register.register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" />
                      <label class="form-label" for="name">Name</label>
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                    <div data-mdb-input-init class="form-outline">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" />
                      <label class="form-label" for="email">Email</label>
                      @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div data-mdb-input-init class="form-outline datepicker w-100">
                        <input type="password" class="form-control form-control-lg" id="password" name="password" />
                        <label for="password" class="form-label">Password</label>
                        @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
                        @error('dob')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                  <div class="col-md-6 mb-4">
                    <h6 class="mb-2 pb-1">Gender: </h6>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
                    @error('gender')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row" style="margin-top: 12px">
                  <div class="col-md-6 mb-2 pb-2">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="address" name="address" class="form-control form-control-lg" value="{{ old('address') }}" />
                      <label class="form-label" for="address">Address</label>
                      @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6 mb-2 pb-2">
                    <div class="col-8">
                        <select class="select form-control-lg" name="city">
                          <option value="1" disabled>Choose option</option>
                          @foreach ($Cities as $city)
                            <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>{{ $city->CityName }}</option>
                          @endforeach
                        </select>
                        <label class="form-label select-label">City</label>
                        @error('city')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="photo" class="form-label">Profile Photo</label>
                        <input class="form-control" type="file" name="photo" id="photo">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <h5>Have An Account? <a href="{{ route('Login.index') }}">Login</a></h5>
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
