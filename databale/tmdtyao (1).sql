-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 25, 2024 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tmdtyao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `DonHangID` int(11) DEFAULT NULL,
  `SanPhamID` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `DonHangID`, `SanPhamID`, `SoLuong`, `GiaBan`) VALUES
(1, 1, 1, 2, 2000000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `ID` int(11) NOT NULL,
  `NguoiDungID` int(11) DEFAULT NULL,
  `SanPhamID` int(11) DEFAULT NULL,
  `DiemDanhGia` int(11) NOT NULL,
  `BinhLuan` text DEFAULT NULL,
  `NgayDanhGia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`ID`, `NguoiDungID`, `SanPhamID`, `DiemDanhGia`, `BinhLuan`, `NgayDanhGia`) VALUES
(1, 1, 1, 10, 'tuyệt', '2024-01-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL,
  `home` tinyint(1) NOT NULL,
  `stt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`, `home`, `stt`) VALUES
(1, 'Áo Sweater Nam Basic', 1, 1),
(2, 'Áo Len Polo Nam Dệt Kim', 2, 2),
(3, 'Áo Len Nam Cardigan', 3, 3),
(4, 'Áo Khoác Chần Bông', 4, 4),
(5, 'men', 5, 5),
(6, 'women', 6, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ID` int(11) NOT NULL,
  `NguoiDungID` int(11) DEFAULT NULL,
  `NgayDatHang` date NOT NULL,
  `TongGiaTri` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ID`, `NguoiDungID`, `NgayDatHang`, `TongGiaTri`) VALUES
(0, 2, '0000-00-00', 0.00),
(1, 1, '2024-01-03', 200000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `TenNguoiDung` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `DiaChi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `TenNguoiDung`, `Email`, `MatKhau`, `DiaChi`) VALUES
(1, 'haianh', 'haianhyme@gmail.com', 'haianh123456', 'kim sơn hà đông hà trung thanh hóa'),
(2, '', 'đức123@gmail.com', 'duc123456789', 'quảng an tây hồ hà nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `ID` int(11) NOT NULL,
  `tensanpham` varchar(225) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` varchar(225) NOT NULL,
  `iddm` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`ID`, `tensanpham`, `gia`, `mota`, `hinhanh`, `iddm`, `sale`) VALUES
(1, 'Đầm Midi ', 339.50, 'Đầm Midi Nữ Kẻ Sọc Tà Lệch Thắt Dây Form Straight', 'sale1.jpg', 0, 0),
(2, 'Áo Khoác Chần Bông Nam', 547.50, 'Áo Khoác Chần Bông Nam Phối Màu Form Regular', 'sale2.jpg', 0, 0),
(3, 'Áo Khoác Bomber', 315.00, 'Áo Khoác Bomber Nam Kẻ Sọc Form Regular ', 'sale3.jpg', 0, 0),
(4, 'Áo Khoác Nữ Kiểu Xếp Ly', 390.00, 'Áo Khoác Nữ Kiểu Xếp Ly Sau Form Regular', 'sale4.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` varchar(100) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `iddm` tinyint(1) NOT NULL,
  `DanhMucID` int(11) DEFAULT NULL,
  `ThuongHieuID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSanPham`, `Gia`, `MoTa`, `HinhAnh`, `bestseller`, `iddm`, `DanhMucID`, `ThuongHieuID`) VALUES
(1, 'Áo Sweater Nam Basic Cổ Tròn', '441.000 ₫', 'Chất vải cotton dày dặn nhưng vẫn thoáng mát, mềm mịn, có khả năng giữ ấm cho cơ thể', 'anh1.webp', 0, 1, 1, 1),
(2, 'Áo Len Polo Nam Dệt Kim Tay Ngắn ', '490.000 ₫', 'Áo Len Polo Nam Dệt Kim Tay Ngắn Cotton Phối Túi Form Boxy ', 'anh2.webp', 0, 2, 2, 2),
(3, 'Áo Len Nam Cardigan Tay Dài Cotton', '520.000 ₫', 'Áo Len Nam Cardigan Tay Dài Cotton Cổ V Trơn Form Loose', 'anh3.webp', 0, 3, 3, 3),
(4, 'Áo Khoác Chần Bông Nam Cổ Cao ', '540.000 ₫', 'Chất vải bề mặt là nylon bền, nhẹ, cản gió và chống thấm nước tốt', 'anh4.webp', 0, 4, 4, 4),
(5, 'men', '687.000 ₫', 'men', 'men.jpg', 1, 5, 5, 5),
(6, 'women', '589.000 ₫', 'women', 'women.jpg', 2, 6, 6, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamtop`
--

CREATE TABLE `sanphamtop` (
  `ID` int(11) NOT NULL,
  `tensanpham` varchar(225) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `mota` text NOT NULL,
  `hinhanh` varchar(225) NOT NULL,
  `iddm` tinyint(1) NOT NULL,
  `top` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamtop`
--

INSERT INTO `sanphamtop` (`ID`, `tensanpham`, `gia`, `mota`, `hinhanh`, `iddm`, `top`) VALUES
(1, 'Áo Sweater Nữ Rộng Tay Dài Cổ Tròn', 540.00, '\r\nÁo Sweater Nữ Rộng Tay Dài Cổ Tròn In Hình Form Loose - 10F23SWEW003', 'anh1top.jpg', 0, 1),
(2, 'Áo Len Nữ Dệt Kim', 490.00, 'Áo Len Nữ Dệt Kim Tay Dài Cotton Cổ V Form Regular - 10F23KNIW003', 'anh2top.jpg', 0, 2),
(3, 'Áo Blazer Nữ', 883.00, 'Áo Blazer Nữ Lửng Tay Ngắn Vải Tweed Form Regular Cropped', 'anh3top.jpg', 0, 3),
(4, 'Áo Khoác Nữ Sát Nách', 981.00, 'Áo Khoác Nữ Sát Nách Thắt Eo Trơn Form Straight', 'anh4top.jpg', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `ID` int(11) NOT NULL,
  `TenThuongHieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`ID`, `TenThuongHieu`) VALUES
(1, 'Áo Khoác Bomber Nam Kaki Khóa'),
(2, 'Áo Len Polo Nam Dệt Kim '),
(3, 'Áo Len Nam Cardigan Tay Dài '),
(4, 'Áo Khoác Chần Bông Nam'),
(5, 'men'),
(6, 'women');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DonHangID` (`DonHangID`),
  ADD KEY `SanPhamID` (`SanPhamID`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NguoiDungID` (`NguoiDungID`),
  ADD KEY `SanPhamID` (`SanPhamID`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NguoiDungID` (`NguoiDungID`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DanhMucID` (`DanhMucID`),
  ADD KEY `ThuongHieuID` (`ThuongHieuID`);

--
-- Chỉ mục cho bảng `sanphamtop`
--
ALTER TABLE `sanphamtop`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanphamtop`
--
ALTER TABLE `sanphamtop`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`DonHangID`) REFERENCES `donhang` (`ID`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`SanPhamID`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`NguoiDungID`) REFERENCES `nguoidung` (`ID`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`SanPhamID`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`NguoiDungID`) REFERENCES `nguoidung` (`ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`DanhMucID`) REFERENCES `danhmuc` (`ID`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`ThuongHieuID`) REFERENCES `thuonghieu` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
