/*
说明：
	*jquery.floatFollow v1.0
	* Date: 2014-06-24
	*兼容IE6+，火狐、谷歌各个等浏览器
	* https://www.zhongliangwen.com/
	*$('#div1').floatFollow();默认在右下角
	*$('#div1').floatFollow({"right":"10px","bottom":"15px"});
	*$('#div1').floatFollow({"right":"30px","bottom":"15px","starheight":"100px"});滚动100PX后开始跟随，可以传递元素到顶部的高度作为数字
*/

;(function($){
	$.fn.floatFollow = function( options ) {
		var settings = $.extend({},$.fn.floatFollow.defaults, options),
		_self = $(this);
		var htmlwrap=$("<div style='height:"+_self.height()+"px;width:"+_self.width()+"px; position:relative; margin-bottom:20px;z-index:100;'><div style='height:"+_self.height()+"px;width:"+_self.width()+"px; position:relative;'></div></div>");
		var closebar=$("<a href='javascript:void(0);' class='closflow' style='float:right;z-index:10;cursor:pointer; margin-right:10px; margin-top:10px;'>-</a>");
		_self.wrap(htmlwrap);
		if (settings.closebar==true) {
			closebar.insertBefore(_self).hide();
			closebar.click(function(){
				if (_self.is(":visible")) {
					$(this).html("▄").addClass("hover");
					_self.fadeOut("fast"); 
				} else if (_self.is(":hidden")) {
					$(this).html("-").removeClass("hover");
					_self.fadeIn("fast"); 
				}
			})
		}
		if (!_self){
			return false;
		}
		var starheightt=settings.starheight?parseFloat(settings.starheight):0,
			Agentie=navigator.userAgent.indexOf("MSIE 6.0");
		if(Agentie > 0){
			if (starheightt=false) {
				_self.parent().css(settings).css({'position': 'absolute'});
				$(window).scroll(function() {
					var topIE6;
					if (settings.bottom) {
						var selit=parseFloat(settings.bottom);
						topIE6 = $(window).scrollTop() + $(window).height()-selit - _self.outerWidth();
					} else if (settings.top) {
						var selit=parseFloat(settings.top);
						topIE6 = $(window).scrollTop()+selit;
					} else {
						topIE6 = $(window).scrollTop() + $(window).height() - _self.outerWidth();
					}
					_self.parent().css('top', topIE6);
					closebar.show();
				});
			} else {
				$(window).scroll(function() {
					var topIE6;
					var scroH =$(this).scrollTop();
					if(scroH>=starheightt){
						_self.parent().css(settings).css({'position': 'absolute'});
					} else if (scroH<starheightt){
						_self.parent().removeAttr("style");
						_self.slideDown("fast"); 
						closebar.hide().html("-").removeClass("hover");
					}
					if (settings.bottom) {
						var selit=parseFloat(settings.bottom);
						topIE6 = $(window).scrollTop() + $(window).height()-selit - _self.outerWidth();
					} else if (settings.top) {
						var selit=parseFloat(settings.top);
						topIE6 = $(window).scrollTop()+selit;
					} else {
						topIE6 = $(window).scrollTop() + $(window).height() - _self.outerWidth();
					}
					_self.parent().css('top', topIE6);
					closebar.show();
				});
			}
		} else {
			if (starheightt==0){
				_self.parent().css(settings).css({'width': _self.width()+'px'});
				_self.slideDown("fast"); 
				closebar.hide().removeClass("hover");
			} else {
				$(window).scroll(function() {
					var scroH = $(this).scrollTop();
					if(scroH>=starheightt){
						_self.parent().css(settings);
						closebar.show();
					} else if (scroH<starheightt){
						_self.parent().removeAttr("style").css({'width': _self.width()+'px'});
						_self.slideDown("fast"); 
						closebar.hide().html("-").removeClass("hover");
					}
				})
			}
		}
		if (settings.downshow==true) {
			var scrollFunc = function (e) {
				e = e || window.event;
				if (e.wheelDelta) {  //判断浏览器IE，谷歌滑轮事件             
					if (e.wheelDelta > 0) { //当滑轮向上滚动时
						_self.parent().css(settings);
						closebar.show();
					}
					if (e.wheelDelta < 0) { //当滑轮向下滚动时
						_self.parent().removeAttr("style").css({'width': _self.width()+'px'});
						_self.slideDown("fast"); 
						closebar.hide().html("-").removeClass("hover");
					}
				} else if (e.detail) {  //Firefox滑轮事件
					if (e.detail> 0) { //当滑轮向上滚动时
						_self.parent().removeAttr("style").css({'width': _self.width()+'px'});
						_self.slideDown("fast"); 
						closebar.hide().html("-").removeClass("hover");
					}
					if (e.detail< 0) { //当滑轮向下滚动时
						_self.parent().css(settings);
						closebar.show();
					}
				}
			}
			//给页面绑定滑轮滚动事件
			if (document.addEventListener) {//firefox
				document.addEventListener('DOMMouseScroll', scrollFunc, false);
			}
			//滚动滑轮触发scrollFunc方法  //ie 谷歌
			window.onmousewheel = document.onmousewheel = scrollFunc; 
		}
		settings.callback;
		return _self; //返回this，使方法可链。 
	}
	$.fn.floatFollow.defaults = {
		"right":0,
		"bottom":0,
		"starheight":false,
		"position": "fixed",
		"downshow": false,
		"closebar": false,
		"z-index": "9",
		"callback":{}
	};
})(jQuery);
