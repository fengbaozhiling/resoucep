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
		<div class="iask_left">
			<div class="iask">
				<div class="iask_ask_top">
					<input id="tem" name="tem" type="hidden" value="0"/>
					<a href="javascript:void(0)" onclick="collectQ('wenba',9410,1)" id="collectGive" class="addFavor">收藏问题</a>
					<div class="s0"> <span class="ask_icon"></span>
						<h1 class="ask_subject">如何布置家居好风水 提升情人节桃花运</h1>
					</div>
					<div class="ask_content"> <span class="ask_bc">问题补充: 我要不要说详细一点，写出生辰八字什么的，要不用现在比较流行的星座吧，我是个金牛座。</span> </div>
					<div class="a_status"> <span>提问者：<a href="http://www.xtuan.com/user/107212/" title="妳是我的誰">妳是我的誰</a> </span> <span>地址：厦门</span> <span class="answer_nums">4回答</span> <span>浏览次数：445</span> <span>提问时间：
						一个月前 </span> </div>
				</div>
				<!--回答问题 开始 --> 
				<div class="answer_editor">
					<div class="my_tit"><tt>我来回答</tt></div>
					<form id="answerSubmit" name="form1" method="post" action="?controller=wenba/answer" enctype="multipart/form-data"
									  onsubmit="return $('#answerSubmit').ajaxForm({'callback':questionSubmitCallback});">
						<div class="info_top">
							<div class="picdiv">
								<div class="picdiv">
									<input type="file" class="file" name="upload" id="upload">
								</div>
								<div id="add_answer_image">
									<div class="render_image_list" style="float:left;display:none;"> <img class="render_img" style="width:80px;height:80px;"
														 src="" border="0"/>
										<input name="pictures[]" type="hidden" value=""/>
									</div>
								</div>
							</div>
						</div>
						<textarea onkeyup="keyUpTip(this,1500)" class="answer_content" name="answer_content"
											  placeholder="答案尽可能详细、准确、有效，尽可能使用自己组织的语言，大量复制网上的已有的内容，答案将被删除并扣除所得积分"></textarea>
						<div class="submitbar"> <span class="tips" id="fontNumb">您还可以输入<span class="num">1500</span>字</span> <span id="tips" style="visibility: hidden;color: red; float:left;">您还没有输入任何答案</span>
							<input type="button" value="提交答案" class="answer_smt" name="answersmt">
							<input type="submit" style="display: none" id="subBtn"/>
							<input type="hidden" value="31409" name="questionID"/>
						</div>
					</form>
				</div>
				<!--回答问题 结束 --> 
				<!--有最佳答案,禁止回答 --> 
				<!--有最佳答案-->
				<div class="accept"  style="display:none;">
					<div class="title">提问者采纳</div>
					<div class="content">　　客厅颜色：红色聚能量 <br>
						<br>
						稳重诚恳的金牛座，务实与重视经济使他们的特质，他们强调自己所拥有的东西。因此，象征了物质、性与生活态度的红色，就成了金牛座的色彩能量了，同时红色作为主色调布置客厅也能提升金牛座的桃花运。 <br>
						<br>
						客厅家具：白色沙发显气质 <br>
						<br>
						对于客厅装修，保守的金牛座比较钟情于白色的家具，如白色沙发。白色代表他们的声明能量。另外，金牛座的人比较喜欢木制品，如木制的博古架、摆设柜等，这些都能增强金牛座的清雅气质。让他们在被人的严重散发出成熟的魅力。 <br>
						<br>
						客厅布置：窗户必须够大 <br>
						<br>
						金牛座的人客厅窗户必须要足够大，大的窗户才能为他们找来更多的运气。尤其是对感情比较固执的金牛，必须增加家居的运气，才能帮助他们聚集更多的能量，赢得爱情。</div>
					<div class="author">
						<div class="avatar"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20120913/1347506324_100x100.jpg"
								width="50" height="50" style="margin-left: 0px; margin-top: 0px;" alt="福清世纪精工装饰装潢有限公司"/>
							<div class="tip_best_qdb" style="display:none;">
								<div class="tip_left_qdb">
									<div class="tip_photo_qdb"> <a href="http://fq.xtuan.com/13380/" title="福清世纪精工装饰装潢有限公司" target="_blank"> <img src="http://wenba.xtuan.com/upload/decoration/logo/20120913/1347506324_100x100.jpg" width="67" height="67" style="margin-left: 0px; margin-top: 0px;"> </a> <a href="javascript:;" class="askhelp" rel="nofollow">向他求助</a> </div>
								</div>
								<div class="tip_right_qdb">
									<p> <a href="http://fq.xtuan.com/13380/" target="_blank" rel="nofollow">福清世纪精工装饰装潢有限公司</a> </p>
									<!--<p>等级6</p>--> 
									<!--<p>所在城市：深圳</p>-->
									<p>所有回答：2</p>
								</div>
							</div>
						</div>
						<div class="info">
							<div class="name"> <a href="http://fq.xtuan.com/13380/" target="_blank" rel="nofollow">福清世纪精工装饰装潢有限公司</a> </div>
							<div class="ratio">采纳率：<span class="percent">100%</span></div>
						</div>
						<div class="sign">
							<div class="time"><span class="num">2014-02-08 14:15:47</span></div>
							<a class="xttw" href="javascript:showComment(17821);"><span class="comment">评论(<span id="allnums_10660">0</span>)</span></a>
							<a title="向他提问" class="xttw" type="1" alt="164482" onclick="askHelp(this)" href="javascript:;">向他提问</a>
						</div>
						<div class="comment-area-inner" id="showComment_17821">
							<div class="comment-editor">
								<textarea id="content" class="comment17821" placeholder="请填写您的评论"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="comentMsg17821" style="color: red;display: none">请填您的评论</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17821);" rel="nofollow">取消</a>
									<input type="button"  data-conid="17821"  alt="17821" name="comment" onclick="addComment(this,2,17821)" value="提交">
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!--有最佳答案 结束-->
				<!--问答正在进行中-->
				<div class="answer_editor" style="display:none;">
					<form id="answerSubmit" name="form1" method="post" action="" enctype="multipart/form-data"  onsubmit="return $('#answerSubmit').ajaxForm({'callback':questionSubmitCallback});">
						<textarea onkeyup="keyUpTip(this,255)" class="answer_content" name="answer_content" placeholder="请填写您要补充的问题,请尽量写的详细,以便他人快速回答您的问题"></textarea>
						<div class="submitbar">
							<span id="tips" style="visibility: hidden;color: red">您还没有输入任何字符</span>
							<span class="tips" id="fontNumb">您还可以输入<span class="num">255</span>字</span>
							<input type="button" value="问题补充" class="answer_smt" name="answersmt">
							<input type="submit" style="display: none" id="subBtn"/>
							<input type="hidden" value="31386" name="questionID"/>
						</div>
					</form>
				</div>
				<!--问答正在进行中 结束-->
			</div>
			<div class="clear mt_20"></div>
			<div class="ianswer_list">
				<div class="list_title">
					<h2>全部回答</h2>
				</div>
				<ul>
					<li> <a href="javascript:void(0);" alt="258400" type="1" class="a_xttw" onclick="askHelp(this)">向他提问</a>
						<div class="photo"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg"                            width="50" height="50" alt="华韵装饰">
							<div class="tip_answer_qdb">
								<div class="tip_left_qdb">
									<div class="tip_photo_qdb"> <a href="http://qy.xtuan.com/48778/"
										   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg"
																							width="67" height="67" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
								</div>
								<div class="tip_right_qdb">
									<p> <a href="http://qy.xtuan.com/48778/"
										   target="_blank" rel="nofollow">清远市华韵装饰设计有限公司</a> </p>
									<!--<p>等级4</p>-->
									<p>所在城市：清远</p>
									<p>所有回答：1</p>
								</div>
							</div>
						</div>
						<div class="info">
							<div class="info_top"> <a class="name"
								   href="http://qy.xtuan.com/48778/"
								   title="清远市华韵装饰设计有限公司" target="_blank">清远市华韵装饰设计有限公司</a> <span class="time">2014-02-08 11:54:27</span> </div>
							<div class="content"> </div>
						</div>
						<div class="clear"></div>
						<div class="sbox_answer"> <i></i>
							<div class="sbox_ask"> 桌子摆在西北方能给你带来的桃花运，也会给家人带来吉祥，因为客厅的西北方位属土，有助运催化的作用。 </div>
							<div class="sbox_btn">
								<div class="sbox_btn_fr">
									<a class="xttw" href="javascript:showComment(17815);">评论(<b>0</b>)</a> 
									<a class="xttw" href="">设为最佳答案</a> 
									<a class="xttw" href="javascript:showAnswer(17815)">追问</a> 
								</div>
							</div>
							
						</div>
						
						<div class="comment-area-inner" id="showComment_17815">
							<div class="comment-editor">
								<textarea id="content" class="comment17815" placeholder="请填写您的评论"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="comentMsg17815" style="color: red;display: none">请填您的评论</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17815);" rel="nofollow">取消</a>
									<input type="button"  data-conid="17815" alt="17815" name="comment" onclick="addComment(this,2,17815)" value="提交">
								</div>
							</div>
						</div>
						
						
						<div class="ansereply">
							<div class="f_l pr_10 pt_5"> <a href="http://qy.xtuan.com/48778/"
								   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg" width="30" height="30" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
							<div class="pl_x">
								桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运
							</div>
						</div>
						<div class="ansereply">
							<div class="f_l pr_10 pt_5"> <a href="http://qy.xtuan.com/48778/"
								   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg" width="30" height="30" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
							<div class="pl_x">
								桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运
							</div>
						</div>
						<div class="ansereply">
							<div class="f_l pr_10 pt_5"> <a href="http://qy.xtuan.com/48778/"
								   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg" width="30" height="30" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
							<div class="pl_x">
								桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运
							</div>
						</div>
						<div class="ansereply">
							<div class="f_l pr_10 pt_5"> <a href="http://qy.xtuan.com/48778/"
								   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20140122/19380654135_100x100.jpg" width="30" height="30" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
							<div class="pl_x">
								桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运桌子摆在西北方能给你带来的桃花运
							</div>
						</div>
						
						<div class="comment-area-inner" id="showAnswer_17815">
							<div class="comment-editor">
								<textarea id="content" name="content17815" placeholder="请填写您要追问的问题"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="altMsg17815" style="color: red;display: none">请填写您要追问的问题</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17815);" rel="nofollow">取消</a>
									<input type="button" alt="17815" name="askTwo" value="提交">
								</div>
							</div>
							<div class="comment-body">
								<div class="comment_fenye_qdb"></div>
							</div>
						</div>
					</li>
					<li> <a href="javascript:void(0);" alt="124554" type="1" class="a_xttw" onclick="askHelp(this)">向他提问</a>
						<div class="photo"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20121025/1351132077_100x100.jpg"                            width="50" height="50" alt="宿迁金蝉装饰">
							<div class="tip_answer_qdb">
								<div class="tip_left_qdb">
									<div class="tip_photo_qdb"> <a href="http://sq.xtuan.com/15581/"
										   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20121025/1351132077_100x100.jpg"
																							width="67" height="67" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
								</div>
								<div class="tip_right_qdb">
									<p> <a href="http://sq.xtuan.com/15581/"
										   target="_blank" rel="nofollow">苏州金蝉装饰宿迁别墅设计馆</a> </p>
									<!--<p>等级4</p>-->
									<p>所在城市：宿迁</p>
									<p>所有回答：2</p>
								</div>
							</div>
						</div>
						<div class="info">
							<div class="info_top"> <a class="name"
								   href="http://sq.xtuan.com/15581/"
								   title="苏州金蝉装饰宿迁别墅设计馆" target="_blank">苏州金蝉装饰宿迁别墅设计馆</a> <span class="time">2014-02-08 15:38:56</span> </div>
							<div class="content"> </div>
						</div>
						<div class="clear"></div>
						<div class="sbox_answer"> <i></i>
							<div class="sbox_ask"> 卧室布置可以放一些翠桃花，引渡女性的情感，在桃花位放一个瓷瓶放3—4只花，也可以放一些画，喜欢的男性的画。 </div>
							<div class="sbox_btn">
								<div class="sbox_btn_fr"> <a href="javascript:showComment(17827);">评论(<b>0</b>)</a> 
									<!--<a href="#">没有帮助</a>--> 
									<!--<a href="#">感谢</a>--> 
								</div>
							</div>
						</div>
						<div class="comment-area-inner" id="showComment_17827">
							<div class="comment-editor">
								<textarea id="content" class="comment17827" placeholder="请填写您的评论"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="comentMsg17827" style="color: red;display: none">请填您的评论</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17827);" rel="nofollow">取消</a>
									<input type="button"  data-conid="17827" alt="17827" name="comment" onclick="addComment(this,2,17827)" value="提交">
								</div>
							</div>
						</div>
						<div class="comment-area-inner" id="showAnswer_17827">
							<div class="comment-editor">
								<textarea id="content" name="content17827" placeholder="请填写您要追问的问题"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="altMsg17827" style="color: red;display: none">请填写您要追问的问题</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17827);" rel="nofollow">取消</a>
									<input type="button" alt="17827" name="askTwo" value="提交">
								</div>
							</div>
							<div class="comment-body">
								<div class="comment_fenye_qdb"></div>
							</div>
						</div>
					</li>
					<li> <a href="javascript:void(0);" alt="124554" type="1" class="a_xttw" onclick="askHelp(this)">向他提问</a>
						<div class="photo"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20121025/1351132077_100x100.jpg"                            width="50" height="50" alt="宿迁金蝉装饰">
							<div class="tip_answer_qdb">
								<div class="tip_left_qdb">
									<div class="tip_photo_qdb"> <a href="http://sq.xtuan.com/15581/"
										   target="_blank"> <img  src="http://wenba.xtuan.com/upload/decoration/logo/20121025/1351132077_100x100.jpg"
																							width="67" height="67" style="margin-left: 0px;margin-top: 0px;"> </a> </div>
								</div>
								<div class="tip_right_qdb">
									<p> <a href="http://sq.xtuan.com/15581/"
										   target="_blank" rel="nofollow">苏州金蝉装饰宿迁别墅设计馆</a> </p>
									<!--<p>等级4</p>-->
									<p>所在城市：宿迁</p>
									<p>所有回答：2</p>
								</div>
							</div>
						</div>
						<div class="info">
							<div class="info_top"> <a class="name"
								   href="http://sq.xtuan.com/15581/"
								   title="苏州金蝉装饰宿迁别墅设计馆" target="_blank">苏州金蝉装饰宿迁别墅设计馆</a> <span class="time">2014-02-08 16:02:33</span> </div>
							<div class="content"> </div>
						</div>
						<div class="clear"></div>
						<div class="sbox_answer"> <i></i>
							<div class="sbox_ask"> 咳咳，星座不懂，不够有个人人适用的法子。 <br>
								在客厅的角落，养几尾红色或粉红色系的鱼，这些每天在你们面前游来游去的鱼，就是增强爱情的催化剂。 <br>
								不过要注意，鱼缸不能摆放在正冲大门的位置。 </div>
							<div class="sbox_btn">
								<div class="sbox_btn_fr"> <a href="javascript:showComment(17829);">评论(<b>0</b>)</a> 
									<!--<a href="#">没有帮助</a>--> 
									<!--<a href="#">感谢</a>--> 
								</div>
							</div>
						</div>
						<div class="comment-area-inner" id="showComment_17829">
							<div class="comment-editor">
								<textarea id="content" class="comment17829" placeholder="请填写您的评论"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="comentMsg17829" style="color: red;display: none">请填您的评论</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17829);" rel="nofollow">取消</a>
									<input type="button"  data-conid="17829" alt="17829" name="comment" onclick="addComment(this,2,17829)" value="提交">
								</div>
							</div>
						</div>
						<div class="comment-area-inner" id="showAnswer_17829">
							<div class="comment-editor">
								<textarea id="content" name="content17829" placeholder="请填写您要追问的问题"></textarea>
							</div>
							<div class="comment-action-bar">
								<p>6万装修公司&nbsp;&nbsp;&nbsp;&nbsp;7万设计师&nbsp;&nbsp;&nbsp;&nbsp;10万装修雇主帮您解答&nbsp;&nbsp;&nbsp;&nbsp; <span id="altMsg17829" style="color: red;display: none">请填写您要追问的问题</span></p>
								<div class="comment-action"> <a href="javascript:showComment(17829);" rel="nofollow">取消</a>
									<input type="button" alt="17829" name="askTwo" value="提交">
								</div>
							</div>
							<div class="comment-body">
								<div class="comment_fenye_qdb"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clear mt_20"></div>
			<div class="ask_more_typelist">
				<div class="start_title">
					<h2>问题分类</h2>
				</div>
				<dl>
					<dt><a href="/jiazhuangsheji/">家装设计</a></dt>
					<dd>
						<ul>
							<li><a  title="装修风格" href="/zhuangxiufengge/"  >装修风格</a></li>
							<li><a  title="装修公司" href="/zhuangxiugongsi/"  class="on" >装修公司</a></li>
							<li><a  title="装修风水" href="/zhuangxiufengshui/"  >装修风水</a></li>
							<li><a  title="玄关" href="/xuanguan/"  >玄关</a></li>
							<li><a  title="过道" href="/guodao/"  >过道</a></li>
							<li><a  title="卧室" href="/woshi/"  >卧室</a></li>
							<li><a  title="书房" href="/shufang/"  >书房</a></li>
							<li><a  title="客厅" href="/keting/"  >客厅</a></li>
							<li><a  title="餐厅" href="/canting/"  >餐厅</a></li>
							<li><a  title="厨房" href="/chufang/"  >厨房</a></li>
							<li><a  title="阳台" href="/yangtai/"  >阳台</a></li>
							<li><a  title="花园" href="/huayuan/"  >花园</a></li>
							<li><a  title="卫生间" href="/weishengjian/"  >卫生间</a></li>
							<li><a  title="儿童房" href="/ertongfang/"  >儿童房</a></li>
							<li><a  title="衣帽间" href="/yimaojian/"  >衣帽间</a></li>
							<li><a  title="别墅" href="/bieshu/"  >别墅</a></li>
							<li><a  title="小户型" href="/xiaohuxing/"  >小户型</a></li>
							<li><a  title="二手房装修" href="/ershoufangzhuangxiu/"  >二手房装修</a></li>
							<li><a  title="复式" href="/fushi/"  >复式</a></li>
							<li><a  title="样板间" href="/yangbanjian/"  >样板间</a></li>
							<li><a  title="装饰柜" href="/zhuangshigui/"  >装饰柜</a></li>
							<li><a  title="其他" href="/qita703/"  >其他</a></li>
						</ul>
					</dd>
				</dl>
				<div class="index_top clearfix">
					<span class="c999">提出您的问题，5分钟就有人解答</span>
					<br>
					<div class="ask">
						<a href="/all/" target="_blank" title="我要回答" class="a_huida">我 要 回 答</a> <a href="/ask/" title="我要提问"  target="_blank" class="a_tiwen">我 要 提 问</a>
						<form id="questionSubmit" name="form1" method="post" action="?controller=wenba/ask&controllerAction=save" onsubmit="if(!checkLogin()){return false; }return $('#questionSubmit').ajaxForm({'callback':questionSubmitCallback});">
							<div class="ask_textdiv">
								<textarea class="ask_textarea" maxlength="50" name="title" placeholder="在此输入您的装修问题,十万专业设计师帮您解答"></textarea>
							</div>
							<div class="ask_bottom">
								<div class="ask_fenlei">
									<div class="f_l"> 
										问题分类
										<select name="g_id" id="g_id" title="请选择频道"  onchange="showIndusP(this.value)">
											<option value="0" selected="selected">请选择频道</option>
											<option value="1" >设计</option>
											<option value="2" >开发</option>
											<option value="3" >文案</option>
											<option value="4">装修</option>
											<option value="5" >营销</option>
											<option value="6" >商务</option>
											<option value="7" >生活</option>
										</select>
										<select name="indus_pid" id="indus_pid" title="请选择分类"  onchange="showIndus(this.value)">
											<option class="p_0" value="0" selected="selected">请选择分类</option>
											<option class="p_1"  value="2143">商标/VI设计</option>
											<option class="p_1"  value="2145">宣传品设计</option>
											<option class="p_1"  value="1284">服装设计</option>
											<option class="p_1"  value="64">应用设计</option>
											<option class="p_1"  value="99">照片处理</option>
											<option class="p_1"  value="2158">书籍装帧</option>
											<option class="p_1"  value="1277">动漫设计</option>
											<option class="p_1"  value="2185">网页设计</option>
											<option class="p_1"  value="69">多媒体设计</option>
											<option class="p_1"  value="1275">卡片设计</option>
											<option class="p_2"  value="1287">网站开发</option>
											<option class="p_2"  value="71">软件开发</option>
											<option class="p_2"  value="101">网游服务</option>
											<option class="p_2"  value="1858">移动应用开发</option>
											<option class="p_3"  value="61">起名取名</option>
											<option class="p_3"  value="59">文案写作</option>
											<option class="p_3"  value="104">创意祝福</option>
											<option class="p_3"  value="1123">策划</option>
											<option class="p_3"  value="2240">歌词</option>
											<option class="p_4"  value="2189">家居装修</option>
											<option class="p_4"  value="2202">建筑装修</option>
											<option class="p_4"  value="2219">建筑设计</option>
											<option class="p_4"  value="2216">软装设计</option>
											<option class="p_4"  value="2198">定制家居</option>
											<option class="p_4"  value="2228">其他装修</option>
											<option class="p_5"  value="2162">网络营销</option>
											<option class="p_5"  value="119">微博营销</option>
											<option class="p_5"  value="67">网店服务</option>
											<option class="p_6"  value="2011">翻译</option>
											<option class="p_6"  value="2027">市场调查</option>
											<option class="p_6"  value="2023">法律</option>
											<option class="p_6"  value="1996">商业服务</option>
											<option class="p_6"  value="2032">求职招聘</option>
											<option class="p_7"  value="2041">网络钟点工</option>
											<option class="p_7"  value="2055">旅游服务</option>
											<option class="p_7"  value="2070">文化艺术服务</option>
											<option class="p_7"  value="2076">印刷出版</option>
											<option class="p_7"  value="2084">影音服务</option>
											<option class="p_7"  value="2100">广告会展</option>
											<option class="p_7"  value="2104">婚庆</option>
											<option class="p_7"  value="2116">家教</option>
											<option class="p_7"  value="2122">家政</option>
											<option class="p_7"  value="2130">搬家</option>
											<option class="p_7"  value="2138">咨询</option>
										</select>
										<select name="indus_id" id="indus_id">
											<option  class="c_0" value="0" selected="selected">请选择子分类</option>
											<option class="c_1123"  value="2238">婚庆策划</option>
											<option class="c_1277"  value="2164">动漫办公用品设计</option>
											<option class="c_1277"  value="2174">动漫日用品设计</option>
											<option class="c_1277"  value="2175">个人表情设计</option>
											<option class="c_2240"  value="2241">歌词谱曲</option>
											<option class="c_2240"  value="2242">歌词创作</option>
											<option class="c_2027"  value="2028">问卷调查</option>
											<option class="c_2027"  value="2030">意见建议</option>
											<option class="c_1996"  value="1997">商标注册</option>
											<option class="c_1996"  value="1998">公司注册</option>
											<option class="c_1996"  value="1999">专利申请</option>
											<option class="c_1996"  value="2000">商标转让</option>
											<option class="c_1996"  value="2009">税务登记</option>
											<option class="c_2027"  value="2029">征集点子</option>
											<option class="c_2122"  value="2253">涉外家政</option>
											<option class="c_1996"  value="2004">验资</option>
											<option class="c_1996"  value="2005">评估</option>
											<option class="c_1996"  value="2006">财务审计</option>
											<option class="c_2032"  value="2035">简历设计</option>
											<option class="c_2041"  value="2047">数据录入</option>
											<option class="c_2041"  value="2048">排队</option>
											<option class="c_2041"  value="2051">代缴费</option>
											<option class="c_2041"  value="2052">捧场</option>
											<option class="c_2041"  value="2053">接送</option>
											<option class="c_2055"  value="2058">包车服务</option>
											<option class="c_2055"  value="2059">自驾旅游</option>
											<option class="c_69"  value="1111">3d模型及CAD</option>
											<option class="c_59"  value="1126">宣传文案</option>
											<option class="c_61"  value="1139">公司起名</option>
											<option class="c_2162"  value="1143">论坛推广</option>
											<option class="c_67"  value="1147">店标设计</option>
											<option class="c_2158"  value="1153">封面设计</option>
											<option class="c_64"  value="1253">包装设计</option>
											<option class="c_71"  value="1304">程序开发</option>
											<option class="c_2145"  value="1310">宣传册页</option>
											<option class="c_1277"  value="1311">卡通形象设计</option>
											<option class="c_99"  value="1437">照片变卡通</option>
											<option class="c_101"  value="1470">游戏代练</option>
											<option class="c_104"  value="1486">感恩回馈</option>
											<option class="c_1858"  value="1860">IOS应用</option>
											<option class="c_2011"  value="2012">英语</option>
											<option class="c_2023"  value="2024">写法律文书</option>
											<option class="c_2032"  value="2033">求职</option>
											<option class="c_2041"  value="2042">网络投票</option>
											<option class="c_2055"  value="2056">酒店预订</option>
											<option class="c_2070"  value="2071">文艺创作</option>
											<option class="c_2076"  value="2077">书、报、刊出版</option>
											<option class="c_2084"  value="2085">制作与发行</option>
											<option class="c_2100"  value="2101">会议服务</option>
											<option class="c_2104"  value="2105">婚庆公司</option>
											<option class="c_2116"  value="2117">学前辅导</option>
											<option class="c_2122"  value="2123">保洁</option>
											<option class="c_2130"  value="2131">住宅搬家</option>
											<option class="c_2138"  value="2139">心理咨询</option>
											<option class="c_2143"  value="2144">LOGO设计</option>
											<option class="c_1284"  value="2150">服饰设计</option>
											<option class="c_1275"  value="2177">会员卡设计</option>
											<option class="c_119"  value="2180">产品推广</option>
											<option class="c_2185"  value="2186">整站网页设计</option>
											<option class="c_2189"  value="2190">新房装修</option>
											<option class="c_2198"  value="2199">定制衣柜设计</option>
											<option class="c_1287"  value="2203">综合性网站</option>
											<option class="c_2202"  value="2206">办公商铺装修</option>
											<option class="c_2216"  value="2217">软装搭配</option>
											<option class="c_2228"  value="2229">装修监理</option>
											<option class="c_1123"  value="2234">宣传策划</option>
											<option class="c_2185"  value="1104">网站模板设计</option>
											<option class="c_69"  value="1109">动画FLASH</option>
											<option class="c_2143"  value="1118">VI设计</option>
											<option class="c_71"  value="1135">软件美工</option>
											<option class="c_61"  value="1142">品牌起名</option>
											<option class="c_67"  value="1149">网店取名</option>
											<option class="c_64"  value="1276">产品外观设计</option>
											<option class="c_2158"  value="1279">插画设计</option>
											<option class="c_2162"  value="1299">QQ群推广</option>
											<option class="c_59"  value="1307">产品文案</option>
											<option class="c_2145"  value="1312">招牌设计</option>
											<option class="c_99"  value="1438">老照片翻新</option>
											<option class="c_101"  value="1466">代写攻略</option>
											<option class="c_104"  value="1480">生日祝福</option>
											<option class="c_1284"  value="1634">T恤设计</option>
											<option class="c_1275"  value="2178">卡片制作</option>
											<option class="c_1858"  value="1859">Android应用</option>
											<option class="c_2011"  value="2013">日语</option>
											<option class="c_2023"  value="2025">法律咨询</option>
											<option class="c_2032"  value="2034">招聘</option>
											<option class="c_2041"  value="2043">网络兼职</option>
											<option class="c_2055"  value="2057">预订票</option>
											<option class="c_2070"  value="2072">文艺表演</option>
											<option class="c_2076"  value="2078">书、报、刊制作</option>
											<option class="c_2084"  value="2086">广告配音</option>
											<option class="c_2100"  value="2102">广告业</option>
											<option class="c_2104"  value="2106">婚车租赁</option>
											<option class="c_2116"  value="2118">小学辅导</option>
											<option class="c_2122"  value="2124">月嫂</option>
											<option class="c_2138"  value="2140">移民咨询</option>
											<option class="c_1277"  value="2160">视频动画制作</option>
											<option class="c_119"  value="2181">活动推广</option>
											<option class="c_2189"  value="2192">施工图设计</option>
											<option class="c_2198"  value="2200">定制橱柜设计</option>
											<option class="c_1287"  value="2204">资讯型网站</option>
											<option class="c_2202"  value="2207">自建房装修</option>
											<option class="c_2216"  value="2218">软装配饰</option>
											<option class="c_2219"  value="2223">小区规划</option>
											<option class="c_2228"  value="2230">风水咨询</option>
											<option class="c_1123"  value="2235">活动策划</option>
											<option class="c_69"  value="1112">广告片制作</option>
											<option class="c_71"  value="1133">插件开发</option>
											<option class="c_61"  value="1138">宝宝起名</option>
											<option class="c_67"  value="1148">店招设计</option>
											<option class="c_1277"  value="1154">四格漫画设计</option>
											<option class="c_2158"  value="1155">排版设计</option>
											<option class="c_2216"  value="1261">形象墙设计</option>
											<option class="c_64"  value="1280">图片编辑</option>
											<option class="c_1275"  value="1282">贺卡设计</option>
											<option class="c_2145"  value="1314">横幅设计</option>
											<option class="c_2219"  value="1373">房屋建筑设计</option>
											<option class="c_99"  value="1439">照片修复与合成</option>
											<option class="c_101"  value="1464">剧情策划</option>
											<option class="c_104"  value="1481">爱情表白</option>
											<option class="c_1858"  value="1861">IPAD应用</option>
											<option class="c_2011"  value="2014">韩语</option>
											<option class="c_2023"  value="2026">聘请律师</option>
											<option class="c_2041"  value="2044">网上代购</option>
											<option class="c_2070"  value="2073">经纪代理</option>
											<option class="c_2076"  value="2079">书、报、刊发行</option>
											<option class="c_2084"  value="2087">动画配音</option>
											<option class="c_2100"  value="2103">展会服务</option>
											<option class="c_2104"  value="2107">婚庆酒店</option>
											<option class="c_2116"  value="2119">初中辅导</option>
											<option class="c_2122"  value="2125">保姆</option>
											<option class="c_2130"  value="2133">办公室搬家</option>
											<option class="c_2138"  value="2141">理财咨询</option>
											<option class="c_1284"  value="2151">工作服设计</option>
											<option class="c_2162"  value="2168">网站推广</option>
											<option class="c_59"  value="2232">商业文案</option>
											<option class="c_119"  value="2182">店铺推广</option>
											<option class="c_2185"  value="2188">网站标志设计</option>
											<option class="c_2189"  value="2193">效果图制作</option>
											<option class="c_2198"  value="2201">定制家具设计</option>
											<option class="c_1287"  value="2205">团购网站</option>
											<option class="c_2202"  value="2208">样板间设计</option>
											<option class="c_2228"  value="2231">其他装修</option>
											<option class="c_1123"  value="2236">广告策划</option>
											<option class="c_2032"  value="2038">找客户</option>
											<option class="c_2143"  value="2297">商标设计</option>
											<option class="c_2185"  value="1103">网站广告设计</option>
											<option class="c_1275"  value="1119">名片设计</option>
											<option class="c_59"  value="1125">写剧本脚本</option>
											<option class="c_67"  value="1150">网店模板</option>
											<option class="c_2145"  value="1274">台历设计</option>
											<option class="c_64"  value="1285">文具设计</option>
											<option class="c_1287"  value="1288">电子商务网站</option>
											<option class="c_2162"  value="1298">博客推广</option>
											<option class="c_69"  value="1320">三维设计</option>
											<option class="c_2219"  value="1374">园林景观</option>
											<option class="c_99"  value="1440">照片美化</option>
											<option class="c_101"  value="1463">版本设计</option>
											<option class="c_104"  value="1482">圣诞祝福</option>
											<option class="c_2143"  value="1636">按钮图标设计</option>
											<option class="c_61"  value="1641">店铺起名</option>
											<option class="c_71"  value="1867">软件汉化</option>
											<option class="c_2011"  value="2015">俄语</option>
											<option class="c_2027"  value="2031">电话调查</option>
											<option class="c_2032"  value="2036">寻人</option>
											<option class="c_2041"  value="2045">网络模特</option>
											<option class="c_2070"  value="2074">文化活动组织</option>
											<option class="c_2076"  value="2080">自费出书</option>
											<option class="c_2084"  value="2088">童声配音</option>
											<option class="c_2104"  value="2108">彩妆造型</option>
											<option class="c_2116"  value="2120">高中辅导</option>
											<option class="c_2122"  value="2126">钟点工</option>
											<option class="c_2130"  value="2134">起重吊装</option>
											<option class="c_2138"  value="2142">命理测算</option>
											<option class="c_1284"  value="2152">图案设计</option>
											<option class="c_2158"  value="2159">电子书制作</option>
											<option class="c_1277"  value="2163">漫画设计</option>
											<option class="c_119"  value="2183">新品促销</option>
											<option class="c_2189"  value="2191">别墅设计</option>
											<option class="c_2202"  value="2211">酒店会所装潢</option>
											<option class="c_1123"  value="2237">影视策划</option>
											<option class="c_1858"  value="2298">微信公众平台开发</option>
											<option class="c_2185"  value="1106">网站动画设计</option>
											<option class="c_71"  value="1134">脚本制作</option>
											<option class="c_61"  value="1141">成人起名</option>
											<option class="c_64"  value="1152">电路设计</option>
											<option class="c_2143"  value="1278">字体设计</option>
											<option class="c_59"  value="1308">编辑校对</option>
											<option class="c_69"  value="1321">音频制作</option>
											<option class="c_99"  value="1441">婚纱照美化</option>
											<option class="c_101"  value="1462">评测报告</option>
											<option class="c_104"  value="1483">新年祝福</option>
											<option class="c_2145"  value="1640">广告设计</option>
											<option class="c_67"  value="1646">网店策划</option>
											<option class="c_119"  value="1653">微博招聘</option>
											<option class="c_1858"  value="1864">手机游戏开发</option>
											<option class="c_1996"  value="2001">招商加盟</option>
											<option class="c_2011"  value="2016">法语</option>
											<option class="c_2032"  value="2037">找对象</option>
											<option class="c_2041"  value="2046">网店促销</option>
											<option class="c_2055"  value="2060">导游陪游</option>
											<option class="c_2070"  value="2075">文化活动策划</option>
											<option class="c_2076"  value="2081">企业内刊</option>
											<option class="c_2084"  value="2089">彩铃配音</option>
											<option class="c_2104"  value="2109">婚庆用品</option>
											<option class="c_2116"  value="2121">教育培训</option>
											<option class="c_2122"  value="2127">陪护工</option>
											<option class="c_2130"  value="2135">长途搬家</option>
											<option class="c_2162"  value="2169">软文发布</option>
											<option class="c_1275"  value="2179">名片制作</option>
											<option class="c_2189"  value="2196">二手房装修</option>
											<option class="c_2202"  value="2209">精装房设计</option>
											<option class="c_1287"  value="2213">宣传展示型网站</option>
											<option class="c_2219"  value="2224">庭院景观设计</option>
											<option class="c_2145"  value="1122">海报设计</option>
											<option class="c_71"  value="1136">软件测试</option>
											<option class="c_69"  value="1322">配音录音</option>
											<option class="c_99"  value="1442">电子相册</option>
											<option class="c_101"  value="1461">游戏试玩</option>
											<option class="c_104"  value="1484">道歉短信</option>
											<option class="c_64"  value="1635">工业设计</option>
											<option class="c_59"  value="1637">写演讲稿</option>
											<option class="c_2162"  value="1647">我要上团购</option>
											<option class="c_67"  value="1648">网店推广</option>
											<option class="c_119"  value="1650">微博模板设计</option>
											<option class="c_2185"  value="1744">网页美工设计</option>
											<option class="c_1996"  value="2002">工商年检</option>
											<option class="c_2011"  value="2017">德语</option>
											<option class="c_2055"  value="2061">路线预订</option>
											<option class="c_2076"  value="2082">版权交易</option>
											<option class="c_2084"  value="2090">创意配音</option>
											<option class="c_2104"  value="2110">司仪督导</option>
											<option class="c_2130"  value="2136">设备搬迁</option>
											<option class="c_1277"  value="2165">动漫其他</option>
											<option class="c_1275"  value="2176">其他设计</option>
											<option class="c_2189"  value="2195">手绘墙设计</option>
											<option class="c_2202"  value="2210">商场装修</option>
											<option class="c_1287"  value="2214">手机WAP网站</option>
											<option class="c_1858"  value="2220">应用软件开发</option>
											<option class="c_2219"  value="2225">雕塑设计</option>
											<option class="c_1123"  value="2239">会展策划</option>
											<option class="c_2202"  value="1113">办公装修设计</option>
											<option class="c_71"  value="1137">游戏开发</option>
											<option class="c_99"  value="1443">其它照片处理</option>
											<option class="c_1123"  value="1474">项目策划</option>
											<option class="c_104"  value="1485">纪念日祝福</option>
											<option class="c_67"  value="1649">宝贝描述</option>
											<option class="c_119"  value="1651">微博推广</option>
											<option class="c_1858"  value="1862">Windowsphone</option>
											<option class="c_1996"  value="2003">代理记账</option>
											<option class="c_2011"  value="2018">西班牙语</option>
											<option class="c_2032"  value="2039">找供应商</option>
											<option class="c_2055"  value="2062">旅行社</option>
											<option class="c_2076"  value="2083">印刷</option>
											<option class="c_2084"  value="2091">影视配音</option>
											<option class="c_2104"  value="2111">婚礼跟拍</option>
											<option class="c_2122"  value="2129">育婴师</option>
											<option class="c_2130"  value="2137">短途拉货</option>
											<option class="c_2145"  value="2146">海报印刷</option>
											<option class="c_64"  value="2156">礼品设计</option>
											<option class="c_2189"  value="2194">电视墙设计</option>
											<option class="c_1287"  value="2215">程序功能开发</option>
											<option class="c_59"  value="2233">征稿征文</option>
											<option class="c_2202"  value="1116">店面装修设计</option>
											<option class="c_59"  value="1124">广告语</option>
											<option class="c_1287"  value="1293">数据库设计</option>
											<option class="c_1123"  value="1476">征集创意</option>
											<option class="c_104"  value="1487">祝福喜得贵子</option>
											<option class="c_119"  value="1652">微博祝福</option>
											<option class="c_1858"  value="1863">Symbian应用</option>
											<option class="c_71"  value="1868">办公系统开发</option>
											<option class="c_2011"  value="2019">阿拉伯语</option>
											<option class="c_2032"  value="2040">找人脉</option>
											<option class="c_2041"  value="2049">宣传品代发</option>
											<option class="c_2055"  value="2063">旅游景区</option>
											<option class="c_2084"  value="2092">外语配音</option>
											<option class="c_2104"  value="2112">婚纱礼服</option>
											<option class="c_2145"  value="2147">标签设计</option>
											<option class="c_99"  value="2153">商品照处理</option>
											<option class="c_64"  value="2157">机械设计</option>
											<option class="c_2162"  value="2172">网络推广</option>
											<option class="c_67"  value="2187">网店装修</option>
											<option class="c_2189"  value="2197">智能家居系统规划</option>
											<option class="c_2189"  value="1114">家装设计</option>
											<option class="c_2202"  value="1115">展会设计</option>
											<option class="c_1277"  value="1252">QQ表情</option>
											<option class="c_59"  value="1259">撰写报告</option>
											<option class="c_64"  value="1281">ppt设计</option>
											<option class="c_1287"  value="1290">接口开发</option>
											<option class="c_2162"  value="1301">推广注册</option>
											<option class="c_104"  value="1488">祝福乔迁新居</option>
											<option class="c_71"  value="1869">程序修改</option>
											<option class="c_2011"  value="2020">其他语种</option>
											<option class="c_2041"  value="2050">买票</option>
											<option class="c_2084"  value="2093">方言配音</option>
											<option class="c_2104"  value="2113">婚纱摄影</option>
											<option class="c_2145"  value="2148">瓶型设计</option>
											<option class="c_99"  value="2154">艺术照处理</option>
											<option class="c_1858"  value="2221">应用汉化</option>
											<option class="c_2162"  value="1144">搜索引擎优化</option>
											<option class="c_59"  value="1258">写书</option>
											<option class="c_1287"  value="1291">服务器系统</option>
											<option class="c_104"  value="1489">其他</option>
											<option class="c_71"  value="1870">嵌入式</option>
											<option class="c_2011"  value="2021">同声传译</option>
											<option class="c_2055"  value="2065">度假村</option>
											<option class="c_2084"  value="2094">影视制作</option>
											<option class="c_2104"  value="2114">花艺设计</option>
											<option class="c_2145"  value="2149">背景墙设计</option>
											<option class="c_99"  value="2155">壁纸设计</option>
											<option class="c_2202"  value="2212">展会装修</option>
											<option class="c_2219"  value="2222">CBD规划设计</option>
											<option class="c_2162"  value="1145">发帖推广</option>
											<option class="c_59"  value="1691">百科撰写</option>
											<option class="c_71"  value="1872">桌面软件</option>
											<option class="c_1996"  value="2007">企业变更</option>
											<option class="c_2011"  value="2022">口译</option>
											<option class="c_2055"  value="2066">农家乐</option>
											<option class="c_2084"  value="2095">写剧本</option>
											<option class="c_2104"  value="2115">婚庆策划</option>
											<option class="c_2219"  value="2226">导视系统设计</option>
											<option class="c_59"  value="1477">撰写评论</option>
											<option class="c_71"  value="1871">多媒体软件</option>
											<option class="c_1996"  value="2008">会计代理</option>
											<option class="c_2055"  value="2067">旅行车</option>
											<option class="c_2084"  value="2096">影视广告</option>
											<option class="c_2162"  value="2173">邮件推广</option>
											<option class="c_2219"  value="2227">3D模型设计</option>
											<option class="c_71"  value="1873">其他软件开发</option>
											<option class="c_2041"  value="2054">陪购</option>
											<option class="c_2055"  value="2068">旅游船</option>
											<option class="c_2084"  value="2097">宣传片制作</option>
											<option class="c_1996"  value="2010">工商代办</option>
											<option class="c_2055"  value="2069">代购旅游纪念品</option>
											<option class="c_2084"  value="2098">后期制作</option>
											<option class="c_2084"  value="2099">微电影</option>
										</select>
									</div>
								</div>
								<div class="submit">
									<input type="submit" id="submitbtn" value="提交问题" title="提交问题">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clear mt_20"></div>
			<div class="ask_more_r">
				<div class="asktitle clearfix">
					<h2 class="title">相关问题</h2>
					<!--<a href="#" target="_blank" class="more">更多>></a>--> 
				</div>
				<ul class="questions">
					<li>
						<div class="tl"><a href="/q31330.html" target="_blank" title="什么是包清工？">什么是包清工？</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31299.html" target="_blank" title="卧室设计在西北面怎么样？">卧室设计在西北面怎么样？</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31383.html" target="_blank" title="怎么与装修工人相处">怎么与装修工人相处</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31376.html" target="_blank" title="什么是包工包料">什么是包工包料</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31345.html" target="_blank" title="面对面装饰公司师傅装修水平怎么样了">面对面装饰公司师傅装修水平怎么样了</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31344.html" target="_blank" title="原来精装修的房子局部改造，要求不破坏原来的木地板，可以实行否？">原来精装修的房子局部改造，要求不破坏原来的木地板，可以实行否？</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31336.html" target="_blank" title="样板房征集">样板房征集</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31330.html" target="_blank" title="什么是包清工？">什么是包清工？</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
					<li>
						<div class="tl"><a href="/q31299.html" target="_blank" title="卧室设计在西北面怎么样？">卧室设计在西北面怎么样？</a></div>
						<a href="">283692389</a>&nbsp;17秒钟前提问&nbsp;收到0回答&nbsp;<a class="button" href="">马上回答</a>
					</li>
				</ul>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="common hei">
			<div class="tags">
				<h2 class="title">用户还浏览了以下相关问题</h2>
				<ul class="tag">
					<li> <a href="/q9410.html" title="如何布置家居好风水 提升情人节桃花运">如何布置家居好风水 提升情人节桃花运</a>4回答</li>
					<li> <a href="/q11892.html" title="设计悬赏交易中雇主为什么要托管赏金呢？">设计悬赏交易中雇主为什么要托管赏金呢？</a>2回答</li>
				</ul>
			</div>
			<div class="mt_20"></div>
			<div class="zjtw">
				<h2 class="title">向装修专家快速提问</h2>
			</div>
			<div class="mt_20"></div>
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
			<div class="mt_20"></div>
			<div class="iapply_box_ask" id="iapply_box">
				<h2>免费获得3份方案</h2>
				<div class="submit_data">
					<form method="post" action="javascript:freeZhaoBiao()" id="freezhaobiao">
						<span id="error_t">请正确填写您的电话号码</span>
						<input  name="phone" type="text" id="phone" value="请填写您的手机号" onfocus="if(this.value == '请填写您的手机号') this.value = ''" onblur="if(this.value == '') this.value = '请填写您的手机号'">
						<button title="申请" type="submit"></button>
						<input type="hidden" name="type" id="type" value="1">
						<input name="returntype" id="returntype" type="hidden" value="alert">
					</form>
				</div>
				<p class="have_servce">至今已帮<strong>154794</strong>雇主提供服务</p>
			</div>
			<div class="mt_20"></div>
			<div class="right_ad"> <a target="_blank" href="http://www.xtuan.com/zt/zxb"> <img width="270" src="http://pic1.xtuan.com/upload/ad/20140328/14032584624.gif" alt="装修满意再付款" title="装修满意再付款"> </a></div>
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
