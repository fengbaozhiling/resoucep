$(function(){
	var append_parent=$("#append_parent");
	var disabledinput=$("#payitem input.disabled");
	$(".tx_t1").focus(function(){
		$(this).attr("placeholder","");//issue#3499
	});
	In('form');//引入表单验证
	In("xheditor",function(){
		EPWEIKE.editor = $("#tar_content").xheditor({tools:'Bold,FontSize,Fontface,FontColor,Italic,Underline,Fullscreen,Emot,Table,Preview,Strikethrough,Align,List,Outdent,Indent,Table',skin:'nostyle',blur:function(){
			var shtml = contentCheck('tar_content',"任务需求",5,1500,0,'upload_tip',EPWEIKE.editor);
		}}); 
	})
	//插入模版
	var releaseHelp=$("#releaseHelp");
	releaseHelp.bind('click',function(){
		showWindow('releaseHelpbox','插入模版', '/index.php?do=ajax&view=release&ac=desc',true);
		return false;
	})
	//分类
	var edityCaty=$("#eiditCaty");
	edityCaty.bind("click",function(){
		var thistopHeight=$(this).offset().top+20;
		var thisleftWidth=$(this).offset().left;
		var cssStyle={
			'position':'absolute',
			'left':thisleftWidth,
			'top':thistopHeight,
			'z-index':1000
		}
		$.ajax({
			type: "POST",
			url: "/index.php?do=ajax&view=classify",
			data: "",
			success: function(msg){
				append_parent.append("<div id='eiditcayBond'></div>");
				var eiditcayBond=$("#eiditcayBond");
				var sidbar_main_flt=$(".sidbar_main_flt");
				if(sidbar_main_flt.length==0){
					eiditcayBond.append(msg);
				}
				eiditcayBond.show();
				eiditcayBond.css(cssStyle);
				//选择分类
				$(".letilistcaty_flt a").bind("click",function(){
					var listcStr="";
					var thisStr=$(this).html().replace(/<\/?[^>]*>/g,'').replace(/\?/g,'');
					var secondStr=$(this).parent(".letilistcaty_flt").prev(".leftincaty_flt").html();
					var firstStr=$(this).parents("li").find(".bar_tl_flt").html().replace(/\找/g,'');;
					listcStr +="<font class='c333 font12'>" +firstStr+"</font><span class='c999'>&nbsp;&nbsp;>&nbsp;&nbsp;</span>";
					listcStr +="<font class='c333 font12'>" +secondStr+"</font><span class='c999'>&nbsp;&nbsp;>&nbsp;&nbsp;</span>";
					listcStr +="<font class='c333 font12'>" +thisStr+"</font>";
					$("#selectedClass").html(listcStr);
					edityCaty.html("修改");
					$('#g_id').val($(this).parents("li").find(".bar_tl_flt").attr('g_id'));
					$('#indus_pid').val($(this).parent(".letilistcaty_flt").prev(".leftincaty_flt").attr('indus_pid'));
					$('#indus_id').val($(this).attr('indus_id'));
					$(this).addClass('selected');
					eiditcayBond.remove();
					$("#indus_id").blur();
					return false;
				})
			}
		}); 
		return false;
	})
	if ($("#tar_content").val()!=='') {
		$("#textareaTip").hide();
	}
	var textareaEditor=$("#textareaEditor");
	$("#textareaTip").bind("click",function(){
		$(this).hide();
		$("#tar_content").focus();
	}).css({
		'width':textareaEditor.width()-20+"px",
		'height':textareaEditor.height()-70+"px"
	})
	
	function GetQueryString(name){
		 var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		 var r = window.location.search.substr(1).match(reg);
		 if(r!=null)return  unescape(r[2]); return null;
	}
	
	//增加模式判断
	function getmodelId (url) {
		return GetQueryString("model_id");
	}
	var model_id=request_uri.indexOf("model_id")!==-1 && getmodelId ()||0;
	$("#model_id").val(model_id);
	$("input[name='shanging']").each(function(index, element) {
		if ($(this).val()==model_id){
			$(this).attr("checked","true");
		}
	});
	//上传文件
	if( INDEX == 'release' || INDEX == 'hiretask' ){
		In('uploadify','uploadifyhandle','uploadify_css',function(){
			uploadify({
				auto:true,
				size:"2MB",
				exts:$("#upload").attr('exts'),
				limit:5}
			);
		});
	}
	
	In('chosen',function(){
		$("#cont_type").chosen();
		$("#cont_type").change(change_contact);
		$("#slt_notice_count").chosen();
	});
	//切换联系方式
	function change_contact(){
		var tar_contact=$("#tar_contact");
		var cont_type = $("#cont_type").val();
		if (cont_type=='mobile'){
			tar_contact.attr("msg","请填写正确的电话号码");
			tar_contact.attr("limit","required:true;type:TelCN");
			tar_contact.attr("title","填写您的常用电话号码");
			tar_contact.attr("value",user_info_mobile);
		}else if (cont_type=='qq'){
			tar_contact.attr("msg","请填写正确QQ号码");
			tar_contact.attr("limit","required:true;type:digit;len:5-13");
			tar_contact.attr("title","填写您的常用QQ");
			tar_contact.attr("value",user_info_qq);
		}else if (cont_type=='email'){
			tar_contact.attr("msg","请填写正确的E-MAIL");
			tar_contact.attr("limit","required:true;type:email");
			tar_contact.attr("title","填写您的常用电子邮箱");
			tar_contact.attr("value",user_info_email);
		}else{
			return false;
		}
		form_valid();
	}
	$("input.disabled").parents("tr").hide();
	//任务模式选择展开
	
	$(".choosway .stylcod:checked").each(function(index, element) {
		var obj=$(this).parents(".choosway");
		var model_id = $("#model_id").val();
		var task_way=$("#task_way").val();
		$(this).parents(".choosway").click();
		choosway (obj);
	});
	
	$(".choosway").bind("click",function(){
		var obj=$(this)
		choosway (obj);
	}).mouseenter(function(){
		$(this).addClass("hover");
	}).mouseleave(function(){
		$(this).removeClass("hover");
	})
	function choosway (obj){
		var model_id = $("#model_id").val();
		var task_way=$("#task_way").val();
		var disabledinput=$("#payitem input.disabled");
		disabledinput.parents("tr").hide();
		$(".choosway").removeClass("warn");
		$("#warnmodel").remove();
		$(".stylcod").attr("checked","");
		$(".radiobg").css("background-position","left -62px");
		obj.find(".stylcod").attr("checked","true");
		
		if(task_way!=obj.find(".stylcod").val()){
			$("#task_way").val(obj.find(".stylcod").val());
		}else{
			$("#task_way").val(0);
		}
		
		//调整显示金额
		show_total_cash();
		obj.find(".radiobg").css("background-position","left 10px");
		$(".choosway").removeClass("on");
		obj.addClass("on");
		if (obj.next(".choswaybox").is(":hidden")) {
			$("#task_way").val(obj.find(".stylcod").val());
			obj.find(".stylcod").attr("checked","checked");
			obj.find('.choos_ifo i').hide();
			$(".choswaybox").slideUp("fast");
			obj.next(".choswaybox").show();
			obj.find('.icomode').hide().end().find('.choos_ifo i').show();
		}else if (obj.next(".choswaybox").is(":visible")) {
			$("#task_way").val(0);
			obj.find(".stylcod").attr("checked","");
			obj.find('.choos_ifo i').hide();
			obj.next(".choswaybox").slideUp("fast");
			obj.find(".stylcod").attr("checked","");
			obj.find(".radiobg").css("background-position","left -62px");
			obj.parents(".eleament").find(".styled").attr("checked","");
			obj.parents(".eleament").find(".choslitcbox").hide();
			obj.removeClass("on");
			$("#model_id").val(0);
			//取消选中删除附加服务中的内容
			$('#item_desc_box').html('');
		}
		if ($("#task_way").val()==1){
			$("#checkbox_hddp,#checkbox_gjlx").attr("disabled","").removeClass("disabled");
			$("#checkbox_rgmh").attr({'disabled':'disabled','checked':''}).addClass("disabled");
		}
		if ($("#task_way").val()==2){
			$("#checkbox_rgmh").attr("disabled","").removeClass("disabled");
			$("#checkbox_hddp,#checkbox_gjlx").attr({'disabled':'disabled','checked':''}).addClass("disabled");
		}
		if ($("#task_way").val()==0){
			$("#checkbox_hddp,#checkbox_gjlx,#checkbox_rgmh").attr({'disabled':'disabled','checked':''}).addClass("disabled");
		}
		chechapply();
		ale();
	}
	//调用增值服务初始化
	get_payitem();
	
	//任务模型的选择
	$(".hadsubbox input.styled:checked").each(function(index, element) {
		var obj=$(this);
		hadsubbox (obj);
	});
	
	$(".hadsubbox input.styled").bind('click',function(){
		var obj=$(this);
		hadsubbox (obj);
	})
	function hadsubbox (obj){
		$(".choslitcbox").hide("fast"); 
		obj.parents(".hadsubbox").find(".choslitcbox").show("fast"); 
		if(obj.val()==3){
			$(".setmark").hide("fast");
		}else if(obj.val()==1||obj.val()==2){
			$(".setmark").show("fast");
		}
		if(obj.find(".styled").val()>0){
			$("#model_id").val(obj.val());
		}else{
			$("#model_id").val(obj.val());
		}
		get_payitem();
		//调整显示金额
		show_total_cash();
		if($("#task_way").val()==1){
			getMaxDday($('#txt_task_cash1').val(),$('#model_id').val());
		}else if($("#task_way").val()==2){
			getMaxDday($('#txt_task_cash2').val(),$('#model_id').val());
		}
		if($('#model_id').val()==1||$('#model_id').val()==2){
			show_mark_pay($('#slt_notice_count').val(),$('#txt_task_cash1').val());
		}
	}
	/**
	 * 奖项设置  多人模式专用
	 */
	function task_prizeset(pcount){
		if(pcount==''||pcount<2){
			pcount = 2;
			$('#txt_prize_count').val(2);
		}
		if(pcount>5){
			pcount = 5;
			$('#txt_prize_count').val(5);
		}
		
		pcount>=2&&$('#prize_1_li').show()||$('#prize_1_li').hide();
		pcount>=2&&$('#prize_2_li').show()||$('#prize_2_li').hide();
		pcount>=3&&$('#prize_3_li').show()||$('#prize_3_li').hide();
		pcount>=4&&$('#prize_4_li').show()||$('#prize_4_li').hide();
		pcount>=5&&$('#prize_5_li').show()||$('#prize_5_li').hide();
		
		prize_valid();
	}
	
	//显示入围评分金额
	function show_mark_pay(mark_count,task_cash){
		if(task_cash==''||task_cash<=0){
			$("#eachcash").html("");
			return false;
		}
		var mark_cash = task_cash * 0.1;
		var each_cash = task_cash * 0.1 / mark_count;
		mark_cash = mark_cash.toFixed(2);
		each_cash = each_cash.toFixed(2);
		$("#eachcash").html(" <strong class='cc30'>"+mark_cash+"</strong>元 ，每人获得 "+each_cash+"元");
	}	
	
	/*
	 * 选择任务模型
	 * */
	function choose_model(model_type){
		switch(model_type){
			case 'reward':
				$('#model_box_reward').show();
				$('#model_box_tender').hide();
				$('#model_box_pre').hide();
				$('#hdn_model_id').val(1);
				$('#li_1').attr('class','selected');
				$('#li_3').attr('class','three_box');
				$('#li_4').attr('class','');
				break;
			case 'tender':
				$('#model_box_reward').hide();
				$('#model_box_tender').show();
				$('#model_box_pre').hide();
				$('#hdn_model_id').val(4);
				$('#li_1').attr('class','');
				$('#li_3').attr('class','three_box');
				$('#li_4').attr('class','selected');
				break;
			case 'pre':
				$('#model_box_reward').hide();
				$('#model_box_tender').hide();
				$('#model_box_pre').show();
				$('#hdn_model_id').val(3);
				$('#li_1').attr('class','');
				$('#li_3').attr('class','selected three_box');
				$('#li_4').attr('class','');
				break;
		}
	}
	
	$(".chekboxtips").mouseleave(function(){
		$(this).hide();
	})
	$(".chekboxbbox").hover(function(){
		$(".chekboxtips").show();
	},function(){
		$(".chekboxtips").hide();
	})
	
	
	$("#apllykefund").change(function(){
		if ($(this).attr("checked")==true){
			$("#txt_title").removeAttr('limit').removeAttr('msg').removeAttr('msgArea');
			$("#tar_content").removeAttr('limit').removeAttr('msg').removeAttr('msgArea');
			//$(".chekboxtips").show();
			//$("#tar_content,#txt_title").val('因为您选择购买“客服帮您完善需求”服务，您可以不填写此项内容');
			//$("#tar_contact").focus();
		}
		if ($(this).attr("checked")==false){
			$('.buylayer').hide();
			//$(".chekboxtips").hide();
			//$("#tar_content,#txt_title").val('');
		}
		chechapply();
		ale();
	})
	$('.buylayerclose').click(function(){
	     $(this).parents('.buylayer').hide();	
	});
	//检查客服代写需求是否选中
	function chechapply(){
		$("#payitem input").parents("tr").show();
		if ($("#apllykefund").attr("checked") == true){
			$("#checkbox_xqws,#kefubb").attr("checked","checked").change();
			$("tr[servicetr='kefubb']").show();
			$("#payitem input.disabled").parents("tr").hide();
			if($(".kefubb_inp").length == 0){
				var strdesc_s = "<input type='hidden' name='payitem_arr[]' value='kefubb' class='payitem_arr kefubb_inp'/>";
				$("#item_show_box").append(strdesc_s);
			}
		}
		if ($("#apllykefund").attr("checked") == false){
			$("#checkbox_xqws").attr("checked","").change();;
			if ($("tr[servicetr='kefubb']").find("input:checked").length==0){
				$("#kefubb").attr("checked","").change();;
				$("tr[servicetr='kefubb']").hide();
				$("#payitem input.disabled").parents("tr").hide();
			}
		}
		disabledinput.parents("tr").hide();
		ale();
	}
	//客服包办
	$("#kefubb").live("click",function(){
		var thischek=$(this);
		if ( thischek.attr("checked")==true){
			 thischek.parents("tr").nextAll().find("input[servicenm='kefubb']").not($("input.disabled")).attr("checked","checked").change();
			 thischek.parents("tr").nextAll("tr[servicetr='kefubb']").show();
			 $("#apllykefund").attr("checked","checked").change();;
		}else{
			 thischek.parents("tr").nextAll().find("input[servicenm='kefubb']").attr("checked","").change();;
			 thischek.parents("tr").nextAll("tr[servicetr='kefubb']").hide();
			 $("#apllykefund").attr("checked","").change();
		}
		disabledinput.parents("tr").hide();
		ale();
	})
	$("input[servicenm='kefubb']").live("click",function(){
		if ( $("#kefubb").parents("tr").nextAll().find("input[servicenm='kefubb']:checked").length==0){
			$("#kefubb").attr("checked",false).change();
			$("#kefubb").parents("tr").nextAll("tr[servicetr='kefubb']").hide();
		}else{
			$("#kefubb").attr("checked","checked").change();;
		}
		if($("#checkbox_xqws:checked").length==0){$("#apllykefund").attr("checked","").change();}
		if($("#checkbox_xqws:checked").length==1){$("#apllykefund").attr("checked","checked").change();}
	});
	$("#payitem input").live("change",function(){
		if($(this).attr("checked")==true){
			$(this).parents("label").find(".icobg").addClass("icogreen");
		}else{
			$(this).parents("label").find(".icobg").removeClass("icogreen");
		}
	});
	//选择所有的
	$("#checkall").live("click",function(){
		chkall('frm_step',this);
	})
	$("input[id^='checkbox_']").live("click",function(){
		ale();
	})
	function chkall(input1,input2){
		var objForm = document.forms[input1];
		var objLen = objForm.length;
		for (var iCount = 0; iCount < objLen; iCount++){
			if (input2.checked == true){
				 if (objForm.elements[iCount].type == "checkbox"&&objForm.elements[iCount].name != 'agreement'){
					$("#payitem").find("input").not($("input.disabled")).attr("checked","checked").change();
					$("#apllykefund").attr("checked","checked").change();
					ale(objForm.elements[iCount].item_id);
				}
			}
			else{
				if (objForm.elements[iCount].type == "checkbox"&&objForm.elements[iCount].name != 'agreement'){
					objForm.elements[iCount].checked = false;
					$("#payitem").find("input").not($("input[disabled='disabled']")).attr("checked","").change();
					$("#apllykefund").attr("checked","").change();
	ale(objForm.elements[iCount].item_id);
				}
			}
		}
	}
	
	/*
	 * 计算稿件单价 
	 */
	function get_each_price(single_min){
		var totle_cash = $('#txt_task_cash1').val();
		var work_count = $('#txt_work_count').val();
		var each_price;
		if(totle_cash==0 || totle_cash==''){
			return false;
		}
		if(work_count==0 || work_count==''){
			return false;
		}
	
		each_price = totle_cash/work_count;
		each_price = each_price.toFixed(2);
		single_min = single_min ? single_min : 2;
		var curr_str = $('#each_price').attr('curr_str');
		curr_str = curr_str ? curr_str : '元';
		if(each_price < single_min){
			$('#each_price').html('，每个合格稿件至少<strong class="cc30">'+single_min+'</strong> '+curr_str+'。');
		}else{
			$('#txt_single_price').val(each_price);
			$('#each_price').html('，每个合格稿件 <strong class="cc30">'+each_price+'</strong> '+curr_str);
		}
		return true;
	}
	
	
	/*
	 * 奖项验证
	 * */
	$("input[id^='task_prize_']").live("blur",function(){
		clearstr(this);
		prize_valid()
	});
	
	
	In("calendar",function(){
		$("#calendarLastday").click(function(event){
			showcalendar(event, this, 0);
		})
		$("#calendarLastday").change(function(){
			get_days(this.value,'2');
		}).blur(function(){
			get_days(this.value,'2');
		})
		$("#calendarLastday_xs").click(function(event){
			showcalendar(event, this, 0);
		});
		$("#calendarLastday_xs").change(function(){
			get_days(this.value,'1');
		}).blur(function(){
			get_days(this.value,'1');
		});
	});
	
	//取日期天数放入隐藏域
	function get_days(enddate,nums){
		if(enddate!=''){
			if(formatTime(enddate)){
				var startdate = curDateTime();
				var task_day = daysBetween(startdate,enddate);
				$('#txt_task_period'+nums).val(task_day);
			}else{
				showDialog("日期填写有误！",'alert',"日期错误");
			}
		}
	}
	//以下获取当前日期 yyyy-mm-dd
	function curDateTime(){
		var d = new Date();
		var year = d.getFullYear();
		var month = d.getMonth()+1;
		var date = d.getDate();
		var day = d.getDay();
		var curDateTime= year;
		if(month>9)
		curDateTime = curDateTime +"-"+month;
		else
		curDateTime = curDateTime +"-0"+month;
		if(date>9)
		curDateTime = curDateTime +"-"+date;
		else
		curDateTime = curDateTime +"-0"+date;
		
		return curDateTime;
	}
	//| 求两个时间的天数差 日期格式为 YYYY-MM-dd  
	function daysBetween(DateOne,DateTwo){  
		var OneMonth = DateOne.substring(5,DateOne.lastIndexOf ('-'));
		var OneDay = DateOne.substring(DateOne.length,DateOne.lastIndexOf ('-')+1);
		var OneYear = DateOne.substring(0,DateOne.indexOf ('-'));
	
		var TwoMonth = DateTwo.substring(5,DateTwo.lastIndexOf ('-'));
		var TwoDay = DateTwo.substring(DateTwo.length,DateTwo.lastIndexOf ('-')+1);
		var TwoYear = DateTwo.substring(0,DateTwo.indexOf ('-'));
	
		var cha=((Date.parse(OneMonth+'/'+OneDay+'/'+OneYear)- Date.parse(TwoMonth+'/'+TwoDay+'/'+TwoYear))/86400000);  
		return Math.abs(cha);
	}
	
	//日期合法性验证
	function formatTime(str){
	  //var r = str.match(/^(\d{4})[\-|\/](\d{1,2})[\-|\/](\d{1,2})$/);
	  var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
	  if(r==null) return false;    
	  var  d=  new  Date(r[1],   r[3]-1,   r[4]);    
	  return  (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]);  
	
	}
	/**
	 * 获取相应预算范围内的最大天数
	 * @param task_cash
	 */
	if($("#txt_task_cash1").val() && $("#model_id").val() == '3'){
		get_each_price(single_min);
	}
	$("#txt_task_cash1").live('keyup',function(){
		var obj=this;
		taskCash (obj);
		get_each_price(single_min);
	})
	$("#txt_task_cash1").live('blur',function(){
		var obj=this;
		taskCash (obj);
		get_each_price(single_min);
	})
	$("#txt_task_cash1").live('focus',function(){
		get_each_price(single_min);
	});
	function taskCash (obj){
		clearstr(obj);
		var task_way = $("#task_way").val();
		var model_id = $("#model_id").val();
		getMaxDday(obj.value,model_id);
		
		if(model_id==1||model_id==2){
			show_mark_pay($('#slt_notice_count').val(),obj.value);
		}
		if(model_id==2)
		{
			prize_valid();
		}
		if(model_id==3){
			get_each_price(single_min);
		}
		show_total_cash();
		$('#str_cash').html(obj.value);
	}
	$("#txt_task_cash2").keyup(function(){
		clearstr(this);
		show_total_cash()
	}).blur(function(){
		clearstr(this);
		show_total_cash()
	})
	
	
	$("#txt_prize_count").change(function(){
		task_prizeset(this.value);
	});
	
	$("#txt_work_count").live('keyup',function(){
		get_each_price(single_min);
	})
	$("#txt_work_count").live('blur',function(){
		get_each_price(single_min);
	})
	$("#txt_work_count").live('focus',function(){
		get_each_price(single_min);
	});
	
	$("#slt_notice_count").change(function(){
		if($('#model_id').val()==1||$('#model_id').val()==2){
			show_mark_pay($('#slt_notice_count').val(),$('#txt_task_cash1').val());
		}
	});
	
	$("#btn_release_submit").click(function(){
		return stepCheck();
	});
	

	//每5秒自动保存发布任务表单数据到 COOKIE
	window.setInterval(save_pageinfo,5000);
	
})


