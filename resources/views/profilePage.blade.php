@extends('layout.layout')
@extends('components.navBar')

@section('content')

    <div class="container-fluid mt-5">
        <div class="row mx-1 mb-4">
            <!-- Empty space for margin -->
        </div>

        <div class="row">
            <!-- Profile Image -->
            <div class="col-md-4 text-center mb-4">
                <img src="{{ asset(auth()->user()->photo) }}" class="border shadow-lg mb-3" alt="Profile Picture" width="450px" height="450px" style="margin-top: 50px">
                <h3 class="text-primary">{{ auth()->user()->name }}</h3>
            </div>

            <!-- Update Profile Form -->
            <div class="col-md-8">
                <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data" class="card p-4 shadow-lg rounded-lg">
                    @csrf
                    @method('PUT')

                    <h4 class="text-center text-primary mb-4">Update Your Profile</h4>

                    <!-- User ID (disabled) -->
                    <div class="mb-3">
                        <label for="uid" class="form-label">User ID</label>
                        <input type="text" name="uid" id="uid" class="form-control" value="{{ old('name', auth()->user()->id) }}" disabled>
                    </div>

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', auth()->user()->name) }}" />
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" />
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address', auth()->user()->address) }}" />
                        @error('address')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Profile Picture -->
                    <div class="mb-3">
                        <label for="photo" class="form-label">Profile Picture</label>
                        <input type="file" name="photo" id="photo" class="form-control" />
                        @error('photo')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Update Profile" />
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        /* Custom Styling */
        .container-fluid {
            max-width: 1200px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .alert-danger {
            font-size: 0.9rem;
        }

        .card {
            background-color: #f9f9f9;
        }

        .shadow-lg {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .text-primary {
            color: #007bff !important;
        }

        /* Form input field focus style */
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }
    </style>
@endpush
