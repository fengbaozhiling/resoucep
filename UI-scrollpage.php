<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>首页</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="mt_30 mb_30">
	<div class="container">
		<strong>滚动加载</strong>
		<style>
		/*样式不是必须的*/
		div#Loadding { text-align: center; margin-top: 10px; display: none; font-weight: bold; color:Red; }
        div.content { width: 100%; height: 2900px; border-bottom: 1px solid gray;  font-weight: bold; color:Red;text-align: center;}
		</style>
		<div id="divContainer"><!--这些id都不是固定死的，视具体调用实例而定-->
			<div class="content">
				这里是内容，尝试滚动，加载下一页内容
			</div>
		</div>
		<div id="Loadding"><!--这些id都不是固定死的，视具体调用实例而定-->
			正在加载，请稍候 ...
		</div>
	</div>
</div>
<?php include 'footer.html'; ?>
<!--页面的单独调用的JS-->
<script type="text/javascript">
In("ScrollPage",function(){
	//调用实例EPWEIKE.scrollFunc.ScrollPage
	$(function () {
		window.scrollTo(0, 0); //每次F5刷新把滚动条置顶
		//marginBottom表示滚动条离底部的距离，0表示滚动到最底部才加载，可以根据需要修改  
		new EPWEIKE.scrollFunc.ScrollPage(window, { delay: 1000, marginBottom: 10 }, function (offset) {
			if (offset > 0) {
				$("#Loadding").show(); //加载提示
				setTimeout(function () {
					//这里就是异步获取内容的地方，这里简化成一句话，可以根据需要修改
					$("#divContainer").append($("<div class='content'>第“" + ($(".content").size() + 1) + "”页内容</div>"));
					//内容获取后，隐藏加载提示
					$("#Loadding").hide();
				}, 1000);
			}
		});
	});
})
</script>
</body>
</html>