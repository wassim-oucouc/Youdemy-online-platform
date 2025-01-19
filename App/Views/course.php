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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f1f5f9;
            padding: 20px;
        }

        .course-container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .course-header {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .category {
            display: inline-block;
            background: #e2e8f0;
            padding: 5px 15px;
            border-radius: 20px;
            color: #1e293b;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .course-title {
            font-size: 24px;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .course-description {
            color: #64748b;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .instructor {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .instructor-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e2e8f0;
        }

        .instructor-info {
            color: #64748b;
        }

        .instructor-name {
            color: #1e293b;
            font-weight: 500;
        }

        .pdf-container {
            padding: 20px;
            background: #f8fafc;
            min-height: 500px;
        }

        .pdf-viewer {
            width: 100%;
            height: 800px;
            border: 1px solid #e2e8f0;
            background: white;
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
    <div class="course-container">
        <!-- Course Information -->
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
                <div class="instructor-avatar"><img class ="imageprofile" src="'.$value['Photo'].'" alt=""></div>
                <div class="instructor-info">
                    Instructor: <span class="instructor-name">Prof. '.$value['Prenom']. " " . $value['Nom'] .'</span>
                </div>
            </div>
        </div>

        <!-- PDF Document -->
        <div class="pdf-container">
            <iframe class="pdf-viewer" src="'.$value['document'].'" type="application/pdf">
               
                   <a href="your-pdf-file.pdf">Click here to download the PDF file.</a>
                </p>
            </iframe>
        </div>';
         }
        ?>
    </div>
</body>
</html> 