@extends('layout.erp.app')

@section('title', 'Sales Report')
@section('page')

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
                    <h3 class="card-title mb-0">Sales Report</h3>
                    <a href="#" class="btn btn-light btn-sm">
                        <i class="fas fa-plus"></i> Generate Report
                    </a>
                </div>
                <div class="card-body p-0">
                    <div id="loading-spinner" class="text-center my-4">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="p-4">
                        {{-- <form action="{{ route('reports.generate') }}" method="GET" class="row g-4"> --}}
                        @csrf

                        <!-- Month Selection -->
                        <div class="col-md-6">
                            <label for="month" class="form-label fw-bold">Select Month:</label>
                            <input type="month" name="month" id="month" class="form-control border-primary"
                                required>
                        </div>

                        <!-- Menu Items Dropdown -->
                        <div class="col-md-6">
                            <label for="menu_item" class="form-label fw-bold">Menu Item:</label>
                            <select name="menu_item" id="menu_item" class="form-select border-primary">
                                <option value="">All</option>
                                <option value="1">Pizza</option>
                                <option value="2">Burger</option>
                                <option value="3">Pasta</option>
                            </select>
                        </div>

                        <!-- Payment Methods Dropdown -->
                        <div class="col-md-6">
                            <label for="payment_method" class="form-label fw-bold">Payment Method:</label>
                            <select name="payment_method" id="payment_method" class="form-select border-primary">
                                <option value="">All</option>
                                <option value="1">Cash</option>
                                <option value="2">Credit Card</option>
                                <option value="3">Debit Card</option>
                            </select>
                        </div>

                        <!-- Staff Members Dropdown -->
                        <div class="col-md-6">
                            <label for="staff_member" class="form-label fw-bold">Staff Member:</label>
                            <select name="staff_member" id="staff_member" class="form-select border-primary">
                                <option value="">All</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <option value="3">Bob Johnson</option>
                            </select>
                        </div>

                        <!-- Generate Report Button -->
                        {{-- <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm px-4 py-2">Generate
                                Report</button>
                        </div> --}}
                        </form>
                    </div>


                    <!-- Sales Report Results (Static Example) -->
                    <div class="card shadow-lg border-0 rounded-4 mt-4">
                        <div class="card-body p-4">
                            <h3 class="text-primary mb-4">📋 Sales Report Results</h3>

                            <div class="table-responsive">
                                <div class="table-container">
                                    <table class="table table-hover table-bordered align-middle">
                                        <thead style="background-color: #2c3e50; color: white;">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer ID</th>
                                                <th>Total Amount</th>
                                                <th>Discount</th>
                                                <th>Status</th>
                                                <th>Order Date</th>
                                                <th>Delivery Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>101</td>
                                                <td>1</td>
                                                <td>$25.00</td>
                                                <td>$5.00</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>2025-03-01</td>
                                                <td>2025-03-01</td>
                                            </tr>
                                            <tr>
                                                <td>102</td>
                                                <td>2</td>
                                                <td>$15.00</td>
                                                <td>$3.00</td>
                                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                                <td>2025-03-02</td>
                                                <td>2025-03-02</td>
                                            </tr>
                                            <tr>
                                                <td>103</td>
                                                <td>3</td>
                                                <td>$30.00</td>
                                                <td>$7.00</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>2025-03-03</td>
                                                <td>2025-03-03</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const spinner = document.getElementById('loading-spinner');
            const tableContainer = document.querySelector('.table-container');

            spinner.style.display = 'block';
            tableContainer.style.display = 'none';

            setTimeout(function() {
                spinner.style.display = 'none';
                tableContainer.style.display = 'block';
            }, 1000);
        });

        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target.closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this record!',
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

        document.addEventListener('scroll', function() {
            const backToTopButton = document.getElementById('back-to-top');
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        document.getElementById('back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
