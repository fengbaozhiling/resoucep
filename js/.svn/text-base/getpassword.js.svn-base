In ('form');
In('chosen',function(){
	$("#accout_type").chosen();
});
function login() {
	var txt_pw = $("#txt_pw").val();
	$.post("/index.php?do=login", {
		txt_account: "",
		pwd_password: txt_pw,
		login_type: 3,
		ckb_cookie: 0
	},
	function(json) {
		if (json.status == 1) {
			window.location.href = "http://www.epweike.net";
		} else {
			showDialog("登录失败", "alert", "操作提示");
		}
	},
	"json");
}
function reset_pass() {
	var formhash = $("#formhash").val();
	var txt_pw = $("#txt_pw").val();
	var txt_repw = $("#txt_repw").val();
	if (checkForm(document.getElementById('get_form'), false)) {
		$.post("http://www.epweike.net/index.php?do=help&view=get_password", {
			step: 2,
			formhash: formhash,
			txt_pw: txt_pw,
			txt_repw: txt_repw,
		},
		function(json) {
			if (json.status == 0) {
				$("#formhash").val(json.data['formhash']);
				showDialog(json.msg, "alert", "操作提示");
			} else {
				showDialog(json.msg, 'confirm', "", "login()");
			}
		},
		'json');
	}
}
$("#txt_account").focus(function() {
	var content = $("#txt_account").val();
	if (content == "用户名") {
		$("#txt_account").val("");
	}
});
$("#txt_account").blur(function() {
	var content = $("#txt_account").val();
	if (!content) {
		$("#txt_account").val("用户名");
	}
});

//阻止点击隐藏方法
$("#txt_code,#show_secode_menu_content").click(function(e) {
	e.stopPropagation();
});
var timer;
var send_time = 1 ? 1 : 1;
var maxtime = send_time * 60;
if (getcookie('get_pwd_btn')) {
	timer = setInterval(countDown, 1000);
}
function countDown() {
	if (maxtime >= 0) {
		$('#release_get_code').attr('disabled', 'disabled').html('<b>' + maxtime + '秒后重新获取</b>'); --maxtime;
	} else {
		clearInterval(timer);
		$('#release_get_code').removeAttr('disabled').html('<b>重获验证码</b>');
		maxtime = send_time * 60;
	}
}

$('#release_get_code').click(function() {
	var error = null;
	if ($("#accout_type").val() == 'mobile' && !isMobileCN($('#mobile_accout').val())) {
		error = "请填写正确的手机号码 <br />";
	} else if ($("#accout_type").val() == 'email' && !isEmail($('#email_accout').val())) {
		error = "您输入的邮箱格式不正确 <br />";
	}
	if (error) {
		showDialog(error);
		return false;
	}
	$(this).attr('disabled', true);
	
	setcookie('get_pwd_btn', 1);
	$.post(SITEURL + '/index.php?do=ajax&view=send_code&auth=find_password&type=' + $("#accout_type").val(), {
		mobile: $('#mobile_accout').val(),
		email: $("#email_accout").val(),
		account: $('#txt_account').val()
	},
	function(json) {
		if (json.status == '1') {
			showDialog(json.msg, 'right', '操作提示');
			timer = setInterval(countDown, 1000);
		} else {
			showDialog(json.msg, 'alert', '操作提示');
			$(this).removeAttr('disabled');
		}
	},
	'json');
});
var hidecode = function() {
	if (!$("#show_secode_menu_content").is(".hidden")) {
		$("#show_secode_menu_content").addClass("hidden");
	}
}

function change_accout() {
	var accout_type = $("#accout_type").val();
	if (accout_type == 'email') {
		$("#email").show();
		$("#mobile").hide();
	} else {
		$("#email").hide();
		$("#mobile").show();
	}
}

//提交表单
function get_pass() {
	var txt_account = $("#txt_account").val();
	var accout_type = $("#accout_type").val();
	var txt_email = $("#email_accout").val();
	var txt_mobile = $("#mobile_accout").val();
	var formhash = $("#formhash").val();
	var txt_code = $("#txt_code").val();
	if (checkForm(document.getElementById('get_form'), false)) {
		$.post("http://www.epweike.net/index.php?do=help&view=get_password&ct=password", {
			step: 1,
			formhash: formhash,
			txt_account: txt_account,
			accout_type: accout_type,
			txt_email: txt_email,
			txt_mobile: txt_mobile,
			txt_code: txt_code,
			ct: 'password'
		},
		function(json) {
			if (json.status == 1) {
				//showDialog(json.msg,"right","操作提示");
				//window.setTimeout("reload_url();",3000);
				window.location.href = "http://www.epweike.net/help-view-get_password-ct-password-step-2.html";
			} else {
				$("#formhash").val(json.data['formhash']);
				showDialog(json.msg, "alert", "操作提示");
			}
		},
		'json')
	}
}
function reload_url() {
	window.location.href = "http://www.epweike.net/index.php?do=login";
}