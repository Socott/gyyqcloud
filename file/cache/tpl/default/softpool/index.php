<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header-softpool');?>
<!--轮播图begin-->
<div class="softPond_indexBanner">
<div class="flexslider">
<ul class="slides">
<li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com//upload/advert/6c454944-bae2-4dd0-b40a-ba733f9513413756.jpg) 50% 0 no-repeat;"><a
href="http://core.casicloud.com/cosimcloud/getNews.ht?id=1000000011931840&&type=1"></a></li>
<li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com//upload/advert/492fb378-ae0c-4c4f-81b6-fb3d40b310172602.jpg) 50% 0 no-repeat;"><a
href=""></a></li>
<li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com//upload/advert/41f7f00d-5fa4-426e-9d71-88adbd66a6025229.png) 50% 0 no-repeat;"><a
href=""></a></li>


<!-- <li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com//resources/style/system/front/default/images/softPond_indexBanner1.jpg) 50% 0 no-repeat;"><a
href="javascript:void(0);"></a></li>
<li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com//resources/style/system/front/default/images/softPond_indexBanner1.jpg) 50% 0 no-repeat;"><a
href="javascript:void(0);"></a></li>
<li
style="background: url(http://oi2cgvwkk.bkt.clouddn.com// resources/style/system/front/default/images/softPond_indexBanner1.jpg) 50% 0 no-repeat;"><a
href="javascript:void(0);"></a></li>-->
</ul>
</div>
<div class="bannerLeft">
        
        <?php $mid = $moduleid;?>
<?php $child = get_maincat(0, $mid, 1);?>
              <?php if(is_array($child)) { foreach($child as $i => $c) { ?> 
  <div class="list">
<h4 class="title">
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a>
<div class="children">
                    <?php $sub = get_maincat($c['catid'], $mid, 1);?>
                        <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
  <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo $s['catname'];?></a>
                         <?php } } ?>
</div>
</h4>
<ul>
                <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
 <li><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo $s['catname'];?></a></li>
                     <?php } } ?>
</ul>
</div>
               <?php } } ?>
            
            

 </div>
<div class="bannerRight">
<div class="tit">
<h4 class="title">产品数量</h4>
<span>
<!-- <i>8</i><i>3</i><i>5</i> -->
<i>1</i><i>3</i><i>5</i>
<!-- 835 -->
</span>
</div>
<!-- <div class="loginBox">
<div class="out">
<div class="img">
<img src="http://oi2cgvwkk.bkt.clouddn.com//resources/style/soft/images/softPond_indexLoginBg.jpg" alt="logo">
</div>
<div class="btn">
<a href="https://rjc.casicloud.com/user/login.htm" class="sign">登录</a> <a
href="https://rjc.casicloud.com/register.htm" class="register">注册</a>
</div>
</div>
</div> -->

<div class="loginBox">
<div class="out" style="display:block;">
        <div class="img"><img src="http://oi2cgvwkk.bkt.clouddn.com//resources/style/soft/images/softPond_indexLoginBg.jpg" alt="logo"></div>
        <div class="btn">
            <a href="javascript:doLogin();" class="sign">登录</a>
            <a href="javascript:register()" class="register">注册</a>
        </div>
    </div>
</div>

