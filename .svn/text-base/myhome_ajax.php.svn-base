<?php
header("Content-Type: text/html; charset=UTF-8");
$style=!empty($_REQUEST["style"])?$_REQUEST['style']:NULL;

$string="<div class=\"postfgx\">
                  <span></span>
                  <i></i>
                </div>
             <div class=\"postlist_li\">
                <div class=\"postlist_li_top\">
                  <div class=\"bounty\"><b>悬赏</b><span>￥12000.00</span></div>
                  <samp class=\"a2\"><q>发布于2009-10-13 23:00</q><q>任务状态： <font class=\"red\">投稿中</font></q><q>赏金分配： <font class=\"red\">一人独享赏金</font></q><q>来自：<a href=\"#\">一品威客网</a></q></samp>
                </div>
                <div class=\"postlist_li_com\">
                  <h2 class=\"a2\"><a href=\"#\" class=\"f_l\">河南郑州起点商贸公司 夏令营创意LOGO征集</a><a href=\"#\" class=\"button f_r\">我有类似需求</a></h2>
                  <span>\"企贷通\"是XTools CRM云计算服务提供商面向北京中小企业提供融资服务（贷款）的一款产品，与银行合作，中小企业通过XTools的云服务直接向银行申贷，速度比一般的银行借贷和融资机构快10——20倍，LOGO单独做\"企贷通\"。</span>
                  <q>此任务共收到 <font class=\"red\">125456</font> 人关注,共收到 <font class=\"red\">20</font> 个稿件</q>
                  <div class=\"postlist_li_img\">
                     <ul>
                        <li class=\"mlon select\"><div><a href=\"#\"><img src=\"images/myhome/head.jpg\" width=\"150\" height=\"150\"></a></div><i></i></li>
                        <li><div><a href=\"#\"><img src=\"images/myhome/sjbzt01.jpg\" width=\"140\" height=\"120\"></a></div><i></i></li>
                        <li><div><a href=\"#\"><img src=\"images/myhome/sjbzt01.jpg\" width=\"120\" height=\"140\"></a></div><i></i></li>
                        <li><div><a href=\"#\"><img src=\"images/myhome/sjbzt01.jpg\" width=\"100\" height=\"140\"></a></div><i></i></li>
                        <li><div><a href=\"#\"><img src=\"images/myhome/sjbzt01.jpg\" width=\"130\" height=\"80\"></a></div><i></i></li>
                     </ul>
                  </div>
                  <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
             </div>";
$pstr="<div class=\"weikefeedlist a2\">
            <h3><b class=\"red\">￥12000.00</b><a href=\"#\" target=\"_blank\">河南郑州起点商贸公司 夏令营创意LOGO征集</a></h3>
            <ul>
              <em><a href=\"#\" target=\"_blank\"><img src=\"images/task/001.jpg\" width=\"50\" height=\"50\"></a></em>
              <li class=\"c999\"><span>中标威客<a href=\"#\"> 墨星视觉设计</a></span><span class=\"ml_10\">评价于：2009-10-13 23:00</span></li>
              <li><span>付款及时度：5分</span><span class=\"ml_20\">合作愉快度：5分</span></li>
            </ul>
            <dl>
              <dd>雇主很善解人意，希望我们下次还可以继续合作，呵呵！<i></i></dd>
            </dl>
            <div class=\"clear\"></div>
         </div>";
	 
$str=NULL;
$strtow=NULL;
for($i=0;$i<=5;$i++){
	$str.=$string;
}

for($n=0;$n<=5;$n++){
	$strtow.=$pstr;
}



if($style==1){
   echo $str;
}else{
	echo $strtow;
}
?>