-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Apr 2020 pada 16.37
-- Versi Server: 5.6.43-log
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-virus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyebaran`
--

CREATE TABLE `tbl_penyebaran` (
  `id` int(11) NOT NULL,
  `nama_wilayah` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(25) DEFAULT NULL,
  `nama_virus` varchar(255) DEFAULT NULL,
  `jml_korban` int(11) DEFAULT NULL,
  `jml_meninggal` int(11) DEFAULT NULL,
  `jml_sembuh` int(11) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `radius` int(11) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyebaran`
--

INSERT INTO `tbl_penyebaran` (`id`, `nama_wilayah`, `provinsi`, `kabupaten`, `kecamatan`, `nama_virus`, `jml_korban`, `jml_meninggal`, `jml_sembuh`, `latitude`, `longitude`, `radius`, `warna`, `foto`) VALUES
(1, 'Griya M-45', 'Jawa Tengah', 'Kota Semarang', 'Kecamatan Tembalang', 'Virus Hanta', 22, 2, 20, '-6.995607632258654', '110.41602669811331', 50000, 'yellow', ''),
(2, 'Perumahan Sukorejo Indah', 'Jawa Timur', 'Kota Kediri', 'Kecamatan Ngasem', 'Virus Cacar Air', 55, 7, 48, '-7.852498637813016', '112.01913710859974', 30000, 'green', ''),
(4, 'Kampung Inggris', 'Jawa Timur', 'Kabupaten Kediri', 'Kecamatan Pare', 'Virus Flu Burung', 1200, 14, 1186, '-7.80556171687671', '112.00012323840808', 70000, 'blue', NULL),
(5, 'Temuwangi', 'Jawa Tengah', 'Klaten', 'Pedan', 'Virus Influenza', 6, 4, 2, '-7.71677532615073', '110.70717577467552', 10000, 'green', 'image-200408-14da92f2bd.jpg'),
(6, 'Baleharjo', 'Yogyakarta', 'Gunung Kidul', 'Wonosari', 'Virus Influenza', 18, 3, 15, '-7.974917742990998', '110.61396332286505', 10000, 'green', 'image-200408-d0e7b521c1.jpg'),
(7, 'Dr. Harun II', 'Lampung', 'Bandar Lampung', 'Kota Baru', 'Virus Rabies', 4, 1, 3, '-5.419319145930335', '105.2744422862872', 10000, 'green', 'image-200408-799974951f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `role_id`, `password`) VALUES
(1, 'jonathan', 1, 'a786ca261c163cc97065894a95641f62398de063a3f70532a12623914ecd6ce03d083122a2e2d6c3b5a549acdb9435727fd049b468e13be933bcf66a8fcee261'),
(2, 'divi', 1, 'a786ca261c163cc97065894a95641f62398de063a3f70532a12623914ecd6ce03d083122a2e2d6c3b5a549acdb9435727fd049b468e13be933bcf66a8fcee261'),
(3, 'mariah', 2, '23170c6cab5794dbe33f6a3d84ad18a9a3143d09baab70d18d5440ac41ee4a36dbdfa1a2b6d58b998d2bd1f61a00cb1e72fa46360a28736cd88d46c5eab78179');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 4),
(9, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Pemetaan', 'operator', 'fa fa-dashboard', 1),
(2, 2, 'Data Penyebaran', 'operator/data_penyebaran', 'fa fa-table', 1),
(3, 1, 'Input Data', 'admin/input', 'fa fa-plus', 1),
(4, 2, 'Carto (Negara Jerman)', 'operator/carto', 'fa fa-desktop', 1),
(5, 2, 'Logout', 'auth/logout', 'fas fa-sign-out-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_role` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_menu` (`menu_id`),
  ADD KEY `fk_menu` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_menu` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `fk_sub_menu` FOREIGN KEY (`menu_id`) REFERENCES `user_sub_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `fk_user_menu` FOREIGN KEY (`menu_id`) REFERENCES `user_role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
