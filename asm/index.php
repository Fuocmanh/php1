<?php
session_start();
 require('client/include/connect.php') ;
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
    <link rel="stylesheet" href="./assets/client/css/index.css">
</head>

<body>
    <section id="box"></section>
    <?php include "./client/include/header1.php";
    include "./client/include/varproducts.php";
    ?>
    <banner>
        <div class="b1">
            <div class="image-text" style="position: absolute">
                <img id="anh" src="./assets/client/images/0.png" />
                <button onclick="next()" id="next">></button>
                <button onclick="prev()" id="prev">
                    < </button>
                        <section class="text" style="z-index: 999;">
                            <img src="./assets/client/images/logobanner.png">
                            <p>
                            Your journey is beginning. Official competition ball of the FIFA World Cup Qatar 2022™. Open for sale exclusively here until 12/4
                            </p>
                            <a href="./client/products.php">
                                <p class="buttom-bannerr">SHOP NOW →</p>
                            </a>
                        </section>
            </div>
        </div>
    </banner>
    <banner class="b2">

        <div class="player">
            <span id="play" class="play " title="Play/Stop" onclick="playStop();"></span>
            <span id="pause" class="pause " title="Play/Stop" style="display:none" ; onclick="playStop();"><i class="gg-play-pause"></i></span>
        </div>

        <div class="mutee">
            <button class="glow-on-hover" type="button" onclick="mute();"> <img src="http://upload.wikimedia.org/wikipedia/commons/3/3f/Mute_Icon.svg" alt="Mute_Icon.svg" id="mute" title="Mute icon" style="display:none;"><img src="http://upload.wikimedia.org/wikipedia/commons/2/21/Speaker_Icon.svg" id="unmute" alt="Speaker_Icon.svg" title="Unmute/speaker icon"></button>

        </div>
        <video src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto/video/upload/football-fw22-x-speedportal-pre-launch-hp-mh-large-animated-d_ftws0t.mp4" id="video" preload="auto" muted loop="" playsinline="" webkit-playsinline="" x5-playsinline="" style="width: 100%; height: 100%;"></video>
    </banner>
    <section class="whathot">
        <h2>WHAT'S HOT</h2>
        <div class="contenct">
            <div class="contenct_1">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/training-ss22-KarlieKlossXadidas-Q1-launch-HP-teasercarousel_tcm212-808517.jpg" alt="" style="width: 303px; height: 403px;">
                <div class="text_contenct" style="width: 303px; height: 133px;">
                    <strong>CREATED FOR THE CURIOUS</strong>
                    <p style="margin-top:10px">
                        A new collection designed to embrace the freedom of your sports style and the creativity of
                        your lifestyle.
                    </p>
                    <a class="mot" href="./client/products.php">SHOP NOW →</a>
                </div>
            </div>
            <div class="contenct_2">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,fl_lossy,q_1/enVN/Images/Teaser_Carousel_HP_tcm212-888226.jpg" alt="" style="width: 303px; height: 403px;">
                <div class="text_contenct" style="width: 303px; height: 133px;">
                    <strong>MY RETROPY</strong>
                    <p style="margin-top:10px">I am free to choose who I am.</p>
                    <a class="mot" href="./client/products.php">SHOP NOW →</a>
                </div>
            </div>
            <div class="contenct_3">
                <video loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/lace-triple-black-hp-teaser-carousel-dtm_1_ppd0pi.mp4" alt="" style="width: 303px; height: 403px;"></video>
                <div class="text_contenct" style="width: 303px; height: 133px;">
                    <strong>TRIPLE BLACK COLLECTION</strong>
                    <p style="margin-top:10px"> Dark mode enabled.</p>
                    <a class="mot" href="./client/products.php">SHOP NOW →</a>
                </div>
            </div>
            <div class="contenct_4">
                <video loop="" autoplay="" playsinline="" src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto,c_scale,w_0.5/video/upload/global%20brand%20publishing/football/FW22%20-%20Juventus%20Home/fw22-football-juventus-home-hp-hp-tcc.mp4" alt="" style="width: 303px; height: 403px;"></video>
                <div class="text_contenct" style="width: 303px; height: 133px;">
                    <strong>JUVENTUS 22/23 HOME KIT</strong>
                    <p style="margin-top:10px">Breaking the rules to create another legacy.</p>
                    <a class="mot" href="./client/products.php">SHOP NOW →</a>
                </div>
            </div>
        </div>
    </section>
    <h2 style="margin-top:45px;">NEW ARRIVALS</h2>
    <section class="items">

    </section>
    <section class="tintuc">
        <div class="tintuc_1">
            <img class="imgtt" src="https://cdn.vox-cdn.com/thumbor/TMmRaC0Kh0UQumlBrb3wTL4aIWM=/0x0:4928x3264/1570x883/filters:focal(2345x1520:3133x2308):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/58204993/GettyImages_692780345.0.jpg" alt="">
            <div class="tittle">
                <strong>
                    A NEW GENERATION
                </strong>
                <p> Loud and bold but always open — the shoe made to fit you.</p>
                <div href="./client/products.php" class="shop">SHOP NOW →</div>
            </div>
        </div>
        <div class="tintuc_2">
            <img class="imgtt" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enVN/Images/facecovering-hp-tc-d_tcm212-694777.jpg" alt="">
            <div class="tittle">
                <strong>
                    WE'VE GOT YOU COVERED
                </strong>
                <p>Discover the adidas Face Cover with an improved comfort, designed for exercise.</p>
                <div class="shop">SHOP NOW →</div>
            </div>
        </div>
    </section>
    <div style="margin-top:50px">

        <h2>WHO ARE YOU SHOPPING FOR?</h2>
        <!-- <section class="row">
            <?php
            $q = "SELECT c.Style FROM `check` c";
       
            $styles = $conn->query($q);
          
            if ($styles->num_rows > 0) :
                while($style = $styles->fetch_assoc()):
                    echo '<pre>';
                  
            ?>
                    <div class="rowN1">
                        <img src="<?="admin/uploads/"?>">
                        <p><?=$style['Style']?></p>
                    </div>
            <?php
            echo'</pre>';
               endwhile;
            endif;
            ?>

        </section> -->
        <h2 style="margin-top:50px">BEST OF ADIDAS</h2>
        <section class="items">
            <?php include "./client/include/bestofadidas.php" ?>
        </section>
        <?php include "./client/include/footer.php" ?>
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