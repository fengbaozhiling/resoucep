// JavaScript Document
In.add('ZeroClipboard',{path:JSURL+"/js/Plugin/ZeroClipboard/ZeroClipboard.js",type:'js',charset:'utf-8'});
/*function CopyTxt(obj_id) { 
	var arg_str_text = document.getElementById(obj_id).value;
	if(arg_str_text==""){
		return;
	}

   // obj_input.select();
  if(window.clipboardData) {        
		window.clipboardData.clearData();        
		window.clipboardData.setData("Text", arg_str_text);
		
		showDialog("内容已经复制到剪贴板！","right","操作提示");
	} else if(navigator.userAgent.indexOf("Opera") != -1) {        
		window.location = arg_str_text;        
	} else if (window.netscape) {        
		try {        
				netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");        
		} catch (e) {   
			showDialog("无法将内容复制到剪贴板，请手动复制内容。\n解决方法：\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'","right","操作提示");
				        
		}        
		var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);        
		if (!clip)  return;        
		var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);        
		if (!trans)  return;        
		trans.addDataFlavor('text/unicode');        
		var str = new Object();        
		var len = new Object();        
		var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);        
		var copytext = arg_str_text;        
		str.data = copytext;        
		trans.setTransferData("text/unicode",str,copytext.length*2);        
		var clipid = Components.interfaces.nsIClipboard;        
		if (!clip)  return false;        
		clip.setData(trans,null,clipid.kGlobalClipboard); 
		showDialog("内容已经复制到剪贴板！","right","操作提示");
		      
	}        
}*/
In("ZeroClipboard","showDialog","showDialog_css",function(){
	$(".copy_btn").each(function(){  
		var id = $(this).attr('data');  
        var clip=null;  
        clip = new ZeroClipboard.Client();  
        clip.setHandCursor( true ); 
		ZeroClipboard.setMoviePath(JSURL+"/js/Plugin/ZeroClipboard/ZeroClipboard.swf");
        clip.setText($("#"+id+"_code").val());  
        clip.addEventListener('complete', function (client, text) {  
           showDialog("内容已经复制到剪贴板！","right","操作提示");
        });  
       clip.glue("btn_"+id);
   });
})