<?php
set_time_limit(0);header("Content-type: text/html; charset=GBK");  
 //18125
require 'config.inc.php';
require '../common.inc.php'; 

$array_longsgo=array(10120,10128,10160,11066,11146,11150,11162,11214,11215,11213);
$array_longygo=array('cqyanlian','leerjia','rddj','guoen' ,'lijue','dalong','smite','hysw','ckzn','jsys');
$count=0;exit;
foreach($array_longsgo as $k=>$v)
{
	 $product_list=$db->query("SELECT * FROM lsg_product where  member_id=".$v );
	 while($r = $db->fetch_array($product_list)) 
	{ 
	$count++;
	$member =  $db->get_one("SELECT * FROM lsg_member where username='{$array_longygo[$k]}' limit 1");
	$company =  $db->get_one("SELECT * FROM lsg_company where username='{$array_longygo[$k]}' limit 1");
	$product =  $db->get_one("SELECT * FROM lsg_product_detail where proid='{$r[id]}' limit 1");
	
	$catid=str_replace(",",'',$company['catid']);
	$cat_company =  $db->get_one("SELECT catname FROM lsg_category where moduleid=4 and catid='{$catid}' limit 1");
	$cat_mall =  $db->get_one("SELECT * FROM lsg_category where moduleid=16 and  catname='{$cat_company['catname']}' limit 1");
	$cat_sell =  $db->get_one("SELECT * FROM lsg_category where moduleid=5 and  catname='{$cat_company['catname']}' limit 1");

	     $product_name=$r['name'];
		 $areaid=empty($company['areaid'])?0:$company['areaid'];
		 $price=$r['price'];
		 $amount=100000;
		 $unit='';
		 $thumb=$r['pic'];
		 $content=$product['detail'];
		 $username=$company['username'];
		 $mobile=$company['telephone'];
		 $email=$company['mail'];
		 $truename=$member['truename'];
		 $telephone=$member['mobile'];
		 $address=$company['address'];
		 $company_name=$company['company'];
		 
		 $qq=$member['qq'];
		 $addtime=time();
		 $mallsql="insert into lsg_mall(catid,mycatid,areaid,title,brand,price,amount,unit,keyword,thumb,username,company,vip,truename,telephone,mobile,address,email,qq,addtime,status) values({$cat_mall[catid]},0,{$areaid},'{$product_name}','{$brand}','{$price}','{$amount}','{$unit}','{$keyword}','{$thumb}','{$username}','{$company_name}',2,'{$truename}','{$telephone}','{$mobile}','{$address}','{$email}','{$qq}','{$addtime}','3')";
		 echo $mallsql."<br>".$count;
	     $db->query($mallsql);
		$id=$db->insert_id();
		$linkurl='show.php?itemid='.$id;
		if($id>0)
		$db->query("insert into lsg_mall_data(itemid,content) values({$id},'{$content}')");
		$db->query("update lsg_mall set linkurl='{$linkurl}' where itemid='{$id}'");
		 
		 
		 
		 $sellsql="insert into lsg_sell_5(catid,mycatid,areaid,title,brand,price,amount,unit,keyword,thumb,username,company,vip,truename,telephone,mobile,address,email,qq,addtime,status) values({$cat_sell[catid]},0,{$areaid},'{$product_name}','{$brand}','{$price}','{$amount}','{$unit}','{$keyword}','{$thumb}','{$username}','{$company_name}',2,'{$truename}','{$telephone}','{$mobile}','{$address}','{$email}','{$qq}','{$addtime}','3')";
		 $db->query($sellsql);
		 $sellid=$db->insert_id();
		 $linkurl='show.php?itemid='.$sellid;
	     if($sellid>0)
		$db->query("insert into lsg_sell_data_5(itemid,content) values({$sellid},'{$content}')");
		$db->query("update lsg_sell_5 set linkurl='{$linkurl}' where itemid='{$sellid}'");
		 
	 
	}
	$db->free_result($productlist);
}
 

?>