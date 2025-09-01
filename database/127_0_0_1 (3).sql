-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2025 at 05:40 AM
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
-- Database: `admin_db`
--
DROP DATABASE IF EXISTS `admin_db`;
CREATE DATABASE IF NOT EXISTS `admin_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `admin_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'pido', '$2y$10$0ucrPEei2nlYEUw8HZdXleVaUmeFHLZ7TAsk0lmFQah6u0/UsLG3i');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_ft_db`
--

CREATE TABLE `carousel_ft_db` (
  `cft_id` int(11) NOT NULL,
  `cft_name` varchar(100) NOT NULL,
  `cft_desc` varchar(800) NOT NULL,
  `cft_imgLink` enum('1','0') NOT NULL,
  `cft_img` varchar(1000) NOT NULL,
  `cft_moreLink` enum('1','0') NOT NULL,
  `cft_more` varchar(1000) NOT NULL,
  `cft_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel_ft_db`
--

INSERT INTO `carousel_ft_db` (`cft_id`, `cft_name`, `cft_desc`, `cft_imgLink`, `cft_img`, `cft_moreLink`, `cft_more`, `cft_date`) VALUES
(1, 'BIRINGAN CITY', 'Mayon Volcano is renowned for its \"perfect cone\" because of its symmetric conical shape, and is regarded as sacred in Philippine mythology. The volcano with its surrounding landscape was declared a national park on July 20, 1938, the first in the nation.', '1', 'https://alittlebithuman.com/wp-content/uploads/2022/08/piotr-chrobot-6oUsyeYXgTg-unsplash-scaled.jpg', '1', 'https://www.google.com/search?sa=X&sca_esv=0138e6ee7bbaabcb&sxsrf=AE3TifO78gDdgPAq3h8F_qXZBV4eyVE_7g:1754890676911&udm=2&fbs=AIIjpHxU7SXXniUZfeShr2fp4giZ1Y6MJ25_tmWITc7uy4KIetxLMeWi1u_d0OMRvkClUba76WL62NDKV-tuv6_wPYBC9v7ob7zIjaDzKC7u3qUzfD7e7YM11gPmU080OmUCW2ra6dnp670CRAaKtkLzGbsTDSqnsqGdRqpRgn7m8J8sRSSZQGr1gsZNygXo3gegFkXRGx97PLV94iHXkSHBuVAPRbU0rg&q=biringan&ved=2ahUKEwiy3aqbhYKPAxViklYBHXS5GmMQtKgLegQIERAB&biw=1920&bih=945&dpr=1#vhid=B2r1CpXyvzPZoM&vssid=mosaic', '2025-08-14 13:09:33'),
(2, 'LAS CASAS FILIPINAS DE ACUZAR ', 'Las Casas Filipinas de Acuzar is best known for its collection of meticulously restored and reconstructed Spanish-Filipino colonial houses and buildings, offering a glimpse into the Philippines rich history and heritage. It serves as a living museum, heritage park, and resort, showcasing Filipino craftsmanship and artistry through the relocation and rebuilding of historical structures. ', '1', 'https://imagedelivery.net/Kw5BeEqyzbFQaJ4l-WOLqw/41c8a3d3-c53f-49a8-6386-69b870cb1a00/lcbbv1', '1', 'https://www.google.com/search?q=las+casas+filipinas+de+acuzar&sca_esv=f87f5a3d8cf34a9f&udm=2&biw=1920&bih=945&sxsrf=AE3TifNQiw7-gT1kmfgfT10P6D1__U5Z0Q%3A1755053967954&ei=j_-baIqBOrjm2roPmOP1qQ8&oq=lascas&gs_lp=EgNpbWciBmxhc2NhcyoCCAUyBRAAGIAEMgcQABiABBgKMgUQABiABDIFEAAYgAQyBRAAGIAEMgcQABiABBgKMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABEiVaFCNEFjzLXABeACQAQCYAWGgAbIEqgEBNrgBAcgBAPgBAZgCB6AC0gSoAgrCAgoQIxgnGMkCGOoCwgIHECMYJxjJAsICChAAGIAEGEMYigXCAggQABiABBixA8ICCxAAGIAEGLEDGIMBmAMCkgcDNC4zoAeZILIHAzMuM7gH0ATCBwUwLjIuNcgHHA&sclient=img#vhid=fcPVPN8DPvFIDM&vssid=mosaic', '2025-08-13 11:03:54'),
(3, 'MONTE CUEVA SHRINE', 'Monte cueva shrine is known as the Shrine of the Most Precious Blood of Jesus and Our Lady of Assumption, this is a popular site especially during the Holy Week and on the birthday of the Blessed Virgin Mary, which falls on September 8', '', '../img/montecuevashrine.jpg', '', '', '2025-08-08 09:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(20) DEFAULT NULL,
  `message` text NOT NULL,
  `is_seen` int(1) DEFAULT 0,
  `date_sent` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `contact`, `message`, `is_seen`, `date_sent`) VALUES
(1, 'ronie', 'Itsafrank@gmail.com', 2147483647, 'fewfdser', 0, '2025-07-29 06:00:42'),
(2, '', '', 0, '', 0, '2025-07-29 06:00:43'),
(3, 'frank', 'Itsafrank@gmail.com', 2147483647, 'malingaw', 0, '2025-07-29 06:24:22'),
(4, 'frank', 'Itsafrank@gmail.com', 2147483647, 'malingaw', 0, '2025-07-29 07:44:58'),
(5, 'frank', 'Itsafrank@gmail.com', 2147483647, 'malingaw', 0, '2025-07-29 07:49:48'),
(6, 'frank', 'Itsafrank@gmail.com', 2147483647, 'malingaw', 0, '2025-07-29 07:49:51'),
(7, 'frank', 'Itsafrank@gmail.com', 2147483647, 'malingaw', 0, '2025-07-29 07:52:05'),
(8, 'frank', 'Itsafrank@gmail.com', 563853245, 'fewfdser', 0, '2025-07-29 07:52:58'),
(9, 'why me???', 'Itsafrank@gmail.com', 2147483647, 'HAHAHAHAHAHAHAHAHAHAHAHAHAHA', 0, '2025-07-29 08:51:07'),
(10, 'sahooo', 'Itsafrank@gmail.com', 2147483647, 'superlingaww', 0, '2025-07-30 03:16:35'),
(11, 'sdgf', 'Itsafrank@gmail.com', 2147483647, 'dgastgd', 0, '2025-07-30 05:39:26'),
(12, 'mali', 'mali@gmail.com', 2147483647, 'malingawmalingawmalingawmalingawmalingaw', 0, '2025-07-31 01:32:32'),
(13, 'sdsg', 'Itsafrank@gmail.com', 11, 'dfrgdgf', 0, '2025-07-31 02:12:09'),
(14, 'malingaw', 'Itsafrank@gmail.com', 8080, 'errrrrrrrrrroooooooooooorrrrrrrrr na liwat!!!!!!!!!!!!!', 0, '2025-08-01 03:37:15'),
(15, 'malingaw', 'Itsafrank@gmail.com', 8080, 'masumoooooooooooooo ', 0, '2025-08-01 07:31:12'),
(16, 'morning', 'Itsafrank@gmail.com', 8080, 'ljsdgbysfSVBFCVAKhszuiteqqqqqqq oftg7etrsbxfsjahutsvqjbfahsgdbajdvggddagaggalbksnlkaiyrKQBJFAT', 0, '2025-08-04 00:12:49'),
(17, 'boysit', 'Itsafrank@gmail.com', 8080, 'nakuha gihap hahahahahahahahahahhaahahhaahahhahahh', 0, '2025-08-05 03:04:04'),
(18, 'frank', 'Itsafrank@gmail.com', 2147483647, 'pagkakalamegg', 0, '2025-08-07 06:09:11'),
(19, 'Tourist Destination', 'gggg@gamil.com', 2147483647, 'hello!! po', 0, '2025-09-01 03:37:26'),
(20, 'Tourist Destination', 'gggg@gamil.com', 2147483647, 'hello!! po', 0, '2025-09-01 03:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `hero_ft_db`
--

CREATE TABLE `hero_ft_db` (
  `hft_id` int(11) NOT NULL,
  `hft_title` varchar(55) NOT NULL,
  `hft_desc` varchar(1000) NOT NULL,
  `hft_img` varchar(550) NOT NULL,
  `hft_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_ft_db`
--

INSERT INTO `hero_ft_db` (`hft_id`, `hft_title`, `hft_desc`, `hft_img`, `hft_date`) VALUES
(1, 'Mayon Volcano', 'Mayon Volcano is renowned for its \"perfect cone\" because of its symmetric conical shape, and is regarded as sacred in Philippine mythology. The volcano with its surrounding landscape was declared a national park on July 20, 1938, the first in the nation.', '../img/download.jfif', '2025-08-08 10:08:51'),
(2, 'Mt.Pulag', 'Mount Pulag is famous for its \"sea of clouds\" and its exceptional view of the Milky Way Galaxy at dawn, which has attracted many tourists who wish to see the \"other-worldly\" scenery.\r\n', '../img/Mount-Pulag-Sea-Of-Clouds.jpg', '2025-08-08 10:12:43'),
(3, 'Banaue Rice Terraces', 'The Banaue Rice Terraces are a National Cultural Treasure of the Philippines and are considered to be the 8th Natural Wonder of the World by many Filipinos. The view is spectacular, majestic and inspiring.', '../img/banauerice.jfif', '2025-08-08 10:33:34'),
(4, 'Apo Island', 'Apo Island is one of the top diving and snorkeling destinations in the Philippines. This world- famous island located a few kilometers off the southern tip of Negros Oriental, never fails to amaze divers with its rich community-protected marine life.', '../img/apoisland.jpg', '2025-08-08 10:43:25'),
(5, 'Rock formations at Bitaog Beach’s western end', 'The rock formations at the western end of Bitaog Beach are known for their large size and unique shapes, making them a prominent feature of the beach. These formations, along with the beach\'s white sand and clear blue waters, are a major draw for visitors. ', 'https://live.staticflickr.com/65535/48115452688_c4e792fb95_b.jpg', '2025-08-08 11:05:23'),
(6, 'Limasawa Island', 'Limasawa Island is best known as the site of the first Christian mass in the Philippines, celebrated on March 31, 1521, by Ferdinand Magellans expedition. This event is historically significant as it marks the beginning and birth of Christianity in the Philippines.', '../img/Limasawa-Island-Leyte.jpg', '2025-08-08 11:21:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `carousel_ft_db`
--
ALTER TABLE `carousel_ft_db`
  ADD PRIMARY KEY (`cft_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_ft_db`
--
ALTER TABLE `hero_ft_db`
  ADD PRIMARY KEY (`hft_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel_ft_db`
--
ALTER TABLE `carousel_ft_db`
  MODIFY `cft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hero_ft_db`
--
ALTER TABLE `hero_ft_db`
  MODIFY `hft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
