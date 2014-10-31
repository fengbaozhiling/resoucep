$(function(){
	   $('.task_class_list_li_box').hover(	
	   	function(){
			obj=$(this);
			trig=setTimeout(function(){
				obj.find('.share_button').fadeIn(200);
			},300);
		  
		},
	   	function(){
		 clearTimeout(trig);
		 $(this).find('.share_button').hide();
		 $(this).find('.share_box').hide();
		});

		$('.share_button').find('.ml_10').click(
		  function(){
			$(this).parent().parent().parent().find('.share_box').show();
			$(this).parent().parent().parent().find('.share_button').hide();
		});
		$("#button").click(function(){
			$("#form_task_search").submit();
		});
		$('.selectbox').hover(
			function(){
				$(this).find('div').addClass('select');
			}, function(){
				$(this).find('div').removeClass('select');
		});
		function select_text(attr_name){		
			$('.selectbox a').each(
			   function(){
				   var attr_val = false;
				   if(attr_name == 'f' && EPWEIKE.Task_list.f == $(this).attr('f')){
					   attr_val = true;
				   }
				   if(attr_name == 'z' && EPWEIKE.Task_list.z == $(this).attr('z')){
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
		select_text('f');
		select_text('z');
		/*多选搜索框*/
		$(".word input[type=text]").focus(function(){
		  $(this).parent().find("button").show();
		});
		$(".word input[type=text]").focusout(function() {
		  $(this).parent().find("button").hide();
		});
		/*select*/

		In('chosen',function(){
	   		$(".selectstyle").chosen();
		});
		/*tab*/
		In('delayTab',function(){
			$(".modeseo_t").delayTab({
				tabbox:'.modeseo_box',
				eventye: 'mousemove',
				delayTime:'200'
			});
			$('.tab_title').delayTab({
				tabbox:'.tab_list',
				eventye: 'mousemove',
				delayTime:'300'
			});
		});

/*	if ($('.task_class_list_box span').css('height', 'auto').height() > 30) {
	    $('.task_class_list_box span').css('height', '20px');
	} else {
	    $('.task_class_list_box samp').remove();
	}*/

	  /*-------------------------*/
/*	  $('.task_class_list_box samp').click(
	    function(){
			if($(this).attr('class')=='onclick'){
				$(this).removeClass('onclick');
		        $(this).parent().find('span').css({height:"20px",overflow:"hidden"});
				}else{
			    $(this).addClass('onclick');	
				$(this).parent().find('span').css({height:"auto",overflow:"auto"});	
			}
			}
	  );*/
		//任务列表的分享按钮
		var title = new Array();
		var shareurl = new Array();
		var summary = new Array();
		for (shrilenght=0;shrilenght<$("a[urlshare='urlshare']").length;shrilenght++){
			var indus_name = $("a[urlshare='urlshare']").eq(shrilenght).attr('indus_name');
			var indus_pname = $("a[urlshare='urlshare']").eq(shrilenght).attr('indus_pname');
			var g_name = $("a[urlshare='urlshare']").eq(shrilenght).attr('g_name');
			var title_str = $.trim($("a[urlshare='urlshare']").eq(shrilenght).html());
			title[shrilenght] = indus_name+(indus_pname ? '_' : '')+indus_pname+(g_name ? '_' : '')+g_name+'_一品威客';
			shareurl[shrilenght]=$("a[urlshare='urlshare']").eq(shrilenght).attr("url");
			shareurl[shrilenght]=shareurl[shrilenght] ? shareurl[shrilenght] : $("a[urlshare='urlshare']").eq(shrilenght).attr("url");
			var sub_desc = $("a[urlshare='urlshare']").eq(shrilenght).attr("desc");
			summary[shrilenght] = title_str + (title_str ? ">" : '')+sub_desc.replace("&nbsp;","");
			bShare.addEntry({
				title:title[shrilenght],
				url:shareurl[shrilenght],
				summary:summary[shrilenght]
			});
		}
		

		/*tab*/
		In('delayTab',function(){

			$(".modeseo_t").delayTab({
				tabbox:'.modeseo_box',
				eventye: 'mousemove',
				delayTime:'200'
			});
		});
	});
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