<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>专家池-专家详情</title>
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPondReset.css" />
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPondCommon.css" />
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPond.css" />
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
</head>
<body>
<!-- public Header Begin --> 
<!-- public Header Begin -->
<div class="header">
  <div class="headTop">
    <div class="cWidth">
      <div class="welcomeBox"> <span class="loginBefor"> <span>13637881118您好，欢迎来到航天云网！ </span><a href="http://cas.casicloud.com/logout?service=http://expert.casicloud.com/shopping_logout.htm" class="lightblue">[退出]</a> </span> </div>
    </div>
  </div>
  <div class="headLink">
    <div class="logoBox"> <img src="http://expert.casicloud.com/resources/style/shop/professor/images/expertPond_logo.jpg" usemap="#planetmap" />
      <map name="planetmap" id="planetmap">
        <area href="http://www.casicloud.com" shape="rect" coords="0,0,170,48" alt="云网">
        <area href="http://expert.casicloud.com/index.htm" shape="rect" coords="180,14,300,42" alt="专家池">
      </map>
    </div>
    <div class="searchBox">
      <input type="text" value="" id="searchAll"/>
      <a href="javascript:void(0);" class="searchBtn" onclick="searchAll()"></a> </div>
    <ul class="navBox clearfix">
      <li> <a href="http://expert.casicloud.com/index.htm" class="now">首页</a> </li>
      <li> <a href="http://expert.casicloud.com/professorHelp.htm">专家助力</a>
        <ul class="child">
          <li> <a href="http://expert.casicloud.com/professor/professorService.htm">专家搜索</a> </li>
          <li> <a href="http://expert.casicloud.com/professor/serviceForOne.htm">一对一服务</a> </li>
          <li> <a href="http://expert.casicloud.com/professor/serviceSalon.htm">企业定制沙龙</a> </li>
          <li> <a href="http://expert.casicloud.com/professor/ownTeam.htm">专属顾问团</a> </li>
          <li> <a href="http://expert.casicloud.com/professor/enterpriseService.htm">企业服务动态</a> </li>
        </ul>
      </li>
      <li> <a href="http://talent.casicloud.com/index.ht" >人才共享</a> </li>
      <li> <a href="javascript:void(0);">个人服务中心</a>
        <ul class="child">
          <li> <a href="http://expert.casicloud.com/professor/myReserve.htm">我的预约</a> </li>
          <li> <a href="http://expert.casicloud.com/professor/myCollect.htm">我的收藏</a> </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- public Header End --> 
<!-- public Header End --> 
<!-- 专家详情 Begin -->
<div class="expert_expertDetail">
  <div class="banner">
    <div class="cWidth">
      <div class="imgShow"> <img src="<?php echo $albums['0'];?>" onError="this.src='http://expert.casicloud.com/resources/style/shop/professor/images/default_head.jpg'" alt="img" /> <span class="bgPos"></span> </div>
      <?php $UNIT = array('正高', '副高', '中级', '初级', '院士', '其他');?>
      <div class="txtShow">
        <p class="name"><?php echo $title;?></p>
        <p>所在地区：北京市 北京市</p>
        <p>类别领域：</p>
        <div class="mark">
          <h6>职业标签：</h6>
          <span><?php echo $brand;?> </span> <span>北京航空材料研究院博士 </span> </div>
        <p>从业工龄：<?php echo $amount;?>年</p>
        <p>专家职称：<?php echo $UNIT[$level-1];?></p>
        <div class="btn"> <a onclick= "BuyNow()" >约见TA</a> <a  href="javascript:SendFav();"  class="collect" >点击收藏</a> </div>
      </div>
    </div>
  </div>
  
  <!-- 当前位置 Begin -->
  <div class="expertPond_nowPos"> <span>您的位置：</span> <a href="http://expert.casicloud.com/index.htm;">首页</a>&nbsp;- <a href="http://expert.casicloud.com/professorHelp.htm">专家助力</a>&nbsp;- <a href="javascript:void(0);">专家详情</a> </div>
  <!-- 当前位置 End -->
  <div class="detailContent"><?php echo $content;?></div>
</div>
<!-- 专家详情 End --> 
<!-- 服务动态 End --> 
<?php include template('footer2');?>
</body>
</html>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<input type="text" value="<?php echo $a1;?>" size="4" class="cc_inp" id="amount" onkeyup="Malter('', <?php echo $a1;?>, <?php echo $amount;?>);"/>
<div id="destoon_space" style="display:none">
  <div class="mall_c" style="display:;" id="c_detail"></div>
  <div class="mall_c" style="display:none;" id="c_comment"></div>
  <div class="mall_c" style="display:none;" id="c_order"></div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<script type="text/javascript">
var mallurl = '<?php echo $MOD['linkurl'];?>';
var mallid = <?php echo $itemid;?>;
var n_c = <?php echo $comments;?>;
var n_o = <?php echo $orders;?>;
var c_c = Dd('c_comment').innerHTML;
var c_o = Dd('c_order').innerHTML;
var s_s = {'1':0,'2':0,'3':0};
var m_l = {
no_comment:'暂无评论',
no_order:'暂无交易',
no_goods:'商品不存在或已下架',
no_self:'不能添加自己的商品',
lastone:''
};
</script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/mall.js"></script>
<script type="text/javascript">
<?php if($P1) { ?>addE(1);<?php } ?>
<?php if($P2) { ?>addE(2);<?php } ?>
<?php if($P3) { ?>addE(3);<?php } ?>
if(window.location.href.indexOf('#') != -1) {
var t = window.location.href.split('#');
try {Mshow(t[1]);} catch(e) {}
}
</script>