-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2015 at 06:23 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `quiz` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `answer`, `quiz`) VALUES
(0, 'How many desk lamps do you need to represent the decimal number 7 in binary?', '3', 0),
(1, 'How many times can you tear a phonebook with 128 pages (i.e., sheets of paper) in half, each time throwing away one of the halves, before only one page remains?', '7', 0),
(2, 'How many times can you tear a 1,024-page phonebook in half, each time throwing away one of the halves, before only one page remains?', '10', 0),
(3, 'How many bits do you need, minimally, in order to represent the (decimal) number 7\nin binary?', '3', 0),
(4, 'How many n-letter keywords are possible when using Vigenere''s cipher, assuming a 26-letter alphabet?', 'n ^ 26', 0),
(6, 'A function that calls itself is said to be:', 'recursive', 0),
(7, 'How many bits does a single hexadecimal digit (e.g., F) ordinarily represent?', '4', 0),
(8, 'How many distinct values can you represent with a sequence of 3 bits?', '8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `points` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `date`, `points`) VALUES
(5, '2015-05-28 21:18:34', 40),
(5, '2015-05-28 21:20:48', 20),
(5, '2015-05-28 22:08:27', 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(2, 'nnascim273@hotmail.com', '$1$R0kPKL5q$KfjCn58k/Y0ZtqBir8JkL.', 'Nilson'),
(5, 'ivan.corchadoruiz001@mymdc.net', '$1$cuK/89G7$9R/tiPVQuPChjZJUuycGO.', 'Ivan Corchado');

-- --------------------------------------------------------

--
-- Table structure for table `wrong_answers`
--

CREATE TABLE IF NOT EXISTS `wrong_answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `w1` text COLLATE utf8_unicode_ci,
  `w2` text COLLATE utf8_unicode_ci,
  `w3` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `wrong_answers`
--

INSERT INTO `wrong_answers` (`id`, `w1`, `w2`, `w3`) VALUES
(0, '2', 'log(2)7', '7'),
(1, '6', '10', '64'),
(2, '32', '512', '1024'),
(3, '4', '7', '8'),
(4, 'n', '26', '26 ^ n'),
(6, 'an infinite loop', 'buggy', 'iterative'),
(7, '2', '8', '15'),
(8, '3', '6', '9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wrong_answers`
--
ALTER TABLE `wrong_answers`
  ADD CONSTRAINT `wrong_answers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `questions` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