/**
 * 检测是否同意协议
 */
function checkAgreement(){
	if($("#agreement").attr("checked")==false){
		showDialog("请先同意任务发布协议","alert","操作提示");return false;
	}else return true;
}

/**
 * 检查登录
 */
function checkLogin(pass){
	if(pass==false){
		return false;
	}
	$.getJSON('/index.php?do=release&ac=check_login',function(json){
		if(json.status){
			if(($("#model_id").val() == '4' || $("#model_id").val() == '5') && $(".payitem_arr").length == 0){
				siteSub("frm_step",2,true);
			}else{
				$("#frm_step").submit();
			}
		}else{
			//未登录弹出的窗口../ajax/ajax_release_login.php
			showWindow('login','登录窗口', SITEURL+'/index.php?do=ajax&view=release_login',true);
			return false;
		}
	})
}
function stepCheck(){
	var btn=$("#btn_release_submit");
	var scash=$("#sreward_min_cash");
	if(typeof(ale)=="function"){
		ale();
	}
	//新版验证start，会影响旧功能，旧页面将不可用
	var i = checkForm(document.getElementById('frm_step'));
	var pass = false;
	if(i){
		var shtml = contentCheck('tar_content',"任务需求",5,1500,1,'upload_tip',EPWEIKE.editor);
		if(shtml&&checkAgreement()){
			pass = true;
		}else{
			if(!checkAgreement()){
				showDialog('您必须同意协议','alert','协议确认');
				return false;
			}
		}
		//通用验证通过，开始按任务分类验证
		if(pass){
			var task_way = $("#task_way").val();
			var model_id = $("#model_id").val();
			var s_min_cash = Number(scash.val());
			var m_min_cash = Number($("#mreward_min_cash").val());
			var p_min_cash = Number($("#preward_min_cash").val());
			var t_min_cash = Number($("#tender_min_cash").val());
			var s_curr_str = scash.attr('curr_str');
			var m_curr_str = $("#mreward_min_cash").attr('curr_str');
			var p_curr_str = $("#preward_min_cash").attr('curr_str');
			var t_curr_str = $("#tender_min_cash").attr('curr_str');
			var task_period1 = Number($("#txt_task_period1").val());
			var task_period2 = Number($("#txt_task_period2").val());
			var task_cash;
			var min_day = Number($("#task_minday").val());
			var max_day = Number($("#task_maxday").val());
			//任务模式验证
			if(task_way==0){
				$('.choosway').addClass('warn');
				if($("#warnmodel").length==0){
					$('.choosway:eq(0)').before('<div id="warnmodel" style="color:red">请选择进行任务的模式</div>');
				}
				window.location.href="#tar_contact"; 
				btn.attr('disabled',false).text('发布任务');
				btn.css('background-image','');
				btn.css('background-position','');
				btn.css('background-repeat','');
				return false;
			}else if (task_way==1){
				task_cash = Number($("#txt_task_cash1").val());
				getMaxDday(task_cash,model_id);
				min_day = Number($("#task_minday").val());
				max_day = Number($("#task_maxday").val());
				//判断是否为task_way==1时必须的分类
				if(model_id==1||model_id==2||model_id==3){
					var g_id      = $("#g_id").val();
					var indus_pid = $("#indus_pid").val();
					var indus_id  = $("#indus_id").val();
					if($("#m"+model_id+"c"+indus_id).length>0){
						all_min_cash = $("#m"+model_id+"c"+indus_id).val();
						all_curr_str = $("#m"+model_id+"c"+indus_id).attr('curr_str');
					}else if($("#m"+model_id+"p"+indus_pid).length>0){
						all_min_cash = $("#m"+model_id+"p"+indus_pid).val();
						all_curr_str = $("#m"+model_id+"p"+indus_id).attr('curr_str');
					}else if($("#m"+model_id+"g"+g_id).length>0){
						all_min_cash = $("#m"+model_id+"g"+g_id).val();
						all_curr_str = $("#m"+model_id+"g"+g_id).attr('curr_str');
					}else{
						if(model_id==1){
							all_min_cash = s_min_cash;
							all_curr_str = s_curr_str;
						}else if(model_id==2){
							all_min_cash = m_min_cash;
							all_curr_str = m_curr_str;
						}else if(model_id == 3){
							all_min_cash = p_min_cash;
							all_curr_str = p_curr_str;
						}
					}
					if(task_cash<all_min_cash){						
						showDialog('预算最小金额为'+all_min_cash+all_curr_str,'alert','金额错误');
						btn.attr('disabled',false).text('发布任务');
						btn.css('background-image','');
						btn.css('background-position','');
						btn.css('background-repeat','');
						return false;
					}
					
					if(model_id==2){//多赏
						//多赏名次金额判断（待定）
						if(!prize_valid()){
							showDialog('多赏各奖项金额填写有误','alert','金额错误');
							btn.attr('disabled',false).text('发布任务');
							btn.css('background-image','');
							btn.css('background-position','');
							btn.css('background-repeat','');
							return false;
						}
					}
					if(model_id==3){//计件
						var txt_work_count = Number($('#txt_work_count').val());
						var single_price = Number($('#txt_single_price').val());
						if(txt_work_count==0||single_price==0||single_price<1||parseInt(txt_work_count)!=txt_work_count){
							showDialog('计件数量填写错误','alert','填写错误');
							btn.attr('disabled',false).text('发布任务');
							btn.css('background-image','');
							btn.css('background-position','');
							btn.css('background-repeat','');
							return false;
						}
					}
					//天数判断
					if(task_period1<min_day||task_period1>max_day){
						if (min_day==0 ) {
							showDialog('正在读取截稿天数，请等几秒后再提交！','alert','提示信息');
							return false; 
						}
						showDialog('竞标时间应为'+min_day+'-'+max_day+'天','alert','日期错误');
						btn.attr('disabled',false).text('发布任务');
						btn.css('background-image','');
						btn.css('background-position','');
						btn.css('background-repeat','');
						return false;
					}
				}else{
					showDialog('请选择任务赏金模式','alert','赏金模式');
					btn.attr('disabled',false).text('发布任务');
					btn.css('background-image','');
					btn.css('background-position','');
					btn.css('background-repeat','');
					return false;
				}
			}else if(task_way==2){
				task_cash = Number($("#txt_task_cash2").val());
				if(model_id==4||model_id==5){
					if(model_id==4){
						if(task_cash<t_min_cash){
							showDialog('预算最小金额为'+t_min_cash+t_curr_str,'alert','金额错误');
							btn.attr('disabled',false).text('发布任务');
							btn.css('background-image','');
							btn.css('background-position','');
							btn.css('background-repeat','');
							return false
						}
					}
					//天数判断
					if(task_period2<1||task_period2>30){
						showDialog('竞标时间应为1-30天','alert','日期错误');
						btn.attr('disabled',false).text('发布任务');
						btn.css('background-image','');
						btn.css('background-position','');
						btn.css('background-repeat','');
						return false;
					}
				}else{
					showDialog('请选择任务赏金模式','alert','赏金模式');
					btn.attr('disabled',false).text('发布任务');
					btn.css('background-image','');
					btn.css('background-position','');
					btn.css('background-repeat','');
					return false;
				}
			}
		}
		return checkLogin(pass);
	}else{
		btn.attr('disabled',false).text('发布任务');
		btn.css('background-image','');
		btn.css('background-position','');
		btn.css('background-repeat','');
		return false;
	}
	
	if(r_step=='step2'){
		var i 	 = checkForm(document.getElementById('frm_'+r_step+'_'+$('#hdn_model_id').val()));
	}
	else{
		var i 	 = checkForm(document.getElementById('frm_'+r_step));
	}
	var pass = false;
	switch(r_step){
		case "step1": 
			if(i){ 
				if(contentCheck('tar_content',"任务需求",1,1500,0,'',EPWEIKE.editor)&&checkAgreement()){
					pass = true;
				}
				else{
					
					if(!checkAgreement()){
						showDialog('您必须同意协议','alert','协议确认');
					}
					else{
						showDialog('需求字数限定1-1500','alert','需求不完整');
					}
				}
				if((!$('#mobile').attr("checked")&&!$('#qq').attr("checked")&&!$('#email').attr("checked"))||(!$('#contact_mobile').val()&&!$('#contact_email').val()&&!$('#contact_qq').val())){
					pass=false;
					showDialog("至少填写一种联系方式！","alert","操作提示");
					$('#mobile').attr("checked","checked");
					$('#ct_mobile').show()
				}
			}
			if(pass){
				//清除coodie
				clear_pageinfo();
			}else{
				btn.attr('disabled',false).text('发布任务');
				btn.css('background-image','');
				btn.css('background-position','');
				btn.css('background-repeat','');
			}
			return checkLogin(pass);
			break;
		case "step2":
			if(checkDay()){
				if(i){
					pass=true;
				}
			}
			//天数验证
			var model_id = $('#hdn_model_id').val();
			var task_day = parseInt($('#txt_task_period_'+model_id).val());
			if(model_id==1){
				model_id = $('#reward_model_id').val();
			}
			minday = parseInt($('#task_minday_'+model_id).val());
			maxday = parseInt($('#task_maxday_'+model_id).val());
			$('#txt_task_cash1').keyup();
			if(task_day<minday || task_day>maxday){
				if(model_id==1||model_id==2){
					$('#span_task_period_1').attr('class','valid_error');
					$('#span_task_period_1').html('<span>竞标时间不能高于'+maxday+'天</span>');
				}else{
					$('#span_task_period_'+model_id).attr('class','valid_error');
					$('#span_task_period_'+model_id).html('<span>竞标时间不能高于'+maxday+'天</span>');
				}
				return false;
			}
			//金额验证
			if(model_id==1||model_id==2){
				min_cash = $('#sreward_min_cash').val();
				this_cash = $('#txt_task_cash_1').val();
				if(parseInt(this_cash)<parseInt(min_cash)){
					$('#span_task_cash_1').attr('class','valid_error');
					$('#span_task_cash_1').html('<span>预算最小金额为'+min_cash+'元</span>');
					return false;
				}
			}else if (model_id==3){
				min_cash = $('#preward_min_cash').val();
				this_cash = $('#txt_task_cash_'+model_id).val();
				if(parseInt(this_cash)<parseInt(min_cash)){
					$('#span_task_cash_'+model_id).attr('class','valid_error');
					$('#span_task_cash_'+model_id).html('<span>预算最小金额为'+min_cash+'元</span>');
					return false;
				}
			}else if (model_id==4){
				min_cash = $('#tender_min_cash').val();
				this_cash = $('#txt_task_cash_'+model_id).val();
				if(parseInt(this_cash)<parseInt(min_cash)){
					$('#span_task_cash_'+model_id).attr('class','valid_error');
					$('#span_task_cash_'+model_id).html('<span>预算最小金额为'+min_cash+'元</span>');
					return false;
				}
			}
			switch($('#hdn_model_id').val()){
				case '1':
					if($('#reward_model_id').val()==2&&!prize_valid())
						pass = false;//奖项规则验证
					break;
				case '3':
					/*if(!valid_single_price())
						pass=false;*/
					pass=true;
					break;
			}
			if(pass==true){
				check_pub_priv();
			}
			break;
		case "step3":
			if($("#item_map").attr("checked")==true&&$.trim($("#point").val())==''){
				set_map();return false;
			}else{
				if(i){
					$("#frm_"+r_step).submit();
					$(":input[name='is_submit']").unbind("click").attr("type","button");
				}				
			}
			if(pass==true){
				check_pub_priv();
			}
			break;
		case "step4":
			if(pass==true){
				
				check_pub_priv();

			}
			break;
		btn.attr('disabled',true).text('任务发布中...').css({
			'background-image':'url('+IMGURL+'/images/common/loading.gif)',
			'background-position':'30px center',
			'background-repeat':'no-repeat'
		});
	}
	
}

