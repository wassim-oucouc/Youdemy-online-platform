<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Management - YOUDEMY Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar (same as original) -->
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
                        <a href="admin-dashboard.html" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-courses.html" class="nav-link active">
                            <i class="fas fa-book"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-users.html" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-instructors.html" class="nav-link">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>Instructors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-categories.html" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Categories</span>
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

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="Search courses...">
                </div>

                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add Course
                </button>
            </header>

            <!-- Filters -->
            <div class="filter-section">
                <div class="filter-row">
                    <select class="filter-select">
                        <option>All Categories</option>
                        <option>Web Development</option>
                        <option>Design</option>
                        <option>Business</option>
                    </select>

                    <select class="filter-select">
                        <option>All Status</option>
                        <option>Published</option>
                        <option>Draft</option>
                        <option>Under Review</option>
                    </select>

                    <select class="filter-select">
                        <option>Price Range</option>
                        <option>Free</option>
                        <option>Under $50</option>
                        <option>$50 - $100</option>
                        <option>Over $100</option>
                    </select>
                </div>
            </div>

            <!-- Bulk Actions -->
            <div class="bulk-actions">
                <button class="action-btn">
                    <i class="fas fa-trash" style="color: var(--danger);"></i>
                    Delete Selected
                </button>
                <button class="action-btn">
                    <i class="fas fa-eye-slash" style="color: var(--warning);"></i>
                    Unpublish Selected
                </button>
                <button class="action-btn">
                    <i class="fas fa-check" style="color: var(--success);"></i>
                    Publish Selected
                </button>
            </div>

            <!-- Courses Table -->
            <div class="table-container">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        
                    </thead>
                    <tbody>
        <?php
    foreach($cours as $value) {
        echo '
        <tr>
            <td><input type="checkbox"></td>
            <td>
                <div class="course-info">
                    <div class="course-thumbnail">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <div class="course-title">'. $value['title'].'</div>
                        <div class="course-instructor">' . "By" . " ". $value['Prenom'].'</div>
                    </div>
                </div>
            </td>
            <td>' . $value['categoriename'].'</td>
            <td>' . $value['tagname'].'</td>
            <td class="price-tag">'."$". $value['price'].'</td>
            <td><span class="">' . $value['Status'].'</span></td>
            <td>
            <form action="/course-delete-admin" METHOD = "POST">
            <input type="hidden" name = "id" value = "'.$value['ID'] .'">
                <button name = "deletecourse"class="btn" style="color: var(--primary);"><i class="fas fa-trash"></i></button>
                </form>
                <form action="/course-edit-admin" METHOD ="POST">
                <input name = "id" type="hidden" value = "'.$value['ID'] .'">
                 <button name ="editcourse" class="btn" style="color: var(--danger);"><i class="fas fa-edit"></i></button>
                 </form>
                <button class="btn" style="color: var(--warning);"><i class="fas fa-eye"></i></button>
               
            </td>
        </tr>';
    }
    ?>
</tbody>
                </table>

                <!-- Pagination -->
                <div class="pagination">
                    <div>Showing 1 to 10 of 100 entries</div>
                    <div class="page-buttons">
                        <button class="page-btn">Previous</button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <button class="page-btn">Next</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>