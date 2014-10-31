$(function(){
	In('rele_fast');
	In('tipsy',function(){
		$('a.file_type').tipsy({gravity: 's',opacity: 1,html:true});
	});
	In('ezChoose',function(){
		$(function() {
			$('#form_vip input[type="checkbox"]').ezChoose()
		});	
	});
	$("#tar_content").length>0 && In("xheditor",function(){
		EPWEIKE.editor = $("#tar_content").xheditor({tools:'Bold,FontSize,Fontface,FontColor,Italic,Underline,Fullscreen,Table,Preview,Strikethrough,Align,List,Outdent,Indent,Table',skin:'nostyle'}); 
	})
	$(function(){
		In("floatFollow",function(){
			var taskritbt=$(".taskritbt");
			var offsets=$(".taskritbt").offset();
			taskritbt.each(function(index, element) {
				var _this=$(this);
				_this.floatFollow({
					"left":offsets.left,
					"top":"0",
					"bottom":"auto",
					"closebar": true,
					"starheight":offsets.top,
					"callback":function(){
						_this.siblings('.closflow').css({'top':35});
						_this.find(".title_thit").css({'height':30,'line-height':30+'px'});
						$(window).scroll(function() {
							var scroH = $(this).scrollTop();
							if(scroH>=offsets.top){
								_this.removeClass('jiaogaofl');
								_this.find(".title_thit").show();
							} else if (scroH<offsets.top){
								_this.addClass("jiaogaofl");
								_this.find(".title_thit").hide();
							}
						})
					}
				});
			});
		})
	})
	//进度条
	;(function($){
		$.fn.setpbox = function(options) {
			options = options || {};
			var defaultOpt = {
				elments: options.elments || 'span',
				crent:options.crent || '.crent',
				callback:options.callback
			};
			elments=$(this).find(defaultOpt.elments);
			elments.css("display","block");
			thiswidth=$(this).width();
			return this.each(function() {
				setplent=elments.length;
				elments.css({
					width:thiswidth/setplent
				})
				elments.last().css({
					'margin-right':'auto'
				})
				defaultOpt.callback();
			})
		}
	})(jQuery);
	//调整步骤箭头显示
	$("#steptaks").setpbox({'callback':function(){
		var crent=$(".crentarrow");
		var crentIdex=$("#steptaks").find('span').index($('.crent'));
		if ($('.crent').length>0) {
			var crentposi=$('.crent').position().left+$('.crent').width()/2;
			crent.css({left:crentposi-10+"px"});
		} else {
			crent.hide();
		}
	}});
	//切换选项卡内容
	$(".nav_lists_nav a").bind("click",function(){
		var i=$(".nav_lists_nav a").index(this);
		$(".nav_lists_nav a").eq(i).addClass("selected").parent().siblings().find("a").removeClass("selected");
		$(".taskWorks").hide();
		if ((i-1)>=0) {
			$(".taskWorks:gt("+(i-1)+")").show();
		} else {
			$(".taskWorks").show();
		}
		return false;
	})

	//未登录遮住交稿部分
	if (typeof(uid)=="undefined"||isNaN(uid) || uid == 0) {
		if(ModelWeb){
			var unlogin_cover="<div class='unlogin_cover'><div class='con'><div class='inline'>您尚未登录，所以无法使用交稿功能，<a onClick=\"EPWEIKE.showin.showWindow('login',false, 'ajax/ajax_login.php',true);return false;\" class='button red' href='javascript:;'>立即登录</a><div class='t_r mt_10'><a class='c999' target='_blank' href='"+SITEURL+"/zt/APPS/android/'><span class='ico ico_phone'></span>下载APP，随时随地查看交易动态</a></div></div></div><div class='innerbg'></div></div>"
		}else{
			var login_str = '';
			if(TASKMODE=='mreward' || TASKMODE=='sreward' || TASKMODE=='preward'){
				login_str = "您需要先报名才能交稿，";
			}
			if(TASKMODE=='tender'){
				login_str = "您需要先登录才能投标，";
			}
			var unlogin_cover="<div class='unlogin_cover'><div class='con'><div class='inline'>"+login_str+"<a onClick=\"EPWEIKE.showin.showWindow('login',false, 'index.php?do=ajax&view=login',true);return false;\" class='button red' href='javascript:;'>立即登录</a><div class='t_r mt_10'><a class='c999' target='_blank' href='"+SITEURL+"/zt/APPS/android/'><span class='ico ico_phone'></span>下载APP，随时随地查看交易动态</a></div></div></div><div class='innerbg'></div></div>"
		}
		$("#submitwork").append(unlogin_cover);
	}
	//声明交稿的模块名
	In.adds({
		'charset':'utf-8',
		'modules':{
			'mreward_task':{path:cdn_resource(JSURL + "/js/task/mreward_task.js"),type:'js'},
			'preward_task':{path:cdn_resource(JSURL + "/js/task/preward_task.js"),type:'js'},
			'sreward_task':{path:cdn_resource(JSURL + "/js/task/sreward_task.js"),type:'js'},
			'tender_task':{path:cdn_resource(JSURL + "/js/task/tender_task.js"),type:'js'}
		}
	});
	
	//任务预览
	if(EPWEIKE.can_task_edit == 'preview' && $('.taskEdit').length > 0){
		In('showDialog','showDialog_css',function(){
			taskEdit();
		});
	}
	
	//交稿
	$(".workHand").bind('click',function(){
		var work_id = $(this).attr('work_id');
		workHand(work_id);
	});	

	//评价
	$('.mark').bind('click',function(){
		var url = $(this).attr('url');
		mark(url);
	});	

	//威客上传源文件
	$(".upload_bidsource").bind('click',function(){
		var t_id = $(this).attr('task_id');
		var work_id = $(this).attr('work_id');
		upload_bidsource(t_id,work_id);
	});	

	//查看源文件
	$(".loadsourceFile").bind('click',function(){
		loadsourceFile($(this).attr('work_id'));
	});

	//产权协议下载
	$(".protocol_window").bind('click',function(){
		protocol_window();
	});

	//确认付款
	$(".task_confirm_pay").bind('click',function(){
		task_confirm_pay();
	});

	//任务修改
	$(".taskEdit").bind('click',function(){
		taskEdit();
	});

	//加价延期
	$(".taskDelay").bind('click',function(){
		taskDelay();
	});

	//邀请人才
	$("#btn_invite").bind('click',function(){
		inviteHand(task_id);
	});

	//补充说明
	$(".taskReqedit").bind('click',function(){
		taskReqedit();
	});

	//申请开票
	$(".apply_invoice").bind('click',function(){
		var taskId = $(this).attr('task_id');
		var invoice_s = $(this).attr('invoice_s');
		apply_invoice(taskId,invoice_s);
	});

	//购买增值服务
	$(".payitem").bind('click',function(){
		var payitem_id = $(this).attr("payitem_id");
		payitem(payitem_id);
	});
	
	//任务留言
	$(".show_comment").bind('click',function(){
		show_comment(task_id);
	});

	//发送站内信
	$(".sendMessage").bind('click',function(){
		var to_uid = $(this).attr('to_uid');
		var to_username = $(this).attr('to_username');
		var obj_id = $(this).attr('obj_id');
		sendMessage(to_uid, to_username, obj_id);
	});

	//举报
	$(".report").bind('click',function(){
		var obj = $(this).attr("r_obj");
		var obj_id = $(this).attr('r_obj_id');
		var type = $(this).attr('r_type');
		var to_uid = $(this).attr("to_uid");
		var to_username = $(this).attr('to_username');
		report( obj, type,obj_id,to_uid,to_username)
	});
	//mreward_task模式入口
	if (TASKMODE=='mreward'){
		In('mreward_task');
		//未报名前遮住交稿部分
		if (uid > 0 && EPWEIKE.sign_bz != '1'){
			var unsignup_cover = "<div class='unlogin_cover'><div class='con'><div class='inline'>您尚未报名，所以无法使用交稿功能。<a href='javascript:void(0);' onclick='EPWEIKE.task_signup();return false;' class='button red'>我要报名</a><div class='t_r mt_10'><a class='c999' target='_blank' href='"+SITEURL+"/zt/APPS/android/'><span class='ico ico_phone'></span>下载APP，随时随地查看交易动态</a></div></div></div><div class='innerbg'></div></div>";
			$("#submitwork").append(unsignup_cover);
		}
		
		//我要报名
		$('#task_signup_a').click(function(){
			EPWEIKE.task_signup();
		});

		//中标、取消中标等
		$(".workBid").bind('click',function(){
			var work_id = $(this).attr('work_id');
			var to_status = parseInt($(this).attr('to_stat'));
			var beforehand = $(this).attr('bef_hand');
			workBid(work_id, to_status, $(this), beforehand);
		});
	}
	//preward_task模式入口
	else if (TASKMODE=='preward'){
		In('preward_task');
		if (uid > 0 && sign_bz != '1'){
			var unsignup_cover = "<div class='unlogin_cover'><div class='con'><div class='inline'>您尚未报名，所以无法使用交稿功能。<a href='javascript:void(0);' onclick='EPWEIKE.task_signup();return false;' class='button red'>我要报名</a><div class='t_r mt_10'><a class='c999' target='_blank' href='"+SITEURL+"/zt/APPS/android/'><span class='ico ico_phone'></span>下载APP，随时随地查看交易动态</a></div></div></div><div class='innerbg'></div></div>";
			$("#submitwork").append(unsignup_cover);
		}
		
	}
	//sreward_task模式入口
	else if (TASKMODE=='sreward'){
		In('sreward_task');
		//未报名前遮住交稿部分	
		if (uid > 0 && EPWEIKE.sign_bz != '1'){
			var unsignup_cover = "<div class='unlogin_cover'><div class='con'><div class='inline'>您尚未报名，所以无法使用交稿功能。<a href='javascript:void(0);' onclick='EPWEIKE.task_signup();return false;' class='button red'>我要报名</a><div class='t_r mt_10'><a class='c999' target='_blank' href='"+SITEURL+"/zt/APPS/android/'><span class='ico ico_phone'></span>下载APP，随时随地查看交易动态</a></div></div></div><div class='innerbg'></div></div>";
			$("#submitwork").append(unsignup_cover);
		}
		//中标、取消中标等
		$(".workBid").bind('click',function(){
			var work_id = $(this).attr('work_id');
			var to_status = parseInt($(this).attr('to_stat'));
			workBid(work_id, to_status, $(this));
		});
	}
	//tender_task模式入口
	else if (TASKMODE=='tender'){
		In('tender_task');
		In('pcas',function() {
			new PCAS("province", "city", "area", "辽宁省", "鞍山市", "铁西区");
		});
		function slt_task_cash () {
			var cash = $("#slt_cash").val();
			if (cash) {
				$("#msg_cash").html(' ');
			} else {
				$("#msg_cash").html("请选择您的任务报价区间");
			}
		}
		
		//直接雇佣
		//确认付款
		$(".confirm_pay").bind('click',function(){
			var t = $(this).attr('t');
			var t_id = $(this).attr('task_id');
			confirm_pay(t_id,t);
		});
		//同意或拒绝威客延期
		$(".proccess_witkey_task_delay").bind('click',function(){
			var msg_ac = $(this).attr('msg_ac');
			proccess_witkey_task_delay(msg_ac);
		});
		//放弃交易
		$(".taskDrop").bind('click',function(){
			var fq_uid = $(this).attr('uid');
			taskDrop(fq_uid);
		});
		//分期付款
		$(".part_pay").bind('click',function(){
			part_pay($(this).attr('task_id'));
		});
		//申请退款
		$(".task_refund").bind('click',function(){
			task_refund($(this).attr('task_id'),$(this).attr('reason'));
		});
		//完成任务
		$(".complate_task").bind('click',function(){
			complate_task($(this).attr('task_id'));
		});
		//上传源文件
		$(".upload_source").bind('click',function(){
			upload_source($(this).attr('work_id'));
		});
		//威客延期
		$(".witkey_taskDelay").bind('click',function(){
			witkey_taskDelay();
		});
		//威客接受或放弃被雇佣
		$(".hire_accept").bind('click',function(){
			hire_accept($(this).attr('task_id'),$(this).attr('t'));
		});
	}
	
	$(".task_filter").change(function(){
		$("#form_vip").submit();
	})
	
	In('chosen',function(){
		$(".selectstyle").chosen();
	});
	In('countdown',function(){
		EPWEIKE.Countdown=function(){
			countement=$("#TimeCountdown"),
			thisTime=countement.attr("time");
			var thisTimeZone=8; 
			countement.countdown({
				date: thisTime,
				offset: thisTimeZone,
				onChange: function( event, timer ){
			
				},
				onComplete: function( event ){
					//location.reload();
				},
				leadingZero: true
			});
		}
		EPWEIKE.Countdown();
	});
	//图片展示
	In('thumbimg',function(){
		$("img[SourceImg]").each(function(index, element) {
			$(this).load(function(){
				thumbImg(this);
			})
			
		});
	});
	
	//上传文件
	In('uploadify','uploadifyhandle','uploadify_css',function(){
		function construct() {
			uploadify({
				auto: true,
				size: "20MB",
				exts: '*.doc;*.docx;*.xls;*.cdr;*.ppt;*.wps;*.zip;*.rar;*.7z;*.txt;*.jpg;*.jpeg;*.gif;*.png;*.bmp;*.swf;*.png;*.mp3;*.3gp',
				limit: 5
			},
			{
				objType: 'work',
				task_id: task_id,
				work_id: $("#work_id").val()
			});
		}
		construct();
	});
	//评论绑定事件
	$(".tar_comment").keydown(function(event){
		EPWEIKE.checkCommentInner(this,event);
	});
	$(".tar_comment").focus(function(event){
		EPWEIKE.tarClick(this,event);
	}).blur(function(event){
		EPWEIKE.tarBlur(this,event);
	});
	$(".answer-zone").click(function(){
		EPWEIKE.work_comment(this);
	});
	$(".answer_word").hide();
	
	EPWEIKE.tarClick = function(obj,event){
		if($(obj).val()=='我要说几句...'){
			$(obj).val('').addClass('c666');
			$(obj).parent().find(".answer_word").show().text("你还能输入200个字!");
		}
		event.stopPropagation();
	}
	EPWEIKE.tarBlur = function(obj,event){
		if(!$(obj).val()){
			$(obj).val('我要说几句...').removeClass('c666');
			$(obj).parent().find(".answer_word").hide();
		}
		event.stopPropagation();
	}
	
	$(".pinluncontes .tar_comment").focus(function(event){
		EPWEIKE.checkCommentInner(this,event);
	}).keyup(function(event){
		EPWEIKE.checkCommentInner(this,event);
	}).keydown(function(event){
		EPWEIKE.checkCommentInner(this,event);
	}).keypress(function(event){
		EPWEIKE.checkCommentInner(this,event);
	})
	/**
	 * 内容检测
	 * @param obj
	 * @param event
	 */
	EPWEIKE.checkCommentInner=function(obj,e){
		var  val   = EPWEIKE.removeHTMLTag($.trim(obj.value));
		var  num   = val.length-1;
			e.keyCode==8?num-=1:num+=1;
			num<0?num=0:'';
		var Remain = Math.abs(200-num);
			if(num<=200){
				$(obj).next().find(".answer_word").text("你还能输入"+Remain+"个字!");
			}else{
				$(obj).next().find(".answer_word").text("你还能输入"+Remain+"个字!");
				var nt = $(obj).val().toString().substr(0,200);
				$(obj).val(nt);	
			}
	}
	
	/** 
	 * 稿件评论
	 * @param string obj 当前对象
	 * @param int obj_id  对象编号
	 */
	EPWEIKE.work_comment=function(obj) {
		if (check_user_login()) {
			var obj_id = $(obj).parents(".answer-form").attr("work_id");
			var url = basic_url+'&op=comment&obj_type=work&obj_id=' + obj_id;
			var tar_content = $(obj).parent().siblings(".texare").val();
			if(tar_content.length>200){
				showDialog("您的点评超过字数限制",'alert','操作提示');return false;
			}else if (tar_content.length==0 || tar_content=="我要说几句..."){
				showDialog("您的点评不能为空",'alert','操作提示');return false;
			}else if(tar_content.length>0){
				$.post(url,{tar_content:tar_content},function(json){
					if(json.status==1){ 
						EPWEIKE.reloadComment(obj_id,0);
						$('#work_'+obj_id+'_comment').show();
						$(obj).parent().siblings(".texare").val("");
						return false;
					} else if (json.data.error_code == 'auth_mobile'){
						showDialog(json.msg,"confirm",'友情提示',function(){
							location.href="/index.php?do=user&view=setting&op=auth&auth_code=mobile";
						},'','','','马上认证');
						return false;
					} else{
						showDialog(json.data,'alert',json.msg);return false;
					}
				},'json')
			}
		}
	}
	/**
	 * 稿件留言加载
	 */
	EPWEIKE.loadComment=function(obj,work_id,work_uid){
		if($("#work_"+work_id+"_comment").has("div.old_comment").length==0){
			$("#work_"+work_id+"_comment").load("/index.php?do=ajax&view=task&ajax=work_comment&task_id="+task_id+"&work_id="+work_id+"&work_uid="+work_uid);
		}
	}
	
	
	//展开评论
	EPWEIKE.plTool=function(){
		$(".plTool").bind("click",function(){
			if($(this).parents(".tkspinlun").next(".pinluncontes").is(":hidden")){
				$(this).addClass("up");
				$(this).parents(".pinlunbox").find(".pinluncontes").slideDown("fast");
				var work_id = $(this).attr("work_id");
				var uid =  $(this).attr("uid");
				if($("#work_"+work_id+"_comment").children("#loading")){
					EPWEIKE.loadComment($(this),work_id,uid);
					$("#work_"+work_id+"_comment").children("#loading").remove();
				}
			} else if ($(this).parents(".tkspinlun").next(".pinluncontes").is(":visible")){
				$(this).removeClass("up");
				$(this).parents(".pinlunbox").find(".pinluncontes").slideUp("fast");
			}
			return false;
		});
	}
	EPWEIKE.plTool();
	//展开案例
	EPWEIKE.alTool=function(){
		$(".alTool").each(function(){
			var _this=$(this);
			_this.bind("click",function(){
				if (_this.parents(".pinlunbox").next(".workercase").is(":hidden")) {
					_this.addClass("up");
					_this.parents(".pinlunbox").next(".workercase").show().css("zoom","1");
					var shop_id = $(this).attr("shop_id");
					var stat =  $(this).attr("status");
					var work_id = $(this).attr('work_id');
					if(stat != '8'){
						if($("#witkey_"+work_id+"_case").children("#loading_c")){
							$.get(SITEURL+"/index.php?do=ajax&view=task&ajax=witkey_case&sid="+shop_id,function(data){
								$("#witkey_"+work_id+"_case").children("#loading_c").remove();
								$("#witkey_"+work_id+"_case").html(data);
							},'html');
						}
					}
				} else if (_this.parents(".pinlunbox").next(".workercase").is(":visible")){
					_this.removeClass("up");
					_this.parents(".pinlunbox").next(".workercase").hide().css("zoom","1");
				}
				return false;
				
			});
			var num = parseInt(_this.find("span").text());
			if(_this.attr("status") != '8' && num != 0 && TASKMODE == 'tender'){
				_this.addClass("up");
				_this.parents(".pinlunbox").next(".workercase").slideDown("fast");
				var shop_id = _this.attr("shop_id");
				var stat =  _this.attr("status");
				var work_id = $(this).attr('work_id');
				if(stat != '8'){
					if($("#witkey_"+work_id+"_case").children("#loading_c")){
						$.get(SITEURL+"/index.php?do=ajax&view=task&ajax=witkey_case&sid="+shop_id,function(data){
							$("#witkey_"+work_id+"_case").children("#loading_c").remove();
							$("#witkey_"+work_id+"_case").html(data);
						},'html');
					}
				}
			}
			if((_this.attr("status") == '8') && num != 0){
				_this.addClass("up");
				_this.parents(".pinlunbox").next(".workercase").slideDown("fast");
			}
		});
	}
	EPWEIKE.alTool();
	
	//提交稿件绑定-悬赏模式
	$("#subWork").click(function(){
		EPWEIKE.subWork(this);
	});
	//提交稿件绑定-投标模式
	$("#subWorkTender").click(function(){
		EPWEIKE.subWorkTender(this);
	});
	//提交标识
	var subing = 0;
	EPWEIKE.subWork=function(obj) {
		var i = checkForm(document.getElementById('frm_reward'));
		if (i) {
			var shtml = contentCheck('tar_content', '任务交稿', 5, 1500, 1, 'upload_tip', EPWEIKE.editor);
			if (shtml) {
				var data = $("#frm_reward").serialize();
				var url = "/index.php?do=task&view=info&task_id="+task_id+"&op=work_hand&sbt_edit=1&ban_ajax=1";
				var winObj = $('body');
				if (subing == 1) {
					return;
				}
				subing = 1;
				$(obj).addClass("grey");
				$(obj).removeClass("submit");
				$(obj).text("请耐心等待");
				$(obj).attr("disabled", true);
				$.ajax({
					url: url,
					data: data,
					dataType: 'json',
					type: "POST",
					beforeSend: function() {
						//winObj.prepend(maskD);
					},
					success: function(json) {
						if (json.status == '1') {
							var url = json.data['url'] ? json.data['url'] : SITEURL+"/index.php?do=task&view=info&task_id="+task_id;
							json.data = json.data['msg'] ? json.data['msg'] : json.data;
							showDialog(json.data, 'right', json.msg, "location.href='" + url + "'");
							//hideWindow('work_hand');
						} else {
							$(obj).removeClass("grey");
							$(obj).addClass("submit");
							$(obj).text("提交");
							$(obj).attr("disabled", false);
							if(json.data=='ban'){
								showDialog(json.msg, 'alert', '操作提示');
							}else{
								showDialog(json.data, 'alert', json.msg);
							}
						}
						subing = 0;
						return false;
					},
					error: function(json) {
						var msg = json.msg ? json.msg: "系统繁忙，交稿失败";
						showDialog(msg, 'alert', "操作提示!");
						subing = 0;
						return false;
					}
				})
			}
		}
	};
	$(":checkbox[name='hidemode']:checked").parent().siblings('.rel_nxb').show();
	$(":checkbox[name='hidemode']").change(function(){
		$(this).parent().siblings('.rel_nxb').toggle();
	})
	$(":checkbox[name='cunnar_stamp']:checked").parent().siblings('.rel_nxb').show();
	$(":checkbox[name='cunnar_stamp']").change(function(){
		$(this).parent().siblings('.rel_nxb').toggle();
	})

	//招标模式的提交稿件
	EPWEIKE.subWorkTender=function (obj) {
		
		var i = checkForm(document.getElementById('frm_tender'));
		if (i) {
			
			var shtml = contentCheck('tar_content', '单人招标报价', 5, 1500, 1, 'upload_tip', EPWEIKE.editor);
			if (shtml) {
				var data = $("#frm_tender").serialize();
				var url = SITEURL+"/index.php?do=task&task_id="+task_id+"&op=work_hand&sbt_edit=1";
				$(obj).addClass("grey");
				$(obj).removeClass("submit");
				$(obj).text("请耐心等待");
				$(obj).attr("disabled", true);
				$.ajax({
					url: url,
					data: data,
					dataType: 'json',
					type: "POST",
					beforeSend: function() {
						//winObj.prepend(maskD);
					},
					success: function(json) {
						if (json.status == '1') {
							showDialog(json.data, 'right', json.msg, "location.href='"+SITEURL+"/index.php?do=task&task_id="+task_id+"'"); //&view=work
						} else {
							$(obj).removeClass("grey");
							$(obj).addClass("submit");
							$(obj).text("提交");
							$(obj).attr("disabled", false);
							showDialog(json.data, 'alert', json.msg);
						}
						return false;
					},
					error: function() {
						//maskD.remove();
						var msg = json.msg ? json.msg: "系统繁忙，交稿失败";
						showDialog(msg, 'alert', "操作提示!");
						subing = 0;
						return false;
					}
				})
			}
		}
	}
	/**
	 * 调取稿件回复form
	 * comment_id 父级评论编号
	 * obj_id 稿件ID
	 * work_uid 稿件对应用户
	 */
	EPWEIKE.get_reply_form = function (comment_id, obj_id, work_uid){
		//删除原本存在的留言回复代码
		$("#reply_zone").remove();
		//关闭稿件留言栏
		//$('#work_comment_box_'+obj_id).hide();
		//组合留言回复代码
		var replystr;
		replystr = "<div id='reply_zone' class='db'><textarea class='txt_input' cols='60' id='comment_reply_content' style='height:30px;' onkeydown='EPWEIKE.checkCommentInner(this,event)' />";
		replystr = replystr + "<div class='db mt_10'><button type='button' class='button red' onclick='EPWEIKE.reply_work_comment("+ comment_id +","+ obj_id +","+ work_uid +");' value='确定'>回复</button> ";
		replystr = replystr + "<button type='button' class='button' onclick=$('div#reply_zone').remove(); value='取消'>取消</button>";
		replystr = replystr + "&nbsp;<span class='answer_word'>你还能输入200个字！</span></div>";
		replystr = replystr + "</div>";
		//代码插入网页对应位置
		$("#comment_"+comment_id).append(replystr);
		return false;
	}
	/**
	 * 稿件留言回复提交
	 * comment_id 父级ID
	 * obj_id 对应稿件ID
	 * work_uid 稿件对应用户ID
	 */
	EPWEIKE.reply_work_comment=function(comment_id, obj_id, work_uid){
		if (check_user_login()) {
			var url = basic_url+'&op=comment_reply&obj_type=work&obj_id='+ obj_id +'&comment_id=' + comment_id;
	
			var tar_content = $('#comment_reply_content').val();
				if(tar_content.length>200){
					showDialog("您的回复超过字数限制",'alert','操作提示');return false;
				}else if(tar_content.length==0){
					showDialog("您的回复不能为空",'alert','操作提示');return false;
				}else if(tar_content.length>0){
					$.post(url,{tar_content:tar_content},function(json){
						if(json.status==1){ 
							EPWEIKE.reloadComment(obj_id,work_uid);
							return false;
						}else if (json.data.error_code == 'auth_mobile'){
								showDialog(json.msg,"confirm",'友情提示',function(){
									location.href="/index.php?do=user&view=setting&op=auth&auth_code=mobile";
								},'','','','马上认证');
								return false;
						}else{
							showDialog(json.data,'alert',json.msg);
							return false;
						}
					},'json')
				}
		}
	}
	
	//提交评论
	EPWEIKE.submitcomment=function(){
		EPWEIKE.check_user_login_task();
	}
	EPWEIKE.loadReply=function(id){
		if($('#comment_page dd').length==''){
			EPWEIKE.load_comment_data(1);
		}else{
			$.get('/index.php?do=ajax&view=task&ajax=load_comment&comment_id='+id,function(data){
				$("#newcomment_box").prev().find("dd[id*='reply_record']:last").after(data);
			},'html');
		}
	}

	/**
	 * 重载稿件留言区
	 */
	EPWEIKE.reloadComment=function (work_id,work_uid){
		$("#work_"+work_id+"_comment").empty();
		$("#work_"+work_id+"_comment").load("/index.php?do=ajax&view=task&ajax=work_comment&task_id="+task_id+"&work_id="+work_id+"&work_uid="+work_uid);
	}
	/** 检查用户是否登录(任务页留言专用) */
	EPWEIKE.check_user_login_task=function(url) {
		$.getJSON('/index.php?do=release&ac=check_login',function(json){
			if(json.status){
				var content = $('#tar_newcomment').val();
				if(content==''){
					//showDialog("您的留言信息不能为空","alert","留言失败");
					$("#span_tar_newcomment").addClass("valid_error").html("<span>您的留言信息不能为空</span>");
					return false;
				}
				$.post('/index.php?do=task&task_id='+task_id+'&view=comment&op=add',{content:content},function(data){
					if(data=='ban'){
						//showDialog("您的留言信息中有非法关键字","alert","留言失败");
						$("#span_tar_newcomment").addClass("valid_error").html("<span>您的留言信息中有非法关键字</span>");
						return false;
					}else if(data==''){
						//showDialog("未知错误，提交失败","alert","留言失败");
						$("#span_tar_newcomment").addClass("valid_error").html("<span>未知错误，提交失败</span>");
						return false;
					}else if (data=='auth_mobile'){
						showDialog("您好，提交任务留言需要手机认证，您是否去认证？","confirm",'友情提示',function(){
							location.href="/index.php?do=user&view=setting&op=auth&auth_code=mobile";
						},'','','','确定');
						return false;
					}else{
						//$('#comment_page').html('列表更新中..请稍候..');
						EPWEIKE.loadReply(data);
						$("#tar_newcomment").val("");
						$("#task_comment_cont_t_"+task_id).show();
						//$('#newcomment_box').hide();
					}
				});
			}else{
				EPWEIKE.ajax_login_task();
				return false;
			}
		})
	}
	/** ajax_login跳转 */
	EPWEIKE.ajax_login_task=function (){	
		showWindow('login','', '/index.php?do=ajax&view=login&jump_status=1');
		return false;
	}
	
	//获得列表更新
	EPWEIKE.load_comment_data=function(page){
		$('#comment_page').load('index.php?do=task&task_id='+task_id+'&view=comment&inajax=1&page='+page+' #comment_page').attr('datapage',page);
	}
	
	/*任务页  留言相关操作js   ↓↓↓↓↓ */
	//展开收起
	EPWEIKE.toggle_commlist=function(obj,i){
		//初始化的加载数据
		EPWEIKE.load_comment_data(1);
		if($(obj).html()=='↑收起任务留言'){
			$(obj).html('↓展开任务留言');$('#task_comment_cont_'+i).hide();
		}else{
			$(obj).html('↑收起任务留言');$('#task_comment_cont_'+i).show();
		}
	}
	
	//提交评论
	EPWEIKE.reply_comment=function(reply_id){
		var content = $('#comment_reply_'+reply_id).val();
		if(content==''){showDialog("您的留言信息不能为空","alert","留言失败");return false;}
		$.post('/index.php?do=task&task_id='+task_id+'&view=comment&op=add&reply_id='+reply_id,{content:content},function(data){
			if(data=='ban'){
				showDialog("您的留言信息中有非法关键字","alert","留言失败");return false;
			}
			else if(data=='nologin'){
				showDialog("您必须先登录","alert","留言失败");return false;
			}
			else if(data=='notacces'){
				showDialog("您没有回复权限","alert","留言失败");return false;
			}
			else if (data=='auth_mobile'){
				showDialog("留言需要先通过手机认证！是否马上进行手机认证？","confirm",'友情提示',function(){
					location.href="/index.php?do=user&view=setting&op=auth&auth_code=mobile";
				},'','','','马上认证');
				return false;
			}
			else if(data==''){
				showDialog("未知错误，提交失败","alert","留言失败");return false;
			}
			else{
				$('#comment_opspan_'+reply_id).show();
				$('#comment_opspan2_'+reply_id).hide();
				var reply = '<div class="pl_10 clearfix"> <div class="c666"><span class="c363">您：</span>'+content+'</div></div>';
				if($('#c_reply_list_'+reply_id).find(".inercomment").length==0){
					$('#c_reply_list_'+reply_id).html("<div class='inercomment'></div>")
				}
				$('#c_reply_list_'+reply_id).find(".inercomment").append(reply);
				$("#comment_reply_"+reply_id).val("");
			}
		});
	}
	if ($('#scroll_weke').length>0){
		In('jcarousel',function(){
			//中标威客的滚动
			$('#scroll_weke').jcarousel({
				buttonNextHTML: "<a href='javascript:void(0);'>></a>",
				buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
				scroll: 1
			});
		})
	}
	if ($('#subworkers_scroll').find('a').length>0){
		In('jcarousel',function(){
			$('#subworkers_scroll').jcarousel({
				buttonNextHTML: "<a href='javascript:void(0);'>></a>",
				buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
				scroll: 1
			});			
		})
	}
	/*
	* 根据省获取市
	*/
	function showAreaP(pid){
		if(pid){
			$.post("/index.php?do=ajax&view=area",{pid: pid}, function(html){
				var str_data = html;
				if (trim(str_data)==''){
					$("#area_cid").html('<option value=""> 请选择市 </option>');
					$("#area_aid").html('<option value=""> 请选择县或区 </option>');
				}else{
					$("#area_cid").html(str_data);
					$("#area_aid").html('<option value=""> 请选择县或区 </option>');
				}
				if(getcookie('ft'+self.location.hostname.toString().replace(/\./g,"")) == "1"){
					document.getElementById("StranLink").innerHTML = "繁体版";
					StranBody();
				}
			});
		}
	}
	/**
	 * 获取区
	 * @param 
	 */
	function showArea(area_pid){
		if(area_pid){
			$.post("/index.php?do=ajax&view=area",{area_pid: area_pid}, function(html){
				var str_data = html;
				if (trim(str_data) == '') {
					$("#area_aid").html('<option value=""> 请选择子行业 </option>');
				}
				else {
					$("#area_aid").html(str_data);
					$("#reload_area div.jqTransformSelectWrapper ul li a").triggerHandler("click");
				}
	
				if(getcookie('ft'+self.location.hostname.toString().replace(/\./g,"")) == "1"){
					document.getElementById("StranLink").innerHTML = "繁体版";
					StranBody();
				}
			},'text');
		}
	}
	
	$("#area_pid").live('change', function(){
		showAreaP(this.value);
	});
	$("#area_cid").live('change', function(){
		showArea(this.value);
	});
	
	//添加浮动窗口
	In("bubBle",function(){
		$("img.pic_bubBle").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","mouseenter":"mouseenter","url":bub_url});
		});
	})
	$('a.noshop').click(function() {
		return false;
	});

	/**
	 * 我要报名
	 */
	EPWEIKE.task_signup=function () {
		if(check_user_login()) {
			if(!uid){
				showDialog('您必须登录之后才能报名！', 'alert', '操作失败提示', '', 0);
				return false;
			}
			else if (uid == guid){
				showDialog('操作无效，用户对自己发布的任务报名！', 'alert', '操作失败提示', '', 0);
				return false;
			}
			else{
				siteSub(basic_url + '&op=signup',1,false);
				return false;
			}
		}
	}
	$("i.ico_praise").parent("a").each(function() {
		$(this).bind("click",function(){
			if(check_user_login()) {
				var work_id=$(this).attr("work_id");
				EPWEIKE.dianzan($(this),work_id,SITEURL+"/index.php?do=ajax&view=task&ajax=dianzan");
			}
			return false;
		})
	});
	/**
	* 点赞
	*/
	EPWEIKE.dianzan=function (obj,work_id,url){
		$.ajax({
			type: "post",
			url: url,
			dataType:"json",
			data:{"workid":work_id},
			success:function(json){
				var offset=obj.find("span").offset();
				if ($("#suscdianz").length==0){
					$("<span id='suscdianz'>+1</span>").appendTo("body");
				}
				if(json.status){//点赞成功,json.msg 为提示信息
					var span_int = obj.find("span").html().match(/赞\((\d+)\)/);
					var objshtl = parseInt(span_int[1]);
					obj.find("span").html('已赞(' + (objshtl + 1) + ')');
					$("#suscdianz").html("+1");
					$('#dz_num').html(parseInt($('#dz_num').html()) + 1);
				}else{//点赞失败
					$("#suscdianz").html(json.msg);
				}
				var width=$("#suscdianz").width();
				$("#suscdianz").css({
					"top":offset.top-15,
					"left":offset.left-width/2,
					"position":"absolute",
					"color":"#c00"
				})
				$("#suscdianz").show().animate({ top: offset.top-30 } , { duration: 300 }).animate({ opacity: 'hide' } , { duration: 200 }).animate({ top: offset.top} , { duration: 200 });
				return false;
			}
		}); 
	}
	show_comment(task_id);
});
/**
 * 交易维权 *请在外部定义basic_url参数
 * 
 * @param string
 *            obj 维权对象 当type=1 obj=task/work; type=2 obj=user
 * @param string
 *            type 维权类型 1=>举报,2=>投诉
 * @param string
 *            obj_id 对象编号
 * @param int
 *            to_uid 被举报人
 * @param string
 *            to_username 被举报人名称
 */
