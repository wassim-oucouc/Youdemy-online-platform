<?php

include_once('.././App/Modules/Tags.php');


class TagsController
{
    private tags $tag;
    public function __construct()
    {
        $this->tag = new Tags();
    }


    public function index()
    {
        // require_once('../App/Views/tags.php');
    }

    public function CreateTagsMasse($stringtags)
    {
        $this->tag->InsertTagsMasse($stringtags);
        // require_once('../App/Views/tags.php');
    }

    public function FindTags()
    {

        if(isset($_POST['sendtags']))
        {
            $tagmo = new TagsController();
      $tago =   $_POST['tags'];
      $tagmo->CreateTagsMasse($tago);
      $_POST['tags'] = array();
      header('Location: /dashboard-admin');
    }
       $row =  $this->tag->FindAllTags('tags');
    //    var_dump($row);
       require_once('../App/Views/tags.php');
    }
    public function SelectTags()
    {
      return $this->tag->FindAllTags('tags');
    //   require_once('../App/Views/course-Enseignant.php');

    }

    public function SelectIDbyName($name)
    {
        return $this->tag->findIdbyName($name);
    }

    public function DeleteTagbyid()
    {
        if(isset($_POST['deletetag']))
        {
            var_dump($_POST);
            echo "hello";
           $id = $_POST['lolo'];
           echo $id;
         $query =  $this->tag->DeleteTagsByID('tags',$id);
         if($query)
         {
            echo "hdllo";
         }

           header('Location: /Admin-Tags');

        }

    }
}


?>