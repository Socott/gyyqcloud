<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-top');?>
        <link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/page.css" />
    <link rel="stylesheet" href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/css/new_search2810.css"  id="search_css"/>
<script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/search.js"></script>
    <script type="text/javascript" src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/jquery.qrcode.min.js"></script>
    <script type="text/javascript">
        function search() {
            var key = $('#key').val().trim();
            document.location.href = 'searchr?q=' + encodeURIComponent(key);
        }
        </script>
<div class="search_header">
    <div class="container">
        <div class="header_news clearfix">
            <div class="logo_news fl">
                <a href="../index.html"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/logo.png" alt="Logo"></a>
            </div>
            <div class="logo_key fl">
                <div class="phone_line"><i></i>能力信息</div>
            </div>
            <div class="post_demand fr">
                <div class="click_demand">发布需求<i></i></div>
                <div class="check_demand">
                    <div><a href="../login.html" target="_self">商品需求发布</a></div>
                    <div><a href="../login.html" target="_self">能力需求发布</a></div>
                </div>
            </div>
            <div class="logo_search fr">
                <div class="header_right_box">
                    <div class="search_tab">
                        <a href="#" data-url="/search" class="focus" hidefocus="true">产品<span></span></a>
                        <a href="#" data-url="/searchs" hidefocus="true">服务<span></span></a>
                        <a href="#" data-url="/searchc" hidefocus="true">公司<span></span></a>
                        <a href="#" data-url="/searchr" hidefocus="true">能力<span></span></a>
                        <a href="#" data-url="/news/list" hidefocus="true">新闻</a>
                    </div>
                    <input type="hidden" id="dmbuy" value="index.html" />
                    <div class="logo_search_input">
                        <input autocomplete="off" id="keyword" maxlength="50" type="text" placeholder="输入搜索关键字" value=""/>
                        <a href="#" onClick="searchKeyword(); return false;" class="search_btn">搜索</a>
                    </div>
                    <div class="hotwords" id="search">
        <a href="searchr.html?q=泵">泵</a>
        <a href="searchr.html?q=制冷剂">制冷剂</a>
        <a href="searchr.html?q=无人机">无人机</a>
        <a href="searchr.html?q=涂布机">涂布机</a>
        <a href="searchr.html?q=PLC">PLC</a>
        <a href="searchr.html?q=涂装线">涂装线</a>
        <a href="searchr.html?q=涂装设备">涂装设备</a>
        <a href="searchr.html?q=供应链">供应链</a>
        <a href="searchr.html?q=搬运机器人">搬运机器人</a>
        </div>
<div class="hotwords" id="searchs">
        <a href="searchr.html?q=设计">设计</a>
        <a href="searchr.html?q=加工">加工</a>
        <a href="searchr.html?q=焊接">焊接</a>
        <a href="searchr.html?q=组装">组装</a>
        <a href="searchr.html?q=物流">物流</a>
        <a href="searchr.html?q=检测">检测</a>
        <a href="searchr.html?q=测量">测量</a>
        </div>
<div class="hotwords" id="searchc">
        <a href="searchr.html?q=航天信息">航天信息</a>
        <a href="searchr.html?q=航天精工">航天精工</a>
        <a href="searchr.html?q=航天通信">航天通信</a>
        <a href="searchr.html?q=航天汽车">航天汽车</a>
        <a href="searchr.html?q=航天晨光">航天晨光</a>
        <a href="searchr.html?q=航天发展">航天发展</a>
        <a href="searchr.html?q=河南航天">河南航天</a>
        </div>
<div class="hotwords" id="searchr">
        <a href="searchr.html?q=电线">电线</a>
        <a href="searchr.html?q=电机">电机</a>
        <a href="searchr.html?q=电子">电子</a>
        <a href="searchr.html?q=电缆">电缆</a>
        <a href="searchr.html?q=阀">阀</a>
        <a href="searchr.html?q=钢">钢</a>
        <a href="searchr.html?q=系统">系统</a>
        </div>
<div class="hotwords" id="newslist">
        <a href="../news/list?q=INDICS">INDICS</a>
        <a href="../news/list?q=工业互联网">工业互联网</a>
        <a href="../news/list?q=重庆工业云平台">重庆工业云平台</a>
        <a href="../news/list?q=工业大数据">工业大数据</a>
        <a href="../news/list?q=智能制造">智能制造</a>
        </div>
