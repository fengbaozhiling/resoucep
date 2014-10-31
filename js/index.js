$(function(){
	In('bannerset');
	//滚动的初始化
	startmarquee(24,100,2000,1);/**startmarquee(一次滚动高度,速度,停留时间,图层标记);**/
	startmarquee(90,100,2000,0);
	startmarquee(24,100,2000,5);
	startmarquee(24,100,2000,6);
	startmarquee(85,5,2000,4);
	In('delayTab','masonry',function(){
		//startmarquee(164,5,5000,7);
		$(".box_header").delayTab({
			tabbox:'.box_detailbox',
			eventye: 'mousemove',
			delayTime:'200'
		});
		//赚钱经验分享
		$("#jyan_tab").delayTab({tabbox:'#jyan_box',delayTime:200,addClassover:'on'})
		//友情链接
		$("#friend_tab").delayTab({tabbox:'#friend_box',delayTime:200,addClassover:'on'})
		//雇主获得了满意解决方案
		$("#caseindxTab").delayTab({tabbox:'#caseindxBox',delayTime:200,addClassover:'on'});
		//瀑布流
/*		$('.fenleilist').masonry({
		  itemSelector: '.fenleitem',
		  isFitWidth:true,
		  isResizableL:true,
		  isRTL:false,
		  gutterWidth:30
		});*/
		$(".fenleitem").each(function(index, element) {
			var i=$(".fenleitem").index(this);
			if ((i+1)%3==0){
				$(".fenleitem").eq(i).css({"margin-right":"auto"})
			}
		});
		
	});
	
	//总有一个人能帮到您
	var finwek=$("#finwek_tab span");
	var finwekbox=$('#findwek_box');
	finwek.bind("mouseover",function(){
		var _this=$(this);
		var i=finwek.index(this);
		var wikeajax=_this.attr("j_ajax");
		finwek.removeClass('on');
		_this.eq(i).addClass('on');
		if (finwekbox.children().eq(i).find('.waitinloading').length>0) {
			$.ajax({
				type: "get",
				url: wikeajax,
				success: function(html){
					finwekbox.children().eq(i).html(html);
					finwekbox.children().eq(i).find('.waitinloading').remove();
				}
			}); 
			finwekbox.children().eq(i).show().siblings().hide();
		} else {
			finwekbox.children().eq(i).show().siblings().hide();
		}
	})
	
	//In('jcarousel',function(){
//		EPWEIKE.mycarousel_itemList = new Array(); 
//		var zhutniel=$("#scroll_datazt li");
//		for (var m=0;m<zhutniel.length;m++) {
//			var zhurl=zhutniel.eq(m).find('img').attr("src");
//			var zhtitle=zhutniel.eq(m).find('img').attr("alt");
//			var zhhref=zhutniel.eq(m).find('a').attr("href");
//			var croitem={};
//			croitem.url=zhurl;
//			croitem.title=zhtitle;
//			croitem.href=zhhref;
//			EPWEIKE.mycarousel_itemList.push(croitem)
//		}
//		function mycarousel_itemVisibleInCallback(carousel, item, i, state, evt){
//			var idx = carousel.index(i, EPWEIKE.mycarousel_itemList.length);
//			carousel.add(i, mycarousel_getItemHTML(EPWEIKE.mycarousel_itemList[idx - 1]));
//		};
//		
//		function mycarousel_itemVisibleOutCallback(carousel, item, i, state, evt){
//			carousel.remove(i);
//		};
//
//		function mycarousel_getItemHTML(item){
//			return '<a href="'+item.href+'"><img src="' + item.url + '" width="230" height="120" alt="' + item.title + '" /></a><br>' + item.title + '';
//		};
//		function mycarousel_initCallback(carousel)
//	    {
//	       carousel.clip.hover(function() {
//	        carousel.stopAuto();
//	      }, function() {
//	          carousel.startAuto();
//	      });
//		};
//		//专题的滚动
//		$(document).ready(function() {
//			$('#scroll_zhuanti').jcarousel({
//				wrap: 'circular',
//				auto: 2,
//				itemVisibleInCallback: {onBeforeAnimation: mycarousel_itemVisibleInCallback},
//				itemVisibleOutCallback: {onAfterAnimation: mycarousel_itemVisibleOutCallback}
//			});
//		});
//	});
	
	$("#caseindxTab span").each(function(){
		var i= $("#caseindxTab span").index(this);
		if ($(".caseindx").eq(i).find(".waitinloading").length>0){
			var url = "index.php?do=ajax&view=index&op=task&limit="+i;
			$(".caseindx").eq(i).load(url,function(){
				$(".caseindx").eq(i).find(".waitinloading").remove();
			});
		}
		$(this).addClass("on").siblings().removeClass("on");
		$(".caseindx").eq(i).show().siblings(".caseindx").hide(); 
	});
	$("#caseindxTab span").eq(0).addClass("on").siblings().removeClass("on");
	$(".caseindx").eq(0).show().siblings(".caseindx").hide(); 
	$("#finwek_tab span").eq(0).addClass("on").siblings().removeClass("on");
	$(".inner").eq(0).show().siblings(".inner").hide();
	
	//总有一个人能帮到您
	$("#finwek_tab span").mouseover(function () {
		var i= $("#finwek_tab span").index(this);
		if ($(".inner").eq(i).find(".waitinloading").length>0){
			var url = "index.php?do=ajax&view=index&op=talent&limit="+i;
			$(".inner").eq(i).load(url,function(){
				$(".inner").eq(i).find(".waitinloading").remove();
			});
		}
		$(this).addClass("on").siblings().removeClass("on");
		$(".inner").eq(i).show().siblings(".inner").hide();
		
		tablecorll();		
	}); 

	$(".caoxbl").each(function(){
		$(this).find(".sux:eq(0)").show();
		$(this).find(".sux:gt(0)").hide();
		$(this).find("li:last").css("border","none");
	})
	//TA们获得了什么
	$("#caseindxTab span").mouseover(function () {
		var i= $("#caseindxTab span").index(this);
		if ($(".caseindx").eq(i).find(".waitinloading").length>0){
			var url = "index.php?do=ajax&view=index&op=task&limit="+i;
			$(".caseindx").eq(i).load(url,function(){
				$(".caseindx").eq(i).find(".waitinloading").remove();
			});
		}
		$(this).addClass("on").siblings().removeClass("on");
		$(".caseindx").eq(i).show().siblings(".caseindx").hide(); 
	}); 
    //
	$('.case_cont').find('.f_l').hover(
	   function(){
		   $(this).find('em').animate({bottom:"0px"});
		   },
	   function(){
		   $(this).find('em').animate({bottom:"-30px"});
		   }
	);
	function tablecorll(){
		$(".tablecorll a").mouseover(function () {
			var thisporct=$(this).parents(".talenthpbox");
			var uid = $(this).attr("uid");
			var i= thisporct.find(".tablecorll a").index(this);
			var mgsrc=thisporct.find(".tablelicx").eq(i).find("img");
			mgsrc.attr("src",mgsrc.attr('data-original'));
			this.timer = setTimeout(function () {
				var thisLitlength=thisporct.find(".tablecorll a").length;
				thisporct.find(".tablecorll a").eq(i).addClass("on").siblings().removeClass("on");
				thisporct.find(".tablelicx").hide();
				thisporct.find(".tablelicx").eq(i).show();
				var lentshipr=thisporct.find(".tablecorll a").length;
				thisporct.find(".tlarrow").css("left",35+70*i+"px");
				if (thisporct.find(".tablelicx").eq(i).find(".imsgcbx").length==0){
					
					thisporct.find(".tablelicx").eq(i).children(".on").removeClass("on");
					$("#service_"+uid).addClass("on");
				}
				},100);
			}).mouseout(function () {
			clearTimeout(this.timer);
		});
	}
	tablecorll();
	
	In ("lazy",function(){
		$("img.lazy").lazyload({effect: "fadeIn"});
	})
});
