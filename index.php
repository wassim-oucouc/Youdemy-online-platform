<?php
require_once('../../Youdemy/App/Controllers/RegisterController.php');
require_once('../../Youdemy/App/Controllers/AuthController.php');

$action = $_GET['action'];






switch($action)
{
    case 'login':
        $auth = new AuthController();
$auth->login();

break;
case 'register':
    $register = new RegisterController();
    $register->register();
    break;

    case 'dashboard-etudiant':
 
}
?>