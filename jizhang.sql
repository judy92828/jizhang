/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : jizhang

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-07-11 10:04:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jz_bill`
-- ----------------------------
DROP TABLE IF EXISTS `jz_bill`;
CREATE TABLE `jz_bill` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` varchar(100) DEFAULT '' COMMENT '入账金额',
  `date` int(20) DEFAULT NULL COMMENT '入账日期',
  `type` int(1) DEFAULT NULL COMMENT '入账类别',
  `msg` text COMMENT '备注信息',
  `times` int(20) DEFAULT NULL COMMENT '添加时间',
  `mold` int(1) DEFAULT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jz_bill
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jz_category
-- ----------------------------
