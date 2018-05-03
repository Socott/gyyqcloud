<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="search_header">
    <div class="container">
        <div class="header_news clearfix">
            <div class="logo_news fl">
                <a href="../index.html"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/images/930/logo.png" alt="Logo"></a>
            </div>
            <div class="logo_key fl">
                <div class="phone_line"><i></i>新闻中心</div>
            </div>
            <div class="logo_search fr">
                <div class="header_right_box">
                    <div class="search_tab">
                        <a href="#" data-url="/search" class="focus" hidefocus="true">产品<span></span></a>
                        <a href="#" data-url="/searchs" hidefocus="true">服务<span></span></a>
                        <a href="#" data-url="/searchc" hidefocus="true">公司<span></span></a>
                        <a href="#" data-url="/searchr" hidefocus="true">求购<span></span></a>
                        <a href="#" data-url="/news/list" hidefocus="true">新闻</a>
                    </div>
                    <input type="hidden" id="dmbuy" value="http://req.casicloud.com/" />
                    <div class="logo_search_input">
                        <input autocomplete="off" id="keyword" maxlength="50" type="text" placeholder="输入搜索关键字" value="" /><a href="#" onClick="searchKeyword(); return false;" class="search_btn">搜索</a>
                    </div>
                </div>
            </div>
            <script>
                var search = window.location.pathname;
                if(search.indexOf('/preview-index') > 0){
                    search = search.substring(0,search.indexOf("../index.html",1));
                } else if(search.indexOf('subscription') > 0){
                    search = '/searchr';
                } else if(search.indexOf('news/index.html') > 0){
                    search = '/news/list';
                } else if (search != '/search' && search != '/searchc' && search != '/searchr' && search != '/searchs' && search != '/news/list'){
                    search = '/search';
                }
                $('.search_tab a.focus').removeClass('focus');
                $('.search_tab a[data-url="' + search + '"]').addClass('focus');
                $('#' + search.substring(1).replace("../index.html","")).show();
                var placeholder = '请输入' + $('.search_tab a[data-url="' + search + '"]').text() + '名称';
                $('#keyword').attr('placeholder', placeholder);
                function searchKeyword(){
                    var keyword = $('#keyword').val().trim();
                    var isBuy = $('.search_tab a.focus').is($('.search_tab a').eq(3));
                    var url = isBuy ? ('http://req.casicloud.com' + $('.search_tab a.focus').attr('data-url')) : $('.search_tab a.focus').attr('data-url');
                    if(placeholder == keyword){
                        keyword = "";
                    }
                    HT.utils.search(keyword, url, null, isBuy);
                }
            </script>
        </div>
    </div>
    <div class="phone_back"><a href="javascript:history.go(-1)"></a></div>
</div>