<!DOCTYPE HTML>

<head>

    <title>Contact</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>

<!-- Contact Form -->    
    
    <link href="contact_form/css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="contact_form/css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.tools.js"></script>
    <script type="text/javascript" src="contact_form/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="contact_form/js/main.js"></script>

</head>

<body>

   <?php
include "header.php";
?><!-- END header -->


    <div id="container">


    <h1 >Details</h1>
    
    <div class="one-half">

        <div class="heading_bg"><h2 style="color:#32015A">Life Choice</h2></div>
          <p style="font-family:corbel; font-size:18px; color:#333"><strong>Head Office</strong><br /><br>
        176, Bidhan Sarani,<br />
        Devangan Apartment, Ground Floor,<br />
        Kolkata - 700006<br>
          <b>Tel:</b> (+91) 9836410111<br />
          <b>Mail:</b> info@lifechoice.in
          </p>
          <br>
         <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=the+flight+express,+kolkata&amp;aq=&amp;sll=23.261534,86.385498&amp;sspn=5.761058,10.821533&amp;ie=UTF8&amp;hq=the+flight+express,&amp;hnear=Kolkata,+West+Bengal&amp;ll=22.589256,88.368786&amp;spn=0.022625,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=9691256737660473776&amp;output=embed"></iframe>
    </div>
    <div class="one-half last">
   
         <div class="heading_bg"><h2 style="color:#32015A">Send Email</h2></div>

         <!-- Edit process_form.php to make the form work with your e-mail address. If you need to create more forms go to www.csstemplateheaven.com/tools/form_builder 
         IMPORTANT! Change action="#" to action="contact_form/process_form.php"
         -->
         <form action="#" class="TTWForm" method="post" novalidate>
            
          <div id="field1-container" class="field f_50">
               <label for="field1">Name</label>
               <input name="name" id="field1" required type="text">
          </div>
          
          
          <div id="field2-container" class="field f_50">
               <label for="field2">Telephone</label>
               <input name="tel" id="field2" required type="text">
          </div>
          
          
          <div id="field5-container" class="field f_50">
               <label for="field5">Email</label>
               <input name="email" id="field5" required type="email">
          </div>
          
          
          <div id="field4-container" class="field f_100">
               <label for="field4">Message</label>
               <textarea rows="5" cols="20" name="message" id="field4" required></textarea>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input value="Submit" type="submit">
          </div>
     </form>
     
    <!--END form ID contact_form -->
   
    </div>

    <div style="clear:both; height: 40px"></div>

    </div><!-- close container -->


      <?php
    include "footer.php";
	
	?>
</body>
</html>