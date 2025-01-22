<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Courses</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 8%;
            background: #1a1a1a;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.75rem;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #e5e5e5;
            font-weight: 500;
            transition: color 0.3s;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid transparent;
        }

        .nav-links a:hover {
            color: #4f46e5;
        }

        .nav-links a.active {
            color: #4f46e5;
            border-bottom: 2px solid #4f46e5;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #ffffff;
        }

        .user-menu img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #4f46e5;
        }

        /* Course Sections */
        .page-container {
            max-width: 1400px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
        }

        .page-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            font-weight: 700;
        }

        .search-bar {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .search-input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .filter-select {
            padding: 1rem 1.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            min-width: 200px;
            cursor: pointer;
            background-color: white;
            transition: all 0.3s;
        }

        .filter-select:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .course-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid #f3f4f6;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .course-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .course-content {
            padding: 2rem;
        }

        .course-title {
            font-size: 1.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .course-description {
            color: #4b5563;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #4b5563;
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: #f3f4f6;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, #4f46e5, #818cf8);
            border-radius: 5px;
            transition: width 0.3s ease;
        }

        .btn {
            background: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            background: #4338ca;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        .tab-container {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 3rem;
        }

        .tabs {
            display: flex;
            gap: 3rem;
        }

        .tab {
            padding: 1rem 0;
            color: #4b5563;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            font-weight: 500;
            transition: all 0.3s;
        }

        .tab:hover {
            color: #4f46e5;
        }

        .tab.active {
            color: #4f46e5;
            border-bottom-color: #4f46e5;
        }

        /* Dark mode preference */
        @media (prefers-color-scheme: dark) {
            body {
                background: #111111;
            }

            .page-title {
                color: #ffffff;
            }

            .course-card {
                background: #1a1a1a;
                border-color: #2d2d2d;
            }

            .course-title {
                color: #ffffff;
            }

            .course-description {
                color: #a3a3a3;
            }

            .search-input, .filter-select {
                background: #1a1a1a;
                border-color: #2d2d2d;
                color: #ffffff;
            }

            .progress-bar {
                background: #2d2d2d;
            }

            .tab-container {
                border-bottom-color: #2d2d2d;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">Youdemy</a>
        <div class="nav-links">
            <a href="/dashboard-etudiant">Home</a>
            <a href="/all-courses" class="active">All Courses</a>
            <a href="/my-courses">My Courses</a>
        </div>
        <div class="user-menu">
            <img src="/api/placeholder/32/32" alt="User">
            <span><?php echo $_SESSION['name']; ?></span>
        </div>
    </nav>

    <!-- All Courses Page -->
    <div class="page-container" id="allCourses">
        <div class="page-header">
            <h1 class="page-title">All Courses</h1>
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
            <?php
            foreach($EtudiantCours as $value)
            {
                echo '
            <div class="course-card">
                <img src="'.$value['thumbnail'].'" class="course-image">
                <div class="course-content">
                    <h3 class="course-title">'.$value['title'].'</h3>
                    <p class="course-description">'.$value['description'].'</p>
                    <div class="course-meta">
                        <h3>Prof '.$value['Nom'] .'  '.$value['Prenom'].'</h3>
                    </div>
                    <form action="/course-page" method="POST">
                    <input name="id" value="'.$value['ID'].'" type="hidden">
                    <button name="enroll" href="/course-page" class="btn">Enroll Now</button>
                    </form>
                </div>
            </div>';
            }
            ?>
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