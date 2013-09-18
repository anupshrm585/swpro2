<div class="header">
    
	
    <div id="site_title"><a href="index.php"><img src="img/logo.png" width="218" height="93" /></a></div>

    <!-- Main Menu -->
    
     <ol id="menu">
<li><a href="welcomeadmin.php">Home</a></li>
           
           
           
            
        <?php 
		if(isset($_SESSION['email']))
		{?>
        <li><a href="logout.php">Logout</a></li>
		
            <?php  } ?>  </ol>
   
        
              <!-- sub menu -->

    </div>