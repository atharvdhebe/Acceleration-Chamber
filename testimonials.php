<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .testimonial-section {
        background-color: #fff8ec;
        padding: 60px 20px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .testimonial-section h2 {
        font-size: 2rem;
        color:  #1e1e2f;
        margin-bottom: 40px;
    }

    .testimonial-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .testimonial-card {
        background-color: #fff;
        border-left: 6px solid rgb(48, 163, 144);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 25px 20px;
        max-width: 320px;
        border-radius: 8px;
        text-align: left;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .testimonial-card .quote {
        font-style: italic;
        color: #555;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }

    .testimonial-card h4 {
        color: #6d4f31;
        font-weight: 600;
        font-size: 0.95rem;
    }
</style>

<body>
    <?php include('nav.php') ?>
    <section class="testimonial-section">
        <h2>What Students Say</h2>
        <div class="testimonial-grid">

            <div class="testimonial-card">
                <p class="quote">"This platform helped me catch up on lectures I missed due to personal issues. I
                    finally feel confident again!"</p>
                <h4>- Priya S., MCA 2nd Year</h4>
            </div>

            <div class="testimonial-card">
                <p class="quote">"Being a year-down student was tough, but this e-learning site gave me the motivation
                    and tools to stay on track."</p>
                <h4>- Rohan K., BCA Final Year</h4>
            </div>

            <div class="testimonial-card">
                <p class="quote">"Having direct access to recorded lectures from faculty was a game changer. Thank you
                    for this initiative!"</p>
                <h4>- Meena T., MCA 1st Year</h4>
            </div>

        </div>
    </section>

</body>
<?php include('footer.php') ?>

</html>