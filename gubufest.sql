-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 03:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gubufest`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID_ANGGOTA` int(8) NOT NULL,
  `NAMA_ANGGOTA` varchar(32) NOT NULL,
  `PT_ANGGOTA` varchar(32) NOT NULL,
  `NIM_ANGGOTA` bigint(32) NOT NULL,
  `USERNAME_ANGGOTA` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID_ANGGOTA`, `NAMA_ANGGOTA`, `PT_ANGGOTA`, `NIM_ANGGOTA`, `USERNAME_ANGGOTA`) VALUES
(1, 'Toha', 'PENS', 4210161024, 'reyhan'),
(2, 'Taha', 'PENS', 4210161025, 'reyhan'),
(3, 'Rey', 'PENS', 42424241, 'alphard'),
(4, 'Rey', 'PENS', 42424243, 'alphard');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `ID_DOC` int(8) NOT NULL,
  `USERNAME_DOC` varchar(32) NOT NULL,
  `NAMA_DOC` varchar(64) NOT NULL,
  `PENGUMUMAN_DOC` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`ID_DOC`, `USERNAME_DOC`, `NAMA_DOC`, `PENGUMUMAN_DOC`) VALUES
(2, 'reyhan', 'reyhan_DOCUMENT.docx', 'LOLOS'),
(3, 'admingt', 'admin.docx', 'BAYAR'),
(5, 'alphard', 'alphard_DOCUMENT.docx', 'TIDAK LOLOS');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `ID_FOTO` int(8) NOT NULL,
  `USERNAME_FOTO` varchar(32) NOT NULL,
  `KELOMPOK_FOTO` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`ID_FOTO`, `USERNAME_FOTO`, `KELOMPOK_FOTO`) VALUES
(1, 'reyhan', 'reyhan_FOTO_TIM.jpg'),
(2, 'alphard', 'alphard_FOTO_TIM.png');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `ID_TIM` int(8) NOT NULL,
  `NAMA_TIM` varchar(64) NOT NULL,
  `PT_TIM` varchar(64) NOT NULL,
  `KETUA_TIM` varchar(32) NOT NULL,
  `NIM_TIM` bigint(32) NOT NULL,
  `EMAIL_TIM` varchar(32) NOT NULL,
  `HP_TIM` bigint(16) NOT NULL,
  `USERNAME_TIM` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`ID_TIM`, `NAMA_TIM`, `PT_TIM`, `KETUA_TIM`, `NIM_TIM`, `EMAIL_TIM`, `HP_TIM`, `USERNAME_TIM`) VALUES
(1, 'Tester', 'PENS', 'Reyhan Alphard Savero', 4210161023, 'newrey9227@gmail.com', 85852000360, 'reyhan'),
(2, 'Team Dua', 'PENS', 'Rey', 42424242, 'reyhanalphard@gmail.com', 85852000360, 'alphard');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME_USER` varchar(32) NOT NULL,
  `PASSWORD_USER` varchar(32) NOT NULL,
  `STATUS_USER` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME_USER`, `PASSWORD_USER`, `STATUS_USER`) VALUES
(1, 'admingt', 'gimtek', 'ADMIN'),
(2, 'reyhan', 'alphard', 'PESERTA'),
(3, 'alphard', 'savero', 'PESERTA');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `ID_YOUTUBE` int(8) NOT NULL,
  `USERNAME_YOUTUBE` varchar(32) NOT NULL,
  `LINK_YOUTUBE` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`ID_YOUTUBE`, `USERNAME_YOUTUBE`, `LINK_YOUTUBE`) VALUES
(1, 'reyhan', 'https://www.youtube.com/embed/3jqw9IHre-A'),
(2, 'alphard', 'https://www.youtube.com/embed/K9d2M6xZUlE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`),
  ADD UNIQUE KEY `NIM_ANGGOTA` (`NIM_ANGGOTA`),
  ADD KEY `USERNAME_ANGGOTA` (`USERNAME_ANGGOTA`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`ID_DOC`),
  ADD UNIQUE KEY `USERNAME_DOC` (`USERNAME_DOC`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`ID_FOTO`),
  ADD KEY `USERNAME_FOTO` (`USERNAME_FOTO`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`ID_TIM`),
  ADD UNIQUE KEY `USERNAME_TIM` (`USERNAME_TIM`),
  ADD UNIQUE KEY `EMAIL_TIM` (`EMAIL_TIM`),
  ADD UNIQUE KEY `NIM_TIM` (`NIM_TIM`),
  ADD UNIQUE KEY `NAMA_TIM` (`NAMA_TIM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `USERNAME_USER` (`USERNAME_USER`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`ID_YOUTUBE`),
  ADD UNIQUE KEY `USERNAME_YOUTUBE` (`USERNAME_YOUTUBE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID_ANGGOTA` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `ID_DOC` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `ID_FOTO` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `ID_TIM` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `ID_YOUTUBE` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`USERNAME_ANGGOTA`) REFERENCES `user` (`USERNAME_USER`);

--
-- Constraints for table `doc`
--
ALTER TABLE `doc`
  ADD CONSTRAINT `doc_ibfk_1` FOREIGN KEY (`USERNAME_DOC`) REFERENCES `user` (`USERNAME_USER`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`USERNAME_FOTO`) REFERENCES `user` (`USERNAME_USER`);

--
-- Constraints for table `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_ibfk_1` FOREIGN KEY (`USERNAME_TIM`) REFERENCES `user` (`USERNAME_USER`);

--
-- Constraints for table `youtube`
--
ALTER TABLE `youtube`
  ADD CONSTRAINT `youtube_ibfk_1` FOREIGN KEY (`USERNAME_YOUTUBE`) REFERENCES `user` (`USERNAME_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
