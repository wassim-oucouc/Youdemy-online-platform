<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management - YOUDEMY Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Youdemy/App/Src/css/admin.css">
</head>

<style>
     /* Reset and Base Styles */
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, sans-serif;
        }

        :root {
            --primary: #4F46E5;
            --success: #34D399;
            --warning: #FBBF24;
            --danger: #EF4444;
            --sidebar-width: 250px;
        }

        body {
            background-color: #F3F4F6;
            min-height: 100vh;
        }

        /* Layout */
        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: white;
            box-shadow: 2px 0 8px rgba(0,0,0,0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .brand {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid #E5E7EB;
        }

        .brand-logo i {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .brand-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 1.5rem;
        }

        /* Navigation */
        .nav-menu {
            list-style: none;
            padding: 1rem 0;
        }

        .nav-item {
            padding: 0.25rem 1rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #4B5563;
            text-decoration: none;
            border-radius: 0.5rem;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: #F3F4F6;
        }

        .nav-link.active {
            background-color: #EEF2FF;
            color: var(--primary);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: white;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: #F9FAFB;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            width: 300px;
        }

        .search-input {
            border: none;
            background: none;
            padding: 0.5rem;
            width: 100%;
            outline: none;
        }

        /* Filters */
        .filter-section {
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .filter-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .filter-select {
            padding: 0.5rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.375rem;
            outline: none;
            min-width: 150px;
        }

        /* Buttons */
        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: 1px solid transparent;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: #4338CA;
        }

        /* Table Styles */
        .table-container {
            background: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-top: 1rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th,
        .users-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #E5E7EB;
        }

        .users-table th {
            background: #F9FAFB;
            font-weight: 600;
            color: #374151;
        }

        .users-table tr:hover {
            background: #F9FAFB;
        }

        /* User Info */
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #E5E7EB;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-name {
            font-weight: 500;
            color: #111827;
        }

        .user-email {
            font-size: 0.875rem;
            color: #6B7280;
        }

        /* Status Badge */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            display: inline-block;
        }

        .status-active {
            background: #D1FAE5;
            color: #065F46;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            margin-top: 1rem;
            border-top: 1px solid #E5E7EB;
        }

        .page-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .page-btn {
            padding: 0.5rem 1rem;
            border: 1px solid #E5E7EB;
            background: white;
            border-radius: 0.375rem;
            cursor: pointer;
        }

        .page-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Bulk Actions */
        .bulk-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .action-btn {
            padding: 0.5rem 1rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.375rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, sans-serif;
        }

        :root {
            --primary: #4F46E5;
            --success: #34D399;
            --warning: #FBBF24;
            --danger: #EF4444;
            --sidebar-width: 250px;
        }

        /* All existing styles remain the same */
        body {
            background-color: #F3F4F6;
            min-height: 100vh;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Keeping all the sidebar, layout, and button styles from the original */
        .sidebar {
            width: var(--sidebar-width);
            background: white;
            box-shadow: 2px 0 8px rgba(0,0,0,0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .brand {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid #E5E7EB;
        }

        /* All other styles from the original template */
        /* ... */

        /* Additional styles specific to courses */
        .course-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .course-thumbnail {
            width: 60px;
            height: 40px;
            border-radius: 0.375rem;
            background: #E5E7EB;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .course-title {
            font-weight: 500;
            color: #111827;
        }

        .course-instructor {
            font-size: 0.875rem;
            color: #6B7280;
        }

        .price-tag {
            font-weight: 600;
            color: var(--primary);
        }
        </style>
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
                        <a href="admin-dashboard.html" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-courses.html" class="nav-link">
                            <i class="fas fa-book"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-users.html" class="nav-link active">
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
                    <input type="text" class="search-input" placeholder="Search users...">
                </div>

                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add User
                </button>
            </header>

            <!-- Filters -->
            <div class="filter-section">
                <div class="filter-row">
                    <select class="filter-select">
                        <option>All Roles</option>
                        <option>Student</option>
                        <option>Instructor</option>
                        <option>Admin</option>
                    </select>

                    <select class="filter-select">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Suspended</option>
                    </select>

                    <select class="filter-select">
                        <option>Registration Date</option>
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>Last 90 days</option>
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
                    <i class="fas fa-ban" style="color: var(--warning);"></i>
                    Suspend Selected
                </button>
                <button class="action-btn">
                    <i class="fas fa-check" style="color: var(--success);"></i>
                    Activate Selected
                </button>
            </div>

            <!-- Users Table -->
            <div class="table-container">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
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
                            <td><input type="checkbox"></td>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-email">john@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Student</td>
                            <td>5</td>
                            <td>Jan 15, 2024</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <button class="btn" style="color: var(--primary);"><i class="fas fa-edit"></i></button>
                                <button class="btn" style="color: var(--warning);"><i class="fas fa-eye"></i></button>
                                <button class="btn" style="color: var(--danger);"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
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