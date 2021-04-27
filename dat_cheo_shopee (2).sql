-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2021 lúc 07:34 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dat_cheo_shopee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `number_order` int(11) DEFAULT 0 COMMENT 'số lượng đơn cần đặt\n',
  `coin_pay` int(11) DEFAULT 5 COMMENT 'số coin phải trả cho mỗi đơn',
  `status` tinyint(1) DEFAULT NULL COMMENT '0 : chưa duyệt\n1: đã duyệt\n2: đã đủ đơn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `requirement_payment` tinyint(4) DEFAULT 1 COMMENT '1: cod\n2: ví shopee\n3: airpay\n4: sao cũng được',
  `is_apply_freeship` tinyint(4) DEFAULT 0 COMMENT '1: ko; 2: có; 3: có càng tốt',
  `title` varchar(45) DEFAULT NULL,
  `number_order_remaining` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `number_order`, `coin_pay`, `status`, `created_at`, `updated_at`, `image`, `requirement_payment`, `is_apply_freeship`, `title`, `number_order_remaining`) VALUES
(1, 1, 'aaaaaaaa', 20, 5, 1, NULL, NULL, 'product/thumbnail/64436903_465244570925684_796982291811803509_n.jpg', 1, 1, 'Áo 2 dây nữ', 0),
(2, 1, 'vvvv', 20, 5, 1, NULL, NULL, 'product/thumbnail/66162838_1793410374138849_3248090098191977670_n.jpg', 1, 0, 'Áo sơ mi', 0),
(3, 2, 'admin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin postadmin post', 10, 5, 1, NULL, NULL, 'product/thumbnail/84708938_2629661200601809_8325951462307790848_o.jpg', 1, 1, 'Quaan bo', 0),
(4, 2, 'admin postadmin postadmin postadmin postadmin postadmin post', 23, 5, 1, NULL, NULL, 'product/thumbnail/84708938_2629661200601809_8325951462307790848_o.jpg', 1, 1, 'xx', 0),
(8, 2, 'aslf', 12, 5, 1, NULL, NULL, 'product/thumbnail/1619322471.png', 1, 1, 'ad;sf', 0),
(11, 2, 'sadnfsd', 20, 23, 1, NULL, NULL, 'product/thumbnail/1619338941.PNG', 1, 1, 'jjjj', 0),
(12, 2, 'asfmasd', 23, 232, 1, '2021-04-25 01:25:34', '2021-04-25 01:25:34', 'product/thumbnail/1619339134.jpg', 1, 1, 'alfm', 0),
(13, 2, 'hhhhhhhhhhhh', 10, 5, 1, '2021-04-25 02:02:53', '2021-04-25 02:02:53', 'product/thumbnail/1619341373.jpg', 1, 1, 'admin test', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_product_links`
--

CREATE TABLE `post_product_links` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `number` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post_product_links`
--

INSERT INTO `post_product_links` (`id`, `post_id`, `url`, `number`, `created_at`, `updated_at`) VALUES
(1, 2, 'https://test.com', 2, NULL, NULL),
(2, 2, 'https://test.com.2', 4, NULL, NULL),
(3, 11, 'http://test.com.vn', 12, NULL, NULL),
(4, 11, 'http:a,nfaslf', 12, NULL, NULL),
(5, 12, 'asfm', 23, '2021-04-25 01:25:34', '2021-04-25 01:25:34'),
(6, 13, 'http://a.com', 20, '2021-04-25 02:02:53', '2021-04-25 02:02:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopee_nick_list`
--

CREATE TABLE `shopee_nick_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `link_shopee` text DEFAULT NULL,
  `is_confirm` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shopee_nick_list`
--

INSERT INTO `shopee_nick_list` (`id`, `user_id`, `link_shopee`, `is_confirm`, `created_at`, `updated_at`) VALUES
(1, 2, 'shopee.com/wearallday.clothing', 1, NULL, NULL),
(2, 2, 'shopee.com/huonggiang', 1, NULL, NULL),
(3, 3, 'shopee.com/test', 1, NULL, NULL),
(4, 3, 'shopee.com/okie', 1, NULL, NULL),
(5, 1, 'shopee.com/test2', 1, NULL, NULL),
(6, 1, 'shopee.com/test3', 1, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions_order`
--

CREATE TABLE `transactions_order` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'member',
  `transaction_status` tinyint(1) DEFAULT 0 COMMENT '0: người đặt gửi yêu cầu muốn đặt hộ đến chủ shop ; 1: chủ shop xác nhận người đặt đã đặt hàng hộ ( lúc này mới cộng coin cho người đặt ); 2: chủ shop đã ck tiền cod cho admin; 3: đơn thành công (hoàn tiền cod cho ng đặt) ; 4: đơn thất bại (trừ coin ng đặt + hoàn tiền lại cho shop)',
  `money_cod` float DEFAULT 0,
  `transaction_code` varchar(45) DEFAULT NULL,
  `order_code` varchar(45) DEFAULT NULL,
  `shopee_link` int(11) DEFAULT NULL COMMENT 'link shopee của member dùng để đặt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transfer_money_history_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `transactions_order`
--

INSERT INTO `transactions_order` (`id`, `post_id`, `user_id`, `transaction_status`, `money_cod`, `transaction_code`, `order_code`, `shopee_link`, `created_at`, `updated_at`, `transfer_money_history_id`) VALUES
(1, 1, 2, 0, 0, NULL, NULL, NULL, '2021-04-17 09:30:08', '2021-04-17 09:30:08', NULL),
(2, 1, 1, 0, 1, NULL, NULL, NULL, '2021-04-17 09:30:08', '2021-04-17 09:30:08', NULL),
(3, 4, 1, 0, 20, NULL, NULL, NULL, '2021-04-20 09:30:08', '2021-04-20 09:30:08', NULL),
(4, 3, 1, 2, 34, NULL, NULL, NULL, '2021-04-20 09:30:08', '2021-04-20 09:30:08', 2),
(5, 3, 3, 2, 240, '12', '23', NULL, '2021-04-20 09:30:08', '2021-04-23 19:58:26', 3),
(6, 1, 2, 0, 0, NULL, NULL, NULL, '2021-04-21 20:02:21', '2021-04-21 20:02:21', NULL),
(7, 1, 2, 0, 0, NULL, NULL, 1, '2021-04-21 20:05:09', '2021-04-21 20:05:09', NULL),
(8, 2, 2, 0, 0, NULL, NULL, 2, '2021-04-25 01:28:13', '2021-04-25 01:28:13', NULL),
(9, 2, 3, 0, 0, NULL, NULL, 3, '2021-04-25 01:46:14', '2021-04-25 01:46:14', NULL),
(10, 2, 3, 0, 0, NULL, NULL, 4, '2021-04-25 01:49:02', '2021-04-25 01:49:02', NULL),
(11, 2, 3, 0, 0, NULL, NULL, 3, '2021-04-25 02:03:38', '2021-04-25 02:03:38', NULL),
(12, 2, 3, 0, 0, NULL, NULL, 4, '2021-04-25 02:05:00', '2021-04-25 02:05:00', NULL),
(13, 13, 3, 4, 240, '123', '212', 3, '2021-04-25 02:09:35', '2021-04-25 03:16:17', 4),
(14, 13, 3, 4, 250, '11', '11', 3, '2021-04-25 03:18:36', '2021-04-25 03:20:17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transfer_money_history`
--

CREATE TABLE `transfer_money_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `evidence` text DEFAULT NULL,
  `is_received_money` tinyint(1) DEFAULT 0 COMMENT 'admin xac nhan da nhan dc tien hay chua?',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `transfer_money_history`
--

INSERT INTO `transfer_money_history` (`id`, `user_id`, `money`, `evidence`, `is_received_money`, `created_at`, `updated_at`) VALUES
(1, 2, 34, '', 0, '2021-04-23 02:40:34', '2021-04-23 02:40:34'),
(2, 2, 34, '', 0, '2021-04-23 02:45:18', '2021-04-23 02:45:18'),
(3, 2, 240, '', 0, '2021-04-23 20:02:40', '2021-04-23 20:02:40'),
(4, 2, 240, 'evidence_transfer/1619342269.jpg', 0, '2021-04-25 02:17:50', '2021-04-25 02:17:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `zalo` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `point` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `zalo`, `phone`, `facebook`, `point`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'son tesst', 'son.nn@test.com.vn', '$2y$12$eSlhnfBRDs9WPg980L6huOT9ybzXG5j1pkjMcq', '0356522614', NULL, NULL, 10, NULL, NULL, 'https://static.riviu.vn/320/image/2020/05/15/2e83cc1fbcf6afbbac20e29080591e74_output.jpeg'),
(2, 'admin', 'admin@gmail.com', '$2y$10$bD23JDV6MamjONXYDLtCYOiHXStbmYYJy2NxRjb/leyJ6lkEH6J/.', '0356522614', NULL, NULL, NULL, '2021-04-15 07:10:45', '2021-04-15 07:10:45', 'https://static.riviu.vn/320/image/2020/05/15/2e83cc1fbcf6afbbac20e29080591e74_output.jpeg'),
(3, 'client', 'client@gmail.com', '$2y$10$bD23JDV6MamjONXYDLtCYOiHXStbmYYJy2NxRjb/leyJ6lkEH6J/.', '0362109953', NULL, NULL, 5, '2021-04-15 07:10:45', '2021-04-25 03:20:17', 'https://static.riviu.vn/320/image/2020/05/15/2e83cc1fbcf6afbbac20e29080591e74_output.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_product_links`
--
ALTER TABLE `post_product_links`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shopee_nick_list`
--
ALTER TABLE `shopee_nick_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions_order`
--
ALTER TABLE `transactions_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transfer_money_history`
--
ALTER TABLE `transfer_money_history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `post_product_links`
--
ALTER TABLE `post_product_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `shopee_nick_list`
--
ALTER TABLE `shopee_nick_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `transactions_order`
--
ALTER TABLE `transactions_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `transfer_money_history`
--
ALTER TABLE `transfer_money_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
