-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2022 lúc 08:43 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan_clock`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_giohang` int(11) NOT NULL,
  `ID_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(233) NOT NULL,
  `anhgoc` varchar(233) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID_giohang`, `ID_sanpham`, `tensanpham`, `anhgoc`, `gia`, `soluong`) VALUES
(576, 33, 'Đồng hồ Epos Swiss E-8000.700.28.85.32', '172437906_donghonuthuysy1.jpg', 51300000, 5),
(281, 33, 'Đồng hồ Epos Swiss E-8000.700.28.85.32', '172437906_donghonuthuysy1.jpg', 51300000, 2),
(91, 32, 'Đồng hồ Aries Gold AG-L5033Z RG-BK', '766126094_dong-ho-nu-3.jpg', 3577000, 1),
(425, 33, 'Đồng hồ Epos Swiss E-8000.700.28.85.32', '172437906_donghonuthuysy1.jpg', 51300000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `ID` int(11) NOT NULL,
  `hoten` varchar(233) NOT NULL,
  `sdt` int(15) NOT NULL,
  `diachi` varchar(233) NOT NULL,
  `thoigiandat` date NOT NULL,
  `tong` int(15) NOT NULL,
  `ID_nhanvien` int(11) DEFAULT NULL,
  `thanhtoan` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`ID`, `hoten`, `sdt`, `diachi`, `thoigiandat`, `tong`, `ID_nhanvien`, `thanhtoan`) VALUES
