<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>云素材中心-INDICS</title>
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/styles/material/reset.css"/>
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/styles/material/YSC.css"/>
<script type="text/javascript" src="http://material.casicloud.com/js/jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://material.casicloud.com/js/jquery/jquery.form.js"></script>
<script type="text/javascript" src="http://material.casicloud.com/js/layer/layer.js"></script>
</head>
<body style="min-width:1230px;">
<!--顶部 start-->
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/pages/industrialMall/newIndex/css/page.css" />
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/global.css" />
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/home2.css" />
<script src="http://material.casicloud.com/js/jquery.mScroll.js"></script>
<!-- 重庆工业云，云制造top页面 -->
<div id="top_casi">
<link href="http://material.casicloud.com/pages/cloud1.0/yzz/css/common.css" rel="stylesheet" type="text/css" />
<link href="http://material.casicloud.com/pages/cloud1.0/css/common.17.9.5.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/reset2.css">
<link rel="stylesheet" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/matter_top-18.01.18.css">
<style tyle="text/css">
#wdyw{cursor:pointer;}
</style>
<script src="http://material.casicloud.com/js/htyw_ul.js"  type="text/javascript">
<!--云制造topbegin-->
   /*下拉二级菜单效果*/
   jQuery(function(){
   jQuery(".yzzpublic_nav_lists").mouseenter(function(){
//alert(111)
          jQuery(this).children(".yzzpublic_nav_lists1").show();
         });
   jQuery(".yzzpublic_nav_lists").mouseleave(function(){
  jQuery(this).children(".yzzpublic_nav_lists1").hide();
   });
   
   });
</script>
 <!--头部第一部分 开始-->
   
  <!-- header logout Begin -->
  <div class="g-matter-header">
    <a href="http://os.casicloud.com" class="m-header-home" target="_blank">云首页</a>
    <ul class="m-header-r">
      <li class="u-down-wrap">
        <a href="http://kf.casicloud.com/" target="_blank">客户服务</a>
      </li>
      <li>
        <a href="javascript:void(0);" id="login" onclick="javascript:doLogin();">登录</a>
      </li>
      <li>
        <a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=100" target="_blank" class="u-to-reg">免费注册</a>  
      </li>
    </ul>
  </div>
    <!--头部第一部分 结束-->
    <!--头部第二部分 开始-->
    
    
    <!-- logo/search Begin -->
  <div class="g-matter-sch">
    <div class="m-sch-ct" style="height:90px;">
      <div class="u-logo-wrap">
        <a href="http://material.casicloud.com/material/cloudMaterialCenter/list.ht" class="u-logo-index" style="background:url(http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/rjc/resources/style/soft/images/g_matter_top_logo_icon.png)"></a>
        <a href="http://material.casicloud.com/material/cloudMaterialCenter/list.ht" class="u-logo-area">云素材</a>
      </div>
      
      <div class="u-sch-wrap">
      <input type="hidden" id="selectType" value="素材"/>
        <input type="text" class="u-sch-ipt" placeholder="请输入关键词" id="searchKeyWord"  onkeydown="if(event.keyCode==13){ch();}" value=""/>
        <a  id="search_v1" class="u-sch-btn">搜索</a>
      </div>
    </div>
  </div>
<!-- logo/search Begin -->
    <!--头部第二部分 结束-->
     <!-- <div class="banner-home clearfix" style="height:45px;">
        </div> -->
    
</div>
<!-- 高新区top页面 -->
<div id="top_gaoxin" style="display: none">

<!--云制造topbegin-->
<script>
   /*下拉二级菜单效果*/
   jQuery(function(){
   jQuery(".yzzpublic_nav_lists").mouseenter(function(){
//alert(111)
          jQuery(this).children(".yzzpublic_nav_lists1").show();
         });
   jQuery(".yzzpublic_nav_lists").mouseleave(function(){
  jQuery(this).children(".yzzpublic_nav_lists1").hide();
   });
   
   });
