<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no,email=no,adress=no">
<title>云制造-重庆工业云平台-中国工业互联网平台</title>
</head>
<body style="min-width:1230px;">
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/industrialMall/newIndex/css/page.css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/global.css" />
<link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/home2.css" />
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/common.css" rel="stylesheet" type="text/css" />
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/js/jquery/jquery-1.10.2.min.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/js/jquery.mScroll.js"></script> 
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/js/htyw_ul.js"  type="text/javascript"></script> 
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/js/global.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/js/release/commodity.js"></script>
<script src="<?php echo DT_STATIC;?>file/layer/layer.js"></script>
<!-- 重庆工业云平台，云制造top页面 -->
<div id="top_casi" >
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
</script>
  <!--头部第一部分 开始-->
  <div class="new_topbar">
    <div class="header-container" style="width:1240px;">
      <ul class="new_header_left">
        <li id="business">欢迎来到重庆工业云平台！</li>
        <li><a href="javascript:" target="_blank" id="username" class="right_line"></a></li>
        <li><a href="/member/login.php" id="login">登录</a></li>
        <li id="register"><a href="/member/register.php" target="_blank">免费注册</a></li>
        <!--登录之后-->
      </ul>
      <ul class="new_header_right">
        <li> </li>
        <li> <a id="wdyw" target="_blank" class="right_line" href="http://cas.casicloud.com/login?service=http%3A%2F%2Fcocenter.casicloud.com%2Fj_spring_cas_security_check%3Fspring-security-redirect%3D%2Fhome.ht">我的云网<span class="pop_arrpw" ></span></a>
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
        <li> <a href="javascript:" target="_blank" class="right_line">客户服务中心<span class="pop_arrpw"></span></a>
          <div class="nav-content nc-2" style="width:98px;text-align: center"> <a target="_blank" href="http://kf.casicloud.com/question.html">常见问题</a> <a target="_blank" href="http://kf.casicloud.com/userHelp.html">用户手册</a> <a target="_blank" href="http://kf.casicloud.com/contact.html">在线咨询</a> <a target="_blank" href="http://core.casicloud.com/cloud/tenant/tenantInfo/certification.ht">企业认证</a> <a target="_blank" href="http://core.casicloud.com/busiSub/incrementService/cloudBusisubResour/business.ht">商机订阅</a> <a target="_blank" href="b2b/famousCompany/famousCompanyPurchase/index.html">名企协作</a> <a target="_blank" href="http://core.casicloud.com/orgHealthCheck/orgHealthScore/healthCheck.ht">企业健康检测</a> <a target="_blank" href="b2b/integration/innovate.html">军民融合创新平台</a> </div>
        </li>
      </ul>
    </div>
  </div>
  <!--头部第一部分 结束--> 
  <!--头部第二部分 开始-->
  <div class="header2">
    <div class="block">
      <div class="yzzpublic_logo" style="width:350px;float:left;"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/saas/nankang/images/xqrd-logo.png" alt="Planets" usemap="#planetmap" />
        <map name="planetmap">
          <area href="http://core.casicloud.com/" shape="rect" coords="0,0,174,48">
          </a>
          <area href="cosimcloud/index.html" shape="circle" coords="175,0,299,48">
          </a>
        </map>
      </div>
      <div class="search">
        <div class="text-box">
          <div class="select"> <span  id="selectType">需求</span>
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
        <div class="link"> <a href="javascript:void(0);">铝型材</a> | <a href="javascript:void(0);">元器件</a> | <a href="javascript:void(0);">循环试验</a> | <a href="javascript:void(0);">仿真计算</a> | <a href="javascript:void(0);">盐雾试验</a> </div>
      </div>
      <!-- 广告位 --> 
      <a id="topBannerAdInfo" class="adInfo" style="position: absolute; top:-20px; right:0; width:220px; height:100px; cursor: pointer;" data-adPositionId="10000088470003" data-adPlateId="2" data-typr="2"> </a> </div>
  </div>
  <!--头部第二部分 结束-->
  <div class="banner-home clearfix" style="height:45px;">
    <div class="line-nav">
      <div class="block">
        
        <div class="tit-list">
          <div class="item"> <a href="/cloudproduce/" class="a">首页</a> </div>
          <div class="item"> <a href="javascript:void(0);" class="a">云协作中心</a>
            <ul>
              <li><a href="/buy/search.php" target="_blank">需求大厅</a></li>
              <li><a href="/sell/search.php" target="_blank">能力大厅</a></li>
            </ul>
          </div>
          <div class="item"> <a href="/sucai/" class="a" target="_blank">云素材中心</a> </div>
          <div class="item" onclick="setCzc('云制造','点击','云设计中心')"> <a href="http://core.casicloud.com/cosimcloud/cloudDesign.ht" class="a">云设计中心</a>
            <ul>
              <li><a href="http://cpdm.casicloud.com/">C-PDM</a></li>
              <li><a href="/cloudproduce/cloudDesign.php?type=01">云CAD</a></li>
              <li><a href="/cloudproduce/cloudDesign.php?type=02">云CAE</a></li>
              <li><a href="/cloudproduce/cloudDesign.php?type=03">云CAPP</a></li>
              <li><a href="/cloudproduce/cloudDesign.php?type=00">云PDM</a></li>
            </ul>
          </div>
          <div class="item" onclick="setCzc('云制造','点击','云生产中心')"> <a href="http://core.casicloud.com/cosimcloud/cloudProduction.ht" class="a">云生产中心</a>
            <ul>
              <li><a href="/cloudproduce/cloudProduction.php?type=00">云ERP</a></li>
              <li><a href="/cloudproduce/cloudProduction.php?type=01">CRP</a></li>
              <li><a href="/cloudproduce/cloudProduction.php?type=02">C-MES</a></li>
              <li><a href="/cloudproduce/cloudProduction.php?type=03">虚拟工厂</a></li>
            </ul>
          </div>
          <div class="item" onclick="setCzc('云制造','点击','智能服务中心')"> <a href="cosimcloud/intelligentServiceCenter881d.html?type=0" class="a">智能服务中心</a>
            <ul>
              <li><a href="/cloudproduce/intelligent.php?type=00">资产管理</a></li>
              <li><a href="/cloudproduce/intelligent.php?type=01">售后服务</a></li>
              <li><a href="/cloudproduce/intelligent.php?type=02">远程监控</a></li>
              <li><a href="/cloudproduce/intelligent.php?type=03">智能诊断</a></li>
            </ul>
          </div>
          <div class="item" onclick="setCzc('云制造','点击','云资源中心')"> <a href="http://rjc.casicloud.com/" class="a">云资源中心</a>
            <ul>
              <li><a href="/softpool/" target="_blank">软件池</a></li>
              <li><a href="http://patent.casicloud.com/main/index.html" target="_blank">专利池</a></li>
              <li class="yzzpublic_nav_lists"> <a href="http://core.casicloud.com/pool/std/standardType/index.ht" target="_blank">标准池</a> </li>
              <li><a href="/expertpool/" target="_blank">专家池</a></li>
              <li><a href="http://www.gyyqcloud.com/index.php?s=/lists/97.html" target="_blank">3D打印资源</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--part7End-->
