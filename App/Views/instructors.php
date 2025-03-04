<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructors Management - YOUDEMY Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
    <style>
        .instructor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .instructor-card {
            background: white;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .instructor-banner {
            height: 100px;
            background: linear-gradient(45deg, #4F46E5, #7C3AED);
            position: relative;
        }

        .instructor-avatar {
            position: absolute;
            bottom: -40px;
            left: 20px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid white;
            background: #F3F4F6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #6B7280;
        }

        .instructor-content {
            padding: 3rem 1.5rem 1.5rem;
        }

        .instructor-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.25rem;
        }

        .instructor-title {
            color: #6B7280;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .instructor-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            text-align: center;
            padding: 1rem 0;
            border-top: 1px solid #E5E7EB;
            border-bottom: 1px solid #E5E7EB;
            margin-bottom: 1rem;
        }

        .stat-value {
            font-weight: 600;
            color: #111827;
        }

        .stat-label {
            font-size: 0.75rem;
            color: #6B7280;
        }

        .instructor-actions {
            display: flex;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
        }

        .status-active {
            background: #D1FAE5;
            color: #065F46;
        }

        .filter-section {
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .filter-row {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
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
                        <a href="/users" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/instructors" class="nav-link active">
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

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="Search instructors...">
                </div>

                <div class="header-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Instructor
                    </button>
                </div>
            </header>

            <!-- Filter Section -->
            <div class="filter-section">
                <div class="filter-row">
                    <select class="filter-select">
                        <option>All Departments</option>
                        <option>Development</option>
                        <option>Design</option>
                        <option>Business</option>
                    </select>

                    <select class="filter-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Suspended</option>
                    </select>

                    <select class="filter-select">
                        <option>Sort By</option>
                        <option>Students Count</option>
                        <option>Course Count</option>
                        <option>Rating</option>
                    </select>
                </div>
            </div>

            <!-- Instructors Grid -->
            <div class="instructor-grid">
                <!-- Instructor Card 1 -->
                 <?php
                foreach($instructors as $key => $value)
    {
echo
'
                <div class="instructor-card">
                    <div class="instructor-banner">
                        <div class="instructor-avatar">
                            <img class ="imginstruct"src ="'.$value['Photo'].'">
                        </div>
                    </div>
                    <div class="instructor-content">
                        <h3 class="instructor-name">'.$value['Nom'] . " " . $value['Prenom'] . '</h3>
                        <p class="instructor-title">Senior Web Developer</p>
                        
                        <div class="instructor-stats">
                            <div>
                                <p class="">'.$value['JoinDate'].'</p>
                                <div class="stat-label">Date Joined</div>
                            </div>
                            <div>
                                <p class="">'.$value['Role'].'</p>
                                <div class="stat-label">Role</div>
                            </div>
                            <div>
                                <div class="stat-value">4.8</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>

                        <div class="instructor-actions">
                            <span class="status-badge">
                                '.$value['Status'].'
                            </span>
                            <div>
                             <button class="btn" style="color: var(--primary);">
                                    <i class="fas fa-edit"></i>
                                </button>
                                  <form action="/admin/unbanuser" method = "POST">
                                <input type="hidden" name="unban" value="'.$value['ID'].'">
                                <button  class="fas fa-eye" style="color: var(--warning);">
                                </button>
                                </form>
                                <form action="/admin/banuser"  method = "POST">
                                <input type="hidden" name="id" value="'.$value['ID'].'">
                                <button class="fas fa-ban" style="cwwolor: var(--danger);">
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
    }
                ?>
                <!-- Add more instructor cards here -->
            </div>
        </main>
    </div>
</body>
</html>