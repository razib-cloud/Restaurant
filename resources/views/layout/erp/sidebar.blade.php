<div class="deznav" style="background-color: #2c3e50;">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Dashboard -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-025-dashboard" aria-hidden="true"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="dashboard-light.html">Dashboard Light</a></li>

                </ul>
            </li>

              <!-- Dashboard -->
              <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-025-dashboard" aria-hidden="true"></i>
                    <span class="nav-text">Frontend</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/res')}}">Web</a></li>


                </ul>
            </li>

            <!-- Menu Management -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-043-menu" aria-hidden="true"></i>
                    <span class="nav-text">Menu</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('menu_items.index') }}">All Menu Items</a></li>
                    <li><a href="{{ route('menu_items.create') }}">Add New Item</a></li>
                    <li><a href="{{ route('menus.index') }}">Menu Category</a></li>
                    <li><a href="{{ route('erp_products.index') }}">Products</a></li>
                </ul>
            </li>

            <!-- Orders -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-086-star" aria-hidden="true"></i>
                    <span class="nav-text">Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('orders.index') }}">All Orders</a></li>
                    <li><a href="#">Pending Orders</a></li>
                    <li><a href="#">Completed Orders</a></li>
                    <li><a href="#">Cancelled Orders</a></li>
                    <li><a href="#">Kitchen Dashboard</a></li>
                </ul>
            </li>

            <!-- Customers -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fas fa-users" aria-hidden="true"></i>
                    <span class="nav-text">Customers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('customers.index') }}">All Customers</a></li>
                    <li><a href="{{ route('customers.create') }}">Add New Customer</a></li>
                    <li><a href="#">Customer Feedback</a></li>
                </ul>
            </li>

            <!-- Payments -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-041-graph" aria-hidden="true"></i>
                    <span class="nav-text">Payments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">All Payments</a></li>
                    <li><a href="pending-payments.html">Pending Payments</a></li>
                    <li><a href="completed-payments.html">Completed Payments</a></li>

                </ul>
            </li>

            <!-- Inventory -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-072-printer" aria-hidden="true"></i>
                    <span class="nav-text">Inventory</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('inventorys.index') }}">All Inventory</a></li>
                    <li><a href="{{ route('inventorys.create') }}">Add New Item</a></li>
                    <li><a href="low-stock.html">Low Stock Alerts</a></li>

                </ul>
            </li>

            <!-- Reports -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-041-graph" aria-hidden="true"></i>
                    <span class="nav-text">Reports</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="sales-reports.html">Sales Reports</a></li>
                    <li><a href="performance-reports.html">Performance Reports</a></li>
                    <li><a href="customer-reports.html">Customer Reports</a></li>
                </ul>
            </li>

            <!-- Employees -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-086-star" aria-hidden="true"></i>
                    <span class="nav-text">Employees</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="employees.html">All Employees</a></li>
                    <li><a href="attendance.html">Attendance</a></li>
                    <li><a href="payroll.html">Payroll</a></li>
                </ul>
            </li>

            <!-- Online Orders -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-043-menu" aria-hidden="true"></i>
                    <span class="nav-text">Online Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="online-orders.html">All Online Orders</a></li>
                    <li><a href="delivery-status.html">Delivery Status</a></li>
                    <li><a href="customer-reviews.html">Customer Reviews</a></li>
                </ul>
            </li>

            <!-- User Management -->
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="flaticon-025-dashboard" aria-hidden="true"></i>
                    <span class="nav-text">User Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="users.html">All Users</a></li>
                    <li><a href="roles.html">Roles & Permissions</a></li>
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Lezato Restaurant Admin</strong> © 2025 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>
