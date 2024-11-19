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
                price: 39.90,
                image: ""


            },
            {
                title: " Programming concept with c",
                description: " It follows a structured approach, is highly portable, and forms the foundation of many modern languages like C++ and Java.",
                instructor: "Bijay Malla",
                price: 39.99,
                image: "/api/placeholder/350/200?text=Python+Programming"
            },
            {
                title: "Digital logics",
                description: "Digital logic is essential for designing reliable and efficient digital systems, forming the backbone of modern computing .",
                instructor: "Suresh diyal",
                price: 40.10,
                image: "/api/placeholder/350/200?text=Data+Science"
            },
            {
                title: "Object orinted programming with C++ ",
                description: "C++ combines the power of procedural programming with OOP, making it a versatile choice for system software, games, and high-performance applications.",
                instructor: "Govinda Subedi",
                price: 44.99,
                image: "..//admin/images/oop."
            },
            {
                title: "Data structures and algorithms",
                description: "Understanding DSA is essential for building scalable and high-performance applications.",
                instructor: "Amrit Marasaini",
                price: 69.99,
                image: "/api/placeholder/350/200?text=AI+Fundamentals"
            },
            {
                title: "Microprocessor & computer organization",
                description: "Understanding computer organization helps in optimizing system performance and designing better hardware architectures.",
                instructor: "Gobinda Subedi",
                price: 54.99,
                image: "/api/placeholder/350/200?text=Mobile+App+Dev"
            },
            {
                title: "Web technology",
                description: "Web technology refers to the tools, languages, and frameworks used to create, develop, and maintain websites and web applications.",
                instructor: "Bijay Malla",
                price: 59.99,
                image: "/api/placeholder/350/200?text=Cybersecurity"
            },
            {
                title: "Operating system",
                description: "The OS is crucial for the overall functioning of a computer, making it possible for users and applications to interact with hardware in a controlled, efficient manner.",
                instructor: "Keshab Pokharel",
                price: 49.99,
                image: "/api/placeholder/350/200?text=Graphic+Design"
            },
            {
                title: "Java programming and language",
                description: "Java code is compiled into bytecode, which is executed by the JVM, making it platform-independent.",
                instructor: "Bijay Malla",
                price: 64.99,
                image: "/api/placeholder/350/200?text=Financial+Investing"
            },
            {
                title: "Data communication and network ",
                description: " It involves the transfer of digital data across a network, enabling devices to share resources, exchange information, and perform collaborative tasks.",
                instructor: "Suresh Diyal",
                price: 59.99,
                image: "/api/placeholder/350/200?text=Cloud+Computing"
            },
            {
                title: "Teaching math",
                description: "Encouraging logical thinking, persistence, and critical reasoning is also central to successful math instruction.",
                instructor: "Narhari Achary",
                price: 47.99,
                image: "/api/placeholder/350/200?text=UX+UI+Design"
            },
            {
                title: "System administration using linux",
                description: "System Administration using Linux involves managing and maintaining Linux-based servers and systems to ensure their smooth and secure operation.",
                instructor: "Keshab Pokharel",
                price: 69.99,
                image: "/api/placeholder/350/200?text=Machine+Learning"
            },
            {
                title: "Network security",
                description: "Network security encompasses a range of strategies, tools, and techniques, including firewalls, encryption, intrusion detection systems (IDS), and virtual private networks (VPNs), among others.",
                instructor: "Keshab Pokharel",
                price: 39.99,
                image: "/api/placeholder/350/200?text=Creative+Writing"
            },
            {
                title: "Artificial intelligence in education",
                description: "AI can personalize learning experiences, automate administrative tasks, and improve educational outcomes.",
                instructor: "Rajendra Rokaya",
                price: 54.99,
                image: "/api/placeholder/350/200?text=Blockchain"
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
                        <p><strong>Price:</strong> $${course.price.toFixed(2)}</p>
                        <button class="enroll-btn" onclick="enrollCourse('${course.title}')">Enroll Now</button>
                    </div>
                `;
                courseGrid.appendChild(courseCard);
            });
        }

        function enrollCourse(courseTitle) {
            alert(`You are enrolling in: ${courseTitle}`);
            // In a real application, this would trigger the enrollment process
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