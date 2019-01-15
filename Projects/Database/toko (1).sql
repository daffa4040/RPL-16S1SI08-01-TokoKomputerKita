-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2019 pada 02.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `judul_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `judul_category`) VALUES
(1, 'Alat Pertanian'),
(2, 'Obat-Obatan');

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
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('paid','confirmed','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `date`, `due_date`, `user_id`, `status`) VALUES
(8, '2019-01-11 08:17:58', '2019-01-12 08:17:58', 0, 'unpaid'),
(9, '2019-01-11 11:48:11', '2019-01-12 11:48:11', 0, 'unpaid'),
(10, '2019-01-11 11:55:38', '2019-01-12 11:55:38', 0, 'unpaid'),
(11, '2019-01-11 13:29:35', '2019-01-12 13:29:35', 0, 'unpaid'),
(12, '2019-01-11 13:50:58', '2019-01-12 13:50:58', 2, 'unpaid'),
(13, '2019-01-12 08:11:34', '2019-01-13 08:11:34', 2, 'unpaid'),
(14, '2019-01-12 18:42:46', '2019-01-13 18:42:46', 2, 'unpaid'),
(15, '2019-01-12 18:49:28', '2019-01-13 18:49:28', 2, 'unpaid');

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
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
(1, 1, 1, 'Nmax Yamaha 250', 1, 25000000, ''),
(2, 1, 2, 'PCX Honda', 1, 25500000, ''),
(3, 2, 1, 'Nmax Yamaha 250', 1, 25000000, ''),
(4, 3, 3, 'Aerox', 1, 23000000, ''),
(5, 4, 2, 'PCX Honda', 1, 25500000, ''),
(6, 5, 1, 'Nmax Yamaha 250', 1, 25000000, ''),
(7, 6, 6, 'Xmax Yamaha 2000', 1, 50000000, ''),
(8, 7, 5, 'Aerox', 1, 23000000, ''),
(9, 8, 1, 'Nmax Yamaha 250', 1, 25000000, ''),
(10, 9, 2, 'PCX Honda', 1, 25500000, ''),
(11, 9, 3, 'Aerox', 1, 23000000, ''),
(12, 10, 2, 'PCX Honda', 1, 25500000, ''),
(13, 10, 5, 'Aerox', 1, 23000000, ''),
(14, 11, 6, 'Xmax Yamaha 2000', 1, 50000000, ''),
(15, 12, 2, 'PCX Honda', 1, 25500000, ''),
(16, 13, 6, 'Xmax Yamaha 2000', 1, 50000000, ''),
(17, 13, 5, 'Aerox', 1, 23000000, ''),
(18, 14, 1, 'Nmax Yamaha 250', 1, 25000000, ''),
(19, 15, 2, 'PCX Honda', 1, 25500000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`) VALUES
(1, 'Nmax Yamaha 250', 'Motor Produk Yamaha', 25000000, 10, 'Nmax.jpg'),
(2, 'PCX Honda', 'Motor buatan dari Honda', 25500000, 7, 'PCX.jpg'),
(3, 'Aerox', 'motor', 23000000, 4, 'Aerox.jpg'),
(6, 'Xmax Yamaha 2000', 'Moptor Dari Yamaha', 50000000, 2, 'Nmax1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_sessions`
--

CREATE TABLE `toko_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko_sessions`
--

INSERT INTO `toko_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1nvfth5hpcqi8dlp6k6ifgt4av1mvu27', '::1', 1547312913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331323931323b),
('hsh29penp4oddj2la613p9t7rf04uel4', '::1', 1547315145, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331343933393b757365726e616d657c733a333a2261616e223b67726f7570737c733a313a2232223b),
('daggnqccmd21s6fglq1ijm1i0t0rnq0c', '::1', 1547315371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331353236303b757365726e616d657c733a333a2261616e223b67726f7570737c733a313a2232223b6d6173736167657c4e3b),
('24ic86pr9qvdtkmsfc5ajsc8v12i2rcg', '::1', 1547315762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331353536363b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('b5lomagqp5l8tlfvrcolhhdgolaic5q6', '::1', 1547317709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331373635333b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('so8nbkofv4ilb066nsipu3b2fc73kj5k', '::1', 1547318081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331373937353b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('bd4nn4ts39o9vum4kbj96d2jad6ompi2', '::1', 1547318722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331383433373b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('1uv23ik9fv3vasune6n65uh3nvs7b5d7', '::1', 1547319103, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331383830353b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('ift4rmarj5dtu8c3upqvvmv15mch0jkt', '::1', 1547319257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331393130373b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('cdjpkqrgcmd33ln1jfpsrc4bohh5n1vt', '::1', 1547319681, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373331393438393b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('bv82a5kpfhf1dn46k4c627lp02p3u6de', '::1', 1547322152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332323031333b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('4hp7lvgqc7972pus0rj1qpdocbe9b9u5', '::1', 1547322700, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332323434323b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('cqqd708ddri6ukr9fg15d7najhccvr5d', '::1', 1547323075, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332323933393b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('tp8i531er6s8fpjkiqulmmrmimjicn69', '::1', 1547323888, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332333538383b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('pj7n8kv2m5cjq3v9ehv20f055qnhhsr2', '::1', 1547324389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332343039383b6572726f727c733a32363a2257726f6e6720557365726e616d65202f2050617373776f726421223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('f35hg45h1c2jje3ufa52m420rve8ffls', '::1', 1547324674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332343437383b6572726f727c733a32363a2257726f6e6720557365726e616d65202f2050617373776f726421223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('gt7lgv4297jln3b4u5elbpa1cfgdumbt', '::1', 1547325875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332353537353b),
('2npltvphvlubn1u61icmn6hjofaslqqe', '::1', 1547326122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332353837383b6572726f727c733a32363a2257726f6e6720557365726e616d65202f2050617373776f726421223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('3k9tgsmhks5npdusu432eq3t3ic1m1bd', '::1', 1547326365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332363332333b),
('jd48jr3gpjf6odhgd1sl5bbd3gppgb0q', '::1', 1547327221, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332363936373b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('ms7r6a1r8smigvg82gtld6kfohmggdv1', '::1', 1547327935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332373635363b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('4ga2pqlhfc0cgos3ft0945iopkj2dfan', '::1', 1547328198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332383038383b757365726e616d657c733a353a2261646d696e223b67726f7570737c733a313a2231223b),
('03qth5mlfan8b72pnp3fod5kmvo21psl', '::1', 1547328992, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332383835333b),
('a3gt5ubvqeb6dbnm7889161p2eni9jln', '::1', 1547329536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332393234353b),
('5hqn00opr9t49gro4no8vcicbitveduc', '::1', 1547329824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373332393536353b),
('ipuupahjdbhdd6bf9fg6a33e5oenvlj9', '::1', 1547330528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333303237313b),
('dm6c23kgvt2qsosum12pio1eg61rrdlo', '::1', 1547331101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333303831393b),
('8gq7fk3293fetroje1uqbgbp353ha2ke', '::1', 1547331338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333313132323b),
('brpehdn1r0miae489aonj8vfu82r0r0s', '::1', 1547331427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333313432373b),
('j6jir73k0e2beu1modng53f3nhlvs025', '::1', 1547332095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333313835363b),
('e86kj9fksd6n0tk5k4301t0oc9gqhmce', '::1', 1547332266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333323138353b),
('t7qr85kfrc666b8nh28eqerkdjt68vl6', '::1', 1547332990, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333323730393b),
('2n9btu1qje7pefe8v8pugu81igns77bu', '::1', 1547333527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333333235363b),
('btiukgc89etdlh28q52iiaq5keeaneno', '::1', 1547333860, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333333539393b),
('3cnn5qsk272soat0jj090jf5euhvam74', '::1', 1547334110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373333333939303b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `groups` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `groups`) VALUES
(1, 'admin', 'admin', 1),
(2, 'aan', '123', 2),
(5, 'nikmat', 'nikmat', 2),
(6, 'karuniaNB', 'karuniaNB', 2),
(7, 'nikita', 'nikita', 2),
(8, 'tanya', 'tanya', 2),
(9, 'tanya', 'tanya', 2),
(10, 'saya', 'saya', 2),
(11, 'saya', 'saya', 2),
(12, 'saya', 'saya', 2),
(13, 'tata', 'tata', 2),
(14, 'tata', 'tata', 2),
(15, 'as', 'as', 2),
(16, 'as', 'as', 2),
(17, 'as', 'as', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `toko_sessions`
--
ALTER TABLE `toko_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
