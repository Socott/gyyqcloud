<?php 
defined('IN_DESTOON') or exit('Access Denied');$CAT['moduleid']=5; $moduleid=5;
//if(!$CAT || $CAT['moduleid'] != $moduleid) include load('404.inc');
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
$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);
$tags = array();

//if($items) {
	$result = $db->query("SELECT ".$MOD['fields'].",thumb,keyword FROM {$table} WHERE thumb<>'' and {$condition} ORDER BY ".$MOD['order']." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
	while($r = $db->fetch_array($result)) {
		$r['adddate'] = timetodate($r['addtime'], 5);
		$r['editdate'] = timetodate($r['edittime'], 5);
		////if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
		$r['alt'] = $r['title'];
		$r['title'] = set_style($r['title'], $r['style']);
		$r['linkurl'] = $MOD['linkurl'].$r['linkurl'];
		$tags[] = $r;
	}
	$db->free_result($result);
//}
//企业类型
$rs = $db -> get_one("select item_value from {$db->pre}setting where item=2 and item_key='com_type'");
$com_type=explode("|",$rs['item_value']);
//企业规模
$rs = $db -> get_one("select item_value from {$db->pre}setting where item=2 and item_key='com_size'");
$com_size=explode("|",$rs['item_value']);
//经营方式
$rs = $db -> get_one("select item_value from {$db->pre}setting where item=2 and item_key='com_mode'");
$com_mode=explode("|",$rs['item_value']);
//所有分类
$category="";
$parentid=$catid?$catid:0;
$rs = $db -> query("select catname,catid from {$db->pre}category where moduleid=$moduleid and parentid=$parentid ");
while ($r = $db->fetch_array($rs)){
    $category[] = $r;
}

$showpage = 1;
$datetype = 5;
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, $catid, 0, $page);
$template = $CAT['template'] ? $CAT['template'] : 'list';
include template($template, $module);
?>