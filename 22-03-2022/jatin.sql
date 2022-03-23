-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 10:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Blood Group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`FName`, `LName`, `Age`, `DOB`, `Sex`, `Blood Group`) VALUES
('jatin', 'kumawat', 22, '2000-03-29', 'male', 'B+'),
('shashank', 'tak', 21, '2001-01-26', 'male', 'AB+'),
('abs', 'sss', 10, '2012-05-04', 'Female', 'O+'),
('sf', 'vsvsv', 9, '2013-03-20', 'Male', 'A-'),
('sdfdlnsdf', 'zkcnz', 8, '2014-03-12', 'Male', 'B-'),
('jkfdsbnfkj', 'adskjna', 12, '2010-09-03', 'Female', 'AB-'),
('akjdn', 'akdjnqo', 21, '2001-02-10', 'Female', 'O-'),
('sonfon', 'adac', 32, '1990-03-06', 'Male', 'O+'),
('kjsfdnkfj', 'sfkfjnwk', 20, '2002-04-11', 'Female', 'AB+'),
('asknfjian', 'kDNa', 22, '2000-11-22', 'Male', 'O+'),
('jatin', 'kumawat', 22, '2000-03-29', 'male', 'B+'),
('shashank', 'tak', 21, '2001-01-26', 'male', 'AB+'),
('abs', 'sss', 10, '2012-05-04', 'Female', 'O+'),
('sf', 'vsvsv', 9, '2013-03-20', 'Male', 'A-'),
('sdfdlnsdf', 'zkcnz', 8, '2014-03-12', 'Male', 'B-'),
('jkfdsbnfkj', 'adskjna', 12, '2010-09-03', 'Female', 'AB-'),
('akjdn', 'akdjnqo', 21, '2001-02-10', 'Female', 'O-'),
('sonfon', 'adac', 32, '1990-03-06', 'Male', 'O+'),
('kjsfdnkfj', 'sfkfjnwk', 20, '2002-04-11', 'Female', 'AB+'),
('asknfjian', 'kDNa', 22, '2000-11-22', 'Male', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`ID`, `Fname`, `Lname`, `Age`, `RollNo`, `Marks`) VALUES
(1, 'John', 'Deo', 22, 101, 75),
(2, 'Max', 'Ruin', 21, 102, 85),
(3, 'arnoid', '', 22, 103, 55),
(4, 'krish', 'star', 22, 104, 60),
(5, 'jhon', 'mike', 21, 105, 84),
(6, 'alex', 'jhon', 20, 106, 74),
(7, 'asruid', '', 20, 107, 44),
(8, 'tes', 'qry', 19, 108, 84),
(9, 'Myjhon', 'rob', 20, 109, 95),
(10, 'big', 'jhon', 22, 110, 75),
(1, 'John', 'Deo', 22, 101, 75),
(2, 'Max', 'Ruin', 21, 102, 85),
(3, 'arnoid', '', 22, 103, 55),
(4, 'krish', 'star', 22, 104, 60),
(5, 'jhon', 'mike', 21, 105, 84),
(6, 'alex', 'jhon', 20, 106, 74),
(7, 'asruid', '', 20, 107, 44),
(8, 'tes', 'qry', 19, 108, 84),
(9, 'Myjhon', 'rob', 20, 109, 95),
(10, 'big', 'jhon', 22, 110, 75);

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `Student_id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`Student_id`, `Fname`, `Lname`, `age`, `Phone`, `address`) VALUES
(1, 'John', 'Deo', 11, 979965555, 'sikar'),
(2, 'Max', 'Ruin', 12, 49468168168, ''),
(3, 'eaff', 'dasd', 32, 867984985, 'jaipur'),
(4, 'krish', 'star', 22, 897987811, 'jaipur'),
(5, 'jhon', 'mike', 12, 879794984, ''),
(6, 'John', 'Deo', 88, 78977987, ''),
(7, 'Max', 'Ruin', 12, 49468168, 'ajmer'),
(8, 'arnoid', 'dasd', 32, 9989898998, 'jaipur'),
(9, 'krishna', 'star', 22, 6549849849, 'gt'),
(10, 'jhon', 'mike', 12, 8797979879, 'jaipur'),
(6, 'John', 'Deo', 88, 78977987, ''),
(7, 'Max', 'Ruin', 12, 49468168, 'ajmer'),
(8, 'arnoid', 'dasd', 32, 9989898998, 'jaipur'),
(9, 'krishna', 'star', 22, 6549849849, 'gt'),
(10, 'jhon', 'mike', 12, 8797979879, 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `EmployeeId` int(11) NOT NULL,
  `Emp_name` varchar(20) NOT NULL,
  `Emp_salary` bigint(20) NOT NULL,
  `Emp_experience` int(11) NOT NULL,
  `Departement` varchar(20) NOT NULL,
  `Joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`EmployeeId`, `Emp_name`, `Emp_salary`, `Emp_experience`, `Departement`, `Joining_date`) VALUES
