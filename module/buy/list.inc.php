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
/**
 * 分类筛选条件
 */
if($classification){
    if(strpos($classification,',')===false){//分类单选
        $catid = $classification;
        if($catid != -1){$CAT = get_cat($catid);}//分类不为全部
        if($catid && $catid != -1) {$condition .= $CAT['child'] ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";}
    }else{//分类多选
        $classification = substr($classification, 1);
        $catid = explode(",",$classification);
        foreach ($catid as $v){
            if( $v == -1) {break;}else{$C[] = get_cat($v);}//分类包含全部
        }
        foreach ($C as $v){//分类未包含全部
            $v['child'] ? $arrchildid.=$v['arrchildid'].',':$catids .= $v.',';
        }
        if(isset($arrchildid)){//假如分类有子类
            $condition .= " AND catid IN (".rtrim($arrchildid, ",").")";
        }
        if(isset($catids)){//假如分类没有子类
            $catids = rtrim($catids, ",");
            $condition .= " AND catid= ".str_replace(",","OR catid=","$catids");
        }
    }
}
unset($companys);
/**
 * 企业类型筛选条件
 */
if($classType){
    if(strpos($classType,',')===false) {//企业类型单选
        if($classType != '全部'){//当不为全部时
            $company = get_company($classType);//获取公司信息
            $condition .= " AND company IN ($company)";
        }
    }else{//企业类型多选
        $classType = rtrim($classType,",");
        $types = explode(",",$classType);
        foreach ($types as $v){
            if($v == '全部'){break;}
            else{//当不为全部时
                if(get_company($v)) {
                    $companys .= get_company($v).',';
                }
            }
        }
        $companys = rtrim($companys,',');//所有公司集合
        if($companys)
        $condition .= " AND company IN ($companys)";
    }
}
unset($companys);
/**
 * @param $type
 * @return bool|string
 * 根据公司类型获取公司名称
 */
function get_company($type){
    global  $db;
    $company = '';
    $r = $db -> query("select company from {$db->pre}company where type='$type'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    if($company){ return $company;}else{return '';}
}

/**
 * 经营方式筛选
 */
if($classMode){
    if(strpos($classMode,',')===false) {//企业经营方式单选
        if($classMode != '全部'){//当不为全部时
            $company = get_company_2($classMode);//获取公司信息
            $condition .= " AND company IN ($company)";
        }
    }else{//企业类型多选
        $classMode = rtrim($classMode,",");
        $modes = explode(",",$classMode);
        foreach ($modes as $v){
            if($v == '全部'){break;}
            else{//当不为全部时
                if(get_company_2($v)) {
                    $companys .= get_company_2($v).',';
                }
            }
        }
        $companys = rtrim($companys,',');//所有公司集合
        if($companys)
        $condition .= " AND company IN ($companys)";
    }
}
/**
 * @param $type
 * @return bool|string
 * 根据公司经营方式获取公司名称
 */

function get_company_2($mode){
    global  $db;
    $company = '';
    $r = $db -> query("select company from {$db->pre}company where mode='$mode'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    if($company){ return $company;}else{return '';}
}

/**
 * 企业规模筛选
 */
if($classSize){
    if(strpos($classSize,',')===false) {//企业经营方式单选
        if($classSize != '全部'){//当不为全部时
            $company = get_company_3($classSize);//获取公司信息
            $condition .= " AND company IN ($company)";
        }
    }else{//企业类型多选
        $classSize = rtrim($classSize,",");
        $sizes = explode(",",$classSize);
        foreach ($sizes as $v){
            if($v == '全部'){break;}
            else{//当不为全部时
                if(get_company_3($v)) {
                    $companys .= get_company_3($v).',';
                }
            }
        }
        $companys = rtrim($companys,',');//所有公司集合
        if($companys)
            $condition .= " AND company IN ($companys)";
    }
}
/**
 * @param $size
 * @return bool|string
 * 根据公司规模获取公司名称
 */
function get_company_3($size){
    global  $db;
    $company = '';
    $r = $db -> query("select company from {$db->pre}company where size='$size'");
    while($rs = $db->fetch_array($r)){
        $companys[] = $rs;
    }
    foreach ($companys as $v){
        $company .= ",'".$v['company']."'";
    }
    $company = substr($company,1);
    if($company){ return $company;}else{return '';}
}

if($srm){//是否为大客户srm
    if($srm != '全部'){
        $condition .= " AND company like '%$srm%'";
    }
}
//发布时间排序
if($order){
    $MOD['order'] = "edittime $order";
}
//是否实名认证
if($truename){
    $condition .= " AND truename <> '匿名'";
}
//关键词搜索
if($keyWord){
    $condition .= " AND keyword like '%$keyWord%'";
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