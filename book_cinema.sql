-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 05:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$BqCGHI7Tr1nWxX5p.4RleeKPshxUv6WFpf25fWZCkyClA.N6TVjTm');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(100) NOT NULL,
  `movie name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `number of tickets` int(50) NOT NULL,
  `movie time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `seat number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `movie name`, `number of tickets`, `movie time`, `seat number`) VALUES
(40, 'Marwan magdy15555', 'mano55@gmail.com', '010213214072525', 'The Wood', 15, '17:55', 11);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Action'),
(3, 'Anime'),
(4, 'Comedy drama');

-- --------------------------------------------------------

--
-- Table structure for table `celebrities`
--

CREATE TABLE `celebrities` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `eye_color` text DEFAULT NULL,
  `hair_color` text DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `youtube` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `celebrities`
--

INSERT INTO `celebrities` (`id`, `name`, `picture`, `description`, `height`, `weight`, `eye_color`, `hair_color`, `birthday`, `facebook`, `twitter`, `youtube`) VALUES
(4, 'Tom Holland', 'uploads/celebrities/1683139029-th.jpeg', '', '185', '80', '', '', '0000-00-00', '', '', ''),
(5, 'Will Ferrell, Ryan Simpkins, Amy Poehler', 'uploads/celebrities/1683140145-download.jpeg', '', '', '', '', '', '0000-00-00', '', '', ''),
(6, ' Jared Leto', 'uploads/celebrities/1683141231-Jared_Leto,_San_Diego_Comic_Con_2016_(2)_(cropped).jpg', '', '75', '180', '', '', '0000-00-00', '', '', ''),
(7, 'ast Vin Diesel, Eiza González ,Sam Heughan ', 'uploads/celebrities/1683143150-OIP.jpeg', '', '', '', '', '', '0000-00-00', '', '', ''),
(8, 'Omar Epps, Sean Nelson ,Sanaa Lathan', 'uploads/celebrities/1683143743-OIP (1).jpeg', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `name`) VALUES
(2, 'iMax'),
(3, 'DownTown');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacking`
--

CREATE TABLE `feedbacking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacking`
--

INSERT INTO `feedbacking` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'Shamel', 'marwanabdalrady13@gmail.com', 'dcszxvxcvb');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `writer` text DEFAULT NULL,
  `director` text DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `release_date` datetime DEFAULT NULL,
  `languages` text DEFAULT NULL,
  `price_per_ticket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `writer`, `director`, `duration`, `release_date`, `languages`, `price_per_ticket`) VALUES
(5, 'Uncharted', 'Uncharted is an action-adventure video game franchise published by Sony Interactive Entertainment and developed by Naughty Dog. Created by Amy Hennig, the Uncharted franchise follows a group of treasure hunters who travel across the world to uncover various historical mysteries', 'Amy Hennig', 'Amy Hennig', '1h58m', '2023-02-28 00:00:00', 'English', 200),
(6, 'The House', 'The House is a 2022 British animation stop-motion animated anthology film written by Enda Walsh and telling different stories forming a trilogy spanning different worlds and characters but set inside the same house. Each story deals with themes of madness, wealth, and the pursuit of true happiness.', '	Enda Walsh', '	 Emma de Swaef', '2H', '2022-05-16 00:00:00', 'English', 180),
(7, 'Morbius', 'Morbius is a 2022 American superhero film based on the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel. Distributed by Sony Pictures Releasing, it is the third film in Sony\'s Spider-Man Universe (SSU)', '	 Matt Sazama', '	Daniel Espinosa', '1h45m', '2023-05-09 00:00:00', 'Enghlish', 190),
(8, 'Bloodshot', 'Bloodshot is a 2020 American superhero film based on the Valiant Comics character of the same name. It is intended to be the first installment in a series of films set within a Valiant Comics shared cinematic universe.[3] Directed by David S. F. Wilson (in his feature directorial debut) from a screenplay by Jeff Wadlow and Eric Heisserer and a story by Wadlow,[4] the film stars Vin Diesel in the main role, Eiza González, Sam Heughan, Toby Kebbell, and Guy Pearce. It follows a soldier who was killed in action, only to be brought back to life with superpowers by an organization that wants to use him as a weapon.', '	 Jeff Wadlow', '	David S. F. Wilson', '1H46H', '2024-08-15 00:00:00', 'English', 170),
(9, 'The Wood', 'The Wood is a 1999 American coming-of-age comedy drama film directed by Rick Famuyiwa and starring Omar Epps, Richard T. Jones and Taye Diggs. It was written by Famuyiwa and Todd Boyd.', '	Rick Famuyiwa', '	Rick Famuyiwa', '1H45M', '2023-05-01 00:00:00', 'English', 190);

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE `movie_cast` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movie_cast`
--

