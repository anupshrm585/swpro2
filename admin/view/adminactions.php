<!DOCTYPE HTML>

<head>

    <title>Match</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>

<!-- JS Files -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
    
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/slides/slides.min.jquery.js"></script>
    <script type="text/javascript" src="js/cycle-slider/cycle.js"></script>
    <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="js/tabify/jquery.tabify.js"></script>
    <script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/scrolltop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/portfolio/filterable.js"></script>
    <script type="text/javascript" src="js/modernizr/modernizr-2.0.3.js"></script>
    <script type="text/javascript" src="js/easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
    <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
   <link rel="stylesheet" type="text/css" href="wtfdiary.css" media="screen" />

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>


<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
				$("#current").hide();
			    $("#preview").html('<img src="ajax-loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>
<SCRIPT LANGUAGE="JavaScript">
function formHandler(){
var URL = document.myform.newsite.options[document.myform.newsite.selectedIndex].value;
window.location.href = URL;
}
</SCRIPT>


</head>

<body>
    <?php
include "header.php";
?><!-- END header -->


    <div id="container">

    

    
    <div class="heading_bg" >
      <h2>Profile Detailing</h2></div>
    
      <ul id="tabify_menu" class="menu_tab" style="margin: 0px;">
      <li class="active"><a href="#fane1">Modify User Profile</a></li>  
          <li><a href="#fane2">Messages</a></li>
          <li><a href="#fane3">Match Profile</a></li>
          <li><a href="#fane4">Block User</a></li>
          <li><a href="#fane5">User Ratings</a></li>
      </ul>
     
     
      
      
      <div id="fane1" class="tab_content">
        <table width="612" border="1">
         <form name="f1" method="post" action="../controller/UpdateUserDetails.php" onSubmit="return valid(this);">
  
            <tr>
            <td>Profile for:</td>   
            <td><select name="profilefor"  value=""><option></option>
                <option value="Self" label="Self">Self</option>
                <option value="son" label="Son">Son</option>
                <option value="Daughter" label="Daughter">Daughter</option>
                <option value="Brother" label="Brother">Brother</option>
                <option value="Sister" label="Sister">Sister</option>
                <option value="Friend" label="Friend">Friend</option>
                <option value="Relative" label="Relative">Relative</option>
                </select>
            </td>
            </tr>
            <tr>
            <td><input type="text" value="" name="fname" placeholder="First Name"/></td><td><input type="text" value="" name="lname" placeholder="Last Name"/></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td><input name="genn" type="radio" value="male"  >Male <input name="genn" type="radio" value="female" >Female </td>
            </tr>
            <tr>
            <td>Date of Birth:</td>
            <td><input type="text" value="" name="dob" placeholder="DD/MM/YYYY"/></td>
            </tr>
            <tr>
            <td>Religion:</td>   
             <td> <select name="religion" value=""><option></option>
                    <option value="Hindu" label="Hindu">Hindu</option>
                    <option value="Muslim" label="Muslim">Muslim</option>
                    <option value="Christian" label="Christian">Christian</option>
                    <option value="Sikh" label="Sikh">Sikh</option>
                    <option value="Parsi" label="Parsi">Parsi</option>
                    <option value="Jain" label="Jain">Jain</option>
                    <option value="Buddhist" label="Buddhist">Buddhist</option>
                    <option value="Jewish" label="Jewish">Jewish</option>
                    <option value="No Religion" label="No Religion">No Religion</option>
                    <option value="Spiritual" label="Spiritual">Spiritual</option>
                    <option value="Other" label="Other">Other</option>
                    </select>
             </td> 
     </tr>
     <tr>
     <td >Mother Tongue:</td>   
     <td> <select name="mothertongue" value=""><option></option>
            <option value="Assamese" >Assamese</option><option value="Bengali" >Bengali</option><option value="English" >English</option><option value="Gujarati" >Gujarati</option><option value="Hindi" >Hindi</option><option value="Kannada" >Kannada</option><option value="Konkani" >Konkani</option><option value="Malayalam" >Malayalam</option><option value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Oriya" >Oriya</option><option value="Punjabi" >Punjabi</option><option value="Sindhi" >Sindhi</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option value="Urdu" >Urdu</option><optgroup id='mother_tongue-optgroup-All Mother Tongues' label='All Mother Tongues'>All Mother Tongues</optgroup><option value="Aka" >Aka</option><option value="Arabic" >Arabic</option><option value="Assamese" >Assamese</option><option value="Awadhi" >Awadhi</option><option value="Bengali" >Bengali</option><option value="Bhojpuri" >Bhojpuri</option><option value="Chattisgarhi" >Chattisgarhi</option><option value="Coorgi" >Coorgi</option><option value="Dogri" >Dogri</option><option value="English" >English</option><option value="French" >French</option><option value="Garhwali" >Garhwali</option><option value="Gujarati" >Gujarati</option><option value="Haryanavi" >Haryanavi</option><option value="Himachali/Pahari" >Himachali/Pahari</option><option value="Hindi" >Hindi</option><option value="Hindko" >Hindko</option><option value="Kannada" >Kannada</option><option value="Kashmiri" >Kashmiri</option><option value="Konkani" >Konkani</option><option value="Kumaoni" >Kumaoni</option><option value="Kutchi" >Kutchi</option><option value="Magahi" >Magahi</option><option value="Maithili" >Maithili</option><option value="Malay" >Malay</option><option value="Malayalam" >Malayalam</option><option value="Manipuri" >Manipuri</option><option value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Nepali" >Nepali</option><option value="Oriya" >Oriya</option><option value="Pashto" >Pashto</option><option value="Persian" >Persian</option><option value="Punjabi" >Punjabi</option><option value="Rajasthani" >Rajasthani</option><option value="Russian" >Russian</option><option value="Sindhi" >Sindhi</option><option value="Sinhala" >Sinhala</option><option value="Spanish" >Spanish</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option value="Tulu" >Tulu</option><option value="Urdu" >Urdu</option></select></td>
     </tr>

<tr>
    <td>Living In:</td>
    <td> <select name="livingin" value=""><option></option>
            <option value="USA" >USA</option><option value="United Kingdom" >UK</option><option value="United Arab Emirates" >UAE</option><option value="Canada" >Canada</option><option value="Australia" >Australia</option><option value="New Zealand" >New Zealand</option><option value="Pakistan" >Pakistan</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Kuwait" >Kuwait</option><option value="South Africa" >South Africa</option><optgroup id='countryofresidence-optgroup-All Countries' label='All Countries'>All Countries</optgroup><option value="Afghanistan" >Afghanistan</option><option value="Australia" >Australia</option><option value="Austria" >Austria</option><option value="Bahrain" >Bahrain</option><option value="Bangladesh" >Bangladesh</option><option value="Belgium" >Belgium</option><option value="Botswana" >Botswana</option><option value="Brunei" >Brunei</option><option value="Canada" >Canada</option><option value="Chile" >Chile</option><option value="China" >China</option><option value="Cyprus" >Cyprus</option><option value="Denmark" >Denmark</option><option value="Dominican Republic" >Dominican Republic</option><option value="Fiji Islands" >Fiji Islands</option><option value="Finland" >Finland</option><option value="France" >France</option><option value="Germany" >Germany</option><option value="Greece" >Greece</option><option value="Guyana" >Guyana</option><option value="Hong Kong SAR" >Hong Kong SAR</option><option value="Hungary" >Hungary</option><option value="India" >India</option><option value="Indonesia" >Indonesia</option><option value="Iran" >Iran</option><option value="Ireland" >Ireland</option><option value="Israel" >Israel</option><option value="Italy" >Italy</option><option value="Jamaica" >Jamaica</option><option value="Japan" >Japan</option><option value="Kenya" >Kenya</option><option value="Kuwait" >Kuwait</option><option value="Malaysia" >Malaysia</option><option value="Maldives" >Maldives</option><option value="Mauritius" >Mauritius</option><option value="Mexico" >Mexico</option><option value="Nepal" >Nepal</option><option value="Netherlands" >Netherlands</option><option value="Netherlands Antilles" >Netherlands Antilles</option><option value="New Zealand" >New Zealand</option><option value="Norway" >Norway</option><option value="Oman" >Oman</option><option value="Pakistan" >Pakistan</option><option value="Philippines" >Philippines</option><option value="Poland" >Poland</option><option value="Qatar" >Qatar</option><option value="Russia" >Russia</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Singapore" >Singapore</option><option value="South Africa" >South Africa</option><option value="Spain" >Spain</option><option value="Sri Lanka" >Sri Lanka</option><option value="Sweden" >Sweden</option><option value="Switzerland" >Switzerland</option><option value="Tanzania" >Tanzania</option><option value="Thailand" >Thailand</option><option value="Trinidad and Tobago" >Trinidad and Tobago</option><option value="USA" >USA</option><option value="United Arab Emirates" >UAE</option><option value="United Kingdom" >UK</option></select>
    </td>
</tr>
<tr>
    <td></td>
    <td><input name="locationn" type="radio" value="nri">NRI <input name="locationn" type="radio" value="indian">INDIAN
    </td>
</tr>
<tr>
    <td></td>
<td>
Green Card Holder<input name="nriopt" type="radio" value="green">

Job Permit<input name="nriopt" type="radio" value="job_permit" >

Own Business<input name="nriopt" type="radio" value="own_business" >
</td>
</tr>

<tr>
<td>Membership Type:</td>
     <td> 


<select name="memtype">
<option value=""></option>
<option value="gold">Gold</option>
<option value="silver">Silver</option>
<option value="platimun">Platinum</option>
</select>
</td>

</tr>
 <tr>
     <td></td>
<td>
</td>
</tr>


<tr><td></td><td></td></tr>

<tr>
    <td></td>
 <td><input type="checkbox" name="paid">Paid </td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="approve">Approve</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="update" class="button success" /></td>
</tr>
</form>
</table>                



      </div>
      
       <div id="fane2" class="tab_content">
          <form action="../controller/MessageController.php" method="post">
                <div class="messages" style="padding:2px;">
                    Admin Message
                    
                </div>    
                    <div class="messages">
                   User Message
                    
                </div>    
                    <p><textarea name="sendmessage" placeholder="Enter message for admin" style="height: 100px; width: 80%;padding:5px; resize: none"></textarea></p>
                    <input type="submit" value="Send Message">
                
               </form>
       
        </div>
      <div id="fane3" class="tab_content">
          Match Profile
          
        </div>
      
      <div id="fane4" class="tab_content">
            Block User
      </div>
    <div id="fane5" class="tab_content">
            User Ratings
      </div>
  
      
     
 <div style="clear:both;height:10px"></div>
   </div>
</body>
</html>



