-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2016 pada 06.47
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_desc` text NOT NULL,
  `category_slug` varchar(100) NOT NULL,
  `category_parent` int(11) NOT NULL,
  `category_type` varchar(50) NOT NULL,
  `category_lineage` longtext NOT NULL,
  `category_deep` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `category_desc`, `category_slug`, `category_parent`, `category_type`, `category_lineage`, `category_deep`) VALUES
(2, 'Berita Terkini', 'Kumpulan berita paling panas', 'berita-terkini', 0, '', '', 0),
(3, 'Warung kopi', 'tempatnya nyantai', 'warung-kopi', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notification`
--

CREATE TABLE `tb_notification` (
  `notification_id` bigint(20) NOT NULL,
  `notification_type` varchar(50) NOT NULL,
  `notification_user` bigint(20) NOT NULL,
  `notification_parent` bigint(20) NOT NULL,
  `notification_desc` tinytext NOT NULL,
  `notification_status` varchar(10) NOT NULL,
  `notification_icon` varchar(50) NOT NULL,
  `notification_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_notification`
--

INSERT INTO `tb_notification` (`notification_id`, `notification_type`, `notification_user`, `notification_parent`, `notification_desc`, `notification_status`, `notification_icon`, `notification_date`) VALUES
(1, 'comments', 12345, 0, 'membuat posting', 'tidak', '', '2016-10-05 00:00:00'),
(2, 'comments', 12345, 0, 'membuat komentar', 'tidak', '', '2016-10-05 00:00:00'),
(3, 'comment', 12345, 0, 'membuat komentar', 'tidak', '', '2016-10-11 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` bigint(20) NOT NULL,
  `post_title` text,
  `post_content` text,
  `post_name` varchar(200) DEFAULT NULL,
  `post_status` enum('Publish','Draf','Trash') DEFAULT NULL,
  `post_priority` enum('Normal','Priority') DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_modified` datetime DEFAULT NULL,
  `post_seo_title` varchar(200) DEFAULT NULL,
  `post_meta_desc` text,
  `post_meta_keyword` text,
  `post_comment` enum('Enable','Disable') DEFAULT NULL,
  `post_type` varchar(20) DEFAULT NULL,
  `post_parent` bigint(20) DEFAULT NULL,
  `post_mime_type` varchar(100) DEFAULT NULL,
  `post_author` varchar(50) DEFAULT NULL,
  `post_view` int(9) DEFAULT NULL,
  `post_comment_count` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_title`, `post_content`, `post_name`, `post_status`, `post_priority`, `post_date`, `post_modified`, `post_seo_title`, `post_meta_desc`, `post_meta_keyword`, `post_comment`, `post_type`, `post_parent`, `post_mime_type`, `post_author`, `post_view`, `post_comment_count`) VALUES
(99, NULL, NULL, 'aku-luar-biasa.jpg', NULL, NULL, '2016-10-14 00:00:00', '2016-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 98, 'jpeg', 'administrator', NULL, NULL),
(105, 'aku luar biasa', '<p>hebat</p>\r\n', 'aku-luar-biasa-5', NULL, NULL, '2016-10-14 00:00:00', '2016-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'administrator', 15, 1),
(106, NULL, NULL, 'aku-luar-biasa-5.jpg', NULL, NULL, '2016-10-14 00:00:00', '2016-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 105, 'jpeg', 'administrator', NULL, NULL),
(108, NULL, NULL, 'try-post-some-thing-fucking-great.jpg', NULL, NULL, '2016-10-15 00:00:00', '2016-10-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 107, 'jpeg', 'administrator', NULL, NULL),
(109, 'satu', '<p>indonesia merdeka</p>\r\n', 'satu', NULL, NULL, '2016-10-17 00:00:00', '2016-10-17 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'administrator', 9, NULL),
(110, NULL, NULL, 'satu.jpg', NULL, NULL, '2016-10-17 00:00:00', '2016-10-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 109, 'jpeg', 'administrator', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `setting_id` bigint(20) NOT NULL,
  `setting_type` varchar(60) NOT NULL,
  `setting_name` varchar(60) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_terms`
--

CREATE TABLE `tb_terms` (
  `terms_id` bigint(20) NOT NULL,
  `terms_type` varchar(100) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_terms`
--

INSERT INTO `tb_terms` (`terms_id`, `terms_type`, `category_id`, `post_id`) VALUES
(1, '', 2, 79),
(6, '', 2, 82),
(7, '', 2, 1),
(8, '', 2, 1),
(9, '', 3, 105),
(10, '', 2, 107),
(11, '', 2, 109);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_feeds`
--

CREATE TABLE `tb_user_feeds` (
  `feed_id` bigint(20) NOT NULL,
  `feed_parent` bigint(20) NOT NULL,
  `feed_author` varchar(50) NOT NULL,
  `feed_author_email` varchar(100) NOT NULL,
  `feed_author_url` varchar(200) NOT NULL,
  `feed_content` text NOT NULL,
  `feed_status` enum('approved','pending','spam','trash') NOT NULL,
  `feed_type` enum('comments','testimony','contact') NOT NULL,
  `feed_date` datetime NOT NULL,
  `feed_ip` varchar(18) NOT NULL,
  `feed_agent` varchar(255) NOT NULL,
  `feed_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_feeds`
--

INSERT INTO `tb_user_feeds` (`feed_id`, `feed_parent`, `feed_author`, `feed_author_email`, `feed_author_url`, `feed_content`, `feed_status`, `feed_type`, `feed_date`, `feed_ip`, `feed_agent`, `feed_user_id`) VALUES
(4, 0, 'pholenk', 'bramandityaadi@yahoo.co.id', '', 'ikhsan kaya celek', 'pending', 'contact', '0000-00-00 00:00:00', '', '', 0),
(5, 0, 'pholenk', 'bramandityaadi@yahoo.co.id', '', 'ikhsan kaya celek bebek', 'pending', 'contact', '2016-10-03 00:00:00', '::1', '', 0),
(6, 0, 'pholenk', 'bramandityaadi@yahoo.co.id', '', 'fuck you bitch', 'pending', 'contact', '2016-10-12 00:00:00', '::1', '', 0),
(10, 107, 'Admin istrator', '', '', 'fotonya bagus mas', 'approved', 'testimony', '2016-10-16 00:00:00', '', '', 0),
(11, 107, 'Admin istrator', '', '', 'setuju sama agan diatas', 'approved', 'testimony', '2016-10-16 00:00:00', '', '', 0),
(12, 105, 'Admin istrator', '', '', 'ikhsan legob', 'approved', 'testimony', '2016-10-17 00:00:00', '', '', 0),
(13, 12, 'Admin istrator', '', '', 'genah iyaotake nang dengkul kae', 'approved', 'comments', '2016-10-17 00:00:00', '', '', 0),
(14, 12, 'Admin istrator', '', '', 'genah iyaotake nang dengkul kae', 'approved', 'comments', '2016-10-17 00:00:00', '', '', 0),
(15, 10, 'ikh ikh san', '', '', 'boong', 'approved', 'comments', '2016-10-17 00:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(3, '::1', 'pholenk0049', '$2y$08$S7Zxo1kZv7xPtAOnVV0QL.RJDfTgmJzvH6df9cAQL6lSQ33Qd/I5i', NULL, 'bramandityaadi@yahoo.co.id', NULL, NULL, NULL, NULL, 1473843996, 1476686522, 1, 'Prabowo', 'Adi', 'poltek', '00'),
(4, '::1', 'administrator', '$2y$08$yA.fNlXVYvD9DAW0N7RJCeoCEC3GuzEBmquJKHAf7JAS..hhcZ6ta', NULL, 'administrator@administrator.com', NULL, NULL, NULL, NULL, 1474338634, 1476691536, 1, 'Admin', 'istrator', 'admin', '00'),
(5, '::1', 'muhamad', '$2y$08$KSQ7v1FBp7mLVby0H9nQ4uWuwDL1cge5Vtgg/pf53XbreUxQvlxGu', NULL, 'irfan@gmail.com', NULL, NULL, NULL, NULL, 1476673043, NULL, 1, 'irfan', 'nudin', 'qq', '08978786'),
(6, '::1', 'ikh', '$2y$08$q/29/QucYPf3ADERhljAjeNbcQqwcevX2nRajGDQdmUXH/L0A7VBy', NULL, 'ikikikik@gmail.com', NULL, NULL, NULL, NULL, 1476691329, 1476691399, 1, 'ikh ikh', 'san', 'kadar ikhsan', '08889876');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(4, 3, 2),
(5, 4, 1),
(6, 5, 2),
(7, 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_notification`
--
ALTER TABLE `tb_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `tb_terms`
--
ALTER TABLE `tb_terms`
  ADD PRIMARY KEY (`terms_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `post_id_2` (`post_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tb_user_feeds`
--
ALTER TABLE `tb_user_feeds`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_notification`
--
ALTER TABLE `tb_notification`
  MODIFY `notification_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `tb_terms`
--
ALTER TABLE `tb_terms`
  MODIFY `terms_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_user_feeds`
--
ALTER TABLE `tb_user_feeds`
  MODIFY `feed_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
