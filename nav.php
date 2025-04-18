<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .top-navbar {
            background: linear-gradient(45deg, #4CAF50, #2c6b3f);
            overflow: hidden;
        }

        .top-navbar-nav {
            display: flex;
            align-content: center;
            justify-content: space-around;
            padding: 14px 16px;
        }

        .top-navbar-nav a {
            color: white;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .top-navbar-nav a:hover {
            color: #ffd700;
            text-decoration: underline;
            font-weight: bold;

        }

        .curve {
            display: flex;
            justify-content: center;
            height: 50px;
            width: 100px;
            border-top: 2px solid black;
            border-radius: 50% 50% 0 0;
        }

        .curve:hover {
            transform: translateY(-10px);
            border-top: 2px solid white;
            transition: all 0.3s ease;
        }

        .nav-bottom {
            background-color: #1c3a28;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
        }

        .brand i {
            font-size: 2.5rem;
            color: #ffd700;
            margin-right: 10px;
        }

        .brand span {
            color: white;
            font-size: 1.3rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-bottom ul {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }

        .nav-bottom ul li {
            margin: 0 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-bottom a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .nav-bottom a:hover {
            background-color: #ffd700;
            color: #1c3a28;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <div class="top-navbar">
        <div class="top-navbar-nav">
            <div class="curve"><a href="index.html">About Us</a></div>
            <div class="curve"><a href="about.html">FAQ'S</a></div>
            <div class="curve"><a href="services.html">Services</a></div>
            <div class="curve"><a href="contact.html">Contact</a></div>
        </div>
        <div class="nav-bottom">
            <div class="brand">
                <i class="bi bi-laptop"></i>
                <span>Acceleration Chamber</span>
            </div>
            <ul>
                <li><a href="home.html"><i class="bi bi-house-fill"></i><span class="nav-label">Home</span></a></li>
                <li><a href="program.html"><i class="bi bi-kanban-fill"></i><span class="nav-label">Program</span></a>
                </li>
                <li><a href="notes.html"><i class="bi bi-journal-text"></i><span class="nav-label">Notes</span></a></li>
                <li><a href="faculty.html"><i class="bi bi-people-fill"></i><span class="nav-label">Faculty</span></a>
                </li>
                <li><a href="profile.html"><i class="bi bi-person-circle"></i><span class="nav-label">Profile</span></a>
                </li>
                <li><a href="signup.html"><i class="bi bi-person-plus-fill"></i><span class="nav-label">Sign
                            Up</span></a>
                </li>

            </ul>
        </div>
    </div>
</body>

</html>