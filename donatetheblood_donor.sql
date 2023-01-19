-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: donatetheblood
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donor` (
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `save_life_date` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES ('Arpit Sharma','Male','arpit@gmail.com','Ajmer','2003-03-03','7357771104','0','96e79218965eb72c92a549dd5a330112','O+'),('Dheeraj Jangid','Male','dheeraj@gmail.com','Jalore','2000-06-15','9694273827','0','96e79218965eb72c92a549dd5a330112','B+'),('jigyasa teckchandani','Female','jigyasa@gmail.com','Bikaner','1997-08-28','9660763030','0','96e79218965eb72c92a549dd5a330112','O-'),('sameer singh','Male','sameer@gmail.com','Balotra','2002-01-28','8094561193','0','96e79218965eb72c92a549dd5a330112','B+'),('Sharad Chandra','Male','sharad@gmail.com','Kishangarh','1997-04-06','9274750507','0','96e79218965eb72c92a549dd5a330112','B-'),('Priyanka Balani','Female','priyanka@gmail.com','Kotputli','1999-11-21','8905171537','0','96e79218965eb72c92a549dd5a330112','AB-'),('kashish verma','Male','kashish@gmail.com','Karauli','2001-09-08','9983032905','0','96e79218965eb72c92a549dd5a330112','A-'),('prathistha jha','Female','prathistha@gmail.com','Bhilwara','1994-06-13','9079915788','0','96e79218965eb72c92a549dd5a330112','A+');/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-16 15:21:29
