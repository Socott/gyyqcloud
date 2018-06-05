<?php
defined('DT_ADMIN') or exit('Access Denied');
$menu = array(
	array("添加服务", "?moduleid=$moduleid&action=add"),
	array("服务列表", "?moduleid=$moduleid"),
	array("预约列表", "?moduleid=$moduleid&file=order"),
	array("审核服务", "?moduleid=$moduleid&action=check"),
	array("服务分类", "?file=category&mid=$moduleid"),
	//array("更新数据", "?moduleid=$moduleid&file=html"),
	//array("模块设置", "?moduleid=$moduleid&file=setting"),
);
?>