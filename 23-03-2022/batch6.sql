-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 01:53 PM
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
-- Database: `batch6`
--

-- --------------------------------------------------------

--
-- Table structure for table `AGENTS`
--

CREATE TABLE `AGENTS` (
  `AGENT_CODE` varchar(6) NOT NULL,
  `AGENT_NAME` varchar(40) DEFAULT NULL,
  `WORKING_AREA` varchar(35) DEFAULT NULL,
  `COMMISSION` bigint(20) DEFAULT NULL,
  `PHONE_NO` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AGENTS`
--

INSERT INTO `AGENTS` (`AGENT_CODE`, `AGENT_NAME`, `WORKING_AREA`, `COMMISSION`, `PHONE_NO`, `COUNTRY`) VALUES
('A001', 'Subbarao', 'Bangalore', 32, '077-12346674', ''),
('A002', 'Mukesh', 'Mumbai', 232, '029-12358964', ''),
('A003', 'Alex ', 'London', 23, '075-12458969', ''),
('A004', 'Ivan', 'Torento', 232, '008-22544166', ''),
('A005', 'Anderson', 'Brisban', 83, '045-21447739', ''),
('A006', 'McDen', 'London', 3, '078-22255588', ''),
('A007', 'Ramasundar', 'Bangalore', 2, '077-25814763', ''),
('A008', 'Alford', 'New York', 22, '044-25874365', ''),
('A009', 'Benjamin', 'Hampshair', 22, '008-22536178', ''),
('A010', 'Santakumar', 'Chennai', 213, '007-22388644', ''),
('A011', 'Ravi Kumar', 'Bangalore', 232, '077-45625874', ''),
('A012', 'Lucida', 'San Jose', 13, '044-52981425', '');

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE `CUSTOMER` (
  `CUST_CODE` varchar(6) NOT NULL,
  `CUST_NAME` varchar(40) NOT NULL,
  `CUST_CITY` varchar(35) DEFAULT NULL,
  `WORKING_AREA` varchar(35) NOT NULL,
  `CUST_COUNTRY` varchar(20) NOT NULL,
  `GRADE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`CUST_CODE`, `CUST_NAME`, `CUST_CITY`, `WORKING_AREA`, `CUST_COUNTRY`, `GRADE`) VALUES
