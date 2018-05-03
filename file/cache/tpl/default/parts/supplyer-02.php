<?php defined('IN_DESTOON') or exit('Access Denied');?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="通用机械-供应商库，本频道提供荏原泵业、广东凌霄泵业、响水县贝斯特传动件、斯凯孚SKF轴承、日本精工NSK轴承等众多CAD模型库。3DSource零件库是每个工程技术人员必备的标准手册，也是帮助工程师快速进行产品开发，减少重复劳动的有效工具。" name="Description" />
    <meta content="3DSource,模型库,通用机械模型库,供应商库" name="Keywords" />
    <title>通用机械-供应商库|3DSource零件库|海量CAD模型，助力产品设计</title>
    <link href="http://binhaisearch.zhizaoyun.com:89/html/libList/css/list.css" type="text/css" rel="stylesheet" />
    <link href="http://binhaisearch.zhizaoyun.com:89/html/libList/css/soft-header.css" rel="stylesheet" type="text/css">
    <script src="http://binhaisearch.zhizaoyun.com:89/html/libList/w-js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://binhaisearch.zhizaoyun.com:89/html/libList/w-js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://binhaisearch.zhizaoyun.com:89/html/libList/w-js/index-appCenter.js"></script>
    <script type="text/javascript" src="http://binhaisearch.zhizaoyun.com:89/html/libList/w-js/index/Homehover.js"></script>
    <script type="text/javascript" src="http://binhaisearch.zhizaoyun.com:89/html/libList/commonHelper.js"></script>
    <script type="text/javascript">
        $(function () {
            replaceAtoUrl();
        });
        function replaceAtoUrl() {
            $("a").each(function () {
                var href = $(this).attr("href");
                if (href && href.lastIndexOf("javascript") == -1) {
                    $(this).attr("href", urlAddAtoParam(href));
                }
            });
        }
        function urlAddAtoParam(url) {
            if (url != undefined && url != null && url != "") {
                if (url.lastIndexOf("ato") == -1) {
                    if (url.lastIndexOf("?") > -1) {
                        url += getAtoParam();
                    } else {
                        url += getAtoParam(1);
                    }
                }
            }
            return url;
        }
        function getAtoParam(type) {
            var ato = GetQueryString("ato");
            var atoParamStr = "";
            if (ato != undefined && ato != null && ato != "") {
                ato = ato.replaceAll("#", "");
                if (type == "1") {
                    atoParamStr = "?ato=" + ato;
                } else {
                    atoParamStr = "&ato=" + ato;
                }
            }
            return atoParamStr;
        }
    </script>
</head><base target="_self"/>
<body>
    <div id="app_Content">
        <div class="main_list">
            <!--左侧分类列表 start-->
            <div class="felleft" style="height: 700px;">
                <h3><i>&nbsp;</i>行业分类</h3>
                <ul>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=01">通用机械</a></li>
                    <li class="current"><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=02">模具</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=03">电机/减速机</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=04">工厂自动化</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=05">液压气动</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=06">管路</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=07">工业电气</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/supplyerdb.php?type=08">汽车</a></li>
                </ul>
            </div>
            <!--左侧分类列 end-->
            <!--厂商件库列表 start-->
            <div class="pro-mx-list">
                <!-- 切换标签 -->
                <div class="tab-box">
                    <ul>
                        <li><a href="/parts/?type=01">标准件库</a></li>
                        <li class="active"><a href="/parts/supplyerdb.php?type=01">供应商库</a></li>
                    </ul>
                </div>
                <!-- 切换标签 end-->
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/2014112101/list_online.html?ato=" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(part_img/youd.gif) no-repeat center center;">
                            <div style="width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/new.gif) center center no-repeat;"></div>
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">优德汽车模具零部件CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">标准冲头、球锁冲头、卸料板、导向部品</div>
                            </div>
                        </div>
                  </a>
              </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/2012110825/list_online.html?ato=" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/dmemj.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">DME模具CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">Slide Action Components Angle PINS Mold Bases</div>
                            </div>
                        </div>
                  </a>
              </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/2012110826/list_online.html?ato=" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/ljmj3.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">龙记模具CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">辅助器、顶琐、导套、边琐</div>
                            </div>
                        </div>
                  </a>
              </div>
            </div>
            <!--厂商件库列表 end-->
        </div>
    </div>
    <!--百度统计代码-->
    <script>
        /*制造云全站*/
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?a0b5587b370aadd883c568f7877873cd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        /*资源专区*/
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?e0bbd42e22c9ae4e3b33d96a3f7c60d4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        /*3DSource零件库软件*/
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?bb978f933b47ac6bcfd81c074de8c284";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        /*判断入口*/
        function checkIsIEView() {
            try {
                var status = window.external.isIEViewer();
                if (status == 1) {
                    return true;
                } else {
                    return false;
                }
            } catch (e) {
                return false;
            }
        }
        /*PC客户端/PC网页端*/
        var isOn = checkIsIEView();
        if (isOn) {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?7c210001a5fc735b53f02d57c60bc415";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        }
        else {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?2e3c2c1b0cf1bf0bf809f6be265df4d2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        }
    </script>
    <script>
        (function () {
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    <script>
        (function () {
            var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?c2ec2e08a4d9eccc135e138f40e45131" : "https://jspassport.ssl.qhimg.com/11.0.1.js?c2ec2e08a4d9eccc135e138f40e45131";
            document.write('<script src="' + src + '" id="sozz"><\/script>');
        })();
    </script>
</body>
</html>
