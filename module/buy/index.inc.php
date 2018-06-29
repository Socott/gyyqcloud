<?php
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
$typeid=$_GET['typeid'];
//所有分类
global $db;
$rs = $db -> query("select catid,catname from {$db->pre}category where moduleid=$moduleid and parentid=0");
while ($r = $db->fetch_array($rs)){
    $category[] = $r;
}
$empfilter = isset($empfilter) ? $empfilter : '0';
$comTypefilter = isset($comTypefilter) ? $comTypefilter : '0';
$addtime = isset($addtime) ? $addtime : 'desc';

$condition = 'status=3 ';
if($catid) {//分类
    $condition .= $CAT['child'] ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
}
if($areaid) {//地区
    $condition .= $ARE['child'] ? " AND areaid IN (" . $ARE['arrchildid'] . ")" : " AND areaid=$areaid";
}

if($empfilter){//企业规模
    $r = $db -> query("select company from {$db->pre}company where size='$empfilter'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}
if($comTypefilter){//企业类型
    $r = $db -> query("select company from {$db->pre}company where mode='$comTypefilter'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    $condition .= " AND company IN ($company)";
}
if($addtime){
    if($addtime == 'descs'){
        $MOD['order'] = " addtime desc";
    }else{
        $MOD['order'] = " addtime $addtime";
    }
}

$member_set = include DT_ROOT.'/file/setting/module-2.php';
$com_size = explode('|', $member_set['com_size']);//企业规模
$com_type = explode('|', $member_set['com_type']);//企业类型
if ($typeid && $typeid != '-1') $condition .= " AND typeid=$typeid";
//求购信息条数
$t1 = microtime(true);
$items = $db->count($table, $condition, $CFG['db_expires']);
//$number = $db -> get_one("select count(itemid) as number from {$db->pre}buy_6 where  $condition");
$t2 = microtime(true);
$usetime = round(($t2-$t1)*1000,2);

//分页
$pagesize = $MOD['pagesize'];//每页
$offset = ($page-1)*$pagesize;//每页开始
$total = ceil($items/$pagesize);//总页数
if($page < 1 || $page > $total) $page = 1;

//$pages = listpages($CAT, $items, $page, $pagesize);
//var_dump($pages);
$tags = array();
$result = $db->query("SELECT * FROM {$table} WHERE {$condition} ORDER BY ".$MOD['order']." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
while($r = $db->fetch_array($result)) {
//    $r['adddate'] = timetodate($r['addtime'], 5);
//    $r['editdate'] = timetodate($r['edittime'], 5);
    //if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
    $r['alt'] = $r['title'];
    $r['catname']  = $db->get_one("select catname from {$db->pre}category where catid=".$r['catid']);
    $r['title'] = set_style($r['title'], $r['style']);
    $r['linkurl'] = $MOD['linkurl'].$r['linkurl'];
    $tags[] = $r;
}

//所有地区
$r = $db -> query("select areaid,areaname from {$db->pre}area where parentid=0");
while ($rs = $db->fetch_array($r)){
    $area[] = $rs;
}



if(!check_group($_groupid, $MOD['group_index'])) include load('403.inc');
$typeid = isset($typeid) ? intval($typeid) : 99;
isset($TYPE[$typeid]) or $typeid = 99;
$dtype = $typeid != 99 ? " AND typeid=$typeid" : '';
$maincat = get_maincat($catid ? $CAT['parentid'] : 0, $moduleid);
$seo_file = 'index';
include DT_ROOT.'/include/seo.inc.php';
if($catid) $seo_title = $seo_catname.$seo_title;
if($typeid != 99) $seo_title = $TYPE[$typeid].$seo_delimiter.$seo_title;
if($page == 1) $head_canonical = $MOD['linkurl'];
$destoon_task = "moduleid=$moduleid&html=index";
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, 0, 0, $page);
include template($MOD['template_index'] ? $MOD['template_index'] : 'index', $module);
?>