function report( obj, type,obj_id,to_uid,to_username) {
	if (check_user_login()) {
		var s='';
		if(type=='1') s='举报';else if(type=='2') s="投诉";
		if(uid==to_uid){
			showDialog("无法对自己发起"+s,"alert","操作提示");return false;
		}else{
			var url = encodeURI('/index.php?do=ajax&view=task&ajax=report&task_id='+task_id+'&op=report&type='+type+'&obj='+obj+'&obj_id='+obj_id+'&to_uid='+to_uid+'&to_username='+to_username);
			showWindow("report",false,url,true,'get',0);
		}
	}
}
/**
 * 人才邀请（可以选择自己的任务）
 */
function talent_invite(i_uid){
    if (check_user_login()) {
        showWindow('task_invite' + i_uid, false,SITEURL+'/index.php?do=ajax&view=invite&opp=task_list&i_uid=' + i_uid, true, 'get', 0);
        return false;
    }
}


//删除评论
function del_comment(comment_id){
	if(confirm('删除评论同时也会删除回复，并且不可恢复，确定？')){
		$.get("/index.php?do=task&task_id="+task_id+"&view=comment&op=del&comment_id="+comment_id,function(data){
			if(data==''||data==0){
				showDialog("未知原因删除失败","alert","删除失败");return false;
			}
			else if(data=='noaccess'){
				showDialog("您没有权限删除评论","alert","删除失败");return false;
			}
			else{
				$('#reply_record_'+comment_id).remove();
			}
		});
	}
}