<div class="recent_search" id="recent_search">
                        <div class="recent_search_title"><i></i>最近搜过</div>
                        <div class="recent_search_box"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news_menu">
        <div class="container">
            <div class="new_cates" id="cates">
                <i></i><a href="../index.html">主页</a>
                <span><i></i><span>能力信息</span></span>
            </div>
        </div>
    </div>
    <div class="search_nav">
        <div class="container">
            <div class="search_nav_box">
                <div class="nav_box">
                    <ul class="nav_box_ul clearfix" id="tab_list">
                    <?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
                        <li <?php if($typeid==$k) { ?>class="active"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('index.php?typeid='.$k.'&catid='.$catid);?>"><?php echo $v;?></a></li>
<?php } } ?>
                    </ul>
                </div>
                <div class="nav_share clearfix">
                    <div class="nav_share_sub"><a href="javascript:void(0);" id="subscription"><i></i>订阅商机</a></div>
                    <div class="nav_share_btn"><a href="javascript:;" class="share_btn hidden-xs"></a></div>
                    <input type="hidden" id="hidden_domain_buy" value="index.html"/>
                </div>
            </div>
        </div>
    </div>
    <div class="search_category">
        <div class="container">
            <div class="search_category_box clearfix">
                <div class="fl">
                    <div class="category_box">
                        <div><a href="searchr.html?q=all">所有分类：</a></div>
                        <div id="categoryMenu"></div>
                    </div>
                </div>
                <div class="fr category_time">
                    共找到&nbsp;<span class="highlight">999</span>&nbsp;件<span class="double_mark">“</span><span class="double_mark">”</span>相关能力信息
                        （用时0.01秒）
                    </div>
            </div>
        </div>
    </div>
    <div class="search_type">
        <div class="container">
            <div class="search_type_box">
                <div class="buySearch_type_content clearfix">
                    <div class="left">
                        <span><a id='category_all' href="searchr.html?q=all">全部：</a></span> 
                    </div>
                    <div class="right" id="subscriptionCategory">
                    <?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
                        <span data-id='10066983' data-value='<?php echo $v['catname'];?>'>
                        <a  id='10066983' title='$v[catname]' href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo $v['catname'];?></a>
                        </span> 
                        <?php } } ?>
                    </div>
                    <div class="filter_more filter_more_move fr" id="sort_more"><i class="active"></i>更多</div>
                </div>
                <div class="buySearch_type_content clearfix"></div>
            </div>
            </div>
        </div>
    </div>
    <div class="search_sort">
        <div class="container">
            <div class="search_sort_box">
                <div class="search_func">
                    <div class="active"><a href="javascript:;" onClick="" class="flag ">综合排序</a></div>
                    <div class="flag">
                        <div class="course_rank" id="start">
                            <span class="ordertxt">发布时间</span>
                                <i class="rank_top"></i><i class="rank_bottom"></i>
                        </div>
                    </div>
                    <div class="flag">
                        <div class="course_rank" id="end">
                            <span class="ordertxt">截止时间</span>
                                <i class="rank_top"></i><i class="rank_bottom"></i>
                        </div>
                    </div>
                    <div id="areas_filter" class="popup_button"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/popdown_arrow.png"
                                                                     alt="" class="popup_arrow"><a
                            href="javascript:;">所在地区</a></div>
                    <div id="emp_filter" class="popup_button">
                        <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/popdown_arrow.png" alt="" class="popup_arrow">
                        <a href="javascript:;">企业规模</a>
                    </div>
                    <div id="comtype_filter" class="popup_button">
                        <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/popdown_arrow.png" alt="" class="popup_arrow">
                        <a href="javascript:;">企业类型</a>
                    </div>
                    <div id="busitype_filter" class="popup_button">
                        <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/popdown_arrow.png" alt="" class="popup_arrow">
                        <a href="javascript:;">经营类型</a>
                    </div>
                    <div id="level_filter" class="popup_button">
                        <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/popdown_arrow.png" alt="" class="popup_arrow">
                        <a href="javascript:;">质量认证</a>
                    </div>
                    <div class="check_box">
                    <input type="checkbox" id="past_demand_search" onClick="pastDemandSearch()"><label for="past_demand_search">过期需求</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_data">
        <div class="container">
            <div class="search_data_box clearfix">
                <div class="search_mod fl">
                    <div class="clearfix">                  <?php $tags=tag("moduleid=$moduleid&condition=status=3$dtype&areaid=$cityid&catid=$catid&pagesize=".$MOD['pagesize']."&page=$page&showpage=1&datetype=5&order=".$MOD['order']."&fields=".$MOD['fields']."&lazy=$lazy&template=null&debug=0");?>
                       <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
                        <div class="mod_unit">
                                    <div class="mod_unit_box">
                                        <div class="unit_top">
                                           <div class="unit_top_title"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['title'];?>"><?php echo $t['title'];?></a></div>
                                           <div class="unit_top_num"><a href="<?php echo $t['linkurl'];?>" target="_blank">起订量：<span class="num_label"><?php if($t['unit'] && $t['price']>0) { ?><?php echo $t['price'];?>/<?php echo $t['unit'];?><?php } else { ?>面议<?php } ?>
