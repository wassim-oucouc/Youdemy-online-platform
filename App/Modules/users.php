<?php

require_once(".././App/Modules/Role.php");
require_once("CrudModel.php");
include_once(".././App/DB/config/connection.php");



class Users
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

    private $crudmodel;
    public function __construct()
    {
        $this->Role = new Role();
        $this->connection = new connection(); 
        $this->crudmodel = new CrudModel();
        

    }


    public function __call($name,$arguments)
    {
        if($name == 'test1')
        {
            var_dump($arguments);
        }
    }

    public function findAllusers($table)
    {
       
     return  $this->crudmodel->FindAll($table);
    }

    public function findbyid($table,$id)
    {
        $crud = new CrudModel();
        $crud->findbyid($table,$id);
    }

    public function register($table,$infos)
    {
        $crud = new CrudModel();
        $crud->Create($table,$infos);
    }

    public function FetchUserByRole($table,$role)
    {
        $crud = new CrudModel();
       return $crud->FindUserByRole($table,$role);
    }
    public function SelectEmailAndPassword($email,$Password)
    {
        $query = 'SELECT * FROM users where Email = :email AND Password = :password';
      $ist = $this->connection->connection()->prepare($query);
      $ist->bindValue(':email',$email);
      $ist->bindValue(':password',$Password);
      $ist->execute();
     
     return $ist->fetch();
  
}

public function BanUserByID($id)
{
    $query = 'UPDATE users SET Status = "Suspendu" WHERE ID = :id';
    $ist = $this->connection->connection()->prepare($query);
    $ist->bindValue(':id',$id);
    $ist->execute();
}
public function UbanUserByid($id)
{
    $query = 'UPDATE users SET Status = "Active" WHERE ID = :id';
    $ist = $this->connection->connection()->prepare($query);
    $ist->bindValue(':id',$id);
    $ist->execute();
}

public function DeleteUserById($Table,$id)
{
   $this->crudmodel->DeleteById($Table,$id);
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
// $user = new Users();
// $user->UbanUserByid('18');
// ?>


