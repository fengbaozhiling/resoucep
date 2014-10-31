$(function(){
In('placeholder','rele_fast','bannerset');
/*select*/
In('chosen',function(){
   $(".selectstyle").chosen();
});

	/*tab*/
	In('delayTab',function(){	
		$('.tab_title').delayTab({
				tabbox:'.tab_list',
				eventye: 'mousemove',
				delayTime:'200'
		});
		
	});
	
In('jcarousel',function(){
		$('#jcarousel_scroll').jcarousel({
	        auto: 2,
			scroll:1,
	        wrap: 'last',
			buttonNextHTML: '<a href="javascript:;" class="next"></a>',
	        buttonPrevHTML: '<a href="javascript:;" class="prev"></a>'
	    });
});

//诚信移过时显示层
$('.icocx_middle_off').hover(function(){
	$(this).parent().find('.baozhenlist').css({left:$(this).offset().left+40+"px",top:$(this).offset().top-12+"px"}).fadeIn(50);
	}, function(){
	$(this).parent().find('.baozhenlist').fadeOut(30);
});
	
$('.selectbox').hover(function(){
		$(this).find('div').addClass('select');
	}, function(){
		$(this).find('div').removeClass('select');
	});

	$('.talent_list_box').hover(function(){
		obj=$(this);
			trig=setTimeout(function(){
				obj.find('.share_button').fadeIn(200);
		},300);
	},function(){
		clearTimeout(trig);
		$(this).find('.share_button').hide();
	});
	
$("#button").click(function(){
		$("#form_talent_search").submit();
	});
	
	$(".word input[type=text]").focus(function(){
	  $(this).parent().find("button").show();
	});
	$(".word button").click(function() {
	  $(this).hide();
	});

	/*打开案例*/
  	$('.buttonbg a').click(function(){
		var obj = $(this);
		var _this = obj.parents('.talent_list_box');

		if ($(this).text() == "打开案例展示") {
			$(this).html('收起案例展示');
			_this.find('.talent_list_box_bq i').show();
			obj.addClass('select');
		} else {
			$(this).html("打开案例展示");
			_this.find('.talent_list_box_bq i').hide();
			obj.removeClass('select');
		}
		_this.find('.talent_scroll').toggleClass('blocks');
		_this.find('.talent_scroll').attr('id', 'jcarousel8');
		company_span = _this.siblings().find('.talent_scroll').removeClass('blocks').end().find('.talent_scroll').attr('id', '').end().find('.buttonbg a').end().find(".talent_list_box_bq i").hide();
		
	   if(_this.find('.talent_scroll').find('li').length==0){
	   	$("#jcarousel8").html(' <div class="t_c pad20"><br><img src="'+IMGURL+'images/common/loadinwait.gif" alt="请稍等" ></div>');
		$.ajax({
			url: SITEURL + "/index.php?do=ajax&view=talent&s_uid=" + $(this).attr('uid'),
			type: "GET",
			dataType: "html",
			success: function(html){
				$("#jcarousel8").html(html);
				$('#jcarousel8').jcarousel({
					 auto: 4,
					 wrap: 'last',
					 scroll:4
				});
			}
		})
		}
    });
select_text('z');


//添加浮动窗口,威客名片
	In("bubBle",function(){
		$("img.pic_bubBle").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","events":"mouseenter","url":bub_url});
		});
	})


	
	function select_text(attr_name){		
	$('.selectbox a').each(
	   function(){
		   var attr_val = false;
		   if(attr_name == 'z' && EPWEIKE.Talent_list.z == $(this).attr('z')){
			   attr_val = true;
		   }
		   if(attr_val){
		   		$(this).parents('.selectbox').find('em').text($(this).text());
		   		$(this).parents('.selectbox').find('a').removeClass('select');
				$(this).addClass('select');
		   }
		}
	);
}

})

/**
 * 人才邀请（可以选择自己的任务）
 */
function talent_invite(i_uid){
    if (check_user_login()) {
        showWindow('task_invite' + i_uid,false, '/index.php?do=ajax&view=invite&opp=task_list&i_uid=' + i_uid, true, 'get', 0);
        return false;
    }
}

/**
*
* @param tid
* 待载入内容的容器Id
* @param data
* 待传递参数
* @param url
* 待请求链接
*/
function ajaxTab(tid, data, url) {
	var zone = $('#' + tid);
	var zinfo = $.trim(zone.html());
	if (zinfo == '' || zinfo == 'Data failed to load') {
		$.ajax({
			url : url,
			data : data,
			dataType : 'text',
			success : function(data) {
				zone.html(data);
			},
			error : function() {
				zone.html('Data failed to load');
				return false;
			}
		})
	}
} 

/*
 * 直接雇佣消息提示
 */
function showMsg(obj,task_id){
	var url = SITEURL + '/task/' + task_id + '/';
	$.post(url+"?hireajax=1",function(json){
		if(json.status==false){
		    showDialog(json.msg+'！去看看其他任务吧。 <div class="a2"><a href="'+SITEURL+'/task/" > 创意任务大厅 >></a><a href="'+SITEURL+'/task/m5/"> 等待雇佣任务 >></a></div>',"notice","友情提示");
		}else{
			var p = window.open('about:blank');
			if(!p) showDialog("任务页面被浏览器阻止弹出，请您设置允许弹出窗口。","notice","友情提示");
			p.location=url;
		}
	},"json");
	return false;
}