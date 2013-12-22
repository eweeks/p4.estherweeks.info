-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 01:14 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estherwe_p4_estherweeks_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) NOT NULL,
  `date_start` varchar(255) NOT NULL,
  `date_end` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `film_base` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `iso` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `pos_neg` varchar(255) NOT NULL,
  `push` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `stored` varchar(255) NOT NULL,
  `scanned` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `starred` varchar(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `number`, `date_start`, `date_end`, `name`, `format`, `film_base`, `camera`, `iso`, `color`, `pos_neg`, `push`, `tags`, `stored`, `scanned`, `projects`, `starred`, `photographer`, `created`, `modified`, `notes`) VALUES
(2, 'PC145-1000002', '08/06/2013', '08/26/2013', 'fox edited', '135', 'RXP-Provia 400X', 'EOS-3', 3200, 'Color', 'Positive', '', 'Fox, Grand Tetons', 'Box 2', 'No', '', 'No', 'Carl Calhoun', '', '1387729776', 'Changed ISO'),
(3, '3', '12/04/2013', '12/25/2013', 'Mesa', '135', 'RXP-Provia 400X', 'RB-67', 50, 'Black & White', 'Negative', 'No', 'Mesa, Skiing', 'Box 3', 'No', 'Calendar 2013', 'No', 'Carl Calhoun', '1386891471', '1387719138', ''),
(4, '4', '12/02/2013', '', 'Grand Teton', '135', 'RXP-Provia 400X', 'EOS-3', 50, 'Color', 'Positive', 'no', 'mountains, rivers', 'box 2', 'No', 'None', 'No', 'Esther Weeks', '1386891862', '1387689952', 'Trying to Update'),
(5, 'PC136', '06/12/2013', '06/24/2013', 'Grand Teton', '135', 'RXP-Provia 400X', 'EOS-3', 50, 'Color', 'Positive', 'no', 'mountains', 'Box 2', 'No', 'None', 'No', 'Carl Calhoun', '1386891946', '1387719564', ''),
(6, '45', '12/17/2013', '', 'Canada', 'medium', 'Velvia', 'Canon', 400, 'color', 'neg', 'no', 'Moose, Winter', 'box 5', 'No', 'none', 'Yes', 'Carl Calhoun', '1386904408', '1387688839', ''),
(8, '12-13', '12-13-2013', '12-13-2013', 'Grassy Fields', '135', 'RXP-Provia 400X', 'EOS-3', 50, 'Color', 'Positive', 'no', 'something', 'somewhere', 'No', 'none', 'No', 'Carl Calhoun', '1387213149', '1387719261', 'something else'),
(9, 'PC135', '12/26/2013', '12/28/2013', 'george', '135', 'RXP-Provia 400X', 'EOS-3', 50, 'Color', 'Positive', 'No', 'Fish', 'Box 10', 'No', '', 'No', 'Carl Calhoun', '1387308539', '1387719317', ''),
(10, 'PC145', '12/31/2013', '', 'Monkshood', '135', 'RXP-Provia 400X', 'EOS-3', 50, 'Color', 'Positive', '', 'Flowers', 'Nowhere', 'No', '', 'No', 'Carl Calhoun', '1387309047', '1387719384', ''),
(15, '0x00000', '01/01/2001', '01/01/2001', 'Fishy', '135', 'RXP-Provia 400X', 'RB-67', 3200, 'Color', 'Positive', 'the button', 'Vaccinated, Licenced', 'Around Neck', 'No', 'Sushi', 'No', 'Carl Calhoun', '1387640180', '1387720042', ''),
(17, 'PC125-1000002', '08/09/2013', '09/11/2013', 'Moose Ponds', '120 6x7', 'FP4 Plus 125', 'Bessa 1', 200, 'Black & White', 'Positive', '', 'Moose, Ponds, ', 'Drawer 12', 'Yes', 'Printed for Jude', 'No', 'Carl Calhoun', '1387719869', '1387719869', ''),
(18, 'PC155-1000001', '04/14/2011', '05/18/2010', 'Camels in truck', 'Digital', 'Digital', 'FTb', 200, 'Color', 'Positive', '', 'Camels, Desert, Oman, Gas Station', 'HP Laptop, Oman File', 'No', '', 'No', 'Carl Calhoun', '1387720331', '1387728545', ''),
(19, 'PC135-1000001', '12/10/2013', '', 'Still only 16?', '120 6x9', 'RVP100F - Velvia 100F', 'Bessa 1', 100, 'Color', 'Positive', '', 'Test Duplicate Number', 'My Head', 'No', 'Site Testing', 'No', 'Carl Calhoun', '1387728744', '1387728744', '');

