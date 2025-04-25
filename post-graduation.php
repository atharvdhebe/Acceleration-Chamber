<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .program-section {
        background-color: #f4f4f4;
        padding: 50px 20px;
        text-align: center;
    }

    .program-section h2 {
        font-size: 2rem;
        margin-bottom: 40px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .program-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto
    }

    .program-card {
        border-radius: 20px;
        background-color: #fff;
        padding: 20px 30px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: left;
        border-left: 6px solid rgb(48, 163, 144);
        border-top: 6px solid #1e1e2f;   
    }

    .program-card:hover {
        transform: translateY(-`0px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .program-card h2 {
        font-size: 1.6rem;
        color: 2c6b3f;
        margin-bottom: 15px;
    }

    .program-card p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .program-btn {
        align-self: flex-start;
        padding: 10px 20px;
        background-color:  #1e1e2f;
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: bold;
        font-size: 0.95rem;
        transition: background-color 0.3s ease, transform 0.2s ease;

    }

    .program-btn:hover {
        color: rgb(48, 163, 144);
        transform: translateY(-2px);
    }
</style>

<body>
<?php include('nav.php'); ?>
    <section class="program-section">
        <h2>Our Courses</h2>
        <div class="program-grid">
            <div class="program-card">
                <h2>PGDIB</h2>
                <p>PGDIB (Post Graduate Diploma in International Business) equips students with essential knowledge of
                    global trade, international marketing, and cross-border business strategies.</p>
                <a href="PGDBDIB.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>PGDBDA</h2>
                <p>PGDBDA (Post Graduate Diploma in Business Data Analytics) empowers students with skills in data
                    analysis, statistical modeling, and business intelligence to drive data-driven decisions.</p>
                <a href="PGDBDA.php" class="program-btn">Learn More</a>
            </div>
        </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>
</html>