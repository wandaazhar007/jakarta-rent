/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : db_rental

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 12/07/2020 00:27:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_alamat
-- ----------------------------
DROP TABLE IF EXISTS `tb_alamat`;
CREATE TABLE `tb_alamat`  (
  `alamat_id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`alamat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_mobil
-- ----------------------------
INSERT INTO `tb_mobil` VALUES (7, 1, '1', 'xenia', 'v', 'manual', '6', '4', 'hitam', 2019, '2', 'xenia.png', 500000, '1');
INSERT INTO `tb_mobil` VALUES (8, 1, '1', 'livina', 'x', 'automatic', '6', '4', 'putih', 2015, '2', 'livina.jpg', 400000, '0');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES (4, '1', '7', '1', '2020-07-09 17:07:25', '2020-07-08 12:30:00', '2020-07-09 12:30:00', '3');
INSERT INTO `tb_order` VALUES (6, '1', '7', '1', '2020-07-10 01:46:58', '2020-07-11 09:30:00', '2020-07-18 09:30:00', '3');
INSERT INTO `tb_order` VALUES (7, '1', '7', '1', '2020-07-10 01:55:25', '2020-07-11 10:30:00', '2020-07-17 10:30:00', '0');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (1, 4, 1, '1', 500000, '2', '2020-07-07 16:13:28');
INSERT INTO `tb_transaksi` VALUES (3, 6, 1, '1', 500000, '2', '2020-07-10 01:33:05');
INSERT INTO `tb_transaksi` VALUES (4, 7, 1, '1', 500000, '0', '2020-07-10 01:55:25');

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'dadan', 'ahmadrusdani80@gmail.com', '0898321313', 'c5111f13-c1aa-11ea-a757-d4bed91ede2frusdani.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '', 'a3505921d158012cbad6673d626d5aa670721b1deb2b96257c42caecfef9ef32', '1', NULL);
INSERT INTO `tb_user` VALUES (2, 'rusdani', 'ahmadrusdani@gmail.com', '0898321312', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '0', NULL);

SET FOREIGN_KEY_CHECKS = 1;
