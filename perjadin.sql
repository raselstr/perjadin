-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4040
-- Generation Time: Apr 23, 2025 at 02:36 PM
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
(2, 4, '-', '<p>Acara di Buka oleh&nbsp; perwakilan dari Direktorat Jenderal Guru dan Tenaga Kependidikan Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi Ri , serta dihadiri oleh :</p><ol><li>Perwakilan Direktorat Jenderal Perimbangan Keuangan Kementerian Keuangan RI</li><li>Perwakilan Seluruh Operator Simbar dan Aladin untuk wilayah&nbsp; 1</li></ol><p>Acara dibuka mulai dari jam 21.30 wib s.d selesai</p>', '<p>Laporan Rekonsiliasi Pembayaran Aneka Tunjangan Guru PNSD Kabupaten Asahan yang terdiri dari :</p><ol><li>Laporan Tunjangan Profesi Guru PNSD Semester 1 dan 2&nbsp; Tahun Anggaran 2023 sudah diterima dan dianggap benar baik dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI dan Kementerian Keuangan RI</li><li>Laporan Tunjangan Tambahan Pengjhasilan Guru PNSD Semester 1 dan 2 Tahun Anggaran 2023 sudah diterima dan dianggap benar baik dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI dan Kementerian Keuangan RI</li></ol>', '<p>Acara tidak dilakukan penutupan, disebabkan masih banyaknya wilayah 1 yang belum menyelesaikan laporan disebabkan kesalahan Aplikasi&nbsp; karena interkoneksi antara Aplikasi SIMBAR Kementerian Pendidikan dan Aplikasi ALADIN Kementerian Keuangan&nbsp;</p>', '1709397477_cb24c9fc9ca8425217d3.jpg', '1709397477_f30a4097245e299613fe.jpg', '1709397477_33f8873a910741f4086e.jpg', 1, '2024-03-02 21:19:47', '2024-03-14 16:52:16', NULL),
(3, 5, '-', '<p>Pertemuan Konsultasi dihadiri oleh Bapak Hadi Wiratmono tim Teknis PUSDATIN Kementerian Dalam Negeri, dijadwalkan pertemuan dimulai pukul 14.00 wib, dan akan dilanjutkan validasi ke bagian Bidang Penganggaran dan Pertanggung jawaban Direktorat Jenderal Keuangan Daerah Kemendagri</p>', '<p>Konsultasi yang dilakukan antara lain :</p><ol><li>Koneksi antara bank daerah dengan SIPD Penatausahaan, sampai saat ini koneksi belum bisa dilakukan karena masalah teknis aplikasi</li><li>Penatausahaan setelah dilakukan pergeseran sudah dapat dilakukan dan proses penatausahaan sampai saat ini sudah berjalan lancar sesuai SOP Aplikasi</li><li>Perbaikan TU Sekretariat Daerah yang terjadi kesalahan dalam Verifikasi SPM yang ditolak. Saat ini masih dalam perbaikan data karena modul Tolak dalam SIPD sampai saat ini masih dalam pengembangan. Untuk Pemda agar menghindari penggunaan tombol Tolak pada SIPD Penatausahaan</li><li>Perbaikan data atas penggantian Bendahara (Kota Kisaran Barat),  setalah dilakukan konsultasi data akan diperbaiki, nampun membutuhkan proses perbaikan seluruh data terlebih dahulu, saran yang diberikan agar saat melakukan pergantian khusus bendahara mewajibkan saldo Tunai dan Bank harus dalam kondisi Kosong/Nol</li><li>Modul penerimaan SIPD Penatausahaan, agar menerbitkan Rekening Penerimaan atas pengelolaan PAD atau penerimaan daerah</li></ol>', '<p>Pada hari Ke 2 Konsultasi pada Bagian Anggaran dan pertanggungjawaban dihadiri oleh Bapak Agung, yang memberikan arahan saat ini masih banyak fasilitas Aplikasi SIPD Penatausahaan dalam tahap proses pengembangan akibat banyaknya keluhan-keluhan Pemerintah Daerah, dan Kemendagri berkomitmen dan berusaha semaksimal mungkin untuk mengakomodir seluruh keluhan Pemda agar SIPD Penatausahaan dapat berjalan dengan sebaik-baiknya dan kedepan menjadi dasar dalam pembuatan Laporan Keuangan Pemerintah Daerah</p>', '1709525025_09e061c524f54244c896.jpg', '1709525025_8f9ec21fb18aad0fa1ca.jpg', '1709525025_e37b6415ff9132e7d4a9.jpg', 0, '2024-03-04 10:19:19', '2024-03-04 11:03:45', NULL),
(4, 7, '-', '<p>Konsultasi dihadiri oleh Staf Perwakilan Kementerian Dalam Negeri Direktorat Jenderal Bina Keuangan Daerah Direktur Anggaran dan Pertanggungjawaban Ibu Oktianah, konsultasi dimulai pukul 10.00 wib</p>', '<p>Perbaikan Data UP Sekretariat Daerah sudah dilakukan oleh Tim Teknis  sehingga proses UP pada Sekretariat sudah bisa dilanjutkan ke Tahap SPP sampai dengan SPM dan sudah bisa sampai penerbitan SP2D.</p><p>Adapun yang disampaikan untuk Pemda, antara lain :</p><ol><li>Agar langsung membuat pejabat-pejabat terkait dalam proses penatausahaan keuangan</li><li>Mengorganisasikan seluruh pejabat agar sebelum pelaksanaan penatausahaan agar sudah disiapkan</li><li>Melakukan pelimpahan kegiatan kepada KPA sesegera sebelum pelaksanaan kegiatan</li><li>Melakukan penugasan kepada PPTK</li><li>Agar berhati-hati dalam melakukan penugasan kepada PPTK</li><li>Agar berhati-hati dalam proses pembuatan SPP, SPM, dan jangan membiasakan Keluar dan masuk akun-akun yang berbeda dalam satu komputer</li><li>Pada saat melakukan penginputan agar data sudah disiapkan dengan baik dan benar, minimalkan penghapusan akibat kesalahan penginputan data</li></ol><p><br></p>', '<p>Konsultasi selesai dilaksanakan pada pukul 14.00 wib, terkait menunggu perbaikan data oleh tim teknis</p>', '', '', '', 0, '2024-03-05 11:25:20', '2024-03-05 11:32:30', NULL),
(5, 29, '-', 'Pejabat yang menerima ibu Dra. Hj. Nur Ina Rahayu Nasutio, MSP Jabatan Analis Keuangan Pusat dan Daerah dan Bapak&nbsp; Dedi Staf Bagian Anggaran pada BKAD Provinsi Sumatera Utara', '<p>Berita Acara diterima oleh Bapak Dedi, point penting yang disampaikan antra lain :</p><ol><li>Pemerintah Kabupaten Asahan telah beberapa kali dilakukan pemotongan dana DBH Pajak Rokok oleh Pemerintah Pusat terkait kurangnya anggaran Jamkesda dengan Penerimaan Pusat DBH Pajak Rokok.</li><li>Disarankan agar sedapat mungkin anggaran Jamkesda Tahun 2024 atau kedepan bisa disesuaikan dengan penerimaan DBH Pusat sehingga meminimalisir pemotongan, dan untuk pemotongan tersebut bisa dialihkan untuk menerima peserta baru</li><li>Kedepan jika terjadi pemotongan kembali dari pusat, BKAD Provinsi Sumatera Utara akan melakukan bimbingan terhadap pemda-pemda yang mengalami pemotongan dari pusat untuk dilakukan pembinaan atas penerimaan DBH tersebut.</li></ol><p>Pesan dari Ibu Ina, antara lain :</p><ol><li>Saat ini sedang pembahasan Dana Bantuan Keuangan Provinsi Sumatera Utara,</li><li>Sekedar informasi bahwa Pemerintah Kabupaten Asahan mengalami penurunan dana dari Tahun Anggaran 2023</li><li>Agar seluruh kegiatan BKP yang direncanakan dapat di realisasikan sehingga tujuan penggunaan dana tersebut dapat dirasakan langsung oleh masyarakat&nbsp;</li></ol>', '<p>Pertemuan selesai, dan Berita Acara Rekon sudah diterima oleh pejabat pada BKAD Provinsi</p>', '1711781435_5e277472ba5c7d9d114d.jpg', '1711781435_e22c1f8f8ad8c6ab5b78.jpg', '', 0, '2024-03-28 19:38:22', '2024-04-01 09:33:30', NULL),
(6, 30, '-', '<p>Koordinasi dan Konsultasi di terima oleh perwakilan Bank SUMUT Cabang Utama Medan oleh ibuk Marlina Hasibuan</p>', '<div>Hasil Koordinasi dan Konsultasi</div><ol><li>Terkait Penggunaan KKPD untuk Pemerintah Kabupaten Asahan masih perlu dilakukan survey dan verifikasi atas rekanan yang akan menggunakan mesih EDC.</li><li>DIharapkan rekanan yang akan menggunakan mesin EDC jumlah transaksinya tidak terbatas pada penjualan untuk Pemerintah Daerah melainkan harus juga memiliki transaksi umum</li><li>Perlu adanya pendataan seluruh rekanan yang dianggap sudah memenuhi kriteria yang akan diberikan mesin EDC serta juga QRIS</li></ol>', '<p>Koordinasi dan konsultasi akan dilanjutkan pada hari Senin tanggal 29 April 2024 terkait pendataan rekanan prioritas yang akan diusulkan mendapat mesin EDC dari Bank SUMUT atau Bank BNI</p>', '1714642280_cba655c558042845b679.jpg', '1714642280_82cb42091f72ab83a1ae.jpg', '', 1, '2024-04-25 14:42:59', '2024-05-02 17:05:54', NULL),
(7, 31, '-', '<p>Koordinasi dan Konsultasi dihadiri oleh perwakilan Bank SUMUT Cabang Utama Medan oleh Bapak RONALD REGENT GINTING</p>', '<p>Pembahasan :</p><ol><li>Terkait penggunaan KKPD, rekanan wajib menggunakan Mesin EDC dan/ atau QRIS sebagai media pembayaran dengan menggunakan KKPD</li><li>Setiap Bendahara/ Kepala OPD wajib melakukan pendaftaran pada aplikasi Mobile BNI sebagai Bank Mitra dari Bank SUMUT sebagai Bank Penerbit KKPD</li><li>Saat akan mengaktifkan QRIS atau mesin EDC, rekanan/ marchand akan dikenai biaya sebesar 0,7 s.d 1 % per transaksi yang dilakukan</li><li>Merchand biasanya akan menerima dana atas penggunaan KKPD selama H + 1 setelah transaksi dilakukan</li><li>BKAD harus melakukan Verifikasi belanja dan meneliti tagihan bank secara benar dan dianggap sah</li><li>Tagihan atas penggunaan KKPD akan ditagihkan oleh Bank saat akhir bulan</li><li>Pemda memiliki kewenangan untuk menentukan tujuan transfer atas pembayaran Tagihan KKPD, bisa langsung ke Bank atau ke rekening Bendahara, dan Bendahara yang membayarkan tagihan KKPD langsung ke Bank</li></ol>', '<p>Koordinasi dilakukan dengan baik, dan sambutan Bank atas penerimaan Tamu dari Pemda Asahan juga baik</p>', '1714642999_d2c3f17cde9bfc6e8b00.jpg', '1714642999_d7b9311e511cbb2cdf27.jpg', '1714642999_812d419f4047ef710dff.jpg', 0, '2024-05-02 16:42:07', '2024-05-02 16:43:19', NULL),
(8, 33, '-', '<p>Acara dibuka oleh Kepala KPPN Tanjungbalai dan sebagai Pemateri :</p><ol><li>Novita Putri (Kasi Manajemen Satker Kepatuhan Internal) KPPN Tanjungbalai</li><li>Siti Kartika (Fungsional asisten penyuluh pajak terampil) KPP Pratama Kisaran<br></li></ol>', '<p>Hal-hal yang disampaikan antara lain :</p><p>Pemateri : Novita Putri</p><ol><li>Penjelasan tentang proses penggunaan KKP untuk Satker dibawah KPPN Tanjungbalai</li><li>Pajak atas belanja yang dilakukan menjadi kewajiban rekanan</li><li>Penggunaan KKP sangat membantu dalam proses belanja kegiatan rutin, sehingga menghemat waktu</li><li>Mendorong seluruh satker di wilayah kerja KPPN Tanjungbalai segera mengaktifkan KPP dan segera menggunakan KKP tersebut untuk memperlancar kegiatan rutin kantor</li></ol><p>Pemateri : Siti Kartika</p><ol><li>Menjelaskan prosedur perpajakan atas transaksi yang dilakukan oleh Bendaharan dalam menggunakan dana APBN maupun APBD</li><li>Menjelaskan tarif per pasal atas pengenaan pajak negara</li><li>Mendorong penggunaan DJP Online dalam pembuatan pajak dan sinkronisasi Faktur Pajak oleh rekanan</li><li>Menyarankan untuk melakukan pembelian barang yang sudah memiliki PKP sehingga proses perpajakan dapat dideteksi dan menaikkan pendapatan pajak khusus diwilayah kerja KPP Pratama Kisaran</li><li>Mendorong seluruh bendahara diwilayah kerja KPP Kisaran untuk segera menggunakan Sertifikat Elektronik dan proses pembuatan dan pelaporan pajak ke negara</li></ol>', '<p>Kegiatan diskusi dilakukan dengan mengutarakan keluhan atau sharing knowledge terhadap beberapa masalah perpajakan yang terjadi di lapangan dan setelah selesai acara dilakukan penutupan.</p>', '1715069539_c368293c9557338054bd.jpg', '1715069539_fc3540f46c8d48ebdbb4.jpg', '1715069539_bc1187da833022dff79d.jpg', 1, '2024-05-07 15:09:59', '2024-05-15 11:15:15', NULL),
(9, 32, '-', '<p>Konsultasi diterima oleh Ibu OKTO ANAH dan Bapak AGUNG PRIYANTO, SE sebagai Analisis Keuangan Pusat dan Daerah Ahli Muda Selaku Subkoordinator Wilayah I pada Direktorat Pelaksana dan Pertanggungjawaban Keuangan Daerah Kementerian Dalam Negeri</p>', '<p>Hasil Koordinasi antara lain :</p><ol><li>Penatausahaan KKPD sudah bisa dilakukan pada SIPD Penatausahaan</li><li>Proses Langkah penatausahaan KKPD sudah tertuang dalam buku manual yang disertakan pada aplikasi SIPD Penatausahaan</li><li>Penginputan bukti pada Daftar Pengeluaran Rill adalah dengan menginputkan per rekening, tidak diperkenankan penginputan dilakukan di seluruh rekening belanja pada Sub Kegiatan</li><li>Bukti Transaksi adalah bukti Transfer atau bill pembayaran yang dikeluarkan dari aplikasi Mobile Banking KKPD atau EDC</li><li>Pembayaran sebaikannya dilakukan per rekening Belanja</li><li>Pemberlakukan biaya Charge (Tambahan biaya jasa pelayanan) tidak diperkenankan dalam penggunaan KKPD sehingga saat melakukan transaksi dengan KKPD harus dipastikan merchan tersebut tidak memberlakukan biaya charge dan sudah harus memiliki NPWP PKP (Pengusaha Kena Pajak)</li><li>Untuk Penggunaan KKPD pajak atas belanja tersebut sudah dibebankan kepada Merchan untuk pembayaran dan pelaporannya, sebagai bendahara pengeluaran sudah dibebaskan dari administrasi perpajakan.</li><li>Untuk jenis laporan masih dalam pengembangan, dalam waktu dekat akan segera di update pada SIPD Penatausahaan</li></ol>', '<p><br></p>', '1716888436_e2b618b759483ef9f57a.jpg', '1716888436_4cf5122723d70bf4fce1.jpg', '1716888436_27fb6d6894eb6dc72190.jpg', 1, '2024-05-15 23:21:58', '2024-05-28 18:11:43', NULL),
(10, 36, '-', '<p>Pejabat yang menerima perwakilan dari PT. Indako Trading Coy adalah Ibu NURSUSILA HASIBUAN</p>', '<p>Buku kepemilikian Kenderaan Bermotor (BPKB) Kenderaan Dinas atas nama BKAD Kabupaten Asahan sudah diberikan dengan keadaan baik, lengkap dan benar</p>', '<p>-</p>', '', '', '', 0, '2024-06-04 09:03:27', '2024-06-04 09:03:27', NULL),
(11, 38, '-', '<p>Konsultasi dilaksanakan diruangan rapat Bidang Anggaran dan Pertanggungjawaban, Dirjen Keuda Kementerian Dalam Negeri RI, bertemu dengan staf Bapak Agung.</p>', '<p>Berdasarkan Via Telpon dengan Bapak Agung hasil konsultasinya antara lain :</p><ol><li>Perubahan Keputusan Bupati terkait besaran nilai UP tidak dapat dilakukan sesuai ketentuan Permendagri 77,&nbsp; UP hanya dilakukan 1 kali dalam 1 tahun.</li><li>Selain perubahan Keputusan Bupati, saat ini aplikasi SIPD tidak mendukung perubahan besaran nilai UP Tunai</li><li>Yang diperbolehkan hanya merubah persentase UP KKPD dalam penggunaannya, namun tidak dapat merubah besaran UP Tunai</li><li>Jika terjadi kendala saat penggunaan KKPD di daerah, ini berkaitan erat dengan Bank Pengelolanya, sehingga perlu dilakukan Evaluasi dan koordinasi antara Pemerintah Daerah dengan Bank Pengelola KKPD dan/atau Bank yang mengeluarkan KKPD</li><li>Terkait tambahan/ Biaya Charge selama nilai itu bukan menjadi beban APBD maka diperbolehkan karena biaya charge dikenakan atas dasar kerjasama antara Rekanan/ Merchan dengan Bank, bukan dengan Pemerintah Daerah</li><li>Untuk Pajak atas belanja yang dilakukan, sepenuhnya dikelola oleh Rekanan/ Merchan dan/atau Bank Penerbit KKPD, sehingga Pemerintah Daerah hanya membayarkan secara nilai brutto yang tidak melebihi dari Standart Harga yang berlaku pada Pemerintah Daerah</li></ol>', '<p>-</p>', '1718896640_268bb3dc00c763652500.jpg', '1718896640_ae01288f6e6c2b2571ae.jpg', '1718896640_49182e389ffef58a9be3.jpg', 0, '2024-06-20 22:15:34', '2024-06-21 10:23:35', NULL),
(12, 39, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1718939013_d20eabeaaba60b799156.jpg', '1718939013_f9a934a82625ec6c8720.jpg', '', 0, '2024-06-21 09:58:32', '2024-06-21 10:03:33', NULL),
(13, 40, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1720193346_12c1193958f469129830.jpg', '1720193346_e5a44af995bb49b4d004.jpg', '1720193346_39fda7ff002b3b1d69ae.jpg', 0, '2024-07-05 21:54:35', '2024-07-05 22:29:06', NULL),
(14, 41, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1720193503_28ff97e6a6de7edb8367.jpg', '1720193503_6100498e6e99e940db25.jpg', '1720193503_8fb239fef8a5d064d6fc.jpg', 0, '2024-07-05 22:26:54', '2024-07-05 22:31:43', NULL),
(15, 46, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1721363063_f2169cdb8b72132dd73f.jpg', '1721363063_a53b7392f404c1334de4.jpg', '1721363063_871aeb20581b9c1f1b9a.jpg', 0, '2024-07-19 10:45:23', '2024-07-19 11:24:23', NULL),
(16, 48, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1721362316_c4f74770d864bbbee7f1.jpg', '1721362316_5d45180f4fcc548686b1.jpg', '1721362316_9b216d2bfb53f05e0498.jpg', 0, '2024-07-19 10:47:12', '2024-07-19 11:11:56', NULL),
(17, 47, '-', '<p>Konsultasi diterima oleh Kepala Bidang Perencanaan Anggaran Daerah yaitu Bapak Ahmad Syafei, SE</p>', '<p>Hasil Konsultasi antara lain :</p><ol><li>Dana Bantuan Keuangan Provinsi (BKP) Belum dapat dilakukan publish ke Daerah disebabkan kemungkinan terjadi refocusing anggaran, sehingga masih dalam proses pembahasan</li><li>Laporan Realisasi Tahun lalu dimungkinkan sebagai syarat salur untuk BKP Tahun Anggaran 2024</li><li>Diperkirakan SK Gubernur terkait penetapan dana BKP akan dipublish Provinsi ke Daerah sekitar minggu depan, jika sudah selesai di tahap pembahasan</li><li>Usulan-usulan dari Anggota DPRD akan dijadikan prioritas, yang dimungkinkan akan dipertahankan sehingga tidak menjadi komponen yang di refocusing</li><li>Kesulitan yang terjadi juga adanya kendala pada Aplikasi SIPD Penganggaran, sehingga ikut juga sebagai kendala memperlambat proses penerbitan SK Gubsu terkait dana BKP</li></ol>', '<p>-</p>', '1721364195_8ba4e1457c31c54c7c07.jpg', '', '', 0, '2024-07-19 11:42:43', '2024-07-19 11:43:15', NULL),
(18, 58, '-', '<p>Koordinasi diterima oleh Staf Konsultan IT SIPD PUSDATIN yaitu Bapak HADI</p>', '<p>Konsultasi dilaksanakan dengan mengutarakan kendala yang dihadapi saat penggunaan SIPD Penatausahaan, antara lain :</p><ol><li>Terjadinya Realisasi melebihi dari Pagu Anggaran sebesar 2 kali lipat pagu anggaran<ul><li>Solusi yang diberikan agar melakukan pengecekan kembali terhadap transaksi yang dianggap Double</li><li>Membuat Rekap Nomor TBP yang dianggap Double</li><li>Data akan di analisis oleh Tim Teknis Data SIPD, akan diselesaikan segera</li></ul></li><li>Untuk Rekening Penerimaan pada BKAD yang tidak masuk ke BKU<ul><li>Untuk Rekening penerimaan Khusus JKN memang tidak bisa masuk ke BKU Pemda, disebabkan itu transaksi diluar dari RKUD</li><li>Agar memilih rekening Penerimaan yang lain dengan menyesuaikan penerimaannya</li><li>Pilih Rekening Penerimaan lainnya yang sesuai untuk Transaksi Penerimaan tersebut</li><li>Selanjutnya agar berkoordinasi ke bagian Keuda untuk pemilihan rekening penerimaannya</li></ul></li><li>Masalah Buku Kas Umum Sekretariat Daerah yang tidak menampilkan pengembalian yang telah dilakukan Bendahara Pengeluaran Pembantu ke Bendahara Pengeluaran, sehingga saldo menjadi minus<ul><li>Permasalahan akan dianalisis oleh Tim Data SIPD, dan akan diselesaikan segera</li></ul></li><li>Masalah Buku Kas Umum Dinas Kesehatan&nbsp;</li></ol>', '<p>-</p>', '1727866782_7d6073e75b74a4df37bd.jpg', '1727866782_a208893c7ee3d805edc1.jpg', '1727866782_e8e33867c1413dcf061e.jpg', 0, '2024-10-02 16:49:36', '2024-10-02 19:29:13', NULL),
(19, 61, '1', '<p>Berdasarkan Hasil Koordinasi dan Konsultasi tersebut yang di terima oleh Ibu QONITA  staf bidang   IT dan Bapak AL MIZAN staf bidang kepersertaan dapat di ambil kesimpulan bahwa :<br>1. Dapat kami pergunakan  Aplikasi SimGaji Web karena dalam pengoperasiannya dapat di lakukan kapan saja dan di mana saja, tidak perlu di lakukan update data setiap ada edisi Aplikasi yang baru seperti Gaji THR, gaji ke- 13 dll. </p>', '<p>2. Rekonsiliasi Data PNSD dan PPPK Se Kab. Asahan terkait data keluarga sehingga data  valid.<br><br></p>', '<p>3. PT.Taspen akan selalu terbuka dengan segala permasalahan teknis berkaitan dengan  cara Mengimplentasikan SimGaji Web</p>', '1729745244_2bcbfa537f439807962b.jpeg', '1729745244_ceed29837e6a6dfd1968.jpeg', '1729745244_7736559dcd494e9427bd.jpeg', 0, '2024-10-24 11:37:19', '2024-11-18 18:13:17', NULL),
(20, 73, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1732257227_5e59e2d22c8a5db50c5e.jpg', '1732257227_c4bdc862e3d008e11dae.jpg', '1732257227_e441950bc3b99a30ad63.jpg', 0, '2024-11-22 13:32:37', '2024-11-22 13:33:47', NULL),
(21, 75, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1732261533_ddfbd647ae2bdac29485.jpg', '1732261533_cf171b175c2ada3ac985.jpg', '1732261533_edac2e65d37e611cb3cc.jpg', 0, '2024-11-22 14:41:38', '2024-11-22 14:45:33', NULL),
(22, 74, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1732261401_cd9faf0384cb21def23d.jpg', '', '', 0, '2024-11-22 14:42:53', '2024-11-22 14:43:21', NULL),
(23, 89, '-', '<p>-</p>', '<p>-</p>', '<p>-</p>', '1737202944_d1387dad02b625bbb1bb.jpg', '1737202944_ff54e1029e80117d4805.jpg', '1737202944_7fa6e35c3c3f8f4f01de.jpg', 0, '2025-01-18 19:20:49', '2025-01-18 19:22:24', NULL);

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
(27, 1, 'Medan'),
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
(1, 'Honor', '-', 0),
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
(17, 'Pembina Utama', 'IVe', 0.15),
(18, 'Honor', '-', 0);

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
(1, '196409041987031016', 'Drs. Sofian, M.Pd.', 'Kepala Badan Keuangan dan Aset Daerah', '1964-09-04', 4, 15, 2, '_default.png'),
(2, '197305071992032001', 'Sri Lusi Masdiany, S.I.P.', 'Sekretaris', '1973-05-07', 3, 14, 3, '_default.png'),
(3, '197604072009031002', 'Chairun Nasri Hutagaol, S.E.', 'Kabid Akuntansi & Pelaporan', '1976-04-07', 3, 13, 3, '_default.png'),
(4, '198302172002121004', 'Herdi Siagian, S.H.', 'Kabid Anggaran', '1983-02-17', 3, 12, 3, '_default.png'),
(5, '198004212009011002', 'M.Idris, S.Pdi', 'Kabid Aset', '1980-04-21', 3, 12, 3, '_default.png'),
(6, '197605132010011002', 'Ilham Ginting, S.E.,M.M.', 'Kabid Perbendaharaan', '1976-05-13', 3, 12, 3, '_default.png'),
(7, '196904241989032005', 'Nilawati, S.H', 'Perencana', '1969-04-24', 2, 12, 4, '_default.png'),
(8, '197210301993032004', 'Sumarmiati, S.E.', 'Kasubbid Perbendaharaan', '1972-10-30', 2, 12, 4, '_default.png'),
(9, '197902232000032002', 'Elvirawati,  S.E.', 'Kasubbid Akuntansi & Pelaporan Penerimaan', '1979-02-23', 2, 12, 4, '_default.png'),
(10, '196607191989032003', 'Rusmina, S.E.', 'Analis Keuangan Pusat & Daerah', '1966-07-19', 2, 12, 4, '_default.png'),
(11, '197807152009011004', 'Budi Syahriza, S.H.', 'Kasubbid Akuntansi & Pelaporan Pengeluaran', '1978-07-15', 2, 11, 4, '_default.png'),
(12, '197807222009032003', 'Dwi Priyayi Sugesti, S.E.', 'Kasubbid Pencatatan, Pelaporan & Analisa Keb. Barang Daerah', '1978-07-22', 2, 12, 4, '_default.png'),
(13, '196806011993032002', 'Vera Yuninda', 'Kasubbag Umum', '1968-06-01', 2, 12, 4, '_default.png'),
(14, '197604142009032002', 'Erna Komalasari, S.T.', 'Kasubbid Pemeliharaan & Penghapusan', '1976-04-14', 2, 12, 4, '_default.png'),
(15, '198309142005022001', 'Lusy Elidha, S.E.', 'Kasubbid Pengelolaan Kas', '1983-09-14', 2, 12, 4, '_default.png'),
(16, '198004132009011003', 'Afri Chandra Kirana, S.E.', 'Kasubbid Anggaran I', '1980-04-13', 2, 11, 4, '_default.png'),
(17, '198405182010012008', 'Kusuma Aprina Siagian, S.E.', 'Kasubbid Anggaran Ii', '1984-05-18', 2, 10, 4, '_default.png'),
(18, '198109022009012004', 'Kamis Riati', 'Pengevaluasi Pemanfaatan Barang Daerah', '1981-09-02', 1, 8, 5, '_default.png'),
(19, '197303262006041006', 'Irwan', 'Pengadministrasi Umum', '1973-03-26', 1, 7, 5, '_default.png'),
(20, '198112072009011004', 'Guslan Harahap, S.M.', 'Bendahara', '1981-12-07', 1, 7, 5, '_default.png'),
(21, '196806031992032004', 'Nurhamidah Siregar', 'Pengelola Laporan Keuangan', '1968-06-03', 1, 10, 4, '_default.png'),
(22, '197808142005022002', 'Rubiah', 'Pengolah Daftar Gaji', '1978-08-14', 1, 11, 4, '_default.png'),
(23, '198606082009032007', 'Nasiah, S.E.', 'Penyusun Rencana Kegiatan Dan Anggaran', '1986-06-08', 1, 12, 4, '_default.png'),
(24, '198404292010011002', 'Firmansyah Tarigan S', 'Pengadministrasi Anggaran', '1984-04-29', 1, 8, 5, '_default.png'),
(25, '197410282008012002', 'Rosdawaty, S.E.', 'Verifikator Keuangan', '1974-10-28', 1, 11, 4, '_default.png'),
(26, '197806052009012003', 'Yulita Elfika Siregar, S.E.', 'Analis Pengelolaan Sistem Informasi Perbendaharaan', '1978-06-05', 1, 12, 4, '_default.png'),
(27, '197210262008011001', 'Muh. Arfi', 'Pengadministrasi Keuangan', '1972-10-26', 1, 6, 5, '_default.png'),
(28, '196512301986022002', 'Maisarah', 'Pengolah Data Perbendaharaan', '1965-12-30', 1, 10, 4, '_default.png'),
(29, '197507212009012003', 'Nuraini, S.Sos', 'Analis Pelaporan Dan Transaksi Keuangan', '1975-07-21', 1, 12, 4, '_default.png'),
(30, '198309292011011013', 'Rahmad Saleh Sitorus, S.Kom', 'Pengelola Data Transaksi', '1983-09-29', 1, 10, 4, '1701709612_e8fe34a08e0be6103eb4.jpg'),
(31, '198010262009011002', 'Hendrik, S.M.', 'Pengadminitrasi Penerimaan', '1980-10-26', 1, 8, 5, '_default.png'),
(32, '197811012005022001', 'Herlin Tanujaya, S.E.', 'Pengevaluasi Pendapatan Dan Belanja', '1978-11-01', 1, 12, 4, '_default.png'),
(33, '198206262010012001', 'T. Dhani Vaulina', 'Pengevaluasi Pendapatan Dan Belanja', '1982-06-26', 1, 10, 4, '_default.png'),
(34, '197009122002122004', 'Rosmidawati, S.E.', 'Penata Laporan Keuangan', '1970-09-12', 1, 11, 4, '_default.png'),
(35, '198105062010011002', 'Irvan Syahputra, S.M.', 'Pengelola Akuntansi', '1981-05-06', 1, 9, 4, '_default.png'),
(36, '198102122009011004', 'Muhammad Syafri', 'Verifikator Keuangan', '1981-02-12', 1, 8, 5, '_default.png'),
(37, '196812061989032005', 'Heryanti, S.H.', 'Analis Aset Negara', '1968-12-06', 1, 12, 4, '_default.png'),
(38, '198805202022031001', 'Eddy Haris Siregar, S.E.', 'Penyusun Kebutuhan Barang Inventaris', '1988-05-20', 1, 9, 4, '_default.png'),
(39, '197903252008011002', 'Oman Surahman', 'Pranata Barang Dan Jasa', '1979-03-25', 1, 5, 5, '_default.png'),
(40, '-', 'M. Yusuf Butar Butar', 'Staf Bidang Perbendaharaan', '1987-03-23', 1, 1, 5, '_default.png'),
(41, '-', 'Tri Eva Yanti', 'Staf Bidang Anggaran', '0001-11-30', 1, 1, 5, '_default.png'),
(42, '-', 'Nani Susanti', 'Staf Sekretariat', '0001-11-30', 1, 1, 5, '_default.png'),
(43, '-', 'Moh. Arif Efendi', 'Staf Sekretariat', '0001-11-30', 1, 1, 5, '_default.png'),
(44, '-', 'Irma Yanti Butar-Butar', 'Staf Sekretariat', '0001-11-30', 1, 1, 5, '_default.png'),
(45, '-', 'Thivani Amanda Tanjung', 'Staf Sekretariat', '0001-11-30', 1, 1, 5, '_default.png'),
(46, '-', 'Dinda Khofifah, A.Md', 'Pengelola Database Bmd 2', '0001-11-30', 1, 1, 5, '_default.png'),
(47, '-', 'Tri Agung Anugerah', 'Pengelola Database Bmd 1', '0001-11-30', 1, 1, 5, '_default.png'),
(48, '-', 'M Hasan Asy\'ari', 'Supir', '0001-11-30', 1, 1, 5, '_default.png'),
(49, '-', 'Anggi Fandie Akhmad', 'Staf Bidang Anggaran', '1985-12-12', 1, 1, 5, '_default.png'),
(50, '-', 'Nurhayati', 'Petugas Pelaporan Dana Transfer', '1992-05-22', 1, 1, 5, '_default.png'),
(51, '-', 'Lisa Maya Sari', 'Staf Bidang Perbendaharaan', '1990-09-29', 1, 1, 5, '_default.png'),
(52, '-', 'Muhammad Sueb', 'Penjaga Malam', '0000-00-00', 1, 5, 5, '_default.png'),
(53, '-', 'Jupri Syahputra', 'Penjaga Malam', '0000-00-00', 1, 5, 5, '_default.png'),
(54, '-', 'Heru Wanto', 'Penjaga Malam', '0000-00-00', 1, 5, 5, '_default.png'),
(55, '-', 'Syaiful Bahri Sitorus', 'Penjaga Malam', '0000-00-00', 1, 5, 5, '_default.png'),
(56, '-', 'Santi Kartika Sari', 'Kebersihan', '0000-00-00', 1, 5, 5, '_default.png'),
(57, '-', 'Satina', 'Kebersihan', '0000-00-00', 1, 5, 5, '_default.png'),
(58, '-', 'Ikhwan', 'Supir', '0001-11-30', 1, 1, 5, '_default.png'),
(59, '197104241992031001', 'Rahmat Hidayat Siregar, S.Sos.,M.Si', 'Kepala Badan Keuangan Dan Aset Daerah', '1971-04-24', 4, 15, 2, '_default.png'),
(60, '-', 'Alfatah Ratta', 'Supir', '1998-11-02', 1, 1, 5, '_default.png');

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
(1, 'Kaban', 'Drs. SOFIAN, M.Pd', 'KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN', '196409041987031016', 'PEMBINA UTAMA MUDA', 0),
(2, 'Sekretaris', 'SRI LUSI MASDIANY,S.IP', 'SEKRETARIS', '197305071992032001', 'PEMBINA TK. I', 1),
(3, 'PLH', 'SRI LUSI MASDIANY, S.IP', 'PLH. KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN', '197305071992032001', 'PEMBINA TK. I', 1),
(4, 'Kaban', 'Rahmat Hidayat Siregar, S.Sos.,M.Si', 'Kepala Badan Keuangan dan Aset Kabupaten Asahan', '197104241992031001', 'Pembina Utama Muda', 1);

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
(19, 7, 30, 0),
(20, 8, 12, 1),
(21, 8, 38, 0),
(22, 8, 47, 0),
(23, 8, 46, 0),
(24, 8, 48, 0),
(25, 9, 5, 1),
(26, 9, 14, 0),
(27, 9, 38, 0),
(28, 9, 37, 0),
(29, 9, 48, 0),
(30, 10, 4, 1),
(31, 10, 24, 0),
(32, 11, 1, 1),
(33, 11, 58, 0),
(34, 12, 5, 1),
(35, 13, 1, 1),
(36, 13, 58, 0),
(37, 14, 4, 1),
(38, 14, 16, 0),
(39, 14, 17, 0),
(40, 14, 24, 0),
(41, 15, 29, 1),
(42, 15, 30, 0),
(43, 15, 31, 0),
(44, 16, 26, 1),
(45, 16, 51, 0),
(46, 17, 1, 1),
(47, 17, 58, 0),
(48, 18, 1, 1),
(49, 18, 58, 0),
(50, 19, 26, 1),
(51, 19, 25, 0),
(52, 20, 58, 1),
(53, 21, 8, 1),
(54, 21, 26, 0),
(55, 21, 27, 0),
(56, 22, 15, 1),
(57, 22, 31, 0),
(58, 23, 48, 1),
(59, 24, 38, 1),
(60, 25, 1, 1),
(61, 26, 6, 1),
(62, 26, 31, 0),
(66, 29, 31, 0),
(67, 29, 30, 0),
(68, 29, 29, 1),
(70, 30, 6, 1),
(71, 30, 30, 0),
(72, 30, 31, 0),
(73, 31, 6, 1),
(74, 31, 30, 0),
(76, 31, 31, 0),
(77, 32, 6, 1),
(78, 32, 30, 0),
(79, 33, 15, 1),
(80, 33, 30, 0),
(81, 34, 8, 1),
(82, 34, 26, 0),
(83, 35, 8, 0),
(85, 35, 2, 1),
(86, 35, 27, 0),
(87, 36, 7, 1),
(88, 36, 10, 0),
(89, 36, 40, 0),
(93, 38, 6, 1),
(94, 38, 30, 0),
(95, 39, 6, 1),
(96, 39, 30, 0),
(97, 39, 40, 0),
(98, 39, 31, 0),
(99, 40, 6, 1),
(100, 40, 30, 0),
(101, 41, 11, 1),
(103, 43, 15, 1),
(104, 43, 29, 0),
(105, 43, 50, 0),
(106, 44, 59, 1),
(107, 44, 60, 0),
(108, 45, 6, 1),
(109, 45, 15, 0),
(110, 45, 8, 0),
(111, 45, 26, 0),
(112, 45, 30, 0),
(113, 45, 31, 0),
(114, 45, 40, 0),
(115, 45, 10, 0),
(116, 46, 6, 1),
(117, 46, 30, 0),
(118, 47, 30, 1),
(119, 47, 31, 0),
(120, 48, 59, 1),
(121, 48, 6, 0),
(122, 48, 60, 0),
(123, 49, 27, 0),
(124, 49, 26, 1),
(128, 51, 26, 1),
(129, 51, 27, 0),
(131, 51, 25, 0),
(135, 53, 15, 1),
(136, 53, 29, 0),
(137, 53, 30, 0),
(138, 53, 31, 0),
(139, 54, 8, 1),
(140, 54, 51, 0),
(141, 54, 27, 0),
(142, 55, 59, 1),
(143, 56, 2, 1),
(144, 56, 26, 0),
(145, 56, 25, 0),
(146, 56, 40, 0),
(149, 58, 6, 1),
(150, 58, 30, 0),
(151, 59, 26, 0),
(153, 59, 25, 0),
(154, 59, 8, 1),
(155, 59, 27, 0),
(156, 60, 6, 1),
(157, 60, 15, 0),
(158, 60, 30, 0),
(159, 61, 6, 1),
(160, 61, 8, 0),
(161, 61, 26, 0),
(162, 61, 51, 0),
(164, 62, 15, 1),
(165, 62, 30, 0),
(166, 62, 31, 0),
(167, 62, 29, 0),
(168, 63, 15, 1),
(169, 63, 30, 0),
(170, 63, 31, 0),
(171, 63, 29, 0),
(172, 64, 15, 1),
(173, 64, 30, 0),
(174, 64, 31, 0),
(175, 64, 29, 0),
(176, 65, 15, 1),
(177, 65, 30, 0),
(178, 65, 31, 0),
(179, 65, 29, 0),
(180, 66, 15, 1),
(181, 66, 31, 0),
(182, 66, 29, 0),
(183, 67, 15, 1),
(184, 67, 29, 0),
(185, 67, 30, 0),
(186, 67, 31, 0),
(187, 68, 6, 1),
(188, 69, 6, 1),
(189, 69, 8, 0),
(190, 69, 25, 0),
(191, 69, 27, 0),
(193, 70, 59, 1),
(194, 70, 60, 0),
(195, 71, 6, 1),
(196, 71, 8, 0),
(197, 71, 15, 0),
(198, 72, 2, 1),
(199, 73, 6, 1),
(200, 73, 30, 0),
(201, 74, 6, 1),
(202, 74, 30, 0),
(203, 74, 31, 0),
(204, 74, 40, 0),
(205, 75, 6, 1),
(206, 75, 15, 0),
(207, 75, 31, 0),
(208, 75, 30, 0),
(209, 76, 59, 1),
(210, 76, 60, 0),
(211, 77, 59, 1),
(212, 77, 60, 0),
(213, 78, 15, 1),
(214, 78, 29, 0),
(215, 79, 59, 1),
(216, 80, 6, 1),
(217, 80, 30, 0),
(218, 79, 60, 0),
(219, 81, 6, 1),
(220, 81, 26, 0),
(221, 81, 25, 0),
(222, 81, 40, 0),
(225, 82, 27, 0),
(226, 82, 51, 0),
(227, 82, 40, 0),
(228, 83, 8, 1),
(229, 83, 26, 0),
(230, 83, 27, 0),
(231, 83, 51, 0),
(232, 82, 26, 1),
(233, 84, 6, 1),
(234, 84, 26, 0),
(235, 84, 25, 0),
(236, 84, 40, 0),
(238, 85, 29, 1),
(239, 85, 30, 0),
(240, 85, 31, 0),
(241, 86, 6, 1),
(242, 86, 29, 0),
(243, 86, 30, 0),
(244, 86, 31, 0),
(245, 87, 15, 1),
(246, 87, 30, 0),
(247, 87, 31, 0),
(248, 87, 29, 0),
(249, 88, 6, 1),
(250, 88, 15, 0),
(251, 88, 30, 0),
(252, 88, 31, 0),
(253, 89, 6, 1),
(254, 89, 30, 0),
(256, 90, 8, 1),
(257, 90, 26, 0),
(258, 90, 25, 0),
(259, 90, 51, 0),
(260, 91, 6, 1),
(261, 91, 30, 0),
(262, 91, 27, 0),
(263, 91, 40, 0),
(264, 93, 26, 1),
(266, 93, 27, 0),
(267, 93, 25, 0),
(268, 94, 26, 1),
(272, 94, 27, 0),
(273, 94, 25, 0),
(274, 94, 51, 0),
(275, 95, 6, 1),
(276, 95, 26, 0),
(277, 95, 25, 0),
(278, 95, 27, 0),
(279, 96, 15, 0),
(281, 96, 30, 0),
(283, 96, 31, 0),
(285, 96, 6, 1),
(286, 98, 59, 1),
(287, 98, 60, 0),
(288, 99, 59, 1),
(289, 99, 60, 0),
(290, 98, 19, 0),
(291, 100, 59, 1),
(292, 100, 60, 0),
(293, 101, 6, 1),
(294, 101, 30, 0),
(295, 101, 15, 0),
(296, 101, 31, 0),
(297, 102, 6, 1),
(298, 102, 15, 0),
(299, 102, 30, 0),
(300, 102, 31, 0);

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
(2, 1, 33, 'SUMATERA UTARA', 4960000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
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
(39, 1, 1, 'KAB. BATUBARA', 750000, 370000, 110000, 130000, 95000, 130000, 200000, 250000, 0),
(40, 1, 2, 'KAB. DAIRI', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(41, 1, 3, 'KAB. DELI SERDANG', 1000000, 370000, 110000, 130000, 95000, 130000, 300000, 250000, 0),
(42, 1, 4, 'KAB. HUMBANG HASUNDUTAN', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(43, 1, 5, 'KAB. KARO', 2700000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(44, 1, 6, 'KAB. LABUHAN BATU', 1000000, 370000, 110000, 130000, 95000, 130000, 250000, 250000, 0),
(45, 1, 7, 'KAB. LABUHAN BATU SELATAN', 1000000, 370000, 110000, 130000, 95000, 130000, 250000, 250000, 0),
(46, 1, 8, 'KAB. LABUHAN BATU UTARA', 750000, 370000, 110000, 130000, 95000, 130000, 200000, 250000, 0),
(47, 1, 9, 'KAB. LANGKAT', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(48, 1, 10, 'KAB. MANDAILING NATAL', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(49, 1, 11, 'KAB. NIAS', 1000000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
(50, 1, 12, 'KAB. NIAS BARAT', 1000000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
(51, 1, 13, 'KAB. NIAS SELATAN', 1000000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
(52, 1, 14, 'KAB. NIAS UTARA', 1000000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
(53, 1, 15, 'KAB. PADANG LAWAS', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(54, 1, 16, 'KAB. PADANG LAWAS UTARA', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(55, 1, 17, 'KAB. PAKPAK BARAT', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(56, 1, 18, 'KAB. SAMOSIR', 2700000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(57, 1, 19, 'KAB. SERDANG BEDAGAI', 1000000, 370000, 110000, 130000, 95000, 130000, 300000, 250000, 0),
(58, 1, 20, 'KAB. SIMALUNGUN', 2700000, 370000, 110000, 130000, 95000, 130000, 300000, 250000, 0),
(59, 1, 21, 'KAB. TAPANULI SELATAN', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(60, 1, 22, 'KAB. TAPANULI TENGAH', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(61, 1, 23, 'KAB. TAPANULI UTARA', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(62, 1, 24, 'KAB. TOBA SAMOSIR', 2700000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(63, 1, 25, 'KOTA BINJAI', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(64, 1, 26, 'KOTA GUNUNG SITOLI', 1000000, 370000, 110000, 130000, 95000, 130000, 0, 250000, 0),
(65, 1, 27, 'KOTA MEDAN', 4960000, 370000, 110000, 130000, 95000, 130000, 300000, 250000, 0),
(66, 1, 28, 'KOTA PADANGSIDIMPUAN', 1000000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(67, 1, 29, 'KOTA PEMATANG SIANTAR', 2700000, 370000, 110000, 130000, 95000, 130000, 200000, 250000, 0),
(68, 1, 30, 'KOTA SIBOLGA', 2700000, 370000, 110000, 130000, 95000, 130000, 400000, 250000, 0),
(69, 1, 31, 'KOTA TANJUNG BALAI', 750000, 370000, 110000, 130000, 95000, 130000, 150000, 250000, 0),
(70, 1, 32, 'KOTA TEBING TINGGI', 1000000, 370000, 110000, 130000, 95000, 130000, 300000, 250000, 0),
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
(95, 2, 33, 'SUMATERA UTARA', 2195000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
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
(132, 2, 1, 'KAB. BATUBARA', 700000, 370000, 110000, 130000, 95000, 130000, 200000, 150000, 0),
(133, 2, 2, 'KAB. DAIRI', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(134, 2, 3, 'KAB. DELI SERDANG', 900000, 370000, 110000, 130000, 95000, 130000, 300000, 150000, 0),
(135, 2, 4, 'KAB. HUMBANG HASUNDUTAN', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(136, 2, 5, 'KAB. KARO', 1500000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(137, 2, 6, 'KAB. LABUHAN BATU', 900000, 370000, 110000, 130000, 95000, 130000, 250000, 150000, 0),
(138, 2, 7, 'KAB. LABUHAN BATU SELATAN', 900000, 370000, 110000, 130000, 95000, 130000, 250000, 150000, 0),
(139, 2, 8, 'KAB. LABUHAN BATU UTARA', 700000, 370000, 110000, 130000, 95000, 130000, 200000, 150000, 0),
(140, 2, 9, 'KAB. LANGKAT', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(141, 2, 10, 'KAB. MANDAILING NATAL', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(142, 2, 11, 'KAB. NIAS', 900000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
(143, 2, 12, 'KAB. NIAS BARAT', 900000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
(144, 2, 13, 'KAB. NIAS SELATAN', 900000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
(145, 2, 14, 'KAB. NIAS UTARA', 900000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
(146, 2, 15, 'KAB. PADANG LAWAS', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(147, 2, 16, 'KAB. PADANG LAWAS UTARA', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(148, 2, 17, 'KAB. PAKPAK BARAT', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(149, 2, 18, 'KAB. SAMOSIR', 1500000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(150, 2, 19, 'KAB. SERDANG BEDAGAI', 900000, 370000, 110000, 130000, 95000, 130000, 300000, 150000, 0),
(151, 2, 20, 'KAB. SIMALUNGUN', 1500000, 370000, 110000, 130000, 95000, 130000, 300000, 150000, 0),
(152, 2, 21, 'KAB. TAPANULI SELATAN', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(153, 2, 22, 'KAB. TAPANULI TENGAH', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(154, 2, 23, 'KAB. TAPANULI UTARA', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(155, 2, 24, 'KAB. TOBA SAMOSIR', 1500000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(156, 2, 25, 'KOTA BINJAI', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(157, 2, 26, 'KOTA GUNUNG SITOLI', 900000, 370000, 110000, 130000, 95000, 130000, 0, 150000, 0),
(158, 2, 27, 'KOTA MEDAN', 2195000, 370000, 110000, 130000, 95000, 130000, 300000, 150000, 0),
(159, 2, 28, 'KOTA PADANGSIDIMPUAN', 900000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(160, 2, 29, 'KOTA PEMATANG SIANTAR', 1500000, 370000, 110000, 130000, 95000, 130000, 200000, 150000, 0),
(161, 2, 30, 'KOTA SIBOLGA', 1500000, 370000, 110000, 130000, 95000, 130000, 400000, 150000, 0),
(162, 2, 31, 'KOTA TANJUNG BALAI', 700000, 370000, 110000, 130000, 95000, 130000, 150000, 150000, 0),
(163, 2, 32, 'KOTA TEBING TINGGI', 900000, 370000, 110000, 130000, 95000, 130000, 300000, 150000, 0),
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
(188, 3, 33, 'SUMATERA UTARA', 1100000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
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
(225, 3, 1, 'KAB. BATUBARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(226, 3, 2, 'KAB. DAIRI', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(227, 3, 3, 'KAB. DELI SERDANG', 750000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(228, 3, 4, 'KAB. HUMBANG HASUNDUTAN', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(229, 3, 5, 'KAB. KARO', 1064000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(230, 3, 6, 'KAB. LABUHAN BATU', 750000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(231, 3, 7, 'KAB. LABUHAN BATU SELATAN', 750000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(232, 3, 8, 'KAB. LABUHAN BATU UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(233, 3, 9, 'KAB. LANGKAT', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(234, 3, 10, 'KAB. MANDAILING NATAL', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(235, 3, 11, 'KAB. NIAS', 750000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(236, 3, 12, 'KAB. NIAS BARAT', 750000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(237, 3, 13, 'KAB. NIAS SELATAN', 750000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(238, 3, 14, 'KAB. NIAS UTARA', 750000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(239, 3, 15, 'KAB. PADANG LAWAS', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(240, 3, 16, 'KAB. PADANG LAWAS UTARA', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(241, 3, 17, 'KAB. PAKPAK BARAT', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(242, 3, 18, 'KAB. SAMOSIR', 1064000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(243, 3, 19, 'KAB. SERDANG BEDAGAI', 750000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(244, 3, 20, 'KAB. SIMALUNGUN', 1064000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(245, 3, 21, 'KAB. TAPANULI SELATAN', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(246, 3, 22, 'KAB. TAPANULI TENGAH', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(247, 3, 23, 'KAB. TAPANULI UTARA', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(248, 3, 24, 'KAB. TOBA SAMOSIR', 1064000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(249, 3, 25, 'KOTA BINJAI', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(250, 3, 26, 'KOTA GUNUNG SITOLI', 750000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(251, 3, 27, 'KOTA MEDAN', 1100000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(252, 3, 28, 'KOTA PADANGSIDIMPUAN', 750000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(253, 3, 29, 'KOTA PEMATANG SIANTAR', 1064000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(254, 3, 30, 'KOTA SIBOLGA', 1064000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(255, 3, 31, 'KOTA TANJUNG BALAI', 500000, 370000, 110000, 130000, 95000, 130000, 150000, 0, 0),
(256, 3, 32, 'KOTA TEBING TINGGI', 750000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
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
(281, 4, 33, 'SUMATERA UTARA', 699000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
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
(318, 4, 1, 'KAB. BATUBARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(319, 4, 2, 'KAB. DAIRI', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(320, 4, 3, 'KAB. DELI SERDANG', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(321, 4, 4, 'KAB. HUMBANG HASUNDUTAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(322, 4, 5, 'KAB. KARO', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(323, 4, 6, 'KAB. LABUHAN BATU', 500000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(324, 4, 7, 'KAB. LABUHAN BATU SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(325, 4, 8, 'KAB. LABUHAN BATU UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(326, 4, 9, 'KAB. LANGKAT', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(327, 4, 10, 'KAB. MANDAILING NATAL', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(328, 4, 11, 'KAB. NIAS', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(329, 4, 12, 'KAB. NIAS BARAT', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(330, 4, 13, 'KAB. NIAS SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(331, 4, 14, 'KAB. NIAS UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(332, 4, 15, 'KAB. PADANG LAWAS', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(333, 4, 16, 'KAB. PADANG LAWAS UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(334, 4, 17, 'KAB. PAKPAK BARAT', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(335, 4, 18, 'KAB. SAMOSIR', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(336, 4, 19, 'KAB. SERDANG BEDAGAI', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(337, 4, 20, 'KAB. SIMALUNGUN', 530000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(338, 4, 21, 'KAB. TAPANULI SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(339, 4, 22, 'KAB. TAPANULI TENGAH', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(340, 4, 23, 'KAB. TAPANULI UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(341, 4, 24, 'KAB. TOBA SAMOSIR', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(342, 4, 25, 'KOTA BINJAI', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(343, 4, 26, 'KOTA GUNUNG SITOLI', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(344, 4, 27, 'KOTA MEDAN', 699000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(345, 4, 28, 'KOTA PADANGSIDIMPUAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(346, 4, 29, 'KOTA PEMATANG SIANTAR', 530000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(347, 4, 30, 'KOTA SIBOLGA', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(348, 4, 31, 'KOTA TANJUNG BALAI', 500000, 370000, 110000, 130000, 95000, 130000, 150000, 0, 0),
(349, 4, 32, 'KOTA TEBING TINGGI', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
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
(374, 5, 33, 'SUMATERA UTARA', 699000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
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
(411, 5, 1, 'KAB. BATUBARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(412, 5, 2, 'KAB. DAIRI', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(413, 5, 3, 'KAB. DELI SERDANG', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(414, 5, 4, 'KAB. HUMBANG HASUNDUTAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(415, 5, 5, 'KAB. KARO', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(416, 5, 6, 'KAB. LABUHAN BATU', 500000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(417, 5, 7, 'KAB. LABUHAN BATU SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 250000, 0, 0),
(418, 5, 8, 'KAB. LABUHAN BATU UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(419, 5, 9, 'KAB. LANGKAT', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(420, 5, 10, 'KAB. MANDAILING NATAL', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(421, 5, 11, 'KAB. NIAS', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(422, 5, 12, 'KAB. NIAS BARAT', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(423, 5, 13, 'KAB. NIAS SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(424, 5, 14, 'KAB. NIAS UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(425, 5, 15, 'KAB. PADANG LAWAS', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(426, 5, 16, 'KAB. PADANG LAWAS UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(427, 5, 17, 'KAB. PAKPAK BARAT', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(428, 5, 18, 'KAB. SAMOSIR', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(429, 5, 19, 'KAB. SERDANG BEDAGAI', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(430, 5, 20, 'KAB. SIMALUNGUN', 530000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(431, 5, 21, 'KAB. TAPANULI SELATAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(432, 5, 22, 'KAB. TAPANULI TENGAH', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(433, 5, 23, 'KAB. TAPANULI UTARA', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(434, 5, 24, 'KAB. TOBA SAMOSIR', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(435, 5, 25, 'KOTA BINJAI', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(436, 5, 26, 'KOTA GUNUNG SITOLI', 500000, 370000, 110000, 130000, 95000, 130000, 0, 0, 0),
(437, 5, 27, 'KOTA MEDAN', 699000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
(438, 5, 28, 'KOTA PADANGSIDIMPUAN', 500000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(439, 5, 29, 'KOTA PEMATANG SIANTAR', 530000, 370000, 110000, 130000, 95000, 130000, 200000, 0, 0),
(440, 5, 30, 'KOTA SIBOLGA', 530000, 370000, 110000, 130000, 95000, 130000, 400000, 0, 0),
(441, 5, 31, 'KOTA TANJUNG BALAI', 500000, 370000, 110000, 130000, 95000, 130000, 150000, 0, 0),
(442, 5, 32, 'KOTA TEBING TINGGI', 500000, 370000, 110000, 130000, 95000, 130000, 300000, 0, 0),
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
(20, 2, 24, 'false', 'false', 'false', 'false'),
(21, 2, 17, 'false', 'false', 'false', 'false'),
(22, 2, 25, 'false', 'false', 'false', 'false'),
(24, 3, 9, 'false', 'false', 'false', 'false'),
(25, 3, 12, 'false', 'false', 'false', 'false'),
(26, 3, 19, 'false', 'false', 'false', 'false'),
(27, 3, 25, 'false', 'false', 'false', 'false'),
(28, 6, 4, 'false', 'false', 'false', 'false'),
(29, 6, 5, 'false', 'false', 'false', 'false'),
(30, 6, 25, 'false', 'false', 'false', 'false'),
(32, 6, 10, 'false', 'false', 'false', 'false');

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
(4, 14, 'G7 Grand Hotel', 'Kemayoran Jakarta', '701', 'Room Charge', '2024-02-26', '2024-02-29', 3, 950000, 2850000, 1, '1709615233_594b1b502ba08388e609.pdf', '2024-03-05 12:06:18', '2024-03-06 10:24:06', NULL),
(5, 15, 'G7 Grand Hotel', 'Kemayoran - Jakarta', '517', 'Room Charge', '2024-02-26', '2024-02-29', 3, 730000, 2190000, 0, '1709625880_b0991ec95942e5438e28.pdf', '2024-03-05 15:01:47', '2024-03-19 00:00:49', NULL),
(6, 70, 'Tarif Hotel 30%', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2024-04-24', '2024-04-25', 1, 1100000, 330000, 1, '', '2024-05-02 17:00:22', '2024-05-02 17:00:22', NULL),
(7, 71, 'Tarif Hotel 30%', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2024-04-24', '2024-04-25', 1, 699000, 209700, 1, '', '2024-05-02 17:05:00', '2024-05-02 17:05:00', NULL),
(8, 72, 'Tarif Hotel 30%', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '2024-04-24', '2024-04-25', 1, 699000, 209700, 1, '', '2024-05-02 17:05:24', '2024-05-02 17:05:24', NULL),
(9, 78, 'G7 Grand Hotel', 'Jakarta', '707', 'Room Change', '2024-05-13', '2024-05-16', 3, 730000, 2190000, 1, '1715790316_e5e4b77cf8f60fa2007b.pdf', '2024-05-15 23:07:48', '2024-05-28 18:10:43', NULL),
(10, 77, 'G7 Grand Hotel', 'Jakarta', '609', 'Room Charge', '2024-05-13', '2024-05-16', 3, 950000, 2850000, 1, '1715790288_6ba523e9e242ca5c42ee.pdf', '2024-05-15 23:19:37', '2024-05-28 18:08:51', NULL),
(11, 93, 'Grand G7 Hotel Kemay', 'Kemayoran Jakarta', 'M3', 'Room Charge', '2024-06-06', '2024-06-08', 2, 950000, 1900000, 0, '1718895184_806afb6ae12e57b920f2.pdf', '2024-06-20 21:52:45', '2024-06-20 21:53:04', NULL),
(12, 94, 'Grand G7 Hotel Kemay', 'Kemayoran Jakarta', '502', 'Room Charge', '2024-06-06', '2024-06-08', 2, 730000, 1460000, 0, '1718895738_2fa2561d2bf69fc97fa2.pdf', '2024-06-20 22:02:05', '2024-06-20 22:02:18', NULL),
(13, 99, 'Grand G7 Hotel', 'Kemayoran - Jakarta', 'M2', 'Deluxe Room', '2024-06-26', '2024-06-27', 1, 950000, 950000, 1, '1721613510_3d57860ce54b4b58b1e9.pdf', '2024-07-05 21:14:59', '2024-07-22 08:59:07', NULL),
(14, 100, 'Grand G7 Hotel', 'Kemayoran-Jakarta', '319', 'Standart Room', '2024-06-26', '2024-06-27', 1, 730000, 730000, 1, '1720189759_07099caaaf5a3429630c.pdf', '2024-07-05 21:22:47', '2024-07-22 09:02:58', NULL),
(15, 101, 'Grand G7 Hotel', 'Kemayoran - Jakarta', '419', 'Stndart Room', '2024-06-26', '2024-06-27', 1, 730000, 730000, 1, '1721614112_e9f04f6b4edbc35f4566.pdf', '2024-07-05 21:49:33', '2024-07-22 09:09:45', NULL),
(16, 117, 'Grand G7 Hotel', 'Kemayoran Jakarta', '611', 'Standart', '2024-07-14', '2024-07-16', 2, 730000, 1460000, 0, '1721363618_5825b53bcf552bc320b3.pdf', '2024-07-19 11:27:37', '2024-07-19 11:33:38', NULL),
(17, 116, 'Grand G7 Hotel', 'Kemayoran Jakarta', '607', 'Deluxe', '2024-07-14', '2024-07-16', 2, 950000, 1900000, 0, '1721364519_245e9f300b01c328b994.pdf', '2024-07-19 11:47:52', '2024-07-19 11:48:39', NULL),
(18, 150, 'GRAND G7 HOTEL', 'Kemayoran', '806', 'Standart Room', '2024-09-26', '2024-09-28', 2, 730000, 1460000, 0, '1727842249_6727f85b90759a694dcc.pdf', '2024-10-02 11:10:19', '2024-10-02 11:10:49', NULL),
(19, 149, 'GRAND G7 HOTEL', 'KEMAYORAN', '810', 'DELUXE ROOM', '2024-09-26', '2024-09-28', 2, 950000, 1900000, 0, '1727843366_3d8339b84ec7521ed92d.pdf', '2024-10-02 11:26:28', '2024-10-02 11:29:26', NULL),
(20, 199, 'Grand Whiz Poins Sim', 'Jakarta', '2568', 'Room Packege', '2024-11-12', '2024-11-14', 2, 950000, 1900000, 0, '1732256290_609389630d99bd76c7ed.pdf', '2024-11-22 13:17:09', '2024-11-22 13:18:10', NULL),
(21, 200, 'Grand Whiz Poins Sim', 'Jakarta', '2368', 'Room Package', '2024-11-12', '2024-11-14', 2, 730000, 1460000, 0, '1732256923_1cca4a85fd07a5544398.pdf', '2024-11-22 13:28:30', '2024-11-22 13:28:43', NULL);

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
(3, 15, 'Berangkat', 'Citilink', '-', 'ZH868D', '2024-02-26', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1393502, 1, '1709537524_7718c5bc53683a6ee9a4.jpg', '1709537524_3be2198ca8d8fc92823c.pdf', '2024-03-04 14:14:32', '2024-03-06 10:27:17', NULL),
(4, 15, 'Kembali', 'Super Air Jet', '9902195227867', 'YPINQQ', '2024-02-29', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1477681, 1, '1709539050_3cbe5117bbb7e6ccf2e7.jpg', '1709539050_817caffa205d9bce3d71.pdf', '2024-03-04 14:48:06', '2024-03-06 10:27:05', NULL),
(5, 14, 'Berangkat', 'Citilink', '-', 'ZH868D', '2024-02-26', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1393502, 1, '1709539382_6d2050c6e4c47b657645.jpg', '1709539382_8dcc978c48b2f1813ce1.pdf', '2024-03-04 15:02:39', '2024-03-06 10:25:00', NULL),
(6, 19, 'Berangkat', 'Citilink', '-', 'E9MD5V', '2024-01-11', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1999559, 1, '1709608689_7ae5e316d44f799b47ba.jpg', '1709608689_228233ac10e783338f2c.pdf', '2024-03-05 10:17:10', '2024-03-05 10:40:11', NULL),
(7, 19, 'Kembali', 'Citilink', '-', 'TGFT8T', '2024-01-14', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1370000, 1, '1709608874_4e33f3089978d3b386cb.jpg', '1709608874_efa01e0b8857cb8942ad.pdf', '2024-03-05 10:20:12', '2024-03-05 10:40:03', NULL),
(8, 18, 'Berangkat', 'Citilink', '-', 'E9MD5V', '2024-01-11', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1999559, 1, '1709609250_22a1a2639b419a5133aa.jpg', '1709609250_af9f1aeebf0e914e315d.pdf', '2024-03-05 10:26:53', '2024-03-05 10:38:19', NULL),
(9, 18, 'Kembali', 'Citilink', '-', 'TGFT8T', '2024-01-14', 'Bandara Soekarno Hatta', 'Bandara Kualanamu', 1370000, 1, '1709609388_43025b3a74d898ebe9c3.jpg', '1709609388_5a36fe15b606c353959f.pdf', '2024-03-05 10:29:03', '2024-03-05 10:37:59', NULL),
(10, 14, 'Kembali', 'Batik Air', '9902195349328', 'HEMIDP', '2024-03-03', 'Bandara Halim Perdanakusu', 'Bandara Kualanamu', 1831259, 1, '1709623750_4c6d327aee6b78c011f9.jpg', '1709623750_2ccaff974b9867fb30e7.pdf', '2024-03-05 14:28:23', '2024-03-06 10:24:30', NULL),
(11, 78, 'Berangkat', 'Citilink', '-', 'GDN9KM', '2024-05-13', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1600000, 1, '1716893999_571c4fc972b04594577f.jpg', '1716893999_8872f4419e70f6759cfa.pdf', '2024-05-15 23:16:17', '2024-05-28 18:11:19', NULL),
(12, 77, 'Berangkat', 'Citilink', '-', 'GDN9KM', '2024-05-13', 'Bandara Kualanamu', 'Bandara Soekarno Hatta', 1600000, 1, '1716889803_fa6a85795547e16cdbc8.jpg', '1716889803_22fbff04b7dfbf9c78f3.pdf', '2024-05-15 23:21:09', '2024-05-28 18:09:35', NULL),
(13, 77, 'Kembali', 'CITILINK', '-', 'EHSEFN', '2024-05-20', 'Soekarno Hatta', 'Kualanamu', 2140000, 1, '1716890502_3eb5050533d3a49eab5c.jpg', '1716890502_7c299b369e677c4edfcb.pdf', '2024-05-28 17:01:04', '2024-05-28 18:09:12', NULL),
(14, 78, 'Kembali', 'Super Air Jet', '9902136181516', 'KMGGNT', '2024-05-16', 'Soekarno Hatta', 'Kualanamu', 1640000, 1, '1716894373_3781b005e1a7955227a9.jpg', '1716894373_b9679ce1bdc173f6c92d.pdf', '2024-05-28 18:02:24', '2024-05-28 18:11:01', NULL),
(15, 93, 'Berangkat', 'Citilink', '-', 'MFJKGW', '2024-06-06', 'Kuala Namu - Medan', 'Soekarno Hatta - Jakarta', 1510000, 0, '1718895862_11a0de1bd36bfb1ac8cb.jpg', '1718895862_ce15b71b42edb0f53b2a.pdf', '2024-06-20 21:55:21', '2024-06-20 22:04:22', NULL),
(16, 94, 'Berangkat', 'Citilink', '-', 'MFJKGW', '2024-06-06', 'Kuala Namu - Medan', 'Soekarno Hatta - Jakarta', 1510000, 0, '1718896014_db90082e7d3f03ca5543.jpg', '1718896014_cfc17e6ad5b0682e9e7a.pdf', '2024-06-20 22:06:32', '2024-06-20 22:06:54', NULL),
(17, 93, 'Kembali', 'Citilink', '-', 'QDQTYP', '2024-06-09', 'Soekarno Hatta - Jakarta', 'Kuala Namu - Medan', 1540000, 0, '1718968087_6ecf575a8dfe6c83a9ed.jpg', '1718968087_de6c47c9f79fd16c4740.pdf', '2024-06-20 22:10:49', '2024-06-21 18:08:07', NULL),
(18, 94, 'Kembali', 'Citilink', '-', 'ZFNCMZ', '2024-06-08', 'Soekarno Hatta - Jakarta', 'Kuala Namu - Medan', 1625000, 0, '1718896448_97a83b8d607d5427f596.jpg', '1718896448_3cb3450695138c96dc32.pdf', '2024-06-20 22:11:43', '2024-06-20 22:14:08', NULL),
(19, 99, 'Berangkat', 'Citilink', '-', 'OHH4PD', '2024-06-24', 'Kuala Namu - Medan', 'Soekarno Hatta - Jakarta', 1835000, 1, '1720189517_f29638334ed5dcbb871f.jpg', '1720189517_44917b23f401d18c1f00.pdf', '2024-07-05 21:20:27', '2024-07-22 08:59:42', NULL),
(20, 99, 'Kembali', 'Citilink', '-', 'NEN27J', '2024-06-29', 'Soekarno Hatta - Jakarta', 'Kuala Namu - Medan', 1980000, 1, '1720434905_c51dad378a8cdbb12548.jpg', '1720434905_6ebdac5e5b4c0e0e17c6.pdf', '2024-07-05 21:27:59', '2024-07-22 08:59:21', NULL),
(21, 100, 'Berangkat', 'Citilink', '-', 'OHH4PD', '2024-06-24', 'Kuala Namu - Medan', 'Soekarno - Hatta Jakarta', 1835000, 1, '1720190304_138ed4906c17dbff9018.jpg', '1720190304_c26ce1bf7f5d2a3d8f11.pdf', '2024-07-05 21:31:25', '2024-07-22 09:03:28', NULL),
(22, 100, 'Kembali', 'Super Air Jet', '9902140017934', 'NSVDRJ', '2024-06-27', 'Soekarno Hatta', 'Kuala Namu', 1640000, 1, '1720190686_ca2c650aeafceb571f83.jpg', '1720190686_13e26cc7f939269c8586.pdf', '2024-07-05 21:40:15', '2024-07-22 09:03:08', NULL),
(23, 101, 'Berangkat', 'Citilink', '-', 'OHH4PD', '2024-06-24', 'Kuala Namu', 'Soekarno Hatta', 1835000, 1, '1720191311_b57674e816839643aaa8.jpg', '1720191311_c56e8ba1f0979925fd1e.pdf', '2024-07-05 21:53:08', '2024-07-22 09:09:58', NULL),
(24, 101, 'Kembali', 'Super Air Jet', '9902140017935', 'NSVDRJ', '2024-06-27', 'Soekarno Hatta', 'Kuala Namu', 1640000, 1, '1720191516_f89577e9d332458a3fa0.jpg', '1720191516_311c13080905b4e8e25d.pdf', '2024-07-05 21:56:54', '2024-07-22 09:09:51', NULL),
(25, 116, 'Berangkat', 'Citilink', '-', 'K9Z47L', '2024-07-14', 'Kuala Namu', 'Soekarno Hatta', 1760000, 0, '1721388467_e0cb958ea5820436c6f7.jpg', '1721388467_8a05a3513a53c6d3666f.pdf', '2024-07-19 14:58:17', '2024-07-19 18:27:47', NULL),
(26, 116, 'Kembali', 'Citilink', '-', 'NBJLWV', '2024-07-16', 'Soekarno Hatta', 'Kuala Namu', 1630000, 0, '1721389194_ee0811b46c6e57d7d10c.jpg', '1721389194_1f7fdd141f027322aee1.pdf', '2024-07-19 15:00:02', '2024-07-19 18:39:54', NULL),
(27, 117, 'Berangkat', 'Citilink', '-', 'K9Z47L', '2024-07-14', 'Kuala Namu', 'Soekarno Hatta', 1760000, 0, '1721389685_c3e8c8b625bf8a915a7b.jpg', '1721389685_7663cc1614d52c1651f6.pdf', '2024-07-19 18:47:38', '2024-07-19 18:48:05', NULL),
(28, 117, 'Kembali', 'Citilink', '-', 'NBJLWV', '2024-07-16', 'Soekarno Hatta', 'Kuala Namu', 1630000, 0, '1721389777_a9be4ed6c5ec951fe21c.jpg', '1721389777_c00c108acd371eb61818.pdf', '2024-07-19 18:49:16', '2024-07-19 18:49:37', NULL),
(29, 150, 'Berangkat', 'Citilink', '-', 'JLM8JE', '2024-09-26', 'Kualanamo', 'Soekarno Hatta', 1845000, 0, '1727842623_e1d534cc31bf7caa2eca.jpg', '1727842623_d36d56270e1f90e8bc14.pdf', '2024-10-02 11:12:43', '2024-10-02 11:17:03', NULL),
(30, 150, 'Kembali', 'Super Air Jet', '9902150334507', 'NQUDFW', '2024-09-28', 'Soekarno Hatta', 'Kualanamo', 1560900, 0, '1727843032_9321ceb137a608e1bd1e.jpg', '1727843032_5a42c39fed125834259b.pdf', '2024-10-02 11:19:11', '2024-10-02 11:23:52', NULL),
(31, 149, 'Berangkat', 'Citilink', '-', 'JLM8JE', '2024-09-26', 'Kualanamo', 'Soekarno Hatta', 1845000, 0, '1727843754_7cddd04b2e4167591fd7.jpg', '1727843754_fe29bc7f840d8531c04c.pdf', '2024-10-02 11:31:41', '2024-10-02 11:35:54', NULL),
(32, 149, 'Kembali', 'Citilink', '-', 'A9FZXL', '2024-09-29', 'Soekarno Hatta', 'Kualanamu', 1760000, 0, '1727844273_4910de209dc950cd5bc8.jpg', '1727844273_a55a6a5d7d84c4efaa8c.pdf', '2024-10-02 11:41:48', '2024-10-02 11:44:33', NULL),
(33, 199, 'Berangkat', 'CITILINK', '-', 'VGLYJW', '2024-11-12', 'Kuala Namu', 'Soekarno - Hatta', 1520000, 0, '1732255849_4d44dbaee26818ac4e88.jpg', '1732255849_545f9b4fec890b13f516.pdf', '2024-11-22 11:20:57', '2024-11-22 13:10:49', NULL),
(34, 199, 'Kembali', 'CITILINK', '-', 'UYZR8L', '2024-11-14', 'Soekarno-Hatta', 'Kuala Namu', 1570000, 0, '1732255959_0e966340cebf14fab0b9.jpg', '1732255959_eb7cbf3d118986e195b6.pdf', '2024-11-22 13:12:20', '2024-11-22 13:12:39', NULL),
(35, 200, 'Berangkat', 'CITILINK', '-', 'IGKM7D', '2024-11-12', 'Kuala Namu', 'Soekarno Hatta', 1640000, 0, '1732257024_f13d2aa4c9911e18bd70.jpg', '1732257024_ce895370f36571157d52.pdf', '2024-11-22 13:30:03', '2024-11-22 13:30:24', NULL),
(36, 200, 'Kembali', 'CITILINK', '-', 'UYZR8L', '2024-11-14', 'Soekarno Hatta', 'Kuala Namu', 1570000, 0, '1732257117_4519bdb861cb6a85644c.jpg', '1732257117_221ab7d2a4d0576965c2.pdf', '2024-11-22 13:31:32', '2024-11-22 13:31:57', NULL);

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
(5, 14, 'Berangkat', '2024-02-26', 'Kisaran', 'Bandara Kualanamu', 56000, 1, '1709539893_db87feeb652c0e9e1f93.jpg', '2024-03-04 15:04:44', '2024-03-06 10:25:48', NULL),
(6, 15, 'Kembali', '2024-02-29', 'Hotel', 'Bandara Soekarno Hatta', 201000, 1, '1709555669_002071bb92f708045beb.jpg', '2024-03-04 19:34:09', '2024-03-06 10:27:30', NULL),
(7, 14, 'Berangkat', '2024-02-26', 'Bandara Soekarno Hatta', 'Hotel', 400000, 1, '1709556574_242928de0c3373f00981.jpg', '2024-03-04 19:49:10', '2024-03-06 10:25:39', NULL),
(8, 18, 'Berangkat', '2024-01-11', 'Kisaran', 'Bandara Kualanamu', 56000, 1, '1709609514_9290196ff5c16ee8de49.jpg', '2024-03-05 10:30:58', '2024-03-05 10:39:04', NULL),
(9, 18, 'Berangkat', '2024-01-11', 'Bandara Soekarno Hatta', 'Hotel', 400000, 1, '1709609593_8ff5b9ed8633fe74cd91.jpg', '2024-03-05 10:32:47', '2024-03-05 10:38:51', NULL),
(10, 18, 'Kembali', '2024-01-14', 'Hotel', 'Bandara Kualanamu', 400000, 1, '1709609740_c8c000f78fab38a170bb.jpg', '2024-03-05 10:34:45', '2024-03-05 10:38:43', NULL),
(11, 14, 'Kembali', '2024-03-03', 'Hotel', 'Bandara Halim Perdanakusu', 400000, 1, '1709623980_78be213b1b4378901c09.jpg', '2024-03-05 14:30:20', '2024-03-06 10:25:29', NULL),
(12, 14, 'Kembali', '2024-03-03', 'Bandara Kualanamu', 'Kisaran', 56000, 1, '1709689852_6917f24c355bb5e816a6.jpg', '2024-03-06 08:48:57', '2024-03-06 10:25:15', NULL),
(13, 68, 'Berangkat', '2024-03-27', 'Kisaran', 'Medan', 130000, 0, '1711940584_dd0be3ed4a8607c2675b.jpg', '2024-04-01 09:59:24', '2024-04-01 10:03:04', NULL),
(14, 68, 'Kembali', '2024-03-28', 'Medan', 'Kisaran', 130000, 0, '1711940701_ceea31dcfb0904c2580d.jpg', '2024-04-01 10:04:06', '2024-04-01 10:05:01', NULL),
(15, 67, 'Berangkat', '2024-03-27', 'Kisaran', 'Medan', 130000, 0, '1711940817_715e06ed1fe7e57ea32b.jpg', '2024-04-01 10:06:11', '2024-04-01 10:06:57', NULL),
(16, 67, 'Kembali', '2024-03-28', 'Medan', 'Kisaran', 130000, 0, '1711940918_1d85fc4160591bf45710.jpg', '2024-04-01 10:07:59', '2024-04-01 10:08:38', NULL),
(17, 66, 'Berangkat', '2024-03-27', 'Kisaran', 'Medan', 130000, 0, '1711941112_5306fb0bb5062ca9a146.jpg', '2024-04-01 10:11:24', '2024-04-01 10:11:52', NULL),
(18, 66, 'Kembali', '2024-03-28', 'Medan', 'Kisaran', 130000, 0, '1711941235_e77da8dc2b0b36fcc6b9.jpg', '2024-04-01 10:13:22', '2024-04-01 10:13:55', NULL),
(19, 73, 'Berangkat', '2024-04-29', 'Kisaran', 'Medan', 108500, 0, '1714642205_59d517e51110f5a93470.jpg', '2024-05-02 16:29:29', '2024-05-02 16:30:05', NULL),
(20, 77, 'Berangkat', '2024-05-13', 'Kisaran', 'Kualanamo', 101500, 1, '1716892299_984d4ca9b4664a011f42.jpg', '2024-05-28 17:31:25', '2024-05-28 18:10:17', NULL),
(21, 77, 'Berangkat', '2024-05-13', 'Soekarno Hatta', 'Hotel', 400000, 1, '1716893213_8bfcbba72661728f0dcb.jpg', '2024-05-28 17:44:50', '2024-05-28 18:10:07', NULL),
(22, 77, 'Kembali', '2024-05-20', 'Hotel', 'Bandara Soekarno Hatta', 400000, 1, '1716893470_189109ac0cc7274d599c.jpg', '2024-05-28 17:49:44', '2024-05-28 18:09:55', NULL),
(23, 93, 'Berangkat', '2024-06-06', 'Kisaran', 'Kuala Namu', 101500, 0, '1718897099_678f7976eb2d1ee57cc8.jpg', '2024-06-20 22:23:32', '2024-06-20 22:24:59', NULL),
(24, 93, 'Berangkat', '2024-06-06', 'Bandara ', 'Hotel', 400000, 0, '1718897287_924c2e8dd9a07f13125f.jpg', '2024-06-20 22:27:40', '2024-06-20 22:28:07', NULL),
(25, 93, 'Kembali', '2024-06-09', 'Hotel', 'Soekarno Hatta', 400000, 0, '1718897397_2a90080bb188006fa7f9.jpg', '2024-06-20 22:29:04', '2024-06-20 22:29:57', NULL),
(26, 95, 'Berangkat', '2024-06-19', 'Kisaran', 'Limapuluh', 43500, 0, '1718937882_852c15fdbe32afead194.jpg', '2024-06-21 09:42:58', '2024-06-21 09:44:42', NULL),
(27, 99, 'Berangkat', '2024-06-24', 'Kisaran', 'Kuala Namu', 145000, 1, '1720190791_62df78929f22ac5b709f.jpg', '2024-07-05 21:41:34', '2024-07-22 09:01:26', NULL),
(28, 101, 'Berangkat', '2024-06-24', 'Bandara Soeta', 'Hotel', 200000, 1, '1720191952_1953df028c1622898079.jpg', '2024-07-05 22:05:43', '2024-07-22 09:14:49', NULL),
(29, 99, 'Berangkat', '2024-06-24', 'Bandara Soeta', 'Hotel', 400000, 1, '1720192045_48410708338d58c67427.jpg', '2024-07-05 22:07:00', '2024-07-22 09:01:18', NULL),
(30, 99, 'Kembali', '2024-06-29', 'Hotel', 'Bandara Soeta', 400000, 1, '1720192225_80f50bec992704d75d3c.jpg', '2024-07-05 22:08:34', '2024-07-22 09:01:10', NULL),
(31, 101, 'Kembali', '2024-06-27', 'Hotel', 'Bandara', 301160, 1, '1720193109_fb69ffdc64c591f5fd77.jpg', '2024-07-05 22:24:59', '2024-07-22 09:14:41', NULL),
(32, 121, 'Kembali', '2024-07-18', 'Medan ', 'Kisaran', 152000, 0, '1721364844_8588de50a4a3e8d19965.jpg', '2024-07-19 11:53:03', '2024-07-19 11:54:04', NULL),
(33, 116, 'Berangkat', '2024-07-14', 'Kisaran', 'Kuala Namu', 145000, 0, '1721366472_9f1e3f9f35385d0a7b61.jpg', '2024-07-19 12:19:52', '2024-07-19 12:21:12', NULL),
(34, 116, 'Kembali', '2024-07-16', 'Kuala Namu', 'Kisaran', 440000, 0, '1721366808_2074d01516af279f7966.jpg', '2024-07-19 12:23:55', '2024-07-19 12:26:48', NULL),
(35, 116, 'Berangkat', '2024-07-14', 'Bandara Soeta', 'Hotel', 450000, 0, '1721367178_bf4063238073ed792833.png', '2024-07-19 12:28:33', '2024-07-19 12:32:58', NULL),
(36, 116, 'Kembali', '2024-07-16', 'Hotel ', 'Bandara Soeta', 400000, 0, '1721375725_cbd896551f0f36913755.jpg', '2024-07-19 14:53:42', '2024-07-19 14:55:25', NULL),
(37, 99, 'Kembali', '2024-06-30', 'Kuala Namu', 'Kisaran', 145000, 1, '1721389494_1c471671337f557a102f.jpg', '2024-07-19 18:41:48', '2024-07-22 09:01:01', NULL),
(38, 149, 'Berangkat', '2024-09-26', 'Kisaran', 'Kualanamu', 145000, 0, '1727844413_74c66c51793204257f74.jpg', '2024-10-02 11:45:25', '2024-10-02 11:46:53', NULL),
(39, 149, 'Berangkat', '2024-09-26', 'Soekarno Hatta', 'Hotel', 308500, 0, '1727845448_4ee5d61fcacadf23ad7c.jpg', '2024-10-02 12:03:35', '2024-10-02 12:04:08', NULL),
(40, 149, 'Kembali', '2024-09-28', 'Hotel', 'Soekarno Hatta', 140000, 0, '1727846225_9bd15d3e9db7310cf171.jpg', '2024-10-02 12:14:24', '2024-10-02 12:17:05', NULL),
(41, 149, 'Kembali', '2024-09-29', 'Hotel', 'Bandara', 400000, 0, '1727870973_6d508d312a378afd951a.jpg', '2024-10-02 19:07:49', '2024-10-02 19:09:33', NULL),
(42, 199, 'Berangkat', '2024-11-12', 'Kisaran', 'Kuala Namu', 145000, 0, '1732256365_d78272be706717227261.jpg', '2024-11-22 13:19:10', '2024-11-22 13:19:25', NULL),
(43, 199, 'Kembali', '2024-11-15', 'Kuala Namu', 'Kisaran', 145000, 0, '1732256427_970b2b1dd4198f2d84f8.jpg', '2024-11-22 13:20:16', '2024-11-22 13:20:27', NULL),
(44, 199, 'Berangkat', '2024-11-12', 'Bandara Soeta', 'Hotel', 400000, 0, '1732256720_3e45c2ca58b589b566ca.jpg', '2024-11-22 13:24:47', '2024-11-22 13:25:20', NULL),
(45, 199, 'Kembali', '2024-11-14', 'Hotel', 'Bandara Soeta', 400000, 0, '1732256773_0ed63a1f0fed30adf6d7.jpg', '2024-11-22 13:25:46', '2024-11-22 13:26:13', NULL),
(46, 201, 'Berangkat', '2024-11-21', 'Kisaran', 'Medan - Amplas', 152000, 0, '1732257916_561badd551ce9083aaa6.jpg', '2024-11-22 13:43:26', '2024-11-22 13:45:16', NULL),
(47, 209, 'Berangkat', '2024-11-21', 'Kisaran', 'Medan - Amplas', 152000, 0, '1732258197_a806ab10397a497c88a3.jpg', '2024-11-22 13:46:53', '2024-11-22 13:49:57', NULL);

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
  `spt_pptk` int(11) NOT NULL,
  `spt_verif` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spts`
--

INSERT INTO `spts` (`spt_id`, `spt_tahun`, `spt_nomor`, `sppd_nomor`, `spt_tgl`, `spt_pjb_tugas`, `spt_jenis`, `spt_acara`, `spt_dasar`, `spt_uraian`, `spt_lama`, `spt_mulai`, `spt_berakhir`, `spt_tujuan`, `spt_transport`, `spt_tempat`, `spt_pptk`, `spt_verif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2024, '800.1.11.1/0210/BKAD/II/2024', '800.1.11.1/014/SPPD/II/2024', '2024-02-19', 1, 2, 0, 'Undangan dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi Direktorat Jenderal Guru dan Tenaga Kependidikan Nomor : 0542/BI/KU.01.02/2024 Tanggal 01 Februari 2024 Perihal Undangan Peserta', 'Menghadiri Undangan Rekonsiliasi Laporan Realisasi Pembayaran Tunjangan Profesi Guru, Tunjangan Khusus Guru dan Tambahan Penghasilan Guru ASND melalui DAK Non Fisik Tahun Anggaran 2023 Tahap I', 3, '2024-02-20', '2024-02-22', 39, 'Pesawat Udara', 'Golden View Hotel, Jl. Bengkong Laut, Tj. Buntung, Kec. Bengkong, Kota Batam, Kepulauan Riau', 6, 1, '2024-02-19 08:47:14', '2024-02-19 17:06:06', NULL),
(5, 2024, '800.1.11.1/0229/BKAD/II/2024', '800.1.11.1/017/SPD/II/2024', '2024-02-23', 1, 2, 0, '', ' Konsultasi penggunaan SIPD Penatausahaan setelah penetapan pergeseran APBD menyusul atas penyampaian surat Sekretaris Daerah No. 900.1/0692/UM-BKAD/II/2024 tanggal 12 Pebruari 2024 Perihal Permohonan Penjelasan terkait Penatausahaan Pergeseran APBD TA. 2024, serta interkoneksi SIPD Penatausahaan dengan Bank Daerah sebgaimana surat Sekretaris Daerah No. 900.1.15.9/0545/UM-BKAD/II/2024 Tanggal 02 Pebruari 2024 Perihal Permohonan Pendampingan Penggunaan Aplikasi SIPD Penatausahaan', 4, '2024-02-26', '2024-02-29', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7, Jakarta Pusat. ', 6, 1, '2024-02-22 23:05:45', '2024-03-04 08:48:14', NULL),
(6, 2024, '800.1.11.1/0260/BKAD/II/2024', '800.1.11.1/026/BKAD/II/2024', '2024-03-01', 1, 2, 3, 'Surat Kepala Biro Perencanaan dan Anggaran Kementerian Kesehatan RI Nomor : PR.01.06/A.I/592/2024 Tanggal 6 Februari 2024 Hal Undangan Sosialisasi Regional Barat', 'Menghadiri Sosialisasi Terpadu Regional Barat', 4, '2024-03-04', '2024-03-07', 39, 'Pesawat Udara', 'Swiss-BelHotel Harbour Bay Jl. Duyung, Sei Jodoh, Batu Ampar, Batam', 6, 1, '2024-03-02 19:43:32', '2024-03-06 11:22:34', NULL),
(7, 2024, '800.1.11.1/0088/BKAD/I/2024', '800.1.11.1/004/SPPD/I/2024', '2024-01-10', 1, 2, 0, '', 'Konsultasi terkait Penggunaan SIPD RI Penatausahaan saat pembuatan Uang Persediaan (UP) untuk Sekretariat Daerah  yang tidak bisa diinput pada Aplikasi', 3, '2024-01-11', '2024-01-13', 49, 'Pesawat Udara', 'Direktorat Jenderal Bina Keuangan Daerah Kementerian Dalam Negeri - Jl. Veteran No. 7 Jakarta Pusat', 6, 1, '2024-03-05 09:49:26', '2024-03-05 09:51:22', NULL),
(8, 2024, '800.1.11.1/0116/BKAD/I/2024', '800.1.11.1/008/SPD/I/2024', '2024-01-22', 1, 1, 0, '', 'Koordinasi dan Konsultasi tentang Aplikasi SIMDA BMD guna Penyusunan Laporan Keuangan TA. 2023 ', 2, '2024-01-22', '2024-01-23', 27, 'Angkutan Umum', 'Kantor BPKP Perwakilan Provinsi Sumatera Utara', 5, 1, '2024-03-06 11:26:04', '2024-03-06 12:05:08', NULL),
(9, 2024, '800.1.11.1/0125/BKAD/I/2024', '800.1.11.1/007/SPPD/I/2024', '2024-01-22', 1, 1, 0, '', 'Koordinasi dan Konsultasi terkait penghapusan Barang Milik Daerah secara Lelang berupa Kenderaan Dinas', 2, '2024-01-24', '2024-01-25', 27, 'Mobil Dinas', 'BPKP Provinsi Sumatera Utara', 5, 1, '2024-03-06 12:07:11', '2024-03-06 12:14:03', NULL),
(10, 2024, '800.1.11.1/0156/BKAD/I/2024', '800.1.11.1/009/SPPD/I/2024', '2024-01-29', 1, 2, 0, '', 'Koordinasi dan Konsultasi tentang Tambahan Penghasilan Pegawai Negeri Sipil dan Sistem Kerja pada Pemerintah Kabupaten Asahan ', 5, '2024-01-30', '2024-02-03', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri Republik Indonesia dan Pemerintah Kabupaten Bantul', 6, 1, '2024-03-06 13:27:29', '2024-03-06 13:30:23', NULL),
(11, 2024, '800.1.11.1/0177/BKAD/II/2024', '800.1.11.1/010/SPPD/II/2024', '2024-02-02', 1, 1, 0, '', 'Menghadiri Undangan Rapat Umum Pemegang Saham (RUPS) Tahunan Tahun Buku 2023 dan Rapat Umum Pemegang Saham Luar Biasa (RUPS-LB) Bank Sumut', 2, '2024-02-05', '2024-02-06', 27, 'Mobil Dinas', 'Ballroom PT. Bank Sumut Lt.10  Jl. Imam Bonjol No. 18 Medan', 13, 1, '2024-03-06 13:32:48', '2024-03-06 13:36:12', NULL),
(12, 2024, '800.1.11.1/0181/BKAD/II/2024', '800.1.11.1/011/SPPD/II/2024', '2024-02-05', 1, 2, 0, '', 'Koordinasi dan Konsultasi perihal Penatausahaan Barang Milik Daerah menggunakan Aplikasi Pengelolaan Barang Milik Daerah guna Penyusunan Laporan Keuangan TA. 2023', 3, '2024-02-06', '2024-02-08', 50, 'Pesawat Udara', 'Badan Keuangan dan Aset Daerah Kabupaten Cirebon, Jln. Sunan kalijaga Kab. Cirebon', 6, 1, '2024-03-06 13:39:00', '2024-03-06 13:40:40', NULL),
(13, 2024, '800.1.11.1/0074/BKAD/I/2024', '800.1.11.1/0001/SPPD/I/2024', '2024-01-09', 1, 1, 0, '', 'Menghadiri Rapat Persiapan Pembahasan Rancangan Kegiatan dan Penganggaran Dana Bagi Hasil Sawit TA.2024', 2, '2024-01-09', '2024-01-10', 27, 'Mobil Dinas', 'Kantor Badan Perencanaan Pembangunan Penelitian dan Pengembangan Provinsi Sumatera Utara Jl. P. Diponegoro No. 30.', 13, 1, '2024-03-06 13:43:26', '2024-03-06 13:44:38', NULL),
(14, 2024, '800.1.11.1/0075/BKAD/I/2024', '800.1.11.1/002/SPPD/I/2024', '2024-01-09', 1, 1, 0, '', 'Menghadiri Rapat Persiapan Pembahasan Rancangan Kegiatan dan Penganggaran Dana Bagi Hasil Sawit TA.2024', 2, '2024-01-09', '2024-01-10', 27, 'Mobil Dinas', 'Kantor Badan Perencanaan Pembangunan Penelitian dan Pengembangan Provinsi Sumatera Utara Jl. P. Diponegoro No. 30.', 13, 1, '2024-03-06 13:46:57', '2024-03-06 13:49:03', NULL),
(15, 2024, '800.1.11.1/0078/BKAD/I/2024', '800.1.11.1/003/SPPD/I/2024', '2024-01-09', 1, 1, 0, '', 'Menyampaikan Berkas Lembar Konfirmasi Dana Transfer (LKT) Triwulan IV (Empat) dan Lembar Rekapitulasi Dana Transfer ke Daerah dan Dana Desa Kabupaten Asahan', 1, '2024-01-10', '2024-01-10', 31, 'Angkutan Umum', 'Kantor KPPN Tanjung Balai', 6, 1, '2024-03-06 13:51:10', '2024-03-06 13:54:33', NULL),
(16, 2024, '800.1.11.1/0207/BKAD/II/2024', '800.1.11.1/013/SPD/II/2024', '2024-02-15', 1, 1, 0, '', 'Koordinasi dan Konsultasi terkait PP No. 5 Tahun 2024 yaitu tentang Kenaikan Gaji Pokok dsb', 2, '2024-02-15', '2024-02-16', 27, 'Angkutan Umum', 'PT. Taspen KCU Medan', 6, 1, '2024-03-06 13:56:44', '2024-03-06 14:00:17', NULL),
(17, 2024, '-', '800.1.11.1/015/SPPD/II/2024', '2024-02-20', 1, 1, 0, '', 'Menghadiri Acara Stakeholders Day', 1, '2024-02-21', '2024-02-21', 31, 'Mobil Dinas', 'Pendopo Rumah Dinas Walikota Tanjung Balai Jl. Jend. Sudirman No. 5', 13, 1, '2024-03-06 14:23:41', '2024-03-06 14:42:35', NULL),
(18, 2024, '--', '800.1.11.1/016/SPD/II/2024', '2024-02-23', 1, 1, 0, '', 'Menghadiri Undangan Rapat Umum Pemegang Saham (RUPS) Tahunan Tahun Buku 2023', 2, '2024-02-25', '2024-02-26', 27, 'Mobil Dinas', 'Ballroom PT. Bank Sumut Lt. 10 Jl. Imam Bonjol No. 18', 13, 1, '2024-03-06 14:46:16', '2024-03-06 14:50:53', NULL),
(19, 2024, '800.1.11.1/0235/BKAD/II/2024', '800.1.11.1/018/SPD/II/2024', '2024-02-26', 2, 1, 0, '', 'Mengantar Surat Permohonan Konfirmasi Setoran Penerimaan Negara', 1, '2024-02-26', '2024-02-26', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 1, '2024-03-06 14:53:33', '2024-03-06 14:55:17', NULL),
(20, 2024, '800.1.11.1/0236/BKAD/II/2024', '-', '2024-02-26', 2, 1, 0, '', 'Mendampingi Kepala Badan BKAD Kab. Asahan menghadiri undangan Penandatanganan BAR (Berita Acara Rekonsiliasi) atas penyetoran Pajak Pusat Periode Semester II Tahun 2023', 1, '2024-02-27', '2024-02-27', 31, 'Mobil Dinas', 'KPPN Tanjung Balai', 6, 1, '2024-03-06 14:59:28', '2024-03-06 15:01:01', NULL),
(21, 2024, '800.1.11.1/0237/BKAD/II/2024', '800.1.11.1/019/SPPD/II/2024', '2024-02-26', 2, 1, 0, '', 'Menghadiri Undangan Penandatanganan Berita Acara Rekonsiliasi (BAR) atas Penyetoran Pajak Pusat Periode Semester II Tahun 2023', 1, '2024-02-27', '2024-02-27', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 1, '2024-03-06 15:03:30', '2024-03-06 15:05:20', NULL),
(22, 2024, '800.1.11.1/0239/BKAD/II/2024', '800.1.11.1/020/SPPD/II/2024', '2024-02-26', 2, 1, 0, '', 'Mendampingi Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan menghadiri Undangan Penandatanganan Berita Acara Rekonsiliasi (BAR) atas penyetoran Pajak Pusat Periode Semester II Tahun 2023', 1, '2024-02-27', '2024-02-27', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 13, 1, '2024-03-06 15:09:08', '2024-03-06 15:10:27', NULL),
(23, 2024, '800.1.11.1/0242/BKAD/II/2024', '800.1.11.1/021/SPPD/II/2024', '2024-02-27', 1, 1, 0, '', 'Mendampingi Kabid Aset Mengikuti Pelatihan dan Ujian Sertifikasi Kompetensi Pengadaan Barang/ Jasa Level 1', 4, '2024-02-28', '2024-03-02', 27, 'Mobil Dinas', 'Hotel Le Polonia Medan, Jl. Jend. Sudirman No. 14-18', 5, 1, '2024-03-06 15:13:24', '2024-03-06 15:15:27', NULL),
(24, 2024, '---', '800.1.11.1/012/SPD/II/2024', '2024-02-12', 1, 1, 1, '', 'Mengikuti Bimbingan Teknis Pengelola PBJ Batch I Tahun Anggaran 2024', 4, '2024-02-14', '2024-02-17', 27, 'Angkutan Umum', 'Hotel Le Polonia & Convention Medan', 5, 1, '2024-03-06 15:18:08', '2024-03-06 15:19:04', NULL),
(25, 2024, '1', '1', '2024-03-04', 1, 2, 0, '', '  Menghadiri Undangan Sosialisasi Terpadu DAK Fisik, DAK Non Fisik, DAU dan Dana Dekon Bidang Kesehatan Tahun 2024', 4, '2024-03-04', '2024-03-07', 39, 'Pesawat Udara', 'Swiss-Bel Hotel Harbour Bay Jl. Duyung, Sei Jodoh Batu Ampar, Batam', 13, 1, '2024-03-06 15:21:52', '2024-03-30 13:06:00', NULL),
(26, 2024, '800.1.11.1/0216/BKAD/II/2024', '800.1.11.1/024/SPPD/II/2024', '2024-02-20', 1, 1, 0, '', 'Mendampingi Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan dalam rangka menghadiri acara Stakeholder Day pada Kuasa Pengguna Anggaran Satuan Kerja Lingkup KPPN Tanjungbalai', 1, '2024-02-21', '2024-02-21', 31, 'Mobil Dinas', 'Pendopo Rumah Dinas Walikota Tanjung Balai', 13, 1, '2024-03-06 15:28:10', '2024-03-06 15:29:40', NULL),
(29, 2024, '800.1.11.1/0356/SPT/III/2024', '800.1.11.1/038/SPPD/III/2024', '2024-03-26', 1, 1, 0, '', ' Menyampaikan Berkas Berita Acara Kesepakatan Kontribusi Daerah untuk Mendukung Program Jaminan Kesehatan antara BPJS Kantor Cabang Kisaran dengan Pemerintah Kabupaten Asahan Nomor : 956/BA/1-05/0324 Tanggal 18 Maret 2024', 2, '2024-03-27', '2024-03-28', 33, 'Angkutan Umum', 'Badan Keuangan dan Aset Daerah Provinsi Sumatera Utara', 6, 1, '2024-03-27 13:47:46', '2024-03-27 13:53:15', NULL),
(30, 2024, '800.1.11.1/0423/BKAD/IV/2024', '800.1.11.1/044/SPD/IV/2024', '2024-04-23', 1, 2, 0, '', ' Koordinasi dan Konsultasi terkait pengimplementasian KKPD oleh PT. Bank Sumut pada Pemerintah Kabupaten khususnya Kabupaten Asahan', 2, '2024-04-24', '2024-04-25', 33, 'Mobil Dinas', 'PT. Bank Sumut Cabang Utama Medan Jl. Imam Bonjol 18, Medan', 6, 1, '2024-04-23 16:24:19', '2024-04-24 15:15:48', NULL),
(31, 2024, '800.1.11.1/0435/BKAD/IV/2024', '800.1.11.1/047/SPD/IV/2024', '2024-04-26', 1, 2, 0, '', 'Konsultasi dan Koordinasi terkait implementasi KPPD lanjutan dengan PT. Bank Sumut Cabang Utama untuk wilayah Pemerintah Kabupaten Asahan', 2, '2024-04-29', '2024-04-30', 33, 'Mobil Dinas', 'PT. Bank SUMUT Cabang Utama Jl. Imam Bonjol 18, Medan', 6, 1, '2024-04-26 11:52:19', '2024-04-29 09:32:47', NULL),
(32, 2024, '800.1.11.1/0463/BKAD/V/2024', '800.1.11.1/060/SPD/V/2024', '2024-05-03', 1, 2, 0, '', ' Koordinasi dan Konsultasi terkait tatacara dan mekanisme penginputan SPJ belanja yang dilakukan dengan menggunakan KKPD pada SIPD Penatausahaan', 4, '2024-05-13', '2024-05-16', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7, Jakarta Pusat', 6, 1, '2024-05-02 18:49:36', '2024-05-13 10:45:02', NULL),
(33, 2024, '800.1.11.1/0466/BKAD/V/2024', '800.1.11.1/059/SPD/V/2024', '2024-05-06', 2, 1, 0, 'Surat Kepala KPPN Tanjungbalai Nomor : UND-33/KPN.0206/2024 Tanggal 30 April 2024 Tentang Sosialisasi Perpajakan bagi Instansi Pemerintah dan Sosialisasi Kartu Kredit Pemerintah (KKP) serta Sosialisasi Antikorupsi', 'Menghadiri Undangan Sosialisasi Perpajakan bagi Instansi Pemerintah dan Sosialisasi Kartu Kredit Pemerintah (KKP) serta Sosialisasi Antikorupsi', 1, '2024-05-07', '2024-05-07', 31, 'Angkutan Umum', 'KPPN Tanjung Balai, Jln. Jenderal Sudirman Km. 1 No. 246 Tanjungbalai', 6, 1, '2024-05-06 15:35:20', '2024-05-07 12:42:41', NULL),
(34, 2024, '800.1.11.1/0465/BKAD/V/2024', '800.1.11.1/058/SPD/V/2024', '2024-05-06', 2, 1, 0, 'Surat Kepala KPPN Tanjungbalai Nomor : UND-33/KPN.0206/2024 Tanggal 30 April 2024 Tentang Sosialisasi Perpajakan bagi Instansi Pemerintah dan Sosialisasi Kartu Kredit Pemerintah (KKP) serta Sosialisasi Antikorupsi', 'Menghadiri Undangan Sosialisasi Perpajakan bagi Instansi Pemerintah dan Sosialisasi Kartu Kredit Pemerintah (KKP) serta Sosialisasi Antikorupsi', 1, '2024-05-07', '2024-05-07', 31, 'Angkutan Umum', 'KPPN Tanjung Balai, Jln. Jenderal Sudirman Km. 1 No. 246 Tanjung Balai', 6, 1, '2024-05-07 15:53:45', '2024-05-07 16:23:52', NULL),
(35, 2024, NULL, NULL, NULL, 1, 1, 0, '', '  Menghadiri undangan pelaksanaan kegiatan rapat koordinasi penerimaan iuran Pemda tahun 2024, sosialisasi implementasi PMK nomor 143 tahun 2023 dan PMK nomor 110 tahun 2023', 3, '2024-05-15', '2024-05-17', 27, 'Mobil Dinas', 'Hotel Santika, Dyandra Jl. Kapten Maulana Lubis nomor 7 Petisah tengah kecamatan Medan Petisah', 6, 0, '2024-05-13 14:01:07', '2024-05-14 13:19:34', NULL),
(36, 2024, '800.1.11.1/0516/BKAD/V/2024', '800.1.11.1/080/SPD/V/2024', '2024-05-27', 2, 1, 0, '', 'Pengambilan Buku Pemilik Kendaraan Bermotor (BPKB) Kenderaan Dinas atas nama BKAD Kabupaten Asahan ', 2, '2024-05-27', '2024-05-28', 27, 'Angkutan Umum', 'PT. INDAKO TRADING COY, Jl. Pemuda No. 18 Kecamatan Medan Maimun', 13, 1, '2024-05-28 11:43:51', '2024-06-04 08:58:10', NULL),
(38, 2024, '800.1.11.1/0557/BKAD/VI/2024', '800.1.11.1/088/SPD/VI/2024', '2024-06-05', 1, 2, 0, 'Surat Inspektur Kab. Asahan Nomor : 700.1/0461/INSP/V/2024 Tanggal 08 Mei 2024 Tentang Hasil Konsultasi terkait perubahan Keputusan Bupati Asahan Tentang Besaran Uang Persediaan TA. 2024', 'Koordinasi dan Konsultasi terkait Perubahan Keputusan Bupati tentang Penetapan Besaran Uang Persediaan TA. 2024 dan Besaran minimal Ganti Uang Persediaan serta tatacara perubahan UP KKPD jika terjadi kendala teknis dan nonteknis saat penggunaannya, kemudian bagaimana perlakuannya di Aplikasi SIPD Penatausahaan TA. 2024', 3, '2024-06-06', '2024-06-08', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7 Jakarta Pusat', 6, 1, '2024-06-06 11:09:32', '2024-06-20 21:48:08', NULL),
(39, 2024, '800.1.11.1/0582/BKAD/VI/2024', '800.1.11.1/094/SPD/VI/2024', '2024-06-14', 1, 1, 0, 'Surat Kepala BPJS Cabang Kisaran Nomor 1003/I-05/0624 tanggal 10 Juni 2024 Perihal Undangan Kegiatan Pemutakhiran Data dan Rekonsiliasi Iuran PBPU/ BP Pemerintah Daerah', 'Menghadiri undangan Kegiatan Pemutakhiran Data dan Rekonsiliasi Iuran PBPU/ BP Pemerintah Daerah Kabupaten Asahan BPJS Kesehatan', 3, '2024-06-19', '2024-06-21', 20, 'Mobil Dinas', 'Khas Parapat Jl. Marihat No. 1, Danau Toba, Kec. Girsang Sipangan Bolon', 6, 1, '2024-06-19 18:07:31', '2024-06-21 09:41:11', NULL),
(40, 2024, '800.1.11.1/0591/BKAD/VI/2024', '800.1.11.1/103/SPD/VI/2024', '2024-06-21', 1, 2, 2, 'Surat Direktur Jenderal Bina Keuangan Daerah Nomor 900.1.15.5/9512/Keuda Tanggal 19 Juni 2024 Perihal  Undangan Bimtek SIPD Bidang Pelaksanaan dan Pertanggungjawaban Keuangan Angkatan I', 'Menghadiri Undangan Bimtek SIPD Bidang Pelaksanaan dan Pertanggungjawaban Keuangan Angkatan I', 4, '2024-06-24', '2024-06-27', 49, 'Pesawat Udara', 'Hotel Grand Mercure Jakarta Harmoni Jl. Hayam Wuruk No. 36 - 37, Kelapa Dua Gambir', 6, 1, '2024-06-20 12:57:42', '2024-07-05 21:10:53', NULL),
(41, 2024, '800.1.11.1/0590/BKAD/VI/2024', '800.1.11.1/102/SPD/VI/2024', '2024-06-21', 1, 2, 2, 'Surat Direktur Jenderal Bina Keuangan Daerah Nomor 900.1.15.5/9512/Keuda Tanggal 19 Juni 2024 Perihal  Undangan Bimtek SIPD Bidang Pelaksanaan dan Pertanggungjawaban Keuangan Angkatan I', 'Menghadiri Undangan Bimtek SIPD Bidang Pelaksanaan dan Pertanggungjawaban Keuangan Angkatan I', 4, '2024-06-24', '2024-06-27', 49, 'Pesawat Udara', 'Hotel Grand Mercure Jakarta Harmoni Jl. Hayam Wuruk No. 36 - 37, Kelapa Dua Gambir', 3, 1, '2024-06-20 13:13:52', '2024-07-05 21:11:43', NULL),
(43, 2024, NULL, NULL, NULL, 1, 1, 0, '', 'Koordinasi dan konsultasi pengembalian gaji  ke RKUD melalui PT. TASPEN Medan', 2, '2024-06-20', '2024-06-21', 27, 'Angkutan Umum', 'PT. TASPEN Medan', 6, 0, '2024-06-21 08:56:47', '2024-06-21 08:56:47', NULL),
(44, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'Melakukan Konsultasi terkait Pendampingan Penataan  Penggunaan Sebahagian  Areal Tanah Eks HGU PT. Bakrie Sumatera Utara Plantation, Tbk untuk Pengembangan Wilayah Kabupaten Asahan', 2, '2024-07-05', '2024-07-06', 27, 'Mobil Dinas', 'Fakultas Hukum Universitas Sumatera Utara', 13, 0, '2024-07-05 19:45:53', '2024-07-05 20:03:23', NULL),
(45, 2024, NULL, NULL, NULL, 4, 2, 0, '', 'Melakukan Studi Tiru terkait penggunaan SIPD Penatausahaan dalam pelaksanaan Penatausahaan Pengeluaran dan Pendapatan APBD agar lebih baik dan sesuai peraturan perundang-undangan yang berlaku', 4, '2024-07-17', '2024-07-20', 54, 'Pesawat Udara', 'BPKPD Kabupaten Buleleng', 6, 0, '2024-07-12 08:59:54', '2024-07-12 08:59:54', NULL),
(46, 2024, '800.1.11.1/0698/BKAD/VII/2024', '800.1.11.1/116/SPD/VII/2024', '2024-07-12', 4, 2, 0, 'Surat Direktur Jenderal Bina Keuangan Daerah Nomor 900.1.10/11302/Keuda Tanggal 11 Juli 2024 Perihal Undangan Rapat Kegiatan Asistensi Pemenuhan Pendanaan Pilkada Tahun 2024', 'Menghadiri Rapat Asistensi Pemenuhan Pendanaan Pilkada Tahun 2024', 3, '2024-07-14', '2024-07-16', 49, 'Pesawat Udara', 'Mercure Convention Center Ancol Jalan Pantai Indah, Ancol, Jakarta Utara', 6, 1, '2024-07-12 10:20:17', '2024-07-19 10:25:22', NULL),
(47, 2024, '800.1.11.1/0722/BKAD/VII/2024', '800.1.11.1/119/SPD/VII/2024', '2024-07-17', 4, 2, 0, '', 'Konsultasi dan Koordinasi terkait pendanaan Bantuan Keuangan Provinsi (BKP) Provinsi Sumatera Utara Tahun Anggaran 2024', 2, '2024-07-17', '2024-07-18', 33, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara, Medan', 6, 1, '2024-07-17 11:35:55', '2024-07-19 10:26:38', NULL),
(48, 2024, '800.1.11.1/0713/BKAD/VII/2024', '800.1.11.1/118/SPD/VII/2024', '2024-07-16', 4, 1, 0, 'Surat Kepala Kantor Wilayah Direktorat Jenderal Perbendaharaan Provinsi Sumatera Utara Nomor UND-57/WPB.02/2024 Tanggal 11 Juli 2024 Hal : Undangan Pelaksanaan Kegiatan Seminar Ekstensifikasi PNBP Sumber Daya Alam dan Pajak Daerah dan Retribusi Daerah di Provinsi Sumatera Utara', 'Menghadiri Undangan Pelaksanaan Kegiatan Seminar Ekstensifikasi PNBP Sumber Daya Alam dan Pajak Daerah dan Retribusi Daerah di Provinsi Sumatera Utara', 2, '2024-07-17', '2024-07-18', 27, 'Mobil Dinas', 'Aula Rekreasi Gedung Keuangan Negara Jalan P. Diponegoro No. 30 A', 13, 1, '2024-07-19 10:42:42', '2024-07-19 10:44:44', NULL),
(49, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'konsultasi pajak', 1, '2024-08-14', '2024-08-14', 31, 'Angkutan Umum', 'kppn tanjung balai', 6, 0, '2024-08-12 08:59:07', '2024-08-12 08:59:07', NULL),
(51, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'MENGANTAR SURAT PERMOHONAN KONFIRMASI SETORAN PENERIMAAN NEGARA SEMESTER I TA 2024 SERTA KONSULTASI TATA CARA RETURN KESALAHAN PENYETORAN PAJAK', 1, '2024-08-20', '2024-08-20', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 0, '2024-08-19 12:06:38', '2024-08-19 12:27:46', NULL),
(53, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi Terkait Laporan Dana Bagi Hasil Sawit tahun 2023 dan 2024', 2, '2024-08-21', '2024-08-22', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-08-21 10:36:28', '2024-08-21 10:47:47', NULL),
(54, 2024, NULL, NULL, NULL, 4, 1, 0, 'Surat Branch Manager Medan, PT. Taspen (Persero) Nomor : SRT-321/CU.02/082024 Tanggal 20 Agustus 2024 Hal : Penyampaian Kegiatan Sosialisasi, Bimbingan Teknis dan Implementasi Simgaji Web Pemerintah Daerah', 'Menghadiri Kegiatan Sosialisasi, Bimbingan Teknis dan Implementasi Simgaji Web Pemerintah Daerah Wilayah KC Medan', 4, '2024-08-28', '2024-08-31', 27, 'Angkutan Umum', 'Aula PT. TASPEN (Persero)  Kantor Cabang Medan Jl. H. Adam Malik No. 64 Silalas, Kec. Medan Barat,', 6, 0, '2024-08-23 11:56:00', '2024-08-28 16:23:11', NULL),
(55, 2024, NULL, NULL, NULL, 4, 2, 0, '', 'Koordinasi dan Konsultasi Pelaksanaan SIPD', 3, '2024-08-28', '2024-08-30', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7 Jakarta Pusat', 13, 0, '2024-08-23 14:39:51', '2024-08-23 14:41:07', NULL),
(56, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'Mendampingi Sekretaris BKAD menghadiri Penandatanganan Berita Acara Rekonsiliasi ( BAR ) atas penyetoran Pajak Pusat yang di potong oleh Bendahara Umum Daerah Periode Semester I Tahun Anggaran 2024', 1, '2024-08-30', '2024-08-30', 31, 'Mobil Dinas', 'kppn tanjung balai', 6, 0, '2024-08-30 07:31:43', '2024-08-30 07:31:43', NULL),
(58, 2024, '800.1.11.1/0977/BKAD/IX/2024', '800.1.11.1/185/SPD/IX/2024', '2024-09-25', 4, 2, 0, '', 'Konsultasi dan Koordinasi terkait perbaikan data transaksi ganda yang melebihi Pagu Anggaran pada SIPD Penatausahaan', 3, '2024-09-26', '2024-09-28', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7 Jakarta Pusat', 6, 1, '2024-09-25 19:55:57', '2024-10-02 11:05:38', NULL),
(59, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Melaksanakan Rekonsiliasi Iwp 8 % untuk bulan Mei s/d Agustus 2024 dan Konsultasi terkait Pembayaran Pensiun. An. Irwansyah Siahaan Nip. 19660910 199302 1 002', 2, '2024-09-26', '2024-09-27', 27, 'Angkutan Umum', 'PT. TASPEN (PERSERO)', 6, 0, '2024-09-26 14:45:57', '2024-09-26 16:38:58', NULL),
(60, 2024, NULL, NULL, NULL, 4, 1, 0, 'Surat Kepala Kantor Pelayanan Perbendaharaan Negara Tanjung Balai No. UND-108/KPN.0206/2024 tanggal 27 September 2024 perihal : Evaluasi DAK Fisik Tahun 2024 wilayah Kabupaten Asahan, Batubara dan Tanjung Balai', 'Mendampingi Kepala BKAD dalam rangka menghadiri FGD Evaluasi dan Percepatan Penyaluran DAK Fisik Tahap II\r\nserta Sosialisasi DAK Fisik Tahap II Tahun 2024', 1, '2024-10-03', '2024-10-03', 31, 'Mobil Dinas', 'Kantor Pelayanan Perbendaharaan Negara Tanjung Balai', 6, 0, '2024-10-02 17:38:59', '2024-10-02 18:42:01', NULL),
(61, 2024, '800.1.11.1/1009/BKAD/X/2024', '800.1.11.1/194/SPD/X/2024', '2024-10-07', 4, 2, 0, '', 'Koordinasi dan Konsultasi terkait rekonsiliasi data untuk persiapan migrasi penggunaan Aplikasi SimGaji Taspen berbasis desktop ke Web Based', 3, '2024-10-09', '2024-10-11', 49, 'Pesawat Udara', 'Kantor Pusat PT. Taspen (Persero), Jln. Letjend. Suprapto No. 45 Cempaka Putih Jakarta Pusat', 6, 1, '2024-10-06 16:35:54', '2024-10-06 16:35:54', NULL),
(62, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi terkait Penerimaan Bagi Hasil Provinsi, dan melakukan Rekonsiliasi Data Penerimaan atas Dana Bagi Hasil Provinsi yang diterima pada RKUD Pemerintah Kabupaten Asahan Tahun Anggaran 2024', 2, '2024-10-14', '2024-10-15', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-08 10:12:17', '2024-10-08 10:12:17', NULL),
(63, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi Penerimaan Dana Bagi Hasil Provinsi dan menyampaikan Tanda Terima DBH yang sudah masuk ke RKUD', 2, '2024-07-22', '2024-07-23', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-08 10:42:30', '2024-10-08 10:42:30', NULL),
(64, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi Penerimaan Dana Bagi Hasil Provinsi dan menyampaikan Tanda Terima DBH yang sudah masuk ke RKUD', 2, '2024-06-13', '2024-06-14', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-08 10:44:44', '2024-10-08 10:44:44', NULL),
(65, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi Penerimaan Dana Bagi Hasil Provinsi dan menyampaikan Tanda Terima DBH yang sudah masuk ke RKUD', 2, '2024-08-06', '2024-08-07', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-08 10:46:22', '2024-10-08 10:46:22', NULL),
(66, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi atas pengembalian Gaji yang ditransfer Taspen ke RKUD', 2, '2024-09-09', '2024-09-10', 27, 'Angkutan Umum', 'PT. TASPEN (Persero)  Kantor Cabang Medan Jl. H. Adam Malik No. 64 Silalas, Kec. Medan Barat', 6, 0, '2024-10-08 14:57:33', '2024-10-08 14:58:11', NULL),
(67, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi Penerimaan Dana Bagi Hasil Provinsi dan menyampaikan Tanda Terima DBH yang sudah masuk ke RKUD', 2, '2024-09-25', '2024-09-26', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-08 14:59:52', '2024-10-08 14:59:52', NULL),
(68, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi terkait Penerimaan Bagi Hasil Provinsi, dan melakukan Rekonsiliasi Data Penerimaan atas Dana Bagi Hasil Provinsi yang diterima pada RKUD Pemerintah Kabupaten Asahan Tahun Anggaran 2024', 2, '2024-10-14', '2024-10-15', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-10-09 16:29:04', '2024-10-09 16:29:04', NULL),
(69, 2024, '3', '3', '2024-10-16', 4, 1, 0, '', 'Rekonsiliasi Data Iuran Wajib Pegawai (IWP 8%), JKK-JKM Caturwulan II Tahun 2024\r\nse-Wilayah PT. TASPEN (PERSERO) KC MEDAN', 2, '2024-10-16', '2024-10-17', 27, 'Mobil Dinas', 'Ballroom Lt. 10 PT Bank Sumut Kantor Pusat Medan', 6, 1, '2024-10-14 10:28:20', '2024-10-24 10:23:47', NULL),
(70, 2024, '2', '2', '2024-10-14', 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait Penerimaan Bagi Hasil Provinsi, dan melakukan Rekonsiliasi Data Penerimaan atas Dana Bagi Hasil Provinsi yang diterima pada RKUD Pemerintah Kabupaten Asahan Tahun Anggaran 2024', 2, '2024-10-14', '2024-10-15', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 13, 1, '2024-10-14 15:47:19', '2024-10-24 10:16:35', NULL),
(71, 2024, '0', '0', '2024-07-20', 4, 2, 0, 'Undangan Direktur Dana Transfer Umum - Kementerian Keuangan RI Nomor : UND-164/PK.2/2024 Tanggal 17 Oktober 2024 Hal : Rekonsiliasi Data Kebutuhan Pengganjian PPPK Formasi Tahun 2023 yang diangkat pada Tahun 2024', 'Menghadiri acara Rekonsiliasi Data Kebutuhan Pengganjian PPPK Formasi Tahun 2023 yang diangkat pada Tahun 2024', 3, '2024-10-21', '2024-10-23', 49, 'Pesawat Udara', 'Aula Lt. 5, Gedung B, Badan Pendidikan dan Pelatihan Keuangan (BPPK), Jl. Purnawarman No. 99, RT.3/ RW. 2, Selong, Kec. Kebayoran Baru, Kota Jakarta S', 6, 1, '2024-10-18 12:08:01', '2024-10-24 10:15:03', NULL),
(72, 2024, NULL, NULL, NULL, 4, 2, 0, 'Surat Kementerian Dalam Negeri Republik Indonesia Nomor 900.1.13/17537/Keuda Tanggal 15 Oktober 2024, Hal : Undangan Rapat Asistensi Penerapan e-BLUD dalam SIPD RI', 'Menghadiri Undangan Rapat Asistensi Penerapan e-BLUD dalam SIPD RI', 3, '2024-10-29', '2024-10-31', 50, 'Pesawat Udara', 'Mercure Bandung City Centre, Jl. Lengkong Besar No. 8 Cikawao, Kec. Lengkong, Kota Bandung', 13, 0, '2024-10-25 17:43:17', '2024-10-25 17:43:17', NULL),
(73, 2024, '800.1.11.1/1144/BKAD/XI/2024', '800.1.11.1/228/SPD/XI/2024', '2024-11-11', 4, 2, 0, '', 'Koordinasi dan Konsultasi terkait permasalahan Pelaporan Buku KAS baik Pemda maupun OPD di SIPD Penatausahaan', 3, '2024-11-12', '2024-11-14', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7 Jakarta Pusat', 6, 1, '2024-11-11 14:56:23', '2024-11-18 10:36:25', NULL),
(74, 2024, '800.1.11.1/1176/BKAD/XI/2024', '800.1.11.1/236/SPD/XI/2024', '2024-11-19', 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait mekanisme Permohonan pembayaran dan Pelaporan dana Bantuan Keuangan Provinsi (BKP) TA. 2024', 2, '2024-11-21', '2024-11-22', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 6, 1, '2024-11-18 10:39:03', '2024-11-22 13:40:47', NULL),
(75, 2024, '800.1.11.1/1173/BKAD/XI/2024', '800.1.11.1/234/SPD/XI/2024', '2024-11-19', 4, 1, 0, 'Surat Kepala KPPN Tanjung Balai Nomor : UND-131/KPN.0206/2024 Tanggal 15 Nopember 2024 Hal : Evaluasi DAK FIsik Tahun 2024 Wilayah Kabupaten Asahan, Batubara dan Tanjungbalai', 'Menghadiri Undangan Evaluasi dan Percepatan Penyaluran DAK Fisik Tahap III serta Pengisian Kerta Kerja Monitoring Transfer ke Daerah Triwulan IV', 1, '2024-11-20', '2024-11-20', 31, 'Mobil Dinas', 'Ruang Rapat KPPN Tanjung Balai', 6, 1, '2024-11-18 17:07:21', '2024-11-22 14:39:52', NULL),
(76, 2024, '800.1.11.1/1175/BKAD/XI/2024', '800.1.11.1/235/SPD/XI/2024', '2024-11-19', 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait mekanisme Permohonan pembayaran dan Pelaporan dana Bantuan Keuangan Provinsi (BKP) TA. 2024', 2, '2024-11-21', '2024-11-22', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 13, 1, '2024-11-18 19:02:52', '2024-11-22 13:42:22', NULL),
(77, 2024, NULL, NULL, NULL, 4, 1, 0, 'Surat Kepala KPPN Tanjung Balai Nomor : UND-131/KPN.0206/2024 Tanggal 15 Nopember 2024 Hal : Evaluasi DAK FIsik Tahun 2024 Wilayah Kabupaten Asahan, Batubara dan Tanjungbalai', 'Menghadiri Undangan Evaluasi dan Percepatan Penyaluran DAK Fisik Tahap III serta Pengisian Kerta Kerja Monitoring Transfer ke Daerah Triwulan IV', 1, '2024-11-20', '2024-11-20', 31, 'Mobil Dinas', 'Ruang Rapat KPPN Tanjung Balai', 13, 0, '2024-11-18 19:07:44', '2024-11-18 19:08:40', NULL),
(78, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'Menyampaikan Surat Pernyataan Tanggung Jawab Mutlak (SPTJM) sisa DAK Fisik dan penggunaan sisa DAK Fisik s.d Tahun Anggaran 2023', 1, '2024-11-21', '2024-11-21', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 0, '2024-11-20 17:33:16', '2024-11-20 17:33:16', NULL),
(79, 2024, NULL, NULL, NULL, 4, 2, 0, 'Surat Direktur Dana Desa, Insentif Otonomi Khusus dan Keistimewaan, Kementerian Keuangan RI No. UND-273/PK.4/2024 Tanggal 22 November 2024 Hal : Bimbingan Teknis Insentif Fiskal Tahun Anggaran 2025', 'Mendampingi Kepala BKAD Kab. Asahan untuk Menghadiri Undangan Bimbingan Teknis Dana Insentif Fiskal Tahun Anggaran 2025', 3, '2024-12-03', '2024-12-05', 50, 'Pesawat Udara', 'Aula Kantor Wilayah Direktorat Jenderal Perbendaharaan Provinsi Jawa Barat Jl. Diponegoro No. 59 Citarum, Bandung Wetan, Kota Bandung', 13, 0, '2024-11-29 11:23:05', '2024-12-02 09:13:33', NULL),
(80, 2024, NULL, NULL, NULL, 4, 2, 0, 'Surat Direktur Dana Desa, Insentif Otonomi Khusus dan Keistimewaan, Kementerian Keuangan RI No. UND-273/PK.4/2024 Tanggal 22 November 2024 Hal : Bimbingan Teknis Insentif Fiskal Tahun Anggaran 2025', 'Mendampingi Kepala BKAD Kab. Asahan untuk Menghadiri Undangan Bimbingan Teknis Dana Insentif Fiskal Tahun Anggaran 2025', 3, '2024-12-03', '2024-12-05', 50, 'Pesawat Udara', 'Aula Kantor Wilayah Direktorat Jenderal Perbendaharaan Provinsi Jawa Barat Jl. Diponegoro No. 59 Citarum, Bandung Wetan, Kota Bandung', 6, 0, '2024-11-29 12:13:52', '2024-11-29 13:39:49', NULL),
(81, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Menyampaikan Berkas Berita Acara Rekonsiliasi Data Iuran Wajib Pegawai (IWP 8 %), JKK-JKM Caturwulan II Tahun 2024 serta konsultasi terkait data pegawai pensiun yang mengalami kejadian perbedaan antara pembayaran gaji terakhir dan SK pensiun berbeda', 2, '2024-10-29', '2024-10-30', 27, 'Mobil Dinas', 'PT. TASPEN (PERSERO) KCU MEDAN', 6, 0, '2024-12-17 09:17:56', '2024-12-17 09:17:56', NULL),
(82, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Rekonsiliasi Data Iuran Wajib Pegawai (IWP 8 %), JKK-JKM bulan September dan Oktober 2024, serta Konsultasi atas pengembalian Gaji yang ditranfer ke RKUD Kab. Asahan ', 2, '2024-11-14', '2024-11-15', 27, 'Mobil Dinas', 'PT. TASPEN (PERSERO) KCU MEDAN', 6, 0, '2024-12-17 09:31:24', '2024-12-17 10:17:55', NULL),
(83, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi terkait rekonsiliasi data untuk persiapan migrasi penggunaan Aplikasi SimGaji Taspen berbasis desktop ke Web Based', 2, '2024-12-09', '2024-12-10', 27, 'Angkutan Umum', 'PT. TASPEN (PERSERO) KCU MEDAN', 6, 0, '2024-12-17 09:41:06', '2024-12-17 09:41:06', NULL),
(84, 2024, NULL, NULL, NULL, 4, 1, 0, '', 'Rekonsiliasi Data Iuran Wajib Pegawai (IWP 8 %),JKK-JKM bulan Nopember dan Desember 2024, serta Koordinasi dan Konsultasi terkait rekonsiliasi data untuk persiapan migrasi pengguna Aplikasi SimGaji Taspen berbasis desktop ke Web Based', 2, '2024-12-19', '2024-12-20', 27, 'Mobil Dinas', 'PT. TASPEN (PERSERO) KCU MEDAN', 6, 0, '2024-12-17 10:02:19', '2024-12-17 11:55:33', NULL),
(85, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi Laporan Bantuan Keuangan Provinsi TA 2024 dan menyampaikan syarat salur Bantuan Keuangan Provinsi sekaligus', 2, '2024-12-18', '2024-12-19', 27, 'Angkutan Umum', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-12-17 18:25:22', '2024-12-17 18:36:45', NULL),
(86, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Koordinasi dan Konsultasi Terkait Penyaluran Bagi Hasil Provinsi ke Pemerintah Daerah serta menyampaikan Tanda Terima SP2D DBH Provinsi yang sudah masuk ke RKUD', 2, '2024-12-11', '2024-12-12', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 6, 0, '2024-12-17 18:42:17', '2024-12-17 18:42:17', NULL),
(87, 2024, NULL, NULL, NULL, 2, 1, 0, '', 'Menghadiri Rekonsiliasi Data Iuran Wajib Pegawai (IWP 8%), JKK-JKM bulan September dan Oktober 2024, serta Konsultasi atas Pengembalian Gaji yang ditransfer ke RKUD Kab. Asahan', 2, '2024-11-14', '2024-11-15', 27, 'Angkutan Umum', 'Kantor PT. TASPEN (Persero) KC Medan', 6, 0, '2024-12-20 11:29:37', '2024-12-20 11:29:37', NULL),
(88, 2025, '800.1.11.1/0061/BKAD/I/2025', '800.1.11.1/001/SPD/I2025', '2025-01-07', 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait Kurang Salur Dana Bantuan Keuangan  Provinsi Tahun Anggaran 2024 ', 2, '2025-01-08', '2025-01-09', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 6, 1, '2025-01-07 14:38:57', '2025-01-22 14:29:43', NULL),
(89, 2025, '800.1.11.1/0093/BKAD/I/2025', '800.1.11.1/008/SPD/I/2025', '2025-01-14', 4, 2, 0, '', 'Konsultasi dan Koordinasi terkait kendala SIPD Penatausahaan untuk Transaksi  TA. 2024', 3, '2025-01-16', '2025-01-18', 49, 'Pesawat Udara', 'Kementerian Dalam Negeri - Direktorat Jenderal Bina Keuangan Daerah Jl. Veteran No. 7 Jakarta Pusat', 6, 1, '2025-01-14 11:15:07', '2025-01-18 19:19:53', NULL),
(90, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait Rekonsiliasi Data untuk persiapan Migrasi pengguna Aplikasi SimGaji Taspen berbasis desktop ke Web Based ', 2, '2025-01-23', '2025-01-24', 27, 'Angkutan Umum', 'PT. TASPEN (PERSERO) KCU MEDAN', 6, 0, '2025-01-20 08:18:06', '2025-01-20 08:24:36', NULL),
(91, 2025, '800.1.11.1/0134/BKAD/I/2025', '800.1.11.1/014/SPD/I/2025', '2025-01-22', 4, 1, 0, '', 'Konsultasi dan Koordinasi terkait pendanaan Bantuan Keuangan Provinsi (BKP) Provinsi Sumatera Utara Tahun Anggaran 2025', 2, '2025-01-23', '2025-01-24', 27, 'Mobil Dinas', 'BKAD PROVINSI', 6, 1, '2025-01-20 16:57:25', '2025-01-22 18:25:26', NULL),
(92, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Konsultasi dan Koordinasi Tata Cara Return Kesalahan Penyetoran Pajak ke KPPN Tanjung Balai ', 1, '2025-02-03', '2025-02-03', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 0, '2025-01-30 09:00:05', '2025-01-30 09:00:05', NULL),
(93, 2025, NULL, NULL, NULL, 2, 1, 0, '', 'Konsultasi dan Koordinasi tentang Tata Cara Return Kesalahan Penyetoran Pajak ', 1, '2025-01-30', '2025-01-30', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 0, '2025-01-30 09:05:23', '2025-01-30 11:23:27', NULL),
(94, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Mengantar Berita Acara Rekonsiliasi ( BAR ) atas penyetoran Pajak Pusat yang di potong oleh Bendahara Umum Daerah Periode Semester II Tahun Anggaran 2024', 1, '2025-01-31', '2025-01-31', 31, 'Angkutan Umum', 'KPPN Tanjung Balai', 6, 0, '2025-01-31 11:18:41', '2025-01-31 13:58:08', NULL),
(95, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Konsultasi terkait Pengajuan  Klaim Jaminan Kematian atas Pegawai yang meninggal dunia pada Pemerintah Kabupaten Asahan', 2, '2025-02-06', '2025-02-07', 27, 'Mobil Dinas', 'PT. TASPEN (PERSERO)', 6, 0, '2025-02-05 10:04:07', '2025-02-05 10:10:23', NULL),
(96, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Menyampaikan Berita Acara Rekonsiliasi Kontribusi Daerah untuk mendukung program jaminan kesehatan antara BPJS Kesehatan Kantor Cabang Kisaran dengan Pemerintah Kabupaten Asahan tahun 2024, no: 792/BA/I-05/0325 ', 2, '2025-03-06', '2025-03-07', 27, 'Mobil Dinas', 'BKAD Provinsi Sumatera Utara', 6, 0, '2025-03-05 09:28:30', '2025-03-05 10:57:02', NULL),
(98, 2025, NULL, NULL, NULL, 4, 1, 0, 'Surat Direktur Utama PT. Bank Sumut Nomor : 078/Dir/SP-SPr/Psh/2025 Tanggal 06 Maret 2025 Perihal Undangan RUPS Tahunan Tahun Buku 2024 PT. Bank Sumut', 'Menghadiri Pembukaan RUPS Tahunan Tahun Buku 2024 PT. Bank Sumut', 2, '2025-03-19', '2025-03-20', 27, 'Mobil Dinas', 'Ballroom PT. Bank Sumut Lt. 10 Jalan Imam Bonjol Nomor 18, Medan', 13, 0, '2025-03-13 11:36:47', '2025-03-17 15:39:08', NULL),
(99, 2025, NULL, NULL, NULL, 4, 1, 0, 'Undangan Kepala Badan Pemeriksa Keuangan Tanggal 12 Maret 2025 tentang Acara Serah Terima Jabatan Kepala BPK Perwakilan Provinsi Sumatera Utara', 'Menghadiri Acara Serah Terima Jabatan Kepala Badan Pemeriksa Keuangan Perwakilan Provinsi Sumatera Utara', 2, '2025-03-17', '2025-03-18', 27, 'Mobil Dinas', 'Auditorium BPK Perwakilan Provinsi Sumatera Utara Jalan Imam Bonjol No. 22 Medan', 13, 0, '2025-03-14 10:05:50', '2025-03-14 10:05:50', NULL),
(100, 2025, NULL, NULL, NULL, 4, 1, 0, 'Peraturan Pemerintah Republik Indonesia Nomor 8 Tahun 2006 tentang Pelaporan Keuangan dan Kinerja Instansi Pemerintah Pasal 11 ayat 3 menyatakan Laporan Keuangan disampaikan oleh Gubernur/ Bupati/ Walikota kepada Badan Pemeriksa Keuangan selambat-lambatnya 3 (tiga) bulan setelah Tahun Anggaran Berakhir', 'Menyerahkan Laporan Keuangan Pemerintah Kabupaten Asahan', 2, '2025-03-25', '2025-03-26', 27, 'Mobil Dinas', 'Badan Pemeriksa Keuangan Perwakilan Provinsi Sumatera Utara', 13, 0, '2025-03-24 10:37:25', '2025-03-24 10:37:25', NULL),
(101, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Penyampaian Laporan Keuangan Pemerintah Daerah (LKPD) Kabupaten Asahan Tahun Anggaran 2024', 2, '2025-03-25', '2025-03-26', 27, 'Mobil Dinas', 'Badan Pemeriksaan Keuangan (BPK) RI Perwakilan Provinsi Sumatera Utara', 6, 0, '2025-03-25 14:08:54', '2025-03-25 14:08:54', NULL),
(102, 2025, NULL, NULL, NULL, 4, 1, 0, '', 'Koordinasi dan Konsultasi terkait Integrasi SIPD Penatausahaan dengan Bank Sumut dalam penerapan SP2D Online', 2, '2025-04-15', '2025-04-16', 27, 'Mobil Dinas', 'PT. Bank Sumut Cabang Utama', 6, 0, '2025-04-14 08:10:03', '2025-04-14 09:06:17', NULL);

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
(16, 19, 7, 4, 49, 3, 530000, 3, '100%', 1590000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(17, 14, 5, 3, 49, 4, 530000, 4, '100%', 2120000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(18, 15, 5, 4, 49, 4, 530000, 4, '100%', 2120000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(19, 70, 30, 3, 33, 2, 370000, 2, '100%', 740000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(20, 71, 30, 4, 33, 2, 370000, 2, '100%', 740000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(21, 72, 30, 5, 33, 2, 370000, 2, '100%', 740000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(24, 79, 33, 4, 31, 1, 370000, 1, '100%', 370000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(25, 80, 33, 4, 31, 1, 370000, 1, '100%', 370000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(26, 81, 34, 4, 31, 1, 370000, 1, '100%', 370000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(27, 82, 34, 4, 31, 1, 370000, 1, '100%', 370000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(28, 77, 32, 3, 49, 4, 530000, 4, '100%', 2120000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(29, 78, 32, 4, 49, 4, 530000, 4, '100%', 2120000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(30, 99, 40, 3, 49, 4, 530000, 1, '100%', 530000, 180000, 3, 540000, 0, 0, 0, 0, 0, 0, 0, 1),
(31, 100, 40, 4, 49, 4, 530000, 1, '100%', 530000, 180000, 3, 540000, 0, 0, 0, 0, 0, 0, 0, 1),
(32, 101, 41, 4, 49, 4, 530000, 1, '100%', 530000, 180000, 3, 540000, 0, 0, 0, 0, 0, 0, 0, 1);

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
(8, 'umum', 'Bagian Kepegawaian', '$2y$10$5oVpza9lK868Yeke/l5o4OsAAvSg/h2bk3g4GOboRb5TKGiEp1PV2', 1, 2, '2024-03-18 15:50:25', '2024-03-18 22:50:25', NULL),
(10, 'sekjen', 'Kepala Badan/ Sekretaris', '$2y$10$AnVul7mE5NHD6srwvEdu2eOZMYu.wo1DdFCGhTCGLq62qgpWbLoXu', 1, 1, '2024-03-18 17:35:35', '2024-03-19 00:35:35', NULL),
(11, 'perbendaharaan', 'Bidang Perbendaharaan', '$2y$10$fKccoG2tDqVOy4DVsk42OeUtmvY1rq.W0y8DEQI2xNXrsdg/EmCIi', 1, 6, '2024-03-27 03:02:16', '2024-03-27 10:02:16', NULL),
(13, 'keuangan', 'Bagian Keuangan', '$2y$10$0Mv/p9CEoDk2xNWeqB.uHe8NpwkUd7eReUVJ2IveACkIeEZc3wlZm', 1, 3, '2024-07-22 04:20:09', '2024-07-22 11:20:09', NULL),
(14, 'arfi', 'Arfi', '$2y$10$0viwuZqDLZ1p2NPZmFua4.A7WMY6PLQWhr5mTtTn0KzOgl4igo2Xq', 1, 6, '2024-08-12 01:54:22', '2024-08-12 08:54:22', NULL),
(15, 'perbend', 'Bidang Perbendaharaan ', '$2y$10$b8gtHzaHUU5PSABXNWAuceFVhFhZc9w6MAKn.85uwz8EtoM3i4AJW', 1, 6, '2024-08-21 03:20:16', '2024-08-21 10:20:16', NULL);

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
  MODIFY `eselon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `jenisperjadins`
--
ALTER TABLE `jenisperjadins`
  MODIFY `jenisperjadin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporjadins`
--
ALTER TABLE `laporjadins`
  MODIFY `laporjadin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `pangkat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `pegawai_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `pejabat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelaksanas`
--
ALTER TABLE `pelaksanas`
  MODIFY `pelaksana_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `perbups`
--
ALTER TABLE `perbups`
  MODIFY `perbup_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `rolemenus`
--
ALTER TABLE `rolemenus`
  MODIFY `rolemenu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spjhotels`
--
ALTER TABLE `spjhotels`
  MODIFY `spjhotel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `spjpesawats`
--
ALTER TABLE `spjpesawats`
  MODIFY `spjpesawat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `spjtaksis`
--
ALTER TABLE `spjtaksis`
  MODIFY `spjtaksi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `spts`
--
ALTER TABLE `spts`
  MODIFY `spt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

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
  MODIFY `uangharian_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
