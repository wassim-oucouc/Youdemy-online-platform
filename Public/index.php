<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUDEMY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../App\Src\css\index.css">
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
                        <a href="#" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book"></i>
                            <span>My Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-chart-line"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
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
                    <input type="text" class="search-input" placeholder="Search for courses...">
                </div>

                <div class="header-actions">
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge"></span>
                    </button>
                    <div class="user-profile">
                        <img src="/api/placeholder/32/32" alt="Profile" class="w-8 h-8 rounded-full">
                    </div>
                </div>
            </header>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(79, 70, 229, 0.1); color: var(--primary);">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-value">75,000+</div>
                    <div class="stat-label">Total Students</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(52, 211, 153, 0.1); color: var(--success);">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-value">50</div>
                    <div class="stat-label">Active Courses</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(251, 191, 36, 0.1); color: var(--warning);">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-value">4.8</div>
                    <div class="stat-label">Average Rating</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(239, 68, 68, 0.1); color: var(--danger);">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-value">200</div>
                    <div class="stat-label">Total Revenue</div>
                </div>
            </div>

            <!-- Popular Courses -->
            <section>
                <div class="section-header">
                    <h2 class="section-title">Popular Courses</h2>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Create New Course
                    </button>
                </div>

                <div class="course-grid">
                    <!-- Course Card 1 -->
                    <div class="course-card">
                        <div class="course-banner">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="course-content">
                            <div class="course-category">Development</div>
                            <h3 class="course-title">Modern Web Development</h3>
                            <div class="course-stats">
                                <span><i class="fas fa-user"></i> 2,150 Students</span>
                                <span><i class="fas fa-star"></i> 4.9</span>
                            </div>
                        </div>
                    </div>

                    <!-- Course Card 2 -->
                    <div class="course-card">
                        <div class="course-banner" style="background: linear-gradient(45deg, #F59E0B, #FBBF24);">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="course-content">
                            <div class="course-category">Design</div>
                            <h3 class="course-title">UI/UX Design Fundamentals</h3>
                            <div class="course-stats">
                                <span><i class="fas fa-user"></i> 1,840 Students</span>
                                <span><i class="fas fa-star"></i> 4.8</span>
                            </div>
                        </div>
                    </div>

                    <!-- Course Card 3 -->
                    <div class="course-card">
                        <div class="course-banner" style="background: linear-gradient(45deg, #EC4899, #F472B6);">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="course-content">
                            <div class="course-category">Marketing</div>
                            <h3 class="course-title">Digital Marketing Mastery</h3>
                            <div class="course-stats">
                                <span><i class="fas fa-user"></i> 1,650 Students</span>
                                <span><i class="fas fa-star"></i> 4.7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>