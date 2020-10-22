-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 02:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbantranh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', 1, '$2y$10$wmb9dwUzoHUUs3etJekHe.1EXe5Imwwgbd9ZDB6okrWFWR0zV3uze', '4mr1PLXXSUA5bvOMVCDjNlPURs52ObeDfFiGfW0S8FxEuk51I8PftdHd9omh', '2018-06-14 13:47:45', '2018-06-14 13:47:45'),
(3, 'Nhanvien1', 'nhanvien1@gmail.com', 2, '$2y$10$CkVaKkA/XM8r68aknhwqq.BWIVNiEfOgcIKxXtS3Ez6OQdoPXw1x2', '6KjTmG5chIZmaJnW4GvNd8BsVbqMD3ZJPzbMxL2ltObJf3iV4ujQIdh6tpEn', '2018-06-15 00:58:28', '2018-06-15 00:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `status`) VALUES
(7, 'Banner 1', 'banner1.jpg', 1),
(8, 'Banner 2', 'banner2.jpg', 1),
(9, 'Banner 3', 'banner3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`, `status`) VALUES
(1, 'Tranh phong cảnh', 1, 1),
(2, 'Tranh sơn dầu', 1, 1),
(3, 'Tranh tĩnh vật', 1, 1),
(4, 'Tranh truyền thần', 1, 1),
(5, 'Phụ kiện', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_06_14_183010_create_users_table', 1),
(3, '2018_06_14_183124_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `description`, `content`, `status`, `created_at`) VALUES
(1, '9x điển trai vẽ Chi Pu đẹp sắc sảo', 'tintuc1.jpg', 'Tuy mới chỉ học vẽ vài tháng nhưng với năng khiếu có sẵn cùng niềm đam mê vẽ đã giúp cậu có một bộ sưu tập những bức tranh vẽ thần tượng do chính tay mình vẽ', '<p>Tuy mới chỉ học vẽ v&agrave;i th&aacute;ng nhưng với năng khiếu c&oacute; sẵn c&ugrave;ng niềm đam m&ecirc; vẽ đ&atilde; gi&uacute;p cậu c&oacute; một bộ sưu tập những bức tranh vẽ thần tượng do ch&iacute;nh tay m&igrave;nh vẽ. C&aacute;c bức tranh đều rất sống động giống hệt ảnh chụp ngo&agrave;i đời khiến nhiều người đ&atilde; d&agrave;nh những lời khen ngợi cho Kiệt.</p>\r\n\r\n<p>Ch&agrave;ng trai n&agrave;y dự định sắp tới sẽ &ocirc;n luyện để thi v&agrave;o Đại học Kiến tr&uacute;c v&agrave; trở th&agrave;nh một nh&agrave; thiết kế thời trang giỏi trong tương lai.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 1, '2018-06-21 00:00:00'),
(2, '6 LÝ DO VÌ SAO BẠN NÊN CHỌN TRANH ĐÁ QUÝ TREO NHÀ Ở VÀ VĂN PHÒNG CÔNG TY', 'tintuc3.jpg', 'Tranh đ&aacute; qu&yacute;</strong>&nbsp;l&agrave; d&ograve;ng tranh mới ph&aacute;t triển của Việt Nam ', '<p style=\"text-align:center\"><strong>Tranh đ&aacute; qu&yacute;</strong>&nbsp;l&agrave; d&ograve;ng tranh mới ph&aacute;t triển của Việt Nam v&agrave;o đầu những năm 90 của thế kỷ trước. Tuy l&agrave; d&ograve;ng tranh mới nhưng hiện&nbsp;nay ph&aacute;t triển rất mạnh mẽ v&agrave; được nhiều người m&ecirc; tranh biết đến.&nbsp;<a href=\"http://tanphukhanh.com/\" target=\"_blank\" title=\"tranh đá quý\">Tranh đ&aacute; qu&yacute;&nbsp;</a>được chế t&aacute;c c&ocirc;ng phu, mang đậm gi&aacute; trị nh&acirc;n văn v&agrave; nhiều &yacute; nghĩa s&acirc;u sắc. Đặc biệt tranh đ&aacute; qu&yacute; l&agrave; một d&ograve;ng tranh rất bền với thời gian. Do vậy việc lựa chọn d&ograve;ng n&agrave;y để trang tr&iacute; cho kh&ocirc;ng gian văn ph&ograve;ng c&ocirc;ng ty, tập đo&agrave;n sẽ th&ecirc;m phần phong c&aacute;ch v&agrave; mới lạ.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://tanphukhanh.com/4-cach-huu-hieu-de-thu-hut-tai-loc-may-man-va-binh-an-vao-nha-voi-tranh-da-quy-bid72.html\" target=\"_self\" title=\"thu hut tai loc vao nha voi tranh da quy\"><strong>&bull; 4 C&aacute;ch Hữu Hiệu Để Thu H&uacute;t T&agrave;i Lộc May Mắn V&agrave; B&igrave;nh An V&agrave;o Nh&agrave; Với Tranh Đ&aacute; Qu&yacute;</strong></a></p>\r\n\r\n<p style=\"text-align:center\">Nguy&ecirc;n liệu l&agrave;m n&ecirc;n tranh đ&aacute; qu&yacute; l&agrave; những chất liệu độc đ&aacute;o l&agrave; c&aacute;c loại đ&aacute; qu&yacute; v&agrave; b&aacute;n qu&yacute; c&oacute; trong tự nhi&ecirc;n . Ch&iacute;nh v&igrave; thế m&agrave; tranh đ&aacute; qu&yacute; l&agrave; loại tranh c&oacute; t&iacute;nh nghệ thuật v&agrave; phong thủy rất đặc biệt! V&igrave; lẽ đ&oacute; tranh sẽ đem lại cho kh&ocirc;ng gian văn ph&ograve;ng c&ocirc;ng ty của bạn c&oacute; những n&eacute;t ri&ecirc;ng, gi&uacute;p phần mang đến cho kh&aacute;ch h&agrave;ng, đối t&aacute;c, nh&agrave; đầu tư, bạn b&egrave;, bằng hữu c&oacute; cảm gi&aacute;c của sự gần gũi, th&acirc;n thiện, h&agrave;i h&ograve;a nhưng kh&ocirc;ng k&eacute;m phần độc đ&aacute;o, ấn tượng. Thực sự những điều n&agrave;y sẽ rất tốt cho c&ocirc;ng việc l&agrave;m ăn hay c&aacute;c mối quan hệ trong đời thường của bạn.</p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Những lợi &iacute;ch tuyệt vời m&agrave; bạn c&oacute; được khi chọn tranh đ&aacute; qu&yacute; treo trong văn ph&ograve;ng c&ocirc;ng ty</strong></h2>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;</strong>&nbsp;Tranh đ&aacute; qu&yacute; l&agrave; d&ograve;ng tranh phong thủy mang đến sự thịnh vượng, may mắn, t&agrave;i lộc trong kinh doanh.</p>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;&nbsp;</strong>Thể hiện được đẳng cấp, sang trọng v&agrave; sự tinh tế cho văn ph&ograve;ng c&ocirc;ng ty .</p>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;</strong>&nbsp;Tranh đ&aacute; qu&yacute; l&agrave;m tăng gi&aacute; trị thẩm mỹ của kh&ocirc;ng gian của c&ocirc;ng ty.</p>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;</strong>&nbsp;L&agrave; một c&ocirc;ng cụ tuyệt vời để quảng b&aacute; h&igrave;nh ảnh, thương hiệu cho c&ocirc;ng ty v&agrave; h&igrave;nh ảnh của bạn</p>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;</strong>&nbsp;Tranh được l&agrave;m ho&agrave;n to&agrave;n thủ c&ocirc;ng tr&ecirc;n chất liệu đ&aacute; qu&yacute;, b&aacute;n qu&yacute; tự nhi&ecirc;n.</p>\r\n\r\n<p style=\"text-align:center\"><strong>&radic;</strong>&nbsp;Tranh đ&aacute; qu&yacute; thắm đẫm t&igrave;nh người v&agrave; mang nhiều &yacute; nghĩa nh&acirc;n văn cao đẹp</p>', 1, '2018-05-30 00:00:00'),
(3, 'Ý nghĩa của tranh đá quý thuận buồm xuối gió', 'tintuc2.jpg', '', '<p style=\"text-align:center\">-&nbsp;<strong>Tranh đ&aacute; qu&yacute; thuận buồm xu&ocirc;i gi&oacute;</strong>&nbsp;l&agrave; tranh thuộc nh&oacute;m d&ograve;ng&nbsp;<strong>tranh sơn thủy hữu t&igrave;nh</strong>&nbsp;hay c&ograve;n gọi l&agrave;&nbsp;<strong>tranh thủy mặc</strong>.</p>\r\n\r\n<p style=\"text-align:center\">-&nbsp; Để hiểu được &yacute; nghĩa của n&oacute; ch&uacute;ng ta sẽ ph&acirc;n t&iacute;ch&nbsp;<strong>bức tranh đ&aacute; qu&yacute; thuận buồm xu&ocirc;i</strong>&nbsp;gi&oacute; dưới đ&acirc;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://tanphukhanh.com/files/assets/thuanbuomxuoigio.jpg\" style=\"height:299px; width:477px\" /></p>\r\n\r\n<p style=\"text-align:center\">- Trong&nbsp;<a href=\"http://tanphukhanh.com/tranh-thuan-buom-xuoi-gio-d30.html\" target=\"_blank\" title=\"Tranh đá quý thuận buồm xuôi gió\"><strong>bức tranh đ&aacute; qu&yacute; thuận buồm xu&ocirc;i gi&oacute;</strong></a>&nbsp;ở tr&ecirc;n ch&uacute;ng thấy c&oacute; ba yếu tố ch&iacute;nh để tạo n&ecirc;n đ&oacute; l&agrave;.</p>\r\n\r\n<p style=\"text-align:center\">-&nbsp;<strong>Nước (&nbsp; thủy )</strong>: C&oacute; &yacute; nghĩa mang đến nhiều t&agrave;i lộc.</p>\r\n\r\n<p style=\"text-align:center\">-&nbsp;<strong>Thuyền:</strong>&nbsp;L&agrave; phương tiện giao th&ocirc;ng đường thủy , c&oacute; &yacute; nghĩa mang sự hanh th&ocirc;ng thuận lợi trong c&ocirc;ng danh v&agrave; sự nghiệp.</p>\r\n\r\n<p style=\"text-align:center\">-&nbsp;<strong>Mặt trời:</strong>&nbsp;Với &aacute;nh s&aacute;ng vĩnh cửu của m&igrave;nh n&oacute; c&oacute; nghĩa l&agrave; một hoa ti&ecirc;u khi thuyền ra khơi v&agrave; mang lại may mắn cho gia chủ.<br />\r\n<br />\r\n&nbsp;&nbsp;<strong>Với</strong>&nbsp;c&aacute;c ph&acirc;n t&iacute;ch chi tiết như tr&ecirc;n ch&uacute;ng ta c&oacute; thể kết luận rằng.&nbsp;<strong>Bức tranh đ&aacute; qu&yacute; Thuận buồm xu&ocirc;i gi&oacute;</strong>&nbsp;l&agrave; một&nbsp;<strong>bức tranh phong thủy</strong>&nbsp;đem lại&nbsp;<em><strong>&ldquo; May mắn &ndash; t&agrave;i lộc &ndash; Sức khỏe &ndash; Hạnh ph&uacute;c &ldquo;</strong></em>&nbsp;cho người sở hữu n&oacute;.</p>', 1, '2018-06-05 00:00:00'),
(4, 'Giới thiệu triển lãm ‘Bóng và hình’ của họa sĩ Lê Thiết Cương tại VCCA', 'tintuc4.jpg', 'Ngày 27/4, triển lãm “Bóng và hình” gồm 22 tác phẩm nổi bật của họa sĩ Lê Thiết Cương sẽ được tổ chức tại Trung tâm Nghệ thuật đương đại Vincom (VCCA).', '<p>Triển l&atilde;m giới thiệu 22 bức tranh sơn dầu tr&ecirc;n toan. Đ&acirc;y l&agrave; những t&aacute;c phẩm mới nhất của họa sĩ L&ecirc; Thiết Cương trong năm 2016 v&agrave; 2017. Từ những h&igrave;nh ảnh đời thường quen thuộc như phố x&aacute;, nh&agrave; cửa, c&acirc;y cối, d&ograve;ng s&ocirc;ng&hellip;, họa sĩ L&ecirc; Thiết Cương đ&atilde; thổi hồn, biến h&oacute;a th&agrave;nh diện mạo mới đầy suy tưởng.</p>\r\n\r\n<p>Triển l&atilde;m &ldquo;B&oacute;ng v&agrave; h&igrave;nh&rdquo; được tổ chức tại VCCA lần n&agrave;y l&agrave; dịp để kh&aacute;n giả chi&ecirc;m ngưỡng th&agrave;nh quả trong 30 năm t&iacute;ch lũy của họa sĩ, khi &ocirc;ng tiếp cận c&aacute;ch thức tối giản kh&aacute;c: &ldquo;thả tr&ocirc;i&rdquo;, kh&ocirc;ng c&ograve;n g&ograve; đề t&agrave;i v&agrave;o những n&eacute;t tạo h&igrave;nh cụ thể. H&igrave;nh ảnh kh&ocirc;ng nằm trong những đường viền n&eacute;t m&agrave; tr&agrave;n rộng, tạo cảm gi&aacute;c mở, kh&ocirc;ng c&oacute; giới hạn.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Gioi thieu trien lam ‘Bong va hinh’ cua hoa si Le Thiet Cuong tai VCCA hinh anh 1\" src=\"https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_04_26/Bien.jpg\" style=\"height:603px; width:1000px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Triển l&atilde;m trưng b&agrave;y 22 t&aacute;c phẩm mới nhất của họa sĩ L&ecirc; Thiết Cương.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Loạt t&aacute;c phẩm mới được giới thiệu tại triển l&atilde;m &ldquo;B&oacute;ng v&agrave; h&igrave;nh&rdquo; l&agrave; bước đi mới nhưng vẫn thấm đẫm c&aacute; t&iacute;nh hội hoạ L&ecirc; Thiết Cương. 22 bức tranh lần n&agrave;y được h&ograve;a sắc trầm lắng hơn, suy ngẫm phản tư bao tr&ugrave;m kh&ocirc;ng gian.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Gioi thieu trien lam ‘Bong va hinh’ cua hoa si Le Thiet Cuong tai VCCA hinh anh 2\" src=\"https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_04_26/Nha_tho_1.jpg\" style=\"height:820px; width:650px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>To&agrave;n bộ t&aacute;c phẩm thể hiện tinh thần &iacute;t h&igrave;nh, &iacute;t m&agrave;u, nhiều khoảng trống.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Quan niệm hội họa tối giản của L&ecirc; Thiết Cương ảnh hưởng từ mỹ học thiền của Phật gi&aacute;o. To&agrave;n bộ t&aacute;c phẩm đều thể hiện tinh thần &iacute;t h&igrave;nh, &iacute;t m&agrave;u, nhiều khoảng trống lớn, y&ecirc;n tĩnh v&agrave; &ldquo;v&ocirc; ng&ocirc;n&rdquo;. C&acirc;u chuyện v&agrave; cảm x&uacute;c được gửi gắm qua sự tĩnh mịch, y&ecirc;n lặng trong tranh. Qua đ&oacute;, người xem c&oacute; thể li&ecirc;n tưởng, suy ngẫm về c&acirc;u chuyện của m&igrave;nh.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Gioi thieu trien lam ‘Bong va hinh’ cua hoa si Le Thiet Cuong tai VCCA hinh anh 3\" src=\"https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_04_26/Cau_1.jpg\" style=\"height:609px; width:898px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Quan niệm hội họa của t&aacute;c giả ảnh hưởng từ mỹ học thiền của phật gi&aacute;o.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&ldquo;Đề t&agrave;i chỉ l&agrave; nguy&ecirc;n liệu, nhưng biết đ&acirc;u c&aacute;i quen thuộc ấy c&oacute; thể sẽ lạ hơn qua &lsquo;B&oacute;ng v&agrave; h&igrave;nh&rsquo;, sẽ gợi đến một điều g&igrave; kh&aacute;c ngo&agrave;i kh&aacute;i niệm đ&oacute;&rdquo;, họa sĩ L&ecirc; Thiết Cương chia sẻ.</p>\r\n\r\n<p>Triển l&atilde;m mở cửa tự do từ 27/4 đến 20/5 tại VCCA, B1-R3 Vincom Royal City, 72 Nguyễn Tr&atilde;i, Thanh Xu&acirc;n, H&agrave; Nội. &ldquo;B&oacute;ng v&agrave; h&igrave;nh&rdquo; diễn ra song song c&ugrave;ng triển l&atilde;m &ldquo;B&uacute;t Lực&rdquo; của họa sĩ Phạm Lực (từ 20/4 đến 20/5).</p>\r\n\r\n<p>B&ecirc;n cạnh c&aacute;c hoạt động &acirc;m nhạc, ng&agrave;y 5/5, VCCA tổ chức tọa đ&agrave;m nghệ thuật với chủ đề &ldquo;Nội dung v&agrave; h&igrave;nh thức&rdquo; c&oacute; sự hiện diện của chủ nh&acirc;n triển l&atilde;m v&agrave; nhiều họa sĩ, chuy&ecirc;n gia, nh&agrave; ph&ecirc; b&igrave;nh t&ecirc;n tuổi.</p>', 1, '2018-06-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_note` text NOT NULL,
  `amount` int(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_note`, `amount`, `status`, `username`, `address`, `email`, `phone`, `created_at`, `user_id`) VALUES
(11, 'Hàng dễ vỡ, cẩn thận', 6950000, 2, 'Thắng', '22 - Khu tập thể xây dựng số 2', 'thang95.tk@gmail.com', 981929295, '2018-06-15 18:14:18', 1),
(13, 'Cẩn thận', 4300000, 2, 'Nguyễn Thị Hoa', '22 - Khu tập thể xây dựng số 2', 'nguyenthihoa@gmail.com', 969571212, '2018-06-15 18:58:47', 1),
(15, 'HLKJHKHK', 3750000, 1, 'Nguyễn Thị Hoa', '22 - Khu tập thể xây dựng số 2, Cổ Nhuế - Từ Liêm - Hà Nội', 'nguyenthihoa@gmail.com', 969161212, '2018-06-28 14:59:50', 1),
(16, 'HLKJHKHK', 3750000, 1, 'Nguyễn Thị Hoa', '22 - Khu tập thể xây dựng số 2, Cổ Nhuế - Từ Liêm - Hà Nội', 'nguyenthihoa@gmail.com', 969161212, '2018-06-28 15:00:17', 1),
(17, 'đawa', 11100000, 1, 'Thắng', '22 - Khu tập thể xây dựng số 2, Cổ Nhuế - Từ Liêm - Hà Nội', 'thang95.tk@gmail.com', 981929295, '2018-06-28 15:53:48', 1),
(18, 'Cẩn thận', 5240000, 1, 'Thắng', '22 - Khu tập thể xây dựng số 2, Cổ Nhuế - Từ Liêm - Hà Nội', 'thang95.tk@gmail.com', 981929295, '2018-06-28 15:59:54', 2),
(19, 'Nhanh', 1400000, 1, 'Chu Đức Thắng', 'Phố Viên', 'thang95.tk@gmail.com', 981929295, '2018-07-10 08:14:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(21, 11, 16, 1, 6950000),
(22, 11, 2, 3, 6950000),
(23, 13, 13, 2, 4300000),
(24, 13, 10, 1, 4300000),
(25, 16, 1, 3, 150000),
(26, 16, 22, 1, 150000),
(27, 17, 11, 5, 1600000),
(28, 17, 3, 2, 2300000),
(29, 18, 6, 2, 2800000),
(30, 18, 24, 2, 150000),
(31, 19, 4, 1, 1400000);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `price_sale` float NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `description`, `price`, `price_sale`, `type`, `status`, `created_at`, `category_id`) VALUES
(1, 'Tranh PC-101', 'pc1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1500000, 1200000, 2, 1, '2018-06-05 00:00:00', 1),
(2, 'Tranh PC-102', 'pc2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1800000, 0, 3, 1, '2018-06-05 00:00:00', 1),
(3, 'Tranh PC-201', 'pc3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2300000, 0, 1, 1, '2018-06-05 00:00:00', 1),
(4, 'Tranh PC-203', 'pc4.jpg', '<p>Tranh phong cảnh gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n sinh động, tho&aacute;ng đ&atilde;ng cho ta cảm thấy như được &ldquo;sống&rdquo; trong ch&iacute;nh khung cảnh thi&ecirc;n nhi&ecirc;n đ&oacute;.&nbsp;với c&aacute;c loại&nbsp;tranh d&aacute;n tường phong cảnh&nbsp;thi&ecirc;n nhi&ecirc;n 3D kh&ocirc;ng giới hạn về k&iacute;ch thước v&agrave; m&agrave;u sắc th&igrave; bạn c&oacute; thể tha hồ đưa ra những s&aacute;ng tạo độc đ&aacute;o ngay trong ph&ograve;ng ngủ hay&nbsp;ph&ograve;ng kh&aacute;ch,&nbsp;văn ph&ograve;ng cty.</p>', 1400000, 0, 3, 1, '2018-06-05 00:00:00', 1),
(5, 'Tranh PC-205', 'pc5.jpg', '<p><a href=\"http://tranhgiakhanh.vn/index.php?route=product/category&amp;path=63\" target=\"_blank\">Tranh phong cảnh</a>&nbsp;gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n sinh động, tho&aacute;ng đ&atilde;ng cho ta cảm thấy như được &ldquo;sống&rdquo; trong ch&iacute;nh khung cảnh thi&ecirc;n nhi&ecirc;n đ&oacute;.&nbsp;với c&aacute;c loại&nbsp;tranh d&aacute;n tường phong cảnh&nbsp;thi&ecirc;n nhi&ecirc;n 3D kh&ocirc;ng giới hạn về k&iacute;ch thước v&agrave; m&agrave;u sắc th&igrave; bạn c&oacute; thể tha hồ đưa ra những s&aacute;ng tạo độc đ&aacute;o ngay trong ph&ograve;ng ngủ hay&nbsp;ph&ograve;ng kh&aacute;ch,&nbsp;văn ph&ograve;ng cty.</p>', 2000000, 0, 1, 1, '2018-06-05 00:00:00', 1),
(6, 'Tranh PC-303', 'pc6.jpg', '<p><a href=\"http://tranhgiakhanh.vn/index.php?route=product/category&amp;path=63\" target=\"_blank\">Tranh phong cảnh</a>&nbsp;gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n sinh động, tho&aacute;ng đ&atilde;ng cho ta cảm thấy như được &ldquo;sống&rdquo; trong ch&iacute;nh khung cảnh thi&ecirc;n nhi&ecirc;n đ&oacute;.&nbsp;với c&aacute;c loại&nbsp;tranh d&aacute;n tường phong cảnh&nbsp;thi&ecirc;n nhi&ecirc;n 3D kh&ocirc;ng giới hạn về k&iacute;ch thước v&agrave; m&agrave;u sắc th&igrave; bạn c&oacute; thể tha hồ đưa ra những s&aacute;ng tạo độc đ&aacute;o ngay trong ph&ograve;ng ngủ hay&nbsp;ph&ograve;ng kh&aacute;ch,&nbsp;văn ph&ograve;ng cty.</p>', 2800000, 2500000, 2, 1, '2018-06-05 00:00:00', 1),
(7, 'Tranh PC-308', 'pc7.jpg', '<p><a href=\"http://tranhgiakhanh.vn/index.php?route=product/category&amp;path=63\" target=\"_blank\">Tranh phong cảnh</a>&nbsp;gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n sinh động, tho&aacute;ng đ&atilde;ng cho ta cảm thấy như được &ldquo;sống&rdquo; trong ch&iacute;nh khung cảnh thi&ecirc;n nhi&ecirc;n đ&oacute;.&nbsp;với c&aacute;c loại&nbsp;tranh d&aacute;n tường phong cảnh&nbsp;thi&ecirc;n nhi&ecirc;n 3D kh&ocirc;ng giới hạn về k&iacute;ch thước v&agrave; m&agrave;u sắc th&igrave; bạn c&oacute; thể tha hồ đưa ra những s&aacute;ng tạo độc đ&aacute;o ngay trong ph&ograve;ng ngủ hay&nbsp;ph&ograve;ng kh&aacute;ch,&nbsp;văn ph&ograve;ng cty.</p>', 1200000, 0, 3, 1, '2018-06-05 00:00:00', 1),
(8, 'Tranh SD-101', 'sondau1.jpg', '<p><strong>Tranh sơn dầu khổ lớn con đường l&agrave;ng</strong>&nbsp;với h&igrave;nh ảnh những ng&ocirc;i nh&agrave; nhỏ n&eacute;p m&igrave;nh b&ecirc;n những h&agrave;ng c&acirc;y xanh v&agrave; một d&ograve;ng s&ocirc;ng nhỏ chảy qua khiến cho ta cảm nhận được sự y&ecirc;n b&igrave;nh v&agrave; thơ mộng. Những ng&ocirc;i nh&agrave; nhỏ ngập tr&agrave;n hạnh ph&uacute;c cũng l&agrave; niềm mơ ước của rất nhiều người.</p>', 2000000, 0, 1, 1, '2018-06-05 00:00:00', 2),
(9, 'Tranh TT-102', 'tt1.jpg', '<p>Tranh truyền thần&nbsp;l&agrave; một thể loại hội họa m&agrave; người họa sĩ truyền lại c&aacute;i &ldquo;thần&rdquo; của người được vẽ, tức l&agrave; truyền đạt được cảm x&uacute;c, thần th&aacute;i th&ocirc;ng qua t&aacute;c phẩm.</p>', 1500000, 0, 3, 1, '2018-06-05 00:00:00', 4),
(10, 'Tranh SD-102', 'sondau2.jpg', '<p>Bức tranh sơn dầu phong cảnh rừng&nbsp;hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những c&aacute;i c&acirc;y&nbsp;kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh nhau tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 2300000, 0, 3, 1, '2018-06-05 00:00:00', 2),
(11, 'Tranh TV-401', 'tinhvat2.jpg', '<p>Bức tranh tinhxvaatj chiếc b&igrave;nh&nbsp;hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1600000, 1300000, 2, 1, '2018-06-05 00:00:00', 3),
(12, 'Tranh TV-402', 'tinhvat1.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1800000, 0, 3, 1, '2018-06-05 00:00:00', 3),
(13, 'Tranh SD-105', 'sondau3.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1600000, 1000000, 2, 1, '2018-03-07 00:00:00', 2),
(14, 'Tranh SD-203', 'sondau4.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 2500000, 2300000, 2, 1, '2018-03-14 00:00:00', 2),
(15, 'Tranh SD-206', 'sondau5.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1600000, 0, 1, 1, '2018-03-14 00:00:00', 2),
(16, 'Tranh TT-103', 'tt2.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1550000, 0, 1, 1, '2018-03-14 00:00:00', 4),
(17, 'Tranh TT-109', 'tt3.jpg', '<p>Bức tranh sơn dầu phong cảnh ng&ocirc;i nh&agrave; hạnh ph&uacute;c hiện l&ecirc;n với h&igrave;nh ảnh đơn giản nhưng lại chứa đầy cảm x&uacute;c. Những ng&ocirc;i nh&agrave; nhỏ kh&ocirc;ng qu&aacute; cầu kỳ nằm n&eacute;p m&igrave;nh b&ecirc;n cạnh những vườn c&acirc;y xanh mướt tạo n&ecirc;n vẻ đẹp n&ecirc;n thơ v&agrave; trữ t&igrave;nh.</p>', 1300000, 0, 3, 1, '2018-03-21 00:00:00', 4),
(18, 'Khung tranh - 101', 'k1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>', 150000, 0, 3, 1, '2018-06-07 00:00:00', 5),
(19, 'Khung tranh - 102', 'k2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>', 150000, 0, 3, 1, '2018-04-11 00:00:00', 5),
(20, 'Khung tranh - 103', 'k3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>', 160000, 0, 3, 1, '2018-06-07 00:00:00', 5),
(21, 'Móc treo - 201', 'm.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>', 130000, 0, 3, 1, '2018-05-30 00:00:00', 5),
(22, 'Móc treo - 202', 'm1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>', 150000, 0, 1, 1, '2018-06-07 00:00:00', 5),
(23, 'Móc treo - 203', 'm3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</p>', 160000, 130000, 2, 1, '2018-06-07 00:00:00', 5),
(24, 'Khung tranh - 300', 'k4.jpg', '<p>Chất liệu l&agrave;m khung: Composite sơn ph&ugrave; PU 2 lớp &ndash; Chất liệu chuy&ecirc;n dụng l&agrave;m khung tranh.</p>', 150000, 120000, 2, 1, '2018-06-07 00:00:00', 5),
(25, 'Khung tranh - 303', 'k5.jpg', '<p>Chất liệu l&agrave;m khung: Composite sơn ph&ugrave; PU 2 lớp &ndash; Chất liệu chuy&ecirc;n dụng l&agrave;m khung tranh.</p>', 180000, 150000, 2, 1, '2018-06-15 00:00:00', 5),
(26, 'Khung tranh - 108', 'k6.jpg', '<p>Chất liệu l&agrave;m khung: Composite sơn ph&ugrave; PU 2 lớp &ndash; Chất liệu chuy&ecirc;n dụng l&agrave;m khung tranh.</p>', 150000, 0, 1, 1, '2018-06-07 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `email`, `phone`, `address`, `password`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoa', 'Nguyễn Thị Hoa', 'nguyenthihoa@gmail.com', '0969161212', '22 - Khu tập thể xây dựng số 2', '$2y$10$sidzESpWQzeIT2SfCGqs7uKYZqwleOEZWavuqsI2BFXl7oAJ1eGVq', 2, 'pkM7TscbHzisSeyWs1N6Tdjg80h4QhN0uOmIC1C7AkqBeXxAbs49IzlT5BmM', '2018-06-14 11:55:58', '2018-06-14 11:55:58'),
(2, 'Thắng', 'Chu Đức Thắng', 'thang95.tk@gmail.com', '0981929295', '22 - Khu tập thể xây dựng số 2, Cổ Nhuế - Từ Liêm - Hà Nội', '$2y$10$fzm2j8o1CvOEmEA42GMngutsr15z9IR5e28UDfCBG5PdM6g7Fj/YO', 1, 'awjeKtiZum82P4cyK5eQPQ2f0EIUKha3RkLSQsc3ClbmMs0A5RrxAefWXZpK', '2018-06-28 08:58:48', '2018-06-28 08:58:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_users` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order_detail_product` (`product_id`),
  ADD KEY `FK_order_detail_orders` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
