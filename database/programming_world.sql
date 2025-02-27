-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(50) NOT NULL,
  `username_account` varchar(40) DEFAULT NULL,
  `email_account` varchar(40) DEFAULT NULL,
  `password_account` varchar(97) DEFAULT NULL,
  `salt_account` varchar(256) DEFAULT NULL,
  `role_account` varchar(6) DEFAULT NULL,
  `images_account` varchar(50) DEFAULT NULL,
  `login_count_account` int(1) NOT NULL,
  `lock_account` int(1) NOT NULL,
  `ban_account` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username_account`, `email_account`, `password_account`, `salt_account`, `role_account`, `images_account`, `login_count_account`, `lock_account`, `ban_account`) VALUES
(10, 'issawa', 'issawa@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$NDVrR1hXZTBkOG5NUmo1Qw$Moo0o7Q2OLZkoDyBhNylMZgOIAwtnBdjFHa+Mk3hXi0', 'd31de9a7aa1a303129bd6ad63b309758d7c67dc510d5c9b4ac153335e896a95341ed32d7d1f2633644ed836fe2afc2f122ce4266b70f35682d3bfab8d6ed091024e975e447e43ea0ab96d0496eaa8b00b9b5520365ccd6a6d2dd2384f8f33ea9de7bf2fbd82a653174c3c8c5c4f90d7ff02e', 'admin', 'default_images_account.jpg', 0, 0, '2024-09-16 11:21:40'),
(11, 'wave', 'wave@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bjRaVy9nWEk0UHFRaXJkLg$E0vskkKA1q6IvILYQZTBlEHQ9CaN/sICWcK3z75b8Bg', '9f6bd6a219c5a770584d59ce5bfddbfc0e674e4a1d09d104a5bfff4f3f9852ff45ffd6ede1a60a259b8a733faba500474b3bbd5888f60be526ecd71336e1e8cf5c239bb8314b48a5778bc75374306922605ffa721edf5731afce119716ea7f5364fc8b54fe7afa3838a0483a1641aa5710125f2f7b6c69e0', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(12, 'nnn14', 'nnn@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$eXlLZ1BlelZwYkZjNGRYeQ$03ArKmY0i4ZyThMbmPOjN8VZX80S6Br/moa/s1cJU1A', '6975fb464cba179df78ad3725c9ee63d3e4f190e0b135c23c7e424c37d1719594f4d89936a2d2894b524124e4b74958017601dd2fdee6542ec0c3d013272ab19bdce62d69ffaba944271f60414e4add7f985074b0f585ee332bfc4437ee3b0e06f393ecc1a385948bdc4938a3a97d41798555018bdebff5847880d', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(13, 'DDD', 'DDD@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dExBMFVJMUppY3VRSUxUOA$qMOxJbzgOfwHC728hK1mIpq42nVjMy+/3px/seguoDs', 'e75e10274fb29220022204f7fab13982b5a3ff04e12cd344d72d2f2902c19f71cba9fc47357e60fb0d50fffd9d12a758005853a535c2b81216cdf46225f332f5adfbc3cb1f6b5bd8c7b682c917fd1e1f37a4e17f4583067c5f479e7740dee7d755bcc9c4', 'admin', 'do.jpg', 1, 0, '0000-00-00 00:00:00'),
(14, 'wave', 'wave@name.com', '$argon2id$v=19$m=65536,t=4,p=1$MnNUT293UmRrYW5acm5PcQ$RarY0oCIJKFiWgyVcRIhp7eyHtgz6yWIekerCFXJWYw', 'd2ce1847330e486960ced6cb55fadb20835751c79b489da7320e9b8e1236ea6cbe9e0e31393e78c8aed3418eb6e48cdff64a3c0c9d30fae302064ddaac3cd5cb4508278508c03ecef5820e5da7cb65a68487a8d4c81d29efcf586c404c37abd1773c6c7f589ff5e02c2072f2ec42095fe6ac', 'admin', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(15, 'Nano', 'nano@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$TGU1SHZNOHBuTGR1VUhRNQ$LtMhB77iLPlS8sR8Sias2ZVELsd/ZsCyWnnBUKwB2PQ', 'fa91e0f16346047b5ba88e728c84a1ca0adafa06c26257c172d3c61228b24690699133f3adc7b225f7e4505ca1c112a19b1934045f4204494f164432ba18ca540a76082a7cf98a20c4d142cc1a6443c2d10b53fcb2a5e76b8fb0d8c4f1b5440666c722a2c8', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
