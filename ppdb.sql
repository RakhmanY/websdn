-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 03:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(60) NOT NULL,
  `t_lahir` varchar(30) NOT NULL,
  `tl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jk` varchar(13) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_nik` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `nm_ayah` varchar(60) NOT NULL,
  `t_ayah` varchar(15) NOT NULL,
  `tl_ayah` date NOT NULL,
  `pk_ayah` varchar(30) NOT NULL,
  `pdk_ayah` varchar(10) NOT NULL,
  `gaji_ayah` varchar(30) NOT NULL,
  `nm_ibu` varchar(60) NOT NULL,
  `t_ibu` varchar(15) NOT NULL,
  `tl_ibu` date NOT NULL,
  `pk_ibu` varchar(30) NOT NULL,
  `pdk_ibu` varchar(10) NOT NULL,
  `gaji_ibu` varchar(30) NOT NULL,
  `nm_wali` varchar(60) NOT NULL,
  `t_wali` varchar(15) NOT NULL,
  `tl_wali` date NOT NULL,
  `pk_wali` varchar(30) NOT NULL,
  `pdk_wali` varchar(10) NOT NULL,
  `gaji_wali` varchar(30) NOT NULL,
  `alamat_peserta` varchar(300) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `t_badan` int(3) NOT NULL,
  `b_badan` int(3) NOT NULL,
  `bkbthnk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_peserta`, `nama_peserta`, `t_lahir`, `tl_lahir`, `agama`, `jk`, `no_kk`, `no_nik`, `email`, `no_telp`, `nm_ayah`, `t_ayah`, `tl_ayah`, `pk_ayah`, `pdk_ayah`, `gaji_ayah`, `nm_ibu`, `t_ibu`, `tl_ibu`, `pk_ibu`, `pdk_ibu`, `gaji_ibu`, `nm_wali`, `t_wali`, `tl_wali`, `pk_wali`, `pdk_wali`, `gaji_wali`, `alamat_peserta`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `propinsi`, `t_badan`, `b_badan`, `bkbthnk`) VALUES
(30, 'Yudaz A Rakhman', 'Tangerang', '1996-05-30', 'Katholik', 'Perempuan', '306745588778', '306745588778', 'akun.main300996@gmail.com', '2147483647', 'M Nurjamal', 'Tangerang', '1996-12-12', 'Wiraswasta', 'Sarjana 3', '2. Rp 1.000.000 - Rp 2.000.000', 'Nope', 'Nope', '1996-12-12', 'Pegawai Negeri Sipil', 'Sarjana 3', '2. Rp 1.000.000 - Rp 2.000.000', 'asd', 'Tangsel', '0000-00-00', 'Wiraswasta', 'Diploma 2 ', '2. Rp 1.000.000 - Rp 2.000.000', 'Tangsel Pondok Aren', 4, 4, 'Pondok Kacang Barat', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 178, 35, 'Nope'),
(35, 'Desii', 'Bintaro', '1970-01-01', 'Katholik', 'Perempuan', '306745588778', '306745588778', 'yudazauliarakhman23@gmail.com', '87820189150', 'M Nurjamal', 'Tangerang', '1970-01-01', 'Wirausaha', 'Sekolah Me', '1. Kurang dari Rp 1.000.000', 'Wasini', 'Ngawi', '2000-12-12', 'Wiraswasta', 'Sekolah Me', '2. Rp 1.000.000 - Rp 2.000.000', 'Nihil', 'Tangsel', '1970-01-01', 'Wirausaha', 'Diploma 2 ', '1. Kurang dari Rp 1.000.000', 'Jl. Masjid Lio Garut No.45', 4, 4, 'Pondok Kacang Barat', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 178, 55, 'Tidak Ada'),
(36, 'Imam', 'Tangerang', '0000-00-00', 'Islam', 'Laki - Laki', '300', '300', 'akun.main300996@gmail.com', '65478', 'M Nurjamal', 'Tangerang', '1963-10-10', 'Wirausaha', 'Sekolah Me', '3. Lebih dari Rp 2.000.000', 'Wasini', 'Ngawi', '1966-01-16', 'Pegawai Negeri Sipil', 'Sarjana 2', '3. Lebih dari Rp 2.000.000', 'Nihil', 'Nihil', '1996-12-12', 'Wiraswasta', 'Sarjana 2', '3. Lebih dari Rp 2.000.000', 'Jl. Masjid Lio Garut No.45', 4, 4, 'Pondok Kacang Barat', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 178, 55, 'Tidak Ada'),
(37, 'Desiiiiii', 'Klaten', '0000-00-00', 'Islam', 'Perempuan', '306745588778', '306745588778', 'yudazrakhman30@gmail.com', '87820189150', 'M Nurjamal', 'Tangerang', '1963-06-10', 'Wiraswasta', 'Sarjana 1', '3. Lebih dari Rp 2.000.000', 'Wasini', 'Ngawi', '1966-01-07', 'Wiraswasta', 'Sarjana 2', '3. Lebih dari Rp 2.000.000', 'Budeh', 'Makassar', '1965-10-10', 'Wirausaha', 'Sarjana 2', '3. Lebih dari Rp 2.000.000', 'Jl. Masjid Lio Garut No.45', 4, 4, 'Pondok Kacang Barat', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 178, 55, 'Tidak Ada'),
(38, 'Tes 1', 'Tes 1', '1996-05-30', 'Islam', 'Perempuan', '306745588778', '306745588778', 'yudazauliarakhman23@gmail.com', '087820189150', 'Tes 1', 'Tes 1', '1999-10-10', 'Wirausaha', 'Sekolah Da', '2. Rp 1.000.000 - Rp 2.000.000', 'Tes 1', 'Tes 1', '1998-10-10', 'Pegawai Negeri Sipil', 'Sarjana 1', '3. Lebih dari Rp 2.000.000', 'Tes 1', 'Tes 1', '1992-02-10', 'Wiraswasta', 'Sekolah Me', '3. Lebih dari Rp 2.000.000', 'Tes 1', 4, 4, 'Pondok Kacang Barat', 'Pondok Aren', 'Tangerang Selatan', 'Banten', 178, 55, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`) VALUES
(7062024, 'adm_jurtim', 'fd218327afc0a243d1eededa05142b7e', 'Desi Eka Pratiwi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7062025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
