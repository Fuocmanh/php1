<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official</title>
    <link href='https://css.gg/play-pause.css' rel='stylesheet'>
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://css.gg/play-stop.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <banner class="b2" >

        <div class="player">
            <span id="play" class="play " title="Play/Stop" onclick="playStop();"></span>
            <span id="pause" class="pause " title="Play/Stop" style="display:none" ; onclick="playStop();"><i class="gg-play-pause"></i></span>
        </div>

        <div class="mutee">
            <button class="glow-on-hover" type="button" onclick="mute();"> <img src="http://upload.wikimedia.org/wikipedia/commons/3/3f/Mute_Icon.svg" alt="Mute_Icon.svg" id="mute" title="Mute icon" style="display:none;"><img src="http://upload.wikimedia.org/wikipedia/commons/2/21/Speaker_Icon.svg" id="unmute" alt="Speaker_Icon.svg" title="Unmute/speaker icon"></button>

        </div>
        <video src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto/video/upload/football-fw22-x-speedportal-pre-launch-hp-mh-large-animated-d_ftws0t.mp4" id="video" preload="auto" muted loop="" playsinline="" webkit-playsinline="" x5-playsinline="" style="width: 100%; height: 100%;"></video>
    </banner>
<form method="post" action="logout.php">
    <input style="font-size:30px;"class="form-control" type="submit" value="Logout" />
</form>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            var video = document.getElementById("video");
            var img = document.getElementById("mute");
            var img1 = document.getElementById("unmute");
            var play = document.getElementById("play");
            var pause = document.getElementById("pause");

            function playStop() {
                if (video.paused) {
                    video.play();
                    play.style.display = 'none';
                    pause.style.display = 'block';
                } else {
                    video.pause();
                    play.style.display = 'block';
                    pause.style.display = 'none';
                }
            }

            function mute() {
                if (video.muted == false) {
                    video.muted = true;
                    img.style.display = 'none';
                    img1.style.display = 'block';
                } else {
                    video.muted = false;
                    img.style.display = 'block';
                    img1.style.display = 'none';
                }
            }
        </script>
        <script src="./assets/client/javascript/app.js"></script>
</body>

</html>