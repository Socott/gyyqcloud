<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('cloudproduce/header');?>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" />
    <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/css/pages.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" type="text/css" />
    <link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter//pages/industrialMall/css/clound.css" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/zone/qltyAuth/css/popup7.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/zone/qltyAuth/css/reset7.css"/>
<!--头部 end-->
<style>
.text-box i {
right: -87px !important;
}
[dname="typeid"] a {
cursor: pointer;
}
</style>
    <form id="listform" method="post" action="/sell/list.php" target="proIfram">
<input type="hidden" name="typeid" >
<input type="hidden" id="industryids">
<!-- 企业类型 -->
    <input type="hidden" name="type">
    <!-- 经营类型 -->
    <input type="hidden" id="sys_model">
    <!-- 企业规模 -->
    <input type="hidden" name="size" >
    
    <input type="hidden" id="isSrm">
<!--主体内容 start-->
    <input type="hidden" name="vip" value="">
    <input type="hidden" name="area" value="" />
<!--面包屑 start-->
        <div class="crumbs">
            <div class="block">
                <a href="../cosimcloud/index.html">首页</a><span id="leimu"> > 能力大厅</span>

</div>
        </div>
        <!--面包屑 end-->
        <!--搜索选项 start-->
        <div class="cpzx-commodity-classification">
            <div class="block">
                <div class="classification-title">
                    <span class="commdoity-name">发布能力</span>
                    <a href="/member/my.php?mid=5&action=add"  class="release">发布能力</a>
                </div>
                <div class="classification-list">
                   <span class="fenlei">
                    <div class="item i1 feilei">
                        <span>分类：</span>
                        <div class="text">
                            <div class="text-box" id="classBox" dname="typeid">
                <a value="-1" class="classification" onclick="return false;">全部</a>
                    <a value="0" class="classification" onclick="return false;">供应</a>
                    <a value="1" class="classification" onclick="return false;">提供服务</a>
                    <a value="2" class="classification" onclick="return false;">供应二手</a>
                    <a value="3" class="classification" onclick=" return false;">提供加工</a>
                    <a value="4" class="classification" onclick=" return false;">提供合作</a>
                    <a value="5" class="classification" onclick=" return false;">库存</a>
                            </div>
                        </div>
                    </div>
                    </span>
                    <div class="item i3">
                        <span>企业类型：</span>
                        <div class="text">
                            <div class="text-box" dname="type">
                            <a href="#">全部</a>
                            <?php if(is_array($com_type)) { foreach($com_type as $type_k => $type_v) { ?>
                                <a href="javascript:;"><?php echo $type_v;?></a>
                            <?php } } ?>
                                <!--<a href="#">国有企业</a>-->
                                <!--<a href="#">集体企业</a>-->
                                <!--<a href="#">股份合作企业</a>-->
                                <!--<a href="#">联营企业</a>-->
                                <!--<a href="#">有限责任公司</a>-->
                                <!--<a href="#">股份有限公司</a>-->
                                <!--<a href="#">私营企业</a>-->
                                <!--<a href="#">其他企业</a>-->
                                <!--<a href="#">合资经营企业(港或澳、台资)</a>-->
                                <!--<a href="#">合作经营企业(港或澳、台资)</a>-->
                                <!--<a href="#">港、澳、台商独资经营企业</a>-->
                                <!--<a href="#">港、澳、台商投资股份有限公司</a>-->
                                <!--<a href="#">其他港、澳、台投资企业</a>-->
                                <!--<a href="#">中外合资经营企业</a>-->
                                <!--<a href="#">中外合作经营企业</a>-->
                                <!--<a href="#">外资企业</a>-->
                                <!--<a href="#">外商投资股份有限公司</a>-->
                                <!--<a href="#">其他国外投资</a>-->
                                <!--<a href="#">个体户</a>-->
                                <!--<a href="#">个人合伙</a>-->
                                <!--<a href="#">其他个体经营</a>-->
                                <!--<a href="#">事业单位</a>-->
                                <!--<a href="#">其他</a>-->
                            </div>
                            <div class="but">
                                <a href="javascript:void(0);" class="submit a">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                        <a href="javascript:;" class="more">
                            <font>更多</font>
                        </a>
                    </div>
                    <!-- <div class="item i4">
                        <span>认证：</span>
                        <div class="text">
                            <div class="text-box">
                                <a href="#">认证</a>
                                <a href="#">未认证</a>
                            </div>
                            <div class="but">
                                <a href="#" class="submit">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                    </div> -->
                    <!--<div class="item i5">
                        <span>经营方式：</span>
                        <div class="text">
                            <div class="text-box">
                            <a href="#">全部</a>
                                <a href="#" option="1">生产型</a>
                                <a href="#" option="2">贸易型</a>
                                <a href="#" option="3">服务型</a>
                                <a href="#" option="4">研发型</a>
                                <a href="#" option="0">其他类型</a>
                            </div>
                            <div class="but">
                                <a href="#" class="submit a">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a href="#" class="button1">多选</a>
                    </div>-->
                    <div class="item i6">
                        <span>企业规模：</span>
                        <div class="text">
                            <div class="text-box" dname="size">
                            <a href="#">全部</a>
                            <?php if(is_array($com_size)) { foreach($com_size as $size_k => $size_v) { ?>
                                <a href="javascript:;"><?php echo $size_v;?></a>
                            <?php } } ?>
                            </div>
                            <div class="but">
                                <a href="#" class="submit a">确定</a>
                                <a href="#" class="onoff">开启多选</a>
                            </div>
                        </div>
                        <a class="button1" href="#">多选</a>
                        <a href="javascript:;" class="more">
                            <font>更多</font>
                        </a>
                    </div>      
                </div>
            </div>
        </div>
        <!--搜索选项 end-->
