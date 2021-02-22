-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:46 AM
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
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `photo2` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `userid`, `photo`, `photo2`) VALUES
(3, 3, '1453184506.3301602.jpg', '1992628620.wallpapersden.com_hashibira-inosuke_1920x1080.jpg'),
(4, 3, '1646597195.3301602.jpg', '2064268653.Screenshot 2021-01-20 122611.png');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
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

INSERT INTO `volunteer` (`id`, `title`, `description`, `attendants_target`, `attendants`, `due_date`, `detail`, `expenses`, `advantage`, `type`, `img_banner`, `img`, `doc`, `status`) VALUES
(2, 'skufleughwoihfws', 'oluawirhliawurhglwuf', 100, 0, '2021-02-26 23:16:21', '.lrghglawiohfwofw', 'qekufhlqifugbwiugbw', 'w.hlwaorbwoihfbweo;if', 'helloworld', '2064268653.Screenshot 2021-01-20 122611.png', 'banner1.jpg', '', 'pass'),
(3, 'ew;ofia;woifnw', 'wefoina;wrnif;wo', 10, 5, '2021-02-18 16:05:46', ';oefiwna;woeifn', 'wefk;n;aefn;wef', 'a/wekfwefiknaewf', 'ชุมชนและสิ่งแวดล้อม', 'img_avatar.jpg', 'banner1.jpg', '', 'pass'),
(4, 'dalska;woing', ';weoifn;woienf', 4, 3, '2021-02-18 16:05:46', 'awefoinw;aoeifn', 'aw;eofinaweoifna', 'oweifn;oawienf', 'นักกิจกรรม', 'img_avatar.jpg', 'banner1.jpg', '', 'pass'),
(5, 'รับโบนัส', 'ทดสอบ', 2, 2, '2021-02-17 00:00:00', 'บลาๆ', '12000', '-', 'ทดสอบ', 'img_avatar.jpg', 'banner1.jpg', '', 'pass'),
(6, 'รับโบนัส', 'a', 1, 1, '2021-02-15 19:17:00', 'a', '100', 'a', 'a', 'img_avatar.jpg', 'C:fakepath3301602.jpg', '', 'pass'),
(7, 'รับโบนัส', 'a', 1, 1, '2021-02-15 19:17:00', 'a', '100', 'a', 'a', 'img_avatar.jpg', 'C:fakepath3301602.jpg', '', 'pass'),
(8, 'รับโบนัส', 'z', 2, 1, '2021-02-09 22:22:00', 'z', '200', 'z', 'z', 'img_avatar.jpg', 'C:fakepath\r0_04fd39a520005d51487ae1700e3891a30adb2b2c2b8bf1ccb07c4e45c231a4ce.jpeg', '', 'pass'),
(9, 'รับโบนัส', 'AAA', 4, 3, '2021-02-04 23:26:00', 'a', '4', 'aa', 'a', 'img_avatar.jpg', 'C:fakepathScreenshot 2020-11-01 132220.png', '', 'pass'),
(10, 'รับโบนัส', '/a:ODISHbc', 6, 0, '2021-02-21 23:11:00', 'efwasfc', '5', 'awdaw', 'ชุมชนและสิ่งแวดล้อม', 'img_avatar.jpg', 'C:fakepathackground.jpg', '', 'pass'),
(11, 'ส่งน้ำใจดับไฟป่า สนับสนุนเจ้าหน้าที่พิทักษ์ป่า และช่วยเหลือสัตว์ป่าให้รอดจากเปลวเพลิง', 'สนับสนุนอุปกรณ์การดับไฟและช่วยเหลือสัตว์ป่าให้กับผู้พิทักษ์ป่าทั่วประเทศ ร่วมช่วยกันแสดงพลังว่าคนในสังคมเห็นความสำคัญและอยู่เคียงข้างผู้พิทักษ์ป่า ในการปฏิบัติภารกิจรักษาไว้ซึ่งทรัพยากรธรรมชาติและสิ่งแวดล้อมเพื่อคนไทยและประทศไทยของเรา', 300, 0, '2021-04-14 21:21:41', 'การเดินทาง\r\n  ไปรถทัวร์ กลับรถไฟนอน\r\nรายละเอียดกิจกรรม\r\n ช่วยชาวบ้าน\r\n – ทาสีโรงเรียน\r\n – ระบายสีที่พื้น ให้เป็นสนามเด็กเล่น\r\n – วาดรูป ทาสีกำแพง\r\n\r\n* เอาของไปบริจาคได้\r\n** กิจกรรมอาจเปลี่ยนแปลงตามความเหมาะสม\r\n\r\n', '– ค่ารถทัวร์\r\n– ค่ารถขึ้นลงดอย\r\n– ค่ารถไฟ\r\n– ค่าอาหารที่กินที่ ร.ร.\r\n– ค่าอุปกรณ์ทำงาน\r\n– ค่าเตรียมงานของเจ้าหน้าที่\r\n\r\nทั้งหมด อยู่ที่ 2,790 บาท\r\n\r\n*** ท่านที่สะดวกเดินทางเอง ***\r\n\r\nพบกันที่ ที่ปั้ม PT\r\nก่อนถึง โรงแรมเชียงดาวอินน์ 06:30 น.\r\nวันเสาร์ 7 โมงเช้า\r\n\r\nค่าสมัครจะไม่คิดค่ารถทัวร์ และรถไฟ\r\nทั้งหมดอยู่ที่ 1,390 บาท', 'ประสบการณ์ดีๆที่ได้มอบให้กับเด็กบนดอย', 'ชุมชนและสิ่งแวดล้อม', '2064268653.Screenshot 2021-01-20 122611.png', 'banner1.jpg', '', 'pass');

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
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
