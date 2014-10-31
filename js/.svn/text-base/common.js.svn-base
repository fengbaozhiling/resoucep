//js异步加载预定义
In.add('form',{path:cdn_resource(JSURL+"js/form_and_validation.js"),type:'js'});
In.add('calendar',{path:cdn_resource(JSURL+"js/script_calendar.js"),type:'js'}); 
In.add('xheditor',{path:cdn_resource(JSURL+"js/Plugin/xheditor/xheditor-1.1.14/xheditor-1.1.14-zh-cn.js"),type:'js'});  
In.add('lavalamp',{path:cdn_resource(JSURL+"js/Plugin/lavalamp/jquery.lavalamp.js"),type:'js'});
In.add('jcarousel',{path:cdn_resource(JSURL+"js/Plugin/jcarousel/lib/jquery.jcarousel.min.js"),type:'js'})
In.add('tipsy',{path:cdn_resource(JSURL+"js/Plugin/tipsy/jquery.tipsy.js"),type:'js'});
In.add('uploadify',{path:cdn_resource(JSURL+"js/Plugin/uploadify/jquery.uploadify-3.1.min.js"),type:'js'});
In.add('uploadifyhandle',{path:cdn_resource(JSURL+"js/Plugin/uploadify/uploadifyhandle.js"),type:'js'});
In.add('uploadify_css',{path:cdn_resource(JSURL+"js/Plugin/uploadify/uploadify.css"),type:'css'});
In.add('pcas',{path:cdn_resource(JSURL+"js/PCASClass.js"),type:'js'});
In.add('delayTab',{path:cdn_resource(JSURL+"js/Plugin/jquery.delayTab.js"),type:'js',charset:'utf-8'});
In.add('placeholder',{path:cdn_resource(JSURL+"js/jquery.placeholder.js"),type:'js',charset:'utf-8'});
In.add('lazyload',{path:cdn_resource(JSURL+"js/Plugin/jquery_lazyload.js"),type:'js',charset:'utf-8'});
In.add('bannerset',{path:cdn_resource(JSURL+"js/topbannerset.js"),type:'js',charset:'utf-8'});
In.add('masonry',{path:cdn_resource(JSURL+"js/Plugin/jquery.masonry.min.js"),type:'js',charset:'utf-8'});
In.add('showDialog',{path:cdn_resource(JSURL+"js/showDialog.min.js"),type:'js',charset:'utf-8'});
In.add('chosen',{path:cdn_resource(JSURL+"js/Plugin/chosen/chosen.jquery.js"),type:'js',charset:'utf-8'});
In.add('login_reg',{path:cdn_resource(JSURL+"js/login_and_reg.js"),type:'js',charset:'utf-8'});
In.add('rele_fast',{path:cdn_resource(JSURL+"js/release_fast.js"),type:'js',charset:'utf-8'});
In.add('thumbimg',{path:cdn_resource(JSURL+"js/thumbimg.js"),type:'js',charset:'utf-8',rely:['showDialog']});
In.add('countdown',{path:cdn_resource(JSURL+"js/Plugin/jquery.jcountdown.js"),type:'js',charset:'utf-8'});
In.add('ScrollPage',{path:cdn_resource(JSURL+"js/ScrollPage.js"),type:'js',charset:'utf-8'});
In.add('floatFollow',{path:cdn_resource(JSURL+"js/jquery.floatFollow.js"),type:'js',charset:'utf-8'});
In.add('shelves',{path:cdn_resource(JSURL+"js/shelves.js"),type:'js',charset:'utf-8'});
In.add('bubBle',{path:cdn_resource(JSURL+"js/jquery.bubBle.js"),type:'js',charset:'utf-8'});
In.add('ezChoose',{path:cdn_resource(JSURL+"js/Plugin/jquery.ezChoose.js"),type:'js',charset:'utf-8'});
In.add('imagesloaded',{path:cdn_resource(JSURL+"js/jquery.imagesloaded.min.js"),type:'js',charset:'utf-8'});
In.add('StranJF',{path:cdn_resource(JSURL+'js/Std_StranJF.Js'),type:'js',charset:'utf-8'});
In.add('wapqq',{path:"http://wpa.b.qq.com/cgi/wpa.php",type:'js',charset:'utf-8'});
In.add('lazy',{path:cdn_resource(JSURL+"js/Plugin/jquery_lazyload.js"),type:'js',charset:'utf-8'});

/**
 * 
 * @param name
 *            公有名称
 * @param cls_show
 *            class 显示样式名称
 * @param cls_hide
 *            hide 样式名称
 * @param cnt
 *            tab的数个数
 * @param cur
 *            当前的个数
 * @param exp
 *            扩展。对象
 * @return
 */
function swaptab(name, cls_show, cls_hide, cnt, cur,exp) {
	var mpre='tab_',spre='div_',mzone={},szone={};
	typeof(exp)=='object'?'':exp={};
	exp.mpre?mpre=exp.mpre:'';
	exp.spre?spre=exp.spre:'';
	for (i = 1; i <= cnt; i++) {
		szone = $('#'+spre + name + '_' + i);
		mzone = $('#'+mpre + name + '_' + i);
		if (i == cur) {
			szone.removeClass('hidden').addClass('block');
			mzone.attr('class', cls_show);
			(exp.ajax==1&&exp.url)&&ajaxTab(spre + name + '_' + i,exp.data,exp.url);
		} else {
			szone.removeClass('block').addClass('hidden');
			mzone.attr('class', cls_hide);
		}
	}
}


