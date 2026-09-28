-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: localhost    Database: afterlife_system
-- ------------------------------------------------------
-- Server version	8.0.43

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
-- Table structure for table `souls`
--

DROP TABLE IF EXISTS `souls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `souls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `good_deeds` int DEFAULT NULL,
  `bad_deeds` int DEFAULT NULL,
  `final_score` int DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `souls`
--

LOCK TABLES `souls` WRITE;
/*!40000 ALTER TABLE `souls` DISABLE KEYS */;
INSERT INTO `souls` VALUES (1,'ByteBreakers',6,3,1,2,'Rebirth','2026-09-28 13:22:37'),(2,'Abc',40,50,40,10,'Rebirth','2026-09-28 13:22:37'),(3,'Abc',40,50,40,10,'Rebirth','2026-09-28 13:22:37'),(4,'Xyz',101,99,10,89,'Supreme Heaven','2026-09-28 13:22:37'),(5,'Pranjal',43,10,50,-40,'Hell','2026-09-28 13:22:37'),(6,'Henry',35,55,60,-5,'Hell','2026-09-28 13:31:52'),(7,'Aarav Sharma',30,39,0,39,'Rebirth','2026-09-28 13:35:48'),(8,'Piya Patel',28,40,0,40,'Heaven','2026-09-28 13:36:18'),(9,'Rohan Verma',35,41,0,41,'Heaven','2026-09-28 13:36:40'),(10,'Neha Gupta',26,79,0,79,'Heaven','2026-09-28 13:37:00'),(11,'Vikram Singh',42,80,0,80,'Supreme Heaven','2026-09-28 13:37:19'),(12,'Ananya Desai',31,81,0,81,'Supreme Heaven','2026-09-28 13:37:50'),(13,'Atlas',38,40,40,0,'Rebirth','2026-09-28 13:38:18'),(14,'Violet',29,41,40,1,'Rebirth','2026-09-28 13:38:50'),(15,'Rose',99,40,10,30,'Rebirth','2026-09-28 14:05:40');
/*!40000 ALTER TABLE `souls` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-28 22:13:25