</script>
 <!--头部第一部分 开始-->
    <div class="header1">
        <div class="block">
            <div class="welcome">
                  
<span>您好，欢迎来到重庆工业云！</span>
<span class="loginbefor">
<a href="javascript:doLogin();">请登录</a> |
<a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=100">免费注册</a>
</span>

<!--登录之后-->


            </div>
            <div class="ewm">
                <a href="javascript:void(0);" class="a1">微信公众号
<div class="box">
<img src="http://material.casicloud.com/pages/cloud1.0/htcloud/images/2wm2.jpg" style="width: 125px;height: 125px;"/>
</div>
</a>
                <a href="javascript:void(0);" class="a2">重庆工业云APP
<div class="box">
<img src="http://material.casicloud.com/pages/cloud1.0/htcloud/images/liantu_tz.png" style="width: 125px;height: 125px;"/>
</div>
</a>
            </div>
            <div class="list">
                <span class="classify">
    我的云网
 <div class="ywst-box">
        <ul class="ywst-drop">
    <li class="st-topCart">买家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/cosimcloud/addIframe.ht?type=2',true);">发布需求</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoInquiryOrder',true);">需求订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/inquiry/addInquiry.ht',true);">发布询价单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/home.ht?from=gotoProcurementOrder',true);">采购订单</a></li>
</ul>
<ul class="ywst-drop">
    <li class="st-topCart">卖家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/cosimcloud/abilityPublishIframe.ht?type=2',true)">发布能力</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoAbilityOrder',true);">能力订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/cosimcloud/industryAbilityPublish.ht',true)">发布商品</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('http://cocenter.casicloud.com/home.ht?from=gotoSaleOrder',true);">销售订单</a></li>
</ul>
</div>
</span>
<span class="myservice_classify"><a href="http://kf.casicloud.com/kw_sell.html" target="_blank">客户服务中心</a>
    <ul class="myservice-box" style="height:143px;">
    <li><a href="http://kf.casicloud.com/question.html" target="_blank">常见问题</a></li>
<li><a href="http://kf.casicloud.com/userHelp.html" target="_blank">用户手册</a></li>
<li><a href="http://kf.casicloud.com/contact.html" target="_blank">在线咨询</a></li>
<li><a target="_blank" href="http://cocenter.casicloud.com/cloud/tenant/tenantInfo/certification.ht">企业认证</a></li>
<li><a target="_blank" href="http://cocenter.casicloud.com/busiSub/incrementService/cloudBusisubResour/business.ht">商机订阅12</a></li>
<li><a target="_blank" href="http://cocenter.casicloud.com/advertisement/adInfoManager/cloudAdInfo/adviertisement.ht">广告服务</a></li>
</ul>
    </span>


<a href="http://cocenter.casicloud.com/industryMall/hall/industryIndex.ht">工业品共享中心</a>
            </div>
        </div>
    </div>
    <!--头部第一部分 结束-->
    <!--头部第二部分 开始-->
    <div class="header2">
        <div class="block">
            <div class="yzzpublic_logo">
<img src="http://material.casicloud.com/saas/nankang/images/xqrd-logo.png" alt="Planets" usemap="#planetmap" />
<map name="planetmap">
  <area href="http://core.casicloud.com" shape="rect" coords="0,0,174,48"></a>
  <area href="http://cocenter.casicloud.com/cosimcloud/index.ht" shape="circle" coords="175,0,299,48"></a>
