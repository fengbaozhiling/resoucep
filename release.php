<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/release.css">
<title>任务发布</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<div class="backgrey bd_t pt_30">
	<div class="container clearfix">
		<div class="wid920 f_l">
			<form id="frm_step" name="frm_step" method="post" action="http://www.epweike.com/index.php?do=release&pub_mode=professional&t_id=&task_id=&model_id=0&r_step=step1">
				<div class="releaseform">
					<div class="eleament">
						<div class="clearfix mb_10">
							<h3 class="f_l">选择需求所在分类：</h3>
						</div>
						<span id="selectedClass">未分类</span> <span class="pl_20"> <a id="eiditCaty" class="c06c" href=""><b>修改</b></a>&nbsp; </span> </div>
					<div class="buylayer">
						<div class="buylayerclose">×</div>
						<div class="buylayertxt"> 已选择清费￥50.00让客服帮您完善需求，本环节您玩需填写。 </div>
					</div>
					<div class="eleament">
						<div class="clearfix mb_10">
							<h3 class="f_l">明确需求标题和详情：</h3>
							<span class="subnav_span"> <a id="releaseHelp" class="subspan_bar c06c" href="">插入模板</a>
							<div class="subnav_option hidden">
								<div class="tipselmt">套用模板更轻松！<br>
									经典任务描述模板供您挑选、借鉴。<br>
									写您所需！</div>
							</div>
							</span> <span class="subnav_span">
							<label class="subspan_bar c06c" original-title="">
								<input class="checkbox" type="checkbox" id="apllykefund">
								客服帮您完善需求<b class="ceb2">&nbsp;50元</b></label>
							<div class="subnav_option hidden">
								<div class="tipselmt">写您所需！<br>
									花点小钱让客服用专业易懂的语言帮您代写任务。 </div>
							</div>
							</span> <span class="subnav_span f_r"> <a class="subspan_bar c06c" href="http://www.epweike.com/task/" target="_blank">逛任务大厅看看别人怎么写</a>
							<div class="subnav_option hidden">
								<div class="tipselmt">逛任务大厅看更多人！<br>
									点击“<span class="c06c">我也有类似需求</span>”发布。</div>
							</div>
							</span> </div>
						<input class="tx_t1 txt_input" type="text" maxlength="50" limit="required:true;len:2-50" msgarea="spanarea_title" msg="任务标题填写错误，2-50字" size="34" value="" id="txt_title" name="txt_title" original-title="任务标题填写错误，2-50字" placeholder="请用一句话概括您要做什么？比如：拼车打车APP开发" onkeyup="checkLen(this.value, 50)">
						&nbsp;<span id="lblSummary50" class="c666"><font class="ceb2">0</font>/50</span>
						<div id="spanarea_title"></div>
						<div id="textareaEditor" class="pt_20">
							<textarea rows="12" name="tar_content" id="tar_content" msgarea="msg_content" class="xheditor {tools:'Bold,FontSize,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Table',skin:'nostyle',innerCheck:true,wordLimit:1500}"></textarea>
							<div id="textareaTip" class="textareaTip">
							请把需求再补充详细一些吧。越清晰具体，任务完成质量越高哦！<br>
