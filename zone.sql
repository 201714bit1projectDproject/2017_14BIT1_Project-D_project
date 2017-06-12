-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2017 lúc 05:54 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `zone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(255) DEFAULT NULL,
  `TongTien` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`id`, `tendangnhap`, `idsp`, `ProductName`, `sl`, `Price`, `TongTien`) VALUES
(16, 'rynphan', '21', 'LG G Pro Lite Dual', '1', 6000000, 6000000),
(17, 'rynphan', '22', 'Iphone 4 16GB', '1', 6000000, 6000000),
(18, 'abc123', '21', 'LG G Pro Lite Dual', '1', 6000000, 6000000),
(19, 'rynphan', '21', 'LG G Pro Lite Dual', '1', 6000000, 6000000),
(20, 'rynphan', '1', '11111', '1', 3231230, 3231230),
(21, 'rynphan', '21', 'LG G Pro Lite Dual', '1', 6000000, 6000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgh` int(255) NOT NULL,
  `idsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quanhuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgiandatmua` timestamp NULL DEFAULT NULL,
  `paymethod` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `tendangnhap`, `hoten`, `sodienthoai`, `email`, `diachi`, `quanhuyen`, `thanhpho`, `tgiandatmua`, `paymethod`) VALUES
(54, 'rynphan', 'b', 'b', 'boy_vip_pro@yahoo.com.vn', '12', '12', '12', '2015-04-18 07:45:48', NULL),
(55, 'abc123', 'b13', '123', '123123@gmail.com', '12', '12', '123', '2015-04-18 07:46:27', NULL),
(56, 'rynphan', '123213', '2312', '1231233@gmail.com', '123', '123', '123', '2015-04-18 08:03:22', NULL),
(57, 'rynphan', '23123', '12312', '123123@gmail.com', '123', '123', '123', '2015-04-18 08:03:52', NULL),
(58, 'rynphan', '123123', '123', '1233123@gmail.com', '1231231', '123123', '12312', '2015-04-18 08:04:15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `noidung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `diachi`, `email`, `sdt`, `tieude`, `noidung`) VALUES
(1, '', '', '4', '', '', ''),
(2, '3', '3', '3', '3', '3', '3'),
(3, '123', '123', '12323', '3', '3', '3'),
(4, '123', '123', '12323', '3', '3', '3'),
(5, '123', '123', '12323', '3', '3', '3'),
(6, '123', '123', '12323', '3', '3', '3'),
(7, '3', '3', '3', '3', '3', '3'),
(8, '3', '3', '3', '333333333333', '333333333333', '333333333333'),
(9, '3', '3', '3', '333333333333', '333333333333', '333333333333'),
(10, '3', '3', '3', '333333333333', '333333333333', '333333333333');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `ID` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `ModuleName` varchar(255) DEFAULT NULL,
  `MenuName` varchar(255) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Visible` bit(1) DEFAULT NULL,
  `Possition` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`ID`, `ParentID`, `ModuleName`, `MenuName`, `Path`, `Visible`, `Possition`) VALUES
(1, 0, 'administrator', 'Trang chủ', '?mod=home', b'1', 1),
(8, 0, 'users', 'User', '?mod=users	', b'0', 5),
(13, 0, 'products', 'Sản phẩm', '?mod=products', b'1', 8),
(15, 0, 'gioithieu', 'Giới thiệu', '?mod=gioithieu', b'1', 7),
(17, 0, 'administrator', 'Liên hệ', '?mod=lienhe', b'1', 9),
(24, 0, 'menus', 'Menu', '?mod=menus', b'1', 7),
(35, 0, 'frontpage', 'Bản Đồ', '?mod=map', b'1', 11),
(36, 0, 'administrator', 'Giỏ Hàng', '?mod=giohang', b'1', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus_left`
--

CREATE TABLE `menus_left` (
  `ID` int(11) NOT NULL,
  `ParentID_Left` int(11) NOT NULL,
  `ModuleName_Left` varchar(255) DEFAULT NULL,
  `MenuName_Left` varchar(255) NOT NULL,
  `Path_Left` varchar(255) NOT NULL,
  `Visible_Left` bit(1) DEFAULT NULL,
  `Possition_Left` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menus_left`
--

INSERT INTO `menus_left` (`ID`, `ParentID_Left`, `ModuleName_Left`, `MenuName_Left`, `Path_Left`, `Visible_Left`, `Possition_Left`) VALUES
(38, 40, 'products', 'Apple', '?mod=products&type=10', b'1', 0),
(39, 40, 'products', 'Oppo', '?mod=products&type=11', b'1', 2),
(40, 0, 'products', 'Điện Thoại Di Động', '?mod=products&type=1', b'1', 0),
(41, 40, 'products', 'Nokia', '?mod=products&type=12', b'1', 2),
(42, 40, 'products', 'SamSung', '?mod=products&type=13', b'1', 4),
(47, 0, 'products', 'Máy Tính Bảng', '?mod=products&type=2', b'1', 1),
(48, 0, 'products', 'Máy tính xách tay', '?mod=products&type=3', b'1', 2),
(49, 0, 'products', 'phụ kiện điện thoại', '?mod=products&type=5', b'1', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_role`
--

CREATE TABLE `menu_role` (
  `MenuID` int(11) NOT NULL DEFAULT '0',
  `RoleID` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu_role`
--

INSERT INTO `menu_role` (`MenuID`, `RoleID`) VALUES
(1, 4),
(8, 4),
(13, 4),
(15, 4),
(17, 1),
(17, 4),
(25, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(32, 4),
(33, 1),
(34, 1),
(35, 4),
(36, 1),
(36, 4),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ProductTypeID` int(11) DEFAULT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `SKU` varchar(255) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Description` text,
  `Hedieuhanh` varchar(255) DEFAULT NULL,
  `Manhinh` varchar(255) DEFAULT NULL,
  `Ram` varchar(255) DEFAULT NULL,
  `Camera` varchar(255) DEFAULT NULL,
  `Pin` varchar(255) DEFAULT NULL,
  `CPU` varchar(255) DEFAULT NULL,
  `PriceNew` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `ProductTypeID`, `ProductName`, `SKU`, `Price`, `Image`, `Description`, `Hedieuhanh`, `Manhinh`, `Ram`, `Camera`, `Pin`, `CPU`, `PriceNew`) VALUES
(1, 9, '11111', '333', 3231230, 'uploaded_files/4236103aonike_cd_150_1.191.248.jpg', '2131231', 'IOS', '1.5 in', '8GB', '5.5 ', '1.600 mAH', '4 Nhân', NULL),
(2, 10, 'ip6', '12', 12000000, 'uploaded_files/apple-iphone-6-1.jpg', 'mỏng cánh', 'ios', 'retina', '1gb', '8mp', '2400', 'a8', 1500000),
(3, 10, 'ip5', 'ip01', 100, 'uploaded_files/iphone5.jpg', '?????', 'ios', 'retina', '1gb', '7mp', '2300', 'a9', 300),
(4, 10, 'ip7', 'ip002', 200, 'uploaded_files/iphone7.jpg', '?????', 'ios', 'retina', '1.5gb', '8mp', '2400', 'a9', 300),
(5, 9, 'sanpham-0', 'SKU-0', 0, 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 9, 'sanpham-1', 'SKU-1', 0, 'uploaded_files/4320312cooler_master_notepal_ergostand_ii_04.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 11, 'oppo-f1', 'pp003', 200, 'uploaded_files/OPPO_F1.jpg', '????', 'android', 'amoled', '1.5gb', '5mp', '2000', 'snapdragon', 220),
(8, 9, '444444', '11111', 2222220032, 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 10, 'ip6p', 'ip003', 250, 'uploaded_files/iphone6plus.jpg', '', 'ios', 'retina', '1gb', '8mp', '2600', 'a8', 275),
(10, 9, '31231211', '1231231', 12312300, 'uploaded_files/51087093.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 9, '444444441', '111111112', 312312000, 'uploaded_files/54115944s.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 9, '31231', '111', 111, 'uploaded_files/505134713_2.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, '41', '12312', 312312, 'uploaded_files/54115944s.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, '333333331', '1111111', 22222200, 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 3, '31231', '11', 11, 'uploaded_files/0513889lenovo_ideapad_z360__049390.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 4, '213', '1', 1, 'uploaded_files/503903915_1.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 5, '11111', '11', 1, 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 6, '31231', '11', 1, 'uploaded_files/4710041sac1.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 12, 'nokia n1', 'noki001', 100, 'uploaded_files/nokian1.jpg', '???', 'android', 'amoled', '3gb', '16mp', '5000', 'intel', 150),
(20, 8, 'Nokia X6 8GB', '1', 3000000, 'uploaded_files/0010687nokiax6_8gb.191.248.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 7, 'LG G Pro Lite Dual', 'eqweqw', 6000000, 'uploaded_files/5341643lg_g_pro_lite_dual_01.191.248.jpg', 'Siêu Mòng,Thiết Kế Đẹp', '3', '13', '13', '13131', '1', '1', NULL),
(22, 7, 'Iphone 4 16GB', '31312311', 6000000, 'uploaded_files/3iax6_8gb.191.248.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, '11111113', '1231211', 1231210, 'uploaded_files/4320312cooler_master_notepal_ergostand_ii_04.191.248.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 12, 'nokia 6', 'noki002', 200, 'uploaded_files/nokia6.jpg', '????', 'android', 'amoled', '3gb', '10mp', '3000', 'snapdragon', 250),
(25, 8, 'Nokia E72', '11112', 366666, 'uploaded_files/5947507nokia_e72.191.248.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 9, 'IPhone15', 'SSSS', 15000000, 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', 'abcabc123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 12, 'n8', 'noki003', 50, 'uploaded_files/nokia-n8.jpg', '???', 'sympian', 'amoled', '1gb', '8mp', '2200', 'snapdragon', 75),
(28, 11, 'oppo-f3p', 'pp001', 230, 'uploaded_files/oppof3plus.jpg', '???', 'android', 'amoled\r\n', '2gb', '13mp', '2800', 'snapdragon', 250),
(29, 10, '111111111', '312312', 3333329920, 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', '333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 9, 'abaaa23123123', '1231231231', 1231229952, 'uploaded_files/4500006combo_dan_flim_dan_man_hinh_cho_ipad_id27193.191.248.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 11, 'oppo-f3', 'pp002', 280, 'uploaded_files/OPPO-F3.jpg', '????', 'android', 'amoled', '3gb', '16mp', '3000', 'snapdragon', 300),
(32, 18, 'Nokia', '11111111111', 5000000, 'uploaded_files/5947507nokia_e72.191.248.jpg', 'aaaaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, 1000000),
(35, 7, 'Flipcover S-view', 'ádasd', 5000000, 'uploaded_files/4540611bao_da_s_view_flipcover_ss_galaxy_s4___i9500_cac_mau_chinh_hang.191.248.jpg', 'minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 12, 'Nokia E72', '312312', 312312, 'uploaded_files/5947507nokia_e72.191.248.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 13, 'SamSung', '133', 11, 'uploaded_files/SAMSUNG-GALAXY-ACE-hepsiburada-kampanya-indirim-firsat.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 11, 'Oppo', '123', 1231231232, 'uploaded_files/images.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 14, 'abcc', 'abc', 1231120, 'uploaded_files/images (1).jpg', 'abcabc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 15, 'aaaaaaa', '123121', 1, 'uploaded_files/abg.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 16, '123', '111', 3, 'uploaded_files/lenovo-a536-nowatermark-200x200.jpg', 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 17, 'abc', 'a', 1, 'uploaded_files/sony-xperia-z3-compact-nowatermark-200x200.jpg', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 13, 'galaxy j7', 'ga001', 400, 'uploaded_files/ssj7.jpg', '???', 'android', 'amoled', '3gb', '13mp', '2800', 'exynox', 430),
(44, 13, 's8', 'ga002', 500, 'uploaded_files/galaxys8.jpg', '???', 'android', 'amoled', '4gb', '16mp', '3000', 'snapdragon', 550),
(45, 13, 's7e', 'ga003', 400, 'uploaded_files/galaxys7e', '????', 'android', 'amoled', '3gb', '15mp', '3200', 'exynox', 440);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_type`
--

CREATE TABLE `products_type` (
  `ID` int(11) NOT NULL,
  `ProductTypeName` varchar(255) DEFAULT NULL,
  `Possition` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products_type`
--

INSERT INTO `products_type` (`ID`, `ProductTypeName`, `Possition`, `Description`) VALUES
(1, 'Điện Thoại Di Động', 1, ''),
(2, 'Máy Tính Bảng', 2, NULL),
(3, 'Máy Tính Sách Tay', 3, NULL),
(5, 'Phụ Kiện Điện Thoại', 5, NULL),
(7, 'Sản Phẩm Mới', 7, NULL),
(8, 'Sản Phẩm Giảm Giá', 8, NULL),
(9, 'Sản Phẩm', 9, NULL),
(10, 'Apple', 10, NULL),
(11, 'Oppo', 11, NULL),
(12, 'Nokia', 12, NULL),
(13, 'Samsung', 13, NULL),
(18, 'Sản Phẩm Khuyến Mãi', 18, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `RoleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`ID`, `RoleName`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'rynphan'),
(4, 'guest');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `mathanhvien` int(11) NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthaithanhvien` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`mathanhvien`, `tendangnhap`, `matkhau`, `hoten`, `diachi`, `dienthoai`, `email`, `trangthaithanhvien`) VALUES
(1, 't1207h', '123456', 'T1207H', '19 Nguyễn Trãi', '0987654321', NULL, 1),
(2, '111', '111111', '', '', '', NULL, 1),
(3, '123', '333', '', '', '', NULL, 1),
(4, '3333', '111', '', '', '', NULL, 1),
(5, '33333', '1111', '123', '', '', NULL, 1),
(6, '3123', '123', '123', '', '', NULL, 1),
(7, 'abc123', '123123', '123123', '', '', NULL, 1),
(8, 'rynphan', '123123', '123123', '', '', NULL, 1),
(9, 'aaaa', 'a', 'a', '', '', NULL, 1),
(10, '', '', '', '', '', NULL, 1),
(11, '3', '', '', '', '', NULL, 1),
(12, 'bbbb', '3333', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(150) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `create_user` varchar(100) DEFAULT NULL,
  `modify_date` timestamp NULL DEFAULT NULL,
  `modify_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `email`, `phone`, `active`, `create_date`, `create_user`, `modify_date`, `modify_user`) VALUES
('admin', 'admin', NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `UserID` varchar(255) NOT NULL DEFAULT '0',
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`UserID`, `RoleID`) VALUES
('0', 0),
('admin', 1),
('guest', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `menus_left`
--
ALTER TABLE `menus_left`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `menu_role`
--
ALTER TABLE `menu_role`
  ADD PRIMARY KEY (`MenuID`,`RoleID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `products_type`
--
ALTER TABLE `products_type`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`mathanhvien`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`UserID`,`RoleID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgh` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT cho bảng `menus_left`
--
ALTER TABLE `menus_left`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT cho bảng `products_type`
--
ALTER TABLE `products_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `mathanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