</map>
</div>
            <div class="search">
                <div class="text-box">
                    <div class="select">
                        <span  id="selectType">能力</span>
                        <ul>
                            <li onclick="btshow(this)">能力</li>
                            <li onclick="btshow(this)">需求</li>
                            <li onclick="btshow(this)">企业</li>
                            <li onclick="btshow(this)">软件</li>
                        </ul>
                    </div>
                    
                    <div class="text">
                       <input type="text" id="searchKeyWord"  onkeydown="if(event.keyCode==13){ch();}"/>
                    </div>
                    <div class="submit">
                       <input type="submit"  onclick="ch()" value="" />
                       <form action="http://rjc.casicloud.com/search.htm" id="rjForm">
                       <input name="type" type="hidden" id="type" value="goods" />
                       <input name="keyword" type="hidden" id="keyword" class="toph_sear_txt"/>
                       </form>
                    </div>
                </div>
                <div class="link">
                    <a href="javascript:void(0);">铝型材</a> |
                    <a href="javascript:void(0);">元器件</a> |
                    <a href="javascript:void(0);">循环试验</a> |
                    <a href="javascript:void(0);">仿真计算</a> |
                    <a href="javascript:void(0);">盐雾试验</a>
                </div>
            </div>
        </div>
    </div>
    <!--头部第二部分 结束-->
     <div class="banner-home clearfix" style="height:45px;">
     <div class="line-nav">
            <div class="block">
                <div class="nav-tit">
                    <a href="javascript:void(0);" id="zhuti">主题服务</a>
                </div>
                <div class="tit-list">
                    <div class="item">
                        <a href="http://cocenter.casicloud.com/cosimcloud/index.ht" class="a">首页</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" class="a">云协作中心</a>
                        <ul>
                             <li><a href="http://cocenter.casicloud.com/cosimcloud/searchInquiry.ht" target="_blank">需求大厅</a></li>
      <li><a href="http://cocenter.casicloud.com/cosimcloud/searchRelease.ht" target="_blank">能力大厅</a></li>
      <li><a href="http://cocenter.casicloud.com/platform/pages/cloud_made_html/Supply.jsp" target="_blank">云供应链</a></li>
      <li><a href="http://cocenter.casicloud.com/platform/pages/cloud_made_html/Sales.jsp" target="_blank">云销售链</a></li>
      <li><a href="http://cocenter.casicloud.com/platform/pages/cloud_made_html/Aftermarket.jsp" target="_blank">云售后链</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cocenter.casicloud.com/cosimcloud/cloudDesign.ht" class="a">云设计中心</a>
                        <ul>
   <li><a href="http://cpdm.casicloud.com">C-PDM</a></li>
   <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudDesign.ht?type=1">云CAD</a></li>
   <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudDesign.ht?type=2">云CAE</a></li>
   <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudDesign.ht?type=3">云CAPP</a></li>
                       <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudDesign.ht?type=0">云PDM</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cocenter.casicloud.com/cosimcloud/cloudProduction.ht" class="a">云生产中心</a>
                        <ul>
                        <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudProduction.ht?type=0">云ERP</a></li>
        <li><a href="http://crp.casicloud.com">CRP</a></li>
   <li><a href="http://cmes.casicloud.com">C-MES</a></li>
   <li><a href="http://cocenter.casicloud.com/cosimcloud/cloudProduction.ht?type=3">虚拟工厂</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cocenter.casicloud.com/pool/soft/softType/index.ht" class="a">云资源中心</a>
                        <ul>
                            <!-- <li><a href="javascript:void(0);">软件资源</a></li>
                            <li><a href="#">专利资源</a></li>
                            <li><a href="#">标准化资源</a></li>
                            <li><a href="#">专家资源</a></li>
                            <li><a href="#">3D打印资源</a></li> -->
                            
                        <li><a href="http://rjc.casicloud.com" target="_blank">软件池</a></li>
    <li><a href="http://patent.casicloud.com/main/index.html" target="_blank">专利池</a></li>
    <li class="yzzpublic_nav_lists">
    
    
    <a href="http://cocenter.casicloud.com/pool/std/standardType/index.ht" target="_blank">标准池</a>
    
    
    </li>
    <li><a href="http://expert.casicloud.com/index.htm" target="_blank">专家池</a></li>
    <li><a href="http://cocenter.casicloud.com/cosimcloud/resource_3Dprint.ht" target="_blank">3D打印资源</a></li>
    
    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
</div>
<!-- 贵州云网top页面 -->
<div id="top_gz" style="display: none">

