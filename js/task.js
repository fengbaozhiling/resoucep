/**
 * 任务操作公共js
 */

/**
 * 加载分享的显示菜单
 */


$(function() { 
	/*$(".state_detail").click(function() {
		$(this).prev().slideUp();
		$(".state_detail").slideUp();
		$(this).slideDown('slow');
	})*/

	//任务状态描述
	$(".state_title").click(function() {
		$(".state_title").slideDown(200);
		$(this).slideUp(200);
		$(".state_detail").slideUp(200);
		$(this).next().slideDown(200);
	})
	$('.sum_content').live('hover',function(){
		$(this).css('z-index',2);
	})
	$('.sum_content').live('mouseleave',function(){
		$(this).css('z-index',1);
	})

	if($('.work_button_box').children('span,a').length==0){
		$('.work_button_box').hide();
	}
	$(".user_info").live("hover",function(){
		hoverDetail(this);
	});
	$(".user_info").live("mouseleave",function(){
		leaveDetail(this);
	});
	
	$(".arrow-bottom-left,.arrow-top-right").click(function(){
		$("#left_nav").toggleClass("hidden");
		$("#top_nav").toggleClass("hidden");
		setcookie('nav-arrow-'+task_id,$(this).attr("id"),3600);
	})
	var nav_arrow = getcookie('nav-arrow-'+task_id);
	if(nav_arrow){
		if(nav_arrow=='arrow-bottom-left'){
			$("#top_nav").addClass("hidden");
			$("#left_nav").removeClass("hidden");
		}else if(nav_arrow=='arrow-top-right'){
				$("#left_nav").addClass("hidden");
				$("#top_nav").removeClass("hidden");
			}	
	}
})
function goComm(work_id){
	$('html,body').animate({'scrollTop':$('#work_'+work_id+'_file').offset().top-150},500);
}
var detailUID = new Array();
function hoverDetail(obj){
	var user_id = $(obj).attr("uid");
	var wid    = $(obj).attr("wid");
	$(obj).children('.user_detail').removeClass('hidden');
	if($(obj).children('.user_detail').text().length==0&&!detailUID[wid]){
		$(obj).children('.user_detail').load("/index.php?do=ajax&view=menu&ajax=user_detail&user_id="+user_id);
		detailUID[wid]=1;
	}
}
function leaveDetail(obj){
	$(obj).children('.user_detail').addClass('hidden');
}

/**
 * 稿件附件加载
 */
function loadFile(work_id){
	if(!$("#work_"+work_id+"_file").html()){
		$("#work_"+work_id+"_file").load("/index.php?do=ajax&view=file&ajax=load&work_id="+work_id);
	}else{
		$("#work_"+work_id+"_file").toggle();
	}
	$('html,body').animate({scrollTop:$("#work_"+work_id+"_file").offset().top-200});
}

/**
 * 内容检测
 * @param obj
 * @param event
 */
function checkCommentInner(obj,e){
	var  num   = obj.value.length;
		e.keyCode==8?num-=1:num+=1;
		num<0?num=0:'';
	var Remain = Math.abs(100-num);
		if(num<=100){
			$(obj).next().find(".answer_word").text("你还能输入"+Remain+"个字!");
		}else{
			var nt = $(obj).val().toString().substr(0,100);
			$(obj).val(nt);	
		}
}


/**
 * 稿件删除*
 * @param work_id 稿件编号
 */
function workDel(work_id){
	if (check_user_login()) {
		showDialog("确认删除此稿件吗?","confirm","操作提示","delConfirm('"+work_id+"')");
	}
}
/**
 * 删除稿件
 * @param work_id 稿件编号
 */
function delConfirm(work_id){
	$.post(basic_url+'&op=work_del&work_id='+work_id,function(json){
		if(json.status=='1'){
			$("#work_"+work_id+",.work_"+work_id).slideUp(600).remove();
			showDialog(json.data,'notice',json.msg);return false;
		}else{
			showDialog(json.data,'alert',json.msg);return false;
		}
	},'json')
}
c_time();
function c_time() {
	$(".d_time").each(
			function() {
			
				var ed = $(this).attr('ed');
				
				if (ed) {
					var djs = d_time(ed);
					var str = "还剩：" + djs[0] + "天" + djs[1] + "小时" + djs[2]
							+ "分" + djs[3] + "秒";
				} else {
					var str = $(this).attr("title");
				}
				$(this).html(str);
			})
	setTimeout('c_time()', 1000);
}



