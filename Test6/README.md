Task took approx. 6 hours.

DB dump:
-- MySQL dump 10.14  Distrib 5.5.54-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	5.5.54-MariaDB-1ubuntu0.14.04.1
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `text` text NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` VALUES (1,'Posuere',' Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2017-03-31 19:00:19'),(2,'Proin',' Nulla accumsan et massa eu dignissim.','2017-03-31 19:00:19'),(3,'In',' Etiam eu magna rutrum, accumsan nulla vel, dignissim quam.','2017-03-31 19:00:19'),(4,'Luctus',' Nam tortor arcu, pulvinar non fermentum sed, vehicula non leo.','2017-03-31 19:00:19'),(5,'Fames',' Nullam luctus vel elit a facilisis.','2017-03-31 19:00:19'),(6,'Eros',' Fusce fermentum, neque sit amet eleifend tincidunt, diam lacus luctus neque, vel faucibus est dolor vel tortor.','2017-03-31 19:00:19'),(7,'Massa',' Proin a porttitor elit, in ultricies risus.','2017-03-31 19:00:19'),(8,'Proin',' Nam tortor arcu, pulvinar non fermentum sed, vehicula non leo.','2017-03-31 19:00:19'),(9,'Vel',' Nulla porta dapibus ex vitae varius.','2017-03-31 19:00:19'),(10,'Nec',' Suspendisse euismod mattis nisi, sit amet rutrum augue semper id.','2017-03-31 19:00:19'),(11,'Nulla','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2017-03-31 19:00:19'),(12,'A',' Fusce auctor vel ipsum at feugiat.','2017-03-31 19:00:19'),(13,'Ex',' Donec tempus, nunc in dignissim aliquet, magna eros tempus augue, in ornare lorem lorem eu tellus.','2017-03-31 19:00:19'),(14,'Accumsan',' Aliquam turpis eros, luctus sed neque in, convallis sollicitudin velit.','2017-03-31 19:00:19'),(15,'Neque',' Sed pellentesque ipsum lorem, eu lacinia dui scelerisque nec.','2017-03-31 19:00:19'),(16,'Eu',' Ut porttitor enim in mi mollis imperdiet.','2017-03-31 19:00:19'),(17,'Porta',' Ut porttitor enim in mi mollis imperdiet.','2017-03-31 19:00:19'),(18,'Nibh',' Nullam luctus vel elit a facilisis.','2017-03-31 19:00:19'),(19,'Mollis',' Aliquam turpis eros, luctus sed neque in, convallis sollicitudin velit.','2017-03-31 19:00:19'),(20,'Ex',' Integer sed efficitur sem, eu facilisis nisi.','2017-03-31 19:00:19'),(21,'Sed',' Integer sed efficitur sem, eu facilisis nisi.','2017-03-31 19:00:19'),(22,'Proin',' Fusce vehicula ligula enim, in lacinia odio posuere in.','2017-03-31 19:00:19'),(23,'Sed',' Nulla accumsan et massa eu dignissim.','2017-03-31 19:00:19'),(24,'Faucibus',' Interdum et malesuada fames ac ante ipsum primis in faucibus.','2017-03-31 19:00:19'),(25,'Velit',' Cras eget dui sed ligula aliquam vehicula.','2017-03-31 19:00:19'),(26,'Tellus',' Maecenas pellentesque ligula iaculis, egestas nulla ac, fermentum lorem.','2017-03-31 19:00:19'),(27,'Tortor',' Fusce vehicula ligula enim, in lacinia odio posuere in.','2017-03-31 19:00:19'),(28,'Velit',' Morbi vitae eleifend mi.','2017-03-31 19:00:19'),(29,'Ipsum',' Proin a porttitor elit, in ultricies risus.','2017-03-31 19:00:19'),(30,'Odio',' Nam tortor arcu, pulvinar non fermentum sed, vehicula non leo.','2017-03-31 19:00:19'),(31,'Eros',' Fusce auctor vel ipsum at feugiat.','2017-03-31 19:00:19'),(32,'Felis',' Donec sodales, nibh id auctor convallis, tellus diam gravida velit, vel venenatis velit purus et dolor.','2017-03-31 19:00:19'),(33,'Condimentum',' Cras quis neque vitae lorem tempor eleifend vel eget massa.','2017-03-31 19:00:19'),(34,'Tellus',' Morbi vitae eleifend mi.','2017-03-31 19:00:19'),(35,'Lobortis',' Nulla porta dapibus ex vitae varius.','2017-03-31 19:00:19'),(36,'Nam',' Interdum et malesuada fames ac ante ipsum primis in faucibus.','2017-03-31 19:00:19');
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-31 19:02:08