<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/public_headerfooter.css"/> 
<link rel="stylesheet" type="text/css" href="http://material.casicloud.com/pages/cloud1.0/yzz/css/reset.css"/>
<style>
.yzzpublic_searchcon .qzss .fenlei_choice {
  width: 87px;
  border: 1px solid #ccc;
  position: absolute;
  top: 40px;
  left: 0px;
  height: auto; 
  background-color: #f4f4f4;
  color: #555;
  display: none;
}
</style>
<!--头部第一部分 开始-->
    <div class="header1">
        <div class="block">
            <div class="welcome">
                  
<span>您好，欢迎来到贵州工业云创新服务平台！</span>
<span class="loginbefor">
<a href="javascript:doLogin();">请登录</a> |
<a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=100">免费注册</a>
</span>

<!--登录之后-->


            </div>
            <div class="ewm">
                <a href="#" class="a1">微信公众号
<div class="box">
<img src="http://material.casicloud.com/pages/cloud1.0/htcloud/images/2wm2.jpg" style="width: 125px;height: 125px;"/>
</div>
</a>
                <a href="#" class="a2">重庆工业云APP
<div class="box">
<img src="http://material.casicloud.com/pages/cloud1.0/htcloud/images/liantu_tz.png" style="width: 125px;height: 125px;"/>
</div>
</a>
            </div>
            <div class="list">
                 <span class="classify">
    我的云网
 <div class="ywst-box">
        <ul class="ywst-drop">
    <li class="st-topCart">买家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/inquiryAdd.ht',true);">发布需求</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoInquiryOrder',true);">需求订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/inquiry/addInquiry.ht',true);">发布询价单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoProcurementOrder',true);">采购订单</a></li>
</ul>
<ul class="ywst-drop">
    <li class="st-topCart">卖家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/abilityPublish.ht',true)">发布能力</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoAbilityOrder',true);">能力订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/industryAbilityPublish.ht',true)">发布商品</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoSaleOrder',true);">销售订单</a></li>
</ul>
</div>
</span>
<span class="myservice_classify">服务支持
<ul class="myservice-box">
<li><a target="_blank" href="http://material.casicloud.com/pages/cloud6.0/yzz/info/jsp/operateManual.jsp">用户手册</a></li>
<li><a target="_blank" href="http://material.casicloud.com/pages/cloud6.0/yzz/info/jsp/yunList.jsp">培训视频</a></li>
<li><a onclick="xiaon();" target="_blank" style="cursor: pointer;">平台客服</a></li>
<li><a target="_blank" href="http://material.casicloud.com/pages/cloud6.0/yzz/info/jsp/operate/shbz.jsp">售后保障</a></li>
</ul>
</span>
<a href="http://material.casicloud.com/industryMall/hall/industryIndex.ht">工业品共享中心</a>
            </div>
        </div>
    </div>
    <!--头部第一部分 结束-->
    
    <!--头部第二部分 开始-->
    <div class="header2">
        <div class="block">
            <div class="yzzpublic_logo">
