<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Platform</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .course-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .course-card:hover {
            transform: scale(1.05);
        }
        .course-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .course-card-content {
            padding: 15px;
        }
        .course-card-content h2 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .enroll-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .enroll-btn:hover {
            background-color: #2980b9;
        }
        #searchInput {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .course-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Online Learning Platform</h1>
            <input type="text" id="searchInput" placeholder="Search courses...">
        </div>
    </header>

    <div class="container">
        <div id="courseGrid" class="course-grid">
            
        </div>
    </div>

    <script>
        const courses = [
            {
                title: "Introduction of information technology",
                description: "The course introduces students to hardware, software, networking, data management, and emerging trends in IT.",
                instructor: "Suresh Diyal",
                image: "./admin/images/IIT.jpeg"
            },
            {
                title: "System Administration using Linux",
                description: "System Administration using Linux involves managing and maintaining Linux-based servers and systems to ensure their smooth and secure operation.",
                instructor: "Keshab Pokharel",
                image: "admin/images/SA.jpeg"
            },
            {
                title: "Database Management System",
                description: "DBMS provides a systematic approach to manage, store, and retrieve data efficiently while ensuring data integrity, security, and concurrent access control.",
                instructor: "Amrit Marasaini",
                image: "./admin/images/Dbms.jpeg"
            },
            {
                title: "Network security",
                description: "Network security encompasses a range of strategies, tools, and techniques, including firewalls, encryption, intrusion detection systems (IDS), and virtual private networks (VPNs), among others.",
                instructor: "Keshab Pokharel",
                image: "./admin/images/NW.JPEG"
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
                        <button class="enroll-btn" onclick="enrollCourse('${course.title}')">Enroll Now</button>
                    </div>
                `;
                courseGrid.appendChild(courseCard);
            });
        }

        function enrollCourse(courseTitle) {
    switch(courseTitle) {
        case "Network security":
            window.location.href = "Network_course.php";
            break;
        case "Introduction of information technology":
            window.location.href = "itt_course.php";
            break;
            case "System Administration using Linux":
            window.location.href = "linux_course.php";
            break;
            case "Database Management System":
            window.location.href = "database_course.php";
            break;
        default:
            alert(`You are enrolling in: ${courseTitle}`);
    }
}

        
 function searchCourses() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const filteredCourses = courses.filter(course => 
                course.title.toLowerCase().includes(searchInput) || 
                course.description.toLowerCase().includes(searchInput)
            );
            renderCourses(filteredCourses);
        }

        // Initial render of all courses
        renderCourses(courses);

        // Add event listener for search
        document.getElementById('searchInput').addEventListener('input', searchCourses);
    </script>
</body>
</html>