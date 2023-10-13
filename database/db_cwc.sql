-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 05:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cwc`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_data`
--

CREATE TABLE `db_data` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `agent` varchar(200) NOT NULL,
  `call_status` enum('SUCCES','ABANDON') NOT NULL,
  `caller_number` varchar(200) NOT NULL,
  `caller_type` varchar(11) NOT NULL,
  `caller_name` varchar(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `card_no` varchar(200) NOT NULL,
  `blank_call` enum('NO','YES') NOT NULL,
  `inquiry` enum('NO','YES') NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `sub1` varchar(200) NOT NULL,
  `sub2` varchar(200) NOT NULL,
  `sub3` varchar(200) NOT NULL,
  `jenis_komplain` longtext NOT NULL,
  `perihal_pengaduan` longtext NOT NULL,
  `feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_data`
--

INSERT INTO `db_data` (`id`, `date`, `agent`, `call_status`, `caller_number`, `caller_type`, `caller_name`, `account_no`, `card_no`, `blank_call`, `inquiry`, `kategori`, `sub1`, `sub2`, `sub3`, `jenis_komplain`, `perihal_pengaduan`, `feedback`) VALUES
(1, '2023-10-13 10:03:32', 'agent1', 'SUCCES', '2147483647', 'Customer', 'Yuda', '123456789', '987654321', 'NO', 'NO', '2', '17', '22', '1', 'Pengaduan->Layanan \r\n->ATM \r\n->BLOKIR ATM\r\n', '<p>Transaksi Transfer via Betang Mobile,</p><p>rekening terdebet tetapi dana belum masuk ke no tujuan dengan nominal Rp. 600.000,-</p><p>Nama: kani</p><p>No Rek: 1000xxx</p><p>CIF: 000002xxx</p><p>Betang&nbsp;Mobile: 082137372217</p><p>Rek Tujuan: BCA 770xxx An. uji coba</p><p>TTl: dd/mm/yy</p><p>Ibu: ujicoba</p><p>Alamat: Jl. indonesia raya</p><p>Tgl trx: dd/mm/yyyy</p><p>CP/WA: 0821xxxxxx</p>', '<p>sjojsojs</p>');

-- --------------------------------------------------------

--
-- Table structure for table `db_kategori`
--

CREATE TABLE `db_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_kategori`
--

INSERT INTO `db_kategori` (`id`, `kategori`, `aktif`) VALUES
(1, 'Informasi', 'Y'),
(2, 'Pengaduan', 'Y'),
(3, 'Non pengaduan', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_menu`
--

CREATE TABLE `db_menu` (
  `id` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `main_menu` varchar(200) NOT NULL,
  `nama_ikon` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `submenu` enum('Y','T') NOT NULL,
  `admin_menu` enum('Y','T') NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  `akses` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_menu`
--

INSERT INTO `db_menu` (`id`, `urutan`, `main_menu`, `nama_ikon`, `link`, `submenu`, `admin_menu`, `aktif`, `akses`) VALUES
(1, 1, 'Dasboard', 'fa fa-bar-chart', 'admin', 'T', 'Y', 'Y', '3'),
(2, 2, 'Data', 'fa fa-file-text-o', 'data', 'T', 'Y', 'Y', '3'),
(3, 3, 'Matrix', 'fa fa-list-ul', '', 'Y', 'Y', 'Y', '2'),
(4, 5, 'Akun', 'fa fa-odnoklassniki', 'akun', 'T', 'Y', 'Y', '3'),
(5, 6, 'Backup DB', 'fa fa-database', 'backupDb', 'T', 'Y', 'Y', '2'),
(26, 4, 'Laporan', 'fa fa-file-excel-o', 'laporan', 'T', 'Y', 'Y', '2');

-- --------------------------------------------------------

--
-- Table structure for table `db_sub1`
--

CREATE TABLE `db_sub1` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sub` varchar(500) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sub1`
--

INSERT INTO `db_sub1` (`id`, `id_kategori`, `sub`, `aktif`) VALUES
(1, 1, 'Lain-lain', 'Y'),
(2, 1, 'Layanan', 'Y'),
(3, 1, 'Pendanaan (Funding)', 'Y'),
(4, 1, 'Pembiayaan (Financing) ', 'Y'),
(5, 1, 'Alamat', 'Y'),
(11, 3, 'Empety Call', 'Y'),
(12, 3, 'Telepon iseng', 'Y'),
(13, 3, 'Telepon terputus', 'Y'),
(14, 3, 'Salah sambung', 'Y'),
(15, 2, 'Pendanaan (Funding) \r\n', 'Y'),
(16, 2, 'Pembiayaan (Financing) \r\n', 'Y'),
(17, 2, 'Layanan \r\n', 'Y'),
(18, 2, 'Blokir Rekening\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_sub2`
--

CREATE TABLE `db_sub2` (
  `id` int(11) NOT NULL,
  `id_sub1` int(11) NOT NULL,
  `sub` varchar(500) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sub2`
--

INSERT INTO `db_sub2` (`id`, `id_sub1`, `sub`, `aktif`) VALUES
(1, 2, 'ATM', 'Y'),
(2, 2, 'Informasi saldo', 'Y'),
(3, 2, 'Lain-lain', 'Y'),
(4, 2, 'SMS Banking', 'Y'),
(5, 2, 'Mobile Banking', 'Y'),
(6, 2, 'RTGS', 'Y'),
(7, 3, 'Tabungan Taheta\r\n', 'Y'),
(8, 3, 'Tabungan Simpenan Pelajar (Simpel)\r\n', 'Y'),
(9, 3, 'Giro Badan-badan/Perusahaan Pemerintah\r\n', 'Y'),
(10, 3, 'Giro Perorangan\r\n', 'Y'),
(11, 3, 'Deposito\r\n', 'Y'),
(12, 4, 'Kredit Usaha Rakyat\r\n', 'Y'),
(13, 4, 'Kredit Multi Guna Konsumtif\r\n', 'Y'),
(14, 4, 'KPR Umum /Swadaya Bank Kalteng\r\n', 'Y'),
(15, 5, 'Alamat Kantor Cabang\r\n', 'Y'),
(16, 5, 'Alamat Kantor Pusat\r\n', 'Y'),
(17, 5, 'Alamat Kantor Cabang Pembantu\r\n', 'Y'),
(18, 15, 'Giro Badan-Badan/Perusahaan Pemerintah\r\n', 'Y'),
(19, 16, 'Kredit Multi Guna Konsumtif\r\n', 'Y'),
(21, 17, 'SKNBI\r\n', 'Y'),
(22, 17, 'ATM \r\n', 'Y'),
(23, 17, 'RTGS\r\n', 'Y'),
(24, 17, 'SMS Banking \r\n', 'Y'),
(25, 17, 'Mobile Banking \r\n', 'Y'),
(29, 17, 'Lain-lain', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_sub3`
--

CREATE TABLE `db_sub3` (
  `id` int(11) NOT NULL,
  `id_sub2` int(11) NOT NULL,
  `sub` varchar(500) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sub3`
--

INSERT INTO `db_sub3` (`id`, `id_sub2`, `sub`, `aktif`) VALUES
(1, 22, 'BLOKIR ATM\r\n', 'Y'),
(2, 22, 'Klaim ATM\r\n', 'Y'),
(3, 22, 'Lain-Lain\r\n', 'Y'),
(4, 24, 'hp hilang\r\n', 'Y'),
(5, 24, 'Pembelian\r\n', 'Y'),
(6, 24, 'Pembayaran Tagihan\r\n', 'Y'),
(7, 24, 'Ganti Pin\r\n', 'Y'),
(8, 24, 'Lain-Lain\r\n', 'Y'),
(9, 24, 'Transfer Antar\r\n', 'Y'),
(10, 24, 'Pin sms Banking keblokir\r\n', 'Y'),
(11, 25, 'Lain-lain\r\n', 'Y'),
(12, 25, 'Pembelian\r\n', 'Y'),
(13, 25, 'Ganti Mpin\r\n', 'Y'),
(14, 25, 'Transfer Antar Bank\r\n', 'Y'),
(15, 25, 'Pembayaran\r\n', 'Y'),
(16, 25, 'Pin MBanking terblokir\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_submenu`
--

CREATE TABLE `db_submenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `nama_sub` varchar(200) NOT NULL,
  `ikon_sub` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `admin_submenu` enum('Y','T') NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_submenu`
--

INSERT INTO `db_submenu` (`id`, `id_menu`, `urutan`, `nama_sub`, `ikon_sub`, `link`, `admin_submenu`, `aktif`) VALUES
(1, 3, 1, 'Kategori', 'fa fa-tags', 'kategori', 'Y', 'Y'),
(2, 3, 1, 'Sub 1', 'fa fa-tags', 'sub1', 'Y', 'Y'),
(3, 3, 3, 'Sub 2', 'fa fa-tags', 'sub2', 'Y', 'Y'),
(4, 3, 4, 'Sub 3', 'fa fa-tags', 'sub3', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `file`, `password`, `akses`) VALUES
(1, 'Superadmin', 'admin.png', '$2y$10$wKDUNG9ztubO0OQf342aGOp14jCyhEF1Fb9As/QeRg9frVbXOPb7O', 1),
(204, 'yuda', 'admin.png', '$2y$10$TWbyAv0KtZgbm51efzHDNuHwGMcFgwXTfeDsyhXfLUsBt.BJIywiC', 1),
(206, 'admin', 'admin.png', '$2y$10$k7.z6CrTiM1rXvZh7Dr2vOP0n3WFrJqgx5N4KgqBWYM0ntWuO.Pdm', 2),
(208, 'agent1', 'admin.png', '$2y$10$RvkwO8sXQh4sn4s.2e1Nl.phMEH4oZdk9iReRkJGbgHYBgNbK8qtG', 3),
(209, 'agent2', 'admin.png', '$2y$10$hFIdaxjVQiayOhNlgy11Sup5qnUAUF68KIw7/hxJcBojOoi.nC2uy', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_data`
--
ALTER TABLE `db_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_kategori`
--
ALTER TABLE `db_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_menu`
--
ALTER TABLE `db_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sub1`
--
ALTER TABLE `db_sub1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kat` (`id_kategori`);

--
-- Indexes for table `db_sub2`
--
ALTER TABLE `db_sub2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub` (`id_sub1`);

--
-- Indexes for table `db_sub3`
--
ALTER TABLE `db_sub3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_id` (`id_sub2`);

--
-- Indexes for table `db_submenu`
--
ALTER TABLE `db_submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu` (`id_menu`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_data`
--
ALTER TABLE `db_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_kategori`
--
ALTER TABLE `db_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_menu`
--
ALTER TABLE `db_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `db_sub1`
--
ALTER TABLE `db_sub1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `db_sub2`
--
ALTER TABLE `db_sub2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `db_sub3`
--
ALTER TABLE `db_sub3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `db_submenu`
--
ALTER TABLE `db_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_sub1`
--
ALTER TABLE `db_sub1`
  ADD CONSTRAINT `sub_kat` FOREIGN KEY (`id_kategori`) REFERENCES `db_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_sub2`
--
ALTER TABLE `db_sub2`
  ADD CONSTRAINT `sub` FOREIGN KEY (`id_sub1`) REFERENCES `db_sub1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_sub3`
--
ALTER TABLE `db_sub3`
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`id_sub2`) REFERENCES `db_sub2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_submenu`
--
ALTER TABLE `db_submenu`
  ADD CONSTRAINT `menu` FOREIGN KEY (`id_menu`) REFERENCES `db_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
