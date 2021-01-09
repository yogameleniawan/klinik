-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 05:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `password`, `nama_dokter`, `spesialis`) VALUES
('A0001', '12345678', 'Sheryl Anastasya', 'Gigi'),
('B0002', '12345678', 'Jihan Nabilah', 'Kesehatan Anak'),
('C0003', '12345678', 'Deryl Naza', 'Kulit'),
('D0004', '12345678', 'Deny Lukman', 'Umum'),
('E0005', '12345678', 'Indah Ayu', 'Bedah'),
('F0006', '12345678', 'Diyah Rizky', 'Penyakit Dalam'),
('G0007', '12345678', 'Bila Latifah', 'Kesehatan Mata'),
('H0008', '12345678', 'Sekar Nindy', 'Jantung'),
('I0009', '12345678', 'Lala Nafha', 'Orthopaedi'),
('J0010', '12345678', 'Hadi Binardi', 'Bedah Saraf'),
('K0011', '12345678', 'Wendy Tara', 'Gizi'),
('L0012', '12345678', 'Sera Willy', 'THT');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `harga_obat_per_pcs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `harga_obat_per_pcs`) VALUES
('BB05', 'Atorvastatin', 30, 50000),
('BB10', 'Ketoconazole', 30, 20000),
('BB14', 'safasf', 2, 22),
('BS11', 'Chlorpropamide', 30, 40000),
('CC08', 'Cendo Xitrol', 30, 10000),
('GG01', 'Hidrogen Peroksida', 30, 30000),
('JJ08', 'Azithromycin', 30, 37500),
('KA02', 'Paracetamol', 30, 20000),
('KM07', 'Prednison', 30, 30000),
('KU03', 'Mycoral', 30, 15000),
('OT09', 'Ondansetron', 30, 50000),
('PD06', 'Ibuprofen', 30, 50000),
('UU04', 'Cefadroxil', 30, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(5) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin_pasien` varchar(15) NOT NULL,
  `alamat_pasien` varchar(30) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `suhu_badan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_pasien`, `password`, `nama_pasien`, `tgl_lahir`, `jenis_kelamin_pasien`, `alamat_pasien`, `berat_badan`, `tinggi_badan`, `suhu_badan`) VALUES
