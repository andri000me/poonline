/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : localhost:3306
 Source Schema         : piket

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 16/10/2019 07:13:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_login` datetime(0) NULL DEFAULT NULL,
  `koneksi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, 'manual');
INSERT INTO `users` VALUES (2, 'maker', 'maker', '81dc9bdb52d04dc20036dbd8313ed055', 'maker', NULL, 'manual');
INSERT INTO `users` VALUES (3, 'approver', 'approver', 'c20ad4d76fe97759aa27a0c99bff6710', 'approver', NULL, NULL);
INSERT INTO `users` VALUES (50, 'jwkewj', 'kwjkwj', NULL, 'dwkjw', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
