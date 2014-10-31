<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/release.css">
<title>直接雇佣</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<div class="backgrey bd_t pt_30">
	<div class="container clearfix">
		<div class="wid920 f_l">
			<form action="http://www.epweike.net/index.php?do=hiretask&tuid=648950&service_id=" method="post" name="frm_step" id="frm_step2">
			<input type="hidden" name="formhash" value="455f30">
			<input type="hidden" name="origin" id="origin" value="http://www.epweike.net/talent/">
			<div class="releaseform">
				<div class="eleament">
					<div class="clearfix mb_10"><h3 class="f_l">请选择需求所在的类目：</h3></div>
					<span id="selectedClass">未分类</span>
					<span class="pl_20">
						<a id="eiditCaty" class="c06c" href="">修改</a>&nbsp;
					</span>
				</div>
				<div class="eleament">
					<div class="clearfix mb_10"><h3 class="f_l">需求标题和详细描述：</h3>
					<span class="subnav_span">
						<a id="releaseHelp" class="subspan_bar c06c" class="c06c" href="">插入模板</a>
						<div class="subnav_option hidden">
							<div class="tipselmt">套用模板更轻松！<br>经典任务描述模板供您挑选、借鉴。<br>写您所需！</div>
						</div>
					</span>
					<span class="subnav_span">
						<a class="subspan_bar c06c" href="http://www.epweike.com/task/">看看别人怎么写“海报设计”>></a>
						<div class="subnav_option hidden">
							<div class="tipselmt">逛任务大厅看更多人！<br>点击“<span class="c06c">我也有类似需求</span>”发布。</div>
						</div>
					</span>
					</div>
					<input class="tx_t1" type="text" maxlength="50" limit="required:true;len:2-50" msgarea="spanarea_title" msg="任务标题填写错误，2-50字" size="34" value="" id="txt_title" name="txt_title" original-title="任务标题长度2-50字" placeholder="标题：如“一品威客网LOGO设计”“厦门集美连体橱柜产品手绘图设计”" class="txt_input">&nbsp;&nbsp;&nbsp;&nbsp;<span id="span_title" class="c666">任务标题最多&nbsp;<b class="ceb2">50</b>&nbsp;字</span>
					<div id="spanarea_title"></div>
					<div id="textareaEditor" class="pt_20">
						<textarea rows="12" name="tar_content" title="任务需求描述;10-1000字" id="tar_content" msgarea="msg_content" class="xheditor {tools:'Bold,FontSize,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Table',skin:'nostyle',innerCheck:true,wordLimit:1500}"></textarea>
						<div id="length_show" class="c999"></div>
						<span id="msg_content"></span>
					</div>
				</div>
				<div class="eleament clearfix">
					<div class="uploadtip">最多可添加 <strong class="ceb2">5</strong> 个附件，每个大小不超过 <strong class="ceb2">2MB</strong>&nbsp;&nbsp;<a class="c06c" href="">无法正常上传附件？</a></div>
					<div class="f_l mr_20">
						<input type="hidden" name="file_ids" id="file_ids">
						<input type="file" class="file" name="upload" id="upload">
					</div>
				</div>
				<div class="eleament">
					<div class="clearfix mb_10"><h3 class="f_l">真实的联系方式有助于一品客服及时与您沟通</h3></div>
					<div id="selectContact">
						<select id="cont_type" name="cont_type" msg="选择联系方式" title="选择联系方式">
							<option selected="" value="mobile">&nbsp;手机&nbsp;</option>
							<option value="qq">&nbsp;QQ&nbsp;</option>
							<option value="email">&nbsp;Email&nbsp;</option>
						</select>
						<input class="text" type="text" name="tar_contact" id="tar_contact" value="" title="填写您的常用电话号码" size="34" msgarea="span_contact" limit="required:true;type:TelCN" msg="请填写正确的电话号码" maxlength="50">
						<input class="text hidden" type="text" name="tar_contact" id="tar_contact_qq" value="" title="填写您的常用电话号码" size="34" msgarea="span_contact" limit="required:true;type:digit;len:5-13" msg="请填写正确QQ号码" maxlength="50" original-title="填写您的常用QQ">
						<input class="text hidden" type="text" name="tar_contact" id="tar_contact_email" value="" title="填写您的常用电话号码" size="34" msgarea="span_contact" limit="required:true;type:email" msg="请填写正确的E-MAIL" maxlength="50" original-title="填写您的常用电子邮箱"><span id="span_contact"></span>
					</div>
				</div>
				<div class="eleament">
					<div class="clearfix mb_10"><h3 class="f_l">选择设置任务赏金和工作周期：</h3></div>
					<div class="pl_10 clearfix">
						<div class="f_l mr_30">
							<div class="pb_5">您打算支付多少赏金呢？</div>
							￥&nbsp;
							<input name="txt_task_cash" id="txt_task_cash1" type="text" class="txcr"  value="" title="" size="5" maxlength="9" msgArea="span_task_cash" limit="required:true;type:float;between:10-" msg="金额填写错误" />
							&nbsp; <span class="c999" id="span_task_cash"></span> </div>
						<div class="f_l">
							<div class="pb_5">您希望用多长时间来完成这个任务？</div>
							<input class="txcr" name="txt_task_day" id="txt_task_day" type="text" value="" title="" onkeyup="clearstr(this)" size="5" maxlength="9" msgArea="span_task_day" limit="required:true;type:int;between:1-" msg="时间填写错误" />
							&nbsp;天 <span id="span_task_day"></span>
						</div>
					</div>
				</div>
						
				<div class="eleament">
					<div class="psllitable">
						<div class="step_button">
							<div class="mt_20">
								<label><input type="checkbox" checked="checked" id="agreement" name="agreement" class="styled" original-title="">
								同意《<a class="c06c" target="_blank" href="http://www.epweike.com/about-view-release.html" original-title="">一品威客网任务发布协议</a>》 </label>
							</div>
							<div class="mt_20">
								<input type="hidden" name="guider" value="0" />
								<button class="red button" name="is_submit" type="button">发布任务</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="wid260 f_r">
			<div class="weikleftinfo">
				<div class="title_thit">
					<em>墨星设计</em>
				</div>
				<div class="authorinfo">
					<div class="authpic"> <a href="http://www.epweike.net/shop-u_id-648950.html" target="_blank"><img src='http://www.epweike.com/data/avatar/000/73/98/80_avatar_big.jpg' uid='648950' class='pic_small'></a><br>
					<h3><a class="c06c" href="http://www.epweike.net/shop-u_id-648950.html" target="_blank">gui010</a></h3>
					</div>
					<div class="authtilebox">
						<span class="c666">个人</span>&nbsp;|&nbsp;<span class="c666">天津市,县,蓟　县</span><br>
						<span class="yiping auttag">五品</span><span class="vipico auttag" >VIP</span>
					</div>
				</div>
				<div class="rezzhuat">
					<div class="clearfix"><span class="c333">认证状态：</span><span class="icom icosj_on" title="手机认证">&nbsp;</span><span class="icom icoyx_on" title="邮箱认证">&nbsp;</span></div>
				</div>
				
				<div class="serci_infom">
					<div class="clearfix mb_10">
						<span class="f_l"><a target="_blank" href="http://www.epweike.com/integrity.html"><img original-title="一品威客网建议您优先选择诚信威客。点击标示进入诚信保障介绍页" class="fl_l mr_10" alt="" src="http://www.epweike.com/tpl/default/theme/simple/img/system/cengxin.png"></a>
						</span>
						<div class="c999">已加入<a class="ceb2" href="http://www.epweike.com/integrity.html">诚信保障</a><br>冻结保证金<strong class="ceb2">2000.00</strong>元
						</div>
					 </div>
					<h3>评价信息</h3>
					<ul>
						<li> 好评率：<span class="ceb2">100%</span> </li>
						<li> 工作速度： <span class="star a5"><span class="star_selected" style="width:80px"></span></span>&nbsp;<span class="c999">5.0</span> </li>
						<li> 工作质量： <span class="star a5"><span class="star_selected" style="width:80px"></span></span>&nbsp;<span class="c999">5.0</span> </li>
						<li> 工作态度： <span class="star a5"><span class="star_selected" style="width:80px"></span></span>&nbsp;<span class="c999">5.0</span> </li>
					</ul>
				</div>
				<div class="tard_infom">
					<ul>
						<li>交易总收入：<span class="ceb2">￥20287.978</span> </li>
						<li>交易总次数：<span class="c666">12次</span> </li>
					</ul>
				</div>
			</div>
			<span class="blk20"></span>
			<div class="chenlist">
				<div class="big_title">
					<strong>一品威客网向您承诺</strong>
				</div>
				<ul>
					<li>
						<span class="ico_cnn">实</span>参加悬赏任务，威客实名认证
					</li>
					<li>
						<span class="ico_cnn">免</span>非悬赏类任务，雇主免费发布
					</li>
					<li>
						<span class="ico_cnn">满</span>直接雇佣任务，雇主满意付款
					</li>
					<li>
						<span class="ico_cnn">退</span>零交稿零投标，任务全额退款
					</li>
				</ul>
				<br>
				<div class="atachp clearfix">
					<div class="f_l"><span class="tac_cio_1"></span></div>
					<div class="f_l">
						全国免长途电话：<br>
						<strong class="font16 font_yh">4006-999-467</strong>
					</div>
				</div>
				<div class="atachp clearfix">
					<div class="f_l"><span class="tac_cio_2"></span></div>
					<div class="f_l">
						全国免长途电话：<br>
						<strong>4006-999-467</strong>
					</div>
				</div>
			</div>
			<div class="mt_20"></div>
			<div class="yddownload">
				<ul>
					<ol>
						一品移动客户端下载
					</ol>
					<li>随时随地，"掌"握全局！</li>
				</ul>
				<b><a target="_blank" href="#">进入下载专题</a></b>
				<dl>
					<dd><img width="88" height="88" src="images/task/appstore.jpg"><span>iPhone</span></dd>
					<dd><img width="88" height="88" src="images/task/android.jpg"><span>Android</span></dd>
				</dl>
				<div class="clear"></div>
			</div>

		</div>
	</div>
	<br><br>
</div>
<?php include('hezhuoban.html')?>
<?php include('helpfoot.html')?>
<?php include 'footer.html'; ?>
<!--页面的单独调用的JS-->
<script src="js/release.js"></script>
<script>
var xyq = "ec7f50291c56be98b3aaa08d761cccf006b71915";//再次登录后XYQ会变化，是服务器端传递的数值。

</script>
</body>
</html>