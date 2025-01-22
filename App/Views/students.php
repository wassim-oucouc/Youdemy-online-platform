<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registrations</title>
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

        .registration-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .stat-card h3 {
            color: var(--text-light);
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .stat-card .number {
            color: var(--text-dark);
            font-size: 2rem;
            font-weight: 600;
        }

        .registrations-table {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--secondary);
        }

        th {
            background: #f8fafc;
            color: var(--text-dark);
            font-weight: 600;
        }

        td {
            color: var(--text-light);
        }

        .status-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
        }

        .status-active {
            background: rgba(34, 197, 94, 0.1);
            color: var(--success);
        }

        .status-pending {
            background: rgba(234, 179, 8, 0.1);
            color: #eab308;
        }

        .table-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
            }

            .registrations-table {
                overflow-x: auto;
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
            <li><a href="/Enseignant-dashboard" class="" data-page="home">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="/courses-management" data-page="courses">
                    <i class="fas fa-book"></i> Courses
                </a></li>
                <li><a href="/students" class ="active"data-page="students">
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
            <h1 class="page-title"> </h1>

            <div class="registration-stats">
                <div class="stat-card">
                    <h3>Total Registrations</h3>
                    <div class="number">
                        23
                    </div>
                </div>
                <div class="stat-card">
                    <h3>Active Students</h3>
                    <div class="number">
                    48
                    </div>
                </div>
            </div>

            <div class="registrations-table">
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Registration Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($row as $value)
                        {
                            echo
                        '
                        <tr>
                            <td>'.$value['prenom'] .'  '.$value['Nom']. ' </td>
                            <td>'.$value['title'] .'</td>
                            <td'.$value['inscription_date'] .'></td>
                            <td>
                                <span>
                                '.$value['inscription_date'] .'
                                </span>
                            </td>
                            <td>
                                <form action="/registration-delete" method="POST">
                                    <input type="hidden" name="registration_id" value="'.$value['ID'] .'">
                                    <button name = "delete-inscription" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>