<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f0f2f5;
            color: #333;
        }

        .navbar {
            background: #2563eb;
            padding: 1.2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-content h1 {
            color: white;
            font-size: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 2rem;
            font-weight: 500;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .page-title {
            font-size: 1.8rem;
            color: #1f2937;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e5e7eb;
        }

        .course-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .form-title {
            font-size: 1.5rem;
            color: #2563eb;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            text-align: center;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .btn-danger:hover {
            background: #b91c1c;
        }

        .btn-edit {
            background: #059669;
            color: white;
        }

        .btn-edit:hover {
            background: #047857;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .course-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
        }

        .course-card h3 {
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .course-code {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: #e0e7ff;
            color: #4338ca;
            border-radius: 15px;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .course-info {
            color: #6b7280;
            margin-bottom: 1rem;
        }

        .stats {
            display: flex;
            gap: 1rem;
            color: #374151;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .card-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #e5e7eb;
        }

        .card-actions .btn {
            flex: 1;
            padding: 0.5rem 1rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .nav-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-links {
                display: flex;
                gap: 1rem;
            }

            .nav-links a {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <h1>Teacher Dashboard</h1>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="courses.html">Courses</a>
                <a href="students.html">Students</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="page-title">Course Management</h1>

        <form class="course-form" action="/courses-management" method="POST">
            <h2 class="form-title">Add New Course</h2>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="courseTitle">Course Title</label>
                    <input type="text" id="courseTitle" name="courseTitle" required placeholder="e.g. Mathematics 101">
                </div>

                <div class="form-group">
                    <label for="courseCode">Price</label>
                    <input type="text" id="courseCode" name="courseprice" required placeholder="Price">
                </div>
            </div>

            <div class="form-group">
                <label for="courseDescription">Course Description</label>
                <textarea id="courseDescription" name="courseDescription" rows="4" required placeholder="Enter course description..."></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="courseCapacity">Document</label>
                    <input type="text" id="courseCapacity" name="coursedocument" required placeholder="Enter Document Link">
                </div>

                <div class="form-group">
                    <label for="courseDuration">thumbnail</label>
                    <input type="text" id="courseDuration" name="coursephoto"  required placeholder="Enter Photo Course">
                </div>
                <div class="form-group">
                <label for="courseLevel">Categorie</label>
                <select id="courseLevel" name="categorie" required>
                <option value="">Select categorie</option>
                <?php
                foreach($row as $value)
                {
                    echo '
                <option value="'.$value['Nom'].'">'.$value['Nom'].'</option>
               ';
                }
                ?>
                 </select>
            </div>
            <div class="form-group">
    <label for="courseLevel">Tags</label>
    <div class="checkbox-group">
        <?php
        var_dump($id_course);
        foreach($tagsrow as $value)
        {
            echo '
            <label>
                <input type="checkbox" name="tags[]" value="' . $value['ID'] . '"> ' . $value['Nom'] . '
            </label>
            <br>
            ';
        }
        ?>
    </div>
</div>
                
                </select>
            </div>
            <button name = "Add" type="submit" class="btn btn-primary">Add Course</button>
        </form>

        <!-- Course Cards -->
        <div class="course-grid">
            <?php
            foreach($rowcour as $value)
            {
                echo '
            <div class="course-card">
                <h3>'.$value['title'].'</h3>
                <span class="course-code">'.$value['categoriename'].'</span>
                <p class="course-info">'.$value['description'].'</p>
                <div class="card-actions">
                <form action="/course-delete" method = "POST">
                
                   <button name="deletecourse" class="btn btn-danger">Delete</button>
                    <input type="hidden" name="id" value = "'.$value['ID'].'">
                     </form>
                      <form action="/course-edit" method = "POST">
                    <button class="btn btn-edit">Edit</button>
                     </form>    
                </div>
            </div>';
            }
        ?>
        
        </div>
    </div>
</body>
</html> 