//全局声明
var EPWEIKE={};
var STYLEID = '1', STATICURL = '', IMGDIR = SITEURL+'/resource/img/keke', VERHASH = 'cC0', charset = 'gbk', keke_uid = '0', cookiepre = '', cookiedomain = '', cookiepath = '', attackevasive = '0', disallowfloat = '', creditnotice = '';
var BROWSER = {};
var USERAGENT = navigator.userAgent.toLowerCase();
browserVersion({'ie':'msie','firefox':'','chrome':'','opera':'','safari':'','maxthon':'','mozilla':'','webkit':''});
/*
 * if(BROWSER.safari) { BROWSER.firefox = true; }
 */
BROWSER.opera = BROWSER.opera ? opera.version() : 0;

var USERABOUT_BOX = true;

function browserVersion(types) {
	var other = 1;
	for(i in types) {
		var v = types[i] ? types[i] : i;
		if(USERAGENT.indexOf(v) != -1) {
			var re = new RegExp(v + '(\\/|\\s)([\\d\\.]+)', 'ig');
			var matches = re.exec(USERAGENT);
			var ver = matches != null ? matches[2] : 0;
			other = ver !== 0 ? 0 : other;
		}else {
			var ver = 0;
		}
		eval('BROWSER.' + i + '= ver');
	}
	BROWSER.other = other;
}



var AJAX = [];
AJAX['url'] = [];
AJAX['stack'] = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

//工具函数
function isUndefined(variable) {
	return typeof variable == 'undefined' ? true : false;
}
function in_array(needle, haystack) {
	if(typeof needle == 'string' || typeof needle == 'number') {
		for(var i in haystack) {
			if(haystack[i] == needle) {
					return true;
			}
		}
	}
	return false;
}
function strlen(str) {
	return (BROWSER.ie && str.indexOf('\n') != -1) ? str.replace(/\r?\n/g, '_').length : str.length;
}

function getEvent() {
	if(document.all) return window.event;
	func = getEvent.caller;
	while(func != null) {
		var arg0 = func.arguments[0];
		if (arg0) {
			if((arg0.constructor  == Event || arg0.constructor == MouseEvent) || (typeof(arg0) == "object" && arg0.preventDefault && arg0.stopPropagation)) {
				return arg0;
			}
		}
		func=func.caller;
	}
	return null;
}

function setcookie(cookieName, cookieValue, seconds, path, domain, secure) {
	var expires = new Date();
	cookieName = cookiepre + cookieName;
	expires.setTime(expires.getTime() + seconds * 1000);
	domain = !domain ? cookiedomain : domain;
	path = !path ? cookiepath : path;
	document.cookie = escape(cookieName) + '=' + escape(cookieValue)
		+ (expires ? '; expires=' + expires.toGMTString() : '')
		+ (path ? '; path=' + path : '/')
		+ (domain ? '; domain=' + domain : '')
		+ (secure ? '; secure' : '');
}

function getcookie(name) {
	name = cookiepre + name;
	var cookie_start = document.cookie.indexOf(name);
	var cookie_end = document.cookie.indexOf(";", cookie_start);
	return cookie_start == -1 ? '' : unescape(decodeURI(document.cookie.substring(cookie_start + name.length + 1, (cookie_end > cookie_start ? cookie_end : document.cookie.length))));
}

/**
 * 按钮登录验证
 * @param url 跳转url
 * @param target  _self本窗口打开，_blank新窗口打开
 * @returns {Boolean}
 */
function user_check(url,target){
	if(check_user_login()){
		if(!target || target == '_self'){
			location.href = url;
		}else if(target == '_blank'){
			window.open(url);
		}
		return false;
	}
}
/** 检查用户是否登录 */
function check_user_login(url) {
	if (typeof(uid)=="undefined"||isNaN(uid) || uid == 0) {
		if(typeof(ROOTURL)!='undefined'){
			ajax_login('yun',SITEURL);
		}else{
			ajax_login();
		}
		return false;
	} else {
		return true;
	}
}

/** ajax_login跳转 */
function ajax_login(typestr,urlstr){
	var str_type = typestr ? '&type='+typestr : '';
	var str_url = urlstr ? '&url='+urlstr : '';
	showWindow('login',false, '/index.php?do=ajax&view=login'+str_type+str_url, true, 'get', 0);
	return false;
}

/**
 * 退出
 */
function logout(){
	$.getJSON(SITEURL+'/index.php?do=logout',function(json){
		if (json.data.synhtml){
		      var cookie = "cookie_logout_syn="+json.data.uid;
		      document.cookie = cookie;	        
		}
		var str=document.domain;
		var words= new Array(); //定义一数组
		words = str.split(".");
		var domain="."+words[1]+"."+words[2];
		 var multi_domain_cookie = "cookie_logout_multi_domain="+json.data.uid+"; domain="+domain;;
	     document.cookie = multi_domain_cookie;	 
		 window.location.href = json.data.syn;	
	})
}


/**
 * * 清除输入框的字符,只限制数据输入
 * 
 * @param {Object}
 *inputobj
 */
function clearstr(inputobj){
    inputobj.value = inputobj.value.replace(/[^.0123456789]/g, '');
    
}
/**
 * 只允许输入数字 
 */
function clearstr2(inputobj){
    inputobj.value = inputobj.value.replace(/[^0123456789]/g, '');
}

//新建命名空间函数
EPWEIKE.namespace=function(str){  
  var arr=str.split("."), o=EPWEIKE;  
		for(i=arr[0]=="GLOBAL"?1:0;i<arr.length; i++){  
  o[arr[i]]=o[arr[i]] || {};  
  o=o[arr[i]];  
  }  
} 

function img_error(){
	$('img').error(function() {
		if($(this).attr('validImg') != 'validatimg'){
			$(this).attr('src', cdn_resource(IMGURL+"images/common/nopic200.jpg"));
		}
	}).each(function() { // 修正IE下无法显示问题
		if($(this).attr('validImg') != 'validatimg'){
			$(this).attr('src', $(this).attr('src')); 
		}
	});
}
//$(document).ajaxComplete(function(){
//	img_error();
//	if(user_pic){
//		if($("#top_u_pic").length>0) $("#top_u_pic").html(user_pic);
//	}
//});

