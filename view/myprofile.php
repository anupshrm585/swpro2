<?php
include 'chkSession.php';
$email=$_SESSION['email'];
    require '../model/DbConn.php';
    require '../model/Select.php';  
    $select=new Select();

?>
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
      <div style="margin-bottom: 0px;padding-left: 6px;">
          <ul id="tabify_menu" class="menu_tab" style="margin: 0px ">
	<li><a href="EditPhoto.php">Edit Image</a></li>
        <li><a href="EditProfile.php">View Profile</a></li>
        <li><a href="viewbio.php">View  Bio Data</a></li>
        <li><a href="viewvideo.php">View  Video</a></li>
        </ul>
          <div style="clear:both"></div>
          </div>
      <div class="messages" style="margin-top:0px;height:210px; ">
                
                <?php
                
                    
                    $rows=$select->getUserImage($email);
                    
                    foreach ($rows as $row){
                        if(isset($row["image"])){
                        ?>
                
                <div style="width:220px;float:left;padding: 12px"><img src="../controller/usersdata/<?php echo $row["image"];?>" width="210" height="180" style="margin: 0px;padding-bottom:  0px;border:1px solid #ccc"></div>
                                    
                <?php
                    }
                    }
                ?>
            <div style="width:200px;float:left;padding:20px 10px;"><?php
                
                $rows=$select->getUserDetails($email);
                foreach ($rows as $row)
                {
                    echo "<h3 style='margin:2px'>".$row["fname"]." ".$row["lname"]."</h3></br>";
                    echo $row["dob"]."<br>";
                    echo $row["country_living_in"]."<br>";
                    echo $row["email"];
                }
                
                ?>

</div>
                <div style="clear: both;"></div> 
           
      </div>  
    
    </div>
<div class="one-half last">
    
    <div class="heading_bg">
      <h2 style="color:#32015A">Choose and Rate</h2>     
    </div>
    <div>
        <div style="margin-bottom: 0px;padding-left: 6px;">
          <ul id="tabify_menu" class="menu_tab" style="margin: 0px ">
	<li><a href="RateSelected.php">Rate Them</a></li>
        </ul>
            </div>
        
    <div class="messages" style="height:210px;overflow-y: scroll;margin-top:0px " >         
              <?php
                    $rows=$select->getUnratedMatchedProfile($email);
                    foreach($rows as $row)
                    {
                        echo $row["to_user"]."</br>";
                    }
              
              ?>
           </div>
    <div style="clear:both"></div>
         </div>
   </div>
        <div class="one-half">     
          <div class="heading_bg" >
      <h2 style="color:#32015A">Rated </h2></div>
      <div style="margin-bottom: 0px;padding-left: 6px;">
          <ul id="tabify_menu" class="menu_tab" style="margin: 0px ">
	<li><a href="ViewAllRated.php">View All</a></li>
        </ul>
            </div>
      
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
          <div style="margin-bottom: 0px;padding-left: 6px;">
          <ul id="tabify_menu" class="menu_tab" style="margin: 0px ">
	<li><a href="ViewMessages.php">View Messages</a></li>
        </ul>
            </div>
          
               
          <div class="messages" style="height:200px;overflow-y: scroll">         
              <div class="adminMessage"></div>
              <div class="userMessage"></div>
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



