<?php

include_once('../App/Modules/cours.php');

class CourseController
{
    private cours $cours;


    public function __construct()
    {
        $this->cours = new Cours();
    }
    public function index()
    {
        // require_once('../App/Views/courses.php');
    }

    public function AffichageCours()
    {
        return $this->cours->SelectCourse();
        require_once('../App/Views/courses.php');
    }


    public function CreateCours($table,$names)
    {
         $this->cours->InsertCourse($table,$names);
         $conn = new connection();
    }

    public function Deletecours($table,$id)
    {
        $this->cours->deletecoursbyid($table,$id);
    }

    public function affichagecoursteacher($id)
    {
        return $this->cours->SelectCourseEnseignant($id);
    }

    public function EditCourseById($id,$title,$description,$thumbnail,$document,$Price)
    {
         $this->cours->EditCourseByID($id,$title,$description,$thumbnail,$document,$Price);   
    }
}


?>