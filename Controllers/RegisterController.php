<?php

include_once('../../App/Modules/users.php');



class RegisterController
{
    private $users;
    public function __construct()
    {
        $this->users = new users();
    }
    public function register()
    {
        if(isset($_POST['submit']))
        {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $photo = $_POST['photo'];
        $arrayinfo = ['Prenom' => $_POST['firstname'] , 'Nom' => $_POST['lastname'] , 'Email' => $_POST['email'] , 'Password' => $_POST['password'] , 'Photo' => $_POST['photo']];

        $this->users->register('users',$arrayinfo);
        }

        require_once('../../App/Views/register.php');



    }



}

$register = new RegisterController();
$register->register();

?>