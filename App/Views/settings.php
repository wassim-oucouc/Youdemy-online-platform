<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - YOUDEMY</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../App/Src/css/settings.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar remains the same as in previous templates -->
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-logo">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="brand-name">YOUDEMY</span>
            </div>

            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book"></i>
                            <span>My Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header">
                <h1>Settings</h1>
                <div class="header-actions">
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge"></span>
                    </button>
                    <div class="user-profile">
                        <img src="/api/placeholder/32/32" alt="Profile" class="w-8 h-8 rounded-full">
                    </div>
                </div>
            </header>

            <div class="settings-container">
                <nav class="settings-nav">
                    <div class="settings-nav-item active">Profile</div>
                    <div class="settings-nav-item">Notifications</div>
                    <div class="settings-nav-item">Security</div>
                    <div class="settings-nav-item">Preferences</div>
                </nav>

                <!-- Profile Settings -->
                <section class="settings-section">
                    <div class="settings-header">
                        <h2>Profile Settings</h2>
                        <button class="btn btn-primary">Save Changes</button>
                    </div>

                    <div class="profile-form">
                        <div class="form-group">
                            <label class="form-label">Profile Picture</label>
                            <div class="profile-picture-upload">
                                <img src="/api/placeholder/120/120" alt="Profile" class="profile-avatar">
                                <button class="btn btn-primary">Change Photo</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-input" value="John Doe">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-input" value="john.doe@example.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Bio</label>
                            <textarea class="form-input" rows="4">Web Developer and Educator</textarea>
                        </div>
                    </div>
                </section>

                <!-- Notification Settings -->
                <section class="settings-section">
                    <div class="settings-header">
                        <h2>Notification Settings</h2>
                    </div>

                    <div class="setting-item">
                        <div class="setting-info">
                            <h3>Email Notifications</h3>
                            <p>Receive email updates about your course progress</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="setting-item">
                        <div class="setting-info">
                            <h3>Push Notifications</h3>
                            <p>Receive push notifications about new courses</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </section>

                <!-- Security Settings -->
                <section class="settings-section">
                    <div class="settings-header">
                        <h2>Security Settings</h2>
                    </div>

                    <div class="setting-item">
                        <div class="setting-info">
                            <h3>Two-Factor Authentication</h3>
                            <p>Add an extra layer of security to your account</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="setting-item">
                        <div class="setting-info">
                            <h3>Change Password</h3>
                            <p>Update your password regularly for better security</p>
                        </div>
                        <button class="btn btn-primary">Change Password</button>
                    </div>
                </section>

                <!-- Danger Zone -->
                <section class="settings-section">
                    <div class="danger-zone">
                        <h3>Danger Zone</h3>
                        <p>Once you delete your account, there is no going back. Please be certain.</p>
                        <button class="btn-danger">Delete Account</button>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>