-- MySQL dump 10.13  Distrib 8.4.3, for Win64 (x86_64)
--
-- Host: localhost    Database: sistem_kelas
-- ------------------------------------------------------
-- Server version	8.4.3

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
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anggota` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Aktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES (1,'Nabila Rizki A','P','247223002','STI 2024 Reguler','Aktif'),(2,'Yuna Faizatun','P','247223004','STI 2024 Reguler','Aktif'),(3,'Dio Alif','L','247223005','STI 2024 Reguler','Aktif'),(4,'Shofa Azzah','P','247223006','STI 2024 Reguler','Aktif'),(5,'Najwa Tsabitah','P','247223007','STI 2024 Reguler','Aktif'),(6,'Muhammad Ridwan','L','247223008','STI 2024 Reguler','Aktif'),(7,'Uum Humairoh','P','247223009','STI 2024 Reguler','Aktif'),(8,'Fauzan Rizki','L','247223010','STI 2024 Reguler','Aktif'),(9,'Muhammad Dewanda','L','247223011','STI 2024 Reguler','Aktif'),(10,'Taufik Hidayat','L','247223012','STI 2024 Reguler','Aktif'),(11,'Fikri Muhammad','L','247223013','STI 2024 Reguler','Aktif'),(12,'Lutfi Hidayat','L','247223014','STI 2024 Reguler','Aktif'),(13,'Mas\'ud','L','247223016','STI 2024 Reguler','Aktif'),(14,'Muhammad Faiz','L','247223018','STI 2024 Reguler','Aktif'),(15,'Dinar Nugraha','L','247223021','STI 2024 Reguler','Aktif'),(16,'Dimas Maulana','L','247223022','STI 2024 Reguler','Aktif'),(17,'Dera Pasya','P','247223023','STI 2024 Reguler','Aktif'),(18,'Hafidz Nur','L','247223024','STI 2024 Reguler','Aktif'),(19,'Febrizio F','L','247223026','STI 2024 Reguler','Aktif'),(20,'Riyan Husein','L','247223027','STI 2024 Reguler','Aktif');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Workshop UI & GitHub','Kegiatan workshop bersama','ui.jpg'),(2,'Gathering Kelas 2024','Kumpul bareng mahasiswa','download (3).jpg'),(3,'Seminar Teknologi AI','Seminar perkembangan AI','seminar.jpg'),(4,'Praktikum Pemrograman','Kegiatan di lab komputer','pemograman.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jadwal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_matkul` int DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Offline',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` VALUES (1,1,'Senin','08:00:00','10:30:00','R.301','Offline'),(2,2,'Selasa','10:00:00','12:30:00','R.205','Offline'),(3,3,'Rabu','13:00:00','16:20:00','Lab Komputer 1','Offline'),(4,4,'Kamis','08:00:00','10:30:00','Online Zoom','Online'),(5,5,'Jumat','14:00:00','16:30:00','R.102','Offline');
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matakuliah` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) DEFAULT NULL,
  `nama_matkul` varchar(100) DEFAULT NULL,
  `sks` int DEFAULT NULL,
  `dosen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

LOCK TABLES `matakuliah` WRITE;
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES (1,'STI101','Pemrograman Web',3,'Budi Santoso, M.Kom'),(2,'STI102','Basis Data',3,'Siti Aminah, M.Kom'),(3,'STI103','Algoritma',4,'Dr. Ahmad'),(4,'STI104','Jaringan Komputer',3,'Rudi Hartono, M.T'),(5,'STI105','Sistem Operasi',3,'Dr. Irwan');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tugas`
--

DROP TABLE IF EXISTS `tugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tugas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_matkul` int DEFAULT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text,
  `deadline` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Aktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tugas`
--

LOCK TABLES `tugas` WRITE;
/*!40000 ALTER TABLE `tugas` DISABLE KEYS */;
INSERT INTO `tugas` VALUES (1,1,'Membuat Web Portfolio','Buatlah web portofolio statis menggunakan HTML dan CSS.','2026-07-02 13:01:08','Belum Selesai'),(2,2,'Perancangan ERD','Rancang ERD untuk sistem perpustakaan.','2026-07-08 13:01:08','Belum Selesai'),(3,3,'Tugas Algoritma Sorting','Implementasikan bubble sort dalam PHP.','2026-06-30 13:01:08','Belum Selesai');
/*!40000 ALTER TABLE `tugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'Admin',
  `foto` varchar(255) DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin','admin@admin.com','$2y$10$kLU/ka/XoBjUJMKpFdpFl.lpkYlw0KkhI0Tn6i8gsNDmP4XVqeyPK','Admin','default.png'),(2,'Fauzan Rizki','141223011','fauzan@student.ac.id','$2y$10$MBLA/QDc.hRSR23DlawIj.80xjBsNc66nTLUymjyYR0vpnGzvy8zy','Ketua Kelas','foto3.jpg'),(3,'Najwa Tsabitah','141223012','najwa@student.ac.id','$2y$10$TiQ6b4339uJXh1gJQBXivewG9SbyuUsTnNu1IIQVN8OTjUoaXSsSO','Sekretaris','foto2.jpg'),(4,'Fikri M Sidik','141223013','fikri@student.ac.id','$2y$10$5qHpQdAZTb/.crvvcliIWuAxQyvwfhseV.4ccP..LqL4zBu4Zh5ai','Koordinator Akademik','foto1.jpg');
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

-- Dump completed on 2026-07-01 20:55:36
