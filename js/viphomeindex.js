$(function(){
	In('marquee',function(){
		
	});
	
	In('placeholder');
	
	//瀑布流
	In('masonry',function(){
		$('.vipshopcase_list').masonry({
		  itemSelector: '.vipshopcase_box',
		  gutterWidth:17,
		  isFitWidth:true
		});
	});
	
	In('imagesloaded',function(){
			 $('.vipshopcase_list .vipshopcase_box').imagesLoaded(
			   function(){
					$('.vipshopcase_list .vipshopcase_box').fadeIn();
					In('masonry',function(){
					$('.vipshopcase_list').masonry({
					  itemSelector: '.vipshopcase_box',
					  gutterWidth:17,
					  isFitWidth:true
					});
				});
		});
	})
	
	/*tab*/
	In('delayTab',function(){
		$("#storytab").delayTab({
			tabbox:'.storybox',
			eventye: 'mousemove',
			delayTime:'200'
		});
		$("#newstab").delayTab({
			tabbox:'.newsbox',
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
			buttonPrevHTML: '<a href="javascript:;" class="prev"></a>',
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
  /*tab 更多*/
  $('#storytab u, #newstab u').mousemove(
     function(){
		 $(this).parents('.storytab').find('a').hide();	
	     $(this).parents('.storytab').find('a').eq($(this).index()).show();	 
	 }
  );
  /**/
  $('.vipshopcase_sort span').hover(
     function(){
		 $(this).addClass('hover');
		 }
  , function(){
		 $(this).removeClass('hover');
		 });
  
  /**/
  $('.viptopnav a').last().css({border:"none"});
  $('.viptopbox ul:first').show();
  $('.viptopnav a').hover(
     function(){
		 $(this).addClass('hover');
		 }
  , function(){
		 $(this).removeClass('hover');
		 });
   $('.viptopnav a').mouseover(
       function(){
		  $(this).parent().find('a').removeClass('select'); 
		  $(this).addClass('select');
		  $(this).parents('.viptopbox').find('ul').hide();
		  $(this).parents('.viptopbox').find('ul').eq($(this).index()).show();
		  }
   );	
   
    //气泡提示
	In("bubBle",function(){
		$("img.pic_middle").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","mouseenter":"mouseenter","url":bub_url});
		});
	});
	
	$('.navreles').hover(
	   function(){
		   $(this).addClass('navhover');
		   }
	, function(){
		   $(this).removeClass('navhover');
		   });
		
})