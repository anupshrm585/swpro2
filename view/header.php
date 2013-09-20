<div class="header">
    
	
    <div id="site_title"><a href="index.php"><img src="img/logo.png" width="218" height="93" /></a></div>

    <!-- Main Menu -->
    
     <ol id="menu">
             <li class="active_menu_item"><a href="../index.php">Home</a></li>
             <li><a href="about.php">About</a></li>        
             <li><a href="registration.php">Register</a></li>
             <li><a href="plan.php">Plan</a></li>       
             <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">Faq</a></li>
        <?php 
		if(isset($_SESSION['email']))
		{?>
        <li><a href="logout.php">Logout</a></li>
		
            <?php  } ?>  </ol>
   
        
              <!-- sub menu -->

    </div>
    
   