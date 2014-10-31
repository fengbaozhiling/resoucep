//查看大图控制
function thumbImg(obj, method) {
	if(!obj) {
		return;
	}
	
	file = obj.src;
	zw = obj.offsetWidth;
	zh = obj.offsetHeight;
	var SourceImg=obj.attributes["SourceImg"].nodeValue;
	if(zw < 2) {
		if(!obj.id) {
			obj.id = 'img_' + Math.random();
		}
		setTimeout("thumbImg(document.getElementById('" + obj.id + "'), " + method + ")", 100);
		return;
	}
	zr = zw / zh;
	method = !method ? 0 : 1;
	if(method) {
		fixw = obj.getAttribute('_width');
		fixh = obj.getAttribute('_height');
		if(zw > fixw) {
			zw = fixw;
			zh = zw / zr;
		}
		if(zh > fixh) {
			zh = fixh;
			zw = zh * zr;
		}
	} else {
		if(!obj.onclick) {
			obj.onclick = function() {
				zoom(obj, SourceImg);
			};
		}
	}
	obj.width = zw;
	obj.height = zh;
	
}

var zoomclick = 0, zoomstatus = 1;
function zoom(obj, zimg) {
	zimg = !zimg ? obj.src : zimg;
	if(!zoomstatus) {
		window.open(zimg, '', '');
		return;
	}
	if(!obj.id) obj.id = 'img_' + Math.random();
	var menuid = obj.id + '_zmenu';
	var menu = document.getElementById(menuid);
	var imgid = menuid + '_img';
	var zoomid = menuid + '_zimg';
	var maxh = (document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight) - 70;

	if(!menu) {
		menu = document.createElement('div');
		menu.id = menuid;
		var objpos = fetchOffset(obj);
		menu.innerHTML = '<div onclick="document.getElementById(\'append_parent\').removeChild(document.getElementById(\'' + obj.id + '_zmenu\'))" style="z-index:600;filter:alpha(opacity=50);opacity:0.5;background:#FFF;position:absolute;width:' + obj.clientWidth + 'px;height:' + obj.clientHeight + 'px;left:' + objpos['left'] + 'px;top:' + objpos['top'] + 'px"><table width="100%" height="100%"><tr><td valign="middle" align="center"><img src="' + IMGDIR + '/loading.gif" /></td></tr></table></div>' +
			'<div style="position:absolute;top:-100000px;display:none"><img id="' + imgid + '" src="' + zimg + '"></div>';
		document.getElementById('append_parent').appendChild(menu);
		document.getElementById(imgid).onload = function() {
			document.getElementById(imgid).parentNode.style.display = '';
			var imgw = document.getElementById(imgid).width;
			var imgh = document.getElementById(imgid).height;
			var r = imgw / imgh;
			var w = document.body.clientWidth * 1;
			w = imgw > w ? w : imgw;
			var h = w / r;
			if(h > maxh) {
				h = maxh;
				w = h * r;
			}
			document.getElementById('append_parent').removeChild(menu);
			menu = document.createElement('div');
			menu.id = menuid;
			menu.style.overflow = 'visible';
			menu.style.width = (w < 300 ? 300 : w) + 20 + 'px';
			menu.style.height = h  + 'px';
			menu.innerHTML = '<div class="zoominner"><p id="' + menuid + '_ctrl"><span class="y"><a href="' + zimg + '" class="imglink" target="_blank" title="在新窗口打开">在新窗口打开</a><a href="javascript:void(0);" id="' + menuid + '_adjust" class="imgadjust" title="实际大小">实际大小</a><a href="javascript:void(0);" onclick="hideMenu()" class="imgclose" title="关闭">关闭</a></span><span class="ceb2">鼠标滚轮可缩放，按住拖动可以移动</span></p><div align="center" onmousedown="zoomclick=1" onmousemove="zoomclick=2" onmouseup="if(zoomclick==1) hideMenu()"><img id="' + zoomid + '" src="' + zimg + '" width="' + w + '" height="' + h + '" w="' + imgw + '" h="' + imgh + '"></div></div>';
			document.getElementById('append_parent').appendChild(menu);
			document.getElementById(menuid + '_adjust').onclick = function(e) {adjust(e, 1)};
			/*
			 * if(BROWSER.ie){ menu.onmousewheel = adjust; } else {
			 * menu.addEventListener('DOMMouseScroll', adjust, false); }
			 */
			
			if(menu.addEventListener){/* firefox */
				menu.addEventListener('DOMMouseScroll',adjust,false);
			}// IE/Opera/Chrome
				menu.onmousewheel=adjust;
			
			showMenu({'menuid':menuid,'duration':3,'pos':'00','cover':1,'drag':menuid,'maxh':maxh+70});
		};
	} else {
		showMenu({'menuid':menuid,'duration':3,'pos':'00','cover':1,'drag':menuid,'maxh':menu.clientHeight});
	}
	if(BROWSER.ie) doane(event);
	var adjust = function(e, a) {
		var imgw = document.getElementById(zoomid).getAttribute('w');
		var imgh = document.getElementById(zoomid).getAttribute('h');
		var imgwstep = imgw / 10;
		var imghstep = imgh / 10;
		if(!a) {
			if(!e) e = window.event;
			if(e.altKey || e.shiftKey || e.ctrlKey) return;
			if(e.wheelDelta <= 0 || e.detail > 0) {
				if(document.getElementById(zoomid).width - imgwstep <= 200 || document.getElementById(zoomid).height - imghstep <= 200) {
					doane(e);return;
				}
				document.getElementById(zoomid).width -= imgwstep;
				document.getElementById(zoomid).height -= imghstep;
			} else {
				if(document.getElementById(zoomid).width + imgwstep >= imgw) {
					doane(e);return;
				}
				document.getElementById(zoomid).width += imgwstep;
				document.getElementById(zoomid).height += imghstep;
			}
		} else {
			document.getElementById(zoomid).width = imgw;
			document.getElementById(zoomid).height = imgh;
		}
		menu.style.width = (parseInt(document.getElementById(zoomid).width < 300 ? 300 : parseInt(document.getElementById(zoomid).width)) + 20) + 'px';
		menu.style.height = (parseInt(document.getElementById(zoomid).height) + 50) + 'px';
		setMenuPosition('', menuid, '00');
		doane(e);
		
	};
}


