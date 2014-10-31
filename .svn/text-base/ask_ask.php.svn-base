<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="http://resource.epweike.net/css/common.css">
<link rel="stylesheet" type="text/css" href="css/ask.css">
<title>问题详情页面</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="nav_submain clearfix">
	<div class="container">
		<a class="crent" href="">问答首页</a><a href="">问题分类</a><a href="">所有问题</a><a href="">问答砖家</a><a href="">知识专题</a><a href="">设计</a><a href="">开发</a><a href="">营销</a>
	</div>
</div>

<div class="ask_content pt_20">
	<div class="container">
		<div class="ask_more_r_qdb">
			<div class="iquestion">
				<div class="instruction">
					<h1 class="instr_doubt">告诉装修专家您的装修困扰</h1>
				</div>
				<div class="tiwen_table">
					<form id="questionSubmit" name="form1" method="post" action="" onsubmit="return $('#questionSubmit').ajaxForm({'callback':questionSubmitCallback});">
						<p>问题分类：
							<select name="catePid" class="btype" onchange="">
								<option value="0" >-选择问题类别-</option>
								<option value="703">家装设计</option>
								<option value="725">装修流程</option>
								<option value="738">家居产品</option>
								<option value="758">装饰材料</option>
								<option value="770">公装设计</option>
							</select>
							&nbsp;&nbsp;
							<select name="cateID" id="cateID">
								<option value="" >-不做选择-</option>
							</select>
						</p>
						<div class="tiwen_table" style="position:relative">
							<textarea maxlength="50" id="ask_title" name="title" class="ask_title" placeholder="请在这里概述您遇到的装修设计问题" >店铺装修，不知道采用什么材料刷墙比较好，材料的价格是什么？</textarea>
							<div class="fontnum"><span id="fontnum">50</span>/50</div>
							<div class="ask_popup" style="display:block;">
								<div class="popup_title">提问示例：</div>
								<div>卫生间装修风水<br>
									有哪些禁忌？</div>
							</div>
							<input type="hidden" value="" name="helper_id">
							<div class="addpic_wrap"> <span class="show_question_detail">问题补充（选填）</span> </div>
							<div id="question_detail_show" class="question_detail_show">
								<textarea id="editor_content" name="content" class="editor_content" placeholder="详细描述您的问题，有利于获得更好的解答" ></textarea>
								<div class="picdiv">
									<input type="file" class="file" name="upload" id="upload">
								</div>
							</div>
						</div>
						<input type="button" name="button2" id="button2" class="advsb_btn" value="提问" onclick="if(!checkLogin()){return false; }return $('#questionSubmit').ajaxForm({'callback':questionSubmitCallback});  " />
					</form>
				</div>
			</div>
		</div>
		<div class="common hei">
			<div class="rexin">
				<h2 class="title">热心专家排行榜</h2>
				<ul class="weekul rinking">
					<li>
						<div class="avatar"><a href="http://qd.xtuan.com/48866/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/logo/20140211/10180093352_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://qd.xtuan.com/48866/" target="_blank">青岛威廉装饰</a></div>
							<div class="company">回答数:85</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="259403" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
					<li>
						<div class="avatar"><a href="http://sy.xtuan.com/41421/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131115/17061012856_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://sy.xtuan.com/41421/" target="_blank">沈阳林凤装饰</a></div>
							<div class="company">回答数:84</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="164676" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
					<li>
						<div class="avatar"><a href="http://bj.xtuan.com/15518/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/logo/20121022/1350888949_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://bj.xtuan.com/15518/" target="_blank">宜居装饰</a></div>
							<div class="company">回答数:67</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="124486" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
					<li>
						<div class="avatar"><a href="http://km.xtuan.com/41324/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/logo/20130915/16045355872_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://km.xtuan.com/41324/" target="_blank">鲁班装饰</a></div>
							<div class="company">回答数:55</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="164482" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
					<li>
						<div class="avatar"><a href="http://hz.xtuan.com/14991/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/logo/20131029/11454090447_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://hz.xtuan.com/14991/" target="_blank">亿瑞装饰</a></div>
							<div class="company">回答数:51</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="140265" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
					<li>
						<div class="avatar"><a href="http://nj.xtuan.com/44642/" target="_blank"><img src="http://pic1.xtuan.com/upload/decoration/logo/20131220/11303588996_50x50.jpg" alt="" width="50" height="50"></a></div>
						<div class="info">
							<div class="name"><a href="http://nj.xtuan.com/44642/" target="_blank">台湾星汇装饰</a></div>
							<div class="company">回答数:46</div>
						</div>
						<a href="javascript:;" onclick="askHelp(this)" alt="177989" type="1" class="xttw" title="向他提问" >向他提问</a> </li>
				</ul>
			</div>
			</div>
	</div>
</div>
<?php include 'footer.html'; ?>
<!--页面的单独调用的JS-->
<script src="js/ask.js"></script>
<script>
//此处调用出了样式，应该是需要uploadify.php才会出现效果
//可以参考一品威客主站的处理方式
In('uploadify','uploadify_css',function(){
	$("#upload").uploadify({
		'swf': JSURL+'js/Plugin/uploadify/uploadify.swf',
		'uploader': 'uploadify.php',
		'cancelImg': JSURL+'js/Plugin/uploadify/uploadify-cancel.png',
		'buttonText': '上传图片',
		'fileTypeExts': '*.gif; *.jpg; *.png',
		'auto': true,
		'multi': true
	});
});
</script>
</body>
</html>
