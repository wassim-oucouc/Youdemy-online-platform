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
                        <a href="admin-dashboard.html" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link">
                            <i class="fas fa-book"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="categories.php" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="categories.php" class="nav-link active">
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
                        <a href="admin-reports.html" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-settings.html" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
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
                        Add Categories
                    </button>
                </div>
                    <div class="bg-white border border-4 rounded-lg shadow relative m-10">
                        <div class="flex items-start justify-between p-5 border-b rounded-t">
                              
                                </svg>
                            </button>
                    </div>
                    <div class="categories-form p-6 space-y-6">
                        <form action="" method="POST">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Nom Categorie</label>
                                    <input type="text" name="name" id="product-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Apple Imac 27”" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                                    <input type="text" name="Description" id="brand" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Apple" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Specialite</label>
                                    <input type="text" name="Specialite" id="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="$2300" required="">
                                </div>
                            </div>
                            <div class="p-6 border-t border-gray-200 rounded-b">
                                <button name="send" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Add Categorie</button>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom Tag</th>
                            <th>Description</th>
                            <th>Specialite</th>
                            <th>Created_AT</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($row as $value)
                        {
                            echo 
                            '
                            <tr>
                                <td>'. $value['Nom'].'</td>
                                <td>'. $value['Description'].'</td>
                                <td>'. $value['Specialite'].'</td>
                                <td>'. $value['Created_AT'].'</td>
                                <td>
                                    <a href="C:\xampp\htdocs\Youdemy\App\Controllers\AdminController.php" class="btn" style="color: var(--primary);">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="/delete-categorie" method="POST">
                                        <input type="hidden" name="id" value="'.$value['ID'].'">
                                        <button class="fas fa-trash" type="submit"></button>
                                    </form>
                                </td>
                            </tr>';
                        }
                        ?>
                    

                            <script>
    const form_tags = document.querySelector('.categories-form');
    const add_tags = document.querySelector('.add');
    // form_tags.style.display = 'none';

    console.log(add_tags);

    add_tags.addEventListener('click', function () {
        if (form_tags.style.display === 'block') {
            form_tags.style.display = 'none';
        } else {
            form_tags.style.display = 'block';
        }
    });
</script>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
