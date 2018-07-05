<?php 
defined('IN_DESTOON') or exit('Access Denied');
class expert {
	var $moduleid;
	var $itemid;
	var $db;
	var $table;
	var $table_data;
	var $split;
	var $errmsg = errmsg;

    function __construct($moduleid) {
		global $db, $table, $table_data, $MOD;
		$this->moduleid = $moduleid;
		$this->table = $table;
		$this->table_data = $table_data;
		$this->split = $MOD['split'];
		$this->db = &$db;
		$this->fields = array('id','name','province','city','cate_id','work_year','tags','introduction','advantage','cases','status','create_time','update_time','head','title');
    }

    function expert($moduleid) {
		$this->__construct($moduleid);
    }

	function pass($post) {
		global $DT_TIME, $MOD;
		if(!is_array($post)) return false;
		if(!$post['name']) return $this->_('请输入姓名');
        if(!$post['province']) return $this->_('请选择地址');
        if(!$post['cate_id']) return $this->_('请选择分类');
        if(!is_numeric($post['work_year']) || $post['work_year']<0) return $this->_('请输入正确的工龄');
        if(!is_url($post['head'])) return $this->_('请上传头像');
        if(!$post['introduction']) return $this->_('请输入简介');
        return true;
	}

	function set($post, $add=false) {
		global $MOD, $DT_TIME, $DT_IP, $_username, $_userid, $action;

        $post['update_time'] = time();
        if ($add) $post['create_time'] = $post['update_time'];
		return array_map("trim", $post);
	}

	function get_one() {
		$r = $this->db->get_one("SELECT * FROM {$this->table} WHERE id=$this->itemid");
        return $r ? $r : array();
	}

	function get_list($condition = 'status=0', $order = 'edittime DESC', $cache = '') {
		global $MOD, $pages, $page, $pagesize, $offset, $items, $sum;
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $this->db->get_one("SELECT COUNT(*) AS num FROM {$this->table} WHERE $condition", $cache);
			$items = $r['num'];
		}
		$pages = defined('CATID') ? listpages(1, CATID, $items, $page, $pagesize, 10, $MOD['linkurl']) : pages($items, $page, $pagesize);
		if($items < 1) return array();
		$lists = $catids = $CATS = array();

		$result = $this->db->query("SELECT * FROM {$this->table} WHERE $condition ORDER BY $order LIMIT $offset,$pagesize", $cache);
		while($r = $this->db->fetch_array($result)) {
			$lists[] = $r;
            if ($r['cate_id']) $catids[] = $r['cate_id'];
		}

        $r = $this->db->query("SELECT catid,catname FROM {$this->db->pre}category WHERE catid in (".implode(',', $catids).")");
        while ($row = $this->db->fetch_array($r)) {
            $arr[$row['catid']] = $row['catname'];
        }

        foreach ($lists as &$v) {
            $v['cate_name'] = $arr[$v['cate_id']];
        }

