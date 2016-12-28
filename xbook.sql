/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50156
Source Host           : localhost:3306
Source Database       : xbook

Target Server Type    : MYSQL
Target Server Version : 50156
File Encoding         : 65001

Date: 2016-12-28 18:19:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`name`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '书名' ,
`chapters`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '总共章节数' ,
`status`  tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1正常 0禁用' ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Table structure for `chapters`
-- ----------------------------
DROP TABLE IF EXISTS `chapters`;
CREATE TABLE `chapters` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`book_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '书ID' ,
`volume_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '卷ID' ,
`num`  int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT '章节号 排序' ,
`title`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '章节名' ,
`content`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容' ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
`chapter_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '章节ID' ,
`book_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '书ID' ,
`content`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容' 
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Table structure for `volumes`
-- ----------------------------
DROP TABLE IF EXISTS `volumes`;
CREATE TABLE `volumes` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`book_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '书ID' ,
`name`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '卷名称' ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Table structure for `xbaas`
-- ----------------------------
DROP TABLE IF EXISTS `xbaas`;
CREATE TABLE `xbaas` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`drive`  tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1 leancloud' ,
`table`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '表名' ,
`oid`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'id' ,
`rid`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '第三方关联ID' ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;