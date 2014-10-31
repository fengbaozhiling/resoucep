/**
 * 发送 站内信
 * 
 * @param int
 * to_uid 接受方用户编号
 * to_username 接受方用户名
 */
function sendMessage(to_uid,to_username) {
	if(check_user_login()){
		if (uid == to_uid) {
			showDialog('无法给自己发送站内短信', 'alert', '操作提示');
					return false;
		}
		var to_task_id = arguments[2] ? arguments[2] : 0;
		var url = '/index.php?do=ajax&view=message&op=send&to_uid=' + to_uid + '&to_username=' + to_username;

		if (typeof (task_id) != 'undefined' && task_id) {
			url += '&to_task_id=' + to_task_id;
		}
		showWindow('message','发送站内信',encodeURI(url),1,'get',0);
		return false;
	}
}

/**
 * 收藏
 * 
 * @param string
 *            type 收藏类型 task/work/case/shop/service/employer
 * 
 */
function favor(pk,type,model_code,obj_uid,obj_id,obj_name,origin_id,from) {
	if (check_user_login()) {
		from = isUndefined(from) ? 0:from;
		//alert(pk+','+type+','+model_code+','+obj_uid+','+obj_id+','+obj_name+','+origin_id);
		var url='/index.php?do=ajax&view=ajax&ac=favor';
		$.post(url,{pk:pk,keep_type:type,obj_id:obj_id,obj_id:obj_id,model_code:model_code,obj_uid:obj_uid,obj_name:obj_name,origin_id:origin_id,from:from},function(json){
			if(json.status==1){
				if(from == 'task_detail'){
					$('#detail_favor').html("<a class=\"favor_star selec\" href=\"javascript:cancle_favor\("+json.data.fid+','+obj_id+',\''+from+"\'\)\" title=\'取消收藏\'></a>");
					showDialog(json.data.msg,'right',json.msg);return false;
				}else{
					if(from){
						$("#"+from).html("<a href=\"javascript:cancle_favor\("+json.data.fid+','+obj_id+',\''+from+"\'\)\" title=\'取消收藏\'>- 收藏</a>");
						showDialog(json.data.msg,'right',json.msg);return false;
					}else{
						showDialog(json.data,'right',json.msg);return false;
					}
				}
				
			}else{
				//alert(2);
				showDialog(json.data,'alert',json.msg);return false;
			}
		},'json')
	}
}
/*
 * 取消收藏
 * 
 * 
 */
function cancle_favor(fid,obj_id,from){
	if (check_user_login()&&fid) {
		var url ='/index.php?do=user&view=witkey&op=collect&ac=del';
		$.post(url,{fid:fid,obj_id:obj_id,from:from},function(json){
			if(json.status==1){
				showDialog('取消收藏成功','right',json.msg,'window.location.reload()');return false;
			}else{
				showDialog('取消收藏失败','alert',json.msg);return false;
			}
		},'json')
	}
}


function noshop(){
	showDialog("Sorry,您查看的商铺暂未开通",'alert','友情提示');return false;
}