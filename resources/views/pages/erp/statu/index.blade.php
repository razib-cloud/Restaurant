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
                <h3 class="card-title">Status List</h3>
                <div class="card-tools">
                    <a href="{{ route('status.create') }}" class="btn btn-primary">New Status</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($status as $statu)
                            <tr>
                                <td>{{ $statu->id }}</td>
                                <td>{{ $statu->name }}</td>
                                <td>{{ $statu->description }}</td>
                                <td>{{ $statu->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $statu->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('status.edit', $statu->id) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('status.show', $statu->id) }}">Show</a>
                                    <form action="{{ route('status.destroy', $statu->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this status?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No status found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
