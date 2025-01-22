<?php

class Role
{
    private $ID_Role = 1;
    private $Nom;

    public function __construct(){}

    public function GetId()
    {
        return this->ID_Role;
    }
    public function GetNom()
    {
        return $this->Nom;
    }
    public function SetId($id)
    {
        $this->ID_Role = $id;
    }
    public function SetNom($nom)
    {
        $this->Nom = $nom;
    }
}



?>