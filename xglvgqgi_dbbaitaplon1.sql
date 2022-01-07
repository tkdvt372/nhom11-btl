-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 07, 2022 lúc 04:25 PM
-- Phiên bản máy phục vụ: 5.7.33-cll-lve
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xglvgqgi_dbbaitaplon1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(20) NOT NULL,
  `TaiKhoan` varchar(20) NOT NULL,
  `MaHang` varchar(20) NOT NULL,
  `TenSP` varchar(20) NOT NULL,
  `Anh` varchar(200) NOT NULL,
  `DonGia` varchar(20) NOT NULL,
  `SoLuong` varchar(20) NOT NULL,
  `ThanhTien` varchar(20) NOT NULL,
  `MaDonHang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `TaiKhoan`, `MaHang`, `TenSP`, `Anh`, `DonGia`, `SoLuong`, `ThanhTien`, `MaDonHang`) VALUES
(19, 'tkdvt372no100', 'KMHN006', 'ChÃ¨', 'che.jpg', '20000', '1', '20000', '41'),
(20, 'tkdvt372no100', 'KMHN002', 'Phá»Ÿ HÃ  Ná»™i', '1.jpg', '30000', '4', '120000', '42'),
(21, 'tkdvt372no100', 'KMHN001', 'BÃ¡nh MÃ¬ Viá»‡t', 'banhmi.jpg', '40000', '1', '40000', '42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdanhgia`
--

