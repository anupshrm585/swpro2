<?php

if(isset($_POST["type"]))
{
    
    $type=$_POST["type"];
    echo $type;
    if($type == "photo"){
        var_dump($_FILES);
    }
    if($type == "video"){
        var_dump($_FILES);
    }
    if($type == "biodata"){
        var_dump($_FILES);
    }
}
?>
