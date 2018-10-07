-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2018 pada 18.52
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` int(11) NOT NULL,
  `kode_login` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `jk_guru` varchar(15) NOT NULL,
  `tempatlahir_guru` varchar(25) NOT NULL,
  `tgllahir_guru` varchar(25) NOT NULL,
  `agama_guru` varchar(15) NOT NULL,
  `notelp_guru` varchar(15) NOT NULL,
  `email_guru` varchar(30) NOT NULL,
  `foto_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `kode_login`, `nik`, `nama_guru`, `alamat_guru`, `jk_guru`, `tempatlahir_guru`, `tgllahir_guru`, `agama_guru`, `notelp_guru`, `email_guru`, `foto_guru`) VALUES
(7, 1538869924, '1234', 'I Gede Yoga Permana Putra', 'Jln Kertapura Gg. Segina IIIB No.26x', 'Lak-laki', 'Denpasar', '22 Juli 2001', 'Hindu', '081236540148', 'permana0912@gmail.com', ''),
(8, 1538870738, '1235', 'Made Deva Mahayana', 'Jln Kenyeri No. 25z', 'Lak-laki', 'Denpasar', '13 Agustus 2001', 'Hindu', '081236540148', 'deva@yahoo.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL,
  `tingkat_kelas` varchar(25) NOT NULL,
  `ruangan_kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `nama_kelas`, `tingkat_kelas`, `ruangan_kelas`) VALUES
(1, 'RPL 3', 'XI', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `kode_login` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`kode_login`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 'Admin'),
(1538869924, 'yoga', '123', 'Guru'),
(1538870738, 'Deva', '123', 'Guru'),
(1538927873, '16bagusyudhistira', '1234', 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matpel`
--

CREATE TABLE `tb_matpel` (
  `kode_matpel` int(11) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL,
  `jumlah_jam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matpel`
--

INSERT INTO `tb_matpel` (`kode_matpel`, `nama_matpel`, `jumlah_jam`) VALUES
(1, 'Sejarah Indonesia', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `kode_siswa` int(11) NOT NULL,
  `kode_login` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `agama_siswa` varchar(20) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `kelas_siswa` varchar(10) NOT NULL,
  `tempatlahir_siswa` varchar(25) NOT NULL,
  `tgllahir_siswa` varchar(25) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `notelp_ortu` varchar(15) NOT NULL,
  `img_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`kode_siswa`, `kode_login`, `nis`, `nama_siswa`, `agama_siswa`, `alamat_siswa`, `jk_siswa`, `kelas_siswa`, `tempatlahir_siswa`, `tgllahir_siswa`, `nama_ayah`, `notelp_ortu`, `img_siswa`) VALUES
(4, 1538927873, '1234', 'Ngurah Bagus Yudhistira', 'Budha', 'Jln Kepaon No 25', 'Lak-laki', 'XII RPL 3', 'Denpasar', '15 Agustus 2001', 'Selamet', '082810701921', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`),
  ADD KEY `tb_guru_ibfk_1` (`kode_login`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`kode_login`);

--
-- Indeks untuk tabel `tb_matpel`
--
ALTER TABLE `tb_matpel`
  ADD PRIMARY KEY (`kode_matpel`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`kode_siswa`),
  ADD KEY `tb_siswa_ibfk_1` (`kode_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kode_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kode_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `kode_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1538927874;

--
-- AUTO_INCREMENT untuk tabel `tb_matpel`
--
ALTER TABLE `tb_matpel`
  MODIFY `kode_matpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `kode_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`kode_login`) REFERENCES `tb_login` (`kode_login`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`kode_login`) REFERENCES `tb_login` (`kode_login`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
