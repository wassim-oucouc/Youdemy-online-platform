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
        $arrayinfoEtudiant = ['Prenom' => $_POST['firstname'] , 'Nom' => $_POST['lastname'] , 'Email' => $_POST['email'] , 'Password' => $_POST['password'] , 'Role' => $_POST['Role'] , 'Status' => 'Active'];
        $arrayinfoEnseignant = ['Prenom' => $_POST['firstname'] , 'Nom' => $_POST['lastname'] , 'Email' => $_POST['email'] , 'Password' => $_POST['password'] , 'Role' => $_POST['Role'] , 'Status' => 'Pending'];
        if($_POST['Role'] == 'Etudiant')
        {
        $this->users->register('users',$arrayinfoEtudiant);
        header('Location: /login');
        }
        else if($_POST['Role'] == 'Enseignant')
        {
            $this->users->register('users',$arrayinfoEnseignant);
            header('location: /PendingUser');

        }
    }
    require_once('.././App/Views/register.php');
}



}



?>