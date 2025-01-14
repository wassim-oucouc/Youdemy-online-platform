<?php

require_once("../../App/Modules/Role.php");


class users
{
    private $Id;
    private $Prenom;
    private $Nom;
    private $Email;
    private $Password;
    private $Role;
    private $Photo;
    private $status;
    private $cours = [];
    public function __construct()
    {
        $this->Role = new Role();
    }


    public function __call($name,$arguments)
    {
        if($name == 'test1')
        {
            var_dump($arguments);
        }
    }

    public function GetId()
    {
        return $this->Id;
    }
    public function GetPrenom()
    {
        return $this->Prenom;
    }
    public function GetNom()
    {
        return $this->Nom;
    }
    public function GetEmail()
    {
        return $this->Email;
    }
    public function GetPassword()
    {
        return $this->Password;
    }
    public function GetRole()
    {
        return $this->Role;
    }
    public function GetPhoto()
    {
        return $this->Photo;
    }
    public function GetStatus()
    {
        return $this->status;
    }

    public function SetId($id)
    {
        $this->Id = $id;
    }
    public function SetPrenom($prenom)
    {
        $this->Prenom = $prenom;
    }
    public function SetNom($nom)
    {
        $this->Nom = $nom;
    }
    public function SetEmail($email)
    {
        $this->Email = $email;
    }
    public function SetPassword($password)
    {
        $this->Password = $password;
    }
    public function SetRole($role)
    {
        $this->Role = $role;
    }
    public function SetPhoto($photo)
    {
        $this->Photo = $photo;
    }
    public function SetStatus($status)
    {
        $this->status = $status;
    }
    public function __tostring()
    {
        return "id : " . $this->Id . "Prenom : " . $this->Prenom . "Nom : " . $this->Nom . "Email : " .$this->Email . "Password : " . $this->Password . "Role :" . $this->Role . "Photo : " . $this->Photo .  "status : " . $this->status;
    }

}



$newuser = new users();

$newuser->test1('hello','helljd','fjfjd','dfjjdd');



?>