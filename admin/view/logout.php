<?php
session_start();
session_destroy();
if(isset($_SESSION['email']))
{
//echo "4";
unset($_SESSION['email']);
}
session_unset(); 
//unset($_SESSION['nm']);
header("location:index.php?msg=Log Out Successfully ....");
?>