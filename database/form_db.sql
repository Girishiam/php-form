-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_db`
--

CREATE TABLE `form_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_db`
--

INSERT INTO `form_db` (`id`, `name`, `email`, `phone`, `image`) VALUES
(1, 'Girish Mondal', 'girishmondal.28@gmail.com', '01957574565', 'SAVE_20210722_200521-01.jpeg'),
(2, 'Tom', 'girishmondal.28@gmail.com', '01957574565', 'SAVE_20210722_200521-01.jpeg'),
(3, 'Girish Mondal', 'girishmondal.28@gmail.com', '01957574565', 'Capture.JPG'),
(4, 'Girish Mondal', 'girishmondal.28@gmail.com', '01957574565', '244182191_1037524113487455_255324213706158646_n.jpg'),
(18, 'Girish Mondal', 'girish@dcastalia.com', '01957574565', 'Capture.JPG'),
(19, 'Girish Mondal', 'girish@dcastalia.com', '01957574565', '244182191_1037524113487455_255324213706158646_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_db`
--
ALTER TABLE `form_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_db`
--
ALTER TABLE `form_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
