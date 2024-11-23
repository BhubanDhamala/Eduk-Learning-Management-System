<?php
// Database configuration
class Database {
    private $host = "localhost";
    private $db_name = "eduk_learning";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
        return $this->conn;
    }
}

// Course enrollment class
class CourseEnrollment {
    private $conn;
    private $courses_table = "courses";
    private $enrollments_table = "enrollments";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Function to enroll in Network Security course
    public function enrollNetworkSecurity($student_id) {
        // First, get the Network Security course ID
        $course_query = "SELECT id FROM " . $this->courses_table . " 
                        WHERE title = 'Network security'";
        
        $stmt = $this->conn->prepare($course_query);
        $stmt->execute();
        
        if($course_data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $course_id = $course_data['id'];
            
            // Check if already enrolled
            $check_query = "SELECT id FROM " . $this->enrollments_table . "
                          WHERE student_id = :student_id AND course_id = :course_id";
            
            $check_stmt = $this->conn->prepare($check_query);
            $check_stmt->bindParam(":student_id", $student_id);
            $check_stmt->bindParam(":course_id", $course_id);
            $check_stmt->execute();
            
            if($check_stmt->rowCount() > 0) {
                return array("success" => false, "message" => "Already enrolled in Network Security course");
            }
            
            // Proceed with enrollment
            $enroll_query = "INSERT INTO " . $this->enrollments_table . "
                           (student_id, course_id, enrollment_date, status)
                           VALUES (:student_id, :course_id, NOW(), 'active')";
            
            $enroll_stmt = $this->conn->prepare($enroll_query);
            $enroll_stmt->bindParam(":student_id", $student_id);
            $enroll_stmt->bindParam(":course_id", $course_id);
            
            if($enroll_stmt->execute()) {
                return array("success" => true, "message" => "Successfully enrolled in Network Security course");
            } else {
                return array("success" => false, "message" => "Error during enrollment");
            }
        }
        return array("success" => false, "message" => "Course not found");
    }
}

// Handle enrollment request (save as enroll_network_security.php)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get student ID from session (assuming user is logged in)
    session_start();
    $student_id = $_SESSION['student_id'] ?? null;
    
    if (!$student_id) {
        echo json_encode(array("success" => false, "message" => "Please log in first"));
        exit;
    }
    
    $database = new Database();
    $db = $database->connect();
    $enrollment = new CourseEnrollment($db);
    
    $result = $enrollment->enrollNetworkSecurity($student_id);
    echo json_encode($result);
    exit;
}
?>

<!-- HTML for the Network Security course enrollment button -->
<!DOCTYPE html>
<html>
<head>
    <title>Network Security Course Enrollment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Network Security</h3>
            </div>
            <div class="card-body">
                <img src="images/network-security.jpg" class="img-fluid mb-3" alt="Network Security">
                <p>Network security encompasses a range of strategies, tools, and techniques, including firewalls, encryption, intrusion detection systems (IDS), and virtual private networks (VPNs), among others.</p>
                <p><strong>Instructor:</strong> Keshab Pokharel</p>
                <button onclick="enrollCourse()" class="btn btn-primary">Enroll Now</button>
            </div>
        </div>
    </div>

    <script>
    function enrollCourse() {
        if (confirm('Are you sure you want to enroll in the Network Security course?')) {
            fetch('enroll_network_security.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    // Show enrollment confirmation dialog
                    document.getElementById('enrollmentConfirmation').style.display = 'block';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error enrolling in the course');
            });
        }
    }
    </script>
</body>
</html>