function removeHTMLTag(str) {
	str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
	str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
	//str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
	str=str.replace(/&nbsp;/ig,'');//去掉&nbsp;
	return str;
}

/**
 * 保存页面输入信息
 * 缓存第一步操作所填写的数据
 */
function save_pageinfo(){
	if(document.getElementById("frm_step")){
		document.cookie = "re_indus_pid="+$('#indus_pid').val()+"; path=/";
		document.cookie = "re_indus_id="+$('#indus_id').val()+"; path=/";
		document.cookie = "re_txt_title="+encodeURI($('#txt_title').val())+"; path=/";
		document.cookie = "re_tar_content="+encodeURI(removeHTMLTag($('#tar_content').val()))+"; path=/";
		document.cookie = "re_cont_type="+$('#cont_type').val();+"; path=/"
		document.cookie = "re_tar_contact="+$('#tar_contact').val()+"; path=/";
	}
}

/**
 * 清理第一步缓存
 */
function clear_pageinfo(){
	delCookie("re_indus_pid");
	delCookie("re_indus_id");
	delCookie("re_txt_title");
	delCookie("re_tar_content");
	delCookie("re_cont_type");
	delCookie("re_tar_contact");
}
//增值服务
function ale() {
	var ale_arr = new Array();
	if(typeof (ale_desc) == 'function'){
		ale_arr = ale_desc();
	}
	var c_credit = ale_arr.c_credit;
	var c_cash = ale_arr.c_cash;
	var y_cash = ale_arr.y_cash;
	var strdesc= ale_arr.strdesc;
	var not_able = false;
	var choosed_i = ale_arr.choosed_i;
	if (choosed_i > 0) {
		$('#item_show_box').show();
	} else {
		$('#item_show_box').hide();
	}
	if (c_cash > 0) {
		$('#item_total_cash').val(c_cash);
	} else {
		$('#item_total_cash').val(0);
	}
	if (c_credit > 0) {
		$('#totle_credit').html(',<span>' + c_credit + '</span>点论坛积分');
		$('#totle_credit').show();
		$('#item_total_credit').val(c_credit);
	} else {
		$('#totle_credit').hide();
		$('#item_total_credit').val(0);
	}
	$('#item_desc_box').html(strdesc);
	//调整显示金额
	show_total_cash();
	return not_able;
}

