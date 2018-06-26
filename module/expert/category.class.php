<?php 
defined('IN_DESTOON') or exit('Access Denied');
class category {
	var $moduleid;
	var $cate_id;
	var $db;
	var $table;
    var $fields;
	var $errmsg = errmsg;

    function __construct($moduleid) {
		global $db, $MOD, $DT_PRE;
		$this->moduleid = $moduleid;
		$this->table = $DT_PRE.'expert_category';
		$this->split = $MOD['split'];
		$this->db = &$db;
		$this->fields = array('cate_id', 'title', 'create_time', 'update_time');
    }

    function expert($moduleid) {
		$this->__construct($moduleid);
    }

    function get_one ($cate_id, $field='*', $where='1') {
        $sql = "select $field from $this->table where cate_id=$cate_id and $where";
        $r = $this->db->get_one($sql);
        return $r ? $r : array();
    }

    function get_list ($where='1', $order='create_time desc') {
        $sql = "select * from $this->table where $where order by $order";
        $r = $this->db->query($sql);
        while ($row = $this->db->fetch_array($r)) {
            $row['create_time'] = date('Y-m-d H:i', $row['create_time']);
            $res[] = $row;
        }
        $this->db->free_result($r);

        return $res;
    }

    function check ($arr) {
        if (!is_array($arr)) return false;
        $arr = array_map('trim', $arr);
        if (!$arr['title']) return $this->_('请输入分类名');
        return true;
    }

    function set ($arr, $add=false) {
        $arr['update_time'] = time();
        if ($add) $arr['create_time'] = $arr['update_time'];
        return $arr;
    }

    function add ($arr) {
        $arr = $this->set($arr, true);

        $arr = array_intersect_key($arr, array_flip($this->fields));
        $keys = implode(',', array_keys($arr));
        $vals = implode("','", array_values($arr));

        $sql = "insert into $this->table ($keys) values ('$vals')";
        return $this->db->query($sql);
    }

    function edit ($arr) {
        $arr = $this->set($arr);

        $arr = array_intersect_key($arr, array_flip($this->fields));
        $set = '';
        foreach ($arr as $k => $v) {
            $set .= "$k='$v',";
        }
        $set = rtrim($set, ',');
        $sql = "update $this->table set $set where cate_id=$this->itemid";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    function delete ($cate_id) {
        $sql = "update $this->table set status=-1 where cate_id=$cate_id";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

	function _($e) {
		$this->errmsg = $e;
		return false;
	}
}
?>