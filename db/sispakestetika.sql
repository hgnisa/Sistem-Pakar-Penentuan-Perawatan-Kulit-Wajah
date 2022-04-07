-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 05:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sispakestetika`
--

-- --------------------------------------------------------

--
-- Table structure for table `faktorresiko`
--

CREATE TABLE IF NOT EXISTS `faktorresiko` (
  `ID_FR` varchar(10) NOT NULL,
  `ketFR` varchar(100) NOT NULL,
  `tanyaFR` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktorresiko`
--

INSERT INTO `faktorresiko` (`ID_FR`, `ketFR`, `tanyaFR`) VALUES
('FR001', 'AC.', 'Apakah Anda sering beraktivitas di ruangan ber-AC?'),
('FR002', 'Perokok', 'Apakah Anda perokok?'),
('FR003', 'Luar ruangan', 'Apakah Anda beraktivitas di luar ruangan?'),
('FR004', 'Alkohol', 'Apakah Anda mengkonsumsi minuman beralkohol?'),
('FR005', 'Pori-pori halus', 'Apakah kondisi pori-pori wajah Anda tidak begitu terlihat atau halus?'),
('FR006', 'Kering', 'Apakah kondisi kulit wajah Anda kering dan terasa kencang?'),
('FR007', 'Obat-obatan', 'Apakah Anda sedang mengkonsumsi obat-obatan resep dokter?'),
('FR008', 'Pori-pori terlihat', 'Apakah kondisi pori-pori wajah Anda terlihat?'),
('FR009', 'Stress', 'Apakah Anda sedang mengalami stress beberapa hari belakangan ini?'),
('FR010', 'Alergi', 'Apakah kulit wajah Anda alergi pada bahan kosmetik tertentu?'),
('FR011', 'Kulit memerah', 'Apakah kulit wajah Anda terlihat memerah di beberapa bagian?'),
('FR012', 'Berminyak di daerah T', 'Apakah kulit wajah Anda terlihat berminyak di daerah T(kening dan hidung)?'),
('FR013', 'Makanan pedas', 'Apakah Anda suka mengkonsumsi makanan pedas?'),
('FR014', 'Polusi', 'Apakah kulit wajah Anda sering terpapar polusi?'),
('FR015', 'Wajah mengkilap', 'Apakah kulit wajah Anda terlihat mengkilap?'),
('FR016', 'Tekstur tipis', 'Apakah Anda memiliki kulit wajah yang bertekstur tipis?'),
('FR017', 'Minum cukup', 'Apakah Anda mengkonsumsi minum air mineral yang cukup perhari?'),
('FR018', 'Sering cuci muka', 'Apakah Anda terlalu sering mencuci muka?'),
('FR019', 'Cuci muka air panas', 'Apakah Anda mencuci muka menggunakan air hangat/panas?');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `ID_Gejala` varchar(10) NOT NULL,
  `ketGejala` varchar(25) NOT NULL,
  `tanyaGejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`ID_Gejala`, `ketGejala`, `tanyaGejala`) VALUES
('G001', 'Bruntusan.', 'Apakah terdapat bruntusan(bintik-bintik kecil) pada permukaan wajah Anda?.'),
('G002', 'Benjolan', 'Apakah terdapat benjolan-benjolan pada permukaan wajah Anda?'),
('G003', 'Kering/keriput', 'Apakah kulit wajah Anda terlihat kering/keriput?'),
('G004', 'Benjolan menyebar', 'Apakah benjolan pada permukaan wajah menyebar?'),
('G005', 'White head', 'Apakah terdapat white head pada wajah Anda?'),
('G006', 'Black head', 'Apakah terdapat black head pada wajah Anda?'),
('G007', 'Benjolan gatal dan sakit', 'Apakah benjolan pada permukaan wajah Anda terasa gatal dan sakit?'),
('G008', 'Kulit kendur', 'Apakah kulit wajah Anda terlihat kendur?'),
('G009', 'Lesi kecoklatan', 'Apakah terdapat lesi kecoklatan atau warna kulit wajah tidak sama dengan warna wajah normal Anda?'),
('G010', 'Lesi kecoklatan simetris', 'Apakah lesi kecoklatannya berbentuk pulau-pulau simetris dibagian pipi atau kening?'),
('G011', 'Lesi kecoklatan freckles', 'Apakah lesi kecoklatannya berbentuk freckles dibagian hidung atau pipi?'),
('G012', 'Garis senyum jelas', 'Apakah terlihat garis senyum yang jelas pada wajah Anda?'),
('G013', 'Benjolan berkumpul/menump', 'Apakah benjolan pada permukaan wajah Anda berkumpul/menumpuk?'),
('G014', 'Benjolan meradang/bernana', 'Apakah benjolan pada permukaan wajah Anda meradang/bernanah?');

-- --------------------------------------------------------

--
-- Table structure for table `homeproduct`
--

CREATE TABLE IF NOT EXISTS `homeproduct` (
  `ID_HP` varchar(10) NOT NULL,
  `ketHP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeproduct`
--

INSERT INTO `homeproduct` (`ID_HP`, `ketHP`) VALUES
('HP001', 'Paket Anti-Aging Skincare.'),
('HP002', 'Paket Flek Skincare'),
('HP003', 'Paket Acne Skincare'),
('HP004', 'Paket Normal Skincare');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskulit`
--

