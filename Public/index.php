<?php 
include_once('../App/Controllers/AdminController.php');
include_once('../App/Controllers/AuthController.php');
include_once('../App/Controllers/RegisterController.php');
include_once('../App/Controllers/TagsController.php');
include_once('../App/Controllers/CategorieController.php');
include_once('../App/Controllers/EnseignantController.php');
include_once('../App/Controllers/courseController.php');
include_once(".././App/DB/config/connection.php");
include_once('../App/Controllers/EtudiantController.php');

$route =  $_SERVER['REQUEST_URI'];
// echo "<pre>";
// echo "Request URI: " . $_SERVER['REQUEST_URI'] . "\n";
// echo "Query String: " . ($_SERVER['QUERY_STRING'] ?? 'No Query String') . "\n";
// echo "GET Data: ";
// print_r($_GET);
// echo "</pre>";
// exit;

// C:\xampp\htdocs\Youdemy\Public\index.php
// include_once('../App/Src/css/admin.css');
switch($route)
{
    case '/':
    $admin = new AdminController();
    $admin->admin_dashboard();
    break;
    case '/login':
        $auth = new AuthController();
    $auth->Login();
    break;
    case '/register':
    $register = new RegisterController();
    $register->register();  
    break;
    case '/dashboard-admin':
    $dashboard_admin = new AdminController();
    $dashboard_admin->admin_dashboard();
  break;  
  case '/delete-user':
    if( $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $dashboard_admin = new AdminController();
            $dashboard_admin-> Delete_User($id);
            header('Location: /dashboard-admin');
        }
    }
    break;





    case '/instructors':
        session_start();
        if(isset($_SESSION['id']))
        {
    $dashboard_admin = new AdminController();
    $dashboard_admin->instructors();
        }
        else
        {
            header('Location: /login');
        }
        break;
    case '/admin/banuser':
        session_start();
        if(isset($_SESSION['id']))
        {
        // header('Location: /dashboard-admin');
        if( $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        header('Location: /dashboard-admin');
        if(isset($_POST['id']))
        {
        $id = $_POST['id'];
        echo $id;
    $admin_ban  = new AdminController();
    $admin_ban->ban_instructor($id);
    exit();
        }
    }
    }
    else
    {
        echo "pas de session";
    }
    break;

    case '/admin/unbanuser':
        if( $_SERVER['REQUEST_METHOD'] === 'POST')
        {  
            header('Location: /dashboard-admin');
            if(isset($_POST['unban']))
            {
            $id = $_POST['unban'];
            echo $id;
            $admin_uban  = new AdminController();
            $admin_uban->uban_instructor($id);

        }
    }
    break;





    case '/users':
        session_start();
        if(isset($_SESSION['id']))
        {
        $dashboard_admin = new AdminController();
        $dashboard_admin->Users();
        }
        else
        {
            header('Location: /login');
        }
        break;
    case '/PendingUser':
    require_once('../App/Views/MessageEnseignant.php');
    break;
    case '/Admin-courses':
    $course = new CourseController();
    $course->index();

    $affichachecours = new CourseController();
    $cours = $affichachecours->AffichageCours();
require_once('../App/Views/courses.php');
    // var_dump($cours);


    break;
    





    case '/etudiant':
require_once('../App/Views/dashboard-etudiant.php');
break;

