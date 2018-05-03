<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-top');?>
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/new_news.css" />
<?php include template('header-search-inc');?>
<div class="news_menu">
    <div class="container">
        <div class="new_cates" id="cates">
            <i></i><a href="../index.html">主页</a><span><i></i><a href="list_type.html?cat=新闻资讯">新闻中心</a></span>
            </div>
    </div>
</div>
<div class="nav_news" id="nav_news">
    <div class="container">
        <ul class="news_cats" id="tab_list">
        <?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
        <li<?php if($v['catid']==$catid) { ?> class="active"  <?php } ?>
>
        <a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>" id="tab_0" ><?php echo set_style($v['catname'],$v['style']);?></a>
        </li>
        <?php } } ?>
        </ul>
    </div>
    <div class="nav_shadow"></div>
</div>
<div class="wrapper clearfix">
    <div class="content" id="content">
        <div class="container">
            <ul class="news_list">
            
             <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                    <li>
                        <div class="left_box">
                            <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" onerror="this.remove()" /></a>
                        </div>
                        <div class="right_box">
                            <div class="news_title"><a href="<?php echo $t['linkurl'];?>" target="_blank" title='<?php echo $t['title'];?>' class="title"><?php echo $t['title'];?></a></div>
                            <div class="news_text">
                                <a href="<?php echo $t['linkurl'];?>" target="_blank"><p class="desc"><?php echo dsubstr($t['introduce'],200,"...");?> </p></a>
                            </div>
                            <div class="bottom_btn">
                                <div class="left_link">
                                    <a href='tag/tags.html' title="歼-15" target="_blank">歼-15</a>
                                    <a href='tag/tags.html' title="南海阅兵" target="_blank">南海阅兵</a>
                                    <span class="split_line"></span>
                                    <span class="time"><?php echo timetodate($t['addtime'], 'Y-m-d');?></span>
                                </div>
                                <div class="news_list_share clearfix" id="news_share" spm="news.share.110774">
                                    <div class="share fr share_container">
                                        <div class="fl mr_10 share_icon">分享到：&nbsp;</div>
                                        <div class="bdsharebuttonbox fl">
                                            <a href="javascript:void(0)" class="bds_weixin" data-cmd="" title="分享到微信"></a>
                                            <div id="code" class="code" >
                                                <div id="shareCodeTop_1" class="shareCodeTop"></div>
                                                <div>分享到微信</div>
                                            </div>
                                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  <?php } } ?>
      
                </ul>
                <div class="new_page">
                <span class="disable previous"></span>
                <span class="current num">1</span>
                <span class="num">
                <a href="list_type.html?page=1">2</a>
                </span>
                <span class="num">
                <a href="list_type.html?page=2">3</a>
                </span>
                <span class="num">
                <a href="list_type.html?page=3">4</a>
                </span>
                <span class="num">
                <a href="list_type.html?page=4">5</a>
                </span>
                <span class="num">
                <a href="list_type.html?page=5">6</a>
                </span>
                <span class="dots">...</span>
                <span class="num">
                <a href="list_type.html?page=99">100</a>
                </span>
                <span class="next">
                <a href="list_type.html?page=1" data-rec="下一页"></a>
                </span>
                <span class="total total_page">共100页</span>
                <span class="page_jump">到</span>
                <input id='pageInput' class="pageInput" oldpage="" maxlength="5" type="text">
                <span class="page_jump">页</span>
                <button type="button" class="pagebtn" id='pagebtn'>确定</button>
                
                <script>
                HT.utils.pagination(100,$('#pageInput'), $('#pagebtn'));
                </script>
                </div>
                
                <div class="news_ad news_list_ad">
    <div class="place_ad">
        <a href="../workbench/index.html" target="_blank" spm="news.ad">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_new_ad_banner1.jpg" alt="体验测评">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="javascript:;" target="_blank">热门推荐</a></div>
        <ul class="place_news_list place_news_list1">
            <li>
                        <span class="newLight">1</span>
                        <a href="news_details.html" target="_blank" title="这样的高精密加工，不服不行！">这样的高精密加工，不服不行！</a>
                    </li>
                <li>
                        <span class="newLight">2</span>
                        <a href="news_details_video.html" target="_blank" title="一台进口机床高达千万，底气从何而来？">一台进口机床高达千万，底气从何而来？</a>
                    </li>
                <li>
                        <span class="newLight">3</span>
                        <a href="news_details.html" target="_blank" title="大数据驱动国家治理的未来图景">大数据驱动国家治理的未来图景</a>
                    </li>
                <li>
                        <span >4</span>
                        <a href="news_details_video.html" target="_blank" title="超近距离！直击歼-15滑跃升空！">超近距离！直击歼-15滑跃升空！</a>
                    </li>
                <li>
                        <span >5</span>
                        <a href="news_details_video.html" target="_blank" title="扳手是如何制造的，用了十几年你不一定见过">扳手是如何制造的，用了十几年你不一定见过</a>
                    </li>
                </ul>
    </div>
    <div class="place_ad">
        <a href="../workbench/pxzx/index.html" target="_blank" spm="news.ad">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_ad_banner2.png" alt="自动化人才培养平台">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="javascript:;" target="_blank">推荐阅读</a></div>
        <ul class="place_news_list place_news_list2">
            <li>
                        <span class="newLight"></span>
                        <a href="news_details_video.html" target="_blank" title="德国轴承是如何制造的？生产过程也太先进了">德国轴承是如何制造的？生产过程也太先进了</a>
                    </li>
                <li>
                        <span class="newLight"></span>
                        <a href="news_details.html" target="_blank" title="新华三：守护数字化转型的尖兵">新华三：守护数字化转型的尖兵</a>
                    </li>
                <li>
                        <span class="newLight"></span>
                        <a href="news_details_video.html" target="_blank" title="重庆工业云平台四川公司助力打造四川智造人才网">重庆工业云平台四川公司助力打造四川智造人才网</a>
                    </li>
                <li>
                        <span ></span>
                        <a href="news_details.html" target="_blank" title="大数据，你硬要嫁给广告吗？">大数据，你硬要嫁给广告吗？</a>
                    </li>
                <li>
                        <span ></span>
                        <a href="news_details_video.html" target="_blank" title="全球首个面向智能制造服务平台的国际标准发布">全球首个面向智能制造服务平台的国际标准发布</a>
                    </li>
                </ul>
    </div>
    <div class="place_ad">
        <a href="../workbench/cwfw/index.html" target="_blank" spm="news.ad">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_ad_banner3.png" alt="财务服务">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="list7b0a.html?cat=%E4%BA%91%E5%88%B6%E9%80%A0%E8%A7%86%E8%A7%89"
                                         target="_blank">视频新闻</a></div>
        <ul class="news_video clearfix">
            <li>
                        <a href="news_details_video.html" target="_blank" title="超近距离！直击歼-15滑跃升空！">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="../upload/100957780562407254/2.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="超近距离！直击歼-15滑跃升空！">超近距离！直击歼-15滑跃升空！</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="news_details_video.html" target="_blank" title="扳手是如何制造的，用了十几年你不一定见过">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="../upload/100957780562407255/1.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="扳手是如何制造的，用了十几年你不一定见过">扳手是如何制造的，用了十几年你不一定见过</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="news_details_video.html" target="_blank" title="德国轴承是如何制造的？生产过程也太先进了">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="../upload/100957780562407256/1.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="德国轴承是如何制造的？生产过程也太先进了">德国轴承是如何制造的？生产过程也太先进了</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="news_details_video.html" target="_blank" title="这样的高精密加工，不服不行！">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="../upload/100957780562407270/1.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="这样的高精密加工，不服不行！">这样的高精密加工，不服不行！</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
    </div>
