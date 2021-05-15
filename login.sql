-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 10:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `username`, `password`, `nama`) VALUES
(2, 'mahardika', '$2y$10$2UXn0VcVu085utSumB2ERORDqaJfhC376asY3ApuKWe1cUyH00TGq', 'Mahardika Febri Pratama'),
(6, 'mahardika.fp', '$2y$10$qMg94gxp0AC/vIC.353VLONB.PJu6FFEfOA4T5Iol7x/xQymv98GC', 'Mahardika Febri Pratama'),
(7, 'mahardikafp', '$2y$10$ES/vP2l1J.2F3fyusdfTseN4OpIVWWQH.k.FUT6vLkLbqHvZIHeT6', 'Mahardika Febri Pratama'),
(8, 'diks', '$2y$10$rfUMeTIGW4ATbKij9/VjI.OeteXjr7otSXCxhP5kcLnpmrE/nrwLC', 'Mahardika Febri Pratama'),
(9, '', '$2y$10$CMv1GfC6fyTDTaU44nO0JOPobCeV5zuJB.qvTT.ruthDDvW4XHJTy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
