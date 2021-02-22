-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 09:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volunteerhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `name`, `email`, `address`, `telephone`, `status`) VALUES
(1, 'admin', '1234', 'thitika niwinram', 'thitika.42@gmail.com', 'Suranaree University of Technolog', '0973321650', 'admin'),
(2, '@plankton', '=@volunteer1234', 'Pacharapol Kaewkunlaya', 'planktonplnt@gmail.com', '-', '0123456789', 'admin'),
(3, '@plankton', 'z0', 'Pacharapol Kaewkunlaya', 'planktonplnt@gmail.com', '-', '0123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `attendants_target` int(3) NOT NULL,
  `attendants` int(3) NOT NULL,
  `due_date` datetime NOT NULL,
  `detail` text NOT NULL,
  `expenses` text NOT NULL,
  `advantage` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img_banner` text NOT NULL,
  `img` text NOT NULL,
  `doc` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `user_id`, `title`, `description`, `attendants_target`, `attendants`, `due_date`, `detail`, `expenses`, `advantage`, `type`, `img_banner`, `img`, `doc`, `status`) VALUES
(27, 0, 'นอน', 'b', 12, 12, '2021-02-27 03:21:00', 'd', 'd', 'd', 'ผู้พิการและผู้ป่วย', '1689057094.03.jpg', '194672820.05.jpg', '1108484915.doc.pdf', ''),
(28, 0, 'นอน', 'b', 12, 12, '2021-02-27 03:21:00', 'd', 'd', 'd', 'ผู้พิการและผู้ป่วย', '1389745419.05.jpg', '387925012.04.jpg', '1760032184.doc.pdf', ''),
(29, 0, 'ขายบ้าน', '1', 12, 12, '2021-02-27 02:06:00', '1', '1', '1', 'เด็กและเยาวชน', '986493316.03.jpg', '1890022610.04.jpg', '716268571.doc (7).pdf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
