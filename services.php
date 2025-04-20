<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .services-section {
        background-color: #f5f5f5;
        padding: 60px 20px;
        font-family: Arial, sans-serif;
    }

    .services-container {
        max-width: 1200px;
        margin: auto;
        text-align: center;
    }

    .section-title {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 18px;
        color: #666;
        margin-bottom: 40px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
    }

    .service-card {
        background-color: #fff;
        padding: 30px 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .service-card h3 {
        font-size: 20px;
        color: #222;
        margin-bottom: 10px;
    }

    .service-card p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
    }
</style>

<body>
    <?php include('nav.php')?>
    <section class="services-section">
        <div class="services-container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Designed to support genuine defaulters and year-down students with structured
                academic recovery.</p>

            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">🎥</div>
                    <h3>Lecture Access</h3>
                    <p>Watch recorded lectures anytime, provided directly by college faculty.</p>
                </div>

                <div class="service-card">
                    <div class="icon">🔐</div>
                    <h3>Secure ERP Login</h3>
                    <p>Students log in using official ERP credentials to verify their identity.</p>
                </div>

                <div class="service-card">
                    <div class="icon">✅</div>
                    <h3>Admin Approval</h3>
                    <p>Admins review and approve student access based on eligibility.</p>
                </div>

                <div class="service-card">
                    <div class="icon">📚</div>
                    <h3>Subject-Wise Unlock</h3>
                    <p>Resources are unlocked only for the subjects students need help with.</p>
                </div>

                <div class="service-card">
                    <div class="icon">❤️</div>
                    <h3>Academic Recovery</h3>
                    <p>Tailored support for defaulter and year-down students to catch up academically.</p>
                </div>

                <div class="service-card">
                    <div class="icon">🖥️</div>
                    <h3>Central Learning Hub</h3>
                    <p>A one-stop platform for distraction-free learning and academic support.</p>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include('footer.php')?>

</html>