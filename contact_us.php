<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EduK Learning Management System</title>
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
            line-height: 1.3;
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigation Styles */
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

        /* Main Content Styles */
        .container {
            max-width: 800px;
            margin: 120px auto 50px;
            padding: 20px;
            flex: 1;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-header h1 {
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .contact-header p {
            color: #666;
        }

        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: var(--text-color);
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            height: 150px;
            resize: vertical;
        }

        .error {
            color: #ff0000;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        button {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--secondary-color);
        }

        .success-message {
            display: none;
            text-align: center;
            color: var(--primary-color);
            margin-top: 20px;
            font-weight: bold;
        }

        .contact-info {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .info-item i {
            font-size: 24px;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        /* Footer Styles */
        .footer {
            background-color: var(--text-color);
            color: white;
            padding: 3rem 5%;
            margin-top: auto;
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

            .container {
                margin: 100px 20px 40px;
            }

            .contact-info {
                grid-template-columns: 1fr;
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

    <!-- Main Content -->
    <div class="container">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>Get in touch with us for any inquiries or feedback</p>
        </div>

        <form id="contactForm" class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <div class="error" id="nameError">Please enter your name</div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError">Please enter a valid email address</div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
                <div class="error" id="subjectError">Please enter a subject</div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <div class="error" id="messageError">Please enter your message</div>
            </div>

            <button type="submit">Send Message</button>
        </form>

        <div class="success-message" id="successMessage">
            Thank you for your message! We'll get back to you soon.
        </div>

        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Sanothimi, Bhaktapur</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>bhubandhamala201@gmail.com</p>
            </div>
        </div>
    </div>

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
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            document.querySelectorAll('.error').forEach(error => {
                error.style.display = 'none';
            });

            let hasError = false;
            
            // Validate name
            const name = document.getElementById('name').value.trim();
            if (name === '') {
                document.getElementById('nameError').style.display = 'block';
                hasError = true;
            }

            // Validate email
            const email = document.getElementById('email').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').style.display = 'block';
                hasError = true;
            }

            // Validate subject
            const subject = document.getElementById('subject').value.trim();
            if (subject === '') {
                document.getElementById('subjectError').style.display = 'block';
                hasError = true;
            }

            // Validate message
            const message = document.getElementById('message').value.trim();
            if (message === '') {
                document.getElementById('messageError').style.display = 'block';
                hasError = true;
            }

            // If no errors, show success message
            if (!hasError) {
                document.getElementById('contactForm').reset();
                document.getElementById('successMessage').style.display = 'block';
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }
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