/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : myphp

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 02/04/2020 21:17:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `admin_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_pass` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (19, 'admin', 'admin');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cate_id` int(2) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `writer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, 1, 'Less is More ', 'Less is More ', 'admin');
INSERT INTO `article` VALUES (2, 16, '漏洞预警 | ThinkPHP5远程命令执行漏洞', '*本文中涉及到的相关漏洞已报送厂商并得到修复，本文仅限技术研究与讨论，严禁用于非法用途，否则产生的一切后果自行承担。\r\n\r\n前言\r\nThinkPHP是一个免费开源的，快速、简单的面向对象的轻量级PHP开发框架，是为了敏捷WEB应用开发和简化企 业应用开发而诞生的。由于其简单易用，国内用户众多。\r\n\r\n2019年1月11日ThinkPHP团队发布了版本更新，本次更新包含了一个可能GetShell的安全更新，具体内容为改进Request类的method方法。\r\n\r\n漏洞描述\r\nThinphp团队在实现框架中的核心类Requests的method方法实现了表单请求类型伪装，默认为$_POST[‘_method’]变量，却没有对$_POST[‘_method’]属性进行严格校验，可以通过变量覆盖掉Requets类的属性并结合框架特性实现对任意函数的调用达到任意代码执行的效果。\r\n\r\n漏洞危害\r\n在未经授权的情况下远程攻击者构造特殊的请求可以在PHP上下文环境中执行任意系统命令，甚至完全控制网站，造成数据泄露，网站内容被修改。\r\n\r\n影响范围\r\n受影响版本：ThinkPHP 5.0.x\r\n\r\n不受影响版本：ThinkPHP 5.0.24\r\n\r\n漏洞分析\r\n本次更新的关键commit如下：\r\n\r\n图片1.png\r\n\r\n文件路径为：library/think/Request.php ,在修复前的文件526行中，当存在$_POST[‘_method’]变量是将会执行 $this->{$this->method}($_POST)，当$_POST[‘_method’]为__construct时及等价于调用$this->_construct($_POST)_construct函数实现如下：\r\n\r\n在该函数中，当传入的参数中的key为该Requests属性，将value赋值给该属性，由于key可控制，可以到达属性覆盖的效果。\r\n\r\n图片2.png\r\n\r\n漏洞复现\r\n通过git 可以快速搭建环境\r\n\r\ngit clone https://github.com/top-think/think\r\n\r\ngit checkout v5.0.23\r\n\r\ncd think\r\n\r\ngit clone https://github.com/top-think/framework thinkphp\r\n\r\ncd thinkphp\r\n\r\ngit checkout v5.0.23\r\n\r\n通过覆盖filter属性即可达到调用任意函数的效果。\r\n\r\n5.0.23且设置了app_debug=true复现截图如下：\r\n\r\n图片3.png\r\n\r\nPayload如下\r\n\r\n_method=__construct&filter[]=system&server[REQUEST_METHOD]=whoami\r\n\r\n在早期5.0的版本过滤器的调用有差别payload也会不同\r\n\r\n修复方案\r\n1.升级到5.0.24版本\r\n\r\n2.或通过修改以下代码来缓解漏洞：\r\n\r\n编辑 library/think/Request.php 文件， 查找:\r\n\r\n$this->method = strtoupper($_POST[Config::get(\'var_method\')]);\r\n\r\n$this->{$this->method}($_POST);\r\n\r\n修改为如下\r\n\r\n$method = strtoupper($_POST[Config::get(\'var_method\')]);\r\n\r\nif (in_array($method, [\'GET\', \'POST\', \'DELETE\', \'PUT\', \'PATCH\'])) {\r\n\r\n    $this->method = $method;\r\n\r\n    $this->{$this->method}($_POST);\r\n\r\n} else {\r\n\r\n    $this->method = ‘POST’;\r\n\r\n}\r\n\r\nunset($_POST[Config::get(\'var_method\')]);\r\n\r\n参考\r\nhttp://www.thinkphp.cn/topic/60992.html\r\n\r\nhttps://github.com/top-think/framework/commit/4a4b5e64fa4c46f851b4004005bff5f3196de003', 'admin');

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate`  (
  `cate_id` int(2) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cate_pid` int(2) NOT NULL DEFAULT 0,
  `cate_level` int(2) DEFAULT 1,
  PRIMARY KEY (`cate_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES (1, 'Linux', 0, 1);
INSERT INTO `cate` VALUES (2, '安全开发', 0, 1);
INSERT INTO `cate` VALUES (4, '渗透测试', 0, 1);
INSERT INTO `cate` VALUES (5, 'SQL注入', 4, 2);
INSERT INTO `cate` VALUES (16, '命令执行', 4, 2);
INSERT INTO `cate` VALUES (15, 'PHP', 2, 2);

SET FOREIGN_KEY_CHECKS = 1;
