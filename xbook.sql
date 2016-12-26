/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50156
Source Host           : localhost:3306
Source Database       : xbook

Target Server Type    : MYSQL
Target Server Version : 50156
File Encoding         : 65001

Date: 2016-12-23 18:00:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '书名',
  `chapters` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '总共章节数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------

-- ----------------------------
-- Table structure for `chapters`
-- ----------------------------
DROP TABLE IF EXISTS `chapters`;
CREATE TABLE `chapters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '书ID',
  `volume_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '卷ID',
  `num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '章节号 排序',
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '章节名',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chapters
-- ----------------------------

-- ----------------------------
-- Table structure for `volumes`
-- ----------------------------
DROP TABLE IF EXISTS `volumes`;
CREATE TABLE `volumes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '书ID',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '卷名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of volumes
-- ----------------------------
