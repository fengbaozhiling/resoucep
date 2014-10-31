/**
 * flash 文件上传
 * 
 * @param (Object)
 *            paramReg 上传基本参数注册
 * @param (Object)
 *            contrReg 站内业务参数注册
 */
function uploadify(paramReg,contrReg){
	var paramReg  = paramReg?paramReg:{};
	var contrReg  = contrReg?contrReg:{};
	var uploadify = {};
	var auto 	  = paramReg.auto==true?true:false;// 是否自动提交
	var debug     = paramReg.debug==true?true:false;// 是否开启debug调试
	var hide      = paramReg.hide==true?true:false;// 上传完成后是否隐藏文件域
	var swf  	  = paramReg.swf?paramReg.swf:IMGURL+'js/Plugin/uploadify/uploadify.swf';// flash路径
	var uploader  = paramReg.uploader?paramReg.uploader:SITEURL+'/index.php?do=ajax&view=upload';// //上传基本路径
	var deleter   = paramReg.deleter?paramReg.deleter:SITEURL+'/index.php?do=ajax&view=file&ajax=delete';// 文件删除路径
	var file=fname= paramReg.file?paramReg.file:'upload';// file
															// 表单名name=id=upload
	var resText   = paramReg.text?paramReg.text:'file_ids';// 上传完成后结果保存表单名.name=id=file_ids;
	var size      = paramReg.size;// 文件大小限制
	var maxsize   = paramReg.maxsize?paramReg.maxsize:0;
	var exts      = paramReg.exts;// 文件类型限制
	var method    = paramReg.m?paramReg.m:'post';// 上传方式
	var limit     = paramReg.limit?paramReg.limit:1;// 上传个数限制
	
	var task_id   =	parseInt(contrReg.task_id)+0;
	var work_id   = parseInt(contrReg.work_id)+0;
	var obj_id    = parseInt(contrReg.obj_id)+0;
	var pre       = contrReg.mode=='back'?'../../':'';
	var fileType  = contrReg.fileType?contrReg.fileType:'att';
	var objType   = contrReg.objType?contrReg.objType:'task';
		swf		  = pre+swf;
		deleter   = pre+deleter;
		uploader  = pre+uploader+'&file_name='+file+'&file_type='+fileType+'&obj_type='+objType+'&task_id='+task_id+'&maxsize='+maxsize+'&work_id='+work_id+'&obj_id='+obj_id+'&PHPSESSID='+xyq;
		if(getcookie("dsfdsfda")){
			uploader=uploader+"&ajaxfdsfda=1";
		}
		
		//if(task_id == 183497){alert(uploader);}
		uploadify.auto			  =	auto;
		uploadify.debug			  =	debug;
		uploadify.hide			  =	hide;
		uploadify.swf			  =	swf;
		uploadify.uploader		  = uploader;
		uploadify.deleter 		  = deleter;
		uploadify.fileObjName	  =	file;
		uploadify.resText    	  =	resText;
		uploadify.fileSizeLimit	  =	size;
		uploadify.fileTypeExts	  =	exts;
		uploadify.uploadLimit     = limit;
		uploadify.method		  = method;
		uploadify.onUploadSuccess =	function(file,json,response){
			json = eval('('+json+')');
			if(json.err){
				$("#" + file.id).remove();
				showDialog(decodeURI(json.err), 'alert', '错误提示','',0);
				return false;
			}else{
				json.filename  = fname;
				typeof(uploadResponse)=='function'&&uploadResponse(json);
			}
		};
	$("#"+file).uploadify(uploadify);
}


/**
 * 上传完成后的页面响应
 * @param json json数据
 */
function uploadResponse(json){
	if($("#"+json.fid).length<1){//判断是否已有同样的li、
		var file_ids = $("#file_ids").val();
		if(file_ids){
			$("#file_ids").val(file_ids+','+json.fid);
		}else{	
			$("#file_ids").val(json.fid);
		}
		$("#pic").val(json.msg.url);
	}
}

/**
 * 文件上传 uploadResponse这个方法需要具体使用的时候自行定义。因为不同的地方响应插入页面的内容不同
 * 
 * @param task_id
 *            任务id/后台时表示文件类型
 * @param obj_id
 *            对象id
 * @param obj_type
 *            对象类型
 * @param fileType
 *            上传类型 att,big,service
 * @param mode
 *            上传模式 front,back
 * @param {Object}
 *            fileName 文件名
 * @param {Object}
 *            width 限制宽
 * @param {Object}
 *            height 限制高
 * @param {Object}
 *            msgType 消息提示类型 0或1 0shoDialog提示。1表示tips提示
 * @param {Object}
 *            showTarget 消息插入容器ID 。当ac_type=1时有效
 */
function upload(fileName,fileType,mode,task_id,obj_id,obj_type,width,height,msgType,showTarget){
	var fileObj=document.getElementById(fileName);
		if(isExtName(fileObj,1,msgType,showTarget)){
			mode=='back'?pre = "../../":pre='/';
			var url=pre+"index.php?do=ajax&view=upload&task_id="+task_id+"&file_type="+fileType+"&obj_type="+obj_type+"&obj_id="+obj_id+"&file_name="+fileName;
			$.ajaxFileUpload({
				url:url,
				fileElementId:fileName,
				dataType:'json',
				success:function(json){
					if(json.err){
						if(msgType==1){
							tipsAppend(showTarget,json.err,'error','red');
						}else{
							showDialog(decodeURI(json.err), 'alert', '错误提示','',0);
						}
						return false;
					}else{
						json.filename  = fileName;
						uploadResponse(json);
					}
				 },
				error:function(json,status,e){
					if(msgType==1){
						tipsAppend(showTarget,e,'error','red');
					}else{
						showDialog(e, 'alert', '错误提示','',0);
					}
					return false;
				}
			});
		}
}
