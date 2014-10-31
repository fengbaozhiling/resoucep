$(function(){
	In('placeholder','rele_fast');
	In('chosen',function(){
	   	$(".selectstyle").chosen();
	});
	
	/*select*/
	$('.selectbox').hover(function(){
		$(this).find('div').addClass('select');
	}, function(){
		$(this).find('div').removeClass('select');
	});
	
	$('.servicslist_box').hover(function(){
		obj=$(this);
			trig=setTimeout(function(){
				obj.find('.share_button').fadeIn(100);
		},300);
	},function(){
		clearTimeout(trig);
		$(this).find('.share_button').hide();
	});
	
	/*多选搜索框*/
	$(".word input[type=text]").focus(function(){
		$(this).parent().find("button").show();
	});
	$(".word input[type=text]").focusout(function() {
		$(this).parent().find("button").hide();
	});
	
	//气泡提示
	In("bubBle",function(){
		$("img.pic_middle").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","mouseenter":"mouseenter","url":bub_url});
		});
	});

	/*tab*/
	In('delayTab',function(){
		$(".modeseo_t").delayTab({
			tabbox:'.modeseo_box',
			eventye: 'mousemove',
			delayTime:'200'
		});
	});	
	select_text('z');	

  /*-------------------------*/
/*  $('.task_class_list_box samp').click(
    function(){
		if($(this).attr('class')=='onclick'){
			$(this).removeClass('onclick');
	        $(this).parent().find('span').css({height:"20px",overflow:"hidden"});
			}else{
		    $(this).addClass('onclick');	
			$(this).parent().find('span').css({height:"auto",overflow:"auto"});	
		}
		}
  );
  
  if ($('.task_class_list_box span').css('height', 'auto').height() > 30) {
	    $('.task_class_list_box span').css('height', '20px');
	} else {
	    $('.task_class_list_box samp').remove();
	}*/
});

function select_text(attr_name){		
	$('.selectbox a').each(
	   function(){
		   var attr_val = false;
		   if(attr_name == 'z' && EPWEIKE.Service_list.z == $(this).attr('z')){
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

