<?php
defined('DT_ADMIN') or exit('Access Denied');
$menu = array(
	array("添加专家", "?moduleid=$moduleid&action=add"),
	array("专家列表", "?moduleid=$moduleid"),
	array("添加分类", "?moduleid=$moduleid&action=add&file=category"),
	array("分类列表", "?file=category&moduleid=$moduleid"),
    array("预约列表 ", "?moduleid=$moduleid&file=appointment"),
	//array("更新数据", "?moduleid=$moduleid&file=html"),
	//array("模块设置", "?moduleid=$moduleid&file=setting"),
);
?>