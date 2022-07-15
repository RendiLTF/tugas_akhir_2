-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2022 pada 17.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(11) NOT NULL,
  `hasil` varchar(128) NOT NULL,
  `min_nilai_yi` double NOT NULL,
  `max_nilai_yi` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `hasil`, `min_nilai_yi`, `max_nilai_yi`, `id_user`, `email`) VALUES
(19, 'Diangkat', 5, 10.5, 19, 'pimpinan@gmail.com'),
(20, 'Tidak Diangkat', 4, 1, 19, 'pimpinan@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `no_ktp` varchar(28) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nik`, `no_ktp`, `nama_karyawan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `departemen`, `posisi`, `status`) VALUES
(907, 'KY00002', '3216022202970005', 'Muhamad Lutfi Ibrahim', 'L', 'Bekasi', '2022-07-01', 'Jalan Raya Pejuang Blok N4 No.16', 'Kasir', 'Staff', '2022'),
(908, 'KY00004', '3216021503990006', 'Deni Saputra Koki', 'L', 'Bekasi', '2022-07-09', 'Pondok Ungu Permai Sektor V', 'Kasir', 'Staff', '2022'),
(909, 'KY00006', '3216022202970005', 'Rendi lutfi', 'L', 'Bekasi', '2022-07-19', 'Pondok Ungu Permai Sektor V', 'Kasir', 'Staff', '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `jenis_kriteria` varchar(15) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `jenis_kriteria`, `tahun`) VALUES
(44, 'Kepribadian', 0.2, 'Benefit', '2022'),
(45, 'Skill', 0.3, 'Benefit', '2022'),
(46, 'Pengalaman Kerja', 0.2, 'Benefit', '2022'),
(47, 'Tanggung Jawab', 0.2, 'Benefit', '2022'),
(48, 'Absen', 0.1, 'Cost', '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_sub_kriteria` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_karyawan`, `id_sub_kriteria`, `tahun`) VALUES
(436, 907, 38, '2022'),
(437, 907, 42, '2022'),
(438, 907, 45, '2022'),
(439, 907, 48, '2022'),
(440, 907, 50, '2022'),
(441, 908, 39, '2022'),
(442, 908, 41, '2022'),
(443, 908, 45, '2022'),
(444, 908, 48, '2022'),
(445, 908, 60, '2022'),
(446, 909, 39, '2022'),
(447, 909, 41, '2022'),
(448, 909, 44, '2022'),
(449, 909, 47, '2022'),
(450, 909, 50, '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ranking`
--

CREATE TABLE `tb_ranking` (
  `id_ranking` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `nilai_yi` double NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sub_kriteria`
--

CREATE TABLE `tb_sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub_kriteria` varchar(30) NOT NULL,
  `nilai_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sub_kriteria`
--

INSERT INTO `tb_sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nama_sub_kriteria`, `nilai_sub_kriteria`) VALUES
(38, 44, 'Sangat Baik', 5),
(39, 44, 'Baik', 4),
(40, 44, 'Cukup', 3),
(41, 45, 'Sangat Baik', 5),
(42, 45, 'Baik', 4),
(43, 45, 'Cukup', 3),
(44, 46, 'Sangat Baik', 5),
(45, 46, 'Baik', 4),
(46, 46, 'Cukup', 3),
(47, 47, 'Sangat Baik', 5),
(48, 47, 'Baik', 4),
(49, 47, 'Cukup', 3),
(50, 48, '<3', 2),
(52, 44, 'Kurang', 2),
(53, 44, 'Sangat Kurang', 1),
(54, 45, 'Kurang', 2),
(55, 45, 'Sangat Kurang', 1),
(56, 46, 'Kurang', 2),
(57, 46, 'Sangat Kurang', 1),
(58, 47, 'Kurang', 2),
(59, 47, 'Sangat Kurang', 1),
(60, 48, '>3', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(512) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(36, 'Pimpinan', 'Pimpinan@gmail.com', 'default.jpg', '$2y$10$fBJWpsag/eAKWIX90/rvh.NCM1rdm8V66LPIa98nbDAeo/r6JQj4W', 2, 1, 1656610227),
(37, 'Kabag Kasir', 'kabag2@gmail.com', 'default.jpg', '$2y$10$G7tm3qPVRkMf5rE6ynaGuOxiij2bKZyTw29yIIQocI11rTr4RWhVu', 4, 1, 1656610289),
(38, 'Kabag Waiters', 'kabag3@gmail.com', 'default.jpg', '$2y$10$xVdoZc7hXaw4mx/O3kUlPuicbEWKQMqDgatwsaSFVWiCuQwwgTaY2', 5, 1, 1656610308),
(39, 'Kabag Koki', 'kabag4@gmail.com', 'default.jpg', '$2y$10$BYlNpoRAitH2qXrj.rnRneIJU0T57mZm1amCaD420D8u/7jHkmNGq', 6, 1, 1656610327),
(40, 'HRD', 'hrd@gmail.com', 'default.jpg', '$2y$10$KXPCF0SmIoLpl/IfnMoyv.Gl9k7Jg4rcCMUQD7rtTyUV5dgB6nmbS', 1, 1, 1656610522);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Hrd'),
(2, 'Pimpinan'),
(4, 'Kabag Kasir'),
(5, 'Kabag Waiters'),
(6, 'Kabag Koki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_kriteria` (`id_sub_kriteria`);

--
-- Indeks untuk tabel `tb_ranking`
--
ALTER TABLE `tb_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indeks untuk tabel `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT untuk tabel `tb_ranking`
--
ALTER TABLE `tb_ranking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penilaian_ibfk_2` FOREIGN KEY (`id_sub_kriteria`) REFERENCES `tb_sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  ADD CONSTRAINT `tb_sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
