<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Apply For WorldLotteryUSA Grand Prize Lottery Draw</h2>
    	<h6>Play Now And Stand A Chance Of Being Selected To Win Grand Prize Of $1,000,000!!</h6>
        @if(Session::has("apply-raffle-status") && Session::get("apply-raffle-status") == "success" && Session::has("lucky-number")) 
		<div id="l-success" class="alert alert-success">
			<?php $ln = Session::get("lucky-number");?>
          Application successful! Your lucky number is <strong>{{$ln}}</strong>, make sure you write it down and keep it safe! Also, make sure you check your email frequently; if you are among the lucky 50 to be selected, you will receive an email from us. Good luck!<br>
          <span><strong>NOTE: For Outlook, Hotmail and Live email users if you don't receive our email please check your Spam folder</strong><span>
        </div>
        <script>
        	document.getElementById("l-success").scrollIntoView();
        </script>
		@endif 
		
		<div class="jumbotron text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/efp.png); background-size:cover;">
         <h3 class="display-3 text-white">Hello, Europe</h3>
         <p class="lead text-center">Bringing WorldLotteryUSA To Europe! </p>
         <hr class="my-4">
         <p>WorldLotteryUSA is now available in over 20 countries in Europe and we are constantly working to make more European countries eligible to apply!</p><br>
         <p class="lead">
           <a class="btn btn-primary btn-lg" href="#lform" role="button">Apply NOW</a>
         </p>
        </div><br>
        	<center>
        	  <img id="l-image" class="img img-responsive" src="img/loading-2.gif" alt="Shuffling.."><br>
        	  <span id="l-text"><strong>Rolling the ballot..</strong></span>
            </center>
        	    <form method="post" action="{{url('apply-raffle')}}" id="lform">   
        	         {{ csrf_field() }}
                       <input type="hidden" name="grepo" value="{{$grepo}}">
                       <h4>Enter your lucky numbers! (Single digit per box, please)<span style="color:red;">*</span></h4>
                       <div class="row">
                       	<div class="col-xs-2 col-sm-2 col-md-2">
                       	  <h4>1<span style="color:red;">*</span></h4>
                	         <input type="text" maxlength=1 class="form-control" name="num-1" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                             <h4>2<span style="color:red;">*</span></h4>
                	         <input type="text" maxlength=1 class="form-control" name="num-2" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                             <h4>3<span style="color:red;">*</span></h4>
                	         <input type="text" maxlength=1 class="form-control" name="num-3" required>
                           </div>
                           <div class="col-xs-2 col-sm-2 col-md-2">
                              <h4>4<span style="color:red;">*</span></h4>
                	         <input type="text" maxlength=1 class="form-control" name="num-4" required>
                           </div>
                           <div class=" col-xs-2 col-sm-2 col-md-2">
                             <h4>5<span style="color:red;">*</span></h4>
                	         <input type="text" maxlength=1 class="form-control" name="num-5" required>
                           </div>
                        </div><br>
                	   <h4>Enter your email address <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="email" required>   
                	<br>
                	   <h4>Country <span style="color:red;">*</span></h4>
                	   <select name="country" class="form-control">
						
			<option value="">Please select</option>
			
					<option value="AF">Afghanistan</option>
					
					<option value="AL">Albania</option>
					
					<option value="DZ">Algeria</option>
					
					<option value="AS">American Samoa</option>
					
					<option value="AD">Andorra</option>
					
					<option value="AO">Angola</option>
					
					<option value="AI">Anguilla</option>
					
					<option value="AG">Antigua & Barbuda</option>
					
					<option value="AR">Argentina</option>
					
					<option value="AM">Armenia</option>
					
					<option value="AW">Aruba</option>
					
					<option value="au">Australia</option>
					
					<option value="AT">Austria</option>
					
					<option value="AZ">Azerbaijan</option>
					
					<option value="BS">Bahamas</option>
					
					<option value="BH">Bahrain</option>
					
					<option value="BB">Barbados</option>
					
					<option value="BY">Belarus</option>
					
					<option value="BE">Belgium</option>
					
					<option value="BZ">Belize</option>
					
					<option value="BJ">Benin</option>
					
					<option value="BM">Bermuda</option>
					
					<option value="BT">Bhutan</option>
					
					<option value="BO">Bolivia</option>
					
					<option value="BA">Bosnia & Herzegovina</option>
					
					<option value="BW">Botswana</option>
					
					<option value="BR">Brazil</option>
					
					<option value="IO">British Indian Ocean Territory</option>
					
					<option value="VG">British Virgin Islands</option>
					
					<option value="BN">Brunei Darussalam</option>
					
					<option value="BG">Bulgaria</option>
					
					<option value="BF">Burkina Faso</option>
					
					<option value="BI">Burundi</option>
					
					<option value="KH">Cambodia</option>
					
					<option value="CM">Cameroon</option>
					
					<option value="CA">Canada</option>
					
					<option value="CV">Cape Verde</option>
					
					<option value="KY">Cayman Islands</option>
					
					<option value="CF">Central African Republic</option>
					
					<option value="TD">Chad</option>
					
					<option value="CL">Chile</option>
					
					<option value="CN">China</option>
					
					<option value="CC">Cocos (Keeling) Islands</option>
					
					<option value="CO">Colombia</option>
					
					<option value="KM">Comoros</option>
					
					<option value="CG">Congo</option>
					
					<option value="CD">Congo, Dem. Rep.</option>
					
					<option value="CK">Cook Islands</option>
					
					<option value="CR">Costa Rica</option>
					
					<option value="CI">Cote D?ivoire (ivory Coast)</option>
					
					<option value="HR">Croatia</option>
					
					<option value="CU">Cuba</option>
					
					<option value="CY">Cyprus</option>
					
					<option value="CZ">Czech Republic</option>
					
					<option value="DK">Denmark</option>
					
					<option value="DJ">Djibouti</option>
					
					<option value="DM">Dominica</option>
					
					<option value="DO">Dominican Republic</option>
					
					<option value="TL">East Timor</option>
					
					<option value="EC">Ecuador</option>
					
					<option value="EG">Egypt</option>
					
					<option value="SV">El Salvador</option>
					
					<option value="GQ">Equatorial Guinea</option>
					
					<option value="ER">Eritrea</option>
					
					<option value="EE">Estonia</option>
					
					<option value="ET">Ethiopia</option>
					
					<option value="FK">Falkland Islands</option>
					
					<option value="FO">Faroe Islands</option>
					
					<option value="FJ">Fiji</option>
					
					<option value="FI">Finland</option>
					
					<option value="FR">France</option>
					
					<option value="GF">French Guiana</option>
					
					<option value="PF">French Polynesia</option>
					
					<option value="GA">Gabon</option>
					
					<option value="GM">Gambia</option>
					
					<option value="GZ">Gaza Strip</option>
					
					<option value="GE">Georgia</option>
					
					<option value="DE">Germany</option>
					
					<option value="GH">Ghana</option>
					
					<option value="GI">Gibraltar</option>
					
					<option value="GR">Greece</option>
					
					<option value="GL">Greenland</option>
					
					<option value="GD">Grenada</option>
					
					<option value="GP">Guadeloupe</option>
					
					<option value="GU">Guam</option>
					
					<option value="GT">Guatemala</option>
					
					<option value="GN">Guinea</option>
					
					<option value="GW">Guinea-bissau</option>
					
					<option value="GY">Guyana</option>
					
					<option value="HT">Haiti</option>
					
					<option value="HN">Honduras</option>
					
					<option value="HK">Hong Kong</option>
					
					<option value="HU">Hungary</option>
					
					<option value="IS">Iceland</option>
					
					<option value="IN">India</option>
					
					<option value="ID">Indonesia</option>
					
					<option value="IR">Iran</option>
					
					<option value="IQ">Iraq</option>
					
					<option value="IE">Ireland</option>
					
					<option value="IL">Israel</option>
					
					<option value="IT">Italy</option>
					
					<option value="JM">Jamaica</option>
					
					<option value="JP">Japan</option>
					
					<option value="JO">Jordan</option>
					
					<option value="KZ">Kazakhstan</option>
					
					<option value="KE">Kenya</option>
					
					<option value="KI">Kiribati</option>
					
					<option value="ko">Kosovo</option>
					
					<option value="KW">Kuwait</option>
					
					<option value="KG">Kyrgyzstan</option>
					
					<option value="LA">Laos</option>
					
					<option value="LV">Latvia</option>
					
					<option value="LB">Lebanon</option>
					
					<option value="LS">Lesotho</option>
					
					<option value="LR">Liberia</option>
					
					<option value="LY">Libya</option>
					
					<option value="LI">Liechtenstein</option>
					
					<option value="LT">Lithuania</option>
					
					<option value="LU">Luxembourg</option>
					
					<option value="MO">Macau</option>
					
					<option value="MK">Macedonia, Yugoslavia</option>
					
					<option value="MG">Madagascar</option>
					
					<option value="MW">Malawi</option>
					
					<option value="MY">Malaysia</option>
					
					<option value="MV">Maldives</option>
					
					<option value="ML">Mali</option>
					
					<option value="MT">Malta</option>
					
					<option value="MH">Marshall Islands</option>
					
					<option value="MQ">Martinique</option>
					
					<option value="MR">Mauritania</option>
					
					<option value="MU">Mauritius</option>
					
					<option value="YT">Mayotte</option>
					
					<option value="MX">Mexico</option>
					
					<option value="FM">Micronesia</option>
					
					<option value="MD">Moldova</option>
					
					<option value="MC">Monaco</option>
					
					<option value="MN">Mongolia</option>
					
					<option value="ME">Montenegro</option>
					
					<option value="MS">Montserrat</option>
					
					<option value="MA">Morocco</option>
					
					<option value="MZ">Mozambique</option>
					
					<option value="MM">Myanmar (Burma)</option>
					
					<option value="NA">Namibia</option>
					
					<option value="NT">Native - Country not in list</option>
					
					<option value="NR">Nauru</option>
					
					<option value="NP">Nepal</option>
					
					<option value="NL">Netherlands</option>
					
					<option value="AN">Netherlands Antilles</option>
					
					<option value="NC">New Caledonia</option>
					
					<option value="NZ">New Zealand</option>
					
					<option value="NI">Nicaragua</option>
					
					<option value="NE">Niger</option>
					
					<option value="NG">Nigeria</option>
					
					<option value="NU">Niue</option>
					
					<option value="NF">Norfolk Island</option>
					
					<option value="KP">North Korea</option>
					
					<option value="NN">Northern Ireland</option>
					
					<option value="NO">Norway</option>
					
					<option value="OM">Oman</option>
					
					<option value="PK">Pakistan</option>
					
					<option value="PW">Palau</option>
					
					<option value="PS">Palestinian Territory</option>
					
					<option value="PA">Panama</option>
					
					<option value="PG">Papua New Guinea</option>
					
					<option value="PY">Paraguay</option>
					
					<option value="PE">Peru</option>
					
					<option value="PH">Philippines</option>
					
					<option value="PN">Pitcairn</option>
					
					<option value="PL">Poland</option>
					
					<option value="PT">Portugal</option>
					
					<option value="PR">Puerto Rico</option>
					
					<option value="QA">Qatar</option>
					
					<option value="RE">Reunion</option>
					
					<option value="RO">Romania</option>
					
					<option value="RU">Russia</option>
					
					<option value="RW">Rwanda</option>
					
					<option value="GS">S. Georgia & South Sandwic</option>
					
					<option value="KN">Saint Kitts And Nevis</option>
					
					<option value="LC">Saint Lucia</option>
					
					<option value="PM">Saint Pierre and Miquelon</option>
					
					<option value="VC">Saint Vincent & Grenadines</option>
					
					<option value="WS">Samoa</option>
					
					<option value="SM">San Marino</option>
					
					<option value="ST">Sao Tome And Principe</option>
					
					<option value="SA">Saudi Arabia</option>
					
					<option value="SN">Senegal</option>
					
					<option value="RS">Serbia</option>
					
					<option value="SC">Seychelles</option>
					
					<option value="SL">Sierra Leone</option>
					
					<option value="SG">Singapore</option>
					
					<option value="SK">Slovakia</option>
					
					<option value="SI">Slovenia</option>
					
					<option value="SB">Solomon Islands</option>
					
					<option value="SO">Somalia</option>
					
					<option value="ZA">South Africa</option>
					
					<option value="KR">South Korea</option>
					
					<option value="ES">Spain</option>
					
					<option value="LK">Sri Lanka</option>
					
					<option value="SH">St. Helena</option>
					
					<option value="SD">Sudan</option>
					
					<option value="SR">Suriname</option>
					
					<option value="SJ">Svalbard and Jan Mayen</option>
					
					<option value="SZ">Swaziland</option>
					
					<option value="SE">Sweden</option>
					
					<option value="CH">Switzerland</option>
					
					<option value="SY">Syria</option>
					
					<option value="TW">Taiwan</option>
					
					<option value="TJ">Tajikistan</option>
					
					<option value="TZ">Tanzania</option>
					
					<option value="TH">Thailand</option>
					
					<option value="TG">Togo</option>
					
					<option value="TK">Tokelau</option>
					
					<option value="TO">Tonga</option>
					
					<option value="TT">Trinidad And Tobago</option>
					
					<option value="TN">Tunisia</option>
					
					<option value="TR">Turkey</option>
					
					<option value="TM">Turkmenistan</option>
					
					<option value="TC">Turks and Caicos Islands</option>
					
					<option value="TV">Tuvalu</option>
					
					<option value="UG">Uganda</option>
					
					<option value="UA">Ukraine</option>
					
					<option value="AE">United Arab Emirates</option>
					
					<option value="GB">United Kingdom</option>
					
					<option value="US">United States</option>
					
					<option value="UY">Uruguay</option>
					
					<option value="UM">US Outlying Islands</option>
					
					<option value="UZ">Uzbekistan</option>
					
					<option value="VU">Vanuatu</option>
					
					<option value="VA">Vatican City</option>
					
					<option value="VE">Venezuela</option>
					
					<option value="VN">Vietnam</option>
					
					<option value="VI">Virgin Islands, U.S.</option>
					
					<option value="WF">Wallis and Futuna</option>
					
					<option value="EH">Western Sahara</option>
					
					<option value="YE">Yemen</option>
					
					<option value="ZM">Zambia</option>
					
					<option value="ZW">Zimbabwe</option>
					
					</select>
                	<em style="color: red;"><strong>Note:</strong> Clicking Submit below will add your lucky numbers to our database and the ballot system will run <strong>random selection</strong>. If the numbers selected by the system matches your lucky numbers, you will get a congratulatory message from us via email with instructions on how to apply for your lottery. Rest assured we do not store or sell your email address!</em>
                    <br><br>
                    <em style="color: red;"><strong>WARNING: WorldLotteryUSA Lottery Draws are not applicable to persons under the age of 18.</strong> </em>
                    <br><br>
                    <center><button id="lsubmit" class="btn btn-success btn-lg">Submit</button></center>
                </form>
            
        
        </div>
</section><!--main-section-end-->