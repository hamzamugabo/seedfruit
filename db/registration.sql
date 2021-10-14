-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2021 at 02:05 AM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nehemiahstem_nsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `role`) VALUES
(1, 'Hamza', 'Mugabo', '0789092843', 'hamzamugabo3@gmail.com', 'Hamza1@2', 'LEARNING INSTITUTION'),
(2, 'Hamza', 'Mugabo', '0706783090', 'hamzamugabo@gmail.com', '$2y$10$DfAfLmsgVxlW/EadSMYfH.eFTAArdWudTKSdhLicER3kZq4EKinzO', 'STUDENT'),
(3, 'timothy', 'nyanzi', '0752963318', 'timothynyanzi@gmail.com', '$2y$10$lOy8hnHF7vdoy.xuBIrUN.dtb66U7C1SO6ooNMudLaZzDJKW1QEJ6', 'INSTRUCTOR'),
(4, 'isaac', 'musangye', '0756541254', 'isaacmusangy3@gmail.com', '$2y$10$JqZytzf5WrOT8nBDfrnPouZAueb8BNSIBi8IlGK291STj1Nj2fJHK', ''),
(5, 'Nakamanya', 'Agnes', '0782354335', 'nakamanyaagnes6@gmail.com', '$2y$10$rAophopxtiQVl7z9BRxUSe9ORla38y6J1PQjcj9yoghA/5WiXvUcS', 'INSTRUCTOR'),
(6, 'Joseph', 'Mwangi', '+254707606547', 'mmwangi2000@yahoo.com', '$2y$10$hoGAVSdsuPuzPs0MFtajJOE1YZM5M0xF2MZfBy7DvuaM8AhdUZ/8K', ''),
(7, 'William', 'Luyima', '+256706553208', 'williamluyima@gmail.com', '$2y$10$aZGbq0cl6MuMFil0RyFTmekSd.MWl7yq7Zxd1WKmZiCUHHkRshuUm', ''),
(8, 'Ojok', 'Rogers', '0755597192', 'rogersojok@gmail.com', '$2y$10$eT0PJ.fz8BeMSyTGiQnSfOorxGwiWH1XFuGzVyzDLRxOy3dk79jvu', ''),
(9, 'Katerega 1', 'Mike1', '0784161157', 'ytibcapital@gmail.com', '$2y$10$5QJV.hNCHT9hOhZ97GgphuTyDgoWviGmkugGWbooW3zZUT/1IPS1.', 'STUDENT'),
(10, 'Samuel', 'Kiige', '+256753692436', 'prosamex@gmail.com', '$2y$10$VB1/36sNHaRCzDtjNnnE4eeKWM3uVcK58NW9P3vpuuji7nmlZsshG', 'STUDENT'),
(11, 'ThomasWed', 'ThomasWed', '81332425825', 'scavonadanyel72@rambler.ru', '$2y$10$7Z.KhHpJiYScWjAIJ8RCNOxkO9t7obeyiNgOLU7GCGYoa7p7z8MPO', ' STUDENT'),
(12, 'louitgergsfgdgvvdeep https://google.com c', 'louitgergsfgdgvvdeep https://google.com c', 'irishka.sergeeva.1978@inbox.ru', 'nastya.tolstikova.81@inbox.ru', '$2y$10$962.bZvi/PyBK4kiKrvxtOGgoV8klFhXnPyOp.UVMY4SQ2MigwM9O', 'INSTRUCTOR'),
(13, 'louitgergsfgdgvvdeep https://google.com c', 'louitgergsfgdgvvdeep https://google.com c', 'bocharova.alna@inbox.ru', 'bocharova.alna@inbox.ru', '$2y$10$KsqOjue25TzPFjSZwR9HpurptNLjedvmOKJTmJ6B6RWEaPKs8Bx86', ' STUDENT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
