<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/Plugin/jcarousel/lib/jquery.jcarousel.js"></script>
<script type="text/javascript">
  $(function(){
	  $('.cardright_label_li').jcarousel({
		   wrap: 'last',
		   scroll:1,
		   buttonNextHTML: "<div class=\"jcarnext\"></div>",
           buttonPrevHTML: null,
		   initCallback: mycarousel_initCallback
		  });
  });
  function mycarousel_initCallback(carousel)
  {
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
	
	//$('.card_chengxin div').css({width:$('.card_chengxin div').width()+"px"});
	
	$('.card_chengxin').hover(function(){
	    $(this).find(".xingj").fadeIn();
	}, function(){
		$(this).find(".xingj").fadeOut(20);
	});
	
};
</script>
<style>

</style>
</head>

<body style="background:#f4f4f4;">
<div id="pos_25971" class="pos_box" style="left: 10px; top: 10px; background:none !important;">
<a class="close_bub">×</a>
<!--用户信息气泡-->
<div class="cardbox">
   <div class="cardleft">
     <em><img src="images/myhome/b03533fa828ba61e2226d8c94334970a314e590f.jpg" width="60" height="60" /></em>
     <i><a href="#"><font class="font14">＋</font> 关注</a></i>
     <i><a href="#">@ 私信</a></i>
   </div>
   <div class="cardright">
     <div class="cardright_us"><span>个人 <font class="ccc">|</font> 墨星</span><i class="iico bggreen">诚 3</i></div>
     <div class="cardright_shopname"><b>墨星视觉设计小店</b><i class="iico shopico">拓展</i><i class="iico bgred">九品</i></div>
     <div class="cardright_service"><span>好评<b>100%</b></span><span>服务<b><a href="#">17</a></b></span><span>案例<b>54</b></span><span class="card_chengxin">
     诚信<b>100</b>
     <div class="xingj">
     <i class="triangle"></i>
     <div><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_noxing"></i><i class="ico_noxing"></i><i class="ico_noxing"></i><b>官方推荐交易</b></div>
     </div>
     </span></div>
     <div class="cardright_label">
       <div class="cardright_label_li">
         <ul>
             <li>Android应用</li>
             <li>IOS应用</li>
             <li>IPAD应用</li>
             <li>界面设计</li>
             <li>Android应用</li>
             <li>IOS应用</li>
             <li>IPAD应用</li>
             <li>界面设计</li>
             <li>Android应用</li>
             <li>IOS应用</li>
             <li>IPAD应用</li>
             <li>界面设计</li>
         </ul>
       </div>
       
     </div>
   </div>
</div>
</div>
<!--浮窗-->
<div style="position:absolute; left:500px; top:30px; width:280px;">
  <div class="credit">
    <i class="triangle"></i>
    <div class="credit_tit">信用明细<span class="close">×</span></div>
    <div class="credit_box">
    <div class="credit_bfb">
      <ul>
        <li><b>90%</b><span>雇主好评率</span></li>
        <li><b>50%</b><span>商铺完善率</span></li>
      </ul>
    </div>
    <div class="credit_jyac">
      <ul>
        <li><samp>交易安全：</samp><span><a href="javascript:;" class="cert">诚信保证金</a><i class="ico_bao"></i><i class="ico_sou"></i><i class="ico_yuan"></i></span></li>
        <li><samp>身份真实：</samp><span><a href="javascript:;" class="cert">实名认证</a><a href="javascript:;" class="nocert">银行认证</a></span></li>
        <li><samp>联系可用：</samp><span><a href="javascript:;" class="cert">邮箱认证</a><a href="javascript:;" class="cert">手机认证</a></span></li>
        <li><samp>交易表现：</samp><span class="text">总交易 <font class="red">30</font> 次<br />总金额 <font class="red">￥99999.99</font> 元</span></li>
      </ul>
    </div>
    <div class="clear"></div>
    </div>
    <div class="credit_box">
      <div class="cerdit_user">
        <h3>旋风设计</h3>
        <div class="cerdit_pingfeng">综合评级：<i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_noxing"></i>
        <font>100</font>
        分
        </div>
        <span><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_xing"></i><i class="ico_xing"></i>官网推荐交易</span>
        <a href="#" class="button">点击查看信用证书</a>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

</body>
</html>