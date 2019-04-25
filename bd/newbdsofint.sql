-- MySQL dump 10.13  Distrib 5.5.52, for Linux (i686)
--
-- Host: localhost    Database: newbdsofint
-- ------------------------------------------------------
-- Server version	5.5.52

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
-- Table structure for table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(20) NOT NULL,
  `accion` varchar(20) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acciones`
--

LOCK TABLES `acciones` WRITE;
/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
INSERT INTO `acciones` VALUES (1,'plugins','index','application.modules.plugins.controllers.acciones.IndexAction'),(2,'plugins','registrarplugin','application.modules.plugins.controllers.acciones.RegistrarpluginAction'),(3,'usuarios','index','application.modules.usuarios.controllers.acciones.IndexAction'),(4,'usuarios','view','application.modules.usuarios.controllers.acciones.ViewAction'),(5,'usuarios','create','application.modules.usuarios.controllers.acciones.CreateAction'),(6,'usuarios','borrar','application.modules.usuarios.controllers.acciones.BorrarAction'),(7,'usuarios','perfil','application.modules.usuarios.controllers.acciones.PerfilAction'),(8,'usuarios','verperfil','application.modules.usuarios.controllers.acciones.VerperfilAction'),(9,'usuarios','borrarperfil','application.modules.usuarios.controllers.acciones.BorrarperfilAction'),(10,'empresa','index','application.modules.empresa.controllers.acciones.IndexAction'),(11,'vtiger','index','application.modules.vtiger.controllers.acciones.IndexAction'),(12,'usuarios','grupo','application.modules.usuarios.controllers.acciones.GrupoAction'),(13,'plugins','unregistrarplugin','application.modules.plugins.controllers.acciones.UnregistrarpluginAction'),(14,'quotegenerator','index','application.modules.quotegenerator.controllers.acciones.IndexAction'),(15,'quotegenerator','getciudades','application.modules.quotegenerator.controllers.acciones.GetciudadesAction'),(16,'quotegenerator','getpaquetes','application.modules.quotegenerator.controllers.acciones.GetpaquetesAction'),(17,'escuelas','index','application.modules.escuelas.controllers.acciones.IndexAction'),(18,'tiposdecursos','index','application.modules.tiposdecursos.controllers.acciones.IndexAction'),(19,'cursos','index','application.modules.cursos.controllers.acciones.IndexAction'),(20,'paquetes','index','application.modules.paquetes.controllers.acciones.IndexAction'),(21,'ciudades','index','application.modules.ciudades.controllers.acciones.IndexAction'),(22,'ciudades','setciudad','application.modules.ciudades.controllers.acciones.SetciudadAction'),(23,'ciudades','delciudad','application.modules.ciudades.controllers.acciones.DelciudadAction'),(24,'a','index','application.modules.a.controllers.acciones.IndexAction'),(25,'paquetes','delete','application.modules.paquetes.controllers.acciones.DeleteAction'),(26,'paquetes','set','application.modules.paquetes.controllers.acciones.SetAction'),(27,'rol','index','application.modules.rol.controllers.acciones.IndexAction'),(28,'rol','delete','application.modules.rol.controllers.acciones.DeleteAction'),(29,'rol','set','application.modules.rol.controllers.acciones.SetAction'),(30,'rol','quit','application.modules.rol.controllers.acciones.QuitAction'),(31,'tiposdecursos','quit','application.modules.tiposdecursos.controllers.acciones.QuitAction'),(32,'tiposdecursos','set','application.modules.tiposdecursos.controllers.acciones.SetAction'),(33,'paquetes','quit','application.modules.paquetes.controllers.acciones.QuitAction'),(34,'escuelas','quit','application.modules.escuelas.controllers.acciones.QuitAction'),(35,'escuelas','set','application.modules.escuelas.controllers.acciones.SetAction'),(36,'ciudades','quit','application.modules.ciudades.controllers.acciones.QuitAction'),(37,'ciudades','set','application.modules.ciudades.controllers.acciones.SetAction'),(38,'cursos','quit','application.modules.cursos.controllers.acciones.QuitAction'),(39,'cursos','set','application.modules.cursos.controllers.acciones.SetAction'),(40,'paquetescontenido','index','application.modules.paquetescontenido.controllers.acciones.IndexAction'),(41,'paquetescontenido','quit','application.modules.paquetescontenido.controllers.acciones.QuitAction'),(42,'paquetescontenido','set','application.modules.paquetescontenido.controllers.acciones.SetAction'),(43,'quotegenerator','getdetailsofcourse','application.modules.quotegenerator.controllers.acciones.GetdetailsofcourseAction'),(44,'reglasdedescuentos','index','application.modules.reglasdedescuentos.controllers.acciones.IndexAction'),(45,'reglasdedescuentos','quit','application.modules.reglasdedescuentos.controllers.acciones.QuitAction'),(46,'reglasdedescuentos','set','application.modules.reglasdedescuentos.controllers.acciones.SetAction'),(47,'nacionalidad','index','application.modules.nacionalidad.controllers.acciones.IndexAction'),(48,'nacionalidad','quit','application.modules.nacionalidad.controllers.acciones.QuitAction'),(49,'nacionalidad','set','application.modules.nacionalidad.controllers.acciones.SetAction'),(50,'reglasdedescuentos','getcursos','application.modules.reglasdedescuentos.controllers.acciones.GetcursosAction'),(51,'paquetescontenido','getpaquetes','application.modules.paquetescontenido.controllers.acciones.GetpaquetesAction'),(52,'cargosporescuelas','index','application.modules.cargosporescuelas.controllers.acciones.IndexAction'),(53,'cargosporescuelas','quit','application.modules.cargosporescuelas.controllers.acciones.QuitAction'),(54,'cargosporescuelas','set','application.modules.cargosporescuelas.controllers.acciones.SetAction'),(55,'quotegenerator','getdetailcharges','application.modules.quotegenerator.controllers.acciones.GetdetailchargesAction'),(56,'planpago','index','application.modules.planpago.controllers.acciones.IndexAction'),(57,'planpago','quit','application.modules.planpago.controllers.acciones.QuitAction'),(58,'planpago','set','application.modules.planpago.controllers.acciones.SetAction'),(59,'quotegenerator','setheaderquote','application.modules.quotegenerator.controllers.acciones.SetheaderquoteAction'),(60,'quotegenerator','getadditem','application.modules.quotegenerator.controllers.acciones.GetadditemAction'),(61,'jornada','index','application.modules.jornada.controllers.acciones.IndexAction'),(62,'jornada','quit','application.modules.jornada.controllers.acciones.QuitAction'),(63,'jornada','set','application.modules.jornada.controllers.acciones.SetAction'),(64,'quotegenerator','getdetailtime','application.modules.quotegenerator.controllers.acciones.GetdetailtimeAction'),(65,'regresarllamadas','index','application.modules.regresarllamadas.controllers.acciones.IndexAction'),(66,'regresarllamadas','conectar','application.modules.regresarllamadas.controllers.acciones.ConectarAction'),(67,'regresarllamadas','cargarTroncal','application.modules.regresarllamadas.controllers.acciones.CargarTrocal'),(68,'regresarllamadas','campaing','application.modules.regresarllamadas.controllers.acciones.CampaingAction'),(69,'recesos','index','application.modules.recesos.controllers.acciones.IndexAction'),(70,'agentes','index','application.modules.agentes.controllers.acciones.IndexAction'),(71,'recesos','agente','application.modules.recesos.controllers.acciones.AgenteAction'),(72,'recesos','lista','application.modules.recesos.controllers.acciones.ListaAction'),(73,'monitoreocampana','index','application.modules.monitoreocampana.controllers.acciones.IndexAction'),(74,'monitoreocampana','llamadas','application.modules.monitoreocampana.controllers.acciones.LlamadasAction'),(75,'monitoreocampana','agentes','application.modules.monitoreocampana.controllers.acciones.AgentesAction'),(76,'monitoreocampana','cabecera','application.modules.monitoreocampana.controllers.acciones.CabeceraAction'),(77,'configuracion','index','application.modules.configuracion.controllers.acciones.IndexAction'),(78,'configuracion','guardar','application.modules.configuracion.controllers.acciones.GuardarAction'),(79,'rescate','index','application.modules.rescate.controllers.acciones.IndexAction'),(80,'rescate','rescate','application.modules.rescate.controllers.acciones.RescateAction'),(81,'rescate','set','application.modules.rescate.controllers.acciones.SetAction'),(82,'monitoreocampana','rescatadas','application.modules.monitoreocampana.controllers.acciones.GetRescatadasAction');
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargosescuelas`
--

