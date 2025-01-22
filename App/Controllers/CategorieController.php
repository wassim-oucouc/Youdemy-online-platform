<?php

include_once('.././App/Modules/categorie.php');


class CategorieController
{
    private categorie $Categorie;
    public function __construct()
    {
        $this->categorie = new Categorie();
    }


    public function index()
    {
        // require_once('../App/Views/categories.php');
    }

    public function Createcategorie($table,$infos)
    {
        $this->categorie->Insert($table,$infos);
        require_once('../App/Views/categories.php');
    }

    public function Findcategories($table)
    {
        if(isset($_POST['send']))
        {
            header('Location: /dashboard-admin');
            $name = $_POST['name'];
            $description = $_POST['Description'];
            $specialite = $_POST['Specialite'];
            $arraycategories = ['Nom' => $name , 'Description' => $description , 'Specialite' => $specialite] ;
            $insertcategorie = new CategorieController();
            $insertcategorie->Createcategorie('categorie',$arraycategories);
            $name = [];
            $_description = [];
            $specialite =    [];
        }
       
        
       return $row =  $this->categorie->FindAllcategories($table);
       require_once('../App/Views/categories.php');
    //    var_dump($row);
    //    require_once('../App/Views/categories.php');
    }   

    public function selectcategories($table)
    {
       return  $this->categorie->FindAllcategories($table);
       require_once('../App/Views/course-Enseignant.php');
    }   
    public function SelectIDbyName($name)
    {
        return $this->categorie->findIdbyName($name);
    }

    public function deletecategorieByID()
    {
        if(isset($_POST['deletecategorie']))
        {
            $id = $_POST['id'];
            echo $id;
            $categorie = "categorie";
            $categoriedelete = new Categorie();
            $categoriedelete->deletecategoriebyid($categorie,$id);
        }
        
    }

    public function CategorieUpdateById()
    {
        if(isset($_POST['editcategorie']))
        {
           $id_categorie = $_POST['id'];
           echo "hello";
        }
         if(isset($_POST['save']))
        {
        $id_categorie = $_POST['ido'];
        echo $id_categorie;
        $names = ['Nom' => $_POST['name'], 'Description' => $_POST['description'] , 'Specialite' => $_POST['Specialite']];
    $categorieupdate = new Categorie();
       $categorieupdate->UpdateCategorieById('categorie',$names,$id_categorie);
       header('Location: /Admin-categories');
        }
        include_once('../App/Views/categorie-edit.php');
    }
}


?>