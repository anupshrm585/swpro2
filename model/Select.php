<?php

class Select extends Model
{    
    public function checkLogin($email,$pass)
    {
        $this->query("select * from user_credentials where email='$email' and pass='$pass'");
        if($this->rows())
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function checkUser($username)
    {
        $this->query("select * from user_credentials where email='$username'");
        if($this->rows())
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
    public function checkUserStatus($email)
    {
        $this->query("select * from user_status where email='$email'");
        if($this->rows())
        {
            $row= $this->rows();
            $isPaid=$row['is_paid'];
            $isApproved=$row['is_approved'];
            $hasProBio=$row['has_pro_bio'];
            $userStatus=$isPaid*$isApproved*$hasProBio;
            return $userStatus;
        }
        else
        {
            echo mysql_error();
            return 0;
        }   
    }
    public function getUserName($email)
    {
        $this->query("select fname,lname from user_details where email='$email'");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function populateUserDetails($email)
    {
        $this->query("select * from user_details where email='$email'");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function getUnratedMatchedProfile($email)
    {
        $this->query("select * from matched_profile where from_user='$email' and rating=0");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function getRatedMatchedProfile($email)
    {
        $this->query("select * from matched_profile where from_user='$email' and rating>0");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    
    
}
?>
