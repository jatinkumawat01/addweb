-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2022 at 02:28 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountAge` (OUT `Total_Name` INT)  BEGIN
    select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=22;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Count_Name_Inout` (INOUT `Total_Name` INT, IN `Age` INT)  BEGIN
    select count(STUD_NAME) into Total_Name from StudentData where STUD_AG=Age ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Getage` (IN `age` INT)  BEGIN
    select STUD_NAME,STUD_AG,STUD_PHONE from StudentData where STUD_AG=age;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_STUD_NAME` ()  BEGIN
 select STUD_NAME,STUD_AG,STUD_PHONE from StudentData;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `Customer_Occupation` (`age` INT) RETURNS VARCHAR(20) CHARSET utf8mb4 BEGIN  
    DECLARE customer_occupation VARCHAR(20);  
    IF age > 35 THEN  
        SET customer_occupation = 'Scientist';  
    ELSEIF (age <= 35 AND   
            age >= 30) THEN  
        SET customer_occupation = 'Engineer';  
    ELSEIF age < 30 THEN  
        SET customer_occupation = 'Actor';  
END IF;  
    
    RETURN (customer_occupation);  
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Ac`
--

CREATE TABLE `Ac` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(12,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ac`
--

INSERT INTO `Ac` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/Ac/ac.jpeg', 'Ac', 'LLOYD ', '1 Ton ', 'White', '10 Years Compressor Warranty PM 2.5 Air Filter Anti Viral Dust Filter Cools at 52 degree C', 28990.00, 1),
(2, 'images/Ac/AC2.png', 'AR18TV5HLTU Split AC ', 'Sumsung', '1.5T', 'White', '<ul><li><span style=\"color: rgb(0, 0, 0); font-family: SamsungOne, arial, sans-serif; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><font size=\"2\">Convertible Mode</font></span></li><li>Convertible Mode</li><li>Warranty: 10 Years Compressor, 5 Years Condenser &amp; PCB Controller</li></ul>                                ', 37000.00, 1),
(3, 'images/Ac/ac3.png', '3 Star Split AC', 'Carrier', '1.5 T', 'White', '<span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">As per the Bureau of energy efficiency (BEE), there is 2 point energy rating drop in 2018 for non-inverter split ACS. E.g. A 2017 5 star non-inverter split ac will become 3 stars in 2018</span><br style=\"margin: 0px; padding: 0px; color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\"><span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">Type: noninverted split ac</span><br style=\"margin: 0px; padding: 0px; color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\"><span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">Condenser type: copper for best in class, energy-efficient cooling with easy maintenance</span><br style=\"margin: 0px; padding: 0px; color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\"><span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">Capacity: 1.5 ton</span><br style=\"margin: 0px; padding: 0px; color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\"><span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">Auto restart, follow me functionality, sleep mode, pm 2.5 filter</span><br style=\"margin: 0px; padding: 0px; color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\"><span style=\"color: rgb(104, 108, 111); font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14px;\">Manufacturer: Carrier Midea India Pvt ltd</span>                                ', 40925.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `AddToCart`
--

CREATE TABLE `AddToCart` (
  `UserMail` varchar(200) NOT NULL,
  `ProductName` varchar(300) NOT NULL,
  `ProductBrand` varchar(300) NOT NULL,
  `ProductPrice` double(12,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `AddToCartId` int(11) NOT NULL,
  `color` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AddToCart`
--

INSERT INTO `AddToCart` (`UserMail`, `ProductName`, `ProductBrand`, `ProductPrice`, `Quantity`, `ProductId`, `img_path`, `AddToCartId`, `color`, `size`) VALUES
('jatin@gmail.com', 'laptop', 'HP ', 40390.00, 1, 2, 'images/laptop/hp.jpg', 22, 'Jet Black', '15.6'),
('vishal@gmail.com', 'Tv', 'Angel', 40999.00, 1, 2, 'images/Tv/Angel.png', 23, 'black', '50 inch LED 4K TV');

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
-- Table structure for table `average_age`
--

CREATE TABLE `average_age` (
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `C_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_tname` varchar(100) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_id`, `category_name`, `category_tname`, `img_path`) VALUES
(1, 'Mobile', 'mobile', 'images/mobile/iphone2.jpeg'),
(2, 'Laptop', 'laptop', 'images/laptop/hp.jpg'),
(3, 'Tv', 'Tv', 'images/Tv/samsuntv1.png'),
(4, 'Shirt', 'shirt', 'images/shirt/s2.jpg'),
(5, 'T-shirt', 'tshirt', 'images/tshirt/ts3.jpg'),
(6, 'Trouser', 'trouser', 'images/trouser/t3.jpg'),
(7, 'Shoes', 'shoes', 'images/shoes/sho1.jpeg'),
(8, 'Jeans', 'jeans', 'images/jeans/j1.jpg'),
(16, 'Ac', 'Ac', 'images/Ac/ac.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `prize` double(7,2) NOT NULL,
  `Highlights` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`ImgId`, `img_path`, `title`, `prize`, `Highlights`, `details`) VALUES
(1, 'images/tshirt/cloth.jpeg', 'Rinnig', 79.00, 'Dis-cloth, green', '25x25 cm'),
(2, 'images/tshirt/cloth1.jpg', 'SOFTSPUN Microfiber Cloth', 269.00, '5 pcs - 40x40 cms - 340 GSM', 'Multi-Color - Thick Lint & Streak-Free Multipurpose Cloths - Automotive Microfibre Towels for Car Bike Cleaning Polishing Washing & Detailing'),
(3, 'images/cloth/81BjFujmp1L.jpg', 'cloths', 219.00, 'multi color', 'thik lint and streak-free');

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
  `CoustomerId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `area` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `address_type` varchar(300) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CoustomerId`, `name`, `email`, `password`, `mobile`, `area`, `city`, `state`, `landmark`, `pincode`, `address_type`, `isActive`) VALUES
(1, 'jatin kumawat', 'jatin@gmail.com', '123456', 9799623173, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `decor`
--

CREATE TABLE `decor` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) DEFAULT NULL,
  `details` text NOT NULL,
  `prize` double(7,2) NOT NULL,
  `title` text NOT NULL,
  `Highlights` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decor`
--

INSERT INTO `decor` (`ImgId`, `img_path`, `details`, `prize`, `title`, `Highlights`) VALUES
(1, 'images/decor/decor4.jpg', 'Brown, Iron, Made in India', 2700.00, 'Brown Latest gift for home decoration', 'Dust With Dry Cloth'),
(2, 'images/decor/decor1.jpg', 'home decor', 1220.30, 'decorative', ''),
(3, 'images/decor/decor3.jpg', 'Decorations/Anniversary/Christmas/New Year Theme', 551.00, 'Party Propz Golden Paper Fans Decoration', 'Set for Adult, Husband, Wife, Girls Or Boys Birthday'),
(4, 'images/decor/decor5.jpeg', 'loking good', 1300.00, 'decoration miror', 'home decoration item'),
(7, 'images/decor/decor7.jpg', 'Plastic,white, Decoration', 130.00, 'Plastic White Cycle Home Decor, For Decoration', ''),
(232, NULL, 'lkajdalks', 3322.00, 'ajdsa', 'kasadnk');

-- --------------------------------------------------------

--
-- Table structure for table `electronic`
--

CREATE TABLE `electronic` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `prize` double(7,2) NOT NULL,
  `title` int(11) NOT NULL,
  `Highlights` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `jeans`
--

CREATE TABLE `jeans` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `name` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `brand` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeans`
--

INSERT INTO `jeans` (`ImgId`, `img_path`, `name`, `size`, `color`, `brand`, `detail`, `price`, `isActive`) VALUES
(1, 'images/jeans/j2.jpeg', 'Mid-Rise Jeans with 5-Pockets', '34', 'Medium-Blue', 'DNMX', '                                                                Belt loops We recommend you buy a size smaller Machine wash Mid Rise                                                                ', 594.00, 1),
(2, 'images/jeans/j1.jpg', 'Mid-Rise Ankle-Length Jeggings', '34', 'Lt-Blue', 'FIG', '4-pocket styling Belt loops Machine wash Mid Rise Knitted twill ( 60% cotton, 30% polyester, 10% spandex)', 674.00, 1),
(3, 'images/jeans/j5.png', 'Washed Slim Fit Jeans with Whiskers', '34', 'Indigo', 'LEE COOPER', '<ul><li class=\"detail-list\" style=\"outline: transparent; margin: 0px 0px 5px 17px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; border-radius: 0px; position: relative; list-style-type: disc;\">Machine wash</li><li class=\"detail-list\" style=\"outline: transparent; margin: 0px 0px 5px 17px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; border-radius: 0px; position: relative; list-style-type: disc;\">Mid Rise</li><li class=\"detail-list\" style=\"outline: transparent; margin: 0px 0px 5px 17px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; border-radius: 0px; position: relative; list-style-type: disc;\">98.4% cotton, 1.6% elastane</li><li class=\"detail-list\" style=\"outline: transparent; margin: 0px 0px 5px 17px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; border-radius: 0px; position: relative; list-style-type: disc;\"><span style=\"outline: transparent; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; border-radius: 0px;\">Product Code:&nbsp;441177363001</span></li></ul>                                ', 612.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(12,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/laptop/mac.jpg', 'macbook', 'apple', '1.3kg', 'sliver', '16GB DDR4-3200 (2x8GB)', 105000.00, 1),
(2, 'images/laptop/hp.jpg', '15s-du1064TU', 'HP ', '15.6', 'Jet Black', 'Core i3 Processor 15.6 inches FHD Laptop (8GB/256GB SSD+1TB HDD/Windows 10/MS Office) . Operating System & Software: Pre-loaded Windows 10 Home with lifetime validity | Pre-installed Microsoft Office Home & Student 2019', 40390.00, 1),
(3, 'images/laptop/hpSilver.jpg', 'HP Pavilion x360 14m-ba013dx', 'HP ', '33.48 x 22.69 x 2.07 cm', 'Sliver', 'Intel Core i3-7100U , 6 GB DDR4-2133 SDRAM, 500 GB 5400 rpm SATA,	45 W AC power adapter', 40000.00, 1),
(4, 'images/laptop/lenovo.png', 'Lenovo Ideapad Slim 3 15IML05 ', 'Lenovo', '15.6', 'sliver', 'Performance:Core i3 10th Gen2.1 Ghz4 GB DDR4 RAM, Storage: 256 GB SSD', 36990.00, 1),
(5, 'images/laptop/dell.png', 'Lenovo V15 (82C500XWIH) ', 'Lenovo', '15.6 inches (39.62 cm)', 'sliver', 'Core i3 10th Gen1.2 Ghz4 GB DDR4 RAM , Storage 1 TB HDDSATA5400 RPM', 40100.00, 1),
(6, 'images/laptop/aser.png', 'Aspire 3 A315-58-38EV (NX.AL0EC.001)', 'Acer', '15.6 inches (39.62 cm)', 'Red', 'Core i3 11th Gen/4 GB/1 TB/Windows 10', 39998.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `birthDate`) VALUES
(1, 'Jatin kumawat', 'jatin@gmail.com', NULL),
(2, 'Jatin kumawat', 'jatin@gmail.com', NULL);

--
-- Triggers `members`
--
DELIMITER $$
CREATE TRIGGER `after_members_insert` AFTER INSERT ON `members` FOR EACH ROW BEGIN
    IF NEW.birthDate IS NULL THEN
        INSERT INTO reminders(memberId, message)
        VALUES(new.id,CONCAT('Hi ', NEW.name, ', please update your date of birth.'));
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(13,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/mobile/f22.png', 'Samsung Galaxy F22', 'Samsung', '16.23cm', ' Denim Blue', 'AMOLED 90Hz Display True 48MP Quad Camera 6000mAh Long-lasting Battery with 15W In-box Fast Charger', 12999.00, 1),
(2, 'images/mobile/iphone2.jpeg', 'iPhone 13', 'apple', '15.4 cm (6.1 inch)', 'Midnight (Black)', 'Super Retina XDR Display 5G Enabled Phone A15 Bionic Chip  all‑screen OLED Display', 73900.00, 1),
(3, 'images/mobile/note10.jpg', 'Samsung Galaxy Note10+', 'Samsung', '2GB RAM, 256GB Storage', 'Aura Glow', 'Box also includes: S-Pen, non-removable battery included, earphones, travel adapter, USB cable and user manual', 48500.00, 1),
(4, 'images/mobile/s20fe.jpg', 'Samsung Galaxy S20 FE 5G ', 'Samsung', '6.5 inches (16.51 cm)', 'Black', '405 PPI, Super AMOLED120 Hz Refresh Rate, Camera 12 MP + 8 MP + 12 MP Triple Primary Cameras LED Flash 32 MP Front Camera', 34680.00, 1),
(5, 'images/mobile/M21.png', 'Galaxy M12', 'Samsung', '6.5 inch (1080 X 2400)', 'Blue', 'nfinity-V Display with 90Hz Screen refresh rate True 48MP Quad Camera with Isocell GM2 sensor 6,000mAh Long-lasting Battery with 15W Adaptive Fast Charging', 12499.00, 1),
(6, 'images/mobile/F23.png', 'Galaxy F23', 'Samsung', '6.5 inch (1080 X 2400)', ' Aqua Blue', 'First ever* Snapdragon 750G processor First ever* 120Hz Gorilla Glass 5 display First ever* Voice Focus', 2915.18, 1);

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `age` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`age`, `name`) VALUES
(0, 'krrish'),
(22, 'Jatin');

--
-- Triggers `people`
--
DELIMITER $$
CREATE TRIGGER `agecheck` BEFORE INSERT ON `people` FOR EACH ROW IF NEW.age < 0 
THEN SET NEW.age = 0; END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `age`) VALUES
('donu', 26),
('akash', 17);

--
-- Triggers `person`
--
DELIMITER $$
CREATE TRIGGER `person_ad` AFTER DELETE ON `person` FOR EACH ROW UPDATE average_age SET average = (SELECT AVG(person.age) FROM person)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `person_bd` BEFORE DELETE ON `person` FOR EACH ROW INSERT INTO person_archive (name, age)
VALUES (OLD.name, OLD.age)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `person_bu` BEFORE UPDATE ON `person` FOR EACH ROW IF NEW.age < 18 THEN
SIGNAL SQLSTATE '50002' SET MESSAGE_TEXT = 'Person must be older than 18.';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `person_archive`
--

CREATE TABLE `person_archive` (
  `name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person_archive`
--

INSERT INTO `person_archive` (`name`, `age`) VALUES
('jatin', 25);

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(11) NOT NULL,
  `memberId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `memberId`, `message`) VALUES
(1, 1, 'Hi Jatin kumawat, please update your date of birth.'),
(2, 2, 'Hi Jatin kumawat, please update your date of birth.');

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
-- Table structure for table `shirt`
--

CREATE TABLE `shirt` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/shirt/s1.png', 'Classic Shirt in White', 'Classic', 'XL', 'White', '100% Premium Cotton Sateen. Tailored fit, sits perfectly on chest & tapers along the waist. Crown embossed, metal snap buttons at cuff. Light-weight, 2-way stretch fabric with natural sheen', 1799.00, 1),
(2, 'images/shirt/s2.jpg', 'Classic Shirt in English Blue', 'Classic', 'XL', 'English Blue', '100% Premium Cotton Sateen. Tailored fit, sits perfectly on chest &amp; tapers along the waist. Crown embossed, metal snap buttons at cuff. Light-weight, 2-way stretch fabric with natural sheen', 1799.00, 1),
(3, 'images/shirt/s3.png', 'Classic Shirt in Jet Black', 'Classic', 'XL', 'Jet Black', '100% Premium Cotton Sateen. Tailored fit, sits perfectly on chest & tapers along the waist. Crown embossed, metal snap buttons at cuff. Light-weight, 2-way stretch fabric with natural sheen', 1799.00, 1),
(4, 'images/shirt/s4.png', 'Tencel™ Shirt in Wine', 'Tencel', 'XL', 'Wine', 'Tencel™ Cotton, twill structure. Tailored fit, sits perfectly on chest & tapers along the waist. Medium-weight, 2-way stretch & 2x more durable.', 2290.00, 1),
(5, 'images/shirt/s6.png', 'Tencel™ Shirt in Retro Green', 'Tencel', 'XL', 'Retro Green', 'Tencel™ Cotton, twill structure. Tailored fit, sits perfectly on chest &amp; tapers along the waist. Medium-weight, 2-way stretch &amp; 2x more durable.', 2290.00, 1),
(6, 'images/shirt/s4.png', 'Tencel™ Shirt in Marlin Blue', 'Tencel', 'XL', 'Marlin Blue', 'Tencel™ Cotton, twill structure. Tailored fit, sits perfectly on chest & tapers along the waist. Medium-weight, 2-way stretch & 2x more durable.', 1999.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/shoes/s.jpeg', 'Alexa Lace-Up Sports Shoes', 'Alexa ', 'UK 8', 'Black', 'Pull-up tabs Cushioned heel collar Phylon sole Mesh upper Black', 1444.00, 1),
(2, 'images/shoes/sho1.jpeg', 'Textured Low-Top Lace-Up Sports Shoes', 'Textured ', 'UK', 'Black', 'Wipe with a clean, dry cloth when needed Phylon sale 3-month warranty against manufacturing defects Regular Fit Mesh upper Black', 1444.00, 1),
(3, 'images/shoes/sho2.jpeg', 'Alexa Lace-Up Sports Shoes', 'Alexa', 'UK 8', 'Navy', 'Pull-up tabs Cushioned heel collar Phylon sole Mesh upper Navy', 1444.00, 1),
(4, 'images/shoes/sho4.jpeg', 'Alice Low-Top Lace-Up Running Shoes', 'CAMPUS', 'UK', 'Navy', 'Wipe with a clean, dry cloth when needed 1-month warranty against manufacturing defects Mesh upper Phylon Navy', 1169.00, 1),
(5, 'images/shoes/sho5.jpeg', 'Mesh Panelled Lace-Up Running Shoes', 'CAMPUS', 'UK 8', 'Black', 'Wipe with a clean, dry cloth when needed Logo print Pull tab Regular Fit Mesh upper Phylon Black', 1169.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shooes`
--

CREATE TABLE `shooes` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `prize` double(7,2) NOT NULL,
  `title` text NOT NULL,
  `Highlights` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shooes`
--

INSERT INTO `shooes` (`ImgId`, `img_path`, `details`, `prize`, `title`, `Highlights`) VALUES
(1, 'images/shoes/sh.jpg', 'Sports Shoes, Running Shoes for men', 327.00, 'world wear footwear', 'Men Red-1243'),
(2, 'images/shoes/sh3.jpeg', 'available', 474.00, 'Sneaker', 'Stylish mens black and white sneaker for men'),
(3, 'images/shoes/sh2.jpeg', 'incl. of taxes and duties', 8295.00, 'Nike Winflo 8', 'Men Road Running Shoes'),
(4, 'images/shoes/sh4.jpeg', ' Running Shoes', 1698.00, 'Artemis Lace-Up', ' Running Shoes'),
(5, 'images/shoes/sh5.jpeg', 'The shoe company says MSCHF infringed on its trademarks by selling limited-edition custom Nikes that were allegedly modified with a drop of human blood', 258.00, 'Nike sues over Lil', 'unauthorized Satan Shoes'),
(6, 'images/shoes/sh1.jpeg', 'We assure the authenticity and quality of our products', 219.00, 'Alexa Lace-Up', 'Sports Shoes');

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
(10, 'donu', 'Jaipur', 7410852963, 'donu@gmail.com', '1ss'),
(11, 'jatin kumawat', 'Station Road Ward No 7 Shrimadhopur', 9799623173, 'jatinkumawat0112@gmail.com', '1234'),
(11, 'donia thakur', 'jammu', 6005125756, 'doniakth@gamil.com', '123');

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
-- Table structure for table `student12`
--

CREATE TABLE `student12` (
  `name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student12`
--

INSERT INTO `student12` (`name`, `address`, `mobile`, `email`, `password`, `isActive`) VALUES
('akashc', 'jaipur-c', 9874563, 'akashc@gmail.com', '123456', 1),
('chotu', 'jaipur', 123456789, 'chotu12@gmail.com', '123456', 0),
('donia', 'jaipur', 4758694152, 'doniakth1123@gmail.com', '123456', 1),
('jatinkum', 'danta', 98989898, 'jatin11@gmail.com', '123456', 0),
('jatin kumawat', 'Station Road Ward No 7 Shrimadhopur', 6005125756, 'jatinkumawat0112@gmail.com', '1234564', 0),
('jatin', 'jammu', 9849841864, 'jatinkumawat0116@gmail.com', '123456', 0),
('kamalesh', 'jaipur', 9799623176, 'kamalesh@gmail.com', '123456', 0),
('kgf', 'jaipur', 855475844, 'kgf@gmail.com', '123456', 0),
('krishna', 'jaipur', 9898915614, 'krishna@gmail.com', '123456', 1),
('krrish', 'jaipur', 9888855, 'krrish123@gmail.com', '123456', 1),
('rekha', 'Shrimadhopur', 87548257, 'rekha1@gmail.com', '123456', 0),
('sachin', 'jaipur', 656528181, 'sachin@gmail.com', '123456', 0),
('vikram', 'jaipur', 98448181, 'vikram@gmail.com', '123556', 1),
('vishal', 'jaipur', 987456123, 'vishal@gmail.com', '123456', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `trouser`
--

CREATE TABLE `trouser` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trouser`
--

INSERT INTO `trouser` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/trouser/t.jpg', 'Ruggers by Unlimited Men s Slim fit Casual Trousers', 'Ruggers by Unlimited', '34W32L', 'Olive', 'Material: Cotton Pattern: Solid', 659.00, 1),
(2, 'images/trouser/t3.jpg', 'McHenry Men s Regular Fit Formal Trousers', 'McHenry', '32.29 x 18.3 x 6.5 cm  410 Grams', 'gray', 'Manufacturer ‏ : ‎ Mchenry ASIN ‏ : ‎ B07FNJC9L2 Item part number ‏ : ‎ Grey6968-32 Country of Origin ‏ : ‎ India Department ‏ : ‎ Men Manufacturer ‏ : ‎ Mchenry Item Weight ‏ : ‎ 410 g', 399.00, 1),
(3, 'images/trouser/t3.jpg', 'McHenry Men s Regular Fit Formal Trousers', 'McHenry', '32.29 x 18.3 x 6.5 cm  410 Grams', 'gray', 'Manufacturer ‏ : ‎ Mchenry ASIN ‏ : ‎ B07FNJC9L2 Item part number ‏ : ‎ Grey6968-32 Country of Origin ‏ : ‎ India Department ‏ : ‎ Men Manufacturer ‏ : ‎ Mchenry Item Weight ‏ : ‎ 410 g', 399.00, 1),
(4, 'images/trouser/t5.jpg', 'Urbano Fashion Men Slim Fit Casual Trouser', 'Urbano Fashion', '32.29 x 18.3 x 6.5 cm  410 Grams', 'gray', 'Manufacturer ‏ : ‎ Mchenry ASIN ‏ : ‎ B07FNJC9L2 Item part number ‏ : ‎ Grey 6968-32 Country of Origin ‏ : ‎ India Department ‏ : ‎ Men Manufacturer ‏ : ‎ Mchenry Item Weight ‏ : ‎ 410 g', 799.00, 1),
(5, 'images/trouser/t4.jpg', 'Amazon Brand - Symbol Men s Slim Casual Trousers', 'Amazon Brand ', '32.29 x 18.3 x 6.5 cm  410 Grams', 'Yellow', 'Manufacturer ‏ : ‎ Mchenry ASIN ‏ : ‎ B07FNJC9L2 Item part number ‏ : ‎ Grey 6968-32 Country of Origin ‏ : ‎ India Department ‏ : ‎ Men Manufacturer ‏ : ‎ Mchenry Item Weight ‏ : ‎ 410 g', 799.00, 1),
(6, 'images/trouser/t6.jpg', ' Men s Regular Fit Formal Trousers', 'AD & AV', '30.7 x 29.6 x 2.9 cm; 310 Grams', 'Yellow', 'Fabric: Cotton; Polyester Style: Formal Trousers ;Pattern: Solid Rise: Mid Rise ;Closure: Button ;Length: Full length Occasion: Formal Age Range Description: Adult', 645.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tshirt`
--

INSERT INTO `tshirt` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/tshirt/ts.jpg', 'Stylish Elegant Mens Tshirt', 'Feranoid', 'XL', 'Black', 'Stylish Elegant Men TshirtsFabric :  CottonMultipack : 1Sizes:S (Chest Size: 38 in, Length Size: 27 in) XL (Chest Size: 44 in, Length Size: 30 in) L (Chest Size: 42 in, Length Size: 29 in) M (Chest Size: 40 in, Length Size: 28 in)', 399.00, 1),
(2, 'images/tshirt/ts2.jpeg', 'Men Stylish Corporate T Shirt', 'Feranoid', 'XL', 'Black', 'Men Stylish Corporate T Shirt Fabric :  Cotton Multipack : 1Sizes:S (Chest Size: 38 in, Length Size: 27 in) XL (Chest Size: 44 in, Length Size: 30 in) L (Chest Size: 42 in, Length Size: 29 in) M (Chest Size: 40 in, Length Size: 28 in)', 250.00, 1),
(3, 'images/tshirt/ts3.jpg', 'T2F Women s Regular fit T-Shirt ', '   T2F ', 'L', 'Black and Yellow', 'T2F Women is a one-stop shop for t-shirts. We embrace latest trends and style to offer a range of understated elegant products. It is all about the subtle details too, with quality finishes.', 319.00, 1),
(4, 'images/tshirt/ts2.jpg', 'T2F Women s Regular fit T-Shirt ', '   T2F ', 'L', 'Black', 'T2F Women is a one-stop shop for t-shirts. We embrace latest trends and style to offer a range of understated elegant products. It is all about the subtle details too, with quality finishes.', 277.00, 1),
(5, 'images/tshirt/ts4.jpg', 'TODER Men s Cotton T-Shirt', 'TODER', 'L', 'Petrol Blue', 'Care Instructions: Machine Wash Fit Type: Regular Fit Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: 100% Pure Cotton ; Premium Export Quality Branded T-shirt', 277.00, 1),
(6, 'images/tshirt/ts4.jpg', 'Solid Black & White Cotton T-Shirt', 'Generic', 'L', 'Black & White', 'Care Instructions: Machine Wash Fit Type: Regular Fit Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: 100% Pure Cotton ; Premium Export Quality Branded T-shirt', 399.00, 1),
(7, 'images/tshirt/ts6.jpg', 'Solid Black & White Cotton T-Shirt', 'Generic', 'L', 'Black & White', 'Care Instructions: Machine Wash Fit Type: Regular Fit Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: 100% Pure Cotton ; Premium Export Quality Branded T-shirt', 399.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Tv`
--

CREATE TABLE `Tv` (
  `ImgId` int(11) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `detail` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tv`
--

INSERT INTO `Tv` (`ImgId`, `img_path`, `name`, `brand`, `size`, `color`, `detail`, `price`, `isActive`) VALUES
(1, 'images/Tv/samsuntv.png', 'Samsung TV', 'Samsung', '1m', '', '43TE50F Smart HD TV', 31758.00, 1),
(2, 'images/Tv/Angel.png', 'ANS50CH', 'Angel', '50 inch LED 4K TV', 'black', 'Warranty: 2 Years, Box Contents: Television, Remote Control, Batteries, Table Stand, Wall Mount, Power Cord, User Manual & Warranty card', 40999.00, 1),
(3, 'images/Tv/samsuntv1.png', 'UA43AU8200K 43 inch LED 4K TV', 'Samsung', '43 inch', 'Black', 'Samsung UA43AU8200K 43 inch LED 4K TV is yet to be launched. Here are similar products that are available in store', 48999.00, 1),
(4, 'images/Tv/samsungtv2.png', 'UA55AU9070UL ', 'Samsung ', '55 inch LED 4K TV', 'Black', 'Connectivity: Wifi and Internet2 USB Ports3 HDMI Ports , Smart Features: Apps and Games Web Browser Voice Control', 68999.00, 1),
(5, 'images/Tv/samsuntv1.png', 'UA55AU8200K ', 'Samsung ', '55 inch LED 4K TV', 'Black', 'Connectivity: Wifi and Internet2 USB Ports3 HDMI Ports , Smart Features: Apps and Games Web Browser Voice Control', 66685.00, 1),
(6, 'images/Tv/samsuntv1.png', 'UA55AU8000K ', 'Samsung ', '55 inch LED 4K TV', 'Black', 'Connectivity: Wifi and Internet2 USB Ports3 HDMI Ports , Smart Features: Apps and Games Web Browser Voice Control', 62400.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishList`
--

CREATE TABLE `wishList` (
  `UserMail` varchar(300) NOT NULL,
  `ProductName` varchar(300) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `ProductBrand` varchar(200) NOT NULL,
  `size` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `img_path` varchar(300) NOT NULL,
  `WishlistId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishList`
--

INSERT INTO `wishList` (`UserMail`, `ProductName`, `ProductId`, `ProductBrand`, `size`, `color`, `Quantity`, `img_path`, `WishlistId`) VALUES
('jatinkumawat011@gmail.com', 'shoes', 1, 'Alexa ', 'UK 8', 'Black', 1, 'images/shoes/s.jpeg', 1),
('jatinkumawat011@gmail.com', 'mobile', 1, 'Samsung', '16.23cm', ' Denim Blue', 1, 'images/mobile/f22.png', 2),
('vishal@gmail.com', 'Tv', 3, 'Samsung', '43 inch', 'Black', 1, 'images/Tv/samsuntv1.png', 7),
('jatin@gmail.com', 'tshirt', 2, 'Feranoid', 'XL', 'Black', 1, 'images/tshirt/ts2.jpeg', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ac`
--
ALTER TABLE `Ac`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `AddToCart`
--
ALTER TABLE `AddToCart`
  ADD PRIMARY KEY (`AddToCartId`);

--
-- Indexes for table `AGENTS`
--
ALTER TABLE `AGENTS`
  ADD PRIMARY KEY (`AGENT_CODE`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`CUST_CODE`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `CoustomerId` (`CoustomerId`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `decor`
--
ALTER TABLE `decor`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `electronic`
--
ALTER TABLE `electronic`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `jeans`
--
ALTER TABLE `jeans`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `ORDERS2`
--
ALTER TABLE `ORDERS2`
  ADD PRIMARY KEY (`ORD_NUM`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`,`memberId`);

--
-- Indexes for table `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `shooes`
--
ALTER TABLE `shooes`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `student12`
--
ALTER TABLE `student12`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`name`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `trouser`
--
ALTER TABLE `trouser`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `Tv`
--
ALTER TABLE `Tv`
  ADD PRIMARY KEY (`ImgId`);

--
-- Indexes for table `wishList`
--
ALTER TABLE `wishList`
  ADD PRIMARY KEY (`WishlistId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AddToCart`
--
ALTER TABLE `AddToCart`
  MODIFY `AddToCartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CoustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishList`
--
ALTER TABLE `wishList`
  MODIFY `WishlistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
