@extends('layout.erp.app')
@section('title', 'Manage Reservations')
@section('style')
    <style>
        /* Custom Styles */
        .reservation-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .reservation-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .reservation-table th,
        .reservation-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .reservation-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #555;
        }

        .reservation-table tr:hover {
            background-color: #f9f9f9;
        }

        .action-buttons .btn {
            margin: 2px;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-pending {
            background-color: #ffc107;
            color: #000;
        }

        .badge-confirmed {
            background-color: #28a745;
            color: #fff;
        }

        .badge-cancelled {
            background-color: #dc3545;
            color: #fff;
        }

        .search-filter .form-floating {
            position: relative;
        }

        .search-filter .form-floating label {
            color: #6c757d;
            font-size: 14px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .search-filter .form-floating input,
        .search-filter .form-floating select {
            height: 50px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .search-filter .form-floating input:focus,
        .search-filter .form-floating select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .search-filter .form-floating input:focus~label,
        .search-filter .form-floating select:focus~label,
        .search-filter .form-floating input:not(:placeholder-shown)~label,
        .search-filter .form-floating select:not(:placeholder-shown)~label {
            transform: scale(0.85) translateY(-10px) translateX(10px);
            background: #fff;
            padding: 0 5px;
            color: #007bff;
        }

        .search-filter #reset-filters {
            height: 50px;
            border-radius: 8px;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .search-filter #reset-filters:hover {
            background: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination .page-link {
            color: #007bff;
        }
    </style>
@endsection
@section('page')
    <div class="reservation-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Manage Reservations</h1>
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> New Reservation
            </a>
        </div>

        <!-- Search and Filters -->
        <div class="search-filter mb-4">
            <div class="row g-3">
                <!-- Search Bar -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" id="search" class="form-control" placeholder="Search by name or email...">
                        <label for="search"><i class="fas fa-search me-2"></i>Search by name or email...</label>
                    </div>
                </div>

                <!-- Status Filter -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <select id="status-filter" class="form-select">
                            <option value="">All Statuses</option>
                            <option value="Pending">Pending</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                        <label for="status-filter"><i class="fas fa-filter me-2"></i>Filter by status</label>
                    </div>
                </div>

                <!-- Reset Button -->
                <div class="col-md-2">
                    <button id="reset-filters" class="btn btn-outline-secondary w-100 h-100">
                        <i class="fas fa-sync-alt me-2"></i>Reset
                    </button>
                </div>
            </div>
        </div>

        <!-- Reservation Table -->
        <table class="reservation-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Booking Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Table</th>
                    <th>Guests</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Requests</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->customer_id }}</td>
                        <td>{{ $reservation->booking_name }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->table_number }}</td>
                        <td>{{ $reservation->guests_count }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>
                            <span class="badge badge-{{ strtolower($reservation->status) }}">
                                {{ $reservation->status }}
                            </span>
                        </td>
                        <td>{{ $reservation->special_requests }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-sm btn-info"
                                title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-warning"
                                title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post"
                                style="display:inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger" title="Delete"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            {{ $reservations->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Search functionality
        document.getElementById('search').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('.reservation-table tbody tr');
            rows.forEach(row => {
                const name = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const email = row.querySelector('td:nth-child(5)').textContent.toLowerCase();
                if (name.includes(searchValue) || email.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter functionality
        document.getElementById('status-filter').addEventListener('change', function() {
            const statusValue = this.value;
            const rows = document.querySelectorAll('.reservation-table tbody tr');
            rows.forEach(row => {
                const status = row.querySelector('td:nth-child(9)').textContent;
                if (statusValue === '' || status === statusValue) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Reset filters
        document.getElementById('reset-filters').addEventListener('click', function() {
            document.getElementById('search').value = '';
            document.getElementById('status-filter').value = '';
            const rows = document.querySelectorAll('.reservation-table tbody tr');
            rows.forEach(row => row.style.display = '');
        });
    </script>
@endsection
