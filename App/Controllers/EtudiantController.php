<?php

include_once('../App/Modules/cours.php');
include_once('../App/Modules/inscription.php');

class EtudiantController
{
    private cours $cours;
    private inscription $inscription;
    public function __construct()
    {
        $this->cours = new Cours();
        $this->inscription = new Inscription();
    }

    public function affichagecourses()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit();
        }
        else
        {
        return $courses = $this->cours->SelectCourse();
        }
        require_once('../App/Views/dashboard-etudiant.php');
    }

    public function globalcourses()
    {
          $courses = $this->cours->SelectCourse();
        //  var_dump($courses);
         include_once('../App/Views/page-home.php');
        
    }

    public function CoursesEtudiant()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit();
        }
        else
        {
        if( $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST['enroll']))
        {
           $row  = $this->inscription->SelectIDCourseAndIDStudent($_POST['id'],$_SESSION['id']);
            if($row == 0)
            {
                // var_dump($row);
              
        $id_course =  $_POST['id'];
        echo $id_course;
       
        $inscriptionarray = ['student_id' => $_SESSION['id'] , 'course_id' => $id_course , 'status' => 'Active'];
        $this->inscription->Insert('inscription',$inscriptionarray);
        return $this->cours->SelectCourseByID($id_course);
            }
            else
            {
                header('Location: /all-courses');
                // var_dump($row);

            }
        // require_once('../App/Views/dashboard-etudiant.php');
    }
}
    }
}


public function Mycourses()
{
    session_start();
    var_dump($_SESSION);
   $row =  $this->cours->Selectcoursesandcategorieandteacher($_SESSION['id']);
   require_once('../App/Views/My-courses.php');
   var_dump($row);
}
}



?>