<!DOCTYPE HTML>

<head>

    <title>Profile</title>
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
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script src="http://tab-slide-out.googlecode.com/files/jquery.tabSlideOut.v1.3.js"></script>

    
                

      
</head>

<body>
<div id="divTopLeft" style="position: absolute; width: 39px;">
<!-- Start - put your content here --->

 <a href="contact.html"><img src="contact_us.gif" /></a>


<!-- End   - put your content here --->
</div>

<script type="text/javascript">
var ns = (navigator.appName.indexOf("Netscape") != -1);
var d = document;
function JSFX_FloatDiv(id, sx, sy)
{
	var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
	var px = document.layers ? "" : "px";
	window[id + "_obj"] = el;
	if(d.layers)el.style=el;
	el.cx = el.sx = sx;el.cy = el.sy = sy;
	el.sP=function(x,y){this.style.left=x+px;this.style.top=y+px;};

	el.floatIt=function()
	{
		var pX, pY;
		pX = (this.sx >= 0) ? 0 : ns ? innerWidth : 
		document.documentElement && document.documentElement.clientWidth ? 
		document.documentElement.clientWidth : document.body.clientWidth;
		pY = ns ? pageYOffset : document.documentElement && document.documentElement.scrollTop ? 
		document.documentElement.scrollTop : document.body.scrollTop;
		if(this.sy<0) 
		pY += ns ? innerHeight : document.documentElement && document.documentElement.clientHeight ? 
		document.documentElement.clientHeight : document.body.clientHeight;
		this.cx += (pX + this.sx - this.cx)/8;this.cy += (pY + this.sy - this.cy)/8;
		this.sP(this.cx, this.cy);
		setTimeout(this.id + "_obj.floatIt()", 40);
	}
	return el;
}
JSFX_FloatDiv("divTopLeft", 10,190).floatIt();
</script>



  <?php
    include "header.php";
	
	?><!-- END header -->


    <div id="container">

  <div class="one-half">
    
  <div class="heading_bg">
    <h2>Edit Profile Details</h2></div>
  <a href="myprofile.php">Back to Home</a>


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
</select> </td>  </tr>
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
</select> </td> 
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
    <td>
<input name="locationn" type="radio" value="nri">NRI <input name="locationn" type="radio" value="indian">INDIAN
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


<tr><td></td><td>

<tr><td></td>
 <td>
 


<input type="submit" value="update" class="button success" /></td></tr>






</form>

  
</table>

   
    
    </div>
    
    
    
    
    
    
    
    <!-- END First Column -->
    
    
    
    <!-- END Second Column -->
    


    <div style="clear:both; height: 40px">
        
    </div>

    </div> <!-- close container -->


      <?php
    include "footer.php";
	
	?>

</body>



</html>



