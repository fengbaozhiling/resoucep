<?php
$domainurl='http://' . $_SERVER['HTTP_HOST'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/heip.css">
<title>找回登录帐号</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="backgrey pt_30">
	<div class="container clearfix">
		<div class="wid260 f_l">
			<div class="play_self_nav clearfix">
				<div class="nav_corqh clearfix">
					<p><span class="on">我是雇主</span><span >我是威客</span></p>
				</div>
				<div class="help_navlist">
					<ul>
						<li> <span class="big_tilt on">发布悬赏任务流程演示</span>
							<ul style="display:block;">
								<li name="lips_1" class="selec"><span>1</span>填写需求</li>
								<li name="lips_2"><span>2</span>选择模式</li>
								<li name="lips_3"><span>3</span>确认订单</li>
								<li name="lips_4"><span>4</span>托管赏金</li>
								<li name="lips_5"><span>5</span>选稿中标</li>
								<li name="lips_6"><span>6</span>任务公示期</li>
								<li name="lips_7"><span>7</span>确认付款</li>
								<li name="lips_8"><span>8</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">发布招标任务流程演示</span>
							<ul>
								<li name="lips_9"><span>1</span>填写需求</li>
								<li name="lips_10"><span>2</span>选择模式</li>
								<li name="lips_11"><span>3</span>确认发布</li>
								<li name="lips_12"><span>4</span>选择中标</li>
								<li name="lips_13"><span>5</span>托管赏金</li>
								<li name="lips_14"><span>6</span>收银台支付</li>
								<li name="lips_15"><span>7</span>确认付款</li>
								<li name="lips_16"><span>8</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">直接雇佣流程演示</span>
							<ul>
								<li name="lips_17"><span>1</span>发起雇佣</li>
								<li name="lips_18"><span>2</span>填写需求</li>
								<li name="lips_19"><span>3</span>等待威客确认</li>
								<li name="lips_20"><span>4</span>托管赏金</li>
								<li name="lips_21"><span>5</span>收银台支付</li>
								<li name="lips_22"><span>6</span>确认验收</li>
								<li name="lips_23"><span>7</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">购买服务流程</span>
							<ul>
								<li name="lips_24"><span>1</span>购买服务</li>
								<li name="lips_25"><span>2</span>填写需求</li>
								<li name="lips_26"><span>3</span>等待威客确认</li>
								<li name="lips_27"><span>4</span>托管赏金</li>
								<li name="lips_28"><span>5</span>收银台支付</li>
								<li name="lips_29"><span>6</span>确认验收</li>
								<li name="lips_30"><span>7</span>圆满完成</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="help_navlist">
					<ul>
						<li> <span class="big_tilt off">参加悬赏任务流程</span>
							<ul>
								<li name="lips_31"><span>1</span>找到任务</li>
								<li name="lips_32"><span>2</span>任务交稿</li>
								<li name="lips_33"><span>3</span>稿件中标</li>
								<li name="lips_34"><span>4</span>任务公示期</li>
								<li name="lips_35"><span>5</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">参加招标任务流程</span>
							<ul>
								<li name="lips_36"><span>1</span>找到任务</li>
								<li name="lips_37"><span>2</span>提交报价</li>
								<li name="lips_38"><span>3</span>报价中标</li>
								<li name="lips_39"><span>4</span>确认完成工作</li>
								<li name="lips_40"><span>5</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">直接雇佣流程</span>
							<ul>
								<li name="lips_41"><span>1</span>收到通知</li>
								<li name="lips_42"><span>2</span>接受雇佣</li>
								<li name="lips_43"><span>3</span>确认完成工作</li>
								<li name="lips_44"><span>4</span>圆满完成</li>
							</ul>
						</li>
						<li> <span class="big_tilt off">出售服务流程</span>
							<ul>
								<li name="lips_45"><span>1</span>进入商铺管理</li>
								<li name="lips_46"><span>2</span>选择服务类型</li>
								<li name="lips_47"><span>3</span>填写服务内容</li>
								<li name="lips_48"><span>4</span>服务发布成功</li>
								<li name="lips_49"><span>5</span>服务推荐成功</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="wid920 f_r">
			<div class="play_self_img clearfix">
				<h1>第<span>1</span>步：填写需求，完成发布</h1>
				<div class="paly_img_box clearfix"> <img src="wz/step/1-1.jpg" alt="第一步，填写需求" border="0" usemap="#Map" />
					<map id="map" name="Map">
						<area id="co_cs_1" title="点击进入上一步" shape="rect" coords="0,0,0,0" href="#">
						<area id="co_cs_2" title="点击进入下一步" shape="rect" coords="404,495,486,526" href="#">
					</map>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('hezhuoban.html')?>
<?php include('helpfoot.html')?>
<?php include 'footer.html'; ?>
<script src="js/help_lc.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('.help_navlist:eq(1)').hide();
	$('.help_navlist li ul:gt(0)').hide();
})
</script> 
</body>
</html>
