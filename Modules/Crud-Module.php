<?php

include_once("../../App/DB/config/connection.php");

class CrudModel
{
    public function __construct()
    {
       $this->connection = new connection(); 
    }
    public function Create($Table,$names)
    {
       $columns = implode(',',array_keys($names));
       $values = implode(',',array_values($names));

      $placeholders = $this->Addcolontokeys($names);

       $query = "INSERT INTO ".$Table."(".$columns.")"."VALUES(".$placeholders.")";

     $ist = $this->connection->connection()->prepare($query);

     $values2 = explode(",",$values);

     $newarrayplace = explode(",",$placeholders);
    //  var_dump($newarrayplace);



    



       foreach($newarrayplace as $key => $value2)
       {
        foreach($values2 as $key => $value)
        {
            $ist 
        }
}
    }
    public function Addcolontokeys($array)
    {
        $newarray = [];
        foreach($array as $key => $value)
        {
            $newarray[] = ':'.$key;

        }
        $nexarray =  implode(',',$newarray);
        return $nexarray;
    }

  

  
}

$table = 'wassim';
$names = ["wassim" => "test" , "ddjdjjd" => "kssksk" , "sksksks" => "sjjsjs" , "sjssjs" => "jsjsjs"];
$newcrud = new CrudModel();
$newcrud->Create($table,$names);


// $newcrud->Addcolontokeys($names);


?>