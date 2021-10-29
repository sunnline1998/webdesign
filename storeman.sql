-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2020 lúc 06:07 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `storeman`
--
CREATE DATABASE IF NOT EXISTS `storeman` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `storeman`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'hungtv', '312');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `CatId` int(11) NOT NULL,
  `CatName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'SamSung'),
(2, 'Sony'),
(3, 'Apple'),
(4, 'Nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `CusId` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `OrderId` varchar(10) NOT NULL,
  `OrderDate` date NOT NULL,
  `CusId` int(11) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE `orderdetail` (
  `OrderId` varchar(10) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `Quantitty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `CatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Image`, `Price`, `CatId`) VALUES
('11', 'Iphone 11 Pro Max ', 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-400x460.png', 1201, 3),
('11pro', 'Iphone 11 64GB', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-2-400x460.png', 1000, 3),
('7.1', 'Nokia 7.2', 'https://cdn.tgdd.vn/Products/Images/42/207650/nokia-72-silver-400x460.png', 500, 4),
('8.1', 'Nokia 8.1', 'https://cdn.tgdd.vn/Products/Images/42/194917/nokia-81-blue-2-400x460.png', 700, 4),
('fold', 'SamSung Galaxy Fold', 'https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-black-600x600.jpg', 2100, 1),
('note10', 'SamSung Galay Note10 512GB', 'https://cdn.tgdd.vn/Products/Images/42/191276/samsung-galaxy-note-10-silver-400x460.png', 1100, 1),
('note10+', 'SamSung Galaxy Note 10+ 256GB', 'https://cdn.tgdd.vn/Products/Images/42/206176/samsung-galaxy-note-10-plus-blue-600x600.jpg', 1300, 1),
('X1R', 'Sony Xperia 1R', 'https://cdn.tgdd.vn/Products/Images/42/207749/sony-xperia-1r-600x600.jpg', 150, 2),
('X8', 'Sony Xperia 8', 'https://cdn.tgdd.vn/Products/Images/42/212354/sony-xperia-8-400x460.png', 200, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productdetail`
--

DROP TABLE IF EXISTS `productdetail`;
CREATE TABLE `productdetail` (
  `productdetailid` varchar(10) NOT NULL,
  `Productid` varchar(20) NOT NULL,
  `image` varchar(120) NOT NULL,
  `screen` varchar(50) NOT NULL,
  `OS` varchar(50) NOT NULL,
  `CameraT` varchar(10) NOT NULL,
  `CameraS` varchar(20) NOT NULL,
  `RAM` varchar(10) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `Battery` varchar(50) NOT NULL,
  `CPUSp` varchar(70) NOT NULL,
  `wifi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `productdetail`
--

INSERT INTO `productdetail` (`productdetailid`, `Productid`, `image`, `screen`, `OS`, `CameraT`, `CameraS`, `RAM`, `CPU`, `Battery`, `CPUSp`, `wifi`) VALUES
('7.1', '7.1', 'https://cdn.tgdd.vn/Products/Images/42/207650/nokia-72-silver-400x460.png', 'IPS LCD, 5.84', 'Android 8 Oreo (Android One)', '8MP', 'Chính 12 MP & Phụ 5 ', '3GB', 'Qualcomm Snapdragon 636 8 nhân 64-bit', '3060 mAh   2qewewewewqewewewewew', '4 nhân 2.2 GHz & 4 nhân 1.8 GHz', 'Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot'),
('8.1', '8.1', 'https://cdn.tgdd.vn/Products/Images/42/194917/nokia-81-blue-2-400x460.png', 'IPS LCD, 6.18”, Full HD+', 'Android 9 Pie (Android One)', '20MP', 'Chính 12 MP & Phụ 13', '4GB', 'Snapdragon 710 8 nhân', '3500 mAh', '2 nhân 2.2 GHz & 6 nhân 1.7 GHz', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, Wi-Fi hotspot'),
('ip11', '11', 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-400x460.png', 'IPS LCD, 6.1\", Liquid Retina', 'IOS 13', '12MP', 'Chính 12 MP & Phụ 12', '4GB', 'Apple A13 Bionic 6 nhân', '3110 mAh', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'Dual-band, Wi-Fi 802.11 a/b/g/n/ac/ax, Wi-Fi hotspot'),
('ip11pro', '11pro', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-2-400x460.png', 'OLED, 6.5\", Super Retina XDR', 'IOS 13', '12MP', '3 camera 12 MP', '4GB', 'Apple A13 Bionic 6 nhân', '3969 mAh', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'Dual-band, Wi-Fi 802.11 a/b/g/n/ac/ax, Wi-Fi hotspot'),
('ssfold', 'fold', 'https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-black-600x600.jpg', 'Chính: Dynamic AMOLED, phụ: Super AMOLED', 'Android 9.0 (Pie)', '10MP;8MP', '12MP&16MP', '12GB', 'Snapdragon 855 8 nhân', '4380 mAh', '1 nhân 2.84 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'Wi-Fi 802.11 b/g/n, Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotsp'),
('ssnote10', 'note10', 'https://cdn.tgdd.vn/Products/Images/42/191276/samsung-galaxy-note-10-silver-400x460.png', 'Dynamic AMOLED', 'Android 9.0 (Pie)', '10MP', '12MP&16MP', '8GB', 'Exynos 9825 8 nhân', '3500 mAh', '2 nhân 2.73 GHz, 2 nhân 2.4 GHz & 4 nhân 1.9 GHz', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi Direct, Wi-Fi hotspot'),
('ssnote10+', 'note10+', 'https://cdn.tgdd.vn/Products/Images/42/206176/samsung-galaxy-note-10-plus-blue-600x600.jpg', 'Dynamic AMOLED; 2K+', 'Android 9.0 (Pie)', '10MP', '12MP&16MP', '12GB', 'Exynos 9825 8 nhân', '4300 mAh', '2 nhân 2.73 GHz, 2 nhân 2.4 GHz & 4 nhân 1.9 GHz', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi Direct, Wi-Fi hotspot'),
('x1r', 'X1R', 'https://cdn.tgdd.vn/Products/Images/42/207749/sony-xperia-1r-600x600.jpg', 'P-OLED, 6.1\", Ultra HD (4K)', 'Android 9.0 (Pie)', '8MP', '3x12MP', '6GB', 'Snapdragon 855 8 nhân 64-bit', '4300 mAh', '1 nhân 2.84 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot'),
('x8', 'X8', 'https://cdn.tgdd.vn/Products/Images/42/212354/sony-xperia-8-400x460.png', 'TRILUMINOS™, 6\", Full HD+', 'Android 9.0 (Pie)', '8MP', '12MP&8MP', '4GB', 'Qualcomm Snapdragon 630 8 nhân 64-bit', '2760 mAh', '2.2 GHz', 'Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatId`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusId`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `CusId` (`CusId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderId`,`ProductId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `foreignkey_product_catid` (`CatId`);

--
-- Chỉ mục cho bảng `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`productdetailid`),
  ADD KEY `Productid` (`Productid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CusId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CusId`) REFERENCES `customer` (`CusId`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignkey_product_catid` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`);

--
-- Các ràng buộc cho bảng `productdetail`
--
ALTER TABLE `productdetail`
  ADD CONSTRAINT `productdetail_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`ProductId`),
  ADD CONSTRAINT `productdetail_ibfk_2` FOREIGN KEY (`Productid`) REFERENCES `product` (`ProductId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
