<?php
include 'chkSession.php';
$email=$_SESSION['email'];
    require '../model/DbConn.php';
    require '../model/Select.php';  
    $select=new Select();
?>
<!DOCTYPE HTML>

<head>

    <title>Video</title>
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


    <div class="content">
        <div class="heading_bg">
      <h2>View Messages</h2>
	  </div>
	  
		<a href="myprofile.php">Back to Home</a>
                <form action="../controller/MessageController.php" method="post">
                  
                    <div class="messages" style="">
                   <?php
                        $rows=$select->getUserChat($email);
                        if(is_array($rows))
                        {
                            foreach($rows as $row)
                             {
                                if($row["to_user"] == "admin")
                                {
                                    echo ' <div style="padding:5px;padding-left:10px;width:95%;margin-bottom:2px"><h4 style="margin:0px">Me: </h4> '.$row["message"].'<br>'.$row["timestamp"].'</div>'; 
                                }                                
                                else
                                {
                                   echo '<div style="padding:5px;padding-left:10px;width:95%;margin-bottom:2px"><h4 style="margin:0px">Admin:</h4>'.$row["message"].'<br>'.$row["timestamp"].'</div>'; 
                                }
                            }
                        }
                  
                  ?>
                    
                </div>    
                    <p><textarea name="sendmessage" placeholder="Enter message for admin" style="height: 100px; width: 80%;padding:5px; resize: none"></textarea></p>
                    <input type="submit" value="Send Message">
                
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
