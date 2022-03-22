-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 11:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gndshop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `passWord` varchar(100) NOT NULL,
  `adminStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `userName`, `passWord`, `adminStatus`) VALUES
(1, 'gndshop', 'e6592b28b49f9209b2ee187d5912263b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_ctdonhang` int(11) NOT NULL,
  `ID_Sp` int(11) NOT NULL,
  `Size_Sp` int(11) NOT NULL,
  `Mausac_Sp` varchar(10) NOT NULL,
  `Soluong_Sp` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `Gia_Sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID_ctdonhang`, `ID_Sp`, `Size_Sp`, `Mausac_Sp`, `Soluong_Sp`, `ma_donhang`, `Gia_Sp`) VALUES
(41, 11001, 1, 'do', 4, 8228, 100000),
(42, 3110111, 1, 'do', 1, 8228, 200000),
(43, 111103, 4, 'vang', 7, 3730, 250000),
(44, 10001, 1, 'do', 1, 3730, 250000),
(45, 77777758, 1, 'do', 1, 7295, 300000),
(46, 111102, 1, 'do', 1, 7295, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `ID_dangky` int(11) NOT NULL,
  `tenguest` varchar(100) NOT NULL,
  `emailguest` varchar(100) NOT NULL,
  `matkhauguest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`ID_dangky`, `tenguest`, `emailguest`, `matkhauguest`) VALUES
(54, 'Nguyễn văn đoài', 'doaidev08@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(55, 'Nguyễn Văn Đoài', 'doaidev08@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(56, 'Nguyễn Thị C', 'nguyenthic@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `ID_DanhMucSp` int(11) NOT NULL,
  `Ten_DanhMucSp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`ID_DanhMucSp`, `Ten_DanhMucSp`) VALUES
(11, 'ÁO NAM'),
(12, 'QUẦN NAM'),
(13, 'ÁO NỮ'),
(14, 'QUẦN NỮ'),
(15, 'PHỤ KIỆN');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ID_donhang` int(11) NOT NULL,
  `ID_khachhang` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `diachi_khachhang` varchar(100) NOT NULL,
  `sdt_khachhang` varchar(10) NOT NULL,
  `status_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ID_donhang`, `ID_khachhang`, `ma_donhang`, `diachi_khachhang`, `sdt_khachhang`, `status_donhang`) VALUES
(50, 55, 8228, 'hà nội', '0912345678', 0),
(51, 55, 3730, 'Hà Nội', '0123456789', 1),
(52, 56, 7295, 'Hải Dương', '0123444789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `ID_LoaiSp` int(11) NOT NULL,
  `ID_DanhMucSp` int(11) NOT NULL,
  `Ten_LoaiSp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`ID_LoaiSp`, `ID_DanhMucSp`, `Ten_LoaiSp`) VALUES
(31, 11, 'Áo Bóng Đá Nam'),
(32, 11, 'Áo Gym Nam'),
(33, 12, 'Quần Bóng Đá Nam'),
(34, 12, 'Quần Gym Nam'),
(35, 14, 'Quần Yoga Nữ'),
(36, 15, 'Balo Gym'),
(37, 13, 'Áo Bóng Đá Nữ');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `ID_Sp` int(11) NOT NULL,
  `Ten_Sp` varchar(250) NOT NULL,
  `ID_DanhMucSp` int(11) NOT NULL,
  `ID_LoaiSp` int(11) NOT NULL,
  `Gia_Sp` int(11) NOT NULL,
  `Mota_Sp` text NOT NULL,
  `Hinhanh_Sp` varchar(250) NOT NULL,
  `Hinhanh_Mota` varchar(500) NOT NULL,
  `Trangthai_Sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp`
--

