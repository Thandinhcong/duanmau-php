-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 11:52 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL DEFAULT '',
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL,
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) NOT NULL,
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'cheeeee', 1, 41, '11:53:01am 20/10/22'),
(2, 'cheeeee', 1, 41, '11:53:06am 20/10/22'),
(5, 'ok la', 1, 51, '12:32:38pm 20/10/22'),
(7, 'ok đấy bạn', 1, 40, '07:27:30pm 21/10/22'),
(8, 'ok nha', 1, 48, '07:27:42pm 21/10/22'),
(9, 'ok đấy bạn', 1, 45, '07:27:54pm 21/10/22'),
(10, 'đôi này phối đồ rất hợp nha', 1, 47, '07:28:13pm 21/10/22'),
(11, 'ok', 1, 50, '05:34:21am 22/10/22'),
(12, 'ok', 0, 50, '06:05:11pm 22/10/22'),
(13, 'ok đấy bạn', 0, 50, '06:06:07pm 22/10/22'),
(14, '', 0, 50, '06:07:06pm 22/10/22'),
(15, 'ok', 1, 41, '06:07:23pm 22/10/22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(16, 'Giay fake'),
(17, 'GIày aouth'),
(21, 'Giay đểu'),
(23, 'Giay giá học sinh sinh viên'),
(28, 'giày đi fuho');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `image` text DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `image`, `mota`, `view`, `iddm`) VALUES
(40, 'Giay nike trắng', 299999.00, 'product1.jpg', 'Phối đồ hợp , phù hợp với phong cách hiện đại', 100, 28),
(41, 'giay jodan', 900000.00, 'product2.jpg', 'duojc phết', 80, 17),
(43, 'giay nike vang', 2990000.00, 'product4.jpg', 'giay này đẹp', 0, 28),
(45, 'giay nike vang', 30000009.00, 'product6.jpg', 'nét luôn nhé bạn', 36, 23),
(46, 'giay nike vang', 200000.00, 'product5.jpg', 'phù hợp với phong cách giới trẻ hiện', 24, 28),
(47, 'Giay nike', 39999999.00, 'product1.jpg', 'ok', 70, 17),
(48, 'Giay nike', 49999999.00, 'product2.jpg', 'được', 10, 17),
(49, 'Giay nike', 499999.00, 'product6.jpg', 'Gichuyên dùng cho sân cỏ nhân tạo, luôn được sự săn lùng của đông đảo mọi người.', 7, 28),
(50, 'Giay jodan aouthentic hot 2021', 200000.00, 'product2.jpg', 'giay hot nhat nam 2022 duoc goi tre ua dung rat nhieu , phoi do don gian', 0, 16),
(51, 'giày bot', 899999.00, 'giay-mlb-big-ball-chunky-p-boston-size-235-604adf7be682f-12032021102651.png', 'goày hot nhất hiện nay, được giới trẻ dùng rất nhiều\r\n', 0, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `password`, `email`, `address`, `tel`, `role`) VALUES
(1, 'thandinh', 'than2003', 'dinhcongthan03@gmail.com', '26-kieumai', '0989888888', 1),
(3, 'thandinh2000', 'than2003', 'dinhcongthan2003@gmail.com', '26_kiều mai_phúc diễn', '0989999999', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