/**
 * 获取增值服务项
 */
function get_payitem(){
	var mod_id = $('#model_id').val();
	var m_code = $("#m_code").val();
	if(m_code=='ht'){
		mod_id=6;
	}
	mod_id = mod_id ? mod_id : 0;
	var par_str = '';
	$(".payitem_arr").each(function(i){
		if($(this).val()){
			if(i > 0){
				par_str += ',';
			}
			par_str += $(this).val();
		}
	});
	if (!ModelWeb){
		$.post(SITEURL+"/index.php?do=ajax&view=payitem",{model_id:mod_id,parry:par_str},function(html){
			var str_data = html;
			if(str_data){
				$("#payitem").html(str_data);
					In('ezChoose',function(){
						$(function() {
							$('#payitem input[type="checkbox"],#agreement').ezChoose();
						});	
					});
			}
		},'text');
	}
}

//页面金额显示-通用
function show_total_cash(){
	var task_way = $("#task_way").val();
	var model_id = $("#model_id").val();
	var cash_task;
	var item_cash = Number($("#item_total_cash").val());
	var total_cash;
	if(task_way==0){
		cash_task = 0;
	}else if(task_way==1){
		if (model_id==1||model_id==2||model_id==3){
			cash_task = Number($("#txt_task_cash1").val());
		}else{
			cash_task = 0;
		}
	}else if(task_way==2){
		cash_task = 0;
	}else{
		cash_task = 0;
	}
	total_cash = cash_task+item_cash;
	$("#cash_task").html(cash_task);
	$("#total").html(total_cash);
	get_swap_coin(total_cash,'tai_total',0);
}

