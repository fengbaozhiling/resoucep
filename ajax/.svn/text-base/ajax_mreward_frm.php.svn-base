<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $domainurl; ?>/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $domainurl ?>/css/task_detail.css">
<title>任务发布</title>
</head>
<body>

<div class="wid920">
	<!--此处结构和任务详情的模版可以保持一样-->
	<div class="submitwork" style="border:none;">
		<!--from表单 start-->
		<form method="post" id="frm_reward" name="frm_reward" action='#'>
			<div class="eleament clearfix">
				<div class="clearfix mb_10">
					<h3 class="f_l">我要交稿</h3>
				</div>
				<textarea rows="6" name="tar_content" id="tar_content" 
class="tar_content xheditor {tools:'Bold,FontSize,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Table',skin:'nostyle',innerCheck:true,wordLimit:1500}"></textarea>
				<div class="c999" id="length_show"></div>
				<span id="msg_content"></span>
			</div>
			<div class="eleament clearfix">
				<div class="uploadtip mb_10"><strong>上传稿件：</strong>最多可添加 <strong class="ceb2">5</strong> 个附件，每个大小不超过 <strong class="ceb2">2MB</strong>&nbsp;&nbsp;<a class="c06c" href="">无法正常上传附件？</a></div>
				<div class="f_l mr_20">
					<input type="hidden" name="work_id" id="work_id" value="" />
					<input type="hidden" name="file_ids" id="file_ids" value="">
					<input type="file" class="file" name="upload" id="upload">
				</div>
			</div>
			<div class="eleament clearfix">
				<strong class="font14">隐藏交稿：</strong>
				<label>
				<input class="checkbox" type="checkbox" name="hidemode" value="vip"  />
				我要隐藏稿件（VIP特权）</label>
				<span class="messages" style="width:315px; display:none;">
					<label><input class="radio" type="radio" name="hidework" value="1" checked="checked">
					结束任务后公开</label>
					<label>
					<input class="radio" type="radio" name="hidework" value="2" >
					未中标保密</label>
				</span>
			</div>
			<div class="eleament clearfix">
				<span class="subnav_span">
					<span class="subspan_bar"><label><input class="checkbox" type="checkbox" name="cunnar_type" value="1" checked='checked'/><span class="c06c">申请版权卫士</span></label><span class="c999">(在2014.5.26~2014.8.26期间，可免费使用)</span></span>
					<div class="subnav_option hidden">
						<div class="wid260">
							<div class="pad10">
								<a class="file_type" href="http://www.epweike.com/zt/yuncunzheng/" original-title="点击查看版权卫士详细介绍" target="_blank">什么是版权卫士？</a>
							</div>
						</div>
					</div>
				</span>
			</div>
			<div class="eleament clearfix">
				<div class="grid_6 yanzama">
					<strong class="font14">验证码：</strong><input style="width:65px;" class="txt_input" name="txt_code" type="text" size="8" id="txt_code" limit="required:true;len:4" msg="验证码输入错误" msgArea="secode_msg" ajax="http://www.epweike.net/index.php?do=ajax&view=code&txt_code=" >
					<img height="30" id="secode_img" src="http://www.epweike.net/secode_show.php?sid=" onclick="document.getElementById('secode_img').src='http://www.epweike.net/secode_show.php?sid='+Math.random(); return false;"> <a class="font14" href="#" onclick="document.getElementById('secode_img').src='http://www.epweike.net/secode_show.php?sid='+Math.random(); return false;">换一组</a>
					<a id="show_secode" href="/ajax-view-menu-ajax-show_secode.html"></a> <span class="" id="secode_msg"></span> </div>
			</div>
			<div class="eleament clearfix">
				<div class="c666">
					请遵守<a class="c06c" href="">投标规范</a>，若稿件被认定为无效稿件或者推广稿件，系统将屏蔽盖稿件并扣除相应信用度分值，每个无效稿件扣一分。
				</div>
				<div class="mt_10">
					<button id="subWork" class="red button" name="submit" type="button">提交稿件</button>
				</div>
			</div>
		</form>
		<!--from表单 end-->
	</div>
</div>
<!--每个页面下现有的一些全局变量声明 开始--> 
<script type="text/javascript">
var http_host = window.location.host;
var SITEURL		= "http://"+http_host+"/";
var IMGURL		= "http://"+http_host+"/";
var CSSURL		= "http://"+http_host+"/";
var JSURL		= "http://"+http_host+"/";
var SKIN_PATH	= 'tpl/default';
var LANG		= 'cn';
var INDEX		= 'index';
var CHARSET		= "utf-8";
var FORMHASH    = "";  
var request_uri = "/";
</script> 
<!--每个页面下现有的一些全局变量声明 结尾--> 
<script src="http://www.ypwk.com/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="in.js" autoload="true" core="jquery.min.js"></script> 
<script type="text/javascript" src="http://www.ypwk.com/js/in.js"></script> 
<script type="text/javascript" src="http://www.ypwk.com/js/common.js"></script> 
<script>
In.add('task_detail', {
	path: JSURL + "/js/task_detail.js",
	type: 'js',
	charset: 'utf-8'

});
In('task_detail')
</script>
<script>
var xyq = "e1c9b85175e64a80c35843119e92aca99b65f479";//再次登录后XYQ会变化，是服务器端传递的数值。
var guid  	 	 = parseInt(800604)+0;
var task_id		 = parseInt(284634)+0;
var uid 		 = parseInt('')+0;
var task_status  = parseInt(8)+0;
var basic_url	 = "http://www.epweike.com/index.php?do=task&task_id=284634";
var datePrv      = "2014-05-11";
var username     = "";
var delay_count  = parseInt('0')+0;
var delay_total  = parseInt('3')+0;
var trust_mode   = "0";
var notice_count = parseInt(5)+0;
var apply_id     = parseInt('279')+0;
var task_title	= "房地产公司LOGO设计";
var qq = "13132166";
var mobile = "18750929188";
var TASKMODE='mreward';
//模版环境下，为了看效果才设置的
var uid=648602;
</script>
</body>
</html>