<?php
$res["error"] = "";//错误信息
$res["msg"] = "";//提示信息
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"c:\\fffff")){
    $res["msg"] = "ok";
}else{
    $res["error"] = "error";
}
echo json_encode($res);
?>
