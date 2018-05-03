<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo DT_CHARSET;?>"/>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
</META>
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
</META>
<META HTTP-EQUIV="expires" CONTENT="0">
</META>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</meta>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>航天云网 - 用户注册</title>
<meta name="keywords"
      content="工业互联网,智能制造,航天科工,先进制造业,工业4.0,工业大数据,智能工厂,智能生产,数字化工厂,中国制造2025,双创,工业服务,制造业服化,物联网,产业互联网,三哑改造,资源共享,能力协同,云制造,协同制造,MES,工业软件,智能化改造,云制造认证,云制造金融,CRP,CPDM"/>
<meta name="description"
      content="航天科工积极响应国家“中国制造2025”、“互联网+”、“大众创业、万众创新”等战略部署，创建了世界首批、中国首个工业互联网平台——航天云网，致力于打造“创新与创业相结合、线上与线下相结合、制造与服务相结合”新业态，为企业提供全网营销、供应链管理、智能制造解决方案、工业大数据和双创等全要素服务。"/>
<link href="http://uc.casicloud.com/resources/images/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="http://uc.casicloud.com/resources/css/cloudReset.css" />
<link rel="stylesheet" type="text/css" href="http://uc.casicloud.com/resources/css/common.css" />
<link rel="stylesheet" type="text/css" href="http://uc.casicloud.com/resources/css/register.css" />
<link rel="stylesheet" type="text/css" href="http://uc.casicloud.com/resources/css/new_cloudFooterheader.css" />
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror= function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<style type="text/css">
body {
color: #666;
font-family: Microsoft YaHei;
font-size: 14px;
}
td{ line-height:60px;}
.f_red,input[type='radio']{ margin-left:20px; color:red;}
input[type='text'],input[type='password'],select{ line-height:40px; border:1px solid #CCC; margin-left:30px; padding-left:20px;}
select{ height:40px; float:left; padding-left:0}
</style>
</head>
<body>
<!--  pc端-->
<div class="clound_header_box" id="header"> 
  <!-- 头部 -->
  <div class="clound_header">
    <div class="logo_news fl"> <a href="http://www.casicloud.com" id="href">
      <h1 id="newLogo" class="logo htyw"> </h1>
      </a> </div>
    <div class="phone_title"></div>
  </div>
</div>
<div class="register1" id="register_container">
  <div class="register1_outer">
  
    <div class="container">
    <div class="title">欢迎注册账号</div>
    <div class="content">
    <div class="register_list  clearfix">
    <div style="padding:20px 50px 20px 50px;">
    <div style="background:#FAFAFA;padding:10px 20px 10px 20px;line-height:24px;"> <span class="f_b"> &raquo; 已经是会员？请<a href="<?php echo $DT['file_login'];?>?forward=<?php echo urlencode($forward);?>" class="b">点这里登录</a>&nbsp;
      &raquo; 忘记了密码？请<a href="send.php?forward=<?php echo urlencode($forward);?>" class="b">点这里找回</a>&nbsp;
      <?php if($MOD['checkuser'] == 2) { ?>
      &raquo; <span class="f_red">未收到验证信？</span>请<a href="send.php?action=check&forward=<?php echo urlencode($forward);?>" class="b">点这里重发</a> <?php } ?>
 </span> <br/>
      <span class="f_gray">请认真、仔细地填写以下信息，严肃的商业信息有助于您获得别人的信任，结交潜在的商业伙伴，获取商业机会！<span class="f_red">*</span>为必填项 </span> </div>
    <br/>
    <iframe src="" name="send" id="send" style="display:none;"></iframe>
    <form action="<?php echo $DT['file_register'];?>" method="post" target="send" onsubmit="return check();">
      <input name="action" type="hidden" id="action" value="<?php echo crypt_action('register');?>"/>
      <input name="forward" type="hidden" value="<?php echo $forward;?>"/>
      <div class="reg_title">帐户信息</div>
      <table cellpadding="5" cellspacing="5">
        <tr>
          <td class="tl">帐户类型 <span class="f_red">*</span></td>
          <td align="left"><input type="radio" name="post[regid]" value="6" id="g_6" onclick="reg(1);" checked/>
            <label for="g_6"> <?php echo $GROUP['6']['groupname'];?></label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php if(is_array($GROUP)) { foreach($GROUP as $k => $v) { ?>
            <?php if($k>6 && $v['vip']==0 && $v['reg']==1) { ?>
            <input type="radio" name="post[regid]" value="<?php echo $k;?>" id="g_<?php echo $k;?>" onclick="reg(1);"/>
            <label for="g_<?php echo $k;?>"> <?php echo $GROUP[$k]['groupname'];?></label>
            &nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
<?php } } ?> <span<?php if(!$GROUP['5']['reg']) { ?> class="dsn"<?php } ?>
>
            <input type="radio" name="post[regid]" value="5" id="g_5" onclick="reg(0);"/>
            <label for="g_5"> <?php echo $GROUP['5']['groupname'];?></label>
            </span></td>
        </tr>
      </table>
      <table cellpadding="5" cellspacing="5">
        <tr onmouseover="Ds('tusername');" onmouseout="Dh('tusername');">
          <td class="tl">会员名 <span class="f_red">*</span></td>
          <td width="220" align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[username]" id="username" onblur="validator('username');" autocomplete="off" <?php if($username) { ?> value="<?php echo $username;?>" readonly<?php } ?>
/></td>
          <td><div class="tips" id="tusername" style="display:none;">
              <div><?php echo $MOD['minusername'];?>-<?php echo $MOD['maxusername'];?>个字符，只能使用小写字母(a-z)、数字(0-9)、下划线(_)、中划线(-)，且以字母或数字开头和结尾</div>
            </div>
          <span id="dusername" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php if($MOD['passport'] && $passport) { ?>
        <tr onmouseover="Ds('tpassport');" onmouseout="Dh('tpassport');">
          <td class="tl">昵称 &nbsp;</td>
          <td align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[passport]" id="passport" onblur="validator('passport');" autocomplete="off"<?php if($passport) { ?> value="<?php echo $passport;?>" readonly<?php } ?>
/></td>
          <td><div class="tips" id="tpassport" style="display:none;">
              <div>支持中文名，可用于论坛等系统用户名<br/>
                如果不填写，则和会员名一致</div>
            </div>
          <span id="dpassport" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php } ?>
        <tr onmouseover="Ds('tpassword');" onmouseout="Dh('tpassword');">
          <td class="tl">登录密码 <span class="f_red">*</span></td>
          <td align="left"><input type="password" class="reg_inp" style="width:200px;" name="post[password]" id="password" onblur="validator('password');" autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/></td>
          <td><div class="tips" id="tpassword" style="display:none;">
              <div><?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>个字符，区分大小写，推荐使用数字、字母和特殊符号组合</div>
            </div>
          <span id="dpassword" class="f_red"></span>&nbsp; </td>
        </tr>
        <tr onmouseover="Ds('tcpassword');" onmouseout="Dh('tcpassword');">
          <td class="tl">重复输入 <span class="f_red">*</span></td>
          <td align="left"><input type="password" class="reg_inp" style="width:200px;" size="30" name="post[cpassword]" id="cpassword" onblur="validate('cpassword');" autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/></td>
          <td><div class="tips" id="tcpassword" style="display:none;">
              <div>请再输入一遍上面填写的密码</div>
            </div>
          <span id="dcpassword" class="f_red"></span>&nbsp; </td>
        </tr>
      </table>
      <div class="reg_title">联系方式</div>
      <table cellpadding="5" cellspacing="5">
        <tr onmouseover="Ds('ttruename');" onmouseout="Dh('ttruename');">
          <td class="tl">真实姓名 <span class="f_red">*</span></td>
          <td width="220" align="left"><input type="text" class="reg_inp" style="width:80px;" name="post[truename]" id="truename" onblur="validate('truename');"/></td>
          <td><div class="tips" id="ttruename" style="display:none;">
              <div>请与有效身份证件上的姓名保持一致</div>
            </div>
          <span id="dtruename" class="f_red"></span>&nbsp; </td>
        </tr>
        <tr onmouseover="Ds('ttruename');" onmouseout="Dh('ttruename');">
          <td class="tl">性别 <span class="f_red">*</span></td>
          <td width="220" align="left"><input type="radio" name="post[gender]" value="1" checked id="gender_1"/>
            <label for="gender_1"> 先生</label>
            <input type="radio" name="post[gender]" value="2" id="gender_2"/>
          <label for="gender_2"> 女士</label></td>
          <td><div class="tips" id="ttruename" style="display:none;">
              <div>请与有效身份证件上的姓名保持一致</div>
            </div>
          <span id="dtruename" class="f_red"></span>&nbsp; </td>
        </tr>
        <tr>
          <td colspan="3" class="tl"><table cellpadding="5" cellspacing="5">
            <tr>
              <td class="tl">所在地区 <span class="f_red">*</span></td>
              <td align="left"><?php echo ajax_area_select('post[areaid]', '请选择', $areaid, '', 2);?></td>
              <td><span id="dareaid2" class="f_red"></span>&nbsp;</td>
            </tr>
            <?php if($could_emailcode) { ?>
            
            <?php } ?>
            
            <?php if($could_mobilecode) { ?>
            
            <?php } ?>
          </table></td>
        </tr>
        <tr onmouseover="Ds('temail');" onmouseout="Dh('temail');">
          <td class="tl">电子邮箱 <span class="f_red">*</span></td>
          <td align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[email]" id="email" onblur="validator('email');"<?php if($email) { ?> value="<?php echo $email;?>" readonly<?php } ?>
/></td>
          <td><div class="tips" id="temail" style="display:none;">
              <div> <?php if($MOD['checkuser'] == 2) { ?> <span class="f_red">系统设置了邮件验证注册，请确保当前的邮件地址真实有效<br/>
                </span> <?php } ?>
                请使用常用常用邮箱(Email)地址，地址不会被公开且可用于登录网站 </div>
            </div>
          <span id="demail" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php if($could_emailcode) { ?>
        <tr onmouseover="Ds('temailcode');" onmouseout="Dh('temailcode');">
          <td class="tl">邮件验证码 <span class="f_red">*</span></td>
          <td align="left"><input type="text" class="reg_inp" style="width:80px;" name="post[emailcode]" id="emailcode" onblur="validator('emailcode');"/>
            <input type="button" value="立即发送" id="send_code" onclick="SendCode();"/></td>
          <td><div class="tips" id="temailcode" style="display:none;">
              <div> 点击“立即发送”按钮，系统将会发送一组6位数字验证码至您填写的电子邮箱，请接收邮件获取验证码后，填写在左侧的输入框内，继续完成注册 </div>
            </div>
          <span id="demailcode" class="f_red"></span>&nbsp; </td>
        </tr>
        <tr id="sendok" style="display:none;">
          <td class="tl">&nbsp;</td>
          <td align="left" id="dsendok">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <?php } ?>
        <tr onmouseover="Ds('tmobile');" onmouseout="Dh('tmobile');">
          <td class="tl">手机号码 <?php if($could_mobilecode) { ?><span class="f_red">*</span><?php } else { ?>&nbsp;<?php } ?>
</td>
          <td align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[mobile]" id="mobile"<?php if($could_mobilecode) { ?> onblur="validator('mobile');"<?php } ?>
/></td>
          <td><div class="tips" id="tmobile" style="display:none;">
              <div><?php if(!$could_mobilecode) { ?>推荐填写，以便直接与您取得联系<br/>
                <?php } ?>
号码可用于登录网站和接收本站短信</div>
            </div>
          <span id="dmobile" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php if($could_mobilecode) { ?>
        <tr onmouseover="Ds('tmobilecode');" onmouseout="Dh('tmobilecode');">
          <td class="tl">手机验证码 <span class="f_red">*</span></td>
          <td align="left"><input type="text" class="reg_inp" style="width:80px;" name="post[mobilecode]" id="mobilecode" onblur="validator('mobilecode');"/>
            <input type="button" value="立即发送" id="send_scode" onclick="SendSCode();"/></td>
          <td><div class="tips" id="tmobilecode" style="display:none;">
              <div> 点击“立即发送”按钮，系统将会发送一组6位数字验证码至您填写的手机，请接收短信获取验证码后，填写在左侧的输入框内，继续完成注册 </div>
            </div>
          <span id="dmobilecode" class="f_red"></span>&nbsp; </td>
        </tr>
        <tr id="sendsok" style="display:none;">
          <td class="tl">&nbsp;</td>
          <td align="left" id="dsendsok">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <?php } ?>
        <tr onmouseover="Ds('tqq');" onmouseout="Dh('tqq');">
          <td class="tl">QQ号码 &nbsp;</td>
          <td align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[qq]" id="qq"/></td>
          <td><div class="tips" id="tqq" style="display:none;">
              <div>推荐填写，以便即时在线与您取得联系</div>
            </div>
          <span id="dqq" class="f_red"></span>&nbsp; </td>
        </tr>
      </table>
      <div id="company_detail">
        <div class="reg_title">公司信息</div>
        <table cellpadding="5" cellspacing="5">
          <tr onmouseover="Ds('tcompany');" onmouseout="Dh('tcompany');">
            <td class="tl">公司名称 <span class="f_red">*</span></td>
            <td width="300" align="left"><input type="text" class="reg_inp" style="width:280px;" name="post[company]" id="company" onblur="validator('company');"/></td>
            <td><div class="tips" id="tcompany" style="display:none;">
                <div>请填写公司全称，与营业执照保持一致，注册之后将不可更改</div>
              </div>
            <span id="dcompany" class="f_red"></span>&nbsp; </td>
          </tr>
          <tr onmouseover="Ds('ttype');" onmouseout="Dh('ttype');">
            <td class="tl">公司类型 <span class="f_red">*</span></td>
            <td align="left"><?php echo dselect($COM_TYPE, 'post[type]', '请选择', '', 'id="type"', 0);?></td>
            <td><div class="tips" id="ttype" style="display:none;">
                <div>如果没有匹配的类型，请选择其它</div>
              </div>
            <span id="dtype" class="f_red"></span>&nbsp; </td>
          </tr>
          <tr onmouseover="Ds('ttelephone');" onmouseout="Dh('ttelephone');">
            <td class="tl">公司电话 <span class="f_red">*</span></td>
            <td align="left"><input type="text" class="reg_inp" style="width:200px;" name="post[telephone]" id="telephone" onblur="validate('telephone');"/></td>
            <td><div class="tips" id="ttelephone" style="display:none;">
                <div>国内用户请加区号，国外用户请加国家码<br/>
                  格式范例：86-010-88889999</div>
              </div>
            <span id="dtelephone" class="f_red"></span>&nbsp; </td>
          </tr>
        </table>
      </div>
      <table cellpadding="5" cellspacing="5">
        <?php if($MOD['question_register']) { ?>
        <tr onmouseover="Ds('tanswer');" onmouseout="Dh('tanswer');">
          <td class="tl">验证问题 <span class="f_red">*</span></td>
          <td align="left"><?php include template('question', 'chip');?></td>
          <td><div class="tips" id="tanswer" style="display:none;">
              <div>请把问题的答案填写到输入框中</div>
            </div>
          <span id="danswer" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php } ?>
        <?php if($MOD['captcha_register']) { ?>
        <tr onmouseover="Ds('tcaptcha');" onmouseout="Dh('tcaptcha');">
          <td class="tl">验证码 <span class="f_red">*</span></td>
          <td align="left"><?php include template('captcha', 'chip');?></td>
          <td><div class="tips" id="tcaptcha" style="display:none;">
              <div>请把图形中的字符填写到输入框中<br/>
                如果看不清楚，请点击图片刷新</div>
            </div>
          <span id="dcaptcha" class="f_red"></span>&nbsp; </td>
        </tr>
        <?php } ?>
        <tr>
          <td class="tl">&nbsp;</td>
          <td width="300"><input type="checkbox" checked="checked" onclick="if(this.checked){Ds('sbm');}else{Dh('sbm');}"/>
            <a href="?read=1" target="_blank" class="b">我已阅读并同意服务条款</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr id="sbm">
          <td class="tl"></td>
          <td><input type="submit" name="submit" value="立即注册" class="register1_list_btn"/></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
</div>
<div class="clound_footer_web" style="line-height:80px; text-align:center;"> <span>Copyright©2018航天云网,All Rights Reserved  京ICP备16012914号-12 京公网安备11010802022625</span> </div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/guest.js"></script> 
<script type="text/javascript">
if(Dd('username').value == '') Dd('username').focus();
<?php if($MOD['question_register']) { ?>Dd('answer').className = 'reg_inp';<?php } ?>
<?php if($MOD['captcha_register']) { ?>Dd('captcha').className = 'reg_inp';<?php } ?>
var vid = '';
function dtrim(id) {
var str = Dd(id).value.trim();
if(Dd(id).value != str) Dd(id).value = str;
}
function validator(id) {
vid = id;
dtrim(id);
makeRequest('moduleid=<?php echo $moduleid;?>&action=member&job='+id+'&value='+Dd(id).value, AJPath, '_validator');
}
function _validator() {
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('d'+vid).innerHTML = xmlHttp.responseText ? '<img src="<?php echo DT_SKIN;?>image/check_error.gif" align="absmiddle"/> '+xmlHttp.responseText : '<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/> ';
}
}
function err_msg(str, id) {
Dd('d'+id).innerHTML = '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/> '+str;
}
function validate(type) {
if(type == 'cpassword') {
if(Dd('cpassword').value != Dd('password').value) {
err_msg('两次输入的密码不一致', type);
} else {
err_msg('', type);
}
} else if(type == 'truename') {
dtrim(type);
if(Dd('truename').value.length < 2) {
err_msg('请输入真实姓名', type);
} else {
err_msg('', type);
}
} else if(type == 'telephone') {
dtrim(type);
if(Dd('telephone').value.match(/^[0-9\-\(\)\+\.]{7,}$/)) {
err_msg('', type);
} else {
err_msg('请输入公司电话', type);
}
}
}
function reg(type) {
if(type) {
Ds('company_detail');
} else {
Dh('company_detail');
}
}
function Df(ID) {
Dd(ID).focus();
} check();
function check() {
var f,p;
f = 'username';
if(Dd(f).value == '') {
err_msg('请填写会员登录名', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
f = 'password';
if(Dd(f).value.length < 6) {
err_msg('请填写会员登录密码', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
f = 'cpassword';
if(Dd(f).value == '') {
err_msg('请重复输入密码', f);
Df(f);
return false;
}
if(Dd('password').value != Dd(f).value) {
err_msg('两次输入的密码不一致', f);
Df(f);
return false;
}
f = 'truename';
if(Dd(f).value == '') {
err_msg('请填写真实姓名', f);
Df(f);
return false;
}
f = 'email';
if(Dd(f).value.length < 6) {
err_msg('请填写电子邮箱', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
if(Dd('areaid_1').value == 0) {
Dmsg('请选择所在地', 'areaid');
return false;
}
<?php if($could_emailcode) { ?>
f = 'emailcode';
if(!Dd(f).value.match(/^[0-9]{6}$/)) {
Dmsg('请填写邮件验证码', f);
return false;
}
<?php } ?>
if(Dd('g_5').checked == false) {
f = 'company';
if(Dd(f).value == '') {
err_msg('请填写公司名称', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
if(Dd('type').value == '') {
Dmsg('请选择公司类型', 'type');
return false;
}
f = 'telephone';
if(Dd(f).value.length < 7) {
err_msg('请填写公司电话', f);
Df(f);
return false;
}
}
<?php if($MOD['question_register']) { ?>
f = 'answer';
if(Dd(f).value == '') {
Dmsg('请回答验证问题', f);
return false;
}
<?php } ?>
<?php if($MOD['captcha_register']) { ?>
f = 'captcha';
if(!is_captcha(Dd(f).value)) {
Dmsg('请填写验证码', f);
return false;
}
<?php } ?>
return true;
}
function SendCode() {
if(Dd('demail').innerHTML.indexOf('right') == -1) {
Dd('email').focus();
return;
}
makeRequest('action=<?php echo $action_sendcode;?>&value='+Dd('email').value, '<?php echo $DT['file_register'];?>', '_SendCode');
Dh('sendok');
Dd('send_code').value = '正在发送';
Dd('send_code').disabled = true;
}
function _SendCode() {
var f = 'email';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_code').value = xmlHttp.responseText == 1 ? '发送成功' : '立即发送';
Dd('send_code').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendok');
Dd('dsendok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">邮件发送成功，</span> <a href="goto.php?action=emailcode&email='+Dd(f).value+'" target="_blank">立即查收</a>';
StopCode();
} else if(xmlHttp.responseText == 2) {
err_msg('邮件格式错误，请检查', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('邮件地址已存在，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 4) {
err_msg('此邮件域名已经被禁止注册，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('邮件发送过快，请稍后再试');
} else if(xmlHttp.responseText == 6) {
alert('尝试发送次数太多，请稍后再试');
} else {
alert('未知错误，请重试');
}
}
}
function StopCode() {
Dd('send_code').disabled = true;
var i = 60;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_code').value = '立即发送';
Dd('send_code').disabled = false;
clearInterval(interval);
} else {
Dd('send_code').value = '重新发送('+i+')';
i--;
}
},
1000);
}
function SendSCode() {
if(Dd('dmobile').innerHTML.indexOf('right') == -1) {
Dd('mobile').focus();
return;
}
makeRequest('action=<?php echo $action_sendscode;?>&value='+Dd('mobile').value, '<?php echo $DT['file_register'];?>', '_SendSCode');
Dh('sendsok');
Dd('send_scode').value = '正在发送';
Dd('send_scode').disabled = true;
}
function _SendSCode() {
var f = 'mobile';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_scode').value = xmlHttp.responseText == 1 ? '发送成功' : '立即发送';
Dd('send_scode').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendsok');
Dd('dsendsok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">短信发送成功</span>';
StopSCode();
} else if(xmlHttp.responseText == 2) {
err_msg('手机号码格式错误，请检查', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('手机号码已存在，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('短信发送过快，请稍后再试');
} else if(xmlHttp.responseText == 6) {
alert('尝试发送次数太多，请稍后再试');
} else {
alert('未知错误，请重试');
}
}
}
function StopSCode() {
Dd('send_scode').disabled = true;
var i = 180;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_scode').value = '立即发送';
Dd('send_scode').disabled = false;
clearInterval(interval);
} else {
Dd('send_scode').value = '重新发送('+i+')';
i--;
}
},
1000);
}
</script>
