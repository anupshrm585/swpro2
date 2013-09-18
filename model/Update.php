<?php

class Update extends Model
{    
    public function updateUsersPaidStatus($email,$isPaid)
    {
        if($this->query("update user_status set is_paid=$isPaid where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUsersApprovedStatus($email,$isApproved)
    {
        if($this->query("update user_status set is_approved=$isApproved where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function updateUsersBioStatus($email,$hasProBio)
    {
        if($this->query("update user_status set has_pro_bio=$hasProBio where email='$email';"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }    
}
?>
