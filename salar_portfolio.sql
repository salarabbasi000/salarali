-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 07:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salar_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `github` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cover` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `category`, `description`, `github`, `cover`) VALUES
(1, 'Pizza of The Atlantis', 'Web Development', 'Online pizza ordering website. My first PHP/MYSQL project.', 'https://github.com/salarabbasi000/Pizza-Of-The-Atlantis', 'pota.jpg'),
(2, 'SteakIn- Online Food Order', 'Web Development', 'Online food ordering system. Developed in .Net (MVC).', 'https://github.com/salarabbasi000/SteakIn', 'steakin.jpg'),
(3, 'TestBoard- Quiz conducting platform', 'Web Development', 'A quiz taking platform with a dual interface:\\n\r\n1) A desktop application is for teachers via which they register, login, upload quiz (MCQs, T/F, blanks) with a time to complete it, and check the grades of students.\\n\r\n2) Student register, login, take quiz and solve it within a given time, view his grades for quizzes.', 'https://github.com/salarabbasi000/TestBoard/', 'T.png');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill` varchar(50) CHARACTER SET utf8 NOT NULL,
  `percent` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill`, `percent`) VALUES
('.Net(MVC,WCF,ASMX,EF)', 70),
('Angular', 60),
('HTML & CSS', 70),
('JavaScript', 60),
('ML/DL (Python)', 75),
('PHP', 80),
('SQL', 80);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(50) NOT NULL,
  `position` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `organization` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `position`, `organization`, `start_date`, `end_date`, `description`) VALUES
(1, 'Machine Learning Intern', 'SmartCity Lab- NCAI (National Center for Artificial Intelligence), NED University of Engineering & Technology', '2020-01-01', '2020-04-01', 'Currently working on the development of Deep Network on Tesseract 4.0 (An OCR Engine) to detect urdu text from jpg Files for an Urdu OCR Application. Technical documentation of tasks is also made along with it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
