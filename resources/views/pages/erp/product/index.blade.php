@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="col-md-12">
        <div class="card shadow-lg">
            <div class="card-header bg-gradient-primary text-white">
                <h3 class="card-title">Products List</h3>
                <div class="card-tools">
                    <a href="{{ route('product.create') }}" class="btn btn-light">
                        <i class="fas fa-plus"></i> Add New Product
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Search Bar -->
                <div class="mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search products...">
                </div>

                <!-- Table with Custom Scrollbar -->
                <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                    <style>
                        /* Custom Scrollbar */
                        .table-responsive::-webkit-scrollbar {
                            width: 8px;
                        }
                        .table-responsive::-webkit-scrollbar-track {
                            background: #f1f1f1;
                            border-radius: 10px;
                        }
                        .table-responsive::-webkit-scrollbar-thumb {
                            background: #888;
                            border-radius: 10px;
                        }
                        .table-responsive::-webkit-scrollbar-thumb:hover {
                            background: #555;
                        }
                    </style>
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
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
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>{{ Str::limit($product->description, 50) }}</td>
                                    <td>
                                        @if ($product->photo)
                                            <img width="50" height="50" src="{{ asset('products') }}/{{ $product->photo }}" alt="{{ $product->name }}" class="img-thumbnail">
                                        @else
                                            <span class="text-muted">No Photo</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge {{ $product->is_featured ? 'badge-success' : 'badge-secondary' }}">
                                            {{ $product->is_featured ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>{{ $product->reorder_level }}</td>
                                    <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('product.show', $product->id) }}" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $product->id) }}" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
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

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Add search functionality
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchValue) ? '' : 'none';
        });
    });
</script>
@endpush
