<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Web Development Bootcamp - EduLearn</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../App/Src/css/course.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="#" class="logo">EduLearn</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Complete Web Development Bootcamp</h1>
                <p>Master web development from scratch. Learn HTML, CSS, JavaScript, React, Node.js, and more through hands-on projects and real-world applications.</p>
                <div class="course-stats">
                    <div class="stat">
                        <i class="fas fa-users"></i>
                        <span>15,000+ students</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-star"></i>
                        <span>4.8 (2,500 reviews)</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-clock"></i>
                        <span>42 hours</span>
                    </div>
                </div>
            </div>
            <div class="course-card">
                <div class="price">$89.99</div>
                <button class="enroll-btn">Enroll Now</button>
                <p class="guarantee">30-Day Money-Back Guarantee</p>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="left-column">
            <div class="content-section">
                <h2 class="section-title">What You'll Learn</h2>
                <div class="features">
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Build responsive websites</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Master JavaScript ES6+</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Create React applications</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Build REST APIs</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Deploy full-stack apps</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Work with databases</span>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <h2 class="section-title">Course Curriculum</h2>
                <div class="curriculum-item">
                    <div class="curriculum-header">
                        <h3>Module 1: HTML & CSS Fundamentals</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="curriculum-content">
                        <div class="lesson">
                            <i class="fas fa-play-circle"></i>
                            <span>Introduction to HTML5</span>
                        </div>
                        <div class="lesson">
                            <i class="fas fa-play-circle"></i>
                            <span>CSS Styling & Layout</span>
                        </div>
                        <div class="lesson">
                            <i class="fas fa-play-circle"></i>
                            <span>Responsive Design</span>
                        </div>
                    </div>
                </div>
                <!-- More curriculum items... -->
            </div>

            <div class="content-section">
                <h2 class="section-title">Your Instructor</h2>
                <div class="instructor">
                    <div class="instructor-image"></div>
                    <div class="instructor-info">
                        <h3>John Smith</h3>
                        <p>Senior Web Developer with 10+ years of experience. Previously worked at Google and Amazon.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-column">
            <div class="sidebar-card">
                <h2 class="section-title">Student Reviews</h2>
                <div class="review">
                    <div class="review-header">
                        <span class="review-author">Sarah Johnson</span>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="review-text">This course completely transformed my career. The projects are practical and the explanations are clear.</p>
                </div>
                <div class="review">
                    <div class="review-header">
                        <span class="review-author">Michael Chen</span>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="review-text">Excellent content and structure. The instructor explains complex concepts in an easy-to-understand way.</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Toggle curriculum sections
        document.querySelectorAll('.curriculum-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.classList.toggle('active');
                header.querySelector('i').classList.toggle('fa-chevron-up');
                header.querySelector('i').classList.toggle('fa-chevron-down');
            });
        });
    </script>
</body>
</html>


