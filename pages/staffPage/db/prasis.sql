-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prasis`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_tbl`
--

CREATE TABLE `diagnosis_tbl` (
  `Diagnosis_ID` int(11) NOT NULL,
  `Diagnosis` mediumtext NOT NULL,
  `year` date NOT NULL,
  `Patient_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosis_tbl`
--

INSERT INTO `diagnosis_tbl` (`Diagnosis_ID`, `Diagnosis`, `year`, `Patient_ID`) VALUES
(6, 'gwapo\r\nmaot\r\ngwapo\r\nmaot', '2022-06-22', 8),
(7, 'gwapa kaayo \r\nsexy pa gud', '2022-06-21', 9);

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `Patient_ID` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `bday` date NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`Patient_ID`, `fname`, `lname`, `middle_name`, `occupation`, `address`, `email`, `phone`, `bday`, `age`, `gender`) VALUES
(7, 'Judy Ann', 'Berallo', 'Contado', 'Engineer', 'Leyte', 'jeckberallo@gmail.com', 967389291, '2022-06-09', 24, 'female'),
(8, 'Glenville', 'Madeja', 'Bandal', 'Engineer', 'BIliran', 'jjj@gmail.com', 23298, '2022-06-06', 24, 'male'),
(9, 'jeck', 'hehe', 'jj', 'kk', 'kkk', 'dsa@jj.com', 93, '2022-06-17', 23, 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosis_tbl`
--
ALTER TABLE `diagnosis_tbl`
  ADD PRIMARY KEY (`Diagnosis_ID`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis_tbl`
--
ALTER TABLE `diagnosis_tbl`
  MODIFY `Diagnosis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosis_tbl`
--
ALTER TABLE `diagnosis_tbl`
  ADD CONSTRAINT `diagnosis_tbl_ibfk_1` FOREIGN KEY (`patient_ID`) REFERENCES `patient_tbl` (`Patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
