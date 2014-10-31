/*
说明：
	*jquery.bubBle v1.0
	* Date: 2014-07-03
	* https://www.zhongliangwen.com/
	*$('.pic_middle').bubBle({"showbox":"event","mouseenter":"mouseenter","url":"url"});
*/

;(function($){
	$.fn.bubBle = function( options ) {
		var settings = $.extend({},$.fn.bubBle.defaults, options),
		_self = this;
		if (!_self){
			return false;
		}
		//var style="<style>.hidden{display:none;}.pos_box{position:absolute;z-index:10;background-color:transparent;background-color: rgba(0, 0, 0, 0.6); filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1;padding:5px;font:12px/24px '宋体',Arial,Helvetica,sans-serif;}span.close_bub {cursor:pointer; position:absolute; right:15px; top:5px;}</style>";
		var style='';
		
		_self.each(function() {
			$(this).bind(settings.events,function(e){
				
				var u = $(this).attr('uid');
				$(this).css('z-index','1000');
				
				var range = $(window).width()-40;
				var ben = $('#pos_'+u).width();
				var thiswid = $(this).width();
				var offset=$(this).offset();
				if($('#pos_'+u).length){
					$('#pos_'+u).removeClass('hidden');
					if(ben+offset.left<range){
						$('#pos_'+u).css({'left': offset.left + thiswid , "top" :offset.top +10})
					}
					else{
						$('#pos_'+u).css({'left': offset.left - ben , "top" :offset.top +10})
					}
					$('#pos_'+u).siblings().addClass('hidden');
				}else{
					$.ajax({
						type: "get",
						url: settings.url,
						data: "html",
						success: function(html){
							$('<div class="pos_box" id="pos_'+u+'">'+style+'<a class="close_bub">×</a>'+html+'</div>').appendTo($('#bubble'));
							if(ben+offset.left<range){
								$('#pos_'+u).css({'left': offset.left  + thiswid, "top" :offset.top +10})
							}
							else{
								$('#pos_'+u).css({'left': offset.left - ben, "top" :offset.top +10})
							}
							$('#pos_'+u).siblings().addClass('hidden');
						}
					}); 
				}
				$('#pos_'+u).siblings().addClass('hidden');
			})
			$(settings.showbox).bind("mouseleave",function(){
				$('.pos_box').addClass('hidden');
			});
		});
		settings.callback;
		return _self; //返回this，使方法可链。 
	}
	$.fn.bubBle.defaults = {
		"showbox":"#bubble",
		"events":"mouseenter",
		"url":false,
		"callback":{}
	};
	$(document).click(function(event){
		if($(event.target).parents("#bubble").length==0){
			$(".pos_box").addClass('hidden');
		}
	})
	$(".pos_box").find(".close_bub").live("click",function(){
		$(this).parents(".pos_box").addClass('hidden');
	})
})(jQuery);
