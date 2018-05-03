<?php 
defined('IN_DESTOON') or exit('Access Denied');
if($username == $_username || $domain) $could_message = true;
if($EXT['mobile_enable']) $head_mobile = $EXT['mobile_url'].'index.php?moduleid=4&username='.$username.'&action='.$file;
include template('overroll', $template);
?>