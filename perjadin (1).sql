-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4040
-- Generation Time: Mar 05, 2024 at 09:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perjadin`
--

-- --------------------------------------------------------

--
-- Table structure for table `eselons`
--

CREATE TABLE `eselons` (
  `eselon_id` int(10) UNSIGNED NOT NULL,
  `eselon_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eselons`
--

INSERT INTO `eselons` (`eselon_id`, `eselon_nama`) VALUES
(1, 'Non Eselon'),
(2, 'Eselon IV'),
(3, 'Eselon III'),
(4, 'Eselon II'),
(5, 'Pejabat Negara');

-- --------------------------------------------------------

--
-- Table structure for table `jenisperjadins`
--

CREATE TABLE `jenisperjadins` (
  `jenisperjadin_id` int(10) UNSIGNED NOT NULL,
  `jenisperjadin_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenisperjadins`
--

INSERT INTO `jenisperjadins` (`jenisperjadin_id`, `jenisperjadin_nama`) VALUES
(1, 'Luar Kabupaten dalam Provinsi'),
(2, 'Luar Kabupaten Luar Provinsi'),
(3, 'Dalam Kota');

-- --------------------------------------------------------

--
-- Table structure for table `laporjadins`
--

CREATE TABLE `laporjadins` (
  `laporjadin_id` bigint(20) UNSIGNED NOT NULL,
  `laporjadin_sptid` bigint(20) UNSIGNED NOT NULL,
  `laporjadin_nodpa` varchar(255) NOT NULL,
  `laporjadin_pembuka` longtext NOT NULL,
  `laporjadin_hasil` longtext NOT NULL,
  `laporjadin_penutup` longtext NOT NULL,
  `laporjadin_foto1` varchar(40) NOT NULL,
  `laporjadin_foto2` varchar(40) NOT NULL,
  `laporjadin_foto3` varchar(40) NOT NULL,
  `laporjadin_verif` int(11) NOT NULL DEFAULT 0,
  `laporjadin_created_at` datetime DEFAULT NULL,
  `laporjadin_updated_at` datetime DEFAULT NULL,
  `laporjadin_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laporjadins`
--

INSERT INTO `laporjadins` (`laporjadin_id`, `laporjadin_sptid`, `laporjadin_nodpa`, `laporjadin_pembuka`, `laporjadin_hasil`, `laporjadin_penutup`, `laporjadin_foto1`, `laporjadin_foto2`, `laporjadin_foto3`, `laporjadin_verif`, `laporjadin_created_at`, `laporjadin_updated_at`, `laporjadin_deleted_at`) VALUES
(1, 6, 'e', '<p>vxvc</p>', '<p>xcvxc</p>', '<p>xvcxv</p>', '', '', '', 0, '2024-03-02 21:18:55', '2024-03-02 21:18:55', NULL),
(2, 4, '-', '<p>Acara di Buka oleh&nbsp; perwakilan dari Direktorat Jenderal Guru dan Tenaga Kependidikan Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi Ri , serta dihadiri oleh :</p><ol><li>Perwakilan Direktorat Jenderal Perimbangan Keuangan Kementerian Keuangan RI</li><li>Perwakilan Seluruh Operator Simbar dan Aladin untuk wilayah&nbsp; 1</li></ol><p>Acara dibuka mulai dari jam 21.30 wib s.d selesai</p>', '<p>Laporan Rekonsiliasi Pembayaran Aneka Tunjangan Guru PNSD Kabupaten Asahan yang terdiri dari :</p><ol><li>Laporan Tunjangan Profesi Guru PNSD Semester 1 dan 2&nbsp; Tahun Anggaran 2023 sudah diterima dan dianggap benar baik dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI dan Kementerian Keuangan RI</li><li>Laporan Tunjangan Tambahan Pengjhasilan Guru PNSD Semester 1 dan 2 Tahun Anggaran 2023 sudah diterima dan dianggap benar baik dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI dan Kementerian Keuangan RI</li></ol>', '<p>Acara tidak dilakukan penutupan, disebabkan masih banyaknya wilayah 1 yang belum menyelesaikan laporan disebabkan kesalahan Aplikasi&nbsp; karena interkoneksi antara Aplikasi SIMBAR Kementerian Pendidikan dan Aplikasi ALADIN Kementerian Keuangan&nbsp;</p>', '1709397477_cb24c9fc9ca8425217d3.jpg', '1709397477_f30a4097245e299613fe.jpg', '1709397477_33f8873a910741f4086e.jpg', 1, '2024-03-02 21:19:47', '2024-03-03 00:33:26', NULL),
(3, 5, '-', '<p>Pertemuan Konsultasi dihadiri oleh Bapak Hadi Wiratmono tim Teknis PUSDATIN Kementerian Dalam Negeri, dijadwalkan pertemuan dimulai pukul 14.00 wib, dan akan dilanjutkan validasi ke bagian Bidang Penganggaran dan Pertanggung jawaban Direktorat Jenderal Keuangan Daerah Kemendagri</p>', '<p>Konsultasi yang dilakukan antara lain :</p><ol><li>Koneksi antara bank daerah dengan SIPD Penatausahaan, sampai saat ini koneksi belum bisa dilakukan karena masalah teknis aplikasi</li><li>Penatausahaan setelah dilakukan pergeseran sudah dapat dilakukan dan proses penatausahaan sampai saat ini sudah berjalan lancar sesuai SOP Aplikasi</li><li>Perbaikan TU Sekretariat Daerah yang terjadi kesalahan dalam Verifikasi SPM yang ditolak. Saat ini masih dalam perbaikan data karena modul Tolak dalam SIPD sampai saat ini masih dalam pengembangan. Untuk Pemda agar menghindari penggunaan tombol Tolak pada SIPD Penatausahaan</li><li>Perbaikan data atas penggantian Bendahara (Kota Kisaran Barat),  setalah dilakukan konsultasi data akan diperbaiki, nampun membutuhkan proses perbaikan seluruh data terlebih dahulu, saran yang diberikan agar saat melakukan pergantian khusus bendahara mewajibkan saldo Tunai dan Bank harus dalam kondisi Kosong/Nol</li><li>Modul penerimaan SIPD Penatausahaan, agar menerbitkan Rekening Penerimaan atas pengelolaan PAD atau penerimaan daerah</li></ol>', '<p>Pada hari Ke 2 Konsultasi pada Bagian Anggaran dan pertanggungjawaban dihadiri oleh Bapak Agung, yang memberikan arahan saat ini masih banyak fasilitas Aplikasi SIPD Penatausahaan dalam tahap proses pengembangan akibat banyaknya keluhan-keluhan Pemerintah Daerah, dan Kemendagri berkomitmen dan berusaha semaksimal mungkin untuk mengakomodir seluruh keluhan Pemda agar SIPD Penatausahaan dapat berjalan dengan sebaik-baiknya dan kedepan menjadi dasar dalam pembuatan Laporan Keuangan Pemerintah Daerah</p>', '1709525025_09e061c524f54244c896.jpg', '1709525025_8f9ec21fb18aad0fa1ca.jpg', '1709525025_e37b6415ff9132e7d4a9.jpg', 0, '2024-03-04 10:19:19', '2024-03-04 11:03:45', NULL),
(4, 7, '-', '<p>Konsultasi dihadiri oleh Staf Perwakilan Kementerian Dalam Negeri Direktorat Jenderal Bina Keuangan Daerah Direktur Anggaran dan Pertanggungjawaban Ibu Oktianah, konsultasi dimulai pukul 10.00 wib</p>', '<p>Perbaikan Data UP Sekretariat Daerah sudah dilakukan oleh Tim Teknis  sehingga proses UP pada Sekretariat sudah bisa dilanjutkan ke Tahap SPP sampai dengan SPM dan sudah bisa sampai penerbitan SP2D.</p><p>Adapun yang disampaikan untuk Pemda, antara lain :</p><ol><li>Agar langsung membuat pejabat-pejabat terkait dalam proses penatausahaan keuangan</li><li>Mengorganisasikan seluruh pejabat agar sebelum pelaksanaan penatausahaan agar sudah disiapkan</li><li>Melakukan pelimpahan kegiatan kepada KPA sesegera sebelum pelaksanaan kegiatan</li><li>Melakukan penugasan kepada PPTK</li><li>Agar berhati-hati dalam melakukan penugasan kepada PPTK</li><li>Agar berhati-hati dalam proses pembuatan SPP, SPM, dan jangan membiasakan Keluar dan masuk akun-akun yang berbeda dalam satu komputer</li><li>Pada saat melakukan penginputan agar data sudah disiapkan dengan baik dan benar, minimalkan penghapusan akibat kesalahan penginputan data</li></ol><p><br></p>', '<p>Konsultasi selesai dilaksanakan pada pukul 14.00 wib, terkait menunggu perbaikan data oleh tim teknis</p>', '', '', '', 0, '2024-03-05 11:25:20', '2024-03-05 11:32:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lokasiperjadins`
--

