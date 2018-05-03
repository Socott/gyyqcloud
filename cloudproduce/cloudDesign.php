<?php
define('DT_REWRITE', true);
require '../common.inc.php';
$type="01";
	   if($_REQUEST['type'])
	   {
		   $type=$_REQUEST['type'];
	   }
include template('cloudDesign','cloudproduce');  
?>