/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : jizhang

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-07-09 11:09:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jz_category`
-- ----------------------------
DROP TABLE IF EXISTS `jz_category`;
CREATE TABLE `jz_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `times` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jz_category
-- ----------------------------
INSERT INTO `jz_category` VALUES ('2', '餐饮', null, '1468026994');
INSERT INTO `jz_category` VALUES ('3', '交通', null, '1468029492');

-- ----------------------------
-- Table structure for `jz_expend`
-- ----------------------------
DROP TABLE IF EXISTS `jz_expend`;
CREATE TABLE `jz_expend` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` varchar(100) DEFAULT NULL COMMENT '出账金额',
  `date` int(20) DEFAULT NULL COMMENT '出账日期',
  `type` int(1) DEFAULT NULL COMMENT '出账类别',
  `msg` text COMMENT '出账描述',
  `times` int(20) DEFAULT NULL COMMENT '出账时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jz_expend
-- ----------------------------

-- ----------------------------
-- Table structure for `jz_income`
-- ----------------------------
DROP TABLE IF EXISTS `jz_income`;
CREATE TABLE `jz_income` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` varchar(100) DEFAULT '' COMMENT '入账金额',
  `date` int(20) DEFAULT NULL COMMENT '入账日期',
  `type` int(1) DEFAULT NULL COMMENT '入账类别',
  `msg` text COMMENT '备注信息',
  `times` int(20) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jz_income
-- ----------------------------
INSERT INTO `jz_income` VALUES ('1', '12', '1467993600', '0', '朋友转账', '1468032094');
INSERT INTO `jz_income` VALUES ('2', '15', '1467993600', '1', '插件出售', '1468032194');
INSERT INTO `jz_income` VALUES ('3', '23', '1467993600', '0', '吃饭转账', '1468032286');
INSERT INTO `jz_income` VALUES ('4', '12.5', '1467993600', '1', '', '1468033028');
