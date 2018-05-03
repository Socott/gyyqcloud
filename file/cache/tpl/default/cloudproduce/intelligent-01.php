<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('cloudproduce/header');?>
<link rel="stylesheet" type="text/css"
href="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter//pages/cloud1.0/yzz/css/cloud_make.css" />
<div class="cloud_design_menu">
<ul>
<div id="menu_active_line"></div>
<li class="menu_lib"><a href="javascript:void(0);" class="active">资产管理</a></li>
<li class="menu_lic"><a href="javascript:void(0);">售后服务</a></li>
<li class="menu_lid"><a href="javascript:void(0);">远程监控</a></li>
<li class="menu_lia"><a href="javascript:void(0);">智能诊断</a></li>
</ul>
</div>
<div class="cloud_make_list">
<!--注意：三个选项卡对应三个ul列表，顺序一一对应好，切换才会对应相应信息。默认第一个ul显示，其他ul隐藏  此页面有4个选项卡-->
<ul style="display: block;">
<li><a href="http://is.casicloud.com/" target="_blank"><img
src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/znfwzx-zcgl.png" /></a>
<div class="cloud_make_title">
<a href="http://is.casicloud.com/"target="_blank">工业机器人智能服务系统</a>
</div>
<p>工业机器人智能服务系统以工业机器人资产管理为核心，面向机器人制造商和用户企业的四类角色用户：决策人员、设备管理员、运维人员及测试人员。为企业提供设备资产性能管理和运营优化服务，实现企业应用服务和业务模式的转型升级。</p></li>
</ul>
<ul>
<li><a target="_blank"><img
src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/znfwzx-shfw.png" /></a>
<div class="cloud_make_title">
<a href="http://yshl.casicloud.com/" target="_blank">云售后链</a>
</div>
<p>产品分为WEB端和APP端两种媒介，将最大化地满足家具制造企业售后服务人员对报修问题的上报、审核、确认解决方案以及退/补件的收/发货过程中所产生的相关需求为经销商和分公司、总公司的售后服务人员提供方便、快捷地售后问题解决方案和用户体验感。</p>
</li>
</ul>
<ul>
<li><a target="_blank"><img
src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/znfwzx-ycjk.png" /></a>
<div class="cloud_make_title">
<a href="https://windfarm.run.aws-jp01-pr.ice.predix.io/" target="_blank">风力发电机远程监控</a>
</div>
<p>实现风机实时数据采集，存储，分析，应用接口等功能，为风机设备预警、远程故障诊断、发电量评测，减少弃风现象，开展智慧风厂研究积攒重要的数据资料。</p>
</li>

</ul>
<ul>
<li><a target="_blank"><img
src="http://ui.client.zomzone.com/gyyqcloud/industrialParkCloud/cocenter/pages/cloud1.0/image/znfwzx-znzd.png" /></a>
<div class="cloud_make_title">
<a target="_blank">智能诊断</a>
</div>
<p>通过对设备运行数据进行实时采集，并进行数据处理和大数据分析，对设备故障进行预防性诊断和维护。</p>
</li>
</ul>
</div>
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
<?php include template('cloudproduce/footer');?>
</body>
</html>