<?php
set_time_limit(0);
require 'config.inc.php';
require '../common.inc.php';  
include_once DT_ROOT.'/simple_html_dom.php';
header("Content-type: text/html; charset=GBK");  
/**
$url='http://search.taojindi.com/list/cc_2903/';
$parent_name="项目合作";
$parent_name = iconv("gbk", "utf-8//ignore", $parent_name);
$html=file_get_html("");
$class_list=array();
echo "222";
foreach($html->find(".filter-category-less ul li a") as $element)
{
    $trade_url='http://search.taojindi.com'.$element->href;
	$trade_name=preg_replace("/\([^>]+\)/", "", $element->innertext);
	$trade_name = iconv("gbk", "utf-8//ignore", $trade_name);
	$count= $db->count("lsg_cj_trade", " trade_name ='{$trade_name}' and trade_url='{$trade_url}'", 1800);
    if($count==0)
	{
	$sql="insert into lsg_cj_trade(trade_name,trade_url,is_get,parent_trade) values('{$trade_name}','{$trade_url}',0,'{$parent_name}');";
	$db->query($sql);
	}
   array_push($class_list,$trade_url);
}
**/
function findCompanyLinkStepTwo($listUrl="",$trade_name="",$parent_trade="")
{
	set_time_limit(0);
	global $db;
	include_once DT_ROOT.'/simple_html_dom.php';
	$html=file_get_html($listUrl);
    $have_collection=$html->find('.til .title');
	if($have_collection)
	{
		foreach($have_collection as $element)
		{
			$company_url  =  $element->href;
			$company_name = $element->innertext;
			$company_name = iconv("gbk", "utf-8//ignore", $company_name);
			$count= $db->count("lsg_cj_company_2", " company_name ='{$company_name}' and company_url='{$company_url}'", 1800);
			if($count==0)
			{
				$sql="insert into lsg_cj_company_2(company_name,company_url,is_get,trade_name,parent_trade) values('{$company_name}','{$company_url}',0,'{$trade_name}','{$parent_trade}');";
				$db->query($sql);
				$db->free_result($result);
			}
	   }
	   return true;
	}else{
		return false;
	}
}
 function findCompanyLinkStepOne()
 {
	 set_time_limit(0);
	global $db;
    $parent_name="金属矿产";
    $parent_name = iconv("gbk", "utf-8//ignore", $parent_name);
	$url_collection=array();
	$sql="select * from lsg_cj_trade where  id>=471";
//$sql="select * from lsg_cj_trade where parent_trade='{$parent_name}' and id>=452";
	$result=$db->query($sql);
	while($r = $db->fetch_array($result)) { 
		$url_collection[] = $r;
	}
	$db->free_result($result);
	foreach($url_collection as $k=>$v)
	{
		for($i=1;$i<=200;$i++)
		{
			$flag=findCompanyLinkStepTwo($v['trade_url']."?pn=".$i,$v['trade_name'],$v['parent_trade']);
			if(!$flag) $i=200;
		}
	} 
 }
 findCompanyLinkStepOne();