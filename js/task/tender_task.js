/**
 * 任务事件处理
 * 
 */

$(function() {
	/*var loading = parseInt($(".process li.selected").index()) + 1;
	$(".progress_bar").css("width", loading * 20 + "%");
	if (task_status == 9) {
		$(".progress_bar").css({
			width : "100%",
			background : "grey"
		});
	}*/

})

var LOCK=0;
/** 任务发起投票 */
function taskVote() {
	if (check_user_login()) {
		if(LOCK==0){
			LOCK=1;
			var url = basic_url + '&op=start_vote';
			$.getJSON(basic_url + '&op=start_vote', function(json) {
				if (json.status == 1) {
					showDialog(json.data, 'notice', json.msg, "location.href='"
							+ basic_url + "&view=work'");
				} else {
					showDialog(json.data, 'alert', json.msg);
				}
				LOCK=0;
				return false;
			})
		}
	}
}

/** 稿件提交 */
function workHand(url) {
	if (check_user_login()) {
		if (uid == guid) {
			showDialog('操作无效，用户对自己发布的任务交稿!', 'alert', '操作失败提示', '', 0);
			return false;
		} else {
			if (qq==''&&mobile==''){
				showDialog('参加任务请先<a href="/index.php?do=user&view=setting&op=basic" target="_blank">完善资料</a>。','alert','操作失败提示','',0);
			} else {
				$.getJSON(url + '&output=json&op_check=1', function(json) {
					if (json.status == 0) {
						showDialog('您已经投过标了!', 'alert', '操作提示', '', 0);
						return false;
					} else {
						showWindow("work_hand",'交稿', url, "get", '0');
						return false;
					}
				})
			}
		}
	}
}

/** 修改报价*/
function workModify(url) {
	if (check_user_login()) {
		if (uid == guid) {
			showDialog('操作无效，雇主无法修改他人报价!', 'alert', '操作失败提示', '', 0);
			return false;
		} else {
			$.getJSON(url + '&output=json&op_check=1', function(json) {
				if (json.status == 0) {
					showDialog('你无权修改此报价', 'alert', '操作提示', '', 0);
					return false;
				} else {
					showWindow("work_modify",'修改报价', url, true, "get", '0');
					return false;
				}
			})

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
					showDialog(json.data, 'notice', json.msg);
				} else {
					showDialog(json.data, 'alert', json.msg);
				}
				LOCK=0;
				return false;
			}, 'json')
		}
	}
}

// 完工
function work_over(op) {
	var task_status = task_status;
	var op = op;
	var url = basic_url + '&op=' + op;
	if (check_user_login()) {
		showWindow("work_hand",'交稿', url, "get", '0');
		return false;
	}

}

// 取消任务
function task_cancer(task_id) {
	showDialog("放弃招标一般在您不再需要竞标或者中标者不满意时操作，确定要放弃招标么？", 'confirm', "放弃招标",
			function() {
				location.href = '/index.php?do=task&task_id=' + task_id
						+ '&op=task_cancer';
			}, 0);
}
// 取消任务
function work_cancer(task_id,work_id) {
	showDialog("您被选为中标但是雇主还没有托管赏金，您确定要放弃竞标么？", 'confirm', "放弃竞标", function() {
		location.href = '/index.php?do=task&task_id=' + task_id+'&work_id='+work_id
				+ '&op=work_cancer';
	}, 0);
}


// 完成任务
function complate_task(task_id) {
	if (check_user_login()) {
		/**
		showDialog("完成任务后需要等待雇主验收，确定完成任务吗？", 'confirm', "任务完成", function() {
			location.href = '/index.php?do=task&task_id=' + task_id
					+ '&op=work_complate';
		}, 0);**/
		showDialog('是否确认完成此任务，选择之后无法修改', 'confirm', '操作提示', function(){
			$.post('/index.php?do=task&task_id=' + task_id+ '&op=work_complate',function(json){
				if(json.status==1){
					showDialog(json.msg, "right", '操作成功',function(){location.reload();});
				}else{
					showDialog(json.msg, "alert", '操作失败');
				}
			},'json');
		});
	}
}
// 完成任务
function confirm_pay(task_id,t) {
	if (check_user_login()) {
		var d = t==1?'确定要验收吗?':'确定要付款吗?';
		if(LOCK==0){
			showDialog(d, 'confirm', "任务完成", function() {
				LOCK=1;
				if ($(".maibutton a[class*='confirm_pay']").length > 0) {
					$(".maibutton a[class*='confirm_pay']").text("付款中").removeClass("red");
				} else {
					$(".maibutton a[onclick^='confirm_pay(']").text("付款中").removeClass("red");
				}
				var url = '/index.php?do=task&task_id=' + task_id+ '&op=confirm_pay';
				$.get(url,function(json){
					if(json.status==1){
						if ($(".maibutton a[class*='confirm_pay']").length > 0) {
							$(".maibutton a[class*='confirm_pay']").remove();
						} else {
							$(".maibutton a[onclick^='confirm_pay(']").remove();
						}
						$('.maibutton').prepend('<a class="button red" href="javascript:void(0);" onclick="mark(\'' + json.data + '\');">给威客评分</a>');
						showWindow('mark',false,json.data,true,'get',0);
					}else{
						if ($(".maibutton a[class*='confirm_pay']").length > 0) {
							$(".maibutton a[class*='confirm_pay']").text("重新付款").addClass("red");
						} else {
							$(".maibutton a[onclick^='confirm_pay(']").text("重新付款").addClass("red");
						}
						showDialog(json.data, "alert", json.msg);
					}
					LOCK=0;
					return false;
				},'json');
			}, 0);
		}
	}
}
//申请退款
function task_refund(task_id,reason){
	if (check_user_login()) {
		showWindow("task_refund",'申请退款', '/index.php?do=task&task_id='+task_id+'&op=task_refund&reason='+reason,true, "get", '0');
	}
}

