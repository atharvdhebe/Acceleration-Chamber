<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .video-section {
        position: relative;
        overflow: hidden;
        height: 500px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .video-section video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: fadeIn 3s ease-out;
    }


    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

</style>

<body>
    <div class="video-section">
        <video autoplay muted loop>
            <source src="videos/11904061_3840_2160_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</body>

</html>