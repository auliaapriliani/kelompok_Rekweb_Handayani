-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8889
-- Generation Time: 27 Feb 2019 pada 07.19
-- Versi Server: 5.6.35
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tugas_final_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_ibu_hamil`
--

CREATE TABLE `k_ibu_hamil` (
  `id_k_ibu_hamil` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `usia_kehamilan` varchar(100) NOT NULL,
  `trimester_ke` varchar(100) NOT NULL,
  `anamnesis` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `tb` varchar(100) NOT NULL,
  `td` varchar(100) NOT NULL,
  `tfu` varchar(100) NOT NULL,
  `lila` varchar(100) NOT NULL,
  `status_gizi` varchar(100) NOT NULL,
  `refleks` varchar(100) NOT NULL,
  `djj` varchar(100) NOT NULL,
  `pap` varchar(100) NOT NULL,
  `tbj` varchar(100) NOT NULL,
  `jumlah_janin` varchar(100) NOT NULL,
  `persentasi` varchar(100) NOT NULL,
  `pelayanan_injeksi` varchar(11) DEFAULT NULL,
  `pelayanan_kia` varchar(11) DEFAULT NULL,
  `pelayanan_fe` varchar(11) DEFAULT NULL,
  `lab_hb` varchar(5) DEFAULT NULL,
  `pretein_urin` varchar(5) DEFAULT NULL,
  `gula_darah` varchar(5) DEFAULT NULL,
  `thalasemia` varchar(5) DEFAULT NULL,
  `sifilis` varchar(5) DEFAULT NULL,
  `hbs` varchar(5) DEFAULT NULL,
  `vct` varchar(100) DEFAULT NULL,
  `serologi` varchar(100) DEFAULT NULL,
  `arv` varchar(100) DEFAULT NULL,
  `malaria` varchar(100) DEFAULT NULL,
  `obat` varchar(100) DEFAULT NULL,
  `kelambu` varchar(100) DEFAULT NULL,
  `tb2` varchar(100) DEFAULT NULL,
  `obat2` varchar(100) DEFAULT NULL,
  `nakes` varchar(100) DEFAULT NULL,
  `non_nakes` varchar(100) DEFAULT NULL,
  `hdk` varchar(100) DEFAULT NULL,
  `abortus` varchar(100) DEFAULT NULL,
  `pendarahan` varchar(100) DEFAULT NULL,
  `infeksi` varchar(100) DEFAULT NULL,
  `kpd` varchar(100) DEFAULT NULL,
  `lainnya` varchar(100) DEFAULT NULL,
  `puskesmas` varchar(100) DEFAULT NULL,
  `rb` varchar(100) DEFAULT NULL,
  `rsia` varchar(100) DEFAULT NULL,
  `rs` varchar(100) DEFAULT NULL,
  `lainnya_rujukan` varchar(100) DEFAULT NULL,
  `keadaan_tiba` varchar(100) DEFAULT NULL,
  `keadaan_pulang` varchar(100) DEFAULT NULL,
  `konseling` varchar(100) DEFAULT NULL,
  `status_imunisasi` varchar(100) DEFAULT NULL,
  `tgl_periksa` date NOT NULL,
  `resiko` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `k_ibu_hamil`
--

INSERT INTO `k_ibu_hamil` (`id_k_ibu_hamil`, `nik`, `usia_kehamilan`, `trimester_ke`, `anamnesis`, `bb`, `tb`, `td`, `tfu`, `lila`, `status_gizi`, `refleks`, `djj`, `pap`, `tbj`, `jumlah_janin`, `persentasi`, `pelayanan_injeksi`, `pelayanan_kia`, `pelayanan_fe`, `lab_hb`, `pretein_urin`, `gula_darah`, `thalasemia`, `sifilis`, `hbs`, `vct`, `serologi`, `arv`, `malaria`, `obat`, `kelambu`, `tb2`, `obat2`, `nakes`, `non_nakes`, `hdk`, `abortus`, `pendarahan`, `infeksi`, `kpd`, `lainnya`, `puskesmas`, `rb`, `rsia`, `rs`, `lainnya_rujukan`, `keadaan_tiba`, `keadaan_pulang`, `konseling`, `status_imunisasi`, `tgl_periksa`, `resiko`) VALUES
(1, '1237183781', '2', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-02-24', NULL),
(2, '1237183781', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', NULL),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '1', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', NULL),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', NULL),
(5, '1282237812', '2', '2', 'Test', '10', '10', '', '', '10', 'Kurang', '10', 'Test', 'Test', 'Test', 'Test', 'Test', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', 'nakes'),
(6, '1282237812', '2', '3', 'xx', 'xx', 'xx', '', '', 'xx', 'Kurang', 'xx', 'xx', 'xx', 'xx', 'x', 'xx', '1', '1', NULL, NULL, '1', NULL, NULL, '1', '1', 'xx', 'xx', 'xx', 'xx', 'xxx', 'xx', 'xx', NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-24', 'non_nakes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_persalinan_ibu`
--

