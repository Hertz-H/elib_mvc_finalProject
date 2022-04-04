-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 08:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(5) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `phone`, `email`, `bio`, `created_at`, `updated_at`, `created_by`, `is_active`) VALUES
(1, ' afaf', '738 932 3456', 'afaf14albakri@gmail.com', ' afaf afaf afaf afaf afaf afaf', NULL, NULL, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `pages_number` int(2) NOT NULL,
  `category_id` int(3) NOT NULL,
  `author_id` int(3) NOT NULL,
  `publisher_id` int(3) NOT NULL,
  `quantity` int(2) NOT NULL,
  `format` varchar(255) NOT NULL,
  `created_by` int(3) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `price`, `description`, `pages_number`, `category_id`, `author_id`, `publisher_id`, `quantity`, `format`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(11, 'ليلى والذئب ', '6247e562cea42.jpg', 300, '', 30, 1, 1, 1, 1, 'الكتروني', 4, 1, '2022-04-01 18:39:55', '2022-04-01 18:39:55'),
(13, 'فلة ', '6248057de6d02.jpg', 700, '                                  فلة فلة فلة                                       ', 30, 1, 1, 1, 1, 'الكتروني', 4, 1, '2022-04-02 08:02:34', '2022-04-02 08:02:34'),
(14, 'ألف ليلة وليلة', '62482e4de403c.jpg', 700, 'ألف ليلة وليلة', 30, 1, 1, 1, 3, 'الكتروني', 4, 1, '2022-04-02 11:06:53', '2022-04-02 11:06:53'),
(15, 'شارلوك هولمز', '62487ed6839ac.jpg', 700, 'شارلوك شارلوك شارلوك ', 30, 1, 1, 1, 3, 'الكتروني', 4, 1, '2022-04-02 16:50:30', '2022-04-02 16:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `is_active`, `created_at`, `upated_at`, `created_by`) VALUES
(1, 'فكاهي', '62488d9b3435c.jpg', 1, '2022-03-28 20:48:23', '2022-03-28 20:48:23', 10),
(2, 'رعب', '6243357990ef8.jpg', 1, '2022-03-29 16:36:09', '2022-03-29 16:36:09', 4),
(3, 'بولسي', '6243386133718.jpg', 1, '2022-03-29 16:48:33', '2022-03-29 16:48:33', 4),
(4, 'غموض', '6248822b1f793.jpg', 1, '2022-04-02 17:04:43', '2022-04-02 17:04:43', 10),
(5, 'أكشن', '624882b50d175.jpg', 1, '2022-04-02 17:07:01', '2022-04-02 17:07:01', 10),
(6, 'علمي', '62488e2f154c9.jpg', 1, '2022-04-02 17:55:59', '2022-04-02 17:55:59', 10);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(4, ' ذمار ', 1, '2022-03-28 17:52:20', '2022-03-28 17:52:20', 4),
(5, 'البيضاء', 1, '2022-03-28 17:52:20', '2022-03-28 17:52:20', 4),
(6, 'صنعاء', 0, '2022-03-28 17:56:02', '2022-03-28 17:56:02', 4),
(10, 'أب', 0, '2022-03-28 18:13:52', '2022-03-28 18:13:52', 4),
(11, 'تعز', 0, '2022-04-03 07:28:46', '2022-04-03 07:28:46', 14),
(13, 'عدن', 0, '2022-04-04 05:57:55', '2022-04-04 05:57:55', 20);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  `all_books` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `discount`, `start_date`, `end_date`, `book_ids`, `category_ids`, `all_books`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(2, 'عروض حلول رمضان', 30, '2022-03-22', '2022-03-31', NULL, NULL, NULL, 0, '2022-03-29 06:13:54', '2022-03-29 06:13:54', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` int(2) DEFAULT NULL,
  `address_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total`, `discount`, `net_total`, `created_at`, `upadted_at`, `payment_method`, `address_id`) VALUES
(9, 24, 0, 5300, 0, 5300, '2022-04-04 17:35:15', '2022-04-04 17:35:15', 1, 2),
(10, 24, 0, 5300, 0, 5300, '2022-04-04 17:40:05', '2022-04-04 17:40:05', 1, 2),
(11, 24, 0, 700, 0, 700, '2022-04-04 17:44:12', '2022-04-04 17:44:12', 1, 2),
(12, 24, 0, 700, 0, 700, '2022-04-04 17:44:44', '2022-04-04 17:44:44', 1, 2),
(13, 24, 0, 300, 0, 300, '2022-04-04 17:46:23', '2022-04-04 17:46:23', 1, 2),
(14, 24, 0, 700, 0, 700, '2022-04-04 17:47:04', '2022-04-04 17:47:04', 1, 2),
(15, 24, 0, 700, 0, 700, '2022-04-04 17:51:01', '2022-04-04 17:51:01', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL,
  `book_id` int(2) NOT NULL,
  `quantity` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `book_id`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 9, 3, 3, '2022-04-04 17:35:15', '2022-04-04 17:35:15'),
(6, 9, 14, 3, '2022-04-04 17:35:15', '2022-04-04 17:35:15'),
(7, 9, 15, 2, '2022-04-04 17:35:15', '2022-04-04 17:35:15'),
(8, 10, 3, 3, '2022-04-04 17:40:05', '2022-04-04 17:40:05'),
(9, 10, 14, 3, '2022-04-04 17:40:05', '2022-04-04 17:40:05'),
(10, 10, 15, 2, '2022-04-04 17:40:05', '2022-04-04 17:40:05'),
(11, 11, 13, 1, '2022-04-04 17:44:12', '2022-04-04 17:44:12'),
(12, 12, 14, 1, '2022-04-04 17:44:44', '2022-04-04 17:44:44'),
(13, 13, 11, 1, '2022-04-04 17:46:23', '2022-04-04 17:46:23'),
(14, 14, 13, 1, '2022-04-04 17:47:04', '2022-04-04 17:47:04'),
(15, 15, 15, 1, '2022-04-04 17:51:01', '2022-04-04 17:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `payements`
--

CREATE TABLE `payements` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payements`
--

INSERT INTO `payements` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'ماستر كارد', NULL, 1, '2022-03-28 19:07:21', '2022-03-28 19:07:21', 4),
(2, 'visa Card', '6244afd3b1b1c.png', 0, '2022-03-30 19:30:27', '2022-03-30 19:30:27', 4);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alt_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `phone`, `alt_phone`, `fax`, `email`, `address`, `country`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'دار الحكمة', '738 932 3456', '738 932 3456', '234 567', 'afaf14albakri@gmail.com', 'fifty street', 'اليمن', NULL, 1, '2022-03-28 20:33:34', '2022-03-28 20:33:34', 4),
(2, 'دار المعرفة ', '738 932 3456', '738 932 3456', '234 567', 'enas14albakri@gmail.com', 'sixty street', 'اليمن', '62433af4b2453.jpg', 1, '2022-03-29 16:59:32', '2022-03-29 16:59:32', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'user', 1, NULL, NULL),
(2, 'admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 'afaf Aslb', 'afaf12@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2022-03-28 17:48:42', '2022-03-28 17:48:42'),
(10, ' afaf', 'dalia14Ahmed@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 2, '2022-04-02 14:21:11', '2022-04-02 14:21:11'),
(14, ' afaf', 'dgdg@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 1, '2022-04-03 06:03:15', '2022-04-03 06:03:15'),
(20, 'afaf', 'afaf14735albakri@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 2, '2022-04-03 07:47:41', '2022-04-03 07:47:41'),
(24, 'عفاف', 'afaf2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 1, '2022-04-04 05:32:43', '2022-04-04 05:32:43'),
(25, 'ذكرى', 'thekra@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 1, '2022-04-04 05:52:34', '2022-04-04 05:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `city_id` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `city_id`, `address`, `phone`, `is_active`, `created_at`, `updated_at`, `lat`, `lng`) VALUES
(1, 20, 6, 'شارع  الستين ', '777111222', 1, '2022-04-03 16:17:16', '2022-04-03 16:17:16', NULL, NULL),
(2, 24, 6, 'sixty street', '7389323456', 1, '2022-04-04 05:32:43', '2022-04-04 05:32:43', NULL, NULL),
(3, 25, 6, 'fifty street', '7389323456', 1, '2022-04-04 05:52:34', '2022-04-04 05:52:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_payment_methods`
--

CREATE TABLE `user_payment_methods` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `payment_id` int(2) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment_methods`
--

INSERT INTO `user_payment_methods` (`id`, `user_id`, `payment_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 0, '2022-03-28 19:30:53', '2022-03-28 19:30:53'),
(2, 4, 1, 0, '2022-03-28 19:30:53', '2022-03-28 19:30:53'),
(3, 4, 1, 0, '2022-04-01 05:03:29', '2022-04-01 05:03:29'),
(4, 4, 1, 0, '2022-04-01 05:03:29', '2022-04-01 05:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cre_u_id` (`created_by`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_fk` (`role_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id_fk` (`user_id`),
  ADD KEY `ciyty_id_fk` (`city_id`);

--
-- Indexes for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id_ord_fk` (`user_id`);

--
-- Indexes for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payements`
--
ALTER TABLE `payements`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `payements`
--
ALTER TABLE `payements`
  ADD CONSTRAINT `payements_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `cre_u_id` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `ciyty_id_fk` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `u_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  ADD CONSTRAINT `u_id_ord_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
