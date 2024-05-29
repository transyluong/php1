-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2019 lúc 05:57 PM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_bandienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hedieuhanh`
--

CREATE TABLE `hedieuhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hedieuhanh`
--

INSERT INTO `hedieuhanh` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'IOS', '2019-10-10 09:30:21', '2019-10-10 09:30:21'),
(2, 'ANDROID', '2019-10-10 09:30:34', '2019-10-10 09:30:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngaymua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuongthucthanhtoan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `ngaymua`, `tongtien`, `trangthai`, `phuongthucthanhtoan`, `id_user`, `ten`, `sdt`, `dia_chi`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(1, '19-11-11', '4,000,000.00', '1', NULL, 2, 'Đinh Văn Tuấn', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 09:21:36', '2019-11-12 00:06:50'),
(2, '19-11-11', '33,000,000.00', '0', NULL, 2, 'Đinh Văn Tuấn', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 09:23:28', '2019-11-11 09:23:28'),
(3, '19-11-11', '4,000,000.00', '0', NULL, 2, 'Đinh Văn Tuấn', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 09:26:28', '2019-11-11 09:26:28'),
(4, '19-11-11', '0.00', '0', NULL, 2, 'Đinh Văn Tuấn', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 09:26:28', '2019-11-11 09:26:28'),
(5, '19-11-11', '0.00', '0', NULL, 2, 'Đinh Văn Tuấn', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 09:26:28', '2019-11-11 09:26:28'),
(6, '19-11-12', '25,000,000.00', '1', NULL, 5, 'Hà Văn Tú', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 20:20:07', '2019-11-11 21:49:21'),
(7, '19-11-12', '0.00', '0', NULL, 5, 'Hà Văn Tú', 333116555, 'Chợ Nhổn', NULL, '2019-11-11 20:20:07', '2019-11-11 20:20:07'),
(8, '19-11-12', '29,000,000.00', '0', NULL, 6, 'Nguyễn Văn Nam', 12345890, 'HÀ NỘI', 'Gói kín cho a', '2019-11-11 23:20:45', '2019-11-11 23:20:45'),
(9, '19-11-12', '8,000,000.00', '0', NULL, 5, 'Lê Văn TỰ', 333116555, 'Tu HOàng - Hà nội', NULL, '2019-11-12 00:09:25', '2019-11-12 00:09:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `id` int(10) UNSIGNED NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `id_hoadon` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`id`, `soluongmua`, `id_hoadon`, `id_sanpham`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, '2019-11-11 09:21:36', '2019-11-11 09:21:36'),
(2, 1, 2, 5, '2019-11-11 09:23:28', '2019-11-11 09:23:28'),
(3, 2, 2, 7, '2019-11-11 09:23:28', '2019-11-11 09:23:28'),
(4, 1, 3, 4, '2019-11-11 09:26:28', '2019-11-11 09:26:28'),
(5, 1, 6, 5, '2019-11-11 20:20:07', '2019-11-11 20:20:07'),
(6, 1, 8, 6, '2019-11-11 23:20:45', '2019-11-11 23:20:45'),
(7, 1, 8, 5, '2019-11-11 23:20:45', '2019-11-11 23:20:45'),
(8, 2, 9, 6, '2019-11-12 00:09:25', '2019-11-12 00:09:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausacsanpham`
--

CREATE TABLE `mausacsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausacsanpham`
--