case '/my-courses':
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: /login');
        exit();
    }
    else
    {
    require_once('../App/Views/My-courses.php');
    }
    break;
    case '/Admin-Tags':
        $tags = new TagsController();
        $tags->index();
        if(isset($_POST['sendtags']))
        {
            $tagmo = new TagsController();
      $tago =   $_POST['tags'];
      $tagmo->CreateTagsMasse($tago);
      $_POST['tags'] = array();
      header('Location: /dashboard-admin');
    }
    $tago = new TagsController();
    $tago->FindTags('tags');
    require_once('../App/Views/tags.php');
    break;





    case '/Admin-categories':
        ob_start();
    $categorie = new CategorieController();
    $categorie->index();


    if(isset($_POST['send']))
    {
        header('Location: /dashboard-admin');
        $name = $_POST['name'];
        $description = $_POST['Description'];
        $specialite = $_POST['Specialite'];
        $arraycategories = ['Nom' => $name , 'Description' => $description , 'Specialite' => $specialite] ;
        $insertcategorie = new CategorieController();
        $insertcategorie->Createcategorie('categorie',$arraycategories);
        $name = [];
        $_description = [];
        $specialite =    [];
    }
    $findcategorie = new CategorieController();
    
    $row = $findcategorie->Findcategories('categorie');
    require_once('../App/Views/categories.php');
    // var_dump($row);
    
    break;



    case '/dashboard-etudiant':
        session_start();
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit();
        }
        else
        {

        $affichage = new EtudiantController();
        $EtudiantCours = $affichage->affichagecourses();
  
        var_dump($EtudiantCours);
        require_once('../App/Views/dashboard-etudiant.php');
        }
    break;


    case '/all-courses':
        session_start();
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit();
        }
        else
        {
        $affichage = new EtudiantController();
        $EtudiantCours = $affichage->affichagecourses();
        var_dump($EtudiantCours);
        require_once('../App/Views/all-courses.php');
        }
        break;

        case '/course-page':
            session_start();
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
            $id_course =  $_POST['id'];
            echo $id_course;  
            $courseselectbyid = new  EtudiantController;
            $course = $courseselectbyid->affichagecoursebyid($id_course);
            var_dump($course);
        }
            require_once('../App/Views/course.php');
            break;
        }
    }
        break;

        case 'my-courses':
        require_once('../App/Views/My-courses.php');
        







        case '/Enseignant-dashboard':
            session_start();
            if(isset($_SESSION['id']))
            {
                echo $_SESSION['id'];
            $Enseignant = new EnseignantController();
            $Enseignant->index();
            }
            else
            {
                header('Location: /login');
            }
            break;




        case '/courses-management':
            session_start();
            if (!isset($_SESSION['id'])) {
                header('Location: /login');
                exit();
            }
            else
            {
                echo $_SESSION['id'];
            $coursesmanagement = new EnseignantController();
            $coursesmanagement->coursemanagement();
            $coursecategories = new CategorieController();
            $row = $coursecategories->selectcategories('categorie');
            $coursetags = new TagsController();
            $tagsrow = $coursetags->SelectTags();

            if(isset($_POST['Add']))
            {
                $title = $_POST['courseTitle'];
                $courseprice = $_POST['courseprice'];
                $courseDescription = $_POST['courseDescription'];
                $coursedocument = $_POST['coursedocument'];
                $coursephoto = $_POST['coursephoto'];
                $categorie = $_POST['categorie'];
                $tags = $_POST['tags'];
                $tagselect = new  TagsController();
                $idtag = $tagselect->SelectIDbyName($tags);
                foreach($idtag as $value)
                {
                    $tagidinsert =  $value['ID'];
                }
                // echo $tagidinsert;  
                $categorieselect = new CategorieController();
                $idcategorie = $categorieselect->SelectIDbyName($categorie);

                foreach($idcategorie as $value)
                {
                    $categorieinsert = $value['ID'];
                }
                
                echo $categorieinsert;
                echo $_SESSION['id'];
                $id_teacher = $_SESSION['id'];
               
                // var_dump($idcategorie);
                $arraycourse = ['title' => $title , 'description' => $courseDescription , 'thumbnail' => $coursephoto , 'price' => $courseprice , 'document' =>  $coursedocument , 'Teacher_id' => $id_teacher , 'categorie_id' => $categorieinsert  , "status" => "Active" ];
               
                $courseinsert = new CourseController();
                 $courseinsert->CreateCours('course',$arraycourse);
                
               
              

                header('Location: /Enseignant-dashboard');
           
                
            }
          
      
          
          

            $id_teacher = $_SESSION['id'];
            $affichagecourse = new CourseController();
             $rowcour = $affichagecourse->affichagecoursteacher($id_teacher);
            //  var_dump($rowcour);
            
            

                


            }


            


            require_once('../App/Views/course-Enseignant.php');
    break;
    case '/course-delete':
        if( $_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(isset($_POST['deletecourse']))
            {
                echo "hello";
                $id_delete = $_POST['id'];
                echo $id_delete;
                $deletecours = new CourseController();
                $deletecours->Deletecours('course',$id_delete);
                header('Location: /courses-management');
            }
        }

        case '/course-delete-admin':
            session_start();
            if (!isset($_SESSION['id'])) {
                header('Location: /login');
                exit();
            }
            else
            {
            if( $_SERVER['REQUEST_METHOD'] === 'POST')
            {
                if(isset($_POST['deletecourse']))
                {
                    echo "hello";
                    $id_delete = $_POST['id'];
                    echo $id_delete;
                    $deletecours = new CourseController();
                    $deletecours->Deletecours('course',$id_delete);
                    header('Location: /dashboard-admin');
                }
            }
        }
            break;
            case '/course-edit-admin':
                if( $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    if(isset($_POST['editcourse']))
                    {
                         $id_course =  $_POST['id'];


                    }
                    else if(isset($_POST['save']))
                    {
                         $id_course =  $_POST['id'];
                         echo  $id_course;
                        $title = $_POST['title'];
                    $description = $_POST['description'];
                    $thumbnail = $_POST['thumbnail'];
                    $document = $_POST['document'];
                    $price = $_POST['price'];
                    $CourseEdit = new CourseController();
                    $query = $CourseEdit->EditCourseById($id_course,$title,$description,$thumbnail,$document,$price);
                    header('Location: /Admin-courses');
                    }
                     }
                
                require_once('../App/Views/course-edit-admin.php');
                break;

                case '/user-edit-admin':
                    if( $_SERVER['REQUEST_METHOD'] === 'POST')
                    {
                        if(isset($_POST['edit-user']))
                        {
                            $id_user = $_POST['id'] ;
                            echo $id_user;
                        }
                        if(isset($_POST['save']))
                        {
                            $id_user = $_POST['id'] ;
                            echo $id_user;
                        }

                    }   

                            require_once('../App/Views/edit-users-admin.php');
                

            }
            

  
    
    

            


?>