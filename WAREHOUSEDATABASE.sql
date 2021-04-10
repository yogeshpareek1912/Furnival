-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2021 at 02:29 PM
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
-- Database: `pareeky_warehouse`
--
CREATE DATABASE IF NOT EXISTS `pareeky_warehouse` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `pareeky_warehouse`;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_date` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `device_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
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
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`p_id`, `p_name`, `p_price`, `p_mfg`, `p_img`, `cat_title`, `p_desc`, `Qty`, `p_status`, `p_brand`, `v_email`, `each_qty`) VALUES
(2, 'Office Chair Special', '4000', '2020-06-12', 'oc1.jpg', 'Office Chair', 'Office Chair a Specail  Product', '500', 'Available', 'Own Brand', '', '1'),
(3, 'Office Chair Comfort', '1000', '2020-06-05', 'oc2.jpg', 'Office Chair', 'Office Chair Comfort', '500', 'Available', 'Own Brand', '', '1 '),
(4, 'Office Chair Extra Comfort', '4500', '2020-06-18', 'oc3.jpg', 'Office Chair', 'Office Chair with Extra Comfort', '500', 'Available', 'Own Brand', '', '1'),
(5, 'Office Chari Easy Comfort', '5000', '2020-06-12', 'oc5.jpg', 'Office Chair', 'Office Chair Easy,Comfort,Special', '500', 'Available', 'Own Brand', '', '1'),
(6, 'Office Chair Variety', '3000', '2020-06-19', 'oc6.jpg', 'Office Chair', 'Office Chair Variety', '500', 'Available', 'Own ', '', '1'),
(7, 'Office Chair Plazma', '3100', '2020-06-11', 'oc7.jpg', 'Office Chair', 'Office Chair Plazma', '500', 'Available', 'Own', '', '1'),
(8, 'Office Chair Unique', '3700', '2020-06-11', 'oc8.jpg', 'Office Chair', 'Office Chair Unique', '500', 'Available', 'own', '', '1'),
(9, 'herman_miller_style_chair2', '4500', '2020-06-11', 'oc9.jpg', 'Office chair', 'Office chair herman', '500', 'Available', 'Own', '', '1'),
(10, 'back suport for office chair', '3200', '2020-06-11', 'of10.jpg', 'Office chair', 'back suport office chair', '500', 'Available', 'Own ', '', '1'),
(11, 'Brand new office chair', '7000', '2020-06-11', 'of11.jpg', 'Office chair', 'Brand new office chair', '500', 'Available', 'own brand', '', '1'),
(12, 'Velvet office chair', '6000', '2020-06-11', 'of12.jpg', 'Office chair', 'Velvet office chair', '500', 'Available', 'Own brand', '', '1'),
(13, 'Costco for office chair', '6700', '2020-06-11', 'of13.jpg', 'Office chair', 'Costco for office chair', '500', 'Available', 'special brand', '', '1'),
(14, 'Walmart desk chair', '4500', '2020-06-11', 'of14.jpg', 'Office chair', 'Walmart desk chair', '500', 'Available', 'own', '', '1'),
(15, 'cheap office chair', '9000', '2020-06-11', 'om15.jpg', 'Office chair', 'cheap office chair', '500', 'Available', 'own', '', '1'),
(17, 'hsi office furniture', '8500', '2020-06-11', 'om20.jpg', 'Office furniture', 'hsi office furniture', '500', 'Available', 'own', '', '1'),
(18, 'new york office chair', '11500', '2020-06-11', 'om21.jpg', 'Office chair', 'new york office chair', '500', 'Available', 'new york', '', '1'),
(19, 'steelcase leap V2 chair', '13000', '2020-06-11', 'om22.jpg', 'Office chair', 'steelcase leap v2 chair', '500', 'Available', 'own', '', '2'),
(20, 'swivel desk  chair', '14000', '2020-06-11', 'om23.jpg', 'desk chair', 'swivel desk chair', '500', 'Available', 'own', '', '1'),
(21, 'New sofa', '15000', '2011-12-11', 'New sofa.png', 'Sofa Set', 'nope', '500', 'Available', 'Own', '', '5'),
(23, 'Letest curtain design', '4000', '2011-11-12', 'Letest curtain design.png', 'Curtains', 'nope', '500', 'Available', 'Own', '', '3'),
(24, 'Curtains 52 in', '5000', '2011-11-23', 'Curtains 52 in.png', 'Curtains', 'nope', '500', 'Available', 'Own', '', '3'),
(26, 'Lorna white curtain', '4000', '2011-11-24', 'Lorna white curtain.png', 'Curtains', 'nope', '500', 'Available', 'Own', '', '1'),
(27, 'Leather sofa set', '20000', '2015-11-23', 'Leather sofa set.png', 'Sofa Set', 'nope', '500', 'Available', 'Own', '', '1'),
(28, 'Corner sofa set', '15000', '2011-11-24', 'oc3.jpg', 'Sofa Set', 'nope', '500', 'Available', 'Own', '', '1'),
(29, 'Homelegence sofa set', '15000', '2011-11-13', 'Homelengence sofa set.png', 'Sofa Set', 'nope', '500', 'Available', 'Own', '', '1'),
(30, 'High Qulity Sofa set', '20000', '2011-11-12', 'High Qulity sofaset.png', 'Sofa Set', 'nope', '500', 'Available', 'Own', '', '1'),
(31, 'Plants', '1000', '2011-11-12', 'plants.png', 'Plants', 'nope', '500', 'Available', 'other', '', '1'),
(32, 'Good luck plants', '1500', '0000-00-00', 'Good luck plants.png', 'Plants', 'nope', '500', 'Available', 'other', '', '1'),
(33, 'Sunflowers', '800', '2011-11-23', 'Sunflowers.png', 'Plants', 'nope', '500', 'Available', 'other', '', '1'),
(34, 'Plumeria', '1600', '2011-11-23', 'Plumeria.png', 'Plants', 'nope', '500', 'Available', 'other', '', '1'),
(35, 'zz plants', '1000', '2011-11-24', 'zz plants.png', 'Plants', 'nope', '500', 'Available', 'other', '', '1'),
(36, 'Beatiful simple painting', '2500', '2011-11-22', 'Beatiful simple painting.png', 'Paintings', 'nope', '500', 'Available', 'other', '', '1'),
(37, 'Painting for sale', '3000', '2011-11-12', 'Painting for sale.png', 'Paintings', 'nope', '500', 'Available', 'other', '', '1'),
(38, 'Horse Painting', '6000', '2011-11-12', 'Horse painting.png', 'Paintings', 'nope', '500', 'Available', 'other', '', '1'),
(39, 'Fantasty painting', '10000', '2011-11-12', 'Fantasy-Painting.png', 'Paintings', 'nope', '500', 'Available', 'other', '', '1'),
(40, 'Mountain', '4000', '2011-11-12', 'Mountain.png', 'Paintings', 'nope', '500', 'Available', 'Own', '', '1'),
(41, 'The best craft and Art', '4000', '2011-11-12', 'The best craft and art.png', 'Decorative Craft Product', 'nope', '500', 'Available', 'Own', '', '1'),
(42, 'Decorative craft product ', '10000', '2011-11-12', 'Decorative craft product.png', 'Decorative Craft Product', 'nope', '500', 'Available', 'other', '', '1'),
(43, 'Seabirds Craft', '5000', '2011-12-11', 'Seabirds craft.png', 'Decorative Craft Product', 'nope', '500', 'Available', 'other', '', '1'),
(44, 'craft product', '10000', '2011-11-12', 'craft product.png', 'Decorative Craft Product', 'nope', '500', 'Available', 'Own', '', '1'),
(45, 'copper and glass product', '4000', '2011-11-12', 'copper and glass product.png', 'Decorative Craft Product', 'nope', '500', 'Available', 'other', '', '1'),
(46, 'Tuscan wrought iron', '4000', '2011-11-12', 'Tuscan wrought iron.png', 'Decorative Wrought Iorn', 'nope', '500', 'Available', 'other', '', '1'),
(47, 'Wrought iron home decore', '10000', '2011-12-11', 'Wrought iron wall decore.png', 'Decorative Wrought Iorn', 'nope', '500', 'Available', 'Own', '', '1'),
(48, 'Wrought iron', '4000', '2011-12-15', 'Wrought iron.png', 'Decorative Wrought Iorn', 'nope', '500', 'Available', 'other', '', '1'),
(49, 'Very large wrought iron', '5000', '2011-11-15', 'very large wrought iron.png', 'Decorative Wrought Iorn', 'nope', '500', 'Available', 'other', '', '1'),
(50, 'Art wall decor ', '4000', '2011-12-11', 'Art wall decor.png', 'Decorative Wrought Iorn', 'nope', '500', 'Available', 'other', '', '1'),
(51, 'Lighting design badroom ', '25000', '2011-12-17', 'Lighting design.png', 'Badroom', 'nope', '500', 'Available', 'other', '', '1'),
(52, 'Transitional badroom', '30000', '2011-12-11', 'Transitional badroom.png', 'Badroom', 'nope', '500', 'Available', 'other', '', '1'),
(53, 'Badroom furniture', '35000', '2011-11-19', 'Badroom furniture.png', 'Badroom', 'nope', '500', 'Available', 'other', '', '1'),
(54, 'Badroom interior', '26000', '2011-12-11', 'Badroom interior.png', 'Badroom', 'nope', '500', 'Available', 'other', '', '1'),
(55, 'Rest and relaxation bedroom', '3 6000', '2011-11-12', 'Rest and relaxtion bedroom.png', 'Badroom', 'nope', '500', 'Available', 'other', '', '1'),
(56, 'Aluminium and seak sofaset', '40000', '2011-11-12', 'aluminium and teak sofaset.png', 'Sofa Set', 'Aluminium and seak sofaset', '500', 'Available', 'other', '', '1'),
(57, 'Black fabric sofaset', '35000', '2011-12-11', 'black fabric sofaset.png', 'Sofa Set', 'Black fabric', '500', 'Available', 'other', '', '1'),
(58, 'Commercial Office sofaset', '36000', '2011-11-12', 'commercial office sofaset.png', 'Sofa Set', 'Commercial office', '500', 'Available', 'other', '', '1'),
(59, 'Cream Leather sofaset', '29000', '2011-12-11', 'cream learther.png', 'Sofa Set', 'Cream leather', '500', 'Available', 'Own', '', '1'),
(60, 'Dark Grey sofaset', '30000', '2011-12-11', 'dark grey sofaset.png', 'Sofa Set', 'Dark grey', '500', 'Available', 'other', '', '1'),
(61, 'Grey Microfibar sofaset', '31000', '2011-12-11', 'gery microfiber.png', 'Plants', 'Grey microfibar', '500', 'Available', 'Own', '', '1'),
(62, 'Italian sofaset', '33000', '2011-12-11', 'Italian sofaset.png', 'Sofa Set', 'Italian ', '500', 'Available', 'other', '', '1'),
(63, 'Modren white sofaset', '20000', '2011-12-11', 'Modren white sofaset.png', 'Sofa Set', 'Modren white', '500', 'Available', 'other', '', '1'),
(64, 'Port Royal sofaset', '10000', '2011-12-11', 'port royal sofaset.png', 'Sofa Set', 'Port royal', '500', 'Available', 'Own', '', '1'),
(65, 'Navy Fabric sofaset', '10000', '2011-12-11', 'navy fabric.png', 'Sofa Set', 'Navy fabric', '500', 'Available', 'other', '', '1'),
(66, 'Royal Large sofaset', '15000', '2011-12-11', 'royal large sofaset.png', 'Sofa Set', 'Royal large', '500', 'Available', 'Own', '', '1'),
(67, 'Velva Modren sofaset', '4000', '2012-11-12', 'velva modren sofaset.png', 'Sofa Set', 'Velva modren ', '500', 'Available', 'other', '', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