('C00001', 'Micheal', 'New York', 'New York', 'USA', '2'),
('C00002', 'Bolt', 'New York', 'New York', 'USA', '3'),
('C00013', 'Holmes', 'London', 'London', 'UK', '2'),
('C00015', 'Stuart', 'London', 'London', 'UK', '1'),
('C00018', 'Fleming', 'Brisban', 'Brisban', 'Australia', '2'),
('C00019', 'Yearannaidu', 'Chennai', 'Chennai', 'India', '1'),
('C00020', 'Albert', 'New York', 'New York', 'USA', '3'),
('C00021', 'Jacks', 'Brisban', 'Brisban', 'Australia', '1'),
('C00024', 'Cook', 'London', 'London', 'UK', '2'),
('C00025', 'Ravindran', 'Bangalore', 'Bangalore', 'India', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Order_Cd` varchar(50) NOT NULL,
  `Part` varchar(30) NOT NULL,
  `Cost_type` varchar(30) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Sum_of_Parts` bigint(20) NOT NULL,
  `Total_measure` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Order_Cd`, `Part`, `Cost_type`, `Rate`, `Sum_of_Parts`, `Total_measure`) VALUES
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
-- Table structure for table `employeed`
--

CREATE TABLE `employeed` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `State` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeed`
--

INSERT INTO `employeed` (`ID`, `First_Name`, `Last_Name`, `Phone`, `Email`, `State`) VALUES
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
-- Table structure for table `ORDERS`
--

CREATE TABLE `ORDERS` (
  `ORD_NUM` double(9,2) NOT NULL,
  `ORD_AMOUNT` double(6,2) NOT NULL,
  `ADVANCE_AMOUNT` double(9,3) NOT NULL,
  `ORD_DATE` date NOT NULL,
  `CUST_CODE` varchar(6) NOT NULL,
  `AGENT_CODE` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ORDERS`
--

INSERT INTO `ORDERS` (`ORD_NUM`, `ORD_AMOUNT`, `ADVANCE_AMOUNT`, `ORD_DATE`, `CUST_CODE`, `AGENT_CODE`) VALUES
(200100.00, 1000.00, 600.000, '2008-08-01', 'C00013', 'A003'),
(200110.00, 3000.00, 500.000, '2008-04-15', 'C00019', 'A010'),
(200107.00, 4500.00, 900.000, '2008-08-30', 'C00007', 'A010'),
(200112.00, 2000.00, 400.000, '2008-05-30', 'C00016', 'A007'),
(200113.00, 4000.00, 600.000, '2008-06-10', 'C00022', 'A002'),
(200102.00, 2000.00, 300.000, '2008-05-25', 'C00012', 'A012'),
(200100.00, 1000.00, 600.000, '2008-08-01', 'C00013', 'A003'),
(200110.00, 3000.00, 500.000, '2008-04-15', 'C00019', 'A010'),
(200107.00, 4500.00, 900.000, '2008-08-30', 'C00007', 'A010'),
(200112.00, 2000.00, 400.000, '2008-05-30', 'C00016', 'A007'),
(200113.00, 4000.00, 600.000, '2008-06-10', 'C00022', 'A002'),
(200102.00, 2000.00, 300.000, '2008-05-25', 'C00012', 'A012'),
(200114.00, 3500.00, 2000.000, '2008-08-15', 'C00002', 'A008'),
(200122.00, 2500.00, 400.000, '2008-09-16', 'C00003', 'A004'),
(200118.00, 500.00, 100.000, '2008-07-20', 'C00023', 'A006'),
(200119.00, 4000.00, 700.000, '2008-09-16', 'C00007', 'A010');

-- --------------------------------------------------------

--
-- Table structure for table `ORDERS2`
--

CREATE TABLE `ORDERS2` (
  `ORD_NUM` double(12,2) NOT NULL,
  `ORD_AMOUNT` double(12,2) NOT NULL,
  `ADVANCE_AMOUNT` double(12,2) NOT NULL,
  `ORD_DATE` date NOT NULL,
  `CUST_CODE` varchar(6) NOT NULL,
  `AGENT_CODE` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ORDERS2`
--

INSERT INTO `ORDERS2` (`ORD_NUM`, `ORD_AMOUNT`, `ADVANCE_AMOUNT`, `ORD_DATE`, `CUST_CODE`, `AGENT_CODE`) VALUES
(200101.00, 3000.00, 1000.00, '2008-07-15', 'C00001', 'A008'),
(200103.00, 1500.00, 700.00, '2008-05-15', 'C00021', 'A005'),
(200104.00, 1500.00, 500.00, '2008-03-13', 'C00006', 'A004'),
(200105.00, 2500.00, 500.00, '2008-07-18', 'C00025', 'A011'),
(200108.00, 4000.00, 600.00, '2008-02-15', 'C00008', 'A004'),
(200109.00, 3500.00, 800.00, '2008-07-30', 'C00011', 'A010'),
(200111.00, 1000.00, 300.00, '2008-07-10', 'C00020', 'A008'),
(200121.00, 1500.00, 600.00, '2008-09-23', 'C00008', 'A004'),
(200130.00, 2500.00, 400.00, '2008-07-30', 'C00025', 'A011'),
(200134.00, 4200.00, 1800.00, '2008-09-25', 'C00004', 'A005');

-- --------------------------------------------------------

--
-- Table structure for table `sdata`
--

CREATE TABLE `sdata` (
  `Student_id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdata`
--

INSERT INTO `sdata` (`Student_id`, `Fname`, `Lname`, `age`, `Phone`, `address`) VALUES
(1, 'John', 'Deo', 11, 979965555, 'sikar'),
(2, 'Max', 'Ruin', 12, 49468168168, ''),
(3, 'eaff', 'dasd', 32, 867984985, 'jaipur'),
(4, 'krish', 'star', 22, 897987811, 'jaipur'),
(5, 'jhon', 'mike', 12, 879794984, ''),
(6, 'John', 'Deo', 88, 78977987, ''),
(7, 'Max', 'Ruin', 12, 49468168, 'ajmer'),
(8, 'arnoid', 'dasd', 32, 9989898998, 'jaipur'),
(9, 'krishna', 'star', 22, 6549849849, 'gt'),
(10, 'jhon', 'mike', 12, 8797979879, 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `mobile`, `email`, `password`) VALUES
(1, 'Aaqib', 'Ahmedabad', 9876543210, 'aaqib@gmail.com', NULL),
(2, 'Aakash', 'Jaipur', 7410852963, 'aakash@gmail.com', '123'),
(3, 'somya', 'Jaipur', 7410852963, 'somya@gmail.com', '123'),
(4, 'sachin', 'Jaipur', 7410852963, 'sachin@gmail.com', '123'),
(5, 'krrish', 'Jaipur', 7410852963, 'krrish@gmail.com', '123'),
(6, 'mahima', 'pune', 7410852963, 'mahima@gmail.com', '123'),
(7, 'donia', 'jammu', 7410852963, 'donia@gmail.com', '123'),
(8, 'kartik', 'Jaipur', 7410852963, 'kartik@gmail.com', '123'),
(9, 'kittu', 'Jaipur', 7410852963, 'kittu@gmail.com', '1211'),
(10, 'donu', 'Jaipur', 7410852963, 'donu@gmail.com', '1ss');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `id` int(2) NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL DEFAULT '',
  `class` varchar(10) NOT NULL DEFAULT '',
  `mark` int(3) NOT NULL DEFAULT 0,
  `gender` varchar(6) NOT NULL DEFAULT 'male'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`id`, `name`, `class`, `mark`, `gender`) VALUES
(1, 'John Deo', 'Four', 75, 'female'),
(2, 'Max Ruin', 'Three', 85, 'male'),
(3, 'Arnold', 'Three', 55, 'male'),
(4, 'Krish Star', 'Four', 60, 'female'),
(5, 'John Mike', 'Four', 60, 'female'),
(6, 'Alex John', 'Four', 55, 'male'),
(7, 'My John Rob', 'Five', 78, 'male'),
(8, 'Asruid', 'Five', 85, 'male'),
(9, 'Tes Qry', 'Six', 78, 'male'),
(10, 'Big John', 'Four', 55, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `StudentData`
--

CREATE TABLE `StudentData` (
  `STUD_NO` int(11) NOT NULL,
  `STUD_NAME` varchar(50) NOT NULL,
  `STUD_PHONE` bigint(20) NOT NULL,
  `STUD_STATE` varchar(30) NOT NULL,
  `STUD_COUNT` varchar(30) NOT NULL,
  `STUD_AG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `StudentData`
--

INSERT INTO `StudentData` (`STUD_NO`, `STUD_NAME`, `STUD_PHONE`, `STUD_STATE`, `STUD_COUNT`, `STUD_AG`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AGENTS`
--
ALTER TABLE `AGENTS`
  ADD PRIMARY KEY (`AGENT_CODE`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`CUST_CODE`);

--
-- Indexes for table `ORDERS2`
--
ALTER TABLE `ORDERS2`
  ADD PRIMARY KEY (`ORD_NUM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
