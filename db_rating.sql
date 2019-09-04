/*
Navicat MySQL Data Transfer

Source Server         : local-mysql
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : db_sldn

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2019-09-04 12:52:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for info_peserta
-- ----------------------------
DROP TABLE IF EXISTS `info_peserta`;
CREATE TABLE `info_peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of info_peserta
-- ----------------------------