<div class="notice">
<h4 class="title">平台公告</h4>
<ul>
<li><a href="https://rjc.casicloud.com/article_6.htm"><!-- 2017-12-06 -->
计划一次完美的企业采购！</a></li> <li><a href="https://rjc.casicloud.com/article_5.htm"><!-- 2017-11-30 -->
找不到合适的材料数据？D...</a></li> <li><a href="https://rjc.casicloud.com/article_4.htm"><!-- 2017-11-23 -->
为什么超200万家企业都...</a></li> </ul>
</div>
</div>
</div>
<!--轮播图end-->
<form action="https://rjc.casicloud.com/index.htm" method="post" id="ListForm">
<input name="orderBy" type="hidden" id="orderBy" /> 
<input name="orderType" type="hidden" id="orderType" />
</form>
<div class="softPond_indexItem">
<!-- 软件列表 Begin -->
<div class="softList">
<div class="software">
<div id="floors_soft">
<div load_url="floor_soft_ajax.htm" id="131082" count="1" class="floor_soft"><div class="enterprise"><div class="itemHead"><h3 class="title">企业管理软件专区</h3><a href="javascript:goPage('https://rjc.casicloud.com/store_goods_list_1.htm','addTime','desc')" class="more">更多&gt;</a></div><ul class="clearfix"><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=c0847f461a0d488fa1b47a4c3112e35b"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/28/c22f64e5-1dab-4c64-bc1b-05a798897f895252.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/28/c22f64e5-1dab-4c64-bc1b-05a798897f895252.png_small.png" style="display: inline;" alt="soft"><p>云售后</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=4b045687c5bd437f9e6f783c8f8336ec"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/11/27/ce230d0d-561e-4f21-842c-a33debd0cd2d1330.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/11/27/ce230d0d-561e-4f21-842c-a33debd0cd2d1330.png_small.png" style="display: inline;" alt="soft"><p>云车间</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=1dc49aacc42e433c8def9101b3962f85"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/29/6421588c-8608-4aff-bbfc-0147f5b49c6e5544.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/29/6421588c-8608-4aff-bbfc-0147f5b49c6e5544.png_small.png" style="display: inline;" alt="soft"><p>DYX项目管理系统</p></a></li><li><a href="https://rjc.casicloud.com/goods_171.htm"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/229/2017/11/16/cf01ed9f-e150-4f12-9c30-6f0261fbfec30216.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/229/2017/11/16/cf01ed9f-e150-4f12-9c30-6f0261fbfec30216.png_small.png" style="display: inline;" alt="soft"><p>好会计</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=830d9698b51a48e2b4f84b5b23d635d3"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/03/acbef911-22d0-48f9-8ff3-589af4f258174241.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/03/acbef911-22d0-48f9-8ff3-589af4f258174241.png_small.png" style="display: inline;" alt="soft"><p>云端品控实验室信息管理系统</p></a></li></ul></div></div>
<div load_url="floor_soft_ajax.htm" id="131083" count="2" class="floor_soft"><div class="enterprise"><div class="itemHead"><h3 class="title">工程类软件专区</h3><a href="javascript:goPage('https://rjc.casicloud.com/store_goods_list_14.htm','addTime','asc')" class="more">更多&gt;</a></div><ul class="clearfix"><li><a href="https://rjc.casicloud.com/goods_201.htm"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/28/8cfc5fcf-6c91-41e4-8a34-fb69dc4f00d31347.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/28/8cfc5fcf-6c91-41e4-8a34-fb69dc4f00d31347.png_small.png" style="display: inline;" alt="soft"><p>连恩智能云MES</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=46c2e760-b758-465a-b251-458cea15317f"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/08/1f1420ff-084f-4f45-b622-b52d882c5eef2103.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/08/1f1420ff-084f-4f45-b622-b52d882c5eef2103.png_small.png" style="display: inline;" alt="soft"><p>Simright Simula...</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=22c464dd-27fa-41fe-89fc-09330a3c861c"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/19/2c6c8649-ff96-4171-8c7e-652054fb06f83500.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/12/19/2c6c8649-ff96-4171-8c7e-652054fb06f83500.png_small.png" style="display: inline;" alt="soft"><p>精益卫士人工智能设备维修辅助系...</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=6dbb539d6f3f421d8f1fb19b1ac83fbe"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/3d7183f7-b4be-43e2-9c66-5e48dae5a7914316.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/3d7183f7-b4be-43e2-9c66-5e48dae5a7914316.png_small.png" style="display: inline;" alt="soft"><p>数控设备分析</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=62ea63f2-a4af-4a00-86ee-3441a52cc015"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/8ac05bc4-d55c-4f87-b3fe-6dd370b147374610.jpg_small.jpg" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/8ac05bc4-d55c-4f87-b3fe-6dd370b147374610.jpg_small.jpg" style="display: inline;" alt="soft"><p>研发埠计算公式</p></a></li></ul></div></div>
<div load_url="floor_soft_ajax.htm" id="131084" count="3" class="floor_soft"><div class="enterprise"><div class="itemHead"><h3 class="title">工具类软件专区</h3><a href="javascript:goPage('https://rjc.casicloud.com/store_goods_list_3.htm','addTime','desc')" class="more">更多&gt;</a></div><ul class="clearfix"><li><a href="https://rjc.casicloud.com/goods_177.htm"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/40055afa-61af-4fa1-9c2a-5e910f6b5bea5010.jpg_small.jpg" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/40055afa-61af-4fa1-9c2a-5e910f6b5bea5010.jpg_small.jpg" style="display: inline;" alt="soft"><p>WPS Office</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=46242e427abe49e49af769a3f68372e6"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/05/15/a7fa35a0-f1a9-41f6-b79c-80ddfd45d17d5658.jpg_small.jpg" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2017/05/15/a7fa35a0-f1a9-41f6-b79c-80ddfd45d17d5658.jpg_small.jpg" style="display: inline;" alt="soft"><p>企业视频社交平台</p></a></li><li><a href="https://rjc.casicloud.com/goods_8.htm"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/bddca654-bc15-4262-846c-e603f0bc9d6f4719.jpg_small.jpg" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/bddca654-bc15-4262-846c-e603f0bc9d6f4719.jpg_small.jpg" style="display: inline;" alt="soft"><p>Maya</p></a></li><li><a href="https://rjc.casicloud.com/goods_10.htm"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/aea0171f-86cf-4610-a295-df55b57f40b04806.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2018/01/18/aea0171f-86cf-4610-a295-df55b57f40b04806.png_small.png" style="display: inline;" alt="soft"><p>3ds Max</p></a></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=2162a6ea3f004aa8b09bc88844541e1a"><img src="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2016/12/20/21f909b7-fcf7-4a31-858b-73beccf4dff61608.png_small.png" onerror="this.src='https://rjc.casicloud.com/resources/style/common/images/good.jpg';" original="http://oi2cgvwkk.bkt.clouddn.com//upload/store/1/2016/12/20/21f909b7-fcf7-4a31-858b-73beccf4dff61608.png_small.png" style="display: inline;" alt="soft"><p>重庆工业云视频会议</p></a></li></ul></div></div>
</div>
<style>
.soft_resourR_list .listL {
    width: 632px;
    float: left;
    padding-top: 4px;
    margin-left: 36px;
}
.soft_resourR_list .listL p {
    font-size: 15px;
    color: #343434;
    height: 150px;
    line-height: 32px;
    margin-bottom: 6px;
}

