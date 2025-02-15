@extends('layout.backend.main')

@section('body_content')

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
                <h3 class="card-title">Categories List</h3>
                <div class="card-tools">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @if ($category->photo)
                                    <img width="50" height="" src="{{ asset('photos') }}/{{ $category->photo }}" alt="{{ $category->name }}"srcset="">
                                    @else
                                        No Photo
                                    @endif
                                </td>
                                <td>{{ $category->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $category->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ url("categories/{$category->id}/edit") }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ url("categories/{$category->id}") }}">Show</a>
                                    <form action="{{ url("categories/{$category->id}") }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
