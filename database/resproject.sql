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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_person`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Farms Ltd.', 'John Doe', '+1234567890', 'john@freshfarms.com', '123 Green Street, Cityville', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(2, 'Ocean Seafood Co.', 'Alice Smith', '+1987654321', 'alice@oceanseafood.com', '456 Blue Avenue, Seaside', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(3, 'Organic Harvest', 'Robert Johnson', '+1122334455', 'robert@organicharvest.com', '789 Natural Road, Greentown', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(4, 'Dairy Delight', 'Emma Brown', '+1223344556', 'emma@dairydelight.com', '101 Milk Lane, Farmville', '2025-02-16 18:33:11', '2025-02-16 18:33:11'),
(5, 'Spice World', 'David White', '+1445566778', 'david@spiceworld.com', '202 Flavor Street, Spicetown', '2025-02-16 18:33:11', '2025-02-16 18:33:11');





CREATE TABLE `reservations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_id` INT(11) NOT NULL,
  `booking_name` VARCHAR(150) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `table_number` INT(11) NOT NULL,
  `guests_count` INT(11) NOT NULL,
  `reservation_date` DATETIME NOT NULL,
  `status` VARCHAR(50) NOT NULL, -- Instead of ENUM, using VARCHAR to store status values
  `special_requests` TEXT DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)

);

INSERT INTO `reservations` (`customer_id`, `booking_name`, `phone`, `email`, `table_number`, `guests_count`, `reservation_date`, `status`, `special_requests`)
VALUES
(1, 'John Doe', '1234567890', 'john.doe@example.com', 5, 4, '2025-03-01 19:00:00', 'confirmed', 'Vegetarian meal preferred'),
(2, 'Alice Smith', '9876543210', 'alice.smith@example.com', 8, 2, '2025-03-02 20:00:00', 'pending', NULL),
(3, 'Michael Brown', '5558887777', 'michael.brown@example.com', 3, 6, '2025-03-05 18:30:00', 'canceled', 'Need extra space for baby stroller'),
(4, 'Emily Johnson', '4445556666', 'emily.johnson@example.com', 10, 3, '2025-03-07 19:45:00', 'confirmed', 'Allergic to nuts'),
(5, 'David Wilson', '1112223333', 'david.wilson@example.com', 2, 5, '2025-03-10 21:00:00', 'completed', 'Celebrating a birthday');




--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(7, 'Pizza', 'Pizza.jpg', '2025-02-15 12:16:53', '2025-02-19 12:04:15'),
(8, 'Burger', 'Burger.jpg', '2025-02-15 12:43:06', '2025-02-15 12:43:06'),
(9, 'Salad', 'Salad.jpg', '2025-02-15 12:54:55', '2025-02-15 12:54:55'),
(10, 'Lunch', 'Lunch.jpg', '2025-02-19 12:03:51', '2025-02-19 12:03:51'),
(11, 'Dinner', 'Dinner.jpg', '2025-02-19 12:05:07', '2025-02-19 12:05:07'),
(12, 'Breakfast', 'Breakfast.jpg', '2025-02-19 12:06:26', '2025-02-19 12:06:26'),
(13, 'Deserts', 'Deserts.jpg', '2025-02-19 12:07:45', '2025-02-19 12:07:45'),
(14, 'Beverages', 'Beverages.jpg', '2025-02-19 12:08:51', '2025-02-19 12:08:51');

-- --------------------------------------------------------


CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,

  `is_active` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ;
INSERT INTO `menus` (`name`) VALUES
('Breakfast Menu'),
('Lunch Menu'),
('Dinner Menu');

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menus_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo` VARCHAR(255) NULL,
  `price` decimal(8,2) NOT NULL,
  `description` TEXT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)

);

