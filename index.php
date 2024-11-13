<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Learning Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 76px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        .logo img {
            height: 44px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-right: 492px;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        .buttons {
            display: flex;
            align-items: center;
        }

        .buttons .admin-logon,
        .buttons .logon-form {
            padding: 8px 15px;
            margin-left: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .buttons .admin-logon {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .buttons .admin-logon:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .buttons .logon-form {
            background-color: #28a745;
            color: #fff;
            border: 1px solid #28a745;
        }

        .buttons .logon-form:hover {
            background-color: #218838;
            border-color: #218838;
        }

        .menu-toggle {
            display: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
                position: absolute;
                top: 60px;
                right: 20px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 5px;
                width: 200px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }

            nav ul li {
                margin: 10px 0;
                text-align: center;
            }

            nav ul.show {
                display: flex;
            }

            .buttons {
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
                width: 100%;
            }

            .buttons .admin-logon,
            .buttons .logon-form {
                width: 90%;
                text-align: center;
                margin: 5px 0;
                font-size: 16px;
                padding: 10px;
            }

            .menu-toggle {
                display: block;
            }
        }
		.buttons a {
    display: inline-block;
    padding: 8px 15px;
    margin-left: 10px;
    text-decoration: none;
    text-align: center;
    font-weight: bold;
    border-radius: 5px;
    transition: all 0.3s;
}

.admin-logon {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}

.admin-logon:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.logon-form {
    background-color: #28a745;
    color: #fff;
    border: 1px solid #28a745;
}

.logon-form:hover {
    background-color: #218838;
    border-color: #218838;
}
       /* Custom CSS */
       .hero {
            background: #6c757d;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .section-title {
            margin: 30px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .card {
            margin-bottom: 20px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }


/* body section */

.main {
            font-family: Arial, sans-serif;
            background-color: #0f2c4c;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
        }

        .container {
            max-width: 1200px;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 40px;
            position: relative;
        }

        .breadcrumb {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 14px;
            color: #a0c4ff;
        }

        .breadcrumb a {
            color: #a0c4ff;
            text-decoration: none;
        }

        .breadcrumb span {
            color: #a0c4ff;
        }

        .content {
            flex: 1;
        }

        .content h1 {
            font-size: 48px;
            color: #fddb3a;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        button {
            background-color: #4bb3fd;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #3883c0;
        }
        .illustration img {
    max-width: 500px;
    height: auto;
    margin-left: 92px;
}
    </style>

<!-- end body section -->

    </style>
</head>
<body>
    <header>
	<div class="logo">
    <a href="index.php"> 
        <img src="admin/images/elogo.png" alt="Moodle Logo">
    </a>
</div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About Us</a></li>
                <!-- <li><a href="#">Others</a></li> -->
            </ul>
        </nav>
        <div class="buttons">
    <a href="http://localhost/Eduk-Learning-Management-System/admin/" class="admin-logon">Admin Logon</a>
    <a href="logonform.php" class="logon-form">Log On</a>
</div>

        <button class="menu-toggle">Menu</button>
    </header>



<!-- body part -->
    <div class="main">
        <div class="container">

            <div class="content">
                <h1>Learning Management System</h1>
                <p>Our learning management system (LMS) is a web-based <br> 
                software application for educational courses, training programs, materials,<br>
                 online learning courses, and certifications.</p>
                <button onclick="contact()">Let's Work Together!</button>
            </div>
            <div class="illustration">
                <img src="admin/images/lms_hero.png" alt="Character working on laptop">
            </div>
        </div>
    </div>

    <script>
        function contact() {
            alert("Contact form coming soon!");
        }
    </script>

<!-- body part end -->




    <!-- Dashboard / User Overview -->
    <section class="container mt-5">
        <h2 class="section-title">Your Dashboard</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enrolled Courses</h5>
                        <p class="card-text">View and manage your current courses.</p>
                        <a href="http://localhost/Eduk-Learning-Management-System/admin/cour-1.php" class="btn btn-primary">Go to Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Progress</h5>
                        <p class="card-text">Track your learning progress and course completion.</p>
                        <a href="#" class="btn btn-primary">View Progress</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Deadlines</h5>
                        <p class="card-text">Check deadlines for assignments and quizzes.</p>
                        <a href="#" class="btn btn-primary">View Deadlines</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Communication Features: Discussion Forums & Messaging -->
    <section class="container mt-5">
        <h2 class="section-title">Communication</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Discussion Forums</h5>
                        <p class="card-text">Engage in discussions with instructors and peers.</p>
                        <a href="#" class="btn btn-primary">Go to Forums</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Messaging</h5>
                        <p class="card-text">Send and receive messages from instructors and classmates.</p>
                        <a href="#" class="btn btn-primary">Open Messages</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2024 Learning Management System | All Rights Reserved</p>
            <p>Follow us:
                <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                <a href="#"><i class="fab fa-twitter text-white"></i></a>
                <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
            </p>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('nav ul');
            const toggleButton = document.querySelector('.menu-toggle');

            toggleButton.addEventListener('click', function() {
                nav.classList.toggle('show');
            });
        });
    </script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
