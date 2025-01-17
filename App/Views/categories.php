<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Management - YOUDEMY Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Youdemy/App/Src/css/admin.css">
    <style>
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .category-card {
            background: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .category-icon {
            width: 48px;
            height: 48px;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            background: #EEF2FF;
            color: var(--primary);
        }

        .category-info h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }

        .category-stats {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #6B7280;
        }

        .category-actions {
            display: flex;
            justify-content: flex-end;
            gap: 0.5rem;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid #E5E7EB;
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.375rem;
            outline: none;
        }
    </style>
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
                        <a href="admin-dashboard.html" class="nav-link ">
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
                        <a href="admin-categories.html" class="nav-link active">
                            <i class="fas fa-tags"></i>
                            <span>Categories</span>
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
                    <input type="text" class="search-input" placeholder="Search categories...">
                </div>

                <div class="header-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Category
                    </button>
                </div>
            </header>
            <div class="category-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="category-info">
                        <h3>Development</h3>
                        <div class="category-stats">
                            <span><i class="fas fa-book"></i>245 Courses</span>
                            <span><i class="fas fa-user"></i>15.2K Students</span>
                        </div>
                    </div>
                    <div class="category-actions">
                        <button class="btn" style="color: var(--primary);">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn" style="color: var(--danger);">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal" style="display: none;">
        <div class="modal-header">
            <h2>Add New Category</h2>
            <button class="btn">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form>
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" placeholder="Enter category name">
            </div>
            <div class="form-group">
                <label>Icon</label>
                <select class="form-control">
                    <option>Select icon</option>
                    <option value="code">Code</option>
                    <option value="palette">Design</option>
                    <option value="chart-line">Business</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Enter category description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
        </form>
    </div>
</body>
</html>