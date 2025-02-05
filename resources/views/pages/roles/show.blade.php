@extends('layout.backend.main')

@section('body_content')

<div class="row">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Role Details</h4>
            </div>
            <div class="card-body">
                <div class="input-block mb-3 row">
                    <label class="col-lg-3 col-form-label">Name</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" value="{{ $result->name }}" readonly>
                    </div>
                </div>

                <div class="input-block mb-3 row">
                    <label class="col-lg-3 col-form-label">Address</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" value="{{ $result->address }}" readonly>
                    </div>
                </div>

                <div class="input-block mb-3 row">
                    <label class="col-lg-3 col-form-label">Created At</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" value="{{ $result->created_at }}" readonly>
                    </div>
                </div>

                <div class="input-block mb-3 row">
                    <label class="col-lg-3 col-form-label">Updated At</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" value="{{ $result->updated_at }}" readonly>
                    </div>
                </div>

                <div class="input-block mb-3 row">
                    <div class="col-lg-9 offset-lg-3">
                        <a href="{{ route('role.edit', $result->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('role.destroy', $result->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
