<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" />
<meta charset="utf-8" />
<title>云制造</title>
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/pages.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/listPage/css/yzz_classify.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/listPage/css/reset.css"/>
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/hongshanshan.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/css/clound.css" type="text/css" />
<style>body {height: auto;}</style>
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" type="text/css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/css/cpzx.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/zoneOrgInfoStartlevel.css"/>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/jquery/jquery-1.10.2.min.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/jquery.mScroll.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/release/global.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/moble.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/layer/layer.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/zoneOrgInfoStartlevel.js"></script>
<script type="text/javascript">
$(function(){
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
});
</script>
<style type="text/css">
.authen a:hover span {
position: fixed;
}
</style>
<script type="text/javascript">
$(function(){
$(".bwIndex_apply", parent.document).find("div[class=showNum]").find("span").text("45");
$(".pagination").append("<div style='display: inline-block;margin-left: 10px;'><span>共计45条</span></div>");
$(".item-commodity .text h2 a").each(function(){
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
<!--商品列表 start-->
<div class="cpzx-commodity-list">
      <div class="cpzx-warp-commodity commodity-list now"> 
    <div class="block" style="margin-top:-15px;">
    
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
      <div class="item-commodity">
        <div class="img"> <a href="<?php echo $t['linkurl'];?>" target="_blank"> <img title="<?php echo $t['title'];?>" src="<?php echo imgurl($t['thumb']);?>" onError="this.src='http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter//pages/cloud1.0/yzz/body/images/nengli.jpg'" height="238px;" width="214px;" > </a> </div>
        <div class="text">
              <h2 title="<?php echo $t['title'];?>"> <?php echo $t['title'];?> </h2>
              <p class="p1" title="<?php echo $t['keyword'];?>"><?php echo $t['keyword'];?></p>
              <div class="p2" style="text-overflow: ellipsis;width: 173px;overflow: hidden;white-space: nowrap;">所在地：<?php echo $t['address'];?></div>
              <?php if($t['fee']>0) { ?>
              <p class="p121"><?php echo $t['fee'];?></p>
              <?php } ?>
              <?php if($t['fee']==0) { ?>
              <p class="p121">价格面议</p>
              <?php } ?>
              </a>
              <div class="t1" style="position:relative;height:34px;">
            <p> <a target="_blank" href="#" style="font-size:10px;" title="<?php echo $t['company'];?>"> <em><?php echo $t['company'];?> </em> </a> </p>
            <div class="authen" style="position:absolute;top:0;right:0;margin:0;height:32px;"> <a href="#" style="margin-bottom: 19px;display: inline-flex;" id='a1'  class="a1"><span>实名认证</span></a> <a class="level2 zlrz" style="margin-bottom: 19px;display: inline-flex;width:24px;height:24px;" href="#" target="_blank"></a> </div>
          </div>
            </div>
      </div>
<?php } } ?>
    
          <!-- 分页bar 开始-->
          
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
<!--商品列表 end--> 
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/js/release/commodity.js"></script>
</body>
</html>