CREATE TABLE `tbdanhgia` (
  `ID` int(50) NOT NULL,
  `mahang` varchar(500) NOT NULL,
  `taikhoan` varchar(500) NOT NULL,
  `danhgia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbdanhgia`
--

INSERT INTO `tbdanhgia` (`ID`, `mahang`, `taikhoan`, `danhgia`) VALUES
(45, 'KMHN001', 'tkdvt372no100', 'mÃ³n nÃ y ngon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbtaikhoan`
--

CREATE TABLE `tbtaikhoan` (
  `ID` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbtaikhoan`
--

INSERT INTO `tbtaikhoan` (`ID`, `hovaten`, `taikhoan`, `matkhau`) VALUES
(0, 'DÆ°Æ¡ng VÄƒn TuÃ¢n', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(24, 'DÆ°Æ¡ng VÄƒn TuÃ¢n', 'tkdvt372no100', '8778b8ae5ad97140a661df59fb307cde'),
(26, 'Pháº¡m Há»¯u Truyá»n', 'tkdvt372no1', '8778b8ae5ad97140a661df59fb307cde'),
(27, 'Trá»‹nh CÃ´ng Triá»‡', 'trieu123', '517697eb0e931c8a84682d125b213709'),
(28, 'Nho Thá»‹ Thanh Huyá»n ', 'tkdvt372no4', '8778b8ae5ad97140a661df59fb307cde'),
(29, 'DÆ°Æ¡ng VÄƒn TuÃ¢n', 'tkdvt372', '8778b8ae5ad97140a661df59fb307cde'),
(31, 'Trá»‹nh CÃ´ng Triá»‡u', 'tkdvt372no6', '8778b8ae5ad97140a661df59fb307cde'),
(32, 'Nguyá»…n Äá»©c Thiá»‡n ', 'tkdvt372no7', '8778b8ae5ad97140a661df59fb307cde'),
(33, 'Nguyá»…n Thá»‹ Nhung', 'tkdvt372no8', 'mkdvt372');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbthemsp`
--

CREATE TABLE `tbthemsp` (
  `mahang` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `anh` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(500) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `nguyenlieu` varchar(500) NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbthemsp`
--

INSERT INTO `tbthemsp` (`mahang`, `tensp`, `anh`, `gia`, `diachi`, `mota`, `nguyenlieu`, `ngaytao`) VALUES
('COM001', 'CÆ¡m sÆ°á»n, cÆ¡m táº¥m', 'trua-nay-an-gi-com-tam(1).jpg', '40000', 'HÃ  Ná»™i', 'Ä‘Ã¢y lÃ  má»™t mÃ³n Äƒn mÃ  báº¡n cÃ³ thá»ƒ báº¯t gáº·p báº¥t cá»© Ä‘Ã¢u...', 'CÆ¡m Ä‘Æ°á»£c lÃ m tá»« háº¡t táº¥m, Äƒn khÃ¡ ngon miá»‡ng, ngÆ°á»i ...', '2022-01-07'),
('COM002', 'CÆ¡m rang dÆ°a bÃ²', 'recipe20731-636371266638707262.jpg', '40000', 'Äá»‘ng Äa HÃ  Ná»™i', 'CÆ¡m rang dÆ°a bÃ² lÃ  má»™t trong nhá»¯ng mÃ³n dá»… Äƒn vÃ  Ä‘Æ°...', 'DÆ°a vÃ  thá»‹t bÃ²', '2022-01-01'),
('COM003', 'CÆ¡m trá»™n HÃ n Quá»‘c', 'comhq.jpg', '35000', 'Thanh TrÃ¬-HÃ  Ná»™i', 'NhÆ°ng mÃ  giá»›i vÄƒn phÃ²ng cÅ©ng mÃª máº©n khÃ´ng kÃ©m nha,...', 'DÆ°a vÃ  thá»‹t bÃ²', '2022-01-05'),
('COM004', 'CÆ¡m há»™p', 'com.jpg', '30000', 'HÃ  ná»™i', 'Ä‚n Ä‘Æ°á»£c', 'CÆ¡m,thá»‹t vÃ  rau xÃ o', '2022-01-06'),
('COM005', 'CÆ¡m vÄƒn phÃ²ng', 'LOGO-2.jpg', '45000', 'HÃ  Ná»™i', 'Ngon', 'Cá»›m vÃ  Ã­t thá»©c Äƒn', '2021-11-15'),
('COM006', 'CÆ¡m táº¥m Thá»§y Linh ChÃ¢u', 'cach-lam-mi-can-xot-nam.png', '50000', 'HÃ  Ná»™i', 'Ngon', 'cÆ¡m', '2021-11-15'),
('KMHN001', 'BÃ¡nh MÃ¬ Viá»‡t', 'banhmi.jpg', '40000', 'Nam Tá»« LiÃªm-HÃ  Ná»™i', 'BÃ¡nh mÃ¬ Viá»‡t Nam lÃ  má»™t mÃ³n Äƒn cá»§a Viá»‡t Nam', 'Bá»™t mÃ¬ hoáº·c bá»™t gáº¡o, rau, thá»‹t, bÆ¡, cháº£, patÃª, nÆ°á»›c sá»‘t, gia vá»‹.', '2021-11-15'),
('KMHN002', 'Phá»Ÿ HÃ  Ná»™i', '1.jpg', '30000', 'HÃ  ÄÃ´ng-HÃ  Ná»™i', 'Phá»Ÿ lÃ  má»™t mÃ³n Äƒn truyá»n thá»‘ng cá»§a Viá»‡t Nam, cÃ³ nguá»“n gá»‘c tá»« HÃ  Ná»™i vÃ  Nam Äá»‹nh, vÃ  Ä‘Æ°á»£c xem lÃ  má»™t trong nhá»¯ng mÃ³n Äƒn tiÃªu biá»ƒu cho ná»n áº©m thá»±c Viá»‡t Nam. ', 'ThÃ nh pháº§n chÃ­nh cá»§a phá»Ÿ lÃ  bÃ¡nh phá»Ÿ vÃ  nÆ°á»›c dÃ¹ng cÃ¹ng vá»›i thá»‹t bÃ² hoáº·c thá»‹t gÃ  cáº¯t lÃ¡t má»ng.  ', '2021-11-15'),
('KMHN003', 'Nem NÆ°á»›ng Nha Trang', 'nem.jpg', '50000', 'HÃ  Ná»™i', 'Äƒn Ä‘Æ°á»£c', 'Nem nÆ°á»›ng Ä‘Æ°á»£c ngÆ°á»i Nha Trang cháº¿ biáº¿n tá»« thá»‹t náº¡c giÃ£ nhuyá»…n, trá»™n Ä‘á»u vá»›i má»¡ háº¡t lá»±u vÃ  má»™t sá»‘ gia vá»‹ nhÆ° tá»i, Ä‘Æ°á»ng, tiÃªu, muá»‘iâ€¦ ', '2021-11-15'),
('KMHN004', 'BÃ¡nh Cuá»‘n', 'banhcuon.jpg', '50000', 'Báº¯c Tá»« LiÃªm-HÃ  Ná»™i', 'BÃ¡nh cuá»‘n cÃ²n gá»i lÃ  bÃ¡nh mÆ°á»›t hay bÃ¡nh Æ°á»›t lÃ  tÃªn gá»i má»™t loáº¡i thá»±c pháº©m lÃ m tá»« bá»™t gáº¡o háº¥p trÃ¡ng má»ng, cuá»™n trÃ²n, bÃªn trong Ä‘á»™n nhÃ¢n rau hoáº·c thá»‹t', 'Bá»™t gáº¡o, rau, thá»‹t', '2021-11-15'),
('KMHN005', 'Láº©u TOKYO', 'lau.jpg', '200000', 'HÃ  Ná»™i', 'HÆ°Æ¡ng vá»‹ thÆ¡m ngon cá»§a nÆ°á»›c sá»‘t cay cay káº¿t há»£p vá»›i phÃ´ mai bÃ©o ngáº­y vÃ  bÃ¡nh gáº¡o má»m dai cháº¯c cháº¯n sáº½ \"Ä‘Ã¡nh gá»¥c\" trÃ¡i tim cá»§a nhá»¯ng ngÆ°á»i Ä‘am mÃª áº©m thá»±c.', 'Tháº­p cáº©m', '2021-11-15'),
('KMHN006', 'ChÃ¨', 'che.jpg', '20000', 'HÃ  Ná»™i', 'DÃ¹ng Ä‘á»ƒ trÃ¡ng miá»‡ng', '... ÄÃ¢y lÃ  má»™t mÃ³n nÆ°á»›c, trong Ä‘Ã³ nguyÃªn liá»‡u quan trá»ng nháº¥t lÃ  Ä‘Æ°á»ng Äƒn.  ', '2021-11-15'),
('KMHN007', 'CÃ  PhÃª', 'caphe.jpg', '50000', 'HÃ  Ná»™i', 'ThÆ¡m ngon, Äƒn Ä‘Æ°á»£c', 'CÃ  phÃª lÃ  má»™t loáº¡i thá»©c uá»‘ng Ä‘Æ°á»£c á»§ tá»« háº¡t cÃ  phÃª rang, láº¥y tá»« quáº£ cá»§a cÃ¢y cÃ  phÃª', '2021-11-15'),
('KMHN008', 'trÃ  ÄÃ o', 'tradao.jpg', '40000', 'HÃ  Ná»™i', 'Nhá»¯ng ly trÃ  Ä‘Ã o thÆ°á»ng mang mÃ¹i vá»‹ vÃ´ cÃ¹ng thanh mÃ¡t, dá»‹u nháº¹, mang Ä‘áº­m Ä‘áº·c Ä‘iá»ƒm cá»§a Ä‘Ã o ráº¥t phÃ¹ há»£p Ä‘á»ƒ giáº£i khÃ¡t vÃ o ngÃ y hÃ¨. ', 'Ä‘Æ°á»ng, muá»‘i, nÆ°á»›c, trÃ  tÃºi lá»c, chanh, Ä‘Ã o ngÃ¢m.', '2021-11-15'),
('MNBC001', 'á»‘c nÃ³ng', '2013-07-06.02.02.38-1.jpg', '100000', 'HÃ  Ná»™i', 'á»c Ä‘Ã¡, á»‘c váº·n hay á»‘c mÃ­t cá»© má»›i luá»™c nÃ³ng há»•i, cháº¥m cÃ¹ng nÆ°á»›c máº¯m cay cay vá»‹ gá»«ng á»›t, thÆ¡m thÆ¡m mÃ¹i sáº£, lÃ¡ chanh thÃ¬ dÃ¹ lÃ  mÃ¹a nÃ³ng hay mÃ¹a láº¡nh Ä‘á»u lÃ m má»i ngÆ°á»i xuÃ½t xoa, thÃ­ch thÃº.', 'á»‘c', '2021-11-15'),
('MNBC002', 'BÃ¡nh trÃ¡ng cuá»™n sá»‘t trá»©ng', 'adsad.jpg', '25000', 'HÃ  Ná»™i', 'ThÆ¡m ngon, Äƒn Ä‘Æ°á»£c', ' bÃ¡nh trÃ¡ng dáº»o thÆ¡m vÃ  báº¯t máº¯t vá»›i mÃ u vÃ ng Ã³ng Ã¡nh. CÃ²n pháº§n sá»‘t Ä‘Æ°á»£c lÃ m tá»« trá»©ng gÃ  thÆ¡m bÃ©o káº¿t há»£p cÃ¹ng nhá»¯ng nguyÃªn liá»‡u Äƒn kÃ¨m ráº¥t Ä‘áº­m Ä‘Ã  vÃ  vá»«a vá»‹.', '2021-11-15'),
('MNBC003', 'BÃ¡nh trÃ¡ng trá»™n', 'dsad.jpg', '50000', 'HÃ  Ná»™i', 'Ã  má»™t mÃ³n Äƒn váº·t quen thuá»™c thu hÃºt giá»›i tráº» nhá» vÃ o sá»± káº¿t há»£p gia vá»‹ vÃ  nguyÃªn liá»‡u má»™t cÃ¡ch Ä‘á»™c Ä‘Ã¡o.', 'MÃ³n bÃ¡nh trÃ¡ng trá»™n Ä‘Æ°á»£c phá»‘i trá»™n tá»« vá»‹ cay cá»§a bÃ² khÃ´ cÃ¹ng vá»‹ bÃ©o bÃ¹i cá»§a láº¡c, cá»§a trá»©ng cÃºt vÃ  vá»‹ thÆ¡m cá»§a hÃ nh phi. Táº¥t cáº£ Ä‘Ã£ Ä‘á»“ng nháº¥t táº¡o nÃªn má»™t hÆ°Æ¡ng vá»‹ cÃ³ má»™t khÃ´ng hai.', '2021-11-15'),
('MNBC004', 'Ná»™m khÃ´ bÃ²', 'as.jpg', '25000', 'HÃ  Ná»™i', 'Cay, thÆ°á»ng dÃ nh cho báº¡n tráº»', 'káº¿t há»£p cÃ¹ng vá»‹ dai dai cá»§a khÃ´ bÃ², thÆ¡m ná»“ng mÃ¹i á»›t cá»±c háº¥p dáº«n. MÃ³n ná»™m khÃ´ bÃ² thÆ°á»ng Ä‘Æ°á»£c cÃ¡c báº¡n tráº» thÆ°á»Ÿng thá»©c vÃ o nhá»¯ng buá»•i chiá»u mÃ¡t á»Ÿ nhá»¯ng quÃ¡n lá» Ä‘Æ°á»ng, vá»«a Äƒn vá»«a trÃ² chuyá»‡n vá»›i báº¡n bÃ¨ quáº£ tháº­t lÃ  thÃº vá»‹ vÃ  tuyá»‡t vá»i.', '2021-11-15'),
('MNBC005', 'CÃºt lá»™n xÃ o me', 'aa.jpg', '55000', 'HÃ  Ná»™i', 'Vá»‹ chua ngá»t cá»§a sá»‘t Ä‘Æ°á»£c káº¿t há»£p ráº¥t vá»«a vá»‹, quyá»‡n cÃ¹ng pháº§n trá»©ng cÃºt bá»• dÆ°á»¡ng cá»™ng thÃªm vá»‹ áº¥m, thÆ¡m cá»§a rau rÄƒm vÃ  vá»‹ bÃ©o giÃ²n cá»§a Ä‘áº­u phá»™ng,...', 'Trá»©ng vá»‹t lá»™n', '2021-11-15'),
('MNBC006', 'Sá»¥n gÃ  rang muá»‘i', 'aw.jpg', '40000', 'HÃ  Ná»™i', 'Ä‘Æ°á»£c chiÃªn vÃ ng giÃ²n Ä‘áº¥y háº¥p dáº«n káº¿t há»£p cÃ¹ng lá»›p muá»‘i Ä‘Æ°á»£c phá»§ Ä‘á»u bÃªn ngoÃ i ráº¥t vá»«a vá»‹ vÃ  thÆ¡m ngon. ', 'ChÃ¢n gÃ  vÃ  Ã­t muá»‘i', '2021-11-15'),
('MNH001', 'Sá»¯a chua trÃ¢n chÃ¢u Háº¡ Long', 'aqq.jpg', '10000', 'Äá»‘ng Äa HÃ  Ná»™i', 'Sá»¯a chua cÃ³ vá»‹ thanh, trÃ¢n chÃ¢u cá»‘t dá»«a thÆ¡m ngáº­y', 'Tháº­p cáº©m', '2022-01-05'),
('MNH002', 'BÃ¡nh MÃ¬ DÃ¢n Tá»•', 'aqqqq.jpg', '30000', 'HÃ  Ná»™i', 'thÆ¡m ngon', 'bÃ¡nh mÃ¬ vÃ  thá»‹t', '2021-12-30'),
('MNH003', 'Simisi - Äá»“ Äƒn HÃ n Quá»‘c', 's.jpg', '40000', 'HÃ  Ná»™i', 'Dáº¡ng Ä‘á»“ Äƒn HÃ n Quá»‘c', 'Ráº¥t nhiá»u thá»©c Äƒn', '2022-01-04'),
('MNH004', 'BÃ¡nh bÃ² nhÃ¢n dá»«a', 'ae.jpg', '40000', 'HÃ  Ná»™i', 'Vá»‹ bÃ¡nh láº¡ miá»‡ng láº¯m, nhÃ¢n dá»«a bÃªn trong Ä‘Æ°á»£c cháº¿ ...', 'bÃ¡nh bÃ² sá»¯a vÃ  bÃ¡nh káº¹p má»m thÆ¡m ngon ná»¯a nha.', '2022-01-06'),
('NBC001', 'Cafe', 'caphe.jpg', '40000', 'HÃ  Ná»™i', 'thÆ¡m ngon', 'cÃ  phÃª', '2022-01-05'),
('NU001', 'TrÃ  sá»¯a trÃ¢n chÃ¢u', 'trasua.jpg', '35000', 'Hai BÃ  TrÆ°ng-HÃ  Ná»™i', 'Äáº·c Ä‘iá»ƒm cá»§a trÃ  sá»¯a trÃ¢n chÃ¢u lÃ  khi bá»‹ láº¯c, má»™t ...', 'Háº¡t trÃ¢n chÃ¢u, sá»¯a/kem, bá»™t trÃ , nÆ°á»›c, Ä‘Æ°á»ng', '2021-11-15'),
('NU002', 'TrÃ  Chanh', 'trachanh.jpg', '30000', 'HÃ  Ná»™i', 'NÆ°á»›c uá»‘ng giáº£i nhiá»‡t mÃ¹a nÃ³ng', 'trÃ ,chanh,...', '2021-11-15'),
('NU003', 'NÆ°á»›c giáº£i khÃ¡t', 'giaikhat.jpg', '30000', 'HÃ  Ná»™i', 'NÆ°á»›c giáº£i khÃ¡t cÃ³ ga (cÃ²n gá»i lÃ  nÆ°á»›c ngá»t cÃ³ ga h...', 'Cháº¥t lÃ m ngá»t cÃ³ thá»ƒ lÃ  Ä‘Æ°á»ng,XirÃ´ báº¯p high-glucto...', '2022-01-12'),
('NU004', 'TrÃ  vÃ i dÆ°a háº¥u', 'tra-vai-dua-hau.jpg', '50000', 'HÃ  Ná»™i', 'CÃ³ vá»‹ ngot,dÃ¹ng Ä‘á»ƒ giáº£i khÃ¡t vÃ o mÃ¹a hÃ¨', 'Váº£i vÃ  dÆ°a háº¥u lÃ  chá»§ yáº¿u', '2022-01-04'),
('NU005', 'Soda chanh - dÆ°a chuá»™t', 'soda-chanh-dua-chuot.jpg', '30000', 'HÃ  Ná»™i', ' lÃ  mÃ³n giáº£i khÃ¡t tuyá»‡t vá»i cho nhá»¯ng ngÃ y hÃ¨ nÃ³ng...', 'Chanh tÆ°Æ¡i: 1 quáº£, rá»­a sáº¡ch cáº¯t thÃ nh nhá»¯ng lÃ¡t má»ng NÆ°á»›c chanh tÆ°Æ¡i: 100ml DÆ°a chuá»™t cáº¯t lÃ¡t 4 â€“ 5 nhÃ¡nh lÃ¡ báº¡c hÃ  200 gr Ä‘Æ°á»ng tráº¯ng 200 ml nÆ°á»›c soda', '2022-01-05'),
('NU006', ' Sinh tá»‘ dÃ¢u tÃ¢y cá»‘t dá»«a', 'sinh-to-dau-tay-cot-dua.jpg', '30000', 'HÃ  Ná»™i', 'vá»«a giáº£i khÃ¡t, vá»«a cÃ³ lá»£i cho sá»©c khá»e má»›i lÃ  xu h...', 'DÃ¢u tÃ¢y: 5 quáº£ NÆ°á»›c cá»‘t dá»«a: 30 ml NÆ°á»›c dá»«a: 150 ml Máº­t ong: 1 thÃ¬a cafe', '2022-01-05'),
('TDU001', 'TrÃ  xanh chanh leo ', 'ar.jfif', '50000', 'HÃ  Ná»™i', 'Ngá»t vÃ  thÆ¡m', 'TrÃ ,chanh leo,..', '2021-12-31'),
('TDU002', 'Cookie Cream ', 'at.jpg', '50000', 'HÃ  Ná»™i', 'Khi thÆ°á»Ÿng thá»©c báº¡n sáº½ cáº£m nháº­n Ä‘Æ°á»£c rÃµ hÆ°Æ¡ng vá»‹ b...', 'Ã¡nh cookie, sá»¯a Ä‘áº·c cÃ¹ng vá»›i kem whipping cream á»Ÿ ...', '2022-01-05'),
('TDU003', 'TrÃ  phÃ´ mai kem sá»¯a ', 'ad.jpg', '50000', 'HÃ  Ná»™i', 'mÃ³n Ä‘á»“ uá»‘ng vá»«a bÃ©o ngáº­y, chua ngá»t Ä‘á»§ cáº£ mÃ  váº«n c...', 'TrÃ ,phÃ´ mai,..', '2022-01-05'),
('TDU004', 'TrÃ  hoa quáº£', 'ax.jpg', '40000', 'HÃ  Ná»™i', 'trÃ  Ã´ long dÆ°a vÃ ng nam má»¹, trÃ  thanh long bÆ°á»Ÿi Ä‘Ã oâ€¦ ', 'trÃ ', '2022-01-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindathang`
--

CREATE TABLE `thongtindathang` (
  `MaDonHang` int(20) NOT NULL,
  `NguoiNhan` varchar(30) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `TongTien` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtindathang`
--

INSERT INTO `thongtindathang` (`MaDonHang`, `NguoiNhan`, `sdt`, `DiaChi`, `TongTien`) VALUES
(41, 'Pháº¡m Há»¯u Truyá»n', '03669675534', 'VÄƒn LÃ¢m-HÆ°ng YÃªn', '20000'),
(42, 'DÆ°Æ¡ng VÄƒn TuÃ¢n', '0366974520', 'VÄƒn LÃ¢m-HÆ°ng YÃªn', '160000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtingiohang`
--

CREATE TABLE `thongtingiohang` (
  `id` int(11) NOT NULL,
  `TaiKhoan` varchar(20) NOT NULL,
  `TenSP` varchar(30) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `DonGia` varchar(30) NOT NULL,
  `SoLuong` varchar(30) NOT NULL,
  `ThanhTien` varchar(50) NOT NULL,
  `MaDonHang` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtingiohang`
--

INSERT INTO `thongtingiohang` (`id`, `TaiKhoan`, `TenSP`, `Anh`, `DonGia`, `SoLuong`, `ThanhTien`, `MaDonHang`) VALUES
(13, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '4', '48000', '29'),
(14, 'tkdvt372', 'Chuối sấy', '241800816_565669644777155_5336036217028489561_n.jpg', '75000', '3', '225000', '29'),
(15, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '2', '24000', '30'),
(16, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '4', '48000', '31'),
(17, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '9', '108000', '32'),
(18, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '11', '132000', '33'),
(19, 'tkdvt372', 'Bánh tôm', '244387124_3167807636771568_5538830785337815598_n.jpg', '12000', '13', '156000', '34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbdanhgia`
--
ALTER TABLE `tbdanhgia`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `danhgia` (`danhgia`);

--
-- Chỉ mục cho bảng `tbtaikhoan`
--
ALTER TABLE `tbtaikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbthemsp`
--
ALTER TABLE `tbthemsp`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `thongtindathang`
--
ALTER TABLE `thongtindathang`
  ADD PRIMARY KEY (`MaDonHang`);

--
-- Chỉ mục cho bảng `thongtingiohang`
--
ALTER TABLE `thongtingiohang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbdanhgia`
--
ALTER TABLE `tbdanhgia`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tbtaikhoan`
--
ALTER TABLE `tbtaikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `thongtindathang`
--
ALTER TABLE `thongtindathang`
  MODIFY `MaDonHang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `thongtingiohang`
--
ALTER TABLE `thongtingiohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
