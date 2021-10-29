-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 09:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_ads`
--

CREATE TABLE `class_ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `tech_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_visits`
--

CREATE TABLE `class_visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `in_time` time NOT NULL,
  `tutes_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district`, `created_at`, `updated_at`) VALUES
(1, 'Gampaha', '2021-07-05 01:15:50', '2021-07-05 01:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `max_marks` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks`
--

CREATE TABLE `exam_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_visits`
--

CREATE TABLE `exam_visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
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
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inst_num` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_id` int(10) UNSIGNED NOT NULL,
  `tele` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card` int(11) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute`, `inst_num`, `address`, `town_id`, `tele`, `email`, `comment`, `ins_img`, `card`, `payment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Indeepa', 'INS/2107/00001', 'Gampaha', 1, '0110668375', 'inst1@gmail.com', '', 'noimage.jpg', 1, 1, 1, '2021-07-05 01:14:38', '2021-07-05 01:14:38'),
(2, 'Susipwan', 'INS/LOC/210700002', 'Gampaha', 1, '0110668362', 'ssssssss@g.nm', NULL, 'noimage.jpg', 1, 1, 1, '2021-09-26 15:01:59', '2021-09-26 15:01:59'),
(4, 'Montana', 'INS/LOC/210700003', 'Gampaha', 1, '0110668373', 'd@fd.cvb', NULL, 'noimage.jpg', 1, 1, 1, '2021-09-26 15:16:47', '2021-09-26 15:16:47'),
(5, 'Test1', 'INS/LOC/210700004', 'Test Address', 1, '0770668974', 'ddddf@vv.com', NULL, 'noimage.jpg', 1, 1, 1, '2021-09-26 15:18:44', '2021-09-26 15:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resiver_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_03_061255_create_districts_table', 1),
(4, '2021_07_03_061315_create_towns_table', 1),
(5, '2021_07_03_061332_create_institutes_table', 1),
(6, '2021_07_03_061353_create_routes_table', 1),
(7, '2021_07_03_061819_create_user_types_table', 1),
(8, '2021_07_03_061821_create_user_permitions_table', 1),
(9, '2021_07_03_061822_create_users_table', 1),
(10, '2021_07_03_061908_create_subjects_table', 1),
(11, '2021_07_03_061926_create_teachers_table', 1),
(12, '2021_07_03_062017_create_teacher_classes_table', 1),
(13, '2021_07_03_062119_create_tutes_table', 1),
(14, '2021_07_03_062140_create_exams_table', 1),
(15, '2021_07_03_062301_create_quizz_papers_table', 1),
(16, '2021_07_03_062334_create_quizz_questions_table', 1),
(17, '2021_07_03_062350_create_quizz_answers_table', 1),
(18, '2021_07_03_062426_create_class_ads_table', 1),
(19, '2021_07_03_062523_create_students_table', 1),
(20, '2021_07_03_062600_create_stu_register_classes_table', 1),
(21, '2021_07_03_062620_create_parents_table', 1),
(22, '2021_07_03_062727_create_class_visits_table', 1),
(23, '2021_07_03_062745_create_exam_visits_table', 1),
(24, '2021_07_03_062850_create_exam_marks_table', 1),
(25, '2021_07_03_062920_create_quizz_marks_table', 1),
(26, '2021_07_03_063001_create_quizz_finishes_table', 1),
(27, '2021_07_03_063042_create_payments_table', 1),
(28, '2021_07_03_063114_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nwi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_answers`
--

CREATE TABLE `quizz_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_or_wro` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_finishes`
--

CREATE TABLE `quizz_finishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_mark_id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `answ_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_marks`
--

CREATE TABLE `quizz_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_papers`
--

CREATE TABLE `quizz_papers` (
  `id` int(10) UNSIGNED NOT NULL,
  `paper_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `max_marks` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizz_questions`
--

CREATE TABLE `quizz_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `paper_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ques_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ques_audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nwi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stu_register_classes`
--

CREATE TABLE `stu_register_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `admition` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sylubus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `digree` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_classes`
--

CREATE TABLE `teacher_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `grade` tinyint(4) NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_date` date NOT NULL,
  `class_time` time NOT NULL,
  `insti_presentage` double NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `admition_fee` double NOT NULL,
  `class_fee` double NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` int(10) UNSIGNED NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `town`, `district_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gampaha', 1, 1, '2021-07-05 01:15:40', '2021-07-05 01:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `tutes`
--

CREATE TABLE `tutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `tute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tute_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `te_class_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `institute_id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tut_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tute_give_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nwi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `user_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `ins_id` int(10) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `nwi`, `mobile`, `tele`, `nic`, `email`, `address`, `image`, `user_type_id`, `user_number`, `status`, `ins_id`, `email_verified_at`, `user_name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Diluka Dewappriya', 'G.D.D.P.Dewappriya', '0770668361', '', '932784742v', 'admin@gmail.com', 'address1', 'admin.jpg', 1, 'GAM/INS/2107/00001', 1, 1, NULL, 'ins1admin@gmail.com', '$2y$10$.bOzyXtNE1j4j0Ax58v5tOFNDFccpwsoPvkMC0UX95KjUbiuFgdU2', NULL, '2021-07-05 01:10:54', NULL),
(4, 'Amila Dilshan', 'A.Dilshan', '0770668362', '0110668373', '932784853v', 'amila@gmail.com', 'Test Address', 'noimage.jpg', 2, 'INS/USE/210700002', 1, 4, NULL, NULL, '$2y$10$.bOzyXtNE1j4j0Ax58v5tOFNDFccpwsoPvkMC0UX95KjUbiuFgdU2', NULL, '2021-09-26 15:16:47', '2021-09-26 15:16:47'),
(5, 'Bharatha Samaranayake', 'B.Samaranayake', '0770668974', '0110668974', '932784964v', 'bharatha@gmail.com', 'Test Address', 'noimage.jpg', 2, 'INS/USE/210700003', 1, 5, NULL, NULL, '$2y$10$.bOzyXtNE1j4j0Ax58v5tOFNDFccpwsoPvkMC0UX95KjUbiuFgdU2', NULL, '2021-09-26 15:18:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_permitions`
--

CREATE TABLE `user_permitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `usertype_id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `usertype`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2021-07-05 01:12:12', '2021-07-05 01:12:12'),
(2, 'Admin', '2021-09-07 20:44:50', NULL),
(3, 'Teacher', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_ads`
--
ALTER TABLE `class_ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_ads_teacher_id_foreign` (`teacher_id`),
  ADD KEY `class_ads_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `class_visits`
--
ALTER TABLE `class_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_visits_stu_id_foreign` (`stu_id`),
  ADD KEY `class_visits_te_class_id_foreign` (`te_class_id`),
  ADD KEY `class_visits_institute_id_foreign` (`institute_id`),
  ADD KEY `class_visits_tutes_id_foreign` (`tutes_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_exam_num_unique` (`exam_num`),
  ADD KEY `exams_subject_id_foreign` (`subject_id`),
  ADD KEY `exams_te_class_id_foreign` (`te_class_id`),
  ADD KEY `exams_teacher_id_foreign` (`teacher_id`),
  ADD KEY `exams_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_marks_te_class_id_foreign` (`te_class_id`),
  ADD KEY `exam_marks_institute_id_foreign` (`institute_id`),
  ADD KEY `exam_marks_exams_id_foreign` (`exams_id`);

--
-- Indexes for table `exam_visits`
--
ALTER TABLE `exam_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_visits_te_class_id_foreign` (`te_class_id`),
  ADD KEY `exam_visits_institute_id_foreign` (`institute_id`),
  ADD KEY `exam_visits_exams_id_foreign` (`exams_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institutes_tele_unique` (`tele`) USING HASH,
  ADD UNIQUE KEY `institutes_email_unique` (`email`) USING HASH,
  ADD KEY `institutes_town_id_foreign` (`town_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parents_email_unique` (`email`),
  ADD UNIQUE KEY `parents_nic_unique` (`nic`),
  ADD KEY `parents_stu_id_foreign` (`stu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_stu_id_foreign` (`stu_id`),
  ADD KEY `payments_te_class_id_foreign` (`te_class_id`),
  ADD KEY `payments_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `quizz_answers`
--
ALTER TABLE `quizz_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizz_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `quizz_finishes`
--
ALTER TABLE `quizz_finishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizz_finishes_quiz_mark_id_foreign` (`quiz_mark_id`),
  ADD KEY `quizz_finishes_quiz_id_foreign` (`quiz_id`),
  ADD KEY `quizz_finishes_answ_id_foreign` (`answ_id`);

--
-- Indexes for table `quizz_marks`
--
ALTER TABLE `quizz_marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizz_marks_quiz_id_foreign` (`quiz_id`),
  ADD KEY `quizz_marks_institute_id_foreign` (`institute_id`),
  ADD KEY `quizz_marks_stu_id_foreign` (`stu_id`);

--
-- Indexes for table `quizz_papers`
--
ALTER TABLE `quizz_papers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quizz_papers_paper_num_unique` (`paper_num`),
  ADD KEY `quizz_papers_subject_id_foreign` (`subject_id`),
  ADD KEY `quizz_papers_te_class_id_foreign` (`te_class_id`),
  ADD KEY `quizz_papers_teacher_id_foreign` (`teacher_id`),
  ADD KEY `quizz_papers_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `quizz_questions`
--
ALTER TABLE `quizz_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizz_questions_paper_id_foreign` (`paper_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nic_unique` (`nic`),
  ADD UNIQUE KEY `students_student_num_unique` (`student_num`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `students_user_name_unique` (`user_name`),
  ADD KEY `students_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `stu_register_classes`
--
ALTER TABLE `stu_register_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_register_classes_stu_id_foreign` (`stu_id`),
  ADD KEY `stu_register_classes_te_class_id_foreign` (`te_class_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_classes_class_num_unique` (`class_num`),
  ADD UNIQUE KEY `teacher_classes_class_number_unique` (`class_number`),
  ADD KEY `teacher_classes_subject_id_foreign` (`subject_id`),
  ADD KEY `teacher_classes_teacher_id_foreign` (`teacher_id`),
  ADD KEY `teacher_classes_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `towns_district_id_foreign` (`district_id`);

--
-- Indexes for table `tutes`
--
ALTER TABLE `tutes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tutes_tute_num_unique` (`tute_num`),
  ADD KEY `tutes_subject_id_foreign` (`subject_id`),
  ADD KEY `tutes_te_class_id_foreign` (`te_class_id`),
  ADD KEY `tutes_teacher_id_foreign` (`teacher_id`),
  ADD KEY `tutes_institute_id_foreign` (`institute_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_nic_unique` (`nic`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD KEY `users_user_type_id_foreign` (`user_type_id`),
  ADD KEY `users_ins_id_foreign` (`ins_id`);

--
-- Indexes for table `user_permitions`
--
ALTER TABLE `user_permitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_permitions_usertype_id_foreign` (`usertype_id`),
  ADD KEY `user_permitions_route_id_foreign` (`route_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_ads`
--
ALTER TABLE `class_ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_visits`
--
ALTER TABLE `class_visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_marks`
--
ALTER TABLE `exam_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_visits`
--
ALTER TABLE `exam_visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_answers`
--
ALTER TABLE `quizz_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_finishes`
--
ALTER TABLE `quizz_finishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_marks`
--
ALTER TABLE `quizz_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_papers`
--
ALTER TABLE `quizz_papers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizz_questions`
--
ALTER TABLE `quizz_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stu_register_classes`
--
ALTER TABLE `stu_register_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutes`
--
ALTER TABLE `tutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_permitions`
--
ALTER TABLE `user_permitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_ads`
--
ALTER TABLE `class_ads`
  ADD CONSTRAINT `class_ads_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ads_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `class_visits`
--
ALTER TABLE `class_visits`
  ADD CONSTRAINT `class_visits_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `class_visits_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `class_visits_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `class_visits_tutes_id_foreign` FOREIGN KEY (`tutes_id`) REFERENCES `tutes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD CONSTRAINT `exam_marks_exams_id_foreign` FOREIGN KEY (`exams_id`) REFERENCES `exams` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_marks_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_marks_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `exam_visits`
--
ALTER TABLE `exam_visits`
  ADD CONSTRAINT `exam_visits_exams_id_foreign` FOREIGN KEY (`exams_id`) REFERENCES `exams` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_visits_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_visits_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `institutes`
--
ALTER TABLE `institutes`
  ADD CONSTRAINT `institutes_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizz_answers`
--
ALTER TABLE `quizz_answers`
  ADD CONSTRAINT `quizz_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `quizz_questions` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizz_finishes`
--
ALTER TABLE `quizz_finishes`
  ADD CONSTRAINT `quizz_finishes_answ_id_foreign` FOREIGN KEY (`answ_id`) REFERENCES `quizz_answers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_finishes_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizz_questions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_finishes_quiz_mark_id_foreign` FOREIGN KEY (`quiz_mark_id`) REFERENCES `quizz_marks` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizz_marks`
--
ALTER TABLE `quizz_marks`
  ADD CONSTRAINT `quizz_marks_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_marks_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizz_papers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_marks_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizz_papers`
--
ALTER TABLE `quizz_papers`
  ADD CONSTRAINT `quizz_papers_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_papers_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_papers_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quizz_papers_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizz_questions`
--
ALTER TABLE `quizz_questions`
  ADD CONSTRAINT `quizz_questions_paper_id_foreign` FOREIGN KEY (`paper_id`) REFERENCES `quizz_papers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `stu_register_classes`
--
ALTER TABLE `stu_register_classes`
  ADD CONSTRAINT `stu_register_classes_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `stu_register_classes_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  ADD CONSTRAINT `teacher_classes_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_classes_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_classes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `towns`
--
ALTER TABLE `towns`
  ADD CONSTRAINT `towns_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tutes`
--
ALTER TABLE `tutes`
  ADD CONSTRAINT `tutes_institute_id_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tutes_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tutes_te_class_id_foreign` FOREIGN KEY (`te_class_id`) REFERENCES `teacher_classes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tutes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ins_id_foreign` FOREIGN KEY (`ins_id`) REFERENCES `institutes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_permitions`
--
ALTER TABLE `user_permitions`
  ADD CONSTRAINT `user_permitions_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`),
  ADD CONSTRAINT `user_permitions_usertype_id_foreign` FOREIGN KEY (`usertype_id`) REFERENCES `user_types` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
