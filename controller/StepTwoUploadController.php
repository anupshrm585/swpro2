<?php

//session_start();
var_dump($_FILES);
if(empty($_FILES["photo"]["name"]) == false){
    upload("photo");
    
}
if(empty($_FILES["video"]["name"]) == false){
    upload("video");
}
if(empty($_FILES["biodata"]["name"]) == false){
    upload("biodata");
    
}


function upload($field){
    $username = "lovecls1@gmail.com";//$_SESSION['email'];
$allowedExts = array("gif", "jpeg", "jpg", "png", "mp4","pdf","doc","docx","mpeg","mpg");
$allowedMimeTypes = array('application/msword','application/pdf','text/pdf','text/msword','image/gif','image/jpeg','image/png','video/mpg');
    
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
                echo $field.'uploaded';
                // calling model to update status and insert biodata
              /*  require '../model/DbConn.php';
                require '../model/Insert.php';
                require '../model/Update.php';
                
                $insert=new Insert();
                $update=new Update();
                
                if($insert->insUserBio($username, $image, $video, $biodata))
                {   // bio inserted successfully
                    $hasProBio=1; // user has uploaded his bio, 1 :: true
                    $update->updateUserBioStatus($username, $hasProBio);
                    header("Location: ../view/myprofile.php");
                }
                else    
                {   // some error
                    
                }
            }
        }
    } else {
        echo "Invalid file";
    }
} else {
    echo 'err';
}
               */
    }
        }
            }
}
}

?>

