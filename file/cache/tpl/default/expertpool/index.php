<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <title>专家池-首页</title>
        <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/css/expertPondReset.css" />
        <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/css/expertPondCommon.css" />
        <link rel="stylesheet" type="text/css" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/css/expertPond.css" />
        <script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/js/jquery.pseudo.js"></script>
        <!-- banner js调用 Begin -->
        <link  type="text/css" rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/css/expertPond_banner.css">
        <script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/js/expertPond_banner.js"></script>
        <script>
        jQuery(function(){
                $('.expertPond_banner .frame').mScroll({
                    nav : ".expertPond_banner .nav a"
                });
                
                $("#oppoint").click(function(){
                window.open("http://cas.casicloud.com/aopCasServer/login?service=http://expert.casicloud.com:80/CAS/checkLogin.htm?backurl=http://expert.casicloud.com/index.htm");      
                });
            });
        </script>
        <!-- banner js调用 End -->
       
    </head>
    <body>
 <!-- public Header Begin -->
        <div class="header">
            <div class="headTop">
                <div class="cWidth">
                    <div class="welcomeBox">
                        <span class="loginBefor">
                              <span>您好，欢迎来到重庆工业云！</span>
      <a href="javascript:doLogin();">请登录</a>&nbsp;|
                         <a href="http://cas.casicloud.com/user/reg_cloud.ht?systemId=10000056851429">免费注册</a>
     
                        </span>
                    </div>
                    <!-- <div class="scanBox">
                        <a href="http://www.casicloud.com" class="weChat">
                            微信公众号
                            <img src="http://expert.casicloud.com/expert/resources/style/shop/professor/images/expertPond_headerTopWeChat.jpg">
                        </a>
                        <a href="http://expert.casicloud.com/index.htm" class="app">
                            重庆工业云APP
                            <img src="http://expert.casicloud.com/expert/resources/style/shop/professor/images/expertPond_headerTopApp.jpg">
                        </a>
                    </div> -->
                  <!--   <div class="listBox">
                         <span class="myCloud">
                            我的云网
                            <div class="child">
                                <ul>
                                    <li class="title">买家中心</li>
                                    <li><a href="javascript:void(0)">发布需求</a></li>
                                    <li class="border"><a href="javascript:void(0)">需求订单</a></li>
                                    <li><a href="javascript:void(0)">发布询价单</a></li>
                                    <li><a href="javascript:void(0)">采购订单</a></li>
                                </ul>
                                <ul>
                                    <li class="title">卖家中心</li>
                                    <li><a href="javascript:void(0)">发布能力</a></li>
                                    <li class="border"><a href="javascript:void(0)">能力订单</a></li>
                                    <li><a href="javascript:void(0)">发布商品</a></li>
                                    <li><a href="javascript:void(0)">销售订单</a></li>
                                </ul>
                            </div>
                        </span>
                        <span class="myService">
                            服务支持
                            <ul class="child">
                                <li><a href="javascript:void();">用户手册</a></li>
                                <li><a href="javascript:void();">培训视频</a></li>
                                <li><a href="javascript:void();">平台客服</a></li>
                                <li><a href="javascript:void();">售后保障</a></li>
                            </ul>
                        </span>
                        <a href="javascript:void();">工业品共享中心</a> 
                    </div> -->
                </div>
            </div>
            <div class="headLink">
                <div class="logoBox">
                    <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/resources/style/shop/professor/images/expertPond_logo.jpg" usemap="#planetmap" />
                    <map name="planetmap" id="planetmap">
                      <area href="http://www.casicloud.com/" shape="rect" coords="0,0,170,48" alt="云网">
                      <area href="index-2.html" shape="rect" coords="180,14,300,42" alt="专家池">
                    </map>
                </div>
                <div class="searchBox">
                    <input type="text" value="" id="searchAll"/>
                    <a href="javascript:void(0);" class="searchBtn" onclick="searchAll()"></a>
                </div>
                <ul class="navBox clearfix">
                    <li>
                        <a href="index-2.html" class="now">首页</a>
                    </li>
                    <li>
                        <a href="professorHelp.html">专家助力</a>
                        <ul class="child">
                            <li>
                                <a href="professor/professorService.html">专家搜索</a>
                            </li>
                            <li>
                                <a href="professor/serviceForOne.html">一对一服务</a>
                            </li>
                            <li>
                                <a href="professor/serviceSalon.html">企业定制沙龙</a>
                            </li>
                            <li>
                                <a href="professor/ownTeam.html">专属顾问团</a>
                            </li>
                            <li>
                                <a href="professor/enterpriseService.html">企业服务动态</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://talent.casicloud.com/index.ht" >人才共享</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">个人服务中心</a>
                        <ul class="child">
                            <li>
                                <a href="http://cas.casicloud.com/aopCasServer/login?service=http://expert.casicloud.com:80/CAS/checkLogin.htm?backurl=http://expert.casicloud.com/index.htm">我的预约</a>
                            </li>
                            <li>
                                <a href="http://cas.casicloud.com/aopCasServer/login?service=http://expert.casicloud.com:80/CAS/checkLogin.htm?backurl=http://expert.casicloud.com/index.htm">我的收藏</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- public Header End -->
