/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : bookas

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 27/05/2021 16:18:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(10) NULL DEFAULT NULL COMMENT 'id user pembeli dari tabel user.id',
  `id_penjual` int(10) NULL DEFAULT NULL,
  `id_product` int(10) NULL DEFAULT NULL,
  `qty` double NULL DEFAULT 1,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_penjual` int(10) NULL DEFAULT NULL,
  `id_pembeli` int(10) NULL DEFAULT NULL,
  `id_product` int(10) NULL DEFAULT NULL,
  `nama_penjual` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_pembeli` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` double(10, 0) NULL DEFAULT 0,
  `qty` double NULL DEFAULT 1,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_terbit` date NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kondisi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `penulis` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 0 COMMENT '0:proses pembayaran by pembeli, \r\n1:upload bukti pembayaran by pembeli, \r\n2:pembayaran diterima by admin, \r\n3:proses pengiriman by penjual, \r\n4:selesai by penjual',
  `foto_bukti` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `tgl_bukti` datetime(0) NULL DEFAULT NULL,
  `tgl_confirm_admin` datetime(0) NULL DEFAULT NULL,
  `tgl_confirm_pengiriman` datetime(0) NULL DEFAULT NULL,
  `tgl_confirm_selesai` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (1, '16218543370', 4, 5, 3, 'anwar', 'anwar pembeli', 'af', 200000, 1, '2021-05-24 11:05:37', '2021-05-27 05:30:00', '1621784316_anwarsptr.jpg', '2021-05-24', 'sgsdfhr sdgsd', 'sg gssdgsd', 'sgds sdg', 'sdgsdv', 4, '1621864595_20170201_183147.png', '2021-05-24 13:56:35', '2021-05-26 14:27:01', '2021-05-26 07:28:21', '2021-05-27 05:30:00');
INSERT INTO `order` VALUES (2, '16220683350', 4, 5, 2, 'anwar', 'anwar pembeli', 'a b c d', 150000, 2, '2021-05-27 05:32:15', '2021-05-27 05:34:22', '1621702084_logo-min.jpg', '2021-05-01', 'wsryrewtsx dfh', 'axzv sgbsdfrgesrd', 'reyrsd sgfsd', 'hehe', 4, '1622068353_default.jpg', '2021-05-27 05:32:33', '2021-05-27 05:34:08', '2021-05-27 05:34:12', '2021-05-27 05:34:22');
INSERT INTO `order` VALUES (3, '16220691380', 4, 5, 3, 'anwar', 'anwar pembeli', 'af', 200000, 1, '2021-05-27 05:45:38', '2021-05-27 05:46:56', '1621784316_anwarsptr.jpg', '2021-05-24', 'sgsdfhr sdgsd', 'sg gssdgsd', 'sgds sdg', 'sdgsdv', 4, '1622069153_anwarsptr.jpg', '2021-05-27 05:45:53', '2021-05-27 05:46:32', '2021-05-27 05:46:48', '2021-05-27 05:46:56');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_penjual` int(10) NULL DEFAULT NULL,
  `id_pembeli` int(10) NULL DEFAULT NULL,
  `id_product` int(10) NULL DEFAULT NULL,
  `nama_penjual` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_pembeli` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` double(10, 0) NULL DEFAULT 0,
  `qty` double NULL DEFAULT 1,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_terbit` date NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kondisi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `penulis` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 0 COMMENT '0:proses pembayaran by pembeli, 1:upload bukti pembayaran by pembeli, 2:pembayaran diterima by admin, 3:proses pengiriman by penjual, 4:selesai by penjual',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for pencairan
-- ----------------------------
DROP TABLE IF EXISTS `pencairan`;
CREATE TABLE `pencairan`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NULL DEFAULT NULL,
  `no_transaksi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total` double NULL DEFAULT 0,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int(1) NULL DEFAULT NULL COMMENT '0:pending, 1:selesai',
  `tgl_confirm` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pencairan
