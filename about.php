<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EduK Learning Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #2563eb;
            --secondary-color: #1d4ed8;
            --text-color: #1f2937;
            --light-bg: #f3f4f6;
        }

        body {
            line-height: 1.6;
            color: var(--text-color);
        }

        /* Navigation */
        .navbar {
            background-color: white;
            padding: 1rem 5%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
        }

        .nav-links a:not(.btn) {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:not(.btn):hover {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
            margin-left: 2rem;
        }

        .btn {
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-login {
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            background: transparent;
        }

        .btn-login:hover {
            background: var(--primary-color);
            color: white;
        }

        .btn-signup {
            background: var(--primary-color);
            color: white;
            border: 2px solid var(--primary-color);
        }

        .btn-signup:hover {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        /* Hero Section */
        .hero {
            padding: 8rem 5% 4rem;
            background-color: var(--light-bg);
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            color: #4b5563;
        }

        /* About Section */
        .about {
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        /* Team Section */
        .team {
            padding: 4rem 5%;
            background-color: var(--light-bg);
        }

        .team h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2rem;
            color: var(--text-color);
        }

        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .member {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .member:hover {
            transform: translateY(-5px);
        }

        .member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            object-fit: cover;
            border: 4px solid var(--primary-color);
        }

        .member h3 {
            color: var(--text-color);
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        .member .role {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .member .bio {
            color: #6b7280;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Footer */
        .footer {
            background-color: var(--text-color);
            color: white;
            padding: 3rem 5%;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-description {
            margin-bottom: 2rem;
            color: #d1d5db;
        }

        .social-links {
            margin-bottom: 2rem;
        }

        .social-links a {
            color: white;
            margin: 0 0.8rem;
            font-size: 1.5rem;
            transition: color 0.3s;
            opacity: 0.8;
        }

        .social-links a:hover {
            color: var(--primary-color);
            opacity: 1;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .auth-buttons {
                margin-left: 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .member {
                margin: 0 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="index.php" class="logo">EduK</a>
            <div class="nav-links">
                <div class="nav-menu">
                    <a href="index.php">Home</a>
                    <a href="#">Courses</a>
                    <a href="about.php">About</a>
                    <a href="contact_us.php">Contact</a>
                </div>
                <div class="auth-buttons">
                    <a href="http://localhost/Eduk-Learning-Management-System/admin" class="btn btn-login">Admin Login</a>
                    <a href="logonform.php" class="btn btn-signup">Log on</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>About EduK Learning Management System</h1>
        <p>Empowering education through innovative technology and collaborative learning experiences.</p>
    </section>

    <!-- Team Section -->
    <section class="team">
        <h2>Our Team</h2>
        <div class="team-members">
            <div class="member">
                <img src="admin/images/bhuban.png" alt="Bhuban Dhamala">
                <h3>Bhuban Dhamala</h3>
                <p class="role">System Administrator & Team Lead</p>
                <p class="bio">Leading the development of EduK with expertise and team management.</p>
            </div>
            <div class="member">
                <img src="admin/images/asmita.png" alt="Asmita Shrestha">
                <h3>Asmita Shrestha</h3>
                <p class="role">Frontend Developer and Database</p>
                <p class="bio">Creating beautiful and intuitive user interfaces to enhance the learning experience.</p>
            </div>
            <div class="member">
                <img src="admin/images/bipin.png" alt="Bipin Poudel">
                <h3>Bipin Poudel</h3>
                <p class="role">Backend Developer</p>
                <p class="bio">Building robust backend systems to power our learning management platform.</p>
            </div>
            <div class="member">
                <img src="admin/images/dhiraj.jpg" alt="Dhiraj Sah">
                <h3>Dhiraj Sah</h3>
                <p class="role">UI & UX</p>
                <p class="bio">Analyzing and optimizing system performance for the best user experience.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <h2 class="footer-title">EduK Learning Management System</h2>
            <p class="footer-description">Transforming education through technology</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 EduK Learning Management System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').style.backgroundColor = '#ffffff';
                document.querySelector('.navbar').style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
            } else {
                document.querySelector('.navbar').style.backgroundColor = 'transparent';
                document.querySelector('.navbar').style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>