<a href="http://gz.casicloud.com/">
<img src="http://material.casicloud.com/saas/nankang/images/logo_gz.png" height="48px" />
</a>
</div>
            <div class="search">
                <div class="text-box">
                    <div class="select">
                        <span  id="selectType">能力</span>
                        <ul>
                            <li onclick="btshow(this)">能力</li>
                            <li onclick="btshow(this)">需求</li>
                            <li onclick="btshow(this)">企业</li>
                        </ul>
                    </div>
                    <div class="text">
                       <input type="text" id="searchKeyWord"/>
                    </div>
                    <div class="submit">
                       <input type="submit"  onclick="search()" value="" />
                    </div>
                </div>
                <div class="link">
                    <a href="javascript:void(0);">铝型材</a> |
                    <a href="javascript:void(0);">元器件</a> |
                    <a href="javascript:void(0);">循环试验</a> |
                    <a href="javascript:void(0);">仿真计算</a> |
                    <a href="javascript:void(0);">盐雾试验</a>
                </div>
            </div>
        </div>
    </div>
    <!--头部第二部分 结束-->
     <div class="banner-home" style="height:45px;">
     <div class="line-nav">
            <div class="block">
                <div class="nav-tit">
                    <a href="#">主题服务</a>
                </div>
                <div class="tit-list">
                    <div class="item">
                        <a href="http://material.casicloud.com/cosimcloud/index.ht?type=gz" class="a">首页</a>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云协作中心</a>
                        <ul>
                             <li><a href="http://material.casicloud.com/cosimcloud/searchInquiry.ht" target="_blank">需求大厅</a></li>
      <li><a href="http://material.casicloud.com/cosimcloud/searchRelease.ht" target="_blank">服务大厅</a></li>
      <li><a href="http://material.casicloud.com/platform/pages/cloud_made_html/Supply.jsp" target="_blank">云供应链</a></li>
      <li><a href="http://material.casicloud.com/platform/pages/cloud_made_html/Sales.jsp" target="_blank">云销售链</a></li>
      <li><a href="http://material.casicloud.com/platform/pages/cloud_made_html/Aftermarket.jsp" target="_blank">云售后链</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云设计中心</a>
                        <ul>
                       <li><a href="http://material.casicloud.com/cosimcloud/cloudDesign.ht?type=0">云PDM</a></li>
   <li><a href="http://material.casicloud.com/pool/soft/softItem/view.ht?id=10000045560224&type=1" target="_blank">云CAD</a></li>
   <li><a href="http://material.casicloud.com/cosimcloud/cloudDesign.ht?type=2">云CAE</a></li>
   <li><a href="http://material.casicloud.com/pool/soft/softItem/view.ht?id=10000041310016&type=3" target="_blank">云CAPP</a></li>
   <li><a href="http://material.casicloud.com/cosimcloud/cloudDesignTask.ht">设计任务管理</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云生产中心</a>
                        <ul>
                        <li><a href="http://material.casicloud.com/cosimcloud/cloudProduction.ht?type=0">云ERP</a></li>
        <li><a href="http://material.casicloud.com/cosimcloud/cloudProduction.ht?type=1">云排产</a></li>
   <li><a href="http://material.casicloud.com/cosimcloud/cloudProduction.ht?type=2">云MES</a></li>
   <li><a href="http://material.casicloud.com/cosimcloud/cloudProduction.ht?type=3">虚拟工厂</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云资源中心</a>
                        <ul>
                            <!-- <li><a href="#">软件资源</a></li>
                            <li><a href="#">专利资源</a></li>
                            <li><a href="#">标准化资源</a></li>
                            <li><a href="#">专家资源</a></li>
                            <li><a href="#">3D打印资源</a></li> -->
                            
                        <li><a href="http://material.casicloud.com/pool/soft/softType/index.ht">软件池</a></li>
    <li><a href="http://patent.casicloud.com/main/index.html?type=gz">专利池</a></li>
    <li class="yzzpublic_nav_lists">
    
    
    <a href="http://material.casicloud.com/pool/std/standardType/index.ht" target="_blank">标准池</a>
    <ul class="yzzpublic_nav_lists1">
    <li><a href="http://material.casicloud.com/pool/std/standardType/index.ht">标准查询</a></li>
    <li><a href="http://material.casicloud.com/home.ht">需求发布</a></li>
    </ul>
    
    </li>
    <li><a href="http://expert.casicloud.com/index.htm" target="_blank">专家池</a></li>
    <li><a href="http://material.casicloud.com/cosimcloud/resource_3Dprint.ht">3D打印资源</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ysc_con">
<!--crumbs begin -->

<!--crumbs end -->

