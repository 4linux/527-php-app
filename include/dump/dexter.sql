-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: dexter
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_razao` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `cep` varchar(8) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'DHL LogÃ­stica','09830583205','contato@dhl.com','123456','4350984508','94894859','89899999','Rua dos Transportes, 99','Jardim CaminhÃ£o','SÃ£o Paulo','SP'),(11,'Maddog Co.','24325236532','company@maddog.com','123456','23526','345346346','34634643','ji jijoij iihoiho mmpo, 77','okewgopkeowpg','uhohouh','FN');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encomendas`
--

DROP TABLE IF EXISTS `encomendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encomendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fun_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `l_pac` int(11) NOT NULL,
  `a_pac` int(11) NOT NULL,
  `p_pac` int(11) NOT NULL,
  `ori_cep` varchar(8) DEFAULT NULL,
  `ori_endereco` varchar(255) NOT NULL,
  `ori_bairro` varchar(100) NOT NULL,
  `ori_cidade` varchar(100) NOT NULL,
  `ori_estado` varchar(2) NOT NULL,
  `dst_nome` varchar(255) NOT NULL,
  `dst_cep` varchar(8) NOT NULL,
  `dst_endereco` varchar(255) NOT NULL,
  `dst_bairro` varchar(100) NOT NULL,
  `dst_cidade` varchar(100) NOT NULL,
  `dst_estado` varchar(2) NOT NULL,
  `distancia` float(11,2) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `mot_id` int(11) DEFAULT NULL,
  `data_coleta` date DEFAULT NULL,
  `data_prevista` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `transito` int(1) DEFAULT '0',
  `entregue` int(1) DEFAULT '0',
  `coleta` int(1) DEFAULT '0',
  `seguro` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `funcionarios_id_fk` (`fun_id`),
  KEY `clientes_id_fk` (`cli_id`),
  KEY `tip_id_fk` (`tip_id`),
  KEY `mot_id_fk` (`mot_id`),
  CONSTRAINT `encomendas_ibfk_1` FOREIGN KEY (`fun_id`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `encomendas_ibfk_2` FOREIGN KEY (`cli_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `encomendas_ibfk_3` FOREIGN KEY (`tip_id`) REFERENCES `tipos_encomenda` (`id`) ON DELETE CASCADE,
  CONSTRAINT `encomendas_ibfk_4` FOREIGN KEY (`mot_id`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encomendas`
--

LOCK TABLES `encomendas` WRITE;
/*!40000 ALTER TABLE `encomendas` DISABLE KEYS */;
INSERT INTO `encomendas` VALUES (4,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,NULL,0,0,0,0),(5,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,NULL,0,0,0,0),(6,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,NULL,0,0,0,0),(7,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,'0000-00-00',0,0,0,0),(8,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,'0000-00-00',0,0,0,0),(9,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,'0000-00-00',0,0,0,0),(10,1,1,102,205,50,'05331020','Rua Parnamirim, 110','JaguarÃ©','SÃ£o Paulo','SP','Kleber Calegario Batista','05330011','Rua Alarico Franco Caiubi, 549','JaguarÃ©','SÃ£o Paulo','SP',100.00,1,6,'2011-10-18',NULL,'2011-10-20',0,0,0,0);
/*!40000 ALTER TABLE `encomendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fale_conosco`
--

DROP TABLE IF EXISTS `fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fale_conosco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fale_conosco`
--

LOCK TABLES `fale_conosco` WRITE;
/*!40000 ALTER TABLE `fale_conosco` DISABLE KEYS */;
/*!40000 ALTER TABLE `fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prf_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prf_id` (`prf_id`),
  CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`prf_id`) REFERENCES `perfis` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,1,'Admin','admin@dexter.com','123456'),(2,1,'Fulano','fulano@dexter.com','123456'),(6,2,'JoÃ£o','joao@dexter.com','123456');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfis`
--

DROP TABLE IF EXISTS `perfis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfis`
--

LOCK TABLES `perfis` WRITE;
/*!40000 ALTER TABLE `perfis` DISABLE KEYS */;
INSERT INTO `perfis` VALUES (1,'administrador'),(2,'motorista');
/*!40000 ALTER TABLE `perfis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_encomenda`
--

DROP TABLE IF EXISTS `tipos_encomenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_encomenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `valor_km` float(11,2) NOT NULL,
  `prazo_maximo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_encomenda`
--

LOCK TABLES `tipos_encomenda` WRITE;
/*!40000 ALTER TABLE `tipos_encomenda` DISABLE KEYS */;
INSERT INTO `tipos_encomenda` VALUES (1,'Expressa',0.98,2),(2,'Normal',0.45,5);
/*!40000 ALTER TABLE `tipos_encomenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-22 14:12:40
