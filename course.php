<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
    font-family: 'Roboto', sans-serif;
    line-height: 1.6;
    background: linear-gradient(to right, #f3f4f6, #e2e8f0);
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    padding-top: 150px; /* Adjust this value to create space for the navbar */
}
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 0;
        }
        .navbar {
            background-color: #ffffff;
            padding: 1.5rem 8%;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        .navbar:hover {
            background-color: #f1f5f9;
        }
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            text-decoration: none;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .logo:hover {
            transform: scale(1.1);
            color: #3498db;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        .nav-links a {
            text-decoration: none;
            color: #34495e;
            font-size: 1.2rem;
            font-weight: 600;
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 3px;
            background-color: #3498db;
            bottom: -5px;
            left: 0;
            transition: width 0.4s ease;
        }
        .nav-links a:hover {
            color: #3498db;
            transform: translateY(-3px);
        }
        .nav-links a:hover::after {
            width: 100%;
        }
        /* Search Bar Styling */
        #searchBar {
    width: 100%;
    max-width: 800px; /* Width of the search bar */
    margin: 20px auto; /* Center the search bar */
    padding: 15px 20px;
    border-radius: 25px;
    border: 1px solid #ddd;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
        #searchBar:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        #searchBar input {
            border: none;
            outline: none;
            flex-grow: 1;
            padding: 12px 15px;
            font-size: 1.1rem;
            border-radius: 20px;
            background-color: #f8f8f8;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }
        #searchBar input:focus {
            background-color: #fff;
        }
        #searchBar button {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        #searchBar button:hover {
            background-color: #2980b9;
            transform: scale(1.1);
        }
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 30px;
            min-height: 400px; /* Reduced height of course grid */
        }
        .course-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .course-card img {
            width: 100%;
            height: 200px; /* Reduced height of course card image */
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .course-card img:hover {
            transform: scale(1.05);
        }
        .course-card-content {
            padding: 25px;
            flex-grow: 1;
        }
        .course-card-content h2 {
            margin-bottom: 15px;
            font-size: 1.8rem;
            color: #2c3e50;
        }
        .course-card-content p {
            margin-bottom: 15px;
            color: #7f8c8d;
            font-size: 1rem;
        }
        .course-card-footer {
            padding: 15px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .enroll-btn {
            padding: 15px 30px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .enroll-btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
        }
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-top: auto;
            border-top: 5px solid #3498db;
            transition: background-color 0.3s ease;
        }
        .footer:hover {
            background-color: #34495e;
        }
        .footer-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .footer-description {
            font-size: 1.1rem;
            color: #ecf0f1;
            margin-bottom: 2rem;
        }
        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }
        .social-links a {
            color: white;
            font-size: 2rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .social-links a:hover {
            color: #ff4081;
            transform: scale(1.4) rotate(15deg);
        }
        .footer-copyright {
            font-size: 1rem;
            color: #bdc3c7;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .course-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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

    <!-- Search Bar -->
    <div id="searchBar">
        <input type="text" id="searchInput" placeholder="Search for courses..." oninput="searchCourses()" />
        <button><i class="fas fa-search"></i></button>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div id="courseGrid" class="course-grid"></div>
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
            <p class="footer-copyright">&copy; 2024 EduK Learning Management System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const courses = [
            {
                title: "Introduction to Information Technology",
                description: "The course introduces students to hardware, software, and networking.",
                instructor: "Suresh Diyal",
                image: "./admin/images/IIT.jpeg",
                link: "iit_course.php"
            },
            {
                title: "Programming Concept with C",
                description: "Structured programming essential for C++ ,<brand Java.",
                instructor: "Bijay Malla",
                image: "./admin/images/elogo.jpeg",
                link: "c_course.php"
            },
            {
                title: "Digital Logics",
                description: "Essential for modern computing and digital systems design.",
                instructor: "Suresh Diyal",
                image: "./admin/images/dl.jpg",
                link: "dl.php"
            },
            {
                title: "Object Oriented Programming with C++",
                description: "Combines procedural programming with OOP concepts.",
                instructor: "Govinda Subedi",
                image: "./admin/images/oop.jpeg",
                link: "c++.php"
            },
            {
                title: "Data Structures and Algorithms",
                description: "Build scalable and efficient applications.",
                instructor: "Amrit Marasaini",
                image: "./admin/images/DSAA.jpg",
                link: "dsa.php"
            },
            {
                title: "System Administration using Linux",
                description: "Manage and maintain Linux-based servers.",
                instructor: "Keshab Pokharel",
                image: "./admin/images/linux.jpg",
                link: "linux.php"
            }
        ];

        function renderCourses(coursesToRender) {
            const courseGrid = document.getElementById('courseGrid');
            courseGrid.innerHTML = '';

            coursesToRender.forEach(course => {
                const courseCard = document.createElement('div');
                courseCard.className = 'course-card';
                courseCard.innerHTML = `
                    <img src="${course.image}" alt="${course.title}">
                    <div class="course-card-content">
                        <h2>${course.title}</h2>
                        <p>${course.description}</p>
                        <p><strong>Instructor:</strong> ${course.instructor}</p>
                    </div>
                    <div class="course-card-footer">
                        <a href="${course.link}" class="enroll-btn">Enroll Now</a>
                    </div>
                `;
                courseGrid.appendChild(courseCard);
            });
        }

        function searchCourses() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const filteredCourses = courses.filter(course => course.title.toLowerCase().includes(query));
            renderCourses(filteredCourses);
        }

        renderCourses(courses);
    </script>
</body>
</html>
