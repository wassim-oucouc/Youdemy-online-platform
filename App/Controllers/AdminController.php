<?php

include_once('.././App/Modules/users.php');
include_once('.././App/Modules/users.php');
class AdminController
{
    private users $users;
    private cours $cours;

    public function __construct()
    {
        $this->users = new Users();
    }
public function admin_dashboard()
{
session_start();
    if(isset($_SESSION['id']) && $_SESSION['role'] == 'Admin')
    {
        $rows =  $this->users->findAllusers('users');
        require_once('.././App/Views/dashboard-admin.php');
        echo $_SESSION['id'];
    } 
    else
    {
        header('Location: /login');
    }
    // require_once('.././App/Views/dashboard-admin.php');
}



public function Delete_User($id)
{
    if( $_SERVER['REQUEST_METHOD'] === 'POST')
    {
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
    $this->users->DeleteUserById('users',$id);
    }
}
    echo "hello";
    // require_once('.././App/Views/deleteuser.php');
}

public function instructors()
{
    session_start();
    if(isset($_SESSION['id']))
    {
   $instructors = $this->users->FetchUserByRole('users','Enseignant');
    }
    else
        {
            header('Location: /login');
        }
    require_once('.././App/Views/instructors.php');
}

public function ban_instructor($id)
{
    session_start();
    if(isset($_SESSION['id']))
    {
    // header('Location: /dashboard-admin');
    if( $_SERVER['REQUEST_METHOD'] === 'POST')
{
    header('Location: /dashboard-admin');
    if(isset($_POST['id']))
    {
    $id = $_POST['id'];
    echo $id;
     
    $ban = $this->users->BanUserByID($id);
    require_once('.././App/Views/instructors.php');
exit();
    }
}
}
else
{
    header('Location: /login');
}
}

public function uban_instructor($id)
{
    if( $_SERVER['REQUEST_METHOD'] === 'POST')
    {  
        header('Location: /dashboard-admin');
        if(isset($_POST['unban']))
        {
        $id = $_POST['unban'];
        echo $id;
    $this->users->UbanUserByid($id);
    require_once('.././App/Views/instructors.php');
        }
}
}

public function Users()
{
    session_start();
    if(isset($_SESSION['id']))
    {
    $rows =  $this->users->findAllusers('users');
    }
    else
    {
        header('Location: /login');
    }
    require_once('.././App/Views/users.php');

}

public function EditUserByID($id,$Prenom,$Nom,$Email,$Password,$Status,$Photo)
{
    $this->users->EditUserById($id,$Prenom,$Nom,$Email,$Password,$Status,$Photo);
}
}



?>