DROP TABLE IF EXISTS `cargosescuelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargosescuelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_escuela` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargosescuelas`
--

LOCK TABLES `cargosescuelas` WRITE;
/*!40000 ALTER TABLE `cargosescuelas` DISABLE KEYS */;
INSERT INTO `cargosescuelas` VALUES (1,1,'ENROLMENT',150.00,'','','','','','','','','',''),(2,1,'COE',200.00,'','','','','','','','','',''),(3,1,'MATERIAL FEE',200.00,'','','','','','','','','',''),(4,2,'ENROLMENT',200.00,'','','','','','','','','',''),(5,2,'COE',250.00,'','','','','','','','','','');
/*!40000 ALTER TABLE `cargosescuelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'Melbourne','','','','','','','','','',''),(2,'Brisbane','','','','','','','','','',''),(3,'Perth','','','','','','','','','',''),(4,'Adelaida','','','','','','','','','',''),(5,'Canberra','','','','','','','','','','');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo_curso` varchar(50) NOT NULL,
  `escuela` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'General English','1','1',1,36,220.00,'2016-06-15 19:53:51','','','','','','','','','',''),(2,'Business I','2','2',1,36,3290.00,'2016-06-15 19:56:05','','','','','','','','','',''),(3,'Business II','2','2',1,24,2950.00,'2016-06-15 20:05:46','','','','','','','','','',''),(4,'Business III','2','2',1,24,2950.00,'2016-06-15 20:06:03','','','','','','','','','',''),(5,'Insurance Family','3','',1,0,100.00,'2016-06-21 00:52:02','','','','','','','','','',''),(6,'Insurance Single','3','',1,0,75.00,'2016-06-21 02:08:11','','','','','','','','','',''),(7,'Primer Aplicante','6','',1,0,560.00,'2016-06-21 02:10:42','','','','','','','','','',''),(8,'Segundo Aplicante','6','',1,0,450.00,'2016-06-21 02:11:06','','','','','','','','','',''),(9,'Menor de Edad','6','',1,0,150.00,'2016-06-21 02:11:22','','','','','','','','','',''),(10,'AIRPORT PICK UP','4','',1,0,150.00,'2016-06-23 22:34:07','','','','','','','','','',''),(11,'ACCOMMODATION','4','',1,0,400.00,'2016-06-23 22:34:24','','','','','','','','','','');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detailsinsurance`
