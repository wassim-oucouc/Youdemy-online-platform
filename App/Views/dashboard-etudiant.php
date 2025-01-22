!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy Professional</title>
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
        }

        .nav-links a:hover {
            color: #4f46e5;
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

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 26, 26, 0.85), rgba(26, 26, 26, 0.95)), url('/api/placeholder/1920/600');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #4f46e5, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            color: #e5e5e5;
        }

        .btn {
            background: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #4338ca;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        /* Main Content */
        main {
            max-width: 1400px;
            margin: 6rem auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 3rem;
            font-weight: 700;
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
        }

        .course-description {
            color: #4b5563;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        /* Dark mode preference */
        @media (prefers-color-scheme: dark) {
            body {
                background: #111111;
            }

            .section-title {
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
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">Youdemy</a>
        <div class="nav-links">
            <a href="/dashboard-etudiant">Home</a>
            <a href="/all-courses">All Courses</a>
            <a href="/my-courses">My Courses</a>
        </div>
        <div class="user-menu">
            <img src="/api/placeholder/32/32" alt="User">
            <span><?php echo $_SESSION['name']; ?></span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </nav>

    <div class="hero">
        <h1>LEARN FROM THE EXPERTS</h1>
        <p>Access course content anytime, anywhere</p>
        <a href="/all-courses" class="btn">Get Started</a>
    </div>

    <main>
        <h2 class="section-title">All Courses</h2>
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
                        <form action="/course-page" method="POST">
                            <input type="hidden" name="id" value="'.$value['ID'].'">
                            <button name="enroll" href="/course-page" class="btn">Enroll Now</button>
                        </form>
                    </div>
                </div>';
            }
            ?>
        </div>
    </main>
</body>
</html>