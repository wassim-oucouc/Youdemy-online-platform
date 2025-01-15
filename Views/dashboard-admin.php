<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - YOUDEMY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Youdemy/App/Src/css/admin.css">
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
                        <a href="users.php" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="instructors.php" class="nav-link">
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

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
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

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(79, 70, 229, 0.1); color: var(--primary);">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <div class="stat-value">15,350</div>
                        <div class="stat-label">Total Users</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(52, 211, 153, 0.1); color: var(--success);">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <div class="stat-value">2,450</div>
                        <div class="stat-label">Active Courses</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(251, 191, 36, 0.1); color: var(--warning);">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div>
                        <div class="stat-value">845</div>
                        <div class="stat-label">Instructors</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(239, 68, 68, 0.1); color: var(--danger);">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div>
                        <div class="stat-value">$524,890</div>
                        <div class="stat-label">Total Revenue</div>
                    </div>
                </div>
            </div>

            <!-- Recent Users Table -->
            <section class="table-container">
                <div class="section-header">
                    <h2 class="section-title">Recent Users</h2>
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
                            <th>Courses</th>
                            <th>Join Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Student</td>
                            <td>5</td>
                            <td>2024-01-10</td>
                            <td>Active</td>
                            <td>
                                <button class="btn" style="color: var(--primary);">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn" style="color: var(--danger);">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>