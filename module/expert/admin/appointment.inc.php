<?php
defined('DT_ADMIN') or exit('Access Denied');
require MD_ROOT.'/appointment.class.php';
$do = new Appointment($moduleid);
$menus = array (
    array('添加专家', '?moduleid='.$moduleid.'&action=add'),
    array('专家列表', '?moduleid='.$moduleid),
    //array('审核商品', '?moduleid='.$moduleid.'&action=check'),
    //array('下架商品', '?moduleid='.$moduleid.'&action=expire'),
    //array('未通过商品', '?moduleid='.$moduleid.'&action=reject'),
    //array('回收站', '?moduleid='.$moduleid.'&action=recycle'),
    //array('移动分类', '?moduleid='.$moduleid.'&action=move'),
	array('添加分类', '?moduleid='.$moduleid.'&file=category&action=add'),
    array("分类列表", "?file=category&moduleid=$moduleid"),
    array('预约列表', '?moduleid='.$moduleid.'&file=appointment')
);


switch($action) {
	case 'add':
		if($submit) {
			if($do->pass($post)) {
				$do->add($post);
                dmsg('添加成功', '?moduleid='.$moduleid);
			} else {
				msg($do->errmsg);
			}
		} else {
			foreach($do->fields as $v) {
				isset($$v) or $$v = '';
			}
			$a1 = 1;
			$a2 = $a3 = $p1 = $p2 = $p3 = '';
			$unit = '件';
			$boc = 1;
			$content = '';
			$status = 3;
			$addtime = timetodate($DT_TIME);
			$username = $_username;
			$item = array();
			isset($url) or $url = '';
			if($url) {
				$tmp = fetch_url($url);
				if($tmp) extract($tmp);
			}
			$EXP = array();
			$result = $db->query("SELECT * FROM {$DT_PRE}mall_express WHERE username='$username' AND parentid=0 ORDER BY listorder ASC,itemid ASC LIMIT 100");
			while($r = $db->fetch_array($result)) {
				$EXP[] = $r;
			}
			$menuid = 0;
			include tpl('edit', $module);
		}
	break;
	case 'edit':
		$id or msg();
		$do->itemid = $id;
		if($submit) {
			if($do->pass($post)) {
				$do->edit($post);
				dmsg('修改成功', $forward);
			} else {
				msg($do->errmsg);
			}
		} else {
			$item = $do->get_one();
			extract($item);
			include tpl($action, $module);
		}
	break;
	case 'move':
		if($submit) {
			$fromids or msg('请填写来源ID');
			if($tocatid) {
				$db->query("UPDATE {$table} SET catid=$tocatid WHERE `{$fromtype}` IN ($fromids)");
				dmsg('移动成功', $forward);
			} else {
				msg('请选择目标分类');
			}
		} else {
			$itemid = $itemid ? implode(',', $itemid) : '';
			$menuid = 6;
			include tpl($action);
		}
	break;
	case 'update':
		is_array($itemid) or msg('请选择商品');
		foreach($itemid as $v) {
			$do->update($v);
		}
		dmsg('更新成功', $forward);
	break;
	case 'tohtml':
		is_array($itemid) or msg('请选择商品');
		foreach($itemid as $itemid) {
			tohtml('show', $module);
		}
		dmsg('生成成功', $forward);
	break;
	case 'delete':
		$id or msg('请选择专家');
		$do->recycle($id);
        dmsg('删除成功', '?moduleid='.$moduleid);
	break;
	case 'restore':
		$itemid or msg('请选择商品');
		$do->restore($itemid);
		dmsg('还原成功', $forward);
	break;
	case 'refresh':
		$itemid or msg('请选择商品');
		$do->refresh($itemid);
		dmsg('刷新成功', $forward);
	break;
	case 'clear':
		$do->clear();
		dmsg('清空成功', $forward);
	break;
	case 'level':
		$itemid or msg('请选择商品');
		$level = intval($level);
		$do->level($itemid, $level);
		dmsg('级别设置成功', $forward);
	break;
	case 'type':
		$itemid or msg('请选择商品');
		$tid = intval($tid);
		array_key_exists($tid, $TYPE) or $tid = 0;
		$do->type($itemid, $tid);
		dmsg('类型设置成功', $forward);
	break;
	case 'recycle':
		$lists = $do->get_list('status=0'.$condition, $dorder[$order]);
		$menuid = 5;
		include tpl('index', $module);
	break;
	case 'reject':
		if($itemid && !$psize) {
			$do->reject($itemid);
			dmsg('拒绝成功', $forward);
		} else {
			$lists = $do->get_list('status=1'.$condition, $dorder[$order]);
			$menuid = 4;
			include tpl('index', $module);
		}
	break;
	case 'expire':
		$lists = $do->get_list('status=4'.$condition);
		$menuid = 3;
		include tpl('index', $module);
	break;
	case 'unsale':
		$itemid or msg('请选择商品');
		$do->unsale($itemid);
		dmsg('下架成功', $forward);
	break;
	case 'onsale':
		$itemid or msg('请选择商品');
		$do->onsale($itemid);
		dmsg('上架成功', $forward);
	break;
	case 'relate_del':
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		$id = isset($id) ? intval($id) : 0;
		$id or msg('请选择移除商品');
		$do->itemid = $id;
		$A = $do->get_one();
		$do->relate_del($M, $A);
		dmsg('移除成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
	break;
	case 'relate_add':
		$relate_name = isset($relate_name) ? dhtmlspecialchars(trim($relate_name)) : '';
		$relate_name or msg('请填写关联名称');
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		$id = isset($id) ? intval($id) : 0;
		$id or msg('请选择关联商品');
		$do->itemid = $id;
		$A = $do->get_one();
		($A && $A['status'] == 3 && $A['username'] == $M['username']) or msg('请选择关联商品');
		if($itemid == $id) msg('选择的商品已经存在');
		$do->relate_add($M, $A, $relate_name);
		dmsg('新增成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
	break;
	case 'relate':
		$itemid or msg('请选择商品');
		$do->itemid = $itemid;
		$M = $do->get_one();
		($M && $M['status'] == 3) or msg('请选择商品');
		if($submit) {
			$relate_name = isset($relate_name) ? dhtmlspecialchars(trim($relate_name)) : '';
			$relate_name or msg('请填写关联名称');
			$do->relate($M, $post, $relate_name);
			dmsg('更新成功', '?moduleid='.$moduleid.'&file='.$file.'&itemid='.$itemid.'&action=relate');
		} else {
			$lists = $do->relate_list($M);
			include tpl('relate', $module);
		}
	break;
	case 'check':
		if($itemid && !$psize) {
			$do->check($itemid);
			dmsg('审核成功', $forward);
		} else {
			$lists = $do->get_list('status=2'.$condition, $dorder[$order]);
			$menuid = 2;
			include tpl('index', $module);
		}
	break;
	default:
		$lists = $do->get_list();
		include tpl('appointment_index', $module);
	break;
}
?>