CREATE TABLE `k_persalinan_ibu` (
  `id_persalinan_ibu` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kala1_tgl` text NOT NULL,
  `kala1_waktu` time NOT NULL,
  `kala2_tgl` date NOT NULL,
  `kala2_waktu` time NOT NULL,
  `bayilahir_tgl` date NOT NULL,
  `bayilahir_waktu` time NOT NULL,
  `plasenta_tgl` date NOT NULL,
  `plasenta_waktu` time NOT NULL,
  `usia_kehamilan` int(11) NOT NULL,
  `usia_phpt` int(11) NOT NULL,
  `presentasi` int(11) NOT NULL,
  `berat_bayi` varchar(100) NOT NULL,
  `cara_persalinan` varchar(100) NOT NULL,
  `tempat` text NOT NULL,
  `alamat` text NOT NULL,
  `penolong` varchar(100) NOT NULL,
  `injeksi` varchar(100) NOT NULL,
  `tali_pusat` varchar(100) NOT NULL,
  `masase` varchar(100) NOT NULL,
  `keadaan_ibu` varchar(100) NOT NULL,
  `keadaan_bayi` varchar(100) NOT NULL,
  `arv` varchar(100) NOT NULL,
  `obat_anti_malaria` varchar(100) NOT NULL,
  `obat_anti_tb` varchar(100) NOT NULL,
  `distosia` varchar(100) NOT NULL,
  `hdk` varchar(100) NOT NULL,
  `ppp` varchar(100) NOT NULL,
  `infeksi` varchar(100) NOT NULL,
  `puskesmas` varchar(100) NOT NULL,
  `rs_bersalin` varchar(100) NOT NULL,
  `rs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `k_persalinan_ibu`
--

INSERT INTO `k_persalinan_ibu` (`id_persalinan_ibu`, `nik`, `kala1_tgl`, `kala1_waktu`, `kala2_tgl`, `kala2_waktu`, `bayilahir_tgl`, `bayilahir_waktu`, `plasenta_tgl`, `plasenta_waktu`, `usia_kehamilan`, `usia_phpt`, `presentasi`, `berat_bayi`, `cara_persalinan`, `tempat`, `alamat`, `penolong`, `injeksi`, `tali_pusat`, `masase`, `keadaan_ibu`, `keadaan_bayi`, `arv`, `obat_anti_malaria`, `obat_anti_tb`, `distosia`, `hdk`, `ppp`, `infeksi`, `puskesmas`, `rs_bersalin`, `rs`) VALUES
(1, '1237183781', '', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'admin'),
(3, 'kepala', '4efd7c429ad4cdab5c08c3e742445ec0f1ace4bb', 'Kepala Puskesmas', 'kepala'),
(4, 'bidan', '49a25ddd6e771e18d3a86e80325ac8e15137ac34', 'Bidan', 'bidan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_anggaran`
--

CREATE TABLE `tbl_jenis_anggaran` (
  `id_jenis_anggaran` int(11) NOT NULL,
  `nm_jenis_anggaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_jenis_anggaran`
--

INSERT INTO `tbl_jenis_anggaran` (`id_jenis_anggaran`, `nm_jenis_anggaran`) VALUES
(1, 'APBN'),
(2, 'APBD'),
(3, 'Anggaran Perbantuan'),
(4, 'Anggaran Dekonsentrasi'),
(5, 'Pinjaman Luar Negeri'),
(6, 'DAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nm_pasien` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jamkesnas` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` enum('pasien') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nik`, `nm_pasien`, `alamat`, `tgl_lahir`, `tempat_lahir`, `jamkesnas`, `username`, `password`, `level`) VALUES
(1, '1237183781', 'Robi Kurniawan', 'Makassar', '1995-01-01', 'Makassar', '12938294', 'robi', 'f5c8ff28ac5767c4495ca6230fa6d9fc7274bf1f', 'pasien'),
(2, '1282237812', 'Indah', 'Makassar', '1990-01-01', 'Makassar', '2793872', 'pasien', '2d64647e07ad6d7fdc36818a3f93a0c8a054bd18', 'pasien'),
(3, '12392839018', 'Indri', 'Makassar', '1991-02-01', 'makassar', 'zcs', 'indri', '62cc2c51e363ccaeafac2c553168454d9e430c6d', 'pasien'),
(4, 'asd', 'asd', 'sad', '2019-01-01', 'asd', 'asd', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'pasien'),
(5, '123', '12', 'jn', '2019-01-01', 'nj', 'bjhb', 'oop', '914d61e816b0bcae6a411366eee1c7d0b91078f7', 'pasien'),
(6, '7987', 'xx', 'xx', '2019-01-01', 'xx', 'xx', '123', 'f5c8ff28ac5767c4495ca6230fa6d9fc7274bf1f', 'pasien'),
(7, 'oop', 'oop', 'mm', '2019-01-31', 'mm', 'mm', 'mm', 'b8d09b4d8580aacbd9efc4540a9b88d2feb9d7e5', 'pasien'),
(8, '1293812748921', 'Andi', 'Makassar', '2019-01-01', 'Makassar', '123912', 'andri', '666013faae6e6ba8fcde2b5e1c9d874a41a76db3', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `k_ibu_hamil`
--
ALTER TABLE `k_ibu_hamil`
  ADD PRIMARY KEY (`id_k_ibu_hamil`);

--
-- Indexes for table `k_persalinan_ibu`
--
ALTER TABLE `k_persalinan_ibu`
  ADD PRIMARY KEY (`id_persalinan_ibu`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_anggaran`
--
ALTER TABLE `tbl_jenis_anggaran`
  ADD PRIMARY KEY (`id_jenis_anggaran`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `k_ibu_hamil`
--
ALTER TABLE `k_ibu_hamil`
  MODIFY `id_k_ibu_hamil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `k_persalinan_ibu`
--
ALTER TABLE `k_persalinan_ibu`
  MODIFY `id_persalinan_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jenis_anggaran`
--
ALTER TABLE `tbl_jenis_anggaran`
  MODIFY `id_jenis_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;