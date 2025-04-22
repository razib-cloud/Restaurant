@extends('layout.erp.app')

@section('title', 'Sales Report')

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

        .card-header {
            background-color: #007bff;
            color: white;
        }

        .filter-section {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .total-row {
            font-weight: bold;
            background-color: #e9ecef;
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Sales Report</h3>
                    <button class="btn btn-light btn-sm" onclick="window.print()">
                        <i class="fas fa-print"></i> Print Report
                    </button>
                </div>
                <div class="card-body">
                    <div class="filter-section">


                        <form method="POST" action="{{ url('/salesreport') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        value="{{ old('start_date', $startDate ?? '') }}" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control"
                                        value="{{ old('end_date', $endDate ?? '') }}" required>
                                </div>


                                <div class="col-md-3">
                                    <label for="customer_id" class="form-label">Customer</label>
                                    <select id="customer_id" name="customer_id" class="form-control">
                                        <option value="">All Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ old('customer_id', $selectedCustomer ?? '') == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-md-3">
                                    <label for="payment_status_id" class="form-label">Payment Status</label>
                                    <select id="payment_status_id" name="payment_status_id" class="form-control">
                                        <option value="">All Statuses</option>
                                        @foreach ($paymentstatu as $status)
                                            <option value="{{ $status->id }}"
                                                {{ old('payment_status_id', $selectedStatus ?? '') == $status->id ? 'selected' : '' }}>
                                                {{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-filter"></i> Filter Results
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary ms-2">
                                        <i class="fas fa-sync-alt"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
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
                                        <th>Customer</th>
                                        <th>Seller</th>
                                        <th>Sales Date</th>
                                        <th>Items</th>
                                        <th>Total Amount</th>
                                        <th>Payment Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($orderitems as $sales)
                                    <tr>
                                        <td>{{ $sales->id }}</td>
                                        <td>{{ $sales->customer }}</td>
                                        <td>{{ $sales->staffs }}</td>
                                        <td>{{ $sales->order_date }}</td>
                                        <td>{{ $sales->orderitems }}</td>
                                        <td>{{ $sales->payments }}</td>
                                        <td>{{ $sales->paymentstatus }}</td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                                <tfoot>
                                    <tr class="total-row">
                                        <td colspan="5" class="text-end">Total:</td>
                                        <td>$370.00</td>
                                        <td colspan="2"></td>
                                    </tr>
                                </tfoot>
                            </table>
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

        document.addEventListener('scroll', function () {
            const backToTopButton = document.getElementById('back-to-top');
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        document.getElementById('back-to-top').addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        function exportReport(format) {
            Swal.fire({
                title: 'Exporting Report',
                text: `Preparing ${format} export...`,
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                },
                willClose: () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Export Complete',
                        text: `Your report has been exported as ${format}`,
                        timer: 1500
                    });
                }
            });
        }
    </script>
@endsection
