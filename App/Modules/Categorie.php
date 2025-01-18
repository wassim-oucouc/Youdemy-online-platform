<?php

class Categorie extends Etiquette
{
    private crudmodel $crudmodel;
    public function __construct()
    {
        $this->connection = new connection();
        $this->crudmodel = new CrudModel();
    }

    public function Insert($table,$infos)
    {
    $crud = new CrudModel();
    $crud->Create($table,$infos);
    }

  

    public function FindAllcategories($table)
    {
       return $this->crudmodel->FindAll($table);
    }

    public function findIdbyName($name)
    {
        $query = "SELECT ID FROM categorie where Nom = :nom";
        $ist = $this->connection->connection()->prepare($query);
        $ist->Bindvalue(':nom',$name);
        $ist->execute();
        return $ist->fetchAll();

    }
}


?>