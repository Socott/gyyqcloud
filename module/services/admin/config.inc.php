<?php
defined('DT_ADMIN') or exit('Access Denied');
$MCFG['module'] = 'services';
$MCFG['name'] = '服务';
$MCFG['author'] = 'LONGYGO.COM';
$MCFG['homepage'] = 'www.ssss.com';
$MCFG['copy'] = false;
$MCFG['uninstall'] = false;
$MCFG['moduleid'] = 24;

$RT = array();
$RT['file']['index'] = '服务管理';
$RT['file']['order'] = '订单管理';
$RT['file']['html'] = '更新网页';

$RT['action']['index']['add'] = '添加服务';
$RT['action']['index']['edit'] = '修改服务';
$RT['action']['index']['relate'] = '关联服务';
$RT['action']['index']['delete'] = '删除服务';
$RT['action']['index']['check'] = '审核服务';
$RT['action']['index']['expire'] = '下架服务';
$RT['action']['index']['onsale'] = '上架服务';
$RT['action']['index']['reject'] = '未通过';
$RT['action']['index']['recycle'] = '回收站';
$RT['action']['index']['move'] = '移动服务';
$RT['action']['index']['level'] = '信息级别';

$CT = 1;
?>