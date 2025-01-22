<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Professional Online Learning</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', system-ui, -apple-system, sans-serif;
        }

        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #0ea5e9;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --background: #ffffff;
            --background-alt: #f8fafc;
        }

        body {
            background: var(--background);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem 8%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
            font-size: 1.05rem;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        /* Hero Section with Slider */
        .hero-slider {
            margin-top: 80px;
            position: relative;
            height: 600px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            align-items: center;
            padding: 0 8%;
            background-size: cover;
            background-position: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            max-width: 600px;
            color: white;
            position: relative;
            z-index: 2;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        }

        .slide h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .slide p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .slider-nav {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 1rem;
            z-index: 2;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s;
        }

        .slider-dot.active {
            background: white;
            transform: scale(1.2);
        }

        /* Features Section */
        .features {
            padding: 6rem 8%;
            background: var(--background-alt);
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--text-light);
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.5rem;
        }

        /* CEO Section */
        .ceo-section {
            padding: 6rem 8%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .ceo-image {
            position: relative;
        }

        .ceo-image img {
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .ceo-quote {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            position: absolute;
            bottom: -2rem;
            right: -2rem;
            max-width: 400px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Popular Courses Section */
        .courses-section {
            padding: 6rem 8%;
            background: var(--background-alt);
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .course-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .course-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-content {
            padding: 2rem;
        }

        .course-category {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .course-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .instructor {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .instructor img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .instructor-info span {
            display: block;
        }

        .instructor-name {
            font-weight: 600;
            color: var(--text-dark);
        }

        .instructor-title {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        /* Statistics Section */
        .stats-section {
            padding: 4rem 8%;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <a href="#" class="logo">Youdemy</a>
        <div class="nav-links">
            <a href="#">Courses</a>
            <a href="#">Programs</a>
            <a href="#">Enterprise</a>
            <a href="#">About Us</a>
        </div>
        <div class="auth-buttons">
            <a href="/login" class="btn btn-outline">Log In</a>
            <a href="/register" class="btn btn-primary">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Slider -->
    <div class="hero-slider">
        <div class="slide active" style="background-image: url('/api/placeholder/1920/600')">
            <div class="slide-content">
                <h1>Transform Your Career with Youdemy</h1>
                <p>Access world-class education from industry experts and advance your career with recognized certifications.</p>
                <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('/api/placeholder/1920/600')">
            <div class="slide-content">
                <h1>Learn at Your Own Pace</h1>
                <p>Flexible learning paths designed to fit your schedule. Access content anytime, anywhere.</p>
                <a href="#" class="btn btn-primary">Explore Courses</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('/api/placeholder/1920/600')">
            <div class="slide-content">
                <h1>Industry-Recognized Certifications</h1>
                <p>Earn certificates valued by top employers worldwide. Build your professional portfolio.</p>
                <a href="#" class="btn btn-primary">View Programs</a>
            </div>
        </div>
        <div class="slider-nav">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features">
        <div class="section-title">
            <h2>Why Choose Youdemy?</h2>
            <p>Discover what makes our platform the preferred choice for millions of learners worldwide</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Expert Instructors</h3>
                <p>Learn from industry professionals with years of real-world experience</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certified Learning</h3>
                <p>Earn recognized certificates upon completion of your courses</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Flexible Learning</h3>
                <p>Study at your own pace with lifetime access to course content</p>
            </div>
        </div>
    </section>

    <!-- CEO Section -->
    
    <!-- Popular Courses -->
    <section class="courses-section">
        <div class="section-title">
            <h2>Most Popular Courses</h2>
            <p>Start your learning journey with our top-rated courses</p>
        </div>
        <div class="courses-grid">
            <?php
            foreach($courses as $course) {
                echo '
                <div class="course-card">
                    <img src="'.$course['thumbnail'].'" alt="'.$course['title'].'" class="course-image">
                    <div class="course-content">
                        <div class="course-category">'.$course['categoriename'].'</div>
                        <h3 class="course-title">'.$course['title'].'</h3>
                        <div class="instructor">
                            <img src="'.$course['Photo'].'" alt="'.$course['Photo'].'">
                            <div class="instructor-info">
                                <span class="instructor-name">'.$course['Nom'].'</span
                                <span class="instructor-title">'.$course['Prenom'].'</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="section-title">
            <h2>Our Impact</h2>
            <p>Join a community of learners making a difference</p>
        </div>
        <div class="stats-grid">
            <div class="stat-item">
                <h3>100,000+</h3>
                <p>Students Enrolled</p>
            </div>
            <div class="stat-item">
                <h3>500+</h3>
                <p>Expert Instructors</p>
            </div>
            <div class="stat-item">
                <h3>1,000+</h3>
                <p>Courses Available</p>
            </div>
        </div>
    </section>

    <script>
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                    dots[i].classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                showSlide(currentIndex);
            });
        });

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>
</body>
</html>