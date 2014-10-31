/**
 * 任务事件处理
 * 
 */

$(function() {
	var loading = parseInt($(".process li.selected").index()) + 1;
	$(".progress_bar").css("width", loading * 25 + "%");
	if(task_status==9){
		$(".progress_bar").css({width:"100%",background:"grey"}); 
	}
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
			showWindow("work_hand", false, basic_url + '&op=work_hand&work_id='+work_id, true, "get", '0');
			//window.location=basic_url + '&op=work_hand&work_id='+work_id + "#submitwork";
			//$("#tar_content").focus();
			return false;
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
 * @param beforehand 是否提交选稿
 * @returns {Boolean}
 */
function workBid(work_id, to_status, obj, beforehand) {
	if (check_user_login()) {
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
					strstatus = '取消入围';
					break;
				case -99://取消中标
					op        = 'cancel_prize';
					strstatus = '取消中标';
					to_status = 0;
					break;
			}
			var str_content;
		
			if(to_status==13){
				str_content='是否确认选择此稿件'+ strstatus;
			}else{
				if(beforehand==1)
					str_content='是否确认选择此稿件'+ strstatus +'？';
				else if (task_status == 2)
					str_content='是否确认选择此稿件'+ strstatus;
				else
					str_content='是否确认选择此稿件'+ strstatus +'，选择之后无法修改';
			}
			
			if(to_status == 0){
				strstatus = $(obj).text();
				str_content='是否确认此稿件'+ strstatus;
			}
			if(to_status == -99){
				str_content='是否确认此稿件'+ strstatus;
			}
			
			if((to_status>0 && to_status<11)||to_status==13){
				showDialog(str_content,'confirm','操作提示',function(){
					if(LOCK==0){
						LOCK=1;
						var url = basic_url + '&op='+op+'&work_id=' + work_id+'&to_status='+to_status;
						$.post(url, {
							to_status : to_status
						}, function(json) {
							if (json.status == 1) {
								$("#work_"+work_id+"_buttons").html(json.data);
								var divstatus = $("<div class='work_status_big work_"+to_status+"_big qualified_big1 po_ab'></div>");
								//divstatus.appendTo($("#"+work_id));
								divstatus.appendTo($("#work_status_"+work_id));
								$(obj).remove();
								if(to_status!=13){
									$("#"+work_id+"_txt").remove();
									$(".dj"+to_status).remove();
								}
								var leave_notice = $(".is_notice").length>0?parseInt(notice_count - $(".is_notice").length):notice_count;
								if(to_status != 13&&!$(".jx").length&&leave_notice>0&&!apply_id){
										showDialog("恭喜您找到满意的中标商品，您还需要选择入围稿件："+leave_notice+"个",'confirm','入围设置提醒',function(){
											$.post(basic_url+'&op=apply_qualify_select'+'&task_id='+task_id+'&task_title='+task_title,function(json){
												if(json.status == 1){
													showDialog(json.data, "right", json.msg,function(){location.reload();});
												}else{
													showDialog(json.data, "error", json.msg,function(){location.reload();});
												}
											},"json");
										},'',function(){location.reload();},'','系统代选','去选择');
								}else{
									showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){
										//if(to_status != 13&&task_status==2){
											location.reload();
										//}
									});
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
			}else{
				showDialog(str_content,'confirm','操作提示',function(){
				if(LOCK==0){
					LOCK=1;
					var url = basic_url + '&op='+op+'&work_id=' + work_id+'&to_status='+to_status;
					$.post(url, {
						to_status : to_status
					}, function(json) {
						if (json.status == 1) {
							if(to_status==14){
								showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
								$(obj).hide();
							}else{
								if(to_status==0){
									$("#"+work_id+" div:.work_status_big").remove();
									//$("#work_"+work_id+"_buttons").html(json.data);
								}else{
									$("#work_1_"+work_id).remove();
									$("#work_2_"+work_id).remove();
									$("#work_3_"+work_id).remove();
									$("#work_4_"+work_id).remove();
									$("#work_5_"+work_id).remove();
									$("#work_13_"+work_id).remove();
									$("#work_14_"+work_id).remove();
									$("#work_15_"+work_id).remove();
									var divstatus = $("<div class='work_status_big work_"+to_status+"_big qualified_big1 po_ab'></div>");
									//divstatus.appendTo($("#"+work_id));
									divstatus.appendTo($("#work_status_"+work_id));
								}
								if(op=='cancel_prize'){
									showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
								}else{
									showDialog("稿件设置"+strstatus+"成功", "right", json.msg,function(){location.reload();});
									$(obj).hide();
								}
							}
							LOCK=0;
							return false;
						} else {
							showDialog(json.data, "alert", json.msg);
							LOCK=0;
							return false;
						}
					}, 'json')
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
							showDialog(json.data, "right", json.msg,"location.href='" + basic_url + "'");
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

