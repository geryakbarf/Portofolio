-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 12.43
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `nama` varchar(25) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `introduction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`nama`, `ttl`, `alamat`, `introduction`) VALUES
('Gery Akbar Fauzi', 'Bandung - 1 Juni 1998', 'Manggahang 2 Rt 06 Rw 05, Baleendah, Bandung', 'Hello world ! Perkenalkan saya Gery Akbar Fauzi, saya seorang mobile dan web developer!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kemampuan`
--

INSERT INTO `kemampuan` (`id`, `nama`, `level`) VALUES
(1, 'Kotlin', '90%'),
(2, 'PHP', '80%'),
(3, 'Java', '80%'),
(4, 'Javascript', '70%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `detail` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `nama`, `detail`, `gambar`) VALUES
(1, 'Apotiku', 'Apotiku merupakan aplikasi jual beli online obat - obat medis yang biasa dijual di apotek. Pada aplikasi ini, fitur pencarian obat semakin dimudahkan dengan fitur pencarian berdasarkan zat aktif obat, sehingga memudahkan pengguna yang mendapatkan resep obat dari dokter.', 'assets/img/project/apotiku.png'),
(2, 'Awanku', 'AwanKu merupakan aplikasi media penyimpanan cloud. Dengan menggunakan aplikasi ini, semua file yang anda unggah akan disimpan di cloud server yang terbukti aman. Dan file - file anda akan bisa diakses melalui aplikasi ini dimana saja, dan kapan saja.', 'assets/img/project/awanku.png'),
(3, 'Catatanku', 'CatatanKu merupakan aplikasi untuk menulis catatan di Android. Dengan fitur \"What You See is What You Get\", anda dapat menulis catatan apapun di CatatanKu. Catatan yang berupa list, number list, checkbox, dan lain - lainnya.', 'assets/img/project/catatanku.png'),
(4, 'Smart Agriculture App', 'Smart Agriculture App merupakan aplikasi yang berbasis IoT untuk memonitoring dan mengontrol perkebunan anda. Dengan aplikasi ini, anda dapat mengontol dan menjadwal penyiraman kebun secara otomatis, memonitoring kelembapan tanah, suhu, cuaca, dan lain - lainnya.', 'assets/img/project/iot.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `tipe` enum('Sekolah','Perusahaan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama`, `instansi`, `tanggal_mulai`, `tanggal_selesai`, `tipe`) VALUES
(1, 'Teknisi Hardware', 'Kampus LPKIA', '2016-07-25', '2016-10-25', 'Perusahaan'),
(2, 'Mobile Developer', 'PT Integra Solution', '2020-04-01', '2020-05-31', 'Perusahaan'),
(3, 'Sekolah Dasar', 'SDN Cimuncang', '2005-07-01', '2011-05-01', 'Sekolah'),
(4, 'Sekolah Menengah Pertama', 'SMPN 1 Baleendah', '2011-07-01', '2014-05-01', 'Sekolah'),
(5, 'Sekolah Menengah Kejuruan', 'SMKN 2 Baleendah', '2014-07-01', '2017-05-01', 'Sekolah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
