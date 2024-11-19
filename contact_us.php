<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EduK Learning Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   

    <style>
    /* Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    :root {
        --primary-color: #2563eb; /* Blue */
        --secondary-color: #1d4ed8; /* Darker Blue */
        --text-color: #1f2937; /* Dark Gray */
        --light-bg: #f3f4f6; /* Light Background */
        --glow-color: rgba(37, 99, 235, 0.6); /* Glow Effect */
    }

    body {
        line-height: 1.6;
        color: var(--text-color);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: var(--light-bg);
    }

    /* Navigation Styles */
    .navbar {
        background-color: white;
        padding: 1.5rem 8%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 1.8rem;
        font-weight: bold;
        color: var(--primary-color);
        text-decoration: none;
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.1);
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .nav-links a {
        text-decoration: none;
        color: var(--text-color);
        font-size: 1.1rem;
        position: relative;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 3px;
        background-color: var(--primary-color);
        bottom: -5px;
        left: 0;
        transition: width 0.4s ease;
    }

    .nav-links a:hover {
        color: var(--primary-color);
        transform: scale(1.1);
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    /* Main Content Container */
    .container {
        max-width: 800px;
        margin: 120px auto;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Contact Form */
    .contact-header h1 {
        text-align: center;
        margin-bottom: 20px;
        color: var(--primary-color);
    }

    .contact-form {
        background-color: var(--light-bg);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus, textarea:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 10px var(--glow-color);
        outline: none;
    }

    button {
        background: var(--primary-color);
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    button:hover {
        background: var(--secondary-color);
        transform: translateY(-3px);
    }

    .success-message {
        text-align: center;
        color: var(--primary-color);
        margin-top: 20px;
        display: none;
    }

    .error {
        color: red;
        font-size: 0.9rem;
        margin-top: 5px;
        display: none;
    }

    /* Footer Styles */
    .footer {
        background-color: #1d4ed8; /* Vibrant background */
        color: white;
        padding: 1rem 1%;
        text-align: center;
        margin-top: auto;
        position: relative;
        border-top: 4px solid var(--secondary-color);
    }

    .footer-title {
        font-size: 1.6rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #ffffff;
        text-transform: uppercase;
    }

    .footer-description {
        font-size: 0.9rem;
        margin-bottom: 1rem;
        color: #e0e7ff;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .social-links a {
        color: white;
        font-size: 1.5rem;
        transition: color 0.3s, transform 0.3s ease;
    }

    .social-links a:hover {
        color: var(--glow-color);
        transform: scale(1.2) rotate(10deg);
    }

    .footer-copyright {
        margin-top: 10px;
        font-size: 0.8rem;
        color: #cbd5e1;
    }
</style>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="index.php" class="logo">EduK</a>
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="#">Courses</a>
                <a href="about.php">About</a>
                <a href="contact_us.php">Contact</a>
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
    </div>
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
            document.querySelectorAll('.error').forEach(error => error.style.display = 'none');

            let hasError = false;

            // Validate inputs
            ['name', 'email', 'subject', 'message'].forEach(id => {
                const value = document.getElementById(id).value.trim();
                if (!value) {
                    document.getElementById(id + 'Error').style.display = 'block';
                    hasError = true;
                }
            });

            // If no errors, show success message
            if (!hasError) {
                document.getElementById('contactForm').reset();
                const successMessage = document.getElementById('successMessage');
                successMessage.style.display = 'block';
                setTimeout(() => successMessage.style.display = 'none', 5000);
            }
        });
    </script>
</body>
</html>
