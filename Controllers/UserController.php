<?php

include_once('../../App/Modules/users.php');


class UserController
{
    private $users;
    public function __construct()
    {
        $this->user = new Users();
    }
    public function DeleteUser()
    {
        
    }
}


?>