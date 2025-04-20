<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .about-us-section {
        background-color: #f9f9f9;
        padding: 60px 20px;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 1000px;
        margin: auto;
    }

    h2 {
        text-align: center;
        font-size: 36px;
        color: #333;
        margin-bottom: 10px;
    }

    .subtitle {
        text-align: center;
        font-size: 18px;
        color: #666;
        margin-bottom: 40px;
    }

    .about-block {
        margin-bottom: 40px;
    }

    .about-block h3 {
        font-size: 24px;
        color: #222;
        margin-bottom: 10px;
    }

    .about-block p {
        font-size: 16px;
        color: #444;
        line-height: 1.6;
    }

    .about-block ul {
        padding-left: 20px;
        color: #444;
    }

    .about-block ul li {
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .about-callout {
        background-color: #eaeaea;
        padding: 30px;
        border-radius: 8px;
    }

    .about-callout h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .about-callout p {
        font-size: 16px;
        color: #333;
    }
</style>

<body>
    <?php include('nav.php')?>
    <section class="about-us-section">
        <div class="container">
            <h2>About Us</h2>
            <p class="subtitle">Empowering Students Through Second Chances</p>

            <div class="about-block">
                <p>
                    Welcome to <strong>Acceleration Chamber</strong>, an internal e-learning platform thoughtfully
                    designed by and for the students of <strong>Brihan Maharashtra College OF Commerce,Pune</strong>. Our core mission is to
                    bridge academic gaps by offering structured support to students who are genuinely facing challenges
                    such as defaulter status or year-down circumstances.
                </p>
                <p>
                    We understand that setbacks are a part of life—and education shouldn't be a closed door because of
                    them. At [Your Website Name], we strongly believe in second chances, equal opportunities, and the
                    power of accessible learning.
                </p>
            </div>

            <div class="about-block">
                <h3>Our Vision</h3>
                <p>
                    To create an inclusive, judgment-free academic space where every student, regardless of their
                    current academic standing, has access to the same quality education as their peers.
                </p>
            </div>

            <div class="about-block">
                <h3>How It Works</h3>
                <ul>
                    <li><strong>ERP-Based Login:</strong> Students log in using their official ERP credentials, ensuring
                        only legitimate college students can access the platform.</li>
                    <li><strong>Admin Approval:</strong> Admins review student backgrounds and grant access based on
                        eligibility.</li>
                    <li><strong>Access Granted:</strong> Upon approval, students gain free access to lectures and
                        academic resources.</li>
                </ul>
            </div>

            <div class="about-block">
                <h3>Why We Exist</h3>
                <ul>
                    <li>To support students who are sincerely trying to catch up academically.</li>
                    <li>To provide a safe, distraction-free zone where learning can thrive at one's own pace.</li>
                    <li>To make faculty-provided lectures available beyond the physical classroom—anytime, anywhere.
                    </li>
                </ul>
                <p>This is not just a website—it’s a community-driven initiative to ensure that no student is left
                    behind.</p>
            </div>

            <div class="about-callout">
                <h3>Join Us on This Journey</h3>
                <p>
                    If you're a student trying to make a comeback—welcome. If you're a faculty member or admin
                    contributing your time and expertise—thank you. Together, we are shaping a future where everyone has
                    the tools and support to succeed.
                </p>
            </div>
        </div>
    </section>
<?php include('footer.php')?>
</body>

</html>