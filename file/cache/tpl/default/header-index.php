<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=html5;url=<?php echo $head_mobile;?>">
<?php } ?>
<meta name="generator" content="DESTOON B2B - www.gyycloud.com"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/css/style_930dc78.css?v20171225" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/swiper.min.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/base_930.css" />
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/custom_930.css" />
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/common.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/htyw_ul.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/search.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/jquery-util.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/assets.common.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/swiper.jquery.min.js"></script>
<script type="text/javascript">
    function checkTicket() {
        var img = new Image();
        img.onerror = function () {
            $.getScript('utils/ssoa7a7.jsp?cb=HT.user.login');
        };
        img.src = '/login_ticket?_=' + new Date().valueOf();
    }
//    document.writeln('<script src="/utils/sso.jsp?cb=HT.user.login&ct=checkTicket&_=' + new Date().valueOf() + '"></sc' + 'ript>');
        var _urlMatchActionArray = [];
        </script>
</head>
<body>
<div class="header">
<!-- 头部开始 -->
    <div class="header" spm="index.topbar">
    <div class="navbar" data-animate-options="{'animate':'fadeIn','delay':0}">
        <div class="topbar_container">
            <div class="pull-left">
                <ul class="az-horizontal-nav az-horizontal-nav-left">
                    <li id="business">
                        <span>关于工业云</span>
                    </li>
                    <li><a href="javascript:" target="_blank" id="new_username" class="right_line" style="display: none"></a></li>
                    <li><a href="/member/login.php" id="login">登录</a></li>
                    <li id="register"><a href="/member/register.php" target="_blank">免费注册</a></li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="az-horizontal-nav">
                    <li class="dropdown my_yunwang">
                        <span>我的云网</span>
                        <div class="az-dropdown-content shopping" id="shopping">
                            <table>
                                <tbody>
                                <tr><th>我是买家</th><th>我是卖家</th></tr>
                                <tr>
                                    <td><a href="/member/trade.php?action=order" target="_blank">已买到的产品</a></td>
                                    <td><a href="/member/trade.php" target="_blank">已卖出的产品</a></td>
                                </tr>
                                <tr>
                                    <td><a href="/member/my.php?mid=6&action=add" target="_blank">发布询价单</a></td>
                                    <td><a href="/member/my.php?mid=16&amp;action=add" target="_blank">发布产品</a></td>
                                </tr>
                                <tr>
                                    <td><a href="/member/trade_softpool.php" target="_blank">我的软件池</a></td>
                                    <td><a href="/member/trade_services.php" target="_blank">我的服务</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                                
                                
                    <li class="dropdown hidden-sm wechart">
                        <span>微信公众号</span>
                        <div class="az-dropdown-content qrcode-wechat">
                            <a href="javascript:void(0);" style="cursor: default;">
                                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/new_home/new_banner/new_wxewmbd21.png?20170213" alt="公众号">
                            </a>
                        </div>
                    </li>
                    <li class="dropdown hidden-sm">
                        <span>重庆工业云平台APP</span>
                        <div class="az-dropdown-content qrcode-app">
                            <a href="javascript:void(0);" style="cursor: default;">
                                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/new_home/new_banner/new_appcba9.png?20170302" alt="APP">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 头部结束 -->


