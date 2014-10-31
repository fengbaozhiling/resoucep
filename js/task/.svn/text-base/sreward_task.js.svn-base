/**
 * 任务事件处理
 * 
 */

$(function() {
	var loading = parseInt($(".process li.selected").index()) + 1;
	$(".progress_bar").css("width", loading * 20 + "%");
	if (task_status == 9) {
		$(".progress_bar").css({
			width : "100%",
			background : "grey"
		});
	}
	
	$('#task_signup_a').click(function(){
		EPWEIKE.task_signup();
	});
	
	$('.workHand').click(function(){
		workHand($(this).attr('work_id'));
	});
})
var LOCK=0;
/** 稿件提交 */
function workHand(work_id) {
	if (check_user_login()) {
		if(!uid){
			showDialog('您必须登录之后才能交稿!', 'alert', '操作失败提示', '', 0);
			return false;
		}
		else if (uid == guid) {
			showDialog('操作无效，用户对自己发布的任务交稿!', 'alert', '操作失败提示', '', 0);
			return false;
		} else {
			showWindow("work_hand",false, basic_url + '&op=work_hand&work_id='+work_id, true, "get", '0');
			//window.location=basic_url + '&op=work_hand&work_id='+work_id + "#submitwork";
			//$("#tar_content").focus();
			return false;
		}
	}
}

/**
 * 稿件进行投票
 * 
 * @param int
 *            work_id 稿件编号
 * @param int
 *            vote_uid 被投票人
 */
function workVote(work_id, vote_uid) {
	if (check_user_login()) {
		if (vote_uid == uid) {
			showDialog("无法对自己进行投票", 'alert', '操作提示');
			return false;
		}
		if(LOCK==0){
			LOCK=1;
			var url = basic_url + '&op=work_vote';
			$.post(url, {
				work_id : work_id
			}, function(json) {
				if (json.status == 1) {
					$("#work_vote_" + work_id).remove();
					var vote_num = $("#vote_num_" + work_id).html();
					num = parseInt(vote_num) + 1;
					$("#vote_num_" + work_id).html(num);
					showDialog(json.data, 'right', json.msg);
					LOCK=0;
					return false;
				} else{
					showDialog(json.data, 'alert', json.msg);
					LOCK=0;
					return false;
				}
			}, 'json')
		}
	}
}
/**
 * 选择稿件
 * 
 * @param work_id
 *            稿件编号
 * @param to_status
 *            变更状态
 * @returns {Boolean}
 */

function workBid(work_id, to_status, obj) {
	if (check_user_login()) {
		var status_now = $("#"+work_id).attr('status');
		if (guid != uid) {
			showDialog("只有雇主才能操作稿件", "alert", "操作提示");
			return false;
		} else {
			var op = 'work_choose';
			var strstatus = '中标';
			switch(to_status){
				case 13:
					op='work_notice';
					strstatus = '入围';
					break;
				case 14:
					op='work_remark';
					strstatus = '备选';
					break;
				case 15:
					op='work_out';
					strstatus = '淘汰';
					break;
				case 0:
					op='cancel_notice';
					if(status_now==11){
						strstatus = '取消中标';
					}else{
						strstatus = '取消入围';
					}
					break;
			}
			var str_content;
			if(task_status==2){
				if(to_status==11){
					str_content='是否确认选择此稿件'+ strstatus;
				}else{
					str_content='是否确认选择此稿件'+ strstatus;
				}
			}else{
				if(to_status==11){
					str_content='是否确认选择此稿件'+ strstatus +'，选择后无法修改';
				}else{
					str_content='是否确认选择此稿件'+ strstatus;
				}
			}
			
			if(to_status == 0){
				if(status_now==11){
					str_content='是否确认此稿件'+ strstatus;
				}else{
					str_content='是否确认此稿件'+ strstatus;
				}
			}
			
			if(to_status==11||to_status==13){
				showDialog(str_content,'confirm','操作提示',function(){
					if(LOCK==0){
						LOCK=1;
						var url = basic_url + '&op='+op+'&work_id=' + work_id;
						$.post(url, {to_status : to_status}, function(json){
							if (json.status == 1) {
								$("#"+work_id).attr("status",to_status);
								$("#work_"+work_id+"_buttons").html(json.data);
								var divstatus = $("<div class='work_status_big work_"+to_status+"_big qualified_big1 po_ab'></div>");
								//divstatus.appendTo($("#"+work_id));
								divstatus.appendTo($("#work_status_"+work_id));
								var leave_notice = parseInt(notice_count - $(".is_notice").length);
								if(to_status==11&&leave_notice>0&&!apply_id ){//设置中标后弹出窗口提示是否要系统代选入围稿件,选“系统代选”则直接提交申请表单，如果选择“去选择”关闭窗口即可
									showDialog("恭喜您找到满意的中标商品，您还需要选择个入围稿件："+leave_notice+"个",'confirm','入围设置提醒',function(){
										$.post(basic_url+'&op=apply_qualify_select&task_id='+task_id+'&task_title='+task_title,function(json){
											if(json.status == 1){
												apply_id = 1;
												showDialog(json.data, "right", json.msg,function(){location.reload();});
											}else{
												showDialog(json.data, "error", json.msg,function(){location.reload();});
											}
											location.reload();
										},"json");
									},'',function(){location.reload();},'','系统代选','去选择');
								}else{
									showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
								}
								$(obj).hide();
								if(to_status==11){
									$(".work_to_11").hide();
								}
								LOCK=0;
							} else {
								showDialog(json.data, "alert", json.msg);
								LOCK=0;
								return false;
							}
						}, 'json');
					}
				});
			}else{
				showDialog(str_content,'confirm','操作提示',function(){
				if(LOCK==0){
					LOCK=1;
					var url = basic_url + '&op='+op+'&work_id=' + work_id;
					$.post(url, {to_status : to_status}, function(json){
						if (json.status == 1) {
							$("#"+work_id).attr("status",to_status);
							if(to_status==15){to_status = 0;}
							if(to_status==14){
								showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
								$(obj).hide();
							}else{
								if(to_status==0){
									$("#"+work_id+" div:.work_11_big").remove();
									$("#"+work_id+" div:.work_13_big").remove();
									if(json.data.indexOf('button')>=0){
										$("#work_"+work_id+"_buttons").html(json.data);
									}
									if(status_now==11){
										$(".work_to_11").show();
									}
								}else{
									$("#work_11_"+work_id).remove();
									$("#work_13_"+work_id).remove();
									$("#work_14_"+work_id).remove();
									$("#work_15_"+work_id).remove();
									var divstatus = $("<div class='work_status_big work_"+to_status+"_big qualified_big1 po_ab'></div>");
									divstatus.appendTo($("#"+work_id));
								}
								showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
								$(obj).hide();
							}
							LOCK=0;
							return false;
						} else {
							showDialog(json.data, "alert", json.msg);
							LOCK=0;
							return false;
						}
					}, 'json');
				}
				});
			}
		}
	}

}

