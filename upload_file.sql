-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 09:06 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `sno` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `roll` int(50) NOT NULL,
  `file` varchar(225) NOT NULL,
  `extension` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_file`
--

INSERT INTO `upload_file` (`sno`, `username`, `roll`, `file`, `extension`) VALUES
(1, ' anusha', 2, 'cc unit3(1).pdf', 'application/pdf'),
(2, 'likitha', 3, 'ACTION  PLAN.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
(3, 'vivek', 4, 'cc unit3(1).pdf', 'application/pdf'),
(4, '', 0, '', ''),
(5, '', 0, '', ''),
(6, '', 0, '', ''),
(7, '', 0, '', ''),
(8, 'likitha', 5, 'Article.pdf', 'application/pdf'),
(9, 'likitha', 5, 'Article.pdf', 'application/pdf'),
(10, 'likitha', 5, 'Article.pdf', 'application/pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
