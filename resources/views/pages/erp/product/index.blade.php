@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products List</h3>
                <div class="card-tools">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Is Featured</th>
                            <th>Stock Quantity</th>
                            <th>Reorder Level</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    @if ($product->photo)
                                    <img width="50" height="" src="{{ asset('products') }}/{{ $product->photo }}" alt="{{ $product->name }}"srcset="">
                                    @else
                                        No Photo
                                    @endif
                                </td>
                                <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                                <td>{{ $product->stock_quantity }}</td>
                                <td>{{ $product->reorder_level }}</td>
                                <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('product.edit', $product->id) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('product.show', $product->id) }}">Show</a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
