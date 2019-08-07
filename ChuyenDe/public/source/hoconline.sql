-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2019 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoconline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `idGV` int(11) NOT NULL,
  `tenGV` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motaGV` varchar(9999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `idKH` int(11) NOT NULL,
  `tenKH` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motaKH` varchar(9999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigianKH` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idGV` int(11) DEFAULT NULL,
  `linkKH` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudiem` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikh`
--

CREATE TABLE `loaikh` (
  `id` int(11) NOT NULL,
  `ten` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`idGV`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`idKH`),
  ADD KEY `idGV` (`idGV`);

--
-- Chỉ mục cho bảng `loaikh`
--
ALTER TABLE `loaikh`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD CONSTRAINT `khoahoc_ibfk_1` FOREIGN KEY (`idGV`) REFERENCES `giaovien` (`idGV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
