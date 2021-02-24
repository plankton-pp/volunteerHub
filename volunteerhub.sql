-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 02:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `user_phone` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `user_id`, `activity_id`, `user_username`, `user_email`, `user_phone`, `user_name`) VALUES
(6, 3, 34, '@plankton', 'planktonplnt@gmail.com', '0123456789', 'Pacharapol Kaewkunlaya'),
(19, 3, 33, '@plankton', 'planktonplnt@gmail.com', '0123456789', 'Pacharapol Kaewkunlaya'),
(20, 5, 37, '@plankton', 'planktonplnt@gmail.com', '0123456789', 'Pacharapol Kaewkunlaya'),
(21, 5, 33, '@plankton', 'planktonplnt@gmail.com', '0123456789', 'Pacharapol Kaewkunlaya'),
(22, 3, 35, '@plankton', 'planktonplnt@gmail.com', '0123456789', 'Pacharapol Kaewkunlaya');

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
  `photo` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `name`, `email`, `address`, `telephone`, `photo`, `status`) VALUES
(1, 'admin', '1234', 'thitika niwinram', 'thitika.42@gmail.com', 'Suranaree University of Technolog', '0973321650', 'admin.1251027127.3301602.jpg', 'admin'),
(2, '@plankton', '=@volunteer1234', 'Pacharapol Kaewkunlaya', 'planktonplnt@gmail.com', '-', '0123456789', '@plankton.1988748906.66434927_724166701335867_7700859164678946816_o.jpg', 'admin'),
(3, '@plankton', 'z0', 'Pacharapol Kaewkunlaya', 'planktonplnt@gmail.com', '-', '0123456789', '@plankton.1809005923.•Ðǝαŋ•.png', 'agency'),
(5, '@plankton', 'z1', 'Pacharapol Kaewkunlaya', 'planktonplnt@gmail.com', 'wad', '0123456789', '@plankton.1836739259.3301602.jpg', 'user'),
(13, 'teerapat1234', '123456789', 'Teerapat Seeharach', 'teeza55yo@gmail.com', 'khonkaen', '2982612614', 'teerapat1234.48658923.3301602.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
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
  `status` varchar(30) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `title`, `description`, `attendants_target`, `attendants`, `due_date`, `detail`, `expenses`, `advantage`, `type`, `img_banner`, `img`, `doc`, `status`, `author`) VALUES