INSERT INTO `movie_cast` (`id`, `movie_id`, `cast_id`) VALUES
(5, 5, 4),
(6, 6, 5),
(7, 7, 6),
(8, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `movie_categories`
--

CREATE TABLE `movie_categories` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movie_categories`
--

INSERT INTO `movie_categories` (`id`, `movie_id`, `category_id`) VALUES
(5, 5, 2),
(6, 6, 3),
(7, 7, 2),
(8, 8, 2),
(9, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `movie_cinemas`
--

CREATE TABLE `movie_cinemas` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `movie_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movie_cinemas`
--

INSERT INTO `movie_cinemas` (`id`, `movie_id`, `cinema_id`, `movie_time`) VALUES
(5, 5, 2, '0000-00-00 00:00:00'),
(6, 6, 3, '2023-05-10 21:00:00'),
(7, 7, 2, '2023-05-24 21:30:00'),
(8, 9, 3, '2023-05-15 22:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `movie_thumbnails`
--

CREATE TABLE `movie_thumbnails` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movie_thumbnails`
--

INSERT INTO `movie_thumbnails` (`id`, `movie_id`, `file_path`) VALUES
(5, 5, 'uploads/movie_thumbnails/1683139298-WhatsApp Image 2023-05-01 at 7.10.53 PM (2).jpg'),
(6, 6, 'uploads/movie_thumbnails/1683140887-WhatsApp Image 2023-05-01 at 6.47.14 PM.jpg'),
(7, 7, 'uploads/movie_thumbnails/1683141608-WhatsApp Image 2023-05-01 at 6.47.16 PM (3).jpg'),
(8, 8, 'uploads/movie_thumbnails/1683143505-WhatsApp Image 2023-05-01 at 7.10.56 PM (1).jpg'),
(9, 9, 'uploads/movie_thumbnails/1683145601-WhatsApp Image 2023-05-01 at 7.10.53 PM (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trailers`
--

CREATE TABLE `trailers` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `file_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `trailers`
--

INSERT INTO `trailers` (`id`, `movie_id`, `file_path`) VALUES
(5, 5, 'uploads/movie_trailers/1683139298-UNCHARTED - Official Trailer (HD)(240P).mp4'),
(6, 6, 'uploads/movie_trailers/1683140887-UNCHARTED - Official Trailer (HD)(240P).mp4'),
(7, 7, 'uploads/movie_trailers/1683141608-1682933703-1608172386-1598562542-Marvel-Studios-Captain-Marvel---Official-Trailer.mp4'),
(8, 8, 'uploads/movie_trailers/1683143505-UNCHARTED - Official Trailer (HD)(240P).mp4'),
(9, 9, 'uploads/movie_trailers/1683145601-1683141608-1682933703-1608172386-1598562542-Marvel-Studios-Captain-Marvel---Official-Trailer.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`) VALUES
(7, 'Adnan Afzal', 'adnan@gmail.com', '$2y$10$HUi/noe1BHjR967b3t08junj5Kl0ZJ6VisGUYhtMAOyKc//GJvinC', '1233'),
(8, 'Ali', 'ali@gmail.com', '$2y$10$fs2vVOunF7VEddTqvzH5JOPCbe/gTo9RyhgY53iN4kL27FGxy13PC', '123456'),
(9, 'Ahmad', 'ahmad@gmail.com', '$2y$10$yeVfM3yz.jSQYIe3gO20ZeY2nt6cLxKTl4EWS9KyFStOg5waNe2DS', '123456'),
(10, 'Yasir', 'yasir@gmail.com', '$2y$10$7gWks2rF/99/Esc1YqbLDOI1kzPQN71A31UAnU4j3.tfKS4DcsZAW', '123456'),
(11, 'Jinnah', 'jinnah@gmail.com', '$2y$10$uolwHENemBrUhkIPogymT.ZaziF5klBPe7FWwF9O0d3c8hdNaDZoG', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrities`
--
ALTER TABLE `celebrities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacking`
--
ALTER TABLE `feedbacking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_cast_cast_id` (`cast_id`),
  ADD KEY `movie_cast_movie_id` (`movie_id`);

--
-- Indexes for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movie_categories_category_id` (`category_id`),
  ADD KEY `fk_movie_categories_movie_id` (`movie_id`);

--
-- Indexes for table `movie_cinemas`
--
ALTER TABLE `movie_cinemas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movie_cinemas_cinema_id` (`cinema_id`),
  ADD KEY `fk_movie_cinemas_movie_id` (`movie_id`);

--
-- Indexes for table `movie_thumbnails`
--
ALTER TABLE `movie_thumbnails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movie_thumbnails_movie_id` (`movie_id`);

--
-- Indexes for table `trailers`
--
ALTER TABLE `trailers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_trailers_movie_id` (`movie_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `celebrities`
--
ALTER TABLE `celebrities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacking`
--
ALTER TABLE `feedbacking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie_cast`
--
ALTER TABLE `movie_cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie_categories`
--
ALTER TABLE `movie_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie_cinemas`
--
ALTER TABLE `movie_cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie_thumbnails`
--
ALTER TABLE `movie_thumbnails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trailers`
--
ALTER TABLE `trailers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD CONSTRAINT `movie_cast_cast_id` FOREIGN KEY (`cast_id`) REFERENCES `celebrities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_cast_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD CONSTRAINT `fk_movie_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_categories_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_cinemas`
--
ALTER TABLE `movie_cinemas`
  ADD CONSTRAINT `fk_movie_cinemas_cinema_id` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_cinemas_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_thumbnails`
--
ALTER TABLE `movie_thumbnails`
  ADD CONSTRAINT `fk_movie_thumbnails_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trailers`
--
ALTER TABLE `trailers`
  ADD CONSTRAINT `fk_trailers_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
