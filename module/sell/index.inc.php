<?php
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!check_group($_groupid, $MOD['group_index'])) include load('403.inc');
//$typeid = isset($typeid) ? intval($typeid) : 99;
//isset($TYPE[$typeid]) or $typeid = 99;
$dtype = $typeid != 99 ? " AND typeid=$typeid" : '';
$maincat = get_maincat($catid ? $CAT['parentid'] : 0, $moduleid);
$seo_file = 'index';
include DT_ROOT.'/include/seo.inc.php';

if($catid) $seo_title = $seo_catname.$seo_title;
if($typeid != 99) $seo_title = $TYPE[$typeid].$seo_delimiter.$seo_title;
if($page == 1) $head_canonical = $MOD['linkurl'];
$destoon_task = "moduleid=$moduleid&html=index";
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].mobileurl($moduleid, 0, 0, $page);

//所有地区
$r = $db -> query("select areaid,areaname from {$db->pre}area where parentid=0");
while ($rs = $db->fetch_array($r)){
    $area[] = $rs;
}

$member_set = include DT_ROOT.'/file/setting/module-2.php';
$com_size = explode('|', $member_set['com_size']);//企业规模
$com_type = explode('|', $member_set['com_type']);//企业类型


$condition = 'status=3';
//分类
if ($typeid && $typeid != '-1') $condition .= " AND typeid=$typeid";
//搜索
$input = trim($input);
if ($input) $condition .= " and (locate('{$input}',company) or locate('{$input}',title))";

$c_condition = '1';
//公司类型
if ($comTypefilter && $comTypefilter != '全部') {
    $comTypefilter = rtrim($comTypefilter, ',');
    $comTypefilter = str_replace(',', "','", $comTypefilter);
    $c_condition .= " and type in('$comTypefilter')";
}
//公司规模
if ($empfilter && $empfilter != '全部') {
    $empfilter = rtrim($empfilter, ',');
    $empfilter = str_replace(',', "','", $empfilter);
    $c_condition .= " and size in('$empfilter')";
}

if($areaid) {//地区
    $condition .= $ARE['child'] ? " AND areaid IN (" . $ARE['arrchildid'] . ")" : " AND areaid=$areaid";
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

if ($addtime) {
    if($addtime == 'descs'){
        $createTimeOrder = 'desc';
    }else{
        $createTimeOrder = $addtime;
    }

}
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
    $items = $db->count($table, $condition, $CFG['db_expires']);
    if($items != $CAT['item']) {
        $CAT['item'] = $items;
        if($catid)
            $db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
    }
}
$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
//分页
//$pagesize = $MOD['pagesize'];//每页
//$offset = ($page-1)*$pagesize;//每页开始
//$total = ceil($items/$pagesize);//总页数
//if($page < 1 || $page > $total) $page = 1;
$pages = listpages($CAT, $items, $page, $pagesize);
$pages = pages($items, $page, $pagesize);

$showpage = 1;
$tags = array();
if($items) {
    $result = $db->query("SELECT ".$MOD['fields']." FROM {$table} WHERE {$condition} ORDER BY ".$orderby." LIMIT {$offset},{$pagesize}", ($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
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
}

//$tags=tag("moduleid=$moduleid&condition=status=3$dtype&areaid=$cityid&catid=$catid&pagesize=".$MOD[pagesize]."&page=$page&showpage=1&datetype=5&order=".$MOD[order]."&fields=".$MOD[fields]."&lazy=$lazy&template=null&debug=0");
include template($MOD['template_index'] ? $MOD['template_index'] : 'index', $module);
?>