<?php

session_start();
$username = $_SESSION['email'];
//$filename = "../usersdata/";
//var_dump($_FILES);
$allowedExts = array("gif", "jpeg", "jpg", "png", "mp4");

if (empty($_FILES["photo"]["name"]) == false) {
    $photo = explode(".", $_FILES["photo"]["name"]);
    $photoextension = end($photo);

    if ((($_FILES["photo"]["type"] == "image/gif")
            || ($_FILES["photo"]["type"] == "image/jpeg")
            || ($_FILES["photo"]["type"] == "image/jpg")
            || ($_FILES["photo"]["type"] == "image/pjpeg")
            || ($_FILES["photo"]["type"] == "image/x-png")
            || ($_FILES["photo"]["type"] == "image/png"))
            && in_array($photoextension, $allowedExts)) {
        // store image name, video name, biodata file name in following three files
        $image=$username . time() . $_FILES["photo"]["name"];
        $video="";
        $biodata="";
        $filepath = "../controller/usersdata/" . $image;
        if ($_FILES["photo"]["error"] > 0) 
        {
            echo "Return Code: " . $_FILES["photo"]["error"] . "<br>";
        } 
        else 
        {
            if (file_exists($filepath)) 
            {
                echo $_FILES["photo"]["name"] . " already exists. ";
            } 
            else
            {   // uploading image successfully
                //echo $_FILES["photo"]["tmp_name"] . "," . $_FILES["photo"]["name"];
                //echo $filepath;
                move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath);
                
                // calling model to update status and insert biodata
                require '../model/DbConn.php';
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
?>

<?php

/*
  $pathpee =$_FILES["video"]["name"];
  $d=pathinfo($pathpee, PATHINFO_EXTENSION);

  if (empty($_FILES["photo"]["name"]))
  {
  header("Location:step_two.php?msg=dont  leave image blank");

  }
  if (empty($_FILES["biodata"]["name"]))
  {
  header("Location:step_two.php?msg=dont  leave image blank");

  }
  if ($_FILES["video"]["size"] > 26214400)
  {
  header("Location:step_two.php?msg=dont  upload more than 25MB");
  }


  if(($d =='' || $d =='mp4') && empty($_FILES["video"]["name"]) == false)
  {?>

  <?php

  $video = $filename.time().$_FILES["video"]["name"];

  $ss=time().$_FILES["video"]["name"];

  if (move_uploaded_file($_FILES["video"]["tmp_name"],$ss))
  {
  // echo "2";
  }


  if(copy($ss, $video))
  {

  //echo "99";
  }
  }

  $bb=time().$_FILES["biodata"]["name"];
  $biodata = $filename.time().$_FILES["biodata"]["name"];
  if(move_uploaded_file($_FILES["biodata"]["tmp_name"],$bb))
  {

  //echo "4";
  }


  if(copy($bb, $biodata))
  {

  }

  $path = $filename.time().$_FILES["photo"]["name"];
  $pp=time().$_FILES["photo"]["name"];

  move_uploaded_file($_FILES["photo"]["tmp_name"], $pp);

  if(copy($pp, $path))
  {

  echo "88";

  }

  //header("Location: myprofile.php");

  //else
  //{?>
  <script type="text/javascript" >
  //alert("use only 3gp format or leave it blank");
  </script>
  <?php
  //    header("Location:step_two.php?msg=use only MP4 format or leave it blank");

  //}
 */
?>

