-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: আগ 21, 2016 at 02:40 PM
-- সার্ভার সংস্করন: 10.1.13-MariaDB
-- পিএইছপির সংস্করন: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ডাটাবেইজ: `bubt`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_21_103222_users', 1),
('2016_08_21_104831_student', 2),
('2016_08_21_115734_create_teachers_table', 3);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisor_teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `students`
--

INSERT INTO `students` (`id`, `student_id`, `advisor_teacher_id`, `fullname`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `mobile_number`, `photo_name`, `email`, `active`, `created_at`, `updated_at`) VALUES
(1, '12132203065', '1', 'Mehedi Hasan', 'Anisur Rahman', 'Most Josna Begum', 'Krishibid Group, 801 Rokia Soroni, Kazipara, Mirpur, Dhaka', 'Porakandi, Titas, Comilla', '01819114475', 'mehedi.jpg', 'mehedi4475@gmail.com', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '12132203070', '1', 'Rehena Perbin', 'Md. Rahman Sarker', 'Sangida Begum', 'Reno Hostel, Mirpur 10, Dhaka', 'Hospitalpara, Kurigram', '01757557238', 'rehena', 'rehena4475@gmail.com', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `teachers`
--

INSERT INTO `teachers` (`id`, `department_id`, `teacher_id`, `fullname`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `mobile_number`, `photo_name`, `email`, `active`, `created_at`, `updated_at`) VALUES
(1, '1', '101', 'Mahbub Alam', 'Sharif Ahmad', 'Afroza Afroz', 'West mirpur 1, Dhaka', 'Nilfamari, Kustoia', '01815232652', 'mahbub.jpg', 'mahbub@bubt.ac.bd', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1', '102', 'Sorab Hossain', 'Abudl Alim', 'Jorona Begum', 'Dhanmondi, Dhaka', 'Sirajgonz, Kustoia', '0152541541', 'sorab.jpg', 'sorab@bubt.ac.bd', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `user_id`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '65', '$2y$10$eAGqz4YWskZiN1yC1qmHE.EbXCdAhc6A4HULdhiOFgJ1/djEBW3CK', '1', '1', '1', 'phlwn1uilrqLOcmoZIrkDlYxKeqYMnejG8rM44yYyxkucFPjOUaV8F1ZBEdD', '0000-00-00 00:00:00', '2016-08-21 06:23:11'),
(2, '70', '$2y$10$FY/bHMJywz3Goy0yUD.9yeppPPKcJlZMsBzrMNpJHl554nqTbI2CS', '1', '2', '1', 'OqAhSqTL0ItmpP2yo4r9dXqHMD1rHUDbNksFZQTFScpzYrlrWvjIQHaYPLQJ', '0000-00-00 00:00:00', '2016-08-21 05:43:36'),
(3, '101', '$2y$10$3dEE14M24NQTeDSQV8NsNunP20XTNej6q14A8ZpfjU0BUT8LTEZA2', '2', '1', '1', 'H3vM59B5lvtcIOJOKEsNNPYeQq89ghWCcLMGTanqOtBOIGsYqZFUNuvmNtLR', '0000-00-00 00:00:00', '2016-08-21 06:16:33'),
(4, '102', '$2y$10$8EtBTIeCcbRHKTSeYZrQbO6BbPIqtyhaHKsSFOatmLCMsVQJJu2tK', '2', '2', '1', 'IKIyeKgF9lYLR6xttYNT3FNIQArs9kDlFp3QEZz0sUQ9pTsWdq70cRqUkqDr', '0000-00-00 00:00:00', '2016-08-21 06:22:00'),
(5, 'admin', '$2y$10$ltpc9KBy8B4ih0B9XmwINusaUpVUydQYvxxGBwmfwHlF/9Sm3KmFa', '3', '', '1', 'sZlZW84jC9qP1ukU8HS78wNcno4uMtSzvjX1WJWiLZnZbR7ZYEl2knrJ3p26', '0000-00-00 00:00:00', '2016-08-21 06:25:35');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
