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
        if(isset($names['Password']))
        {
            $names['Password'] = password_hash($names['Password'], PASSWORD_DEFAULT);
        }
       $columns = implode(',',array_keys($names));
       $values = implode(',',array_values($names));

      $placeholders = $this->Addcolontokeys($names);

       $query = "INSERT INTO ".$Table."(".$columns.")"."VALUES(".$placeholders.")";

    //    var_dump($placeholders);

     $ist = $this->connection->connection()->prepare($query);

     $values2 = explode(",",$values);

     $newarrayplace = explode(",",$placeholders);
    //  var_dump($newarrayplace);



    



       foreach($names as $key => $value1)
       {
            $placeholder = ":" .$key;
            $ist->bindValue($placeholder,$value1);
        }


        $ist->execute();
}

public function SelectById($Table,$id)
{
    $query = 'SELECT * FROM ' . $Table . ' WHERE ID = :id';
    $ist = $this->connection->connection()->prepare($query);
    $ist->Bindparam(':id',$id);
    $ist->execute();
   return  $ist->fetchObject();
}

public function update($table,$names,$id)
{
    $Setupdate = [];
  foreach($names as $key => $value)
  {
    array_push($Setupdate,"$key = :$key");
  }

  $newhold = implode(",",$setclause);

//   die($newhold);

  $query = " UPDATE " . $table . " SET " . $newhold . " WHERE ID = :id";
//   die($query);
  $ist = $this->connection->connection()->prepare($query);

  foreach($names as $key => $value)
{
    // var_dump(":$key");

    $ist->bindValue(":$key",$value);

}
  $ist->Bindparam(':id',$id);
  $ist->execute();
}

public function DeleteById($Table,$id)
{
    $query = "DELETE FROM " . $Table.  "WHERE ID = :id";
    $ist = $this->connection->connection()->prepare($query);

    $ist->bindValue(':id',$id);
    $ist->execute();
   
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

    public function Addcolontokeys2($array)
    {
        $newarray = [];
        foreach($array as $key => $value)
        {
            $newarray[] = ':'.$key;
            $nexarray =  implode('',$newarray);

        }
        return $newarray;
    }

  

  
}

// $newcrud->Addcolontokeys($names);


?>