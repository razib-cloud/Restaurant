@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Product List</h3>
                <a href="{{ route('products.create') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus"></i> Add New Product
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Is Featured</th>
                            <th scope="col">Stock Quantity</th>
                            <th scope="col">Reorder Level</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Actions</th>
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
                                    <img src="{{ asset('img/' . $product->photo) }}" width="100" alt="{{ $product->name }}">
                                </td>
                                <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                                <td>{{ $product->stock_quantity }}</td>
                                <td>{{ $product->reorder_level }}</td>
                                <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.edit', $product->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-outline-primary" href="{{ route('products.show', $product->id) }}">
                                            <i class="fas fa-eye"></i> Show
                                        </a>
                                        <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to delete this product?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center py-4">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
