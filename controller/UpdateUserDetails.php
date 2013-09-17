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
        
  ?>