//我要评论
function show_comment(tid){
	EPWEIKE.load_comment_data(1);
	$('#link_toggle_a').html('↑收起任务留言');
	$('#task_comment_cont_t_'+tid).show();
	$('#newcomment_box').show();
}

/**产权协议书**/
function protocol_window(){
	var url = '/index.php?do=ajax&view=task&ajax=protocol';
	showWindow('protocol','产权协议书',url,true,'get',0);
	return false;
}
//申请开票弹窗
function apply_invoice(taskId,invoicestatus){
	if(invoicestatus==1){
		showDialog("该任务已申请过开票，请前往发票管理页面查看。",'alert','操作提示');
	}else{
		showWindow("invoice",'申请开票',"/index.php?do=ajax&view=invoice&taskid=" + taskId,true,'get',0);return false;
	}
}
//取消申请开票
function cancel(obj){
    var url = obj.href;
    showDialog("确定要取消申请吗？", "confirm", "操作提示", function(){
	   siteSub(url,1,false);
    });
    return false;
}
/**
 * 互评页面调用
 */
function mark(require_url,Do,obj,obj_id){
	var jump='';
	Do&&obj&&obj_id?jump+='do-'+Do+'*'+obj+'-'+obj_id:'';
	showWindow('mark',false,require_url+'&jump_url='+jump,true,'get',0);return false;
}

