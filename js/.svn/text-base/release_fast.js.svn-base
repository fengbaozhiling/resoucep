In('form');

$(function() { 
	$('#release_submit').click(function(){
		if($('#fwin_quick_release').length > 0){
			var text_ini = "马上发布";
			var posit = "2px";
		}else{
			var text_ini = "提交需求";
			var posit = "30px center";
		}
		$("#release_submit").attr('disabled',true).text('任务发布中...');
		$("#release_submit").css('background-image','url('+IMGURL+'/images/common/loading.gif)');
		$("#release_submit").css('background-position',posit);
		$("#release_submit").css('background-repeat','no-repeat');
		var error = '';	
		var shtml =	$('#release_content').val();
		var i = checkForm(document.getElementById('release_form'));
		if(i){
			if( ! shtml ) {
				error = "请填写需求描述 <br />";
				$("#release_submit").attr('disabled',false).text(text_ini);
				$("#release_submit").css('background-image','');
				$("#release_submit").css('background-position','');
				$("#release_submit").css('background-repeat','');
				showDialog(error);
				return false;
			} 
		
			if( $("#mobile_accout").length>0) {
				if( ! $('#mobile_accout').val() ) {
					error = "请填写手机号码 <br />";
					$("#release_submit").attr('disabled',false).text(text_ini);
					$("#release_submit").css('background-image','');
					$("#release_submit").css('background-position','');
					$("#release_submit").css('background-repeat','');
					showDialog(error);
					return false;
				}
			}
			
			if( ! $('#txt_auth_code').val() ) {
				error = "请填写验证码 <br />";
				$("#release_submit").attr('disabled',false).text(text_ini);
				$("#release_submit").css('background-image','');
				$("#release_submit").css('background-position','');
				$("#release_submit").css('background-repeat','');
				showDialog(error);
				return false;
			}
			
			if($('#ema_li').html() && !$("#release_email").val()){
				error = "请填写邮箱地址<br />";
				$("#release_submit").attr('disabled',false).text(text_ini);
				$("#release_submit").css('background-image','');
				$("#release_submit").css('background-position','');
				$("#release_submit").css('background-repeat','');
				showDialog(error);
				return false;
			}
			
			$('#release_submit').attr('disabled',true);
			$.post(SITEURL + '/index.php?do=ajax&view=release2&op=save', $('#release_form').serialize(), function(json) {
				if ( json.status == '1' ) {			
					$('#release_content').val('');
					$('#g_id').val('');
					$('#indus_pid').val('');
					$('#indus_id').val('');
					$('#release_validcode').val('');
					//$('#mobile_accout').val('');
					$('#release_email').val();
					$('#txt_auth_code').val();
					$("#release_submit").text(text_ini);
					$("#release_submit").css('background-image','');
					$("#release_submit").css('background-position','');
					$("#release_submit").css('background-repeat','');
					$('#release_submit').attr('disabled',false);
					if($('#fwin_quick_release').length > 0){
						showDialog(json.msg, 'right', '操作提示',function(){if(json.data.url){window.location.href=json.data.url;}hideWindow('quick_release');});
					}else{
						showDialog(json.msg, 'right', '操作提示',function(){ window.location.reload();});
					}
				} else {
					showDialog(json.msg, 'alert', '操作提示');
					$("#release_submit").attr('disabled',false).text(text_ini);
					$("#release_submit").css('background-image','');
					$("#release_submit").css('background-position','');
					$("#release_submit").css('background-repeat','');
				}
			},'json');
		}else{
			$("#release_submit").attr('disabled',false).text(text_ini);
			$("#release_submit").css('background-image','');
			$("#release_submit").css('background-position','');
			$("#release_submit").css('background-repeat','');
		}
		return false;
	});
});


/**
 * 三级显示修改，获取行业大类
 */
if ($("#indus_pid").length>0){
	var lengthvpid=$("#indus_pid option").length;
	var lengthvsid=$("#indus_id option").length;
	var optionsibling=$("#indus_pid").clone();
	var optionsseonibling=$("#indus_id").clone();
	$("#indus_pid option:gt(0),#indus_id option:gt(0)").each(function(){
		if($(this).parents("span").length==0){
			$(this).wrap("<span style='display:none'></span>");	
		}
	});
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
	showIndusP($("#g_id").val());
	showIndus($("#indus_pid").val());
}