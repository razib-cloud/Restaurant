@extends('layout.erp.app')

@section('page')

<div class="row">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <form action="{{ url("role/{$result->id}") }}" method="post" enctype="multipart/form-data">
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
                <label for="photo">Photo</label><br>
                <img width="50" height="" src="{{asset('photos')}}/{{$result['photo']}}" alt="{{$result['name']}}" srcset="">
                <input type="file" class="form-control"  name="photo" > <br>
                @error('photo')
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
