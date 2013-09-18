
<!DOCTYPE HTML>

<head>

    <title>Home</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="view/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="view/menu/css/simple_menu.css">
    
  
<!-- Contact Form -->    
    
    <link href="view/contact_form/css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="view/contact_form/css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="view/contact_form/js/jquery.tools.js"></script>
    <script type="text/javascript" src="view/contact_form/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="view/contact_form/js/main.js"></script>
    


<!-- JS Files -->

	<script src="view/js/jquery.tools.min.js" type="text/javascript"></script>
        
    <script type="text/javascript">
        $(function() {
        $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
    });
    </script>
    
    <script type="text/javascript">
            $(document).ready(function(){
            $(".pane-list li").click(function(){
            window.location=$(this).find("a").attr("href");return false;
        });
    
    }); //close doc ready
    </script>
    <script type="text/javascript">
function valid(form)
{
 for(var i=0 ; i< form.elements.length; i++)
 {
 if (form.elements[i].value== "")
 {
  alert (" fill all feilds.");
  form.elements[i].focus();
  return false;

 }

 }
return true;
}
</script>

</head>

<body>

   
   <div class="header">
    
	
    <div id="site_title"><a href="index.php"><img src="view/img/logo.png" width="218" height="93" /></a></div>

    <!-- Main Menu -->
    
     <ol id="menu">
<li><a href="index.php">Home</a></li>
    </ol>
   
        
              <!-- sub menu -->

    </div>
   
   <!-- END header -->


    <div id="container">
   


<!-- tab panes --><!-- END prod wrapper -->
<div class="box_highlight" style="margin-top:40px">
    <h2 style="text-align:center">Welcome!</h2></div>
    
    
    <div class="one-half">
    
    <div class="heading_bg"><h2>About Us</h2></div>
    
        <blockquote>Hello Welcome to the LifeChose Admin Area</blockquote>
    
    
   <div class="heading_bg"><h2></h2></div>
    
    <!--<iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="465" height="262" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
    </div>
    
    
    <div class="one-half last">
    
         <div class="heading_bg">
           <h2>Admin Login!</h2></div>

         <!-- Edit process_form.php to make the form work with your e-mail address. If you need to create more forms go to www.csstemplateheaven.com/tools/form_builder 
         IMPORTANT! Change action="#" to action="contact_form/process_form.php"
         -->
          <form name="f1" method="post" action="controller/LoginController.php">
    
	Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="">
	Password<input type="password" name="pass" value="" ></br>
	<p align="center"><input type="submit" name="submit" value="submit" ></p>
    </form>
    </div>


    <div style="clear:both; height: 40px"></div>
    </div>

    <!-- END container -->


    <div id="footer">

    <!-- First Column --><!-- Second Column --><!-- Third Column --><!-- Fourth Column -->

    <div style="clear:both"></div>
    
    </div> <!-- END footer -->

</body>
</html>