</span></a></div>
                                      </div>
                                        <div class="unit_middle">
                                            <div class="unit_middle_box">
                                                <a href="<?php echo $t['linkurl'];?>" target="_blank">
                                                    <div class="unit_content">
                                                        <span>发布时间：</span>
                                                        <span class="unit_label"><?php echo timetodate($t['edittime'], 'Y-m-d');?></span>
                                                    </div>
                                                    <div class="unit_content">
                                                        <span>剩余时间：</span>
                                                        <span class="days"><?php echo timetodate($t['edittime'], 'Y-m-d');?>&nbsp;</span>
                                                    </div>
                                                    <div class="unit_content">
                                                        <span>分类：</span>
                                                        <span title="其他">其他</span>
                                                    </div>
                                                    <div class="unit_content">
                                                        <span>地区：</span>
                                                        <span> <?php echo area_pos($t['areaid'], '');?></span>
                                                    </div>
                                                    <div class="unit_content">
                                                        <span>报价企业：</span>
                                                        <span class="unit_label">0个</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="unit_conname">
                                                <a href="<?php echo userurl($t['username']);?>" target="_blank" title="<?php echo $t['company'];?>"><?php echo $t['company'];?>
                                                <?php if($t['validated']) { ?>[已核实]><?php } else { ?>[未核实]<?php } ?>
