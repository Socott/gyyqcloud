/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.53 : Database - longygo
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `lsg_expert` */

DROP TABLE IF EXISTS `gyy_expert`;

CREATE TABLE `gyy_expert` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '专家id',
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '专家姓名',
  `province` varchar(15) NOT NULL DEFAULT '' COMMENT '省市',
  `city` varchar(15) NOT NULL DEFAULT '' COMMENT '城市',
  `cate_id` varchar(100) NOT NULL DEFAULT '' COMMENT '专家分类id',
  `tags` varchar(100) NOT NULL DEFAULT '' COMMENT '职业标签,格式为逗号隔开',
  `work_year` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '职业工龄',
  `introduction` varchar(300) NOT NULL DEFAULT '' COMMENT '简介',
  `advantage` varchar(300) NOT NULL DEFAULT '' COMMENT '技术优势',
  `cases` varchar(500) NOT NULL DEFAULT '' COMMENT '主要成果案例',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态: 0正常 -1已删除',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '职称',
  `head` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Table structure for table `lsg_expert_appointment` */

DROP TABLE IF EXISTS `gyy_expert_appointment`;

CREATE TABLE `gyy_expert_appointment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '预约id',
  `expert_id` int(11) NOT NULL DEFAULT '0' COMMENT '专家id',
  `situation` varchar(1000) NOT NULL DEFAULT '' COMMENT '预约人当前情况',
  `demand` varchar(1000) NOT NULL DEFAULT '' COMMENT '预约人的需求',
  `budget` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '预约人的预算',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '截止时间',
  `name` varchar(15) NOT NULL DEFAULT '' COMMENT '预约人姓名',
  `tel` bigint(20) NOT NULL DEFAULT '0' COMMENT '电话',
  `company` varchar(30) NOT NULL DEFAULT '' COMMENT '单位',
  `province` varchar(15) NOT NULL DEFAULT '' COMMENT '省市',
  `city` varchar(15) NOT NULL DEFAULT '' COMMENT '城市',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态: 0已预约 1已结束 -1已删除',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Table structure for table `lsg_expert_category` */

DROP TABLE IF EXISTS `gyy_expert_category`;

CREATE TABLE `gyy_expert_category` (
  `cate_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '分类名称',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态: 0正常 -1已删除',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='专家分类表';

INSERT INTO `gyy_module` (moduleid,module,NAME,moduledir,linkurl,listorder,ismenu) VALUES (27,'expert','专家','expert','http://www.gyy.com/expert/',27,1);

INSERT INTO `gyy_setting` (item,item_key,item_value)  VALUES (27,'pagesize',20),(27,'thumb_width',100),(27,'thumb_height',100);
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
