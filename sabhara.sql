-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2025 at 08:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabhara`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_sakas`
--

CREATE TABLE `anggota_sakas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'nonaktif',
  `masa_jabatan_mulai` date DEFAULT NULL,
  `masa_jabatan_selesai` date DEFAULT NULL,
  `sekolah` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `pekerjaan_ortu` varchar(255) NOT NULL,
  `hobi` text DEFAULT NULL,
  `tinggi_badan` decimal(5,2) NOT NULL,
  `berat_badan` decimal(5,2) NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `file_pernyataan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota_sakas`
--

INSERT INTO `anggota_sakas` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `jabatan`, `status`, `masa_jabatan_mulai`, `masa_jabatan_selesai`, `sekolah`, `nama_ortu`, `pekerjaan_ortu`, `hobi`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `foto`, `file_pernyataan`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Jepara', '2025-07-18', 'L', 'JL. Raya Jepara No.209 RT 006/002, Perang, Prambatan Lor, Kec.Kaliwungu, Kabupaten Kudus, Jawa Tengah 59332', '085123456789', 'user@gmail.com', 'Ketua Dewan Saka', 'nonaktif', '2025-07-18', '2026-07-18', 'SMA', 'YWO', 'KWO', 'Menulis', '170.00', '60.00', 'A', 'storage/foto_profil/T4mvXZC2Y2rcHwZ5qEkRWAo0i4ZO1QH83GfN3pau.jpg', 'storage/file_pernyataan/nC6ywuLbgo66Lk0u04F2laVsZhq3R6aS041AiU5m.docx', '2025-07-18 01:22:26', '2025-07-19 11:45:33'),
(3, 'Timmy', 'Jepara', '2025-07-11', 'P', 'JL. Raya Jepara No.209 RT 006/002, Perang, Prambatan Lor, Kec.Kaliwungu, Kabupaten Kudus, Jawa Tengah 59332', '085123456789', 'timothy09@example.net', 'Anggota Dewan Saka', 'nonaktif', '2024-07-20', '2025-07-20', 'SWQ', 'QQQ', 'AAA', 'Menulis', '170.00', '66.00', 'AB', 'storage/foto_profil/GS8r74oTpSXmVD7mVmvXxa75SN3aOhMk5yFbRGpU.png', 'storage/file_pernyataan/7yxZAzusCZl8RVNrxlMMaa0gwcaBkx4jMeDcICec.docx', '2025-07-18 02:44:58', '2025-07-19 11:45:22'),
(4, 'Ahmad Fauzan', 'Jepara', '2005-03-10', 'L', 'Jl. Merdeka No.12', '081234567890', 'ahmad.fauzan@email.com', 'Ketua Dewan Saka', 'aktif', '2025-07-20', '2026-07-20', 'SMA Negeri 1 Jepara', 'Budi Santoso', 'Petani', 'Sepak Bola', '170.00', '60.00', 'O', 'storage/foto_profil/nCHcwOr2aNUiFwJweM68EWZ8hjQvJ2vjubPFKCAx.png', 'pernyataan1.pdf', '2025-07-19 01:00:00', '2025-07-19 11:41:14'),
(5, 'Siti Aminah', 'Kudus', '2006-06-21', 'P', 'Jl. Pahlawan No.8', '082345678901', 'siti.aminah@email.com', 'Wakil Ketua Dewan Saka', 'aktif', '2025-07-20', '2026-07-20', 'SMA Negeri 2 Kudus', 'Sumarni', 'Guru', 'Membaca', '160.00', '52.00', 'A', 'storage/foto_profil/gzP0nuQc4YpijhqSD6Xkr9iiuBx3TJnEHp2Wb6r0.png', 'pernyataan2.pdf', '2025-07-19 01:10:00', '2025-07-19 11:42:32'),
(6, 'Rizky Maulana', 'Jepara', '2005-11-05', 'L', 'Jl. Kartini No.5', '083456789012', 'rizky.maulana@email.com', 'Sekretaris', 'aktif', '2025-07-20', '2025-07-20', 'SMK Negeri 1 Jepara', 'Agus Maulana', 'Pedagang', 'Fotografi', '175.00', '65.00', 'B', 'storage/foto_profil/QtpIoX8bdsi0DJuQBBcYEctgsuLBLjPkad3mAUJH.png', 'pernyataan3.pdf', '2025-07-19 01:20:00', '2025-07-19 11:43:26'),
(7, 'Dewi Lestari', 'Pati', '2006-01-15', 'P', 'Jl. Ahmad Yani No.9', '081567890123', 'dewi.lestari@email.com', 'Bendahara', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 1 Pati', 'Slamet', 'Wiraswasta', 'Menggambar', '158.00', '50.00', 'AB', 'storage/foto_profil/IMFmzINF5Sn63XGBo0go7I7qflDWfXaJwcjB21WF.png', 'pernyataan4.pdf', '2025-07-19 01:30:00', '2025-07-19 11:44:05'),
(8, 'Budi Santoso', 'Jepara', '2005-07-30', 'L', 'Jl. Veteran No.10', '082678901234', 'budi.santoso@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 1 Jepara', 'Suparno', 'PNS', 'Bola Voli', '172.00', '68.00', 'O', 'storage/foto_profil/BfVpLjXJHrq6RGOyfy399uwH59klupny5mJcoHHT.png', 'pernyataan5.pdf', '2025-07-19 01:40:00', '2025-07-19 11:44:40'),
(9, 'Fitri Handayani', 'Jepara', '2006-09-22', 'P', 'Jl. Diponegoro No.3', '083789012345', 'fitri.handayani@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMK Negeri 2 Jepara', 'Hasan', 'Petani', 'Menyanyi', '162.00', '54.00', 'A', 'storage/foto_profil/Du5WonCTGYYgbZntxsGkaZ2qZn9DtJEKWdtxh2KA.png', 'pernyataan6.pdf', '2025-07-19 01:50:00', '2025-07-19 11:46:08'),
(10, 'Hendra Gunawan', 'Kudus', '2005-12-11', 'L', 'Jl. Slamet Riyadi No.7', '081890123456', 'hendra.gunawan@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 3 Kudus', 'Dedi', 'Tukang Kayu', 'Sepak Bola', '173.00', '66.00', 'B', 'storage/foto_profil/W63H4VchA05SGp5w6piPTex2ZZ0kQbbgCYehHV5p.png', 'pernyataan7.pdf', '2025-07-19 02:00:00', '2025-07-19 11:46:45'),
(11, 'Maya Sari', 'Pati', '2006-04-03', 'P', 'Jl. Sultan Agung No.4', '082901234567', 'maya.sari@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 2 Pati', 'Sutrisno', 'Guru', 'Membaca', '159.00', '51.00', 'AB', 'storage/foto_profil/WWQahKfWJk4qBFZYORbXIsaZNGtXB5s2ImmWzDv7.png', 'pernyataan8.pdf', '2025-07-19 02:10:00', '2025-07-19 11:47:37'),
(12, 'Adi Nugroho', 'Jepara', '2005-08-19', 'L', 'Jl. Diponegoro No.6', '083012345678', 'adi.nugroho@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMK Negeri 1 Jepara', 'Joko', 'Wiraswasta', 'Memancing', '174.00', '67.00', 'O', 'storage/foto_profil/R2mLg6azcxrF1NzNaNMW9iQRWDnlBgNDha9I36d2.png', 'pernyataan9.pdf', '2025-07-19 02:20:00', '2025-07-19 11:48:02'),
(13, 'Ratna Wulandari', 'Kudus', '2006-05-27', 'P', 'Jl. Pemuda No.2', '081123456789', 'ratna.wulandari@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 3 Kudus', 'Hartono', 'Pedagang', 'Menulis', '161.00', '53.00', 'A', 'storage/foto_profil/EsspmLNPvhzsHOBM5IPT3KRDz9jHTu5mUFvP7sxr.png', 'pernyataan10.pdf', '2025-07-19 02:30:00', '2025-07-19 11:48:32'),
(14, 'Arif Setiawan', 'Jepara', '2005-10-14', 'L', 'Jl. Sudirman No.11', '082234567890', 'arif.setiawan@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 1 Jepara', 'Suharto', 'PNS', 'Bersepeda', '171.00', '64.00', 'B', 'storage/foto_profil/D4jjF7g2I6slkeilenkeNiZwhLsPLU5K2s7nouam.png', 'pernyataan11.pdf', '2025-07-19 02:40:00', '2025-07-19 11:49:07'),
(15, 'Intan Permata', 'Pati', '2006-02-28', 'P', 'Jl. Hasanuddin No.8', '083345678901', 'intan.permata@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMK Negeri 2 Pati', 'Rahmat', 'Petani', 'Menggambar', '160.00', '52.00', 'AB', 'storage/foto_profil/qKvUAim3t9gQEgY8vEmBD88D15xBFVrgclD6cvG7.png', 'pernyataan12.pdf', '2025-07-19 02:50:00', '2025-07-19 11:49:39'),
(16, 'Joko Prasetyo', 'Jepara', '2005-06-17', 'L', 'Jl. Ahmad Yani No.12', '081456789012', 'joko.prasetyo@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 1 Jepara', 'Suyono', 'Tukang Kayu', 'Memancing', '175.00', '70.00', 'O', 'storage/foto_profil/ZPOlm6iSrd8q1TiLrJQlNMTGyjpuiC0LOtFLjOj5.png', 'pernyataan13.pdf', '2025-07-19 03:00:00', '2025-07-19 11:50:35'),
(17, 'Lina Marlina', 'Kudus', '2006-07-09', 'P', 'Jl. Diponegoro No.7', '082567890123', 'lina.marlina@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMA Negeri 3 Kudus', 'Wati', 'Guru', 'Menyanyi', '158.00', '50.00', 'A', 'storage/foto_profil/WZW61Um1halipvApWBzsvgaQmLsZgBOIvd7CrCRG.png', 'pernyataan14.pdf', '2025-07-19 03:10:00', '2025-07-19 11:51:06'),
(18, 'Dedi Kurniawan', 'Pati', '2005-09-23', 'L', 'Jl. Pemuda No.9', '083678901234', 'dedi.kurniawan@email.com', 'Anggota Dewan Saka', 'aktif', '2025-07-20', '2025-07-20', 'SMK Negeri 2 Pati', 'Santoso', 'Wiraswasta', 'Sepak Bola', '172.00', '68.00', 'B', 'storage/foto_profil/tjhJGlgx0c0M5Dj5iyaCscbYtszcbVv8FR7EVcka.png', 'pernyataan15.pdf', '2025-07-19 03:20:00', '2025-07-19 11:51:35'),
(19, 'Timmy Tinder Andova', 'Jepara', '2006-11-11', 'L', 'JL. Raya Jepara No.209 RT 006/002, Perang, Prambatan Lor, Kec.Kaliwungu, Kabupaten Kudus, Jawa Tengah 59332', '085123456789', 'timothy09@example.net', NULL, 'nonaktif', NULL, NULL, 'SMA Swalayan', 'Danie', 'WNI', 'Menulis', '170.00', '66.00', 'B', 'storage/foto_profil/EmlOmE2lckRExzjYmeJD4LTsBXjv0CKzxzaBQiLe.png', 'storage/file_pernyataan/P4hfNJfchddRN4S1q6qBi0Vh1gGFCeMH1HZIbD8k.docx', '2025-07-19 12:10:51', '2025-07-19 12:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `author`, `judul`, `deskripsi`, `foto`, `lokasi`, `kategori`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Rizal', 'Kemah Sabhara', 'Kegiatan kemah saka bhayangkara dalam hut Polisi di Jepara', 'kegiatan/HO54bDpSeQ4YY67WmmVpMkpKdAbLGeJ2YjcdMgTu.png', 'Pantai Kartini', 'khusus', '2025-07-19', '2025-07-18 11:38:36', '2025-07-18 12:00:47'),
(3, 'Abdul', 'Kemah Saka Bhayangkara', 'Kegiatan ini merupakan bagian dari Kemah Saka Bhayangkara yang diselenggarakan dalam rangka memperingati Hari Ulang Tahun (HUT) Kepolisian Republik Indonesia. Bertempat di Pantai Kartini, Jepara, kemah ini diikuti oleh anggota Pramuka dari berbagai gugus depan yang tergabung dalam Saka Bhayangkara. Tujuan dari kegiatan ini adalah untuk membentuk generasi muda yang disiplin, bertanggung jawab, serta memiliki jiwa kepemimpinan dan kepedulian sosial tinggi.\r\n\r\nSelama kegiatan, para peserta mendapatkan berbagai pelatihan dan materi yang berhubungan dengan tugas-tugas kepolisian, seperti pengenalan tentang keamanan dan ketertiban masyarakat (kamtibmas), pelatihan baris-berbaris, pertolongan pertama gawat darurat, simulasi penanganan kebencanaan, serta pemahaman tentang lalu lintas dan bahaya narkoba. Selain pelatihan teknis, peserta juga mengikuti kegiatan kepramukaan seperti api unggun, diskusi kelompok, senam pagi, serta renungan malam yang menumbuhkan rasa nasionalisme dan kebersamaan.\r\n\r\nFoto yang ditampilkan menunjukkan sekelompok peserta berdiri dalam formasi rapi, mengenakan seragam lengkap Saka Bhayangkara, dengan sikap siap dan penuh semangat. Mereka sedang mengikuti apel pembukaan kegiatan, yang menjadi momen simbolis dimulainya rangkaian acara kemah.\r\n\r\nKegiatan ini tidak hanya memberikan pengalaman baru bagi para peserta, tetapi juga mempererat hubungan antara generasi muda dan aparat kepolisian dalam upaya menciptakan lingkungan yang aman, tertib, dan sadar hukum.', 'kegiatan/ukD0aJhnNt6NXPxCvApsjqerV8tg2gYGWWl3Hwy0.png', 'Pantai Kartini, Jepara', 'Khusus', '2025-03-05', '2025-07-19 10:45:05', '2025-07-19 10:45:05'),
(4, 'Iqbla', 'Buka Bersama Saka Bhayangkara', 'Kegiatan buka puasa bersama ini merupakan salah satu momen penting dalam rangka mempererat tali silaturahmi antara anggota Saka Bhayangkara, pembina, serta jajaran kepolisian Polres Jepara. Acara ini diselenggarakan di halaman kantor Polres, dengan konsep sederhana namun penuh makna kekeluargaan.\r\n\r\nKegiatan diawali dengan doa bersama dan tausiyah singkat yang disampaikan oleh tokoh agama, dilanjutkan dengan penyajian hidangan buka puasa khas tradisional, termasuk tumpeng sebagai simbol rasa syukur atas kebersamaan dan keberkahan Ramadan. Dalam suasana yang hangat dan akrab, para peserta duduk melingkar di atas tikar, saling berbagi cerita, dan menikmati hidangan bersama-sama.\r\n\r\nKebersamaan yang terjalin dalam momen ini bukan hanya memperkuat hubungan emosional antarpeserta, tetapi juga menjadi sarana efektif membentuk karakter positif, seperti empati, kerendahan hati, dan semangat gotong royong. Melalui kegiatan ini, nilai-nilai kedisiplinan, kebersatuan, dan kekeluargaan semakin tertanam kuat dalam diri anggota muda Saka Bhayangkara, sejalan dengan semangat pengabdian kepada masyarakat dan bangsa.', 'kegiatan/gsPH6PzgIvDwSLXFtLo296c8Yq97CHcDroe7n6vE.png', 'Polsek Mayong, Jepara', 'Khusus', '2025-04-16', '2025-07-19 10:49:22', '2025-07-19 10:49:22'),
(5, 'Abdul', 'Silaturahmi Idul Fitri ke Pamong Saka', 'Kegiatan silaturahmi ini merupakan bagian dari tradisi tahunan anggota Saka Bhayangkara dalam momen Hari Raya Idul Fitri. Bertempat di kediaman salah satu pamong Saka Bhayangkara, kegiatan ini diikuti oleh seluruh anggota beserta pembina, yang datang dengan penuh semangat kekeluargaan untuk saling memaafkan dan mempererat ikatan emosional antaranggota.\r\n\r\nDalam suasana penuh kehangatan, para peserta saling bersalaman dan mengucapkan \"mohon maaf lahir dan batin\", dilanjutkan dengan duduk bersama untuk berbincang santai, mengenang momen-momen kegiatan selama satu tahun terakhir, serta menyampaikan harapan dan rencana kegiatan ke depan. Kegiatan ini juga menjadi wadah memperkuat hubungan antara anggota dengan pamong, yang selama ini menjadi pembimbing dan panutan dalam kegiatan kepramukaan.\r\n\r\nFoto yang diambil memperlihatkan kebersamaan seluruh peserta yang berpose rapi dengan tangan terkatup, simbol dari kerendahan hati dan ketulusan dalam meminta dan memberi maaf. Momen ini mencerminkan nilai-nilai luhur kepramukaan seperti persaudaraan, sopan santun, dan penghormatan terhadap orang yang lebih tua.\r\n\r\nMelalui kegiatan silaturahmi ini, Saka Bhayangkara tidak hanya mempererat tali persaudaraan internal, tetapi juga menanamkan pentingnya menjaga hubungan sosial dan budaya dalam masyarakat, sesuai dengan semangat pengabdian dan kedisiplinan yang menjadi jiwa gerakan Pramuka.', 'kegiatan/kpnjYJA2BrqXsp7GFwgt299jYrezhhK6baL7P6na.png', 'Rumah Pamong Saka Bhayangkara', 'Khusus', '2025-05-05', '2025-07-19 10:51:12', '2025-07-19 10:51:12'),
(6, 'Abdul', 'Reuni Akbar Seluruh Angkatan', 'Kegiatan Reuni Akbar ini mempertemukan kembali seluruh angkatan anggota Saka Bhayangkara Polsek Mayong dari berbagai generasi dalam satu momen kebersamaan yang penuh kehangatan dan nostalgia. Acara yang berlangsung di sebuah rumah makan dengan nuansa kekeluargaan ini menjadi ajang temu kangen, berbagi cerita, dan mempererat tali persaudaraan yang telah terjalin selama bertahun-tahun sejak masa aktif di kepramukaan.\r\n\r\nDengan mengusung tema “Temu Kangen Sedulur Saklawase,” reuni ini bukan hanya sekadar pertemuan biasa, melainkan juga bentuk penghormatan terhadap sejarah, pengalaman, dan nilai-nilai kebersamaan yang ditanamkan selama menjadi bagian dari Saka Bhayangkara. Peserta hadir dengan semangat yang tinggi, mengenakan seragam khas satuan karya, serta membawa semangat kekompakan yang tidak lekang oleh waktu.\r\n\r\nBerbagai sesi kegiatan seperti sambutan dari pembina senior, pemotongan tumpeng, ramah tamah, hingga sesi foto bersama turut memeriahkan acara. Momen ini menjadi ruang refleksi tentang pentingnya persahabatan lintas generasi, sekaligus motivasi untuk terus menjaga kontribusi positif di masyarakat, sesuai dengan semangat pengabdian yang telah menjadi ruh dari Saka Bhayangkara.\r\n\r\nFoto yang ditampilkan menunjukkan antusiasme para peserta dengan spanduk bertuliskan “REONI AKBAR – Temu Kangen Sedulur Saklawase” yang menjadi simbol kuatnya ikatan batin antaranggota, meskipun waktu dan jarak telah memisahkan mereka.', 'kegiatan/VVyWFcXo7ynBHXqcTCueJzeVVNjQnCcmD9qpmk4w.png', 'Bungu – Jepara', 'Umum', '2025-06-10', '2025-07-19 10:53:53', '2025-07-19 10:53:53'),
(7, 'Iqbal', 'Kemah Prasbara Polres Jepara', 'Kegiatan ini merupakan Perkemahan Saka Bhayangkara tingkat Kwartir Cabang Jepara yang diselenggarakan di halaman Mapolres Jepara. Dikenal sebagai Kemah Prasbara (Pramuka Satuan Karya Bhayangkara), acara ini menjadi ajang tahunan yang mempertemukan perwakilan dari berbagai satuan Saka Bhayangkara di wilayah Kabupaten Jepara.\r\n\r\nSelama beberapa hari, peserta mengikuti berbagai kegiatan edukatif, kompetitif, dan pembinaan karakter yang berfokus pada kedisiplinan, keterampilan kepolisian, serta kepemimpinan di kalangan generasi muda. Di antaranya adalah pelatihan PBB (peraturan baris-berbaris), simulasi penanganan kecelakaan lalu lintas, pertolongan pertama, penanggulangan bencana, dan lomba ketangkasan baris-berbaris serta pengetahuan umum kepramukaan.\r\n\r\nPuncak kegiatan ditandai dengan upacara penutupan yang dilangsungkan secara resmi, ditandai dengan penyerahan piala kepada tim-tim terbaik dalam berbagai kategori lomba. Foto ini menangkap momen kebanggaan seluruh anggota kontingen, baik peserta maupun pembina, yang berhasil meraih berbagai prestasi. Dengan berpose bersama piala hasil jerih payah mereka, semangat kebersamaan dan prestasi begitu terpancar dari wajah-wajah bahagia para anggota.\r\n\r\nKemah Prasbara ini tidak hanya memperkuat identitas kepramukaan di bawah naungan Saka Bhayangkara, tetapi juga menanamkan nilai-nilai kebangsaan, kerja sama tim, serta semangat pengabdian kepada masyarakat—sejalan dengan visi besar Gerakan Pramuka dan Kepolisian Negara Republik Indonesia.', 'kegiatan/XodinMNsBvcIqrXV1TUF6nj8dwx80FqssXlZuzTd.png', 'Polres Jepara', 'Khusus', '2025-07-01', '2025-07-19 10:56:30', '2025-07-19 10:56:30'),
(8, 'Fizi', 'Pemilihan Ketua & Wakil Ketua Saka Bhayangkara', 'Kegiatan ini merupakan proses demokratis dalam organisasi Pramuka Saka Bhayangkara Polsek Mayong, yakni pemilihan Ketua dan Wakil Ketua baru untuk masa bakti selanjutnya. Bertempat di aula Mapolsek Mayong, pemilihan dilakukan secara langsung oleh anggota aktif Saka Bhayangkara melalui mekanisme musyawarah dan pemungutan suara.\r\n\r\nDari hasil pemilihan, terpilih Rifaldy sebagai Ketua dan Siti Amanah sebagai Wakil Ketua. Keduanya dikenal sebagai anggota aktif yang berdedikasi tinggi, memiliki jiwa kepemimpinan, serta mampu menjadi panutan bagi rekan-rekannya. Dalam foto yang ditampilkan, mereka berdiri tegap dengan penuh percaya diri di depan pesan motivasi yang menjadi filosofi kedisiplinan dan tanggung jawab anggota Saka Bhayangkara.\r\n\r\nKegiatan ini bukan hanya menjadi simbol regenerasi dalam kepemimpinan organisasi, tetapi juga menjadi ajang pembelajaran langsung bagi para anggota tentang pentingnya demokrasi, tanggung jawab kolektif, dan kepercayaan dalam sebuah organisasi. Dengan terpilihnya pemimpin baru, diharapkan Saka Bhayangkara Polsek Mayong dapat terus tumbuh menjadi wadah pembinaan karakter pemuda yang unggul, disiplin, dan berkontribusi positif bagi masyarakat.', 'kegiatan/KvP9sLVTvL6SzUFDugjqOBzmQ6wrKBFXt6IpnJwU.png', 'Polsek Mayong', 'Khusus', '2025-07-16', '2025-07-19 10:59:11', '2025-07-19 10:59:11'),
(9, 'Abdul', 'Pengarah Anggota Baru Saka Bhayangkara', 'Kegiatan pengarahan anggota baru Saka Bhayangkara dilaksanakan di Polsek Mayong sebagai persiapan sebelum para anggota membantu pengamanan lalu lintas pada malam Tahun Baru. Pada sesi ini, anggota baru diberikan pemahaman mengenai tugas dan tanggung jawab dalam pengamanan serta tata cara berkomunikasi dan bertindak di lapangan.\r\n\r\nPengarahan ini bertujuan untuk memastikan seluruh anggota baru siap secara mental dan teknis dalam membantu menjaga ketertiban serta kelancaran arus lalu lintas selama perayaan Tahun Baru. Selain itu, para anggota juga diberi pengarahan tentang pentingnya kedisiplinan, kerja sama tim, dan sikap profesional dalam menjalankan tugas.\r\n\r\nKegiatan ini merupakan langkah awal untuk memperkuat peran serta anggota baru dalam mendukung kepolisian menjaga keamanan dan kenyamanan masyarakat pada momen penting tersebut. Dengan adanya pengarahan ini, diharapkan anggota baru dapat menjalankan tugasnya dengan optimal dan memberikan kontribusi positif bagi keselamatan bersama.', 'kegiatan/kb3gPJ0d5NJdLDCpBrNLXVOGDNcXXioMHyoku5VK.jpg', 'Polsek Mayong', 'Khusus', '2024-12-25', '2025-07-19 11:03:50', '2025-07-19 11:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_07_18_074006_create_anggota_sakas_table', 2),
(6, '2025_07_18_155442_create_kegiatans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '$2y$12$atqiZeRNpE/kDgppyog2QOvMRDv7Pp0t9nY81IaHRAHiyZAFVWmxS', 'aktif', NULL, '2025-07-17 10:45:52', '2025-07-18 11:03:51'),
(2, 'Augustus Balistreri', 'timothy09@example.net', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'fFVbdiemSI5NbGDS3CAPemICtXkHIqYiroTs2MWf3cSEZasBSxr7vzHOvSvR', '2025-07-17 10:45:52', '2025-07-18 08:42:31'),
(3, 'Miss Elva Sporer II', 'mollie.wolf@example.com', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', '4uoxh9Yvk6', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(4, 'Prof. Tyson Romaguera DDS', 'mckenzie.kasandra@example.com', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'sck344os1t', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(5, 'Zoey Kautzel', 'heloise.bernier@example.org', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'SNyX5Q2suQghhWsWk50OkpVfHjZJ8KBptYzopWV5trbY9MXB4CbkQ4W585u8', '2025-07-17 10:45:52', '2025-07-19 00:20:41'),
(6, 'Arely Hayes', 'mstanton@example.net', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'Qw6DeULUhb', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(7, 'Ray Waters', 'qrutherford@example.com', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'sytJVv6AWZ', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(8, 'Catharine Smith', 'gleichner.amelia@example.org', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'XJSqpkZCbk', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(9, 'Dr. Derrick Morar', 'aletha94@example.net', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'XfwbIAajh6', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(10, 'Rhett Marvin', 'miracle26@example.org', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'fXvqfmIw7k', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(11, 'Camila Jenkins', 'yhane@example.net', 'user', '$2y$12$.99vlKI4KBdSxS6b7cp6ee2lXPXYf.cdEbYQSzdbMlDxS6SO/Atj2', 'nonaktif', 'bo9KCXZApz', '2025-07-17 10:45:52', '2025-07-17 10:45:52'),
(12, 'user', 'user@gmail.com', 'user', '$2y$12$YgLBKjH3/vx/NgOjQISxreOBbWDr5aWcI8Rw9gW35MdeaKxj2zvdu', 'aktif', NULL, '2025-07-17 11:01:52', '2025-07-17 11:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_sakas`
--
ALTER TABLE `anggota_sakas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_sakas`
--
ALTER TABLE `anggota_sakas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
