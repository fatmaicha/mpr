 Server: localhost  -   Database: pesanan  -   Table: tbl_pemesanan
 
-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 04:08 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemesanan` (
  `id` int(5) NOT NULL auto_increment,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jeniskelamin` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `notlp` varchar(200) NOT NULL,
  `pencukur` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `nama`, `alamat`, `jeniskelamin`, `model`, `notlp`, `pencukur`) VALUES
(20, 'aji', 'jepara', 'laki-laki', 'bross', '089890678456', 'budiharto'),
(19, 'aji', 'jepara', 'laki-laki', '', '', ''),
(18, 'nanda', 'jepara taman siswa', 'laki-laki', 'bross', '089345678902', 'fadli');

