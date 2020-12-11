/*
Navicat MySQL Data Transfer

Source Server         : mysql_safir
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : netshop

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2020-12-05 00:17:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminid` int NOT NULL,
  `aname` varchar(20) COLLATE utf8_bin NOT NULL,
  `apassword` varchar(20) COLLATE utf8_bin NOT NULL,
  `aphone` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', '18530052198');
INSERT INTO `admin` VALUES ('2', 'admin2', 'admin2', '13213725495');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `uemail` varchar(32) NOT NULL,
  `upassword` varchar(32) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `uphone` varchar(32) NOT NULL,
  `uweixinid` varchar(32) DEFAULT NULL,
  `uaddress` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '3445805720@qq.com', 'safir.1998', 'safir', '18530052198', 'safir_98', '河南省新乡市');
INSERT INTO `users` VALUES ('2', 'safirking98@163.com', 'safir.1998', 'safir2', '18530052198', 'safir_98', '河南省新乡市2');
INSERT INTO `users` VALUES ('3', 'safirking98@gmail.com', 'safir.1998', 'safir3', '18530052198', 'safir_98', '河南省新乡市3');
