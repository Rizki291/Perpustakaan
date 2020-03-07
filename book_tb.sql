-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 12:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tb`
--

CREATE TABLE `book_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `writer_id` int(11) DEFAULT NULL,
  `Publication_year` int(4) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tb`
--

INSERT INTO `book_tb` (`id`, `name`, `category_id`, `writer_id`, `Publication_year`, `img`) VALUES
(1, 'a', 123, 123, 2014, 'gambar.jpg'),
(2, 'nama1', 123, 1, 2012, ''),
(12, 'nm', 123, 1, 2012, 'image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `randomname` (`category_id`),
  ADD KEY `randomname2` (`writer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD CONSTRAINT `randomname` FOREIGN KEY (`category_id`) REFERENCES `category_db` (`id`),
  ADD CONSTRAINT `randomname2` FOREIGN KEY (`writer_id`) REFERENCES `writer_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
