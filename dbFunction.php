<?php
require_once ('dbConnect.php');

session_start();

class dbFunction
{
    function __construct()
    {
        //connecting to database
        $db = new dbConnect();
    }

    function destruct()
    {

    }

    public function UserRegister($username, $emailid,$password)
    {
        $password=md5($password);
        $qr = mysqli_query("Insert into users(username, emailid, password) values('".$username."','".$emailid."','".$password."')");

        return $qr;
    }

    public function login($emailid,$password)
    {
        $res= mysqli_query("SELECT * FROM users WHERE emailid='".$emailid."' AND password='".md5($password)."'");
        $user_data = mysqli_fetch_array($res);
        //print_r($userdata)

        $no_rows = mysqli_num_rows($res);

        if($no_rows==1)
        {
            $_SESSION['login']=true;
            $_SESSION['uid']=$user_data['id'];
            $_SESSION['username']=$user_data['username'];
            $_SESSION['email']=$user_data['emailid'];
            return TRUE;
            
        }else{
            return FALSE;
        }
    }

    public function isUserExist($emailid)
    {
        $qr=mysqli_query("SELECT * FROM users where emailid='".$emailid."'");
        echo $row = mysqli_num_rows($qr);

        if($row > 0 )
        {
            return true;
        }
        else{
            return false;
        }
    }

}
?>