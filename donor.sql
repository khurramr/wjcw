/*
 Navicat Premium Data Transfer

 Source Server         : developer
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost:3306
 Source Schema         : welfare

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : 65001

 Date: 20/02/2021 23:19:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for donor
-- ----------------------------
DROP TABLE IF EXISTS `donor`;
CREATE TABLE `donor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_key` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `contact_no` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of donor
-- ----------------------------
INSERT INTO `donor` VALUES (33, '35202', '786786//**', 'Syed Atif', 'Hussain', 'gatif786@gmail.com', '+9232384076');

SET FOREIGN_KEY_CHECKS = 1;
