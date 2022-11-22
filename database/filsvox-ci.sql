-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 08:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filsvox-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `contributor` text NOT NULL,
  `cover` text NOT NULL,
  `trailer` text DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `headline` enum('true','false') DEFAULT NULL,
  `directors` text DEFAULT NULL,
  `writers` text DEFAULT NULL,
  `actors` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `visitor` int(11) NOT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `contributor`, `cover`, `trailer`, `slug`, `content`, `kategori`, `headline`, `directors`, `writers`, `actors`, `release_date`, `visitor`, `draft`, `created_at`) VALUES
(23, 'Qodrat', 'Andika Tulus Pangestu', 'https://dashboard.moviplex.id/storage/movies/yWUanLbafz1jSMIG5QuvozzvNNQhIOmnB9pRXncw.jpg', 'nbFYtNGSau0', 'qodrat', ' Berpuluh tahun menggunakan ilmu ruqyah untuk menolong orang, USTADZ QODRAT (Vino G. Bastian) gagal meruqyah anaknya sendiri, ALIF AL-FATANAH (Jason Bangun) yang dirasuki setan bernama ASSUALA. Mencari jawaban atas kegundahannya, Qodrat pulang ke Pesantren di desa tempat ia menuntut ilmu, namun menemukan tempat itu sudah tak seperti dulu dengan gangguan-gangguan yang tak terjelaskan. Di situlah Qodrat berhadapan lagi dengan traumanya saat harus meruqyah ALIF AMRI (Keanu Azka Briansyah), anak bungsu YASMIN (Marsha Timothy) yang tak bisa ia tolak karena kesamaan nama dengan almarhum anaknya. Di tengah ujian yang meruntuhkan jiwa, Qodrat kembali menghadapi amukan Assuala. Kali ini, Qodrat harus memilih antara menuruti kemarahannya atau kembali menemukan keimanannya. ', 1, 'false', 'Linda Gozali', 'Gea Rexy, Asaf Antariksa', 'Vino G Bastian, Marsha Timothy', '2022-10-27', 86, 'false', '2022-11-13 12:14:36'),
(24, 'Perempuan Bergaun Merah', 'Andika Tulus Pangestu', 'https://dashboard.moviplex.id/storage/movies/GOp9Nq6tbiET6XkWzdos9yySPOA6jZD4m5t1p3gR.jpg', '--gU6KgUFsw', 'perempuanbergaunmerah', ' Sejak sahabatnya menghilang, hidup Dinda (Tatjana Saphira) berubah menjadi mimpi buruk saat sosok roh jahat berwujud perempuan bergaun merah menghantuinya. Nyawa Dinda terancam, tak hanya dari sosok jahat itu saja tapi juga dari orang-orang yang berusaha merahasiakan kejadian di malam sahabatnya menghilang. ', 1, 'false', 'Wicky V Olindo, Timo Tjahjanto', 'William Chandra', 'Tatjana Saphira, Refal Hadi, Stella Cornelia', '2022-11-03', 23, 'false', '2022-11-13 12:16:43'),
(25, ' Black Panther: Wakanda Forever', 'Andika Tulus Pangestu', 'https://picfiles.alphacoders.com/572/thumb-572267.jpg', '_Z3QKkl1WyM', 'blackpantherwakandaforever', ' Rakyat Wakanda kali ini akan berjuang untuk melindungi negerinya dari campur tangan kekuatan dunia setelah kematian sang Raja T\'Challa. ', 3, 'false', 'Kevin Feige, Nate Moore', 'Ryan Coogler, Joe Robert Cole', 'Letitia Wright, Lupita Nyong\'o', '2022-11-08', 74, 'false', '2022-11-13 12:21:49'),
(26, 'KKN Di Desa Penari Luwih Dowo Luwih Medeni', 'Andika Tulus Pangestu', 'https://dashboard.moviplex.id/storage/movies/vsluFPDFrhAm17DBUUAroMvEenWYfEOM6kVc4NDm.jpg', 'PAMx9m4Z2V4', 'kkndidesapenariluwihdowoluwihmedeni', ' Air selalu mengalir ke Timur, di Timur semua hal berkumpul, dari yang baik sampai yang buruk hingga yang paling buruk\", sebuah pepatah Jawa diutarakan ibu Widya tepat sebelum dia berangkat KKN. Pertanda bahwa ada sesuatu di desa yang berada di ujung timur itu. Widya, Nur, Ayu, Bima, Anton dan Wahyu tidak pernah menyangka bahwa kegiatan KKN mereka akan berujung malapetaka. Sering terdengar suara gamelan dan penampakan sosok penari cantik yang mulai menganggu Nur dan juga Widya. \"Badarawuhi\", tetua desa (Mbah Buyut) menyebut nama sosok penari yang terus menganggu Widya. Kejadian lebih menyeramkan pun terjadi saat salah satu dari keenam mahasiswa KKN itu terjerat perjanjian dengan sang penari, sehingga mereka terancam tidak bisa pulang dengan selamat dari desa yang dikenal dengan sebutan Desa Penari. ', 1, 'false', 'Manoj Punjabi', 'Lele Laila, Gerald Mamahit', 'issa Biani, Adinda Thomas Dkk.', '2022-12-29', 93, 'false', '2022-11-13 12:25:24'),
(27, ' Sri Asih', 'Andika Tulus Pangestu', 'https://dashboard.moviplex.id/storage/movies/on4uXHh0AZ62lNnEqxrnXblzPfWpBNIykNotJ43W.jpg', 'QeT6Ke2kQYo', 'sriasih', ' Alana tidak mengerti mengapa dia selalu dikuasai oleh kemarahan. Tapi dia selalu berusaha untuk melawannya. Dia lahir saat letusan gunung berapi yang memisahkan dia dan orang tuanya. Dia kemudian diadopsi oleh seorang wanita kaya yang berusaha membantunya menjalani kehidupan normal. Tapi saat dewasa, Alana menemukan kebenaran tentang asalnya. Dia bukan manusia biasa. Dia bisa menjadi kebaikan untuk kehidupan. Atau menjadi kehancuran bila ia tidak dapat mengendalikan amarahnya. ', 3, NULL, 'Bismarka Kurniawan', 'Upi, Joko Anwar', 'Pevita Pearce, Reza Rahadian', '2022-10-06', 2, 'false', '2022-11-13 13:15:50'),
(28, 'Hidayah', 'Andika Tulus Pangestu', 'https://dashboard.moviplex.id/storage/movies/6Gr5V8UzWonTqtVTVsgLlGTw5CGlF3y7yJPdVFZX.jpg', '', 'hidayah', ' Di tengah imannya yang tengah goyah, BAHRI (Ajil Ditto), seorang ustadz muda, berusaha mengubur masa lalunya dengan bekerja di kota. Hingga suatu ketika, sahabat Bahri, HASAN, datang dari kampung untuk meminta tolong. Desa Mekarwangi tempat Bahri tumbuh dan berasal, mengalami gangguan gaib yang mengusik kedamaian kampung, yang dipercaya disebabkan oleh RATNA (Givina), teman lama Bahri. Ratna sakit keras dan menderita, namun tak kunjung menemui ajal. Teriakan kesakitan Ratna menghantui kampung tiap malam, disertai kemunculan sosok gaib yang mengganggu warga. Bahri kembali ke Desa Mekarwangi, dan mendapati bahwa bahaya yang harus ia hadapi lebih besar dari yang ia duga. Bahkan sesudah Ratna wafat, gangguan gaib malah semakin parah, hingga merenggut nyawa warga kampung. Bahri dituding bertanggung jawab atas itu semua, dan masa lalu Bahri sebagai narapidana terbongkar, membuat warga Mekarwangi mengusirnya. Demi menyelamatkan diri dan kampungnya, Bahri tidak punya pilihan selain meraih kembali hidayah dan memperteguh imannya. ', 1, NULL, 'Rajesh Punjabi', 'Baskoro Adi Wuryanto', 'Ajil Ditto, Givina, Dkk.', '2022-10-20', 0, 'true', '2022-11-13 13:17:06'),
(29, 'Spider-Man: No Way Home', 'Andika Tulus Pangestu', 'https://wallpapercave.com/wp/wp10252727.jpg', 'JfVOs4VSpmA', 'spidermannowayhome', 'Pertama kalinya dalam sejarah layar lebar Spider-Man, identitas asli dari pahlawan nan ramah ini terbongkar, sehingga membuat tanggung jawabnya sebagai seorang berkekuatan super berbenturan dengan kehidupan normalnya, dan menempatkan semua orang terdekatnya dalam posisi paling terancam.', 3, 'true', 'Jon Watts', 'Stan Lee, Steve Ditko', 'Tom Holland', '2021-12-15', 120, 'false', '2022-11-13 14:09:17'),
(30, 'Vicenzo', 'Aminatun Khoiriyyah', 'https://asianwiki.com/images/0/01/Vincenzo-KD-p1.jpg', '-4mXCNj4&vl', 'vicenzo', 'At the age of 8, Park Joo-Hyeong went to Italy after he was adopted. He is now an adult and has the name of Vincenzo Cassano (Song Joong-Ki). He is a lawyer, who works for the Mafia as a consigliere. Because of a war between mafia groups, he flees to South Korea. In South Korea, he gets involved with Lawyer Hong Cha-Young (Jeon Yeo-Bin). She is the type of attorney who will do anything to win a case. Vincenzo Cassano falls in love with her. He also achieves social justice by his own way.', 4, 'true', 'Kim Hee-Won', 'Park Jae-Bum', 'Song Joong-Ki, Jeon Yeo-Bin, dkk', '2021-02-20', 1, 'false', '2022-11-18 15:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Horror'),
(2, 'Romance'),
(3, 'Action'),
(4, 'Korea'),
(6, 'Documentary'),
(7, 'Commedy'),
(8, 'Advanture'),
(9, 'Animated'),
(11, 'Fantasy'),
(12, 'Science Fiction'),
(13, 'Thriller'),
(16, 'Musical'),
(17, 'Drama'),
(18, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_status` int(11) NOT NULL,
  `comment_nama` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_isi` text NOT NULL,
  `comment_content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL DEFAULT '1921684301',
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `password_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `role`, `created_at`, `last_login`, `password_updated_at`) VALUES
('DEIYTPWJuN', 'Athariq Byan', 'athariqbyan@gmail.com', 'athariqbyan', '$2y$10$D0hWfC5pCMVxxOtbn9CTEuFElQZxGH4JOkVDx3m2SXW.tH8w98rUu', '', 2, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
('NFSBOT6zYM', 'Andika Tulus Pangestu', 'andikatulusp@gmail.com', 'andikatulusp', '$2y$10$Shnuf.VlgnJGfW4u9AcJgugh14jlv6t9SPeInmtyz2sFJ9XPi/iCm', '', 1, '0000-00-00 00:00:00', '2022-11-18 19:35:38', '0000-00-00 00:00:00'),
('ojyYCEUB2a', 'Widya Bella', 'widyabella@gmail.com', 'widyabella', '$2y$10$3YOF9YfVHpo7aimjSI/1cunmcLaWQ.Rki7r.8LX7a4/H13WuaTBpq', '', 2, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
('uCMtp4qhXK', 'Aminatun Khoiriyyah', 'aminatun@gmail.com', 'aminatun', '$2y$10$afE0KEubI5Wv6tp0dt1QveafRM/nRyDT63sz9TOdJh2/Ay4sXJ9KG', '', 2, '0000-00-00 00:00:00', '2022-11-18 02:22:40', '0000-00-00 00:00:00'),
('Z5c2yVsqPb', 'Syita Nutyunaizah', 'syita@gmail.com', 'syita', '$2y$10$Y/ZyD6GyM7igBqCdl2FSmeSVioRn/wt8f4euPGBl80ojdyN6g7eMS', '', 2, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