(1001, 'jatin kumawat', 300000, 1, 'full stack', '2022-02-02'),
(1002, 'shahank tak', 300000, 1, 'full stack', '2022-02-02'),
(1003, 'krrishna', 300000, 1, 'fullstack', '2022-02-02'),
(1004, 'somya', 300000, 1, 'fullstack', '2022-02-02'),
(1005, 'akash', 300000, 1, 'fullstack', '2022-02-02'),
(1006, 'mukul', 300000, 1, 'fullstack', '2022-02-02'),
(1007, 'ronak', 300000, 1, 'fullstack', '2022-02-02'),
(1008, 'himanshu', 300000, 1, 'fullstack', '2022-02-02'),
(1009, 'nidhi', 300000, 1, 'fullstack', '2022-02-02'),
(1010, 'aaqib', 300000, 1, 'fullstack', '2022-02-02'),
(1011, 'jatin kumawat', 300000, 1, 'full stack', '2022-02-02'),
(1012, 'shahank tak', 300000, 1, 'full stack', '2022-02-02'),
(1013, 'krrishna', 300000, 1, 'fullstack', '2022-02-02'),
(1014, 'somya', 300000, 1, 'fullstack', '2022-02-02'),
(1015, 'akash', 300000, 1, 'fullstack', '2022-02-02'),
(1016, 'mukul', 300000, 1, 'fullstack', '2022-02-02'),
(1017, 'ronak', 300000, 1, 'fullstack', '2022-02-02'),
(1018, 'himanshu', 300000, 1, 'fullstack', '2022-02-02'),
(1019, 'nidhi', 300000, 1, 'fullstack', '2022-02-02'),
(1021, 'aaqib', 300000, 1, 'fullstack', '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `Order_Cd` varchar(50) NOT NULL,
  `Part` varchar(30) NOT NULL,
  `Cost_type` varchar(30) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Sum_of_Parts` bigint(20) NOT NULL,
  `Total_measure` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`Order_Cd`, `Part`, `Cost_type`, `Rate`, `Sum_of_Parts`, `Total_measure`) VALUES
('A0001', 'Iron Case', 'Metal', 444, 45421, 1124),
('A0001', 'Iron Case', 'Welding', 4545, 41215, 142446),
('A0001', 'Iron Case', 'Packaging', 4546, 774423, 11123),
('A0001', 'Iron Case', 'Packaging', 56454, 2421, 111132),
('A0001', 'Steel Bolt', 'Metal', 454, 773545, 2211),
('A0001', 'Steel Bolt', 'Welding', 4454, 735, 24365),
('B0002', 'Steel Bolt', 'Packaging', 55445, 7454, 2253),
('B0002', 'Steel Bolt', 'Packaging', 45445, 4234, 54567),
('B0002', 'Iron Case', 'Metal', 4544, 4234, 4243324),
('B0002', 'Iron Case', 'Welding', 45455, 465, 22342),
('A0001', 'Iron Case', 'Metal', 444, 45421, 1124),
('A0001', 'Iron Case', 'Welding', 4545, 41215, 142446),
('A0001', 'Iron Case', 'Packaging', 4546, 774423, 11123),
('A0001', 'Iron Case', 'Packaging', 56454, 2421, 111132),
('A0001', 'Steel Bolt', 'Metal', 454, 773545, 2211),
('A0001', 'Steel Bolt', 'Welding', 4454, 735, 24365),
('B0002', 'Steel Bolt', 'Packaging', 55445, 7454, 2253),
('B0002', 'Steel Bolt', 'Packaging', 45445, 4234, 54567),
('B0002', 'Iron Case', 'Metal', 4544, 4234, 4243324),
('B0002', 'Iron Case', 'Welding', 45455, 465, 22342);

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `STUD_NO` int(11) NOT NULL,
  `STUD_NAME` varchar(50) NOT NULL,
  `STUD_PHONE` bigint(20) NOT NULL,
  `STUD_STATE` varchar(30) NOT NULL,
  `STUD_COUNT` varchar(30) NOT NULL,
  `STUD_AG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`STUD_NO`, `STUD_NAME`, `STUD_PHONE`, `STUD_STATE`, `STUD_COUNT`, `STUD_AG`) VALUES
