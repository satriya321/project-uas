-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 07.45
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `noanggota` varchar(10) NOT NULL,
  `namaanggota` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `telponanggota` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `statusanggota` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`noanggota`, `namaanggota`, `tempatlahir`, `telponanggota`, `alamat`, `statusanggota`, `password`) VALUES
('00000001', 'Satriya', 'Denpasar', '0812345678911', 'Denpasar, Bali', 'Status', 'admin'),
('0000023', 'okta dinata', 'tabanan', '085123543765', 'kamasan,tabanan', 'Aktif', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `nobuku` varchar(10) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `statusbuku` varchar(255) NOT NULL,
  `jenisbuku` varchar(255) NOT NULL,
  `tahunterbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`nobuku`, `judulbuku`, `pengarang`, `penerbit`, `statusbuku`, `jenisbuku`, `tahunterbit`) VALUES
('0000165', 'tutorial phpmyadmin', 'ahmad', '2009', 'Ada', 'Teknologi', '2010-11-12'),
('12345678', 'tutorial java', 'Peter', '2002', 'Status', 'Status', '2003-10-20'),
('234523', 'terbitlah terang', 'satriya', '2002', 'Ada', 'Novel', '2003-11-02'),
('8634521', 'toturial CRUD', 'jhon', '1999', 'Ada', 'Teknologi', '2000-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `nobuku` varchar(10) NOT NULL,
  `noanggota` varchar(10) NOT NULL,
  `namaanggota` varchar(50) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `denda` float(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`nobuku`, `noanggota`, `namaanggota`, `judulbuku`, `tanggalpinjam`, `tanggalkembali`, `denda`) VALUES
('546352221', '00000034', 'haiko', 'cara berbisnis', '2022-03-03', '2022-03-09', 1.000),
('8675697674', '0000078', 'faisal', 'motivasi hidup', '2022-02-02', '2022-02-08', 0.000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `harga_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `harga_total`) VALUES
(1, '2022-06-02', '5000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi` int(10) NOT NULL,
  `kode_buku` int(10) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga_denda` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`noanggota`);

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`nobuku`);

--
-- Indeks untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`nobuku`,`noanggota`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
