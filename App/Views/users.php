<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - YOUDEMY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-logo">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="brand-name">YOUDEMY</span>
            </div>

            <nav>
            <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/dashboard-admin" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin-courses" class="nav-link">
                            <i class="fas fa-book"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin-categories" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin-Tags" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Tags</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/users" class="nav-link active">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/instructors" class="nav-link">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>Instructors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/reports" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/settings-admin" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>                           
                        <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="Search...">
                </div>

                <div class="header-actions">
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge"></span>
                    </button>
                    <div class="user-profile">
                        <img src="https://intranet.youcode.ma/storage/users/profile/thumbnail/1246-1728310286.jpg" alt="Admin Profile">
                    </div>
                </div>
            </header>
            
            <section class="table-container">
                <div class="section-header">
                    <h2 class="section-title">All Users</h2>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add New User
                    </button>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Join Date</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                       
                        <?php foreach($rows as $key => $value)
                        {
                            echo '
                             <tr>
                            <td>'. $value['Nom'] . " " .  $value['Prenom'] .'</td>
                            <td>'. $value['Role'] .'</td>
                            <td>'. $value['JoinDate'] .'</td>
                             <td>      <img  class = "imguser" src="'. $value['Photo'] .'" alt=""></td>
                            <td>'. $value['Status'].'</td>
                            <td>
                               <form action="/user-edit-admin" method = "POST">
                              <input type="hidden" name="id" value="'.$value['ID'].'">
                                <button name = "edit-user" class="fas fa-edit" type  = "submit" style = "color:green;"</button>
                                </form>
                                <form action="/delete-user" method="POST">
    <input type="hidden" name="id" value="'.$value['ID'].'">
    <button class="fas fa-trash" type="submit" style = "color:red;"></button>
</form>
                            </td>
                            <tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>