/**
 * 获取币种转换后的值
 * @param value 要转换的值
 * @param obj_str 要显示的地方ID字符串，用,隔开
 * @param res_bool 判断是否有反回值 0为无，1为有
 * @param cur_coin 目前的币种代码
 * @param new_coin 要转成的币种代码
 * @param carry 是否四舍五入进位
 */
function get_swap_coin(value,obj_str,res_bool,cur_coin,new_coin,carray){
	var cur_coin = cur_coin ? cur_coin : 'CNY';
	var new_coin = new_coin ? new_coin : 'TWD';
	var carray = carray ? carray : 0;
	var res_booler = res_bool ? false : true;
	var obj_str = obj_str ? obj_str : '';
	var result = 0;
	var mon = 0;
	mon = parseFloat(value);
	$.ajax({
		url:SITEURL+'/index.php?do=ajax&view=ajax&ac=swapcoin',
		async:res_booler,
		data:{money:mon,curcoin:cur_coin,newcoin:new_coin,carray:carray},
		success:function(msg){
			result = msg && (msg != 'NaN') ? msg : result;
			result = parseFloat(result);
			if(obj_str){
				obj_arr = obj_str.split(',');
				for(var i=0;i<obj_arr.length;i++){
					$('#'+obj_arr[i]).val(result);
					$('#'+obj_arr[i]).text(result);
					$('#'+obj_arr[i]).html(result);
				}
			}
		}
	});
	if(res_bool){
		return result;
	}
}
function getMaxDday(task_cash,model_id){
	if(task_cash){
		$.get(SITEURL+'/index.php?do=ajax&view=task&ajax=getmaxday&task_cash='+task_cash+'&model_id='+model_id,function(json){
			if(json.status==1){ 	
				//上下限默认值赋予
				var maxday = json.data.maxday;
				var minday = json.data.minday;
				var mincash = json.data.mincash;
				$('#task_maxday').val(maxday);
				$('#task_minday').val(minday);
				switch(model_id){
					case '1':
					case '2':
						break;
					case '3':
					case '4':
					if(parseFloat($('#txt_task_cash_'+model_id).val())<parseFloat(mincash)){
						$('#txt_task_cash_'+model_id).val(mincash);
					}
					break;
				}
			}else
				return false;
			},'json')
	}
}

