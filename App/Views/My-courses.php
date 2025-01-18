<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHub - Courses</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 8%;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2563eb;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            font-weight: 500;
        }

        .nav-links a.active {
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .user-menu img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        /* Course Sections */
        .page-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 2rem;
            color: #4b5563;
        }

        .search-bar {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .search-input {
            flex: 1;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            font-size: 1rem;
        }

        .filter-select {
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            font-size: 1rem;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .course-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-content {
            padding: 1.5rem;
        }

        .course-title {
            font-size: 1.25rem;
            color: #4b5563;
            margin-bottom: 0.5rem;
        }

        .course-description {
            color: #6b7280;
            margin-bottom: 1rem;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .progress-fill {
            height: 100%;
            background: #2563eb;
            border-radius: 4px;
        }

        .btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .tab-container {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 2rem;
        }

        .tabs {
            display: flex;
            gap: 2rem;
        }

        .tab {
            padding: 1rem 0;
            color: #4b5563;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            color: #2563eb;
            border-bottom-color: #2563eb;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">LearnHub</a>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#" >All Courses</a>
            <a href="#" class="active">My Courses</a>
        </div>
        <div class="user-menu">
            <img src="/api/placeholder/32/32" alt="User">
            <span>John Doe</span>
        </div>
    </nav>

    <!-- All Courses Page -->
    <div class="page-container" id="allCourses">
        <div class="page-header">
            <h1 class="page-title">My Courses</h1>
        </div>
        
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search courses...">
            <select class="filter-select">
                <option value="">All Categories</option>
                <option value="development">Development</option>
                <option value="design">Design</option>
                <option value="business">Business</option>
            </select>
        </div>

        <div class="course-grid">
            <div class="course-card">
                <img src="/api/placeholder/300/200" alt="Python Programming" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">Python Programming</h3>
                    <p class="course-description">Learn Python from scratch to advanced concepts</p>
                    <div class="course-meta">
                        <span>36 hours</span>
                        <span>4.8 ⭐</span>
                    </div>
                    <a href="#" class="btn">Show Content</a>
                </div>
            </div>

            <div class="course-card">
                <img src="/api/placeholder/300/200" alt="UI/UX Design" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">UI/UX Design</h3>
                    <p class="course-description">Master modern design principles and tools</p>
                    <div class="course-meta">
                        <span>28 hours</span>
                        <span>4.9 ⭐</span>
                    </div>
                    <a href="#" class="btn">Show Content</a>
                </div>
            </div>

            <div class="course-card">
                <img src="/api/placeholder/300/200" alt="Business Analytics" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">Business Analytics</h3>
                    <p class="course-description">Learn data-driven business decision making</p>
                    <div class="course-meta">
                        <span>42 hours</span>
                        <span>4.7 ⭐</span>
                    </div>
                    <a href="#" class="btn">Show Content</a>
                </div>
            </div>
        </div>
    </div>

    <!-- My Courses Page -->
    <div class="page-container" id="myCourses" style="display: none;">
        <div class="page-header">
            <h1 class="page-title">My Courses</h1>
        </div>

        <div class="tab-container">
            <div class="tabs">
                <div class="tab active">In Progress</div>
                <div class="tab">Completed</div>
            </div>
        </div>

        <div class="course-grid">
            <div class="course-card">
                <img src="/api/placeholder/300/200" alt="Web Development" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">Web Development Fundamentals</h3>
                    <p class="course-description">Learn HTML, CSS, and JavaScript basics</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 60%;"></div>
                    </div>
                    <div class="course-meta">
                        <span>60% Complete</span>
                        <span>12/20 Lessons</span>
                    </div>
                    <a href="#" class="btn">Continue Learning</a>
                </div>
            </div>

            <div class="course-card">
                <img src="/api/placeholder/300/200" alt="Data Science" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">Data Science Essentials</h3>
                    <p class="course-description">Master data analysis and visualization</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 30%;"></div>
                    </div>
                    <div class="course-meta">
                        <span>30% Complete</span>
                        <span>6/20 Lessons</span>
                    </div>
                    <a href="#" class="btn">Continue Learning</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>