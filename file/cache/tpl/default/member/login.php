<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title id="tname">重庆工业云登录</title>
<link href="http://cas.casicloud.com:80/css/images/favicon.ico" rel="shortcut icon">
<meta name="keywords" content="重庆工业云">
<meta name="description" content="重庆工业云">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate">
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT">
<META HTTP-EQUIV="expires" CONTENT="0">
<link rel="stylesheet" type="text/css" href="http://cas.casicloud.com:80/pages/cloud6.0/css/loginRegister.css"/>
<link rel="stylesheet" type="text/css" href="http://cas.casicloud.com:80/pages/cloud6.0/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="http://cas.casicloud.com:80/css/login/global.css?v20180408"/>
<link rel="stylesheet" type="text/css" href="http://cas.casicloud.com:80/css/login/login.css?v20180408"/>
<script language="JavaScript" type="text/javascript" src="http://cas.casicloud.com:80/pages/cloud6.0/js/jquery-1.8.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="http://cas.casicloud.com:80/pages/cloud6.0/js/jquery.placeholder.js"></script>
<script language="JavaScript" type="text/javascript" src="http://cas.casicloud.com:80/js/layer/layer.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<script type="text/javascript">
$(function(){
 
$("#logo").addClass("kj-logo");
$("#bg").addClass("kj-bg");
$("#logo").addClass("htyw-logo");
$("#header").addClass("login-head");
$(".gyyName").html("重庆工业云");
$("#logo").attr('href', 'http://www.gyyqcloud.com');
$("#bg").addClass("htyw-bg");
})
</script>
</head>
<body style="background:#fff;">
<div class="login-pc"> 
  <!--头部 start-->
  <div id="header" style="margin-bottom: 0px;">
    <div class="block"> <a href="#"  id="logo"> <span class="decorate"></span> </a>
      <div class="login-tit"> 欢迎登录 </div>
    </div>
  </div>
  <!--头部 end--> 
  <!--login logo end-->
  <div class="body login-body">
    <div  id="bg">
      <div class="block">
        <div class="login-box">
          <ul class="login-tabs">
            <li class="now" id="li0">手机/邮箱/用户名登录</li>
            <i></i>
          </ul>
          <div class="login-tip">公共场合不建议自动登录，以防账号丢失</div>
          <div class="login-from now" id="form_new">
            <form method="post" action="<?php echo $DT['file_login'];?>" onsubmit="return Dcheck();" id="loginForm" name="loginForm">
              <input name="forward" type="hidden" value="<?php echo $forward;?>"/>
              <input name="auth" type="hidden" value="<?php echo $auth;?>"/>
              <div class="errormessage"></div>
              <div class="item"> <s class="sjh_icon"></s>
                <input type="text" name="username" id="username" placeholder="手机/邮箱/用户名" class="form-list-input" size="35" value="<?php echo $username;?>" />
                <i class="delete_icon"></i> </div>
              <div class="item"> <s class="mm_icon"></s>
                <input type="password" name="password" id="password" placeholder="密码" class="form-list-input" size="35"/>
                <i class="delete_icon delete_yzm"></i> <img title="点击更换" spm="login.form_new" onclick="refreshImageCode();" id="imgcode" class="border"> <i class="delete_icon"></i>
                 </div>
              <?php if($MOD['captcha_login']) { ?>
              <div class="item last_item">
               <s class="yzm_icon"></s>
                <?php include template('captcha', 'chip');?>
                <i class="delete_icon"></i> 
              </div>
              <?php } ?>
              <select name="option" style="display:none">
                <option value="username" selected="selected">用户名</option>
                <option value="passport">昵称</option>
                <option value="email">Email</option>
                <option value="mobile">手机号</option>
                <option value="company">公司名</option>
                <option value="userid">会员ID</option>
              </select>
              
              <div class="form-list">
                <input type="checkbox" name="cookietime" value="1" id="cookietime"<?php if($MOD['login_remember']) { ?> checked<?php } ?>
/>
                <label for="cookietime"> 记住我</label>
                <input type="checkbox" name="goto" value="1" id="goto"<?php if($MOD['login_goto']) { ?> checked<?php } ?>
/>
                <label for="goto">进入商务室</label>
                <label class="r clearfix"><a href="http://uc.casicloud.com/user/findPwd.ht" spm="login.form_new">忘记密码</a></label>
              </div>
              <div class="button">
                <input type="submit" name="submit" value=" 登 录 "/>
              </div>
              <div class="register"> 
                <!-- 没有<span class="gyyName"></span>账号？ --> 
                <a href="<?php echo $DT['file_register'];?>?forward=<?php echo urlencode($forward);?>" spm="login.form_new">立即注册</a> </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="login_line"></div>
  <div class="login-footer">
    <div class="block">
      <div class="coypright"> <span id="yw" > Copyright©2018 重庆工业云,All Rights Reserved 渝ICP备18001657号</span> </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
if(Dd('username').value == '') {
Dd('username').focus();
} else {
Dd('password').focus();
}
function Dcheck() {
//layer.msg('正在提交请稍候。。。', {icon: 16,time: 100000,shade : [0.5 , '#000' , true]});
if(Dd('username').value == '') {
confirm('请输入登录名称');
Dd('username').focus();
return false;
}
if(Dd('password').value == '') {
confirm('请输入密码');
Dd('password').focus();
return false;
}
<?php if($MOD['captcha_login']) { ?>
if(!is_captcha(Dd('captcha').value)) {
confirm('请填写验证码');
Dd('captcha').focus();
return false;
}
<?php } ?>
return true;
}
</script>