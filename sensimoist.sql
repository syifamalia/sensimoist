-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2023 at 07:54 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensimoist`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id`, `kode_alternatif`, `nama_alternatif`, `keterangan_produk`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'Hada Labo Gokujyun Ultimate Moisturizing Lotion', 'Hada Labo Gokujyun Ultimate Moisturizing Lotion adalah produk perawatan kulit yang terkenal dari Jepang yang dikenal karena sifat hidrasinya yang intens. Lotion ini mengandung kombinasi unik hyaluronic acid yang melembapkan kulit secara mendalam dan membantu menjaga kelembaban, sehingga menghasilkan kulit yang kenyal dan lembut. Lotion Hada Labo memiliki tekstur ringan dan cair yang cepat menyerap ke dalam kulit tanpa meninggalkan residu berminyak. Lotion Hada Labo cocok untuk semua jenis kulit, termasuk kulit sensitif, dan membantu meningkatkan kelembaban skin barrier, menjadikan kulit halus, lembap, dan segar. Harga pelembab ini adalah Rp 36.000 untuk ukuran 100ml.', NULL, NULL),
(2, 'A2', 'Skintific 5x Ceramide Barrier Repair Moisturize Gel', 'Skintific 5x Ceramide Barrier Repair Moisturize Gel adalah pelembap khusus yang fokus pada perbaikan dan penguatan kelembaban skin barrier alami kulit. Produk ini mengandung konsentrasi tinggi ceramide, yang merupakan lipid penting yang ditemukan pada kulit yang membantu menjaga kelembaban dan melindungi dari iritan eksternal. Pelembap berbasis gel ini memiliki tekstur ringan dan menyegarkan yang cepat diserap ke dalam kulit, menjadikannya lembap dan kenyal tanpa meninggalkan residu lengket. Produk ini cocok untuk semua jenis kulit, termasuk kulit sensitif, dan membantu meningkatkan elastisitas kulit serta menjaga keseimbangan kelembaban yang sehat. Harga pelembab ini adalah Rp 55.000 untuk ukuran 6gr.', NULL, NULL),
(3, 'A3', 'Safi Dermasafe Soothe & Hydrate Day Moisturizer', 'Safi Dermasafe Soothe & Hydrate Day Moisturizer adalah pelembap ringan yang dirancang untuk menenangkan dan melembapkan kulit. Pelembap ini diformulasikan dengan campuran bahan alami seperti lidah buaya, chamomile, dan Vitamin E, yang bekerja sama untuk menenangkan dan memberi nutrisi pada kulit sensitif. Pelembap ini memiliki tekstur ringan dan tidak berminyak yang mudah diserap, memberikan kelembapan tahan lama tanpa menyumbat pori-pori. Pelembap Safi Dermasafe juga mengandung SPF 30 untuk melindungi kulit dari sinar UV berbahaya. Pelembap Safi Dermasafe cocok digunakan setiap hari dan membantu menjaga kulit tetap sehat dan lembap. Harga pelembab ini adalah Rp 129.000 untuk ukuran 50gr.', NULL, NULL),
(4, 'A4', 'Cetaphil Moisturizing Cream', 'Cetaphil Moisturizing Cream adalah produk terpercaya yang direkomendasikan oleh dokter kulit untuk kulit kering dan sensitif. Krim ini diformulasikan dengan campuran emolien dan humektan yang efektif melembapkan dan mengembalikan penghalang kelembaban alami kulit. Krim ini memiliki tekstur kaya dan creamy yang memberikan hidrasi intens dan membantu menenangkan serta melembutkan kulit yang kering dan kasar. Formula non-berminyak ini bebas pewangi dan cocok untuk semua jenis kulit, termasuk kulit sensitif. Cetaphil Moisturizing Cream dapat digunakan di wajah dan tubuh, memberikan kelembapan tahan lama dan menjadikan kulit terasa halus dan terhidrasi. Harga pelembab ini adalah Rp 259.000 untuk ukuran 100gr.', NULL, NULL),
(5, 'A5', 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator', 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator adalah gel-cream yang memberikan kelembapan instan dan tahan lama pada kulit. Produk ini diformulasikan dengan Teknologi Auto-Replenishing yang membantu kulit menciptakan sumber air internalnya sendiri, memberikan hidrasi sepanjang hari. Pelembap ini bebas minyak dan memiliki tekstur ringan, sehingga cocok untuk semua jenis kulit, termasuk kulit sensitif. Ia memberikan hidrasi yang menyegarkan, menjadikan kulit kenyal, halus, dan segar. CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator dapat digunakan sebagai pelembap sehari-hari atau sebagai masker hidrasi untuk memberikan kelembapan ekstra. Harga pelembab ini adalah Rp 270.000 untuk ukuran 15ml.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comparisons`
--

CREATE TABLE `comparisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comparison_questions`
--

CREATE TABLE `comparison_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comparison_questions`
--

INSERT INTO `comparison_questions` (`id`, `alternative_id`, `criteria_id`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Untuk sebuah pelembab wajah dengan harga Rp 36.000 dalam ukuran 100ml menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(2, 1, 2, 'Saya mempertimbangkan bentuk kemasan botol dengan tutup flip-top dalam memilih produk pelembab wajah.', NULL, NULL),
(3, 1, 3, 'Kandungan Hyaluronic Acid yang terdapat dalam produk Hada Labo Gokujyun Ultimate Moisturizing Lotion menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(4, 1, 4, 'Hada Labo Gokujyun Ultimate Moisturizing Lotion dapat membantu menjaga kelembapan kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(5, 1, 5, 'Hada Labo Gokujyun Ultimate Moisturizing Lotion memiliki tekstur yang ringan, tidak lengket dan mudah menyerap ke dalam kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(6, 2, 1, 'Untuk sebuah pelembab wajah dengan harga Rp 55.000 dan berat produk 6gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(7, 2, 2, 'Saya mempertimbangkan bentuk kemasan pot cream atau jar berukuran 6gr dalam memilih produk pelembab wajah.', NULL, NULL),
(8, 2, 3, 'Kandungan Ceramide, Hyaluronic Acid, Centella Asiatica & Marine-Collagen yang terdapat dalam produk Skintific 5x Ceramide Barrier Repair Moisturize Gel menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(9, 2, 4, 'Skintific 5x Ceramide Barrier Repair Moisturize Gel dapat memperbaiki, melindungi dan memperkuat skin barrier serta melembabkan dan menghidrasi kulit. sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(10, 2, 5, 'Skintific 5x Ceramide Barrier Repair Moisturize Gel memiliki tekstur gel yang lembut dan ringan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(11, 3, 1, 'Untuk sebuah pelembab wajah dengan harga Rp 129.000 dalam ukuran 50gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(12, 3, 2, 'Saya mempertimbangkan bentuk kemasan tube dalam memilih produk pelembab wajah.', NULL, NULL),
(13, 3, 3, 'Kandungan Hyaluronate dan Niacinamide yang terdapat dalam produk Safi Dermasafe Soothe & Hydrate Day Moisturizer menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(14, 3, 4, 'Safi Dermasafe Soothe & Hydrate Day Moisturizer dapat menjaga kelembapan wajah 24 jam untuk kulit bebas iritasi dan membuat wajah cerah alami sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(15, 3, 5, 'Safi Dermasafe Soothe & Hydrate Day Moisturizer memiliki tekstur gel ringan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(16, 4, 1, 'Untuk sebuah pelembab wajah dengan harga Rp 259.000 dalam ukuran 100gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(17, 4, 2, 'Saya mempertimbangkan bentuk kemasan tube berukuran 100gr dalam memilih produk pelembab wajah.', NULL, NULL),
(18, 4, 3, 'Kandungan Panthenol dan Niacinamide yang terdapat dalam produk Cetaphil Moisturizing Cream menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(19, 4, 4, 'Cetaphil Moisturizing Cream dapat memberikan hidrasi yang intens dan bertahan lama hingga 48 jam serta melembapkan dan memperbaiki skin barrier dengan intens sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(20, 4, 5, 'Cetaphil Moisturizing Cream memiliki tekstur yang kental, lembut, halus, dan mudah diaplikasikan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(21, 5, 1, 'Untuk sebuah pelembab wajah dengan harga Rp 270.000 dalam ukuran 15ml menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(22, 5, 2, 'Saya mempertimbangkan bentuk kemasan glass jars dalam memilih produk pelembab wajah.', NULL, NULL),
(23, 5, 3, 'Kandungan Hyaluronic Acid dan Activated Aloe Water yang terdapat dalam produk CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(24, 5, 4, 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator mengandung teknologi auto-replenishing yang dapat mengunci kelembapan pada kulit selama 100 jam, serta membantu menjaga kelembapan dan menenangkan kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL),
(25, 5, 5, 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator memiliki tekstur yang ringan dan berbentuk gel sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_benefit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_kriteria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `kode_kriteria`, `nama_kriteria`, `cost_benefit`, `pertanyaan_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'Harga', 'cost', 'Mahal murah harga produk tersebut menjadi pertimbangan saya dalam memilih pelembab wajah.', NULL, NULL),
(2, 'C2', 'Bentuk Kemasan', 'benefit', 'Saya mempertimbangkan bentuk kemasan dalam memilih produk pelembab wajah.', NULL, NULL),
(3, 'C3', 'Kandungan Produk', 'benefit', 'Adanya kandungan Hyaluronic Acid atau Hyaluronate atau Ceramide atau Niacinamide atau Panthenol dalam produk mempengaruhi saya dalam memilih produk pelembab wajah.', NULL, NULL),
(4, 'C4', 'Kepentingan Produk', 'benefit', 'Kepentingan yang terdapat dalam produk mempengaruhi saya dalam memilih produk pelembab wajah saya.', NULL, NULL),
(5, 'C5', 'Tekstur Produk', 'benefit', 'Saya mempertimbangkan tekstur produk dalam memilih produk pelembab wajah.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterion_weights`
--

CREATE TABLE `criterion_weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_05_18_094032_create_criterias_table', 1),
(4, '2023_05_18_103431_create_criterion_weights_table', 1),
(5, '2023_05_18_113516_create_alternatives_table', 1),
(6, '2023_05_18_113814_create_comparisons_table', 1),
(7, '2023_05_18_113913_create_comparison_questions_table', 1),
(8, '2023_05_18_124221_create_relative_weights_table', 1),
(9, '2023_05_18_124954_create_vector_s_table', 1),
(10, '2023_05_18_125128_create_vector_v_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relative_weights`
--

CREATE TABLE `relative_weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `bobot_relatif` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `dob`, `image`, `created_at`, `updated_at`) VALUES
(1, 'syifa amalia', 'matcha_tokyo', 'blogsyifa@gmail.com', '2023-06-07 09:02:40', '$2y$10$kx9h.wcQ0LG6jF/0nPfOpu.guDbmv6hJElzfNldUWwyP53nDWEgRW', '2000-10-27', '/img/pfp/beauty-girl-4.png', '2023-06-07 09:01:30', '2023-06-07 09:02:40'),
(2, 'Reyna Amilah', 'tokitokyo', 'syifaxamalia@gmail.com', '2023-06-07 09:46:36', '$2y$10$YJCZfOvPL3Ame/YLXcSxFuiis9MsdkJet39HX3x2NnodY1L5VdnQy', '2000-10-10', '/img/pfp/beauty-girl-2.png', '2023-06-07 09:43:03', '2023-06-07 09:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `vector_s`
--

CREATE TABLE `vector_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `vektor_s` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vector_v_s`
--

CREATE TABLE `vector_v_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `vektor_v` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alternatives_kode_alternatif_unique` (`kode_alternatif`);

--
-- Indexes for table `comparisons`
--
ALTER TABLE `comparisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_comparisons` (`alternative_id`),
  ADD KEY `criteria_comparisons` (`criteria_id`),
  ADD KEY `user_comparisons` (`user_id`);

--
-- Indexes for table `comparison_questions`
--
ALTER TABLE `comparison_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_comparison_questions` (`alternative_id`),
  ADD KEY `criteria_comparison_questions` (`criteria_id`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `criterias_kode_kriteria_unique` (`kode_kriteria`);

--
-- Indexes for table `criterion_weights`
--
ALTER TABLE `criterion_weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_criterion_weights` (`criteria_id`),
  ADD KEY `user_criterion_weights` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `relative_weights`
--
ALTER TABLE `relative_weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_relative_weights` (`criteria_id`),
  ADD KEY `user_relative_weights` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vector_s`
--
ALTER TABLE `vector_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_vector_s` (`alternative_id`),
  ADD KEY `user_vector_s` (`user_id`);

--
-- Indexes for table `vector_v_s`
--
ALTER TABLE `vector_v_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_vector_v` (`alternative_id`),
  ADD KEY `user_vector_v` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comparisons`
--
ALTER TABLE `comparisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comparison_questions`
--
ALTER TABLE `comparison_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `criterion_weights`
--
ALTER TABLE `criterion_weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relative_weights`
--
ALTER TABLE `relative_weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vector_s`
--
ALTER TABLE `vector_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vector_v_s`
--
ALTER TABLE `vector_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comparisons`
--
ALTER TABLE `comparisons`
  ADD CONSTRAINT `alternative_comparisons` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `criteria_comparisons` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`),
  ADD CONSTRAINT `user_comparisons` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comparison_questions`
--
ALTER TABLE `comparison_questions`
  ADD CONSTRAINT `alternative_comparison_questions` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `criteria_comparison_questions` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`);

--
-- Constraints for table `criterion_weights`
--
ALTER TABLE `criterion_weights`
  ADD CONSTRAINT `criteria_criterion_weights` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`),
  ADD CONSTRAINT `user_criterion_weights` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `relative_weights`
--
ALTER TABLE `relative_weights`
  ADD CONSTRAINT `criteria_relative_weights` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`),
  ADD CONSTRAINT `user_relative_weights` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vector_s`
--
ALTER TABLE `vector_s`
  ADD CONSTRAINT `alternative_vector_s` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `user_vector_s` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vector_v_s`
--
ALTER TABLE `vector_v_s`
  ADD CONSTRAINT `alternative_vector_v` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `user_vector_v` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
