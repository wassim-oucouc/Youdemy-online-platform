<?php

include_once('../../App/Modules/users.php');
class DashboardController
{
    private $users;

    public function __construct()
    {

    }
public function admin_dashboard()
{
session_start();
    echo $_SESSION['id'];
    require_once('../../App/Views/dashboard-admin.php');
    
}
}

$dashboard = new DashboardController();
$dashboard->admin_dashboard();


?>