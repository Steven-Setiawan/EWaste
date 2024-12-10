@extends('layout.layout')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-lg-9 col-xl-7">
                    <a href="{{ route('customer.page') }}" class="btn btn-link back-btn">
                        <i class="fa fa-arrow-left"></i>
                    </a>

                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add EWaste</h3>
                            <form action="{{ route('ewaste.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" />
                                            <label class="form-label" for="name">Item Name</label>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="description" name="description" class="form-control form-control-lg" value="{{ old('description') }}" />
                                            <label class="form-label" for="description">Description</label>
                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <label for="image" class="form-label">Item Image</label>
                                        <input class="form-control" type="file" name="image" id="image">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2 pb-2">
                                        <div class="col-8">
                                            <label class="form-label select-label">ItemType</label>
                                            <select class="select form-control-lg" name="ItemType">
                                              <option value="1" disabled>Choose option</option>
                                              @foreach ($ItemType as $Type)
                                                <option value="{{ $Type->id }}" {{ old('ItemType') == $Type->id ? 'selected' : '' }}>{{ $Type->TypeName }}</option>
                                              @endforeach
                                            </select>
                                            @error('ItemType')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                          </div>
                                      </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mt-4 pt-2">
                                        <input data-mdb-ripple-init class="btn btn-primary btn-lg w-100" type="submit" value="Submit" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 20px;
            color: #032f5e;
            text-decoration: none;
            display: flex;
            align-items: center;
            z-index: 1000;
        }

        .back-btn:hover {
            color: #0056b3;
            text-decoration: none;
        }

        .back-btn i {
            margin-right: 5px;
        }
    </style>
@endpush