(32, 'อาสาสมัคร ตุ๊กตาหุ่นมือ 26 ก.พ. 64 Volunteer Producing Hand Puppet Dolls for Learning Kits February', 'เป็นจิตอาสาผลิตสื่อหุ่นมือเพื่อเป็นสื่อการเรียนรู้ และเป็นของเล่นสร้างสรรค์', 25, 15, '2021-02-26 00:00:00', 'ร่วมกันจัดทำสื่อหุ่นมือเพื่อเป็นสื่อการเรียนรู้ และเป็นของเล่นสร้างสรรค์', 'ค่าอุปกรณ์กิจกรรม 200บาท/คน', 'เพื่อเป็นเครื่องมื่อสำหรับเป็นสื่อการเรียนการสอนและเป็นเครื่องมือให้กับเยาวชนในการทำกิจกรรมสร้างสรรค์', 'เด็กและเยาวชน', '321141268398_background.jpg', '321345846179_3301602.jpg', '321694949974_Untitled.pdf', 'pass', '@plankton'),
(33, 'อาสาสมัคร ตุ๊กตาหุ่นมือ 26 ก.พ. 64 Volunteer Producing Hand Puppet Dolls for Learning Kits February', 'จิตอาสาผลิตสื่อหุ่นมือเพื่อเป็นสื่อการเรียนรู้ และเป็นของเล่นสร้างสรรค์', 25, 10, '2021-02-26 08:00:00', 'ร่วมกันผลิตสื่อหุ่นมือเพื่อเป็นสื่อการเรียนรู้ และเป็นของเล่นสร้างสรรค์', 'ค่าอุปกรณ์กิจกรรม 200บาท/คน', 'เพื่อเป็นเครื่องมื่อสำหรับเป็นสื่อการเรียนการสอนและเป็นเครื่องมือให้กับเยาวชนในการทำกิจกรรมสร้างสรรค์', 'สิ่งแวดล้อม', '331054273469_image1.jpeg', '33171105271_image1.jpeg', '33807743904_Untitled.pdf', 'pass', '@plankton'),
(35, 'ขึ้นดอย ท้าหนาว ไปพัฒนา ร.ร.กลางหุบเขา 20-21 มีนา 64', 'ไปพัฒนาโรงเรียนกลางหุบเขา', 30, 9, '2021-03-19 18:52:00', 'จิตอาสาพัฒนาโรงเรียน ช่วยชาวบ้านทาสี พัฒนาสนามเด็นเล่น', 'ค่าเดินทาง ค่ารถขึ้นลงดอย ค่ารถไฟ ค่าอาหารที่กินที่ ร.ร. ค่าอุปกรณ์ทำงาน ค่าเตรียมงานของเจ้าหน้าที่ 2,790 บาท', 'เพื่อให้เเด็กและเยาวชนได้รับการศึกษาและคุณภาพที่ดี', 'เด็กและเยาวชน', '35590231980_image2.jpg', '351117347254_image2.jpg', '35791719602_Untitled.pdf', 'pass', '@plankton'),
(36, 'รับสมัครอาสาช่วยผู้พิทักษ์ป่า', 'เป็นกิจกรรมที่พาอาสาสมัครเข้าไปช่วยกันปลูกป่าด้วยหนังสติ๊ก + สร้างบ้านให้นก  ณ.เขตรักษาพันธ์สัตว์ป่าแม่น้ำภาชี เพื่อช่วยกันดูแลผืนป่าร่วมกัน', 50, 38, '2021-02-25 03:53:33', 'ร่วมกันติดบ้านนกบนต้นไม้และเรียนรู้ช่วยกันไปปลูกป่าด้วยหนังสติ๊ก', 'ค่าเดินทาง คนละ 1,750 บาท', 'เพื่อให้เด็กและเยาวชนได้รับการศึกษาและคุณภาพที่ดี', 'สิ่งแวดล้อม', '36836430690_baannok1.jpg', '36897796844_baannok2.jfif', '361780960999_Untitled.pdf', 'pass', '@plankton'),
(37, 'รุ่น2 ปี 64 วันเสาร์ที่ 13 มีนาคม 64 อาสาทำดีแต้มสีเติมฝันให้น้อง ร.ร.วัดลาดหญ้าแพรก', 'อาสาบ้านดินไทยได้จัดกิจกรรม BBL ไปช่วยทาสีอาคารเรียนและทาสีสนามเด็กเล่นในจังหวัดนครปฐม', 70, 64, '2021-03-13 06:00:00', 'วันเสาร์ที่ 13 มีนาคม 64 เดินทางสู่ พื้นที่โรงเรียนและร่วมกันฟื้นฟู ทาสี อาคารเรียน  + สนามเด็กเล่น', 'ค่าเดินทาง เดินทางกับทีมงาน ท่านละ 690 บาท เดินทางเอง 390 บาท', 'เพื่อให้เด็กและเยาวชนได้รับการศึกษาที่ดี', 'สิ่งแวดล้อม', '37_328310703.นครปฐม1.jpg', '37_1597010464.นครปฐม1.jpg', '37_1765243845.Untitled.pdf', 'pass', '@plankton'),
(39, 'อาสามาฆะบูชา-แบ่งปันกางเกงผ้าอ้อมผู้สูงวัยและผู้ป่วย', 'เพื่อให้อาสาสมัครร่วมกันจัด และบรรจุของใช้ เพื่อส่งมอบให้กับผู้สูงอายุ ผู้ป่วย และผู้ที่บกพร่องทางร่างกายได้มีของใช้ที่จำเป็นตามวัย และตามสภาพสุขภาวะ ', 25, 15, '2021-02-25 02:44:00', 'แนะนำโครงการ กิจกรรมเรียนรู้กาย ใจและลงมือทำกิจกรรม ร่วมกันจัดแบ่งของใช้ให้กับผู้สูงอายุและผู้ป่วย', 'ไม่มีค่าใช้จ่าย', 'ได้ร่วมสร้างบุญ ความสุขให้กับผู้สูงวัย', 'สิ่งแวดล้อม', '39_1687038553.อาสามาฆะบูชา.jpeg', '39_245419501.อาสามาฆะบูชา.jpeg', '39_265766036.Untitled.pdf', 'pass', '@plankton'),
(41, 'จิตอาสา Heat Talk การให้คำแนะนำแก่ผู้สูงอายุ', 'เป็นงานจิตอาสา เพื่อให้คำแนะนำและการเรียนรู้แก่ผู้สูงอายุ ผ่านการพูดคุยทางโทรศัพท์', 500, 500, '2021-12-31 00:00:00', 'เป็นกิจกรรมที่ให้ผู้สูงอายุโทรมาปรึกษาและเรียนรู้ ผ่านการพูดคุยทางโทรศัพท์ครั้งละ 3 นาที', 'ไม่มีค่าใช้จ่าย', 'ได้ใช้ความรู้และความถนัดในด้านต่าง ๆ เพื่อช่วยเหลือผู้อื่น', 'สิ่งแวดล้อม', '41_896499007.img_avatar.jpg', '41_1503974525.img_avatar.jpg', '41_1554827330.Untitled.pdf', 'pass', 'admin'),
(42, 'อาสาสมัครป่าชุมชน', 'เป็นกิจกรรมที่ช่วยกันปลูกป่า', 50, 48, '2021-02-28 07:02:00', 'เป็นกิจกรรมที่ช่วยกันปลูกป่า เพื่ออนุรักษ์สิ่งแวดล้อม', '150 บาท', ' เพื่ออนุรักษ์สิ่งแวดล้อม', 'สิ่งแวดล้อม', '31255436183.Tiny Cabin.png', '31107288175.thumb-1920-1049584.jpg', '31490228180.Untitled.pdf', 'processing', 'admin');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
