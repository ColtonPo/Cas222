-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 10:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coltonpo_aith`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `date` text NOT NULL,
  `gender` text NOT NULL,
  `comment` text NOT NULL,
  `shirt` text NOT NULL,
  `ename` text NOT NULL,
  `enumber` text NOT NULL,
  `saturday` text NOT NULL,
  `sunday` text NOT NULL,
  `splash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `date`, `gender`, `comment`, `shirt`, `ename`, `enumber`, `saturday`, `sunday`, `splash`) VALUES
(1, 'Colton', 'Poissant', 'colton.poissant@pcc.edu', '2019-05-01', 'male', '', '', '', '', '', '', ''),
(2, 'Colton', 'Poissant', 'colton.poissant@pcc.edu', '2019-05-01', 'male', 'Enter text here...', '', '', '', '', '', ''),
(3, 'Colton', 'Poissant', 'colton.poissant@pcc.edu', '2019-05-01', 'male', 'Enter text here...', '', '', '', '', '', ''),
(4, 'Colton', 'Poissant', 'colton.poissant@pcc.edu', '2019-05-01', 'male', 'Enter text here...', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
