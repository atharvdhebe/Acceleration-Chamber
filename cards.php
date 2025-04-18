<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Must Learn Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .container h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
            font-weight: 600;
        }

        /* Better integrated Show More Button */
        .show-more-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .ai-button {
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        .ai-button:hover {
            transform: scale(1.03);
            box-shadow: 0 0 20px rgba(106, 17, 203, 0.5);
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <center>
            <h2>What We Have</h2>
        </center>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/web.png" class="card-img-top" alt="Course Image" />
                    <div class="card-body">
                        <h5 class="card-title">Web Development Basics</h5>
                        <p class="card-text">Learn the fundamentals of web development with HTML, CSS, and JavaScript.
                        </p>
                        <a href="course-details.html" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/faculty.png" class="card-img-top" alt="Instructor Image" />
                    <div class="card-body">
                        <h5 class="card-title">Expert Faculty</h5>
                        <p class="card-text">Expert in Data Science with over 15 years of experience in teaching and
                            research.</p>
                        <a href="instructor-profile.html" class="btn btn-info">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/students.png" class="card-img-top" alt="Student Image" />
                    <div class="card-body">
                        <h5 class="card-title">Happy Learners</h5>
                        <p class="card-text">"This platform helped me gain practical skills in Python and data science."
                        </p>
                        <a href="student-testimonials.html" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nicely aligned Show More Button -->
        <div class="show-more-wrapper">
            <a href="all-courses.html" class="ai-button">🚀 Show More Courses</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>