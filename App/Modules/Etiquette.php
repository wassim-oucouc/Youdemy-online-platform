<?php

abstract class Etiquette
{
    private $id;
    private $Nom;
    private $Description;
    private $Logo;


    public function GetId()
    {
        return $this->id;
    }
    public function GetNom()
    {
        return $this->Nom;
    }
    public function GetDescription()
    {
        return $this->Description;
    }
    public function GetLogo()
    {
        return $this->Logo;
    }

    public function SetId($id)
    {
        $this->id = $id;
    }
    public function SetNom($nom)
    {
        $this->Nom = $nom;
    }
    public function SetDescription($desc)
    {
        $this->Description = $desc;
    }
    public function SetLogo($Logo)
    {
        $this->Logo = $Logo;
    }
    public function __tostring()
    {
        return "id : " . $this->Id . "Prenom : " . $this->Prenom . "Nom : " . $this->Nom . "Email : " .$this->Email . "Password : " . $this->Password . "Role :" . $this->Role . "Photo : " . $this->Photo .  "status : " . $this->status;
    }

}

?>