//对话框提示
function comment_tips(obj_id,content){ 
	var obj_id = obj_id;
	var content = content;  
	var html = $("#"+obj_id).val();  
	
	if(html==content){
		$("#"+obj_id).val(""); 
	} 
	$("#"+obj_id).blur(function (){
		var html = $(this).val();  
		if(html==''){ 
			$(this).val(content); 
		}  
	}); 
}

function loadMarkAid(obj){
	ajaxmenu(obj, 250,'1','2','43');
	return false;
}

//2013年新版详情页面新增
$(".steptaks span:last").css("margin-right","auto");
var crentIdex=$(".steptaks").find("span").index($(".crent"))
$(".crentarrow").css("left",43+crentIdex*124+"px")
function protocol(){
	showDialog('message', '/index.php?do=ajax&view=task&ajax=protocol');
}
$(document).ready(function() {
	 //倒计时
	/*$('#countdown').countdown({
	since: $.countdown.UTCDate(-8, 2013,  3-1, 1),
	until:$.countdown.UTCDate(-8, 2013,  4-1, 1), format: 'DHMS', layout: 
	'<span id="timer">'+
	'<span id="timer_days" class="timer_numbers">{dnn}</span>'+'天'+
	'<span id="timer_hours" class="timer_numbers">{hnn}</span>'+'时'+ 
	'<span id="timer_mins" class="timer_numbers">{mnn}</span>'+'分'+
	'<span id="timer_seconds" class="timer_numbers">{snn}</span>'+'秒'+
	'</span>'
	});*/
	In('countdown',function(){
		$("#TimeCountdown").each(function(){
			var thisTime=$(this).attr("time");
			var thisTimeZone=8; 
			$(this).countdown({
				date: thisTime,
				//htmlTemplate: "%{h} <span class=\"cd-time\">hours</span> %{m} <span class=\"cd-time\">mins</span> %{s} <span class=\"cd-time\">sec</span>",
				offset: thisTimeZone,
				onChange: function( event, timer ){
			
				},
				onComplete: function( event ){
					location.reload();
				},
				leadingZero: true
			});
		})		
	});
	//调整招标样式
	$(".putcontent").each(function(){$(this).find(".tkselmt:last").css("border","none")});
	//按钮样式控制
	$(".taskboton").live("mousedown",function(){
		$(this).addClass("hover"); 
	})
	$(".taskboton").live("mouseup",function(){
		$(this).removeClass("hover").addClass("mouseup"); 
	})
	$(".taskboton").live("mouseout",function(){
		$(this).removeClass("hover").removeClass("mouseup"); 
	})
	//展开评论
	$(".pinluncontes").hide();
	$(".closplun").trigger('click');
	$(".closplun").live("click",function(){
		$(this).toggle(function(){
			if($(this).parents(".tkspinlun").next(".pinluncontes").is(":hidden")){
				var num = $(this).children(".cf60").html();
				$(this).html("收起评论（<span class='cf60'>"+num+"</span>）");
				$(this).parents(".putcontent").find(".pinluncontes").slideDown("fast");
				var work_id = $(this).attr("work_id");
				var uid =  $(this).attr("uid");
				if($("#work_"+work_id+"_comment").children("#loading")){
					//reloadComment($(this).attr("work_id"),0);
					loadComment($(this),work_id,uid);
					$("#work_"+work_id+"_comment").children("#loading").remove();
				}
				onCompleteFunc();
			}
            },function(){
               if ($(this).parents(".tkspinlun").next(".pinluncontes").is(":visible")){
			    var num = $(this).children(".cf60").html();
				$(this).html("展开评论（<span class='cf60'>"+num+"</span>）");
				$(this).parents(".putcontent").find(".pinluncontes").slideUp("fast");
			   }
               onCompleteFunc();
			   }
        );
	})
	
	
	$(".task_filter").change(function(){
		$("#form_vip").submit();
	})
	//计件任务中选择多个
	$("#selectall").bind('click',function(){
		if($(this).attr("checked") == true){
			$("input[name='slectlit'][disabled!=true]").attr("checked",true);
		}
		if($(this).attr("checked") == false){
			$("input[name='slectlit'][disabled!=true]").attr("checked",false);
		}
	})
	
	//当右侧内容部分高度超过一定的值，相似任务显示
	var tasktleftHeight=$(".tasktleft").height();
	var tasktrightHeight=$(".taktright").height();
	var taskChazhi=tasktleftHeight-tasktrightHeight;
	$(".taktright").css("padding-bottom","120px");
	$(".tasktleft").css("padding-bottom","120px");
	if (taskChazhi>0){
		$(".taktright").css("height",tasktleftHeight+"px");
	} else if (taskChazhi<0){
		$(".tasktleft").css("height",tasktrightHeight+"px");
	}
	//控制交稿部分的高度
	putconHtext ();
	//tksconTc ();
	//tksconTx ();
	//控制筛选导航跟随屏幕移动
	if($("#nav_lists_nav").length>0){
		var navH = $("#nav_lists_nav").offset().top;
		var endnavH = navH+$(".taskdetaili").height();
		$(window).scroll(function(){
			var scroH = $(this).scrollTop();
			if(scroH>=navH||scroH<endnavH){
				$("#nav_lists_nav").addClass("nav-fixed");
			} if(scroH<navH){
				$("#nav_lists_nav").removeClass("nav-fixed");
			}if(scroH>=endnavH){
				$("#nav_lists_nav").removeClass("nav-fixed");
			}
		})
	}
	//赏金分配下拉
	$('#rwxq_detail').hover(function(){
		$('#sj_detail').show();
	},function(){
		$('#sj_detail').hide();
	})

 });
