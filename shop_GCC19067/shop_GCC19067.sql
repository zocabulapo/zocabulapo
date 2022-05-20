-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2022 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `game`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admmin`
--

CREATE TABLE `admmin` (
  `idadmin` int(11) NOT NULL,
  `isername` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admmin`
--

INSERT INTO `admmin` (`idadmin`, `isername`, `password`, `adminstatus`) VALUES
(1, 'khanvuong', '25d55ad283aa400af464c76d713c07ad', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(100) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(39, 0, '2559', 1),
(40, 24, '2542', 0),
(41, 24, '9561', 0),
(42, 24, '7843', 0),
(43, 24, '5513', 0),
(44, 24, '9818', 0),
(45, 28, '5766', 1),
(46, 28, '3213', 1),
(47, 29, '9111', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(200) NOT NULL,
  `id_sanpham` varchar(200) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(29, '2559', '48', 1),
(30, '2542', '44', 1),
(31, '9561', '48', 1),
(32, '9561', '38', 2),
(33, '7843', '48', 1),
(34, '5513', '27', 1),
(35, '5513', '43', 1),
(36, '9818', '45', 1),
(37, '5766', '51', 1),
(38, '3213', '51', 1),
(39, '3213', '48', 1),
(40, '3213', '37', 1),
(41, '9111', '43', 1),
(42, '9111', '48', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(23, 'Vuong Khang', 'zocabulapo@gmail.com', 'Vinh Xuong,An Giang', 'e10adc3949ba59abbe56e057f20f883e', '0962010052'),
(24, 'Vuong Khang', 'zocabulapo@gmail.com', 'Vinh Xuong,An Giang', 'e10adc3949ba59abbe56e057f20f883e', '0962010052'),
(29, 'Vuong Khai', 'zocabu@gmail.com', 'Vinh Xuong,An Giang', 'e10adc3949ba59abbe56e057f20f883e', '0962010052');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `Id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`Id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(27, 'Adventure', 12),
(29, 'Horror', 1233),
(30, 'Sports', 122233),
(31, 'Action', 236),
(32, 'Scient fictions', 12555);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `Id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `Id_danhmuc`) VALUES
(26, 'Last of us 2', '002', '350', 102, '1641095500_AO2.jpg', '', '\"', 1, 32),
(27, 'Resident Evil 8', '13152', '350', 100, '1641094459_RE8.webp', '', '\"', 1, 29),
(30, 'Resident Evil 7', 'Code2', '500', 8989, '1641095538_RE8.jpg', '', '\"', 1, 29),
(31, 'Watch dog', '131511', '50', 102, '1641094783_sb1.jpg', '', '\"', 1, 32),
(32, 'The Witcher 3', '002', '350', 10, '1641094678_TWC.jpg', 'dwadasdwadsd', 'asdasdasdasd', 1, 31),
(34, 'God of Death', 'df13241', '350', 10, '1641643626_XPYCx7E.jpg', '', '\"', 1, 32),
(37, 'ScyberFunk ', '55', '350', 105, '1641095148_sb3.jpg', 'asdasda', 'asdasd', 1, 32),
(38, 'ScyberFunk 2', '0024', '350', 1221, '1641095223_sp2.jpg', 'asdwasdawd', 'asdawasd', 1, 32),
(39, 'Asssasin creed 4', '002111', '350', 12111, '1641804383_maxresdefault (1).jpg', '', '\"', 1, 31),
(40, 'Far cry 4', '5555', '350', 1025, '1641095368_FC.jpg', 'Far cry 4', 'Far cry 4', 1, 31),
(43, 'Outlast 3', '512334', '350', 1231235, '1641643570_The_Outlast_Trials_Banner_Logo.png', '', '\"', 1, 29),
(44, 'Outlast 4', '000', '350', 909, '1641643492_Outlast-Trinity-1.png', '', '\"', 1, 29),
(45, 'Outlast 5', '21415', '350', 10241, '1641643351_adae584a35.jpg', '', '\"', 1, 29),
(46, 'Last of us 2', 'AP12', '350', 12114, '1641717539_LOU.jpg', 'Last of us 2', 'Last of us 2', 1, 32),
(47, 'PES 2021', 'APS1', '350', 1234, '1641622903_peS.jpg', 'PES 2021', 'PES 2021', 1, 30),
(48, 'Inazuma eleven striker', 'ADF12', '350', 10, '1641804206_716+Hq9JzzL.jpg', '', 'Inazuma Eleven Strikers (イナズマイレブンストライカーズ, Inazuma Irebun Sutoraikāzu) is the first Inazuma Eleven spin-off for the Nintendo Wii, featuring characters from all three original DS games, as well as five special guests from Inazuma Eleven GO.', 1, 30),
(49, 'FIFA 2020', '00298A', '350', 10, '1641896497_Fafa.jfif', '', 'Until the next appointment, FIFA and PES - two rivalries in the football simulation game genre - have officially launched the global gaming community. Each game has its own pros and cons, though, FIFA 20 is expected to make a difference with the Volta mode, which allows gamers to participate in street football matches.', 1, 30),
(50, 'Tomb of raider', 'AO123', '350', 1058, '1641899423_Tomb-Raider.jpg', 'Tomb Raider is a critically acclaimed action adventure that explores the intense and gritty origin story of Lara Croft and her ascent from a young woman to a hardened survivor. Armed only with raw instincts and the ability to push beyond the limits of hum', 'Tomb Raider is a critically acclaimed action adventure that explores the intense and gritty origin story of Lara Croft and her ascent from a young woman to a hardened survivor. Armed only with raw instincts and the ability to push beyond the limits of human endurance, Lara must fight to unravel the dark history of a forgotten island to escape its relentless hold. The Game of the Year edition includes the Tomb of the Lost Adventurer, 6 single player outfits for Lara, 6 multiplayer weapons, 8 multiplayer maps, and 4 characters.', 1, 27),
(51, 'Ninja turtles', 'AL1315', '350', 1256, '1641899668_tmnt1029131280jpg-e95f11_160w.jpg', 'Download and play as TMNT - Deep below the surface, in the sewers of New York City, four turtle brothers were mutated by radioactive ooze and began training in the art of ninjutsu. From the shadows, they protect the citizens of their city from evil ninja ', 'Download and play as TMNT - Deep below the surface, in the sewers of New York City, four turtle brothers were mutated by radioactive ooze and began training in the art of ninjutsu. From the shadows, they protect the citizens of their city from evil ninja clans, dangerous mutants, and interdimensional tyrants of all shapes and sizes. While in a fight with one of their greatest archenemies—the fearsome Krang—our heroes in a half-shell were jettisoned on a one way trip across the Multiverse.', 1, 27);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admmin`
--
ALTER TABLE `admmin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`Id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admmin`
--
ALTER TABLE `admmin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `Id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
