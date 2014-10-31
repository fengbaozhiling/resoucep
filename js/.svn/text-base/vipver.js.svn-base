$(function(){
	In('jcarousel',function(){
		$('#jcarousel_scroll').jcarousel({
			auto: 5,
			wrap: 'last',
			scroll:1,
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
	$(window).scroll(function(){
			if($(document).scrollTop()>=220){
				$(".viptablist").addClass("viplist_fixed");
				$(".vipbanbennav ul").addClass("ul_fixed")
			}else{
				$(".viptablist").removeClass("viplist_fixed");
				$(".vipbanbennav ul").removeClass("ul_fixed")
			}
	})
		
$(".banbendb dl:nth-child(even)").addClass("onbg");
	//添加浮动窗口,威客名片
	In("bubBle",function(){
		$("img.viphead").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","events":"mouseenter","url":bub_url});
		});
	})
  
  //关闭和展开按钮
$('.rightNav').find('.rightNavclose').click(
   function(){
	   $('#Bar1190_big').hide();
	   $('#Bar1190_small').show();
	   $('.rightNav').css({width:'35px'});
	   }
);

$('.rightNav').find('.rightNavopen').click(
   function(){
	   $('#Bar1190_big').show();
	   $('#Bar1190_small').hide();
	   $('.rightNav').css({width:'130px'});
	   }
);
  
});