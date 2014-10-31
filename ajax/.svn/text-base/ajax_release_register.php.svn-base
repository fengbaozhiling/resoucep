<?php
header ( "Content-type: application/xml; charset=utf-8" );
echo '<?xml version="1.0" encoding="utf-8"?><root><![CDATA[';
?>
<style type="text/css">
.fwin .tt_l, .fwin .tt_c, .fwin .tt_r, .fwin .m_l, .fwin .m_r, .fwin .b_l, .fwin .b_c, .fwin .b_r { background: none!important; width: 0!important; }
.fwin .m_c { background: none; }
a.flbc { position: absolute; width: 20px; height: 20px;text-align: center; line-height: 20px; color: #666; text-indent: 0; right: 5px; top: 5px; font-size: 12px; margin: auto; }
a.flbc:hover { color:#EB2626; background:none;}
.registrform { padding: 10px; float: left; width: 390px; border:none; }
.rowElem { padding: 10px; }
input.txt_input { -moz-box-shadow: 2px 2px 2px #efefef inset; -webkit-box-shadow: 2px 2px 2px #efefef inset; box-shadow: 2px 2px 2px #efefef inset; height: 28px; line-height: 28px; width: 240px; }
span.buttoniner { display: inline-block; padding: 5px 30px; }
.yazhenma { display: inline-block; width: 80px; text-align: center; background: #72AB15; line-height: 42px; color: #fff; margin-right: 5px; }
.pad30 { padding: 30px; }
.winbody { background: #fff; width: 450px; position: relative; }
.winbody td { padding: 5px 0; }
.valid_error { margin-left: 5px; }
.valid_error span { display: inline-block; width: 145px; }
</style>
<div class="winbody simple_style">
	<a title="close" onclick="hideWindow('register');" class="flbc" href="javascript:;">×</a>
	<div class="pad30 clearfix">
		<div class="registrform f_l">
			<form action="index.php?do=register" method="post" id="register_frm" name="register_frm">
			<input type="hidden" name="formhash" id="formhash" value="fa3794">
			<input type="hidden" name="hdn_refer" id="hdn_refer" value="">
			<input type="hidden" name="handlekey" value="register_frm1">
			<h3 class="mb_10">请填写注册信息：</h3>
			<div class="rowElem" >
				<label class="txt"><strong>用&nbsp;户&nbsp;名：</strong> </label>
				<input class="txt_input"  type="text"  autocomplete="off" name="txt_account" id="txt_account" limit="required:true;leng:4-16;type:signName;general:true" msg="用户名输入有误！" ajax="http://www.epweike.com/index.php?do=register&check_username=" msgArea="login_account_msg" title="4~16个字符，支持汉字、字母、数字、下划线，不能以数字开头,不包含特殊符号" /><span class="login_msg" id="login_account_msg"></span>
			</div>
			<div class="rowElem" >
				<label class="txt"><strong> 密&nbsp;&nbsp;&nbsp;&nbsp;码：</strong> </label>
				<input class="txt_input" type="password" name="pwd_password0" id="pwd_password0" maxlength="20" limit="required:true;len:6-20" msg="密码输入有误！" msgArea="password_msg" title="6~20个字符，支持字母、数字或特殊符号，区分大小写" /><span class="" id="password_msg"></span>
			</div>
			<div class="rowElem" >
				<label class="txt"><strong>确认密码：</strong> </label>
				<input class="txt_input" type="password" name="pwd_password2" id="pwd_password2" maxlength="20" limit="required:true;equals:pwd_password0" msg="重复密码不正确！" msgArea="password2_msg" title="请再次输入您的密码" /><span class="" id="password2_msg"></span>
			</div>
			<div class="rowElem" >
				<label class="txt"><strong>邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</strong> </label>
				<input class="txt_input"  autocomplete="off" type="text" class="txt" name="txt_email" id="txt_email" limit="type:email;required:true;len:6-50" msg="email 格式有误" ajax="http://www.epweike.com/index.php?do=register&check_email=" msgArea="email_msg" title="请输入您常用的邮箱，格式：user@qq.com" /><span class="" id="email_msg"></span>
			</div>
			<div class="rowElem" >
				<label class="txt"><strong>验&nbsp;证&nbsp;码：</strong> </label>
				<input class="txt_input"  style="width:65px;" class="txt_input" name="txt_code" type="text" size="8" id="txt_code" limit="required:true;len:4" msg="验证码错误！" msgArea="secode_msg"ajax="http://www.epweike.com/index.php?do=ajax&view=code&txt_code=" /><span class="login_msg" id="login_account_msg"></span>
				<div id="show_secode_menu_content" class="secode_box" style="right:auto; display:inline-block;"> <img id="secode_img" width="100" src="http://www.epweike.com/secode_show.php?sid=" onclick="document.getElementById('secode_img').src='http://www.epweike.com/secode_show.php?sid='+Math.random(); return false;"> <a class="font14" href="#" onclick="document.getElementById('secode_img').src='http://www.epweike.com/secode_show.php?sid='+Math.random(); return false;">换一组</a> </div><a id="show_secode" href='http://www.epweike.com/index.php?do=ajax&view=menu&ajax=show_secode'></a> <span class="" id="secode_msg" style="float:right;"></span> 
			</div>
			<div class="rowElem" >
				<label class="txt"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
				<input type="checkbox" checked="checked" id="inputtext" limit="required:true"
msg="您必须同意注册协议" msgArea="login_msg" />&nbsp;我已阅读并接受<a  href="http://www.epweike.com/index.php?do=about&view=reg" target="_blank">注册协议和版权声明</a><span id="login_msg"></span>
			</div>
			<div class="rowElem">
				<label class="txt"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> </label>
				<button class="button red" type="button" id="reg_btn" onclick="return user_register('立即注册');"><span class="buttoniner">立即注册</span></button>&nbsp;&nbsp;
				<button class="button" type="button" onclick="return jump_to_login();"><span class="buttoniner">返回登录框</span></button>
			</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    //注册
    function user_register(msg){
     $("#reg_btn").attr("disabled",true);
     $("#reg_btn").text("请您耐心等待");
     $("#reg_btn").removeClass("submit");
var i = checkForm(document.getElementById("register_frm"));
        if (!i) {
          $("#reg_btn").attr("disabled",false);
          $("#reg_btn").text(msg);
           $("#reg_btn").addClass("submit");
return false;
}
var txt_account = $('#txt_account').val();
var pwd_password = $('#pwd_password2').val();
var txt_email = $('#txt_email').val();
var hdn_refer = $("#hdn_refer").val();
var txt_code = $("#txt_code").val();
$.post("/index.php?do=register&txt_reg_type=2", {
            txt_account: txt_account,
            pwd_password: pwd_password,
txt_email: txt_email,
txt_code: txt_code
        }, function(json){
            if (json.status == 1) {
if(typeof stepCheck=='function'){
stepCheck();
}else{
location.reload();
}
            }
            else {
                alert("注册失败！");
return false;
            }
        }, 'json');
    }

//跳转到登录页
function jump_to_login(){
hideWindow('register');
showWindow('login', 'ajax/ajax_release_login.php',true, 'get', 0);
return false;
}

    $('input').focus(function(){
        $(this).next('span').removeClass().children('span').html('');
    });

//阻止点击隐藏方法
$("#txt_code,#show_secode_menu_content").click(function (e) {
e.stopPropagation();
});

var hidecode=function(){
if (!$("#show_secode_menu_content").is(".hidden")){
$("#show_secode_menu_content").addClass("hidden");
}
}
</script>
<?php 
echo ']]></root>';
?>