</div>
<div class="phone_ad">
    <div class="container">
        <div class="phone_module">
            <div class="phone_module_title">相关新闻</div>
            </div>
        <div class="phone_ads">
            <a href="../workbench/index.html" target="_blank" spm="news.ad">
                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_ad_banner1.png" alt="体验测评">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">热门推荐</div>
            <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110765.html" target="_blank">
                                        <img src="../upload/100957780562407270/1.png" alt="这样的高精密加工，不服不行！">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110765.html" target="_blank">这样的高精密加工，不服不行！</a></div>
                                    <div><span>2018-04-13</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110764.html" target="_blank">
                                        <img src="../upload/100957780562407271/1.png" alt="一台进口机床高达千万，底气从何而来？">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110764.html" target="_blank">一台进口机床高达千万，底气从何而来？</a></div>
                                    <div><span>2018-04-13</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110742.html" target="_blank">
                                        <img src="../upload/100957780562407334/105014_1.jpg" alt="大数据驱动国家治理的未来图景">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110742.html" target="_blank">大数据驱动国家治理的未来图景</a></div>
                                    <div><span>2018-04-11</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="phone_ads">
            <a href="../workbench/pxzx/index.html" target="_blank" spm="news.ad">
                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_ad_banner2.png" alt="自动化人才培养平台">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">推荐阅读</div>
            <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110772.html" target="_blank">
                                        <img src="../upload/100957780562407256/1.png" alt="德国轴承是如何制造的？生产过程也太先进了">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110772.html" target="_blank">德国轴承是如何制造的？生产过程也太先进了</a></div>
                                    <div><span>2018-04-16</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110771.html" target="_blank">
                                        <img src="../upload/100957780562407258/101532_1.jpg" alt="新华三：守护数字化转型的尖兵">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110771.html" target="_blank">新华三：守护数字化转型的尖兵</a></div>
                                    <div><span>2018-04-16</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="110770.html" target="_blank">
                                        <img src="../upload/100957780562407263/1_2.jpg" alt="重庆工业云平台四川公司助力打造四川智造人才网">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="110770.html" target="_blank">重庆工业云平台四川公司助力打造四川智造人才网</a></div>
                                    <div><span>2018-04-16</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="phone_ads">
            <a href="../workbench/cwfw/index.html" target="_blank" spm="news.ad">
                <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/news/news_ad_banner3.png" alt="财务服务">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">
                <a href="list7b0a.html?cat=%E4%BA%91%E5%88%B6%E9%80%A0%E8%A7%86%E8%A7%89"
                   target="_blank">视频新闻</a>
            </div>
            <div class="phone_news_video">
                <div class="row">
                    <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="110774.html" target="_blank">
                                        <img src="../upload/100957780562407254/2.png" alt="超近距离！直击歼-15滑跃升空！">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="110774.html" target="_blank">超近距离！直击歼-15滑跃升空！</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="110773.html" target="_blank">
                                        <img src="../upload/100957780562407255/1.png" alt="扳手是如何制造的，用了十几年你不一定见过">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="110773.html" target="_blank">扳手是如何制造的，用了十几年你不一定见过</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="110772.html" target="_blank">
                                        <img src="../upload/100957780562407256/1.png" alt="德国轴承是如何制造的？生产过程也太先进了">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="110772.html" target="_blank">德国轴承是如何制造的？生产过程也太先进了</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="110765.html" target="_blank">
                                        <img src="../upload/100957780562407270/1.png" alt="这样的高精密加工，不服不行！">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="110765.html" target="_blank">这样的高精密加工，不服不行！</a></div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<script>
    var screenWidth=window.screen.width;
    if(screenWidth<760){
        var videoMsg=$('.phone_video .phone_video_text>a')
        limitVideoWords(videoMsg);
        var showMsg = $('.phone_module .phone_text a');
        limitWords(showMsg);
    }
    function limitWords(target){
        target.each(function(){
            var text = $(this).text();
            if(text.length > 27){
                var nowText = text.trim().substring(0,27) +'...';
                $(this).html(nowText);
            }else{
                var nowText = text.trim();
                $(this).html(nowText);
            }
        })
    }
    function limitVideoWords(target){
        target.each(function(){
            var text = $(this).text();
            if(text.length > 19){
                var nowText = text.trim().substring(0,16) +'...';
                $(this).html(nowText);
            }else{
                var nowText = text.trim();
                $(this).html(nowText);
            }
        })
    }
</script>
</div>
    </div>
</div>
<?php include template('footer-index');?>