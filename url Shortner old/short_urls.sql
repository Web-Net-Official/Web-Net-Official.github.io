-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 09:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` int(10) UNSIGNED NOT NULL,
  `long_url` varchar(255) NOT NULL,
  `short_code` varbinary(6) NOT NULL,
  `date_created` int(10) UNSIGNED NOT NULL,
  `counter` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `long_url`, `short_code`, `date_created`, `counter`) VALUES
(7, 'https://www.youtube.com/', 0x38, 1537763745, 2),
(8, 'https://github.com/MEGAMINDMK', 0x39, 1537763768, 2),
(9, 'https://discordapp.com/channels/@me', 0x62, 1537763804, 1),
(10, 'http://wno-host.ddns.net:90/GSB/login.php', 0x63, 1537763818, 1),
(11, 'https://www.tdcs.tk/', 0x64, 1537764161, 2),
(12, 'https://www.google.com', 0x66, 1537765302, 1),
(13, 'http://wno-host.ddns.net:90/phpmyadmin/sql.php?db=url&table=short_urls&pos=0', 0x67, 1537765331, 0),
(14, 'https://discordapp.com/channels/', 0x68, 1537766182, 0),
(15, 'http://wno-host.ddns.net:90/phpmyadmin/server_databases.php', 0x6a, 1537768083, 1),
(16, 'https://www.google.com/search?q=gray+background+HD&client=firefox-b&tbm=isch&source=iu&ictx=1&fir=V3okW6W1_9YoQM%253A%252CwoWeCZvDcqe06M%252C_&usg=AI4_-kSmjsJWDCedLzFw8JQIuY0f_rSzDw&sa=X&ved=2ahUKEwiz3uXXhdPdAhUPVhoKHeHWBEwQ9QEwBHoECAYQDA#imgdii=kgzGbugUR', 0x6b, 1537771737, 1),
(17, 'https://www.google.com/search?q=gray+background+HD&client=firefox-b&tbm=isch&source=iu&ictx=1&fir=V3okW6W1_9YoQM%253A%252CwoWeCZvDcqe06M%252C_&usg=AI4_-kSmjsJWDCedLzFw8JQIuY0f_rSzDw&sa=X&ved=2ahUKEwiz3uXXhdPdAhUPVhoKHeHWBEwQ9QEwBHoECAYQDA#imgdii=kgzGbugUR', 0x6d, 1537771873, 0),
(18, 'https://www.google.com/search?q=gray+background+HD&client=firefox-b&tbm=isch&source=iu&ictx=1&fir=V3okW6W1_9YoQM%253A%252CwoWeCZvDcqe06M%252C_&usg=AI4_-kSmjsJWDCedLzFw8JQIuY0f_rSzDw&sa=X&ved=2ahUKEwiz3uXXhdPdAhUPVhoKHeHWBEwQ9QEwBHoECAYQDA#imgdii=kgzGbugUR', 0x6e, 1537771916, 0),
(19, 'https://www.google.com/search?q=gray+background+HD&client=firefox-b&tbm=isch&source=iu&ictx=1&fir=V3okW6W1_9YoQM%253A%252CwoWeCZvDcqe06M%252C_&usg=AI4_-kSmjsJWDCedLzFw8JQIuY0f_rSzDw&sa=X&ved=2ahUKEwiz3uXXhdPdAhUPVhoKHeHWBEwQ9QEwBHoECAYQDA#imgdii=kgzGbugUR', 0x70, 1537771992, 0),
(20, 'https://www.google.com/search?q=gray+background+HD&client=firefox-b&tbm=isch&source=iu&ictx=1&fir=V3okW6W1_9YoQM%253A%252CwoWeCZvDcqe06M%252C_&usg=AI4_-kSmjsJWDCedLzFw8JQIuY0f_rSzDw&sa=X&ved=2ahUKEwiz3uXXhdPdAhUPVhoKHeHWBEwQ9QEwBHoECAYQDA#imgdii=kgzGbugUR', 0x71, 1537772024, 0),
(21, 'http://wno-host.ddns.net:90/url/', 0x72, 1537774526, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `short_code` (`short_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
