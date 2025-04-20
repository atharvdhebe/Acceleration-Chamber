<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .footer {
        background-color: #2c6b3f;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px 40px;
        color: white;
        gap: 8%;
    }

    .footer-logo {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 20px;
    }

    .footer-logo i {
        color: #ffd700;
        font-size: 3rem;
    }

    .footer-logo i:hover{
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

    .footer-logo span {
        text-align: center;
        color: white;
        font-size: 1.3rem;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .footer-links {
        margin-top: 5px;
        flex: 1;
        min-width: 200px;
    }

    .footer-links h3 {
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: bold;
    }

    .social-media {
        list-style: none;
        padding: 0;
    }

    .social-media li {
        
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .social-media li i {
        color: white;
        font-size: 20px;
        margin-right: 10px;
    }
    
    .social-media li a{
        color: #f4f4f4;
        text-decoration: none;
    }

    .social-media li:hover{
        transform: translateY(-2px);
        transition: all 0.3s ease
    }

    .social-media li span {
        text-transform: capitalize;
    }

    .contact-info {
        margin-top: 5px;
        flex: 1;
        min-width: 200px;
    }

    .contact-info h3 {
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
    }

    .contact-info ul {
        list-style: none;
        padding: 0;
    }

    .contact-info li {
        margin-bottom: 10px;
        font-size: 15px;
    }

    .contact-info h5 {
        display: inline;
        margin-right: 5px;
        font-weight: 600;
    }

    .contact-info a {
        color: white;
        text-decoration: none;
    }

    .footer-map {
        min-width: 280px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer-map iframe {
        border-radius: 15px;
        width: 100%;
        max-width: 300px;
        height: 180px;
        border: 0;
    }

    .bottom-footer {
        background-color: #1c3a28;
        color: white;
        text-align: center;
        padding: 12px;
        font-size: 14px;
    }

    @media screen and (max-width: 600px) {
        .footer {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 25px;
        }

        .footer-links,
        .contact-info {
            margin-top: 10px;
            text-align: center;
        }

        .social-media li {
            justify-content: center;
        }
    }
</style>

<body>
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <i class="bi bi-laptop"></i><br>
                <span>Acceleration Chamber</span>
            </div>
            <div class="footer-links">
                <h3>&nbsp;Social media</h3>
                <ul class="social-media">
                    <li>
                        <a href="http://gmail.com" target="">
                            <i class="bi bi-envelope"></i><span>gmail</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="https://www.instagram.com/accelerationchamber" target="_blank">
                            <i class="bi bi-instagram"></i><span>instagram</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/accelerationchamber" target="_blank">
                            <i class="bi bi-linkedin"></i>  <span>linkdin</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="https://twitter.com/accel_chamber" target="_blank">
                            <i class="bi bi-twitter"></i><span>twitter</span>
                        </a>
                        
                    </li>
            </div>
           
            <div class="contact-info">
                <h3>Contact Info</h3>
                <ul>
                    <li>
                        <span>E-mail :</span>
                        <p><a href="accelerationchamber@gmail.com">accelerationchamber@gmail.com</a></p>
                    </li>
                    <li>
                        <span>Contact : </span><br>
                        <span>+91 9552724103</span>
                    </li>
                    <li>
                        <span>Location : </span><br>
                        <span>Pune</span>
                    </li>
                </ul>
            </div>
            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.1613018789467!2d73.83218307496291!3d18.521611582572127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf9eec256d2f%3A0xd29c7a0cc504b3cf!2sBMCC%20BBA%2CBBA-CA%2CBBA-IB%20Section!5e0!3m2!1sen!2sin!4v1745134577680!5m2!1sen!2sin"
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        <div class="bottom-footer">
            &copy; 2024 Acceleration Chamber. All rights reserved.
        </div>
    </footer>

</html>