<script type="text/javascript">
function doLogin(url,isNewTab,forseLogin){
//设置从哪登录，登录之后回哪
if(!isNewTab){
var backurl = window.location.href;
 url = 'http://cas.casicloud.com/login?service=' + "http://expert.casicloud.com/CAS/checkLogin.htm?backurl="+encodeURI(backurl);
}
openTab(url,isNewTab);
}
 function doLogin(url,isNewTab,forseLogin){
//设置从哪登录，登录之后回哪
if(!isNewTab){
var backurl = window.location.href;
 url = 'http://cas.casicloud.com/login?service=' + "http://expert.casicloud.com/CAS/checkLogin.htm?backurl="+encodeURI(backurl);
}
openTab(url,isNewTab);
} 
function initUrl(url){
//remove '#'
if(url.indexOf("#")>0){
url = url.replace(/#/gm,'');
}
//handle the case when behind '=' has none words
/* if(url.indexOf("=")>0){
url = "${ctx}/index.ht";
} */
//replace domain to casicloud.com
url = url.replace(/aerospacecloud\.cn/gm,'casicloud.com');
url = url.replace(/casicloud\.cn/gm,'casicloud.com');
//url = 'http://www.casicloud.com';
//handle the case when url not begin with www
var domainUrl = url.split('//')[1];
//alert("domainUrl=="+domainUrl)
if(domainUrl!=null && domainUrl!=""){
if(domainUrl.indexOf('localhost')==0 || domainUrl.indexOf('127.0.0.1')==0){
return url;
}else{
var subDomain = domainUrl.split('\.')[0];
if(subDomain!=null && subDomain!='' && 'www'!=subDomain){
//domainUrl = 'www.'+domainUrl;
url = url.split('//')[0]+"//"+domainUrl;
}
}
}
//url = domain;

return url;
}
 function openTab(url,isNewTab){
 if(isNewTab){
 window.open(url);
 }else{
 window.location = url;
 }
 }
 
 function isPersonal(){
 var flag = false;
 jQuery.ajax({
type : 'post',
dataType : 'json',
async : false,
url : '${ctx}/isPernalLogin.ht',
success : function(dics){
flag = dics;
}
});
 return flag;
 }
 
 //全局搜索
 function searchAll(){
 var param=jQuery("#searchAll").val();
 var href="professor/professorService0736.html?searchAllParam="+param
 window.location.href = encodeURI(encodeURI(href));
 }
 
 jQuery(function(){
         //返回顶部
         jQuery('#goTop').click(function () {
         jQuery('body,html').stop().animate({scrollTop:0},300);
             return false;
         });
     });
     
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
 
</script>        
        <!-- 轮播图 Begin -->
        <div class="expertPond_banner">
            <div class="frame">
                                <div class="child" style="background-image: url('http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/upload/advert/44702136-2ce5-48d3-b084-a7a9fcc8c2394236.jpg');">
                    <a href="javascript:void(0);"></a>
                </div>
                                <div class="child" style="background-image: url('http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/upload/advert/2d707471-c9d8-4e68-8e89-d158bb46caba4258.jpg');">
                    <a href="javascript:void(0);"></a>
                </div>
                                <div class="child" style="background-image: url('http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/upload/advert/5c5ba559-dab0-4c32-83d7-c7b91df106974324.jpg');">
                    <a href="javascript:void(0);"></a>
                </div>
                                <div class="child" style="background-image: url('http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/expert/upload/advert/611b53b8-fb66-4811-babf-7f7bf0b0df7e4349.jpg');">
                    <a href="javascript:void(0);"></a>
                </div>
                            </div>
            
            <div class="nav">
                            <a href="javascript:;">1</a>
                             <a href="javascript:;">2</a>
                             <a href="javascript:;">3</a>
                             <a href="javascript:;">4</a>
                         </div>
            
        </div>
        <!-- 轮播图 End -->
        <!-- 服务流程 Begin -->
        <div class="expert_indexFlow">
            <div class="expertPond_publicHead">
                <h4 class="cn">服务流程</h4>
                <h4 class="en">SERVICE PROCESS</h4>
            </div>
            <ul class="flowList clearfix">
                <li class="icon1">检索心仪专家</li>
                <li class="icon2">提出问题</li>
                <li class="icon3">专家经纪人协调</li>
                <li class="icon4">达成合作意向</li>
                <li class="icon5">支付保证金</li>
                <li class="icon6">安排日程</li>
            </ul>
        </div>
        <!-- 服务流程 End -->
        <!-- 热门专家 Begin -->
                <div class="expert_indexHot">
          <div class="expertPond_publicHead">
            <h4 class="cn">热门专家</h4>
            <h4 class="en">HOT EXPERTS</h4>
          </div>
          <ul class="hotList">
            <?php $UNIT = array('正高', '副高', '中级', '初级', '院士', '其他');$tags=tag("table=expertpool&condition=moduleid=$moduleid&length=20&condition=status=3&areaid=$cityid&pagesize=6&order=".$MOD['order']."&width=100&height=100&cols=6&target=_blank&lazy=$lazy&template=null&debug=0");?> 
            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
            <li> <a href="<?php echo $t['linkurl'];?>" class="imgShow"> <img src="<?php echo $t['thumb'];?>" onError="this.src='http://expert.casicloud.com/expert/resources/style/shop/professor/images/default_head.jpg'" alt="img" /> </a>
              <div class="txtShow">
                <h6 class="name"><?php echo $t['title'];?></h6>
                <p><?php echo $UNIT[$t['level']-1];?></p>
                <p><?php echo $t['brand'];?></p>
                <p>北京市 北京市</p>
              </div>
            </li>
            <?php } } ?>
          </ul>
        </div>
        <!-- 热门专家 End -->
        <!-- 专家经纪人 Begin -->
        <div class="expert_indexAgent">
            <div class="cWidth">
                <div class="borderLimit"> <!-- 撑开红色边框 --> </div>
                <div class="expertPond_publicHead">
                    <h4 class="cn">专家经纪人</h4>
                    <h4 class="en">EXPERT AGENT</h4>
                </div>
                <ul class="agentList clearfix">
                    <li class="icon1">
                        <i class="txtTip"> 企业预约心仪专家</i>
                    </li>
                    <li class="icon2">
                        <i class="txtTip">专家经纪人处理预约信息</i>
                    </li>
                    <li class="icon3">
                        <i class="txtTip">确认专家意愿<br />安排日程&emsp;组织洽谈</i>
                    </li>
                    <li class="icon4">
                        <i class="txtTip">企业支付咨询费用</i>
                    </li>
                    <li class="icon5">
                        <i class="txtTip">专企达成合作</i>
                    </li>
                </ul>
                <p class="ask">已有心仪专家，希望专家经纪人协助确认专家对接意愿并撮合对接</p>
                <p class="explain">根据实际情况和客户需求在专家库中搜寻匹配合适专家为客户提供专家匹配撮合服务，为专家安排规划工作日程和实际对接等事务</p>
                <a id ="oppoint"class="orderBtn">预约专家</a>
            </div>
        </div>
        <!-- 专家经纪人 End -->
        <!-- 服务动态 Begin -->
        <div class="expert_indexTrend">
            <div class="expertPond_publicHead">
                <h4 class="cn">服务动态</h4>
                <h4 class="en">THE SERVICE DYNAMIC</h4>
            </div>
            <ul class="trendList clearfix">
                           <li>
                                    <a href="professor/articleaf6c.html?param=196687">
                      重庆工业云专家池新版上线公告
                        <span class="time"> 2017-01-11</span>
                    </a>
                </li>
                        </ul>
        </div>
        <!-- 服务动态 End -->
<?php include template('footer2');?> 