(91, 'vinh12', 123456789, 'ngox 49 nguyen khoai', '2022-03-25', 3577000, NULL, 'Chưa thanh toán'),
(281, 'tuan', 123456789, '50 Bạch Mai', '2022-03-23', 102600000, NULL, 'Chưa thanh toán'),
(425, 'vinh12', 556, 'Ngõ 50 Nguyễn Khoái', '2022-03-25', 102600000, 391, 'Đã thanh toán'),
(576, 'vinh', 123456789, 'ngox 49 nguyen khoai', '2022-03-02', 256500000, 921, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `ID_hang` int(10) NOT NULL,
  `tenhang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`ID_hang`, `tenhang`) VALUES
(3, 'hello1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `ID` int(11) NOT NULL,
  `hoten` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `sdt` int(15) NOT NULL,
  `noidung` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`ID`, `hoten`, `email`, `sdt`, `noidung`) VALUES
(1, 'heyu', 'Vluong886@gmail.com', 123456789, 'fgnfgn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_nhanvien`
--

CREATE TABLE `login_nhanvien` (
  `ID` int(11) NOT NULL,
  `hoten` varchar(233) NOT NULL,
  `taikhoan` varchar(233) NOT NULL,
  `matkhau` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `login_nhanvien`
--

INSERT INTO `login_nhanvien` (`ID`, `hoten`, `taikhoan`, `matkhau`) VALUES
(391, 'Nguyễn Công Minh', 'minh', '123456789'),
(921, 'Lương Ngọc Vinh', 'vinh', '123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ID` int(11) NOT NULL,
  `hoten` varchar(233) NOT NULL,
  `sdt` int(15) NOT NULL,
  `diachi` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `anh` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `chucvu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ID`, `hoten`, `sdt`, `diachi`, `email`, `anh`, `date`, `sex`, `chucvu`) VALUES
(391, 'Nguyễn Công Minh', 123456789, 'Ngõ 50 Nguyễn Khoái', 'l72.info@gmail.com', '134896665_232536398445112_7979820188107662484_n.jpg', '2022-02-09', 1, 'truong chi nhanh'),
(921, 'Lương Ngọc Vinh', 123456789, 'Ngõ 50 Nguyễn Khoái', 'Vluong886@gmail.com', '130090955_2680784998899713_1783525930978126860_n.jpg', '2001-07-13', 1, 'truong chi nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `hoten` varchar(233) NOT NULL,
  `star` int(11) NOT NULL,
  `nhanxet` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `tensanpham` varchar(233) NOT NULL,
  `giamoi` int(20) NOT NULL,
  `giacu` int(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `anhgoc` varchar(233) NOT NULL,
  `anh1` varchar(233) NOT NULL,
  `anh2` varchar(233) NOT NULL,
  `anh3` varchar(233) NOT NULL,
  `anh4` varchar(233) NOT NULL,
  `ID_hang` int(10) NOT NULL,
  `theloai` varchar(233) NOT NULL,
  `mota` varchar(10000) NOT NULL,
  `duongkinh` varchar(255) NOT NULL,
  `chongnuoc` varchar(255) NOT NULL,
  `chatlieu` varchar(255) NOT NULL,
  `nangluong` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `chatlieuday` varchar(255) NOT NULL,
  `chatlieuvo` varchar(255) NOT NULL,
  `kieudang` varchar(255) NOT NULL,
  `xuatxu` varchar(255) NOT NULL,
  `baohanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `tensanpham`, `giamoi`, `giacu`, `soluong`, `anhgoc`, `anh1`, `anh2`, `anh3`, `anh4`, `ID_hang`, `theloai`, `mota`, `duongkinh`, `chongnuoc`, `chatlieu`, `nangluong`, `size`, `chatlieuday`, `chatlieuvo`, `kieudang`, `xuatxu`, `baohanh`) VALUES
(55, 'Apple Watch SE GPS 40mm viền nhôm dây cao su', 6999000, 7999000, 100, '', '', '', '', '', 3, 'dong ho co', '<p><strong>Đồng hồ Jacques Lemans&nbsp;JL-11-1654.2ZD&nbsp;phi&ecirc;n bản giới hạn.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(7).jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Với thiết kế đồng hồ thể thao điển h&igrave;nh d&agrave;nh cho ph&aacute;i mạnh lu&ocirc;n thuộc top những mẫu đồng hồ b&aacute;n chạy nhất tại Đăng Quang&nbsp;Watch.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(1).jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Với phi&ecirc;n bản giới hạn của m&igrave;nh JL-11-1654.2ZD đ&atilde; tăng th&ecirc;m nhiều sự đột ph&aacute; mới về thiết kế cũng như chất liệu sản phẩm khiến cho mẫu sản phẩm n&agrave;y c&agrave;ng trở n&ecirc;n đắt gi&aacute; hơn.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(2).jpg\" /></p>\r\n\r\n<p><strong>Chất liệu vỏ th&eacute;p kh&ocirc;ng gỉ 316L cao cấp.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(3).jpg\" /></p>\r\n\r\n<p><strong>D&acirc;y da ch&iacute;nh h&atilde;ng.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(6).jpg\" /></p>\r\n\r\n<p><strong>Bảo h&agrave;nh 2 năm quốc tế.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(4).jpg\" /></p>\r\n\r\n<p><strong>JL-11-1654.2ZD&nbsp;<em><em>chắc chắn&nbsp;</em></em>sẽ l&agrave; một sự lựa chọn kh&ocirc;ng thể bỏ qua cho ph&aacute;i mạnh trong năm nay.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20limited%20(5).jpg\" /></p>\r\n\r\n<p><strong>Ngầu như cầu thủ Ho&agrave;ng<em><em>&nbsp;Đức&nbsp;</em></em>l&ecirc;n tay si&ecirc;u phẩm Jacques Lemans Limited</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/hoang-duc-deo-sieu-pham.jpg\" /></strong></p>\r\n\r\n<p><strong>Lịch l&atilde;m như diễn vi&ecirc;n Việt Ho&agrave;ng&nbsp;l&ecirc;n tay si&ecirc;u phẩm Jacques Lemans Limited.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Viet-Hoang-deo-jacques-lemans-limited.jpg\" /></strong></p>\r\n\r\n<p><strong>Sự lựa chọn ho&agrave;n hảo của diễn vi&ecirc;n Anh Tuấn.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/z3230576457320_e224473970dc26f7e7f99e579bdf87d0.jpg\" /></strong></p>\r\n\r\n<p><strong>Giấy chứng nhận Đăng Quang Watch l&agrave; nh&agrave; ph&acirc;n phối độc quyền của thương hiệu JACQUES LEMANS tại Việt Nam.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/Jacques-Lemans--Certificate_Dang_Quang_2020web.jpg\" /></strong></p>\r\n\r\n<p><strong>Đăng Quang Watch tự h&agrave;o l&agrave; nh&agrave; ph&acirc;n phối b&aacute;n lẻ đồng hồ&nbsp;lớn nhất Việt Nam</strong></p>\r\n', 'edv', 'df', 'dfb', 'dfb', 'dfb', 'rb', 'rt', 'rtb', 'evb', '500');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `ID` int(11) NOT NULL,
  `tendoanhthu` varchar(233) NOT NULL,
  `thang_doanh_thu` int(11) NOT NULL,
  `nam_doanh_thu` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `tongdoanhthu` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`ID`, `tendoanhthu`, `thang_doanh_thu`, `nam_doanh_thu`, `ngaytao`, `tongdoanhthu`) VALUES
(1, 'Bản thống kê doanh thu tháng 3 / 2022', 3, 2022, '2022-03-05', 256500000),
(2, 'Bản thống kê doanh thu tháng 3 / 2022', 3, 2022, '2022-03-16', 256500000),
(3, 'Bản thống kê doanh thu tháng 3 / 2022', 3, 2022, '2022-03-29', 359100000),
(4, 'Bản thống kê doanh thu tháng 3 / 2022', 3, 2022, '2022-03-29', 359100000),
(5, 'Bản thống kê doanh thu tháng 3 / 2022', 3, 2022, '2022-03-29', 359100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ID_tintuc` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `loinoingan` varchar(255) NOT NULL,
  `thoigian` date NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `ID_hoadon` (`ID_giohang`),
  ADD KEY `ID_sanpham` (`ID_sanpham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_nhanvien` (`ID_nhanvien`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`ID_hang`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `login_nhanvien`
--
ALTER TABLE `login_nhanvien`
  ADD KEY `ID` (`ID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD KEY `ID` (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_hang` (`ID_hang`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID_tintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `ID_hang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID_tintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ID_giohang`) REFERENCES `giohang` (`ID`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`ID_nhanvien`) REFERENCES `nhanvien` (`ID`);

--
-- Các ràng buộc cho bảng `login_nhanvien`
--
ALTER TABLE `login_nhanvien`
  ADD CONSTRAINT `login_nhanvien_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `nhanvien` (`ID`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ID_hang`) REFERENCES `hang` (`ID_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
