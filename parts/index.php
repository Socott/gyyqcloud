<?php
define('DT_REWRITE', true);
require '../common.inc.php';
	   if($_REQUEST['type'])
	   {
		   include template('/m-'.$_REQUEST['type'],'parts');  
		   exit;
	   }
include template('modeldb','parts');  
?>