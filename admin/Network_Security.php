<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Security</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .course-header {
            background-color: #2c3e50;
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .course-title {
            font-size: 2.5em;
            margin-bottom: 15px;
        }

        .instructor-info {
            display: flex;
            align-items: center;
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .instructor-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .course-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .module {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #e74c3c;
        }

        .module h3 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .module-topics {
            list-style-type: none;
            padding-left: 20px;
        }

        .module-topics li {
            margin-bottom: 10px;
            position: relative;
        }

        .module-topics li::before {
            content: "•";
            color: #e74c3c;
            font-weight: bold;
            position: absolute;
            left: -15px;
        }

        .course-objectives {
            margin-bottom: 30px;
        }

        .assessment-info {
            background-color: #fdeaea;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .enroll-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .enroll-button:hover {
            background-color: #c0392b;
        }

        .resources-section {
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .prerequisites {
            background-color: #f7f9fc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .lab-requirements {
            background-color: #eaf7fd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="course-header">
        <div class="container">
            <h1 class="course-title">Network Security</h1>
            <p>Master the art of protecting networks, systems, and data from cyber threats</p>
        </div>
    </div>

    <div class="container">
        <div class="instructor-info">
            <img src="./admin/images/instructor.jpg" alt="Keshab Pokharel" class="instructor-image">
            <div>
                <h2>Instructor: Keshab Pokharel</h2>
                <p>Security Specialist with CISSP Certification</p>
                <p>10+ years of experience in Network Security and Cybersecurity</p>
            </div>
        </div>

        <div class="prerequisites">
            <h2>Prerequisites</h2>
            <ul>
                <li>Basic understanding of computer networks</li>
                <li>Fundamental knowledge of TCP/IP protocols</li>
                <li>Basic programming skills</li>
                <li>Understanding of operating systems concepts</li>
            </ul>
        </div>

        <div class="course-content">
            <div class="course-objectives">
                <h2>Course Objectives</h2>
                <ul>
                    <li>Understand fundamental concepts of network security</li>
                    <li>Learn to identify and mitigate various security threats</li>
                    <li>Master security protocols and encryption techniques</li>
                    <li>Develop skills in implementing security solutions</li>
                    <li>Learn incident response and recovery procedures</li>
                </ul>
            </div>

            <h2>Course Modules</h2>
            
            <div class="module">
                <h3>Module 1: Introduction to Network Security</h3>
                <ul class="module-topics">
                    <li>Security Fundamentals and Principles</li>
                    <li>Types of Network Attacks</li>
                    <li>Security Policies and Standards</li>
                    <li>Risk Assessment and Management</li>
                </ul>
            </div>

            <div class="module">
                <h3>Module 2: Network Security Infrastructure</h3>
                <ul class="module-topics">
                    <li>Firewalls and Their Types</li>
                    <li>Intrusion Detection Systems (IDS)</li>
                    <li>Virtual Private Networks (VPN)</li>
                    <li>Network Access Control</li>
                </ul>
            </div>

            <div class="module">
                <h3>Module 3: Cryptography and Authentication</h3>
                <ul class="module-topics">
                    <li>Encryption Algorithms and Protocols</li>
                    <li>Public Key Infrastructure (PKI)</li>
                    <li>Digital Signatures and Certificates</li>
                    <li>Authentication Methods</li>
                </ul>
            </div>

            <div class="module">
                <h3>Module 4: Security Tools and Practices</h3>
                <ul class="module-topics">
                    <li>Network Scanning and Monitoring</li>
                    <li>Vulnerability Assessment Tools</li>
                    <li>Security Information and Event Management (SIEM)</li>
                    <li>Penetration Testing Basics</li>
                </ul>
            </div>

            <div class="module">
                <h3>Module 5: Incident Response and Recovery</h3>
                <ul class="module-topics">
                    <li>Incident Response Planning</li>
                    <li>Security Auditing and Logging</li>
                    <li>Disaster Recovery Procedures</li>
                    <li>Business Continuity Planning</li>
                </ul>
            </div>
        </div>

        <div class="lab-requirements">
            <h2>Laboratory Requirements</h2>
            <ul>
                <li>Virtual Machine Environment</li>
                <li>Network Security Tools (Wireshark, Nmap, etc.)</li>
                <li>Firewall and IDS Software</li>
                <li>Security Analysis Tools</li>
            </ul>
        </div>

        <div class="assessment-info">
            <h2>Assessment Method</h2>
            <ul>
                <li>Practical Labs and Assignments: 40%</li>
                <li>Mid-term Assessment: 20%</li>
                <li>Final Project: 30%</li>
                <li>Class Participation: 10%</li>
            </ul>
        </div>

        <div class="resources-section">
            <h2>Course Resources</h2>
            <ul>
                <li>Main Textbook: "Network Security Essentials" by William Stallings</li>
                <li>Virtual Lab Environment Access</li>
                <li>Security Tools and Software Licenses</li>
                <li>Online Resources and Documentation</li>
                <li>Case Studies and Practice Materials</li>
            </ul>
        </div>

        <?php
        if(isset($_SESSION['user_id'])) {
            echo '<a href="enroll.php?course_id=4" class="enroll-button">Enroll Now</a>';
        } else {
            echo '<a href="login.php" class="enroll-button">Login to Enroll</a>';
        }
        ?>
    </div>

    <?php
    // Database connection
    function connectDB() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "course_db";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    // Function to enroll student
    function enrollStudent($user_id, $course_id) {
        $conn = connectDB();
        
        // Check if already enrolled
        $check_sql = "SELECT * FROM enrollments WHERE user_id = ? AND course_id = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("ii", $user_id, $course_id);
        $check_stmt->execute();
        $result = $check_stmt->get_result();
        
        if($result->num_rows > 0) {
            return "Already enrolled in Network Security course";
        }
        
        // Check prerequisites
        $prereq_sql = "SELECT completed FROM course_completion WHERE user_id = ? AND course_id IN (1, 2)"; // IDs for prerequisite courses
        $prereq_stmt = $conn->prepare($prereq_sql);
        $prereq_stmt->bind_param("i", $user_id);
        $prereq_stmt->execute();
        $prereq_result = $prereq_stmt->get_result();
        
        if($prereq_result->num_rows < 2) {
            return "Please complete the prerequisite courses first";
        }
        
        // Perform enrollment
        $sql = "INSERT INTO enrollments (user_id, course_id, enrollment_date) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $course_id);
        
        if($stmt->execute()) {
            return "Successfully enrolled in Network Security course";
        } else {
            return "Enrollment failed";
        }
    }

    // Process enrollment if requested
    if(isset($_POST['enroll']) && isset($_SESSION['user_id'])) {
        $result = enrollStudent($_SESSION['user_id'], 4); // 4 is the course ID for Network Security
        echo "<script>alert('$result');</script>";
    }
    ?>
</body>
</html>