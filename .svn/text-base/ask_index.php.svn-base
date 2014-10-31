<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="http://resource.epweike.net/css/common.css">
<link rel="stylesheet" type="text/css" href="css/ask.css">
<title>首页</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="nav_submain clearfix">
	<div class="container">
		<a class="crent" href="">问答首页</a><a href="">问题分类</a><a href="">所有问题</a><a href="">问答砖家</a><a href="">知识专题</a><a href="">设计</a><a href="">开发</a><a href="">营销</a>
	</div>
</div>
<div class="ask_main">
	<div class="container">
		<div class="crumbs">
			<strong>当前位置：</strong> <a href="">首页</a>&nbsp;&gt;&nbsp;<a href="">所有人才</a>
		</div>
		<div class="index_top clearfix">
			<div class="ask">
				<a href="/all/" target="_blank" title="我要回答" class="a_huida">我 要 回 答</a> <a href="/ask/" title="我要提问"  target="_blank" class="a_tiwen">我 要 提 问</a>
				<form id="questionSubmit" name="form1" method="post" action="?controller=wenba/ask&controllerAction=save" onsubmit="if(!checkLogin()){return false; }return $('#questionSubmit').ajaxForm({'callback':questionSubmitCallback});">
					<div class="ask_textdiv">
						<textarea class="ask_textarea" maxlength="50" name="title" placeholder="在此输入您的装修问题,十万专业设计师帮您解答"></textarea>
					</div>
					<div class="ask_bottom">
						<div class="ask_fenlei">
							<div class="f_l"> 
								问题分类
								<select name="g_id" id="g_id" title="请选择频道"  onchange="showIndusP(this.value)">
									<option value="0" selected="selected">请选择频道</option>
									<option value="1" >设计</option>
									<option value="2" >开发</option>
									<option value="3" >文案</option>
									<option value="4">装修</option>
									<option value="5" >营销</option>
									<option value="6" >商务</option>
									<option value="7" >生活</option>
								</select>
								<select name="indus_pid" id="indus_pid" title="请选择分类"  onchange="showIndus(this.value)">
									<option class="p_0" value="0" selected="selected">请选择分类</option>
									<option class="p_1"  value="2143">商标/VI设计</option>
									<option class="p_1"  value="2145">宣传品设计</option>
									<option class="p_1"  value="1284">服装设计</option>
									<option class="p_1"  value="64">应用设计</option>
									<option class="p_1"  value="99">照片处理</option>
									<option class="p_1"  value="2158">书籍装帧</option>
									<option class="p_1"  value="1277">动漫设计</option>
									<option class="p_1"  value="2185">网页设计</option>
									<option class="p_1"  value="69">多媒体设计</option>
									<option class="p_1"  value="1275">卡片设计</option>
									<option class="p_2"  value="1287">网站开发</option>
									<option class="p_2"  value="71">软件开发</option>
									<option class="p_2"  value="101">网游服务</option>
									<option class="p_2"  value="1858">移动应用开发</option>
									<option class="p_3"  value="61">起名取名</option>
									<option class="p_3"  value="59">文案写作</option>
									<option class="p_3"  value="104">创意祝福</option>
									<option class="p_3"  value="1123">策划</option>
									<option class="p_3"  value="2240">歌词</option>
									<option class="p_4"  value="2189">家居装修</option>
									<option class="p_4"  value="2202">建筑装修</option>
									<option class="p_4"  value="2219">建筑设计</option>
									<option class="p_4"  value="2216">软装设计</option>
									<option class="p_4"  value="2198">定制家居</option>
									<option class="p_4"  value="2228">其他装修</option>
									<option class="p_5"  value="2162">网络营销</option>
									<option class="p_5"  value="119">微博营销</option>
									<option class="p_5"  value="67">网店服务</option>
									<option class="p_6"  value="2011">翻译</option>
									<option class="p_6"  value="2027">市场调查</option>
									<option class="p_6"  value="2023">法律</option>
									<option class="p_6"  value="1996">商业服务</option>
									<option class="p_6"  value="2032">求职招聘</option>
									<option class="p_7"  value="2041">网络钟点工</option>
									<option class="p_7"  value="2055">旅游服务</option>
									<option class="p_7"  value="2070">文化艺术服务</option>
									<option class="p_7"  value="2076">印刷出版</option>
									<option class="p_7"  value="2084">影音服务</option>
									<option class="p_7"  value="2100">广告会展</option>
									<option class="p_7"  value="2104">婚庆</option>
									<option class="p_7"  value="2116">家教</option>
									<option class="p_7"  value="2122">家政</option>
									<option class="p_7"  value="2130">搬家</option>
									<option class="p_7"  value="2138">咨询</option>
								</select>
								<select name="indus_id" id="indus_id">
									<option  class="c_0" value="0" selected="selected">请选择子分类</option>
									<option class="c_1123"  value="2238">婚庆策划</option>
									<option class="c_1277"  value="2164">动漫办公用品设计</option>
									<option class="c_1277"  value="2174">动漫日用品设计</option>
									<option class="c_1277"  value="2175">个人表情设计</option>
									<option class="c_2240"  value="2241">歌词谱曲</option>
									<option class="c_2240"  value="2242">歌词创作</option>
									<option class="c_2027"  value="2028">问卷调查</option>
									<option class="c_2027"  value="2030">意见建议</option>
									<option class="c_1996"  value="1997">商标注册</option>
									<option class="c_1996"  value="1998">公司注册</option>
									<option class="c_1996"  value="1999">专利申请</option>
									<option class="c_1996"  value="2000">商标转让</option>
									<option class="c_1996"  value="2009">税务登记</option>
									<option class="c_2027"  value="2029">征集点子</option>
									<option class="c_2122"  value="2253">涉外家政</option>
									<option class="c_1996"  value="2004">验资</option>
									<option class="c_1996"  value="2005">评估</option>
									<option class="c_1996"  value="2006">财务审计</option>
									<option class="c_2032"  value="2035">简历设计</option>
									<option class="c_2041"  value="2047">数据录入</option>
									<option class="c_2041"  value="2048">排队</option>
									<option class="c_2041"  value="2051">代缴费</option>
									<option class="c_2041"  value="2052">捧场</option>
									<option class="c_2041"  value="2053">接送</option>
									<option class="c_2055"  value="2058">包车服务</option>
									<option class="c_2055"  value="2059">自驾旅游</option>
									<option class="c_69"  value="1111">3d模型及CAD</option>
									<option class="c_59"  value="1126">宣传文案</option>
									<option class="c_61"  value="1139">公司起名</option>
									<option class="c_2162"  value="1143">论坛推广</option>
									<option class="c_67"  value="1147">店标设计</option>
									<option class="c_2158"  value="1153">封面设计</option>
									<option class="c_64"  value="1253">包装设计</option>
									<option class="c_71"  value="1304">程序开发</option>
									<option class="c_2145"  value="1310">宣传册页</option>
									<option class="c_1277"  value="1311">卡通形象设计</option>
									<option class="c_99"  value="1437">照片变卡通</option>
									<option class="c_101"  value="1470">游戏代练</option>
									<option class="c_104"  value="1486">感恩回馈</option>
									<option class="c_1858"  value="1860">IOS应用</option>
									<option class="c_2011"  value="2012">英语</option>
									<option class="c_2023"  value="2024">写法律文书</option>
									<option class="c_2032"  value="2033">求职</option>
									<option class="c_2041"  value="2042">网络投票</option>
									<option class="c_2055"  value="2056">酒店预订</option>
									<option class="c_2070"  value="2071">文艺创作</option>
									<option class="c_2076"  value="2077">书、报、刊出版</option>
									<option class="c_2084"  value="2085">制作与发行</option>
									<option class="c_2100"  value="2101">会议服务</option>
									<option class="c_2104"  value="2105">婚庆公司</option>
									<option class="c_2116"  value="2117">学前辅导</option>
									<option class="c_2122"  value="2123">保洁</option>
									<option class="c_2130"  value="2131">住宅搬家</option>
									<option class="c_2138"  value="2139">心理咨询</option>
									<option class="c_2143"  value="2144">LOGO设计</option>
									<option class="c_1284"  value="2150">服饰设计</option>
									<option class="c_1275"  value="2177">会员卡设计</option>
									<option class="c_119"  value="2180">产品推广</option>
									<option class="c_2185"  value="2186">整站网页设计</option>
									<option class="c_2189"  value="2190">新房装修</option>
									<option class="c_2198"  value="2199">定制衣柜设计</option>
									<option class="c_1287"  value="2203">综合性网站</option>
									<option class="c_2202"  value="2206">办公商铺装修</option>
									<option class="c_2216"  value="2217">软装搭配</option>
									<option class="c_2228"  value="2229">装修监理</option>
									<option class="c_1123"  value="2234">宣传策划</option>
									<option class="c_2185"  value="1104">网站模板设计</option>
									<option class="c_69"  value="1109">动画FLASH</option>
									<option class="c_2143"  value="1118">VI设计</option>
									<option class="c_71"  value="1135">软件美工</option>
									<option class="c_61"  value="1142">品牌起名</option>
									<option class="c_67"  value="1149">网店取名</option>
									<option class="c_64"  value="1276">产品外观设计</option>
									<option class="c_2158"  value="1279">插画设计</option>
									<option class="c_2162"  value="1299">QQ群推广</option>
									<option class="c_59"  value="1307">产品文案</option>
									<option class="c_2145"  value="1312">招牌设计</option>
									<option class="c_99"  value="1438">老照片翻新</option>
									<option class="c_101"  value="1466">代写攻略</option>
									<option class="c_104"  value="1480">生日祝福</option>
									<option class="c_1284"  value="1634">T恤设计</option>
									<option class="c_1275"  value="2178">卡片制作</option>
									<option class="c_1858"  value="1859">Android应用</option>
									<option class="c_2011"  value="2013">日语</option>
									<option class="c_2023"  value="2025">法律咨询</option>
									<option class="c_2032"  value="2034">招聘</option>
									<option class="c_2041"  value="2043">网络兼职</option>
									<option class="c_2055"  value="2057">预订票</option>
									<option class="c_2070"  value="2072">文艺表演</option>
									<option class="c_2076"  value="2078">书、报、刊制作</option>
									<option class="c_2084"  value="2086">广告配音</option>
									<option class="c_2100"  value="2102">广告业</option>
									<option class="c_2104"  value="2106">婚车租赁</option>
									<option class="c_2116"  value="2118">小学辅导</option>
									<option class="c_2122"  value="2124">月嫂</option>
									<option class="c_2138"  value="2140">移民咨询</option>
									<option class="c_1277"  value="2160">视频动画制作</option>
									<option class="c_119"  value="2181">活动推广</option>
									<option class="c_2189"  value="2192">施工图设计</option>
									<option class="c_2198"  value="2200">定制橱柜设计</option>
									<option class="c_1287"  value="2204">资讯型网站</option>
									<option class="c_2202"  value="2207">自建房装修</option>
									<option class="c_2216"  value="2218">软装配饰</option>
									<option class="c_2219"  value="2223">小区规划</option>
									<option class="c_2228"  value="2230">风水咨询</option>
									<option class="c_1123"  value="2235">活动策划</option>
									<option class="c_69"  value="1112">广告片制作</option>
									<option class="c_71"  value="1133">插件开发</option>
									<option class="c_61"  value="1138">宝宝起名</option>
									<option class="c_67"  value="1148">店招设计</option>
									<option class="c_1277"  value="1154">四格漫画设计</option>
									<option class="c_2158"  value="1155">排版设计</option>
									<option class="c_2216"  value="1261">形象墙设计</option>
									<option class="c_64"  value="1280">图片编辑</option>
									<option class="c_1275"  value="1282">贺卡设计</option>
									<option class="c_2145"  value="1314">横幅设计</option>
									<option class="c_2219"  value="1373">房屋建筑设计</option>
									<option class="c_99"  value="1439">照片修复与合成</option>
									<option class="c_101"  value="1464">剧情策划</option>
									<option class="c_104"  value="1481">爱情表白</option>
									<option class="c_1858"  value="1861">IPAD应用</option>
									<option class="c_2011"  value="2014">韩语</option>
									<option class="c_2023"  value="2026">聘请律师</option>
									<option class="c_2041"  value="2044">网上代购</option>
									<option class="c_2070"  value="2073">经纪代理</option>
									<option class="c_2076"  value="2079">书、报、刊发行</option>
									<option class="c_2084"  value="2087">动画配音</option>
									<option class="c_2100"  value="2103">展会服务</option>
									<option class="c_2104"  value="2107">婚庆酒店</option>
									<option class="c_2116"  value="2119">初中辅导</option>
									<option class="c_2122"  value="2125">保姆</option>
									<option class="c_2130"  value="2133">办公室搬家</option>
									<option class="c_2138"  value="2141">理财咨询</option>
									<option class="c_1284"  value="2151">工作服设计</option>
									<option class="c_2162"  value="2168">网站推广</option>
									<option class="c_59"  value="2232">商业文案</option>
									<option class="c_119"  value="2182">店铺推广</option>
									<option class="c_2185"  value="2188">网站标志设计</option>
									<option class="c_2189"  value="2193">效果图制作</option>
									<option class="c_2198"  value="2201">定制家具设计</option>
									<option class="c_1287"  value="2205">团购网站</option>
									<option class="c_2202"  value="2208">样板间设计</option>
									<option class="c_2228"  value="2231">其他装修</option>
									<option class="c_1123"  value="2236">广告策划</option>
									<option class="c_2032"  value="2038">找客户</option>
									<option class="c_2143"  value="2297">商标设计</option>
									<option class="c_2185"  value="1103">网站广告设计</option>
									<option class="c_1275"  value="1119">名片设计</option>
									<option class="c_59"  value="1125">写剧本脚本</option>
									<option class="c_67"  value="1150">网店模板</option>
									<option class="c_2145"  value="1274">台历设计</option>
									<option class="c_64"  value="1285">文具设计</option>
									<option class="c_1287"  value="1288">电子商务网站</option>
									<option class="c_2162"  value="1298">博客推广</option>
									<option class="c_69"  value="1320">三维设计</option>
									<option class="c_2219"  value="1374">园林景观</option>
									<option class="c_99"  value="1440">照片美化</option>
									<option class="c_101"  value="1463">版本设计</option>
									<option class="c_104"  value="1482">圣诞祝福</option>
									<option class="c_2143"  value="1636">按钮图标设计</option>
									<option class="c_61"  value="1641">店铺起名</option>
									<option class="c_71"  value="1867">软件汉化</option>
									<option class="c_2011"  value="2015">俄语</option>
									<option class="c_2027"  value="2031">电话调查</option>
									<option class="c_2032"  value="2036">寻人</option>
									<option class="c_2041"  value="2045">网络模特</option>
									<option class="c_2070"  value="2074">文化活动组织</option>
									<option class="c_2076"  value="2080">自费出书</option>
									<option class="c_2084"  value="2088">童声配音</option>
									<option class="c_2104"  value="2108">彩妆造型</option>
									<option class="c_2116"  value="2120">高中辅导</option>
									<option class="c_2122"  value="2126">钟点工</option>
									<option class="c_2130"  value="2134">起重吊装</option>
									<option class="c_2138"  value="2142">命理测算</option>
									<option class="c_1284"  value="2152">图案设计</option>
									<option class="c_2158"  value="2159">电子书制作</option>
									<option class="c_1277"  value="2163">漫画设计</option>
									<option class="c_119"  value="2183">新品促销</option>
									<option class="c_2189"  value="2191">别墅设计</option>
									<option class="c_2202"  value="2211">酒店会所装潢</option>
									<option class="c_1123"  value="2237">影视策划</option>
									<option class="c_1858"  value="2298">微信公众平台开发</option>
									<option class="c_2185"  value="1106">网站动画设计</option>
									<option class="c_71"  value="1134">脚本制作</option>
									<option class="c_61"  value="1141">成人起名</option>
									<option class="c_64"  value="1152">电路设计</option>
									<option class="c_2143"  value="1278">字体设计</option>
									<option class="c_59"  value="1308">编辑校对</option>
									<option class="c_69"  value="1321">音频制作</option>
									<option class="c_99"  value="1441">婚纱照美化</option>
									<option class="c_101"  value="1462">评测报告</option>
									<option class="c_104"  value="1483">新年祝福</option>
									<option class="c_2145"  value="1640">广告设计</option>
									<option class="c_67"  value="1646">网店策划</option>
									<option class="c_119"  value="1653">微博招聘</option>
									<option class="c_1858"  value="1864">手机游戏开发</option>
									<option class="c_1996"  value="2001">招商加盟</option>
									<option class="c_2011"  value="2016">法语</option>
									<option class="c_2032"  value="2037">找对象</option>
									<option class="c_2041"  value="2046">网店促销</option>
									<option class="c_2055"  value="2060">导游陪游</option>
									<option class="c_2070"  value="2075">文化活动策划</option>
									<option class="c_2076"  value="2081">企业内刊</option>
									<option class="c_2084"  value="2089">彩铃配音</option>
									<option class="c_2104"  value="2109">婚庆用品</option>
									<option class="c_2116"  value="2121">教育培训</option>
									<option class="c_2122"  value="2127">陪护工</option>
									<option class="c_2130"  value="2135">长途搬家</option>
									<option class="c_2162"  value="2169">软文发布</option>
									<option class="c_1275"  value="2179">名片制作</option>
									<option class="c_2189"  value="2196">二手房装修</option>
									<option class="c_2202"  value="2209">精装房设计</option>
									<option class="c_1287"  value="2213">宣传展示型网站</option>
									<option class="c_2219"  value="2224">庭院景观设计</option>
									<option class="c_2145"  value="1122">海报设计</option>
									<option class="c_71"  value="1136">软件测试</option>
									<option class="c_69"  value="1322">配音录音</option>
									<option class="c_99"  value="1442">电子相册</option>
									<option class="c_101"  value="1461">游戏试玩</option>
									<option class="c_104"  value="1484">道歉短信</option>
									<option class="c_64"  value="1635">工业设计</option>
									<option class="c_59"  value="1637">写演讲稿</option>
									<option class="c_2162"  value="1647">我要上团购</option>
									<option class="c_67"  value="1648">网店推广</option>
									<option class="c_119"  value="1650">微博模板设计</option>
									<option class="c_2185"  value="1744">网页美工设计</option>
									<option class="c_1996"  value="2002">工商年检</option>
									<option class="c_2011"  value="2017">德语</option>
									<option class="c_2055"  value="2061">路线预订</option>
									<option class="c_2076"  value="2082">版权交易</option>
									<option class="c_2084"  value="2090">创意配音</option>
									<option class="c_2104"  value="2110">司仪督导</option>
									<option class="c_2130"  value="2136">设备搬迁</option>
									<option class="c_1277"  value="2165">动漫其他</option>
									<option class="c_1275"  value="2176">其他设计</option>
									<option class="c_2189"  value="2195">手绘墙设计</option>
									<option class="c_2202"  value="2210">商场装修</option>
									<option class="c_1287"  value="2214">手机WAP网站</option>
									<option class="c_1858"  value="2220">应用软件开发</option>
									<option class="c_2219"  value="2225">雕塑设计</option>
									<option class="c_1123"  value="2239">会展策划</option>
									<option class="c_2202"  value="1113">办公装修设计</option>
									<option class="c_71"  value="1137">游戏开发</option>
									<option class="c_99"  value="1443">其它照片处理</option>
									<option class="c_1123"  value="1474">项目策划</option>
									<option class="c_104"  value="1485">纪念日祝福</option>
									<option class="c_67"  value="1649">宝贝描述</option>
									<option class="c_119"  value="1651">微博推广</option>
									<option class="c_1858"  value="1862">Windowsphone</option>
									<option class="c_1996"  value="2003">代理记账</option>
									<option class="c_2011"  value="2018">西班牙语</option>
									<option class="c_2032"  value="2039">找供应商</option>
									<option class="c_2055"  value="2062">旅行社</option>
									<option class="c_2076"  value="2083">印刷</option>
									<option class="c_2084"  value="2091">影视配音</option>
									<option class="c_2104"  value="2111">婚礼跟拍</option>
									<option class="c_2122"  value="2129">育婴师</option>
									<option class="c_2130"  value="2137">短途拉货</option>
									<option class="c_2145"  value="2146">海报印刷</option>
									<option class="c_64"  value="2156">礼品设计</option>
									<option class="c_2189"  value="2194">电视墙设计</option>
									<option class="c_1287"  value="2215">程序功能开发</option>
									<option class="c_59"  value="2233">征稿征文</option>
									<option class="c_2202"  value="1116">店面装修设计</option>
									<option class="c_59"  value="1124">广告语</option>
									<option class="c_1287"  value="1293">数据库设计</option>
									<option class="c_1123"  value="1476">征集创意</option>
									<option class="c_104"  value="1487">祝福喜得贵子</option>
									<option class="c_119"  value="1652">微博祝福</option>
									<option class="c_1858"  value="1863">Symbian应用</option>
									<option class="c_71"  value="1868">办公系统开发</option>
									<option class="c_2011"  value="2019">阿拉伯语</option>
									<option class="c_2032"  value="2040">找人脉</option>
									<option class="c_2041"  value="2049">宣传品代发</option>
									<option class="c_2055"  value="2063">旅游景区</option>
									<option class="c_2084"  value="2092">外语配音</option>
									<option class="c_2104"  value="2112">婚纱礼服</option>
									<option class="c_2145"  value="2147">标签设计</option>
									<option class="c_99"  value="2153">商品照处理</option>
									<option class="c_64"  value="2157">机械设计</option>
									<option class="c_2162"  value="2172">网络推广</option>
									<option class="c_67"  value="2187">网店装修</option>
									<option class="c_2189"  value="2197">智能家居系统规划</option>
									<option class="c_2189"  value="1114">家装设计</option>
									<option class="c_2202"  value="1115">展会设计</option>
									<option class="c_1277"  value="1252">QQ表情</option>
									<option class="c_59"  value="1259">撰写报告</option>
									<option class="c_64"  value="1281">ppt设计</option>
									<option class="c_1287"  value="1290">接口开发</option>
									<option class="c_2162"  value="1301">推广注册</option>
									<option class="c_104"  value="1488">祝福乔迁新居</option>
									<option class="c_71"  value="1869">程序修改</option>
									<option class="c_2011"  value="2020">其他语种</option>
									<option class="c_2041"  value="2050">买票</option>
									<option class="c_2084"  value="2093">方言配音</option>
									<option class="c_2104"  value="2113">婚纱摄影</option>
									<option class="c_2145"  value="2148">瓶型设计</option>
									<option class="c_99"  value="2154">艺术照处理</option>
									<option class="c_1858"  value="2221">应用汉化</option>
									<option class="c_2162"  value="1144">搜索引擎优化</option>
									<option class="c_59"  value="1258">写书</option>
									<option class="c_1287"  value="1291">服务器系统</option>
									<option class="c_104"  value="1489">其他</option>
									<option class="c_71"  value="1870">嵌入式</option>
									<option class="c_2011"  value="2021">同声传译</option>
									<option class="c_2055"  value="2065">度假村</option>
									<option class="c_2084"  value="2094">影视制作</option>
									<option class="c_2104"  value="2114">花艺设计</option>
									<option class="c_2145"  value="2149">背景墙设计</option>
									<option class="c_99"  value="2155">壁纸设计</option>
									<option class="c_2202"  value="2212">展会装修</option>
									<option class="c_2219"  value="2222">CBD规划设计</option>
									<option class="c_2162"  value="1145">发帖推广</option>
									<option class="c_59"  value="1691">百科撰写</option>
									<option class="c_71"  value="1872">桌面软件</option>
									<option class="c_1996"  value="2007">企业变更</option>
									<option class="c_2011"  value="2022">口译</option>
									<option class="c_2055"  value="2066">农家乐</option>
									<option class="c_2084"  value="2095">写剧本</option>
									<option class="c_2104"  value="2115">婚庆策划</option>
									<option class="c_2219"  value="2226">导视系统设计</option>
									<option class="c_59"  value="1477">撰写评论</option>
									<option class="c_71"  value="1871">多媒体软件</option>
									<option class="c_1996"  value="2008">会计代理</option>
									<option class="c_2055"  value="2067">旅行车</option>
									<option class="c_2084"  value="2096">影视广告</option>
									<option class="c_2162"  value="2173">邮件推广</option>
									<option class="c_2219"  value="2227">3D模型设计</option>
									<option class="c_71"  value="1873">其他软件开发</option>
									<option class="c_2041"  value="2054">陪购</option>
									<option class="c_2055"  value="2068">旅游船</option>
									<option class="c_2084"  value="2097">宣传片制作</option>
									<option class="c_1996"  value="2010">工商代办</option>
									<option class="c_2055"  value="2069">代购旅游纪念品</option>
									<option class="c_2084"  value="2098">后期制作</option>
									<option class="c_2084"  value="2099">微电影</option>
								</select>
							</div>
						</div>
						<div class="submit">
							<input type="submit" id="submitbtn" value="提交问题" title="提交问题">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="clear mt_20"></div>
		<div class="ask_content">
			<div class="resolved_bar">
				<div class="resolved_bar_fl"> <img src="http://img14.weikeimg.com/tpl/default/theme/simple/img/2013/defalheid.jpg" width="65" height="65" />
					<div class="wuser_info"> <a href="http://www.xtuan.com/?controller=members/login" class="button red">登录</a> <a href="http://www.xtuan.com/?controller=members/register" class="button">注册</a> </div>
				</div>
				<div class="resolved_bar_fr"> 汇聚 <span class="ceb2">600</span>万 威客的经验和智慧，迅速解决困惑<br/>
					已解决问题：<span class="ceb2">2353</span>个 ,已回复条数：<span class="ceb2">2311253</span>条 </div>
			</div>
			<div class="index_main">
				<div class="fenleis">
					<div class="fenleis_tit">
						<h2>问题分类</h2>
						<span>(31368个问题)</span></div>
					<ul class="fenlei">
						<li> <a class="dafenlei" target="_blank" href="/jiazhuangsheji/">设计</a>
							<div class="xiaofenleis"> <a target="_blank" href="/zhuangxiufengge/">装修风格</a> <a target="_blank" href="/zhuangxiugongsi/">装修公司</a> <a target="_blank" href="/zhuangxiufengshui/">装修风水</a> <a target="_blank" href="/xuanguan/">玄关</a> <a target="_blank" href="/guodao/">过道</a> <a target="_blank" href="/woshi/">卧室</a> <a target="_blank" href="/shufang/">书房</a> <a target="_blank" href="/keting/">客厅</a> <a target="_blank" href="/canting/">餐厅</a> <a target="_blank" href="/shufang/">书房</a> <a target="_blank" href="/keting/">客厅</a> <a target="_blank" href="/shufang/">书房</a> <a target="_blank" href="/keting/">客厅</a> <a target="_blank" href="/canting/">餐厅</a> <a target="_blank" href="/shufang/">书房</a> <a target="_blank" href="/keting/">客厅</a> <a target="_blank" href="/canting/">餐厅</a> </div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/zhuangxiuliucheng/">开发</a>
							<div class="xiaofenleis"> <a target="_blank" href="/xinfangyanshou/">新房验收</a> <a target="_blank" href="/shoufeizixun/">收费咨询</a> <a target="_blank" href="/zhuangxiuyusuan/">装修预算</a> <a target="_blank" href="/zhuangxiuhetong/">装修合同</a> <a target="_blank" href="/shigonggongyi/">施工工艺</a> <a target="_blank" href="/yezhuweiquan/">威客维权</a> <a target="_blank" href="/huanbaojiance/">环保检测</a> <a target="_blank" href="/wangongyanshou/">完工验收</a> <a target="_blank" href="/shuidiangaizao/">水电改造</a> <a target="_blank" href="/yezhuweiquan/">威客维权</a> <a target="_blank" href="/huanbaojiance/">环保检测</a> <a target="_blank" href="/wangongyanshou/">完工验收</a> <a target="_blank" href="/shuidiangaizao/">水电改造</a></div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/jiajichanpin/">文案</a>
							<div class="xiaofenleis"> <a target="_blank" href="/jiaju/">家具</a> <a target="_blank" href="/weiyushebei/">卫浴设备</a> <a target="_blank" href="/dengjuzhaoming/">灯具/照明</a> <a target="_blank" href="/ertongjiajuyongpin/">儿童家具/用品</a> <a target="_blank" href="/jiayongdianqi/">家用电器</a> <a target="_blank" href="/chugui/">橱柜</a> <a target="_blank" href="/chuweidianqi/">厨卫电器</a> <a target="_blank" href="/chufangyongju/">厨房用具</a>  <a target="_blank" href="/chugui/">橱柜</a> <a target="_blank" href="/chuweidianqi/">厨卫电器</a> <a target="_blank" href="/chufangyongju/">厨房用具</a> </div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/zhuangshicailiao/">装修</a>
							<div class="xiaofenleis"> <a target="_blank" href="/jiabanmucai/">夹板木材</a> <a target="_blank" href="/diban/">地板</a> <a target="_blank" href="/tuliaoyouqi/">涂料/油漆</a> <a target="_blank" href="/cizhuanshicai/">瓷砖/石材</a> <a target="_blank" href="/menchuang/">门窗</a> <a target="_blank" href="/wujin/">五金</a>  <a target="_blank" href="/diban/">地板</a> <a target="_blank" href="/tuliaoyouqi/">涂料/油漆</a> <a target="_blank" href="/cizhuanshicai/">瓷砖/石材</a></div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/gongzhuangsheji/">营销</a>
							<div class="xiaofenleis"> <a target="_blank" href="/bangonglou/">办公楼</a> <a target="_blank" href="/shangchang/">商场</a> <a target="_blank" href="/zhuanmaidian/">专卖店</a> <a target="_blank" href="/jiudianbinguankefang/">酒店宾馆/客房</a> <a target="_blank" href="/canyinjiuba/">餐饮酒吧</a> <a target="_blank" href="/gewuditing/">歌舞迪厅</a> <a target="_blank" href="/xiuxianjianshen/">休闲健身</a> <a target="_blank" href="/tiyuchangguan/">体育场管</a>  </div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/zhuangshicailiao/">商务</a>
							<div class="xiaofenleis"> <a target="_blank" href="/jiabanmucai/">夹板木材</a> <a target="_blank" href="/diban/">地板</a> <a target="_blank" href="/tuliaoyouqi/">涂料/油漆</a> <a target="_blank" href="/cizhuanshicai/">瓷砖/石材</a> <a target="_blank" href="/menchuang/">门窗</a> <a target="_blank" href="/wujin/">五金</a> <a target="_blank" href="/cizhuanshicai/">瓷砖/石材</a> <a target="_blank" href="/menchuang/">门窗</a> <a target="_blank" href="/wujin/">五金</a> </div>
						</li>
						<li> <a class="dafenlei" target="_blank" href="/gongzhuangsheji/">生活</a>
							<div class="xiaofenleis"> <a target="_blank" href="/bangonglou/">办公楼</a> <a target="_blank" href="/shangchang/">商场</a> <a target="_blank" href="/zhuanmaidian/">专卖店</a> <a target="_blank" href="/jiudianbinguankefang/">酒店宾馆/客房</a> <a target="_blank" href="/canyinjiuba/">餐饮酒吧</a> <a target="_blank" href="/gewuditing/">歌舞迪厅</a> <a target="_blank" href="/xiuxianjianshen/">休闲健身</a> <a target="_blank" href="/tiyuchangguan/">体育场管</a> <a target="_blank" href="/huizhanjuchang/">会展剧场</a>  </div>
						</li>
					</ul>
				</div>
				<div class="resolved_questions">
					<div class="questions_top">
						<h2>刚刚解决的问题</h2>
						<a href="/yijiejue/" target="_blank" class="more">更多</a> </div>
					<ul class="rquestion">
						<li>
							<div class="question_tit"> <a class="question" href="/q31288.html" target="_blank" title="哪个品牌的智能家居最好？">哪个品牌的智能家居最好？</a> <span> 7天前 </span> </div>
							<div class="answer"> <a href="http://dg.xtuan.com/56169/" class="author" title="东莞市北强装修工程有限公司" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/logo/20140523/17563320378_55x55.jpg" width="55" height="55" alt="东莞市北强装修工程有限公司" /> </a>
								<div class="answer_info"> <span class="time">冠榕</span> <span class="result"> <a href="http://dg.xtuan.com/56169/" title="北强装修公司" target="_blank">北强装修公司</a> 等2人参与了回答 </span> </div>
							</div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31134.html" target="_blank" title="请问轻钢石膏结构和苯板结构的保温墙各有何特点？">请问轻钢石膏结构和苯板结构的保温墙各有何特点？</a> <span> 一个月前 </span> </div>
							<div class="answer"> <a href="http://fuzhou.xtuan.com/11614/" class="author" title="福州怀纳装饰设计工程有限公司" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/logo/20120811/1344674702_55x55.jpg" width="55" height="55" alt="福州怀纳装饰设计工程有限公司" /> </a>
								<div class="answer_info"> <span class="time">轻钢石膏结构的安装完后，直接批灰。苯板的安装后需要批多一层水泥批烫，然后再批灰。轻钢石膏结构的表面是石膏板，接缝处处理不当会开裂，苯板采用..</span> <span class="result"> <a href="http://fuzhou.xtuan.com/11614/" title="怀纳装饰" target="_blank">怀纳装饰</a> 参与了回答 </span> </div>
							</div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q11745.html" target="_blank" title="北京朝阳区室内装饰公司哪家比较好？">北京朝阳区室内装饰公司哪家比较好？</a> <span> 一个月前 </span> </div>
							<div class="answer"> <a href="http://www.xtuan.com/user/266694/" class="author" title="yoscl"> <img src="http://pic1.xtuan.com/upload/face/174_55x55.jpg" width="55" height="55" alt="yoscl" /> </a>
								<div class="answer_info"> <span class="time">北京佳美福林装饰公司还是很不错的，他们不仅有售前、售中、售后等全程有效的服务，而且还可以根据您所提的要求，私人定制出属于您的典雅、高贵、时..</span> <span class="result"> <a href="javascript:;" title="yoscl"  target="_blank">yoscl</a> 参与了回答 </span> </div>
							</div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q7297.html" target="_blank" title="北京哪家装修公司好？">北京哪家装修公司好？</a> <span> 一个月前 </span> </div>
							<div class="answer"> <a href="http://ly.xtuan.com/37378/" class="author" title="华浔品味装饰龙岩分公司" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/logo/20131022/10413717997_55x55.jpg" width="55" height="55" alt="华浔品味装饰龙岩分公司" /> </a>
								<div class="answer_info"> <span class="time">华浔品味专业从事家装、工装等设计、施工、服务于一体的装饰公司，是全国住宅装饰装修行业知名品牌、AAAA诚信企业，亚洲装饰业优秀设计奖、质量..</span> <span class="result"> <a href="http://ly.xtuan.com/37378/" title="华浔品味装饰" target="_blank">华浔品味装饰</a> 等4人参与了回答 </span> </div>
							</div>
						</li>
					</ul>
					<div class="questions_top">
						<h2 class="newx">大家在问</h2>
						<!--<a href="#" target="_blank" class="more">刷新</a>--> 
					</div>
					<ul class="rquestion w">
						<li>
							<div class="question_tit"> <a class="question" href="/q31368.html" target="_blank" title="">新来的，怎么我的作品上传了十来张就不能发不了？有什...</a> <span> 1天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31364.html" target="_blank" title="">客做木地板怎样？</a> <span> 2天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31360.html" target="_blank" title="">欧路莎卫浴怎么样?</a> <span> 2天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31356.html" target="_blank" title="">餐厅顶面墙有一根30公分的梁，怎么设计好</a> <span> 3天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31345.html" target="_blank" title="">面对面装饰公司师傅装修水平怎么样了</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31344.html" target="_blank" title="">原来精装修的房子局部改造，要求不破坏原来的木地板，...</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31343.html" target="_blank" title="">南昌面对面装饰公司今年在南昌怎么样了</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31341.html" target="_blank" title="">选择卫生间的开关应注意什么？</a> <span> 7天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31340.html" target="_blank" title="">选择客厅的开关应注意什么？</a> <span> 7天前 </span> </div>
							<li>
							<div class="question_tit"> <a class="question" href="/q31345.html" target="_blank" title="">面对面装饰公司师傅装修水平怎么样了</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31344.html" target="_blank" title="">原来精装修的房子局部改造，要求不破坏原来的木地板，...</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31343.html" target="_blank" title="">南昌面对面装饰公司今年在南昌怎么样了</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31341.html" target="_blank" title="">选择卫生间的开关应注意什么？</a> <span> 7天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31343.html" target="_blank" title="">南昌面对面装饰公司今年在南昌怎么样了</a> <span> 4天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31341.html" target="_blank" title="">选择卫生间的开关应注意什么？</a> <span> 7天前 </span> </div>
						</li>
						<li>
							<div class="question_tit"> <a class="question" href="/q31343.html" target="_blank" title="">南昌面对面装饰公司今年在南昌怎么样了</a> <span> 4天前 </span> </div>
						</li>
					</ul>
				</div>
				<div class="common">
					<div class="gonggaos">
						<h2 class="title">公告区</h2>
						<ul class="gonggaoul">
							<li> <a href="/gonggao/63849.html" target="_blank">X团装修问吧规则</a> </li>
							<li> <a href="/gonggao/64515.html" target="_blank">青岛十佳装修公司排名</a> </li>
							<li> <a href="/gonggao/64511.html" target="_blank">济南十佳装修公司排名</a> </li>
						</ul>
					</div>
					<div class="ranks">
						<div class="asktitle clearfix">
							<h2 class="title">热心装修公司排行榜</h2>
							<!--<a href="#" target="_blank" class="more">更多>></a>--> 
						</div>
						<ul class="weekul">
							<li class="rank1">
								<div class="avatar"> <a target="_blank" href="http://zs.xtuan.com/51842/"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num1"></div>
									<div class="name"> <a target="_blank" href="http://zs.xtuan.com/51842/">进丰灯饰</a></div>
									<div class="company">回答数:27<br>
										<a onclick="askHelp(this)" alt="276935" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a target="_blank" href="http://dg.xtuan.com/51385/"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num2"></div>
									<div class="name"> <a target="_blank" href="http://dg.xtuan.com/51385/">东莞米伦</a></div>
									<div class="company">回答数:15<br>
										<a onclick="askHelp(this)" alt="274436" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a target="_blank" href="http://xm.xtuan.com/44085/"> <img width="50" height="50" alt="" src="http://pic1.xtuan.com/upload/decoration/default/38_100x100.jpg"> </a> </div>
								<div class="info">
									<div class="num num3"></div>
									<div class="name"> <a target="_blank" href="http://xm.xtuan.com/44085/">达芙妮</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="177137" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a target="_blank" href="http://fs.xtuan.com/43775/"> <img width="50" height="50" alt="" src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg"> </a> </div>
								<div class="info">
									<div class="num num4"></div>
									<div class="name"> <a target="_blank" href="http://fs.xtuan.com/43775/">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear mt_20"></div>
					<div class="ranks">
						<div class="asktitle clearfix">
							<h2 class="title">热心建材商排行榜</h2>
						</div>
						<ul class="weekul">
							<li class="rank1">
								<div class="avatar"> <a href="http://zs.xtuan.com/51842/" target="_blank"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num1"></div>
									<div class="name"> <a href="http://zs.xtuan.com/51842/" target="_blank">进丰灯饰</a></div>
									<div class="company">回答数:27<br>
										<a onclick="askHelp(this)" alt="276935" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://dg.xtuan.com/51385/" target="_blank"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num2"></div>
									<div class="name"> <a href="http://dg.xtuan.com/51385/" target="_blank">东莞米伦</a></div>
									<div class="company">回答数:15<br>
										<a onclick="askHelp(this)" alt="274436" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://xm.xtuan.com/44085/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/default/38_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num3"></div>
									<div class="name"> <a href="http://xm.xtuan.com/44085/" target="_blank">达芙妮</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="177137" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num4"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="index_ad"> <a href="http://bbs.xtuan.com/thread-1493-1-1.html" title="当装修遇到跨年" target="_blank"> <img src="http://pic1.xtuan.com/upload/ad/20140211/16554324796.jpg" alt="当装修遇到跨年" width="1200"> </a> </div>
			<div class="twocols">
				<div class="questions">
					<div class="asktitle clearfix">
						<h2 class="title">热门问题</h2>
						<a href="/all/" target="_blank" class="more">更多</a></div>
					<ul class="hquestion">
						<li> <span class="author"> <a href="/q8982.html" target="_blank" title="客厅电视背景墙怎么什么好">客厅电视背景墙怎么什么好</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q8454.html" target="_blank" title="厦门装修一套80平方的房子需要多少钱？">厦门装修一套80平方的房子需要多少钱？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q9104.html" target="_blank" title="客厅墙面用什么颜色的漆好">客厅墙面用什么颜色的漆好</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q9417.html" target="_blank" title="2014年3月装修黄道吉日是那几天呀！">2014年3月装修黄道吉日是那几天呀！</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q9942.html" target="_blank" title="装修中对五金安装的时间有什么要求？">装修中对五金安装的时间有什么要求？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q8403.html" target="_blank" title="餐厅装修要注意哪些风水">餐厅装修要注意哪些风水</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q8546.html" target="_blank" title="中式风格，客厅不吊棚，实木线条圈边，在不同材料怎么时收边">中式风格，客厅不吊棚，实木线条圈边，在不同材料怎么时收边</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q9652.html" target="_blank" title="卫生间地面设计应注意什么?">卫生间地面设计应注意什么?</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q4210.html" target="_blank" title="沈阳装修公司哪家好？">沈阳装修公司哪家好？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q7359.html" target="_blank" title="卫生间和厨房的瓷砖一般是多大规格，价格是多少?">卫生间和厨房的瓷砖一般是多大规格，价格是多少?</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q6729.html" target="_blank" title="卧室财位在哪里？">卧室财位在哪里？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q9566.html" target="_blank" title="背阴客厅如何增亮？">背阴客厅如何增亮？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q11811.html" target="_blank" title="客厅墙面批腻子打磨怎么计算收费的？">客厅墙面批腻子打磨怎么计算收费的？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q9448.html" target="_blank" title="木地板好还是瓷砖好">木地板好还是瓷砖好</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q8019.html" target="_blank" title="北京最大的建材批发市场在哪儿？">北京最大的建材批发市场在哪儿？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q2180.html" target="_blank" title="地漏水封是什么">地漏水封是什么</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q9607.html" target="_blank" title="阳台的设计要点是什么？">阳台的设计要点是什么？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q6878.html" target="_blank" title="济南十佳装修公司排名？">济南十佳装修公司排名？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q6981.html" target="_blank" title="青岛比较好的装修公司有哪些？">青岛比较好的装修公司有哪些？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q2180.html" target="_blank" title="地漏水封是什么">地漏水封是什么</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q9607.html" target="_blank" title="阳台的设计要点是什么？">阳台的设计要点是什么？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q6878.html" target="_blank" title="济南十佳装修公司排名？">济南十佳装修公司排名？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li> <span class="author"> <a href="/q6981.html" target="_blank" title="青岛比较好的装修公司有哪些？">青岛比较好的装修公司有哪些？</a> </span> <span class="time"> 一个月前 </span> </li>
						<li > <span class="author"> <a href="/q2180.html" target="_blank" title="地漏水封是什么">地漏水封是什么</a> </span> <span class="time"> 一个月前 </span> </li>
					</ul>
				</div>
				<div class="common">
					<div class="ranks">
						<div class="asktitle clearfix">
							<h2 class="title">热心设计师排行榜</h2>
							<!--<a href="#" target="_blank" class="more">更多>></a>--> 
						</div>
						<ul class="weekul">
							<li class="rank1">
								<div class="avatar"> <a href="http://zs.xtuan.com/51842/" target="_blank"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num1"></div>
									<div class="name"> <a href="http://zs.xtuan.com/51842/" target="_blank">进丰灯饰</a></div>
									<div class="company">回答数:27<br>
										<a onclick="askHelp(this)" alt="276935" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://dg.xtuan.com/51385/" target="_blank"> <img width="50" height="50" alt="" src="/public/touxiang.png"> </a> </div>
								<div class="info">
									<div class="num num2"></div>
									<div class="name"> <a href="http://dg.xtuan.com/51385/" target="_blank">东莞米伦</a></div>
									<div class="company">回答数:15<br>
										<a onclick="askHelp(this)" alt="274436" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://xm.xtuan.com/44085/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/default/38_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num3"></div>
									<div class="name"> <a href="http://xm.xtuan.com/44085/" target="_blank">达芙妮</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="177137" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num4"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num5"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num6"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num7"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num8"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
							<li>
								<div class="avatar"> <a href="http://fs.xtuan.com/43775/" target="_blank"> <img src="http://pic1.xtuan.com/upload/decoration/promotionpic/20131214/20475599375_100x100.jpg" alt="" width="50" height="50"> </a> </div>
								<div class="info">
									<div class="num num9"></div>
									<div class="name"> <a href="http://fs.xtuan.com/43775/" target="_blank">爱梦晖</a></div>
									<div class="company">回答数:9<br>
										<a onclick="askHelp(this)" alt="176414" type="2" href="javascript:;">向他提问&gt;&gt;</a></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<br><br>
	</div>
</div>

<?php include 'footer.html'; ?>
<!--页面的单独调用的JS-->
<script src="js/ask.js"></script>
</body>
</html>
