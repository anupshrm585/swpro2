<?php
require '../../model/DbConn.php'; // DBConnection required
require '../../model/Select.php';
//extract($_GET);
//var_dump($_GET);
$username=$_GET['username'];
//echo $_GET['password'];

$select=new Select();

if($select->checkUser($username))
{
 //echo "user_email_address_is_not_available_choose_another_email";
 echo 0;
 }
 
 else
 {
 // echo "email_is_available";
  echo 1;
 }
?>


