-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 04:28 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conquer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(20) NOT NULL,
  `cat_judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_judul`) VALUES
(1, 'Pendidikan'),
(5, 'Jaringan'),
(6, 'Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(50) NOT NULL,
  `post_category_id` int(50) NOT NULL,
  `post_judul` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_category_id`, `post_judul`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(13, 1, 'S1 Ilmu Komputer', 'Group Keren', '2018-05-10', 'a.JPG', '							Sekarang dan masa akan datang, setiap perusahaan melakukan investasi dibidang IT guna menciptakan diferensiasi yang kompetitif terhadap pesaing.\r\n\r\nInformasi yang diproses dengan benar akan menjamin informasi selalu tersedia dengan akurat, lengkap dan aman serta mampu menciptakan integrasi dan perpindahan informasi diseluruh unit bisnis perusahaan guna mendukung proses pengambilan keputusan yang tepat.\r\n\r\nProgram Studi S1ilmu Komputer memberikan pemahaman, keterampilan dan kompetensi praktis dalam upaya pemberdayaan proses manajemen data menjadi informasi untuk meningkatkan kinerja dan daya saing perusahaan.							', 'S1 Ilmu Komputer', '4', 'Publised'),
(14, 1, 'S1 Ilmu Komputer', 'Group Keren', '2018-05-10', 'Hydrangeas.jpg', '	Ilmu Komputer adalah situs Belajar dalam membuat suatu perogram atau menciptakan suatu aplikasi dalam memecahkan masalah yang dapat dibantu dengan teknologi. Duniailkom didedikasikan bagi anda yang ingin mempelajari tentang dunia ilmu komputer. Saat ini duniailkom masih berfokus kepada tutorial web programming, seperti Tutorial HTML, Tutorial CSS, Tutorial PHP, Tutorial JavaScript, Tutorial MySQL, Tutorial WordPress, Tutorial jQuery dan Tutorial cPanel (Web Online).			', 'Jaringan', '4', 'Published'),
(17, 1, 'Sangat Bermanfaat :)', 'Nesa', '2018-05-10', 'f59a9434b34c4b7bb3cfafc6c43c0f3c.jpg', 'salam jaya S1 Ilmu Komputer Universitas Lampung.', 'umach', '4', 'makasih kakak atas pengetahuannya.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konten`
--

CREATE TABLE `tb_konten` (
  `idkonten` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `idmenu` int(10) NOT NULL,
  `publish` enum('T','F') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konten`
--

INSERT INTO `tb_konten` (`idkonten`, `judul`, `isi`, `idmenu`, `publish`) VALUES
(1, 'HOME', '<div class=\"col-lg-8\">\r\n          <img src=\"img/anime.jpg\" alt=\"error\" width=\"700\" height=\"400\">\r\n        </div>\r\n        <!-- /.col-lg-8 -->\r\n<div class=\"col-lg-4\">\r\n\r\n<h3>S1 Ilmu Komputer</h3>\r\n         <hr>\r\n					\r\n<div class=\"well\" align=\"justify\">\r\n<h6>Ilmu Komputer adalah suatu jurusan yang mempelajari jaringan, membuat aplikasi, analisis sistem dan mengembangkan sistem. Sedangkan komputer dalam bahasa Inggris ialah computer yang merupakan suatu ilmu yang mempelajari mengenai komputer dari hardware maupun softwarenya.\r\n</h6>\r\n<hr>			\r\n       <div class=\"row\">\r\n		<div class=\"col-lg-6\">	\r\n						\r\n			<?php\r\n				\r\n				$query=\'select * from category\';\r\n				$select_category=mysqli_query($connection, $query);\r\n				while($row=mysqli_fetch_assoc($select_category)){\r\n				$cat_id=$row[\'cat_id\'];\r\n				$cat_judul=$row[\'cat_judul\'];	\r\n				\r\n			?>	 \r\n							<table rules=\"none\" >\r\n							<tr>\r\n							<ul type=\"square\">\r\n								<td>\r\n								<a class=\"btn btn-primary btn-lg\" href=\"#\"><?php echo $cat_judul?></a>\r\n								</td>\r\n							</ul>\r\n							</tr>\r\n							</table>\r\n							\r\n			<?php } ?>\r\n							\r\n                        </div>\r\n                    </div>\r\n\r\n                </div>\r\n			</div>', 1, 'T'),
(2, 'ABOUT', '<div class=\"col-lg-8\" >\r\n          <img src=\"img/anime.jpg\" alt=\"error\" width=\"700\" height=\"400\">\r\n        </div>\r\n        <!-- /.col-lg-8 -->\r\n<div class=\"col-lg-4\">\r\n\r\n<h3>Web S1 Ilmu Komputer Group Keren</h3>\r\n         <hr>\r\n					\r\n<div class=\"well\" align=\"justify\">\r\n<h6>web ini berfungsi untuk menampilkan informasi yang diposting oleh Admin, yang di lengkapi dengan judul, gambar dan informasi yang disampaikan.\r\n</h6>\r\n<hr>			\r\n       <div class=\"row\">\r\n		<div class=\"col-lg-6\">	\r\n						\r\n			<?php\r\n				\r\n				$query=\'select * from category\';\r\n				$select_category=mysqli_query($connection, $query);\r\n				while($row=mysqli_fetch_assoc($select_category)){\r\n				$cat_id=$row[\'cat_id\'];\r\n				$cat_judul=$row[\'cat_judul\'];	\r\n				\r\n			?>	 \r\n							<table rules=\"none\" >\r\n							<tr>\r\n							<ul type=\"square\">\r\n								<td>\r\n								<a class=\"btn btn-primary btn-lg\" href=\"#\"><?php echo $cat_judul?></a>\r\n								</td>\r\n							</ul>\r\n							</tr>\r\n							</table>\r\n							\r\n			<?php } ?>\r\n							\r\n                        </div>\r\n                    </div>\r\n\r\n                </div>\r\n			</div>', 2, 'T'),
(3, 'CONTACT', '<div class=\"col-lg-8\">\r\n          <img src=\"img/anime.jpg\" alt=\"error\" width=\"700\" height=\"400\">\r\n        </div>\r\n        <!-- /.col-lg-8 -->\r\n<div class=\"col-lg-4\">\r\n\r\n         <h3>Contact :</h3>\r\n         <hr>\r\n					\r\n<div class=\"well\">\r\n<h6>\r\nName Group :<br><hr>\r\n1. Putra Pribowo<br>\r\n2. Raka Akbar Hartolo<br>\r\n3. Siti Bunga Nesa<br>\r\n4. Agusto<br>\r\nName Website : S1 Ilmu Komputer\r\n</h6>\r\n<hr>\r\n\r\n<div class=\"row\">\r\n		<div class=\"col-lg-6\">	\r\n\r\n<?php\r\n$query=\'select * from category\';	$select_category=mysqli_query($connection, $query);\r\n				while($row=mysqli_fetch_assoc($select_category)){\r\n				$cat_id=$row[\'cat_id\'];\r\n				$cat_judul=$row[\'cat_judul\'];	\r\n				\r\n			?>	 \r\n							<table rules=\"none\" >\r\n							<tr>\r\n							<ul type=\"square\">\r\n								<td>\r\n								<a class=\"btn btn-primary btn-lg\" href=\"#\"><?php echo $cat_judul?></a>\r\n								</td>\r\n							</ul>\r\n							</tr>\r\n							</table>\r\n							\r\n			<?php } ?>\r\n							\r\n                        </div>\r\n                    </div>\r\n\r\n                </div>\r\n			</div>', 3, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `idmenu` int(10) NOT NULL,
  `nmmenu` varchar(100) NOT NULL,
  `urutan` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `publish` enum('T','F') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`idmenu`, `nmmenu`, `urutan`, `deskripsi`, `publish`) VALUES
(1, 'Home', 1, 'Ini adalah home', 'T'),
(2, 'About', 2, 'Ini adalah about', 'T'),
(3, 'Contact', 3, 'Ini adalah kontak', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'putra', 'bf4ee81f020bfd6dd42b3d24be6a1ab8'),
(18, 'raka', '711f423a3740668e1dce060c6024a3f7'),
(20, 'nesa', 'd0f16a78ef8b3fccd1fd9e57c5d5c376'),
(22, 'agusto', '3163487a80bdf87a350b2b38fc21cf3f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD PRIMARY KEY (`idkonten`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_konten`
--
ALTER TABLE `tb_konten`
  MODIFY `idkonten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `idmenu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