.soft_resourR_list .listL a:hover {
    background: #0084e9;
    border-color: #0084e9;
    color: #fff;
}
.soft_resourR_list .listL a {
    display: inline-block;
    width: 160px;
    height: 40px;
    border: 1px solid #b3b3b3;
    font-size: 18px;
    color: #676767;
    text-align: center;
    line-height: 40px;
}
</style>
</div>
<div class="newApp">
<div id="floors_right">
<div load_url="floor_rightsoft_ajax.htm" id="131085" count="1" class="floor_right_soft"><div class="list"><div class="itemHead"><h3 class="title">热门应用</h3><a href="javascript:goPage('https://rjc.casicloud.com/store_goods_list_1.htm','','')" class="more">更多&gt;</a></div><ul><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=22c464dd-27fa-41fe-89fc-09330a3c861c"><i style="color:#ff9000;">1.</i>精益卫士人工智能设备维修辅助系统</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_70.htm">长沙啄鸟网络科技有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=4b045687c5bd437f9e6f783c8f8336ec"><i>2.</i>云车间</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_67.htm">云车间</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=6dbb539d6f3f421d8f1fb19b1ac83fbe"><i>3.</i>数控设备分析</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_79.htm">北京德奕歆科技有限公司 </a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=46c2e760-b758-465a-b251-458cea15317f"><i>4.</i>Simright Simulator</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_69.htm">上海数巧信息科技有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=509e252b-001b-425f-809a-2456c74293af"><i>5.</i>Simright Toptimizer</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_69.htm">上海数巧信息科技有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=830d9698b51a48e2b4f84b5b23d635d3"><i>6.</i>云端品控实验室信息管理系统</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_80.htm">上海赛印信息技术股份有限公司</a></p></li></ul></div></div>
<div load_url="floor_rightsoft_ajax.htm" id="131086" count="2" class="floor_right_soft"><div class="list"><div class="itemHead"><h3 class="title">最新应用</h3><a href="javascript:goPage('https://rjc.casicloud.com/store_goods_list_1.htm','','')" class="more">更多&gt;</a></div><ul><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=c0847f461a0d488fa1b47a4c3112e35b"><i style="color:#ff9000;">1.</i>云售后</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_72.htm">北京指掌科技有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=62ea63f2-a4af-4a00-86ee-3441a52cc015"><i>2.</i>研发埠计算公式</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_73.htm">上海慧埠网络科技有限公司</a></p></li><li><a href="https://rjc.casicloud.com/goods_201.htm"><i>3.</i>连恩智能云MES</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_74.htm">连恩智能科技(上海)有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=fc2a1cc9fecd4e28a5bd44e41a2851a4"><i>4.</i>数控设备数据管理</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_79.htm">北京德奕歆科技有限公司 </a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=3130119c507847eeb64fe6a47a14d0c8"><i>5.</i>合并报表</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_71.htm">天阳宏业科技股份有限公司</a></p></li><li><a href="http://apps.casicloud.com/b2b/details/appDetails.ht?appId=15383ebc7d264062b69eff81c7a0ed7e"><i>6.</i>全面预算</a><p class="enterName">服务商：<a href="https://rjc.casicloud.com/brand_goods_71.htm">天阳宏业科技股份有限公司</a></p></li></ul></div></div>
</div>
</div>
</div>
<!-- 软件列表 End -->
<!-- 合作伙伴专区 Begin -->
<div class="partnerList">
<div class="itemHead">
<h3 class="title">合作伙伴专区</h3>
<a href="https://rjc.casicloud.com/brand.htm" class="more">更多&gt;</a>
</div>
<div class="listBox">
<a href="javascript:void(0);" class="preBtn btn"></a>
<div class="moveBox">
<ul class="clearfix" id="partList" style="width: 1140px;">
<li><a href="https://rjc.casicloud.com/brand_goods_11.htm"> <img src="http://oi2cgvwkk.bkt.clouddn.com//upload/brand/81f09f38-75d7-497c-8017-6dc95e57d5210435.png" alt="soft">
<p>西门子工业软件（上海）有限公司</p></a></li> <li><a href="https://rjc.casicloud.com/brand_goods_6.htm"> <img src="http://oi2cgvwkk.bkt.clouddn.com//upload/brand/ca6c232e-809f-4023-b847-d87420147bb40521.png" alt="soft">
<p>MSC Software</p></a></li> <li><a href="https://rjc.casicloud.com/brand_goods_5.htm"> <img src="http://oi2cgvwkk.bkt.clouddn.com//upload/brand/fa70c83c-3e1c-4b19-b6a4-c9df4b0a07d10537.png" alt="soft">
<p>AUTODESK</p></a></li> <li><a href="https://rjc.casicloud.com/brand_goods_12.htm"> <img src="http://oi2cgvwkk.bkt.clouddn.com//upload/brand/03d4443f-1d09-4813-bb0e-11c8f8ab4f9e0620.png" alt="soft">
<p>DASSAULT SYSTEMES</p></a></li> <li><a href="https://rjc.casicloud.com/brand_goods_7.htm"> <img src="http://oi2cgvwkk.bkt.clouddn.com//upload/brand/383430f8-8a7d-42c5-80fb-5e697cb5ef1f0636.png" alt="soft">
<p>武汉开目信息技术有限责任公司</p></a></li> </ul>
</div>
<a href="javascript:void(0);" class="nextBtn btn"></a>
</div>
</div>
<!-- 合作伙伴专区 End -->
</div>
<!--撑开底部80px间隙begin-->
<div class="hr_80"></div>
<!--撑开底部80px间隙end-->
﻿<!-- softPond_footer Begin -->
<?php include template('footer-softpool');?>
<!-- softPond_footer End -->
        </div>
</body>
</html>
