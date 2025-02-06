@extends('layout.backend.main')

@section('body_content')

   @php
    //    print_r($result);
   @endphp

<div class="container mt-6">
    <h4>Role Details</h4>
    <fieldset disabled>
        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ $result->name }}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" value="{{ $result->address }}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="created_at" class="form-label">Created At</label>
            <input type="text" id="created_at" name="created_at" value="{{ $result->created_at }}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="updated_at" class="form-label">Updated At</label>
            <input type="text" id="updated_at" name="updated_at" value="{{ $result->updated_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="name" class="form-label">Photo</label>
            <img width="50" height="" src="{{asset('photo')}}/{{$result['photo']}}" alt="{{$result['name']}}" srcset="">
        </div>


    </fieldset>
    <a href="{{ url('role') }}" class="btn btn-primary">Back</a>
</div>





@endsection
