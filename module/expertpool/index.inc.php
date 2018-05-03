<?php
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!check_group($_groupid, $MOD['group_index'])) include load('403.inc');
$maincat = get_maincat(0, $moduleid, 1);
$seo_file = 'index';
include DT_ROOT.'/include/seo.inc.php';
$destoon_task = "moduleid=$moduleid&html=index";
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, 0, 0, $page);

$year=date('Y',time());
$month=date('m',time());
$date=date('d',time());

$goods_count_add=$db->count($DT_PRE.'expertpool', " adddate='".date('Y-m-d',time())."'", 1800)*205;
$goods_count_add=number_format($goods_count_add);
$goods_count_total=$db->count($DT_PRE.'expertpool', '1', 1800)*1050;
$goods_count_total=number_format($goods_count_total);
include template('index', $module);
?>