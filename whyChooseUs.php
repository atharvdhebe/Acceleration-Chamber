<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .key-benefits {
        background-color: #f5f7fa;
        padding: 40px 20px;
        text-align: center;
    }

    .key-benefits h2 {
        font-size: 2rem;
        margin-bottom: 30px;
        color: #333;
    }

    .benefits-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .benefit-card {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
    }

    .benefit-card h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #1e293b;
    }

    .benefit-card p {
        font-size: 0.95rem;
        color: #555;
    }
</style>

<body>
    <section class="key-benefits">
        <h2>Why Choose Us?</h2>
        <div class="benefits-container">
            <div class="benefit-card">
                <h3>100% Recorded Lectures</h3>
                <p>Access anytime, anywhere – no stress about missing classes.</p>
            </div>
            <div class="benefit-card">
                <h3>Tailored for Your Syllabus</h3>
                <p>Content matches your college curriculum for targeted prep.</p>
            </div>
            <div class="benefit-card">
                <h3>Support for Year-Down Students</h3>
                <p>Special focus on backlog clearing and personal growth.</p>
            </div>
        </div>
    </section>
</body>

</html>