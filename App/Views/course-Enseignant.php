<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --secondary: #f1f5f9;
            --text-dark: #0f172a;
            --text-light: #64748b;
            --danger: #ef4444;
            --success: #22c55e;
        }

        body {
            background: var(--secondary);
            min-height: 100vh;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: white;
            padding: 1.5rem;
            box-shadow: 4px 0 10px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 2rem;
            text-align: center;
            padding: 0.5rem;
            border-bottom: 2px solid var(--secondary);
        }

        .nav-links {
            list-style: none;
            margin-top: 1rem;
        }

        .nav-links li {
            margin-bottom: 0.5rem;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1rem;
            color: var(--text-light);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .nav-links a i {
            font-size: 1.25rem;
        }

        .nav-links a:hover, .nav-links a.active {
            background: var(--primary);
            color: white;
            transform: translateX(5px);
        }

        .main-content {
            flex: 1;
            padding: 2rem;
            background: var(--secondary);
        }

        .page-title {
            color: var(--text-dark);
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .course-form {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .form-title {
            color: var(--text-dark);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-edit {
            background: var(--success);
            color: white;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-card h3 {
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .course-code {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .course-info {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .card-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--secondary);
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 0.5rem;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: normal;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                EduDash Pro
            </div>
            <ul class="nav-links">
            <li><a href="/Enseignant-dashboard" class="active" data-page="home">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="/courses-management" data-page="courses">
                    <i class="fas fa-book"></i> Courses
                </a></li>
                <li><a href="/students" data-page="students">
                    <i class="fas fa-users"></i> Students
                <li><a href="#">
                    <i class="fas fa-chart-line"></i> Analytics
                </a></li>
                <li><a href="#">
                    <i class="fas fa-cog"></i> Settings
                </a></li>
            </ul>
        </div>

        <div class="main-content">
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
                        <input type="text" id="courseDuration" name="coursephoto" required placeholder="Enter Photo Course">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="courseLevel">Categorie</label>
                        <select id="courseLevel" name="categorie" required>
                            <option value="">Select categorie</option>
                            <?php foreach($row as $value) { ?>
                                <option value="<?php echo $value['Nom']; ?>"><?php echo $value['Nom']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="courseLevel">Tags</label>
                        <div class="checkbox-group">
                            <?php foreach($tagsrow as $value) { ?>
                                <label>
                                    <input type="checkbox" name="tags[]" value="<?php echo $value['ID']; ?>">
                                    <?php echo $value['Nom']; ?>
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <button name="Add" type="submit" class="btn btn-primary">Add Course</button>
            </form>

            <div class="course-grid">
                <?php foreach($rowcour as $value) { ?>
                    <div class="course-card">
                        <h3><?php echo $value['title']; ?></h3>
                        <span class="course-code"><?php echo $value['categoriename']; ?></span>
                        <p class="course-info"><?php echo $value['description']; ?></p>
                        <div class="card-actions">
                            <form action="/course-delete" method="POST">
                                <button name="deletecourse" class="btn btn-danger">Delete</button>
                                <input type="hidden" name="id" value="<?php echo $value['ID']; ?>">
                            </form>
                            <form action="/course-edit-instructor" method="POST">
                                <input name="id" type="hidden" value="<?php echo $value['ID']; ?>">
                                <button name="edit-cours" class="btn btn-edit edit-cours">Edit</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>