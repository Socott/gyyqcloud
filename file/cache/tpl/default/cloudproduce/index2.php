<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="author" content="www.fractal-technology.com">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no,email=no,adress=no">
<script src="js/jquery/jquery-1.10.2.min.js"></script>
<title>云制造-重庆工业云平台-中国工业互联网平台</title>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan style='display:none' style='display:none' id='cnzz_stat_icon_1261154440'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1261154440%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<style type="text/css">
/* 顶部通栏广告 */
.ad-top2-lst{width: 1230px;height: 156px;margin: -20px auto 0;}
.ad-top2-lst .item-right{float: right;}
.ad-top2-lst .item-left{float: left;}
.ad-top2-lst img{display: block;}
.number i{
    color: #fb7e04;
    font-size: 28px;
    font-family: 'Impact';
    position: static;
    top: 45px;
    left: 25px;
}
.home2-page-imglist .check .box1 {
    width: 100%;
    height: 247px;
    background: #fff;
    }
    /* 有链接的配图鼠标指到图片时光标更改为可点击样式 */
  #pointer{cursor:pointer}
  
  .nav-tit{
  display:none;
  }
</style>
</head>
<body style="min-width:1230px;">
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/css/page.css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/home2.css" />
 <script src="js/jquery/jquery-1.8.3.min.js"></script>
<!-- 百度统计代码的添加 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "../a.yellqu.com/d30467?bd208841ecc88cc571cfadd022097bf6";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- 根据不同域名展示不同的top页面 -->
<script>
jQuery(function(){
$("a[title='站长统计']").hide();

var cookie_val = getCookie("_type_cashTicket");
if(cookie_val=="gz"){
jQuery("#top_gz").show();
jQuery("#top_casi").remove();
jQuery("#top_gaoxin").remove();
}else{
jQuery("#top_casi").show();
jQuery("#top_gz").remove();
jQuery("#top_gaoxin").remove();
}

$("#selectType").live('click',function(){
$(this).next().show();
})

jQuery(".header2 .block .search .link a").live('click',function(){
var name = jQuery(this).text();
name=encodeURI(name);
    window.open("/cosimcloud/searchRelease.ht?select="+name);
});

var url=window.location.href;

if(url.indexOf('cosimcloud/index.ht')<0){

jQuery(".banner-home .line-nav .tit-list").removeClass('current');

if(url.indexOf('searchInquiry.ht')>0 
|| url.indexOf('searchRelease.ht')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FSupply.jsp')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FSales.jsp')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FAftermarket.jsp')>0
|| url.indexOf('demandContent.ht')>0
|| url.indexOf('capabilityContent.ht')>0
|| url.indexOf('searchInquiry.ht')>0){

jQuery(".banner-home .line-nav .tit-list .item").eq("1").addClass('current');

}else if(url.indexOf('/cosimcloud/cloudDesign.ht')>0 
|| url.indexOf('cloudDesign.ht')>0 
|| url.indexOf('softItem/view.ht')>0 
|| url.indexOf('cloudDesignTask.ht')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FAftermarket.jsp')>0
|| url.indexOf('demandContent.ht')>0
|| url.indexOf('capabilityContent.ht')>0
|| url.indexOf('searchInquiry.ht')>0){

jQuery(".banner-home .line-nav .tit-list .item").eq("2").addClass('current');

}else if(url.indexOf('cloudProduction.ht')>0 
|| url.indexOf('searchRelease.ht')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FSupply.jsp')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FSales.jsp')>0 
|| url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud_made_html%2FAftermarket.jsp')>0
|| url.indexOf('demandContent.ht')>0
|| url.indexOf('capabilityContent.ht')>0
|| url.indexOf('searchInquiry.ht')>0){

jQuery(".banner-home .line-nav .tit-list .item").eq("3").addClass('current');

}else if(url.indexOf('searchInquiry.ht')>0 
|| url.indexOf('softType/index.ht')>0 
|| url.indexOf('standardType/index.ht')>0 
|| url.indexOf('expertType/expert.ht')>0 
|| url.indexOf('resource_3Dprint.ht')>0){

jQuery(".banner-home .line-nav .tit-list .item").eq("4").addClass('current');

}

}


})
jQuery(function(){
   jQuery(".classify").hover(function(){
   jQuery(".ywst-box").css({"display":"block"});
},function(){
jQuery(".ywst-box").css({"display":"none"}); 
}); 
   jQuery(".myservice_classify").hover(function(){
   jQuery(".myservice-box").css({"display":"block"});
},function(){
jQuery(".myservice-box").css({"display":"none"}); 
}); 
})

