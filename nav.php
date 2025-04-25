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
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fa;
    }

    .top-navbar {
      background: linear-gradient(45deg, #1e1e2f, #2a2a40);
    }

    .top-navbar-nav {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 14px 16px;
    }

    .curve a {
      color: #00c9a7;
      text-align: center;
      padding: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .curve a:hover {
      color: #ffffff;
      text-decoration: underline;
      font-weight: bold;
    }

    .curve {
      display: flex;
      justify-content: center;
      height: 50px;
      width: 100px;
      border-top: 2px solid #00c9a7;
      border-radius: 50% 50% 0 0;
      transition: transform 0.3s ease, border 0.3s ease;
    }

    .curve:hover {
      transform: translateY(-10px);
      border-top: 2px solid #ffffff;
    }

    .nav-bottom {
      background-color: #1e1e2f;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      position: relative;
    }

    .brand {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .brand i {
      font-size: 2rem;
      color: #00c9a7;
      margin-right: 10px;
    }

    .brand span {
      color: white;
      font-size: 1.4rem;
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

    .nav-bottom a {
      color: #e0e0e0;
      text-decoration: none;
      font-size: 1.05rem;
      font-weight: 600;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 8px 12px;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .nav-bottom a:hover {
      background-color: #00c9a7;
      color: #1e1e2f;
      transform: translateY(-2px);
    }

    .menu-toggle {
      display: none;
      font-size: 1.8rem;
      color: #00c9a7;
      cursor: pointer;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      background-color: #fafafa;
      box-shadow:0 10px 25px rgba(0, 0, 0, 0.1); ;
      display: none;
      flex-direction: column;
      padding: 10px 0;
      border-radius: 6px;
      min-width: 180px;
    }

    .dropdown:hover .dropdown-menu {
      display: flex;
    }

    .dropdown-menu a {
      padding: 8px 16px;
      font-size: 1rem;
      color: rgb(0, 0, 0);
    }

    .dropdown-menu a:hover {
      background-color: #00c9a7;
      color: #1e1e2f;
    }

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
        background-color: #3a3a5a;
        width: 100%;
        border: none;
      }

      .dropdown.open .dropdown-menu {
        display: flex;
      }
    }
  </style>
  <!-- <style>
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
  .nav-bottom {
  flex-direction: column;
  align-items: flex-start;
  }

  @media (max-width: 768px) {

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
  
  </style> -->
</head>

<body>
  <div class="top-navbar">
    <div class="top-navbar-nav">
      <div class="curve"><a href="about_us.php">About Us</a></div>
      <div class="curve"><a href="FAQ's.php">FAQ'S</a></div>
      <div class="curve"><a href="services.php">Services</a></div>
      <div class="curve"><a href="privacy.php">Privacy</a></div>
      <div class="curve"><a href="contactUs.php">Contact</a></div>
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

        <li class="dropdown" onmouseenter="toggleDropdown(event)" onmouseleave="closeDropdown(event)">
          <a href=""><i class="bi bi-kanban-fill"></i>
            <span class="nav-label">Program</span>
          </a>
          <div class="dropdown-menu">
            <a href="graduation.php">Graduation</a>
            <a href="post-graduation.php">Post-Graduation </a>
          </div>
        </li>

        <li><a href="notes.html"><i class="bi bi-journal-text"></i><span class="nav-label">Notes</span></a></li>
        <li><a href="faculty.php"><i class="bi bi-people-fill"></i><span class="nav-label">Faculty</span></a></li>
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
        e.currentTarget.classList.add("open");
      }
    }

    function closeDropdown(e) {
      if (window.innerWidth <= 768) {
        e.currentTarget.classList.remove("open");
      }
    }

    document.body.addEventListener("click", function () {
      document.querySelectorAll('.dropdown').forEach(el => el.classList.remove("open"));
    });
  </script>

</body>

</html>


<!-- 

तेरे जुल्फों की चादर से ढकना तुम मुझे
तेरे आंसू के कतरों से तकना तुम मुझे
तेरे इश्क में शहीद बन बैठा ओ साथी 
तेरे दिल की चौराहों पे रखना तुम मुझे

- अक्स..    -->