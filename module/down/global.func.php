<?php
defined('IN_DESTOON') or exit('Access Denied');
function ext_select($name, $value, $extend = '', $title = '') {
	include DT_ROOT.'/file/config/filetype.inc.php';
	if(!$value && !$title) $value = 'oth';
	$select = '<select name="'.$name.'" '.$extend.'>';
	if($title) $select .= '<option value=""'.('' == $value ? ' selected' : '').'>'.$title.'</option>';
	foreach($FILETYPE as $k=>$v) {
		$select .= '<option value="'.$k.'"'.($k == $value ? ' selected' : '').'>'.$v.'</option>';
	}
	$select .= '</select>';
	return $select;
}

function format_select($name, $value, $extend = '') {
	$UNIT = array('2007', '2008', '2009', '1020');
	$value or $value = 'M';
	$select = '<select name="'.$name.'" '.$extend.'>';
	foreach($UNIT as $k=>$v) {
		$select .= '<option value="'.$v.'"'.($v == $value ? ' selected' : '').'>'.$v.'</option>';
	}
	$select .= '</select>';
	return $select;
}
function version_select($name, $value, $extend = '') {
	$UNIT = array('pro/E', 'CAXA实体设计', 'CAXA电子图板', 'AutoCAD');
	$value or $value = 'M';
	$select = '<select name="'.$name.'" '.$extend.'>';
	foreach($UNIT as $k=>$v) {
		$select .= '<option value="'.$v.'"'.($v == $value ? ' selected' : '').'>'.$v.'</option>';
	}
	$select .= '</select>';
	return $select;
}
function unit_select($name, $value, $extend = '') {
	$UNIT = array('K', 'M', 'G', 'T');
	$value or $value = 'M';
	$select = '<select name="'.$name.'" '.$extend.'>';
	foreach($UNIT as $k=>$v) {
		$select .= '<option value="'.$v.'"'.($v == $value ? ' selected' : '').'>'.$v.'</option>';
	}
	$select .= '</select>';
	return $select;
}
?>