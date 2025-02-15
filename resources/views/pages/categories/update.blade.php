@extends('layout.backend.main')

@section('body_content')

<div class="row">
    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <form action="{{ url("role/{$category->id}") }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Category Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $category->name) }}">
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Category Photo</label>
                <br>
                @if ($category->photo)
                    <img width="100" src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" class="img-thumbnail mb-2">
                @else
                    <p>No photo available.</p>
                @endif
                <input type="file" class="form-control" name="photo">
                @error('photo')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update Category</button>
            </div>
        </form>
    </div>
</div>

@endsection