INSERT INTO `sp` (`ID_Sp`, `Ten_Sp`, `ID_DanhMucSp`, `ID_LoaiSp`, `Gia_Sp`, `Mota_Sp`, `Hinhanh_Sp`, `Hinhanh_Mota`, `Trangthai_Sp`) VALUES
(10001, 'Áo Bóng Đá Nam 01', 11, 31, 250000, '<p>&Aacute;o b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972022_aobongdanam1.jpg', 'a:8:{i:0;s:16:\"aobongdanam1.jpg\";i:1;s:16:\"aobongdanam2.jpg\";i:2;s:16:\"aobongdanam3.jpg\";i:3;s:16:\"aobongdanam4.jpg\";i:4;s:13:\"aogymnam1.jpg\";i:5;s:13:\"aogymnam2.jpg\";i:6;s:13:\"aogymnam3.jpg\";i:7;s:13:\"aogymnam4.jpg\";}', 1),
(10002, 'Áo Bóng Đá Nam 02', 11, 31, 200000, '<p>&Aacute;o b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972064_aobongdanam2.jpg', 'a:4:{i:0;s:16:\"aobongdanam1.jpg\";i:1;s:16:\"aobongdanam2.jpg\";i:2;s:16:\"aobongdanam3.jpg\";i:3;s:16:\"aobongdanam4.jpg\";}', 1),
(10003, 'Áo Bóng Đá Nam 03', 11, 31, 150000, '<p>&Aacute;o b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972116_aobongdanam4.jpg', 'a:5:{i:0;s:16:\"aobongdanam1.jpg\";i:1;s:16:\"aobongdanam2.jpg\";i:2;s:16:\"aobongdanam3.jpg\";i:3;s:16:\"aobongdanam4.jpg\";i:4;s:13:\"aogymnam4.jpg\";}', 1),
(11001, 'Áo Gym Nam 01', 11, 32, 100000, '<p>&Aacute;o Gym nam rất đẹp</p>\r\n', '1638972218_aogymnam1.jpg', 'a:4:{i:0;s:13:\"aogymnam1.jpg\";i:1;s:13:\"aogymnam2.jpg\";i:2;s:13:\"aogymnam3.jpg\";i:3;s:13:\"aogymnam4.jpg\";}', 1),
(11002, 'Áo Gym Nam 02', 11, 32, 250000, '<p>&Aacute;o Gym nam rất đẹp</p>\r\n', '1638972261_aogymnam4.jpg', 'a:5:{i:0;s:16:\"aobongdanam4.jpg\";i:1;s:13:\"aogymnam1.jpg\";i:2;s:13:\"aogymnam2.jpg\";i:3;s:13:\"aogymnam3.jpg\";i:4;s:13:\"aogymnam4.jpg\";}', 1),
(11003, 'Áo Gym Nam 03', 11, 32, 240000, '<p>&Aacute;o Gym nam rất đẹp</p>\r\n', '1638972309_aogymnam3.jpg', 'a:6:{i:0;s:16:\"aobongdanam4.jpg\";i:1;s:13:\"aogymnam1.jpg\";i:2;s:13:\"aogymnam2.jpg\";i:3;s:13:\"aogymnam3.jpg\";i:4;s:13:\"aogymnam4.jpg\";i:5;s:12:\"balogym3.jpg\";}', 1),
(111101, 'Balo Gym Cao Cấp 1', 15, 36, 300000, '<p>Balo Gym rất đẹp</p>\r\n', '1638971740_balogym2.jpg', 'a:3:{i:0;s:12:\"balogym1.jpg\";i:1;s:12:\"balogym2.jpg\";i:2;s:12:\"balogym3.jpg\";}', 1),
(111102, 'Balo Gym Cao Cấp 2', 15, 36, 20000, '<p>Balo Gym rất đẹp</p>\r\n', '1638971892_balogym1.jpg', 'a:3:{i:0;s:12:\"balogym1.jpg\";i:1;s:12:\"balogym2.jpg\";i:2;s:12:\"balogym3.jpg\";}', 1),
(111103, 'Balo Gym Cao Cấp 3', 15, 36, 250000, '<p>Balo Gym rất đẹp</p>\r\n', '1638971926_balogym3.jpg', 'a:3:{i:0;s:12:\"balogym1.jpg\";i:1;s:12:\"balogym2.jpg\";i:2;s:12:\"balogym3.jpg\";}', 1),
(1110111, 'Quần Bóng Đá Nam 01', 12, 33, 200000, '<p>Quần b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972699_quanbongdanam1.jpg', 'a:4:{i:0;s:18:\"quanbongdanam1.jpg\";i:1;s:18:\"quanbongdanam2.jpg\";i:2;s:18:\"quanbongdanam3.jpg\";i:3;s:15:\"quangymnam2.jpg\";}', 1),
(1110112, 'Quần Bóng Đá Nam 02', 12, 33, 100000, '<p>Quần b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972666_quangymnam3.jpg', 'a:6:{i:0;s:18:\"quanbongdanam1.jpg\";i:1;s:18:\"quanbongdanam2.jpg\";i:2;s:18:\"quanbongdanam3.jpg\";i:3;s:15:\"quangymnam1.jpg\";i:4;s:15:\"quangymnam2.jpg\";i:5;s:15:\"quangymnam3.jpg\";}', 1),
(1110113, 'Quần Bóng Đá Nam 03', 12, 33, 230000, '<p>Quần b&oacute;ng đ&aacute; nam rất đẹp</p>\r\n', '1638972761_quanbongdanam3.jpg', 'a:6:{i:0;s:18:\"quanbongdanam1.jpg\";i:1;s:18:\"quanbongdanam2.jpg\";i:2;s:18:\"quanbongdanam3.jpg\";i:3;s:15:\"quangymnam1.jpg\";i:4;s:15:\"quangymnam2.jpg\";i:5;s:15:\"quangymnam3.jpg\";}', 1),
(2110111, 'Quần Gym Nam 01', 12, 34, 500000, '<p>Quần Gym nam rất đẹp</p>\r\n', '1638972840_quangymnam1.jpg', 'a:4:{i:0;s:18:\"quanbongdanam1.jpg\";i:1;s:18:\"quanbongdanam2.jpg\";i:2;s:18:\"quanbongdanam3.jpg\";i:3;s:15:\"quangymnam2.jpg\";}', 1),
(2110112, 'Quần Gym Nam 02', 12, 34, 300000, '<p>Quần Gym nam rất đẹp</p>\r\n', '1638972874_quangymnam2.jpg', 'a:4:{i:0;s:18:\"quanbongdanam1.jpg\";i:1;s:18:\"quanbongdanam2.jpg\";i:2;s:18:\"quanbongdanam3.jpg\";i:3;s:15:\"quangymnam1.jpg\";}', 1),
(3110111, 'Quần yoga nữ 01', 14, 35, 200000, '<p>Quần yoga nữ rất đẹp</p>\r\n', '1638972974_yoga1.jpg', 'a:6:{i:0;s:12:\"aogymnu1.jpg\";i:1;s:12:\"aogymnu2.jpg\";i:2;s:12:\"aogymnu3.jpg\";i:3;s:9:\"yoga1.jpg\";i:4;s:9:\"yoga2.jpg\";i:5;s:9:\"yoga3.jpg\";}', 1),
(3110112, 'Quần yoga nữ 02', 14, 35, 100000, '<p>Quần yoga nữ rất đẹp</p>\r\n', '1638973036_aogymnu3.jpg', 'a:7:{i:0;s:12:\"aogymnu1.jpg\";i:1;s:12:\"aogymnu2.jpg\";i:2;s:12:\"aogymnu3.jpg\";i:3;s:18:\"quanbongdanam3.jpg\";i:4;s:9:\"yoga1.jpg\";i:5;s:9:\"yoga2.jpg\";i:6;s:9:\"yoga3.jpg\";}', 1),
(77777757, 'Áo Bóng Đá Nữ 01', 13, 37, 200000, '<p>&Aacute;o B&oacute;ng Đ&aacute; Nữ Rất Đẹp</p>\r\n', '1638971141_aobongdanu1.jpg', 'a:8:{i:0;s:15:\"aobongdanu1.jpg\";i:1;s:15:\"aobongdanu2.jpg\";i:2;s:15:\"aobongdanu3.jpg\";i:3;s:12:\"aogymnu1.jpg\";i:4;s:12:\"aogymnu2.jpg\";i:5;s:12:\"aogymnu3.jpg\";i:6;s:9:\"yoga2.jpg\";i:7;s:9:\"yoga3.jpg\";}', 1),
(77777758, 'Áo Bóng Đá Nữ 02', 13, 37, 300000, '<p>&Aacute;o B&oacute;ng Đ&aacute; Nữ Rất Đẹp</p>\r\n', '1638971190_aobongdanu3.jpg', 'a:8:{i:0;s:15:\"aobongdanu1.jpg\";i:1;s:15:\"aobongdanu2.jpg\";i:2;s:15:\"aobongdanu3.jpg\";i:3;s:12:\"aogymnu1.jpg\";i:4;s:12:\"aogymnu2.jpg\";i:5;s:12:\"aogymnu3.jpg\";i:6;s:9:\"yoga1.jpg\";i:7;s:9:\"yoga2.jpg\";}', 1),
(77777759, 'Áo Bóng Đá Nữ 03', 13, 37, 200000, '<p>&Aacute;o B&oacute;ng Đ&aacute; Nữ Rất Đẹp</p>\r\n', '1638971338_aobongdanu2.jpg', 'a:8:{i:0;s:15:\"aobongdanu1.jpg\";i:1;s:15:\"aobongdanu2.jpg\";i:2;s:15:\"aobongdanu3.jpg\";i:3;s:12:\"aogymnu1.jpg\";i:4;s:12:\"aogymnu2.jpg\";i:5;s:12:\"aogymnu3.jpg\";i:6;s:9:\"yoga1.jpg\";i:7;s:9:\"yoga2.jpg\";}', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID_ctdonhang`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID_dangky`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`ID_DanhMucSp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID_donhang`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`ID_LoaiSp`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`ID_Sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID_ctdonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `ID_DanhMucSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `ID_LoaiSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `ID_Sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77777760;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
