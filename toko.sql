-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2020 pada 16.40
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `include`
--

CREATE TABLE `include` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `include`
--

INSERT INTO `include` (`id`, `tentang`) VALUES
(1, '&lt;p&gt;&lt;span style=&quot;font-family:Trebuchet MS,Helvetica,sans-serif&quot;&gt;Website ini adalah Jasa Titip Barang untuk para gadis gadis yang ootd banget. Web ini&amp;nbsp;Memberikan jasa penitipan untuk membeli barang barang atau keperluan gadis seperti baju, sepatu, tas, dan lain-lain&amp;nbsp;selain itu web ini menyediakan&amp;nbsp;barang bekas yang masih bagus dan layak untuk dijual kembali khusus gadis&amp;nbsp;yang disebut&amp;nbsp;Preloved.&lt;/span&gt;&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `street` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `province` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `post_code` text DEFAULT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  `kurir` varchar(100) NOT NULL,
  `jumlah_ongkir` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `bukti_nama_pengirim` text DEFAULT NULL,
  `bukti_transaksi` text DEFAULT NULL,
  `tgl_transaksi` text DEFAULT NULL,
  `status` enum('paid','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `id_users`, `street`, `city`, `province`, `country`, `post_code`, `total_harga`, `kurir`, `jumlah_ongkir`, `date`, `due_date`, `bukti_nama_pengirim`, `bukti_transaksi`, `tgl_transaksi`, `status`) VALUES
(3020, 7, 'Jl Desa Cikubangmulya', 'Bandung Barat', 'Jawa Barat', 'indonesia', '45591', 130000, '', 0, '2020-10-06 06:10:24', '2020-10-07 06:10:24', NULL, NULL, NULL, 'paid'),
(23156, 14, 'Jl. RA Kartini', 'Cirebon', 'Jawa barat', 'Indonesia', '45188', 150000, '', 0, '2020-02-17 20:36:13', '2020-02-18 20:36:13', 'Mohammad Teguh Adriansyah', '5be700dfe079866bcc3a96be9dd4ae4a.png', '2020-01-17', 'paid'),
(28535, 7, 'Jl Desa Cikubangmulya', 'Badung', 'Bali', 'indonesia', '45593', 600000, '', 0, '2020-08-30 17:08:04', '2020-08-31 17:08:04', NULL, NULL, NULL, 'unpaid'),
(43696, 7, 'Jl Desa Cikubangmulya', 'Jakarta Barat', 'DKI Jakarta', 'indonesia', '45593', 220000, 'jne', 24000, '2020-10-08 14:10:09', '2020-10-09 14:10:09', NULL, NULL, NULL, 'unpaid'),
(47142, 13, 'Mekarmula', 'Kuningan', 'Jawa Barat', 'Indonesia', '45571', 150000, '', 0, '2020-01-28 09:29:10', '2020-01-29 09:29:10', NULL, NULL, NULL, 'unpaid'),
(85928, 13, 'Jl babakan cigadung ', 'Kuningan', 'Jawabarat', 'Indonesia', '45552', 150000, '', 0, '2020-01-28 09:23:52', '2020-01-29 09:23:52', NULL, NULL, NULL, 'unpaid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Tas'),
(2, 'Sepatu'),
(3, 'Baju'),
(6, 'Topi'),
(7, 'Celana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
(58, 23156, 1, 'Tas 1', 1, 150000, NULL),
(65, 28535, 24, 'Kaos mango', 5, 90000, NULL),
(66, 28535, 26, 'Baju kodok lucu', 1, 150000, NULL),
(67, 3020, 25, 'Sandal', 1, 130000, NULL),
(68, 43696, 24, 'Kaos mango', 1, 90000, NULL),
(69, 43696, 25, 'Sandal', 1, 130000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jenis_barang` enum('Baru','Bekas') NOT NULL DEFAULT 'Baru',
  `price` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `id_kategori`, `jenis_barang`, `price`, `stock`, `image`) VALUES
(1, 'Tas 1', '&lt;p&gt;Tas 1&lt;/p&gt;\r\n', 1, 'Bekas', 150000, 1, '00f68196a640c78f96a3bcf53d1eaf3c.jpg'),
(7, 'Tas 2', '&lt;p&gt;Tas 2&lt;/p&gt;\r\n', 1, 'Baru', 150000, 1, '9593b03b20b555ee82d84ea8792b94e2.jpg'),
(8, 'Tas 3', '&lt;p&gt;Tas 3&lt;/p&gt;\r\n', 1, 'Baru', 150000, 1, '9715897_0d458e43-0b74-4753-aacf-6eb920ffe7f3_500_500.jpg'),
(12, 'Tas 5', '&lt;p&gt;Tas 5&lt;/p&gt;\r\n', 1, 'Baru', 150000, 1, 'df0d1092fa58056f0256054b7a196837.jpg'),
(13, 'Tas 6', '&lt;p&gt;Tas 6&lt;/p&gt;\r\n', 1, 'Baru', 150000, 1, 'fossil-7928-2025661-1.jpg'),
(14, 'Tas 7', '&lt;p&gt;Tas 7&lt;/p&gt;\r\n', 1, 'Baru', 150000, 1, 'free-knight-tas-selempang-canvas-blue-1.jpg'),
(16, 'Sepatu Sport', '&lt;p&gt;Sepatu 1&lt;/p&gt;\r\n', 2, 'Baru', 150000, 1, 'image3_thumb.jpg'),
(17, 'Sepatu 1', '&lt;p&gt;Size 36&lt;/p&gt;\r\n', 2, 'Baru', 150000, 1, 'contoh.jpg'),
(19, 'Baju h&amp;m', '&lt;p&gt;Baju masih layak pakai brand h&amp;amp;m&amp;nbsp;&lt;/p&gt;\r\n', 3, 'Bekas', 35000, 1, 'IMG_29041.JPG'),
(20, 'Sweater h&amp;m', '&lt;p&gt;H&amp;amp;m floral sweater, masih bagus dan jarang dipakai&amp;nbsp;&lt;/p&gt;\r\n', 3, 'Baru', 100000, 1, 'IMG_2905.JPG'),
(21, 'Hoodie h&amp;m', '&lt;p&gt;H&amp;amp;M powder pink crop hoodie, masih baru dijual karna salah ukuran&amp;nbsp;&lt;/p&gt;\r\n', 3, 'Baru', 150000, 1, 'IMG_2906.JPG'),
(22, 'Sweater crop h&amp;m ', '&lt;p&gt;Jasa titip sweater nasa crop h&amp;amp;m murah, harga sudah termasuk jasa titip tidak beserta ongkir&amp;nbsp;&lt;/p&gt;\r\n', 3, 'Baru', 350000, 8, 'IMG_2908.JPG'),
(23, 'baju tidur ', '&lt;p&gt;Titip baju tidur dengan penutup mata motif burger lucu&lt;/p&gt;\r\n', 3, 'Baru', 160000, 5, 'IMG_2909.JPG'),
(24, 'Kaos mango', '&lt;p&gt;Kaos mango dengan motif dan berbagai warna, murahhhh&lt;/p&gt;\r\n', 3, 'Baru', 90000, 10, 'IMG_2911.JPG'),
(25, 'Sandal', '&lt;p&gt;Titip sendal thailand ukuran 36-40 stok terbatas&amp;nbsp;&lt;/p&gt;\r\n', 2, 'Baru', 130000, 4, 'IMG_2912.JPG'),
(26, 'Baju kodok lucu', '&lt;p&gt;Titip baju kodok lucu ada warna lain stok terbatas&amp;nbsp;&lt;/p&gt;\r\n', 3, 'Baru', 150000, 4, 'IMG_2913.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_sessions`
--

CREATE TABLE `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko_sessions`
--

INSERT INTO `toko_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('145d9ce4ec3a7e39cddc98eb41f9438c', '::1', 'Mozilla/5.0 (Linux; Android 9; SM-A600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.117 Mobile Safari/537.3', 1588544112, 'a:7:{s:9:\"user_data\";s:0:\"\";s:8:\"id_users\";s:1:\"7\";s:4:\"name\";s:13:\"M Irwansyah S\";s:5:\"email\";s:24:\"mirwansyah1933@gmail.com\";s:12:\"number_phone\";N;s:8:\"username\";s:9:\"irwansyah\";s:5:\"group\";s:1:\"1\";}'),
('3504a783431f70f451403a05bc7663e7', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 1588546412, 'a:7:{s:9:\"user_data\";s:0:\"\";s:8:\"id_users\";s:1:\"7\";s:4:\"name\";s:13:\"M Irwansyah S\";s:5:\"email\";s:24:\"mirwansyah1933@gmail.com\";s:12:\"number_phone\";N;s:8:\"username\";s:9:\"irwansyah\";s:5:\"group\";s:1:\"1\";}'),
('7f6606548ca15a6052c6575696c62f7d', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 1588546409, ''),
('8f32be04f744a34ebdd8108f9f5056a2', '::1', 'WhatsApp/2.20.64 A', 1588542878, ''),
('92fe1dfb3e93f8b749337f8a98c25c40', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 1590690888, 'a:7:{s:9:\"user_data\";s:0:\"\";s:8:\"id_users\";s:1:\"7\";s:4:\"name\";s:13:\"M Irwansyah S\";s:5:\"email\";s:24:\"mirwansyah1933@gmail.com\";s:12:\"number_phone\";N;s:8:\"username\";s:9:\"irwansyah\";s:5:\"group\";s:1:\"1\";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` text DEFAULT NULL,
  `numberphone` bigint(20) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL COMMENT '1 = Laki Laki | 2 = Perempuan',
  `group` tinyint(1) NOT NULL COMMENT '1 = Admin | 2 = Customers'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `numberphone`, `gender`, `group`) VALUES
(7, 'M Irwansyah S', 'irwansyah', '686c1a3ff1bf5cada1d9bd0f355bf3d4', 'mirwansyah1933@gmail.com', 83825287989, 1, 1),
(12, 'Putri Rafidah', 'prfd', '25d55ad283aa400af464c76d713c07ad', 'putriraff@gmail.com', 87813104576, 2, 1),
(13, 'Rusda Arini', 'rusdaarn', '686c1a3ff1bf5cada1d9bd0f355bf3d4', 'rusdaarini15@gmail.com', 85882963505, 2, 2),
(14, 'Mohammad Teguh A', 'mta99910', '25f9e794323b453885f5181f1b624d0b', '20190810043@uniku.ac.id', 83825287989, 1, 2),
(15, 'Tyas', 'Tyas', 'e7f8aab1e3ac5c309fa88c465b9f3f8e', 'tyaseifa@gmail.com', 89639828856, 2, 2),
(16, 'andrey', 'andrey4307', '123456', 'andrey@gmail.com', 89675677955, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `include`
--
ALTER TABLE `include`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `toko_sessions`
--
ALTER TABLE `toko_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group` (`group`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `include`
--
ALTER TABLE `include`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97830;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
