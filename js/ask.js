function askHelp(e) {
	//模版中为了展示HTML模式，做上线的时候需要改成其他模式，参考一品威客主站。html结构在ajax_ask.html
	showWindow('askElbox', '<h3 class="flb"><em>向他提问</em><span><a title="关闭" onclick="hideMenu('+"fwin_dialog"+', '+"dialog"+')" class="flbc" id="fwin_dialog_close" href="javascript:;">关闭</a></span></h3><div id="askElbox" class="grabg"><div id="askdoc"><div class="dctou"> <a id="info_logo" target="_blank" href="http://qd.xtuan.com/48866/"> <img width="60" height="60" src="http://pic1.xtuan.com/upload/decoration/logo/20140211/10180093352_100x100.jpg"> </a> </div><div class="zytpmd"> <a id="info_name" target="_blank" href="http://qd.xtuan.com/48866/">青岛威廉装饰工程有限公司</a><p><span id="answerNum">回答数：85</span><br><span id="adopt">采纳率：1.17%</span></p></div></div><p id="tip_content" class="w_text">告诉青岛威廉装饰工程有限公司您的装修困扰</p><form onsubmit="" action="?controller=wenba/ask&amp;controllerAction=askHelp" method="post" name="form1" id="questionSubmits"><p>问题分类：<select onchange="" class="btype" name="catePid"><option value="0">-选择问题类别-</option><option value="703">家装设计</option><option value="725">装修流程</option><option value="738">家居产品</option><option value="758">装饰材料</option><option value="770">公装设计</option></select>&nbsp;&nbsp;<select id="cateID" name="cateID"><option value="0">-不做选择-</option></select></p><p></p><textarea name="title" placeholder="提问的越详细，回答的越清楚哦" class="advtxt"></textarea><p></p><input type="button" onclick="" value="提交问题" class="advsb_btn"><input type="hidden" value="259403" name="askMemberID"><input type="hidden" value="1" name="memberType"></form></div>','html');
}


//显示追问提示框
function showAnswer(answerID) {
    var o = $('#showAnswer_' + answerID);
    if (o.css('display') == 'none') {
        o.show();
        $('#showComment_' + answerID).hide();
    } else {
        o.hide();
    }
}
//评论提示框
function showComment(answerID) {
    var o = $('#showComment_' + answerID);
    if (o.css('display') == 'none') {
        o.show();
        $('#showAnswer_' + answerID).hide();
    } else {
        o.hide();
    }
}


//提问的时候返回函数
function questionSubmitCallback(result) {
    var data = result.data;
    if (result.code == 'successful') {
        var i = 0;
        if (result.message != '') {
            showInfo( result['message']);
            //ShowAlert("提 示", result['message'], 340, 80);
            i = 1;
        }
        if (result.message == '' || i == 1) {
            location.href = data.url;
        }
    } else {
        showInfo( result['message']);
    }
}

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
}
