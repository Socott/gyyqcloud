<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header-index');?>
<div class="banner" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.banner" id="index_banner">
  <div id="banner_swiper" class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-color: ;">
        <div class="slide_banner"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/102492376563183615/121236.jpg" alt="云币"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/102492482200924159/121211.jpg" alt="云币"> </a> </div>
      </div>
      <div class="swiper-slide" style="background-color: ;">
        <div class="slide_banner"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/161845911599443967/204006.jpg" alt="第二届APP大赛"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/181444844248100863/banner_bg_3_newmobile.jpg" alt="第二届APP大赛"> </a> </div>
      </div>
      <div class="swiper-slide" style="background-color: ;">
        <div class="slide_banner"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/102450446676520959/145913.jpg" alt="履约认证"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/102450489236123647/145902.png" alt="履约认证"> </a> </div>
      </div>
      <div class="swiper-slide" style="background-color: ;">
        <div class="slide_banner"> <a href="workbench/index.html" target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/141922294786945023/165107.jpg" alt="企业应用门户"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/141921842620002303/165255.jpg" alt="企业应用门户"> </a> </div>
      </div>
      <div class="swiper-slide" style="background-color: ;">
        <div class="slide_banner"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/148913361621086207/095136.jpg" alt="在线营销大赛"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/148913251935842303/095202.jpg" alt="在线营销大赛"> </a> </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>
