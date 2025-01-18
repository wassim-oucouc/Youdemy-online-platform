
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Sign In & Register</title>
    <link rel="stylesheet" href="/css/register-login.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="brand">EduLearn</div>
            <div class="decoration-image"></div>
            <div class="welcome-text">
                <h1>Welcome to EduLearn</h1>
                <p>Unlock your potential with our comprehensive online courses. Join thousands of students already learning with us.</p>
            </div>
        </div>
      
        
        <div class="right-panel">
                    <div class="form-container">
                <form id="loginForm" action = "" method = "POST">

                    <div class="form-header">
                        <h2>Welcome Back</h2>
                        <p>Please sign in to your account</p>
                    </div>
                  <h3 style="color:red;">  <?php echo htmlspecialchars($this->error); ?> </h3>
                  <h3 style="color:red;">  <?php echo htmlspecialchars($this->MessagePending); ?> </h3>
                  <h3 style="color:red;">  <?php echo htmlspecialchars($this->MessageSuspendu); ?> </h3>
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input name = "email" type="email" id="loginEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input name = "password" type="password" id="loginPassword" placeholder="Enter your password" required>
                    </div>
                    <button name = "login"type="submit" class="submit-btn">Sign In</button>
                    <div class="switch-form">
                        Don't have an account?<a href="register.php">Register</a>
                    </div>
                </form>

                <form id="registerForm">
                    <div class="form-header">
                        <h2>Create Account</h2>
                        <p>Join our learning community today</p>
                    </div>
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