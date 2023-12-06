-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 08.19
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `user`, `pass`, `level`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(2, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status` enum('menikah','belum menikah') NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `no_hp`, `email`, `foto`) VALUES
('23456789', 'dewakipas', 'kipas', '2022-05-30', 'laki-laki', 'Islam', 'menikah', '7276178930', 'kps@gmail.com', 'img-8.png'),
('35478787', 'ahtaurkun', 'wanpis', '2019-02-12', 'perempuan', 'Islam', 'belum menikah', '72932793702', 'ah@gmail.com', 'img-5.png'),
('787979', 'landofdawn', 'mobile', '2010-06-22', 'perempuan', 'Kristen Katolik', 'belum menikah', '982328032', 'lol@gmail.com', 'img-6.png'),
('902901', 'denismuh SPd', 'isekai', '2022-05-30', 'perempuan', 'Hindu', 'belum menikah', '93400320', 'muden@gmail.com', 'users-4.png'),
('99992', 'syukrons', 'arab', '1999-02-09', 'laki-laki', 'Islam', 'menikah', '098212121', 'syuk@gmail.com', 'img-5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hari`
--

CREATE TABLE `tbl_hari` (
  `kode_hari` varchar(15) NOT NULL,
  `nama_hari` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hari`
--

INSERT INTO `tbl_hari` (`kode_hari`, `nama_hari`) VALUES
('12144', 'Selasa'),
('12332', 'Senin'),
('45665', 'Jumat'),
('54543', 'Rabu'),
('65344', 'Kamis'),
('83928', 'Sabtu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `kode_hari` varchar(15) NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `kode_kelas` varchar(15) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_waktu`, `kode_hari`, `kode_mapel`, `kode_kelas`, `nip`, `tahun_ajaran`) VALUES
(56556, 32324, '54543', '76989', '88888', '35478787', '2015'),
(78787, 13234, '83928', '32424', '76767', '902901', '2029'),
(90390, 32324, '12332', '779', '88888', '99992', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('0987', 'TEKNIK INFORMATIKA'),
('09990', 'TEKNOLOGI INFORMASI'),
('123', 'SISTEM INFORMASI'),
('232', 'SISTEM INFORMASI'),
('5654', 'HUKUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `wali_kelas` varchar(20) NOT NULL,
  `semester` int(8) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kode_kelas`, `nama_kelas`, `tingkat`, `wali_kelas`, `semester`, `tahun`) VALUES
('76767', 'ganjil', 2, '787979', 3, '2003'),
('88888', 'genap', 1, '23456789', 1, '2001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `kode_mapel` varchar(6) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kode_mapel`, `nama_mapel`, `semester`, `kode_jurusan`) VALUES
('090', 'kalkulus', 2, 'TEKNIK'),
('32424', 'arsitektur komputer', 4, 'SISTEM'),
('76989', 'struktur data', 1, '09990'),
('779', 'kalkulus', 2, '123'),
('799', 'instalasi dan troubleshooting', 3, '5654'),
('8303', 'arsitektur komputer', 2, '232'),
('89898', 'struktur data', 8, '0987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('20TI027', 'hari', 'sumbawa', '2001-11-04', 'perempuan', 'Islam', 'mataram', '082359321306', 'img-1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_waktu`
--

CREATE TABLE `tbl_waktu` (
  `id_waktu` int(11) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id_waktu`, `jam_masuk`, `jam_keluar`) VALUES
(13234, '12:47:00', '16:51:00'),
(32324, '14:46:00', '16:43:00'),
(54576, '11:40:00', '13:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tbl_hari`
--
ALTER TABLE `tbl_hari`
  ADD PRIMARY KEY (`kode_hari`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT untuk tabel `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54658;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
