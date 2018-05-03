<?php
set_time_limit(0);header("Content-type: text/html; charset=GBK");  
 
require 'config.inc.php';
require '../common.inc.php';  
    function _genUserNumber()
    {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyz";
        $username = "";
        for ( $i = 0; $i < 8; $i++ )
        {
            $username .= $chars[mt_rand(0, strlen($chars))];
        }
        return strtolower(base_convert(time() - 1420070400, 10, 36)).$username;
    }
	$table_name="lsg_cj_company_3";
	$trade_name = iconv("gbk", "utf-8//ignore", '包装');
       
	$result = $db->query("SELECT * FROM {$table_name} where is_get=1 and is_import=0 limit 100");
	while($r = $db->fetch_array($result)) 
	{
		$company=trim(str_replace('	', '', $r['company_name']));
		
		$has = $db->get_one("SELECT company FROM lsg_member WHERE company='{$company}' limit 1");
		if($has)
		{
		 echo "HAS";
		 continue;
		}else
		{
		//exit("update  {$table_name} set is_import=1 where company_name like '%{$company}%'");
		$logo=$r['logo'];
		$main_product=$r['main_product'];
		$introduce=$r['introduce'];
		
		$trade=$r['trade_name'];
		$parent_trade=$r['parent_trade'];
		
		$type=$r['type'];
		$law_person=$r['law_person'];
		$reg_cash=$r['reg_cash'];
		$guimo=$r['guimo'];
		$yingyee=$r['yingyee'];
		$province=$r['province'];
		$addr=$r['addr'];
		$postcode=$r['postcode'];
		$homepage=$r['homepage'];
		$mobile=$r['mobile'];
		$email=$r['email'];
		$logo=$r['logo'];
		$pass=md5("longsgo2017");
		$passsalt=_genUserNumber();
		$paysalt=_genUserNumber();
		$username=_genUserNumber();
		$email=$username;
	     
		$province=mb_substr($r['province'],0,3,'utf-8');
		$city=mb_substr($r['province'],3,3,'utf-8');
		 
		$area = $db->get_one("SELECT areaid FROM lsg_area WHERE areaname='{$city}'");
		$trade = $db->get_one("SELECT catid,parentid FROM lsg_category WHERE moduleid=4 and catname='{$trade}'");
	
		
        $sql="insert into lsg_member(username,passport,company,password,passsalt,payword,paysalt,email,truename,mobile,areaid,edittime,regtime,logintime,inviter,vemail,vmobile,vtruename,vbank,vcompany,vtrade) values('".$username."','".$username."','".$company."','".$pass."','".$passsalt."','".$pass."','".$paysalt."','".$email."','".$company."','".$mobile."',{$area[areaid]},".time().",".time().",".time().",'longsgo',1,1,1,1,1,1)"; 

		$db->query($sql);
		
		$userid=$db->insert_id();
		 
		$linkurl="/index.php?homepage=".$username;
		$hysql="insert into lsg_company(userid,username,groupid,company,level,validated,vip,type,catid,catids,areaid,mode,capital,size,regyear,sell,buy,business,telephone,fax,mail,address,postcode,homepage,fromtime,totime,thumb,introduce,keyword,template,skin,linkurl) values('{$userid}','{$username}',7,'{$company}',1,1,2,'企业单位',',{$trade[catid]},',',{$trade[parentid]},{$trade[catid]},',{$area[areaid]},'{$type}','{$reg_cash}','{$guimo}','{$regyear}','{$main_product}','{$main_product}','{$main_product}','{$service_phone}','{$mobile}','{$email}','{$addr}','{$postcode}','{$homepage}','{$fromtime}','{$totime}','{$logo}','{$main_product}','{$main_product}','homepage/second','blue','{$linkurl}')";
	 
		
		$db->query($hysql);
		
		$db->query("insert into lsg_company_data(userid,content) values({$userid},'{$introduce}')");
		$db->query("update  {$table_name} set is_import=1 where company_name like '%{$company}%'");
		
		}
	}
	$db->free_result($result);
	sleep(3);
	echo "<script>location='down-company-image.php';</script>";
?>