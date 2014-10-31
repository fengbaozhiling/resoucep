

$(function(){
 In('bannerset');
In('placeholder');
 startmarquee(24,100,2000,1);
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