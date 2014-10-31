;(function($){
	$.fn.placeholder = function(){
		var i = document.createElement('input'),placeholdersupport ='placeholder' in i;
		if(!placeholdersupport){
			var inputs = jQuery(this);
			inputs.each(function(){
				var input = jQuery(this),
					text = input.attr('placeholder'),
					pdl = 0,height = input.outerHeight(),
					width = input.outerWidth(),
					idinput=input.attr("id"),
					placeholder = jQuery('<label for="'+idinput+'" class="phTips">'+text+'</label>');
				
					try{
						pdl = input.css('padding-left').match(/\d*/i)[0] * 1;
					}catch(e){
						pdl = 5;
					}
					placeholder.css({
						'margin-left': -(width-pdl),
						'height':height,
						'line-height':height+"px",
						'position':'absolute',
						'color': "#cecece",
						'font-size' : "12px"
					});
					if(input.val() != ""){
						placeholder.css({display:'none'});
					}else{
						placeholder.css({display:'inline'});
					}
					placeholder.insertAfter(input);
					input.keydown(function(e){
						placeholder.css({display:'none'});
					});
					input.keyup(function(e){
						if(jQuery(this).val() != ""){
							placeholder.css({display:'none'});
						}else{
							placeholder.css({display:'inline'});
						}
					});
				});
			}
		return this;
	};
})(jQuery);
$(document).ready(function(e) {
    $('input[placeholder]').placeholder();
});