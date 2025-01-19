<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHub</title>
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

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(75, 85, 99, 0.9), rgba(75, 85, 99, 0.9)), url('/api/placeholder/1920/600');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 1rem;
        }

        .section-title {
            font-size: 2rem;
            color: #4b5563;
            margin-bottom: 2rem;
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
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">LearnHub</a>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">All Courses</a>
            <a href="#">My Courses</a>
        </div>
        <div class="user-menu">
            <img src="/api/placeholder/32/32" alt="User">
            <span>John Doe</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </nav>

    <div class="hero">
        <h1>LEARN FROM THE EXPERTS</h1>
        <p>Access course content anytime, anywhere</p>
        <a href="#" class="btn">Get Started</a>
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
                    <form action="/course-page" method = "POST">
                    <input  type="hidden" name = "id" value = "'.$value['ID'].'">
                    <button name = "enroll"href="/course-page" class="btn">Enroll Now</button>
                    </form>
                </div>
            </div>';
        }
        ?>
            </div>
        </div>
    </main>
</body>
</html>


