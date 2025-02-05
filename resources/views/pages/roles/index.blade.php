
@extends('layout.backend.main')


@section('body_content')



<div class="row">
    <div class="col md 12">
        @if (session('success'))
             <div class="alert alert-success">{{session('success')}}</div>
       @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($results as $result )
                    <tr>
                        <th>{{$result->id}}</th>
                        <th>{{$result->name}}</th>
                        <th>{{$result->address}}</th>
                        <th>
                            <a class="btn btn-primary" href="">Show</a>
                            <a class="btn btn-secondary" href="{{url("role/{$result->id}/edit")}}">Edit</a>
                            <form action="{{url("role/{$result->id}")}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </th>

                    </tr>
                @empty
                <tr>
                    <td colspan="3">No data found</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
