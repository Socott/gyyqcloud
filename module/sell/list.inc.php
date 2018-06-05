<?php 
defined('IN_DESTOON') or exit('Access Denied');
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

$condition = 'status=3';
//星级
if ($vip) $condition .= " AND vip=$vip";
//分类
if ($typeid && $typeid != '-1') $condition .= " AND typeid=$typeid";
//搜索
$input = trim($input);
if ($input) $condition .= " and (locate('{$input}',company) or locate('{$input}',title))";

$c_condition = '1';
//公司类型
if ($type && $type != '全部') {
    $type = rtrim($type, ',');
    $type = str_replace(',', "','", $type);
    $c_condition .= " and type in('$type')";
}
//公司规模
if ($size && $size != '全部') {
    $size = rtrim($size, ',');
    $size = str_replace(',', "','", $size);
    $c_condition .= " and size in('$size')";
}
//所在地区
if ($area) {
    $sql = "select arrchildid from {$db->pre}area where areaid={$area}";
    $r = $db->get_one($sql);
    if ($r) $condition .= " and areaid in({$r})";
}

if ($c_condition != '1') {
    $sql = "select username from {$db->pre}company where $c_condition";
    $r = $db->query($sql);
    while ($row = $db->fetch_array($r)) {
        $res[] = $row['username'];
    }

    $res = implode("','", $res);
    $condition .= " and username in('$res')";
}

//时间排序
$createTimeOrder = $endtimeOrder = 'desc';

if ($create_time) $createTimeOrder = $create_time;
if ($endtime) $endtimeOrder = $endtime;
$orderby = "editdate $createTimeOrder";

if($catid)
$condition .= ($CAT['child']) ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
if($cityid) {
	$areaid = $cityid;
	$ARE = $AREA[$cityid];
	$condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
	$items = $db->count($table, $condition, $CFG['db_expires']);
} else {
//	if($page == 1) {
//		$items = $db->count($table, $condition, $CFG['db_expires']);
//		if($items != $CAT['item']) {
//			$CAT['item'] = $items;
//			if($catid)
//			$db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
//		}
//	} else {
//		$items = $CAT['item'];
//	}
    $items = $db->count($table, $condition, $CFG['db_expires']);
    if($items != $CAT['item']) {
        $CAT['item'] = $items;
        if($catid)
        $db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
    }
}
$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
//$pages = listpages($CAT, $items, $page, $pagesize);
$pages = pages($items, $page, $pagesize);
$tags = array();
if($items) {
	$result = $db->query("SELECT ".$MOD['fields']." FROM {$table} WHERE {$condition} ORDER BY ".$orderby." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
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
}
$showpage = 1;
$datetype = 5;
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, $catid, 0, $page);
$template = $CAT['template'] ? $CAT['template'] : ($MOD['template_list'] ? $MOD['template_list'] : 'list');
include template($template, $module);
?>