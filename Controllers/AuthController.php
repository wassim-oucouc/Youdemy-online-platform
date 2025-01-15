<?php

include_once('../../App/Modules/users.php');



class AuthController
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }

    public function Login()
    {

        if(isset($_POST['login']))
        {
            // echo "hello";
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->users->SelectEmailAndPassword($email,$password);
            require_once('../../App/Views/login.php');


        }
    }
}

$auth = new AuthController();
$auth->login();

?>