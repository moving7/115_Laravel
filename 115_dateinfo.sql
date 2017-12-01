
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 115_dateinfo
-- ----------------------------
DROP TABLE IF EXISTS `115_dateinfo`;
CREATE TABLE `115_dateinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `u_id` int(11) DEFAULT NULL,
  `start_time` date DEFAULT NULL COMMENT '开始时间',
  `end_time` date DEFAULT NULL COMMENT '结束时间',
  `event_info` text COMMENT '事件',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示 0不展示 1展示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 115_dateinfo
-- ----------------------------
INSERT INTO `115_dateinfo` VALUES ('1', null, '2017-11-01', '2017-11-03', '月度总结', '1511858998', '1');
INSERT INTO `115_dateinfo` VALUES ('2', null, '2017-11-06', '2017-11-08', '去分公司开研讨会', '1511859305', '1');
INSERT INTO `115_dateinfo` VALUES ('3', null, '2017-11-28', null, '加入115团队', '1511929305', '1');
INSERT INTO `115_dateinfo` VALUES ('4', null, '2017-11-20', null, '回家做饭', null, '0');
INSERT INTO `115_dateinfo` VALUES ('5', null, '2017-11-20', null, '测试数据', null, '0');
INSERT INTO `115_dateinfo` VALUES ('6', null, '2017-11-20', null, '测试数据', '1512008499', '1');
INSERT INTO `115_dateinfo` VALUES ('7', null, '2017-11-15', '2017-11-24', '测试多天', '1512008523', '1');
INSERT INTO `115_dateinfo` VALUES ('8', null, '2017-12-02', '2017-12-03', '去超市买菜', '1512034034', '1');
INSERT INTO `115_dateinfo` VALUES ('9', null, '2017-12-08', null, '发邮件', '1512111315', '1');
INSERT INTO `115_dateinfo` VALUES ('10', null, '2017-12-15', '2017-12-16', '充值公交卡', '1512111329', '1');