<div class="ysc_con">
<ul class="clearfix ysc_numBox">
<li class="icon1"><a href="javascript:void(0)">全站资源量        84</a></li>
<li class="icon2"><a href="javascript:void(0)">已下载        184</a></li>
<li class="icon3"><a href="javascript:void(0)">入驻企业数        1,504,751</a></li>
</ul>
<ul class="clearfix ysc_imgbox">
<li>
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=3940818" target="_blank"><img src="http://material.casicloud.com/styles/material/images/advertisement1.jpg"/></a>
</li>
<li>
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=600595" target="_blank"><img src="http://material.casicloud.com/styles/material/images/advertisement2.jpg"/></a>
</li>
<li>
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=600582" target="_blank"><img src="http://material.casicloud.com/styles/material/images/advertisement3.jpg"/></a>
</li>
<li>
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=600541" target="_blank"><img src="http://material.casicloud.com/styles/material/images/advertisement4.jpg"/></a>
</li>
</ul>
<div class="ysc_listBox">
<div class="clearfix cap">
<span>云素材库</span>
<a class="Upload"

onclick="remind()" 


>我要上传</a>
</div>
<dl class="titBox clearfix" id="category1">
<dt>一级分类</dt>
<dd>
<a href='javascript:void(0)' class='cur' onclick='searchMaterialByClassification(0, 1, this);' value="0" >全部</a>

<a onclick="searchMaterialByClassification('10000059500142','1',this); return false;" value="10000059500142" class="catename1" >产品设计图库</a>

<a onclick="searchMaterialByClassification('10000059500401','1',this); return false;" value="10000059500401" class="catename1" >标准件模型库</a>

</dd>
</dl>
<dl class="titBox clearfix" id="category2">
</dl>
<div class="clearfix checktBox">
<span>格式：    </span>
<select name="filetype" id="filetype" style="width:140px;" >
<option value="">全部</option>
  <option value ="pro/E">pro/E</option>
<option value ="CAXA实体设计">CAXA实体设计</option>
<option value ="CAXA电子图板">CAXA电子图板</option>
<option value ="AutoCAD">AutoCAD</option>
 </select>
<span>版本：     </span>
<select name="fileversion" id="fileversion" style="width:140px;" >
<option value="">全部</option>
 </select>
