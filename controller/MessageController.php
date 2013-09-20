<?php
include '../view/chkSession.php';
$email=$_SESSION['email'];
    require '../model/DbConn.php';
    require '../model/Insert.php';  
    require '../model/Select.php';
    $insert=new Insert();
    $select=new Select();
//var_dump($_POST);
$usermsg=$_POST["sendmessage"];
$rows=$select->getUserName($email);
if(is_array($rows)){
    foreach($rows as $row)
    {
        if($insert->insUserChat($email, "admin", $row["fname"].' '.$row["lname"], $usermsg))
        {
            header("Location:../view/myprofile.php");            
            
        }
        else
        {
            header("Location:../view/myprofile.php?msg=There was an error posting your message");            
        }
    }
    
}
else
   header("Location:../view/myprofile.php?msg=There was an error posting your message");


?>
