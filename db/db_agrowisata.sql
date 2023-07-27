-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2023 at 06:07 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agrowisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`) VALUES
(1, 'galeri-16838119328352.jpg'),
(2, 'galeri-16838119323018.jpg'),
(3, 'galeri-16838119326512.jpg'),
(4, 'galeri-16838119327179.jpg'),
(5, 'galeri-16840440602844');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id_meta` int NOT NULL,
  `kunci` varchar(30) NOT NULL,
  `value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id_meta`, `kunci`, `value`) VALUES
(1, 'harga_tiket', '20000'),
(2, 'title', 'Agrowisata Sentra Jeruk Kerinci'),
(3, 'deskripsi', 'Merupakan destinasi wisata yang menawarkan pengalaman unik bagi pengunjung untuk menjelajahi keindahan kebun jeruk yang indah dan melimpah. Selain menikmati pemandangan yang menakjubkan, pengunjung juga dapat belajar tentang budidaya jeruk yang baik dan benar. Dengan suasana alam yang menenangkan dan udara yang segar, Agrowisata Sentra Jeruk Kerinci adalah tempat yang sempurna untuk mengisi liburan Anda dengan pengalaman yang menyenangkan dan bermanfaat.');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int NOT NULL,
  `uid_testimoni` varchar(100) NOT NULL,
  `nama_pengisi` varchar(40) NOT NULL,
  `email_pengisi` varchar(50) NOT NULL,
  `bintang` int NOT NULL,
  `isi_testimoni` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `uid_testimoni`, `nama_pengisi`, `email_pengisi`, `bintang`, `isi_testimoni`, `created_at`) VALUES
(1, '645db1b0e4ccd1683861936', 'Fernandes', 'fernandes@gmail.com', 5, 'Mantap jiwa. Agrowisata UD. SENTRA JERUK KERINCI sangat bagus dan bisa dijadikan tempat wisata keluarga yang nyaman dan sehat', '2023-05-12 03:25:36'),
(2, '645db21b779431683862043', 'Rian Dani', 'riandani@gmail.com', 5, 'Wisata Agro ini sangat bagus dan bisa diandalkan. Saya dan keluarga merasa sangat senang berada di sini.\r\nSemoga semakin maju ke depannya.', '2023-05-12 03:27:23'),
(3, '645db2933ca1d1683862163', 'Budi', 'budi@gmail.com', 5, 'Saya sangat senang mengunjungi kebun jeruk ini. Saya belajar banyak tentang cara merawat pohon jeruk dan memetik buah yang baik. Selain itu, saya juga menikmati kesegaran udara dan pemandangan yang indah di sekitar kebun jeruk. Saya pasti akan merekomendasikan tempat ini kepada teman dan keluarga saya!', '2023-05-12 03:29:23'),
(4, '645db37d9be9c1683862397', 'Lina', 'lina@gmail.com', 5, 'Saya dan keluarga saya benar-benar menikmati pengalaman agrowisata di kebun jeruk. Kami mendapatkan penjelasan yang sangat baik tentang berbagai jenis jeruk dan cara merawatnya dari petugas kebun jeruk yang sangat ramah. Anak-anak saya bahkan bisa memetik buah sendiri dan membawa pulang hasil jerih payah mereka. Kami sangat merekomendasikan pengalaman ini kepada siapa saja yang mencari aktivitas menyenangkan di luar ruangan!', '2023-05-12 03:33:17'),
(5, '645db3a44891c1683862436', 'David', 'david@gmail.com', 4, 'Saya datang ke kebun jeruk ini untuk mencari inspirasi tentang bagaimana menanam dan merawat tanaman di kebun saya sendiri. Saya sangat senang karena mendapatkan banyak informasi berguna dari para ahli kebun jeruk di sini. Mereka juga memberikan tips tentang pemupukan dan pengendalian hama yang sangat bermanfaat. Saya sangat merekomendasikan kebun jeruk ini kepada siapa saja yang ingin belajar tentang pertanian atau hanya mencari tempat yang tenang untuk bersantai.', '2023-05-12 03:33:56'),
(6, '645f9b6e179d31683987310', 'Nuraini', 'nuraini@gmail.com', 4, 'Sangat cocok untuk dijadikan tempat berlibur keluarga.', '2023-05-13 14:15:10'),
(7, '64607a87888851684044423', 'Randi', 'randi@gmail.com', 5, 'Pelayanan di sini sangat bagus. Kita diarahkan dan ditunjukkan tempat-tempat menarik serta diajarkan bagaimana cara budidaya jeruk yang baik. Recommended untuk liburan keluarga yang bermanfaat.', '2023-05-14 06:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int NOT NULL,
  `no_order` varchar(256) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `nohp_pembeli` varchar(13) NOT NULL,
  `harga_tiket` int NOT NULL,
  `jumlah_tiket` int NOT NULL,
  `harga_total` int NOT NULL,
  `tanggal_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `no_order`, `nama_pembeli`, `nohp_pembeli`, `harga_tiket`, `jumlah_tiket`, `harga_total`, `tanggal_beli`, `status`) VALUES
(1, '#TKT-20230512083430-645DFA163E6F15182', 'Budi', '0823379238192', 20000, 3, 60000, '2023-05-12 08:38:04', 0),
(2, '#TKT-20230513032841-645F03E9477FA9342', 'Rudi Hartono', '02837878231', 20000, 4, 80000, '2023-05-13 03:28:54', 1),
(3, '#TKT-20230513033012-645F044475DC81918', 'Rina Novita', '810237912', 20000, 2, 40000, '2023-05-13 03:30:23', 0),
(4, '#TKT-20230513141047-645F9A675FBEE7758', 'Nuraini', '832', 20000, 2, 40000, '2023-05-13 14:13:19', 1),
(5, '#TKT-20230514060506-64607A12CF0084631', 'Randi', '082176371', 20000, 3, 60000, '2023-05-14 06:06:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '$2y$10$/M3FtC71a7FfQU/7G3jLQOawjmPmfBVe9xVDIDBBzsdQo1EdpJTHO', 'Administrator', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id_meta`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id_meta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
