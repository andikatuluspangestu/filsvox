-- MariaDB dump 10.19  Distrib 10.5.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u1602015_filsvox
-- ------------------------------------------------------
-- Server version	10.5.17-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `cover` text NOT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `headline` enum('true','false') DEFAULT NULL,
  `rating` int(3) NOT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `kategori` (`kategori`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `title`, `cover`, `slug`, `content`, `kategori`, `headline`, `rating`, `draft`, `created_at`) VALUES (1,'Vicenzo','https://asianwiki.com/images/0/01/Vincenzo-KD-p1.jpg','vicenzo-635a990ccbb2b8.61322744','Pada usia 8 tahun, Park Joo-Hyeong pergi ke Italia setelah dia diadopsi. Dia sekarang sudah dewasa dan memiliki nama Vincenzo Cassano (Song Joong-Ki). Dia adalah seorang pengacara, yang bekerja untuk Mafia sebagai consigliere. Karena perang antar kelompok mafia, dia melarikan diri ke Korea Selatan. Di Korea Selatan, ia terlibat dengan Pengacara Hong Cha-Young (Jeon Yeo-Bin). Dia adalah tipe pengacara yang akan melakukan apa saja untuk memenangkan sebuah kasus. Vincenzo Cassano jatuh cinta padanya. Dia juga mencapai keadilan sosial dengan caranya sendiri.',4,NULL,0,'false','2022-10-27 21:43:24'),(2,'Avengers - End Game','https://wallpapercave.com/wp/wp3891779.jpg','avengers','Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?',3,'true',0,'false','2022-10-27 21:50:47'),(3,'Ivanna','https://satuviral.com/wp-content/uploads/2022/07/ivanna-setan-1.jpg','ivanna-635c8ea2340408.67081752','Ketika Ambar & Dika pindah setelah kematian orang tua mereka, tidak pernah terpikirkan apa yang seharusnya menjadi awal baru berubah menjadi awal kesengsaraan terbesar dalam hidup mereka. Semua akibat kemampuan Ambar merasakan yang tak terlihat, yang didapatkan setelah mengalami gangguan penglihatan.',1,NULL,0,'false','2022-10-29 09:23:30'),(5,'Mariposa','https://cdn.cgv.id/uploads/movie/pictures/20005800.jpg','mariposa-635cc459d72152.21857981','Mariposa (Kupu-kupu) seperti kamu, aku mengejar tapi kamu menghindar. Begitulah gambaran sosok IQBAL GUANNA bagi NATASHA KAY LOOVY atau ACHA. Acha bertekad ingin mendapatkan hati Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin. Sahabat Acha, AMANDA, berusaha mencegah niat Acha untuk mendekati Iqbal. Amanda takut Acha akan terluka dan sakit hati.',2,NULL,0,'false','2022-10-29 13:12:41'),(6,'Ayat-Ayat Cinta 2','https://i.pinimg.com/originals/0d/66/16/0d661640a6833fd717cc1ccafc297e81.jpg','ayat-ayat-cinta-2','Hari - hari dalam hidup FAHRI dijalani dengan duka dan usaha pencarian istri yang sangat dicintainya, AISHA. FAHRI (Fedi Nuril) memilih tinggal di Edinburgh, Skotlandia. Kota yang sangat disukai AISHA. FAHRI bekerja menjadi dosen serta peneliti terhormat di universitas ternama kota tersebut. Dalam menjalani kehidupan sehari-harinya FAHRI hanya ditemani HULUSI (Pandji Pragiwaksono), asisten rumah tangganya yang berdarah Turki. Kesantunan dan keramahan sikapnya membuat FAHRI disukai banyak orang, seperti Nenek Catarina (Dewi Irawan), wanita Yahudi yang tinggal tak jauh dari rumahnya. Namun ada pula yang menentang bahkan membenci dirinya, seperti KEIRA (Chelsea Islan), gadis kelahiran Skotlandia yang berobsesi menjadi pemain biola terkenal. Suatu saat, FAHRI bertemu dengan HULYA (Tajtana Saphira), gadis berkebangsaan Turki-Jerman yang sedang mengambil S2 di Edinburgh yang masih memiliki hubungan keluarga dengan AISHA. Kedatangan HULYA justru memicu kenangan sedih FAHRI. Mampukah FAHRI mencapai tekadnya untuk memperbaiki citra Islam dan muslim di negeri dunia pertama itu.',2,NULL,0,'false','2022-10-29 13:19:15'),(8,'I Still Love You','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSVYW40OZkJqf9aH1e3HDiiTOxq_K6d4zwotE3ZVWdD4HnNdOlJ','to-all-the-boys-ps-i-still-love-you','To All the Boys: P.S. I Still Love You adalah film komedi romantis remaja Amerika Serikat tahun 2020 yang disutradarai oleh Michael Fimognari dan ditulis oleh Sofia Alvarez dan J. Mills Goodloe',4,NULL,0,'false','2022-10-29 13:27:50'),(9,'Spider-Man: No Way Home','https://wallpapercave.com/wp/wp10252727.jpg','spider-man-no-way-home','Pertama kalinya dalam sejarah layar lebar Spider-Man, identitas asli dari pahlawan nan ramah ini terbongkar, sehingga membuat tanggung jawabnya sebagai seorang berkekuatan super berbenturan dengan kehidupan normalnya, dan menempatkan semua orang terdekatnya dalam posisi paling terancam.',3,NULL,0,'false','2022-10-29 13:39:39'),(10,'BoBoiBoy Movie 2','https://cdn.cgv.id/uploads/movie/compressed/19021600.jpg','boboiboy-movie-2','BoBoiBoy Movie 2 adalah sebuah film komedi pahlawan super animasi komputer Malaysia tahun 2019 garapan Nizam Razak. Film tersebut mengisahkan BoBoiBoy dan para temannya saat mereka berjuang melawan seorang penjahat kuno bernama Retak’ka yang ingin mengambil alih kekuatan BoBoiBoy',3,NULL,0,'false','2022-10-29 13:40:45'),(11,'She-Hulk: Attorney at Law','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS7IHDYK6j6jXB-fL7t29KTmhQ25QeomqG0_ikmQCZlEOjHNiZe','she-hulk-attorney-at-law-2022','She-Hulk: Attorney at Law adalah serial televisi Amerika Serikat yang dibuat oleh Jessica Gao untuk layanan streaming Disney+. Seri ini berdasarkan Marvel Comics yang menampilkan karakter She-Hulk. Seri ini merupakan serial televisi kedelapan di Marvel Cinematic Universe yang diproduksi oleh Marvel Studios.',3,NULL,0,'false','2022-10-29 13:41:50'),(12,'Thor Love and Thunder','https://wallpapercave.com/dwp1x/wp8007067.jpg','thor-love-and-thunder','\"Thor: Love and Thunder\"menceritakan Thor dalam sebuah perjalanan yang belum pernah ia jalani – pencariankedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal , yang ingin memusnahkan para dewa.',3,NULL,0,'false','2022-11-01 11:07:26'),(13,'Agent Carter','https://wallpapercave.com/dwp1x/wp2288738.jpg','agent-carter','Peggy Carter menjadi seorang agen rahasia S.H.I.E.L.D. selama perang dunia kedua setelah kekasihnya, Steve Rogers, diyakini telah tewas dalam sebuah ledakan yang mematikan.',3,NULL,0,'false','2022-11-01 11:12:13'),(14,'Iron Man 3','https://wallpapercave.com/dwp1x/wp10583637.jpg','iron-man-3','Industrialis brilian Tony Stark / Iron Man menghadapi musuh yang tak kenal batas. Dunia Tony dihancurkan dan ia menyelidiki siapa yang bertanggung jawab untuk kerusakan tersebut. Berbekal peralatan dan instingnya, Tony berusaha menyelamatkan orang-orang yang dikasihinya. Pertanyaan lama kembali menghantuinya; apakah manusia yang membuat baju Iron Man atau baju tersebut yang menentukan identitasnya sebagai manusia?',3,NULL,0,'false','2022-11-01 11:15:09');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`) VALUES (1,'Horror'),(2,'Romance'),(3,'Action'),(4,'Korea'),(5,'Japanese'),(6,'Documentary');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_status` int(11) NOT NULL,
  `comment_nama` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_isi` text NOT NULL,
  `comment_content_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `password_updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`, `password_updated_at`) VALUES ('6118b2a943acc2.78631959','Administrator','admin@mail.com','admin','$2y$10$ey8D9z95bJK/Z7ezBnuFte9SN52kDxpEcBJvkvCcbLL3mall395Ai',NULL,'2021-08-14 23:22:33','2022-10-31 20:18:43','2022-10-25 21:42:38');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'u1602015_filsvox'
--

--
-- Dumping routines for database 'u1602015_filsvox'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-02  7:13:34
