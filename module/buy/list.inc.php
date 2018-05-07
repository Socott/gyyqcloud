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
if($type && !$mode){//企业类型时;
    global $db;
    $r = $db -> query("select company from {$db->pre}company where type='$type'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}
//经营方式
if($mode && !$type){
    $r = $db -> query("select company from {$db->pre}company where mode='$mode'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}
if($type && $mode){
    $r = $db -> query("select company from {$db->pre}company where mode='$mode'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $r = $db -> query("select company from {$db->pre}company where mode='$mode'");
    while($rs = $db->fetch_array($r)){
        $companyss[] = $rs;
    }
    foreach ($companyss as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}
//分类
if($catid) {$condition .= $CAT['child'] ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";}

//企业规模
if($size){
    $r = $db -> query("select company from {$db->pre}company where size='$size'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}

if($order){
    $MOD['order'] = "addtime $order";
}

$cityid = $areaid;
if($cityid) {
	$areaid = $cityid;
	$ARE = $AREA[$cityid];
	$condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
	$items = $db->count($table, $condition, $CFG['db_expires']);
} else {

	$items = $db->count($table, $condition, $CFG['db_expires']);
	if($page == 1) {
		if($items != $CAT['item']) {
			$CAT['item'] = $items;
			if($catid)
			$db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
		}
	} else {
		 $CAT['item'] = $items;
	}
}

$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);
$tags = array();

//if($items)

//{
	$result = $db->query("SELECT * FROM {$table} WHERE {$condition} ORDER BY ".$MOD['order']." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
	while($r = $db->fetch_array($result)) {
		$r['adddate'] = timetodate($r['addtime'], 5);
		$r['editdate'] = timetodate($r['edittime'], 5);
		//if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
		$r['alt'] = $r['title'];
		$r['title'] = set_style($r['title'], $r['style']);
		$r['linkurl'] = $MOD['linkurl'].$r['linkurl'];
		$tags[] = $r;
	}

	$db->free_result($result);
//}

$showpage = 1;
$datetype = 5;
$seo_file = 'list';
include DT_ROOT.'/include/seo.inc.php';
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, $catid, 0, $page);
$template = $CAT['template'] ? $CAT['template'] : ($MOD['template_list'] ? $MOD['template_list'] : 'list');;
include template($template, $module);
?>