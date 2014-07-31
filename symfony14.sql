/*
 Navicat Premium Data Transfer

 Source Server         : local 
 Source Server Type    : MySQL
 Source Server Version : 50617
 Source Host           : localhost
 Source Database       : symfony14

 Target Server Type    : MySQL
 Target Server Version : 50617
 File Encoding         : utf-8

 Date: 07/31/2014 11:46:00 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `blog_article`
-- ----------------------------
BEGIN;
INSERT INTO `blog_article` VALUES ('1', 'Test article', 'Test content over here', '2014-07-31 10:01:54'), ('3', 'Test article #3', 'Test #3', '2014-07-31 11:25:30');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
