<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .animation-section {
        background-color: #2c6b3f;
        color: white;
        text-align: center;
        padding: 50px 0;
        position: relative;
        height: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .animation-section h1 {
        font-size: 1.5rem;
        font-weight: bold;
        animation: slideIn 4s ease-out infinite;
        margin: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        50% {
            transform: translateX(0);
            opacity: 1;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<body>
    <div class="animation-section">
        <h1 id="quote-text">Loading Quote...</h1>
    </div>


    <script>
        const quotes = [
            "“The beautiful thing about learning is that no one can take it away from you.” – B.B. King",
            "“Learning never exhausts the mind, it only ignites it.” – Leonardo da Vinci",
            "“The only thing that interferes with my learning is my education.” – Albert Einstein",
            "“It is not that I'm so smart. But I stay with the questions much longer.” – Albert Einstein",
            "“Education is the most powerful weapon which you can use to change the world.” – Nelson Mandela"
        ];

        function getRandomQuote() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            return quotes[randomIndex];
        }

        function changeQuote() {
            document.getElementById('quote-text').textContent = getRandomQuote();
        }

        changeQuote();

        document.getElementById('quote-text').addEventListener('animationiteration', changeQuote);
    </script>
</body>

</html>