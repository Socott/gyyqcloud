<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
if(!$ex) include load('403.inc');
$_userid or dalert('请登录后预约', $CFG['url'].'member/login.php');
require DT_ROOT.'/include/post.func.php';
include load('search.lang');
include MD_ROOT.'/appointment.class.php';
$do = new Appointment();
if ($submit) {
    $post = array_map('trim', $post);
    if (!$post['situation']) dalert('请输入您的当前情况');
    if (!$post['demand']) dalert('请输入您的需求');
    if (!$post['budget']) dalert('请输入您的预算');
    if (!$post['end_time']) {
        dalert('请选择截止日期');
    } else {
        $post['end_time'] = strtotime($post['end_time'].' 23:59:59');
    }
    if (!$post['name']) dalert('请输入您的姓名');
    if (!preg_match('/^1\d{10}$/', $post['tel'])) dalert('请输入11位电话');
    if (!$post['province']) dalert('请选择省份');

    $post['userid'] = $_userid;
    if ($do->add($post)) {
        die("<script>alert('添加成功');parent.window.location.href='/expert/list.php';</script>");
    }
} else {
    $sql = "select name from {$db->pre}expert where id=$ex";
    $expert_name = $db->get_one($sql)['name'];

    $seo_file = 'search';
    include DT_ROOT.'/include/seo.inc.php';
    if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].($kw ? 'index.php?moduleid='.$moduleid.'&kw='.encrypt($kw, DT_KEY.'KW') : 'search.php?action=mod'.$moduleid);
    include template('appointment', $module);
}



?>