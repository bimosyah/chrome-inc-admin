-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 02:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chromeinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `ongkos_seleb` int(5) NOT NULL,
  `bahan_seleb` int(7) NOT NULL,
  `ongkos_crom` int(7) NOT NULL,
  `bahan_crom` int(7) NOT NULL,
  `ongkos_hapus_cat` int(7) NOT NULL,
  `marketing` int(7) NOT NULL,
  `listrik` int(7) NOT NULL,
  `pengepakan_barang` int(7) NOT NULL,
  `bonus` int(7) NOT NULL,
  `peralatan` int(7) NOT NULL,
  `omset_pabrik` int(7) NOT NULL,
  `total_harga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `ongkos_seleb`, `bahan_seleb`, `ongkos_crom`, `bahan_crom`, `ongkos_hapus_cat`, `marketing`, `listrik`, `pengepakan_barang`, `bonus`, `peralatan`, `omset_pabrik`, `total_harga`) VALUES
(1, 'AR BK', 'Arm Bebek Kecil', 8550, 4750, 5700, 4750, 2850, 4750, 9500, 1900, 4750, 14250, 33250, 95000),
(2, 'AR GL K', 'Arm GL, Kaze', 9000, 5000, 6000, 5000, 3000, 5000, 10000, 2000, 5000, 15000, 35000, 100000),
(3, 'AR MT', 'Arm Matic', 9000, 5000, 6000, 5000, 3000, 5000, 10000, 2000, 5000, 15000, 35000, 100000),
(4, 'AR N FU V', 'Arm Ninja, FU, Vxion', 11700, 6500, 7800, 6500, 3900, 6500, 13000, 2600, 6500, 19500, 45500, 130000),
(5, 'AR TG', 'Arm Tiger', 10350, 5750, 6900, 5750, 3450, 5750, 11500, 2300, 5750, 17250, 40250, 115000),
(6, 'BL-KP MP TG GL ', 'Blok/Kop MP, Tiger, GL, CB', 9900, 5500, 6600, 5500, 3300, 5500, 11000, 2200, 5500, 16500, 38500, 110000),
(7, 'BL-KP BBK MT', 'Blok/Kop Bbk Mtc', 9000, 5000, 6000, 5000, 3000, 5000, 10000, 2000, 5000, 15000, 35000, 100000),
(8, 'BL-KP RD FU', 'Blok/Kop Radiator FU', 10350, 5750, 6900, 5750, 3450, 5750, 11500, 2300, 5750, 17250, 40250, 115000),
(9, 'BTM-BYS', 'Bottom Byson, 250cc ++', 9900, 5500, 6600, 5500, 3300, 5500, 11000, 2200, 5500, 16500, 38500, 110000),
(10, 'BTM-MP TG CB GL', 'Botton Mp, Tiger CB, GL', 9450, 5250, 6300, 5250, 3150, 5250, 10500, 2100, 5250, 15750, 36750, 105000),
(11, 'BTM-STD BBK MTC', 'Bottom Std Bebek Matic', 8550, 4750, 5700, 4750, 2850, 4750, 9500, 1900, 4750, 14250, 33250, 95000),
(12, 'CLPR', 'Caliper', 3150, 1750, 2100, 1750, 1050, 1750, 3500, 700, 1750, 5250, 12250, 35000),
(13, 'CRCS BBK', 'Crancase Bebek', 18000, 10000, 12000, 10000, 6000, 10000, 20000, 4000, 10000, 30000, 70000, 200000),
(14, 'CRCS MTC', 'Crancase Matic', 22500, 12500, 15000, 12500, 7500, 12500, 25000, 5000, 12500, 37500, 87500, 250000),
(15, 'CRCS SPT', 'Crancase Sport', 19800, 11000, 13200, 11000, 6600, 11000, 22000, 4400, 11000, 33000, 77000, 220000),
(16, 'CVT BLG', 'Cvt Bolong', 18000, 10000, 12000, 10000, 6000, 10000, 20000, 4000, 10000, 30000, 70000, 200000),
(17, 'CVT HNDA', 'CVT Honda', 16650, 9250, 11100, 9250, 5500, 9250, 18500, 3700, 9250, 27750, 64800, 185000),
(18, 'CVT NMX PCX AEROX', 'CVT Nmax, Pcx, Aerox', 18000, 10000, 12000, 10000, 6000, 10000, 20000, 4000, 10000, 30000, 70000, 200000),
(19, 'CVT YMH', 'CVT Yamaha', 17550, 9750, 11700, 9750, 5850, 9750, 19500, 3900, 9750, 29250, 68250, 195000),
(20, 'DNMO STR', 'Dinamo Stater', 4050, 2250, 2700, 2250, 1350, 2250, 4500, 900, 2250, 6750, 15750, 45000),
(21, 'HNDL', 'Handle/ Pc', 1350, 750, 900, 750, 450, 750, 1500, 300, 750, 2250, 5250, 15000),
(22, 'PSTP', 'Injakan Postep', 900, 500, 600, 500, 300, 500, 1000, 200, 500, 1500, 3500, 10000),
(23, 'KLTR CB GL ND', 'Kalter CB GL No Double', 22500, 12500, 15000, 12500, 7500, 12500, 25000, 5000, 12500, 37500, 87500, 250000),
(24, 'KLTR FU VX NJ', 'Kalter FU Vixon Ninja', 23400, 13000, 15600, 13000, 7800, 13000, 26000, 5200, 13000, 39000, 91000, 260000),
(25, 'KLTR GR SP C70', 'Kalter Grand/Supra/C70', 22500, 12500, 15000, 12500, 7500, 12500, 25000, 5000, 12500, 37500, 87500, 250000),
(26, 'KLTR TGR MP', 'Kalter Tiger/ Mp', 22500, 12500, 15000, 12500, 7500, 12500, 25000, 5000, 12500, 37500, 87500, 250000),
(27, 'KBR P NJ', 'Karbu Pe/ Ninja', 4500, 2500, 3000, 2500, 1500, 2500, 5000, 1000, 2500, 7500, 17500, 50000),
(28, 'KNLPT BBK', 'Knalpot Bebek Std', 7200, 4000, 4800, 4000, 2400, 4000, 8000, 1600, 4000, 12000, 28000, 80000),
(29, 'KNLPT MTC STD', 'Knalpot Matic Std', 7650, 4250, 5100, 4250, 2550, 4250, 8500, 1700, 4250, 12750, 29750, 85000),
(30, 'KNLPT SP STD', 'Knalpot Sport Std', 9900, 5500, 6600, 5500, 3300, 5500, 11000, 2200, 5500, 16500, 38500, 110000),
(31, 'MNP K', 'Manipol Karbu', 2250, 1250, 1500, 1250, 750, 1250, 2500, 500, 1250, 3750, 8750, 25000),
(32, 'MNSN FU 3', 'Manisan FU 3PC', 4500, 2500, 3000, 2500, 1500, 2500, 5000, 1000, 2500, 7500, 17500, 50000),
(33, 'MSTR RB', 'Master Rem Belakang', 3150, 1750, 2100, 1750, 1050, 1750, 3500, 700, 1750, 5250, 12250, 35000),
(34, 'MSTR RD', 'Master Rem Depan', 3150, 1750, 2100, 1750, 1050, 1750, 3500, 700, 1750, 5250, 12250, 35000),
(35, 'OLI C FU', 'Oli Cooler FU', 4500, 2500, 3000, 2500, 1500, 2500, 5000, 1000, 2500, 7500, 17500, 50000),
(36, 'P CLPR D', 'P. Caliper Depan', 1350, 750, 900, 750, 450, 750, 1500, 300, 750, 2250, 5250, 15000),
(37, 'PG NG', 'P. Gear/ Nap Gear', 2250, 1250, 1500, 1250, 750, 1250, 2500, 500, 1250, 3750, 8750, 25000),
(38, 'P HNDL KPL', 'P. Handle / Kopling', 1800, 1000, 1200, 1000, 600, 1000, 2000, 400, 1000, 3000, 7000, 20000),
(39, 'P LP FU GL S', 'P. Lampu FU, GL, Sejenis', 2700, 1500, 1800, 1500, 900, 1500, 3000, 600, 1500, 4500, 10500, 30000),
(40, 'P CLPR B', 'P. Caliper Belakang', 1530, 850, 1020, 850, 510, 850, 1700, 340, 850, 2550, 5950, 17000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(25) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_barang_masuk`
-- (See below for the actual view)
--
CREATE TABLE `daftar_barang_masuk` (
`nama_customer` varchar(25)
,`tanggal_masuk` date
,`status` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `harga_total` bigint(20) NOT NULL,
  `estimasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(10) NOT NULL,
  `no_inv` varchar(10) NOT NULL,
  `nama_inv` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `harga_beli` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `no_inv`, `nama_inv`, `jumlah`, `satuan`, `harga_beli`, `keterangan`) VALUES
(1, '1', 'botol', '1', 'buah', '10000', 'tupperware'),
(2, '2', 'Mouse', '1', 'buah', '150000', 'Logitech kecil'),
(3, '3', 'VCO', '500', 'ml', '20000', 'biar kulit kinclong');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `username`, `password`, `no_telp`, `alamat`) VALUES
(1, 'Ninda', 'Admin', 'ninda', '70090d3b9c2cc498a35a8a93c2a5b4b1', 2147483647, 'Malang'),
(2, 'Jessica', 'Manager', 'jessica', '056f2914fd9a607', 2147483647, 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `daftar_barang_masuk`
--
DROP TABLE IF EXISTS `daftar_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_barang_masuk`  AS  select `customer`.`nama_customer` AS `nama_customer`,`transaksi`.`tanggal_masuk` AS `tanggal_masuk`,`transaksi`.`status` AS `status` from (`transaksi` join `customer` on((`transaksi`.`id_customer` = `transaksi`.`id_customer`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
