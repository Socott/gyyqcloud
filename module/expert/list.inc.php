<?php 
defined('IN_DESTOON') or exit('Access Denied');$CAT['moduleid']=5; $moduleid=5;
if(!$CAT || $CAT['moduleid'] != $moduleid) include load('404.inc');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if($MOD['list_html']) {
	$html_file = listurl($CAT, $page);
	if(is_file(DT_ROOT.'/'.$MOD['moduledir'].'/'.$html_file)) d301($MOD['linkurl'].$html_file);
}
if(!check_group($_groupid, $MOD['group_list']) || !check_group($_groupid, $CAT['group_list'])) include load('403.inc');
$CP = $MOD['cat_property'] && $CAT['property'];
if($MOD['cat_property'] && $CAT['property']) {
	require DT_ROOT.'/include/property.func.php';
	$PPT = property_condition($catid);
}
unset($CAT['moduleid']);
extract($CAT);

$maincat = get_maincat($child ? $catid : $parentid, $moduleid);
$condition = 'status!=0';
if(!empty($catid)) 
$condition .= ($CAT['child']) ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
if($cityid) {
	$areaid = $cityid;
	$ARE = $AREA[$cityid];
	$condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
	$items = $db->count($table, $condition, $CFG['db_expires']);
} else {
	if($page == 1) {
		$items = $db->count($table, $condition, $CFG['db_expires']);
		if($items != $CAT['item']) {
			$CAT['item'] = $items;
			$db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
		}
	} else {
		$items = $CAT['item'];
	}
}
$pagesize = $MOD['pagesize'] ? $MOD['pagesize'] : 20;
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);
$tags = array();

$r = $db->query("SELECT cate_id,title FROM {$db->pre}expert_category WHERE status=0");
while ($row = $db->fetch_array($r)) {
    $arr[$row['cate_id']] = $row['title'];
}

$result = $db->query("SELECT * FROM {$table} WHERE status=0 ORDER BY create_time desc LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
while($r = $db->fetch_array($result)) {
    $r['cate_name'] = cate_id_name($r['cate_id'], $arr);
    $tags[] = $r;
}
$db->free_result($result);

$showpage = 1;
$datetype = 5;
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, $catid, 0, $page);
$template = $CAT['template'] ? $CAT['template'] : 'list';
include template($template, $module);
?>