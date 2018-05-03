<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-top');?>
<link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/new_news.css" />
<?php include template('header-search-inc');?>
<div class="news_menu">
    <div class="container">
        <div class="cates new_cates">
            <i></i><span><a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; 正文</span>
            </div>
    </div>
</div>
<div class="wrapper clearfix">
    <script>
        $(function(){
            $('.detail .content').css({
                'font-size': '16px',
                'color': '#666',
            });
            $('.detail .content p iframe').css({
                'width':'100%'
            });
            $('.detail .content p iframe').parents('p').css({
                'text-indent':'0em'
            })
            $('.detail .content b').css({
                'font-size': '16px',
                'color': '#666'
            });
            $('.detail .content>p').css({
                'line-height': '30px',
                'font-size': '16px',
                'padding-bottom': '20px',
                'color': '#666',
                'text-align':'justify'
            });
            $('.detail .content>p img').parents('p').css({
                'text-align':'center'
            })
            $('.detail .content h2').css({
                'line-height': '30px',
                'font-size': '30px',
                'padding-bottom': '20px',
                'color': '#333'
            });
            $('.detail .content img').css({
                'max-length': '1000px',
                'padding':'20px 0'
            });
            $('.detail .related_list .left_box img').css({
                'padding':'0'
            });
            $('.detail .content p *').css({
                'font-size': '16px',
                'color': '#666'
            });
            $('.detail .content p a').css({
                'color':'#1875f0',
                'word-break':'break-all'
            });
        })
    </script>
    <div class="container news_detail">
        <div class="detail">
            <h1 class="title"><?php echo $title;?></h1>
            <div class="news_info clearfix">
                <div class="right_info">
                    <span class="time"><span class="time_text">发布时间：</span><?php echo $adddate;?></span>
                    <span class="source">来源：<span class="source_detail">金属加工</span></span>
                </div>
                <div class="key_words">
                    <span>关键字：</span>
                    <a href='/news/tag/%E6%99%BA%E8%83%BD%E5%8C%96%E6%94%B9%E9%80%A0/' title="智能化改造" target="_blank">智能化改造</a>
                    </div>
                </div>
            <div class="content" id="content">
            
                <?php if($introduce && $user_status == 3 && $page == 1) { ?><div class="introduce">核心提示：<?php echo $introduce;?></div><?php } ?>
                <?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
                <div id="content"><?php include template('content', 'chip');?></div>
                <?php if($voteid) { ?><div class="pd20"><?php if(is_array($voteid)) { foreach($voteid as $v) { ?>
                <?php echo load('vote_'.$v.'.htm');?><?php } } ?></div>
                <?php } ?>
                <?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
        
            </div>
            <div class="news_detail_share clearfix" id="detail_share" spm="newsdetail.share.108297">
                <div class="share fr">
                    <div class="fl mr_10 mobile_share">分享到：&nbsp;</div>
                    <div class="bdsharebuttonbox fl">
                        <a href="javascript:void(0)" class="bds_weixin" data-cmd="" spm-node="分享到微信"></a>
                        <div id="code" class="code share_text">
                            <div id="shareCodeTop" class="shareCodeTop"></div>
                            <div>分享到微信</div>
                        </div>
                        <a href="#" class="bds_tsina" data-cmd="tsina" spm-node="分享到微博"></a>
                        <span class="share_text share_sina">分享到微博</span>
                        <a href="#" class="bds_qzone" data-cmd="qzone" spm-node="分享到空间"></a>
                        <span class="share_text share_qzone">分享到空间</span>
                        <a href="#" class="bds_sqq" data-cmd="sqq" spm-node="分享到qq"></a>
                        <span class="share_text share_qq">分享到QQ</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="news_ad news_list_ad">
    <div class="place_ad">
        <a href="/workbench/index.html" target="_blank" spm="news.ad">
            <img src="https://cdn.htres.cn/res/images/news/news_new_ad_banner1.jpg" alt="体验测评">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="javascript:;" target="_blank">热门推荐</a></div>
        <ul class="place_news_list place_news_list1">
          <?php $tags=tag("table=article_21&condition=moduleid=$moduleid&length=44&condition=status=3 and itemid<>$itemid and keyword like '%".$keytags['0']."%'&areaid=$cityid&pagesize=".$MOD['page_srelate']."&order=".$MOD['order']."&cols=2&template=null");?>
            <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
            <li><span class="newLight"><?php echo $i+1;?></span><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></li>
            <?php } } ?>
         </ul>
    </div>
    <div class="place_ad">
        <a href="/workbench/pxzx/" target="_blank" spm="news.ad">
            <img src="https://cdn.htres.cn/res/images/news/news_ad_banner2.png" alt="自动化人才培养平台">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="javascript:;" target="_blank">推荐阅读</a></div>
        <ul class="place_news_list place_news_list2">
        <?php $tags=tag("table=article_21&condition=moduleid=$moduleid&length=44&condition=status=3 and itemid<>$itemid and keyword like '%".$keytags['0']."%'&areaid=$cityid&pagesize=".$MOD['page_srelate']."&order=".$MOD['order']."&cols=2&template=null");?>
           <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>  
           <li><span class="newLight"></span><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></li>
      <?php } } ?>
                
                </ul>
    </div>
    <div class="place_ad">
        <a href="/workbench/cwfw/" target="_blank" spm="news.ad">
            <img src="https://cdn.htres.cn/res/images/news/news_ad_banner3.png" alt="财务服务">
        </a>
    </div>
    <div class="place_news">
        <div class="place_news_title"><a href="/news/list?cat=%E4%BA%91%E5%88%B6%E9%80%A0%E8%A7%86%E8%A7%89"
                                         target="_blank">视频新闻</a></div>
        <ul class="news_video clearfix">
            <li>
                        <a href="/news/110863.html" target="_blank" title="从沙子到CPU的制造过程，大开眼界！">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="https://i1.htres.cn/100957780562407009/2.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="从沙子到CPU的制造过程，大开眼界！">从沙子到CPU的制造过程，大开眼界！</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="/news/110864.html" target="_blank" title="宝马 MINI 工厂的机器人装配工">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="https://i1.htres.cn/100957780562407008/3.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="宝马 MINI 工厂的机器人装配工">宝马 MINI 工厂的机器人装配工</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="/news/110862.html" target="_blank" title="澳科学家研制“超级海绵”，可吸附海洋中的泄漏石油">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="https://i1.htres.cn/100957780562407010/1.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="澳科学家研制“超级海绵”，可吸附海洋中的泄漏石油">澳科学家研制“超级海绵”，可吸附海洋中的泄漏石油</span>
                                </div>
                            </div>
                        </a>
                    </li>
                <li>
                        <a href="/news/110858.html" target="_blank" title="滑板的轮子既耐磨又有弹性，原来是因为……">
                            <div class="video_box">
                                <div class="video_img">
                                    <img src="https://i1.htres.cn/100957780562407031/3.png" alt="video_img">
                                </div>
                                <div class="video_name">
                                    <span title="滑板的轮子既耐磨又有弹性，原来是因为……">滑板的轮子既耐磨又有弹性，原来是因为……</span>
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
            <div class="phone_news_list">
                        <div class="row">
                            <div class="col-xs-3 phone_img">
                                <a href="/news/107205.html" target="_blank">
                                    <img src="http://i1.htres.cn/247835553359982591/33.jpg" alt="转型找死不转型等死，工业4.0能救中小企业吗？">
                                </a>
                            </div>
                            <div class="col-xs-9 phone_text">
                                <div><a href="/news/107205.html" target="_blank">转型找死不转型等死，工业4.0能救中小企业吗？</a></div>
                                <div><span>2017-02-23</span></div>
                            </div>
                        </div>
                    </div>
                <div class="phone_news_list">
                        <div class="row">
                            <div class="col-xs-3 phone_img">
                                <a href="/news/107450.html" target="_blank">
                                    <img src="http://i1.htres.cn/238681598239436799/164518.jpg" alt="你可能买的是“假”德系车，看中国工业如何造钢轨">
                                </a>
                            </div>
                            <div class="col-xs-9 phone_text">
                                <div><a href="/news/107450.html" target="_blank">你可能买的是“假”德系车，看中国工业如何造钢轨</a></div>
                                <div><span>2017-03-20</span></div>
                            </div>
                        </div>
                    </div>
                <div class="phone_news_list">
                        <div class="row">
                            <div class="col-xs-3 phone_img">
                                <a href="/news/107471.html" target="_blank">
                                    <img src="http://i1.htres.cn/238005140420554751/133319.png" alt="哈工大研发首款机器人核心部件将投产！">
                                </a>
                            </div>
                            <div class="col-xs-9 phone_text">
                                <div><a href="/news/107471.html" target="_blank">哈工大研发首款机器人核心部件将投产！</a></div>
                                <div><span>2017-03-22</span></div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="phone_ads">
            <a href="/workbench/index.html" target="_blank" spm="news.ad">
                <img src="https://cdn.htres.cn/res/images/news/news_ad_banner1.png" alt="体验测评">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">热门推荐</div>
            <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110852.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407042/1.png" alt="以前从未见过，深海中居然可以焊接，让人大开眼界">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110852.html" target="_blank">以前从未见过，深海中居然可以焊接，让人大开眼界</a></div>
                                    <div><span>2018-04-25</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110853.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407041/1.png" alt="用纸壳手工制作的密码箱，它的工作原理搞懂了！">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110853.html" target="_blank">用纸壳手工制作的密码箱，它的工作原理搞懂了！</a></div>
                                    <div><span>2018-04-25</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110851.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407043/1.png" alt="实拍电路板雕刻过程">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110851.html" target="_blank">实拍电路板雕刻过程</a></div>
                                    <div><span>2018-04-25</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="phone_ads">
            <a href="/workbench/pxzx/" target="_blank" spm="news.ad">
                <img src="https://cdn.htres.cn/res/images/news/news_ad_banner2.png" alt="自动化人才培养平台">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">推荐阅读</div>
            <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110877.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562406969/675-1P42514535ME.jpg" alt="2018智慧中国峰会重磅嘉宾抢先看">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110877.html" target="_blank">2018智慧中国峰会重磅嘉宾抢先看</a></div>
                                    <div><span>2018-04-27</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110876.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562406970/20180427104008_1448.jpg" alt="新技术新产品引擎发力，助推2018年中国国际铝工业展新看点">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110876.html" target="_blank">新技术新产品引擎发力，助推2018年中国国际铝工业展新看点</a></div>
                                    <div><span>2018-04-27</span></div>
                                </div>
                            </div>
                        </div>
                    <div class="phone_news_list">
                            <div class="row">
                                <div class="col-xs-3 phone_img">
                                    <a href="/news/110875.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562406973/1.png" alt="深度：HIT电池产业化现状分析">
                                    </a>
                                </div>
                                <div class="col-xs-9 phone_text">
                                    <div><a href="/news/110875.html" target="_blank">深度：HIT电池产业化现状分析</a></div>
                                    <div><span>2018-04-27</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="phone_ads">
            <a href="/workbench/cwfw/" target="_blank" spm="news.ad">
                <img src="https://cdn.htres.cn/res/images/news/news_ad_banner3.png" alt="财务服务">
            </a>
        </div>
        <div class="phone_module">
            <div class="phone_module_title">
                <a href="/news/list?cat=%E4%BA%91%E5%88%B6%E9%80%A0%E8%A7%86%E8%A7%89"
                   target="_blank">视频新闻</a>
            </div>
            <div class="phone_news_video">
                <div class="row">
                    <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="/news/110863.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407009/2.png" alt="从沙子到CPU的制造过程，大开眼界！">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="/news/110863.html" target="_blank">从沙子到CPU的制造过程，大开眼界！</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="/news/110864.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407008/3.png" alt="宝马 MINI 工厂的机器人装配工">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="/news/110864.html" target="_blank">宝马 MINI 工厂的机器人装配工</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="/news/110862.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407010/1.png" alt="澳科学家研制“超级海绵”，可吸附海洋中的泄漏石油">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="/news/110862.html" target="_blank">澳科学家研制“超级海绵”，可吸附海洋中的泄漏石油</a></div>
                            </div>
                        <div class="col-xs-6 phone_video">
                                <div class="phone_video_img">
                                    <a href="/news/110858.html" target="_blank">
                                        <img src="https://i1.htres.cn/100957780562407031/3.png" alt="滑板的轮子既耐磨又有弹性，原来是因为……">
                                    </a>
                                </div>
                                <div class="phone_video_text"><a href="/news/110858.html" target="_blank">滑板的轮子既耐磨又有弹性，原来是因为……</a></div>
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
<div>
</div>
<script>
    $(function(){
        $(window).resize(function(){
            if($(window).width() < 780){
                $('.footer').width('100%')
            }
        });
    });