$(function(){
 // 返回顶部
 $('#goTopBtn').click(
    function(){
	   $("html,body").animate({scrollTop:"0px"},500);	
	}
  );
  $('.toolposit>div').eq(0).hover(
     function(){
		 $(this).find('.toolcontbox').show();
		 },
	 function(){
		 $(this).find('.toolcontbox').hide();
		 }
  );
  $('.toolposit>div').eq(1).hover(
     function(){
		 $(this).find('.weixingbox').show();
		 },
	 function(){
		 $(this).find('.weixingbox').hide();
		 }
  );
  $('.toolposit>div').eq(3).hover(
     function(){
		 $(this).find('.applist').show();
		 },
	 function(){
		 $(this).find('.applist').hide();
		 }
  );
   $(window).scroll(function(){
	    if($(window).scrollTop()>350){
			$('#goTopBtn').show();
		}else{
		    $('#goTopBtn').hide();	
		}
	});
   
   img_error();
   
   // 右侧任务小秘书
	$('#quick_secretary_btn').click(function(){
		var nums = $("#nums").val();
		if(nums=='手机号/QQ号' || ! nums){
			showDialog('请填写您的联系方式。','','提交失败');
			return false;
		}
		var re = /^[0-9-]{5,15}$/;
		
		if ( ! re.test(nums) ) {
		//	showDialog('只能填写数字且最长不能超过15个字符!','','提交失败');
		//	return false;
		}

		$.post('/index.php', {
			'do': 'ajax',
			'view': 'secretary',
			'ajax': 'submit',
			'nums': nums
		}, function(json){
			if(json.status==1){
				showDialog(json.msg,'right','提交成功');
			}else{
				showDialog(json.msg);
			}
		}, 'json');
	});
	
	//根据IP判断页面简繁显示
	var ft_homename = "ft"+self.location.hostname.toString().replace(/\./g,"");
	var ft_homename_flag = ft_homename+'_flag';
	var ft_homename = "ft"+self.location.hostname.toString().replace(/\./g,"");
	var ft_homename_flag = ft_homename+'_flag';
	var ft_arr = SITEURL.split('.');
	ft_arr.shift();
	var ft_domain = ft_arr.join('.');
	if(getcookie("ft"+ft_arr.join('')+'_flag')){
		var flag_co = getcookie("ft"+ft_arr.join('')+'_flag');
		var co = getcookie("ft"+ft_arr.join(''));
		setcookie("ftwww"+ft_arr.join('')+'_flag',flag_co,604);
		setcookie("ftwww"+ft_arr.join(''),co,604);
		setcookie("ft"+ft_arr.join('')+'_flag',0,-1,'/',ft_domain);
		setcookie("ft"+ft_arr.join(''),0,-1,'/',ft_domain);
	}
	if(!getcookie(ft_homename_flag)){
		$.getScript("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip="+ip+"&callback=?",function(){
	        if(remote_ip_info.province == '台湾'){
	        	setcookie(ft_homename,1,604);
	        }else{
	        	setcookie(ft_homename,0,604);
	        }
        	setcookie(ft_homename_flag,1,604);
        	In('StranJF');
	    });
	}else{
		In('StranJF');
	}
});

/**
 * 顶部登录变化
 */
function load_header_top() {
	var username = getcookie('username');
	var header_top_left = '<span>欢迎您，</span><span class="subnav_span navdown">'+
						  		'<a class="c666 subspan_bar c06c" href="' + SITEURL + '/index.php?do=user&view=index" rel="nofollow">'+username+'<i></i></a>'+
						  		'<div class="subnav_option hidden">'+
									'<ul class="subnavlist">'+
										'<li><a target="_blank" href="' + SITEURL + '/index.php?do=user&view=index">&gt;&nbsp;&nbsp;账号管理</a></li>'+
										'<li><a target="_blank" href="http://s.epweike.com/portal.php">&gt;&nbsp;&nbsp;一品论坛</a></li>'+
										'<li><a href="javascript:void(0);" onclick="logout();">&gt;&nbsp;&nbsp;退出</a></li>'+
									'</ul>'+
								'</div>'+
						  '</span>'+
						  '&nbsp;<a href="' + SITEURL + '/index.php?do=user&view=message">站内信<font class="cc00 fontb" id="messagecount_1"></font></a>'+
						  '&nbsp;<a href="javascript:void(0);" onclick="logout();">退出</a>';

	$(document).ready(function(){
		$("#index_r_bar").remove();
		$("#pingtai_span").html(header_top_left);
		setInterval(function(){$.get('/index.php?do=ajax&view=ajax&ac=noop&t=' + new Date().getTime())}, 600000);
	});
}

/**
 * 导航上方右侧登录变化
 */
