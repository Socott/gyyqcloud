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
		mergeimg($dir.$filename,'c:/www/water.jpg');
		return $date."/".$filename;
    }
 
	function mergeimg($bigImgPath="",$qCodePath="")
	{
		$bigImg = imagecreatefromstring(file_get_contents($bigImgPath));  
		$qCodeImg = imagecreatefromstring(file_get_contents($qCodePath));  
		list($qCodeWidth, $qCodeHight, $qCodeType) = getimagesize($qCodePath);  
		list($bigWidth, $bigHight, $bigType) = getimagesize($bigImgPath);  
		imagecopymerge($bigImg, $qCodeImg, $bigWidth-$qCodeWidth, $bigHight- $qCodeHight, 0,  0, $qCodeWidth, $qCodeHight, 100);  
		list($bigWidth, $bigHight, $bigType) = getimagesize($bigImgPath);   
		imagejpeg($bigImg,$bigImgPath); 
	}

	$result = $db->query("SELECT itemid,thumb FROM lsg_mall where thumb like '%taojindi.com%' limit 100");
	while($r = $db->fetch_array($result)) 
	{	
	        $itemid=$r['itemid'];
		$thumb=$r['thumb'];
		$local_addr=_getremoteimage($thumb);
		
		$sql="update lsg_mall set thumb = 'http://r.longygo.com/v1/attaches/".$local_addr."' where itemid=".$itemid; 
		$db->query($sql);

		$sql="update lsg_sell_5 set thumb = 'http://r.longygo.com/v1/attaches/".$local_addr."' where thumb='{$thumb}'"; 
		$db->query($sql);
		echo $sql."<br>";
	}
 	$db->free_result($result);
	echo "<script>location='get-product-list.php';</script>";
