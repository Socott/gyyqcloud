<?php
defined('DT_ADMIN') or exit('Access Denied');
$MCFG['module'] = 'expertpool';
$MCFG['name'] = '专家池';
$MCFG['author'] = 'LONGYGO.COM';
$MCFG['homepage'] = 'www.ssss.com';
$MCFG['copy'] = false;
$MCFG['uninstall'] = true;
$MCFG['moduleid'] = 26;

$RT = array();
$RT['file']['index'] = '专家管理';
$RT['file']['order'] = '订单管理';
$RT['file']['html'] = '更新网页';

$RT['action']['index']['add'] = '添加专家';
$RT['action']['index']['edit'] = '修改专家';
$RT['action']['index']['relate'] = '关联专家';
$RT['action']['index']['delete'] = '删除专家';
$RT['action']['index']['check'] = '审核专家';
$RT['action']['index']['expire'] = '下架专家';
$RT['action']['index']['onsale'] = '上架专家';
$RT['action']['index']['reject'] = '未通过';
$RT['action']['index']['recycle'] = '回收站';
$RT['action']['index']['move'] = '移动专家';
$RT['action']['index']['level'] = '信息级别';

$CT = 1;
?>