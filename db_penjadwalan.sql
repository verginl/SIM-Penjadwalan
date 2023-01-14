-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Okt 2015 pada 04.27
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjadwalan`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_absen`
--
CREATE TABLE IF NOT EXISTS `qw_absen` (
`id_karyawan` int(2)
,`kd_shift` int(3)
,`tgl_absen` varchar(10)
,`username` varchar(50)
,`nama_karyawan` varchar(50)
,`jadwal_masuk` varchar(10)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_absen_detail`
--
CREATE TABLE IF NOT EXISTS `qw_absen_detail` (
`id_karyawan` int(2)
,`kd_shift` int(3)
,`tgl_absen` varchar(10)
,`username` varchar(50)
,`nama_karyawan` varchar(50)
,`id_jam` int(2)
,`jam_masuk` varchar(13)
,`jadwal_masuk` varchar(10)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_histori_costumer`
--
CREATE TABLE IF NOT EXISTS `qw_histori_costumer` (
`id_histori` int(11)
,`id_tiketrequestvisit` int(11)
,`no_tiket` varchar(200)
,`nama_pelanggan` varchar(200)
,`alamat` text
,`pic` varchar(100)
,`id_infrastruktur` int(3)
,`infrastruktur` varchar(30)
,`id_problem` int(3)
,`initial_problem` varchar(200)
,`id_area` int(3)
,`area` varchar(50)
,`id_service` int(2)
,`service` varchar(50)
,`tgl_visit` varchar(30)
,`id_status` int(3)
,`status` varchar(50)
,`note` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_list_backbone`
--
CREATE TABLE IF NOT EXISTS `qw_list_backbone` (
`id_tiketbackbone` int(11)
,`id_problem_backbone` int(3)
,`initial_problem_backbone` varchar(50)
,`id_area` int(3)
,`area` varchar(50)
,`sub_area` varchar(150)
,`subjek_email` varchar(100)
,`id_infrastruktur` int(3)
,`infrastruktur` varchar(30)
,`id_level` int(2)
,`level` varchar(50)
,`note` text
,`tgl_visit` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_list_costumer`
--
CREATE TABLE IF NOT EXISTS `qw_list_costumer` (
`id_tiketrequestvisit` int(10)
,`no_tiket` varchar(100)
,`nama_pelanggan` varchar(100)
,`alamat` text
,`pic` varchar(100)
,`id_infrastruktur` int(3)
,`infrastruktur` varchar(30)
,`id_problem` int(3)
,`initial_problem` varchar(200)
,`id_area` int(3)
,`area` varchar(50)
,`id_service` int(2)
,`service` varchar(50)
,`note` text
,`tgl_visit` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_report_backbone`
--
CREATE TABLE IF NOT EXISTS `qw_report_backbone` (
`id_report` int(11)
,`id_tiketbackbone` int(11)
,`initial_problem_backbone` varchar(200)
,`area` varchar(50)
,`sub_area` varchar(150)
,`subjek_email` varchar(100)
,`infrastruktur` varchar(30)
,`level` varchar(50)
,`id_karyawan` int(11)
,`waktu` varchar(13)
,`tgl_visit` varchar(30)
,`action` text
,`problem_sulving` text
,`nama_partner` varchar(200)
,`nama_karyawan` varchar(50)
,`username` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_report_ts`
--
CREATE TABLE IF NOT EXISTS `qw_report_ts` (
`id_report` int(10)
,`id_tiketrequestvisit` int(10)
,`no_tiket` varchar(100)
,`nama_pelanggan` varchar(100)
,`alamat` text
,`pic` varchar(100)
,`infrastruktur` varchar(30)
,`initial_problem` varchar(200)
,`area` varchar(50)
,`service` varchar(50)
,`id_karyawan` int(3)
,`no_telp` varchar(12)
,`nama_modem` varchar(50)
,`nama_replace_modem` varchar(50)
,`replace_adaptor` varchar(5)
,`serial_modem_cabut` varchar(100)
,`serial_modem_pasang` varchar(100)
,`action` text
,`solusi` text
,`status` varchar(50)
,`tgl_visit` varchar(20)
,`waktu` varchar(13)
,`charge` varchar(100)
,`nama_partner` varchar(100)
,`nama_karyawan` varchar(50)
,`username` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_send_backbone`
--
CREATE TABLE IF NOT EXISTS `qw_send_backbone` (
`id_tiketbackbone` int(11)
,`id_problem_backbone` int(3)
,`initial_problem_backbone` varchar(50)
,`id_area` int(3)
,`area` varchar(50)
,`sub_area` varchar(150)
,`subjek_email` varchar(100)
,`id_infrastruktur` int(3)
,`infrastruktur` varchar(30)
,`id_level` int(2)
,`level` varchar(50)
,`note` text
,`tgl_visit` varchar(30)
,`id_karyawan` int(11)
,`nama_karyawan` varchar(50)
,`jam_masuk` varchar(13)
,`username` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_send_costumer`
--
CREATE TABLE IF NOT EXISTS `qw_send_costumer` (
`id_tiketrequestvisit` int(10)
,`no_tiket` varchar(200)
,`nama_pelanggan` varchar(200)
,`alamat` text
,`pic` varchar(100)
,`id_infrastruktur` int(3)
,`infrastruktur` varchar(30)
,`id_problem` int(3)
,`initial_problem` varchar(200)
,`id_area` int(3)
,`area` varchar(50)
,`id_service` int(2)
,`service` varchar(50)
,`tgl_visit` varchar(30)
,`id_status` int(2)
,`status` varchar(50)
,`note` text
,`id_karyawan` int(2)
,`nama_karyawan` varchar(50)
,`jam_masuk` varchar(13)
,`username` varchar(50)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE IF NOT EXISTS `tbl_absen` (
  `id_karyawan` int(2) NOT NULL,
  `kd_shift` int(3) NOT NULL,
  `tgl_absen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_karyawan`, `kd_shift`, `tgl_absen`) VALUES
(1, 1, '2015-09-15'),
(2, 1, '2015-09-15'),
(2, 1, '2015-09-17'),
(2, 1, '2015-09-18'),
(2, 2, '2015-09-21'),
(2, 1, '2015-09-22'),
(2, 1, '2015-09-23'),
(1, 1, '2015-09-23'),
(5, 1, '2015-09-23'),
(4, 3, '2015-09-29'),
(2, 1, '2015-09-30'),
(2, 4, '2015-10-01'),
(2, 1, '2015-10-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('Admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin_visiters`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_visiters` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin_visiters`
--

INSERT INTO `tbl_admin_visiters` (`username`, `password`) VALUES
('adminvisit', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agent`
--

CREATE TABLE IF NOT EXISTS `tbl_agent` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agent`
--

INSERT INTO `tbl_agent` (`username`, `password`) VALUES
('agent', '2ec199f1e2de31576869a57488e919ad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
`id_area` int(3) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tbl_area`
--

INSERT INTO `tbl_area` (`id_area`, `area`) VALUES
(1, 'Preventive Maintenance'),
(2, 'Hold'),
(3, 'Pending FTTH'),
(4, 'Serang'),
(5, 'Tanggerang'),
(6, 'Bekasi'),
(7, 'Bogor'),
(8, 'Depok'),
(9, 'Jakarta Utara'),
(10, 'Jakarta Pusat'),
(11, 'Jakarta Selatan'),
(12, 'Jakarta Barat'),
(13, 'Mid dan Sekitarnya'),
(14, 'Priority Customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_charge`
--

CREATE TABLE IF NOT EXISTS `tbl_charge` (
`id_charge` int(3) NOT NULL,
  `charge` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tbl_charge`
--

INSERT INTO `tbl_charge` (`id_charge`, `charge`) VALUES
(1, 'No Charge'),
(2, 'Charge Service Fee (Rp.220.000)'),
(3, 'Drop Cable Replacement - Fiber Optic(Rp.330.000)'),
(4, 'Drop Cable Replacement - Copper(Rp.220.000)'),
(5, 'Connector Replacement - Fiber Optic (Rp.220.000)'),
(6, 'Connector Replacement - Copper RJ45/RJ11(Rp110.000)'),
(7, 'LAN Cable Installation Per Drop Location (max 100m)(Rp.660.000)'),
(8, 'Siemens Optical Network Unit (Rp.1.650.000)'),
(9, 'Corecess Optical Network Unit (Rp.1.650.000)'),
(10, 'Corecess VDSL Modem (Rp.770.000)'),
(11, 'Dlink Boardband Router DIR-615(Rp1.100.000)'),
(12, 'VDSL CPE (Rp.1.650.000)'),
(13, 'VDSL CO (Rp.1.650.000)'),
(14, 'Adaptor Siemens Opticial Network Unit(Rp.220.000)'),
(15, 'Adaptor Corecess Opticial Network Unit(Rp.220.000)'),
(16, 'Adaptor Corecess VDSL Modem(Rp.220.000)'),
(17, 'Adaptor VDSL CPE/VDSL CO(Rp.220.000)'),
(18, 'Modem HFC(Rp.100.000)'),
(19, 'Remote STB(Rp.100.000)'),
(20, 'STB SD(Rp.700.000)'),
(21, 'STB HD(Rp.1.250.000)'),
(22, 'STB Hospitality (Rp.1.000.000)'),
(23, 'Smart Card(Rp.275.000)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_histori`
--

CREATE TABLE IF NOT EXISTS `tbl_histori` (
`id_histori` int(11) NOT NULL,
  `id_tiketrequestvisit` int(11) NOT NULL,
  `no_tiket` varchar(200) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id_infrastruktur` int(2) NOT NULL,
  `id_problem` int(2) NOT NULL,
  `id_area` int(2) NOT NULL,
  `id_service` int(2) NOT NULL,
  `tgl_visit` varchar(30) NOT NULL,
  `id_status` int(2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_histori`
--

INSERT INTO `tbl_histori` (`id_histori`, `id_tiketrequestvisit`, `no_tiket`, `nama_pelanggan`, `alamat`, `pic`, `id_infrastruktur`, `id_problem`, `id_area`, `id_service`, `tgl_visit`, `id_status`, `note`) VALUES
(1, 1, '001', 'PT Test', 'bgt', 'Test', 2, 2, 1, 1, '2015-09-30', 4, 'lo'),
(2, 1, '001', 'PT Test', 'bgt', 'Test', 2, 2, 1, 1, '2015-09-30', 6, 'lokkklsldsldsldl'),
(3, 6, '0987654', 'dsdsd', 'sddsd', 'dsdsd', 3, 1, 2, 3, '2015-09-22', 4, 'cancel done hahaah'),
(4, 2, '002', 'Test', 'Test', 'Vergi Nardian', 2, 2, 1, 1, '2015-09-23', 4, 'LOL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infrastruktur`
--

CREATE TABLE IF NOT EXISTS `tbl_infrastruktur` (
`id_infrastruktur` int(3) NOT NULL,
  `infrastruktur` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_infrastruktur`
--

INSERT INTO `tbl_infrastruktur` (`id_infrastruktur`, `infrastruktur`) VALUES
(1, 'FTTH'),
(2, 'HFC'),
(3, 'METRO-E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
`id_jam` int(2) NOT NULL,
  `jadwal_masuk` varchar(10) NOT NULL,
  `jam_masuk` varchar(13) NOT NULL,
  `kd_shift` varchar(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jam`, `jadwal_masuk`, `jam_masuk`, `kd_shift`) VALUES
(1, 'Normal', '09.00 - 10.00', '1'),
(2, 'Normal', '10.00 - 11.00', '1'),
(3, 'Normal', '11.00 - 12.00', '1'),
(4, 'Normal', '12.00 - 13.00', '1'),
(5, 'Normal', '13.00 - 14.00', '1'),
(6, 'Normal', '14.00 - 15.00', '1'),
(7, 'Normal', '15.00 - 16.00', '1'),
(8, 'Normal', '16.00 - 17.00', '1'),
(9, 'Normal', '17.00 - 18.00', '1'),
(10, 'Shift 1', '07.00 - 08.00', '2'),
(11, 'Shift 1', '08.00 - 09.00', '2'),
(12, 'Shift 1', '09.00 - 10.00', '2'),
(13, 'Shift 1', '11.00 - 12.00', '2'),
(14, 'Shift 1', '12.00 - 13.00', '2'),
(15, 'Shift 1', '13.00 - 14.00', '2'),
(16, 'Shift 1', '14.00 - 15.00', '2'),
(17, 'Shift 1', '15.00 - 16.00', '2'),
(18, 'Shift 2', '14.00 - 15.00', '3'),
(19, 'Shift 2', '15.00 - 16.00', '3'),
(20, 'Shift 2', '16.00 - 17.00', '3'),
(21, 'Shift 2', '17.00 - 18.00', '3'),
(22, 'Shift 2', '18.00 - 19.00', '3'),
(23, 'Shift 2', '19.00 - 20.00', '3'),
(24, 'Shift 2', '20.00 - 21.00', '3'),
(25, 'Shift 2', '21.00 - 22.00', '3'),
(26, 'Shift 3', '22.00 - 23.00', '4'),
(27, 'Shift 3', '23.00 - 00.00', '4'),
(28, 'Shift 3', '00.00 - 01.00', '4'),
(29, 'Shift 3', '01.00 - 02.00', '4'),
(30, 'Shift 3', '02.00 - 03.00', '4'),
(31, 'Shift 3', '03.00 - 04.00', '4'),
(32, 'Shift 3', '04.00 - 05.00', '4'),
(33, 'Shift 3', '05.00 - 06.00', '4'),
(34, 'Shift 3', '06.00 - 07.00', '4'),
(35, 'Shift 3', '07.00 - 08.00', '4'),
(36, 'Middle 1', '12.00 - 13.00', '5'),
(37, 'Middle 1', '13.00 - 14.00', '5'),
(38, 'Middle 1', '14.00 - 15.00', '5'),
(39, 'Middle 1', '15.00 - 16.00', '5'),
(40, 'Middle 1', '16.00 - 17.00', '5'),
(41, 'Middle 1', '17.00 - 18.00', '5'),
(42, 'Middle 1', '18.00 - 19.00', '5'),
(43, 'Middle 1', '19.00 - 20.00', '5'),
(44, 'Middle 1', '20.00 - 21.00', '5'),
(45, 'Middle 2', '16.00 - 17.00', '6'),
(46, 'Middle 2', '17.00 - 18.00', '6'),
(47, 'Middle 2', '18.00 - 19.00', '6'),
(48, 'Middle 2', '19.00 - 20.00', '6'),
(49, 'Middle 2', '20.00 - 21.00', '6'),
(50, 'Middle 2', '21.00 - 22.00', '6'),
(51, 'Middle 2', '22.00 - 23.00', '6'),
(52, 'Middle 2', '23.00 - 24.00', '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
`id_karyawan` int(2) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `jk`, `tgl_lahir`, `no_hp`, `email`, `username`, `password`) VALUES
(1, 'aditya krisna nugraha', 'L', '10-05-2015', '0893645272', 'adit@gmail aja', 'aditya', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'vergi nardian lufyandi', 'L', '26 Mei 1998', '089514414280', 'verginl74@gmail.com', 'vergi', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'deni priatna', 'P', '20-12-2014', '0983712', 'deni@gmail.com', 'deni', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(4, 'adiyrtsha', 'L', '10-10-1010', '09843', 'ajwjqka', 'i', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, 'Razy Dohan', 'L', '03 September 1998', '085772615985', 'razymrd@gmail.com', 'razy', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_level`
--

CREATE TABLE IF NOT EXISTS `tbl_level` (
`id_level` int(2) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
(1, 'High'),
(2, 'Low');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_listrequest_visit`
--

CREATE TABLE IF NOT EXISTS `tbl_listrequest_visit` (
`id_tiketrequestvisit` int(10) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id_infrastruktur` int(3) NOT NULL,
  `id_problem` int(3) NOT NULL,
  `id_area` int(3) NOT NULL,
  `id_service` int(2) NOT NULL,
  `note` text NOT NULL,
  `tgl_visit` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_listrequest_visit`
--

INSERT INTO `tbl_listrequest_visit` (`id_tiketrequestvisit`, `no_tiket`, `nama_pelanggan`, `alamat`, `pic`, `id_infrastruktur`, `id_problem`, `id_area`, `id_service`, `note`, `tgl_visit`) VALUES
(4, '000000000000', 'PT Telkom', 'dsd', 'dsd', 2, 2, 2, 2, 'dsd', '2015-09-28'),
(5, '00000099999', 'PT Biznet', 'Jakarta', 'Vergi Nardian', 2, 2, 2, 2, 'Kok lemot', '2015-10-07');

--
-- Trigger `tbl_listrequest_visit`
--
DELIMITER //
CREATE TRIGGER `tg_return_costumer` AFTER INSERT ON `tbl_listrequest_visit`
 FOR EACH ROW DELETE FROM tbl_send_request_visit WHERE id_tiketrequestvisit = new.id_tiketrequestvisit
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_list_backbone`
--

CREATE TABLE IF NOT EXISTS `tbl_list_backbone` (
`id_tiketbackbone` int(11) NOT NULL,
  `id_problem_backbone` int(3) NOT NULL,
  `id_area` int(3) NOT NULL,
  `sub_area` varchar(150) NOT NULL,
  `subjek_email` varchar(100) NOT NULL,
  `id_infrastruktur` int(3) NOT NULL,
  `id_level` int(2) NOT NULL,
  `note` text NOT NULL,
  `tgl_visit` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_list_backbone`
--

INSERT INTO `tbl_list_backbone` (`id_tiketbackbone`, `id_problem_backbone`, `id_area`, `sub_area`, `subjek_email`, `id_infrastruktur`, `id_level`, `note`, `tgl_visit`) VALUES
(2, 3, 3, 'Jakarta Kota', 'DDSDS', 3, 2, 'DSDSD', '2015-10-06');

--
-- Trigger `tbl_list_backbone`
--
DELIMITER //
CREATE TRIGGER `tg_return_backbone` AFTER INSERT ON `tbl_list_backbone`
 FOR EACH ROW DELETE FROM tbl_send_backbone WHERE id_tiketbackbone = new.id_tiketbackbone
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_modem`
--

CREATE TABLE IF NOT EXISTS `tbl_modem` (
`id_modem` int(3) NOT NULL,
  `nama_modem` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_modem`
--

INSERT INTO `tbl_modem` (`id_modem`, `nama_modem`) VALUES
(1, 'VDSL'),
(2, 'ONU'),
(3, 'Akses UTP Cable'),
(4, 'FO Conveter'),
(5, 'HFC Modem'),
(6, 'DSLAM (SMC/Corecess/Dasan)'),
(7, 'HFC Modem & STB'),
(8, 'STB HD'),
(9, 'STB SD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_problem`
--

CREATE TABLE IF NOT EXISTS `tbl_problem` (
`id_problem` int(3) NOT NULL,
  `initial_problem` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tbl_problem`
--

INSERT INTO `tbl_problem` (`id_problem`, `initial_problem`) VALUES
(1, 'Internet Down'),
(2, 'Internet Up Down'),
(3, 'MetroWAN Down'),
(4, 'MetroWAN Up Down'),
(5, 'Connection Slow'),
(6, 'Internal Problem'),
(7, 'Email Problem'),
(8, 'Aktivasi'),
(9, 'Migrasi'),
(10, 'Meeting'),
(11, 'Standby Support Technical'),
(12, 'TV Problem'),
(13, 'TV & Internet Problem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_problem_backbone`
--

CREATE TABLE IF NOT EXISTS `tbl_problem_backbone` (
`id_problem_backbone` int(3) NOT NULL,
  `initial_problem_backbone` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_problem_backbone`
--

INSERT INTO `tbl_problem_backbone` (`id_problem_backbone`, `initial_problem_backbone`) VALUES
(1, 'OLT Down'),
(2, 'ONB Down'),
(3, 'MPLS Down'),
(4, 'CES Down'),
(5, 'TLS Down'),
(6, 'Nortel Down'),
(7, 'Ring Down'),
(8, 'Dark Fiber Down'),
(9, 'OTN Down');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_replace_modem`
--

CREATE TABLE IF NOT EXISTS `tbl_replace_modem` (
`id_replace_modem` int(3) NOT NULL,
  `nama_replace_modem` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_replace_modem`
--

INSERT INTO `tbl_replace_modem` (`id_replace_modem`, `nama_replace_modem`) VALUES
(1, 'Tidak Replace Modem'),
(2, 'Lampu Line Bllinking'),
(3, 'Line-Link OFF'),
(4, 'Line-Link Blinking'),
(5, 'Connection UpDown'),
(6, 'Power OFF (Mati Total)'),
(7, 'STB Problem'),
(8, 'Modem HFC Problem'),
(9, 'Line Speed OFF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_report`
--

CREATE TABLE IF NOT EXISTS `tbl_report` (
`id_report` int(10) NOT NULL,
  `id_tiketrequestvisit` int(10) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `infrastruktur` varchar(30) NOT NULL,
  `initial_problem` varchar(200) NOT NULL,
  `area` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `id_karyawan` int(3) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `nama_modem` varchar(50) NOT NULL,
  `nama_replace_modem` varchar(50) NOT NULL,
  `replace_adaptor` varchar(5) NOT NULL,
  `serial_modem_cabut` varchar(100) NOT NULL,
  `serial_modem_pasang` varchar(100) NOT NULL,
  `action` text NOT NULL,
  `solusi` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_visit` varchar(20) NOT NULL,
  `waktu` varchar(13) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `nama_partner` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_report`
--

INSERT INTO `tbl_report` (`id_report`, `id_tiketrequestvisit`, `no_tiket`, `nama_pelanggan`, `alamat`, `pic`, `infrastruktur`, `initial_problem`, `area`, `service`, `id_karyawan`, `no_telp`, `nama_modem`, `nama_replace_modem`, `replace_adaptor`, `serial_modem_cabut`, `serial_modem_pasang`, `action`, `solusi`, `status`, `tgl_visit`, `waktu`, `charge`, `nama_partner`) VALUES
(1, 3, '003', '003 Test', 'jkt', 'Testtttt', 'FTTH', 'Internet Up Down', 'Hold', 'Soho', 2, '088888', 'ONU', 'Lampu Line Bllinking', 'Ya', '0909090909', '121212', 'dsdsd', 'dsdsd', 'Pending', '2015-09-21', '10:00 - 12:00', 'Charge Service Fee (Rp.220.000)', 'Razy');

--
-- Trigger `tbl_report`
--
DELIMITER //
CREATE TRIGGER `tg_report_ts` AFTER INSERT ON `tbl_report`
 FOR EACH ROW DELETE FROM tbl_send_request_visit where id_tiketrequestvisit = new.id_tiketrequestvisit
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_report_backbone`
--

CREATE TABLE IF NOT EXISTS `tbl_report_backbone` (
`id_report` int(11) NOT NULL,
  `id_tiketbackbone` int(11) NOT NULL,
  `initial_problem_backbone` varchar(200) NOT NULL,
  `area` varchar(50) NOT NULL,
  `sub_area` varchar(150) NOT NULL,
  `subjek_email` varchar(100) NOT NULL,
  `infrastruktur` varchar(30) NOT NULL,
  `level` varchar(50) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `waktu` varchar(13) NOT NULL,
  `tgl_visit` varchar(30) NOT NULL,
  `action` text NOT NULL,
  `problem_sulving` text NOT NULL,
  `nama_partner` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_report_backbone`
--

INSERT INTO `tbl_report_backbone` (`id_report`, `id_tiketbackbone`, `initial_problem_backbone`, `area`, `sub_area`, `subjek_email`, `infrastruktur`, `level`, `id_karyawan`, `waktu`, `tgl_visit`, `action`, `problem_sulving`, `nama_partner`) VALUES
(1, 2, 'Internet Down', 'Hold', 'Test', 'Test', 'FTTH', 'High', 2, '10:00 - 12:00', '21 September 2015', 'fhjk', 'fghjk', 'Razy dohan'),
(2, 3, 'OLT Down', 'Hold', 'Test', 'Test', 'FTTH', 'Low', 2, '10:00 - 12:00', '2015-09-21', 'jajaja', 'kokoko', 'kokok'),
(3, 1, 'OLT Down', 'Hold', 'Test', 'Test', 'FTTH', 'High', 2, '10:00 - 12:00', '2015-09-21', 'Test', 'Test', 'lol');

--
-- Trigger `tbl_report_backbone`
--
DELIMITER //
CREATE TRIGGER `tg_report_backbone` AFTER INSERT ON `tbl_report_backbone`
 FOR EACH ROW DELETE FROM tbl_send_backbone where id_tiketbackbone = new.id_tiketbackbone
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_send_backbone`
--

CREATE TABLE IF NOT EXISTS `tbl_send_backbone` (
`id_tiketbackbone` int(11) NOT NULL,
  `id_problem_backbone` int(3) NOT NULL,
  `id_area` int(3) NOT NULL,
  `sub_area` varchar(150) NOT NULL,
  `subjek_email` varchar(100) NOT NULL,
  `id_infrastruktur` int(3) NOT NULL,
  `id_level` int(2) NOT NULL,
  `note` text NOT NULL,
  `tgl_visit` varchar(30) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_jam` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_send_backbone`
--

INSERT INTO `tbl_send_backbone` (`id_tiketbackbone`, `id_problem_backbone`, `id_area`, `sub_area`, `subjek_email`, `id_infrastruktur`, `id_level`, `note`, `tgl_visit`, `id_karyawan`, `id_jam`) VALUES
(1, 2, 1, 'Jakarta Kota', 'Test', 3, 2, 'DSDS', '2015-10-06', 2, 1),
(3, 5, 4, 'Jakarta Barat', 'jakartabarat@gmail.com', 2, 2, 'fast dong', '2015-10-01', 2, 29);

--
-- Trigger `tbl_send_backbone`
--
DELIMITER //
CREATE TRIGGER `tg_hapus_backbone` AFTER INSERT ON `tbl_send_backbone`
 FOR EACH ROW DELETE FROM tbl_list_backbone WHERE id_tiketbackbone = new.id_tiketbackbone
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_send_request_visit`
--

CREATE TABLE IF NOT EXISTS `tbl_send_request_visit` (
  `id_tiketrequestvisit` int(10) NOT NULL,
  `no_tiket` varchar(200) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id_infrastruktur` int(3) NOT NULL,
  `id_problem` int(3) NOT NULL,
  `id_area` int(3) NOT NULL,
  `id_service` int(2) NOT NULL,
  `tgl_visit` varchar(30) NOT NULL,
  `id_status` int(2) NOT NULL,
  `note` text NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  `id_jam` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_send_request_visit`
--

INSERT INTO `tbl_send_request_visit` (`id_tiketrequestvisit`, `no_tiket`, `nama_pelanggan`, `alamat`, `pic`, `id_infrastruktur`, `id_problem`, `id_area`, `id_service`, `tgl_visit`, `id_status`, `note`, `id_karyawan`, `id_jam`) VALUES
(0, '', '', '', '', 0, 0, 0, 0, '', 0, '', 0, 0);

--
-- Trigger `tbl_send_request_visit`
--
DELIMITER //
CREATE TRIGGER `tg_hapus_costumer` AFTER INSERT ON `tbl_send_request_visit`
 FOR EACH ROW DELETE FROM tbl_listrequest_visit WHERE id_tiketrequestvisit = new.id_tiketrequestvisit
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
`id_service` int(2) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_service`
--

INSERT INTO `tbl_service` (`id_service`, `service`) VALUES
(1, 'Retail'),
(2, 'Corporate'),
(3, 'Soho');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
`id_status` int(3) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'Under Monitoring'),
(2, 'Pending'),
(3, 'On Progress'),
(4, 'Done'),
(5, 'On Progress Tim Splicer TS'),
(6, 'Eskalasi Project Operation'),
(7, 'Eskalasi Project Regional');

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_absen`
--
DROP TABLE IF EXISTS `qw_absen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_absen` AS select `tbl_absen`.`id_karyawan` AS `id_karyawan`,`tbl_absen`.`kd_shift` AS `kd_shift`,`tbl_absen`.`tgl_absen` AS `tgl_absen`,`tbl_karyawan`.`username` AS `username`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_jadwal`.`jadwal_masuk` AS `jadwal_masuk` from ((`tbl_absen` join `tbl_jadwal` on((`tbl_jadwal`.`kd_shift` = `tbl_absen`.`kd_shift`))) join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_absen`.`id_karyawan`))) group by `tbl_absen`.`tgl_absen`,`tbl_absen`.`id_karyawan`;

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_absen_detail`
--
DROP TABLE IF EXISTS `qw_absen_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_absen_detail` AS select `tbl_absen`.`id_karyawan` AS `id_karyawan`,`tbl_absen`.`kd_shift` AS `kd_shift`,`tbl_absen`.`tgl_absen` AS `tgl_absen`,`tbl_karyawan`.`username` AS `username`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_jadwal`.`id_jam` AS `id_jam`,`tbl_jadwal`.`jam_masuk` AS `jam_masuk`,`tbl_jadwal`.`jadwal_masuk` AS `jadwal_masuk` from ((`tbl_absen` join `tbl_jadwal` on((`tbl_jadwal`.`kd_shift` = `tbl_absen`.`kd_shift`))) join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_absen`.`id_karyawan`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_histori_costumer`
--
DROP TABLE IF EXISTS `qw_histori_costumer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_histori_costumer` AS select `tbl_histori`.`id_histori` AS `id_histori`,`tbl_histori`.`id_tiketrequestvisit` AS `id_tiketrequestvisit`,`tbl_histori`.`no_tiket` AS `no_tiket`,`tbl_histori`.`nama_pelanggan` AS `nama_pelanggan`,`tbl_histori`.`alamat` AS `alamat`,`tbl_histori`.`pic` AS `pic`,`tbl_infrastruktur`.`id_infrastruktur` AS `id_infrastruktur`,`tbl_infrastruktur`.`infrastruktur` AS `infrastruktur`,`tbl_problem`.`id_problem` AS `id_problem`,`tbl_problem`.`initial_problem` AS `initial_problem`,`tbl_area`.`id_area` AS `id_area`,`tbl_area`.`area` AS `area`,`tbl_service`.`id_service` AS `id_service`,`tbl_service`.`service` AS `service`,`tbl_histori`.`tgl_visit` AS `tgl_visit`,`tbl_status`.`id_status` AS `id_status`,`tbl_status`.`status` AS `status`,`tbl_histori`.`note` AS `note` from (((((`tbl_histori` join `tbl_infrastruktur` on((`tbl_infrastruktur`.`id_infrastruktur` = `tbl_histori`.`id_infrastruktur`))) join `tbl_problem` on((`tbl_problem`.`id_problem` = `tbl_histori`.`id_problem`))) join `tbl_area` on((`tbl_area`.`id_area` = `tbl_histori`.`id_area`))) join `tbl_service` on((`tbl_service`.`id_service` = `tbl_histori`.`id_service`))) join `tbl_status` on((`tbl_status`.`id_status` = `tbl_histori`.`id_status`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_list_backbone`
--
DROP TABLE IF EXISTS `qw_list_backbone`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_list_backbone` AS select `tbl_list_backbone`.`id_tiketbackbone` AS `id_tiketbackbone`,`tbl_list_backbone`.`id_problem_backbone` AS `id_problem_backbone`,`tbl_problem_backbone`.`initial_problem_backbone` AS `initial_problem_backbone`,`tbl_list_backbone`.`id_area` AS `id_area`,`tbl_area`.`area` AS `area`,`tbl_list_backbone`.`sub_area` AS `sub_area`,`tbl_list_backbone`.`subjek_email` AS `subjek_email`,`tbl_list_backbone`.`id_infrastruktur` AS `id_infrastruktur`,`tbl_infrastruktur`.`infrastruktur` AS `infrastruktur`,`tbl_list_backbone`.`id_level` AS `id_level`,`tbl_level`.`level` AS `level`,`tbl_list_backbone`.`note` AS `note`,`tbl_list_backbone`.`tgl_visit` AS `tgl_visit` from ((((`tbl_list_backbone` join `tbl_infrastruktur` on((`tbl_infrastruktur`.`id_infrastruktur` = `tbl_list_backbone`.`id_infrastruktur`))) join `tbl_problem_backbone` on((`tbl_problem_backbone`.`id_problem_backbone` = `tbl_list_backbone`.`id_problem_backbone`))) join `tbl_area` on((`tbl_area`.`id_area` = `tbl_list_backbone`.`id_area`))) join `tbl_level` on((`tbl_level`.`id_level` = `tbl_list_backbone`.`id_level`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_list_costumer`
--
DROP TABLE IF EXISTS `qw_list_costumer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_list_costumer` AS select `tbl_listrequest_visit`.`id_tiketrequestvisit` AS `id_tiketrequestvisit`,`tbl_listrequest_visit`.`no_tiket` AS `no_tiket`,`tbl_listrequest_visit`.`nama_pelanggan` AS `nama_pelanggan`,`tbl_listrequest_visit`.`alamat` AS `alamat`,`tbl_listrequest_visit`.`pic` AS `pic`,`tbl_infrastruktur`.`id_infrastruktur` AS `id_infrastruktur`,`tbl_infrastruktur`.`infrastruktur` AS `infrastruktur`,`tbl_problem`.`id_problem` AS `id_problem`,`tbl_problem`.`initial_problem` AS `initial_problem`,`tbl_area`.`id_area` AS `id_area`,`tbl_area`.`area` AS `area`,`tbl_service`.`id_service` AS `id_service`,`tbl_service`.`service` AS `service`,`tbl_listrequest_visit`.`note` AS `note`,`tbl_listrequest_visit`.`tgl_visit` AS `tgl_visit` from ((((`tbl_listrequest_visit` join `tbl_infrastruktur` on((`tbl_infrastruktur`.`id_infrastruktur` = `tbl_listrequest_visit`.`id_infrastruktur`))) join `tbl_problem` on((`tbl_problem`.`id_problem` = `tbl_listrequest_visit`.`id_problem`))) join `tbl_area` on((`tbl_area`.`id_area` = `tbl_listrequest_visit`.`id_area`))) join `tbl_service` on((`tbl_service`.`id_service` = `tbl_listrequest_visit`.`id_service`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_report_backbone`
--
DROP TABLE IF EXISTS `qw_report_backbone`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_report_backbone` AS select `tbl_report_backbone`.`id_report` AS `id_report`,`tbl_report_backbone`.`id_tiketbackbone` AS `id_tiketbackbone`,`tbl_report_backbone`.`initial_problem_backbone` AS `initial_problem_backbone`,`tbl_report_backbone`.`area` AS `area`,`tbl_report_backbone`.`sub_area` AS `sub_area`,`tbl_report_backbone`.`subjek_email` AS `subjek_email`,`tbl_report_backbone`.`infrastruktur` AS `infrastruktur`,`tbl_report_backbone`.`level` AS `level`,`tbl_report_backbone`.`id_karyawan` AS `id_karyawan`,`tbl_report_backbone`.`waktu` AS `waktu`,`tbl_report_backbone`.`tgl_visit` AS `tgl_visit`,`tbl_report_backbone`.`action` AS `action`,`tbl_report_backbone`.`problem_sulving` AS `problem_sulving`,`tbl_report_backbone`.`nama_partner` AS `nama_partner`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_karyawan`.`username` AS `username` from (`tbl_report_backbone` join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_report_backbone`.`id_karyawan`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_report_ts`
--
DROP TABLE IF EXISTS `qw_report_ts`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_report_ts` AS select `tbl_report`.`id_report` AS `id_report`,`tbl_report`.`id_tiketrequestvisit` AS `id_tiketrequestvisit`,`tbl_report`.`no_tiket` AS `no_tiket`,`tbl_report`.`nama_pelanggan` AS `nama_pelanggan`,`tbl_report`.`alamat` AS `alamat`,`tbl_report`.`pic` AS `pic`,`tbl_report`.`infrastruktur` AS `infrastruktur`,`tbl_report`.`initial_problem` AS `initial_problem`,`tbl_report`.`area` AS `area`,`tbl_report`.`service` AS `service`,`tbl_report`.`id_karyawan` AS `id_karyawan`,`tbl_report`.`no_telp` AS `no_telp`,`tbl_report`.`nama_modem` AS `nama_modem`,`tbl_report`.`nama_replace_modem` AS `nama_replace_modem`,`tbl_report`.`replace_adaptor` AS `replace_adaptor`,`tbl_report`.`serial_modem_cabut` AS `serial_modem_cabut`,`tbl_report`.`serial_modem_pasang` AS `serial_modem_pasang`,`tbl_report`.`action` AS `action`,`tbl_report`.`solusi` AS `solusi`,`tbl_report`.`status` AS `status`,`tbl_report`.`tgl_visit` AS `tgl_visit`,`tbl_report`.`waktu` AS `waktu`,`tbl_report`.`charge` AS `charge`,`tbl_report`.`nama_partner` AS `nama_partner`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_karyawan`.`username` AS `username` from (`tbl_report` join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_report`.`id_karyawan`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_send_backbone`
--
DROP TABLE IF EXISTS `qw_send_backbone`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_send_backbone` AS select `tbl_send_backbone`.`id_tiketbackbone` AS `id_tiketbackbone`,`tbl_send_backbone`.`id_problem_backbone` AS `id_problem_backbone`,`tbl_problem_backbone`.`initial_problem_backbone` AS `initial_problem_backbone`,`tbl_send_backbone`.`id_area` AS `id_area`,`tbl_area`.`area` AS `area`,`tbl_send_backbone`.`sub_area` AS `sub_area`,`tbl_send_backbone`.`subjek_email` AS `subjek_email`,`tbl_send_backbone`.`id_infrastruktur` AS `id_infrastruktur`,`tbl_infrastruktur`.`infrastruktur` AS `infrastruktur`,`tbl_send_backbone`.`id_level` AS `id_level`,`tbl_level`.`level` AS `level`,`tbl_send_backbone`.`note` AS `note`,`tbl_send_backbone`.`tgl_visit` AS `tgl_visit`,`tbl_send_backbone`.`id_karyawan` AS `id_karyawan`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_jadwal`.`jam_masuk` AS `jam_masuk`,`tbl_karyawan`.`username` AS `username` from ((((((`tbl_send_backbone` join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_send_backbone`.`id_karyawan`))) join `tbl_infrastruktur` on((`tbl_infrastruktur`.`id_infrastruktur` = `tbl_send_backbone`.`id_infrastruktur`))) join `tbl_problem_backbone` on((`tbl_problem_backbone`.`id_problem_backbone` = `tbl_send_backbone`.`id_problem_backbone`))) join `tbl_area` on((`tbl_area`.`id_area` = `tbl_send_backbone`.`id_area`))) join `tbl_jadwal` on((`tbl_jadwal`.`id_jam` = `tbl_send_backbone`.`id_jam`))) join `tbl_level` on((`tbl_level`.`id_level` = `tbl_send_backbone`.`id_level`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `qw_send_costumer`
--
DROP TABLE IF EXISTS `qw_send_costumer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_send_costumer` AS select `tbl_send_request_visit`.`id_tiketrequestvisit` AS `id_tiketrequestvisit`,`tbl_send_request_visit`.`no_tiket` AS `no_tiket`,`tbl_send_request_visit`.`nama_pelanggan` AS `nama_pelanggan`,`tbl_send_request_visit`.`alamat` AS `alamat`,`tbl_send_request_visit`.`pic` AS `pic`,`tbl_infrastruktur`.`id_infrastruktur` AS `id_infrastruktur`,`tbl_infrastruktur`.`infrastruktur` AS `infrastruktur`,`tbl_problem`.`id_problem` AS `id_problem`,`tbl_problem`.`initial_problem` AS `initial_problem`,`tbl_area`.`id_area` AS `id_area`,`tbl_area`.`area` AS `area`,`tbl_service`.`id_service` AS `id_service`,`tbl_service`.`service` AS `service`,`tbl_send_request_visit`.`tgl_visit` AS `tgl_visit`,`tbl_send_request_visit`.`id_status` AS `id_status`,`tbl_status`.`status` AS `status`,`tbl_send_request_visit`.`note` AS `note`,`tbl_karyawan`.`id_karyawan` AS `id_karyawan`,`tbl_karyawan`.`nama_karyawan` AS `nama_karyawan`,`tbl_jadwal`.`jam_masuk` AS `jam_masuk`,`tbl_karyawan`.`username` AS `username` from (((((((`tbl_send_request_visit` join `tbl_karyawan` on((`tbl_karyawan`.`id_karyawan` = `tbl_send_request_visit`.`id_karyawan`))) join `tbl_infrastruktur` on((`tbl_infrastruktur`.`id_infrastruktur` = `tbl_send_request_visit`.`id_infrastruktur`))) join `tbl_problem` on((`tbl_problem`.`id_problem` = `tbl_send_request_visit`.`id_problem`))) join `tbl_area` on((`tbl_area`.`id_area` = `tbl_send_request_visit`.`id_area`))) join `tbl_service` on((`tbl_service`.`id_service` = `tbl_send_request_visit`.`id_service`))) join `tbl_status` on((`tbl_status`.`id_status` = `tbl_send_request_visit`.`id_status`))) join `tbl_jadwal` on((`tbl_jadwal`.`id_jam` = `tbl_send_request_visit`.`id_jam`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_admin_visiters`
--
ALTER TABLE `tbl_admin_visiters`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
 ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `tbl_charge`
--
ALTER TABLE `tbl_charge`
 ADD PRIMARY KEY (`id_charge`);

--
-- Indexes for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
 ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `tbl_infrastruktur`
--
ALTER TABLE `tbl_infrastruktur`
 ADD PRIMARY KEY (`id_infrastruktur`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
 ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_listrequest_visit`
--
ALTER TABLE `tbl_listrequest_visit`
 ADD PRIMARY KEY (`id_tiketrequestvisit`);

--
-- Indexes for table `tbl_list_backbone`
--
ALTER TABLE `tbl_list_backbone`
 ADD PRIMARY KEY (`id_tiketbackbone`);

--
-- Indexes for table `tbl_modem`
--
ALTER TABLE `tbl_modem`
 ADD PRIMARY KEY (`id_modem`);

--
-- Indexes for table `tbl_problem`
--
ALTER TABLE `tbl_problem`
 ADD PRIMARY KEY (`id_problem`);

--
-- Indexes for table `tbl_problem_backbone`
--
ALTER TABLE `tbl_problem_backbone`
 ADD PRIMARY KEY (`id_problem_backbone`);

--
-- Indexes for table `tbl_replace_modem`
--
ALTER TABLE `tbl_replace_modem`
 ADD PRIMARY KEY (`id_replace_modem`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
 ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `tbl_report_backbone`
--
ALTER TABLE `tbl_report_backbone`
 ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `tbl_send_backbone`
--
ALTER TABLE `tbl_send_backbone`
 ADD PRIMARY KEY (`id_tiketbackbone`);

--
-- Indexes for table `tbl_send_request_visit`
--
ALTER TABLE `tbl_send_request_visit`
 ADD PRIMARY KEY (`id_tiketrequestvisit`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
 ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
 ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
MODIFY `id_area` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_charge`
--
ALTER TABLE `tbl_charge`
MODIFY `id_charge` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_infrastruktur`
--
ALTER TABLE `tbl_infrastruktur`
MODIFY `id_infrastruktur` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `id_jam` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
MODIFY `id_karyawan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
MODIFY `id_level` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_listrequest_visit`
--
ALTER TABLE `tbl_listrequest_visit`
MODIFY `id_tiketrequestvisit` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_list_backbone`
--
ALTER TABLE `tbl_list_backbone`
MODIFY `id_tiketbackbone` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_modem`
--
ALTER TABLE `tbl_modem`
MODIFY `id_modem` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_problem`
--
ALTER TABLE `tbl_problem`
MODIFY `id_problem` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_problem_backbone`
--
ALTER TABLE `tbl_problem_backbone`
MODIFY `id_problem_backbone` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_replace_modem`
--
ALTER TABLE `tbl_replace_modem`
MODIFY `id_replace_modem` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_report_backbone`
--
ALTER TABLE `tbl_report_backbone`
MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_send_backbone`
--
ALTER TABLE `tbl_send_backbone`
MODIFY `id_tiketbackbone` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
MODIFY `id_service` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