function load_header_right(){
	if (username) {
		if(typeof(ROOTURL)=='undefined'){
			var url = SITEURL; 
			var login='会员登录';
			var task_manage='任务管理';
			var task_1='我发布的任务';
			var task_2='我参加的任务';
			var task_3='我的站内信';
			var task_4='收藏夹';
			var finance='财务管理';
			var finance_1='财务明细';
			var finance_2='我要充值';
			var finance_3='我要提现';
		} else{
			var url = ROOTURL; 
			var login='會員登陸';
			var task_manage='任務管理';
			var task_1='我發佈的任務';
			var task_2='我參與的任務';
			var task_3='我的站内信';
			var task_4='我的最愛';
			var finance='財務管理';
			var finance_1='財務明細';
			var finance_2='我要儲值';
			var finance_3='我要提現';
		}
		if(typeof(ROOTURL)=='undefined'){
			var header_right  =  '<div class="logintolinner f_l">'+
									'<div class="loginlitb_name">'+
										'<div class="loginlitb_topname" style="border-bottom: 1px solid rgb(223, 223, 223); height: 30px;"><span class="icoaraw">&nbsp;</span><span id="top_u_pic"><img alt="'+login+'" src="'+IMGURL+'images/common/defalheid.jpg" original-title=""></span>'+task_manage+'</div>'+
										'<div style="display: none; top: 38px;" class="loginlitb_box">'+
											'<div class="afterlogin_task">'+
												'<ul>'+
													'<li style="border-top: medium none;"><a target="_blank" href="'+url+'/index.php?do=user&view=employer&op=task&opp=xsrw">&gt;&nbsp;&nbsp;'+task_1+'</a></li>'+
													'<li><a target="_blank" href="'+url+'/index.php?do=user&view=witkey&op=task&opp=xsrw">&gt;&nbsp;&nbsp;'+task_2+'</a></li>'+
													'<li><a target="_blank" href="'+url+'/index.php?do=user&view=message">&gt;&nbsp;&nbsp;'+task_3+'<span id="messagecount_2"></span></a></li>'+
													'<li style="border-bottom: medium none;"><a target="_blank" href="'+url+'/index.php?do=user&view=witkey&op=collect">&gt;&nbsp;&nbsp;'+task_4+'</a></li>'+
												'</ul>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>'+
								'<div class="logintolinner logintooset f_r">'+
									'<div class="loginlitb_name">'+
										'<div class="loginlitb_topname t_c" style="border-bottom: 1px solid rgb(223, 223, 223); height: 30px;"><span class="icoaraw">&nbsp;</span>'+finance+'</div>'+
										'<div style="display: none; top: 38px;" class="loginlitb_box">'+
											'<div class="afterlogin_task">'+
												'<ul>'+
													'<li style="border-top: medium none;"><a target="_blank" href="'+url+'/index.php?do=user&view=finance&op=detail">&gt;&nbsp;&nbsp;'+finance_1+'</a></li>'+
													'<li><a target="_blank" href="'+url+'/index.php?do=user&view=finance&op=recharge">&gt;&nbsp;&nbsp;'+finance_2+'</a></li>'+
													'<li style="border-bottom: medium none;"><a target="_blank" href="'+url+'/index.php?do=user&view=finance&op=withdraw">&gt;&nbsp;&nbsp;'+finance_3+'</a></li>'+
												'</ul>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
		}else{
			var header_right = '<div class="logintolinner fl_l">'+
								'<div class="loginlitb_name">'+
									'<div class="loginlitb_topname">'+
										'<span class="icoaraw">&nbsp;</span>'+
										"<span id='top_u_pic'><img alt='"+login+"' src='"+url+"/tpl/default/theme/simple/img/2013/defalheid.jpg' original-title=''></span>"+task_manage+
									'</div>'+
									'<div class="loginlitb_box" style="display:none;">'+
										'<div class="afterlogin_task">'+
											'<ul>'+
												'<li><a href="'+url+'/user-view-employer-op-task-opp-xsrw.html" target="_blank">&gt;&nbsp;&nbsp;'+task_1+'</a></li>'+
												'<li><a href="'+url+'/user-view-witkey-op-task-opp-xsrw.html" target="_blank">&gt;&nbsp;&nbsp;'+task_2+'</a></li>'+
												'<li><a href="'+url+'/index.php?do=user&view=message" target="_blank">&gt;&nbsp;&nbsp;'+task_3+'<span id="messagecount_2"></span></a></li>'+
												'<li><a href="'+url+'/index.php?do=user&view=witkey&op=collect" target="_blank">&gt;&nbsp;&nbsp;'+task_4+'</a></li>'+
											'</ul>'+
										'</div>'+
									'</div>'+
								'</div>'+
							'</div>'+
							'<div class="logintolinner logintooset fl_r">'+
								'<div class="loginlitb_name">'+
									'<div class="loginlitb_topname t_c">'+
									'<span class="icoaraw">&nbsp;</span>'+
									finance+
									'</div>'+
									'<div class="loginlitb_box" style="display:none;">'+
										'<div class="afterlogin_task">'+
											'<ul>'+
												'<li><a href="'+url+'/index.php?do=user&view=finance&op=detail" target="_blank">&gt;&nbsp;&nbsp;'+finance_1+'</a></li>'+
												'<li><a href="'+url+'/index.php?do=user&view=finance&op=recharge" target="_blank">&gt;&nbsp;&nbsp;'+finance_2+'</a></li>'+
												'<li><a href="'+url+'/index.php?do=user&view=finance&op=withdraw" target="_blank">&gt;&nbsp;&nbsp;'+finance_3+'</a></li>'+
											'</ul>'+
										'</div>'+
									'</div>'+
								'</div>'+
							'</div>';
		}
		$("#menberEnter").html(header_right);
	}
}

function getHost(url) {
	var host = "null";
	if(typeof url == "undefined"
					|| null == url)
			url = window.location.href;
	var regex = /.*\:\/\/([^\/]*).*/;
	var match = url.match(regex);
	if(typeof match != "undefined"
					&& null != match)
			host = match[1];
	return host;
}

function cdn_resource (url) {
	var urlhash = url.length % 5,
		root_domain,
		geturl,
		prefix;
	var domain = getHost(url);
	if ((domain.split('.')).length > 2 ){
		root_domain = domain.substr(domain.indexOf('.'));
	} else {
		root_domain = '.'+domain;
	}
	var utli =url.substr(url.indexOf(domain)+domain.length);
	urlhash = urlhash + 10;//只能访问img10-img14的域名
	prefix = 'http://static'+urlhash;
	geturl = prefix+root_domain+utli;
	return geturl;
}


