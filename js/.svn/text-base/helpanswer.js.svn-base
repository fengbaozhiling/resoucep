In('bannerset');
In('placeholder');

$(function(){
  startmarquee(24,100,2000,1);
  $('.heipleftnav>ul>li>a').click(
     function(){
		 if($(this).parent().find('dl').is(":hidden")==true){
			 $(this).parent().parent().find('li').removeClass('select');
			 $(this).parent().parent().find('dl').fadeOut(50);
			 $(this).parent().addClass('select');
			 $(this).parent().find('dl').fadeIn(300);
		 }else{
		    $(this).parent().parent().find('dl').fadeOut(50);
			$(this).parent().parent().find('li').removeClass('select');
		}
	  }
   );
   $('.heipleftnav li dd').click(
      function(){
		  $(this).parent().find('dd').removeClass('selectde');
		  $(this).addClass('selectde');
	  }
   );
   
});