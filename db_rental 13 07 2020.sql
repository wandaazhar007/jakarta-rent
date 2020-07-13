/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : db_rental

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 13/07/2020 15:16:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for history_login
-- ----------------------------
DROP TABLE IF EXISTS `history_login`;
CREATE TABLE `history_login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 92 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history_login
-- ----------------------------
INSERT INTO `history_login` VALUES (1, 1593506707, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (2, 1593507751, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (3, 1593507973, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (4, 1593511731, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (5, 1593515526, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (6, 1593515690, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (7, 1593516190, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (8, 1593528129, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (9, 1593528187, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (10, 1593567757, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (11, 1593575089, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (12, 1593607242, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (13, 1593617655, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (14, 1593617722, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (15, 1593627091, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (16, 1593627523, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (17, 1593632620, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (18, 1593633103, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (19, 1593633160, 'Ris Aulia Septiani', 'risaulias@gmail.com');
INSERT INTO `history_login` VALUES (20, 1593633179, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (21, 1593678438, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (22, 1593678526, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (23, 1593689293, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (24, 1593712362, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (25, 1593718964, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (26, 1594019274, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (27, 1594046404, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (28, 1594088782, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (29, 1594092131, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (30, 1594112276, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (31, 1594120669, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (32, 1594132700, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (33, 1594172876, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (34, 1594175166, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (35, 1594177014, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (36, 1594177226, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (37, 1594177241, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (38, 1594179143, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (39, 1594179387, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (40, 1594179504, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (41, 1594179962, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (42, 1594180170, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (43, 1594180217, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (44, 1594180475, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (45, 1594183429, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (46, 1594184342, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (47, 1594184686, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (48, 1594184693, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (49, 1594191496, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (50, 1594191641, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (51, 1594191678, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (52, 1594191826, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (53, 1594191906, 'Sirs RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (54, 1594191935, 'SIRS RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (55, 1594192060, 'SIRS RSU Tangsel', 'sirsrsutangsel@gmail.com');
INSERT INTO `history_login` VALUES (56, 1594192291, 'Gesta Handayani', 'gestahandayani@gmail.com');
INSERT INTO `history_login` VALUES (57, 1594194433, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (58, 1594194494, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (59, 1594194905, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (60, 1594195583, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (61, 1594196408, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (62, 1594201847, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (63, 1594204699, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (64, 1594209741, 'Yanmed', 'yanmed@gmail.com');
INSERT INTO `history_login` VALUES (65, 1594211502, 'Umum', 'umum@gmail.com');
INSERT INTO `history_login` VALUES (66, 1594211532, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (67, 1594211603, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (68, 1594211871, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (69, 1594212082, 'Penunjang', 'penunjang@gmail.com');
INSERT INTO `history_login` VALUES (70, 1594214741, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (71, 1594236602, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (72, 1594258912, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (73, 1594261967, 'Keperawatan', 'keperawatan@gmail.com');
INSERT INTO `history_login` VALUES (74, 1594262175, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (75, 1594314760, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (76, 1594406387, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (77, 1594406388, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (78, 1594433257, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (79, 1594448384, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (80, 1594456914, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (81, 1594473944, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (82, 1594482242, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (83, 1594488840, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (84, 1594490594, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (85, 1594491101, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (86, 1594493724, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (87, 1594495403, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (88, 1594517649, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (89, 1594547973, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (90, 1594581181, 'Wanda Azhar', 'wandaazhar@gmail.com');
INSERT INTO `history_login` VALUES (91, 1594625075, 'Wanda Azhar', 'wandaazhar@gmail.com');

-- ----------------------------
-- Table structure for tb_alamat
-- ----------------------------
DROP TABLE IF EXISTS `tb_alamat`;
CREATE TABLE `tb_alamat`  (
  `alamat_id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`alamat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_alamat
-- ----------------------------
INSERT INTO `tb_alamat` VALUES (1, 'jakarta barat', 'jl. kamal raya no 11, cengkareng barat, cengkareng');
INSERT INTO `tb_alamat` VALUES (2, 'jakarta timur', 'jl. kamal raya no 11, cengkareng timur, jatinegara');

-- ----------------------------
-- Table structure for tb_mobil
-- ----------------------------
DROP TABLE IF EXISTS `tb_mobil`;
CREATE TABLE `tb_mobil`  (
  `mobil_id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_id` int(11) NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '' COMMENT '1 = minivan, 2 = sedan',
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `transmisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `kursi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pintu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `warna` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `tahun` year NULL DEFAULT NULL,
  `air_bag` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `harga` double(255, 0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`mobil_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_mobil
