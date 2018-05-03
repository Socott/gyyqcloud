<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>专家池-已选择预约专家详情</title>
<!-- 页面样式 -->
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPondReset.css" />
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPondCommon.css" />
<link rel="stylesheet" type="text/css" href="http://expert.casicloud.com/resources/style/shop/professor/css/expertPond.css" />
<!-- 校验 -->
<link href="http://expert.casicloud.com/resources/style/system/manage/blue/template1.css"  rel="stylesheet" type="text/css"/>
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
<?php if($action == 'show') { ?>
<div class="m">
  <div class="left_box">
    <div style="padding:80px; text-align:center" class="t_c px14 f_b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ok.gif" alt="" align="absmiddle"/> 预约专家成功！ 
      &nbsp;&nbsp;&nbsp;<a href="<?php echo $MOD['linkurl'];?>" class="b">继续预约</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $forward;?>" class="b">支付</a></div>
    <meta http-equiv="refresh" content="5;URL=<?php echo $forward;?>"/>
  </div>
</div>
<?php } else { ?>
<?php if($lists) { ?> 
<!-- 预约专家Begin -->
<div class="expert-reserve">
<h4 class="reserve-head">预约专家</h4>
<div class="reserve-main">
<form method="post" action="<?php echo $MOD['linkurl'];?>buy.php"  onsubmit="return check();" >
  <input type="hidden" name="submit" value="1"/>
  <div class="reserve-list reserve-select-con">
    <div class="type1"> <span class="title"><i class="red-star"></i>您选择的专家是:</span> <?php if(is_array($lists)) { foreach($lists as $i => $t) { ?>
      <input class ="name" id ="professorName" name ="professorName" value ="<?php echo $t['title'];?>" readonly/>
      <a  id="search" class="see" href="<?php echo $t['linkurl'];?>">查看详情</a> <?php } } ?> </div>
  </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您希望专家为您提供的服务:</span>
    <select name="add[service_type]" id="add[service_type]" level="2" >
      <option value="" selected="selected">请选择</option>
      <option value="一对一服务">一对一服务</option>
      <option value="企业定制沙龙">企业定制沙龙</option>
      <option value="专属顾问团">专属顾问团</option>
    </select>
  </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的当前情况:</span>
    <textarea id="current_descript" name = "add[current_descript]"></textarea> <span id="dcurrent_descript" class="f_red"></span> 
  </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的需求:</span>
    <textarea id="demand" name = "add[demand]" ></textarea> <span id="ddemand" class="f_red"></span> 
  </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的手机:</span>
    <input type="text" size="20" name="add[telephone]" id="telephone" value="<?php echo $user['telephone'];?>"/>
    <span id="dtelephone" class="f_red"></span> </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的邮编:</span>
    <input type="text" size="10" name="add[postcode]" id="postcode" value="<?php echo $user['postcode'];?>"/>
    <span id="dpostcode" class="f_red"></span> </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的姓名:</span>
    <input type="text" size="10" name="add[truename]" id="truename" value="<?php echo $user['truename'];?>"/>
    <span id="dtruename" class="f_red"></span> </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>您的电话:</span>
    <input type="text" size="20" name="add[mobile]" id="mobile" value="<?php echo $user['mobile'];?>"/>
    <span id="dmobile" class="f_red"></span> </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>所在地:</span> <?php echo ajax_area_select('add[areaid]', '请选择', $user['areaid']);?> <span id="dareaid" class="f_red"></span> </div>
  <div class="reserve-list"> <span class="title"><i class="red-star"></i>具体地址:</span>
    <input type="text" size="60" name="add[address]" id="address" value="<?php echo $user['address'];?>"/>
    <span id="daddress" class="f_red"></span> </div>
  </div>
  <div class="reserve-btn"> 
    <input type="submit" class="submit" value="提 交" style="background-color: #e6a743;display:inline-block;width: 164px;height: 34px;margin: 0 40px;border-radius: 4px;text-align: center;vertical-align: top;color: #fff;font-size: 16px;" />
  </div>
  </div>
  <!-- 预约专家End -->
  </div>
  <!-- public footer End --> 
  
  <script type="text/javascript">var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
  <div style="display:none">
  <table cellpadding="6" cellspacing="1" width="100%" bgcolor="#E4E4E4">
    <?php if(is_array($lists)) { foreach($lists as $i => $t) { ?>
    <tr align="center" bgcolor="<?php if($i%2==1) { ?>#F6F6F6<?php } else { ?>#FFFFFF<?php } ?>
">
      <td><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="50" alt="<?php echo $t['alt'];?>"  onerror="this.src=errimg;"/></a></td>
      <td align="left" style="line-height:24px;color:#666666;"><a href="<?php echo $t['linkurl'];?>" target="_blank" class="b" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a><br/>
        <?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/> <?php } ?>
<a href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['company'];?></a>
        <div style="padding:3px 0 3px 0;">备注：
          <input type="text" name="post[<?php echo $t['key'];?>][note]" value="" size="20" style="border:#CCCCCC 1px solid;" maxlength="100" title="限100字以内"/>
          &nbsp;
          <?php if($DT['im_web']) { ?><?php echo im_web($t['username'].'&mid='.$moduleid.'&itemid='.$t['itemid']);?>&nbsp;<?php } ?>
          <?php if($t['qq'] && $DT['im_qq']) { ?><?php echo im_qq($t['qq']);?>&nbsp;<?php } ?>
          <?php if($t['ali'] && $DT['im_ali']) { ?><?php echo im_ali($t['ali']);?>&nbsp;<?php } ?>
          <?php if($t['msn'] && $DT['im_msn']) { ?><?php echo im_msn($t['msn']);?>&nbsp;<?php } ?>
          <?php if($t['skype'] && $DT['im_skype']) { ?><?php echo im_skype($t['skype']);?></a>&nbsp;<?php } ?>
</div>
        品牌:<?php if($t['brand']) { ?><?php echo $t['brand'];?><?php } else { ?>未填写<?php } ?>
&nbsp;<?php if($t['m1']) { ?><?php echo $t['n1'];?>:<?php echo $t['m1'];?>&nbsp;<?php } ?>
<?php if($t['m2']) { ?><?php echo $t['n2'];?>:<?php echo $t['m2'];?>&nbsp;<?php } ?>
<?php if($t['m3']) { ?><?php echo $t['n3'];?>:<?php echo $t['m3'];?>&nbsp;<?php } ?>
 </td>
      <td><?php echo $t['amount'];?></td>
      <td title="<?php if($t['a2']) { ?><?php echo $t['a1'];?>-<?php echo $t['a2'];?><?php echo $t['unit'];?> <?php echo $DT['money_sign'];?><?php echo $t['p1'];?>&#10;<?php if($t['a3']) { ?><?php echo $t['a2']+1;?>-<?php echo $t['a3'];?><?php echo $t['unit'];?> <?php echo $DT['money_sign'];?><?php echo $t['p2'];?>&#10;<?php echo $t['a3'];?><?php echo $t['unit'];?>以上 <?php echo $DT['money_sign'];?><?php echo $t['p3'];?><?php } else { ?><?php echo $t['a2']+1;?><?php echo $t['unit'];?>以上 <?php echo $DT['money_sign'];?><?php echo $t['p2'];?><?php } ?>
<?php } else { ?><?php echo $DT['money_sign'];?><?php echo $t['p1'];?><?php } ?>
"><span class="f_price" id="price_<?php echo $t['key'];?>"><?php echo $t['price'];?></span></td>
      <td><img src="<?php echo DT_SKIN;?>image/arrow_l.gif" width="16" height="8" alt="减少" class="c_p" onclick="alter('<?php echo $t['key'];?>', '-');"/>
        <input type="text" name="post[<?php echo $t['key'];?>][number]" value="<?php echo $t['a'];?>" size="3" class="cc_inp" id="number_<?php echo $t['key'];?>" onblur="calculate();"/>
        <img src="<?php echo DT_SKIN;?>image/arrow_r.gif" width="16" height="8" alt="增加" class="c_p" onclick="alter('<?php echo $t['key'];?>', '+');"/></td>
      <td  style="display:none"><select name="post[<?php echo $t['key'];?>][express]" id="express_<?php echo $t['key'];?>" onchange="calculate();">
          
<?php if($t['express_name_1'] == '包邮') { ?>
<?php if($t['fee_start_1']>0) { ?>
<?php if($t['fee_start_2']>0) { ?>
          <option value="2" data-2><?php echo $t['express_name_2'];?></option>
          <?php } ?>
<?php if($t['fee_start_3']>0) { ?>
          <option value="3" data-3><?php echo $t['express_name_3'];?></option>
          <?php } ?>

          <option value="-1" data--1>包邮</option>
          
<?php if($t['fee_start_2']>0 || $t['fee_start_3']>0) { ?>
<?php } else { ?>

          <option value="0" data-0>联系卖家</option>
          
<?php } ?>
<?php } else { ?>

          <option value="0" data-0>包邮</option>
          
<?php } ?>
<?php } else if($t['fee_start_1']>0 || $t['fee_start_2']>0 || $t['fee_start_3']>0) { ?>
<?php if($t['fee_start_1']>0) { ?>
          <option value="1"><?php echo $t['express_name_1'];?></option>
          <?php } ?>
<?php if($t['fee_start_2']>0) { ?>
          <option value="2"><?php echo $t['express_name_2'];?></option>
          <?php } ?>
<?php if($t['fee_start_3']>0) { ?>
          <option value="3"><?php echo $t['express_name_3'];?></option>
          <?php } ?>
<?php } else { ?>

          <option value="0">联系卖家</option>
          
<?php } ?>

        </select>
        <?php if($t['express_name_1'] == '包邮' && $t['fee_start_1']>0) { ?>
        <div style="margin-top:15px;" class="f_gray">满<?php echo $t['fee_start_1'];?>包邮</div>
        <?php } ?>
        <?php if($t['cod']) { ?>
        <div style="margin-top:15px;">
          <input type="checkbox" name="post[<?php echo $t['key'];?>][cod]" value="1" checked<?php if($t['cod'] == 1) { ?> disabled<?php } ?>
/>
          货到付款</div>
        <?php } ?>
        <input type="hidden" id="a1_<?php echo $t['key'];?>" value="<?php echo $t['a1'];?>"/>
        <input type="hidden" id="a2_<?php echo $t['key'];?>" value="<?php echo $t['a2'];?>"/>
        <input type="hidden" id="a3_<?php echo $t['key'];?>" value="<?php echo $t['a3'];?>"/>
        <input type="hidden" id="p1_<?php echo $t['key'];?>" value="<?php echo $t['p1'];?>"/>
        <input type="hidden" id="p2_<?php echo $t['key'];?>" value="<?php echo $t['p2'];?>"/>
        <input type="hidden" id="p3_<?php echo $t['key'];?>" value="<?php echo $t['p3'];?>"/>
        <input type="hidden" id="amount_<?php echo $t['key'];?>" value="<?php echo $t['amount'];?>"/>
        <input type="hidden" id="fee_start_<?php echo $t['key'];?>_1" value="<?php echo $t['fee_start_1'];?>"/>
        <input type="hidden" id="fee_step_<?php echo $t['key'];?>_1" value="<?php echo $t['fee_step_1'];?>"/>
        <input type="hidden" id="fee_start_<?php echo $t['key'];?>_2" value="<?php echo $t['fee_start_2'];?>"/>
        <input type="hidden" id="fee_step_<?php echo $t['key'];?>_2" value="<?php echo $t['fee_step_2'];?>"/>
        <input type="hidden" id="fee_start_<?php echo $t['key'];?>_3" value="<?php echo $t['fee_start_3'];?>"/>
        <input type="hidden" id="fee_step_<?php echo $t['key'];?>_3" value="<?php echo $t['fee_step_3'];?>"/></td>
      <td><span class="f_price" id="fee_<?php echo $t['key'];?>">0.00</span></td>
      <td><span class="f_price" id="total_<?php echo $t['key'];?>">0.00</span></td>
    </tr>
    <?php } } ?>
  </table>
  <span class="f_r">共选中 <span class="f_red f_b px16" id="total_good"><?php echo $i+1;?></span> 种专家&nbsp;&nbsp;&nbsp;&nbsp; 总价：<span class="f_red f_b px16" id="total_amount"></span> <?php echo $DT['money_unit'];?></span> &nbsp;&nbsp;提示：实际的运费可能因为收货地址的不同而有差异，具体以提交之后系统计算或与卖家协商为准
  </div>
