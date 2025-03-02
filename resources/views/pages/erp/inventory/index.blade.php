@extends('layout.erp.app')

@section('title', 'Manage Inventory')

@section('style')
<style>
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        overflow-x: auto;
        border: 1px solid #ddd;
        display: block;
    }

    .table-container table {
        width: 100%;
        min-width: 1200px;
    }

    .table-container thead th {
        position: sticky;
        top: 0;
        background-color: #343a40;
        color: white;
        z-index: 1;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #loading-spinner {
        display: none;
    }

    #back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }

    /* Pagination Styles */
    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        background-color: #0056b3;
        color: white;
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
                <h3 class="card-title mb-0">Inventory List</h3>
                <a href="{{ route('inventorys.create') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus"></i> New Inventory
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
                                    <th>Id</th>
                                    <th>Product Id</th>
                                    {{-- <th>Supplier Id</th> --}}
                                    <th>Quantity</th>
                                    {{-- <th>Unit Price</th> --}}
                                    <th>Expiry Date</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($inventorys as $inventory)
                                    <tr>
                                        <td>{{ $inventory->id }}</td>
                                        <td>{{ $inventory->product_id }}</td>
                                        {{-- <td>{{ $inventory->supplier_id }}</td> --}}
                                        <td>{{ $inventory->quantity }}</td>
                                        {{-- <td>{{ $inventory->unit_price }}</td> --}}
                                        <td>{{ $inventory->expiry_date }}</td>
                                        <td>{{ $inventory->created_at }}</td>
                                        <td>{{ $inventory->updated_at }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('inventorys.show', $inventory->id) }}">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <a class="btn btn-sm btn-outline-success" href="{{ route('inventorys.edit', $inventory->id) }}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form method="POST" action="{{ route('inventorys.destroy', $inventory->id) }}" style="display: inline-block;">
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
                                        <td colspan="9" class="text-center py-4">
                                            <i class="fas fa-boxes fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">No inventory found.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination with Page Size Selector -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <form method="GET" action="{{ route('inventorys.index') }}">
                            <label for="perPage">Show</label>
                            <select name="perPage" id="perPage" onchange="this.form.submit()">
                                <option value="5" {{ request('perPage') == 5 ? 'selected' : '' }}>5</option>
                                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                                <option value="20" {{ request('perPage') == 20 ? 'selected' : '' }}>20</option>
                                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
                            </select>
                            entries
                        </form>
                    </div>
                    <div>
                        {{ $inventorys->appends(['perPage' => request('perPage')])->links('vendor.pagination.bootstrap-5') }}
                    </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const spinner = document.getElementById('loading-spinner');
        const tableContainer = document.querySelector('.table-container');

        spinner.style.display = 'block';
        tableContainer.style.display = 'none';

        setTimeout(function () {
            spinner.style.display = 'none';
            tableContainer.style.display = 'block';
        }, 1000);
    });

    function confirmDelete(event) {
        event.preventDefault();
        const form = event.target.closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this inventory!',
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
