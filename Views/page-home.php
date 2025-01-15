<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Online Learning Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../App/Src/css/home-page.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="#" class="logo">EduLearn</a>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Courses</a>
                <a href="#">Categories</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <div class="auth-buttons">
                    <a href="login.php" class="login-btn">Login</a>
                    <a href="register.php" class="register-btn">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>Learn From The Best Online Courses</h1>
            <p>Discover thousands of online courses from top instructors around the world</p>
            <div class="search-bar">
                <input type="text" placeholder="What do you want to learn today?">
                <button>Search</button>
            </div>
        </div>
    </section>

    <main class="main-content">
        <section>
            <h2 class="section-title">Top Categories</h2>
            <div class="categories">
                <div class="category-card">
                    <i class="fas fa-code category-icon"></i>
                    <h3>Programming</h3>
                    <p>Learn coding and software development</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-paint-brush category-icon"></i>
                    <h3>Design</h3>
                    <p>Master graphic and UI/UX design</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-chart-line category-icon"></i>
                    <h3>Business</h3>
                    <p>Develop your business skills</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-language category-icon"></i>
                    <h3>Languages</h3>
                    <p>Learn new languages effectively</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">Featured Courses</h2>
            <div class="courses">
                <div class="course-card">
                    <div class="course-image"></div>
                    <div class="course-content">
                        <span class="course-tag">Programming</span>
                        <h3 class="course-title">Complete Web Development Bootcamp</h3>
                        <p class="course-description">Learn web development from scratch with HTML, CSS, JavaScript, React, and more.</p>
                        <div class="course-meta">
                            <div class="course-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="course-price">$89.99</div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image"></div>
                    <div class="course-content">
                        <span class="course-tag">Design</span>
                        <h3 class="course-title">UI/UX Design Fundamentals</h3>
                        <p class="course-description">Master the principles of user interface and user experience design.</p>
                        <div class="course-meta">
                            <div class="course-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="course-price">$79.99</div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-image"></div>
                    <div class="course-content">
                        <span class="course-tag">Business</span>
                        <h3 class="course-title">Digital Marketing Masterclass</h3>
                        <p class="course-description">Learn modern digital marketing strategies and tools.</p>
                        <div class="course-meta">
                            <div class="course-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="course-price">$69.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About EduLearn</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Popular Categories</h3>
                <ul class="footer-links">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Languages</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Get In Touch</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>