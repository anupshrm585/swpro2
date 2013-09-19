<?php
        var_dump($_POST);
        $email="";
        $profilefor=$_POST["profilefor"];
        $firstname=$_POST["fname"];
        $lastname=$_POST["lname"];
        $genn=$_POST["genn"];
        $dob=$_POST["dob"];
        $religion=$_POST["religion"];
        $mothertongue=$_POST["mothertongue"];
        $livingin=$_POST["livingin"];
        $locationn=$_POST["locationn"];
        $nriopt="";
        if(isset($_POST["nriopt"]))
            $nriopt=$_POST["nriopt"];
        $memtype=$_POST["memtype"];
        
        
        require '../model/Update.php';
        $update=new Update();
        
        //didn't picked up $sques, $ans,
        if($update->updateUserDetails($email, $firstname, $lastname, $profilefor, $genn, $dob, $religion, $mothertongue, $livingin, $locationn, $nriopt, $memtype))
        {   // update user details successfully
            
        }
        else
        {
            // show an error message
        }
  ?>
