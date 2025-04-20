<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* FAQ Section Styling */
    .faq-section {
        background-color: #f9f9f9;
        padding: 60px 20px;
        font-family: 'Arial', sans-serif;
    }

    .faq-container {
        max-width: 1100px;
        margin: auto;
        text-align: left;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

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

    /* FAQ Item Styling */
    .faq-item {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
    }

    .faq-question {
        background-color:rgb(41, 91, 61);
        color: white;
        font-size: 18px;
        padding: 15px;
        width: 100%;
        text-align: left;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .faq-question:hover {
        background-color:  #2c6b3f;;
    }

    /* FAQ Answer Styling (Initially Hidden) */
    .faq-answer {
        display: none;
        padding: 15px;
        background-color: #f0f8ff;
        border-radius: 5px;
        margin-top: 10px;
    }

    .faq-answer p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }

    /* Active FAQ Item */
    .faq-item.active .faq-answer {
        display: block;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .faq-container {
            padding: 15px;
        }

        .section-title {
            font-size: 28px;
        }

        .section-subtitle {
            font-size: 16px;
        }

        .faq-question {
            font-size: 16px;
        }

        .faq-answer p {
            font-size: 14px;
        }
    }
</style>

<body>
    <?php include('nav.php')?>
    <section class="faq-section">
        <div class="faq-container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Have questions? We’ve got answers! Here are some of the most frequently asked
                questions about our platform.</p>

            <div class="faq-item">
                <button class="faq-question">How do I log in to the platform?</button>
                <div class="faq-answer">
                    <p>You can log in using your official ERP credentials. Simply enter your username and password to
                        access the platform.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">How do I know if I am eligible for access?</button>
                <div class="faq-answer">
                    <p>Once you log in, your request will be reviewed by the admin. Eligibility is determined based on
                        your academic status as a defaulter or year-down student.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can I access all the subjects?</button>
                <div class="faq-answer">
                    <p>You will be granted access to the subjects you need help with, once approved by the admin. Access
                        is subject-specific to ensure you're getting the right support.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">What happens if my access is denied?</button>
                <div class="faq-answer">
                    <p>If your access is denied, you can contact the admin for further clarification or to request a
                        review of your status.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Is the platform free to use?</button>
                <div class="faq-answer">
                    <p>Yes! All students who are approved for access will receive free resources such as recorded
                        lectures, study materials, and more.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can I access the resources at any time?</button>
                <div class="faq-answer">
                    <p>Yes, once access is granted, you can watch the lectures and study the materials anytime, 24/7,
                        according to your schedule.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');


        faqQuestions.forEach((question) => {
            question.addEventListener('click', function () {

                const faqItem = this.closest('.faq-item');

                faqItem.classList.toggle('active');
            });
        });
    </script>

</body>
<?php include('footer.php')?>
</html>