-- ----------------------------
INSERT INTO `pencairan` VALUES (1, 4, 'P1622068215', 200000, 'Pencairan', 1, '2021-05-27 05:33:54', '2021-05-27 05:30:15', '2021-05-27 05:33:54');
INSERT INTO `pencairan` VALUES (2, 4, 'P1622069223', 300000, 'Pencairan', 1, '2021-05-27 05:47:15', '2021-05-27 05:47:03', '2021-05-27 05:47:15');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` double(10, 0) NULL DEFAULT 0,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_terbit` date NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kondisi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `penulis` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `upload_bukti` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgl_upload` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (2, 4, 'a b c d', 150000, '2021-05-22 16:48:04', '2021-05-22 16:48:04', '1621702084_logo-min.jpg', '2021-05-01', 'wsryrewtsx dfh', 'axzv sgbsdfrgesrd', 'reyrsd sgfsd', 'hehe', NULL, NULL);
INSERT INTO `product` VALUES (3, 4, 'af', 200000, '2021-05-23 15:38:36', '2021-05-23 15:38:36', '1621784316_anwarsptr.jpg', '2021-05-24', 'sgsdfhr sdgsd', 'sg gssdgsd', 'sgds sdg', 'sdgsdv', NULL, NULL);

-- ----------------------------
-- Table structure for rekening
-- ----------------------------
DROP TABLE IF EXISTS `rekening`;
CREATE TABLE `rekening`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `iduser` int(10) NULL DEFAULT NULL,
  `namaBank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noRekening` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rekening
-- ----------------------------
INSERT INTO `rekening` VALUES (1, 4, 'aa', 'bb', '2021-05-22 13:21:53', '2021-05-22 12:00:28');
INSERT INTO `rekening` VALUES (2, 5, '', '', '2021-05-22 15:30:12', '2021-05-22 15:30:12');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'Admin');
INSERT INTO `role` VALUES (2, 'User');

-- ----------------------------
-- Table structure for saldo
-- ----------------------------
DROP TABLE IF EXISTS `saldo`;
CREATE TABLE `saldo`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NULL DEFAULT NULL,
  `no_transaksi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saldo_in` double NULL DEFAULT 0 COMMENT 'penghasilan',
  `saldo_out` double NULL DEFAULT 0 COMMENT 'pencairan',
  `qty` double NULL DEFAULT 0,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of saldo
-- ----------------------------
INSERT INTO `saldo` VALUES (1, 4, '16218543370', 200000, 0, 1, 'Order', '2021-05-27 05:30:00', NULL);
INSERT INTO `saldo` VALUES (2, 4, 'P1622068215', 0, 200000, 0, 'Pencairan', '2021-05-27 05:33:54', NULL);
INSERT INTO `saldo` VALUES (3, 4, '16220683350', 300000, 0, 2, 'Order', '2021-05-27 05:34:22', NULL);
INSERT INTO `saldo` VALUES (4, 4, '16220691380', 200000, 0, 1, 'Order', '2021-05-27 05:46:56', NULL);
INSERT INTO `saldo` VALUES (5, 4, 'P1622069223', 0, 300000, 0, 'Pencairan', '2021-05-27 05:47:15', NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `role_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'sukopay', 'admin@gmail.com', '$2y$12$aYdE1marXkjUaIVRRa.hD.cCeE/r3XkqU4QQrf64r3VA7LS9YCenq', '2021-05-18 05:09:20', '2021-05-18 05:09:20', NULL, NULL, 1);
INSERT INTO `user` VALUES (3, 'sdfsd', 'fahrursanjaya@gmail.com', '$2y$12$DUXcmZNsplVYS0bWac4rFeR4olmKbBPX6jTYu87Hq2ri73yfxRbD.', '2021-05-18 13:03:25', '2021-05-18 13:03:25', NULL, NULL, 2);
INSERT INTO `user` VALUES (4, 'anwar', 'anwarsptr@gmail.com', '$2y$12$IWKWEIo.VsPa4sHVRvLtWu6oRCqXN.SKZHukmiwzoXIoIbaKfW1we', '2021-05-22 11:32:14', '2021-05-22 12:50:17', '11', '22', 2);
INSERT INTO `user` VALUES (5, 'anwar pembeli', 'anwarsptr11@gmail.com', '$2y$12$aYdE1marXkjUaIVRRa.hD.cCeE/r3XkqU4QQrf64r3VA7LS9YCenq', '2021-05-22 15:30:01', '2021-05-23 15:52:07', '086346346', 'batam', 2);

SET FOREIGN_KEY_CHECKS = 1;
