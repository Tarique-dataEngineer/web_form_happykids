-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `volevel` varchar(50) NOT NULL,
  `vol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `prof`, `city`, `country`, `contact`, `remarks`, `volevel`, `vol`) VALUES
(1, 'Adrian Larson', 'Adipisicing alias minus commodo eum perspiciatis m', 'Hedley Butler', 'Bangladesh', 'leroxeti@mailinator.com', 'Quas saepe aut molestiae ut quaerat enim', 'activeant', 1),
(2, 'Adrian Larson', 'Adipisicing alias minus commodo eum perspiciatis m', 'Hedley Butler', 'Bangladesh', 'leroxeti@mailinator.com', 'Quas saepe aut molestiae ut quaerat enim', 'activeant', 1),
(3, 'Britanni Horton', 'Voluptatum cum cillum aut rerum quam', 'Xanthus Mccarty', 'Guyana', 'fajuqutiv@mailinator.com', 'Id ad duis laboris pariatur Non illum exercitationem ducimus aute in eveniet', 'electricelephant', 1),
(4, 'Wynne Graves', 'Cum proident commodo ut quis beatae dolorum asperi', 'Thane Juarez', 'Curaco', 'wawyho@mailinator.com', 'Voluptatibus non ipsum totam autem duis maiores ad fugiat ad accusantium autem cumque', 'electricelephant', 0),
(5, 'Wanda Burgess', 'Reprehenderit eos ipsam nesciunt magni deleniti no', 'Montana Buckley', 'Turks & Caicos Is', 'detylujocy@mailinator.com', 'Quos consequat Aute praesentium dolores exercitationem sequi in dolor id quam reprehenderit veniam quos officia ut', 'activeant', 1),
(6, 'Chava Stark', 'Provident cumque distinctio Enim et ut voluptatibu', 'Salvador Rios', 'Dominica', 'zeha@mailinator.com', 'Optio dolor esse reiciendis dolores debitis corporis aut veniam velit', 'speedysparrow', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