CREATE TABLE IF NOT EXISTS `jeniskulit` (
  `ID_JK` varchar(10) NOT NULL,
  `ketJK` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniskulit`
--

INSERT INTO `jeniskulit` (`ID_JK`, `ketJK`) VALUES
('JK001', 'Kulit Kering.'),
('JK002', 'Kulit Berminyak'),
('JK003', 'Kulit Kombinasi'),
('JK004', 'Kulit Sensitif'),
('JK005', 'Kulit Normal');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `ID_Konsul` varchar(10) NOT NULL,
  `namaPasien` varchar(50) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `noHP` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tglKonsul` varchar(20) NOT NULL,
  `ID_JK` varchar(20) NOT NULL,
  `ID_Penyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`ID_Konsul`, `namaPasien`, `usia`, `jenisKelamin`, `noHP`, `alamat`, `tglKonsul`, `ID_JK`, `ID_Penyakit`) VALUES
('K001', 'nisa ', '22', 'Perempuan', '0823', 'Jl. Berdikari', '2020-09-24 04:51:01', 'JK001', 'P003'),
('K002', 'Linta Auliana', '22', 'Perempuan', '0822', 'Jl Erba', '2020-09-27 16:10:23', 'JK001', 'P003'),
('K003', 'Yola', '20', 'Perempuan', '0852', 'Jl Kartika Sari', '2020-09-27 16:31:43', 'JK002', 'P003'),
('K004', 'nchan', '22', 'Perempuan', '0822', 'jl.erba', '2020-10-02 04:43:23', 'JK001', 'P003'),
('K005', 'linta', '22', 'Perempuan', '0834', 'Jl Erba', '2020-10-02 04:59:31', 'JK005', 'P006');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `ID_Penyakit` varchar(10) NOT NULL,
  `ketPenyakit` varchar(25) NOT NULL,
  `ID_HP` varchar(10) NOT NULL,
  `opsiTR` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`ID_Penyakit`, `ketPenyakit`, `ID_HP`, `opsiTR`) VALUES
('P001', 'Penuaan.', 'HP001', 'Chemical Peeling, Tanam Benang, Radio Frequency, Botox and Filler Injection'),
('P002', 'Flek atau Melasma', 'HP002', '1. Chemical Peeling\r\n2. Laser\r\n3. Mesotherapy\r\n4. Microdermabrasi'),
('P003', 'Jerawat Ringan', 'HP003', '1. Facial Treatment\r\n2. Chemical Peeling'),
('P004', 'Jerawat Sedang', 'HP003', '1. Facial Treatment\r\n2. Acne Peeling'),
('P005', 'Jerawat Berat', 'HP003', '1. Facial Treatment\r\n2. Injeksi Jerawat\r\n3. Acne Peeling'),
('P006', 'Tidak Ada', 'HP004', '1. Facial Treatment');

-- --------------------------------------------------------

--
-- Table structure for table `rulefr`
--

CREATE TABLE IF NOT EXISTS `rulefr` (
`ID_ruleFR` int(5) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `pertanyaan` varchar(10) NOT NULL,
  `ya` varchar(10) NOT NULL,
  `tidak` varchar(10) NOT NULL,
  `ID_JK` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rulefr`
--

INSERT INTO `rulefr` (`ID_ruleFR`, `parent`, `pertanyaan`, `ya`, `tidak`, `ID_JK`) VALUES
(1, '-', 'FR001', 'FR002', 'FR003', '-'),
(2, 'FR001', 'FR002', 'FR004', 'FR005', '-'),
(3, 'FR002', 'FR004', 'FR006', 'FR007', '-'),
(4, 'FR004', 'FR006', '-', 'FR008', 'JK001'),
(10, 'FR006', 'FR008', 'FR009', 'FR010', '-'),
(11, 'FR008', 'FR009', '-', '-', 'JK002'),
(12, 'FR008', 'FR010', 'FR011', '-', 'JK001'),
(13, 'FR004', 'FR007', 'FR009', 'FR010', '-'),
(14, 'FR007', 'FR009', 'FR015', '-', 'JK003'),
(15, 'FR009', 'FR015', '-', '-', 'JK002'),
(16, 'FR007', 'FR010', 'FR011', 'FR016', '-'),
(17, 'FR010', 'FR011', '-', '-', 'JK004'),
(18, 'FR002', 'FR005', 'FR006', 'FR017', '-'),
(19, 'FR005', 'FR006', '-', 'FR011', 'JK001'),
(20, 'FR006', 'FR011', 'FR012', '-', 'JK005'),
(21, 'FR011', 'FR012', '-', '-', 'JK003'),
(22, 'FR005', 'FR017', '-', 'FR013', 'JK005'),
(23, 'FR017', 'FR013', 'FR009', '-', 'JK005'),
(24, 'FR013', 'FR009', '-', 'FR016', 'JK002'),
(25, 'FR009', 'FR016', '-', '-', 'JK003'),
(26, 'FR001', 'FR003', 'FR002', 'FR014', '-'),
(27, 'FR003', 'FR002', 'FR015', 'FR006', '-'),
(28, 'FR002', 'FR015', 'FR011', 'FR006', '-'),
(29, 'FR015', 'FR011', '-', '-', 'JK002'),
(30, 'FR015', 'FR006', '-', 'FR012', 'JK001'),
(31, 'FR006', 'FR012', 'FR008', '-', 'JK002'),
(32, 'FR012', 'FR008', '-', '-', 'JK003'),
(33, 'FR002', 'FR006', 'FR016', 'FR017', '-'),
(34, 'FR006', 'FR016', '-', 'FR010', 'JK004'),
(35, 'FR016', 'FR010', 'FR011', '-', 'JK001'),
(36, 'FR006', 'FR017', '-', '-', 'JK005'),
(37, 'FR003', 'FR014', 'FR010', 'FR015', '-'),
(38, 'FR014', 'FR010', 'FR011', 'FR008', '-'),
(39, 'FR010', 'FR008', 'FR013', 'FR016', '-'),
(40, 'FR008', 'FR013', '-', '-', 'JK002'),
(41, 'FR008', 'FR016', '-', 'FR019', 'JK004'),
(42, 'FR016', 'FR019', '-', '-', 'JK001'),
(43, 'FR014', 'FR015', 'FR018', 'FR012', '-'),
(44, 'FR015', 'FR018', 'FR006', 'FR009', '-'),
(45, 'FR018', 'FR006', '-', '-', 'JK003'),
(46, 'FR018', 'FR009', '-', 'FR019', 'JK002'),
(47, 'FR009', 'FR019', 'FR006', '-', 'JK002'),
(48, 'FR019', 'FR006', '-', '-', 'JK003'),
(49, 'FR015', 'FR012', 'FR018', '-', 'JK005'),
(50, 'FR012', 'FR018', '-', '-', 'JK003'),
(51, 'FR007', 'FR010', 'FR011', 'FR016', '-'),
(52, 'FR010', 'FR016', 'FR011', '-', 'JK001'),
(53, 'FR016', 'FR011', '-', '-', 'JK004');

-- --------------------------------------------------------

--
-- Table structure for table `rulegp`
--

CREATE TABLE IF NOT EXISTS `rulegp` (
`ID_ruleGP` int(5) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `pertanyaan` varchar(10) NOT NULL,
  `ya` varchar(10) NOT NULL,
  `tidak` varchar(10) NOT NULL,
  `ID_Penyakit` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rulegp`
--

INSERT INTO `rulegp` (`ID_ruleGP`, `parent`, `pertanyaan`, `ya`, `tidak`, `ID_Penyakit`) VALUES
(1, '-', 'G001', 'G002', 'G003', '-'),
(2, 'G001', 'G002', 'G004', 'G005', '-'),
(4, 'G002', 'G004', '-', 'G005', 'P003'),
(5, 'G004', 'G005', 'G006', 'G003', '-'),
(6, 'G005', 'G006', 'G013', 'G004', '-'),
(7, 'G006', 'G013', '-', 'G014', 'P005'),
(8, 'G013', 'G014', '-', 'G007', 'P005'),
(9, 'G006', 'G004', '-', '-', 'P003'),
(10, 'G014', 'G007', '-', '-', 'P004'),
(11, 'G005', 'G003', 'G007', '-', 'P003'),
(12, 'G003', 'G007', '-', 'G008', 'P004'),
(13, 'G007', 'G008', '-', '-', 'P001'),
(14, 'G002', 'G005', 'G006', 'G003', '-'),
(15, 'G001', 'G003', 'G009', 'G002', '-'),
(16, 'G003', 'G009', 'G010', 'G008', '-'),
(17, 'G009', 'G010', '-', 'G011', 'P002'),
(18, 'G010', 'G011', '-', '-', 'P002'),
(19, 'G009', 'G008', '-', 'G012', 'P001'),
(20, 'G008', 'G012', '-', '-', 'P001'),
(21, 'G003', 'G002', 'G006', '-', 'P006'),
(22, 'G002', 'G006', 'G007', 'G004', '-'),
(23, 'G006', 'G007', '-', '-', 'P004'),
(24, 'G006', 'G004', '-', '-', 'P003');

-- --------------------------------------------------------

--
-- Table structure for table `temp_rulefr`
--

CREATE TABLE IF NOT EXISTS `temp_rulefr` (
`ID_temp` int(5) NOT NULL,
  `pertanyaan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_rulefr`
--

INSERT INTO `temp_rulefr` (`ID_temp`, `pertanyaan`) VALUES
(1, '-'),
(2, 'FR001'),
(3, 'FR003'),
(4, 'FR014'),
(5, 'FR015');

-- --------------------------------------------------------

--
-- Table structure for table `temp_rulegp`
--

CREATE TABLE IF NOT EXISTS `temp_rulegp` (
`ID_tempGP` int(5) NOT NULL,
  `pertanyaan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_rulegp`
--

INSERT INTO `temp_rulegp` (`ID_tempGP`, `pertanyaan`) VALUES
(1, 'G001'),
(2, 'G003');

-- --------------------------------------------------------

--
-- Table structure for table `temp_ya_rulefr`
--

CREATE TABLE IF NOT EXISTS `temp_ya_rulefr` (
`id` int(11) NOT NULL,
  `pertanyaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_ya_rulegp`
--

CREATE TABLE IF NOT EXISTS `temp_ya_rulegp` (
`id` int(11) NOT NULL,
  `pertanyaan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_ya_rulegp`
--

INSERT INTO `temp_ya_rulegp` (`id`, `pertanyaan`) VALUES
(11, 'G001'),
(12, 'G001'),
(13, 'G002'),
(14, 'G004'),
(15, 'G004'),
(16, 'G001'),
(17, 'G002'),
(18, 'G004'),
(19, 'G001'),
(20, 'G002'),
(21, 'G004'),
(22, 'G001'),
(23, 'G002'),
(24, 'G004');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
`ID_Testi` int(5) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_before` date NOT NULL,
  `namaB` varchar(100) NOT NULL,
  `tgl_after` date NOT NULL,
  `namaA` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_admin` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faktorresiko`
--
ALTER TABLE `faktorresiko`
 ADD PRIMARY KEY (`ID_FR`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`ID_Gejala`);

--
-- Indexes for table `jeniskulit`
--
ALTER TABLE `jeniskulit`
 ADD PRIMARY KEY (`ID_JK`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
 ADD PRIMARY KEY (`ID_Konsul`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`ID_Penyakit`);

--
-- Indexes for table `rulefr`
--
ALTER TABLE `rulefr`
 ADD PRIMARY KEY (`ID_ruleFR`), ADD KEY `ID_JK` (`ID_JK`);

--
-- Indexes for table `rulegp`
--
ALTER TABLE `rulegp`
 ADD PRIMARY KEY (`ID_ruleGP`), ADD KEY `ID_JK` (`ID_Penyakit`);

--
-- Indexes for table `temp_rulefr`
--
ALTER TABLE `temp_rulefr`
 ADD PRIMARY KEY (`ID_temp`);

--
-- Indexes for table `temp_rulegp`
--
ALTER TABLE `temp_rulegp`
 ADD PRIMARY KEY (`ID_tempGP`);

--
-- Indexes for table `temp_ya_rulefr`
--
ALTER TABLE `temp_ya_rulefr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_ya_rulegp`
--
ALTER TABLE `temp_ya_rulegp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
 ADD PRIMARY KEY (`ID_Testi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rulefr`
--
ALTER TABLE `rulefr`
MODIFY `ID_ruleFR` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `rulegp`
--
ALTER TABLE `rulegp`
MODIFY `ID_ruleGP` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `temp_rulefr`
--
ALTER TABLE `temp_rulefr`
MODIFY `ID_temp` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `temp_rulegp`
--
ALTER TABLE `temp_rulegp`
MODIFY `ID_tempGP` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `temp_ya_rulefr`
--
ALTER TABLE `temp_ya_rulefr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp_ya_rulegp`
--
ALTER TABLE `temp_ya_rulegp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
MODIFY `ID_Testi` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
