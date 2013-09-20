<?php
    require 'chkSession.php';


?>

<!DOCTYPE HTML>

<head>

    <title></title>
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

</head>

<body>
   <?php
    include "header.php";
	
	?><!-- END header -->


    <div id="container">

   <!-- <h1>Template Elements</h1>-->
    
    <div class="one-half">
    
    <div class="heading_bg">
      <h2>Upload Video/Bio-data</h2></div>
	   
	  
    <form name="" method="POST" action="../controller/StepTwoUploadController.php" enctype="multipart/form-data">
    <table border="0">
    
    
     
      <th> <!--<a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">---->
      Image(jpeg, png, gif)<br>
      <input type="FILE" name="photo" value=""/></th>
      <br>
      <tr>
      
      
      <th> <!----------<a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">--->
      Video only  mp4 format or leave it blank
	  <input type="FILE" name="video" value="" /></th></tr>
       <tr>
      
      
      <th> <!----------<a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">---->
      biodata<br>
	  <input type="FILE" name="biodata" value="" /></th></tr>
      <tr>
        <td><input type="submit" name="submit" value="submit"></td>
        
      </tr>
      
     <!-- <tr>
        <td>Some</td>
        <td>Data</td>
        <td>Goes</td>
      </tr>
      <tr>
        <td>Here</td>
        <td>In</td>
        <td>This</td>
      </tr>
      <tr>
        <td>Table</td>
        <td>Cool</td>
        <td>Oh Yeah!</td>
      </tr>
      <tr>
        <td>Another Row</td>
        <td>Almost There</td>
        <td>Last Cell</td>
      </tr>-->
  </table>
  </form>
  
 <!-- <p><a href="#" class="button">Button</a></p>
  <p><a href="#" class="button">Button With Long Text</a></p>
  <p><a href="#" class="button" style="font-size: 18px">Large Button</a></p>
  <p><a href="#" class="button" style="font-family: Georgia, 'Times New Roman', Times, serif ">Button With Custom Font</a></p>-->

    </div>
    
    <!-- END First Column -->
    
  
    
    
    <!-- END Second Column -->
    


    <div style="clear:both; height: 40px"></div>

    </div><!-- close container -->


       <?php
    include "footer.php";
	
	?>

</body>
</html>