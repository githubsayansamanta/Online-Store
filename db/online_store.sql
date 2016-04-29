-- MySQL dump 10.16  Distrib 10.1.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: online_store
-- ------------------------------------------------------
-- Server version	10.1.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_info` (
  `product_id` varchar(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_count` varchar(10) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_info`
--

LOCK TABLES `product_info` WRITE;
/*!40000 ALTER TABLE `product_info` DISABLE KEYS */;
INSERT INTO `product_info` VALUES ('001','Gitanjali',200,'10','http://ecx.images-amazon.com/images/I/51ZV9E6VFTL.jpg'),('002','An Anthology',300,'10','http://ecx.images-amazon.com/images/I/51vyJmmazbL._SX322_BO1,204,203,200_.jpg'),('003','Selected Stories',150,'10','http://ecx.images-amazon.com/images/I/81jUj2upfsL.jpg'),('004','Gora',400,'10','http://thealternative.in/wp-content/uploads/2013/08/9788171677559.jpg'),('005','Chitra',325,'10','http://imshopping.rediff.com/imgchkbooks/400-400/books/pixs/95/9788171677795.jpg'),('006','Last Poem',300,'10','http://img6a.flixcart.com/image/book/2/3/8/the-last-poem-original-imadgkzaacsrepbc.jpeg'),('007','One Hundred Songs',150,'10','http://www.exoticindia.com/books/rabindranath_tagore_one_hundred_songs_in_staff_idk232.jpg'),('008','Riddle Plays',250,'10','http://www.exoticindia.com/books/riddle_plays_rabindranath_tagores_originally_written_ihf044.jpg'),('009','Selected Writing For Children',180,'10','http://ecx.images-amazon.com/images/I/51K9V4JXMNL._SX325_BO1,204,203,200_.jpg'),('010','Chokher Bali',265,'15','https://sruthitetali.files.wordpress.com/2011/09/chokher-bali.jpg'),('011','Encyclopedia of Tagore ',300,'10','http://www.vedamsbooks.com/uploadedfiles/real/images/no62586.jpg'),('012','Sadhana',330,'10','http://www.loyalbooks.com/image/detail/Sadhana-Realisation-of-Life.jpg');
/*!40000 ALTER TABLE `product_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_data`
--

DROP TABLE IF EXISTS `reg_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_data` (
  `FirstName` varchar(50) DEFAULT NULL,
  `SurName` varchar(50) DEFAULT NULL,
  `UserNameORMob` varchar(20) NOT NULL,
  `EmailID` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DateOfBirth` varchar(20) DEFAULT NULL,
  `PasswordRecovery` varchar(30) NOT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `AC_info` float NOT NULL,
  PRIMARY KEY (`UserNameORMob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_data`
--

LOCK TABLES `reg_data` WRITE;
/*!40000 ALTER TABLE `reg_data` DISABLE KEYS */;
INSERT INTO `reg_data` VALUES ('Mani','Bera','@mani','@mani','female','2/4/2009','Dancing','mani',-1125),('Partha','Bera','@partha','@partha','male','24/1/1992','Video Game','partha',2500),('sayan','samanta','@sayan','@sayan','male','8/27/1994','Cricket','s',-800),('Sayan','Samanta','bubai','sayansamanta1994@gma','male','8/27/1994','Cricket','bubai',50000),('Shobha','Bera','mamon','shobha@ishani.com','female','12/25/1989','kho-kho','moni',20460);
/*!40000 ALTER TABLE `reg_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-29 16:38:14