/**任务修改*/
function taskEdit(){
	if(check_user_login()){
		showWindow('edit','任务修改',basic_url+'&op=edit',true,'get',0);return false;
	}
}

/** 需求补充 */
function taskReqedit() {
	if (check_user_login()) {
		showWindow('reqedit','描述补充',basic_url+'&op=reqedit',true, 'get', 0);return false;
	}
}
function payitem(item_id){
	if (check_user_login()) {
		showWindow('payitem','请选择需要的服务','/index.php?do=ajax&view=task&ajax=payitem&task_id='+task_id+'&item_id='+item_id, true, 'get', 0);return false;
	}
}

/**
 * 邀请人才(发送邀请当前任务)
 */
function inviteHand(task_id){	
	if (check_user_login()) {
		showWindow('task_invite',false,'/index.php?do=ajax&view=invite&task_id='+task_id,1,'get',0);
		return false;
	}
}

/**延期加价*/
function taskDelay(){
	if(check_user_login()){
		if(delay_count>=delay_total){
			showDialog("延期次数超过"+delay_count+"次,无法继续延期","alert","操作提示");return false;
		}
		var url = basic_url+'&op=taskdelay';
		showWindow('taskdelay',false,url,true,'get',0);return false;
	}
}

function checkInner(obj,event){
	var num = parseInt($(obj).val().length)+0;
	if(num<=100)
		$(obj).next().find(".answer_word").text("你还能输入"+(100-num)+"个字!");
	else{
		var nt = $(obj).val().toString().substr(0,100);
		$(obj).val(nt);	
	}
}

