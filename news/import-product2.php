<?php
set_time_limit(0);header("Content-type: text/html; charset=GBK");  
 
require 'config.inc.php';
require '../common.inc.php';  
$table_name="lsg_cj_procuct_1";

 $productlist=$db->query("SELECT * FROM {$table_name} where is_import=0 order by id desc limit 100" );
 
 
		while($r = $db->fetch_array($productlist)) 
		{ 
			
		 $r['company_name']=trim(str_replace('	', '', $r['company_name']));
		 $company = $db->get_one("SELECT * FROM lsg_company where company='{$r['company_name']}' limit 1");
		 if(! $company) continue;
		 $member =  $db->get_one("SELECT * FROM lsg_member where  company='{$r['company_name']}' limit 1");
		 
		 $catid=str_replace(",",'',$company['catid']);
		 $cat_company =  $db->get_one("SELECT catname FROM lsg_category where moduleid=4 and catid='{$catid}' limit 1");
		
		 $cat_mall =  $db->get_one("SELECT * FROM lsg_category where moduleid=16 and  catname='{$cat_company['catname']}' limit 1");
		 $cat_sell =  $db->get_one("SELECT * FROM lsg_category where moduleid=5 and  catname='{$cat_company['catname']}' limit 1");
		 
		
 
         $product_name=$r['product_name'];
		 $areaid=empty($company['areaid'])?0:$company['areaid'];
		
		 $price=0;
		 $amount=100000;
		 $unit='';
        
		 $thumb=$r['thumb'];
		 $content=$r['detail_2'];
		 
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
	     $db->query($mallsql);
		 $id=$db->insert_id();
		 $linkurl='show.php?itemid='.$id;
		 if($id>0)
		 $db->query("insert into lsg_mall_data(itemid,content) values({$id},'{$content}')");
		 $db->query("update lsg_mall set linkurl='{$linkurl}' where itemid='{$id}'");
		 echo $mallsql;
		 
		 
		 $sellsql="insert into lsg_sell_5(catid,mycatid,areaid,title,brand,price,amount,unit,keyword,thumb,username,company,vip,truename,telephone,mobile,address,email,qq,addtime,status) values({$cat_sell[catid]},0,{$areaid},'{$product_name}','{$brand}','{$price}','{$amount}','{$unit}','{$keyword}','{$thumb}','{$username}','{$company_name}',2,'{$truename}','{$telephone}','{$mobile}','{$address}','{$email}','{$qq}','{$addtime}','3')";
		 $db->query($sellsql);
		 $sellid=$db->insert_id();
		 $linkurl='show.php?itemid='.$sellid;
	     if($sellid>0)
		 $db->query("insert into lsg_sell_data_5(itemid,content) values({$sellid},'{$content}')");
		 $db->query("update lsg_sell_5 set linkurl='{$linkurl}' where itemid='{$sellid}'");
		 
		 $db->query("update {$table_name} set is_import=1 where product_name like '%{$product_name}%' and company_name='{$company_name}'");
			 
		}
		$db->free_result($productlist);
		//echo "<script>location='merge-product-image.php';</script>";

?>