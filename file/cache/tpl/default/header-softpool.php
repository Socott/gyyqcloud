<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="icon" href="javascript:void(0)" mce_href=""
type="image/x-icon" />
<link rel="shortcut icon" href="javascript:void(0)" mce_href=""
type="image/x-icon">
<meta http-equiv="x-ua-compatible" content="ie=8" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/system/front/default/css/public.css" type="text/css" rel="stylesheet" />
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/js/jquery-1.6.2.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/js/DataLazyLoad.min.js"></script>
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/softPondReset.css" rel="stylesheet" type="text/css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/softPondCommon.css" rel="stylesheet" type="text/css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/softPond.css" rel="stylesheet" type="text/css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/common.17.9.5.css" rel="stylesheet" type="text/css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/matter_top-18.01.18.css" rel="stylesheet" type="text/css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/css/reset2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/js/jquery.flexslider-min.js"></script>
    
<style>
.menu-hd{height:100%;}
.menu-hd b{top:20px;}
.menu:hover .menu-hd b{top:20px;}
.mytaobao .menu-bd{width:80px; top:40px;}
.mytaobao .menu-hd{padding-top:0; margin-top:0;}
</style>
 <div class="g-matter-header">
    <a href="http://os.casicloud.com/" class="m-header-home" target="_blank">云首页</a>
       <ul class="m-header-r">
     <li class="u-down-wrap">
     <a href="http://cas.casicloud.com/login?service=http://rjc.casicloud.com:80/CAS/checkLogin.htm?backurl=http://rjc.casicloud.com/index.htm">我的订单</a>
      </li>
      
  <li class="u-down-wrap">
          <a href="http://cas.casicloud.com/login?service=http://rjc.casicloud.com:80/CAS/checkLogin.htm?backurl=http://rjc.casicloud.com/index.htm" class="u-goods_cart">购物车</a>
      </li>
      <li class="u-down-wrap">
        <a href="http://kf.casicloud.com/" target="_blank">客户服务</a>
      </li>
      <li>
        <a href="javascript:void(0);" id="login" onclick="javascript:doLogin();">登录</a>
      </li>
      <li>
        <a href="javascript:register();" class="u-to-reg">免费注册</a>  
      </li>
    </ul> 
  </div>
<script>
jQuery(document).ready(function(){
  jQuery(".toph_bgsear li").mouseover(function(){
      jQuery(".toph_bgsear>li").show();
  }).mouseleave(function(){
       jQuery(".toph_bgsear>li").last().hide();
  }).click(function(){
 var index=jQuery(this).index();
 if(index==1){
   var f_text=jQuery(".toph_bgsear li").find("a").first().text();
       jQuery(".toph_bgsear li").find("a").first().html(jQuery(this).find("a").text()+"<s></s>");
   jQuery(".toph_bgsear li").find("a").last().text(f_text);
   jQuery("#type").val(jQuery(this).attr("type"));
   jQuery(".toph_bgsear>li").last().hide();
 }
  });
  jQuery(".two_code_a").click(function(){
  jQuery(this).parent().remove();
  });

});
function search_form(){
  var keyword=arguments[0];
  var type=arguments[1];
  if(keyword!=""&&keyword!=undefined){
   jQuery("#keyword").val(keyword);
  }
  if(type!=""&&type!=undefined){
    jQuery("#type").val(type);
  }
  jQuery("#searchForm").submit();
  jQuery("#keyword").val("");
}
</script>
<div class="softPond_search">
 <div class="m-sch-ct">
      <div class="u-logo-wrap">
        <a href="javascript:void(0);" class="u-logo-index"></a>
        <a href="index-2.html" class="u-logo-area">云端工业软件</a>
      </div>
</div> 

    <div class="search">
        <form action="https://rjc.casicloud.com/search.htm" method="post"  id="searchForm">
        <input name="type" type="hidden" id="type" value="goods" />
            <div class="submit">
            <div class="searchCon">
                <span class="searchTip">应用</span>
                <input type="text" id="keyword" name="keyword" placeholder="搜索其实真的很简单！" x-webkit-speech lang="zh-CN" class="searchTxt">
                </div>
                <a href="javascript:search_form();" class="searchBtn"></a>
            </div>
            <div class="keyword">
                 <a href="javascript:void(0);" onclick="search_form('重庆工业云视频会议','goods');">重庆工业云视频会议</a>  <a href="javascript:void(0);" onclick="search_form('CAD','goods');">CAD</a>  <a href="javascript:void(0);" onclick="search_form('MSC','goods');">MSC</a>  <a href="javascript:void(0);" onclick="search_form('模具','goods');">模具</a>             </div> 
        </form>
    </div>
</div>
<div class="softPond_nav">
    <div class="navItem">
        <a href="javaScript:void(0)" class="allCate" >全部分类</a>
        <div class="navList">
                        <a href="/softpool/">首页</a>
                <a href="/brand/">品牌</a>
                <a href="/softpool/list-shop.php">店铺</a>
            </div>
    </div>
</div>