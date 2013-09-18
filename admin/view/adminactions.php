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
      
        Modify User Details      
         
      </div>
      
       <div id="fane2" class="tab_content">
           Messages
       
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
  
      
     
 <div style="clear:both"></div>
   </div>
</body>
</html>