-- ----------------------------
INSERT INTO `tb_mobil` VALUES (7, 1, '1', 'Daihatsu Xenia', 'v', 'manual', '6', '4', 'hitam', 2019, '2', 'xenia.png', 500000, '1');
INSERT INTO `tb_mobil` VALUES (8, 1, '1', 'Grand Livina', 'x', 'automatic', '6', '4', 'putih', 2015, '2', 'livina.jpg', 400000, '0');

-- ----------------------------
-- Table structure for tb_order
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order`  (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mobil_id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `jenis_order` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '' COMMENT '1 = mobil saja, 2 = mobil + supir',
  `order_date` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `start_date` datetime(0) NULL DEFAULT NULL,
  `end_date` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '0 = menunggu pembayaran, 1 = lunas, 2 = dikembalikan, 3 = cancel',
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES (4, '1', '7', '1', '2020-07-09 17:07:25', '2020-07-08 12:30:00', '2020-07-09 12:30:00', '3');
INSERT INTO `tb_order` VALUES (6, '1', '7', '1', '2020-07-10 01:46:58', '2020-07-11 09:30:00', '2020-07-18 09:30:00', '3');
INSERT INTO `tb_order` VALUES (7, '2', '8', '2', '2020-07-12 11:37:12', '2020-07-11 10:30:00', '2020-07-17 10:30:00', '0');

-- ----------------------------
-- Table structure for tb_pengembalian
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengembalian`;
CREATE TABLE `tb_pengembalian`  (
  `pengembalian_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `create_date` datetime(0) NULL DEFAULT NULL,
  `denda` double NULL DEFAULT NULL,
  PRIMARY KEY (`pengembalian_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_pengembalian
-- ----------------------------

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi`  (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `metode_pembayaran` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '' COMMENT '1 = langsung, 2 = transfer',
  `harga` double NOT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '0 = belum lunas, 1 = lunas, 2 = cancel',
  `create_date` datetime(0) NOT NULL,
  PRIMARY KEY (`trans_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (1, 4, 1, '1', 500000, '2', '2020-07-07 16:13:28');
INSERT INTO `tb_transaksi` VALUES (3, 6, 1, '1', 500000, '1', '2020-07-10 01:33:05');
INSERT INTO `tb_transaksi` VALUES (4, 7, 1, '2', 500000, '0', '2020-07-10 01:55:25');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `telepon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `token_firebase` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `token_login` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `status_login` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `waktu_update` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'dadan', 'ahmadrusdani80@gmail.com', '0898321313', 'c5111f13-c1aa-11ea-a757-d4bed91ede2frusdani.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '', 'a3505921d158012cbad6673d626d5aa670721b1deb2b96257c42caecfef9ef32', '1', NULL);
INSERT INTO `tb_user` VALUES (2, 'wanda', 'wandaazhar@gmail.com', '081288342016', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '0', NULL);

-- ----------------------------
-- Table structure for tb_user_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_admin`;
CREATE TABLE `tb_user_admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_access` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_user_admin
-- ----------------------------
INSERT INTO `tb_user_admin` VALUES (21, 'Gesta Handayani', '081288342019', 'gestahandayani@gmail.com', 1593257698, NULL, 'gesta1.jpg', 'gesta', '$2y$10$osskfnEzYxhvYYDoJj0uaessc39nLBQ/PP2R2wM.zJ.78/mDpx6aS', 'admin', 'aktif', 'keperawatan');
INSERT INTO `tb_user_admin` VALUES (26, 'Wanda Azhar', '081288342056', 'wandaazhar@gmail.com', 1593503263, NULL, 'default-avatar.png', 'wandaazhar', '$2y$10$G5j6nZM45EGyqKUsdoX.o.1W2lqSndDxh1SDKYN39APCgOC.Mgnyq', 'administrator', 'aktif', 'promkes');

SET FOREIGN_KEY_CHECKS = 1;
