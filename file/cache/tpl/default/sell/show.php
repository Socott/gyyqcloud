<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('cloudproduce/header');?>
<link href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/yzz/css/proDetails.css" rel="stylesheet" type="text/css">
<!--外协能力 能力详情  begin-->
<div class="proDetails_box">
<div class="proDetails_intro"> 您的位置： <span><a href="../../../cosimcloud/index.html"> 首页</a>/</span> <a href="../../../cosimcloud/searchRelease.html">能力大厅</a>/ <span id="caigouClass">制造>功能材料制备及成型</span>/防热隔热涂料制造及喷涂 </div>
<div class="indusMall_proDetails">
<!--product display list left begin-->
<div id="preview">
<div class="jqzoom" id="spec-n1"> <img height="350" src="<?php echo $albums['0'];?>" jqimg="https://oby0yx23h.qnssl.com//upload/600203/600203_160129171429.jpeg" width="500"> </div>
<div id="spec-n5">
<div class="control" id="spec-left"> <img src="http://ui.client.zomzone.com/gyyqcloud//industrialParkCloud/cocenter/pages/cloud1.0/yzz/image/left.gif"> </div>
<div id="spec-list">
<ul class="list-h" style="width: 478px; overflow: hidden;">
<?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?>
<li><img src="<?php echo $v;?>"/></li>
<?php } } ?>
</ul>
</div>
<div class="control" id="spec-right"> <img src="http://ui.client.zomzone.com/gyyqcloud//industrialParkCloud/cocenter/pages/cloud1.0/yzz/image/right.gif"> </div>
</div>
</div>
<!--product display list left end-->
<div class="proDetails_center">
<h2 class="proDetails_tits" title="<?php echo $title;?>"><?php echo $title;?></h2>
<ul class="proDetails_lists">
<li> 价格： <span><i><?php if($price>0) { ?><?php echo $price;?><?php echo $DT['money_unit'];?>/<?php echo $unit;?><?php } else { ?>面议<?php } ?>
</i></span> </li>
<li> 计量单位：<span class="num"><?php echo $unit;?></span> </li>
</ul>
<p class="classify"> 能力分类：
<?php echo $res_p;?><br>
<br/>
</p>
<div class="proDetails_service"> <a href="javascript:void(0)" class="link">在线联系</a> <a href="javascript:void(0)"  onclick="priceQuery();"  class="inquiry">我要询价</a> </div>
<div class="proDetails_contact proDetails_contacts">
<p class="link">联系方式：<span> <?php echo $telephone_n;?> </span></p>
<p class="login"><a href="javascript:doLogin();">登录后查看完整信息</a></p>
</div>
</div>
<div class="proDetails_right">
<div class="proDetails_link">
<div class="proDetails_linkCon">
<h2 style="line-height: 162%;">企业信息</h2>
<h3 title="<?php echo $company;?>"><?php echo $company;?></h3>
<p class="authen" style="display: flex;">
<!--    <a href="#" id='a4' style="visibility:hidden"  class="a4"></a> -->
<span> <a href="#" id='a1' style="display: none;"  class="a1"><img src="http://ui.client.zomzone.com/gyyqcloud//industrialParkCloud/cocenter/pages/cloud1.0/yzz/images/proDetails_link03.png" alt="" /></a> </span> <span> <a href="#" id='a2' style="display: none;" class="a2"><img src="http://ui.client.zomzone.com/gyyqcloud//industrialParkCloud/cocenter/pages/cloud1.0/yzz/images/proDetails_link04.png" alt="" /></a> </span>
<input id="levelOrgId" type="hidden" value="600203"/>
<a class="level3 zlrz" style="float: left;" href="http://core.casicloud.com/zone/zone/zone/qltyAuthIndex.ht" target="_blank"></a>
<!-- <a href="#" id='a3' style="visibility:hidden"  class="a3">航天认证</a>  -->
<a class="u-a " href="http://core.casicloud.com/agreement/b2bAgreementAuthen/index.ht" target="_blank"></a> </p>
<p>所在地区：<span><?php echo $address;?></span></p>
<p>注册时间：<span></span></p>
<p>主营行业：<span><?php echo $company_info['business'];?></span></p>
<!--<p class="watch"> <a href="http://core.casicloud.com/industryMall/hall/companyHomePage.ht?companyId=600203">查看企业主页</a> </p>-->
<p class="watch"> <a href="<?php echo $company_info['homepage'];?>">查看企业主页</a> </p>
</div>
</div>
</div>
</div>
<div class="proDetails_goods">
<div class="details_select"> <span class="now1">能力详情<i class="details_bor"></i></span> <span>能力评价<i></i></span> <span>咨询留言<i></i></span> </div>
<div class="details_selectCon">
<div class="details_goods_select">
<script type="text/plain" id="editor" style="width:100%;display:block;">
<p>拥有多个涂料系列产品，以及专业喷涂车间，喷涂工艺成熟。</p>
</script>
</div>
<div class="details_goods_select" style="display:none;"> </div>
<div class="details_goods_select" style="display:none;">
<div class="Btnn plbiaoqian">咨询留言</div>
<dl class="www">
<dt>
<div class="masscon_b"> <a class="masscon_b1" href="javascript:doLogin()">我要留言</a> <a href="javascript:doLogin()">登录留言</a> </div>
</dt>
</dl>
</div>
</div>
</div>
<a style="widht:100%; height:140px;cursor:pointer;" id="releaseDetailAdInfo" class="adInfo"  data-adPositionId="10000089910004" data-adPlateId="2" data-typr="1"> <img alt="" src="http://ui.client.zomzone.com/gyyqcloud//industrialParkCloud/cocenter/pages/cloud1.0/yzz/images/footer.jpg"> </a> </div>
<script>
function priceQuery () {
layer.open({
type: 2,
content: "/sell/inquiry.php?itemid=<?php echo $itemid;?>",
area: ['1000px', '800px']
});
}
</script>
<?php include template('cloudproduce/footer');?>
