

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Burgers', 'burgers_category.jpg', '2025-02-15 16:33:54', '2025-02-15 16:33:54'),
(3, 'Salads', 'salads_category.jpg', '2025-02-15 16:33:54', '2025-02-15 16:33:54'),
(7, 'Pizza2', 'Pizza.jpg', '2025-02-15 12:16:53', '2025-02-15 12:20:41'),
(8, 'Burger', 'Burger.jpg', '2025-02-15 12:43:06', '2025-02-15 12:43:06'),
(9, 'Salad', 'Salad.jpg', '2025-02-15 12:54:55', '2025-02-15 12:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Michael Scott', '+15551234567', 'michael@dundermifflin.com', '1725 Slough Ave, Scranton', '2025-02-16 18:36:01', '2025-02-16 18:36:01'),
(2, 'Pam Beesly', '+15552345678', 'pam@dundermifflin.com', 'Apt 4B, 123 Paper St, Scranton', '2025-02-16 18:36:01', '2025-02-16 18:36:01'),
(3, 'Jim Halpert', '+15553456789', 'jim@dundermifflin.com', '456 Office Road, Scranton', '2025-02-16 18:36:01', '2025-02-16 18:36:01'),
(4, 'Dwight Schrute', '+15554567890', 'dwight@schrute-farms.com', 'Schrute Farms, Honesdale', '2025-02-16 18:36:01', '2025-02-16 18:36:01'),
(5, 'Stanley Hudson', '+15555678901', 'stanley@dundermifflin.com', '789 Crossword St, Scranton', '2025-02-16 18:36:01', '2025-02-16 18:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`id`, `customer_id`, `menu_item_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 5, 'Absolutely delicious! Will order again.', '2025-02-16 18:52:58', '2025-02-16 18:52:58'),
(2, 2, 5, 4, 'Great taste, but a bit too spicy for me.', '2025-02-16 18:52:58', '2025-02-16 18:52:58'),
(3, 3, 2, 3, 'Average, could use more seasoning.', '2025-02-16 18:52:58', '2025-02-16 18:52:58'),
(4, 4, 4, 5, 'Loved it! Perfectly cooked and flavorful.', '2025-02-16 18:52:58', '2025-02-16 18:52:58'),
(5, 5, 1, 2, 'Not what I expected, portion size was small.', '2025-02-16 18:52:58', '2025-02-16 18:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_orders`
--

CREATE TABLE `delivery_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `delivery_orders`
--

INSERT INTO `delivery_orders` (`id`, `order_id`, `delivery_boy_id`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 201, 1, '2025-02-16 18:52:10', '2025-02-17 17:10:04', 5),
(2, 202, 2, '2025-02-16 18:52:10', '2025-02-17 17:10:04', 3),
(3, 203, 3, '2025-02-16 18:52:10', '2025-02-17 17:10:04', 1),
(4, 204, 1, '2025-02-16 18:52:10', '2025-02-17 17:10:04', 4),
(5, 205, 4, '2025-02-16 18:52:10', '2025-02-17 17:10:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `expense_type` varchar(100) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `staff_id`, `expense_type`, `amount`, `expense_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kitchen Supplies', 150.00, '2025-02-17', '2025-02-16 18:45:51', '2025-02-16 18:45:51'),
(2, 2, 'Electricity Bill', 200.50, '2025-02-16', '2025-02-16 18:45:51', '2025-02-16 18:45:51'),
(3, 3, 'Maintenance', 75.00, '2025-02-15', '2025-02-16 18:45:51', '2025-02-16 18:45:51'),
(4, 4, 'Staff Lunch', 50.00, '2025-02-14', '2025-02-16 18:45:51', '2025-02-16 18:45:51'),
(5, 5, 'Marketing', 120.00, '2025-02-13', '2025-02-16 18:45:51', '2025-02-16 18:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Table structure for table `income_statement`
--

CREATE TABLE `income_statement` (
  `id` int(11) NOT NULL,
  `report_date` date DEFAULT NULL,
  `total_sales` decimal(12,2) DEFAULT NULL,
  `total_expenses` decimal(12,2) DEFAULT NULL,
  `total_withdrawals` decimal(12,2) DEFAULT NULL,
  `gross_profit` decimal(12,2) DEFAULT NULL,
  `net_profit` decimal(12,2) GENERATED ALWAYS AS (`gross_profit` - `total_expenses` - `total_withdrawals`) STORED,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ;

--
-- Dumping data for table `income_statement`
--

INSERT INTO `income_statement` (`id`, `report_date`, `total_sales`, `total_expenses`, `total_withdrawals`, `gross_profit`, `created_at`) VALUES
(1, '2025-02-12', 5000.00, 2000.00, 300.00, 5000.00, '2025-02-16 18:49:41'),
(2, '2025-02-13', 4500.00, 1800.00, 250.00, 4500.00, '2025-02-16 18:49:41'),
(3, '2025-02-14', 5200.00, 2100.00, 400.00, 5200.00, '2025-02-16 18:49:41'),
(4, '2025-02-15', 4800.00, 1900.00, 350.00, 4800.00, '2025-02-16 18:49:41'),
(5, '2025-02-16', 5300.00, 2200.00, 500.00, 5300.00, '2025-02-16 18:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_orders`
--

CREATE TABLE `kitchen_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `kitchen_orders`
--

INSERT INTO `kitchen_orders` (`id`, `order_id`, `menu_item_id`, `quantity`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 101, 3, 2, '2025-02-16 18:51:30', '2025-02-17 17:10:23', 2),
(2, 102, 5, 1, '2025-02-16 18:51:30', '2025-02-17 17:10:23', 3),
(3, 103, 2, 3, '2025-02-16 18:51:30', '2025-02-17 17:10:23', 2),
(4, 104, 4, 1, '2025-02-16 18:51:30', '2025-02-17 17:10:23', 1),
(5, 105, 1, 4, '2025-02-16 18:51:30', '2025-02-17 17:10:23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `min_stock_level` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `category_id`, `photo`, `purchase_price`, `selling_price`, `min_stock_level`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'Margherita Pizza', 2, 'images/menu/margherita_pizza.jpg', 5.00, 10.00, 5, 'pcs', '2025-02-16 18:40:38', '2025-02-16 18:40:38'),
(2, 'Caesar Salad', 5, 'images/menu/caesar_salad.jpg', 3.00, 7.00, 10, 'bowl', '2025-02-16 18:40:38', '2025-02-16 18:40:38'),
(3, 'Chocolate Cake', 3, 'images/menu/chocolate_cake.jpg', 4.50, 9.00, 3, 'slice', '2025-02-16 18:40:38', '2025-02-16 18:40:38'),
(4, 'Espresso', 4, 'images/menu/espresso.jpg', 1.50, 3.00, 20, 'cup', '2025-02-16 18:40:38', '2025-02-16 18:40:38'),
(5, 'Grilled Chicken', 2, 'images/menu/grilled_chicken.jpg', 6.00, 12.00, 7, 'plate', '2025-02-16 18:40:38', '2025-02-16 18:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
);

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_18_040653_create_order_models_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `staff_id`, `order_date`, `total_amount`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 1, 2, '2025-02-17', 25.00, '2025-02-16 18:42:03', '2025-02-17 17:10:54', 3),
(2, 2, 3, '2025-02-16', 40.50, '2025-02-16 18:42:03', '2025-02-17 17:10:54', 1),
(3, 3, 1, '2025-02-15', 15.75, '2025-02-16 18:42:03', '2025-02-17 17:10:54', 3),
(4, 4, 4, '2025-02-14', 60.00, '2025-02-16 18:42:03', '2025-02-17 17:10:54', 4),
(5, 5, 2, '2025-02-13', 33.25, '2025-02-16 18:42:03', '2025-02-17 17:10:54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `menu_item_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 13.98, '2025-02-16 18:43:57', '2025-02-16 18:43:57'),
(2, 1, 3, 1, 6.99, '2025-02-16 18:43:57', '2025-02-16 18:43:57'),
(3, 2, 2, 1, 12.99, '2025-02-16 18:43:57', '2025-02-16 18:43:57'),
(4, 3, 4, 2, 7.98, '2025-02-16 18:43:57', '2025-02-16 18:43:57'),
(5, 4, 5, 1, 14.99, '2025-02-16 18:43:57', '2025-02-16 18:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_models`
--

CREATE TABLE `order_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_type` varchar(50) DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `amount_paid` decimal(12,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transaction_type`, `transaction_id`, `amount_paid`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 'Credit Card', 1001, 50.00, '2025-02-17', '2025-02-16 18:44:57', '2025-02-16 18:44:57'),
(2, 'Cash', 1002, 30.00, '2025-02-17', '2025-02-16 18:44:57', '2025-02-16 18:44:57'),
(3, 'Online Transfer', 1003, 75.50, '2025-02-16', '2025-02-16 18:44:57', '2025-02-16 18:44:57'),
(4, 'Debit Card', 1004, 40.00, '2025-02-15', '2025-02-16 18:44:57', '2025-02-16 18:44:57'),
(5, 'Cash', 1005, 20.00, '2025-02-14', '2025-02-16 18:44:57', '2025-02-16 18:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `position`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Razib Farhan', 'https://www.freepik.com/free-vector/smiling-young-man-illustration_336635642.htm#fromView=keyword&page=1&position=2&uuid=a7d3d90b-44d3-4df8-b187-10112ebfe2a6&query=Avatar', '2025-02-17 04:23:42', '2025-02-17 18:45:53'),
(2, 'Manager', 'Salman Shah', 'https://www.freepik.com/free-vector/mysterious-mafia-man-wearing-hat_7074313.htm#fromView=keyword&page=1&position=4&uuid=a7d3d90b-44d3-4df8-b187-10112ebfe2a6&query=Avatar', '2025-02-17 04:23:42', '2025-02-17 18:46:19'),
(3, 'Chef', 'Shourov Das', '', '2025-02-17 04:23:42', '2025-02-17 07:00:34'),
(4, 'Waiter', 'Abdul Kader', '', '2025-02-17 04:23:42', '2025-02-17 07:00:50'),
(5, 'Cashier', 'Aslam Khan', '', '2025-02-17 04:23:42', '2025-02-17 07:01:07'),
(6, 'Customer', 'Raqeebul Khan', '', '2025-02-17 04:23:42', '2025-02-17 07:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `phone`, `role`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john.doe@example.com', '123-456-7890', 'Manager', '2025-02-16 18:46:41', '2025-02-16 18:46:41'),
(2, 'Jane Smith', 'jane.smith@example.com', '234-567-8901', 'Chef', '2025-02-16 18:46:41', '2025-02-16 18:46:41'),
(3, 'Michael Brown', 'michael.brown@example.com', '345-678-9012', 'Waiter', '2025-02-16 18:46:41', '2025-02-16 18:46:41'),
(4, 'Emily Davis', 'emily.davis@example.com', '456-789-0123', 'Cashier', '2025-02-16 18:46:41', '2025-02-16 18:46:41'),
(5, 'Robert Wilson', 'robert.wilson@example.com', '567-890-1234', 'Cleaner', '2025-02-16 18:46:41', '2025-02-16 18:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 'Order has been placed but not yet processed.', '2025-02-17 04:00:00', '2025-02-17 04:00:00'),
(2, 'Processing', 'Order is currently being prepared.', '2025-02-17 04:05:00', '2025-02-17 04:05:00'),
(3, 'Completed', 'Order has been successfully completed.', '2025-02-17 04:10:00', '2025-02-17 04:10:00'),
(4, 'Cancelled', 'Order was cancelled by the customer or staff.', '2025-02-17 04:15:00', '2025-02-17 04:15:00'),
(5, 'Refunded', 'Order payment has been refunded.', '2025-02-17 04:20:00', '2025-02-17 04:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_person`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Farms Ltd.', 'John Doe', '+1234567890', 'john@freshfarms.com', '123 Green Street, Cityville', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(2, 'Ocean Seafood Co.', 'Alice Smith', '+1987654321', 'alice@oceanseafood.com', '456 Blue Avenue, Seaside', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(3, 'Organic Harvest', 'Robert Johnson', '+1122334455', 'robert@organicharvest.com', '789 Natural Road, Greentown', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(4, 'Dairy Delight', 'Emma Brown', '+1223344556', 'emma@dairydelight.com', '101 Milk Lane, Farmville', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(5, 'Spice World', 'David White', '+1445566778', 'david@spiceworld.com', '202 Flavor Street, Spicetown', '2025-02-16 18:33:11', '2025-02-16 18:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razib Farhan', 'mdrazib@gmail.com', 1, NULL, '$2y$10$Wek2wM28C3mdWamqgUhB2u4uN.wquj6fngwZptw59EQb5sMJ5yEb6', NULL, '2025-02-13 11:16:30', '2025-02-13 11:16:30'),
(2, 'Salman Shah', 'salman@gmail.com', 2, NULL, '$2y$10$QvX/2tDi.fNDoE5R9b6WIu7qHTn7IpcmBrwsLdL72cp4X8ebqQePi', NULL, '2025-02-13 11:43:54', '2025-02-13 11:43:54'),
(3, 'Aslam', 'aslam@gmail.com', 0, NULL, '$2y$10$CLgBMptWWn5uRljzqgKysuyQfcZSB2KvkLohizlJWiaGMOM8Fod8W', NULL, '2025-02-13 12:21:45', '2025-02-13 12:21:45'),
(4, 'Ana', 'ana@gmail.com', 0, NULL, '$2y$10$dClJ/brypf4b6fLloML8k.vJ845By8XDF2vd4xYPhgP.mWNg4QDka', NULL, '2025-02-13 13:32:22', '2025-02-13 13:32:22'),
(5, 'Delowar Shah', 'delowar@gmail.com', 0, NULL, '$2y$10$CqYCMSGDEntTHX2/TsGcAuAXUenahS.ou9VrGXgpNvbwb21w.4Ybi', NULL, '2025-02-13 23:45:05', '2025-02-13 23:45:05'),
(6, 'Rana', 'rana@gmail.com', 0, NULL, '$2y$10$kxPRy1C4GCW7P8SFox.4OOqZsg0Dcd52gsFGAQwQIcAQVBZkhWoGm', NULL, '2025-02-13 23:49:56', '2025-02-13 23:49:56'),
(7, 'Helal', 'helal@gmail.com', 0, NULL, '$2y$10$ThnaxzBZKl04sAzmuszkUukbNFltEsweiTqvhZKoDIVaX5EVUnIkG', NULL, '2025-02-15 01:20:43', '2025-02-15 01:20:43'),
(8, 'Kader', 'kader@gmail.com', 0, NULL, '$2y$10$RZH9veR0u8casw/8cRXV4.c0vWh/UiteHStasmOGXF0cx1kocZCk.', NULL, '2025-02-15 01:57:57', '2025-02-15 01:57:57'),
(9, 'Akash', 'akash@gmail.com', 0, NULL, '$2y$10$hATMjK1wCmAewmcK2QAn2eN6kIdPsP0.7JkIfgJASiV0AwUftSiM2', NULL, '2025-02-15 08:19:12', '2025-02-15 08:19:12'),
(10, 'Rasel', 'rasel@gmail.com', 0, NULL, '$2y$10$AUV.qi15j8c77yhY47inx.CT0yAYThhoMClgM3MeFVLoYI3VT852S', NULL, '2025-02-15 11:47:58', '2025-02-15 11:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `withdraw_type` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `withdraw_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `staff_id`, `withdraw_type`, `amount`, `menu_item_id`, `quantity`, `withdraw_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Stock Out', 0.00, 3, 5, '2025-02-17', '2025-02-16 18:48:39', '2025-02-16 18:48:39'),
(2, 2, 'Refund', 150.00, 7, 1, '2025-02-16', '2025-02-16 18:48:39', '2025-02-16 18:48:39'),
(3, 3, 'Stock Out', 0.00, 10, 3, '2025-02-15', '2025-02-16 18:48:39', '2025-02-16 18:48:39'),
(4, 4, 'Spoilage', 0.00, 5, 2, '2025-02-14', '2025-02-16 18:48:39', '2025-02-16 18:48:39'),
(5, 1, 'Refund', 250.00, 2, 1, '2025-02-13', '2025-02-16 18:48:39', '2025-02-16 18:48:39');

