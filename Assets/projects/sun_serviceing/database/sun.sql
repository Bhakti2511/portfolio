-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 06:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sun`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(20) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `number` int(19) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `number`, `problem`) VALUES
(2, 'abc', 'capbhakti@gmail.com', 5687909, 'dfgh'),
(3, 'abc', '5465', 0, '123 anything '),
(4, 'abc', 'ssaf@gmail.com', 9677868, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `improvment` text NOT NULL,
  `dislike` text NOT NULL,
  `likes` text NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `improvment`, `dislike`, `likes`, `suggestion`) VALUES
(1, 'bhakti hirpara', 'capbhakti@gmail.com', 'it is overall very good . we have  a good experince with sun services. overall good service.', 'it is good but can imrove their service.'),
(3, 'xyz', 'xyz@gmail.com', 'By consistently delivering high-quality products and services, we aim to establish long-lasting relationships built on trust and loyalty. Our dedicated team is always ready to go the extra mile, striving to make every interaction a positive one. Customer satisfaction is the driving force behind everything we do.', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photos`, `name`, `description`) VALUES
(20, 'cooker_02.png', 'Solar Cooker', 'it is a Solar Cooker'),
(21, 'rooftop_01.jpeg', 'Solar Rooftop Panel', 'Generate Your own Electricity and Enjoy without Any tension.'),
(22, 'heater_01.jpg', 'Solar Water Heater', 'Solar power produces no emissions during generation itself'),
(23, 'rooftop_02.jpg', 'Solar Rooftop Panel', 'energy produced from sources like the sun and wind that are naturally replenished and do not run out'),
(24, 'trap_02.jpg', 'Solar Insect Trap', 'Solar Insect traps are easy to handle and install.'),
(25, 'trap_01.jpg', 'Solar Insect Trap', 'It genarets solar energy and use it.'),
(26, 'heater_02.jpeg', 'Solar Water Heater', 'Solar water heaters typically last\r\nfor 10-25 years before they need to be replaced'),
(27, 'cooker_01.jpg', 'Solar Cooker', 'It makes Cooking Faster.'),
(28, 'heater_03.jpeg', 'Solar Water Heater', 'if you install a solar water heater, your water heating bills should drop 50%-80%'),
(29, 'trap_03.jpg', 'Solar Insect Trap', 'Solar Insect traps are easy to handle and install.'),
(30, 'cooker_05.jpg', 'Solar Cooker', 'Cookes Food Easily and Faster'),
(31, 'cooker_03.jpg', 'Solar Cooker', 'It is a Solar Cooker'),
(32, 'trap_04.jpeg', 'Solar Insect Trap', 'Now Farmers are moving towards Solar Insect Trap'),
(33, 'rooftop_03.jpg', 'Solar Rooftop Panel', 'reducing their dependence on the grid and conventional fossil fuels'),
(34, 'rooftop_04.jpg', 'Solar Rooftop Panel', 'Solar systems are a long-term investment that is modern and sustainable'),
(35, 'cooker_04.jpg', 'Solar Cooker', 'A solar Cooker converts the solar energy into heat energy'),
(36, 'heater_04.jpg', 'Solar Water Heater', 'Heat Your water by your own'),
(37, 'rooftop_05.jpg', 'Solar Rooftop Panel', 'Example for Solar rooftop panel'),
(40, 'img_avatar.png', 'madhuri maam', 'it is a Solar Cooker');

-- --------------------------------------------------------

--
-- Table structure for table `service_registered`
--

CREATE TABLE `service_registered` (
  `id` int(20) NOT NULL,
  `services` varchar(249) NOT NULL,
  `company` varchar(250) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_registered`
--

INSERT INTO `service_registered` (`id`, `services`, `company`, `problem`) VALUES
(1, 'rooftop', 'adani', 'installation'),
(2, 'Solar Water Heater', 'tata power solar ', 'uninstallation'),
(3, 'insecttrap', 'vikram', 'washing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `slot` varchar(250) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `address`, `date`, `slot`, `time`) VALUES
(1, 'bhakti', 1234567890, 'capbhakti@gmail.com', 'dreamcity , kankot road , rajkot', '2023-09-23', 'morning', '10:00'),
(2, 'Jinal', 2147483647, 'j@gmail.com', 'kalawad road', '2023-09-27', 'afternoon', '5:00'),
(3, 'nidhi', 2147483647, 'nidhi@gmail.com', 'New Ring Road', '2023-09-24', 'morning', '11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_registered`
--
ALTER TABLE `service_registered`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `service_registered`
--
ALTER TABLE `service_registered`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_registered`
--
ALTER TABLE `service_registered`
  ADD CONSTRAINT `service_registered_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
