<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<title>用户登陆</title>
</head>

<body>
<?php 
include('top.html');
include('head.html');
?>
<div class="wrap loginbg">
      <div class="container loginptb">
            <div class="logleft f_l">
               <div class="login">
                 <h1>用户登陆</h1>
                 <ul>
                   <li><u>登陆帐号:</u><em><input name="username" type="text" id="username" value="" placeholder="用户名 / 邮箱 / 手机"></em></li>
                   <li><u>登陆密码:</u><em><input name="password" type="password" id="password" value="" placeholder="密码长度6-20"></em></li>
                   <li><u>&nbsp;</u><b><i></i><input name="11" type="hidden" value="">一周内自动登录</b></li>
                   <ol class="a2"><button name="" type="submit">登陆</button><a href="#" target="_blank">忘记密码了？</a></ol>
                 </ul>
                 <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
            
            <div class="logright f_r">
               <div class="alruser">
                  <h3>还不是一品会员？</h3>
                  <span><a href="#">免费注册</a></span>
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