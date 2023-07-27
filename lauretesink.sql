-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:41 AM
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
(11, '1690009762_banner_97.jpg', '1690009844_banner_mobile_30.jpg', 'Single Bowl Sink', 1, '2023-05-11 10:23:55', '2023-07-22 01:40:44'),
(12, '1690009769_banner_89.jpg', '1690009854_banner_mobile_89.jpg', NULL, 1, '2023-07-22 01:39:29', '2023-07-22 01:40:54');

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
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` tinyint(4) NOT NULL DEFAULT 0,
  `tranding_product` tinyint(4) NOT NULL DEFAULT 0,
  `new_design` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_image`, `blog_heading`, `blog_slug`, `blog_description`, `meta_title`, `meta_description`, `meta_keyword`, `user_image`, `user_name`, `user_description`, `category`, `tranding_product`, `new_design`, `created_at`, `updated_at`) VALUES
(1, '1683176334_blog_79.jpg', 'Why is Lorem Ipsum?', 'why-is-lorem-ipsum', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'asdsddsad', 'SEO Description', 'SEO Keyword', NULL, NULL, NULL, 0, 0, 0, '2023-05-03 23:28:54', '2023-05-03 23:35:35'),
(3, '1683695822_blog_39.jpg', 'How to make a variant delicious penne pasta', 'how-to-make-a-variant-delicious-penne-pasta', '<p>How to make a variant delicious penne pasta</p><p>How to make a variant delicious penne pasta</p><p>How to make a variant delicious penne pasta</p><p>How to make a variant delicious penne pasta</p>', 'sad', 'dsfsdf', 'dsf', '1683695822_blog_98.jpg', 'Author', 'Author User Description', 0, 1, 1, '2023-05-09 23:47:03', '2023-05-09 23:47:34');

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
(20, '1690028552_brand_71.png', '2023-07-22 06:52:32', '2023-07-22 06:52:32'),
(21, '1690445605_brand_51.png', '2023-07-27 02:43:25', '2023-07-27 02:43:25'),
(22, '1690445606_brand_99.png', '2023-07-27 02:43:26', '2023-07-27 02:43:26'),
(23, '1690445607_brand_11.jpg', '2023-07-27 02:43:27', '2023-07-27 02:43:27');

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
(26, '1690008800_category_9.png', 'Handmade Signature Collection', 'handmade-signature-collection', 'Handmade Signature Collection', 'Handmade Signature Collection', 'Handmade Signature Collection', 'Handmade Signature Collection', 1, '2023-07-22 01:07:19', '2023-07-22 01:23:20'),
(27, '1690008778_category_51.png', 'Optima collection', 'optima-collection', 'Optima collection', 'Optima collection', 'Optima collection', 'Optima collection', 1, '2023-07-22 01:13:25', '2023-07-22 01:22:59'),
(28, '1690008790_category_74.png', 'Handmade Solo Collection', 'handmade-solo-collection', 'Handmade Solo Collection', 'Handmade Solo Collection', 'Handmade Solo Collection', 'Handmade Solo Collection', 1, '2023-07-22 01:22:50', '2023-07-22 01:23:10'),
(29, '1690008942_category_93.png', 'Quartz Sinks', 'quartz-sinks', 'Quartz Sinks', 'Quartz Sinks', 'Quartz Sinks', 'Quartz Sinks', 1, '2023-07-22 01:25:42', '2023-07-22 01:25:42'),
(30, '1690009264_category_15.png', 'Fusion', 'fusion', 'Fusion', 'Fusion', 'Fusion', 'Fusion', 1, '2023-07-22 01:31:04', '2023-07-22 01:31:04'),
(31, '1690009603_category_54.png', 'Accessories', 'accessories', 'Accessories', 'Accessories', 'Accessories', 'Accessories', 1, '2023-07-22 01:36:43', '2023-07-22 01:36:43');

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
(3, 'What’s the warranty on sinks?', '<p>Laurete sinks is warranted for one year from the date of purchase against any manufacturing defect on normal residential use only. No warranty will stand if used in commercial area.&nbsp;</p>', '2023-04-24 03:44:12', '2023-07-22 07:36:16'),
(4, 'Which chemical is harmful for sink?', '<p>Acid, toilet cleaners, or any alkaline cleaners can harm the surface of the sink. Using any of these will void the warranty.</p>', '2023-04-24 03:46:08', '2023-07-22 07:36:40'),
(5, 'How many finishes available in kitchen sinks?', '<p>Satin and Glossy finish is available.</p>', '2023-04-24 03:46:08', '2023-07-22 07:37:00');

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
(20, '2023_04_27_102654_create_reviews_table', 16),
(21, '2023_05_11_051917_create_product_galleries_table', 17),
(22, '2023_07_25_054810_create_popup_enqueries_table', 18);

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
-- Table structure for table `popup_enqueries`
--

