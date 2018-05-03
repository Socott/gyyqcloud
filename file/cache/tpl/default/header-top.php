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



        </div>