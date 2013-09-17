<?php
//echo 'file name:controller/LoginController.php';
$email=$_POST['email']; //email id
$pass=$_POST['pass']; // password
$rememberme=$_POST['rememberme']; //not a permanent variable
//var_dump($_POST);

require '../model/DbConn.php';
require '../model/Select.php';

$select = new Select();

if($select->checkLogin($email, $pass))
    echo "Correct ID PASS"; // in this place redirect the user to his dashboard
else
    echo "Incorrect ID PASS";


// After login check that the user has paid or not
//If user is not paid send header to index.php 
//If the user is approved then check that they have entered there bio data and image if yes then redirect them to there home page otherwise to the inserting biodata page
header("Location: ../view/step_two.php");

?>
