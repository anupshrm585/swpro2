<?php
//echo 'file name:controller/LoginController.php';
$email=$_POST['email']; //email id
$pass=$_POST['pass']; // password
$rememberme=$_POST['rememberme']; //not a permanent variable
//var_dump($_POST);

require '../model/DbConn.php';
require '../model/Select.php';

$select = new Select();

if($select->checkUserAuthentication($email, $pass))
{
    if($select->checkUserIsPaid($email)) //checks isPaid
    {
        if($select->checkUserIsApproved($email)) //checks isApproved
        {
            if($select->checkUserHasProBio($email))
            {
                // send user to dash board
            }
            else    // send user to add biodata page
            {
                
            }
        }
        else    //displays a message " Please wait for admin approval "
        {
            
        }
    }
    else //send user to plan page
    {
                
    }
}
else
    echo "Incorrect ID PASS";


// After login check that the user has paid or not
//If user is not paid send header to index.php 
//If the user is approved then check that they have entered there bio data and image if yes then redirect them to there home page otherwise to the inserting biodata page
header("Location: ../view/step_two.php");

?>
