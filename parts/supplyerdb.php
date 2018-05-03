<?php
define('DT_REWRITE', true);
require '../common.inc.php';
	   if($_REQUEST['type'])
	   {
		   include template('/supplyer-'.$_REQUEST['type'],'parts');  
		   exit;
	   }
include template('supplyerdb','parts');  
?>