function getCookie(cookie_name){
    var allcookies = document.cookie;
    var cookie_pos = allcookies.indexOf(cookie_name);   //索引的长度
 
    // 如果找到了索引，就代表cookie存在，
    // 反之，就说明不存在。
    if (cookie_pos != -1)
    {
        // 把cookie_pos放在值的开始，只要给值加1即可。
        cookie_pos += cookie_name.length + 1;      //这里容易出问题，所以请大家参考的时候自己好好研究一下
        var cookie_end = allcookies.indexOf(";", cookie_pos);
 
        if (cookie_end == -1)
        {
            cookie_end = allcookies.length;
        }
 
        var value = unescape(allcookies.substring(cookie_pos, cookie_end));         //这里就可以得到你想要的cookie的值了。。。
    }
    return value;
}

 /***---------
 2016-04-18 头部文件 通用js整合   ch
 --***********/
   jQuery(function(){
    var url = window.location.href;
    jQuery('.yzzpublic_navbox ul li a').removeClass();
    if(url.indexOf('cosimcloud/index.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(0).addClass('current');
    }
    if(url.indexOf('searchInquiry.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(1).addClass('current');
    }
    if(url.indexOf('searchRelease.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(1).addClass('current');
    }
    if(url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpurchase.jsp')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(1).addClass('current');
    }
    if(url.indexOf('cloudDesign.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(7).addClass('current');
    }
    if(url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fresearch.jsp')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(7).addClass('current');
    }
    if(url.indexOf('cloudProduction.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(13).addClass('current');
    }
    if(url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fmanufacture.jsp')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(13).addClass('current');
    }
    //贵州云网软件池
    if(url.indexOf('resource_software.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('.yzzpublic_navbox ul li a').eq(17).addClass('current');
    }
    //专利池
    if(url.indexOf('http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fmain%2Findex.html')!=-1 || url.indexOf('index.html')==-1){
    jQuery('#yunziyuanMenu').addClass('current');
    //jQuery('.yzzpublic_navbox ul li a').eq(17).addClass('current');
    }
    //标准池
    if(url.indexOf('center.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('#yunziyuanMenu').addClass('current');
    //jQuery('.yzzpublic_navbox ul li a').eq(17).addClass('current');
    }
    //标准池
    if(url.indexOf('standardType/index.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('#yunziyuanMenu').addClass('current');
    //jQuery('.yzzpublic_navbox ul li a').eq(17).addClass('current');
    }
    //专家池
    if(url.indexOf('expert.ht')!=-1 || url.indexOf('index.html')==-1){
    jQuery('#yunziyuanMenu').addClass('current');
    //jQuery('.yzzpublic_navbox ul li a').eq(17).addClass('current');
    }
    //云资源中心   默认为软件池页面
    if(url.indexOf('pool/soft/index.html')!=-1 || url.indexOf('index.html')==-1){
        jQuery('#yunziyuanMenu').addClass('current');
    }
    }) ; 
   jQuery(function(){
  // alert(11)
   jQuery(".yzzpublic_nav_list").mouseenter(function(){
//alert(111)
          jQuery(this).children(".yzzpublic_nav_list1").stop(true,true).slideDown(200);
         });
   jQuery(".yzzpublic_nav_list").mouseleave(function(){
   jQuery(this).children(".yzzpublic_nav_list1").stop(true,true).slideUp(200);
        }); 
   jQuery(".qzss").click(function(event){
   jQuery(".fenlei_choice").show();
})
   jQuery(".fenlei_choice").click(function(){
  // alert( $(this).html());
   jQuery(".jiansuo_fenli").html(jQuery(this).html());
   jQuery(".fenlei_choice").hide();
   return false;
 
})
 jQuery(".qzss").mouseleave(function(){
 jQuery(".fenlei_choice").hide();
           });
   
  jQuery(".yzzpublic_searchcon .qzss").on('change',function(){
   var searchName = jQuery(this).val();
   jQuery(this).find("option").attr("selected", false);
   if(searchName.trim()=="企业"){
   jQuery(this).find(".qiy").attr("selected", true);
   jQuery("#top_search").attr("action","/cosimcloud/searchTenantInfo.ht");
   }else if(searchName.trim()=="能力"){
   jQuery(this).find(".nengl").attr("selected", true);
   jQuery("#top_search").attr("action","/cosimcloud/searchRelease.ht");
   }else if(searchName.trim()=="需求"){
   jQuery(this).find(".xuq").attr("selected", true);
   jQuery("#top_search").attr("action","/cosimcloud/searchInquiry.ht");
   }
   });
   var url=window.location.href;
   /*  var localUrl = "http://cocenter.casicloud.com:8081/";
    if("8081"==''){
    localUrl = "http://cocenter.casicloud.com";
    }
     //alert(url);
      //隐藏主题服务
 if(url!=localUrl+"cosimcloud/index.ht"){
$("#zhuti").css({"display":"none"});
 } */
 if(url.indexOf('cosimcloud/index.ht')<0){
 jQuery("#zhuti").css({"display":"none"});
 }
});
  
   function subStr(loginName){
    if(loginName!=null && loginName != null){
      if(loginName.length>10){
      loginName = loginName.trim();
      loginName = loginName.substring(0,5)+"..";
      }
      }
    return loginName;
   }
 
   //搜索功能
   function search(){
   var searchType = jQuery("#selectType").text();
   var searchKeyWord=jQuery("#searchKeyWord").val();
   searchKeyWord=encodeURI(searchKeyWord);
   if(searchType=="企业"){
   window.location.href="/cosimcloud/searchTenantInfo.ht?select="+searchKeyWord;
   }else if(searchType=="能力"){
   window.location.href="/cosimcloud/searchRelease.ht?select="+searchKeyWord;
   }else if(searchType=="需求"){
   window.location.href="/cosimcloud/searchInquiry.ht?select="+searchKeyWord;
   }
   return;   
   }
   

   function btshow(obj){
   var text = jQuery(obj).text();
   jQuery("#selectType").text(text);
   $(obj).closest("ul").hide();
   }
   
   /**埋点*/
   var parentUrl = document.referrer;
   var url = window.location.href;
   //父页面不为空，且当前页面是需求能力详情页
   if(parentUrl!='' &&(url.indexOf("capabilityContent.ht")!=-1 || url.indexOf("demandContent.ht")!=-1) ){
    var jsurl = "";
    //航天专区
   if(parentUrl.indexOf("/zoneBusinessExtend/indexCapabilityIframe.ht")!=-1
   ||parentUrl.indexOf("/inquiryHall.ht?zonecode=htzq")!=-1
   ||parentUrl.indexOf("/zoneBusinessExtend/capabilityHall.ht")!=-1){
//    document.write('<script type="text/javascript" src="http://stat.htres.cn/log.js?sid=htyjg"> </'+'script>');
   jsurl = "../stat.htres.cn/log8fce.js?sid=htzone";
   }else if(parentUrl.indexOf("indexB2bInquiry.ht")!=-1){ //商业航天专区
   jsurl = "../stat.htres.cn/log7278.js?sid=syht";
   }else if(parentUrl.indexOf("/product/industryTenantReleaseRelations/speCar.ht")!=-1){//专用车专区
   jsurl = "../stat.htres.cn/log3f18.js?sid=car";
   }else if(parentUrl.indexOf("zoneNewMaterial/zoneNewMaterial/index.html")!=-1){//新材料专区
   jsurl = "../stat.htres.cn/log1983.js?sid=newm";
   }
if(jsurl!=''){
jQuery.getScript(jsurl)
    .done(function() {
    console.log(111);
    })
    .fail(function() {
   console.log(222);
   });
if(typeof _htlog !="undefined"){
    _htlog.track("", "demand", "view");
   }
   }
   }
   
</script>
<!-- 重庆工业云平台，云制造top页面 -->
<div id="top_casi" style="display: none">



<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/common.css" rel="stylesheet" type="text/css" />
<style tyle="text/css">
#wdyw{cursor:pointer;}
</style>
 <script type="text/javascript">
     var indexUrl="http://core.casicloud.com/";
     var fileCtx="https://oby0yx23h.qnssl.com/";
</script>
<script src="js/htyw_ul.js"  type="text/javascript"></script>
<!--云制造topbegin-->
<script type="text/javascript">
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
   
   
   //搜索功能
   function ch(){
   var searchType = jQuery("#selectType").text().trim();
   var searchKeyWord=jQuery("#searchKeyWord").val().trim();
   searchKeyWord=encodeURI(searchKeyWord);
   if(searchType=="企业"){
   window.location.href="/cosimcloud/searchTenantInfo.ht?select="+searchKeyWord;
   }else if(searchType=="能力"){
   window.location.href="/cosimcloud/searchRelease.ht?select="+searchKeyWord;
   }else if(searchType=="需求"){
   window.location.href="/cosimcloud/searchInquiry.ht?select="+searchKeyWord;
   }else if(searchType=="软件"){
   $("#keyword").val(searchKeyWord);
   $("#rjForm").submit();
   }
   return;   
   }
   var userId="";
   if(userId){
   window.HT_UID = ""; // 用户ID
   window.HT_OID = ""; // 企业ID
   }
</script>
<div style="display:none">
  <script type="text/javascript" src="../stat.htres.cn/log06bc.js?sid=cosimcloud"></script>
</div>
 <!--头部第一部分 开始-->
   <div class="new_topbar">
    <div class="header-container" style="width:1240px;">
        <ul class="new_header_left">
        
            <li id="business">欢迎来到重庆工业云平台！</li>
            <li><a href="javascript:" target="_blank" id="username" class="right_line"></a></li>
            <li><a href="javascript:" id="login" onclick="javascript:doLogin();">登录</a></li>
            <li id="register"><a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=105" target="_blank">免费注册</a></li>
        
        <!--登录之后-->

        </ul>
        <ul class="new_header_right">
        <li>
        
        </li>
            <li>
                <a id="wdyw" target="_blank" class="right_line" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fhome.ht">我的云网<span class="pop_arrpw" ></span></a>
                <div class="nav-content nc-1" id="shopping">
                    <table>
                        <tr>
                            <th>我是买家</th>
                            <th>我是卖家</th>
                        </tr>
                        <tr>
                            <td><a href="http://core.casicloud.com/home.ht?from=gotoProcurementOrder" target="_blank">已买到的产品</a></td>
                            <td><a href="http://core.casicloud.com/home.ht?from=gotoSaleOrder" target="_blank">已卖出的产品</a></td>
                        </tr>
                        <tr>
                            <td><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FaddIframe.ht%3Ftype%3D2" target="_blank">发布需求</a></td>
                            <td><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FabilityPublishIframe.ht%3Ftype%3D2" target="_blank">发布能力</a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="http://core.casicloud.com/goToCosic.ht" target="_blank" class="right_line" style="padding-right:10px;">走进航天科工</a></li>
            <li>
                <a href="javascript:" target="_blank" class="right_line">客户服务中心<span class="pop_arrpw"></span></a>
                <div class="nav-content nc-2" style="width:98px;text-align: center">
                    <a target="_blank" href="http://kf.casicloud.com/question.html">常见问题</a>
                    <a target="_blank" href="http://kf.casicloud.com/userHelp.html">用户手册</a>
                    <a target="_blank" href="http://kf.casicloud.com/contact.html">在线咨询</a>
                    <a target="_blank" href="http://core.casicloud.com/cloud/tenant/tenantInfo/certification.ht">企业认证</a>
                    <a target="_blank" href="http://core.casicloud.com/busiSub/incrementService/cloudBusisubResour/business.ht">商机订阅</a>
                    <a target="_blank" href="b2b/famousCompany/famousCompanyPurchase/index.html">名企协作</a>
                    <a target="_blank" href="http://core.casicloud.com/orgHealthCheck/orgHealthScore/healthCheck.ht">企业健康检测</a>
                    <a target="_blank" href="b2b/integration/innovate.html">军民融合创新平台</a>
                </div>
            </li>
            <li>
                <a href="javascript:" target="_blank" class="right_line">国际站<span class="pop_arrpw"></span></a>
                <div class="nav-content nc-2 language_pic" style="width:80px">
                    <a target="_blank" href="http://en.casicloud.com/"><span></span>English</a>
                    <a target="_blank" href="http://de.casicloud.com/"><span></span>Deutsch</a>
                    <a target="_blank" href="http://ru.casicloud.com/"><span></span>Pусский</a>
                    <a target="_blank" href="http://ir.casicloud.com/"><span></span>فارسی</a>
                </div>
            </li>
            <li>
                <a href="javascript:" target="_blank" class="right_line">全国站点<span class="pop_arrpw"></span></a>
                <div class="nav-content nc-2" style="width:72px">
                    <a target="_blank" href="http://core.casicloud.com/jiangxiIndex.ht">江西站点</a>
                    <a target="_blank" href="http://www.gz-icloud.com.cn/">贵州站点</a>
                    <a target="_blank" href="http://xiaogan.casicloud.com/">孝感站点</a>
                </div>
            </li>
            <li id="wxgzh">
                <a href="javascript:;" target="_blank" class="right_line">微信公众号<span class="pop_arrpw"></span></a>
                <div class="new_topbar_ewm_left"><a href="javascript:;"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/new_wxewm838f.png?20170110" alt=""></a></div>
            </li>
            <li id="htywapp">
                <a href="javascript:;" target="_blank" class="right_line_fff">重庆工业云平台APP<span class="pop_arrpw"></span></a>
                <div class="new_topbar_ewm_right"><a href="javascript:;"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/htyw_app.png" alt=""></a></div>
            </li>
        </ul>
    </div>
</div>
    <!--头部第一部分 结束-->
    <!--头部第二部分 开始-->
    <div class="header2">
        <div class="block">
            <div class="yzzpublic_logo" style="width:350px;float:left;">


<img src="saas/nankang/images/xqrd-logo.png" alt="Planets" usemap="#planetmap" />
<map name="planetmap">
  <area href="http://core.casicloud.com/" shape="rect" coords="0,0,174,48"></a>
  <area href="cosimcloud/index.html" shape="circle" coords="175,0,299,48"></a>
</map>




</div>
            <div class="search">
                <div class="text-box">
                    <div class="select">
                        <span  id="selectType">需求</span>
                        <ul>
                      <li onclick="btshow(this)">需求</li>
                            <li onclick="btshow(this)">能力</li>
                            <li onclick="btshow(this)">企业</li>
                            <li onclick="btshow(this)">软件</li>
                            <li onclick="btshow(this)">素材</li>
                        </ul>
                    </div>
                    
                    <div class="text">
                       <input type="text" id="searchKeyWord"  onkeydown="if(event.keyCode==13){ch();}" value=""/>
                    </div>
                    <div class="submit">
                       <input type="submit"  onclick="ch();setCzc('云制造','点击','搜索按钮');" value="" />
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
            <!-- 广告位 -->
            <a id="topBannerAdInfo" class="adInfo" style="position: absolute; top:-20px; right:0; width:220px; height:100px; cursor: pointer;" data-adPositionId="10000088470003" data-adPlateId="2" data-typr="2">
             
            </a>
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
                    <div class="item" onclick="setCzc('云制造','点击','首页')">
                        <a href="cosimcloud/index.html" class="a">首页</a>
                    </div>
                    <div class="item" onclick="setCzc('云制造','点击','云协作中心')">
                        <a href="javascript:void(0);" class="a">云协作中心</a>
                        <ul>
                             <li><a href="inquiry/searchInquiry.html" target="_blank">需求大厅</a></li>
      <li><a href="cosimcloud/searchRelease.html" target="_blank">能力大厅</a></li>
      <li><span style="margin-left:24px;"><a href="b2b/famousCompany/famousCompanyPurchase/index.html" target="_blank">名企协作<img style="margin-left: 2px;margin-top: 12px;width:22px;" src="b2b/famousCompany/images/hot2.gif" /></a></span></li>
      <li><a href="http://core.casicloud.com/platform/pages/cloud_made_html/Supply.ht" target="_blank">云供应链</a></li>
      <li><a href="http://core.casicloud.com/platform/pages/cloud_made_html/Sales.ht" target="_blank">云销售链</a></li>
      <li><a href="http://core.casicloud.com/platform/pages/cloud_made_html/Aftermarket.ht" target="_blank">云售后链</a></li>
                        </ul>
                    </div>
                   <div class="item" onclick="setCzc('云制造','点击','云素材中心')">
                        <a href="http://material.casicloud.com/material/cloudMaterialCenter/list.ht" class="a" target="_blank">云素材中心</a>
                    </div>
                    <div class="item" onclick="setCzc('云制造','点击','云设计中心')">
                        <a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht" class="a">云设计中心</a>
                        <ul>
   <li><a href="http://cpdm.casicloud.com/">C-PDM</a></li>
   <li><a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht?type=1">云CAD</a></li>
   <li><a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht?type=2">云CAE</a></li>
   <li><a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht?type=3">云CAPP</a></li>
                       <li><a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht?type=0">云PDM</a></li>
                        </ul>
                    </div>
                    <div class="item" onclick="setCzc('云制造','点击','云生产中心')">
                        <a href="http://core.casicloud.com/cosimcloud/cloudProduction.ht" class="a">云生产中心</a>
                        <ul>
                        <li><a href="http://core.casicloud.com/cosimcloud/cloudProduction.ht?type=0">云ERP</a></li>
        <li><a href="http://crp.casicloud.com/">CRP</a></li>
   <li><a href="http://cmes.casicloud.com/">C-MES</a></li>
   <li><a href="http://core.casicloud.com/cosimcloud/cloudProduction.ht?type=3">虚拟工厂</a></li>
                        </ul>
                    </div>
                    
                    <div class="item" onclick="setCzc('云制造','点击','智能服务中心')">
                        <a href="cosimcloud/intelligentServiceCenter881d.html?type=0" class="a">智能服务中心</a>
                        <ul>
                        <li><a href="cosimcloud/intelligentServiceCenter881d.html?type=0">资产管理</a></li>
        <li><a href="cosimcloud/intelligentServiceCenter10b0.html?type=1">售后服务</a></li>
   <li><a href="cosimcloud/intelligentServiceCenter0dab.html?type=2">远程监控</a></li>
   <li><a href="cosimcloud/intelligentServiceCenter513b.html?type=3">智能诊断</a></li>
                        </ul>
                    </div>
                    
                    <div class="item" onclick="setCzc('云制造','点击','云资源中心')">
                        <a href="http://rjc.casicloud.com/" class="a">云资源中心</a>
                        <ul>
                            <!-- <li><a href="javascript:void(0);">软件资源</a></li>
                            <li><a href="#">专利资源</a></li>
                            <li><a href="#">标准化资源</a></li>
                            <li><a href="#">专家资源</a></li>
                            <li><a href="#">3D打印资源</a></li> -->
                            
                        <li><a href="http://rjc.casicloud.com/" target="_blank">软件池</a></li>
    <li><a href="http://patent.casicloud.com/main/index.html" target="_blank">专利池</a></li>
    <li class="yzzpublic_nav_lists">
    
    
    <a href="http://core.casicloud.com/pool/std/standardType/index.ht" target="_blank">标准池</a>
    
    
    </li>
    <li><a href="http://expert.casicloud.com/index.htm" target="_blank">专家池</a></li>
    <li><a href="http://3dprint.casicloud.com/index.htm" target="_blank">3D打印资源</a></li>
    
    
                        </ul>
                    </div>
                    
                    <div class="item">
                        <a href="http://os.casicloud.com/" class="a" target="_blank" style="margin-left:104px;">体验新版<img style="margin-left: -11px;margin-top: -8px;width:35px;" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/images/GIF.gif" /></a>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    
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
   
   
   //搜索功能
   function ch(){
   var searchType = jQuery("#selectType").text().trim();
   var searchKeyWord=jQuery("#searchKeyWord").val().trim();
   var classifyNames;
   var sys_model;
   if(document.location.href.indexOf('searchRelease') > 0 || document.location.href.indexOf('searchInquiry') > 0 ){
   classifyNames=decodeURI(decodeURI(cId));
   classifyNames=encodeURI(encodeURI(classifyNames));
   searchKeyWord=encodeURI(encodeURI(searchKeyWord));
   }else{
   searchKeyWord=encodeURI(searchKeyWord);
   }
   if(searchType=="企业"){
   window.location.href="/cosimcloud/searchTenantInfo.ht?select="+searchKeyWord;
   }else if(searchType=="能力"){
   window.location.href="/cosimcloud/searchRelease.ht?select="+searchKeyWord+"&classname="+classifyNames;
   }else if(searchType=="需求"){
   window.location.href="/cosimcloud/searchInquiry.ht?select="+searchKeyWord+"&classname="+classifyNames;
   }else if(searchType=="软件"){
   window.location.href="http://rjc.casicloud.com/search.htm?select="+searchKeyWord;
   }else if(searchType=="素材"){
   window.location.href="http://material.casicloud.com/material/cloudMaterialCenter/list.ht?keyword="+searchKeyWord;
   }
   return;   
   }
</script>
 <!--头部第一部分 开始-->
    <div class="header1">
        <div class="block">
            <div class="welcome">
                  
<span>您好，欢迎来到重庆工业云平台！</span>
<span class="loginbefor">
<a href="javascript:doLogin();">请登录</a> |
<a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=100">免费注册</a>
</span>

<!--登录之后-->


            </div>
            <div class="ewm">
                <a href="javascript:void(0);" class="a1">微信公众号
<div class="box">
<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/htcloud/images/2wm2.jpg" style="width: 125px;height: 125px;"/>
</div>
</a>
                <a href="javascript:void(0);" class="a2">重庆工业云平台APP
<div class="box">
<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/htcloud/images/liantu_tz.png" style="width: 125px;height: 125px;"/>
</div>
</a>
            </div>
            <div class="list">
                <span class="classify">
    我的云网
 <div class="ywst-box">
        <ul class="ywst-drop">
    <li class="st-topCart">买家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/addIframe.ht?type=2',true);">发布需求</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoInquiryOrder',true);">需求订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/inquiry/addInquiry.ht',true);">发布询价单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoProcurementOrder',true);">采购订单</a></li>
</ul>
<ul class="ywst-drop">
    <li class="st-topCart">卖家中心</li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/abilityPublishIframe.ht?type=2',true)">发布能力</a></li>
<li class="st-topCart1"><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoAbilityOrder',true);">能力订单</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/cosimcloud/industryAbilityPublish.ht',true)">发布商品</a></li>
<li><a href="javascript:void(0)" onclick="doLogin('/home.ht?from=gotoSaleOrder',true);">销售订单</a></li>
</ul>
</div>
</span>
<span class="myservice_classify"><a href="http://kf.casicloud.com/kw_sell.html" target="_blank">客户服务中心</a>
    <ul class="myservice-box" style="height:143px;">
    <li><a href="http://kf.casicloud.com/question.html" target="_blank">常见问题</a></li>
<li><a href="http://kf.casicloud.com/userHelp.html" target="_blank">用户手册</a></li>
<li><a href="http://kf.casicloud.com/contact.html" target="_blank">在线咨询</a></li>
<li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcloud%2Ftenant%2FtenantInfo%2Fcertification.ht">企业认证</a></li>
<li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2FbusiSub%2FincrementService%2FcloudBusisubResour%2Fbusiness.ht">商机订阅12</a></li>
<li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fadvertisement%2FadInfoManager%2FcloudAdInfo%2Fadviertisement.ht">广告服务</a></li>
</ul>
    </span>


<a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2FindustryMall%2Fhall%2FindustryIndex.ht">工业品共享中心</a>
            </div>
        </div>
    </div>
    <!--头部第一部分 结束-->
    <!--头部第二部分 开始-->
    <div class="header2">
        <div class="block">
            <div class="yzzpublic_logo">
<img src="saas/nankang/images/xqrd-logo.png" alt="Planets" usemap="#planetmap" />
<map name="planetmap">
  <area href="http://core.casicloud.com/" shape="rect" coords="0,0,174,48"></a>
  <area href="cosimcloud/index.html" shape="circle" coords="175,0,299,48"></a>
</map>
</div>
            <div class="search">
                <div class="text-box">
                    <div class="select">
                        <span  id="selectType">需求</span>
                        <ul>
                        <li onclick="btshow(this)">需求</li>
                            <li onclick="btshow(this)">能力</li>
                            <li onclick="btshow(this)">企业</li>
                            <li onclick="btshow(this)">软件</li>
                        </ul>
                    </div>
                    
                    <div class="text">
                       <input type="text" id="searchKeyWord"  onkeydown="if(event.keyCode==13){ch();}"/>
                    </div>
                    <div class="submit">
                       <input type="submit"  onclick="ch()" value="" />
                       <!-- <form action="http://rjc.casicloud.com/search.htm" id="rjForm">
                       <input name="type" type="hidden" id="type" value="goods" />
                       <input name="keyword" type="hidden" id="keyword" class="toph_sear_txt"/>
                       </form> -->
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
                        <a href="cosimcloud/index.html" class="a">首页</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" class="a">云协作中心</a>
                        <ul>
                             <li><a href="cosimcloud/searchInquiry.html" target="_blank">需求大厅</a></li>
      <li><a href="cosimcloud/searchRelease.html" target="_blank">能力大厅</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FSupply.jsp" target="_blank">云供应链</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FSales.jsp" target="_blank">云销售链</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FAftermarket.jsp" target="_blank">云售后链</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht" class="a">云设计中心</a>
                        <ul>
   <li><a href="http://cpdm.casicloud.com/">C-PDM</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D1">云CAD</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D2">云CAE</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D3">云CAPP</a></li>
                       <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D0">云PDM</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht" class="a">云生产中心</a>
                        <ul>
                        <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht%3Ftype%3D0">云ERP</a></li>
        <li><a href="http://crp.casicloud.com/">CRP</a></li>
   <li><a href="http://cmes.casicloud.com/">C-MES</a></li>
   <li><a href="http://core.casicloud.com/cosimcloud/cloudProduction.ht?type=3">虚拟工厂</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fsoft%2FsoftType%2Findex.ht" class="a">云资源中心</a>
                        <ul>
                            <!-- <li><a href="javascript:void(0);">软件资源</a></li>
                            <li><a href="#">专利资源</a></li>
                            <li><a href="#">标准化资源</a></li>
                            <li><a href="#">专家资源</a></li>
                            <li><a href="#">3D打印资源</a></li> -->
                            
                        <li><a href="http://rjc.casicloud.com/" target="_blank">软件池</a></li>
    <li><a href="http://patent.casicloud.com/main/index.html" target="_blank">专利池</a></li>
    <li class="yzzpublic_nav_lists">
    
    
    <a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fstd%2FstandardType%2Findex.ht" target="_blank">标准池</a>
    
    
    </li>
    <li><a href="http://expert.casicloud.com/index.htm" target="_blank">专家池</a></li>
    <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2Fresource_3Dprint.ht" target="_blank">3D打印资源</a></li>
    
    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
</div>
<!-- 贵州云网top页面 -->
<div id="top_gz" style="display: none">

<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/public_headerfooter.css"/> 
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/reset.css"/>
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
<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/htcloud/images/2wm2.jpg" style="width: 125px;height: 125px;"/>
</div>
</a>
                <a href="#" class="a2">重庆工业云平台APP
<div class="box">
<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/htcloud/images/liantu_tz.png" style="width: 125px;height: 125px;"/>
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
<li><a target="_blank" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/info/jsp/operateManual.html">用户手册</a></li>
<li><a target="_blank" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/info/jsp/yunList.html">培训视频</a></li>
<li><a onclick="xiaon();" target="_blank" style="cursor: pointer;">平台客服</a></li>
<li><a target="_blank" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/info/jsp/operate/shbz.html">售后保障</a></li>
</ul>
</span>
<a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2FindustryMall%2Fhall%2FindustryIndex.ht">工业品共享中心</a>
            </div>
        </div>
    </div>
    <!--头部第一部分 结束-->
    
    <!--头部第二部分 开始-->
    <div class="header2">
        <div class="block">
            <div class="yzzpublic_logo">
<a href="http://gz.casicloud.com/">
<img src="saas/nankang/images/logo_gz.png" height="48px" />
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
                        <a href="cosimcloud/indexda37.html?type=gz" class="a">首页</a>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云协作中心</a>
                        <ul>
                             <li><a href="cosimcloud/searchInquiry.html" target="_blank">需求大厅</a></li>
      <li><a href="cosimcloud/searchRelease.html" target="_blank">服务大厅</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FSupply.jsp" target="_blank">云供应链</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FSales.jsp" target="_blank">云销售链</a></li>
      <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fplatform%2Fpages%2Fcloud_made_html%2FAftermarket.jsp" target="_blank">云售后链</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云设计中心</a>
                        <ul>
                       <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D0">云PDM</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fsoft%2FsoftItem%2Fview.ht%3Fid%3D10000045560224%26type%3D1" target="_blank">云CAD</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesign.ht%3Ftype%3D2">云CAE</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fsoft%2FsoftItem%2Fview.ht%3Fid%3D10000041310016%26type%3D3" target="_blank">云CAPP</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudDesignTask.ht">设计任务管理</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <a href="#" class="a">云生产中心</a>
                        <ul>
                        <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht%3Ftype%3D0">云ERP</a></li>
        <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht%3Ftype%3D1">云排产</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht%3Ftype%3D2">云MES</a></li>
   <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2FcloudProduction.ht%3Ftype%3D3">虚拟工厂</a></li>
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
                            
                        <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fsoft%2FsoftType%2Findex.ht">软件池</a></li>
    <li><a href="http://patent.casicloud.com/main/index.html?type=gz">专利池</a></li>
    <li class="yzzpublic_nav_lists">
    
    
    <a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fstd%2FstandardType%2Findex.ht" target="_blank">标准池</a>
    <ul class="yzzpublic_nav_lists1">
    <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fpool%2Fstd%2FstandardType%2Findex.ht">标准查询</a></li>
    <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fhome.ht">需求发布</a></li>
    </ul>
    
    </li>
    <li><a href="http://expert.casicloud.com/index.htm" target="_blank">专家池</a></li>
    <li><a href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fcosimcloud%2Fresource_3Dprint.ht">3D打印资源</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.mScroll.js"></script>
<div style="display:none"><script src="https://s95.cnzz.com/z_stat.php?id=1261154440&amp;web_id=1261154440" language="JavaScript"></script></div>
    <!--banner-home 开始-->
    <div class="banner-home" style="margin-top:-45px;">
        <div class="foucs adInfo" id="indexAdInfo" data-adPositionId="13" data-adPlateId="2" data-typr="0">
            <div class="frame">
                
                <div class="child" id="pointer" onclick="window.open('http://core.casicloud.com/cosimcloud/getNews.ht?id=1000000014823565&amp;&amp;type=4')" style="background-image:url(https://oby0yx23h.qnssl.com//image/carousel/04130952392220070) ;"></div>
                
                
                
                <div class="child" id="pointer" onclick="window.open('http://os.casicloud.com/yun.ht')" style="background-image:url(https://oby0yx23h.qnssl.com//image/carousel/04120937079900028) ;"></div>
                
                             
                
                <div class="child" id="pointer" onclick="window.open('http://core.casicloud.com/agreement/b2bAgreementAuthen/index.ht')" style="background-image:url(https://oby0yx23h.qnssl.com//image/carousel/03300903507900002) ;"></div>
                
                               
                
                <div class="child" id="pointer" onclick="window.open('http://os.casicloud.com/act/intelligentmanufacturing.ht')" style="background-image:url(https://oby0yx23h.qnssl.com//image/carousel/03300953573730005) ;"></div>
                
                
                
                <div class="child" id="pointer" onclick="window.open('http://os.casicloud.com/act/tgzl.ht')" style="background-image:url(https://oby0yx23h.qnssl.com//image/carousel/02281033248230038) ;"></div>
                
            </div>
            <div class="nav">
                <a href="javascript:void(0);" class="now"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
            </div>
        </div>
    </div>
    <!--banner-home 结束-->
    <div class="body home2-page">
        <div class="home2-notice">
            <div class="block">
                <div class="home2-page-notice">
                    <div class="notice-scroll">
                        <div class="notice-box">
                            <span class="s1">公告</span>
                            <ul class="line-list">
                             
<li><a href="javascript:void(0)" onclick="openNewsDetail(1000000014823565,'4')" title="重庆工业云平台知识产权池专利征集令">重庆工业云平台知识产权池专利征集令
</a></li>

<li><a href="javascript:void(0)" onclick="openNewsDetail(1000000014582191,'4')" title="重庆工业云平台履约认证专区上线公告">重庆工业云平台履约认证专区上线公告
</a></li>

<li><a href="javascript:void(0)" onclick="openNewsDetail(1000000014550225,'4')" title="平台维护升级公告">平台维护升级公告
</a></li>

                            </ul>
                             <a href="#" onclick="openAnnounce()" class="more">更多 >></a>
                        </div>
                        <div class="notice-box">
                            <span class="s1">动态</span>
                            <ul class="line-list">
                              
       <li>
   <a href="javascript:void(0)" onclick="openNewsDetail(1000000014829884,'1')" title="重庆工业云平台获2017年中国"互联网+制造业"十大优秀案例!">重庆工业云平台获2017年中国"互联网+制造业..
</a>
 </li>
                
       <li>
   <a href="javascript:void(0)" onclick="openNewsDetail(1000000014829880,'1')" title="全球首个面向智能制造服务平台的国际标准发布">全球首个面向智能制造服务平台的国际标准发..
</a>
 </li>
                
       <li>
   <a href="javascript:void(0)" onclick="openNewsDetail(1000000012602681,'1')" title="以产业生态支撑MEMS产业集群发展 ">以产业生态支撑MEMS产业集群发展 
</a>
 </li>
                
                            </ul>
                            
                            <a href="#" onclick="openNews()" class="more">更多 >></a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="home2-page-imglist">
            <div class="block">
               <!-- 2016.8.9 st modify banner click begin -->
               
                <div class="check">
                    <div class="tit"><span class="number" alt="1523087">1523087</span><b style="float: right; padding-right: 19px; color: #fff;  margin-top: 55px;">家</b></div>
                    
<div class="box now">
<div class="img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/image/home4-page-foucs-icon1.jpg"> </div>
<div class="but"> <a class="a1" href="javascript:doLogin();">登录</a> <a href="http://uc.casicloud.com/user/reg_cloud.ht?systemId=105">注册</a> </div>
</div>


                </div>
            </div>
        </div>
<div class="ad-top2-lst adInfo" id="frontBannerAdInfo" data-adPositionId="10000088660000" data-adPlateId="2" data-typr="3">
           <!-- 2016.8.9 st modify banner click end -->
           
               <a class="item-left" href="cosimcloud/searchRelease.html">
                   <img src="https://oby0yx23h.qnssl.com//image/carousel/1201094811770010" />
               </a>
           
           
           
               <a class="item-right" href="inquiry/searchInquiry.html">
                   <img src="https://oby0yx23h.qnssl.com//image/carousel/12010951014240011" />
               </a>
           
           
         </div>
        <div class="home2-page-recommend">
            <div class="block new">
            <div class="home2-page-recommend-tit">
                <h2>热门推荐</h2>
                <span><i></i></span>
            </div>
            <div class="home2-page-recommend-line1">
                
<div class="box">
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=7445917"><i><img src="https://oby0yx23h.qnssl.com//image/carousel/09251649061400044" /></i></a>
<div class="text">
<div class="table-cell">
<h2><a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=7445917">航天晨光化机分公司</a></h2>
<h3>专精装备 造福社会</h3>
<p>大型、重型非标压力容器制造</p>
</div>
</div>
</div>


                
<div class="box">
<a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=8212659"><i><img src="https://oby0yx23h.qnssl.com//image/carousel/10120902031160004" /></i></a>
<div class="text">
<div class="table-cell">
<h2><a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=8212659">亿家联合环保设备有限公司</a></h2>
<h3>让喝水更简单</h3>
<p>领先的水处理解决方案提供商</p>
</div>
</div>
</div>


            </div>
            <div class="home2-page-recommend-line2">
            
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent0a1b.html?id=1000000002450397"><img src="https://oby0yx23h.qnssl.com//image/carousel/10190941167400039" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent0a1b.html?id=1000000002450397">物流服务解决方案</a></h2>
                </div>
            
            
            <!-- 2 -->
            
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent1605.html?id=10000041490598"><img src="https://oby0yx23h.qnssl.com//image/carousel/10190957146490049" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent1605.html?id=10000041490598">高低温冲击试验</a></h2>
                </div>
            
            
            <!-- 3 -->
            
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent1f1a.html?id=10000040152566"><img src="https://oby0yx23h.qnssl.com//image/carousel/101909461670043" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent1f1a.html?id=10000040152566">隔热涂料制造及喷涂服务</a></h2>
                </div>
            
            
            <!-- 4 -->
                
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent9d96.html?id=10000045180809"><img src="https://oby0yx23h.qnssl.com//image/carousel/10190948269900046" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent9d96.html?id=10000045180809">数控机器人焊接系统</a></h2>
                </div>
            
            
            <!-- 5 -->
            
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent4a6a.html?id=10000039631890"><img src="https://oby0yx23h.qnssl.com//image/carousel/10190949359480047" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent4a6a.html?id=10000039631890">生产加工印制板
</a></h2>
                </div>
            
            
            <!-- 6 -->
            
            <div class="item">
                    <div class="img">
                        <a href="b2b/supply/b2bTenantRelease/capabilityContent9ae1.html?id=10000045564885"><img src="https://oby0yx23h.qnssl.com//image/carousel/1019095054620048" /></a>
                    </div>
                    <h2><a href="b2b/supply/b2bTenantRelease/capabilityContent9ae1.html?id=10000045564885">高锁螺母力矩/预紧力测试</a></h2>
                </div>
            
            
            </div>
        </div>
        </div>
        <!--协作需求 开始-->
        <div class="home2-page-cooperation">
           <div class="block">
      <div class="home2-page-recommend-tit">
      <h2>协作需求</h2>
      <span><i></i></span>
      </div>
         <div class="box">
             <div class="left">
                 <div class="tabs">
                     <span class="now first">最新需求</span>
                     <span>临近过期</span>
                     <span>大客户认证</span>
                     <input type="hidden" id="typename">
                    
                    <a class="more" onclick="toMore()" href="javascript:void(0);">more+</a>
                 </div>
                 <div class="table">
                     <table class="now">
                         <tr>
                             <td width="120">发布日期</td>
                             <td width="180">需求名称</td>
                             <td width="180">需求方</td>
                             <td width="90">距报价截至</td>
                             <td width="110"></td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>非金属材料成型
</td>
                             <td>国盛电子机械有限公司..
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">73</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-06-29</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetaila5aa.html?inqId=10000071350480">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>需求金属成型智能制造..
</td>
                             <td>广州长盛建材科技有限..
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">44</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-05-31</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetaila604.html?inqId=10000071350456">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>雷达指令信号时域分析..
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">7</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-04-24</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetaila5d3.html?inqId=40000011141356">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>微波信号源租赁
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">6</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-04-23</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetail1569.html?inqId=40000011141349">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>模拟信号源1台、智能..
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">6</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-04-23</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetail595b.html?inqId=40000011141335">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>快速布线系统
</td>
                             <td>南京电子设备研究所
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">19</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-05-06</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetailde03.html?inqId=40000011141321">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                         <tr>
                             <td>2018年04月17日</td>
                             <td>3号变电所工程设计
</td>
                             <td>南京电子设备研究所
</td>
                             <td>
                             
                             
                             还剩
                              
                <span name="leftDay"><span name="remainingTime" style="color: red;">20</span>天</span>
               
               
                             
                             
                             </td>
                             <td style="display: none;">
                             <span name="deadline">2018-05-07</span></td>
                             <td>  
                             <a href="inquiry/inquiryDetailffe4.html?inqId=40000011141307">查看详情 &gt;&gt;</a>                                 
</td>
                         </tr>
                         
                     </table>
                     <table>
                         <tr>
                             <td width="120">发布日期</td>
                             <td width="180">需求名称</td>
                             <td width="180">需求方</td>
                             <td width="90">距报价截至</td>
                             <td width="110"></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月08日</td>
                             <td>电缆组件（xjb-n..
</td>
                             <td>南京电子设备研究所
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetailc6a5.html?inqId=40000010992039">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月10日</td>
                             <td>上变频模块
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetailb3b1.html?inqId=10000070420011">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月05日</td>
                             <td>无人机无线电信号探测..
</td>
                             <td>北京环境特性研究所
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetail4471.html?inqId=40000010973936">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月12日</td>
                             <td>电源车
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetailbfd3.html?inqId=40000011046657">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月12日</td>
                             <td>升降杆
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetail56e1.html?inqId=40000011046743">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月12日</td>
                             <td>液压系统备件
</td>
                             <td>北京无线电测量研究所..
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetail1c4a.html?inqId=40000011047033">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                         <tr>
                            <td>2018年04月12日</td>
                             <td>加热带
</td>
                             <td>北京计算机技术及应用..
</td>
                             <td>还剩
                              
               
               <span name="leftHour"><span name="remaininghour" style="color: red;">11</span>小时</span></span>    
               
         </td>
                             <td style="display: none;"><span name="deadline">2018-04-17</span></td>
                             <td><a href="inquiry/inquiryDetail8e31.html?inqId=40000011047240">查看详情 &gt;&gt;</a></td>
                         </tr>
                         
                     </table>
                     <table>
                         <tr>
                             <td width="120">发布日期</td>
                             <td width="180">需求名称</td>
                             <td width="180">需求方</td>
                             <td width="90">距报价截至</td>
                             <td width="110"></td>
                         </tr>
                         
                     </table>
                 </div>
             </div>
             <div class="right">
                 <div class="tabs">
                     <span class="first">最新达成</span>
                 </div>
                 <div class="con">
                     <table class="now">
                         <tr>
                             <td width="170">需求名称</td>
                             <td width="195">需求方</td>
                             <td width="100">成交日期</td>
                         </tr>
                         
                          <tr>
                             <td title="鄂温克电厂 ND管材">鄂温克电厂 ND管材..
</td>
                              <td title="南京晨光集团有限责任公司">南京晨光集团有限责任..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="鄂温克电厂 钢材">鄂温克电厂 钢材
</td>
                              <td title="南京晨光集团有限责任公司">南京晨光集团有限责任..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="高斯计">高斯计
</td>
                              <td title="航天精工股份有限公司">航天精工股份有限公司..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="传感器">传感器
</td>
                              <td title="航天精工股份有限公司">航天精工股份有限公司..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="全自动打包机">全自动打包机
</td>
                              <td title="航天精工股份有限公司">航天精工股份有限公司..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="包装箱加工0016">包装箱加工0016
</td>
                              <td title="北京航星机器制造有限公司">北京航星机器制造有限..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                          <tr>
                             <td title="前继电器盒加工0018">前继电器盒加工001..
</td>
                              <td title="北京航星机器制造有限公司">北京航星机器制造有限..
</td>
                              <td>2018-04-17</td>
                          </tr>
                         
                       
                     </table>
                 </div>
             </div>
         </div>
     </div>
        </div>
        <!--协作需求 结束-->
        <!--发布流程 开始-->
        <div class="home2-page-release">
            <div class="block">
                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/image/home2-page-icon4.png" />
                <a href="javascript:void(0)" class="button" onclick="doLogin('/cosimcloud/addIframe.ht?type=2',true);">
                    <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/image/demand-icon1.png" />
                </a>
            </div>
        </div>
        <!--发布流程 结束-->
        <!--云设计云生产 开始-->
        
        <!--云设计云生产 结束-->
        <!--云管理 开始-->
        
        <!--云管理 结束-->
        <!--资源中心 开始-->
       
        <!--资源中心 结束-->
    </div>
       <!--底部 start-->
<script src="js/home2.js"></script>
<script type="text/javascript">
    $(function() {
    
    /*已入驻企业数字滚动效果start*/
numshow(".home2-page-imglist .check .tit span");
/*已入驻企业数字滚动效果 end*/

        /*公告滚动 start*/
        (function(){
            var i = 0;
            var so =  $('.home2-page-notice .notice-scroll');
            var size = so.children().size();
            var time = 2500;
            so.append(so.html());
            function upload(){
                i++;
                if(i>=size+1){
                so.css({marginTop:0});    
                i = 1;
                }
                so.animate({marginTop:-i*21});
                
            }
            var stopId = setInterval(upload,time);
            so.hover(function(){
                clearInterval(stopId);
            },function(){
                stopId = setInterval(upload,time);
            });
        })()
        /*公告滚动 end*/
        
/*banner-home切换 start*/
/* $(".banner-home .foucs .frame").mScroll({
auto: 1, //自动开始
direction: "h", //h横向,v纵向
dtype: "left", //正反方向
isfocus: 1, //是否作为焦点图
minsize: 1, //最小数量
speed: 500, //滚动速度
easing: "", //渐变缓冲类型
delay: 5000, //自动滚动延迟
nav: ".banner-home .foucs .nav i", //导航
prev: null, //前一个按钮
next: null, //后一个按钮
cycle: 1, //是否循环
touch: 0 //是否开启触摸事件
}); */
    });
    function openNews(){
window.open("http://core.casicloud.com/cosimcloud/newsCenter.ht?type=1");

}
    function toMore(){
window.open("http://core.casicloud.com/cosimcloud/searchInquiry.ht?typename="+decodeURI(decodeURI($("#typename").val())));
}
    
function openAnnounce(){
window.open("http://core.casicloud.com/cosimcloud/newsCenter.ht?type=4");

}
function openNewsDetail(id,type){
window.open("http://core.casicloud.com/cosimcloud/getNews.ht?id="+id+"&type="+encodeURI(encodeURI(type)));
}

//我要报价
function bj(inqId,inqEntId,purchaseType,nowDate,endTime){
nowDate=new Date();
if(Date.parse(endTime)>=Date.parse(nowDate)){
var quoteEnpId = jQuery("#quoteEnpId").val();//
     if(inqEntId==quoteEnpId){
     layer.alert("不可对自己发布的需求进行报价",{
     shade: 0,
     offset: '100px'
     });
     return;
     }
     if(quoteEnpId=='2350300'){
     layer.alert("个人用户不可报价");
     return;
     }
     var default_href="/pages/nankang/b2b/quotePrice.ht?inqId="+inqId;
     var url="/pages/nankang/b2b/quote.ht";
     var isNewTab=true;
     var loginUserName = '';
if(loginUserName!= null && loginUserName!= undefined && loginUserName!=''){
//已登录
      jQuery.post(url,{inqId:inqId},function(data){
     
     if(data.quote){
         layer.alert("您已报过价，不可重复报价",{
         shade: 0,
         offset: '100px'
         })
         return;
         }else{
         
         window.top.location.href=default_href;
         } 
     }); 
}else{
var currentPath = window.location.href;
doLogin(currentPath,true);
}
}else{
layer.alert("询价单已截止报价!",{
     shade: 0,
     offset: '100px'
     })
}
     
     }


function openBannerDetail(url){
if(url.indexOf("index.html")!=-1){
window.open(url)
}else{
window.open(""+url)
}
}

//数字初始化效果
function numshow(e) {
var stv1;
var x = parseInt($(e).attr("alt"));
var y = 0;
x = "" + x;
var arr = [];
for (var i = 0; i < x.length; i++) {
var elem = $("<i></i>");
arr[i] = elem.text(x.charAt(i));
}
if (x >= 100) {
var z = parseInt(x / 100);
var t = 10;
} else {
var z = 1;
t = 150;
}
var stv1 = setInterval(function () {
y = y + z;
$(e).text(y);
if (y + z >= x) {
/*$(e).text(x);*/
$(e).html("");
for (var i = 0; i < arr.length; i++) {
arr[i].appendTo(".home2-page-imglist .check .tit span.number");
}
$(e).css({
letterSpacing: 'normal'
, left: 14
});
clearInterval(stv1);
}
}, t);
}
</script>
  <script type="text/javascript" src="js/ad.js"></script>
<!-- 引用小能加载脚本 -->
<script>
function xiaon(){
var loginUserName = '';
if(loginUserName!= null && loginUserName!= undefined && loginUserName!=''){
nTalk.im_openInPageChat();
}else{
doLogin();
}
}
</script>
<!-- 小能集成脚本加载更改    2017-01-04 17:40 LZY-->
<!--集成脚本加载-- 小能  start-->
<script language="javascript" type="text/javascript" id="xiaonengL">
var uname = "";
var uid = "";
var currentPath = window.location.href;
  NTKF_PARAM = {
siteid:"yw_1000",                //企业ID，为固定值，必传
settingid:"yw_1000_9999",        //客服接待组配置ID，必传
uname:uname,//用户ID，未登录可以为空，但是不能给null，uid赋予的值在显示到小能客户端<用户登录ID  不固定>
uid:uid,//用户名，未登录可以为空，但是不能给null，uname赋予的值显示到小能客户端
isvip:"0",                              //是否为vip用户，0代表非会员，1代表会员，取值显示到小能客户端
userlevel:"1",                    //网站自定义会员级别，1-N，可根据选择判断，取值显示到小能客户端
erpparam:"abc"                         //erpparam为erp功能的扩展字段，可选，购买erp功能后用于erp功能集成
};
</script>
<!-- 小能集成脚本加载更改    2017-01-04 17:40 LZY end -->

<!--基础脚本加载 -->
<script type="text/javascript" src="../dl.ntalker.com/js/b2b/ntkfstat412d.js?siteid=yw_1000" charset="utf-8"></script>
<!-- ----end ------------------------- -->
<!-- 根据不同域名展示不同的top页面 -->
<script>
/* 首屏不显示返回顶部快捷链接 begin */
goToTop();
jQuery("#goToTop").hide();
/* 首屏不显示返回顶部快捷链接 end */
var url=window.location.host;
jQuery(function(){
var cookie_val = getCookie("_type_cashTicket");
if(cookie_val=="gz"){
jQuery("#foot_gz").show();
}else{
jQuery("#foot_casi").show();
}

jQuery(".rnav .div").hover(function(){
jQuery(this).find('ul').show();
},function(){
jQuery(this).find('ul').hide();
})
});

function getCookie(cookie_name){
    var allcookies = document.cookie;
    var cookie_pos = allcookies.indexOf(cookie_name);   //索引的长度
 
    // 如果找到了索引，就代表cookie存在，
    // 反之，就说明不存在。
    if (cookie_pos != -1)
    {
        // 把cookie_pos放在值的开始，只要给值加1即可。
        cookie_pos += cookie_name.length + 1;      //这里容易出问题，所以请大家参考的时候自己好好研究一下
        var cookie_end = allcookies.indexOf(";", cookie_pos);
 
        if (cookie_end == -1)
        {
            cookie_end = allcookies.length;
        }
 
        var value = unescape(allcookies.substring(cookie_pos, cookie_end));         //这里就可以得到你想要的cookie的值了。。。
    }
    return value;
}
/* 首屏不显示返回顶部快捷链接 begin */
//返回顶部 goToTop 在首屏不显示返回顶部
function goToTop() {  
    var obj = document.getElementById("goToTop"); 
   function getScrollTop() {  
        return document.documentElement.scrollTop + document.body.scrollTop;  
   }  
    function setScrollTop(value) {  
       if (document.documentElement.scrollTop) {  
         document.documentElement.scrollTop = value;  
       } else {  
            document.body.scrollTop = value;  
        }  
    }  
}  
/* 首屏不显示返回顶部快捷链接 end */


function xiaonGroup(obj){
var loginUserName = '';
if(loginUserName!= null && loginUserName!= undefined && loginUserName!=''){
nTalk.im_openInPageChat("yw_1000_" + obj);
}else{
var currentPath = window.location.href;
doLogin(currentPath,false);
}
}
</script>
<style>
#cnzz_stat_icon_1260053826{
display: none;
}
</style>
<!-- 重庆工业云平台，云制造top页面 -->
<div id="foot_casi" style="display: none;">

<!-- 和首页共用一个底部 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="icon" href="javascript:void(0)" mce_href="" type="image/x-icon" />
    <link rel="shortcut icon" href="javascript:void(0)" mce_href="" type="image/x-icon">
    <meta http-equiv="x-ua-compatible" content="ie=8" />
    <link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/css/common.css" rel="stylesheet" type="text/css" />
<div class="footer">
    <div class="footer-container">
        <div class="footer_container_box clearfix">
            <dl>
                <dt>关于我们</dt>
                <dd> <a href="http://core.casicloud.com/aboutus_htcloud.jsp" target="_blank">重庆工业云平台</a></dd>
                <dd><a href="http://core.casicloud.com/jiangxiIndex.ht" target="_blank">江西重庆工业云平台</a></dd>
                <dd><a href="http://www.gz-icloud.com.cn/" target="_blank">贵州重庆工业云平台</a></dd>
                <dd><a href="http://xiaogan.casicloud.com/" target="_blank">孝感重庆工业云平台</a></dd>
            </dl>
            <dl>
                <dt>快速链接</dt>
                <dd><a href="http://cacp.casicloud.com/" target="_blank">航天云平台</a></dd>
             <!--    <dd><a href="http://gjc.casicloud.com:8080/area/supplyside/areaSupplySideProject/index.ht " target="_blank">供给侧改革</a></dd> -->
                <dd><a href="http://train.casicloud.com/Education/main" target="_blank">在线培训平台</a></dd>
                <dd><a href="http://www.yqscpt.com/" target="_blank">央企双创平台</a></dd>
            </dl>
            <dl class="nth_3">
                <dt>客户服务中心</dt>
                <dd><a target="_blank" href="http://kf.casicloud.com/question.html">常见问题</a></dd>
                <dd><a target="_blank" href="http://kf.casicloud.com/userHelp.html">用户手册</a></dd>
                <dd><a target="_blank" href="http://kf.casicloud.com/contact.html">在线咨询</a></dd>
                <dd><a target="_blank" href="http://core.casicloud.com/cloud/tenant/tenantInfo/certification.ht">企业认证</a></dd>
                <dd><a target="_blank" href="http://core.casicloud.com/busiSub/incrementService/cloudBusisubResour/business.ht">商机订阅</a></dd>
            </dl>
            <dl class="nth_4">
                <dt>联系我们</dt>
                <dd class="clearfix dd_mt6" style="font-weight:bold ;"><a href="http://core.casicloud.com/cosimcloud/getNews.ht?id=1000000002750135&amp;type=%25E5%25B9%25B3%25E5%258F%25B0%25E5%2585%25AC%25E5%2591%258A" target="_blank">加入我们</a></dd>
                <dd class="clearfix dd_mt6"><div class="fl">市场商务：</div><div class="fl">010-88624331</div></dd>
                <dd class="clearfix dd_mt6"><div class="fl">客服热线：</div><div class="fl">400-857-6688</div></dd>
                <dd class="clearfix dd_mt6"><div class="fl">地址：</div><div class="fl htyw_address">北京市海淀区阜成路甲8号中国航天大厦</div></dd>
                <dd class="dd_mt6"><a href="http://www.casicloud.com/map.html" target="_blank">网站导航</a></dd>
            </dl>
            <dl>
                <dt>重庆工业云平台APP</dt>
                <dd><a href="javascript:;"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/htyw_app.png" alt=""/></a></dd>
            </dl>
            <dl class="last">
                <dt>关注重庆工业云平台</dt>
                <dd> <a href="javascript:;"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/htyw_ewm.png" alt=""/></a></dd>
            </dl>
        </div>
        <div class="line clearfix"></div>
        <div class="friend-link">
            <span class="link-header">友情链接：</span>
            <ul>
                <li><a href="http://www.ca800.com/" target="_blank">中国自动化网</a></li>
                <span>|</span>
                <li><a href="http://www.cechina.cn/" target="_blank">控制工程网</a></li>
                <span>|</span>
                <li><a href="http://www.eeworld.com.cn/" target="_blank">电子工程世界</a></li>
                <span>|</span>
                <li><a href="http://www.gkong.com/" target="_blank">中华工控网</a></li>
                <span>|</span>
                <li><a href="http://www.mechnet.com.cn/" target="_blank">中国机械专家网</a></li>
                <span>|</span>
                <li><a href="http://www.chem17.com/" target="_blank">气象色谱仪</a></li>
                <span>|</span>
                <li><a href="http://www.chinajungong.com/" target="_blank">中国军工网</a></li>
                <span>|</span>
                <li><a href="http://product.11467.com/jixie" target="_blank">机械设备</a></li>
                <span>|</span>
                <li><a href="http://www.cntronics.com/" target="_blank">电子元件技术网</a></li>
                <span>|</span>
                <li><a href="http://www.fyjs.casic.cn/" target="_blank">中国航天科工二院</a></li>
                <span>|</span>
                <li><a href="http://www.fhjs.casic.cn/" target="_blank">中国航天科工三院</a></li>
                <span>|</span>
                <li><a href="http://www.aerosun.cn/" target="_blank">航天晨光股份公司</a></li>
                <span>|</span>
                <li><a href="http://www.aisino.com/" target="_blank">航天信息股份公司</a></li>
                <span>|</span>
                <li><a href="http://www.cnnsr.com.cn/" target="_blank">纳税服务网</a></li>
                <span>|</span>
                <li><a href="http://www.casic.com.cn/" target="_blank">中国航天科工集团</a></li>
                <span>|</span>
            </ul>
        </div>
        <div class="copyright">Copyright@2016重庆工业云平台,All Rights Reserved | 京ICP备16012914号-12 京公网安备11010802022625</div>
    </div>
</div>
<!-- <div style="display:none;"><script src="https://s95.cnzz.com/z_stat.php?id=1260923910&web_id=1260923910" language="JavaScript"></script></div>
<script type="text/javascript" src="http://stat.htres.cn/log.js?sid=1"></script> -->
<script type="text/javascript">
    if(document.location.href.indexOf('/search') > 0 && typeof _czc != 'undefined') {
        var q =getQueryString('q');
        var path = document.location.pathname;
        path = path.substr(1);
        if(q) {
            _czc.push(['_trackEvent', 'search', path, q]);
            _htlog.track(null, 'search', path, q);
        }
    }
    
    function getQueryString(name) { 
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
    var r = location.search.substr(1).match(reg); 
    if (r != null) return unescape(decodeURI(r[2])); return null; 
    }
</script>
</div>
<!-- 贵州云网top页面 -->
<div id="foot_gz" style="display: none">

<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/public_headerfooter.css"/>
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/reset.css"/>
<!--public footer begin-->
     <div class="yzzpublic_footer">
         <div class="yzzpublic_footcont">
     <div class="yzzpublic_footcontyttop">
     <ul> 
     <li class="foottit"><a>关于我们</a></li>
 <li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Faboutus_htcloud.jsp">重庆工业云平台</a></li>
 </ul>
 <ul>
     <li class="foottit"><a>快速链接</a></li>
 <li><a target="_blank" href="http://inno.casicloud.com/innoCasicloud/common/home.do">创新创业</a></li>
 <li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2FindustryMall%2Fhall%2FindustryIndex.ht">工业品共享中心</a></li>
 </ul>
 <ul>
     <li class="foottit"><a>服务支持</a></li>
 <li><a target="_blank" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/info/jsp/operateManual.html">帮助中心</a></li>
 
 <li><a href="javascript:doLogin();">用户登录</a></li>
 
 
 <li><a target="_blank" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Freg_cloud.ht">用户注册</a></li>
 </ul>
 <ul>
     <li class="foottit"><a>联系我们</a></li>
<!--  <li  class="foottit1"><a>4008576688</a></li> -->
 <!-- <li class="foottit2"><a>地址：北京市海淀区阜成路甲8号中国航天大厦</a></li> -->
 <li><a href="javascript:void(0);">地址：贵州市中华北路187号经信委大楼</a></li>
 </ul>
 <div class="footweixin">
     <p>官方微信</p>
 <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/htcloud/images/gz_tu.png"  width="110" height="110"/>
 </div>

 </div>
 <div class="yzzpublic_footcontbot" style="width:800px;">
     <span>版权所有 Copyright@贵州重庆工业云平台2015,All Rights Reserved</span>
 </div>
 </div>
     </div>
<!--public footer end-->
<style>
.yzzpublic_footcontyttop ul {
  float: left;
  height: 200px;
  width: 200px;
  margin-top: 60px;
}
.yzzpublic_footcontyttop .footweixin {
  margin-top: 69px;
  float: left;
  width: 150px;
  height: 200px;
  margin-left: 50px;
}
</style>
</div>
<!--右侧快捷入口 开始-->
<div class="rnav">
  <div class="div" style="position:relative;">
<a href="javascript:xiaon();">
  <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/image/img33.png">
  <h3>平台客服</h3>
</a>
<ul class="hover_type" id="hover_type" style="height: auto;">
</ul>
<script>
jQuery.ajax({
url:'/b2b/xiaon/sysOrgXiaonGroup/ajaxList.ht',
type: 'POST',
success: function(data){
for(var i = 0; i < data.length; i ++){
var da = data[i];
jQuery('#hover_type').append('<a href="javascript:void(0)" onclick="xiaonGroup('+da.settingId+')"><li>'+da.name+'</li></a>');
} 
}
});
</script>
  </div>
  <div class="div">
    <a href="javascript:void(0)" onClick="nTalk.im_openInPageChat('yw_1000_1469505619221')">
      <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/img34.png" />
      <h3>客户留言</h3>
    </a>
  </div>
  <div class="div">
<a href="http://core.casicloud.com/aboutus_htcloud.jsp">
  <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/image/img35.png">
  <h3>关于我们</h3>
</a>
  </div>
  <div class="div gotop">
<a href="javascript:;">
  <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/image/img36.png">
  <h3>返回顶部</h3>
</a>
  </div>
</div>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260053826'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260053826%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
<!-- Mirrored from cocenter.casicloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Apr 2018 05:38:29 GMT -->
</html>