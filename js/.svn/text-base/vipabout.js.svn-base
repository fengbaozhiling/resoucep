
$(function() {
	In('placeholder');
	startmarquee(24, 100, 2000, 1);
	$(window).scroll(function() {
		var sct = $(window).scrollTop();

		//$('.ico_about li:first').html(sct);
		if (sct > 255) {
			$('.ico_about').css({
				left : $('.ico_menubg').offset().left + "px",
				top:"0px"
			});
			$('.ico_about').addClass('gmfixed');
		} else {
			$('.ico_about').removeClass('gmfixed');
		}
		if (sct > 255 && sct < 1550) {
			callcss();
			$('.ico_about li').eq(0).addClass('icc1');
		}
		if (sct > 1550 && sct < 2845) {
			callcss();
			$('.ico_about li').eq(1).addClass('icc2');
		}
		if (sct > 2845 && sct < 3790) {
			callcss();
			$('.ico_about li').eq(2).addClass('icc3');
		}
		if (sct > 3790 && sct < 5085) {
			callcss();
			$('.ico_about li').eq(3).addClass('icc4');
		}
		if (sct > 5085 && sct < 6035) {
			callcss();
			$('.ico_about li').eq(4).addClass('icc5');
		}
		if (sct > 6035 && sct < 6635) {
			callcss();
			$('.ico_about li').eq(5).addClass('icc6');
		}
		if (sct > 6635 && sct < 7930) {
			callcss();
			$('.ico_about li').eq(6).addClass('icc7');
		}
		if (sct > 7930 && sct < 8900) {
			callcss();
			$('.ico_about li').eq(7).addClass('icc8');
		}

		function callcss() {
			for ( i = 1; i < 9; i++) {
				$('.ico_about li').removeClass('icc' + i);
			}
		}

	});
	
	$('.ico_about li').click(
	   function(){
		   $('html,body').animate({scrollTop:($('#ic'+($(this).index()+1)).offset().top)-130+"px"},500);
		   }
	);
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