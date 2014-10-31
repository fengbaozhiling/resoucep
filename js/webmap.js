In('delayTab',function(){
	$(".webmapspan").delayTab({
		tabbox:'#tabbox',
		eventye: 'mousemove',
		delayTime:'200'
	});
});

$(function(){
	$('.webmapbox_l').each(function(){
		var fh=$(this).parents('.borbox').height();
		$(this).height(fh);
		$(this).find('div').css({top:(fh-165)/2+"px"});
	});
});