-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2024 pada 20.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_docshare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_document`
--

CREATE TABLE `tbl_document` (
  `d_id` int(11) NOT NULL,
  `d_title` varchar(100) DEFAULT NULL,
  `d_author` varchar(100) DEFAULT NULL,
  `d_description` text DEFAULT NULL,
  `d_read` int(11) DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `d_status` varchar(50) DEFAULT NULL,
  `d_img` varchar(100) DEFAULT NULL,
  `d_category` varchar(100) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `d_page` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_document`
--

INSERT INTO `tbl_document` (`d_id`, `d_title`, `d_author`, `d_description`, `d_read`, `d_date`, `d_status`, `d_img`, `d_category`, `u_id`, `d_page`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Classic Novel set in the Jazz Age, depicting the American Dream and its corruption', 5, '1925-04-10', 'Approved', './docs/1/img/1.jpg', 'Novel', 1, 250),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'Compelling story of racial injustice and moral growth in the American South', 24, '1960-07-11', 'Approved', './docs/2/img/2.jpg', 'Mathematics', 2, 300),
(3, '1984', 'George Orwell', 'Dystopian novel exploringthemes of totalitarianism and surverilance', 45, '1949-06-08', 'Approved', './docs/3/img/3.jpg', 'Business', 3, 200),
(4, 'Pride and Prejudice', 'Jane Austen', 'Classic novel exploring themes of love, marriage, and social status in 19th-century England.', 102, '1813-01-28', 'Approved', './docs/4/img/4.jpg', 'Mathematics', 4, 400),
(5, 'The Catcher in the Rye', 'J.D. Salinger', 'Iconic coming-of-age novel following the adventures of Holden Caulfield in New York City.', 34, '1951-07-16', 'Approved', './docs/5/img/5.jpg', 'Novel', 5, 350),
(6, 'Moby-Dick', 'Herman Melville', 'Epic tale of obsession and revenge as Captain Ahab hunts the white whale.', 233, '1851-10-18', 'Approved', './docs/6/img/6.jpg', 'Business', 6, 500),
(7, 'The Lord of the Rings', 'J.R.R. Tolkien', 'Classic fantasy trilogy chronicling the journey to destroy the One Ring and defeat the Dark Lord Sauron.', 146, '1954-07-29', 'Approved', './docs/7/img/7.jpg', 'Mathematics', 7, 600),
(8, 'To the Lighthouse', 'Virginia Woolf', 'Modernist novel exploring themes of time, memory, and the complexity of human relationships.', 325, '1927-05-05', 'Approved', './docs/8/img/8.jpg', 'Business', 8, 450),
(9, 'Frankenstein', 'Mary Shelley', 'Seminal work of science fiction exploring themes of creation, ambition, and the consequences of playing God.', 268, '1818-01-01', 'Approved', './docs/9/img/9.jpg', 'Business', 9, 380),
(10, 'The Picture of Dorian Gray', 'Oscar Wilde', 'Gothic novel exploring the nature of beauty, morality, and the pursuit of pleasure.', 456, '1890-07-01', 'Approved', './docs/10/img/10.jpg', 'Novel', 10, 420);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_plans`
--

CREATE TABLE `tbl_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `name`, `price`, `duration`, `description`) VALUES
(1, 'Free', 0.00, -1, 'Limited Downloads, Ad Experience, Online (only) Access'),
(2, 'Monthly', 9.90, 30, 'Unlimited Downloads, Ad-Free Experience, Offline Access, Exclusive Content Access, Customer Support Priority, and more'),
(3, 'Yearly', 99.90, 365, 'Unlimited Downloads, Ad-Free Experience, Offline Access, Exclusive Content Access, Customer Support Priority, and more');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subscription`
--

CREATE TABLE `tbl_subscription` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('active','inactive','cancelled') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','inactive','suspended') DEFAULT 'active',
  `role` enum('user','admin') DEFAULT 'user',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`d_id`);

--
-- Indeks untuk tabel `tbl_plans`
--
ALTER TABLE `tbl_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_plans`
--
ALTER TABLE `tbl_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  ADD CONSTRAINT `tbl_subscription_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `tbl_plans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
