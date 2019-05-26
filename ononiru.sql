-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 08:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ononiru`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessgroup`
--

CREATE TABLE `accessgroup` (
  `id` int(11) NOT NULL,
  `accessid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `allpostaccess` text NOT NULL,
  `newpostaccess` text NOT NULL,
  `categoriesaccess` text NOT NULL,
  `tagsaccess` text NOT NULL,
  `targettingaccess` text NOT NULL,
  `postarchiveaccess` text NOT NULL,
  `picturesaccess` text NOT NULL,
  `videosaccess` text NOT NULL,
  `audioaccess` text NOT NULL,
  `filesaccess` text NOT NULL,
  `commentsaccess` text NOT NULL,
  `tvaccess` text NOT NULL,
  `addonpageaccess` text NOT NULL,
  `adsaccess` text NOT NULL,
  `pollsaccess` text NOT NULL,
  `artisansaccess` text NOT NULL,
  `ticketsaccess` text NOT NULL,
  `messagesaccess` text NOT NULL,
  `livesupportaccess` text NOT NULL,
  `emailsaccess` text NOT NULL,
  `quickmessageaccess` text NOT NULL,
  `usersaccess` text NOT NULL,
  `trafficsettings` text NOT NULL,
  `settingsaccess` text NOT NULL,
  `articlessettingsaccess` text NOT NULL,
  `termsaccess` text NOT NULL,
  `policyaccess` text NOT NULL,
  `systemtrackingaccess` text NOT NULL,
  `interestmappingaccess` text NOT NULL,
  `systemreport` text NOT NULL,
  `serverreportaccess` text NOT NULL,
  `generealreportaccess` text NOT NULL,
  `reminderaccess` text NOT NULL,
  `revenueaccess` text NOT NULL,
  `businessaccess` text NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `lockscreen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lastseen` int(11) NOT NULL,
  `lastlogin` int(11) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `lockscreen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `ad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articlesettings`
--

CREATE TABLE `articlesettings` (
  `id` int(11) NOT NULL,
  `fontsize` double NOT NULL,
  `fontsizemetric` varchar(10) NOT NULL,
  `lineheight` double NOT NULL,
  `lineheigtmetric` varchar(10) NOT NULL,
  `imgpostload` int(11) NOT NULL,
  `linktabsep` int(11) NOT NULL,
  `titlesize` varchar(5) NOT NULL,
  `titlefont` varchar(30) NOT NULL,
  `articlefont` varchar(30) NOT NULL,
  `removeuimg` int(11) NOT NULL,
  `removebrokenlinks` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `publishdate` int(11) NOT NULL,
  `linkshare` int(11) NOT NULL,
  `facebookshare` int(11) NOT NULL,
  `twittershare` int(11) NOT NULL,
  `runseo` int(11) NOT NULL,
  `highlight` int(11) NOT NULL,
  `authorfontsize` double NOT NULL,
  `authorfontsizemetric` varchar(10) NOT NULL,
  `publishdatesize` double NOT NULL,
  `publishdatesizemetric` varchar(10) NOT NULL,
  `articlecolor` varchar(20) NOT NULL,
  `titlecolor` varchar(20) NOT NULL,
  `publishdatecolor` varchar(20) NOT NULL,
  `authorcolor` varchar(20) NOT NULL,
  `authorfont` varchar(20) NOT NULL,
  `pubdatefont` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `browser`
--

CREATE TABLE `browser` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ie` int(11) NOT NULL,
  `chrome` int(11) NOT NULL,
  `firefox` int(11) NOT NULL,
  `operamini` int(11) NOT NULL,
  `safari` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `edge` int(11) NOT NULL,
  `uc` int(11) NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryId` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateTime` int(11) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `state` int(11) NOT NULL,
  `color` varchar(100) NOT NULL DEFAULT 'random',
  `icon_type` varchar(10) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `dateTime` int(11) NOT NULL,
  `article` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `avatar` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `com_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentsettings`
--

CREATE TABLE `commentsettings` (
  `id` int(11) NOT NULL,
  `commenting` int(11) NOT NULL,
  `viewing` int(11) NOT NULL,
  `replying` int(11) NOT NULL,
  `requirelogin` int(11) NOT NULL,
  `replynote` int(11) NOT NULL,
  `follownote` int(11) NOT NULL,
  `noteall` int(11) NOT NULL,
  `bannedwordalert` int(11) NOT NULL,
  `blockdirected` int(11) NOT NULL,
  `blockinsultivedirected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `RCC` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `company_id`, `name`, `RCC`, `sector`, `location`, `logo`, `email`, `phone1`, `user_id`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ABSCOEC-CECKWFCW-1332533', 'Oando Oils PLC', 'NCC-WCWCW-2C', 'Oil and Gas', 'Lagos,Nigeria', 'http://storage.com/path', 'oando@oandoplc.ng', '09238472832', 'dnwenicwo-qfqefwfwfw-fwqfqfq', 1, '2019-05-17 17:31:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `url_id` varchar(10) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `body` text NOT NULL,
  `state` varchar(10) NOT NULL,
  `place` varchar(10) NOT NULL,
  `reed` varchar(10) NOT NULL,
  `new` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `tablet` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `unknown` int(11) NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `device` text NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `hash` varchar(1000) NOT NULL,
  `compressed` varchar(100) NOT NULL,
  `upload_user` varchar(32) NOT NULL,
  `update_date` int(11) NOT NULL,
  `article_id` varchar(32) NOT NULL,
  `use_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `company_id` varchar(150) NOT NULL,
  `salary_range` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL,
  `qualification` text NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `visits` int(11) NOT NULL,
  `age` int(10) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `gender` int(3) NOT NULL,
  `experience_level` int(11) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_id`, `company_id`, `salary_range`, `description`, `title`, `location`, `qualification`, `category_id`, `visits`, `age`, `sector`, `status`, `gender`, `experience_level`, `working_hours`, `education`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '15581147445cdef1b89fd81', 'ABSCOEC-CECKWFCW-1332533', '130,000-150,000', 'Be a Bar tender like no other\r\n\r\n                                        Company is a 2016 Iowa City-born start-up that develops consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien\r\n', 'Bar Tender At Oando', 'Enugu,Nigeria.', 'Know how to drink kpami well\r\n\r\nExperience in video production a plus or, at a minimum, a willingness to learn\r\n\r\nExperience using Invision a plus\r\n\r\nCross-browser and platform testing as standard pra', '', 1, 18, 'Oil', 1, 1, 4, '8:00:00AM -17:00:00PM', 'SSCE Min with the following \r\nAdvanced degree or equivalent experience in graphic and web design\r\n\r\nAbility to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices\r\n\r\nMust be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service\r\n\r\nExcellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback\r\n\r\n3 or more years of professional design experience', '2019-05-26 18:26:38', '2019-05-18 03:16:39', NULL),
(3, '15581149085cdef25cc947f', 'ABSCOEC-CECKWFCW-1332533', '100,000-150,000', 'Get the best jobs done\r\n\r\n                                        Company is a 2016 Iowa City-born start-up that develops consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien\r\n', 'Receptionist At Oando Oil Plc', 'Lagos,Nigeria', 'Smart Guy\r\n\r\nExperience in video production a plus or, at a minimum, a willingness to learn\r\n\r\nExperience using Invision a plus\r\n\r\nCross-browser and platform testing as standard practice\r\n\r\nProficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)\r\n\r\nAbility to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS', '', 7, 20, 'Oil And Gas', 1, 2, 2, '13:00:32AM - 17:00:00PM ', 'Bsc In CSC or related', '2019-05-26 18:26:19', '0000-00-00 00:00:00', NULL),
(4, '15581150055cdef2bdb085b', 'ABSCOEC-CECKWFCW-1332533', '200,000-450,000', 'Work as a chef with us\r\n                                        Company is a 2016 Iowa City-born start-up that develops consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien\r\n', 'Chef person At Oando Oil Plc', 'Lagos,Nigeria', 'Smart Guy\r\n\r\nExperience in video production a plus or, at a minimum, a willingness to learn\r\n\r\nExperience using Invision a plus\r\n\r\nCross-browser and platform testing as standard practice\r\n\r\nProficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)\r\n\r\nAbility to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS', '', 0, 20, 'Enginerring', 1, 1, 1, '13:00:32', 'Advanced degree or equivalent experience in graphic and web design  Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices  Must be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service  Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback  3 or more years of professional design experience', '2019-05-21 20:53:39', '0000-00-00 00:00:00', NULL),
(5, '87654345678poigfxjhgbnmlqxq', 'ABSCOEC-CECKWFCW-1332533', '450,000 - 500,000', 'Become a software engineer at Andela and work with others as a team to bring solutions to real world problems.', 'Software Engineer At Andela', 'Lagos,Nigeria', 'Proficiency in HTML,CSS,PHP,MYSQL,Bootstrap,Ajax,Graphql,RESTful API,devops for at least mimimum of 6 years', 'ASDFEQQ-QFQCWFDW2FW-QVQVQ-GVB4EBE', 5, 15, 'Information Technology', 1, 3, 6, '9:00am - 4:00pm', 'Not Required. ', '2019-05-26 18:43:17', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_shortlisted_candidates`
--

CREATE TABLE `jobs_shortlisted_candidates` (
  `id` int(11) NOT NULL,
  `sc_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_shortlisted_candidates`
--

INSERT INTO `jobs_shortlisted_candidates` (`id`, `sc_id`, `user_id`, `job_id`, `company_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1558118163sc5cdeff1356f3e6.88356172', 'ddwdwdcwo-qfqefwfwfw-ww', '15581147445cdef1b89fd81', 'ABSCOEC-CECKWFCW-1332533', 1, '2019-05-17 18:36:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `is_shortlisted` tinyint(1) NOT NULL,
  `cv_id` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `user_id`, `company_id`, `is_shortlisted`, `cv_id`, `updated_at`, `created_at`, `deleted_at`) VALUES
(11, '15581150055cdef2bdb085b', 'ddwdwdcwo-qfqefwfwfw-ww', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-23 17:33:02', NULL),
(12, '15581150055cdef2bdb085b', 'ddwdwdcwo-qfqefwfwfw-w', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-23 17:34:16', NULL),
(13, '15581150055cdef2bdb085b', '5ce6d9b18976a1558632881', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-23 17:34:48', NULL),
(14, '15581147445cdef1b89fd81', 'hgfrdfcgvbhjnkmlmkjh', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-24 15:07:21', NULL),
(15, '15581149085cdef25cc947f', 'hgfrdfcgvbhjnkmlmkjh', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-25 20:24:36', NULL),
(16, '15581150055cdef2bdb085b', 'hgfrdfcgvbhjnkmlmkjh', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-25 20:24:59', NULL),
(17, '87654345678poigfxjhgbnmlqxq', 'hgfrdfcgvbhjnkmlmkjh', 'ABSCOEC-CECKWFCW-1332533', 0, '', NULL, '2019-05-26 18:40:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_application_cv`
--

CREATE TABLE `job_application_cv` (
  `id` int(11) NOT NULL,
  `cv_id` varchar(200) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `path` varchar(200) NOT NULL,
  `job_subscriber_id` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application_cv`
--

INSERT INTO `job_application_cv` (`id`, `cv_id`, `user_id`, `path`, `job_subscriber_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '1558117343cv5cdefbdf0fe9d3.48644622', 'ddwdwdcwo-qfqefwfwfw-ww', '15581173435cdefbdf0f97e.pdf', NULL, '2019-05-17 18:22:23', NULL, NULL),
(3, '1558117432cv5cdefc385a1e15.31165629', 'ddwdwdcwo-qfqefwfwfw-w', '15581174325cdefc3859d60.pdf', NULL, '2019-05-17 18:23:52', NULL, NULL),
(4, '1558720710cv5ce830c6a1ef96.29013677', NULL, '15587207105ce830c6a1a60.pdf', NULL, '2019-05-24 17:58:30', NULL, NULL),
(5, '1558721154cv5ce83282b00eb3.04554758', NULL, '15587211545ce83282afc54.pdf', '5ce83282add5e1558721154812a200165f9f595d7f37cf4062f89d1', '2019-05-24 18:05:54', NULL, NULL),
(6, '1558721279cv5ce832ff58f651.14763763', NULL, '15587212795ce832ff589f9.pdf', '5ce832ff56f7f1558721279812a200165f9f595d7f37cf4062f89d1', '2019-05-24 18:07:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `job_category_id` varchar(250) NOT NULL,
  `display_name` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `available_jobs` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `job_category_id`, `display_name`, `icon`, `available_jobs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ASDFEQQ-QFQCWFDW2FW-QVQVQ-GVB4EBE', 'Web Design & IT', '                          <i class=\"huge brown car icon categories-img\" style=\"margin: auto;\"></i>', 293, '2019-05-26 18:37:36', NULL, NULL),
(2, 'SDRWQWEFQW-EVWVWB-4WE-FECc', 'Art and multimedia', '                          <i class=\"huge yellow bullhorn icon categories-img\" style=\"margin: auto;\"></i>', 12, '2019-05-26 18:37:40', NULL, NULL),
(3, 'ASOIUYWGCW-VWCQCNIEQ-QECQSCXQ', 'Account & Finance', '                          <i class=\"huge green bullseye icon categories-img\" style=\"margin: auto;\"></i>', 144, '2019-05-26 18:37:52', NULL, NULL),
(4, 'SSCWQDVVC-WUYGBNCQ-WDCQCA', 'Engineering', '                          <i class=\"huge bug orange icon categories-img\" style=\"margin: auto;\"></i>', 40, '2019-05-26 18:37:47', NULL, NULL),
(5, 'SKJYTFVBNWCX-HGVBNKJHGCX-WCXGVBNWM', 'Oil & Gas', '', 33, '2019-05-26 18:37:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_subscribers`
--

CREATE TABLE `job_subscribers` (
  `id` int(11) NOT NULL,
  `job_subscribers_id` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `job_subscription_plan_id` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_subscribers`
--

INSERT INTO `job_subscribers` (`id`, `job_subscribers_id`, `status`, `user_id`, `email`, `phone_number`, `job_subscription_plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, '5ce82f40078ca1558720320812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 17:52:00', NULL, NULL),
(12, '5ce83073a81af1558720627812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 17:57:07', NULL, NULL),
(13, '5ce8308f4fa971558720655812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 17:57:35', NULL, NULL),
(14, '5ce830c6a00741558720710812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 17:58:30', NULL, NULL),
(15, '5ce83282add5e1558721154812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 18:05:54', NULL, NULL),
(16, '5ce832ff56f7f1558721279812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-24 18:07:59', NULL, NULL),
(17, '5ceadd2b0181a1558895915812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '11a38b9a-b3da-360f-9353-a5a725514269', '2019-05-26 18:38:35', NULL, NULL),
(18, '5ceadd572cd791558895959812a200165f9f595d7f37cf4062f89d1', 0, NULL, 'johnsonmmessilo19@gmail.com', NULL, '25769c6c-d34d-4bfe-ba98-e0ee856f3e7a', '2019-05-26 18:39:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_subscription_plan`
--

CREATE TABLE `job_subscription_plan` (
  `id` int(11) NOT NULL,
  `plan_id` varchar(200) NOT NULL,
  `requirements` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_subscription_plan`
--

INSERT INTO `job_subscription_plan` (`id`, `plan_id`, `requirements`, `name`, `count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'e4eaaaf2-d142-11e1-b3e4-080027620cdd', '[\"email\"]', 'Basic', 0, '2019-05-24 17:17:34', NULL, NULL),
(2, '11a38b9a-b3da-360f-9353-a5a725514269', '[\"email\",\"phonenumber\"]', 'Premium', 0, '2019-05-24 18:07:46', NULL, NULL),
(3, '25769c6c-d34d-4bfe-ba98-e0ee856f3e7a', '[\"email\",\"phonenumber\",\"cv\"]', 'Classic', 0, '2019-05-24 18:07:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ip` text NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `windows` int(11) NOT NULL,
  `ios` int(11) NOT NULL,
  `android` int(11) NOT NULL,
  `linux` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postid` varchar(30) NOT NULL,
  `dateTime` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `tags` text NOT NULL,
  `body` text NOT NULL,
  `state` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `show_every` int(11) NOT NULL,
  `schedule_date` int(11) NOT NULL,
  `schedule` int(11) NOT NULL,
  `images` text NOT NULL,
  `main_image` varchar(1000) NOT NULL,
  `videos` text NOT NULL,
  `files` text NOT NULL,
  `clicks` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `display` int(11) NOT NULL,
  `commenting` int(11) NOT NULL,
  `filter_comments` int(11) NOT NULL,
  `featured_image` int(11) NOT NULL,
  `featured_image_name` varchar(1000) NOT NULL,
  `location_target` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state_loc` varchar(50) NOT NULL,
  `followup` varchar(32) NOT NULL,
  `widget` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `meta` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_interaction`
--

CREATE TABLE `post_interaction` (
  `id` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `post_id` varchar(50) NOT NULL,
  `clicks` int(11) NOT NULL,
  `percent_read` int(11) NOT NULL,
  `time_spent` int(11) NOT NULL,
  `session_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_stat`
--

CREATE TABLE `post_stat` (
  `id` int(11) NOT NULL,
  `article` varchar(30) NOT NULL,
  `clicks` int(11) NOT NULL,
  `st_time` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `display` int(11) NOT NULL,
  `users` text NOT NULL,
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recruiting`
--

CREATE TABLE `recruiting` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `business` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE `referal` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `source` text NOT NULL,
  `organic` int(11) NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `postid` varchar(30) NOT NULL,
  `dateTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `line_height` int(11) NOT NULL,
  `font_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `survey_id` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `head` text NOT NULL,
  `body` text NOT NULL,
  `dateTime` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `post_id` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `dbirth` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dateTime` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `lastseen` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uses_survey` int(11) NOT NULL,
  `uses_ads` int(11) NOT NULL,
  `uses_business` int(11) NOT NULL,
  `ads_state` int(11) NOT NULL,
  `survey_state` int(11) NOT NULL,
  `interests` text NOT NULL,
  `uses_job` int(11) NOT NULL,
  `job_state` int(11) NOT NULL,
  `assertion` int(11) NOT NULL DEFAULT '1',
  `ip` text NOT NULL,
  `frequency` varchar(50) NOT NULL,
  `avatar` int(11) NOT NULL,
  `profileImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `email`, `password`, `name`, `sname`, `dbirth`, `sex`, `dateTime`, `state`, `lastseen`, `visits`, `phone`, `uses_survey`, `uses_ads`, `uses_business`, `ads_state`, `survey_state`, `interests`, `uses_job`, `job_state`, `assertion`, `ip`, `frequency`, `avatar`, `profileImage`) VALUES
(1, 'dnwenicwo-qfqefwfwfw-fwqfqfq', 'codemon', 'johnsonmessilo19@gmail.com', '1dj2998vqojifud91873t8ue91u38y7t7', 'Alfreed', 'Johnson-Awah', '05/03/2000', 'Male', 3333523, 33, 23, 0, '08160583918', 0, 0, 0, 0, 0, '', 1, 0, 1, '127.0.0.1', '', 0, ''),
(2, 'ddwdwdcwo-qfqefwfwfw-ww', 'applicant1', 'applicant@gmail.com', 'iuvyctbgyftrxjbknyuftcrxjbhvcgj', 'Applicant', 'One', '02/23/1992', 'Female', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 1, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `postid` varchar(30) NOT NULL,
  `users` text NOT NULL,
  `count` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `stay_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `multiple` int(11) NOT NULL,
  `curently` int(11) NOT NULL,
  `pages` text NOT NULL,
  `referal` text NOT NULL,
  `st_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessgroup`
--
ALTER TABLE `accessgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articlesettings`
--
ALTER TABLE `articlesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browser`
--
ALTER TABLE `browser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentsettings`
--
ALTER TABLE `commentsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_shortlisted_candidates`
--
ALTER TABLE `jobs_shortlisted_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application_cv`
--
ALTER TABLE `job_application_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_subscribers`
--
ALTER TABLE `job_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_subscription_plan`
--
ALTER TABLE `job_subscription_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_interaction`
--
ALTER TABLE `post_interaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_stat`
--
ALTER TABLE `post_stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiting`
--
ALTER TABLE `recruiting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referal`
--
ALTER TABLE `referal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessgroup`
--
ALTER TABLE `accessgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlesettings`
--
ALTER TABLE `articlesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `browser`
--
ALTER TABLE `browser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentsettings`
--
ALTER TABLE `commentsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs_shortlisted_candidates`
--
ALTER TABLE `jobs_shortlisted_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_application_cv`
--
ALTER TABLE `job_application_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_subscribers`
--
ALTER TABLE `job_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job_subscription_plan`
--
ALTER TABLE `job_subscription_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_interaction`
--
ALTER TABLE `post_interaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_stat`
--
ALTER TABLE `post_stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruiting`
--
ALTER TABLE `recruiting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
