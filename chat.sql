-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 06:01 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

create database chat;
-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(10) UNSIGNED NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `user_1`, `user_2`, `created_at`, `pesan`) VALUES
(1, 1, 2, '2016-04-14 13:08:37', 'Hallo Pagi Gan'),
(2, 2, 1, '2016-04-14 13:08:37', 'Hallo Juga gan'),
(3, 1, 3, '2016-04-14 13:08:50', 'Berangkat Coy'),
(4, 2, 3, '2016-04-14 15:07:56', 'Hallo'),
(5, 2, 3, '2016-04-14 15:10:30', 'cius luuh ??'),
(6, 1, 3, '2016-04-14 15:23:27', 'berangkat ah'),
(7, 3, 1, '2016-04-14 15:25:25', 'hayu braay'),
(8, 1, 3, '2016-04-14 15:25:36', 'i ahayuuu'),
(9, 3, 2, '2016-04-14 15:27:00', 'membuat masukkan dan kamu akan berbua'),
(10, 2, 1, '2016-04-14 15:46:11', 'berangkat yuk ahh'),
(11, 1, 2, '2016-04-14 15:46:18', 'hayu cooy'),
(12, 2, 3, '2016-04-14 15:56:56', 'asfasdfasdf'),
(13, 2, 1, '2016-04-14 15:56:59', 'afsdfasd fasdf'),
(14, 2, 1, '2016-04-14 15:57:54', 'dfasdfasdf'),
(15, 1, 2, '2016-04-14 15:59:19', 'saffdasf fas dfa sdfadfsdf ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`) VALUES
(1, 'Andi Rohandi'),
(2, 'Dadan Hamdani'),
(3, 'Ariep RK'),
(4, 'Danang Eko Avianto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
