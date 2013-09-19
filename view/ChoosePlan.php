<?php
session_start();
 $_SESSION['email']=$_POST['email']; 
 $_SESSION['pass']=$_POST['pass'];
 $_SESSION['profilefor']=$_POST['profilefor'];
 $_SESSION['fname']=$_POST['fname'];
 $_SESSION['lname']=$_POST['lname'];
 $_SESSION['genn']=$_POST['genn'];
 $_SESSION['dob']=$_POST['dob'];
 $_SESSION['religion']=$_POST['religion'];
 $_SESSION['mothertongue']=$_POST['mothertongue'];
 $_SESSION['livingin']=$_POST['livingin'];
 $_SESSION['locationn']=$_POST['locationn'];
 $_SESSION['sques']=$_POST['sques'];
 $_SESSION['ans']=$_POST['ans'];
 if(isset($_POST['nriopt']))
     $_SESSION['nriopt']=$_POST['nriopt'];
 
?>

<!DOCTYPE HTML>

<head>

    <title>Plan</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu1.css">
    <link rel="stylesheet" href="css/prettyPhoto1.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider1.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="boxes/css/style5.css" />
    
    
    <!--LOGIN PANEL -->
    
    <!-- stylesheets -->
  	<link rel="stylesheet" href="css2/style1.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css2/slide1.css" type="text/css" media="screen" />
    
  
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
<script type="text/javascript">
function checkPlan(){
    var radios = document.getElementsByName('memtype');
    var fl=false;
for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
       fl=true;        // only one radio can be logically checked, don't check the rest
        break;
    }
    
}
if(fl==false){
    alert("Please Select a Plan");
    return false;
}
else
    return true;

}

function mischandler(){
return false;
}

/*function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
var isCtrl = false;
    document.onkeyup=function(e)
    {
    if(e.which == 17)
    isCtrl=false;
    }

    /*document.onkeydown=function(e)
    {
    if(e.which == 17)
    isCtrl=true;
    if((e.which == 85) || (e.which == 67) && isCtrl == true)
    {
    // alert(‘Keyboard shortcuts are cool!’);
    return false;
    }
    }*/

</script> 

<?php
include "header.php";
?>
<!-- END header -->


<div id="container">
   


<!-- tab panes --><!-- END prod wrapper -->
  <div style="clear:both"></div>
  <div style="clear:both"></div>
        <div class="box_highlight" style="margin-top:40px">
<h2 style="color:#32015A" align="center" >Our Plans</h2></div></div>
          
          
       
    
        <div id="container" style="margin-top: 30px"> 
              <form name="yourform" method="post" action="../controller/RegController.php" onsubmit="return checkPlan();">
                <ul class="ca-menu" style="margin: 40px 0;margin-bottom: 5px" >
                     
                  <li style="margin-left:120px;height:350px" >
                        <a href="#">                       
                         
                            <H1></H1>
                            <p align="center"><input name="memtype" value="Basic" type="radio"> Choose</p>
                            <h2 class="ca-main" style="color:#32015A">$999</h2>
                            <h3 class="ca-sub" style="color:#666"><b>BASIC</b></h3>
                            <h4 class="ca-sub" style="color:#666"><b>Three Selective Choices limited to two months</b>
                                   </h4>
                            
                        </a>
                    </li>
                    <li style="height:350px;">
                        <a href="#">
                            
                            <H1></H1>
                            <p align="center"><input name="memtype" value="Silver" type="radio"> Choose</p>
                            <h2 class="ca-main" style="color:#32015A">$2999</h2>
                            <h3 class="ca-sub" style="color:#666"><b>SILVER</b></h3>
                            <h4 class="ca-sub" style="color:#666"><b>Ten Choices within 4 Months</b>
                            
                            
                            </h4>
                          
                        </a>
                    </li>
                    <li style="margin-right:120px;height:350px">
                        <a href="#">
                            
                           <H1></H1>
                           <p align="center"><input name="memtype" value="Gold" type="radio" > Choose</p>
                            <h2 class="ca-main" style="color:#32015A">$4999</h2>
                            <h3 class="ca-sub" style="color:#666"><b>GOLD</b></h3>
                            <h4 class="ca-sub" style="color:#666"><b>20 qualified Choices within with Marriage Counseling latoron for next one year.</b>
                            
                            
                            </h4>                         
                        </a>
                    </li>
                 <!--   <li>
                        <a href="contact.php">
                            <span class="ca-main" style="color:#333"></span>
                        <div class="ca-content">
                          <h2 class="ca-main" style="color:#32015A">$600</h2>
                          <h3 class="ca-sub" style="color:#666"><B>P<b>plan detailing</b></B></h3>
                          </div>
                        </a>
                    </li>-->
          </ul>  
                  <p align="center" style="margin-top: 5px"><input type="submit" value="Submit" class="button success"/></p>
            </form>
      <div style="clear:both; height: 40px"></div>
    
  
    <div style="clear:both; height: 40px"></div>
    
</div></div>
  
  
    <!-- END container -->


      <?php
    include "footer.php";
	
	?>
</body>
</html>