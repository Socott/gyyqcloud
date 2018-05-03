<?php
set_time_limit(0);header("Content-type: text/html; charset=GBK");  
 
require 'config.inc.php';
require '../common.inc.php';  
 
	$table_name="lsg_cj_buy";
	$result = $db->query("SELECT * FROM {$table_name}");
	while($r = $db->fetch_array($result)) 
	{	
		$contact=$r['contact'];
		$mobile=$r['mobile'];
		$title=$r['title'];
		$time=time()-rand(1,30)*24*3600;
		$date=date('Y-m-d',$time);
		$company =  $db->get_one("SELECT * FROM lsg_company order by RAND() limit 1");
		$sql="INSERT INTO `lsg_buy_6` VALUES (null, '34332', '1', '3697', '0', '{$title}', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '', '{$title}', '', '1', '', '', '', '{$company[username]}', '6', '{$company[company]}', '0', '0', '{$contact}', '{$mobile}', '{$mobile}', '{$company[address]}', '', '', '3233043760', '', '', '0', 'admin', '{$time}', '2018-01-13', '{$time}', '2018-01-13', '106.84.15.181', '', '0', 'show.php?itemid=41', '', '');";
 		$db->query($sql);
		$itemid=$db->insert_id();
		$linkurl="show.php?itemid=".$userid;
		$db->query("update  lsg_buy_6 set linkurl='{$linkurl}' where itemid =".$itemid);

		}
	$db->free_result($result);
?>