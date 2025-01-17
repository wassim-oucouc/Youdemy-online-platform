<?php

include_once('.././App/Modules/users.php');



class RegisterController
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function register()
    {
        if(isset($_POST['submit']))
        {
        $arrayinfo = ['Prenom' => $_POST['firstname'] , 'Nom' => $_POST['lastname'] , 'Email' => $_POST['email'] , 'Password' => $_POST['password'] , 'Photo' => $_POST['photo']];

        $this->users->register('users',$arrayinfo);
        header('Location: http://localhost:8088/login');
        }
        require_once('.././App/Views/register.php');
    }



}



?>