<!doctype html>
<html class="no-js">
 
	<head>
		<meta charset="utf-8"/>
		<title>Life Choice</title>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="view/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="view/js/jquery-1.6.4.min.js"></script>
		<script src="view/js/css3-mediaqueries.js"></script>
		<script src="view/js/custom.js"></script>
		<script src="view/js/tabs.js"></script>
		
		<!-- Tweet -->
		<link rel="stylesheet" href="view/css/jquery.tweet.css" media="all"  /> 
		<script src="view/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="view/css/superfish.css" /> 
		<script  src="view/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="view/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="view/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="view/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="view/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="view/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="view/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="view/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="view/css/flexslider.css" >
		<script src="view/js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="view/css/lessframework.css"/>
		
		<!-- modernizr -->
		<script src="view/js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="view/css/skin.css"/>
		

	</head>
	
	<body lang="en" background="view/img/body_bg.png">
	
		
	
		<header class="clearfix">
		
			<!-- top widget --><!-- ENDS top-widget -->
		
			<div class="wrapper clearfix">
			  <nav>
				  <ul id="nav" class="sf-menu">
						<li class="current-menu-item"><a href="#"></a></li>
						<li></li>
				  </ul>
					<div id="combo-holder"></div>
				</nav>
			</div>
		</header>
		
		

		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper">
 
				<!-- slider holder -->
				<div id="slider-holder" class="clearfix">
					
					<!-- slider -->
			      
		        	<!-- ENDS slider -->
		        	
		        	<img src="view/img/logo.png">
		    <!--  <h1 class="home-block-heading"><span>Life Choice</span></h1>-->
                <h2 style="color: #FFF">Your personal assistant to help plan and marriage.</h2>	
		        	<!-- Headline -->
		        	<div id="headline">
                    
		        		<h1 align="center">Login</h1>
		        		<form action="controller/LoginController.php" method="post">
					
					<label></label>
					<input class="field" type="text" name="email" id="log" value=""  placeholder="Email" size="" />
					<label ></label>
					<input class="field" type="password" name="pass" id="pwd" placeholder="Password" size="" /><br>

                                        <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<br>

					<input type="submit" name="submit" value="Login" class="bt_login" /><br>

                    
					<a class="lost-pwd" href="#" onclick="document.getElementById('something').style.display='inherit';return false" >Lost your password?</a><br>
                     <a href="view/registration.php">Register</a>
                   </form>
                   <!-- <a href=""  >LOST PASSWORD</a>-->
                   <div id="something" style="display:none">

                   <form  name="pass"  method="post" action="pass.php?m=forgot">
                    <input  type="text" id="" placeholder="Enter Your Email" name="email" /> <input type="submit" name="submit" value="submit" id="">
                   
                    
				</form>
</div>
		        	</div>
		        	<!-- ENDS headline -->
		        	
		        	
				</div>
				<!-- ENDS slider holder -->
				
				
				<!-- home-block --><!-- ENDS home-block -->
	        	
	        	
	        	<!-- home-block -->
	        	<div class="home-block">
	        		<h2 class="home-block-heading"><span></span></h2>
	        		<div class="one-fourth-thumbs clearfix">
	        			
	        			
	        			<figure>
		        			<figcaption>
	        					<strong>Plans</strong>
	        					<span>BASIC- $999</span>
	        					<span>SILVER- $2999</span>
                                <span>GOLD- $3999</span>
	        					<a href="plan.php" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="plan.php"  class="thumb"><img src="view/img/3.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure>
		        			<figcaption>
	        					<strong>Advertise with us</strong>
	        					<span></span>
	        					
	        					<a href="#" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="#"  class="thumb"><img src="view/img/3.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure>
		        			<figcaption>
	        					<strong>Travel with us</strong>
	        					<span></span>
	        					
	        					<a href="http://www.thetravelconnection.org" class="opener" target="_blank"></a>
			        		</figcaption>
			        		
			        		<a href="http://www.thetravelconnection.org" target="_blank" class="thumb"><img src="view/img/2.png" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure class="last">
		        			<figcaption>
	        					<strong>PAVF</strong>
	        					<span>Be vegan</span>
	        					
	        					<a href="http://www.pavf.org"  target="_blank" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="http://www.pavf.org" target="_blank"  class="thumb"><img src="view/img/1.png" alt="Alt text" /></a>
		        		</figure>
		        		
		        		 
		        		
	        		</div>
                    <table align="center"  width="500">
                    <tr align="center"><td align="center">
	        		<a href="#" > <h5 style="color:#FFF"></h5> </a></td><td>
                    <a href="about.php" > <h5 style="color:#FFF">ABOUT</h5> </a></td><td>
                    <a href="plan.php"> <h5 style="color:#FFF">PLANS</h5> </a></td><td>
                    <a href="contact.php" > <h5 style="color:#FFF">CONTACT</h5> </a></td><td>
                    </a><a href="faq.php" > <h5 style="color:#FFF">FAQ</h5></a></td></tr>
 <tr align="right"><td>Powered by:<a href="www.softwebs.us" style="color:#FFF">SOFT WEBS</a></td></tr></table>
	        		
	        	</div>
	        	<!-- ENDS home-block -->
	        		        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
		
		<footer></footer>
					
	</body>
	
</html>