$(".box.model .task .box_detail .small_list li").hover(
    function(){$(this).addClass('hover')},
	function(){$(this).removeCss('hover')}
	);
	
	var editor = '';
	var m = r_step  = '';
	$(function(){
		$('#append_parent').ajaxSuccess(function(){
			if($('.tar_content')){
				editor = $(".tar_content").xheditor();
				editor?editor.checkInner():'';
			}
		})
	})

/**
 * 三级显示修改，获取行业大类
 */
var lengthvpid=$("#indus_pid option").length;
var lengthvsid=$("#indus_id option").length;
var optionsibling=$("#indus_pid").clone();
var optionsseonibling=$("#indus_id").clone();
function showIndusP(g_id){
	if ($("#indus_pid option").length<lengthvpid){
		$("#indus_pid").html(optionsibling.html())
	}
	var indus_pid = $('#g_id').val();
	$("#indus_pid option:gt(0)").each(function(){
		if($(this).parents("span").length==0){
			$(this).wrap("<span style='display:none'></span>");	
		}
	});
	
	$(".p_"+g_id).each(function(){
		$(this).clone().replaceAll($(this).parents("span"));
	});
	$("#indus_id option:gt(0)").each(function(){
		if($(this).parents("span").length==0){
			$(this).wrap("<span style='display:none'></span>");	
		}
	});
	$("#indus_id option:eq(0)").clone().replaceAll($(this).parents("span"));
}
/**
 * 获取任务行业
 * @param indus_pid
 */
function showIndus(indus_pid){
	if ($("#indus_id option").length<lengthvsid){
		$("#indus_id").html(optionsseonibling.html())
	}
	if($("#recommend_price").length>0){
		$("#recommend_price").hide();
	}
	
	if(indus_pid){
		$("#indus_id option:gt(0)").each(function(){
			if($(this).parents("span").length==0){
				$(this).wrap("<span style='display:none'></span>");	
			}
		});
		
		$(".c_"+indus_pid).each(function(){
			$(this).clone().replaceAll($(this).parents("span"));
		});
		$("#indus_pid span").remove("span");
		$("#indus_id span").remove("span");
	}
}
//控制交稿部分的高度
function putconHtext () {
	$(".putcontext").each(function(){
		$(this).find("img").not(".hideimg").remove();
		var pHeight=$(this).height();
		var aHeight=$(this).parent(".putcontent").siblings(".authright").height();
		var imgHeight=$(this).siblings(".putimgbox").height();
		var cHeight=aHeight-imgHeight-80;
		if (pHeight<cHeight){
			$(this).css("height",cHeight+"px");
		}
		if ($(this).find("img.hideimg").length>0){
			$(this).css("height",cHeight+40+"px");
		}
	});	
}
