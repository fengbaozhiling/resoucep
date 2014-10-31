$(function(){
	//气泡提示
	$(".pic_tip").live("mouseover",function(){
			if($(this).parents().is('.choose_tx')==false && $(this).parents().is('.talent_list_box')==false ){
				var u = $(this).attr('uid');
	            $(this).css('z-index','2')
	            if($('#pos_'+u).length){
	                $('#pos_'+u).removeClass('hidden');
	            }else{
	            	$("body").ajaxStart(function(){
	            		$("#ajaxwaitid").hide();
	            	})
	    			$('<div class="pos_box" id="pos_'+u+'"></div>').appendTo($('#bubble')).load("tooltip.html");
	            }
			}
        }).live("mousemove",function(e){        	
			var u = $(this).attr('uid');
            var range = $(window).width()-40;
            var ben = $('#pos_'+u).width();
            if(ben+e.pageX<range){
                $('#pos_'+u).css({'left': e.pageX + 10, "top" :e.pageY +10})
            }
            else{
                $('#pos_'+u).css({'left': e.pageX - ben - 10, "top" :e.pageY +10})
            }
        }).live("mouseout",function(){
			var u = $(this).attr('uid');
            $(this).css('z-index','1')
            $('#pos_'+u).addClass('hidden');
        });
	/*最近来访*/
	$(".recvisitors li").hover(
	    function(){
			$(this).find('u').animate({bottom:"0px"},300).end().find('p').animate({bottom:"0px"},300);
			}
	, function(){
			$(this).find('u').animate({bottom:"-30px"},100).end().find('p').animate({bottom:"-30px"},100);
			});
   /*tab*/
	In('delayTab',"ScrollPage",function(){
		$(".posttab").delayTab({
			tabbox:'.tabbox',
			eventye: 'mousemove',
			delayTime:'200'
		});
	});
	
	/**/
	$('.headinfo h3').hover(
	     function(){
			 $(this).find('p').fadeIn();
			 },function(){
			 $(this).find('p').fadeOut(30);
			 }
	);
	$('.headinfo em').hover(
	     function(){
			 $(this).find('p').fadeIn();
			 },function(){
			 $(this).find('p').fadeOut(30);
			 }
	);
	
   /*滚动加载*/
   	var mycount1 = 1;
	var mycount2 = 1;
	
	In("ScrollPage",function(){
		$(function () {
			window.scrollTo(0, 0); 
			var loadobj=true;
			var loadwike=true;
			new EPWEIKE.scrollFunc.ScrollPage(window, { delay: 1000, marginBottom: 10 }, function (offset) {
				if (offset > 0) {
					if($('.postlistbox').is(":hidden")==false){
						if (loadobj==true) {
							$("#Loadding").show().html("正在加载，请稍候 ..."); 
							$.ajax({
								url: SITEURL+"/index.php?do=ajax&view=myhome",
								data: { page: mycount1,style:1,e_id:e_id},
								type: "get",
								success: function(html){
									if (html.length>0) {
										$('.postlistbox').append(html);
										mycount1++;
									} else if (html.length==0) {
										loadobj=false;
										$("#Loadding").show().html("没有内容了！");
									}
								}
							 })
						}
					}
					
					if($('.weikefeedbook').is(":hidden")==false){
						if (loadwike==true) {
							$("#Loadding").show().html("正在加载，请稍候 ..."); 
							$.ajax({
								url: SITEURL+"/index.php?do=ajax&view=myhome",
								data:{ page: mycount2,style:2,e_id:e_id},
								type: "get",
								success: function(data){
									if (data.length>0) {
										$('.weikefeedbook').append(data);
										mycount2++;
									} else if (data.length==0) {
										loadwike=false;
										$("#Loadding").show().html("没有内容了！");
									}
								}
							 })
						}
						
					}
				}
			});
		});
	});
	
	var desc = $(".postlistbox").html();
	desc = desc.replace(/<[^>]+>/g,"");//去掉所有的html标记
	desc = desc.replace(/\s+/g,""); 
	desc = desc.replace(/&nbsp;/ig, "");
	desc = desc.substr(0,80);
	var metaEl = document.getElementsByTagName("meta");
    metaEl[2].content = desc;
});
/**
 * 稿件描述检测
 * 
 * @Param contentObj
 *            待检测文本域ID
 * @param minLength
 *            最小字数
 * @param maxLength
 *            最大字数
 * @param winTitle
 *            窗口标题
 * @param msgType
 *            msgType 消息提示类型 0 shoDialog提示。1表示tips提示
 * @param showTarget
 *            showTarget 消息插入容器ID 。当msgType=1时有效
 * @param Object
 *            editor 编辑器对象
 */
function contentCheck(contentObj,winTitle,minLength,maxLength,msgType,showTarget,editor){
		var shtml = '';
		var len	  = 0;
		if(typeof editor=='object'){
			shtml =	editor.stripHtml();
		}else{
			shtml =	$("#"+contentObj).val();
		}
		shtml = trim(shtml);
		len	  = shtml.length;
		if(len>maxLength){
			if(msgType==1){
				tipsAppend(showTarget,winTitle+"内容不得多于"+maxLength+"个字",'warning','orange');
			}else{
				var des_msg = $("#"+contentObj).attr("msgArea");
				$("#"+des_msg).addClass("valid_error").html("<span>"+winTitle+"内容不得多于"+maxLength+"个字</span>");
			}
			return false;
		}else if(len<minLength){
			if(msgType==1){
				tipsAppend(showTarget,winTitle+"内容不得少于"+minLength+"个字",'warning','orange');
			}else{
				var des_msg = $("#"+contentObj).attr("msgArea");	
				$("#"+des_msg).addClass("valid_error").html("<span>"+winTitle+"内容不得少于"+minLength+"个字</span>");
			}
			return false;
		}else{
			var des_msg = $("#"+contentObj).attr("msgArea");
			$("#"+des_msg).removeClass("valid_error").html(" ");
			if(minLength==0) return true;
			return shtml;
		}
}