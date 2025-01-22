<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
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
            --warning: #f59e0b;
            --info: #3b82f6;
        }

        body {
            background: var(--secondary);
            min-height: 100vh;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Enhanced Sidebar */
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

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
            background: var(--secondary);
        }

        .header {
            background: white;
            padding: 1.5rem 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .header h1 {
            color: var(--text-dark);
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* Enhanced Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: var(--text-light);
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .card p {
            font-size: 2rem;
            color: var(--text-dark);
            font-weight: 600;
        }

        /* Enhanced Forms */
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .form-container h2 {
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
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

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
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

        /* Enhanced Tables */
        .table-container {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .table-container h2 {
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th, td {
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: var(--secondary);
            color: var(--text-dark);
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tr:hover {
            background: #f8fafc;
        }

        /* Analytics Section */
        .analytics {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .analytics h2 {
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .chart {
            height: 350px;
            margin-top: 1.5rem;
            border-radius: 8px;
            overflow: hidden;
            background: var(--secondary);
        }

        /* Status Badges */
        .badge {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .badge-success {
            background: rgba(34, 197, 94, 0.1);
            color: var(--success);
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .badge-danger {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
        }

        /* Actions Menu */
        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            padding: 0.5rem;
            border-radius: 6px;
            background: var(--secondary);
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s;
        }

        .action-btn:hover {
            background: var(--primary);
            color: white;
        }

        /* Page Transitions */
        .page {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }

        .page.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
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
                </a></li>
                <li><a href="#" data-page="analytics">
                    <i class="fas fa-chart-line"></i> Analytics
                </a></li>
                <li><a href="#">
                    <i class="fas fa-cog"></i> Settings
                </a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="page active" id="home">
                <div class="header">
                    <h1>Dashboard Overview</h1>
                    <p class="text-light">Welcome back, Professor Smith</p>
                </div>
                
                <div class="dashboard-cards">
                    <div class="card">
                        <h3>Total Students</h3>
                        <p>125</p>
                    </div>
                    <div class="card">
                        <h3>Active Courses</h3>
                        <p>8</p>
                    </div>
                    <div class="card">
                        <h3>Completion Rate</h3>
                        <p>87%</p>
                    </div>
                    <div class="card">
                        <h3>Total Revenue</h3>
                        <p>$12,450</p>
                    </div>
                </div>

                <div class="analytics">
                    <h2>Recent Activity</h2>
                    <div class="chart">
                        <!-- Chart will be rendered here -->
                    </div>
                </div>
            </div>
            
            <!-- Other pages remain the same structure but will inherit the new styles -->
        </div>
    </div>
</body>
</html>