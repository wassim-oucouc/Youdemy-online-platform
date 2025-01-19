<?php

include_once('../App/Modules/cours.php');


class EtudiantController
{
    private cours $cours;
    public function __construct()
    {
        $this->cours = new Cours();
    }

    public function affichagecourses()
    {
        return $this->cours->SelectCourse();
        require_once('../App/Views/dashboard-etudiant.php');
    }

    public function affichagecoursebyid($idcourse)
    {
        return $this->cours->SelectCourseByID($idcourse);
        require_once('../App/Views/dashboard-etudiant.php');
    }
}



?>