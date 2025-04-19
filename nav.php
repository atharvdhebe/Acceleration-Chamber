<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learning Platform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .top-navbar {
      background: linear-gradient(45deg, #4CAF50, #2c6b3f);
    }

    .top-navbar-nav {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 14px 16px;
    }

    .curve a {
      color: white;
      text-align: center;
      padding: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .curve a:hover {
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
      flex-wrap: wrap;
    }

    .brand {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .brand i {
      font-size: 2rem;
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
      flex-wrap: wrap;
      padding: 0;
      margin: 0;
      gap: 10px;
    }

    .nav-bottom ul li {
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

    .menu-toggle {
      display: none;
      font-size: 1.8rem;
      color: white;
      cursor: pointer;
    }

    /* DROPDOWN - PREPARE */
    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #1c3a28;
      display: none;
      flex-direction: column;
      padding: 10px 0;
      border-radius: 5px;
      z-index: 1000;
    }

    .dropdown:hover .dropdown-menu {
      display: flex;
    }

    .dropdown-menu a {
      padding: 8px 16px;
      white-space: nowrap;
      font-size: 1rem;
    }

    .dropdown-menu a:hover {
      background-color: #ffd700;
      color: #1c3a28;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .nav-bottom {
        flex-direction: column;
        align-items: flex-start;
      }

      .menu-toggle {
        display: block;
        position: absolute;
        top: 15px;
        right: 20px;
      }

      .nav-bottom ul {
        display: none;
        width: 100%;
        flex-direction: column;
        gap: 0;
      }

      .nav-bottom ul.show {
        display: flex;
      }

      .nav-bottom ul li {
        width: 100%;
        align-items: flex-start;
        padding-left: 20px;
      }

      .nav-bottom a {
        justify-content: flex-start;
      }

      .dropdown-menu {
        position: relative;
        background-color: #2b4c39;
        width: 100%;
        border: none;
      }

      .dropdown:hover .dropdown-menu {
        display: none;
      }

      .dropdown.open .dropdown-menu {
        display: flex;
      }
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

      <div class="menu-toggle" onclick="toggleMenu()">
        <i class="bi bi-list"></i>
      </div>

      <ul id="main-menu">
        <li><a href="home.php"><i class="bi bi-house-fill"></i><span class="nav-label">Home</span></a></li>

        <li class="dropdown" onclick="toggleDropdown(event)">
          <a href=""><i class="bi bi-kanban-fill"></i>
            <span class="nav-label">Program</span>
          </a>
          <div class="dropdown-menu">
            <a href="program.php">Graduation</a>
            <a href="post-graduation.php">Post-Graduation </a>
          </div>
        </li>

        <li><a href="notes.html"><i class="bi bi-journal-text"></i><span class="nav-label">Notes</span></a></li>
        <li><a href="faculty.html"><i class="bi bi-people-fill"></i><span class="nav-label">Faculty</span></a></li>
        <li><a href="profile.html"><i class="bi bi-person-circle"></i><span class="nav-label">Profile</span></a></li>
        <li><a href="signup.html"><i class="bi bi-person-plus-fill"></i><span class="nav-label">SignUp</span></a></li>
      </ul>
    </div>
  </div>

  <script>
    function toggleMenu() {
      document.getElementById("main-menu").classList.toggle("show");
    }

    function toggleDropdown(e) {
      if (window.innerWidth <= 768) {
        e.currentTarget.classList.toggle("open");
        e.stopPropagation();
      }
    }

    document.body.addEventListener("click", function () {
      document.querySelectorAll('.dropdown').forEach(el => el.classList.remove("open"));
    });
  </script>

</body>

</html>
