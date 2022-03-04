-- phpMyAdmin SQL Dump
-- version 2.8.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 04, 2022 at 04:24 PM
-- Server version: 5.0.20
-- PHP Version: 5.1.2
-- 
-- Database: `selter`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `file_peserta`
-- 

CREATE TABLE `file_peserta` (
  `id_file` int(10) NOT NULL auto_increment,
  `id_pilih` int(10) NOT NULL,
  `file_1` varchar(500) collate latin1_general_ci NOT NULL,
  `file_2` varchar(500) collate latin1_general_ci NOT NULL,
  `file_3` varchar(500) collate latin1_general_ci NOT NULL,
  `file_4` varchar(500) collate latin1_general_ci NOT NULL,
  `file_5` varchar(500) collate latin1_general_ci NOT NULL,
  `file_6` varchar(500) collate latin1_general_ci NOT NULL,
  `file_7` varchar(500) collate latin1_general_ci NOT NULL,
  `file_8` varchar(500) collate latin1_general_ci NOT NULL,
  `file_9` varchar(500) collate latin1_general_ci NOT NULL,
  `file_10` varchar(500) collate latin1_general_ci NOT NULL,
  `file_11` varchar(500) collate latin1_general_ci NOT NULL,
  `file_12` varchar(500) collate latin1_general_ci NOT NULL,
  `file_13` varchar(500) collate latin1_general_ci NOT NULL,
  `file_14` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_file`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `file_peserta`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jabatan`
-- 

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL auto_increment,
  `id_periode` int(10) NOT NULL,
  `nama_jabatan` varchar(500) collate latin1_general_ci NOT NULL,
  `esselon` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_jabatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `jabatan`
-- 

INSERT INTO `jabatan` VALUES (5, 1, 'JPTP. SEKRETARIS DEWAN PERWAKILAN RAKYAT DAERAH', 'II.b');
INSERT INTO `jabatan` VALUES (4, 1, 'JPTP. KEPALA BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN ', 'II.b');
INSERT INTO `jabatan` VALUES (6, 1, 'JPTP. KEPALA BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH', 'II.b');
INSERT INTO `jabatan` VALUES (7, 1, 'JPTP. DINAS PENDIDIKAN', 'II.b');
INSERT INTO `jabatan` VALUES (8, 1, 'JPTP. DINAS KESEHATAN ', 'II.b');
INSERT INTO `jabatan` VALUES (9, 1, 'JPTP. DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'II.b');
INSERT INTO `jabatan` VALUES (10, 1, 'JPTP. DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN ', 'II.b');
INSERT INTO `jabatan` VALUES (11, 1, 'JPTP. DINAS KOMUNIKASI DAN INFORMATIKA', 'II.b');

-- --------------------------------------------------------

-- 
-- Table structure for table `pengumuman`
-- 

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(6) NOT NULL auto_increment,
  `nama` varchar(500) collate latin1_general_ci NOT NULL,
  `lokasi` varchar(500) collate latin1_general_ci NOT NULL,
  `status` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pengumuman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `pengumuman`
-- 

INSERT INTO `pengumuman` VALUES (1, 'nama', 'files/File-829b0aff850096312fb77de3c98129a0.docx', 'Aktif');

-- --------------------------------------------------------

-- 
-- Table structure for table `periode`
-- 

CREATE TABLE `periode` (
  `id_periode` int(10) NOT NULL auto_increment,
  `tahun` varchar(10) collate latin1_general_ci NOT NULL,
  `bulan` varchar(30) collate latin1_general_ci NOT NULL,
  `status` varchar(10) collate latin1_general_ci NOT NULL,
  `kd_unik` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_periode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `periode`
-- 

INSERT INTO `periode` VALUES (1, '2022', 'Maret - Mei', 'Aktif', 'iHyIB5xBthDt');

-- --------------------------------------------------------

-- 
-- Table structure for table `peserta`
-- 

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL auto_increment,
  `id_periode` int(10) NOT NULL,
  `gelar_dpn` varchar(10) collate latin1_general_ci NOT NULL,
  `nama` varchar(500) collate latin1_general_ci NOT NULL,
  `gelar_blk` varchar(20) collate latin1_general_ci NOT NULL,
  `nip` varchar(30) collate latin1_general_ci NOT NULL,
  `jabatan` varchar(100) collate latin1_general_ci NOT NULL,
  `golongan` varchar(30) collate latin1_general_ci NOT NULL,
  `skpd` varchar(100) collate latin1_general_ci NOT NULL,
  `instansi` varchar(100) collate latin1_general_ci NOT NULL,
  `no_telp` varchar(50) collate latin1_general_ci NOT NULL,
  `pass` varchar(500) collate latin1_general_ci NOT NULL,
  `tgl_daftar` varchar(100) collate latin1_general_ci NOT NULL,
  `kd_unik` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_peserta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `peserta`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `pilih_jabatan`
-- 

CREATE TABLE `pilih_jabatan` (
  `id_pilih` int(10) NOT NULL auto_increment,
  `id_peserta` int(10) NOT NULL,
  `id_periode` int(10) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  `kd_unik` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pilih`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `pilih_jabatan`
-- 

INSERT INTO `pilih_jabatan` VALUES (3, 5, 1, 4, '02-03-2022, 4:43 pm', 'k2652L2S11O8');
INSERT INTO `pilih_jabatan` VALUES (4, 7, 1, 5, '04-03-2022, 2:37 pm', '35J72Ux15AeL');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_golongan`
-- 

CREATE TABLE `tb_golongan` (
  `id_gol` int(3) NOT NULL auto_increment,
  `golongan` varchar(40) NOT NULL,
  PRIMARY KEY  (`id_gol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `tb_golongan`
-- 

INSERT INTO `tb_golongan` VALUES (1, 'Pembina Utama (IV/e)');
INSERT INTO `tb_golongan` VALUES (2, 'Pembina Utama Madya (IV/d)');
INSERT INTO `tb_golongan` VALUES (3, 'Pembina Utama Muda (IV/c)');
INSERT INTO `tb_golongan` VALUES (4, 'Pembina Tingkat I (IV/b)');
INSERT INTO `tb_golongan` VALUES (5, 'Pembina (IV/a)');
INSERT INTO `tb_golongan` VALUES (6, 'Penata Tingkat I (III/d)');
INSERT INTO `tb_golongan` VALUES (7, 'Penata  (III/c)');
INSERT INTO `tb_golongan` VALUES (8, 'Penata Muda Tingkat I (III/b)');
INSERT INTO `tb_golongan` VALUES (9, 'Penata Muda (III/a)');
INSERT INTO `tb_golongan` VALUES (10, 'Pengatur Tingkat I (II/d)');
INSERT INTO `tb_golongan` VALUES (11, 'Pengatur  (II/c)');
INSERT INTO `tb_golongan` VALUES (12, 'Pengatur Muda Tingkat I (II/b)');
INSERT INTO `tb_golongan` VALUES (13, 'Pengatur Muda (II/a)');
INSERT INTO `tb_golongan` VALUES (14, 'Juru Tingkat I (I/d)');
INSERT INTO `tb_golongan` VALUES (15, 'Juru  (I/c)');
INSERT INTO `tb_golongan` VALUES (16, 'Juru Muda Tingkat I (I/b)');
INSERT INTO `tb_golongan` VALUES (17, 'Juru Muda (I/a)');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `id_periode` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pswd` varchar(1000) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (2, 0, 'Luki Dwi Janarko', '3351374649a3645cf743feafeb13c2df', 'luki_dije@yahoo.co.id', '', 'Admin', '12-Jan-2016 01:49:58');
INSERT INTO `users` VALUES (52, 1, 'FIRDAUS NOORAHMAN', 'e10adc3949ba59abbe56e057f20f883e', '198511252010011009', '123456', 'Admin', '03-03-2022, 10:00 pm');
