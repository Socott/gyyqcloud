<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" />
<meta charset="utf-8" />
<title>云制造</title>
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/css/pages.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" type="text/css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/css/clound.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/demandAbility.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/reset1.css"/>
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/hongshanshan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/zoneOrgInfoStartlevel.css"/>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/jquery/jquery-1.10.2.min.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/js/global.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/layer/layer.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/zoneOrgInfoStartlevel.js"></script>
<script type="text/javascript">
    var indexUrl="http://core.casicloud.com";
    var fileCtx="https://oby0yx23h.qnssl.com/";
    </script>
<script type="text/javascript">
function approve(obj,inqId,inqEntId,states,isblack){
var orgid = "";
if(states == '0'){
$.ajax({
url:"/zone/zoneOrgInfoStarlevel/zoneOrgInfoStarlevel/checkLevel.ht",
data:{orgid:orgid},
success:function(data){
if(data.level==null||data.level==undefined){//没有质量认证
window.parent.popup(data.orgadmin,data.indexUrl);
}else{
bj(obj, inqId,inqEntId,isblack);
}
}
});
}else{
bj(obj, inqId,inqEntId,isblack);
}
}


function bjok(obj,url, inqId, default_href){
//已登录
 jQuery.post(url,{inqId:inqId},function(data){
if(data.logIn){
parent.layer.alert("您未登录，请登录再在报价！",function(){
window.top.doLogin();
});
return;
}else if(data.quote){
parent.layer.alert("您已报过价，不可重复报价");
return;
}else{
window.top.location.href=default_href;
} 
}); 
}
    
$(function(){
//zone filter close btn
 $('.filterResultclose').click(function(){
             $(this).parent().hide();
         });
$(".authen .a1").mouseenter(function(){
layer.tips('<span style="color:black">实名认证</span>', this,{
tips: [3, 'RGB( 255, 251, 240) '],
  time: 40000
});
});
$(".authen .a1").mouseout(function(){
layer.closeAll('tips');
});

$(".authen .a2").mouseout(function(){
layer.closeAll('tips');
});
$(".authen .a2").mouseenter(function(){
layer.tips('<span style="color:black">实地认证</span>', this,{
tips: [3, 'RGB( 255, 251, 240) '],
  time: 40000
});
});

$(".authen .u-a1,.authen .u-a2,.authen .u-a3,.authen .u-a4,.authen .u-a5").mouseenter(function(){
layer.tips('<span style="color:black">履约认证</span>', this,{
tips: [3, 'RGB( 255, 251, 240) '],
  time: 40000
});
});

$(".authen .u-a1,.authen .u-a2,.authen .u-a3,.authen .u-a4,.authen .u-a5").mouseout(function(){
layer.closeAll('tips');
});
});


function srmLogin(){
   var url="http://uc.casicloud.com/cg/toLogin.ht?url=http://221.226.124.181:8000/srm/sso_login.screen";
   window.open(url);
   }
</script>
<script type="text/javascript">
$(function(){
$(".bwIndex_apply", parent.document).find("div[class=showNum]").find("span").text("611");
$(".pagination").append("<div style='display: inline-block;margin-left: 10px;'><span>共计611条</span></div>");

        $(".demandHall_ul li .demandHall_titText a").each(function(){
        var content = $("#searchKeyWord", parent.document).val().trim();
        var bodyHtml = $(this).html().trim();
reger = new RegExp(content,"gm");
        reslut = bodyHtml.replace(reger, "<font color='red'>$&</font>");
        $(this).html(reslut);
        });
        
});
</script>
</head>
<body>
<!-- 新版云制造商品列表start -->
<div class="demandHall cpzx-commodity-list">
      <div class="cpzx-warp-commodity2 commodity-list now"> 
    <div class="block">
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
          <ul class="demandHall_ul">
        <li>
              <div class="demandHall_tit">
            <div class="demandHall_titText" style="display: -webkit-inline-box;"> <a target="_blank" href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>"> <?php echo $t['title'];?> </a> </div>
            <div class="demandHall_icon"> </div>
            <div class="demandHall_time"> <span>发布时间：
             <?php echo timetodate($t['edittime'], 'Y-m-d');?> </span> <span>截止时间：<?php echo timetodate($t['edittime'], 'Y-m-d');?></span> </div>
          </div>
              <div class="demandHall_name">
            <div class="demandHall_nameCon"> <a target="_blank" href="<?php echo $t['linkurl'];?>" title="<?php echo $t['company'];?>"> <?php echo $t['company'];?> </a> </div>
            <div class="demandHall_nameIcon">
                  <div class="authen" style="height:34px;display:inline-block;margin-top:25px;margin-right: 46px;float:left;"> <a href="#" id='a1'   class="a1"><span>实名认证</span></a> <a href="#" id='a2'   class="a2"><span>实地认证</span></a> <a  class="famousCompany" style="float:left;" href="http://cocenter.casicloud.com/b2b/famousCompany/famousCompanyPurchase/index.ht" target="_blank"></a> <a class="u-a " href="http://core.casicloud.com/agreement/b2bAgreementAuthen/index.ht" target="_blank"></a> </div>
                </div>
          </div>
              <div class="demandHall_infor">
            <div class="demandHall_infor_con"> 已报价企业<span class="demandHall_color1">0</span>家 </div>
            <div class="demandHall_infor_con"> <span>还剩： <span name="leftHour"><span name="remainingTime" style="color: red;">2 天 6 小时</span></span></span> </div>
            <div style="text-overflow: ellipsis;width: 173px;overflow: hidden;white-space: nowrap;">交付地点：<?php echo $t['address'];?></div>
          </div>
              <div class="demandHall_btn"> <a href="<?php echo $t['linkurl'];?>" target="_blank" class="demandHall_btn2">查看详情</a> <a href="javascript:void(0)"   class="demandHall_btn1" onclick="window.top.doLogin();" style="margin-top: 15px;">我要报价</a> </div>
            </li>
      </ul>
 <?php } } ?>
          <div class="sj1210_fenye" style="width:100%">
        <div class="digg">
              <div class="page">
            <div class="pagination">
             <div class="pages"><?php echo $pages;?></div> 
            </div>
      </div>
          
          <!-- 分页bar 结束--> 
        </div>
      </div>
        </div>
  </div>
    </div>
<input id="tenantid" type="hidden" name="tenantid" value=/>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/release/commodity.js"></script>
</body>
</html>
