-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:02 PM
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
-- Database: `studypoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `T_ID` int(5) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`T_ID`, `Pass`) VALUES
(2021, 'itsadmin1');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `C_ID` int(4) NOT NULL,
  `Fees` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`C_ID`, `Fees`) VALUES
(105, 1500),
(106, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `commerce`
--

CREATE TABLE `commerce` (
  `C_ID` int(4) NOT NULL,
  `Fees` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commerce`
--

INSERT INTO `commerce` (`C_ID`, `Fees`) VALUES
(107, 2000),
(108, 2000),
(109, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_ID` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `T_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `Name`, `T_ID`) VALUES
(101, 'Physics', 2021),
(102, 'Chemistry', 2022),
(103, 'Mathematics', 2023),
(104, 'Biology', 2024),
(105, 'History', 2025),
(106, 'Sociology', 2026),
(107, 'Accounting', 2027),
(108, 'Finance & Banking', 2028),
(109, 'Economics', 2029),
(110, 'English', 2030),
(111, 'Bangla', 2031),
(112, 'ICT', 2032);

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `S_ID` int(6) NOT NULL,
  `C_ID` int(4) NOT NULL,
  `Status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`S_ID`, `C_ID`, `Status`) VALUES
(30301, 101, 'Enrolled'),
(30302, 101, 'Enrolled'),
(30303, 101, 'Enrolled'),
(30304, 101, 'Enrolled'),
(30305, 101, 'Enrolled'),
(30306, 102, 'Enrolled'),
(30307, 102, 'Enrolled'),
(30308, 102, 'Enrolled'),
(30309, 102, 'Enrolled'),
(30310, 102, 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `T_ID` int(5) NOT NULL,
  `C_ID` int(4) NOT NULL,
  `S_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`T_ID`, `C_ID`, `S_ID`) VALUES
(2021, 101, 30301),
(2021, 101, 30302),
(2021, 101, 30303),
(2021, 101, 30304),
(2021, 101, 30305),
(2021, 102, 30306),
(2021, 102, 30307),
(2021, 102, 30308),
(2021, 102, 30309),
(2021, 102, 30310);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `C_ID` int(4) NOT NULL,
  `Fees` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`C_ID`, `Fees`) VALUES
(110, 1500),
(111, 1500),
(112, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `C_ID` int(4) NOT NULL,
  `Fees` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`C_ID`, `Fees`) VALUES
(101, 2000),
(102, 2000),
(103, 2000),
(104, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` int(6) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `Name`, `Mail`, `Gender`, `Pass`) VALUES
(30301, 'Anisul Islam', 'anis123@gmail.com', 'Male', 'anisul123'),
(30302, 'Jahidul Islam', 'jahid123@gmail.com', 'Male', 'jahidul123'),
(30303, 'Atikul Islam', 'atik123@gmail.com', 'Male', 'atikul123'),
(30304, 'Ajijul Islam', 'ajij123@gmail.com', 'Male', 'ajijul123'),
(30305, 'Ayesha Akhter', 'ayesha123@gmail.com', 'Female', 'ayesha123'),
(30306, 'Anjuma Islam', 'anjuma123@gmail.com', 'Female', 'anjuma123'),
(30307, 'Farhana akhter', 'farhana123@gmail.com', 'Female', 'farhana123'),
(30308, 'Jannatul Ferdaus', 'jannat123@gmail.com', 'Female', 'jannatul123'),
(30309, 'Abrar Hussain', 'abrar123@gmail.com', 'Male', 'abrar123'),
(30310, 'Bashir Ahmed', 'bashir123@gmail.com', 'Male', 'bashir123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_ID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(30) DEFAULT NULL,
  `Ph_No` varchar(20) DEFAULT NULL,
  `Specialization` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_ID`, `Name`, `Mail`, `Ph_No`, `Specialization`) VALUES
(2021, 'Mia Mahmudul Hoque Shaon', 'houque2021@gmail.com', '01600000001', 'Physics'),
(2022, 'Nazmul Islam Srabon', 'srabon2022@gmail.com', '01600000002', 'Chemistry'),
(2023, 'Shajedul Hasan Rahin', 'rahin2023@gmail.com', '01600000003', 'Mathematics'),
(2024, 'Asif Ahmed', 'asif2024@gmail.com', '01600000004', 'Biology'),
(2025, 'Bulbul Ahmed', 'bulbul2025@gmail.com', '01600000005', 'History'),
(2026, 'Chandan Kumar', 'kumar2026@gmail.com', '01600000006', 'Sociology'),
(2027, 'Dipjol Ahmed', 'dipjol2027@gmail.com', '01600000007', 'Accounting'),
(2028, 'Ekabbor Ali', 'ali2028@gmail.com', '01600000008', 'Finance & Banking'),
(2029, 'Faisal Goni', 'goni2029@gmail.com', '01600000009', 'Economics'),
(2030, 'Giasuddin', 'gias2030@gmail.com', '01600000010', 'English'),
(2031, 'Hamidur Rahman', 'hamid2031@gmail.com', '01600000011', 'Bangla'),
(2032, 'Ikbal Hossain', 'ikbal2032@gmail.com', '01600000012', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `T_ID` int(5) NOT NULL,
  `S_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`T_ID`, `S_ID`) VALUES
(2021, 30301),
(2021, 30302),
(2021, 30303),
(2021, 30304),
(2021, 30305),
(2022, 30306),
(2022, 30307),
(2022, 30308),
(2022, 30309),
(2022, 30310);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `commerce`
--
ALTER TABLE `commerce`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`S_ID`,`C_ID`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`T_ID`,`C_ID`,`S_ID`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`T_ID`,`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30311;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
