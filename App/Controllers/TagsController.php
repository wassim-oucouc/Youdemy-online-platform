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
}


?>