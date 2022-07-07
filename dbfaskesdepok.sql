-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 08:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaskesdepok1`
--

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor_rating` double DEFAULT NULL,
  `foto1` varchar(40) DEFAULT NULL,
  `foto2` varchar(40) DEFAULT NULL,
  `foto3` varchar(40) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `jumlah_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `alamat`, `latlong`, `jenis_id`, `deskripsi`, `skor_rating`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `jumlah_dokter`, `jumlah_pegawai`) VALUES
(1, 'RS Grha Permata Ibu', 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.3706925,106.8134163', 1, 'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya', 4.8, 'Ruang_Opersai.jpg', 'Ruang_IGD.jpg', 'Ruang_Fisioterapi.jpg', 1, 'https://www.grhapermataibu.com', 80, 200),
(2, 'PrimeCare Clinic Depok', 'Jl. Margonda Raya No.418, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424', '-6.367928, 106.834269', 6, 'Klinik Kesehatan Pratama', 4, 'IMG_20220704_1145341.jpg', 'IMG_20220704_1145451.jpg', 'IMG_20220704_1145551.jpg', 1, 'https://www.alodokter.com/cari-rumah-sakit/pr', 6, 20),
(3, 'Citra Ansana Medika', 'Jl. Nusantara Raya No.170, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421', '-6. 384372,106.814500', 6, 'Menjadi Sarana layanan kesehatan yang baik untuk membantu masyarakat agar lebih meningkatkan kesehatanya', 4, 'IMG_20220704_121734.jpg', 'IMG_20220704_121756.jpg', 'IMG_20220704_121805.jpg', 1, 'https://lewatmana.com/lokasi/38084/klinik-cit', 5, 34),
(4, 'RS Hermina Depok', 'Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '-6.39987,106.825164', 1, 'Untuk menjadi perusahaan yang mengoperasikan jaringan rumah sakit yang tumbuh, sehat dan berumur panjang', 4, 'Ruang_Gigi_Spesialistik.png', 'Ruang_Hemato_Onkologi1.jpg', 'Ruang_Tumbuh_Kembang.png', 2, 'https://herminahospitals.com/', 15, 150),
(5, 'RS Bhayangkara Brimob', 'Jl. Margonda Raya No.1, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16424', '-6.372549,106.831665', 1, 'Merupakan salah satu satuan kerja yang berada dilingkungan mabes Polri pengemban fungsi pendukung dalam menyelenggarakan Pelayanan Kesehatan dan Kedokteran Kepolisian berdasarkan Peraturan Kapolri nomor 11 tahun 2011 tentang Struktur Organisasi dan Tata Cara Kerja Rumah Sakit Bhayangkara', 5, 'kemo_terapi_rs_bhayangkara_brimob.jpg', 'rs_bhayangkara_brimob.jpg', 'ruang_inap_rs_bhayangkara_brimob.jpg', 1, 'https://rsbrimob.com/', 37, 250),
(6, 'RS Universitas Indonesia', 'Jl. Prof. DR. Bahder Djohan, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424', '-6.3699794,106.8287038', 1, 'Rumah Sakit Universitas Indonesia (RSUI) merupakan Rumah Sakit Pendidikan Tinggi Negeri (RS-PTN) pertama di Indonesia yang mempunyai konsep dan rancang bangun fisik dengan Konsep Hijau (Green Hospital Concept) yang ramah lingkungan dan berorientasi sepenuhnya pada keselamatan pasien.', 5, 'ruang_operasi_rsui1.jpg', 'IMG_20220704_113847.jpg', 'IMG_20220704_113901.jpg', 1, 'https://rs.ui.ac.id/umum/', 150, 400),
(7, 'Puskesmas Vila Pertiwi', 'Jl. Komp. Villa Pertiwi No.Blok 1, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415', '-6.419080,106.851121', 4, 'depok yang maju berbudaya dan sejahtera', 5, 'vaksinasi_puskesmas_depok_jaya.jpg', 'IMG_20220704_1145452.jpg', 'Ruang_UGD1.jpg', 3, 'https://pkmvillapertiwi.depok.go.id/', 3, 30),
(8, 'Klinik wijaya kusuma', 'Jl.H.Saman rt 09 rw 08 no, 43, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', '-6.3690496,106.849254', 6, 'MELAYANI LANSIA DENGAN MENINGKATKAN KUALITAS HIDUP', 4, 'IMG_20220704_110749.jpg', NULL, 'Ruang_Audiometri.jpg', 4, 'http://klinikgeriatriwijayakusuma.com/', 4, 32),
(9, 'Puskesmas Tugu Depok', 'Jl. Akses UI, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', '-6.3548629,106.8447785', 4, 'Menjadi Sarana layanan kesehatan yang baik untuk membantu masyarakat agar lebih meningkatkan kesehatanya', 5, 'fasilitas_Lab_rs_tugu_ibu.png', 'fasilitas_rs_tugu_ibu.png', 'Ruang_inap_RS_tugu_ibu.png', 1, 'https://pkmtugu.depok.go.id/', 12, 30),
(10, 'Puskesmas Mekarsari', 'Jl. Tipar Raya No.158 RT. 05/08, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat 16452', '-6.3666442,106.8684081', 4, 'Menjadi Sarana layanan kesehatan yang baik untuk membantu masyarakat agar lebih meningkatkan kesehatanya', 4, 'pelayanan_puskesmas_mekarsari.jpg', 'ruang_inap_puskesmas_mekarsari.jpg', '', 1, 'https://pkmmekarsari.depok.go.id/', 25, 30),
(11, 'Bidan Delima', 'Jalan KHM Usman no: 88A, Jl. K.H.M. Usman No.88, RW.04, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.2871167,106.8768418', 7, 'Elmozza adalah adalah Brad dari sebuah Rumah sehat yang melayani berbagai macam kebutuhan unntuk kesehatan umum seperti Khitanan, Imunisasi, Tumbuh Kembang, Pemeriksaan Kehamilan (ANC),Persalinan Normal Pemeriksaan IVA, Senam Hamil, Baby SPA & Pijat Bayi', 4, 'IMG_20220704_111452.jpg', 'IMG_20220704_111505.jpg', 'RUANG-INAP-1024x768.jpg', 1, 'https://elmozza.net/', 3, 5),
(13, 'Rumah Sakit Tugu Ibu', 'Jl. Raya Jakarta-Bogor No.KM 29, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat 16452', '-6.3567721,106.8577118', 1, 'Menyelenggarakan usaha perumahsakitan dalam pelayanan kesehatan dengan mengelola Rumah Sakit secara baik, menyediakan pelayanan kesehatan bermutu tidak merugi untuk membangun Rumah Sakit Tugu Ibu serta tidak meninggalkan fungsi sosial.', 4, 'Ruang_UGD2.jpg', 'Ruang_Observasi.jpg', 'fasilitas_rs_tugu_ibu1.png', 4, 'https://www.rstuguibu.com/', 41, 398),
(14, 'RSIA Tumbuh Kembang', 'Jl. Raya KM.31 No.23, Cimanggis, Cibinong, Bogor, Jawa Barat 16951', '-6.3716567,106.859185', 1, 'Sebagai pilihan utama dengan pelayanan terbaik untuk kesehatan ibu dan tumbuh kembang anak wilayah Depok', 5, 'rawat_inap_rsia_tumbuh_kembang_depok.jpg', 'ruangan_Lab_rsia_tumbuh_kembang.jpg', 'rsia_tumbuh_kembang.jpg', 4, 'https://www.rsia-tumbuhkembang.co.id/', 26, 80),
(15, 'RS Setya Bhakti', 'Jl. Raya Bogor No.KM.30 No. 35, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat', '-6.4058221,106.7837785', 1, 'RSIA Setya Bhakti merupakan salah rumah sakit yang memberikan layanan spesialis kebidanan, layanan kandungan dan juga layanan anak. ', 4, 'LAB_rs_setya_bhakti_depok.jpg', 'Radiologi_rs_Setya_bhakti_depok.jpg', 'poliklnk_gigi_rs_setya_bhakti_depok.jpg', 4, 'https://www.rsiasetyabhakti.co.id/', 10, 4),
(16, 'RS Meilia', 'Jl. Alternatif Cibubur KM 1, Cimanggis Depok', '-6.3756338,106.8959114', 1, 'Menjadi rumah sakit komunitas dan rujukan bagi instansi kesehatan di wilayah sekitarnya dengan standar nasional', 4, 'Ruang_CT_Scan.jpg', 'Ruang_USG.jpg', 'Ruang_Audiometri1.jpg', 4, 'https://www.rsmeilia.co.id/', 4, 20),
(17, 'Telkomedika Depok (THC)', 'Jl. Kartini No.17, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '-6.403390,106.818880', 6, 'Kegiatan praktek medis dan gigi, Klinik medis', 4, 'IMG_20220704_1112261.jpg', 'IMG_20220704_1112381.jpg', 'IMG_20220704_1112551.jpg', 2, 'https://www.alodokter.com/cari-rumah-sakit/kl', 2, 50),
(18, 'Klinik Bahar Medika I', 'Jl. Dewi Sartika No.48, Pancoran MAS, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '-6.399464,106.815788', 6, 'Klinik Bahar Medika I merupakan sebuah klinik yang berlokasi di Pancoran Mas, Depok, Jawa Barat, Indonesia. Saat ini, dokter-dokter yang melakukan praktek di Klinik Bahar Medika I diantaranya adalah drg. Sri Handayani, drg. Anita Rachmawati, dan dr. Miya Elmira', 5, 'IMG_20220704_1114371.jpg', 'IMG_20220704_1114521.jpg', 'IMG_20220704_1115051.jpg', 2, 'https://www.halodoc.com/rumah-sakit/nama/klin', 3, 96),
(19, 'Puskesmas Depok jaya', 'Jl. Melati Raya No.1 Kel, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432', '-6.3901817,106.8108622', 4, 'Menjadi Sarana layanan kesehatan yang baik untuk membantu masyarakat agar lebih meningkatkan kesehatanya', 5, 'vaksinasi_puskesmas_depok_jaya2.jpg', 'vaksinasi_puskesmas_depok_jaya1.jpg', 'ruang_inap_puskesmaas_depok_jaya.jpg', 2, 'https://pkmdepokjaya.depok.go.id/', 20, 35),
(20, 'Klinik Yani Medika', 'Jl. Kartini No.48, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '-6. 401433,106.818844', 6, 'Klinik Yani Medika merupakan sebuah klinik yang berlokasi di Pancoran Mas, Depok, Jawa Barat, Indonesia. Saat ini, dokter-dokter yang melakukan praktek di Klinik Yani Medika diantaranya adalah dr. Siti Istiqomah, dr. Yusuf Ali Quddusi, dr. Fauzan Ali Zainal Abidin, dan dokter lainnya', 4, 'IMG_20220704_1219471.jpg', 'IMG_20220704_1220021.jpg', 'IMG_20220704_1220221.jpg', 2, 'https://www.konsula.com/id/indonesia/klinik/k', 7, 25),
(21, 'RS Mitra Keluarga', 'Jl. Margonda Raya, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16424', '-6.3941371,106.8211425', 1, 'Rumah Sakit Mitra Keluarga telah sukses membangun jaringan rumah sakit yang dipercaya oleh keluarga Indonesia hari ini. Lebih dari dua puluh lima tahun melayani masyarakat Indonesia, kita telah menghadapi dinamika dalam memberikan layanan kesehatan yang menantang kita untuk terus berupaya lebih baik.', 4, 'CATH_LAB_rs_mitra_keluarga_depok.jpg', '3__Laparoskopi_rs_mitra_keluarga.jpg', 'ruang_inap_rs_mitra_keluarga_depok.jpg', 2, 'https://www.mitrakeluarga.com/', 85, 200),
(22, 'RS Bunda Aliyah Depok', 'Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '-6.405914,106.8166096', 1, 'Menjadi Rumah Sakit pilihan dan rujukan kesehatan ibu dan anak serta mampu bersaing di era globalisasi', 4, 'igd_rs_bunda_aliyah_depok.jpg', 'lab_rs_bunda_aliyah_depok.jpg', 'radiologi_rs_bunda_aliyah_depok.jpg', 2, 'https://www.bundaaliyah.com/', 81, 200),
(23, 'RSIA ASYIFA DEPOK', 'Jalan Raya depok Cinere no 9, Rangkapan Jaya Baru, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434', '-6.3938379,106.7713527', 1, 'menjadi rumah sakit yang baik dalam hal melayani atau merawat pasien yang sedang sakit', 4, 'rsia_asyifa_depok.jpg', 'rsia_asyifa_depok_ruang_inap.jpg', 'icu_rsia.jpg', 2, 'https://rsiaasyifadepok.business.site/', 10, 23),
(24, 'KLINIK AINA MEDIKA SAWANGAN DEPOK', 'Jl. Raihan Perumahan Villa Rizki Ilhami 2 Ruko RC No 11, Pengasinan, Kec. Sawangan, Kota Depok, Jawa Barat 16518', '-6.408162,106.748841', 6, 'Klinik Aina Medika merupakan salah satu klinik yang berada di wilayah Sawangan, Depok. Saat ini, Klinik Aina Medika memiliki layanan dokter umum dan dokter gigi umum. Selain itu, Klinik Aina Medika juga memiliki fasilitas test COVID-19.', 4, 'IMG_20220704_1138351.jpg', 'IMG_20220704_1138471.jpg', 'IMG_20220704_1139011.jpg', 5, 'https://www.halodoc.com/rumah-sakit/nama/klin', 5, 40),
(25, 'RS Permata Depok', 'Jl. Raya Muchtar No.22, Sawangan Baru, Kec. Sawangan, Kota Depok, Jawa Barat 16511', '-6.4019532,106.7688488', 1, 'RS Permata Keluarga Husada Group memiliki rencana untuk pembangunan rumah sakit di berbagai kota di Indonesia. Sistem ini dilakukan untuk memenuhi kebutuhan sarana pelayanan kesehatan yang berkualitas baik dengan komitmen profesionalisme, kejujuran, dan transparansi.', 5, 'ugd_rs_permata_depok.png', 'rawat_inap_rs_permata_depok.jpg', 'lab_rs_permata_depok.jpg', 5, 'https://rspermata.co.id/', 90, 350),
(26, 'RSUD Kota Depok', 'Jl. Raya Muchtar No.99, Sawangan Lama, Kec. Sawangan, Kota Depok, Jawa Barat 16511', '-6.4056393,106.7558522', 1, 'MENJADI RSUD KOTA DEPOK YANG MAJU, BERBUDAYA DAN SEJAHTERA', 5, 'ruang_inap_rsud_depok.jpg', 'ruang_operasi_rsud_depok.jpg', 'lab_rsud_depok.jpg', 5, 'https://rsud.depok.go.id/', 150, 300),
(27, 'Puskesmas Bhakti Jaya', 'Jl. Gama Setia Bar. 9, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16418', '-6.3748507,106.8506394', 4, 'Menjadi Sarana layanan kesehatan yang baik untuk membantu masyarakat agar lebih meningkatkan kesehatanya', 4, 'LAB_rs_setya_bhakti_depok1.jpg', 'Radiologi_rs_Setya_bhakti_depok1.jpg', 'poliklnk_gigi_rs_setya_bhakti_depok1.jpg', 6, 'https://pkmbhaktijaya.depok.go.id/', 14, 45),
(28, 'RS Citra Medika Depok', 'Jl. Pd. Melati I No.52, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16418', '-6.3729367,106.8430516', 1, 'Rumah Sakit Citra Medika Depok bernaung di bawah PT Citra Medika Lestari Jaya. Pembangunan fisik Rumah Sakit Citra Medika Depok bertujuan untuk memberikan pelayanan kesehatan yang komprehensif dengan dukungan teknologi penunjang medis serta fasilitas terbaik kepada masyarakat kota Depok.', 5, 'ruang_inap_rs_citra_medika_depok.jpg', 'Citra_Medika_Depok2.jpg', 'kamar_bersalin_rs_citra_medika_depok.jpg', 6, 'https://citramedikadepok.id/', 80, 150),
(29, 'RS Citra Arafiq ', 'Jl. H. Nadih No.53, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16418', '-6.3728702,106.8438456', 1, 'Instalasi Farmasi sebagai bagian dari Rumah Sakit Citra Arafiq, selain melaksanakan pelayanan kefarmasian yang aman dan berkualitas sesuai standar nasional juga berkomitmen melaksanakan pelayanan kefarmasian.', 4, 'Ruang_Opersai1.jpg', 'RUANG-INAP-1024x7681.jpg', 'Ruang_UGD3.jpg', 6, 'https://citraarafiqhospital.com/', 25, 10),
(30, 'RSU. Hasanah Graha Afiah', 'Jl. Raden Saleh No.42, Sukmajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412', '-6.4081097,106.838209', 1, 'Menjadi rumah sakit pilihan yang terbaik dan terpercaya bagi masyarakat Kota Depok pada tahun 2025', 4, 'Ruang-Inap1.jpg', 'Ruang_Fisioterapi1.jpg', 'Ruang_Hemodialisa.jpg', 6, 'https://rs-hga.co.id/', 7, 16),
(31, 'Bidan Jeanne', 'Jl. H. Salim Jl. Klp. Dua Raya No.89, RT.005/RW.010, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', '-6.3595689,106.8466293', 7, 'melayani masyarakat yang sedang membutuhkan pengobatan', 5, 'bidan_jeane.jpg', 'bidan_jeane_fasilitas.jpg', 'foto_bidan_jeane.jpg', 4, 'https://www.bidanmaya.com/info/jadwal-praktek', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(1, 'Rumah Sakit'),
(4, 'Puskesmas'),
(6, 'Klinik'),
(7, 'Bidan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(3, 'Cilodong'),
(4, 'Cimanggis'),
(5, 'Sawangan'),
(6, 'Sukmajaya'),
(7, 'Cinere');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `faskes_id` int(11) DEFAULT NULL,
  `nilai_rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `faskes_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'layanan nya baik', 2, 1, 4),
(2, '2022-07-06', 'Fasilitasnya sangat bagus', 1, 3, 4),
(3, '2022-07-06', 'Acnya dingin', 1, 3, 4),
(4, '2022-07-06', 'kamar mandinya bersih', 1, 3, 4),
(6, '2022-07-07', 'pelayanan yang diterpan sangat lah bagus dan cepat', 1, 5, 5),
(7, '2022-07-07', 'sangat bagus dalam pelayanannya', 1, 4, 4),
(8, '2022-07-07', 'sangat bagus dalam pelayanannya', 1, 4, 4),
(9, '2022-07-07', 'kualitas pelayanannya sangat bagus dan higenis', 4, 6, 5),
(10, '2022-07-07', 'sangat ramah pelayanannya', 4, 13, 4),
(11, '2022-07-07', 'terbaik dalam hal penganan pasien', 4, 14, 5),
(12, '2022-07-07', 'fasilitasnya lengkap', 4, 15, 4),
(13, '2022-07-07', 'keren', 4, 16, 4),
(14, '2022-07-07', 'terbaik', 4, 21, 4),
(15, '2022-07-07', 'bagus banget luar baiasa ni rs', 4, 22, 4),
(16, '2022-07-07', 'perlengkapanya lengkap', 4, 23, 4),
(17, '2022-07-07', 'sangat bagus kualotas rumah sakitnya', 4, 25, 5),
(18, '2022-07-07', 'fasilitasnya sangat lengkap', 4, 26, 5),
(19, '2022-07-07', 'sangat bagus dalam berbagai pelayannnya', 4, 28, 5),
(20, '2022-07-07', 'rumah sakitnya sangat disiplin dan mengkedepankan kepentingan pasien', 4, 29, 4),
(21, '2022-07-07', 'bagus ni rumah sakit rekomended', 4, 30, 4),
(22, '2022-07-07', 'bagus banget rekomen sekali rsnya', 4, 7, 5),
(23, '2022-07-07', 'pelayannya  bagus', 4, 9, 5),
(24, '2022-07-07', 'gg pelayannya', 4, 10, 4),
(25, '2022-07-07', 'bagus puskesmasnya', 4, 19, 5),
(26, '2022-07-07', 'kualitasnya lengkap', 4, 27, 4),
(27, '2022-07-07', 'obatnya lengkap', 4, 2, 4),
(28, '2022-07-07', 'klinniknya bagus', 4, 8, 4),
(29, '2022-07-07', 'sangat baik dalam pemeriksaan', 4, 17, 4),
(30, '2022-07-07', 'obatnya lengkap', 4, 18, 5),
(31, '2022-07-07', 'bagus kliniknya rekomended', 4, 20, 4),
(32, '2022-07-07', 'bagus sekali kliniknya', 4, 24, 4),
(33, '2022-07-07', 'pelayananya bagus', 4, 11, 4),
(34, '2022-07-07', 'bidanya baik dalam ngelayanin', 4, 31, 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rating`
--

CREATE TABLE `nilai_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:32:05', '2022-06-12 00:32:05', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:32:06', '2022-06-12 00:32:06', 1, 'public'),
(4, 'daffa', '827ccb0eea8a706c4c34a16891f84e7b', 'daffa@gmail.com', NULL, NULL, NULL, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  ADD KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`faskes_id`),
  ADD KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`);

--
-- Indexes for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`faskes_id`) REFERENCES `faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
