<?php

class Select extends Model
{    
    public function checkLogin($email,$pass)
    {
        $this->query("select * from credentials where email='$email' and pass='$pass'");
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
        $this->query("select * from credentials where email='$username'");
        if($this->rows())
            return 1;
        else
        {
            echo mysql_error();
            return 0;
        }        
    }
}
?>
