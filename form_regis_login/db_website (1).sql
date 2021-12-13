-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2020 at 09:10 AM
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
-- Database: `db_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL COMMENT 'Username/ID bukan nama asli ',
  `nama` text NOT NULL COMMENT 'Letakkan nama asli disini',
  `email` varchar(50) NOT NULL COMMENT 'email user yang digunakan untuk login',
  `password` varchar(200) NOT NULL,
  `umur` int(3) NOT NULL COMMENT 'umur user',
  `jenis_kelamin` text NOT NULL COMMENT 'radio button seleksi jenis kelamin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `nama`, `email`, `password`, `umur`, `jenis_kelamin`) VALUES
('dennymario', 'Denny Mario', 'abc123@gmail.com', '12345678', 20, 'laki laki'),
('iDenny', 'Denny Mario', 'dennymario.id@gmail.com', 'AnimuS1903', 20, 'Laki Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