/**
 * 需求字数检查
 * 
 * @param obj
 *            需求对象
 * @param 最大长度
 */
function checkAtxt(obj,maxLength,e,masg){
	var  val   = EPWEIKE.removeHTMLTag($.trim(obj.value));
	
	var  len   = val.length-1;
		e.keyCode==8?len-=1:len+=1;
		len<0?len=0:'';
	
	var Remain = Math.abs(maxLength-len);
	if(maxLength>=len){
		$(masg).html("已输入长度:"+len+",还可以输入:"+Remain+"字");
	}else{
		$(masg).html("可输入:"+maxLength+"字,已超出长度:"+Remain+"字");
	}
}

/**
 * 友情链接申请
 */
function link_box(location_id) {
	if (check_user_login()) { 
		showWindow('linkbox', false, '/index.php?do=ajax&view=link&ac=add&location_id=' + location_id, 1, 'get', 0);
	}
}


function doane(event) {
	e = event ? event : window.event;
	if(!e) e = getEvent();
	if(BROWSER.ie && typeof(e)!='undefined') {
		e.returnValue = false;
		e.cancelBubble = true;
	} else if(e) {
		e.stopPropagation();
		e.preventDefault();
	}
}

if(getcookie('dsfdsfda')==1){
	$("#note").html("<div style='background:red;text-align:center;'><a href='/index.php?dsfdsfda=-1' style='color:#fff'>您现在处于测试环境中，点击后进入正式环境</a></div>");
}

