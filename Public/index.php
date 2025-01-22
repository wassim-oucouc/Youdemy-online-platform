<?php 
include_once('../App/includes/include-index.php');

$route =  $_SERVER['REQUEST_URI'];

// echo $route;
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
        $affichage = new EtudiantController();
        $EtudiantCours = $affichage->globalcourses();
        include_once('../App/Views/page-home.php');
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
            $dashboard_admin = new AdminController();
            $dashboard_admin-> Delete_User($id);
            header('Location: /dashboard-admin');
    break;

    case '404':
        require_once('../App/Views/404.php');
        break;
    case '/instructors':
    $dashboard_admin = new AdminController();
    $dashboard_admin->instructors();
        break;
    case '/admin/banuser':
    $admin_ban  = new AdminController();
    $admin_ban->ban_instructor($id);
    break;
    case '/admin/unbanuser':
            $admin_uban  = new AdminController();
            $admin_uban->uban_instructor($id);    
    break;
    case '/users':
        $dashboard_admin = new AdminController();
        $dashboard_admin->Users();
        break;
        case '/Admin-courses':
            $course = new CourseController();
            $course->index();
            $affichachecours = new CourseController();
            $cours = $affichachecours->AffichageCours();
        require_once('../App/Views/courses.php');
            break;
            case '/all-courses':
                session_start();
            $affichage = new EtudiantController();
            $EtudiantCours = $affichage->affichagecourses();
            // var_dump($EtudiantCours);
            require_once('../App/Views/all-courses.php');
            break;
    case '/Admin-Tags':
        $tago = new TagsController();
        $tago->FindTags('tags');
        require_once('../App/Views/tags.php');
        break;
        case '/Admin-categories':
            ob_start();
        $categorie = new CategorieController();
        $categorie->index();
        $findcategorie = new CategorieController();
        $row = $findcategorie->Findcategories('categorie');
        require_once('../App/Views/categories.php');  
        break;

        case'/delete-categorie':
        $categorie_delete = new CategorieController();
        $categorie_delete->deletecategorieByID();
        break;

        case'/edit-categorie':
        $categorieupdate = new CategorieController();
        $categorieupdate->CategorieUpdateById();
            // include_once('../App/Views/categorie-edit.php');
        break;
    
        
    
    
            




    case '/PendingUser':
    require_once('../App/Views/MessageEnseignant.php');
    break;
   





    case '/etudiant':
require_once('../App/Views/dashboard-etudiant.php');
break;

case '/my-courses':
    $mycourses = new EtudiantController();
    $mycourses->  Mycourses();
    require_once('../App/Views/My-courses.php');

    break;












    case '/dashboard-etudiant':
        session_start();
        if (!isset($_SESSION['id']) && $_SESSION['role'] == 'Etudiant') {
            header('Location: /login');
            exit();
        }
        else
        {

        $affichage = new EtudiantController();
        $EtudiantCours = $affichage->affichagecourses();
  
        // var_dump($EtudiantCours);
        require_once('../App/Views/dashboard-etudiant.php');
        }
    break;

    case '/students':
        $studentsfetch = new EnseignantController();
        $studentsfetch->SelectStudents();
        include_once('../App/Views/students.php');
        break;





        case '/course-page':
            session_start();
            $courseselectbyid = new  EtudiantController();
            $course = $courseselectbyid->CoursesEtudiant();
            // var_dump($course);
            require_once('../App/Views/course.php');
            break;

        case 'my-courses':
        require_once('../App/Views/My-courses.php');
        







        case '/Enseignant-dashboard':
            session_start();
            // echo $_SESSION['Role'];
            if(isset($_SESSION['id']) && $_SESSION['role'] == 'Enseignant')
            {
                echo 'helo';
                // var_dump($_SESSION);
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
                header('Location: /enseignant-dashboard');
            }
        }
        break;

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
                session_start();
            if (!isset($_SESSION['id'])) {
                header('Location: /login');
                exit();
            }
            else
            {
                if( $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    if(isset($_POST['editcourse']))
                    {
                         $id_course =  $_POST['id'];


                    }
                    else if(isset($_POST['save']))
                    {
                         $id_course =  $_POST['id'];
                        $title = $_POST['title'];
                    $description = $_POST['description'];
                    $thumbnail = $_POST['thumbnail'];
                    $document = $_POST['document'];
                    $price = $_POST['price'];
                    $CourseEdit = new CourseController();
                    $query = $CourseEdit->EditCourseById($id_course,$title,$description,$thumbnail,$document,$price);
                    header('Location: /Admin-courses');
                    }
                    require('../App/Views/course-edit-admin.php');

                     }
                    }
                     break;




                     
                     case '/course-edit-instructor':
                        if( $_SERVER['REQUEST_METHOD'] === 'POST')
                        {
                            if(isset($_POST['edit-cours']))
                            {
                                echo "hello";
                                 $id_course =  $_POST['id'];
                                
        
        
                            }
                            else if(isset($_POST['save']))
                            {
                                 $id_course =  $_POST['id'];
                                $title = $_POST['title'];
                            $description = $_POST['description'];
                            $thumbnail = $_POST['thumbnail'];
                            $document = $_POST['document'];
                            $price = $_POST['price'];
                            $CourseEdit = new CourseController();
                            $query = $CourseEdit->EditCourseById($id_course,$title,$description,$thumbnail,$document,$price);
                            header('Location: /courses-management');
                            }
                               require_once('../App/Views/Course-edit-instructor.php');
                             }
                
             
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
                            $Prenom = $_POST['Prenom'];
                            $Nom = $_POST['Nom'];
                            $Email = $_POST['Email'];
                            $password = $_POST['password'];
                            $status = $_POST['status'];
                            $photo = $_POST['photo'];
                            $edituser = new AdminController();
                            $edituser->EditUserByID($id_user,$Prenom,$Nom,$Email,$password,$status,$photo);
                            if($edituser)
                            {
                                header('Location: /dashboard-admin');
                            }
                                                
                        }

                    }   

                            require_once('../App/Views/edit-users-admin.php');
                            break;

                    case '/admin-edit-instructor':
                   $editinstructor = new instructor();
                   break;


                   case '/logout':
                    AuthController::Logout();
                    break;

                    case '/registration-delete':
                        $deleteregistration = new EnseignantController();
                        $deleteregistration->DeleteRegistration();
                        break;
                    case '/delete-tag':
                    $deletetag = new TagsController();
                    $deletetag->DeleteTagbyid();
                    break;
                    
                    

                    
                

            }
            

  
    
    

            


?>