--

DROP TABLE IF EXISTS `detailsinsurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detailsinsurance` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_quote` varchar(50) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `seleccion` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `unidad_tiempo` varchar(50) NOT NULL,
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `precio_lista` decimal(10,2) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detailsinsurance`
--

LOCK TABLES `detailsinsurance` WRITE;
/*!40000 ALTER TABLE `detailsinsurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `detailsinsurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detailsofcourse`
--

DROP TABLE IF EXISTS `detailsofcourse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detailsofcourse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_quote` varchar(50) NOT NULL,
  `tipo_curso` int(11) NOT NULL,
  `escuela` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `unidad_tiempo` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detailsofcourse`
--

LOCK TABLES `detailsofcourse` WRITE;
/*!40000 ALTER TABLE `detailsofcourse` DISABLE KEYS */;
/*!40000 ALTER TABLE `detailsofcourse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escuela`
--

DROP TABLE IF EXISTS `escuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escuela` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escuela`
--

LOCK TABLES `escuela` WRITE;
/*!40000 ALTER TABLE `escuela` DISABLE KEYS */;
INSERT INTO `escuela` VALUES (1,'ALS','2','','','','','','','','','',''),(2,'APC','2','','','','','','','','','','');
/*!40000 ALTER TABLE `escuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,'ADMINISTRACION');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headerquote`
--

DROP TABLE IF EXISTS `headerquote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `headerquote` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `people` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `package` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `paymentplan` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observation` text NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headerquote`
--

LOCK TABLES `headerquote` WRITE;
/*!40000 ALTER TABLE `headerquote` DISABLE KEYS */;
INSERT INTO `headerquote` VALUES (1,'','Brisbane',1,0,'6','',0,'2016-06-23 20:42:20','','','','','','','','','','',''),(2,'','Brisbane',0,0,'6','',0,'2016-06-23 20:46:44','','','','','','','','','','',''),(3,'','Brisbane',0,0,'6','',0,'2016-06-23 20:52:23','','','','','','','','','','','');
/*!40000 ALTER TABLE `headerquote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornadas`
--

DROP TABLE IF EXISTS `jornadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornadas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `producto` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornadas`
--

LOCK TABLES `jornadas` WRITE;
/*!40000 ALTER TABLE `jornadas` DISABLE KEYS */;
INSERT INTO `jornadas` VALUES (1,'DAY',1,220.00,'','','','','','','','','',''),(2,'AFTERNOON',1,250.00,'','','','','','','','','',''),(3,'EVENING',1,290.00,'','','','','','','','','',''),(4,'DAY',2,3290.00,'','','','','','','','','',''),(5,'EVENING',2,3290.00,'','','','','','','','','',''),(6,'DAY',3,2950.00,'','','','','','','','','',''),(7,'EVENING',3,2950.00,'','','','','','','','','',''),(8,'DAY',4,2950.00,'','','','','','','','','',''),(9,'EVENING',4,2950.00,'','','','','','','','','','');
/*!40000 ALTER TABLE `jornadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accion` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,0,1,'2016-06-14 21:04:51'),(2,20,1,'2016-06-14 21:04:58'),(3,20,1,'2016-06-14 21:05:00'),(4,26,1,'2016-06-14 21:05:11'),(5,20,1,'2016-06-14 21:05:12'),(6,20,1,'2016-06-14 21:05:14'),(7,33,1,'2016-06-14 21:05:21'),(8,20,1,'2016-06-14 21:05:22'),(9,20,1,'2016-06-14 21:22:03'),(10,20,1,'2016-06-14 21:22:12'),(11,26,1,'2016-06-14 21:22:16'),(12,20,1,'2016-06-14 21:22:17'),(13,20,1,'2016-06-14 21:22:21'),(14,20,1,'2016-06-14 21:22:23'),(15,20,1,'2016-06-14 21:23:20'),(16,17,1,'2016-06-14 21:32:27'),(17,27,1,'2016-06-14 21:32:31'),(18,-1,1,'2016-06-14 21:32:58'),(19,0,1,'2016-06-14 21:33:02'),(20,-1,1,'2016-06-14 21:33:18'),(21,0,1,'2016-06-14 21:36:15'),(22,27,1,'2016-06-14 21:36:19'),(23,17,1,'2016-06-14 21:36:25'),(24,27,1,'2016-06-14 21:50:02'),(25,27,1,'2016-06-14 22:01:26'),(26,27,1,'2016-06-14 22:01:58'),(27,17,1,'2016-06-14 22:02:03'),(28,20,1,'2016-06-14 22:02:07'),(29,20,1,'2016-06-14 22:02:14'),(30,20,1,'2016-06-14 22:02:37'),(31,0,1,'2016-06-15 18:51:55'),(32,20,1,'2016-06-15 19:07:59'),(33,17,1,'2016-06-15 19:15:49'),(34,27,1,'2016-06-15 19:15:56'),(35,20,1,'2016-06-15 19:17:45'),(36,20,1,'2016-06-15 19:30:07'),(37,20,1,'2016-06-15 19:31:20'),(38,20,1,'2016-06-15 19:31:32'),(39,20,1,'2016-06-15 19:31:40'),(40,20,1,'2016-06-15 19:32:06'),(41,20,1,'2016-06-15 19:32:44'),(42,20,1,'2016-06-15 19:32:58'),(43,20,1,'2016-06-15 19:33:06'),(44,17,1,'2016-06-15 19:43:51'),(45,17,1,'2016-06-15 19:45:34'),(46,17,1,'2016-06-15 19:45:53'),(47,17,1,'2016-06-15 19:49:00'),(48,35,1,'2016-06-15 19:49:19'),(49,17,1,'2016-06-15 19:49:20'),(50,17,1,'2016-06-15 19:49:23'),(51,35,1,'2016-06-15 19:49:26'),(52,17,1,'2016-06-15 19:49:28'),(53,35,1,'2016-06-15 19:49:38'),(54,17,1,'2016-06-15 19:49:39'),(55,20,1,'2016-06-15 19:49:48'),(56,20,1,'2016-06-15 20:07:37'),(57,20,1,'2016-06-15 20:08:28'),(58,40,1,'2016-06-15 20:26:24'),(59,40,1,'2016-06-15 20:28:59'),(60,42,1,'2016-06-15 20:29:15'),(61,40,1,'2016-06-15 20:29:16'),(62,42,1,'2016-06-15 20:29:23'),(63,40,1,'2016-06-15 20:29:24'),(64,42,1,'2016-06-15 20:29:30'),(65,40,1,'2016-06-15 20:29:32'),(66,42,1,'2016-06-15 20:29:39'),(67,40,1,'2016-06-15 20:29:41'),(68,0,1,'2016-06-17 18:19:14'),(69,20,1,'2016-06-17 18:22:13'),(70,40,1,'2016-06-17 18:22:17'),(71,40,1,'2016-06-17 18:22:28'),(72,40,1,'2016-06-17 18:22:34'),(73,40,1,'2016-06-17 18:22:36'),(74,40,1,'2016-06-17 18:22:38'),(75,40,1,'2016-06-17 18:22:40'),(76,0,1,'2016-06-18 18:57:19'),(77,27,1,'2016-06-18 22:09:03'),(78,0,1,'2016-06-20 18:05:26'),(79,20,1,'2016-06-20 18:06:28'),(80,27,1,'2016-06-20 18:06:42'),(81,17,1,'2016-06-20 18:06:46'),(82,20,1,'2016-06-20 19:47:56'),(83,40,1,'2016-06-20 19:53:58'),(84,20,1,'2016-06-21 00:06:56'),(85,40,1,'2016-06-21 00:07:08'),(86,40,1,'2016-06-21 00:08:55'),(87,40,1,'2016-06-21 00:09:31'),(88,40,1,'2016-06-21 00:10:09'),(89,40,1,'2016-06-21 00:10:18'),(90,40,1,'2016-06-21 00:11:20'),(91,40,1,'2016-06-21 00:28:45'),(92,40,1,'2016-06-21 00:28:54'),(93,40,1,'2016-06-21 00:30:00'),(94,40,1,'2016-06-21 00:32:35'),(95,40,1,'2016-06-21 00:33:04'),(96,40,1,'2016-06-21 00:33:25'),(97,42,1,'2016-06-21 00:33:43'),(98,40,1,'2016-06-21 00:33:44'),(99,42,1,'2016-06-21 00:33:57'),(100,40,1,'2016-06-21 00:33:58'),(101,41,1,'2016-06-21 00:34:02'),(102,40,1,'2016-06-21 00:34:03'),(103,40,1,'2016-06-21 00:34:06'),(104,42,1,'2016-06-21 00:34:18'),(105,40,1,'2016-06-21 00:34:19'),(106,40,1,'2016-06-21 00:34:23'),(107,42,1,'2016-06-21 00:34:32'),(108,40,1,'2016-06-21 00:34:33'),(109,40,1,'2016-06-21 00:34:36'),(110,42,1,'2016-06-21 00:34:44'),(111,40,1,'2016-06-21 00:34:45'),(112,20,1,'2016-06-21 00:48:27'),(113,20,1,'2016-06-21 00:52:07'),(114,20,1,'2016-06-21 00:53:03'),(115,20,1,'2016-06-21 00:53:33'),(116,20,1,'2016-06-21 00:53:37'),(117,20,1,'2016-06-21 00:53:55'),(118,26,1,'2016-06-21 00:54:00'),(119,20,1,'2016-06-21 00:54:01'),(120,20,1,'2016-06-21 00:54:13'),(121,26,1,'2016-06-21 00:54:18'),(122,20,1,'2016-06-21 00:54:19'),(123,20,1,'2016-06-21 00:54:22'),(124,26,1,'2016-06-21 00:54:29'),(125,20,1,'2016-06-21 00:54:30'),(126,20,1,'2016-06-21 00:54:33'),(127,26,1,'2016-06-21 00:54:39'),(128,20,1,'2016-06-21 00:54:40'),(129,20,1,'2016-06-21 00:54:43'),(130,26,1,'2016-06-21 00:54:50'),(131,20,1,'2016-06-21 00:54:51'),(132,20,1,'2016-06-21 00:54:54'),(133,26,1,'2016-06-21 00:55:02'),(134,20,1,'2016-06-21 00:55:03'),(135,20,1,'2016-06-21 00:58:37'),(136,20,1,'2016-06-21 00:59:04'),(137,20,1,'2016-06-21 00:59:07'),(138,40,1,'2016-06-21 00:59:15'),(139,0,1,'2016-06-21 19:00:13'),(140,40,1,'2016-06-21 20:42:51'),(141,0,1,'2016-06-22 02:13:13'),(142,0,1,'2016-06-22 18:02:15'),(143,20,1,'2016-06-22 20:11:32'),(144,40,1,'2016-06-22 20:11:45'),(145,40,1,'2016-06-22 20:27:19'),(146,40,1,'2016-06-22 20:29:23'),(147,40,1,'2016-06-22 20:31:09'),(148,40,1,'2016-06-22 20:31:47'),(149,40,1,'2016-06-22 20:32:53'),(150,40,1,'2016-06-22 20:33:04'),(151,40,1,'2016-06-22 20:33:38'),(152,40,1,'2016-06-22 20:33:59'),(153,40,1,'2016-06-22 20:34:04'),(154,17,1,'2016-06-22 20:49:08'),(155,17,1,'2016-06-22 20:54:38'),(156,17,1,'2016-06-22 20:54:49'),(157,0,1,'2016-06-23 19:38:33'),(158,0,1,'2016-06-24 22:29:57'),(159,0,1,'2016-06-25 18:41:15'),(160,0,1,'2016-06-27 18:05:33'),(161,0,1,'2016-06-30 20:10:58'),(162,0,1,'2016-06-30 23:15:06'),(163,0,1,'2016-07-01 04:42:00'),(164,20,1,'2016-07-01 05:15:14'),(165,40,1,'2016-07-01 05:15:41'),(166,20,1,'2016-07-01 05:16:14'),(167,40,1,'2016-07-01 05:16:19'),(168,20,1,'2016-07-01 05:16:21'),(169,40,1,'2016-07-01 05:16:37'),(170,0,1,'2016-07-01 19:16:10'),(171,0,1,'2016-07-04 20:12:42'),(172,0,1,'2016-07-07 08:31:07'),(173,0,1,'2016-08-17 01:17:51'),(174,0,1,'2016-08-18 00:51:08'),(175,0,1,'2016-08-18 03:36:24'),(176,0,1,'2016-08-18 23:33:26'),(177,0,1,'2016-08-19 00:38:08'),(178,0,1,'2016-08-19 18:11:43'),(179,0,1,'2016-08-22 19:25:18'),(180,0,1,'2016-08-25 02:09:37'),(181,0,1,'2017-01-16 19:52:57'),(182,0,1,'2017-06-02 03:02:17'),(183,0,1,'2017-06-02 03:51:36'),(184,0,1,'2017-06-08 00:32:19');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` bigint(20) NOT NULL,
  `version` varchar(20) NOT NULL,
  `desarrollador` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES ('a','a',0,1465758734,'1','nojuancho@hotmail.com'),('admin','admin',1,1459344759,'1','nojuancho@hotmail.com'),('agentes','agentes',1,1471536917,'1','nojuancho@hotmail.com'),('cargosporescuelas','cargosporescuelas',0,1466455289,'1','nojuancho@hotmail.com'),('ciudades','ciudades',1,1465487844,'1','nojuancho@hotmail.com'),('cursos','cursos',0,1465488482,'1','nojuancho@hotmail.com'),('empresa','empresa',0,1459344762,'1','nojuancho@hotmail.com'),('escuelas','escuelas',0,1465488481,'1','nojuancho@hotmail.com'),('jornada','jornada',0,1467055381,'1','nojuancho@hotmail.com'),('maestros','maestros',1,1464791267,'1','nojuancho@hotmail.com'),('monitoreocampana','monitoreocampana',1,1471623883,'1','nojuancho@hotmail.com'),('nacionalidad','nacionalidad',0,1466179061,'1','nojuancho@hotmail.com'),('paquetes','paquetes',0,1465487906,'1','nojuancho@hotmail.com'),('paquetescontenido','paquetescontenido',0,1466003864,'1','nojuancho@hotmail.com'),('planpago','planpago',0,1466462155,'1','nojuancho@hotmail.com'),('plugins','plugins',1,1459344760,'1','nojuancho@hotmail.com'),('quotegenerator','quotegenerator',0,1465396548,'1','nojuancho@hotmail.com'),('recesos','recesos',1,1471473195,'1','nojuancho@hotmail.com'),('reglasdedescuentos','reglasdedescuentos',0,1466178439,'1','nojuancho@hotmail.com'),('regresarllamadas','regresarllamadas',1,1467318292,'1','nojuancho@hotmail.com'),('rescate','rescate',1,1496377119,'1','nojuancho@hotmail.com'),('rol','rol',1,1465764506,'1','nojuancho@hotmail.com'),('TFA','TFA',0,1465396136,'1','nojuancho@hotmail.com'),('tiposdecursos','tiposdecursos',0,1465488483,'1','nojuancho@hotmail.com'),('usuarios','usuarios',1,1459344761,'1','nojuancho@hotmail.com');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacionalidades`
--

DROP TABLE IF EXISTS `nacionalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nacionalidades` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
INSERT INTO `nacionalidades` VALUES (1,'American','',''),(2,'Argentine','',''),(3,'Bolivian','',''),(4,'Brazilian','',''),(5,'Canadian','',''),(6,'Chilean','',''),(7,'Chinese','',''),(8,'Colombian','',''),(9,'Dominican','',''),(10,'Ecuadorian','',''),(11,'French','',''),(12,'Italian','',''),(13,'Japanese','',''),(14,'Lithuanian','',''),(15,'Mexican','',''),(16,'Paraguayan','',''),(17,'Peruvian','',''),(18,'Portuguese','',''),(19,'Romanian','',''),(20,'Salvadorean','',''),(21,'South Korean','',''),(22,'Spanish','',''),(23,'Taiwanese','',''),(24,'Thai','',''),(25,'Uruguayan','',''),(26,'Venezuelan','',''),(27,'Vietnamese','','');
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opciones`
--

DROP TABLE IF EXISTS `opciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opciones` (
  `opcion` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `valor` varchar(100) NOT NULL,
  PRIMARY KEY (`opcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opciones`
--

LOCK TABLES `opciones` WRITE;
/*!40000 ALTER TABLE `opciones` DISABLE KEYS */;
INSERT INTO `opciones` VALUES (1,'Campaign','1');
/*!40000 ALTER TABLE `opciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes`
--

LOCK TABLES `paquetes` WRITE;
/*!40000 ALTER TABLE `paquetes` DISABLE KEYS */;
INSERT INTO `paquetes` VALUES (1,'A1','2','2016-06-14 18:34:04',1,'','1900','','','','','','','','',''),(2,'A2','2','2016-06-14 18:34:24',1,'','2100','','','','','','','','',''),(3,'A3','2','2016-06-14 18:34:36',1,'','2500','','','','','','','','',''),(4,'B1','2','2016-06-14 18:34:51',1,'','1850','','','','','','','','',''),(5,'B2','2','2016-06-14 18:35:01',1,'','1950','','','','','','','','',''),(6,'B3','2','2016-06-14 18:35:10',1,'','2000','','','','','','','','',''),(7,'C1','2','2016-06-14 19:00:05',1,'','','','','','','','','','',''),(8,'C2','2','2016-06-14 19:30:12',1,'','','','','','','','','','',''),(9,'C3','2','2016-06-14 19:30:20',1,'','','','','','','','','','',''),(10,'D1','2','2016-06-14 19:30:33',1,'','','','','','','','','','',''),(11,'D2','2','2016-06-14 19:30:42',1,'','','','','','','','','','',''),(12,'E1','2','2016-06-14 19:30:53',1,'','','','','','','','','','',''),(13,'E2','2','2016-06-14 19:31:05',1,'','','','','','','','','','',''),(14,'F1','2','2016-06-14 19:31:22',1,'','','','','','','','','','',''),(15,'F2','2','2016-06-14 19:31:41',1,'','','','','','','','','','',''),(16,'F3','2','2016-06-14 19:31:53',1,'','','','','','','','','','','');
/*!40000 ALTER TABLE `paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes_contenido`
--

DROP TABLE IF EXISTS `paquetes_contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetes_contenido` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_paquete` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes_contenido`
--

LOCK TABLES `paquetes_contenido` WRITE;
/*!40000 ALTER TABLE `paquetes_contenido` DISABLE KEYS */;
INSERT INTO `paquetes_contenido` VALUES (1,6,1,1,'2016-06-15 20:29:15','2','','','','','','','','',''),(2,6,2,1,'2016-06-15 20:29:23','2','','','','','','','','',''),(3,6,3,1,'2016-06-15 20:29:30','2','','','','','','','','',''),(4,6,4,1,'2016-06-15 20:29:39','2','','','','','','','','','');
/*!40000 ALTER TABLE `paquetes_contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentplanescuelas`
--

DROP TABLE IF EXISTS `paymentplanescuelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paymentplanescuelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_escuela` int(11) NOT NULL,
  `cuotas` int(11) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentplanescuelas`
--

LOCK TABLES `paymentplanescuelas` WRITE;
/*!40000 ALTER TABLE `paymentplanescuelas` DISABLE KEYS */;
INSERT INTO `paymentplanescuelas` VALUES (1,1,4,'','','','','','','','','',''),(2,2,2,'','','','','','','','','','');
/*!40000 ALTER TABLE `paymentplanescuelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_creacion` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'ADMINISTRADOR','Administrador del sistema',1459345066);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil_contenido`
--

DROP TABLE IF EXISTS `perfil_contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil_contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(20) NOT NULL,
  `controlador` varchar(20) NOT NULL,
  `accion` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `perfil` int(11) NOT NULL,
  `fecha_creacion` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=425 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil_contenido`
--

LOCK TABLES `perfil_contenido` WRITE;
/*!40000 ALTER TABLE `perfil_contenido` DISABLE KEYS */;
INSERT INTO `perfil_contenido` VALUES (343,'a','a','a',1,1,1467058978),(344,'a','a','index',1,1,1467058978),(345,'admin','admin','admin',1,1,1467058978),(346,'cargosporescuelas','cargosporescuelas','cargosporescuelas',1,1,1467058978),(347,'cargosporescuelas','cargosporescuelas','index',1,1,1467058978),(348,'cargosporescuelas','cargosporescuelas','quit',1,1,1467058978),(349,'cargosporescuelas','cargosporescuelas','set',1,1,1467058978),(350,'ciudades','ciudades','ciudades',1,1,1467058978),(351,'ciudades','ciudades','index',1,1,1467058978),(352,'ciudades','ciudades','setciudad',1,1,1467058978),(353,'ciudades','ciudades','delciudad',1,1,1467058978),(354,'ciudades','ciudades','quit',1,1,1467058978),(355,'ciudades','ciudades','set',1,1,1467058978),(356,'cursos','cursos','cursos',1,1,1467058978),(357,'cursos','cursos','index',1,1,1467058978),(358,'cursos','cursos','quit',1,1,1467058978),(359,'cursos','cursos','set',1,1,1467058978),(360,'empresa','empresa','empresa',1,1,1467058978),(361,'empresa','empresa','index',1,1,1467058978),(362,'escuelas','escuelas','escuelas',1,1,1467058978),(363,'escuelas','escuelas','index',1,1,1467058978),(364,'escuelas','escuelas','quit',1,1,1467058978),(365,'escuelas','escuelas','set',1,1,1467058978),(366,'jornada','jornada','jornada',1,1,1467058978),(367,'jornada','jornada','index',1,1,1467058978),(368,'jornada','jornada','quit',1,1,1467058978),(369,'jornada','jornada','set',1,1,1467058978),(370,'maestros','maestros','maestros',1,1,1467058978),(371,'nacionalidad','nacionalidad','nacionalidad',1,1,1467058978),(372,'nacionalidad','nacionalidad','index',1,1,1467058978),(373,'nacionalidad','nacionalidad','quit',1,1,1467058978),(374,'nacionalidad','nacionalidad','set',1,1,1467058978),(375,'paquetes','paquetes','paquetes',1,1,1467058978),(376,'paquetes','paquetes','index',1,1,1467058978),(377,'paquetes','paquetes','delete',1,1,1467058978),(378,'paquetes','paquetes','set',1,1,1467058978),(379,'paquetes','paquetes','quit',1,1,1467058978),(380,'paquetescontenido','paquetescontenido','paquetescontenido',1,1,1467058978),(381,'paquetescontenido','paquetescontenido','index',1,1,1467058978),(382,'paquetescontenido','paquetescontenido','quit',1,1,1467058978),(383,'paquetescontenido','paquetescontenido','set',1,1,1467058978),(384,'paquetescontenido','paquetescontenido','getpaquetes',1,1,1467058979),(385,'planpago','planpago','planpago',1,1,1467058979),(386,'planpago','planpago','index',1,1,1467058979),(387,'planpago','planpago','quit',1,1,1467058979),(388,'planpago','planpago','set',1,1,1467058979),(389,'plugins','plugins','plugins',1,1,1467058979),(390,'plugins','plugins','index',1,1,1467058979),(391,'plugins','plugins','registrarplugin',1,1,1467058979),(392,'plugins','plugins','unregistrarplugin',1,1,1467058979),(393,'quotegenerator','quotegenerator','quotegenerator',1,1,1467058979),(394,'quotegenerator','quotegenerator','index',1,1,1467058979),(395,'quotegenerator','quotegenerator','getciudades',1,1,1467058979),(396,'quotegenerator','quotegenerator','getpaquetes',1,1,1467058979),(397,'quotegenerator','quotegenerator','getdetailsofcourse',1,1,1467058979),(398,'quotegenerator','quotegenerator','getdetailcharges',1,1,1467058979),(399,'quotegenerator','quotegenerator','setheaderquote',1,1,1467058979),(400,'quotegenerator','quotegenerator','getadditem',1,1,1467058979),(401,'reglasdedescuentos','reglasdedescuentos','reglasdedescuentos',1,1,1467058979),(402,'reglasdedescuentos','reglasdedescuentos','index',1,1,1467058979),(403,'reglasdedescuentos','reglasdedescuentos','quit',1,1,1467058979),(404,'reglasdedescuentos','reglasdedescuentos','set',1,1,1467058979),(405,'reglasdedescuentos','reglasdedescuentos','getcursos',1,1,1467058979),(406,'rol','rol','rol',1,1,1467058979),(407,'rol','rol','index',1,1,1467058979),(408,'rol','rol','delete',1,1,1467058979),(409,'rol','rol','set',1,1,1467058979),(410,'rol','rol','quit',1,1,1467058979),(411,'TFA','TFA','TFA',1,1,1467058979),(412,'tiposdecursos','tiposdecursos','tiposdecursos',1,1,1467058979),(413,'tiposdecursos','tiposdecursos','index',1,1,1467058979),(414,'tiposdecursos','tiposdecursos','quit',1,1,1467058979),(415,'tiposdecursos','tiposdecursos','set',1,1,1467058979),(416,'usuarios','usuarios','usuarios',1,1,1467058979),(417,'usuarios','usuarios','index',1,1,1467058979),(418,'usuarios','usuarios','view',1,1,1467058979),(419,'usuarios','usuarios','create',1,1,1467058979),(420,'usuarios','usuarios','borrar',1,1,1467058979),(421,'usuarios','usuarios','perfil',1,1,1467058979),(422,'usuarios','usuarios','verperfil',1,1,1467058979),(423,'usuarios','usuarios','borrarperfil',1,1,1467058979),(424,'usuarios','usuarios','grupo',1,1,1467058979);
/*!40000 ALTER TABLE `perfil_contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote_cab`
--

DROP TABLE IF EXISTS `quote_cab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote_cab` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_vigencia` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `observacion` text NOT NULL,
  `ciudad` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `nacionality` int(11) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote_cab`
--

LOCK TABLES `quote_cab` WRITE;
/*!40000 ALTER TABLE `quote_cab` DISABLE KEYS */;
/*!40000 ALTER TABLE `quote_cab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reglas_descuentos`
--

DROP TABLE IF EXISTS `reglas_descuentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reglas_descuentos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `package` int(11) NOT NULL,
  `nationality` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_finish` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rule` varchar(50) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reglas_descuentos`
--

LOCK TABLES `reglas_descuentos` WRITE;
/*!40000 ALTER TABLE `reglas_descuentos` DISABLE KEYS */;
INSERT INTO `reglas_descuentos` VALUES (1,'a','a','2016-06-20 18:54:29',2,0,0,6,0,1,'2016-06-01 10:00:00','2016-06-30 10:00:00','Rule1','','1','','','','','','','','');
/*!40000 ALTER TABLE `reglas_descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regresar_llamadas`
--

DROP TABLE IF EXISTS `regresar_llamadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regresar_llamadas` (
  `id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regresar_llamadas`
--

LOCK TABLES `regresar_llamadas` WRITE;
/*!40000 ALTER TABLE `regresar_llamadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `regresar_llamadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `padre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (3,'Administrador','Rol Administrador',0);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sofint_config`
--

DROP TABLE IF EXISTS `sofint_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sofint_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nit` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `movil` bigint(20) NOT NULL,
  `web` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `gcalid` varchar(100) NOT NULL,
  `gmailuser` varchar(100) NOT NULL,
  `gmailclave` varchar(100) NOT NULL,
  `asterurl` varchar(100) NOT NULL,
  `asteruser` varchar(100) NOT NULL,
  `asterclave` varchar(100) NOT NULL,
  `dat1` int(11) NOT NULL,
  `dat2` varchar(100) NOT NULL,
  `dat3` varchar(100) NOT NULL,
  `dat4` varchar(100) NOT NULL,
  `dat5` varchar(100) NOT NULL,
  `dat6` varchar(100) NOT NULL,
  `dat7` varchar(100) NOT NULL,
  `dat8` varchar(100) NOT NULL,
  `dat9` varchar(100) NOT NULL,
  `dat10` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sofint_config`
--

LOCK TABLES `sofint_config` WRITE;
/*!40000 ALTER TABLE `sofint_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `sofint_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sofint_users`
--

DROP TABLE IF EXISTS `sofint_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sofint_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `movil` bigint(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `perfil` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` int(11) NOT NULL,
  `dat1` int(11) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(100) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sofint_users`
--

LOCK TABLES `sofint_users` WRITE;
/*!40000 ALTER TABLE `sofint_users` DISABLE KEYS */;
INSERT INTO `sofint_users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','Juan Manuel','Ruiz Lozano',0,0,'juan.ruiz@grupoingsolutions.com','','',1,-1,1390152537,1,'1','+573104682859','','');
/*!40000 ALTER TABLE `sofint_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_curso`
--

DROP TABLE IF EXISTS `tipo_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_curso` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dat1` varchar(50) NOT NULL,
  `dat2` varchar(50) NOT NULL,
  `dat3` varchar(50) NOT NULL,
  `dat4` varchar(50) NOT NULL,
  `dat5` varchar(50) NOT NULL,
  `dat6` varchar(50) NOT NULL,
  `dat7` varchar(50) NOT NULL,
  `dat8` varchar(50) NOT NULL,
  `dat9` varchar(50) NOT NULL,
  `dat10` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_curso`
--

LOCK TABLES `tipo_curso` WRITE;
/*!40000 ALTER TABLE `tipo_curso` DISABLE KEYS */;
INSERT INTO `tipo_curso` VALUES (1,'ELICOS','','','','','','','','','',''),(2,'VET','','','','','','','','','',''),(3,'INSURANCE','','','','','','','','','',''),(4,'SERVICES','','','','','','','','','',''),(5,'OTHERS','','','','','','','','','',''),(6,'VISA','','','','','','','','','','');
/*!40000 ALTER TABLE `tipo_curso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-25 15:56:19