<div class="modules">
  <div class="container">
    <div class="workbench_coin clearfix">
      <div class="workbench hidden-xs" spm="index.workbench">
        <div class="workbench-header">
          <div class="workbench-img"></div>
          <a href="login.html" target="_blank" title="云端工作室"></a> </div>
        <div class="workbench-content clearfix">
          <ul class="clearfix">
            <li class="workBench_gyl"> <a href="login.html" target="_blank" spm="ywgzs.workbench">
              <div>供应链</div>
              </a> </li>
            <li class="workBench_yxzx"> <a href="login.html" target="_blank" spm="ywgzs.workbench">
              <div>营销中心</div>
              </a> </li>
          </ul>
          <div class="workbench-link"> <a href="workbench/index.html" target="_blank" spm="index.workbench">企业应用门户</a> </div>
        </div>
        <div class="workbench-footer">
          <div>
            <div><a href="javascript:void(0);" target="_blank">已注册企业 <span id="company_count">231</span>家</a></div>
            <div><a href="req/searchr.html" target="_blank">已发布需求 <span id="buy_count">954</span> 条</a></div>
            <!--<div><a href="2025.html" target="_blank">已注册企业 <span id="company_count">...</span>家</a></div>
                        <div><a href="req/searchr" target="_blank">已发布需求 <span id="buy_count">...</span> 条</a></div>-->
          </div>
        </div>
        <div class="new_year_lanter"></div>
      </div>
      <div class="coin_box">
        <div class="coin_icon" spm="index.coin">
          <div class="ball ball1 roll1"></div>
          <div class="ball ball2 roll2"></div>
          <div class="ball ball3 roll3"></div>
        </div>
        <div class="coin_content">
          <div class="coin_content_box clearfix">
            <div class="coin_left">
              <div><a href="coin/index.html" target="_blank">我的云币</a></div>
              <div><a href="coin/index.html" target="_blank" id="my_coin">--</a></div>
            </div>
            <div class="coin_right">
              <div class="coin_right_box"> <a href="coin/index.html" target="_blank">进 入</a>
                <div class="coin_right_tip"><a href="coin/index.html" target="_blank"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="connect_line_container"> <i class="left_connect_line"></i> <i class="right_connect_line"></i> </div>
    </div>
    <div class="module-list">
      <ul class="az-average-1 az-average-md-2">
        <li class="module-item news" data-animate-options="{'animate':'fadeIn','delay':0}">
          <div class="az-portlet white" spm="index.news" id="index_news">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title">
                  <li class="title"> <a href="news/list_type.html" target="_blank">新闻资讯</a> </li>
                  <li class="more"> <a href="news/list_type.html" target="_blank">更多</a> </li>
                </ul>
              </div>
              <div class="portlet-actions"> <a href="scene/media.html" class="" target="_blank">我要报道</a> </div>
            </div>
            <div class="portlet-body">
              <div class="report pull-left">
                <ul class="news-tab" id="news-tab">
                  <li class="active"> <a href="news/list_type.html?cat=%E5%B7%A5%E4%B8%9A%E4%BA%92%E8%81%94%E7%BD%91" data-target="#news_2" target="_blank">工业互联网</a> </li>
                  <li> <a href="news/list_type.html?cat=%E6%99%BA%E8%83%BD%E5%8C%96%E6%94%B9%E9%80%A0" data-target="#news_3" target="_blank">智能化改造</a> </li>
                  <li> <a href="news/list_type.html?cat=%E5%B7%A5%E4%B8%9A%E5%A4%A7%E6%95%B0%E6%8D%AE" data-target="#news_4" target="_blank">工业大数据</a> </li>
                  <li> <a href="javascript:;" data-target="#news_1" target="_blank">推荐</a> </li>
                </ul>
                <div class="news-content">
                  <div id="news_1" class="news-panel active">
                    <ul>
                      <li>
                        <div class="news-item news-detailed clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank">
                          <div class="pull-left detailed_img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407269/1_1.jpg" alt="" /> </div>
                          <div class="pull-left news-title">
                            <h5 title="重庆工业云平台获2017年中国">重庆工业云平台获2017年中国</h5>
                            <p>4月12日，由人民日报主办的2018中国“互联网+”数字经济峰会在重庆召开。峰会现场揭晓了2017年度中国“互联网+”十大优秀案例评选结果，重庆工业云平台“互联网+工业机器人”项目脱颖而出，被评为“互联网+制造业”十大优秀案例之一。</p>
                          </div>
                          </a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title=" 云端业务工作室相关资料下载及视频讲解"> 云端业务工作室相关资料下载及视频讲解</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="重庆工业云平台四川公司助力打造四川智造人才网">重庆工业云平台四川公司助力打造四川智造人才网</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title=" 高红卫董事长一行赴重庆工业云平台广东公司调研指导工作"> 高红卫董事长一行赴重庆工业云平台广东公司调研指导工作</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="全球首个面向智能制造服务平台的国际标准发布">全球首个面向智能制造服务平台的国际标准发布</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title=" 智能制造之心——Simright云仿真平台"> 智能制造之心——Simright云仿真平台</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="刘多谈工业互联网：安全问题值得注意">刘多谈工业互联网：安全问题值得注意</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="工业互联网：热潮之中更应补齐“短板”">工业互联网：热潮之中更应补齐“短板”</a> </div>
                      </li>
                    </ul>
                  </div>
                  <div id="news_2" class="news-panel ">
                    <ul>
                      <li>
                        <div class="news-item news-detailed clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank">
                          <div class="pull-left detailed_img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407273/105915_1.jpg" alt="" /> </div>
                          <div class="pull-left news-title">
                            <h5 title="智能制造装备市场规模突破1.5万亿">智能制造装备市场规模突破1.5万亿</h5>
                            <p>随着传统产业转型持续升级和战略性新兴产业发展的需求，近10年来，我国高端装备制造业已形成一定的产业规模。</p>
                          </div>
                          </a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="先进制造业发展路线图确定">先进制造业发展路线图确定</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="4000亿减税红包 ！国家重点支持制造业">4000亿减税红包 ！国家重点支持制造业</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="AI芯片千亿市场待爆发 狂欢背后落地少">AI芯片千亿市场待爆发 狂欢背后落地少</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="工业机器人巨头群雄逐鹿 谁能称霸中国市场">工业机器人巨头群雄逐鹿 谁能称霸中国市场</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="智能制造成制造业发展趋势">智能制造成制造业发展趋势</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="语音交互技术已立于智能家居风口之上">语音交互技术已立于智能家居风口之上</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="双创平台是智能制造的新机遇？">双创平台是智能制造的新机遇？</a> </div>
                      </li>
                    </ul>
                  </div>
                  <div id="news_3" class="news-panel ">
                    <ul>
                      <li>
                        <div class="news-item news-detailed clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank">
                          <div class="pull-left detailed_img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407258/101532_1.jpg" alt="" /> </div>
                          <div class="pull-left news-title">
                            <h5 title="新华三：守护数字化转型的尖兵">新华三：守护数字化转型的尖兵</h5>
                            <p>新华三很早就意识到，安全防护体系必将成为数字经济的重要保障。因此，囊括了云端分析、边界防御，并且可以进行态势感知、主动免疫的动态防御系统，在领航者峰会上就被正式提出。</p>
                          </div>
                          </a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="大数据要嫁给广告是一种怎样的体验？">大数据要嫁给广告是一种怎样的体验？</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="大数据，不完美的社会观察镜">大数据，不完美的社会观察镜</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details_video.html" class="pull-left" target="_blank" title="大数据“杀熟”：因为懂你，所以伤你">大数据“杀熟”：因为懂你，所以伤你</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="工业数据分析方法：从SPC到大数据的发展脉络">工业数据分析方法：从SPC到大数据的发展脉络</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="工业大数据在汽车行业的应用">工业大数据在汽车行业的应用</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="贵州重庆工业云平台： 打造工业大数据的“贵州模式”">贵州重庆工业云平台： 打造工业大数据的“贵州模式”</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="别让互联网大数据的思维耽误工业大数据">别让互联网大数据的思维耽误工业大数据</a> </div>
                      </li>
                    </ul>
                  </div>
                  <div id="news_4" class="news-panel">
                    <ul>
                      <li>
                        <div class="news-item news-detailed clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank">
                          <div class="pull-left detailed_img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407263/1_2.jpg" alt="" /> </div>
                          <div class="pull-left news-title">
                            <h5 title="重庆工业云平台四川公司助力打造四川智造人才网">重庆工业云平台四川公司助力打造四川智造人才网</h5>
                            <p>近日，四川重庆工业云平台科技有限公司（以下简称四川公司）与四川省经济和信息化委员会（以下简称省经信委）就四川智造人才网项目建设相关工作开展沟通交流。省经信委人事处及信息中心、省人社厅、四川公司、东方电气、亿嘉联创等相关领导及企业代表出席了会议。会上，省经信委人事处处长周海琪就四川智造人才网的定位进行了介绍，希望四川智造人才网在发展过程中能广泛听取各方意见，与相关部门共同努力，做好宣传与运营工作。四川公司副总经理景凯表示，一直以来，四川公司以国家级工业互联网主平台INDICS为基础，积极建设四川工业互联……</p>
                          </div>
                          </a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="大数据，你硬要嫁给广告吗？">大数据，你硬要嫁给广告吗？</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="全球首个面向智能制造服务平台的国际标准发布">全球首个面向智能制造服务平台的国际标准发布</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="大数据，不完美的社会观察镜">大数据，不完美的社会观察镜</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="重庆工业云平台获2017年中国"互联网+制造业"十大优秀案例!">重庆工业云平台获2017年中国"互联网+制造业"十大优秀案例!</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="这样的高精密加工，不服不行！">这样的高精密加工，不服不行！</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="一台进口机床高达千万，底气从何而来？">一台进口机床高达千万，底气从何而来？</a> </div>
                      </li>
                      <li>
                        <div class="news-item clearfix"> <a href="news/news_details.html" class="pull-left" target="_blank" title="先进制造业发展路线图确定">先进制造业发展路线图确定</a> </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="video pull-left">
                <ul class="news-tab">
                  <li> <a href="news/list_type.html?cat=云制造" target="_blank">云制造</a> </li>
                  <li> <a href="news/list_type.html?cat=%E4%BA%91%E5%88%B6%E9%80%A0%E8%A7%86%E8%A7%89" target="_blank"> <small>更多</small> </a> </li>
                </ul>
                <div class="video-content">
                  <ul class="az-average-2">
                    <li> <a href="news/news_details_video.html" target="_blank">
                      <div class="video-box">
                        <div class="video-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407254/2.png" alt=""> </div>
                        <div class="video-name"> <span title="超近距离！直击歼-15滑跃升空！">超近距离！直击歼-15滑跃升空！</span> </div>
                      </div>
                      </a> </li>
                    <li> <a href="news/news_details_video.html" target="_blank">
                      <div class="video-box">
                        <div class="video-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407255/1.png" alt=""> </div>
                        <div class="video-name"> <span title="扳手是如何制造的，用了十几年你不一定见过">扳手是如何制造的，用了十几年你不一定见过</span> </div>
                      </div>
                      </a> </li>
                    <li> <a href="news/news_details_video.html" target="_blank">
                      <div class="video-box">
                        <div class="video-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407256/1.png" alt=""> </div>
                        <div class="video-name"> <span title="德国轴承是如何制造的？生产过程也太先进了">德国轴承是如何制造的？生产过程也太先进了</span> </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="module-item demand-sharing" data-animate-options="{'animate':'fadeIn','delay':0}">
          <div class="az-portlet white" spm="index.demand" id="index_demand">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title new_year_demand">
                  <li class="title"> <a href="req/searchr.html" target="_blank">求购和需求</a> </li>
                  <li class="more"> <a href="req/searchr.html" target="_blank">更多</a> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-nav nav-top" id="scrollNav1">
              <ul class="clearfix">
                <li class="active"> <a href="req/searchr.html" target="_blank">产品</a> </li>
                <li> <a href="req/searchr.html?type=1" target="_blank">能力</a> </li>
                <li> <a href="req/searchr.html?type=1&amp;detailtype=1" target="_blank">创意</a> </li>
                <li> <a href="req/searchr.html?type=1&amp;detailtype=2" target="_blank">生产性服务</a> </li>
                <li> <a href="req/searchr.html?type=1&amp;detailtype=4" target="_blank">综合性服务</a> </li>
                <li> <a href="req/searchr.html?type=1&amp;detailtype=3" target="_blank">商业性服务</a> </li>
              </ul>
            </div>
            <div class="portlet-body">
              <div class="sharing-list">
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="industry/industryMall/hall/industryDemandContent.html?inqId=1000000014773070" target="_blank" title="TF卡">TF卡</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">14</span>&nbsp;天 </td>
                      <td><a href="industry/industryMall/hall/industryDemandContent.html?inqId=1000000014773070" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783003" target="_blank" title="工业级射频组件">工业级射频组件</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">14</span>&nbsp;天 </td>
                      <td><a href="industry/industryMall/hall/industryDemandContent.html?inqId=1000000014783003" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="industry/industryMall/hall/industryDemandContent.html?inqId=40000011115524" target="_blank" title="驾驶室采购">驾驶室采购</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">22</span>&nbsp;天 </td>
                      <td><a href="industry/industryMall/hall/industryDemandContent.html?inqId=40000011115524" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="industry/industryMall/hall/industryDemandContent.html?inqId=40000011115507" target="_blank" title="LED灯具采购">LED灯具采购</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">18</span>&nbsp;天 </td>
                      <td><a href="industry/industryMall/hall/industryDemandContent.html?inqId=40000011115507" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962966" target="_blank" title="克拉玛依运输发货">克拉玛依运输发货</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">2</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962966" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962866" target="_blank" title="结构件加工任务需求">结构件加工任务需求</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">7</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962866" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000071238671" target="_blank" title=" USB车载电源12V转5V适配器"> USB车载电源12V转5V适配器</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">7</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000071238671" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117101" target="_blank" title="无人机环境试验">无人机环境试验</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">45</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117101" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011072660" target="_blank" title="集成化虚拟现实平台系统">集成化虚拟现实平台系统</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">4</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011072660" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962646" target="_blank" title="基于空间目标的多频段高精度ISAR成像处理技术研究需求">基于空间目标的多频段高精度ISAR成像处理技术研究需求</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">34</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962646" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011062817" target="_blank" title="院创新项目-协同探测与抗干扰技术-舰船租赁-技术服务（已确定配套单位：船舶重工集团760所）">院创新项目-协同探测与抗干扰技术-舰船租赁-技术服务（已确定配套单位：船舶重工集团760所）</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">33</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011062817" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070961353" target="_blank" title="完成高速飞行列车典型线路运量及经济效益分析">完成高速飞行列车典型线路运量及经济效益分析</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">198</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070961353" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962866" target="_blank" title="结构件加工任务需求">结构件加工任务需求</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">7</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962866" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117063" target="_blank" title="机体支撑架制造">机体支撑架制造</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">4</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117063" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117020" target="_blank" title="机翼对接工装">机翼对接工装</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">4</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011117020" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011116958" target="_blank" title="试车固定桩工装制造">试车固定桩工装制造</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">4</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011116958" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000071238671" target="_blank" title=" USB车载电源12V转5V适配器"> USB车载电源12V转5V适配器</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">7</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000071238671" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962795" target="_blank" title="智能制造解决方案">智能制造解决方案</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">7</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962795" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083572" target="_blank" title="航天测控园区综合修缮">航天测控园区综合修缮</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">5</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083572" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011081931" target="_blank" title="雷达指令信号频域分析设备">雷达指令信号频域分析设备</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">6</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011081931" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962966" target="_blank" title="克拉玛依运输发货">克拉玛依运输发货</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">2</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=10000070962966" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083881" target="_blank" title="高精度扭矩传感器校准">高精度扭矩传感器校准</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">5</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083881" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083676" target="_blank" title="集团数据调度系统数据库适配器同步监控">集团数据调度系统数据库适配器同步监控</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">5</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011083676" target="_blank">立即报价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011076729" target="_blank" title="制造执行系统服务">制造执行系统服务</a> </span> </td>
                      <td> 剩&nbsp;<span class="days">15</span>&nbsp;天 </td>
                      <td><a href="cocenter/inquiry/inquiryDetail.html?inqId=40000011076729" target="_blank">立即报价</a> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title new_year_service">
                  <li class="title"> <a href="searchs.html?q=" target="_blank">配套和服务</a> </li>
                  <li class="more"> <a href="searchs.html?q=" target="_blank">更多</a> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-nav nav-bottom" id="scrollNav2">
              <ul class="clearfix">
                <li class="active"> <a href="searchs.html?q=" target="_blank">产品</a> </li>
                <li> <a href="searchs.html" target="_blank">能力</a> </li>
                <li> <a href="searchs.html?type=1" target="_blank">创意</a> </li>
                <li> <a href="searchs.html?type=2" target="_blank">生产性服务</a> </li>
                <li> <a href="searchs.html?type=4" target="_blank">综合性服务</a> </li>
                <li> <a href="searchs.html?type=3" target="_blank">商业性服务</a> </li>
              </ul>
            </div>
            <div class="portlet-body">
              <div class="sharing-list">
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="云鹤牌绿色加碘食盐">云鹤牌绿色加碘食盐</a> </span> </td>
                      <td><span class="days">2.0</span>元 </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即购买</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="斯曼克标签9mm*8mPTe-521蓝底黑字不干胶标签纸">斯曼克标签9mm*8mPTe-521蓝底黑字不干胶标签纸</a> </span> </td>
                      <td><span class="days">86.0</span>元 </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即购买</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="斯曼克标签6mm*8mPTe-411红底黑字不干胶标签纸">斯曼克标签6mm*8mPTe-411红底黑字不干胶标签纸</a> </span> </td>
                      <td><span class="days">75.0</span>元 </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即购买</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="汽车行驶记录仪">汽车行驶记录仪</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="SuccezCI 赛思捷报">SuccezCI 赛思捷报</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="SuccezBI">SuccezBI</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="FPGA设计">FPGA设计</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="频谱分析仪">频谱分析仪</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="001 工艺品设计 质量高">001 工艺品设计 质量高</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="强力旋压工艺设计">强力旋压工艺设计</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="PCD、CBN刀具加工用特殊夹具研发设计">PCD、CBN刀具加工用特殊夹具研发设计</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="航空航天用PCD、CBN刀具的研发设计">航空航天用PCD、CBN刀具的研发设计</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="溴化锂及锅炉能源改造供冷采暧产品解决方案">溴化锂及锅炉能源改造供冷采暧产品解决方案</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="7075铝锻件 高强度结构件 欢迎定制 西铝铝产业">7075铝锻件 高强度结构件 欢迎定制 西铝铝产业</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="媒改电专用采暖解决方案">媒改电专用采暖解决方案</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="非标机加工，各类齿轮、链轮、辊轴、不锈钢加工件，批量不限">非标机加工，各类齿轮、链轮、辊轴、不锈钢加工件，批量不限</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="SuccezCI 赛思捷报">SuccezCI 赛思捷报</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="工程服务+技术服务+仪器仪表销售">工程服务+技术服务+仪器仪表销售</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="个性化定制企业智能化升级改造">个性化定制企业智能化升级改造</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="数据驱动的智慧物流">数据驱动的智慧物流</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="SuccezBI">SuccezBI</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="检修探伤能力">检修探伤能力</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="信息系统维护">信息系统维护</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                    <tr>
                      <td><span> <a href="req/company/00001/caps_details.html" target="_blank" title="动力中心能源管理系统集成方案">动力中心能源管理系统集成方案</a> </span> </td>
                      <td><span class="days">面议</span> </td>
                      <td><a href="req/company/00001/caps_details.html" target="_blank">立即询价</a> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="new_year_dog"></div>
        </li>
        <li class="module-item intelligent" data-animate-options="{'animate':'fadeIn','delay':0}">
          <div class="az-portlet white" spm="index.intelligent" id="index_intelligent">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title">
                  <li class="title"> <a href="module/zhigai.html" target="_blank">工业库</a> </li>
                  <li class="more"> <a href="module/zhigai.html" target="_blank">更多</a> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-body">
              <table class="module-table">
                <tbody>
                  <tr>
                    <td rowspan="2" class="feature-cell"><a target="_blank" href="module/zhigai.html">
                      <div class="feature-box">
                        <div class="feature-info text-center" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <p class="feature-desc">模型库</p>
                          <p class="feature-desc"><span id="dev_count">9998</span><span class="unit">个</span></p>
                        </div>
                        <div style="top:154px;" class="feature-info text-center" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <p class="feature-desc">专利库</p>
                          <p class="feature-desc"><span id="dev_online_count">89001</span><span class="unit">个</span></p>
                        </div>
                      </div>
                      </a> </td>
                    <td class="project-cell" ><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-1">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class=""  data-animate-options="{'animate':'fadeIn','delay':0}">SmartIot工业网关</h3>
                        <p class=""  data-animate-options="{'animate':'fadeIn','delay':0}">轻松接入设备</p>
                      </div>
                      </a> </td>
                    <td class="project-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-2">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="long" data-animate-options="{'animate':'fadeIn','delay':0}">电气互联解决方案</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">智慧互联，精益生产</p>
                      </div>
                      </a> </td>
                  </tr>
                  <tr>
                    <td class="project-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-3">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">液压气动解决方案</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">一切由数字驱动</p>
                      </div>
                      </a> </td>
                    <td class="project-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-4">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">智能车间建设方案</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">开启智慧新时代</p>
                      </div>
                      </a> </td>
                  </tr>
                  <tr>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box">
                        <h3>机加行业智能化改造案例</h3>
                        <p>让制造更简单</p>
                      </div>
                      </a> </td>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box">
                        <h3>多种行业智能化车间案例</h3>
                        <p>多种创新，多种智能</p>
                      </div>
                      </a> </td>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box">
                        <h3>医疗行业数字化车间案例</h3>
                        <p>为医疗赋能智造</p>
                      </div>
                      </a> </td>
                  </tr>
                </tbody>
              </table>
              <div class="module-headline"> <a href="news/news_details.html" target="_blank">舒金龙董事长调研航天十院，推动智能制造等领域合作</a> </div>
            </div>
          </div>
        </li>
        <li class="module-item bigdata" data-animate-options="{'animate':'fadeIn','delay':0}">
          <div class="az-portlet white" spm="index.bigdata" id="index_bigdata">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title">
                  <li class="title"> <a target="_blank">工业产品</a> </li>
                  <li class="more"> <a href="news/list_type.html" target="_blank">更多</a> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-body">
              <table class="module-table">
                <tbody>
                  <tr>
                    <td rowspan="2" class="feature-cell"><a target="_blank" href="news/news_details.html">
                      <div class="feature-box">
                        <div class="feature-info text-center" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <p class="feature-desc">单品SKU</p>
                          <p class="feature-desc"><span id="bigdata_count">28510</span><span class="unit">个</span></p>
                        </div>
                        <div style="top:154px;" class="feature-info text-center" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <p class="feature-desc">已完成订单</p>
                          <p class="feature-desc"><span id="bigdata_col_count">23581</span><span class="unit">笔</span></p>
                        </div>
                      </div>
                      </a> </td>
                    <td class="bigdata-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-1">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">工业大数据平台</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">工业领域通用平台</p>
                      </div>
                      </a> </td>
                    <td class="bigdata-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-2">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">新能源资管应用</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">一体化运营资产</p>
                      </div>
                      </a> </td>
                  </tr>
                  <tr>
                    <td class="bigdata-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-3">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">石化行业应用</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">设备预测性维护</p>
                      </div>
                      </a> </td>
                    <td class="bigdata-cell"><a href="news/news_details.html" target="_blank">
                      <div class="icon-box icon-4">
                        <div class="icon-bg" data-animate-options="{'animate':'fadeInLeftTiny','delay':0}"></div>
                        <h3 class="" data-animate-options="{'animate':'fadeIn','delay':0}">生产过程管理应用</h3>
                        <p class="" data-animate-options="{'animate':'fadeIn','delay':0}">提升企业业务价值</p>
                      </div>
                      </a> </td>
                  </tr>
                  <tr>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box blue-navy">
                        <h3>家电龙头企业大数据案例</h3>
                        <p>高效数据分析挖掘</p>
                      </div>
                      </a> </td>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box blue-navy">
                        <h3>光伏电站运维监控案例</h3>
                        <p>全方位电站监控</p>
                      </div>
                      </a> </td>
                    <td><a href="news/news_details.html" target="_blank">
                      <div class="text-box blue-navy">
                        <h3>复杂装备远程运维与诊断案例</h3>
                        <p>设备远程维护</p>
                      </div>
                      </a> </td>
                  </tr>
                </tbody>
              </table>
              <div class="module-headline"> <a href="news/news_details_video.html" target="_blank">工业大数据头条：航天科工发布中国首个工业互联网云平台INDICS</a> </div>
            </div>
          </div>
        </li>
        <div class="competition" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.competition" id="index_competition">
          <ul class="az-average-2 az-average-md-5">
            <li> <a target="_blank">
              <div class="az-scalable-box">
                <div class="scalable-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/competition_img_1.png" alt="营销大赛"> </div>
              </div>
              </a> </li>
            <li> <a target="_blank">
              <div class="az-scalable-box">
                <div class="scalable-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/competition_img_2.png" alt="APP大赛"> </div>
              </div>
              </a> </li>
            <li> <a target="_blank">
              <div class="az-scalable-box">
                <div class="scalable-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/competition_img_3.jpg" alt="商业航天专区"> </div>
              </div>
              </a> </li>
            <li> <a target="_blank">
              <div class="az-scalable-box">
                <div class="scalable-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/competition_img_4.png" alt="中关村双创基地"> </div>
              </div>
              </a> </li>
            <li> <a target="_blank">
              <div class="az-scalable-box">
                <div class="scalable-img"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/154980519149039615/160320.jpg" alt="职业健康云"> </div>
              </div>
              </a> </li>
          </ul>
        </div>