/*
 * 奖项验证
 * */
function prize_valid(){
	
	var pcount = $('#txt_prize_count').val();
	var t_cash = $('#txt_task_cash1').val();
	
	if(t_cash==''||pcount==''){
		return false;
	}
	$('#msg_prize_valid').hide();
	var mess='';
	var pz_c_cash = 0;//当前填写的总金额,变量不变,值改成比例，保存比例100%才正确
	var part_cash;
	for(var i=1;i<=pcount;i++){
		part_cash = 0;
		if($('#task_prize_'+i).val()==''||$('#task_prize_'+i).val()<=0){
			$('#msg_prize_valid').html(i+'等奖的中标金额未填写');
			$('#msg_prize_valid').show();
			return false;
		}
		
		if(i>=2&&parseInt($('#task_prize_'+i).val())>=parseInt($('#task_prize_'+(i-1)).val())){
			$('#msg_prize_valid').html((i-1)+'等奖的中标金额必须大于'+i+'等奖');
			$('#msg_prize_valid').show();
			return false;
		}
		pz_c_cash += parseInt($('#task_prize_'+i).val());
		//显示比例所占金额
		//part_cash = parseInt($('#task_prize_'+i).val())*t_cash/100;
		//$('#prize_'+i).html(part_cash + ' 元');
	}
	
	if(pz_c_cash != t_cash){
		$('#msg_prize_valid').html('中标金额总和不等于任务金额');
		$('#msg_prize_valid').show();
		return false;
	}
	$('#msg_prize_valid').hide();
	return true;
}

