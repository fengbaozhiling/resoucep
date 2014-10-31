<?php
$domainurl='http://' . $_SERVER['HTTP_HOST'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/getpassword.css">
<title>找回登录帐号</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="backgrey pt_30">
	<div class="container clearfix">
		<div class="wid260 f_l">
			<div class="box">
				<div class="title_thit clearfix">
					<em class="f_l">账号安全操作</em>
				</div>
				<div class="inerul clearfix">
					<ul class="clearfix">
						<li>
							<a class="crent" href="http://www.epweike.net/help/selffuwu-username.html" original-title="">找回登录账号</a>
						</li>
						<li>
							<a href="http://www.epweike.net/help-view-get_password-ct-password.html" original-title="">找回登录密码</a>
						</li>
						<li>
							<a href="http://www.epweike.net/help-view-get_password-ct-securitycode.html" original-title="">找回安全密码</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="box mt_20">
				<div class="phone_zx">
					<div class="pt_30 pl_30 ml_5"> <b class="pt_20">4006-999-467</b> <span class="c999">免长途客服服务热线</span> </div>
				</div>
			</div>
		</div>
		<div class="wid920 f_r">
			<div class="box">
				<div class="title_thit clearfix">
					<em class="f_l">找回登录账号</em>
				</div>
				<div class="pad20">
					<div class="clearfix mb_10">
						<div class="f_l mr_10"><span class="ico ico_pers"></span></div>
						<h2 class="clearfix">找回登录账号</h2>
						<p class="mt_5 c999">忘记登录账号，请使用手机、邮箱或客服人工方式找回。</p>
					</div>
					<div class="bd_t">
						<div class="submitwork clearfix mt_10 border_n">
							<form id="get_form" class="mb_30" onsubmit="return false;return checkForm(document.getElementById('get_form'),false);" name="get_form" method="post" action="index.php?do=help&view=get_password">
								<input type="hidden" value="4e3bb1" id="formhash" name="formhash">
								<input type="hidden" name="handlekey" value="get_form">
								<!--账号-->
								<div class="eleament clearfix po_re" style=" z-index:2;">
									<label class="f_l">找回方式：</label>
									<div class="f_l" id="test">
										<select name="accout_type" onchange="change_accout();" id="accout_type" style="width:230px;">
											<option value="email">邮箱</option>
											<option value="mobile">手机号码</option>
										</select>
										<div class="mt_20">
											<span id="email">
											<input class="txt_input" style="width:200px;" size="13" type="text" limit="type:email;required:true" msg="您输入的邮箱格式不正确" title="" msgarea="account_msg" name="txt_email" id="email_accout">
											</span> <span style="display:none" id="mobile">
											<input style="width:200px;" size="13" type="text" limit="type:mobileCn;required:true" msg="您输入的手机号码格式不正确" title="" msgarea="account_msg" name="txt_mobile" id="mobile_accout">
											</span><span class="hidden" id="account_msg"></span>
										</div>
									</div>
								</div>
								<!--验证码-->
								<div class="eleament clearfix">
									<div class="grid_6 yanzama">
										<label class="f_l">验&nbsp;证&nbsp;码：</label>
										<input style="width:65px;" class="txt_input" name="txt_code" type="text" size="8" id="txt_code" limit="required:true;len:4" msg="验证码输入错误" msgArea="secode_msg" ajax="http://www.epweike.net/index.php?do=ajax&view=code&txt_code=" >
										<img height="30" id="secode_img" src="http://www.epweike.net/secode_show.php?sid=" onclick="document.getElementById('secode_img').src='http://www.epweike.net/secode_show.php?sid='+Math.random(); return false;"> <a class="font14" href="#" onclick="document.getElementById('secode_img').src='http://www.epweike.net/secode_show.php?sid='+Math.random(); return false;">换一组</a>
										<a id="show_secode" href="/ajax-view-menu-ajax-show_secode.html"></a> <span class="" id="secode_msg"></span> </div>
								</div>
								<!--end 验证码-->
								<div class="eleament clearfix">
									<label class="f_l">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
									<button type="submit"  class="button red" id="user_login_btn" onclick="return get_pass();">找回账号 </button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('hezhuoban.html')?>
<?php include('helpfoot.html')?>
<?php include 'footer.html'; ?>
<script src="js/getpassword.js"></script>
</body>
</html>
