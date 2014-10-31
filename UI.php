<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>首页</title>
</head>

<body>
<?php include 'top.html'; ?>
<?php include 'head.html'; ?>
<?php include 'nav_close.html'; ?>
<div class="mt_30 mb_30">
	<button class="button disabled">不可用</button>
	<div class="pad20 f_l">
		诚信保障图标50*50
		<table>
			<tr>
				<td><i class="ico ico_cxoff50"></i></td>
				<td>诚信保障</td>
				<td><i class="ico ico_cxon50"></i></td>
			</tr>
		</table>
		诚信保障图标20*20
		<table>
			<tr>
				<td><i class="ico ico_cxoff50"></i></td>
				<td>诚信保障</td>
				<td><i class="ico ico_cxon50"></i></td>
			</tr>
		</table>
	</div>
	<div class="pad20 f_l">
		<div class="example">
			<form id="testForm" action="#" method="post">
				<p class="defaultP"> 复选框不可选，但是选中了: <br />
					<input type="checkbox" name="soccer_like" disabled=disabled checked=checked value="1" id="soccer_like">
					<label for="soccer_like">我喜欢范冰冰</label>
				</p>
				<p class="defaultP"> 复选框不可选，没选中: <br />
					<input type="checkbox" name="soccer_like" disabled=disabled value="1" id="soccer_nolike">
					<label for="soccer_like">我不喜欢凤姐姐</label>
				</p>
				<p class="defaultP"> 组合的复选框: <br />
					<input type="checkbox" name="item[]"  id="banana" value="香蕉" />
					<label for="banana">香蕉</label>
					<br />
					<input type="checkbox" name="item[]" id="apple" value="苹果" />
					<label for="apple">苹果</label>
					<br />
					<input type="checkbox" name="item[]" id="coke" value="可可" />
					<label for="coke">可可</label>
					<br />
					<input type="checkbox" name="item[]" id="pineapple" value="苹果派" />
					<label for="pineapple">苹果派</label>
					<br />
				</p>
				<p class="defaultP"> 单选框: <br />
					<input type="radio" name="month" value="6" id="month6" />
					<label for="month6">6个月</label>
					<br />
					<input type="radio" name="month" value="3" id="month3" />
					<label for="month3">3个月</label>
					<br />
					<input type="radio" name="month" disabled value="12" id="month12" />
					<label for="month12">12个月</label>
					<br />
				</p>
				<p class="customP"> 复选框: <br />
					<input type="checkbox" name="jquery_like" id="jquery_like" value="1" />
					<label for="jquery_like">我喜欢看JQUERY</label>
				</p>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="pad20 ">
			<a href="" class="button">按钮</a>
			<button>按钮</button>
			<br>
			<br>
			<a href="" class="button red">按钮</a>
			<button class="red">按钮</button>
			<br>
			<br>
			<div class="page"> <span>1/189页</span><a href="">&lt;&lt;&nbsp;上一页</a> <a href="">1</a> <a class="selected" href="">2</a> <a href="">3</a> <a href="">4</a> <a href="">5</a> <a href="">下一页&nbsp;&gt;&gt;</a> <a href="">最后一页</a>
				<input type="text" size="1" class="txt_input" original-title="">
				<button>跳转</button>
			</div>
			<br>
			<input type="text" value="test">
			<br>
			<br>
			<strong>下拉选择框</strong><br>
			<div id="container">
				<h1>Chosen</h1>
				<p>Chosen is a JavaScript plugin for Prototype and jQuery that makes long, unwieldy select boxes much more user-friendly. For more information (including usage, explanation and faqs), check out the <a href="http://harvesthq.github.com/chosen/">online documentation</a>.</p>
				
				<h2>Standard Select</h2>
				<div class="side-by-side clearfix">
				  <div>
					<em>Turns This</em>
					<select namtitos="http://www.epweike.net/release.html" onChange="changeCon(this)" data-placeholder="Choose a Country..." style="width:350px;" tabindex="1">
					  <option value=""></option> 
					  <option value="United States">United States</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="Afghanistan">Afghanistan</option> 
					  <option value="Albania">Albania</option> 
					  <option value="Algeria">Algeria</option> 
					  <option value="American Samoa">American Samoa</option> 
					  <option value="Andorra">Andorra</option> 
					  <option value="Angola">Angola</option> 
					  <option value="Anguilla">Anguilla</option> 
					  <option value="Antarctica">Antarctica</option> 
					  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					  <option value="Argentina">Argentina</option> 
					  <option value="Armenia">Armenia</option> 
					  <option value="Aruba">Aruba</option> 
					  <option value="Australia">Australia</option> 
					  <option value="Austria">Austria</option> 
					  <option value="Azerbaijan">Azerbaijan</option> 
					  <option value="Bahamas">Bahamas</option> 
					  <option value="Bahrain">Bahrain</option> 
					  <option value="Bangladesh">Bangladesh</option> 
					  <option value="Barbados">Barbados</option> 
					  <option value="Belarus">Belarus</option> 
					  <option value="Belgium">Belgium</option> 
					  <option value="Belize">Belize</option> 
					  <option value="Benin">Benin</option> 
					  <option value="Bermuda">Bermuda</option> 
					  <option value="Bhutan">Bhutan</option> 
					  <option value="Bolivia">Bolivia</option> 
					  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					  <option value="Botswana">Botswana</option> 
					  <option value="Bouvet Island">Bouvet Island</option> 
					  <option value="Brazil">Brazil</option> 
					  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
					  <option value="Brunei Darussalam">Brunei Darussalam</option> 
					  <option value="Bulgaria">Bulgaria</option> 
					  <option value="Burkina Faso">Burkina Faso</option> 
					  <option value="Burundi">Burundi</option> 
					  <option value="Cambodia">Cambodia</option> 
					  <option value="Cameroon">Cameroon</option> 
					  <option value="Canada">Canada</option> 
					  <option value="Cape Verde">Cape Verde</option> 
					  <option value="Cayman Islands">Cayman Islands</option> 
					  <option value="Central African Republic">Central African Republic</option> 
					  <option value="Chad">Chad</option> 
					  <option value="Chile">Chile</option> 
					  <option value="China">China</option> 
					  <option value="Christmas Island">Christmas Island</option> 
					  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					  <option value="Colombia">Colombia</option> 
					  <option value="Comoros">Comoros</option> 
					  <option value="Congo">Congo</option> 
					  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
					  <option value="Cook Islands">Cook Islands</option> 
					  <option value="Costa Rica">Costa Rica</option> 
					  <option value="Cote D'ivoire">Cote D'ivoire</option> 
					  <option value="Croatia">Croatia</option> 
					  <option value="Cuba">Cuba</option> 
					  <option value="Cyprus">Cyprus</option> 
					  <option value="Czech Republic">Czech Republic</option> 
					  <option value="Denmark">Denmark</option> 
					  <option value="Djibouti">Djibouti</option> 
					  <option value="Dominica">Dominica</option> 
					  <option value="Dominican Republic">Dominican Republic</option> 
					  <option value="Ecuador">Ecuador</option> 
					  <option value="Egypt">Egypt</option> 
					  <option value="El Salvador">El Salvador</option> 
					  <option value="Equatorial Guinea">Equatorial Guinea</option> 
					  <option value="Eritrea">Eritrea</option> 
					  <option value="Estonia">Estonia</option> 
					  <option value="Ethiopia">Ethiopia</option> 
					  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
					  <option value="Faroe Islands">Faroe Islands</option> 
					  <option value="Fiji">Fiji</option> 
					  <option value="Finland">Finland</option> 
					  <option value="France">France</option> 
					  <option value="French Guiana">French Guiana</option> 
					  <option value="French Polynesia">French Polynesia</option> 
					  <option value="French Southern Territories">French Southern Territories</option> 
					  <option value="Gabon">Gabon</option> 
					  <option value="Gambia">Gambia</option> 
					  <option value="Georgia">Georgia</option> 
					  <option value="Germany">Germany</option> 
					  <option value="Ghana">Ghana</option> 
					  <option value="Gibraltar">Gibraltar</option> 
					  <option value="Greece">Greece</option> 
					  <option value="Greenland">Greenland</option> 
					  <option value="Grenada">Grenada</option> 
					  <option value="Guadeloupe">Guadeloupe</option> 
					  <option value="Guam">Guam</option> 
					  <option value="Guatemala">Guatemala</option> 
					  <option value="Guinea">Guinea</option> 
					  <option value="Guinea-bissau">Guinea-bissau</option> 
					  <option value="Guyana">Guyana</option> 
					  <option value="Haiti">Haiti</option> 
					  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
					  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
					  <option value="Honduras">Honduras</option> 
					  <option value="Hong Kong">Hong Kong</option> 
					  <option value="Hungary">Hungary</option> 
					  <option value="Iceland">Iceland</option> 
					  <option value="India">India</option> 
					  <option value="Indonesia">Indonesia</option> 
					  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					  <option value="Iraq">Iraq</option> 
					  <option value="Ireland">Ireland</option> 
					  <option value="Israel">Israel</option> 
					  <option value="Italy">Italy</option> 
					  <option value="Jamaica">Jamaica</option> 
					  <option value="Japan">Japan</option> 
					  <option value="Jordan">Jordan</option> 
					  <option value="Kazakhstan">Kazakhstan</option> 
					  <option value="Kenya">Kenya</option> 
					  <option value="Kiribati">Kiribati</option> 
					  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
					  <option value="Korea, Republic of">Korea, Republic of</option> 
					  <option value="Kuwait">Kuwait</option> 
					  <option value="Kyrgyzstan">Kyrgyzstan</option> 
					  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					  <option value="Latvia">Latvia</option> 
					  <option value="Lebanon">Lebanon</option> 
					  <option value="Lesotho">Lesotho</option> 
					  <option value="Liberia">Liberia</option> 
					  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					  <option value="Liechtenstein">Liechtenstein</option> 
					  <option value="Lithuania">Lithuania</option> 
					  <option value="Luxembourg">Luxembourg</option> 
					  <option value="Macao">Macao</option> 
					  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
					  <option value="Madagascar">Madagascar</option> 
					  <option value="Malawi">Malawi</option> 
					  <option value="Malaysia">Malaysia</option> 
					  <option value="Maldives">Maldives</option> 
					  <option value="Mali">Mali</option> 
					  <option value="Malta">Malta</option> 
					  <option value="Marshall Islands">Marshall Islands</option> 
					  <option value="Martinique">Martinique</option> 
					  <option value="Mauritania">Mauritania</option> 
					  <option value="Mauritius">Mauritius</option> 
					  <option value="Mayotte">Mayotte</option> 
					  <option value="Mexico">Mexico</option> 
					  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
					  <option value="Moldova, Republic of">Moldova, Republic of</option> 
					  <option value="Monaco">Monaco</option> 
					  <option value="Mongolia">Mongolia</option> 
					  <option value="Montenegro">Montenegro</option>
					  <option value="Montserrat">Montserrat</option> 
					  <option value="Morocco">Morocco</option> 
					  <option value="Mozambique">Mozambique</option> 
					  <option value="Myanmar">Myanmar</option> 
					  <option value="Namibia">Namibia</option> 
					  <option value="Nauru">Nauru</option> 
					  <option value="Nepal">Nepal</option> 
					  <option value="Netherlands">Netherlands</option> 
					  <option value="Netherlands Antilles">Netherlands Antilles</option> 
					  <option value="New Caledonia">New Caledonia</option> 
					  <option value="New Zealand">New Zealand</option> 
					  <option value="Nicaragua">Nicaragua</option> 
					  <option value="Niger">Niger</option> 
					  <option value="Nigeria">Nigeria</option> 
					  <option value="Niue">Niue</option> 
					  <option value="Norfolk Island">Norfolk Island</option> 
					  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					  <option value="Norway">Norway</option> 
					  <option value="Oman">Oman</option> 
					  <option value="Pakistan">Pakistan</option> 
					  <option value="Palau">Palau</option> 
					  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
					  <option value="Panama">Panama</option> 
					  <option value="Papua New Guinea">Papua New Guinea</option> 
					  <option value="Paraguay">Paraguay</option> 
					  <option value="Peru">Peru</option> 
					  <option value="Philippines">Philippines</option> 
					  <option value="Pitcairn">Pitcairn</option> 
					  <option value="Poland">Poland</option> 
					  <option value="Portugal">Portugal</option> 
					  <option value="Puerto Rico">Puerto Rico</option> 
					  <option value="Qatar">Qatar</option> 
					  <option value="Reunion">Reunion</option> 
					  <option value="Romania">Romania</option> 
					  <option value="Russian Federation">Russian Federation</option> 
					  <option value="Rwanda">Rwanda</option> 
					  <option value="Saint Helena">Saint Helena</option> 
					  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					  <option value="Saint Lucia">Saint Lucia</option> 
					  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
					  <option value="Samoa">Samoa</option> 
					  <option value="San Marino">San Marino</option> 
					  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					  <option value="Saudi Arabia">Saudi Arabia</option> 
					  <option value="Senegal">Senegal</option> 
					  <option value="Serbia">Serbia</option> 
					  <option value="Seychelles">Seychelles</option> 
					  <option value="Sierra Leone">Sierra Leone</option> 
					  <option value="Singapore">Singapore</option> 
					  <option value="Slovakia">Slovakia</option> 
					  <option value="Slovenia">Slovenia</option> 
					  <option value="Solomon Islands">Solomon Islands</option> 
					  <option value="Somalia">Somalia</option> 
					  <option value="South Africa">South Africa</option> 
					  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
					  <option value="South Sudan">South Sudan</option> 
					  <option value="Spain">Spain</option> 
					  <option value="Sri Lanka">Sri Lanka</option> 
					  <option value="Sudan">Sudan</option> 
					  <option value="Suriname">Suriname</option> 
					  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					  <option value="Swaziland">Swaziland</option> 
					  <option value="Sweden">Sweden</option> 
					  <option value="Switzerland">Switzerland</option> 
					  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
					  <option value="Tajikistan">Tajikistan</option> 
					  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					  <option value="Thailand">Thailand</option> 
					  <option value="Timor-leste">Timor-leste</option> 
					  <option value="Togo">Togo</option> 
					  <option value="Tokelau">Tokelau</option> 
					  <option value="Tonga">Tonga</option> 
					  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					  <option value="Tunisia">Tunisia</option> 
					  <option value="Turkey">Turkey</option> 
					  <option value="Turkmenistan">Turkmenistan</option> 
					  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					  <option value="Tuvalu">Tuvalu</option> 
					  <option value="Uganda">Uganda</option> 
					  <option value="Ukraine">Ukraine</option> 
					  <option value="United Arab Emirates">United Arab Emirates</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="United States">United States</option> 
					  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
					  <option value="Uruguay">Uruguay</option> 
					  <option value="Uzbekistan">Uzbekistan</option> 
					  <option value="Vanuatu">Vanuatu</option> 
					  <option value="Venezuela">Venezuela</option> 
					  <option value="Viet Nam">Viet Nam</option> 
					  <option value="Virgin Islands, British">Virgin Islands, British</option> 
					  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					  <option value="Wallis and Futuna">Wallis and Futuna</option> 
					  <option value="Western Sahara">Western Sahara</option> 
					  <option value="Yemen">Yemen</option> 
					  <option value="Zambia">Zambia</option> 
					  <option value="Zimbabwe">Zimbabwe</option>
					</select>
				  </div>
				  <div>
					<em>Into This</em>        
					<select namtitos="http://www.epweike.net/release.html" onChange="changeCon(this)" data-placeholder="Choose a Country..." class="chzn-select" style="width:350px;" tabindex="2">
					  <option value=""></option> 
					  <option value="United States">United States</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="Afghanistan">Afghanistan</option> 
					  <option value="Albania">Albania</option> 
					  <option value="Algeria">Algeria</option> 
					  <option value="American Samoa">American Samoa</option> 
					  <option value="Andorra">Andorra</option> 
					  <option value="Angola">Angola</option> 
					  <option value="Anguilla">Anguilla</option> 
					  <option value="Antarctica">Antarctica</option> 
					  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					  <option value="Argentina">Argentina</option> 
					  <option value="Armenia">Armenia</option> 
					  <option value="Aruba">Aruba</option> 
					  <option value="Australia">Australia</option> 
					  <option value="Austria">Austria</option> 
					  <option value="Azerbaijan">Azerbaijan</option> 
					  <option value="Bahamas">Bahamas</option> 
					  <option value="Bahrain">Bahrain</option> 
					  <option value="Bangladesh">Bangladesh</option> 
					  <option value="Barbados">Barbados</option> 
					  <option value="Belarus">Belarus</option> 
					  <option value="Belgium">Belgium</option> 
					  <option value="Belize">Belize</option> 
					  <option value="Benin">Benin</option> 
					  <option value="Bermuda">Bermuda</option> 
					  <option value="Bhutan">Bhutan</option> 
					  <option value="Bolivia">Bolivia</option> 
					  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					  <option value="Botswana">Botswana</option> 
					  <option value="Bouvet Island">Bouvet Island</option> 
					  <option value="Brazil">Brazil</option> 
					  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
					  <option value="Brunei Darussalam">Brunei Darussalam</option> 
					  <option value="Bulgaria">Bulgaria</option> 
					  <option value="Burkina Faso">Burkina Faso</option> 
					  <option value="Burundi">Burundi</option> 
					  <option value="Cambodia">Cambodia</option> 
					  <option value="Cameroon">Cameroon</option> 
					  <option value="Canada">Canada</option> 
					  <option value="Cape Verde">Cape Verde</option> 
					  <option value="Cayman Islands">Cayman Islands</option> 
					  <option value="Central African Republic">Central African Republic</option> 
					  <option value="Chad">Chad</option> 
					  <option value="Chile">Chile</option> 
					  <option value="China">China</option> 
					  <option value="Christmas Island">Christmas Island</option> 
					  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					  <option value="Colombia">Colombia</option> 
					  <option value="Comoros">Comoros</option> 
					  <option value="Congo">Congo</option> 
					  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
					  <option value="Cook Islands">Cook Islands</option> 
					  <option value="Costa Rica">Costa Rica</option> 
					  <option value="Cote D'ivoire">Cote D'ivoire</option> 
					  <option value="Croatia">Croatia</option> 
					  <option value="Cuba">Cuba</option> 
					  <option value="Cyprus">Cyprus</option> 
					  <option value="Czech Republic">Czech Republic</option> 
					  <option value="Denmark">Denmark</option> 
					  <option value="Djibouti">Djibouti</option> 
					  <option value="Dominica">Dominica</option> 
					  <option value="Dominican Republic">Dominican Republic</option> 
					  <option value="Ecuador">Ecuador</option> 
					  <option value="Egypt">Egypt</option> 
					  <option value="El Salvador">El Salvador</option> 
					  <option value="Equatorial Guinea">Equatorial Guinea</option> 
					  <option value="Eritrea">Eritrea</option> 
					  <option value="Estonia">Estonia</option> 
					  <option value="Ethiopia">Ethiopia</option> 
					  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
					  <option value="Faroe Islands">Faroe Islands</option> 
					  <option value="Fiji">Fiji</option> 
					  <option value="Finland">Finland</option> 
					  <option value="France">France</option> 
					  <option value="French Guiana">French Guiana</option> 
					  <option value="French Polynesia">French Polynesia</option> 
					  <option value="French Southern Territories">French Southern Territories</option> 
					  <option value="Gabon">Gabon</option> 
					  <option value="Gambia">Gambia</option> 
					  <option value="Georgia">Georgia</option> 
			
					  <option value="Germany">Germany</option> 
					  <option value="Ghana">Ghana</option> 
					  <option value="Gibraltar">Gibraltar</option> 
					  <option value="Greece">Greece</option> 
					  <option value="Greenland">Greenland</option> 
					  <option value="Grenada">Grenada</option> 
					  <option value="Guadeloupe">Guadeloupe</option> 
					  <option value="Guam">Guam</option> 
					  <option value="Guatemala">Guatemala</option> 
					  <option value="Guinea">Guinea</option> 
					  <option value="Guinea-bissau">Guinea-bissau</option> 
					  <option value="Guyana">Guyana</option> 
					  <option value="Haiti">Haiti</option> 
					  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
					  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
					  <option value="Honduras">Honduras</option> 
					  <option value="Hong Kong">Hong Kong</option> 
					  <option value="Hungary">Hungary</option> 
					  <option value="Iceland">Iceland</option> 
					  <option value="India">India</option> 
					  <option value="Indonesia">Indonesia</option> 
					  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					  <option value="Iraq">Iraq</option> 
					  <option value="Ireland">Ireland</option> 
					  <option value="Israel">Israel</option> 
					  <option value="Italy">Italy</option> 
					  <option value="Jamaica">Jamaica</option> 
					  <option value="Japan">Japan</option> 
					  <option value="Jordan">Jordan</option> 
					  <option value="Kazakhstan">Kazakhstan</option> 
					  <option value="Kenya">Kenya</option> 
					  <option value="Kiribati">Kiribati</option> 
					  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
					  <option value="Korea, Republic of">Korea, Republic of</option> 
					  <option value="Kuwait">Kuwait</option> 
					  <option value="Kyrgyzstan">Kyrgyzstan</option> 
					  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					  <option value="Latvia">Latvia</option> 
					  <option value="Lebanon">Lebanon</option> 
					  <option value="Lesotho">Lesotho</option> 
					  <option value="Liberia">Liberia</option> 
					  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					  <option value="Liechtenstein">Liechtenstein</option> 
					  <option value="Lithuania">Lithuania</option> 
					  <option value="Luxembourg">Luxembourg</option> 
					  <option value="Macao">Macao</option> 
					  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
					  <option value="Madagascar">Madagascar</option> 
					  <option value="Malawi">Malawi</option> 
					  <option value="Malaysia">Malaysia</option> 
					  <option value="Maldives">Maldives</option> 
					  <option value="Mali">Mali</option> 
					  <option value="Malta">Malta</option> 
					  <option value="Marshall Islands">Marshall Islands</option> 
					  <option value="Martinique">Martinique</option> 
					  <option value="Mauritania">Mauritania</option> 
					  <option value="Mauritius">Mauritius</option> 
					  <option value="Mayotte">Mayotte</option> 
					  <option value="Mexico">Mexico</option> 
					  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
					  <option value="Moldova, Republic of">Moldova, Republic of</option> 
					  <option value="Monaco">Monaco</option> 
					  <option value="Mongolia">Mongolia</option> 
					  <option value="Montenegro">Montenegro</option>
					  <option value="Montserrat">Montserrat</option> 
					  <option value="Morocco">Morocco</option> 
					  <option value="Mozambique">Mozambique</option> 
					  <option value="Myanmar">Myanmar</option> 
					  <option value="Namibia">Namibia</option> 
					  <option value="Nauru">Nauru</option> 
					  <option value="Nepal">Nepal</option> 
					  <option value="Netherlands">Netherlands</option> 
					  <option value="Netherlands Antilles">Netherlands Antilles</option> 
					  <option value="New Caledonia">New Caledonia</option> 
					  <option value="New Zealand">New Zealand</option> 
					  <option value="Nicaragua">Nicaragua</option> 
					  <option value="Niger">Niger</option> 
					  <option value="Nigeria">Nigeria</option> 
					  <option value="Niue">Niue</option> 
					  <option value="Norfolk Island">Norfolk Island</option> 
					  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					  <option value="Norway">Norway</option> 
					  <option value="Oman">Oman</option> 
					  <option value="Pakistan">Pakistan</option> 
					  <option value="Palau">Palau</option> 
					  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
					  <option value="Panama">Panama</option> 
					  <option value="Papua New Guinea">Papua New Guinea</option> 
					  <option value="Paraguay">Paraguay</option> 
					  <option value="Peru">Peru</option> 
					  <option value="Philippines">Philippines</option> 
					  <option value="Pitcairn">Pitcairn</option> 
					  <option value="Poland">Poland</option> 
					  <option value="Portugal">Portugal</option> 
					  <option value="Puerto Rico">Puerto Rico</option> 
					  <option value="Qatar">Qatar</option> 
					  <option value="Reunion">Reunion</option> 
					  <option value="Romania">Romania</option> 
					  <option value="Russian Federation">Russian Federation</option> 
					  <option value="Rwanda">Rwanda</option> 
					  <option value="Saint Helena">Saint Helena</option> 
					  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					  <option value="Saint Lucia">Saint Lucia</option> 
					  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
					  <option value="Samoa">Samoa</option> 
					  <option value="San Marino">San Marino</option> 
					  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					  <option value="Saudi Arabia">Saudi Arabia</option> 
					  <option value="Senegal">Senegal</option> 
					  <option value="Serbia">Serbia</option> 
					  <option value="Seychelles">Seychelles</option> 
					  <option value="Sierra Leone">Sierra Leone</option> 
					  <option value="Singapore">Singapore</option> 
					  <option value="Slovakia">Slovakia</option> 
					  <option value="Slovenia">Slovenia</option> 
					  <option value="Solomon Islands">Solomon Islands</option> 
					  <option value="Somalia">Somalia</option> 
					  <option value="South Africa">South Africa</option> 
					  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
					  <option value="South Sudan">South Sudan</option> 
					  <option value="Spain">Spain</option> 
					  <option value="Sri Lanka">Sri Lanka</option> 
					  <option value="Sudan">Sudan</option> 
					  <option value="Suriname">Suriname</option> 
					  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					  <option value="Swaziland">Swaziland</option> 
					  <option value="Sweden">Sweden</option> 
					  <option value="Switzerland">Switzerland</option> 
					  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
					  <option value="Tajikistan">Tajikistan</option> 
					  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					  <option value="Thailand">Thailand</option> 
					  <option value="Timor-leste">Timor-leste</option> 
					  <option value="Togo">Togo</option> 
					  <option value="Tokelau">Tokelau</option> 
					  <option value="Tonga">Tonga</option> 
					  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					  <option value="Tunisia">Tunisia</option> 
					  <option value="Turkey">Turkey</option> 
					  <option value="Turkmenistan">Turkmenistan</option> 
					  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					  <option value="Tuvalu">Tuvalu</option> 
					  <option value="Uganda">Uganda</option> 
					  <option value="Ukraine">Ukraine</option> 
					  <option value="United Arab Emirates">United Arab Emirates</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="United States">United States</option> 
					  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
					  <option value="Uruguay">Uruguay</option> 
					  <option value="Uzbekistan">Uzbekistan</option> 
					  <option value="Vanuatu">Vanuatu</option> 
					  <option value="Venezuela">Venezuela</option> 
					  <option value="Viet Nam">Viet Nam</option> 
					  <option value="Virgin Islands, British">Virgin Islands, British</option> 
					  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					  <option value="Wallis and Futuna">Wallis and Futuna</option> 
					  <option value="Western Sahara">Western Sahara</option> 
					  <option value="Yemen">Yemen</option> 
					  <option value="Zambia">Zambia</option> 
					  <option value="Zimbabwe">Zimbabwe</option>
					</select>
				  </div>
				</div>
				
				<h2>Multiple Select</h2>
				<div class="side-by-side clearfix">
				  <div>
					<em>Turns This</em>
					<select data-placeholder="Choose a Country..." style="width:350px;" multiple tabindex="3">
					  <option value="United States">United States</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="Afghanistan">Afghanistan</option> 
					  <option value="Albania">Albania</option> 
					  <option value="Algeria">Algeria</option> 
					  <option value="American Samoa">American Samoa</option> 
					  <option value="Andorra">Andorra</option> 
					  <option value="Angola">Angola</option> 
					  <option value="Anguilla">Anguilla</option> 
					  <option value="Antarctica">Antarctica</option> 
					  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					  <option value="Argentina">Argentina</option> 
					  <option value="Armenia">Armenia</option> 
					  <option value="Aruba">Aruba</option> 
					  <option value="Australia">Australia</option> 
					  <option value="Austria">Austria</option> 
					  <option value="Azerbaijan">Azerbaijan</option> 
					  <option value="Bahamas">Bahamas</option> 
					  <option value="Bahrain">Bahrain</option> 
					  <option value="Bangladesh">Bangladesh</option> 
					  <option value="Barbados">Barbados</option> 
					  <option value="Belarus">Belarus</option> 
					  <option value="Belgium">Belgium</option> 
					  <option value="Belize">Belize</option> 
					  <option value="Benin">Benin</option> 
					  <option value="Bermuda">Bermuda</option> 
					  <option value="Bhutan">Bhutan</option> 
					  <option value="Bolivia">Bolivia</option> 
					  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					  <option value="Botswana">Botswana</option> 
					  <option value="Bouvet Island">Bouvet Island</option> 
					  <option value="Brazil">Brazil</option> 
					  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
					  <option value="Brunei Darussalam">Brunei Darussalam</option> 
					  <option value="Bulgaria">Bulgaria</option> 
					  <option value="Burkina Faso">Burkina Faso</option> 
					  <option value="Burundi">Burundi</option> 
					  <option value="Cambodia">Cambodia</option> 
					  <option value="Cameroon">Cameroon</option> 
					  <option value="Canada">Canada</option> 
					  <option value="Cape Verde">Cape Verde</option> 
					  <option value="Cayman Islands">Cayman Islands</option> 
					  <option value="Central African Republic">Central African Republic</option> 
					  <option value="Chad">Chad</option> 
					  <option value="Chile">Chile</option> 
					  <option value="China">China</option> 
					  <option value="Christmas Island">Christmas Island</option> 
					  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					  <option value="Colombia">Colombia</option> 
					  <option value="Comoros">Comoros</option> 
					  <option value="Congo">Congo</option> 
					  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
					  <option value="Cook Islands">Cook Islands</option> 
					  <option value="Costa Rica">Costa Rica</option> 
					  <option value="Cote D'ivoire">Cote D'ivoire</option> 
					  <option value="Croatia">Croatia</option> 
					  <option value="Cuba">Cuba</option> 
					  <option value="Cyprus">Cyprus</option> 
					  <option value="Czech Republic">Czech Republic</option> 
					  <option value="Denmark">Denmark</option> 
					  <option value="Djibouti">Djibouti</option> 
					  <option value="Dominica">Dominica</option> 
					  <option value="Dominican Republic">Dominican Republic</option> 
					  <option value="Ecuador">Ecuador</option> 
					  <option value="Egypt">Egypt</option> 
					  <option value="El Salvador">El Salvador</option> 
					  <option value="Equatorial Guinea">Equatorial Guinea</option> 
					  <option value="Eritrea">Eritrea</option> 
					  <option value="Estonia">Estonia</option> 
					  <option value="Ethiopia">Ethiopia</option> 
					  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
					  <option value="Faroe Islands">Faroe Islands</option> 
					  <option value="Fiji">Fiji</option> 
					  <option value="Finland">Finland</option> 
					  <option value="France">France</option> 
					  <option value="French Guiana">French Guiana</option> 
					  <option value="French Polynesia">French Polynesia</option> 
					  <option value="French Southern Territories">French Southern Territories</option> 
					  <option value="Gabon">Gabon</option> 
					  <option value="Gambia">Gambia</option> 
					  <option value="Georgia">Georgia</option> 
					  <option value="Germany">Germany</option> 
					  <option value="Ghana">Ghana</option> 
					  <option value="Gibraltar">Gibraltar</option> 
					  <option value="Greece">Greece</option> 
					  <option value="Greenland">Greenland</option> 
					  <option value="Grenada">Grenada</option> 
					  <option value="Guadeloupe">Guadeloupe</option> 
					  <option value="Guam">Guam</option> 
					  <option value="Guatemala">Guatemala</option> 
					  <option value="Guinea">Guinea</option> 
					  <option value="Guinea-bissau">Guinea-bissau</option> 
					  <option value="Guyana">Guyana</option> 
					  <option value="Haiti">Haiti</option> 
					  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
					  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
					  <option value="Honduras">Honduras</option> 
					  <option value="Hong Kong">Hong Kong</option> 
					  <option value="Hungary">Hungary</option> 
					  <option value="Iceland">Iceland</option> 
					  <option value="India">India</option> 
					  <option value="Indonesia">Indonesia</option> 
					  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					  <option value="Iraq">Iraq</option> 
					  <option value="Ireland">Ireland</option> 
					  <option value="Israel">Israel</option> 
					  <option value="Italy">Italy</option> 
					  <option value="Jamaica">Jamaica</option> 
					  <option value="Japan">Japan</option> 
					  <option value="Jordan">Jordan</option> 
					  <option value="Kazakhstan">Kazakhstan</option> 
					  <option value="Kenya">Kenya</option> 
					  <option value="Kiribati">Kiribati</option> 
					  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
					  <option value="Korea, Republic of">Korea, Republic of</option> 
					  <option value="Kuwait">Kuwait</option> 
					  <option value="Kyrgyzstan">Kyrgyzstan</option> 
					  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					  <option value="Latvia">Latvia</option> 
					  <option value="Lebanon">Lebanon</option> 
					  <option value="Lesotho">Lesotho</option> 
					  <option value="Liberia">Liberia</option> 
					  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					  <option value="Liechtenstein">Liechtenstein</option> 
					  <option value="Lithuania">Lithuania</option> 
					  <option value="Luxembourg">Luxembourg</option> 
					  <option value="Macao">Macao</option> 
					  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
					  <option value="Madagascar">Madagascar</option> 
					  <option value="Malawi">Malawi</option> 
					  <option value="Malaysia">Malaysia</option> 
					  <option value="Maldives">Maldives</option> 
					  <option value="Mali">Mali</option> 
					  <option value="Malta">Malta</option> 
					  <option value="Marshall Islands">Marshall Islands</option> 
					  <option value="Martinique">Martinique</option> 
					  <option value="Mauritania">Mauritania</option> 
					  <option value="Mauritius">Mauritius</option> 
					  <option value="Mayotte">Mayotte</option> 
					  <option value="Mexico">Mexico</option> 
					  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
					  <option value="Moldova, Republic of">Moldova, Republic of</option> 
					  <option value="Monaco">Monaco</option> 
					  <option value="Mongolia">Mongolia</option> 
					  <option value="Montenegro">Montenegro</option>
					  <option value="Montserrat">Montserrat</option> 
					  <option value="Morocco">Morocco</option> 
					  <option value="Mozambique">Mozambique</option> 
					  <option value="Myanmar">Myanmar</option> 
					  <option value="Namibia">Namibia</option> 
					  <option value="Nauru">Nauru</option> 
					  <option value="Nepal">Nepal</option> 
					  <option value="Netherlands">Netherlands</option> 
					  <option value="Netherlands Antilles">Netherlands Antilles</option> 
					  <option value="New Caledonia">New Caledonia</option> 
					  <option value="New Zealand">New Zealand</option> 
					  <option value="Nicaragua">Nicaragua</option> 
					  <option value="Niger">Niger</option> 
					  <option value="Nigeria">Nigeria</option> 
					  <option value="Niue">Niue</option> 
					  <option value="Norfolk Island">Norfolk Island</option> 
					  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					  <option value="Norway">Norway</option> 
					  <option value="Oman">Oman</option> 
					  <option value="Pakistan">Pakistan</option> 
					  <option value="Palau">Palau</option> 
					  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
					  <option value="Panama">Panama</option> 
					  <option value="Papua New Guinea">Papua New Guinea</option> 
					  <option value="Paraguay">Paraguay</option> 
					  <option value="Peru">Peru</option> 
					  <option value="Philippines">Philippines</option> 
					  <option value="Pitcairn">Pitcairn</option> 
					  <option value="Poland">Poland</option> 
					  <option value="Portugal">Portugal</option> 
					  <option value="Puerto Rico">Puerto Rico</option> 
					  <option value="Qatar">Qatar</option> 
					  <option value="Reunion">Reunion</option> 
					  <option value="Romania">Romania</option> 
					  <option value="Russian Federation">Russian Federation</option> 
					  <option value="Rwanda">Rwanda</option> 
					  <option value="Saint Helena">Saint Helena</option> 
					  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					  <option value="Saint Lucia">Saint Lucia</option> 
					  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
					  <option value="Samoa">Samoa</option> 
					  <option value="San Marino">San Marino</option> 
					  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					  <option value="Saudi Arabia">Saudi Arabia</option> 
					  <option value="Senegal">Senegal</option> 
					  <option value="Serbia">Serbia</option> 
					  <option value="Seychelles">Seychelles</option> 
					  <option value="Sierra Leone">Sierra Leone</option> 
					  <option value="Singapore">Singapore</option> 
					  <option value="Slovakia">Slovakia</option> 
					  <option value="Slovenia">Slovenia</option> 
					  <option value="Solomon Islands">Solomon Islands</option> 
					  <option value="Somalia">Somalia</option> 
					  <option value="South Africa">South Africa</option> 
					  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
					  <option value="South Sudan">South Sudan</option> 
					  <option value="Spain">Spain</option> 
					  <option value="Sri Lanka">Sri Lanka</option> 
					  <option value="Sudan">Sudan</option> 
					  <option value="Suriname">Suriname</option> 
					  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					  <option value="Swaziland">Swaziland</option> 
					  <option value="Sweden">Sweden</option> 
					  <option value="Switzerland">Switzerland</option> 
					  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
					  <option value="Tajikistan">Tajikistan</option> 
					  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					  <option value="Thailand">Thailand</option> 
					  <option value="Timor-leste">Timor-leste</option> 
					  <option value="Togo">Togo</option> 
					  <option value="Tokelau">Tokelau</option> 
					  <option value="Tonga">Tonga</option> 
					  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					  <option value="Tunisia">Tunisia</option> 
					  <option value="Turkey">Turkey</option> 
					  <option value="Turkmenistan">Turkmenistan</option> 
					  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					  <option value="Tuvalu">Tuvalu</option> 
					  <option value="Uganda">Uganda</option> 
					  <option value="Ukraine">Ukraine</option> 
					  <option value="United Arab Emirates">United Arab Emirates</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="United States">United States</option> 
					  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
					  <option value="Uruguay">Uruguay</option> 
					  <option value="Uzbekistan">Uzbekistan</option> 
					  <option value="Vanuatu">Vanuatu</option> 
					  <option value="Venezuela">Venezuela</option> 
					  <option value="Viet Nam">Viet Nam</option> 
					  <option value="Virgin Islands, British">Virgin Islands, British</option> 
					  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					  <option value="Wallis and Futuna">Wallis and Futuna</option> 
					  <option value="Western Sahara">Western Sahara</option> 
					  <option value="Yemen">Yemen</option> 
					  <option value="Zambia">Zambia</option> 
					  <option value="Zimbabwe">Zimbabwe</option>
					</select>
				  </div>
				  <div>
					<em>Into This</em>        
					<select data-placeholder="Choose a Country..." class="chzn-select" multiple style="width:350px;" tabindex="4">
					  <option value=""></option> 
					  <option value="United States">United States</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="Afghanistan">Afghanistan</option> 
					  <option value="Albania">Albania</option> 
					  <option value="Algeria">Algeria</option> 
					  <option value="American Samoa">American Samoa</option> 
					  <option value="Andorra">Andorra</option> 
					  <option value="Angola">Angola</option> 
					  <option value="Anguilla">Anguilla</option> 
					  <option value="Antarctica">Antarctica</option> 
					  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					  <option value="Argentina">Argentina</option> 
					  <option value="Armenia">Armenia</option> 
					  <option value="Aruba">Aruba</option> 
					  <option value="Australia">Australia</option> 
					  <option value="Austria">Austria</option> 
					  <option value="Azerbaijan">Azerbaijan</option> 
					  <option value="Bahamas">Bahamas</option> 
					  <option value="Bahrain">Bahrain</option> 
					  <option value="Bangladesh">Bangladesh</option> 
					  <option value="Barbados">Barbados</option> 
					  <option value="Belarus">Belarus</option> 
					  <option value="Belgium">Belgium</option> 
					  <option value="Belize">Belize</option> 
					  <option value="Benin">Benin</option> 
					  <option value="Bermuda">Bermuda</option> 
					  <option value="Bhutan">Bhutan</option> 
					  <option value="Bolivia">Bolivia</option> 
					  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					  <option value="Botswana">Botswana</option> 
					  <option value="Bouvet Island">Bouvet Island</option> 
					  <option value="Brazil">Brazil</option> 
					  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
					  <option value="Brunei Darussalam">Brunei Darussalam</option> 
					  <option value="Bulgaria">Bulgaria</option> 
					  <option value="Burkina Faso">Burkina Faso</option> 
					  <option value="Burundi">Burundi</option> 
					  <option value="Cambodia">Cambodia</option> 
					  <option value="Cameroon">Cameroon</option> 
					  <option value="Canada">Canada</option> 
					  <option value="Cape Verde">Cape Verde</option> 
					  <option value="Cayman Islands">Cayman Islands</option> 
					  <option value="Central African Republic">Central African Republic</option> 
					  <option value="Chad">Chad</option> 
					  <option value="Chile">Chile</option> 
					  <option value="China">China</option> 
					  <option value="Christmas Island">Christmas Island</option> 
					  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					  <option value="Colombia">Colombia</option> 
					  <option value="Comoros">Comoros</option> 
					  <option value="Congo">Congo</option> 
					  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
					  <option value="Cook Islands">Cook Islands</option> 
					  <option value="Costa Rica">Costa Rica</option> 
					  <option value="Cote D'ivoire">Cote D'ivoire</option> 
					  <option value="Croatia">Croatia</option> 
					  <option value="Cuba">Cuba</option> 
					  <option value="Cyprus">Cyprus</option> 
					  <option value="Czech Republic">Czech Republic</option> 
					  <option value="Denmark">Denmark</option> 
					  <option value="Djibouti">Djibouti</option> 
					  <option value="Dominica">Dominica</option> 
					  <option value="Dominican Republic">Dominican Republic</option> 
					  <option value="Ecuador">Ecuador</option> 
					  <option value="Egypt">Egypt</option> 
					  <option value="El Salvador">El Salvador</option> 
					  <option value="Equatorial Guinea">Equatorial Guinea</option> 
					  <option value="Eritrea">Eritrea</option> 
					  <option value="Estonia">Estonia</option> 
					  <option value="Ethiopia">Ethiopia</option> 
					  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
					  <option value="Faroe Islands">Faroe Islands</option> 
					  <option value="Fiji">Fiji</option> 
					  <option value="Finland">Finland</option> 
					  <option value="France">France</option> 
					  <option value="French Guiana">French Guiana</option> 
					  <option value="French Polynesia">French Polynesia</option> 
					  <option value="French Southern Territories">French Southern Territories</option> 
					  <option value="Gabon">Gabon</option> 
					  <option value="Gambia">Gambia</option> 
					  <option value="Georgia">Georgia</option> 
					  <option value="Germany">Germany</option> 
					  <option value="Ghana">Ghana</option> 
					  <option value="Gibraltar">Gibraltar</option> 
					  <option value="Greece">Greece</option> 
					  <option value="Greenland">Greenland</option> 
					  <option value="Grenada">Grenada</option> 
					  <option value="Guadeloupe">Guadeloupe</option> 
					  <option value="Guam">Guam</option> 
					  <option value="Guatemala">Guatemala</option> 
					  <option value="Guinea">Guinea</option> 
					  <option value="Guinea-bissau">Guinea-bissau</option> 
					  <option value="Guyana">Guyana</option> 
					  <option value="Haiti">Haiti</option> 
					  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
					  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
					  <option value="Honduras">Honduras</option> 
					  <option value="Hong Kong">Hong Kong</option> 
					  <option value="Hungary">Hungary</option> 
					  <option value="Iceland">Iceland</option> 
					  <option value="India">India</option> 
					  <option value="Indonesia">Indonesia</option> 
					  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					  <option value="Iraq">Iraq</option> 
					  <option value="Ireland">Ireland</option> 
					  <option value="Israel">Israel</option> 
					  <option value="Italy">Italy</option> 
					  <option value="Jamaica">Jamaica</option> 
					  <option value="Japan">Japan</option> 
					  <option value="Jordan">Jordan</option> 
					  <option value="Kazakhstan">Kazakhstan</option> 
					  <option value="Kenya">Kenya</option> 
					  <option value="Kiribati">Kiribati</option> 
					  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
					  <option value="Korea, Republic of">Korea, Republic of</option> 
					  <option value="Kuwait">Kuwait</option> 
					  <option value="Kyrgyzstan">Kyrgyzstan</option> 
					  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					  <option value="Latvia">Latvia</option> 
					  <option value="Lebanon">Lebanon</option> 
					  <option value="Lesotho">Lesotho</option> 
					  <option value="Liberia">Liberia</option> 
					  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					  <option value="Liechtenstein">Liechtenstein</option> 
					  <option value="Lithuania">Lithuania</option> 
					  <option value="Luxembourg">Luxembourg</option> 
					  <option value="Macao">Macao</option> 
					  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
					  <option value="Madagascar">Madagascar</option> 
					  <option value="Malawi">Malawi</option> 
					  <option value="Malaysia">Malaysia</option> 
					  <option value="Maldives">Maldives</option> 
					  <option value="Mali">Mali</option> 
					  <option value="Malta">Malta</option> 
					  <option value="Marshall Islands">Marshall Islands</option> 
					  <option value="Martinique">Martinique</option> 
					  <option value="Mauritania">Mauritania</option> 
					  <option value="Mauritius">Mauritius</option> 
					  <option value="Mayotte">Mayotte</option> 
					  <option value="Mexico">Mexico</option> 
					  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
					  <option value="Moldova, Republic of">Moldova, Republic of</option> 
					  <option value="Monaco">Monaco</option> 
					  <option value="Mongolia">Mongolia</option> 
					  <option value="Montenegro">Montenegro</option>
					  <option value="Montserrat">Montserrat</option> 
					  <option value="Morocco">Morocco</option> 
					  <option value="Mozambique">Mozambique</option> 
					  <option value="Myanmar">Myanmar</option> 
					  <option value="Namibia">Namibia</option> 
					  <option value="Nauru">Nauru</option> 
					  <option value="Nepal">Nepal</option> 
					  <option value="Netherlands">Netherlands</option> 
					  <option value="Netherlands Antilles">Netherlands Antilles</option> 
					  <option value="New Caledonia">New Caledonia</option> 
					  <option value="New Zealand">New Zealand</option> 
					  <option value="Nicaragua">Nicaragua</option> 
					  <option value="Niger">Niger</option> 
					  <option value="Nigeria">Nigeria</option> 
					  <option value="Niue">Niue</option> 
					  <option value="Norfolk Island">Norfolk Island</option> 
					  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					  <option value="Norway">Norway</option> 
					  <option value="Oman">Oman</option> 
					  <option value="Pakistan">Pakistan</option> 
					  <option value="Palau">Palau</option> 
					  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
					  <option value="Panama">Panama</option> 
					  <option value="Papua New Guinea">Papua New Guinea</option> 
					  <option value="Paraguay">Paraguay</option> 
					  <option value="Peru">Peru</option> 
					  <option value="Philippines">Philippines</option> 
					  <option value="Pitcairn">Pitcairn</option> 
					  <option value="Poland">Poland</option> 
					  <option value="Portugal">Portugal</option> 
					  <option value="Puerto Rico">Puerto Rico</option> 
					  <option value="Qatar">Qatar</option> 
					  <option value="Reunion">Reunion</option> 
					  <option value="Romania">Romania</option> 
					  <option value="Russian Federation">Russian Federation</option> 
					  <option value="Rwanda">Rwanda</option> 
					  <option value="Saint Helena">Saint Helena</option> 
					  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					  <option value="Saint Lucia">Saint Lucia</option> 
					  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
					  <option value="Samoa">Samoa</option> 
					  <option value="San Marino">San Marino</option> 
					  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					  <option value="Saudi Arabia">Saudi Arabia</option> 
					  <option value="Senegal">Senegal</option> 
					  <option value="Serbia">Serbia</option> 
					  <option value="Seychelles">Seychelles</option> 
					  <option value="Sierra Leone">Sierra Leone</option> 
					  <option value="Singapore">Singapore</option> 
					  <option value="Slovakia">Slovakia</option> 
					  <option value="Slovenia">Slovenia</option> 
					  <option value="Solomon Islands">Solomon Islands</option> 
					  <option value="Somalia">Somalia</option> 
					  <option value="South Africa">South Africa</option> 
					  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
					  <option value="South Sudan">South Sudan</option> 
					  <option value="Spain">Spain</option> 
					  <option value="Sri Lanka">Sri Lanka</option> 
					  <option value="Sudan">Sudan</option> 
					  <option value="Suriname">Suriname</option> 
					  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					  <option value="Swaziland">Swaziland</option> 
					  <option value="Sweden">Sweden</option> 
					  <option value="Switzerland">Switzerland</option> 
					  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
					  <option value="Tajikistan">Tajikistan</option> 
					  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					  <option value="Thailand">Thailand</option> 
					  <option value="Timor-leste">Timor-leste</option> 
					  <option value="Togo">Togo</option> 
					  <option value="Tokelau">Tokelau</option> 
					  <option value="Tonga">Tonga</option> 
					  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					  <option value="Tunisia">Tunisia</option> 
					  <option value="Turkey">Turkey</option> 
					  <option value="Turkmenistan">Turkmenistan</option> 
					  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					  <option value="Tuvalu">Tuvalu</option> 
					  <option value="Uganda">Uganda</option> 
					  <option value="Ukraine">Ukraine</option> 
					  <option value="United Arab Emirates">United Arab Emirates</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="United States">United States</option> 
					  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
					  <option value="Uruguay">Uruguay</option> 
					  <option value="Uzbekistan">Uzbekistan</option> 
					  <option value="Vanuatu">Vanuatu</option> 
					  <option value="Venezuela">Venezuela</option> 
					  <option value="Viet Nam">Viet Nam</option> 
					  <option value="Virgin Islands, British">Virgin Islands, British</option> 
					  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					  <option value="Wallis and Futuna">Wallis and Futuna</option> 
					  <option value="Western Sahara">Western Sahara</option> 
					  <option value="Yemen">Yemen</option> 
					  <option value="Zambia">Zambia</option> 
					  <option value="Zimbabwe">Zimbabwe</option>
					</select>
				  </div>
				</div>
				
				<h2>&lt;optgroup&gt; Support</h2>
				<div class="side-by-side clearfix">
				  <div>
					<em>Single Select with Groups</em>
					<select data-placeholder="Your Favorite Football Team" style="width:350px;" class="chzn-select" tabindex="5">
					  <option value=""></option>
					  <optgroup label="NFC East">
						<option>Dallas Cowboys</option>
						<option>New York Giants</option>
						<option>Philadelphia Eagles</option>
						<option>Washington Redskins</option>
					  </optgroup>
					  <optgroup label="NFC NORTH">
						<option>Chicago Bears</option>
						<option>Detroit Lions</option>
						<option>Green Bay Packers</option>
						<option>Minnesota Vikings</option>
					  </optgroup>
					  <optgroup label="NFC SOUTH">
						<option>Atlanta Falcons</option>
						<option>Carolina Panthers</option>
						<option>New Orleans Saints</option>
						<option>Tampa Bay Buccaneers</option>
					  </optgroup>
					  <optgroup label="NFC WEST">
						<option>Arizona Cardinals</option>
						<option>St. Louis Rams</option>
						<option>San Francisco 49ers</option>
						<option>Seattle Seahawks</option>
					  </optgroup>
					  <optgroup label="AFC EAST">
						<option>Buffalo Bills</option>
						<option>Miami Dolphins</option>
						<option>New England Patriots</option>
						<option>New York Jets</option>
					  </optgroup>
					  <optgroup label="AFC NORTH">
						<option>Baltimore Ravens</option>
						<option>Cincinnati Bengals</option>
						<option>Cleveland Browns</option>
						<option>Pittsburgh Steelers</option>
					  </optgroup>
					  <optgroup label="AFC SOUTH">
						<option>Houston Texans</option>
						<option>Indianapolis Colts</option>
						<option>Jacksonville Jaguars</option>
						<option>Tennessee Titans</option>
					  </optgroup>
					  <optgroup label="AFC WEST">
						<option>Denver Broncos</option>
						<option>Kansas City Chiefs</option>
						<option>Oakland Raiders</option>
						<option>San Diego Chargers</option>
					  </optgroup>
					</select>
				  </div>
				  <div>
					<em>Multiple Select with Groups</em>
					<select data-placeholder="Your Favorite Football Team" style="width:350px;" class="chzn-select" multiple tabindex="6">
					  <option value=""></option>
					  <optgroup label="NFC East">
						<option>Dallas Cowboys</option>
						<option>New York Giants</option>
						<option>Philadelphia Eagles</option>
						<option>Washington Redskins</option>
					  </optgroup>
					  <optgroup label="NFC NORTH">
						<option>Chicago Bears</option>
						<option>Detroit Lions</option>
						<option>Green Bay Packers</option>
						<option>Minnesota Vikings</option>
					  </optgroup>
					  <optgroup label="NFC SOUTH">
						<option>Atlanta Falcons</option>
						<option>Carolina Panthers</option>
						<option>New Orleans Saints</option>
						<option>Tampa Bay Buccaneers</option>
					  </optgroup>
					  <optgroup label="NFC WEST">
						<option>Arizona Cardinals</option>
						<option>St. Louis Rams</option>
						<option>San Francisco 49ers</option>
						<option>Seattle Seahawks</option>
					  </optgroup>
					  <optgroup label="AFC EAST">
						<option>Buffalo Bills</option>
						<option>Miami Dolphins</option>
						<option>New England Patriots</option>
						<option>New York Jets</option>
					  </optgroup>
					  <optgroup label="AFC NORTH">
						<option>Baltimore Ravens</option>
						<option>Cincinnati Bengals</option>
						<option>Cleveland Browns</option>
						<option>Pittsburgh Steelers</option>
					  </optgroup>
					  <optgroup label="AFC SOUTH">
						<option>Houston Texans</option>
						<option>Indianapolis Colts</option>
						<option>Jacksonville Jaguars</option>
						<option>Tennessee Titans</option>
					  </optgroup>
					  <optgroup label="AFC WEST">
						<option>Denver Broncos</option>
						<option>Kansas City Chiefs</option>
						<option>Oakland Raiders</option>
						<option>San Diego Chargers</option>
					  </optgroup>
					</select>
				  </div>
				</div>
			
				<h2>Selected and Disabled Support</h2>
				<div class="side-by-side clearfix">
				  <p>Chosen automatically highlights selected options and removes disabled options.</p>
				  <div>
					<em>Single Select</em>
					<select data-placeholder="Your Favorite Type of Bear" style="width:350px;" class="chzn-select" tabindex="7">
					  <option value=""></option>
					  <option>American Black Bear</option>
					  <option>Asiatic Black Bear</option>
					  <option>Brown Bear</option>
					  <option>Giant Panda</option>
					  <option selected>Sloth Bear</option>
					  <option disabled>Sun Bear</option>
					  <option>Polar Bear</option>
					  <option disabled>Spectacled Bear</option>
					</select>
				  </div>
				  <div>
					<em>Multiple Select with Groups</em>
					<select data-placeholder="Your Favorite Types of Bear" style="width:350px;" multiple class="chzn-select" id="test_me" name="test_me_form" tabindex="8">
					  <option value=""></option>
					  <option>American Black Bear</option>
					  <option>Asiatic Black Bear</option>
					  <option>Brown Bear</option>
					  <option>Giant Panda</option>
					  <option selected>Sloth Bear</option>
					  <option disabled>Sun Bear</option>
					  <option selected>Polar Bear</option>
					  <option disabled>Spectacled Bear</option>
					</select>
				  </div>
				</div>
			
				<h2>Default Text Support</h2>
				<div class="side-by-side clearfix">
				  <p>Chosen automatically sets the default field text ("Choose a country...") by reading the select element's data-placeholder value. If no data-placeholder value is present, it will default to "Select Some Option" or "Select Some Options" depending on whether the select is single or multiple. You can change these elements in the plugin js file as you see fit.</p>
				  <code>&lt;select <strong>data-placeholder="Choose a country..."</strong> style="width:350px;" multiple class="chzn-select"&gt;</code>
				  <p><strong>Note:</strong> on single selects, the first element is assumed to be selected by the browser. To take advantage of the default text support, you will need to include a blank option as the first element of your select list.</p>
				</div>
			
				<h2>Right to Left Support</h2>
				<div class="side-by-side clearfix">
				  <p>Chosen supports right to left select boxes too. just add <code>"chzn-rtl"</code> in addition to <code>"chzn-select"</code> to your select tags and you are good to go.</p>
				  <p><code>&lt;select class="chzn-select <strong>chzn-rtl</strong>"&gt;</code></p>
				  <div>
					<em>Single right to left select</em>
					<select data-placeholder="Your Favorite Type of Bear" style="width:350px;" class="chzn-select chzn-rtl" tabindex="9">
					  <option value=""></option>
					  <option>American Black Bear</option>
					  <option>Asiatic Black Bear</option>
					  <option>Brown Bear</option>
					  <option>Giant Panda</option>
					  <option selected>Sloth Bear</option>
					  <option>Polar Bear</option>
					</select>
				  </div>
				  <div>
					<em>Multiple right to left select</em>
					<select data-placeholder="Your Favorite Types of Bear" style="width:350px;" multiple class="chzn-select  chzn-rtl" tabindex="10">
					  <option value=""></option>
					  <option>American Black Bear</option>
					  <option>Asiatic Black Bear</option>
					  <option>Brown Bear</option>
					  <option>Giant Panda</option>
					  <option selected>Sloth Bear</option>
					  <option selected>Polar Bear</option>
					</select>
				  </div>
				</div>
			
				<h2>Change / Update Events</h2>
				<div class="side-by-side clearfix">
				  <ul>
					<li>
					  <h3>Form Field Change</h3>
					  <p>When working with form fields, you often want to perform some behavior after a value has been selected or deselected. Whenever a user selects a field in Chosen, it triggers a "change" event* on the original form field. That let's you do something like this:</p>
					  <p><code>$("#form_field").chosen().change( &hellip; );</code></p>
					  <p><strong>Note:</strong> Prototype doesn't offer support for triggering standard browser events. <a href="https://github.com/kangax/protolicious/blob/5b56fdafcd7d7662c9d648534225039b2e78e371/event.simulate.js">Event.simulate</a> is required to trigger the change event when using the Prototype version.</p>
					</li>
					<li>
					  <h3>Updating Chosen Dynamically</h3>
					  <p>If you need to update the options in your select field and want Chosen to pick up the changes, you'll need to trigger the "liszt:updated" event on the field. Chosen will re-build itself based on the updated content.</p>
					  <ul>
						<li><strong>jQuery Version:</strong> <code>$("#form_field").trigger("liszt:updated");</code></li>
						<li><strong>Prototype Version:</strong> <code>Event.fire($("form_field"), "liszt:updated");</code></li>
					  </ul>
					</li>
				  </ul>
				</div>
			
				<h2>Setup (for jQuery)</h2>
				<p>Using Chosen is easy as can be.</p>
				<ol>
				  <li>Download the plugin and copy the chosen files to your app.</li>
				  <li>Activate the plugin on the select boxes of your choice: <code>$(".chzn-select").chosen()</code></li>
				  <li><a href="http://youtu.be/pS-RsIzb78U?t=57s">Disco</a>.</li>
				</ol>
				
			  </div>
			<br>
			<br>
			<strong>表单验证</strong>
			<pre>
			2012/9/23 新加正则判断 By MiNG
				type:regx
				调用例子: 
				   <form><input type="text"  limit="type:regx;required:true;re:/^[a-z]{1}(\\w){5,9}$/i" msgarea="code_span" msg="输入错误" id="example"><span id="code_span" class="login_msg"></span>
				   </form>
			|功能1.表单字段验证
			|      方法签名：validElement(element).
			|      功能：如果验证失败，返回false。显示在页面或跳出错误信息。
			|      参数说明：element:HTML元素，在页面上调用此方法时请使用 'this'调用。
			|                limit:验证条件串：如：'type:float;required:true;decLen:2'
			|                      limit的属性可以有: type,required,len,between,decLen,
			|                                         equals,general
			|                      属性说明:
			|						 type:string,int,digit,float,email,ip,url,date,datetime,time
			|                             tel,fax,mobileCn,idCard,signName,name,postcodeCn
			|                             default: string.
			|                        required:可选值有true和false.default:false.
			|                        len:字符串长度,值为 "6-20",表示长度在6和20之间。也可
			|                             以为"-20"，表示不超过20。
			|						 between:数值有效,在两个值之间。可为 "10-100"，表示大
			|                                小在10与00之间，也可为"-100",表示小于100。
			|                        decLen:浮点型精度长度.若不符合精度将会自动纠正.
			|                        equals:是否要求与其它元素相等。用于密码确认等场合.
			|                        general:是否是一般字符。不包括特殊字符.Default:true.
									 than:与指定对象比较日期值，如果大于return true.
			|                msgArea:显示错误信息的SPAN或DIV的ID。如果传入为空，则会查找
			|                        global_error_msg_area 的SPAN或DIV，如果也为空，则会
			|                        alert 这些错误信息。
			|                msg:错误信息，如果这个参数为""，则会打出默认的错误信息.
							 caseon:  值为 all submit blur
									 默认为all  指全部验证  为submit时只在提交时验证  为blur时只在离焦验证
			|功能2.表单自动验证:
			|      方法签名：checkForm(form,isCheckAll)
			|      isCheckAll:是否检查所有的元素：如为False,验证会在第一个错误出现时退出，否则，会验证所有的元素
			|      功能：验证表单中所有需要验证的字段.失败返回false.显示或跳出错误信息.
			|      使用条件：需要验证的元素需要定义至少 limit 属性，程序会自动搜索这个表单中所有需要验证的元素。
			|提示:如果您需要把错误信息显示在某一个单独的地方，可以定义一个ID为 global_error_msg_area 的DIV或是SPAN
			|   　表单的验证将默认限制特殊字符，可以加入 general:false 来取消限制
			\*---------------------------------------------------------------------------*/
			/*---------------------------------------------------------------------------*\
			|  Subject:       JavaScript validation API
			|验证API
			|验证函数列表：
			|
			|judgeDigit(arguments...) :判断是否数字
			|三种调用方式:
			|1.一个参数,简单判断是否为数字,但长度不超过10位
			|2.三个参数,第二个参数为 (大于) 或 (小于)第3个参数为要比较的数字
			|3.三个参数，第二个参数与第三个参数均为整数，判断传入的第一个参数值是否在他们中间.(含边界)
			|judgeFloat(arguments...):浮点数
			|如果是一个参数，那么判断是否为浮点数
			|如果有两个参数，那么将第二个参数作为精度限定参数
			|如果有三个参数，那么第二个参数为最小值，第三个参数是将作为数值上限
			|
			|isDigit(str):是否数字
			|
			|isSignName(arguments...)
			|两种调用方式：
			|一个参数：(默认为2--32位)，判断标识符或是登录名
			|判断标识符或是登录名，以字母开头,可带数字、"_"、"." 的字串
			|三个参数：
			|限定最小长度(第二个参数)与最大长度(第三个参数)
			|
			|isRealName(str) :判断是否是真实姓名
			|isTel(str) :电话号码:除数字外，可含有"-".校验普通电话，除数字外，可用"-"或空格分开
			|isMobileCN(s) :中国大陆地区手机号码,以13或15开头，使用时请根据变化修改,
			|isPostalCodeCN(s):中国地区邮编
			|isEmail(s) :E-mail
			|isURL(s) :URL
			|isIP(s):IP-32
			|isHtmlTag(s):HTML Tag
			|isIDNumber15(s):身份证号15位
			|isIDNumber18(s):身份证号18位
			|isChineseString(s):中文字符
			|isDoubleByteString(s):双字节
			|hasHESpace(s):是否包含首尾空格，如果包含，返回TRUE
			|isQQ(s):QQ
			|isFloat(s):是否是浮点数
			|isLeapYear(y):是否闰年
			|isDateYMD(s):日期：yyyy-mm-dd 或 yyyy/mm/dd,支持1600年以后(包含闰年验证)
			|isDateDMY(s):日期：dd-mm-yyyy 或 dd/mm/yyyy,支持1600年以后(包含闰年验证)
			|isDateMDY(s):日期：mm/dd/yyyy 或 mm-dd-yyyy,支持1600年以后(包含闰年验证)
			|isDateTimeYMD(s):日期：yyyy/mm/dd hh:mm:ss 或 yyyy-mm-dd hh:mm:ss,支持1600年以后(包含闰年验证)
			|
			|containsSpecialChar()
			|是否包含非特殊字符(正常字符包括字母数字,下划线,和点号,空格,@#$% 和双字节)若包含,返回true
			|
			|以下方法遵守这样的调用法则:
			|1.一个参数，不限制长度
			|2.三个参数，第二个参数表示允许的最小长度，第三个参数表示允许的最大长度
			|
			|isDigitString():数字
			|isLetter():字母
			|isUpperLetter():大写字母
			|isLowerLetter():小写字母
			|isLetterNumString():字母与数字
			|isLNUString() :数字，字母，下划线字符串
			|
			|兼容性:在IE6.0与Firefox2.0下测试通过。
			|License:Apache license2.0.请在使用此代码时包含license与作者信息.
			</pre>
			<form name="register_frm" id="register_frm" method="post" action="index.php?do=register">
				<div>
					<label class="grid_3"> 用&nbsp;户&nbsp;名：</label>
					<input type="text" msgarea="login_account_msg" msg="用户名输入有误！" limit="required:true;leng:4-16;type:signName;general:true" id="txt_account" name="txt_account" autocomplete="off">
					<span id="login_account_msg" class="login_msg"></span>
				</div>
				<br>
				<div>
					<label class="grid_3"> 密&nbsp;&nbsp;&nbsp;&nbsp;码： </label>
					<input type="password" msgarea="password_msg" msg="密码输入有误！" limit="required:true;len:6-20" maxlength="20" id="pwd_password" name="pwd_password">
					<span id="password_msg" class=""></span>
				</div>
				<br>
				<div>
					<label class="grid_3"> 确认密码： </label>
					<input type="password" msgarea="password2_msg" msg="重复密码不正确！" limit="required:true;equals:pwd_password" maxlength="20" id="pwd_password2" name="pwd_password2">
					<span id="password2_msg" class=""></span>
				</div>
				<br>
				<div>
					<label class="grid_3"> 邮&nbsp;&nbsp;&nbsp;&nbsp;箱： </label>
					<input type="text" msgarea="email_msg" msg="email 格式有误" limit="type:email;required:true;len:6-50" id="txt_email" name="txt_email" autocomplete="on">
					<span id="email_msg" class=""></span>
				</div>
			</form>
			<br>
			<strong>提示插件用法</strong>
			<input type="text" msg="任务标题填写错误，2-50字" original-title="任务标题长度2-50字" class="txt_input">
			<br><br>
			<a tipsy="tipsy-s" original-title="任务标题长度2-50字" href="">任务标题长度</a>
		</div>
	</div>
	<div class="container" style="width:auto">
				<br><br><br><br><br>
		<h1>jCarousel</h1>
		<h2>实例1.jQuery下的滚动切换传送插件</h2>
		<h3>最简单基本的滚动切换效果</h3>
		<p> 这是最简单基本的滚动切换效果演示，没有任何的参数配置。 </p>
		<ul id="mycarousel" class="jcarousel-skin-1">
			<li><img src="images/temp/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
		</ul>
		<br>
		实例2.
		<ul id="mycarousel_vertical" class="jcarousel jcarousel-skin-1">
			<li><img src="images/temp/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
		</ul>
		<br>
		<h3>实例3.自动滚动的传送切换</h3>
		<p> 内部设定为没<code>2</code>秒钟滚动一次。当鼠标移到图片上或点击“往前”“往后”按钮shit停止自动滚动。<code>wrap</code>设为<code>&quot;last&quot;</code>. </p>
		<ul id="mycarousel_auto" class="jcarousel-skin-1">
			<li><img src="images/temp/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
		</ul>
		<bR>
		<link rel="stylesheet" type="text/css" href="css/jcarousel/jscrousel_skin_1.css">
		<bR>
		<h3>实例4.Carousel illustrating the callback functions</h3>
		<p>此滚动切换注册了所有可用的回调函数，并显示了列表项和按钮的信息。另外，此滚动传送的宽度设为了auto。改变浏览器窗口会自动收缩。</p>
		<ul id="mycarousel_callback" class="jcarousel-skin-2">
			<li><img src="images/temp/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
			<li><img src="images/temp/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
		</ul>
		<p id="display">
		<style>
		  #display {
			background-color: #FCFCFC;
			border: 1px solid #666666;
			clear: both;
			height: 250px;
			overflow: scroll;
			padding: 10px;
			width: auto;
		  }
		</style>
		</p>
		<link rel="stylesheet" type="text/css" href="css/jcarousel/jscrousel_skin_2.css">
		
		<h3>实例5.通过JavaScript加载滚动切换的动态内容</h3>
		<p> 数据动态加载自JavaScript数组。 </p>
		<ul id="mycarousel_jsload" class="jcarousel-skin-1">
			<!-- 内容会被动态加载到这里 -->
		</ul>
		<h3>实例6.通过Ajax从PHP脚本加载滚动切换的动态内容</h3>
		<p>数据加载自php文件，此文件包含需要的图片URL路径。</p>
		<div id="mycarousel_ajaxphp" class="jcarousel-skin-1">
			<ul>
				<!-- 内容会被动态加载到这里 -->
			</ul>
		</div>
		<h3>实例7.通过Ajax加载文本文件滚动切换的动态内容</h3>
		<p>数据加载自一个简单的文本文件，此文件包含需要的图片URL路径。</p>
		<div id="mycarousel_ajaxtxt" class="jcarousel-skin-1">
			<ul>
			  <!-- 内容会被动态加载到这里 -->
			</ul>
		</div>
	</div>
	<style>.cssrain { background: #BBB; border: 2px double #000000; height: 200px; width: 200px; padding: 10px; /*加了padding 也无影响.*/ }</style>
		<div class="f_r">
			<div class="cssrain" id="div1">跟随屏幕滚动的层1</div>
		</div>
		<div class="f_r">
			<div class="cssrain" id="div2">跟随屏幕滚动的层2</div>
		</div>
	<div class="container">
		<input type="text" placeholder="一个输入框">
	</div>
	<div class="container">
		<img class="thumbtaskImg" src="http://www.epweike.net/data/uploads/2014/05/09/middle_165074011536c3f48bf6dc.png" SourceImg="http://www.epweike.net/data/uploads/2014/05/09/165074011536c3f48bf6dc.png"><br>
		<img class="thumbtaskImg"  src="http://www.epweike.net/data/avatar/system/12_small.jpg" SourceImg="http://www.epweike.net/data/avatar/system/12_small.jpg">
	</div>
	
