-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2018 pada 15.33
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `conquer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_judul` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`cat_id`, `cat_judul`) VALUES
(1, 'Pendidikan'),
(4, 'Networking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(50) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(50) NOT NULL,
  `post_judul` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `post`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten`
--

CREATE TABLE IF NOT EXISTS `tb_konten` (
  `idkonten` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `idmenu` int(10) NOT NULL,
  `publish` enum('T','F') NOT NULL DEFAULT 'T',
  PRIMARY KEY (`idkonten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
  `idmenu` int(10) NOT NULL AUTO_INCREMENT,
  `nmmenu` varchar(100) NOT NULL,
  `urutan` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `publish` enum('T','F') NOT NULL DEFAULT 'T',
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`idmenu`, `nmmenu`, `urutan`, `deskripsi`, `publish`) VALUES
(1, 'Home', 1, 'Ini adalah home', 'T'),
(2, 'About', 2, 'Ini adalah about', 'T'),
(3, 'Kontak', 3, 'Ini adalah kontak', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'putra', 'bf4ee81f020bfd6dd42b3d24be6a1ab8'),
(18, 'raka', '711f423a3740668e1dce060c6024a3f7'),
(20, 'nesa', 'd0f16a78ef8b3fccd1fd9e57c5d5c376'),
(22, 'agusto', '3163487a80bdf87a350b2b38fc21cf3f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
