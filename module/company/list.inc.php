<?php 
defined('IN_DESTOON') or exit('Access Denied');$CAT['moduleid']=5; $moduleid=5;
if(!$CAT || $CAT['moduleid'] != $moduleid) include load('404.inc');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if($MOD['list_html']) {
	$html_file = listurl($CAT, $page);
	if(is_file(DT_ROOT.'/'.$MOD['moduledir'].'/'.$html_file)) d301($MOD['linkurl'].$html_file);
}
if(!check_group($_groupid, $MOD['group_list']) || !check_group($_groupid, $CAT['group_list'])) include load('403.inc');
unset($CAT['moduleid']);
extract($CAT);
$maincat = get_maincat($child ? $catid : $parentid, $moduleid);
$condition = "groupid>5 and catids like '%,".$catid.",%'";
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


require DT_ROOT.'/include/post.func.php';
include load('search.lang');
$MS = cache_read('module-2.php');
$modes = explode('|', $L['choose'].'|'.$MS['com_mode']);
$types = explode('|', $L['choose'].'|'.$MS['com_type']);
$sizes = explode('|', $L['choose'].'|'.$MS['com_size']);
$vips = array($L['vip_level'], VIP, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
isset($mode) && isset($modes[$mode]) or $mode = 0;
isset($type) && isset($types[$type]) or $type = 0;
isset($size) && isset($sizes[$size]) or $size = 0;
isset($vip) && isset($vips[$vip]) or $vip = 0;
$category_select = ajax_category_select('catid', $L['all_category'], $catid, $moduleid);
$area_select = ajax_area_select('areaid', $L['all_area'], $areaid);
$mode_select = dselect($modes, 'mode', '', $mode);
$type_select = dselect($types, 'type', '', $type);
$size_select = dselect($sizes, 'size', '', $size);
$vip_select = dselect($vips, 'vip', '', $vip);







$LETTER = array('A', 'V', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);
$tags = $_tags = $ids = array();
if($items) {
	$result = $db->query("SELECT ".$MOD['fields']." FROM {$table} WHERE {$condition} ORDER BY ".$MOD['order']." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
	while($r = $db->fetch_array($result)) {
		//if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
		$tags[] = $r;
	}
}

/**
	$result = $db->query("SELECT  userid,lsguserid FROM  lsg_member ");
	while($r = $db->fetch_array($result)) {
		 $userid=$r['userid'];
		 $lsguserid=$r['lsguserid'];
		 $result2 = $db->query("SELECT  userid,lsguserid FROM  lsg_company ");
		 while($r2 = $db->fetch_array($result2)) 
		 {
			$userid2=$r2['userid'];
			$lsguserid2=$r2['lsguserid'];
			if($userid2==$lsguserid)
			{echo "update lsg_company set userid=".$userid." where userid=".$userid2."<br>";
				$result2 = $db->query("update lsg_company set userid=".$userid." where userid=".$userid2);
			} 
		 }
	}
**/






foreach($tags as $k=>$v)
{
	//and username='".$v['username']."'
	$result = $db->query("SELECT title,price,thumb,linkurl,homepage FROM  lsg_mall WHERE thumb<>'' and username<>'".$v['username']."'  order by RAND() desc limit 3");
		while($r = $db->fetch_array($result)) {
			$tags[$k]['product'][]= $r;
		}
	$db->free_result($result);
}

$showpage = 1;
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, $catid, 0, $page);
$template = $CAT['template'] ? $CAT['template'] : 'list';
include template($template, $module);
?>