<?php
    require 'chkSession.php';

?>

<!DOCTYPE HTML>

<head>

    <title>Video</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
   body {
      font-family: "myriad pro", tahoma, verdana, arial, sans-serif;
      font-size: 14px;
      margin: 0;
      padding: 0;
   }
   #content {
      margin: 50px auto;
      max-width: 982px;
   }
      </style>

   <!-- The "minimalist" skin, "minimalist.css", "functional.css" and "playful.css" are available -->
   <link rel="stylesheet" href="//releases.flowplayer.org/5.4.3/skin/minimalist.css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>

<!-- JS Files -->
 <!-- Flowplayer depends on jquery -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   <!-- Flowplayer-->
   <script src="//releases.flowplayer.org/5.4.3/flowplayer.min.js"></script>

   <script>
   // configure rtmp for this demo
   flowplayer.conf.rtmp = "rtmp://s3b78u0kbtx79q.cloudfront.net/cfx/st";
   // install player manually
   $(function() {
      $(".player").flowplayer({
         // reverse fraction of video aspect ratio
         // video dimensions: 470px / 250px
         ratio: 25/47
      });
   });
</script>

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

</head>

<body>

    <?php
include "header.php";
?><!-- END header -->
 
    <div id="container">


    <div class="content">
        <div class="heading_bg">
      <h2>Your Video</h2>
	  </div>
	  
		<a href="myprofile.php">Back to Home</a>
                <form name="f2" method="post" action="../controller/UpdateBioController.php" enctype="multipart/form-data" >
      <table width="100%" border="1">
        <tr align="center">
          <td align="center" style="padding:20px">
		 <div id="content">

                <div class="player ">
                    <video>
                     <source type="video/webm"  src="http://stream.flowplayer.org/black/470x250.webm">
                    <source type="video/mp4"   src="http://abpnews.newsbullet.in/livetv/testvideo.mp4">
                     <source type="video/ogg"   src="http://stream.flowplayer.org/black/470x250.ogv">
                     <source type="video/flash" src="mp4:black/470x250.mp4">   
                    </video>
                </div>

                </div><!--/end content -->

		  </td>
        <tr>
         <tr>
             <td>
		 
		 <input type="hidden" name="type" value="video">
                 <input type="file" name="video" id="photo"><br>
                 
		 <input type="submit" name="submit" value="Save" >
            
         
		 </td>
        </tr>
      </table>
	 </form>
    </div>

    <div style="clear:both; height: 40px"></div>

    </div><!-- close container -->


    <div id="footer">

    <!-- First Column --><!-- Second Column --><!-- Third Column --><!-- Fourth Column -->
    
    <div class="one-fourth last">
       
    </div>

    <div style="clear:both"></div>
    
    </div> <!-- END footer -->

<div id="shadow"></div><!-- Dim Lights (video) -->

</body>
</html>
