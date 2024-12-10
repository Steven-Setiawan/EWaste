@extends('layout.layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div>
        @include('components.navBar')
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-primary">Welcome To Your Home Page</h1>
                <p class="lead text-muted">This is your personal dashboard where you can manage your EWaste orders.</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-4 text-center">
                <h3>{{ auth()->user()->name }}</h3>
                <div class="profile d-flex flex-column align-items-center">
                    <img src="{{ asset(Auth::user()->photo) }}" alt="Profile Picture" class="rounded-circle border shadow mb-3" width="150" height="150">
                    <a href="{{ route('ewaste.add') }}" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="bi bi-plus-circle"></i> Add EWaste
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h3 class="mb-4 text-primary">Your EWaste Orders</h3>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover shadow-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Picture</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($EWaste as $ewaste)
                            <tr>
                                <td>{{ $ewaste->item_name }}</td>
                                <td>
                                    <img src="{{ asset($ewaste->image_url) }}" alt="Ewaste Photo" class="item-picture" width="50" height="50">
                                </td>
                                <td>{{ $ewaste->description }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $ewaste->status }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="margin-top: 80px">
        @include('components.footer')
    </div>
@endsection

@push('styles')
    <style>
        .container {
            max-width: 1200px;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .profile img {
            border: 4px solid #ddd;
            padding: 5px;
        }

        .profile h3 {
            color: #333;
            font-weight: bold;
        }

        .add-ewaste {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .table {
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table th {
            background-color: #f8f9fa;
            color: #495057;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .badge {
            font-size: 1rem;
        }

        .text-muted {
            font-size: 1.1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .shadow-sm {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .rounded-circle {
            border-radius: 50%;
        }

        .item-picture {
            object-fit: cover;
            border: 2px solid #ddd;
            border-radius: 4px;
        }

        .display-4 {
            font-weight: bold;
            font-size: 3rem;
        }

        .lead {
            font-size: 1.25rem;
            color: #6c757d;
        }

        .thead-dark {
            background-color: #343a40;
            color: #fff;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .text-primary {
            color: #007bff !important;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 0.875rem;
            }
            .profile img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
@endpush
