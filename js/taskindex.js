// JavaScript Document
In('bannerset','placeholder');
In('delayTab',function(){
	$(".tab_tit").delayTab({
		tabbox:'.tab_com',
		eventye: 'mousemove',
		delayTime:'200'
	});
	
	$(".articletab_t").delayTab({
		tabbox:'.articletab_c',
		eventye: 'mousemove',
		delayTime:'200'
	});
	
});
In('jcarousel',function(){    
	$('#jcarouselk').jcarousel({
		    initCallback: mycarousel_initCallback_k,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_k(carousel){
		$('#nextk').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prevk').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
	$('#jcarousel2').jcarousel({
		    initCallback: mycarousel_initCallback_2,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_2(carousel){
		$('#next2').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prev2').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
	$('#jcarousel3').jcarousel({
		    initCallback: mycarousel_initCallback_3,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_3(carousel){
		$('#next3').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prev3').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
	$('#jcarousel4').jcarousel({
		    initCallback: mycarousel_initCallback_4,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_4(carousel){
		$('#next4').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prev4').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
	$('#jcarousel5').jcarousel({
		    initCallback: mycarousel_initCallback_5,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_5(carousel){
		$('#next5').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prev5').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
	$('#jcarousel6').jcarousel({
		    initCallback: mycarousel_initCallback_6,
			buttonNextHTML:null,
			buttonPrevHTML:null
    });
	function mycarousel_initCallback_6(carousel){
		$('#next6').bind('click', function() {
			carousel.next();
			return false;
		});
	
		$('#prev6').bind('click', function() {
			carousel.prev();
			return false;
		});
	}
	
   /*-------------------------*/
   $("#postlist").jcarousel({
		scroll: 1,
		auto:5,
		wrap:'last',
        buttonNextHTML: null,
        buttonPrevHTML: null,
		itemLoadCallback:itemLoadCallbackFunctions,
		initCallback: mycarousel_initCallbacks
	});
   
    function itemLoadCallbackFunctions(carousel, state){
     var i=carousel.first;
	 $('.jcarousel-page a').removeClass('select');
	 $('.jcarousel-page a').eq(i-1).addClass('select');
	}
    
	function mycarousel_initCallbacks(carousel) {
		$('.jcarousel-page a').bind('click', function() {
			carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
			return false;
		});
		carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
	};
		
	$("#slidesk").jcarousel({
		scroll: 1,
		auto:4,
		wrap:'last',
        buttonNextHTML: null,
        buttonPrevHTML: null,
		itemLoadCallback:itemLoadCallbackFunction,
		initCallback: mycarousel_initCallback
	});
	
   function itemLoadCallbackFunction(carousel, state){
     var i=carousel.first;
	 $('.jcarousel-control a').removeClass('select');
	 $('.jcarousel-control a').eq(i-1).addClass('select');
	}
   
	function mycarousel_initCallback(carousel) {
		$('.jcarousel-control a').bind('click', function() {
			carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
			return false;
		});
	};
			
});

$(function(){	
	/*选项卡内部列表展开*/
	$(".tab_com_list_r li").mousemove(
	   function(){
		   $(this).parent().find("li").removeClass("select");
		   $(this).addClass("select");
	   }
	);
	$('.taskconnend li:first').css({"margin-left":"0px"});
});

/**
 * 提交任务秘书
 */
function sub_secretary(frmId,indusId){
	var nums = $("#secretary_"+indusId).val();
	if(nums=='输入手机号码或QQ' || ! nums){
		showDialog('请输入您的联系手机或QQ！','','提交失败');
		return false;
	}

	$.post('/index.php', {
		'do': 'ajax',
		'view': 'secretary',
		'ajax': 'submit',
		'nums': nums,
		'indus_id':indusId
	}, function(json){
		if(json.status==1){
			showDialog(json.msg,'right','提交成功');
		}else{
			showDialog(json.msg);
		}
	}, 'json');
}