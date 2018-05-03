<?php
set_time_limit(0);
require 'config.inc.php';
require '../common.inc.php';  
include_once DT_ROOT.'/simple_html_dom.php';
header("Content-type: text/html; charset=GBK");  
$table_name="";
function findCompanyProductList($listUrl="")
{
	set_time_limit(0);
	global $db;
	include_once DT_ROOT.'/simple_html_dom.php';
	$html=file_get_html($listUrl);
	if(!$html) return false;
    $have_collection=$html->find('.product_list li');
	$arrs=array();
	if($have_collection)
	{
		$i=0;
		
		foreach($have_collection as $element)
		{
			$company_url  =  $element->href;
			$dom=file_get_html_dom($element->innertext);
			foreach($dom->find('.text a') as $e1)
			{
				$arrs[$i]['text']=$e1->innertext;
				$arrs[$i]['text']  =  iconv("gbk", "utf-8//ignore", $arrs[$i]['text']);
			}
			foreach($dom->find('.pic a') as $e2)
			{
				$arrs[$i]['href']=$e2->href;
			}
			foreach($dom->find('.pic img') as $e3)
			{
				$arrs[$i]['src']=$e3->src;
			}
			$i++;
	   }
	   return $arrs;
	}else{
		return false;
	}
}

function findCompanyProductDetail($listUrl="")
{
	set_time_limit(0);
	global $db;
	include_once DT_ROOT.'/simple_html_dom.php';
	$html=file_get_html($listUrl);
	if(!$html) return false;
    $descript=$html->find('.product_info ul');
	$product_details=$html->find('.product_details');
	$detail_1="";
	$detail_2="";
	if($descript)
	{
		foreach($descript as $element)
		{
			$detail_1  =  $element->innertext;
			$detail_1  =  iconv("gbk", "utf-8//ignore", $detail_1);
	    }
		foreach($product_details as $element)
		{
			$detail_2  =  $element->innertext;
			$detail_2  =  iconv("gbk", "utf-8//ignore", $detail_2);
	    }
		$arr['detail_1']=$detail_1;
		$arr['detail_2']=$detail_2;
	   return $arr;
	}else{
		return false;
	}
}
//var_dump(findCompanyProductList("http://www.taojindi.com/4243311/center"));
//exit;
//findCompanyProductDetail("http://www.taojindi.com/product/195328230.html");
start();
function start()
{
	global $db;
	$table_name="lsg_cj_company_4";
	$trade_name = iconv("gbk", "utf-8//ignore", '°ü×°');
   	$result = $db->query("SELECT id,company_url,company_name FROM  {$table_name} where is_get_product=0 and is_import=1 limit 100");
	$row=array();
	while($r = $db->fetch_array($result)) 
	{	
	    $row[]=$r;
	}
	$db->free_result($result);
	foreach($row as $k=>$v)
	{ 
			$result=findCompanyProductList($v['company_url']."/center");

			if($result)
			{
				foreach($result as $kk=>$vv)
				{
			  		$detail=findCompanyProductDetail($vv[href]);
			  		if(!$detail){$detail['detail_1']='--';$detail['detail_2']='--';}
					$db->query("delete from lsg_cj_procuct_1 where company_name='{$v[company_name]}' and company_url='{$v[company_url]}' and product_name='{$vv[text]}' and product_url='{$vv[href]}' and thumb='{$vv[src]}'");
					
					$db->query("insert into lsg_cj_procuct_1(company_name,company_url,product_name,product_url,thumb,detail_1,detail_2) values('{$v[company_name]}','{$v[company_url]}','{$vv[text]}','{$vv[href]}','{$vv[src]}','{$detail[detail_1]}','{$detail[detail_2]}')");
				}
				$db->query("update {$table_name} set is_get_product=1 where id=".$v['id']);
			}
			else
			{
			$db->query("update {$table_name} set is_get_product=1 where id=".$v['id']);
			continue;
			}
	}
	$db->query("delete FROM  {$table_name} where is_get_product=1 and is_import=1 ");
			echo "<script>location='import-product.php';</script>";
}
?>