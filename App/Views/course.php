<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Document</title>
    <link rel="stylesheet" href="/css/course.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        body {
            background: #f8fafc;
            padding: 2rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 8%;
            background: #1a1a1a;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: -2rem -2rem 2rem -2rem;
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

        .course-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .course-header {
            padding: 2.5rem;
            border-bottom: 1px solid #e2e8f0;
            background: linear-gradient(to right, #ffffff, #f8fafc);
        }

        .category {
            display: inline-block;
            background: #4f46e5;
            padding: 0.5rem 1.25rem;
            border-radius: 30px;
            color: white;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 1.25rem;
            transition: transform 0.3s;
        }

        .category:hover {
            transform: translateY(-2px);
        }

        .course-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1.25rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .course-description {
            color: #4b5563;
            margin-bottom: 1.5rem;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .instructor {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .instructor-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #4f46e5;
        }

        .imageprofile {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .instructor-info {
            color: #64748b;
            font-size: 1.1rem;
        }

        .instructor-name {
            color: #1a1a1a;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .pdf-container {
            padding: 2.5rem;
            background: #ffffff;
        }

        .pdf-viewer {
            width: 100%;
            height: 800px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        /* Dark mode preference */
        @media (prefers-color-scheme: dark) {
            body {
                background: #111111;
            }

            .course-container {
                background: #1a1a1a;
            }

            .course-header {
                background: linear-gradient(to right, #1a1a1a, #262626);
                border-bottom-color: #2d2d2d;
            }

            .course-title {
                color: #ffffff;
            }

            .course-description {
                color: #a3a3a3;
            }

            .instructor {
                background: #262626;
                border-color: #2d2d2d;
            }

            .instructor-name {
                color: #ffffff;
            }

            .pdf-container {
                background: #1a1a1a;
            }

            .pdf-viewer {
                background: #262626;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">Youdemy</a>
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
    <div class="course-container">
        <?php
        foreach($course as $value)
        {
        echo '
        <div class="course-header">
            <span class="category">'.$value['categoriename'].'</span>
            <h1 class="course-title">'.$value['title'].'</h1>
            <p class="course-description">
                '.$value['description'].'
            </p>
            <div class="instructor">
                <div class="instructor-avatar"><img class="imageprofile" src="'.$value['Photo'].'" alt=""></div>
                <div class="instructor-info">
                    Instructor: <span class="instructor-name">Prof. '.$value['Prenom']. " " . $value['Nom'] .'</span>
                </div>
            </div>
        </div>

        <div class="pdf-container">
            <iframe class="pdf-viewer" src="'.$value['document'].'" type="application/pdf">
                <p>
                    <a href="your-pdf-file.pdf">Click here to download the PDF file.</a>
                </p>
            </iframe>
        </div>';
        }
        ?>
    </div>
</body>
</html>