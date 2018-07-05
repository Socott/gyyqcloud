<?php
defined('DT_ADMIN') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="tt"><?php echo $action == 'add' ? '添加' : '修改';?>专家</div>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<br/>
<td class="tl"><span class="f_red">*</span> 姓名</td>
<td><input name="post[name]" id="name" type="text" id="title" size="20" value="<?php echo $name;?>"/>
    <span id="dname" class="f_red"></span>
<br/></td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span> 地址</td>
<td>
    <select name="post[province]" id="province" value="<?php echo $province;?>"><option value="">省份</option></select>
    &ensp;
    <select name="post[city]" id="city" value="<?php echo $city;?>"><option value="">城市</option></select>
    <span id="daddress" class="f_red"></span>
    <br/></td>

</tr>

<tr>
    <td class="tl"><span class="f_red">*</span> 专家分类</td>
    <td><div id="catesch"></div><?php echo ajax_category_select('post[cate_id]', '选择分类', $catid, 26, 'size="2" style="height:120px;width:180px;"');?>
        <br/><input type="button" value="搜索分类" onclick="schcate(<?php echo $moduleid;?>);" class="btn"/> <span id="dcatid" class="f_red"></span></td>
<td>

</td>
</tr>
    <tr>
        <td class="tl"><span class="f_red">&ensp;</span> 职称</td>
        <td><select name="post[title]" id="title">
                <option value="正高">正高</option>
                <option value="副高">副高</option>
                <option value="中级">中级</option>
                <option value="初级">初级</option>
                <option value="院士">院士</option>
                <option value="其它">其它</option>
            </select>
            <span id="dtitle" class="f_red"></span> <br/></td>
    </tr>
<tr>
    <td class="tl"><span class="f_red"> &ensp;</span> 职业标签</td>
    <td><input placeholder="标签之间以逗号隔开" name="post[tags]" type="text" id="tags" size="60" value="<?php echo $tags;?>"/> <span id="dtags" class="f_red"></span> <br/></td>
</tr>
<tr>
    <td class="tl"><span class="f_red">*</span> 从业工龄</td>
    <td><input name="post[work_year]" type="text" id="work_year" size="20" value="<?php echo $work_year;?>"/><span>(年)</span><span id="dwork_year" class="f_red"></span>  <br/></td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span> 头像</td>
<td>
	<input type="hidden" name="post[head]" id="thumb" value="<?php echo $head;?>"/>
	<table width="50">
	<tr align="center" height="120" class="c_p">
	<td width="50"><img src="<?php echo $head ? $head : DT_SKIN.'image/waitpic.gif';?>" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/></td>
	</tr>
	<tr align="center" class="c_p">
	<td><span onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_upload.gif" width="12" height="12" title="上传"/></span>&nbsp;&nbsp;<img src="<?php echo $MODULE[2]['linkurl'];?>image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<span onclick="delAlbum('', 'wait');" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_delete.gif" width="12" height="12" title="删除"/></span></td>
	</tr>
	</table>
	<span id="dhead" class="f_red"></span>
</td>
</tr>
<tr>
    <td class="tl"><span class="f_red">*</span> 简介</td>
    <td><textarea placeholder="300字以内" name="post[introduction]" id="introduction" cols="60" rows="8"><?php echo $introduction;?></textarea>
        <span id="dintroduction" class="f_red"></span><br /></td>
</tr>
<tr>
    <td class="tl"><span class="f_red">&ensp;</span> 技术优势</td>
    <td><textarea placeholder="300字以内" name="advantage" id="advantage" cols="60" rows="8"><?php echo $advantage;?></textarea>
        <span id="dadvantage" class="f_red"></span><br /></td>
</tr>
<tr>
    <td class="tl"><span class="f_red">&ensp;</span> 主要成果案例</td>
    <td><textarea placeholder="500字以内" name="post[cases]" id="cases" cols="60" rows="8"><?php echo $cases;?></textarea>
        <span id="dcases" class="f_red"></span><br /></td>
</tr>


</table>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<?php load('clear.js'); ?>
<script src="<?php echo DT_PATH?>file/script/city.js"></script>
<script src="<?php echo DT_PATH?>file/script/common.js"></script>
<script type="text/javascript">
    document.onready = function () {
        Dd('province').onchange = function () {
            showChild(this, Dd('city'), cityArr);
        }
        checkCity();
    }

    function checkCity () {
        var province = '<?php echo $province;?>';
        var city = '<?php echo $city;?>';
        if (province) {
            Dd('province').value = province;
            Dd('province').onchange();
            if (city) {
                Dd('city').value = city;
            }
        }
    }

function _p() {
    if (Dd('tag').value) {
        Ds('reccate');
    }
}

//表单验证
function check() {
    var val;

    if (!$.trim(Dd('name').value)) {
        Dmsg('请输入姓名', 'name', 1);
        return false;
    }

    if (!Dd('province').value) {
        Dmsg('请选择地址', 'address', 1);
        return false;
    }

    if (!Dd('cate_id').value) {
        Dmsg('请选择分类', 'cate_id', 1);
        return false;
    }

    val = Dd('work_year').value;
    if (!(parseInt(val) > 0)) {
        Dmsg('请输入正确工龄', 'work_year', 1);
        return false;
    }

    if (!Dd('thumb').value) {
        Dmsg('请上传头像', 'head', 1);
        return false;
    }

    if (!Dd('introduction').value) {
        Dmsg('请输入简介', 'introduction', 1);
        return false;
    }

    return true;
}

function Dexpress(i, s) {
	if(Dd('express_'+i).value > 0) {
		var t1 = s.split('[');
		var t2 = t1[1].split(',');
		Dd('express_name_'+i).value = t2[0];
		Dd('fee_start_'+i).value = t2[1];
		Dd('fee_step_'+i).value = t2[2];
	} else {
		Dd('express_name_'+i).value = '';
		Dd('fee_start_'+i).value = '';
		Dd('fee_step_'+i).value = '';
	}
}

function Nexpress(i, s) {
	Dd('express_name_1').value = s;
	Dd('fee_start_1').value = i;
	Dd('fee_step_1').value = '0.00';
	$('#express_1').val(0);
	Dd('express_name_2').value = '';
	Dd('fee_start_2').value = '0.00';
	Dd('fee_step_2').value = '0.00';
	$('#express_2').val(0);
	Dd('express_name_3').value = '';
	Dd('fee_start_3').value = '0.00';
	Dd('fee_step_3').value = '0.00';
	$('#express_3').val(0);
}


</script>
<script type="text/javascript">Menuon(<?php echo $menuid;?>);</script>
<?php include tpl('footer');?>