<?php 
defined('IN_DESTOON') or exit('Access Denied');
$id or dheader($SERVER['HTTP_REFERER']);
require DT_ROOT.'/module/'.$module.'/common.inc.php';

$r = $db->query("SELECT cate_id,title FROM {$db->pre}expert_category WHERE status=0");
while ($row = $db->fetch_array($r)) {
    $arr[$row['cate_id']] = $row['title'];
}

$sql = "select * from $table where id=$id";
$r = $db->get_one($sql);
$r['cate_name'] = cate_id_name($r['cate_id'], $arr);

$seo_file = 'info';
include DT_ROOT.'/include/seo.inc.php';
include template('info', $module);
?>