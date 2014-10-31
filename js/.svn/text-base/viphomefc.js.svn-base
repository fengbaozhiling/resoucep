$(function(){
	In('delayTab',function(){
		$(".righttab").delayTab({
			tabbox:'.righttabbox',
			eventye: 'mousemove',
			delayTime:'200'
		});	
	});
	//瀑布流
	/*In('masonry',function(){
		$('.desifclist').masonry({
		  itemSelector: '.desifclistbox',
		  gutterWidth:17,
		  isFitWidth:true
		});
	});*/
	In('imagesloaded',function(){
			 $('.desifclist .desifclistbox').imagesLoaded(
			   function(){
					$('.desifclist .desifclistbox').fadeIn();
					In('masonry',function(){
					$('.desifclist').masonry({
					  itemSelector: '.desifclistbox',
					  gutterWidth:17,
					  isFitWidth:true
					});
				});
		});
	})
	
	In('jcarousel',function(){
		$('#ztcomm').jcarousel({
			auto: 2,
			scroll:1,
			wrap: 'last',
			initCallback: mycarousel_initCallback
		});
	})
	function mycarousel_initCallback(carousel)
	{
		carousel.buttonNext.bind('click', function() {
			carousel.startAuto(0);
		});
	
		carousel.buttonPrev.bind('click', function() {
			carousel.startAuto(0);
		});
	
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	};

  startmarquee(24,100,2000,1);
  $('.sjsjy li:last').css({border:"none"});

})