</div>
<div class="clearfix checktBox">
<span>排序：</span>
<div class="clearfix sort">
<a href="javascript:void(0)" onclick="sortFieldAndSeq(1, this)" value="DESC" class="cur">上传时间</a>
<a href="javascript:void(0)" onclick="sortFieldAndSeq(2, this)">下载次数</a>
<a href="javascript:void(0)" onclick="sortFieldAndSeq(3, this)" class="last">收藏次数</a>
</div>
</div>
<div>
<iframe  id="material_iframe" src="http://material.casicloud.com//material/cloudMaterialCenter/listIframe.ht?keyword=" name="proIfram" scrolling="no" style="width:100%;min-height: 600px;" 
frameborder="no" border="0" ></iframe>
</div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
var categoryname = "";
var filetypename = "";
var fileversionname = "";
var keyword = "";
//默认排序是按时间倒序
var orderField = "";
var orderSeq = "";
var loginUserName = '';
function remind(){
//未登录跳转登录页
if("" == loginUserName){
layer.alert("注册企业用户方可进行素材的上传/下载", {
  icon: 0
},function(){
top.location.href = doLoginMaterial('/material/cloudMaterialCenter/list.ht',true,true);
});
}else{
//个人用户
layer.alert("只有企业用户具有云素材上传/下载权限，请您注册企业用户", {
icon: 0
});
}
}
$(function(){
//绑定下级分类事件
$("#filetype").change(function(){
$("#fileversion").empty();
$("#fileversion").append("<option value=''>全部</option>");
//获取select选中的值
    var item = $("#filetype").val();
        if(item != ""){
        if(item == "pro/E"){
        $("#fileversion").append("<option value='Cero4.0'>Cero4.0</option>");
        $("#fileversion").append("<option value='Cero3.0'>Cero3.0</option>");
        $("#fileversion").append("<option value='Cero2.0'>Cero2.0</option>");
        $("#fileversion").append("<option value='Cero1.0'>Cero1.0</option>");
        $("#fileversion").append("<option value='wildfire3.0以下'>wildfire3.0以下</option>");
        $("#fileversion").append("<option value='wildfire3.0'>wildfire3.0</option>");
        $("#fileversion").append("<option value='wildfire4.0'>wildfire4.0</option>");
        $("#fileversion").append("<option value='wildfire5.0'>wildfire5.0</option>");
        }else if(item == "CAXA实体设计"){
        $("#fileversion").append("<option value='2007以下'>2007以下</option>");
        $("#fileversion").append("<option value='2007'>2007</option>");
        $("#fileversion").append("<option value='2008'>2008</option>");
        $("#fileversion").append("<option value='2009'>2009</option>");
        $("#fileversion").append("<option value='2010'>2010</option>");
        $("#fileversion").append("<option value='2011'>2011</option>");
        $("#fileversion").append("<option value='2013'>2013</option>");
        $("#fileversion").append("<option value='2014'>2014</option>");
        $("#fileversion").append("<option value='2015'>2015</option>");
        $("#fileversion").append("<option value='2016'>2016</option>");
        }else if(item == "CAXA电子图板"){
        $("#fileversion").append("<option value='2005以下'>2005以下</option>");
        $("#fileversion").append("<option value='2005'>2005</option>");
        $("#fileversion").append("<option value='2006'>2006</option>");
        $("#fileversion").append("<option value='2007'>2007</option>");
        $("#fileversion").append("<option value='2009'>2009</option>");
        $("#fileversion").append("<option value='2010'>2010</option>");
        $("#fileversion").append("<option value='2011'>2011</option>");
        $("#fileversion").append("<option value='2012'>2012</option>");
        $("#fileversion").append("<option value='2013'>2013</option>");
        $("#fileversion").append("<option value='2014'>2014</option>");
        $("#fileversion").append("<option value='2015'>2015</option>");
        $("#fileversion").append("<option value='2016'>2016</option>");
        }else if(item == "AutoCAD"){
        $("#fileversion").append("<option value='2002以下'>2002以下</option>");
        $("#fileversion").append("<option value='2002'>2002</option>");
        $("#fileversion").append("<option value='2004'>2004</option>");
        $("#fileversion").append("<option value='2006'>2006</option>");
        $("#fileversion").append("<option value='2007'>2007</option>");
        $("#fileversion").append("<option value='2008'>2008</option>");
        $("#fileversion").append("<option value='2010'>2010</option>");
        $("#fileversion").append("<option value='2011'>2011</option>");
        $("#fileversion").append("<option value='2012'>2012</option>");
        $("#fileversion").append("<option value='2013'>2013</option>");
        $("#fileversion").append("<option value='2014'>2014</option>");
        $("#fileversion").append("<option value='2015'>2015</option>");
        $("#fileversion").append("<option value='2016'>2016</option>");
        }
        }
        //获取文件类型
        filetypename = $("#filetype").val();
        //清空上一个版本
        fileversionname = "";
        keyword = "";
        searchMaterialList();
});

$("#fileversion").change(function(){
//获取文件版本
fileversionname = $("#fileversion").val();
keyword = "";
searchMaterialList();
});

/* //获取顶级分类
$.ajax({ 
    url:"/material/cloudMaterialCategory/getMaterialCategory.ht" , 
        type:"post" , 
        dataType:"json",
        success:function(data){
            var content = "<dt>一级分类</dt>";
            content += "<dd><a href='javascript:void(0)' class='cur' onclick='searchByClassification(0, 1, this);'>全部</a>"
            $.each(data, function (index, item) {  
            var id = data[index].id; 
                var name = data[index].name;
                var level = data[index].level; 
                content += "<a onclick='searchByClassification("+id+","+level+",this); return false;' class='catename1' >"+name+"</a>";
            });
            content += "</dd>";
            $("#category1").append(content);
       }
    }); */

});
function searchMaterialByClassification(id, level, obj){
searchByClassification(id, level, obj);
keyword = "";
searchMaterialList();
}
function searchByClassification(id, level, obj){
//选项切换
$(obj).addClass("cur").siblings("a").removeClass("cur");
//次级分类
if(level == 1){
if(id == 0){
//点击一级分类全部
$("#category2").empty();
}else{
//点击一级分类(除全部)
var showUrl ="http://material.casicloud.com/material/cloudMaterialCategory/getMaterialCategory.ht?parentid=" + id;
        $.ajax({
          url:showUrl, 
              type:"post" , 
            async: false,
              dataType:"json",
              success:function(data){
              var content = "<dt>二级分类</dt>";
              content += "<dd><a href='javascript:void(0)' class='cur' onclick='searchMaterialByClassification(0, 2, this);' value='0' >全部</a>";
                  $.each(data, function (index, item) {
                  var id = data[index].id; 
                      var name = data[index].name; 
                   var level = data[index].level; 
                   content += "<a onclick='searchMaterialByClassification("+id+","+level+",this); return false;' class='catename2' value='"+id+"' >"+name+"</a>";
                  });
                content += "</dd>";
                $("#category2").empty();
      $("#category2").append(content);
              }
          });
}
}
//清空类别名称
categoryname = "";
//导航
var cateTitle = "";
//获取顶级分类名称
if(level == 1){
categoryname = (id == 0)?"":$(obj).text();
cateTitle = categoryname;
}else if(level == 2){
//获取一级分类名称
var categoryname1 = $(obj).parent().parent().prev().children("dd").children(".cur").text();
//获取二级分类名称
var categoryname2 = (id == 0)?"":$(obj).text();
categoryname = categoryname1 + ">" + categoryname2;
//导航
cateTitle = categoryname1 + ((categoryname2 == "")?"":(" > " + categoryname2));
}
if(cateTitle != ""){
//清空上一次导航
$(".ysc_crumbs").children("span").remove();
$(".ysc_crumbs").append("<span> > " + cateTitle + "</span>");
}else{
//选择一级分类全部时清空导航
$(".ysc_crumbs").children("span").remove();
}

}

