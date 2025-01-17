<?php

include_once('.././App/Modules/users.php');
class AdminController
{
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }
public function admin_dashboard()
{
session_start();
    if(isset($_SESSION))
    {
        $rows =  $this->users->findAllusers('users');
        require_once('.././App/Views/dashboard-admin.php');
        echo $_SESSION['id'];
    }
    // require_once('.././App/Views/dashboard-admin.php');
}



public function Delete_User($id)
{
    $this->users->DeleteUserById('users',$id);
    echo "hello";
    // require_once('.././App/Views/deleteuser.php');
}

public function instructors()
{
   $instructors = $this->users->FetchUserByRole('users','Enseignant');
    require_once('.././App/Views/instructors.php');
}

public function ban_instructor($id)
{
    $ban = $this->users->BanUserByID($id);
    require_once('.././App/Views/instructors.php');
}

public function uban_instructor($id)
{
    $this->users->UbanUserByid($id);
    require_once('.././App/Views/instructors.php');
}

public function Users()
{
    $rows =  $this->users->findAllusers('users');
    require_once('.././App/Views/users.php');

}
}



?>