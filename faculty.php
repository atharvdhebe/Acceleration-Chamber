<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .faculty-section {
        background-color: #f4f4f4;
        padding: 40px 20px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .faculty-section h2 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 30px;
    }

    .faculty-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .faculty-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 20px;
        width: 280px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .faculty-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
    }

    .faculty-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 3px solid #6b4f3b;
    }

    .faculty-card h3 {
        color: #333;
        font-size: 1.2rem;
        margin-bottom: 8px;
    }

    .faculty-card p {
        color: #555;
        font-size: 0.95rem;
        margin: 4px 0;
    }

    .faculty-card a {
        display: inline-block;
        margin-top: 10px;
        color: #6b4f3b;
        font-weight: 500;
        text-decoration: none;
    }

    .faculty-card a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <?php include('nav.php') ?>
    <section class="faculty-section">
        <h2>Meet Our Faculty</h2>
        <div class="faculty-grid">

            <div class="faculty-card">
                <img src="" alt="Dr. Aisha Patel">
                <h3>MR.XYZ</h3>
                <p>Subject: Data Structures</p>
                <p>Qualification: Ph.D. in Computer Science</p>
                <a href="mailto:aisha.patel@example.com">xyz@example.com</a>
            </div>

            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>
            
            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>

            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>

            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>

            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>

            <div class="faculty-card">
                <img src="assets/faculty2.jpg" alt="Prof. Raj Mehta">
                <h3>Prof.ABC</h3>
                <p>Subject: Operating Systems</p>
                <p>Qualification: M.Tech in IT</p>
                <a href="mailto:raj.mehta@example.com">abc@example.com</a>
            </div>

            <!-- Add more faculty cards here -->

        </div>
    </section>


</body>
<?php include('footer.php') ?>

</html>