// JavaScript Document

In('form');
In('placeholder');
In('tipsy',function(){
  $('input').tipsy({
        gravity: $.fn.tipsy.autoWE,
        trigger: 'focus',
		gravity: 'w',
		opacity: 0.8,
    });	
});

$(function(){
	$('.agreement i').click(
	   function(){
		  if($(this).attr('class')=='checkbox'){
		    $(this).removeClass('checkbox');
		  }else{
			$(this).addClass('checkbox'); 
		  }
	    }
	);
	
		$('.login i').click(
	   function(){
		  if($(this).attr('class')=='checkbox'){
		    $(this).removeClass('checkbox');
		  }else{
			$(this).addClass('checkbox'); 
		  }
	    }
	);

});