CREATE TABLE `lokasiperjadins` (
  `lokasiperjadin_id` int(10) UNSIGNED NOT NULL,
  `jenisperjadin_id` int(10) UNSIGNED NOT NULL,
  `lokasiperjadin_nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lokasiperjadins`
--

INSERT INTO `lokasiperjadins` (`lokasiperjadin_id`, `jenisperjadin_id`, `lokasiperjadin_nama`) VALUES
(1, 1, 'Kabupaten Batu Bara'),
(2, 1, 'Kabupaten Dairi'),
(3, 1, 'Kabupaten Deli Serdang'),
(4, 1, 'Kabupaten Humbang Hasundutan'),
(5, 1, 'Kabupaten Karo'),
(6, 1, 'Kabupaten Labuhanbatu'),
(7, 1, 'Kabupaten Labuhanbatu Selatan'),
(8, 1, 'Kabupaten Labuhanbatu Utara'),
(9, 1, 'Kabupaten Langkat - Stabat'),
(10, 1, 'Kabupaten Mandailing Natal - Panyabungan'),
(11, 1, 'Kabupaten Nias'),
(12, 1, 'Kabupaten Nias Barat'),
(13, 1, 'Kabupaten Nias Selatan'),
(14, 1, 'Kabupaten Nias Utara'),
(15, 1, 'Kabupaten Padang Lawas'),
(16, 1, 'Kabupaten Padang Lawas Utara'),
(17, 1, 'Kabupaten Pakpak Bharat'),
(18, 1, 'Kabupaten Samosir'),
(19, 1, 'Kabupaten Serdang Bedagai'),
(20, 1, 'Kabupaten Simalungun'),
(21, 1, 'Kabupaten Tapanuli Selatan'),
(22, 1, 'Kabupaten Tapanuli Tengah'),
(23, 1, 'Kabupaten Tapanuli Utara'),
(24, 1, 'Kabupaten Toba'),
(25, 1, 'Kota Binjai'),
(26, 1, 'Kota Gunungsitoli'),
(27, 1, 'Kota Medan'),
(28, 1, 'Kota Padangsidimpuan'),
(29, 1, 'Kota Pematangsiantar '),
(30, 1, 'Kota Sibolga'),
(31, 1, 'Kota Tanjungbalai'),
(32, 1, 'Kota Tebing Tinggi'),
(33, 2, 'Provinsi Sumatera Utara'),
(34, 2, 'Nanggroe Aceh Darussalam'),
(35, 2, 'Sumatera Selatan'),
(36, 2, 'Sumatera Barat'),
(37, 2, 'Bengkulu'),
(38, 2, 'Riau'),
(39, 2, 'Kepulauan Riau'),
(40, 2, 'Jambi'),
(41, 2, 'Lampung'),
(42, 2, 'Bangka Belitung'),
(43, 2, 'Kalimantan Barat'),
(44, 2, 'Kalimantan Timur'),
(45, 2, 'Kalimantan Selatan'),
(46, 2, 'Kalimantan Tengah'),
(47, 2, 'Kalimantan Utara'),
(48, 2, 'Banten'),
(49, 2, 'DKI Jakarta'),
(50, 2, 'Jawa Barat'),
(51, 2, 'Jawa Tengah'),
(52, 2, 'Daerah Istimewa Yogyakarta'),
(53, 2, 'Jawa Timur'),
(54, 2, 'Bali'),
(55, 2, 'Nusa Tenggara Timur'),
(56, 2, 'Nusa Tenggara Barat'),
(57, 2, 'Gorontalo'),
(58, 2, 'Sulawesi Barat'),
(59, 2, 'Sulawesi Tengah'),
(60, 2, 'Sulawesi Utara'),
(61, 2, 'Sulawesi Tenggara'),
(62, 2, 'Sulawesi Selatan'),
(63, 2, 'Maluku Utara'),
(64, 2, 'Maluku'),
(65, 2, 'Papua Barat'),
(66, 2, 'Papua'),
(67, 2, 'Papua Tengah'),
(68, 2, 'Papua Pegunungan'),
(69, 2, 'Papua Selatan'),
(70, 2, 'Papua Barat Daya'),
(71, 3, 'Kecamatan Meranti'),
(72, 3, 'Kecamatan Pulo Bandring'),
(73, 3, 'Kecamatan Air Joman'),
(74, 3, 'Kecamatan Sei Dadap'),
(75, 3, 'Kecamatan Rawang Panca Arga'),
(76, 3, 'Kecamatan Tanjung Balai'),
(77, 3, 'Kecamatan Buntu Pane'),
(78, 3, 'Kecamatan Setia Janji'),
(79, 3, 'Kecamatan Tinggi Raja'),
(80, 3, 'Kecamatan Silau Laut'),
(81, 3, 'Kecamatan Simpang Empat'),
(82, 3, 'Kecamatan Air Batu'),
(83, 3, 'Kecamatan Teluk Dalam'),
(84, 3, 'Kecamatan Bandar Pasir Mandoge'),
(85, 3, 'Kecamatan Bandar Pulau'),
(86, 3, 'Kecamatan Aek Kuasan'),
(87, 3, 'Kecamatan Aek Ledong'),
(88, 3, 'Kecamatan Aek Songsongan'),
(89, 3, 'Kecamatan Rahuning'),
(90, 3, 'Kecamatan Pulau Rakyat'),
(91, 3, 'Kecamatan Sei Kepayang'),
(92, 3, 'Kecamatan Sei Kepayang Barat'),
(93, 3, 'Kecamatan Sei Kepayang Timur');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `menu_nama` varchar(60) NOT NULL,
  `menu_icon` varchar(60) NOT NULL,
  `menu_link` varchar(60) NOT NULL,
  `menu_active` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_nama`, `menu_icon`, `menu_link`, `menu_active`, `role_id`) VALUES
(0, 'Dashboard', '', '', 0, 0),
(2, 'Master', 'nav-icon fas fa-edit', '', 1, 0),
(3, 'Surat Perintah', 'nav-icon fas fa-book', '', 1, 0),
(4, 'Pertanggungjawaban', 'nav-icon fas fa-copy', '', 1, 0),
(5, 'Laporan', 'nav-icon fas fa-file', '', 1, 0),
(8, 'Admin', 'nav-icon fas fa-lock', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(14, '2023-07-17-161925', 'App\\Database\\Migrations\\Jenisperjadin', 'default', 'App', 1709348715, 1),
(15, '2023-09-17-005435', 'App\\Database\\Migrations\\Menus', 'default', 'App', 1709348715, 1),
(16, '2023-09-17-033606', 'App\\Database\\Migrations\\Eselons', 'default', 'App', 1709348715, 1),
(17, '2023-09-17-035504', 'App\\Database\\Migrations\\Pangkat', 'default', 'App', 1709348715, 1),
(18, '2023-09-17-054510', 'App\\Database\\Migrations\\Pejabat', 'default', 'App', 1709348715, 1),
(19, '2023-09-17-073159', 'App\\Database\\Migrations\\Roles', 'default', 'App', 1709348715, 1),
(20, '2023-09-17-125954', 'App\\Database\\Migrations\\Tingkatsppd', 'default', 'App', 1709348715, 1),
(21, '2023-09-18-131427', 'App\\Database\\Migrations\\Users', 'default', 'App', 1709348715, 1),
(22, '2023-09-23-010516', 'App\\Database\\Migrations\\Submenus', 'default', 'App', 1709348850, 2),
(24, '2023-10-13-100408', 'App\\Database\\Migrations\\Pegawais', 'default', 'App', 1709348944, 3),
(25, '2023-10-26-083730', 'App\\Database\\Migrations\\Spts', 'default', 'App', 1709348944, 3),
(26, '2023-10-28-044912', 'App\\Database\\Migrations\\Pelaksana', 'default', 'App', 1709348944, 3),
(27, '2023-10-30-162735', 'App\\Database\\Migrations\\Lokasiperjadin', 'default', 'App', 1709349137, 4),
(28, '2023-12-04-172454', 'App\\Database\\Migrations\\Spjpesawat', 'default', 'App', 1709349194, 5),
(29, '2024-01-02-175620', 'App\\Database\\Migrations\\SpjTaksi', 'default', 'App', 1709349223, 6),
(30, '2024-01-04-180615', 'App\\Database\\Migrations\\Spjhotel', 'default', 'App', 1709349254, 7),
(31, '2024-01-06-145739', 'App\\Database\\Migrations\\Laporjadin', 'default', 'App', 1709349302, 8),
(32, '2024-01-19-145124', 'App\\Database\\Migrations\\Perbups', 'default', 'App', 1709349409, 9),
(33, '2024-01-23-042319', 'App\\Database\\Migrations\\Uangharian', 'default', 'App', 1709349549, 10),
(34, '2023-10-08-080338', 'App\\Database\\Migrations\\Rolemenus', 'default', 'App', 1709354120, 11);

-- --------------------------------------------------------

--
-- Table structure for table `pangkats`
--

CREATE TABLE `pangkats` (
  `pangkat_id` int(10) UNSIGNED NOT NULL,
  `pangkat_nama` varchar(100) NOT NULL,
  `pangkat_gol` varchar(100) NOT NULL,
  `pangkat_pajak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pangkats`
--

INSERT INTO `pangkats` (`pangkat_id`, `pangkat_nama`, `pangkat_gol`, `pangkat_pajak`) VALUES
(1, 'Juru Muda', 'Ia', 0),
(2, 'Juru Muda Tk. I', 'Ib', 0),
(3, 'Juru', 'Ic', 0),
(4, 'Juru Tk. I', 'Id', 0),
(5, 'Pengatur Muda', 'IIa', 0),
(6, 'Pengatur Muda Tk. I', 'IIb', 0),
(7, 'Pengatur', 'IIc', 0),
(8, 'Pengatur Tk. I', 'IId', 0),
(9, 'Penata Muda', 'IIIa', 0.05),
(10, 'Penata Muda Tk. I', 'IIIb', 0.05),
(11, 'Penata', 'IIIc', 0.05),
(12, 'Penata Tk. I', 'IIId', 0.05),
(13, 'Pembina', 'IVa', 0.15),
(14, 'Pembina Tk. I', 'IVb', 0.15),
(15, 'Pembina Utama Muda', 'IVc', 0.15),
(16, 'Pembina Utama Madya', 'IVd', 0.15),
(17, 'Pembina Utama', 'IVe', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_nip` varchar(18) NOT NULL,
  `pegawai_nama` varchar(100) NOT NULL,
  `pegawai_jabatan` varchar(100) NOT NULL,
  `pegawai_tgllahir` date DEFAULT NULL,
  `eselon_id` int(10) UNSIGNED NOT NULL,
  `pangkat_id` int(10) UNSIGNED NOT NULL,
  `pegawai_tingkat` int(10) UNSIGNED NOT NULL,
  `pegawai_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`pegawai_id`, `pegawai_nip`, `pegawai_nama`, `pegawai_jabatan`, `pegawai_tgllahir`, `eselon_id`, `pangkat_id`, `pegawai_tingkat`, `pegawai_foto`) VALUES
(1, '196409041987031016', 'Drs. SOFIAN, M.Pd', 'KEPALA BADAN KEUANGAN DAN ASET DAERAH', '1964-09-04', 4, 15, 2, '_default.png'),
(2, '197305071992032001', 'SRI LUSI MASDIANY, SIP', 'SEKRETARIS', '1973-05-07', 3, 14, 3, '_default.png'),
(3, '197604072009031002', 'CHAIRUN NASRI HUTAGAOL, SE', 'KABID AKUNTANSI & PELAPORAN', '1976-04-07', 3, 13, 3, '_default.png'),
(4, '198302172002121004', 'HERDI SIAGIAN, SH', 'KABID ANGGARAN', '1983-02-17', 3, 12, 3, '_default.png'),
(5, '198004212009011002', 'M.IDRIS, S.Pdi', 'KABID ASET', '1980-04-21', 3, 12, 3, '_default.png'),
(6, '197605132010011002', 'ILHAM GINTING, SE, MM', 'KABID PERBENDAHARAAN', '1976-05-13', 3, 12, 3, '_default.png'),
(7, '196904241989032005', 'NILAWATI, SH', 'PERENCANA', '1969-04-24', 2, 12, 4, '_default.png'),
(8, '197210301993032004', 'SUMARMIATI, SE', 'KASUBBID PERBENDAHARAAN', '1972-10-30', 2, 12, 4, '_default.png'),
(9, '197902232000032002', 'ELVIRAWATI,  SE', 'KASUBBID AKUNTANSI & PELAPORAN PENERIMAAN', '1979-02-23', 2, 12, 4, '_default.png'),
(10, '196607191989032003', 'RUSMINA, SE', 'ANALIS KEUANGAN PUSAT & DAERAH', '1966-07-19', 2, 12, 4, '_default.png'),
(11, '197807152009011004', 'BUDI SYAHRIZA, SH', 'KASUBBID AKUNTANSI & PELAPORAN PENGELUARAN', '1978-07-15', 2, 11, 4, '_default.png'),
(12, '197807222009032003', 'DWI PRIYAYI SUGESTI, SE', 'KASUBBID PENCATATAN, PELAPORAN & ANALISA KEB. BARANG DAERAH', '1978-07-22', 2, 12, 4, '_default.png'),
(13, '196806011993032002', 'VERA YUNINDA', 'KASUBBAG UMUM', '1968-06-01', 2, 12, 4, '_default.png'),
(14, '197604142009032002', 'ERNA KOMALASARI, ST', 'KASUBBID PEMELIHARAAN & PENGHAPUSAN', '1976-04-14', 2, 12, 4, '_default.png'),
(15, '198309142005022001', 'LUSY ELIDHA, SE', 'KASUBBID PENGELOLAAN KAS', '1983-09-14', 2, 12, 4, '_default.png'),
(16, '198004132009011003', 'AFRI CHANDRA KIRANA, SE', 'KASUBBID ANGGARAN I', '1980-04-13', 2, 11, 4, '_default.png'),
(17, '198405182010012008', 'KUSUMA APRINA SIAGIAN, SE', 'KASUBBID ANGGARAN II', '1984-05-18', 2, 10, 4, '_default.png'),
(18, '198109022009012004', 'KAMIS RIATI', 'PENGEVALUASI PEMANFAATAN BARANG DAERAH', '1981-09-02', 1, 8, 5, '_default.png'),
(19, '197303262006041006', 'IRWAN', 'PENGADMINISTRASI UMUM', '1973-03-26', 1, 6, 5, '_default.png'),
(20, '198112072009011004', 'GUSLAN HARAHAP', 'BENDAHARA', '1981-12-07', 1, 7, 5, '_default.png'),
(21, '196806031992032004', 'NURHAMIDAH SIREGAR', 'PENGELOLA LAPORAN KEUANGAN', '1968-06-03', 1, 10, 4, '_default.png'),
(22, '197808142005022002', 'RUBIAH', 'PENGOLAH DAFTAR GAJI', '1978-08-14', 1, 11, 4, '_default.png'),
(23, '198606082009032007', 'NASIAH, SE', 'PENYUSUN RENCANA KEGIATAN DAN ANGGARAN', '1986-06-08', 1, 12, 4, '_default.png'),
(24, '198404292010011002', 'FIRMANSYAH TARIGAN S', 'PENGADMINISTRASI ANGGARAN', '1984-04-29', 1, 8, 5, '_default.png'),
(25, '197410282008012002', 'ROSDAWATY, SE', 'VERIFIKATOR KEUANGAN', '1974-10-28', 1, 11, 4, '_default.png'),
(26, '197806052009012003', 'YULITA ELFIKA SIREGAR, SE', 'ANALIS PENGELOLAAN SISTEM INFORMASI PERBENDAHARAAN', '1978-06-05', 1, 11, 4, '_default.png'),
(27, '197210262008011001', 'MUH. ARFI', 'PENGADMINISTRASI KEUANGAN', '1972-10-26', 1, 6, 5, '_default.png'),
(28, '196512301986022002', 'MAISARAH', 'PENGOLAH DATA PERBENDAHARAAN', '1965-12-30', 1, 10, 4, '_default.png'),
(29, '197507212009012003', 'NURAINI, S. Sos', 'ANALIS PELAPORAN DAN TRANSAKSI KEUANGAN', '1975-07-21', 1, 12, 4, '_default.png'),
(30, '198309292011011013', 'RAHMAD SALEH SITORUS, A.Md', 'PENGELOLA DATA TRANSAKSI', '1983-09-29', 1, 10, 4, '1701709612_e8fe34a08e0be6103eb4.jpg'),
(31, '198010262009011002', 'HENDRIK', 'PENGADMINITRASI PENERIMAAN', '1980-10-26', 1, 8, 5, '_default.png'),
(32, '197811012005022001', 'HERLIN TANUJAYA, SE', 'PENGEVALUASI PENDAPATAN DAN BELANJA', '1978-11-01', 1, 12, 4, '_default.png'),
(33, '198206262010012001', 'T. DHANI VAULINA', 'PENGEVALUASI PENDAPATAN DAN BELANJA', '1982-06-26', 1, 10, 4, '_default.png'),
(34, '197009122002122004', 'ROSMIDAWATI, SE', 'PENATA LAPORAN KEUANGAN', '1970-09-12', 1, 11, 4, '_default.png'),
(35, '198105062010011002', 'IRVAN SYAHPUTRA, SM', 'PENGELOLA AKUNTANSI', '1981-05-06', 1, 9, 4, '_default.png'),
(36, '198102122009011004', 'MUHAMMAD SYAFRI', 'VERIFIKATOR KEUANGAN', '1981-02-12', 1, 8, 5, '_default.png'),
(37, '196812061989032005', 'HERYANTI, SH', 'ANALIS ASET NEGARA', '1968-12-06', 1, 12, 4, '_default.png'),
(38, '198805202022031001', 'EDDY HARIS SIREGAR, SE', 'PENYUSUN KEBUTUHAN BARANG INVENTARIS', '1988-05-20', 1, 9, 4, '_default.png'),
(39, '197903252008011002', 'OMAN SURAHMAN', 'PRANATA BARANG DAN JASA', '1979-03-25', 1, 5, 5, '_default.png'),
(40, 'Honor001', 'M. YUSUF BUTAR BUTAR', 'STAF BIDANG PERBENDAHARAAN', '0000-00-00', 1, 5, 5, '_default.png'),
(41, 'Honor002', 'TRI EVA YANTI', 'STAF BIDANG ANGGARAN', '0000-00-00', 1, 5, 5, '_default.png'),
(42, 'Honor003', 'NANI SUSANTI', 'STAF SEKRETARIAT', '0000-00-00', 1, 5, 5, '_default.png'),
(43, 'Honor004', 'MOH. ARIF EFENDI', 'STAF SEKRETARIAT', '0000-00-00', 1, 5, 5, '_default.png'),
(44, 'Honor005', 'IRMA YANTI BUTAR-BUTAR', 'STAF SEKRETARIAT', '0000-00-00', 1, 5, 5, '_default.png'),
(45, 'Honor006', 'THIVANI AMANDA TANJUNG', 'STAF SEKRETARIAT', '0000-00-00', 1, 5, 5, '_default.png'),
(46, 'Honor007', 'DINDA KHOFIFAH', 'STAF BIDANG ASET', '0000-00-00', 1, 5, 5, '_default.png'),
(47, 'Honor008', 'TRI AGUNG ANUGERAH', 'STAF BIDANG ASET', '0000-00-00', 1, 5, 5, '_default.png'),
(48, 'Honor009', 'M HASAN ASY\'ARI', 'STAF BIDANG ASET', '0000-00-00', 1, 5, 5, '_default.png'),
(49, 'Honor010', 'ANGGI FANDIE AKHMAD', 'STAF BIDANG ANGGARAN', '0000-00-00', 1, 5, 5, '_default.png'),
(50, 'Honor011', 'NURHAYATI', 'STAF BIDANG PERBENDAHARAAN', '0000-00-00', 1, 5, 5, '_default.png'),
(51, 'Honor012', 'LISA MAYA SARI', 'STAF BIDANG PERBENDAHARAAN', '0000-00-00', 1, 5, 5, '_default.png'),
(52, 'Honor013', 'MUHAMMAD SUEB', 'PENJAGA MALAM', '0000-00-00', 1, 5, 5, '_default.png'),
(53, 'Honor014', 'JUPRI SYAHPUTRA', 'PENJAGA MALAM', '0000-00-00', 1, 5, 5, '_default.png'),
(54, 'Honor015', 'HERU WANTO', 'PENJAGA MALAM', '0000-00-00', 1, 5, 5, '_default.png'),
(55, 'Honor016', 'SYAIFUL BAHRI SITORUS', 'PENJAGA MALAM', '0000-00-00', 1, 5, 5, '_default.png'),
(56, 'Honor017', 'SANTI KARTIKA SARI', 'KEBERSIHAN', '0000-00-00', 1, 5, 5, '_default.png'),
(57, 'Honor018', 'SATINA', 'KEBERSIHAN', '0000-00-00', 1, 5, 5, '_default.png'),
(58, 'Honor019', 'IKHWAN', 'SUPIR', '0000-00-00', 1, 5, 5, '_default.png');

-- --------------------------------------------------------

--
-- Table structure for table `pejabats`
--

CREATE TABLE `pejabats` (
  `pejabat_id` bigint(20) UNSIGNED NOT NULL,
  `pejabat_kode` varchar(20) NOT NULL,
  `pejabat_nama` varchar(120) NOT NULL,
  `pejabat_namajabatan` varchar(120) NOT NULL,
  `pejabat_nip` varchar(18) NOT NULL,
  `pejabat_pangkat` varchar(50) NOT NULL,
  `pejabat_aktif` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pejabats`
--

INSERT INTO `pejabats` (`pejabat_id`, `pejabat_kode`, `pejabat_nama`, `pejabat_namajabatan`, `pejabat_nip`, `pejabat_pangkat`, `pejabat_aktif`) VALUES
(1, 'Kaban', 'Drs. SOFIAN, M.Pd', 'KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN', '196409041987031016', 'PEMBINA UTAMA MUDA', 1),
(2, 'Sekretaris', 'SRI LUSI MASDIANY,S.IP', 'SEKRETARIS', '197305071992032001', 'PEMBINA TK. I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanas`
--

CREATE TABLE `pelaksanas` (
  `pelaksana_id` bigint(20) UNSIGNED NOT NULL,
  `spt_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `pelaksana_utama` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelaksanas`
--

INSERT INTO `pelaksanas` (`pelaksana_id`, `spt_id`, `pegawai_id`, `pelaksana_utama`) VALUES
(13, 4, 30, 1),
(14, 5, 6, 1),
(15, 5, 30, 0),
(16, 6, 26, 1),
(17, 6, 29, 0),
(18, 7, 6, 1),
(19, 7, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `perbups`
--

CREATE TABLE `perbups` (
  `perbup_id` int(2) UNSIGNED NOT NULL,
  `perbup_tingkatid` int(10) UNSIGNED NOT NULL,
  `perbup_lokasiid` int(10) UNSIGNED NOT NULL,
  `perbup_kota` varchar(100) NOT NULL,
  `perbup_hotel` double NOT NULL,
  `perbup_uh` double NOT NULL,
  `perbup_uhdiklat` double NOT NULL,
  `perbup_uhrapat_fullboad` double NOT NULL,
  `perbup_uhrapat_fullday` double NOT NULL,
  `perbup_uhrapat_residencedlmkota` double NOT NULL,
  `perbup_taksi_transportdarat` double NOT NULL,
  `perbup_representasi` double NOT NULL,
  `perbup_sewakendaraan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perbups`
--

INSERT INTO `perbups` (`perbup_id`, `perbup_tingkatid`, `perbup_lokasiid`, `perbup_kota`, `perbup_hotel`, `perbup_uh`, `perbup_uhdiklat`, `perbup_uhrapat_fullboad`, `perbup_uhrapat_fullday`, `perbup_uhrapat_residencedlmkota`, `perbup_taksi_transportdarat`, `perbup_representasi`, `perbup_sewakendaraan`) VALUES
(1, 1, 34, 'ACEH', 4420000, 360000, 110000, 120000, 85000, 120000, 127000, 250000, 795000),
(2, 1, 33, 'SUMATERA UTARA', 4960000, 370000, 110000, 130000, 95000, 130000, 308000, 250000, 0),
(3, 1, 38, 'RIAU', 3820000, 370000, 110000, 130000, 85000, 130000, 101000, 250000, 875000),
(4, 1, 39, 'KEPULAUAN RIAU', 5344000, 370000, 110000, 130000, 95000, 130000, 165000, 250000, 820000),
(5, 1, 40, 'J A M B I', 5000000, 370000, 110000, 130000, 95000, 130000, 147000, 250000, 710000),
(6, 1, 36, 'SUMATERA BARAT', 5236000, 380000, 110000, 120000, 85000, 120000, 190000, 250000, 700000),
(7, 1, 35, 'SUMATERA SELATAN', 5850000, 380000, 110000, 120000, 85000, 120000, 179000, 250000, 875000),
(8, 1, 41, 'LAMPUNG', 4491000, 380000, 110000, 130000, 95000, 130000, 168000, 250000, 700000),
(9, 1, 37, 'BENGKULU', 2140000, 380000, 110000, 130000, 95000, 130000, 109000, 250000, 710000),
(10, 1, 42, 'BANGKA BELITUNG', 3827000, 410000, 120000, 130000, 95000, 130000, 97000, 250000, 927000),
(11, 1, 48, 'B A N T E N', 5725000, 370000, 110000, 120000, 85000, 120000, 536000, 250000, 700000),
(12, 1, 50, 'JAWA BARAT', 5381000, 430000, 130000, 150000, 105000, 150000, 200000, 250000, 744000),
(13, 1, 49, 'D.K.I JAKARTA', 8720000, 530000, 160000, 180000, 130000, 180000, 256000, 250000, 710000),
(14, 1, 51, 'JAWA TENGAH', 5303000, 370000, 110000, 130000, 95000, 130000, 108000, 250000, 700000),
(15, 1, 52, 'D.I. YOGYAKARTA', 5017000, 420000, 130000, 140000, 100000, 140000, 267000, 250000, 799000),
(16, 1, 53, 'JAWA TIMUR', 4449000, 410000, 120000, 140000, 100000, 140000, 233000, 250000, 700000),
(17, 1, 54, 'B A L I', 6848000, 480000, 140000, 160000, 115000, 160000, 227000, 250000, 790000),
(18, 1, 56, 'NUSA TENGGARA BARAT', 4375000, 440000, 130000, 150000, 105000, 150000, 231000, 250000, 790000),
(19, 1, 55, 'NUSA TENGGARA TIMUR', 3750000, 430000, 130000, 140000, 100000, 140000, 116000, 250000, 800000),
(20, 1, 43, 'KALIMANTAN BARAT', 2654000, 380000, 110000, 130000, 95000, 130000, 171000, 250000, 798000),
(21, 1, 46, 'KALIMANTAN TENGAH', 4901000, 360000, 110000, 120000, 85000, 120000, 134000, 250000, 944000),
(22, 1, 45, 'KALIMANTAN SELATAN', 4797000, 380000, 110000, 130000, 95000, 130000, 180000, 250000, 710000),
(23, 1, 44, 'KALIMANTAN TIMUR', 4000000, 430000, 130000, 150000, 105000, 150000, 533000, 250000, 1013000),
(24, 1, 47, 'KALIMANTAN UTARA', 4000000, 430000, 130000, 150000, 105000, 150000, 218000, 250000, 1013000),
(25, 1, 60, 'SULAWESI UTARA', 4919000, 370000, 110000, 130000, 95000, 130000, 138000, 250000, 800000),
(26, 1, 57, 'GORONTALO', 4168000, 370000, 110000, 130000, 95000, 130000, 265000, 250000, 740000),
(27, 1, 58, 'SULAWESI BARAT', 4076000, 410000, 120000, 120000, 85000, 120000, 313000, 250000, 710000),
(28, 1, 62, 'SULAWESI SELATAN', 4820000, 430000, 130000, 150000, 105000, 150000, 187000, 250000, 700000),
(29, 1, 59, 'SULAWESI TENGAH', 2309000, 370000, 110000, 130000, 95000, 130000, 165000, 250000, 770000),
(30, 1, 61, 'SULAWESI TENGGARA', 3088800, 380000, 110000, 130000, 95000, 130000, 171000, 250000, 770000),
(31, 1, 64, 'MALUKU', 3467000, 380000, 110000, 120000, 85000, 120000, 288000, 250000, 890000),
(32, 1, 63, 'MALUKU UTARA', 4611600, 430000, 130000, 130000, 95000, 130000, 215000, 250000, 900000),
(33, 1, 66, 'P A P U A', 3859000, 580000, 170000, 200000, 140000, 200000, 513000, 250000, 1025000),
(34, 1, 65, 'PAPUA BARAT', 3872000, 480000, 140000, 160000, 115000, 160000, 236000, 250000, 980000),
(35, 1, 70, 'PAPUA BARAT DAYA', 3872000, 480000, 140000, 160000, 115000, 160000, 236000, 250000, 980000),
(36, 1, 67, 'PAPUA TENGAH', 3859000, 580000, 170000, 200000, 140000, 200000, 513000, 250000, 1025000),
(37, 1, 69, 'PAPUA SELATAN', 5673000, 580000, 170000, 200000, 140000, 200000, 513000, 250000, 1025000),
(38, 1, 68, 'PAPUA PEGUNUNGAN', 5711000, 580000, 170000, 200000, 140000, 200000, 513000, 250000, 1025000),
(39, 1, 1, 'KAB. BATUBARA', 750000, 0, 0, 0, 0, 0, 200000, 250000, 0),
(40, 1, 2, 'KAB. DAIRI', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(41, 1, 3, 'KAB. DELI SERDANG', 1000000, 0, 0, 0, 0, 0, 300000, 250000, 0),
(42, 1, 4, 'KAB. HUMBANG HASUNDUTAN', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(43, 1, 5, 'KAB. KARO', 2700000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(44, 1, 6, 'KAB. LABUHAN BATU', 1000000, 0, 0, 0, 0, 0, 250000, 250000, 0),
(45, 1, 7, 'KAB. LABUHAN BATU SELATAN', 1000000, 0, 0, 0, 0, 0, 250000, 250000, 0),
(46, 1, 8, 'KAB. LABUHAN BATU UTARA', 750000, 0, 0, 0, 0, 0, 200000, 250000, 0),
(47, 1, 9, 'KAB. LANGKAT', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(48, 1, 10, 'KAB. MANDAILING NATAL', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(49, 1, 11, 'KAB. NIAS', 1000000, 0, 0, 0, 0, 0, 0, 250000, 0),
(50, 1, 12, 'KAB. NIAS BARAT', 1000000, 0, 0, 0, 0, 0, 0, 250000, 0),
(51, 1, 13, 'KAB. NIAS SELATAN', 1000000, 0, 0, 0, 0, 0, 0, 250000, 0),
(52, 1, 14, 'KAB. NIAS UTARA', 1000000, 0, 0, 0, 0, 0, 0, 250000, 0),
(53, 1, 15, 'KAB. PADANG LAWAS', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(54, 1, 16, 'KAB. PADANG LAWAS UTARA', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(55, 1, 17, 'KAB. PAKPAK BARAT', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(56, 1, 18, 'KAB. SAMOSIR', 2700000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(57, 1, 19, 'KAB. SERDANG BEDAGAI', 1000000, 0, 0, 0, 0, 0, 300000, 250000, 0),
(58, 1, 20, 'KAB. SIMALUNGUN', 2700000, 0, 0, 0, 0, 0, 300000, 250000, 0),
(59, 1, 21, 'KAB. TAPANULI SELATAN', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(60, 1, 22, 'KAB. TAPANULI TENGAH', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(61, 1, 23, 'KAB. TAPANULI UTARA', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(62, 1, 24, 'KAB. TOBA SAMOSIR', 2700000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(63, 1, 25, 'KOTA BINJAI', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(64, 1, 26, 'KOTA GUNUNG SITOLI', 1000000, 0, 0, 0, 0, 0, 0, 250000, 0),
(65, 1, 27, 'KOTA MEDAN', 4960000, 0, 0, 0, 0, 0, 300000, 250000, 0),
(66, 1, 28, 'KOTA PADANGSIDIMPUAN', 1000000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(67, 1, 29, 'KOTA PEMATANG SIANTAR', 2700000, 0, 0, 0, 0, 0, 200000, 250000, 0),
(68, 1, 30, 'KOTA SIBOLGA', 2700000, 0, 0, 0, 0, 0, 400000, 250000, 0),
(69, 1, 31, 'KOTA TANJUNG BALAI', 750000, 0, 0, 0, 0, 0, 150000, 250000, 0),
(70, 1, 32, 'KOTA TEBING TINGGI', 1000000, 0, 0, 0, 0, 0, 300000, 250000, 0),
(71, 1, 71, 'Kecamatan Meranti', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(72, 1, 72, 'Kecamatan Pulo Bandring', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(73, 1, 73, 'Kecamatan Air Joman', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(74, 1, 74, 'Kecamatan Sei Dadap', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(75, 1, 75, 'Kecamatan Rawang Panca Arga', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(76, 1, 76, 'Kecamatan Tanjung Balai', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(77, 1, 77, 'Kecamatan Buntu Pane', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(78, 1, 78, 'Kecamatan Setia Janji', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(79, 1, 79, 'Kecamatan Tinggi Raja', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(80, 1, 80, 'Kecamatan Silau Laut', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(81, 1, 81, 'Kecamatan Simpang Empat', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(82, 1, 82, 'Kecamatan Air Batu', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(83, 1, 83, 'Kecamatan Teluk Dalam', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(84, 1, 84, 'Kecamatan Bandar Pasir Mandoge', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(85, 1, 85, 'Kecamatan Bandar Pulau', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(86, 1, 86, 'Kecamatan Aek Kuasan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(87, 1, 87, 'Kecamatan Aek Ledong', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(88, 1, 88, 'Kecamatan Aek Songsongan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(89, 1, 89, 'Kecamatan Rahuning', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(90, 1, 90, 'Kecamatan Pulau Rakyat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(91, 1, 91, 'Kecamatan Sei Kepayang', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(92, 1, 92, 'Kecamatan Sei Kepayang Barat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(93, 1, 93, 'Kecamatan Sei Kepayang Timur', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(94, 2, 34, 'ACEH', 3526000, 360000, 110000, 120000, 85000, 120000, 127000, 150000, 0),
(95, 2, 33, 'SUMATERA UTARA', 2195000, 370000, 110000, 130000, 95000, 130000, 308000, 150000, 0),
(96, 2, 38, 'RIAU', 3119000, 370000, 110000, 130000, 85000, 130000, 101000, 150000, 0),
(97, 2, 39, 'KEPULAUAN RIAU', 2318000, 370000, 110000, 130000, 95000, 130000, 165000, 150000, 0),
(98, 2, 40, 'J A M B I', 4102000, 370000, 110000, 130000, 95000, 130000, 147000, 150000, 0),
(99, 2, 36, 'SUMATERA BARAT', 3332000, 380000, 110000, 120000, 85000, 120000, 190000, 150000, 0),
(100, 2, 35, 'SUMATERA SELATAN', 3083000, 380000, 110000, 120000, 85000, 120000, 179000, 150000, 0),
(101, 2, 41, 'LAMPUNG', 2488000, 380000, 110000, 130000, 95000, 130000, 168000, 150000, 0),
(102, 2, 37, 'BENGKULU', 1628000, 380000, 110000, 130000, 95000, 130000, 109000, 150000, 0),
(103, 2, 42, 'BANGKA BELITUNG', 2838000, 410000, 120000, 130000, 95000, 130000, 97000, 150000, 0),
(104, 2, 48, 'B A N T E N', 2373000, 370000, 110000, 120000, 85000, 120000, 536000, 150000, 0),
(105, 2, 50, 'JAWA BARAT', 2755000, 430000, 130000, 150000, 105000, 150000, 200000, 150000, 0),
(106, 2, 49, 'D.K.I JAKARTA', 2063000, 530000, 160000, 180000, 130000, 180000, 256000, 150000, 0),
(107, 2, 51, 'JAWA TENGAH', 1850000, 370000, 110000, 130000, 95000, 130000, 108000, 150000, 0),
(108, 2, 52, 'D.I. YOGYAKARTA', 2695000, 420000, 130000, 140000, 100000, 140000, 267000, 150000, 0),
(109, 2, 53, 'JAWA TIMUR', 2007000, 410000, 120000, 140000, 100000, 140000, 233000, 150000, 0),
(110, 2, 54, 'B A L I', 2433000, 480000, 140000, 160000, 115000, 160000, 227000, 150000, 0),
(111, 2, 56, 'NUSA TENGGARA BARAT', 2648000, 440000, 130000, 150000, 105000, 150000, 231000, 150000, 0),
(112, 2, 55, 'NUSA TENGGARA TIMUR', 2133000, 430000, 130000, 140000, 100000, 140000, 116000, 150000, 0),
(113, 2, 43, 'KALIMANTAN BARAT', 1923000, 380000, 110000, 130000, 95000, 130000, 171000, 150000, 0),
(114, 2, 46, 'KALIMANTAN TENGAH', 3391000, 360000, 110000, 120000, 85000, 120000, 134000, 150000, 0),
(115, 2, 45, 'KALIMANTAN SELATAN', 3316000, 380000, 110000, 130000, 95000, 130000, 180000, 150000, 0),
(116, 2, 44, 'KALIMANTAN TIMUR', 2188000, 430000, 130000, 150000, 105000, 150000, 533000, 150000, 0),
(117, 2, 47, 'KALIMANTAN UTARA', 2735000, 430000, 130000, 150000, 105000, 150000, 218000, 150000, 0),
(118, 2, 60, 'SULAWESI UTARA', 2290000, 370000, 110000, 130000, 95000, 130000, 138000, 150000, 0),
(119, 2, 57, 'GORONTALO', 3107000, 370000, 110000, 130000, 95000, 130000, 265000, 150000, 0),
(120, 2, 58, 'SULAWESI BARAT', 3098000, 410000, 120000, 120000, 85000, 120000, 313000, 150000, 0),
(121, 2, 62, 'SULAWESI SELATAN', 1938000, 430000, 130000, 150000, 105000, 150000, 187000, 150000, 0),
(122, 2, 59, 'SULAWESI TENGAH', 2027000, 370000, 110000, 130000, 95000, 130000, 165000, 150000, 0),
(123, 2, 61, 'SULAWESI TENGGARA', 2574000, 380000, 110000, 130000, 95000, 130000, 171000, 150000, 0),
(124, 2, 64, 'MALUKU', 3240000, 380000, 110000, 120000, 85000, 120000, 288000, 150000, 0),
(125, 2, 63, 'MALUKU UTARA', 3843000, 430000, 130000, 130000, 95000, 130000, 215000, 150000, 0),
(126, 2, 66, 'P A P U A', 3318000, 580000, 170000, 200000, 140000, 200000, 513000, 150000, 0),
(127, 2, 65, 'PAPUA BARAT', 3341000, 480000, 140000, 160000, 115000, 160000, 236000, 150000, 0),
(128, 2, 70, 'PAPUA BARAT DAYA', 3341000, 480000, 140000, 160000, 115000, 160000, 236000, 150000, 0),
(129, 2, 67, 'PAPUA TENGAH', 3318000, 580000, 170000, 200000, 140000, 200000, 513000, 150000, 0),
(130, 2, 69, 'PAPUA SELATAN', 4877000, 580000, 170000, 200000, 140000, 200000, 513000, 150000, 0),
(131, 2, 68, 'PAPUA PEGUNUNGAN', 4911000, 580000, 170000, 200000, 140000, 200000, 513000, 150000, 0),
(132, 2, 1, 'KAB. BATUBARA', 700000, 0, 0, 0, 0, 0, 200000, 150000, 0),
(133, 2, 2, 'KAB. DAIRI', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(134, 2, 3, 'KAB. DELI SERDANG', 900000, 0, 0, 0, 0, 0, 300000, 150000, 0),
(135, 2, 4, 'KAB. HUMBANG HASUNDUTAN', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(136, 2, 5, 'KAB. KARO', 1500000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(137, 2, 6, 'KAB. LABUHAN BATU', 900000, 0, 0, 0, 0, 0, 250000, 150000, 0),
(138, 2, 7, 'KAB. LABUHAN BATU SELATAN', 900000, 0, 0, 0, 0, 0, 250000, 150000, 0),
(139, 2, 8, 'KAB. LABUHAN BATU UTARA', 700000, 0, 0, 0, 0, 0, 200000, 150000, 0),
(140, 2, 9, 'KAB. LANGKAT', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(141, 2, 10, 'KAB. MANDAILING NATAL', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(142, 2, 11, 'KAB. NIAS', 900000, 0, 0, 0, 0, 0, 0, 150000, 0),
(143, 2, 12, 'KAB. NIAS BARAT', 900000, 0, 0, 0, 0, 0, 0, 150000, 0),
(144, 2, 13, 'KAB. NIAS SELATAN', 900000, 0, 0, 0, 0, 0, 0, 150000, 0),
(145, 2, 14, 'KAB. NIAS UTARA', 900000, 0, 0, 0, 0, 0, 0, 150000, 0),
(146, 2, 15, 'KAB. PADANG LAWAS', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(147, 2, 16, 'KAB. PADANG LAWAS UTARA', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(148, 2, 17, 'KAB. PAKPAK BARAT', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(149, 2, 18, 'KAB. SAMOSIR', 1500000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(150, 2, 19, 'KAB. SERDANG BEDAGAI', 900000, 0, 0, 0, 0, 0, 300000, 150000, 0),
(151, 2, 20, 'KAB. SIMALUNGUN', 1500000, 0, 0, 0, 0, 0, 300000, 150000, 0),
(152, 2, 21, 'KAB. TAPANULI SELATAN', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(153, 2, 22, 'KAB. TAPANULI TENGAH', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(154, 2, 23, 'KAB. TAPANULI UTARA', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(155, 2, 24, 'KAB. TOBA SAMOSIR', 1500000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(156, 2, 25, 'KOTA BINJAI', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(157, 2, 26, 'KOTA GUNUNG SITOLI', 900000, 0, 0, 0, 0, 0, 0, 150000, 0),
(158, 2, 27, 'KOTA MEDAN', 2195000, 0, 0, 0, 0, 0, 300000, 150000, 0),
(159, 2, 28, 'KOTA PADANGSIDIMPUAN', 900000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(160, 2, 29, 'KOTA PEMATANG SIANTAR', 1500000, 0, 0, 0, 0, 0, 200000, 150000, 0),
(161, 2, 30, 'KOTA SIBOLGA', 1500000, 0, 0, 0, 0, 0, 400000, 150000, 0),
(162, 2, 31, 'KOTA TANJUNG BALAI', 700000, 0, 0, 0, 0, 0, 150000, 150000, 0),
(163, 2, 32, 'KOTA TEBING TINGGI', 900000, 0, 0, 0, 0, 0, 300000, 150000, 0),
(164, 2, 71, 'Kecamatan Meranti', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(165, 2, 72, 'Kecamatan Pulo Bandring', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(166, 2, 73, 'Kecamatan Air Joman', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(167, 2, 74, 'Kecamatan Sei Dadap', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(168, 2, 75, 'Kecamatan Rawang Panca Arga', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(169, 2, 76, 'Kecamatan Tanjung Balai', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(170, 2, 77, 'Kecamatan Buntu Pane', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(171, 2, 78, 'Kecamatan Setia Janji', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(172, 2, 79, 'Kecamatan Tinggi Raja', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(173, 2, 80, 'Kecamatan Silau Laut', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(174, 2, 81, 'Kecamatan Simpang Empat', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(175, 2, 82, 'Kecamatan Air Batu', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(176, 2, 83, 'Kecamatan Teluk Dalam', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(177, 2, 84, 'Kecamatan Bandar Pasir Mandoge', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(178, 2, 85, 'Kecamatan Bandar Pulau', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(179, 2, 86, 'Kecamatan Aek Kuasan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(180, 2, 87, 'Kecamatan Aek Ledong', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(181, 2, 88, 'Kecamatan Aek Songsongan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(182, 2, 89, 'Kecamatan Rahuning', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(183, 2, 90, 'Kecamatan Pulau Rakyat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(184, 2, 91, 'Kecamatan Sei Kepayang', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(185, 2, 92, 'Kecamatan Sei Kepayang Barat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(186, 2, 93, 'Kecamatan Sei Kepayang Timur', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(187, 3, 34, 'ACEH', 1533000, 360000, 110000, 120000, 85000, 120000, 127000, 0, 0),
(188, 3, 33, 'SUMATERA UTARA', 1100000, 370000, 110000, 130000, 95000, 130000, 308000, 0, 0),
(189, 3, 38, 'RIAU', 1650000, 370000, 110000, 130000, 85000, 130000, 101000, 0, 0),
(190, 3, 39, 'KEPULAUAN RIAU', 1297000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(191, 3, 40, 'J A M B I', 1225000, 370000, 110000, 130000, 95000, 130000, 147000, 0, 0),
(192, 3, 36, 'SUMATERA BARAT', 1353000, 380000, 110000, 120000, 85000, 120000, 190000, 0, 0),
(193, 3, 35, 'SUMATERA SELATAN', 1955000, 380000, 110000, 120000, 85000, 120000, 179000, 0, 0),
(194, 3, 41, 'LAMPUNG', 1425000, 380000, 110000, 130000, 95000, 130000, 168000, 0, 0),
(195, 3, 37, 'BENGKULU', 1546000, 380000, 110000, 130000, 95000, 130000, 109000, 0, 0),
(196, 3, 42, 'BANGKA BELITUNG', 1957000, 410000, 120000, 130000, 95000, 130000, 97000, 0, 0),
(197, 3, 48, 'B A N T E N', 1204000, 370000, 110000, 120000, 85000, 120000, 536000, 0, 0),
(198, 3, 50, 'JAWA BARAT', 1201000, 430000, 130000, 150000, 105000, 150000, 200000, 0, 0),
(199, 3, 49, 'D.K.I JAKARTA', 992000, 530000, 160000, 180000, 130000, 180000, 256000, 0, 0),
(200, 3, 51, 'JAWA TENGAH', 1201000, 370000, 110000, 130000, 95000, 130000, 108000, 0, 0),
(201, 3, 52, 'D.I. YOGYAKARTA', 1384000, 420000, 130000, 140000, 100000, 140000, 267000, 0, 0),
(202, 3, 53, 'JAWA TIMUR', 1153000, 410000, 120000, 140000, 100000, 140000, 233000, 0, 0),
(203, 3, 54, 'B A L I', 1685000, 480000, 140000, 160000, 115000, 160000, 227000, 0, 0),
(204, 3, 56, 'NUSA TENGGARA BARAT', 1418000, 440000, 130000, 150000, 105000, 150000, 231000, 0, 0),
(205, 3, 55, 'NUSA TENGGARA TIMUR', 1355000, 430000, 130000, 140000, 100000, 140000, 116000, 0, 0),
(206, 3, 43, 'KALIMANTAN BARAT', 1125000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(207, 3, 46, 'KALIMANTAN TENGAH', 1160000, 360000, 110000, 120000, 85000, 120000, 134000, 0, 0),
(208, 3, 45, 'KALIMANTAN SELATAN', 1500000, 380000, 110000, 130000, 95000, 130000, 180000, 0, 0),
(209, 3, 44, 'KALIMANTAN TIMUR', 1507000, 430000, 130000, 150000, 105000, 150000, 533000, 0, 0),
(210, 3, 47, 'KALIMANTAN UTARA', 1507000, 430000, 130000, 150000, 105000, 150000, 218000, 0, 0),
(211, 3, 60, 'SULAWESI UTARA', 1207000, 370000, 110000, 130000, 95000, 130000, 138000, 0, 0),
(212, 3, 57, 'GORONTALO', 1606000, 370000, 110000, 130000, 95000, 130000, 265000, 0, 0),
(213, 3, 58, 'SULAWESI BARAT', 1344000, 410000, 120000, 120000, 85000, 120000, 313000, 0, 0),
(214, 3, 62, 'SULAWESI SELATAN', 1423000, 430000, 130000, 150000, 105000, 150000, 187000, 0, 0),
(215, 3, 59, 'SULAWESI TENGAH', 1679000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(216, 3, 61, 'SULAWESI TENGGARA', 1297000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(217, 3, 64, 'MALUKU', 1059000, 380000, 110000, 120000, 85000, 120000, 288000, 0, 0),
(218, 3, 63, 'MALUKU UTARA', 1160000, 430000, 130000, 130000, 95000, 130000, 215000, 0, 0),
(219, 3, 66, 'P A P U A', 2521000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(220, 3, 65, 'PAPUA BARAT', 2056000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(221, 3, 70, 'PAPUA BARAT DAYA', 2056000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(222, 3, 67, 'PAPUA TENGAH', 2521000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(223, 3, 69, 'PAPUA SELATAN', 3706000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(224, 3, 68, 'PAPUA PEGUNUNGAN', 3731000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(225, 3, 1, 'KAB. BATUBARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(226, 3, 2, 'KAB. DAIRI', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(227, 3, 3, 'KAB. DELI SERDANG', 750000, 0, 0, 0, 0, 0, 300000, 0, 0),
(228, 3, 4, 'KAB. HUMBANG HASUNDUTAN', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(229, 3, 5, 'KAB. KARO', 1064000, 0, 0, 0, 0, 0, 400000, 0, 0),
(230, 3, 6, 'KAB. LABUHAN BATU', 750000, 0, 0, 0, 0, 0, 250000, 0, 0),
(231, 3, 7, 'KAB. LABUHAN BATU SELATAN', 750000, 0, 0, 0, 0, 0, 250000, 0, 0),
(232, 3, 8, 'KAB. LABUHAN BATU UTARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(233, 3, 9, 'KAB. LANGKAT', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(234, 3, 10, 'KAB. MANDAILING NATAL', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(235, 3, 11, 'KAB. NIAS', 750000, 0, 0, 0, 0, 0, 0, 0, 0),
(236, 3, 12, 'KAB. NIAS BARAT', 750000, 0, 0, 0, 0, 0, 0, 0, 0),
(237, 3, 13, 'KAB. NIAS SELATAN', 750000, 0, 0, 0, 0, 0, 0, 0, 0),
(238, 3, 14, 'KAB. NIAS UTARA', 750000, 0, 0, 0, 0, 0, 0, 0, 0),
(239, 3, 15, 'KAB. PADANG LAWAS', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(240, 3, 16, 'KAB. PADANG LAWAS UTARA', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(241, 3, 17, 'KAB. PAKPAK BARAT', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(242, 3, 18, 'KAB. SAMOSIR', 1064000, 0, 0, 0, 0, 0, 400000, 0, 0),
(243, 3, 19, 'KAB. SERDANG BEDAGAI', 750000, 0, 0, 0, 0, 0, 300000, 0, 0),
(244, 3, 20, 'KAB. SIMALUNGUN', 1064000, 0, 0, 0, 0, 0, 300000, 0, 0),
(245, 3, 21, 'KAB. TAPANULI SELATAN', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(246, 3, 22, 'KAB. TAPANULI TENGAH', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(247, 3, 23, 'KAB. TAPANULI UTARA', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(248, 3, 24, 'KAB. TOBA SAMOSIR', 1064000, 0, 0, 0, 0, 0, 400000, 0, 0),
(249, 3, 25, 'KOTA BINJAI', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(250, 3, 26, 'KOTA GUNUNG SITOLI', 750000, 0, 0, 0, 0, 0, 0, 0, 0),
(251, 3, 27, 'KOTA MEDAN', 1100000, 0, 0, 0, 0, 0, 300000, 0, 0),
(252, 3, 28, 'KOTA PADANGSIDIMPUAN', 750000, 0, 0, 0, 0, 0, 400000, 0, 0),
(253, 3, 29, 'KOTA PEMATANG SIANTAR', 1064000, 0, 0, 0, 0, 0, 200000, 0, 0),
(254, 3, 30, 'KOTA SIBOLGA', 1064000, 0, 0, 0, 0, 0, 400000, 0, 0),
(255, 3, 31, 'KOTA TANJUNG BALAI', 500000, 0, 0, 0, 0, 0, 150000, 0, 0),
(256, 3, 32, 'KOTA TEBING TINGGI', 750000, 0, 0, 0, 0, 0, 300000, 0, 0),
(257, 3, 71, 'Kecamatan Meranti', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(258, 3, 72, 'Kecamatan Pulo Bandring', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(259, 3, 73, 'Kecamatan Air Joman', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(260, 3, 74, 'Kecamatan Sei Dadap', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(261, 3, 75, 'Kecamatan Rawang Panca Arga', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(262, 3, 76, 'Kecamatan Tanjung Balai', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(263, 3, 77, 'Kecamatan Buntu Pane', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(264, 3, 78, 'Kecamatan Setia Janji', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(265, 3, 79, 'Kecamatan Tinggi Raja', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(266, 3, 80, 'Kecamatan Silau Laut', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(267, 3, 81, 'Kecamatan Simpang Empat', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(268, 3, 82, 'Kecamatan Air Batu', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(269, 3, 83, 'Kecamatan Teluk Dalam', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(270, 3, 84, 'Kecamatan Bandar Pasir Mandoge', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(271, 3, 85, 'Kecamatan Bandar Pulau', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(272, 3, 86, 'Kecamatan Aek Kuasan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(273, 3, 87, 'Kecamatan Aek Ledong', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(274, 3, 88, 'Kecamatan Aek Songsongan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(275, 3, 89, 'Kecamatan Rahuning', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(276, 3, 90, 'Kecamatan Pulau Rakyat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(277, 3, 91, 'Kecamatan Sei Kepayang', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(278, 3, 92, 'Kecamatan Sei Kepayang Barat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(279, 3, 93, 'Kecamatan Sei Kepayang Timur', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(280, 4, 34, 'ACEH', 770000, 360000, 110000, 120000, 85000, 120000, 127000, 0, 0),
(281, 4, 33, 'SUMATERA UTARA', 699000, 370000, 110000, 130000, 95000, 130000, 308000, 0, 0),
(282, 4, 38, 'RIAU', 852000, 370000, 110000, 130000, 85000, 130000, 101000, 0, 0),
(283, 4, 39, 'KEPULAUAN RIAU', 792000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(284, 4, 40, 'J A M B I', 580000, 370000, 110000, 130000, 95000, 130000, 147000, 0, 0),
(285, 4, 36, 'SUMATERA BARAT', 701000, 380000, 110000, 120000, 85000, 120000, 190000, 0, 0),
(286, 4, 35, 'SUMATERA SELATAN', 861000, 380000, 110000, 120000, 85000, 120000, 179000, 0, 0),
(287, 4, 41, 'LAMPUNG', 580000, 380000, 110000, 130000, 95000, 130000, 168000, 0, 0),
(288, 4, 37, 'BENGKULU', 692000, 380000, 110000, 130000, 95000, 130000, 109000, 0, 0),
(289, 4, 42, 'BANGKA BELITUNG', 649000, 410000, 120000, 130000, 95000, 130000, 97000, 0, 0),
(290, 4, 48, 'B A N T E N', 724000, 370000, 110000, 120000, 85000, 120000, 536000, 0, 0),
(291, 4, 50, 'JAWA BARAT', 686000, 430000, 130000, 150000, 105000, 150000, 200000, 0, 0),
(292, 4, 49, 'D.K.I JAKARTA', 730000, 530000, 160000, 180000, 130000, 180000, 256000, 0, 0),
(293, 4, 51, 'JAWA TENGAH', 750000, 370000, 110000, 130000, 95000, 130000, 108000, 0, 0),
(294, 4, 52, 'D.I. YOGYAKARTA', 845000, 420000, 130000, 140000, 100000, 140000, 267000, 0, 0),
(295, 4, 53, 'JAWA TIMUR', 814000, 410000, 120000, 140000, 100000, 140000, 233000, 0, 0),
(296, 4, 54, 'B A L I', 1138000, 480000, 140000, 160000, 115000, 160000, 227000, 0, 0),
(297, 4, 56, 'NUSA TENGGARA BARAT', 907000, 440000, 130000, 150000, 105000, 150000, 231000, 0, 0),
(298, 4, 55, 'NUSA TENGGARA TIMUR', 688000, 430000, 130000, 140000, 100000, 140000, 116000, 0, 0),
(299, 4, 43, 'KALIMANTAN BARAT', 538000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(300, 4, 46, 'KALIMANTAN TENGAH', 659000, 360000, 110000, 120000, 85000, 120000, 134000, 0, 0),
(301, 4, 45, 'KALIMANTAN SELATAN', 697000, 380000, 110000, 130000, 95000, 130000, 180000, 0, 0),
(302, 4, 44, 'KALIMANTAN TIMUR', 804000, 430000, 130000, 150000, 105000, 150000, 533000, 0, 0),
(303, 4, 47, 'KALIMANTAN UTARA', 904000, 430000, 130000, 150000, 105000, 150000, 218000, 0, 0),
(304, 4, 60, 'SULAWESI UTARA', 978000, 370000, 110000, 130000, 95000, 130000, 138000, 0, 0),
(305, 4, 57, 'GORONTALO', 955000, 370000, 110000, 130000, 95000, 130000, 265000, 0, 0),
(306, 4, 58, 'SULAWESI BARAT', 704000, 410000, 120000, 120000, 85000, 120000, 313000, 0, 0),
(307, 4, 62, 'SULAWESI SELATAN', 745000, 430000, 130000, 150000, 105000, 150000, 187000, 0, 0),
(308, 4, 59, 'SULAWESI TENGAH', 951000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(309, 4, 61, 'SULAWESI TENGGARA', 786000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(310, 4, 64, 'MALUKU', 667000, 380000, 110000, 120000, 85000, 120000, 288000, 0, 0),
(311, 4, 63, 'MALUKU UTARA', 605000, 430000, 130000, 130000, 95000, 130000, 215000, 0, 0),
(312, 4, 66, 'P A P U A', 1038000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(313, 4, 65, 'PAPUA BARAT', 967000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(314, 4, 70, 'PAPUA BARAT DAYA', 967000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(315, 4, 67, 'PAPUA TENGAH', 1038000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(316, 4, 69, 'PAPUA SELATAN', 1526000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(317, 4, 68, 'PAPUA PEGUNUNGAN', 1536000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(318, 4, 1, 'KAB. BATUBARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(319, 4, 2, 'KAB. DAIRI', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(320, 4, 3, 'KAB. DELI SERDANG', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(321, 4, 4, 'KAB. HUMBANG HASUNDUTAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(322, 4, 5, 'KAB. KARO', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(323, 4, 6, 'KAB. LABUHAN BATU', 500000, 0, 0, 0, 0, 0, 250000, 0, 0),
(324, 4, 7, 'KAB. LABUHAN BATU SELATAN', 500000, 0, 0, 0, 0, 0, 250000, 0, 0),
(325, 4, 8, 'KAB. LABUHAN BATU UTARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(326, 4, 9, 'KAB. LANGKAT', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(327, 4, 10, 'KAB. MANDAILING NATAL', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(328, 4, 11, 'KAB. NIAS', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(329, 4, 12, 'KAB. NIAS BARAT', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(330, 4, 13, 'KAB. NIAS SELATAN', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(331, 4, 14, 'KAB. NIAS UTARA', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(332, 4, 15, 'KAB. PADANG LAWAS', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(333, 4, 16, 'KAB. PADANG LAWAS UTARA', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(334, 4, 17, 'KAB. PAKPAK BARAT', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(335, 4, 18, 'KAB. SAMOSIR', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(336, 4, 19, 'KAB. SERDANG BEDAGAI', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(337, 4, 20, 'KAB. SIMALUNGUN', 530000, 0, 0, 0, 0, 0, 300000, 0, 0),
(338, 4, 21, 'KAB. TAPANULI SELATAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(339, 4, 22, 'KAB. TAPANULI TENGAH', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(340, 4, 23, 'KAB. TAPANULI UTARA', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(341, 4, 24, 'KAB. TOBA SAMOSIR', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(342, 4, 25, 'KOTA BINJAI', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(343, 4, 26, 'KOTA GUNUNG SITOLI', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(344, 4, 27, 'KOTA MEDAN', 699000, 0, 0, 0, 0, 0, 300000, 0, 0),
(345, 4, 28, 'KOTA PADANGSIDIMPUAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(346, 4, 29, 'KOTA PEMATANG SIANTAR', 530000, 0, 0, 0, 0, 0, 200000, 0, 0),
(347, 4, 30, 'KOTA SIBOLGA', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(348, 4, 31, 'KOTA TANJUNG BALAI', 500000, 0, 0, 0, 0, 0, 150000, 0, 0),
(349, 4, 32, 'KOTA TEBING TINGGI', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(350, 4, 71, 'Kecamatan Meranti', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(351, 4, 72, 'Kecamatan Pulo Bandring', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(352, 4, 73, 'Kecamatan Air Joman', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(353, 4, 74, 'Kecamatan Sei Dadap', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(354, 4, 75, 'Kecamatan Rawang Panca Arga', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(355, 4, 76, 'Kecamatan Tanjung Balai', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(356, 4, 77, 'Kecamatan Buntu Pane', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(357, 4, 78, 'Kecamatan Setia Janji', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(358, 4, 79, 'Kecamatan Tinggi Raja', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(359, 4, 80, 'Kecamatan Silau Laut', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(360, 4, 81, 'Kecamatan Simpang Empat', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(361, 4, 82, 'Kecamatan Air Batu', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(362, 4, 83, 'Kecamatan Teluk Dalam', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(363, 4, 84, 'Kecamatan Bandar Pasir Mandoge', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(364, 4, 85, 'Kecamatan Bandar Pulau', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(365, 4, 86, 'Kecamatan Aek Kuasan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(366, 4, 87, 'Kecamatan Aek Ledong', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(367, 4, 88, 'Kecamatan Aek Songsongan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(368, 4, 89, 'Kecamatan Rahuning', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(369, 4, 90, 'Kecamatan Pulau Rakyat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(370, 4, 91, 'Kecamatan Sei Kepayang', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(371, 4, 92, 'Kecamatan Sei Kepayang Barat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(372, 4, 93, 'Kecamatan Sei Kepayang Timur', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(373, 5, 34, 'ACEH', 770000, 360000, 110000, 120000, 85000, 120000, 127000, 0, 0),
(374, 5, 33, 'SUMATERA UTARA', 699000, 370000, 110000, 130000, 95000, 130000, 308000, 0, 0),
(375, 5, 38, 'RIAU', 852000, 370000, 110000, 130000, 85000, 130000, 101000, 0, 0),
(376, 5, 39, 'KEPULAUAN RIAU', 792000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(377, 5, 40, 'J A M B I', 580000, 370000, 110000, 130000, 95000, 130000, 147000, 0, 0),
(378, 5, 36, 'SUMATERA BARAT', 701000, 380000, 110000, 120000, 85000, 120000, 190000, 0, 0),
(379, 5, 35, 'SUMATERA SELATAN', 861000, 380000, 110000, 120000, 85000, 120000, 179000, 0, 0),
(380, 5, 41, 'LAMPUNG', 580000, 380000, 110000, 130000, 95000, 130000, 168000, 0, 0),
(381, 5, 37, 'BENGKULU', 692000, 380000, 110000, 130000, 95000, 130000, 109000, 0, 0),
(382, 5, 42, 'BANGKA BELITUNG', 649000, 410000, 120000, 130000, 95000, 130000, 97000, 0, 0),
(383, 5, 48, 'B A N T E N', 724000, 370000, 110000, 120000, 85000, 120000, 536000, 0, 0),
(384, 5, 50, 'JAWA BARAT', 686000, 430000, 130000, 150000, 105000, 150000, 200000, 0, 0),
(385, 5, 49, 'D.K.I JAKARTA', 730000, 530000, 160000, 180000, 130000, 180000, 256000, 0, 0),
(386, 5, 51, 'JAWA TENGAH', 750000, 370000, 110000, 130000, 95000, 130000, 108000, 0, 0),
(387, 5, 52, 'D.I. YOGYAKARTA', 845000, 420000, 130000, 140000, 100000, 140000, 267000, 0, 0),
(388, 5, 53, 'JAWA TIMUR', 814000, 410000, 120000, 140000, 100000, 140000, 233000, 0, 0),
(389, 5, 54, 'B A L I', 1138000, 480000, 140000, 160000, 115000, 160000, 227000, 0, 0),
(390, 5, 56, 'NUSA TENGGARA BARAT', 907000, 440000, 130000, 150000, 105000, 150000, 231000, 0, 0),
(391, 5, 55, 'NUSA TENGGARA TIMUR', 688000, 430000, 130000, 140000, 100000, 140000, 116000, 0, 0),
(392, 5, 43, 'KALIMANTAN BARAT', 538000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(393, 5, 46, 'KALIMANTAN TENGAH', 659000, 360000, 110000, 120000, 85000, 120000, 134000, 0, 0),
(394, 5, 45, 'KALIMANTAN SELATAN', 697000, 380000, 110000, 130000, 95000, 130000, 180000, 0, 0),
(395, 5, 44, 'KALIMANTAN TIMUR', 804000, 430000, 130000, 150000, 105000, 150000, 533000, 0, 0),
(396, 5, 47, 'KALIMANTAN UTARA', 904000, 430000, 130000, 150000, 105000, 150000, 218000, 0, 0),
(397, 5, 60, 'SULAWESI UTARA', 978000, 370000, 110000, 130000, 95000, 130000, 138000, 0, 0),
(398, 5, 57, 'GORONTALO', 955000, 370000, 110000, 130000, 95000, 130000, 265000, 0, 0),
(399, 5, 58, 'SULAWESI BARAT', 704000, 410000, 120000, 120000, 85000, 120000, 313000, 0, 0),
(400, 5, 62, 'SULAWESI SELATAN', 745000, 430000, 130000, 150000, 105000, 150000, 187000, 0, 0),
(401, 5, 59, 'SULAWESI TENGAH', 951000, 370000, 110000, 130000, 95000, 130000, 165000, 0, 0),
(402, 5, 61, 'SULAWESI TENGGARA', 786000, 380000, 110000, 130000, 95000, 130000, 171000, 0, 0),
(403, 5, 64, 'MALUKU', 667000, 380000, 110000, 120000, 85000, 120000, 288000, 0, 0),
(404, 5, 63, 'MALUKU UTARA', 605000, 430000, 130000, 130000, 95000, 130000, 215000, 0, 0),
(405, 5, 66, 'P A P U A', 1038000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(406, 5, 65, 'PAPUA BARAT', 967000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(407, 5, 70, 'PAPUA BARAT DAYA', 967000, 480000, 140000, 160000, 115000, 160000, 236000, 0, 0),
(408, 5, 67, 'PAPUA TENGAH', 1038000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(409, 5, 69, 'PAPUA SELATAN', 1526000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(410, 5, 68, 'PAPUA PEGUNUNGAN', 1536000, 580000, 170000, 200000, 140000, 200000, 513000, 0, 0),
(411, 5, 1, 'KAB. BATUBARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(412, 5, 2, 'KAB. DAIRI', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(413, 5, 3, 'KAB. DELI SERDANG', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(414, 5, 4, 'KAB. HUMBANG HASUNDUTAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(415, 5, 5, 'KAB. KARO', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(416, 5, 6, 'KAB. LABUHAN BATU', 500000, 0, 0, 0, 0, 0, 250000, 0, 0),
(417, 5, 7, 'KAB. LABUHAN BATU SELATAN', 500000, 0, 0, 0, 0, 0, 250000, 0, 0),
(418, 5, 8, 'KAB. LABUHAN BATU UTARA', 500000, 0, 0, 0, 0, 0, 200000, 0, 0),
(419, 5, 9, 'KAB. LANGKAT', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(420, 5, 10, 'KAB. MANDAILING NATAL', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(421, 5, 11, 'KAB. NIAS', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(422, 5, 12, 'KAB. NIAS BARAT', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(423, 5, 13, 'KAB. NIAS SELATAN', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(424, 5, 14, 'KAB. NIAS UTARA', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(425, 5, 15, 'KAB. PADANG LAWAS', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(426, 5, 16, 'KAB. PADANG LAWAS UTARA', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(427, 5, 17, 'KAB. PAKPAK BARAT', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(428, 5, 18, 'KAB. SAMOSIR', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(429, 5, 19, 'KAB. SERDANG BEDAGAI', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(430, 5, 20, 'KAB. SIMALUNGUN', 530000, 0, 0, 0, 0, 0, 300000, 0, 0),
(431, 5, 21, 'KAB. TAPANULI SELATAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(432, 5, 22, 'KAB. TAPANULI TENGAH', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(433, 5, 23, 'KAB. TAPANULI UTARA', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(434, 5, 24, 'KAB. TOBA SAMOSIR', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(435, 5, 25, 'KOTA BINJAI', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(436, 5, 26, 'KOTA GUNUNG SITOLI', 500000, 0, 0, 0, 0, 0, 0, 0, 0),
(437, 5, 27, 'KOTA MEDAN', 699000, 0, 0, 0, 0, 0, 300000, 0, 0),
(438, 5, 28, 'KOTA PADANGSIDIMPUAN', 500000, 0, 0, 0, 0, 0, 400000, 0, 0),
(439, 5, 29, 'KOTA PEMATANG SIANTAR', 530000, 0, 0, 0, 0, 0, 200000, 0, 0),
(440, 5, 30, 'KOTA SIBOLGA', 530000, 0, 0, 0, 0, 0, 400000, 0, 0),
(441, 5, 31, 'KOTA TANJUNG BALAI', 500000, 0, 0, 0, 0, 0, 150000, 0, 0),
(442, 5, 32, 'KOTA TEBING TINGGI', 500000, 0, 0, 0, 0, 0, 300000, 0, 0),
(443, 5, 71, 'Kecamatan Meranti', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(444, 5, 72, 'Kecamatan Pulo Bandring', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(445, 5, 73, 'Kecamatan Air Joman', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(446, 5, 74, 'Kecamatan Sei Dadap', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(447, 5, 75, 'Kecamatan Rawang Panca Arga', 0, 75000, 0, 0, 0, 0, 0, 0, 0),
(448, 5, 76, 'Kecamatan Tanjung Balai', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(449, 5, 77, 'Kecamatan Buntu Pane', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(450, 5, 78, 'Kecamatan Setia Janji', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(451, 5, 79, 'Kecamatan Tinggi Raja', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(452, 5, 80, 'Kecamatan Silau Laut', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(453, 5, 81, 'Kecamatan Simpang Empat', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(454, 5, 82, 'Kecamatan Air Batu', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(455, 5, 83, 'Kecamatan Teluk Dalam', 0, 100000, 0, 0, 0, 0, 0, 0, 0),
(456, 5, 84, 'Kecamatan Bandar Pasir Mandoge', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(457, 5, 85, 'Kecamatan Bandar Pulau', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(458, 5, 86, 'Kecamatan Aek Kuasan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(459, 5, 87, 'Kecamatan Aek Ledong', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(460, 5, 88, 'Kecamatan Aek Songsongan', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(461, 5, 89, 'Kecamatan Rahuning', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(462, 5, 90, 'Kecamatan Pulau Rakyat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(463, 5, 91, 'Kecamatan Sei Kepayang', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(464, 5, 92, 'Kecamatan Sei Kepayang Barat', 0, 125000, 0, 0, 0, 0, 0, 0, 0),
(465, 5, 93, 'Kecamatan Sei Kepayang Timur', 0, 125000, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rolemenus`
--

CREATE TABLE `rolemenus` (
  `rolemenu_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `submenu_id` bigint(20) UNSIGNED NOT NULL,
  `lihat` enum('true','false') NOT NULL DEFAULT 'false',
  `tambah` enum('true','false') NOT NULL DEFAULT 'false',
  `ubah` enum('true','false') NOT NULL DEFAULT 'false',
  `hapus` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rolemenus`
--

INSERT INTO `rolemenus` (`rolemenu_id`, `role_id`, `submenu_id`, `lihat`, `tambah`, `ubah`, `hapus`) VALUES
(3, 4, 6, 'false', 'false', 'false', 'false'),
(4, 4, 7, 'false', 'false', 'false', 'false'),
(5, 4, 8, 'false', 'false', 'false', 'false'),
(6, 4, 11, 'false', 'false', 'false', 'false'),
(7, 4, 10, 'false', 'false', 'false', 'false'),
(8, 4, 25, 'false', 'false', 'false', 'false'),
(10, 1, 11, 'false', 'false', 'false', 'false'),
(11, 1, 12, 'false', 'false', 'false', 'false'),
(12, 1, 25, 'false', 'false', 'false', 'false'),
(13, 2, 1, 'false', 'false', 'false', 'false'),
(14, 2, 4, 'false', 'false', 'false', 'false'),
(15, 2, 5, 'false', 'false', 'false', 'false'),
(16, 2, 10, 'false', 'false', 'false', 'false'),
(17, 2, 13, 'false', 'false', 'false', 'false'),
(18, 2, 14, 'false', 'false', 'false', 'false'),
(19, 2, 15, 'false', 'false', 'false', 'false'),
(20, 2, 24, 'false', 'false', 'false', 'false'),
(21, 2, 17, 'false', 'false', 'false', 'false'),
(22, 2, 25, 'false', 'false', 'false', 'false'),
(23, 2, 20, 'false', 'false', 'false', 'false'),
(24, 3, 9, 'false', 'false', 'false', 'false'),
(25, 3, 12, 'false', 'false', 'false', 'false'),
(26, 3, 19, 'false', 'false', 'false', 'false'),
(27, 3, 25, 'false', 'false', 'false', 'false'),
(28, 6, 4, 'false', 'false', 'false', 'false'),
(29, 6, 5, 'false', 'false', 'false', 'false'),
(30, 6, 25, 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_nama`) VALUES
(1, 'Kepala - Sekretaris'),
(2, 'Bagian Kepegawaian'),
(3, 'Bagian Keuangan'),
(4, 'Pelaksana Perjalanan Dinas'),
(6, 'Bidang');

-- --------------------------------------------------------

--
-- Table structure for table `spjhotels`
--

CREATE TABLE `spjhotels` (
  `spjhotel_id` bigint(20) UNSIGNED NOT NULL,
  `spjhotel_pelaksanaid` bigint(20) UNSIGNED NOT NULL,
  `spjhotel_nama` varchar(20) NOT NULL,
  `spjhotel_lokasi` varchar(20) NOT NULL,
  `spjhotel_nokamar` varchar(25) NOT NULL,
  `spjhotel_typekamar` varchar(25) NOT NULL,
  `spjhotel_checkin` date NOT NULL,
  `spjhotel_checkout` date NOT NULL,
  `spjhotel_mlm` int(11) NOT NULL,
  `spjhotel_hargapermalam` double NOT NULL,
  `spjhotel_hargatotal` double NOT NULL,
  `spjhotel_verif` int(11) NOT NULL DEFAULT 0,
  `spjhotel_bill` varchar(50) NOT NULL,
  `spjhotel_created_at` datetime DEFAULT NULL,
  `spjhotel_updated_at` datetime DEFAULT NULL,
  `spjhotel_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spjhotels`
--

INSERT INTO `spjhotels` (`spjhotel_id`, `spjhotel_pelaksanaid`, `spjhotel_nama`, `spjhotel_lokasi`, `spjhotel_nokamar`, `spjhotel_typekamar`, `spjhotel_checkin`, `spjhotel_checkout`, `spjhotel_mlm`, `spjhotel_hargapermalam`, `spjhotel_hargatotal`, `spjhotel_verif`, `spjhotel_bill`, `spjhotel_created_at`, `spjhotel_updated_at`, `spjhotel_deleted_at`) VALUES
(2, 19, 'G7 GRAND HOTEL', 'Jakarta', '610', 'Room Charge', '2024-01-11', '2024-01-13', 2, 730000, 1460000, 1, '1709608152_9a308c711fd8f7578f6a.pdf', '2024-03-05 10:04:19', '2024-03-05 10:39:45', NULL),
(3, 18, 'G7 Grand Hotel', 'Jakarta', '607', 'Room Charge', '2024-01-11', '2024-01-13', 2, 950000, 1900000, 1, '1709609071_c51e5bfafffdb921bb43.pdf', '2024-03-05 10:23:03', '2024-03-05 10:37:27', NULL),
(4, 14, 'G7 Grand Hotel', 'Kemayoran Jakarta', '701', 'Room Charge', '2024-02-26', '2024-02-29', 3, 950000, 2850000, 0, '1709615233_594b1b502ba08388e609.pdf', '2024-03-05 12:06:18', '2024-03-05 12:07:13', NULL),
(5, 15, 'G7 Grand Hotel', 'Kemayoran - Jakarta', '517', 'Room Charge', '2024-02-26', '2024-02-29', 3, 730000, 2190000, 0, '1709625880_b0991ec95942e5438e28.pdf', '2024-03-05 15:01:47', '2024-03-05 15:04:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spjpesawats`
--

CREATE TABLE `spjpesawats` (
  `spjpesawat_id` bigint(20) UNSIGNED NOT NULL,
  `spjpesawat_pelaksanaid` bigint(20) UNSIGNED NOT NULL,
  `spjpesawat_jenis` varchar(15) NOT NULL,
  `spjpesawat_maskapai` varchar(20) NOT NULL,
  `spjpesawat_notiket` varchar(20) NOT NULL,
  `spjpesawat_kdboking` varchar(20) NOT NULL,
  `spjpesawat_tgl` date NOT NULL,
  `spjpesawat_dari` varchar(25) NOT NULL,
  `spjpesawat_ke` varchar(25) NOT NULL,
  `spjpesawat_harga` double NOT NULL,
  `spjpesawat_verif` int(11) NOT NULL,
  `spjpesawat_fototiket` varchar(50) NOT NULL,
  `spjpesawat_bill` varchar(50) NOT NULL,
  `spjpesawat_created_at` datetime DEFAULT NULL,
  `spjpesawat_updated_at` datetime DEFAULT NULL,
  `spjpesawat_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spjpesawats`
--

INSERT INTO `spjpesawats` (`spjpesawat_id`, `spjpesawat_pelaksanaid`, `spjpesawat_jenis`, `spjpesawat_maskapai`, `spjpesawat_notiket`, `spjpesawat_kdboking`, `spjpesawat_tgl`, `spjpesawat_dari`, `spjpesawat_ke`, `spjpesawat_harga`, `spjpesawat_verif`, `spjpesawat_fototiket`, `spjpesawat_bill`, `spjpesawat_created_at`, `spjpesawat_updated_at`, `spjpesawat_deleted_at`) VALUES
(1, 13, 'Berangkat', 'Citilink', '-', 'MHM1TQ', '2024-02-20', 'Bandara Kualanamo - Medan', 'Bandahara Hang Nadim', 1317097, 1, '1709398565_45bbdeeec3bd563552d6.jpg', '1709398565_7d168c2cde631368427e.pdf', '2024-03-02 23:55:18', '2024-03-03 00:03:39', NULL),
(2, 13, 'Kembali', 'Citilink', '-', 'IBPCPS', '2024-02-22', 'Bandara Hang Nadim', 'Bandara Kualanamu', 1021246, 1, '1709398724_0dceea6c77936b377e02.jpg', '1709398724_e10d5d109055a91ec3a3.pdf', '2024-03-02 23:58:09', '2024-03-03 00:24:22', NULL),
(3, 15, 'Berangkat', 'Citilink', '-', 'ZH868D', '2024-02-26', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1393502, 0, '1709537524_7718c5bc53683a6ee9a4.jpg', '1709537524_3be2198ca8d8fc92823c.pdf', '2024-03-04 14:14:32', '2024-03-04 14:32:04', NULL),
(4, 15, 'Kembali', 'Super Air Jet', '9902195227867', 'YPINQQ', '2024-02-29', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1477681, 0, '1709539050_3cbe5117bbb7e6ccf2e7.jpg', '1709539050_817caffa205d9bce3d71.pdf', '2024-03-04 14:48:06', '2024-03-04 14:57:30', NULL),
(5, 14, 'Berangkat', 'Citilink', '-', 'ZH868D', '2024-02-26', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1393502, 0, '1709539382_6d2050c6e4c47b657645.jpg', '1709539382_8dcc978c48b2f1813ce1.pdf', '2024-03-04 15:02:39', '2024-03-04 15:03:02', NULL),
(6, 19, 'Berangkat', 'Citilink', '-', 'E9MD5V', '2024-01-11', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1999559, 1, '1709608689_7ae5e316d44f799b47ba.jpg', '1709608689_228233ac10e783338f2c.pdf', '2024-03-05 10:17:10', '2024-03-05 10:40:11', NULL),
(7, 19, 'Kembali', 'Citilink', '-', 'TGFT8T', '2024-01-14', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1370000, 1, '1709608874_4e33f3089978d3b386cb.jpg', '1709608874_efa01e0b8857cb8942ad.pdf', '2024-03-05 10:20:12', '2024-03-05 10:40:03', NULL),
(8, 18, 'Berangkat', 'Citilink', '-', 'E9MD5V', '2024-01-11', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1999559, 1, '1709609250_22a1a2639b419a5133aa.jpg', '1709609250_af9f1aeebf0e914e315d.pdf', '2024-03-05 10:26:53', '2024-03-05 10:38:19', NULL),
(9, 18, 'Kembali', 'Citilink', '-', 'TGFT8T', '2024-01-14', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1370000, 1, '1709609388_43025b3a74d898ebe9c3.jpg', '1709609388_5a36fe15b606c353959f.pdf', '2024-03-05 10:29:03', '2024-03-05 10:37:59', NULL),
(10, 14, 'Kembali', 'Batik Air', '9902195349328', 'HEMIDP', '2024-03-03', 'Bandara Halim Perdanakusu', 'Bandara Kualanamu', 1831259, 0, '1709623750_4c6d327aee6b78c011f9.jpg', '1709623750_2ccaff974b9867fb30e7.pdf', '2024-03-05 14:28:23', '2024-03-05 14:29:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spjtaksis`
--

CREATE TABLE `spjtaksis` (
  `spjtaksi_id` bigint(20) UNSIGNED NOT NULL,
  `spjtaksi_pelaksanaid` bigint(20) UNSIGNED NOT NULL,
  `spjtaksi_jenis` varchar(15) NOT NULL,
  `spjtaksi_tgl` date NOT NULL,
  `spjtaksi_dari` varchar(25) NOT NULL,
  `spjtaksi_ke` varchar(25) NOT NULL,
  `spjtaksi_harga` double NOT NULL,
  `spjtaksi_verif` int(11) NOT NULL,
  `spjtaksi_fototiket` varchar(50) NOT NULL,
  `spjtaksi_created_at` datetime DEFAULT NULL,
  `spjtaksi_updated_at` datetime DEFAULT NULL,
  `spjtaksi_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spjtaksis`
--

INSERT INTO `spjtaksis` (`spjtaksi_id`, `spjtaksi_pelaksanaid`, `spjtaksi_jenis`, `spjtaksi_tgl`, `spjtaksi_dari`, `spjtaksi_ke`, `spjtaksi_harga`, `spjtaksi_verif`, `spjtaksi_fototiket`, `spjtaksi_created_at`, `spjtaksi_updated_at`, `spjtaksi_deleted_at`) VALUES
(1, 13, 'Berangkat', '2024-02-20', 'Kisaran', 'Bandara Kualanamu', 140000, 1, '1709398819_95d5cfecde556e0e9b35.jpg', '2024-03-03 00:00:05', '2024-03-03 00:04:34', NULL),
(2, 13, 'Berangkat', '2024-02-20', 'Bandara Hang Nadim', 'Hotel Acara', 200000, 1, '1709398872_a15c8068de6ed6f78784.jpg', '2024-03-03 00:00:57', '2024-03-03 00:04:25', NULL),
(3, 13, 'Kembali', '2024-02-22', 'Hotel Acara', 'Bandara Hang Nadim', 200000, 1, '1709398927_ce6379cb055fc160b91e.jpg', '2024-03-03 00:01:55', '2024-03-03 00:04:10', NULL),
(4, 13, 'Kembali', '2024-02-22', 'Bandara Kuala Namu', 'Kisaran', 140000, 1, '1709398965_c03fa4ac2843a697ee8b.jpg', '2024-03-03 00:02:31', '2024-03-03 00:03:59', NULL),
(5, 14, 'Berangkat', '2024-02-26', 'Kisaran', 'Bandara Kualanamu', 56000, 0, '1709539893_db87feeb652c0e9e1f93.jpg', '2024-03-04 15:04:44', '2024-03-04 15:11:33', NULL),
(6, 15, 'Kembali', '2024-02-29', 'Hotel', 'Bandara Soekarno Hatta', 201000, 0, '1709555669_002071bb92f708045beb.jpg', '2024-03-04 19:34:09', '2024-03-04 19:34:29', NULL),
(7, 14, 'Berangkat', '2024-02-26', 'Bandara Soekarno Hatta', 'Hotel', 400000, 0, '1709556574_242928de0c3373f00981.jpg', '2024-03-04 19:49:10', '2024-03-04 19:49:34', NULL),
(8, 18, 'Berangkat', '2024-01-11', 'Kisaran', 'Bandara Kualanamu', 56000, 1, '1709609514_9290196ff5c16ee8de49.jpg', '2024-03-05 10:30:58', '2024-03-05 10:39:04', NULL),
(9, 18, 'Berangkat', '2024-01-11', 'Bandara Soekarno Hatta', 'Hotel', 400000, 1, '1709609593_8ff5b9ed8633fe74cd91.jpg', '2024-03-05 10:32:47', '2024-03-05 10:38:51', NULL),
(10, 18, 'Kembali', '2024-01-14', 'Hotel', 'Bandara Kualanamu', 400000, 1, '1709609740_c8c000f78fab38a170bb.jpg', '2024-03-05 10:34:45', '2024-03-05 10:38:43', NULL),
(11, 14, 'Kembali', '2024-03-03', 'Hotel', 'Bandara Halim Perdanakusu', 400000, 0, '1709623980_78be213b1b4378901c09.jpg', '2024-03-05 14:30:20', '2024-03-05 14:33:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spts`
--

CREATE TABLE `spts` (
  `spt_id` bigint(20) UNSIGNED NOT NULL,
  `spt_tahun` int(11) NOT NULL,
  `spt_nomor` varchar(100) DEFAULT NULL,
  `sppd_nomor` varchar(100) DEFAULT NULL,
  `spt_tgl` date DEFAULT NULL,
  `spt_pjb_tugas` bigint(20) UNSIGNED NOT NULL,
  `spt_jenis` int(11) NOT NULL,
  `spt_acara` int(11) NOT NULL,
  `spt_dasar` text DEFAULT NULL,
  `spt_uraian` text NOT NULL,
  `spt_lama` int(20) NOT NULL,
  `spt_mulai` date NOT NULL,
  `spt_berakhir` date NOT NULL,
  `spt_tujuan` int(11) NOT NULL,
  `spt_transport` varchar(50) NOT NULL,
  `spt_tempat` varchar(150) NOT NULL,
  `spt_verif` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spts`
--

INSERT INTO `spts` (`spt_id`, `spt_tahun`, `spt_nomor`, `sppd_nomor`, `spt_tgl`, `spt_pjb_tugas`, `spt_jenis`, `spt_acara`, `spt_dasar`, `spt_uraian`, `spt_lama`, `spt_mulai`, `spt_berakhir`, `spt_tujuan`, `spt_transport`, `spt_tempat`, `spt_verif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2024, '800.1.11.1/0210/BKAD/II/2024', '800.1.11.1/014/SPPD/II/2024', '2024-02-19', 1, 2, 0, 'Undangan dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi Direktorat Jenderal Guru dan Tenaga Kependidikan Nomor : 0542/BI/KU.01.02/2024 Tanggal 01 Februari 2024 Perihal Undangan Peserta', 'Menghadiri Undangan Rekonsiliasi Laporan Realisasi Pembayaran Tunjangan Profesi Guru, Tunjangan Khusus Guru dan Tambahan Penghasilan Guru ASND melalui DAK Non Fisik Tahun Anggaran 2023 Tahap I', 3, '2024-02-20', '2024-02-22', 39, 'Pesawat Udara', 'Golden View Hotel, Jl. Bengkong Laut, Tj. Buntung, Kec. Bengkong, Kota Batam, Kepulauan Riau', 1, '2024-02-19 08:47:14', '2024-02-19 17:06:06', NULL),
(5, 2024, '800.1.11.1/0229/BKAD/II/2024', '800.1.11.1/017/SPD/II/2024', '2024-02-23', 1, 2, 0, '', ' Konsultasi penggunaan SIPD Penatausahaan setelah penetapan pergeseran APBD menyusul atas penyampaian surat Sekretaris Daerah No. 900.1/0692/UM-BKAD/II/2024 tanggal 12 Pebruari 2024 Perihal Permohonan Penjelasan terkait Penatausahaan Pergeseran APBD TA. 2024, serta interkoneksi SIPD Penatausahaan dengan Bank Daerah sebgaimana surat Sekretaris Daerah No. 900.1.15.9/0545/UM-BKAD/II/2024 Tanggal 02 Pebruari 2024 Perihal Permohonan Pendampingan Penggunaan Aplikasi SIPD Penatausahaan', 4, '2024-02-26', '2024-02-29', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7, Jakarta Pusat. ', 1, '2024-02-22 23:05:45', '2024-03-04 08:48:14', NULL),
(6, 2024, '2', '4', '2024-03-02', 1, 2, 3, 'Undangan', 'Mengahdiri Undangan', 4, '2024-03-02', '2024-03-05', 39, 'Pesawat Udara', 'Hotel', 1, '2024-03-02 19:43:32', '2024-03-04 20:35:09', NULL),
(7, 2024, '800.1.11.1/0088/BKAD/I/2024', '800.1.11.1/004/SPPD/I/2024', '2024-01-10', 1, 2, 0, '', 'Konsultasi terkait Penggunaan SIPD RI Penatausahaan saat pembuatan Uang Persediaan (UP) untuk Sekretariat Daerah  yang tidak bisa diinput pada Aplikasi', 3, '2024-01-11', '2024-01-13', 49, 'Pesawat Udara', 'Direktorat Jenderal Bina Keuangan Daerah Kementerian Dalam Negeri - Jl. Veteran No. 7 Jakarta Pusat', 1, '2024-03-05 09:49:26', '2024-03-05 09:51:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `submenu_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `submenu_nama` varchar(60) NOT NULL,
  `submenu_icon` varchar(60) NOT NULL,
  `submenu_link` varchar(60) NOT NULL,
  `submenu_active` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`submenu_id`, `menu_id`, `submenu_nama`, `submenu_icon`, `submenu_link`, `submenu_active`, `role_id`) VALUES
(1, 2, 'Pegawai', 'fas fa-circle nav-icon text-info', 'pegawai', 1, 0),
(4, 3, 'Data Perintah Tugas', 'fas fa-circle nav-icon text-info', 'spt', 1, 0),
(5, 3, 'Draft SPT', 'fas fa-circle nav-icon text-info', 'pelaksana', 1, 0),
(6, 4, 'LPJ Hotel', 'fas fa-circle nav-icon text-info', 'spjhotel', 1, 0),
(7, 4, 'LPJ Pesawat', 'fas fa-circle nav-icon text-info', 'spjpesawat', 1, 0),
(8, 4, 'LPJ Bill Taksi', 'fas fa-circle nav-icon text-info', 'spjtaksi', 1, 0),
(9, 5, 'Verifikasi LPJ', 'fas fa-circle nav-icon text-info', 'verifikasi', 1, 0),
(10, 3, 'Verifikasi SPT', 'fas fa-circle nav-icon text-info', 'verifspt', 1, 0),
(11, 4, 'LPJ Perjalanan', 'fas fa-circle nav-icon text-info', 'laporjadin', 1, 1),
(12, 5, 'Biaya Rampung', 'fas fa-circle nav-icon text-info', 'rampung', 1, 0),
(13, 2, 'Menu', 'fas fa-circle nav-icon text-info', 'menu', 1, 0),
(14, 2, 'Sub Menu', 'fas fa-circle nav-icon text-info', 'menusub', 1, 0),
(15, 8, 'Group User', 'fas fa-circle nav-icon text-info', 'role', 1, 0),
(17, 8, 'User', 'fas fa-circle nav-icon text-info', 'user', 1, 0),
(19, 5, 'BPK', 'fas fa-circle nav-icon text-info', 'bpk', 1, 0),
(20, 8, 'Menu Role', 'fas fa-circle nav-icon text-info', 'rolemenu', 1, 0),
(24, 2, 'Pejabat', 'fas fa-circle nav-icon text-info', 'pejabatpenandatangan', 1, 0),
(25, 0, 'Dashboard', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tingkats`
--

CREATE TABLE `tingkats` (
  `tingkat_id` int(10) UNSIGNED NOT NULL,
  `tingkat_nama` varchar(60) NOT NULL,
  `tingkat_uraian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tingkats`
--

INSERT INTO `tingkats` (`tingkat_id`, `tingkat_nama`, `tingkat_uraian`) VALUES
(1, 'A', 'Bupati/ Wakil Bupati dan Pimpinan Daerah'),
(2, 'B', 'Pejabat Eselon II (Pejabat Pimpinan Tinggi Pratama), Anggota DPRD'),
(3, 'C', 'Pejabat Eselon III (Pejabat Administrator), Pejabat Fungsional Ahli Utama, Pejabat Fungsional Ahli M'),
(4, 'D', 'Pejabat Eselon IV (Pejabat Pengawas), Pejabat Fungsional Ahli Muda, Pejabat Fungsional Ahli Pertama,'),
(5, 'E', 'Pejabat Fungsional Terampil, PNS Golongan II dan Golongan I (Jabatan Pelaksana), dan PPPK');

-- --------------------------------------------------------

--
-- Table structure for table `uangharians`
--

CREATE TABLE `uangharians` (
  `uangharian_id` int(10) UNSIGNED NOT NULL,
  `uangharian_idpelaksana` bigint(20) UNSIGNED NOT NULL,
  `uangharian_sptid` bigint(20) UNSIGNED NOT NULL,
  `uangharian_tingkatid` int(10) UNSIGNED NOT NULL,
  `uangharian_lokasiid` int(10) UNSIGNED NOT NULL,
  `uangharian_lama` int(11) NOT NULL,
  `uangharian_perhari` double NOT NULL,
  `uangharian_jlhhari` int(11) NOT NULL,
  `uangharian_jumlahpersen` varchar(10) NOT NULL,
  `uangharian_jumlah` double NOT NULL,
  `uangharian_harianundangan` double NOT NULL,
  `uangharian_hariundangan` int(11) NOT NULL,
  `uangharian_jlhharianundangan` double NOT NULL,
  `uangharian_biayatransport` double NOT NULL,
  `uangharian_jumlahbiayatransport` double NOT NULL,
  `uangharian_representasi` double NOT NULL,
  `uangharian_jumlahrepresentasi` double NOT NULL,
  `uangharian_sewamobil` double NOT NULL,
  `uangharian_jumlahsewamobil` double NOT NULL,
  `uangharian_total` double NOT NULL,
  `uangharian_verif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uangharians`
--

INSERT INTO `uangharians` (`uangharian_id`, `uangharian_idpelaksana`, `uangharian_sptid`, `uangharian_tingkatid`, `uangharian_lokasiid`, `uangharian_lama`, `uangharian_perhari`, `uangharian_jlhhari`, `uangharian_jumlahpersen`, `uangharian_jumlah`, `uangharian_harianundangan`, `uangharian_hariundangan`, `uangharian_jlhharianundangan`, `uangharian_biayatransport`, `uangharian_jumlahbiayatransport`, `uangharian_representasi`, `uangharian_jumlahrepresentasi`, `uangharian_sewamobil`, `uangharian_jumlahsewamobil`, `uangharian_total`, `uangharian_verif`) VALUES
(12, 17, 6, 4, 39, 4, 370000, 3, '100%', 1110000, 95000, 1, 95000, 0, 0, 0, 0, 0, 0, 0, 1),
(13, 16, 6, 4, 39, 4, 370000, 4, '100%', 1480000, 95000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(14, 13, 4, 4, 39, 3, 370000, 3, '30%', 333000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(15, 18, 7, 3, 49, 3, 530000, 3, '100%', 1590000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(16, 19, 7, 4, 49, 3, 530000, 3, '100%', 1590000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_nama` varchar(60) NOT NULL,
  `user_nmlengkap` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_active` int(11) NOT NULL DEFAULT 1,
  `user_roleid` bigint(20) UNSIGNED NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_updated_at` datetime DEFAULT NULL,
  `user_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_nmlengkap`, `user_password`, `user_active`, `user_roleid`, `user_created_at`, `user_updated_at`, `user_deleted_at`) VALUES
(1, 'rasel', 'Rahmad Saleh Sitorus', '$2y$10$6uLO3c4NRd87GgimJHoAh.ech1dVNjoDrW/l6XwI1YLxB77wGQlDO', 1, 2, '2024-01-24 12:46:02', '2024-01-24 20:08:35', NULL),
(2, 'rahmad', 'Rahmad', '$2y$10$.fs6SndYgVLFzktNWnN1eesRTfXXahvBYmaki3o95t/h.GYIs.VjW', 1, 3, '2024-01-25 10:31:40', '2024-01-25 17:31:40', NULL),
(3, 'saleh', 'R. Saleh', '$2y$10$ALx0qLP10kq2GclpCUZq/.5ByWZf48qGlTL9OW0QVmKUZxt7iP3PS', 1, 1, '2024-01-25 10:32:12', '2024-01-25 17:32:12', NULL),
(4, 'perbendaharaan', 'Bidang Perbendaharaan', '$2y$10$BYn/jrCXblCx8Qmgnsn0Lu0ekH9TepGb.mE761uyfq5AYPA4hoBHa', 1, 6, '2024-02-22 04:03:50', '2024-02-22 11:03:50', NULL),
(7, 'umum', 'Bagian Umum Kepegawaian', '$2y$10$fdPNqQ3wmVIE7URJ1njCKOla/gqRB4/xf4oLX9J.9KK6TDnnpWNP6', 1, 2, '2024-03-04 01:36:39', '2024-03-04 08:36:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eselons`
--
ALTER TABLE `eselons`
  ADD PRIMARY KEY (`eselon_id`);

--
-- Indexes for table `jenisperjadins`
--
ALTER TABLE `jenisperjadins`
  ADD PRIMARY KEY (`jenisperjadin_id`);

--
-- Indexes for table `laporjadins`
--
ALTER TABLE `laporjadins`
  ADD PRIMARY KEY (`laporjadin_id`),
  ADD KEY `FKlaporjadinsptid` (`laporjadin_sptid`);

--
-- Indexes for table `lokasiperjadins`
--
ALTER TABLE `lokasiperjadins`
  ADD PRIMARY KEY (`lokasiperjadin_id`),
  ADD KEY `fkjenisperjadinlokasi` (`jenisperjadin_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkats`
--
ALTER TABLE `pangkats`
  ADD PRIMARY KEY (`pangkat_id`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`pegawai_id`),
  ADD KEY `pegawaieselonidFK` (`eselon_id`),
  ADD KEY `pegawaipangkatidFK` (`pangkat_id`),
  ADD KEY `pegawaitingkatidFK` (`pegawai_tingkat`);

--
-- Indexes for table `pejabats`
--
ALTER TABLE `pejabats`
  ADD PRIMARY KEY (`pejabat_id`);

--
-- Indexes for table `pelaksanas`
--
ALTER TABLE `pelaksanas`
  ADD PRIMARY KEY (`pelaksana_id`),
  ADD UNIQUE KEY `uniqkey` (`spt_id`,`pegawai_id`),
  ADD KEY `myfkpelaksanapegawai` (`pegawai_id`);

--
-- Indexes for table `perbups`
--
ALTER TABLE `perbups`
  ADD PRIMARY KEY (`perbup_id`),
  ADD KEY `perbuptingkatidFK` (`perbup_tingkatid`),
  ADD KEY `perbuplokasiidFK` (`perbup_lokasiid`);

--
-- Indexes for table `rolemenus`
--
ALTER TABLE `rolemenus`
  ADD PRIMARY KEY (`rolemenu_id`),
  ADD KEY `roleidmenuFK` (`role_id`),
  ADD KEY `submenuidroleFK` (`submenu_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `spjhotels`
--
ALTER TABLE `spjhotels`
  ADD PRIMARY KEY (`spjhotel_id`),
  ADD KEY `FKspjhotelpelaksanaid` (`spjhotel_pelaksanaid`);

--
-- Indexes for table `spjpesawats`
--
ALTER TABLE `spjpesawats`
  ADD PRIMARY KEY (`spjpesawat_id`),
  ADD KEY `FKspjpesawatpelaksanaid` (`spjpesawat_pelaksanaid`);

--
-- Indexes for table `spjtaksis`
--
ALTER TABLE `spjtaksis`
  ADD PRIMARY KEY (`spjtaksi_id`),
  ADD KEY `FKspjtaksipelaksanaid` (`spjtaksi_pelaksanaid`);

--
-- Indexes for table `spts`
--
ALTER TABLE `spts`
  ADD PRIMARY KEY (`spt_id`),
  ADD KEY `FKpejabatpemberitugas` (`spt_pjb_tugas`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`submenu_id`),
  ADD KEY `menuidFK` (`menu_id`);

--
-- Indexes for table `tingkats`
--
ALTER TABLE `tingkats`
  ADD PRIMARY KEY (`tingkat_id`);

--
-- Indexes for table `uangharians`
--
ALTER TABLE `uangharians`
  ADD PRIMARY KEY (`uangharian_id`),
  ADD KEY `uanghariantingkatidFK` (`uangharian_tingkatid`),
  ADD KEY `uangharianlokasiidFK` (`uangharian_lokasiid`),
  ADD KEY `uangharianpelaksanaidFK` (`uangharian_idpelaksana`),
  ADD KEY `uangharianpsptidFK` (`uangharian_sptid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `roleidFK` (`user_roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eselons`
--
ALTER TABLE `eselons`
  MODIFY `eselon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenisperjadins`
--
ALTER TABLE `jenisperjadins`
  MODIFY `jenisperjadin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporjadins`
--
ALTER TABLE `laporjadins`
  MODIFY `laporjadin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasiperjadins`
--
ALTER TABLE `lokasiperjadins`
  MODIFY `lokasiperjadin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `pangkat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `pegawai_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `pejabat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelaksanas`
--
ALTER TABLE `pelaksanas`
  MODIFY `pelaksana_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `perbups`
--
ALTER TABLE `perbups`
  MODIFY `perbup_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `rolemenus`
--
ALTER TABLE `rolemenus`
  MODIFY `rolemenu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spjhotels`
--
ALTER TABLE `spjhotels`
  MODIFY `spjhotel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spjpesawats`
--
ALTER TABLE `spjpesawats`
  MODIFY `spjpesawat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spjtaksis`
--
ALTER TABLE `spjtaksis`
  MODIFY `spjtaksi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `spts`
--
ALTER TABLE `spts`
  MODIFY `spt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `submenu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tingkats`
--
ALTER TABLE `tingkats`
  MODIFY `tingkat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uangharians`
--
ALTER TABLE `uangharians`
  MODIFY `uangharian_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporjadins`
--
ALTER TABLE `laporjadins`
  ADD CONSTRAINT `FKlaporjadinsptid` FOREIGN KEY (`laporjadin_sptid`) REFERENCES `spts` (`spt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lokasiperjadins`
--
ALTER TABLE `lokasiperjadins`
  ADD CONSTRAINT `fkjenisperjadinlokasi` FOREIGN KEY (`jenisperjadin_id`) REFERENCES `jenisperjadins` (`jenisperjadin_id`);

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawaieselonidFK` FOREIGN KEY (`eselon_id`) REFERENCES `eselons` (`eselon_id`),
  ADD CONSTRAINT `pegawaipangkatidFK` FOREIGN KEY (`pangkat_id`) REFERENCES `pangkats` (`pangkat_id`),
  ADD CONSTRAINT `pegawaitingkatidFK` FOREIGN KEY (`pegawai_tingkat`) REFERENCES `tingkats` (`tingkat_id`);

--
-- Constraints for table `pelaksanas`
--
ALTER TABLE `pelaksanas`
  ADD CONSTRAINT `myfkpelaksanapegawai` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`pegawai_id`),
  ADD CONSTRAINT `myfkpelaksanaspt` FOREIGN KEY (`spt_id`) REFERENCES `spts` (`spt_id`);

--
-- Constraints for table `perbups`
--
ALTER TABLE `perbups`
  ADD CONSTRAINT `perbuplokasiidFK` FOREIGN KEY (`perbup_lokasiid`) REFERENCES `lokasiperjadins` (`lokasiperjadin_id`),
  ADD CONSTRAINT `perbuptingkatidFK` FOREIGN KEY (`perbup_tingkatid`) REFERENCES `tingkats` (`tingkat_id`);

--
-- Constraints for table `rolemenus`
--
ALTER TABLE `rolemenus`
  ADD CONSTRAINT `roleidmenuFK` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submenuidroleFK` FOREIGN KEY (`submenu_id`) REFERENCES `submenus` (`submenu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spjhotels`
--
ALTER TABLE `spjhotels`
  ADD CONSTRAINT `FKspjhotelpelaksanaid` FOREIGN KEY (`spjhotel_pelaksanaid`) REFERENCES `pelaksanas` (`pelaksana_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spjpesawats`
--
ALTER TABLE `spjpesawats`
  ADD CONSTRAINT `FKspjpesawatpelaksanaid` FOREIGN KEY (`spjpesawat_pelaksanaid`) REFERENCES `pelaksanas` (`pelaksana_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spjtaksis`
--
ALTER TABLE `spjtaksis`
  ADD CONSTRAINT `FKspjtaksipelaksanaid` FOREIGN KEY (`spjtaksi_pelaksanaid`) REFERENCES `pelaksanas` (`pelaksana_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spts`
--
ALTER TABLE `spts`
  ADD CONSTRAINT `FKpejabatpemberitugas` FOREIGN KEY (`spt_pjb_tugas`) REFERENCES `pejabats` (`pejabat_id`);

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `menuidFK` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uangharians`
--
ALTER TABLE `uangharians`
  ADD CONSTRAINT `uangharianlokasiidFK` FOREIGN KEY (`uangharian_lokasiid`) REFERENCES `lokasiperjadins` (`lokasiperjadin_id`),
  ADD CONSTRAINT `uangharianpelaksanaidFK` FOREIGN KEY (`uangharian_idpelaksana`) REFERENCES `pelaksanas` (`pelaksana_id`),
  ADD CONSTRAINT `uangharianpsptidFK` FOREIGN KEY (`uangharian_sptid`) REFERENCES `spts` (`spt_id`),
  ADD CONSTRAINT `uanghariantingkatidFK` FOREIGN KEY (`uangharian_tingkatid`) REFERENCES `tingkats` (`tingkat_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roleidFK` FOREIGN KEY (`user_roleid`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;