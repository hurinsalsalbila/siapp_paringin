-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 15.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `nama_bidang` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nama_bidang`, `created_at`, `updated_at`) VALUES
(2, 'SEKRETARIAT', '2021-12-19 09:08:15', '2021-12-19 09:08:15'),
(3, 'DATA', '2021-12-19 09:13:34', '2021-12-19 09:13:34'),
(4, 'STATISTIK', '2022-01-10 00:20:38', '2022-01-10 00:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_magang`
--

CREATE TABLE `data_magang` (
  `id_magang` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `bidang` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_magang`
--

INSERT INTO `data_magang` (`id_magang`, `tanggal`, `nama`, `sekolah`, `no_telp`, `keperluan`, `bidang`, `created_at`, `updated_at`) VALUES
(1, '2022-01-21', 'Zassciazaz', 'Teriiausas', '9092897282782', 'YAsauyshuayhsuay', 'Biduyhauhsioaj', '2022-01-01 16:51:30', '2022-01-01 16:51:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tamu`
--

CREATE TABLE `data_tamu` (
  `id_tamu` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tamu`
--

INSERT INTO `data_tamu` (`id_tamu`, `tanggal`, `nama`, `alamat`, `no_telp`, `keperluan`, `keterangan`, `updated_at`, `created_at`) VALUES
(1, '2022-01-01', 'asas', 'Jl.ihiuhed cejcneiojc kjshfkhue kaina  hajeenf', '088716271627178', 'dasdadefef fefefe btybt', 'swawsa frtvtrtv  nyny', '2022-01-01 06:12:49', '2021-12-31 23:12:49'),
(2, '2022-01-09', 'asasa', 'sdwdw zxasasa', '08872872872', 'nsauhsiaus', 'asasasa', '2022-01-01 06:37:11', '2021-12-31 23:37:11'),
(3, '2022-01-09', 'asasa', 'sdwdw zxasasa', '08872872872', 'nsauhsiaus', 'asasasa', '2022-01-01 06:37:33', '2021-12-31 23:37:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(5) NOT NULL,
  `id_tamu` int(4) NOT NULL,
  `permintaan` varchar(100) NOT NULL,
  `penyebab` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(4) NOT NULL,
  `id_tamu` int(4) NOT NULL,
  `permintaan` varchar(100) NOT NULL,
  `permasalahan` text NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lpse`
--

CREATE TABLE `lpse` (
  `id_lpse` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_perusahaan` varchar(250) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `keperluan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_16_125934_create_role', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'User', '2021-12-08 18:50:05', '2021-12-15 18:50:05'),
(1, 'Administrator', '2021-12-22 18:50:05', '2021-12-29 18:50:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dispensasinikah`
--

CREATE TABLE `tb_dispensasinikah` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(250) NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `perihal` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `ttl` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dispensasinikah`
--

INSERT INTO `tb_dispensasinikah` (`id`, `no_surat`, `tanggal`, `perihal`, `nama`, `ttl`, `agama`, `pekerjaan`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(2, 'NO/2/DISPENSASINIKAH/122021', '2022-01-05 17:00:00', 'Dispensasi Nikah', 'Ahmad Sunardi', '2022-01-12', 'Kristen Protestan', 'PNS', 'Jl.Halong', 'Disetujui', '2022-01-18 19:48:13', '2022-01-18 19:48:13'),
(3, 'NO/2/SEKRETARIAT/122021', '2022-01-11 17:00:00', 'Musyawarah XII', 'Gurdani', '2022-01-22', 'Kristen Protestan', 'Swasta', 'Jl Putri Salju', 'Terkendali', '2022-01-19 00:10:57', '2022-01-19 00:10:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lapkependudukan`
--

CREATE TABLE `tb_lapkependudukan` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `laki_laki` varchar(100) NOT NULL,
  `perempuan` varchar(100) NOT NULL,
  `jml_kk` int(100) NOT NULL,
  `jml_anggota` int(100) NOT NULL,
  `jml_jiwa` int(100) NOT NULL,
  `lahir` int(100) NOT NULL,
  `datang` int(100) NOT NULL,
  `meninggal` int(100) NOT NULL,
  `pindah` int(100) NOT NULL,
  `jml_pendudukakhirbulan` int(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lapkependudukan`
--

INSERT INTO `tb_lapkependudukan` (`id`, `kelurahan`, `laki_laki`, `perempuan`, `jml_kk`, `jml_anggota`, `jml_jiwa`, `lahir`, `datang`, `meninggal`, `pindah`, `jml_pendudukakhirbulan`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'Paringin Timur', '123', '212', 323, 434, 323, 323, 434, 323, 434, 212, 'Mantap', '2022-01-18 05:42:50', '2022-01-18 05:42:50'),
(3, 'Paringin Timur', '123', '212', 323, 434, 323, 323, 434, 323, 434, 212, 'Mantap', '2022-01-18 05:43:01', '2022-01-18 05:43:01'),
(4, 'Tebing Tinggi', '323', '422', 7453, 724, 719, 323, 53, 53, 23, 738, 'Stabil', '2022-01-19 00:08:52', '2022-01-19 00:08:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skpd`
--

CREATE TABLE `tb_skpd` (
  `skpd_id` int(250) NOT NULL,
  `skpd_nama` varchar(250) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skpd`
--

INSERT INTO `tb_skpd` (`skpd_id`, `skpd_nama`, `created_at`, `updated_at`) VALUES
(1, 'sasasa', '2022-01-09 19:40:25.000000', '2022-01-09 19:40:25.000000'),
(2, 'sasasa', '2022-01-09 19:41:34.000000', '2022-01-09 19:41:34.000000'),
(3, 'asasa', '2022-01-09 19:55:00.000000', '2022-01-09 19:55:00.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id` int(20) NOT NULL,
  `no_surat` varchar(25) DEFAULT NULL,
  `bidang` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `file_surat` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id`, `no_surat`, `bidang`, `tgl_surat`, `perihal`, `tgl_masuk`, `file_surat`, `created_at`, `updated_at`) VALUES
(6, 'NO/122021/3', 'Sekretariat', '2021-11-30', 'wdsdsdsdsd', '2021-12-18', 'file_surats/3nCY2HGKrPk1TcLr8d8XAGyk9ZtODKTGNCM1plSH.xlsx', '2021-12-19 08:50:43', '2021-12-19 08:50:43'),
(7, 'NO/122021/4', 'Sekretariat', '2021-12-14', 'aasasa', '2021-12-22', 'file_surats/jJX5uMjfzx1HpwAGwmpzPls47N1mdkE7YfTmbcUp.doc', '2021-12-19 08:51:31', '2021-12-19 08:51:31'),
(8, 'NO/122021/5', 'Data', '2021-12-22', 'asaSas dadasda', '2021-12-24', 'file_surats/FVuqkE3APfiryxgF53ODjaLaFyAstbgD5DWrwMEe.doc', '2021-12-19 09:14:59', '2021-12-19 09:14:59'),
(9, 'NO/6/SEKRETARIAT/122021', 'SEKRETARIAT', '2021-12-10', 'perihal contohi niinin', '2021-12-11', 'file_surats/pYY3tcGSrbNOcIwnQPqmXWlNqNDPS3RSA3wweURs', '2021-12-20 20:47:30', '2021-12-20 20:47:30'),
(10, 'NO/2/DATA/122021', 'DATA', '2021-12-18', 'aAaAAaA', '2021-12-18', 'file_surats/bOV2ddrpYcRQEm2ngzIjwz9oT9YU9zou1tPNORSh.pdf', '2021-12-21 01:06:13', '2021-12-21 01:06:13'),
(11, 'NO/2/SEKRETARIAT/122021', 'SEKRETARIAT', '2021-12-18', 'Asasasasasasa xzxzxzxzx', '2021-12-18', 'file_surats/4muRC0xZzNOUOV9A9heDSfIogU9mzaaR92sDAnEb.docx', '2021-12-21 01:07:56', '2021-12-21 01:07:56'),
(12, 'NO/2/DATA/122021', 'DATA', '2021-12-24', 'asasa', '2021-12-11', 'file_surats/i1ozBsFtxmEc9xJnNEkDrbzLdGCBMfUIca298ORj.docx', '2021-12-21 01:16:23', '2021-12-21 01:16:23'),
(13, 'NO/2/SEKRETARIAT/122021', 'SEKRETARIAT', '2021-12-18', 'Paginate 123', '2021-12-25', 'file_surats/NqAIJC5EMV1NojZP1mdXZ8eAwPVgFRHjbMfFrS68.jpg', '2021-12-23 17:58:34', '2021-12-23 17:58:34'),
(14, 'NO/2/SEKRETARIAT/122021', 'SEKRETARIAT', '2021-12-15', 'njsaijsajoia', '2021-12-28', 'file_surats/k5iL5fpbaSEbHEpVKzAlxWsMRvj89ungE0ywF59z.xlsx', '2021-12-27 00:12:13', '2021-12-27 00:12:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(100) DEFAULT NULL,
  `alamat_pengirim` varchar(250) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id`, `no_berkas`, `alamat_pengirim`, `no_surat`, `tgl_surat`, `perihal`, `created_at`, `updated_at`) VALUES
(8, '423/SATUDATA2021/12', 'Jl.Batu Piring RT 12 Blok A', 'NO/2/MASUK/122021', '2022-01-21', 'Undangan Rapat', '2022-01-18 23:49:33', '2022-01-18 23:49:33'),
(9, '23/KECPARINGIN/02/2022', 'Jl. Kecamatan Paringin Timur', 'NO.12/2/SEKR/12/2022', '2022-01-20', 'Jl. Paringin Timur', '2022-01-18 23:54:34', '2022-01-18 23:54:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratrekomendasi`
--

CREATE TABLE `tb_suratrekomendasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat_usaha` varchar(250) NOT NULL,
  `jenis_reklame` varchar(250) NOT NULL,
  `nama_toko` varchar(250) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `periode` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `alamat_toko` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_suratrekomendasi`
--

INSERT INTO `tb_suratrekomendasi` (`id`, `nama`, `alamat`, `no_telp`, `alamat_usaha`, `jenis_reklame`, `nama_toko`, `ukuran`, `periode`, `alamat_toko`, `created_at`, `updated_at`) VALUES
(1, 'asasasa', 'sasasasa', '08129819281', 'jasojasoji', 'asjiasjaois', 'aushiuas', '21x22', '2022-01-13 00:00:00', 'jl asjhaisuhas iaushaiushaiuhs', '2022-01-15 02:08:34', '2022-01-15 02:08:34'),
(2, 'asasasa', 'sasasasa', '08129819281', 'jasojasoji', 'asjiasjaois', 'aushiuas', '21x22', '2022-01-13 00:00:00', 'jl asjhaisuhas iaushaiushaiuhs', '2022-01-15 02:08:44', '2022-01-15 02:08:44'),
(3, 'safrullah', 'Jl Paringin Selatan', '098329839238', 'Jl. Sidoddadi', 'Baliho', 'Toko Sumber Rezeki', '21x34', '2022-01-19 00:00:00', 'Jl. Mangrokusumo', '2022-01-18 00:58:15', '2022-01-18 00:58:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_usulandata`
--

CREATE TABLE `tb_usulandata` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(250) NOT NULL,
  `tgl_surat` datetime DEFAULT NULL,
  `perihal` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_usulandata`
--

INSERT INTO `tb_usulandata` (`id`, `no_surat`, `tgl_surat`, `perihal`, `created_at`, `updated_at`) VALUES
(1, 'NO/2/SEKRETARIAT/122021', '2022-01-12 00:00:00', 'asasa asasas', '2022-01-15 02:57:56', '2022-01-15 02:57:56'),
(3, 'NO.12/2/TEST/12/2021', '2022-01-12 00:00:00', 'Jl. Dimana saja', '2022-01-18 00:59:07', '2022-01-18 00:59:07'),
(4, 'NO/2/STATISTIK/12/2021', '2022-01-14 00:00:00', 'Jl. Sudomunucl', '2022-01-18 01:01:05', '2022-01-18 01:01:05'),
(5, 'NO.12/2/TEST/12/2021', '2022-01-14 00:00:00', 'Jl. Paringin Timur', '2022-01-18 01:01:52', '2022-01-18 01:01:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 1, NULL, '$2y$10$c3iDXslGnFQmFqbL4qI7TOXoTfI34a4MYw9ib7myQSUoCr7Hwo6DS', NULL, '2021-12-15 23:08:23', '2021-12-15 23:08:23'),
(2, 'user', 'user@user.com', 0, NULL, '$2y$10$XWj/WwFqYGPyyr3LvFzUGOrlpWQAxPjn1AS2se/K/zemQc7RjWdEO', NULL, '2021-12-15 23:08:23', '2021-12-15 23:08:23'),
(3, 'user1', 'user1@user.com', 1, NULL, '$2y$10$.RtA4qthGWo4Kj.EASZI8.U6fJli0U2XZ2U9aW.RvF9n1srRrnqq2', NULL, '2021-12-16 11:46:02', '2021-12-16 11:46:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 0),
(2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_magang`
--
ALTER TABLE `data_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `data_tamu`
--
ALTER TABLE `data_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `lpse`
--
ALTER TABLE `lpse`
  ADD PRIMARY KEY (`id_lpse`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dispensasinikah`
--
ALTER TABLE `tb_dispensasinikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_lapkependudukan`
--
ALTER TABLE `tb_lapkependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_skpd`
--
ALTER TABLE `tb_skpd`
  ADD PRIMARY KEY (`skpd_id`);

--
-- Indeks untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suratrekomendasi`
--
ALTER TABLE `tb_suratrekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_usulandata`
--
ALTER TABLE `tb_usulandata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD KEY `user_role_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_magang`
--
ALTER TABLE `data_magang`
  MODIFY `id_magang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_tamu`
--
ALTER TABLE `data_tamu`
  MODIFY `id_tamu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kebutuhan`
--
ALTER TABLE `kebutuhan`
  MODIFY `id_kebutuhan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lpse`
--
ALTER TABLE `lpse`
  MODIFY `id_lpse` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_dispensasinikah`
--
ALTER TABLE `tb_dispensasinikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_lapkependudukan`
--
ALTER TABLE `tb_lapkependudukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_skpd`
--
ALTER TABLE `tb_skpd`
  MODIFY `skpd_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_suratrekomendasi`
--
ALTER TABLE `tb_suratrekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_usulandata`
--
ALTER TABLE `tb_usulandata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
