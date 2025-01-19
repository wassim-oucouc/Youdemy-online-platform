<?php

require_once(".././App/Modules/tags.php");
require_once(".././App/Modules/Categorie.php");
require_once(".././App/Modules/CrudModel.php");
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
   private crudmodel $crudmodel;

   public function __construct()
   {
    $this->crudmodel = new CrudModel();
    $this->connection = new connection();
   }

   public function InsertCourse($table,$names)
   {
    $this->crudmodel->Create($table,$names);
    
   }

   public function SelectCourse()
   {
    $query = 'SELECT course.title,course.ID,course.thumbnail,course.description,course.price,course.created_at,course.document,course.Status ,users.Prenom,categorie.Nom AS categoriename from course INNER JOIN categorie ON course.categorie_id = categorie.ID  INNER join users ON course.Teacher_id = users.ID WHERE users.Role = "Enseignant"';
   $exe =  $this->connection->connection()->prepare($query);
   $exe->execute();
   return $exe->fetchAll();
    
   }

   public function SelectCourseByID($idcourse)
   {
 
    $query = 'SELECT course.title,course.ID,course.thumbnail,course.description,course.price,course.created_at,course.document,course.Status,course.document,users.Prenom,users.Nom,users.Photo,categorie.Nom AS categoriename from course INNER JOIN categorie ON course.categorie_id = categorie.ID  INNER join users ON course.Teacher_id = users.ID WHERE users.Role = "Enseignant" AND course.ID = :id ';
   $exe =  $this->connection->connection()->prepare($query);
   $exe->Bindvalue(':id',$idcourse);
   $exe->execute();
   return $exe->fetchAll();
   }

   public function SelectCourseEnseignant($id)
   {
    $query = 'SELECT course.title,course.ID,course.description,course.price,course.created_at,course.document,course.Status ,users.Prenom,categorie.Nom AS categoriename from course INNER JOIN categorie ON course.categorie_id = categorie.ID  INNER join users ON course.Teacher_id = users.ID WHERE users.Role = "Enseignant" AND users.ID = :id ';
    $aff = $this->connection->connection()->prepare($query);
    $aff->Bindvalue(':id',$id);
    $aff->execute();
    return $aff->fetchAll();

   }
   public function EditCourseByID($id,$title,$description,$thumbnail,$document,$Price)
   {
    $query = 'UPDATE course set title = :title,description = :description,thumbnail = :thumbnail,document = :document,price = :price where ID = :id';
    $edit = $this->connection->connection()->prepare($query);
    $edit->bindValue(':id',$id);
    $edit->bindValue(':title',$title);
    $edit->bindValue(':description',$description);
    $edit->bindValue(':thumbnail',$thumbnail);
    $edit->bindValue(':document',$document);
    $edit->bindValue(':price',$Price);
    $edit->execute();

   }

   public function deletecoursbyid($table,$id)
   {
    $this->crudmodel->DeleteById($table,$id);
   }

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