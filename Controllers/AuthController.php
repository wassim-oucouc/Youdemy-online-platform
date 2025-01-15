<?php

include_once('.././App/Modules/users.php');



class AuthController
{
    private $users;
    private $error;
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
            // var_dump($row);
            if ($row && is_array($row)) {
            if($row['Email'] == $email && $row['Password'] == $password)
            {
                if($row['Role'] == 'Etudiant')
                {
                    session_start();
                    header('Location: .././App/Views/dashboard-etudiant.php');

                    exit();
                   
                }
                else if($row['Role'] == 'Admin')
                {
                    session_start();
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['name'] = $row['Prenom'];
                    header('Location: ../App/Controllers/AdminController.php');
                    exit();
                }
                else if($row['Role'] == 'Enseignant')
                {
                    session_start();
                    header('Location: /App/Views/dashboard-enseignant.php');
                    exit();
                }
            
       


        }
    }
        else
        {
        $this->error = "Email Ou Mot de Passe Incorrect";
        }
    }
    require_once('.././App/Views/login.php');
}

    public function geterror()
    {
        return $this->error;
    }
}

?>