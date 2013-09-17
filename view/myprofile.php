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
      <h2>Welcome</h2>   
      </div>
      <div>
	User Name
      <table width="100%" height="190" border="1">
          
        <tr >
          <td><a href="EditPhoto.php">Your Image</a></td>
        </tr>
         <tr>
             <td><a href="EditProfile.php">Your Profile</a></td>
        </tr>
        <tr>
            <td><a href="viewbio.php">view  biodata</a></td>
            </tr>
            <tr>
            <td><a href="viewvideo.php">view  video</a></td>
            </tr>
        
        
      </table>
      </div>  
    
    </div>
<div class="one-half last">
    
    <div class="heading_bg">
      <h2 style="color:#32015A">Choose and Rate</h2>     
    </div>
    <div>
        <a href="RateSelected.php">Rate Them</a>
    <div class="messages" style="height:190px;overflow-y: scroll">         
              <div class="adminMessage"></div>
              <div class="userMessage"></div>
           </div>
    
         </div>
   </div>
        <div class="one-half">     
          <div class="heading_bg" >
      <h2 style="color:#32015A">Rated </h2></div>
      <a href="ViewAllRated.php">View All</a>
      <div class="messages" style="width:100%;height:200px;overflow-y:scroll; margin-right:10px">
      <div class="ratedpersons">
          Selected Name
          Rating:
          </div>
       </div>
    </div>
      <div class="one-half last">     
    <div class="heading_bg" >
      <h2 style="color:#32015A">Message From Admin </h2>
    </div>
          <div>
               <a href="ViewMessages.php">View Messages</a>
          <div class="messages" style="height:200px;overflow-y: scroll">         
              <div class="adminMessage"></div>
              <div class="userMessage"></div>
           </div>
         
      </div>
    </div>
   
  

    <div style="clear:both; height: 10px">    
        
        
    </div>

    </div> <!-- close container -->


      <?php
    include "footer.php";
	
	?>

</body>



</html>