function sortFieldAndSeq(type, obj){
var o = $(obj);
//排序标签切换
o.addClass("cur").siblings("a").removeClass("cur");
orderSeq = o.attr("value");
orderSeq = (orderSeq == "DESC")?"ASC":"DESC";
o.attr("value", orderSeq).siblings("a").removeAttr("value");
//上传时间
if(type == 1){
orderField = "createtime";
}else if(type == 2){
//下载次数
orderField = "downloadNum";
}else if(type == 3){
//收藏次数
orderField = "collectionNum";
}
keyword = "";
searchMaterialList();
}

function searchMaterialList(){
var searchUrl ="http://material.casicloud.com/material/cloudMaterialCenter/listIframe.ht?keyword="+keyword+"&categoryname="
+categoryname+"&filetypename="+filetypename+"&fileversionname="+fileversionname
+"&orderField="+orderField+"&orderSeq="+orderSeq;
$("#material_iframe").attr("src", encodeURI(encodeURI(searchUrl)));
}
$(function(){
var cname = '';
//从详情页点导航过来
if(cname){
var cns = cname.split(">");
if(cns.length==1){
  $('#category1 a').each(function(){
if(cns[0]==$.trim($(this).text())){
$(this).click();
}
 });
     }else if(cns.length==2){
     $('#category1 a').each(function(){
if(cns[0]==$.trim($(this).text())){
$(this).click();
}
 });
   
  $("#category2 dd a").each(function(){
  if(cns[1]==$.trim($(this).text())){
$(this).click();
}
   });
     }
   keyword = "";
}else{
//非从详情页进入
var searchUrl ="http://material.casicloud.com/material/cloudMaterialCenter/listIframe.ht?keyword=" + keyword;
$("#material_iframe").attr("src", encodeURI(encodeURI(searchUrl)));
}

});
function setIframeHeight(documentHeight){
$('#material_iframe').height(documentHeight);
}
</script>
<?php include template('footer-index');?>