function work_confirm_pay(work_id){
	if (check_user_login()) {
		if (guid != uid) {
			showDialog("只有雇主才能操作稿件", "alert", "操作提示");
			return false;
		} else {
			showDialog('确定现在付款吗？','confirm','确认付款',function(){
				if(LOCK==0){
					LOCK=1;
					var url = basic_url + '&op=work_confirm&work_id=' + work_id;
					$.post(url, function(json){
						if (json.status == 1) {
							showDialog(json.data, "right", json.msg,"location.href='" + basic_url + "'");
						}
						else{
							showDialog(json.data, "alert", json.msg);
						}
						LOCK=0;
					}, 'json')
				}
			});
		}
	}
}
//确认付款按钮移到任务头部操作区，因为跟之前机制不同，另开一个函数
function task_confirm_pay(){
	if (check_user_login()) {
		if (guid != uid) {
			showDialog("只有雇主才能操作稿件", "alert", "操作提示");
			return false;
		} else {
			showDialog('确定现在付款吗？','confirm','确认付款',function(){
				$(".task_confirm_pay").text("付款中");
				$(".task_confirm_pay").unbind("click");
				$(".task_confirm_pay").removeClass("red");
				if(LOCK==0){
					LOCK=1;
					var url = basic_url + '&op=task_confirm';
					$.post(url, function(json){
						if (json.status == 1) {
							var obj_id = $('div[class*="worksElement"][status="11"]').attr('id');
							$('.maibutton').eq(0).html('<a class="button red mark" href="javascript:void(0);" url="' + SITEURL + '/task-view-info-task_id-' + task_id + '-op-mark-role_type-2-obj_id-' + obj_id + '.html">给威客评价</a>');
							$('.mark').bind('click',function(){
								var url = $(this).attr('url');
								mark(url);
							});	
							showWindow('mark',false,json.data,true,'get',0);
						}
						else{
							showDialog(json.data, "alert", json.msg);
							$(".task_confirm_pay").text("确认付款");
							$(".task_confirm_pay").bind("click",function(){
								task_confirm_pay();
							});
							$(".task_confirm_pay").addClass("red");
						}
						LOCK=0;
					}, 'json')
				}
			});
		}
	}
}

function set_choosework(task_id){
	showDialog("保证选稿能提高威客的积极性，是否确定？", 'confirm', "保证选稿", function(){
		$.get('/index.php?do=task&&task_id='+task_id+'&op=set_mustchoose');
		$('#btn_set_must_choose').remove();
	}, 0);
}

