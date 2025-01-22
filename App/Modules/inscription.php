<?php

include_once('../App/Modules/CrudModel.php');

class Inscription
{
    private student $student;
    private course $course;
    private $inscription_date;
    private $status;
    private CrudModel $CrudModel;
    private connection $connection;


    public function __construct()
    {
        $this->CrudModel = new CrudModel();
        $this->connection = new connection();

    }

    public function Insert($Table,$names)
    {
        $this->CrudModel->Create($Table,$names);

    }

    public function SelectIDCourseAndIDStudent($id_course,$id_student)
    {
        $query = 'SELECT * from inscription where course_id = :course_id AND student_id = :student_id';
        $qur = $this->connection->connection()->prepare($query);
        $qur->bindvalue(':course_id',$id_course);
        $qur->bindvalue(':student_id',$id_student);
        $qur->execute();
        return $qur->fetchColumn();

    }

    public function DeleteRegistrationById($id)
    {
        $query = "DELETE FROM inscription where id = :id";
        $qur = $this->connection->connection()->prepare($query);
        $qur->bindvalue(':id',$id);
        $qur->execute();
    }
}







?>