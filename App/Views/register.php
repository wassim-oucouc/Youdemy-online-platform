


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
                    <div class="form-group">
                    <form action="" method = "POST">
                        <label for="regPrenom">First Name</label>
                        <input name ="firstname" id = "firstname" type="text"  placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="regNom">Last Name</label>
                        <input name = "lastname" id = "lastname" type="text" id="regNom" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group">
                        <label for="regEmail">Email</label>
                        <input name = "email" type="email" id="regEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="regPassword">Password</label>
                        <input name = "password" type="password" id="regPassword" placeholder="Create a password" required>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <div class="photo">
                        <input name = "photo" type="text" id="photo" placeholder="insert your photo here" required>
                        </div>
                    </div>
                    <button name = "submit"type="submit" class="submit-btn">Create Account</button>
                    <div class="switch-form">
                        Already have an account?<a href="login.php">Sign In</a>
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

        function validation-form()
        {
            const name = document.querySelector('')
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