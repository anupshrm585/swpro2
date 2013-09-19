<?php

class Select extends Model
{    
    public function checkUserAuthentication($email,$pass)
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
    public function checkUserIsPaid($email)
    {
        $this->query("select is_paid from user_status where email='$email'");
        if($this->rows())
        {
            foreach($this->rows() as $row)
            {
                $isPaid=$row['is_paid'];
                $userStatus=$isPaid;            
            }
            return $userStatus;
        }
        else
        {
            echo mysql_error();
            return 0;
        }   
    }
        public function checkUserIsApproved($email)
    {
        $this->query("select is_approved from user_status where email='$email'");
        if($this->rows())
        {
            foreach($this->rows() as $row)
            {
            $isApproved=$row['is_approved'];
            $userStatus=$isApproved;
            }
            return $userStatus;
        }
        else
        {
            echo mysql_error();
            return 0;
        }   
    }
    public function checkUserHasProBio($email)
    {
        $this->query("select has_pro_bio from user_status where email='$email'");
        if($this->rows())
        {
            foreach($this->rows() as $row)
            {
            $hasProBio=$row['has_pro_bio'];
            $userStatus=$hasProBio;
            }
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
    public function getUserDetails($email)
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
    public function getUserChat($email)
    {
        $this->query("select * from chats where from_user='$email' or to_user='$email'");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function getUserImage($email)
    {
        $this->query("select image from user_bio where email='$email'");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function getUserVideo($email)
    {
        $this->query("select video from user_bio where email='$email'");
        if($this->rows())
            return $this->rows();
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function getUserBioData($email)
    {
        $this->query("select biodata from user_bio where email='$email'");
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
