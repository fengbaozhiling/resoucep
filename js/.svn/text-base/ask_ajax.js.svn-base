/**
 * 三级显示修改，获取行业大类
 */
if ($("#ajax_indus_pid").length > 0) {
	var lengthvpid=$("#ajax_indus_pid option").length;
	var lengthvsid=$("#ajax_indus_id option").length;
	var optionsibling=$("#ajax_indus_pid").clone();
	var optionsseonibling=$("#ajax_indus_id").clone();
	$("#ajax_indus_pid option:gt(0),#ajax_indus_id option:gt(0)").each(function(){
		if($(this).parents("span").length == 0) {
			$(this).wrap("<span style='display:none'></span>");
		}
	});
	function ajax_showIndusP(g_id) {
		if ($("#ajax_indus_pid option").length < lengthvpid) {
			$("#ajax_indus_pid").html(optionsibling.html());
		}
		var indus_pid = $('#ajax_g_id').val();
		$("#ajax_indus_pid option:gt(0)").each(function(){
			if ($(this).parents("span").length == 0) {
				$(this).wrap("<span style='display:none'></span>");
			}
		});
		
		$("#ajax_indus_pid .p_"+g_id).each(function(){
			$(this).clone().replaceAll($(this).parents("span"));
		});
		$("#ajax_indus_id option:gt(0)").each(function(){
			if ($(this).parents("span").length == 0) {
				$(this).wrap("<span style='display:none'></span>");
			}
		});
		$("#ajax_indus_id option:eq(0)").clone().replaceAll($(this).parents("span"));
	}
	
	function ajax_showIndus(indus_pid) {
		if ($("#ajax_indus_id option").length < lengthvsid) {
			$("#ajax_indus_id").html(optionsseonibling.html());
		}
		if ($("#recommend_price").length > 0) {
			$("#recommend_price").hide();
		}
		if (indus_pid) {
			$("#ajax_indus_id option:gt(0)").each(function(){
				if ($(this).parents("span").length == 0) {
					$(this).wrap("<span style='display:none'></span>");
				}
			});
			$("#ajax_indus_id .c_"+indus_pid).each(function(){
				$(this).clone().replaceAll($(this).parents("span"));
			});
			$("#ajax_indus_pid span").remove("span");
			$("#ajax_indus_id span").remove("span");
		}
	}
}