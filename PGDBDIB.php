<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Semester Navigation | E-Learning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(to right, #e0ecf8, #f8f9fa);
      font-family: 'Segoe UI', sans-serif;
    }

    .tab-container {
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      padding: 40px;
      border-left: 6px solid rgb(48, 163, 144);
      border-top: 6px solid #1e1e2f;
    }

    .tab-buttons {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .tab-buttons .semester-btn {
      background-color: #2a2a40;
      border: none;
      border-left: 5px solid transparent;
      padding: 15px 20px;
      border-radius: 8px;
      text-align: left;
      font-size: 16px;
      color: aquamarine;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      width: 100%;
    }

    .tab-buttons .semester-btn:hover {
      background-color: #1e1e2f;
      color: #fff;
      border-left: 5px solid #0056b3;
      transform: translateX(5px);
    }

    .dropdown-subjects {
      padding-left: 20px;
      padding-top: 10px;
    }

    .dropdown-subjects a {
      display: block;
      padding: 6px 10px;
      color: #333;
      text-decoration: none;
      border-radius: 6px;
      transition: background 0.2s ease;
    }

    .dropdown-subjects a:hover {
      background-color: #e9ecef;
    }

    .title {
      font-size: 26px;
      font-weight: bold;
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    @media (max-width: 768px) {
      .tab-buttons {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
      }

      .tab-buttons .semester-btn {
        width: 100%;
        text-align: left;
        justify-content: space-between;
      }
    }
  </style>
</head>
<body>
<?php include('nav.php') ?>
<div class="tab-container">
  <div class="title">📚 Select a Semester to Begin Learning</div>
  <div class="row">
    <div class="col-md-8 tab-buttons mx-auto">
      
      <button class="semester-btn" data-toggle="collapse" data-target="#sem5">
        <span><i class="fas fa-project-diagram"></i> Semester 1</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div id="sem5" class="collapse dropdown-subjects">
        <a href="#">Web Technologies</a>
        <a href="#">Data Analytics</a>
      </div>

      <button class="semester-btn" data-toggle="collapse" data-target="#sem6">
        <span><i class="fas fa-brain"></i> Semester 2</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div id="sem6" class="collapse dropdown-subjects">
        <a href="#">Machine Learning</a>
        <a href="#">Cloud Computing</a>
      </div>

   
      <button class="semester-btn" data-toggle="collapse" data-target="#sem7">
        <span><i class="fas fa-robot"></i> Semester 3</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div id="sem7" class="collapse dropdown-subjects">
        <a href="#">AI & Robotics</a>
        <a href="#">Research Methods</a>
      </div>

      <button class="semester-btn" data-toggle="collapse" data-target="#sem8">
        <span><i class="fas fa-rocket"></i> Semester 4</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div id="sem8" class="collapse dropdown-subjects">
        <a href="#">Project Work</a>
        <a href="#">Internship</a>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS for collapse -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
