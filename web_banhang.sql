-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2022 lúc 04:16 PM
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
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `adminName` varchar(150) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(150) NOT NULL,
  `adminPass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `adminName`, `adminEmail`, `adminUser`, `adminPass`) VALUES
(1, 'thanh', 'thanh@gm.com', 'thanh12', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'admin', 'admin@gm.com', 'admin12', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'admin', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_blog`, `title`, `content`, `user`, `description`, `image`, `date`) VALUES
(7, 'Tủ lạnh Sharp Inverter 401 lít SJ-FXP480V-SL', 'Tủ lạnh Sharp Inverter 401 lít SJ-FXP480V-SL được trang bị công nghệ Plasmacluster ion diệt khuẩn và khả năng khử nhờ vào bộ lọc các phân tử Ag+Cu giúp diệt vi khuẩn, nấm mốc, virus và mùi hôi khó chịu thông qua quá trình oxi hóa các ion.', 'admin', 'Diệt vi khuẩn, nấm mốc, mùi hôi khó chịu thông qua công nghệ Plasmacluster Ion và bộ lọc các phân tử Ag+Cu', 'public/images/blog_tulanh1.jpg', '25/12/2022'),
(9, 'Review Nồi Chiên Không Dầu Bear 3.5L Bán Chạy Nhất 2022', 'Nồi Chiên Không Dầu Bear 3.5L. Bear được biết đến là một thương hiệu gia dụng bán chạy trên kênh online với đa dạng loại sản phẩm. Với lợi thế giá rẻ, mẫu mã cực kì bắt mắt, thương hiệu này dễ dàng thu hút được nhóm khách hàng trẻ tuổi yêu thích sự cá tính và đối tượng gia đình có con nhỏ.\n\nTrong bài viết này sẽ review chi tiết sản phẩm Nồi Chiên Không Dầu Bear 3.5L cho những ai đang tham khảo để mua sản phẩm này. Chúng ta cùng bắt đầu nhé! ', 'admin', 'Nồi Chiên Không Dầu Bear 3.5L', 'public/images/blog_noichien2.jpg', '20/12/2022'),
(10, 'Cách Chọn Mua Một Số Dụng Cụ Điện, Thiết Bị Điện Trong Gia Đình!', 'Hãy Chọn Một Bộ Dụng Cụ Làm Việc Vặt Sửa Chữa Trong Nhà Khi Cần Thiết\r\nTrong nhà có nhiều việc vặt mà không phải lúc nào chúng ta cũng có thể thuê được thợ hay người có chuyên môn, nhưng việc đó mình có thể làm, đặc biệt là những việc vặt vãnh và sự cố bất ngờ cần xử lý ngay. Chính vì thế cần sử dụng một bộ dụng cụ đa năng có thể giải quyết những công việc này. Ví dụ như khoan một cái giá treo đồ, dây điện bị đứt, sút dây cần nối lại, nhà vô tình mất điện, hay chiếc quạt bị hư ..', 'admin', 'Dụng Cụ Điện, Thiết Bị Điện Trong Gia Đình!', 'public/images/blog_dogiadung.jpg', '22/12/2022'),
(12, 'Nồi Chiên Không Dầu Lotte Hàn Quốc Có Tốt Không? Mua Ở Đâu Chính Hãng?', 'Hiện nay nồi chiên không dầu Lotte được bán rất nhiều ở các cửa hàng điện máy và các trang thương mại điện tử uy tín. Tuy nhiên để được sở hữu một sản phẩm chính hãng với gia tốt, chính sách bảo hành cam kết thì bạn nên mua tại WEBSITE CÔNG TY NHẬP KHẨU CHÍNH HÃNG. \r\n\r\nGiá sản phẩm chỉ còn 2.800.000 đồng so với giá ban đầu là 4.000.000 đồng giảm 30%, được niêm yết trên website, đây là cơ hội để nhiều người có thể sở hữu sản phẩm cho gian bếp nhà mình với chính sách bảo hành không thay đổi.', 'admin', 'nối chiên không dầu lotte Hàn Quốc có tốt không', 'public/images/cuckoo-crp-pk1000s-18-lit-061021-111845-600x600.jpg\"', '20/12/2022');

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
(6, 0, '##LCD', 'public/images/lcd.png', 'LCD', 'admin', '25/11/2022', 'null', '0'),
(7, 0, '##DAIKIN', 'public/images/daikin.png', 'DAIKIN', 'admin', '25/11/2022', 'null', '0'),
(8, 0, '##SHARP', 'public/images/sharp.jpg', 'SHARP', 'admin', '25/11/2022', 'null', '0'),
(9, 0, '##NAKGAWA', 'public/images/Nagakawa.png', 'NAKAGAWA', 'admin', '25/11/2022', 'null', '0'),
(10, 0, '##KANGAROO', 'public/images/logo-kangaroo.jpg', 'KANGAROO', 'admin', '25/11/2022', 'null', '0'),
(11, 0, '##AQUA', 'public/images/aqua.png', 'AQUA', 'admin', '25/11/2022', 'null', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `total_num` varchar(400) NOT NULL,
  `total_price` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_login`, `total_num`, `total_price`) VALUES
(8, 6, '5', '2450000'),
(43, 2, '3', '6060000'),
(44, 8, '1', '410000'),
(45, 9, '6', '18390000');

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
(36, 'Nồi cơm điện', '##Noicomdien##', '../../../public/images/noi-com-nap-gai-midea1533.jpg', '2022-12-26 10:10:20', 'admin', '0'),
(37, 'Máy lọc nước', '##maylocnuoc##', '../../../public/images/kangaroo-kg10a3-190522-021701-190x190.webp\"', '2022-12-26 10:12:21', 'admin', '0'),
(38, 'Bếp từ', '##Beptu##', '../../../public/images/bep-tu-whirlpool-ach7327-blv-11-190x190.webp\"', '2022-12-26 10:13:07', 'admin', '0'),
(39, 'Bếp ga', '##Bepga##', '../../../public/images/apex-apb3551-11-190x190.webp', '2022-12-26 10:13:36', 'admin', '0'),
(40, 'Máy xay sinh tố', '##Mayxaysinhto##', '../../../public/images/kangaroo-kg4b3-mayxay.jpg', '2022-12-26 10:07:17', 'admin', '0'),
(41, 'Nồi chiên không dầu', '##Noichienkhongdau##', '../../../public/images/kangroo-kg822-do.jpg', '2022-12-26 10:07:17', 'admin', '0'),
(42, 'Máy xay đa năng', '##Mayxaydanang##', '../../../public/images/MX-MG53C1CRA-mayxaypana.jpg', '2022-12-26 10:14:16', 'admin', '0'),
(43, 'Máy đánh trứng', '##Maydanhtrung##', '../../../public/images/may-danh-trung-panasonic-mk-gb3wra-224160-300x300.png\"', '2022-12-26 10:15:05', 'admin', '0'),
(44, 'Máy xay thịt', '##Mayxaythit##', '../../../public/images/may-xay-thit-magic-ac-15-225324.jpg\"', '2022-12-26 10:15:27', 'admin', '0'),
(45, 'Lò nướng', '##LONUONG', '../../../public/images/lonuonpanasonic.jpg', '2022-12-26 10:11:22', 'admin', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `fullname`, `email`, `phone`, `address`) VALUES
(1, 'Nguyễn Văn A', 'A@gmail.com', 915375971, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(2, 'Nguyễn Văn B', 'B@gmail.com', 915375935, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(3, 'Nguyễn Văn C', 'C@gmail.com', 915375931, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(4, 'Nguyễn Văn D', 'D@gmail.com', 915375998, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(5, 'Nguyễn Văn E', 'E@gmail.com', 915375912, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(6, 'Nguyễn Văn F', 'F@gmail.com', 915375915, 'Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh'),
(51, 'thanh', 'thanhviendangki@gmail.com', 325264363, '532gagaha'),
(56, 'Tran duy thanh', 'thanh01692740543@gmail.com', 0, 'th');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_detail_cart`
--

INSERT INTO `tbl_detail_cart` (`id_detail_cart`, `id_cart`, `id_product`, `total_num`, `total_price`) VALUES
(55, 43, 17, 1, 4000000),
(56, 43, 10, 2, 6000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_product`, `quantity`, `total_price`) VALUES
(14, 50, 9, '1', '500000'),
(15, 50, 14, '1', '925000'),
(16, 50, 18, '1', '2825000'),
(17, 52, 1, '1', '410000');

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
(6, 'thanh24', '$2y$10$mWA.bFGZsJjFWQwbT2Qh3uVpB2CD9AkqYD6LyqiN9EjUsgk.fNtHa', 'ga@ggm.com', 'client'),
(8, 'thanh34', '$2y$10$lHpY5nzY6fRcz4X7J1paBOmNmWkItll.EM.pkvPrfnvnygKj.RdWS', 'thanh@gm.com', 'client'),
(9, 'user', '$2y$10$9sd/6U.sJiAMb76hhwevB.xdzjcxLYfwIF5KDXgbV9naPesBgFk/q', 'user@gmail.com', 'client');

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
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Thành công','Chờ xác nhận','Hủy') COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_confirm` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_customer`, `id_cart`, `total_price`, `total_num_product`, `note`, `payment_method`, `status`, `time`, `code`, `date_confirm`, `date`) VALUES
(50, 56, 43, 4250000, 3, 'dsgsdg', '', 'Chờ xác nhận', '2022-12-26 11:37:55', '', '0000-00-00', '2022-12-26'),
(52, 51, 43, 410000, 1, 'fafd', '', 'Chờ xác nhận', '2022-12-26 11:38:51', '', '0000-00-00', '2022-12-26'),
(76, 56, 45, 18390000, 6, 'fag', '', 'Chờ xác nhận', '2022-12-26 14:30:03', '', '0000-00-00', '2022-12-26');

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
(18, 'Lò nướng thùng Sunhouse 1850W SHD4250S', '#BepnuongSHD4250S', 999, 'còn hàng', 45, 1, 2000000, 2825000, 'admin', 'public/images/sunhouse-mama-shd4250s-50-lit-101022-1039onuong52-600x600.jpg', 'Dung tích 50 lít thích hợp sử dụng trong gia đình có đông thành viên, nhà hàng, khách sạn,…', '0'),
(19, 'Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K)', 'RC-18DR2PV(K)', 344, 'còn hàng', 36, 3, 2000000, 2400000, 'admin', 'public/images/ava-tp40-ct01e-18-lit-thumb-190x190.jpg', 'Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K) thiết kế quai xách dễ cầm, màu sắc sang trọng với dung tích phù hợp cho gia đình 4 - 6 người', ''),
(21, 'Nồi cơm điện tử AVA 1.8 lít TP40-CT01E ', 'TP40-CT01E ', 200, 'còn hàng', 36, 11, 800000, 850000, 'admin', 'public/images/Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K).png', 'Nồi cơm điện AVA thiết kế hiện đại, sang trọng, tô điểm không gian căn bếp với tông màu đen - hồng lạ mắt', ''),
(23, 'Nồi cơm điện tử BlueStone 0.75 lít RCB-5905', 'RCB-5905', 150, 'còn hàng', 36, 3, 750000, 890000, 'admin', 'public/images/Toshiba-RC-18IX1PV-0-600x600.jpg', 'Nồi cơm điện tử BlueStone 0.75 lít RCB-5905​ sử dụng công nghệ nấu 3D, nhiều chế độ nấu tiện dụng, có tính năng hẹn giờ,... là sản phẩm hữu ích hỗ trợ bạn chế biến những bữa cơm thơm ngon, nhanh chóng.', ''),
(24, 'Nồi cơm điện nắp gài Crystal 1.8 lít BXB-50C', 'BXB-50C', 190, 'còn hàng', 36, 10, 500000, 590000, 'admin', 'public/images/tu-bluestone-075-lit-rcb-5905-thumb-600x600.jpg\"', 'Công suất 700W cùng công nghệ nấu 2D nấu cơm nhanh, chín đều.\r\nLòng nồi dày 2 mm bằng hợp kim nhôm phủ chống dính bền đẹp, dễ vệ sinh, an toàn sức khỏe.\r\nMàu trắng nhã nhặn, thiết kế gọn đẹp hài hòa không gian bếp.\r\nDung tích 1.8 lít phù hợp nhu cầu gia đình 4 - 6 thành viên.\r\nThương hiệu Crystal - Việt Nam, sản xuất tại Trung Quốc.', ''),
(27, 'Nồi cơm điện tử Lock&Lock 0.8 lít EJR716IVY', 'EJR716IVY', 200, 'còn hàng', 36, 1, 950000, 100000, 'admin', 'public/images/noi-com-dien-nap-gai-crystal-18-lit-bxb-50c-111022-101047-600x600.jpg', 'Nồi cơm điện tử Lock&Lock EJR716IVY với công nghệ nấu 1D nấu cơm chín nhanh, lòng nồi bằng nhôm phủ chống dính, tích hợp nhiều chế độ cài sẵn tiện lợi,… giúp bạn nấu nhanh những bữa cơm nóng hổi, thơm ngon.', ''),
(32, 'Nồi cơm điện tử áp suất Cuckoo 1.8 lít CRP-PK1000S/P2PIVNCV', 'CRP-PK1000S/P2PIVNCV', 130, 'còn hàng', 36, 3, 2950000, 3000000, 'admin', 'public/images/noi-com-dien-tu-tefal-18lit-rk736b68-600x600.jpg\"', 'Nồi cơm điện tử áp suất Cuckoo CRP-PK1000S 1.8 lít với lớp vỏ màu trắng trang nhã, thiết kế hiện đại tạo sự độc đáo trong không gian sống', '0'),
(34, 'Nồi cơm điện Delites 1.5 lít NCR1502', 'NCR1502', 100, 'còn hàng', 36, 11, 320000, 400000, 'admmin', 'public/images/delites-ncr1502-281022-033255-600x600.jpg\"', 'Nồi cơm điện Delites NCR1502 màu sắc hiện đại, sang trọng, kiểu dáng trẻ trung bắt mắt, sản phẩm đẹp cho không gian dùng thêm đẹp', ''),
(35, 'Nồi cơm điện tử Kangaroo 1.8 lít KG595', 'KG595', 0, '', 36, 10, 190000, 200000, 'admin', 'public/images/cuckoo-crp-pk1000s-18-lit-061021-111845-600x600.jpg\"', 'Nồi cơm điện 1.8 lít Kangaroo KG595 thiết kế đẹp mắt, kiểu Hàn Quốc hiện đại, làm tăng tính thẩm mỹ cho gian bếp Việt', ''),
(36, 'Nồi cơm điện Delites 1.5 lít NCR1502', 'NCR1502', 0, 'còn hàng', 36, 11, 320000, 400000, 'admmin', 'public/images/delites-ncr1502-281022-033255-600x600.jpg\"', 'Nồi cơm điện Delites NCR1502 màu sắc hiện đại, sang trọng, kiểu dáng trẻ trung bắt mắt, sản phẩm đẹp cho không gian dùng thêm đẹp', ''),
(37, 'Máy lọc nước RO Karofi KSI80-AKSK24 8 lõi           ', 'KSI80-AKSK24', 130, 'còn hàng', 37, 3, 0, 2100000, '', 'public/images/may-loc-nuoc-karofi-ksi80-a-190x190.webp\"', 'Máy lọc nước Karofi KSI80-A là sản phẩm tiện dụng và là vật dụng trang trí gọn gàng, sang trọng cho không gian dùng.\r\nVới hệ thống 8 lõi lọc cùng với màng RO Filmtec (Mỹ), máy lọc nước uống trực tiếp mang lại khả năng lọc vượt trội và an toàn', ''),
(38, 'Máy lọc nước RO nóng nguội lạnh Sunhouse SHA76213CK 10 lõi\r\n', 'SHA76213CK', 190, 'còn hàng', 37, 1, 3400000, 3500000, 'admin', 'public/images/ro-nong-lanh-sunhouse-shr76213ck-10-l-190x190.webp\"', 'Máy lọc nước Sunhouse thiết kế slim thon gọn, phù hợp với mọi không gian nội thất', ''),
(41, 'Máy lọc nước RO nóng nguội lạnh Kangaroo KG10A3 10 lõi', 'KG10A3 ', 24, 'còn hàng', 37, 10, 2990000, 3100000, 'admin', 'public/images/kangaroo-kg10a3-190522-021701-190x190.webp\"', 'Máy lọc nước RO Kangaroo KG10A3 10 lõi có thiết kế hiện đại, sang trọng, sử dụng được trong gia đình như phòng khách, nhà bếp hoặc dùng trong văn phòng, nhà hàng, khách sạn ', ''),
(42, 'Máy lọc nước RO Hydrogen Kangaroo KG100ES 7 lõi', 'KG100ES', 20, 'còn hàng', 37, 10, 3000000, 3190000, 'admin', 'public/images/ro-dien-phan-kangaroo-kg100es-7-loi-1-190x190.webp\"', 'Nước Hydrogen giúp loại bỏ hiệu quả các gốc tự do, đồng thời hoạt động như một chất chống oxy hóa mang lại nhiều lợi ích sức khỏe cho cơ thể.', ''),
(45, 'Máy lọc nước RO Karofi K9IQ-WE21 2.0 9 lõi', 'K9IQ', 100, 'còn hàng', 37, 10, 2690000, 2700000, 'admin', 'public/images/thong-minh-karofi-9iq-20-13-190x190.webp\"', 'Máy lọc nước uống trực tiếp công nghệ RO sử dụng 9 lõi lọc, lõi số 4 RO Filmtec DOW nhập khẩu từ Mỹ giúp loại bỏ tối đa bụi bẩn, kim loại, vi khuẩn đồng thời bổ sung khoáng chất cho cơ thể', ''),
(46, 'Máy lọc nước RO Daikiosan DXW-42010H 10 lõi\r\n', 'DXW-42010H', 35, 'còn hàng', 37, 7, 3100000, 3150000, 'admin', 'public/images/ro-daikiosan-dxw-42010h-190x190.webp\"', 'Máy lọc nước Daikiosan kiểu dáng sang trọng, bền bỉ nhờ vỏ tủ bằng thép sơn tĩnh điện và kính cường lực', ''),
(49, 'Máy lọc nước R.O nóng nguội lạnh Hydrogen Kangaroo KG10A4VTU 10 lõi', 'KG10A4VTU', 100, 'còn hàng', 37, 10, 3400000, 3450000, 'admin', 'public/images/may-loc-nuoc-ro-kangaroo-kg10a4-vtu-10-loi-0-190x190.webp\"', 'Máy lọc nước RO Kangaroo KG10A4 VTU với công nghệ RO cho nguồn nước sạch hơn.\r\nTạo nguồn nước đầy đủ khoáng chất và giàu Hydrogen tự nhiên, tốt cho tình trạng sức khỏe người dùng', ''),
(50, 'Máy lọc nước RO Korihome K-PRO WPK-G61 10 lõi\r\n', 'WPK-G61', 35, 'còn hàng', 37, 11, 2100000, 2250000, 'admin', 'public/images/korihome-wpk-g61-4-190x190.webp\r\n', 'Máy lọc nước thiết kế đẹp mắt, sang trọng phù hợp cho không gian gia đình, văn phòng hiện đại với kết hợp giữa nhôm Anode và kính cường lực', ''),
(53, 'Máy lọc nước RO nóng nguội lạnh Hydrogen Kangaroo KG10A6S 7 lõi', '', 100, 'còn hàng', 37, 10, 2700000, 2800000, 'admin', 'public/images/ro-nong-lanh-hydrogen-kangararoo-kg10a6s-190x190.webp\"', 'Máy lọc nước RO Kangaroo, với màu trắng chủ đạo nhã nhặn, sang trọng thích hợp dùng trong gia đình, văn phòng, công ty, nhà hàng,... ', '0'),
(54, 'Máy lọc nước RO nóng nguội AVA AVW-33209H 9 lõi', 'AVW-33209H', 40, 'còn hàng', 37, 11, 1600000, 1750000, 'admin', 'public/images/may-loc-nuoc-ro-midea-mwp-s0820mr-8-loi-1-190x190.webp\"', 'Máy lọc nước AVA có mặt kính mỹ thuật in 3D tinh tế, kiểu tủ đứng chắc chắn, vỏ ngoài bằng thép sơn tĩnh điện cứng cáp', ''),
(57, 'Bếp điện từ hồng ngoại đôi Whirlpool ACH7327/BLV\r\n', 'ACH7327/BLV', 30, 'còn hàng', 38, 3, 1500000, 1550000, 'admin', 'public/images/bep-tu-whirlpool-ach7327-blv-11-190x190.webp\"', 'Bếp điện từ hồng ngoại Whirlpool ACH7327-BLV thiết kế sang trọng, hiện đại, có thể lắp đặt âm, tạo điểm nhấn cho không gian sử dụng', ''),
(58, 'Bếp điện từ hồng ngoại Kangaroo KG852i lắp âm', 'KG852i', 20, 'còn hàng', 38, 10, 3000000, 3100000, 'admin', 'public/images/kangaroo-kg856i-10-190x190.webp\"', 'Bếp từ Kangaroo tổng công suất 4000W (bếp trái 2000W, bếp phải 2000W) làm nóng nhanh, nấu ăn tiết kiệm thời gian', ''),
(61, 'Bếp điện từ hồng ngoại đôi Electrolux EHI7280BA', 'EHI7280BA', 24, 'còn hàng', 38, 4, 3500000, 3600000, 'admin', 'public/images/electrolux-ehi7280ba-190x190.webp\"', 'Bếp Electrolux EHI7280BA thiết kế với 2 vùng nấu giúp người dùng nấu 2 món ăn cùng lúc', ''),
(62, 'Bếp từ điện hồng ngoại lắp âm BlueStone ICB-6609', 'ICB-6609', 40, 'còn hàng', 38, 4, 350000, 400000, 'admin', 'public/images/212153-600x600-1.webp\"', 'Bếp từ Bluestone thiết kế gọn đẹp với mẫu bếp đơn sang trọng, tiết kiệm không gian dùng', ''),
(65, 'Bếp điện từ đôi hồng ngoại lắp âm Kangaroo KG15IC1\r\n', 'KG15IC1\r\n', 45, 'còn hàng', 38, 10, 300000, 310000, '', 'public/images/219429-600x600-1.webp\"', 'Bếp điện từ Kangaroo KG15IC1 công suất nấu 1800W, nấu ăn nhanh tiết kiệm thời gian, hiệu quả với gia đình bận rộn yêu thích nấu nướng', ''),
(66, 'Bếp điện từ hồng ngoại BlueStone-AVA FYM20-71', 'FYM20-71', 40, 'còn hàng', 38, 11, 340000, 400000, 'admin', 'public/images/279571-600x600-1.webp\"', 'Bếp từ có chức năng hẹn giờ trong khoảng 1 phút - 3 giờ cho người dùng thực hiện các món ninh hầm, kho,... mà không cần canh bếp, chủ động nấu nướng', ''),
(69, 'Bếp điện từ đôi hồng ngoại lắp âm Kangaroo KG18IH1', 'KG18IH1', 24, 'còn hàng', 38, 10, 300000, 340000, 'admin', 'public/images/219428-600x600-1.webp\"', 'Bếp điện từ Kangaroo KG18IH1 có công suất mạnh mẽ 2000W, đun nấu nhanh chóng, tiết kiệm điện năng', ''),
(70, 'Bếp điện từ hồng ngoại Electronic HOMMY XH-A36', 'XH-A36', 40, 'còn hàng', 38, 4, 310000, 342000, 'admin', 'public/images/hommy-xh-a36-1.-190x190.webp\"', 'Bếp từ hoạt động mạnh mẽ với công suất nấu 2000W đun nấu nhanh, tiết kiệm thời gian', ''),
(73, 'Bếp ga đôi Sunhouse B078\r\n', 'B078', 200, 'còn hàng', 39, 1, 540000, 554000, 'admin', 'public/images/sunhouse-mama-mmbb0787mt-88889-190x190.webp\"', 'Bếp gas Sunhouse Mama thiết kế mẫu mã độc đáo, họa tiết hoa văn bắt mắt, kiểu dáng hiện đại, làm tăng nét đẹp cho mọi gian bếp.\r\nMặt bếp gas đôi bằng chất liệu kính cường lực sáng bóng, chịu nhiệt chịu lực tốt, dễ làm sạch khi bị bám bẩn', ''),
(74, 'Bếp gas đôi Apex APB355', 'APB355', 43, 'còn hàng', 39, 1, 510000, 540000, 'admin', 'public/images/apex-apb3551-11-190x190.webp', 'Bếp gas Sunhouse Apex APB3551 thiết kế hiện đại, màu nâu với các đường vân gỗ thời trang. Bếp gas đôi 2 lò giúp bạn nấu cùng lúc nhiều thức ăn tiết kiệm thời gian tối đa', ''),
(77, 'Bếp gas đôi Kangaroo KG526M', 'KG526M', 30, 'còn hàng', 39, 10, 450000, 462000, 'admin', 'public/images/252278-600x600-1.webp', 'Bếp gas Kangaroo 2 lò nấu giúp nấu ăn thuận tiện, thiết kế hiện đại, dùng đẹp cho không gian bếp gia đình.\r\nBếp sử dụng mặt kính cường lực dày 7 mm bền tốt, khả năng chịu lực cao, chịu nhiệt, chống trầy, dễ làm sạch, giữ độ mới lâu', ''),
(78, 'Bếp ga đôi Kangaroo KG519M', 'KG519M', 35, 'còn hàng', 39, 10, 320000, 400000, 'admin', 'public/images/kangaroo-kg519m-141021-121910-190x190.webp', 'Bếp gas Kangaroo KG519M mỏng gọn với thiết kế đơn giản, đẹp mắt, phù hợp cho mọi không gian', ''),
(81, 'Bếp gas đôi Sunhouse SHB3365', 'SHB3365', 30, 'còn hàng', 39, 1, 360000, 375000, 'admin', 'public/images/sunhouse-shb3365-190x190.webp\"', 'Thiết kế hiện đại, sang trọng, trang nhã.\r\nMặt bếp gas đôi bằng kính cường lực bền đẹp, dễ vệ sinh', ''),
(83, 'Máy xay sinh tố Bluestone BLB-5339', 'BLB-5339', 130, 'còn hàng', 40, 9, 540000, 575000, 'admin', 'public/images/bluestone-blb-5339-229656-190x190.webp\"', 'Máy xay sinh tố Bluestone BLB-5339 có phần thiết kế tạo sự sang trọng, thanh lịch cho không gian bếp nhà bạn', ''),
(85, 'Máy xay sinh tố Kangaroo KG4B3', 'KG4B3', 30, 'còn hàng', 40, 10, 350000, 431000, 'admin', 'public/images/kangaroo-kg4b3-thumb-190x190.webp', 'Máy xay sinh tố Kangaroo thiết kế nhỏ gọn, tinh tế, đẹp mắt.\r\nCối xay sinh tố dung tích 1 lít phục vụ nhu cầu giải khát', ''),
(86, 'Máy xay sinh tố Kangaroo KG3B2', 'KG3B2', 40, 'còn hàng', 40, 10, 340000, 350000, 'admin', 'public/images/kangaroo-kg3b2-thumb-190x190.webp\"', 'Máy xay sinh tố Kangaroo màu trắng đen sang trọng, thanh lịch, kiểu dáng gọn gàng, sắp đặt dễ dàng trong mọi không gian', ''),
(89, 'Máy xay đa năng Crystal BL466ABD', 'BL466ABD', 100, 'còn hàng', 40, 9, 510000, 540000, 'admin', 'public/images/crystal-bl466abd-thumb1-190x190.webp\"', 'Máy xay sinh tố Crystal đa chức năng với 3 cối xay, 1 cối ép đáp ứng tốt nhu cầu xay sinh tố, ép trái cây, xay thịt, xay hạt,…', ''),
(90, 'Máy xay sinh tố Kangaroo KGBL600X', 'KGBL600X', 40, 'còn hàng', 40, 10, 320000, 400000, 'admin', 'public/images/KGBL600X-600x600-1.webp', 'Máy xay sinh tố Kangaroo KGBL600X với 5 tốc độ xay, 1 chế độ nhồi cùng công suất 600W mạnh mẽ và lưỡi dao 6 cánh có răng cưa giúp xay nhanh nhuyễn mịn. Sản phẩm đáp ứng tốt nhu cầu xay sinh tố, rau củ, đá nhỏ sử dụng trong gia đình.', ''),
(93, 'Máy xay sinh tố Ava BL9006-GS', ' BL9006-GS', 30, 'còn hàng', 40, 11, 200000, 217000, 'admin', 'public/images/ava-bl9006-gs-060921-092341-190x190.webp\"', 'Máy xay sinh tố AVA thiết kế đơn giản, hiện đại, đa chức năng: xay sinh tố, xay hạt ', ''),
(94, 'Máy xay sinh tố AVA NK-B148', 'NK-B148', 40, 'còn hàng', 40, 11, 340000, 342000, 'admin', 'public/images/may-xay-snh-to-2--200x200.webp\"', 'Máy xay sinh tố AVA NK-B148 sở hữu cối thủy tinh an toàn, hạn chế ám màu và mùi, dễ vệ sinh, công suất 700W mạnh mẽ xay nhanh nhuyễn mịn, đáp ứng tốt nhu cầu xay sinh tố, rau củ, hạt, đá nhỏ sử dụng trong gia đình', ''),
(97, 'Máy xay sinh tố 3 cối Sunhouse SHD5582W\r\n', 'SHD5582W', 24, 'còn hàng', 40, 1, 300000, 352000, 'admin', 'public/images/may-xay-sinh-to-3-coi-sunhouse-shd5582w-203896-190x190.webp\"', 'Máy xay sinh tố Sunhouse màu trắng trang nhã, sang trọng, kiểu dáng hiện đại, hài hòa trong không gian sử dụng của mọi gia đình', ''),
(98, 'Máy xay đa năng Crystal BL466ABD', 'BL466ABD', 40, 'còn hàng', 40, 9, 500000, 532000, 'admin', 'public/images/panasonic-paso-mx-ss1bra-thumb-190x190.webp', 'Máy xay sinh tố Crystal đa chức năng với 3 cối xay, 1 cối ép đáp ứng tốt nhu cầu xay sinh tố, ép trái cây, xay thịt, xay hạt,…', ''),
(101, 'Nồi chiên không dầu Kangaroo KG52AF1A', 'KG52AF1A', 24, 'còn hàng', 41, 10, 1400000, 1650000, 'admin', 'public/images/Kangaroo-KG52AF1A-0-200x200.webp\"', 'Nồi chiên không dầu Kangaroo thiết kế hiện đại, gọn đẹp, tăng tính thẩm mỹ cho không gian bếp, sử dụng chiên, nướng thực phẩm không cần dùng dầu nên giúp giảm dầu mỡ trong thực phẩm cho món ăn chín ngon, không ngán', ''),
(102, 'Nồi chiên không dầu AVA 55K07A 5.5 lít', '55K07A', 43, 'còn hàng', 41, 11, 632000, 675000, 'admin', 'public/images/Ava-55K07A-0-200x200.webp\"', 'Nồi chiên không dầu AVA màu đen sang trọng, chất liệu vỏ nhựa PVC cao cấp, kháng vỡ, chịu nhiệt tốt, dễ bố trí ở nhiều nơi trong bếp', ''),
(105, 'Nồi chiên không dầu Electrolux E6AF1-520K', 'E6AF1-520K', 30, 'còn hàng', 41, 4, 1020000, 1100000, 'admin', 'public/images/Electrolux-E6AF1-520K-0-200x200.webp', 'Nồi chiên không dầu Electrolux thiết kế sang trọng, vỏ ngoài phủ nhựa PP + Al bóng đẹp, tạo điểm nhấn cho không gian bếp', ''),
(106, 'Nồi chiên không dầu AQUA FAF-5.0M3', 'FAF-5.0M3', 43, 'còn hàng', 41, 11, 510000, 560000, 'admin', 'public/images/AFB-5876-0-200x200.webp\"', 'Nồi chiên không dầu FAF-5.0M3 thương hiệu Ferroli nổi tiếng đến từ Italy, đảm bảo uy tín về chất lượng', ''),
(109, 'Nồi chiên không dầu 500 độ C Kangaroo KG12AF1A', 'KG12AF1A', 24, 'còn hàng', 41, 10, 1649000, 1680000, 'admin', 'public/images/kangaroo-kg12af1a-0-min-600x600-1.webp\"', 'Lò chiên không dầu Kangaroo KG12AF1A là sản phẩm đa chức năng: chiên nướng hạn chế dầu mỡ, sấy khô thực phẩm,... cực kì tiện lợi', ''),
(110, 'Nồi chiên không dầu đối lưu Ava HB-8027 4L', 'HB-8027', 40, 'còn hàng', 41, 11, 400600, 530000, 'admin', 'public/images/276993-600x600-1.webp\"', 'Nồi chiên không dầu AVA HB-8027 4 lít với thiết kế nút xoay dễ sử dụng, dung tích sử dụng 4 lít, chiên nướng thực phẩm hạn chế dầu mỡ, tự động ngắt khi quá nhiệt giúp đảm bảo an toàn, hỗ trợ bạn chế biến những món ăn chiên nướng thơm ngon, bổ dưỡng cho cả nhà.', ''),
(113, 'Nồi chiên không dầu Kangaroo KG55AF1 1800W 5L', 'KG55AF1 ', 30, 'còn hàng', 41, 10, 1200000, 1256000, 'admin', 'public/images/Kangaroo-KG55AF1-0-200x200.webp\"', 'Nồi chiên không dầu Kangaroo kiểu dáng gọn đẹp, hiện đại với màu đen sang trọng, vỏ bằng nhựa cách nhiệt', ''),
(114, 'Nồi chiên Halogen không dầu Rapido RAF6.5M2 ', 'RAF6.5M2', 40, 'còn hàng', 41, 7, 940000, 952000, '', 'public/images/Rapido-RAF65M2-0-200x200.webp\"', 'Nồi chiên không dầu Rapido RAF6.5M2 6.5 lít với công suất 1800W, dung tích sử dụng lớn 6 lít, công nghệ làm nóng bằng đèn Halogen, có quạt đối lưu, công nghệ Inverter tiết kiệm điện, chất liệu bền tốt, an toàn,... sẽ là một thiết bị gia dụng tiện nghi trong gian bếp của gia đình.', ''),
(117, 'Nồi chiên không dầu Magic Eco AC-102 1400W', 'AC-102', 30, 'còn hàng', 41, 7, 970000, 120000, 'admin', 'public/images/Magic-Eco-AC-102-0-200x200.webp\"', 'Nồi chiên không dầu Magic Eco AC-102 kiểu dáng nhỏ gọn, sang trọng, tinh tế, làm đẹp không gian bếp hiện đại', ''),
(118, 'Lò chiên không dầu Hafele HS-AF1102B (535.43.715) 11 lít', 'HS-AF1102B', 40, 'còn hàng', 41, 8, 1500000, 1524000, 'admin', 'public/images/279962-200x200.webp\"', 'Lò chiên không dầu Hafele HS-AF1102B (535.43.715) 11 lít​ sở hữu dung tích lớn, thiết kế kết hợp giữa nồi chiên không dầu và lò nướng siêu tiện lợi, là giải pháp hữu ích cho việc nấu nướng trong gia đình.', ''),
(121, 'Nồi chiên không dầu Magic A84 1400W 4.4 lít', 'A84', 100, 'còn hàng', 41, 7, 540000, 554000, 'admin', 'public/images/magic-a84-0-min-200x200.webp\"', 'Nồi chiên không dầu Magic A84 kiểu dáng nhỏ gọn, sang trọng, tinh tế, làm đẹp không gian bếp hiện đại', ''),
(122, 'Nồi chiên không dầu Philips HD9220/20 Đen 	2.4 l', 'HD9220/20', 40, 'còn hàng', 41, 8, 1500000, 1524000, 'admin', 'public/images/philips-hd9220-20-12-190x190.webp\"', 'Nồi chiên không dầu Philips HD9220/20 có kiểu dáng và màu sắc sang trọng, bắt mắt, là vật dụng đẹp tinh tế tô điểm cho không gian bếp gia đình', ''),
(133, 'Nồi chiên không dầu Bear khí đối lưu QZG-A15T2 4.5 lít', 'QZG-A15T2', 30, 'còn hàng', 41, 7, 2100000, 2240000, 'admin', 'public/images/noi-chien-khong-dau-bear-qzg-a15t2-45-lit-171022-035945-190x190.webp\"', 'Nồi chiên không dầu Bear QZG-A15T2 4.5 lít có dung tích phù hợp cho nhu cầu sử dụng của gia đình 3 - 4 người, công nghệ làm nóng bằng không khí nóng đối lưu giúp chiên nướng chín đều và ngon không cần dầu, 8 chế độ cài đặt sẵn giúp chế biến món ăn đa dạng, sử dụng tiện lợi, an toàn, dễ vệ sinh, phục vụ gia đình những bữa ăn ngon.', '0'),
(134, 'Nồi chiên không dầu Ferroli 1400W FAF-5.0M3\r\n', ' FAF-5.0M3', 40, 'còn hàng', 41, 2, 500000, 523000, 'admin', 'public/images/ferroli-faf-50m3-0-600x600-3.webp\"', 'Nồi chiên không dầu FAF-5.0M3 thương hiệu Ferroli nổi tiếng đến từ Italy, đảm bảo uy tín về chất lượng, sử dụng 5 lít chiên nướng được khoảng 1.2 kg thịt, cá, gà, rau củ,', ''),
(137, 'Máy đánh trứng Mishio MK-215 ', 'MK-215 ', 30, 'còn hàng', 43, 2, 562000, 573000, '', 'public/images/mishio-mk-215-151222-054234-600x600.jpg\"', 'Máy đánh trứng Mishio với thiết kế cầm tay đơn giản, vỏ ngoài bằng chất liệu nhựa bền tốt, kiểu dáng sang trọng phù hợp cho không gian bếp nhà bạn ', ''),
(138, 'Máy đánh trứng AVA HM-167 ', 'HM-167 ', 20, 'còn hàng', 43, 11, 340000, 342000, 'admmin', 'public/images/260364-600x600.jpg\"', 'Máy đánh trứng AVA HM-167 là dòng sản phẩm cầm tay thiết kế nhỏ gọn, vỏ màu bạc chủ đạo bằng thép không gỉ hạn chế bám vân tay, phù hợp sử dụng cho cá nhân hoặc gia đình', ''),
(141, 'Máy đánh trứng Panasonic MK-GB3WRA ', 'MK-GB3WRA', 100, 'còn hàng', 43, 2, 1200000, 1256000, 'admin', 'public/images/may-danh-trung-panasonic-mk-gb3wra-224160-300x300.png\"', 'Máy đánh trứng Panasonic màu trắng tươi sáng, kết cấu chắc chắn, tinh xảo, tô điểm cho căn bếp gia đình thêm sang trọng', ''),
(142, 'Máy đánh trứng Bluestone HMB-6338', ' HMB-6338', 40, 'còn hàng', 43, 7, 510000, 590000, 'admin', 'public/images/may-danh-trung-bluestone-hmb-6338-151222-055949-600x600.jpg\"', 'Máy đánh trứng Bluestone thiết kế đẹp mắt với màu sắc sang trọng, vỏ ngoài bằng chất liệu inox sáng bóng, mới lâu, dễ lau chùi', ''),
(145, 'Máy đánh trứng Kangroo EJM50', 'EJM50', 24, 'còn hàng', 43, 10, 540000, 554000, 'admin', 'public/images/locknlock-ejm501dgry-270922-022515-600x600.jpg\"', 'Máy đánh trứng Lock&Lock EJM501DGRY sở hữu kiểu dáng nhỏ gọn, giúp người dùng dễ cầm nắm khi thao tác. Hơn nữa, máy còn được trang bị chức năng tăng tốc và thiết kế nhiều tốc độ, giúp công việc trộn, đánh nguyên liệu trở nên nhanh chóng, dễ dàng hơn.', ''),
(146, 'Máy đánh trứng Panasonic DDQ-B03V1', 'DDQ-B03V1', 35, 'còn hàng', 43, 2, 1200000, 1250000, 'admin', 'public/images/bear-ddq-b03v1-251021-044538-600x600.jpg\"', 'Đa dạng chức năng sử dụng như: nhào bột, đánh bột, đánh kem, đánh trứng,...\r\n', ''),
(149, 'Máy đánh trứng cầm tay Bear B01K1', 'B01K1', 100, 'còn hàng', 43, 8, 300000, 310000, 'admin', 'public/images/may-danh-trung-cam-tay-bear-ddq-b01k1-251021-083426-600x600.jpg\"', 'Thiết kế cầm tay tiện dụng, cầm nắm lâu không gây mỏi, dễ dàng tháo lắp. \r\nCông suất mạnh mẽ 125W, 5 mức tốc độ giúp thoải mái điều chỉnh theo lượng nguyên liệu\r\n', ''),
(151, 'Máy xay thịt Delites LH101B ', 'LH101B ', 24, 'còn hàng', 44, 1, 540000, 554000, 'admin', 'public/images/may-xay-thit-magic-ac-15-225324.jpg\"', 'Máy xay thịt Delites LH101B với cối thủy tinh dung tích 1.2 lít, công suất 250W cùng các tính năng an toàn đáp ứng nhu cầu xay thịt, gia vị,... trong gia đình.', ''),
(152, 'Máy xay thịt AVA HF-22B', 'HF-22B', 43, 'còn hàng', 44, 11, 340000, 400000, 'admmin', 'public/images/may-xay-thit-ava-hf-22b-thumb-300x300.jpg\"', 'Máy xay thịt AVA có cối xay thủy tinh bền tốt, an toàn với thực phẩm với dung tích 1.8 lít xay được nhiều loại thực phẩm cùng lúc', ''),
(155, 'Máy xay thịt AVA GS-701 ', 'GS-701 ', 100, 'còn hàng', 44, 11, 540000, 554000, 'admin', 'public/images/252470-600x600-1.jpg\"', 'Máy xay thịt AVA GS-701 với cối thủy tinh dung tích 1.2 lít, công suất 450W cùng các tính năng an toàn đáp ứng nhu cầu xay thịt, gia vị, cháo,... trong gia đình.', ''),
(156, 'Máy xay thịt Kangarooo CHB-5149 ', 'CHB-5149', 40, 'còn hàng', 44, 10, 632000, 675000, 'admin', 'public/images/may-xay-thit-bluestone-chb-5149-213857.jpg\"', 'Máy xay thịt Bluestone màu sắc hiện đại, sang trọng, làm đẹp không gian bếp sử dụng', ''),
(159, 'Máy xay thịt Panasonic MB-G522', 'MB-G522', 24, 'còn hàng', 44, 2, 540000, 572000, 'admin', 'public/images/291774-1-600x600.jpg\"', 'Máy xay thịt đa năng Mutosi MB-G522 thiết kế hiện đại, đẹp, trang bị cối xay thủy tinh dày bền bỉ, sử dụng xay thịt, xay rau củ, xay gia vị tiện lợi với công suất 350W cùng lưỡi dao 2 tầng bằng inox 420 sắc bén, hoạt động an toàn, phục vụ hữu ích trong gian bếp gia đình', '');

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
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD KEY `id_login` (`id_login`);

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
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tbl_detail_cart`
--
ALTER TABLE `tbl_detail_cart`
  MODIFY `id_detail_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

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
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `tbl_login` (`id_login`);

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
