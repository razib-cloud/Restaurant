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
                    <h3 class="card-title mb-0">Reservation List</h3>
                    <a href="{{ route('reservations.create') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-plus"></i> New Reservation
                    </a>
                </div>
                <div class="card-body p-0">
                    <!-- Search and Filters -->
                    <div class="p-3 border-bottom">
                        <div class="row g-3">
                            <!-- Search Bar -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="search" class="form-control"
                                        placeholder="Search by name or email...">
                                    <label for="search"><i class="fas fa-search me-2"></i>Search by name or
                                        email...</label>
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
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Booking Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Table</th>
                                <th scope="col">Guests</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Requests</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reservations as $reservation)
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
                                        <span
                                            class="badge bg-{{ strtolower($reservation->status) == 'pending' ? 'warning' : (strtolower($reservation->status) == 'confirmed' ? 'success' : 'danger') }}">
                                            {{ $reservation->status }}
                                        </span>
                                    </td>
                                    <td>{{ $reservation->special_requests }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-sm btn-outline-secondary"
                                                href="{{ route('reservations.edit', $reservation->id) }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a class="btn btn-sm btn-outline-primary"
                                                href="{{ route('reservations.show', $reservation->id) }}">
                                                <i class="fas fa-eye"></i> Show
                                            </a>
                                            <form method="POST"
                                                action="{{ route('reservations.destroy', $reservation->id) }}"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this reservation?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center py-4">No reservations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Search functionality
        document.getElementById('search').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('table tbody tr');
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
            const rows = document.querySelectorAll('table tbody tr');
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
            const rows = document.querySelectorAll('table tbody tr');
            rows.forEach(row => row.style.display = '');
        });
    </script>
@endsection
