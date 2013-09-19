<?php

session_start();
require '../view/chkSession.php';
$username=$_SESSION['email'];
//var_dump($_FILES);
if(empty($_FILES["photo"]["name"]) == false){
    $image=upload("photo",$username);
    UpdateDb($username, $image, "photo");
}
if(empty($_FILES["video"]["name"]) == false){
    $video=upload("video",$username);
    UpdateDb($username, $video, "video");
}
if(empty($_FILES["biodata"]["name"]) == false){
    $biodata=upload("biodata",$username);
    UpdateDb($username, $biodata, "biodata");
    
}
function UpdateDb($username,$filename,$field){
                require '../model/DbConn.php';
                require '../model/Insert.php';
                require '../model/Update.php';
                
            
                $update=new Update();
                if($field == "photo")
                    {
                
                if($update->updateUserImage($username, $filename))
                {   
                      header("Location: ../view/myprofile.php");
                }
                else    
                {   header("Location: ../view/myprofile.php?msg=There was an error in updating");
                    
                }
            }
            if($field == "biodata")
                    {
                
                if($update->updateUserBio($username, $filename))
                {   // bio inserted successfully
                    header("Location: ../view/myprofile.php");
                }
                else    
                {   header("Location: ../view/myprofile.php?msg=There was an error in updating");
                    
                }
            }
            else if($field == "video")
                    {
                
                if($update->updateUserVideo($username, $filename))
                {                      
                    header("Location: ../view/myprofile.php");
                }
                else    
                {   header("Location: ../view/myprofile.php?msg=There was an error in updating");
                    
                }
            }
            
}

function upload($field,$username){
    
$allowedExts = array("gif", "jpeg", "jpg", "png", "mp4","pdf","doc","docx","mp4");
$allowedMimeTypes = array('application/msword','application/pdf','text/pdf','text/msword','image/gif','image/jpeg','image/png','video/mp4');
    
if (empty($_FILES[$field]["name"]) == false) {
    $extension = end(explode(".", $_FILES[$field]["name"]));  

    if (in_array($extension, $allowedExts) && in_array( $_FILES[$field]["type"], $allowedMimeTypes ))
    {
        // store image name, video name, biodata file name in following three files
                if($field == "photo")
                    $filename=$username . time() . $_FILES["photo"]["name"];
                if($field == "video")
                    $filename=$username . time() . $_FILES["video"]["name"];
                if($field == "biodata")
                    $filename=$username . time() . $_FILES["biodata"]["name"];
        $filepath = "../controller/usersdata/";
        if ($_FILES[$field]["error"] > 0) 
        {
            echo "Return Code: " . $_FILES[$field]["error"] . "<br>";
        } 
        else 
        {
            if (file_exists($filepath.$filename)) 
            {
                echo $_FILES[$field]["name"] . " already exists. ";
            } 
            else
            {   // uploading image successfully
                //echo $_FILES["photo"]["tmp_name"] . "," . $_FILES["photo"]["name"];
                //echo $filepath;
                
                move_uploaded_file($_FILES[$field]["tmp_name"], $filepath.$filename);
                return $filename;
              
            
            }
        }
    } else {
        header("Location: ../view/step_two.php?msg=There was an error in uploading");
    }
} else {
    header("Location: ../view/step_two.php?msg=There was an error in uploading");
}
}

?>

