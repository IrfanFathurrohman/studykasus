-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2023 pada 09.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gacoan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diskon`
--

CREATE TABLE `tb_diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `diskon` int(2) NOT NULL,
  `periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_diskon`
--

INSERT INTO `tb_diskon` (`id_diskon`, `id_menu`, `diskon`, `periode`) VALUES
(1, 3, 10, '2023-11-22'),
(2, 10, 20, '2023-11-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Mie'),
(2, 'Minuman'),
(3, 'Dimsum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga` int(7) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga`, `deskripsi`, `id_kategori`) VALUES
(1, 'Mie Suit', 14000, 'Semangkuk kelezatan mie dipadukan dgn bumbu racikan rahasia yg super nikmat, Ditemani taburan ayam cincang dan pangsit goreng yg maknyus abizzzz.	', 1),
(2, 'Mie Hompimpa', 14000, 'Semangkuk mie dengan rasa pedas asin yang bakal membuat mulut kamu meledak !!!. Tentunya dengan topping ayam cincang dan krupuk pangsit yang gurih dan Kreeessshhh....									', 1),
(3, 'Mie Gacoan', 14000, 'Untuk yang suka manis harus cobain mie yang satu ini. Mie dengan rasa manis atau pedas manis buat kamu yang ingin mencoba sensasi pedas manis yang uhhhh ahhhhh....', 1),
(4, 'Pangsit Goreng', 10000, 'Dimsum goreng yang berisi daging ayam cincang didalamnya dan dibalut dengan kulit pangsit diluarnya yang renyah dan Kriiuuukk abiezzzz.				', 3),
(5, 'Siomay', 10000, 'Dimsum kukus isi ayam dicampur sedikit udang dibungkus dengan kulit siomay yang MANTULLLLLLL :)				', 3),
(6, 'Udang Keju', 10000, 'Dimsum imut nan gendud ini berisi potongan keju di dalamnya dibalut dengan tepung roti yg crispy dan yummy abizzz.				', 3),
(7, 'Mie Gacoan', 14000, 'Untuk yang suka manis harus cobain mie yang satu ini. Mie dengan rasa manis atau pedas manis buat kamu yang ingin mencoba sensasi pedas manis yang uhhhh ahhhhh....', 1),
(8, 'Pangsit Goreng', 10000, 'Dimsum goreng yang berisi daging ayam cincang didalamnya dan dibalut dengan kulit pangsit diluarnya yang renyah dan Kriiuuukk abiezzzz.', 3),
(9, 'Siomay', 10000, 'Dimsum kukus isi ayam dicampur sedikit udang dibungkus dengan kulit siomay yang MANTULLLLLLL :)', 3),
(10, 'Udang Keju', 10000, 'Dimsum imut nan gendud ini berisi potongan keju di dalamnya dibalut dengan tepung roti yg crispy dan yummy abizzz.', 3),
(11, 'Udang Rambutan', 10000, 'Bola daging yg diselimuti oleh surai naga, juicy di bagian dalam dan kriuk di luarnya dijamin aueenduuul...', 3),
(12, 'Lumpia Udang', 10000, 'Dimsum dengan isi daging asli yang di goreng dan dibalut dengan kulit lumpia yang di jamin TOP MARKOTOP !', 3),
(13, 'Es Grobak Sodor', 8000, 'Segelas es buah-buahan ditambah dengan cincau versi premium dengan rasa manis dan ditambah dengan susu yang membuat mulutmu smoooothhh.....', 2),
(14, 'Es Teklek', 7000, 'Segelas minuman membuat kamu cool setelah berpanas-panasan yang dilengkapi dengan buah-buahan dan dicampur dengan cincau yang bikin kamu cooool abizzzz...', 2),
(15, 'Es Petak Umpat', 8000, 'Es penyemangat dengan rasa tropical segar yang membuat harimu lebih bersemangat dan lebih fresssshhhhh....', 2),
(16, 'Es Sluku Bathok', 7000, 'Minuman es susu ditambah sirup mocca yang smooth dan membuat harimu lebih anyeeesssss....', 2),
(20, 'Milo', 8000, 'SFASFASDFGA', 2),
(21, 'Milo', 120000, 'ASFSDGSDGSDFGSDFG', 2),
(22, 'Milo', 120000, 'ASFSDGSDGSDFGSDFG', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_diskon`
--
ALTER TABLE `tb_diskon`
  ADD PRIMARY KEY (`id_diskon`),
  ADD KEY `fk_diskon_menu` (`id_menu`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_menu_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_diskon`
--
ALTER TABLE `tb_diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_diskon`
--
ALTER TABLE `tb_diskon`
  ADD CONSTRAINT `fk_diskon_menu` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `fk_menu_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
