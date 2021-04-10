-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2021 at 02:27 PM
-- Server version: 10.2.37-MariaDB-log
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pareeky_furnival`
--
CREATE DATABASE IF NOT EXISTS `pareeky_furnival` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `pareeky_furnival`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `A_username` varchar(200) NOT NULL,
  `A_password` varchar(10) NOT NULL,
  PRIMARY KEY (`A_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_username`, `A_password`) VALUES
('admin@gmail.com', 'admin'),
('manish@gmail.com', 'manish26');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(6) NOT NULL AUTO_INCREMENT,
  `p_id` int(6) NOT NULL,
  `c_id` int(6) NOT NULL,
  `v_email` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(2000) NOT NULL,
  `cat_desc` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Office Chair', 0),
(2, 'Sofa Set', 0),
(3, 'Curtains', 0),
(4, 'Decorative Craft Product', 0),
(5, 'Decorative Wrought Iorn', 0),
(6, 'Paintings', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(4) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Vadodara'),
(3, 'Bharuch'),
(4, 'vadodara'),
(5, 'nadiad'),
(6, 'Ahemdabad'),
(7, 'Paintings'),
(8, 'Surat'),
(10, 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `complain_person_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `message` varchar(150) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`c_id`, `complain_person_name`, `Email`, `phone_no`, `message`) VALUES
(1, 'husain', 'husain@gmail.com', '8866545434', 'default pis'),
(2, 'sagar', 'sagar@gmail.com', '9574222376', 'default'),
(3, 'rahul', 'rahul@gmail.com', '8160873524', 'default'),
(4, 'kalpit', 'kalpit45@gmail.com', '9898765623', 'default'),
(5, 'pintu', 'pintu543@gmail.com', '8988651223', 'default'),
(6, 'Mokshit Shah', 'moxitshah17@gmail.co', '09904086280', 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `f_name`, `phone`, `email`, `message`) VALUES
(1, 'subhash', '982397667', 'subh_7708@yahoo.co.in', 'Hello i will call u on 12 p.m'),
(2, 'Janak Patel', '9898981111', 'subh_7708@yahoo.co.in', 'Hello for reference'),
(3, 'challawala husain kanubhai', '9714122253', 'husain@gmail.com', 'kahdiuhd'),
(4, 'rahul', '8178171771', 'rahul@gmail.com', 'adhaduwih'),
(5, 'kartik', '3871838137', 'kartik@gmail.com', 'hduwdwhduiw'),
(6, 'Rahul patel', '9898762534', 'rahul@gmail.com', 'Hello for reference'),
(7, 'pulkit sharma', '8866454674', 'pulkit@gmail.com', 'Hello for reference'),
(8, 'Shivam Suthar', '9898747338', 'shivam@gmail.com', 'Default item'),
(9, 'Tapan parmar', '9888475636', 'tapan@gmail.om', 'best Item'),
(10, 'Mokshit Shah', '9904086280', 'moxitshah17@gmail.com', 'Good'),
(11, 'Juhi Shah', '9904086280', 'moxitshah17@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `Country_Id` int(10) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Country_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Country_Id`, `country_name`) VALUES
(1, 'France'),
(2, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_f_name` varchar(50) NOT NULL,
  `c_L_name` varchar(200) NOT NULL,
  `c_gen` char(10) NOT NULL,
  `c_Birthday` date NOT NULL,
  `c_phn` bigint(11) NOT NULL,
  `c_add` text NOT NULL,
  `c_city` varchar(20) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_img` varchar(2000) DEFAULT NULL,
  `c_pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_f_name`, `c_L_name`, `c_gen`, `c_Birthday`, `c_phn`, `c_add`, `c_city`, `c_email`, `c_img`, `c_pass`) VALUES
(1, 'rajan', 'bavda', 'male', '0000-00-00', 9988998899, 'Karelibaug', 'Saharsa', 'rajan@gmail.com', 'harshil.jpg', '123456'),
(2, 'vinod', 'patel', 'male', '0000-00-00', 9898981122, 'Saikrupa Soci', 'Purnea', 'vinod@gmail.com', 'p4.jpg', '123456'),
(3, 'piyush', 'patel', 'male', '0000-00-00', 4433443344, 'Karelibaug', 'Purnea', 'piyush@gmail.com', 'raj100.jpg', '1234'),
(4, 'Manoj', 'Patel', 'male', '0000-00-00', 1212121212, 'Mahoday Society', 'Purnea', 'manoj@gmail.com', 'p4.jpg', '1234'),
(5, 'manish', 'chandwani', 'male', '0000-00-00', 8866515905, 'jay maharaj soc', '1', 'chandwanimanish234@gmail.', '', 'manish26'),
(6, 'sagar', 'parmar', 'male', '0000-00-00', 9574222376, 'jay maharaj soc', '1', 'sagar@gmail.com', '', '12345678'),
(7, 'kartik', 'patel', 'male', '0000-00-00', 9898475645, 'st nagar', 'nadiad', 'patel@gmail.com', NULL, '12345678'),
(8, 'Mokshit', 'Shah', 'male', '2000-03-17', 9904086280, 'Chokshi ni pole, khambhat , Anand', '1', 'moxitshah17@gmail.com', '', '123'),
(9, 'Juhi', 'Shah', 'female', '2021-03-17', 9904086280, 'Chokshi ni pole, khambhat , Anand', '1', 'moxitshah17@gmail.com', '', '123'),
(10, 'Mox', 'Shah', 'male', '2021-03-22', 9904086280, 'Chokshi ni pole, khambhat , Anand', '1', 'moxitshah17@gmail.com', '', '456'),
(11, 'Jinay', 'shah', 'male', '2021-03-25', 9904086280, 'Chokshi ni pole, khambhat , Anand', '1', 'jinay@gmail.com', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(6) NOT NULL AUTO_INCREMENT,
  `emp_f_name` varchar(60) NOT NULL,
  `emp_phn` varchar(200) NOT NULL,
  `emp_email` varchar(200) NOT NULL,
  `emp_gen` char(10) NOT NULL,
  `emp_age` int(10) NOT NULL,
  `emp_pass` varchar(200) NOT NULL,
  `emp_salery` varchar(200) NOT NULL,
  `emp_add` varchar(2000) NOT NULL,
  `emp_pin` bigint(10) NOT NULL,
  `emp_img` varchar(2000) DEFAULT NULL,
  `emp_L_name` varchar(100) NOT NULL,
  `emp_city` varchar(100) NOT NULL,
  `emp_state` varchar(100) NOT NULL,
  `emp_status` varchar(200) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(4) NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(20) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Email_Id` varchar(150) NOT NULL,
  `message` varchar(10) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `Full_name`, `Phone_no`, `Email_Id`, `message`) VALUES
(1, 'CHALLAWALA HUSAIN KA', '9714122253', 'challawalahusain2275@gmail.com', 'ok'),
(2, 'manish j chandwani', '9714122253', 'manish@gmail.com', 'ok'),
(3, 'Juhi Shah', '9904086280', 'moxitshah17@gmail.com', 'Nice'),
(4, 'xyz', '9904086280', 'moxitshah17@gmail.com', 'Helloww');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(6) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(50) NOT NULL,
  `p_id` int(6) NOT NULL,
  `c_id` int(6) NOT NULL,
  `qty` int(11) DEFAULT 1,
  `order_status` varchar(200) NOT NULL DEFAULT 'Active',
  `order_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `v_email` varchar(1000) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COMMENT='Order_table';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `invoice_no`, `p_id`, `c_id`, `qty`, `order_status`, `order_time`, `v_email`) VALUES
(1, '20200630071555', 3, 1, 2, 'Delivered', '2020-06-30 17:15:55', ''),
(2, '20200630071555', 8, 1, 1, 'Delivered', '2020-06-30 17:15:55', ''),
(3, '20200702022815', 3, 2, 2, 'Delivered', '2020-07-02 00:28:15', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(6) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(60) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_mfg` date DEFAULT NULL,
  `p_img` varchar(2000) DEFAULT NULL,
  `cat_title` varchar(30) DEFAULT NULL,
  `p_desc` varchar(5000) DEFAULT NULL,
  `Qty` varchar(100) NOT NULL,
  `p_status` varchar(200) NOT NULL DEFAULT 'Available',
  `p_brand` varchar(200) NOT NULL DEFAULT '---',
  `v_email` varchar(30) NOT NULL,
  `each_qty` varchar(1000) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_mfg`, `p_img`, `cat_title`, `p_desc`, `Qty`, `p_status`, `p_brand`, `v_email`, `each_qty`) VALUES
(2, 'Office Chair Special', '4000', '2020-06-12', 'oc1.jpg', 'Office Chair', 'Office Chair a Specail  Product', '20', 'Available', 'Own Brand', '', '1'),
(3, 'Office Chair Comfort', '1000', '2020-06-05', 'oc2.jpg', 'Office Chair', 'Office Chair Comfort', '10', 'Available', 'Own Brand', '', '1 '),
(4, 'Office Chair Extra Comfort', '4500', '2020-06-18', 'oc3.jpg', 'Office Chair', 'Office Chair with Extra Comfort', '10', 'Available', 'Own Brand', '', '1'),
(5, 'Office Chari Easy Comfort', '5000', '2020-06-12', 'oc5.jpg', 'Office Chair', 'Office Chair Easy,Comfort,Special', '15', 'Available', 'Own Brand', '', '1'),
(6, 'Office Chair Variety', '3000', '2020-06-19', 'oc6.jpg', 'Office Chair', 'Office Chair Variety', '10', 'Available', 'Own ', '', '1'),
(7, 'Office Chair Plazma', '3100', '2020-06-11', 'oc7.jpg', 'Office Chair', 'Office Chair Plazma', '20', 'Available', 'Own', '', '1'),
(8, 'Office Chair Unique', '3700', '2020-06-11', 'oc8.jpg', 'Office Chair', 'Office Chair Unique', '20', 'Available', 'own', '', '1'),
(9, 'herman_miller_style_chair2', '4500', '2020-06-11', 'oc9.jpg', 'Office chair', 'Office chair herman', '20', 'Available', 'Own', '', '1'),
(10, 'back suport for office chair', '3200', '2020-06-11', 'of10.jpg', 'Office chair', 'back suport office chair', '12', 'Available', 'Own ', '', '1'),
(11, 'Brand new office chair', '7000', '2020-06-11', 'of11.jpg', 'Office chair', 'Brand new office chair', '11', 'Available', 'own brand', '', '1'),
(12, 'Velvet office chair', '6000', '2020-06-11', 'of12.jpg', 'Office chair', 'Velvet office chair', '10', 'Available', 'Own brand', '', '1'),
(13, 'Costco for office chair', '6700', '2020-06-11', 'of13.jpg', 'Office chair', 'Costco for office chair', '25', 'Available', 'special brand', '', '1'),
(14, 'Walmart desk chair', '4500', '2020-06-11', 'of14.jpg', 'Office chair', 'Walmart desk chair', '15', 'Available', 'own', '', '1'),
(15, 'cheap office chair', '9000', '2020-06-11', 'om15.jpg', 'Office chair', 'cheap office chair', '14', 'Available', 'own', '', '1'),
(17, 'hsi office furniture', '8500', '2020-06-11', 'om20.jpg', 'Office furniture', 'hsi office furniture', '13', 'Available', 'own', '', '1'),
(18, 'new york office chair', '11500', '2020-06-11', 'om21.jpg', 'Office chair', 'new york office chair', '17', 'Available', 'new york', '', '1'),
(19, 'steelcase leap V2 chair', '13000', '2020-06-11', 'om22.jpg', 'Office chair', 'steelcase leap v2 chair', '20', 'Available', 'own', '', '2'),
(20, 'swivel desk  chair', '14000', '2020-06-11', 'om23.jpg', 'desk chair', 'swivel desk chair', '16', 'Available', 'own', '', '1'),
(21, 'New sofa', '15000', '2011-12-11', 'New sofa.png', 'Sofa Set', 'nope', '10', 'Available', 'Own', '', '5'),
(23, 'Letest curtain design', '4000', '2011-11-12', 'Letest curtain design.png', 'Curtains', 'nope', '15', 'Available', 'Own', '', '3'),
(24, 'Curtains 52 in', '5000', '2011-11-23', 'Curtains 52 in.png', 'Curtains', 'nope', '15', 'Available', 'Own', '', '3'),
(26, 'Lorna white curtain', '4000', '2011-11-24', 'Lorna white curtain.png', 'Curtains', 'nope', '20', 'Available', 'Own', '', '1'),
(27, 'Leather sofa set', '20000', '2015-11-23', 'Leather sofa set.png', 'Sofa Set', 'nope', '4', 'Available', 'Own', '', '1'),
(28, 'Corner sofa set', '15000', '2011-11-24', 'oc3.jpg', 'Sofa Set', 'nope', '10', 'Available', 'Own', '', '1'),
(29, 'Homelegence sofa set', '15000', '2011-11-13', 'Homelengence sofa set.png', 'Sofa Set', 'nope', '4', 'Available', 'Own', '', '1'),
(30, 'High Qulity Sofa set', '20000', '2011-11-12', 'High Qulity sofaset.png', 'Sofa Set', 'nope', '10', 'Available', 'Own', '', '1'),
(31, 'Plants', '1000', '2011-11-12', 'plants.png', 'Plants', 'nope', '4', 'Available', 'other', '', '1'),
(32, 'Good luck plants', '1500', '0000-00-00', 'Good luck plants.png', 'Plants', 'nope', '4', 'Available', 'other', '', '1'),
(33, 'Sunflowers', '800', '2011-11-23', 'Sunflowers.png', 'Plants', 'nope', '4', 'Available', 'other', '', '1'),
(34, 'Plumeria', '1600', '2011-11-23', 'Plumeria.png', 'Plants', 'nope', '4', 'Available', 'other', '', '1'),
(35, 'zz plants', '1000', '2011-11-24', 'zz plants.png', 'Plants', 'nope', '4', 'Available', 'other', '', '1'),
(36, 'Beatiful simple painting', '2500', '2011-11-22', 'Beatiful simple painting.png', 'Paintings', 'nope', '1', 'Available', 'other', '', '1'),
(37, 'Painting for sale', '3000', '2011-11-12', 'Painting for sale.png', 'Paintings', 'nope', '1', 'Available', 'other', '', '1'),
(38, 'Horse Painting', '6000', '2011-11-12', 'Horse painting.png', 'Paintings', 'nope', '1', 'Available', 'other', '', '1'),
(39, 'Fantasty painting', '10000', '2011-11-12', 'Fantasy-Painting.png', 'Paintings', 'nope', '1', 'Available', 'other', '', '1'),
(40, 'Mountain', '4000', '2011-11-12', 'Mountain.png', 'Paintings', 'nope', '1', 'Available', 'Own', '', '1'),
(41, 'The best craft and Art', '4000', '2011-11-12', 'The best craft and art.png', 'Decorative Craft Product', 'nope', '1', 'Available', 'Own', '', '1'),
(42, 'Decorative craft product ', '10000', '2011-11-12', 'Decorative craft product.png', 'Decorative Craft Product', 'nope', '1', 'Available', 'other', '', '1'),
(43, 'Seabirds Craft', '5000', '2011-12-11', 'Seabirds craft.png', 'Decorative Craft Product', 'nope', '1', 'Available', 'other', '', '1'),
(44, 'craft product', '10000', '2011-11-12', 'craft product.png', 'Decorative Craft Product', 'nope', '1', 'Available', 'Own', '', '1'),
(45, 'copper and glass product', '4000', '2011-11-12', 'copper and glass product.png', 'Decorative Craft Product', 'nope', '1', 'Available', 'other', '', '1'),
(46, 'Tuscan wrought iron', '4000', '2011-11-12', 'Tuscan wrought iron.png', 'Decorative Wrought Iorn', 'nope', '1', 'Available', 'other', '', '1'),
(47, 'Wrought iron home decore', '10000', '2011-12-11', 'Wrought iron wall decore.png', 'Decorative Wrought Iorn', 'nope', '1', 'Available', 'Own', '', '1'),
(48, 'Wrought iron', '4000', '2011-12-15', 'Wrought iron.png', 'Decorative Wrought Iorn', 'nope', '1', 'Available', 'other', '', '1'),
(49, 'Very large wrought iron', '5000', '2011-11-15', 'very large wrought iron.png', 'Decorative Wrought Iorn', 'nope', '1', 'Available', 'other', '', '1'),
(50, 'Art wall decor ', '4000', '2011-12-11', 'Art wall decor.png', 'Decorative Wrought Iorn', 'nope', '1', 'Available', 'other', '', '1'),
(51, 'Lighting design badroom ', '25000', '2011-12-17', 'Lighting design.png', 'Badroom', 'nope', '1', 'Available', 'other', '', '1'),
(52, 'Transitional badroom', '30000', '2011-12-11', 'Transitional badroom.png', 'Badroom', 'nope', '1', 'Available', 'other', '', '1'),
(53, 'Badroom furniture', '35000', '2011-11-19', 'Badroom furniture.png', 'Badroom', 'nope', '1', 'Available', 'other', '', '1'),
(54, 'Badroom interior', '26000', '2011-12-11', 'Badroom interior.png', 'Badroom', 'nope', '1', 'Available', 'other', '', '1'),
(55, 'Rest and relaxation bedroom', '3 6000', '2011-11-12', 'Rest and relaxtion bedroom.png', 'Badroom', 'nope', '1', 'Available', 'other', '', '1'),
(56, 'Aluminium and seak sofaset', '40000', '2011-11-12', 'aluminium and teak sofaset.png', 'Sofa Set', 'Aluminium and seak sofaset', '1', 'Available', 'other', '', '1'),
(57, 'Black fabric sofaset', '35000', '2011-12-11', 'black fabric sofaset.png', 'Sofa Set', 'Black fabric', '1', 'Available', 'other', '', '1'),
(58, 'Commercial Office sofaset', '36000', '2011-11-12', 'commercial office sofaset.png', 'Sofa Set', 'Commercial office', '1', 'Available', 'other', '', '1'),
(59, 'Cream Leather sofaset', '29000', '2011-12-11', 'cream learther.png', 'Sofa Set', 'Cream leather', '1', 'Available', 'Own', '', '1'),
(60, 'Dark Grey sofaset', '30000', '2011-12-11', 'dark grey sofaset.png', 'Sofa Set', 'Dark grey', '1', 'Available', 'other', '', '1'),
(61, 'Grey Microfibar sofaset', '31000', '2011-12-11', 'gery microfiber.png', 'Plants', 'Grey microfibar', '1', 'Available', 'Own', '', '1'),
(62, 'Italian sofaset', '33000', '2011-12-11', 'Italian sofaset.png', 'Sofa Set', 'Italian ', '1', 'Available', 'other', '', '1'),
(63, 'Modren white sofaset', '20000', '2011-12-11', 'Modren white sofaset.png', 'Sofa Set', 'Modren white', '1', 'Available', 'other', '', '1'),
(64, 'Port Royal sofaset', '10000', '2011-12-11', 'port royal sofaset.png', 'Sofa Set', 'Port royal', '4', 'Available', 'Own', '', '1'),
(65, 'Navy Fabric sofaset', '10000', '2011-12-11', 'navy fabric.png', 'Sofa Set', 'Navy fabric', '1', 'Available', 'other', '', '1'),
(66, 'Royal Large sofaset', '15000', '2011-12-11', 'royal large sofaset.png', 'Sofa Set', 'Royal large', '1', 'Available', 'Own', '', '1'),
(67, 'Velva Modren sofaset', '4000', '2012-11-12', 'velva modren sofaset.png', 'Sofa Set', 'Velva modren ', '1', 'Available', 'other', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `v_id` int(6) NOT NULL AUTO_INCREMENT,
  `v_f_name` varchar(100) NOT NULL,
  `v_phn` bigint(10) NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `v_add` text NOT NULL,
  `v_pin` int(10) NOT NULL,
  `v_pass` varchar(200) DEFAULT NULL,
  `v_img` varchar(2000) DEFAULT NULL,
  `v_L_name` varchar(100) NOT NULL,
  `v_age` int(20) NOT NULL,
  `v_gen` char(10) NOT NULL,
  `v_city` varchar(100) NOT NULL,
  `v_state` varchar(100) NOT NULL,
  `v_status` varchar(200) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(6) NOT NULL AUTO_INCREMENT,
  `p_id` int(6) NOT NULL,
  `c_id` int(6) NOT NULL,
  `v_email` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
