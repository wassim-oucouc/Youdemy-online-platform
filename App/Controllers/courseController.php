<?php

include_once('../App/Modules/cours.php');

class CourseController
{
    private cours $cours;


    public function __construct()
    {
        $this->cours = new Cours();
    }


    public function CreateCours($table,$names)
    {
        $this->cours->InsertCourse($table,$names);
    }
}


?>