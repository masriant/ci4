-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2020 pada 21.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `wkt_datang` varchar(255) NOT NULL,
  `wkt_pulang` varchar(255) NOT NULL,
  `jmlh_rombongan` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `no_hp_penanggung` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;