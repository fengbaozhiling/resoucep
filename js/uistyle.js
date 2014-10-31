$(function(){
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
	$("#J_CheckCode,#txt_auth_code").live('focus',function(){
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