-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 03, 2021 at 10:49 AM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` int NOT NULL,
  `Judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `id_user`, `Judul`, `description`, `content`, `cover`, `created_at`, `updated_at`) VALUES
(6, 1, 'Gejala Corona Varian Delta yang Dianggap Mampu Menular dengan Berpapasan', 'Tipe covid yang angat menular, tetapi tidak terlalu mamtikan,Gejala Corona Varian Delta yang Dianggap Mampu Menular dengan Berpapasan', '<p><strong style=\"box-sizing: content-box; color: #444444; font-family: helvetica, arial, sans-serif; font-size: 16px; background-color: #ffffff;\">Jakarta</strong><span style=\"color: #444444; font-family: helvetica, arial, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;-&nbsp;</span></p>\r\n<p style=\"box-sizing: content-box; margin-top: 0px; margin-bottom: 20px; font-size: 16px; line-height: 22.4px; color: #444444; display: inline; font-family: helvetica, arial, sans-serif; background-color: #ffffff;\"><a style=\"box-sizing: content-box; background: transparent; transition: all 200ms linear 0s; text-decoration-line: none; color: #178070; font-weight: bold; font-style: italic;\" href=\"https://www.detik.com/tag/varian-delta\">Varian Delta&nbsp;</a>yang awalnya ditemukan di India kini telah menyebar di seluruh dunia, salah satunya Indonesia. Organisasi Kesehatan Dunia (WHO) telah menyatakan varian tersebut terdeteksi di lebih dari 80 negara dan terus bermutasi saat menyebar.</p>\r\n<p style=\"box-sizing: content-box; margin-top: 16px; margin-bottom: 20px; font-size: 16px; line-height: 22.4px; color: #444444; font-family: helvetica, arial, sans-serif; background-color: #ffffff;\">Penelitian telah menunjukkan varian ini bahkan lebih menular daripada varian lainnya. Bahkan varian ini disebut bisa menular hanya dalam beberapa detik.</p>\r\n<p style=\"box-sizing: content-box; margin-top: 0px; margin-bottom: 20px; font-size: 16px; line-height: 22.4px; color: #444444; font-family: helvetica, arial, sans-serif; background-color: #ffffff;\">Pejabat WHO juga mengatakan ada laporan bahwa varian Delta menyebabkan gejala yang lebih parah, tetapi penelitian lebih lanjut diperlukan untuk mengkonfirmasi kesimpulan tersebut.</p>', 'cov19.jpeg', '2021-06-27 05:58:56', '2021-06-27 05:58:56'),
(7, 1, 'Jujitsu Kaisen', 'Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak bulan Maret 2018, dan telah diterbitkan menjadi enam belas volume tankōbon per bulan Juni 2021</span></p>', 'jujisu.jpg', '2021-06-27 06:03:42', '2021-06-27 06:03:42'),
(8, 1, 'My Hero Academia', 'My Hero Academia, adalah sebuah seri manga shōnen Jepang bertema pahlawan super yang ditulis dan diilustrasikan oleh Kōhei Horikoshi', '<p style=\"margin: 0.5em 0px; color: #202122; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\"><em><strong>Boku no Hero Academia</strong></em>&nbsp;(<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Bahasa Jepang\" href=\"https://id.wikipedia.org/wiki/Bahasa_Jepang\">bahasa Jepang</a>:&nbsp;<span lang=\"ja\">僕のヒーローアカデミア</span>&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Romanisasi Hepburn\" href=\"https://id.wikipedia.org/wiki/Romanisasi_Hepburn\">Hepburn</a>:&nbsp;<em>Boku no Hīrō Akademia</em>), yang diterbitkan di Indonesia dengan judul&nbsp;<em><strong>My Hero Academia</strong></em>, adalah sebuah seri&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Manga\" href=\"https://id.wikipedia.org/wiki/Manga\">manga</a>&nbsp;<em><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Manga shōnen\" href=\"https://id.wikipedia.org/wiki/Manga_sh%C5%8Dnen\">shōnen</a></em>&nbsp;Jepang bertema&nbsp;<a class=\"new\" style=\"text-decoration-line: none; color: #ba0000; background: none;\" title=\"Fiksi pahlawan super (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Fiksi_pahlawan_super&amp;action=edit&amp;redlink=1\">pahlawan super</a>&nbsp;yang ditulis dan diilustrasikan oleh&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Kōhei Horikoshi\" href=\"https://id.wikipedia.org/wiki/K%C5%8Dhei_Horikoshi\">Kōhei Horikoshi</a>. Manga ini mulai dimuat dalam majalah&nbsp;<em><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Weekly Shōnen Jump\" href=\"https://id.wikipedia.org/wiki/Weekly_Sh%C5%8Dnen_Jump\">Weekly Shōnen Jump</a></em>&nbsp;sejak bulan Juli 2014, dan telah dibundel menjadi 30 volume&nbsp;<em><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Tankōbon\" href=\"https://id.wikipedia.org/wiki/Tank%C5%8Dbon\">tankōbon</a></em>&nbsp;hingga bulan April 2021. Ceritanya mengisahkan tentang Izuku Midoriya, seorang anak lelaki tanpa kekuatan super (yang disebut&nbsp;<a class=\"new\" style=\"text-decoration-line: none; color: #ba0000; background: none;\" title=\"Kekuatan super (kemampuan) (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Kekuatan_super_(kemampuan)&amp;action=edit&amp;redlink=1\">quirk</a>) di dunia tempat hal seperti itu sudah menjadi sesuatu yang umum, tetapi masih bercita-cita untuk menjadi seorang&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Pahlawan super\" href=\"https://id.wikipedia.org/wiki/Pahlawan_super\">pahlawan</a>. Ia kemudian bertemu dengan pahlawan terhebat di Jepang, yang membagi&nbsp;<em>quirk</em>&nbsp;miliknya kepada Izuku setelah melihat potensinya, dan kemudian memasukkannya dalam sebuah SMA prestisius yang dikhususkan untuk para pahlawan muda yang sedang dalam pelatihan.</p>\r\n<p style=\"margin: 0.5em 0px; color: #202122; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Manga ini telah diadaptasi menjadi sebuah&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Anime\" href=\"https://id.wikipedia.org/wiki/Anime\">anime</a>&nbsp;yang diproduksi oleh&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Bones (studio)\" href=\"https://id.wikipedia.org/wiki/Bones_(studio)\">Bones</a>.&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"My Hero Academia (musim 1)\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia_(musim_1)\">Musim pertamanya</a>&nbsp;ditayangkan di&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Jepang\" href=\"https://id.wikipedia.org/wiki/Jepang\">Jepang</a>&nbsp;sejak tanggal 3 April hingga 26 Juni 2016, diikuti oleh&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia_(musim_2)\">musim kedua</a>&nbsp;yang ditayangkan sejak tanggal 1 April hingga 30 September 2017, dilanjutkan dengan&nbsp;<a class=\"new\" style=\"text-decoration-line: none; color: #ba0000; background: none;\" title=\"My Hero Academia (musim 3) (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=My_Hero_Academia_(musim_3)&amp;action=edit&amp;redlink=1\">musim ketiga</a>&nbsp;sejak tanggal 7 April hingga 29 September 2018, dan&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"My Hero Academia (musim 4)\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia_(musim_4)\">musim keempat</a>&nbsp;sejak tanggal 12 Oktober 2019 hingga 4 April 2020. Musim kelimanya telah diumumkan. Sebuah film animasi berjudul&nbsp;<em><a class=\"new\" style=\"text-decoration-line: none; color: #ba0000; background: none;\" title=\"My Hero Academia: Two Heroes (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=My_Hero_Academia:_Two_Heroes&amp;action=edit&amp;redlink=1\">My Hero Academia: Two Heroes</a></em>&nbsp;dirilis pada tanggal 3 Agustus 2018. Film animasi kedua berjudul&nbsp;<em><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"My Hero Academia: Heroes Rising\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia:_Heroes_Rising\">My Hero Academia: Heroes Rising</a></em>&nbsp;dirilis pada tanggal 20 Desember 2019. Ada rencana untuk membuat film laga hidup (<em>live-action</em>) oleh&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Legendary Entertainment\" href=\"https://id.wikipedia.org/wiki/Legendary_Entertainment\">Legendary Entertainment</a>.</p>\r\n<p style=\"margin: 0.5em 0px; color: #202122; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\"><em>My Hero Academia</em>&nbsp;telah dilisensi untuk diterbitkan dalam bahasa Inggris oleh&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Viz Media\" href=\"https://id.wikipedia.org/wiki/Viz_Media\">Viz Media</a>&nbsp;dan mulai dimuat berseri dalam antologi manga digital mingguan milik mereka,&nbsp;<em><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Weekly Shonen Jump (majalah Amerika Serikat)\" href=\"https://id.wikipedia.org/wiki/Weekly_Shonen_Jump_(majalah_Amerika_Serikat)\">Weekly Shonen Jump</a></em>, pada tanggal 9 Februari 2015. Shueisha mulai merilis manga ini dalam bahasa Inggris secara serentak dengan perilisannya di Jepang melalui platform&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Manga Plus\" href=\"https://id.wikipedia.org/wiki/Manga_Plus\">Manga Plus</a>&nbsp;sejak bulan Januari 2019.</p>\r\n<p style=\"margin: 0.5em 0px; color: #202122; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Manga ini memenangkan&nbsp;<a style=\"text-decoration-line: none; color: #0645ad; background: none;\" title=\"Penghargaan Harvey (komik)\" href=\"https://id.wikipedia.org/wiki/Penghargaan_Harvey_(komik)\">Penghargaan Harvey</a>&nbsp;2019 untuk kategori Manga Terbaik. Hingga bulan Desember 2019, manga ini telah terjual sebanyak lebih dari 26 juta kopi dalam sirkulasi. Manga dan anime&nbsp;<em>My Hero Academia</em>&nbsp;telah menerima banyak respons positif dari para kritikus dan khalayak pemirsa, dan dianggap sebagai salah satu yang terbaik untuk dekade tahun 2010-an.<sup id=\"cite_ref-:0_14-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia#cite_note-:0-14\">[11]</a></sup><sup id=\"cite_ref-:1_15-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia#cite_note-:1-15\">[12]</a></sup><sup id=\"cite_ref-:2_16-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0645ad; background: none;\" href=\"https://id.wikipedia.org/wiki/My_Hero_Academia#cite_note-:2-16\">[13]</a></sup></p>', 'boku.jpeg', '2021-06-27 06:21:47', '2021-06-27 06:21:47'),
(9, 2, 'Enen no Shōbōtai', 'Enen no Shōbōtai, yang diterbitkan di Indonesia dengan judul Fire Force, adalah sebuah seri manga shōnen Jepang yang ditulis dan diilustrasikan oleh Atsushi Ōkubo.', '<p>Enen no Shōbōtai, yang diterbitkan di Indonesia dengan judul Fire Force, adalah sebuah seri manga shōnen Jepang yang ditulis dan diilustrasikan oleh Atsushi Ōkubo.</p>', 'Shinra.png', '2021-06-27 13:20:38', '2021-06-27 13:20:38'),
(10, 1, 'Polinemas', 'Kampus politeknik di kota malang', '<p>afahsdhadshdahs</p>', 'shinra.jpeg', '2021-07-01 11:49:05', '2021-07-01 11:49:05'),
(11, 4, 'Covid 19 Tipe baru', 'Tipe covid yang angat menular, tetapi tidak terlalu mamtikan,Gejala Corona Varian Delta yang Dianggap Mampu Menular dengan Berpapasan', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; background-color: #ffffff;\">What is Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'cov.jpeg', '2021-07-01 12:42:50', '2021-07-01 12:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2021_06_16_130424_create_profiles_table', 1),
(36, '2021_06_25_103129_create_content_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `username`, `email`, `alamat`, `hp`, `ttl`, `image`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Syam', 'alhuzwirialfi@gmail.com', 'Banyuwangi', '.', '.', 'avatar.png', 'Hai, nama saya alfi', '2021-06-26 03:17:29', '2021-06-26 03:17:29'),
(2, 'Ilyas iskandar', 'ilyas@gmail.com', '.', '.', '.', 'actor.png', '.', '2021-06-27 13:09:51', '2021-06-27 13:09:51'),
(3, NULL, 'dhaniar@gmail.com', '.', '.', '.', 'avatar.png', '.', '2021-07-01 12:33:59', '2021-07-01 12:33:59'),
(4, 'Firnanda etacho', 'tacho@gmail.com', 'Malang', '.', '.', 'avatar.png', 'Hai panggil saya tacho :)', '2021-07-01 12:36:21', '2021-07-01 12:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alfi', 'alhuzwirialfi@gmail.com', NULL, '$2y$10$36g0NpYGlkRYnfh32Z7kIuhf0NzX1QjE3IHF1Ua9Bev17.1gdfeXm', NULL, '2021-06-26 03:17:29', '2021-06-26 03:17:29'),
(2, 'ilyas', 'ilyas@gmail.com', NULL, '$2y$10$hFcMqX25.bT6/LZfFUoFsOpMUpQkTs9tNOz.Hd9HNxoIDiDs4pIM.', NULL, '2021-06-27 13:09:51', '2021-06-27 13:09:51'),
(3, 'Dhaniar', 'dhaniar@gmail.com', NULL, '$2y$10$G6z1bnZtCIajWAuuTGMbxu05NTspFAdW9dJYVYDhItX1IS6k4VYBi', NULL, '2021-07-01 12:33:59', '2021-07-01 12:33:59'),
(4, 'etacho', 'tacho@gmail.com', NULL, '$2y$10$7cYQxU6XXzXLOFKPo.8zauHeOHCfltsdqheN4h9vtSg4DfTzSUitC', NULL, '2021-07-01 12:36:21', '2021-07-01 12:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
