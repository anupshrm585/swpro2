<!DOCTYPE HTML>

<head>

    <title>FAQ</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    
    
  
<!-- Contact Form -->    
    
    <link href="contact_form/css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="contact_form/css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.tools.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="contact_form/js/main.js"></script>
    


<!-- JS Files -->

	<script src="js/jquery.tools.min.js" type="text/javascript"></script>
        
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

</head>

<body>

    <?php
    include "header.php";
	
	?>
    <!-- END header -->


    <div id="container">
   


<!-- tab panes --><!-- END prod wrapper -->

    <div style="clear:both"></div>
    <div style="clear:both"></div>
        <div class="box_highlight" style="margin-top:40px">
          <h2 style="color:#32015A" align="center">FAQ!      </h2></div>
      <div style="clear:both; height: 40px"><p>Questions</p></div>
      
    </div>

    <!-- END container -->


      <?php
    include "footer.php";
	
	?>

</body>
</html>