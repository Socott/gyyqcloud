<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';

$condition = "a.status<>-1 and a.userid=$_userid";

$r = $db->get_one("select count(*) as num from {$db->pre}expert_appointment a where $condition");
$pages = pages($r['num'], $page, $pagesize);

$sql  = "select a.*,b.name as expert_name from {$db->pre}expert_appointment a,{$db->pre}expert b";
$sql .= " where a.expert_id=b.id and $condition";

$r = $db->query($sql);
while ($row = $db->fetch_array($r)) {
    $row['end_time'] = date('Y-m-d H:i', $row['end_time']);
    $row['create_time'] = date('Y-m-d H:i', $row['create_time']);
    $row['update_time'] = date('Y-m-d H:i', $row['update_time']);
    $list[] = $row;
}

include template('trade', $module);
?>