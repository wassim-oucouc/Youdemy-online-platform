<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #4a90e2;
            --secondary: #f5f6fa;
            --text-dark: #2d3436;
            --text-light: #636e72;
            --danger: #e74c3c;
            --success: #2ecc71;
        }

        body {
            background: var(--secondary);
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 24px;
            color: var(--primary);
            margin-bottom: 30px;
            text-align: center;
        }

        .nav-links {
            list-style: none;
        }

        .nav-links li {
            margin-bottom: 10px;
        }

        .nav-links a {
            display: block;
            padding: 10px;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            background: var(--primary);
            color: white;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header h1 {
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .card h3 {
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .card p {
            font-size: 24px;
            color: var(--primary);
        }

        /* Forms */
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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

        /* Tables */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: var(--secondary);
            color: var(--text-dark);
        }

        /* Analytics Section */
        .analytics {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .chart {
            height: 300px;
            margin-top: 20px;
        }

        /* Hide all pages initially */
        .page {
            display: none;
        }

        /* Show active page */
        .page.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                Teacher Dashboard
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active" data-page="home">Home</a></li>
                <li><a href="/courses-management" data-page="/courses-management">Courses</a></li>
                <li><a href="#" data-page="students">Students</a></li>
                <li><a href="#" data-page="analytics">Analytics</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Home Page -->
            <div class="page active" id="home">
                <div class="header">
                    <h1>Dashboard Overview</h1>
                </div>
                <div class="dashboard-cards">
                    <div class="card">
                        <h3>Total Students</h3>
                        <p>125</p>
                    </div>
                    <div class="card">
                        <h3>Total Courses</h3>
                        <p>8</p>
                    </div>
                    <div class="card">
                        <h3>Active Courses</h3>
                        <p>6</p>
                    </div>
                </div>
                <div class="analytics">
                    <h2>Recent Activity</h2>
                    <div class="chart" id="activityChart"></div>
                </div>
            </div>

            <!-- Courses Page -->
            <div class="page" id="courses">
                <div class="header">
                    <h1>Courses Management</h1>
                </div>
                <div class="form-container">
                    <h2>Add New Course</h2>
                    <form id="courseForm">
                        <div class="form-group">
                            <label>Course Title</label>
                            <input type="text" id="courseTitle" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="courseDescription" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Course</button>
                    </form>
                </div>
                <div class="table-container">
                    <h2>Current Courses</h2>
                    <table id="coursesTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Students</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Courses will be added here dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Students Page -->
            <div class="page" id="students">
                <div class="header">
                    <h1>Students Management</h1>
                </div>
                <div class="table-container">
                    <h2>Registered Students</h2>
                    <table id="studentsTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Courses</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Students will be added here dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Analytics Page -->
            <div class="page" id="analytics">
                <div class="header">
                    <h1>Analytics</h1>
                </div>
                <div class="analytics">
                    <h2>Student Growth</h2>
                    <div class="chart" id="growthChart"></div>
                </div>
                <div class="analytics">
                    <h2>Course Performance</h2>
                    <div class="chart" id="performanceChart"></div>
                </div>
            </div>
        </div>
    </div>
