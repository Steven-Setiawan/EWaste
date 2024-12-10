@extends('layout.layout')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px">
                    <h3 class="text-dark">Add New Collection Center</h3>
                    <a href="{{ route('admin.home') }}" class="btn btn-dark">Return</a>
                </div>
              <form action="{{ route('add.collection') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="cityname" name="cityname" class="form-control form-control-lg" value="{{ old('cityname') }}" />
                      <label class="form-label" for="cityname">City Name</label>
                      @error('cityname')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="collection_center_name" name="collection_center_name" class="form-control form-control-lg" value="{{ old('collection_center_name') }}" />
                        <label class="form-label" for="collection_center_name">Collection Center Name</label>
                        @error('collection_center_name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 12px">
                  <div class="col-md-12 mb-2 pb-2">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="address" name="address" class="form-control form-control-lg" value="{{ old('address') }}" />
                      <label class="form-label" for="address">Address</label>
                      @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="contact_number" name="contact_number" class="form-control form-control-lg" value="{{ old('contact_number') }}" />
                            <label class="form-label" for="contact_number">Contact Number</label>
                            @error('contact_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="operating_hours" name="operating_hours" class="form-control form-control-lg" value="{{ old('operating_hours') }}" />
                            <label class="form-label" for="operating_hours">Operating Hours</label>
                            @error('operating_hours')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="photo" class="form-label">Collection Center Photo</label>
                        <input class="form-control" type="file" name="photo" id="photo">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
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