<div class="yzz_classify_list" style="overflow:hidden;">
<div class="cpzx-commodity-condition">
                <div class="block">
                    <div class="div1">
                        <a href="javascript:void(0)" id="sumUp" class="a1" onclick="clearorder()">综合</a>
                        <a href="javascript:void(0)" class="a2" onclick="changeorder('createTime',this)"  value="desc"/>发布时间↓</a>
                    <input type="hidden" name="create_time">
                        <a href="javascript:void(0)" class="a3" onclick="changeorder('endtime',this)" value="asc">截止时间↓</a>
                    <input type="hidden" name="endtime">
                        <!--  <a href="javascript:void(0)" class="a4" onclick="changeorder('a.searchCount',this)" value="asc">热度↓</a> -->
                        <input name="shiming" id="shiming" class="a4" autocomplete="off" type="checkbox" onClick="certification(this);">实名认证</input>
                        <!--suntao add city filter begin-->
                        <a class="allZone" dname="area">
                            <span>所在地区</span>
                            <div class="zoneFilter">
                                <p>所有地区</p>
                                <ul class="zonefilterList filter">
                                <li value="">全部</li>
                                <?php if(is_array($area_res)) { foreach($area_res as $k => $v) { ?>
                                    <li value="<?php echo $v['areaid'];?>"><?php echo $v['areaname'];?></li>
                                <?php } } ?>
                                </ul>
                            </div>     
                        </a>
<!--suntao add city filter begin-->
<!-- select star begin -->
<a class="allStar" dname="vip">
                            <span>质量认证</span>
                            <div class="starFilter">
                                <ul class="starfilterList filter vip">
                                <li value="">全部</li>
                                    <li  value="1">一星级</li>
                                    <li  value="2">二星级</li>
                                    <li  value="3">三星级</li>
                                    <li  value="4">四星级</li>
                                    <li  value="5">五星级</li>
                                </ul>
                            </div>     
                        </a>
                        <!-- select star end -->
                    </div>
                    <div class="div6" style="margin-left: 220px;">
                        <input type="text" id="keyWord" value="" name="input" onkeydown="javascript:onkeyselect();" autocomplete="off" placeholder="在结果中搜索"/>
                        <input type="submit" class="submit a" value="搜索" onclick="return false;"/>
                    </div>
                </div>
            </div>
</form>
            <div id="releaseHallList" style="width:1230px; margin:auto">
<iframe id="capability_Imageiframe" name="proIfram" scrolling="no" style="width: 100%; height: 3453px;" border="0" src="/sell/list.php" frameborder="no"></iframe>
            </div>
</div>
<div class="popup" style="display:none;"></div>
        <div class="popupCon" style="display:none;" >
            <div class="popupCon_img" >
                <img src="../pages/zone/qltyAuth/images/popup7_img.png"  alt="" />
                <span class="popup_close"></span>
                <a  class="popup_link"></a>
            </div>
        </div>
<!--主体内容 end-->
 
   
<!--part7End-->
  
<?php include template('cloudproduce/footer');?>
<script>
$('[dname="typeid"] a').on('click', function(){
$(this).siblings().removeClass('now');
$(this).addClass('now');
});
//单选
$('.text-box a').on('click', function(){
var that = this;
if ($(that).parents('.text').is('.c.m')) return;
var p = $(that).parent();
var val = $(that).attr('value') || that.innerHTML;
$('[name="'+p.attr('dname')+'"]').val(val);
submit();
});
//多选
$('.submit.a').on('click', function(){
var that = this;
var p = $(that).parent().prev();
var vals = '';
p.children('.now').each(function(){
vals += this.innerHTML + ',';
});
$('[name="'+p.attr('dname')+'"]').val(vals);
setTimeout('clearBind();', 500);
submit();
});
function clearBind () {
//清除多选
$('.text-box').one('click', function(ev){
var that = ev.target;
if (!$(that).is('i')) return;
$('[name="'+$(this).attr('dname')+'"]').val(null);
submit();
});
}
$('.filter li').on('click', function(){
console.log('in');
var that = this;
var p = $(that).parents('.allStar,.allZone');
var val = $(that).attr('value') || that.innerHTML;
$('[name="'+p.attr('dname')+'"]').val(val);
submit();
});
//排序
$('.a2,.a3,.a4').on('click', function(){
var that = this;
var p = $(that).next('input');
if (p) {
var val = $(that).attr('value');
p.val(val);
}
submit();
});
function submit () {
var form = $('#listform');
form.submit();
}
</script>
</html>
