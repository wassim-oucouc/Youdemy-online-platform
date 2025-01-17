<?php 
include_once('../App/Controllers/AdminController.php');
include_once('../App/Controllers/AuthController.php');
include_once('../App/Controllers/RegisterController.php');
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
    $authadmin = new AuthController();
    $authadmin->Login();
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
    
    $dashboard_admin = new AdminController();
    $dashboard_admin->instructors();
    case '/admin/banuser':
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
    
        }
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
    
        $dashboard_admin = new AdminController();
        $dashboard_admin->Users();

  
    }

?>


