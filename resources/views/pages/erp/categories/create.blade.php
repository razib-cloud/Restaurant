@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <form action="{{ url('categories') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Category Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Category Photo</label>
                <input class="form-control" type="file" name="photo">
                @error('photo')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Create Category</button>
            </div>
        </form>
    </div>
</div>

@endsection
