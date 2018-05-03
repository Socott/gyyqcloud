<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="3DSource零件库是目前国内支持CAD平台最多、支持标准最新、包含零件种类最丰富的零件库软件。3DSource零件库 支持主流的三维CAD平台（PRO/E、NX、CATIA、SolidWorks、Inventor、CAXA...）及二维CAD平台（AutoCAD）。海量模型，助力设计！ 3DSource零件库是每个工程技术人员必备的标准手册，也是帮助工程师快速进行产品开发，减少重复劳动的有效工具。" name="Description" />
    <meta content="3DSource,模型库,通用机械,标准件零件库" name="Keywords" />
    <title>通用机械-标准件库|3DSource零件库|海量CAD模型，助力产品设计</title>
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
</head>
<body>
    <div id="app_Content">
        <div class="main_list">
            <!--左侧分类列表 start-->
            <div class="felleft" style="height: 700px;">
                <h3><i>&nbsp;</i>行业分类</h3>
                <ul>
                    <li class="current"><a rel="nofollow" target="_self"   href="/parts/?type=01">通用机械</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=02">模具</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=03">重型机械</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=04">液压气动</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=05">管路</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=06">机床</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=07">电机/减速机</a></li>
                    <li><a rel="nofollow" target="_self"   href="/parts/?type=08">汽车</a></li>
                </ul>
            </div>
            <!--左侧分类列 end-->
            <!--模型库列表 start-->
            <div class="pro-mx-list">
                <!-- 切换标签 -->
                <div class="tab-box">
                    <ul>
                        <li class="active"><a href="/parts/?type=01">标准件库</a></li>
                        <li><a href="/parts/supplyerdb.php?type=01">供应商库</a></li>
                    </ul>
                </div>
                <!-- 切换标签 end-->
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201209102/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzjgj.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 155px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准紧固件CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">螺栓、螺钉、螺柱、螺母、铆钉、焊钉、垫圈</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211093/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzclk.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p class="index-site-nav-bd" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准齿轮CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">圆柱齿轮、圆锥齿轮、齿条</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://model.th-icloud.cn/modeldetail?src=aHR0cDovL2JpbmhhaS56aGl6YW95dW4uY29tLzIwMTIxMTA5My9saXN0X29ubGluZS5odG1s" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzdlk.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准带轮CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">
                                    V带轮、平带轮、同步带轮、多楔带轮
                                    <br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211092/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzllk.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准链轮CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">
                                    单排链轮、双排链轮、多排链轮<br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211094/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzth.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准弹簧CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">
                                    螺旋弹簧、碟形弹簧<br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211095/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzgdzc.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准滚动轴承CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">向心轴承、推力轴承、组合轴承、专用轴承</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   onclick="ChkIsInstall('201211097','1',0,'标准密封件、润滑件CAD模型库')" href="http://binhai.zhizaoyun.com/201211097/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/mfrh.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准密封件、润滑件CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">橡胶密封件、真空磁流体动密封件、油封</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211098/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/cyxc.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准型材CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">钢型材、钢管材、铝型材、铝管材、铜管材</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201211096/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/bzhdzc.gif) no-repeat center center;">
                        </div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">标准滑动轴承CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">卷制轴套、烧结轴套、铜合金轴套</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201212046/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/cylh.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">常用离合器CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">电磁离合器、机械离合器、超越离合器</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/201212044/list_online.html?ato=" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/cyzd.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">常用制动器CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">磁粉自动器、逆止器、制动器附件</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/2012110910/list_online.html?ato=" target="_blank">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/ku_ico.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">常用操作件CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">手轮、手柄、把手、扳手、门闩</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="divbox" style="padding-top: 10px; padding-bottom: 10px; float: left; display: inline;">
                    <a rel="nofollow" target="_self"   href="http://binhai.zhizaoyun.com/2012110911/list_online.html?ato=" target="_self">
                        <div id="divbox_left" style="float: left; display: inline; margin-left: 20px; margin-top: 10px; width: 80px; height: 80px; background: url(http://binhaisearch.zhizaoyun.com:89/html/libList/part_img/cylz.gif) no-repeat center center;"></div>
                        <div id="divbox_right" style="float: left; display: inline; width: 205px; margin-top: 7px; margin-left: 10px;">
                            <div id="divbox_title" style="line-height: 20px; padding-left: 10px; height: 20px;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #2c2c2c; font-weight: bold;">常用联轴器CAD模型库</p>
                            </div>
                            <div style="padding-left: 10px;">
                                <div id="fenlei_a" style="color: #32589e; line-height: 20px;">弹性联轴器、刚性联轴器、固定式刚性联轴器</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--模型库列表 end-->
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