(1, 'Ram', 979798799, 'rajasthan', 'India', 24),
(2, 'ram', 979798799, 'jammu', 'India', 21),
(3, 'shayam', 979798799, 'jammu', 'India', 23),
(4, 'sumit', 979798799, 'rajasthan', 'India', 22),
(5, 'riya', 979798799, 'jammu', 'India', 21),
(6, 'joy', 979798799, 'haryana', 'India', 23),
(7, 'nikki', 979798799, 'rajasthan', 'India', 22),
(8, 'ronit', 979798799, 'haryana', 'India', 23),
(9, 'mayank', 979798799, 'haryana', 'India', 21),
(10, 'donia', 987979879, 'jammu', 'India', 22),
(1, 'Ram', 979798799, 'rajasthan', 'India', 24),
(2, 'ram', 979798799, 'jammu', 'India', 21),
(3, 'shayam', 979798799, 'jammu', 'India', 23),
(4, 'sumit', 979798799, 'rajasthan', 'India', 22),
(5, 'riya', 979798799, 'jammu', 'India', 21),
(6, 'joy', 979798799, 'haryana', 'India', 23),
(7, 'nikki', 979798799, 'rajasthan', 'India', 22),
(8, 'ronit', 979798799, 'haryana', 'India', 23),
(9, 'mayank', 979798799, 'haryana', 'India', 21),
(10, 'donia', 987979879, 'jammu', 'India', 22);

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `customer_is` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`customer_is`, `name`, `phone`, `city`, `state`, `pin_code`) VALUES
(1, 'ram', 984984984, 'jaipur', 'rajasthan', 302022),
(2, 'ram', 98988825, 'sikar', 'rajasthan', 332715),
(3, 'shayaam', 985565455, 'alwar', 'rajasthan', 335658),
(4, 'ritik', 985564552, 'puna', 'maharastra', 558465),
(5, 'ronit', 9879848111, 'jaipur', 'rajasthan', 989998),
(6, 'ankur', 98779498, 'jaipur', 'rajasthan', 302022),
(7, 'shashank', 54564564, 'jaipur', 'rajasthan', 302022),
(8, 'aakash', 54564654, 'jaipur', 'rajasthan', 302022),
(9, 'vivek', 564564654, 'alwar', 'rajasthan', 302022),
(10, 'sachin', 4654646, 'jaipur', 'rajasthan', 302022),
(1, 'ram', 984984984, 'jaipur', 'rajasthan', 302022),
(2, 'ram', 98988825, 'sikar', 'rajasthan', 332715),
(3, 'shayaam', 985565455, 'alwar', 'rajasthan', 335658),
(4, 'ritik', 985564552, 'puna', 'maharastra', 558465),
(5, 'ronit', 9879848111, 'jaipur', 'rajasthan', 989998),
(6, 'ankur', 98779498, 'jaipur', 'rajasthan', 302022),
(7, 'shashank', 54564564, 'jaipur', 'rajasthan', 302022),
(8, 'aakash', 54564654, 'jaipur', 'rajasthan', 302022),
(9, 'vivek', 564564654, 'alwar', 'rajasthan', 302022),
(10, 'sachin', 4654646, 'jaipur', 'rajasthan', 302022);

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `State` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table8`
--

INSERT INTO `table8` (`ID`, `First_Name`, `Last_Name`, `Phone`, `Email`, `State`) VALUES
(1, 'jk', 'f', 8498498, 'jk@gmail.com', 'rajasthan'),
(2, 'jhon', 'jin', 54984484, 'john@gmail.com', 'rajasthan'),
(3, 'emma', 'watson', 545646464, 'emma@gmail.com', 'rajasthan'),
(4, 'kisty', 'alex', 654564646, 'kisty@gmail.com', 'rajasthan'),
(5, 'kartik', 'lohar', 464649849, 'kartik@gmail.com', 'rajasthan'),
(6, 'somay', 'loda', 464646494, 'somya', 'rajasthan'),
(7, 'dipti', 'loda', 5416494, 'dipti@gmail.com', 'rajasthan'),
(8, 'mukesh', 'jat', 4674, 'mukesh@gmail.com', 'rajasthan'),
(9, 'jatin', 'kumawat', 51168418, 'jatin@gmail.com', 'rajasthan'),
(10, 'shashank', 'tak', 46464, 'shashank@gmail.com', 'rajasthan'),
(1, 'jk', 'f', 8498498, 'jk@gmail.com', 'rajasthan'),
(2, 'jhon', 'jin', 54984484, 'john@gmail.com', 'rajasthan'),
(3, 'emma', 'watson', 545646464, 'emma@gmail.com', 'rajasthan'),
(4, 'kisty', 'alex', 654564646, 'kisty@gmail.com', 'rajasthan'),
(5, 'kartik', 'lohar', 464649849, 'kartik@gmail.com', 'rajasthan'),
(6, 'somay', 'loda', 464646494, 'somya', 'rajasthan'),
(7, 'dipti', 'loda', 5416494, 'dipti@gmail.com', 'rajasthan'),
(8, 'mukesh', 'jat', 4674, 'mukesh@gmail.com', 'rajasthan'),
(9, 'jatin', 'kumawat', 51168418, 'jatin@gmail.com', 'rajasthan'),
(10, 'shashank', 'tak', 46464, 'shashank@gmail.com', 'rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `table9`
--

CREATE TABLE `table9` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rollno` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table9`
--

INSERT INTO `table9` (`ID`, `name`, `rollno`, `class`, `section`, `batch`) VALUES
(1, 'jk', 21, 6, 'g', '2'),
(2, 'ram', 22, 6, 'b', '1'),
(3, 'shayaam', 23, 6, 'b', '1'),
(4, 'ritik', 24, 6, 'b', '2'),
(5, 'ronit', 25, 6, 'a', '3'),
(6, 'ankur', 26, 6, 'a', '2'),
(7, 'shashank', 27, 6, 'd', '1'),
(8, 'aakash', 28, 6, 'c', '2'),
(9, 'vivek', 29, 5, 'a', '2'),
(10, 'sachin', 30, 6, 'a', '1'),
(1, 'jk', 21, 6, 'g', '2'),
(2, 'ram', 22, 6, 'b', '1'),
(3, 'shayaam', 23, 6, 'b', '1'),
(4, 'ritik', 24, 6, 'b', '2'),
(5, 'ronit', 25, 6, 'a', '3'),
(6, 'ankur', 26, 6, 'a', '2'),
(7, 'shashank', 27, 6, 'd', '1'),
(8, 'aakash', 28, 6, 'c', '2'),
(9, 'vivek', 29, 5, 'a', '2'),
(10, 'sachin', 30, 6, 'a', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table10`
--

