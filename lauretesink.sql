-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lauretesink`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `mobileimage`, `image_alt`, `status`, `created_at`, `updated_at`) VALUES
(7, '1683196310_banner_45.jpg', '1683195702_banner_mobile_59.jpeg', 'test', 1, '2023-05-04 04:51:42', '2023-05-04 05:01:50'),
(8, '1683196365_banner_36.png', '1683196365_banner_mobile_21.webp', NULL, 1, '2023-05-04 05:02:45', '2023-05-04 05:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_image`, `blog_heading`, `blog_slug`, `blog_description`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, '1683176334_blog_79.jpg', 'Why is Lorem Ipsum?', 'why-is-lorem-ipsum', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'asdsddsad', 'SEO Description', 'SEO Keyword', '2023-05-03 23:28:54', '2023-05-03 23:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `created_at`, `updated_at`) VALUES
(14, '1682076559_brand_55.jpg', '2023-04-21 05:59:19', '2023-04-21 05:59:19'),
(15, '1682076560_brand_36.jpg', '2023-04-21 05:59:20', '2023-04-21 05:59:20'),
(16, '1682076560_brand_69.jpg', '2023-04-21 05:59:20', '2023-04-21 05:59:20'),
(17, '1682076560_brand_73.jpg', '2023-04-21 05:59:20', '2023-04-21 05:59:20'),
(18, '1682076561_brand_14.jpg', '2023-04-21 05:59:21', '2023-04-21 05:59:21'),
(19, '1682076561_brand_35.jpg', '2023-04-21 05:59:21', '2023-04-21 05:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_image`, `category_name`, `category_slug`, `category_description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(15, '1672566703_category_98.jpg', 'Stream Sanitation', 'stream-sanitation', NULL, NULL, NULL, NULL, 1, '2022-12-23 21:14:14', '2023-05-04 05:23:36'),
(16, '1672566655_category_57.jpg', 'Bathroom Accessories', 'bathroom-accessories', NULL, NULL, NULL, NULL, 1, '2022-12-23 21:19:11', '2023-05-04 05:23:33'),
(17, '1672566944_category_35.jpg', 'Enclosers', 'enclosers', NULL, NULL, NULL, NULL, 1, '2023-01-01 04:25:44', '2023-05-04 05:23:28'),
(18, '1672566972_category_75.jpg', 'Sink', 'sink', NULL, 'title2', 'desc2', 'keyword2', 1, '2023-01-01 04:26:12', '2023-05-04 05:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Anup', 'anupmishra509@gmail.com', '98989898989', 'This is testing message', '2023-04-27 02:30:17', '2023-04-27 02:30:17');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(3, 'When do I recive mu order ?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2023-04-24 03:44:12', '2023-04-24 03:44:12'),
(4, 'When do I recive mu order ?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2023-04-24 03:46:08', '2023-04-24 03:46:08'),
(5, 'What is your name?', '<p>My name is Anup Mishra</p>', '2023-04-24 03:46:08', '2023-04-24 03:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(12, '1681969795_gallery_95.png', '2023-04-20 00:19:55', '2023-04-20 00:19:55'),
(13, '1681969795_gallery_86.png', '2023-04-20 00:19:55', '2023-04-20 00:19:55'),
(14, '1681969796_gallery_61.jpg', '2023-04-20 00:19:56', '2023-04-20 00:19:56'),
(15, '1681969796_gallery_95.jpg', '2023-04-20 00:19:56', '2023-04-20 00:19:56');

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
(5, '2022_12_09_083541_create_banners_table', 2),
(7, '2022_12_11_113134_create_categories_table', 3),
(8, '2022_12_14_060518_create_products_table', 4),
(9, '2023_04_19_052407_create_blogs_table', 5),
(10, '2023_04_20_045926_create_galleries_table', 6),
(11, '2023_04_20_063917_create_videos_table', 7),
(12, '2023_04_20_114246_create_video_categories_table', 8),
(13, '2023_04_21_110116_create_brands_table', 9),
(14, '2023_04_24_075521_create_faqs_table', 10),
(15, '2023_04_24_093058_create_sub_categories_table', 11),
(16, '2023_04_26_085652_create_order_details_table', 12),
(17, '2023_04_27_055741_create_static_pages_table', 13),
(18, '2023_04_27_075453_create_contacts_table', 14),
(19, '2023_04_27_091306_create_subscribes_table', 15),
(20, '2023_04_27_102654_create_reviews_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `product_name`, `product_price`, `product_size`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 26, 'Product Name13', '23', 'Pkt-657', 'Anup', 'anupmishra509@gmail.com', '8178268020', 'This is testing', '2023-04-26 05:44:40', '2023-04-26 05:44:40'),
(2, 26, 'Product Name13', '23', 'Pkt-657', 'vcbvcb', 'test@gmail.com', '676767', 'fghfgh', '2023-04-26 05:45:37', '2023-04-26 05:45:37');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranding_product` tinyint(4) NOT NULL DEFAULT 0,
  `new_design` tinyint(4) NOT NULL DEFAULT 0,
  `offer_product` tinyint(4) NOT NULL DEFAULT 0,
  `product_size` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_unit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hover_image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_decription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `product_name`, `product_slug`, `product_image`, `selling_price`, `original_price`, `quantity`, `short_description`, `long_description`, `tranding_product`, `new_design`, `offer_product`, `product_size`, `product_unit`, `product_position`, `hover_image`, `youtube_link`, `product_document`, `meta_title`, `meta_decription`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(21, 15, NULL, 'HMS2118', 'hms2118', '1673538776_product_41.jpg', '9400', '10000', 10, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p><p><strong>Technical Information</strong></p><ul><li><strong>Model No : </strong>JD 2720 &nbsp;</li><li><strong>Overall Size (Inch/mm) : </strong>27x15x8/620x375x210</li><li><strong>Bowl Size (Inch/mm) : </strong>24x15x8/620/375x210</li><li><strong>Cabinet Size : </strong>80cm</li><li><strong>Thickness</strong> : 1.0mm</li><li><strong>Finish</strong> : Iternational &nbsp;Stain Finish</li></ul>', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-23 22:50:03', '2023-05-04 05:31:42'),
(22, 15, NULL, 'HMS 2118', 'hms-2118', '1673539129_product_86.jpg', '9500', '10000', 10, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p><p><strong>Technical Information</strong></p><ul><li><strong>Model No : </strong>JD 2720 &nbsp;</li><li><strong>Overall Size (Inch/mm) : </strong>27x15x8/620x375x210</li><li><strong>Bowl Size (Inch/mm) : </strong>24x15x8/620/375x210</li><li><strong>Cabinet Size : </strong>80cm</li><li><strong>Thickness</strong> : 1.0mm</li><li><strong>Finish</strong> : Iternational &nbsp;Stain Finish</li></ul>', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-12 10:28:49', '2023-05-04 05:31:52'),
(23, 15, NULL, 'HMS 2418', 'hms-2418', '1673539416_product_37.jpg', '9600', '12000', 10, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p><p><strong>Technical Information</strong></p><ul><li><strong>Model No : </strong>JD 2720 &nbsp;</li><li><strong>Overall Size (Inch/mm) : </strong>27x15x8/620x375x210</li><li><strong>Bowl Size (Inch/mm) : </strong>24x15x8/620/375x210</li><li><strong>Cabinet Size : </strong>80cm</li><li><strong>Thickness</strong> : 1.0mm</li><li><strong>Finish</strong> : Iternational &nbsp;Stain Finish</li></ul>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-12 10:33:36', '2023-05-04 05:32:04'),
(24, 15, NULL, 'SPICE', 'spice', '1673540487_product_23.jpg', '2470', '3000', 10, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p><p><strong>Technical Information</strong></p><ul><li><strong>Model No : </strong>JD 2720 &nbsp;</li><li><strong>Overall Size (Inch/mm) : </strong>27x15x8/620x375x210</li><li><strong>Bowl Size (Inch/mm) : </strong>24x15x8/620/375x210</li><li><strong>Cabinet Size : </strong>80cm</li><li><strong>Thickness</strong> : 1.0mm</li><li><strong>Finish</strong> : Iternational &nbsp;Stain Finish</li></ul>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-12 10:51:27', '2023-05-04 05:32:15'),
(25, 17, 11, 'OPEL', 'opel', '1673540722_product_83.jpg', '4210', '5000', 10, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p><p><strong>Technical Information</strong></p><ul><li><strong>Model No : </strong>JD 2720 &nbsp;</li><li><strong>Overall Size (Inch/mm) : </strong>27x15x8/620x375x210</li><li><strong>Bowl Size (Inch/mm) : </strong>24x15x8/620/375x210</li><li><strong>Cabinet Size : </strong>80cm</li><li><strong>Thickness</strong> : 1.0mm</li><li><strong>Finish</strong> : Iternational &nbsp;Stain Finish</li></ul>', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-12 10:55:22', '2023-05-04 05:32:48'),
(26, 15, 4, 'Product Name13', 'product-name13', '1682488274_product_93.jpg', '23', '324', 56, '<p>fghfghdfg123</p>', '<p>gfhg</p>', 1, 1, 1, '657', 'Pkt', '54', '1682398599_product_hover_48.gif', 'https://www.youtube.com/embed/8hZZWkov1Ps', NULL, 'fgh', 'fgh', 'fgh', 1, '2023-04-24 23:26:39', '2023-05-04 05:31:23'),
(27, 15, 4, 'sdf  sdfdsf', 'sdf-sdfdsf', '1682488298_product_81.jpg', '2340', '3240', 33, '<p>sdf</p>', '<p>sdf</p>', 1, 1, 1, '23', 'Pkt', '33', '1682401866_product_hover_90.gif', 'vxc', NULL, 'xcv', 'xcv', 'xcv', 1, '2023-04-25 00:21:06', '2023-04-26 00:21:38'),
(28, 16, 4, 'Product Name1', 'product-name1', '1682401999_product_7.jpg', '23', '45', 23, '<p>dsf</p>', '<p>sdf</p>', 1, 0, 0, '657', 'Pkt', '12', '1682401999_product_hover_14.gif', 'sdf', NULL, 'sdf', 'sdf', 'sdf', 1, '2023-04-25 00:23:19', '2023-05-04 05:31:16'),
(29, 15, 4, 'Product Name', 'product-name', '1682402634_product_97.jpg', '43', '43', 34, '<p>cv</p>', '<p>cv</p>', 0, 1, 0, '3', 'Pkt', '34', '1682402634_product_hover_78.gif', 'vc', NULL, 'cv', 'vc', 'vc', 1, '2023-04-25 00:33:54', '2023-05-04 05:31:12'),
(30, 15, 4, 'Product Name', 'product-name-2', '1682402707_product_35.jpg', '23', '324', 34, '<p>dx</p>', '<p>ds</p>', 1, 1, 0, '54', 'Pkt', '34', '1682402707_product_hover_34.gif', 'dsf', NULL, 'ds', 'dsf', 'dsf', 1, '2023-04-25 00:35:07', '2023-04-25 00:39:35'),
(31, 15, 4, 'uty', 'uty', '1682488234_product_21.jpg', '45', '45', 65, '<p>yu</p>', '<p>tyu</p>', 0, 1, 1, '45', 'Inches', '54', '1682408381_product_hover_6.gif', 'tyu', NULL, 'tyu', 'ytu', 'yu', 1, '2023-04-25 02:09:41', '2023-04-26 00:20:34'),
(32, 15, 4, 'fhfgh', 'fhfgh', '1682408605_product_43.jpg', '34', '345', 43, '<p>fgh</p>', '<p>fgh</p>', 1, 1, 0, '32', 'Pkt', '43', '1682408605_product_hover_79.gif', 'fgh', NULL, 'fgh', 'fgh', 'gfh', 1, '2023-04-25 02:13:25', '2023-05-04 05:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `client_image`, `client_name`, `client_review`, `client_rating`, `status`, `created_at`, `updated_at`) VALUES
(1, '1682594903_review_88.jpg', 'Nikita', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '5', 1, '2023-04-27 05:24:34', '2023-04-27 05:58:23'),
(2, '1682594392_review_56.jpg', 'Ntasha', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '4', 1, '2023-04-27 05:25:49', '2023-04-27 05:59:48'),
(3, '1682594897_review_94.jpg', 'Neil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '3', 1, '2023-04-27 05:26:16', '2023-04-27 05:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`id`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Announcement', 'Free Shipping, now over ₹499 only!11', '2023-04-27 01:40:09', '2023-04-27 01:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'aa@aa.aa', '2023-04-27 03:53:35', '2023-04-27 03:53:35'),
(4, 'anup@aa.aa', '2023-04-27 04:41:34', '2023-04-27 04:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(4) DEFAULT NULL,
  `sub_category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_image`, `sub_category_name`, `sub_category_slug`, `sub_category_description`, `sub_meta_title`, `sub_meta_desc`, `sub_meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(4, 15, '1682410136_sub_category_82.gif', 'dgfdg1', 'dgfdg1', 'dgdg', 'dfg1', 'dfgdf', 'g', 1, '2023-04-24 23:43:59', '2023-04-25 02:38:56'),
(6, 15, '1682413056_sub_category_10.jpg', 'sdgddgdg', 'sdgddgdg', 'dfdgssadasda', 'asdadadadasd', 'asgdgddg', 'dfdgdfdf', 1, '2023-04-25 03:27:36', '2023-04-25 03:27:36'),
(7, 15, '1682413074_sub_category_4.jpg', 'sdgdgsdgs', 'sdgdgsdgs', 'dgsgsdgsdd', 'sdfgsdfg', 'sdfsasdf', 'sadfsadfsafd', 1, '2023-04-25 03:27:54', '2023-04-25 03:27:54'),
(8, 16, '1682413091_sub_category_6.jpg', 'sdfhsdg', 'sdfhsdg', 'sdfgsdg', 'sdgsd', 'gdf', 'sdfgg', 1, '2023-04-25 03:28:11', '2023-04-25 03:28:11'),
(9, 16, '1682413105_sub_category_74.jpg', 'sdgsd', 'sdgsd', 'gsdgsdhfdhdh', 'ffghfd', 'hfdh', 'hfdghh', 1, '2023-04-25 03:28:25', '2023-04-25 03:28:25'),
(10, 17, '1682413124_sub_category_95.jpg', 'dfgdfhsdasd', 'dfgdfhsdasd', 'afasfsaasfdsad', 'dgdhdfgsd', 'gsdgsdsadf', 'safdsafdsafd', 1, '2023-04-25 03:28:44', '2023-04-25 03:28:44'),
(11, 17, '1682413142_sub_category_58.jpg', 'dsfsdsdfh', 'dsfsdsdfh', 'sdfhfdggsadsd', 'sadsadfsdasad', 'sadsadggdfd', 'sadsadfsadf', 1, '2023-04-25 03:29:02', '2023-04-25 03:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$4o/fycSjzByip36JmBCmw.erVXf.Hnk4m3/h2xK2.M6vr6AKq4gxu', 'admin', NULL, '2022-12-01 23:38:02', '2022-12-01 23:38:02'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$yzORpjiyPvxmTp.vpySWF..02aFAlG3CIBBXDWbN3AUZFqipbSBH6', 'user', NULL, '2022-12-01 23:43:15', '2022-12-01 23:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_url`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/embed/fhyfe383HCc', 4, '2023-04-20 03:36:22', '2023-04-20 03:36:22'),
(4, 'https://www.youtube.com/embed/fhyfe383HCc', 3, '2023-04-20 03:36:22', '2023-04-20 03:36:22'),
(5, 'https://www.youtube.com/embed/fhyfe383HCc', 3, '2023-04-20 03:36:54', '2023-04-20 03:36:54'),
(6, 'https://www.youtube.com/embed/fhyfe383HCc', 4, '2023-04-20 03:36:57', '2023-04-20 03:36:57'),
(7, 'https://www.youtube.com/embed/fhyfe383HCc', 4, '2023-04-20 03:37:01', '2023-04-20 03:37:01'),
(8, 'https://www.youtube.com/embed/fhyfe383HCc', 3, '2023-04-20 03:37:06', '2023-04-20 03:37:06'),
(9, 'https://www.youtube.com/embed/oRDRfikj2z8', 5, '2023-04-20 03:37:51', '2023-04-20 03:37:51'),
(10, 'https://www.youtube.com/embed/CA6Mofzh7jo', 5, '2023-04-20 03:38:20', '2023-04-20 03:38:20'),
(11, 'https://www.youtube.com/embed/8jxRn-T_LCs', 4, '2023-04-20 03:39:17', '2023-04-20 03:39:17'),
(13, NULL, NULL, '2023-04-24 03:01:33', '2023-04-24 03:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `video_category_name`, `created_at`, `updated_at`) VALUES
(3, 'Bathroom', '2023-04-21 04:30:08', '2023-04-21 04:30:08'),
(4, 'Living Room', '2023-04-21 04:30:21', '2023-04-21 04:30:21'),
(5, 'Bedroom', '2023-04-21 04:30:29', '2023-04-21 04:30:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
