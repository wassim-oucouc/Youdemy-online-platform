<?php

include_once('../App/Modules/cours.php');
include_once('../App/Modules/users.php');

class EnseignantController
{
    private course $courses;
    private users $users;
    private inscription $inscription;
    public function __construct()
    {
        $this->inscription = new Inscription();
        $this->course = new Cours();
        $this->users = new users();
    }

    public function index()
    {
        require_once('../App/Views/dashboard-enseignant.php');
    }

    public function coursemanagement()
    {

        // require_once('../App/Views/course-Enseignant.php');
    }

    public function EditCourseByID($id,$title,$description,$thumbnail,$document,$Price)
    {
        $this->cours->EditCourseByID($id,$title,$description,$thumbnail,$document,$Price);
    }

    public function SelectStudents()
    {
        session_start();
        var_dump($_SESSION);
       $row =  $this->users->SelectStudentsAndCoursesByID($_SESSION['id']);
       var_dump($row);
       require_once('../App/Views/students.php');
    }

    public  function DeleteRegistration()
    {
        if(isset($_POST['delete-inscription']))
        {
            echo "hello";
            $id = $_POST['registration_id'];
            echo $id;
            $this->inscription->DeleteRegistrationById($id);
            header('Location: /students');
        }
      
    }
}


?>