		return $lists;
	}

	function add($post) {
		global $MOD;
		$post = $this->set($post, true);
		$sqlk = $sqlv = '';
		foreach($post as $k=>$v) {
			if(in_array($k, $this->fields)) { $sqlk .= ','.$k; $sqlv .= ",'$v'"; }
		}
        $sqlk = substr($sqlk, 1);
        $sqlv = substr($sqlv, 1);
		$this->db->query("INSERT INTO {$this->table} ($sqlk) VALUES ($sqlv)");
		$this->itemid = $this->db->insert_id();
		return $this->itemid;
	}

	function edit($post) {
		$this->delete($this->itemid, false);
		$post = $this->set($post);
		$sql = '';
		foreach($post as $k=>$v) {
			if(in_array($k, $this->fields)) $sql .= ",$k='$v'";
		}
        $sql = substr($sql, 1);
	    $this->db->query("UPDATE {$this->table} SET $sql WHERE id=$this->itemid");
		//$this->update($this->itemid);
		clear_upload($post['content'].$post['head'], $this->itemid);
		return true;
	}

	function tohtml($itemid = 0, $catid = 0) {
		global $module, $MOD;
		if($MOD['show_html'] && $itemid) tohtml('show', $module, "id=$itemid");
	}

	function update($itemid) {
		$item = $this->db->get_one("SELECT * FROM {$this->table} WHERE id=$itemid");
		$update = '';
		$keyword = $item['title'].','.($item['brand'] ? $item['brand'].',' : '').strip_tags(cat_pos(get_cat($item['catid']), ','));
		if($keyword != $item['keyword']) {
			$keyword = str_replace("//", '', addslashes($keyword));
			$update .= ",keyword='$keyword'";
		}
		$item['itemid'] = $itemid;
		$linkurl = itemurl($item);
		if($linkurl != $item['linkurl']) $update .= ",linkurl='$linkurl'";
		$member = $item['username'] ? userinfo($item['username']) : array();
		if($member) $update .= update_user($member, $item);
		if($update) $this->db->query("UPDATE {$this->table} SET ".(substr($update, 1))." WHERE id=$itemid");
	}

	function recycle($itemid) {
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->recycle($v); }
		} else {
			$this->db->query("UPDATE {$this->table} SET status=-1 WHERE id=$itemid");
			return true;
		}
	}

	function restore($itemid) {
		global $module, $MOD;
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->restore($v); }
		} else {
			$this->db->query("UPDATE {$this->table} SET status=3 WHERE itemid=$itemid");
			if($MOD['show_html']) tohtml('show', $module, "itemid=$itemid");
			return true;
		}		
	}

	function delete($itemid, $all = true) {
		global $MOD;
		if(is_array($itemid)) {
			foreach($itemid as $v) {
				$this->delete($v, $all);
			}
		} else {
			$this->itemid = $itemid;
			$r = $this->get_one();
			if($MOD['show_html']) {
				$_file = DT_ROOT.'/'.$MOD['moduledir'].'/'.$r['linkurl'];
				if(is_file($_file)) unlink($_file);
			}
			if($all) {
				$userid = get_user($r['username']);
				if($r['thumb']) delete_upload($r['thumb'], $userid);
				if($r['thumb1']) delete_upload($r['thumb1'], $userid);
				if($r['thumb2']) delete_upload($r['thumb2'], $userid);
				if($r['content']) delete_local($r['content'], $userid);
				$this->db->query("DELETE FROM {$this->table} WHERE itemid=$itemid");
				$content_table = content_table($this->moduleid, $this->itemid, $this->split, $this->table_data);
				$this->db->query("DELETE FROM {$content_table} WHERE itemid=$itemid");
				if($MOD['cat_property']) $this->db->query("DELETE FROM {$this->db->pre}category_value WHERE moduleid=$this->moduleid AND itemid=$itemid");
				if($r['username'] && $MOD['credit_del']) {
					credit_add($r['username'], -$MOD['credit_del']);
					credit_record($r['username'], -$MOD['credit_del'], 'system', lang('my->credit_record_del', array($MOD['name'])), 'ID:'.$this->itemid);
				}
			}
		}
	}

	function check($itemid) {
		global $_username, $DT_TIME, $MOD;
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->check($v); }
		} else {
			$this->itemid = $itemid;
			$item = $this->get_one();
			if($MOD['credit_add'] && $item['username'] && $item['hits'] < 1) {
				credit_add($item['username'], $MOD['credit_add']);
				credit_record($item['username'], $MOD['credit_add'], 'system', lang('my->credit_record_add', array($MOD['name'])), 'ID:'.$this->itemid);
			}
			$editdate = timetodate($DT_TIME, 3);
			$this->db->query("UPDATE {$this->table} SET status=3,hits=hits+1,editor='$_username',edittime=$DT_TIME,editdate='$editdate' WHERE itemid=$itemid");
			$this->tohtml($itemid);
			return true;
		}
	}

	function reject($itemid) {
		global $_username, $DT_TIME;
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->reject($v); }
		} else {
			$this->db->query("UPDATE {$this->table} SET status=1,editor='$_username' WHERE itemid=$itemid");
			return true;
		}
	}

	function unsale($itemid) {
		global $_username, $DT_TIME;
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->unsale($v); }
		} else {
			$this->db->query("UPDATE {$this->table} SET status=4,editor='$_username' WHERE itemid=$itemid");
			return true;
		}
	}

	function onsale($itemid) {
		global $_username, $DT_TIME;
		if(is_array($itemid)) {
			foreach($itemid as $v) { $this->onsale($v); }
		} else {
			$this->db->query("UPDATE {$this->table} SET status=3,editor='$_username' WHERE itemid=$itemid");
			return true;
		}
	}

	function clear($condition = 'status=0') {		
		$result = $this->db->query("SELECT itemid FROM {$this->table} WHERE $condition");
		while($r = $this->db->fetch_array($result)) {
			$this->delete($r['itemid']);
		}
	}

	function level($itemid, $level) {
		$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
		$this->db->query("UPDATE {$this->table} SET level=$level WHERE itemid IN ($itemids)");
	}

	function type($itemid, $typeid) {
		$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
		$this->db->query("UPDATE {$this->table} SET typeid=$typeid WHERE itemid IN ($itemids)");
	}

	function refresh($itemid) {
		global $DT_TIME;
		$editdate = timetodate($DT_TIME, 3);
		$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
		$this->db->query("UPDATE {$this->table} SET edittime='$DT_TIME',editdate='$editdate' WHERE itemid IN ($itemids)");
	}

	function relate_add($M, $A, $N) {
		if($M['relate_id']) {
			$itemids = $M['relate_id'];
			if(strpos(','.$M['relate_id'].',', ','.$A['itemid'].',') === false) {
				$itemids = $M['relate_id'].','.$A['itemid'];
			}
		} else {
			$itemids = $M['itemid'].','.$A['itemid'];
		}
		$this->db->query("UPDATE {$this->table} SET relate_id='$itemids',relate_name='$N' WHERE itemid IN ($itemids)");
	}

	function relate_del($M, $A) {
		if($M['relate_id'] == $A['relate_id']) {
			$ids = explode(',', $M['relate_id']);
			foreach($ids as $k=>$v) {
				if($v == $A['itemid']) unset($ids[$k]);
			}
			$this->db->query("UPDATE {$this->table} SET relate_id='',relate_name='',relate_title='' WHERE itemid=$A[itemid]");
			$itemids = implode(',', $ids);
			if(is_numeric($itemids)) {
				$this->db->query("UPDATE {$this->table} SET relate_id='',relate_name='',relate_title='' WHERE itemid=$itemids");
			} else {
				$this->db->query("UPDATE {$this->table} SET relate_id='$itemids' WHERE itemid IN ($itemids)");
			}
		}
	}

	function relate($M, $P, $N) {
		$S = $I = array();
		foreach($P as $k=>$v) {
			$S[$k] = intval($v['listorder']);
		}
		asort($S);
		foreach($S as $k=>$v) {
			$I[] = $k;
		}
		$itemids = implode(',', $I);
		foreach($P as $k=>$v) {
			$k = intval($k);
			$T = dhtmlspecialchars(trim($v['relate_title']));
			$this->db->query("UPDATE {$this->table} SET relate_id='$itemids',relate_name='$N',relate_title='$T' WHERE itemid=$k");
		}
	}

	function relate_list($M) {
		if($M['relate_id']) {
			$ids = $M['relate_id'];
			$lists = $tags = array();
			$result = $this->db->query("SELECT * FROM {$this->table} WHERE itemid IN ($ids)");
			while($r = $this->db->fetch_array($result)) {
				$tags[$r['itemid']] = $r;
			}
			foreach(explode(',', $ids) as $v) {
				$lists[] = $tags[$v];
			}
			return $lists;
		} else {
			return array(0 => $M);
		}
	}

	function _($e) {
		$this->errmsg = $e;
		return false;
	}
}
?>