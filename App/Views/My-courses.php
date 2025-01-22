<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHub - My Courses</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        body {
            background: #f8f9fa;
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

        /* Course Dashboard */
        .dashboard {
            max-width: 1400px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .dashboard-header {
            margin-bottom: 3rem;
        }

        .page-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .progress-summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .progress-card {
            background: white;
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .progress-card h3 {
            color: #4b5563;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .progress-card .number {
            color: #1a1a1a;
            font-size: 2rem;
            font-weight: 700;
        }

        .course-filters {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
            color: #4b5563;
        }

        .filter-btn.active {
            background: #4f46e5;
            color: white;
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
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .course-image {
            width: 100%;
            height: 200px;
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
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #4b5563;
            margin-bottom: 1.5rem;
        }

        .instructor {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .instructor img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #f3f4f6;
            border-radius: 4px;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, #4f46e5, #818cf8);
            border-radius: 4px;
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
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            background: #4338ca;
            transform: translateY(-2px);
        }

        @media (prefers-color-scheme: dark) {
            body {
                background: #111111;
            }

            .page-title {
                color: #ffffff;
            }

            .progress-card {
                background: #1a1a1a;
            }

            .progress-card .number {
                color: #ffffff;
            }

            .course-card {
                background: #1a1a1a;
            }

            .course-title {
                color: #ffffff;
            }

            .filter-btn {
                background: #1a1a1a;
                color: #e5e5e5;
            }

            .filter-btn.active {
                background: #4f46e5;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">LearnHub</a>
        <div class="nav-links">
            <a href="/dashboard-etudiant">Home</a>
            <a href="/all-courses">All Courses</a>
            <a href="/my-courses" class="active">My Courses</a>
        </div>
        <div class="user-menu">
            <span><?php echo $_SESSION['name']; ?></span>
        </div>
    </nav>

    <div class="dashboard">
        <div class="dashboard-header">
            <h1 class="page-title">My Learning Dashboard</h1>
        </div>

        <div class="course-filters">
            <button class="filter-btn active">All Courses</button>
            <button class="filter-btn">In Progress</button>
            <button class="filter-btn">Completed</button>
        </div>

        <div class="course-grid">
           <?php
           foreach($row as $value)
           {
            echo 
            '
                <div class="course-card">
                    <img src="'.$value['thumbnail'].'" alt="'.$value['title'].'" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title">'.$value['title'].'</h3>
                        <div class="instructor">
                            <img src="/api/placeholder/32/32" alt="Instructor">
                            <span>Prof. <'.$value['nom'].' '.$value['prenom'].'</span>
                        </div>
                    </div>
                </div>';
           }
           ?>
        </div>
    </div>
</body>
</html>