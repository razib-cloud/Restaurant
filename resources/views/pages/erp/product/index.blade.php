@extends('layout.erp.app')

@section('title', 'Manage Product')

@section('style')
<style>
    .table-container {
        max-height: 500px; /* Adjust the height as needed */
        overflow-y: auto; /* Enable vertical scrolling */
        overflow-x: auto; /* Enable horizontal scrolling if needed */
        border: 1px solid #ddd;
        display: block;
    }

    .table-container table {
        width: 100%;
        min-width: 1200px; /* Ensures horizontal scrolling if needed */
    }

    .table-container thead th {
        position: sticky;
        top: 0;
        background-color: #343a40;
        color: white;
        z-index: 1;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow */
    }

    #loading-spinner {
        display: none; /* Hide by default */
    }

    #back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }
</style>
@endsection

@section('page')
<div class="row">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                <a href="{{ route('erp_products.create') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus"></i> Add New Product
                </a>
            </div>
            <div class="card-body p-0">
                <div id="loading-spinner" class="text-center my-4">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="table-container">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Menu Category</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Description</th>
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
                                        <td>{{ $product->item->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            @if ($product->photo)
                                                <img width="50" height="50" src="{{ asset('products') }}/{{ $product->photo }}" alt="{{ $product->name }}" class="img-fluid rounded">
                                            @else
                                                No Photo
                                            @endif
                                        </td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                                        <td>{{ $product->stock_quantity }}</td>
                                        <td>{{ $product->reorder_level }}</td>
                                        <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('erp_products.edit', $product->id) }}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary" href="{{ route('erp_products.show', $product->id) }}">
                                                    <i class="fas fa-eye"></i> Show
                                                </a>
                                                <form method="POST" action="{{ route('erp_products.destroy', $product->id) }}" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-outline-danger" type="submit" onclick="confirmDelete(event)">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center py-4">
                                            <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">No products found.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<button id="back-to-top" class="btn btn-primary btn-sm rounded-circle shadow" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
</button>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Show loading spinner and hide table initially
    document.addEventListener('DOMContentLoaded', function () {
        const spinner = document.getElementById('loading-spinner');
        const tableContainer = document.querySelector('.table-container');

        spinner.style.display = 'block'; // Show spinner
        tableContainer.style.display = 'none'; // Hide table

        setTimeout(function () {
            spinner.style.display = 'none'; // Hide spinner
            tableContainer.style.display = 'block'; // Show table
        }, 1000); // Adjust the delay as needed
    });

    // Delete confirmation with SweetAlert
    function confirmDelete(event) {
        event.preventDefault();
        const form = event.target.closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this product!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }

    // Back to top button
    document.addEventListener('scroll', function () {
        const backToTopButton = document.getElementById('back-to-top');
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    document.getElementById('back-to-top').addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endsection
