-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2025 at 04:46 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topupgameapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_game`
--

CREATE TABLE `tb_game` (
  `id_game` int NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `pembuat_game` varchar(50) NOT NULL,
  `tahun_rilis` year DEFAULT NULL,
  `deskripsi_game` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_game`
--

INSERT INTO `tb_game` (`id_game`, `game_name`, `pembuat_game`, `tahun_rilis`, `deskripsi_game`) VALUES
(3, 'Mobile Legend Bang Bang', 'Moonton', '2018', 'Mobile Legend adalah sejenis game MOBA (Multiplayar Online Battle Arena). Secara harafiah, dapat diartikan sebagai pertempuran dalam suatu arena yang dilakukan oleh beberapa pemain secara online.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_game`
--
ALTER TABLE `tb_game`
  ADD PRIMARY KEY (`id_game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_game`
--
ALTER TABLE `tb_game`
  MODIFY `id_game` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
