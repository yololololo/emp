/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : emp

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-10 02:40:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin1', '111');
INSERT INTO `admin` VALUES ('2', 'admin2', '222');
INSERT INTO `admin` VALUES ('3', 'admin3', '333');
INSERT INTO `admin` VALUES ('4', 'admin4', '444');
INSERT INTO `admin` VALUES ('5', 'admin5', '555');
INSERT INTO `admin` VALUES ('6', 'admin6', '666');
INSERT INTO `admin` VALUES ('7', 'admin7', '777');
INSERT INTO `admin` VALUES ('8', 'admin8', '888');

-- ----------------------------
-- Table structure for emp
-- ----------------------------
DROP TABLE IF EXISTS `emp`;
CREATE TABLE `emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `grade` tinyint(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `salary` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emp
-- ----------------------------
INSERT INTO `emp` VALUES ('1', 'emp1', '2', '111@111.com', '1111.10');
INSERT INTO `emp` VALUES ('2', 'emp2', '2', '222@222.com', '2222.20');
INSERT INTO `emp` VALUES ('3', 'emp3', '3', '333@333.com', '3333.30');
INSERT INTO `emp` VALUES ('4', 'emp1', '1', '111@111.com', '1111.10');
INSERT INTO `emp` VALUES ('5', 'emp2', '2', '222@222.com', '2222.20');
INSERT INTO `emp` VALUES ('6', 'emp3', '3', '333@333.com', '3333.30');
INSERT INTO `emp` VALUES ('8', 'emp2', '2', '222@222.com', '2222.20');
INSERT INTO `emp` VALUES ('9', 'emp3', '3', '333@333.com', '3333.30');
INSERT INTO `emp` VALUES ('11', 'emp2', '2', '222@222.com', '2222.20');
INSERT INTO `emp` VALUES ('12', 'emp3', '3', '333@333.com', '3333.30');
INSERT INTO `emp` VALUES ('25', 'emp25', '5', '5533@11.com3', '5589.00');
INSERT INTO `emp` VALUES ('28', 'emp2', '111', '1111@4.com', '111.00');
INSERT INTO `emp` VALUES ('29', 'emp23', '3', '111@111.com', '3456.00');
