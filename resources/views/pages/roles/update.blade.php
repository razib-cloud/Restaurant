@extends('layout.backend.main')

@section('body_content')

<div class="row">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <form action="{{ url("role/{$result->id}") }}" method="post">
            @csrf
            @method('put')

            <div>
                <label for="name">Name</label><br>
                <input class="form-control" type="text" name="name" value="{{ old('name', $result->name) }}"> <br>
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="address">Address</label><br>
                <input class="form-control" type="text" name="address" value="{{ old('address', $result->address) }}"> <br>
                @error('address')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
