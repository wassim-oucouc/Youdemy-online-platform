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
       return $row =  $this->categorie->FindAllcategories($table);
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
}


?>