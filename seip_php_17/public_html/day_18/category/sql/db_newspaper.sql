-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 08:54 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_reporter` varchar(100) NOT NULL,
  `news_description` varchar(600) NOT NULL,
  `news_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_title`, `news_reporter`, `news_description`, `news_status`) VALUES
(1, 'Test News 1', 'Hasan Hafiz Pasha', 'Th racing legend, 47, continues to receive round the clock care at his mansion in Geneva, Switzerland, more than two years after his catastrophic smash on the slopes of the French Alps.', 1),
(2, 'Test News 2', 'Hasan Hafiz', 'Th racing legend, 47, continues to receive round the clock care at his mansion in Geneva, Switzerland, more than two years after his catastrophic smash on the slopes of the French Alps.', 0),
(3, 'Tigers leap into Super Ten', 'Hasan Pasha', 'Bangladesh qualify for Super Ten, will face Pakistan on March 15, Wednesday at Kolkata at 3:30pm local time after thrashing Oman by 54 runs at Dharamsala.', 1),
(4, 'Forensic team examining BB computers', 'Hasan', 'A forensic team is examining all computers of the Bangladesh Bank to determine how a malware hacked into the payment system of the central bank and stole $101 million.\r\n\r\nThe team will hand its report by next two weeks, detailing how the fraudulence took place and if any BB officials were involved in the heist.\r\n\r\nThe BB told this to a team from the banking division of the finance ministry when it visited the central bank yesterday.\r\n\r\nThe hacking took place on the night of February 4, a Thursday, using information stolen through the malware, which sent a total of 35 transfer orders to the Fed', 1),
(5, 'UK team firm on March 31 deadline', 'Hasan Hafiz Pasha', 'An UK expert team yesterday expressed their firm stance that they need â€œalmost allâ€ the security requirements met at the Hazrat Shahjalal International Airport within March 31.\r\nThe UK Department of Transport has already imposed a ban on direct cargo from Bangladesh to the UK on security grounds.\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
