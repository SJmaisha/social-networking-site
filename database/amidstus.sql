-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 07:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amidstus`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `user_id` int(100) NOT NULL,
  `postid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_post` varchar(100) NOT NULL,
  `post_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likeid` int(100) NOT NULL,
  `likes` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`user_id`, `postid`, `username`, `user_post`, `post_time`, `likeid`, `likes`) VALUES
(5, 1, 'Abdullah', 'emrrt', '2018-03-20 10:33:03', 0, 0),
(6, 2, 'Smrity', 'sumaiya urgent amr basai ai.ami pagol smrity', '2018-03-20 15:01:35', 0, 0),
(2, 3, 'Sabrina Maisha', 'EMERGENCY', '2018-03-20 15:04:40', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `user_id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_post` varchar(100) NOT NULL,
  `post_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(100) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`user_id`, `postid`, `username`, `user_post`, `post_time`, `likes`, `image`) VALUES
(3, 1, 'Suraiya Brishti', 'this is a test', '2018-03-20 10:25:46', 2, ''),
(5, 2, 'Abdullah', 'dfhnjd,as.', '2018-03-20 10:34:05', 1, ''),
(2, 3, 'Sabrina Maisha', 'KBDXHSKVCBSJKBncJKzn>', '2018-03-20 15:04:27', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `user_one_id` int(100) NOT NULL,
  `user_two_id` int(100) NOT NULL,
  `status` int(11) DEFAULT '0',
  `action_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`user_one_id`, `user_two_id`, `status`, `action_user_id`) VALUES
(5, 3, 1, 3),
(3, 6, 1, 6),
(6, 2, 1, 2),
(4, 1, 1, 1),
(5, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `profile_pic` blob NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `search_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`user_id`, `username`, `profile_pic`, `last_name`, `search_date`) VALUES
(1, 'Sabrina', 0x32343032382d646f776e6c6f61642e6a7067, 'Jahan', '2018-02-20 10:07:56'),
(2, 'Nuren', 0x32343032382d646f776e6c6f61642e6a7067, 'Nafisa', '2018-02-20 10:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `profile_pic` blob NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `firstname`, `lastname`, `username`, `profile_pic`, `email`, `password`) VALUES
(1, 'Nuren', 'Nafisa', 'Nuren Nafisa', '', 'nurennafisa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Sabrina', 'Maisha', 'Sabrina Maisha', '', 'sjbm1996@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Suraiya', 'Brishti', 'Suraiya Brishti', '', 'suraiya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Adhare', 'Opshori', 'Adhare Opshori', '', 'bushra@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Abdullah', 'Mohammad', 'Abdullah', '', 'abdullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Fathema', 'Smrity', 'Smrity', '', 'srity@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Sumayea', 'Hasan', 'Sumayea', '', 'sumayea@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'ddd', 'naafisas', '2018-03-20 09:27:30'),
(2, 0, 'ss', 'aaa', '2018-03-20 09:28:21'),
(3, 0, 'KNKGH', 'Nafisa', '2018-03-20 14:06:47'),
(4, 3, 'NJGYDJR', 'MLKM', '2018-03-20 14:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_id` int(255) NOT NULL,
  `workplace` varchar(100) NOT NULL,
  `educational_institution` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `motto` varchar(100) NOT NULL,
  `profile_pic` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `workplace`, `educational_institution`, `dob`, `motto`, `profile_pic`) VALUES
(1, 'Software Company', 'IIUC', '1995-11-02', 'Keep trust on Allah and be happy', ''),
(2, 'Software Company', 'iiuc', '1995-11-02', 'Keep trust on Allah and be happy', ''),
(3, 'Workplace-', 'Educational Institution-', '0000-00-00', 'Motto of You Life', ''),
(4, 'Homebluster', 'CU', '1996-06-04', 'To kill someone', ''),
(5, 'Workplace-', 'Educational Institution-', '0000-00-00', 'Motto of You Life', ''),
(6, 'Workplace-', 'Educational Institution-', '0000-00-00', 'Motto of You Life', ''),
(7, 'Workplace-', 'Educational Institution-', '0000-00-00', 'Motto of You Life', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD FULLTEXT KEY `user_post` (`user_post`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `postid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
