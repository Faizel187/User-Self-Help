-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 02:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `self_help_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areno` int(5) NOT NULL,
  `arename` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areno`, `arename`) VALUES
(1, '3rd Party Repairs'),
(2, 'Processes'),
(3, 'Software'),
(4, 'Account'),
(5, 'Security'),
(6, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catno` int(5) NOT NULL,
  `catname` varchar(1000) DEFAULT NULL,
  `catdesc` varchar(1000) DEFAULT NULL,
  `caticon` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catno`, `catname`, `catdesc`, `caticon`) VALUES
(1, 'Network', 'Password Reset, Connecting to network; Troubleshoot network; VPN; 3G;', NULL),
(2, 'Office 365', 'Microsoft Teams; Email; Word; Excel; PowerPoint; OneNote, OneDrive', NULL),
(3, 'Windows Settings', 'Personalization; Multiple Screens; Accessibility; Updates; Accounts; Storage; Security', NULL),
(4, 'Environment', 'Requesting Software; Hardware Troubleshooting; Printing; Backup\'s; Unified Communications; Performance;', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqno` int(5) NOT NULL,
  `faqtitle` varchar(1000) DEFAULT NULL,
  `faqcontent` varchar(1000) DEFAULT NULL,
  `areno` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feeno` int(5) NOT NULL,
  `solno` int(5) DEFAULT NULL,
  `feeresult` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `solno` int(5) NOT NULL,
  `soltitle` varchar(1000) DEFAULT NULL,
  `soldesc` varchar(1000) DEFAULT NULL,
  `solcreated` date DEFAULT NULL,
  `sollocation` varchar(1000) DEFAULT NULL,
  `catno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solno`, `soltitle`, `soldesc`, `solcreated`, `sollocation`, `catno`) VALUES
(19, 'User changing password to Self Help Portal', 'Steps to follow when changing your password', '2022-10-17', NULL, NULL),
(20, 'Dual display settings', 'Clients need to follow the steps mentioned for them to display in extended mode meaning 2 separate displays.', '2022-10-17', NULL, NULL),
(21, 'How to reset a-account', 'Steps to follow/instructions to change your a-account', '2022-10-17', NULL, NULL),
(22, 'Knowledge Article – Cellular Icon Disappearing', 'User wants connect to he internet using cellular connection, however cellular icon does not appear', '2022-10-17', NULL, NULL),
(23, 'Knowledge Articles-Eskom FCR 5 Service Desk', 'Eskom FCR 5 Service Desk: Outlook keeps asking for a password and will not accept it', '2022-10-17', NULL, NULL),
(24, 'Network related troubleshooting', 'Network related trouble-shooting that the client can do', '2022-10-17', NULL, NULL),
(25, 'Work from home IT telecommuting guide', 'Helpful information to assist you on your telecommuting journey!', '2022-10-17', NULL, NULL),
(26, 'VC Trouble Shooting', 'VC Trouble Shooting', '2022-10-17', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catno`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqno`),
  ADD KEY `areno` (`areno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feeno`),
  ADD KEY `solno` (`solno`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`solno`),
  ADD KEY `catno` (`catno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feeno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `solno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`areno`) REFERENCES `area` (`areno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`solno`) REFERENCES `solution` (`solno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solution`
--
ALTER TABLE `solution`
  ADD CONSTRAINT `solution_ibfk_1` FOREIGN KEY (`catno`) REFERENCES `category` (`catno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
