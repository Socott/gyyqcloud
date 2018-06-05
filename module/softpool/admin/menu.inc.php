<?php
defined('DT_ADMIN') or exit('Access Denied');
$menu = array(
	array("添加软件", "?moduleid=$moduleid&action=add"),
	array("软件列表", "?moduleid=$moduleid"),
	array("预约列表", "?moduleid=$moduleid&file=order"),
	array("审核软件", "?moduleid=$moduleid&action=check"),
	array("软件分类", "?file=category&mid=$moduleid"),
	//array("更新数据", "?moduleid=$moduleid&file=html"),
	//array("模块设置", "?moduleid=$moduleid&file=setting"),
);
?>