<script>
// 排序
function changeorder(orderField1, obj){
$(obj).addClass("now").siblings().removeClass('now');
var orderSeq1 = $(obj).attr('value');
var field = $(obj).text();
if(orderSeq1 == 'desc'){
field = field.replace('发布时间↑', '发布时间↓');
field = field.replace('热度↑', '热度↓');
field = field.replace('截止时间↑', '截止时间↓');
$(obj).text(field);
$(obj).attr('value','asc');
orderField=orderField1;
orderSeq=orderSeq1;
searchByClassification3();
} else {
field = field.replace('发布时间↓', '发布时间↑');
field = field.replace('热度↓', '热度↑');
field = field.replace('截止时间↓', '截止时间↑');
$(obj).text(field);
$(obj).attr('value','desc');
orderField=orderField1;
orderSeq=orderSeq1;
searchByClassification3();
}
}

//增加实名认证筛选(复选框)
$("#shiming").change(function certification(){
if($("#shiming").is(":checked")){
state='5';
      }else{
    state='';
      }
searchByClassification3();
});

// 在结果中搜索
function searchForKeyword(){
searchByClassification3();
}

function onkeyselect(){
var event =event||window.event;
if(event.keyCode==13){
searchByClassification3();
}
}

 

</script>
 



<script type="text/javascript">
var sys_type="";
var sys_model="";
var sys_scale="";
var isSrm="0";//是否为航天晨光的(默认不是按照航天晨光的查询)
var orderField="";
var orderSeq="desc";
var state="";//实名认证状态
var province = '';//省份
var currentLevel = '';//星级


