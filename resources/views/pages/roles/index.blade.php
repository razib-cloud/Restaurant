@extends('layout.backend.main')

@section('body_content')

<a href="{{ url('role/create') }}" class="btn btn-primary mb-3">Add</a>

<!-- Search Form -->
<form action="{{ url('role') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by Name or Address" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ url('role') }}" class="btn btn-secondary">Reset</a>
    </div>
</form>

<div class="row">
    <div class="col-md-12">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->address }}</td>
                        <td>
                            <img width="50" height="" src="{{ asset('photo') }}/{{ $result->photo }}" alt="{{ $result->name }}"srcset="">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url("role/{$result->id}") }}">Show</a>
                            <a class="btn btn-secondary" href="{{ url("role/{$result->id}/edit") }}">Edit</a>
                            <form action="{{ url("role/{$result->id}") }}" method="post" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No data found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end mt-5">
        {{ $results->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection
