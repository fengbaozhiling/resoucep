In('placeholder');


$(function(){
   startmarquee(24,100,2000,1);
   var str=window.location.hash;
   if(str!=''){
	  var url=str.replace("#","");
      $("html,body").animate({scrollTop:$("."+url).offset().top-70+"px"},500);   
   }
   
  
  $(window).scroll(function(){

		 //$('.enschennuo h3').html('111');
		 var h=$(window).scrollTop()+$('#fixed').height()+30;
		 var gd=$('.footer').offset().top;
		 var winto=parseInt($(window).scrollTop());
		 if(winto>=210){
			$('#fixed').addClass('gmfixed').css({left:$('.left').offset().left+"px",top:"30px"});
		 }else{
			 $('#fixed').removeClass('gmfixed');
		}
		if((h-gd)>0){
			$('#fixed').css({top:(gd-h)+"px"});
		}else{
			$('#fixed').css({top:"30px"});
		}
			
	    if($(window).scrollTop()>=120){
			$('.nav').css({position:'fixed',top:'30px'});
		}else{
			$('.nav').css({position:'relative',top:'auto'})
		}
		
	});

});