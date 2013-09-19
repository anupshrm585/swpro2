<?php

class Insert extends Model
{    
    public function insUserCredentials($email,$pass)
    {
        if($this->query("insert into user_credentials values('$email','$pass');"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function insUserDetails($email,$fname,$lname,$profile_for,$gender,$dob,$religion,$mother_tongue,$country_living_in,$location,$nriopt,$sques,$ans,$memtype)
    {
        if($this->query("insert into user_details(email,fname,lname,profile_for,gender,dob,religion,mother_tongue,country_living_in,location,nriopt,sques,ans,memtype) values('$email','$fname','$lname','$profile_for','$gender','$dob','$religion','$mother_tongue','$country_living_in','$location','$nriopt','$sques','$ans','$memtype');"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function insUserBio($email,$image,$video,$biodata)
    {
        if($this->query("insert into user_bio values('$email','$image','$video','$biodata');"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function insUserStatus($email)
    {
        if($this->query("insert into user_status values('$email',0,0,0);"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function insUserRating($from_user,$to_user,$rating)
    {
        if($this->query("insert into matched_profile(from_user,to_user,rating) values('$from_user','$to_user',$rating);"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    //for admin 
    public function insMatchedProfile($from_user,$to_user)
    {
        if($this->query("insert into matched_profile(from_user,to_user,rating) values('$from_user','$to_user',0);"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
    }
    public function insUserChat($from_user,$to_user,$name,$msg)
    {   // at front end $to_user="admin"
        if($this->query("insert into chats(from_user,to_user,name,message) values('$from_user','$to_user','$name','$msg');"))
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }
        
    }
}
?>