-- --------------------------------------------------------

--
-- Table structure for table `files_projects`
--

CREATE TABLE IF NOT EXISTS `files_projects` (
  `project_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`file_id`),
  KEY `file_id` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files_projects`
--

INSERT INTO `files_projects` (`project_id`, `file_id`, `created`) VALUES
(4, 2, 1387720805),
(4, 3, 1387720797),
(4, 6, 1387720791),
(4, 9, 1387720780),
(4, 18, 1387720784),
(5, 3, 1387720864),
(5, 5, 1387720887),
(5, 6, 1387720856),
(5, 9, 1387685020),
(42, 6, 1387690161),
(43, 2, 1387720747),
(43, 8, 1387720755),
(43, 10, 1387720762),
(43, 18, 1387720740),
(44, 2, 1387730122),
(44, 6, 1387730084),
(44, 15, 1387730092),
(44, 18, 1387730078),
(46, 10, 1387733965),
(47, 18, 1387734778);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `created`, `modified`) VALUES
(4, 'Cyanotypes', 'Cyanotypes for display', 1387051706, 1387051706),
(5, 'Palisade Peach Fest', 'images for framing', 1387052131, 1387052131),
(29, 'RUssians', 'again', 1387061987, 1387061987),
(42, 'Wedding Photos', 'Joe''s Wedding', 1387690154, 1387690154),
(43, 'Cards -2011', 'Cards for print 2011', 1387720736, 1387720736),
(44, 'abcdefghijklmnopqr', 'abcdefghijklmnopqrstuvwxyzabcdef', 1387730068, 1387730068),
(46, 'YES ANOTHER PROJEC', 'Because', 1387733956, 1387733956),
(47, 'abcdefghijklmnopqr', 'abcdefghijklmnopqrstuvwxyzabcd', 1387734773, 1387734773);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(1, 1386824291, 1386824291, '662938311859619ea04c4e16381f6a9b0433e7b9', 'a00fd879df39bba0a7560e74c2f596b322605a56', 0, '', 'Bill', 'Jones', 'jones.com'),
(2, 1386825021, 1386825021, '334091d18f4168ab88c9160c1ca9440bdf6cdebf', '0a6178e4754b9ae4359c5dfa1c12157dc65f1e91', 0, '', 'rob', 'williams', 'rob.com'),
(3, 1387321265, 1387321265, 'ce656c38346de5eb83ba23e9ff3aa86a89a7bf90', 'df3fd748ab20f1457ad355a86e336078de749a77', 0, '', 'admin', 'Photo_File', 'admin@email.com'),
(4, 1387324056, 1387324056, '619ef8dd4b788f977c6faf5b7fc32b5fa48eae3a', '24660a448bcd024f95581d810e1ea3cd39233b5b', 0, '', 'James', 'Madison', 'mad.com'),
(5, 1387639950, 1387639950, '64d81cd90e1992b202a2bddca69074d036352e51', '81eebb629c447d01399f270ff3d8070d513f39e2', 0, '', 'Bernini', 'Cat', 'mouse@cheese.com'),
(6, 1387734272, 1387734272, 'cdbcb3ba950c1d1db86231453d9d5ca7f19392d3', 'eec3a99b66d88bafca5b8ef2ab01fe5e608d1a80', 0, '', 'abcdefghijklmnopqrstuvwxyz1234567890123456789012345678901234', 'abcdefghijklmnopqrstuvwxyz1234567890123456789012345678901234', 'abcde@1234567890.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files_projects`
--
ALTER TABLE `files_projects`
  ADD CONSTRAINT `files_projects_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_projects_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
