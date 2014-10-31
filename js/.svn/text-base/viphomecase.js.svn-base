// JavaScript Document
$(function(){
    startmarquee(24,100,2000,1);
	startmarquee(33,100,2000,2);
	In('delayTab',function(){
		$(".righttab").delayTab({
			tabbox:'.righttabbox',
			eventye: 'mousemove',
			delayTime:'200'
		});	
	});

	//瀑布流
	In('imagesloaded',function(){
			 $('.desifclist .desifclistbox').imagesLoaded(
			   function(){
					$('.caselist .caselistbox').fadeIn();
					In('masonry',function(){
					$('.caselist').masonry({
					  itemSelector: '.caselistbox',
					  gutterWidth:17,
					  isFitWidth:true
					});
				});
		});
	})
	
	In('jcarousel',function(){
	 $("#mycarousel").jcarousel({
			scroll: 1,
			auto:2,
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
		
		
	});

	$('.sjsjy li:last').css({border:"none"});
	$('.daykanban li:last').css({border:"none"});
	
	$('.classsort span').hover(function(){
		$(this).addClass('hover');
	}, function(){
		$(this).removeClass('hover');
	});
})