<?php

include 'chkSession.php';
$email = $_SESSION['email'];
require '../model/DbConn.php';
require '../model/Update.php';
$update = new Update();


$ids = unserialize($_POST["ids"]);
foreach ($ids as $id) {
    if ($update->updateUserRating($id, $_POST[$id])) {
        header("Location:../view/myprofile.php");
    } else {
        header("Location:../view/myprofile.php?msg=Cannot rate them");
    }
}
?>
