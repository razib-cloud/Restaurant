@extends('layout.erp.app')

@section('page')

<div class="container mt-6">
    <h4>Category Details</h4>
    <fieldset disabled>
        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="created_at" class="form-label">Created At</label>
            <input type="text" id="created_at" name="created_at" value="{{ $category->created_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="updated_at" class="form-label">Updated At</label>
            <input type="text" id="updated_at" name="updated_at" value="{{ $category->updated_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="photo" class="form-label">Photo</label>
            <br>
            @if ($category->photo)
            <img width="50" height="" src="{{asset('photos')}}/{{$category['photo']}}" alt="{{$category['name']}}" srcset="">
            @else
                <p>No photo available.</p>
            @endif
        </div>
    </fieldset>
    <a href="{{ url('categories') }}" class="btn btn-primary">Back</a>
</div>

@endsection
