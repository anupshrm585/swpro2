<?php
    session_start();
    var_dump($_SESSION);
    var_dump($_POST);
    
    $email=$_SESSION['email'];// user id
    $pass=$_SESSION['pass']; // password
    $profilefor=$_SESSION['profilefor']; // profile for
    $fname=$_SESSION['fname']; // fname
    $lname=$_SESSION['lname']; // lname
    $genn=$_SESSION['genn']; //gender
    $dob=$_SESSION['dob']; //dob
    $religion=$_SESSION['religion']; //religion
    $mothertongue=$_SESSION['mothertongue']; //mothertongue
    $livingin=$_SESSION['livingin']; //livingin
    $location=$_SESSION['locationn'];
    $nriopt="";
   if(isset($_SESSION['nriopt']))  
       $nriopt=$_SESSION['nriopt']; //nri option
   $sques=$_SESSION['sques'];   //sequirity ques
   $ans=$_SESSION['ans'];   //sequirity ans 
   
   $memtype=$_POST['memtype'];  //membership type

   session_destroy();
   //check for user already registered not done ?
   
   require '../model/DbConn.php';
   require '../model/Insert.php';
   require '../model/Select.php';
   
   $select=new Select();
   
   if($select->checkUser($email))
   {
       header("Location: ../index.php");
   }
   else
   {
    $insert=new Insert();    
    
    if($insert->insUserDetails($email, $fname, $lname, $profilefor, $genn, $dob, $religion, $mothertongue, $livingin, $location, $nriopt, $sques, $ans, $memtype))
    {
        echo "User Details Inserted Successfully";
        $insert->insUserStatus($email);
        
        //inserting in login table
        if($insert->insUserCredentials($email, $pass))
        {
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['pass']=$pass;
            echo "User Credential Inserted Successfully";
            header("Location: ../view/step_two.php");
        }
        else
            echo " Error in Inserting User Credential -> ".  mysql_error();
    }
    else
        echo " Error in Inserting User Details -> ".mysql_error();
   }
?>