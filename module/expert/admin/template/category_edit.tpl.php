<?php
defined('DT_ADMIN') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="cate_id" value="<?php echo $cate_id;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="tt"><?php echo $action == 'add' ? '添加' : '修改';?>分类</div>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<br/>
<td class="tl"><span class="f_red">*</span> 分类名</td>
<td><input name="post[title]" id="title" type="text" id="title" size="20" value="<?php echo $title;?>"/>
    <span id="dtitle" class="f_red"></span>
<br/></td>
</tr>

</table>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<?php load('clear.js'); ?>
<script src="<?php echo DT_PATH?>file/script/city.js"></script>
<script src="<?php echo DT_PATH?>file/script/common.js"></script>
<script type="text/javascript">
    //表单验证
    function check() {
        var val;

        if (!$.trim(Dd('title').value)) {
            Dmsg('请输入分类名', 'title', 1);
            return false;
        }

        return true;
    }

</script>
<script type="text/javascript">Menuon(<?php echo $menuid;?>);</script>
<?php include tpl('footer');?>