/**
 * 三级显示修改，获取行业大类
 */
if ($("#e_indus_pid").length>0){
	var lengthvpid=$("#e_indus_pid option").length;
	var lengthvsid=$("#e_indus_id option").length;
	var optionsibling=$("#e_indus_pid").clone();
	var optionsseonibling=$("#e_indus_id").clone();
	$("#e_indus_pid option:gt(0),#e_indus_id option:gt(0)").each(function(){
		if($(this).parents("span").length==0){
			$(this).wrap("<span style='display:none'></span>");	
		}
	});
	function showIndusPE(g_id){
		if ($("#e_indus_pid option").length<lengthvpid){
			$("#e_indus_pid").html(optionsibling.html())
		}
		var indus_pid = $('#e_g_id').val();
		$("#e_indus_pid option:gt(0)").each(function(){
			if($(this).parents("span").length==0){
				$(this).wrap("<span style='display:none'></span>");	
			}
		});
		
		$(".p_"+g_id).each(function(){
			$(this).clone().replaceAll($(this).parents("span"));
		});
		$("#e_indus_id option:gt(0)").each(function(){
			if($(this).parents("span").length==0){
				$(this).wrap("<span style='display:none'></span>");	
			}
		});
		$("#e_indus_id option:eq(0)").clone().replaceAll($(this).parents("span"));
	}
	
	function showIndusE(indus_pid){
		if ($("#e_indus_id option").length<lengthvsid){
			$("#e_indus_id").html(optionsseonibling.html())
		}
		if($("#recommend_price").length>0){
			$("#recommend_price").hide();
		}
		$(".p_"+$("#e_g_id").val()).each(function(){
			if($(this).attr('selected') == true){
				indus_pid = $(this).attr('value');
			}
		});
		if(indus_pid){
			$("#e_indus_id option:gt(0)").each(function(){
				if($(this).parents("span").length==0){
					$(this).wrap("<span style='display:none'></span>");	
				}
			});
			$(".c_"+indus_pid).each(function(){
				$(this).clone().replaceAll($(this).parents("span"));
			});
			$("#e_indus_pid span").remove("span");
			$("#e_indus_id span").remove("span");
		}
	}
	showIndusPE($("#e_g_id").val());
	showIndusE($("#e_indus_pid").val());
}

