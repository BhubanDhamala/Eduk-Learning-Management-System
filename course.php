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
            <!-- Courses will be dynamically added here -->
        </div>
    </div>

    <script>
        const courses = [
            {
                title: "Web Development Masterclass",
                description: "Complete course covering HTML, CSS, JavaScript, and modern frameworks",
                instructor: "John Doe",
                price: 49.99,
                image: "/api/placeholder/350/200?text=Web+Development"
            },
            {
                title: "Python for Beginners",
                description: "Learn Python programming from scratch with hands-on projects",
                instructor: "Jane Smith",
                price: 39.99,
                image: "/api/placeholder/350/200?text=Python+Programming"
            },
            {
                title: "Data Science Essentials",
                description: "Introduction to data science, machine learning, and data analysis",
                instructor: "Mike Johnson",
                price: 59.99,
                image: "/api/placeholder/350/200?text=Data+Science"
            },
            {
                title: "Digital Marketing Strategy",
                description: "Comprehensive guide to modern digital marketing techniques",
                instructor: "Sarah Williams",
                price: 44.99,
                image: "/api/placeholder/350/200?text=Digital+Marketing"
            },
            {
                title: "Artificial Intelligence Fundamentals",
                description: "Comprehensive overview of AI concepts, neural networks, and machine learning",
                instructor: "Dr. Emily Chen",
                price: 69.99,
                image: "/api/placeholder/350/200?text=AI+Fundamentals"
            },
            {
                title: "Mobile App Development with React Native",
                description: "Create cross-platform mobile applications using React Native framework",
                instructor: "Alex Rodriguez",
                price: 54.99,
                image: "/api/placeholder/350/200?text=Mobile+App+Dev"
            },
            {
                title: "Cybersecurity Essentials",
                description: "Learn network security, ethical hacking, and defense strategies",
                instructor: "Mark Thompson",
                price: 59.99,
                image: "/api/placeholder/350/200?text=Cybersecurity"
            },
            {
                title: "Graphic Design Masterclass",
                description: "Professional graphic design techniques using Adobe Creative Suite",
                instructor: "Lisa Martinez",
                price: 49.99,
                image: "/api/placeholder/350/200?text=Graphic+Design"
            },
            {
                title: "Financial Investment and Trading",
                description: "Comprehensive guide to stock markets, investment strategies, and portfolio management",
                instructor: "Robert Kim",
                price: 64.99,
                image: "/api/placeholder/350/200?text=Financial+Investing"
            },
            {
                title: "Cloud Computing with AWS",
                description: "Complete course on Amazon Web Services cloud infrastructure and services",
                instructor: "David Lee",
                price: 59.99,
                image: "/api/placeholder/350/200?text=Cloud+Computing"
            },
            {
                title: "UX/UI Design Principles",
                description: "Master user experience and interface design for digital products",
                instructor: "Emma Wilson",
                price: 47.99,
                image: "/api/placeholder/350/200?text=UX+UI+Design"
            },
            {
                title: "Machine Learning with Python",
                description: "Advanced machine learning techniques and practical applications",
                instructor: "Dr. Michael Brown",
                price: 69.99,
                image: "/api/placeholder/350/200?text=Machine+Learning"
            },
            {
                title: "Creative Writing Workshop",
                description: "Develop your storytelling skills and learn professional writing techniques",
                instructor: "Karen Evans",
                price: 39.99,
                image: "/api/placeholder/350/200?text=Creative+Writing"
            },
            {
                title: "Blockchain and Cryptocurrency",
                description: "Comprehensive understanding of blockchain technology and cryptocurrency markets",
                instructor: "James Carter",
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