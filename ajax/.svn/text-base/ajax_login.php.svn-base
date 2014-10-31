<?php
header ( "Content-type: application/xml; charset=utf-8" );
echo '<?xml version="1.0" encoding="utf-8"?><root><![CDATA[';
?>
<style type="text/css">
.fwin .tt_l,.fwin .tt_c,.fwin .tt_r,.fwin .m_l,.fwin .m_r,.fwin .b_l,.fwin .b_c,.fwin .b_r { background:none!important; width:0!important;}
.fwin .m_c { background:#fff!important;}
.fwin .m_c { background:none;}
a.flbc { position: absolute; width: 20px; height: 20px;text-align: center; line-height: 20px; color: #666; text-indent: 0; right: 5px; top: 5px; font-size: 12px; margin: auto; }
a.flbc:hover { color:#EB2626; background:none;}
.winbody { background:#fff; width:450px; position:relative;}
.winbody td{ padding:5px 0;}
.valid_error { margin-left:5px;}
.valid_error span{ display:inline-block; width:145px;}


.loginform { padding:10px; float:left; width:390px;}
.nologinrl { padding:10px; float:left; width:390px; padding-left:30px;}
.rowElem { padding:10px;}
input.txt_input {-moz-box-shadow:2px 2px 2px #efefef inset;  -webkit-box-shadow:2px 2px 2px #efefef inset; box-shadow:2px 2px 2px #efefef inset; height: 28px;line-height: 28px;width: 240px;}
span.buttoniner { display:inline-block; padding:5px 30px;}
.yazhenma { display:inline-block; width:80px; text-align:center; background:#72AB15; line-height:42px; color:#fff; margin-right:5px;}

.pad30 { padding:30px;}
</style>
<div class="winbody simple_style">
	<a title="close" onclick="hideWindow('login');" class="flbc" href="javascript:;">×</a>
	<div class="pad30 clearfix">
		<div class="loginform">
			<form action="/index.php?do=login" method="post" id="login_frm" name="login_frm">
			<input type="hidden" name="handlekey" value="login_frm1">
			<input type="hidden" name="hdn_refer" id="hdn_refer" value="">
			<input type="hidden" name="logins" id="logins" value='0'>
			<input type="hidden" name="jump_status" id="jump_status" value="1">
			<h3 class="mb_10">已有一品威客账户，马上登录发布</h3>
			<div class="rowElem" >
				<label class="txt"><strong>账&nbsp;号：</strong> </label>
				<input class="txt_input"  type="text"  size="20"  tmp="login_account1" autocomplete="off" name="txt_account" onclick="$(this).removeClass('c999')" id="txt_account1" limit="required:true" msg="用户名不得为空" value=""  msgArea="span_msg_tip" />
			</div>
			<div class="rowElem" >
				<label class="txt"><strong>密&nbsp;码：</strong> </label>
				<input class="txt_input" type="password"  tmp="login_password1" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:2-20" msg="密码长度应为6-20位"  msgArea="span_msg_tip" />
			</div>
			<div class="rowElem">
				<label class="txt"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> </label>
				<button class="button red" type="button" onclick="return user_login();" style=" "><span class="buttoniner">登录</span></button>
				&nbsp;<a class="c06c" href="javascript:void(0);" onclick="jump_to_reg();">立即注册</a>&nbsp;&nbsp;<a href="http://www.epweike.com/index.php?do=help&view=get_password" target="_blank" class="c06c">忘记密码</a>
			</div>

			<div class="rowElem">
				<label class="txt"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> </label>
				<span class="loginother">
					<a class="ico icolg_qq" href="http://www.epweike.com/index.php?do=oauth_login&type=qq" target="_blank" t title="QQ"></a>
					<a class="ico icolg_sina" href="http://www.epweike.com/index.php?do=oauth_login&type=sina" title="新浪微博"></a>
					<a class="ico icolg_rr" href="http://www.epweike.com/index.php?do=oauth_login&type=renren" title="人人网"></a>
					<a class="ico icolg_db" href="http://www.epweike.com/index.php?do=oauth_login&type=douban" title="豆瓣"></a>
					<a class="ico icolg_wy" href="http://www.epweike.com/index.php?do=oauth_login&type=netease" title="网易"></a>
					
				</span>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
In.add('bgiframe', {
	path: JSURL + "/js/jquery.bgiframe.pack.js",
	type: 'js',
	charset: 'utf-8'
});
In.add('md5', {
	path: JSURL + "/js/md5.js",
	type: 'js',
	charset: 'utf-8'
});
In('form', 'bgiframe', 'md5');

$(".auto_login").hover(function() {
		$(".tips_box").addClass("tips_on");
		$(".tips_word").removeClass("hidden");
	},
	function() {
		$(".tips_box").removeClass("tips_on");
		$(".tips_word").addClass("hidden");
	}
);

$(".close").click(function() {
	$("#error_box").hide();
})

//回车执行登录
$("body").bind('keyup',
function(event) {
	if (event.keyCode == 13) {
		user_login();
	}
});
//跳转到注册页
function jump_to_reg() {
	hideWindow('login');
	showWindow('register', 'ajax/ajax_release_register.php', true,'get', 0);
	return false;
}

function user_login() {
	var txt_account = $("#txt_account1").val();
	var pwd_password = hex_md5($("#pwd_password").val());
	var hdn_refer = $("#hdn_refer").val();
	//var formhash = $("#formhash").val();
	var jump_status = $("#jump_status").val();
	var autologin = $(":checkbox[name='autologin']").is(':checked');

	if ((txt_account == "" || txt_account == "用户名/手机号/邮箱") && pwd_password == "") {
		$("#span_msg_tip").attr("class", "valid_error");
		$("#span_msg_tip").html('<span>请输入您的账号和密码</span>');
		return false;
	} else if (txt_account == "") {
		$("#span_msg_tip").attr("class", "valid_error");
		$("#span_msg_tip").html('<span>请输入您账号</span>');
		return false;
	} else if (pwd_password == "") {
		$("#span_msg_tip").attr("class", "valid_error");
		$("#span_msg_tip").html('<span>请输入您的密码</span>');
		return false;
	}

	$("#loginwait").show();
	$(".primary.submit").html("登录中");

	if (checkForm(document.getElementById("login_frm"), false)) {
		$.post("/index.php?do=login", {
			//formhash: formhash,
			txt_account: txt_account,
			pwd_password: pwd_password,
			login_type: 3,
			ckb_cookie: autologin == true ? 1 : 0,
			hdn_refer: hdn_refer,
			jump_status: jump_status
		},
		function(json) {
			if (json.status == 1) {
				$("#span_msg_tip").attr("class", "");
				$("#span_msg_tip").html("");
				$("#error_box").attr("class", "error_box hidden");
				if (json.data.jump_status == 1) {
					hideWindow('login');
					showDialog('登录成功，您可以继续操作。', 'right', '登录成功');
				} else {
					if (json.data.synhtml) {
						var cookie = "cookie_login_syn=login_syn";
						document.cookie = cookie;
					}
					var str = document.domain;
					var words = new Array(); //定义一数组
					words = str.split(".");
					var domain = "." + words[1] + "." + words[2];
					var multi_domain_cookie = "cookie_login_multi_domain=login_domain;domain=" + domain;
					document.cookie = multi_domain_cookie;
					window.location.href = json.data.syn;
				}
			} else {
				$("#loginwait").hide();
				$(".primary.submit").html("登录");
				$("#span_msg_tip").attr("class", "valid_error");
				$("#span_msg_tip").html('<span>' + json.msg + '</span>');
				$("#error_box").attr("class", "error_box");
			}
		},
		'json')
	}
}

$('div.fwinmask').bgiframe();
</script>
<?php 
echo ']]></root>';
?>