</form>
</div>
</div>
<?php } else { ?>
<div style="padding:80px; text-align:center;" class="t_c px14 f_b">您还没有挑选专家，赶快行动吧！马上去 <a href="<?php echo $MOD['linkurl'];?>" class="b">挑选专家</a></div>
<?php } ?>
<?php echo load('guest.js');?> 
<script type="text/javascript">
function check() {
if(Dd('total_amount').innerHTML == '0.00') {
alert('订单总额为0.00，请检查专家数量');
window.scroll(0, 0);
return false;
}
var l;
var f;
f = 'areaid_1';
if(Dd(f).value == 0) {
Dmsg('请选择所在地区', 'areaid', 1);
return false;
}
f = 'address';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('请填写街道地址', f);
return false;
}
f = 'postcode';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('请填写邮政编码', f);
return false;
}
f = 'truename';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写真实姓名', f);
return false;
}
f = 'mobile';
l = Dd(f).value.length;
if(l < 11) {
Dmsg('请填写手机号码', f);
return false;
}
f = 'demand';
l = Dd(f).value.length;
if(l < 1) {
Dmsg('请填写您的需求', f);
return false;
}
f = 'current_descript';
l = Dd(f).value.length;
if(l < 1) {
Dmsg('请填写当前状况', f);
return false;
}
return true;
}
function Adr(s) {
var t = s.split('|');
try {
Dd('address').value = t[1];
Dd('postcode').value = t[2];
Dd('truename').value = t[3];
Dd('mobile').value = t[4];
Dd('telephone').value = t[5];
load_area(t[0], 1);
}
catch (e) {}
}
<?php if($address) { ?>Adr(Dd('addr_0').value);<?php } ?>
function alter(i, t) {
if(t == '+') {
var maxa = parseFloat(Dd('amount_'+i).value);
if(maxa && Dd('number_'+i).value >= maxa) return;
Dd('number_'+i).value =  parseInt(Dd('number_'+i).value) + 1;
} else {
var mina = parseFloat(Dd('a1_'+i).value);
if(Dd('number_'+i).value <= mina) return;
Dd('number_'+i).value = parseInt(Dd('number_'+i).value) - 1;
}
calculate();
}
function get_price(i) {
if(Dd('a2_'+i).value > 0) {
if(Dd('a3_'+i).value > 1 && parseInt(Dd('number_'+i).value) > parseInt(Dd('a3_'+i).value)) return Dd('p3_'+i).value;
if(Dd('a2_'+i).value > 1 && parseInt(Dd('number_'+i).value) > parseInt(Dd('a2_'+i).value)) return Dd('p2_'+i).value;
}
return Dd('p1_'+i).value
}
function calculate() {
var itemids = [<?php if(is_array($lists)) { foreach($lists as $i => $t) { ?><?php if($i) { ?>,<?php } ?>
'<?php echo $t['key'];?>'<?php } } ?>];
var _good = itemid = 0;
for(var i = 0; i < itemids.length; i++) {
itemid = itemids[i];
var num, good, maxa, mina, price;
num = parseInt(Dd('number_'+itemid).value);
maxa = parseInt(Dd('amount_'+itemid).value);
mina = parseInt(Dd('a1_'+itemid).value);
if(num < mina) Dd('number_'+itemid).value = num = mina;
if(num > maxa) Dd('number_'+itemid).value = num = maxa;
if(isNaN(num) || num < 0) Dd('number_'+itemid).value = num = mina;
price = parseFloat(get_price(itemid));
good = price*num;
var es = $('#express_'+itemid).html();
if(es.indexOf('data--1') != -1) {
if(good >= parseFloat(Dd('fee_start_'+itemid+'_1').value)) {
$('#express_'+itemid).val('-1');
} else {
if(es.indexOf('data-0') != -1) {
$('#express_'+itemid).val('0');
} else if(es.indexOf('data-2') != -1) {
$('#express_'+itemid).val('2');
} else if(es.indexOf('data-3') != -1) {
$('#express_'+itemid).val('3');
}
}
} 
if(Dd('express_'+itemid).value > 0) {
var fee = parseFloat(Dd('fee_start_'+itemid+'_'+Dd('express_'+itemid).value).value) + parseFloat(Dd('fee_step_'+itemid+'_'+Dd('express_'+itemid).value).value)*(num-1);
Dd('fee_'+itemid).innerHTML = fee.toFixed(2);
Dd('total_'+itemid).innerHTML = (good+fee).toFixed(2);
_good += fee;
} else {
Dd('fee_'+itemid).innerHTML = '0.00';
Dd('total_'+itemid).innerHTML = good.toFixed(2);
}
Dd('price_'+itemid).innerHTML = price.toFixed(2);
_good += good;
}
Dd('total_amount').innerHTML = _good.toFixed(2);
}
<?php if($lists) { ?>calculate();<?php } ?>
</script> 
<?php } ?>
   <?php include template('footer2');?>
