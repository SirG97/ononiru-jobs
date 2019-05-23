-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 01:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

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

--
-- Dumping data for table `accessgroup`
--

INSERT INTO `accessgroup` (`id`, `accessid`, `name`, `allpostaccess`, `newpostaccess`, `categoriesaccess`, `tagsaccess`, `targettingaccess`, `postarchiveaccess`, `picturesaccess`, `videosaccess`, `audioaccess`, `filesaccess`, `commentsaccess`, `tvaccess`, `addonpageaccess`, `adsaccess`, `pollsaccess`, `artisansaccess`, `ticketsaccess`, `messagesaccess`, `livesupportaccess`, `emailsaccess`, `quickmessageaccess`, `usersaccess`, `trafficsettings`, `settingsaccess`, `articlessettingsaccess`, `termsaccess`, `policyaccess`, `systemtrackingaccess`, `interestmappingaccess`, `systemreport`, `serverreportaccess`, `generealreportaccess`, `reminderaccess`, `revenueaccess`, `businessaccess`, `created`) VALUES
(1, '4324ri50pn41tu6154mkiq', 'Chief Editor', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":true,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', 1554281179),
(11, '2096an80qu40fp1730nhfw', 'Supervisor', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":true,\"WriteAccess\":true,\"SetAccess\":true,\"EditAccess\":true,\"DeleteAccess\":true}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', '{\"ReadAccess\":false,\"WriteAccess\":false,\"SetAccess\":false,\"EditAccess\":false,\"DeleteAccess\":false}', 1555671850);

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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `pin`, `lockscreen`) VALUES
(1, 'admin', '801747fa81efefdf95f3f8c33fcff75e', '1234', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlesettings`
--
ALTER TABLE `articlesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `browser`
--
ALTER TABLE `browser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `commentsettings`
--
ALTER TABLE `commentsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;

--
-- AUTO_INCREMENT for table `post_interaction`
--
ALTER TABLE `post_interaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_stat`
--
ALTER TABLE `post_stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recruiting`
--
ALTER TABLE `recruiting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
