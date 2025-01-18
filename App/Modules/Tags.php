<?php

include_once('.././App/Modules/Etiquette.php');
include_once('.././App/Modules/CrudModel.php');

class Tags extends Etiquette
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

    public function InsertTagsMasse($tags)
    {
        $arraytags = array_map('trim',explode(',',$tags));

        // var_dump($arraytags);    

        $query = 'INSERT INTO tags(Nom) values(:tags)';
        $ist = $this->connection->connection()->prepare($query);

        foreach($arraytags as $key => $value)
        {
        $ist->execute([':tags' => $value]);
        }

    }

    public function FindAllTags($table)
    {
       return $this->crudmodel->FindAll($table);
    }

    public function findIdbyName($name)
    {
        $query = "SELECT ID FROM tags where Nom = :nom";
        $ist = $this->connection->connection()->prepare($query);
        $ist->Bindvalue(':nom',$name);
        $ist->execute();
        return $ist->fetchAll();

    }
}






?>