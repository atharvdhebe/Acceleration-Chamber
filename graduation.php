<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>
<style>
.program-section {
    background-color: #f4f4f4;
    padding: 50px 20px;
    text-align: center;
}
.program-section h2 {
    font-size: 2rem;
    margin-bottom:40px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.program-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
    max-width:1200px;
    margin: 0 auto
}

.program-card{
    border-radius: 20px;
    background-color: #fff;
    padding: 20px 30px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    border-left: 6px solid rgb(48, 163, 144);
    border-top: 6px solid #1e1e2f;
}

.program-card:hover{
    transform: translateY(-`0px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.program-card h2{
    font-size: 1.6rem;
  
    margin-bottom: 15px;
}

.program-card p{
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.program-btn{
    align-self: flex-start;
    padding: 10px 20px;
    background-color:  #1e1e2f;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: bold;
    font-size: 0.95rem;
    transition: background-color 0.3s ease,transform 0.2s ease;

}
.program-btn:hover{
    color:  rgb(48, 163, 144);
    transform: translateY(-2px);
}

</style>

<body>
    <?php include('nav.php'); ?>
    <section class="program-section">
        <h2>OUR COURSES</h2>
        <div class="program-grid">
            <div class="program-card">
                <h2>BBA</h2>
                <p>Explore the world of business, management, and leadership with our BBA course designed for future
                    professionals.</p>
                <a href="bba.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>BBA-CA</h2>
                <p>Master the fundamentals of computer applications, software development, and IT with our BCA program.
                </p>
                <a href="bca.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>BBA-IB</h2>
                <p>Dive into the global business landscape with our BBA in International Business, focusing on global
                    trade and commerce.</p>
                <a href="bbaib.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>BMS</h2>
                <p>BMS is a dynamic undergraduate program that builds strong foundations in business management,
                    leadership, and organizational strategy.</p>
                <a href="bms.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>B.COM HONOURS</h2>
                <p>B.Com (Honours) offers in-depth knowledge of commerce, accounting, finance, and economics to prepare
                    students for the corporate world.</p>
                <a href="honours.php" class="program-btn">Learn More</a>
            </div>
            <div class="program-card">
                <h2>B.COM FINTECH</h2>
                <p>B.Com in FinTech combines core commerce education with cutting-edge financial technologies like
                    blockchain, digital payments, and data analytics.</p>
                <a href="fintech.php" class="program-btn">Learn More</a>
            </div>
    </section>

</body>
<?php include 'footer.php'; ?>

</html>