<?php
/*
	[Gyyq Cloud System] Copyright (c) 2008-2015 www.gyycloud.com
	This is NOT a freeware, use is subject to license.txt
*/
defined('DT_ADMIN') or exit('Access Denied');
function edition($k = -1) {
	$E = array();
	$E[0] = DT_DOMAIN;
	$E[1] = '-';
	return $k >= 0 ? $E[$k] : $E;
}
?>