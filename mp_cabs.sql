-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2020 at 12:54 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_cabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `customer_id`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, '34069 Juanita Spur Suite 158Bogisichhaven, MN 23049-5569', NULL, '2020-02-03 06:41:48', '2020-02-03 06:41:48'),
(2, 5, '952 Tristian GroveBarrowsview, WI 45942', NULL, '2020-02-03 06:41:48', '2020-02-03 06:41:48'),
(3, 4, '9738 Barton ParksMinamouth, HI 97899', NULL, '2020-02-05 02:58:26', '2020-02-05 02:58:26'),
(4, 4, '5940 Annette AlleyEast Destin, LA 84413', NULL, '2020-02-05 02:58:26', '2020-02-05 02:58:26'),
(5, 7, 'test1', NULL, '2020-02-06 02:38:47', '2020-02-06 02:38:47'),
(6, 7, 'test2', NULL, '2020-02-06 02:38:47', '2020-02-06 02:38:47'),
(7, 7, 'test000001', NULL, '2020-02-06 02:40:15', '2020-02-06 02:40:15'),
(8, 7, 'test0000002', NULL, '2020-02-06 02:40:15', '2020-02-06 02:40:15'),
(9, 7, 'test123', NULL, '2020-02-06 02:54:38', '2020-02-06 02:54:38'),
(10, 7, 'test12354', NULL, '2020-02-06 02:59:22', '2020-02-06 02:59:22'),
(11, 7, 'test00000024654', NULL, '2020-02-06 02:59:22', '2020-02-06 02:59:22'),
(12, 7, 'bhopal', NULL, '2020-02-28 05:30:49', '2020-02-28 05:30:49'),
(13, 7, 'betul', NULL, '2020-02-28 05:30:49', '2020-02-28 05:30:49'),
(14, 17, 'bhavnagar', NULL, '2020-02-28 23:51:44', '2020-02-28 23:51:44'),
(15, 17, 'rajkot', NULL, '2020-02-28 23:51:44', '2020-02-28 23:51:44'),
(16, 17, 'bhopal', NULL, '2020-03-03 00:08:06', '2020-03-03 00:08:06'),
(17, 17, 'betul', NULL, '2020-03-03 00:08:06', '2020-03-03 00:08:06'),
(18, 7, 'gfdfg', NULL, '2020-03-03 00:31:00', '2020-03-03 00:31:00'),
(19, 7, 'hhhh', NULL, '2020-03-03 00:31:00', '2020-03-03 00:31:00'),
(20, 7, 'gfdfg123', NULL, '2020-03-04 05:45:31', '2020-03-04 05:45:31'),
(21, 7, 'hhhh45645', NULL, '2020-03-04 05:45:31', '2020-03-04 05:45:31'),
(22, 7, 'sagar', NULL, '2020-03-04 07:19:00', '2020-03-04 07:19:00'),
(23, 17, 'Sint rerum sit cumq', NULL, '2020-03-04 07:19:22', '2020-03-04 07:19:22'),
(24, 17, 'Dignissimos modi occ', NULL, '2020-03-04 07:19:22', '2020-03-04 07:19:22'),
(25, 17, 'sagar', NULL, '2020-03-09 02:35:41', '2020-03-09 02:35:41'),
(26, 7, 'bhavnagar', NULL, '2020-03-09 04:36:43', '2020-03-09 04:36:43'),
(27, 24, 'test', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(28, 24, 'bhopal', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `api_settings`
--

CREATE TABLE `api_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `api_settings`
--

INSERT INTO `api_settings` (`id`, `key_name`, `key_value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'api', '1', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(2, 'anyone_register', '0', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(3, 'region_availability', 'region one, region two, region three', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(4, 'driver_review', '1', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(5, 'booking', '3', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(6, 'cancel', '2', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(7, 'max_trip', '1', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL),
(8, 'api_key', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(9, 'db_url', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(10, 'db_secret', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(11, 'server_key', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(12, 'google_api', '0', '2020-02-01 05:12:19', '2020-02-11 23:06:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_booked` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `pickup` timestamp NULL DEFAULT NULL,
  `dropoff` timestamp NULL DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `pickup_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dest_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `travellers` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `payment` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `is_booked`, `customer_id`, `user_id`, `vehicle_id`, `driver_id`, `pickup`, `dropoff`, `duration`, `pickup_addr`, `dest_addr`, `note`, `travellers`, `status`, `payment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 30, 1, 3, 8, '2020-03-19 06:09:43', '2020-03-19 06:09:43', NULL, 'bhavnagar', 'rajkot', 'test', 3, 0, 0, '2020-03-18 22:58:52', '2020-03-19 10:05:09', NULL),
(2, 1, 30, NULL, NULL, NULL, NULL, NULL, NULL, 'bhavnagar', 'bhopal', 'test', 6, 0, 0, '2020-03-18 22:59:52', '2020-03-18 22:59:52', NULL),
(3, 1, 30, 1, 20, 4, '2020-03-20 10:18:04', '2020-03-20 13:18:04', NULL, 'Bhavnagar', 'Rajkot', 'test', 6, 0, 0, '2020-03-18 23:20:46', '2020-03-20 10:18:08', NULL),
(4, 1, 24, 1, 3, 18, '2020-03-18 23:53:46', '2020-03-18 23:53:46', NULL, 'junagadh', 'bhavnagar', NULL, 15, 1, 1, '2020-03-18 23:54:00', '2020-03-19 09:40:25', NULL),
(5, 1, 30, NULL, NULL, NULL, NULL, NULL, NULL, 'indore', 'sagar', NULL, 3, 0, 0, '2020-03-19 00:08:55', '2020-03-19 00:08:55', NULL),
(6, 1, 30, NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'rajkot', NULL, 1, 0, 0, '2020-03-19 05:40:34', '2020-03-19 05:40:34', NULL),
(7, 1, 30, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2020-03-20 06:11:49', '2020-03-20 06:12:35', NULL),
(8, 1, 30, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2020-03-20 06:16:36', '2020-03-20 06:17:04', NULL),
(9, 1, 30, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2020-03-20 06:44:19', '2020-03-20 06:44:19', NULL),
(10, 1, 30, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, '2020-03-20 06:46:19', '2020-03-20 06:46:19', NULL),
(11, 1, 30, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2020-03-20 06:47:16', '2020-03-20 06:47:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_meta`
--

CREATE TABLE `bookings_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings_meta`
--

INSERT INTO `bookings_meta` (`id`, `booking_id`, `type`, `key`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'string', 'vehicle_typeid', '3', NULL, '2020-03-18 22:58:52', '2020-03-18 22:58:52'),
(2, 1, 'string', 'booking_option', 'Rental', NULL, '2020-03-18 22:58:52', '2020-03-19 10:05:09'),
(3, 1, 'integer', 'accept_status', '0', NULL, '2020-03-18 22:58:52', '2020-03-18 22:58:52'),
(4, 1, 'integer', 'booking_type', '1', NULL, '2020-03-18 22:58:52', '2020-03-18 22:58:52'),
(5, 1, 'string', 'ride_status', 'Upcoming', NULL, '2020-03-18 22:58:52', '2020-03-19 06:09:47'),
(6, 1, 'string', 'journey_date', '19-03-2020', NULL, '2020-03-18 22:58:52', '2020-03-18 22:58:52'),
(7, 1, 'string', 'journey_time', '11:39:43', NULL, '2020-03-18 22:58:52', '2020-03-19 06:09:47'),
(8, 2, 'string', 'vehicle_typeid', '6', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(9, 2, 'string', 'booking_option', 'RoundTrip', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(10, 2, 'integer', 'accept_status', '0', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(11, 2, 'integer', 'booking_type', '1', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(12, 2, 'NULL', 'ride_status', NULL, NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(13, 2, 'string', 'journey_date', '21-03-2020', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(14, 2, 'string', 'journey_time', '10:30:00', NULL, '2020-03-18 22:59:52', '2020-03-18 22:59:52'),
(15, 3, 'string', 'vehicle_typeid', '4', NULL, '2020-03-18 23:20:46', '2020-03-18 23:20:46'),
(16, 3, 'string', 'booking_option', 'Route', NULL, '2020-03-18 23:20:46', '2020-03-20 10:18:08'),
(17, 3, 'integer', 'accept_status', '0', NULL, '2020-03-18 23:20:46', '2020-03-18 23:20:46'),
(18, 3, 'integer', 'booking_type', '1', NULL, '2020-03-18 23:20:46', '2020-03-18 23:20:46'),
(19, 3, 'string', 'ride_status', 'Upcoming', NULL, '2020-03-18 23:20:46', '2020-03-20 10:18:08'),
(20, 3, 'string', 'journey_date', '20-03-2020', NULL, '2020-03-18 23:20:46', '2020-03-20 10:18:08'),
(21, 3, 'string', 'journey_time', '15:48:04', NULL, '2020-03-18 23:20:46', '2020-03-20 10:18:08'),
(22, 3, 'string', 'return_date', '23-03-2020', NULL, '2020-03-18 23:20:46', '2020-03-18 23:20:46'),
(23, 3, 'string', 'return_time', '15:00:00', NULL, '2020-03-18 23:20:46', '2020-03-18 23:20:46'),
(24, 4, 'string', 'booking_option', 'Route', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:44'),
(25, 4, 'NULL', 'package_id', NULL, NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:44'),
(26, 4, 'string', 'route_id', '12', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:55'),
(27, 4, 'string', 'udf', 'N;', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(28, 4, 'integer', 'accept_status', '1', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(29, 4, 'string', 'ride_status', 'Completed', NULL, '2020-03-18 23:54:00', '2020-03-19 09:40:25'),
(30, 4, 'integer', 'booking_type', '1', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(31, 4, 'string', 'journey_date', '19-03-2020', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(32, 4, 'string', 'journey_time', '05:23:46', NULL, '2020-03-18 23:54:00', '2020-03-18 23:54:00'),
(33, 5, 'string', 'vehicle_typeid', '3', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(34, 5, 'string', 'booking_option', 'Local', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(35, 5, 'integer', 'accept_status', '0', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(36, 5, 'integer', 'booking_type', '0', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(37, 5, 'NULL', 'ride_status', NULL, NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(38, 5, 'string', 'journey_date', '19-03-2020', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(39, 5, 'string', 'journey_time', '05:38:55', NULL, '2020-03-19 00:08:55', '2020-03-19 00:08:55'),
(40, 6, 'string', 'vehicle_typeid', '3', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(41, 6, 'string', 'booking_option', 'Local', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(42, 6, 'integer', 'accept_status', '0', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(43, 6, 'integer', 'booking_type', '0', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(44, 6, 'NULL', 'ride_status', NULL, NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(45, 6, 'string', 'journey_date', '19-03-2020', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(46, 6, 'string', 'journey_time', '11:10:34', NULL, '2020-03-19 05:40:34', '2020-03-19 05:40:34'),
(47, 1, 'string', 'package_id', '3', NULL, '2020-03-19 06:09:47', '2020-03-19 10:05:09'),
(48, 1, 'NULL', 'route_id', NULL, NULL, '2020-03-19 06:09:47', '2020-03-19 06:09:47'),
(49, 1, 'string', 'udf', 'N;', NULL, '2020-03-19 06:09:47', '2020-03-19 06:09:47'),
(50, 4, 'string', 'customerid', '24', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(51, 4, 'string', 'vehicleid', '3', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(52, 4, 'NULL', 'day', NULL, NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(53, 4, 'string', 'mileage', '200', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(54, 4, 'NULL', 'waiting_time', NULL, NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(55, 4, 'string', 'date', '2020-03-19', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(56, 4, 'string', 'total', '500', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(57, 4, 'string', 'total_kms', '200', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(58, 4, 'string', 'tax_total', '550', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(59, 4, 'string', 'total_tax_percent', '10', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(60, 4, 'string', 'total_tax_charge_rs', '50', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(61, 4, 'string', 'driving_time', '5 hr', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(62, 4, 'string', 'approx_timetoreach', '5 hr', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(63, 4, 'integer', 'receipt', '1', NULL, '2020-03-19 09:18:14', '2020-03-19 09:18:14'),
(64, 4, 'string', 'payment_method', 'razorpay', NULL, '2020-03-19 09:40:26', '2020-03-19 09:40:26'),
(65, 7, 'string', 'booking_option', 'Rental', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(66, 7, 'string', 'package_id', '3', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(67, 7, 'integer', 'booking_type', '1', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(68, 7, 'string', 'journey_date', '20-03-2020', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(69, 7, 'string', 'journey_time', '14:30:00', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(70, 7, 'integer', 'customerid', '30', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(71, 7, 'string', 'vehicleid', '3', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(72, 7, 'NULL', 'day', NULL, NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(73, 7, 'integer', 'mileage', '0', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(74, 7, 'integer', 'waiting_time', '0', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(75, 7, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(76, 7, 'NULL', 'total', NULL, NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(77, 7, 'integer', 'total_kms', '0', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(78, 7, 'string', 'tax_total', '550', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(79, 7, 'NULL', 'total_tax_percent', NULL, NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(80, 7, 'string', 'total_tax_charge_rs', '50', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(81, 7, 'string', 'driving_time', '5hr', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(82, 7, 'string', 'approx_timetoreach', '5hr', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(83, 7, 'integer', 'receipt', '1', NULL, '2020-03-20 06:11:49', '2020-03-20 06:11:49'),
(84, 7, 'string', 'payment_method', 'razorpay', NULL, '2020-03-20 06:12:35', '2020-03-20 06:12:35'),
(85, 7, 'string', 'ride_status', 'Completed', NULL, '2020-03-20 06:12:35', '2020-03-20 06:12:35'),
(86, 8, 'string', 'booking_option', 'Rental', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(87, 8, 'string', 'package_id', '4', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(88, 8, 'integer', 'booking_type', '1', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(89, 8, 'string', 'journey_date', '21-03-2020', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(90, 8, 'string', 'journey_time', '13:00:00', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(91, 8, 'integer', 'customerid', '30', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(92, 8, 'string', 'vehicleid', '4', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(93, 8, 'NULL', 'day', NULL, NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(94, 8, 'integer', 'mileage', '0', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(95, 8, 'integer', 'waiting_time', '0', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(96, 8, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(97, 8, 'double', 'total', '1000', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(98, 8, 'integer', 'total_kms', '0', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(99, 8, 'string', 'tax_total', '1100', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(100, 8, 'string', 'total_tax_percent', '10', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(101, 8, 'string', 'total_tax_charge_rs', '100', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(102, 8, 'string', 'driving_time', '10hr', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(103, 8, 'string', 'approx_timetoreach', '10hr', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(104, 8, 'integer', 'receipt', '1', NULL, '2020-03-20 06:16:37', '2020-03-20 06:16:37'),
(105, 8, 'string', 'payment_method', 'razorpay', NULL, '2020-03-20 06:17:04', '2020-03-20 06:17:04'),
(106, 8, 'string', 'ride_status', 'Completed', NULL, '2020-03-20 06:17:04', '2020-03-20 06:17:04'),
(107, 1, 'string', 'customerid', '30', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(108, 1, 'string', 'vehicleid', '3', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(109, 1, 'NULL', 'day', NULL, NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(110, 1, 'string', 'mileage', '0', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(111, 1, 'NULL', 'waiting_time', NULL, NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(112, 1, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(113, 1, 'string', 'total', '500', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(114, 1, 'string', 'total_kms', '0', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(115, 1, 'string', 'tax_total', '550', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(116, 1, 'string', 'total_tax_percent', '10', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(117, 1, 'string', 'total_tax_charge_rs', '50', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(118, 1, 'string', 'calculateby', 'km', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(119, 1, 'string', 'driving_time', '5hr', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(120, 1, 'string', 'approx_timetoreach', '5hr', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(121, 1, 'integer', 'receipt', '1', NULL, '2020-03-20 06:41:19', '2020-03-20 06:41:19'),
(122, 9, 'string', 'booking_option', 'Rental', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(123, 9, 'string', 'package_id', '4', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(124, 9, 'integer', 'booking_type', '1', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(125, 9, 'string', 'journey_date', '20-03-2020', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(126, 9, 'string', 'journey_time', '12:30:00', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(127, 9, 'integer', 'customerid', '30', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(128, 9, 'string', 'vehicleid', '4', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(129, 9, 'NULL', 'day', NULL, NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(130, 9, 'integer', 'mileage', '0', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(131, 9, 'integer', 'waiting_time', '0', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(132, 9, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(133, 9, 'double', 'total', '1000', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(134, 9, 'integer', 'total_kms', '0', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(135, 9, 'string', 'tax_total', '1100', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(136, 9, 'string', 'total_tax_percent', '10', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(137, 9, 'string', 'total_tax_charge_rs', '100', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(138, 9, 'string', 'driving_time', '10hr', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(139, 9, 'string', 'approx_timetoreach', '10hr', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(140, 9, 'integer', 'receipt', '1', NULL, '2020-03-20 06:44:19', '2020-03-20 06:44:19'),
(141, 10, 'string', 'booking_option', 'Rental', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(142, 10, 'string', 'package_id', '4', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(143, 10, 'integer', 'booking_type', '1', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(144, 10, 'string', 'journey_date', '20-03-2020', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(145, 10, 'string', 'journey_time', '12:30:00', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(146, 10, 'integer', 'customerid', '30', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(147, 10, 'string', 'vehicleid', '4', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(148, 10, 'NULL', 'day', NULL, NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(149, 10, 'integer', 'mileage', '0', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(150, 10, 'integer', 'waiting_time', '0', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(151, 10, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(152, 10, 'double', 'total', '1000', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(153, 10, 'integer', 'total_kms', '0', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(154, 10, 'string', 'tax_total', '1100', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(155, 10, 'string', 'total_tax_percent', '10', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(156, 10, 'string', 'total_tax_charge_rs', '100', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(157, 10, 'string', 'driving_time', '10hr', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(158, 10, 'string', 'approx_timetoreach', '10hr', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(159, 10, 'integer', 'receipt', '1', NULL, '2020-03-20 06:46:19', '2020-03-20 06:46:19'),
(160, 11, 'string', 'booking_option', 'Rental', NULL, '2020-03-20 06:47:16', '2020-03-20 06:47:16'),
(161, 11, 'string', 'package_id', '5', NULL, '2020-03-20 06:47:16', '2020-03-20 06:47:16'),
(162, 11, 'integer', 'booking_type', '1', NULL, '2020-03-20 06:47:16', '2020-03-20 06:47:16'),
(163, 11, 'string', 'journey_date', '28-03-2020', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(164, 11, 'string', 'journey_time', '14:00:00', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(165, 11, 'integer', 'customerid', '30', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(166, 11, 'string', 'vehicleid', '5', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(167, 11, 'NULL', 'day', NULL, NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(168, 11, 'integer', 'mileage', '0', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(169, 11, 'integer', 'waiting_time', '0', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(170, 11, 'string', 'date', '2020-03-20', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(171, 11, 'double', 'total', '2000', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(172, 11, 'integer', 'total_kms', '0', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(173, 11, 'string', 'tax_total', '2200', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(174, 11, 'string', 'total_tax_percent', '10', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(175, 11, 'string', 'total_tax_charge_rs', '200', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(176, 11, 'string', 'driving_time', '2hr', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(177, 11, 'string', 'approx_timetoreach', '2hr', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(178, 11, 'integer', 'receipt', '1', NULL, '2020-03-20 06:47:17', '2020-03-20 06:47:17'),
(179, 11, 'string', 'payment_method', 'razorpay', NULL, '2020-03-20 06:47:43', '2020-03-20 06:47:43'),
(180, 11, 'string', 'ride_status', 'Completed', NULL, '2020-03-20 06:47:53', '2020-03-20 06:47:53'),
(181, 3, 'NULL', 'package_id', NULL, NULL, '2020-03-20 10:18:08', '2020-03-20 10:18:08'),
(182, 3, 'string', 'route_id', '11', NULL, '2020-03-20 10:18:08', '2020-03-20 10:18:08'),
(183, 3, 'string', 'udf', 'N;', NULL, '2020-03-20 10:18:08', '2020-03-20 10:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `booking_income`
--

CREATE TABLE `booking_income` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `income_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_income`
--

INSERT INTO `booking_income` (`id`, `booking_id`, `income_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 1, '2020-03-19 09:18:14', '2020-03-19 09:18:14', NULL),
(2, 7, 2, '2020-03-20 06:11:49', '2020-03-20 06:11:49', NULL),
(3, 8, 3, '2020-03-20 06:16:37', '2020-03-20 06:16:37', NULL),
(4, 1, 4, '2020-03-20 06:41:19', '2020-03-20 06:41:19', NULL),
(5, 9, 5, '2020-03-20 06:44:19', '2020-03-20 06:44:19', NULL),
(6, 10, 6, '2020-03-20 06:46:19', '2020-03-20 06:46:19', NULL),
(7, 11, 7, '2020-03-20 06:47:17', '2020-03-20 06:47:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_payments`
--

CREATE TABLE `booking_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_payments`
--

INSERT INTO `booking_payments` (`id`, `booking_id`, `method`, `transaction_id`, `amount`, `payment_status`, `payment_details`, `created_at`, `updated_at`) VALUES
(1, 3, 'cash', NULL, 287.5, 'succeeded', NULL, '2020-03-03 04:20:56', '2020-03-03 04:20:56'),
(2, 1, 'cash', NULL, 506, 'succeeded', NULL, '2020-03-03 07:27:40', '2020-03-03 07:27:40'),
(3, 4, 'razorpay', 'pay_EU1zJGbNgslJ8N', 550, 'succeeded', '{\"razorpay_payment_id\":\"pay_EU1zJGbNgslJ8N\",\"razorpay_order_id\":\"order_EU1x5ff3WwQGkn\",\"razorpay_signature\":\"745ff66ec143c47aa175710d348821bd75a92c60769127025713265ba8ad27c8\",\"entity\":\"payment\",\"amount\":55000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_EU1x5ff3WwQGkn\",\"invoice_id\":null,\"international\":false,\"method\":\"card\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":null,\"card_id\":\"card_EU1zJLJTyH1bgs\",\"bank\":null,\"wallet\":null,\"vpa\":null,\"email\":\"himani@hyvikk.com\",\"contact\":\"+919876543210\",\"fee\":963,\"tax\":0,\"error_code\":null,\"error_description\":null,\"created_at\":1584610819}', '2020-03-19 09:40:25', '2020-03-19 09:40:25'),
(4, 7, 'razorpay', 'pay_EUMytwWiglqkas', 550, 'succeeded', '{\"razorpay_payment_id\":\"pay_EUMytwWiglqkas\",\"razorpay_order_id\":\"order_EUMyD8QBuZHqZi\",\"razorpay_signature\":\"4d97d7287464ed39d9bc95bcd74fcfd6634286bc11cff2cabcfe97964c0698ec\",\"entity\":\"payment\",\"amount\":55000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_EUMyD8QBuZHqZi\",\"invoice_id\":null,\"international\":false,\"method\":\"netbanking\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":null,\"card_id\":null,\"bank\":\"SBIN\",\"wallet\":null,\"vpa\":null,\"email\":\"himani@hyvikk.com\",\"contact\":\"123456789\",\"fee\":1137,\"tax\":174,\"error_code\":null,\"error_description\":null,\"created_at\":1584684749}', '2020-03-20 06:12:35', '2020-03-20 06:12:35'),
(5, 8, 'razorpay', 'pay_EUN3fnJNxXMwLO', 1100, 'succeeded', '{\"razorpay_payment_id\":\"pay_EUN3fnJNxXMwLO\",\"razorpay_order_id\":\"order_EUN3GWO0itCttU\",\"razorpay_signature\":\"67a4ed16e351c15a15ef6d6f86991c287da088d7c617dcac1edc07a4c4900d2b\",\"entity\":\"payment\",\"amount\":110000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_EUN3GWO0itCttU\",\"invoice_id\":null,\"international\":false,\"method\":\"wallet\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":null,\"card_id\":null,\"bank\":null,\"wallet\":\"jiomoney\",\"vpa\":null,\"email\":\"qomuf@mailinator.com\",\"contact\":\"+911234567890\",\"fee\":2271,\"tax\":346,\"error_code\":null,\"error_description\":null,\"created_at\":1584685020}', '2020-03-20 06:17:04', '2020-03-20 06:17:04'),
(6, 11, 'razorpay', 'pay_EUNa2186VESziE', 2200, 'succeeded', '{\"razorpay_payment_id\":\"pay_EUNa2186VESziE\",\"razorpay_order_id\":\"order_EUNZfCMXniae2R\",\"razorpay_signature\":\"006a6b150be450c6d74f499c21b3fb6bb70b2dc4833b3a66819a74899d699a9a\",\"entity\":\"payment\",\"amount\":220000,\"currency\":\"INR\",\"status\":\"captured\",\"order_id\":\"order_EUNZfCMXniae2R\",\"invoice_id\":null,\"international\":false,\"method\":\"card\",\"amount_refunded\":0,\"refund_status\":null,\"captured\":true,\"description\":null,\"card_id\":\"card_EUNa27suyYdHBt\",\"bank\":null,\"wallet\":null,\"vpa\":null,\"email\":\"vukymavuqu@mailinator.net\",\"contact\":\"+911234567890\",\"fee\":4544,\"tax\":694,\"error_code\":null,\"error_description\":null,\"created_at\":1584686858}', '2020-03-20 06:47:43', '2020-03-20 06:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking_quotation`
--

CREATE TABLE `booking_quotation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `pickup` timestamp NULL DEFAULT NULL,
  `dropoff` timestamp NULL DEFAULT NULL,
  `pickup_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dest_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `travellers` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `payment` int(11) NOT NULL DEFAULT '0',
  `day` int(11) DEFAULT NULL,
  `mileage` double DEFAULT NULL,
  `waiting_time` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tax_total` double(10,2) DEFAULT NULL,
  `total_tax_percent` double(10,2) DEFAULT NULL,
  `total_tax_charge_rs` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_quotation`
--

INSERT INTO `booking_quotation` (`id`, `customer_id`, `user_id`, `vehicle_id`, `driver_id`, `pickup`, `dropoff`, `pickup_addr`, `dest_addr`, `note`, `travellers`, `status`, `payment`, `day`, `mileage`, `waiting_time`, `total`, `created_at`, `updated_at`, `deleted_at`, `tax_total`, `total_tax_percent`, `total_tax_charge_rs`) VALUES
(1, 7, 1, 4, 4, '2020-02-06 02:42:23', '2020-02-06 02:42:23', 'test000001', 'test0000002', NULL, 1, 0, 0, 1, 10, 0, 500, '2020-02-06 02:42:36', '2020-02-06 02:42:36', NULL, 500.00, 0.00, 0.00),
(2, 7, 3, 6, 4, '2020-02-06 02:54:26', '2020-02-06 02:54:26', 'test123', 'test0000002', NULL, 1, 0, 0, 1, 10, 0, 500, '2020-02-06 02:54:38', '2020-02-06 02:59:02', '2020-02-06 02:59:02', 500.00, 0.00, 0.00),
(3, 7, 2, 5, 6, '2020-02-06 02:59:14', '2020-02-06 02:59:14', 'test12354', 'test00000024654', 'Aut sint possimus', 96, 0, 0, 2, 10, 0, 500, '2020-02-06 02:59:22', '2020-02-06 02:59:22', NULL, 500.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `other` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `cost`, `image`, `other`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bhavnagar', NULL, NULL, NULL, '2020-02-04 00:49:04', '2020-02-04 00:49:20', '2020-02-04 00:49:20'),
(2, 'bhavnagar', NULL, NULL, NULL, '2020-02-04 00:49:24', '2020-02-04 00:49:27', '2020-02-04 00:49:27'),
(3, 'bhavnagar', 12, '0fbf7a8f-945f-4e6c-9d12-210859f2cdaa.jpg', '123', '2020-02-04 00:49:38', '2020-02-11 01:25:12', NULL),
(4, 'rajkot', 2000, NULL, 'test', '2020-02-04 00:54:51', '2020-03-16 03:13:09', NULL),
(5, 'Sagar', 760, '6f5e4a56-95e0-4c69-a130-1e77c0ce8ac5.jpg', 'test', '2020-02-11 00:47:57', '2020-03-16 03:15:22', NULL),
(6, 'Betul', 2400, '4220959b-9be2-4b9e-b031-66f49aa6e90f.jpg', NULL, '2020-02-11 01:25:23', '2020-03-16 03:16:48', NULL),
(7, 'teset', 3333, NULL, 'tes', '2020-03-16 03:15:31', '2020-03-16 03:15:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `review` text,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_reviews`
--

INSERT INTO `company_reviews` (`id`, `name`, `email`, `review`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'himani', 'himani@hyvikk.com', 'test', '4db65707-e967-415b-9431-ffcc91b26a70.jpg', '2020-02-11 23:40:46', '2020-02-11 23:40:46', NULL),
(2, 'himani', 'himani@hyvikk.com', 'test', NULL, '2020-02-12 00:22:25', '2020-02-12 00:22:25', NULL),
(3, 'Ruth Miller', 'rytavahyte@mailinator.net', 'Quia voluptas mollit', NULL, '2020-03-17 03:15:52', '2020-03-17 03:15:52', NULL),
(4, 'Grant Stevenson', 'mymaqumipe@mailinator.com', 'Voluptate aut proide', 'a2114178-d838-4c21-b56d-0899db0a2e11.png', '2020-03-17 03:17:00', '2020-03-17 03:17:00', NULL),
(5, 'test', 'test@fleet.com', 'test', NULL, '2020-03-17 03:19:25', '2020-03-17 03:19:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `title`, `image`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Best price guranteed', 'fleet-bestprice.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Neque at, nobis repudiandae dolores.', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19'),
(2, '24/7 Customer care', 'fleet-care.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Neque at, nobis repudiandae dolores.', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19'),
(3, 'Home pickups', 'fleet-homepickup.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Neque at, nobis repudiandae dolores.', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19'),
(4, 'Easy Bookings', 'fleet-easybooking.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Neque at, nobis repudiandae dolores.', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `value` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0', 0, 39, '2020-02-17 23:57:13', '2020-02-18 00:07:47', '2020-02-18 00:07:47'),
(2, 'Laborum Cupidatat e', 1, 54, '2020-02-17 23:58:00', '2020-02-18 00:07:56', '2020-02-18 00:07:56'),
(3, 'Dolore enim quae exp', 1, 20, '2020-02-17 23:58:09', '2020-02-18 00:07:52', '2020-02-18 00:07:52'),
(4, 'Eos', 0, 30.23, '2020-02-17 23:58:14', '2020-02-18 00:23:16', NULL),
(5, 'Eos1', 1, 10, '2020-02-18 00:15:15', '2020-02-18 01:25:52', NULL),
(6, '11', 1, 50, '2020-02-18 01:24:45', '2020-02-18 01:25:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_logs`
--

CREATE TABLE `driver_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driver_logs`
--

INSERT INTO `driver_logs` (`id`, `vehicle_id`, `driver_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 6, 4, '2020-02-06 01:09:11', '2020-02-06 01:09:11', '2020-02-06 01:09:11'),
(2, 5, 6, '2020-02-06 01:09:41', '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(3, 7, 8, '2020-02-19 02:39:41', '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(4, 12, 13, '2020-02-19 02:46:14', '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(5, 13, 14, '2020-02-19 02:46:45', '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(6, 14, 15, '2020-02-19 03:59:04', '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(7, 4, 16, '2020-02-27 05:29:44', '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(8, 2, 18, '2020-03-02 05:31:00', '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(9, 3, 19, '2020-03-02 05:41:42', '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(10, 16, 20, '2020-03-04 01:15:28', '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(11, 6, 22, '2020-03-12 04:38:55', '2020-03-12 04:38:55', '2020-03-12 04:38:55'),
(12, 17, 22, '2020-03-12 04:39:32', '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(13, 18, 22, '2020-03-12 04:40:57', '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(14, 19, 25, '2020-03-17 01:15:04', '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(15, 20, 26, '2020-03-17 01:22:46', '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(16, 21, 27, '2020-03-17 01:26:55', '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(17, 22, 28, '2020-03-17 02:33:47', '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(18, 23, 29, '2020-03-17 02:36:29', '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(19, 24, 31, '2020-03-19 08:23:39', '2020-03-19 08:23:39', '2020-03-19 08:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `driver_vehicle`
--

CREATE TABLE `driver_vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driver_vehicle`
--

INSERT INTO `driver_vehicle` (`id`, `vehicle_id`, `driver_id`, `created_at`, `updated_at`) VALUES
(1, 6, 22, '2020-02-06 01:09:11', '2020-03-12 04:38:55'),
(2, 5, 6, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(3, 7, 8, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(4, 12, 13, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(5, 13, 14, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(6, 14, 15, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(7, 4, 16, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(8, 2, 18, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(9, 3, 19, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(10, 16, 20, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(11, 17, 22, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(12, 18, 22, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(13, 19, 25, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(14, 20, 26, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(15, 21, 27, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(16, 22, 28, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(17, 23, 29, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(18, 24, 31, '2020-03-19 08:23:39', '2020-03-19 08:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `email_content`
--

CREATE TABLE `email_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_content`
--

INSERT INTO `email_content` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'insurance', 'vehicle insurance email content', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(2, 'vehicle_licence', 'vehicle licence email content', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(3, 'driving_licence', 'driving licence email content', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(4, 'registration', 'vehicle registration email content', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(5, 'service_reminder', 'service reminder email content', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(6, 'users', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(7, 'options', '', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(8, 'email', '0', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `exp_id` int(11) DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'e',
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `user_id` int(11) DEFAULT NULL,
  `expense_type` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `vehicle_id`, `exp_id`, `type`, `amount`, `user_id`, `expense_type`, `comment`, `date`, `created_at`, `updated_at`, `deleted_at`, `vendor_id`) VALUES
(1, 3, NULL, 'e', 10.00, 1, 1, NULL, '2020-02-06', '2020-02-06 03:13:45', '2020-02-06 03:17:49', '2020-02-06 03:17:49', NULL),
(2, 5, NULL, 'e', 20.00, 2, 2, NULL, '2020-02-06', '2020-02-06 03:15:04', '2020-02-06 03:15:04', NULL, NULL),
(3, 6, NULL, 'e', 30.00, 3, 4, NULL, '2020-02-06', '2020-02-06 03:15:51', '2020-02-06 03:18:02', '2020-02-06 03:18:02', NULL),
(4, 5, NULL, 's', 40.00, 1, 1, NULL, '2020-02-06', '2020-02-06 03:16:20', '2020-02-06 03:16:20', NULL, NULL),
(5, 6, NULL, 'e', 50.00, 3, 2, NULL, '2020-02-06', '2020-02-06 03:18:15', '2020-02-06 03:18:18', '2020-02-06 03:18:18', NULL),
(6, 6, NULL, 's', 120.00, 3, 1, NULL, '2020-02-06', '2020-02-06 03:19:52', '2020-02-06 03:19:52', NULL, NULL),
(7, 5, 1, 'e', 250.00, 2, 8, NULL, '2020-02-06', '2020-02-06 04:42:25', '2020-02-06 04:42:25', NULL, NULL),
(8, 6, 2, 'e', 500.00, 3, 8, NULL, '2020-02-06', '2020-02-06 05:23:59', '2020-02-06 05:23:59', NULL, NULL),
(9, 3, 3, 'e', 50.00, 1, 8, NULL, '2020-02-06', '2020-02-06 05:24:18', '2020-02-06 05:24:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense_cat`
--

CREATE TABLE `expense_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense_cat`
--

INSERT INTO `expense_cat` (`id`, `name`, `user_id`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Insurance', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(2, 'Patente', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(3, 'Mechanics', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(4, 'Car wash', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(5, 'Vignette', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(6, 'Maintenance', 14, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(7, 'Parking', 14, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(8, 'Fuel', 15, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(9, 'Car Services', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text,
  `answer` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Excepturi consequat', 'Laudantium harum mo', '2020-02-11 04:38:38', '2020-02-11 04:38:38', NULL),
(2, 'Dolor adipisci aut d', 'Ut aut omnis eu offi', '2020-02-11 04:38:42', '2020-02-11 04:38:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fare_settings`
--

CREATE TABLE `fare_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fare_settings`
--

INSERT INTO `fare_settings` (`id`, `key_name`, `key_value`, `created_at`, `updated_at`, `deleted_at`, `type_id`) VALUES
(1, 'hatchback_base_fare', '70', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(2, 'hatchback_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(3, 'hatchback_base_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(4, 'hatchback_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(5, 'hatchback_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(6, 'hatchback_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(7, 'hatchback_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(8, 'hatchback_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(9, 'hatchback_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(10, 'hatchback_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(11, 'hatchback_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(12, 'hatchback_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:22', NULL, 1),
(13, 'sedan_base_fare', '30', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(14, 'sedan_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(15, 'sedan_base_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(16, 'sedan_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(17, 'sedan_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(18, 'sedan_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(19, 'sedan_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(20, 'sedan_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(21, 'sedan_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(22, 'sedan_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(23, 'sedan_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(24, 'sedan_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:17', NULL, 2),
(25, 'minivan_base_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(26, 'minivan_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(27, 'minivan_base_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(28, 'minivan_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(29, 'minivan_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(30, 'minivan_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(31, 'minivan_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(32, 'minivan_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(33, 'minivan_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(34, 'minivan_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(35, 'minivan_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(36, 'minivan_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:12', NULL, 3),
(37, 'saloon_base_fare', '555', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(38, 'saloon_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(39, 'saloon_base_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(40, 'saloon_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(41, 'saloon_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(42, 'saloon_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(43, 'saloon_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(44, 'saloon_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(45, 'saloon_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(46, 'saloon_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(47, 'saloon_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(48, 'saloon_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-20 00:19:07', NULL, 4),
(49, 'suv_base_fare', '500', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(50, 'suv_base_km', '10', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(51, 'suv_base_time', '2', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(52, 'suv_std_fare', '20', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(53, 'suv_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(54, 'suv_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(55, 'suv_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(56, 'suv_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(57, 'suv_night_base_fare', '500', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(58, 'suv_night_base_km', '10', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(59, 'suv_night_wait_time', '2', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(60, 'suv_night_std_fare', '20', '2020-02-01 05:12:19', '2020-03-04 23:17:09', NULL, 5),
(61, 'bus_base_fare', '500', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(62, 'bus_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(63, 'bus_base_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(64, 'bus_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(65, 'bus_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(66, 'bus_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(67, 'bus_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(68, 'bus_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(69, 'bus_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(70, 'bus_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(71, 'bus_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(72, 'bus_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:46', NULL, 6),
(73, 'truck_base_fare', '40', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(74, 'truck_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(75, 'truck_base_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(76, 'truck_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(77, 'truck_weekend_base_fare', '500', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(78, 'truck_weekend_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(79, 'truck_weekend_wait_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(80, 'truck_weekend_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(81, 'truck_night_base_fare', '500', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(82, 'truck_night_base_km', '10', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(83, 'truck_night_wait_time', '2', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(84, 'truck_night_std_fare', '20', '2020-02-01 05:12:19', '2020-02-27 05:20:52', NULL, 7),
(85, 'testtype_base_fare', '20', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(86, 'testtype_base_km', '10', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(87, 'testtype_base_time', '2', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(88, 'testtype_std_fare', '20', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(89, 'testtype_weekend_base_fare', '500', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(90, 'testtype_weekend_base_km', '10', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(91, 'testtype_weekend_wait_time', '2', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(92, 'testtype_weekend_std_fare', '20', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(93, 'testtype_night_base_fare', '500', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(94, 'testtype_night_base_km', '10', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(95, 'testtype_night_wait_time', '2', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(96, 'testtype_night_std_fare', '20', '2020-02-05 02:40:22', '2020-02-20 00:18:45', NULL, 8),
(97, 'base_fare', '50', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(98, 'base_km', '10', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(99, 'base_time', '2', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(100, 'std_fare', '20', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(101, 'weekend_base_fare', '500', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(102, 'weekend_base_km', '10', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(103, 'weekend_wait_time', '2', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(104, 'weekend_std_fare', '20', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(105, 'night_base_fare', '500', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(106, 'night_base_km', '10', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(107, 'night_wait_time', '2', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL),
(108, 'night_std_fare', '20', '2020-02-19 23:54:52', '2020-02-27 05:17:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(10) UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `key_name`, `key_value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'about_us', 'There are many variations of passages of Lorem Ipsum available, but the maj ority have words which don\'t look even  slightly believable.', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(2, 'contact_email', 'master@admin.com', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(3, 'contact_phone', '0123456789', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(4, 'customer_support', '0999988888', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(5, 'about_description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquam maxime tempora facere voluptatibus, sed deserunt incidunt ut. Voluptatem neque odio veritatis maxime, illum autem delectus deserunt eveniet ex voluptatibus laborum dignissimos adipisci a quo, aspernatur amet alias repellat tenetur.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Et distinctio fugiat, doloribus ad fuga tempore accusantium incidunt corrupti rerum, autem ratione unde sunt repellendus! Beatae cumque rerum at dicta autem?', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(6, 'about_title', 'Proudly serving you', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(7, 'facebook', 'http://www.facebook.com', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(8, 'twitter', 'http://www.twitter.com', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(9, 'instagram', 'http://www.instagram.com', '2020-02-01 05:12:19', '2020-03-16 03:56:56', NULL),
(10, 'pinterest', 'http://www.pinterest.com', '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(11, 'faq_link', NULL, '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(12, 'cities', '5', '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(13, 'vehicles', '10', '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(14, 'cancellation', NULL, '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(15, 'terms', NULL, '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(16, 'privacy_policy', NULL, '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL),
(17, 'enable', '1', '2020-02-01 05:12:20', '2020-03-16 03:56:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_meter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_meter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `vendor_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `fuel_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost_per_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consumption` int(11) DEFAULT NULL,
  `complete` int(11) DEFAULT '0',
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `vehicle_id`, `user_id`, `start_meter`, `end_meter`, `reference`, `province`, `note`, `vendor_name`, `qty`, `fuel_from`, `cost_per_unit`, `consumption`, `complete`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 2, '1000', '0', NULL, NULL, NULL, NULL, 5, 'N/D', '50', 0, NULL, '2020-02-06', '2020-02-06 04:42:25', '2020-02-06 04:42:25', NULL),
(2, 6, 3, '1000', '0', NULL, NULL, NULL, NULL, 10, 'N/D', '50', 0, NULL, '2020-02-06', '2020-02-06 05:23:59', '2020-02-06 05:23:59', NULL),
(3, 3, 1, '2000', '0', NULL, NULL, NULL, NULL, 5, 'N/D', '10', 0, NULL, '2020-02-06', '2020-02-06 05:24:18', '2020-02-06 05:24:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `income_id` int(11) DEFAULT NULL,
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `user_id` int(11) DEFAULT NULL,
  `income_cat` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tax_percent` double(10,2) DEFAULT NULL,
  `tax_charge_rs` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `vehicle_id`, `income_id`, `amount`, `user_id`, `income_cat`, `mileage`, `date`, `created_at`, `updated_at`, `deleted_at`, `tax_percent`, `tax_charge_rs`) VALUES
(1, 3, 4, 550.00, 24, 1, 200, '2020-03-19', '2020-03-19 09:18:14', '2020-03-19 09:18:14', NULL, 10.00, 50.00),
(2, 3, 7, 550.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:11:49', '2020-03-20 06:11:49', NULL, NULL, 50.00),
(3, 4, 8, 1100.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:16:37', '2020-03-20 06:16:37', NULL, 10.00, 100.00),
(4, 3, 1, 550.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:41:19', '2020-03-20 06:41:19', NULL, 10.00, 50.00),
(5, 4, 9, 1100.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:44:19', '2020-03-20 06:44:19', NULL, 10.00, 100.00),
(6, 4, 10, 1100.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:46:19', '2020-03-20 06:46:19', NULL, 10.00, 100.00),
(7, 5, 11, 2200.00, 30, 1, 0, '2020-03-20', '2020-03-20 06:47:17', '2020-03-20 06:47:17', NULL, 10.00, 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `income_cat`
--

CREATE TABLE `income_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income_cat`
--

INSERT INTO `income_cat` (`id`, `name`, `user_id`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Booking', 1, 'd', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `fcm_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fcm_id`, `user_id`, `message`, `deleted_at`, `created_at`, `updated_at`, `name`, `email`) VALUES
(12, NULL, NULL, 'test3434', NULL, '2020-03-13 03:06:24', '2020-03-13 03:06:24', 'test', 'test@fleet.com'),
(13, NULL, NULL, 'test111111111111111', NULL, '2020-03-13 03:17:16', '2020-03-13 03:17:16', 'test111111', 'test111@fleet.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_06_03_134331_create_expense_table', 1),
(2, '2017_06_03_134332_create_expense_cat_table', 1),
(3, '2017_06_03_134332_create_income_table', 1),
(4, '2017_06_03_134333_create_income_cat_table', 1),
(5, '2017_06_03_134336_create_password_resets_table', 1),
(6, '2017_06_03_134337_create_users_table', 1),
(7, '2017_06_03_134338_create_vehicles_table', 1),
(8, '2017_07_24_080537_create_booking_table', 1),
(9, '2017_07_24_080643_create_settings_table', 1),
(10, '2017_08_01_073926_create_booking_income_table', 1),
(11, '2017_10_30_064357_create_notifications_table', 1),
(12, '2017_10_30_094858_create_fuel_table', 1),
(13, '2017_11_09_105729_create_vendors_table', 1),
(14, '2017_11_10_062609_create_work_orders_table', 1),
(15, '2017_11_10_095438_create_notes_table', 1),
(16, '2017_11_22_093559_create_vehicle_group_table', 1),
(17, '2017_12_28_091600_create_service_items_table', 1),
(18, '2017_12_28_122952_create_service_reminder_table', 1),
(19, '2017_12_28_174333_create_api_settings_table', 1),
(20, '2018_01_08_062105_create_driver_vehicle_table', 1),
(21, '2018_01_10_130517_users_meta', 1),
(22, '2018_01_13_050018_bookings_meta', 1),
(23, '2018_01_16_095657_fare_settings', 1),
(24, '2018_01_25_050939_create_vehicles_meta_table', 1),
(25, '2018_02_06_052302_create_message_table', 1),
(26, '2018_02_06_125252_create_reviews_table', 1),
(27, '2018_03_13_124424_create_addresses_table', 1),
(28, '2018_03_28_085735_create_reasons_table', 1),
(29, '2018_04_28_073004_create_email_content_table', 1),
(30, '2018_08_14_061757_create_vehicle_review_table', 1),
(31, '2019_01_18_063916_add_vendor_id_to_expense', 1),
(32, '2019_01_19_080738_add_udf_to_vendors', 1),
(33, '2019_01_19_103826_create_parts_table', 1),
(34, '2019_01_19_110823_create_vehicle_types_table', 1),
(35, '2019_01_22_101948_create_driver_logs_table', 1),
(36, '2019_01_23_113852_add_type_id_to_vehicles_table', 1),
(37, '2019_01_24_095115_add_type_id_to_fare_settings_table', 1),
(38, '2019_04_12_092111_create_parts_category_table', 1),
(39, '2019_04_19_053314_create_work_order_logs_table', 1),
(40, '2019_05_13_062039_create_push_notification_table', 1),
(41, '2019_07_18_110031_add_column_to_vendors', 1),
(42, '2019_07_31_082514_create_testimonials_table', 1),
(43, '2019_07_31_102801_create_frontend_table', 1),
(44, '2019_08_01_045837_add_columns_to_message_table', 1),
(45, '2019_08_19_101509_create_booking_quotation_table', 1),
(46, '2019_08_22_052138_create_parts_used_table', 1),
(47, '2019_08_22_113138_add_parts_price_to_work_order_logs_table', 1),
(48, '2019_08_29_104613_create_company_services_table', 1),
(49, '2019_09_16_085700_create_teams_table', 1),
(50, '2019_12_10_083547_add_columns_to_booking_quotation_table', 1),
(51, '2019_12_16_064152_add_indexes_to_users_table', 1),
(52, '2019_12_16_064951_add_indexes_to_addresses_table', 1),
(53, '2019_12_16_065511_add_indexes_to_bookings_table', 1),
(54, '2019_12_16_083315_add_indexes_to_booking_income_table', 1),
(55, '2019_12_16_084539_add_indexes_to_booking_quotation_table', 1),
(56, '2019_12_16_085312_add_indexes_to_driver_logs_table', 1),
(57, '2019_12_16_085505_add_indexes_to_driver_vehicle_table', 1),
(58, '2019_12_16_091010_add_indexes_to_email_content_table', 1),
(59, '2019_12_16_091713_add_indexes_to_expense_table', 1),
(60, '2019_12_16_094305_add_indexes_to_expense_cat_table', 1),
(61, '2019_12_16_094651_add_indexes_to_fare_settings_table', 1),
(62, '2019_12_16_095024_add_indexes_to_frontend_table', 1),
(63, '2019_12_16_095339_add_indexes_to_fuel_table', 1),
(64, '2019_12_16_095634_add_indexes_to_income_table', 1),
(65, '2019_12_16_095953_add_indexes_to_income_cat_table', 1),
(66, '2019_12_16_100221_add_indexes_to_notes_table', 1),
(67, '2019_12_16_100437_add_indexes_to_notifications_table', 1),
(68, '2019_12_16_100545_add_indexes_to_parts_table', 1),
(69, '2019_12_16_101113_add_indexes_to_parts_used_table', 1),
(70, '2019_12_16_101540_add_indexes_to_push_notification_table', 1),
(71, '2019_12_16_101851_add_indexes_to_reviews_table', 1),
(72, '2019_12_16_102259_add_indexes_to_service_reminder_table', 1),
(73, '2019_12_16_102555_add_indexes_to_vehicles_table', 1),
(74, '2019_12_16_104209_add_indexes_to_vehicle_review_table', 1),
(75, '2019_12_16_104440_add_indexes_to_vendors_table', 1),
(76, '2019_12_16_104704_add_indexes_to_work_orders_table', 1),
(77, '2019_12_16_105013_add_indexes_to_work_order_logs_table', 1),
(78, '2019_12_16_115309_add_indexes_to_api_settings_table', 1),
(79, '2019_12_17_080649_add_taxes_to_income_table', 1),
(80, '2019_12_19_052248_create_payment_settings_table', 1),
(81, '2019_12_19_063520_create_booking_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `submitted_on` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `source` text,
  `destination` text,
  `distance` float NOT NULL DEFAULT '0',
  `timing` varchar(255) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `tax_total` float DEFAULT NULL,
  `total_tax_percent` float DEFAULT NULL,
  `total_tax_charge_rs` float DEFAULT NULL,
  `valid_from` timestamp NULL DEFAULT NULL,
  `valid_till` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `vehicle_id`, `user_id`, `source`, `destination`, `distance`, `timing`, `total`, `tax_total`, `total_tax_percent`, `total_tax_charge_rs`, `valid_from`, `valid_till`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 0, 'bhavnagar', 'rajkot', 0, NULL, 100, NULL, NULL, NULL, '2020-02-17 18:30:00', '2020-05-19 22:30:00', NULL, '2020-02-25 00:24:50', NULL),
(2, 5, 0, 'bhopal', 'betul', 0, NULL, 200, NULL, NULL, NULL, '2020-02-17 18:30:00', '2020-05-24 21:41:00', NULL, '2020-03-12 05:00:43', NULL),
(3, 6, 0, 'bhopal', 'sagar', 50, '12 hr', 300, 330, 10, 30, '2020-02-15 14:42:00', '2020-03-20 06:45:00', '2020-02-18 03:26:30', '2020-02-26 06:48:36', NULL),
(4, 6, 4, 'source', 'destination', 0, NULL, 400, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-19 18:30:00', '2020-02-19 03:45:16', '2020-02-19 03:45:16', NULL),
(5, 6, 4, 'source5', 'destination5', 0, NULL, 500, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-19 18:30:00', '2020-02-19 03:45:17', '2020-02-19 03:45:17', NULL),
(6, 5, 6, 'source1', 'destination1', 0, NULL, 600, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-24 18:30:00', '2020-02-19 03:45:59', '2020-02-19 03:45:59', NULL),
(7, 5, 6, 'source3', 'destination3', 0, NULL, 700, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-24 18:30:00', '2020-02-25 00:54:15', '2020-02-25 00:54:15', NULL),
(8, 5, 6, 'source4', 'destination4', 0, NULL, 800, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-27 18:30:00', '2020-02-25 00:54:26', '2020-02-25 00:54:26', NULL),
(9, 5, 6, 'source2', 'destination2', 12, '12', 900, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-03-27 18:30:00', '2020-02-26 06:48:02', '2020-02-26 06:48:02', NULL),
(10, 25, 6, 'new test 1', 'new test 001', 120, '12 hr', NULL, NULL, NULL, NULL, '2020-02-14 18:30:00', '2020-04-27 18:30:00', '2020-03-20 08:18:07', '2020-03-20 08:18:07', NULL),
(11, 5, 6, 'new test 1', 'new test 001', 120, '12 hr', 100, 110, 10, 10, '2020-02-14 18:30:00', '2020-04-27 18:30:00', '2020-03-20 12:06:24', '2020-03-20 12:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `package_hours` float NOT NULL,
  `package_rate` float NOT NULL,
  `hourly_rate` float DEFAULT NULL,
  `km_rate` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `vehicle_id`, `package_hours`, `package_rate`, `hourly_rate`, `km_rate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 0, 0, 10.33, 50.23, '2020-02-18 06:22:19', '2020-02-18 06:22:44', '2020-02-18 06:22:44'),
(2, 5, 0, 0, 52, 41, '2020-02-18 06:22:47', '2020-02-18 06:22:52', '2020-02-18 06:22:52'),
(3, 3, 5, 500, 780, 910, '2020-02-18 06:23:12', '2020-03-09 00:51:05', NULL),
(4, 4, 10, 1000, 50, 10, '2020-02-18 06:30:43', '2020-03-09 01:01:05', NULL),
(5, 5, 2, 2000, 10, 20, '2020-02-21 07:15:32', '2020-03-09 01:01:13', NULL),
(6, 4, 2, 200, 92, 87, '2020-03-09 00:51:13', '2020-03-09 00:51:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `stock` int(11) DEFAULT NULL,
  `udf` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parts_category`
--

CREATE TABLE `parts_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parts_category`
--

INSERT INTO `parts_category` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Engine Parts', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(2, 'Electricals', '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parts_used`
--

CREATE TABLE `parts_used` (
  `id` int(10) UNSIGNED NOT NULL,
  `part_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('master@admin.com', '$2y$10$iGSxb43IKoV3ChKjP.zXBOgoY2phEKAsvQDm7DJ323mTcHH23TzMu', '2020-03-11 06:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `name`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'method', '[\"cash\",\"razorpay\"]', '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL),
(2, 'currency_code', 'INR', '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL),
(3, 'stripe_publishable_key', NULL, '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL),
(4, 'stripe_secret_key', NULL, '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL),
(5, 'razorpay_key', 'rzp_test_8XScmxSSoOoPRL', '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL),
(6, 'razorpay_secret', 'ea5LXArb1KaTfrf2eKJbUTpU', '2020-02-01 05:12:20', '2020-03-19 09:38:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `push_notification`
--

CREATE TABLE `push_notification` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authtoken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentencoding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endpoint` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publickey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `reason` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `ratings` double(8,2) DEFAULT NULL,
  `review_text` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `source` text,
  `destination` text,
  `timing` varchar(255) DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `ratings` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `name`, `source`, `destination`, `timing`, `distance`, `image`, `cost`, `ratings`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Melanie Merritt', 'Vel quia eum invento', 'Quidem odit sint qu', NULL, NULL, NULL, 69, 55.22, '2020-02-11 03:05:06', '2020-02-11 03:05:15', '2020-02-11 03:05:15'),
(7, 'Lester Sykes', 'Aliqua Est similiq', 'Et ipsum incidunt o', NULL, NULL, NULL, 40, 12, '2020-02-11 03:05:18', '2020-02-11 03:05:21', '2020-02-11 03:05:21'),
(8, 'test route', 'sagar', 'bhopal', '5 hr', '120.5', NULL, 1000, 5.5, '2020-02-11 04:56:36', '2020-03-13 03:54:18', NULL),
(9, 'route two', 'bhopal', 'betul', '6 hr', '200', '5672e480-aa76-4884-8245-816cda6cbdca.jpg', 2000, 5.4, '2020-02-11 04:57:20', '2020-03-13 03:54:25', NULL),
(10, 'Devin Vaughn', 'Exercitation fugiat', 'Omnis est molestiae', '4', '444', NULL, 100, 92, '2020-03-13 03:55:05', '2020-03-13 03:55:12', '2020-03-13 03:55:12'),
(11, 'Bhavnagar - Rajkot', 'Bhavnagar', 'Rajkot', '3 hr', '150', 'e354551f-8fe1-421f-a64c-7e45d9954fe9.jpg', 2000, 5, '2020-03-16 03:20:51', '2020-03-16 03:22:01', NULL),
(12, 'Junior Kunzee', 'junagadh', 'bhavnagar', '5 hr', '200', '3be39014-0a29-4a5a-b9d2-41bdeda2607a.jpg', 500, 3, '2020-03-16 03:21:34', '2020-03-16 03:21:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_items`
--

CREATE TABLE `service_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `time_interval` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'off',
  `overdue_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overdue_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meter_interval` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'off',
  `overdue_meter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'off',
  `duesoon_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duesoon_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show_meter` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'off',
  `duesoon_meter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_items`
--

INSERT INTO `service_items` (`id`, `description`, `time_interval`, `overdue_time`, `overdue_unit`, `meter_interval`, `overdue_meter`, `show_time`, `duesoon_time`, `duesoon_unit`, `show_meter`, `duesoon_meter`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Change oil', 'on', '60', 'day(s)', 'off', NULL, 'on', '2', 'day(s)', 'off', NULL, NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `service_reminder`
--

CREATE TABLE `service_reminder` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `last_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_meter` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_reminder`
--

INSERT INTO `service_reminder` (`id`, `vehicle_id`, `service_id`, `last_date`, `last_meter`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'N/D', 0, NULL, '2020-02-06 03:06:27', '2020-02-06 03:06:27'),
(2, 5, 1, 'N/D', 0, NULL, '2020-02-06 03:08:59', '2020-02-06 03:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `name`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Website Name', 'app_name', 'MP Cabs', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(2, 'Business Address 1', 'badd1', 'Company Address 1', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(3, 'Business Address 2', 'badd2', 'Company Address 2', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(4, 'Email Address', 'email', 'master@admin.com', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(5, 'City', 'city', 'Bhavnagar', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(6, 'State', 'state', 'Gujarat', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(7, 'Country', 'country', 'India', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(8, 'Distence Format', 'dis_format', 'km', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(9, 'Language', 'language', 'English-en', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(10, 'Currency', 'currency', '₹', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(11, 'Tax No', 'tax_no', 'ABCD8735XXX', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(12, 'Invoice Text', 'invoice_text', 'Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(13, 'Small Logo', 'icon_img', '097090a3-d1f4-43b5-934e-79ce3f30ddc9.png', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(14, 'Main Logo', 'logo_img', '152b0ff1-7b88-4392-93ee-973c79499df2.png', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(15, 'Time Interval', 'time_interval', '30', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(16, 'Tax Charge', 'tax_charge', '{\"cgst\":\"5\",\"sgst\":\"5\"}', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL),
(17, 'Fuel Unit', 'fuel_unit', 'gallon', '2020-02-01 05:12:19', '2020-03-06 06:44:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `details`, `designation`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mariela Kulas IV', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus neque est nemo et ipsum fugiat, ab facere adipisci. Aliquam quibusdam molestias quisquam distinctio? Culpa, voluptatem voluptates exercitationem sequi velit quaerat.', 'Owner', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(2, 'Audreanne Weber', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus neque est nemo et ipsum fugiat, ab facere adipisci. Aliquam quibusdam molestias quisquam distinctio? Culpa, voluptatem voluptates exercitationem sequi velit quaerat.', 'Owner', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(3, 'Pauline Cronin', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus neque est nemo et ipsum fugiat, ab facere adipisci. Aliquam quibusdam molestias quisquam distinctio? Culpa, voluptatem voluptates exercitationem sequi velit quaerat.', 'Owner', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(4, 'Prof. Imani Olson DDS', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus neque est nemo et ipsum fugiat, ab facere adipisci. Aliquam quibusdam molestias quisquam distinctio? Culpa, voluptatem voluptates exercitationem sequi velit quaerat.', 'Owner', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(5, 'Elenora Pfannerstill', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus neque est nemo et ipsum fugiat, ab facere adipisci. Aliquam quibusdam molestias quisquam distinctio? Culpa, voluptatem voluptates exercitationem sequi velit quaerat.', 'Owner', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `details`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Camilla Hamill', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi doloribus, repudiandae iusto magnam soluta voluptates, expedita aspernatur consectetur! Ex fugit ducimus itaque, quibusdam nemo in animi quae libero repellendus!', '9aeaf7df-528a-40be-b1ea-4f69f7904737.png', '2020-02-01 05:12:19', '2020-03-16 03:35:04', NULL),
(2, 'Winston Abernathy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi doloribus, repudiandae iusto magnam soluta voluptates, expedita aspernatur consectetur! Ex fugit ducimus itaque, quibusdam nemo in animi quae libero repellendus!', NULL, '2020-02-01 05:12:19', '2020-03-16 03:38:44', NULL),
(3, 'Rebeka Jast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi doloribus, repudiandae iusto magnam soluta voluptates, expedita aspernatur consectetur! Ex fugit ducimus itaque, quibusdam nemo in animi quae libero repellendus!', NULL, '2020-02-01 05:12:19', '2020-03-16 03:38:52', NULL),
(4, 'Prof. Gianni Yost', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi doloribus, repudiandae iusto magnam soluta voluptates, expedita aspernatur consectetur! Ex fugit ducimus itaque, quibusdam nemo in animi quae libero repellendus!', '811e2abf-d423-4c8f-8adf-1ab5298fc2c5.jpg', '2020-02-01 05:12:19', '2020-03-16 03:35:19', NULL),
(5, 'Clemmie Walker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi doloribus, repudiandae iusto magnam soluta voluptates, expedita aspernatur consectetur! Ex fugit ducimus itaque, quibusdam nemo in animi quae libero repellendus!', NULL, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_id`, `city_id`, `password`, `user_type`, `group_id`, `api_token`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Administrator', 'master@admin.com', NULL, NULL, '$2y$10$EZurxJwqfYVrLXUIWypehupDrU/OW90Kdok1.qKj85so8xn4nYKsS', 'S', NULL, 'inBk5maIlU1I9pxdmcyEe6OGnAt92lRTtUJZGBghRPtsa485f3Xr2LUz7idu', NULL, '2020-02-06 00:01:19', '2020-02-06 00:01:19', NULL),
(2, 'vendor one', 'vendor1@fleet.com', NULL, 3, '$2y$10$s5TnB8Wozeqb60S/HHrrE.pu31GmyQdE5Xj2bw.57KkTMuJmkpIG.', 'V', 1, 'PxNVowAvAILzCz080PHtPaobOylF9CFOtnp5GuliUbrUpIjF1LaSryleUtGZ', NULL, '2020-02-06 00:44:26', '2020-03-04 01:08:49', NULL),
(3, 'vendor 2', 'vendor2@fleet.com', NULL, 4, '$2y$10$ZX7vf55puPHX4ioZxk5Hy.Ee8szVmu1TJhv8OA2Ch0iq/7U/aCImi', 'V', 2, 'tele8CG90UcprwforYQ7805ZbQ0ynAORxNRA2bIS1DJ77SlAGLsq2jlEYsYb', NULL, '2020-02-06 00:45:51', '2020-02-06 00:45:51', NULL),
(4, ' ', 'd002@fleet.com', 1, NULL, '$2y$10$VYIDhBxr/OnMYHDRa84Qs.SVL0868GKzF5zpfuYI6Mv/2/Qi4Oj/i', 'D', NULL, 'yvRpVoS7D46PeWsBSBEBIXdetuU9Ay88NIgdgz0xL8JF4DrXtZw4kiga0njT', NULL, '2020-02-06 01:03:11', '2020-03-02 05:49:00', '2020-03-02 05:49:00'),
(5, 'customer test4', 'd44@fleet.com', 3, NULL, '$2y$10$v6UutWb7yyReutCWyHSuBufPD59CjiJyM70Z0mbWkmSQU3zU8xeR2', 'D', NULL, 'xkGxmji9frzQSZWWxTYpNQwyp1YXf1IGiDfKfiu9D4uqkT4NzlIYlC95Luqk', NULL, '2020-02-06 01:03:11', '2020-02-06 01:08:04', '2020-02-06 01:08:04'),
(6, 'Amity Haney0', 'synojuru0@mailinator.com', 1, NULL, '$2y$10$re4qFWu9PNDsS4qx8j9WpevTjNmizhocajKrxfRn51vXXGtKgif42', 'D', NULL, 'uDosSZwr4teCi74j99WFjR6t4CkwfmfixsCLORRobOjQLapKC0LbY52ekh84', NULL, '2020-02-06 01:09:41', '2020-03-02 05:49:29', NULL),
(7, 'customer one', 'c1@fleet.com', 3, NULL, '$2y$10$9IVG2E7qbgRhrzxDor8wdurqbDpkBub8tK.SKxkdlTE9Ba7nnRMBu', 'C', NULL, 'cluim6vjAGaK7GCrD8blHX0fFDGJdDzLRMHRhb4mNYrig1jHIUnAHTL1ClTf', '5FqWNfpIyFbNTDOZVF1MM8dJZ3sIcOIgykngLUUZmbEHtZOldXOW6GRUM9Ki', '2020-02-06 02:38:35', '2020-03-17 03:26:17', NULL),
(8, 'test driver', 'test@fleet.com', NULL, NULL, '$2y$10$hUMo2uRz.ZCQqRoI531HB.r5Gv0iy56vD9sbvR7ZnfNtYOPzqt6iK', 'D', NULL, 'XveaVYtH0fZYe3Pwvrssn2bRsHRVtRrFewOiroImjtogAHRLRfRAhdCvM0XO', 'wm1Xzi6hXRUwyFdvWv0X9A7eh2i2w8FBslHo5uNOzyWKSyNTc1wufO3B2JMc', '2020-02-19 02:39:41', '2020-03-18 04:50:09', NULL),
(9, 'test', 'test1@fleet.com', NULL, NULL, '$2y$10$DMJFpq79rVB8DocmfQApN.ugYs8n4G8jsFo.RlppsOtqt3sWcQNHS', 'D', NULL, '609Vo5QWhD0uog2ndeoHWgPa7FOGM8Rh2vNjBcyQX5jYjxmma8sNvc6rMyks', NULL, '2020-02-19 02:44:15', '2020-03-16 06:18:39', NULL),
(10, 'test', 'test11@fleet.com', NULL, NULL, '$2y$10$fm5b0rNrstg.78H10U2Jm.1aK1gq8f5U71qA1a552TlOzcNfEThvu', 'D', NULL, 'kPAKNegEcpKYyK2Lxf6NJ8d8GJvhqYbKA7wWY1V57HoojE5Zlv3NLUrHQpbt', NULL, '2020-02-19 02:44:56', '2020-02-19 02:44:56', NULL),
(11, 'test', 'test111@fleet.com', NULL, NULL, '$2y$10$QVudCzgDwcoF12WuiZNvjOM3GWNwxrDp1W5TzrDLex7CAulyh2wPy', 'D', NULL, 'mxwb1CC2vBly9ymV8vZuielPTk97aLHfI9OFF9bxHtMesIVXGnP2VEQax7bt', NULL, '2020-02-19 02:45:21', '2020-02-19 02:45:21', NULL),
(12, 'test', 'tes11@fleet.com', NULL, NULL, '$2y$10$9qPUGtTzh5LB.B3vQUh6f.UfeVJGocNFX3C/sZ0x0rZ75liA4iS/m', 'D', NULL, 'PUNWNeNfgxFonhASv6hlYKDsXwAWl2HbKp1KKnlNcOBc6rfmW8l1uhWOz1BH', NULL, '2020-02-19 02:45:47', '2020-02-19 02:45:47', NULL),
(13, 'test', 'tes0011@fleet.com', NULL, NULL, '$2y$10$1nDClZIejiRFl5a.C8oN5OkgQnRtWh1s4ywLgsFrAHOltF20Uwtkq', 'D', NULL, 'OBGxU3MaMeoNMlcqvXhvfQx9vjm77FaDsX1fzHpWufj9oIKt4J2AB31VZlvl', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14', NULL),
(14, 'test two', 'test2@fleet.com', NULL, NULL, '$2y$10$XMH/VnPFZqtETtryF2AEz.LH9LUG6NtIbmyFHmpKTj.oZcAKB/vam', 'D', NULL, 'wmMd0vQaywSmtH8RENXx8Ea9YcAAnm3ldrReuGkHuo02I5q16S9fjZ3w5hNJ', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45', NULL),
(15, 'test two', 'tes222t2@fleet.com', NULL, NULL, '$2y$10$efwa7/X1s3P5thFnzM.kFuoF65QHuH7Pevdh3xz7O7O.E4fJX31fK', 'D', NULL, 'wdPGoqRCA3B8QZOG2FUlKtcLQ83BTuuya4ah5tVkZzjyC8xYOzXxs0cnFSYZ', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04', NULL),
(16, 'test two', 'tretre@fleet.com', NULL, NULL, '$2y$10$d9sL8P40N3yvhlD5awJL3.Dju47Ems9zSede0pIIr834/86eZDAyq', 'D', NULL, 'uHF2vPfId34UqZI462bSqKCbrsgCYBT7xDaLrrXvJ3sxAE4G44DUsnaf7tZ6', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44', NULL),
(17, 'customer test', 'customer@test.com', 1, NULL, '$2y$10$yIoYeKlZ/FqCjzamKRhb1edNzPTqOkSp9RrinDH3qhklUSjq5hVCe', 'C', NULL, 'vLpwqgzKpo6a0l5IXgA29kPeYkX2mH4sxxpN3Imcz94wPhts9aq3oQUVdFKc', NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19', NULL),
(18, 'Kellie Golden', 'jusy@mailinator.com', 1, NULL, '$2y$10$iaXNMqGVQu6priois7ZZRen4V79NUUrKszlXRbt.a0MRgY9TN39BO', 'D', NULL, 'LfB27pI0Ay4NxPAncM5octBQK6nFrj2P0er08282oL07pSKQ1Pxk4DjlzeRE', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00', NULL),
(19, 'Rana Powers', 'zanag@mailinator.com', 1, NULL, '$2y$10$do41TH.e5GHWDKp0QGGaJuXUs3EX46UPadQfRQWU6MUuxLKu4oHv.', 'D', NULL, 't1X5mpG3blng8MGovfONj9a69TGlqCMrBFsh0VuhOwlaRGKeDKgg1RFnRSb3', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42', NULL),
(20, 'Darryl Chen', 'nogacule@mailinator.com', 2, NULL, '$2y$10$n.Zq2Gy66vhEWtNF563cE.gjpuePX6B5S4M5.fWg7wzMmj9wve.9m', 'D', NULL, 'RUwqNbyJbUGiwpmoUjsayPuCukWOGlx5SAoqCAazrkiWeS0jard7ASVJzROI', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28', NULL),
(21, 'Noble Delgado', 'zimesec@mailinator.net', NULL, 4, '$2y$10$Zqq9PbwutaqFdf2QHvtFDeVvjQr4Agmrj49HkzK3HOxVpEd/VWY3e', 'V', 1, 'fjvrhao4hST2Rwceb3hhYm5nQcHYE0uGzsnBhxv6NoEf0iHXQnAmk4ikbxY2', NULL, '2020-03-09 02:54:50', '2020-03-09 02:54:55', '2020-03-09 02:54:55'),
(22, 'test three', 'test3@fleet.com', NULL, NULL, '$2y$10$yxgJuihm5gERPdQ36VvEu.udDAgN.HEq/XgXU.XbDvwyj9FistWtq', 'D', NULL, 'kb5INNnIz3KluMFBozv5uc01dSBFqrCloAp9LQb8IICC0zQC7XwtXcC281hb', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30', NULL),
(23, 'test four', 'test4@fleet.com', NULL, NULL, '$2y$10$feqnBguUTVIjJF7jxZVyquO1j0JWpJOSuUUZUU.2RwnhToMvez.Iy', 'D', NULL, '1fQyvCnCoxYku1TTvr6aGXx5AeX1Xqw3RTbu0cBpVwHYOqlzAjivZCigRohF', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08', NULL),
(24, 'Patrick Goodman', 'koqozyzet@mailinator.net', NULL, NULL, '$2y$10$kwExLo1uiflMN9GYMLOVWulbdzRHjG8txNT5PE0OyRSBURZWFB4gO', 'C', NULL, 'Ey0WoumMBYQZU01VYlZmWAmfvyXPahf28ExFK2YFpRmJudGnxiCOIuEpw83d', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51', NULL),
(25, 'new driver5', 'himani@hyvikk.com54', 1, NULL, NULL, 'D', NULL, 'qdJ4yRgj34zyZllbOGy1YRTAychhRoMLG5Pb7XX0fLsAJq2ItmU5Az7gpNqr', NULL, '2020-03-17 01:15:04', '2020-03-18 03:59:30', NULL),
(26, 'tttttttttttt', 'teseb@mailinator.com', NULL, NULL, '$2y$10$wXn5OOS.Z5n8gr5dBmoI0u4A0HSL4oX6inRxs3thSz/o3BJGGM4p.', 'D', NULL, 'TUGwc8ys1UYXIFBxdGV7K5CiEkvHPApX83mmzJsUSqWhfHlH4GYQxJkOSH06', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46', NULL),
(27, 'Baker Bartlett', 'ryrybiqu@mailinator.com', NULL, NULL, '$2y$10$ZYL4e/vUlV7sYAH6zlT6kehz/wssqv055sMtLvcP93TyR3CUYzydS', 'D', NULL, 'KCZEpejqfUl1oDP7fg0VEIM9RBdHMOwAkG73kqaL4ufvEL7pWdyCjdQnTczb', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55', NULL),
(28, 'Autumn Rice', 'hury@mailinator.net', NULL, NULL, '$2y$10$ENqC7fdhGXrTDy1Uj.xxbufLLFkKfiYzGkxmJRjHp9zTqT4ZK0rVi', 'D', NULL, 'hq1AAhXRODbo4eDFI7Co8RgoYnCKodJ4suNaMcoOi2gKVUVgG3qBv0G9Noja', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47', NULL),
(29, 'Casey Stephenson', 'hynybetu@mailinator.com', NULL, NULL, '$2y$10$NY5gpK.MZs37loem12u2L.IcC2tvjmtoS5Mk.EHTaQJpqQwfEE0d2', 'D', NULL, 'rXILBIL4lI2iXqJiasa2eBCuYnpDXLzAmqUp2P7KHnESrEqleKfRydNEQTFe', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29', NULL),
(30, 'himani bhatt', 'himani@hyvikk.com', NULL, NULL, '$2y$10$2yMkC7uEPSZdFTPx6sOuWu5g4ksQt6vJEf2apwfBHKOg6p.PPV5pO', 'C', NULL, 'D8vz7MBxDswDdVIc91HNCyTOJ2h47twhLkNtzmUk2nvJfi9aMeA6XCKGCMSK', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40', NULL),
(31, 'test final', 'finaltest@fleet.com', NULL, NULL, '$2y$10$oa7gdNRqNE3fxK8piebUceSwWl7Gy0vLmPrDWRmFUVDcGCWRcF1U6', 'D', NULL, 'd60rAf4HL3t860Qohzg9sE7qcqtPxgPdK7CpQDxASL95bmo130eJr8dhJIJ4', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39', NULL),
(32, 'test final1', 'finaltest1@fleet.com', NULL, NULL, '$2y$10$8wpi/5eZch0NfzNwnF6FXuaMgYX9qgkkW9AtEl81XvJs1hDeOS7AS', 'D', NULL, 'ir5kuygIEyHPHHY153q2cFx9VWuuqC1e4armCTOP8qyIdpjsLgb5Auw3RbJM', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_meta`
--

CREATE TABLE `users_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_meta`
--

INSERT INTO `users_meta` (`id`, `user_id`, `type`, `key`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'string', 'profile_image', 'no-user.jpg', NULL, '2020-02-06 00:01:19', '2020-02-06 00:01:19'),
(2, 1, 'string', 'module', 'a:9:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:2:\"16\";i:5;s:1:\"4\";i:6;s:2:\"10\";i:7;s:2:\"12\";i:8;s:2:\"15\";}', NULL, '2020-02-06 00:01:19', '2020-03-09 00:17:15'),
(3, 2, 'string', 'module', 'a:8:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:2:\"10\";i:6;s:2:\"12\";i:7;s:2:\"15\";}', NULL, '2020-02-06 00:44:26', '2020-03-09 02:54:45'),
(4, 2, 'string', 'language', 'English-en', NULL, '2020-02-06 00:44:26', '2020-02-06 00:44:26'),
(5, 3, 'string', 'module', 'a:15:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:2:\"13\";i:5;s:1:\"4\";i:6;s:1:\"5\";i:7;s:1:\"6\";i:8;s:1:\"7\";i:9;s:2:\"14\";i:10;s:1:\"8\";i:11;s:1:\"9\";i:12;s:2:\"10\";i:13;s:2:\"12\";i:14;s:2:\"15\";}', NULL, '2020-02-06 00:45:51', '2020-02-06 00:45:51'),
(6, 3, 'string', 'language', 'English-en', NULL, '2020-02-06 00:45:51', '2020-02-06 00:45:51'),
(7, 4, 'integer', 'is_active', '1', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(8, 4, 'integer', 'is_available', '0', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(9, 4, 'string', 'first_name', 'driver', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(10, 4, 'string', 'middle_name', 'test', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(11, 4, 'string', 'last_name', 'two', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(12, 4, 'string', 'address', 'bhavnagar, gujarat, india', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(13, 4, 'string', 'phone', '123456780090', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(14, 4, 'string', 'phone_code', '+91', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(15, 4, 'string', 'emp_id', '123', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(16, 4, 'string', 'contract_number', '123', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(17, 4, 'string', 'license_number', '123123', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(18, 4, 'string', 'issue_date', '2019-12-10', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(19, 4, 'string', 'exp_date', '2019-11-11', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(20, 4, 'string', 'start_date', '2019-03-20', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(21, 4, 'string', 'end_date', '2019-05-25', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(22, 4, 'string', 'gender', '0', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(23, 4, 'string', 'econtact', '123123', '2020-03-02 05:49:00', '2020-02-06 01:03:11', '2020-03-02 05:49:00'),
(24, 5, 'integer', 'is_active', '1', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(25, 5, 'integer', 'is_available', '0', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(26, 5, 'string', 'first_name', 'customer', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(27, 5, 'string', 'middle_name', '', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(28, 5, 'string', 'last_name', 'test4', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(29, 5, 'string', 'address', '', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(30, 5, 'integer', 'phone', '9876543210', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(31, 5, 'string', 'phone_code', '+91', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(32, 5, 'integer', 'emp_id', '456', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(33, 5, 'integer', 'contract_number', '456', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(34, 5, 'integer', 'license_number', '456456', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(35, 5, 'integer', 'gender', '0', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(36, 5, 'integer', 'econtact', '123123', NULL, '2020-02-06 01:03:11', '2020-02-06 01:03:11'),
(37, 4, 'string', '_method', 'PATCH', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(38, 4, 'string', '_token', 'yUCijcfuhV9lYv822naEj9fKEwOCWyceNwcn2e2o', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(39, 4, 'string', 'id', '4', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(40, 4, 'string', 'edit', '1', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(41, 4, 'string', 'detail_id', '4', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(42, 4, 'string', 'user_id', '1', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(43, 4, 'string', 'vehicle_id', '6', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(44, 4, 'string', 'email', 'd002@fleet.com', '2020-03-02 05:49:00', '2020-02-06 01:09:11', '2020-03-02 05:49:00'),
(45, 6, 'string', '_token', 'yUCijcfuhV9lYv822naEj9fKEwOCWyceNwcn2e2o', NULL, '2020-02-06 01:09:41', '2020-03-02 05:49:29'),
(46, 6, 'string', 'is_active', '0', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(47, 6, 'string', 'is_available', '0', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(48, 6, 'string', 'first_name', 'Amity', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(49, 6, 'string', 'middle_name', 'Oscar Hurley', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(50, 6, 'string', 'last_name', 'Haney', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(51, 6, 'string', 'vehicle_id', '5', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(52, 6, 'string', 'address', 'In consequat Non ex', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(53, 6, 'string', 'email', 'synojuru0@mailinator.com', NULL, '2020-02-06 01:09:41', '2020-03-02 05:49:29'),
(54, 6, 'string', 'phone_code', '+241', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(55, 6, 'string', 'phone', '120456465', NULL, '2020-02-06 01:09:41', '2020-03-02 05:49:29'),
(56, 6, 'string', 'emp_id', 'Et aliquid minus ius', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(57, 6, 'string', 'contract_number', '272', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(58, 6, 'string', 'license_number', '574', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(59, 6, 'string', 'issue_date', '02-Apr-1998', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(60, 6, 'string', 'exp_date', '2020-03-07', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(61, 6, 'string', 'start_date', '2020-03-07', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(62, 6, 'string', 'end_date', '2020-03-07', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(63, 6, 'string', 'password', 'Pa$$w0rd!', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(64, 6, 'string', 'gender', '1', NULL, '2020-02-06 01:09:41', '2020-03-02 05:49:42'),
(65, 6, 'string', 'econtact', 'Sapiente quia fugiat', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(66, 7, 'string', 'first_name', 'customer', NULL, '2020-02-06 02:38:35', '2020-02-06 02:38:35'),
(67, 7, 'string', 'last_name', 'one', NULL, '2020-02-06 02:38:35', '2020-02-06 02:38:35'),
(68, 7, 'NULL', 'address', NULL, NULL, '2020-02-06 02:38:35', '2020-02-06 02:38:35'),
(69, 7, 'string', 'mobno', '123546789', NULL, '2020-02-06 02:38:35', '2020-02-06 02:38:35'),
(70, 7, 'string', 'gender', '1', NULL, '2020-02-06 02:38:35', '2020-02-06 02:38:35'),
(71, 8, 'string', 'phone', '1234567890', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(72, 8, 'string', 'alt_mobile', '123456782', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(73, 8, 'integer', 'vehicle_id', '7', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(74, 8, 'string', 'license_image', '9b53fb6e-edc6-4ac4-9380-601e861f930d.jpeg', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(75, 8, 'string', 'id_proof', 'b2814663-fa85-404e-9ef3-5e40a9baff16.png', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(76, 13, 'string', 'first_name', 'test', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(77, 13, 'string', 'phone', '1234567890', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(78, 13, 'string', 'alt_mobile', '123456782', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(79, 13, 'integer', 'vehicle_id', '12', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(80, 13, 'string', 'license_image', '47ebf022-a0f9-461b-a4bc-e324a6dd6426.jpeg', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(81, 13, 'string', 'id_proof', '4c447574-79fb-4ff7-85e8-918504fb2bda.png', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(82, 14, 'string', 'first_name', 'test', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(83, 14, 'string', 'last_name', 'two', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(84, 14, 'string', 'phone', '1234567890', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(85, 14, 'string', 'alt_mobile', '123456782', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(86, 14, 'integer', 'vehicle_id', '13', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(87, 14, 'string', 'license_image', 'e4cecb64-8788-40c8-9028-0d350c714e19.jpeg', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(88, 14, 'string', 'id_proof', '13d03c39-8aeb-4ebd-8c84-a4bed6802d19.png', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(89, 15, 'string', 'first_name', 'test', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(90, 15, 'string', 'last_name', 'two', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(91, 15, 'string', 'gender', '1', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(92, 15, 'string', 'phone', '1234567890', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(93, 15, 'string', 'alt_mobile', '123456782', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(94, 15, 'integer', 'vehicle_id', '14', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(95, 15, 'string', 'license_image', '3ce7491e-b5e8-4d25-8bc9-11dbbabe4277.jpeg', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(96, 15, 'string', 'id_proof', 'fd0f4751-dc9c-4b0e-9ffd-73dc0da90faf.png', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(97, 1, 'string', 'language', 'English-en', NULL, '2020-02-19 07:42:44', '2020-02-27 23:19:32'),
(98, 16, 'string', 'first_name', 'test', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(99, 16, 'string', 'last_name', 'two', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(100, 16, 'string', 'gender', '1', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(101, 16, 'string', 'phone', '1234567890', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(102, 16, 'string', 'alt_mobile', '123456782', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(103, 16, 'string', 'vehicle_id', '4', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(104, 16, 'string', 'license_image', '48847bc9-bcc1-4ab4-a783-b8be68d0bf9d.jpeg', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(105, 16, 'string', 'id_proof', 'd23c6494-8237-4a0f-9b64-8d9d3c1db67e.png', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(106, 17, 'string', 'first_name', 'customer', NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19'),
(107, 17, 'string', 'last_name', 'test', NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19'),
(108, 17, 'NULL', 'address', NULL, NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19'),
(109, 17, 'string', 'mobno', '1234567890', NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19'),
(110, 17, 'string', 'gender', '1', NULL, '2020-02-28 23:51:19', '2020-02-28 23:51:19'),
(112, 18, 'string', 'license_image', '882f2180-d3d5-4dfa-b0ac-7db87e3a42c6.jpg', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(113, 18, 'string', 'id_proof_type', 'License', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(114, 18, 'string', '_token', 'yUCijcfuhV9lYv822naEj9fKEwOCWyceNwcn2e2o', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(115, 18, 'string', 'is_active', '0', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(116, 18, 'string', 'is_available', '0', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(117, 18, 'string', 'name', 'Kellie Golden', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(118, 18, 'string', 'email', 'jusy@mailinator.com', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(119, 18, 'string', 'phone', '260', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(120, 18, 'string', 'alt_mobile', '931', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(121, 18, 'string', 'vehicle_id', '2', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(122, 18, 'string', 'gender', '1', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(123, 18, 'string', 'password', 'Pa$$w0rd!', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(124, 19, 'string', 'id_proof', '35cca21c-f4aa-4849-9398-73cb01b77279.jpeg', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(125, 19, 'string', 'license_image', 'f7e29ffc-01ad-485c-8b22-ef2a40586e52.png', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(126, 19, 'string', 'id_proof_type', 'License', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(127, 19, 'string', '_token', 'yUCijcfuhV9lYv822naEj9fKEwOCWyceNwcn2e2o', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(128, 19, 'string', 'is_active', '0', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(129, 19, 'string', 'is_available', '0', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(130, 19, 'string', 'name', 'Rana Powers', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(131, 19, 'string', 'email', 'zanag@mailinator.com', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(132, 19, 'string', 'phone', '741', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(133, 19, 'string', 'alt_mobile', '887', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(134, 19, 'string', 'vehicle_id', '3', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(135, 19, 'string', 'gender', '0', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(136, 19, 'string', 'password', 'Pa$$w0rd!', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(137, 4, 'string', 'license_image', '24b345da-6f00-489e-b856-600e7f37a610.png', '2020-03-02 05:49:00', '2020-03-02 05:47:17', '2020-03-02 05:49:00'),
(138, 4, 'string', 'id_proof_type', 'License', '2020-03-02 05:49:00', '2020-03-02 05:47:17', '2020-03-02 05:49:00'),
(139, 4, 'string', 'name', 'driver two00', '2020-03-02 05:49:00', '2020-03-02 05:47:17', '2020-03-02 05:49:00'),
(140, 4, 'string', 'alt_mobile', '12356', '2020-03-02 05:49:00', '2020-03-02 05:47:17', '2020-03-02 05:49:00'),
(141, 4, 'object', 'id_proof', '{}', '2020-03-02 05:49:00', '2020-03-02 05:47:17', '2020-03-02 05:49:00'),
(142, 6, 'string', 'id_proof', 'd98ecfa3-25af-4e8a-818e-f7aedf7397a2.jpg', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(143, 6, 'string', 'license_image', '6a88a708-3d21-4155-abdb-2b702fcbcfc8.jpg', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(144, 6, 'string', 'id_proof_type', 'License', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(145, 6, 'string', '_method', 'PATCH', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(146, 6, 'string', 'id', '6', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(147, 6, 'string', 'edit', '1', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(148, 6, 'string', 'detail_id', '6', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:42'),
(149, 6, 'string', 'user_id', '1', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(150, 6, 'string', 'name', 'Amity Haney0', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(151, 6, 'string', 'alt_mobile', '44564565', NULL, '2020-03-02 05:49:29', '2020-03-02 05:49:29'),
(152, 20, 'string', '_token', 'dZWVh7rLoZHb6wzgmQFVc5wXYkpTNH2Hu5vA5HG3', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(153, 20, 'string', 'is_active', '0', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(154, 20, 'string', 'is_available', '0', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(155, 20, 'string', 'name', 'Darryl Chen', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(156, 20, 'string', 'email', 'nogacule@mailinator.com', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(157, 20, 'string', 'phone', '51', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(158, 20, 'string', 'alt_mobile', '568', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(159, 20, 'string', 'vehicle_id', '16', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(160, 20, 'string', 'gender', '0', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(161, 20, 'string', 'password', 'Pa$$w0rd!', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(162, 21, 'string', 'module', 'a:5:{i:0;s:1:\"0\";i:1;s:1:\"3\";i:2;s:2:\"10\";i:3;s:2:\"12\";i:4;s:2:\"15\";}', NULL, '2020-03-09 02:54:50', '2020-03-09 02:54:50'),
(163, 21, 'string', 'language', 'English-en', NULL, '2020-03-09 02:54:50', '2020-03-09 02:54:50'),
(164, 22, 'string', 'first_name', 'test', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(165, 22, 'string', 'last_name', 'three', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(166, 22, 'string', 'gender', '1', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(167, 22, 'string', 'phone', '1234567890', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(168, 22, 'string', 'alt_mobile', '123456782', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(169, 22, 'string', 'id_proof', '4c975dbf-04dc-4c39-8391-e274ea9419c6.png', NULL, '2020-03-12 04:19:30', '2020-03-12 04:19:30'),
(170, 22, 'integer', 'vehicle_id', '18', NULL, '2020-03-12 04:38:55', '2020-03-12 04:40:57'),
(171, 22, 'string', 'license_image', '932b7e7e-2b12-4e4b-8776-31b3833a0d42.jpeg', NULL, '2020-03-12 04:38:55', '2020-03-16 02:37:44'),
(172, 23, 'string', 'first_name', 'test', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(173, 23, 'string', 'last_name', 'four', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(174, 23, 'string', 'gender', '1', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(175, 23, 'string', 'phone', '12345678454', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(176, 23, 'string', 'alt_mobile', '1234567545', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(177, 23, 'string', 'id_proof', '8d56fcc2-570d-4a48-a54f-3d9f852f35a5.png', NULL, '2020-03-12 04:57:08', '2020-03-12 04:57:08'),
(178, 1, 'integer', 'login_status', '1', NULL, '2020-03-16 06:03:55', '2020-03-16 06:03:55'),
(179, 7, 'integer', 'login_status', '1', NULL, '2020-03-16 06:06:09', '2020-03-16 06:06:09'),
(180, 9, 'integer', 'login_status', '1', NULL, '2020-03-16 06:18:49', '2020-03-16 06:18:49'),
(181, 24, 'string', 'first_name', 'Patrick', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51'),
(182, 24, 'string', 'last_name', 'Goodman', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51'),
(183, 24, 'string', 'address', 'Reprehenderit nostru', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51'),
(184, 24, 'string', 'mobno', '123456789', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51'),
(185, 24, 'string', 'gender', '0', NULL, '2020-03-16 06:37:51', '2020-03-16 06:37:51'),
(186, 25, 'string', 'first_name', 'new', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(187, 25, 'string', 'last_name', 'driver5', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(188, 25, 'string', 'gender', '0', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(189, 25, 'string', 'phone', '12345678', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(190, 25, 'string', 'alt_mobile', '123456879', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(191, 25, 'string', 'vehicle_id', '19', NULL, '2020-03-17 01:15:04', '2020-03-18 03:59:30'),
(192, 26, 'string', 'first_name', 'tttttttttttt', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(193, 26, 'string', 'gender', '1', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(194, 26, 'string', 'phone', '123456789', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(195, 26, 'string', 'alt_mobile', '123456789', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(196, 26, 'integer', 'vehicle_id', '20', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(197, 27, 'string', 'first_name', 'Baker', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(198, 27, 'string', 'last_name', 'Bartlett', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(199, 27, 'string', 'gender', '1', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(200, 27, 'string', 'phone', '4545435', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(201, 27, 'string', 'alt_mobile', '454353345', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(202, 27, 'integer', 'vehicle_id', '21', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(203, 28, 'string', 'first_name', 'Autumn', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(204, 28, 'string', 'last_name', 'Rice', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(205, 28, 'string', 'gender', '1', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(206, 28, 'string', 'phone', '45687979', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(207, 28, 'string', 'alt_mobile', '787844', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(208, 28, 'integer', 'vehicle_id', '22', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(209, 28, 'string', 'license_image', 'fe5e031f-0117-4da2-806c-2f9dc303b0b5.png', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(210, 28, 'string', 'id_proof', '283fe7d1-59ad-44ad-8f7e-41262c6dd939.png', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(211, 29, 'string', 'first_name', 'Casey', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(212, 29, 'string', 'last_name', 'Stephenson', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(213, 29, 'string', 'gender', '1', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(214, 29, 'string', 'phone', '123123', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(215, 29, 'string', 'alt_mobile', '789456123', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(216, 29, 'integer', 'vehicle_id', '23', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(217, 29, 'string', 'license_image', 'a7e92909-5b57-4465-a65b-60f2797cc05e.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(218, 29, 'string', 'id_proof', 'a0d1038a-0598-4773-80a7-83fbc3d3697a.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(219, 29, 'integer', 'login_status', '1', NULL, '2020-03-17 02:36:34', '2020-03-17 02:36:34'),
(220, 25, 'string', '_method', 'PATCH', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(221, 25, 'string', '_token', 'guutvpVaN6FmD53M1OJplQfAbnVMbBuIOk4D5DEx', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(222, 25, 'string', 'id', '25', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(223, 25, 'string', 'edit', '1', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(224, 25, 'NULL', 'detail_id', NULL, NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(225, 25, 'string', 'user_id', '1', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(226, 25, 'string', 'name', 'new driver5', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(227, 25, 'string', 'email', 'himani@hyvikk.com54', NULL, '2020-03-18 03:59:30', '2020-03-18 03:59:30'),
(228, 30, 'string', 'first_name', 'himani', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40'),
(229, 30, 'string', 'last_name', 'bhatt', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40'),
(230, 30, 'string', 'address', 'bhavnagar', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40'),
(231, 30, 'string', 'mobno', '12345678', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40'),
(232, 30, 'string', 'gender', '0', NULL, '2020-03-18 03:59:40', '2020-03-18 03:59:40'),
(233, 30, 'integer', 'login_status', '1', NULL, '2020-03-18 03:59:47', '2020-03-18 03:59:47'),
(234, 8, 'integer', 'login_status', '1', NULL, '2020-03-18 04:50:29', '2020-03-18 04:50:29'),
(235, 31, 'string', 'first_name', 'test', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(236, 31, 'string', 'last_name', 'final', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(237, 31, 'string', 'gender', '1', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(238, 31, 'string', 'phone', '12345678454', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(239, 31, 'string', 'fcm_id', '123456', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(240, 31, 'NULL', 'device_token', NULL, NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(241, 31, 'string', 'alt_mobile', '1234567545', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(242, 31, 'string', 'mode', 'android', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(243, 31, 'integer', 'vehicle_id', '24', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(244, 31, 'string', 'license_image', 'f48623b6-2137-478c-9249-ef06d6631f9f.jpeg', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(245, 31, 'string', 'id_proof', 'cabae953-c41f-4a68-9eb1-fbcef6f1e1a6.png', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(246, 32, 'string', 'gender', '0', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(247, 32, 'string', 'phone', '12345678454', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(248, 32, 'string', 'fcm_id', '123456', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(249, 32, 'NULL', 'device_token', NULL, NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(250, 32, 'string', 'alt_mobile', '1234567545', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(251, 32, 'string', 'mode', 'android', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20'),
(252, 32, 'string', 'id_proof', '6c302c43-687a-49d7-91d9-1811b99b157c.png', NULL, '2020-03-19 08:57:20', '2020-03-19 08:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `make_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `lic_exp_date` date DEFAULT NULL,
  `reg_exp_date` date DEFAULT NULL,
  `vehicle_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engine_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horse_power` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `license_plate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mileage` int(11) DEFAULT NULL,
  `in_service` tinyint(4) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `int_mileage` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make_id`, `model_id`, `color_id`, `make`, `model`, `type`, `year`, `group_id`, `lic_exp_date`, `reg_exp_date`, `vehicle_image`, `engine_type`, `horse_power`, `color`, `vin`, `license_plate`, `mileage`, `in_service`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `int_mileage`, `type_id`) VALUES
(1, 1, 0, 1, NULL, NULL, NULL, '2015', 1, '2019-10-30', '2019-11-10', NULL, 'Petrol', '120', NULL, '1055', '7895XY', NULL, 1, 1, '2020-02-06 00:17:49', '2020-02-06 00:54:50', '2020-02-06 00:54:50', 1000, 2),
(2, 2, 2, 3, NULL, NULL, NULL, '2015', 1, '2020-02-29', '2020-02-29', 'f4dbe932-6286-4f43-884c-db0929ad9542.jpg', 'Petrol', '190', NULL, '45678', '12345645602', NULL, 1, 1, '2020-02-06 00:30:26', '2020-03-02 06:19:07', NULL, 1000, 2),
(3, 3, 3, 3, NULL, NULL, NULL, '2012', 1, '2020-03-07', '2020-03-07', NULL, 'Petrol', '190', NULL, '124578', '34578', 2000, 1, 1, '2020-02-06 00:31:23', '2020-02-20 04:34:45', NULL, 456, 5),
(4, 4, 4, 2, NULL, NULL, NULL, '2015', NULL, '2020-03-07', '2020-03-14', '39c7379f-c2bb-4701-a9bb-cbff1754751d.jpg', 'Petrol', '120', NULL, '45678', '9191bh', NULL, 1, 1, '2020-02-06 00:36:02', '2020-02-20 04:34:54', NULL, 1230, 7),
(5, 1, 1, 1, NULL, NULL, NULL, '2012', 1, '2020-03-07', '2020-03-07', 'bf2c3bfc-6c98-4a9f-b190-5255f3fc8259.jpeg', 'Petrol', '120', NULL, '78777', '56874', 1000, 1, 1, '2020-02-06 00:54:09', '2020-03-16 03:53:26', NULL, 12334, 2),
(6, 2, 2, 3, NULL, NULL, NULL, '2010', 2, '2020-03-07', '2020-03-07', NULL, 'Petrol', '120', NULL, '12345', '4572', 1000, 1, 3, '2020-02-06 01:08:41', '2020-02-06 05:23:59', NULL, 1200, 5),
(7, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1111111', '', NULL, 1, NULL, '2020-02-19 02:39:41', '2020-02-25 04:08:31', '2020-02-25 04:08:31', NULL, 1),
(8, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:44:15', '2020-02-25 04:08:31', '2020-02-25 04:08:31', NULL, 1),
(9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:44:56', '2020-02-25 04:08:31', '2020-02-25 04:08:31', NULL, 1),
(10, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:45:21', '2020-02-25 04:08:31', '2020-02-25 04:08:31', NULL, 1),
(11, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:45:47', '2020-02-25 04:08:31', '2020-02-25 04:08:31', NULL, 1),
(12, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:46:13', '2020-02-25 04:08:13', '2020-02-25 04:08:13', NULL, 1),
(13, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 02:46:45', '2020-02-25 04:08:13', '2020-02-25 04:08:13', NULL, 1),
(14, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111111', '', NULL, 1, NULL, '2020-02-19 03:59:04', '2020-02-25 04:08:13', '2020-02-25 04:08:13', NULL, 1),
(15, 5, 5, 4, NULL, NULL, NULL, NULL, 3, NULL, NULL, 'd855b1d9-572b-47fe-98d6-3582354e4815.jpg', NULL, NULL, NULL, NULL, '9191bh123', NULL, 1, 1, '2020-03-02 06:22:25', '2020-03-02 06:22:25', NULL, NULL, 6),
(16, 5, 5, 2, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rem dolor voluptas e', NULL, 1, 2, '2020-03-04 01:15:23', '2020-03-04 01:15:23', NULL, NULL, 1),
(17, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111111', NULL, 1, NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32', NULL, NULL, 3),
(18, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11111100', NULL, 1, NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57', NULL, NULL, 3),
(19, 3, 3, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34342234', NULL, 1, NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04', NULL, NULL, 2),
(20, 2, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rtrr', NULL, 1, NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46', NULL, NULL, 4),
(21, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '540', NULL, 1, NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55', NULL, NULL, 5),
(22, 2, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '141', NULL, 1, NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47', NULL, NULL, 2),
(23, 3, 3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '760', NULL, 1, NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29', NULL, NULL, 4),
(24, 1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'final01', NULL, 1, NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39', NULL, NULL, 1),
(25, 1, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1903', NULL, 1, 1, '2020-03-20 08:18:07', '2020-03-20 08:18:27', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_meta`
--

CREATE TABLE `vehicles_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'null',
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles_meta`
--

INSERT INTO `vehicles_meta` (`id`, `vehicle_id`, `type`, `key`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'string', 'ins_number', '', NULL, '2020-02-06 00:17:49', '2020-02-06 00:17:49'),
(2, 1, 'string', 'ins_exp_date', '', NULL, '2020-02-06 00:17:49', '2020-02-06 00:17:49'),
(3, 1, 'string', 'documents', '', NULL, '2020-02-06 00:17:49', '2020-02-06 00:17:49'),
(4, 1, 'string', 'average', '45', NULL, '2020-02-06 00:17:49', '2020-02-06 00:19:14'),
(5, 1, 'string', 'udf', 'N;', NULL, '2020-02-06 00:19:14', '2020-02-06 00:19:14'),
(6, 2, 'string', 'ins_number', '', NULL, '2020-02-06 00:30:26', '2020-02-06 00:30:26'),
(7, 2, 'string', 'ins_exp_date', '', NULL, '2020-02-06 00:30:26', '2020-02-06 00:30:26'),
(8, 2, 'string', 'documents', '', NULL, '2020-02-06 00:30:26', '2020-02-06 00:30:26'),
(9, 2, 'string', 'udf', 'N;', NULL, '2020-02-06 00:30:26', '2020-02-06 00:30:26'),
(10, 2, 'string', 'average', '55', NULL, '2020-02-06 00:30:26', '2020-02-06 00:30:26'),
(11, 3, 'string', 'ins_number', '', NULL, '2020-02-06 00:31:23', '2020-02-06 00:31:23'),
(12, 3, 'string', 'ins_exp_date', '', NULL, '2020-02-06 00:31:23', '2020-02-06 00:31:23'),
(13, 3, 'string', 'documents', '', NULL, '2020-02-06 00:31:23', '2020-02-06 00:31:23'),
(14, 3, 'string', 'udf', 'N;', NULL, '2020-02-06 00:31:23', '2020-02-06 00:31:23'),
(15, 3, 'string', 'average', '50', NULL, '2020-02-06 00:31:23', '2020-02-06 00:31:23'),
(16, 4, 'string', 'ins_number', '', NULL, '2020-02-06 00:36:02', '2020-02-06 00:36:02'),
(17, 4, 'string', 'ins_exp_date', '', NULL, '2020-02-06 00:36:02', '2020-02-06 00:36:02'),
(18, 4, 'string', 'documents', '', NULL, '2020-02-06 00:36:02', '2020-02-06 00:36:02'),
(19, 4, 'string', 'udf', 'N;', NULL, '2020-02-06 00:36:02', '2020-02-06 00:36:02'),
(20, 4, 'string', 'average', '50', NULL, '2020-02-06 00:36:02', '2020-02-06 00:36:02'),
(21, 5, 'string', 'ins_number', '', NULL, '2020-02-06 00:54:09', '2020-02-06 00:54:09'),
(22, 5, 'string', 'ins_exp_date', '', NULL, '2020-02-06 00:54:09', '2020-02-06 00:54:09'),
(23, 5, 'string', 'documents', '', NULL, '2020-02-06 00:54:09', '2020-02-06 00:54:09'),
(24, 5, 'string', 'udf', 'N;', NULL, '2020-02-06 00:54:09', '2020-02-06 00:54:09'),
(25, 5, 'string', 'average', '50', NULL, '2020-02-06 00:54:09', '2020-02-06 00:54:09'),
(26, 6, 'string', 'ins_number', '', NULL, '2020-02-06 01:08:41', '2020-02-06 01:08:41'),
(27, 6, 'string', 'ins_exp_date', '', NULL, '2020-02-06 01:08:41', '2020-02-06 01:08:41'),
(28, 6, 'string', 'documents', '', NULL, '2020-02-06 01:08:41', '2020-02-06 01:08:41'),
(29, 6, 'string', 'udf', 'N;', NULL, '2020-02-06 01:08:41', '2020-02-06 01:08:41'),
(30, 6, 'string', 'average', '50', NULL, '2020-02-06 01:08:41', '2020-02-06 01:08:41'),
(31, 6, 'integer', 'driver_id', '22', NULL, '2020-02-06 01:09:11', '2020-03-12 04:38:55'),
(32, 5, 'integer', 'driver_id', '6', NULL, '2020-02-06 01:09:41', '2020-02-06 01:09:41'),
(33, 7, 'string', 'documents', 'facaa767-da9c-46a6-b7d0-9d42564ff698.jpg', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(34, 7, 'string', 'rc_book', '182102e7-11e4-4573-886a-514acb3ff316.jpg', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(35, 7, 'string', 'permit', '69d4a0a4-eed1-41ec-9bc4-3ea205b84c85.png', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(36, 7, 'string', 'vehicle_fitness', '1e44de63-3ac1-4f11-b6fa-17b6d748b9b0.jpeg', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(37, 7, 'integer', 'driver_id', '8', NULL, '2020-02-19 02:39:41', '2020-02-19 02:39:41'),
(38, 8, 'string', 'documents', 'c316700c-6747-49f3-bd8a-dcc399dc242e.jpg', NULL, '2020-02-19 02:44:15', '2020-02-19 02:44:15'),
(39, 8, 'string', 'rc_book', '6a284d41-d658-4e5d-ab87-bdfa5a24de5f.jpg', NULL, '2020-02-19 02:44:15', '2020-02-19 02:44:15'),
(40, 8, 'string', 'permit', 'fd6c276a-0d1a-4713-89d0-e46dae3ad0b3.png', NULL, '2020-02-19 02:44:15', '2020-02-19 02:44:15'),
(41, 8, 'string', 'vehicle_fitness', 'd2432351-50ed-44d1-89f7-b7d2ab275aa1.jpeg', NULL, '2020-02-19 02:44:15', '2020-02-19 02:44:15'),
(42, 9, 'string', 'documents', 'fb54dffe-236c-49cc-a9a7-a7044b3e5b59.jpg', NULL, '2020-02-19 02:44:56', '2020-02-19 02:44:56'),
(43, 9, 'string', 'rc_book', 'cfde8fbc-1c46-4143-a1db-a88a2f9bf2f4.jpg', NULL, '2020-02-19 02:44:56', '2020-02-19 02:44:56'),
(44, 9, 'string', 'permit', 'cc4d8e86-140a-49d9-a5b0-506fea30c5b7.png', NULL, '2020-02-19 02:44:56', '2020-02-19 02:44:56'),
(45, 9, 'string', 'vehicle_fitness', '38c6dd9d-6795-4e58-9588-c5d7e9854359.jpeg', NULL, '2020-02-19 02:44:56', '2020-02-19 02:44:56'),
(46, 10, 'string', 'documents', 'e6e1c201-df0b-454f-ab24-32721b049c73.jpg', NULL, '2020-02-19 02:45:21', '2020-02-19 02:45:21'),
(47, 10, 'string', 'rc_book', '3238fde5-7b76-4f1d-b7c8-7d41e458dbc4.jpg', NULL, '2020-02-19 02:45:21', '2020-02-19 02:45:21'),
(48, 10, 'string', 'permit', '450e1f16-d952-4981-a8fa-e9ae6069e05d.png', NULL, '2020-02-19 02:45:21', '2020-02-19 02:45:21'),
(49, 10, 'string', 'vehicle_fitness', '36e440bb-f5d5-458b-b99a-7044d14b4ba1.jpeg', NULL, '2020-02-19 02:45:21', '2020-02-19 02:45:21'),
(50, 11, 'string', 'documents', 'd5f6511b-65c9-4830-874e-42b0cac40193.jpg', NULL, '2020-02-19 02:45:47', '2020-02-19 02:45:47'),
(51, 11, 'string', 'rc_book', 'ef8d530a-7ed6-407c-8ee2-209bc71e058b.jpg', NULL, '2020-02-19 02:45:47', '2020-02-19 02:45:47'),
(52, 11, 'string', 'permit', '296f2666-56e2-4012-a04d-18c1f5aa6361.png', NULL, '2020-02-19 02:45:47', '2020-02-19 02:45:47'),
(53, 11, 'string', 'vehicle_fitness', '0c4a7a1d-fc99-408c-9630-e0f23efb4433.jpeg', NULL, '2020-02-19 02:45:47', '2020-02-19 02:45:47'),
(54, 12, 'string', 'documents', '5250f7f6-df61-4adf-8a4b-ab881d3b8ac8.jpg', NULL, '2020-02-19 02:46:13', '2020-02-19 02:46:13'),
(55, 12, 'string', 'rc_book', 'c3b09b5c-3efd-46e1-8458-3adfedeb6dc2.jpg', NULL, '2020-02-19 02:46:13', '2020-02-19 02:46:13'),
(56, 12, 'string', 'permit', '07b1191b-9f31-45c8-9a4f-952f907555b0.png', NULL, '2020-02-19 02:46:13', '2020-02-19 02:46:13'),
(57, 12, 'string', 'vehicle_fitness', '592aabe9-0323-4af5-b2ee-11c39a8baf62.jpeg', NULL, '2020-02-19 02:46:13', '2020-02-19 02:46:13'),
(58, 12, 'integer', 'driver_id', '13', NULL, '2020-02-19 02:46:14', '2020-02-19 02:46:14'),
(59, 13, 'string', 'documents', 'a7503ae1-b96f-4b29-92e2-f3856b27ba10.jpg', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(60, 13, 'string', 'rc_book', '14d232e5-141e-47c9-8c10-25bf05126e8e.jpg', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(61, 13, 'string', 'permit', '7c74143c-d330-49e8-a5a6-0335b375dc09.png', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(62, 13, 'string', 'vehicle_fitness', 'f7cc7fed-b9d0-4684-b647-eb1c3bfbcbf5.jpeg', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(63, 13, 'integer', 'driver_id', '14', NULL, '2020-02-19 02:46:45', '2020-02-19 02:46:45'),
(64, 14, 'string', 'documents', 'b016505e-ebfa-4461-909a-ee908807f5b2.jpg', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(65, 14, 'string', 'rc_book', '17dc172e-a518-46e1-a1b0-6d444f814246.jpg', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(66, 14, 'string', 'permit', '283d5b25-2f86-4fe9-9aac-85d1fafe3d44.png', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(67, 14, 'string', 'vehicle_fitness', '5910e974-3fda-4598-8d32-c70da08aaaaf.jpeg', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(68, 14, 'integer', 'driver_id', '15', NULL, '2020-02-19 03:59:04', '2020-02-19 03:59:04'),
(69, 4, 'integer', 'driver_id', '16', NULL, '2020-02-27 05:29:44', '2020-02-27 05:29:44'),
(70, 2, 'integer', 'driver_id', '18', NULL, '2020-03-02 05:31:00', '2020-03-02 05:31:00'),
(71, 3, 'integer', 'driver_id', '19', NULL, '2020-03-02 05:41:42', '2020-03-02 05:41:42'),
(72, 2, 'string', 'insurance', '6710c588-5cd2-4af3-992c-c0bddc94fdf9.jpeg', NULL, '2020-03-02 06:16:22', '2020-03-02 06:16:22'),
(73, 2, 'string', 'rc_book', '5637dcb9-d5d4-4712-93d4-fc21218b2ba2.png', NULL, '2020-03-02 06:16:22', '2020-03-02 06:16:22'),
(74, 2, 'string', 'permit', '2a858d00-b9da-4c4b-8c42-01827078edbd.jpg', NULL, '2020-03-02 06:16:22', '2020-03-02 06:16:22'),
(75, 2, 'string', 'vehicle_fitness', 'd8b36085-b17e-45b1-bc31-ffe7c29985e6.jpg', NULL, '2020-03-02 06:16:22', '2020-03-02 06:16:22'),
(76, 15, 'string', 'insurance', '63d3b8c2-a6c5-4b99-bc4d-adc7c9205a7a.png', NULL, '2020-03-02 06:22:25', '2020-03-02 06:22:25'),
(77, 15, 'string', 'rc_book', '025f4d08-fc2a-49a6-bdba-38b0ce8bd853.jpg', NULL, '2020-03-02 06:22:25', '2020-03-02 06:22:25'),
(78, 15, 'string', 'permit', '2bd444dc-c841-4cf5-b9ca-cffcf410174a.jpeg', NULL, '2020-03-02 06:22:25', '2020-03-02 06:22:25'),
(79, 15, 'string', 'vehicle_fitness', '5fd9bd96-bae8-4481-adf7-9cf8a354126d.jpeg', NULL, '2020-03-02 06:22:25', '2020-03-02 06:22:25'),
(80, 16, 'integer', 'driver_id', '20', NULL, '2020-03-04 01:15:28', '2020-03-04 01:15:28'),
(81, 17, 'string', 'documents', '69d8e666-dbb6-4566-9925-b4a2c9221640.jpg', NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(82, 17, 'string', 'rc_book', '1c870604-c7fe-4b8a-aae7-20280bdc623b.jpg', NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(83, 17, 'string', 'permit', '75031096-3228-4677-a200-e352979ee950.png', NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(84, 17, 'string', 'vehicle_fitness', 'c74bfa29-a5a5-4317-8df6-bdb0ca652ff1.jpeg', NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(85, 17, 'integer', 'driver_id', '22', NULL, '2020-03-12 04:39:32', '2020-03-12 04:39:32'),
(86, 18, 'string', 'insurance', '6b2be63a-a47e-4dbe-aaf7-721a298ae45f.jpg', NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(87, 18, 'string', 'rc_book', 'd1a532f0-eab1-49c2-8426-686f3013e436.jpg', NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(88, 18, 'string', 'permit', 'de9fc6b6-f34c-4a60-95cc-5daa3df521ac.png', NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(89, 18, 'string', 'vehicle_fitness', 'a0421949-c910-42fc-af24-c8121306d475.jpeg', NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(90, 18, 'integer', 'driver_id', '22', NULL, '2020-03-12 04:40:57', '2020-03-12 04:40:57'),
(91, 3, 'string', 'insurance', 'da7a36ea-f285-4e61-957a-8df19f52dff0.jpg', NULL, '2020-03-16 02:36:52', '2020-03-16 02:37:44'),
(92, 3, 'string', 'rc_book', 'fc9a8cc4-3261-4393-8b24-5df055a5024c.jpg', NULL, '2020-03-16 02:36:52', '2020-03-16 02:37:44'),
(93, 3, 'string', 'permit', 'cc3412b8-32ca-48c8-841d-271641b0b471.png', NULL, '2020-03-16 02:36:52', '2020-03-16 02:37:44'),
(94, 3, 'string', 'vehicle_fitness', 'e0001063-88b5-4aa3-b18a-8294c05c8e1c.jpeg', NULL, '2020-03-16 02:36:52', '2020-03-16 02:37:44'),
(95, 19, 'integer', 'driver_id', '25', NULL, '2020-03-17 01:15:04', '2020-03-17 01:15:04'),
(96, 20, 'integer', 'driver_id', '26', NULL, '2020-03-17 01:22:46', '2020-03-17 01:22:46'),
(97, 21, 'integer', 'driver_id', '27', NULL, '2020-03-17 01:26:55', '2020-03-17 01:26:55'),
(98, 22, 'string', 'insurance', '99f08cdd-0940-467f-b515-f10006bb219e.png', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(99, 22, 'string', 'rc_book', 'd1f31d71-fe60-44a3-b1c1-439e060bf12e.png', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(100, 22, 'integer', 'driver_id', '28', NULL, '2020-03-17 02:33:47', '2020-03-17 02:33:47'),
(101, 23, 'string', 'insurance', 'cbe14c4d-3e4d-4715-92b6-fa4b86c98cfa.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(102, 23, 'string', 'rc_book', '1276a74c-8a39-4f5a-ba0c-47891ef81b65.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(103, 23, 'string', 'permit', '96acf8cd-8dfe-4beb-a260-3bc3fe12dab3.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(104, 23, 'string', 'vehicle_fitness', '85983bbd-0a9e-41de-8efc-d7f818ea9068.png', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(105, 23, 'integer', 'driver_id', '29', NULL, '2020-03-17 02:36:29', '2020-03-17 02:36:29'),
(106, 24, 'string', 'insurance', 'b0581b0f-dc03-46ce-a35e-ac4dbd823b57.jpg', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(107, 24, 'string', 'rc_book', '736f77d0-3804-4e93-88a3-139687080fcd.jpg', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(108, 24, 'string', 'permit', '9dbfefe4-a4b7-42c7-8db3-4e124e668d9d.png', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(109, 24, 'string', 'vehicle_fitness', 'c490414f-bffa-48c6-ba5f-43b376e6cd87.jpeg', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39'),
(110, 24, 'integer', 'driver_id', '31', NULL, '2020-03-19 08:23:39', '2020-03-19 08:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_colors`
--

CREATE TABLE `vehicle_colors` (
  `id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_colors`
--

INSERT INTO `vehicle_colors` (`id`, `color`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'red', '#b40000', '2020-02-06 00:18:20', '2020-03-13 07:01:01', NULL),
(2, 'green', '#00b300', '2020-02-06 00:18:26', '2020-03-13 07:10:01', NULL),
(3, 'blue', '#0000ff', '2020-02-06 00:18:30', '2020-03-13 07:10:06', NULL),
(4, 'Yellow', '#ffff00', '2020-02-10 03:49:33', '2020-03-13 07:10:14', NULL),
(5, 'orange', '#ff6600', '2020-03-09 03:43:40', '2020-03-13 07:10:19', NULL),
(6, 'white', '#ffffff', '2020-03-09 04:22:19', '2020-03-13 07:10:26', NULL),
(7, 'pink', '#ff99c2', '2020-03-13 07:01:15', '2020-03-13 07:01:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_demands`
--

CREATE TABLE `vehicle_demands` (
  `id` int(11) NOT NULL,
  `source` text,
  `destination` text,
  `date_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_group`
--

CREATE TABLE `vehicle_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `note` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_group`
--

INSERT INTO `vehicle_group` (`id`, `user_id`, `name`, `description`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'group 1', 'testing', 'test', NULL, '2020-02-06 00:19:53', '2020-02-06 00:19:53'),
(2, NULL, 'group 2', 'test group 2', 'testing', NULL, '2020-02-06 00:22:42', '2020-02-06 00:22:42'),
(3, 2, 'vendor 1 group', NULL, NULL, NULL, '2020-02-10 01:11:14', '2020-02-10 01:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_make`
--

CREATE TABLE `vehicle_make` (
  `id` int(11) NOT NULL,
  `make` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_make`
--

INSERT INTO `vehicle_make` (`id`, `make`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'make 1', '6c0fc62d-dd90-4400-8e01-b56b6f125c2c.png', '2020-02-06 00:18:06', '2020-03-16 05:28:38', NULL),
(2, 'make 2', 'e276a86f-f9b3-445d-91d0-68992700eb30.png', '2020-02-06 00:29:13', '2020-03-16 05:28:43', NULL),
(3, 'sample', 'c2e06de0-edb4-4dff-9e9b-b662bff1b8ce.png', '2020-02-06 00:29:35', '2020-03-16 05:28:50', NULL),
(4, 'test make', '17a3cc09-a341-4e47-9492-9108885f52df.png', '2020-02-06 00:34:56', '2020-03-16 05:28:58', NULL),
(5, 'A aspernatur', 'bf55bdd8-b240-47a1-91e7-fd0a42683411.png', '2020-02-10 03:49:02', '2020-03-16 05:29:06', NULL),
(6, 'Tata', 'e1151cbf-0555-4dc2-8b2d-cd86fdd6dcbc.png', '2020-03-16 05:20:54', '2020-03-16 05:22:54', NULL),
(7, 'Honda', '8068a27c-2a8c-49f1-aa9d-cae4cb7022d2.png', '2020-03-16 05:21:22', '2020-03-16 05:21:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_model`
--

INSERT INTO `vehicle_model` (`id`, `make_id`, `model`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'model 1', '2020-02-06 00:18:15', '2020-02-06 00:18:15', NULL),
(2, 2, 'model 2', '2020-02-06 00:29:21', '2020-02-06 00:29:21', NULL),
(3, 3, 'model', '2020-02-06 00:29:42', '2020-02-06 00:29:42', NULL),
(4, 4, 'test model', '2020-02-06 00:35:06', '2020-02-06 00:35:06', NULL),
(5, 5, 'Dolorem', '2020-02-10 03:49:20', '2020-02-10 03:49:26', NULL),
(6, 1, 'sample model 1', '2020-02-18 23:38:44', '2020-02-18 23:38:44', NULL),
(7, 2, '2 test', '2020-03-16 07:12:58', '2020-03-16 07:12:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_review`
--

CREATE TABLE `vehicle_review` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reg_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kms_outgoing` int(11) DEFAULT NULL,
  `kms_incoming` int(11) DEFAULT NULL,
  `fuel_level_out` int(11) DEFAULT NULL,
  `fuel_level_in` int(11) DEFAULT NULL,
  `datetime_outgoing` datetime DEFAULT NULL,
  `datetime_incoming` datetime DEFAULT NULL,
  `petrol_card` text COLLATE utf8_unicode_ci,
  `lights` text COLLATE utf8_unicode_ci,
  `invertor` text COLLATE utf8_unicode_ci,
  `car_mats` text COLLATE utf8_unicode_ci,
  `int_damage` text COLLATE utf8_unicode_ci,
  `int_lights` text COLLATE utf8_unicode_ci,
  `ext_car` text COLLATE utf8_unicode_ci,
  `tyre` text COLLATE utf8_unicode_ci,
  `ladder` text COLLATE utf8_unicode_ci,
  `leed` text COLLATE utf8_unicode_ci,
  `power_tool` text COLLATE utf8_unicode_ci,
  `ac` text COLLATE utf8_unicode_ci,
  `head_light` text COLLATE utf8_unicode_ci,
  `lock` text COLLATE utf8_unicode_ci,
  `windows` text COLLATE utf8_unicode_ci,
  `condition` text COLLATE utf8_unicode_ci,
  `oil_chk` text COLLATE utf8_unicode_ci,
  `suspension` text COLLATE utf8_unicode_ci,
  `tool_box` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_review`
--

INSERT INTO `vehicle_review` (`id`, `vehicle_id`, `user_id`, `reg_no`, `kms_outgoing`, `kms_incoming`, `fuel_level_out`, `fuel_level_in`, `datetime_outgoing`, `datetime_incoming`, `petrol_card`, `lights`, `invertor`, `car_mats`, `int_damage`, `int_lights`, `ext_car`, `tyre`, `ladder`, `leed`, `power_tool`, `ac`, `head_light`, `lock`, `windows`, `condition`, `oil_chk`, `suspension`, `tool_box`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 2, '25', 58, 93, 0, 1, '2020-02-10 11:31:55', '2020-02-10 11:31:56', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Quasi sint incididu\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:19:\"Ut fuga Exercitatio\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Velit in at officia\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:19:\"Cupiditate est atqu\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:20:\"Nostrud quis praesen\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Beatae voluptatem d\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:20:\"Non ut dolorum ut ei\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:20:\"Error similique veri\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:20:\"Adipisicing dolor qu\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:18:\"Amet incidunt itaq\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:20:\"Sequi in aut omnis v\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:18:\"Consequatur Ipsa v\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:18:\"Sit est et reprehe\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Fugit odit sint dol\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Aliqua Minima eu om\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:20:\"Reprehenderit distin\";}', 'a:2:{s:4:\"flag\";s:1:\"0\";s:4:\"text\";s:20:\"Velit in dolor magni\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:20:\"Nostrud aperiam inci\";}', 'a:2:{s:4:\"flag\";s:1:\"1\";s:4:\"text\";s:19:\"Fugiat qui corporis\";}', NULL, '2020-02-10 00:31:59', '2020-02-10 00:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicletype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `displayname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isenable` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `vehicletype`, `displayname`, `icon`, `isenable`, `seats`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hatchback', 'Hatchback', 'vehicle_type_1582625972.jpeg', 1, 4, '2020-02-01 05:12:19', '2020-02-25 04:49:32', NULL),
(2, 'Sedan', 'Sedan', NULL, 1, 4, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(3, 'Mini van', 'Mini van', NULL, 1, 7, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(4, 'Saloon', 'Saloon', NULL, 1, 4, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(5, 'SUV', 'SUV', NULL, 1, 4, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(6, 'Bus', 'Bus', NULL, 1, 40, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(7, 'Truck', 'Truck', NULL, 1, 3, '2020-02-01 05:12:19', '2020-02-01 05:12:19', NULL),
(8, 'test type', 'test type', NULL, 0, 5, '2020-02-05 02:40:22', '2020-02-05 02:40:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `udf` text COLLATE utf8_unicode_ci,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `photo`, `type`, `website`, `custom_type`, `note`, `phone`, `address1`, `address2`, `city`, `province`, `email`, `deleted_at`, `created_at`, `updated_at`, `udf`, `country`, `postal_code`) VALUES
(1, 'Blanca Bednar', NULL, 'Parts', 'http://www.example.com', NULL, 'default vendor', '02859522270845', '47634 Roberts Causeway Suite 071\nLake Stone, AK 23558', NULL, 'Maribelbury', NULL, 'vdavis@example.net', NULL, '2020-02-01 05:12:20', '2020-02-01 05:12:20', NULL, NULL, NULL),
(2, 'Jedediah Tromp', NULL, 'Machinaries', 'http://www.example.com', NULL, 'default vendor', '01225343884716', '61861 Hirthe Green\nNorth Bria, NE 14336', NULL, 'Tadside', NULL, 'lorine12@example.net', NULL, '2020-02-01 05:12:20', '2020-02-01 05:12:20', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_on` date DEFAULT NULL,
  `required_by` date DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `meter` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_order_logs`
--

CREATE TABLE `work_order_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_on` date DEFAULT NULL,
  `required_by` date DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `meter` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parts_price` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_customer_id_index` (`customer_id`);

--
-- Indexes for table `api_settings`
--
ALTER TABLE `api_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `api_settings_key_name_index` (`key_name`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_customer_id_driver_id_vehicle_id_user_id_index` (`customer_id`,`driver_id`,`vehicle_id`,`user_id`),
  ADD KEY `bookings_payment_status_index` (`payment`,`status`);

--
-- Indexes for table `bookings_meta`
--
ALTER TABLE `bookings_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_meta_booking_id_index` (`booking_id`),
  ADD KEY `bookings_meta_key_index` (`key`);

--
-- Indexes for table `booking_income`
--
ALTER TABLE `booking_income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_income_booking_id_income_id_index` (`booking_id`,`income_id`);

--
-- Indexes for table `booking_payments`
--
ALTER TABLE `booking_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_quotation`
--
ALTER TABLE `booking_quotation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_quotation_customer_id_user_id_vehicle_id_driver_id_index` (`customer_id`,`user_id`,`vehicle_id`,`driver_id`),
  ADD KEY `booking_quotation_status_payment_index` (`status`,`payment`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_logs`
--
ALTER TABLE `driver_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_logs_driver_id_vehicle_id_index` (`driver_id`,`vehicle_id`);

--
-- Indexes for table `driver_vehicle`
--
ALTER TABLE `driver_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_vehicle_driver_id_vehicle_id_index` (`driver_id`,`vehicle_id`);

--
-- Indexes for table `email_content`
--
ALTER TABLE `email_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_content_key_index` (`key`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_vehicle_id_exp_id_user_id_expense_type_index` (`vehicle_id`,`exp_id`,`user_id`,`expense_type`),
  ADD KEY `expense_type_index` (`type`),
  ADD KEY `expense_date_index` (`date`);

--
-- Indexes for table `expense_cat`
--
ALTER TABLE `expense_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_cat_name_type_index` (`name`,`type`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fare_settings`
--
ALTER TABLE `fare_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fare_settings_key_name_index` (`key_name`),
  ADD KEY `fare_settings_type_id_index` (`type_id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frontend_key_name_index` (`key_name`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fuel_vehicle_id_user_id_index` (`vehicle_id`,`user_id`),
  ADD KEY `fuel_date_index` (`date`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_vehicle_id_income_id_user_id_income_cat_index` (`vehicle_id`,`income_id`,`user_id`,`income_cat`),
  ADD KEY `income_date_index` (`date`);

--
-- Indexes for table `income_cat`
--
ALTER TABLE `income_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_cat_name_type_index` (`name`,`type`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_vehicle_id_customer_id_index` (`vehicle_id`,`customer_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`),
  ADD KEY `notifications_type_index` (`type`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parts_category_id_user_id_availability_index` (`category_id`,`user_id`,`availability`);

--
-- Indexes for table `parts_category`
--
ALTER TABLE `parts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts_used`
--
ALTER TABLE `parts_used`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parts_used_part_id_work_id_index` (`part_id`,`work_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_settings_name_unique` (`name`);

--
-- Indexes for table `push_notification`
--
ALTER TABLE `push_notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `push_notification_user_id_index` (`user_id`),
  ADD KEY `push_notification_user_type_index` (`user_type`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_booking_id_driver_id_index` (`user_id`,`booking_id`,`driver_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_items`
--
ALTER TABLE `service_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_reminder`
--
ALTER TABLE `service_reminder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_reminder_vehicle_id_service_id_index` (`vehicle_id`,`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_name_unique` (`name`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_type_index` (`user_type`);

--
-- Indexes for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_meta_user_id_index` (`user_id`),
  ADD KEY `users_meta_key_index` (`key`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_group_id_type_id_user_id_in_service_index` (`group_id`,`type_id`,`user_id`,`in_service`),
  ADD KEY `vehicles_lic_exp_date_reg_exp_date_index` (`lic_exp_date`,`reg_exp_date`),
  ADD KEY `vehicles_license_plate_index` (`license_plate`);

--
-- Indexes for table `vehicles_meta`
--
ALTER TABLE `vehicles_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_meta_vehicle_id_index` (`vehicle_id`),
  ADD KEY `vehicles_meta_key_index` (`key`);

--
-- Indexes for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_demands`
--
ALTER TABLE `vehicle_demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_group`
--
ALTER TABLE `vehicle_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_make`
--
ALTER TABLE `vehicle_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_review`
--
ALTER TABLE `vehicle_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_review_vehicle_id_user_id_index` (`vehicle_id`,`user_id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendors_type_index` (`type`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_orders_vehicle_id_vendor_id_index` (`vehicle_id`,`vendor_id`),
  ADD KEY `work_orders_status_index` (`status`);

--
-- Indexes for table `work_order_logs`
--
ALTER TABLE `work_order_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_order_logs_vehicle_id_vendor_id_index` (`vehicle_id`,`vendor_id`),
  ADD KEY `work_order_logs_status_index` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `api_settings`
--
ALTER TABLE `api_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bookings_meta`
--
ALTER TABLE `bookings_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `booking_income`
--
ALTER TABLE `booking_income`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `booking_payments`
--
ALTER TABLE `booking_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `booking_quotation`
--
ALTER TABLE `booking_quotation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `driver_logs`
--
ALTER TABLE `driver_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `driver_vehicle`
--
ALTER TABLE `driver_vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `email_content`
--
ALTER TABLE `email_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `expense_cat`
--
ALTER TABLE `expense_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fare_settings`
--
ALTER TABLE `fare_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `income_cat`
--
ALTER TABLE `income_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parts_category`
--
ALTER TABLE `parts_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parts_used`
--
ALTER TABLE `parts_used`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `push_notification`
--
ALTER TABLE `push_notification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `service_items`
--
ALTER TABLE `service_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_reminder`
--
ALTER TABLE `service_reminder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users_meta`
--
ALTER TABLE `users_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `vehicles_meta`
--
ALTER TABLE `vehicles_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vehicle_demands`
--
ALTER TABLE `vehicle_demands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_group`
--
ALTER TABLE `vehicle_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_make`
--
ALTER TABLE `vehicle_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vehicle_review`
--
ALTER TABLE `vehicle_review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `work_order_logs`
--
ALTER TABLE `work_order_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
