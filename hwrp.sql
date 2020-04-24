-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 07:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUsername` varchar(20) NOT NULL,
  `adminPassword` varchar(20) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminPhone` int(12) NOT NULL,
  `adminAddress` varchar(40) NOT NULL,
  `adminEmail` varchar(30) NOT NULL,
  `adminStatus` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`, `adminName`, `adminPhone`, `adminAddress`, `adminEmail`, `adminStatus`) VALUES
(1, 'admin', 'admin', 'admin admin', 828249468, '61/5 ม.8 ต.บ้านนา อ.จะนะ จ.สงขลา 90130', 'sakinahhh@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cusID` int(11) NOT NULL,
  `cusUsername` varchar(20) NOT NULL,
  `cusPassword` varchar(20) NOT NULL,
  `cusName` varchar(100) NOT NULL,
  `cusPhone` varchar(12) NOT NULL,
  `cusAddress` varchar(250) NOT NULL,
  `cusEmail` varchar(30) NOT NULL,
  `cusStatus` enum('customer') NOT NULL DEFAULT 'customer',
  `adminID` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusID`, `cusUsername`, `cusPassword`, `cusName`, `cusPhone`, `cusAddress`, `cusEmail`, `cusStatus`, `adminID`) VALUES
(1, 'Nafah', '123456', 'ฮูนาฟะห์ กูเต๊ะ', '833768889', '199 ม.3  ต.เขาตูม ', 'nafah@gmail.com', 'customer', 0),
(2, 'Ilham', '123456', 'อิลฮัม ตุยง\r\n', '837287292', '15 ม. 1 ต.เจ๊ะเห\r\n', 'ang111@gmail.com', 'customer', 0),
(3, 'sunee', '123456', 'สุนีย์ เกษม\r\n', '982323333', '18ม. 1 ต.เจ๊ะเห\r\n', 'ty@gmail.com', 'customer', 0),
(4, 'husnee', '123456', 'นิฮุสนี นิอุมา\r\n', '892351022', '11 ม. 1 ต.เจ๊ะเห\r\n', 'ha@gmail.com', 'customer', 1),
(5, 'tylas', '123456', 'ฟาฏีละห์  ตีลัส', '828249468', '185/15 ม. 1 ต.เจ๊ะเห\r\n', 'kinah.120415@gmail.com', 'customer', 1),
(6, 'miskah', '123456', 'มิสกะห์ กาเซ็งตือบา\r\n', '828249468', '152 ม. 1 ต.เจ๊ะเห\r\n', 'kinah.120415@gmail.com', 'customer', 0),
(7, 'afifah', '123456', 'อาฟีฟะห์ ฮายีเต๊ะ\r\n', '828249468', '1855 ม. 1 ต.เจ๊ะเห\r\n', 'kinah.120415@gmail.com', 'customer', 0),
(8, 'Han', '123456', 'โนรีฮัน ฮะ\r\n', '828249468', '183 ม. 1 ต.เจ๊ะเห\r\n', 'kinah.120415@gmail.com', 'customer', 0),
(9, 'win', '123456', 'วินดา ยาลาภานี\r\n', '828249468', '127 ม. 1 ต.เจ๊ะเห\r\n', 'kinah.120415@gmail.com', 'customer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `infor_inform`
--

CREATE TABLE `infor_inform` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `main` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `descrip` varchar(200) NOT NULL,
  `hdate` date NOT NULL,
  `ntime` time NOT NULL,
  `cusID` int(100) NOT NULL,
  `techID` int(70) NOT NULL,
  `status` enum('รอการยืนยัน','กำลังดำเนินการ','ซ่อมเสร็จ','ยกเลิก') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infor_inform`
--

INSERT INTO `infor_inform` (`id`, `date`, `main`, `sub`, `descrip`, `hdate`, `ntime`, `cusID`, `techID`, `status`) VALUES
(1, '2020-04-21 16:55:55', '  การไฟฟ้า', 'หม้อแปลง', 'หม้อแปลงระเบิด', '2020-04-18', '12:00:00', 4, 1, 'ซ่อมเสร็จ'),
(2, '2020-04-21 16:56:31', 'ระบบน้ำและประปา', 'ท่อ', 'ท่อแตก', '2020-04-09', '11:40:00', 4, 8, 'ซ่อมเสร็จ'),
(3, '2020-04-21 17:01:33', 'รีโนเวทบ้าน', 'หลังคา', 'หลังคารั่ว', '2020-04-12', '15:50:00', 5, 1, 'ซ่อมเสร็จ'),
(4, '2020-04-21 23:49:55', 'รีโนเวทบ้าน', 'หลังคา', 'ตกแต่งใหม่', '2020-04-25', '08:30:00', 5, 1, 'ซ่อมเสร็จ'),
(5, '2020-04-23 07:32:23', 'ระบบน้ำและประปา', 'ซิ้งค์', 'ซิ้งค์ท่อตัน', '2020-04-25', '08:00:00', 5, 1, 'ซ่อมเสร็จ'),
(6, '2020-04-23 15:19:35', 'ระบบน้ำและประปา', 'ก๊อกน้ำ', 'uuuuuuuuuuuuuuuu', '2020-04-24', '07:41:00', 5, 1, 'ซ่อมเสร็จ'),
(7, '2020-04-24 01:22:31', 'เครื่องใช้ไฟฟ้า', 'เครื่องซักผ้า', 'ไม่ติด', '2020-04-25', '16:00:00', 5, 1, 'ซ่อมเสร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(50) NOT NULL,
  `topic_n` varchar(100) NOT NULL,
  `info_n` varchar(100) NOT NULL,
  `date_n` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `topic_n`, `info_n`, `date_n`, `adminID`) VALUES
