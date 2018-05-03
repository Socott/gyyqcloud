<?php
set_time_limit(0);header("Content-type: text/html; charset=GBK");  
 
require 'config.inc.php';
require '../common.inc.php';  
    function _getremoteimage($url)
    {
		$filename=explode("/",$url);
		foreach($filename as $k=>$v)
		{
		    $filename=$v;
		}
		$date=date("Ymd/h");
		$dir="C:/www/r.longygo.com/v1/attaches/".$date."/";
		mkdir($dir,0777,true);
		$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
		$imageData = curl_exec($curl);
		curl_close($curl);
		$tp = fopen($dir.$filename,"a");
		fwrite($tp, $imageData);
		fclose($tp);
		return $date."/".$filename;
		
		
    }
	
	$result = $db->query("SELECT userid,thumb FROM lsg_company where thumb like '%taojindi.com%' limit 100");
	while($r = $db->fetch_array($result)) 
	{	
	    $userid=$r['userid'];
		$thumb=$r['thumb'];
		$local_addr=_getremoteimage($thumb);
		$sql="update lsg_company set thumb = 'http://r.longygo.com/v1/attaches/".$local_addr."' where userid=".$userid; 
		$db->query($sql);
		echo $sql."<br>";
	}
 	$db->free_result($result);
	echo "<script>location='import-company-5.php';</script>";
?>