友情提示：您还可以查看模板或者花点小钱让客服帮您完善需求。。。
							</div>
							<div id="length_show" class="c999"></div>
							<span id="msg_content"></span> </div>
					</div>
					<div class="eleament clearfix">
						<div class="uploadtip">最多可添加 <strong class="ceb2">5</strong> 个附件，每个大小不超过 <strong class="ceb2">2MB</strong>&nbsp;&nbsp;<a class="c06c clas_tips" href="" original-title="&lt;p&gt;1. 上传附件支持常见的办公软件文档格式(office文档格式)，常见的压缩文件格式(rar,zip,7z)，常见的图片格式(jpg,png,gif)等，其他不常见的格式建议压缩成RAR文档再上传。&lt;/p&gt;&lt;p&gt;2. 最多可上传附件5个附件，每个文件大小不得超过2M。&lt;/p&gt;&lt;p&gt;3. 图形文件不支持CMYK模式(将无法正常显示)。&lt;/p&gt;&lt;p&gt;4. 文件名称须符合正常规范(勿在文件名中包含其他符号，如点号等)&lt;/p&gt;">无法正常上传附件？</a></div>
						<div class="f_l mr_20">
							<input type="hidden" name="file_ids" id="file_ids">
							<input type="file" class="file" name="upload" id="upload">
						</div>
					</div>
					<div class="eleament">
						<div class="clearfix mb_10">
							<h3 class="f_l">留下联系方式</h3>
						</div>
						<div id="selectContact">
							<select id="cont_type" name="cont_type" msg="选择联系方式" title="选择联系方式">
								<option selected="" value="mobile">&nbsp;手机&nbsp;</option>
								<option value="qq">&nbsp;QQ&nbsp;</option>
								<option value="email">&nbsp;Email&nbsp;</option>
							</select>
							<input class="text" type="text" name="tar_contact" id="tar_contact" value="" placeholder="若一品客服无法联系您，本任务将被隐藏。" size="40" msgarea="span_contact" limit="required:true;type:TelCN" msg="请填写正确的电话号码" maxlength="50">
							<input class="text hidden" type="text" name="tar_contact" id="tar_contact_qq" value="" title="填写您的常用电话号码" size="34" msgarea="span_contact" limit="required:true;type:digit;len:5-13" msg="请填写正确QQ号码" maxlength="50" original-title="填写您的常用QQ">
							<input class="text hidden" type="text" name="tar_contact" id="tar_contact_email" value="" title="填写您的常用电话号码" size="34" msgarea="span_contact" limit="required:true;type:email" msg="请填写正确的E-MAIL" maxlength="50" original-title="填写您的常用电子邮箱">
							<span id="span_contact"></span> </div>
					</div>
					<div class="eleament">
						<div class="clearfix mb_10">
							<h3 class="f_l">选择交易模式，价格和周期：</h3>
						</div>
						<div class="choosway clearfix"> <span class="radibox f_l"> <span class="radiobg"></span>
							<input type="radio" class="stylcod" name="chooseway" id="chooseway_2" value="2" >
							</span>
							<div class="choos_ifo"> <span class="font14"><strong>投标模式</strong><i>标</i></span>
								<div class="c999"> 先选中标威客，TA再工作。找到中标威客后托管赏金。 <br>
									适合开发、装修类任务的工作，周期长、金额高、难度大。 </div>
							</div>
						</div>
						<div class="choswaybox">
							<div class="csw_tilex"><strong>您打算支付多少赏金呢？</strong></div>
							<div class="styinput hadsubbox">
								<label>
									<input id="jutisj" class="styled" type="radio" name="shanging" value="4"  />
									我有具体的预算金额，直接填写赏金数目</label>
								<div class="choslitcbox">
									<div class="coscentbg"> ￥&nbsp;
										<input class="txt txt_input" name="txt_task_cash2" size="12" value="" type="text" id="txt_task_cash2" />
										&nbsp; </div>
								</div>
							</div>
							<div class="styinput hadsubbox">
								<label>
									<input id="jujiansj" class="styled" type="radio" name="shanging" value="5"  />
									我没有具体的预算金额，选择价格区间</label>
								<div class="choslitcbox">
									<div class="coscentbg">
										<select name="slt_task_cash_coverage" id="slt_task_cash_coverage"  title="选择赏金区间" msg = '选择赏金区间'>
											<option value="1" >简单的任务(￥100-1000元)</option>
											<option value="2" >小型任务(￥1000-5000元)</option>
											<option value="3" >中型任务(￥5000-10000元)</option>
											<option value="4" >大型任务(￥10000-30000元)</option>
											<option value="15" >超大型任务(￥3万元以上)</option>
										</select>
									</div>
								</div>
							</div>
							<div class="csw_tilex"><strong>您希望用多长时间来寻找满意的合作者？</strong></div>
							在&nbsp;
							<input id="calendarLastday" type="text" size="12" class="txt txt_input" value="2014-06-13" name="end_time2">
							&nbsp;日截止报名
							<input type="hidden" name="txt_task_period2" id="txt_task_period2" value="7" >
						</div>
						<span class="blank10"></span>
						<div class="choosway clearfix"> <span class="radibox f_l"> <span class="radiobg"></span>
						<input type="radio" class="stylcod" name="chooseway" id="chooseway_1" value="1" >
							</span>
							<div class="choos_ifo"> <span class="font14"><strong>悬赏模式</strong><i>赏</i></span>
								<div class="c999"> 威客们先工作，再选中标作品。托管赏金后吸引更多威客。 <br>
									适合简单设计、写作策划类任务，也适合取名祝福、发帖推广、下载注册等计件任务。 </div>
							</div>
						</div>
						<div class="choswaybox">
							<div class="csw_tilex"><strong>您打算支付多少赏金呢？</strong></div>
							<!--隐藏域数据-->
							<input type="hidden" name="model_id" id="model_id" value="0"/>
							<input type="hidden" name="task_way" id="task_way" value="0" />
							<input type="hidden" name="sreward_min_cash" id="sreward_min_cash" value="50" curr_str="￥"/>
							<input type="hidden" name="preward_min_cash" id="preward_min_cash" value="100" curr_str="￥"/>
							<input type="hidden" name="tender_min_cash" id="tender_min_cash"   value="50" curr_str="￥"/>
							<input type="hidden" name="mreward_min_cash" id="mreward_min_cash" value="50" curr_str="￥"/>
							<!-- 各分类的最小金额 -->
							<input type="hidden" id="m2g1" value="300" curr_str="￥"/>
							<input type="hidden" id="m1g1" value="300" curr_str="￥"/>
							<input type="hidden" name="task_minday" id="task_minday" value="1"/>
							<input type="hidden" name="task_maxday" id="task_maxday" value="10"/>
							￥
							<input class="txt txt_input" name="txt_task_cash1" size="12" value="" type="text" id="txt_task_cash1" />
							&nbsp;
							<div class="csw_tilex"><strong><strong>您打算如何分配该赏金呢？</strong></strong></div>
							<!--单赏-->
							<div class="styinput hadsubbox">
								<label>
									<input id="dandusj" class="styled" type="radio" value="1" name="shanging"  />
									单人悬赏，只设置一个中标者</label>
							</div>
							<!--多赏-->
							<div class="styinput hadsubbox">
								<label>
									<input id="duorensj" class="styled" type="radio" value="2" name="shanging"  />
									多人悬赏，设置多人中标分享赏金</label>
								<div class="choslitcbox">
									<div class="coscentbg">
										<select name="txt_prize_count" id="txt_prize_count" onchange="task_prizeset(this.value);" title="选择中标人数" msg = '选择中标人数'>
											<option value="2" >&nbsp;2&nbsp;</option>
											<option value="3" >&nbsp;3&nbsp;</option>
											<option value="4" >&nbsp;4&nbsp;</option>
											<option value="5" >&nbsp;5&nbsp;</option>
										</select>
										<!--input type="text" size="12" class="txt txt_input" value=""-->&nbsp;共享该赏金￥<strong class="cc30" id="str_cash">0</strong> ，请设定赏金分配金额
										<div id="prize_1_li" class="mb_10">一等奖1人，赏金&nbsp;
											<input id="task_prize_1" name="task_prize[1]" class="txc_1" value="" type="text" />
										</div>
										<div id="prize_2_li" class="mb_10">二等奖1人，赏金&nbsp;
											<input id="task_prize_2" name="task_prize[2]" class="txc_1" value="" type="text" />
										</div>
										<div id="prize_3_li" class="mb_10" style='display:none' >三等奖1人，赏金&nbsp;
											<input id="task_prize_3" name="task_prize[3]" class="txc_1" value="" type="text" />
										</div>
										<div id="prize_4_li" class="mb_10" style='display:none' >四等奖1人，赏金&nbsp;
											<input id="task_prize_4" name="task_prize[4]" class="txc_1" value="" type="text" />
										</div>
										<div id="prize_5_li" class="mb_10" style='display:none' >五等奖1人，赏金&nbsp;
											<input id="task_prize_5" name="task_prize[5]" class="txc_1" value="" type="text" />
										</div>
										<div id="msg_prize_valid" class="red"></div>
									</div>
								</div>
							</div>
							
							<!--计件-->
							<div class="styinput hadsubbox">
								<label>
									<input id="jijiansj" class="styled" type="radio" value="3" name="shanging"  />
									计件悬赏，合格一稿，支付一稿</label>
								<div class="choslitcbox">
									<div class="coscentbg clearfix"> 我想要
										<input type="text" class="txt txt_input" name="txt_work_count" size="12" id="txt_work_count" value="" onkeyup="clearstr2(this);get_each_price(2);" onblur="get_each_price(2);" onfocus="get_each_price();">
										个稿件<span id="each_price" curr_str="元"></span>
										<input type="hidden" name="txt_single_price" id="txt_single_price" value="">
									</div>
								</div>
							</div>
							<div class="setmark">
								<div class="csw_tilex"><strong>为增加投稿积极性，需设置2-5名入围者</strong></div>
								<select name="slt_notice_count" id="slt_notice_count" onchange="if($('#model_id').val()==1||$('#model_id').val()==2){show_mark_pay($('#slt_notice_count').val(),$('#txt_task_cash1').val());}" title="选择入围人数">
									<option value="2" >&nbsp;2人&nbsp;</option>
									<option value="3" >&nbsp;3人&nbsp;</option>
									<option value="4" >&nbsp;4人&nbsp;</option>
									<option value="5" >&nbsp;5人&nbsp;</option>
								</select>
								入围，他们将均分<strong class="cc30">10%</strong>赏金<span id='eachcash' style="display:none"></span> </div>
							<div class="csw_tilex"><strong>您希望用多长时间来完成这个任务？</strong></div>
							在&nbsp;
							<input type="text" onclick="showcalendar(event, this, 0)" onchange="get_days(this.value,'1');" onblur="get_days(this.value,'1');" size="12" class="txt txt_input" value="2014-06-13" name="end_time1">
							&nbsp;日截止投稿
							<input type="hidden" name="txt_task_period1" id="txt_task_period1" value="7" >
						</div>
					</div>
				</div>
				<div class="totalform">
					<div class="post_box clearfix">
						<div class="clearfix mb_10">
							<h3 class="f_l">您可能还需要下面的服务</h3>
							<div class="clear"></div>
						</div>
						<div class="psllitable">
							<table width="100%" cellspacing="1" cellpadding="0" border="0" id="payitem">
								<tbody>
									<tr>
										<td>
											<label for="checkbox_top">
											<div class="pl_20 pt_10 f_l">
												<input type="checkbox" id="checkbox_top" item_cash="50.00" item_id="2" item_code="top" value="top" name="item[2]">
											</div>
											<span class="icobg">顶</span>
											<div class="pl_10 f_l">
												<strong>置顶</strong><br>
												<span class="c666 font12"> 需求在任务大厅的置顶三天，提高曝光率。</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_top">￥50.00/3天</label></strong></td>
									</tr>
									<tr>
										<td>
											<label for="checkbox_urgent">
											<div class="pl_20 f_l">
												<input type="checkbox" id="checkbox_urgent" item_cash="50.00" item_id="3" item_code="urgent" value="urgent" name="item[3]">
											</div>
											<span class="icobg"><span>急</span></span>
											<div class="pl_10 f_l">
												<strong>加急</strong><br>
												<span class="c666 font12">适用于紧急任务，方便威客搜索查看。网站将提供任务推荐、人工邀约、官方QQ群推广、官方微博推广服务，提高威客参与度。</span> 
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_urgent">￥50.00</label></strong></td>
									</tr>
									<tr>
										<td>
											<label for="checkbox_seohide">
											<div class="pl_20 f_l">
												<input type="checkbox" id="checkbox_seohide" item_cash="50.00" item_id="4" item_code="seohide" value="seohide" name="item[4]">
											</div>
											<span class="icobg"><span>屏</span></span>
											<div class="pl_10 f_l">
												<strong>屏蔽搜索</strong><br>
												<span class="c666 font12"> 让您发布的信息不被百度，google等搜索引擎收录，保护您的隐私，品牌具体名称不要出现在标题里哦！</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_seohide">￥50.00</label></strong></td>
									</tr>
									<tr>
										<td>
											<label for="checkbox_emphide">
											<div class="pl_20 f_l">
												<input type="checkbox" id="checkbox_emphide" item_cash="50.00" item_id="6" item_code="emphide" value="emphide" name="item[6]">
											</div>
											<span class="icobg"><span>隐</span></span>
											<div class="pl_10 f_l"> <strong>
												隐藏投标
												</strong><br>
												<span class="c666 font12">威客投标只有您一人可见，以免您中意的稿件或方案被曝光！</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_emphide">￥50.00</label></strong></td>
									</tr>
									<tr>
										<td>
											<label for="checkbox_rgmh">
											<div class="pl_20 f_l">
												<input type="checkbox" onclick="ale(12);" id="checkbox_rgmh" item_cash="100.00" item_id="12" item_code="rgmh" value="rgmh" name="item[12]" disabled="disabled" class="disabled" >
											</div>
											<span class="icobg"><span>荐</span></span>
											<div class="pl_10 f_l"> <strong>
												威客速荐
												</strong><br>
												<span class="c666 font12">威客投标只有您一人可见，以免您中意的稿件或方案被曝光！</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_rgmh">￥100.00</label></strong></td>
									</tr>
									<tr>
										<td>
											<label for="kefubb">
											<div class="pl_20 f_l">
												<input type="checkbox" id="kefubb">
											</div>
											<span class="icobg"><span>办</span></span>
											<div class="pl_10 f_l"> <strong>
												客服包办
												</strong><br>
												<span class="c666 font12">写需求、评稿和选稿、办理产权转让，让一品客服帮您搞定，省时省力省心！</span>
											</div>
											</label>
										</td>
										<td><strong class="ceb2 pad10"><label for="kefubb">￥50.00~200.00</label></strong></td>
									</tr>
									<tr servicetr="kefubb" style="display:none;">
										<td>
											<label for="checkbox_xqws">
											<div class="pl_30 f_l">
												<input type="checkbox" id="checkbox_xqws" item_cash="50.00" item_id="8" item_code="xqws" value="xqws" name="item[8]" servicenm="kefubb">
											</div>
											<span class="icobg"><span>需</span></span>
											<div class="pl_10 f_l"> <strong>
												写您所需
												</strong><br>
												<span class="c666 font12">客服用专业易懂的语言帮您代写任务需求，让威客全面细致地理解您的所需。</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_xqws">￥50.00</label></strong></td>
									</tr>
									<tr servicetr="kefubb" style="display:none;">
										<td>
											<label for="checkbox_hddp">
											<div class="pl_30 f_l">
												<input type="checkbox" id="checkbox_hddp" item_cash="50.00" item_id="9" item_code="hddp" value="hddp" name="item[9]" servicenm="kefubb" disabled="disabled" class="disabled" >
											</div>
											<span class="icobg"><span>评</span></span>
											<div class="pl_10 f_l"> <strong>
												替您点评
												</strong><br>
												<span class="c666 font12">客服以点评稿件的方式督促威客改稿，让您收到更多有质量的稿件！</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_hddp">￥50.00</label></strong></td>
									</tr>
									<tr servicetr="kefubb" style="display:none;">
										<td>
											<label for="checkbox_gjlx">
											<div class="pl_30 f_l">
												<input type="checkbox" id="checkbox_gjlx" item_cash="50.00" item_id="10" item_code="gjlx" value="gjlx" name="item[10]" servicenm="kefubb" disabled="disabled" class="disabled" >
											</div>
											<span class="icobg"><span>选</span></span>
											<div class="pl_10 f_l"> <strong>
												助您选稿
												</strong><br>
												<span class="c666 font12">客服遴选出若干可能符合您心意的优秀稿件，让您跳出海量稿件、实现快速选标。</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_gjlx">￥50.00</label></strong></td>
									</tr>
									<tr servicetr="kefubb" style="display:none;">
										<td>
											<label for="checkbox_cqzr">
											<div class="pl_30 f_l">
												<input type="checkbox" id="checkbox_cqzr" item_cash="50.00" item_id="11" item_code="cqzr" value="cqzr" name="item[11]" servicenm="kefubb">
											</div>
											<span class="icobg"><span>权</span></span>
											<div class="pl_10 f_l"> <strong>
												产权代理
												</strong><br>
												<span class="c666 font12">客服协助办理双方的知识产权协议转让，免去您的后顾之忧。</span>
											</div>
											</label>
										</td>
										<td width="110"><strong class="ceb2 pad10"><label for="checkbox_cqzr">￥50.00</label></strong></td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="pl_20 f_l">
												<label><input type="checkbox" id="checkall" name="checkall" original-title="">全选</label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="totalform">
					<div class="post_box clearfix">
						<div class="psllitable">
							<input type="hidden" value="0" id="item_total_cash" name="item_total_cash" original-title="">
							<input type="hidden" value="0" id="item_total_credit" name="item_total_credit" original-title="">
							<input type="hidden" value="" id="tai_item_total_cash" name="tai_item_total_cash" original-title="">
							<div class="clearfix mb_10">
								<h3 class="f_l">结算清单：</h3>
								<div class="clear"></div>
							</div>
							<div class="psllitable">
								<table width="100%" cellspacing="1" cellpadding="0" border="0">
									<tbody>
										<tr>
											<td width="100" style="border-bottom:none;"><strong>托管赏金：</strong><a original-title="付款后赏金暂由一品威客网保管，待您获得满意服务后，您再授权一品威客网付款给第三方。" class="ceb2" href="javascript:void(0);"><b>￥</b><b id="cash_task">0</b></a></td>
											<td style="border-bottom:none;"></td>
										</tr>
									</tbody>
								</table>
								<div style="display:;" id="item_show_box" class="r_list"> <strong>附加服务：</strong> <span id="item_desc_box"> <q><b>置顶：</b><font class="red">花 ￥50.00购买</font></q> <q><b>加急：</b><font class="red">花 ￥50.00购买</font></q> <q><b>屏蔽搜索：</b><font class="red">花 ￥50.00购买</font></q> <q><b>隐藏投标：</b><font class="red">花 ￥50.00购买</font></q> </span>
									<div class="clear"></div>
								</div>
								<div class="pub_sum clearfix mt_20">
									<div class="fl_r"> 应付总额：<span class="ceb2 font_yh font20" id="total">0</span>&nbsp;元<br>
									</div>
								</div>
							</div>
							<div class="step_button">
								<div class="mt_20">
									<label>
										<input type="checkbox" checked="checked" id="agreement" name="agreement" class="styled" original-title="">
										同意《<a class="c06c" target="_blank" href="http://www.epweike.com/about-view-release.html" original-title="">一品威客网任务发布协议</a>》 </label>
								</div>
								<div class="mt_20">
									<input type="hidden" value="0" name="guider" original-title="">
									<button class="red button" name="is_submit" type="button">发布任务</button>
                                    <!--发布中的效果按钮-->
                                    <br><br><button class="red button" name="is_submit" type="button" style="background-image:url(images/common/loading.gif); background-position:30px center; background-repeat:no-repeat;">任务发布中...</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="wid260 f_r">
			<div class="chenlist">
				<div class="big_title"> <strong>一品威客网向您承诺</strong> </div>
				<ul>
					<li> <span class="ico_cnn">实</span>参加悬赏任务，威客实名认证 </li>
					<li> <span class="ico_cnn">免</span>非悬赏类任务，雇主免费发布 </li>
					<li> <span class="ico_cnn">满</span>直接雇佣任务，雇主满意付款 </li>
					<li> <span class="ico_cnn">退</span>零交稿零投标，任务全额退款 </li>
				</ul>
				<div class="pad20 t_c">
					<h3 class="mb_10">节省时间，更高效率</h3>
					<a class="button red" href="javascript:;" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=4006999467&eid=218808P8z8p8Q8x8q8x8q&o=http://www.epweike.com&q=7&ref='+document.location, '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');">任务秘书免费帮您发布</a> </div>
				<div class="atachp clearfix">
					<div class="f_l"><span class="tac_cio_1"></span></div>
					<div class="f_l"> 全国免长途电话：<br>
						<strong class="font16 font_yh">4006-999-467</strong> </div>
				</div>
				<div class="atachp clearfix">
					<div class="f_l"><span class="tac_cio_2"></span></div>
					<div class="f_l"> 全国免长途电话：<br>
						<strong>4006-999-467</strong> </div>
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
					<dd> <img width="88" height="88" src="images/task/appstore.jpg"> <span>iPhone</span></dd>
					<dd> <img width="88" height="88" src="images/task/android.jpg"> <span>Android</span></dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<br>
	<br>
</div>
<?php include('hezhuoban.html')?>
<?php include('helpfoot.html')?>
<?php include 'footer.html'; ?>
<!--页面的单独调用的JS--> 
<script src="js/release.js"></script> 
<script>
var xyq = "ec7f50291c56be98b3aaa08d761cccf006b71915";//再次登录后XYQ会变化，是服务器端传递的数值。
$(function(){
In('tipsy',function(){
$('.clas_tips').tipsy({gravity: 's',opacity: 1,html:true});
})	
})
</script>
</body>
</html>