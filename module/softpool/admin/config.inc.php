<?php
defined('DT_ADMIN') or exit('Access Denied');
$MCFG['module'] = 'softpool';
$MCFG['name'] = '软件池';
$MCFG['author'] = 'LONGYGO.COM';
$MCFG['homepage'] = 'www.ssss.com';
$MCFG['copy'] = false;
$MCFG['uninstall'] = true;
$MCFG['moduleid'] = 23;

$RT = array();
$RT['file']['index'] = '软件管理';
$RT['file']['order'] = '订单管理';
$RT['file']['html'] = '更新网页';

$RT['action']['index']['add'] = '添加软件';
$RT['action']['index']['edit'] = '修改软件';
$RT['action']['index']['relate'] = '关联软件';
$RT['action']['index']['delete'] = '删除软件';
$RT['action']['index']['check'] = '审核软件';
$RT['action']['index']['expire'] = '下架软件';
$RT['action']['index']['onsale'] = '上架软件';
$RT['action']['index']['reject'] = '未通过';
$RT['action']['index']['recycle'] = '回收站';
$RT['action']['index']['move'] = '移动软件';
$RT['action']['index']['level'] = '信息级别';

$CT = 1;
?>