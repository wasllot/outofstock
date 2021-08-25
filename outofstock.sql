-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2021 a las 23:05:33
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `outofstock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_data`
--

CREATE TABLE `product_data` (
  `id` int(11) NOT NULL,
  `product_sessions` int(11) NOT NULL,
  `product_page_views` int(11) NOT NULL,
  `product_url` varchar(280) NOT NULL,
  `product_said` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `product_variation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product_data`
--

INSERT INTO `product_data` (`id`, `product_sessions`, `product_page_views`, `product_url`, `product_said`, `created_at`, `product_variation_id`) VALUES
(256, 1, 4, 'https://astrogrowshop.cl/api/stock_availables/24841', 24841, '2021-08-24 21:22:38', NULL),
(257, 9, 13, 'https://astrogrowshop.cl/api/stock_availables/15330', 15330, '2021-08-24 21:22:40', NULL),
(258, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/24880', 24880, '2021-08-24 21:22:41', NULL),
(259, 2, 6, 'https://astrogrowshop.cl/api/stock_availables/25303', 25303, '2021-08-24 21:22:49', NULL),
(260, 2, 12, 'https://astrogrowshop.cl/api/stock_availables/10514', 10514, '2021-08-24 21:23:05', NULL),
(261, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/10629', 10629, '2021-08-24 21:23:06', NULL),
(262, 1, 21, 'https://astrogrowshop.cl/api/stock_availables/4023', 4023, '2021-08-24 21:23:10', NULL),
(263, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/6772', 6772, '2021-08-24 21:23:13', NULL),
(264, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/4276', 4276, '2021-08-24 21:23:13', NULL),
(265, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/6774', 6774, '2021-08-24 21:23:14', NULL),
(266, 2, 7, 'https://astrogrowshop.cl/api/stock_availables/16152', 16152, '2021-08-24 21:23:16', NULL),
(267, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/7822', 7822, '2021-08-24 21:23:19', NULL),
(268, 3, 7, 'https://astrogrowshop.cl/api/stock_availables/15810', 15810, '2021-08-24 21:23:20', NULL),
(269, 2, 11, 'https://astrogrowshop.cl/api/stock_availables/25011', 25011, '2021-08-24 21:23:21', NULL),
(270, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3858', 3858, '2021-08-24 21:23:21', NULL),
(271, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3861', 3861, '2021-08-24 21:23:22', NULL),
(272, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3867', 3867, '2021-08-24 21:23:24', NULL),
(273, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/16895', 16895, '2021-08-24 21:23:25', NULL),
(274, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/3868', 3868, '2021-08-24 21:23:25', NULL),
(275, 3, 3, 'https://astrogrowshop.cl/api/stock_availables/2892', 2892, '2021-08-24 21:23:28', NULL),
(276, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/4016', 4016, '2021-08-24 21:23:28', NULL),
(277, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/2903', 2903, '2021-08-24 21:23:29', NULL),
(278, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/2919', 2919, '2021-08-24 21:23:31', NULL),
(279, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/13608', 13608, '2021-08-24 21:23:31', NULL),
(280, 4, 4, 'https://astrogrowshop.cl/api/stock_availables/9453', 9453, '2021-08-24 21:23:32', NULL),
(281, 1, 8, 'https://astrogrowshop.cl/api/stock_availables/3014', 3014, '2021-08-24 21:23:35', NULL),
(282, 1, 4, 'https://astrogrowshop.cl/api/stock_availables/3135', 3135, '2021-08-24 21:23:38', NULL),
(283, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1672', 1672, '2021-08-24 21:23:38', NULL),
(284, 3, 3, 'https://astrogrowshop.cl/api/stock_availables/24763', 24763, '2021-08-24 21:23:46', NULL),
(285, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1951', 1951, '2021-08-24 21:23:47', NULL),
(286, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1952', 1952, '2021-08-24 21:23:49', NULL),
(287, 3, 3, 'https://astrogrowshop.cl/api/stock_availables/24839', 24839, '2021-08-24 21:23:51', NULL),
(288, 1, 4, 'https://astrogrowshop.cl/api/stock_availables/24841', 24841, '2021-08-24 21:23:52', NULL),
(289, 4, 9, 'https://astrogrowshop.cl/api/stock_availables/1956', 1956, '2021-08-24 21:23:55', NULL),
(290, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/24880', 24880, '2021-08-24 21:23:56', NULL),
(291, 2, 8, 'https://astrogrowshop.cl/api/stock_availables/18416', 18416, '2021-08-24 21:23:56', NULL),
(292, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/24551', 24551, '2021-08-24 21:24:01', NULL),
(293, 2, 6, 'https://astrogrowshop.cl/api/stock_availables/25303', 25303, '2021-08-24 21:24:04', NULL),
(294, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/25003', 25003, '2021-08-24 21:24:09', NULL),
(295, 2, 12, 'https://astrogrowshop.cl/api/stock_availables/10514', 10514, '2021-08-24 21:24:18', NULL),
(296, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/8990', 8990, '2021-08-24 21:24:18', NULL),
(297, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/10629', 10629, '2021-08-24 21:24:19', NULL),
(298, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/10456', 10456, '2021-08-24 21:24:25', NULL),
(299, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/6772', 6772, '2021-08-24 21:24:25', NULL),
(300, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/6774', 6774, '2021-08-24 21:24:27', NULL),
(301, 4, 4, 'https://astrogrowshop.cl/api/stock_availables/9319', 9319, '2021-08-24 21:24:28', NULL),
(302, 3, 7, 'https://astrogrowshop.cl/api/stock_availables/15810', 15810, '2021-08-24 21:24:31', NULL),
(303, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1189', 1189, '2021-08-24 21:24:31', NULL),
(304, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3858', 3858, '2021-08-24 21:24:32', NULL),
(305, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3861', 3861, '2021-08-24 21:24:34', NULL),
(306, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/10114', 10114, '2021-08-24 21:24:34', NULL),
(307, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/3867', 3867, '2021-08-24 21:24:35', NULL),
(308, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/3868', 3868, '2021-08-24 21:24:37', NULL),
(309, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/4016', 4016, '2021-08-24 21:24:38', NULL),
(310, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/13608', 13608, '2021-08-24 21:24:41', NULL),
(311, 2, 4, 'https://astrogrowshop.cl/api/stock_availables/16858', 16858, '2021-08-24 21:24:43', NULL),
(312, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/25300', 25300, '2021-08-24 21:24:45', NULL),
(313, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1672', 1672, '2021-08-24 21:24:48', NULL),
(314, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/25417', 25417, '2021-08-24 21:24:57', NULL),
(315, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1951', 1951, '2021-08-24 21:24:58', NULL),
(316, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24322', 24322, '2021-08-24 21:24:59', NULL),
(317, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1952', 1952, '2021-08-24 21:25:00', NULL),
(318, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1000', 1000, '2021-08-24 21:25:08', NULL),
(319, 4, 9, 'https://astrogrowshop.cl/api/stock_availables/1956', 1956, '2021-08-24 21:25:09', NULL),
(320, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/1009', 1009, '2021-08-24 21:25:10', NULL),
(321, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1138', 1138, '2021-08-24 21:25:11', NULL),
(322, 2, 8, 'https://astrogrowshop.cl/api/stock_availables/18416', 18416, '2021-08-24 21:25:12', NULL),
(323, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1185', 1185, '2021-08-24 21:25:13', NULL),
(324, 2, 3, 'https://astrogrowshop.cl/api/stock_availables/1188', 1188, '2021-08-24 21:25:14', NULL),
(325, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/9463', 9463, '2021-08-24 21:25:16', NULL),
(326, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/24551', 24551, '2021-08-24 21:25:16', NULL),
(327, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1314', 1314, '2021-08-24 21:25:21', NULL),
(328, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1390', 1390, '2021-08-24 21:25:22', NULL),
(329, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/25003', 25003, '2021-08-24 21:25:24', NULL),
(330, 2, 4, 'https://astrogrowshop.cl/api/stock_availables/1424', 1424, '2021-08-24 21:25:26', NULL),
(331, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1428', 1428, '2021-08-24 21:25:27', NULL),
(332, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/8990', 8990, '2021-08-24 21:25:32', NULL),
(333, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/9604', 9604, '2021-08-24 21:25:33', NULL),
(334, 10, 12, 'https://astrogrowshop.cl/api/stock_availables/1548', 1548, '2021-08-24 21:25:34', NULL),
(335, 5, 20, 'https://astrogrowshop.cl/api/stock_availables/1555', 1555, '2021-08-24 21:25:38', NULL),
(336, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/10456', 10456, '2021-08-24 21:25:39', NULL),
(337, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/1556', 1556, '2021-08-24 21:25:40', NULL),
(338, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/1558', 1558, '2021-08-24 21:25:42', NULL),
(339, 4, 4, 'https://astrogrowshop.cl/api/stock_availables/9319', 9319, '2021-08-24 21:25:42', NULL),
(340, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1189', 1189, '2021-08-24 21:25:45', NULL),
(341, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1598', 1598, '2021-08-24 21:25:46', NULL),
(342, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/14651', 14651, '2021-08-24 21:25:47', NULL),
(343, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/10114', 10114, '2021-08-24 21:25:48', NULL),
(344, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1615', 1615, '2021-08-24 21:25:53', NULL),
(345, 4, 4, 'https://astrogrowshop.cl/api/stock_availables/1618', 1618, '2021-08-24 21:25:54', NULL),
(346, 2, 4, 'https://astrogrowshop.cl/api/stock_availables/16858', 16858, '2021-08-24 21:25:56', NULL),
(347, 1, 7, 'https://astrogrowshop.cl/api/stock_availables/1626', 1626, '2021-08-24 21:25:57', NULL),
(348, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/25300', 25300, '2021-08-24 21:25:59', NULL),
(349, 8, 8, 'https://astrogrowshop.cl/api/stock_availables/15861', 15861, '2021-08-24 21:26:01', NULL),
(350, 6, 8, 'https://astrogrowshop.cl/api/stock_availables/15982', 15982, '2021-08-24 21:26:03', NULL),
(351, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/16011', 16011, '2021-08-24 21:26:05', NULL),
(352, 1, 5, 'https://astrogrowshop.cl/api/stock_availables/16012', 16012, '2021-08-24 21:26:07', NULL),
(353, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/25417', 25417, '2021-08-24 21:26:12', NULL),
(354, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24322', 24322, '2021-08-24 21:26:14', NULL),
(355, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/16243', 16243, '2021-08-24 21:26:14', NULL),
(356, 5, 5, 'https://astrogrowshop.cl/api/stock_availables/16870', 16870, '2021-08-24 21:26:18', NULL),
(357, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/17974', 17974, '2021-08-24 21:26:19', NULL),
(358, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1000', 1000, '2021-08-24 21:26:20', NULL),
(359, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/18421', 18421, '2021-08-24 21:26:21', NULL),
(360, 1, 2, 'https://astrogrowshop.cl/api/stock_availables/1009', 1009, '2021-08-24 21:26:21', NULL),
(361, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/23887', 23887, '2021-08-24 21:26:23', NULL),
(362, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1138', 1138, '2021-08-24 21:26:23', NULL),
(363, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1185', 1185, '2021-08-24 21:26:25', NULL),
(364, 2, 3, 'https://astrogrowshop.cl/api/stock_availables/1188', 1188, '2021-08-24 21:26:26', NULL),
(365, 1, 3, 'https://astrogrowshop.cl/api/stock_availables/24297', 24297, '2021-08-24 21:26:27', NULL),
(366, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/9463', 9463, '2021-08-24 21:26:28', NULL),
(367, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1314', 1314, '2021-08-24 21:26:35', NULL),
(368, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1390', 1390, '2021-08-24 21:26:36', NULL),
(369, 2, 4, 'https://astrogrowshop.cl/api/stock_availables/1424', 1424, '2021-08-24 21:26:39', NULL),
(370, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1428', 1428, '2021-08-24 21:26:40', NULL),
(371, 2, 3, 'https://astrogrowshop.cl/api/stock_availables/24650', 24650, '2021-08-24 21:26:44', NULL),
(372, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/9604', 9604, '2021-08-24 21:26:45', NULL),
(373, 10, 12, 'https://astrogrowshop.cl/api/stock_availables/1548', 1548, '2021-08-24 21:26:46', NULL),
(374, 8, 10, 'https://astrogrowshop.cl/api/stock_availables/24698', 24698, '2021-08-24 21:26:47', NULL),
(375, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24702', 24702, '2021-08-24 21:26:48', NULL),
(376, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24864', 24864, '2021-08-24 21:26:49', NULL),
(377, 5, 20, 'https://astrogrowshop.cl/api/stock_availables/1555', 1555, '2021-08-24 21:26:50', NULL),
(378, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24864', 24864, '2021-08-24 21:26:51', NULL),
(379, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/1556', 1556, '2021-08-24 21:26:52', NULL),
(380, 2, 12, 'https://astrogrowshop.cl/api/stock_availables/24875', 24875, '2021-08-24 21:26:54', NULL),
(381, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/1558', 1558, '2021-08-24 21:26:54', NULL),
(382, 6, 8, 'https://astrogrowshop.cl/api/stock_availables/24905', 24905, '2021-08-24 21:26:57', NULL),
(383, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24911', 24911, '2021-08-24 21:26:58', NULL),
(384, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1598', 1598, '2021-08-24 21:26:58', NULL),
(385, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/24912', 24912, '2021-08-24 21:26:59', NULL),
(386, 2, 2, 'https://astrogrowshop.cl/api/stock_availables/14651', 14651, '2021-08-24 21:27:00', NULL),
(387, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/25035', 25035, '2021-08-24 21:27:02', NULL),
(388, 2, 3, 'https://astrogrowshop.cl/api/stock_availables/25071', 25071, '2021-08-24 21:27:04', NULL),
(389, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/25081', 25081, '2021-08-24 21:27:05', NULL),
(390, 1, 1, 'https://astrogrowshop.cl/api/stock_availables/1615', 1615, '2021-08-24 21:27:06', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product_data`
--
ALTER TABLE `product_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product_data`
--
ALTER TABLE `product_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