//计算当前输入的个数，汉字算两个字符  
function  getStringLen(Str){     
	var   i,len,code;     
	if(Str==null || Str == "")   return   0;     
	len   =   Str.length;     
	for   (i   =   0;i   <   Str.length;i++)       
	{       
	code   =   Str.charCodeAt(i);     
	if   (code   >   255) {len ++;}     
	}     
	return   len;     
}    
	
function checkLen(value,length){  
	var len = getStringLen(value); 
	//提示当前输入的个数  
	//$("#lblSummary"+length).html("当前最大长度为:<font color='red'>"+length+"</font>,还可以输入：<font color='red'>"+(length-len)+"</font>");  
	$("#lblSummary"+length).html("<font class=\"ceb2\">"+len+"</font>/"+length+" 字");
	if(len>length){  
		flag = false;  
	}else{  
		flag = true;  
	}  
	  
}  
EPWEIKE.checkInner = function (str,Limit,cont) {
	var i   = $.trim(removeHTMLTag(str));
	var len = i.length;
	var remain = Math.abs(Limit-len);
	if(Limit>=len){
		$(cont).html("已输入长度:"+"<b class='ceb2'>"+len+"</b>"+",还可以输入:"+remain+"字");
	}else{
		$(cont).html("可输入:"+Limit+"字,已超出长度:"+remain+"字");
	}
}