<div class="new-header hidden-xs" spm="index.nav">
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/logo.png" alt="Logo"></a>
                </div>
                <div class="new-menu">
                    <ul class="new-nav" id="new_nav">
                        <li>
                            <a href="/news/" target="_blank">新闻资讯</a>
                            <ul class="header-dropdown-content">
                                <li><a href="/news/list.php?catid=39052" target="_blank">工业互联网</a></li>
                                <li><a href="/news/list.php?catid=39053" target="_blank">智能化改造</a></li>
                                <li><a href="/news/list.php?catid=39054" target="_blank">工业大数据</a></li>
                                <li><a href="/news/list.php?catid=39055" target="_blank">云制造</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="/cloudproduce/" target="_blank">云制造</a>
                            <ul class="header-dropdown-content">
                                <li><a href="/buy/" target="_blank" class="prominent">云协作<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img"></a></li>
                                <li><a href="/cloudproduce/cloudDesign.php" target="_blank">云设计</a></li>
                                <li><a href="/cloudproduce/cloudProduction.php" target="_blank" class="prominent">云生产<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img" /></a></li>
                                <li><a href="/softpool/" target="_blank">云资源</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="/services/" target="_blank">服务</a>
                            <ul class="header-dropdown-content">
                                <li><a href="#" target="_blank" class="prominent">产品<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img"></a></li>
                                <li><a href="#" target="_blank">能力</a></li>
                                <li><a href="#" target="_blank" class="prominent">创意<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img" /></a></li>
                                <li><a href="#" target="_blank">生产性</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="/sucai/" target="_blank">素材库</a>
                            <ul class="header-dropdown-content">
                                <li><a href="/parts/" target="_blank" class="prominent">配件库<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img"></a></li>
                                <li><a href="/parts/supplyerdb.php" target="_blank">供应商库</a></li>
                                <li><a href="#" target="_blank" class="prominent">专利库<img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/nav_hot_img.png" alt="nav_hot_img" class="nav_hot_img" /></a></li>
                                <li><a href="#" target="_blank">文献库</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/industry/" target="_blank">资源共享</a>
                            <ul class="header-dropdown-content">
                                <li><a href="/industry/" target="_blank">产品大厅</a></li>
                                <li><a href="/buy/" target="_blank">求购大厅</a></li>
                                <li><a href="/sell/" target="_blank">能力大厅</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="/softpool/" target="_blank">软件池</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="/expertpool/" target="_blank">专家池</a>
                        </li>
                        <li class="hidden-xs">
                            <a href="http://www.longygo.com/" target="_blank">商城</a>
                        </li>
                      <li class="hidden-xs">
                            <a href="javascript:;" target="_blank">解决方案</a>
                            <ul class="header-dropdown-content">
                                <li><a href="/news/show.php?itemid=113" target="_blank">SmartIot工业网关</a></li>
                                <li><a href="/news/show.php?itemid=114" target="_blank">电气互联解决方案</a></li>
                                <li><a href="/news/show.php?itemid=115" target="_blank">液压气动解决方案</a></li>
                                <li><a href="/news/show.php?itemid=116" target="_blank">智能车间建设方案</a></li>
                                <li><a href="/news/show.php?itemid=117" target="_blank">石化行业应用</a></li>
                                <li><a href="/news/show.php?itemid=118" target="_blank">新能源资管应用</a></li>
                                <li><a href="/news/show.php?itemid=119" target="_blank">生产过程管理应用</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="javascript:;" target="_blank">增值服务</a>
                            <ul class="header-dropdown-content">
                                <li><a href="close/train.casicloud.com/College/index.html" target="_blank">工业互联网学院</a></li>
                                <li><a href="module/ywzs.html" target="_blank">工业企业运行指数</a></li>
                                <li><a href="scene/media.html" target="_blank">媒体中心服务</a></li>
                                <li><a href="scene/market.html" target="_blank">营销中心服务</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <!--搜索-->
                <div class="header-search-btn fr" id="search_icon"></div>
                <div class="header-login-area clearfix">
                    <div class="header-login clearfix" id="header_login">
                        <a href="/member/login.php" class="login" id="header_loginBtn">登录</a>
                        <a href="/member/register.php" class="logout" target="_blank">免费注册</a>
                    </div>
                    <!-- 登录成功 -->
                    <div class="header-logout" id="header_logout" style="display: none;">
                        <div class="logout-icon" id="logout_icon"></div>
                        <div class="header-logout-content" id="logout_content">
                            <div class="content-top">
                                <div class="content-welcome">欢迎回来</div>
                                <div class="content-name">
                                    <a href="javascript:" target="_blank" id="new_username1"></a>
                                </div>
                            </div>
                            <div class="content-bottom">
                                <a href="coin/mycoin/index.html"  target="_blank">我的云币</a>
                                <a href="http://in.casicloud.com/sso/login.jsp?redirect=http%3A%2F%2Fwww.casicloud.com%2Floginc%3Fret%3D%252Fhome%252Findex.html"  target="_blank">云端业务工作室</a>
                                <a href="workbench/index.html"  target="_blank">企业应用门户</a>
                                <a href="http://core.casicloud.com/home.ht" class="" target="_blank">我的云网</a>
                                <a href="javascript:;" class="" id="cancellation">退出</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 搜索录入框 -->
                <div class="header-search-content header-content" id="search_content" visual = '0'>
                    <div class="search-box " data-animate-options="{'animate':'fadeIn','delay':0}">
                        <div class="az-input-group az-search-input-group">
                            <div class="az-input-group-label">
                                <ul class="search-options" id="search_list">
                                    <li class="active"><span data-url="/news/list">新闻</span></li>
                                    <li><span data-url="/search">产品</span></li>
                                    <li><span data-url="/searchs">服务</span></li>
                                    <li><span data-url="/searchc">公司</span></li>
                                    <li><span data-url="req/searchr">求购</span></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control az-form-control" maxlength="50" placeholder="请输入关键字" id="keyword_new">
                            <div class="az-input-group-label">
                                <a href="javascript:;" class="search-btn" id="search_btn">搜&nbsp;&nbsp;索</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
            var $nav = $('#new_nav');
            var $logoutContent = $('#logout_content');
            $('#new_nav>li').on('mouseover',function() {
                $(this).addClass('active').siblings().removeClass('active');
                var navWidth = $(this).outerWidth();
                var contentWidth = $(this).find('ul.header-dropdown-content').outerWidth();
                var offsetWidth = (navWidth - contentWidth) / 2;
                $(this).find('ul.header-dropdown-content').stop().slideDown('fast').css('left', offsetWidth);
            }).on('mouseout',function() {
                $(this).find('ul.header-dropdown-content').stop().slideUp('fast');
                $(this).removeClass('active').siblings().removeClass('active');
            });
            $nav.find('ul.header-dropdown-content li').on('mouseover',function(){
                $(this).addClass('active').siblings().removeClass('active');
            }).on('mouseout',function () {
                $(this).removeClass('active');
            });
            $('#search_icon').on('click',function () {
                var flag = $('#search_content').attr('visual');
                if(flag == '1'){
                    $('#search_content').stop().css('display','none').animate({'top':'80px','opacity':'0'},'fast').attr('visual','0');
                }else {
                    $('#search_content').stop().css('display','block').animate({'top':'100px','opacity':'1'},'fast').attr('visual','1');
                }
                $('#keyword_new').focus();
            });
            $('#logout_icon').on('mouseover',function(){
                $logoutContent.stop().slideDown(100);
            }).on('mouseout',function(){
                $logoutContent.stop().slideUp(100);
            });
            $logoutContent.on('mouseover',function(){
                $(this).stop().slideDown(100);
            }).on('mouseout',function () {
                $(this).stop().slideUp(100);
            });
        $(function () {
            function addTar(id){
                $(id).find('a').attr('target','_blank');
                $(id).find('a').attr('href','');
            }
            addTar('.bb')
        });
    </script>