function myfun(){
$('.cpzx-commodity-classification .classification-list .item.i3 .text-box .now').each(function(){
if($(this).text()!='全部'){
sys_type+=$(this).text()+",";
}
});
sys_type=qud(sys_type);
$("#sys_type").val(sys_type);
$('.cpzx-commodity-classification .classification-list .item.i5 .text-box .now').each(function(){
if($(this).text()!='全部'){
sys_model+=$(this).attr("option")+",";
}
});
sys_model=qud(sys_model);
$("#sys_model").val(sys_model);
$('.cpzx-commodity-classification .classification-list .item.i6 .text-box .now').each(function(){
if($(this).text()!='全部'){
sys_scale+=$(this).text()+",";
}
});
sys_scale=qud(sys_scale);
$("#sys_scale").val(sys_scale);
$('.cpzx-commodity-classification .classification-list .item.i7 .text-box .now').each(function(){
if($(this).text()!='全部'){
isSrm='1';
}else{
isSrm='0';
}
});
$("#isSrm").val(isSrm);
}
function qud(str){
var s="";
//去掉最后一个逗号(如果不需要去掉，就不用写)
    if (str.length > 0) {
    s = str.substr(0, str.length - 1);
    }
s=encodeURI(encodeURI(s));
return s;
}
function selectStar(star) {
    //alert($(star).text());
        $(star).parent().parent().siblings().text($(star).text())
        currentLevel=$(star).val();
        //清空元素
        $(".starfilterList").empty();
        //点击质量认证
        if("" == currentLevel || '0' == currentLevel){
        $(".starfilterList").append("<li value='1' onclick=\"selectStar(this)\">一星级</li>")
        .append("<li value='2' onclick=\"selectStar(this)\">二星级</li>").append("<li value='3' onclick=\"selectStar(this)\">三星级</li>")
        .append("<li value='4' onclick=\"selectStar(this)\">四星级</li>").append("<li value='5'onclick=\"selectStar(this)\">五星级</li>");
        }else if(1 == currentLevel){
        $(".starfilterList").append("<li value='2' onclick=\"selectStar(this)\">二星级</li>")
        .append("<li value='3' onclick=\"selectStar(this)\">三星级</li>").append("<li value='4' onclick=\"selectStar(this)\">四星级</li>")
        .append("<li value='5'onclick=\"selectStar(this)\">五星级</li>").append("<li onclick=\"selectStar(this)\">质量认证</li>");
        }else if(2 == currentLevel){
        $(".starfilterList").append("<li value='1' onclick=\"selectStar(this)\">一星级</li>")
        .append("<li value='3' onclick=\"selectStar(this)\">三星级</li>").append("<li value='4' onclick=\"selectStar(this)\">四星级</li>")
        .append("<li value='5'onclick=\"selectStar(this)\">五星级</li>").append("<li onclick=\"selectStar(this)\">质量认证</li>");
        }else if(3 == currentLevel){
        $(".starfilterList").append("<li value='1' onclick=\"selectStar(this)\">一星级</li>")
        .append("<li value='2' onclick=\"selectStar(this)\">二星级</li>").append("<li value='4' onclick=\"selectStar(this)\">四星级</li>")
        .append("<li value='5'onclick=\"selectStar(this)\">五星级</li>").append("<li onclick=\"selectStar(this)\">质量认证</li>");
        }else if(4 == currentLevel){
        $(".starfilterList").append("<li value='1' onclick=\"selectStar(this)\">一星级</li>")
        .append("<li value='2' onclick=\"selectStar(this)\">二星级</li>").append("<li value='3' onclick=\"selectStar(this)\">三星级</li>")
        .append("<li value='5'onclick=\"selectStar(this)\">五星级</li>").append("<li onclick=\"selectStar(this)\">质量认证</li>");
        }else if(5 == currentLevel){
        $(".starfilterList").append("<li value='1' onclick=\"selectStar(this)\">一星级</li>")
        .append("<li value='2' onclick=\"selectStar(this)\">二星级</li>").append("<li value='3' onclick=\"selectStar(this)\">三星级</li>")
        .append("<li value='4' onclick=\"selectStar(this)\">四星级</li>").append("<li onclick=\"selectStar(this)\">质量认证</li>");
        }
        searchByClassification3(); 
}
// 控制iframe显隐
function searchByClassification3(){
var cId;
var searchKeyWord=jQuery("#searchKeyWord").val().trim();
searchKeyWord=encodeURI(encodeURI(searchKeyWord));
var keyWord=$.trim($("#keyWord").val());
keyWord=encodeURI(encodeURI(keyWord));
// 添加爬虫链接地址
$("#capability_iframe").attr("src",'/inquiry/inquiryIframe.ht?name='+cId+'&sys_type='+sys_type+'&sys_model='+sys_model+'&sys_scale='
+sys_scale+'&orderField='+orderField+'&orderSeq='+orderSeq+"&isSrm="+isSrm+"&select="+searchKeyWord+"&state="+state
+"&keyword="+keyWord+"&province="+province + "&currentLevel=" + currentLevel);
//addUrl();
}
</script>
 
<script type="text/javascript">
        $(function(){
           
            $(".allZone").mouseenter(function(){
                $(".zoneFilter").show();
                $(this).addClass('allZoneHover');
            });
            $(".allZone").mouseleave(function(){
                $(".zoneFilter").hide();
                $(this).removeClass('allZoneHover');
            });
            $(".zonefilterList>li").click(function(){
                //alert($(this).text());
                $(this).parent().parent().siblings().text($(this).text())
                province=$(this).text();
                searchByClassification3();
            });
            $(".zoneFilter>p").click(function(){
                //alert($(this).text());
                $(this).parent().siblings().text($(this).text())
                province='';
                searchByClassification3();
            });
            $(".allStar").mouseenter(function(){
                $(".starFilter").show();
                $(this).addClass('allStarHover');
            });
            $(".allStar").mouseleave(function(){
                $(".starFilter").hide();
                $(this).removeClass('allStarHover');
            });
        })
        
    </script>