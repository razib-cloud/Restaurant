@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menu Items List</h3>
                <div class="card-tools">
                    <a href="{{ route('menu_items.create') }}" class="btn btn-primary">Add New Menu Item</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menu ID</th>
                            <th>Product ID</th>
                            <th>Photo</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Availability</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($menuItems  as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->menu->name }}</td>
                                <td>{{ $item->product_id }}</td>
                                <td>
                                    @if ($item->photo)
                                    <img width="50" src="{{ asset('photos') }}/{{ $item->photo }}" alt="{{ $item->photo }}">
                                    @else
                                        No Photo
                                    @endif
                                </td>
                                <td>${{ number_format($item->price, 2) }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->is_available ? 'Available' : 'Not Available' }}</td>
                                <td>{{ $item->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $item->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ url("menu_items/{$item->id}/edit") }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ url("menu_items/{$item->id}") }}">Show</a>
                                    <form action="{{ url("menu_items/{$item->id}") }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">No menu items found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
