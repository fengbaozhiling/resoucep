$(function(){
	  /*-------------------------*/
/*	$('.task_class_list_box samp').click(
	    function(){
			if($(this).attr('class')=='onclick'){
				$(this).removeClass('onclick');
		        $(this).parent().find('span').css({height:"20px",overflow:"hidden"});
				}else{
			    $(this).addClass('onclick');	
				$(this).parent().find('span').css({height:"auto",overflow:"auto"});	
			}
	});
  
    if ($('.task_class_list_box span').css('height', 'auto').height() > 30) {
	    $('.task_class_list_box span').css('height', '20px');
	} else {
	    $('.task_class_list_box samp').remove();
	}
*/	
	
	In('placeholder','rele_fast','bannerset');
	/*select*/
	In('chosen',function(){
	   	$(".selectstyle").chosen();
	});
	/*tab*/
	In('delayTab',function(){
		
		$(".articletab_t").delayTab({
			tabbox:'.articletab_c',
			eventye: 'mousemove',
			delayTime:'200'
		});
		
		$('.talent_menulist').delayTab({
			tabbox:'.talent_shoplist',
			eventye: 'mousemove',
			delayTime:'200'
		});
				
	});
	
	In('jcarousel',function(){
		
		$(".task_post_list").jcarousel({
			scroll: 1,
			auto:5,
			wrap:'last',
	        buttonNextHTML: null,
	        buttonPrevHTML: null,
			itemLoadCallback:itemLoadCallbackFunctions,
			initCallback: mycarousel_initCallbacks
		});
	    function itemLoadCallbackFunctions(carousel, state){
	     var i=carousel.first;
		 $('.jcarousel-page a').removeClass('select');
		 $('.jcarousel-page a').eq(i-1).addClass('select');
		}
		function mycarousel_initCallbacks(carousel) {
			$('.jcarousel-page a').bind('click', function() {
				carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
				return false;
			});
		};		
		
		$("#slidesk").jcarousel({
			scroll: 1,
			auto:4,
			wrap:'last',
	        buttonNextHTML: null,
	        buttonPrevHTML: null,
			itemLoadCallback:itemLoadCallbackFunction,
			initCallback: mycarousel_initCallback
		});
	   function itemLoadCallbackFunction(carousel, state){
	     var i=carousel.first;
		 $('.jcarousel-control a').removeClass('select');
		 $('.jcarousel-control a').eq(i-1).addClass('select');
		}
		function mycarousel_initCallback(carousel) {
			$('.jcarousel-control a').bind('click', function() {
				carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
				return false;
			});
			carousel.clip.hover(function() {
		        carousel.stopAuto();
		    }, function() {
		        carousel.startAuto();
		    });
		};
		    
	});	
});

