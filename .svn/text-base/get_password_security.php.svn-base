<?php
$domainurl='http://' . $_SERVER['HTTP_HOST'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/getpassword.css">
<title>找回安全密码</title>
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
							<a href="http://www.epweike.net/help/selffuwu-username.html" original-title="">找回登录账号</a>
						</li>
						<li>
							<a href="http://www.epweike.net/help-view-get_password-ct-password.html" original-title="">找回登录密码</a>
						</li>
						<li>
							<a class="crent" href="http://www.epweike.net/help-view-get_password-ct-securitycode.html" original-title="">找回安全密码</a>
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
					<em class="f_l">找回登录密码</em>
				</div>
				<div class="pad20">
					<div class="clearfix mb_10">
						<div class="f_l mr_10"><span class="ico ico_pers"></span></div>
						<h2 class="clearfix">找回安全密码</h2>
						<p class="mt_5 c999">忘记安全密码，请使用手机、邮箱或客服人工方式找回。</p>
					</div>
					<div class="bd_t">
						<div class="submitwork clearfix mt_10 border_n">
							<form id="get_form" onsubmit="return false;return checkForm(document.getElementById('get_form'),false);" name="get_form" method="post" action="index.php?do=help&view=get_securitycod">
								<input id="formhash" type="hidden" value="4e3bb1" name="formhash">
								<input type="hidden" value="get_form" name="handlekey">
								<!--账号-->
								<div class="eleament clearfix">
									<label class="f_l">用&nbsp;户&nbsp;名：</label>
									<div class="f_l">
										<input style="width:200px;" type="text" class="txt txt_input" value="" autocomplete="off" name="txt_account" id="txt_account" limit="required:true" msg="用户名不能为空" msgArea="login_account_msg" />
										&nbsp;&nbsp;<a class="c06c" href="http://www.epweike.net/help/selffuwu-username.html">找回账号</a> <span class="login_msg" id="login_account_msg"></span>
									</div>
								</div>
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
								<div class="eleament clearfix po_re">
									<label class="f_l">验&nbsp;证&nbsp;码：</label>
									<div class="f_l">
										<input style="width:65px;" class="txt_input" name="txt_code" type="text" size="8" id="txt_code" />
										&nbsp;
										<button type="button" id="release_get_code" name="release_get_code" value="true">获取验证码</button>&nbsp;<span> 验证码有效期为一个小时，请尽快填写 </span>
										<span id="msg_release_mobile"></span><span class="" id="secode_msg"></span>
									</div>
								</div>
								<!--end 验证码-->
								<div class="eleament clearfix">
									<label class="f_l">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
									<button type="submit"  class="button red" id="user_login_btn" onclick="return get_pass();">验证 </button>
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
