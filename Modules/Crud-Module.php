<?php

include_once("../../App/DB/config/connection.php");

class CrudModel
{
    public function __construct()
    {
        
    }
    public function Create($Table,$names)
    {
       $columns = implode(',',array_keys($names));
       $values = implode(',',array_values($names));


       $query = "INSERT INTO ".$Table."(".$columns.")"."VALUES(".$placeholders.")";

       foreach($names as $key => $value)
       {
        
       }



    }

  

  
}

$table = 'wassim';
$names = ["wassim" => "test" , "ddjdjjd" => "kssksk" , "sksksks" => "sjjsjs" , "sjssjs" => "jsjsjs"];
$newcrud = new CrudModel();
$newcrud->Create($table,$names);


?>