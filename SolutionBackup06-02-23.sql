-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 192.168.1.213    Database: solution
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
-- Table structure for table `deptmn`
--

DROP TABLE IF EXISTS `deptmn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deptmn` (
  `id` int NOT NULL AUTO_INCREMENT,
  `department` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deptmn`
--

LOCK TABLES `deptmn` WRITE;
/*!40000 ALTER TABLE `deptmn` DISABLE KEYS */;
INSERT INTO `deptmn` VALUES (1,'Software'),(2,'Support');
/*!40000 ALTER TABLE `deptmn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deptmn_user`
--

DROP TABLE IF EXISTS `deptmn_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deptmn_user` (
  `dept_id` int NOT NULL,
  `user_id` int NOT NULL,
  UNIQUE KEY `UK_70ropy6k5wrfpfhqhh2l79whd` (`user_id`),
  KEY `FKcg6g71qpsfdx58ew8q4x0l9h3` (`dept_id`),
  CONSTRAINT `FKcg6g71qpsfdx58ew8q4x0l9h3` FOREIGN KEY (`dept_id`) REFERENCES `deptmn` (`id`),
  CONSTRAINT `FKpffv6dxqbx4w5ai142vxw1d78` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deptmn_user`
--

LOCK TABLES `deptmn_user` WRITE;
/*!40000 ALTER TABLE `deptmn_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `deptmn_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) DEFAULT NULL,
  `department_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKem3xmsuvgc40jm1kt8i5bj6em` (`department_id`),
  CONSTRAINT `FKem3xmsuvgc40jm1kt8i5bj6em` FOREIGN KEY (`department_id`) REFERENCES `deptmn` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Travel Tracking',1),(2,'Tracking System',1),(3,'CMSS',1),(4,'Omni',1),(5,'Test Project',2);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trn_issues`
--

DROP TABLE IF EXISTS `trn_issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trn_issues` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `details` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `issue` varchar(255) DEFAULT NULL,
  `solution` varchar(2000) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `pro_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `FKek0ma9nt4q96y8oicu6dmy0b0` (`pro_id`),
  KEY `FKn9rl1uaff9ou7oge8n17livjr` (`user_id`),
  CONSTRAINT `FKek0ma9nt4q96y8oicu6dmy0b0` FOREIGN KEY (`pro_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `FKn9rl1uaff9ou7oge8n17livjr` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trn_issues`
--

LOCK TABLES `trn_issues` WRITE;
/*!40000 ALTER TABLE `trn_issues` DISABLE KEYS */;
INSERT INTO `trn_issues` VALUES (3,'Unsupported Media Type','default.png','415','Need to send data json format. Basically it throws error when we send any post request plan text','JAVA',1,2),(4,'Internal Server Error','default.png','500','try to fllow proper code ','Java Spring Boot',2,2);
/*!40000 ALTER TABLE `trn_issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enabled` bit(1) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `department_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_sb8bbouer5wak8vyiiy4pf2bx` (`username`),
  KEY `FKnb4oki6awb5e6yjo9cgdi6vci` (`department_id`),
  CONSTRAINT `FKnb4oki6awb5e6yjo9cgdi6vci` FOREIGN KEY (`department_id`) REFERENCES `deptmn` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,_binary '','Admin','$2a$10$rAZjtneFdKbtpY6.IZCcV.yfN6JZwL6.9W9c.RGRKc.igHzrTwOlO','ROLE_ADMIN','admin',1),(2,_binary '','Swarup Hait','$2a$10$YiZNMvrIddmYBsmb0mW8jeV6N3lzZiTmi3RY1x.KXblj8Nck1k5Ha','ROLE_USER','swaruph',1),(4,_binary '','Avik Rakshit','$2a$10$cvPwSF6sNbDLGGUMcEKAtOn.o/aHvt.BfwG9UZ4i1VZRsSvo1QOPi','ROLE_USER','avikr',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'solution'
--

--
-- Dumping routines for database 'solution'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-06 11:44:18
