<?php
set_time_limit(0);
require 'config.inc.php';
require '../common.inc.php';  
include_once DT_ROOT.'/simple_html_dom.php';
header("Content-type: text/html; charset=GBK");  
function getCompanyByUrl($url="")
{ 
set_time_limit(0);
header("Content-type: text/html; charset=GBK"); 
	global $db;
	$company = array();
	$html=file_get_html($url."/about");
	if(!$html) return false;
	foreach($html->find(".mr20") as $element)
	{ 
		$logo=$element->src;
		$company['logo']=$logo;
		//echo $logo;//OK
	}
	

	$introd=$html->find(".w930 .bd");
	$company['introduce']=strip_tags($introd[0]);//获取企业介绍
	
	
	
	//echo $introd[1];
    $dom=file_get_html_dom($introd[1]);
	$tdcount=0;
	foreach($dom->find("td") as $element)
	{ 
		$contact=$element->innertext;
		$tdcount=$tdcount+1;
		if($tdcount==2)  $company['main_product']=$contact;
		if($tdcount==4)  $company['trade']=strip_tags($contact);
		if($tdcount==6)  $company['type']=$contact;
		if($tdcount==8)  $company['law_person']=$contact;
		if($tdcount==10)  $company['reg_cash']=$contact;
		if($tdcount==12)  $company['guimo']=$contact;
		if($tdcount==14)  $company['yingyee']=$contact;
		if($tdcount==16)  $company['province']=$contact;
		if($tdcount==18)  $company['addr']=$contact;
		if($tdcount==20)  $company['postcode']=$contact;
		if($tdcount==22)  $company['homepage']=$contact;
	}
	
	foreach($html->find(".sidebar_contact .bd") as $element)
	{ 
		$contact=$element->innertext;
		$contact=explode('<br>',$contact);
		$company['contact']=preg_replace("/联系人：/", "",$contact[0]);
		$company['tel']=preg_replace("/电话：/", "",$contact[1]);
		$company['mobile']=preg_replace("/手机：/", "",$contact[2]);
		$company['fax']=preg_replace("/传真：/", "",$contact[3]);
		
	}
	 
	 foreach($company as $k =>$v)
	 {
		$company[$k]=addslashes($company[$k]);
		$company[$k]= iconv("gbk", "utf-8//ignore", $company[$k]);
	 }
	$sql="update lsg_cj_company_2 set main_product='{$company['main_product']}', logo='{$company['logo']}',introduce='{$company['introduce']}',type='{$company['type']}',law_person='{$company['law_person']}',reg_cash='{$company['reg_cash']}',guimo='{$company['guimo']}',yingyee='{$company['yingyee']}',province='{$company['province']}',addr='{$company['addr']}',postcode='{$company['postcode']}',homepage='{$company['homepage']}',contact='{$company['contact']}',tel='{$company['tel']}',mobile='{$company['mobile']}',fax='{$company['fax']}',is_get=1 where company_url='{$url}'";
	//echo $sql;
	$count=$db->query($sql);
return $count>0;
}

	$sql="select company_url from lsg_cj_company_2 where is_get=0 order by rand()";
	$result=$db->query($sql);
        $ct=1;
	while($r = $db->fetch_array($result)) { 
		$ct++;
		$f=getCompanyByUrl($r['company_url']);
		if(!$f) continue;;
		if($ct==90)
		{
			echo "<script>location.reload();</script>";
		}
	}
	$db->free_result($result);

?>