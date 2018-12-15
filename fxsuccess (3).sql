-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fxsuccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `advertisement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `advertisement`, `position`, `created_at`, `updated_at`) VALUES
(18, '1543651704.jpg', 'Head->Bottom->Left', '2018-12-01 02:08:24', '2018-12-01 02:08:24'),
(19, '1543652113.jpg', 'Analysis->Bottom->Left', '2018-12-01 02:15:13', '2018-12-01 02:15:13'),
(20, '1543743649.jpg', 'Head->Bottom->Left', '2018-12-02 03:40:49', '2018-12-02 03:40:49'),
(21, '1543745207.jpg', 'Head->Bottom->Left', '2018-12-02 04:06:47', '2018-12-02 04:06:47'),
(22, '1543745229.jpg', 'Head->Bottom->Left', '2018-12-02 04:07:09', '2018-12-02 04:07:09'),
(25, '1543757257.png', 'Head->Bottom->Left', '2018-12-02 07:27:37', '2018-12-02 07:27:37'),
(26, '1543757275.png', 'Head->Bottom->Left', '2018-12-02 07:27:55', '2018-12-02 07:27:55'),
(27, '1543757294.png', 'Head->Bottom->Left', '2018-12-02 07:28:14', '2018-12-02 07:28:14'),
(28, '1543757493.png', 'Head->Bottom->Left', '2018-12-02 07:31:33', '2018-12-02 07:31:33'),
(29, '1543757510.png', 'Head->Bottom->Left', '2018-12-02 07:31:50', '2018-12-02 07:31:50'),
(30, '1543757527.png', 'Head->Bottom->Left', '2018-12-02 07:32:07', '2018-12-02 07:32:07'),
(31, '1543758391.png', 'Analysis->Bottom->Left', '2018-12-02 07:46:31', '2018-12-02 07:46:31'),
(32, '1543758409.png', 'Analysis->Bottom->Left', '2018-12-02 07:46:49', '2018-12-02 07:46:49'),
(33, '1543758428.png', 'Analysis->Bottom->Left', '2018-12-02 07:47:08', '2018-12-02 07:47:08'),
(34, '1543759258.png', 'Article->Bottom->Left', '2018-12-02 08:00:58', '2018-12-02 08:00:58'),
(35, '1543759276.png', 'Article->Bottom->Left', '2018-12-02 08:01:16', '2018-12-02 08:01:16'),
(36, '1543759292.png', 'Article->Bottom->Left', '2018-12-02 08:01:32', '2018-12-02 08:01:32'),
(40, '1543760787.png', 'Forex Signal->Bottom->Left', '2018-12-02 08:26:27', '2018-12-02 08:26:27'),
(41, '1543760827.png', 'Forex Signal->Bottom->Left', '2018-12-02 08:27:07', '2018-12-02 08:27:07'),
(42, '1543760849.png', 'Forex Signal->Bottom->Left', '2018-12-02 08:27:29', '2018-12-02 08:27:29'),
(43, '1543817619.png', 'Forex Article->Bottom->Left', '2018-12-03 00:13:39', '2018-12-03 00:13:39'),
(44, '1543818172.gif', 'Forex Article Detail->Bottom->Left', '2018-12-03 00:22:52', '2018-12-03 00:22:52'),
(45, '1543818192.gif', 'Forex Article Detail->Bottom->Left', '2018-12-03 00:23:12', '2018-12-03 00:23:12'),
(46, '1543818210.gif', 'Forex Article Detail->Bottom->Left', '2018-12-03 00:23:30', '2018-12-03 00:23:30'),
(47, '1543821864.gif', 'Forex Analysis Detail->Bottom->Left', '2018-12-03 01:24:24', '2018-12-03 01:24:24'),
(48, '1543821890.gif', 'Forex Analysis Detail->Bottom->Left', '2018-12-03 01:24:50', '2018-12-03 01:24:50'),
(49, '1543821909.png', 'Forex Analysis Detail->Bottom->Left', '2018-12-03 01:25:09', '2018-12-03 01:25:09'),
(51, '1543921474.png', 'Forex Article Detail->Middle', '2018-12-04 05:04:34', '2018-12-04 05:04:34'),
(52, '1544438110.gif', 'Head', '2018-12-10 10:35:10', '2018-12-10 10:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_page`
--

