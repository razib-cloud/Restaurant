@extends('layout.backend.main')

@section('body_content')

<div class="row">
    @if (session('error'))

     @endif
    <div class="col md 12">
        <form action="{{url('role')}}" method="post">
            @csrf

            <div>
                <label for="name">Name</label><br>
                <input class="form-control" type="text" name="name" value="{{old('name')}}"> <br>
                @error('name')
                <span style="color: red">{{'message'}}</span>
                 @enderror

                 <label  for="name">Address</label><br>
                 <input class="form-control" type="text" name="address" value="{{old('address')}}"> <br>
                 @error('address')
                    <span style="color: red">{{$message}}</span>
                 @enderror


                 <label  for="name">Photo</label><br>
                 <input class="form-control" type="file" name="photo" value="{{old('photo')}}"> <br>
                 @error('photo')
                    <span style="color: red">{{$message}}</span>
                 @enderror

            </div>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>



        </form>
    </div>
</div>

@endsection