<li class="module-item industrial-software" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="az-portlet white" spm="index.industrial" id="index_industrial">
                        <div class="portlet-header">
                            <div class="portlet-title">
                                <ul class="module-title">
                                    <li class="title">
                                        <a href="http://rjc.casicloud.com/index.htm" target="_blank" spm="index.industrial">云制造软件</a>
                                    </li>
                                    <li class="more">
                                        <a href="http://rjc.casicloud.com/index.htm" target="_blank" spm="index.industrial">更多</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="az-average-5">
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/brand_goods_11.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_1.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>西门子</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/brand_goods_6.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_2.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>MSC</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/brand_goods_12.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_3.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>Dassault</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/brand_goods_19.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_4.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>Altair</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="http://rjc.casicloud.com/brand_goods_69.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_5.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>Simright</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/goods_210.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_6.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>SAP B1</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/goods_197.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_7.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>云售后</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/goods_194.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_8.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>云维修</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/goods_186.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_9.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>云车间</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="software-item">
                                        <a href="https://rjc.casicloud.com/goods_209.htm" target="_blank" spm="index.industrial">
                                            <div class="software-icon">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/app_right_10.png" alt="">
                                            </div>
                                            <div class="software-name">
                                                <span>云质检</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
        <li class="module-item resource-sharing" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="az-portlet white" spm="index.resource" id="idnex_resource">
                        <div class="portlet-header">
                            <div class="portlet-title">
                                <ul class="module-title">
                                    <li class="title">
                                        <a href="http://industry.casicloud.com/" target="_blank" spm="index.resource">资源共享</a>
                                    </li>
                                    <li class="more">
                                        <a href="http://industry.casicloud.com/" target="_blank" spm="index.resource">更多</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="az-average-2">
                                <li>
                                    <a href="http://industry.casicloud.com/industryMall/barter/IndsutryGood/leaseMall.ht" target="_blank" spm="index.resource">
                                        <div class="resource-item clearfix">
                                            <div class="resource-icon pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/930/resource_img_3.png" alt="">
                                            </div>
                                            <div class="resource-name pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <span>易物中心</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://expert.casicloud.com/index.htm" target="_blank" spm="index.resource">
                                        <div class="resource-item clearfix">
                                            <div class="resource-icon pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/930/resource_img_2.png" alt="">
                                            </div>
                                            <div class="resource-name pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <span>专家池</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://industry.casicloud.com/industryMall/lease/leaseReception/leaseSearch.ht" target="_blank" spm="index.resource">
                                        <div class="resource-item clearfix">
                                            <div class="resource-icon pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/930/resource_img_1.png" alt="">
                                            </div>
                                            <div class="resource-name pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <span>租赁中心</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://3dprint.casicloud.com/index.htm" target="_blank" spm="index.resource">
                                        <div class="resource-item clearfix">
                                            <div class="resource-icon pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <img src="https://cdn.htres.cn/res/scenes/assets/pages/index/images/930/resource_img_4.png" alt="">
                                            </div>
                                            <div class="resource-name pull-left" data-animate-options="{'animate':'fadeIn','delay':0}">
                                                <span>3D打印资源</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
      </ul>
    </div>
    <div id="banner_swiper_ad" style="overflow: hidden;position: relative">
      <div class="advertising clearfix swiper_container" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.ad" id="index_ad">
        <ul class="az-average-2 az-average-sm-4 swiper_move">
          <li>
            <div class="az-scalable-box">
              <div class="scalable-img"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/153963881234690047/112301.jpg" alt="云网第一届营销大赛"> </a> </div>
            </div>
          </li>
          <li>
            <div class="az-scalable-box">
              <div class="scalable-img"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/139461943763922943/114730.jpg" alt="810质量助你行"> </a> </div>
            </div>
          </li>
          <li>
            <div class="az-scalable-box">
              <div class="scalable-img"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/advertising_img_3.png" alt="第三届商业高峰论坛"> </a> </div>
            </div>
          </li>
          <li>
            <div class="az-scalable-box">
              <div class="scalable-img"> <a target="_blank"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/advertising_img_4.png" alt="第二届航天科工杯大学生竞赛"> </a> </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="cloud-make" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.make" id="index_make">
      <div class="az-portlet white">
        <div class="portlet-header">
          <div class="portlet-title">
            <ul class="module-title">
              <li class="title"> <a href="cocenter/index.html" target="_blank">云制造</a> </li>
              <li class="more"> <a href="cocenter/index.html" target="_blank">更多</a> </li>
            </ul>
          </div>
        </div>
        <div class="portlet-body">
          <div class="make-group">
            <div class="az-horizontal-group">
              <div>
                <div class="make-left pull-left">
                  <div class="make-left-container"> <a href="cocenter/index.html" target="_blank">
                    <h5>能力协同</h5>
                    <p>智能制造云平台</p>
                    </a> </div>
                </div>
                <div class="make-right pull-left">
                  <ul class="clearfix">
                    <li> <a href="cocenter/inquiry/searchInquiry.html" target="_blank">
                      <h5>云协作</h5>
                      <p>供需精准对接</p>
                      </a> </li>
                    <li> <a href="cocenter/cosimcloud/cloudDesign.html" target="_blank">
                      <h5>云设计</h5>
                      <p>在线协同设计</p>
                      </a> </li>
                    <li> <a href="cocenter/cosimcloud/cloudProduction.html" target="_blank">
                      <h5>云生产</h5>
                      <p>让生产更智能</p>
                      </a> </li>
                    <li> <a href="rjc/index.html" target="_blank">
                      <h5>云资源</h5>
                      <p>快捷高效低成本</p>
                      </a> </li>
                  </ul>
                </div>
              </div>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td rowspan="2" class="make-product-wrapper-1"><div class="make-product" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <ul class="product-list">
                            <li class="active">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=1000000011150825"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957780562407423/175029.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="地面试验用供油软管加工">地面试验用供油软管加工</span> <span class="product-meta">还剩：
                                  <mark id="time1">2018/4/30</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=1000000011150825">立即报价</a> </li>
                                    <li class="more"> <a target="_blank" href="cocenter/cosimcloud/searchInquiry.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=40000009844179"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957823549829119/175019.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="H16216非金属补偿器加工">H16216非金属补偿器加工</span> <span class="product-meta">还剩：
                                  <mark id="time2">2018/5/17</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=40000009844179">立即报价</a> </li>
                                    <li class="more"> <a target="_blank" href="cocenter/cosimcloud/searchInquiry.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=1000000011150874"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/100957844244525055/175014.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="总温传感器研制">总温传感器研制</span> <span class="product-meta">还剩：
                                  <mark id="time3">2018/4/30</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/inquiry/inquiryDetail.html?inqId=1000000011150874">立即报价</a> </li>
                                    <li class="more"> <a target="_blank" href="cocenter/cosimcloud/searchInquiry.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="product-picture-btn prev"></div>
                          <div class="product-picture-btn next"></div>
                        </div></td>
                      <td rowspan="2" class="make-product-wrapper-2"><div class="make-product" data-animate-options="{'animate':'fadeIn','delay':0}">
                          <ul class="product-list">
                            <li class="active">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000041406954"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/159388831357595647/120615.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="五轴数控加工能力">五轴数控加工能力</span> <span class="product-meta">价格：
                                  <mark>10000元</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000041406954">立即购买</a> </li>
                                    <li class="more"> <a target="_blank" href="http://core.casicloud.com/cosimcloud/searchRelease.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000041690367"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/159388867332141055/120606.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="金属波纹补偿器设计与制造">金属波纹补偿器设计与制造</span> <span class="product-meta">价格：
                                  <mark>面议</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000041690367">立即购买</a> </li>
                                    <li class="more"> <a target="_blank" href="http://core.casicloud.com/cosimcloud/searchRelease.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="">
                              <div class="product-adv">
                                <div class="product-img"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000043524152"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/upload/159388899162714111/120558.jpg" alt=""> </a> </div>
                                <div class="product-info"> <span class="product-name" title="精密零件的焊接服务">精密零件的焊接服务</span> <span class="product-meta">价格：
                                  <mark>面议</mark>
                                  </span>
                                  <ul class="product-action">
                                    <li class="purchase"> <a target="_blank" href="cocenter/b2b/supply/b2bTenantRelease/capabilityContent.html?id=10000043524152">立即购买</a> </li>
                                    <li class="more"> <a target="_blank" href="http://core.casicloud.com/cosimcloud/searchRelease.ht">更多</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="product-picture-btn prev"></div>
                          <div class="product-picture-btn next"></div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="services">
      <ul class="az-average-1 az-average-md-2">
        <li>
          <div class="az-portlet white certification" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.certification" id="index_certification">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title">
                  <li class="title"> <a href="module/rzfw.html" target="_blank">认证服务</a> </li>
                  <li class="more"> <a href="module/rzfw.html" target="_blank">更多</a> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-body">
              <ul class="az-average-2">
                <li> <a href="http://core.casicloud.com/zone/zone/zone/qltyAuthIndex.ht" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeInDownTiny','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/rzfw_module_1.png" alt=""> </div>
                    <div class="service-name"> <span>质量认证</span> </div>
                  </div>
                  </a> </li>
                <li> <a href="http://www.i-xinnuo.com/cms/yw" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeInDownTiny','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/rzfw_module_2.png" alt=""> </div>
                    <div class="service-name"> <span>征信服务</span> </div>
                  </div>
                  </a> </li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <div class="az-portlet white addvalue" data-animate-options="{'animate':'fadeIn','delay':0}" spm="index.addvalue" id="index_addvalue">
            <div class="portlet-header">
              <div class="portlet-title">
                <ul class="module-title">
                  <li class="title"> <span>增值服务</span> </li>
                  <li class="more"> </li>
                </ul>
              </div>
            </div>
            <div class="portlet-body">
              <ul class="az-average-2 az-average-sm-4">
                <li> <a href="cocenter/casic/internetFinance.ht" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/zzfw_module_1.png" alt=""> </div>
                    <div class="section-line blue"></div>
                    <div class="service-name"> <span>工业互联网金融</span> </div>
                  </div>
                  </a> </li>
                <li> <a href="http://train.casicloud.com/College/" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/zzfw_module_2.png" alt=""> </div>
                    <div class="section-line blue"></div>
                    <div class="service-name"> <span>工业互联网学院</span> </div>
                  </div>
                  </a> </li>
                <li> <a href="module/ywzs.html" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/zzfw_module_3.png" alt=""> </div>
                    <div class="section-line blue"></div>
                    <div class="service-name"> <span>工业企业运行指数</span> </div>
                  </div>
                  </a> </li>
                <li> <a href="workbench/yxfw/index.html" target="_blank">
                  <div class="service-item" data-animate-options="{'animate':'fadeIn','delay':0}">
                    <div class="service-icon"> <img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/res/pages/index/images/930/zzfw_module_4.png" alt=""> </div>
                    <div class="section-line blue"></div>
                    <div class="service-name"> <span>营销中心</span> </div>
                  </div>
                  </a> </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div id="ipad_tips" style="display:none;"></div>
<div class="m">
<table width="100%" cellspacing="0" cellpadding="0">
<tr align="center">
<td><?php echo ad(20);?></td>
<td><?php echo ad(21);?></td>
<td><?php echo ad(22);?></td>
<td><?php echo ad(23);?></td>
<td><?php echo ad(24);?></td>
<td><?php echo ad(25);?></td>
</tr>
</table>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/index.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/marquee.js"></script>
<script type="text/javascript">
new dmarquee(22, 10, 3000, 'site_stats');
new dmarquee(22, 30, 3000, 'company');
if(get_cookie('auth')) {
$('.iuser_l')[0].title = '商务中心';
$('.iuser_l')[0].href = '<?php echo $MODULE['2']['linkurl'];?>';
$('.iuser_l')[0].className = 'iuser_u';
$('.iuser_r')[0].title = '完善我的会员资料';
$('.iuser_r')[0].href = '<?php echo $MODULE['2']['linkurl'];?>edit.php';
$('.iuser_r')[0].className = 'iuser_e';
}
</script>
<?php include template('footer-index');?>