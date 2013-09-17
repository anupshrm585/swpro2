<head>

    <title>Home</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="style1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu1.css">
    
    <link rel="stylesheet" href="css/nivo-slider1.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="boxes/css/style5.css" />
    
    
    <!--LOGIN PANEL -->
    
    <!-- stylesheets -->
  	<link rel="stylesheet" href="css2/style1.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css2/slide1.css" type="text/css" media="screen" />
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js2/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js2/slide.js" type="text/javascript"></script>
    
    <!-- LOGIN ENDS -->
    
    <!-- JS Files -->
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
    
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
                jQuery.noConflict()(function($){
                    $('#ei-slider').eislideshow({
                        animation			: 'center',
                        autoplay			: true,
                        slideshow_interval	: 3000,
                        titlesFactor		: 0
                    });
                });
    </script>
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

   <div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="check.php" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Email:</label>
					<input class="field" type="text" name="email" id="log" value="" size="" />
					<label class="grey" for="pass">Password:</label>
					<input class="field" type="password" name="pass" id="pwd" size="" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
                    
					<a class="lost-pwd" href="#" onclick="document.getElementById('something').style.display='inherit';return false" >Lost your password?</a>
                   </form>
                   <!-- <a href=""  >LOST PASSWORD</a>-->
                   <div id="something" style="display:none">
                   <form  name="pass"  method="post" action="pass.php?m=forgot">
                    <input  type="text" id="" placeholder="Enter Your Email" name="email" /> <input type="submit" name="submit" value="submit" id="">
                    
				</form>
                </div>
			</div>
			
		</div>
</div> <!-- /login -->	
</div>
	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li><a href="registration.php">Register</a></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

    <div class="header">
    
    <div id="site_title"><a href="index.php"><img src="img/logo.png" /></a></div>

    <!-- Main Menu -->
    
   
    
    
    </div><!-- END header -->
    
    <div style="clear:both"></div>

            
            <div class="wrapper">
            
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <img src="img/large/1.jpg" alt="image01" height="400px" width="100%">
                            <div class="ei-title">
                                <h2>Professional</h2>
                                <h3>Lightning Equipment</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/2.jpg" alt="image02" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>Passionate</h2>
                                <h3>Ballerina</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/8.jpg" alt="image03" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>Tranquility</h2>
                                <h3>in red</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/4.jpg" alt="image04" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>Vintage</h2>
                                <h3>Beauty</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/5.jpg" alt="image05" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>Mystery</h2>
                                <h3>Woman</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/6.jpg" alt="image06" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>In the</h2>
                                <h3>Spotlight</h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/large/7.jpg" alt="image07" height="400px" width="100%"/>
                            <div class="ei-title">
                                <h2>A touch of</h2><h3>Fashion</h3>
                            </div>
                        </li>
                    </ul><!-- ei-slider-large -->
        <ul class="ei-slider-thumbs">
                       <li class="ei-slider-element">Current</li>
                        <li><a href="#">Slide 1</a></li>
                        <li><a href="#">Slide 2</a></li>
                        <li><a href="#">Slide 3</a></li>
                        <li><a href="#">Slide 4</a></li>
                        <li><a href="#">Slide 5</a></li>
                        <li><a href="#">Slide 6</a></li>
                        <li><a href="#">Slide 7</a></li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->

            </div><!-- wrapper -->
            
            <marquee behavior="scroll" direction="left" ><h1 style="color:#F00;">Site Under Construction</h1></marquee>
            
             <div class="box_highlight">
            
    <h1 style="font-size:25px; letter-spacing: 16px; padding-top: 20px; text-align:center; text-transform: uppercase; color:#32015A">
    Welcome to Life choice</h1>
    
    </div>
    

<div id="container" style="margin-top: 30px">
<ul class="ca-menu" style="margin: 40px 0">
                    <li>
                        <a href="about.php">
                            <span class="ca-icon" style="color:#333">T</span>
                            <div class="ca-content">
                                <h2 class="ca-main" style="color:#32015A"><strong>About Us</strong></h2>
                                <h3 class="ca-sub" style="color:#666"><b>About the Life Choice</b></h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="registration.php">
                            <span class="ca-icon" style="color:#333">n</span>
                            <div class="ca-content">
                                <h2 class="ca-main" style="color:#32015A"><strong>Register</strong></h2>
                                <h3 class="ca-sub" style="color:#666"><b>Advanced use of technology</b></h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="plan.php">
                            <span class="ca-icon" style="color:#333">u</span>
                            <div class="ca-content">
                                <h2 class="ca-main" style="color:#32015A"><strong>Plans</strong></h2>
                                <h3 class="ca-sub" style="color:#666"><b>Membership Charges</b></h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <span class="ca-icon" style="color:#333">b</span>
                            <div class="ca-content">
                                <h2 class="ca-main" style="color:#32015A"><strong>Contact Us</strong></h2>
                              <h3 class="ca-sub" style="color:#666"><B>Professionals in action</B></h3>
                            </div>
                        </a>
                    </li>
                </ul>


    <div style="clear:both; height: 40px"></div>
    <div style="clear:both; height: 40px"></div>

</div>

<!-- END container -->


    <div id="footer" align="center">

    <!-- First Column --><!-- Second Column --><!-- Third Column -->
    <div class="one-fourth">
    <div id="social_icons" align="center">  &ensp;
    </div>
        
    </div> 
  <div class="one-fourth">
    <div id="social_icons" align="center">Powered by <a href="http://www.softwebs.co.in"><b>Soft Webs</b><br />
  </div>
        
    </div>
    
    <!-- Fourth Column -->

    <div style="clear:both"></div>
    
    </div> <!-- END footer -->

</body>
</html>