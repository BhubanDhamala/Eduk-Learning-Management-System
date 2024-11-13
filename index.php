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
                <li><a href="#">About Us</a></li>
                <li><a href="#">Resources</a></li>
                <!-- <li><a href="#">Others</a></li> -->
            </ul>
        </nav>
        <div class="buttons">
    <a href="http://localhost/Eduk-Learning-Management-System/admin/" class="admin-logon">Admin Logon</a>
    <a href="logonform.php" class="logon-form">Log On</a>
</div>

        <button class="menu-toggle">Menu</button>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('nav ul');
            const toggleButton = document.querySelector('.menu-toggle');

            toggleButton.addEventListener('click', function() {
                nav.classList.toggle('show');
            });
        });
    </script>
</body>
</html>
