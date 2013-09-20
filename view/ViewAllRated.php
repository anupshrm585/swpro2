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
      <h2>View Rated Match</h2>
	  </div>
	  
		<a href="myprofile.php">Back to Home</a>
                <form action="../controller/RateSelectedController.php" method="post">
               <?php
                     $ids=array();
                     
                     $rows=$select->getRatedMatchedProfile($email);
                     if(is_array($rows))
                     {
                    foreach($rows as $row)
                    {
                        ?>
                     <div style="border:1px solid #ccc; padding:15px; margin-bottom:3px">
                        
                            <?php 
                                $image=$select->getUserImage($row["to_user"]);
                                     
                                if(is_array($image))
                                {
                                foreach ($image as $img)                                    
                                {
                                    ?>
                                    <div style="float:left; margin-right: 15px; width:210;">
                                        
                                  <?php                                     
                                    echo '<img src="../controller/usersdata/'.$img["image"].'" width=210 height=180>';                                    
                                         
                                    ?>
                             
                                    </div>
                             <?php   }
                                }
                                else
                                {
                            ?>
                                    <div style="float:left; margin-right: 15px; width:210;">
                                        
                                  <?php
                                  echo '<img src="" width=210 height=180>';
                                    ?>
                             
                                    </div>
                        <?php
                                }?>
                         <div style="float:left;width: 60%">
                    <?php
                    
                            $userdet=$select->getUserDetails($row["to_user"]);
                            foreach ($userdet as $usr)
                            {
                                echo '<h3 style="margin-bottom:1px">'.$usr["fname"].' '.$usr["lname"].'</h3><br>';
                                echo $usr["dob"].'<br>';
                                echo $usr["religion"].'<br>';
                                echo $usr["country_living_in"].'<br>';
                            }
                    ?>
                    Rating:
                    <select name="<?php echo $row['id'];?>">
                        <option value="<?php echo $row['rating']?>"><?php echo $row['rating']?></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>                   
                    <?php
                    
                    array_push($ids, $row['id']);
                    ?>
                     <div style="clear: both"></div>
                </div>
                    <?php
                    }
                   
                    ?>
                    <input type="hidden" name="ids" value="<?php echo htmlentities(serialize($ids)); ?>">
                   
                    <p align="center"><input class="button success" type="submit" value="Submit"></p>
               </form>
        <?php
        }
        else
            echo '<h3>Waiting For Your Match</h3>';
        ?>
        
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