('PA01', 1, '12345678', 'Gisel A', '2001-02-21', 'Perempuan', 'Jl. Pacar Kembang', 55, 165, 36.2),
('PA02', 2, '12345678', 'Budi Harianto', '2001-03-01', 'Laki-laki', 'Jl. Pisang Kipas', 65, 155, 35.1),
('PA03', 3, '12345678', 'Jennie R', '1999-01-29', 'Perempuan', 'Jl. Kesumba', 57, 152, 34.3),
('PA04', 4, '12345678', 'Nessie Judge', '1994-04-13', 'Perempuan', 'Jl. Kalikepiting', 75, 163, 33.4),
('PA05', 5, '12345678', 'Bayu Moektito', '1999-05-12', 'Laki-laki', 'Jl. Pacar Keling', 60, 170, 35.5),
('PA06', 6, '12345678', 'Anisa Rahmawati', '2001-06-19', 'Perempuan', 'Jl. Kenjeran', 40, 165, 34.6),
('PA07', 7, '12345678', 'Ortizan Salosa', '2001-08-23', 'Laki-laki', 'Jl. Kapasari', 55, 165, 33.7),
('PA08', 8, '12345678', 'Bambang Pamungkas', '1999-06-22', 'Laki-laki', 'Jl. Semolowaru', 52, 165, 32.2),
('PA09', 9, '12345678', 'Eka Laras', '2001-07-25', 'Perempuan', 'Jl. Sidotopo', 58, 165, 34.4),
('PA10', 10, '12345678', 'Willy Pramesthi', '1994-08-11', 'Perempuan', 'Jl. Dharmawangsa', 61, 165, 35.2),
('PA11', 11, '12345678', 'Ahmad Muhaimin', '2001-09-04', 'Laki-laki', 'Jl. Gubeng', 70, 170, 36.1),
('PA12', 12, '12345678', 'Indah Safitri', '1994-01-20', 'Perempuan', 'Jl. Kertajaya', 60, 165, 37.5),
('PA13', 13, '12345678', 'Ratna Indah', '1991-10-24', 'Perempuan', 'Jl. Kalilom', 40, 145, 36.2),
('PA14', 14, '12345678', 'Rizky Arsy', '1990-11-11', 'Laki-laki', 'Jl. Bulak Banteng', 52, 163, 36.6),
('PA15', 15, '12345678', 'Yuyun Pusparini', '2002-12-10', 'Perempuan', 'Jl. Merr', 54, 155, 35.7),
('PA16', 16, '12345678', 'Ana Rosidah', '2001-01-29', 'Perempuan', 'Jl. Kedungdoro', 55, 167, 34.8),
('PA17', 17, '12345678', 'Agung Nugroho', '1989-02-21', 'Laki-laki', 'Jl. Babatan', 51, 160, 33.6),
('PA18', 18, '12345678', 'Diah Ayu', '2001-03-22', 'Perempuan', 'Jl. Ahmad Yani', 65, 165, 36.5),
('PA19', 19, '12345678', 'Maulana Malik', '1988-06-26', 'Laki-laki', 'Jl. Gading', 70, 164, 35.4),
('PA20', 20, '12345678', 'Ari Lasso', '1960-09-02', 'Laki-laki', 'Jl. Pakel', 46, 170, 36),
('PA21', 21, '12345678', 'Titin Ferdina', '1982-02-01', 'Perempuan', 'Jl. Tanah Merah', 49, 169, 35.3),
('PA22', 22, '12345678', 'Fatin Shidqia', '1994-07-25', 'Perempuan', 'Jl. Bubutan', 50, 150, 36.2),
('PA23', 23, '12345678', 'Samsul Mubarok', '1996-01-27', 'Laki-laki', 'Jl. Ngagel', 49, 149, 37.1),
('PA24', 24, '12345678', 'Saifudin Ajah', '1994-02-21', 'Laki-laki', 'Jl. Ngaglik', 55, 165, 36.5),
('PA25', 25, '12345678', 'Susanti', '2001-09-22', 'Perempuan', 'Jl. Kalianyar', 60, 150, 37.3),
('PA26', 26, '12345678', 'Harris Maulana', '1993-03-20', 'Laki-laki', 'Jl. Ciputra', 63, 165, 34.2),
('PA27', 27, '12345678', 'Yoga Meleniawan Pamungkas', '2000-06-27', 'Laki-laki', 'Malang', 58, 168, 36);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `no_pelayanan` varchar(5) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tgl_pelayanan` date DEFAULT NULL,
  `keluhan` varchar(200) DEFAULT NULL,
  `status_tindakan` varchar(30) DEFAULT NULL,
  `total_pembayaran` int(11) DEFAULT NULL,
  `status_pembayaran` varchar(10) DEFAULT NULL,
  `id_petugas` varchar(5) DEFAULT NULL,
  `id_pasien` varchar(5) DEFAULT NULL,
  `id_dokter` varchar(5) DEFAULT NULL,
  `id_tindakan` varchar(5) DEFAULT NULL,
  `id_obat` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`no_pelayanan`, `no_antrian`, `tgl_pelayanan`, `keluhan`, `status_tindakan`, `total_pembayaran`, `status_pembayaran`, `id_petugas`, `id_pasien`, `id_dokter`, `id_tindakan`, `id_obat`) VALUES
('L01', 1, '2020-01-03', 'Kaki kanan mengalami patah tulang', 'Operasi', 30050000, 'Berhasil', 'PG1', 'PA01', 'I0009', 'P1', 'PD06'),
('L02', 2, '2020-01-03', 'Sakit jantung', 'Operasi', 50050000, 'Berhasil', 'PG2', 'PA02', 'I0009', 'P2', 'PD06'),
('L03', 3, '2020-01-03', 'Tenggorokan terdapat amandel', 'Operasi', 450000, 'Berhasil', 'PG3', 'PA03', 'L0012', 'P4', 'UU04'),
('L04', 4, '2020-01-03', 'Tangan nyeri', 'Operasi', 18030000, 'Berhasil', 'PG4', 'PA04', 'J0010', 'P5', 'KM07'),
('L05', 5, '2020-01-03', 'Anak panas demam dari kemarin malam', 'Cek Suhu', 220000, 'Berhasil', 'PG5', 'PA05', 'B0002', 'T1', 'KA02'),
('L06', 6, '2020-01-03', 'Lambung nyeri', 'CT Scan Lambung', 115000, 'Berhasil', 'PG6', 'PA06', 'F0006', 'T2', 'KU03'),
('L07', 7, '2020-01-03', 'Mata sedikit kabur', 'Cek Mata', 160000, 'Berhasil', 'PG7', 'PA07', 'G0007', 'T3', 'CC08'),
('L08', 8, '2020-01-04', 'Panas tinggi', 'Pemberian Obat', 137500, 'Berhasil', 'PG1', 'PA08', 'D0004', 'T4', 'JJ08'),
('L09', 9, '2020-01-04', 'Gigi berlubang', 'Cabut Gigi', 130000, 'Berhasil', 'PG2', 'PA09', 'A0001', 'G1', 'GG01'),
('L10', 10, '2020-01-04', 'Kulit terdapat jamur', 'Cek Infeksi', 2020000, 'Berhasil', 'PG3', 'PA10', 'C0003', 'R1', 'BB10'),
('L11', 11, '2020-01-04', 'Diabetes kambuh', 'Cek Gula Darah', 2040000, 'Berhasil', 'PG4', 'PA11', 'K0011', 'R2', 'BS11'),
('L12', 12, '2020-01-04', 'Nyeri disekitar perut sebelah kanan', 'Operasi', 2050000, 'Berhasil', 'PG5', 'PA12', 'E0005', 'R3', 'OT09'),
('L13', 13, '2020-01-04', 'Tangan kanan mengalami patah tulang', 'Operasi', 30050000, 'Berhasil', 'PG6', 'PA13', 'I0009', 'P2', 'PD06'),
('L14', 14, '2020-01-04', 'Sakit jantung', 'Operasi', 50050000, 'Berhasil', 'PG7', 'PA14', 'H0008', 'P3', 'BB05'),
('L15', 15, '2020-01-04', 'Amandel', 'Operasi', 450000, 'Berhasil', 'PG1', 'PA27', 'L0012', 'P4', 'UU04'),
('L16', 16, '2020-01-04', 'Kaki nyeri', 'Operasi', 18030000, 'Berhasil', 'PG2', 'PA16', 'J0010', 'P5', 'KM07'),
('L17', 17, '2020-01-04', 'Anak mengeluh sakit dan demam', 'Cek Suhu', 220000, 'Berhasil', 'PG3', 'PA17', 'B0002', 'T1', 'KA02'),
('L18', 18, '2020-01-05', 'Lambung sakit', 'CT Scan Lambung', 115000, 'Berhasil', 'PG4', 'PA18', 'F0006', 'T2', 'KU03'),
('L19', 19, '2020-01-05', 'Pandangan mata sedikit buram', 'Cek Mata', 160000, 'Berhasil', 'PG4', 'PA19', 'G0007', 'T3', 'CC08'),
('L20', 20, '2020-01-05', 'Panas selama 2 hari', 'Pemberian Obat', 137500, 'Berhasil', 'PG5', 'PA20', 'D0004', 'T4', 'JJ08'),
('L21', 21, '2020-01-05', 'Gigi patah', 'Cabut Gigi', 130000, 'Berhasil', 'PG6', 'PA21', 'A0001', 'G1', 'GG01'),
('L22', 22, '2020-01-05', 'Telapak kaki terdapat jamur', 'Cek Infeksi', 2020000, 'Berhasil', 'PG7', 'PA22', 'C0003', 'R1', 'BB10'),
('L23', 23, '2020-01-05', 'Diabetes kambuh', 'Cek Gula Darah', 2040000, 'Berhasil', 'PG1', 'PA23', 'K0011', 'R2', 'BS11'),
('L24', 24, '2020-01-05', 'Nyeri perut sebelah kanan', 'Operasi', 2050000, 'Berhasil', 'PG2', 'PA24', 'E0005', 'R3', 'OT09'),
('L25', 25, '2020-01-05', 'Diabetes kambuh lagi', 'Cek Gula Darah', 2040000, 'Berhasil', 'PG3', 'PA25', 'K0011', 'R2', 'BS11'),
('L26', 26, '2020-01-05', 'Tangan kiri patah', 'Operasi', 30050000, 'Berhasil', 'PG4', 'PA26', 'I0009', 'P2', 'PD06'),
('L27', 27, '2021-01-04', 'Diabetes', 'Cek gula darah', 2040000, 'Berhasil', 'PG3', 'PA03', 'K0011', 'R2', 'BS11'),
('L28', 36, '2021-01-19', 'asf', NULL, NULL, NULL, NULL, 'pa27', NULL, NULL, NULL),
('L37', 61, '2021-01-02', '2', 'asf', 2, 'saf', 'PG1', NULL, NULL, NULL, NULL),
('L62', 65, '2021-01-14', 'tes', 'tes', 222, 'tes', 'PG2', NULL, NULL, NULL, NULL),
('L66', 66, '2021-01-08', 'Kaki kanan mengalami patah tulang', 'tess', 2, 'tessaaaa', 'PG1', 'PA01', 'L0012', 'P4', 'PD06'),
('L67', 67, '2021-01-26', 'tes', NULL, NULL, NULL, NULL, 'pa27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `password`, `nama_petugas`) VALUES
('PG1', '12345678', 'Danang Anugrah'),
('PG2', '12345678', 'Indra Nada'),
('PG3', '12345678', 'Dinda Kanya'),
('PG4', '12345678', 'Kinar Hana'),
('PG5', '12345678', 'Gisel Montana'),
('PG6', '12345678', 'Roni Setiawan'),
('PG7', '12345678', 'Mario Hakam');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` varchar(5) NOT NULL,
  `nama_tindakan` varchar(30) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `biaya`) VALUES
('G1', 'Cabut Gigi', 100000),
('P1', 'Operasi Patah Tulang Kaki', 30000000),
('P2', 'Operasi Patah Tulang Tangan', 30000000),
('P3', 'Operasi Jantung', 50000000),
('P4', 'Operasi Amandel', 300000),
('P5', 'Operasi Saraf Tangan', 18000000),
('R1', 'Cek Infeksi Jamur', 2000000),
('R2', 'Cek Gula Darah', 2000000),
('R3', 'Operasi Usus Buntu', 2000000),
('T1', 'Cek Suhu Anak', 200000),
('T2', 'CT Scan Lambung', 100000),
('T3', 'Cek Mata', 150000),
('T4', 'Pemberian Antibiotik', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`no_pelayanan`),
  ADD UNIQUE KEY `no_antrian` (`no_antrian`),
  ADD KEY `FK_Petugas` (`id_petugas`),
  ADD KEY `FK_Pasien` (`id_pasien`),
  ADD KEY `FK_Dokter` (`id_dokter`),
  ADD KEY `FK_Tindakan` (`id_tindakan`),
  ADD KEY `FK_Obat` (`id_obat`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `no_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `FK_Dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Tindakan` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
