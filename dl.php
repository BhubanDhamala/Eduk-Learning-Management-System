<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduk Learning Management System - Digital Logics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f1;
            color: #333;
            line-height: 1.5;
        }

        header {
            background-color: #2980b9;
            color: white;
            text-align: center;
            padding: 30px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.8em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
            font-weight: 300;
        }

        .lms-title {
            font-size: 1.4em;
            font-weight: 400;
            color: #f39c12;
        }

        nav {
            background-color: #34495e;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .container {
            width: 85%;
            margin: 30px auto;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            color: #2980b9;
            font-size: 2.2em;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 15px;
            color: #555;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .pdf-btn, .view-btn {
            background-color: #e67e22;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            margin: 8px;
        }

        .pdf-btn:hover, .view-btn:hover {
            background-color: #d35400;
        }

        .pdf-btn:active, .view-btn:active {
            transform: translateY(1px);
        }

        footer {
            background-color: #34495e;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        footer p {
            font-size: 1em;
        }

        footer a {
            color: #e67e22;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .about-box {
            display: flex;
            justify-content: space-between;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .about-box div {
            width: 48%;
        }

        .about-box img {
            width: 100%;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .about-box {
                flex-direction: column;
                align-items: center;
            }

            .about-box div {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        /* Left Corner Back Button */
        .back-to-courses {
            position: fixed;
            top: 50px;
            left: 15px;
            background-color: #e67e22;
            color: white;
            padding: 5px 6px;
            border-radius: 5px;
            font-size: 1.1em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .back-to-courses:hover {
            background-color: #d35400;
            transform: translateY(-2px);
        }

        .back-arrow {
            margin-right: 8px;
            font-size: 1.4em;
        }

    </style>
</head>
<body>

    <header>
        <h1>Digital Logics</h1>
        <p>Essential for modern computing and digital systems design</p>
        <p class="lms-title">Eduk Learning Management System</p>
    </header>

    <nav>
        <ul>
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#course-details">Course Details</a></li>
            <li><a href="#resources">Resources</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <section id="introduction">
            <h2>Introduction</h2>
            <p>Welcome to the "Digital Logics" course. In this course, you will learn about the fundamental principles of digital logic design and its applications in modern computing and digital systems.</p>
            <p>The course is taught by <strong>Suresh Diyal</strong>, an expert in the field of digital systems and computing.</p>
        </section>

        <section id="course-details">
            <h2>Course Details</h2>
            <div class="about-box">
                <div>
                    <h3>Course Objectives</h3>
                    <ul>
                        <li>Understand the principles of digital logic and circuits</li>
                        <li>Learn about binary numbers, logic gates, and flip-flops</li>
                        <li>Apply logic design in digital system implementations</li>
                    </ul>
                </div>
                <div>
                    <h3>What You'll Learn</h3>
                    <ul>
                        <li>Boolean algebra and logic simplification</li>
                        <li>Design and analysis of combinational and sequential circuits</li>
                        <li>Applications of digital logic in computing devices</li>
                        <li>Introduction to digital system design tools</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="resources">
            <h2>Resources</h2>
            <p>Get access to the course book and additional resources:</p>
            <div class="button-container">
                <a href="path-to-book.pdf" class="pdf-btn" download>Download PDF Book</a>
                <a href="path-to-book.pdf" class="view-btn" target="_blank">View PDF Book</a>
            </div>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>If you need help or have any queries, feel free to reach out:</p>
            <p>Email: <a href="mailto:suresh.diyal@university.com">suresh.diyal@university.com</a></p>
            <p>Office: Room 103, Digital Systems Department</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Eduk Learning Management System | Developed by <a href="contact_us.php" target="_blank">Eduk group</a></p>
    </footer>

    <!-- Back to Courses Button -->
    <a href="course.php" class="back-to-courses">
        <span class="back-arrow">&#8592;</span> Back to Courses
    </a>

</body>
</html>
