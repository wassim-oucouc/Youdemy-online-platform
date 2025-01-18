<?php

include_once('.././App/Modules/users.php');



class AuthController
{
    private $users;
    private $error;
    private $MessagePending;
    private $MessageSuspendu;
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
            $row =  $this->users->SelectEmailAndPassword($email,$password);
            if ($row && is_array($row)) {
            if($row['Email'] == $email && $row['Password'] == $password)
            {
                if($row['Role'] == 'Etudiant')
                {
                    if($row['Status'] == 'Active')
                    {
                    session_start();
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['name'] = $row['Prenom'];
                    header('Location: .././App/Views/dashboard-etudiant.php');
                    exit();
                    }
                    else if($row['Status'] == 'Pending')    
                    {
                        $this->MessagePending = "Votre Compte Est Pas Encore Activer!";
                        unset($_POST);
                        $this->MessagePending = "";

                    }
                    else if($row['Status'] == 'Suspendu')
                    {
                        $this->MessageSuspendu = "Votre Compte Est Suspendu!";
                        unset($_POST);
                        $this->MessageSuspendu = "";
                    }
                }
                else if($row['Role'] == 'Admin')
                {
                    session_start();
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['name'] = $row['Prenom'];
                    header('Location: /dashboard-admin');
                    exit();
                }
                else if($row['Role'] == 'Enseignant')
                {

                    if($row['Status'] == 'Active')
                    {
                    session_start();
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['name'] = $row['Prenom'];
                    header('Location: /Enseignant-dashboard');
                    exit();
                    }
                    else if($row['Status'] == 'Pending')
                    {
                        $this->MessagePending = "Votre Compte Est Pas Encore Activer!";
                        $_POST = [];

                    }
                    else if($row['Status'] == 'Suspendu')
                    {
                        $this->MessageSuspendu = "Votre Compte Est Suspendu!";
                        $_POST = array();

                    }
                }
            }
    }
        else
        {
        $this->error = "Email Ou Mot de Passe Incorrect";
        }
    }
    $_POST = [];
    require_once('.././App/Views/login.php');
}

    public function geterror()
    {
        return $this->error;
    }
}

?>