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
		    $(this).parent().find('dl').fadeOut(50);
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
  /*-------------------------*/
  $(".btn span samp").click(
      function(){
		  $(this).parents('.btn').find('samp').removeClass('select');
		  $(this).parents('.btn').find('.tipbox').hide();
		  $('.heip_onoff').find('.heigth3').show();
		  
		  $(this).parents('span').find('.tipbox').show();
		  $(this).addClass('select');
	  }
		 
  );
  
  $('.tipbox i').click(
     function(){
		$(this).parents('span').find('.tipbox').hide();
        $(this).parents('.btn').find('samp').removeClass('select');
		$('.heip_onoff').find('.heigth3').hide();
		 }
  );
   
});

In.add('DFZ_print',{path:cdn_resource(JSURL + 'js/Plugin/DFZ_print.js'),type:'js',charset:'utf-8'});
In('DFZ_print');
function LoadPrintJsCallBack() {
		if (typeof forSPrint == "object" && forSPrint.Print) {
			forSPrint.data.artSourceHtml = window.location.toString().match(/http:\/\/.*?\//g);
			$('.article-video').length>0 && $('.article-video').remove();
			forSPrint.Print();
		}
}
$('#mPrint').live('click',function(){
	LoadPrintJsCallBack();
});