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
?>
<div class="header">
  <div class="container clearfix">
    <div class="f_l"> <a href="" class="f_l"><img src="images/common/logo.png"></a> <span class="channel">首席设计/开发师</span> </div>
    <div class="pt_10 f_r clearfix">
      <div class="search_bigbox f_l"> 
        <!--主搜索 start-->
        <div class="clearfix">
          <div class="search clearfix"> 
            <!--搜索框和选项 start-->
            <form class="clearfix" id="frm_topsearch" method="post" action="http://www.epweike.cc/index.php">
              <input type="hidden" value="task_list" id="topsearch_type" name="topsearch_type" original-title="">
              <div class="search_box"> <span class="icon magnifier"></span>
                <input type="text" lang="zh-CN" x-webkit-grammar="bUIltin:search" x-webkit-speech="" onfocus="if(this.value=='输入关键词搜索'){this.value=''};" autocomplete="off" onblur="if(this.value==''){this.value='输入关键词搜索'};" value="输入关键词搜索" class="search_input" id="search_key" name="k" original-title="">
              </div>
            </form>
            <!--搜索框和选项 end--><!--搜索提交 start-->
            <div class="f_l mr_5">
              <button type="button" id="topsearch_btn" class="search_btn"> <span class="ico ico_serch"></span> </button>
            </div>
            <!--搜索提交 end--> 
          </div>
          <div class="serchdream">
            <div class="serccatgory">
              <div class="sercaxy" id="search_task">在<strong>任务列表：</strong>找<span class="dercatext"></span></div>
              <div class="sercaxy" id="search_user">在<strong>人才列表：</strong>找<span class="dercatext"></span></div>
            </div>
          </div>
        </div>
        <!--主搜索 end--> 
      </div>
      <div id="menberEnter" class="logintool f_l clearfix">
        <div class="logintolinner f_l">
          <div class="loginlitb_name">
            <div style="border-bottom: 1px solid rgb(223, 223, 223); height: 30px;" class="loginlitb_topname"><span class="icoaraw"></span><img original-title="" src="http://static11.epweike.net/images/common/defalheid.jpg" alt="会员登录">会员登录</div>
            <div class="loginlitb_box" style="display: none; top: 38px;"> <span id="span_msg_tip_rt" class="c999"></span>
              <div class="loginform">
                <form name="login_frm_rt" id="login_frm_rt" method="post" action="http://www.epweike.net/login.html">
                  <input type="hidden" value="35677f" id="formhash_rt" name="formhash" original-title="">
                  <input type="hidden" value="login_frm1" name="handlekey" original-title="">
                  <!--账号-->
                  <input type="hidden" value="0" id="logins_rt" name="logins" original-title="">
                  <div class="rowElem">
                    <input type="text" placeholder="用户名/邮箱/手机" msgarea="span_msg_tip_rt" value="" msg="用户名不得为空" limit="required:true" id="txt_account1_rt" name="txt_account" autocomplete="off" tmp="login_account1_rt" size="20" onblur="if(this.value==''){$(this).addClass('c999');}" onfocus="$(this).removeClass('c999');" class="txt_input user c999" original-title="">
                  </div>
                  <div class="rowElem">
                    <input type="password" placeholder="密码长度应为6-20位" msgarea="span_msg_tip_rt" msg="密码长度应为6-20位" limit="required:true;len:2-20" maxlength="20" id="pwd_password_rt" name="pwd_password" tmp="login_password1" onblur="if(this.value==''){$(this).addClass('c999');}" onfocus="$(this).removeClass('c999');" class="txt_input pasw c999" original-title="">
                  </div>
                  <div class="rowElem"> 
                    <!--<label for="code"><input type="checkbox" name="autologin" value="1" id="autologin_rt">一周内自动登录</label>-->
                    <div class="t_r"><a class="c06c" href="http://www.epweike.net/help-view-get_password-ct-password.html">忘记密码?</a></div>
                  </div>
                  <div class="rowElem">
                    <button style=" " onclick="return user_login(2,'_rt');" id="btn_rt" type="button" class="button red"><span class="buttoniner primary_rt submit_rt">登录</span></button>
                  </div>
                </form>
              </div>
              <div class="logintother clearfix">
                <p>合作平台登录:</p>
                <a style="background-position:0 0;" href="http://www.epweike.net/oauth_login-type-qq.html" rel="nofollow" target="_blank" title="QQ"></a> <a style="background-position:0 -30px;" href="http://www.epweike.net/oauth_login-type-sina.html" rel="nofollow" title="新浪微博"></a> <a style="background-position:0 -90px;" href="http://www.epweike.net/oauth_login-type-renren.html" rel="nofollow" title="人人网"></a> <a style="background-position:0 -120px;" href="http://www.epweike.net/oauth_login-type-netease.html" rel="nofollow" title="网易"></a> <a style="background-position:0 -60px;" href="http://www.epweike.net/oauth_login-type-douban.html" rel="nofollow" title="豆瓣"></a> </div>
            </div>
          </div>
        </div>
        <a class="albotton" href="http://www.epweike.net/register.html" target="_self">免费注册</a> </div>
    </div>
  </div>
</div>
<div class="wrap loginbg">
  <div class="container loginptb">
    <div class="kfleft">
      <div class="kfleft_li">
        <h1 class="a2">用户登陆<span>切换至 <a href="#">使用邮箱注册 </a>或<a href="#"> 使用手机注册</a></span></h1>
        <ul>
          <li><u>手 机 号：</u><em><input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true"></em><q id="login_account_msg"></q></li>
          <li><u>登录密码：</u><em>
          <input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true"></em><q id="login_account_msg"></q></li>
          <li><u>确认密码：</u><em><input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true"></em><q id="login_account_msg"></q></li>
          <li><u>手机验证码：</u><em><input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true" class="sj"><a href="#" class="button codebtn">获取验证码</a></em><q id="login_account_msg"></q></li>
          <li><u><b class="fontcol">邀 请 码：</b></u><em><input name="username" type="text" id="username" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true" class="yq"> <a href="#"><font class="fontcol">如何获得邀请码？</font></a></em><q id="login_account_msg"></q></li>
          <li><u>&nbsp;</u><em class="a2 xy"><input name="11" type="checkbox" value="1" checked>我已阅读并接受<a href="#">《一品威客网注册协议》</a></em></li>
          <li class="btn"><button name="" type="submit">立即注册</button></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="kfright">
      <div class="kfshoux">
        <h3>已经是驻站首席了</h3>
        <a href="#" class="button">现在登录</a>
      </div>
      <div class="kfrig_txt">
        <ul>
          <ol>驻站首席标志</ol>
          <li>全站首席标志显示，让您的品牌彰显首席实力</li>
        </ul>
        <ul>
          <ol>订单优先 专享推荐</ol>
          <li>首席频道专享推荐，更多特权等您来发现</li>
        </ul>
        <ul>
          <ol>VIP白金版商铺</ol>
          <li>现在注册成为驻站首席，赠送VIP白金版商铺服务一个季度</li>
        </ul>
      </div>
      <div class="alruser kfico">
      <samp>
        <a href="#" target="_blank" class="icoqq"></a>
        <a href="#" target="_blank" class="icosina"></a>
        <a href="#" target="_blank" class="icodd"></a>
        <a href="#" target="_blank" class="icorr"></a>
        <a href="#" target="_blank" class="icotao"></a>
      </samp>
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