$(function(){
	In ("wapqq",'showDialog',function(){
		//客服QQ
		BizQQWPA.addCustom([
			{ nameAccount: 4006999467, selector: 'epwapQQ'},
			{ nameAccount: 4006999467, selector: 'epwapQQ_a'},
			{ nameAccount: 4006999467, selector: 'epwapQQ_f'}
		])
	});
	//头部下拉菜单
	$('.subnav_span').live({
	   mouseenter:
	   function(){
			$(this).find('div').removeClass('hidden').addClass('block');
			$(this).find('.subspan_bar').addClass('on');
		},
	   mouseleave:
	   function(){
			$(this).find('div').removeClass('block').addClass('hidden');
			$(this).find('.subspan_bar').removeClass('on');
		}
	});
	
	//头部搜索条件切换
	$("#topsearch_task").click(function(){
		$(this).addClass("selected");
		$("#topsearch_talent").removeClass("selected");
		$("#topsearch_type").val("task_list");
	});
	$("#topsearch_talent").click(function(){
		$(this).addClass("selected");
		$("#topsearch_task").removeClass("selected");
		$("#topsearch_type").val("talent");
	});
	//搜索框键盘上下切换
	
	var crentid = -1;
	document.onkeydown = function(event) {
		if ($(".serchdream").is(":visible")==true) {
			var event = event || window.event;
			switch (event.keyCode) {
				case 38:
					crentid=(crentid==1)?crentid-1:-1;
					if (crentid<0){
						crentid=1;
					}
					$(".sercaxy").eq(crentid).addClass("hover").siblings().removeClass("hover");
					break;
				case 40:
					crentid=(crentid==0)?crentid+1:-1;
					if (crentid<0){
						crentid=0;
					}
					$(".sercaxy").eq(crentid).addClass("hover").siblings().removeClass("hover");
					break;
				case 13:
					$(".sercaxy.hover").click();
					break;
			}
		}
	}
	
	//搜索增加下拉
	$('#search_key').bind('input propertychange',function() {
		$('.dercatext').html($(this).val());
		if (this.value==''||this.value==this.defaultValue){
			$(".serchdream").hide("fast"); 
		} else {
			$(".serchdream").show("fast"); 
		}
	});
	$(".search_bigbox").live("mouseleave",function(){
		$(".serchdream").hide("fast")
	})
	$(".sercaxy").hover(function(){
		$(this).addClass("hover")
	},function(){
		$(this).removeClass("hover")
	})
	
	//头部搜索
	$("#topsearch_btn").click(function (){
		topSearch();
	});
	
	$("#search_task").click(function (){
		topSearch();
	});
	
	$("#search_user").click(function (){
		topSearch1();
	});
	if($("#search_key").length){
	window.document.getElementById('search_key').onkeydown = function(e){
		var e = e ? e : window.event; 
		var code = e.which ? e.which : e.keyCode;     //获取按键值
		if(code==13){
			topSearch();
		}
	}
	}
	function topSearch(){
		var searchKey = $.trim($("#search_key").val());
			if(searchKey&&searchKey!='输入关键词搜索'){
				var type    = $("#topsearch_type").val();
				var view    = $("#topsearch_view").val();
				if(typeof(ROOTURL)!="undefined"){
					if(type=='task') type='task';
					var link    = encodeURI($("#topsearch_site").val()+"/index.php?do=yun&view="+type+"&k="+searchKey);
				}else{
					var link    = encodeURI($("#topsearch_site").val()+"/index.php?do="+type+"&view="+view+"&k="+searchKey);
				}
				$('#frm_topsearch').attr('action',link);
				window.document.location.replace(link);
		}
	}
	function topSearch1(){
		var searchKey = $.trim($("#search_key").val());
			if(searchKey&&searchKey!='输入关键词搜索'){
				var type    = "talent";
				var view 	= "list";
				if(typeof(ROOTURL)!="undefined"){
					var link    = encodeURI($("#topsearch_site").val()+"/index.php?do=yun&view="+type+"&k="+searchKey);
				}else{
					var link    = encodeURI($("#topsearch_site").val()+"/index.php?do="+type+"&view="+view+"&k="+searchKey);
				}
				$('#frm_topsearch').attr('action',link);
				window.document.location.replace(link);
		}
	}
	//有隐藏的侧边导航
	var sidbar_main=$('.sidbar_main');
	var closenav=$("<a href='javascript:void(0);' class='closenav' style='float:right;z-index:10;cursor:pointer; margin-right:10px; margin-top:10px; font-size:14px;'>×</a>");
	$(".sidbarhiden").live({
		mouseenter:function(){
			$(this).find('.sidbar_main').fadeIn("fast"); 
			$(this).find('#sidbarbottom').fadeIn("fast"); 
			$(this).find("div:first span").removeClass("ico_arrdown").addClass('ico_arrtop');
		},
		mouseleave:function(){
			$(this).find('.sidbar_main').hide();
			$(this).find('#sidbarbottom').hide();
			$(this).find("div:first span").removeClass("ico_arrtop").addClass('ico_arrdown');
		}
	})
	
	//验证码的隐藏
	$("#J_CheckCode,#txt_auth_code,.txt_auth_code").live('focus',function(){
		if ($(this).next(".CheckCode").is(":hidden")){
			$(this).next(".CheckCode").find("img").click();
		}
		$(this).next(".CheckCode").show();
		
	})
	
	//侧边导航
	$('.sidbar_main li').mouseenter(function(){
		var sidbar_mainoffset=sidbar_main.offset().top;
		var sidbar_mainoHeight=sidbar_main.height();
		var topback=$(this).offset().top-sidbar_mainoffset;
		if ($(this).find('.catynavlist').find(".closenav").length==0) {
			closenav.prependTo($(this).find('.catynavlist'));
		}
		$(".catynavlist").css('height',sidbar_mainoHeight+2+'px');
		$(this).addClass('selected');
		$(this).find('.catynavlist').css('top',-(topback+1)+'px').show();
	}).mouseleave(function(){
		$(this).removeClass('selected');
		$(this).find('.catynavlist').hide();
	})
	closenav.bind("click",function(){
		$(this).parent().hide();
		if ($(".sidbarhiden").length>0) {
			sidbar_main.hide();
		}
	})
	//顶部跟随滚动
	In("floatFollow",function(){
		$('.topfixed').floatFollow({"top":"0","left":"0","bottom":"auto","z-index":"10","downshow": true});
	})
	
	//微信二维码
	if ($(".mosver").length>0){
		$(".mosver").hover(
			function () {
				var lefwxinPosition=$(this).offset().left;
				var topwxinPosition=$(this).offset().top;
				$(this).siblings(".mosver_show").show().css("left",lefwxinPosition+60+"px").css("top",topwxinPosition-180+"px").css("z-index","1000");
			},
			function () {
				$(this).siblings(".mosver_show").hide()
			}
		);
	}
	
	//登陆选择
	$(".loginlitb_box").hide();
	$(".loginlitb_name").live({
		mouseenter:
		function(){
			$(this).find("li:first").css("border-top","none");
			$(this).find("li:last").css("border-bottom","none");
			$(this).find(".loginlitb_topname").css("border-bottom","1px solid #f5f5f5").height(35);
			$(this).find(".loginlitb_box").css("display","block").css("top",43+"px"); 
		},
		mouseleave:
		function(){
			$(this).find(".loginlitb_topname").css("border-bottom","1px solid #dfdfdf").height(30);
			$(this).find(".loginlitb_box").css("display","none").css("top",38+"px"); 
		}
	});
	//判断是否登录，然后加载相应的登录框ajax/ajax_index_unlogin.html
	//var uid=23512351;
	/*if (typeof(uid)=="undefined"||isNaN(uid) || uid == 0) {
		$.ajax({
			url: (ModelWeb==true)?(SITEURL+"/ajax/ajax_index_unlogin.html"):(SITEURL+"/index.php?do=ajax&view=index&op=unlogin&refer="+refer),
			type: "GET",
			dataType: "html",
			success: function(html){
				if($("#menberEnter").length == 0){
					$(html).insertAfter(".search_bigbox");
				}
				//In('login_reg');
			}
		})
	} else {//ajax/ajax_index_logined.html
		$.ajax({
			url: (ModelWeb==true)?(SITEURL+"/ajax/ajax_index_logined.html"):(SITEURL+"/index.php?do=ajax&view=index&op=logined"),
			type: "GET",
			dataType: "html",
			success: function(html){
				if($("#menberEnter").length == 0){
					$(html).insertAfter(".search_bigbox");
					load_header_right();
				}
			}
		})
	}*/
	//回车执行登录
	$("body").bind('keyup',
	function(event) {
		if (event.keyCode == 13) {
			user_login(1,'_rt');
		}
	});
})

