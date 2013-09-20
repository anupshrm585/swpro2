<?php

class Update extends Model
{    
    public function updateUserPaidStatus($email,$isPaid)
    {
        if($this->query("update user_status set is_paid=$isPaid where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserApprovedStatus($email,$isApproved)
    {
        if($this->query("update user_status set is_approved=$isApproved where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserBioStatus($email,$hasProBio)
    {
        if($this->query("update user_status set has_pro_bio=$hasProBio where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserImage($email,$image)
    {
        if($this->query("update user_bio set image='$image' where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserVideo($email,$video)
    {
        if($this->query("update user_bio set video='$video' where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserBio($email,$biodata)
    {
        if($this->query("update user_bio set biodata='$biodata' where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserRating($id,$rating)
    {
        if($this->query("update matched_profile set rating='$rating' where id='$id';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUserDetails($email,$fname,$lname,$profile_for,$gender,$dob,$religion,$mother_tongue,$country_living_in,$location,$nriopt,$sques,$ans,$memtype)
    {
        if($this->query(""))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
}
?>
