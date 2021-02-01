-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2021 pada 04.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(100) NOT NULL,
  `no` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id`, `no`, `nama`, `tempat`, `tanggal`, `agama`, `jenis`, `alamat`, `tlp`) VALUES
(111, 7688, 'samani', 'Banjarmasin', '1991-06-20', 'Islam', 'Laki-laki', 'Jl.gerilya peradapan', '081254130919'),
(124, 7690, 'admin', 'Banjarmasin', '1990-01-12', 'Hindu', 'Laki-laki', 'jl.kelayan', '081267877812'),
(125, 7694, 'bayu', 'Bandung', '0008-07-06', 'Hindu', 'Laki-laki', 'jl.amd12', '087812781298'),
(222, 7695, 'budiman', 'budiman', '1990-10-15', 'Islam', 'Laki-laki', 'jl.vetran', '081231238932'),
(987, 7698, 'siti', 'siti', '1990-12-10', 'Islam', 'Perempuan', 'jl.kelayan B', '081267956789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `no` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` text NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`no`, `nama`, `kelas`, `tempat`, `tanggal`, `agama`, `jenis`, `alamat`, `tlp`, `id`) VALUES
(123, 'Sulaiman', '10B', 'Banjarmasin', '1987-10-12', 'Islam', 'Laki-laki', 'jl.gerilya', '081276891223', 8),
(555, 'susi', '10A', 'Kandangan', '1990-12-12', 'Kristen', 'Perempuan', 'jl.HKSN', '082189127812', 10),
(198, 'Ayuni', '11A', 'Banjarmasin', '1991-12-15', 'Islam', 'Perempuan', 'jl.komplek 10', '087812873287', 11),
(187, 'Agung', '11B', 'Barabai', '0000-00-00', 'Islam', 'Laki-laki', 'jl.banjar indah', '081289126789', 12),
(191, 'Nadia', '12A', 'Banjarmasin', '1990-11-12', 'Islam', 'Perempuan', 'jl.kelayan A', '081278892312', 13),
(909, 'Ahmad', '12B', 'Banjarmasin', '1990-12-21', 'Islam', 'Laki-laki', 'Jl.kayutangi', '081289128723', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(17, 9907, 'sam', 'Banjarmasin', '10A', '2001-06-21', 'Jl.gerilya peradapan', '081254130919', 'Islam', 'Laki-laki'),
(18, 9081, 'salamah', 'Kandangan', '10A', '2002-05-22', 'jl.kelayan B', '08217612871', 'Islam', 'Perempuan'),
(19, 1890, 'Leon', 'Banjarmasin', '10A', '2001-10-21', 'jl.kelayan B', '0812671278671', 'Islam', 'Laki-laki'),
(20, 8912, 'ari', 'Barabai', '10A', '2003-10-13', 'jl.kelayan B', '08781276287', 'Islam', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa_10b`
--

CREATE TABLE `data_siswa_10b` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa_10b`
--

INSERT INTO `data_siswa_10b` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(3, 8976, 'adi', 'Jakarta', '10B', '2002-01-21', 'jl.banjar indah', '087812768912', 'Hindu', 'Laki-laki'),
(4, 1928, 'iki', 'Banjarmasin', '10B', '2000-07-17', 'Jl.gerilya peradapan', '081267128732', 'Islam', 'Laki-laki'),
(5, 4732, 'Arif', 'Kandangan', '10B', '2002-10-13', 'jl.kelayan B', '087898237832', 'Islam', 'Laki-laki'),
(6, 6789, 'isam', 'Banjarmasin', '10B', '2003-01-23', 'jl.kelayan B', '087812873298', 'Islam', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa_11a`
--

CREATE TABLE `data_siswa_11a` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa_11a`
--

INSERT INTO `data_siswa_11a` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(4, 9825, 'Hamdani', 'Banjarmasin', '11A', '2002-02-19', 'Jl.gerilya peradapan', '087876128812', 'Islam', 'Laki-laki'),
(5, 8932, 'Siah', 'Kandangan', '11A', '2001-10-28', 'jl.kelayan B', '082178348912', 'Islam', 'Perempuan'),
(6, 9812, 'Michel', 'Barabai', '11A', '2001-12-12', 'jl.tatah bangkal', '087821783209', 'Kristen', 'Perempuan'),
(7, 7981, 'Rahayu', 'Tanjung', '11A', '2001-12-12', 'jl.amd12', '081298128712', 'Islam', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa_11b`
--

CREATE TABLE `data_siswa_11b` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa_11b`
--

INSERT INTO `data_siswa_11b` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(4, 6723, 'Adul', 'Marabahan', '11B', '2000-10-22', 'jl.kelayan B', '087821893287', 'Islam', 'Laki-laki'),
(5, 1278, 'Komeng', 'Kandangan', '11B', '2000-02-13', 'Jl.gerilya peradapan', '087821892398', 'Islam', 'Laki-laki'),
(6, 8743, 'Indah', 'Banjarmasin', '11B', '2000-02-10', 'Jl.gerilya peradapan', '081287432189', 'Islam', 'Perempuan'),
(7, 6598, 'Wulan', 'Barabai', '11B', '2000-02-10', 'jl.banjar indah', '081287439812', 'Islam', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa_12a`
--

CREATE TABLE `data_siswa_12a` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa_12a`
--

INSERT INTO `data_siswa_12a` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(4, 2376, 'Habibi', 'Martapura', '12A', '1999-10-21', 'Jl.gerilya peradapan', '082198439823', 'Islam', 'Laki-laki'),
(5, 6578, 'Inal', 'Banjarmasin', '12A', '1999-12-12', 'jl.amd12', '087887893278', 'Islam', 'Laki-laki'),
(6, 3876, 'Azizi', 'Banjarmasin', '12A', '2000-10-21', 'jl.kelayan B', '08781278348', 'Islam', 'Laki-laki'),
(7, 3289, 'Laila', 'Banjarmasin', '12A', '2000-12-26', 'jl.banjar indah', '081278128732', 'Islam', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa_12b`
--

CREATE TABLE `data_siswa_12b` (
  `id` int(11) NOT NULL,
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa_12b`
--

INSERT INTO `data_siswa_12b` (`id`, `nis`, `nama`, `tempat`, `kelas`, `tanggal`, `alamat`, `tlp`, `agama`, `jenis`) VALUES
(0, 1287, 'Ihin', 'Kandangan', '12B', '1999-02-12', 'Jl.gerilya peradapan', '081278349812', 'Islam', 'Laki-laki'),
(0, 2156, 'Nisa', 'Barabai', '12B', '2000-12-10', 'jl.banjar indah', '087821874378', 'Islam', 'Perempuan'),
(0, 5487, 'Jani', 'Banjarmasin', '12B', '1999-12-12', 'Jl.gerilya peradapan', '082178439812', 'Islam', 'Laki-laki'),
(0, 8982, 'ifah', 'ifah', '12B', '2000-02-12', 'jl.kelayan B', '081278438712', 'Islam', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_10a`
--

CREATE TABLE `nilai_10a` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` varchar(100) NOT NULL,
  `b_ing` varchar(100) NOT NULL,
  `mtk` varchar(100) NOT NULL,
  `fisika` varchar(100) NOT NULL,
  `kimia` varchar(100) NOT NULL,
  `biologi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `olga` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_10a`
--

INSERT INTO `nilai_10a` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `fisika`, `kimia`, `biologi`, `agama`, `olga`, `total`) VALUES
('1890', 'Leon', '70', '80', '90', '90', '95', '89', '97', '89', 87.5),
('8912', 'ari', '88', '98', '78', '98', '87', '79', '89', '90', 88.375),
('9081', 'salamah', '89', '90', '88', '90', '98', '77', '89', '80', 87.625),
('9907', 'sam', '100', '100', '100', '100', '100', '100', '100', '100', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_10b`
--

CREATE TABLE `nilai_10b` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` varchar(100) NOT NULL,
  `b_ing` varchar(100) NOT NULL,
  `mtk` varchar(100) NOT NULL,
  `ekonomi` varchar(100) NOT NULL,
  `sosial` varchar(100) NOT NULL,
  `geografi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `olga` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_10b`
--

INSERT INTO `nilai_10b` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `ekonomi`, `sosial`, `geografi`, `agama`, `olga`, `total`) VALUES
('1928', 'iki', '90', '80', '90', '80', '100', '90', '90', '90', 88.75),
('4732', 'Arif', '100', '100', '100', '100', '100', '100', '100', '100', 100),
('6789', 'Isam', '90', '80', '90', '78', '90', '88', '92', '89', 87.125),
('8976', 'adi', '90', '80', '89', '88', '90', '90', '100', '90', 89.625);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_11a`
--

CREATE TABLE `nilai_11a` (
  `nis` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` int(100) NOT NULL,
  `b_ing` int(100) NOT NULL,
  `mtk` int(100) NOT NULL,
  `fisika` int(100) NOT NULL,
  `kimia` int(100) NOT NULL,
  `biologi` int(100) NOT NULL,
  `agama` int(100) NOT NULL,
  `olga` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_11a`
--

INSERT INTO `nilai_11a` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `fisika`, `kimia`, `biologi`, `agama`, `olga`, `total`) VALUES
(7981, 'Rahayu', 90, 89, 89, 77, 98, 99, 90, 97, 91),
(8932, 'Siah', 90, 90, 90, 90, 90, 90, 90, 90, 90),
(9812, 'Michel', 87, 98, 90, 98, 96, 88, 78, 90, 91),
(9825, 'Hamdani', 90, 90, 89, 90, 78, 98, 88, 78, 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_11b`
--

CREATE TABLE `nilai_11b` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` varchar(100) NOT NULL,
  `b_ing` varchar(100) NOT NULL,
  `mtk` varchar(100) NOT NULL,
  `ekonomi` varchar(100) NOT NULL,
  `sosial` varchar(100) NOT NULL,
  `geografi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `olga` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_11b`
--

INSERT INTO `nilai_11b` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `ekonomi`, `sosial`, `geografi`, `agama`, `olga`, `total`) VALUES
('1278', 'Komeng', '77', '88', '98', '89', '96', '88', '79', '98', 89.125),
('6598', 'Wulan', '98', '88', '78', '98', '90', '87', '76', '45', 82.5),
('6723', 'Adul', '89', '90', '98', '78', '98', '90', '98', '90', 91.375),
('8743', 'Indah', '90', '98', '100', '89', '79', '88', '98', '97', 92.375);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_12a`
--

CREATE TABLE `nilai_12a` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` varchar(100) NOT NULL,
  `b_ing` varchar(100) NOT NULL,
  `mtk` varchar(100) NOT NULL,
  `fisika` varchar(100) NOT NULL,
  `kimia` varchar(100) NOT NULL,
  `biologi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `olga` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_12a`
--

INSERT INTO `nilai_12a` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `fisika`, `kimia`, `biologi`, `agama`, `olga`, `total`) VALUES
('2376', 'Habibi', '89', '89', '89', '90', '97', '96', '87', '89', 90.75),
('3289', 'Laila', '100', '100', '90', '89', '97', '98', '89', '100', 95.375),
('3876', 'Aziz', '90', '89', '89', '90', '90', '96', '78', '77', 87.375),
('6578', 'Inal', '78', '90', '99', '89', '89', '98', '68', '77', 86);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_12b`
--

CREATE TABLE `nilai_12b` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` varchar(100) NOT NULL,
  `b_ing` varchar(100) NOT NULL,
  `mtk` varchar(100) NOT NULL,
  `ekonomi` varchar(100) NOT NULL,
  `sosial` varchar(100) NOT NULL,
  `geografi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `olga` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_12b`
--

INSERT INTO `nilai_12b` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `ekonomi`, `sosial`, `geografi`, `agama`, `olga`, `total`) VALUES
('1287', 'Ihin', '87', '98', '90', '100', '98', '96', '87', '77', 91.625),
('2156', 'Nisa', '100', '100', '100', '98', '67', '87', '89', '88', 91.125),
('5487', 'Jani', '88', '77', '98', '87', '89', '96', '77', '87', 87.375),
('8982', 'Ifah', '78', '78', '98', '77', '89', '90', '88', '78', 84.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(59) NOT NULL,
  `level` enum('siswa','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(10, 'sal', 'sal', 'sal', ''),
(11, 'suala', 'suala', 'suala', ''),
(100, 'sa', 'sa', 'sa', ''),
(111, 'samani', 'samani', 'samani', ''),
(123, 'guru', 'guru', 'guru', ''),
(124, 'admin', 'admin', 'admin', ''),
(125, 'bayu', 'bayu', 'bayu', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(222, 'budi', 'budi', 'budiman', ''),
(555, 'susi', 'susi', 'susi', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(1010, 'sula', 'sula', 'sula', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', 'siswa'),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8912, 'ari', 'ari', 'ari', 'siswa'),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9081, 'salamah', 'salamah', 'salamah', 'siswa'),
(9090, 'budi', 'budi', 'budi', ''),
(9092, 'amad', 'amad', 'amad', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(9907, 'sam', 'sam', 'sam', 'siswa'),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(12347, '1923', 'sam', '', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', ''),
(1234568, '1923', 'sam', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login3`
--

CREATE TABLE `tb_login3` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('admin','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login3`
--

INSERT INTO `tb_login3` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(10, 'sal', 'sal', 'sal', ''),
(11, 'suala', 'suala', 'suala', ''),
(12, 'samn', 'samn', 'samn', ''),
(67, 'hjkha', 'jahk', 'sahj', ''),
(78, 'siswa', 'siswa', 'siswa', ''),
(89, 'asa', 'nmams', 'asjh', ''),
(100, 'sa', 'sa', 'sa', ''),
(111, 'samani', 'samani', 'samani', 'admin'),
(123, 'guru', 'guru', 'guru', ''),
(124, 'admin', 'admin', 'admin', 'admin'),
(125, 'bayu', 'bayu', 'bayu', 'admin'),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(220, 'ahmad', 'ahmad', 'ahmad', ''),
(222, 'budi', 'budi', 'budiman', 'admin'),
(555, 'susi', 'susi', 'susi', ''),
(567, 'agus', 'agus', 'agus', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'siswa', 'siswa', 'siswa', ''),
(889, 'lala', 'lala', 'lala', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', 'admin'),
(990, 'sam', 'sam', 'sam', ''),
(1010, 'sula', 'sula', 'sula', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', 'admin'),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8908, 'agus', 'agus', 'agus', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9090, 'budi', 'budi', 'budi', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_loging`
--

CREATE TABLE `tb_loging` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('guru','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_loging`
--

INSERT INTO `tb_loging` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(10, 'sal', 'sal', 'sal', ''),
(11, 'suala', 'suala', 'suala', ''),
(12, 'samn', 'samn', 'samn', ''),
(67, 'hjkha', 'jahk', 'sahj', ''),
(78, 'siswa', 'siswa', 'siswa', ''),
(89, 'asa', 'nmams', 'asjh', ''),
(100, 'sa', 'sa', 'sa', ''),
(111, 'samani', 'samani', 'samani', ''),
(123, 'guru', 'guru', 'guru', 'guru'),
(124, 'admin', 'admin', 'admin', ''),
(125, 'bayu', 'bayu', 'bayu', ''),
(187, 'agung', 'agung', 'agung', 'guru'),
(191, 'nadia', 'nadi', 'nadi', 'guru'),
(198, 'ayuni', 'ayuni', 'ayuni', 'guru'),
(220, 'ahmad', 'ahmad', 'ahmad', ''),
(222, 'budi', 'budi', 'budiman', ''),
(555, 'susi', 'susi', 'susi', 'guru'),
(567, 'agus', 'agus', 'agus', ''),
(786, 'agus', 'agus', 'agus', 'guru'),
(788, 'siswa', 'siswa', 'siswa', ''),
(889, 'lala', 'lala', 'lala', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', 'guru'),
(987, 'siti', 'siti', 'siti', ''),
(990, 'sam', 'sam', 'sam', ''),
(1010, 'sula', 'sula', 'sula', 'guru'),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8908, 'agus', 'agus', 'agus', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9090, 'budi', 'budi', 'budi', 'guru'),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_10b`
--

CREATE TABLE `tb_login_10b` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa 10B','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login_10b`
--

INSERT INTO `tb_login_10b` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(10, 'sal', 'sal', 'sal', ''),
(11, 'suala', 'suala', 'suala', ''),
(111, 'sam', 'sam', 'sam', ''),
(123, 'op', 'op', 'op', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'ani', 'ani', 'ani', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', 'siswa 10B'),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', 'siswa 10B'),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', 'siswa 10B'),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', 'siswa 10B'),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', 'siswa 10B'),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_11a`
--

CREATE TABLE `tb_login_11a` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa 11A','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login_11a`
--

INSERT INTO `tb_login_11a` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(10, 'sal', 'sal', 'sal', 'siswa 11A'),
(11, 'suala', 'suala', 'suala', ''),
(111, 'sam', 'sam', 'sam', ''),
(123, 'op', 'op', 'op', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'ani', 'ani', 'ani', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', 'siswa 11A'),
(8676, 'udin', 'udin', 'udin', 'siswa 11A'),
(8743, 'indah', 'indah', 'indah', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', 'siswa 11A'),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', 'siswa 11A'),
(9825, 'hamdani', 'hamdani', 'hamdani', 'siswa 11A'),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', 'siswa 11A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_11b`
--

CREATE TABLE `tb_login_11b` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa 11B','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login_11b`
--

INSERT INTO `tb_login_11b` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(11, 'suala', 'suala', 'suala', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'ani', 'ani', 'ani', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', 'siswa 11B'),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', 'siswa 11B'),
(6723, 'adul', 'adul', 'adul', 'siswa 11B'),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', 'siswa 11B'),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_12a`
--

CREATE TABLE `tb_login_12a` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa 12A','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login_12a`
--

INSERT INTO `tb_login_12a` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(123, 'sam', 'sam', 'sam', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'ani', 'ani', 'ani', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', ''),
(1234, 'salah', 'salah', 'salah', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', ''),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', ''),
(2376, 'habibi', 'habibi', 'habibi', 'siswa 12A'),
(3289, 'laila', 'laila', 'laila', 'siswa 12A'),
(3876, 'aziz', 'aziz', 'aziz', 'siswa 12A'),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', ''),
(6578, 'inal', 'inal', 'inal', 'siswa 12A'),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', ''),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', ''),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', 'siswa 12A'),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_12b`
--

CREATE TABLE `tb_login_12b` (
  `kode_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('siswa 12B','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login_12b`
--

INSERT INTO `tb_login_12b` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(0, '1923', 'sam', '', ''),
(11, 'suala', 'suala', 'suala', ''),
(123, 'sam', 'sam', 'sam', ''),
(187, 'agung', 'agung', 'agung', ''),
(191, 'nadia', 'nadi', 'nadi', ''),
(198, 'ayuni', 'ayuni', 'ayuni', ''),
(567, 'amad', 'amad', 'amad', ''),
(786, 'agus', 'agus', 'agus', ''),
(788, 'ani', 'ani', 'ani', ''),
(897, 'lasa', 'lasa', 'lasa', ''),
(909, 'amad', 'amad', 'amad', ''),
(987, 'siti', 'siti', 'siti', ''),
(1278, 'komeng', 'komeng', 'komeng', ''),
(1287, 'ihin', 'ihin', 'ihin', 'siswa 12B'),
(1345, 'siti', 'siti', 'siti', ''),
(1890, 'leon', 'leon', 'leon', ''),
(1928, 'iki', 'iki', 'iki', ''),
(2156, 'nisa', 'nisa', 'nisa', 'siswa 12B'),
(2376, 'habibi', 'habibi', 'habibi', ''),
(3289, 'laila', 'laila', 'laila', ''),
(3876, 'aziz', 'aziz', 'aziz', ''),
(4732, 'arif', 'arif', 'arif', ''),
(5487, 'jani', 'jani', 'jani', 'siswa 12B'),
(6578, 'inal', 'inal', 'inal', ''),
(6598, 'wulan', 'wulan', 'wulan', ''),
(6723, 'adul', 'adul', 'adul', ''),
(6789, 'isam', 'isam', 'isam', ''),
(7981, 'rahayu', 'rahayu', 'rahayu', ''),
(8676, 'udin', 'udin', 'udin', ''),
(8743, 'indah', 'indah', 'indah', ''),
(8912, 'ari', 'ari', 'ari', ''),
(8932, 'siah', 'siah', 'siah', ''),
(8976, 'adi', 'adi', 'adi', ''),
(8982, 'ifah', 'ifah', 'ifah', 'siswa 12B'),
(9086, 'salamah', 'salamah', 'salamah', ''),
(9631, 'michel', 'sam', '', ''),
(9812, 'michel', 'michel', 'michel', ''),
(9825, 'hamdani', 'hamdani', 'hamdani', ''),
(12334, '12b', '12b', '12b', 'siswa 12B'),
(12341, 'sukir', 'sukir', 'sukir', ''),
(12343, '12a', '12a', '12a', ''),
(1234567, 'samanai', 'sajabsj', 'sasbj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_sekolah`
--

CREATE TABLE `ujian_sekolah` (
  `nis` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `b_indo` float NOT NULL,
  `b_ing` float NOT NULL,
  `mtk` float NOT NULL,
  `mapel` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian_sekolah`
--

INSERT INTO `ujian_sekolah` (`nis`, `nama`, `b_indo`, `b_ing`, `mtk`, `mapel`, `total`) VALUES
(123, 'asbhahsbj', 423, 45, 45, 45, 139.5),
(6778, 'samani', 100, 100, 100, 100, 100),
(8908, 'agus', 150, 150, 150, 150, 150);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `data_siswa_10b`
--
ALTER TABLE `data_siswa_10b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa_11a`
--
ALTER TABLE `data_siswa_11a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa_11b`
--
ALTER TABLE `data_siswa_11b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa_12a`
--
ALTER TABLE `data_siswa_12a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa_12b`
--
ALTER TABLE `data_siswa_12b`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_10a`
--
ALTER TABLE `nilai_10a`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_10b`
--
ALTER TABLE `nilai_10b`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_11a`
--
ALTER TABLE `nilai_11a`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_11b`
--
ALTER TABLE `nilai_11b`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_12a`
--
ALTER TABLE `nilai_12a`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `nilai_12b`
--
ALTER TABLE `nilai_12b`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login3`
--
ALTER TABLE `tb_login3`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_loging`
--
ALTER TABLE `tb_loging`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login_10b`
--
ALTER TABLE `tb_login_10b`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login_11a`
--
ALTER TABLE `tb_login_11a`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login_11b`
--
ALTER TABLE `tb_login_11b`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login_12a`
--
ALTER TABLE `tb_login_12a`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `tb_login_12b`
--
ALTER TABLE `tb_login_12b`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `ujian_sekolah`
--
ALTER TABLE `ujian_sekolah`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7699;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `data_siswa_10b`
--
ALTER TABLE `data_siswa_10b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_siswa_11a`
--
ALTER TABLE `data_siswa_11a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_siswa_11b`
--
ALTER TABLE `data_siswa_11b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_siswa_12a`
--
ALTER TABLE `data_siswa_12a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_siswa_12b`
--
ALTER TABLE `data_siswa_12b`
  MODIFY `nis` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12335;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234569;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD CONSTRAINT `data_admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_login3` (`kode_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
