$(function(){
In('bannerset');
In('placeholder');
In('jcarousel',function(){
	$('#jcarousel_scroll').jcarousel({
        auto: 2,
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
	startmarquee(170,10,3000,2);
  $('.zqtop_li').last().css({"border-bottom":"none"});	
     //气泡提示
	
  	//添加浮动窗口,威客名片
	In("bubBle",function(){
		$("img.viphead").each(function(index, element) {
			var u=$(this).attr("uid");
			var bub_url = SITEURL+"/index.php?do=ajax&view=file&ajax=bubble_pic&u_id="+u;
			$(this).bubBle({"showbox":"#bubble","events":"mouseenter","url":bub_url});
		});
	})



/*var tips; var theTop = 60; var old = theTop;
function initFloatTips() {
   tips = document.getElementById('rightNavbox');
   moveTips();
};
function moveTips() {
   var tt=50;
   if (window.innerHeight) {
      pos = window.pageYOffset
   }else if (document.documentElement &&document.documentElement.scrollTop){
     pos = document.documentElement.scrollTop
 }else if (document.body) {
     pos = document.body.scrollTop;
 }
  pos=pos-tips.offsetTop+theTop;
  pos=tips.offsetTop+pos/10;
  if (pos < theTop) pos = theTop;
  if (pos != old) {
     tips.style.top = pos+"px";
     tt=10;
 }
old = pos;
setTimeout(moveTips,tt);
  }
  initFloatTips();*/
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