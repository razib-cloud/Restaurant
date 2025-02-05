@extends('layout.backend.main')

@section('body_content')

<div class="row">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Menu Items</h4>
                <div class="row d-flex">
                    <div class="col-md-3">
                        <a class="btn btn-primary" href="{{ url('menu/create') }}">Add New Item</a>
                    </div>
                    <form class="col-md-9" action="{{ url('menu/search') }}" method="post">
                        @csrf
                        <div class="input">
                            <div class="d-flex">
                                <input type="text" class="form-control" name="name" value="{{ @$requestdata }}">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Stock Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($menu_items as $menu)
                                <tr>
                                    <td>{{ $menu->name }}</td>
                                    <td>{{ $menu->description }}</td>
                                    <td>${{ $menu->price }}</td>
                                    <td>{{ $menu->category }}</td>
                                    <td>
                                        <img width="50" src="{{ asset('images/menu') }}/{{ $menu->image }}" alt="{{ $menu->name }}">
                                    </td>
                                    <td>{{ $menu->stock_quantity }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ url("menu/$menu->id") }}">Show</a>
                                        <a class="btn btn-primary" href="{{ url("menu/$menu->id/edit") }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url("menu/delete/$menu->id") }}">Delete</a>
                                        <form action="{{ url("menu/$menu->id") }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete_r</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-5">
                    {!! $menu_items->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
