-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2022 lúc 02:31 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_blog` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `numerical order` int(100) NOT NULL,
  `brand_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` function` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_brand` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `numerical order`, `brand_code`, `image`, `name`, `user`, `date`, ` function`, `status_brand`) VALUES
(1, 0, '##SUNHOUSE', 'NULL', 'SUNHOUSE', 'admin', '25/11/2022', 'null', '0'),
(2, 0, '##PANASONIC', 'NULL', 'PANASONIC', 'admin', '25/11/2022', 'null', '0'),
(3, 0, '##TOSHIBA', 'NULL', 'TOSHIBA', 'admin', '25/11/2022', 'null', '0'),
(4, 0, '##ELECTROLUX', 'NULL', 'ELECTROLUX', 'admin', '25/11/2022', 'null', '0'),
(5, 0, '##SONY', 'NULL', 'SONY', 'admin', '25/11/2022', 'null', '0'),
(6, 0, '##LCD', 'NULL', 'LCD', 'admin', '25/11/2022', 'null', '0'),
(7, 0, '##DAIKIN', 'NULL', 'DAIKIN', 'admin', '25/11/2022', 'null', '0'),
(8, 0, '##SHARP', 'NULL', 'SHARP', 'admin', '25/11/2022', 'null', '0'),
(9, 0, '##NAKGAWA', 'NULL', 'NAKAGAWA', 'admin', '25/11/2022', 'null', '0'),
(10, 0, '##KANGAROO', 'NULL', 'KANGAROO', 'admin', '25/11/2022', 'null', '0'),
(11, 0, '##AQUA', 'NULL', 'AQUA', 'admin', '25/11/2022', 'null', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `total_num` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_customer`, `total_num`, `total_price`) VALUES
(1, 1, 10, 30000000),
(2, 2, 5, 12000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) CHARACTER SET latin1 NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_category` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name`, `category_code`, `image`, `create_date`, `user`, `status_category`) VALUES
(36, 'Nồi cơm điện', '##Noicomdien##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(37, 'Máy lọc nước', '##maylocnuoc##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(38, 'Bếp từ', '##Beptu##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(39, 'Bếp ga', '##Bepga##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(40, 'Máy xay sinh tố', '##Mayxaysinhto##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(41, 'Nồi chiên không dầu', '##Noichienkhongdau##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(42, 'Máy xay đa năng', '##Mayxaydanang##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(43, 'Máy đánh trứng', '##Maydanhtrung##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(44, 'Máy xay thịt', '##Mayxaythit##', 'NULL', '0000-00-00 00:00:00', 'admin', '0'),
(45, 'Lò nướng', '##LONUONG', 'NULL', '2022-11-27 08:45:56', 'admin', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `fullname`, `email`, `phone`, `address`, `date`) VALUES
(1, 'Nguyễn Văn A', 'A@gmail.com', 915375971, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022'),
(2, 'Nguyễn Văn B', 'B@gmail.com', 915375935, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022'),
(3, 'Nguyễn Văn C', 'C@gmail.com', 915375931, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022'),
(4, 'Nguyễn Văn D', 'D@gmail.com', 915375998, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022'),
(5, 'Nguyễn Văn E', 'E@gmail.com', 915375912, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022'),
(6, 'Nguyễn Văn F', 'F@gmail.com', 915375915, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh', '30/05/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_cart`
--

CREATE TABLE `tbl_detail_cart` (
  `id_detail_cart` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `total_num` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','client') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `email_address`, `user_type`) VALUES
(1, 'thanh', '$2y$10$speSPSynPK5VChLGVUDx5uMg9MXVuSZgXq7xqj6X3smpF/ayc/kmi', 'thanh@gm.com', 'admin'),
(2, 'thanh23', '$2y$10$dDoiMIjp2t96HBWsngmVFOZ1iyDhV.HnLRmxpbCsQOJvdugjExIJy', '2332@gm.com', 'admin'),
(4, 'thao12', '$2y$10$Pz2eqHHZ4zShu8wDqWBcG.5mSbouC3MQwx5ok/n/L8Jvt8TvkhjcO', 'thao45@gm.com', 'client'),
(5, 'nguoidung1', '$2y$10$pIXhSQy666OuvH34FFuJ8e/ZCc72YLgXReg5nPn.7dWERkQxmnuiO', 'th@bm.com', 'client'),
(6, 'thanh24', '$2y$10$mWA.bFGZsJjFWQwbT2Qh3uVpB2CD9AkqYD6LyqiN9EjUsgk.fNtHa', 'ga@ggm.com', 'client');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `total_num_product` int(11) NOT NULL,
  `date` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Thành công','Chờ xác nhận','Hủy') COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_confirm` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(100) NOT NULL,
  `status` enum('còn hàng','hết hàng') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `price` float NOT NULL,
  `user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_product` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `name`, `product_code`, `amount`, `status`, `id_category`, `id_brand`, `sale_price`, `price`, `user`, `image`, `description`, `status_product`) VALUES
(1, 'Nồi cơm điện Midea 0.6 lít MR-CM06SD', 'MR-CM06SD', 999, 'còn hàng', 36, 1, 380000, 410000, 'admin', 'public/images/noi-com-nap-gai-midea1533.jpg', 'Nồi cơm điện Midea thiết kế đơn giản, trang nhã, màu trắng tươi sáng, dung tích 1.5 lít, thích hợp dùng nấu cơm cho gia đình 2 - 4 thành viên', '0'),
(2, 'Nồi cơm nắp gài Midea 1.5 lít MR-CM1533', 'MR-CM1533', 998, 'còn hàng', 36, 1, 400000, 450000, 'admin', 'public/images/noi-com-nap-gai-midea1533.jpg', 'Nồi cơm điện nắp gài thiết kế màu sắc nhãn nhặn, kiểu dáng sang trọng phù hợp với mọi gian bếp trong gia đình', '0'),
(3, 'Nồi cơm nắp gài Toshiba 1 lít RC-10JH2PV(B)', 'RC-10JH2PV', 10000, 'còn hàng', 36, 3, 500000, 540000, 'admin', 'public/images/noi-com-nap-gai-toshiba-rc-10jh2pv.jpg', 'Thiết kế nút gạt điều khiển chức năng nấu cơm và giữ ấm đơn giản, có đèn báo dễ quan sát quá trình nấu cơm', '0'),
(4, 'Nồi cơm điện Kangaroo 1.2 lít KG822 đỏ', 'KG822', 400, 'còn hàng', 36, 10, 320000, 350000, 'admin', 'public/images/kangroo-kg822-do.jpg', 'Nồi cơm Kangaroo KG822 đỏ kiểu dáng nhỏ gọn, màu sắc bắt mắt, làm nổi bật không gian bếp sử dụng', '0'),
(5, 'Nồi cơm điện Sharp 1.8 lít KS-N182ETV', 'KS-N182ETV', 121, 'còn hàng', 36, 8, 420000, 500000, 'admin', 'public/images/sharp-ks-18tjv.jpg', 'Nồi tặng kèm dây nguồn 132 cm, cốc đong, muỗng cơm, và xửng hấp dùng để chế biến các món hấp đơn giản, góp phần làm đa dạng bữa ăn của gia đình', '0'),
(6, 'Nồi cơm nắp gài Sunhouse 1 lít SHD8208C', 'SHD8208C', 200, 'còn hàng', 36, 1, 360000, 400000, 'admin', 'public/images/noi-com-nap-gai-sunhouse-shd8607w.jpg', 'Nồi cơm nắp gài Sunhouse 1 lít SHD8208C kiểu dáng nhỏ gọn, thanh lịch, màu sắc tươi sáng Dung tích nồi cơm điện 1 lít đáp ứng đủ nhu cầu nấu cơm cho gia đình từ 2 - 4 người. ', '0'),
(7, 'Máy xay đa năng Delites BL2009', '＃MAYXAY1', 999, 'còn hàng', 42, 1, 435000, 500000, 'admin', 'public/images/mayxay-sunhouse1.jpg', 'Máy xay sinh tố Delites BL2009 có thiết kế sang trọng, tiện dụng với 1 cối xay sinh tố và 1 cối xay thực phẩm khô', '0'),
(8, 'Máy xay đa năng Sunhouse SHD 5112', '＃MAYXAYSHD5112', 999, 'còn hàng', 42, 1, 485000, 500000, 'admin', 'public/images/sunhouse-shd-5112-xanh-2.jpg', 'Máy xay sinh tố Sunhouse SHD 5112 Xanh màu sắc thời trang', '0'),
(9, 'Máy xay đa năng Toshiba MX-60T(H)', '＃MAYXAYToshibaMX-60T(H)', 999, 'còn hàng', 42, 3, 485000, 500000, 'admin', 'public/images/mayxaytoshiba.jpg', 'Máy xay sinh tố Toshiba chất liệu nhựa cao cấp không chứa BPA (Bisphenol A) độc hại, sử dụng an toàn sức khỏe', '0'),
(10, 'Máy xay đa năng Kangaroo KG4B3', '＃MAYXAYKG4B3', 999, 'còn hàng', 42, 10, 580000, 600000, 'admin', 'public/images/kangaroo-kg4b3-mayxay.jpg', 'Máy xay sinh tố đa năng dùng xay sinh tố, xay hạt, xay rau củ, xay thịt… với 4 cối xay chất liệu nhựa kháng vỡ an toàn.', '0'),
(11, 'Máy xay đa năng Panasonic MX-MG53C1CRA', '＃MAYXAYMX-MG53C1CRA', 999, 'còn hàng', 42, 2, 700000, 1000000, 'admin', 'public/images/MX-MG53C1CRA-mayxaypana.jpg', 'Máy xay sinh tố Panasonic thiết kế màu trắng sang trọng, công suất 700W, lưỡi dao sắc bén, cùng công nghệ đảo trộn V&M, cho bạn những ly sinh tố thơm ngon, bổ dưỡng hay chế biến những bữa ăn đa dạng từ thịt và cá.', '0'),
(12, 'Máy làm sữa hạt đa năng Kangaroo KG175HB1', '＃MAYXAYKG175HB1', 999, 'còn hàng', 42, 10, 2580000, 3000000, 'admin', 'public/images/may-xay-nau-da-nang-kangaroo-kg175hb1.jpg', 'Máy xay nấu đa năng Kangaroo thiết kế chắc chắn, sang trọng, tạo điểm nhấn cho không gian bếp Việt', '0'),
(13, 'Bếp nướng điện Sunhouse 1500W SHD4607', '#BepnuongSHD4607', 999, 'còn hàng', 45, 1, 420000, 525000, 'admin', 'public/images/sunhouse-shd4607lonuong.jpg', 'Bếp nướng điện Sunhouse SHD4607 có mặt bếp rộng, công suất 1500W, nướng chín thức ăn nhanh, ít tốn điện', '0'),
(14, 'Bếp nướng điện Kangaroo 2000W KG 699G', '#BepnuongKG699G', 999, 'còn hàng', 45, 10, 560000, 925000, 'admin', 'public/images/kangaroo-kg-699g-bepnuong.jpg', 'Bếp nướng điện Kangaroo KG 699G kiểu dáng nhỏ gọn, màu xám đen nhã nhặn phù hợp với mọi không gian như trên bàn ăn, bữa tiệc ngoài trời,...', '0'),
(15, 'Lò nướng thùng Sharp 1500W EO-A323RCSV-ST', '#BepnuongEO-A323RCSV-ST', 999, 'còn hàng', 45, 8, 1300000, 1925000, 'admin', 'public/images/sharp-eo-a323rcsv-st-lonuong.jpg', 'Lò nướng Sharp EO-A323RCSV-ST kiểu dáng hiện đại, sang trọng, gia dụng làm đẹp không gian bếp gia đình', '0'),
(16, 'Lò nướng thùng Panasonic 1500W NB-H3801KRA', '#BepnuongNB-H3801KRA', 999, 'còn hàng', 45, 2, 2300000, 3925000, 'admin', 'public/images/lonuonpanasonic.jpg', 'Lò nướng Panasonic NB-H3801KRA sang trọng, hiện đại, dung tích lớn đến 38 lít nướng được nhiều thực phẩm', '0'),
(17, 'Lò nướng thùng Panasonic 2000W NB-H3802KRA', '#BepnuongNB-H3802KRA', 999, 'còn hàng', 45, 2, 3200000, 4000000, 'admin', 'public/images/lonuonpanasonic.jpg', 'Lò nướng Panasonic NB-H3802KRA sang trọng, hiện đại, dung tích lớn đến 38 lít nướng được nhiều thực phẩm', '0'),
(18, 'Lò nướng thùng Sunhouse 1850W SHD4250S', '#BepnuongSHD4250S', 999, 'còn hàng', 45, 1, 2000000, 2825000, 'admin', 'public/images/sunhouse-mama-shd4250s-50-lit-101022-1039onuong52-600x600.jpg', 'Dung tích 50 lít thích hợp sử dụng trong gia đình có đông thành viên, nhà hàng, khách sạn,…', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('dọc','ngang') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `image`, `user`, `date`, `type`) VALUES
(1, 'public/images/barner-1.png', 'admin', '27/11/2022', 'ngang'),
(2, 'public/images/barner-2.png', 'admin', '27/11/2022', 'ngang'),
(3, 'public/images/barner-3.png', 'admin', '27/11/2022', 'ngang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_detail_cart`
--
ALTER TABLE `tbl_detail_cart`
  ADD PRIMARY KEY (`id_detail_cart`),
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_detail_cart`
--
ALTER TABLE `tbl_detail_cart`
  MODIFY `id_detail_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tbl_customer` (`id_customer`);

--
-- Các ràng buộc cho bảng `tbl_detail_cart`
--
ALTER TABLE `tbl_detail_cart`
  ADD CONSTRAINT `tbl_detail_cart_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_detail_cart_ibfk_2` FOREIGN KEY (`id_cart`) REFERENCES `tbl_cart` (`id_cart`) ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tbl_customer` (`id_customer`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`id_cart`) REFERENCES `tbl_cart` (`id_cart`) ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `tbl_brand` (`id_brand`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
