-- MySQL dump 10.13  Distrib 5.5.16, for Linux (i686)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `public` smallint(6) DEFAULT '0',
  `user_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Lorem ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus, magna quis faucibus eleifend, diam est luctus nibh, non elementum velit est sed velit. In vulputate pharetra est, eu aliquet sapien auctor quis. Aliquam rutrum cursus sem eget cursus. Nullam pellentesque dolor non nisi consectetur nec tristique quam semper. Aenean eget mi a augue placerat dictum. Donec id enim sit amet diam pellentesque luctus. Phasellus a elit ipsum. Duis vehicula ipsum vitae diam vulputate nec pellentesque leo pellentesque. Phasellus euismod viverra tortor, et malesuada est posuere hendrerit. Ut porta urna est, quis aliquam tellus. Donec fermentum sollicitudin purus, a adipiscing est malesuada congue. Vestibulum quis tempor dolor. Quisque luctus dictum magna, condimentum consectetur ante dapibus in. Etiam condimentum, enim sit amet accumsan blandit, quam nisl mattis risus, in rhoncus lectus leo non libero. Pellentesque elit lorem, tincidunt placerat ullamcorper id, congue eu nibh. ',1,'John'),(2,'Etiam malesuada','Etiam malesuada rhoncus urna, at vulputate lorem blandit et. Sed dignissim varius viverra. Maecenas et dui odio, at feugiat dolor. Aliquam accumsan urna eu felis mollis ultricies. Etiam malesuada dictum accumsan. Vivamus tempor condimentum congue. Ut libero neque, accumsan vitae convallis viverra, varius eu mauris. Aliquam pharetra iaculis lorem eget ullamcorper. Aliquam nisi mauris, aliquam non bibendum eu, malesuada tincidunt nibh. Curabitur posuere imperdiet risus, sit amet mollis lorem adipiscing eu. Ut sed enim ut nisi faucibus viverra ac at ligula. Sed vehicula pretium fermentum. Proin malesuada, dolor eu congue placerat, tellus nulla laoreet nisi, ut tincidunt erat enim a metus. Proin ipsum arcu, ultricies a lobortis in, porta id odio. Proin nisl nibh, placerat cursus laoreet ultricies, venenatis in lorem. Maecenas vel sollicitudin justo. ',1,'Mike'),(3,'Etiam feugiat','Etiam feugiat magna a metus viverra ut iaculis libero auctor. Proin vel interdum mi. Fusce in quam nec libero interdum imperdiet. Duis ac sem mauris, at placerat ligula. Nulla facilisi. Cras eleifend orci eget tellus dignissim adipiscing. Nulla facilisi. Duis nec turpis neque. Phasellus consectetur mollis mauris, eget tempor elit lacinia in. ',1,'Jack'),(17,'Maecenas lobortis','Maecenas lobortis ornare enim, eget porttitor neque auctor at. Nunc in felis at nisl pretium rhoncus vel vitae arcu. Integer placerat ligula sapien. Vestibulum non sodales justo. Curabitur nec posuere urna. Praesent tempor scelerisque placerat. Duis vitae ornare metus. Sed luctus aliquam justo, at bibendum tortor volutpat in. Phasellus in sapien ante, eu convallis risus. Nunc consequat sagittis bibendum. Nam luctus elementum nulla, at lobortis diam faucibus in. Donec feugiat lobortis tempus. Nullam commodo, eros quis dapibus lacinia, tortor odio lacinia lorem, non ornare nibh leo vel lacus. Ut nulla felis, lacinia et vulputate ac, sodales quis turpis. Nam tristique fermentum odio sit amet egestas. Vivamus at sapien scelerisque nisi volutpat viverra a sed nunc. ',1,'Kate'),(80,'Praesent sodales','Praesent sodales pretium feugiat. Sed congue ultricies justo, non consequat elit feugiat in. Mauris adipiscing, diam sit amet accumsan tempor, arcu massa bibendum arcu, vitae pulvinar dui enim ac elit. Quisque feugiat diam vitae libero volutpat mollis. Duis eget tortor eget leo euismod molestie eget a dui. Cras turpis enim, vulputate pulvinar consectetur vel, hendrerit nec elit. Nulla nisl erat, interdum a aliquet a, blandit at turpis. Nulla molestie ullamcorper rutrum. Phasellus varius enim id justo cursus porta. Phasellus sagittis elit orci, vitae venenatis nisl. Praesent quam orci, scelerisque at eleifend non, tristique vel enim. Donec eu elit sapien. Donec sem odio, tempor at convallis in, suscipit blandit massa. Fusce malesuada semper neque, nec molestie nunc sodales eget. Praesent dapibus libero vitae nisi gravida cursus. Fusce gravida lacus mollis est suscipit aliquam.',0,'Angie');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logon`
--

DROP TABLE IF EXISTS `logon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(55) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='logon';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logon`
--

LOCK TABLES `logon` WRITE;
/*!40000 ALTER TABLE `logon` DISABLE KEYS */;
INSERT INTO `logon` VALUES (1,'admin','0192023a7bbd73250516f069df18b500');
/*!40000 ALTER TABLE `logon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-01-13  2:17:51
