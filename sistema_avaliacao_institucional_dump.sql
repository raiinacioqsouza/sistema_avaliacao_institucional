-- MySQL dump 10.13  Distrib 8.0.39, for Win64 (x86_64)
--
-- Host: localhost    Database: sistema_avaliacao_institucional
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `avaliacao_professor_disciplina`
--

DROP TABLE IF EXISTS `avaliacao_professor_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avaliacao_professor_disciplina` (
  `id_avaliacao` bigint unsigned NOT NULL,
  `id_disciplina_professor` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`,`id_disciplina_professor`),
  KEY `avaliacao_professor_disciplina_id_disciplina_professor_foreign` (`id_disciplina_professor`),
  CONSTRAINT `avaliacao_professor_disciplina_id_avaliacao_foreign` FOREIGN KEY (`id_avaliacao`) REFERENCES `avaliacoes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `avaliacao_professor_disciplina_id_disciplina_professor_foreign` FOREIGN KEY (`id_disciplina_professor`) REFERENCES `professores_disciplinas` (`id_disciplina_professor`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao_professor_disciplina`
--

LOCK TABLES `avaliacao_professor_disciplina` WRITE;
/*!40000 ALTER TABLE `avaliacao_professor_disciplina` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao_professor_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avaliacoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `tipo` enum('professor','infraestrutura') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonimato` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` VALUES (1,'Aut laudantium nihil quo aut sint facere tempora.','Iusto velit dolore illo aliquam. Cupiditate impedit sit ut magnam doloremque aut dignissimos. Voluptatem beatae voluptates et temporibus sed saepe.','2024-12-21','2024-12-29','infraestrutura',0,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(2,'Voluptates sunt dolorem eveniet explicabo harum nisi ducimus.','Aut sequi architecto quae. Et aspernatur non sit autem. Est quos maxime tempore nisi et voluptatem et. Nobis fuga omnis aspernatur at.','2024-12-22','2024-12-28','infraestrutura',0,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(3,'Provident magni doloribus doloremque consequatur vitae.','Et voluptatem voluptatem tempora animi omnis eaque. A quasi error vitae corrupti libero eum et. Perferendis molestias in nemo non sed. Labore est quo at officiis qui ex.','2024-12-18','2024-12-31','professor',1,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(4,'Velit beatae officia et nihil nihil.','Voluptatum sapiente tempore eum est et facere. Tenetur modi eum velit voluptatem dolore placeat. Perspiciatis odit nostrum aliquid.','2024-12-20','2024-12-30','infraestrutura',1,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(5,'Ab qui ab ipsum tempore facere provident.','Quia est laudantium soluta sequi et provident. Ut incidunt ad consequatur sunt quia similique unde. Maxime inventore quo architecto accusantium at voluptatum.','2024-12-19','2024-12-31','infraestrutura',0,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(6,'Aut ipsa quam et iure.','Quos iure dolores voluptatibus facere. Deserunt amet temporibus aperiam molestiae. Ullam nihil consequuntur vitae tempora sit aperiam vero.','2024-12-25','2024-12-27','professor',1,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(7,'Harum dolores ea at placeat corporis qui.','Est in veritatis ut dolore. Quo sint fuga quod corporis quos accusamus. Nihil ratione eaque molestiae omnis optio.','2024-12-22','2024-12-26','infraestrutura',0,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(8,'Dicta blanditiis voluptas rerum fugiat ducimus sint unde.','Ad qui maiores ut. Eum et amet adipisci sit consequuntur. Qui maxime rerum quis non est repellat ipsa. Sint aut dolores sed mollitia ut sunt expedita.','2024-12-19','2024-12-30','infraestrutura',1,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(9,'Et distinctio itaque sunt non.','Ut commodi voluptas animi. Explicabo voluptatem nihil non vero. Repudiandae cum accusamus assumenda voluptatum fugiat in quod.','2024-12-18','2024-12-25','professor',1,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(10,'Soluta doloremque hic aliquam atque.','Veniam amet est et necessitatibus officiis cum asperiores. Laboriosam at corrupti est nihil sunt voluptatem quos. Eum ut nesciunt quia sint iusto. Delectus nesciunt voluptas velit corporis et itaque.','2024-12-19','2024-12-25','infraestrutura',0,'2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id_curso` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'repudiandae','Esse exercitationem quas voluptas est. Quo delectus tempore recusandae qui. Consequatur quidem voluptas quasi cupiditate autem autem voluptates. Beatae soluta non ipsum amet.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(2,'quo','Eos eveniet et quia atque. Eos minima dolorum iusto itaque veniam. Id dolorem nam possimus animi architecto ea. Et et quo quidem voluptas saepe eum sit.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(3,'qui','Quis ut est exercitationem soluta mollitia nesciunt. Ab nesciunt dolorem ducimus id consequatur perferendis aut. Quas id qui modi optio repellat et dignissimos.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(4,'enim','Incidunt numquam temporibus quasi. Aliquid voluptatem aut rem itaque soluta ipsam quisquam.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(5,'enim','Qui deleniti ipsum nesciunt magni dolorem est. Omnis vel ut sit est impedit. Quam ex pariatur eos repellendus quibusdam enim.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(6,'dolores','Mollitia eum voluptate et voluptatem minus hic. Qui quod eos qui et ducimus. Ut consequatur eos iure totam distinctio magnam et aut.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(7,'et','Qui dolore et consequuntur quae et. Dolor eius at sit rem autem dolores ducimus. Repellendus omnis non est quo.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(8,'reprehenderit','Est tempore quod qui corporis est. Est laborum sint voluptates rerum quia. Sit a repellendus repellat.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(9,'recusandae','Eos voluptatem illum ipsum rerum. Excepturi sint corporis doloremque ut. Ab nostrum doloremque est rerum.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(10,'corporis','Id quasi omnis accusantium error alias asperiores. Et possimus quidem ex et sit eum voluptatem. Rerum aut non sint. Consectetur iure quo molestiae doloremque.','2024-12-18 04:07:00','2024-12-18 04:07:00'),(11,'occaecati','Quas iusto et odio mollitia ea. Veritatis neque est quaerat alias exercitationem illo soluta ut. Non consequuntur et sequi vero cum aut fuga. Quis aspernatur consequuntur quia inventore beatae.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(12,'ea','Ratione delectus et qui quia. Ut voluptatum non ipsa cum provident in amet id. Quasi possimus deleniti nesciunt quaerat. Est sequi quisquam et officiis consequuntur.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(13,'aut','Repellendus eos tempora pariatur vitae esse aspernatur. Modi voluptatum qui omnis sunt ut deleniti qui quo. Soluta repellat illum vero inventore est ea veniam.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(14,'ipsum','Ut ut saepe ab optio atque. Vel tempore temporibus minus vitae dolor illum fugit voluptatum. Cupiditate et iusto fugit ducimus odio exercitationem adipisci ut.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(15,'alias','Et occaecati facere sed iure aut non maxime voluptas. Soluta corporis ducimus sed ex. Ratione excepturi odio enim est vero. Illum voluptates possimus corrupti.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(16,'mollitia','Laudantium tempore repellat exercitationem enim ab eos nostrum commodi. Labore necessitatibus omnis nam facere. Dolores ipsum ullam voluptates excepturi.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(17,'non','Ea deleniti mollitia harum possimus. Inventore eligendi ratione eveniet consequatur officiis. Voluptatem illum ullam libero cumque.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(18,'explicabo','Qui et architecto voluptas. Voluptate et consequatur esse sit molestiae. Exercitationem unde ipsa eum velit ipsa fugit rerum aperiam.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(19,'laboriosam','Laboriosam consequatur autem animi non quis nobis est maxime. Dolor eius molestiae inventore ipsam omnis totam sed quo. Tempora modi incidunt voluptas voluptatem aspernatur ea. Aut atque accusantium repudiandae nemo non ipsa.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(20,'assumenda','Sed magni illum et. Aut nam eos sunt nisi qui porro magni. Consectetur nihil perspiciatis aut commodi alias voluptatem quibusdam rerum. Nemo eum qui facere maiores alias qui.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(21,'explicabo','Sit ea dolor quaerat delectus rerum amet qui. Voluptatem eveniet vel sit impedit quis saepe. Soluta illo eaque quam sed impedit consectetur ipsum. Adipisci quod qui porro numquam dolores eaque assumenda.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(22,'molestiae','Tenetur magni quo exercitationem voluptatem debitis qui enim. Voluptates ea doloribus fugiat. Aut autem autem eos ut nisi. Architecto a sapiente voluptatem vero voluptatem enim.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(23,'vel','Repellat ab repellat possimus tempore necessitatibus recusandae. Quaerat laborum harum architecto eum est. Illum eum repellendus cumque possimus voluptatem. Est aspernatur esse doloribus dolor labore vel.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(24,'veritatis','Nihil deleniti assumenda magnam totam. Quidem rerum omnis tenetur sed animi harum.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(25,'sunt','Qui et eveniet cumque in doloremque. Quam quidem doloremque nulla voluptas modi ad omnis. Quasi dolores non dicta possimus qui.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(26,'omnis','Ducimus esse quidem eum. Ex ut accusamus cumque. Magnam aut deserunt quis. Unde praesentium sint qui vel aperiam.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(27,'accusantium','Quia quia ut quo eveniet. Ut impedit hic aut illo veniam. Aut magni libero ea quidem odit et esse. Exercitationem in ducimus dolorum et omnis autem id aliquam.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(28,'architecto','Cupiditate rem magni quidem neque. Natus voluptatem ducimus temporibus et et reiciendis. Architecto cupiditate ut quis qui quo.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(29,'rerum','Corrupti voluptatibus dolorem in quas veritatis qui. Doloremque nesciunt illo distinctio saepe eos quis. Praesentium ut id laborum assumenda reiciendis consequatur.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(30,'vitae','Qui est et laboriosam et molestiae. Consequatur qui facere aliquam corrupti quas debitis corporis officia. Laudantium culpa repellendus inventore voluptatem illo. Quaerat est perferendis nihil est dolore modi.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(31,'distinctio','Sunt ut aspernatur non similique. Aut sed eligendi et illo aut repellendus autem error. Omnis possimus inventore sit unde libero eligendi fugit. Quia voluptatibus incidunt corporis est ea quaerat dolorem nihil.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(32,'magnam','Et corporis perspiciatis excepturi ut voluptate autem. Non expedita sit nihil laborum. Quidem velit rem quis repellat nostrum rem. Nam asperiores et ut.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(33,'molestiae','Molestias neque nostrum quia aliquid nemo voluptate. Veniam nihil voluptas asperiores quisquam non. Exercitationem impedit ea perspiciatis dicta. Tenetur ducimus ut repellat adipisci ducimus et.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(34,'sit','Illo consequuntur quasi ad et. Nulla perferendis corporis maiores totam dolorem recusandae quidem aut. Assumenda et provident corporis ab quod. Tenetur doloribus id provident quisquam doloribus sed porro ea. Vitae voluptate adipisci eum et ut exercitationem unde a.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(35,'eaque','Quia iure sequi ipsum. Ducimus voluptas impedit quis vel. Voluptas nihil aspernatur dolores illum eum aliquid. Reprehenderit magni dolore deleniti atque culpa consequuntur.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(36,'id','Similique laborum quo pariatur blanditiis libero ut vel. Consectetur culpa et laborum laboriosam sit eos aliquam. Et aspernatur et omnis aut consequatur fugit delectus illo.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(37,'sit','Vero sapiente excepturi consectetur. Iusto expedita quas et. Aut nam enim qui veritatis dignissimos. Consequuntur aut sed quos natus incidunt recusandae.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(38,'modi','Sed nostrum nam facere accusantium iste nihil. Facilis rerum dignissimos cumque est quae dolor enim. Perspiciatis eum modi magnam perferendis.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(39,'quia','Error doloremque est cumque minima placeat officiis. A consequatur vel placeat exercitationem vel aut id sunt. Aspernatur inventore repellat ipsum sit tempore repellendus error quaerat. Repellat aut assumenda sunt sit voluptates.','2024-12-18 04:07:19','2024-12-18 04:07:19'),(40,'quisquam','Dignissimos quam maiores veniam voluptatem. Voluptatem ut dolores totam aut quis. Inventore et omnis voluptas quia doloremque consequatur nisi. Laboriosam ex rem minus accusamus repudiandae voluptas.','2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disciplinas` (
  `id_disciplina` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_curso` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `disciplinas_id_curso_foreign` (`id_curso`),
  CONSTRAINT `disciplinas_id_curso_foreign` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplinas`
--

LOCK TABLES `disciplinas` WRITE;
/*!40000 ALTER TABLE `disciplinas` DISABLE KEYS */;
INSERT INTO `disciplinas` VALUES (1,'reprehenderit',11,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(2,'voluptate',12,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(3,'id',13,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(4,'aliquid',14,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(5,'ad',15,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(6,'tempora',16,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(7,'et',17,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(8,'iusto',18,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(9,'laborum',19,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(10,'aut',20,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(11,'officia',21,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(12,'eligendi',22,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(13,'atque',23,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(14,'nostrum',24,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(15,'voluptas',25,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(16,'exercitationem',26,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(17,'nobis',27,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(18,'blanditiis',28,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(19,'harum',29,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(20,'eligendi',30,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(21,'quae',31,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(22,'officia',32,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(23,'est',33,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(24,'voluptatem',34,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(25,'rerum',35,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(26,'quia',36,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(27,'quaerat',37,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(28,'consequuntur',38,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(29,'pariatur',39,'2024-12-18 04:07:19','2024-12-18 04:07:19'),(30,'nihil',40,'2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (12,'2024_12_05_195947_create_cursos_table',1),(13,'2024_12_05_200016_create_usuarios_table',1),(14,'2024_12_05_200150_create_professores_table',1),(15,'2024_12_05_200223_create_avaliacoes_table',1),(16,'2024_12_05_200515_create_perguntas_table',1),(17,'2024_12_05_200552_create_disciplinas_table',1),(18,'2024_12_05_200814_create_professores_disciplinas_table',1),(19,'2024_12_05_200919_create_avaliacao_professor_disciplina_table',1),(20,'2024_12_06_182807_create_respostas_table',1),(21,'2024_12_11_193548_create_personal_access_tokens_table',1),(22,'2024_12_18_002001_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntas` (
  `id_pergunta` bigint unsigned NOT NULL AUTO_INCREMENT,
  `avaliacao_id` bigint unsigned NOT NULL,
  `texto_pergunta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_resposta` enum('multipla_escolha','texto','numerica') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pergunta`),
  KEY `perguntas_avaliacao_id_foreign` (`avaliacao_id`),
  CONSTRAINT `perguntas_avaliacao_id_foreign` FOREIGN KEY (`avaliacao_id`) REFERENCES `avaliacoes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas`
--

LOCK TABLES `perguntas` WRITE;
/*!40000 ALTER TABLE `perguntas` DISABLE KEYS */;
INSERT INTO `perguntas` VALUES (1,1,'Sunt similique occaecati vero minima voluptas vero voluptatibus sit.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19'),(2,2,'Aspernatur quia dolor fuga voluptatem magni.','texto','2024-12-18 04:07:19','2024-12-18 04:07:19'),(3,3,'Sapiente non asperiores impedit sed.','texto','2024-12-18 04:07:19','2024-12-18 04:07:19'),(4,4,'Ea illum magni distinctio assumenda et impedit.','multipla_escolha','2024-12-18 04:07:19','2024-12-18 04:07:19'),(5,5,'Eligendi adipisci vel repellat numquam harum omnis.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19'),(6,6,'Id est consequatur et.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19'),(7,7,'Aperiam iure autem voluptas molestiae ut nam.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19'),(8,8,'Cum voluptatem voluptatem culpa et voluptas mollitia impedit quia.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19'),(9,9,'Officiis quae exercitationem aut saepe omnis aut nobis.','multipla_escolha','2024-12-18 04:07:19','2024-12-18 04:07:19'),(10,10,'Alias consequatur adipisci perferendis est.','numerica','2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `perguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores`
--

DROP TABLE IF EXISTS `professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professores` (
  `id_professor` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint unsigned NOT NULL,
  `titulacao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_especializacao` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especialidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_professor`),
  KEY `professores_id_usuario_foreign` (`id_usuario`),
  CONSTRAINT `professores_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores`
--

LOCK TABLES `professores` WRITE;
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` VALUES (1,51,'Mestre','quaerat et quo','libero','2024-12-18 04:07:19','2024-12-18 04:07:19'),(2,52,'Especialista','reiciendis dolores tempore','quae','2024-12-18 04:07:19','2024-12-18 04:07:19'),(3,53,'Doutor','laboriosam consequatur consequuntur','in','2024-12-18 04:07:19','2024-12-18 04:07:19'),(4,54,'Doutor','autem ipsam cum','qui','2024-12-18 04:07:19','2024-12-18 04:07:19'),(5,55,'Mestre','consequatur repellendus officiis','eius','2024-12-18 04:07:19','2024-12-18 04:07:19'),(6,56,'Especialista','et quod laudantium','est','2024-12-18 04:07:19','2024-12-18 04:07:19'),(7,57,'Doutor','tempore et eum','optio','2024-12-18 04:07:19','2024-12-18 04:07:19'),(8,58,'Mestre','sed corrupti tenetur','quaerat','2024-12-18 04:07:19','2024-12-18 04:07:19'),(9,59,'Doutor','qui tenetur atque','doloribus','2024-12-18 04:07:19','2024-12-18 04:07:19'),(10,60,'Mestre','sunt quam et','aspernatur','2024-12-18 04:07:19','2024-12-18 04:07:19'),(11,61,'Mestre','laborum soluta placeat','sint','2024-12-18 04:07:19','2024-12-18 04:07:19'),(12,62,'Doutor','totam sequi voluptatem','qui','2024-12-18 04:07:19','2024-12-18 04:07:19'),(13,63,'Mestre','deserunt fuga suscipit','quod','2024-12-18 04:07:19','2024-12-18 04:07:19'),(14,64,'Doutor','enim magni qui','porro','2024-12-18 04:07:19','2024-12-18 04:07:19'),(15,65,'Especialista','quisquam distinctio molestias','aut','2024-12-18 04:07:19','2024-12-18 04:07:19'),(16,66,'Doutor','quo et architecto','nihil','2024-12-18 04:07:19','2024-12-18 04:07:19'),(17,67,'Doutor','ad minus aliquam','expedita','2024-12-18 04:07:19','2024-12-18 04:07:19'),(18,68,'Doutor','dolores occaecati consequatur','aut','2024-12-18 04:07:19','2024-12-18 04:07:19'),(19,69,'Mestre','ipsam assumenda quis','quia','2024-12-18 04:07:19','2024-12-18 04:07:19'),(20,70,'Doutor','consequuntur eos quis','et','2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores_disciplinas`
--

DROP TABLE IF EXISTS `professores_disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professores_disciplinas` (
  `id_disciplina_professor` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_disciplina` bigint unsigned NOT NULL,
  `id_professor` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_disciplina_professor`),
  KEY `professores_disciplinas_id_disciplina_foreign` (`id_disciplina`),
  KEY `professores_disciplinas_id_professor_foreign` (`id_professor`),
  CONSTRAINT `professores_disciplinas_id_disciplina_foreign` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplinas` (`id_disciplina`) ON DELETE CASCADE,
  CONSTRAINT `professores_disciplinas_id_professor_foreign` FOREIGN KEY (`id_professor`) REFERENCES `professores` (`id_professor`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores_disciplinas`
--

LOCK TABLES `professores_disciplinas` WRITE;
/*!40000 ALTER TABLE `professores_disciplinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `professores_disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respostas`
--

DROP TABLE IF EXISTS `respostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `respostas` (
  `id_resposta` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint unsigned NOT NULL,
  `id_pergunta` bigint unsigned NOT NULL,
  `resposta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_resposta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_resposta`),
  KEY `respostas_id_usuario_foreign` (`id_usuario`),
  KEY `respostas_id_pergunta_foreign` (`id_pergunta`),
  CONSTRAINT `respostas_id_pergunta_foreign` FOREIGN KEY (`id_pergunta`) REFERENCES `perguntas` (`id_pergunta`) ON DELETE CASCADE,
  CONSTRAINT `respostas_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respostas`
--

LOCK TABLES `respostas` WRITE;
/*!40000 ALTER TABLE `respostas` DISABLE KEYS */;
INSERT INTO `respostas` VALUES (1,65,3,'Sunt dignissimos sapiente ut in et rerum. Rem omnis similique hic perspiciatis qui architecto. Ipsam ut non nostrum rerum et.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(2,62,10,'Recusandae architecto repellendus distinctio repellendus dolores neque. Reiciendis quia veritatis et nisi. Libero ut facere optio velit sint earum.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(3,68,8,'Sint dolor voluptatem quo porro quos ex voluptas. Expedita odio molestiae quaerat voluptas. Eum ea consequatur minima.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(4,39,7,'Laudantium molestiae odio quisquam nemo ut placeat numquam. Sed aliquam qui omnis sed facilis aliquam dolores. Dolorem facilis vel aperiam commodi. Quasi magni ab dolores veritatis earum.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(5,45,4,'Velit quasi quia provident nesciunt sit est. Blanditiis voluptatum est quo. Quia vero vel quod suscipit. Omnis quae aut qui ut.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(6,45,6,'Quo temporibus voluptatem aut eaque et. A dicta culpa possimus sint quia esse qui. Aperiam et laudantium dolore. Quia delectus porro sed consequatur.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(7,56,2,'Quae quis labore rerum similique voluptas illum velit. Vel hic eaque cupiditate est. Consequatur incidunt eaque libero asperiores molestiae distinctio architecto.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(8,58,2,'Aliquid nihil quidem esse sequi dolores vel. Repellendus vel quod mollitia dolorem adipisci. Cupiditate fugit rem et aperiam asperiores et.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(9,56,9,'Et consectetur repudiandae ut reprehenderit autem. In dolor fugit repellendus qui. Fugit vitae dolor et laudantium quis necessitatibus.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19'),(10,43,4,'Vero quia quaerat eveniet eos quo vero atque. Accusantium eligendi ea aut officiis minima et. Odio nihil ipsam ea iste.','2024-12-18 01:07:19','2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `respostas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('blW3T2n3diit1oq3CjlShpbLjS4vYpUoUIjtKiAA',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3E3akV5YTdQZzFlV2NBSXdZd0Y0NWUyY1ZqYjZvRW9vV0dhbnJQTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1734484735);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_institucional` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` enum('aluno','tecnico-administrativo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_curso` bigint unsigned DEFAULT NULL,
  `turma` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuarios_email_institucional_unique` (`email_institucional`),
  UNIQUE KEY `usuarios_matricula_unique` (`matricula`),
  KEY `usuarios_id_curso_foreign` (`id_curso`),
  CONSTRAINT `usuarios_id_curso_foreign` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Amparo Jakubowski','nwilderman@example.net','33805504','$2y$12$hVRhxCY5K25VkaqEKsfpCOXT4H2//hjoSl5pHS8Hiy7JSCEPlzkqC','tecnico-administrativo',NULL,'a','2024-12-18 04:07:13','2024-12-18 04:07:13'),(2,'Hilma Moen','annamarie.cruickshank@example.net','80676821','$2y$12$ndzYdWsxUFt.BAswyyAAJOR2LxhiHHzTnnz05D51dsxJ85Ynz4k0S','aluno',NULL,'b','2024-12-18 04:07:13','2024-12-18 04:07:13'),(3,'Dixie Quigley PhD','ehermiston@example.com','69324965','$2y$12$SY..pPlgXI/rs/8CRg6DIuZ0kkkscgUUVGpIdX85AzVBYIatYijSu','aluno',NULL,'q','2024-12-18 04:07:13','2024-12-18 04:07:13'),(4,'Prof. Chanelle Mitchell','lowe.issac@example.org','19968389','$2y$12$uSR7AzmxQuu.FjmGjOODGedI4MwdqB.TFuQ1h0PWxqNzvCxwUkYQm','tecnico-administrativo',NULL,'g','2024-12-18 04:07:13','2024-12-18 04:07:13'),(5,'Mr. Robb Erdman','erdman.talia@example.net','86331022','$2y$12$qQap3A1XNUDVBW9cB6HKaeqoVsm2Tt9APOu1HRskUUYPwTvAdesHi','aluno',NULL,'r','2024-12-18 04:07:13','2024-12-18 04:07:13'),(6,'Nicola Labadie','alta.kertzmann@example.net','25093438','$2y$12$81tBLHTL/KMy2z1V.Y9rfe62JINKdOrOSjS4RXBF5feTfrthzQ5WG','tecnico-administrativo',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(7,'Daniela Bradtke','demarco28@example.org','55116434','$2y$12$MREJf6Y7bYHa6Zha8WpA/.a37ympb5abo3Ou76R0P1t6ZLT8PC/ba','aluno',NULL,'x','2024-12-18 04:07:13','2024-12-18 04:07:13'),(8,'Prof. Thaddeus Friesen','sbernhard@example.com','17950986','$2y$12$O1XbYII9/BDZQFeW9zBCaezip4QryZDiBbFLMKEgrECsW23KNkRhC','aluno',NULL,'l','2024-12-18 04:07:13','2024-12-18 04:07:13'),(9,'Leila Lockman III','adella01@example.org','75558090','$2y$12$dGQGYH8F5dql6mgt4g6.ReVI7ceGd1PglZz0Z7ZEYT9hcXX5QjgXK','aluno',NULL,'p','2024-12-18 04:07:13','2024-12-18 04:07:13'),(10,'Arnulfo Cormier','mueller.dedric@example.net','22627659','$2y$12$cQ0zWsFy0G1Rq82LaSwGI.prvMpaa4gE3HXqY.Oew9ox0mxceULYC','tecnico-administrativo',NULL,'u','2024-12-18 04:07:13','2024-12-18 04:07:13'),(11,'Barrett Kulas','green.jennifer@example.net','18226107','$2y$12$RLI/19WsQqWL1uyMzpMnneaJGpDFhkbWEgU623pU7wPct/VX45nDe','tecnico-administrativo',NULL,'h','2024-12-18 04:07:13','2024-12-18 04:07:13'),(12,'Dr. Brock Wiza','ewehner@example.net','35257110','$2y$12$Xa2M35WtmuwSvXWBPTEZuepADvrLdqT7uJ3/6HK9UBF6CjXEgra2W','aluno',NULL,'b','2024-12-18 04:07:13','2024-12-18 04:07:13'),(13,'Kylee Thiel','schaden.duncan@example.org','72210052','$2y$12$xb5AycKlo899sNnxMlsgIujZWrfON8e2puIty9whvGjXlgSd5Nr5G','tecnico-administrativo',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(14,'Charlotte Buckridge','mitchel.casper@example.org','78032624','$2y$12$4.1otZWtObvFASBUkj6N4e6PQl7QjnYNl1ksNun/k4uYnVf3qYecu','tecnico-administrativo',NULL,'w','2024-12-18 04:07:13','2024-12-18 04:07:13'),(15,'Michele Baumbach','angelica.barrows@example.com','7128425','$2y$12$1eIuFQnuJAKDh3WUrQLZ6uKcS5da6WgeCddkLP9h4F70JYCYYd.8W','aluno',NULL,'o','2024-12-18 04:07:13','2024-12-18 04:07:13'),(16,'Anthony Kozey','schowalter.kathlyn@example.org','96316079','$2y$12$ZeXyEF/0P8AgzwX.ENUfcOZOLK.oDct./44AlSP6OyqSgjEth7J6O','aluno',NULL,'u','2024-12-18 04:07:13','2024-12-18 04:07:13'),(17,'Murphy Franecki','marquis48@example.org','84028953','$2y$12$781/zwQHI9oKFEZZuVZ6sOebKnY17bM487q/fq57zZLKoA4tLyTS2','aluno',NULL,'t','2024-12-18 04:07:13','2024-12-18 04:07:13'),(18,'Miss Heather Harber III','mcclure.mary@example.com','53497230','$2y$12$FAYdwG4zomJSVyvG/0RdV.a1gymhXAQp1TUSp6sQNp5f9fzvGE0bq','aluno',NULL,'u','2024-12-18 04:07:13','2024-12-18 04:07:13'),(19,'Rhoda Gottlieb','alvera.smith@example.org','69910476','$2y$12$BPpOudXflG8sTzfRamO3MObNMj7UgOEqQApMX8qm1TULltydgxFJq','aluno',NULL,'u','2024-12-18 04:07:13','2024-12-18 04:07:13'),(20,'Dr. Buck Schuster','arvid11@example.com','32875613','$2y$12$rvvuQnnIc4XOitG2bH2niukg/.WQjvQMcAMda.Xsg9VBfwI65ei42','aluno',NULL,'f','2024-12-18 04:07:13','2024-12-18 04:07:13'),(21,'Ms. Katlyn Leannon','langworth.mireya@example.com','33996953','$2y$12$/2huuRsSi4zkD9IOTnxpIOGn63Ou2BDCjXzlXng1gHzztwB14y3hS','tecnico-administrativo',NULL,'b','2024-12-18 04:07:13','2024-12-18 04:07:13'),(22,'Freida Gutkowski','demond.beatty@example.net','19407996','$2y$12$X4feLruUQwj.VcQnQLuYMeG2GDFXBOzWtpv2z7UBRCIUDVsO.6Wpu','aluno',NULL,'k','2024-12-18 04:07:13','2024-12-18 04:07:13'),(23,'Jennie Nader','bergnaum.otha@example.net','98628407','$2y$12$AlSECD43IgEYcnKCmpIoT.izDs88J9kL6RSfxHTddZxThLOOfIg.i','tecnico-administrativo',NULL,'s','2024-12-18 04:07:13','2024-12-18 04:07:13'),(24,'Telly Rutherford','sawayn.abbigail@example.org','4978696','$2y$12$SGrbWmgY4gB7PAYdANE6o.YZYXxSRfUELJiCps97zym2m1pbwPZIq','tecnico-administrativo',NULL,'v','2024-12-18 04:07:13','2024-12-18 04:07:13'),(25,'Dr. Irving Hyatt MD','demarcus.moore@example.com','21927927','$2y$12$.qOZYm6Mi5OPrxuh9O07kuYq4XDxZDtD3pIBHyGsUf2JsbTqs9XA.','aluno',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(26,'Katrine Toy','rau.hipolito@example.com','4525912','$2y$12$J7LmUzqxcLuLaMNSU8m7seVC8jJkQe4Idqc28lMPSLTDi7dQFRHha','aluno',NULL,'y','2024-12-18 04:07:13','2024-12-18 04:07:13'),(27,'Triston Flatley Jr.','hmclaughlin@example.net','26373990','$2y$12$kOkddW0SayrfGQJKxVHBaeM0FWqyKq32mc9L4blyCt104BNIttyFe','aluno',NULL,'e','2024-12-18 04:07:13','2024-12-18 04:07:13'),(28,'Dr. Felicity Hayes I','ayundt@example.com','8617625','$2y$12$gfi8Cf1YZ5wheQnNj7OorO8olMRXJngQDpI2nNvyGAkSKUOYLz2OG','tecnico-administrativo',NULL,'p','2024-12-18 04:07:13','2024-12-18 04:07:13'),(29,'Brionna Morar','zrolfson@example.net','32764152','$2y$12$bgQMHaTExhSTXq7EP0Qgdu0IqiJ0Ru3HZMnOXCm2edVwRrg1c6.pC','tecnico-administrativo',NULL,'r','2024-12-18 04:07:13','2024-12-18 04:07:13'),(30,'Gennaro Berge','bnolan@example.org','44082276','$2y$12$2G3Oh/g4yPPbe4XHenFNR.9MntLdLe7fHplWFsBg.k8QdNgGUtr4y','tecnico-administrativo',NULL,'d','2024-12-18 04:07:13','2024-12-18 04:07:13'),(31,'Elias Dooley DVM','shayne.hoppe@example.com','35813649','$2y$12$gL52rWFbGNDasl4rJAVaqu/.svYDc8mnUTGKdsnyetsN7swhdNiPa','aluno',NULL,'f','2024-12-18 04:07:13','2024-12-18 04:07:13'),(32,'Dr. Abraham Lynch','allison.shields@example.net','47216044','$2y$12$gSX7SkvfKGjhMMnz0OjLreb1a0yzsDNGaET47uAR14WvxYlsrdPQ.','aluno',NULL,'c','2024-12-18 04:07:13','2024-12-18 04:07:13'),(33,'Mrs. Brionna Borer MD','meghan98@example.org','22592189','$2y$12$EWjMWJtWx3wP.CEsE9TVXuutZly9XZ8ZXBP1XCkAHejvIqS9.xH2O','tecnico-administrativo',NULL,'l','2024-12-18 04:07:13','2024-12-18 04:07:13'),(34,'Marco Wiza','ed.sawayn@example.org','93789293','$2y$12$hOREDklRuQywZEWTdRIVKeXqQ.RIFXpyXE/ksE.GK8mOvh5vgOIny','aluno',NULL,'q','2024-12-18 04:07:13','2024-12-18 04:07:13'),(35,'Tomasa Senger','wking@example.net','70032042','$2y$12$gCHXPcaQxJTk7cM0lADJceF6VP3ROHSLncy6KBUdBNdR3QCTgxYvW','aluno',NULL,'r','2024-12-18 04:07:13','2024-12-18 04:07:13'),(36,'Thelma Willms','vhirthe@example.org','63836634','$2y$12$I7KYJEQnLcLjSSf6M30/OOekgiOgBXmk1l4n/wx9L9Yrdo2N6bZnC','tecnico-administrativo',NULL,'u','2024-12-18 04:07:13','2024-12-18 04:07:13'),(37,'Jeanie Braun Sr.','boyle.virginia@example.org','6490403','$2y$12$jwAP8EjioQpkrwKg47y4Y.TehVbXqe6qBLEf68Y6C5rx31EPYrQmC','aluno',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(38,'Simone Harvey','heathcote.ellie@example.net','1440318','$2y$12$Qm.VZ2eM1trCjZnGTaplBe04eK4nzXS94Q4YsGCjJFpmFGyOFoN/C','aluno',NULL,'m','2024-12-18 04:07:13','2024-12-18 04:07:13'),(39,'Abdullah Renner','santos47@example.net','28310475','$2y$12$W7gu51paBmU9ZNNrBztMZO15OeTQd2NxVVC0lCguzAQZ9LtsrsntW','tecnico-administrativo',NULL,'h','2024-12-18 04:07:13','2024-12-18 04:07:13'),(40,'Miss Alysson Turcotte PhD','kirk75@example.com','90639065','$2y$12$19YzQJ9EDvGrb7V/FrN4.eiMfx.T8rWLK6LY1lADAyobHybfHUEyy','aluno',NULL,'o','2024-12-18 04:07:13','2024-12-18 04:07:13'),(41,'Maegan Dare','kkreiger@example.net','66767852','$2y$12$c9OJpOtjC0z9lhxeaFOdbeESN.Gjzkwxqyyw5BSAcXF6kEfqte2AW','aluno',NULL,'e','2024-12-18 04:07:13','2024-12-18 04:07:13'),(42,'Jewel Bartoletti','xzemlak@example.net','29467087','$2y$12$va5/muRSmvGuBMHR2P8XTOyfRaUYUOkRtGGidsKrc00YVcmnK/jjq','tecnico-administrativo',NULL,'i','2024-12-18 04:07:13','2024-12-18 04:07:13'),(43,'Aditya Gulgowski DVM','lavern47@example.net','16116809','$2y$12$CKtA07wT27GWmzkzyaHYWO72CmYUVaiWbX3U/v8NOofklP1rcjb1e','aluno',NULL,'s','2024-12-18 04:07:13','2024-12-18 04:07:13'),(44,'Mr. Giuseppe Bruen','molson@example.org','68377598','$2y$12$f9JeJbwpwWOsINNl6SjEAuOfSUbr6A/4eeSu8w1/AfEpd8G8/Ux7u','aluno',NULL,'m','2024-12-18 04:07:13','2024-12-18 04:07:13'),(45,'Robin Jakubowski','kaley69@example.net','43072362','$2y$12$o6KPOqY5M6EC0xdtPVOI.eLRzaoQYWAFnqXaQFaMLbEen4HGsNfDe','tecnico-administrativo',NULL,'w','2024-12-18 04:07:13','2024-12-18 04:07:13'),(46,'Brady Turcotte','denesik.nadia@example.org','43635629','$2y$12$9y.3vhNV0hp/CZ6PJj8QUu3BWVaUjupmPRp3VSBVYLjSGqOPuum1m','aluno',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(47,'Carolanne Gislason','littel.chester@example.com','15623703','$2y$12$u1Pzu76yc7kDotO82llM7eAvPJG573dsh7hDK6xgmpCmmqRNfIPHm','aluno',NULL,'h','2024-12-18 04:07:13','2024-12-18 04:07:13'),(48,'Johnpaul Haag','hauck.stacey@example.com','74659276','$2y$12$i3PSXLR0MyoCqB5GF/dTqeiQrWt0vxuLgHN.8EJzeHtJTunomokhK','tecnico-administrativo',NULL,'s','2024-12-18 04:07:13','2024-12-18 04:07:13'),(49,'Domenic Muller','carolina.koch@example.net','9089430','$2y$12$H51Ci/63iMaI21xWFEDo..x8rgoim2zWqdObLDY8af9xRHLZH71Qi','tecnico-administrativo',NULL,'j','2024-12-18 04:07:13','2024-12-18 04:07:13'),(50,'Ms. Ludie Hessel','medhurst.delaney@example.org','89223107','$2y$12$ZNB.SC.g/h1HkRdg9IgDUenvN0KBygjlAhUTerrECemxyc4r.A6fm','aluno',NULL,'c','2024-12-18 04:07:13','2024-12-18 04:07:13'),(51,'Zetta Padberg','henriette.gerhold@example.net','66527273','$2y$12$XmT4b10mjOdrc5DqvosgUOrCrww/jadhcMuWmHzNCCKEMR786VLuW','aluno',NULL,'h','2024-12-18 04:07:14','2024-12-18 04:07:14'),(52,'Jimmy Lehner','felipa30@example.com','71359364','$2y$12$SwFkpQ3hjkglO0tLQG0WKuJf8L/ZUK5pR.NK06VsD4b0UVaeKRtse','aluno',NULL,'t','2024-12-18 04:07:14','2024-12-18 04:07:14'),(53,'Braxton Wuckert','towne.deanna@example.com','33129011','$2y$12$mzmr.dyCTQsUQj7Cgzoh7u4Ynv0GjtU6wM59Oqquu.CIwm0btlR82','tecnico-administrativo',NULL,'k','2024-12-18 04:07:14','2024-12-18 04:07:14'),(54,'Duane Boyer','tiara13@example.com','67534183','$2y$12$9EU2cZ45kAPSAhz5B3gLYeqebcLaCDWNqN3nyZbHwWHI.9NOsc4o2','tecnico-administrativo',NULL,'s','2024-12-18 04:07:15','2024-12-18 04:07:15'),(55,'Dominic Legros Jr.','jshanahan@example.net','15022191','$2y$12$zQPbM.aCeHxahtP2GhBpoexZ9Plc9NHMCvxVfatHeME9pF0VSru8C','aluno',NULL,'d','2024-12-18 04:07:15','2024-12-18 04:07:15'),(56,'Mr. Dusty Baumbach','era95@example.com','98338218','$2y$12$12SG7QQIDpXiScNDQLt6de0E6VFs1VJ7hUEiiV6VWr1AFwDL0ajlK','aluno',NULL,'u','2024-12-18 04:07:15','2024-12-18 04:07:15'),(57,'Destany Greenfelder PhD','zcollins@example.net','94893920','$2y$12$HydW1H4dkgdsSq2YrzWzoOSMMrcKShsfvqjVYV.fhz9USrdsNDA.K','tecnico-administrativo',NULL,'i','2024-12-18 04:07:15','2024-12-18 04:07:15'),(58,'Daphnee Keebler','lynch.davon@example.com','92024311','$2y$12$vzXOhQwk3.uf7VoGwqch7e/t9K6X.ayBBx4lsTy/97mSg7cF2HWUO','aluno',NULL,'i','2024-12-18 04:07:16','2024-12-18 04:07:16'),(59,'Luna Bruen I','kiehn.lizeth@example.com','19814347','$2y$12$vDWPVYJq/lh3Ru7cqE8SX.6rSxVlmtRfctvf9ALAbYMhT9qzD9l2m','tecnico-administrativo',NULL,'f','2024-12-18 04:07:16','2024-12-18 04:07:16'),(60,'Alexandre Cremin III','elenor90@example.com','74697893','$2y$12$X5jfexafWF99CM55LtfCuuPFUrUWOBSZ/5U4uqokasK2EVN3SQdK6','aluno',NULL,'j','2024-12-18 04:07:16','2024-12-18 04:07:16'),(61,'Delfina Lemke','jany.johns@example.org','44965949','$2y$12$8CZOR9z7Rkwn9Z8zsGHVu.8UdZEoFbqhM2wBGIgGdWKJZb4HWrHmu','tecnico-administrativo',NULL,'i','2024-12-18 04:07:16','2024-12-18 04:07:16'),(62,'Marvin Marquardt','kbarrows@example.net','46870955','$2y$12$q40ZEWyGsZZDRMmo4lEoQu6q/RgMTNgHs7cmWfaizxNvwVoT4bciW','tecnico-administrativo',NULL,'o','2024-12-18 04:07:17','2024-12-18 04:07:17'),(63,'Mrs. Liza Collier III','georgiana59@example.net','21845131','$2y$12$eGaulRWpBFKn7di0VjGjX.H/PyZFE5htsy20XE7qInPpwHISVzaRS','tecnico-administrativo',NULL,'a','2024-12-18 04:07:17','2024-12-18 04:07:17'),(64,'Mr. Wilber Tromp V','twillms@example.net','82187069','$2y$12$mLXIH6w4CaSQDBAo2G.Gou1958P9o0lQl4svEEVkKnNgauNVs8Ex.','tecnico-administrativo',NULL,'z','2024-12-18 04:07:17','2024-12-18 04:07:17'),(65,'Mrs. Letha Balistreri','osinski.maegan@example.net','44434001','$2y$12$jl4LX4CQoJZBeVQU/yVsJubgp3Y6zo.RB1Rfv0KEeTRhnfebeAlWe','tecnico-administrativo',NULL,'m','2024-12-18 04:07:17','2024-12-18 04:07:17'),(66,'Schuyler Wisozk DDS','gbeier@example.org','25059279','$2y$12$wXL68Z2k.WhnNLIijXbjmu6AY1hgOh4qVjuyHZeM43svvmIr2Xgxy','tecnico-administrativo',NULL,'t','2024-12-18 04:07:18','2024-12-18 04:07:18'),(67,'Mr. Braeden Marquardt','chesley70@example.net','14841657','$2y$12$sTBkOSPL.jVO6K0Kl4MqkupD8eSfFbQjofZgM9j6G3Ix27MmewNBO','aluno',NULL,'z','2024-12-18 04:07:18','2024-12-18 04:07:18'),(68,'Clementina Treutel','thora.carter@example.org','59502924','$2y$12$S8urYtJ/7qXGlZW976CivOUSHv6n5xzewlr/abpPyRw1XmvhePbza','tecnico-administrativo',NULL,'b','2024-12-18 04:07:18','2024-12-18 04:07:18'),(69,'Prof. Davion Satterfield V','casper.otis@example.org','16695274','$2y$12$g0.J.qWGUfKS1mJew8Di7.8RbOM2Oj6E7T7YG2eeBG2goIQJTTnd.','tecnico-administrativo',NULL,'m','2024-12-18 04:07:18','2024-12-18 04:07:18'),(70,'Nova Toy','merlin.boyer@example.org','88083019','$2y$12$EYE0yIkoyXAku5ND7M8vdepztrHtKgBTBrKANd/JKFIIpEV7HJcem','tecnico-administrativo',NULL,'r','2024-12-18 04:07:19','2024-12-18 04:07:19');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-17 22:24:03