function part_pay(task_id) {
	if (check_user_login()) {
		showWindow("part_pay",false, '/index.php?do=task&task_id='+task_id+'&op=part_pay',true, "get", '0');
	}
}

/**
 * 直接雇佣接受确认
 */
function hire_accept(task_id,t) {
	if (check_user_login()) {
		if (t == 1 || t == 2) {
			var d = t == 1 ? '确认接受雇佣吗?' : '确认放弃此次雇佣吗?';
			var op = t == 1 ? 'agree_task' : 'refuse_task';
			showDialog(d, 'confirm','操作提示', function() {
				location.href = '/index.php?do=task&task_id=' + task_id
						+ '&op='+op;
			}, 0);return false;
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
function workBid(work_id, to_status) {
	if (guid != uid) {
		showDialog("只有雇主才能操作稿件", "alert", "操作提示");
		return false;
	} else {
		var str_content;
		str_content='是否确认选择此稿件，选择之后无法修改';
		if(to_status==11){
			showDialog(str_content,'confirm','操作提示',function(){
				if(LOCK==0){
					LOCK=1;
					var url = basic_url + '&op=work_choose&work_id=' + work_id;
					$.post(url, {
						to_status : to_status
					}, function(json) {
						if (json.status == 1) {
							$("#work_11_" + work_id).remove();
							// $("#work_14_"+work_id).remove();
							$("#show_status_" + work_id).attr(
									"class",
									"work_status_big work_" + to_status
											+ "_big qualified_big1 po_ab");
							showDialog(json.data, "right", json.msg);
							location.reload();
							return false;
						} else {
							showDialog(json.data, "alert", json.msg);
							LOCK=0;
							return false;
						}
					}, 'json')
				}
			});
		}else{
			if(LOCK==0){
				LOCK=1;
				var url = basic_url + '&op=work_choose&work_id=' + work_id;
				$.post(url, {
					to_status : to_status
				}, function(json) {
					if (json.status == 1) {
						$("#work_11_" + work_id).remove();
						// $("#work_14_"+work_id).remove();
						$("#show_status_" + work_id).attr(
								"class",
								"work_status_big work_" + to_status
										+ "_big qualified_big1 po_ab");
						if(to_status==14){
							showDialog(json.data, "right", json.msg);
							$(obj).hide();
						}else{
							showDialog(json.data, "right", json.msg);
						}
					} else {
						showDialog(json.data, "alert", json.msg);
					}
					LOCK=0;
					return false;
				}, 'json')
			}
		}
	}
}


function subWork(obj){ 
		var i = checkForm(document.getElementById('frm_tender'));
		if(i){
			var shtml 	 = contentCheck('tar_content','{$title}',5,1500,0,'',editor); 
			if(shtml){
				var data= $("#frm_tender").serialize();  
				var url = "{$_K['siteurl']}/index.php?do=task&task_id={$task_id}&op={$op}&sbt_edit=1"; 
				//hideWindow('{$op}');	
				$(obj).addClass("grey");
				$(obj).removeClass("submit");
				$(obj).text("请耐心等待");
				$(obj).attr("disabled",true);
				$.ajax({
					url:url,
					data:data,
					dataType:'json',
					type:"POST",
					beforeSend:function(){
							//winObj.prepend(maskD);
					},
					success:function(json){
						if(json.status=='1'){
							showDialog(json.data,'right',json.msg,"location.href='{$_K['siteurl']}/index.php?do=task&task_id={$task_id}'"); //&view=work
							}
						else{ 
							$(obj).removeClass("grey");
							$(obj).addClass("submit");
							$(obj).text("提交");
							$(obj).attr("disabled",false);
							showDialog(json.data,'alert',json.msg);
						}
						return false;
					},
					error:function(){
						//maskD.remove();
						var msg = json.msg ? json.msg :"{$_lang['sys_busy_work_fail']}";
						showDialog(msg,'alert',"{$_lang['operate_notice']}");
						subing = 0;
						return false;
					}
			})
			}
		}
	} 


/**
 * 放弃这个交易
 */
function taskDrop(uid){
	if(check_user_login()){
		showDialog("您确定要放弃这个交易？","confirm","操作提示","taskDrop_detail("+uid+")");
			return false;
	}
}

function taskDrop_detail(uid){
	var url = basic_url+'&op=taskdrop&witkey_uid='+uid;
	$.get(url,function(json){
		if(json.status=='1'){
			showDialog(json.data,"right",json.msg,'location.reload()');
			return false;
		}else{
			showDialog(json.data,"alert",json.msg,'location.reload()');
			return false;
		}
	},"json");
	return true;
}


/**威客延期雇主处理*/
function proccess_witkey_task_delay(ac){
	if(check_user_login()){
		var msg = ac==1? '确认同意威客延期请求吗?':'确定拒绝威客延期请求吗?';
		showDialog(msg,"confirm","操作提示","process_delay('"+ac+"')");
	}
}
function process_delay(ac){
	$.post(basic_url+'&op=process_witkey_taskdelay&ac='+ac,function(json){
		if(json.status=='1'){
			showDialog(json.data,'notice',json.msg);
			location.reload();
			return false;
		}else{
			showDialog(json.data,'alert',json.msg);
			return false;
		}
	},'json')
}