</div>

<?php include 'footer.html'; ?>
<!--页面的单独调用的JS-->
<script type="text/javascript">
In('ezChoose',function(){
	$(function() {
		$('.defaultP input').ezChoose();
		$('.customP input[type="checkbox"]').ezChoose()
	});	
});


In('thumbimg',function(){
	$(".thumbtaskImg").each(function(index, element) {
		thumbImg(this)
	});
});
$(document).ready(function(){
	//引入placeholder
	In('placeholder');
	

})
//下拉选择
function changeCon(obj){
	var urlrls = $(obj).attr('namtitos');
	alert (urlrls);
	var sp = urlrls.indexOf('?') >= 0 ? '&' : '?';
}
$(function(){
	In('chosen','chosen_css',function(){
		$(".chzn-select").chosen();
	});
	//添加表单验证
	In('form');
	//添加提示
	In('tipsy',function(){
		$('input,textarea').tipsy({
			gravity: $.fn.tipsy.autoWE,
			trigger: 'focus'
		});
		$('a[tipsy="tipsy-s"]').tipsy({gravity: 's'});
	})
});




</script>

<script>
$(function(){
	In("floatFollow",function(){
		$('#div1').floatFollow({"right":"30px","bottom":"15px","starheight":"100px"});
		$('#div2').floatFollow({"left":"30px","bottom":"15px"});
	})
	//jcarousel滚动
	In('jcarousel',function(){
		//实例1
		//基本滚动实例
		$('#mycarousel').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>"
		});
		//实例2
		//垂直滚动实例
		$('#mycarousel_vertical').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			vertical: true,
			scroll: 2
		});
		//实例3
		//自动滚动的传送切换 开始
		function mycarousel_initCallback(carousel){
			//当鼠标移到图片上或点击“往前”“往后”按钮shit停止自动滚动。
			// Disable autoscrolling if the user clicks the prev or next button.
			carousel.buttonNext.bind('click', function() {
				carousel.startAuto(0);
			});
			carousel.buttonPrev.bind('click', function() {
				carousel.startAuto(0);
			});
			// Pause autoscrolling if the user moves with the cursor over the clip.
			carousel.clip.hover(function() {
				carousel.stopAuto();
			}, function() {
				carousel.startAuto();
			});
		};
		$('#mycarousel_auto').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			auto: 2,
			wrap: 'last',
			initCallback: mycarousel_initCallback
		});
		//实例4
		//含有回调函数的滚动 开始
		/**
		 * This is the callback function which receives notification
		 * about the state of the next button.
		 */
		function mycarousel_buttonNextCallback(carousel, button, enabled) {
			display('Next button is now ' + (enabled ? 'enabled' : 'disabled'));
		};
		
		/**
		 * This is the callback function which receives notification
		 * about the state of the prev button.
		 */
		function mycarousel_buttonPrevCallback(carousel, button, enabled) {
			display('Prev button is now ' + (enabled ? 'enabled' : 'disabled'));
		};
		
		/**
		 * This is the callback function which receives notification
		 * right after initialisation of the carousel
		 */
		function mycarousel_initCallback(carousel, state) {
			if (state == 'init')
				display('Carousel initialised');
			else if (state == 'reset')
				display('Carousel reseted');
		};
		
		/**
		 * This is the callback function which receives notification
		 * right after reloading of the carousel
		 */
		function mycarousel_reloadCallback(carousel) {
			display('Carousel reloaded');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item becomes the first one in the visible range.
		 */
		function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
			display('Item #' + idx + ' is now the first item');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item is no longer the first one in the visible range.
		 */
		function mycarousel_itemFirstOutCallback(carousel, item, idx, state) {
			display('Item #' + idx + ' is no longer the first item');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item becomes the first one in the visible range.
		 */
		function mycarousel_itemLastInCallback(carousel, item, idx, state) {
			display('Item #' + idx + ' is now the last item');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item is no longer the first one in the visible range.
		 */
		function mycarousel_itemLastOutCallback(carousel, item, idx, state) {
			display('Item #' + idx + ' is no longer the last item');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item becomes the first one in the visible range.
		 * Triggered before animation.
		 */
		function mycarousel_itemVisibleInCallbackBeforeAnimation(carousel, item, idx, state) {
			// No animation on first load of the carousel
			if (state == 'init')
				return;
		
			$('img', item).fadeIn('slow');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item becomes the first one in the visible range.
		 * Triggered after animation.
		 */
		function mycarousel_itemVisibleInCallbackAfterAnimation(carousel, item, idx, state) {
			display('Item #' + idx + ' is now visible');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item is no longer the first one in the visible range.
		 * Triggered before animation.
		 */
		function mycarousel_itemVisibleOutCallbackBeforeAnimation(carousel, item, idx, state) {
			$('img', item).fadeOut('slow');
		};
		
		/**
		 * This is the callback function which receives notification
		 * when an item is no longer the first one in the visible range.
		 * Triggered after animation.
		 */
		function mycarousel_itemVisibleOutCallbackAfterAnimation(carousel, item, idx, state) {
			display('Item #' + idx + ' is no longer visible');
		};
		
		/**
		 * Helper function for printing out debug messages.
		 * Not needed for jCarousel.
		 */
		var row = 1;
		function display(s) {
			// Log to Firebug (getfirebug.com) if available
			//if (window.console != undefined && typeof window.console.log == 'function')
			  //  console.log(s);
		
			if (row >= 1000)
				var r = row;
			else if (row >= 100)
				var r = '&nbsp;' + row;
			else if (row >= 10)
				var r = '&nbsp;&nbsp;' + row;
			else
				var r = '&nbsp;&nbsp;&nbsp;' + row;
		
			$('#display').html($('#display').html() + r + ': ' + s + '<br />').get(0).scrollTop += 10000;
		
			row++;
		};
		$('#mycarousel_callback').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			scroll: 1,
			initCallback:   mycarousel_initCallback,
			reloadCallback: mycarousel_reloadCallback,
	
			buttonNextCallback:   mycarousel_buttonNextCallback,
			buttonPrevCallback:   mycarousel_buttonPrevCallback,
	
			itemFirstInCallback:  mycarousel_itemFirstInCallback,
			itemFirstOutCallback: mycarousel_itemFirstOutCallback,
			itemLastInCallback:   mycarousel_itemLastInCallback,
			itemLastOutCallback:  mycarousel_itemLastOutCallback,
			itemVisibleInCallback: {
				onBeforeAnimation: mycarousel_itemVisibleInCallbackBeforeAnimation,
				onAfterAnimation:  mycarousel_itemVisibleInCallbackAfterAnimation
			},
			itemVisibleOutCallback: {
				onBeforeAnimation: mycarousel_itemVisibleOutCallbackBeforeAnimation,
				onAfterAnimation:  mycarousel_itemVisibleOutCallbackAfterAnimation
			}
		});
		//实例5
		var mycarousel_itemList = [
			{url: "images/temp/199481236_dc98b5abb3_s.jpg", title: "Flower1"},
			{url: "images/temp/199481072_b4a0d09597_s.jpg", title: "Flower2"},
			{url: "images/temp/199481087_33ae73a8de_s.jpg", title: "Flower3"},
			{url: "images/temp/199481108_4359e6b971_s.jpg", title: "Flower4"},
			{url: "images/temp/199481143_3c148d9dd3_s.jpg", title: "Flower5"},
			{url: "images/temp/199481203_ad4cdcf109_s.jpg", title: "Flower6"},
			{url: "images/temp/199481218_264ce20da0_s.jpg", title: "Flower7"},
			{url: "images/temp/199481255_fdfe885f87_s.jpg", title: "Flower8"},
			{url: "images/temp/199480111_87d4cb3e38_s.jpg", title: "Flower9"},
			{url: "images/temp/229228324_08223b70fa_s.jpg", title: "Flower10"}
		];
		function mycarousel_itemLoadCallback(carousel, state){
			for (var i = carousel.first; i <= carousel.last; i++) {
				if (carousel.has(i)) {
					continue;
				}
		
				if (i > mycarousel_itemList.length) {
					break;
				}
				carousel.add(i, mycarousel_getItemHTML(mycarousel_itemList[i-1]));
			}
		};
		
		/**
		 * Item html creation helper.
		 */
		function mycarousel_getItemHTML(item){
			return '<img src="' + item.url + '" width="75" height="75" alt="' + item.url + '" />';
		};
		$('#mycarousel_jsload').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			size: mycarousel_itemList.length,
			itemLoadCallback: {onBeforeAnimation: mycarousel_itemLoadCallback}
		});
		
		//实例6
		function mycarousel_itemLoadCallback(carousel, state){
			// 检查请求的项目是否存在
			if (carousel.has(carousel.first, carousel.last)) {
				return;
			}
			$.get('js/Plugin/jcarousel/examples/dynamic_ajax_php.php',{
				first: carousel.first,
				last: carousel.last
			},
			function(xml) {
				mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, xml);
			},
			'xml'
		);
		};
		function mycarousel_itemAddCallback(carousel, first, last, xml){
			// 设置传送项的个数
			carousel.size(parseInt(jQuery('total', xml).text()));
			
			$('image', xml).each(function(i) {
				carousel.add(first + i, mycarousel_getItemHTML(jQuery(this).text()));
			});
		};
		/**
		* Item html creation helper.
		*/
		function mycarousel_getItemHTML(url){
			return '<img src="' + url + '" width="75" height="75" alt="" />';
		};
		$('#mycarousel_ajaxphp').jcarousel({
		// Uncomment the following option if you want items
		// which are outside the visible range to be removed
		// from the DOM.
		// Useful for carousels with MANY items.
		
		// itemVisibleOutCallback: {onAfterAnimation: function(carousel, item, i, state, evt) { carousel.remove(i); }},
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			itemLoadCallback: mycarousel_itemLoadCallback
		});
		//实例7
		function mycarousel_itemLoadCallback(carousel, state){
			// Since we get all URLs in one file, we simply add all items
			// at once and set the size accordingly.
			if (state != 'init'){
				return;
			}
			$.get('js/Plugin/jcarousel/examples/dynamic_ajax.txt', function(data) {
				mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, data);
			});
		};
		function mycarousel_itemAddCallback(carousel, first, last, data){
			// Simply add all items at once and set the size accordingly.
			var items = data.split('|');
			for (i = 0; i < items.length; i++) {
				carousel.add(i+1, mycarousel_getItemHTML(items[i]));
			}
			carousel.size(items.length);
		};
		/**
		* Item html creation helper.
		*/
		function mycarousel_getItemHTML(url){
			return '<img src="' + url + '" width="75" height="75" alt="" />';
		};
		$('#mycarousel_ajaxtxt').jcarousel({
			buttonNextHTML: "<a href='javascript:void(0);'>></a>",
			buttonPrevHTML: "<a href='javascript:void(0);'><</a>",
			itemLoadCallback: mycarousel_itemLoadCallback
		});
	});
});
</script>
</body>
</html>