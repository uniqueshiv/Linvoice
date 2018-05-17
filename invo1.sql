-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2018 at 06:41 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profileimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `customer_id`, `customer_name`, `customer_address`, `customer_email`, `gst`, `profileimg`, `description`, `mobile_no`, `created_at`, `updated_at`) VALUES
(30, '2a074c72-6fba-11e6-8973-408d5c222069', 'f8dec03a-68d6-4a7c-b7cb-6ca732343736', 'Bambino Agro Industries Ltd', 'Sec-35, I A Vill Begumpur N.H 8,\nGurgaon, State:- Haryana \nState Code:-06', NULL, '06AAACB4321N1ZU', 'default.jpg', 'Bambino Agro Industries Ltd', '9421163891', '2017-07-19 17:53:12', '2017-07-27 12:11:58'),
(31, '2a074c72-6fba-11e6-8973-408d5c222069', '433c3470-b5a7-44a7-abab-e94370bb9c4a', 'SFC Foods Pvt Ltd', 'Plot 12, Sec-3, IIE, Pant Nagar\nRudrapur, distt-U.S.Nagar,\nState:- Uttrakhand\nState Code:- 05\n', NULL, '05ADGPJ5377E1ZM', 'default.jpg', 'M/s SFC Foods Pvt Ltd', '9811125404', '2017-07-21 13:47:39', '2017-07-24 14:37:29'),
(32, '2a074c72-6fba-11e6-8973-408d5c222069', '615c8075-8cad-4e8d-bc57-6bf7fe0be0fd', 'Punky Foods', 'Plot No-2052, A Tagore Garden\nNarian Garh Road, Ambala City\nState:- Haryana\nState Code:06 ', NULL, '06CRSPK4487L2ZV', 'default.jpg', 'M/s Punky Foods', '123456789', '2017-07-24 14:10:20', '2017-07-24 14:10:20'),
(33, '2a074c72-6fba-11e6-8973-408d5c222069', 'b0907cfe-5ac9-4390-a10d-374f268b615e', 'Vipin Kala Namak Factory', 'B-25, Govindpuri, Modinagar\nGhaziabad\nState:- Uttar Pradesh\nState Code:- 09\n', NULL, '09AABCV3720G1ZH', 'default.jpg', 'M/s Vipin Kala Namak Factory', '234567891', '2017-07-24 14:30:42', '2017-07-24 14:30:42'),
(34, '2a074c72-6fba-11e6-8973-408d5c222069', 'ae181565-5c3d-4f14-91d5-8301387706a8', 'BEHL Roller Flour Mills', 'Faridkot Road Guru Har Sahai\nDist:- Firozpur,\nState:- Punjab,\nState Code:-03', NULL, '03AAOFB1448H1ZN', 'default.jpg', 'BEHL ROLLER FLOUR MILLS', '345678921', '2017-07-24 19:26:38', '2017-07-24 19:59:56'),
(36, '2a074c72-6fba-11e6-8973-408d5c222069', 'e17672ed-c022-4215-b52d-9baf64e7a00a', 'Mona Lime Tube Traders', 'Soron Gate, Kasganj\nState:- Uttar Pradesh\nState Code:- 09 ', NULL, '09AGOPA8512B1ZO', 'default.jpg', 'M/S MONA LIME TUBE TRADERS', '', '2017-07-27 12:18:00', '2017-07-27 12:18:00'),
(100, '2a074c72-6fba-11e6-8973-408d5c222069', '5762829d-2d74-4e6e-9051-04afbf6b2c63', 'Gaurav Tiwari', 'E-54 Dilshad Garden New Delhi 1100086', 'gaurav@hotmail.com', 'LKH56886558', 'default.jpg', 'MK Infort Ltd.', '7838889991', '2017-07-27 18:41:04', '2017-07-27 18:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d_d_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_id`, `user_id`, `vendor_name`, `amount`, `mode`, `remarks`, `check_no`, `d_d_no`, `created_at`, `updated_at`) VALUES
(18, '67396525-f9bc-47f0-8179-991302cf4cab', '2a074c72-6fba-11e6-8973-408d5c222069', 'Shiv', '21.00', 'Cheque', 'Golu Pay', '765865979', NULL, '2017-07-27 15:57:33', '2017-07-27 15:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transmode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `veh_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_of_sup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_sup` datetime NOT NULL,
  `invoice_date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_total` decimal(8,2) NOT NULL,
  `fcharges` decimal(8,2) NOT NULL,
  `lpcharges` decimal(8,2) NOT NULL,
  `insurcharges` decimal(8,2) NOT NULL,
  `other` decimal(8,2) NOT NULL,
  `grand_total` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `tax_other` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numinwords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taxinwords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `invoice_id`, `invoice_no`, `transmode`, `veh_no`, `p_of_sup`, `date_of_sup`, `invoice_date`, `title`, `client_id`, `sub_total`, `fcharges`, `lpcharges`, `insurcharges`, `other`, `grand_total`, `tax`, `tax_other`, `numinwords`, `taxinwords`, `created_at`, `updated_at`) VALUES
(88, '2a074c72-6fba-11e6-8973-408d5c222069', 'f310ac14-48d9-42e7-8f64-9f257fd086c2', 'OCE-0022', 'Yadav Transport', 'DL 1 LQ 9561', 'Sahibabad', '2017-07-19 10:55:00', '2017-07-19 10:55:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', 'f8dec03a-68d6-4a7c-b7cb-6ca732343736', '157853.00', '0.00', '0.00', '0.00', '0.00', '186267.00', '18.00', '', 'One Lakh Eighty Six Thousand Two Hundred and Sixty Seven only ', 'Twenty Eight Thousand Four Hundred and Fourteen only ', '2017-07-19 17:59:01', '2017-07-19 17:59:01'),
(89, '2a074c72-6fba-11e6-8973-408d5c222069', '69fdc571-fd4d-4516-8945-1c23bddbf90c', 'OCE-0023', 'Yadav Transport', 'DL 1 LU 0984', 'Sahibabad', '2017-07-20 11:15:00', '2017-07-20 11:50:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', 'f8dec03a-68d6-4a7c-b7cb-6ca732343736', '139820.00', '0.00', '0.00', '0.00', '0.00', '164988.00', '18.00', '', 'One Lakh Sixty Four Thousand Nine Hundred and Eighty Eight only ', 'Twenty Five Thousand One Hundred and Sixty Eight only ', '2017-07-20 13:51:58', '2017-07-20 13:51:58'),
(92, '2a074c72-6fba-11e6-8973-408d5c222069', 'a85cd6ba-5c72-477e-98fb-146ebd4cfa4b', 'OCE-0024', 'Yadav Transport', 'DL 1 LQ 9561', 'Sahibabad', '2017-07-20 11:15:00', '2017-07-20 10:55:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', 'f8dec03a-68d6-4a7c-b7cb-6ca732343736', '184990.00', '0.00', '0.00', '0.00', '0.00', '218288.00', '18.00', '', 'Two Lakh Eighteen Thousand Two Hundred and Ninety only ', 'Thirty Three Thousand Two Hundred and Ninety Nine only ', '2017-07-20 17:50:03', '2017-07-20 17:50:03'),
(94, '2a074c72-6fba-11e6-8973-408d5c222069', 'cb45448e-2007-4035-9d2a-c23f5c0fe708', 'OCE-0025', 'Mishra Transport', 'DL 1 LY 1189', 'Sahibabad', '2017-07-22 18:25:00', '2017-07-22 18:05:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', '615c8075-8cad-4e8d-bc57-6bf7fe0be0fd', '349881.00', '0.00', '0.00', '0.00', '0.00', '412860.00', '18.00', '', 'Four Lakh Twelve Thousand Eight Hundred and Sixty One only ', 'Sixty Two Thousand Nine Hundred and Seventy Nine only ', '2017-07-24 14:13:53', '2017-07-24 14:13:53'),
(126, '2a074c72-6fba-11e6-8973-408d5c222069', 'bef9a3c9-bce3-4bf1-83b5-15751816c8b0', 'OCE-0026', 'Car', '8856695', 'New Delhi', '2017-07-28 01:00:00', '2017-07-28 18:00:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', '5762829d-2d74-4e6e-9051-04afbf6b2c63', '90.00', '3.00', '0.00', '2.00', '5.00', '106.00', '9.00', '', 'One Hundred and Six only ', 'Sixteen only ', '2017-07-27 18:44:53', '2017-07-27 18:55:35'),
(127, '2a074c72-6fba-11e6-8973-408d5c222069', '073ca3a1-2635-4490-ba0c-955bd3695f0b', 'OCE-0027', 'asdf', 'asdf', 'asdf', '2017-07-26 17:50:00', '2017-07-13 10:50:00', 'Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.', 'ae181565-5c3d-4f14-91d5-8301387706a8', '145.00', '34.00', '0.00', '34.00', '43.00', '171.00', '9.00', '', 'One Hundred and Seventy One only ', 'Twenty Seven only ', '2017-07-27 18:58:47', '2017-07-27 18:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `package` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hsn_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice_products`
--

INSERT INTO `invoice_products` (`id`, `invoice_id`, `name`, `qty`, `price`, `package`, `unit`, `hsn_code`, `total`, `created_at`, `updated_at`) VALUES
(242, 'f310ac14-48d9-42e7-8f64-9f257fd086c2', 'Printed Flexible Laminated Sheet in Roll Form (Roasted Vermicelli 500gm)', '986.58', '160.00', '50', 'kg', '39203090', '157852.80', '2017-07-19 17:59:01', NULL),
(243, '69fdc571-fd4d-4516-8945-1c23bddbf90c', 'Printed Flexible Laminated Sheet in Roll Form (Roasted Vermicelli 500gm)', '873.87', '160.00', '44', 'kg', '39203090', '139819.20', '2017-07-20 13:51:58', NULL),
(246, 'a85cd6ba-5c72-477e-98fb-146ebd4cfa4b', 'Printed Flexible Laminated Sheet in Roll Form (Mac-250gm)', '1134.91', '163.00', '58', 'kg', '39203090', '184990.33', '2017-07-20 17:50:03', NULL),
(248, 'cb45448e-2007-4035-9d2a-c23f5c0fe708', 'Printed Flexible Laminated Sheet in Roll Form', '1876.04', '186.50', '96 Nag', 'KG', '39203090', '349881.46', '2017-07-24 14:13:53', NULL),
(301, 'bef9a3c9-bce3-4bf1-83b5-15751816c8b0', 'Printed Flexible Laminated Sheet in Pouch Form', '2.00', '10.00', '23lk', 'Ltrs', '39231090', '20.00', NULL, '2017-07-27 18:55:35'),
(302, 'bef9a3c9-bce3-4bf1-83b5-15751816c8b0', 'Printed Flexible Laminated Sheet in Roll Form', '1.00', '50.00', 't5', 'kg', '39203090', '50.00', NULL, '2017-07-27 18:55:35'),
(303, 'bef9a3c9-bce3-4bf1-83b5-15751816c8b0', 'Scrap', '1.00', '10.00', 'mk8', 'ltr', '39151000', '10.00', NULL, '2017-07-27 18:55:35'),
(304, '073ca3a1-2635-4490-ba0c-955bd3695f0b', 'Printed Flexible Laminated Sheet in Pouch Form (ssasdfasdfasdfasdfadsfs)', '1.00', '34.00', 'sdfasdf', 'asdfa', '39231090', '34.00', '2017-07-27 18:58:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_09_094156_entrust_setup_tables', 1),
('2016_08_13_064110_create_customers_table', 1),
('2016_08_16_114137_create_invoices_table', 1),
('2016_08_16_114229_create_invoice_products_table', 1),
('2016_08_22_084314_create_payments_table', 1),
('2016_08_23_060527_create_taxes_table', 1),
('2016_08_25_080125_create_expenses_table', 1),
('2017_07_06_173958_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviews` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` date NOT NULL,
  `totalpayment` decimal(8,2) NOT NULL,
  `d_d_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cheque_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hsn_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `hsn_code`) VALUES
(1, '2a074c72-6fba-11e6-8973-408d5c222069', 'Printed Flexible Laminated Sheet in Roll Form', '39203090'),
(2, '2a074c72-6fba-11e6-8973-408d5c222069', 'Printed Flexible Laminated Sheet in Pouch Form', '39231090'),
(3, '2a074c72-6fba-11e6-8973-408d5c222069', 'Scrap', '39151000'),
(4, '2a074c72-6fba-11e6-8973-408d5c222069', 'aswersd', 'asdfw3er'),
(5, '2a074c72-6fba-11e6-8973-408d5c222069', 'sdfa asdfa sdf', 'asdf343'),
(6, '2a074c72-6fba-11e6-8973-408d5c222069', '345sfa', 'fasdfe'),
(7, '2a074c72-6fba-11e6-8973-408d5c222069', 'asd4tsdf adsf', 'asdfa '),
(8, '2a074c72-6fba-11e6-8973-408d5c222069', 'heeee', 'aase332'),
(9, '2a074c72-6fba-11e6-8973-408d5c222069', 'asdfa', 'asdfasd');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'Administration', '2017-07-08 00:28:08', NULL),
(2, 'Client', 'Client', 'Client Services', '2017-07-08 00:28:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipdetails`
--

CREATE TABLE `shipdetails` (
  `shipaddress` varchar(255) NOT NULL,
  `invoice_id` varchar(250) NOT NULL,
  `shipname` varchar(200) NOT NULL,
  `shipcontact` varchar(200) NOT NULL,
  `gst` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipdetails`
--

INSERT INTO `shipdetails` (`shipaddress`, `invoice_id`, `shipname`, `shipcontact`, `gst`) VALUES
('Sec-35, IA Vill, Begumpur, N.H-8, Gurgaon, Haryana', '8d575985-2f75-4cbf-8492-4dc02996d3e7', 'Bambino Agro1', '9868383601', ''),
('fsdfsdf1', '53fffc0d-8d87-4589-8528-ac6bb87c275d', 'ffsdf1', '12313312', ''),
('E-45 New Delhi Delhi', '1fe27cc1-d152-4b3f-8a99-dd0d393bfa65', 'Golu Kumar', '991838558888', ''),
('E-46 Rajiv Nagar Ext. Delhi', '50fc6706-f42c-4984-9ba5-7b77f4e98342', 'Gaurav', '966858525', ''),
('E-44 New Delhi India', '0d554d2e-d7a6-437e-aee1-5bfe79354912', 'vishal sharma', '991835855555', ''),
('E-12 Mangolpuri Delhi', '491abb0c-536d-4af9-9d69-f345600da834', 'shiv', '8964645754', ''),
('Sec-35, IA Vill, Begumpur, N.H-8, Gurgaon, Haryana', 'b63b1bb3-bc31-4a67-a8ca-3a80d232ceb2', 'Bambino Agro', '9868383603', ''),
('jhk', 'bd29dfed-5cbe-4859-97c8-8a8d20036ec1', 'jhgj', 'sdfgsd', ''),
('Faridkot Road Guru Har Sahai\nDist:- Firozpur\nState:- Punjab\nState Code:-03', 'dbfdb49f-db83-4691-b6e9-423eef505c65', 'BEHL Roller Flour Mills', '345678921', ''),
('Bambino Agro Industries Ltd', '676eb79c-5ae9-4bf6-9c17-a99099c75f6c', 'Vipin Kala Namak Factory', '', 'gst'),
('wer', 'awerqer', 'weqr', 'qwer', 'qwer'),
('wert', '979ee0a4-f703-47d6-9d62-8a82320b68ed', 'wrtt', '3245234', 'erqwerqwer'),
('E-44 New Delhi India', 'd099a0ab-8495-4e85-a494-976f6d29ac43', 'Rohit Rana', '9885885555', '9994565666'),
('E-44 Begampur New Delhi India', 'cf37b1b6-144b-44a5-a938-bea70ea31898', 'Ratnesh Kumar Mishra', '998858778995', '6534765486598799'),
('sdfasdfa', '11259357-d376-4c0d-8953-2a655120e2d2', 'asdfasda', 'sdf345345', 'asdfasdfasdf'),
('E-52 Rajiv Nagar Ext. New Delhi India', '145b9f64-31d3-4cc5-a1c0-5fdf9ecdf34d', 'Rahul Shukla', '9855822633', '85896857847451'),
('E-52 Rajiv Nagar Ext. New Delhi India', 'a92c4d76-582f-4b6a-a2a8-fff1f6676cae', 'Rahul Shukla', '9855822633', '85896857847451'),
('aaaaaaaaaaaaa', '59bdc85b-bf90-4f0b-b684-2622039f037c', 'aaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa'),
('aaaaaaaaaaaaaa', '006dfed7-ee5a-4c74-a49f-70b8f3ee43d3', 'aaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa'),
('E-46 Mangolpuri New Delhi India', '963ef753-ac1f-47c1-8bd1-8ef3b13cfb27', 'Parash Mishra', '985558555', ''),
('E-10 Newfriends Colony New Delhi India', 'bef9a3c9-bce3-4bf1-83b5-15751816c8b0', 'Gaurav Gupta ji', '7838889910', '8987888999ra'),
('asdfasdf', 'aea8a424-8d98-423d-b9cd-2d88e37a18e0', 'vivek', 'asdfasdf', '53sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `user_id`, `tax`, `created_at`, `updated_at`) VALUES
(1, 'CGST', '2a074c72-6fba-11e6-8973-408d5c222069', '9.00', '2017-07-10 12:54:56', '2017-07-10 12:54:56'),
(2, 'SGST', '2a074c72-6fba-11e6-8973-408d5c222069', '9.00', '2017-07-10 12:55:11', '2017-07-10 12:55:11'),
(3, 'IGST', '2a074c72-6fba-11e6-8973-408d5c222069', '18.00', '2017-07-10 12:57:46', '2017-07-10 12:57:46'),
(4, 'CGST+SGST', '3c3e081f-0b60-45bf-a9aa-c02b279f83fe', '18.00', NULL, NULL),
(5, 'IGST', '3c3e081f-0b60-45bf-a9aa-c02b279f83fe', '18.00', NULL, NULL),
(6, 'CGST+SGST', '25563287-aecc-4e52-ad41-b1465a8f4648', '18.00', NULL, NULL),
(7, 'IGST', '25563287-aecc-4e52-ad41-b1465a8f4648', '18.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commissionerate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pannumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bankname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beneficiarynum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beneficiaryifsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beneficiaryswift` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `name`, `address`, `mobile`, `cin`, `commissionerate`, `gst`, `pannumber`, `logo`, `email`, `password`, `bankname`, `beneficiarynum`, `beneficiary_name`, `beneficiaryifsc`, `beneficiaryswift`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2a074c72-6fba-11e6-8993-408d5c225069', 'Admin', 'Test Address', '1234567890', '', '', '', '', 'default.png', 'admin@admin.com', '$2y$10$bgKVBFj8suDdTQb2CqiOeeLi4okurfvy6O3wJWMfd8VmFdLwS6ERa', '', '', '', '', '', 'qi5jsMMapll0TFok9vyQeEJfL7PUZ7T3VTdhzU8whYPVjkP0AcH9ys9R8PT2', '2017-07-08 00:28:08', '2017-07-28 18:15:33'),
(2, '2a074c72-6fba-11e6-8973-408d5c222069', 'Oceanic Laminators Pvt Ltd', 'Plot No. MS-4, SITE-IV, Thana Ring Road, Industrial Area Sahibabad, Ghaziabad', '0120-4268296', 'U65929DL1990PTC039984', 'Ghaziabad', '09AAACO0211E1Z5', '---', 'oceanic.png', 'paltani49@gmail.com', '$2y$10$bgKVBFj8suDdTQb2CqiOeeLi4okurfvy6O3wJWMfd8VmFdLwS6ERa', 'ICICI Bank ', '---', 'Beneficiar Name', 'ICIC0001254', '--', 'FIHUsUagYjmhzy8yaBgUZk5CGnOCWAKO9XvFWtw9WFzM9aqw5mtn9rYHvn2l', '2017-07-08 00:28:08', '2017-07-31 19:19:49'),
(3, '3c3e081f-0b60-45bf-a9aa-c02b279f83fe', 'shiv', 'Delhi', '987345344', '345sdf', 'asdfasd', 'asdf345', '345345sdf', 'default.png', 'shiv@gmail.com', '$2y$10$m/hhsFAGwZwr2sauSkhDWeCbAAA/VxpBFcwmVx45NgaOD0hSPWLHe', 'shiva', '934875934534', 'Shiva', 'ASDFA345', '', NULL, '2017-07-28 17:54:56', '2017-07-28 17:54:56'),
(4, '25563287-aecc-4e52-ad41-b1465a8f4648', 'webninjaz', 'adress', '9878656', 'cin989889', 'commissionarate', 'kjhiuh7878', 'pan98798', 'default.png', 'paltani@gmail.com', '$2y$10$7weRNb5eIZjoRU/9CYDpn.K8ezCtjz.Ry39aSaXnXMb1AXktkTt1m', 'icici', '9879898798798', 'name', 'IFSC', 'sawift', NULL, '2017-07-28 18:02:40', '2017-07-28 18:02:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_customer_id_unique` (`customer_id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_id_unique` (`invoice_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_client_id_foreign` (`client_id`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_products_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_payment_id_unique` (`payment_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_invoice_id_foreign` (`invoice_id`),
  ADD KEY `payments_client_id_foreign` (`client_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `shipdetails`
--
ALTER TABLE `shipdetails`
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxes_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_userid_unique` (`userid`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD CONSTRAINT `invoice_products_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taxes`
--
ALTER TABLE `taxes`
  ADD CONSTRAINT `taxes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
