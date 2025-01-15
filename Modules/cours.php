<?php

require_once("../../App/Modules/tag.php");
require_once("../../App/Modules/Categorie.php");
class Cours
{
   private $ID_Cours;
   private $Nom;
   private $Date;
   private $Description;
   private Enseignant $Enseignant;
   private $Tag = [];
   private categorie $Categorie;
   private $Etudiants = [];

   public function __construct()
   {}

public function GetId()
{
    return $this->ID_Cours;
}

public function GetNom()
{
    return $this->Nom;
}

public function GetDate()
{
    return $this->Date;
}

public function GetDescription()
{
    return $this->Description;
}

public function GetEnseignant()
{
    return $this->Enseignant;
}

public function GetTag()
{
    return $this->Tag;
}
public function GetCategorie()
{
    return $this->Categorie;
}

public function GetEtudiants()
{
    return $this->Etudiants;
}

public function SetID($id)
{
     $this->ID_Cours = $id;
}


public function SetNom($Nom)
{
     $this->Nom = $Nom;
}

public function SetDate($Date)
{
     $this->Date = $Date;
}

public function SetDescription($desc)
{
    $this->Description = $desc;
}

public function SetEnseignant($enseignant)
{
     $this->Enseignant = $enseignant;
}

public function SetTag($tag)
{
     $this->Tag[] += $tag;
}
public function SetCategorie($categorie)
{
     $this->categorie = $categorie;
}

public function SetEtudiants($etudiant)
{
     $this->Etudiants[] += $etudiant;
}
}

?>