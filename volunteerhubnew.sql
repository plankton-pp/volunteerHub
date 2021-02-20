-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `permission_phone` varchar(50) NOT NULL,
  `permission_doc` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `user_id`, `user_phone`, `permission_phone`, `permission_doc`) VALUES
(1, 0, '090', '123', 'สรุป_Animation_Multimedia.pdf'),
(2, 0, '090', '123', 'สรุป_Animation_Multimedia.pdf'),
(3, 0, '090', '123', 'สรุป_Animation_Multimedia.pdf'),
(4, 0, 'das', 'das', 'Example_ProjectReport3.pdf'),
(5, 0, 'das', 'dsa', 'Example_ProjectReport3.pdf'),
(6, 1, 'das', 'dsa', 'images.jpg'),
(7, 1, 'das', 'dsa', 'images.jpg'),
(8, 1, 'das', 'dsa', 'images.jpg'),
(9, 1, 'das', 'dsa', 'images.jpg'),
(10, 1, 'das', 'dsa', 'images.jpg'),
(11, 1, 'das', 'dsa', 'images.jpg'),
(12, 1, 'das', 'dsa', 'images.jpg'),
(13, 1, 'das', 'dsa', 'images.jpg'),
(14, 1, 'das', 'dsa', 'images.jpg'),
(15, 2, '0904252199', '0904252199', '214347-204340-ZOOM_ID_forQuiz.pdf'),
(16, 2, '', '', ''),
(17, 0, '114', '14', 'Example_ProjectReport2.pdf');

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
(1, 'admin', '1234', 'thitika niwinram', 'thitika.42@gmail.com', 'Suranaree University of Technolog', '0973321650', 'admin');

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
  `due_date` datetime NOT NULL DEFAULT current_timestamp(),
  `detail` text NOT NULL,
  `expenses` text NOT NULL,
  `advantage` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img_banner` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `title`, `description`, `attendants_target`, `attendants`, `due_date`, `detail`, `expenses`, `advantage`, `type`, `img_banner`, `img`) VALUES
(1, 'ส่งน้ำใจดับไฟป่า สนับสนุนเจ้าหน้าที่พิทักษ์ป่า และช่วยเหลือสัตว์ป่าให้รอดจากเปลวเพลิง', 'สนับสนุนอุปกรณ์การดับไฟและช่วยเหลือสัตว์ป่าให้กับผู้พิทักษ์ป่าทั่วประเทศ ร่วมช่วยกันแสดงพลังว่าคนในสังคมเห็นความสำคัญและอยู่เคียงข้างผู้พิทักษ์ป่า ในการปฏิบัติภารกิจรักษาไว้ซึ่งทรัพยากรธรรมชาติและสิ่งแวดล้อมเพื่อคนไทยและประทศไทยของเรา', 300, 0, '2021-04-14 21:21:41', 'การเดินทาง\r\n  ไปรถทัวร์ กลับรถไฟนอน\r\nรายละเอียดกิจกรรม\r\n ช่วยชาวบ้าน\r\n – ทาสีโรงเรียน\r\n – ระบายสีที่พื้น ให้เป็นสนามเด็กเล่น\r\n – วาดรูป ทาสีกำแพง\r\n\r\n* เอาของไปบริจาคได้\r\n** กิจกรรมอาจเปลี่ยนแปลงตามความเหมาะสม\r\n\r\n', '– ค่ารถทัวร์\r\n– ค่ารถขึ้นลงดอย\r\n– ค่ารถไฟ\r\n– ค่าอาหารที่กินที่ ร.ร.\r\n– ค่าอุปกรณ์ทำงาน\r\n– ค่าเตรียมงานของเจ้าหน้าที่\r\n\r\nทั้งหมด อยู่ที่ 2,790 บาท\r\n\r\n*** ท่านที่สะดวกเดินทางเอง ***\r\n\r\nพบกันที่ ที่ปั้ม PT\r\nก่อนถึง โรงแรมเชียงดาวอินน์ 06:30 น.\r\nวันเสาร์ 7 โมงเช้า\r\n\r\nค่าสมัครจะไม่คิดค่ารถทัวร์ และรถไฟ\r\nทั้งหมดอยู่ที่ 1,390 บาท', 'ประสบการณ์ดีๆที่ได้มอบให้กับเด็กบนดอย', 'ชุมชนและสิ่งแวดล้อม', 'img_avatar.jpg', 'banner1.jpg'),
(2, 'skufleughwoihfws', 'oluawirhliawurhglwuf', 100, 0, '2021-02-26 23:16:21', '.lrghglawiohfwofw', 'qekufhlqifugbwiugbw', 'w.hlwaorbwoihfbweo;if', 'helloworld', 'img_avatar.jpg', 'hey_guys.jpg'),
(3, 'ew;ofia;woifnw', 'wefoina;wrnif;wo', 10, 5, '2021-02-18 16:05:46', ';oefiwna;woeifn', 'wefk;n;aefn;wef', 'a/wekfwefiknaewf', 'ชุมชนและสิ่งแวดล้อม', 'img_avatar.jpg', 'banner1.jpg'),
(4, 'dalska;woing', ';weoifn;woienf', 4, 3, '2021-02-18 16:05:46', 'awefoinw;aoeifn', 'aw;eofinaweoifna', 'oweifn;oawienf', 'นักกิจกรรม', 'img_avatar.jpg', 'banner1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
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
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