CREATE TABLE `table10` (
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table10`
--

INSERT INTO `table10` (`name`, `age`, `rollno`, `city`, `state`, `pin_code`) VALUES
('ram', 11, 21, 'jaipur', 'rajasthan', 302022),
('ram', 12, 22, 'sikar', 'rajasthan', 332715),
('shayaam', 32, 23, 'alwar', 'rajasthan', 335658),
('ritik', 22, 24, 'puna', 'maharastra', 558465),
('ronit', 12, 25, 'jaipur', 'rajasthan', 989998),
('ankur', 23, 26, 'jaipur', 'rajasthan', 302022),
('shashank', 21, 27, 'jaipur', 'rajasthan', 302022),
('aakash', 22, 28, 'jaipur', 'rajasthan', 302022),
('vivek', 22, 29, 'alwar', 'rajasthan', 302022),
('sachin', 22, 30, 'jaipur', 'rajasthan', 302022),
('ram', 11, 21, 'jaipur', 'rajasthan', 302022),
('ram', 12, 22, 'sikar', 'rajasthan', 332715),
('shayaam', 32, 23, 'alwar', 'rajasthan', 335658),
('ritik', 22, 24, 'puna', 'maharastra', 558465),
('ronit', 12, 25, 'jaipur', 'rajasthan', 989998),
('ankur', 23, 26, 'jaipur', 'rajasthan', 302022),
('shashank', 21, 27, 'jaipur', 'rajasthan', 302022),
('aakash', 22, 28, 'jaipur', 'rajasthan', 302022),
('vivek', 22, 29, 'alwar', 'rajasthan', 302022),
('sachin', 22, 30, 'jaipur', 'rajasthan', 302022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD UNIQUE KEY `EmployeeId` (`EmployeeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