//上传源文件
function upload_bidsource(task_id,work_id) {
	if (check_user_login()) {
		showWindow("work_bidsource",'上传源文件', '/index.php?do=ajax&view=task&ajax=upload_bidsource&task_id='
				+ task_id+'&work_id='+work_id,true, "get", '0');
		return false;
	}
}

/**
 * 生成缩略图
 * @param obj
 * @param method
 */
function thumbtaskImg(obj, method) {
	if(!obj) {
		return;
	}
	obj.onload = null;
	file = obj.src;
	zw = obj.offsetWidth;
	zh = obj.offsetHeight;
	if(zw < 2) {
		if(!obj.id) {
			obj.id = 'img_' + Math.random();
		}
		setTimeout("thumbImg(document.getElementById('" + obj.id + "'), " + method + ")", 100);
		return;
	}
	zr = zw / zh;
	method = !method ? 0 : 1;
	if(method) {
		fixw = obj.getAttribute('_width');
		fixh = obj.getAttribute('_height');
		if(zw > fixw) {
			zw = fixw;
			zh = zw / zr;
		}
		if(zh > fixh) {
			zh = fixh;
			zw = zh * zr;
		}
	} else {
		obj.style.cursor = 'pointer';
		if(!obj.onclick) {
			obj.onclick = function() {
				zoom(obj, obj.alt);
			};
		}
	}
	obj.width = zw;
	obj.height = zh;
}

//上传源文件
function upload_source(work_id) {
	if (check_user_login()) {
		showWindow("work_source",'上传源文件', '/index.php?do=ajax&view=task&ajax=upload_source&task_id='
				+ task_id+'&work_id='+work_id, true, "get", '0');
		return false;
	}
}

/**威客延期*/
function witkey_taskDelay(){
	if(check_user_login()){
		if(witkey_delay_count>=witkey_delay_total){
			showDialog("延期次数超过"+witkey_delay_count+"次,无法继续延期","alert","操作提示");return false;
		}
		var url = basic_url+'&op=witkey_taskdelay';
		showWindow('witkey_taskdelay','威客延期',url, true,'get',0);return false;
	}
}

//查看源文件
function loadsourceFile(work_id){
	showDialog($('#work_source'+work_id+'_file').html(),"right","查看源文件");
}

