$(function(){
  $('.sortboxtype_r li:nth-child(even)').css({background:"#F9F9F9"});
 /* $('.sortlist').each(
    function(){
		if($(this).height()>300){
			$(this).parents('.sortbox').find('.sortboxtype').height($(this).height()+10);
			}
		}
  );*/
  $('.sortbox').hover(
     function(){
		 $(this).css({background:"#FDFAEC"});
		 },
     function(){
		 $(this).css({background:"#FFFFFF"});
		 });
  
  $('.sortboxtype').each(function(){
	  var fh=$(this).parents('.sortbox').height();
	  $(this).height(fh);
	  $(this).find('div').css({top:(fh-250)/2-15+"px"});
  }) 
	

});