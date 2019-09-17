-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2019 at 09:21 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolshark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `email_verified_at`) VALUES
(1, 'Super Admin', 'Superadmin', 'admin@schoolshark.co', '$2y$10$POZ51SN2zFutZ3.fCms8CuzFldBexXkVkJLLlNJkndzuMxfKjkNfq', '48294.png', 'ZuCs44gw4H8cES9DOUNIm0cAWcXMXzmhV2pZLHcH7WtebgOARRTaCseCb53I', '2019-06-20 13:00:00', '2019-07-22 13:30:00', '2019-06-17 02:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `book_id`, `author`, `created_at`, `updated_at`) VALUES
(1, 1, 'Colin Baird', '2019-07-11 11:05:15', '2019-08-07 13:32:25'),
(2, 1, 'Michael Cann', '2019-07-11 11:05:15', '2019-08-07 13:32:25'),
(3, 2, 'Patrick L. Brezonik', '2019-07-11 11:12:37', '2019-08-05 10:26:44'),
(4, 2, 'William A. Arnold', '2019-07-11 11:12:37', '2019-08-05 10:26:44'),
(5, 3, 'Raymond Chang', '2019-07-11 11:15:12', '2019-08-07 13:47:04'),
(6, 4, 'Robert W. Bauman', '2019-07-11 11:17:34', '2019-07-22 10:04:10'),
(7, 5, 'Victoria E. McMillan', '2019-07-11 11:19:53', '2019-07-11 11:19:53'),
(8, 6, 'Molecular Visions', '2019-07-11 11:26:02', '2019-07-11 11:27:31'),
(9, 7, 'Freeman', '2019-07-11 11:29:19', '2019-07-11 11:29:19'),
(10, 7, 'Quillin', '2019-07-11 11:29:19', '2019-07-11 11:29:19'),
(11, 7, 'Allison', '2019-07-11 11:29:19', '2019-07-11 11:29:19'),
(12, 8, 'ZZZ', '2019-07-12 06:25:51', '2019-08-05 11:02:56'),
(13, 9, 'dfdf', '2019-07-12 12:03:46', '2019-08-07 14:17:19'),
(14, 10, 'ASA', '2019-07-25 10:30:42', '2019-08-01 12:29:05'),
(16, 12, 'Adam', '2019-07-25 12:31:23', '2019-08-26 11:07:53'),
(17, 12, 'Paul', '2019-07-25 12:34:44', '2019-08-26 11:07:53'),
(19, 12, 'Greme smith', '2019-07-26 07:43:13', '2019-08-26 11:07:53'),
(20, 14, 'Joseph Murphy', '2019-07-26 08:55:56', '2019-08-05 10:35:18'),
(21, 15, 'xyz', '2019-07-26 10:15:48', '2019-08-26 11:08:45'),
(22, 16, 'John let', '2019-07-26 11:54:14', '2019-07-29 07:23:07'),
(23, 18, 'SDS', '2019-07-29 07:17:04', '2019-07-29 07:17:04'),
(24, 19, 'Dinaw Mengestu', '2019-07-29 10:52:34', '2019-07-29 10:52:34'),
(25, 20, 'test67', '2019-07-30 06:45:01', '2019-08-02 07:21:36'),
(26, 20, 'test67', '2019-07-30 06:45:01', '2019-08-02 07:21:36'),
(27, 21, 'test67', '2019-07-30 06:48:45', '2019-07-30 06:48:45'),
(28, 23, 'test67', '2019-07-30 06:55:10', '2019-07-30 06:55:10'),
(29, 25, 'drub', '2019-07-30 07:29:02', '2019-07-30 07:29:13'),
(30, 26, 'Priyanka', '2019-07-30 08:14:48', '2019-09-13 11:13:27'),
(31, 27, 'Zen45', '2019-07-30 08:28:14', '2019-07-30 08:28:14'),
(32, 28, 'Demo Author', '2019-07-30 08:39:35', '2019-07-30 09:47:45'),
(33, 29, 'demo', '2019-07-30 11:09:34', '2019-07-30 11:19:17'),
(34, 30, 'Demo Author 2', '2019-07-30 12:10:56', '2019-07-30 14:03:18'),
(35, 30, 'dmo 234', '2019-07-30 12:10:57', '2019-07-30 14:03:18'),
(36, 31, 'sds', '2019-08-02 07:34:55', '2019-08-05 07:07:24'),
(37, 32, 'hghj', '2019-08-05 07:52:12', '2019-08-05 07:52:12'),
(38, 2, 'Colin Baird', '2019-08-05 10:26:44', '2019-08-05 10:26:44'),
(39, 33, 'ADA', '2019-08-06 06:33:20', '2019-08-06 06:33:20'),
(40, 34, 'EM', '2019-08-07 06:41:32', '2019-08-08 08:14:54'),
(41, 35, 'TechM', '2019-08-07 07:51:38', '2019-08-07 07:51:38'),
(42, 36, 'Bingo', '2019-08-16 11:59:14', '2019-08-16 11:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `meta_title`, `meta_desc`, `feature_image`, `title`, `content`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Florida man drives golf cart into Walmart as deputies chase him with a taser', 'Florida man drives golf cart into Walmart as deputies chase him with a taser', '42848.jpg', 'Florida man drives golf cart into Walmart as deputies chase him with a taser', '<h1><strong>Florida Man Chronicles</strong></h1>\r\n\r\n<p>Some days there just isn&#39;t a whole lot of news or topics to write about. So when that happens, a staple has always been to just type in &quot;Florida man&quot; into the &#39;ole google search and see what happened that at this point is normal in Florida today.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I want to say that I have become used to these headlines, but after doing this search for weeks it never ceases to amaze me the things that these Florida men get themselves into.</p>\r\n\r\n<p>The beauty of this headline is that there are three parts to this story to address.</p>\r\n\r\n<h3>&quot;Florida man drives golf cart into Walmart&quot;</h3>', 'florida-man-drives-golf-cart-into-walmart-as-deputies-chase-him-with-a-taser', 'John Campisi', '2019-08-27 14:52:11', '2019-08-29 14:51:41'),
(3, 'You got to your dorm first huh', 'You got to your dorm first huh', '68851.jpg', 'You got to your dorm first huh', '<p>So you got to the dorm room first huh?</p>\r\n\r\n<p>This will be a quick read, but it&#39;s important.</p>\r\n\r\n<p>I think this may be one of the most important parts of the entire move in process that not enough people value and take advantage of.&nbsp;</p>\r\n\r\n<p>Think about it, you have the freedom to set the tone for the entire year! There are so many little things that the average person may not pick up on that someone who knows what to do can do to make their set up so much better than their roommates without them even knowing it. Here is another checklist to help you make sure that you address all of your opportunities before your roommate gets there.</p>\r\n\r\n<h2>#1 PICK YOUR FURNITURE</h2>\r\n\r\n<p>Go through all of the furniture and claim the nicer ones as yours. The last thing you want is to be finally thinking that you and your roommate are going to be best friends and then have your bed collapse halfway through the semester.</p>', 'you-got-to-your-dorm-first-huh', 'John Campisi', '2019-08-29 15:11:21', '2019-08-29 15:11:21'),
(4, 'Why I helped Start School Shark', 'Why I helped Start School Shark', '23458.png', 'Why I helped Start School Shark', '<p><em>My team and I at School Shark are committing to producing content more consistently to help our audience better understand who we are and what our mission is. Our first goal is to all tell our story of how and why we started School Shark. This article marks part 2 of my story.</em></p>\r\n\r\n<p>Picking up where I left off on my previous article, my team and I were at the point where we had finally found a problem in the world that applied to us and was applicable to all of those around us. We recognized that the price of college textbooks was a problem that needed to be solved, yet we did not have a solution yet.</p>\r\n\r\n<p><strong>The important part was that we finally had a problem to work toward solving, which got us real fired up to start brainstorming.</strong></p>\r\n\r\n<p>This was when the fun started.</p>\r\n\r\n<p>We started brainstorming on ways to eliminate the unfair price increases that bookstores do on used books and the first idea we came up with was to buy the books back from students for more than what competitors offered, and then sell it for cheaper than the competitors offered. After doing the math we quickly discarded that idea.</p>\r\n\r\n<p>Being the &quot;broke college students&quot; that we were, we didn&#39;t have the capital or the space in our 12x12 dorm rooms to make that idea actually logistically work.</p>\r\n\r\n<p><img alt=\"\" src=\"http://3.13.59.159/schoolsharks/public/images/blog/8585boy.png\" style=\"height:520px; width:758px\" /></p>', 'why-i-helped-start-school-shark', 'Weston Lombard', '2019-08-29 15:12:21', '2019-08-30 15:02:05'),
(5, 'New Blog', 'New Blog', '40973.jpg', 'New Blog', '<p>New Blog</p>', 'new-blog', 'John Campisi', '2019-09-13 10:04:11', '2019-09-13 10:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(10, 4, 2, '2019-09-03 15:17:45', '2019-09-03 15:17:45'),
(11, 1, 3, '2019-09-03 15:18:03', '2019-09-03 15:18:03'),
(12, 1, 1, '2019-09-03 15:18:03', '2019-09-03 15:18:03'),
(13, 3, 1, '2019-09-03 15:18:11', '2019-09-03 15:18:11'),
(14, 5, 2, '2019-09-13 10:04:11', '2019-09-13 10:04:11'),
(15, 5, 6, '2019-09-13 10:04:22', '2019-09-13 10:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `isbn_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_desc` text COLLATE utf8mb4_unicode_ci,
  `org_price` double(8,2) NOT NULL,
  `perc_org_price` double(8,2) NOT NULL,
  `listing_price` double(8,2) NOT NULL,
  `perc_listing_price` double(8,2) NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `top_picks` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int(10) NOT NULL,
  `weight` float(10,2) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `admin_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `cat_id`, `isbn_no`, `book_desc`, `org_price`, `perc_org_price`, `listing_price`, `perc_listing_price`, `school_name`, `book_condition`, `publish`, `top_picks`, `quantity`, `weight`, `user_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'CHE-246: Environmental Chemistry', 1, '978-1-4292-7704-4', NULL, 50.00, 62.50, 40.00, 50.00, 'Aukamm Elementary School', 'Good', 1, 1, 4, 2.00, 8, 0, '2019-07-11 11:05:15', '2019-08-05 13:12:10'),
(2, 'CHE-246: Water Chemistry', 1, '978-0-19-973072-8', NULL, 70.00, 87.50, 60.00, 75.00, 'Little Harbor Elementary School', 'Good', 1, 1, 1, 2.10, 8, 0, '2019-07-11 11:12:37', '2019-08-05 13:16:18'),
(3, 'CHE 107- General Chemistry', 1, '978-0-07-762333-3', NULL, 80.00, 100.00, 70.00, 87.50, 'Marion Cross School', 'Good', 1, 1, 7, 2.10, 8, 0, '2019-07-11 11:15:12', '2019-08-20 12:27:22'),
(4, 'BIO-218: Fundamentals of Microbiology', 1, '978-0-13-414117-6', NULL, 65.00, 81.25, 55.00, 68.75, 'Aukamm Elementary School', 'Good', 1, 1, 2, 2.10, 8, 0, '2019-07-11 11:17:34', '2019-08-05 13:27:49'),
(5, 'BIO-101 Writing Papers in the Biological Sciences', 1, '978-0-312-64971-5', NULL, 25.00, 31.25, 15.00, 18.75, 'Marion Cross School', 'Good', 1, 1, 0, 1.50, 8, 0, '2019-07-11 11:19:53', '2019-08-05 13:27:51'),
(6, 'CHE-141 & 251 Organic Chemistry Model Kit', 1, '978-0-9648837-1-0', NULL, 20.00, 25.00, 10.00, 12.50, 'Aukamm Elementary School', 'Good', 1, 0, 4, 2.10, 8, 0, '2019-07-11 11:26:02', '2019-07-11 11:26:02'),
(7, 'BIO-101 & 102 Biological Science', 1, '978-0-321-74367', NULL, 45.00, 56.25, 35.00, 43.75, 'Marion Cross School', 'Good', 1, 0, 4, 2.10, 8, 0, '2019-07-11 11:29:19', '2019-07-11 11:29:19'),
(8, 'asasa', 4, '1212121221', '<p>asasas</p>', 200.00, 250.00, 165.00, 206.25, 'Aukamm Elementary School', 'asasas', 1, 0, 1, 2.30, 8, 0, '2019-07-12 06:25:51', '2019-08-05 11:02:56'),
(9, 'wewew', 3, 'erererer', '<p>1) It is test1</p>\r\n\r\n<p>2) It is test2</p>', 100.00, 125.00, 100.00, 125.00, 'Aukamm Elementary School', 'Good', 1, 0, 1, 2.10, 1, 0, '2019-07-12 12:03:46', '2019-08-01 12:41:06'),
(10, 'Arts', 5, 'Q23422', '<p>1) Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>2) Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</p>\r\n\r\n<p>3) when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>4) It has survived not only five centuries, but also the leap into electronic typesetting, r</p>\r\n\r\n<p>5) emaining essentially unchanged. It was popularised in the 1960s with the release.</p>', 788.00, 985.00, 445.00, 556.25, 'Qwer', 'New', 1, 0, 88, 2.10, 10, 0, '2019-07-25 10:30:42', '2019-08-01 12:29:05'),
(12, 'hello world', 11, '565-656-SFF', '<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</em></p>', 12.00, 15.00, 10.00, 12.50, 'St Stephen public school', 'good', 1, 0, 100, 2.10, 13, 0, '2019-07-25 12:31:23', '2019-08-26 11:07:53'),
(14, 'The Power of your Subconscious Mind', 18, '232-7333-7474', '<p>Did you know that your mind has a &#39;mind&#39; of its own? Yes! Without even realizing, our mind is often governed by another entity which is called the sub-conscious mind. This book can bring to your notice the innate power that the sub-conscious holds. We have some traits which seem like habits, but in reality these are those traits which are directly controlled by the sub-conscious mind, vis-&agrave;-vis your habits or your routine can be changed if you can control and direct your sub-conscious mind positively. To be able to control this &#39;mind power&#39; and use it to improve the quality of your life is no walk in the park. This is where this book acts as a guide and allows you to decipher the depths of the sub-conscious. In this book, &#39;The power of your subconscious mind&#39;, the author fuses his spiritual wisdom and scientific research to bring to light how the sub-conscious mind can be a major influence on our daily lives. Once you understand your subconscious mind, you can also control or get rid of the various phobias that you may have in turn opening a brand new world of positive energy. About the book The book is available in two types, the kindle edition as well as the paperback edition. The book contains 312 pages of wisdom and positive energy. The modern English language used is easy to understand. Book size: The book is sized at 19.6 x 13 x 2.5 cm which makes portable in nature. About the Author: Born in Ireland, Joseph Murphy was ordained in Devine Science and Religious Science. The way you see things will change completely after you finish reading this book. You can bag this book from Amazon.in today by following a few easy steps.</p>', 198.00, 247.50, 124.00, 155.00, 'Father Agnel convent school', NULL, 1, 0, 1, 2.10, 13, 0, '2019-07-26 08:55:56', '2019-08-05 10:14:06'),
(15, 'Kids Story', 3, '978-3-16-144410-0', '<p><em>Sawan presents this set of 8 story books including fun tales of Bosky and the Parcel, Buttercup Saves Smurf, Crystal and her Lying Ways, Dukey and her Umbrella, Ele and her Grandmother&#39;s Glasses, Glutty Learns his lesson, Nutty and Birdie, Pancy and the pot of honey. Your child will never run out of entertainment with this set. Specifications Brand - Sawan Type - Story book Age - 3 to 8 Years No. of Pages - 24 Language - English Binding - Pin binding Items included in package 6 Story books</em></p>', 10.00, 12.50, 8.00, 10.00, 'St Thomas school', 'Good', 1, 0, 2, 2.10, 19, 0, '2019-07-26 10:15:48', '2019-08-26 11:08:45'),
(16, 'AB genius Title', 16, 'Test School ABCD', 'This is new to dsdkjshfsf skjdfhsflkjdf dfkjdhfkjdsf3', 45.00, 56.25, 45.00, 56.25, 'AB genius', 'new', 1, 0, 1, 2.10, 18, 0, '2019-07-26 11:54:14', '2019-07-29 07:23:07'),
(18, 'FTS1', 6, '123 FTS', NULL, 345.00, 431.25, 234.00, 292.50, 'Qwer', 'old', 1, 1, -2, 2.10, 18, 0, '2019-07-29 07:17:04', '2019-08-20 13:21:23'),
(19, 'ENG 101- Howl and Other Poems', 4, '978-0-87286-017-95', NULL, 10.00, 12.50, 5.00, 6.25, 'Marion Cross School', 'Good', 1, 0, 3, 2.10, 10, 0, '2019-07-29 10:52:34', '2019-07-29 10:52:34'),
(20, 'test67', 13, 'test56', '<p>t1) est67 2) Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting , remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more re cently with de</p>', 34.00, 42.50, 12.00, 15.00, 'test67', 'test67', 0, 0, 3, 2.10, 10, 0, '2019-07-30 06:45:01', '2019-08-02 07:21:36'),
(21, 'test67', 7, 'test67', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 67.00, 83.75, 26.00, 32.50, 'test67', 'test67', 0, 0, 5, 2.10, 10, 0, '2019-07-30 06:48:45', '2019-07-31 07:35:30'),
(23, 'test67', 7, 'test89', 'test67\r\ntest67test67\r\ntest67test67\r\ntest67\r\ntest67\r\ntest67\r\ntest67test67test67test67test67test67test67\r\n\r\n\r\ntest67test67test67test67', 78.00, 97.50, 12.00, 15.00, 'test67', 'test67', 1, 0, 45, 2.10, 10, 0, '2019-07-30 06:55:10', '2019-07-30 06:55:10'),
(25, 'important', 16, 'Important 666', 'hekllo', 67.00, 83.75, 23.00, 28.75, 'seden', 'old', 1, 0, 1, 2.10, 18, 0, '2019-07-30 07:29:02', '2019-07-30 07:29:13'),
(26, 'Create Left Nav', 1, '1938168240', NULL, 10.00, 12.50, 5.00, 6.25, 'Marion Cross School', 'Good', 0, 0, 3, 2.10, 1, 0, '2019-07-30 08:14:48', '2019-09-13 11:13:27'),
(27, 'Zen45', 7, 'Zen45', 'Zen45 test', 67.00, 83.75, 31.00, 38.75, 'Zen45', 'Zen45', 1, 0, 1, 2.10, 18, 0, '2019-07-30 08:28:14', '2019-07-30 08:28:14'),
(28, 'Demo chemistry title', 1, 'arteu1234tu1', 'Demo description', 100.00, 125.00, 50.00, 62.50, 'New Boston school', 'New', 1, 0, 0, 2.10, 20, 0, '2019-07-30 08:39:35', '2019-07-30 09:35:21'),
(29, 'demo', 20, 'ibc', 'demo', 8.00, 10.00, 8.00, 10.00, 'demo school', 'New', 1, 0, 0, 2.10, 4, 0, '2019-07-30 11:09:34', '2019-07-30 11:19:17'),
(30, 'dummy', 20, 'idsc78945612', 'dummy', 12.00, 15.00, 10.00, 12.50, 'New Boston school dummy', 'demo contec', 1, 0, 0, 2.10, 8, 0, '2019-07-30 12:10:56', '2019-07-30 14:03:18'),
(31, 'Align 21', 1, 'Align 21', '<p>Hello</p>\r\n\r\n<p>This is a best edition</p>', 23.00, 28.75, 12.00, 15.00, 'memorial', 'old', 1, 0, 9, 2.10, 18, 0, '2019-08-02 07:34:55', '2019-08-05 07:07:24'),
(32, 'qwerty', 21, 'Q234299', '<p>this is new&nbsp;</p>\r\n\r\n<p>1</p>\r\n\r\n<p>2</p>\r\n\r\n<p>3</p>\r\n\r\n<p>4</p>\r\n\r\n<p>5</p>\r\n\r\n<p>6</p>\r\n\r\n<p>7</p>\r\n\r\n<p>8</p>\r\n\r\n<p>9</p>\r\n\r\n<p>thnaks</p>\r\n\r\n<p>cvbcncv</p>', 56.00, 70.00, 23.00, 28.75, 'qwerty', 'new', 1, 0, 1, 2.10, 10, 0, '2019-08-05 07:52:12', '2019-08-05 07:52:12'),
(33, 'ADA', 12, 'ADA', '<p>ADAADAADAADAADAADA</p>', 23.00, 28.75, 12.00, 15.00, 'ADA', 'ADA', 1, 0, 2, 2.10, 18, 0, '2019-08-06 06:33:20', '2019-08-06 06:33:20'),
(34, 'EM', 2, 'EM', '<p>EM</p>\r\n\r\n<p>EM</p>\r\n\r\n<p>EM</p>', 34.00, 42.50, 12.00, 15.00, 'EM', 'EM', 1, 0, 8, 2.10, 18, 0, '2019-08-07 06:41:32', '2019-08-08 08:14:54'),
(35, 'TechM', 4, 'TechM', '<p>TechM</p>\r\n\r\n<p>TechM</p>\r\n\r\n<p>TechM</p>', 56.00, 70.00, 23.00, 28.75, 'TechM', 'TechM', 1, 0, 0, 2.10, 25, 0, '2019-08-07 07:51:38', '2019-08-07 07:51:38'),
(36, 'Bingo', 3, 'Bingo', '<p>Bingo</p>\r\n\r\n<p>Bingo</p>\r\n\r\n<p>Bingo</p>', 34.00, 42.50, 12.00, 15.00, 'Bingo', 'Bingo', 1, 0, 1, 2.10, 10, 0, '2019-08-16 11:59:14', '2019-08-20 13:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`id`, `book_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '31620.jpg', '2019-07-11 11:07:51', '2019-07-11 11:07:51'),
(3, 2, '21197.png', '2019-07-11 11:12:37', '2019-07-11 11:12:37'),
(4, 3, '67356.png', '2019-07-11 11:15:12', '2019-07-11 11:15:12'),
(5, 4, '18445.png', '2019-07-11 11:18:15', '2019-07-11 11:18:15'),
(6, 5, '97210.png', '2019-07-11 11:19:53', '2019-07-11 11:19:53'),
(7, 6, '58784.png', '2019-07-11 11:27:31', '2019-07-11 11:27:31'),
(8, 7, '40858.png', '2019-07-11 11:29:19', '2019-07-11 11:29:19'),
(9, 8, '16842.jpg', '2019-07-12 06:25:51', '2019-07-12 06:25:51'),
(12, 12, '59740.jpg', '2019-07-25 12:31:23', '2019-07-25 12:31:23'),
(13, 12, '54757.jpg', '2019-07-25 12:31:23', '2019-07-25 12:31:23'),
(14, 12, '50711.jpg', '2019-07-25 12:34:44', '2019-07-25 12:34:44'),
(15, 14, '44474.jpg', '2019-07-26 08:55:56', '2019-07-26 08:55:56'),
(16, 15, '99344.png', '2019-07-26 10:15:48', '2019-07-26 10:15:48'),
(17, 15, '22747.png', '2019-07-26 10:15:48', '2019-07-26 10:15:48'),
(18, 16, '31112.jpg', '2019-07-26 11:54:14', '2019-07-26 11:54:14'),
(19, 19, '99281.jpg', '2019-07-29 10:52:34', '2019-07-29 10:52:34'),
(21, 10, '51814.jpg', '2019-07-29 10:54:28', '2019-07-29 10:54:28'),
(22, 20, '67634.jpg', '2019-07-30 06:45:01', '2019-07-30 06:45:01'),
(23, 20, '42821.jpg', '2019-07-30 06:45:41', '2019-07-30 06:45:41'),
(24, 20, '55104.jpg', '2019-07-30 06:45:41', '2019-07-30 06:45:41'),
(25, 21, '47541.jpg', '2019-07-30 06:48:45', '2019-07-30 06:48:45'),
(26, 21, '43491.jpg', '2019-07-30 06:48:45', '2019-07-30 06:48:45'),
(27, 26, '96777.jpg', '2019-07-30 08:14:48', '2019-07-30 08:14:48'),
(28, 28, '94101.jpg', '2019-07-30 08:39:35', '2019-07-30 08:39:35'),
(29, 9, '24414.jpg', '2019-07-30 10:51:17', '2019-07-30 10:51:17'),
(30, 29, '12062.png', '2019-07-30 11:09:34', '2019-07-30 11:09:34'),
(31, 30, '86510.png', '2019-07-30 12:10:57', '2019-07-30 12:10:57'),
(32, 30, '77889.png', '2019-07-30 12:10:57', '2019-07-30 12:10:57'),
(33, 32, '18230.jpg', '2019-08-05 07:52:12', '2019-08-05 07:52:12'),
(46, 1, '39011.jpg', '2019-08-07 13:32:25', '2019-08-07 13:32:25'),
(47, 3, '36045.gif', '2019-08-07 13:33:16', '2019-08-07 13:33:16'),
(48, 3, '15875.jpg', '2019-08-07 13:33:16', '2019-08-07 13:33:16'),
(49, 3, '29306.png', '2019-08-07 13:47:04', '2019-08-07 13:47:04'),
(50, 9, '91608.jpg', '2019-08-07 14:05:22', '2019-08-07 14:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_orders`
--

CREATE TABLE `cancel_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `shipping_amount` double(8,2) DEFAULT NULL,
  `cancel_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_orders`
--

INSERT INTO `cancel_orders` (`id`, `user_id`, `order_id`, `amount`, `shipping_amount`, `cancel_reason`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 75.00, 10.58, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.</p>', '2019-09-13 13:52:49', '2019-09-13 13:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_desc` text COLLATE utf8mb4_unicode_ci,
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_image`, `cat_desc`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'BIO/CHEM', '97451.jpg', 'test one', 1, '2019-07-11 10:48:32', '2019-08-05 12:02:28'),
(2, 'E/M', '32608.jpg', NULL, 1, '2019-07-11 10:49:19', '2019-08-05 07:40:34'),
(3, 'EDU', '68724.jpg', NULL, 0, '2019-07-11 10:50:09', '2019-08-05 11:08:59'),
(4, 'ENG', '28529.jpg', NULL, 1, '2019-07-11 10:51:03', '2019-07-11 10:51:03'),
(5, 'Fine Arts', '63573.jpg', NULL, 1, '2019-07-11 10:51:30', '2019-07-11 10:51:30'),
(6, 'FTS', '65711.jpg', NULL, 1, '2019-07-11 10:52:29', '2019-07-11 10:52:29'),
(7, 'GEOL', '67674.jpg', NULL, 1, '2019-07-11 10:53:02', '2019-07-25 12:48:37'),
(8, 'GWS', '25873.jpg', NULL, 1, '2019-07-11 10:53:39', '2019-07-25 12:49:22'),
(9, 'HES', '53804.jpg', NULL, 0, '2019-07-11 10:54:13', '2019-08-05 08:35:18'),
(10, 'HIS', '27325.jpg', NULL, 0, '2019-07-11 10:54:41', '2019-07-11 10:54:41'),
(11, 'Languages', '38483.jpg', NULL, 0, '2019-07-11 10:55:11', '2019-07-11 10:55:11'),
(12, 'MATH, COMP, STAT, PHY', '26723.jpg', NULL, 0, '2019-07-11 10:55:49', '2019-07-11 10:55:49'),
(13, 'POL', '87236.jpg', NULL, 0, '2019-07-11 10:57:00', '2019-07-11 10:57:00'),
(14, 'PSY', '30689.jpg', NULL, 0, '2019-07-11 10:57:34', '2019-07-11 10:57:34'),
(15, 'REL', '59138.jpg', NULL, 0, '2019-07-11 10:58:08', '2019-07-11 10:58:08'),
(16, 'School Shark\'s Picks', '30986.png', NULL, 0, '2019-07-11 10:58:41', '2019-07-11 10:58:41'),
(17, 'SOCI/ANTH', '59201.jpg', NULL, 0, '2019-07-11 10:59:10', '2019-07-11 10:59:10'),
(18, 'categ', '26888.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2019-07-25 11:49:18', '2019-07-25 11:58:51'),
(20, 'demo cat1', '95869.gif', 'demo desc1', 1, '2019-07-30 11:02:21', '2019-08-07 10:45:46'),
(21, 'cat23', '44821.jpg', 'demo', 1, '2019-07-30 12:25:48', '2019-07-30 12:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `image`, `name`, `description`, `feature`, `created_at`, `updated_at`) VALUES
(3, '98430.png', 'Apparel', '<h1>School Shark Swag</h1>\r\n\r\n<hr />\r\n<p><a href=\"http://www.bonfire.com/schoolshark\" target=\"_blank\" class=\"shop_now\">SHOP NOW</a></p>\r\n\r\n<p><br />\r\nCheck our our new apparel to get ready for the books this spring or the beach this summer! Simply click on the link and check it out! Here are some samples of apparel we have available:</p>\r\n\r\n<p><br />\r\nCheck our our new apparel to get ready for the books this spring or the beach this summer! Simply click on the link and check it out! Here are some samples of apparel we have available:</p>\r\n\r\n<p><img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/blue_long_sleeve_compact.PNG?v=1555599253\" style=\"height:152px; width:173px\" /> <img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/pink_tee_back_compact.PNG?v=1555599280\" /> <img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/navy_bro_tank_compact.PNG?v=1555599270\" style=\"height:149px; width:119px\" /> <img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/blue_girls_tank_compact.PNG?v=1555599260\" /> <img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/white_hoodie_compact.PNG?v=1555599530\" /> <img alt=\"ss\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/grew_crew_compact.PNG?v=1555599602\" /></p>', 0, '2019-07-24 12:30:10', '2019-08-05 14:57:33'),
(4, '22409.png', 'WHO WE ARE', '<h2>Our Story</h2>\r\n\r\n<p>School Shark came to be because of three friends who had a vision of becoming successful entrepreneurs, while also providing a service that is beneficial to the community. The&nbsp;three of us met the first week of college and became friends shortly after. Our friendship was based on our shared faith, baseball, and our dreams of becoming entrepreneurs. We spent hours brainstorming in the cafeteria of a solution to some sort of problem in our community. We were all on the same page that we were your typical &quot;broke college students&quot;.&nbsp; We wanted to provide services to students to help save money, and then we&nbsp;came up with the idea of School Shark. From there we worked on creating a business model so that we could effectively provide this service to as many students as possible. Through hard work and vigorous amounts of student feedback and research, we launched School Shark!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What We Do</h2>\r\n\r\n<p>School Shark LLC has three goals as a company. The first is to save you money on your textbooks. The second is to make you more money on your textbooks. And the third is to make that process as easy as possible! If we can do those three things for our customers, we are happy!</p>\r\n\r\n<p><img alt=\"logo\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/About_us_medium.PNG?v=1553044966\" />&nbsp;&nbsp;</p>', 1, '2019-07-24 12:37:01', '2019-07-30 11:32:34'),
(5, '39153.png', 'FAQ', '<h1>FAQ</h1>\r\n\r\n<p><strong><img alt=\"do\" src=\"https://cdn.shopify.com/s/files/1/0014/3782/7117/files/isolated_logo_medium.png?v=1553782669\" /></strong></p>\r\n\r\n<p><strong>FREQUENTLY ASKED QUESTIONS</strong></p>\r\n\r\n<p><strong>WHAT IS YOUR 100% BUYER GUARANTEE?&nbsp;</strong></p>\r\n\r\n<p>Here at School Shark, the biggest thing we strive for from our customers is TRUST. Because of this, we created the 100% buyer guarantee. What this means is that if you purchase a book, we guarantee you get your book or your money back!</p>\r\n\r\n<p><strong>HOW DO I LIST A BOOK?</strong></p>\r\n\r\n<p>Simple! Click on our menu in the top right corner on mobile, or click sell on desktop. Then follow the instructions!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>HOW DO I KNOW WHEN MY BOOK SELLS?</strong></p>\r\n\r\n<p>Through the info you send us with your listing, we will contact you via email and/or phone to let you know that your book sold. The email will instruct you with a delivery deadline and instructions for delivery. Don&#39;t worry, it&#39;s super easy!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>I DELIVERED MY BOOK... I WANT MY MONEY!</strong></p>\r\n\r\n<p>Congrats on your sale! Once you deliver your book we send a notification to the buyer that their book is ready for pickup, along with a dispute deadline. This gives them a set amount of time to either confirm or deny that they have received their book. Once they confirm, we release your funds!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>HOW DO I BUY A BOOK?</strong></p>\r\n\r\n<p>Easy! Simply click on the menu in the top right corner on mobile, or click Buy, on desktop. Search through our collection of fields of study and click on the one you are looking for. Once there, scroll through to find your book or click search. Once you find your book click Buy Now. Proceed to create an account with us and pay via Paypal, Venmo, or your credit card, then you&#39;re done!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>I BOUGHT A BOOK, NOW WHAT? WHEN DO I GET IT?</strong></p>\r\n\r\n<p>Once you purchase a book from our site, we will notify the seller immediately with instructions and a deadline to deliver the book to you. Once they deliver the book to you, they will send a confirmation to us and we will notify you with pickup instructions!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>I BOUGHT A BOOK, BUT NEVER GOT IT... I WANT MY MONEY BACK!</strong></p>\r\n\r\n<p>No worries, we&#39;ve got you covered! Because the purchase went through our site, we are in control of your funds. This means that we do not release your funds to the seller until they deliver your book! Because of this, if they fail to deliver your book on time, we have the power to refund you your money!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DISPUTES</strong></p>\r\n\r\n<p>If there is an issue with the delivery of your book or condition, please email <strong>schoolsharkllc@gmail.com</strong></p>\r\n\r\n<p>ANY ADDITIONAL QUESTIONS? EMAIL US AT <strong>schoolsharkllc@gmail.com</strong></p>', 1, '2019-07-24 13:48:26', '2019-07-25 11:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_or_pod_id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('blog','pod') COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_or_pod_id`, `user_id`, `comment`, `type`, `publish`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Hi test message.', 'blog', 0, '2019-08-30 14:50:49', '2019-09-02 15:09:19'),
(3, 3, 1, 'It is my first comment.', 'blog', 1, '2019-09-02 15:11:17', '2019-09-02 15:13:48'),
(4, 3, 1, 'It is my second test message.', 'blog', 1, '2019-09-02 15:13:36', '2019-09-02 15:13:44'),
(5, 3, 1, 'It is a test message.', 'blog', 0, '2019-09-04 15:20:51', '2019-09-04 15:20:51'),
(6, 3, 1, 'Hello... It is first comment.', 'pod', 0, '2019-09-10 14:50:34', '2019-09-10 14:50:34'),
(7, 3, 1, 'It is the second comment.', 'pod', 1, '2019-09-10 14:55:48', '2019-09-10 14:57:51'),
(8, 5, 1, 'New Comment.', 'blog', 1, '2019-09-13 10:05:10', '2019-09-13 10:05:43'),
(9, 1, 1, 'demo', 'blog', 0, '2019-09-13 14:37:23', '2019-09-13 14:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `body_message`, `created_at`, `updated_at`) VALUES
(1, 'Priyanka Das', 'priyankadas@virtualemployee.com', '2345465767', 'It is a test mail.', '2019-07-31 00:00:00', '2019-07-31 00:00:00'),
(2, 'Priyanka Das', 'priyankadas@virtualemployee.com', '8563524174', 'It is a test mail another.', '2019-08-05 00:00:00', '2019-08-05 00:00:00'),
(3, 'Priyanka Das', 'priyankadas@virtualemployee.com', '8563524174', 'It is a test mail another.', '2019-08-05 00:00:00', '2019-08-05 00:00:00'),
(4, 'Priyanka Das', 'priyankadas@virtualemployee.com', '2345465767', 'I have  a query. How can I add books.', '2019-08-04 00:00:00', '2019-08-04 00:00:00'),
(5, 'Priyanka Das', 'priyankadas@virtualemployee.com', '8596324152', 'Test Messages.', '2019-08-02 00:00:00', '2019-08-02 00:00:00'),
(7, 'test', 'test@gmail.com', '4353454353', 'test!', '2019-08-01 00:00:00', '2019-08-01 00:00:00'),
(8, 'fdnhfthgb', 'arun.pratap915@gmail.com', '9958247540', 'fmgjkhfdlc', '2019-07-30 08:35:51', '2019-07-30 08:35:51'),
(9, 'arun', 'demo555@gmail.com', '7894561230', 'i want to know some new books', '2019-07-30 12:06:11', '2019-07-30 12:06:11'),
(11, 'test 100', 'testat1000@mailinator.com', '1212121212', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2019-08-05 14:22:16', '2019-08-05 14:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` varchar(2) NOT NULL COMMENT 'Country Id in ISO-2',
  `iso2_code` varchar(2) DEFAULT NULL COMMENT 'Country ISO-2 format',
  `iso3_code` varchar(3) DEFAULT NULL COMMENT 'Country ISO-3',
  `country_name` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Directory Country' ROW_FORMAT=COMPACT;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `iso2_code`, `iso3_code`, `country_name`, `status`) VALUES
('AD', 'AD', 'AND', 'Andorra', '1'),
('AE', 'AE', 'ARE', 'United Arab Emirates', '1'),
('AF', 'AF', 'AFG', 'Afghanistan', '1'),
('AG', 'AG', 'ATG', 'Antigua And Barbuda', '1'),
('AI', 'AI', 'AIA', 'Anguilla', '1'),
('AL', 'AL', 'ALB', 'Albania', '1'),
('AM', 'AM', 'ARM', 'Armenia', '1'),
('AN', 'AN', 'ANT', 'Netherlands Antilles', '1'),
('AO', 'AO', 'AGO', 'Angola', '1'),
('AQ', 'AQ', 'ATA', 'Antarctica', '1'),
('AR', 'AR', 'ARG', 'Argentina', '1'),
('AS', 'AS', 'ASM', 'American Samoa', '1'),
('AT', 'AT', 'AUT', 'Austria', '1'),
('AU', 'AU', 'AUS', 'Australia', '1'),
('AW', 'AW', 'ABW', 'Aruba', '1'),
('AZ', 'AZ', 'AZE', 'Azerbaijan', '1'),
('BA', 'BA', 'BIH', 'Bosnia and Herzegovina', '1'),
('BB', 'BB', 'BRB', 'Barbados', '1'),
('BD', 'BD', 'BGD', 'Bangladesh', '1'),
('BE', 'BE', 'BEL', 'Belgium', '1'),
('BF', 'BF', 'BFA', 'Burkina Faso', '1'),
('BG', 'BG', 'BGR', 'Bulgaria', '1'),
('BH', 'BH', 'BHR', 'Bahrain', '1'),
('BI', 'BI', 'BDI', 'Burundi', '1'),
('BJ', 'BJ', 'BEN', 'Benin', '1'),
('BM', 'BM', 'BMU', 'Bermuda', '1'),
('BN', 'BN', 'BRN', 'Brunei', '1'),
('BO', 'BO', 'BOL', 'Bolivia', '1'),
('BR', 'BR', 'BRA', 'Brazil', '1'),
('BS', 'BS', 'BHS', 'Bahamas The', '1'),
('BT', 'BT', 'BTN', 'Bhutan', '1'),
('BV', 'BV', 'BVT', 'Bouvet Island', '1'),
('BW', 'BW', 'BWA', 'Botswana', '1'),
('BY', 'BY', 'BLR', 'Belarus', '1'),
('BZ', 'BZ', 'BLZ', 'Belize', '1'),
('CA', 'CA', 'CAN', 'Canada', '1'),
('CC', 'CC', 'CCK', 'Cocos (Keeling) Islands', '1'),
('CD', 'CD', 'COD', 'Democratic Republic Of The Congo', '1'),
('CF', 'CF', 'CAF', 'Central African Republic', '1'),
('CG', 'CG', 'COG', 'Republic Of The Congo', '1'),
('CH', 'CH', 'CHE', 'Switzerland', '1'),
('CI', 'CI', 'CIV', 'Cote D\'Ivoire (Ivory Coast)', '1'),
('CK', 'CK', 'COK', 'Cook Islands', '1'),
('CL', 'CL', 'CHL', 'Chile', '1'),
('CM', 'CM', 'CMR', 'Cameroon', '1'),
('CN', 'CN', 'CHN', 'China', '1'),
('CO', 'CO', 'COL', 'Colombia', '1'),
('CR', 'CR', 'CRI', 'Costa Rica', '1'),
('CU', 'CU', 'CUB', 'Cuba', '1'),
('CV', 'CV', 'CPV', 'Cape Verde', '1'),
('CX', 'CX', 'CXR', 'Christmas Island', '1'),
('CY', 'CY', 'CYP', 'Cyprus', '1'),
('CZ', 'CZ', 'CZE', 'Czech Republic', '1'),
('DE', 'DE', 'DEU', 'Germany', '1'),
('DJ', 'DJ', 'DJI', 'Djibouti', '1'),
('DK', 'DK', 'DNK', 'Denmark', '1'),
('DM', 'DM', 'DMA', 'Dominica', '1'),
('DO', 'DO', 'DOM', 'Dominican Republic', '1'),
('DZ', 'DZ', 'DZA', 'Algeria', '1'),
('EC', 'EC', 'ECU', 'Ecuador', '1'),
('EE', 'EE', 'EST', 'Estonia', '1'),
('EG', 'EG', 'EGY', 'Egypt', '1'),
('EH', 'EH', 'ESH', 'Western Sahara', '1'),
('ER', 'ER', 'ERI', 'Eritrea', '1'),
('ES', 'ES', 'ESP', 'Spain', '1'),
('ET', 'ET', 'ETH', 'Ethiopia', '1'),
('FI', 'FI', 'FIN', 'Finland', '1'),
('FJ', 'FJ', 'FJI', 'Fiji Islands', '1'),
('FK', 'FK', 'FLK', 'Falkland Islands', '1'),
('FM', 'FM', 'FSM', 'Micronesia', '1'),
('FO', 'FO', 'FRO', 'Faroe Islands', '1'),
('FR', 'FR', 'FRA', 'France', '1'),
('GA', 'GA', 'GAB', 'Gabon', '1'),
('GB', 'GB', 'GBR', 'United Kingdom', '1'),
('GD', 'GD', 'GRD', 'Grenada', '1'),
('GE', 'GE', 'GEO', 'Georgia', '1'),
('GF', 'GF', 'GUF', 'French Guiana', '1'),
('GH', 'GH', 'GHA', 'Ghana', '1'),
('GI', 'GI', 'GIB', 'Gibraltar', '1'),
('GL', 'GL', 'GRL', 'Greenland', '1'),
('GM', 'GM', 'GMB', 'Gambia The', '1'),
('GN', 'GN', 'GIN', 'Guinea', '1'),
('GP', 'GP', 'GLP', 'Guadeloupe', '1'),
('GQ', 'GQ', 'GNQ', 'Equatorial Guinea', '1'),
('GR', 'GR', 'GRC', 'Greece', '1'),
('GS', 'GS', 'SGS', 'South Georgia', '1'),
('GT', 'GT', 'GTM', 'Guatemala', '1'),
('GU', 'GU', 'GUM', 'Guam', '1'),
('GW', 'GW', 'GNB', 'Guinea-Bissau', '1'),
('GY', 'GY', 'GUY', 'Guyana', '1'),
('HK', 'HK', 'HKG', 'Hong Kong S.A.R.', '1'),
('HM', 'HM', 'HMD', 'Heard and McDonald Islands', '1'),
('HN', 'HN', 'HND', 'Honduras', '1'),
('HR', 'HR', 'HRV', 'Croatia (Hrvatska)', '1'),
('HT', 'HT', 'HTI', 'Haiti', '1'),
('HU', 'HU', 'HUN', 'Hungary', '1'),
('ID', 'ID', 'IDN', 'Indonesia', '1'),
('IE', 'IE', 'IRL', 'Ireland', '1'),
('IL', 'IL', 'ISR', 'Israel', '1'),
('IN', 'IN', 'IND', 'India', '1'),
('IO', 'IO', 'IOT', 'British Indian Ocean Territory', '1'),
('IQ', 'IQ', 'IRQ', 'Iraq', '1'),
('IR', 'IR', 'IRN', 'Iran', '1'),
('IS', 'IS', 'ISL', 'Iceland', '1'),
('IT', 'IT', 'ITA', 'Italy', '1'),
('JM', 'JM', 'JAM', 'Jamaica', '1'),
('JO', 'JO', 'JOR', 'Jordan', '1'),
('JP', 'JP', 'JPN', 'Japan', '1'),
('KE', 'KE', 'KEN', 'Kenya', '1'),
('KG', 'KG', 'KGZ', 'Kyrgyzstan', '1'),
('KH', 'KH', 'KHM', 'Cambodia', '1'),
('KI', 'KI', 'KIR', 'Kiribati', '1'),
('KM', 'KM', 'COM', 'Comoros', '1'),
('KN', 'KN', 'KNA', 'Saint Kitts And Nevis', '1'),
('KP', 'KP', 'PRK', 'Korea North', '1'),
('KR', 'KR', 'KOR', 'Korea South', '1'),
('KW', 'KW', 'KWT', 'Kuwait', '1'),
('KY', 'KY', 'CYM', 'Cayman Islands', '1'),
('KZ', 'KZ', 'KAZ', 'Kazakhstan', '1'),
('LA', 'LA', 'LAO', 'Laos', '1'),
('LB', 'LB', 'LBN', 'Lebanon', '1'),
('LC', 'LC', 'LCA', 'Saint Lucia', '1'),
('LI', 'LI', 'LIE', 'Liechtenstein', '1'),
('LK', 'LK', 'LKA', 'Sri Lanka', '1'),
('LR', 'LR', 'LBR', 'Liberia', '1'),
('LS', 'LS', 'LSO', 'Lesotho', '1'),
('LT', 'LT', 'LTU', 'Lithuania', '1'),
('LU', 'LU', 'LUX', 'Luxembourg', '1'),
('LV', 'LV', 'LVA', 'Latvia', '1'),
('LY', 'LY', 'LBY', 'Libya', '1'),
('MA', 'MA', 'MAR', 'Morocco', '1'),
('MC', 'MC', 'MCO', 'Monaco', '1'),
('MD', 'MD', 'MDA', 'Moldova', '1'),
('MG', 'MG', 'MDG', 'Madagascar', '1'),
('MH', 'MH', 'MHL', 'Marshall Islands', '1'),
('MK', 'MK', 'MKD', 'Macedonia', '1'),
('ML', 'ML', 'MLI', 'Mali', '1'),
('MM', 'MM', 'MMR', 'Myanmar', '1'),
('MN', 'MN', 'MNG', 'Mongolia', '1'),
('MO', 'MO', 'MAC', 'Macau S.A.R.', '1'),
('MP', 'MP', 'MNP', 'Northern Mariana Islands', '1'),
('MQ', 'MQ', 'MTQ', 'Martinique', '1'),
('MR', 'MR', 'MRT', 'Mauritania', '1'),
('MS', 'MS', 'MSR', 'Montserrat', '1'),
('MT', 'MT', 'MLT', 'Malta', '1'),
('MU', 'MU', 'MUS', 'Mauritius', '1'),
('MV', 'MV', 'MDV', 'Maldives', '1'),
('MW', 'MW', 'MWI', 'Malawi', '1'),
('MX', 'MX', 'MEX', 'Mexico', '1'),
('MY', 'MY', 'MYS', 'Malaysia', '1'),
('MZ', 'MZ', 'MOZ', 'Mozambique', '1'),
('NA', 'NA', 'NAM', 'Namibia', '1'),
('NC', 'NC', 'NCL', 'New Caledonia', '1'),
('NE', 'NE', 'NER', 'Niger', '1'),
('NF', 'NF', 'NFK', 'Norfolk Island', '1'),
('NG', 'NG', 'NGA', 'Nigeria', '1'),
('NI', 'NI', 'NIC', 'Nicaragua', '1'),
('NL', 'NL', 'NLD', 'Netherlands The', '1'),
('NO', 'NO', 'NOR', 'Norway', '1'),
('NP', 'NP', 'NPL', 'Nepal', '1'),
('NR', 'NR', 'NRU', 'Nauru', '1'),
('NU', 'NU', 'NIU', 'Niue', '1'),
('NZ', 'NZ', 'NZL', 'New Zealand', '1'),
('OM', 'OM', 'OMN', 'Oman', '1'),
('PA', 'PA', 'PAN', 'Panama', '1'),
('PE', 'PE', 'PER', 'Peru', '1'),
('PF', 'PF', 'PYF', 'French Polynesia', '1'),
('PG', 'PG', 'PNG', 'Papua new Guinea', '1'),
('PH', 'PH', 'PHL', 'Philippines', '1'),
('PK', 'PK', 'PAK', 'Pakistan', '1'),
('PL', 'PL', 'POL', 'Poland', '1'),
('PM', 'PM', 'SPM', 'Saint Pierre and Miquelon', '1'),
('PN', 'PN', 'PCN', 'Pitcairn Island', '1'),
('PR', 'PR', 'PR', 'Puerto Rico', '0'),
('PS', 'PS', 'PSE', 'Palestinian Territory Occupied', '1'),
('PT', 'PT', 'PRT', 'Portugal', '1'),
('PW', 'PW', 'PLW', 'Palau', '1'),
('PY', 'PY', 'PRY', 'Paraguay', '1'),
('QA', 'QA', 'QAT', 'Qatar', '1'),
('RE', 'RE', 'REU', 'Reunion', '1'),
('RO', 'RO', 'ROU', 'Romania', '1'),
('RS', 'RS', 'SRB', 'Serbia', '1'),
('RU', 'RU', 'RUS', 'Russia', '1'),
('RW', 'RW', 'RWA', 'Rwanda', '1'),
('SA', 'SA', 'SAU', 'Saudi Arabia', '1'),
('SB', 'SB', 'SLB', 'Solomon Islands', '1'),
('SC', 'SC', 'SYC', 'Seychelles', '1'),
('SD', 'SD', 'SDN', 'Sudan', '1'),
('SE', 'SE', 'SWE', 'Sweden', '1'),
('SG', 'SG', 'SGP', 'Singapore', '1'),
('SH', 'SH', 'SHN', 'Saint Helena', '1'),
('SI', 'SI', 'SVN', 'Slovenia', '1'),
('SJ', 'SJ', 'SJM', 'Svalbard And Jan Mayen Islands', '1'),
('SK', 'SK', 'SVK', 'Slovakia', '1'),
('SL', 'SL', 'SLE', 'Sierra Leone', '1'),
('SM', 'SM', 'SMR', 'San Marino', '1'),
('SN', 'SN', 'SEN', 'Senegal', '1'),
('SO', 'SO', 'SOM', 'Somalia', '1'),
('SR', 'SR', 'SUR', 'Suriname', '1'),
('SS', 'SS', 'SS', 'South Sudan', '0'),
('ST', 'ST', 'STP', 'Sao Tome and Principe', '1'),
('SV', 'SV', 'SLV', 'El Salvador', '1'),
('SY', 'SY', 'SYR', 'Syria', '1'),
('SZ', 'SZ', 'SWZ', 'Swaziland', '1'),
('TC', 'TC', 'TCA', 'Turks And Caicos Islands', '1'),
('TD', 'TD', 'TCD', 'Chad', '1'),
('TF', 'TF', 'ATF', 'French Southern Territories', '1'),
('TG', 'TG', 'TGO', 'Togo', '1'),
('TH', 'TH', 'THA', 'Thailand', '1'),
('TJ', 'TJ', 'TJK', 'Tajikistan', '1'),
('TK', 'TK', 'TKL', 'Tokelau', '1'),
('TM', 'TM', 'TKM', 'Turkmenistan', '1'),
('TN', 'TN', 'TUN', 'Tunisia', '1'),
('TO', 'TO', 'TON', 'Tonga', '1'),
('TP', 'TP', 'TP', 'East Timor', '0'),
('TR', 'TR', 'TUR', 'Turkey', '1'),
('TT', 'TT', 'TTO', 'Trinidad And Tobago', '1'),
('TV', 'TV', 'TUV', 'Tuvalu', '1'),
('TW', 'TW', 'TWN', 'Taiwan', '1'),
('TZ', 'TZ', 'TZA', 'Tanzania', '1'),
('UA', 'UA', 'UKR', 'Ukraine', '1'),
('UG', 'UG', 'UGA', 'Uganda', '1'),
('UM', 'UM', 'UMI', 'United States Minor Outlying Islands', '1'),
('US', 'US', 'USA', 'United States', '1'),
('UY', 'UY', 'URY', 'Uruguay', '1'),
('UZ', 'UZ', 'UZB', 'Uzbekistan', '1'),
('VA', 'VA', 'VAT', 'Vatican City State (Holy See)', '1'),
('VC', 'VC', 'VCT', 'Saint Vincent And The Grenadines', '1'),
('VE', 'VE', 'VEN', 'Venezuela', '1'),
('VG', 'VG', 'VGB', 'Virgin Islands (British)', '1'),
('VI', 'VI', 'VIR', 'Virgin Islands (US)', '1'),
('VN', 'VN', 'VNM', 'Vietnam', '1'),
('VU', 'VU', 'VUT', 'Vanuatu', '1'),
('WF', 'WF', 'WLF', 'Wallis And Futuna Islands', '1'),
('WS', 'WS', 'WSM', 'Samoa', '1'),
('XA', 'XA', 'XA', 'External Territories of Australia', '0'),
('XG', 'XG', 'XG', 'Smaller Territories of the UK', '0'),
('XJ', 'XJ', 'XJ', 'Jersey', '0'),
('XM', 'XM', 'XM', 'Man (Isle of)', '0'),
('XU', 'XU', 'XU', 'Guernsey and Alderney', '0'),
('YE', 'YE', 'YEM', 'Yemen', '1'),
('YT', 'YT', 'MYT', 'Mayotte', '1'),
('YU', 'YU', 'YU', 'Yugoslavia', '0'),
('ZA', 'ZA', 'ZAF', 'South Africa', '1'),
('ZM', 'ZM', 'ZMB', 'Zambia', '1'),
('ZW', 'ZW', 'ZWE', 'Zimbabwe', '1');

-- --------------------------------------------------------

--
-- Table structure for table `home_cms`
--

CREATE TABLE `home_cms` (
  `top_left_image` varchar(255) NOT NULL,
  `top_desc` text NOT NULL,
  `top_right_image` varchar(255) NOT NULL,
  `about_us_image` varchar(255) NOT NULL,
  `about_us_desc` text NOT NULL,
  `what_we_do` text NOT NULL,
  `banner_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_cms`
--

INSERT INTO `home_cms` (`top_left_image`, `top_desc`, `top_right_image`, `about_us_image`, `about_us_desc`, `what_we_do`, `banner_text`) VALUES
('70324.png', '<h5>Buy and Sell your<br />\r\nbook at</h5>\r\n\r\n<h6>School Shark</h6>\r\n\r\n<p><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/single-img.png\" /></p>\r\n\r\n<p>Check out our wide range of textbooks. Filter by school, subject, ISBN and more. What are you waiting for? Let&rsquo;s get started!</p>\r\n\r\n<p><button class=\"see-catalog\" onclick=\"window.location.href=\'http://3.13.59.159/schoolsharks/all_book_list\'\" type=\"button\">SHOP NOW</button></p>', '55815.png', '78660.png', '<div class=\"all-heading anhanger-head\">\r\n<h4>ABOUT US</h4>\r\n<img src=\"http://3.13.59.159/schoolsharks/public/sites/images/single-img.png\" /></div>\r\n\r\n<p>School Shark came to be because of three friends who had a vision of becoming successful entrepreneurs, while also providing a service that is beneficial to the community. The three of us met the first week of college and became friends shortly after. Our friendship was based on our shared faith, baseball, and our dreams of becoming entrepreneurs. We spent hours brainstorming in the cafeteria of a solution to some sort of problem in our community.<br />\r\n<br />\r\nWe were all on the same page that we were your typical &quot;broke college students&quot;. We wanted to provide services to students to help save money, and then we came up with the idea of School Shark. From there we worked on creating a business model so that we could effectively provide this service to as many students as possible. Through hard work and vigorous amounts of student feedback and research, we launched School Shark!</p>\r\n\r\n<p><button class=\"more-buton\" type=\"button\">MORE</button></p>', '<div class=\"all-heading\">\r\n<h4>What We Do</h4>\r\n<img src=\"http://3.13.59.159/schoolsharks/public/sites/images/single-img.png\" /></div>\r\n\r\n<div class=\"row padtop\">\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon1.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Free Shipping</h6>\r\n</div>\r\n\r\n<p>Booksmart offers free shipping worldwide,which makes it possible for you to rent a book from us even if you live far away from our head office.The shipping process is fast and secure.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon2.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Easy Returns</h6>\r\n</div>\r\n\r\n<p>You can always return a book after you&#39;ve read it.just use a unique link that can be found inside our every textbook.Then fill out a special form and send the book to one of our offices.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon3.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Take Notes</h6>\r\n</div>\r\n\r\n<p>Books rented on our website have a special section where you can take notes.However we ask all our customers to limit your writing to a minimal amount if possible.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon4.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Satisfaction Guaranteed</h6>\r\n</div>\r\n\r\n<p>We hope that you will like our book rental service.Our team makes every effort to offer you an easy and enjoyable experience of renting at any time of year.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row pad-50\">\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon5.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Highlighting</h6>\r\n</div>\r\n\r\n<p>Our customer are allowed to highlight the text in our books.It helps in using the full potential of our books without spoiling them.Unfortunately,writing in books is prohibited.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon6.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Flexible Rental Periods</h6>\r\n</div>\r\n\r\n<p>Booksmart uses a flexible rental policy to help our customers enjoy books from our catalog without almost any time limitation.You will receive a notice if your rental period is ending.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon7.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Live Customer Support</h6>\r\n</div>\r\n\r\n<p>If you need assistance with selecting or renting our books,feel free to contact our customers support or leave a message for us using the form on our website.</p>\r\n</div>\r\n\r\n<div class=\"col-md-3 col-sm-12 col-xs-12\">\r\n<div class=\"left-side\"><img src=\"http://3.13.59.159/schoolsharks/public/sites/images/icon8.png\" /></div>\r\n\r\n<div class=\"right-side\">\r\n<h6>Discount System</h6>\r\n</div>\r\n\r\n<p>Regular client of Booksmart have an advantage of reduced book rental prices and discounts on new books from our catalog,which is updated daily.</p>\r\n</div>\r\n</div>', '<h5>Buy and sell your books at School Shark!</h5>\r\n\r\n<p>Navigate through our website to find the books you need at prices that are unmatched from your peers! Sell your books to your peers for more money than anywhere else!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_msg` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `read_msg`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 'Hi ....It is a test message.', 1, '2019-07-30 15:15:07', '2019-07-30 15:15:07'),
(2, 1, 10, 'Hi', 0, '2019-07-30 15:19:42', '2019-08-19 06:45:29'),
(3, 8, 10, 'hi', 0, '2019-07-31 14:36:40', '2019-08-12 10:48:54'),
(4, 18, 10, 'Hi test....It is  a test message.', 0, '2019-08-02 07:02:36', '2019-08-09 11:50:32'),
(5, 18, 10, 'hello \r\nthis is new to go', 0, '2019-08-02 07:28:48', '2019-08-09 11:50:32'),
(6, 10, 18, 'hello can we discuss about further ?', 0, '2019-08-02 07:48:50', '2019-08-07 06:57:25'),
(7, 10, 18, 'can we discuss ?', 0, '2019-08-02 07:49:37', '2019-08-07 06:57:25'),
(8, 10, 18, 'this is so relatable', 0, '2019-08-02 07:49:58', '2019-08-07 06:57:25'),
(9, 10, 18, 'this is so relatable', 0, '2019-08-02 07:50:14', '2019-08-07 06:57:25'),
(10, 1, 10, 'sdf', 0, '2019-08-05 14:03:17', '2019-08-19 06:45:29'),
(11, 10, 18, 'It is a test message.', 0, '2019-08-06 12:13:24', '2019-08-07 06:57:25'),
(12, 10, 18, 'hello this is new to check and go there !', 0, '2019-08-07 06:55:20', '2019-08-07 06:57:25'),
(13, 10, 10, 'hello', 0, '2019-08-07 07:02:23', '2019-08-12 10:47:57'),
(14, 10, 10, 'MY book', 0, '2019-08-07 07:09:09', '2019-08-12 10:47:57'),
(15, 10, 18, 'Ddxdsd ftdtftfttr\r\n\r\n\r\nFtrtyf', 1, '2019-08-09 11:48:31', '2019-08-09 11:48:31'),
(16, 10, 10, 'Thushushsizbqizqaj', 0, '2019-08-12 06:43:51', '2019-08-12 10:47:57'),
(17, 10, 1, 'Hello', 1, '2019-08-12 06:45:22', '2019-08-12 06:45:22'),
(18, 10, 25, 'Hello ,\r\n\r\nyou there ?', 1, '2019-08-12 07:19:08', '2019-08-12 07:19:08'),
(19, 1, 8, 'Hi', 1, '2019-08-12 10:47:24', '2019-08-12 10:47:24');

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
(8, '2019_06_05_094651_add_email_verified_at_column_to_admins_table', 2),
(10, '2014_10_12_000000_create_users_table', 3),
(11, '2014_10_12_100000_create_password_resets_table', 3),
(12, '2019_06_17_074017_create_admins_table', 3),
(13, '2019_06_19_103506_create_categories_table', 3),
(14, '2019_06_20_092941_create_books_table', 3),
(15, '2019_06_20_123650_create_authors_table', 3),
(16, '2019_06_20_123802_create_book_images_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shipping_id` int(10) NOT NULL,
  `amount` varchar(100) NOT NULL DEFAULT '0',
  `shipping_rate` float(10,2) NOT NULL,
  `shipping_type` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'pending' COMMENT '''pending'' => Pending payment, ''success''=> Success Payment ',
  `cancel_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `sale_id` varchar(200) DEFAULT NULL,
  `paypal_parameter` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `user_id`, `shipping_id`, `amount`, `shipping_rate`, `shipping_type`, `paid_amount`, `status`, `cancel_status`, `sale_id`, `paypal_parameter`, `created_at`) VALUES
(1, '20686606351568378493', 1, 1, '85.58', 10.58, 'FEDEX_GROUND', '85.58', 'success', '1', '9476167719834310V', 'PayPal\\Api\\Payment Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => PAYID-LV5Y47Q2CC78691NY740600F\n            [intent] => sale\n            [state] => approved\n            [cart] => 1UV13183A57370926\n            [payer] => PayPal\\Api\\Payer Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [payment_method] => paypal\n                            [status] => VERIFIED\n                            [payer_info] => PayPal\\Api\\PayerInfo Object\n                                (\n                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                        (\n                                            [email] => donwithkalnayak-buyer-1@gmail.com\n                                            [first_name] => test\n                                            [last_name] => buyer\n                                            [payer_id] => XJWQD6XJCJ6J8\n                                            [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [recipient_name] => test buyer\n                                                            [line1] => 1 Main St\n                                                            [city] => San Jose\n                                                            [state] => CA\n                                                            [postal_code] => 95131\n                                                            [country_code] => US\n                                                        )\n\n                                                )\n\n                                            [country_code] => US\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [transactions] => Array\n                (\n                    [0] => PayPal\\Api\\Transaction Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [amount] => PayPal\\Api\\Amount Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [total] => 85.58\n                                                    [currency] => USD\n                                                    [details] => PayPal\\Api\\Details Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [subtotal] => 85.58\n                                                                    [shipping] => 0.00\n                                                                    [insurance] => 0.00\n                                                                    [handling_fee] => 0.00\n                                                                    [shipping_discount] => 0.00\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [payee] => PayPal\\Api\\Payee Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [merchant_id] => J5BFQ6TUHHJX8\n                                                    [email] => donwithkalnayak-facilitator@gmail.com\n                                                )\n\n                                        )\n\n                                    [description] => Your transaction descriptionss ||1||20686606351568378493\n                                    [item_list] => PayPal\\Api\\ItemList Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [items] => Array\n                                                        (\n                                                            [0] => PayPal\\Api\\Item Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [name] => Item 1\n                                                                            [price] => 85.58\n                                                                            [currency] => USD\n                                                                            [tax] => 0.00\n                                                                            [quantity] => 1\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                    [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [recipient_name] => test buyer\n                                                                    [line1] => 1 Main St\n                                                                    [city] => San Jose\n                                                                    [state] => CA\n                                                                    [postal_code] => 95131\n                                                                    [country_code] => US\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [related_resources] => Array\n                                        (\n                                            [0] => PayPal\\Api\\RelatedResources Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [sale] => PayPal\\Api\\Sale Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [id] => 9476167719834310V\n                                                                            [state] => completed\n                                                                            [amount] => PayPal\\Api\\Amount Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [total] => 85.58\n                                                                                            [currency] => USD\n                                                                                            [details] => PayPal\\Api\\Details Object\n                                                                                                (\n                                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                        (\n                                                                                                            [subtotal] => 85.58\n                                                                                                            [shipping] => 0.00\n                                                                                                            [insurance] => 0.00\n                                                                                                            [handling_fee] => 0.00\n                                                                                                            [shipping_discount] => 0.00\n                                                                                                        )\n\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                            [payment_mode] => INSTANT_TRANSFER\n                                                                            [protection_eligibility] => ELIGIBLE\n                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\n                                                                            [transaction_fee] => PayPal\\Api\\Currency Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [value] => 2.78\n                                                                                            [currency] => USD\n                                                                                        )\n\n                                                                                )\n\n                                                                            [parent_payment] => PAYID-LV5Y47Q2CC78691NY740600F\n                                                                            [create_time] => 2019-09-13T12:42:02Z\n                                                                            [update_time] => 2019-09-13T12:42:02Z\n                                                                            [links] => Array\n                                                                                (\n                                                                                    [0] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/9476167719834310V\n                                                                                                    [rel] => self\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [1] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/9476167719834310V/refund\n                                                                                                    [rel] => refund\n                                                                                                    [method] => POST\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [2] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5Y47Q2CC78691NY740600F\n                                                                                                    [rel] => parent_payment\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [redirect_urls] => PayPal\\Api\\RedirectUrls Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [return_url] => http://3.13.59.159/schoolsharks/status?paymentId=PAYID-LV5Y47Q2CC78691NY740600F\n                            [cancel_url] => http://3.13.59.159/schoolsharks/status\n                        )\n\n                )\n\n            [create_time] => 2019-09-13T12:41:33Z\n            [update_time] => 2019-09-13T12:42:02Z\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5Y47Q2CC78691NY740600F\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 12:41:33'),
(2, '5122203791568381743', 1, 1, '60.14', 10.14, 'FEDEX_GROUND', '60.14', 'success', '0', '3TX09491AN6846514', 'PayPal\\Api\\Payment Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => PAYID-LV5ZWMA9UN18326NB5303515\n            [intent] => sale\n            [state] => approved\n            [cart] => 9Y099370CT6765000\n            [payer] => PayPal\\Api\\Payer Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [payment_method] => paypal\n                            [status] => VERIFIED\n                            [payer_info] => PayPal\\Api\\PayerInfo Object\n                                (\n                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                        (\n                                            [email] => donwithkalnayak-buyer-1@gmail.com\n                                            [first_name] => test\n                                            [last_name] => buyer\n                                            [payer_id] => XJWQD6XJCJ6J8\n                                            [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [recipient_name] => test buyer\n                                                            [line1] => 1 Main St\n                                                            [city] => San Jose\n                                                            [state] => CA\n                                                            [postal_code] => 95131\n                                                            [country_code] => US\n                                                        )\n\n                                                )\n\n                                            [country_code] => US\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [transactions] => Array\n                (\n                    [0] => PayPal\\Api\\Transaction Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [amount] => PayPal\\Api\\Amount Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [total] => 60.14\n                                                    [currency] => USD\n                                                    [details] => PayPal\\Api\\Details Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [subtotal] => 60.14\n                                                                    [shipping] => 0.00\n                                                                    [insurance] => 0.00\n                                                                    [handling_fee] => 0.00\n                                                                    [shipping_discount] => 0.00\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [payee] => PayPal\\Api\\Payee Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [merchant_id] => J5BFQ6TUHHJX8\n                                                    [email] => donwithkalnayak-facilitator@gmail.com\n                                                )\n\n                                        )\n\n                                    [description] => Your transaction descriptionss ||2||5122203791568381743\n                                    [item_list] => PayPal\\Api\\ItemList Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [items] => Array\n                                                        (\n                                                            [0] => PayPal\\Api\\Item Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [name] => Item 1\n                                                                            [price] => 60.14\n                                                                            [currency] => USD\n                                                                            [tax] => 0.00\n                                                                            [quantity] => 1\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                    [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [recipient_name] => test buyer\n                                                                    [line1] => 1 Main St\n                                                                    [city] => San Jose\n                                                                    [state] => CA\n                                                                    [postal_code] => 95131\n                                                                    [country_code] => US\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [related_resources] => Array\n                                        (\n                                            [0] => PayPal\\Api\\RelatedResources Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [sale] => PayPal\\Api\\Sale Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [id] => 3TX09491AN6846514\n                                                                            [state] => completed\n                                                                            [amount] => PayPal\\Api\\Amount Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [total] => 60.14\n                                                                                            [currency] => USD\n                                                                                            [details] => PayPal\\Api\\Details Object\n                                                                                                (\n                                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                        (\n                                                                                                            [subtotal] => 60.14\n                                                                                                            [shipping] => 0.00\n                                                                                                            [insurance] => 0.00\n                                                                                                            [handling_fee] => 0.00\n                                                                                                            [shipping_discount] => 0.00\n                                                                                                        )\n\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                            [payment_mode] => INSTANT_TRANSFER\n                                                                            [protection_eligibility] => ELIGIBLE\n                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\n                                                                            [transaction_fee] => PayPal\\Api\\Currency Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [value] => 2.04\n                                                                                            [currency] => USD\n                                                                                        )\n\n                                                                                )\n\n                                                                            [parent_payment] => PAYID-LV5ZWMA9UN18326NB5303515\n                                                                            [create_time] => 2019-09-13T13:36:22Z\n                                                                            [update_time] => 2019-09-13T13:36:22Z\n                                                                            [links] => Array\n                                                                                (\n                                                                                    [0] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3TX09491AN6846514\n                                                                                                    [rel] => self\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [1] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3TX09491AN6846514/refund\n                                                                                                    [rel] => refund\n                                                                                                    [method] => POST\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [2] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5ZWMA9UN18326NB5303515\n                                                                                                    [rel] => parent_payment\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [redirect_urls] => PayPal\\Api\\RedirectUrls Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [return_url] => http://3.13.59.159/schoolsharks/status?paymentId=PAYID-LV5ZWMA9UN18326NB5303515\n                            [cancel_url] => http://3.13.59.159/schoolsharks/status\n                        )\n\n                )\n\n            [create_time] => 2019-09-13T13:35:44Z\n            [update_time] => 2019-09-13T13:36:22Z\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5ZWMA9UN18326NB5303515\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 13:35:43');
INSERT INTO `orders` (`id`, `order_no`, `user_id`, `shipping_id`, `amount`, `shipping_rate`, `shipping_type`, `paid_amount`, `status`, `cancel_status`, `sale_id`, `paypal_parameter`, `created_at`) VALUES
(3, '18196960891568382581', 1, 1, '79.33', 10.58, 'FEDEX_GROUND', '79.33', 'success', '0', '93799003VR840333S', 'PayPal\\Api\\Payment Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => PAYID-LV5Z45Q9LF16723MG605094X\n            [intent] => sale\n            [state] => approved\n            [cart] => 4MG53326U0034990H\n            [payer] => PayPal\\Api\\Payer Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [payment_method] => paypal\n                            [status] => VERIFIED\n                            [payer_info] => PayPal\\Api\\PayerInfo Object\n                                (\n                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                        (\n                                            [email] => donwithkalnayak-buyer-1@gmail.com\n                                            [first_name] => test\n                                            [last_name] => buyer\n                                            [payer_id] => XJWQD6XJCJ6J8\n                                            [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [recipient_name] => test buyer\n                                                            [line1] => 1 Main St\n                                                            [city] => San Jose\n                                                            [state] => CA\n                                                            [postal_code] => 95131\n                                                            [country_code] => US\n                                                        )\n\n                                                )\n\n                                            [country_code] => US\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [transactions] => Array\n                (\n                    [0] => PayPal\\Api\\Transaction Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [amount] => PayPal\\Api\\Amount Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [total] => 79.33\n                                                    [currency] => USD\n                                                    [details] => PayPal\\Api\\Details Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [subtotal] => 79.33\n                                                                    [shipping] => 0.00\n                                                                    [insurance] => 0.00\n                                                                    [handling_fee] => 0.00\n                                                                    [shipping_discount] => 0.00\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [payee] => PayPal\\Api\\Payee Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [merchant_id] => J5BFQ6TUHHJX8\n                                                    [email] => donwithkalnayak-facilitator@gmail.com\n                                                )\n\n                                        )\n\n                                    [description] => Your transaction descriptionss ||3||18196960891568382581\n                                    [item_list] => PayPal\\Api\\ItemList Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [items] => Array\n                                                        (\n                                                            [0] => PayPal\\Api\\Item Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [name] => Item 1\n                                                                            [price] => 79.33\n                                                                            [currency] => USD\n                                                                            [tax] => 0.00\n                                                                            [quantity] => 1\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                    [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [recipient_name] => test buyer\n                                                                    [line1] => 1 Main St\n                                                                    [city] => San Jose\n                                                                    [state] => CA\n                                                                    [postal_code] => 95131\n                                                                    [country_code] => US\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [related_resources] => Array\n                                        (\n                                            [0] => PayPal\\Api\\RelatedResources Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [sale] => PayPal\\Api\\Sale Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [id] => 93799003VR840333S\n                                                                            [state] => completed\n                                                                            [amount] => PayPal\\Api\\Amount Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [total] => 79.33\n                                                                                            [currency] => USD\n                                                                                            [details] => PayPal\\Api\\Details Object\n                                                                                                (\n                                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                        (\n                                                                                                            [subtotal] => 79.33\n                                                                                                            [shipping] => 0.00\n                                                                                                            [insurance] => 0.00\n                                                                                                            [handling_fee] => 0.00\n                                                                                                            [shipping_discount] => 0.00\n                                                                                                        )\n\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                            [payment_mode] => INSTANT_TRANSFER\n                                                                            [protection_eligibility] => ELIGIBLE\n                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\n                                                                            [transaction_fee] => PayPal\\Api\\Currency Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [value] => 2.60\n                                                                                            [currency] => USD\n                                                                                        )\n\n                                                                                )\n\n                                                                            [parent_payment] => PAYID-LV5Z45Q9LF16723MG605094X\n                                                                            [create_time] => 2019-09-13T13:50:16Z\n                                                                            [update_time] => 2019-09-13T13:50:16Z\n                                                                            [links] => Array\n                                                                                (\n                                                                                    [0] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/93799003VR840333S\n                                                                                                    [rel] => self\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [1] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/93799003VR840333S/refund\n                                                                                                    [rel] => refund\n                                                                                                    [method] => POST\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [2] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5Z45Q9LF16723MG605094X\n                                                                                                    [rel] => parent_payment\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [redirect_urls] => PayPal\\Api\\RedirectUrls Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [return_url] => http://3.13.59.159/schoolsharks/status?paymentId=PAYID-LV5Z45Q9LF16723MG605094X\n                            [cancel_url] => http://3.13.59.159/schoolsharks/status\n                        )\n\n                )\n\n            [create_time] => 2019-09-13T13:49:42Z\n            [update_time] => 2019-09-13T13:50:16Z\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5Z45Q9LF16723MG605094X\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 13:49:41'),
(4, '9390901301568383718', 1, 1, '25.58', 10.58, 'FEDEX_GROUND', '25.58', 'success', '0', '91774049WR9153159', 'PayPal\\Api\\Payment Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => PAYID-LV52FZY0SL64889NY634784K\n            [intent] => sale\n            [state] => approved\n            [cart] => 9XE62708MW488043E\n            [payer] => PayPal\\Api\\Payer Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [payment_method] => paypal\n                            [status] => VERIFIED\n                            [payer_info] => PayPal\\Api\\PayerInfo Object\n                                (\n                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                        (\n                                            [email] => donwithkalnayak-buyer-1@gmail.com\n                                            [first_name] => test\n                                            [last_name] => buyer\n                                            [payer_id] => XJWQD6XJCJ6J8\n                                            [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [recipient_name] => test buyer\n                                                            [line1] => 1 Main St\n                                                            [city] => San Jose\n                                                            [state] => CA\n                                                            [postal_code] => 95131\n                                                            [country_code] => US\n                                                        )\n\n                                                )\n\n                                            [country_code] => US\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [transactions] => Array\n                (\n                    [0] => PayPal\\Api\\Transaction Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [amount] => PayPal\\Api\\Amount Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [total] => 25.58\n                                                    [currency] => USD\n                                                    [details] => PayPal\\Api\\Details Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [subtotal] => 25.58\n                                                                    [shipping] => 0.00\n                                                                    [insurance] => 0.00\n                                                                    [handling_fee] => 0.00\n                                                                    [shipping_discount] => 0.00\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [payee] => PayPal\\Api\\Payee Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [merchant_id] => J5BFQ6TUHHJX8\n                                                    [email] => donwithkalnayak-facilitator@gmail.com\n                                                )\n\n                                        )\n\n                                    [description] => Your transaction descriptionss ||4||9390901301568383718\n                                    [item_list] => PayPal\\Api\\ItemList Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [items] => Array\n                                                        (\n                                                            [0] => PayPal\\Api\\Item Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [name] => Item 1\n                                                                            [price] => 25.58\n                                                                            [currency] => USD\n                                                                            [tax] => 0.00\n                                                                            [quantity] => 1\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                    [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [recipient_name] => test buyer\n                                                                    [line1] => 1 Main St\n                                                                    [city] => San Jose\n                                                                    [state] => CA\n                                                                    [postal_code] => 95131\n                                                                    [country_code] => US\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [related_resources] => Array\n                                        (\n                                            [0] => PayPal\\Api\\RelatedResources Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [sale] => PayPal\\Api\\Sale Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [id] => 91774049WR9153159\n                                                                            [state] => completed\n                                                                            [amount] => PayPal\\Api\\Amount Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [total] => 25.58\n                                                                                            [currency] => USD\n                                                                                            [details] => PayPal\\Api\\Details Object\n                                                                                                (\n                                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                        (\n                                                                                                            [subtotal] => 25.58\n                                                                                                            [shipping] => 0.00\n                                                                                                            [insurance] => 0.00\n                                                                                                            [handling_fee] => 0.00\n                                                                                                            [shipping_discount] => 0.00\n                                                                                                        )\n\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                            [payment_mode] => INSTANT_TRANSFER\n                                                                            [protection_eligibility] => ELIGIBLE\n                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\n                                                                            [transaction_fee] => PayPal\\Api\\Currency Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [value] => 1.04\n                                                                                            [currency] => USD\n                                                                                        )\n\n                                                                                )\n\n                                                                            [parent_payment] => PAYID-LV52FZY0SL64889NY634784K\n                                                                            [create_time] => 2019-09-13T14:10:01Z\n                                                                            [update_time] => 2019-09-13T14:10:01Z\n                                                                            [links] => Array\n                                                                                (\n                                                                                    [0] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/91774049WR9153159\n                                                                                                    [rel] => self\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [1] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/91774049WR9153159/refund\n                                                                                                    [rel] => refund\n                                                                                                    [method] => POST\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [2] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV52FZY0SL64889NY634784K\n                                                                                                    [rel] => parent_payment\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [redirect_urls] => PayPal\\Api\\RedirectUrls Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [return_url] => http://3.13.59.159/schoolsharks/status?paymentId=PAYID-LV52FZY0SL64889NY634784K\n                            [cancel_url] => http://3.13.59.159/schoolsharks/status\n                        )\n\n                )\n\n            [create_time] => 2019-09-13T14:08:39Z\n            [update_time] => 2019-09-13T14:10:01Z\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV52FZY0SL64889NY634784K\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 14:08:38');
INSERT INTO `orders` (`id`, `order_no`, `user_id`, `shipping_id`, `amount`, `shipping_rate`, `shipping_type`, `paid_amount`, `status`, `cancel_status`, `sale_id`, `paypal_parameter`, `created_at`) VALUES
(5, '12169925401568385540', 1, 1, '79.33', 10.58, 'FEDEX_GROUND', '79.33', 'success', '0', '8W6027478B625254S', 'PayPal\\Api\\Payment Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => PAYID-LV52UBI5BC82039MB062163W\n            [intent] => sale\n            [state] => approved\n            [cart] => 9NU33991HF597560J\n            [payer] => PayPal\\Api\\Payer Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [payment_method] => paypal\n                            [status] => VERIFIED\n                            [payer_info] => PayPal\\Api\\PayerInfo Object\n                                (\n                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                        (\n                                            [email] => donwithkalnayak-buyer-1@gmail.com\n                                            [first_name] => test\n                                            [last_name] => buyer\n                                            [payer_id] => XJWQD6XJCJ6J8\n                                            [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [recipient_name] => test buyer\n                                                            [line1] => 1 Main St\n                                                            [city] => San Jose\n                                                            [state] => CA\n                                                            [postal_code] => 95131\n                                                            [country_code] => US\n                                                        )\n\n                                                )\n\n                                            [country_code] => US\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [transactions] => Array\n                (\n                    [0] => PayPal\\Api\\Transaction Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [amount] => PayPal\\Api\\Amount Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [total] => 79.33\n                                                    [currency] => USD\n                                                    [details] => PayPal\\Api\\Details Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [subtotal] => 79.33\n                                                                    [shipping] => 0.00\n                                                                    [insurance] => 0.00\n                                                                    [handling_fee] => 0.00\n                                                                    [shipping_discount] => 0.00\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [payee] => PayPal\\Api\\Payee Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [merchant_id] => J5BFQ6TUHHJX8\n                                                    [email] => donwithkalnayak-facilitator@gmail.com\n                                                )\n\n                                        )\n\n                                    [description] => Your transaction descriptionss ||5||12169925401568385540\n                                    [item_list] => PayPal\\Api\\ItemList Object\n                                        (\n                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                (\n                                                    [items] => Array\n                                                        (\n                                                            [0] => PayPal\\Api\\Item Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [name] => Item 1\n                                                                            [price] => 79.33\n                                                                            [currency] => USD\n                                                                            [tax] => 0.00\n                                                                            [quantity] => 1\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                    [shipping_address] => PayPal\\Api\\ShippingAddress Object\n                                                        (\n                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                (\n                                                                    [recipient_name] => test buyer\n                                                                    [line1] => 1 Main St\n                                                                    [city] => San Jose\n                                                                    [state] => CA\n                                                                    [postal_code] => 95131\n                                                                    [country_code] => US\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                    [related_resources] => Array\n                                        (\n                                            [0] => PayPal\\Api\\RelatedResources Object\n                                                (\n                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                        (\n                                                            [sale] => PayPal\\Api\\Sale Object\n                                                                (\n                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                        (\n                                                                            [id] => 8W6027478B625254S\n                                                                            [state] => completed\n                                                                            [amount] => PayPal\\Api\\Amount Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [total] => 79.33\n                                                                                            [currency] => USD\n                                                                                            [details] => PayPal\\Api\\Details Object\n                                                                                                (\n                                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                        (\n                                                                                                            [subtotal] => 79.33\n                                                                                                            [shipping] => 0.00\n                                                                                                            [insurance] => 0.00\n                                                                                                            [handling_fee] => 0.00\n                                                                                                            [shipping_discount] => 0.00\n                                                                                                        )\n\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                            [payment_mode] => INSTANT_TRANSFER\n                                                                            [protection_eligibility] => ELIGIBLE\n                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\n                                                                            [transaction_fee] => PayPal\\Api\\Currency Object\n                                                                                (\n                                                                                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                        (\n                                                                                            [value] => 2.60\n                                                                                            [currency] => USD\n                                                                                        )\n\n                                                                                )\n\n                                                                            [parent_payment] => PAYID-LV52UBI5BC82039MB062163W\n                                                                            [create_time] => 2019-09-13T14:39:34Z\n                                                                            [update_time] => 2019-09-13T14:39:34Z\n                                                                            [links] => Array\n                                                                                (\n                                                                                    [0] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8W6027478B625254S\n                                                                                                    [rel] => self\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [1] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8W6027478B625254S/refund\n                                                                                                    [rel] => refund\n                                                                                                    [method] => POST\n                                                                                                )\n\n                                                                                        )\n\n                                                                                    [2] => PayPal\\Api\\Links Object\n                                                                                        (\n                                                                                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                                                                                (\n                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV52UBI5BC82039MB062163W\n                                                                                                    [rel] => parent_payment\n                                                                                                    [method] => GET\n                                                                                                )\n\n                                                                                        )\n\n                                                                                )\n\n                                                                        )\n\n                                                                )\n\n                                                        )\n\n                                                )\n\n                                        )\n\n                                )\n\n                        )\n\n                )\n\n            [redirect_urls] => PayPal\\Api\\RedirectUrls Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [return_url] => http://3.13.59.159/schoolsharks/status?paymentId=PAYID-LV52UBI5BC82039MB062163W\n                            [cancel_url] => http://3.13.59.159/schoolsharks/status\n                        )\n\n                )\n\n            [create_time] => 2019-09-13T14:39:01Z\n            [update_time] => 2019-09-13T14:39:34Z\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV52UBI5BC82039MB062163W\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 14:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `book_id`, `item_name`, `amount`, `quantity`, `image`, `created_at`) VALUES
(1, 1, 2, 'CHE-246: Water Chemistry', '75', 1, '21197.png', '2019-09-13 12:41:33'),
(2, 2, 1, 'CHE-246: Environmental Chemistry', '50', 1, '31620.jpg', '2019-09-13 13:35:43'),
(3, 3, 4, 'BIO-218: Fundamentals of Microbiology', '68.75', 1, '18445.png', '2019-09-13 13:49:41'),
(4, 4, 36, 'Bingo', '15', 1, '', '2019-09-13 14:08:38'),
(5, 5, 4, 'BIO-218: Fundamentals of Microbiology', '68.75', 1, '18445.png', '2019-09-13 14:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('priyankadas@virtualemployee.com', '$2y$10$tJhvPbhJyRF6081geWZZnuCF.7npeWCigp28iLB3Kyw4EM/cL.c4K', '2019-06-27 08:44:49'),
('smithalem421@gmail.com', '$2y$10$CoSE4/SV5o3FOjRoDglj1e.dHdgDGiIRJOEl9ICwJ9t0L.jXFuuu2', '2019-07-26 07:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `pod_casts`
--

CREATE TABLE `pod_casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pod_casts`
--

INSERT INTO `pod_casts` (`id`, `meta_title`, `meta_desc`, `feature_image`, `title`, `audio`, `content`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'What is Lorem Ipsum?', 'What is Lorem Ipsum?', '28750.jpg', 'What is Lorem Ipsum?', '20190905_5d71164c8320a.mp3', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'what-is-lorem-ipsum', 'Weston Lombard', '2019-09-04 14:09:56', '2019-09-05 14:06:04'),
(4, 'Lorem Ipsum', 'Lorem Ipsum', '63825.jpg', 'Lorem Ipsum', '20190905_5d711772eb649.aac', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'lorem-ipsum', 'John Campisi', '2019-09-05 14:10:58', '2019-09-05 14:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `pod_tags`
--

CREATE TABLE `pod_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pod_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pod_tags`
--

INSERT INTO `pod_tags` (`id`, `pod_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2019-09-04 14:09:56', '2019-09-04 14:09:56'),
(3, 4, 1, '2019-09-05 14:10:58', '2019-09-05 14:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `refund_amounts`
--

CREATE TABLE `refund_amounts` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `refund_amount` float(8,2) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `refund_transaction_fee` float(8,2) NOT NULL,
  `result_parameter` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refund_amounts`
--

INSERT INTO `refund_amounts` (`id`, `order_id`, `refund_amount`, `transaction_id`, `refund_transaction_fee`, `result_parameter`, `created_at`, `updated_at`) VALUES
(1, 1, 85.58, '2L622634N5705003H', 2.48, 'PayPal\\Api\\DetailedRefund Object\n(\n    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n        (\n            [id] => 2L622634N5705003H\n            [create_time] => 2019-09-13T14:09:40Z\n            [update_time] => 2019-09-13T14:09:40Z\n            [state] => completed\n            [amount] => PayPal\\Api\\Amount Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [total] => 85.58\n                            [currency] => USD\n                        )\n\n                )\n\n            [refund_from_transaction_fee] => PayPal\\Api\\Currency Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [currency] => USD\n                            [value] => 2.48\n                        )\n\n                )\n\n            [total_refunded_amount] => PayPal\\Api\\Currency Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [currency] => USD\n                            [value] => 85.58\n                        )\n\n                )\n\n            [refund_from_received_amount] => PayPal\\Api\\Currency Object\n                (\n                    [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                        (\n                            [currency] => USD\n                            [value] => 83.10\n                        )\n\n                )\n\n            [sale_id] => 9476167719834310V\n            [parent_payment] => PAYID-LV5Y47Q2CC78691NY740600F\n            [links] => Array\n                (\n                    [0] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/refund/2L622634N5705003H\n                                    [rel] => self\n                                    [method] => GET\n                                )\n\n                        )\n\n                    [1] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LV5Y47Q2CC78691NY740600F\n                                    [rel] => parent_payment\n                                    [method] => GET\n                                )\n\n                        )\n\n                    [2] => PayPal\\Api\\Links Object\n                        (\n                            [_propMap:PayPal\\Common\\PayPalModel:private] => Array\n                                (\n                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/9476167719834310V\n                                    [rel] => sale\n                                    [method] => GET\n                                )\n\n                        )\n\n                )\n\n        )\n\n)\n', '2019-09-13 14:09:41', '2019-09-13 14:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `seller_rating`
--

CREATE TABLE `seller_rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_rating`
--

INSERT INTO `seller_rating` (`id`, `buyer_id`, `seller_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 5.00, '2019-09-13 15:22:25', '2019-09-13 15:22:25'),
(2, 10, 1, 4.50, '2019-08-12 08:03:15', '2019-08-12 08:03:15'),
(4, 18, 10, 3.00, NULL, NULL),
(5, 13, 19, 3.00, NULL, NULL),
(6, 20, 4, 5.00, NULL, NULL),
(7, 4, 21, 5.00, NULL, NULL),
(8, 10, 18, 1.00, NULL, NULL),
(9, 10, 19, 5.00, '2019-08-12 06:44:08', '2019-08-12 06:44:08'),
(10, 10, 8, 0.50, NULL, NULL),
(11, 10, 20, 1.50, '2019-08-12 06:44:10', '2019-08-12 06:44:10'),
(12, 10, 25, 5.00, '2019-08-09 11:54:39', '2019-08-09 11:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(10) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `carrier_code` varchar(20) NOT NULL,
  `shipment_tracking_no` varchar(255) NOT NULL,
  `pkg_tracking_no` varchar(255) NOT NULL,
  `fedx_response` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `order_id`, `seller_id`, `job_id`, `carrier_code`, `shipment_tracking_no`, `pkg_tracking_no`, `fedx_response`) VALUES
(1, 1, 8, '4ace647920674fq12703j026274', 'FDXG', '794643988597', '794643988597', 'a:3:{i:0;O:57:\"FedEx\\OpenShipService\\ComplexType\\CreateOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:23:\"CreateOpenShipmentReply\";s:9:\"\0*\0values\";a:7:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j026274\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:4:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643988597\";}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:3:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643988597\";}}}s:11:\"GroupNumber\";i:0;}}}}}s:5:\"Index\";s:12:\"794643988597\";}}i:1;O:59:\"FedEx\\OpenShipService\\ComplexType\\RetrieveOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:25:\"RetrieveOpenShipmentReply\";s:9:\"\0*\0values\";a:4:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:17:\"RequestedShipment\";O:51:\"FedEx\\OpenShipService\\ComplexType\\RequestedShipment\":2:{s:7:\"\0*\0name\";s:17:\"RequestedShipment\";s:9:\"\0*\0values\";a:11:{s:13:\"ShipTimestamp\";s:25:\"2019-09-13T12:42:03+00:00\";s:11:\"DropoffType\";s:14:\"REGULAR_PICKUP\";s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:13:\"PackagingType\";s:14:\"YOUR_PACKAGING\";s:7:\"Shipper\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:9:\"Recipient\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:2:{s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:12:\"Priyanka Das\";s:11:\"PhoneNumber\";s:10:\"3454657678\";s:12:\"EMailAddress\";s:24:\"demo@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:18:\"13450 Farmcrest Ct\";s:4:\"City\";s:7:\"Herndon\";s:19:\"StateOrProvinceCode\";s:2:\"VA\";s:10:\"PostalCode\";s:5:\"20171\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:22:\"ShippingChargesPayment\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Payment\":2:{s:7:\"\0*\0name\";s:7:\"Payment\";s:9:\"\0*\0values\";a:2:{s:11:\"PaymentType\";s:6:\"SENDER\";s:5:\"Payor\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Payor\":2:{s:7:\"\0*\0name\";s:5:\"Payor\";s:9:\"\0*\0values\";a:1:{s:16:\"ResponsibleParty\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}}}}}s:26:\"ProcessingOptionsRequested\";O:68:\"FedEx\\OpenShipService\\ComplexType\\ShipmentProcessingOptionsRequested\":2:{s:7:\"\0*\0name\";s:34:\"ShipmentProcessingOptionsRequested\";s:9:\"\0*\0values\";a:0:{}}s:22:\"BlockInsightVisibility\";b:0;s:18:\"LabelSpecification\";O:52:\"FedEx\\OpenShipService\\ComplexType\\LabelSpecification\":2:{s:7:\"\0*\0name\";s:18:\"LabelSpecification\";s:9:\"\0*\0values\";a:3:{s:15:\"LabelFormatType\";s:8:\"COMMON2D\";s:9:\"ImageType\";s:3:\"PDF\";s:14:\"LabelStockType\";s:9:\"PAPER_4X6\";}}s:12:\"PackageCount\";i:1;}}}}i:2;O:58:\"FedEx\\OpenShipService\\ComplexType\\ConfirmOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:24:\"ConfirmOpenShipmentReply\";s:9:\"\0*\0values\";a:6:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4c6e6574605246q12503j005907\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:9:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643988597\";}}s:22:\"ServiceTypeDescription\";s:3:\"FXG\";s:18:\"ServiceDescription\";O:52:\"FedEx\\OpenShipService\\ComplexType\\ServiceDescription\":2:{s:7:\"\0*\0name\";s:18:\"ServiceDescription\";s:9:\"\0*\0values\";a:5:{s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:4:\"Code\";s:2:\"92\";s:5:\"Names\";a:7:{i:0;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:16:\"FedEx GroundÂ®\";}}i:1;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:12:\"FedEx Ground\";}}i:2;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:10:\"GroundÂ®\";}}i:3;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:6:\"Ground\";}}i:4;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:2:\"FG\";}}i:5;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"FG\";}}i:6;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"abbrv\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"SG\";}}}s:11:\"Description\";s:12:\"FedEx Ground\";s:16:\"AstraDescription\";s:3:\"FXG\";}}s:20:\"PackagingDescription\";s:14:\"YOUR_PACKAGING\";s:17:\"OperationalDetail\";O:59:\"FedEx\\OpenShipService\\ComplexType\\ShipmentOperationalDetail\":2:{s:7:\"\0*\0name\";s:25:\"ShipmentOperationalDetail\";s:9:\"\0*\0values\";a:6:{s:20:\"OriginLocationNumber\";i:117;s:25:\"DestinationLocationNumber\";i:221;s:11:\"TransitTime\";s:8:\"TWO_DAYS\";s:31:\"IneligibleForMoneyBackGuarantee\";b:0;s:11:\"ServiceCode\";s:2:\"92\";s:13:\"PackagingCode\";s:2:\"01\";}}s:14:\"ShipmentRating\";O:48:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRating\":2:{s:7:\"\0*\0name\";s:14:\"ShipmentRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:19:\"ShipmentRateDetails\";a:1:{i:0;O:52:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRateDetail\":2:{s:7:\"\0*\0name\";s:18:\"ShipmentRateDetail\";s:9:\"\0*\0values\";a:19:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:8:\"RateZone\";s:1:\"3\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:10:\"DimDivisor\";i:0;s:20:\"FuelSurchargePercent\";s:3:\"7.0\";s:18:\"TotalBillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"LB\";s:5:\"Value\";s:3:\"5.0\";}}s:15:\"TotalBaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:15:\"TotalNetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:19:\"TotalNetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:14:\"TotalNetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:19:\"TotalDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:26:\"TotalAncillaryFeesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:23:\"TotalDutiesTaxesAndFees\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:32:\"TotalNetChargeWithDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:7:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643988597\";}}}s:11:\"GroupNumber\";i:0;s:13:\"PackageRating\";O:47:\"FedEx\\OpenShipService\\ComplexType\\PackageRating\":2:{s:7:\"\0*\0name\";s:13:\"PackageRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:18:\"PackageRateDetails\";a:1:{i:0;O:51:\"FedEx\\OpenShipService\\ComplexType\\PackageRateDetail\":2:{s:7:\"\0*\0name\";s:17:\"PackageRateDetail\";s:9:\"\0*\0values\";a:12:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:13:\"BillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"KG\";s:5:\"Value\";s:4:\"2.27\";}}s:10:\"BaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"NetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:14:\"NetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:9:\"NetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:17:\"OperationalDetail\";O:58:\"FedEx\\OpenShipService\\ComplexType\\PackageOperationalDetail\":2:{s:7:\"\0*\0name\";s:24:\"PackageOperationalDetail\";s:9:\"\0*\0values\";a:3:{s:23:\"OperationalInstructions\";a:6:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:2;s:7:\"Content\";s:4:\"TRK#\";}}i:1;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:7;s:7:\"Content\";s:34:\"9622001900008000266200794643988597\";}}i:2;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:8;s:7:\"Content\";s:15:\"567J1/9D04/05A2\";}}i:3;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:10;s:7:\"Content\";s:14:\"7946 4398 8597\";}}i:4;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:15;s:7:\"Content\";s:5:\"20171\";}}i:5;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:18;s:7:\"Content\";s:46:\"9622 0019 0 (000 800 0266) 2 00 7946 4398 8597\";}}}s:8:\"Barcodes\";O:49:\"FedEx\\OpenShipService\\ComplexType\\PackageBarcodes\":2:{s:7:\"\0*\0name\";s:15:\"PackageBarcodes\";s:9:\"\0*\0values\";a:2:{s:14:\"BinaryBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\BinaryBarcode\":2:{s:7:\"\0*\0name\";s:13:\"BinaryBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:9:\"COMMON_2D\";s:5:\"Value\";s:187:\"[)>010220171840019794643988597FDEG80002662561/12.00KGN13450 Farmcrest CtHerndonVAPriyanka Das0610ZGD00912Z345465767820Z31Z962200190000800026620079464398859734Z01\";}}}s:14:\"StringBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\StringBarcode\":2:{s:7:\"\0*\0name\";s:13:\"StringBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:8:\"FEDEX_1D\";s:5:\"Value\";s:34:\"9622001900008000266200794643988597\";}}}}}s:17:\"GroundServiceCode\";s:3:\"019\";}}s:5:\"Label\";O:50:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocument\":2:{s:7:\"\0*\0name\";s:16:\"ShippingDocument\";s:9:\"\0*\0values\";a:6:{s:4:\"Type\";s:14:\"OUTBOUND_LABEL\";s:27:\"ShippingDocumentDisposition\";s:8:\"RETURNED\";s:9:\"ImageType\";s:3:\"PDF\";s:10:\"Resolution\";i:200;s:13:\"CopiesToPrint\";i:1;s:5:\"Parts\";a:1:{i:0;O:54:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocumentPart\":2:{s:7:\"\0*\0name\";s:20:\"ShippingDocumentPart\";s:9:\"\0*\0values\";a:2:{s:26:\"DocumentPartSequenceNumber\";i:1;s:5:\"Image\";s:7347:\"%PDF-1.4\n1 0 obj\n<<\n/Type /Catalog\n/Pages 3 0 R\n>>\nendobj\n2 0 obj\n<<\n/Type /Outlines\n/Count 0\n>>\nendobj\n3 0 obj\n<<\n/Type /Pages\n/Count 1\n/Kids [18 0 R]\n>>\nendobj\n4 0 obj\n[/PDF /Text /ImageB /ImageC /ImageI]\nendobj\n5 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica\n/Encoding /MacRomanEncoding\n>>\nendobj\n6 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n7 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n8 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n9 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier\n/Encoding /MacRomanEncoding\n>>\nendobj\n10 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n11 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n12 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n13 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Roman\n/Encoding /MacRomanEncoding\n>>\nendobj\n14 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n15 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Italic\n/Encoding /MacRomanEncoding\n>>\nendobj\n16 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-BoldItalic\n/Encoding /MacRomanEncoding\n>>\nendobj\n17 0 obj \n<<\n/CreationDate (D:2003)\n/Producer (FedEx Services)\n/Title (FedEx Shipping Label)\r/Creator (FedEx Customer Automation)\r/Author (CLS Version 5120135)\n>>\nendobj\n18 0 obj\n<<\n/Type /Page\r/Parent 3 0 R\n/Resources << /ProcSet 4 0 R \n /Font << /F1 5 0 R \n/F2 6 0 R \n/F3 7 0 R \n/F4 8 0 R \n/F5 9 0 R \n/F6 10 0 R \n/F7 11 0 R \n/F8 12 0 R \n/F9 13 0 R \n/F10 14 0 R \n/F11 15 0 R \n/F12 16 0 R \n >>\n/XObject << /FedExGround 20 0 R\n/GroundG 21 0 R\n/barcode0 22 0 R\n>>\n>>\n/MediaBox [0 0 612 792]\n/TrimBox[0 0 612 792]\n/Contents 19 0 R\n/Rotate 0>>\nendobj\n19 0 obj\n<< /Length 2456\n/Filter [/ASCII85Decode /FlateDecode] \n>>\nstream\nGatU6?#N\\$&:IoBs\'VfZJAfE:HTYfp!a.]j9%%8I-08]2;Q5?qm2#Qkl[.ufh\'D<%Lpn0,+n)u)fJDRX\nbV_QmhH;rd\'I.l\\6>j$I#n<>Y/cPI+U,Nk*Ap$\"Y3qLlp!0ihu+S^NWYa%KD`_0)DZcCD6W*0$\\\'/kbu\nB82Aa+#8BO/pr4=U5rc:o->+71NWTldD=F1*\\;c2bnlojJ_(lgX,e(ZE4,VJr,!f.YA:#k?DmJ^b3%CB\no((ViWHn<_qtK7:Ed>50V;qS5,P(0P^HFKIB-=KI$t+V?K*Mi*Zrp=\"X=ab`9=L=\"K#q.T2@!8^0,am#\n,!N-.T\'bo0JXB&+9Bl!@a$76-OM+6OVO(sd<XU_hmkBpkRWWWBeJG\\DaPMn$VC=#ShA721baTd[%Z-rh\nCT!^[AJbb8KP]Wj2L9N@3Vn`!O64c\\R*UtL0]^nsr[aL9a<XO3,d6\'P[jqc%2Se:f>rYBm\\/Jn5W$s]U\nP@K)k\\CbE(CZ&O>b2rHpo\'JO1k!qgu\\@>c0?0@X9Q`gnDrn_+E#kZ1/6V=sFhT.b((>lmB6@lE(Wu&Cq\n>qc!;X4OQ\"nbgZ2r9,c\\>^K?7B%J--IedW%nSW(7Q[e?k(6e4>)cHmFM$H@>Z0(k&FoHQ,p;[F0m)+jJ\nEAOMJ%i=itKmCB+FT0uV1A_==c,%8-+$Y._,IrkNnrrs<nAtdn#C[q#a,Yg]@t9nYX,GHM$hN0q@K;2K\n*=/5$THPE(:>*g-^([=8P6Y/?^X!>c@=6DKJ<TfKj,E##:3rB\\3BZ0&b2CHBXV5L#]KO:tc;*PP^K=cj\n]JqeGQa:Tc/M\\Xhg@>ajh,&91E\\9sVL4^H9Rb<%a6l=$6,KG_)jD$Kh)[jlJH^&1//OD\\b;q)pE7%Xe\'\nHA,^(Ju+Wi%`cl85B$\"m1gr\'+#?Mm1%`_5L*nt,@[Q(e*Q*WS\\p=G?@L6<st%%L8/p%ah;JRb\'Ga\\f8W\n1K\'_rC]%nWH@\'p`AoB6K)\'A9ikkOO4LQ[V4KD62tn&!TUSr]5toN#,77%Z!Qgd#F><`qQu%s#s&pL^L.\ne$?e9@NU1.:5_1X=jP%6YrSEZH3D_5nGU&Rn\\#fW6X?\"8G*\"J<\\N/upE^ORCfTb*5[Z_oS\"-j2.c5IR_\nh,(+j]k^5-(_<e1fcbTE65?XP[,kL@$PG\\l3#dJdDlKR3j#S!0#bkd)PpA)\';lIPjKr+rJWFRk3&VYjC\nEXe]\\f,4r7#8sk+At(,]$!\"K1dqK^uegGAn;(L_9;4V=:@@VPOV8.p-[2)]WH=c)9M2NTFUIZmce@86s\nZ8B)>IgRR5Q`-T7!UQ-3TaXljKG,Z-VGm`c$jFM)k4?*h8fguP;e[3&);Kld5%[;H#6P-f6bT0m\"+/9_\n15%F7!-M&>(#]hA?7BO-n9(7B+o>kJeA,rN*fjP?5X+1A#\"9!fQ@cI73\'<#]WbpkK$\"0s$GJih=V4glI\n\\qQ4GZ3*5NJqZQB+\\_r`pCo*UP+[45.c8OU\'>SK72eZO\"%g_<RPG]j0!W1/b$8Mf>r#JbEGmmFJHX2n`\nK>N-W*=Y_Zjn&je[o==L(b&0\";/Fsi#51Z_=H(peDue,NRmlEAYW(1.>3,85`aacNfA\'=?XuH8T/XE=B\n6\",9#hGcA:f6et`bP+3->sVWIS#Q[97_6ZC.c=ur9Zg(\"e\\GMgW?5\"ZAW/E[Kr.fYm$7]8:R2SC?@@0!\ne\\GKmW=DfC*8ZolU=b4nas:\'H3)!ffW.g]U71JULMIWG9.\'05Am4)A=&DeF[Qc5[g[F0s\'$\"16,+#F30\nB-1p=QCfLSh,69lHh^;aHpVNdf.2O.Z$`.&,Y;k4<^)rPG\"_?B]b0WDF0khHEP4^,l?`qUD]KI)1F-^C\n[o=b_a)&ua9]5?9<!DWSOthE\\B`;Jlg/0`1=3/jXUa(1?L\\%/V&iHmt.ZTL\\O@,EYe6Gr^m$8R)nQBku\n,+?8Y:t39eWSkhc)A;O8%aF$Q!n]*$j#@t?Le^+@1AV-X=,L^N?kF2#,&t)fC1+LbNs2e%MSXSq%#Z%V\n.tuEV[!pXXC:.3)e[TK?5=R=6mtbst#\"9!fQBJNE6^H-H/nSm(?eOU=2f>TRKPFn-/`okhQ>0M*&Z*q@\njD/#(OM]=hWN+?K<-Bje$J4She>KcoCg\'0[\\B`[FBc87X-fb9Jc$le7opQ@ZA\'3g<nWCS_[\"Ko6YNZ[\\\nm2d1hn;5JK26JC8^8.O\'CN.W7_kLF+K.bi/eb.5+L%$JX^uG$:]RZ]jUrR3,L<#VSgt&<qT9rC_A\'%64\n2(<#ckiPbV\"a%tp;hH1Q-<[u*,AV5$Nmj?uQpT4$:ud$fgmnF.A/BfO0u>.iqY-5\\]sOXJVAQNh`[M03\nAQKd-hHUGWr)=K<n]KH@<>m50aX?OS]=4:>L,d9t3c&)N9G98NKOKiQnr<brf#hR``Yp9eBCa)Y5YpeM\nAM@7s?&U-A9`E\")7_jN7\\UG.~>\nendstream\nendobj\n20 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 118\n/Height 47\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 450\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/eJI]R?#XnLgT6<df/I.&?B=hcDag-rD4]0%PfMTZ+`QSI+J]C^&rD3A8lM8nnFFP!I.f*jYC2Tn[\n<7i(7\\<JH!<uVum3HJfk<8)+%ZN*Mf-s%l>VZUCs,9`9oW&TM%/cgmJU%.fLhbI$\'>Bgu_i@Q+C&bWr6\n3DCM6/FUMt,DB^,*R00s\"]WFGC0j:#Wa4gW<*QeT;,?;BS!oru5u$_3B2j\\2C.\'b.FXq@X1A*,a\\SaGJ\n:nMkcIQ\\.Jf:057_-L4J<%2QMmIao@\\88FKGb1p,mW;%.HNC.;V.+`d)s:rBhUjLHBX2RC^9_q81nV[K\nL=2QBFt;rTCn6[fpmpr7S_cG!dW[,sX1++8R<)-%FcU.kRpWS)XE;9+;4lS+_6AsrcEbQLcIEc_;%MKE\n3cjGT9*N[J.pN2WmI8W?$l;c6]5d/?p8t<sEaJ2erl+~>\nendstream\nendobj\n21 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 54\n/Height 54\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 196\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"0O3u3>h$q/M0J(%S7,KuY<-s.lH-\'qES(pROHCrPn$7Z9)a6\"LR\'S#oC5:\"ElhL$23%2?:_\'lcY/t\n9&C4/N@rO[[E\'jb`s>\\:Ppjm5<C,M=&X;o,AQjmfakJmG$0DpT<`/WHCIKdh8p<0kI2?aaUiIL1W3\"C!\n6Dd66l,>W^H[f.=$)rLnTiSfI43@9I<W~>\nendstream\nendobj\n22 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 294\n/Height 52\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 1057\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/c;3\'Hd$j1YP9<79r*)bGp/./cPO&EVIYq:ePD:H8N?@1M@l<O;c3t\'C+H2N);[_JEJ:7_:RHFDLa\n^#),$D?`;dSmSRAB>IMHK$Na/mh:/_4?q#gd^%05V16fg/g+.eBds!j8rb20\"h!k[Oj!Q:hduaOiIA-K\n:i$g`J?]-/<B07B(b<;U<\'Y+c%[8TBV0&&e!=agL.]\'DH\\ZEUu.[bW+#edh_r*ecp<!dBc<!fZpAPss:\n@\\Z9Em?#&HQI8c*iOQ55Gr@(q8[u\"Vk1eoE@+BuB-fh.pI_]Ip,\'o8EVVEA9`h#&[>=qQQ.OC.1aQ8i:\nq\'$oOi]`mR\'TM<$2l;T#,4uoKfYIYFR5:uI=GU*qqEjUJ>\"VjF@7m8mVBoZ<V8hfBg.mWjl->_RRqPVt\nkGU&sWqj14R5CkD\'m%t&-Z`uN/Z$3M#o0ts(D\"#fG4\\@*l%\'-p>[]\"%=%@;HR%kci5qhG8(U[g3ff&6K\nC>D:(ZBU[\'I7cOG(i84h5\'q<lM!Z\'7XH4DAY:>-CQob405<]@BW7<!!K\'\'QpOd8C.Bdql6eC=!-bG9MV\nkZ\"8g@9\'IBfu=u`$p5r4g$&JRk\\.9ISdAFHb<7.Ad4lE&dSdYIajngme<u=3\\OZoda-eg]+],$Mp25\\g\n^(Ra8Rb$gHFq\"bCPq2^,g)OEk9BdXs:W)4/:mK_ae5d4HYL(q^J1\"6jMjY1R>:`8KQi<tc\\(Y/gXWPXV\n@OWn*s$/\"7Uf56\'.`3u(?Ihl-VM5=N[7ueU\'c>L9@T[N.M[km?Y%Ya0)b3g+>qDhKFINnq5pO>%9eS\\U\n63:BGnPKaBg]h(X<rmFO[\\GYsM$ciU\\U:m7Z4<m&XeiChDH\"[i&I[j2>j)H]T6FBj-<S6u)c/\\\\^?<hc\n\'chqC.HskV_HW\"2pSJKsTJi+a;S#GVKO\\IjRNefV)JWu\"=K#(ohhDR\'.(1M\"8h?#KDahmT5b:7gTGKa@\n]=\"!%[$31AH3.T4Gd\'SZ#jMRcS-X?W=![/A&JhA`^DGU%<;[n!b*o^OdYJ;>[rHXA/Z!qfBs4/4?PU9J\nY5~>\nendstream\nendobj\nxref\n0 23\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000104 00000 n \n0000000162 00000 n \n0000000214 00000 n \n0000000312 00000 n \n0000000415 00000 n \n0000000521 00000 n \n0000000631 00000 n \n0000000727 00000 n \n0000000829 00000 n \n0000000934 00000 n \n0000001043 00000 n \n0000001144 00000 n \n0000001244 00000 n \n0000001346 00000 n \n0000001452 00000 n \n0000001622 00000 n \n0000001999 00000 n \n0000004547 00000 n \n0000005183 00000 n \n0000005564 00000 n \ntrailer\n<<\n/Info 17 0 R\n/Size 23\n/Root 1 0 R\n>>\nstartxref\n6808\n%%EOF\n\";}}}}}s:15:\"SignatureOption\";s:15:\"SERVICE_DEFAULT\";}}}}}}}}');
INSERT INTO `shipping_details` (`id`, `order_id`, `seller_id`, `job_id`, `carrier_code`, `shipment_tracking_no`, `pkg_tracking_no`, `fedx_response`) VALUES
(2, 2, 8, '4ace647920674fq12703j027173', 'FDXG', '794643994700', '794643994700', 'a:3:{i:0;O:57:\"FedEx\\OpenShipService\\ComplexType\\CreateOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:23:\"CreateOpenShipmentReply\";s:9:\"\0*\0values\";a:7:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j027173\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:4:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643994700\";}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:3:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643994700\";}}}s:11:\"GroupNumber\";i:0;}}}}}s:5:\"Index\";s:12:\"794643994700\";}}i:1;O:59:\"FedEx\\OpenShipService\\ComplexType\\RetrieveOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:25:\"RetrieveOpenShipmentReply\";s:9:\"\0*\0values\";a:4:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:17:\"RequestedShipment\";O:51:\"FedEx\\OpenShipService\\ComplexType\\RequestedShipment\":2:{s:7:\"\0*\0name\";s:17:\"RequestedShipment\";s:9:\"\0*\0values\";a:11:{s:13:\"ShipTimestamp\";s:25:\"2019-09-13T13:36:23+00:00\";s:11:\"DropoffType\";s:14:\"REGULAR_PICKUP\";s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:13:\"PackagingType\";s:14:\"YOUR_PACKAGING\";s:7:\"Shipper\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:9:\"Recipient\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:2:{s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:12:\"Priyanka Das\";s:11:\"PhoneNumber\";s:10:\"3454657678\";s:12:\"EMailAddress\";s:24:\"demo@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:18:\"13450 Farmcrest Ct\";s:4:\"City\";s:7:\"Herndon\";s:19:\"StateOrProvinceCode\";s:2:\"VA\";s:10:\"PostalCode\";s:5:\"20171\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:22:\"ShippingChargesPayment\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Payment\":2:{s:7:\"\0*\0name\";s:7:\"Payment\";s:9:\"\0*\0values\";a:2:{s:11:\"PaymentType\";s:6:\"SENDER\";s:5:\"Payor\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Payor\":2:{s:7:\"\0*\0name\";s:5:\"Payor\";s:9:\"\0*\0values\";a:1:{s:16:\"ResponsibleParty\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}}}}}s:26:\"ProcessingOptionsRequested\";O:68:\"FedEx\\OpenShipService\\ComplexType\\ShipmentProcessingOptionsRequested\":2:{s:7:\"\0*\0name\";s:34:\"ShipmentProcessingOptionsRequested\";s:9:\"\0*\0values\";a:0:{}}s:22:\"BlockInsightVisibility\";b:0;s:18:\"LabelSpecification\";O:52:\"FedEx\\OpenShipService\\ComplexType\\LabelSpecification\":2:{s:7:\"\0*\0name\";s:18:\"LabelSpecification\";s:9:\"\0*\0values\";a:3:{s:15:\"LabelFormatType\";s:8:\"COMMON2D\";s:9:\"ImageType\";s:3:\"PDF\";s:14:\"LabelStockType\";s:9:\"PAPER_4X6\";}}s:12:\"PackageCount\";i:1;}}}}i:2;O:58:\"FedEx\\OpenShipService\\ComplexType\\ConfirmOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:24:\"ConfirmOpenShipmentReply\";s:9:\"\0*\0values\";a:6:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j027174\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:9:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643994700\";}}s:22:\"ServiceTypeDescription\";s:3:\"FXG\";s:18:\"ServiceDescription\";O:52:\"FedEx\\OpenShipService\\ComplexType\\ServiceDescription\":2:{s:7:\"\0*\0name\";s:18:\"ServiceDescription\";s:9:\"\0*\0values\";a:5:{s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:4:\"Code\";s:2:\"92\";s:5:\"Names\";a:7:{i:0;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:16:\"FedEx GroundÂ®\";}}i:1;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:12:\"FedEx Ground\";}}i:2;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:10:\"GroundÂ®\";}}i:3;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:6:\"Ground\";}}i:4;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:2:\"FG\";}}i:5;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"FG\";}}i:6;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"abbrv\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"SG\";}}}s:11:\"Description\";s:12:\"FedEx Ground\";s:16:\"AstraDescription\";s:3:\"FXG\";}}s:20:\"PackagingDescription\";s:14:\"YOUR_PACKAGING\";s:17:\"OperationalDetail\";O:59:\"FedEx\\OpenShipService\\ComplexType\\ShipmentOperationalDetail\":2:{s:7:\"\0*\0name\";s:25:\"ShipmentOperationalDetail\";s:9:\"\0*\0values\";a:6:{s:20:\"OriginLocationNumber\";i:117;s:25:\"DestinationLocationNumber\";i:221;s:11:\"TransitTime\";s:8:\"TWO_DAYS\";s:31:\"IneligibleForMoneyBackGuarantee\";b:0;s:11:\"ServiceCode\";s:2:\"92\";s:13:\"PackagingCode\";s:2:\"01\";}}s:14:\"ShipmentRating\";O:48:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRating\":2:{s:7:\"\0*\0name\";s:14:\"ShipmentRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:19:\"ShipmentRateDetails\";a:1:{i:0;O:52:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRateDetail\":2:{s:7:\"\0*\0name\";s:18:\"ShipmentRateDetail\";s:9:\"\0*\0values\";a:19:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:8:\"RateZone\";s:1:\"3\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:10:\"DimDivisor\";i:0;s:20:\"FuelSurchargePercent\";s:3:\"7.0\";s:18:\"TotalBillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"LB\";s:5:\"Value\";s:3:\"5.0\";}}s:15:\"TotalBaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:15:\"TotalNetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:19:\"TotalNetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:14:\"TotalNetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:19:\"TotalDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:26:\"TotalAncillaryFeesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:23:\"TotalDutiesTaxesAndFees\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:32:\"TotalNetChargeWithDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:7:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643994700\";}}}s:11:\"GroupNumber\";i:0;s:13:\"PackageRating\";O:47:\"FedEx\\OpenShipService\\ComplexType\\PackageRating\":2:{s:7:\"\0*\0name\";s:13:\"PackageRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:18:\"PackageRateDetails\";a:1:{i:0;O:51:\"FedEx\\OpenShipService\\ComplexType\\PackageRateDetail\":2:{s:7:\"\0*\0name\";s:17:\"PackageRateDetail\";s:9:\"\0*\0values\";a:12:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:13:\"BillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"KG\";s:5:\"Value\";s:4:\"2.27\";}}s:10:\"BaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"NetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:14:\"NetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:9:\"NetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:17:\"OperationalDetail\";O:58:\"FedEx\\OpenShipService\\ComplexType\\PackageOperationalDetail\":2:{s:7:\"\0*\0name\";s:24:\"PackageOperationalDetail\";s:9:\"\0*\0values\";a:3:{s:23:\"OperationalInstructions\";a:6:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:2;s:7:\"Content\";s:4:\"TRK#\";}}i:1;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:7;s:7:\"Content\";s:34:\"9622001900008000266200794643994700\";}}i:2;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:8;s:7:\"Content\";s:15:\"567J1/9D04/05A2\";}}i:3;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:10;s:7:\"Content\";s:14:\"7946 4399 4700\";}}i:4;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:15;s:7:\"Content\";s:5:\"20171\";}}i:5;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:18;s:7:\"Content\";s:46:\"9622 0019 0 (000 800 0266) 2 00 7946 4399 4700\";}}}s:8:\"Barcodes\";O:49:\"FedEx\\OpenShipService\\ComplexType\\PackageBarcodes\":2:{s:7:\"\0*\0name\";s:15:\"PackageBarcodes\";s:9:\"\0*\0values\";a:2:{s:14:\"BinaryBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\BinaryBarcode\":2:{s:7:\"\0*\0name\";s:13:\"BinaryBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:9:\"COMMON_2D\";s:5:\"Value\";s:187:\"[)>010220171840019794643994700FDEG80002662561/12.00KGN13450 Farmcrest CtHerndonVAPriyanka Das0610ZGD00912Z345465767820Z31Z962200190000800026620079464399470034Z01\";}}}s:14:\"StringBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\StringBarcode\":2:{s:7:\"\0*\0name\";s:13:\"StringBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:8:\"FEDEX_1D\";s:5:\"Value\";s:34:\"9622001900008000266200794643994700\";}}}}}s:17:\"GroundServiceCode\";s:3:\"019\";}}s:5:\"Label\";O:50:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocument\":2:{s:7:\"\0*\0name\";s:16:\"ShippingDocument\";s:9:\"\0*\0values\";a:6:{s:4:\"Type\";s:14:\"OUTBOUND_LABEL\";s:27:\"ShippingDocumentDisposition\";s:8:\"RETURNED\";s:9:\"ImageType\";s:3:\"PDF\";s:10:\"Resolution\";i:200;s:13:\"CopiesToPrint\";i:1;s:5:\"Parts\";a:1:{i:0;O:54:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocumentPart\":2:{s:7:\"\0*\0name\";s:20:\"ShippingDocumentPart\";s:9:\"\0*\0values\";a:2:{s:26:\"DocumentPartSequenceNumber\";i:1;s:5:\"Image\";s:7358:\"%PDF-1.4\n1 0 obj\n<<\n/Type /Catalog\n/Pages 3 0 R\n>>\nendobj\n2 0 obj\n<<\n/Type /Outlines\n/Count 0\n>>\nendobj\n3 0 obj\n<<\n/Type /Pages\n/Count 1\n/Kids [18 0 R]\n>>\nendobj\n4 0 obj\n[/PDF /Text /ImageB /ImageC /ImageI]\nendobj\n5 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica\n/Encoding /MacRomanEncoding\n>>\nendobj\n6 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n7 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n8 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n9 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier\n/Encoding /MacRomanEncoding\n>>\nendobj\n10 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n11 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n12 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n13 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Roman\n/Encoding /MacRomanEncoding\n>>\nendobj\n14 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n15 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Italic\n/Encoding /MacRomanEncoding\n>>\nendobj\n16 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-BoldItalic\n/Encoding /MacRomanEncoding\n>>\nendobj\n17 0 obj \n<<\n/CreationDate (D:2003)\n/Producer (FedEx Services)\n/Title (FedEx Shipping Label)\r/Creator (FedEx Customer Automation)\r/Author (CLS Version 5120135)\n>>\nendobj\n18 0 obj\n<<\n/Type /Page\r/Parent 3 0 R\n/Resources << /ProcSet 4 0 R \n /Font << /F1 5 0 R \n/F2 6 0 R \n/F3 7 0 R \n/F4 8 0 R \n/F5 9 0 R \n/F6 10 0 R \n/F7 11 0 R \n/F8 12 0 R \n/F9 13 0 R \n/F10 14 0 R \n/F11 15 0 R \n/F12 16 0 R \n >>\n/XObject << /FedExGround 20 0 R\n/GroundG 21 0 R\n/barcode0 22 0 R\n>>\n>>\n/MediaBox [0 0 612 792]\n/TrimBox[0 0 612 792]\n/Contents 19 0 R\n/Rotate 0>>\nendobj\n19 0 obj\n<< /Length 2457\n/Filter [/ASCII85Decode /FlateDecode] \n>>\nstream\nGatU6gMRrh&:G@VIj!+),X=7-P/A1\"c&%]YS&VV5h>k<hYm[pqm8cr-qt_@S/_Lo+M5_si?r1L^+_QPI\nRAG9J]X.Bp:lOJc#e@bi-T#KX[eS`MMV_GDS(63Yl-*3>!Djh0KA[-SLTL]:2]d:VQp#mn7a9rURBTil\n4#:CurfILDE8_0U&q(H=S0tR$T:,T&Nt/mQnmM\"RCqf,o#e]<P>CF.<LTBNlj_m48H!N5np,K/r=#SB*\nQ^@0d:<gshhS2!>QcmjK-lr>k)3J8jrp?ud49L]d@K6Mc*^\",oTZrp\'@Wasr=Lua&\'26]gYrT%_HI3:3\n&FjI/ok\\RH$,fep>\"Xjj5Q9W,L[7`=2n_U@Z<En]G__Dlf;sn*YJ.M@62#190hkf]n\\\"(I@bqeJE(CrX\n><D5J.Do!/+_25kZ-fVif?nN,Ho-?P`-e.%KH\\Y_o4QI867-]X-@,:H]3S!AZN1OHm_V7.`ml1n6qtMn\nRiM=s_o4OW>m\'g^<\\D_EQZ(cL2a8Kq`5UPAmlJc7^O10;p@f>D7%cc9+&^gPnOD)T[eTh*((-!X?bP*O\nmWu]F?bLo*Not?Sk=9`Qk1Y`&2nT\'.oufSCMg%h#^\\hS#ZC$$[hO#LK9frtbMD`_HX7Ng$ZTgX@B-2;m\nN12gjI(5Oc0?iaqVt8O&OkDrQD[mO0qtT-f*Q`_7PFpXNKMNX35O]o63d)bW)[!`8>@!b*?C:3T&-Fmk\nmm-)9#7^KZG04-/o:7#+T00Vmq0cl-&*%_k#+Wmr50c-JjeTB-P/G<Z<Z-:QWc_dQR^_IIa4]_Tmh`%J\nNu+^+s)Rg-VFAMc6<jG.d1\'Zr-Kh,!A2q(BYF3(*8q`=#1ig5G8Zjs=]Wo8b\\4:hQhBMT55\",nn6hHd#\nXB50C-!2YMk]#m9r:BX=8e^phIW37,jD_b\"l`hHgCl<p]><0k/Aq0d,_GCl!Q[s48[m$Ds-u]T9.QIjE\n@Rc7HAW8o+=)T`fcg6W[3oe-6%NW<4kYREsGS&cLia\'&T_\"7(oSDGa=R-8U&R2`*+a==5\\i^(lcle[Tn\nC0EO*7-m8p_.dmZ,jUjX3]?/b5`^HL!kuE.42*YKD5bWUd10\'/0fNaY=DgZ(!1Qm@c?<*]Gb?emfNBFD\nZ5ZCNY\'3TS#iiad4?E[a9;o]bKsl@ZAO5=r*G8mOi[qQ[C0]qR&4\'8(WfeV3D@0CRVU0GC.@$uh,bf7^\n9<KF;j#U[9iuhiTd;78W/YNO\'Bf\\sUb512$->J7i2QG5B3/mG=[hLfaUXim(=KbE2.WKGrBG>/lKc8Pl\n7$\\$YqG6&QpC]?J-@joM4Hs8HSoCEWe<Ht`SY8;.d<m!Z<lq*dDCTM`3eNpK_oM+Wk?srjEMtg\\C1+7@\n8;9t\')PGBt[3Bu\"fIQ(M(qu#O/nEiJMAk,!`T*)=!m!lZRR\'dQ];=HP4:Vm2\\nYH[FTU2GjkXmfHtb!/\n\\8EH8JF!83\\R=CC8k9W2hE?Q\"W[)8MK?CYZliaOsapje@lN;`!ioFfG<PZ=iSUue$%\"AL^D\'\"<C^g:+(\nhOlQq7RofZ><.*5fI[iY!(KRZ7hhHdX+@r^-l-<9+WLLRqdr\\c!US(=W\"uqV\\FJ4FaYc\"WL$K14</W\'&\n6;Z=l[l7:rlnojl`q$hSD-\'Q\"p84j@SWPN[Q3oSi,*R&r;)PT0Id2]Q7iC?G>+mBF\"1tB0c]_qYMHA]l\n<&Lo3<N:Zc#)=S&R4,LP]e[\\E3\"FCS!c$\\+78X0!V;`=@$jnMaBtF`(.>2?Si+90l;6@4\"HihqPjTj%]\n_V)sJ[H4:m@(2A\\boXSt$D1/K`q9\\4FtBh0,=te&\\<W+%JDF*c7W1\\A`8#/nCL\"\')]6YP$gKTG$g\'ifV\nfI[i\\gG\'Xg3YT$8.9-D\\V.>PB.%9%\\[<>N/lP8tI-L$=mbi(ZtL-uL;QAT24-fe)N#W3Du\"1tDLGC3F2\n]85UQ)&+s4=\"=\"8]nQ[fae<u\":&qo&F<!g2*7:a`<^r\\]p.@\'!&M2pn6mV2d<\"82[iisUA9eeWrRpf.r\nH_jP\"QIZRn7BJJkYo;4GjMqNqi>jX*c(M\"dh,6\"OI`O8_g;RlflRViPlGbFKL/8?GXMl.da&3AI+JMh=\nSU?F_\'iOfe03\'kjMor1K<8i.oK_k?7ND3&Z)qWcs3),%dnUqn?\\Cn(9\\6dXXBM<\\6+[5J/Pa5.\"lSVu-\nZ/%cW)*[RoZ,SYTesCJ8FU\\hL@T^\"\\B[A&0Ye&\\Z\\.JYX*E]uRi<9Yg,s>$#2E\\F\\kI)uPrPX(m(e[\'`\nX@X:65rY.!.%k(A*<tX!:G1WA)-M<5Fe$Gs^_Dq9J/Z1I\\2s_;a=[N\'@t[?]o^=5AHYH1t9JKpZN)L9E\nb-!R9]X\\e7q,:S?`[bEJ<,%k],bM_>mG;kA(ucfnkcf4*0hp$)\'8AA:a?\'`f==]_p)f)85SB3Ff!Bmt(\nPegmiFYTIM0_lYD)$0a<_/Fbk~>\nendstream\nendobj\n20 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 118\n/Height 47\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 450\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/eJI]R?#XnLgT6<df/I.&?B=hcDag-rD4]0%PfMTZ+`QSI+J]C^&rD3A8lM8nnFFP!I.f*jYC2Tn[\n<7i(7\\<JH!<uVum3HJfk<8)+%ZN*Mf-s%l>VZUCs,9`9oW&TM%/cgmJU%.fLhbI$\'>Bgu_i@Q+C&bWr6\n3DCM6/FUMt,DB^,*R00s\"]WFGC0j:#Wa4gW<*QeT;,?;BS!oru5u$_3B2j\\2C.\'b.FXq@X1A*,a\\SaGJ\n:nMkcIQ\\.Jf:057_-L4J<%2QMmIao@\\88FKGb1p,mW;%.HNC.;V.+`d)s:rBhUjLHBX2RC^9_q81nV[K\nL=2QBFt;rTCn6[fpmpr7S_cG!dW[,sX1++8R<)-%FcU.kRpWS)XE;9+;4lS+_6AsrcEbQLcIEc_;%MKE\n3cjGT9*N[J.pN2WmI8W?$l;c6]5d/?p8t<sEaJ2erl+~>\nendstream\nendobj\n21 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 54\n/Height 54\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 196\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"0O3u3>h$q/M0J(%S7,KuY<-s.lH-\'qES(pROHCrPn$7Z9)a6\"LR\'S#oC5:\"ElhL$23%2?:_\'lcY/t\n9&C4/N@rO[[E\'jb`s>\\:Ppjm5<C,M=&X;o,AQjmfakJmG$0DpT<`/WHCIKdh8p<0kI2?aaUiIL1W3\"C!\n6Dd66l,>W^H[f.=$)rLnTiSfI43@9I<W~>\nendstream\nendobj\n22 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 294\n/Height 52\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 1067\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/c;/Y/S$q#1;9<1TGI&*89M?<2;7h0_&oup7n\'<LW8p=eip<TiZ1mlYj_cgB?9Zi#7G^$C&15L2)X\nZ1`;gpW\\=d\\`XXP]!L=o.RWCbM\"`oYZ905`WR>;DIp;rP;(`tm95,jR@nJqC&-]K2,Z2^0n(_LS5iFr-\n\"V_3\\#%/E9a\"!6oIlo6r#>4ZnBFUIaV58:#Oo^\\!+q-I<*BCP2U^A3HfV1#>pqtC(W=mjPW=iMtQ(i;<\nbXR;0g0oCY/Z#M4,\'-*@N>tJr45n%[CK<,`#\'tOk6\'g\'NYl\'$n\",Q/I(`TJ3eKB;64S-:`[$7^knn8:\\\nc\\0Rcb0aqk_iBsp9HUl$D-RmX5Hr08)6h5QE>?8Ub[*(AG*gWT\\k7fU1.=&`&r\'P(4?]]]Bq3Chp7,ll\n5uI$E^65PZk:.lo:t[AXm.F0:dSa7@Iu+dj8>.s`E6[b5,?1(^#r#6h-[]!N3+0s-OJ&6gph1IdA2W$p\nS^q]77!c/\'QI:1Rg*@LdP;HTm1cikS4>EQQ%ZXU*5r_Pdr]NJ0(n7JS+1Hja\\1Jk^cr+%>2^pUA]^Q9-\n*&9RGBLLL<X4arO\"uZPoMKlQL!!=69f%r4!.W)_oBG;KI_,=H/(FcmuL6+LGYp1(,_q$fR7NW$gP`EEr\nii\"Lr*kJ43]8\'\\06=o895,gH0QdSdC8En%]3$PIMcZ1GC7HD5#@uh(j8D4V,MNhb/3gW$UqO=csl?6>d\n\\tH[CPa9aITG.Xl;oMFm\'ZI@aH=:Co0pIX[Kj0#[B8]k4U+PKjJPZWlcN7!DVD6ip[?R!*I7anP68Afj\n.-\\*\'R)Mq0r/aVgdIaan\\L@SJgM?HHV3+%n&(T1u1e>-Q[$7^kJlY.Y>5$`3F/nd:rs+Q$3AFBMVZn,\"\nN24`VNbSbJ`$o=/&e/[>kj%N]TNXr\\kp@^YWhs*4#ND\"-0tlgbac1?:[`?<_)5]erg>#lGA5Ymu;-HgY\n-KjFc*;&qG)G=cn?);\':d[\\i^ZU7)7D,mj(FQ)Z?0-;i\'f7AY^3JN1/)R(13-)Uf=P@tH6A7d8BV12!L\nYMW^%!\'hINdf~>\nendstream\nendobj\nxref\n0 23\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000104 00000 n \n0000000162 00000 n \n0000000214 00000 n \n0000000312 00000 n \n0000000415 00000 n \n0000000521 00000 n \n0000000631 00000 n \n0000000727 00000 n \n0000000829 00000 n \n0000000934 00000 n \n0000001043 00000 n \n0000001144 00000 n \n0000001244 00000 n \n0000001346 00000 n \n0000001452 00000 n \n0000001622 00000 n \n0000001999 00000 n \n0000004548 00000 n \n0000005184 00000 n \n0000005565 00000 n \ntrailer\n<<\n/Info 17 0 R\n/Size 23\n/Root 1 0 R\n>>\nstartxref\n6819\n%%EOF\n\";}}}}}s:15:\"SignatureOption\";s:15:\"SERVICE_DEFAULT\";}}}}}}}}');
INSERT INTO `shipping_details` (`id`, `order_id`, `seller_id`, `job_id`, `carrier_code`, `shipment_tracking_no`, `pkg_tracking_no`, `fedx_response`) VALUES
(3, 3, 8, '4ace647920674fq12703j027387', 'FDXG', '794643995967', '794643995967', 'a:3:{i:0;O:57:\"FedEx\\OpenShipService\\ComplexType\\CreateOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:23:\"CreateOpenShipmentReply\";s:9:\"\0*\0values\";a:7:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j027387\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:4:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643995967\";}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:3:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643995967\";}}}s:11:\"GroupNumber\";i:0;}}}}}s:5:\"Index\";s:12:\"794643995967\";}}i:1;O:59:\"FedEx\\OpenShipService\\ComplexType\\RetrieveOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:25:\"RetrieveOpenShipmentReply\";s:9:\"\0*\0values\";a:4:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:17:\"RequestedShipment\";O:51:\"FedEx\\OpenShipService\\ComplexType\\RequestedShipment\":2:{s:7:\"\0*\0name\";s:17:\"RequestedShipment\";s:9:\"\0*\0values\";a:11:{s:13:\"ShipTimestamp\";s:25:\"2019-09-13T13:50:17+00:00\";s:11:\"DropoffType\";s:14:\"REGULAR_PICKUP\";s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:13:\"PackagingType\";s:14:\"YOUR_PACKAGING\";s:7:\"Shipper\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:9:\"Recipient\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:2:{s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:12:\"Priyanka Das\";s:11:\"PhoneNumber\";s:10:\"3454657678\";s:12:\"EMailAddress\";s:24:\"demo@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:18:\"13450 Farmcrest Ct\";s:4:\"City\";s:7:\"Herndon\";s:19:\"StateOrProvinceCode\";s:2:\"VA\";s:10:\"PostalCode\";s:5:\"20171\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:22:\"ShippingChargesPayment\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Payment\":2:{s:7:\"\0*\0name\";s:7:\"Payment\";s:9:\"\0*\0values\";a:2:{s:11:\"PaymentType\";s:6:\"SENDER\";s:5:\"Payor\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Payor\":2:{s:7:\"\0*\0name\";s:5:\"Payor\";s:9:\"\0*\0values\";a:1:{s:16:\"ResponsibleParty\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}}}}}s:26:\"ProcessingOptionsRequested\";O:68:\"FedEx\\OpenShipService\\ComplexType\\ShipmentProcessingOptionsRequested\":2:{s:7:\"\0*\0name\";s:34:\"ShipmentProcessingOptionsRequested\";s:9:\"\0*\0values\";a:0:{}}s:22:\"BlockInsightVisibility\";b:0;s:18:\"LabelSpecification\";O:52:\"FedEx\\OpenShipService\\ComplexType\\LabelSpecification\":2:{s:7:\"\0*\0name\";s:18:\"LabelSpecification\";s:9:\"\0*\0values\";a:3:{s:15:\"LabelFormatType\";s:8:\"COMMON2D\";s:9:\"ImageType\";s:3:\"PDF\";s:14:\"LabelStockType\";s:9:\"PAPER_4X6\";}}s:12:\"PackageCount\";i:1;}}}}i:2;O:58:\"FedEx\\OpenShipService\\ComplexType\\ConfirmOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:24:\"ConfirmOpenShipmentReply\";s:9:\"\0*\0values\";a:6:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4c6e6574605246q12503j007013\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:9:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643995967\";}}s:22:\"ServiceTypeDescription\";s:3:\"FXG\";s:18:\"ServiceDescription\";O:52:\"FedEx\\OpenShipService\\ComplexType\\ServiceDescription\":2:{s:7:\"\0*\0name\";s:18:\"ServiceDescription\";s:9:\"\0*\0values\";a:5:{s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:4:\"Code\";s:2:\"92\";s:5:\"Names\";a:7:{i:0;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:16:\"FedEx GroundÂ®\";}}i:1;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:12:\"FedEx Ground\";}}i:2;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:10:\"GroundÂ®\";}}i:3;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:6:\"Ground\";}}i:4;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:2:\"FG\";}}i:5;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"FG\";}}i:6;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"abbrv\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"SG\";}}}s:11:\"Description\";s:12:\"FedEx Ground\";s:16:\"AstraDescription\";s:3:\"FXG\";}}s:20:\"PackagingDescription\";s:14:\"YOUR_PACKAGING\";s:17:\"OperationalDetail\";O:59:\"FedEx\\OpenShipService\\ComplexType\\ShipmentOperationalDetail\":2:{s:7:\"\0*\0name\";s:25:\"ShipmentOperationalDetail\";s:9:\"\0*\0values\";a:6:{s:20:\"OriginLocationNumber\";i:117;s:25:\"DestinationLocationNumber\";i:221;s:11:\"TransitTime\";s:8:\"TWO_DAYS\";s:31:\"IneligibleForMoneyBackGuarantee\";b:0;s:11:\"ServiceCode\";s:2:\"92\";s:13:\"PackagingCode\";s:2:\"01\";}}s:14:\"ShipmentRating\";O:48:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRating\":2:{s:7:\"\0*\0name\";s:14:\"ShipmentRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:19:\"ShipmentRateDetails\";a:1:{i:0;O:52:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRateDetail\":2:{s:7:\"\0*\0name\";s:18:\"ShipmentRateDetail\";s:9:\"\0*\0values\";a:19:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:8:\"RateZone\";s:1:\"3\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:10:\"DimDivisor\";i:0;s:20:\"FuelSurchargePercent\";s:3:\"7.0\";s:18:\"TotalBillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"LB\";s:5:\"Value\";s:3:\"5.0\";}}s:15:\"TotalBaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:15:\"TotalNetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:19:\"TotalNetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:14:\"TotalNetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:19:\"TotalDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:26:\"TotalAncillaryFeesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:23:\"TotalDutiesTaxesAndFees\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:32:\"TotalNetChargeWithDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:7:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643995967\";}}}s:11:\"GroupNumber\";i:0;s:13:\"PackageRating\";O:47:\"FedEx\\OpenShipService\\ComplexType\\PackageRating\":2:{s:7:\"\0*\0name\";s:13:\"PackageRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:18:\"PackageRateDetails\";a:1:{i:0;O:51:\"FedEx\\OpenShipService\\ComplexType\\PackageRateDetail\":2:{s:7:\"\0*\0name\";s:17:\"PackageRateDetail\";s:9:\"\0*\0values\";a:12:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:13:\"BillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"KG\";s:5:\"Value\";s:4:\"2.27\";}}s:10:\"BaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"NetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:14:\"NetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:9:\"NetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:17:\"OperationalDetail\";O:58:\"FedEx\\OpenShipService\\ComplexType\\PackageOperationalDetail\":2:{s:7:\"\0*\0name\";s:24:\"PackageOperationalDetail\";s:9:\"\0*\0values\";a:3:{s:23:\"OperationalInstructions\";a:6:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:2;s:7:\"Content\";s:4:\"TRK#\";}}i:1;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:7;s:7:\"Content\";s:34:\"9622001900008000266200794643995967\";}}i:2;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:8;s:7:\"Content\";s:15:\"567J1/9D04/05A2\";}}i:3;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:10;s:7:\"Content\";s:14:\"7946 4399 5967\";}}i:4;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:15;s:7:\"Content\";s:5:\"20171\";}}i:5;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:18;s:7:\"Content\";s:46:\"9622 0019 0 (000 800 0266) 2 00 7946 4399 5967\";}}}s:8:\"Barcodes\";O:49:\"FedEx\\OpenShipService\\ComplexType\\PackageBarcodes\":2:{s:7:\"\0*\0name\";s:15:\"PackageBarcodes\";s:9:\"\0*\0values\";a:2:{s:14:\"BinaryBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\BinaryBarcode\":2:{s:7:\"\0*\0name\";s:13:\"BinaryBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:9:\"COMMON_2D\";s:5:\"Value\";s:187:\"[)>010220171840019794643995967FDEG80002662561/12.00KGN13450 Farmcrest CtHerndonVAPriyanka Das0610ZGD00912Z345465767820Z31Z962200190000800026620079464399596734Z01\";}}}s:14:\"StringBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\StringBarcode\":2:{s:7:\"\0*\0name\";s:13:\"StringBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:8:\"FEDEX_1D\";s:5:\"Value\";s:34:\"9622001900008000266200794643995967\";}}}}}s:17:\"GroundServiceCode\";s:3:\"019\";}}s:5:\"Label\";O:50:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocument\":2:{s:7:\"\0*\0name\";s:16:\"ShippingDocument\";s:9:\"\0*\0values\";a:6:{s:4:\"Type\";s:14:\"OUTBOUND_LABEL\";s:27:\"ShippingDocumentDisposition\";s:8:\"RETURNED\";s:9:\"ImageType\";s:3:\"PDF\";s:10:\"Resolution\";i:200;s:13:\"CopiesToPrint\";i:1;s:5:\"Parts\";a:1:{i:0;O:54:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocumentPart\":2:{s:7:\"\0*\0name\";s:20:\"ShippingDocumentPart\";s:9:\"\0*\0values\";a:2:{s:26:\"DocumentPartSequenceNumber\";i:1;s:5:\"Image\";s:7351:\"%PDF-1.4\n1 0 obj\n<<\n/Type /Catalog\n/Pages 3 0 R\n>>\nendobj\n2 0 obj\n<<\n/Type /Outlines\n/Count 0\n>>\nendobj\n3 0 obj\n<<\n/Type /Pages\n/Count 1\n/Kids [18 0 R]\n>>\nendobj\n4 0 obj\n[/PDF /Text /ImageB /ImageC /ImageI]\nendobj\n5 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica\n/Encoding /MacRomanEncoding\n>>\nendobj\n6 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n7 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n8 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n9 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier\n/Encoding /MacRomanEncoding\n>>\nendobj\n10 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n11 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n12 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n13 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Roman\n/Encoding /MacRomanEncoding\n>>\nendobj\n14 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n15 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Italic\n/Encoding /MacRomanEncoding\n>>\nendobj\n16 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-BoldItalic\n/Encoding /MacRomanEncoding\n>>\nendobj\n17 0 obj \n<<\n/CreationDate (D:2003)\n/Producer (FedEx Services)\n/Title (FedEx Shipping Label)\r/Creator (FedEx Customer Automation)\r/Author (CLS Version 5120135)\n>>\nendobj\n18 0 obj\n<<\n/Type /Page\r/Parent 3 0 R\n/Resources << /ProcSet 4 0 R \n /Font << /F1 5 0 R \n/F2 6 0 R \n/F3 7 0 R \n/F4 8 0 R \n/F5 9 0 R \n/F6 10 0 R \n/F7 11 0 R \n/F8 12 0 R \n/F9 13 0 R \n/F10 14 0 R \n/F11 15 0 R \n/F12 16 0 R \n >>\n/XObject << /FedExGround 20 0 R\n/GroundG 21 0 R\n/barcode0 22 0 R\n>>\n>>\n/MediaBox [0 0 612 792]\n/TrimBox[0 0 612 792]\n/Contents 19 0 R\n/Rotate 0>>\nendobj\n19 0 obj\n<< /Length 2457\n/Filter [/ASCII85Decode /FlateDecode] \n>>\nstream\nGatU6gMRui%\"2J*rudsf8UsK&8JJ/:3Uu7[VQjoTDh)3\'Ym[pqm<4ukp@USsGh;Y(PZZZH&/au+F!QpC\naH:lf]X)iR-q<cBK\\Tsp\',i\\<>Q!q77;j`3c0B-=FQTWj!%9Ls61>9!_c?iX)_X?[bT8trULs&f9\\:oq\nSJa0us2Y<]\\F9Y;M*?e/cBDA#ccl@N7gEBcH*I\'d2ICQH\"C?09XZg\'Y_q\"=qo!b0W]WRZGH_&`k/\":1P\nbKG*BVrm(on)\'V0bN7t`P`GdqN6&20s7Y)mSq4rm0n9:B%j!QHct6!$Z+;%t/DXp$#ps<DfGn!j]k@[*\nM\"n?SHFC<_\"C`iH/Z$MF+91iQ6hVk/RpMg0=Y7u?]Yd:GCY$JP=\'sa[+F?&-R&6t?G[GP`0lMp`3$aN=\nXdsX`P[Q!(&@..Ff]^lEf?nN,Ho-?P`-e.%KH\\Y_o4QI867-]X-@,:H]3S!AZN1OHm_V7.`ml1n6qtMn\nRiM=s_o4OW>m\'g^<\\D_EQZ(cL2a8Kq`5UPAmlJc7^O10;p@f>D7%cc9+&^gPnOD)T[eTh*((-!X?bP*O\nmWu]F?bLo*Not?Sk=9`Qk1Y`&2nT\'.oufSCMg%h#^\\hS#ZC$$[hO#LK9frtbMD`_HX7Ng$ZTgX@B-2;m\nN12gjI(5Oc0?iaqVt8O&OkDrQD[mO0qtT-f*Q`_7PFpXNKMNX35O]o63d)bW)[!`8>@!b*?C:3T&-Fmk\nmm-)9#7^KZG04-/o:7#+T00Vmq0cl-&*&\"s#+Wmr*bQJ5Emi]Qal2cE<<cg-C7SJ-k3Y1kEHXDCqo.jk\nj2J\"N^RT_9Bot-\\d$>bYF@4``agifK)%LQ*CM*%#&n*%!N>sT@P,lh=D_*RqmSTRX[g;r&:Jlb_&:Gl6\nlP4k?$\'n1A3ZL4\'s1H%SdY,<H+\'`dc3?0^\"H>J?GgZ%/F<mL8dfj?sI(eUOl12p\"Yf&os5\"cd\"d,tGdP\nbXc`fXRW4MlL!]tRD#jrB7.5DU#WTm*D/\'k&)peq]F.dGGWoGkdp$B$\'7I#7Es%[B=_77s4NKO4h4(ZU\n:!3a-Lj]OU3%aQSA3CSra6%a^kRgWq_\"[S8a7j2Q%<Yf\'g-Nk8k2r`]b71EW?rLgpfhRD=%oakU4)8@p\nG!i7Gor]_Q@6D&_B8>D^$!\"L4d$AUH/4f]Kj(o-1]VUohNU\'g\\,)D+B<Kb;99q_pG\'UfLoV39Aj6kg,S\naYe`d>\\>U$*+[8GRVeLh,uiha9rD\\r=eE@W7\'2R*7Wk./LN220Q3&FSe65NLl]m<.,qb2`N?YL+:uaTj\naO9!=s!aJr?D<2&\"L)*fLGDQF\'2FdRRSjm)1DC*BRa:$>.X>\"49r2]3B5eN1pm<)h*\"3N4%eYQS%I>qo\naUlU\"\"4T?A<eO6KH_m5Q_q/nRL$Y9p;$4G,GW^\"D!;VGK)&+s4>7/[$j7\"1gX1\"9t-\\/m.h@6s;Q\\JCl\nlP;ega:@^($Pj5SKJW_rh,C8F8qQasW-g\\E:&qo&gn8r#4s64;:7e=^\"me>&.EE@An97^ZjtSgrluc=r\n%132PF>PhZQ.%+2h,85$@&,W%7\'UI@)V?Qo@PMI2_>u@*D\\eTO^tr=SC6?\\p)il#.>]WhD\\DH^B[90.Q\n\"GQf&HW/J1?Lsju/Dp?OFp2GkDlO`.)<i>TWIU`e1+>.&<<IU8Vg_0^PVLI^\'q/#XYZhJ(4BY.TGkLGu\n<<ISRV)h.UE-P<MM..FT/!F4hj\"QH9TGDEG\'K*+!.ZTY.TWjTJ[]=A<6?m\\_?5AG;eOh@7-\\1#NIaB&_\nS:.J9>CN\"@G\"_)Pm,<.\\i=ei<\\6^?.NofkK,Y;_a\\+7oLYZm\"*k`\'8:R%*JUNU%=\"=5RLqHg?baRitW2\n];7ji3bDksB**99V(,l^P`5,O7Iq>%erHbM]gA=1,TY9j3Lg?!OJm`d;K6ONKH/,;U#r(a@(4Y\\NR*Jl\n(X`.<K;&SD8d.G.f8tM)3Acf7$\"16,NoOfC,<GMIb30MS?7Da+Jjiq+LrA,4We&u(4;Pl0.0es`1G!9K\nY7sULde[CUW7>K?<o^cFr#!6u]HbFm)&+s4>=uo\\%p;@h]9o^?I:]$<h70<<&?:;P[?s>?=K5dE7$L<E\nPHSu>64,s?V5d!t;;&@1.U90@:nQUYZ\"XM]j#UB`VeM5TSra$o2uC!$f5!D]N@Bo9`(0fmdLrR!]r\"Fb\n[X2[=_^@Vuf!qU(qN?l9Y/*D&%#]9H%D$\'X<nBDH(W)fS\",kc\\GQC0]8WV?7%?E+0\\ZJLl5;AcI`fcBF\nCJr/Qd*8C6$L!jiQOM<Tga%eZA7Y)peSuLk!)lE,!,DGN_qbXG6Zs&T(aD-UUOQ\'\"gIl;h@>Y*?@[r%C\n;0Jd5j3>!)a\\R%&)m=Wp;l+IhP\'lgA[<p*M@#1!TU;PRDa#$*B:)MP1+n$g5@]`l^DQJtpF!cCL#5$t?\n:^3+@f#;n)^uXC?aU%YPii.A<~>\nendstream\nendobj\n20 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 118\n/Height 47\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 450\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/eJI]R?#XnLgT6<df/I.&?B=hcDag-rD4]0%PfMTZ+`QSI+J]C^&rD3A8lM8nnFFP!I.f*jYC2Tn[\n<7i(7\\<JH!<uVum3HJfk<8)+%ZN*Mf-s%l>VZUCs,9`9oW&TM%/cgmJU%.fLhbI$\'>Bgu_i@Q+C&bWr6\n3DCM6/FUMt,DB^,*R00s\"]WFGC0j:#Wa4gW<*QeT;,?;BS!oru5u$_3B2j\\2C.\'b.FXq@X1A*,a\\SaGJ\n:nMkcIQ\\.Jf:057_-L4J<%2QMmIao@\\88FKGb1p,mW;%.HNC.;V.+`d)s:rBhUjLHBX2RC^9_q81nV[K\nL=2QBFt;rTCn6[fpmpr7S_cG!dW[,sX1++8R<)-%FcU.kRpWS)XE;9+;4lS+_6AsrcEbQLcIEc_;%MKE\n3cjGT9*N[J.pN2WmI8W?$l;c6]5d/?p8t<sEaJ2erl+~>\nendstream\nendobj\n21 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 54\n/Height 54\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 196\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"0O3u3>h$q/M0J(%S7,KuY<-s.lH-\'qES(pROHCrPn$7Z9)a6\"LR\'S#oC5:\"ElhL$23%2?:_\'lcY/t\n9&C4/N@rO[[E\'jb`s>\\:Ppjm5<C,M=&X;o,AQjmfakJmG$0DpT<`/WHCIKdh8p<0kI2?aaUiIL1W3\"C!\n6Dd66l,>W^H[f.=$)rLnTiSfI43@9I<W~>\nendstream\nendobj\n22 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 294\n/Height 52\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 1060\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/cgJ2NM$q\'Xd590kg?M9UUkX^Kf,t0DtF)gO]2;S/`f=l.:C0pl:c,0\'7O.RN?p=IdFWVLqUc8Jn3\npN\\46SJRo=cTB^hZf\"fJU%oPqT\'MU%H.u)ZQ?E2WqKIp>!P)B+9Bhclq(=uJeAd\\?.F2Yi0)Gk\\s%tA@\n3%-ZbirHYkOehmA?25KhJ_kg2\"tc[JFISEo77(KT3=1ZbG61Zr%p*SpDaZ`SU`>jp.;:S<_CN)n<\"?oa\n#\'&A7qGLKh=\"-T#-5u(#TJS%T_VQi$8;1a$\'8FPQ6>=U5#>>mUU1[nNW7\"Xto\\E[A\\YZZtY#=h(#VFAU\nc7d>fC$s6&P\\<aOh3^+\'Mq)au@ttKFABq[l?m0-cR1$W\"Bdm>a6n\"ItR[/Wc/9S%SC0MT(B0(B72:8(q\nc;@rj<V(VRPVf?*Q#QHn06:hV/Z&J8#oBDa0-5)Wm-#%]beO?@;@t:(=,/bCbYaIpTJ-(R(Nj7GfeK&K\nDV[^,ZBU[\'I7cOG(i5BmIeIGsR-jLb&I!/n]MoJr@I!`noAbh8\'=I\\s<mVhq-\"ITk8k\\CqV5Au+?:$,s\nN1Nd$,4*J&Ctj1:Rt1f54Bi;GJW;)ClqFWU>OEpY7E8M48k\\Cm-!/8$Eb@FVj<Am&)Dc1$`h5Z_g1s%q\nogOs2f<f2bYj8Mi=h18&Wm0M![$31@H8@\\;\"m7TE!nal[;.,H5*:QAEJS7oVS.k0mqIK8SZJOki=u*[^\n]=!lhdN;;C$hC9+g@t(r%PrM7F:j>f\';FH@rb/GS\';HdpB9d_\"%Hl7E8KEJZ/[E!QQI9VB$jKC\':1bVi\nSr5VgTDCP4:air!c+#-Z`[1:\\p#YaUQUR^e8>i#8Kri5OZ\':R&4\\?U$.Fj+Cc[Ui<+h;PN\'D=-b1iH?`\nGk.&rgQYZBUtZ:I*<oNrd9J^Q5gA8RdSdYHknI4[$7Ml[U#(@&3YJop.].mYhAJRBS;2U\\e\'k$1fnZr;\nbjJ^sNIXZ9.:&hsH\\\\\'@-W!!JU2r\"BB0r:`lUa?.R#=;m;u%;JZ0:BY(*#.0j2O9CAh9dTo]qb8p%.JO\nf\'p0:~>\nendstream\nendobj\nxref\n0 23\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000104 00000 n \n0000000162 00000 n \n0000000214 00000 n \n0000000312 00000 n \n0000000415 00000 n \n0000000521 00000 n \n0000000631 00000 n \n0000000727 00000 n \n0000000829 00000 n \n0000000934 00000 n \n0000001043 00000 n \n0000001144 00000 n \n0000001244 00000 n \n0000001346 00000 n \n0000001452 00000 n \n0000001622 00000 n \n0000001999 00000 n \n0000004548 00000 n \n0000005184 00000 n \n0000005565 00000 n \ntrailer\n<<\n/Info 17 0 R\n/Size 23\n/Root 1 0 R\n>>\nstartxref\n6812\n%%EOF\n\";}}}}}s:15:\"SignatureOption\";s:15:\"SERVICE_DEFAULT\";}}}}}}}}');
INSERT INTO `shipping_details` (`id`, `order_id`, `seller_id`, `job_id`, `carrier_code`, `shipment_tracking_no`, `pkg_tracking_no`, `fedx_response`) VALUES
(4, 4, 10, '4ace647920674fq12703j027685', 'FDXG', '794643998109', '794643998109', 'a:3:{i:0;O:57:\"FedEx\\OpenShipService\\ComplexType\\CreateOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:23:\"CreateOpenShipmentReply\";s:9:\"\0*\0values\";a:7:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j027685\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:4:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643998109\";}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:3:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643998109\";}}}s:11:\"GroupNumber\";i:0;}}}}}s:5:\"Index\";s:12:\"794643998109\";}}i:1;O:59:\"FedEx\\OpenShipService\\ComplexType\\RetrieveOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:25:\"RetrieveOpenShipmentReply\";s:9:\"\0*\0values\";a:4:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:17:\"RequestedShipment\";O:51:\"FedEx\\OpenShipService\\ComplexType\\RequestedShipment\":2:{s:7:\"\0*\0name\";s:17:\"RequestedShipment\";s:9:\"\0*\0values\";a:11:{s:13:\"ShipTimestamp\";s:25:\"2019-09-13T14:10:02+00:00\";s:11:\"DropoffType\";s:14:\"REGULAR_PICKUP\";s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:13:\"PackagingType\";s:14:\"YOUR_PACKAGING\";s:7:\"Shipper\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:6:\"gloria\";s:11:\"PhoneNumber\";s:10:\"8563254152\";s:12:\"EMailAddress\";s:14:\"test@gmail.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:19:\"59 West 46th Street\";s:4:\"City\";s:8:\"New York\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"10036\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:9:\"Recipient\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:2:{s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:12:\"Priyanka Das\";s:11:\"PhoneNumber\";s:10:\"3454657678\";s:12:\"EMailAddress\";s:24:\"demo@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:18:\"13450 Farmcrest Ct\";s:4:\"City\";s:7:\"Herndon\";s:19:\"StateOrProvinceCode\";s:2:\"VA\";s:10:\"PostalCode\";s:5:\"20171\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:22:\"ShippingChargesPayment\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Payment\":2:{s:7:\"\0*\0name\";s:7:\"Payment\";s:9:\"\0*\0values\";a:2:{s:11:\"PaymentType\";s:6:\"SENDER\";s:5:\"Payor\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Payor\":2:{s:7:\"\0*\0name\";s:5:\"Payor\";s:9:\"\0*\0values\";a:1:{s:16:\"ResponsibleParty\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:6:\"gloria\";s:11:\"PhoneNumber\";s:10:\"8563254152\";s:12:\"EMailAddress\";s:14:\"test@gmail.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:19:\"59 West 46th Street\";s:4:\"City\";s:8:\"New York\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"10036\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}}}}}s:26:\"ProcessingOptionsRequested\";O:68:\"FedEx\\OpenShipService\\ComplexType\\ShipmentProcessingOptionsRequested\":2:{s:7:\"\0*\0name\";s:34:\"ShipmentProcessingOptionsRequested\";s:9:\"\0*\0values\";a:0:{}}s:22:\"BlockInsightVisibility\";b:0;s:18:\"LabelSpecification\";O:52:\"FedEx\\OpenShipService\\ComplexType\\LabelSpecification\":2:{s:7:\"\0*\0name\";s:18:\"LabelSpecification\";s:9:\"\0*\0values\";a:3:{s:15:\"LabelFormatType\";s:8:\"COMMON2D\";s:9:\"ImageType\";s:3:\"PDF\";s:14:\"LabelStockType\";s:9:\"PAPER_4X6\";}}s:12:\"PackageCount\";i:1;}}}}i:2;O:58:\"FedEx\\OpenShipService\\ComplexType\\ConfirmOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:24:\"ConfirmOpenShipmentReply\";s:9:\"\0*\0values\";a:6:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4c6e6574605246q12503j007318\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:9:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643998109\";}}s:22:\"ServiceTypeDescription\";s:3:\"FXG\";s:18:\"ServiceDescription\";O:52:\"FedEx\\OpenShipService\\ComplexType\\ServiceDescription\":2:{s:7:\"\0*\0name\";s:18:\"ServiceDescription\";s:9:\"\0*\0values\";a:5:{s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:4:\"Code\";s:2:\"92\";s:5:\"Names\";a:7:{i:0;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:16:\"FedEx GroundÂ®\";}}i:1;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:12:\"FedEx Ground\";}}i:2;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:10:\"GroundÂ®\";}}i:3;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:6:\"Ground\";}}i:4;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:2:\"FG\";}}i:5;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"FG\";}}i:6;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"abbrv\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"SG\";}}}s:11:\"Description\";s:12:\"FedEx Ground\";s:16:\"AstraDescription\";s:3:\"FXG\";}}s:20:\"PackagingDescription\";s:14:\"YOUR_PACKAGING\";s:17:\"OperationalDetail\";O:59:\"FedEx\\OpenShipService\\ComplexType\\ShipmentOperationalDetail\":2:{s:7:\"\0*\0name\";s:25:\"ShipmentOperationalDetail\";s:9:\"\0*\0values\";a:6:{s:20:\"OriginLocationNumber\";i:103;s:25:\"DestinationLocationNumber\";i:221;s:11:\"TransitTime\";s:8:\"TWO_DAYS\";s:31:\"IneligibleForMoneyBackGuarantee\";b:0;s:11:\"ServiceCode\";s:2:\"92\";s:13:\"PackagingCode\";s:2:\"01\";}}s:14:\"ShipmentRating\";O:48:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRating\":2:{s:7:\"\0*\0name\";s:14:\"ShipmentRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:19:\"ShipmentRateDetails\";a:1:{i:0;O:52:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRateDetail\":2:{s:7:\"\0*\0name\";s:18:\"ShipmentRateDetail\";s:9:\"\0*\0values\";a:19:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:8:\"RateZone\";s:1:\"3\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:10:\"DimDivisor\";i:0;s:20:\"FuelSurchargePercent\";s:3:\"7.0\";s:18:\"TotalBillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"LB\";s:5:\"Value\";s:3:\"5.0\";}}s:15:\"TotalBaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:15:\"TotalNetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:19:\"TotalNetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:14:\"TotalNetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:19:\"TotalDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:26:\"TotalAncillaryFeesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:23:\"TotalDutiesTaxesAndFees\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:32:\"TotalNetChargeWithDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:7:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794643998109\";}}}s:11:\"GroupNumber\";i:0;s:13:\"PackageRating\";O:47:\"FedEx\\OpenShipService\\ComplexType\\PackageRating\":2:{s:7:\"\0*\0name\";s:13:\"PackageRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:18:\"PackageRateDetails\";a:1:{i:0;O:51:\"FedEx\\OpenShipService\\ComplexType\\PackageRateDetail\":2:{s:7:\"\0*\0name\";s:17:\"PackageRateDetail\";s:9:\"\0*\0values\";a:12:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:13:\"BillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"KG\";s:5:\"Value\";s:4:\"2.27\";}}s:10:\"BaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"NetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:14:\"NetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:9:\"NetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:17:\"OperationalDetail\";O:58:\"FedEx\\OpenShipService\\ComplexType\\PackageOperationalDetail\":2:{s:7:\"\0*\0name\";s:24:\"PackageOperationalDetail\";s:9:\"\0*\0values\";a:3:{s:23:\"OperationalInstructions\";a:6:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:2;s:7:\"Content\";s:4:\"TRK#\";}}i:1;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:7;s:7:\"Content\";s:34:\"9622001900008000266200794643998109\";}}i:2;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:8;s:7:\"Content\";s:15:\"567J1/9D04/05A2\";}}i:3;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:10;s:7:\"Content\";s:14:\"7946 4399 8109\";}}i:4;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:15;s:7:\"Content\";s:5:\"20171\";}}i:5;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:18;s:7:\"Content\";s:46:\"9622 0019 0 (000 800 0266) 2 00 7946 4399 8109\";}}}s:8:\"Barcodes\";O:49:\"FedEx\\OpenShipService\\ComplexType\\PackageBarcodes\":2:{s:7:\"\0*\0name\";s:15:\"PackageBarcodes\";s:9:\"\0*\0values\";a:2:{s:14:\"BinaryBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\BinaryBarcode\":2:{s:7:\"\0*\0name\";s:13:\"BinaryBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:9:\"COMMON_2D\";s:5:\"Value\";s:187:\"[)>010220171840019794643998109FDEG80002662561/12.00KGN13450 Farmcrest CtHerndonVAPriyanka Das0610ZGD00912Z345465767820Z31Z962200190000800026620079464399810934Z01\";}}}s:14:\"StringBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\StringBarcode\":2:{s:7:\"\0*\0name\";s:13:\"StringBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:8:\"FEDEX_1D\";s:5:\"Value\";s:34:\"9622001900008000266200794643998109\";}}}}}s:17:\"GroundServiceCode\";s:3:\"019\";}}s:5:\"Label\";O:50:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocument\":2:{s:7:\"\0*\0name\";s:16:\"ShippingDocument\";s:9:\"\0*\0values\";a:6:{s:4:\"Type\";s:14:\"OUTBOUND_LABEL\";s:27:\"ShippingDocumentDisposition\";s:8:\"RETURNED\";s:9:\"ImageType\";s:3:\"PDF\";s:10:\"Resolution\";i:200;s:13:\"CopiesToPrint\";i:1;s:5:\"Parts\";a:1:{i:0;O:54:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocumentPart\":2:{s:7:\"\0*\0name\";s:20:\"ShippingDocumentPart\";s:9:\"\0*\0values\";a:2:{s:26:\"DocumentPartSequenceNumber\";i:1;s:5:\"Image\";s:7355:\"%PDF-1.4\n1 0 obj\n<<\n/Type /Catalog\n/Pages 3 0 R\n>>\nendobj\n2 0 obj\n<<\n/Type /Outlines\n/Count 0\n>>\nendobj\n3 0 obj\n<<\n/Type /Pages\n/Count 1\n/Kids [18 0 R]\n>>\nendobj\n4 0 obj\n[/PDF /Text /ImageB /ImageC /ImageI]\nendobj\n5 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica\n/Encoding /MacRomanEncoding\n>>\nendobj\n6 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n7 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n8 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n9 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier\n/Encoding /MacRomanEncoding\n>>\nendobj\n10 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n11 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n12 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n13 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Roman\n/Encoding /MacRomanEncoding\n>>\nendobj\n14 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n15 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Italic\n/Encoding /MacRomanEncoding\n>>\nendobj\n16 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-BoldItalic\n/Encoding /MacRomanEncoding\n>>\nendobj\n17 0 obj \n<<\n/CreationDate (D:2003)\n/Producer (FedEx Services)\n/Title (FedEx Shipping Label)\r/Creator (FedEx Customer Automation)\r/Author (CLS Version 5120135)\n>>\nendobj\n18 0 obj\n<<\n/Type /Page\r/Parent 3 0 R\n/Resources << /ProcSet 4 0 R \n /Font << /F1 5 0 R \n/F2 6 0 R \n/F3 7 0 R \n/F4 8 0 R \n/F5 9 0 R \n/F6 10 0 R \n/F7 11 0 R \n/F8 12 0 R \n/F9 13 0 R \n/F10 14 0 R \n/F11 15 0 R \n/F12 16 0 R \n >>\n/XObject << /FedExGround 20 0 R\n/GroundG 21 0 R\n/barcode0 22 0 R\n>>\n>>\n/MediaBox [0 0 612 792]\n/TrimBox[0 0 612 792]\n/Contents 19 0 R\n/Rotate 0>>\nendobj\n19 0 obj\n<< /Length 2459\n/Filter [/ASCII85Decode /FlateDecode] \n>>\nstream\nGatU6d;E3u&Ue$%s$351[K0`V3#p5jDmCZN:0^Au[W)EE7CCZ(9l-M\\P-k2a*qDoRBmFENgGN@EgiLdb\nB84<lbN1^\'nG&)C9#TkV_W5!!R]HpEr6L344-*foEOL2-ioVBal9fhpHpRO`f1>/W6dOAbV_?/[>Q8Q:\nin\"-83H?2@a@2PnnjQDMSCFO&8ZY.Ygr#IsO8eq@dJBK9KCp?WP\\Z;os*T:cj69;aCtBrE4\\jUi96TdL\nI^sPT?2ha4>[Eqk?1,WJjStY[nb(pl5&jqB+S&Hg@\"?->K*JL3/F!+#PP\"j:iuh,A8[qEk$Zs5&Y9g?7\nZ!*)50N#RHHa1\'[%#Uq04QWL0:B\'gQTm`Cg/?dOKX<)&3*&*QS2=(,+GCR+q62l<Q.5.+#o=WeA;qVgE\n9$EHgGe`UE-,WQd.2G!8onb9Ylbj`<^HHi;b^H$-`i70\'o,\"g)@j)/):%J/Mqcud,ZO)YQm__=+kLC\\8\n,g.q3D3\"RIj7P=RIA;#HOi+N_h%/Zb5InZRi\")W^h1G)Bc^]CSqUk3(XUbtpHua1\"GrNa4XL%Y1rU(D$\n$B02d^\"SJ6B#W)\'^Nnj7%M&4DhVKWM>;rS>m/>t&+9-EYq570#J,7?+A1@,ck#`hS9gB7&Mg$gM00Xfo\n-n4`+jc5R>1T/9Sf*<[=pL`mi_&N-em2rmVUU;U9If+F\\E_\\Q=%hhFhMb0Kgf!-H.g_et=Z]!-OcTf&1\npCIEd<:<*ibU/80J.<p-GPU)?\\\\EW9`U^3t\';\"@L!_kYBDgd3FP3PX-Z_r<a4#*;9:=TUBhV<l^R)dn#\nK7CYI3</[C8%3u^qGX(Vb*5M&rs1&IFh?cIP32*VL8h7WR#Nk0U_(cjY@`ruc&cfpYUo36R4Wc=IS$K:\n5uLB]#ikRb^SM?3AY2<]o]pF>pJtV)(\\8?@\"\"<)T8Y31-2Jh]S)d<J!\'4uacZ-#lV\"m[E[a*TGZ\":?+r\nP&$54X[J92\\?>A*V\\^H#5G%[TM[YX+rD\"Bi5\'8:>*\'B$q($-\"1Nq%/(<2]K51*QKt=V`?a/+P%,83FsR\n^HYhW>trM_O@_E$(P>_3,k<K3.>[l.#\\4(f(@^JlX-3c=g4k>+Q2IG#(ip(VeOrDI!SE[kG\';4^,nnf8\n^s85KOkilLE2.3k;k-XdbRtK\"4eW)3(#&5\\ecdMK43jbFb+<o?/T,MnL`i]%29hSaFG1W<=(jV`N+uB\\\n&hu@*jNnKREJ(N(C!o#R=KuSkSkt%Y1nE_W(O]b2R<g$cN>aVm%cak44[mI,W4/,u2CaonC0V_jQ;i36\nTu@HJOf\'YXr_k,\\]gNm;\"lQVL9Qc^X\'2FdZ]2B)W0GFd?)OL!PN>Q5H=(rU4(u0cc4r$SC!!>ZN6bT8E\n!_:L*3lO/3#^+7_(Z>b;;5rL:n-r99Tl;q=>2ZWLbXX8m+AV]RK;&MZ9>T:m*$3%?c1c8E!cV+r_fWA8\nkpSF!@3HnHiW,iRYXn+,U]o]?SjET\\\'/Z&KidQVf!\"MYUai\\?Y,+\'$=Suu#p*\';b$l5[V/G;QYo0t73\'\nF]IZ8.KaF-1c21udhdPP;J?VKUbiHIWGB6a3%BVk0bkMA!AH`^Mol4]BWae3..tgo@u\'3nh,Fi$2#L0%\neu4JR@\"7T_WYRR/4qrtKXWQ9\"BVPH\"eH,t#?$.b7E&8g`PHLZai2HU5Vd)[pj+:I./(F]VV#W04\'uUFu\npGZ([*-IP\"Um3+]8aRj^D:kd\\%Mb#A1rY8S\\6Dh;^gX3!7uDi6C[ToZ_$pb1ff=:G4_ds\"]dR4f%SQ>&\n,uCE4fTPq*ZiD)3ZFSZ+G=M*19&$jQ+k2PFrG3\\&k-O^Nd/n8h9\'5>3BTGQmm:V=r\'ae%2@pjX*O@Zu,\nd/o*\"@XU?#;b:U/GB]l%i38HknXJ%N)meC]C2p\"89QQ@lkf!VKK5O5e^gX3!2h\"@\"AV*g(;(Z`hC4=4d\n2+U8OrjkDC!_9(2cgN_Ji_PEej)>#Y/7nE4)WucK4ng`.!cV+2BT?KN&2bVNpS;!NYa!?8Z!\'mW0R(F/\n\"cc3KFKDSdp54.]Q=DLa=GZ,G7cBmlY2,aaJ\\tAHGCIUg(Al\'eM]42D!p[cWoo;iV*3@*\\$HH<ZRj+S#\nH_#PB)\\k.\'\\Lc8^\"cpg/-e.\'DSV6k3mYsq:BH&n_g\'#T_QLTnR&>\\\'a[CB)_TkMY]4<m&4]9Jm`K,Z[R\nQFYg=@i<&N>-Z%hKs!)nB^$QX1tAgDQdMIAZ!_XdZZ%)cKfcM\\oCE>,qHJ97pO.GSAM7k*)Y1am;OgBD\n@^0a$X^IVk9bbsRbUtt%J*65]?\'19DG?6/;:\'*a:>6LnrPDB#KTSFL2YW,-t,!l7#9=EI/\']K`-[`(?4\n7ACi;UF)IG6!$7pKl\"?kF\\A\"_a_9h\\N7tu.CbVYR#.812nme)\\F!hB3e;t1T\"gM)]\'0\"L`.0N^Y?3C\'\'\n+]&Z4FZuVl$_HpK>E\"+4!T[g?0)~>\nendstream\nendobj\n20 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 118\n/Height 47\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 450\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/eJI]R?#XnLgT6<df/I.&?B=hcDag-rD4]0%PfMTZ+`QSI+J]C^&rD3A8lM8nnFFP!I.f*jYC2Tn[\n<7i(7\\<JH!<uVum3HJfk<8)+%ZN*Mf-s%l>VZUCs,9`9oW&TM%/cgmJU%.fLhbI$\'>Bgu_i@Q+C&bWr6\n3DCM6/FUMt,DB^,*R00s\"]WFGC0j:#Wa4gW<*QeT;,?;BS!oru5u$_3B2j\\2C.\'b.FXq@X1A*,a\\SaGJ\n:nMkcIQ\\.Jf:057_-L4J<%2QMmIao@\\88FKGb1p,mW;%.HNC.;V.+`d)s:rBhUjLHBX2RC^9_q81nV[K\nL=2QBFt;rTCn6[fpmpr7S_cG!dW[,sX1++8R<)-%FcU.kRpWS)XE;9+;4lS+_6AsrcEbQLcIEc_;%MKE\n3cjGT9*N[J.pN2WmI8W?$l;c6]5d/?p8t<sEaJ2erl+~>\nendstream\nendobj\n21 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 54\n/Height 54\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 196\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"0O3u3>h$q/M0J(%S7,KuY<-s.lH-\'qES(pROHCrPn$7Z9)a6\"LR\'S#oC5:\"ElhL$23%2?:_\'lcY/t\n9&C4/N@rO[[E\'jb`s>\\:Ppjm5<C,M=&X;o,AQjmfakJmG$0DpT<`/WHCIKdh8p<0kI2?aaUiIL1W3\"C!\n6Dd66l,>W^H[f.=$)rLnTiSfI43@9I<W~>\nendstream\nendobj\n22 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 294\n/Height 52\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 1062\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/cm;<k9$q\'^e0<HGOi?;bO#RWE;5MD%jg@HJN7pU9+Zd1foT/ob4s.+l,qt^*]nSE])q`]-dT:]bc\nXk<N^Piq2J8+-22[I+_kW\\SZ[:@UO\":R:1iG,hpNo<6a&CQo\"`C+1a2?`)nr\'LGV8:D0LohjqCG+\"7&Z\nWWa(A`<K]i5h@KKFFUqR^Ol#sR2S%j8k\\D$,m3^B//?3B39c-X3ru=tLD=%c<QG)sb-=Me@;D`4Gi_sA\nQ%NR)\'\\[8Voqf$[Y#:/$:pL0]OQIfnfRka(KVC1s(`r:%dZhocQn1KjhhA>/8lH2IGAI+L=@u6N2C4E=\nW9\'Goq*R/\'c$_R6,oY7QDG2#8@eC1Wm#V7;bSdG](1R!+\\Zi]1QI8c*KT[e6Zm6&YC94#,mF!t^l0LF2\nM$B\\8LVApEo<Sdh1oTc+E;\',eF(m\'TV11l>(SoCs&%H4poI3b-JI+#.&LVs-7rc>3UEDig5Od&9F_!A_\n0qHm5h*cRpPa9aG8ie47Cm-\\^HYRYim<N20Tf>#<<!;/6p&3M<n\\NjGXo>gF1rjHiZ4pJ79Bde\"7`-/u\n+dGDaV\\>$q]<[lB)fK+?n=YSMQNLWgUWGQD-<R)rpQQRba&lG99BdWHX(;RI1EAQ_87$J!1McW<6&!ap\nf7l9M90j>qC!Z3Uf<A)N>gXp5F*K,cV2LSpLPKX.MG9i1,&DtR*X=fiF<Fa$.F/<C/q(&%K5;\"WSMbd@\nIk7FmoNs#c\"o4CMj-5:#F\\(a;pMbs4;_AbiTX%\'c5jN-BkoqnuZ6NCse\'%-9dDL6<.4qBcPSagf&69OH\nj4pn?,UgW@l9&-Qc0h*!hCTQ5.P%4Yl!qC.Tlt#Y[\"oW/KABF/8lmH-9D?lN\\^E+*)TPLBo@lGu\"AnSD\n<!LJZ=!,qXF$QbmdrpTZ[gp;)0t3Is;S#@i]8qX&eh@Ub0-mJKqd9k`k\"S`2ATU>n3t1h]&U+[C@aU;F\n^Y.c/K=FQg.G^kC;YHo>_.ed70a1%\\c>4Clq4f?C30Pm7]1=S2en_f:I]KQRV!d/S]]1T?V=`N,pA+O[\n\"193)ao~>\nendstream\nendobj\nxref\n0 23\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000104 00000 n \n0000000162 00000 n \n0000000214 00000 n \n0000000312 00000 n \n0000000415 00000 n \n0000000521 00000 n \n0000000631 00000 n \n0000000727 00000 n \n0000000829 00000 n \n0000000934 00000 n \n0000001043 00000 n \n0000001144 00000 n \n0000001244 00000 n \n0000001346 00000 n \n0000001452 00000 n \n0000001622 00000 n \n0000001999 00000 n \n0000004550 00000 n \n0000005186 00000 n \n0000005567 00000 n \ntrailer\n<<\n/Info 17 0 R\n/Size 23\n/Root 1 0 R\n>>\nstartxref\n6816\n%%EOF\n\";}}}}}s:15:\"SignatureOption\";s:15:\"SERVICE_DEFAULT\";}}}}}}}}');
INSERT INTO `shipping_details` (`id`, `order_id`, `seller_id`, `job_id`, `carrier_code`, `shipment_tracking_no`, `pkg_tracking_no`, `fedx_response`) VALUES
(5, 5, 8, '4c6e6574605246q12503j008058', 'FDXG', '794644006670', '794644006670', 'a:3:{i:0;O:57:\"FedEx\\OpenShipService\\ComplexType\\CreateOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:23:\"CreateOpenShipmentReply\";s:9:\"\0*\0values\";a:7:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4c6e6574605246q12503j008058\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:4:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794644006670\";}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:3:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794644006670\";}}}s:11:\"GroupNumber\";i:0;}}}}}s:5:\"Index\";s:12:\"794644006670\";}}i:1;O:59:\"FedEx\\OpenShipService\\ComplexType\\RetrieveOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:25:\"RetrieveOpenShipmentReply\";s:9:\"\0*\0values\";a:4:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:17:\"RequestedShipment\";O:51:\"FedEx\\OpenShipService\\ComplexType\\RequestedShipment\":2:{s:7:\"\0*\0name\";s:17:\"RequestedShipment\";s:9:\"\0*\0values\";a:11:{s:13:\"ShipTimestamp\";s:25:\"2019-09-13T14:39:35+00:00\";s:11:\"DropoffType\";s:14:\"REGULAR_PICKUP\";s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:13:\"PackagingType\";s:14:\"YOUR_PACKAGING\";s:7:\"Shipper\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:9:\"Recipient\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:2:{s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:12:\"Priyanka Das\";s:11:\"PhoneNumber\";s:10:\"3454657678\";s:12:\"EMailAddress\";s:24:\"demo@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:18:\"13450 Farmcrest Ct\";s:4:\"City\";s:7:\"Herndon\";s:19:\"StateOrProvinceCode\";s:2:\"VA\";s:10:\"PostalCode\";s:5:\"20171\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}s:22:\"ShippingChargesPayment\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Payment\":2:{s:7:\"\0*\0name\";s:7:\"Payment\";s:9:\"\0*\0values\";a:2:{s:11:\"PaymentType\";s:6:\"SENDER\";s:5:\"Payor\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Payor\":2:{s:7:\"\0*\0name\";s:5:\"Payor\";s:9:\"\0*\0values\";a:1:{s:16:\"ResponsibleParty\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Party\":2:{s:7:\"\0*\0name\";s:5:\"Party\";s:9:\"\0*\0values\";a:3:{s:13:\"AccountNumber\";s:9:\"510087283\";s:7:\"Contact\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Contact\":2:{s:7:\"\0*\0name\";s:7:\"Contact\";s:9:\"\0*\0values\";a:3:{s:10:\"PersonName\";s:11:\"Arun Pratap\";s:11:\"PhoneNumber\";s:11:\"99582475401\";s:12:\"EMailAddress\";s:31:\"arunpratap1@virtualemployee.com\";}}s:7:\"Address\";O:41:\"FedEx\\OpenShipService\\ComplexType\\Address\":2:{s:7:\"\0*\0name\";s:7:\"Address\";s:9:\"\0*\0values\";a:6:{s:11:\"StreetLines\";s:20:\"85 Crooked Hill Road\";s:4:\"City\";s:7:\"Commack\";s:19:\"StateOrProvinceCode\";s:2:\"NY\";s:10:\"PostalCode\";s:5:\"11726\";s:11:\"CountryCode\";s:2:\"US\";s:11:\"Residential\";b:0;}}}}}}}}s:26:\"ProcessingOptionsRequested\";O:68:\"FedEx\\OpenShipService\\ComplexType\\ShipmentProcessingOptionsRequested\":2:{s:7:\"\0*\0name\";s:34:\"ShipmentProcessingOptionsRequested\";s:9:\"\0*\0values\";a:0:{}}s:22:\"BlockInsightVisibility\";b:0;s:18:\"LabelSpecification\";O:52:\"FedEx\\OpenShipService\\ComplexType\\LabelSpecification\":2:{s:7:\"\0*\0name\";s:18:\"LabelSpecification\";s:9:\"\0*\0values\";a:3:{s:15:\"LabelFormatType\";s:8:\"COMMON2D\";s:9:\"ImageType\";s:3:\"PDF\";s:14:\"LabelStockType\";s:9:\"PAPER_4X6\";}}s:12:\"PackageCount\";i:1;}}}}i:2;O:58:\"FedEx\\OpenShipService\\ComplexType\\ConfirmOpenShipmentReply\":2:{s:7:\"\0*\0name\";s:24:\"ConfirmOpenShipmentReply\";s:9:\"\0*\0values\";a:6:{s:15:\"HighestSeverity\";s:7:\"SUCCESS\";s:13:\"Notifications\";a:1:{i:0;O:46:\"FedEx\\OpenShipService\\ComplexType\\Notification\":2:{s:7:\"\0*\0name\";s:12:\"Notification\";s:9:\"\0*\0values\";a:5:{s:8:\"Severity\";s:7:\"SUCCESS\";s:6:\"Source\";s:4:\"ship\";s:4:\"Code\";s:4:\"0000\";s:7:\"Message\";s:7:\"Success\";s:16:\"LocalizedMessage\";s:7:\"Success\";}}}s:7:\"Version\";O:43:\"FedEx\\OpenShipService\\ComplexType\\VersionId\":2:{s:7:\"\0*\0name\";s:9:\"VersionId\";s:9:\"\0*\0values\";a:4:{s:9:\"ServiceId\";s:4:\"ship\";s:5:\"Major\";i:15;s:12:\"Intermediate\";i:0;s:5:\"Minor\";i:0;}}s:5:\"JobId\";s:27:\"4ace647920674fq12703j028431\";s:29:\"AsynchronousProcessingResults\";O:69:\"FedEx\\OpenShipService\\ComplexType\\AsynchronousProcessingResultsDetail\":2:{s:7:\"\0*\0name\";s:35:\"AsynchronousProcessingResultsDetail\";s:9:\"\0*\0values\";a:0:{}}s:23:\"CompletedShipmentDetail\";O:57:\"FedEx\\OpenShipService\\ComplexType\\CompletedShipmentDetail\":2:{s:7:\"\0*\0name\";s:23:\"CompletedShipmentDetail\";s:9:\"\0*\0values\";a:9:{s:10:\"UsDomestic\";b:1;s:11:\"CarrierCode\";s:4:\"FDXG\";s:16:\"MasterTrackingId\";O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794644006670\";}}s:22:\"ServiceTypeDescription\";s:3:\"FXG\";s:18:\"ServiceDescription\";O:52:\"FedEx\\OpenShipService\\ComplexType\\ServiceDescription\":2:{s:7:\"\0*\0name\";s:18:\"ServiceDescription\";s:9:\"\0*\0values\";a:5:{s:11:\"ServiceType\";s:12:\"FEDEX_GROUND\";s:4:\"Code\";s:2:\"92\";s:5:\"Names\";a:7:{i:0;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:16:\"FedEx GroundÂ®\";}}i:1;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:4:\"long\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:12:\"FedEx Ground\";}}i:2;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:10:\"GroundÂ®\";}}i:3;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:6:\"medium\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:6:\"Ground\";}}i:4;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"utf-8\";s:5:\"Value\";s:2:\"FG\";}}i:5;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"short\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"FG\";}}i:6;O:45:\"FedEx\\OpenShipService\\ComplexType\\ProductName\":2:{s:7:\"\0*\0name\";s:11:\"ProductName\";s:9:\"\0*\0values\";a:3:{s:4:\"Type\";s:5:\"abbrv\";s:8:\"Encoding\";s:5:\"ascii\";s:5:\"Value\";s:2:\"SG\";}}}s:11:\"Description\";s:12:\"FedEx Ground\";s:16:\"AstraDescription\";s:3:\"FXG\";}}s:20:\"PackagingDescription\";s:14:\"YOUR_PACKAGING\";s:17:\"OperationalDetail\";O:59:\"FedEx\\OpenShipService\\ComplexType\\ShipmentOperationalDetail\":2:{s:7:\"\0*\0name\";s:25:\"ShipmentOperationalDetail\";s:9:\"\0*\0values\";a:6:{s:20:\"OriginLocationNumber\";i:117;s:25:\"DestinationLocationNumber\";i:221;s:11:\"TransitTime\";s:8:\"TWO_DAYS\";s:31:\"IneligibleForMoneyBackGuarantee\";b:0;s:11:\"ServiceCode\";s:2:\"92\";s:13:\"PackagingCode\";s:2:\"01\";}}s:14:\"ShipmentRating\";O:48:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRating\":2:{s:7:\"\0*\0name\";s:14:\"ShipmentRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:19:\"ShipmentRateDetails\";a:1:{i:0;O:52:\"FedEx\\OpenShipService\\ComplexType\\ShipmentRateDetail\":2:{s:7:\"\0*\0name\";s:18:\"ShipmentRateDetail\";s:9:\"\0*\0values\";a:19:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:8:\"RateZone\";s:1:\"3\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:10:\"DimDivisor\";i:0;s:20:\"FuelSurchargePercent\";s:3:\"7.0\";s:18:\"TotalBillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"LB\";s:5:\"Value\";s:3:\"5.0\";}}s:15:\"TotalBaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:15:\"TotalNetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:19:\"TotalNetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:14:\"TotalNetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:19:\"TotalDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:26:\"TotalAncillaryFeesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:23:\"TotalDutiesTaxesAndFees\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:32:\"TotalNetChargeWithDutiesAndTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:23:\"CompletedPackageDetails\";a:1:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\CompletedPackageDetail\":2:{s:7:\"\0*\0name\";s:22:\"CompletedPackageDetail\";s:9:\"\0*\0values\";a:7:{s:14:\"SequenceNumber\";i:1;s:11:\"TrackingIds\";a:1:{i:0;O:44:\"FedEx\\OpenShipService\\ComplexType\\TrackingId\":2:{s:7:\"\0*\0name\";s:10:\"TrackingId\";s:9:\"\0*\0values\";a:2:{s:14:\"TrackingIdType\";s:5:\"FEDEX\";s:14:\"TrackingNumber\";s:12:\"794644006670\";}}}s:11:\"GroupNumber\";i:0;s:13:\"PackageRating\";O:47:\"FedEx\\OpenShipService\\ComplexType\\PackageRating\":2:{s:7:\"\0*\0name\";s:13:\"PackageRating\";s:9:\"\0*\0values\";a:2:{s:14:\"ActualRateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:18:\"PackageRateDetails\";a:1:{i:0;O:51:\"FedEx\\OpenShipService\\ComplexType\\PackageRateDetail\":2:{s:7:\"\0*\0name\";s:17:\"PackageRateDetail\";s:9:\"\0*\0values\";a:12:{s:8:\"RateType\";s:21:\"PAYOR_ACCOUNT_PACKAGE\";s:17:\"RatedWeightMethod\";s:6:\"ACTUAL\";s:13:\"BillingWeight\";O:40:\"FedEx\\OpenShipService\\ComplexType\\Weight\":2:{s:7:\"\0*\0name\";s:6:\"Weight\";s:9:\"\0*\0values\";a:2:{s:5:\"Units\";s:2:\"KG\";s:5:\"Value\";s:4:\"2.27\";}}s:10:\"BaseCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:21:\"TotalFreightDiscounts\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"NetFreight\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"10.41\";}}s:15:\"TotalSurcharges\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}s:14:\"NetFedExCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:10:\"TotalTaxes\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:9:\"NetCharge\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:5:\"11.14\";}}s:12:\"TotalRebates\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:3:\"0.0\";}}s:10:\"Surcharges\";a:1:{i:0;O:43:\"FedEx\\OpenShipService\\ComplexType\\Surcharge\":2:{s:7:\"\0*\0name\";s:9:\"Surcharge\";s:9:\"\0*\0values\";a:4:{s:13:\"SurchargeType\";s:4:\"FUEL\";s:5:\"Level\";s:7:\"PACKAGE\";s:11:\"Description\";s:17:\"FedEx Ground Fuel\";s:6:\"Amount\";O:39:\"FedEx\\OpenShipService\\ComplexType\\Money\":2:{s:7:\"\0*\0name\";s:5:\"Money\";s:9:\"\0*\0values\";a:2:{s:8:\"Currency\";s:3:\"USD\";s:6:\"Amount\";s:4:\"0.73\";}}}}}}}}}}s:17:\"OperationalDetail\";O:58:\"FedEx\\OpenShipService\\ComplexType\\PackageOperationalDetail\":2:{s:7:\"\0*\0name\";s:24:\"PackageOperationalDetail\";s:9:\"\0*\0values\";a:3:{s:23:\"OperationalInstructions\";a:6:{i:0;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:2;s:7:\"Content\";s:4:\"TRK#\";}}i:1;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:7;s:7:\"Content\";s:34:\"9622001900008000266200794644006670\";}}i:2;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:8;s:7:\"Content\";s:15:\"567J1/9D04/05A2\";}}i:3;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:10;s:7:\"Content\";s:14:\"7946 4400 6670\";}}i:4;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:15;s:7:\"Content\";s:5:\"20171\";}}i:5;O:56:\"FedEx\\OpenShipService\\ComplexType\\OperationalInstruction\":2:{s:7:\"\0*\0name\";s:22:\"OperationalInstruction\";s:9:\"\0*\0values\";a:2:{s:6:\"Number\";i:18;s:7:\"Content\";s:46:\"9622 0019 0 (000 800 0266) 2 00 7946 4400 6670\";}}}s:8:\"Barcodes\";O:49:\"FedEx\\OpenShipService\\ComplexType\\PackageBarcodes\":2:{s:7:\"\0*\0name\";s:15:\"PackageBarcodes\";s:9:\"\0*\0values\";a:2:{s:14:\"BinaryBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\BinaryBarcode\":2:{s:7:\"\0*\0name\";s:13:\"BinaryBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:9:\"COMMON_2D\";s:5:\"Value\";s:187:\"[)>010220171840019794644006670FDEG80002662561/12.00KGN13450 Farmcrest CtHerndonVAPriyanka Das0610ZGD00912Z345465767820Z31Z962200190000800026620079464400667034Z01\";}}}s:14:\"StringBarcodes\";a:1:{i:0;O:47:\"FedEx\\OpenShipService\\ComplexType\\StringBarcode\":2:{s:7:\"\0*\0name\";s:13:\"StringBarcode\";s:9:\"\0*\0values\";a:2:{s:4:\"Type\";s:8:\"FEDEX_1D\";s:5:\"Value\";s:34:\"9622001900008000266200794644006670\";}}}}}s:17:\"GroundServiceCode\";s:3:\"019\";}}s:5:\"Label\";O:50:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocument\":2:{s:7:\"\0*\0name\";s:16:\"ShippingDocument\";s:9:\"\0*\0values\";a:6:{s:4:\"Type\";s:14:\"OUTBOUND_LABEL\";s:27:\"ShippingDocumentDisposition\";s:8:\"RETURNED\";s:9:\"ImageType\";s:3:\"PDF\";s:10:\"Resolution\";i:200;s:13:\"CopiesToPrint\";i:1;s:5:\"Parts\";a:1:{i:0;O:54:\"FedEx\\OpenShipService\\ComplexType\\ShippingDocumentPart\":2:{s:7:\"\0*\0name\";s:20:\"ShippingDocumentPart\";s:9:\"\0*\0values\";a:2:{s:26:\"DocumentPartSequenceNumber\";i:1;s:5:\"Image\";s:7354:\"%PDF-1.4\n1 0 obj\n<<\n/Type /Catalog\n/Pages 3 0 R\n>>\nendobj\n2 0 obj\n<<\n/Type /Outlines\n/Count 0\n>>\nendobj\n3 0 obj\n<<\n/Type /Pages\n/Count 1\n/Kids [18 0 R]\n>>\nendobj\n4 0 obj\n[/PDF /Text /ImageB /ImageC /ImageI]\nendobj\n5 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica\n/Encoding /MacRomanEncoding\n>>\nendobj\n6 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n7 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n8 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Helvetica-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n9 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier\n/Encoding /MacRomanEncoding\n>>\nendobj\n10 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n11 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-Oblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n12 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Courier-BoldOblique\n/Encoding /MacRomanEncoding\n>>\nendobj\n13 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Roman\n/Encoding /MacRomanEncoding\n>>\nendobj\n14 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Bold\n/Encoding /MacRomanEncoding\n>>\nendobj\n15 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-Italic\n/Encoding /MacRomanEncoding\n>>\nendobj\n16 0 obj\n<<\n/Type /Font\n/Subtype /Type1\n/BaseFont /Times-BoldItalic\n/Encoding /MacRomanEncoding\n>>\nendobj\n17 0 obj \n<<\n/CreationDate (D:2003)\n/Producer (FedEx Services)\n/Title (FedEx Shipping Label)\r/Creator (FedEx Customer Automation)\r/Author (CLS Version 5120135)\n>>\nendobj\n18 0 obj\n<<\n/Type /Page\r/Parent 3 0 R\n/Resources << /ProcSet 4 0 R \n /Font << /F1 5 0 R \n/F2 6 0 R \n/F3 7 0 R \n/F4 8 0 R \n/F5 9 0 R \n/F6 10 0 R \n/F7 11 0 R \n/F8 12 0 R \n/F9 13 0 R \n/F10 14 0 R \n/F11 15 0 R \n/F12 16 0 R \n >>\n/XObject << /FedExGround 20 0 R\n/GroundG 21 0 R\n/barcode0 22 0 R\n>>\n>>\n/MediaBox [0 0 612 792]\n/TrimBox[0 0 612 792]\n/Contents 19 0 R\n/Rotate 0>>\nendobj\n19 0 obj\n<< /Length 2460\n/Filter [/ASCII85Decode /FlateDecode] \n>>\nstream\nGatU6gMRrh&:G@VIj!+),X=7-P/A1\"c&%]YS&VV5h>k<hYm[pqm8cr-qt_@S/_Lo+M5_si?r1L^+_QPI\nRAG9J]X.Bp:lOJc#e@bi-T#KX[eS`MMV_GDS(63Yl-*3>!Djh0KA[-SLTL]:2]d:VQp#mn7a9rURBTil\n4#:CurfILDE8_0U&q(H=S0tR$T:,T&Nt/mQnmM\"RCqf,o#e]<P>CF.<LTBNlj_m48H!N5np,K/r=#SB*\nQ^@0d:<gshhS2!>QcmjK-lr>k)3J8jrp?ud49L]d@K6Mc*^\",oTZrp\'@Wasr=Lua&\'26]gYrT%_HI3:3\n&FjI/ok\\RH$,fep>\"Xjj5Q9W,L[7`=2n_U@Z<En]G__Dlf;sn*YJ.M@62#190hkf]n\\\"(I@bqeJE(CrX\n><D5J.Do!/+_25kZ-fVif?nN,Ho-?P`-e.%KH\\Y_o4QI867-]X-@,:H]3S!AZN1OHm_V7.`ml1n6qtMn\nRiM=s_o4OW>m\'g^<\\D_EQZ(cL2a8Kq`5UPAmlJc7^O10;p@f>D7%cc9+&^gPnOD)T[eTh*((-!X?bP*O\nmWu]F?bLo*Not?Sk=9`Qk1Y`&2nT\'.oufSCMg%h#^\\hS#ZC$$[hO#LK9frtbMD`_HX7Ng$ZTgX@B-2;m\nN12gjI(5Oc0?iaqVt8O&OkDrQD[mO0qtT-f*Q`_7PFpXNKMNX35O]o63d)bW)[!`8>@!b*?C:3T&-Fmk\nmm-)9#7^KZG04-/o:7#+T00Vmq0cl-&*%_k#+Wmr50c-JjeTB-P/G<Z<Z-:QWc_dQR^_IIa4]_Tmh`%J\nNu+^+s)Rg-VFAMc6<jG.d1\'Zr-Kh,!A2q(BYF3(*8q`=#1ig5G8Zjs=]Wo8b\\4:hQhBMT55\",nn6hHd#\nXB50C-!2YMk]#m9r:BX=8e^phIW37,jD_b\"l`hHgCl<p]><0k/Aq0d,_GCl!Q[s48[m$Ds-u]T9.QIjE\n@Rc7HAW8o+=)T`fcg6W[3oe-6%NW<4kYREsGS&cLia\'&T_\"7(oSDGa=R-8U&R2`*+a==5\\i^(lcle[Tn\nC0EO*7-m8p_.dmZ,jUjX3]?/b5`^HL!kuE.42*YKD5bWUd10\'/0fNaY=DgZ(!1Qm@c?<*]Gb?emfNBFD\nZ5ZCNY\'3TS#iiad4?E[a9;o]bKsl@ZAO5=r*G8mOi[qQ[C0]qR&4\'8(WfeV3D@0CRVU0GC.@$uh,bf7^\n9<KF;j#U[9iuhiTd;78W/YNO\'Bf\\sUb512$->J7i2QG5B3/mG=[hLfaUXim(=KbE2.WKGrBG>/lKc8Pl\n7$\\$YqG6&QpC]?J-@joM4Hs8HSoCEWe<Ht`SY8;.d<m!Z<lq*dDCTM`3eNpK_oM+Wk?srjEMtg\\C1+7@\n8;9t\')PGBt[3Bu\"fIQ(M(qu#O/nEiJMAk,!`T*)=!m!lZRR\'dQ];=HP4:Vm2\\nYH[FTU2GjkXmfHtb!/\n\\8EH8JF!83\\R=CC8k9W2hE?Q\"W[)8MK?CYZliaOsapje@lN;`!ioFfG<PZ=iSUue$%\"AL^D\'\"<C^g:+(\nhOlQq7RofZ><.*5fI[iY!(KRZ7hhHdX+@r^-l-<9+WLLRqdr\\c!US(=W\"uqV\\FJ4FaYc\"WL$K14</W\'&\n6;Z=l[l7:rlnojl`q$hSD-\'Q\"p84j@SWPN[Q3oSi,*R&r;)PT0Id2]Q7iC?G>+mBF\"1tB0c]_qYMHA]l\n<&Lo3<N:Zc#)=S&R4,LP]e[\\E3\"FCS!c$\\+78X0!V;`=@$jnMaBtF`(.>2?Si+90l;6@4\"HihqPjTj%]\n_V)sJ[H4:m@(2A\\boXSt$D1/K`q9\\4FtBh0,=te&\\<W+%JDF*c7W1\\A`8#/nCL\"\')]6YP$gKTG$g\'ifV\nfI[i\\gG\'Xg3YT$8.9-D\\V.>PB.%9%\\[<>N/lP8tI-L$=mbi(ZtL-uL;QAT24-fe)N#W3Du\"1tDLGC3F2\n]85UQ)&+s4=\"=\"8]nQ[fae<u\":&qo&F<!g2*7:a`<^r\\]p.@\'!&M2pn6mV2d<\"82[iisUA9eeWrRpf.r\nH_jP\"QIZRn7BJJkYo;4GjMqNqi>jX*c(M\"dh,6\"OI`O8_g;RlflRViPlGbFKL/8?GXMl.da&3AI+JMh=\nSU?F_\'iOfe03\'kjMor1K<8i.oK_k?7ND3&Z)qWcs3),%dnUqn?\\Cn(9\\6dXXBM<\\6+[5J/Pa5.\"lSVu-\nZ/%cW)*[RoZ,SYTesCJ8FU\\hL@T^\"\\B[A&0Ye&\\Z\\.JYX*E]uRi<9Yg,s>$#2E\\F\\kI)uPrPX(m(e[\'`\nX@X:65rY.!.%h0WR&l-ADZ/W??BGi6]<s[p@hN/V8HV5;?Td,7!\'Oj/JVGnr,;K&hPdA\'1V@]UAYV!jD\n#T@8U)E$AV$_%!m/nF\"-YA:-p:.CCBhP5743?&BHP!O3B])7pBB\\Wp3)C=Gb\"\\,SYbJ]At;KU4FQe-bZ\ng]tu0ZGsHm:EGo$NL>`UrrB2PIGO~>\nendstream\nendobj\n20 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 118\n/Height 47\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 450\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/eJI]R?#XnLgT6<df/I.&?B=hcDag-rD4]0%PfMTZ+`QSI+J]C^&rD3A8lM8nnFFP!I.f*jYC2Tn[\n<7i(7\\<JH!<uVum3HJfk<8)+%ZN*Mf-s%l>VZUCs,9`9oW&TM%/cgmJU%.fLhbI$\'>Bgu_i@Q+C&bWr6\n3DCM6/FUMt,DB^,*R00s\"]WFGC0j:#Wa4gW<*QeT;,?;BS!oru5u$_3B2j\\2C.\'b.FXq@X1A*,a\\SaGJ\n:nMkcIQ\\.Jf:057_-L4J<%2QMmIao@\\88FKGb1p,mW;%.HNC.;V.+`d)s:rBhUjLHBX2RC^9_q81nV[K\nL=2QBFt;rTCn6[fpmpr7S_cG!dW[,sX1++8R<)-%FcU.kRpWS)XE;9+;4lS+_6AsrcEbQLcIEc_;%MKE\n3cjGT9*N[J.pN2WmI8W?$l;c6]5d/?p8t<sEaJ2erl+~>\nendstream\nendobj\n21 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 54\n/Height 54\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 196\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"0O3u3>h$q/M0J(%S7,KuY<-s.lH-\'qES(pROHCrPn$7Z9)a6\"LR\'S#oC5:\"ElhL$23%2?:_\'lcY/t\n9&C4/N@rO[[E\'jb`s>\\:Ppjm5<C,M=&X;o,AQjmfakJmG$0DpT<`/WHCIKdh8p<0kI2?aaUiIL1W3\"C!\n6Dd66l,>W^H[f.=$)rLnTiSfI43@9I<W~>\nendstream\nendobj\n22 0 obj\n<< /Type /XObject\n/Subtype /Image\n/Width 294\n/Height 52\n/ColorSpace /DeviceGray\n/BitsPerComponent 8\n/Length 1060\n/Filter [/ASCII85Decode /FlateDecode]\n>>stream\nGb\"/c;/Y2T$j1YP9<1T7%_;98g&d92,6uQ\"GI8&DK%7Qd?@0A2eQdP$c,0-9O\'fA3qtoV>C@9^>CpOk\'\n?\\^E)4F!.\'I^.Ip\"fJ@\'c#&X<*$6iccZ6%mXSBF\"B9%!5WEMnel%^_`/;YdRNQ[/`T$R+9ediJoPI5pM\nUW<Fo%HpoJPO=KEV&.a09]XV!V6lInVIVsgMZ%[!<MlO1QOB9O-$\'S\"Tm\'Ri5O9A*HcCfE$E]i@Uf&mU\nUI*`&+akdkV,o+\"kJeG1Cf$Qk\\?IoM,#XO[jpArcN0\'NLq?&&P&CIg<2H4Cj62KrL3Gp8tV,o*k1ditB\nK[(D0kS3b7,#^=m7rD!>f1\"s,HgKYkREQOM!A)0j216Wl.4qAt.:GiCW2:kL3(k9mPI6r\"-)Wh?c>94@\n;8lC>c;jIW\'f\'K\"=Y&X9ol\'!@;Hc]mL_;1VTe@I+c0XXc<9\\r?E4Eb[kcTs,J2\'P[Jq@=Ud4T1WC9h^1\nXjt\">oOKC&V=uDf82/]9BmfX8kRcM3M8K\\B_/ZM\"#fG0Tn+5RlYS4G@j&XMH[jBIcBIPO02^pUA]Q#_V\n*tilLd>5\"V=0l`\'%;Z4i\'[c8h!\"<s+=g9d!.V6/gj=!(/_GXQ002chu1a.\"=@mr#5LRhpeNID.t.36#Z\n`)^d_=`dARFq;1p$\'gc+qP;gJ0;YN;,,OJlE/m+VTrsqSqC=Dr&`AMAJ7qfiS-X6iFk.Y#oiAQXim@qc\nXeiChrWAuV+Isu_SMo4KA\\YLgH[PHZ/LSVj6q^FmKfoE.est4Ma^_?6AZa3cL!HO%Phr3h(6=RSL[W\\D\n#n2o]rf/NETd)R)du[fo?U_)S4>D@+>sq^E7!#s:RG/IBdSbC^;G*O:&=/4G/WXn4J;spL<mIHY<6F1Y\n(GkEF/!fm\"g7Db1[Ai*P(.GS>Oq>\'dQI:,E?kK_4SiR<pm`:sc2\'/cGa9`u36ZZ4b*0]Hocj(RMfX79W\n.WTd1mY7%U;L4gq<5?<T[(o@k&_8iuR8Z2SRa(Q3RM20nQk@<^ac^PC`d\\m@d*.kPlFrLKdLT70lhB!a\n`O@pS~>\nendstream\nendobj\nxref\n0 23\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000104 00000 n \n0000000162 00000 n \n0000000214 00000 n \n0000000312 00000 n \n0000000415 00000 n \n0000000521 00000 n \n0000000631 00000 n \n0000000727 00000 n \n0000000829 00000 n \n0000000934 00000 n \n0000001043 00000 n \n0000001144 00000 n \n0000001244 00000 n \n0000001346 00000 n \n0000001452 00000 n \n0000001622 00000 n \n0000001999 00000 n \n0000004551 00000 n \n0000005187 00000 n \n0000005568 00000 n \ntrailer\n<<\n/Info 17 0 R\n/Size 23\n/Root 1 0 R\n>>\nstartxref\n6815\n%%EOF\n\";}}}}}s:15:\"SignatureOption\";s:15:\"SERVICE_DEFAULT\";}}}}}}}}');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_infos`
--

CREATE TABLE `shipping_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_infos`
--

INSERT INTO `shipping_infos` (`id`, `user_id`, `email`, `first_name`, `last_name`, `address`, `apartment`, `country`, `state`, `city`, `pin_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'priyankadas@virtualemployee.com', 'Priyanka', 'Das', '13450 Farmcrest Ct', 'F4', 'US', 'VA', 'Herndon', '20171', '3454657678', '2019-07-10 13:49:10', '2019-09-13 12:41:16'),
(2, 10, 'smithjosy421@gmail.com', 'smith', 'josy', 'qwer', 'qwer', 'US', 'AE', 'xqwewew', '767676', '4353454353', '2019-07-25 12:19:44', '2019-07-25 12:19:44'),
(3, 18, 'smithalem421@gmail.com', 'smith', 'alem', 'qwer', 'qwerty', 'US', 'MD', 'xsdsdsd', '324343', '87868678', '2019-07-26 06:13:06', '2019-07-26 06:13:06'),
(4, 13, 'testvirtual7@gmail.com', 'Rockey', 'test', '#223, churchstreet', 'Oasis building', 'US', 'NY', 'New York City', '10005', '7377272738', '2019-07-26 11:41:24', '2019-07-26 11:41:24'),
(5, 20, 'arunpratap@virtualemployee.com', 'Test', 'Butler', '46 Stanford Avenue, Brighton BN1 6FD, UK', 'demo', 'US', 'AL', 'Brighton', 'BN1 6FD', '7766578655', '2019-07-30 11:15:01', '2019-07-30 11:15:01'),
(6, 4, 'demo@virtualemployee.com', 'Test', 'Butler', '46 Stanford Avenue, Brighton BN1 6FD, UK', 'test', 'US', 'AL', 'Brighton', 'BN1 6FD', '7766578655', '2019-07-30 12:15:02', '2019-07-30 12:15:02'),
(7, 21, 'arunpratap@virtualemployee.com', 'Test', 'Butler', '46 Stanford Avenue, Brighton BN1 6FD, UK', 'rtr', 'US', 'AL', 'Brighton', 'BN1 6FD', '7766578655', '2019-07-30 12:33:05', '2019-07-30 12:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `region_id` int(10) UNSIGNED NOT NULL COMMENT 'Region Id',
  `country_id` varchar(4) NOT NULL DEFAULT '0' COMMENT 'Country Id in ISO-2',
  `code` varchar(32) DEFAULT NULL COMMENT 'Region code',
  `default_name` varchar(255) DEFAULT NULL COMMENT 'Region Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Directory Country Region';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`region_id`, `country_id`, `code`, `default_name`) VALUES
(1, 'US', 'AL', 'Alabama'),
(2, 'US', 'AK', 'Alaska'),
(3, 'US', 'AS', 'American Samoa'),
(4, 'US', 'AZ', 'Arizona'),
(5, 'US', 'AR', 'Arkansas'),
(6, 'US', 'AE', 'Armed Forces Africa'),
(7, 'US', 'AA', 'Armed Forces Americas'),
(8, 'US', 'AE', 'Armed Forces Canada'),
(9, 'US', 'AE', 'Armed Forces Europe'),
(10, 'US', 'AE', 'Armed Forces Middle East'),
(11, 'US', 'AP', 'Armed Forces Pacific'),
(12, 'US', 'CA', 'California'),
(13, 'US', 'CO', 'Colorado'),
(14, 'US', 'CT', 'Connecticut'),
(15, 'US', 'DE', 'Delaware'),
(16, 'US', 'DC', 'District of Columbia'),
(17, 'US', 'FM', 'Federated States Of Micronesia'),
(18, 'US', 'FL', 'Florida'),
(19, 'US', 'GA', 'Georgia'),
(20, 'US', 'GU', 'Guam'),
(21, 'US', 'HI', 'Hawaii'),
(22, 'US', 'ID', 'Idaho'),
(23, 'US', 'IL', 'Illinois'),
(24, 'US', 'IN', 'Indiana'),
(25, 'US', 'IA', 'Iowa'),
(26, 'US', 'KS', 'Kansas'),
(27, 'US', 'KY', 'Kentucky'),
(28, 'US', 'LA', 'Louisiana'),
(29, 'US', 'ME', 'Maine'),
(30, 'US', 'MH', 'Marshall Islands'),
(31, 'US', 'MD', 'Maryland'),
(32, 'US', 'MA', 'Massachusetts'),
(33, 'US', 'MI', 'Michigan'),
(34, 'US', 'MN', 'Minnesota'),
(35, 'US', 'MS', 'Mississippi'),
(36, 'US', 'MO', 'Missouri'),
(37, 'US', 'MT', 'Montana'),
(38, 'US', 'NE', 'Nebraska'),
(39, 'US', 'NV', 'Nevada'),
(40, 'US', 'NH', 'New Hampshire'),
(41, 'US', 'NJ', 'New Jersey'),
(42, 'US', 'NM', 'New Mexico'),
(43, 'US', 'NY', 'New York'),
(44, 'US', 'NC', 'North Carolina'),
(45, 'US', 'ND', 'North Dakota'),
(46, 'US', 'MP', 'Northern Mariana Islands'),
(47, 'US', 'OH', 'Ohio'),
(48, 'US', 'OK', 'Oklahoma'),
(49, 'US', 'OR', 'Oregon'),
(50, 'US', 'PW', 'Palau'),
(51, 'US', 'PA', 'Pennsylvania'),
(52, 'US', 'PR', 'Puerto Rico'),
(53, 'US', 'RI', 'Rhode Island'),
(54, 'US', 'SC', 'South Carolina'),
(55, 'US', 'SD', 'South Dakota'),
(56, 'US', 'TN', 'Tennessee'),
(57, 'US', 'TX', 'Texas'),
(58, 'US', 'UT', 'Utah'),
(59, 'US', 'VT', 'Vermont'),
(60, 'US', 'VI', 'Virgin Islands'),
(61, 'US', 'VA', 'Virginia'),
(62, 'US', 'WA', 'Washington'),
(63, 'US', 'WV', 'West Virginia'),
(64, 'US', 'WI', 'Wisconsin'),
(65, 'US', 'WY', 'Wyoming'),
(66, 'CA', 'AB', 'Alberta'),
(67, 'CA', 'BC', 'British Columbia'),
(68, 'CA', 'MB', 'Manitoba'),
(69, 'CA', 'NL', 'Newfoundland and Labrador'),
(70, 'CA', 'NB', 'New Brunswick'),
(71, 'CA', 'NS', 'Nova Scotia'),
(72, 'CA', 'NT', 'Northwest Territories'),
(73, 'CA', 'NU', 'Nunavut'),
(74, 'CA', 'ON', 'Ontario'),
(75, 'CA', 'PE', 'Prince Edward Island'),
(76, 'CA', 'QC', 'Quebec'),
(77, 'CA', 'SK', 'Saskatchewan'),
(78, 'CA', 'YT', 'Yukon Territory'),
(79, 'DE', 'NDS', 'Niedersachsen'),
(80, 'DE', 'BAW', 'Baden-Württemberg'),
(81, 'DE', 'BAY', 'Bayern'),
(82, 'DE', 'BER', 'Berlin'),
(83, 'DE', 'BRG', 'Brandenburg'),
(84, 'DE', 'BRE', 'Bremen'),
(85, 'DE', 'HAM', 'Hamburg'),
(86, 'DE', 'HES', 'Hessen'),
(87, 'DE', 'MEC', 'Mecklenburg-Vorpommern'),
(88, 'DE', 'NRW', 'Nordrhein-Westfalen'),
(89, 'DE', 'RHE', 'Rheinland-Pfalz'),
(90, 'DE', 'SAR', 'Saarland'),
(91, 'DE', 'SAS', 'Sachsen'),
(92, 'DE', 'SAC', 'Sachsen-Anhalt'),
(93, 'DE', 'SCN', 'Schleswig-Holstein'),
(94, 'DE', 'THE', 'Thüringen'),
(95, 'AT', 'WI', 'Wien'),
(96, 'AT', 'NO', 'Niederösterreich'),
(97, 'AT', 'OO', 'Oberösterreich'),
(98, 'AT', 'SB', 'Salzburg'),
(99, 'AT', 'KN', 'Kärnten'),
(100, 'AT', 'ST', 'Steiermark'),
(101, 'AT', 'TI', 'Tirol'),
(102, 'AT', 'BL', 'Burgenland'),
(103, 'AT', 'VB', 'Vorarlberg'),
(104, 'CH', 'AG', 'Aargau'),
(105, 'CH', 'AI', 'Appenzell Innerrhoden'),
(106, 'CH', 'AR', 'Appenzell Ausserrhoden'),
(107, 'CH', 'BE', 'Bern'),
(108, 'CH', 'BL', 'Basel-Landschaft'),
(109, 'CH', 'BS', 'Basel-Stadt'),
(110, 'CH', 'FR', 'Freiburg'),
(111, 'CH', 'GE', 'Genf'),
(112, 'CH', 'GL', 'Glarus'),
(113, 'CH', 'GR', 'Graubünden'),
(114, 'CH', 'JU', 'Jura'),
(115, 'CH', 'LU', 'Luzern'),
(116, 'CH', 'NE', 'Neuenburg'),
(117, 'CH', 'NW', 'Nidwalden'),
(118, 'CH', 'OW', 'Obwalden'),
(119, 'CH', 'SG', 'St. Gallen'),
(120, 'CH', 'SH', 'Schaffhausen'),
(121, 'CH', 'SO', 'Solothurn'),
(122, 'CH', 'SZ', 'Schwyz'),
(123, 'CH', 'TG', 'Thurgau'),
(124, 'CH', 'TI', 'Tessin'),
(125, 'CH', 'UR', 'Uri'),
(126, 'CH', 'VD', 'Waadt'),
(127, 'CH', 'VS', 'Wallis'),
(128, 'CH', 'ZG', 'Zug'),
(129, 'CH', 'ZH', 'Zürich'),
(130, 'ES', 'A Coruсa', 'A Coruña'),
(131, 'ES', 'VI', 'Alava'),
(132, 'ES', 'AB', 'Albacete'),
(133, 'ES', 'Alicante', 'Alicante'),
(134, 'ES', 'AL', 'Almeria'),
(135, 'ES', 'Asturias', 'Asturias'),
(136, 'ES', 'AV', 'Avila'),
(137, 'ES', 'BA', 'Badajoz'),
(138, 'ES', 'PM', 'Baleares'),
(139, 'ES', 'Barcelona', 'Barcelona'),
(140, 'ES', 'BU', 'Burgos'),
(141, 'ES', 'CC', 'Caceres'),
(142, 'ES', 'CA', 'Cadiz'),
(143, 'ES', 'Cantabria', 'Cantabria'),
(144, 'ES', 'CS', 'Castellon'),
(145, 'ES', 'Ceuta', 'Ceuta'),
(146, 'ES', 'Ciudad Real', 'Ciudad Real'),
(147, 'ES', 'CO', 'Cordoba'),
(148, 'ES', 'CU', 'Cuenca'),
(149, 'ES', 'GI', 'Girona'),
(150, 'ES', 'GR', 'Granada'),
(151, 'ES', 'GU', 'Guadalajara'),
(152, 'ES', 'Guipuzcoa', 'Guipuzcoa'),
(153, 'ES', 'Huelva', 'Huelva'),
(154, 'ES', 'HU', 'Huesca'),
(155, 'ES', 'Jaen', 'Jaen'),
(156, 'ES', 'LO', 'La Rioja'),
(157, 'ES', 'GC', 'Las Palmas'),
(158, 'ES', 'LE', 'Leon'),
(159, 'ES', 'Lleida', 'Lleida'),
(160, 'ES', 'LU', 'Lugo'),
(161, 'ES', 'Madrid', 'Madrid'),
(162, 'ES', 'MA', 'Malaga'),
(163, 'ES', 'ML', 'Melilla'),
(164, 'ES', 'MC', 'Murcia'),
(165, 'ES', 'NC', 'Navarra'),
(166, 'ES', 'OR', 'Ourense'),
(167, 'ES', 'Palencia', 'Palencia'),
(168, 'ES', 'PO', 'Pontevedra'),
(169, 'ES', 'SA', 'Salamanca'),
(170, 'ES', 'TF', 'Santa Cruz de Tenerife'),
(171, 'ES', 'SG', 'Segovia'),
(172, 'ES', 'SE', 'Sevilla'),
(173, 'ES', 'SO', 'Soria'),
(174, 'ES', 'Tarragona', 'Tarragona'),
(175, 'ES', 'TE', 'Teruel'),
(176, 'ES', 'TO', 'Toledo'),
(177, 'ES', 'Valencia', 'Valencia'),
(178, 'ES', 'VA', 'Valladolid'),
(179, 'ES', 'Vizcaya', 'Vizcaya'),
(180, 'ES', 'ZA', 'Zamora'),
(181, 'ES', 'Zaragoza', 'Zaragoza'),
(182, 'FR', '1', 'Ain'),
(183, 'FR', '2', 'Aisne'),
(184, 'FR', '3', 'Allier'),
(185, 'FR', '4', 'Alpes-de-Haute-Provence'),
(186, 'FR', '5', 'Hautes-Alpes'),
(187, 'FR', '6', 'Alpes-Maritimes'),
(188, 'FR', '7', 'Ardèche'),
(189, 'FR', '8', 'Ardennes'),
(190, 'FR', '9', 'Ariège'),
(191, 'FR', '10', 'Aube'),
(192, 'FR', '11', 'Aude'),
(193, 'FR', '12', 'Aveyron'),
(194, 'FR', '13', 'Bouches-du-Rhône'),
(195, 'FR', '14', 'Calvados'),
(196, 'FR', '15', 'Cantal'),
(197, 'FR', '16', 'Charente'),
(198, 'FR', '17', 'Charente-Maritime'),
(199, 'FR', '18', 'Cher'),
(200, 'FR', '19', 'Corrèze'),
(201, 'FR', '2A', 'Corse-du-Sud'),
(202, 'FR', '2B', 'Haute-Corse'),
(203, 'FR', '21', 'Côte-d\'Or'),
(204, 'FR', '22', 'Côtes-d\'Armor'),
(205, 'FR', '23', 'Creuse'),
(206, 'FR', '24', 'Dordogne'),
(207, 'FR', '25', 'Doubs'),
(208, 'FR', '26', 'Drôme'),
(209, 'FR', '27', 'Eure'),
(210, 'FR', '28', 'Eure-et-Loir'),
(211, 'FR', '29', 'Finistère'),
(212, 'FR', '30', 'Gard'),
(213, 'FR', '31', 'Haute-Garonne'),
(214, 'FR', '32', 'Gers'),
(215, 'FR', '33', 'Gironde'),
(216, 'FR', '34', 'Hérault'),
(217, 'FR', '35', 'Ille-et-Vilaine'),
(218, 'FR', '36', 'Indre'),
(219, 'FR', '37', 'Indre-et-Loire'),
(220, 'FR', '38', 'Isère'),
(221, 'FR', '39', 'Jura'),
(222, 'FR', '40', 'Landes'),
(223, 'FR', '41', 'Loir-et-Cher'),
(224, 'FR', '42', 'Loire'),
(225, 'FR', '43', 'Haute-Loire'),
(226, 'FR', '44', 'Loire-Atlantique'),
(227, 'FR', '45', 'Loiret'),
(228, 'FR', '46', 'Lot'),
(229, 'FR', '47', 'Lot-et-Garonne'),
(230, 'FR', '48', 'Lozère'),
(231, 'FR', '49', 'Maine-et-Loire'),
(232, 'FR', '50', 'Manche'),
(233, 'FR', '51', 'Marne'),
(234, 'FR', '52', 'Haute-Marne'),
(235, 'FR', '53', 'Mayenne'),
(236, 'FR', '54', 'Meurthe-et-Moselle'),
(237, 'FR', '55', 'Meuse'),
(238, 'FR', '56', 'Morbihan'),
(239, 'FR', '57', 'Moselle'),
(240, 'FR', '58', 'Nièvre'),
(241, 'FR', '59', 'Nord'),
(242, 'FR', '60', 'Oise'),
(243, 'FR', '61', 'Orne'),
(244, 'FR', '62', 'Pas-de-Calais'),
(245, 'FR', '63', 'Puy-de-Dôme'),
(246, 'FR', '64', 'Pyrénées-Atlantiques'),
(247, 'FR', '65', 'Hautes-Pyrénées'),
(248, 'FR', '66', 'Pyrénées-Orientales'),
(249, 'FR', '67', 'Bas-Rhin'),
(250, 'FR', '68', 'Haut-Rhin'),
(251, 'FR', '69', 'Rhône'),
(252, 'FR', '70', 'Haute-Saône'),
(253, 'FR', '71', 'Saône-et-Loire'),
(254, 'FR', '72', 'Sarthe'),
(255, 'FR', '73', 'Savoie'),
(256, 'FR', '74', 'Haute-Savoie'),
(257, 'FR', '75', 'Paris'),
(258, 'FR', '76', 'Seine-Maritime'),
(259, 'FR', '77', 'Seine-et-Marne'),
(260, 'FR', '78', 'Yvelines'),
(261, 'FR', '79', 'Deux-Sèvres'),
(262, 'FR', '80', 'Somme'),
(263, 'FR', '81', 'Tarn'),
(264, 'FR', '82', 'Tarn-et-Garonne'),
(265, 'FR', '83', 'Var'),
(266, 'FR', '84', 'Vaucluse'),
(267, 'FR', '85', 'Vendée'),
(268, 'FR', '86', 'Vienne'),
(269, 'FR', '87', 'Haute-Vienne'),
(270, 'FR', '88', 'Vosges'),
(271, 'FR', '89', 'Yonne'),
(272, 'FR', '90', 'Territoire-de-Belfort'),
(273, 'FR', '91', 'Essonne'),
(274, 'FR', '92', 'Hauts-de-Seine'),
(275, 'FR', '93', 'Seine-Saint-Denis'),
(276, 'FR', '94', 'Val-de-Marne'),
(277, 'FR', '95', 'Val-d\'Oise'),
(278, 'RO', 'AB', 'Alba'),
(279, 'RO', 'AR', 'Arad'),
(280, 'RO', 'AG', 'Argeş'),
(281, 'RO', 'BC', 'Bacău'),
(282, 'RO', 'BH', 'Bihor'),
(283, 'RO', 'BN', 'Bistriţa-Năsăud'),
(284, 'RO', 'BT', 'Botoşani'),
(285, 'RO', 'BV', 'Braşov'),
(286, 'RO', 'BR', 'Brăila'),
(287, 'RO', 'B', 'Bucureşti'),
(288, 'RO', 'BZ', 'Buzău'),
(289, 'RO', 'CS', 'Caraş-Severin'),
(290, 'RO', 'CL', 'Călăraşi'),
(291, 'RO', 'CJ', 'Cluj'),
(292, 'RO', 'CT', 'Constanţa'),
(293, 'RO', 'CV', 'Covasna'),
(294, 'RO', 'DB', 'Dâmboviţa'),
(295, 'RO', 'DJ', 'Dolj'),
(296, 'RO', 'GL', 'Galaţi'),
(297, 'RO', 'GR', 'Giurgiu'),
(298, 'RO', 'GJ', 'Gorj'),
(299, 'RO', 'HR', 'Harghita'),
(300, 'RO', 'HD', 'Hunedoara'),
(301, 'RO', 'IL', 'Ialomiţa'),
(302, 'RO', 'IS', 'Iaşi'),
(303, 'RO', 'IF', 'Ilfov'),
(304, 'RO', 'MM', 'Maramureş'),
(305, 'RO', 'MH', 'Mehedinţi'),
(306, 'RO', 'MS', 'Mureş'),
(307, 'RO', 'NT', 'Neamţ'),
(308, 'RO', 'OT', 'Olt'),
(309, 'RO', 'PH', 'Prahova'),
(310, 'RO', 'SM', 'Satu-Mare'),
(311, 'RO', 'SJ', 'Sălaj'),
(312, 'RO', 'SB', 'Sibiu'),
(313, 'RO', 'SV', 'Suceava'),
(314, 'RO', 'TR', 'Teleorman'),
(315, 'RO', 'TM', 'Timiş'),
(316, 'RO', 'TL', 'Tulcea'),
(317, 'RO', 'VS', 'Vaslui'),
(318, 'RO', 'VL', 'Vâlcea'),
(319, 'RO', 'VN', 'Vrancea'),
(320, 'FI', 'Lappi', 'Lappi'),
(321, 'FI', 'Pohjois-Pohjanmaa', 'Pohjois-Pohjanmaa'),
(322, 'FI', 'Kainuu', 'Kainuu'),
(323, 'FI', 'Pohjois-Karjala', 'Pohjois-Karjala'),
(324, 'FI', 'Pohjois-Savo', 'Pohjois-Savo'),
(325, 'FI', 'Etelä-Savo', 'Etelä-Savo'),
(326, 'FI', 'Etelä-Pohjanmaa', 'Etelä-Pohjanmaa'),
(327, 'FI', 'Pohjanmaa', 'Pohjanmaa'),
(328, 'FI', 'Pirkanmaa', 'Pirkanmaa'),
(329, 'FI', 'Satakunta', 'Satakunta'),
(330, 'FI', 'Keski-Pohjanmaa', 'Keski-Pohjanmaa'),
(331, 'FI', 'Keski-Suomi', 'Keski-Suomi'),
(332, 'FI', 'Varsinais-Suomi', 'Varsinais-Suomi'),
(333, 'FI', 'Etelä-Karjala', 'Etelä-Karjala'),
(334, 'FI', 'Päijät-Häme', 'Päijät-Häme'),
(335, 'FI', 'Kanta-Häme', 'Kanta-Häme'),
(336, 'FI', 'Uusimaa', 'Uusimaa'),
(337, 'FI', 'Itä-Uusimaa', 'Itä-Uusimaa'),
(338, 'FI', 'Kymenlaakso', 'Kymenlaakso'),
(339, 'FI', 'Ahvenanmaa', 'Ahvenanmaa'),
(340, 'EE', 'EE-37', 'Harjumaa'),
(341, 'EE', 'EE-39', 'Hiiumaa'),
(342, 'EE', 'EE-44', 'Ida-Virumaa'),
(343, 'EE', 'EE-49', 'Jõgevamaa'),
(344, 'EE', 'EE-51', 'Järvamaa'),
(345, 'EE', 'EE-57', 'Läänemaa'),
(346, 'EE', 'EE-59', 'Lääne-Virumaa'),
(347, 'EE', 'EE-65', 'Põlvamaa'),
(348, 'EE', 'EE-67', 'Pärnumaa'),
(349, 'EE', 'EE-70', 'Raplamaa'),
(350, 'EE', 'EE-74', 'Saaremaa'),
(351, 'EE', 'EE-78', 'Tartumaa'),
(352, 'EE', 'EE-82', 'Valgamaa'),
(353, 'EE', 'EE-84', 'Viljandimaa'),
(354, 'EE', 'EE-86', 'Võrumaa'),
(355, 'LV', 'LV-DGV', 'Daugavpils'),
(356, 'LV', 'LV-JEL', 'Jelgava'),
(357, 'LV', 'Jēkabpils', 'Jēkabpils'),
(358, 'LV', 'LV-JUR', 'Jūrmala'),
(359, 'LV', 'LV-LPX', 'Liepāja'),
(360, 'LV', 'LV-LE', 'Liepājas novads'),
(361, 'LV', 'LV-REZ', 'Rēzekne'),
(362, 'LV', 'LV-RIX', 'Rīga'),
(363, 'LV', 'LV-RI', 'Rīgas novads'),
(364, 'LV', 'Valmiera', 'Valmiera'),
(365, 'LV', 'LV-VEN', 'Ventspils'),
(366, 'LV', 'Aglonas novads', 'Aglonas novads'),
(367, 'LV', 'LV-AI', 'Aizkraukles novads'),
(368, 'LV', 'Aizputes novads', 'Aizputes novads'),
(369, 'LV', 'Aknīstes novads', 'Aknīstes novads'),
(370, 'LV', 'Alojas novads', 'Alojas novads'),
(371, 'LV', 'Alsungas novads', 'Alsungas novads'),
(372, 'LV', 'LV-AL', 'Alūksnes novads'),
(373, 'LV', 'Amatas novads', 'Amatas novads'),
(374, 'LV', 'Apes novads', 'Apes novads'),
(375, 'LV', 'Auces novads', 'Auces novads'),
(376, 'LV', 'Babītes novads', 'Babītes novads'),
(377, 'LV', 'Baldones novads', 'Baldones novads'),
(378, 'LV', 'Baltinavas novads', 'Baltinavas novads'),
(379, 'LV', 'LV-BL', 'Balvu novads'),
(380, 'LV', 'LV-BU', 'Bauskas novads'),
(381, 'LV', 'Beverīnas novads', 'Beverīnas novads'),
(382, 'LV', 'Brocēnu novads', 'Brocēnu novads'),
(383, 'LV', 'Burtnieku novads', 'Burtnieku novads'),
(384, 'LV', 'Carnikavas novads', 'Carnikavas novads'),
(385, 'LV', 'Cesvaines novads', 'Cesvaines novads'),
(386, 'LV', 'Ciblas novads', 'Ciblas novads'),
(387, 'LV', 'LV-CE', 'Cēsu novads'),
(388, 'LV', 'Dagdas novads', 'Dagdas novads'),
(389, 'LV', 'LV-DA', 'Daugavpils novads'),
(390, 'LV', 'LV-DO', 'Dobeles novads'),
(391, 'LV', 'Dundagas novads', 'Dundagas novads'),
(392, 'LV', 'Durbes novads', 'Durbes novads'),
(393, 'LV', 'Engures novads', 'Engures novads'),
(394, 'LV', 'Garkalnes novads', 'Garkalnes novads'),
(395, 'LV', 'Grobiņas novads', 'Grobiņas novads'),
(396, 'LV', 'LV-GU', 'Gulbenes novads'),
(397, 'LV', 'Iecavas novads', 'Iecavas novads'),
(398, 'LV', 'Ikšķiles novads', 'Ikšķiles novads'),
(399, 'LV', 'Ilūkstes novads', 'Ilūkstes novads'),
(400, 'LV', 'Inčukalna novads', 'Inčukalna novads'),
(401, 'LV', 'Jaunjelgavas novads', 'Jaunjelgavas novads'),
(402, 'LV', 'Jaunpiebalgas novads', 'Jaunpiebalgas novads'),
(403, 'LV', 'Jaunpils novads', 'Jaunpils novads'),
(404, 'LV', 'LV-JL', 'Jelgavas novads'),
(405, 'LV', 'LV-JK', 'Jēkabpils novads'),
(406, 'LV', 'Kandavas novads', 'Kandavas novads'),
(407, 'LV', 'Kokneses novads', 'Kokneses novads'),
(408, 'LV', 'Krimuldas novads', 'Krimuldas novads'),
(409, 'LV', 'Krustpils novads', 'Krustpils novads'),
(410, 'LV', 'LV-KR', 'Krāslavas novads'),
(411, 'LV', 'LV-KU', 'Kuldīgas novads'),
(412, 'LV', 'Kārsavas novads', 'Kārsavas novads'),
(413, 'LV', 'Lielvārdes novads', 'Lielvārdes novads'),
(414, 'LV', 'LV-LM', 'Limbažu novads'),
(415, 'LV', 'Lubānas novads', 'Lubānas novads'),
(416, 'LV', 'LV-LU', 'Ludzas novads'),
(417, 'LV', 'Līgatnes novads', 'Līgatnes novads'),
(418, 'LV', 'Līvānu novads', 'Līvānu novads'),
(419, 'LV', 'LV-MA', 'Madonas novads'),
(420, 'LV', 'Mazsalacas novads', 'Mazsalacas novads'),
(421, 'LV', 'Mālpils novads', 'Mālpils novads'),
(422, 'LV', 'Mārupes novads', 'Mārupes novads'),
(423, 'LV', 'Naukšēnu novads', 'Naukšēnu novads'),
(424, 'LV', 'Neretas novads', 'Neretas novads'),
(425, 'LV', 'Nīcas novads', 'Nīcas novads'),
(426, 'LV', 'LV-OG', 'Ogres novads'),
(427, 'LV', 'Olaines novads', 'Olaines novads'),
(428, 'LV', 'Ozolnieku novads', 'Ozolnieku novads'),
(429, 'LV', 'LV-PR', 'Preiļu novads'),
(430, 'LV', 'Priekules novads', 'Priekules novads'),
(431, 'LV', 'Priekuļu novads', 'Priekuļu novads'),
(432, 'LV', 'Pārgaujas novads', 'Pārgaujas novads'),
(433, 'LV', 'Pāvilostas novads', 'Pāvilostas novads'),
(434, 'LV', 'Pļaviņu novads', 'Pļaviņu novads'),
(435, 'LV', 'Raunas novads', 'Raunas novads'),
(436, 'LV', 'Riebiņu novads', 'Riebiņu novads'),
(437, 'LV', 'Rojas novads', 'Rojas novads'),
(438, 'LV', 'Ropažu novads', 'Ropažu novads'),
(439, 'LV', 'Rucavas novads', 'Rucavas novads'),
(440, 'LV', 'Rugāju novads', 'Rugāju novads'),
(441, 'LV', 'Rundāles novads', 'Rundāles novads'),
(442, 'LV', 'LV-RE', 'Rēzeknes novads'),
(443, 'LV', 'Rūjienas novads', 'Rūjienas novads'),
(444, 'LV', 'Salacgrīvas novads', 'Salacgrīvas novads'),
(445, 'LV', 'Salas novads', 'Salas novads'),
(446, 'LV', 'Salaspils novads', 'Salaspils novads'),
(447, 'LV', 'LV-SA', 'Saldus novads'),
(448, 'LV', 'Saulkrastu novads', 'Saulkrastu novads'),
(449, 'LV', 'Siguldas novads', 'Siguldas novads'),
(450, 'LV', 'Skrundas novads', 'Skrundas novads'),
(451, 'LV', 'Skrīveru novads', 'Skrīveru novads'),
(452, 'LV', 'Smiltenes novads', 'Smiltenes novads'),
(453, 'LV', 'Stopiņu novads', 'Stopiņu novads'),
(454, 'LV', 'Strenču novads', 'Strenču novads'),
(455, 'LV', 'Sējas novads', 'Sējas novads'),
(456, 'LV', 'LV-TA', 'Talsu novads'),
(457, 'LV', 'LV-TU', 'Tukuma novads'),
(458, 'LV', 'Tērvetes novads', 'Tērvetes novads'),
(459, 'LV', 'Vaiņodes novads', 'Vaiņodes novads'),
(460, 'LV', 'LV-VK', 'Valkas novads'),
(461, 'LV', 'LV-VM', 'Valmieras novads'),
(462, 'LV', 'Varakļānu novads', 'Varakļānu novads'),
(463, 'LV', 'Vecpiebalgas novads', 'Vecpiebalgas novads'),
(464, 'LV', 'Vecumnieku novads', 'Vecumnieku novads'),
(465, 'LV', 'LV-VE', 'Ventspils novads'),
(466, 'LV', 'Viesītes novads', 'Viesītes novads'),
(467, 'LV', 'Viļakas novads', 'Viļakas novads'),
(468, 'LV', 'Viļānu novads', 'Viļānu novads'),
(469, 'LV', 'Vārkavas novads', 'Vārkavas novads'),
(470, 'LV', 'Zilupes novads', 'Zilupes novads'),
(471, 'LV', 'Ādažu novads', 'Ādažu novads'),
(472, 'LV', 'Ērgļu novads', 'Ērgļu novads'),
(473, 'LV', 'Ķeguma novads', 'Ķeguma novads'),
(474, 'LV', 'Ķekavas novads', 'Ķekavas novads'),
(475, 'LT', 'LT-AL', 'Alytaus Apskritis'),
(476, 'LT', 'LT-KU', 'Kauno Apskritis'),
(477, 'LT', 'LT-KL', 'Klaipėdos Apskritis'),
(478, 'LT', 'LT-MR', 'Marijampolės Apskritis'),
(479, 'LT', 'LT-PN', 'Panevėžio Apskritis'),
(480, 'LT', 'LT-SA', 'Šiaulių Apskritis'),
(481, 'LT', 'LT-TA', 'Tauragės Apskritis'),
(482, 'LT', 'LT-TE', 'Telšių Apskritis'),
(483, 'LT', 'LT-UT', 'Utenos Apskritis'),
(484, 'LT', 'LT-VL', 'Vilniaus Apskritis'),
(485, 'BR', 'AC', 'Acre'),
(486, 'BR', 'AL', 'Alagoas'),
(487, 'BR', 'AP', 'Amapá'),
(488, 'BR', 'AM', 'Amazonas'),
(489, 'BR', 'BA', 'Bahia'),
(490, 'BR', 'CE', 'Ceará'),
(491, 'BR', 'ES', 'Espírito Santo'),
(492, 'BR', 'GO', 'Goiás'),
(493, 'BR', 'MA', 'Maranhão'),
(494, 'BR', 'MT', 'Mato Grosso'),
(495, 'BR', 'MS', 'Mato Grosso do Sul'),
(496, 'BR', 'MG', 'Minas Gerais'),
(497, 'BR', 'PA', 'Pará'),
(498, 'BR', 'PB', 'Paraíba'),
(499, 'BR', 'PR', 'Paraná'),
(500, 'BR', 'PE', 'Pernambuco'),
(501, 'BR', 'PI', 'Piauí'),
(502, 'BR', 'RJ', 'Rio de Janeiro'),
(503, 'BR', 'RN', 'Rio Grande do Norte'),
(504, 'BR', 'RS', 'Rio Grande do Sul'),
(505, 'BR', 'RO', 'Rondônia'),
(506, 'BR', 'RR', 'Roraima'),
(507, 'BR', 'SC', 'Santa Catarina'),
(508, 'BR', 'SP', 'São Paulo'),
(509, 'BR', 'SE', 'Sergipe'),
(510, 'BR', 'TO', 'Tocantins'),
(511, 'BR', 'DF', 'Distrito Federal'),
(512, 'HR', 'HR-01', 'Zagrebačka županija'),
(513, 'HR', 'HR-02', 'Krapinsko-zagorska županija'),
(514, 'HR', 'HR-03', 'Sisačko-moslavačka županija'),
(515, 'HR', 'HR-04', 'Karlovačka županija'),
(516, 'HR', 'HR-05', 'Varaždinska županija'),
(517, 'HR', 'HR-06', 'Koprivničko-križevačka županija'),
(518, 'HR', 'HR-07', 'Bjelovarsko-bilogorska županija'),
(519, 'HR', 'HR-08', 'Primorsko-goranska županija'),
(520, 'HR', 'HR-09', 'Ličko-senjska županija'),
(521, 'HR', 'HR-10', 'Virovitičko-podravska županija'),
(522, 'HR', 'HR-11', 'Požeško-slavonska županija'),
(523, 'HR', 'HR-12', 'Brodsko-posavska županija'),
(524, 'HR', 'HR-13', 'Zadarska županija'),
(525, 'HR', 'HR-14', 'Osječko-baranjska županija'),
(526, 'HR', 'HR-15', 'Šibensko-kninska županija'),
(527, 'HR', 'HR-16', 'Vukovarsko-srijemska županija'),
(528, 'HR', 'HR-17', 'Splitsko-dalmatinska županija'),
(529, 'HR', 'HR-18', 'Istarska županija'),
(530, 'HR', 'HR-19', 'Dubrovačko-neretvanska županija'),
(531, 'HR', 'HR-20', 'Međimurska županija'),
(532, 'HR', 'HR-21', 'Grad Zagreb'),
(533, 'IN', 'AP', 'ANDHRA PRADESH'),
(534, 'IN', 'AS', 'ASSAM'),
(535, 'IN', 'AR', 'ARUNACHAL PRADESH'),
(536, 'IN', 'BR', 'BIHAR'),
(537, 'IN', 'GJ', 'GUJRAT'),
(538, 'IN', 'HR', 'HARYANA'),
(539, 'IN', 'HP', 'HIMACHAL PRADESH'),
(540, 'IN', 'JK', 'JAMMU & KASHMIR'),
(541, 'IN', 'KA', 'KARNATAKA'),
(542, 'IN', 'KL', 'KERALA'),
(543, 'IN', 'MP', 'MADHYA PRADESH'),
(544, 'IN', 'MH', 'MAHARASHTRA'),
(545, 'IN', 'MN', 'MANIPUR'),
(546, 'IN', 'ML', 'MEGHALAYA'),
(547, 'IN', 'MZ', 'MIZORAM'),
(548, 'IN', 'NL', 'NAGALAND'),
(549, 'IN', 'OD', 'ORISSA'),
(550, 'IN', 'PB', 'PUNJAB'),
(551, 'IN', 'RJ', 'RAJASTHAN'),
(552, 'IN', 'SK', 'SIKKIM'),
(553, 'IN', 'TN', 'TAMIL NADU'),
(554, 'IN', 'TR', 'TRIPURA'),
(555, 'IN', 'UP', 'UTTAR PRADESH'),
(556, 'IN', 'WB', 'WEST BENGAL'),
(557, 'IN', 'DL', 'DELHI'),
(558, 'IN', 'GA', 'GOA'),
(559, 'IN', 'PY', 'PONDICHERY'),
(560, 'IN', 'LD', 'LAKSHDWEEP'),
(561, 'IN', 'DD', 'DAMAN & DIU'),
(562, 'IN', 'DN', 'DADRA & NAGAR'),
(563, 'IN', 'CT', 'CHANDIGARH'),
(564, 'IN', 'AN', 'ANDAMAN & NICOBAR'),
(565, 'IN', 'UT', 'UTTARANCHAL'),
(566, 'IN', 'JH', 'JHARKHAND'),
(567, 'IN', 'CG', 'CHATTISGARH'),
(568, 'CL', 'AN', 'Antofagasta'),
(569, 'CL', 'AI', 'Aisén del General Carlos Ibañez del Campo'),
(570, 'CL', 'AP', 'Arica y Parinacota'),
(571, 'CL', 'AR', 'La Araucanía'),
(572, 'CL', 'AT', 'Atacama'),
(573, 'CL', 'BI', 'Biobío'),
(574, 'CL', 'CO', 'Coquimbo'),
(575, 'CL', 'LI', 'Libertador General Bernardo O\'Higgins'),
(576, 'CL', 'LL', 'Los Lagos'),
(577, 'CL', 'LR', 'Los Ríos'),
(578, 'CL', 'MA', 'Magallanes'),
(579, 'CL', 'ML', 'Maule'),
(580, 'CL', 'NB', 'Ñuble'),
(581, 'CL', 'RM', 'Región Metropolitana de Santiago'),
(582, 'CL', 'TA', 'Tarapacá'),
(583, 'CL', 'VS', 'Valparaíso');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'fdgfd@reh.hg', '2019-07-25 08:41:23', '2019-07-25 08:41:23'),
(3, 'fghf@fdh.gfhj', '2019-07-25 10:05:19', '2019-07-25 10:05:19'),
(4, 'hello@test.com', '2019-07-29 11:57:02', '2019-07-29 11:57:02'),
(5, 'hello@test.com', '2019-07-29 11:57:28', '2019-07-29 11:57:28'),
(6, 'jhon@gmail.com', '2019-07-30 11:33:17', '2019-07-30 11:33:17'),
(7, 'demo@gmail.com', '2019-07-30 12:04:41', '2019-07-30 12:04:41'),
(8, 'arun@gmail.com', '2019-08-02 12:24:10', '2019-08-02 12:24:10'),
(9, 'arun2@gmail.com', '2019-08-02 12:26:49', '2019-08-02 12:26:49'),
(10, 'arun3@gmail.com', '2019-08-02 12:27:35', '2019-08-02 12:27:35'),
(11, 'smithalem421@gmail.com', '2019-08-07 08:10:04', '2019-08-07 08:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'humor', '2019-08-28 08:07:23', '2019-08-28 08:28:38'),
(2, 'college', '2019-08-28 08:29:14', '2019-08-28 08:29:14'),
(3, 'florida man', '2019-08-28 08:31:22', '2019-08-28 08:31:22'),
(6, 'Nature', '2019-09-13 10:03:18', '2019-09-13 10:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arun Pratap', 'Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.', '41241.png', 1, '2019-07-24 13:46:29', '2019-07-24 14:19:13'),
(2, 'Priyanka Das', 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.', '66018.png', 1, '2019-07-24 13:48:17', '2019-07-24 14:19:23'),
(3, 'Arun Pratap', 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.', '56035.png', 1, '2019-07-24 14:37:28', '2019-07-24 14:37:28'),
(4, 'Arun Pratap', 'Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.', '52175.png', 1, '2019-07-25 10:06:46', '2019-07-25 10:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `gender`, `street_line`, `city`, `state`, `country`, `postal_code`, `avatar`, `password`, `email_verified_at`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'priyanka1', 'demo@virtualemployee.com', '8596321452', 'Female', '53 W 46th Street', 'New York', 'NY', 'US', '10036', '51352.jpeg', '$2y$10$iLkmglQSFohy8xocfL.n/ucD05KxBCKpDhX8ocx4o99/6kybrFK.y', '2019-08-07 10:27:30', NULL, 'bRBOYAjozndHqvfYZUNyLnCNtWv6GThERZFUSahN6ncQJBXqVrkIyQREFo5y', '2019-06-26 05:00:13', '2019-09-13 11:02:11'),
(4, 'Ajeet Kumar', NULL, 'jeet@gmail.com', '7894561230', 'Male', NULL, '', '', '', '', '88351.jpg', '$2y$10$i7e6yZ6fjcdWOdVAAfn5NOpM7soMur/Noa1Uv9VuVVHRySw6YuHem', '2019-06-25 18:30:00', NULL, NULL, '2019-06-26 08:35:46', '2019-07-30 11:27:20'),
(5, 'Sunil Kumar', NULL, 'sunil@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$1eI1SVATeIVzXYqCobab.Oi2ZYYx4cSBQfLZUA1WrHQcx7d.FrfV.', '2019-06-26 18:30:00', NULL, NULL, '2019-06-26 08:54:30', '2019-06-26 08:54:30'),
(6, 'Test1', NULL, 'test1@gmail.com', '8596742133', 'Male', NULL, '', '', '', '', '82853.jpg', '$2y$10$UXwXg4llG6KWRABFGBncHuYCGzdwLFiVAW6N0lSakTspdJ8hnplwa', '2019-07-02 01:14:22', NULL, NULL, '2019-07-02 01:12:30', '2019-07-02 01:14:22'),
(7, 'Test', NULL, 'testtest@gmail.com', '8574526396', 'Male', NULL, '', '', '', '', '68689.jpg', '$2y$10$dHcUi04Kqkgh7kniyErgsOFaBy.gW2.uXNpfJD2Y.AqA/T51Je1XK', '2019-07-01 18:30:00', NULL, NULL, '2019-07-02 01:15:27', '2019-07-02 01:16:26'),
(8, 'Arun Pratap', NULL, 'arunpratap1@virtualemployee.com', '99582475401', 'Male', '85 Crooked Hill Road', 'Commack', 'NY', 'US', '11726', '18107.jpg', '$2y$10$1zrNPgoHg4xhVgjdWl4Bku2iwjPI2PTsQfYhK2juR.aw6CenS.ZZy', '2019-07-31 10:51:36', NULL, NULL, '2019-07-03 08:06:59', '2019-09-13 12:37:32'),
(9, 'demo', NULL, 'buyer@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$dAedJPLq3sZs7qfC8Itf9O5YT1AzGl01SHJt/x4.sB84417EBGmBi', '2019-07-09 00:00:00', NULL, NULL, '2019-07-09 11:30:53', '2019-07-09 11:30:53'),
(10, 'gloria', NULL, 'test@gmail.com', '8563254152', 'Male', '59 West 46th Street', 'New York', 'NY', 'US', '10036', '83703.jpg', '$2y$10$uVy.Ip4dRIUtXHmgu/vUveNP62XRKG1ZPWsiuV5uU21ukGFbia3wC', '2019-07-26 10:46:23', NULL, 'XvhGkUUpZ7sCcj0qS1S1qxFcDHowVCsu0GEZ7a8wcSiBmVzyzOOueDY0QgQF', '2019-07-25 10:13:27', '2019-09-13 13:05:48'),
(11, 'George Henry', NULL, 'georgehenry@yopmail.com', '9898989891', 'Male', NULL, '', '', '', '', '95194.jpg', '$2y$10$46z4L8VQDr9hCOqsYu74YOQaqft/Dnbmpos85mxb.IKEOTFHgFyU2', '2019-07-25 10:43:55', NULL, NULL, '2019-07-25 10:30:11', '2019-07-25 10:54:17'),
(13, 'Peter', NULL, 'peter@yopmail.com', '133344444', 'Male', NULL, '', '', '', '', '69452.png', '$2y$10$TgQ9sovKRpqeItCpgDHlPe9Ai9WLnLKixmnb5v7dZKNEpbOEvD5Qi', '2019-08-05 10:59:51', NULL, 'bNrS2uFmzABceZ9VnaRxFPWkd8awwPDVc8Y2OiBC0jHYUdBVZK20BbJ7hlKB', '2019-07-25 11:03:19', '2019-08-05 10:59:51'),
(14, 'alex taylor', NULL, 'alex@weuweu.com', '454545454', 'Female', NULL, '', '', '', '', NULL, '$2y$10$pjPywzN875/v2IA7gp3Rs.s2CZv1gihJdE9hzFmY6/Ruzqn2fkGWy', '2019-07-25 11:14:53', NULL, NULL, '2019-07-25 11:14:53', '2019-07-25 11:14:53'),
(16, 'test', NULL, 'fdf@yopmail.com', '765656565', 'Male', NULL, '', '', '', '', '69510.png', '$2y$10$RR4/QZw6yjJrrS.qgGtcFO1WP.z6z5VtA7QgVmK8ntnQ0EkAnOEM6', '2019-08-26 07:36:28', NULL, NULL, '2019-07-25 11:17:50', '2019-08-26 07:36:28'),
(17, 'Patterson taylor', NULL, 'Patterson@yopmail.com', '54654656', 'Male', NULL, '', '', '', '', '72353.jpeg', '$2y$10$Pn/9i7JgiIl13TKVDURpM.pecoqV39LvZNWyj48HSI5cg/vj.CZmS', '2019-08-20 14:19:04', NULL, NULL, '2019-07-25 11:20:07', '2019-08-20 14:19:04'),
(18, 'alem A', NULL, 'smithalem421@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$OK.oBiF2EzC7JMU7dbW/xuvUMmWFASs4/nAaSWrifqpWS1YhpW1tO', '2019-08-02 07:01:33', NULL, 'nAHjkf2B0KGigf4gTwgNzxI71hUv5FnJCHmRT7EAuennnxvnDXctEleKgvN2', '2019-07-25 11:52:04', '2019-08-07 08:00:02'),
(19, 'John Haddin', NULL, 'testvirtual7@gmail.com', '5657333456', 'Male', NULL, '', '', '', '', '21446.jpg', '$2y$10$QGaPxJsOH9hE23Iu9g5Sbewhk24RPag8.OO.oWqlqvLBgUeifpXrm', NULL, NULL, NULL, '2019-07-26 09:41:02', '2019-07-26 10:03:58'),
(20, 'Arun Pratap', NULL, 'arun.pratap915@gmail.com', '9999999999', 'Male', NULL, '', '', '', '', '62452.png', '$2y$10$ri9EDiZ/P4nuhH6OMyXLKO3pBBhrQzLOHCRJStv7nOHqRmA7ezQhW', '2019-08-13 15:32:12', NULL, NULL, '2019-07-30 08:32:29', '2019-08-13 15:32:12'),
(21, 'Arun Pratap', NULL, 'arunpratap@virtualemployee.com', '7894561230', 'Male', NULL, '', '', '', '', '94761.png', '$2y$10$ZGx3oBUYnWTU./JTikqJE.anfgqwAC53Iy4F.Xo3hwIM/AoB1G6Qi', '2019-08-13 15:29:23', NULL, NULL, '2019-07-30 12:07:47', '2019-08-13 15:29:23'),
(22, 'Hello', NULL, 'hello@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$IJOdKvtCBh3P54S1f3ZywOZXTJ9mcBS6QF5fQg4eUiqEjVx4Ob0Tu', NULL, NULL, NULL, '2019-07-30 14:47:28', '2019-08-07 12:24:27'),
(23, 'Testing', NULL, 'tesing1axsac23@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$PDAhbM/sBDDmb0NyO7V1auhrC7bX0afmCMTy8HALnfIqn51HsPYFG', '2019-08-07 09:31:18', NULL, NULL, '2019-08-02 14:04:21', '2019-08-07 09:31:18'),
(24, 'Weston Lombard', NULL, 'westonlombard1998@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$5oTpeMLf0q.WTV0DmuwH..lroCA2E7qJRjINQakLUW/X0V7Hf3oUq', '2019-08-06 01:20:37', NULL, '8mvr4hFzarQp9TzQ58clQZDYxXPpTvqywdDhgjsXDej4fp7CoxOmRUNFMey5', '2019-08-06 01:14:38', '2019-08-06 01:20:37'),
(25, 'alem B', NULL, 'smithjosy421@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$Zopv4Sl1QbvG3ldfd0auTeRfHy9XXY49AfKmGEVjGkmpROn8VT3p6', NULL, NULL, NULL, '2019-08-07 07:49:53', '2019-08-07 08:00:06'),
(26, 'Weston Lombard', NULL, 'wlombard@gustavus.edu', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$ZyS8Kv.3o3q3U/mXXynXZeX15gzur8Su5q3J1tm18RdO2yNgl6Hxq', '2019-09-04 15:09:29', NULL, NULL, '2019-09-04 14:38:30', '2019-09-04 15:09:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_book_id_foreign` (`book_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tags_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_isbn_no_unique` (`isbn_no`),
  ADD KEY `books_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_images_book_id_foreign` (`book_id`);

--
-- Indexes for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cancel_orders_user_id_foreign` (`user_id`),
  ADD KEY `co_order_id` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_no`),
  ADD KEY `user_id_orders` (`user_id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book_id_foreign` (`book_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pod_casts`
--
ALTER TABLE `pod_casts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pod_tags`
--
ALTER TABLE `pod_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pod_tags_pod_id_foreign` (`pod_id`),
  ADD KEY `pod_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `refund_amounts`
--
ALTER TABLE `refund_amounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ra_order_id` (`order_id`);

--
-- Indexes for table `seller_rating`
--
ALTER TABLE `seller_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_rating_buyer_id_foreign` (`buyer_id`),
  ADD KEY `seller_rating_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sd_seller_id` (`seller_id`),
  ADD KEY `sd_order_id` (`order_id`);

--
-- Indexes for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`region_id`),
  ADD KEY `DIRECTORY_COUNTRY_REGION_COUNTRY_ID` (`country_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pod_casts`
--
ALTER TABLE `pod_casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pod_tags`
--
ALTER TABLE `pod_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `refund_amounts`
--
ALTER TABLE `refund_amounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seller_rating`
--
ALTER TABLE `seller_rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `region_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Region Id', AUTO_INCREMENT=584;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_images`
--
ALTER TABLE `book_images`
  ADD CONSTRAINT `book_images_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `pod_tags`
--
ALTER TABLE `pod_tags`
  ADD CONSTRAINT `pod_tags_pod_id_foreign` FOREIGN KEY (`pod_id`) REFERENCES `pod_casts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pod_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seller_rating`
--
ALTER TABLE `seller_rating`
  ADD CONSTRAINT `seller_rating_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seller_rating_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  ADD CONSTRAINT `shipping_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
