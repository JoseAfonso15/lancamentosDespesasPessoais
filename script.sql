 -- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: lancamentoDespesa
-- ------------------------------------------------------
-- Server version	5.7.35

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
-- Table structure for table `categoria_despesa`
--

DROP TABLE IF EXISTS `categoria_despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_despesa`
--

LOCK TABLES `categoria_despesa` WRITE;
/*!40000 ALTER TABLE `categoria_despesa` DISABLE KEYS */;
INSERT INTO `categoria_despesa` VALUES (4,'Moradia','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(5,'Alimentação','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(6,'Saúde','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(7,'Educação','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(8,'Despesas Pessoais','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(9,'Transporte','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(10,'Celular/TV/Internet','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(11,'Lazer','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL);
/*!40000 ALTER TABLE `categoria_despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `despesa`
--

DROP TABLE IF EXISTS `despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `fornecedor_id` int(11) NOT NULL,
  `categoria_despesa_id` int(11) NOT NULL,
  `tipo_pagamento_id` int(11) NOT NULL,
  `status_despesa_id` int(11) NOT NULL,
  `data_compra` date DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  `observacao` varchar(500) DEFAULT NULL,
  `anexo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fornecedor_despesa` (`fornecedor_id`),
  KEY `fk_categoria_despesa_despesa` (`categoria_despesa_id`),
  KEY `fk_tipo_pagamento_despesa` (`tipo_pagamento_id`),
  KEY `fk_status_despesa_despesa` (`status_despesa_id`),
  CONSTRAINT `fk_categoria_despesa_despesa` FOREIGN KEY (`categoria_despesa_id`) REFERENCES `categoria_despesa` (`id`),
  CONSTRAINT `fk_fornecedor_despesa` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedor` (`id`),
  CONSTRAINT `fk_status_despesa_despesa` FOREIGN KEY (`status_despesa_id`) REFERENCES `status_despesa` (`id`),
  CONSTRAINT `fk_tipo_pagamento_despesa` FOREIGN KEY (`tipo_pagamento_id`) REFERENCES `tipo_pagamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `despesa`
--

LOCK TABLES `despesa` WRITE;
/*!40000 ALTER TABLE `despesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_despesa`
--

DROP TABLE IF EXISTS `status_despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `color` char(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_despesa`
--

LOCK TABLES `status_despesa` WRITE;
/*!40000 ALTER TABLE `status_despesa` DISABLE KEYS */;
INSERT INTO `status_despesa` VALUES (7,'Pago','#31B404','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(8,'Pendente','#ff0d00','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL);
/*!40000 ALTER TABLE `status_despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_pagamento`
--

DROP TABLE IF EXISTS `tipo_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_pagamento`
--

LOCK TABLES `tipo_pagamento` WRITE;
/*!40000 ALTER TABLE `tipo_pagamento` DISABLE KEYS */;
INSERT INTO `tipo_pagamento` VALUES (3,'Dinheiro','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(4,'Boleto','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(5,'Cartão de Crédito','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(6,'Cartão de Débito','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(7,'Cheque','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(8,'Transferência','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(9,'Pix','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL),(10,'Crediario','2021-02-01 03:00:00','2021-02-01 03:00:00',NULL);
/*!40000 ALTER TABLE `tipo_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','$2y$10$61X/YalE1F.frRrZm68m7OPo7Z.MyprTvrbRWVeuHbAgrsnlQtDLG');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 14:06:04