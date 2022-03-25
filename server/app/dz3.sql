-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: dz3
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Reuters'),(2,'Daily Mail'),(3,'Лента.ру'),(4,'Fox News'),(5,'ВКонтакте');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `author_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Москвичи позавидовали варившим пельмени машинистам электрички','Инцидент в электричке, следующей из столицы в Одинцово, произошел 4 февраля около 21:30. Как рассказал автор снимка в подписи к публикации, во время поездки он внезапно почувствовал запах еды. «Чувствую замечательный запах пельмешек... Оказалось, что машинисты поставили мультиварку в вагон и готовили кушать. (...) Так есть захотелось», — говорится в записи.\r\n\r\nНа фотографии под одним из кресел видна работающая мультиварка, подключенная к розетке. Подписчики сообщества бурно отреагировали на публикацию. «Надо на днях с электрошашлычницей поехать. Народ даже за поездом будет бежать», — сказал один из пользователей. «Вагон-пельменная», — заметил другой.\r\n\r\nТакже один из подписчиков предположил, что готовить еду могли не машинисты, а охранники. «В новых электричках постоянно находятся охранники, которые, по-моему, там и живут вахтой, и теперь пельмени еще варят», — рассудил он!!.',5),(2,'Найден самый популярный общественный туалет','В Новой Зеландии обнаружен самый популярный общественный туалет, через который ежегодно проходят 250 тысяч туристов. Об этом сообщает Fox News.\r\n\r\nПопулярность уборной связывают с тем, что ее создал знаменитый австрийский художник Фриденсрайх Хундертвассер. Для создания туалета он использовал кирпичи разрушенного здания Банка Новой Зеландии, плитки, изготовленные студентами колледжа Bay of Islands, бутылки, куски бетона, стали и меди. Хундертвассер построил уборную 20 лет назад и умер ровно через год после завершения работы, так и не узнав, что его творение получило мировое признание. Отмечается, что ежедневно возле уборной, расположенной рядом с небольшим городом Кавакава, собирается огромная очередь из туристов, большинство из которых даже не пользуются удобствами туалетной комнаты, а просто снимают ее интерьер.',4),(3,'Полицейские попались на массовой продаже водительских прав таксистам','В подмосковной Балашихе сотрудники ГИБДД незаконно выдавали водительские удостоверения гражданам, в том числе иностранцам, которые фактически не сдавали экзамены. Об этом «Ленте.ру» сообщила представитель областного управления Следственного комитета Ольга Врадий. По ее словам, с марта 2018 года полицейские за денежное вознаграждение или по указанию начальства фиктивно принимали экзамены у мигрантов. Следствием установлены 167 человек, которые незаконно купили права. Многие из них работали таксистами. Теперь их водительские удостоверения будут аннулированы.\r\n                                                                                                                                                                                                                                                                                                                                                                                                                   \r\n                                                                                                                                                                                                                                                                                                                                                                                                                   В двух подразделениях ГИБДД прошли обыски, трое сотрудников полиции помещены под домашний арест. Им предъявлено обвинение в злоупотреблении должностными полномочиями.\r\n                                                                                                                                                                                                                                                                                                                                                                                                                   \r\n                                                                                                                                                                                                                                                                                                                                                                                                                   В МВД начали служебную проверку, сообщила «Ленте.ру» представитель подмосковного главка Татьяна Петрова.',3),(4,'Женщина отказалась от фастфуда и похудела вдвое','Жительница канадской провинции Британская Колумбия, весившая 172 килограмма, победила одержимость фастфудом и похудела на 82,5 килограмма. Об этом сообщает издание Daily Mail.\r\n\r\nАлиша Макнейр (Alysha McNair) набрала вес, когда училась в школе. Она мечтала похудеть, но не могла заставить себя придерживаться диеты. Из-за издевательств и травли ей пришлось бросить школу в 14 лет.\r\n\r\nОна продолжала толстеть, пока ее вес не достиг 172 килограммов. «У меня была дурная привычка покупать еду в забегаловках, торгующих навынос, — вспоминает Макнейр. — Часто я заходила в пять разных заведений фастфуда только для того, чтобы закончить один прием пищи».',2),(5,'Суслик достал российским археологам клад','Археологи Марийского госуниверситета смогли обнаружить клад при помощи суслика. Об этом сообщается на официальном сайте учреждения.\r\n\r\nВ ходе раскопок в Астраханской области на территории Селитренного городища ученые нашли серебряные монеты конца XIV века. Животное, встретившее на своем пути холщовый мешочек с ценными предметами, вытолкнуло его из-под земли.\r\n\r\nСпециалисты также провели исследования в Краснодарском крае. Там они обнаружили золотую монету, которую отчеканили в 27-м году нашей эры. Отмечается, что ее создали в Боспорском царстве — античном государстве, которое образовалось, когда объединись греческие города на Керченском и Таманском полуостровах.\r\n\r\nСелитренное городище, где были сделаны находки, является развалинами города, существовавшего в XIV-XV веках. Место имеет статус памятника археологии федерального значения!!!.',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'Вася','Пупкин',32),(2,'Петя','Дудкин',25),(3,'Коля','Туткин',45),(4,'Женя','Бубкин',33),(5,'Миша','Шуткин',18),(6,'Толя','Лункин',42);
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vasya','12345','vasya@mail.ru'),(2,'petya','54321','petya@mail.ru');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-08 19:50:25