INSERT INTO `menu_items` (`menus_id`, `product_id`, `photo`, `price`, `description`, `is_available`) VALUES
(1, 1, 'grilled_chicken.jpg', 12.99, 'Grilled chicken served with toast and eggs.', 1),
(1, 3, 'caesar_salad.jpg', 7.99, 'Classic Caesar salad with croutons and Parmesan cheese.', 1),
(2, 2, 'veggie_burger.jpg', 8.99, 'Delicious veggie burger with fresh lettuce and tomato.', 1),
(3, 1, 'grilled_chicken_dinner.jpg', 14.99, 'Grilled chicken served with mashed potatoes and vegetables.', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `rating` int(1) NOT NULL CHECK (`rating` between 1 and 5),
  `review` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`id`, `customer_id`, `product_id`, `order_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 5, 'Excellent taste, will order again!', '2025-02-21 00:02:48', '2025-02-21 00:02:48'),
(2, 2, 2, 2, 4, 'Very good, but a little too spicy for me.', '2025-02-21 00:02:48', '2025-02-21 00:02:48'),
(3, 3, 3, 3, 3, 'Good salad, but it was a bit soggy.', '2025-02-21 00:02:48', '2025-02-21 00:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_orders`
--

CREATE TABLE `delivery_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `delivery_fee` decimal(8,2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_orders`
--

INSERT INTO `delivery_orders` (`id`, `order_id`, `delivery_address`, `delivery_date`, `status_id`, `assigned_to`, `delivery_fee`, `created_at`, `updated_at`) VALUES
(1, 1, '123 Elm St, Springfield', '2025-02-22 00:05:12', 1, 1, 5.00, '2025-02-21 00:05:12', '2025-02-21 00:05:12'),
(2, 2, '456 Oak St, Springfield', '2025-02-23 00:05:12', 2, 2, 3.00, '2025-02-21 00:05:12', '2025-02-21 00:05:12'),
(3, 3, '789 Pine St, Springfield', '2025-02-24 00:05:12', 3, 3, 4.00, '2025-02-21 00:05:12', '2025-02-21 00:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `category`, `amount`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Supplies', 100.00, 'Purchase of fresh ingredients', '2025-02-21 00:05:28', '2025-02-21 00:05:28', '2025-02-21 00:05:28'),
(2, 'Utilities', 50.00, 'Electricity and water bills for the restaurant', '2025-02-21 00:05:28', '2025-02-21 00:05:28', '2025-02-21 00:05:28'),
(3, 'Staff Salary', 500.00, 'Monthly salary for staff', '2025-02-21 00:05:28', '2025-02-21 00:05:28', '2025-02-21 00:05:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
    `quantity` int(11) NOT NULL,
    `expiry_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `supplier_id`, `quantity`, `unit_price`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100, 5.00, '2025-12-31', '2025-02-21 00:01:13', '2025-02-21 00:01:13'),
(2, 2, 2, 50, 3.50, '2025-06-30', '2025-02-21 00:01:13', '2025-02-21 00:01:13'),
(3, 3, 3, 80, 2.00, '2025-09-30', '2025-02-21 00:01:13', '2025-02-21 00:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `order_id`, `invoice_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1001, '2025-02-20 18:02:21', '2025-02-20 18:02:21'),
(2, 2, 1002, '2025-02-20 18:02:21', '2025-02-20 18:02:21'),
(3, 3, 1003, '2025-02-20 18:02:21', '2025-02-20 18:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_orders`
--

CREATE TABLE `kitchen_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen_orders`
--

INSERT INTO `kitchen_orders` (`id`, `order_id`, `product_id`, `quantity`, `status_id`, `assigned_to`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 1, '2025-02-21 00:03:01', '2025-02-21 00:03:01'),
(2, 2, 2, 1, 2, 2, '2025-02-21 00:03:01', '2025-02-21 00:03:01'),
(3, 3, 3, 3, 3, 3, '2025-02-21 00:03:01', '2025-02-21 00:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `delivery_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `user_id`, `total_amount`, `discount`, `status_id`, `order_date`, `delivery_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 35.50, 5.00, 1, '2025-02-21 00:00:42', '2025-02-22 00:00:42', '2025-02-21 00:00:42', '2025-02-21 00:00:42'),
(2, 2, 2, 25.00, 0.00, 2, '2025-02-21 00:00:42', '2025-02-23 00:00:42', '2025-02-21 00:00:42', '2025-02-21 00:00:42'),
(3, 3, 1, 45.75, 3.00, 3, '2025-02-21 00:00:42', '2025-02-24 00:00:42', '2025-02-21 00:00:42', '2025-02-21 00:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 12.99, '2025-02-21 00:00:59', '2025-02-21 00:00:59'),
(2, 2, 2, 1, 8.99, '2025-02-21 00:00:59', '2025-02-21 00:00:59'),
(3, 3, 3, 3, 7.99, '2025-02-21 00:00:59', '2025-02-21 00:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL, -- আলাদা টেবিল বাদ, এখানে পেমেন্ট মেথড স্টোর হবে
  `payment_status_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `payments` (`id`, `order_id`, `customer_id`, `payment_method`, `payment_status_id`, `amount`, `transaction_id`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Credit Card', 1, 30.50, 'TXN001', '2025-02-20 18:01:29', '2025-02-21 00:01:29', '2025-02-21 00:01:29'),
(2, 2, 2, 'PayPal', 2, 25.00, 'TXN002', '2025-02-20 18:01:29', '2025-02-21 00:01:29', '2025-02-21 00:01:29'),
(3, 3, 3, 'Cash', 3, 42.75, 'TXN003', '2025-02-20 18:01:29', '2025-02-21 00:01:29', '2025-02-21 00:01:29');


-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 'Payment is yet to be processed', '2025-02-20 18:01:45', '2025-02-20 18:01:45'),
(2, 'Completed', 'Payment has been successfully processed', '2025-02-20 18:01:45', '2025-02-20 18:01:45'),
(3, 'Failed', 'Payment processing failed', '2025-02-20 18:01:45', '2025-02-20 18:01:45');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,

  `photo` varchar(150) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `stock_quantity` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `photo`, `is_featured`, `stock_quantity`, `reorder_level`, `created_at`, `updated_at`) VALUES
(1, 'Grilled Chicken', 1, 12.99, 'grilled_chicken.jpg', 1, 50, 5, '2025-02-21 00:00:24', '2025-02-21 00:00:24'),
(2, 'Veggie Burger', 2, 8.99,  'veggie_burger.jpg', 0, 30, 3, '2025-02-21 00:00:24', '2025-02-21 00:00:24'),
(3, 'Caesar Salad', 3, 7.99, 'caesar_salad.jpg', 1, 40, 4, '2025-02-21 00:00:24', '2025-02-21 00:00:24');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `position`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Razib Farhan', 'https://www.freepik.com/free-vector/smiling-young-man-illustration_336635642.htm#fromView=keyword&page=1&position=2&uuid=a7d3d90b-44d3-4df8-b187-10112ebfe2a6&query=Avatar', '2025-02-17 04:23:42', '2025-02-17 18:45:53'),
(2, 'Manager', 'Salman Shah', 'https://www.freepik.com/free-vector/mysterious-mafia-man-wearing-hat_7074313.htm#fromView=keyword&page=1&position=4&uuid=a7d3d90b-44d3-4df8-b187-10112ebfe2a6&query=Avatar', '2025-02-17 04:23:42', '2025-02-17 18:46:19'),
(3, 'Chef', 'Rana', '', '2025-02-17 04:23:42', '2025-02-19 18:21:39'),
(4, 'Waiter', 'Abdul Kader', '', '2025-02-17 04:23:42', '2025-02-17 07:00:50'),
(5, 'Cashier', 'Aslam Khan', '', '2025-02-17 04:23:42', '2025-02-17 07:01:07'),
(6, 'Customer', 'Raqeebul Khan', '', '2025-02-17 04:23:42', '2025-02-17 07:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `photo`, `phone`, `email`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jack Daniels', 'jack.jpg', '555-111-2222', 'jack@restaurant.com', 'Chef', 'Active', '2025-02-21 00:04:50', '2025-02-21 00:04:50'),
(2, 'Olivia Brown', 'olivia.jpg', '555-333-4444', 'olivia@restaurant.com', 'Waiter', 'Active', '2025-02-21 00:04:50', '2025-02-21 00:04:50'),
(3, 'Sophia White', 'sophia.jpg', '555-555-6666', 'sophia@restaurant.com', 'Manager', 'Active', '2025-02-21 00:04:50', '2025-02-21 00:04:50');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razib Farhan', 'mdrazib@gmail.com', 1, NULL, '$2y$10$Wek2wM28C3mdWamqgUhB2u4uN.wquj6fngwZptw59EQb5sMJ5yEb6', NULL, '2025-02-13 11:16:30', '2025-02-13 11:16:30'),
(2, 'Salman Shah', 'salman@gmail.com', 2, NULL, '$2y$10$QvX/2tDi.fNDoE5R9b6WIu7qHTn7IpcmBrwsLdL72cp4X8ebqQePi', NULL, '2025-02-13 11:43:54', '2025-02-13 11:43:54'),
(3, 'Aslam Khan', 'aslam@gmail.com', 5, NULL, '$2y$10$CLgBMptWWn5uRljzqgKysuyQfcZSB2KvkLohizlJWiaGMOM8Fod8W', NULL, '2025-02-13 12:21:45', '2025-02-13 12:21:45'),
(5, 'Delowar Shah', 'delowar@gmail.com', 0, NULL, '$2y$10$CqYCMSGDEntTHX2/TsGcAuAXUenahS.ou9VrGXgpNvbwb21w.4Ybi', NULL, '2025-02-13 23:45:05', '2025-02-13 23:45:05'),
(6, 'Rana', 'rana@gmail.com', 3, NULL, '$2y$10$kxPRy1C4GCW7P8SFox.4OOqZsg0Dcd52gsFGAQwQIcAQVBZkhWoGm', NULL, '2025-02-13 23:49:56', '2025-02-13 23:49:56'),
(7, 'Helal', 'helal@gmail.com', 0, NULL, '$2y$10$ThnaxzBZKl04sAzmuszkUukbNFltEsweiTqvhZKoDIVaX5EVUnIkG', NULL, '2025-02-15 01:20:43', '2025-02-15 01:20:43'),
(8, 'Kader', 'kader@gmail.com', 0, NULL, '$2y$10$RZH9veR0u8casw/8cRXV4.c0vWh/UiteHStasmOGXF0cx1kocZCk.', NULL, '2025-02-15 01:57:57', '2025-02-15 01:57:57'),
(9, 'Akash', 'akash@gmail.com', 0, NULL, '$2y$10$hATMjK1wCmAewmcK2QAn2eN6kIdPsP0.7JkIfgJASiV0AwUftSiM2', NULL, '2025-02-15 08:19:12', '2025-02-15 08:19:12'),
(10, 'Rasel', 'rasel@gmail.com', 0, NULL, '$2y$10$AUV.qi15j8c77yhY47inx.CT0yAYThhoMClgM3MeFVLoYI3VT852S', NULL, '2025-02-15 11:47:58', '2025-02-15 11:47:58');