CREATE TABLE `advertisement_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `select_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisement_page`
--

INSERT INTO `advertisement_page` (`id`, `select_position`, `created_at`, `updated_at`) VALUES
(1, 'Head', NULL, NULL),
(2, 'Head->Bottom->Left', NULL, NULL),
(3, 'Analysis->Bottom->Left', NULL, NULL),
(4, 'Article->Bottom->Left', NULL, NULL),
(5, 'Forex Signal->Bottom->Left', NULL, NULL),
(6, 'Forex Analysis Detail->Bottom->Left', NULL, NULL),
(7, 'Forex Article->Bottom->Left\r\n', NULL, NULL),
(9, 'Forex Article Detail->Bottom->Left', NULL, NULL),
(10, 'Forex Signal->Middle', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `soft_del` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id`, `title`, `image`, `description`, `published_by`, `status`, `soft_del`, `time_zone`, `created_at`, `updated_at`) VALUES
(2, 'dfgdsf', '1544444582.googlelogo_color_272x92dp.png', '<p>dgddfdfdfdsfgdsg</p>', 'gggg', 1, 'no', 'December, 10, 2018', '2018-11-29 04:01:57', '2018-12-10 06:23:02'),
(3, 'Demo', '1544444662.jpg', '<p>gdfsfs</p>', 'fjhd', 1, 'ok', 'December, 10, 2018', '2018-12-10 06:24:22', '2018-12-10 06:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `articlecomments`
--

CREATE TABLE `articlecomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `likes_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articlecomments`
--

INSERT INTO `articlecomments` (`id`, `name`, `email`, `comment`, `article_id`, `likes_count`, `created_at`, `updated_at`) VALUES
(1, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'kgfdfgdgdg', 10, 9, '2018-12-11 02:58:38', '2018-12-12 00:14:37'),
(2, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'My articel comment sds', 9, 0, '2018-12-11 07:44:49', '2018-12-11 07:47:02'),
(3, 'Mahabub Hossain', 'mahbubsprint310@gmail.com', 'There is another comment', 9, 0, '2018-12-11 07:47:17', '2018-12-11 07:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postedby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articledate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `soft_del` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `postedby`, `description`, `image`, `articledate`, `status`, `soft_del`, `created_at`, `updated_at`) VALUES
(3, 'ফরেক্স ট্রেড করার সুবিধাঃ', 'FXSUCCESSBD', '<p>- আগের দিনে শুধুমাত্র বিশাল ধনী অথবা ব্যাংকগুলো ফরেক্স মার্কেটে ট্রেড করার সুযোগ পেত। কিন্তু বর্তমানে সময়ের পরিবর্তনের সাথে সাথে বিভিন্ন ফরেক্স ব্রোকারের আবির্ভাব ও প্রতিযোগিতা বৃদ্ধির কারনে যে কেউই পৃথিবীর যে কোনো দেশ থেকে ফরেক্স মার্কেটে ট্রেড করতে পারে।</p>\r\n\r\n<p>- মাত্র ১ ডলার দিয়ে ফরেক্স ট্রেড শুরু করা সম্ভভ। তাছারা প্রায় সব ব্রোকারই আপনাকে ফ্রী ডেমো ট্রেড করার সুবিধা দেবে, অর্থাৎ ভার্চুয়াল মানি দিয়ে। তাই প্রথমে আপনি নিখরচায় ডেমো ট্রেড করে নিজেকে প্রস্তুত করে নিতে পারেন এবং ডেমো ট্রেড করে সাফল্য ফেলে ডিপোজিট করে রিয়েল ট্রেড শুরু করতে পারেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেট পরিধি অনেক বড় এবং এই মার্কেটকে ম্যানিপুলেট করা সম্ভভ না। পৃথিবীর সবচেয়ে বড় স্টক মার্কেট হচ্ছে নিউইয়র্ক স্টক মার্কেট এবং ফরেক্স মার্কেটের আকার তার থেকেও ২৫ গুন বেশি। মনে রাখবেন,ডলার বা ইউরো এর মূল্য কোন দেশের মূল্য কোনো দেশের সরকার নির্ধারণ করে দেয় না। বিভিন্ন দেশের অর্থনৈতিক অবস্থা ও আর্থিক ঘটনাবলীর প্রেক্ষিতে বিভিন্ন দেশের মুদ্রার মূল্য নিজে নিজেই পরিবর্তিত হয়। আপনি যে দামে ডলার বা ইউরো কিনবেন, সেই একই দামে পৃথিবীর সব দেশে ডলার বা ইউরো ক্রয়-বিক্রয় হবে।</p>\r\n\r\n<p>- ফরেক্স মার্কেট এ ট্রেড করার ক্ষেত্রে বড় ধরনের লিভারেজ বা লোন সুবিধা পাওয়া যায়, আর তাই খুব অল্প মার্কেট মুভমেন্ট থেকেই আপনি ভাল প্রফিট করতে পারবেন।</p>\r\n\r\n<p>- স্ক্যালপিং ফরেক্স এ খুব জনপ্রিয় একটি শব্দ। এর মানে হচ্ছে খুব অল্প সময়ের জন্য খোলা ট্রেড। ফরেক্স মার্কেটের খুব অল্প পরিবর্তনেও ভাল লাভ করা সম্ভভ। অনেকেই ১০ বা ১৫ সেকেন্ডের জন্য একটি ট্রেড ওপেন করে এবং প্রফিট পেলে তা নিয়ে ট্রেড থেকে বের হয়ে যায়।</p>\r\n\r\n<p>- ফরেক্স মার্কেট সোম থেকে শুক্র, সপ্তাহের ৫ দিনই দিবা-রাত্রি ২৪ ঘণ্টার জন্য খোলা থাকে। আর তাই, আপনি ব্যাবসায়ি হোন বা চাকুরিজীবী, ফরেক্স মার্কেটে আপনি আপনার সুবিধামত ট্রেড করতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স ট্রেডিং আপনি বাসায় বসেই করতে পারবেন, বাইরে যাওয়ার কোনো প্রয়োজন নেই। আর তাই পরিবারকে প্রচুর পরিমানে সময় দিতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেটে ট্রেড করার জন্য আপনাকে সব কিছু অনলাইনে করতে হবে আর অ্যাকাউন্ট ওপেনিং থেকে শুরু করে অ্যাকাউন্টে ডিপোজিট বা উইথড্র করাও অনেক সহজ।</p>\r\n\r\n<p>- আপনি যদি ভাল ট্রেড করতে পারেন, তাহলে অনেকেই আপনার সাথে ডিপোজিট করতে উৎসাহিত হবে এবং সেক্ষেত্রে আপনি তাদের ট্রেড পরিচালনা করতে পারেন এবং তাদের লাভের একটি অংশ আপনি পাবেন।</p>\r\n\r\n<p>- সর্বোপরি একজন সফল ও দক্ষ ফরেক্স ট্রেডার এই মার্কেট থেকে প্রচুর পরিমানে আয় করতে পারবেন।</p>\r\n\r\n<p>উল্লেখ করা বাঞ্ছনীয়, একজন দক্ষ ও সফল ট্রেডার হতে হলে আপনাকে ফরেক্স মার্কেট সম্পর্কে প্রচুর পড়াশোনা করতে হবে, নিজেকে এই মার্কেটের যোগ্য করে তুলতে হবে। ফরেক্স মার্কেট থেকে যে কেউই কোন কিছু না জেনেও হয়ত প্রথম দিকে অনেক আয় করতে পারেন। মনে রাখবেন, ফরেক্স মার্কেট স্টক মার্কেটের মতই চ্যালেঞ্জিং। না জেনে হয়ত প্রাথমিকভাবে সফল হওয়া যাবে যেটা স্টক মার্কেটও অনেকেও অনেকে হয়। তবে দীর্ঘসময়ের জন্য টিকে থাকতে হলে, এক্সপার্ট হওয়া ছাড়া কোন বিকল্প নেই।</p>\r\n\r\n<p>আর একটি কথা, ফরেক্স মার্কেটে মন্দা বলে কিছু নেই। কারন স্টক মার্কেটে আপনি শুধু buy করতে পারেন, ফরেক্স মার্কেটে buy বা sell উভয়ই করতে পারবেন।</p>\r\n\r\n<p>মনে রাখবেন,</p>', '1543238024.jpg', 'November, 26, 2018', 1, 'no', '2018-11-26 06:39:51', '2018-11-26 07:16:09'),
(8, 'ফরেক্স ট্রেড করার সুবিধাঃ', 'FXSUCCESSBD', '<p>- আগের দিনে শুধুমাত্র বিশাল ধনী অথবা ব্যাংকগুলো ফরেক্স মার্কেটে ট্রেড করার সুযোগ পেত। কিন্তু বর্তমানে সময়ের পরিবর্তনের সাথে সাথে বিভিন্ন ফরেক্স ব্রোকারের আবির্ভাব ও প্রতিযোগিতা বৃদ্ধির কারনে যে কেউই পৃথিবীর যে কোনো দেশ থেকে ফরেক্স মার্কেটে ট্রেড করতে পারে।</p>\r\n\r\n<p>- মাত্র ১ ডলার দিয়ে ফরেক্স ট্রেড শুরু করা সম্ভভ। তাছারা প্রায় সব ব্রোকারই আপনাকে ফ্রী ডেমো ট্রেড করার সুবিধা দেবে, অর্থাৎ ভার্চুয়াল মানি দিয়ে। তাই প্রথমে আপনি নিখরচায় ডেমো ট্রেড করে নিজেকে প্রস্তুত করে নিতে পারেন এবং ডেমো ট্রেড করে সাফল্য ফেলে ডিপোজিট করে রিয়েল ট্রেড শুরু করতে পারেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেট পরিধি অনেক বড় এবং এই মার্কেটকে ম্যানিপুলেট করা সম্ভভ না। পৃথিবীর সবচেয়ে বড় স্টক মার্কেট হচ্ছে নিউইয়র্ক স্টক মার্কেট এবং ফরেক্স মার্কেটের আকার তার থেকেও ২৫ গুন বেশি। মনে রাখবেন,ডলার বা ইউরো এর মূল্য কোন দেশের মূল্য কোনো দেশের সরকার নির্ধারণ করে দেয় না। বিভিন্ন দেশের অর্থনৈতিক অবস্থা ও আর্থিক ঘটনাবলীর প্রেক্ষিতে বিভিন্ন দেশের মুদ্রার মূল্য নিজে নিজেই পরিবর্তিত হয়। আপনি যে দামে ডলার বা ইউরো কিনবেন, সেই একই দামে পৃথিবীর সব দেশে ডলার বা ইউরো ক্রয়-বিক্রয় হবে।</p>\r\n\r\n<p>- ফরেক্স মার্কেট এ ট্রেড করার ক্ষেত্রে বড় ধরনের লিভারেজ বা লোন সুবিধা পাওয়া যায়, আর তাই খুব অল্প মার্কেট মুভমেন্ট থেকেই আপনি ভাল প্রফিট করতে পারবেন।</p>\r\n\r\n<p>- স্ক্যালপিং ফরেক্স এ খুব জনপ্রিয় একটি শব্দ। এর মানে হচ্ছে খুব অল্প সময়ের জন্য খোলা ট্রেড। ফরেক্স মার্কেটের খুব অল্প পরিবর্তনেও ভাল লাভ করা সম্ভভ। অনেকেই ১০ বা ১৫ সেকেন্ডের জন্য একটি ট্রেড ওপেন করে এবং প্রফিট পেলে তা নিয়ে ট্রেড থেকে বের হয়ে যায়।</p>\r\n\r\n<p>- ফরেক্স মার্কেট সোম থেকে শুক্র, সপ্তাহের ৫ দিনই দিবা-রাত্রি ২৪ ঘণ্টার জন্য খোলা থাকে। আর তাই, আপনি ব্যাবসায়ি হোন বা চাকুরিজীবী, ফরেক্স মার্কেটে আপনি আপনার সুবিধামত ট্রেড করতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স ট্রেডিং আপনি বাসায় বসেই করতে পারবেন, বাইরে যাওয়ার কোনো প্রয়োজন নেই। আর তাই পরিবারকে প্রচুর পরিমানে সময় দিতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেটে ট্রেড করার জন্য আপনাকে সব কিছু অনলাইনে করতে হবে আর অ্যাকাউন্ট ওপেনিং থেকে শুরু করে অ্যাকাউন্টে ডিপোজিট বা উইথড্র করাও অনেক সহজ।</p>\r\n\r\n<p>- আপনি যদি ভাল ট্রেড করতে পারেন, তাহলে অনেকেই আপনার সাথে ডিপোজিট করতে উৎসাহিত হবে এবং সেক্ষেত্রে আপনি তাদের ট্রেড পরিচালনা করতে পারেন এবং তাদের লাভের একটি অংশ আপনি পাবেন।</p>\r\n\r\n<p>- সর্বোপরি একজন সফল ও দক্ষ ফরেক্স ট্রেডার এই মার্কেট থেকে প্রচুর পরিমানে আয় করতে পারবেন।</p>\r\n\r\n<p>উল্লেখ করা বাঞ্ছনীয়, একজন দক্ষ ও সফল ট্রেডার হতে হলে আপনাকে ফরেক্স মার্কেট সম্পর্কে প্রচুর পড়াশোনা করতে হবে, নিজেকে এই মার্কেটের যোগ্য করে তুলতে হবে। ফরেক্স মার্কেট থেকে যে কেউই কোন কিছু না জেনেও হয়ত প্রথম দিকে অনেক আয় করতে পারেন। মনে রাখবেন, ফরেক্স মার্কেট স্টক মার্কেটের মতই চ্যালেঞ্জিং। না জেনে হয়ত প্রাথমিকভাবে সফল হওয়া যাবে যেটা স্টক মার্কেটও অনেকেও অনেকে হয়। তবে দীর্ঘসময়ের জন্য টিকে থাকতে হলে, এক্সপার্ট হওয়া ছাড়া কোন বিকল্প নেই।</p>\r\n\r\n<p>আর একটি কথা, ফরেক্স মার্কেটে মন্দা বলে কিছু নেই। কারন স্টক মার্কেটে আপনি শুধু buy করতে পারেন, ফরেক্স মার্কেটে buy বা sell উভয়ই করতে পারবেন।</p>\r\n\r\n<p>মনে রাখবেন,</p>', '1543238024.jpg', 'November, 26, 2018', 1, 'no', '2018-11-26 06:39:51', '2018-11-26 07:16:09'),
(9, 'ফরেক্স ট্রেড করার সুবিধাঃ', 'FXSUCCESSBD', '<p>- আগের দিনে শুধুমাত্র বিশাল ধনী অথবা ব্যাংকগুলো ফরেক্স মার্কেটে ট্রেড করার সুযোগ পেত। কিন্তু বর্তমানে সময়ের পরিবর্তনের সাথে সাথে বিভিন্ন ফরেক্স ব্রোকারের আবির্ভাব ও প্রতিযোগিতা বৃদ্ধির কারনে যে কেউই পৃথিবীর যে কোনো দেশ থেকে ফরেক্স মার্কেটে ট্রেড করতে পারে।</p>\r\n\r\n<p>- মাত্র ১ ডলার দিয়ে ফরেক্স ট্রেড শুরু করা সম্ভভ। তাছারা প্রায় সব ব্রোকারই আপনাকে ফ্রী ডেমো ট্রেড করার সুবিধা দেবে, অর্থাৎ ভার্চুয়াল মানি দিয়ে। তাই প্রথমে আপনি নিখরচায় ডেমো ট্রেড করে নিজেকে প্রস্তুত করে নিতে পারেন এবং ডেমো ট্রেড করে সাফল্য ফেলে ডিপোজিট করে রিয়েল ট্রেড শুরু করতে পারেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেট পরিধি অনেক বড় এবং এই মার্কেটকে ম্যানিপুলেট করা সম্ভভ না। পৃথিবীর সবচেয়ে বড় স্টক মার্কেট হচ্ছে নিউইয়র্ক স্টক মার্কেট এবং ফরেক্স মার্কেটের আকার তার থেকেও ২৫ গুন বেশি। মনে রাখবেন,ডলার বা ইউরো এর মূল্য কোন দেশের মূল্য কোনো দেশের সরকার নির্ধারণ করে দেয় না। বিভিন্ন দেশের অর্থনৈতিক অবস্থা ও আর্থিক ঘটনাবলীর প্রেক্ষিতে বিভিন্ন দেশের মুদ্রার মূল্য নিজে নিজেই পরিবর্তিত হয়। আপনি যে দামে ডলার বা ইউরো কিনবেন, সেই একই দামে পৃথিবীর সব দেশে ডলার বা ইউরো ক্রয়-বিক্রয় হবে।</p>\r\n\r\n<p>- ফরেক্স মার্কেট এ ট্রেড করার ক্ষেত্রে বড় ধরনের লিভারেজ বা লোন সুবিধা পাওয়া যায়, আর তাই খুব অল্প মার্কেট মুভমেন্ট থেকেই আপনি ভাল প্রফিট করতে পারবেন।</p>\r\n\r\n<p>- স্ক্যালপিং ফরেক্স এ খুব জনপ্রিয় একটি শব্দ। এর মানে হচ্ছে খুব অল্প সময়ের জন্য খোলা ট্রেড। ফরেক্স মার্কেটের খুব অল্প পরিবর্তনেও ভাল লাভ করা সম্ভভ। অনেকেই ১০ বা ১৫ সেকেন্ডের জন্য একটি ট্রেড ওপেন করে এবং প্রফিট পেলে তা নিয়ে ট্রেড থেকে বের হয়ে যায়।</p>\r\n\r\n<p>- ফরেক্স মার্কেট সোম থেকে শুক্র, সপ্তাহের ৫ দিনই দিবা-রাত্রি ২৪ ঘণ্টার জন্য খোলা থাকে। আর তাই, আপনি ব্যাবসায়ি হোন বা চাকুরিজীবী, ফরেক্স মার্কেটে আপনি আপনার সুবিধামত ট্রেড করতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স ট্রেডিং আপনি বাসায় বসেই করতে পারবেন, বাইরে যাওয়ার কোনো প্রয়োজন নেই। আর তাই পরিবারকে প্রচুর পরিমানে সময় দিতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেটে ট্রেড করার জন্য আপনাকে সব কিছু অনলাইনে করতে হবে আর অ্যাকাউন্ট ওপেনিং থেকে শুরু করে অ্যাকাউন্টে ডিপোজিট বা উইথড্র করাও অনেক সহজ।</p>\r\n\r\n<p>- আপনি যদি ভাল ট্রেড করতে পারেন, তাহলে অনেকেই আপনার সাথে ডিপোজিট করতে উৎসাহিত হবে এবং সেক্ষেত্রে আপনি তাদের ট্রেড পরিচালনা করতে পারেন এবং তাদের লাভের একটি অংশ আপনি পাবেন।</p>\r\n\r\n<p>- সর্বোপরি একজন সফল ও দক্ষ ফরেক্স ট্রেডার এই মার্কেট থেকে প্রচুর পরিমানে আয় করতে পারবেন।</p>\r\n\r\n<p>উল্লেখ করা বাঞ্ছনীয়, একজন দক্ষ ও সফল ট্রেডার হতে হলে আপনাকে ফরেক্স মার্কেট সম্পর্কে প্রচুর পড়াশোনা করতে হবে, নিজেকে এই মার্কেটের যোগ্য করে তুলতে হবে। ফরেক্স মার্কেট থেকে যে কেউই কোন কিছু না জেনেও হয়ত প্রথম দিকে অনেক আয় করতে পারেন। মনে রাখবেন, ফরেক্স মার্কেট স্টক মার্কেটের মতই চ্যালেঞ্জিং। না জেনে হয়ত প্রাথমিকভাবে সফল হওয়া যাবে যেটা স্টক মার্কেটও অনেকেও অনেকে হয়। তবে দীর্ঘসময়ের জন্য টিকে থাকতে হলে, এক্সপার্ট হওয়া ছাড়া কোন বিকল্প নেই।</p>\r\n\r\n<p>আর একটি কথা, ফরেক্স মার্কেটে মন্দা বলে কিছু নেই। কারন স্টক মার্কেটে আপনি শুধু buy করতে পারেন, ফরেক্স মার্কেটে buy বা sell উভয়ই করতে পারবেন।</p>\r\n\r\n<p>মনে রাখবেন,</p>', '1543238024.jpg', 'November, 26, 2018', 1, 'no', '2018-11-26 06:39:51', '2018-11-26 07:16:09'),
(10, 'ফরেক্স ট্রেড করার সুবিধাঃ', 'FXSUCCESSBD', '<p>- আগের দিনে শুধুমাত্র বিশাল ধনী অথবা ব্যাংকগুলো ফরেক্স মার্কেটে ট্রেড করার সুযোগ পেত। কিন্তু বর্তমানে সময়ের পরিবর্তনের সাথে সাথে বিভিন্ন ফরেক্স ব্রোকারের আবির্ভাব ও প্রতিযোগিতা বৃদ্ধির কারনে যে কেউই পৃথিবীর যে কোনো দেশ থেকে ফরেক্স মার্কেটে ট্রেড করতে পারে।</p>\r\n\r\n<p>- মাত্র ১ ডলার দিয়ে ফরেক্স ট্রেড শুরু করা সম্ভভ। তাছারা প্রায় সব ব্রোকারই আপনাকে ফ্রী ডেমো ট্রেড করার সুবিধা দেবে, অর্থাৎ ভার্চুয়াল মানি দিয়ে। তাই প্রথমে আপনি নিখরচায় ডেমো ট্রেড করে নিজেকে প্রস্তুত করে নিতে পারেন এবং ডেমো ট্রেড করে সাফল্য ফেলে ডিপোজিট করে রিয়েল ট্রেড শুরু করতে পারেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেট পরিধি অনেক বড় এবং এই মার্কেটকে ম্যানিপুলেট করা সম্ভভ না। পৃথিবীর সবচেয়ে বড় স্টক মার্কেট হচ্ছে নিউইয়র্ক স্টক মার্কেট এবং ফরেক্স মার্কেটের আকার তার থেকেও ২৫ গুন বেশি। মনে রাখবেন,ডলার বা ইউরো এর মূল্য কোন দেশের মূল্য কোনো দেশের সরকার নির্ধারণ করে দেয় না। বিভিন্ন দেশের অর্থনৈতিক অবস্থা ও আর্থিক ঘটনাবলীর প্রেক্ষিতে বিভিন্ন দেশের মুদ্রার মূল্য নিজে নিজেই পরিবর্তিত হয়। আপনি যে দামে ডলার বা ইউরো কিনবেন, সেই একই দামে পৃথিবীর সব দেশে ডলার বা ইউরো ক্রয়-বিক্রয় হবে।</p>\r\n\r\n<p>- ফরেক্স মার্কেট এ ট্রেড করার ক্ষেত্রে বড় ধরনের লিভারেজ বা লোন সুবিধা পাওয়া যায়, আর তাই খুব অল্প মার্কেট মুভমেন্ট থেকেই আপনি ভাল প্রফিট করতে পারবেন।</p>\r\n\r\n<p>- স্ক্যালপিং ফরেক্স এ খুব জনপ্রিয় একটি শব্দ। এর মানে হচ্ছে খুব অল্প সময়ের জন্য খোলা ট্রেড। ফরেক্স মার্কেটের খুব অল্প পরিবর্তনেও ভাল লাভ করা সম্ভভ। অনেকেই ১০ বা ১৫ সেকেন্ডের জন্য একটি ট্রেড ওপেন করে এবং প্রফিট পেলে তা নিয়ে ট্রেড থেকে বের হয়ে যায়।</p>\r\n\r\n<p>- ফরেক্স মার্কেট সোম থেকে শুক্র, সপ্তাহের ৫ দিনই দিবা-রাত্রি ২৪ ঘণ্টার জন্য খোলা থাকে। আর তাই, আপনি ব্যাবসায়ি হোন বা চাকুরিজীবী, ফরেক্স মার্কেটে আপনি আপনার সুবিধামত ট্রেড করতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স ট্রেডিং আপনি বাসায় বসেই করতে পারবেন, বাইরে যাওয়ার কোনো প্রয়োজন নেই। আর তাই পরিবারকে প্রচুর পরিমানে সময় দিতে পারবেন।</p>\r\n\r\n<p>- ফরেক্স মার্কেটে ট্রেড করার জন্য আপনাকে সব কিছু অনলাইনে করতে হবে আর অ্যাকাউন্ট ওপেনিং থেকে শুরু করে অ্যাকাউন্টে ডিপোজিট বা উইথড্র করাও অনেক সহজ।</p>\r\n\r\n<p>- আপনি যদি ভাল ট্রেড করতে পারেন, তাহলে অনেকেই আপনার সাথে ডিপোজিট করতে উৎসাহিত হবে এবং সেক্ষেত্রে আপনি তাদের ট্রেড পরিচালনা করতে পারেন এবং তাদের লাভের একটি অংশ আপনি পাবেন।</p>\r\n\r\n<p>- সর্বোপরি একজন সফল ও দক্ষ ফরেক্স ট্রেডার এই মার্কেট থেকে প্রচুর পরিমানে আয় করতে পারবেন।</p>\r\n\r\n<p>উল্লেখ করা বাঞ্ছনীয়, একজন দক্ষ ও সফল ট্রেডার হতে হলে আপনাকে ফরেক্স মার্কেট সম্পর্কে প্রচুর পড়াশোনা করতে হবে, নিজেকে এই মার্কেটের যোগ্য করে তুলতে হবে। ফরেক্স মার্কেট থেকে যে কেউই কোন কিছু না জেনেও হয়ত প্রথম দিকে অনেক আয় করতে পারেন। মনে রাখবেন, ফরেক্স মার্কেট স্টক মার্কেটের মতই চ্যালেঞ্জিং। না জেনে হয়ত প্রাথমিকভাবে সফল হওয়া যাবে যেটা স্টক মার্কেটও অনেকেও অনেকে হয়। তবে দীর্ঘসময়ের জন্য টিকে থাকতে হলে, এক্সপার্ট হওয়া ছাড়া কোন বিকল্প নেই।</p>\r\n\r\n<p>আর একটি কথা, ফরেক্স মার্কেটে মন্দা বলে কিছু নেই। কারন স্টক মার্কেটে আপনি শুধু buy করতে পারেন, ফরেক্স মার্কেটে buy বা sell উভয়ই করতে পারবেন।</p>\r\n\r\n<p>মনে রাখবেন,</p>', '1543238024.jpg', 'November, 26, 2018', 1, 'no', '2018-11-26 06:39:51', '2018-11-26 07:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `brokerprocons`
--

CREATE TABLE `brokerprocons` (
  `id` int(10) UNSIGNED NOT NULL,
  `brokerreview_id` int(11) NOT NULL,
  `pro_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brokerprocons`
--

INSERT INTO `brokerprocons` (`id`, `brokerreview_id`, `pro_con`, `created_at`, `updated_at`) VALUES
(1, 9, '{\"_token\":\"Vb7Gz6RpfcOc0sk4qYMzTJ2JJra32q2SyG7RC53I\",\"pros\":\"<p>Demo Pros Will go here<\\/p>\",\"cons\":\"<p>Demo Cons will go here<\\/p>\"}', '2018-12-06 05:12:25', '2018-12-06 05:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `brokerreviews`
--

CREATE TABLE `brokerreviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `broker_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_del` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brokerreviews`
--

INSERT INTO `brokerreviews` (`id`, `broker_info`, `image`, `position`, `status`, `soft_del`, `created_at`, `updated_at`) VALUES
(7, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"third\",\"broker_name\":\"my broker\",\"country\":\"england\",\"status\":\"2\",\"website\":\"dssdsdf\",\"headquartered\":\"sdfsdaf\",\"founder_in\":\"269\",\"regulating_authority\":\"sdfsdaf\",\"us_client\":\"yes\",\"broker_status\":\"sdfsd\",\"broker_type\":\"sdfsdf\",\"telephone\":\"dsfsda\",\"fax\":\"sdfsda\",\"email_support\":\"sdf@gmail.com\",\"international_office\":\"fgdf\",\"web_language\":\"tryrt\",\"demo_account\":\"yes\",\"min_deposit\":\"gfhfgh\",\"ecn_deposit\":\"no\",\"acc_currency\":\"fghfgh\",\"max_leverage\":\"ghfgh\",\"min_order_vol\":\"gfhfg\",\"interest_margin\":\"no\",\"os_compatibility\":\"fghfg\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"no\",\"market_commentary\":\"yes\",\"customer_service_time\":\"fghgf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"fgh\",\"first_deposite_bonus\":\"gfh\",\"free_vps\":\"no\",\"segregeted_acc\":\"yes\",\"islamic_acc\":\"no\",\"institutional_acc\":\"no\",\"vip_service\":\"yes\",\"pamm_mam\":\"fghfgh\",\"deposite_option\":\"fgh\",\"withdrawal_opt\":\"fgh\",\"trading_platform\":\"gfhgf\",\"precision_pricing\":\"gfhfgh\",\"spread_type\":\"fghgfh\",\"commission\":\"no\",\"scalping\":\"no\",\"hedging\":\"yes\",\"expert_advisors\":\"no\",\"lowest_spread\":\"fghgh\",\"trading_instrument\":\"fghfgh\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"yes\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"gfhfgh\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"yes\",\"trading_tools\":\"no\",\"other_promotion\":\"yes\",\"trade_close_over_phone\":\"yes\"}', '1543934006.jpg', 'second', '2', 'no', '2018-12-04 04:54:15', '2018-12-09 01:25:48'),
(9, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', 'third', '2', 'no', '2018-12-06 00:04:39', '2018-12-07 23:44:21'),
(10, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'no', '2018-12-06 00:04:39', '2018-12-07 23:44:21'),
(11, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"third\",\"broker_name\":\"my broker\",\"country\":\"england\",\"status\":\"2\",\"website\":\"dssdsdf\",\"headquartered\":\"sdfsdaf\",\"founder_in\":\"269\",\"regulating_authority\":\"sdfsdaf\",\"us_client\":\"yes\",\"broker_status\":\"sdfsd\",\"broker_type\":\"sdfsdf\",\"telephone\":\"dsfsda\",\"fax\":\"sdfsda\",\"email_support\":\"sdf@gmail.com\",\"international_office\":\"fgdf\",\"web_language\":\"tryrt\",\"demo_account\":\"yes\",\"min_deposit\":\"gfhfgh\",\"ecn_deposit\":\"no\",\"acc_currency\":\"fghfgh\",\"max_leverage\":\"ghfgh\",\"min_order_vol\":\"gfhfg\",\"interest_margin\":\"no\",\"os_compatibility\":\"fghfg\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"no\",\"market_commentary\":\"yes\",\"customer_service_time\":\"fghgf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"fgh\",\"first_deposite_bonus\":\"gfh\",\"free_vps\":\"no\",\"segregeted_acc\":\"yes\",\"islamic_acc\":\"no\",\"institutional_acc\":\"no\",\"vip_service\":\"yes\",\"pamm_mam\":\"fghfgh\",\"deposite_option\":\"fgh\",\"withdrawal_opt\":\"fgh\",\"trading_platform\":\"gfhgf\",\"precision_pricing\":\"gfhfgh\",\"spread_type\":\"fghgfh\",\"commission\":\"no\",\"scalping\":\"no\",\"hedging\":\"yes\",\"expert_advisors\":\"no\",\"lowest_spread\":\"fghgh\",\"trading_instrument\":\"fghfgh\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"yes\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"gfhfgh\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"yes\",\"trading_tools\":\"no\",\"other_promotion\":\"yes\",\"trade_close_over_phone\":\"yes\"}', '1543934006.jpg', '', '2', 'no', '2018-12-04 04:54:15', '2018-12-07 23:41:33'),
(13, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'ok', '2018-12-06 00:04:39', '2018-12-09 01:22:49'),
(14, '{\"_method\":\"PATCH\",\"_token\":\"7uYg4BonJ3V2tQcilV2xj23rELSVRl750unf5epN\",\"broker_name\":\"fddfs\",\"country\":\"dfgdfsgsdfgd\",\"status\":\"2\",\"website\":\"dfgdfs\",\"headquartered\":\"dfgdsfg\",\"founder_in\":\"dfgdsfg\",\"regulating_authority\":\"dfgdfsg\",\"us_client\":\"yes\",\"broker_status\":\"dsfgdfsg\",\"broker_type\":\"gfdgdfs\",\"telephone\":\"dfgfd\",\"fax\":\"dfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"gfdgdsfgsdfg\",\"web_language\":\"dfgsdfgdsfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgdsfgdf\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgsdfgdsf\",\"max_leverage\":\"dfgsdfgsdf\",\"min_order_vol\":\"dfsgsdfg\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgsdfgsd\",\"news_feed_stream\":\"yes\",\"charting_pack\":\"no\",\"trading_signal\":\"yes\",\"market_commentary\":\"yes\",\"customer_service_time\":\"dfgdfsg\",\"trade_over_phone\":\"yes\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdsfg\",\"free_vps\":\"yes\",\"segregeted_acc\":\"yes\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"yes\",\"pamm_mam\":\"dfgdfg\",\"deposite_option\":\"dfgsdfg\",\"withdrawal_opt\":\"dfgdfsg\",\"trading_platform\":\"dfgdsfg\",\"precision_pricing\":\"dfsgdfg\",\"spread_type\":\"dfgsdfg\",\"commission\":\"yes\",\"scalping\":\"no\",\"hedging\":\"yes\",\"expert_advisors\":\"no\",\"lowest_spread\":\"dfgfdg\",\"trading_instrument\":\"dfgsdfg\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"yes\",\"mobile_trading\":\"no\",\"web_based_trading\":\"yes\",\"customer_support_lang\":\"dfgdfsg\",\"email_hone_support\":\"yes\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"yes\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1543921212.jpg', '', '2', 'no', '2018-12-04 05:00:12', '2018-12-09 01:05:07'),
(17, '{\"_method\":\"PATCH\",\"_token\":\"7uYg4BonJ3V2tQcilV2xj23rELSVRl750unf5epN\",\"broker_name\":\"fddfs\",\"country\":\"dfgdfsgsdfgd\",\"status\":\"2\",\"website\":\"dfgdfs\",\"headquartered\":\"dfgdsfg\",\"founder_in\":\"dfgdsfg\",\"regulating_authority\":\"dfgdfsg\",\"us_client\":\"yes\",\"broker_status\":\"dsfgdfsg\",\"broker_type\":\"gfdgdfs\",\"telephone\":\"dfgfd\",\"fax\":\"dfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"gfdgdsfgsdfg\",\"web_language\":\"dfgsdfgdsfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgdsfgdf\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgsdfgdsf\",\"max_leverage\":\"dfgsdfgsdf\",\"min_order_vol\":\"dfsgsdfg\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgsdfgsd\",\"news_feed_stream\":\"yes\",\"charting_pack\":\"no\",\"trading_signal\":\"yes\",\"market_commentary\":\"yes\",\"customer_service_time\":\"dfgdfsg\",\"trade_over_phone\":\"yes\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdsfg\",\"free_vps\":\"yes\",\"segregeted_acc\":\"yes\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"yes\",\"pamm_mam\":\"dfgdfg\",\"deposite_option\":\"dfgsdfg\",\"withdrawal_opt\":\"dfgdfsg\",\"trading_platform\":\"dfgdsfg\",\"precision_pricing\":\"dfsgdfg\",\"spread_type\":\"dfgsdfg\",\"commission\":\"yes\",\"scalping\":\"no\",\"hedging\":\"yes\",\"expert_advisors\":\"no\",\"lowest_spread\":\"dfgfdg\",\"trading_instrument\":\"dfgsdfg\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"yes\",\"mobile_trading\":\"no\",\"web_based_trading\":\"yes\",\"customer_support_lang\":\"dfgdfsg\",\"email_hone_support\":\"yes\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"yes\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1543921212.jpg', '', '2', 'no', '2018-12-04 05:00:12', '2018-12-09 01:05:07'),
(18, '{\"_method\":\"PATCH\",\"_token\":\"7uYg4BonJ3V2tQcilV2xj23rELSVRl750unf5epN\",\"broker_name\":\"fddfs\",\"country\":\"dfgdfsgsdfgd\",\"status\":\"2\",\"website\":\"dfgdfs\",\"headquartered\":\"dfgdsfg\",\"founder_in\":\"dfgdsfg\",\"regulating_authority\":\"dfgdfsg\",\"us_client\":\"yes\",\"broker_status\":\"dsfgdfsg\",\"broker_type\":\"gfdgdfs\",\"telephone\":\"dfgfd\",\"fax\":\"dfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"gfdgdsfgsdfg\",\"web_language\":\"dfgsdfgdsfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgdsfgdf\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgsdfgdsf\",\"max_leverage\":\"dfgsdfgsdf\",\"min_order_vol\":\"dfsgsdfg\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgsdfgsd\",\"news_feed_stream\":\"yes\",\"charting_pack\":\"no\",\"trading_signal\":\"yes\",\"market_commentary\":\"yes\",\"customer_service_time\":\"dfgdfsg\",\"trade_over_phone\":\"yes\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdsfg\",\"free_vps\":\"yes\",\"segregeted_acc\":\"yes\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"yes\",\"pamm_mam\":\"dfgdfg\",\"deposite_option\":\"dfgsdfg\",\"withdrawal_opt\":\"dfgdfsg\",\"trading_platform\":\"dfgdsfg\",\"precision_pricing\":\"dfsgdfg\",\"spread_type\":\"dfgsdfg\",\"commission\":\"yes\",\"scalping\":\"no\",\"hedging\":\"yes\",\"expert_advisors\":\"no\",\"lowest_spread\":\"dfgfdg\",\"trading_instrument\":\"dfgsdfg\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"yes\",\"mobile_trading\":\"no\",\"web_based_trading\":\"yes\",\"customer_support_lang\":\"dfgdfsg\",\"email_hone_support\":\"yes\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"yes\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1543921212.jpg', 'first', '2', 'no', '2018-12-04 05:00:12', '2018-12-09 01:05:07'),
(19, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'no', '2018-12-06 00:04:39', '2018-12-09 01:22:49'),
(20, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'no', '2018-12-06 00:04:39', '2018-12-09 01:22:49'),
(21, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'no', '2018-12-06 00:04:39', '2018-12-09 01:22:49'),
(22, '{\"_method\":\"PATCH\",\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"position\":\"first\",\"broker_name\":\"dalibroker\",\"country\":\"Japan\",\"status\":\"2\",\"website\":\"werte.com\",\"headquartered\":\"gfdgdfgd\",\"founder_in\":\"dfgdfg\",\"regulating_authority\":\"fddfgdfg\",\"us_client\":\"yes\",\"broker_status\":\"dfgdfg\",\"broker_type\":\"dfgdfgdf\",\"telephone\":\"gdsfgdsfg\",\"fax\":\"dfgdfgdf\",\"email_support\":\"y@gmail.com\",\"international_office\":\"fgdfgdg\",\"web_language\":\"gdfgdfg\",\"demo_account\":\"yes\",\"min_deposit\":\"dfgsdfg\",\"ecn_deposit\":\"yes\",\"acc_currency\":\"dfgdfg\",\"max_leverage\":\"dfgdf\",\"min_order_vol\":\"fdgdf\",\"interest_margin\":\"yes\",\"os_compatibility\":\"dfgdf\",\"news_feed_stream\":\"no\",\"charting_pack\":\"yes\",\"trading_signal\":\"yes\",\"market_commentary\":\"no\",\"customer_service_time\":\"dfgdf\",\"trade_over_phone\":\"no\",\"deposit_bonus\":\"dfgdsfg\",\"first_deposite_bonus\":\"dfgdfs\",\"free_vps\":\"yes\",\"segregeted_acc\":\"no\",\"islamic_acc\":\"no\",\"institutional_acc\":\"yes\",\"vip_service\":\"no\",\"pamm_mam\":\"dfgdf\",\"deposite_option\":\"dfgdsfg\",\"withdrawal_opt\":\"fdgdfsg\",\"trading_platform\":\"dfgdf\",\"precision_pricing\":\"fgdfg\",\"spread_type\":\"dfgdfg\",\"commission\":\"no\",\"scalping\":\"yes\",\"hedging\":\"no\",\"expert_advisors\":\"yes\",\"lowest_spread\":\"gdfsg\",\"trading_instrument\":\"dfgdf\",\"one_click_execution\":\"no\",\"oco_orders\":\"yes\",\"managed_acc\":\"no\",\"email_alerts\":\"no\",\"mobile_alerts\":\"yes\",\"trailing_stops\":\"no\",\"mobile_trading\":\"no\",\"web_based_trading\":\"no\",\"customer_support_lang\":\"dfgfd\",\"email_hone_support\":\"no\",\"personal_acc_manager\":\"no\",\"trading_tools\":\"no\",\"other_promotion\":\"no\",\"trade_close_over_phone\":\"no\"}', '1544076279.jpg', '', '2', 'no', '2018-12-06 00:04:39', '2018-12-09 01:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `brokervideos`
--

CREATE TABLE `brokervideos` (
  `id` int(10) UNSIGNED NOT NULL,
  `brokerreview_id` int(11) NOT NULL,
  `video_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brokervideos`
--

INSERT INTO `brokervideos` (`id`, `brokerreview_id`, `video_info`, `created_at`, `updated_at`) VALUES
(3, 7, '{\"_token\":\"GgdgezQn2Es1FIKMKKZlbjBPVhVx5XI28t8mb573\",\"program\":[{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/nyZ8KCWazeo\",\"description\":\"fgdfsgsdfg\",\"day\":\"1\"},{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/nyZ8KCWazeo\",\"description\":\"fgdfsgdgdfg\",\"day\":\"2\"}]}', '2018-12-06 02:32:14', '2018-12-06 02:32:14'),
(6, 9, '{\"_token\":\"Mu9Ux2WMUsr4CTvjPDYTLg4mVM67VQWs2OOMSEvG\",\"program\":[{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/AoCrFA8isEM\",\"description\":\"dfsgdfgdfgd\",\"day\":\"1\"},{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/AoCrFA8isEM\",\"description\":\"sdfsdfsdfsd\",\"day\":\"2\"},{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/V6qhKzAKsSs\",\"description\":\"tytryrtyrtyrt\",\"day\":\"3\"},{\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/V6qhKzAKs\",\"description\":\"fghfghfghfghfg\",\"day\":\"4\"}]}', '2018-12-06 06:17:51', '2018-12-06 06:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Forex Market study', 1, '2018-11-25 18:00:00', '2018-11-25 18:00:00'),
(2, 'Forex Market  Stretegy', 1, '2018-11-26 01:28:10', '2018-11-26 02:05:35'),
(3, 'Forex Anyalysis', 1, '2018-11-26 01:29:16', '2018-11-27 01:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `analysis_id` int(11) NOT NULL,
  `likes_count` int(11) NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `name`, `analysis_id`, `likes_count`, `comment`, `created_at`, `updated_at`) VALUES
(29, 'mahbubsprint@gmail.com', 'Mahbub Hossain', 2, 0, 'uuuuuu', '2018-12-01 23:58:41', '2018-12-01 23:58:41'),
(30, 'mahbubsprint@gmail.com', 'Mahbub Hossain', 2, 0, 'pppp', '2018-12-01 23:58:46', '2018-12-01 23:58:46'),
(31, 'mahbubsprint@gmail.com', 'Mahbub Hossain', 2, 0, 'ggggg8iyuiytu', '2018-12-02 00:04:38', '2018-12-11 06:04:09'),
(32, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 2, 0, 'Demo commetn will go here', '2018-12-02 00:19:12', '2018-12-11 07:42:56'),
(33, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 2, 3, 'My comment will go there', '2018-12-10 06:00:36', '2018-12-11 07:38:21'),
(35, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 0, 'here is comment', '2018-12-11 07:51:01', '2018-12-11 07:51:01'),
(36, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 1, 'next commetn', '2018-12-11 07:54:05', '2018-12-11 09:13:26'),
(37, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 0, 'fghfdghfg', '2018-12-11 07:58:47', '2018-12-11 08:07:54'),
(38, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 1, 'test commeknt', '2018-12-11 08:00:15', '2018-12-12 00:49:56'),
(50, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 1, 'wertwerterter', '2018-12-12 00:54:19', '2018-12-12 00:55:54'),
(51, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 0, 'dfgsdfgsdf', '2018-12-12 01:20:13', '2018-12-12 01:20:13'),
(52, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', 3, 0, 'ghtrhytyutru', '2018-12-12 01:29:34', '2018-12-12 01:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfos`
--

CREATE TABLE `companyinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `soft_del` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cat_id`, `title`, `description`, `status`, `soft_del`, `created_at`, `updated_at`) VALUES
(1, 1, 'ফরেক্স কি ?', '<p>ফরেক্স অথবা স্পট ফরেক্স হচ্ছে বৈদেশিক মুদ্রার ক্রয়-বিক্রয়। ফরেক্স মার্কেট এ আপনি একটি দেশের কারেন্সি বিক্রয় করে আর একটি দেশের কারেন্সি ক্রয় করতে পারবেন। উদহারণসরুপ, আমেরিকা বা USA এর কারেন্সি হছে ডলার, ব্রিটেন বা UK এর কারেন্সি হচ্ছে পাউন্ড। ফরেক্স মার্কেট এ আপনি ডলার বিক্রয় করে পাউন্ড অথবা পাউন্ড বিক্রয় করে ডলার কিনতে পারেন। ডলার অথবা পাউন্ড ব্যাতিতও আর বিভিন্ন দেশের কারেন্সি আছে যা ফরেক্স মার্কেট এ আপনি ক্রয়-বিক্রয় করতে পারেন।</p>', 1, 'no', '2018-11-25 18:00:00', '2018-11-26 04:49:32'),
(2, 1, 'ফরেক্স VS স্টক মার্কেট', '<p>ফরেক্স ও স্টক মার্কেট দুটি মার্কেট সম্পূর্ণ ভিন্ন ও স্বাধীন মার্কেট । আর স্টক মার্কেট হল যে দেশ সে দেশের মধ্য সীমাবদ্ধ । কিন্ত ফরেক্স হল সারা বিশ্বব্যাপি ব্যাপক বিস্তৃতির মার্কেট । আমি মনে করি যে ফরেক্স মার্কেট হল স্টক মার্কেটের থেকে অনেক কিছু দিয়েেই ভিন্ন । কেননা ফরেক্স হল দ্বিমুখি মার্কেট , কিন্ত স্টক মার্কেট হল একমুখি মার্কেট । তাই এই বিষয়ে সন্দেহ পোষণ না করাইফরেক্স ও স্টক মার্কেট দুটি মার্কেট সম্পূর্ণ ভিন্ন ও স্বাধীন মার্কেট । আর স্টক মার্কেট হল যে দেশ সে দেশের মধ্য সীমাবদ্ধ । কিন্ত ফরেক্স হল সারা বিশ্বব্যাপি ব্যাপক বিস্তৃতির মার্কেট । আমি মনে করি যে ফরেক্স মার্কেট হল স্টক মার্কেটের থেকে অনেক কিছু দিয়েেই ভিন্ন । কেননা ফরেক্স হল দ্বিমুখি মার্কেট , কিন্ত স্টক মার্কেট হল একমুখি মার্কেট । তাই এই বিষয়ে সন্দেহ পোষণ না করাই ভাল । আরো বেশি জানতে হলে এই বিষয়ে স্টাডি করতে হবে । ভাল । আরো বেশি জানতে হলে এই বিষয়ে স্টাডি করতে হবে ।</p>', 1, 'no', '2018-11-26 04:25:52', '2018-11-26 04:25:52'),
(3, 2, 'তানভীর, নাসিম ভাই সহ বিডি ফরেক্সের সকল উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।', '<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া করে কমেন্ট করবেন।অনেক উপকার হবে।</p>', 1, 'no', '2018-11-27 01:50:28', '2018-11-27 01:50:28'),
(4, 3, 'অনলাইন গেটওয়ের মাধ্যমে ৫০০০ ডলার পর্যন্ত আনা যাবে', '<p>সেবা রপ্তানির অর্থ এখন থেকে অনলাইন পেমেন্ট গেটওয়ে সার্ভিস প্রোভাইডারদের (ওপিজিএসপি) মাধ্যমে একবারে পাঁচ হাজার ডলার পর্যন্ত দেশে আনা যাবে। এ জন্য কোনো পূর্বানুমতি নেওয়ার প্রয়োজন হবে না। আগে একবার লেনদেনে দুই হাজার ডলার পর্যন্ত আনা যেত।<br />\r\nদেশের ফ্রিল্যান্সাররা যাতে তাঁদের উপার্জিত অর্থ বিদেশ থেকে সহজে সংগ্রহ করতে পারেন, সে জন্যই নতুন পদক্ষেপটি নেওয়া হয়েছে। বাংলাদেশ ব্যাংকের বৈদেশিক মুদ্রানীতি বিভাগ গতকাল মঙ্গলবার এ ব্যাপারে একটি প্রজ্ঞাপন জারি করেছে।<br />\r\nওপিজিএসপি সেবা দেওয়ার জন্য ২০১১ সালের আগস্টে বাণিজ্যিক ব্যাংকগুলোকে অনুমোদন দেয় বাংলাদেশ ব্যাংক। কেন্দ্রীয় ব্যাংকের তথ্যমতে, বাংলাদেশ থেকে বর্তমানে অনলাইনে ডেটা এন্ট্রি ও প্রসেসিং, বিজনেস প্রসেসিং, বিজনেস প্রসেস আউটসোর্সিং, অফশোর তথ্যপ্রযুক্তি প্রভৃতি কাজের মাধ্যমে সেবা রপ্তানি হচ্ছে। এসব সেবা থেকে অর্জিত অর্থ এর আগে ব্যাংকব্যবস্থার মাধ্যমে আনতে হতো। এতে বিদেশের অনেক প্রতিষ্ঠান অর্থ পরিশোধে বিব্রত বোধ করত। কেননা বেশির ভাগ দেশে এ ধরনের সেবার বিপরীতে অর্থ অনলাইনে পরিশোধ করা হয়।<br />\r\nওপিজিএসপি সেবা দিতে আন্তর্জাতিক অনলাইন পেমেন্ট কোম্পানি অ্যালার্টপে ২০১২ সালে বাংলাদেশে কার্যক্রম শুরু করে।</p>', 1, 'no', '2018-11-27 01:51:27', '2018-12-10 07:07:33'),
(5, 2, 'প্রফেশনাল ট্রেডারদের দৃষ্টিতে জেনে নিন, কেন আপনি লস করে চলেছেন? আর কিভাবে এই লস কাটিয়ে প্রফিটে ফিরবেন।', '<p>একথা নতুন করে বলার কিছু নাই যে, ফরেক্স মার্কেট বিশ্বের সবচেয়ে বড় লিকুইডিটি মার্কেট। যেখানে ট্রিলিয়ন ট্রিলিয়ন ডলার লেনদেন হয় প্রতিদিন। এই মার্কেটে আমার আপনার মত যারা ট্রেড করি তারা শুরুতেই একটা কথা শুনে আসি যে, এই মার্কেটে ৯৫% লুজার!! কিন্ত কেন এতো বড় অংশ লুজার তা কি কেউ জানি??<br />&nbsp;</p>\r\n<p>=&gt; আজ এই লেখায়&nbsp;আপনি অনেক নতুন বিষয় জানতে চলেছেন, তা হয়তো আপনি আগে ভাবেননি কখনো। অথবা ভেবেছেন, কিন্ত সিরিয়াস&nbsp;হিসেবে নেন নি কখনো অথবা জেনেও থাকতে পারেন, কিন্ত ততোটা গুরুত্ব দেননি। আজ থেকে সেসব গুরুত্ব দিতে শিখবেন আশা করছি।<br />হাতে সময় আছে তো? একটু সময় নিয়ে লেখাটা পড়ুন। বোঝার চেষ্ঠা করুন। দরকার হলে আরেকবার পড়ুন। নয়তো বুকমার্কে সেইভ করে রাখুন, আপনার ফেসবুক ওয়ালেও শেয়ার করে রাখুন যাতে সবাই জানতে পারে ফরেক্স মার্কেটের এই নিগুঢ়&nbsp;রহস্যের ব্যাপারে।</p>\r\n<p style=\"padding-left: 80px;\"><img src=\"/photos/1/15407467431319141330op.jpg\" alt=\"\" width=\"444\" height=\"148\" /></p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p style=\"padding-left: 120px;\"><img src=\"/photos/1/googlelogo_color_272x92dp.png\" alt=\"\" width=\"450\" height=\"150\" /></p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>\r\n<p>ভাই আমি ফরেক্সে একে বারে নতুন।আমি এক ট্রিনিং সেন্টারে দুই মাস ফরেক্স শিখে মনে হচ্ছিল যে তেমন ভাল শিখাচ্ছে না, তাই ভাল ভাবে ফরেক্স শিখতে একাই googling করতে ছিলাম। এর মধ্যে কোন এক ফাঁকে বিডি ফরেক্সের সন্ধান পাই।আমার কাছে মনে হচ্ছে ফরেক্স শিখার ক্ষেত্রে বিডি ফরেক্সের কোন বিকল্প নেই।তাই আমি সিদ্ধান্ত নিয়েছি যদি আমি ফরেক্স করে সফল হই তাহলে এর উদ্যোগতা ভাইদের মিষ্টি খা্ওয়াবো।</p>\r\n<p>&nbsp;আমি ৪ মাসের অভিঙ্গতায় এই টুকু নিশ্চিত যে ফরেক্স একটি স্মার্ট ব্যবসা সে ব্যাপারে আমার কোন সন্দেহ নেই।তবে বিডি ফরেক্সের অনেক পুরাতন এক সদস্যের সাথে কথা বলে আমি খুব হতাশ হয়েছি।সে বল্ল যে, বাংলাদেশে নাকি ফরেক্সে ধারাবাহিক ভাবে সফল এমন কোন ব্যক্তি নেই।তাই আপনাদের নিকট&nbsp;একটি বিণীত আবেদন এই যে-যদি এমন কেউ থেকে থাকেন যে কিনা কমপক্ষে&nbsp; এক বছর ধারাবাহিক ভাবে মুনাফা করেছেন।তাহলে দয়া</p>', 1, 'no', '2018-11-27 02:06:39', '2018-12-10 06:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'usd/uad', 'reeewwe', NULL, NULL),
(2, 'test', '1544701739.jpg', '2018-12-13 05:48:59', '2018-12-13 05:48:59'),
(11, 'সাত দফার এক দফাও মানা হবে না : কাদের', '1544706750.jpg', '2018-12-13 07:12:30', '2018-12-13 07:12:30'),
(12, 'সাত দফার এক দফাও মানা হবে না : কাদের', 'currencyimages/1544708512.jpg', '2018-12-13 07:41:52', '2018-12-13 07:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `fxbrokerreviews`
--

CREATE TABLE `fxbrokerreviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `brokerreview_id` int(11) NOT NULL,
  `fxreview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fxbrokerreviews`
--

INSERT INTO `fxbrokerreviews` (`id`, `brokerreview_id`, `fxreview`, `created_at`, `updated_at`) VALUES
(1, 9, '<p>dummy data will go here&nbsp;&nbsp;</p>', '2018-12-06 05:34:52', '2018-12-06 05:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `Phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mike', 'mike@gmail.com', '123456', 'Here is my Message', '2018-12-02 06:54:26', '2018-12-02 06:54:26'),
(2, 'Rijwan', 'rejwan@gamil.com', '01789', 'My message will go her..', '2018-12-10 06:43:31', '2018-12-10 06:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_26_054012_create_categories_table', 2),
(4, '2018_11_26_063616_create_categories_table', 3),
(5, '2018_11_26_082143_create_courses_table', 4),
(6, '2018_11_26_114348_create_articles_table', 5),
(7, '2018_11_27_074937_create_analaysis_table', 6),
(8, '0000_00_00_000000_create_visits_table', 7),
(9, '2018_12_01_094751_create_comments_table', 8),
(10, '2018_12_01_121833_create_articlecomments_table', 9),
(11, '2018_12_02_062418_create_questions_table', 10),
(12, '2018_12_02_124756_create_messages_table', 11),
(13, '2018_12_03_073123_create_companyinfos_table', 12),
(14, '2018_12_03_074038_create_brokerreviews_table', 12),
(15, '2018_12_04_063601_create_reviews_table', 13),
(16, '2018_12_06_074025_create_brokervideos_table', 14),
(17, '2018_12_06_105409_create_brokerprocons_table', 15),
(18, '2018_12_06_112608_create_fxbrokerreviews_table', 16),
(19, '2018_12_13_081700_create_currencies_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_release`
--

CREATE TABLE `press_release` (
  `id` int(10) UNSIGNED NOT NULL,
  `source_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_release`
--

INSERT INTO `press_release` (`id`, `source_tag`, `source_link`, `detail_tag`, `detail_link`, `created_at`, `updated_at`) VALUES
(2, 'dailyfxfghfgh', 'https://www.dailyfx.com/technical-analysis', 'Market Overviewfghfgh', 'https://www.dailyfx.com/market-news?ref=SubNav', '2018-12-05 04:38:22', '2018-12-10 07:37:55'),
(3, 'forex', 'https://www.forex.com/en/', 'Shares Trading', 'https://www.forex.com/en/markets/shares/', '2018-12-05 05:45:25', '2018-12-05 05:45:25'),
(4, 'Forex - FX', 'https://www.investopedia.com/terms/f/forex.asp', 'Square\'s Stock May Rise 13% Short-Term', 'https://www.investopedia.com/news/squares-stock-may-rise-13-shortterm/', '2018-12-05 12:02:01', '2018-12-05 12:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(2, 'demo?', '<p>sdfasdfs</p>', '1', '2018-12-02 01:09:09', '2018-12-02 01:09:09'),
(3, 'another demo', '<p>answer</p>', '1', '2018-12-02 01:20:17', '2018-12-02 01:20:17'),
(4, 'Agani demo', '<p>test demo</p>', '1', '2018-12-02 01:44:00', '2018-12-02 01:44:00'),
(5, 'fgdfg', '<p>dfsgdsfgds</p>', '1', '2018-12-02 02:05:50', '2018-12-02 02:05:50'),
(6, 'dfgdsf', '<p>dfgdfsgdf</p>', '1', '2018-12-02 02:06:03', '2018-12-02 02:06:03'),
(7, 'dfgdsf', '<p>dfgdfsgdf</p>', '1', '2018-12-02 02:06:15', '2018-12-02 02:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating11` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brokerreview_id` int(11) NOT NULL,
  `likes_count` int(11) NOT NULL DEFAULT '0',
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `name`, `rating11`, `comment`, `brokerreview_id`, `likes_count`, `posted_at`) VALUES
(21, 'mahbubsprint@gmail.com', 'Mahbub Hossain', '3', 'my review will go there', 7, 4, '2018-12-12 06:15:21'),
(22, 'mahbubsprint310@gmail.com', 'Mahabub Hossain', '3', 'ertewrtertefdsgdsfgdfffff', 7, 0, '2018-12-13 06:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `themeid` int(11) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `themeid`, `updated_at`) VALUES
(1, 3, '2018-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Td6BNvaj6C8VSny10nykOeQNB51gbgS4YcgQTqZpEe3OxlqYP6GgO', 'NM46MCVt3ufdcFzk241Hut1aMi7Yv4YbZmLJ8HoqIl3cYvcyYtEKFYW6hqwy', '2018-11-25 23:57:24', '2018-11-25 23:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitable_id` int(11) NOT NULL,
  `visitable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `ip`, `visitable_id`, `visitable_type`, `date`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 2, 'App\\Analysis', '2018-11-29', '2018-11-29 04:20:45', '2018-11-29 04:20:45'),
(2, '127.0.0.1', 1, 'App\\Analysis', '2018-11-29', '2018-11-29 04:21:06', '2018-11-29 04:21:06'),
(3, '127.0.0.1', 2, 'App\\Analysis', '2018-12-01', '2018-12-01 03:24:57', '2018-12-01 03:24:57'),
(4, '127.0.0.1', 1, 'App\\Analysis', '2018-12-01', '2018-12-01 03:27:49', '2018-12-01 03:27:49'),
(5, '127.0.0.1', 2, 'App\\Analysis', '2018-12-02', '2018-12-01 23:39:02', '2018-12-01 23:39:02'),
(6, '127.0.0.1', 2, 'App\\Analysis', '2018-12-03', '2018-12-03 03:49:52', '2018-12-03 03:49:52'),
(7, '127.0.0.1', 2, 'App\\Analysis', '2018-12-08', '2018-12-08 02:41:26', '2018-12-08 02:41:26'),
(8, '127.0.0.1', 1, 'App\\Analysis', '2018-12-08', '2018-12-08 04:00:04', '2018-12-08 04:00:04'),
(9, '127.0.0.1', 7, 'App\\Article', '2018-12-08', '2018-12-08 05:24:00', '2018-12-08 05:24:00'),
(10, '127.0.0.1', 6, 'App\\Article', '2018-12-08', '2018-12-08 05:24:51', '2018-12-08 05:24:51'),
(11, '127.0.0.1', 9, 'App\\Article', '2018-12-09', '2018-12-09 02:50:39', '2018-12-09 02:50:39'),
(12, '127.0.0.1', 8, 'App\\Article', '2018-12-09', '2018-12-09 02:51:57', '2018-12-09 02:51:57'),
(13, '127.0.0.1', 10, 'App\\Article', '2018-12-10', '2018-12-10 04:53:55', '2018-12-10 04:53:55'),
(14, '127.0.0.1', 9, 'App\\Article', '2018-12-10', '2018-12-10 04:55:33', '2018-12-10 04:55:33'),
(15, '127.0.0.1', 2, 'App\\Analysis', '2018-12-10', '2018-12-10 04:58:55', '2018-12-10 04:58:55'),
(16, '127.0.0.1', 2, 'App\\Analysis', '2018-12-11', '2018-12-10 23:39:14', '2018-12-10 23:39:14'),
(17, '127.0.0.1', 10, 'App\\Article', '2018-12-11', '2018-12-11 02:57:47', '2018-12-11 02:57:47'),
(18, '127.0.0.1', 3, 'App\\Analysis', '2018-12-11', '2018-12-11 03:25:19', '2018-12-11 03:25:19'),
(19, '127.0.0.1', 9, 'App\\Article', '2018-12-11', '2018-12-11 07:43:41', '2018-12-11 07:43:41'),
(20, '127.0.0.1', 2, 'App\\Analysis', '2018-12-12', '2018-12-12 00:02:45', '2018-12-12 00:02:45'),
(21, '127.0.0.1', 3, 'App\\Analysis', '2018-12-12', '2018-12-12 00:03:06', '2018-12-12 00:03:06'),
(22, '127.0.0.1', 10, 'App\\Article', '2018-12-12', '2018-12-12 00:04:48', '2018-12-12 00:04:48'),
(23, '192.168.0.16', 3, 'App\\Analysis', '2018-12-12', '2018-12-12 00:28:32', '2018-12-12 00:28:32'),
(24, '192.168.0.12', 3, 'App\\Analysis', '2018-12-12', '2018-12-12 01:42:17', '2018-12-12 01:42:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement_page`
--
ALTER TABLE `advertisement_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articlecomments`
--
ALTER TABLE `articlecomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brokerprocons`
--
ALTER TABLE `brokerprocons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brokerreviews`
--
ALTER TABLE `brokerreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brokervideos`
--
ALTER TABLE `brokervideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinfos`
--
ALTER TABLE `companyinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fxbrokerreviews`
--
ALTER TABLE `fxbrokerreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `press_release`
--
ALTER TABLE `press_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visits_ip_visitable_id_visitable_type_date_unique` (`ip`,`visitable_id`,`visitable_type`,`date`),
  ADD KEY `visits_ip_index` (`ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `advertisement_page`
--
ALTER TABLE `advertisement_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articlecomments`
--
ALTER TABLE `articlecomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brokerprocons`
--
ALTER TABLE `brokerprocons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brokerreviews`
--
ALTER TABLE `brokerreviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brokervideos`
--
ALTER TABLE `brokervideos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `companyinfos`
--
ALTER TABLE `companyinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fxbrokerreviews`
--
ALTER TABLE `fxbrokerreviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `press_release`
--
ALTER TABLE `press_release`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
