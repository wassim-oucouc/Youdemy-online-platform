<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - YOUDEMY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                        <a href="/Admin-Tags" class="nav-link active">
                            <i class="fas fa-tags"></i>
                            <span>Tags</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/users" class="nav-link">
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
                    <button class="add btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Tags
                    </button>
                </div>
                <form action = "/Admin-Tags" METHOD = "POST" class="tags-form max-w-sm mx-auto">
  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Insert Your Tags Here</label>
  <input name ="tags"id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></input>
  <button name ="sendtags" class="add btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add
                    </button>
</form>
<script>
    const form_tags = document.querySelector('.tags-form');
    const add_tags = document.querySelector('.add');
    // form_tags.style.display = 'none';

    console.log(add_tags);

    add_tags.addEventListener('click',function(){
        if(form_tags.style.display == 'block')
    {
        form_tags.style.display = 'none';
    }
    else
    {
        form_tags.style.display = 'block'
    }
    })

    </script>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom Tag</th>
                            <th>Created_AT</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                    //    $row = $row ?? []; 
                       foreach($row as $key => $value)
                       {
                        echo
                        '
                             <tr>
                            <td>'. $value['Nom'].'</td>
                            <td>'. $value['Created_At'].'</td>
    
                            <td>
                               
                                <a href = "C:\xampp\htdocs\Youdemy\App\Controllers\AdminController.php" class "btn" style="color: var(--primary);">
                                <i  class="fas fa-edit"></i></a>

                                <form action="/delete-tag" method="POST">
    <input type="hidden" name="lolo" value="'.$value['ID'] .'">
        <button name = "deletetag" class="fas fa-trash" type="submit"></button>
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