In('jcarousel');
function mycarousel_initCallback(carousel) {
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

/**
 * ajax分页 向指定容器中异步加载分页数据。
 * 
 * @param ajaxDom
 *            需要加载内容的容器ID
 * @param loadUrl
 *            数据请求链接
 * @param loadPage
 *            加载页面
 */
function ajaxpage(ajaxDom,loadUrl,loadPage){
	var showDom = $("#"+ajaxDom);
	var pageDom = $("#page"+loadPage);
	var oldDom = showDom.clone(true).hide();
	if(pageDom.length==0&&loadPage>1){
		showDom.load(loadUrl+'&inajax=1 #'+ajaxDom+'>*', function() {
			showDom.before(oldDom);
			showDom.show();
			showDom.siblings().hide();
			showDom.attr("id","page"+loadPage);
			$("#task_info").show();
			$("#nav_lists_nav").show();
			$("#nav_anchor").show();
			$("#nav_anchor").next().find(".filter").show();
			$("#nav_anchor").next().find(".filterSlect").show();
			$("#task_comment").show();
			if ($("#gj_summery").length){
				EPWEIKE.alTool();
				EPWEIKE.plTool();
				//评论绑定事件
				$(".tar_comment").keydown(function(event){
					EPWEIKE.checkCommentInner(this,event);
				});
				$(".tar_comment").focus(function(event){
					EPWEIKE.tarClick(this,event);
				}).blur(function(event){
					EPWEIKE.tarBlur(this,event);
				});
				$(".answer-zone").click(function(){
					EPWEIKE.work_comment(this);
				});
				$(".answer_word").hide();
				$('input[name="page"]').val(" ");
				$("html,body").animate({scrollTop: $("#page"+loadPage).offset().top-30});				
			}
			if ($(".authortool").length){
				putconHtext ();
				tksconTc ();
				tksconTx ();
				$(".closplun").trigger('click');
				$("html,body").animate({scrollTop: $("#page"+loadPage).offset().top-130});
				//$("html,body").animate({scrollTop: $("#nav_anchor").offset().top-30});
			}
			
		});
	}else{
		if(loadPage==1){
			showDom.show().siblings().hide();
			$("#nav_anchor").show();
			$("#nav_anchor").next().find(".filter").show();
			$("#nav_anchor").next().find(".filterSlect").show();
			if ($("#gj_summery").length && ajaxDom != "comment_page"){
				$("html,body").animate({scrollTop: $("#nav_anchor").offset().top-30});
			}
			if ($("#comment_page").length && ajaxDom == "comment_page"){
				$("html,body").animate({scrollTop: $("#comment_page").offset().top-30});
			}
		}else{
			pageDom.show().siblings().hide();
			$("#nav_anchor").show();
			$("#nav_anchor").next().find(".filter").show();
			$("#nav_anchor").next().find(".filterSlect").show();
			if ( $("#page"+loadPage).length){
				$('input[name="page"]').val(" ");
				$("html,body").animate({scrollTop: $("#page"+loadPage).offset().top-30});
			}
		}
	}
}
/**
 * 分页输入页数跳转
 * @param txtDom 输入框的id值
 * @param loadUrl 数据请求链接
 * @param maxPage 最大页数
 */
function gotopage(obj,loadUrl,maxPage,ajaxDom,anchor,s_static){
	var txtVal = 0;
	var txtDom = $(obj).prev();

	txtVal = txtDom.val() ? parseInt(txtDom.val()) : 0;
	if(txtVal <= 0){
		txtVal = 1;
		txtDom.val(txtVal);
	}
	if(txtVal >= maxPage){
		txtVal = maxPage;
		txtDom.val(txtVal);
	}
	var last_char = loadUrl[loadUrl.length-1];
	var sp = (loadUrl.indexOf('?') >= 0) ? (last_char == '&' ? '' : '&') : (last_char == '?' ? '' : '?');
	var url = '';
	if(s_static || ajaxDom){
		if(loadUrl.indexOf('page') >= 0){
			if(loadUrl.indexOf('-') >=0 ){
				var regx = /page\-(\d+)/gi;
				url = loadUrl.replace(regx,"page-"+txtVal);
			}else{
			    var regx = /page(\d+)/gi;
				url = loadUrl.replace(regx,"page"+txtVal);
			}
		}else if(loadUrl.indexOf('ask.') == 7){
			if(txtVal > 1){
				if(loadUrl.match(/\.html$/)) {
					url = loadUrl.substr(0, loadUrl.length - 5) + 'p' + txtVal + '.html';
				} else {
					url = loadUrl + 'p' + txtVal + '.html';
				}
			}else{
				url = loadUrl;
			}
		}else{
			if (ajaxDom) {
				url = loadUrl + sp + 'page=' + txtVal;
			} else {
				if (loadUrl.match(/p1\.html/)) {
					if (txtVal > 1) {
						url = loadUrl.replace(/p1\.html/, 'p' + txtVal + '.html');
					} else if (txtVal == 1) {
						if (loadUrl.match(/\/p1\.html/)) {
							url = loadUrl.replace(/p1\.html/, '');
						} else {
							url = loadUrl.replace(/p1\.html/, '.html');
						}
					}
				} else {
					url = loadUrl + sp + 'page' + txtVal;
				}
			}
		}
	}else{
		url = loadUrl + sp + 'page=' + txtVal;
	}
	if(ajaxDom){
		ajaxpage(ajaxDom,url+anchor,txtVal);
	}else{
		window.location.href=url+anchor;
	}
}
//清除HTML标签
EPWEIKE.removeHTMLTag = function (str) {
	str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
	str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
	str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
	str=str.replace(/&nbsp;/ig,'');//去掉&nbsp;
	return str;
}

/**
 * 消息提示方法
 * 
 * @param target
 *            当前操作对象id
 * @param msg
 *            提示消息
 * @param type
 *            提示类型 successful error waring
 * @param color
 *            提示框颜色
 */
function tipsAppend(target, msg, type, color){
	$("#tips").length==0 && $("#" + target).before("<div id='tips'></div>");
	var tips = $("<div class='messages " + color + "' style=\"color:red; background:#fcf3e7; border:1px solid #ffa365;margin:5px 0;\"><span class='icon16'>" + type + "</span>" + msg+"</div>" );
	$("#tips").empty().append(tips);
	msgshow(tips);
	$(".topfixed").parent().css("position", "relative");
	var hashs=$("#tips").attr("id");
		window.location.hash=hashs; 
	var hide = setTimeout(function() {
		msghide($("#tips"));
		clearTimeout(hide);
	}, 6000);
}
// 显示消息
function msgshow(ele) {
	var t = setTimeout(function() {
		ele.slideDown(200);
		clearTimeout(t);
	}, 100);
}
// 关闭消息
function msghide(ele) {
	ele.animate({
		opacity : .01
	}, 200, function() {
		ele.slideUp(200, function() {
			ele.remove();
		});
	});
};
/**
 * 稿件描述检测
 * 
 * @Param contentObj
 *            待检测文本域ID
 * @param minLength
 *            最小字数
 * @param maxLength
 *            最大字数
 * @param winTitle
 *            窗口标题
 * @param msgType
 *            msgType 消息提示类型 0 shoDialog提示。1表示tips提示
 * @param showTarget
 *            showTarget 消息插入容器ID 。当msgType=1时有效
 * @param Object
 *            editor 编辑器对象
 */
function contentCheck(contentObj,winTitle,minLength,maxLength,msgType,showTarget,editor){
		var shtml = '';
		var len	  = 0;
		if(typeof editor=='object'){
			shtml =	EPWEIKE.removeHTMLTag(EPWEIKE.editor.getSource());
		}else{
			shtml =	$("#"+contentObj).val();
		}
		shtml = trim(shtml);
		len	  = shtml.length;
		if(len>maxLength){
			if(msgType==1){
				tipsAppend(showTarget,winTitle+"内容不得多于"+maxLength+"个字",'warning','orange');
			}else{
				var des_msg = $("#"+contentObj).attr("msgArea");
				$("#"+des_msg).addClass("valid_error").html("<span>"+winTitle+"内容不得多于"+maxLength+"个字</span>");
			}
			return false;
		}else if(len<minLength){
			if(msgType==1){
				tipsAppend(showTarget,winTitle+"内容不得少于"+minLength+"个字",'warning','orange');
			}else{
				var des_msg = $("#"+contentObj).attr("msgArea");	
				$("#"+des_msg).addClass("valid_error").html("<span>"+winTitle+"内容不得少于"+minLength+"个字</span>");
			}
			return false;
		}else{
			var des_msg = $("#"+contentObj).attr("msgArea");
			$("#"+des_msg).removeClass("valid_error").html(" ");
			if(minLength==0) return true;
			return shtml;
		}
}


/**
 * 发送 站内信
 * 
 * @param int
 * to_uid 接受方用户编号
 * to_username 接受方用户名
 */
function sendMessage(to_uid,to_username) {
	if(check_user_login()){
		if (uid == to_uid) {
			showDialog('无法给自己发送站内短信', 'alert', '操作提示');
					return false;
		}
		var to_task_id = arguments[2] ? arguments[2] : 0;
		var url = '/index.php?do=ajax&view=message&op=send&to_uid=' + to_uid + '&to_username=' + to_username;

		if (typeof (task_id) != 'undefined' && task_id) {
			url += '&to_task_id=' + to_task_id;
		}
		showWindow('message','发送站内信',encodeURI(url),1,'get',0);
		return false;
	}
}

/**
 * 收藏
 * 
 * @param string
 *            type 收藏类型 task/work/case/shop/service/employer
 * 
 */
function favor(pk,type,model_code,obj_uid,obj_id,obj_name,origin_id,from) {
	if (check_user_login()) {
		from = isUndefined(from) ? 0:from;
		//alert(pk+','+type+','+model_code+','+obj_uid+','+obj_id+','+obj_name+','+origin_id);
		var url='/index.php?do=ajax&view=ajax&ac=favor';
		$.post(url,{pk:pk,keep_type:type,obj_id:obj_id,obj_id:obj_id,model_code:model_code,obj_uid:obj_uid,obj_name:obj_name,origin_id:origin_id,from:from},function(json){
			if(json.status==1){
				if(from == 'task_detail'){
					$('#detail_favor').html("<a class=\"favor_star selec\" href=\"javascript:cancle_favor\("+json.data.fid+','+obj_id+',\''+from+"\'\)\" title=\'取消收藏\'></a>");
					showDialog(json.data.msg,'right',json.msg);return false;
				}else{
					if(from){
						$("#"+from).html("<a href=\"javascript:cancle_favor\("+json.data.fid+','+obj_id+',\''+from+"\'\)\" title=\'取消收藏\'>- 收藏</a>");
						showDialog(json.data.msg,'right',json.msg);return false;
					}else{
						showDialog(json.data,'right',json.msg);return false;
					}
				}
				
			}else{
				//alert(2);
				showDialog(json.data,'alert',json.msg);return false;
			}
		},'json')
	}
}
/*
 * 取消收藏
 * 
 * 
 */
function cancle_favor(fid,obj_id,from){
	if (check_user_login()&&fid) {
		var url ='/index.php?do=user&view=witkey&op=collect&ac=del';
		$.post(url,{fid:fid,obj_id:obj_id,from:from},function(json){
			if(json.status==1){
				showDialog('取消收藏成功','right',json.msg,'window.location.reload()');return false;
			}else{
				showDialog('取消收藏失败','alert',json.msg);return false;
			}
		},'json')
	}
}


function noshop(){
	showDialog("Sorry,您查看的商铺暂未开通",'alert','友情提示');return false;
}

//滚动代码
function startmarquee(lh,speed,delay,index){
	var t;
	var p=false;
	var o=document.getElementById("marqueebox"+index);
	o.innerHTML+=o.innerHTML;
	o.onmouseover=function(){p=true}
	o.onmouseout=function(){p=false}
	o.scrollTop = 0;
	function start(){
		t=setInterval(scrolling,speed);
		if(!p){
			o.scrollTop += 2;
		}else{
			o.scrollTop == o.scrollTop;
			}
	}
	function scrolling(){
		if(o.scrollTop%lh!=0){
			o.scrollTop += 2;
			if(o.scrollTop>=o.scrollHeight/2) o.scrollTop = 0;
		}else{
		clearInterval(t);
			setTimeout(start,delay);
		}
	}
	setTimeout(start,delay);
}