<?php if(!$t['username']) { ?> [未注册]<?php } ?>
</a>
                                            </div>
                                            <div class="unit_approve clearfix">
                                                <div><span class="company_level" data-level="2" title="质量认证"></span></div>
                                                <div><span class="company_famous" title="名企认证"></span></div><div><span class="company_cert" title="实名认证"></span></div></div>
                                        </div>
                                        <div class="unit_bottom">
                                            <a  target="_blank" href="<?php echo $MODULE[$moduleid]['linkurl'];?><?php echo rewrite('inquiry.php?itemid='.$t['itemid']);?>">立即询价</a>
                                        </div>
                                    </div>
                      </div>
                         <?php } } ?> 
                  </div>
                    <div class="new_page"><span class="disable previous"></span><span class="current num">1</span><span class="num"><a href="searchr7009.html?q=&amp;detailtype=0&amp;page=1">2</a></span><span class="num"><a href="searchrc57a.html?q=&amp;detailtype=0&amp;page=2">3</a></span><span class="num"><a href="searchrff49.html?q=&amp;detailtype=0&amp;page=3">4</a></span><span class="num"><a href="searchr2365.html?q=&amp;detailtype=0&amp;page=4">5</a></span><span class="num"><a href="searchrec0b.html?q=&amp;detailtype=0&amp;page=5">6</a></span><span class="dots">...</span><span class="num"><a href="searchr9300.html?q=&amp;detailtype=0&amp;page=24">25</a></span><span class="next"><a href="searchr7009.html?q=&amp;detailtype=0&amp;page=1" data-rec="下一页"></a></span><span class="total total_page">共25页</span><span class="page_jump">到</span><input id='pageInput' class="pageInput" oldpage="" maxlength="5" type="text"><span class="page_jump">页</span><button type="button" class="pagebtn" id='pagebtn'>确定</button><script>HT.utils.pagination(25,$('#pageInput'), $('#pagebtn'));</script></div>
                </div>
                <div class="search_ad fr">
                    <div>
                    <a href="company/buys.html" target="_blank">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119785817848410111/185437.jpg" alt="永红机械（贵州永红航空机械有限责任公司）">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119785919069548543/185412.jpg" alt="永红机械（贵州永红航空机械有限责任公司）">
        </a>
                    </div>
    <div>
    <a href="company/buys.html" target="_blank">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119785200807571455/shanyangzhonggong.jpg" alt="詹阳重工（贵州詹阳动力重工有限公司）">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119785170801520639/185711.jpg" alt="詹阳重工（贵州詹阳动力重工有限公司）">
        </a>
    </div>
    <div>
    <a href="company/buys.html" target="_blank">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119784981118316543/185756.jpg" alt="联塑科技（全称：联塑科技发展（贵阳）有限公司）">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119785008238686207/185750.jpg" alt="联塑科技（全称：联塑科技发展（贵阳）有限公司）">
        </a>
    </div>
    <div>
    <a href="company/buys.html" target="_blank">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119784867146493951/185823.jpg" alt="以晴光电（全称：贵州以晴光电集团有限公司）">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119784841112449023/185830.jpg" alt="以晴光电（全称：贵州以晴光电集团有限公司）">
        </a>
    </div>
    <div>
    <a href="company/buys.html" target="_blank">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119784677777862655/185909.jpg" alt="西南工具（全称：贵州西南工具（集团）有限公司）">
            <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/119784699659546623/185904.jpg" alt="西南工具（全称：贵州西南工具（集团）有限公司）">
        </a>
    </div>
    </div>
            </div>
        </div>
    </div>
    <div class="search_recommend">
        <div class="container">
            <div class="search_recommend_box">
                <div class="recommend_title">需求推荐</div>
                <div class="recommend_box clearfix">
                    <div class="recommend_unit">
                                <div class="mod_unit_box">
                                    <div class="unit_top">
                                        <div class="unit_top_title">
                                                <a href="../industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783296" target="_blank" title="断路器">断路器</a>
                                      </div>
                                            <div class="unit_top_num">
                                                <a href="../industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783296" target="_blank">
                                                采购量：<span class="num_label">1.00套</span>
                                                </a>
                                            </div>
                                  </div>
                                    <div class="unit_middle">
                                        <div class="unit_middle_box">
                                            <a href="../industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783296" target="_blank">
                                                <div class="unit_content">
                                                    <span>发布时间：</span>
                                                    <span class="unit_label"> 2018-04-16</span>
                                                </div>
                                                <div class="unit_content">
                                                    <span>剩余时间：</span>
                                                    <span class="days">2</span>&nbsp;天
                                                                </span>
                                                </div>
                                                <div class="unit_content">
                                                    <span>分类：</span>
                                                    <span title="其他">
                                                        其他</span>
                                                </div>
                                                <div class="unit_content">
                                                    <span>地区：</span>
                                                    <span> 陕西</span>
                                                </div>
                                                <div class="unit_content">
                                                    <span>报价企业：</span>
                                                    <span class="unit_label">0个</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="unit_conname">
                                            <a href="company/buys.html" target="_blank" title="西安航天自动化股份有限公司">西安航天自动化股份有限公司</a>
                                        </div>
                                        <div class="unit_approve clearfix">
                                            <div><span class="company_level" data-level="2" title="质量认证"></span></div>
                                            <div><span class="company_famous" title="名企认证"></span></div><div><span class="company_cert" title="实名认证"></span></div></div>
                                    </div>
                                    <div class="unit_bottom">
                                        <a href="../industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783296" target="_blank">立即报价</a>
                                    </div>
                                </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="wrapper clearfix">
        <script type="text/javascript">
            function pastDemandSearch() {
                if ($('#past_demand_search').prop('checked')) {
                    window.location.href = window.location.href.setQuery('expired', '1').setQuery('page', null);
                } else {
                    window.location.href = window.location.href.setQuery('expired', null).setQuery('page', null);
                }
            }
            $(function () {
                var $buySearchContent = $('.search_type_box .buySearch_type_content');
                $buySearchContent.each(function () {
                    var $rightSpan = $(this).find('.right span');
                    var aLength = $rightSpan.length;
                    var $filterMore = $(this).find('.filter_more');
                    var hasShow = $filterMore.hasClass('active');
                    if (aLength <= 7) {
                        $(this).find('.filter_more').hide();
                        $rightSpan.css({'display': 'inline-block'});
                    } else if (aLength > 7) {
                        $(this).find('.filter_more').show();
                        $rightSpan.slice(0,7).css({'display': 'inline-block'});
                        if ($rightSpan.find('a.active').length > 0) {//选中分类不隐藏
                            $(this).find('.filter_more').addClass('active').html('<i></i>隐藏');
                            $rightSpan.css({'display': 'inline-block'});
                        } else {
                            $rightSpan.slice(7).addClass('negative');
                        }
                    }
                });
                $('.filter_more').on('click', function () {
                    $(this).toggleClass('active');
                    var $spanShow = $(this).parents('.buySearch_type_content').find(' .right span');
                    if ($(this).hasClass('active')) {
                        $(this).html('<i></i>隐藏');
                        $spanShow.slice(7).removeClass('negative');
                        $spanShow.css({'display': 'inline-block'});
                    } else {
                        $(this).html('<i></i>更多');
                        $spanShow.slice(7).addClass('negative');
                    }
                });
                /*发布需求*/
                $('.click_demand').on('mouseenter', function () {
                    $(this).addClass('active');
                    $(this).siblings('.check_demand').stop().slideDown();
                });
                $('.click_demand').on('mouseleave', function () {
                    $(this).removeClass('active');
                    $(this).siblings('.check_demand').stop().slideUp();
                });
                $('.check_demand').on('mouseenter', function () {
                    $(this).siblings('.click_demand').addClass('active');
                    $(this).stop().slideDown();
                });
                $('.check_demand').on('mouseleave', function () {
                    $(this).siblings('.click_demand').removeClass('active');
                    $(this).stop().slideUp();
                });
            })
        </script>
 
</div>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/search/search.js"></script>
<script src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/js/search_mobile.js"></script>
<?php include template('footer-index');?>
</body>
</html>