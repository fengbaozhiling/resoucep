<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<title>用户注册</title>
</head>

<body>
<?php 
include('top.html');
include('head.html');
?>
<div class="wrap loginbg">
      <div class="container loginptb">
            <div class="logleft f_l">
           <form name="register_frm" id="register_frm" method="post" action="?do=register">
           <div class="regli a2">
                 <h1>用户登陆<span>切换至 <a href="#">使用邮箱注册 </a>或<a href="#"> 使用手机注册</a></span></h1>
               <ul>
                 <li><u>用 户 名：</u><em><input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true"></em><q id="login_account_msg"></q></li>
                 <li><u>登陆密码：</u><em><input name="password" type="password" id="password" msgarea="password_msg" msg="密码输入有误！" limit="required:true;len:6-20"></em><q id="password_msg"></q></li>
                 <li><u>确认密码：</u><em><input name="passwordr" type="password" id="passwordr" msgarea="passwordr_msg" msg="重复密码不正确！" limit="required:true;equals:password"></em><q id="passwordr_msg"></q></li>
                 <li><u>电子邮箱：</u><em><input name="email" type="text" id="email" msgarea="email_msg" msg="email 格式有误" limit="type:email;required:true;len:6-50"></em><q id="email_msg"></q></li>
                 <li><u>验 证 码：</u><em class="code"><input name="code" type="text" id="code" msgarea="code_msg" msg="验证码错误！" limit="required:true;leng:4-4;type:signName;general:true">
                 <img src="images/login/code.jpg" width="100"><a href="#"></a></em><q id="code_msg"></q></li>
                 <li class="agreement"><i class="checkbox"></i>
                 我已阅读并接受<a href="#">《注册协议和版权声明》</a></li>
                 <li class="but"><button name="" type="submit">立即注册</button></li>
               </ul>
             <div class="clear"></div>
               </div>
           </form>
               <div class="clear"></div>
            </div>
            
            <div class="logright f_r">
               <div class="alruser">
                  <h3>已经是一品会员了</h3>
                  <span><a href="#">现在登录</a></span>
                <h3 class="pt_20">合作网站账号登录</h3>
                  <samp>
                    <a href="#" target="_blank" class="icoqq"></a>
                    <a href="#" target="_blank" class="icosina"></a>
                    <a href="#" target="_blank" class="icodd"></a>
                    <a href="#" target="_blank" class="icorr"></a>
                    <a href="#" target="_blank" class="icotao"></a>
                  </samp>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
           </div>
            <div class="clear"></div>
  </div>
        <div class="heigth3"></div>
  <div class="clear"></div>
</div>


<?php include('hezhuoban.html')?>
<?php include('helpfoot.html')?>
<?php include('footer.html')?>
<script type="text/javascript" src="js/login.reg.js"></script>
</body>
</html>