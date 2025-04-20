<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Section Styling */
    .privacy-policy-section {
        background-color: #f9f9f9;
        padding: 60px 20px;
        font-family: 'Arial', sans-serif;
    }

    .privacy-policy-container {
        max-width: 1100px;
        margin: auto;
        text-align: left;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Title and Subtitle Styling */
    .section-title {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
        letter-spacing: 1px;
    }

    .section-subtitle {
        font-size: 18px;
        color: #666;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 400;
    }

    /* Content Styling */
    .privacy-policy-content h3 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        border-bottom: 2px solid #3a3a3a;
        padding-bottom: 5px;
        margin-top: 30px;
    }

    .privacy-policy-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: justify;
    }

    /* List Styling */
    .privacy-policy-content ul {
        padding-left: 20px;
        list-style-type: disc;
    }

    .privacy-policy-content ul li {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }

    /* Link Styling */
    .contact-link {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .contact-link:hover {
        text-decoration: underline;
        color: #0056b3;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .privacy-policy-container {
            padding: 15px;
        }

        .section-title {
            font-size: 28px;
        }

        .privacy-policy-content h3 {
            font-size: 20px;
        }

        .privacy-policy-content p {
            font-size: 14px;
        }

        .privacy-policy-content ul li {
            font-size: 14px;
        }
    }
</style>

<body>
    <?php include('nav.php') ?>
    <section class="privacy-policy-section">
        <div class="privacy-policy-container">
            <h2 class="section-title">Privacy Policy</h2>
            <p class="section-subtitle">Your privacy is important to us. This policy outlines how we handle your
                personal information.</p>

            <div class="privacy-policy-content">
                <h3>1. Introduction</h3>
                <p>At <strong>Acceleration Chamber</strong>, we are committed to protecting your privacy. This Privacy
                    Policy explains how we collect, use, and safeguard your personal data when you use our website.</p>

                <h3>2. Information We Collect</h3>
                <p>We collect the following types of information:</p>
                <ul>
                    <li><strong>Personal Identification Information:</strong> Such as your name, email address, and ERP
                        login credentials when you create an account or request access to specific resources.</li>
                    <li><strong>Usage Data:</strong> Including information about how you use our platform, such as login
                        times, viewed content, and actions taken.</li>
                    <li><strong>Cookies:</strong> To enhance user experience and site functionality, we may use cookies
                        to store information.</li>
                </ul>

                <h3>3. How We Use Your Information</h3>
                <p>We use your information to:</p>
                <ul>
                    <li>Provide and improve our services.</li>
                    <li>Verify your identity through ERP-based login.</li>
                    <li>Allow access to relevant resources based on student status.</li>
                    <li>Communicate with you regarding updates, issues, or support.</li>
                </ul>

                <h3>4. Data Security</h3>
                <p>Your information is stored securely using encryption techniques. We implement measures to safeguard
                    your data from unauthorized access, alteration, or disclosure.</p>

                <h3>5. Data Retention</h3>
                <p>We retain your data only for as long as necessary to fulfill the purposes outlined in this policy.
                    You may request deletion of your data by contacting us.</p>

                <h3>6. Sharing Your Information</h3>
                <p>We will not sell, rent, or trade your personal data. However, we may share your information with
                    authorized personnel, such as admins or faculty, when necessary for legitimate academic purposes.
                </p>

                <h3>7. Your Rights</h3>
                <p>You have the right to:</p>
                <ul>
                    <li>Request access to your personal data.</li>
                    <li>Request the correction or deletion of your data.</li>
                    <li>Object to the processing of your data in certain circumstances.</li>
                </ul>

                <h3>8. Changes to This Policy</h3>
                <p>We reserve the right to update this Privacy Policy at any time. Any changes will be posted on this
                    page with an updated date.</p>

                <h3>9. Contact Us</h3>
                <p>If you have any questions or concerns about this Privacy Policy, please contact us at <a
                        href="mailto:accelerationchamber@gmail.com" class="contact-link">accelerationchamber@gmail.com</a>.
                </p>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

</body>

</html>