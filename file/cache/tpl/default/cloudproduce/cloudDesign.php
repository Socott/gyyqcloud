<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('cloudproduce/header');?>
<link rel="stylesheet" type="text/css" href="http://core.casicloud.com/pages/cloud6.0/yzz/cloudDesign/index/css/cloud_make.css">
<script>
$(function() {
    var type = '<?php echo $type;?>';
    $(".cloud_design_menu ul li a").each(function(index){
    if(type==index){
 $(this).addClass("active");
 var line_w=47+226*index;
   //alert(line_w);
   $("#menu_active_line").stop(true,false).animate({left:line_w});
   $(".cloud_make_list ul").hide();
   $(".cloud_make_list ul").eq(index).fadeIn(500);
}
    })
//选项卡效果begin
$(".cloud_design_menu ul li a").each(function(index) {
$(this).click(function() {
var line_w = 47 + 226 * index;
//alert(line_w);
$("#menu_active_line").stop(true, false).animate({
left : line_w
});
$(".cloud_design_menu ul li a").removeClass("active");
$(this).addClass("active");
$(".cloud_make_list ul").hide();
$(".cloud_make_list ul").eq(index).fadeIn(500);
})
})
//选项卡效果end
});
</script>
 
<link href="http://core.casicloud.com/pages/zone/qltyAuth/css/common.17.9.5.css" rel="stylesheet" type="text/css">
<!-- 云生产主体 begin-->
<div class="cloud_make_banner" style="background: #fdf0e0;">
<img src="http://core.casicloud.com/pages/cloud6.0/yzz/cloudDesign/index/images/cloud_make003.jpg">
</div>
<div class="cloud_design_menu">
<ul>
<div id="menu_active_line" style="left: 273px;"></div>
<li class="menu_lia"><a href="javascript:void(0);" class="active">PDM</a></li>
<li class="menu_lib"><a href="javascript:void(0);" class="active">CAD</a></li>
<li class="menu_lic"><a href="javascript:void(0);">CAE</a></li>
<li class="menu_lid"><a href="javascript:void(0);">CAPP</a></li>
</ul>
</div>
<div class="cloud_make_list">
<!--注意：三个选项卡对应三个ul列表，顺序一一对应好，切换才会对应相应信息。默认第一个ul显示，其他ul隐藏  此页面有4个选项卡-->
<ul style="display: none;">
<li><a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/PDMContent.jsp?saas=" target="_blank"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/cloudDesign/index/images/design11.png"></a>
<div class="cloud_make_title">
<a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/PDMContent.jsp?saas=" target="_blank">TH-PDM面向产品全生命周期管理的产品数据管理系统</a>
</div>
<p>TH-PDM系统就是在上述的理念基础上开发出来的新一代的国产PDM系统，TH-PDM不仅在传统的
“VPSCII”标准上有丰富的功能和解决方案，更为重要的是，它有更为全面的业务建模能力，支持应用得到持续拓展和优化；有丰富的远程协同解决方案，支持管理业务范围的持续扩大；有强大的全文检索引擎，支持对智力资产的不断挖掘和复用。</p></li>
</ul>
<ul style="display: block;">
<li><a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/CADContent.jsp?saas=" target="_blank"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/cloudDesign/index/images/design21.jpg"></a>
<div class="cloud_make_title">
<a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/CADContent.jsp?saas=" target="_blank">天河 TH-MCAD2011 个人版</a>
</div>
<p>随着国家对知识产权保护的加强，“免费”使用正版软件成为每个使用者的梦想。广大设计工程师是天河软件发展的见证者，为了感谢您多年的陪伴与信任，天河公司推出这款个人版TH-MCAD，免费下载，免费注册使用，愿TH-MCAD成为您工程绘图的好伴侣。</p>
</li>
</ul>
<ul style="display: none;">
<li><a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/FluentContent.jsp?saas=" target="_blank"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/cloudDesign/index/images/design31.png"></a>
<div class="cloud_make_title">
<a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/FluentContent.jsp?saas=" target="_blank">Fluent (14.0)</a>
</div>
<p>Fluent是目前国际上比较流行的商用CFD软件包，在美国的市场占有率为60%，凡是和流体、热传递和化学反应等有关的工业均可使用。它具有丰富的物理模型、先进的数值方法和强大的前后处理功能，在航空航天、汽车设计、石油天然气和涡轮机设计等方面都有着广泛的应用。</p>
</li>
<li><a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/ANSYSContent.jsp?saas=" target="_blank"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/cloudDesign/index/images/design32.png"></a>
<div class="cloud_make_title">
<a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/ANSYSContent.jsp?saas=" target="_blank">ANSYS (14.0)</a>
</div>
<p>ANSYS软件是融结构、流体、电场、磁场、声场分析于一体的大型通用有限元分析软件。由世界上最大的有限元分析软件公司之一的美国ANSYS开发，它能与多数CAD软件接口，实现数据的共享和交换，如Creo,
NASTRAN, Alogor, I－DEAS, AutoCAD等， 是现代产品设计中高级CAE工具之一。</p></li>
</ul>
<ul style="display: none;">
<li><a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/CAPPContent.jsp?saas=" target="_blank"><img src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud6.0/yzz/cloudDesign/index/images/design21.jpg"></a>
<div class="cloud_make_title">
<a href="/pages/cloud6.0/yzz/cloudDesign/content/jsp/CAPPContent.jsp?saas=" target="_blank">TH-CAPP集成化智能工艺设计管理平台系统</a>
</div>
<p>TH-CAPP集成化智能工艺设计管理平台系统完全基于网络、数据库，实用、智能、开放、安全、满足各专业设计要求及系统集成的要求。具有以下特点：所见所得，高效实用；实时支持企业卡片标准的更新；满足任何企业、任何专业的工艺设计要求；自动汇总及报表；满足集成要求；方便的二次开发手段；提供安全保障。</p>
</li>
</ul>
</div>
<!-- 云生产主体 end-->
<?php include template('cloudproduce/footer');?>

