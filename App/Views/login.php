<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUDEMY - Sign In & Register</title>
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
        .container{
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
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-header h2 {
            margin: 0;
            font-size: 1.8em;
            color: #007bff;
        }
        .form-header p {
            color: #777;
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
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
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
        .error-message {
            color: red;
            text-align: center;
            margin: 10px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="brand">YOUDEMY</div>
            <div class="welcome-text">
                <h1>Welcome to Youdemy</h1>
                <p>Unlock your potential with our comprehensive online courses. Join thousands of students already learning with us.</p>
            </div>
        </div>
        
        <div class="right-panel">
            <div class="form-container">
                <form id="loginForm" action="" method="POST">
                    <div class="form-header">
                        <h2>Welcome Back</h2>
                        <p>Please sign in to your account</p>
                    </div>
                    <div class="error-message"><?php echo htmlspecialchars($this->error); ?></div>
                    <div class="error-message"><?php echo htmlspecialchars($this->MessagePending); ?></div>
                    <div class="error-message"><?php echo htmlspecialchars($this->MessageSuspendu); ?></div>
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input name="email" type="email" id="loginEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input name="password" type="password" id="loginPassword" placeholder="Enter your password" required>
                    </div>
                    <button name="login" type="submit" class="submit-btn">Sign In</button>
                    <div class="switch-form">
                        Don't have an account? <a href="/register">Register</a>
                    </div>
                </form>
                <form id="registerForm" style="display: none;">
                    <div class="form-header">
                        <h2>Create Account</h2>
                        <p>Join our learning community today</p>
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
        });
    </script>
</body>
</html>