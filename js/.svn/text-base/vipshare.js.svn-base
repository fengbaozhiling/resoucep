$(function(){
In('bannerset');
In('jcarousel',function(){
	$('#jcarousel_scroll').jcarousel({
        auto: 2,
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
	startmarquee(170,10,3000,2);
  $('.zqtop_li').last().css({"border-bottom":"none"});	
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