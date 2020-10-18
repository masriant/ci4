-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 29 Sep 2020 pada 22.30
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_description` text DEFAULT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `lakip`;
CREATE TABLE IF NOT EXISTS `lakip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `lakip`;
CREATE TABLE IF NOT EXISTS `lakip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `lakip`;

CREATE TABLE IF NOT EXISTS `lakip` ( `id` int(11) NOT NULL AUTO_INCREMENT, `judul` varchar(255) NOT NULL, `slug` varchar(255) NOT NULL, `description` text DEFAULT NULL, `penulis` varchar(255) NOT NULL, `penerbit` varchar(255) NOT NULL, `sampul` varchar(255) NOT NULL, `created_at` datetime DEFAULT NULL, `updated_at` datetime DEFAULT NULL, `deleted_at` datetime DEFAULT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `lakip`;

CREATE TABLE IF NOT EXISTS `lakip` ( `id` int(11) NOT NULL AUTO_INCREMENT, `judul` varchar(255) NOT NULL, `slug` varchar(255) NOT NULL, `description` text DEFAULT NULL, `penulis` varchar(255) NOT NULL, `penerbit` varchar(255) NOT NULL, `sampul` varchar(255) NOT NULL, `created_at` datetime DEFAULT NULL, `updated_at` datetime DEFAULT NULL, `deleted_at` datetime DEFAULT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