</script><script src="https://cdn.htres.cn/res/js/news/news.js"></script>
<script type="text/javascript">
    $(function () {
        //对相似新闻进行定位
        $('.hot_news:eq(1)').css('top', $('.hot_news:eq(0)').height()+ 300 +'px');
        //对新版二维码进行临时处理，id大于4月7日18点之前发布的新闻id（107677）才显示新版二维码
        var newsId = 108297;
        if (newsId > 107677) {
            $('#newQrcode').show();
        }
        var content = $('#content').html();
        if (content.indexOf('_htyunlu_page_break_tag_') > 0) {
            var contents = content.split('_htyunlu_page_break_tag_');
            //页码html
            var pageHtml = $('<div class="page"></div>');
            for (var i = 0; i < contents.length; i++) {
                if (i == 0) {
                    pageHtml.append('<span class="current"><a href="javascript:;" aria-expanded="true">' + (i + 1) + '</a></span>');
                } else {
                    pageHtml.append('<span class="num"><a href="javascript:;" aria-expanded="true">' + (i + 1) + '</a></span>');
                }
            }
            var pageElement = $('<div class = "tab_div"></div>');
            $(contents).each(function (index, e) {
                if (index == 0) {
                    pageElement.append('<div style="display: block" id="page_' + index + '">' + e + '</div>');
                } else {
                    pageElement.append('<div style="display: none" id="page_' + index + '">' + e + '</div>');
                }
            });
            $('#content').html(pageElement).append(pageHtml);
            //tab切换
            var tab_lists = $('.page > span');
            var tab_div = $('.tab_div > div');
            tab_lists.on('click', function () {
                var tab_index = $(this).index();
                tab_lists.removeClass('current');
                $(this).addClass('current');
                tab_div.hide();
                $(tab_div[tab_index]).show();
            });
        }
        /*相关新闻文字限制*/
        var relatedMsg = $('#related_news .related_msg');
        relatedMsg.each(function(){
            var text = $(this).text();
            var textHref = $(this).parents('.related_content').find('a').attr('href');
                text = text.replace('您的浏览器暂时无法播放此视频.', '');
            if(text.length > 130){
                var textDetail = '......<a target="_blank" href="'+ textHref +'" class="msg_target">【详情】</a>';
                var nowText = text.trim().substring(0,130) + textDetail;
                $(this).html(nowText);
            }else{
                var textDetail = '<a target="_blank" href="'+ textHref +'" class="msg_target">【详情】</a>';
                var nowText = text.trim() + textDetail;
                $(this).html(nowText);
            }
        })
        /*window滚动*/
        $('#goBack,.phone_go_back').on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });
        /*返回上一页*/
        /*var old = document.referrer;
        $('.phone_back>a').attr('href',old);*/
        $('.phone_back>a').on('click',function () {
            window.location.reload();
        })
        $(window).scroll(function () {
            //为页面添加页面滚动监听事件
            var wst = $(window).scrollTop(); //滚动条距离顶端值
            var winWidth = $(window).width(); //滚动条距离顶端值
            var winHeight=$('.footer').offset().top-$('.footer').height();//分享按钮距离顶部最大距离
            var goBack = $('.detail_scroll>.scroll_list:nth-child(2)');
            if(wst>300 && wst<winHeight){
                $('#detail_share').css({'top':wst-40});
            }else if(wst>winHeight){
                $('#detail_share').css({'top':winHeight});
            }else{
                $('#detail_share').css({'top':'220px'});
            }
            if(wst > 750){
                goBack.show();
                if(winWidth < 768){
                    $('.phone_go_back').show();
                }
            }else {
                goBack.hide();
                $('.phone_go_back').hide();
            }
        });
    });
    //去除新闻空标签
    $('.content>p').find('br').parent().remove();
    $('.bdsharebuttonbox a').click(function () {
        var name = $(this).attr('title');
        var newsTitle = $('.detail .title').text();
        if (typeof _czc != 'undefined' && name && newsTitle) {
            _czc.push(['_trackEvent', 'newsshare', name, newsTitle]);
        }
    });
    $('.detail .content p strong').css({
        'color': '#555'
    });
    $('.detail .content p strong *').css({
        'color': '#555'
    });
    $('.detail .content p b *').css({
        'color': '#555'
    });
    /*关键字转码*/
    
    /*百度分享*/
    var desc = 'SMART IOT产品是一款连接INDICS工业互联网平台的工业物联网网关，提供采集、转换、处理和传输不同厂商品牌工业设备数据、工厂OT组网和通信协议转化等功能模块。并将工业数据与云制造应用、工业大数据应用无缝集成，为生产制造企业提供了工业设备连接并使用INDICS云平台服务的便捷方式。标准系列产品具备良好的通用性和扩展性。通过丰富的接口和可配置的软件功能，接入多种设备与协议。适用于单台设备及传感';
    
    var title=$('.detail .title').text().trim();
    desc = desc.length > 120 ? (desc.substr(0, 117) + '...') : desc;
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": title + "（重庆工业云-国家工业互联网）",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "http://cdn.htres.cn/res/images/news_default_pic.jpg",
            "bdDesc": desc,
            "bdStyle": "0",
            "bdSize": "16"
        }, "share": {}
    };
    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
    $('#shareCodeTop').qrcode(window.location.href);
    $('#shareCodeTop').next('div').css({'height':'30px','line-height':'30px'})
    $('#shareCodeTop').css({'height':'108px'}).find('canvas').css({'width':'108px','height':'108px'});
    $('.news_detail_share a').on('mouseenter',function(){
        $(this).next().addClass('active');
    })
    $('.news_detail_share a').on('mouseleave',function(){
        $(this).next().removeClass('active');
    })
    //移动端分享
    var screenWidth=window.screen.width;
    if(screenWidth<760){
        $('#content').append($('#detail_share'));
        $('.news_detail_share ').css({'position':'static'});
        $('.share_text').css('display','none');
    }
    /*替换插件默认title*/
    var shareIcon=$('#detail_share .bdsharebuttonbox>a');
    shareIcon.each(function(){
        $(this).attr('title',' ');
    })
</script>
<?php include template('footer');?> 