INSERT INTO `mausacsanpham` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'Trắng', '2019-10-10 09:37:15', '2019-10-10 09:37:15'),
(2, 'Đen', '2019-10-10 09:37:19', '2019-10-10 09:37:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_24_163810_the_loai', 2),
(4, '2019_09_24_164827_thuong_hieu', 3),
(5, '2019_09_24_164934_he_dieu_hanh', 4),
(6, '2019_09_24_165011_ram', 5),
(7, '2019_09_24_165104_bo_nho_trong', 6),
(8, '2019_09_24_165143_mau_sac', 7),
(9, '2019_09_24_165229_san_pham', 8),
(10, '2019_09_24_165938_comment', 9),
(11, '2019_09_24_170254_slide', 10),
(12, '2019_09_24_170333_hoadon', 11),
(13, '2019_09_24_170513_hoadonchitiet', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ram`
--

CREATE TABLE `ram` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ram`
--

INSERT INTO `ram` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, '1GB', '2019-10-07 09:03:27', '2019-10-07 09:03:27'),
(2, '2GB', '2019-10-07 09:03:31', '2019-10-07 09:03:31'),
(3, '4GB', '2019-10-07 09:03:34', '2019-10-07 09:03:34'),
(4, '8GB', '2019-10-07 09:03:37', '2019-10-07 09:03:37'),
(5, '16GB', '2019-10-07 09:03:41', '2019-10-07 09:03:41'),
(6, '32GB', '2019-10-07 09:06:56', '2019-10-07 09:06:56'),
(7, '64GB', '2019-10-07 09:07:01', '2019-10-07 09:07:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `id_mausacsanpham` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `manhinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LED-backlit IPS LCD, 4.7", Retina HD',
  `camera_truoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '7 MP',
  `camera_sau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '12 MP',
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Apple A10 Fusion 4 nhân 64-bit',
  `dungluongpin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trongluong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '138',
  `dophangiai_manhinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'HD (750 x 1334 Pixels)',
  `kichthuoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm',
  `gps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A-GPS, GLONASS',
  `bluetooth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A2DP, LE, v4.2',
  `id_theloai` int(10) UNSIGNED NOT NULL,
  `id_hedieuhanh` int(10) UNSIGNED NOT NULL,
  `id_ram` int(10) UNSIGNED NOT NULL,
  `id_bonhotrong` int(10) UNSIGNED NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `gia` double NOT NULL,
  `gia_sale` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `hinhanh`, `soluong`, `id_mausacsanpham`, `manhinh`, `camera_truoc`, `camera_sau`, `cpu`, `dungluongpin`, `trongluong`, `dophangiai_manhinh`, `kichthuoc`, `gps`, `bluetooth`, `id_theloai`, `id_hedieuhanh`, `id_ram`, `id_bonhotrong`, `trangthai`, `gia`, `gia_sale`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 7 Plus', 'Iphone7Plus.jpg', 10, 2, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12MP', 'Apple A10 Fusion 4 nhân 64-bit', '1960', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 1, 1, 1, 5000000, 4000000, '2019-10-22 02:29:49', '2019-10-22 02:00:34'),
(2, 'Iphone 8 Plus', 'Iphone8Plus.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '2658', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 3, 1, 7000000, 4000000, '2019-10-22 02:57:29', NULL),
(3, 'Iphone 11', 'Iphone11.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '1988', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 3, 1, 3500000, 0, '2019-10-22 02:58:12', NULL),
(4, 'Iphone 11 Pro', 'Iphone11Pro.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3922', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 2, 3, 1, 8200000, 4000000, '2019-10-22 03:09:26', NULL),
(5, 'Iphone 11 Pro Max', 'Iphone11ProMax.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '4212', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 3, 1, 25000000, 0, '2019-10-22 03:09:26', NULL),
(6, 'Iphone X', 'IphoneX.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3658', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 2, 3, 1, 10300000, 4000000, '2019-10-22 03:09:26', NULL),
(7, 'Iphone Xr', 'IphoneXr.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3782', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 3, 1, 7400000, 4000000, '2019-10-22 03:09:26', NULL),
(8, 'Iphone XS', 'IphoneXS.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3622', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 1, 1, 18200000, 4000000, '2019-10-22 03:09:26', NULL),
(9, 'Iphone XS Max', 'IphoneXSMax.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '4588', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 1, 1, 3, 3, 1, 29500000, 4000000, '2019-10-22 03:09:26', NULL),
(10, 'SamSung Galaxy A30s', 'SamSungA30s.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '4000', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 2, 3, 1, 6200000, 4000000, '2019-10-22 03:09:26', NULL),
(11, 'SamSung Galaxy A50s', 'SamSungA50s.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '4300', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 3, 2, 1, 9000000, 4000000, '2019-10-22 03:09:26', NULL),
(12, 'SamSung Galaxy A70', 'SamSungA70.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3920', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 2, 3, 1, 8200000, 4000000, '2019-10-22 03:09:26', NULL),
(13, 'SamSung Galaxy Note 9', 'SamSungNote9.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '4600', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 3, 3, 1, 16200000, 4000000, '2019-10-22 03:09:26', NULL),
(14, 'SamSung Galaxy Note 10', 'SamSungNote10.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '5000', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 2, 3, 1, 28500000, 4000000, '2019-10-22 03:09:26', NULL),
(15, 'SamSung Galaxy S10+', 'SamSungS10.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '5200', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 3, 3, 1, 30000000, 4000000, '2019-10-22 03:09:26', NULL),
(16, 'SamSung Galaxy A7', 'SamSungA7.jpg', 10, 1, 'LED-backlit IPS LCD, 4.7\", Retina HD', '7 MP', '12 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3500', '138', 'HD (750 x 1334 Pixels)', 'Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm', 'A-GPS, GLONASS', 'A2DP, LE, v4.2', 2, 2, 2, 1, 1, 2200000, 4000000, '2019-10-22 03:09:26', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `ten`, `hinh`, `noidung`, `link`, `trangthai`, `created_at`, `updated_at`) VALUES
(3, '123456', 'igld_2.png', '123456', '1234567', 1, '2019-11-11 20:12:54', '2019-11-11 20:12:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `ten`, `tenkhongdau`, `hinhanh`, `ghichu`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'iphone', 'SfIY_1564475594.jpg', 'Táo cắn dở', 1, '2019-10-07 08:39:54', '2019-10-07 08:39:54'),
(2, 'SamSung', 'samsung', 'IdVo_1564475362.jpg', 'Sam Sung', 1, '2019-10-07 08:41:59', '2019-10-07 08:41:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `phone` varchar(11) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `fullname`, `sex`, `email`, `role`, `phone`, `diachi`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trưởng nguyễn văn', 'pn8h_1564476279.jpg', 'truong nguyen van', 1, 'admin@gmail.com', 1, '0382788384', 'Bắc Ninh', NULL, '$2y$10$yyQ.Ve8/Eaf3JYxxh0DAJuchXu6VKTTEWC/oPtAvDhWp7hAZJ6mAO', NULL, '2019-10-07 08:26:53', '2019-10-07 08:33:37'),
(2, 'Đinh Văn Tuấn', 'rpCI_1564476140.jpg', 'dinh van tuan', 1, 'tuan@gmail.com', 2, '1234567890', 'Bắc Giang', NULL, '12345', NULL, '2019-10-07 08:27:40', '2019-11-11 09:55:45'),
(3, 'Đinh Văn Tuấn', NULL, 'Đinh Văn Tuấn', 1, 'dtuan5160@gmail.com', 2, '0333116555', 'Chợ Nhổn', NULL, '$2y$10$0RCxO.GMOFMi7mEL5u.lLOodkWYo6CtWtvdDYJjCFD1SBRqUteO42', NULL, '2019-11-11 10:19:53', '2019-11-11 10:19:53'),
(4, 'Đinh Văn Tuấn', NULL, 'Đinh Văn Tuấn', 1, 'dtuan5161@gmail.com', 2, '0333116555', 'Chợ Nhổn', NULL, '$2y$10$GyUOam3WOGkdwCVD/4g3xuWv4Uq5vD1YR5RhBEOqF9QLN/2hSHUCG', NULL, '2019-11-11 10:20:56', '2019-11-11 10:20:56'),
(5, 'Hà Tú', 'lzOW_1.png', 'Hà Tú', 1, 'hatu@gmail.com', 2, '0333116555', 'Chợ Nhổn', NULL, '$2y$10$EEmdMpaZf9UUK8/IpOQht.AvmtnEDrL.0OgVajgGfffEAHjWzjO/.', NULL, '2019-11-11 10:32:10', '2019-11-11 10:32:10'),
(6, 'nguyen van nam', NULL, 'nguyen van nam', 1, 'nam@gmail.com', 2, '1234567890', 'ânsklvassa', NULL, '$2y$10$OgigvjEm50L5kQTEOndtnOHZShk/FxJmXFbY4fiwPTnCqpaZjVNbG', NULL, '2019-11-11 23:16:47', '2019-11-11 23:16:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_user_foreign` (`id_user`),
  ADD KEY `comment_id_sanpham_foreign` (`id_sanpham`);

--
-- Chỉ mục cho bảng `hedieuhanh`
--
ALTER TABLE `hedieuhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadonchitiet_id_hoadon_foreign` (`id_hoadon`),
  ADD KEY `hoadonchitiet_id_sanpham_foreign` (`id_sanpham`);

--
-- Chỉ mục cho bảng `mausacsanpham`
--
ALTER TABLE `mausacsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id_hedieuhanh_foreign` (`id_hedieuhanh`),
  ADD KEY `sanpham_id_ram_foreign` (`id_ram`),
  ADD KEY `sanpham_id_bonhotrong_foreign` (`id_bonhotrong`),
  ADD KEY `id_theloai` (`id_theloai`),
  ADD KEY `id_mausacsanpham` (`id_mausacsanpham`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hedieuhanh`
--
ALTER TABLE `hedieuhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mausacsanpham`
--
ALTER TABLE `mausacsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_id_hoadon_foreign` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `hoadonchitiet_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_mausacsanpham`) REFERENCES `mausacsanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_id_bonhotrong_foreign` FOREIGN KEY (`id_bonhotrong`) REFERENCES `ram` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_id_hedieuhanh_foreign` FOREIGN KEY (`id_hedieuhanh`) REFERENCES `hedieuhanh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_id_ram_foreign` FOREIGN KEY (`id_ram`) REFERENCES `ram` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
