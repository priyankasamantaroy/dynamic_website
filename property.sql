-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 09:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `adminname`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Sites');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`, `status`) VALUES
(25, 'Excellent', 'Roy went above and beyond to support us. Thank you for your service', 'Adam Palmer', 'adampalmer@yahoo.com', '2019-04-10 11:10:44', 'approved'),
(29, 'Good Service\r\n', 'Thank you John for your offer and support. Its pleasure to speak to you. I will get back to you soon\r\n\r\n', 'Martin', 'martin@gamail.com', '2020-04-18 11:16:23', 'approved'),
(30, 'Excellent Site', 'I have recently agreed to sell my property to this company. I have dealt with the consultant Raphael and after being quite wary of this service, he has managed to answer all my question and I’m now confident I have made the right decision.\r\n\r\n', 'Louis', 'louis.philip@rediffmail.com', '0000-00-00 00:00:00', 'approved'),
(34, 'Great Site', 'After speaking to your service executive today,I feel confident that the property buying company are best suited to purchase my property.Thanks for your support.\r\n\r\n', 'Jhone', 'jhone@gmail.com', '2020-04-10 11:21:32', 'approved'),
(35, 'Pleasent experience', 'What a pleasant experience! The offer didn’t work for me but I’d highly recommend speaking to Raphael. Upfront and honest from the outset and no hard sell!\r\n\r\n', 'James', 'james_lk@gmail.com', '2020-04-05 11:21:32', 'pending'),
(38, 'Excellent Service', 'Excellent service and conversation with the consultant Marc. Offered several services to buy my house after lockdown. Thank you\r\n\r\n\r\n\r\n', 'Martin', 'martin@gmail.com', '2018-04-08 11:42:07', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyid` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `shortdescription` text NOT NULL,
  `longdescription` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `address1`, `town`, `county`, `price`, `bedrooms`, `shortdescription`, `longdescription`, `image`, `categoryid`, `vendorid`) VALUES
(2, '26, Park View ', 'Letterkenny', 'Donegal', 185000, 3, 'Beautiful Dettached house with 4 bedrooms and covered car parking.', 'Nice location.Near to the market center.\r\nspacious back and front yard.well mentained.\r\nnewly constructed.\r\n4 bedrooms.2 bedrooms with attached bath.\r\none kid room.All rooms are with large glass window and full furnished. \r\n- Oil Fired Central Heating\r\n- Excellent views of Errigal \r\n', 'images/house1.jpg', 1, 3),
(6, '4 Rosevally', 'Letterkenny', 'Donegal', 179000, 5, 'Beautiful bunglow with 4 bedrooms.Front lawn enclosed with fence with box hedge boundary driveway with ample car parking.', 'This property comprises 4no. Bedrooms are semi-furnished.Very good location with convenient to shops, schools.This property will make an ideal starter home, family home or residential investment.', 'images/house6.jpg', 1, 7),
(9, 'Commercial Unit, Cappry', 'Ballybofey', 'Donegal', 279000, 0, 'c.1850 sq. ft. commercial unit available to let. Suitable for variety of uses e.g. hairdressers, office space, etc. Former XL shop in Cappry.', 'c.1850 sq. ft. commercial unit available to let or sale, Suitable for variety of uses e.g. hairdressers, office space, etc. Former XL shop in Cappry.Ground floor retail unit\r\n- located in this busy commercial complex\r\n- complex recently renovated\r\n- would be suitable for a variety of uses\r\n\r\n', 'images/commertial1.jpg', 2, 2),
(10, ' 45 Upper Main Street, Letterkenny', 'Letterkenny', 'Donegal', 2500000, 0, 'Located on  Upper Main Street, close to  Church Lane and the Cathedral Quarter, the premises enjoys a prime location in the heart of Letterkenny.', 'The premises occupies a high profile position on Main Street with a high volume of passing pedestrian and vehicular traffic. This building has recently innovated  and redecorated.Premises is ready to immediate occupancy.\r\n', 'images/commertial3.jpg', 2, 3),
(13, '4 knocknamona', 'Drumhill', 'Cavan', 1760000, 10, 'Beautiful place newly constructed fully furnished.', 'lovely area with new construction.This big property can use for commercial purpose as its occupying a very large carpet area with all facilities for tourists.\r\nEquipped with Heated pool and centrally heating system.\r\n10 bedrooms with 2 big seating area separate play area for kids.\r\n', 'images/commertial4.jpg', 2, 2),
(14, '5 Glaintain Manor', 'kerry', 'kerry', 3400000, 4, 'Beautiful detached house with 4  bedrooms.Mature front lawn enclosed with fence yard to rear with box hedge boundary driveway with ample car parking.', 'Nice location.Near to the market center.\r\nspacious back and front yard.well maintained.\r\nnewly constructed.\r\n- Oil Fired Central Heating.\r\n4 bedrooms with 1 utility.\r\none kid room.All rooms are fully furnished. \r\n\r\n\r\n', 'images/house4.jpg', 1, 7),
(15, '12 Lakeridge', 'Bangalore', 'Dublin', 5000000, 6, 'Beautiful bunglow with 6 Double bedrooms.Mature front lawn enclosed with fence Concrete yard to rear with box hedge boundary driveway with ample car parking.', 'This property comprises 6no. bedrooms fully furnished.Very good location with convenient to shops, schools, Letterkenny IT and Town centre is aloso very nesrby.This property will make an ideal starter home, family home or residential investment.', 'images/house5.jpg', 1, 3),
(16, 'Buncrana', 'Donegal', 'Donegal', 180000, 0, 'Elevated area at the miidle of vally view.Nearby to buncrana Beach.', 'This elevated place is around 100 ac.\r\nNear to beaches and local market.\r\ndown the vally hospital and others facilities are available.Local tansport is available at anytime from the spot.\r\n', 'images/site3.jpg', 3, 3),
(87, 'Churchill, Letterkenny', 'Letterkenny', 'Donegal', 3400000, 0, 'First class elevated site in nice location', 'First-class elevated site of  0.5 acres located between Churchill and Letterkenny both of which can be reached in a very short time.Hospital and bust and within walking distance.', 'images/site4.jpg', 3, 7),
(89, '4 Silver Park', 'Dublin', 'Dublin', 500000, 6, 'Beautiful Bungalow with 6 bedrooms,\r\ngood location.', 'Beautiful bungalow with 6 bedrooms. Front lawn enclosed with a fence with box hedge boundary driveway with ample car parking. Well maintained fully furnished. Ready to move.', 'images/house3.jpg', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_no` int(3) NOT NULL,
  `propertyid` int(11) DEFAULT NULL,
  `cust_name` varchar(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` longtext NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_no`, `propertyid`, `cust_name`, `phone`, `email`, `query`, `status`) VALUES
(11, 2, 'Lisa', 1123444556, 'lisa@rediffmail.com', 'looking for help in banking service.   ', 'service cl'),
(21, 10, 'Amrit', 985643762, 'roy@gmail.com', 'I like your properties. But need your support to get a home loan.', 'service cl'),
(22, 10, 'Michel', 2147483647, 'roy@gmail.com', 'Looking for selling for my property. Please let me know the process.', 'pending'),
(55, 15, 'Barry', 987654567, 'bary@gmail.com', 'Want to rent out my bungalow.please help me out.', 'pending'),
(56, 9, 'Priya', 2147483647, 'priya@gmail.com', 'Looking for a lease for the above selected property.Could you please assit in paper works for that?please let me know.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `surname`, `firstname`, `address1`, `town`, `county`, `mobile`, `email`) VALUES
(2, 'John Nash', 'Smith', 'High Street', 'Sligo', 'Sligo', '0871234577', 'jsmith@hotmail.com'),
(3, 'Colm', 'John', '12 M G road', 'Mysore', 'waterford', '0794567892', 'john@dreammaker.net'),
(6, 'Roy', 'Amrit', 'foxhill', 'donegal', 'donegal', '0984743962', 'roy@gmail.com'),
(7, 'Dutta', 'Ravi', '5,Mountain-top', 'Sligo', 'sligo', '0986765433', 'ravi@gmail.com'),
(8, 'Jain', 'Ayansh', '6 Gardenview', 'Bangalore', 'Donegal', '0984567390', 'jain@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_no`),
  ADD UNIQUE KEY `service_no_2` (`service_no`),
  ADD UNIQUE KEY `service_no` (`service_no`),
  ADD UNIQUE KEY `service_no_3` (`service_no`),
  ADD UNIQUE KEY `service_no_4` (`service_no`),
  ADD KEY `propertyid` (`propertyid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`propertyid`) REFERENCES `property` (`propertyid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
