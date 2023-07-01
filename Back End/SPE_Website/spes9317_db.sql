-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2021 at 04:56 AM
-- Server version: 5.7.34-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spes9317_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_actionscheduler_actions`
--

CREATE TABLE `blog_actionscheduler_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `hook` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `scheduled_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scheduled_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `args` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schedule` longtext COLLATE utf8mb4_unicode_520_ci,
  `group_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_attempt_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `claim_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `extended_args` varchar(8000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_actionscheduler_claims`
--

CREATE TABLE `blog_actionscheduler_claims` (
  `claim_id` bigint(20) UNSIGNED NOT NULL,
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_actionscheduler_groups`
--

CREATE TABLE `blog_actionscheduler_groups` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_actionscheduler_groups`
--

INSERT INTO `blog_actionscheduler_groups` (`group_id`, `slug`) VALUES
(1, 'action-scheduler-migration');

-- --------------------------------------------------------

--
-- Table structure for table `blog_actionscheduler_logs`
--

CREATE TABLE `blog_actionscheduler_logs` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `log_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `log_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_commentmeta`
--

CREATE TABLE `blog_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_actions`
--

CREATE TABLE `blog_ig_actions` (
  `contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message_id` bigint(20) UNSIGNED DEFAULT NULL,
  `campaign_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `link_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `list_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ip` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `device` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `browser` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_client` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `os` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `updated_at` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_actions`
--

INSERT INTO `blog_ig_actions` (`contact_id`, `message_id`, `campaign_id`, `type`, `count`, `link_id`, `list_id`, `ip`, `country`, `device`, `browser`, `email_client`, `os`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, 1, 0, 1, '', '', '', '', '', '', 1620547243, 1620547243),
(1, 0, 0, 2, 1, 0, 0, '', '', '', '', '', '', 1620547249, 1620547249),
(2, NULL, NULL, 1, 1, 0, 1, '', '', '', '', '', '', 1620548339, 1620548339),
(2, 0, 0, 2, 1, 0, 0, '', '', '', '', '', '', 1620548346, 1620548346);

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_blocked_emails`
--

CREATE TABLE `blog_ig_blocked_emails` (
  `id` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_campaigns`
--

CREATE TABLE `blog_ig_campaigns` (
  `id` int(10) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_type` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_520_ci,
  `from_name` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `from_email` varchar(150) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `reply_to_name` varchar(250) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `reply_to_email` varchar(150) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `categories` text COLLATE utf8mb4_unicode_520_ci,
  `list_ids` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `base_template_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_520_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_contactmeta`
--

CREATE TABLE `blog_ig_contactmeta` (
  `meta_id` bigint(20) NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_contacts`
--

CREATE TABLE `blog_ig_contacts` (
  `id` int(10) NOT NULL,
  `wp_user_id` int(10) NOT NULL DEFAULT '0',
  `first_name` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `source` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ip_address` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `country_code` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `form_id` int(10) NOT NULL DEFAULT '0',
  `status` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `unsubscribed` tinyint(1) NOT NULL DEFAULT '0',
  `hash` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT '0',
  `is_disposable` tinyint(1) DEFAULT '0',
  `is_rolebased` tinyint(1) DEFAULT '0',
  `is_webmail` tinyint(1) DEFAULT '0',
  `is_deliverable` tinyint(1) DEFAULT '0',
  `is_sendsafely` tinyint(1) DEFAULT '0',
  `meta` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_contacts`
--

INSERT INTO `blog_ig_contacts` (`id`, `wp_user_id`, `first_name`, `last_name`, `email`, `source`, `ip_address`, `country_code`, `form_id`, `status`, `unsubscribed`, `hash`, `created_at`, `updated_at`, `is_verified`, `is_disposable`, `is_rolebased`, `is_webmail`, `is_deliverable`, `is_sendsafely`, `meta`) VALUES
(1, 0, 'Ahmed', '', 'agn@gmail.com', 'form', '', '', 1, 'verified', 0, 'znkwax-tunmdc-yblsdu-ltcbvk-fqgori', '2021-05-09 08:00:43', NULL, 1, 0, 0, 0, 1, 1, NULL),
(2, 0, 'Ali', '', 'Ali@gmail.com', 'form', '', '', 1, 'verified', 0, 'vprlcd-hgoblx-evmdna-zikhjc-kfhwnb', '2021-05-09 08:18:59', NULL, 1, 0, 0, 0, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_contacts_ips`
--

CREATE TABLE `blog_ig_contacts_ips` (
  `ip` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_contacts_ips`
--

INSERT INTO `blog_ig_contacts_ips` (`ip`, `created_on`) VALUES
('41.46.255.8', '2021-05-09 08:00:42'),
('41.46.255.8', '2021-05-09 08:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_contact_meta`
--

CREATE TABLE `blog_ig_contact_meta` (
  `id` int(10) NOT NULL,
  `contact_id` bigint(10) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_forms`
--

CREATE TABLE `blog_ig_forms` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_520_ci,
  `settings` longtext COLLATE utf8mb4_unicode_520_ci,
  `styles` longtext COLLATE utf8mb4_unicode_520_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `af_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_forms`
--

INSERT INTO `blog_ig_forms` (`id`, `name`, `body`, `settings`, `styles`, `created_at`, `updated_at`, `deleted_at`, `af_id`) VALUES
(1, 'Main Form', 'a:4:{i:0;a:5:{s:4:\"type\";s:4:\"text\";s:4:\"name\";s:4:\"Name\";s:2:\"id\";s:4:\"name\";s:6:\"params\";a:4:{s:5:\"label\";s:0:\"\";s:12:\"place_holder\";s:9:\"Your Name\";s:4:\"show\";b:1;s:8:\"required\";b:1;}s:8:\"position\";i:1;}i:1;a:5:{s:4:\"type\";s:4:\"text\";s:4:\"name\";s:5:\"Email\";s:2:\"id\";s:5:\"email\";s:6:\"params\";a:4:{s:5:\"label\";s:0:\"\";s:12:\"place_holder\";s:10:\"Your Email\";s:4:\"show\";b:1;s:8:\"required\";b:1;}s:8:\"position\";i:2;}i:2;a:5:{s:4:\"type\";s:8:\"checkbox\";s:4:\"name\";s:5:\"Lists\";s:2:\"id\";s:5:\"lists\";s:6:\"params\";a:4:{s:5:\"label\";s:5:\"Lists\";s:4:\"show\";b:0;s:8:\"required\";b:1;s:6:\"values\";a:1:{i:0;s:1:\"1\";}}s:8:\"position\";i:3;}i:3;a:5:{s:4:\"type\";s:6:\"submit\";s:4:\"name\";s:6:\"submit\";s:2:\"id\";s:6:\"submit\";s:6:\"params\";a:3:{s:5:\"label\";s:9:\"Subscribe\";s:4:\"show\";b:1;s:8:\"required\";b:1;}s:8:\"position\";i:4;}}', 'a:5:{s:5:\"lists\";a:1:{i:0;s:1:\"1\";}s:4:\"desc\";s:0:\"\";s:12:\"form_version\";s:3:\"1.0\";s:7:\"captcha\";s:2:\"no\";s:4:\"gdpr\";a:2:{s:7:\"consent\";s:2:\"no\";s:12:\"consent_text\";s:35:\"Please accept terms &amp; condition\";}}', NULL, '2021-05-08 21:54:56', '2021-05-08 21:59:16', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_links`
--

CREATE TABLE `blog_ig_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` int(10) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `link` varchar(2083) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hash` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `i` tinyint(1) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_lists`
--

CREATE TABLE `blog_ig_lists` (
  `id` int(10) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hash` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_lists`
--

INSERT INTO `blog_ig_lists` (`id`, `slug`, `name`, `hash`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'main-audience', 'Main Audience', '1918848a97ab', '2021-05-08 21:50:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_lists_contacts`
--

CREATE TABLE `blog_ig_lists_contacts` (
  `id` int(10) NOT NULL,
  `list_id` int(10) NOT NULL,
  `contact_id` int(10) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `optin_type` tinyint(4) NOT NULL,
  `subscribed_at` datetime DEFAULT NULL,
  `subscribed_ip` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `unsubscribed_at` datetime DEFAULT NULL,
  `unsubscribed_ip` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_ig_lists_contacts`
--

INSERT INTO `blog_ig_lists_contacts` (`id`, `list_id`, `contact_id`, `status`, `optin_type`, `subscribed_at`, `subscribed_ip`, `unsubscribed_at`, `unsubscribed_ip`) VALUES
(1, 1, 1, 'unconfirmed', 2, '0000-00-00 00:00:00', '', NULL, NULL),
(2, 1, 2, 'unconfirmed', 2, '0000-00-00 00:00:00', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_mailing_queue`
--

CREATE TABLE `blog_ig_mailing_queue` (
  `id` int(10) NOT NULL,
  `hash` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `campaign_id` int(10) NOT NULL DEFAULT '0',
  `subject` text COLLATE utf8mb4_unicode_520_ci,
  `body` longtext COLLATE utf8mb4_unicode_520_ci,
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `start_at` datetime DEFAULT NULL,
  `finish_at` datetime DEFAULT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_520_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_queue`
--

CREATE TABLE `blog_ig_queue` (
  `contact_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `campaign_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `requeued` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `added` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `timestamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sent_at` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `priority` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `count` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `error` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `ignore_status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `options` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tags` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_sending_queue`
--

CREATE TABLE `blog_ig_sending_queue` (
  `id` int(10) NOT NULL,
  `mailing_queue_id` int(10) NOT NULL DEFAULT '0',
  `mailing_queue_hash` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `campaign_id` int(10) NOT NULL DEFAULT '0',
  `contact_id` int(10) NOT NULL DEFAULT '0',
  `contact_hash` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `links` longtext COLLATE utf8mb4_unicode_520_ci,
  `opened` int(1) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `opened_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_temp_import`
--

CREATE TABLE `blog_ig_temp_import` (
  `ID` bigint(20) NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `identifier` char(13) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_unsubscribe_feedback`
--

CREATE TABLE `blog_ig_unsubscribe_feedback` (
  `id` int(10) NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `list_id` int(10) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `mailing_queue_id` int(10) UNSIGNED NOT NULL,
  `feedback_slug` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `feedback_text` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_wc_cart`
--

CREATE TABLE `blog_ig_wc_cart` (
  `id` bigint(20) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `guest_id` bigint(20) NOT NULL DEFAULT '0',
  `last_modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `items` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `coupons` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fees` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `shipping_tax_total` double NOT NULL DEFAULT '0',
  `shipping_total` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  `token` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `currency` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_wc_guests`
--

CREATE TABLE `blog_ig_wc_guests` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tracking_key` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `last_active` datetime DEFAULT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `language` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `most_recent_order` bigint(20) NOT NULL DEFAULT '0',
  `version` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_workflows`
--

CREATE TABLE `blog_ig_workflows` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `trigger_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `trigger_options` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `rules` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `actions` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `priority` int(11) DEFAULT '0',
  `meta` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_ig_workflows_queue`
--

CREATE TABLE `blog_ig_workflows_queue` (
  `id` bigint(20) NOT NULL,
  `workflow_id` bigint(20) DEFAULT NULL,
  `failed` int(1) NOT NULL DEFAULT '0',
  `failure_code` int(3) NOT NULL DEFAULT '0',
  `meta` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `scheduled_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_links`
--

CREATE TABLE `blog_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_options`
--

CREATE TABLE `blog_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_options`
--

INSERT INTO `blog_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://spesusc.com/SPE_Blog', 'yes'),
(2, 'home', 'http://spesusc.com/SPE_Blog', 'yes'),
(3, 'blogname', 'SPE Blog', 'yes'),
(4, 'blogdescription', 'SPE Suez  Blog', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'aaaaa@sd.sd', 'yes'),
(7, 'start_of_week', '0', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '6', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%category%/%postname%/', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:5:{i:0;s:69:\"/home/spes93175151/public_html/SPE_Blog/wp-content/themes/spe/tag.php\";i:2;s:74:\"/home/spes93175151/public_html/SPE_Blog/wp-content/themes/spe/category.php\";i:3;s:72:\"/home/spes93175151/public_html/SPE_Blog/wp-content/themes/spe/single.php\";i:4;s:70:\"/home/spes93175151/public_html/SPE_Blog/wp-content/themes/spe/page.php\";i:5;s:74:\"/home/spes93175151/public_html/SPE_Blog/wp-content/themes/spe/inc/post.php\";}', 'no'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '300', 'yes'),
(57, 'thumbnail_size_h', '300', 'yes'),
(58, 'thumbnail_crop', '', 'yes'),
(59, 'medium_size_w', '600', 'yes'),
(60, 'medium_size_h', '600', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', '', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:3:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}i:3;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:3:{i:1;a:0:{}i:2;a:4:{s:5:\"title\";s:10:\"Our Vision\";s:4:\"text\";s:229:\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.\";s:6:\"filter\";b:1;s:6:\"visual\";b:1;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'blog_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1626976578', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'initial_db_version', '48748', 'yes'),
(96, 'blog_user_roles', 'a:7:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:62:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:20:\"wpseo_manage_options\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:35:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}s:13:\"wpseo_manager\";a:2:{s:4:\"name\";s:11:\"SEO Manager\";s:12:\"capabilities\";a:38:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;s:28:\"wpseo_edit_advanced_metadata\";b:1;s:20:\"wpseo_manage_options\";b:1;s:23:\"view_site_health_checks\";b:1;}}s:12:\"wpseo_editor\";a:2:{s:4:\"name\";s:10:\"SEO Editor\";s:12:\"capabilities\";a:36:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;s:28:\"wpseo_edit_advanced_metadata\";b:1;}}}', 'yes'),
(97, 'fresh_site', '0', 'yes'),
(98, 'widget_search', 'a:3:{i:2;a:1:{s:5:\"title\";s:0:\"\";}i:3;a:1:{s:5:\"title\";s:6:\"Search\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-posts', 'a:4:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}i:3;a:3:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;s:9:\"show_date\";b:0;}i:4;a:3:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;s:9:\"show_date\";b:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'sidebars_widgets', 'a:8:{s:19:\"wp_inactive_widgets\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:12:\"spe-side-bar\";a:5:{i:0;s:8:\"search-3\";i:1;s:14:\"recent-posts-4\";i:2;s:12:\"categories-3\";i:3;s:11:\"tag_cloud-2\";i:4;s:24:\"email-subscribers-form-2\";}s:10:\"newsletter\";a:0:{}s:11:\"footer-wid1\";a:1:{i:0;s:6:\"text-2\";}s:11:\"footer-wid2\";a:1:{i:0;s:14:\"recent-posts-3\";}s:11:\"footer-wid3\";a:1:{i:0;s:12:\"categories-2\";}s:11:\"footer-wid4\";a:1:{i:0;s:24:\"email-subscribers-form-3\";}s:13:\"array_version\";i:3;}', 'yes'),
(104, 'cron', 'a:15:{i:1626735984;a:1:{s:26:\"action_scheduler_run_queue\";a:1:{s:32:\"0d04ed39571b55704c122d726248bbac\";a:3:{s:8:\"schedule\";s:12:\"every_minute\";s:4:\"args\";a:1:{i:0;s:7:\"WP Cron\";}s:8:\"interval\";i:60;}}}i:1626736380;a:1:{s:25:\"ig_es_cron_auto_responder\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:19:\"ig_es_cron_interval\";s:4:\"args\";a:0:{}s:8:\"interval\";i:900;}}}i:1626736500;a:1:{s:17:\"ig_es_cron_worker\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:19:\"ig_es_cron_interval\";s:4:\"args\";a:0:{}s:8:\"interval\";i:900;}}}i:1626738900;a:1:{s:10:\"ig_es_cron\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1626738989;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1626760589;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1626774057;a:1:{s:21:\"ai1wm_storage_cleanup\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1626777063;a:1:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1626803787;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1626803796;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1626803797;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1626817694;a:2:{s:13:\"wpseo-reindex\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:31:\"wpseo_permalink_structure_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1627163294;a:1:{s:16:\"wpseo_ryte_fetch\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}i:1627235787;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(105, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_tag_cloud', 'a:2:{i:2;a:3:{s:5:\"title\";s:4:\"Tags\";s:5:\"count\";i:0;s:8:\"taxonomy\";s:8:\"post_tag\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'recovery_keys', 'a:0:{}', 'yes'),
(121, 'theme_mods_twentytwenty', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1611425269;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}}}}', 'yes'),
(131, 'finished_updating_comment_type', '1', 'yes'),
(132, 'ftp_credentials', 'a:3:{s:8:\"hostname\";s:9:\"localhost\";s:8:\"username\";s:5:\"ahmed\";s:15:\"connection_type\";s:3:\"ftp\";}', 'yes'),
(134, 'current_theme', 'SPE BLOG', 'yes'),
(135, 'theme_mods_spe', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:3:{s:6:\"menu-3\";i:2;s:6:\"menu-1\";i:11;s:6:\"menu-2\";i:12;}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(136, 'theme_switched', '', 'yes'),
(140, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:0:{}}', 'yes'),
(173, 'WPLANG', '', 'yes'),
(174, 'new_admin_email', 'aaaaa@sd.sd', 'yes'),
(199, 'auto_update_core_dev', 'enabled', 'yes'),
(200, 'auto_update_core_minor', 'enabled', 'yes'),
(201, 'auto_update_core_major', 'unset', 'yes'),
(202, 'db_upgraded', '', 'yes'),
(206, 'recently_activated', 'a:0:{}', 'yes'),
(216, 'active_plugins', 'a:2:{i:0;s:39:\"email-subscribers/email-subscribers.php\";i:1;s:24:\"wordpress-seo/wp-seo.php\";}', 'yes'),
(217, 'ai1wm_secret_key', 'zkokSbOccJ0S', 'yes'),
(218, 'ai1wm_backups_labels', 'a:0:{}', 'yes'),
(219, 'ai1wm_sites_links', 'a:0:{}', 'yes'),
(221, 'ai1wm_status', 'a:2:{s:4:\"type\";s:8:\"download\";s:7:\"message\";s:318:\"<a href=\"http://spesusc.com/SPE_Blog/wp-content/ai1wm-backups/spesusc.com-spe_blog-20210418-112328-l5jb70.wpress\" class=\"ai1wm-button-green ai1wm-emphasize ai1wm-button-download\" title=\"spesusc.com\" download=\"spesusc.com-spe_blog-20210418-112328-l5jb70.wpress\"><span>Download spesusc.com</span><em>Size: 21 MB</em></a>\";}', 'yes'),
(222, 'template', 'spe', 'yes'),
(223, 'stylesheet', 'spe', 'yes'),
(224, 'swift_performance_plugin_organizer', 'a:0:{}', 'yes'),
(225, 'jetpack_active_modules', 'a:0:{}', 'yes'),
(227, 'wp_page_for_privacy_policy', '0', 'yes'),
(234, 'ai1wm_updater', 'a:0:{}', 'yes'),
(238, 'can_compress_scripts', '0', 'no'),
(293, '_transient_health-check-site-status-result', '{\"good\":14,\"recommended\":6,\"critical\":0}', 'yes'),
(302, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:11:\"aaaaa@sd.sd\";s:7:\"version\";s:5:\"5.7.2\";s:9:\"timestamp\";i:1620934421;}', 'no'),
(391, 'category_children', 'a:0:{}', 'yes'),
(414, 'action_scheduler_hybrid_store_demarkation', '52', 'yes'),
(415, 'schema-ActionScheduler_StoreSchema', '3.0.1620510477', 'yes'),
(416, 'schema-ActionScheduler_LoggerSchema', '2.0.1620510477', 'yes'),
(419, 'ig_es_from_name', 'SPE Blog', 'no'),
(420, 'ig_es_from_email', 'aaaaa@sd.sd', 'no'),
(421, 'ig_es_admin_new_contact_email_subject', 'One more contact joins our tribe!', 'no'),
(422, 'ig_es_admin_new_contact_email_content', 'Hi,\r\n\r\nYour friendly Email Subscribers notification bot here!\r\n\r\n{{NAME}} ({{EMAIL}}) joined our tribe just now.\r\n\r\nWhich list/s? {{LIST}}\r\n\r\nIf you know this person, or if they are an influencer, you may want to reach out to them personally!\r\n\r\nLater...', 'no'),
(423, 'ig_es_admin_emails', 'aaaaa@sd.sd', 'no'),
(424, 'ig_es_confirmation_mail_subject', 'Thanks!', 'no'),
(425, 'ig_es_confirmation_mail_content', 'Hi {{NAME}},\r\n\r\nJust one more step before we share the awesomeness from {{SITENAME}}!\r\n\r\nPlease confirm your subscription by clicking on <a href=\'{{SUBSCRIBE-LINK}}\'>this link</a>\r\n\r\nThanks!', 'no'),
(426, 'ig_es_enable_welcome_email', 'yes', 'no'),
(427, 'ig_es_welcome_email_subject', 'Welcome to {{SITENAME}}', 'no'),
(428, 'ig_es_welcome_email_content', 'Hi {{NAME}},\r\n\r\nJust wanted to send you a quick note...\r\n\r\nThank you for joining the awesome {{SITENAME}} tribe.\r\n\r\nOnly valuable emails from me, promise!\r\n\r\nThanks!', 'no'),
(429, 'ig_es_enable_cron_admin_email', 'yes', 'no'),
(430, 'ig_es_cron_admin_email', 'Hi Admin,\r\n\r\nCron URL has been triggered successfully on {{DATE}} for the email \'{{SUBJECT}}\'. And it sent email to {{COUNT}} recipient(s).\r\n\r\nBest,\r\nSPE Blog', 'no'),
(431, 'ig_es_cronurl', 'http://spesusc.com/SPE_Blog/?es=cron&guid=jobvpk-ynjwxf-klucfp-yabnih-dueaki', 'no'),
(432, 'ig_es_hourly_email_send_limit', '300', 'no'),
(433, 'ig_es_sent_report_subject', 'Your email has been sent', 'no'),
(434, 'ig_es_sent_report_content', 'Hi Admin,\n\nEmail has been sent successfully to {{COUNT}} email(s). Please find the details below:\n\nUnique ID: {{UNIQUE}}\nStart Time: {{STARTTIME}}\nEnd Time: {{ENDTIME}}\nFor more information, login to your dashboard and go to Reports menu in Email Subscribers.\n\nThank You.', 'no'),
(435, 'ig_es_unsubscribe_link', 'http://spesusc.com/SPE_Blog/?es=unsubscribe&db={{DBID}}&email={{EMAIL}}&guid={{GUID}}', 'no'),
(436, 'ig_es_optin_link', 'http://spesusc.com/SPE_Blog/?es=optin&db={{DBID}}&email={{EMAIL}}&guid={{GUID}}', 'no'),
(437, 'ig_es_unsubscribe_link_content', 'I\'d be sad to see you go. But if you want to, you can unsubscribe from <a href=\'{{UNSUBSCRIBE-LINK}}\'>here</a>', 'no'),
(438, 'ig_es_email_type', 'wp_html_mail', 'no'),
(439, 'ig_es_notify_admin', 'yes', 'no'),
(440, 'ig_es_optin_type', 'double_opt_in', 'no'),
(441, 'ig_es_subscription_error_messsage', 'Hmm.. Something\'s amiss..\r\n\r\nCould not complete your request. That email address  is probably already subscribed. Or worse blocked!!\r\n\r\nPlease try again after some time - or contact us if the problem persists.\r\n\r\n', 'no'),
(442, 'ig_es_subscription_success_message', 'You have been successfully subscribed.', 'no'),
(443, 'ig_es_unsubscribe_error_message', 'Urrgh.. Something\'s wrong..\r\n\r\nAre you sure that email address is on our file? There was some problem in completing your request.\r\n\r\nPlease try again after some time - or contact us if the problem persists.\r\n\r\n', 'no'),
(444, 'ig_es_unsubscribe_success_message', '<p>You will no longer hear from us. ☹️ Sorry to see you go!</p>', 'no'),
(445, 'ig_es_post_image_size', 'thumbnail', 'no'),
(446, 'ig_es_db_version', '4.6.13', 'no'),
(448, 'ig_es_current_version_date_details', '', 'no'),
(449, 'ig_es_enable_captcha', '', 'no'),
(450, 'ig_es_roles_and_capabilities', '', 'no'),
(451, 'ig_es_sample_data_imported', 'no', 'no'),
(452, 'ig_es_default_subscriber_imported', 'no', 'no'),
(453, 'ig_es_set_widget', '', 'no'),
(454, 'ig_es_sync_wp_users', 'a:0:{}', 'no'),
(455, 'ig_es_blocked_domains', 'mail.ru', 'no'),
(456, 'ig_es_disable_wp_cron', 'no', 'no'),
(457, 'yoast_migrations_free', 'a:1:{s:7:\"version\";s:4:\"16.2\";}', 'yes'),
(458, 'ig_es_track_email_opens', 'yes', 'no'),
(459, 'ig_es_show_opt_in_consent', 'yes', 'no'),
(460, 'ig_es_opt_in_consent_text', '', 'no'),
(461, 'ig_es_installed_on', '2021-05-08 21:47:57', 'no'),
(462, 'ig_es_form_submission_success_message', 'Your subscription was successful! Kindly check your mailbox and confirm your subscription. If you don\'t see the email within a few minutes, check the spam/junk folder.', 'no'),
(463, 'ig_es_db_update_history', 'a:1:{s:6:\"4.6.13\";s:19:\"2021-05-08 21:47:57\";}', 'no'),
(464, 'ig_es_email_sent_data', 'a:1:{s:10:\"2021-05-09\";a:1:{s:2:\"08\";i:2;}}', 'no'),
(465, 'ig_es_mailer_settings', 'a:1:{s:6:\"mailer\";s:6:\"wpmail\";}', 'no'),
(466, 'ig_es_user_roles', 'a:6:{s:9:\"campaigns\";a:1:{s:13:\"administrator\";s:3:\"yes\";}s:7:\"reports\";a:1:{s:13:\"administrator\";s:3:\"yes\";}s:9:\"sequences\";a:1:{s:13:\"administrator\";s:3:\"yes\";}s:8:\"audience\";a:1:{s:13:\"administrator\";s:3:\"yes\";}s:5:\"forms\";a:1:{s:13:\"administrator\";s:3:\"yes\";}s:9:\"workflows\";a:1:{s:13:\"administrator\";s:3:\"yes\";}}', 'no'),
(467, 'ig_es_cron_interval', '900', 'no'),
(468, 'ig_es_max_email_send_at_once', '30', 'no'),
(469, 'ig_es_test_mailbox_user', '2d741_aaaaa_spesusc.com', 'no'),
(470, 'ig_es_templates_loaded_for', 'lite', 'yes'),
(472, 'action_scheduler_lock_async-request-runner', '1626618457', 'yes'),
(473, 'ig_es_admin_notices', 'a:0:{}', 'yes'),
(474, 'wpseo', 'a:44:{s:8:\"tracking\";b:0;s:22:\"license_server_version\";b:0;s:15:\"ms_defaults_set\";b:0;s:40:\"ignore_search_engines_discouraged_notice\";b:0;s:19:\"indexing_first_time\";b:1;s:16:\"indexing_started\";b:0;s:15:\"indexing_reason\";s:26:\"permalink_settings_changed\";s:29:\"indexables_indexing_completed\";b:1;s:7:\"version\";s:4:\"16.2\";s:16:\"previous_version\";s:0:\"\";s:20:\"disableadvanced_meta\";b:1;s:30:\"enable_headless_rest_endpoints\";b:1;s:17:\"ryte_indexability\";b:1;s:11:\"baiduverify\";s:0:\"\";s:12:\"googleverify\";s:0:\"\";s:8:\"msverify\";s:0:\"\";s:12:\"yandexverify\";s:0:\"\";s:9:\"site_type\";s:0:\"\";s:20:\"has_multiple_authors\";s:0:\"\";s:16:\"environment_type\";s:0:\"\";s:23:\"content_analysis_active\";b:1;s:23:\"keyword_analysis_active\";b:1;s:21:\"enable_admin_bar_menu\";b:1;s:26:\"enable_cornerstone_content\";b:1;s:18:\"enable_xml_sitemap\";b:1;s:24:\"enable_text_link_counter\";b:1;s:22:\"show_onboarding_notice\";b:1;s:18:\"first_activated_on\";i:1620510494;s:13:\"myyoast-oauth\";b:0;s:26:\"semrush_integration_active\";b:1;s:14:\"semrush_tokens\";a:0:{}s:20:\"semrush_country_code\";s:2:\"us\";s:19:\"permalink_structure\";s:23:\"/%category%/%postname%/\";s:8:\"home_url\";s:27:\"http://spesusc.com/SPE_Blog\";s:18:\"dynamic_permalinks\";b:0;s:17:\"category_base_url\";s:0:\"\";s:12:\"tag_base_url\";s:0:\"\";s:21:\"custom_taxonomy_slugs\";a:0:{}s:29:\"enable_enhanced_slack_sharing\";b:1;s:25:\"zapier_integration_active\";b:0;s:19:\"zapier_subscription\";a:0:{}s:14:\"zapier_api_key\";s:0:\"\";s:23:\"enable_metabox_insights\";b:1;s:23:\"enable_link_suggestions\";b:1;}', 'yes'),
(475, 'wpseo_titles', 'a:107:{s:17:\"forcerewritetitle\";b:0;s:9:\"separator\";s:7:\"sc-dash\";s:16:\"title-home-wpseo\";s:42:\"%%sitename%% %%page%% %%sep%% %%sitedesc%%\";s:18:\"title-author-wpseo\";s:41:\"%%name%%, Author at %%sitename%% %%page%%\";s:19:\"title-archive-wpseo\";s:38:\"%%date%% %%page%% %%sep%% %%sitename%%\";s:18:\"title-search-wpseo\";s:63:\"You searched for %%searchphrase%% %%page%% %%sep%% %%sitename%%\";s:15:\"title-404-wpseo\";s:35:\"Page not found %%sep%% %%sitename%%\";s:25:\"social-title-author-wpseo\";s:9:\"%%title%%\";s:26:\"social-title-archive-wpseo\";s:9:\"%%title%%\";s:31:\"social-description-author-wpseo\";s:11:\"%%excerpt%%\";s:32:\"social-description-archive-wpseo\";s:11:\"%%excerpt%%\";s:29:\"social-image-url-author-wpseo\";s:0:\"\";s:30:\"social-image-url-archive-wpseo\";s:0:\"\";s:28:\"social-image-id-author-wpseo\";s:0:\"\";s:29:\"social-image-id-archive-wpseo\";s:0:\"\";s:19:\"metadesc-home-wpseo\";s:0:\"\";s:21:\"metadesc-author-wpseo\";s:0:\"\";s:22:\"metadesc-archive-wpseo\";s:0:\"\";s:9:\"rssbefore\";s:0:\"\";s:8:\"rssafter\";s:53:\"The post %%POSTLINK%% appeared first on %%BLOGLINK%%.\";s:20:\"noindex-author-wpseo\";b:0;s:28:\"noindex-author-noposts-wpseo\";b:1;s:21:\"noindex-archive-wpseo\";b:1;s:14:\"disable-author\";b:0;s:12:\"disable-date\";b:0;s:19:\"disable-post_format\";b:0;s:18:\"disable-attachment\";b:1;s:23:\"is-media-purge-relevant\";b:0;s:20:\"breadcrumbs-404crumb\";s:25:\"Error 404: Page not found\";s:29:\"breadcrumbs-display-blog-page\";b:1;s:20:\"breadcrumbs-boldlast\";b:0;s:25:\"breadcrumbs-archiveprefix\";s:12:\"Archives for\";s:18:\"breadcrumbs-enable\";b:1;s:16:\"breadcrumbs-home\";s:4:\"Home\";s:18:\"breadcrumbs-prefix\";s:0:\"\";s:24:\"breadcrumbs-searchprefix\";s:16:\"You searched for\";s:15:\"breadcrumbs-sep\";s:7:\"&raquo;\";s:12:\"website_name\";s:0:\"\";s:11:\"person_name\";s:0:\"\";s:11:\"person_logo\";s:0:\"\";s:22:\"alternate_website_name\";s:0:\"\";s:12:\"company_logo\";s:0:\"\";s:12:\"company_name\";s:0:\"\";s:17:\"company_or_person\";s:7:\"company\";s:25:\"company_or_person_user_id\";b:0;s:17:\"stripcategorybase\";b:0;s:10:\"title-post\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:13:\"metadesc-post\";s:0:\"\";s:12:\"noindex-post\";b:0;s:23:\"display-metabox-pt-post\";b:1;s:23:\"post_types-post-maintax\";i:0;s:21:\"schema-page-type-post\";s:7:\"WebPage\";s:24:\"schema-article-type-post\";s:7:\"Article\";s:17:\"social-title-post\";s:9:\"%%title%%\";s:23:\"social-description-post\";s:11:\"%%excerpt%%\";s:21:\"social-image-url-post\";s:0:\"\";s:20:\"social-image-id-post\";s:0:\"\";s:10:\"title-page\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:13:\"metadesc-page\";s:0:\"\";s:12:\"noindex-page\";b:0;s:23:\"display-metabox-pt-page\";b:1;s:23:\"post_types-page-maintax\";i:0;s:21:\"schema-page-type-page\";s:7:\"WebPage\";s:24:\"schema-article-type-page\";s:4:\"None\";s:17:\"social-title-page\";s:9:\"%%title%%\";s:23:\"social-description-page\";s:11:\"%%excerpt%%\";s:21:\"social-image-url-page\";s:0:\"\";s:20:\"social-image-id-page\";s:0:\"\";s:16:\"title-attachment\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:19:\"metadesc-attachment\";s:0:\"\";s:18:\"noindex-attachment\";b:0;s:29:\"display-metabox-pt-attachment\";b:1;s:29:\"post_types-attachment-maintax\";i:0;s:27:\"schema-page-type-attachment\";s:7:\"WebPage\";s:30:\"schema-article-type-attachment\";s:4:\"None\";s:23:\"social-title-attachment\";s:9:\"%%title%%\";s:29:\"social-description-attachment\";s:11:\"%%excerpt%%\";s:27:\"social-image-url-attachment\";s:0:\"\";s:26:\"social-image-id-attachment\";s:0:\"\";s:18:\"title-tax-category\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:21:\"metadesc-tax-category\";s:0:\"\";s:28:\"display-metabox-tax-category\";b:1;s:20:\"noindex-tax-category\";b:0;s:25:\"social-title-tax-category\";s:9:\"%%title%%\";s:31:\"social-description-tax-category\";s:11:\"%%excerpt%%\";s:29:\"social-image-url-tax-category\";s:0:\"\";s:28:\"social-image-id-tax-category\";s:0:\"\";s:18:\"title-tax-post_tag\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:21:\"metadesc-tax-post_tag\";s:0:\"\";s:28:\"display-metabox-tax-post_tag\";b:1;s:20:\"noindex-tax-post_tag\";b:0;s:25:\"social-title-tax-post_tag\";s:9:\"%%title%%\";s:31:\"social-description-tax-post_tag\";s:11:\"%%excerpt%%\";s:29:\"social-image-url-tax-post_tag\";s:0:\"\";s:28:\"social-image-id-tax-post_tag\";s:0:\"\";s:21:\"title-tax-post_format\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:24:\"metadesc-tax-post_format\";s:0:\"\";s:31:\"display-metabox-tax-post_format\";b:1;s:23:\"noindex-tax-post_format\";b:1;s:28:\"social-title-tax-post_format\";s:9:\"%%title%%\";s:34:\"social-description-tax-post_format\";s:11:\"%%excerpt%%\";s:32:\"social-image-url-tax-post_format\";s:0:\"\";s:31:\"social-image-id-tax-post_format\";s:0:\"\";s:14:\"person_logo_id\";i:0;s:15:\"company_logo_id\";i:0;s:17:\"company_logo_meta\";b:0;s:16:\"person_logo_meta\";b:0;}', 'yes'),
(476, 'wpseo_social', 'a:18:{s:13:\"facebook_site\";s:0:\"\";s:13:\"instagram_url\";s:0:\"\";s:12:\"linkedin_url\";s:0:\"\";s:11:\"myspace_url\";s:0:\"\";s:16:\"og_default_image\";s:0:\"\";s:19:\"og_default_image_id\";s:0:\"\";s:18:\"og_frontpage_title\";s:0:\"\";s:17:\"og_frontpage_desc\";s:0:\"\";s:18:\"og_frontpage_image\";s:0:\"\";s:21:\"og_frontpage_image_id\";s:0:\"\";s:9:\"opengraph\";b:1;s:13:\"pinterest_url\";s:0:\"\";s:15:\"pinterestverify\";s:0:\"\";s:7:\"twitter\";b:1;s:12:\"twitter_site\";s:0:\"\";s:17:\"twitter_card_type\";s:19:\"summary_large_image\";s:11:\"youtube_url\";s:0:\"\";s:13:\"wikipedia_url\";s:0:\"\";}', 'yes'),
(490, 'wpseo_ryte', 'a:2:{s:6:\"status\";i:1;s:10:\"last_fetch\";i:1626618278;}', 'yes'),
(491, 'widget_email-subscribers-form', 'a:3:{i:2;a:2:{s:5:\"title\";s:10:\"Newsletter\";s:7:\"form_id\";s:1:\"1\";}i:3;a:2:{s:5:\"title\";s:10:\"Newsletter\";s:7:\"form_id\";s:1:\"1\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(497, 'ig_es_cron_last_hit', 'a:1:{s:9:\"timestamp\";i:1626735974;}', 'yes'),
(498, 'ig_es_coupons', 'a:1:{s:9:\"PREMIUM10\";a:2:{s:15:\"last_shown_time\";i:1620511149;s:5:\"count\";i:4;}}', 'yes'),
(500, 'action_scheduler_migration_status', 'complete', 'yes'),
(554, 'https_detection_errors', 'a:1:{s:23:\"ssl_verification_failed\";a:1:{i:0;s:24:\"SSL verification failed.\";}}', 'yes'),
(701, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.7.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.7.2-new-bundled.zip\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.7.2\";s:7:\"version\";s:5:\"5.7.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1626735987;s:15:\"version_checked\";s:5:\"5.7.2\";s:12:\"translations\";a:0:{}}', 'no'),
(1026, '_site_transient_timeout_browser_7f65ff317c237641f7aace3b7dac03d6', '1627223119', 'no'),
(1027, '_site_transient_browser_7f65ff317c237641f7aace3b7dac03d6', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"91.0.4472.124\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(1028, '_site_transient_timeout_php_check_d48825f8e9bd4d8f43457d50e9cb3d90', '1627223119', 'no'),
(1029, '_site_transient_php_check_d48825f8e9bd4d8f43457d50e9cb3d90', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:0;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(1031, 'rewrite_rules', 'a:117:{s:19:\"sitemap_index\\.xml$\";s:19:\"index.php?sitemap=1\";s:31:\"([^/]+?)-sitemap([0-9]+)?\\.xml$\";s:51:\"index.php?sitemap=$matches[1]&sitemap_n=$matches[2]\";s:24:\"([a-z]+)?-?sitemap\\.xsl$\";s:39:\"index.php?yoast-sitemap-xsl=$matches[1]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:39:\"es_template/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:49:\"es_template/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:69:\"es_template/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:64:\"es_template/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:64:\"es_template/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:45:\"es_template/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:28:\"es_template/([^/]+)/embed/?$\";s:44:\"index.php?es_template=$matches[1]&embed=true\";s:32:\"es_template/([^/]+)/trackback/?$\";s:38:\"index.php?es_template=$matches[1]&tb=1\";s:40:\"es_template/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?es_template=$matches[1]&paged=$matches[2]\";s:47:\"es_template/([^/]+)/comment-page-([0-9]{1,})/?$\";s:51:\"index.php?es_template=$matches[1]&cpage=$matches[2]\";s:36:\"es_template/([^/]+)(?:/([0-9]+))?/?$\";s:50:\"index.php?es_template=$matches[1]&page=$matches[2]\";s:28:\"es_template/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:38:\"es_template/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:58:\"es_template/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:53:\"es_template/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:53:\"es_template/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:34:\"es_template/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:31:\".+?/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:41:\".+?/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:61:\".+?/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:56:\".+?/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:56:\".+?/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:37:\".+?/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:22:\"(.+?)/([^/]+)/embed/?$\";s:63:\"index.php?category_name=$matches[1]&name=$matches[2]&embed=true\";s:26:\"(.+?)/([^/]+)/trackback/?$\";s:57:\"index.php?category_name=$matches[1]&name=$matches[2]&tb=1\";s:46:\"(.+?)/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&feed=$matches[3]\";s:41:\"(.+?)/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&feed=$matches[3]\";s:34:\"(.+?)/([^/]+)/page/?([0-9]{1,})/?$\";s:70:\"index.php?category_name=$matches[1]&name=$matches[2]&paged=$matches[3]\";s:41:\"(.+?)/([^/]+)/comment-page-([0-9]{1,})/?$\";s:70:\"index.php?category_name=$matches[1]&name=$matches[2]&cpage=$matches[3]\";s:30:\"(.+?)/([^/]+)(?:/([0-9]+))?/?$\";s:69:\"index.php?category_name=$matches[1]&name=$matches[2]&page=$matches[3]\";s:20:\".+?/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:30:\".+?/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:50:\".+?/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:45:\".+?/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:45:\".+?/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:26:\".+?/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:38:\"(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:33:\"(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:14:\"(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:26:\"(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:33:\"(.+?)/comment-page-([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&cpage=$matches[2]\";s:8:\"(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";}', 'yes'),
(1058, '_site_transient_timeout_theme_roots', '1626737776', 'no'),
(1059, '_site_transient_theme_roots', 'a:5:{s:3:\"spe\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";}', 'no'),
(1061, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1626735987;s:7:\"checked\";a:5:{s:3:\"spe\";s:5:\"1.0.1\";s:14:\"twentynineteen\";s:3:\"1.7\";s:15:\"twentyseventeen\";s:3:\"2.4\";s:12:\"twentytwenty\";s:3:\"1.5\";s:15:\"twentytwentyone\";s:3:\"1.1\";}s:8:\"response\";a:4:{s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"2.0\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.2.0.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentyseventeen\";a:6:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"2.7\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.2.7.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.7\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.7.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.3\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.3.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'no');
INSERT INTO `blog_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1062, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1626735987;s:7:\"checked\";a:4:{s:19:\"akismet/akismet.php\";s:5:\"4.1.9\";s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";s:4:\"7.42\";s:39:\"email-subscribers/email-subscribers.php\";s:5:\"4.7.1\";s:24:\"wordpress-seo/wp-seo.php\";s:4:\"16.2\";}s:8:\"response\";a:4:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":13:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:6:\"4.1.10\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:57:\"https://downloads.wordpress.org/plugin/akismet.4.1.10.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";s:6:\"tested\";s:3:\"5.8\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";O:8:\"stdClass\":13:{s:2:\"id\";s:37:\"w.org/plugins/all-in-one-wp-migration\";s:4:\"slug\";s:23:\"all-in-one-wp-migration\";s:6:\"plugin\";s:51:\"all-in-one-wp-migration/all-in-one-wp-migration.php\";s:11:\"new_version\";s:4:\"7.45\";s:3:\"url\";s:54:\"https://wordpress.org/plugins/all-in-one-wp-migration/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/all-in-one-wp-migration.7.45.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:76:\"https://ps.w.org/all-in-one-wp-migration/assets/icon-256x256.png?rev=2458334\";s:2:\"1x\";s:76:\"https://ps.w.org/all-in-one-wp-migration/assets/icon-128x128.png?rev=2458334\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:79:\"https://ps.w.org/all-in-one-wp-migration/assets/banner-1544x500.jpg?rev=2538919\";s:2:\"1x\";s:78:\"https://ps.w.org/all-in-one-wp-migration/assets/banner-772x250.png?rev=2538919\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"3.3\";s:6:\"tested\";s:3:\"5.8\";s:12:\"requires_php\";s:6:\"5.2.17\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:39:\"email-subscribers/email-subscribers.php\";O:8:\"stdClass\":14:{s:2:\"id\";s:31:\"w.org/plugins/email-subscribers\";s:4:\"slug\";s:17:\"email-subscribers\";s:6:\"plugin\";s:39:\"email-subscribers/email-subscribers.php\";s:11:\"new_version\";s:5:\"4.7.6\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/email-subscribers/\";s:7:\"package\";s:66:\"https://downloads.wordpress.org/plugin/email-subscribers.4.7.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/email-subscribers/assets/icon-256x256.png?rev=2274172\";s:2:\"1x\";s:70:\"https://ps.w.org/email-subscribers/assets/icon-128x128.png?rev=2274172\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/email-subscribers/assets/banner-1544x500.png?rev=2304804\";s:2:\"1x\";s:72:\"https://ps.w.org/email-subscribers/assets/banner-772x250.png?rev=2304804\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"3.9\";s:6:\"tested\";s:5:\"5.7.2\";s:12:\"requires_php\";s:3:\"5.6\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}s:14:\"upgrade_notice\";s:381:\"<ul>\n<li>New: Bulk resend confirmation emails <strong>[PRO]</strong></li>\n<li>New: Run Workflows on existing orders <strong>[PRO]</strong></li>\n<li>New: Search contacts by email on the Reports page <strong>[PRO]</strong></li>\n<li>Fix: Incorrect form action URL when the subscription form is shown on the blog page</li>\n<li>Fix: &#039;es_subbox&#039; function not working</li>\n</ul>\";}s:24:\"wordpress-seo/wp-seo.php\";O:8:\"stdClass\":13:{s:2:\"id\";s:27:\"w.org/plugins/wordpress-seo\";s:4:\"slug\";s:13:\"wordpress-seo\";s:6:\"plugin\";s:24:\"wordpress-seo/wp-seo.php\";s:11:\"new_version\";s:4:\"16.7\";s:3:\"url\";s:44:\"https://wordpress.org/plugins/wordpress-seo/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/wordpress-seo.16.7.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:66:\"https://ps.w.org/wordpress-seo/assets/icon-256x256.png?rev=2363699\";s:2:\"1x\";s:58:\"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=2363699\";s:3:\"svg\";s:58:\"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=2363699\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/wordpress-seo/assets/banner-1544x500.png?rev=1843435\";s:2:\"1x\";s:68:\"https://ps.w.org/wordpress-seo/assets/banner-772x250.png?rev=1843435\";}s:11:\"banners_rtl\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/wordpress-seo/assets/banner-1544x500-rtl.png?rev=1843435\";s:2:\"1x\";s:72:\"https://ps.w.org/wordpress-seo/assets/banner-772x250-rtl.png?rev=1843435\";}s:8:\"requires\";s:3:\"5.6\";s:6:\"tested\";s:3:\"5.8\";s:12:\"requires_php\";s:6:\"5.6.20\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:0:{}}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `blog_postmeta`
--

CREATE TABLE `blog_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_postmeta`
--

INSERT INTO `blog_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 6, '_menu_item_type', 'custom'),
(4, 6, '_menu_item_menu_item_parent', '0'),
(5, 6, '_menu_item_object_id', '6'),
(6, 6, '_menu_item_object', 'custom'),
(7, 6, '_menu_item_target', ''),
(8, 6, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(9, 6, '_menu_item_xfn', ''),
(10, 6, '_menu_item_url', 'http://spesusc.com/SPE_Blog'),
(19, 8, '_menu_item_type', 'taxonomy'),
(20, 8, '_menu_item_menu_item_parent', '0'),
(21, 8, '_menu_item_object_id', '1'),
(22, 8, '_menu_item_object', 'category'),
(23, 8, '_menu_item_target', ''),
(24, 8, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(25, 8, '_menu_item_xfn', ''),
(26, 8, '_menu_item_url', ''),
(57, 17, '_edit_lock', '1620543746:1'),
(64, 17, '_thumbnail_id', '26'),
(65, 17, 'likes', '8'),
(74, 26, '_wp_attached_file', '2021/02/Train-Rig.jpg'),
(75, 26, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1079;s:4:\"file\";s:21:\"2021/02/Train-Rig.jpg\";s:5:\"sizes\";a:9:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"Train-Rig-600x337.jpg\";s:5:\"width\";i:600;s:6:\"height\";i:337;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:22:\"Train-Rig-1024x575.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:575;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"Train-Rig-300x169.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:21:\"Train-Rig-768x432.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:22:\"Train-Rig-1536x863.jpg\";s:5:\"width\";i:1536;s:6:\"height\";i:863;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"vertical\";a:4:{s:4:\"file\";s:21:\"Train-Rig-428x553.jpg\";s:5:\"width\";i:428;s:6:\"height\";i:553;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"small\";a:4:{s:4:\"file\";s:21:\"Train-Rig-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"layout-2\";a:4:{s:4:\"file\";s:21:\"Train-Rig-430x260.jpg\";s:5:\"width\";i:430;s:6:\"height\";i:260;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:21:\"Train-Rig-360x225.jpg\";s:5:\"width\";i:360;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(81, 29, '_edit_lock', '1620543782:1'),
(82, 30, '_edit_lock', '1620543768:1'),
(83, 31, '_edit_lock', '1620543572:1'),
(84, 32, '_wp_attached_file', '2021/05/about.jpg'),
(85, 32, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:885;s:6:\"height\";i:555;s:4:\"file\";s:17:\"2021/05/about.jpg\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:17:\"about-600x376.jpg\";s:5:\"width\";i:600;s:6:\"height\";i:376;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:17:\"about-300x188.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:188;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:17:\"about-768x482.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:482;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"vertical\";a:4:{s:4:\"file\";s:17:\"about-428x553.jpg\";s:5:\"width\";i:428;s:6:\"height\";i:553;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"small\";a:4:{s:4:\"file\";s:17:\"about-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"layout-2\";a:4:{s:4:\"file\";s:17:\"about-430x260.jpg\";s:5:\"width\";i:430;s:6:\"height\";i:260;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:17:\"about-360x225.jpg\";s:5:\"width\";i:360;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(88, 31, '_thumbnail_id', '32'),
(89, 34, '_wp_attached_file', '2021/05/Xtreme_Drilling720x400-2.jpg'),
(90, 34, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:720;s:6:\"height\";i:400;s:4:\"file\";s:36:\"2021/05/Xtreme_Drilling720x400-2.jpg\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-600x333.jpg\";s:5:\"width\";i:600;s:6:\"height\";i:333;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-300x167.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:167;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"vertical\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-428x400.jpg\";s:5:\"width\";i:428;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"small\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"layout-2\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-430x260.jpg\";s:5:\"width\";i:430;s:6:\"height\";i:260;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:36:\"Xtreme_Drilling720x400-2-360x225.jpg\";s:5:\"width\";i:360;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(93, 30, '_thumbnail_id', '34'),
(94, 36, '_wp_attached_file', '2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg'),
(95, 36, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1500;s:6:\"height\";i:1000;s:4:\"file\";s:66:\"2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg\";s:5:\"sizes\";a:8:{s:6:\"medium\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-600x400.jpg\";s:5:\"width\";i:600;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:67:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"vertical\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-428x553.jpg\";s:5:\"width\";i:428;s:6:\"height\";i:553;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"small\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:8:\"layout-2\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-430x260.jpg\";s:5:\"width\";i:430;s:6:\"height\";i:260;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:66:\"GettyImages-955491344-275eaadb6d82496fb6c44276a4579419-360x225.jpg\";s:5:\"width\";i:360;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(98, 29, '_thumbnail_id', '36'),
(99, 38, '_menu_item_type', 'taxonomy'),
(100, 38, '_menu_item_menu_item_parent', '0'),
(101, 38, '_menu_item_object_id', '1'),
(102, 38, '_menu_item_object', 'category'),
(103, 38, '_menu_item_target', ''),
(104, 38, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(105, 38, '_menu_item_xfn', ''),
(106, 38, '_menu_item_url', ''),
(108, 39, '_menu_item_type', 'taxonomy'),
(109, 39, '_menu_item_menu_item_parent', '0'),
(110, 39, '_menu_item_object_id', '3'),
(111, 39, '_menu_item_object', 'category'),
(112, 39, '_menu_item_target', ''),
(113, 39, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(114, 39, '_menu_item_xfn', ''),
(115, 39, '_menu_item_url', ''),
(117, 40, '_menu_item_type', 'taxonomy'),
(118, 40, '_menu_item_menu_item_parent', '0'),
(119, 40, '_menu_item_object_id', '4'),
(120, 40, '_menu_item_object', 'category'),
(121, 40, '_menu_item_target', ''),
(122, 40, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(123, 40, '_menu_item_xfn', ''),
(124, 40, '_menu_item_url', ''),
(126, 41, '_menu_item_type', 'taxonomy'),
(127, 41, '_menu_item_menu_item_parent', '0'),
(128, 41, '_menu_item_object_id', '5'),
(129, 41, '_menu_item_object', 'category'),
(130, 41, '_menu_item_target', ''),
(131, 41, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(132, 41, '_menu_item_xfn', ''),
(133, 41, '_menu_item_url', ''),
(135, 42, '_menu_item_type', 'taxonomy'),
(136, 42, '_menu_item_menu_item_parent', '0'),
(137, 42, '_menu_item_object_id', '6'),
(138, 42, '_menu_item_object', 'category'),
(139, 42, '_menu_item_target', ''),
(140, 42, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(141, 42, '_menu_item_xfn', ''),
(142, 42, '_menu_item_url', ''),
(144, 43, '_menu_item_type', 'taxonomy'),
(145, 43, '_menu_item_menu_item_parent', '0'),
(146, 43, '_menu_item_object_id', '1'),
(147, 43, '_menu_item_object', 'category'),
(148, 43, '_menu_item_target', ''),
(149, 43, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(150, 43, '_menu_item_xfn', ''),
(151, 43, '_menu_item_url', ''),
(152, 43, '_menu_item_orphaned', '1620509263'),
(153, 44, '_menu_item_type', 'taxonomy'),
(154, 44, '_menu_item_menu_item_parent', '0'),
(155, 44, '_menu_item_object_id', '3'),
(156, 44, '_menu_item_object', 'category'),
(157, 44, '_menu_item_target', ''),
(158, 44, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(159, 44, '_menu_item_xfn', ''),
(160, 44, '_menu_item_url', ''),
(161, 44, '_menu_item_orphaned', '1620509263'),
(162, 45, '_menu_item_type', 'taxonomy'),
(163, 45, '_menu_item_menu_item_parent', '0'),
(164, 45, '_menu_item_object_id', '1'),
(165, 46, '_menu_item_type', 'taxonomy'),
(166, 45, '_menu_item_object', 'category'),
(167, 45, '_menu_item_target', ''),
(168, 46, '_menu_item_menu_item_parent', '0'),
(169, 45, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(170, 46, '_menu_item_object_id', '4'),
(171, 45, '_menu_item_xfn', ''),
(172, 46, '_menu_item_object', 'category'),
(173, 45, '_menu_item_url', ''),
(175, 46, '_menu_item_target', ''),
(176, 46, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(177, 46, '_menu_item_xfn', ''),
(178, 46, '_menu_item_url', ''),
(179, 47, '_menu_item_type', 'taxonomy'),
(180, 46, '_menu_item_orphaned', '1620509263'),
(181, 47, '_menu_item_menu_item_parent', '0'),
(182, 47, '_menu_item_object_id', '3'),
(183, 47, '_menu_item_object', 'category'),
(184, 47, '_menu_item_target', ''),
(185, 47, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(186, 47, '_menu_item_xfn', ''),
(187, 47, '_menu_item_url', ''),
(189, 48, '_menu_item_type', 'taxonomy'),
(190, 48, '_menu_item_menu_item_parent', '0'),
(191, 48, '_menu_item_object_id', '4'),
(192, 48, '_menu_item_object', 'category'),
(193, 48, '_menu_item_target', ''),
(194, 48, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(195, 48, '_menu_item_xfn', ''),
(196, 48, '_menu_item_url', ''),
(198, 49, '_menu_item_type', 'taxonomy'),
(199, 49, '_menu_item_menu_item_parent', '0'),
(200, 49, '_menu_item_object_id', '5'),
(201, 49, '_menu_item_object', 'category'),
(202, 49, '_menu_item_target', ''),
(203, 49, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(204, 49, '_menu_item_xfn', ''),
(205, 49, '_menu_item_url', ''),
(207, 50, '_menu_item_type', 'taxonomy'),
(208, 50, '_menu_item_menu_item_parent', '0'),
(209, 50, '_menu_item_object_id', '6'),
(210, 50, '_menu_item_object', 'category'),
(211, 50, '_menu_item_target', ''),
(212, 50, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(213, 50, '_menu_item_xfn', ''),
(214, 50, '_menu_item_url', ''),
(216, 51, '_menu_item_type', 'custom'),
(217, 51, '_menu_item_menu_item_parent', '0'),
(218, 51, '_menu_item_object_id', '51'),
(219, 51, '_menu_item_object', 'custom'),
(220, 51, '_menu_item_target', ''),
(221, 51, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(222, 51, '_menu_item_xfn', ''),
(223, 51, '_menu_item_url', 'http://spesusc.com/'),
(225, 31, 'likes', '3'),
(226, 29, 'likes', '1'),
(227, 17, '_edit_last', '1'),
(230, 30, '_edit_last', '1'),
(233, 29, '_edit_last', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(2, 1, '2021-01-23 17:56:26', '2021-01-23 17:56:26', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://spesusc.com/SPE_Blog/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2021-01-23 17:56:26', '2021-01-23 17:56:26', '', 0, 'http://spesusc.com/SPE_Blog/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-01-23 17:56:26', '2021-01-23 17:56:26', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://spesusc.com/SPE_Blog.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2021-01-23 17:56:26', '2021-01-23 17:56:26', '', 0, 'http://spesusc.com/SPE_Blog/?page_id=3', 0, 'page', '', 0),
(6, 1, '2021-01-23 18:08:45', '2021-01-23 18:08:45', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/index.php/2021/01/23/home/', 1, 'nav_menu_item', '', 0),
(8, 1, '2021-01-23 18:08:46', '2021-01-23 18:08:46', ' ', '', '', 'publish', 'closed', 'closed', '', '8', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/index.php/2021/01/23/8/', 2, 'nav_menu_item', '', 0),
(17, 1, '2021-02-15 09:38:50', '2021-02-15 09:38:50', '<!-- wp:paragraph -->\n<p>Drill Stem Test (DST) of Exploration WellsAfter discovering a potential structure in a new prospect exploration area, the first exploration wells are drilled. During drilling, the show of gas and oil (SG&amp;O) may be discovered by gas logging or logging while drilling. At this moment, it is not certain whether the SG&amp;O really means that those hydrocarbon zones are the zones with commercial oil/gas flow.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Drill Stem Test (DST)', '', 'publish', 'open', 'open', '', 'drill-stem-test-dst', '', '', '2021-05-09 07:02:26', '2021-05-09 07:02:26', '', 0, 'http://spesusc.com/SPE_Blog/?p=17', 0, 'post', '', 0),
(20, 1, '2021-02-15 09:38:50', '2021-02-15 09:38:50', '<!-- wp:paragraph -->\n<p>Drill Stem Test (DST) of Exploration WellsAfter discovering a potential structure in a new prospect exploration area, the first exploration wells are drilled. During drilling, the show of gas and oil (SG&amp;O) may be discovered by gas logging or logging while drilling. At this moment, it is not certain whether the SG&amp;O really means that those hydrocarbon zones are the zones with commercial oil/gas flow. In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Drill Stem Test (DST)', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2021-02-15 09:38:50', '2021-02-15 09:38:50', '', 17, 'http://spesusc.com/SPE_Blog/uncategorized/17-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2021-05-08 21:16:44', '2021-05-08 21:16:44', '', 'Train Rig', '', 'inherit', 'open', 'closed', '', 'train-rig', '', '', '2021-05-08 21:16:44', '2021-05-08 21:16:44', '', 17, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', 0, 'attachment', 'image/jpeg', 0),
(27, 1, '2021-05-08 21:17:19', '2021-05-08 21:17:19', '<!-- wp:paragraph -->\n<p>Drill Stem Test (DST) of Exploration WellsAfter discovering a potential structure in a new prospect exploration area, the first exploration wells are drilled. During drilling, the show of gas and oil (SG&amp;O) may be discovered by gas logging or logging while drilling. At this moment, it is not certain whether the SG&amp;O really means that those hydrocarbon zones are the zones with commercial oil/gas flow.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Drill Stem Test (DST)', '', 'inherit', 'closed', 'closed', '', '17-autosave-v1', '', '', '2021-05-08 21:17:19', '2021-05-08 21:17:19', '', 17, 'http://spesusc.com/SPE_Blog/marketing/17-autosave-v1/', 0, 'revision', '', 0),
(28, 1, '2021-05-08 21:17:27', '2021-05-08 21:17:27', '<!-- wp:paragraph -->\n<p>Drill Stem Test (DST) of Exploration WellsAfter discovering a potential structure in a new prospect exploration area, the first exploration wells are drilled. During drilling, the show of gas and oil (SG&amp;O) may be discovered by gas logging or logging while drilling. At this moment, it is not certain whether the SG&amp;O really means that those hydrocarbon zones are the zones with commercial oil/gas flow.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Drill Stem Test (DST)', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2021-05-08 21:17:27', '2021-05-08 21:17:27', '', 17, 'http://spesusc.com/SPE_Blog/marketing/17-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2021-05-08 21:24:05', '2021-05-08 21:24:05', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Exploration Well', '', 'publish', 'open', 'open', '', 'exploration-well', '', '', '2021-05-09 07:03:01', '2021-05-09 07:03:01', '', 0, 'http://spesusc.com/SPE_Blog/?p=29', 0, 'post', '', 0),
(30, 1, '2021-05-08 21:22:52', '2021-05-08 21:22:52', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Skin Factor', '', 'publish', 'open', 'open', '', 'skin-factor', '', '', '2021-05-09 07:02:47', '2021-05-09 07:02:47', '', 0, 'http://spesusc.com/SPE_Blog/?p=30', 0, 'post', '', 0),
(31, 1, '2021-05-08 21:21:33', '2021-05-08 21:21:33', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Productivity', '', 'publish', 'open', 'open', '', 'productivity', '', '', '2021-05-08 21:21:33', '2021-05-08 21:21:33', '', 0, 'http://spesusc.com/SPE_Blog/?p=31', 0, 'post', '', 0),
(32, 1, '2021-05-08 21:20:38', '2021-05-08 21:20:38', '', 'about', '', 'inherit', 'open', 'closed', '', 'about', '', '', '2021-05-08 21:20:38', '2021-05-08 21:20:38', '', 31, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', 0, 'attachment', 'image/jpeg', 0),
(33, 1, '2021-05-08 21:21:33', '2021-05-08 21:21:33', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Productivity', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2021-05-08 21:21:33', '2021-05-08 21:21:33', '', 31, 'http://spesusc.com/SPE_Blog/marketing/31-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2021-05-08 21:22:17', '2021-05-08 21:22:17', '', 'Xtreme_Drilling720x400-2', '', 'inherit', 'open', 'closed', '', 'xtreme_drilling720x400-2', '', '', '2021-05-08 21:22:17', '2021-05-08 21:22:17', '', 30, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', 0, 'attachment', 'image/jpeg', 0),
(35, 1, '2021-05-08 21:22:52', '2021-05-08 21:22:52', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Skin Factor', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2021-05-08 21:22:52', '2021-05-08 21:22:52', '', 30, 'http://spesusc.com/SPE_Blog/marketing/30-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2021-05-08 21:23:56', '2021-05-08 21:23:56', '', 'GettyImages-955491344-275eaadb6d82496fb6c44276a4579419', '', 'inherit', 'open', 'closed', '', 'gettyimages-955491344-275eaadb6d82496fb6c44276a4579419', '', '', '2021-05-08 21:23:56', '2021-05-08 21:23:56', '', 29, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', 0, 'attachment', 'image/jpeg', 0),
(37, 1, '2021-05-08 21:24:05', '2021-05-08 21:24:05', '<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In order to be certain, a drill stem test needs to be run. If the zones have quite high productivity during the DST, a further test for measuring their pressures and flow rates and a transient test for estimating their permeability and skin factor should be done.High gas productivity of an exploration well foretells the birth of a new gas field, and data of flow rate and pressure acquired in a DST are the direct evidence of the birth.</p>\n<!-- /wp:paragraph -->', 'Exploration Well', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2021-05-08 21:24:05', '2021-05-08 21:24:05', '', 29, 'http://spesusc.com/SPE_Blog/marketing/29-revision-v1/', 0, 'revision', '', 0),
(38, 1, '2021-05-08 21:26:59', '2021-05-08 21:26:59', ' ', '', '', 'publish', 'closed', 'closed', '', '38', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/?p=38', 3, 'nav_menu_item', '', 0),
(39, 1, '2021-05-08 21:26:59', '2021-05-08 21:26:59', ' ', '', '', 'publish', 'closed', 'closed', '', '39', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/?p=39', 4, 'nav_menu_item', '', 0),
(40, 1, '2021-05-08 21:26:59', '2021-05-08 21:26:59', ' ', '', '', 'publish', 'closed', 'closed', '', '40', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/?p=40', 5, 'nav_menu_item', '', 0),
(41, 1, '2021-05-08 21:26:59', '2021-05-08 21:26:59', ' ', '', '', 'publish', 'closed', 'closed', '', '41', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/?p=41', 6, 'nav_menu_item', '', 0),
(42, 1, '2021-05-08 21:26:59', '2021-05-08 21:26:59', ' ', '', '', 'publish', 'closed', 'closed', '', '42', '', '', '2021-05-08 21:26:59', '2021-05-08 21:26:59', '', 0, 'http://spesusc.com/SPE_Blog/?p=42', 7, 'nav_menu_item', '', 0),
(43, 1, '2021-05-08 21:27:43', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-05-08 21:27:43', '0000-00-00 00:00:00', '', 0, 'http://spesusc.com/SPE_Blog/?p=43', 1, 'nav_menu_item', '', 0),
(44, 1, '2021-05-08 21:27:43', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-05-08 21:27:43', '0000-00-00 00:00:00', '', 0, 'http://spesusc.com/SPE_Blog/?p=44', 1, 'nav_menu_item', '', 0),
(45, 1, '2021-05-08 21:28:04', '2021-05-08 21:28:04', ' ', '', '', 'publish', 'closed', 'closed', '', '45', '', '', '2021-05-08 21:28:04', '2021-05-08 21:28:04', '', 0, 'http://spesusc.com/SPE_Blog/?p=45', 1, 'nav_menu_item', '', 0),
(46, 1, '2021-05-08 21:27:43', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2021-05-08 21:27:43', '0000-00-00 00:00:00', '', 0, 'http://spesusc.com/SPE_Blog/?p=46', 1, 'nav_menu_item', '', 0),
(47, 1, '2021-05-08 21:28:04', '2021-05-08 21:28:04', ' ', '', '', 'publish', 'closed', 'closed', '', '47', '', '', '2021-05-08 21:28:04', '2021-05-08 21:28:04', '', 0, 'http://spesusc.com/SPE_Blog/?p=47', 2, 'nav_menu_item', '', 0),
(48, 1, '2021-05-08 21:28:04', '2021-05-08 21:28:04', ' ', '', '', 'publish', 'closed', 'closed', '', '48', '', '', '2021-05-08 21:28:04', '2021-05-08 21:28:04', '', 0, 'http://spesusc.com/SPE_Blog/?p=48', 3, 'nav_menu_item', '', 0),
(49, 1, '2021-05-08 21:29:23', '2021-05-08 21:29:23', ' ', '', '', 'publish', 'closed', 'closed', '', '49', '', '', '2021-05-08 21:29:23', '2021-05-08 21:29:23', '', 0, 'http://spesusc.com/SPE_Blog/?p=49', 2, 'nav_menu_item', '', 0),
(50, 1, '2021-05-08 21:29:24', '2021-05-08 21:29:24', ' ', '', '', 'publish', 'closed', 'closed', '', '50', '', '', '2021-05-08 21:29:24', '2021-05-08 21:29:24', '', 0, 'http://spesusc.com/SPE_Blog/?p=50', 3, 'nav_menu_item', '', 0),
(51, 1, '2021-05-08 21:29:22', '2021-05-08 21:29:22', '', 'SPE Suez', '', 'publish', 'closed', 'closed', '', 'spe-suez', '', '', '2021-05-08 21:29:22', '2021-05-08 21:29:22', '', 0, 'http://spesusc.com/SPE_Blog/?p=51', 1, 'nav_menu_item', '', 0),
(52, 1, '2021-07-18 14:25:20', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-07-18 14:25:20', '0000-00-00 00:00:00', '', 0, 'http://spesusc.com/SPE_Blog/?p=52', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_termmeta`
--

CREATE TABLE `blog_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_terms`
--

CREATE TABLE `blog_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_terms`
--

INSERT INTO `blog_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Marketing', 'marketing', 0),
(2, 'nav', 'nav', 0),
(3, 'Technical', 'technical', 0),
(4, 'Soft Skills', 'soft-skills', 0),
(5, 'Scientific articles', 'scientific-articles', 0),
(6, 'Technology', 'technology', 0),
(7, 'Oil', 'oil', 0),
(8, 'Gas', 'gas', 0),
(9, 'Petroleum', 'petroleum', 0),
(10, 'Industry', 'industry', 0),
(11, 'Navbar Left', 'navbar-left', 0),
(12, 'Navbar Right', 'navbar-right', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_term_relationships`
--

CREATE TABLE `blog_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_term_relationships`
--

INSERT INTO `blog_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(6, 2, 0),
(8, 2, 0),
(17, 1, 0),
(17, 3, 0),
(17, 4, 0),
(17, 5, 0),
(17, 6, 0),
(17, 8, 0),
(17, 9, 0),
(29, 1, 0),
(29, 3, 0),
(29, 4, 0),
(29, 5, 0),
(29, 6, 0),
(29, 8, 0),
(29, 9, 0),
(30, 1, 0),
(30, 3, 0),
(30, 4, 0),
(30, 5, 0),
(30, 6, 0),
(30, 8, 0),
(30, 9, 0),
(31, 1, 0),
(31, 3, 0),
(31, 4, 0),
(31, 5, 0),
(31, 6, 0),
(31, 7, 0),
(31, 8, 0),
(31, 9, 0),
(31, 10, 0),
(38, 2, 0),
(39, 2, 0),
(40, 2, 0),
(41, 2, 0),
(42, 2, 0),
(45, 11, 0),
(47, 11, 0),
(48, 11, 0),
(49, 12, 0),
(50, 12, 0),
(51, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_term_taxonomy`
--

CREATE TABLE `blog_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_term_taxonomy`
--

INSERT INTO `blog_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 4),
(2, 2, 'nav_menu', '', 0, 7),
(3, 3, 'category', '', 0, 4),
(4, 4, 'category', '', 0, 4),
(5, 5, 'category', '', 0, 4),
(6, 6, 'category', '', 0, 4),
(7, 7, 'post_tag', '', 0, 1),
(8, 8, 'post_tag', '', 0, 4),
(9, 9, 'post_tag', '', 0, 4),
(10, 10, 'post_tag', '', 0, 1),
(11, 11, 'nav_menu', '', 0, 3),
(12, 12, 'nav_menu', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_usermeta`
--

CREATE TABLE `blog_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_usermeta`
--

INSERT INTO `blog_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'spe'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'blog_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'blog_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'blog_dashboard_quick_press_last_post_id', '52'),
(19, 1, 'session_tokens', 'a:1:{s:64:\"4fda61e12c79224830cad6b2221e81b204f4186311cb6aceeaaa701cacdd982f\";a:4:{s:10:\"expiration\";i:1626791118;s:2:\"ip\";s:13:\"41.44.102.168\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36\";s:5:\"login\";i:1626618318;}}'),
(20, 1, 'closedpostboxes_dashboard', 'a:6:{i:0;s:21:\"dashboard_site_health\";i:1;s:19:\"dashboard_right_now\";i:2;s:18:\"dashboard_activity\";i:3;s:24:\"wpseo-dashboard-overview\";i:4;s:21:\"dashboard_quick_press\";i:5;s:17:\"dashboard_primary\";}'),
(21, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(22, 1, 'blog_user-settings', 'libraryContent=browse&widgets_access=off'),
(23, 1, 'blog_user-settings-time', '1620512874'),
(24, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:11:\"41.44.102.0\";}'),
(25, 1, '_new_email', 'a:2:{s:4:\"hash\";s:32:\"84eb2d75a395fd9912ed812b0ef631b4\";s:8:\"newemail\";s:29:\"it.segment.spe.suez@gmail.com\";}'),
(26, 1, 'nav_menu_recently_edited', '11'),
(27, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(28, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(29, 1, 'blog_yoast_notifications', 'a:1:{i:0;a:2:{s:7:\"message\";s:355:\"<p>You can speed up your site and get insight into your internal linking structure by letting us perform a few optimizations to the way SEO data is stored. </p><p>We estimate this will take less than a minute.</p><a class=\"button\" href=\"http://spesusc.com/SPE_Blog/wp-admin/admin.php?page=wpseo_tools&start-indexation=true\">Start SEO data optimization</a>\";s:7:\"options\";a:10:{s:4:\"type\";s:7:\"warning\";s:2:\"id\";s:13:\"wpseo-reindex\";s:4:\"user\";O:7:\"WP_User\":8:{s:4:\"data\";O:8:\"stdClass\":10:{s:2:\"ID\";s:1:\"1\";s:10:\"user_login\";s:3:\"spe\";s:9:\"user_pass\";s:34:\"$P$B6B1gGULjtlNe1BIKBQGMdSVbPklpb.\";s:13:\"user_nicename\";s:3:\"spe\";s:10:\"user_email\";s:11:\"aaaaa@sd.sd\";s:8:\"user_url\";s:27:\"http://spesusc.com/SPE_Blog\";s:15:\"user_registered\";s:19:\"2021-01-23 17:56:25\";s:19:\"user_activation_key\";s:0:\"\";s:11:\"user_status\";s:1:\"0\";s:12:\"display_name\";s:3:\"spe\";}s:2:\"ID\";i:1;s:4:\"caps\";a:1:{s:13:\"administrator\";b:1;}s:7:\"cap_key\";s:17:\"blog_capabilities\";s:5:\"roles\";a:1:{i:0;s:13:\"administrator\";}s:7:\"allcaps\";a:63:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:20:\"wpseo_manage_options\";b:1;s:13:\"administrator\";b:1;}s:6:\"filter\";N;s:16:\"\0WP_User\0site_id\";i:1;}s:5:\"nonce\";N;s:8:\"priority\";d:0.8;s:9:\"data_json\";a:0:{}s:13:\"dismissal_key\";N;s:12:\"capabilities\";s:20:\"wpseo_manage_options\";s:16:\"capability_check\";s:3:\"all\";s:14:\"yoast_branding\";b:0;}}}'),
(30, 1, 'wpseo-dismiss-configuration-notice', 'yes'),
(31, 1, '_yoast_wpseo_profile_updated', '1620544057');

-- --------------------------------------------------------

--
-- Table structure for table `blog_users`
--

CREATE TABLE `blog_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_users`
--

INSERT INTO `blog_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'spe', '$P$B6B1gGULjtlNe1BIKBQGMdSVbPklpb.', 'spe', 'aaaaa@sd.sd', 'http://spesusc.com/SPE_Blog', '2021-01-23 17:56:25', '', 0, 'spe');

-- --------------------------------------------------------

--
-- Table structure for table `blog_yoast_indexable`
--

CREATE TABLE `blog_yoast_indexable` (
  `id` int(11) UNSIGNED NOT NULL,
  `permalink` longtext COLLATE utf8mb4_unicode_520_ci,
  `permalink_hash` varchar(40) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_type` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `object_sub_type` varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `author_id` bigint(20) DEFAULT NULL,
  `post_parent` bigint(20) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci,
  `description` mediumtext COLLATE utf8mb4_unicode_520_ci,
  `breadcrumb_title` text COLLATE utf8mb4_unicode_520_ci,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `is_protected` tinyint(1) DEFAULT '0',
  `has_public_posts` tinyint(1) DEFAULT NULL,
  `number_of_pages` int(11) UNSIGNED DEFAULT NULL,
  `canonical` longtext COLLATE utf8mb4_unicode_520_ci,
  `primary_focus_keyword` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `primary_focus_keyword_score` int(3) DEFAULT NULL,
  `readability_score` int(3) DEFAULT NULL,
  `is_cornerstone` tinyint(1) DEFAULT '0',
  `is_robots_noindex` tinyint(1) DEFAULT '0',
  `is_robots_nofollow` tinyint(1) DEFAULT '0',
  `is_robots_noarchive` tinyint(1) DEFAULT '0',
  `is_robots_noimageindex` tinyint(1) DEFAULT '0',
  `is_robots_nosnippet` tinyint(1) DEFAULT '0',
  `twitter_title` text COLLATE utf8mb4_unicode_520_ci,
  `twitter_image` longtext COLLATE utf8mb4_unicode_520_ci,
  `twitter_description` longtext COLLATE utf8mb4_unicode_520_ci,
  `twitter_image_id` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `twitter_image_source` text COLLATE utf8mb4_unicode_520_ci,
  `open_graph_title` text COLLATE utf8mb4_unicode_520_ci,
  `open_graph_description` longtext COLLATE utf8mb4_unicode_520_ci,
  `open_graph_image` longtext COLLATE utf8mb4_unicode_520_ci,
  `open_graph_image_id` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `open_graph_image_source` text COLLATE utf8mb4_unicode_520_ci,
  `open_graph_image_meta` mediumtext COLLATE utf8mb4_unicode_520_ci,
  `link_count` int(11) DEFAULT NULL,
  `incoming_link_count` int(11) DEFAULT NULL,
  `prominent_words_version` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_id` bigint(20) NOT NULL DEFAULT '1',
  `language` varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `region` varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schema_page_type` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schema_article_type` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `has_ancestors` tinyint(1) DEFAULT '0',
  `estimated_reading_time_minutes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_yoast_indexable`
--

INSERT INTO `blog_yoast_indexable` (`id`, `permalink`, `permalink_hash`, `object_id`, `object_type`, `object_sub_type`, `author_id`, `post_parent`, `title`, `description`, `breadcrumb_title`, `post_status`, `is_public`, `is_protected`, `has_public_posts`, `number_of_pages`, `canonical`, `primary_focus_keyword`, `primary_focus_keyword_score`, `readability_score`, `is_cornerstone`, `is_robots_noindex`, `is_robots_nofollow`, `is_robots_noarchive`, `is_robots_noimageindex`, `is_robots_nosnippet`, `twitter_title`, `twitter_image`, `twitter_description`, `twitter_image_id`, `twitter_image_source`, `open_graph_title`, `open_graph_description`, `open_graph_image`, `open_graph_image_id`, `open_graph_image_source`, `open_graph_image_meta`, `link_count`, `incoming_link_count`, `prominent_words_version`, `created_at`, `updated_at`, `blog_id`, `language`, `region`, `schema_page_type`, `schema_article_type`, `has_ancestors`, `estimated_reading_time_minutes`) VALUES
(1, 'http://spesusc.com/SPE_Blog/', '28:30894330ee8449079a280a0650fb5318', NULL, 'home-page', NULL, NULL, NULL, '%%sitename%% %%page%% %%sep%% %%sitedesc%%', 'SPE Suez  Blog', 'Home', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2021-05-08 21:48:18', '2021-05-09 01:48:18', 1, NULL, NULL, NULL, NULL, 0, NULL),
(2, NULL, NULL, NULL, 'system-page', '404', NULL, NULL, 'Page not found %%sep%% %%sitename%%', NULL, 'Error 404: Page not found', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 22:02:38', '2021-05-09 02:02:38', 1, NULL, NULL, NULL, NULL, 0, NULL),
(3, 'http://spesusc.com/SPE_Blog/author/spe/', '39:f9aea24e8bb9e68721ffd27a65f49c9f', 1, 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 'https://0.gravatar.com/avatar/cdcfbe7f38ebe044e9de9feac70db61e?s=500&d=mm&r=g', NULL, NULL, 'gravatar-image', NULL, NULL, 'https://0.gravatar.com/avatar/cdcfbe7f38ebe044e9de9feac70db61e?s=500&d=mm&r=g', NULL, 'gravatar-image', NULL, NULL, NULL, NULL, '2021-05-08 22:06:50', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(4, 'http://spesusc.com/SPE_Blog/marketing/exploration-well/', '55:bcfb3521d6cf2dd090ee060789754735', 29, 'post', 'post', 1, 0, NULL, NULL, 'Exploration Well', 'publish', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', NULL, '36', 'featured-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', '36', 'featured-image', '{\"width\":1500,\"height\":1000,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg\",\"size\":\"full\",\"id\":36,\"alt\":\"\",\"pixels\":1500000,\"type\":\"image/jpeg\"}', 0, NULL, NULL, '2021-05-08 22:06:50', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(5, 'http://spesusc.com/SPE_Blog/category/technology/', '48:22f6d3ce0b227d686361a96e3fc7e3f8', 6, 'term', 'category', NULL, NULL, NULL, NULL, 'Technology', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-09 06:45:24', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(6, 'http://spesusc.com/SPE_Blog/category/marketing/', '47:182e156edaabea76278422a1a8e82de9', 1, 'term', 'category', NULL, NULL, NULL, NULL, 'Marketing', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-09 06:51:49', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(7, 'http://spesusc.com/SPE_Blog/tag/petroleum/', '42:da28e1af7be320e70d6ddafae55f89cc', 9, 'term', 'post_tag', NULL, NULL, NULL, NULL, 'Petroleum', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-09 06:53:19', '2021-07-18 18:25:39', 1, NULL, NULL, NULL, NULL, 0, NULL),
(8, 'http://spesusc.com/SPE_Blog/category/technical/', '47:094d85bba4c9297d06d1916f46447bd9', 3, 'term', 'category', NULL, NULL, NULL, NULL, 'Technical', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-09 06:59:54', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(9, 'http://spesusc.com/SPE_Blog/marketing/productivity/', '51:3bc486c7cabcc91dcd32230ea32d0cb5', 31, 'post', 'post', 1, 0, NULL, NULL, 'Productivity', 'publish', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', NULL, '32', 'featured-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', '32', 'featured-image', '{\"width\":885,\"height\":555,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/about.jpg\",\"size\":\"full\",\"id\":32,\"alt\":\"\",\"pixels\":491175,\"type\":\"image/jpeg\"}', 0, NULL, NULL, '2021-05-09 07:00:53', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(10, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', '64:0fe2bb44857c3749cbd0e24aa11da38a', 32, 'post', 'attachment', 1, 31, NULL, NULL, 'about', 'inherit', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', NULL, '32', 'attachment-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg', '32', 'attachment-image', '{\"width\":885,\"height\":555,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/about.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/about.jpg\",\"size\":\"full\",\"id\":32,\"alt\":\"\",\"pixels\":491175,\"type\":\"image/jpeg\"}', NULL, NULL, NULL, '2021-05-09 07:01:22', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 1, NULL),
(11, 'http://spesusc.com/SPE_Blog/marketing/skin-factor/', '50:10da9e31dda52c888470f8294b1ef961', 30, 'post', 'post', 1, 0, NULL, NULL, 'Skin Factor', 'publish', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', NULL, '34', 'featured-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', '34', 'featured-image', '{\"width\":720,\"height\":400,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg\",\"size\":\"full\",\"id\":34,\"alt\":\"\",\"pixels\":288000,\"type\":\"image/jpeg\"}', 0, NULL, NULL, '2021-05-09 07:01:58', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(12, 'http://spesusc.com/SPE_Blog/marketing/drill-stem-test-dst/', '58:dd74875df00493b192933c6423968b30', 17, 'post', 'post', 1, 0, NULL, NULL, 'Drill Stem Test (DST)', 'publish', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', NULL, '26', 'featured-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', '26', 'featured-image', '{\"width\":1920,\"height\":1079,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg\",\"size\":\"full\",\"id\":26,\"alt\":\"\",\"pixels\":2071680,\"type\":\"image/jpeg\"}', 0, NULL, NULL, '2021-05-09 07:01:59', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(13, 'http://spesusc.com/SPE_Blog/tag/gas/', '36:0c39bba5c326c1805d662f560d148c76', 8, 'term', 'post_tag', NULL, NULL, NULL, NULL, 'Gas', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-09 07:05:56', '2021-07-18 18:25:39', 1, NULL, NULL, NULL, NULL, 0, NULL),
(14, 'http://spesusc.com/SPE_Blog/category/soft-skills/', '49:aafc4e31e31fd7722fefe2458801e358', 4, 'term', 'category', NULL, NULL, NULL, NULL, 'Soft Skills', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-05-13 21:15:15', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(15, 'http://spesusc.com/SPE_Blog/?p=52', '33:a4580ea2a1de38f4b45236adfea3b384', 52, 'post', 'post', 1, 0, NULL, NULL, 'Auto Draft', 'auto-draft', 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(16, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', '68:295e26bedf6085eb973efd0744ac8e41', 26, 'post', 'attachment', 1, 17, NULL, NULL, 'Train Rig', 'inherit', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', NULL, '26', 'attachment-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg', '26', 'attachment-image', '{\"width\":1920,\"height\":1079,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/02/Train-Rig.jpg\",\"size\":\"full\",\"id\":26,\"alt\":\"\",\"pixels\":2071680,\"type\":\"image/jpeg\"}', NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(17, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', '83:4ef944e54a318f76c59882ac0936eb72', 34, 'post', 'attachment', 1, 30, NULL, NULL, 'Xtreme_Drilling720x400-2', 'inherit', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', NULL, '34', 'attachment-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg', '34', 'attachment-image', '{\"width\":720,\"height\":400,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/Xtreme_Drilling720x400-2.jpg\",\"size\":\"full\",\"id\":34,\"alt\":\"\",\"pixels\":288000,\"type\":\"image/jpeg\"}', NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(18, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', '113:33abfbf902e9eb422844a769e2d1a3a8', 36, 'post', 'attachment', 1, 29, NULL, NULL, 'GettyImages-955491344-275eaadb6d82496fb6c44276a4579419', 'inherit', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', NULL, '36', 'attachment-image', NULL, NULL, 'http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg', '36', 'attachment-image', '{\"width\":1500,\"height\":1000,\"url\":\"http://spesusc.com/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg\",\"path\":\"/home/spes93175151/public_html/SPE_Blog/wp-content/uploads/2021/05/GettyImages-955491344-275eaadb6d82496fb6c44276a4579419.jpg\",\"size\":\"full\",\"id\":36,\"alt\":\"\",\"pixels\":1500000,\"type\":\"image/jpeg\"}', NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(19, 'http://spesusc.com/SPE_Blog/?page_id=3', '38:403ecfae3a520a4d96db72ee94779537', 3, 'post', 'page', 1, 0, NULL, NULL, 'Privacy Policy', 'draft', 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(20, 'http://spesusc.com/SPE_Blog/sample-page/', '40:3a968755e2f2dc2736777bc8bdc9caa0', 2, 'post', 'page', 1, 0, NULL, NULL, 'Sample Page', 'publish', NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:21', 1, NULL, NULL, NULL, NULL, 0, NULL),
(21, 'http://spesusc.com/SPE_Blog/category/scientific-articles/', '57:5e8bb26916d390cacb124c24aebdd0a3', 5, 'term', 'category', NULL, NULL, NULL, NULL, 'Scientific articles', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:23', 1, NULL, NULL, NULL, NULL, 0, NULL),
(22, 'http://spesusc.com/SPE_Blog/tag/oil/', '36:0323a291554cd865d97bb557fdc85a57', 7, 'term', 'post_tag', NULL, NULL, NULL, NULL, 'Oil', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:39', 1, NULL, NULL, NULL, NULL, 0, NULL),
(23, 'http://spesusc.com/SPE_Blog/tag/industry/', '41:99cb710740a0e2b3327a88c4434ee2eb', 10, 'term', 'post_tag', NULL, NULL, NULL, NULL, 'Industry', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:39', 1, NULL, NULL, NULL, NULL, 0, NULL),
(24, NULL, NULL, NULL, 'system-page', 'search-result', NULL, NULL, 'You searched for %%searchphrase%% %%page%% %%sep%% %%sitename%%', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL),
(25, NULL, NULL, NULL, 'date-archive', NULL, NULL, NULL, '%%date%% %%page%% %%sep%% %%sitename%%', '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-18 14:25:20', '2021-07-18 18:25:20', 1, NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_yoast_indexable_hierarchy`
--

CREATE TABLE `blog_yoast_indexable_hierarchy` (
  `indexable_id` int(11) UNSIGNED NOT NULL,
  `ancestor_id` int(11) UNSIGNED NOT NULL,
  `depth` int(11) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_yoast_indexable_hierarchy`
--

INSERT INTO `blog_yoast_indexable_hierarchy` (`indexable_id`, `ancestor_id`, `depth`, `blog_id`) VALUES
(1, 0, 0, 1),
(3, 0, 0, 1),
(4, 0, 0, 1),
(5, 0, 0, 1),
(6, 0, 0, 1),
(7, 0, 0, 1),
(8, 0, 0, 1),
(9, 0, 0, 1),
(10, 9, 1, 1),
(11, 0, 0, 1),
(12, 0, 0, 1),
(13, 0, 0, 1),
(14, 0, 0, 1),
(15, 0, 0, 1),
(16, 12, 1, 1),
(17, 11, 1, 1),
(18, 4, 1, 1),
(19, 0, 0, 1),
(20, 0, 0, 1),
(21, 0, 0, 1),
(22, 0, 0, 1),
(23, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_yoast_migrations`
--

CREATE TABLE `blog_yoast_migrations` (
  `id` int(11) UNSIGNED NOT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_yoast_migrations`
--

INSERT INTO `blog_yoast_migrations` (`id`, `version`) VALUES
(1, '20171228151840'),
(2, '20171228151841'),
(3, '20190529075038'),
(4, '20191011111109'),
(5, '20200408101900'),
(6, '20200420073606'),
(7, '20200428123747'),
(8, '20200428194858'),
(9, '20200429105310'),
(10, '20200430075614'),
(11, '20200430150130'),
(12, '20200507054848'),
(13, '20200513133401'),
(14, '20200609154515'),
(15, '20200616130143'),
(16, '20200617122511'),
(17, '20200702141921'),
(18, '20200728095334'),
(19, '20201202144329'),
(20, '20201216124002'),
(21, '20201216141134');

-- --------------------------------------------------------

--
-- Table structure for table `blog_yoast_primary_term`
--

CREATE TABLE `blog_yoast_primary_term` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `term_id` bigint(20) DEFAULT NULL,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_id` bigint(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_yoast_seo_links`
--

CREATE TABLE `blog_yoast_seo_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `target_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `indexable_id` int(11) UNSIGNED DEFAULT NULL,
  `target_indexable_id` int(11) UNSIGNED DEFAULT NULL,
  `height` int(11) UNSIGNED DEFAULT NULL,
  `width` int(11) UNSIGNED DEFAULT NULL,
  `size` int(11) UNSIGNED DEFAULT NULL,
  `language` varchar(32) DEFAULT NULL,
  `region` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_yoast_seo_links`
--

INSERT INTO `blog_yoast_seo_links` (`id`, `url`, `post_id`, `target_post_id`, `type`, `indexable_id`, `target_indexable_id`, `height`, `width`, `size`, `language`, `region`) VALUES
(1, 'http://spesusc.com/SPE_Blog/wp-admin/', 2, NULL, 'internal', 20, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(34, 'Ahmed Himdan', 'ahmedhimdan828@gmail.com', '01023708808', 'HELLO', '2021-04-15 15:21:24'),
(35, 'Joesph Feest', 'elisaann30@bellsouth.net', '11361981065', 'Future', '2021-04-15 15:21:24'),
(36, 'Miss Abbie Blanda', 'marie.gueho@yahoo.com', '16661554753', 'Internal', '2021-04-15 15:21:24'),
(37, 'Alexandrine Klocko', 'barbosaphil@aol.com', '18594562562', 'Plastic', '2021-04-15 15:21:24'),
(38, 'Davin Cummings II', 'sierramlloyd@gmail.com', '10717489633', 'District', '2021-04-15 15:21:24'),
(39, 'Sofiane', 'Sofiane.yalaoui@hotmail.fr', '', 'Please I would like to attend the course planned for the second of February for well completion', '2021-04-15 15:21:24'),
(40, 'Sofiane', 'Sofiane.yalaoui@hotmail.fr', '0668424249', 'I would like to attend the course planned for the third of February, Well completion ', '2021-04-15 15:21:24'),
(41, 'Ms. Felicity Corwin', 'venuslovestar702@gmail.com', '10063963414', 'Borders', '2021-04-15 15:21:24'),
(42, 'Abdiel Klein', 'robertgardipee6415@hotmail.com', '15465459770', 'Georgia', '2021-04-15 15:21:24'),
(43, 'Zora Stokes', 'houman.jafari@vecimaging.com', '18616418621', 'navigate', '2021-04-15 15:21:24'),
(44, 'Carleton Harber', 'ephilbrick93@gmail.com', '17626950705', 'Brand', '2021-04-15 15:21:24'),
(45, 'Theodora Ebert Jr.', 'wendyrushton@praconsulting.com.au', '10872601169', 'parsing', '2021-04-15 15:21:24'),
(46, 'Reggie Nolan PhD', 'escadoo@gmail.com', '12345475280', 'Bedfordshire', '2021-04-15 15:21:24'),
(47, 'Arvel Willms V', 'arie.van.der.torn@politie.nl', '13066336394', 'Marshall Islands', '2021-04-15 15:21:24'),
(48, 'Sheridan Dach', 'mztee1946@gmail.com', '17841582058', 'synergize', '2021-04-15 15:21:24'),
(49, 'Amely Bins I', 'jolenecrump@sasktel.net', '14742942991', 'Portugal', '2021-04-15 15:21:24'),
(50, 'Beverly Schoen', 'rvanessa1987@yahoo.com', '12530396615', 'Orchestrator', '2021-04-15 15:21:24'),
(51, 'Vivien Howe', 'johnfenton21@outlook.com', '17843862668', 'clicks-and-mortar', '2021-04-15 15:21:24'),
(52, 'Hudson Brown', '3604837232@tmomail.net', '10015784889', 'Jamaica', '2021-04-15 15:21:24'),
(58, 'Ed Shields', 'ahanrahan28@yahoo.com', '15664730782', 'SCSI', '2021-05-10 01:03:10'),
(59, '', '', '', '', '2021-05-27 10:54:25'),
(60, '', '', '', '', '2021-05-27 10:57:27'),
(61, '', '', '', '', '2021-05-27 11:45:59'),
(62, '', '', '', '', '2021-05-27 11:49:39'),
(63, '', '', '', '', '2021-06-27 21:44:08'),
(64, '', '', '', '', '2021-06-27 21:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `election_poll`
--

CREATE TABLE `election_poll` (
  `poll_id` int(11) NOT NULL,
  `options` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `election_poll`
--

INSERT INTO `election_poll` (`poll_id`, `options`, `user_id`) VALUES
(7, 'No', 172362),
(8, 'Yes', 139296),
(9, 'Yes', 159690),
(10, 'Yes', 128010),
(11, 'Yes', 155928),
(12, 'Yes', 129990),
(13, 'Yes', 158106),
(14, 'Yes', 124842),
(15, 'Yes', 131376),
(16, 'Yes', 172560),
(17, 'Yes', 166224),
(18, 'Yes', 163848),
(19, 'Yes', 164244),
(20, 'Yes', 163650),
(21, 'Yes', 136920),
(22, 'Yes', 163452),
(23, 'Yes', 154344),
(24, 'Yes', 124050),
(25, 'Yes', 165432),
(26, 'Yes', 144048),
(27, 'Yes', 154146),
(28, 'Yes', 163254),
(29, 'Yes', 152364),
(30, 'Yes', 139890),
(31, 'Yes', 132168),
(32, 'Yes', 143652),
(33, 'Yes', 149988),
(34, 'Yes', 152958),
(35, 'Yes', 132564),
(36, 'Yes', 152364),
(37, 'Yes', 140484),
(38, 'Yes', 149592),
(39, 'Yes', 125436),
(40, 'Yes', 125238),
(41, 'No', 162858),
(42, 'Yes', 133752),
(43, 'Yes', 131772),
(44, 'Yes', 163056),
(45, 'Yes', 135930),
(46, 'No', 157116),
(47, 'Yes', 166026),
(48, 'Yes', 154542),
(49, 'Yes', 125040),
(50, 'Yes', 141870),
(51, 'Yes', 165630),
(52, 'Yes', 145632),
(53, 'Yes', 129198),
(54, 'Yes', 148602),
(55, 'Yes', 156918),
(56, 'Yes', 150780),
(57, 'Yes', 131574),
(58, 'Yes', 134148),
(59, 'No', 126822),
(60, 'Yes', 126624),
(61, 'Yes', 127416),
(62, 'Yes', 127020),
(63, 'No', 166422),
(64, 'Yes', 159492),
(65, 'Yes', 123456),
(66, 'Yes', 136722),
(67, 'Yes', 147414),
(68, 'Yes', 138900),
(69, 'Yes', 159294),
(70, 'Yes', 147810),
(71, 'Yes', 146622),
(72, 'Yes', 157710),
(73, 'Yes', 153156),
(74, 'Yes', 151374),
(75, 'Yes', 145434),
(76, 'Yes', 131970),
(77, 'Yes', 139692),
(78, 'Yes', 170976),
(79, 'Yes', 144246),
(80, 'Yes', 150582);

-- --------------------------------------------------------

--
-- Table structure for table `election_users`
--

CREATE TABLE `election_users` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `election_users`
--

INSERT INTO `election_users` (`id`) VALUES
(123456),
(123654),
(123852),
(124050),
(124248),
(124446),
(124644),
(124842),
(125040),
(125238),
(125436),
(125634),
(125832),
(126030),
(126228),
(126426),
(126624),
(126822),
(127020),
(127218),
(127416),
(127614),
(127812),
(128010),
(128208),
(128406),
(128604),
(128802),
(129000),
(129198),
(129396),
(129594),
(129792),
(129990),
(130188),
(130386),
(130584),
(130782),
(130980),
(131178),
(131376),
(131574),
(131772),
(131970),
(132168),
(132366),
(132564),
(132762),
(132960),
(133158),
(133356),
(133554),
(133752),
(133950),
(134148),
(134346),
(134544),
(134742),
(134940),
(135138),
(135336),
(135534),
(135732),
(135930),
(136128),
(136326),
(136524),
(136722),
(136920),
(137118),
(137316),
(137514),
(137712),
(137910),
(138108),
(138306),
(138504),
(138702),
(138900),
(139098),
(139296),
(139494),
(139692),
(139890),
(140088),
(140286),
(140484),
(140682),
(140880),
(141078),
(141276),
(141474),
(141672),
(141870),
(142068),
(142266),
(142464),
(142662),
(142860),
(143058),
(143256),
(143454),
(143652),
(143850),
(144048),
(144246),
(144444),
(144642),
(144840),
(145038),
(145236),
(145434),
(145632),
(145830),
(146028),
(146226),
(146424),
(146622),
(146820),
(147018),
(147216),
(147414),
(147612),
(147810),
(148008),
(148206),
(148404),
(148602),
(148800),
(148998),
(149196),
(149394),
(149592),
(149790),
(149988),
(150186),
(150384),
(150582),
(150780),
(150978),
(151176),
(151374),
(151572),
(151770),
(151968),
(152166),
(152364),
(152562),
(152760),
(152958),
(153156),
(153354),
(153552),
(153750),
(153948),
(154146),
(154344),
(154542),
(154740),
(154938),
(155136),
(155334),
(155532),
(155730),
(155928),
(156126),
(156324),
(156522),
(156720),
(156918),
(157116),
(157314),
(157512),
(157710),
(157908),
(158106),
(158304),
(158502),
(158700),
(158898),
(159096),
(159294),
(159492),
(159690),
(159888),
(160086),
(160284),
(160482),
(160680),
(160878),
(161076),
(161274),
(161472),
(161670),
(161868),
(162066),
(162264),
(162462),
(162660),
(162858),
(163056),
(163254),
(163452),
(163650),
(163848),
(164046),
(164244),
(164442),
(164640),
(164838),
(165036),
(165234),
(165432),
(165630),
(165828),
(166026),
(166224),
(166422),
(166620),
(166818),
(167016),
(167214),
(167412),
(167610),
(167808),
(168006),
(168204),
(168402),
(168600),
(168798),
(168996),
(169194),
(169392),
(169590),
(169788),
(169986),
(170184),
(170382),
(170580),
(170778),
(170976),
(171174),
(171372),
(171570),
(171768),
(171966),
(172164),
(172362),
(172560);

-- --------------------------------------------------------

--
-- Table structure for table `recruit_applicants`
--

CREATE TABLE `recruit_applicants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `uniemail` varchar(255) NOT NULL,
  `face` varchar(255) NOT NULL,
  `q0` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `emailed` text NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruit_applicants`
--

INSERT INTO `recruit_applicants` (`id`, `name`, `university`, `faculty`, `department`, `level`, `mobile`, `gmail`, `uniemail`, `face`, `q0`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `status`, `date`, `emailed`, `comment`) VALUES
(9, 'Mohamed Ahmed Helmy Omara ', 'American university ', 'Petroleum Engineering ', 'Drilling ', 'First year ', '01018785379', 'mohamedhelmi550@icloud.com', '', 'https://www.facebook.com/profile.php?id=100042229762544', 'media', '', 'No', '1', 'M', 'No', 'G', 'G', 'G', 'Rejected', '2021-04-18 20:03:55', 'Email sent', NULL),
(11, 'Hagar Medhat Ramadan Mahmoud', 'ISA', 'Petroleum Engineering', 'Student', 'First', '01120987843', 'hagarmedhat142@gmail.com', '', 'https://www.facebook.com/profile.php?id=100010826110127', 'Social', '', 'I think i can make progress on it', '.', 'Mohamed Ahmed Helmi', 'no', '.', 'yes', '', 'Accepted', '2021-04-18 20:12:17', '', NULL),
(13, 'Salem omar salem ', 'Suez university ', 'Petroleum and mining engineering ', 'Petroleum engineering ', '1', '01025450958', 'salemomar523@gmail.com', '', 'https://www.facebook.com/salem.omar.165685', 'Academy', '', 'I want to have more knowledge about my field ', 'It is interesting in technical part', 'Me', 'Yes', 'I need to have more skills ', 'Yes,I\'m sure ', 'Good luck ', 'Accepted', '2021-04-18 20:38:50', '', NULL),
(15, 'عبدالرحمن حسين عبدالسيد محمد ', 'جامعة السويس', 'هندسة ', 'ميكانيكا ', 'اولي', '01098228483', '‪‪‪abdelrhmanh180@gmail.com‬‬‬', '', 'https://www.facebook.com/abdo.sehs.7', 'OC', '', 'Because I so considering to devolp my leadership skill', 'Organizing committe is the back bone in any chapter or organization, it must to be so active to make sure to success of the orgnization', 'Mohamed Ayman & Afnan ', 'No', 'I think student activities are important like SPE, and I want to learn more skill to be useful in any voluantaring work ', 'I hope so ', '', 'Accepted', '2021-04-19 11:16:39', '', NULL),
(18, 'Rewan Mohamed mohamed Nour-Elden ', 'Suez ', 'Arts', 'English', '2020', '01097069762', 'rm856698@gmail.com', '', 'https://www.facebook.com/profile.php?id=100017761123136', 'HRM', '', 'Because I want to learn more about it ', 'Self confidence\r\ntime management', 'Sondos Mohamed ', 'Yes, Resala charity organization ', 'Because I want to learn more things ', 'Yes', '', 'Accepted', '2021-04-19 17:45:09', '', NULL),
(19, ' ايمان ابراهيم امين علي فرنيسه', 'الشروق', 'اعلام', 'اذاعه وتليفزيون', 'لسه طالبه', '01207050821', 'مش عملاه', '', 'https://www.facebook.com/profile.php?id=100053744046995', 'HRM', '', 'عشان هي اقرب حاجه ل اذاعه وتليفزيون', 'اعطاء دورات تدريبيه للاشخاص. وتظبيط بريزنتيشن', 'اسراء عبدو', 'لا معنديش', 'عشان اطور من نفسي واحسن مستوايا', 'ايوه اكيد', '', 'Rejected', '2021-04-19 20:45:49', '', NULL),
(20, 'fatma Ahmed Fawzy ', 'Suez University ', 'كليه التعليم والتكنولوجيا ', 'آلات كهربيه ', '2', '01276841137', 'fahmd9251@gmail.com', 'Fatma.AFKh@ind.suezuni.edu.eg', 'https://www.facebook.com/profile.php?id=100018115266092', 'Offline', '1', 'لانى اهتم بتنمية هذا المجال ', 'يقومون بتنمية مجال التسويق والوجود فى بيع تذاكر الدعوات ', ' بسمله وائل \nقسم : off line marketing', 'لا', 'لانه افضل شابتر بالجامعة وأريد الاستفاده من خبرته', 'بالطبع حيث انه ينمي معرفتي', 'بسمله وائل قسم آلاوف لاين ماركتينج', 'Accepted', '2021-04-19 21:48:45', '', ''),
(21, 'Ahmed elsayed', 'Suez', 'Petroleum engineering', 'Petroleum engineering', 'Third', '01126379508', 'ae504547@gmail.com', '', 'https://m.facebook.com/ahmed.abdelgwad.7399?ref=bookmarks', 'media', '', 'I wnat to learn graphic design and the related things', '- the designs that is made for any social post \r\n-posts on the social media and related thinds', 'I was here before', 'I was in spe last seminar in HRD commeti but i had to leave for some reasons ', 'From what i saw .. ot is the best student chapter', 'Yes', '', 'Accepted', '2021-04-19 22:09:01', '', NULL),
(22, 'احمد علي مصطفي الشيخ', 'Suez', 'Petroleum and mining engineering', 'Refining', '1', '01018159650', 'ahmedaliiieei@gmail.com', '', 'https://www.facebook.com/profile.php?id=100009410177708', 'Social', '', 'I love writing posts and desining', 'Writing posts to invite people to our events or to tell them about our acrivites', 'A friend in the chapter', 'ساهمت في تنظيم مسابقة شطرنج مع اتحاد الطلبة ', 'To be responsible ', 'If i didn\'t think i wouldn\'t apply', '', 'Accepted', '2021-04-19 22:10:43', '', NULL),
(23, 'هدير رضا علي', 'جامعة السويس', 'كلية تربية فنية', 'قسم تربية فنية', '٣', '01090695076', 'haderredahermash@gmail.com', '', 'https://www.facebook.com/profile.php?id=100009214331070', 'Social', '', 'لانه مجال عملي فيما بعد', 'التعامل مع وسائل التواصل الاجتماعي', 'بسملة وائل حسن قسم الاوف لاين ماركتينج', 'لا', 'لانه شابتر صاحب سمعه طيبه', 'نعم', 'بسملة وائل\r\nقسم الاوف لاين ماركتينج', 'Accepted', '2021-04-19 22:21:38', '', NULL),
(24, 'ندا جميل عبد العظيم محروس', 'جامعة السويس', 'كليه التربيه', 'تكنولوجيا التعليم', 'الفرقه الثالثه', '01090396282', 'nody3nany12@gmail.com', '', 'https://www.facebook.com/nadamm25', 'Social', '', 'لاني لدي خبره في مجال السوشيال ميديا اكثر من غيره', ' اتعامل مع جميع وسائل التواصل الاجتماعي واستطيع كتابه البوستات بمهاره', 'بسمله وائل قسم اوفلاين ماركتينج', 'لا', 'لانه اشهر شابتر بجامعة السويس', 'نعم بالطبع سوف يزيد من خبرتي والرغبه ف العمل الجماعي', 'بسمله وائل قسم افلاين ماركتينج', 'Accepted', '2021-04-19 22:32:32', '', NULL),
(26, 'warda Reda Mohamed', 'جامعه السويس', 'التربيه', 'تكنولوجيا التعليم', 'الفرقه التالته ', '01011921446', 'wardareda53@gmail.com', '', 'https://www.facebook.com/wared.reda.3', 'Social', '', 'لان لدى خبره فى مجال السوشيال ميديا عن غيرى', 'اتعامل مع جميع مواقع التواصل الاجتماعي واستطيع كتابه البوستات بمهارة', 'بسمله وائل قسم اوفلاين ماركتنج', 'لا', 'لانه اشهر شبتر بجامعه السويس', 'نعم بالطبع سوف يزيد من خبرتى ', 'بسمله وائل قسم اوفلاين ماركتنج', 'Accepted', '2021-04-19 22:34:14', '', NULL),
(27, 'ايه هانى السيد مصطفى الجرادينى ', 'جامعه السويس', 'تكنولوجيا التعليم الصناعى', 'كهربا', 'الثانيه', '01008379916', 'ayaelgradiny@gmail.com', '', 'https://www.facebook.com/aya.hany.9440', 'Offline', '', 'لاني احب ان انمي مجالي في هذا المجال', 'سوف يقوم بتعليمى بكيفيه التعامل مع الناس والعمل الجماعى وكيفيه التعامل فى الافنتات', 'بسلمه وائل قسم اوفلاين ماركتنج', 'لا', 'لكى انمى خبرتى ولانه اشهر شابتر بجامعه السويس وذات سمعه طيبه ', 'بالطبع نعم', 'بسمله وائل قسم افلاولاين ماركتينج', 'Accepted', '2021-04-19 22:41:51', '', NULL),
(28, 'زينب نبيل ذكي اسماعيل', 'السويس', 'السويس', 'اذاعه وتلفزيون', 'التانيه', '01015229323', 'zienab.nabil2000@gmail.com', '', 'https://www.facebook.com/profile.php?id=100014284547440', 'Social', '', 'شايفه إني هتعلم فيها حاجات عاوزاها ', 'تختص بكل ما تحتويه السوشيال ميديا، من نشر بوستات وايميلات وغيرها', 'بسمله وائل قسم اوفلاين ماركتنج', 'لا', 'للاستفاده لي سوق العمل', 'نعم', '', 'Accepted', '2021-04-19 22:43:57', '', NULL),
(29, 'Mona abdel hamed alhoseny alnagar', 'Suez University', 'Mass media and Communications', 'Integrated marketing communications', 'Two', '01010822769', 'monaalnager842@gmail.com', '', 'https://www.facebook.com/mona.abdelhamed.7106', 'Offline', '', 'Because l know SPE is considered one of the most famous and successful activities at Suez University, I choose this committee because l study public relations and marketing, so I like to participate in all activities related to this field', 'Of course, I have to present every new for shapter and work on making it a success and present it with the help of my friends, I will market products, ', 'Basmalawael,Department of Online Marketing', 'Of course, PR in IEEE, journalism in insider, journalism in pmc', 'Because it is considered one of the most famous and successful activities at Suez University', 'Of course', '', 'Accepted', '2021-04-19 22:48:26', '', NULL),
(30, 'شيماء احمد عبدالفتاح نايل', ' جامعة السويس', 'كلية تكنولجيا التعليم الصناعي', 'قسم كهرباء', 'الصف ٢', '01114836225', 'ashaima038@gamil.com', 'Shaimaa.AANa@ind.suezuni.edu.eg', 'sho.shoosho@yahoo.com', 'Social', '1', 'لاني اريد ان يكون لدي خبره في هذا المجال', 'اقوم بالتعامل مع وسائل التواصل الاجتماعي', 'بسمله وائل قسم الاوفلاين ماركتينج', 'لا', 'لانه شابتر جيدجدا', ' نعم من خلال العمل الجماعي', 'بسمله وائل قسم الاوف لاين ماركتينج', 'Accepted', '2021-04-19 22:49:54', '', ''),
(31, 'Dina hesham', 'الزقازيق', 'الطب', 'طب بشري', 'سنه تانيه', '01097753740', 'Dhesham1234@gmail.com', '', 'https://www.facebook.com/dina.hesham.399826', 'Offline', '', 'لاني اريد ان ازيد من خبرتي في هذا المجال', 'سوف يقوم بتعليمي بكيفيه التعامل مع الناس وكيفيه جعلهم يتقدمون  في الشابتر', 'بسمله وائل \r\nقسمoffline marketing ', 'لا', 'لان صديقتي دعتني للانضمام اايه وهو شابتر ذات سمعه طيبه', 'نعم بالطبع هستفاد بالاضافه الى العمل الجماعي', 'بسمله وائل \r\nقسم/offline marketing', 'Rejected', '2021-04-19 22:50:19', '', NULL),
(33, 'دنيا عزت محمد الجارحي', 'جامعه بني سويف', 'تكنولوجيا وتعليم صناعي', 'تكنولوجيا تحكم في العمليات ', '2', '01153664778', 'doniaelgarhy08@gmail.com', '', 'donia ', 'Offline', '', 'لاني لدي خبره في مجال السوشيال ميديا اكثر من غيره ', 'اتعامل مع جميع وسائل التواصل الاجتماعي وأستطيع كتابه البوستات بمهاره ', 'بسمله وائل قسم افلاين ماركتينج', 'لا', 'لانه اشهر شابتر بجامعه السويس', ' نعم بالطبع سوف يزيد من خبرتي والرغبه في العمل الجماعي', 'بسمله وائل قسم افلاين ماركتينج', 'Rejected', '2021-04-19 23:56:09', '', NULL),
(34, 'اماني علاء الدين بدر محمد خيرالله', 'جامعه بني سويف', 'تكنولوجيا وتعليم صناعي', 'الكترونيات', '2', '01032098421', 'amanyalaaa37@gmail.com', '', 'Amany Alaa', 'Offline', '', 'لاني لدي خبره في مجال السوشيال ميديا اكثر من غيره', 'اتعامل مع جميع وسائل التواصل الاجتماعي وأستطيع كتابه البوستات بمهاره', 'بسمله وائل قسم افلاين ماركتينج', 'لا', 'لانه اشهر شابتر بجامعه السويس', 'نعم بالطبع سوف يزيد من خبرتي والرغبه ق العمل الجماعي', 'بسمله وائل قسم افلاين ماركتينج', 'Rejected', '2021-04-20 00:03:15', '', NULL),
(35, 'Hager ashraf ', 'Suez ', 'Education ', 'Science ', '3', '01141104533', 'augaam10@gmail.com', '', 'https://www.facebook.com/hager.aismail.1', 'HRM', '', 'Because I need to learn more about this committee ', 'Evaluation of members in the chapters\r\nDo interviews for new members', '. ', 'OC Member In AAPG\r\nA volunteer in the Association of Risala', 'To learn more about this committee ', 'Yes, By helping me and teaching me more about hr ', '', 'Accepted', '2021-04-20 00:21:27', '', NULL),
(36, 'Sally sayed youssef', 'Suez university', 'Engineering', 'Mechanical', 'First ', '01023109491', 'sallyayad982001@gmail.com', '', 'https://www.facebook.com/sally.ayad.50', 'media', '', 'Because i want to be a graphic designer', 'Using Photoshop and illustrator to edit photos', 'Dina diaa ', 'No', 'To improve my skills', 'Yes, i will know a new skills and learn graphic design', '', 'Accepted', '2021-04-20 07:05:51', '', NULL),
(37, 'شهاب رشاد مسلم جوده ', 'اكاديميه ايجاد ', 'الاء عاطف ', 'الكيمياء الصناعيه ', '٤', '01093479686', 'hivoo123hoba@gmail.com', '', 'hivoo123hoba@gmail.com', 'HRM', '', '..', '..', '..', 'لا', '.', '.', '', 'Rejected', '2021-04-20 11:46:51', '', NULL),
(38, 'Abd Al-fadeel Hamdy', 'suez university ', 'petroleum and mining engineering ', 'petroleum department ', 'second', '01013858495', 'abdohamdy12358@gmail.com', '', 'https://www.facebook.com/abdelfadeel.hamdy.5', 'Web', '', 'I like programming ', 'developing spe website ', 'abd allah abu elkhier', 'HRD Member', 'it would help me develop my skills ', 'of course ', '', 'Accepted', '2021-04-20 12:31:24', '', NULL),
(39, 'Abdelaleem aside Abdelaleem', 'igate', 'Drillng', 'Engeneer', '5', '01098587226', 'limoa332@gmail.com', '', 'abdo200elmasrey@yahoo.com', 'Android', '', 'yes', 'no', 'abdelaleem', 'no', '5', 'no', 'yes', 'Accepted', '2021-04-20 12:39:44', '', NULL),
(40, 'عبد الرحمن سمير عبد الفتاح محمد', 'جامعة السويس', 'الهندسة', 'ميكانيكا', 'الفرقة الاولي', '01098222723', 'as2162936@gmail.com', '', 'https://www.facebook.com/profile.php?id=100008366294535', 'OC', '', 'لتنمية مهارة القياده واتخاز القرارات', 'لانoc مهمة جدا في اي منظمه وادارتها القرارات الخاصة بها', 'محمد ايمن', 'لا', ' مهمه لتنمية روح الانخراط في الاعمال التطوعية وتحسين نهارة القيادةSPEلان النشاطات الطلابية مثل ', 'نعم لان الشابتر اس بي اي مهمة لتنمية مهارات التواصل ', '', 'Accepted', '2021-04-20 14:19:41', '', NULL),
(41, 'Basma Ahmed Abdellah', 'Suez', 'Computer and information', 'IT ', 'third', '01210052193', 'basmaahmed842000@gmail.com', '', 'https://www.facebook.com/pasma.ahmed.7547', 'Social', '', 'I have experience on it and I\'d love to learn more ', 'write posts on Facebook and contact writer for events', 'mirna tmam', 'I was in social media at sme and was direct publicty at hult prize and organized at ISEF genius ', 'i heard alot about it and i want to be a member at this family', 'sure i will gain experience', '', 'Accepted', '2021-04-20 15:05:28', '', NULL),
(42, 'نرمين اشرق احمد ماهر ونس', 'suez university', 'تربيه', 'اساسي انجليزي', '4', '01067310297', 'nermemn@gmail.com', '', 'https://www.facebook.com/nermen.mahr.142', 'BD', '', 'لاني اتش ار في عده اماكن ومحدده الهدف من كاريري ايه فالمجال دة هيفدني جدا جدا في اساسيات شكرتي لما اجي انفذها باذن الرحمن علي ارض الواقع هو بالفعل ماشيه في اجرائتتها حاليا وعلي ما اعتقد ان المهارد دى محتاجه اتعلمها بشكل كبير لشان مجال الشركات الانترناشونال ', 'هي اول مره ليا اعرف ان في كوميتي متواجد بس علي  حد علمي اني بتعلم فيه ازاي اطور من مشروعي او فكرتي ', 'كنت مسجله قبل سابق ك اتش اار وبعدين الكوميتي اتملت وبعدين بعتولنا ونختار من الكوميتي المتحاه كنت هقدم علي بوزيشن تانيه بس للاسف معرفتش محستش اني دى الحاجه المحتاجاها فبفتح جيميلي من شويا لاقيت دعوةة مشرفه جدا ليا علي اتاحه الفرصه للانضمام اوكيد طبعا حاجه جميلة زى كده مش هينفع اضيعها فشكرا جدا جدا ليكم', 'HR in ATI-suez\r\nHR in Elzatoona\r\nHR in SEG\r\nHR In anwar Resala\r\n\r\nmanager oc of TNT\r\n\r\nقائد توعيه المدارس بحمله لونها بالاخضر لصناع الحياه \r\nقائد الانشطه والفاعليات في حمله توعيه للاهالي في صناع الحياه \r\nليدر الاطفاال في قافله السعادة  لصناع الحياه ', 'شابتر محترم جدا واسمع انه بيعلم المهارات فعلا مش بيضيع من الوقت', 'اه طبعا حتي لو مقدرتتش اوص للمهاراه اللي محتاجها فيكفيني جدا اني بتتعرف علي عقليات بشريه مختلفه وده في حد ذاته بيطور من مهاراه التفكير محل المشكلات بكذا نمط', '', 'Accepted', '2021-04-20 15:58:13', '', NULL),
(43, 'Anas ehab', 'معهد نظم ومعلومات ', 'نظم ومعلومات السويس', ' Computer ', 'graduate', '01000325355', 'midoanas77@gmail.com', '', 'https://www.facebook.com/profile.php?id=100007452045433', 'Web', '', 'عاوز اعرف اكتر عنه ', 'عمل مواقع ويب سايت\r\n', 'اسراء خالد hrd', ' Svt\r\nMarketing \r\nSocial media ', 'اتعلم اكتر عن البرمجه وتخصصتها', 'اكيد ', '', 'Rejected', '2021-04-20 16:17:13', '', NULL),
(44, 'Rana Hassan Mohamed ', 'Suez university ', 'Faculty of Education ', 'Biology ', 'Second year ', '01128505772', 'Ranahassan7777777@gmail.com', '', 'https://www.facebook.com/profile.php?id=100024214306908', 'Web', '', 'Because I love this committee and I want to learn more programming languages. ', 'We are responsible for managing the SPE site by dealing with programming languages. ', 'My friend. ', 'No', 'To learn more programming languages. ', 'Yes, I will learn alot from this committee because I love this field. ', '', 'Accepted', '2021-04-20 18:14:44', '', NULL),
(45, 'Donia Ashraf', 'Suez', 'Education', 'Chemistry', '3', '01000852317', 'doniaashrafyasser@gmail.com', '', 'https://www.facebook.com/donia.ashraf.528316', 'mEditing', '', 'Because improve my English', 'No', 'Esraa Khaled', 'HR member ESME', '.', '.', '.', 'Accepted', '2021-04-20 19:59:26', '', NULL),
(46, 'Mariam Samir Ibrahim Hussain ', 'Suez University ', 'Faculty of Arts ', 'English Department ', 'Third Year ', '01124493184', 'nour.hayati9719@yahoo.com', '', 'https://www.facebook.com/nour.glhoom', 'OC', '', 'I\'m really interested in this committee ', 'I don\'t have any experience in this kind of work .. but I would like to learn more about it ~', 'One of my friends ', 'No, nothing at all ', 'As I mentioned before, I\'m really interested in this committee and its subject ', 'Yes, I think so ', 'I hope that I can join the committee and be useful ', 'Accepted', '2021-04-20 21:42:04', '', NULL),
(47, 'Ibrahim Abdellatif Abdelkreem Ibrahim ', 'Suez University ', 'Petroleum and Mining Engineering ', 'Petroleum Production and Exploration Engineering ', '1', '01016675406', 'hemaemara72@gmail.com', '', 'https://www.facebook.com/ibrahim26d', 'Academy', '', 'Because I am interested in my field and try to learn more.', 'I am ready for anything ', 'Salem Omar ', 'No ', 'Because it is a known organization, it is very good ', 'Of course ', '', 'Accepted', '2021-04-20 22:45:36', '', NULL),
(48, 'Mohamed Salah dardir', 'Suez University', 'Faculty of Technology and Education', 'Spinning and Weaving Department', '2', '01026491934', 'ms2508474@gmail.com', '', 'https://www.facebook.com/profile.php?id=100014141796200', 'HRM', '', 'Because it is an experience that I want to develop on my own', 'It\'s a new experience for me', 'Hager Ashraf', 'No. This is my first experience', 'In order to learn new things and develop myself', 'Of course, I will benefit through the way to learn new things and get to know people who will develop the English language for me and other things.', '', 'Accepted', '2021-04-21 18:48:21', '', NULL),
(49, 'Ahmed elsayed', 'Suez', 'Petroleum engineering', 'Petroleum engineering', 'Third', '01126379508', 'ae504547@gmail.com', '', 'https://m.facebook.com/ahmed.abdelgwad.7399?ref=bookmarks', 'media', '', 'I want to enhace my skills and learn graphic design besude posting.', '-resposible for making the chapter posts\r\n-making the designs for these posts\r\n- resposible for the socialmedia of the chapter', 'Ahmed Abdelgawwad', 'Yes, i was member at HRD commettie. and i am head at other chapter now.', 'On my experience. It is the best chapter', 'Yes, by doing the tasks and making what i am able to do to enhance my commettie.', '', 'Accepted', '2021-04-21 19:12:07', '', NULL),
(50, 'Hossam elden gamal', 'Suez', 'Education', 'Chemistry', '3', '01212778923', 'hossamradwan199@gmail.com', '', 'hoss', 'Logic', '', 'Because it plays an important role in international trade', 'Managing how resources are acquired,stored and transported to thier final destination', 'A friend of mine called salma', 'Unfortunately I don\'t have a previous experience like this before, i wish it will be my first one', 'To develop my skills and enrich my knowledge', 'I hope so', 'What are you talking about?', 'Accepted', '2021-04-21 19:40:58', '', NULL),
(52, 'Marwa Elsayed Mohammed Suleiman', 'Suez University', 'Faculty of Education', 'English Department', '3 year', '01094261047', 'marwaelsayed514@gmail.com', '', 'https://www.facebook.com/merotmohamed.mohamed', 'HRM', '', 'Because human resources are considered an important and basic thing in a person\'s life. He is using them in his life even though he did not notice this.', 'The individual is capable of organizing time and manage it in a correct way.\r\n \r\nAbility to communicate with others (communication skills)\r\n \r\nThe ability to collect information and analyze it accurately', 'Eman', 'Yes, for example \r\nI can manage my time and do my works in time and I can communicate with other in a good way.\r\n', 'Because it provides a good information ', 'Yes, I  meet new people and communicate with them.', '', 'Accepted', '2021-04-21 20:27:41', '', NULL),
(53, 'Hager Samer talaat', 'السويس', 'اداب', 'فلسفه', 'الاول', '01149569556', 'hagersamsr@gmail.com', '', 'Hager Samer', 'HRM', '', 'لتنميه نفسي', 'تقيم الأشخاص المقدمين ع الاستماره وتقيم ادائهم', 'Aya Soliman', 'ايوا \r\nكنت متطوع تبع الشئون الاجتماعيه', 'لاني احب مساعده الاخرين وهذا سيساعد في الشهاده ', 'ايوا', '', 'Accepted', '2021-04-21 21:55:57', '', NULL),
(54, 'Heba Rabie Muhammad ElZorqany ', 'Suez ', 'Education ', 'Mathematics ', '2', '01095973181', 'hebarabie660@gmail.com', '', 'https://www.facebook.com/heba.rabie.967', 'OC', '', 'I want to develop my skills especially communication skill \r\nAnd I love Organizing especially visits and charity ', 'They Organize any events , charities and visits ', 'No one \r\nI really wanted to join the Organizing committee \r\nI know about the Recruitment from spe\'s problem solving session ', 'Yes \r\nHRM Member at EEGS SU SC \r\nHRM Member at IEEE Branch \r\nMathematics teacher at Resala\'s school \r\nVolunteer at \" you are kind \" it\'s a charitable initiative ', 'Because OC Committee works well and do wonderful charity work ', 'Yes I will \r\nBy a lot of practice,  communication and working with a team to organize any event will add to me a lot \r\n', '', 'Accepted', '2021-04-21 22:00:52', '', NULL),
(56, 'Shimaa mahmoud radwan mohamed', 'السويس', 'عادل عبد الشكور', ' تربيه بيولوچي', 'الثالثه', '01008189765', 'shimaamahmoudradwan@gmail.com', '', 'https://m.facebook.com/?_rdr', 'HRM', '', 'بيعطني ثقه في نفسي وكيفيه التعامل مع الناس دون كسوف وبتعالجني من الخجل الشديد الي عندي عندما اتكلم مع اي حد ', ' اتعلم كيفيه عمل الانتيرفيو وكيف اعمل الانتيرفيو  مع الاشخاص واتعلم كيف اقيم عمل الشخص الي امامي في الشابتير', 'امنيه السيد ', 'لا', 'ليكسبني خبره ', 'نعم ،لانه بتجعلني اطلع علي مجال واشياء جديده لم اطلع عليه من قبل ', 'اتمني اني استفاد بقدر الامكان من هذا الشابتير', 'Accepted', '2021-04-21 22:34:02', '', NULL),
(57, 'Gehad Raafat Abd_elhamid Youssef ', 'Alazhar University ', 'Engineering ', 'Electrical System and Computer Engineering ', 'First year', '01149710601', 'gehadraafat209@gmail.com', '', 'https://www.facebook.com/profile.php?id=100046178952735', 'Web', '', 'Because i am interested in web development field. ', 'نشر أي شئ خاص بالفريق على الموقع\r\nتطوير الموقع \r\n', 'لقد رأيت المنشور على الفيس بوك ', 'نعم لقد انضممت من قبل لعمل تطوعي \r\nوهو نشاط طلابي AZ_SENCS معرض هندسة النظم والحاسبات  لقد التحقت بلجنة التنظيم اللوجيستي واستمريت فيها حوالي ٦ أشهر ثم انتقلت إلي لجنة تيكنيكال ويب وما زلت موجودة فيها.\r\nولقد اضممت سابقاً ايضاً لفريق VEIE والتحقت بلجنة الماركتنج واستمريت حوالي ٦ أشهر ثم غادرت الفريق', 'لأنني مهتمة بمجال تطوير الويب والفريق سوف يساعدني في الارتقاء بمستوايا التقني ', 'نعم أعتقد ذلك من خلال:\r\nتقوية شبكة علاقاتي.\r\nتزويد مهاراتي التقنية في مجال تطوير الويب.', '.', 'Accepted', '2021-04-22 01:23:03', '', NULL),
(58, 'Donia hamadaa', 'Helwan', 'of Commerce and Business Administration', ' التخصص سنه 3', '1', '01117413675', 'doniaeltaher42@gmail.com', '', 'donia_hamadaa@yahoo.com', 'Offline', '', 'للاستفاده', 'idk', 'No one', ' No', 'علشان العمل التطوعي هيفيدني جدا في مجال العمل', 'Sure', '', 'Rejected', '2021-04-22 01:28:52', '', NULL),
(59, 'Hadeer Kamal Mahmoud Mouhamed', 'Suez', 'Education', 'Mathematics', '2', '01093079534', 'hadeerkamal14@gmail.com', '', 'Hadeer Kamal', 'OC', '', 'I love Organization and I want to develop my communication skill', 'They Organization any events , visits and charity works', 'Heba Rabie Muhammad', 'No', 'Because spe doing well and it will help me to develop my skills', 'Yes I will \r\nI will doing my best to be better than I am now \r\nEspecially being in this committee will develop my skills like communication , team work and be more responsible', '', 'Accepted', '2021-04-22 02:52:12', '', NULL),
(60, 'Sara magdy ahmed', 'Buc', 'Linguistics and translation', 'Chinese', 'Second year', '01020455086', 'saramagdyme@gmail.com', '', 'https://www.facebook.com/profile.php?id=100055177181405', 'HRM', '', 'I need experience in dealing with people\r\nFor all member', 'We do interview\r\nWe do individual evaluation', 'Omnia Elsayed  Ali', 'Yes I worked In AIESEC', 'Because it won the best chapter awards', 'Yes \r\nTake advantage of the skills learned to spe', '', 'Accepted', '2021-04-22 07:40:48', '', NULL),
(61, 'Farah Salih Ismael ', 'Asmara University ', 'Commerce ', 'Accounting ', '2008 to 2012', '01119173471', 'farahsalih2020@gmail.com', '', 'no', 'IR', '', 'For taking the time to know and develop my relationship with others. ', 'I am waiting to know about it from you now. ', 'Facebook ', 'Volunteer with community based organizations, UNFPA Egypt and Egyptian Red Cresent. ', 'To upgrade my skills and experience with new technologies and information. ', 'Yeah, by working hard and applying all the rules and regulations of SPE. ', 'Thanks for taking your time to read my message and considering my interest in this committee, I look forward to hearing from you soon. ', 'Rejected', '2021-04-22 09:17:55', '', NULL),
(62, 'Hager yasser Ahmed ', 'Suez Univerety ', 'Faculty of Arts', 'Chinese language ', '2', '01012976761', 'hager4607@gmail.com', '', 'https://www.facebook.com/profile.php?id=100017205338756', 'Offline', '', 'Because I want to manage my own project in the right way ', 'Marketing refers to activities a company undertakes to promote the buying or selling of a product or service. Marketing includes advertising, selling, and delivering products to consumers or other businesses. ', 'Salma Muhammad Ali', 'No, l haven\'t', 'Because I previously attended an event organized by spe, and was very happy with the organization of the event and I liked to be part of this entity. ', 'I think I am not the best person, but I do have the skills that should be present in the applicant person. ', '', 'Accepted', '2021-04-22 19:27:18', '', NULL),
(63, 'Nesma Mohamed Ali El_oksh ', 'Suez ', 'Technology and Education ', 'Electronics ', 'Second ', '01093233430', 'alkshnsmh@gmail.com', '', 'https://www.facebook.com/profile.php?id=100045055913890', 'HRM', '', 'To develop my skills', '* putting the right person in the right place\r\n* Motivate members\r\n', 'Hala\r\nلجنه الاكسترا ', 'لا', 'To develop my skills\r\nTo participate in volunteer work ', 'Of course yes\r\nThrough events and participation in volunteer work and courses', '', 'Accepted', '2021-04-22 19:57:53', '', NULL),
(64, ' Yahya Nabih Mohamed Abdel Aleem', 'Suez ', 'Technology and Education', 'Electronics ', 'Second ', '01111449958', 'yahyanabih222@gmail.com', '', 'https://www.facebook.com/yahya.nabih', 'HRM', '', 'To Develop skills ', 'Putting the right person in the right place.\r\n Orienting new members.\r\n Training of employees to perform the jobs.\r\n Interpretation of the organization\'s policies to its employees.\r\n Motivate Members ', 'Hala \r\nCommittee extra ', 'No', 'To participate in volunteer work\r\nTo develop skills ', 'Yes\r\nThrough events and participation \r\nin volunteer work and courses', '', 'Accepted', '2021-04-22 20:17:38', '', NULL),
(65, 'Mariam Mazen', 'Alazahar', 'Language and translation', 'English', '2nd', '01276051993', 'mariammazen337@gmail.com', '', '.', 'Social', '1', 'I\'m eager to get experience about this feild', 'Employee relations payroll, benefits and training. Recruiting. Interviewing. ', 'Esraa Anwar ', 'I\'m a HR volunteer at Resala charity\nAnd HR at EYP', 'I\'d like to be one your staff. And I\'d like to get more experience from working with', 'Of course I will benefit from you\nFrom the tasks i will take and the responsibility from trying to improve the team ', '.', 'Accepted', '2021-04-22 20:43:44', '', ''),
(66, 'Fatma shaban mohamed moftah ', 'SUEZ UNIVERSITY ', 'Technology and Education ', 'Electric Power ', 'Second year ', '01022376572', 'fatmaashaban45@gmail.com', '', 'https://www.facebook.com/whatsapp.dod', 'HRM', '', 'To develop my skills ', 'Putting the right person in the right place.\r\n Orienting new members.\r\n Training of members to perform the jobs.\r\n Raising the efficiency of job performance.\r\n Interpretation of the organization\'s policies to its members.\r\n Motivate members', 'Hala Ahmed saad\r\n- Committee Extracurricular ', 'No', 'To develop my skills and participate in awareness work', 'Yes, Through events and participation in volunteer work and courses', 'Thanks. ', 'Accepted', '2021-04-22 20:52:24', '', NULL),
(71, 'Esraa abdallah Essa', 'Suez University ', 'كليه الاداب ', 'Arabic Language', '2', '01204815247', 'soesoo104@gmail.com', '', 'https://www.facebook.com/esraa.abdallah.14661', 'HRM', '', 'لكي اتعلم مهارات كتيره وخبرات واتحدى خجلي واكتسب ثقه بالبنفس  ', 'انني سأتعلم كيفيه خلق مقالبه ناجحه مع الاخرين ', 'Esraa Ahmed', 'لا يوجد لدي', 'كي اكتسب خبرات و مهارات لانني افتقدها ', 'نعم \r\nلان لديكم الخبره والمهارات و اعتقد بإذن الله سأستفيد ', '', 'Accepted', '2021-04-22 21:47:22', '', NULL),
(72, 'إسراء محمد عمر محمد', 'عين شمس', 'تربية', 'علوم انجلش', '٢', '01140018150', 'esraaomer947@gmail.com', '', 'https://www.facebook.com/esraaome', 'HRM', '', 'الاساس لاي شركه او مؤسسه موجوده بيقدر يقوم باهم الادوار ف الشركه مسئول عن نجاح او فشل المنظومه والمنتج ويقدر \r\nيحسن كل دا ويصل للاهداف اخدت كورسز\r\nفي المجال وحاولت اطور مني ن\r\nاختصار لHuman Resources Management', 'بيعمل عمليه استقطاب وهي انه بيوظف الناس وبيحطهم ف المكان المناسب ليهم،بيحط الشروط المناسب للوظيفه وبيشوف محتاجين كام واحد،بنعمل تدرييات للموظفين عشان نحسن منهم،ونطور من الانتاجيه ،بيعمل الهيكل التنظيمي وخطه المؤسسه ككل', 'من جروب علي الفيسبوك اسمهStudent Activity', 'اطوعت ف تيم تبع كليه المدرسه بس جات فتره الكرونا ،وخلتني مقدرش استفيد بالقدر الكافي ال دخلت عشانه ،عشان كده دورت ع تيم تاني اونلاين عشان اتعلم واستفيد منه اكتر،باخد كورسز اونلاين في المجال دا وبحاول اطور منه ومحتاجه اني ادخل تيم واطبق ال بتعمله', ' عاوزه اكمل في المجال وعاوزه استفيد واطور م نفسي ف المجال ودي فرصه بالنسبالي', 'اكيد طبعا،هعرف ناس خبره ف المجال وهتعلم منهم وكمان انا هشتغل واعمل تاسك فهقدر بعد كده اشتغل HRMوانا عندي خبره', 'بيتم التواصل ازاى مع المقبولين وف خلال اد ايه وشكرا جدا', 'Rejected', '2021-04-22 22:12:34', '', NULL),
(73, 'Shimaa mahdi ', 'Suez University ', 'Fisheries and marine studies', 'aqua culture ', 'Second', '01148665489', 'shaimaamahdi98@gmail.com', '', 'https://www.facebook.com/profile.php?id=100047717656779', 'Extra', '', 'عندي مهارة التنظيم والتخطيط', 'كوميتي مسئول عن الجزء الترفيهي في التيم وتنظيم الايفنتات ', 'Facebook', 'Survey member at Aiche\r\nMarketing member Marketing team \r\n', 'علشان اطور من نفسي ', 'اه هزود من مهارة التخطيط عندي', '', 'Accepted', '2021-04-22 23:05:57', '', NULL),
(74, 'Salma Abd elnasser Ahmed Tawfiq', 'Suez', 'Commerce', 'Accounting ', 'الفرقة الثالثة ', '01090295343', 'sooahmed2496@gmail.com', '', 'https://www.facebook.com/profile.php?id=100011118918560', 'IR', '', 'Useful for me ', 'انشاء علاقات بينا وبين ال student activity\r\nنشر اخبار الشابتر', 'Omnia Mahmoud ', 'I joined to organize Zayed charity marathon ', 'Useful for me and I love to develop myself in anyway ', 'Yes, it will develop me ', '.... ', 'Accepted', '2021-04-23 01:59:47', '', NULL),
(79, 'Ahmed Adel Abd El-hamied Ali', 'Suez', 'Technology and Education', 'Refrigeration & Air Conditioning', 'Second', '010252727678', 'ahmedad6600@gmail.com', '', 'https://www.facebook.com/medo.elheta', 'HRM', '', 'To develop skills', '1 The function of the human factor is to take care of the human element within the organization to prevent mistakes\r\n\r\n2_putting the right person in the right place\r\n\r\n3_ Training of employees to perform the jobs.', 'Hala Ahmed saad', 'No', '1-To participate in volunteer work\r\n2-To develop skills', 'Yes \r\nThrough events and participation in volunteer work and courses', '', 'Accepted', '2021-04-23 10:22:24', '', NULL),
(85, 'روضة الحبيب محمد أحمد', 'السويس', 'حاسبات ومعلومات', 'عام', '1', '04093359873', 'roodym527@gmail.com', '', 'https://www.facebook.com/sfroot.roody', 'Web', '', 'Becuase l study programming in the faculty ', 'Html, css', 'My Girlfriend', 'I learn html, css', 'Becuase it\'s famous', 'Yes, becuase add skill for me', '...', 'Accepted', '2021-04-23 15:04:23', '', NULL),
(89, 'Nourhan fawzy mohamed', 'Suez', 'Of Arts', 'English translation', 'Frist', '01149985610', 'nourhanfawzy12@gmail.com', '', 'https://www.facebook.com/dody.rody.961993', 'OC', '', 'Because i want to learn more about it', 'Committee\r\nمسؤله عن التنظيم زى مثلا تنظيم الاماكن قبل اى event \r\nو التواصل مع الناس و تنظيمهم \r\nو بالنسبه لاعضاء ال  \r\nCommittee\r\nفمطلوب انو يكون شخص منظم و بيشتغل بشكل كويس تحت الضغط', 'My friend (Asmaa)', 'Yes\r\nI\'m marketing member in ATI Suez', 'حابه انى اشارك ف اكتر من \r\nchapter \r\nعلشان اكتسب خبرات مختلفه \r\nبجانب انى سمعت عن ان ال\r\nChapter كويس\r\nفحابه اخوض تجربتى ك\r\n OC فيه', 'اعتقد ده جدا \r\n', '', 'Accepted', '2021-04-23 20:30:46', '', NULL),
(90, 'Mai Eid Esmail', 'Suez University', 'Faculty Of Arts', 'Philosophy', 'Second', '01156360557', 'maim2743@gmail.com', '', 'https://www.facebook.com/profile.php?id=100017139191646', 'OC', '', 'لاني حابه المجال دا وعايزه اتعلمه واخد خبره في', 'يكون الشخص ملتزم بمواعيده ومنظم وبيعرف يشتغل تحت ضغط وف وقت قصير عشان الايفنتات والحاجات اللي بتحصل ساعات كتير ممكن الوقت يكون قصير والشغل كتير وفي ضغط فيعرف يتعامل ويكون الشخص كريتف شويه ويعرف يتعامل مع المشاكل اللي بتواجهه ف الشغل بطريقه ذكيه ويقدر يحلها', 'أسماء محمد إبراهيم', 'Marketing Member at ATI Suez\r\nHR Member at SEG Suez\r\nوكنت \r\nOC Member at Hult Prize Suez University\r\nمتطوعه ف جمعية صناع الحياة السويس', 'سمعت عن الشابتر وانه كويس جدا وفي ناس شغاله وعرفت ان الناس اللي جوه بيستفادوا جدا وبيحاولوا يفيدوا بقدر المستطاع وشابتر واضح انه شغال ف حابه اكون ضمن كيان زي دا واتعلم منه', 'اه اعتقد اني هستفيد عن طريق اللي هتعلمه وهطبقه جوا الشابتر ومع الناس اللي فيه', '', 'Accepted', '2021-04-23 20:50:46', '', NULL),
(91, 'Bassant mamdoh khalil maghraby', 'Suez', 'Education', 'Biology', '2', '01007891551', 'bassantmamdoh89@gmail.com', '', 'https://www.facebook.com/profile.php?id=100040838777221', 'OC', '', 'بحب التنظيم والعمل فى جماعة وحاجه اشتغل فالحجات دي كتير', 'تنظيم اى ايفنت التيم بيعملو بكل تفاصيلو من مكان وكل حاجه\r\nتنظيم الهدايا او الجوائز ف اى مسابقة او اى مناسبه ونخلى شكلها مميز', 'اسماء ابراهيم', ' Marketing in ATI-SUEZ', 'حابه اتعلم حاجات جديده واكتسب مهارات واستفيد', 'اكيد عن طريق العمل الجماعي واكيد فيه معلومات نظريه ', '', 'Accepted', '2021-04-23 21:30:04', '', NULL),
(92, 'Mohamed ayman mohamed ali', 'Suez university', 'Engineering', 'Mechanic', 'First year', '01014909244', 'mohamedayman9696@saraha.com', '', 'https://www.facebook.com/profile.php?id=100006993218209', 'OC', '', 'لانني احب الاعمال التظيميه والمشاركه بها من حيث كل شئ', 'تنظيم الايفينت \r\nالمشاركه في اختيار المكان وميعاد الايفينت \r\nتنظيم الاحدث المهمه في الشابتر مثل opening - general meeting', 'Dina diaa', 'نعم. فانا مشترك في كوميتي الاكسترا في شابتر spe \r\nكنت امين اللجنه الرياضيه في اتحاد طلبه كليه الهندسه \r\nكنت متبرعا في الجمعيه الشرعيه \r\nكنت متبرعا في جمعيه رساله \r\nكنت عضوا في الجواله\r\n ', 'To improve my skills and gain new skills ', 'نعم؛ سوف اكتسب مهارات جديده \r\nوتنميه مهاره التنظيم لدى \r\nواكتساب معارف جديده ', '', 'Accepted', '2021-04-23 23:04:21', '', NULL),
(93, 'Salma Ali kamel', 'Suez university', 'Faculty of education', 'Biology', 'Second', '01066117356', 'salma.ali.1382017@gmail.com', '', 'https://www.facebook.com/profile.php?id=100046088088240', 'OC', '', 'تجربة جديدة حابة اجربها و ان شاء الله اتعلم منها حاجة جديدة تضيف لمهاراتي حاجة زيادة ', 'المسئوليات أن اكون قد المكانة اللي هكون فيها و مبتاخرش ع حاجة و بنفذ المطلوب مني ', 'Asmaa Ibrahim', 'كنت ف شباتر تانية ', 'حاسة ان هستفيد حاجة', 'ان شاء الله ايوا و هتكون تجربة هتضيف ليا', '', 'Accepted', '2021-04-24 13:13:50', '', NULL),
(94, 'mariam ibrahim ', 'Banha university ', 'faculty of Commerce ', 'Administration ', '2026', '01029454651', 'm45amed@gmail.com', '', 'https://www.facebook.com/rooma.ebrahim.7', 'Android', '', 'I love this area ', 'This is the first time, I do not have a minute knowledge ', 'My friend ', 'There is no ', 'In order to learn and gain experiences and have experience ', 'Yeah. Certainly ', '', 'Accepted', '2021-04-24 13:32:27', '', NULL),
(95, 'Hekmat khaled Abdelhamid ', 'جامعة السويس ', 'آداب ', 'انجليزي ', 'سنة اولي', '01024586284', 'khaledhekmat37@gmail.com', '', 'https://www.facebook.com/hekmat.khaled.376', 'mEditing', '', 'I have a passion for English. ', '1.English writing courses.\r\n2.Editing on top magazine articles,like:\r\nECHO\r\nCriterion\r\nUltra New Sletter', 'Rewan Mohamed ', 'I don\'t have. ', 'I want to develop my skills in English writing and editing. ', 'I\'m sure, I will benefit from joining SPE\r\nThis course will help me in English editing. ', '', 'Accepted', '2021-04-24 14:57:10', '', NULL),
(97, 'Mohamed Mahrous megahed ', 'Alexandria ', 'Engineering ', 'Civil', '4', '01286194659', 'megahedmohamed721@gmail.com', '', 'mohamedmegahed.1', 'Social', '', 'Gg', 'Gg', 'Ggg', 'Gg', 'Vg', 'Cgg', '', 'Rejected', '2021-04-25 02:26:59', 'Email sent', NULL),
(98, 'منار محمد حسن محمد', 'جامعة السويس', 'كلية التربية', 'بيوليوجي', 'فرقة تانية', '01061598920', 'manarmohamed3719765@gmail.com', '', 'https://www.facebook.com/profile.php?id=100020545127017', 'OC', '', 'لأنها متميزة واخببتها للغاية ', 'مسؤوليتها انها تساعدنا على تعلم بمهاررة ومساعدة المتطوعين على العمل بجدية', 'سلمي على كامل', 'لا', 'لأنها متميزة', 'Yes', 'اتمنى اني اخرج متعلمة كويس واكون مضيعتش وقت ولا مجهود', 'Accepted', '2021-04-25 10:55:44', '', NULL),
(99, 'Reem Mamoon', 'Suez', 'Science', 'Zoology', 'Second', '01024390234', 'remmamon24@gmail.com', '', 'https://www.facebook.com/profile.php?id=100001855016277', 'Energy', '', 'Because I\'m mediator and this committee may be suit to me.', 'Do campaigns ', 'I knew it from Facebook.', 'Yes, I am in AIESEC global organization.', 'Because I knew that SPE is the best chapter and which got prize.', 'Yes \r\nI think I\'ll develop soft skills and term work', '', 'Accepted', '2021-04-25 11:59:19', '', NULL),
(100, 'Nada Ali El_Ragy', 'Suez University', 'Faculty of Education', 'General Mathematics Department', 'Mathematics Department 2', '01285453828', 'nadaali203045@gmail.com', '', 'https://www.facebook.com/profile.php?id=100013921144457', 'OC', '', 'I have a passion for this field and I want to master it', 'He is responsible for organizing the activities of the chapter, such as events, excursions, competitions, etc.', 'Heba', 'I volunteered in many places and fields, such as the Voluntary Risala School, Chapters such as EEGS, IEEE,Vice President of El_Zatonaa Voluntary Company', 'I have heard good news about them, and I want to join them and gain additional experiences from them', 'Of course, I will benefit, any volunteer place you will join will give you skills and things, even if they are small but useful.I will benefit from the training and the latest events that I will participate in organizing it ', 'Thanks for this from its different', 'Accepted', '2021-04-25 19:24:43', '', NULL),
(101, 'Salem omar salem ', 'Suez university ', 'Petroleum and mining engineering ', 'Petroleum engineering Department ', '1', '01025450958', 'salemomar523@gmail.com', '', 'https://www.facebook.com/salem.omar.165685', 'Academy', '', 'To know more about my field', 'It is interesting in petroleum fields ', 'Me', 'Yes', 'To gain skills ', 'Yes', '', 'Accepted', '2021-04-25 21:56:37', '', NULL),
(102, 'Mahmoud ', 'Suez university ', 'Petroleum and mining engineering ', 'Petroleum engineering ', 'First team ', '01003145898', 'mahmoudsaid2824060@icloud.com', '', 'https://www.facebook.com/profile.php?id=100014236058437', 'Web', '', 'Recently, I have developed a passion towards web design and web development. I find it so exiting knowing the fact that almost all time we spend on the internet is on websites. To me, a cool website must have a cool design and a cool functionality that solves a specific problem or does a certain service. Web development is like a mix of all the things that I am passionate about, such as designing, programming, and problem solving . So,  I want to deal with these bright minds and learn from them. ', 'The responsibilities of the web development committee are to provide the website with technical support to ensure that everything is running well, to update the content on the website with the latest activities and events, and to make the online form for recruitment and any other form.  ', 'Eng/ omar mohamed hamed ', 'Honestly, I\'ve never been involved in any charity work, but I hope my first experience to volunteer to be with SPE . ', 'As for most students, academic life is no more than lecture attendance and course memorizing. But SPE community is different. They believe in their mission which is all about making the students capable of keeping with the global competitive job market by helping them in gaining the required technical knowledge, as well as, the different soft skills needed. All of this is provided by the extraordinary effort of the SPE community to break the daily routine of the students through field trips, training opportunities, extracurricular activities, opening doors for general sciences and languages, competitions, and many other activities that pulls us from our comfort zone. SPE really does improve the concept of volunteering to the youth. SPE cares for school students’ awareness about environment and energy and informs them about the importance of volunteering to the society, through the energy4me program, which is a very noble work. Finally, SPE is the largest individual-member organization serving managers, engineers, scientists and other professionals worldwide in the upstream segment of the oil and gas industry. SPE’s credential as an organization in the petroleum industry is outstanding as It is backed by the elite companies in the entire industry.', 'Definitely yes. Being a member in SPE is a life changing experience. With all the bright minds you are surrounded by and all the learning opportunities provided by the events and clubs and all the hands-on experience provided by internships , Benefits well guaranteed . I believe that the most important benefit I will ever have is being influential, that is, I have an impact on my colleagues, my society, and perhaps the global industry. Of course, gaining technical and non-technical skills is very beneficial but what is more beneficial is applying these skills in real life, which is what SPE exactly does.', '', 'Accepted', '2021-04-25 22:51:48', '', NULL),
(103, 'Mohamed Mahrous megahed ', 'Alexandria ', 'Engineering ', 'Civil ', '4', '01286194659', 'megahedmohamed721@gmail.com', '', 'mohamedmegahed.1', 'Offline', '', 'Gg', 'Gg', 'Gg', 'Very ', 'Ccc', 'Cc', 'Cc', 'Rejected', '2021-04-26 01:02:03', '', NULL),
(104, 'Karim Gharib Mahmoud', 'Suez university', 'Faculty of Computers and information', 'Cs', '2', '01017648667', 'karimgharib272@gmail.com', '', 'https://www.facebook.com/kemo.kareem.146', 'Web', '', 'for learn more skills about web development', 'Keep to deadlines.\r\nRespect for Others.', 'Noran Alaa ', 'No', 'Because I admire the content of the spe content and develop my skills.', 'yes, i will be useful by creating new ideas and help other', '', 'Accepted', '2021-04-26 03:47:22', '', NULL),
(105, 'Omaima Ahmed Dakrony', 'Suez School for Advanced Technical', 'Electricity', 'Department of Transmission and Distribution of Electric Power', 'Forth', '01156258730', 'omymahdakrony@gmail.com', '', 'https://www.facebook.com/omymah.dakrony', 'Web', '', 'Because I will gain experience in the field of web development and learn a lot of programming languages', '-SPE Website Administration.\r\n-Upload all our achievements to it.\r\n-Continuous development and updating of the website.\r\n-Create any form we need and the various Events.', 'Facebook', 'member R&D IEEE Region E', 'The Society of Petroleum Engineers (SPE) is a not-for-profit professional association whose more than 140,600 members in 144 countries are engaged in oil and gas exploration and production. SPE is a key resource for technical knowledge providing opportunities to exchange information at in-person and online events and training courses, publications, and other resources. SPE maintains offices in Dallas, London, Dubai, Kuala Lumpur, Calgary, Moscow and Houston.', 'Yes, you will benefit through teamwork with the team, learning and practicing programming languages, and learning Soft skills', 'No', 'Accepted', '2021-04-26 20:03:40', '', NULL),
(107, 'Manar Mahmoud ', 'Suez university ', 'Arts ', 'Philosophy ', 'One year ', '01155210326', 'mnarm9970@gmail.com', '', 'https://www.facebook.com/profile.php?id=100057268626553', 'OC', '', 'لانى بعرف انظم وقتى كويس كمان حابة اطور مهارة التواصل عندى   ', 'انها committeeتنظيم وتجهيز لل events ', 'اسماء محمد', 'لا', 'عرفتوا من صحابي ف الجامعة وحبيت اشترك واجرب حاجة جديدة  ', 'اكيد هكتسب مهارات جديدة زى التواصل مثلا ', '', 'Accepted', '2021-04-26 20:56:01', '', NULL),
(108, 'Omnia abdelhamed shahin', 'Menofia University', 'Faculty of Science', 'Geophysics department', 'Level 2', '01003361867', 'omniashahin21@gmail.com', '', 'https://www.facebook.com/omnia.shahen.906', 'Social', '', 'اتعلم اكتب محتوي كفكره.\r\n', 'Brandingللشابتر\r\nبيبقي كل الشغل اونلاين إن بماركت التيم وللشغل عن طريق اني بتواصل وبوصل فكره للجمهور عن طريق النت', 'معرفش اي حد في الشابتر بس نفسي اكون ميمبر فيه.', 'Pr member at EAGE Al-azhar', 'لأنه شابتر عظيم واكتر حاجه شدتني اهتمامكم بأي مناسبه خاصه اهتمامكم بيوم اليتيم والحاجات التطوعيه اللي ممكن تفرح حد فأنا بحب الزيارات دي وببقي مبسوطه اوي بيها.', 'اكيد ومتأكده جدا اني هتعلم وهستفيد اوي..\r\nاول حاجه الروح الجميله والناس اللي هتعامل معاها مع استفاده في المجال .من سيشنات بتتعمل وايفنتات وعمل كامب\r\nوالمعلومات اللي بتنزل دايما وطريقه كتابتها سلسه وبطلع منها باستفاده كويسه، فأنا اتمني اني اتعلم وأساعد الناس واوصلهم معلومه بسهوله.', ' ', 'Accepted', '2021-04-26 21:45:54', '', NULL),
(109, 'Fatma Mohamed Ahmed ', 'Suez university', 'آداب', 'تاريخ ', 'الفرقة الاولي', '01207038472', 'fatmamohamed141993@gmail.com', '', 'https://www.facebook.com/profile.php?id=100009485060468', 'Offline', '', 'علشان هو من المهارات اللي عايزة اتعلمها', 'لازم اكون عارفة كل المعلومات عن الخدمة او المنتج للتعامل مع العملاء و تحديد العملاء المستهدفين و لازم اكون عارفة ازاي اعرض الخدمة و كمان انا مسؤلة عن التوزيع', 'ميرنا محمود و مريم عماد', 'لأ معنديش', 'علشان سألت و قولولي ان ده اكتر شبتر هيضفلك و يساعدك ', 'احتمال اه علشان ده كان رأي الاغلبية اللي سألتهم ادخل انهي شبتر ', '', 'Accepted', '2021-04-26 22:10:39', '', NULL),
(110, 'Yehia Ebrahim Elsayed Mostafa', 'Suez University', 'Faculty Of Engineering', 'General', 'Preparatory ', '01093692562', 'yahiee22202@gmail.com', '', 'https://www.facebook.com/yhya.eprihem', 'Social', '', 'Because i interested in socialmedia work and i want to improve my skills ', 'It responsible for Posting on social media ', 'No one invite me, i like to join SPE because what i heard about it .', 'No,i haven\'t', 'Because it is one of the interesting chapters in the university ', 'Yes, by dealing with others in team work i\'ll improve my soft skills ', '', 'Accepted', '2021-04-26 23:18:04', '', NULL),
(111, 'Yasmine mohamed abdulaziz', 'Helwan', 'Interpreting and translation program', 'English Translation ', '1st', '01023912052', 'yasminemohamed1102@gmail.com', '', 'https://www.facebook.com/profile.php?id=100011623530268', 'IR', '', 'I searched about it beforehand, and also gained some experience from my fellow volunteers in other teams who is actually PR. So I would truly love to volunteer in this committee to gain more experience and more relations in SPE.', '\r\nIR is responsible for dealing with other companies or teams for the sake of the team. As well IR would be responsible for making deals and contracts for the team.', 'I saw a post on volunteering group for SPE event and I really loved to give it a try.', 'Currently I’m volunteering at Resala charity org. , also volunteer at شجرة بيتنا as an organizer, and I had experience with Egyptian Red Crescent as i volunteered in their last campaign.', 'I want to expand my skills for life work, as well as I seek for more experience and relations, so I truly hope I can reach my point in gaining these qualities with SPE.', 'As I said before I’m looking forward for gaining more experience and skills as these qualities is important for the life work. So I hope I can have an opportunity in joining SPE team.', '', 'Accepted', '2021-04-27 00:26:43', '', NULL),
(112, 'Omnia Elsayed', 'Suez university', 'Faculty of Arts and Humanities', 'Arabic Language', 'fourth level', '01098476879', 'aonysayed8@gmail.com', '', 'https://www.facebook.com/omnia.sayed.5059', 'Offline', '', 'I want to learn more about it', 'Must have confidence and skill to communicate ', 'some friends', 'Yes, Marathon Zayed ،yly,vitor , svt', 'a Gain new experiences', 'Yes, when working with the team and seeing new things ', '', 'Accepted', '2021-04-27 01:25:34', '', NULL),
(113, 'Nourhan Ashraf Ali Ahmed', 'Ain Shams University', 'Faculty of Al-alsun', 'English', 'Fourth year', '01016050468', 'nouriashraf03@gmail.com', '', 'LinkedIn♥️ https://www.linkedin.com/in/nourhan-ashraf-2840571a6  Facebook♥️ htwww.facebook.com/nouri.ashraf.1', 'BD', '', 'Four months ago, I was a Vice-head of Business Development Committee at a student activity and attended a workshop in this field, so I found myself having passion for it. It\'s really interesting.', 'If there is no Public Relations Committee in a student activity or any organisation, Business Development Committee or department is the one which is responsible for partnership and sponsorship. It is also responsible for editting any mistakes in the marketing plan. Furthermore, it is responsible for making plans for the team as a whole(like in companies)', 'I found a recommendation in a comment in a student activities group.', 'I was a Vice-head of Business Development Committee\r\nI am a PR member at an initiative called Youth leading Youth YLY\r\nI am a PR member at Success Hunter\r\nI am a marketing member at Albatross', 'To gain more experience in the field of business development.', 'In the recommendation, the comment has good words about you, and your many committees give the impression that you are professional as you can provide different knowledge in different fields.', '', 'Rejected', '2021-04-27 02:01:51', '', NULL);
INSERT INTO `recruit_applicants` (`id`, `name`, `university`, `faculty`, `department`, `level`, `mobile`, `gmail`, `uniemail`, `face`, `q0`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `status`, `date`, `emailed`, `comment`) VALUES
(114, 'Menna allah El Sayed helmi', 'Suez university', 'Faculty of Education', 'chemistry', 'Second Level', '01288228122', 'mennahelmy859@gmail.com', '', 'https://www.facebook.com/moka.mena.14', 'OC', '', 'Because of my passion for organization and in order to learn many skills in this field ', 'They are entrustedng out a specific work and the execution is collectively And branch out into vip\r\n, Logistics, coordination ', 'No one', 'Yes,I was in yly(youth leading youth) member of OC,in SvT member of pr,\r\nواتطوع حاليا في صندوق مكافحة وعلاج الادمان\r\nوايضا في برلمان الشباب والرياضة\r\nI was in vitor member of hr and in AiEsec member of cxb', 'In order to acquire new skills, to have another experience, and to develop my own skills ', 'I think so, because the institution is different from the other institutions that I worked with, and I believe that I have the ability to benefit in every way. ', 'Can I know after that about the rest of the committees.', 'Accepted', '2021-04-27 02:46:52', '', NULL),
(115, 'Reem Tamer Nasr', 'Suez University ', 'Faculty of Arts ', 'English department ', 'Sophomore ', '01092223162', 'reemtamer@icloud.com', '', 'https://www.facebook.com/rema.tameer', 'Energy', '', 'I like to learn and discover new things.  I want to have the benefit and benefit others as well.  It feels like a journey of self-discovery, new adventure and experience.', 'I think I have a role in learning all about the environment and renewable energy.  It also has an important role in spreading this knowledge, benefiting others, and raising awareness.', 'Aya Salah - Ahd Abdullah (former member)', '- Gernata Academy (online) as a Media head ,graphic designer and animator. \r\n- OFQ Science (online) as a graphic designer. \r\n- IEEE Arabic (online) as a translator. \r\n- IEEE SU SB as a Technical member. \r\n- Former social media head at WIE IEEE SU SB. \r\n- Former Media member at DSC SU. ', 'I take the risk. Hopefully, I can develop myself and learn a lot.', 'I hope..', '', 'Accepted', '2021-04-27 04:46:51', '', NULL),
(116, 'Alaa Rageb Ahmed Sadalden ', 'السويس', 'تربيه', 'كمياء', 'ثالثه', '01097954495', 'alaaragebahmed246810gmail.com', '', 'https://www.facebook.com/alaa.rageb.75', 'BD', '', 'احب اكتسب معلومات تفيدنى و اقدر افيد بيها غيري', 'اقدر اكتسب ثقه بنفسي هقدر افيد الاخرين عن طريق معلومات انا استفدت منها', 'Salma Adel ', ' عمل في صناع الحياه فى حمله شتاء \r\nHRDحاليا', 'عندى ثقه عندى القدره على الاقناع ', 'نعم \r\nهكتسب معلومات و خبرات اكتر هتساعدنى بعد كدا فى شغلى', 'انا حابه مجال  ده لانه بيخلينى اعرف المعلومه و ابحث عنها لغايه و اوصل لنتيجه ترضينى', 'Accepted', '2021-04-27 10:55:19', '', NULL),
(117, 'Hoda Abdelbast Mahmoud Muhammad ', 'Suez university ', 'Commerce ', 'Business administration ', 'Third ', '01014457767', 'eldoddodo2020@gmail.com', '', 'https://www.facebook.com/hoda.abdlbaset', 'Offline', '', 'Because I love this committee and I have courses about it to work it in future ', 'اني هساعد ف انتشاره بالدعاية وانها تكون جديدة غير الي فات كريتف بمعني اصح سوا اوف لاين او اون لاين', 'My friend ', 'No ,it\'s first tim to me in this chapter ', 'To help in work in future and experience in work ', ' Of course ', '', 'Accepted', '2021-04-28 02:08:30', '', NULL),
(118, 'Alaa Salahelden', 'Suez university ', 'Computers and information ', 'General ', 'Second year', '01227601315', 'mendesarmy943@gmail.com', '', 'https://www.facebook.com/loly.salah.9', 'Android', '', 'To learn more about android apps', 'Do the tasks, follow the head instructions to make the most benefit from the committee', 'Abdelrahman shahen', 'I joined other chapters like aapg and eegs in the it committee also in DSC and had certificates in them', 'To learn more in volunteering ,soft and hard skills', 'Yes by following the tasks and helping it to be better', '', 'Accepted', '2021-04-29 20:48:58', '', NULL),
(119, 'Reem Ali ', 'Suez', 'Fuclty of computer and information ', 'General ', 'Second', '01069820305', 'reemalimahmoud17@gmail.com', '', 'https://www.facebook.com/profile.php?id=100058841366762', 'Android', '', 'I want to get an experience about this committee ', 'Develops Android apps for the chapter', 'عبد الرحمن شاهين', 'No ', 'To develop my skills ', 'Yes ', '', 'Accepted', '2021-04-30 03:39:52', '', NULL),
(120, 'Abdulrahman Reyad  Abdulrehman Abdulbari ', 'International Unversity of Technologie Twintch', 'Faculty of  Engineering', 'Oil and Gas Engineering', '2 year (Semester 4)', '00697738680049', 'abdulrahmanvcs@gmail.com', '', 'i don\'t have', 'Android', '', 'Because this committee give us the chance to be star in our social ', 'It hepls us for many differents things ', 'Dr.Nasser Al-Muhafe', 'No,i dont have', 'Because i want to be good', 'Yes ', '', 'Rejected', '2021-04-30 14:27:58', '', NULL),
(122, 'Ahmed Himdan', 'Suez', 'Petroleum Engineering', 'Exploration', 'four', '0101111111121', 'ahmedhimdan828@gmail.com', '', 'https://www.facebook.com/ahmed.himdan.828/', 'Web', '', 'Because l know SPE is considered one of the most famous and successful activities at Suez University, I choose this committee because l study public relations and marketing, so I like to participate in all activities related to this field\r\n', ' so I like to participate in all activities related to this field\r\n', 'Because l know SPE is considered one of the most famous and successful activities at Suez University, I choose this committee because l study public relations and marketing, ', 'Because l know SPE is considered one of the most famous and successmarketing, so I like to participate in all activities related to this field\r\n', 'Because l know SPE is considered one of the most famous and successful activities at Suez University, I choose this committee because l study public relations and marketing, so I like to participate in all activities related to this field\r\n', 'successful activities at Suez University, I choose this committee because l study public relations and marketing, so I like to participate in all activities related to this field\r\n', 'Because l know SPE is considered one of the most famous and successful activities at Suez University,  because l study public relations and marketing, so I like to participate in all activities related to this field\r\n', 'Accepted', '2021-05-09 07:54:34', 'Email sent', NULL),
(123, 'Ali', 'suez', 'q', 'q', 'q', '0102323', 'ali@gmail.com', '', 'www.fb.com/ali', 'Web', '', 'For bla bla .....', 'For bla bla .....', 'For bla bla .....', 'For bla bla .....', 'For bla bla .....', 'For bla bla .....', 'For bla bla .....', '', '2021-05-09 08:03:35', '', NULL),
(124, 'Ahi Ahmed', 'Suez', 'Engineering', 'EXploration', 'Four', '01023223232', 'AhmedAli@gmai.com', '', 'WWW.FB.Com/Ali', 'Academy', '', 'Because l know SPE is considered one of the most famous and successful activities at Suez University, I choose this committee because l study public relations and marketing, so I like to participate in all activities related to this ', ' this committee because l study public relations and marketing, so I like to participate in all activities related to this ', 'I like to participate in all activities related to this ', 'I like to participate in all activities related to this ', 'I like to participate in all activities related to this ', 'I like to participate in all activities related to this ', '', 'Accepted', '2021-05-09 08:29:10', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_actionscheduler_actions`
--
ALTER TABLE `blog_actionscheduler_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `hook` (`hook`),
  ADD KEY `status` (`status`),
  ADD KEY `scheduled_date_gmt` (`scheduled_date_gmt`),
  ADD KEY `args` (`args`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `last_attempt_gmt` (`last_attempt_gmt`),
  ADD KEY `claim_id` (`claim_id`);

--
-- Indexes for table `blog_actionscheduler_claims`
--
ALTER TABLE `blog_actionscheduler_claims`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `date_created_gmt` (`date_created_gmt`);

--
-- Indexes for table `blog_actionscheduler_groups`
--
ALTER TABLE `blog_actionscheduler_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `slug` (`slug`(191));

--
-- Indexes for table `blog_actionscheduler_logs`
--
ALTER TABLE `blog_actionscheduler_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `log_date_gmt` (`log_date_gmt`);

--
-- Indexes for table `blog_commentmeta`
--
ALTER TABLE `blog_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `blog_ig_actions`
--
ALTER TABLE `blog_ig_actions`
  ADD UNIQUE KEY `id` (`contact_id`,`message_id`,`campaign_id`,`type`,`link_id`,`list_id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `message_id` (`message_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `blog_ig_blocked_emails`
--
ALTER TABLE `blog_ig_blocked_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_campaigns`
--
ALTER TABLE `blog_ig_campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `status` (`status`),
  ADD KEY `base_template_id` (`base_template_id`);

--
-- Indexes for table `blog_ig_contactmeta`
--
ALTER TABLE `blog_ig_contactmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `meta_ley` (`meta_key`);

--
-- Indexes for table `blog_ig_contacts`
--
ALTER TABLE `blog_ig_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wp_user_id` (`wp_user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `blog_ig_contacts_ips`
--
ALTER TABLE `blog_ig_contacts_ips`
  ADD PRIMARY KEY (`created_on`,`ip`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `blog_ig_contact_meta`
--
ALTER TABLE `blog_ig_contact_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `meta_ley` (`meta_key`);

--
-- Indexes for table `blog_ig_forms`
--
ALTER TABLE `blog_ig_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_links`
--
ALTER TABLE `blog_ig_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `message_id` (`message_id`),
  ADD KEY `link` (`link`(100));

--
-- Indexes for table `blog_ig_lists`
--
ALTER TABLE `blog_ig_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_lists_contacts`
--
ALTER TABLE `blog_ig_lists_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_mailing_queue`
--
ALTER TABLE `blog_ig_mailing_queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `blog_ig_queue`
--
ALTER TABLE `blog_ig_queue`
  ADD UNIQUE KEY `id` (`contact_id`,`campaign_id`,`requeued`,`options`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `requeued` (`requeued`),
  ADD KEY `timestamp` (`timestamp`),
  ADD KEY `priority` (`priority`),
  ADD KEY `count` (`count`),
  ADD KEY `error` (`error`),
  ADD KEY `ignore_status` (`ignore_status`);

--
-- Indexes for table `blog_ig_sending_queue`
--
ALTER TABLE `blog_ig_sending_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_temp_import`
--
ALTER TABLE `blog_ig_temp_import`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_ig_unsubscribe_feedback`
--
ALTER TABLE `blog_ig_unsubscribe_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_wc_cart`
--
ALTER TABLE `blog_ig_wc_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `last_modified` (`last_modified`),
  ADD KEY `created` (`created`);

--
-- Indexes for table `blog_ig_wc_guests`
--
ALTER TABLE `blog_ig_wc_guests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tracking_key` (`tracking_key`),
  ADD KEY `email` (`email`(191)),
  ADD KEY `most_recent_order` (`most_recent_order`),
  ADD KEY `version` (`version`);

--
-- Indexes for table `blog_ig_workflows`
--
ALTER TABLE `blog_ig_workflows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_ig_workflows_queue`
--
ALTER TABLE `blog_ig_workflows_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_links`
--
ALTER TABLE `blog_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `blog_options`
--
ALTER TABLE `blog_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `blog_postmeta`
--
ALTER TABLE `blog_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `blog_termmeta`
--
ALTER TABLE `blog_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `blog_terms`
--
ALTER TABLE `blog_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `blog_term_relationships`
--
ALTER TABLE `blog_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `blog_term_taxonomy`
--
ALTER TABLE `blog_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `blog_usermeta`
--
ALTER TABLE `blog_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `blog_yoast_indexable`
--
ALTER TABLE `blog_yoast_indexable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `object_type_and_sub_type` (`object_type`,`object_sub_type`),
  ADD KEY `object_id_and_type` (`object_id`,`object_type`),
  ADD KEY `permalink_hash_and_object_type` (`permalink_hash`,`object_type`),
  ADD KEY `subpages` (`post_parent`,`object_type`,`post_status`,`object_id`),
  ADD KEY `prominent_words` (`prominent_words_version`,`object_type`,`object_sub_type`,`post_status`);

--
-- Indexes for table `blog_yoast_indexable_hierarchy`
--
ALTER TABLE `blog_yoast_indexable_hierarchy`
  ADD PRIMARY KEY (`indexable_id`,`ancestor_id`),
  ADD KEY `indexable_id` (`indexable_id`),
  ADD KEY `ancestor_id` (`ancestor_id`),
  ADD KEY `depth` (`depth`);

--
-- Indexes for table `blog_yoast_migrations`
--
ALTER TABLE `blog_yoast_migrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_yoast_migrations_version` (`version`);

--
-- Indexes for table `blog_yoast_primary_term`
--
ALTER TABLE `blog_yoast_primary_term`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_taxonomy` (`post_id`,`taxonomy`),
  ADD KEY `post_term` (`post_id`,`term_id`);

--
-- Indexes for table `blog_yoast_seo_links`
--
ALTER TABLE `blog_yoast_seo_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_direction` (`post_id`,`type`),
  ADD KEY `indexable_link_direction` (`indexable_id`,`type`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `election_poll`
--
ALTER TABLE `election_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `election_users`
--
ALTER TABLE `election_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruit_applicants`
--
ALTER TABLE `recruit_applicants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_actionscheduler_actions`
--
ALTER TABLE `blog_actionscheduler_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_actionscheduler_claims`
--
ALTER TABLE `blog_actionscheduler_claims`
  MODIFY `claim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_actionscheduler_groups`
--
ALTER TABLE `blog_actionscheduler_groups`
  MODIFY `group_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_actionscheduler_logs`
--
ALTER TABLE `blog_actionscheduler_logs`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_commentmeta`
--
ALTER TABLE `blog_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_blocked_emails`
--
ALTER TABLE `blog_ig_blocked_emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_campaigns`
--
ALTER TABLE `blog_ig_campaigns`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_contactmeta`
--
ALTER TABLE `blog_ig_contactmeta`
  MODIFY `meta_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_contacts`
--
ALTER TABLE `blog_ig_contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_ig_contact_meta`
--
ALTER TABLE `blog_ig_contact_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_forms`
--
ALTER TABLE `blog_ig_forms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_ig_links`
--
ALTER TABLE `blog_ig_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_lists`
--
ALTER TABLE `blog_ig_lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_ig_lists_contacts`
--
ALTER TABLE `blog_ig_lists_contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_ig_mailing_queue`
--
ALTER TABLE `blog_ig_mailing_queue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_sending_queue`
--
ALTER TABLE `blog_ig_sending_queue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_temp_import`
--
ALTER TABLE `blog_ig_temp_import`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_unsubscribe_feedback`
--
ALTER TABLE `blog_ig_unsubscribe_feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_wc_cart`
--
ALTER TABLE `blog_ig_wc_cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_wc_guests`
--
ALTER TABLE `blog_ig_wc_guests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_workflows`
--
ALTER TABLE `blog_ig_workflows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_ig_workflows_queue`
--
ALTER TABLE `blog_ig_workflows_queue`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_links`
--
ALTER TABLE `blog_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_options`
--
ALTER TABLE `blog_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1063;

--
-- AUTO_INCREMENT for table `blog_postmeta`
--
ALTER TABLE `blog_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `blog_termmeta`
--
ALTER TABLE `blog_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_terms`
--
ALTER TABLE `blog_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_term_taxonomy`
--
ALTER TABLE `blog_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_usermeta`
--
ALTER TABLE `blog_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_yoast_indexable`
--
ALTER TABLE `blog_yoast_indexable`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blog_yoast_migrations`
--
ALTER TABLE `blog_yoast_migrations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_yoast_primary_term`
--
ALTER TABLE `blog_yoast_primary_term`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_yoast_seo_links`
--
ALTER TABLE `blog_yoast_seo_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `election_poll`
--
ALTER TABLE `election_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `election_users`
--
ALTER TABLE `election_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172561;

--
-- AUTO_INCREMENT for table `recruit_applicants`
--
ALTER TABLE `recruit_applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
