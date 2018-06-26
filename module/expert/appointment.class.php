<?php 
defined('IN_DESTOON') or exit('Access Denied');
class Appointment {
	var $moduleid;
	var $id;
	var $db;
	var $table;
    var $fields;
	var $errmsg = errmsg;

    function __construct($moduleid) {
		global $db, $MOD, $DT_PRE;
		$this->moduleid = $moduleid;
		$this->table = $DT_PRE.'expert_appointment';
		$this->split = $MOD['split'];
		$this->db = $db;
		$this->fields = array('id','expert_id', 'situation', 'demand','budget','end_time','name','tel','company','province','city','create_time','update_time');
    }

    function expert($moduleid) {
		$this->__construct($moduleid);
    }

    function get_one ($id, $field='*', $where='1') {
        $sql = "select $field from $this->table where id=$id and $where";
        $r = $this->db->get_one($sql);
        return $r ? $r : array();
    }

    function get_list () {
        $sql  = "select a.*,b.name as expert_name from $this->table as a join {$this->db->pre}expert as b on a.expert_id=b.id";
        $sql .= " where a.status<>-1 order by a.status asc,a.end_time asc";
        $r = $this->db->query($sql);
        while ($row = $this->db->fetch_array($r)) {
            $row['end_time'] = date('Y-m-d', $row['end_time']);
            $res[] = $row;
        }
        $this->db->free_result($r);

        return $res;
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
        $res = $this->db->query($sql);
        return $res;
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