CREATE TABLE `popup_enqueries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popup_enqueries`
--

INSERT INTO `popup_enqueries` (`id`, `name`, `email`, `phone`, `category`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Anup', 'anupmishra509@gmail.com', '8178268020', 'Single Bowl', 'Testing...', '2023-07-25 01:21:40', '2023-07-25 01:21:40');

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
  `made_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_link1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_link2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_link3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_link4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `product_name`, `product_slug`, `product_image`, `selling_price`, `original_price`, `quantity`, `short_description`, `long_description`, `tranding_product`, `new_design`, `offer_product`, `product_size`, `product_unit`, `product_position`, `hover_image`, `youtube_link`, `product_document`, `meta_title`, `meta_decription`, `meta_keyword`, `made_by`, `platform_image1`, `platform_image2`, `platform_image3`, `platform_image4`, `platform_link1`, `platform_link2`, `platform_link3`, `platform_link4`, `product_type`, `status`, `created_at`, `updated_at`) VALUES
(34, 26, NULL, 'HMS 1816', 'hms-1816', '1690010942_product_13.png', '9400', '10000', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p><strong>Overall Size</strong><br>L - 18\" - 450mm<br>W - 16\" - 400mm</p><p><strong>Bowl Size</strong><br>L - 16\" - 400 mm<br>W - 14\" - 350mm<br>D - 9\" - 225 mm</p><p>&nbsp;</p>', 1, 1, 0, '18 * 16', 'Inches', '1', '1690010942_product_hover_57.png', NULL, NULL, 'HMS 1816', 'HMS 1816', 'HMS 1816', 'Handmade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 01:59:02', '2023-07-22 02:03:52'),
(35, 26, NULL, 'HMS 4520P', 'hms-4520p', '1690011652_product_96.png', '20000', '22000', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p><strong>Overall Size</strong><br>L - 45\" -1140mm<br>W - 20\" - 500mm</p><p><strong>Bowl Size</strong><br>L - 21\" - 525mm<br>W - 18\" - 450mm<br>D - 10\" - 250 mm</p>', 1, 1, 0, '45*20', 'Inches', '2', '1690011652_product_hover_67.png', NULL, '', 'HMS 4520P', 'HMS 4520P', 'HMS 4520P', 'Machinemade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 02:10:52', '2023-07-22 02:10:52'),
(36, 26, NULL, 'HMS 2118', 'hms-2118', '1690012613_product_86.png', '9500', '10500', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p><strong>Overall Size</strong><br>L - 21\" - 530mm<br>W - 18\" - 450mm</p><p><strong>Bowl Size</strong><br>L - 19\" - 480mm<br>W - 16\" - 400mm<br>D - 10\" - 250 mm</p>', 1, 1, 0, '21 * 18', 'Inches', '3', '1690012613_product_hover_28.png', NULL, NULL, 'HMS 2118', 'HMS 2118', 'HMS 2118', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 02:26:53', '2023-07-22 02:27:30'),
(37, 27, NULL, 'Spice', 'spice', '1690013069_product_58.png', '2470', '2700', 5, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p><strong>Overall Size</strong><br>L - 16\" - 406mm<br>W - 11\" - 280mm</p><p><strong>Bowl Size</strong><br>L - 13.25\" - 336 mm<br>W - 9.75\" - 247mm<br>D - 5\" - 125 mm</p>', 0, 1, 0, '16 * 11', 'Inches', '10', '1690013069_product_hover_69.png', NULL, NULL, 'Spice', 'Spice', 'Spice', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 02:34:29', '2023-07-22 02:35:45'),
(38, 27, NULL, 'Vintage', 'vintage', '1690013518_product_35.png', '8180', '10000', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p><strong>Overall Size</strong><br>L - 27\" - 686mm<br>W - 20\" - 508mm</p><p><strong>Bowl Size</strong><br>L - 24\" - 610mm<br>W - 18\" - 457mm<br>D - 9\" - 225 mm</p>', 0, 1, 0, '27 * 20', 'Inches', '5', '1690013518_product_hover_63.png', NULL, NULL, 'Vintage', 'Vintage', 'Vintage', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 02:40:18', '2023-07-22 02:41:58'),
(39, 31, NULL, 'Sink Drainer', 'sink-drainer', '1690014093_product_73.png', '310', '350', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p>SD 01(3\") - Rs 310/-<br>SD 02(4\") - Rs 420/-</p>', 0, 0, 1, NULL, NULL, '6', '1690014093_product_hover_83.png', NULL, '', 'Sink Drainer', 'Sink Drainer', 'Sink Drainer', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 02:51:33', '2023-07-22 02:51:33'),
(40, 31, NULL, 'Sink Drainer', 'sink-drainer-2', '1690014661_product_99.png', '490', '550', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p>SD 03 (4\") : Rs 490/-</p>', 0, 0, 1, NULL, NULL, '7', '1690014661_product_hover_1.png', NULL, '', 'Sink Drainer', 'Sink Drainer', 'Sink Drainer', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 03:01:01', '2023-07-22 03:01:01'),
(41, 31, NULL, 'Plumbning Connector', 'plumbning-connector', '1690014829_product_2.png', '500', '550', 10, '<p>Find Kitchen Sinks at Laurete. Enjoy Free Shipping &amp; browse our great selection of Kitchen Fixtures, Kitchen &amp; Dining Furniture, Kitchen Islands &amp; Serving Carts and more!</p>', '<p>PC 01 : Rs 500/-</p>', 0, 0, 1, NULL, NULL, '7', '1690014829_product_hover_85.png', NULL, '', 'Plumbning Connector', 'Plumbning Connector', 'Plumbning Connector', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-22 03:03:49', '2023-07-22 03:03:49'),
(42, 27, NULL, 'Test Product1', 'test-product1', '1690441040_product_57.jpg', '400', '500', 12, '<p>Test Product <strong>Short Description</strong></p>', '<p>Test Product <strong>Long Description</strong></p>', 0, 1, 0, '54', 'Pkt', '12', '1690441040_product_hover_10.jpg', 'https://www.youtube.com/watch?v=ImtZ5yENzgE', '1690445210_product_document_87.pdf', 'SEO Title', 'SEO Description', 'SEO Keyword', 'Handmade', '1690441112_platform_image1_74.jpg', '1690441040_platform_image2_1.jpg', '1690441040_platform_image3_92.jpg', '1690441040_platform_image4_80.jpg', 'Flipkart', 'Amazon', 'Myntra', 'Myntra', '302', 1, '2023-07-27 01:27:20', '2023-07-27 02:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `product_image`, `created_at`, `updated_at`) VALUES
(20, 34, '1690011110_gallery_56.png', '2023-07-22 02:01:50', '2023-07-22 02:01:50'),
(21, 35, '1690011680_gallery_100.png', '2023-07-22 02:11:20', '2023-07-22 02:11:20'),
(22, 36, '1690012658_gallery_67.png', '2023-07-22 02:27:38', '2023-07-22 02:27:38'),
(23, 38, '1690013485_gallery_9.png', '2023-07-22 02:41:25', '2023-07-22 02:41:25'),
(24, 37, '1690013494_gallery_57.png', '2023-07-22 02:41:34', '2023-07-22 02:41:34'),
(25, 39, '1690014102_gallery_85.png', '2023-07-22 02:51:42', '2023-07-22 02:51:42'),
(26, 41, '1690014842_gallery_63.png', '2023-07-22 03:04:02', '2023-07-22 03:04:02'),
(27, 40, '1690014858_gallery_21.png', '2023-07-22 03:04:18', '2023-07-22 03:04:18'),
(28, 42, '1690444855_gallery_95.jpg', '2023-07-27 02:30:55', '2023-07-27 02:30:55'),
(29, 42, '1690444856_gallery_58.jpg', '2023-07-27 02:30:56', '2023-07-27 02:30:56'),
(30, 42, '1690444857_gallery_52.jpg', '2023-07-27 02:30:57', '2023-07-27 02:30:57'),
(31, 42, '1690444858_gallery_62.jpg', '2023-07-27 02:30:58', '2023-07-27 02:30:58');

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
(1, '1690015818_review_23.png', 'Karan', 'The product overall is quite good and the packaging was very good. The vegetable basket look useful.', '5', 1, '2023-04-27 05:24:34', '2023-07-22 03:20:18'),
(2, '1690015794_review_58.png', 'Rohit', 'The product is good and material quality is amazing. It look so elegant in my home. Beautiful design.', '5', 1, '2023-04-27 05:25:49', '2023-07-22 03:19:54'),
(3, '1690015754_review_100.png', 'Deepak', 'Extremely happy with the product. It is sturdy and better than expected. I found  sink to be of better quality.', '5', 1, '2023-04-27 05:26:16', '2023-07-22 03:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`id`, `category`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Announcement', 'Free Shipping, now over ₹499 only!11', NULL, '2023-04-27 01:40:09', '2023-04-27 01:43:49'),
(2, 'popup', '', '1690263804_popup_45.png', NULL, '2023-07-25 00:13:24');

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
(11, 'https://www.youtube.com/embed/8jxRn-T_LCs', 4, '2023-04-20 03:39:17', '2023-04-20 03:39:17');

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
-- Indexes for table `popup_enqueries`
--
ALTER TABLE `popup_enqueries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `popup_enqueries`
--
ALTER TABLE `popup_enqueries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
