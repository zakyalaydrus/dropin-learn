-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 04:22 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dropin`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `name`, `description`) VALUES
(1, 'Farmasi 2003', 'Ini group Farmasi 2003 OK!'),
(2, 'Nurul Fikri-es', 'Tempat ngumpul anak-anak NF euy!');

-- --------------------------------------------------------

--
-- Table structure for table `groups_alias`
--

CREATE TABLE IF NOT EXISTS `groups_alias` (
  `alias_name` varchar(100) NOT NULL,
  `group_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`alias_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups_alias`
--

INSERT INTO `groups_alias` (`alias_name`, `group_id`) VALUES
('farmasi.2003', 1),
('nurul.fikri', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`) VALUES
(1, 'admin', 'System administrators.');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `topic_url` varchar(100) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `name`, `description`, `topic_url`) VALUES
(1, 'Matematika Diskrit', 'Matematika diskrit adalah...', 'matematika-diskrit'),
(2, 'Farmakologi Klinis', 'Farmakologi klinis adalah...', 'farmakologi-klinis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login` varchar(18) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_login` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`, `last_login`, `active`) VALUES
(1, 'Administrator', 'admin@localhost', 'admin', '$2a$12$SR04o2/JNV5ZoVGZNgPiiezqM2f5D0eVDXsSDoWcfQqg/mST6O6Ye', '2013-04-19', 1),
(2, 'Nurul Maulidiah', 'lia.sf07@gmail.com', 'lia', '$2a$12$SR04o2/JNV5ZoVGZNgPiiezqM2f5D0eVDXsSDoWcfQqg/mST6O6Ye', '2013-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_activity`
--

CREATE TABLE IF NOT EXISTS `users_activity` (
  `user_id` int(5) unsigned NOT NULL,
  `activity_mark` varchar(100) NOT NULL,
  `time` time DEFAULT NULL,
  `point` int(5) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_activity`
--

INSERT INTO `users_activity` (`user_id`, `activity_mark`, `time`, `point`) VALUES
(1, '0', '00:20:13', 10),
(2, '10', '00:20:13', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users_alias`
--

CREATE TABLE IF NOT EXISTS `users_alias` (
  `alias_name` varchar(100) NOT NULL,
  `user_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`alias_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_alias`
--

INSERT INTO `users_alias` (`alias_name`, `user_id`) VALUES
('nurul.maulidiah', 2),
('yayan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE IF NOT EXISTS `users_permissions` (
  `user_id` mediumint(8) NOT NULL,
  `permission_id` mediumint(8) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_permissions`
--

INSERT INTO `users_permissions` (`user_id`, `permission_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE IF NOT EXISTS `users_profile` (
  `user_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL DEFAULT 'Dropin User',
  `email` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`user_id`, `name`, `display_name`, `email`, `birthday`) VALUES
(1, 'yayan', 'yayan', 'yansyaf@gmail.com', '1985-06-04'),
(2, 'nurul maulidiah', 'nurul', 'lia.sf07@gmail.com', '1988-11-17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
