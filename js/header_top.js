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
})