(1, 'Admin', '    รู้ดี ต่อความรู้สึก  very', '2020-04-21 12:31:01', 1),
(2, 'ข่าวประชาสัมพันธ์', 'โปรโมชั่น  20/20/2020', '2020-03-26 14:58:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cusID` int(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `status` enum('รออนุมัติ','ได้รับแล้ว','ยังไม่ได้รับ') NOT NULL,
  `id` int(20) NOT NULL,
  `id_re` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `image`, `cusID`, `adminID`, `status`, `id`, `id_re`) VALUES
(2, '53226610_293409141351172_4949545132526403584_n.png', 5, 0, 'รออนุมัติ', 4, 4),
(3, '74320203_2506916906029754_5104459947148574720_n.jpg', 5, 0, 'รออนุมัติ', 3, 5),
(4, '74320203_2506916906029754_5104459947148574720_n.jpg', 5, 0, 'รออนุมัติ', 7, 17);

-- --------------------------------------------------------

--
-- Table structure for table `report_tech`
--

CREATE TABLE `report_tech` (
  `id_re` int(20) NOT NULL,
  `date_re` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail_re` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price_re` int(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `cusID` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `techID` int(20) NOT NULL,
  `status_tech` enum('สำเร็จ') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_tech`
--

INSERT INTO `report_tech` (`id_re`, `date_re`, `detail_re`, `price_re`, `adminID`, `cusID`, `id`, `techID`, `status_tech`) VALUES
(1, '2020-04-21 18:09:22', 'เสร็จแล้วครับ', 200, 0, 4, 2, 8, 'สำเร็จ'),
(2, '2020-04-21 18:10:12', 'โอเคแล้วน่ะ', 500, 0, 4, 1, 1, 'สำเร็จ'),
(4, '2020-04-21 23:54:39', 'yyyyyy', 250, 0, 5, 4, 1, 'สำเร็จ'),
(5, '2020-04-22 06:54:19', 'ffffff', 264, 0, 5, 3, 1, 'สำเร็จ'),
(6, '2020-04-23 08:58:02', 'haja', 2500, 0, 5, 0, 1, 'สำเร็จ'),
(7, '2020-04-23 08:59:03', 'xsss', 2222, 0, 4, 0, 1, 'สำเร็จ'),
(8, '2020-04-23 08:59:32', 'Raxxann', 250, 0, 4, 0, 1, 'สำเร็จ'),
(9, '2020-04-23 09:00:27', 'raxxann', 264, 0, 5, 0, 1, 'สำเร็จ'),
(17, '2020-04-24 01:24:45', 'สายไฟขาด มอเตอร์น้ำเข้า', 950, 0, 5, 7, 1, 'สำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail_review` varchar(100) NOT NULL,
  `cusID` int(10) NOT NULL,
  `adminID` int(10) NOT NULL,
  `techID` int(100) NOT NULL,
  `c_status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `date`, `detail_review`, `cusID`, `adminID`, `techID`, `c_status`) VALUES
(1, '2020-04-22 07:52:57', 'do  goooood for u', 5, 0, 0, '0'),
(2, '2020-04-22 08:05:21', 'feel good', 5, 0, 0, '0'),
(3, '2020-04-22 08:07:55', 'feeel goood', 5, 0, 1, '0'),
(4, '2020-04-23 20:20:19', 'I LOVE U', 5, 0, 1, '1'),
(5, '2020-04-24 00:58:32', 'sasasasas', 5, 0, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_sv` int(100) NOT NULL,
  `title_sv` varchar(100) NOT NULL,
  `info_sv` varchar(100) NOT NULL,
  `price_sv` int(100) NOT NULL,
  `note_sv` varchar(200) NOT NULL,
  `img_sv` varchar(255) DEFAULT NULL,
  `adminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_types`
--

CREATE TABLE `sub_types` (
  `id_sub` int(10) NOT NULL,
  `name_sub` varchar(50) NOT NULL,
  `id_tech` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_types`
--

INSERT INTO `sub_types` (`id_sub`, `name_sub`, `id_tech`) VALUES
(1, 'หม้อแปลง', 1),
(2, 'สายไฟ', 1),
(3, 'มอเตอร์', 1),
(4, 'หลอดไฟ', 1),
(5, 'ท่อ', 2),
(6, 'ถังน้ำ', 2),
(7, 'ซิ้งค์', 2),
(8, 'ก๊อกน้ำ', 2),
(9, 'เตารีด', 3),
(10, 'เครื่องซักผ้า', 3),
(11, 'พัดลม', 3),
(12, 'โทรทัศน์', 3),
(13, 'ตุ้เย็น', 3),
(14, 'หลังคา', 4),
(15, 'เพดาน', 4),
(16, 'ผนัง', 4),
(17, 'กระเบื้อง', 4);

-- --------------------------------------------------------

--
-- Table structure for table `technicain`
--

CREATE TABLE `technicain` (
  `techID` int(11) NOT NULL,
  `techUsername` varchar(20) NOT NULL,
  `techPassword` varchar(20) NOT NULL,
  `techName` varchar(100) NOT NULL,
  `techPhone` int(12) NOT NULL,
  `techAddress` varchar(40) NOT NULL,
  `techEmail` varchar(30) NOT NULL,
  `techStatus` enum('technician') NOT NULL DEFAULT 'technician',
  `main` varchar(255) NOT NULL,
  `adminID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technicain`
--

INSERT INTO `technicain` (`techID`, `techUsername`, `techPassword`, `techName`, `techPhone`, `techAddress`, `techEmail`, `techStatus`, `main`, `adminID`) VALUES
(1, 'Wa', '123456', 'อานูวา เจ๊ะหลง\r\n', 833768889, '185/15 ม. 1 ต.เจ๊ะเห', 'wa@gmail.com', 'technician', 'การไฟฟ้า', 1),
(2, 'Afwan', '123456', 'อัฟวาน โดยหมะ\r\n', 837287292, '18 ม. 1 ต.เจ๊ะเห', 'afwan@gmail.com', 'technician', 'ระบบน้ำและประปา', 0),
(3, 'sofwan', '123456', 'ซอฟวัน ยูโซ๊ะ\r\n', 982323333, '121 ต.ตาบา อ.นารา จ.นาาาา 90130', 'sofwan@gmail.com', 'technician', 'รีโนเวทบ้าน', 0),
(4, 'Asri', '123456', 'อัสรี กามะ\r\n', 892351022, '61/5 ม.8 ต.บ้านนา', 'asri@gmail.com', 'technician', ' การไฟฟ้า', 0),
(5, 'Bai', '123456', 'บัยฮากี มามะ\r\n', 828249468, '61/5 ม.8 ต.บ้านนา อ.จะนะ  จ.สงขลา', 'bai@gmail.com', 'technician', 'เครื่องใช้ไฟฟ้า', 0),
(6, 'Hadee', '123456', 'ฮาดี มะโซะห\r\n', 828249468, '61/5 ม.8 ต.บ้านนา ต.บ้านนา ', 'Hadee@gmail.com', 'technician', 'ระบบน้ำและประปา', 0),
(7, 'Amad', '123456', 'มูฮัมหมัด ดอเล๊าะ\r\n', 828249468, '61/5 ม.8 ต.บ้านนา', 'mad@gmail.com', 'technician', 'เครื่องใช้ไฟฟ้า', 0),
(8, 'liyah', '123456', 'อิลียาส มะโร๊ะ\r\n', 828249468, '18 ม. 1 ต.เจ๊ะเห', 'liyah@gmail.com', 'technician', '  การไฟฟ้า', 1),
(9, 'akrom', '123456', 'อัครอม ตอแลมะ\r\n', 828249468, '185/15 ม. 1 ต.เจ๊ะเห', 'akrom@gmail.com', 'technician', 'รีโนเวทบ้าน', 0);

-- --------------------------------------------------------

--
-- Table structure for table `typestech`
--

CREATE TABLE `typestech` (
  `id_tech` int(10) NOT NULL,
  `name_types` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typestech`
--

INSERT INTO `typestech` (`id_tech`, `name_types`) VALUES
(1, '  การไฟฟ้า'),
(2, 'ระบบน้ำและประปา'),
(3, 'เครื่องใช้ไฟฟ้า'),
(4, 'รีโนเวทบ้าน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusID`);

--
-- Indexes for table `infor_inform`
--
ALTER TABLE `infor_inform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `report_tech`
--
ALTER TABLE `report_tech`
  ADD PRIMARY KEY (`id_re`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_sv`);

--
-- Indexes for table `sub_types`
--
ALTER TABLE `sub_types`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `technicain`
--
ALTER TABLE `technicain`
  ADD PRIMARY KEY (`techID`);

--
-- Indexes for table `typestech`
--
ALTER TABLE `typestech`
  ADD PRIMARY KEY (`id_tech`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infor_inform`
--
ALTER TABLE `infor_inform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report_tech`
--
ALTER TABLE `report_tech`
  MODIFY `id_re` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_sv` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_types`
--
ALTER TABLE `sub_types`
  MODIFY `id_sub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `technicain`
--
ALTER TABLE `technicain`
  MODIFY `techID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `typestech`
--
ALTER TABLE `typestech`
  MODIFY `id_tech` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
