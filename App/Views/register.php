<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Sign In & Register</title>
    <link rel="stylesheet" href="/css/register-login.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: auto;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        .left-panel {
            background-color: #007bff;
            color: white;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
        .brand {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .welcome-text h1 {
            font-size: 2em;
            margin: 0;
        }
        .welcome-text p {
            margin-top: 10px;
            font-size: 1.1em;
        }
        .right-panel {
            flex: 1;
            padding: 40px;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: #007bff;
            outline: none;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        .switch-form {
            text-align: center;
            margin-top: 15px;
        }
        .switch-form a {
            color: #007bff;
            text-decoration: none;
        }
        .switch-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="brand">Youdemy</div>
            <div class="welcome-text">
                <h1>Welcome to Youdemy</h1>
                <p>Unlock your potential with our comprehensive online courses. Join thousands of students already learning with us.</p>
            </div>
        </div>
      
        <div class="right-panel">
            <div class="form-container">
                <form action="/register" method="POST">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input name="firstname" id="firstname" type="text" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input name="lastname" id="lastname" type="text" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group">
                        <label for="regEmail">Email</label>
                        <input name="email" type="email" id="regEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="regPassword">Password</label>
                        <input name="password" type="password" id="regPassword" placeholder="Create a password" required>
                    </div>
                    <div class="form-group">
                        <label for="Role">Vous Etes</label>
                        <select name="Role" class="Role" id="Role" required>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Enseignant">Enseignant</option>
                        </select>
                    </div>
                    <button name="submit" type="submit" class="submit-btn">Create Account</button>
                    <div class="switch-form">
                        Already have an account? <a href="/login">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showForm(formType) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            
            if (formType === 'login') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }

        document.getElementById('regPhoto').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            if (fileName) {
                e.target.previousElementSibling.textContent = fileName;
            }
        });
    </script>
</body>
</html>