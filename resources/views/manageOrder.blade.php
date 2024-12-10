@extends('layout.layout')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px">
            <h3 class="text-dark p-3">Manage Orders</h3>
            <a href="{{ route('admin.home') }}" class="btn btn-dark">Return</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">User</th>
                    <th scope="col">Collection Center</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Ewastes as $ewaste)
                    <tr>
                        <td>{{ $ewaste->id }}</td>
                        <td>
                            <img src="{{ asset($ewaste->image_url) }}" alt="Ewaste Photo" width="50" height="50"
                                class="rounded-circle">
                        </td>
                        <td>{{ $ewaste->user->name }}</td>
                        <td>{{ $ewaste->collectionCenter->name }}</td>
                        <td>{{ $ewaste->item_name }}</td>
                        <td>{{ $ewaste->itemType->TypeName }}</td>
                        <td>{{ $ewaste->description }}</td>
                        <td>
                            <span
                                class="badge bg-{{ $ewaste->status === 'pending' ? 'warning' : ($ewaste->status === 'in_progress' ? 'info' : 'success') }}">
                                {{ ucfirst($ewaste->status) }}
                            </span>
                        </td>
                        <td>
                            @if ($ewaste->status === 'pending')
                                <form action="{{ route('processOrder', $ewaste->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">Process</button>
                                </form>
                            @elseif ($ewaste->status === 'in_progress')
                                <form action="{{ route('completeOrder', $ewaste->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Complete</button>
                                </form>
                            @endif
                            <form action="{{ route('deleteOrder', $ewaste->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between">
            <div>
                Showing {{ $Ewastes->firstItem() }} to {{ $Ewastes->lastItem() }} of {{ $Ewastes->total() }} items
            </div>
            <div>
                {{ $Ewastes->links() }}
            </div>
        </div>
    </div>
@endsection
