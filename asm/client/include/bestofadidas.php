<style>
    .item {
        width: 100%;
        height: 95% !important;

        border: 1px solid white;

    }


    .imgtym {
        width: 100%;
        height: 100%;
        top: 0% !important;
        left: 0%;
        background-color: #ECEFF1;
        position: relative;
    }

    .item .hang {
        height: 100%;
        width: 100%;
    }

    .item .tym {
        position: absolute;
        width: 40px;
        height: 40px;
        top: 2% !important;
        left: 2%;
    }

    .item #gia {
        text-align: left;
        height: max-content;
        width: max-content;
        background-color: white;
        top: 40%;
        margin-left: 10px;
    }

    .item .name {
        text-align: left;
        top: 50%;
        height: max-content;
        background-color: white;
        margin-left: 10px;
    }

    .ori {
        top: 73%;
        margin-top: 5px;
        padding-left: 10px;
        color: #888384;
        font-size: 14px;
    }

    .new {
        top: 80%;
        margin-top: 5px;
        padding-left: 10px;
        font-size: 14px;
    }

    /* @-webkit-keyframes animation {
    from {
        opacity: 0;
        -webkit-transform: scale(1.2) rotateX(45deg);
        transform: scale(1.2) rotateX(45deg);
    }

    to {}
}

@-webkit-keyframes animation2 {
    from {
        opacity: 0;
        -webkit-transform: scale(1.2) rotateX(45deg);
        transform: scale(1.2) rotateX(45deg);
    }

    to {}
} */



    @font-face {
        font-family: font;
        src: url(https://dl.dropboxusercontent.com/u/50037593/ElasticSlider/hand.ttf);
        font-weight: bold;
    }

    .slider div p {
        color: #1c1c1c;
        position: absolute;
        bottom: -65px;
        font-family: font;
        font-size: 22px;
    }

    .slider {
        animation-delay: .8s;
        animation-fill-mode: backwards;

        margin-bottom: 65px;
        height: 400px;
        width: 100%;
        padding: 40px;
        top: 100px;
        perspective: 1000px;
        transition: ease-in-out .2s;
        /*-webkit-transform:rotateX(45deg);
     -webkit-transform-style:preserve-3d;
         position:absolute;*/
    }

    /*.slider:active{ -webkit-transform:rotateZ(10deg);}*/


    .slide img {
        text-align: center;
        width: 100%;
        height: 70%;
        -webkit-user-drag: none;

        -moz-user-drag: none;
        border-radius: 2px;
    }


    .slide {
        left: 33%;
        -webkit-user-select: none;
        user-select: none;
        -moz-user-select: none;
        position: absolute;
        height: 100%;
        width: 40%;
        box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.3);
        background: #fcfcfc;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        text-align: center;
        /*overflow:hidden;*/
        border: 10px white solid;
        box-sizing: border-box;
        border-bottom: 55px white solid;
        border-radius: 5px;
    }

    .transition {
        -webkit-transition: cubic-bezier(0, 1.95, .49, .73) .4s;
        -moz-transition: cubic-bezier(0, 1.95, .49, .73) .4s;
        transition: cubic-bezier(0, 1.95, .49, .73) .4s;
    }

    form {
        width: 100%;
        height: max-content;

    }

    input[type="submit"] {
        width: 100%;
        height: 60px;
        color: white;
        z-index: 55;
        border: none;
        background-color: rgba(0, 0, 0, 0.8);

    }
</style>
<?php include "varproducts.php" ?>
<div class="slider">
    <?php
    for ($i = 0; $i < count($products); $i++) :
    ?>
        <div class="slide">
            <div id="item" class="item">
                <div class="imgtym">
                    <img class="tym" src="./assets/client/images/logoTym1.png">
                    <p id="gia"><?= $products[$i]['price'] ?><sup>đ</sup></p>
                    <img class="hang" src="<?= $products[$i]['img'] ?>">
                </div>
                <p class="name"><?= $products[$i]['name'] ?></p>
                <p class="ori">Originals</p>
                <p class="new">new</p>
                <div>
                    <form action="./client/details.php" method="get">
                        <div style="width:0px!important; height:0px !important;">
                            <input name="name" value="<?= $products[$i]['name'] ?>" style="display:none;"></input>
                            <input name="color" value="<?= $products[$i]['color'] ?>" style="display:none;"></input>
                            <input class="price" name="price" value="<?= $products[$i]['price'] ?>" style="display:none;"></input>
                            <input name="h2" value="<?= $products[$i]['h2'] ?>" style="display:none;"></input>
                            <input name="p" value="<?= $products[$i]['p'] ?>" style="display:none;"></input>
                            <input name="img" value="<?= $products[$i]['img'] ?>" style="display:none;"></input>
                            <input name="img1" value="<?= $products[$i]['img1'] ?>" style="display:none;"></input>
                            <input name="img2" value="<?= $products[$i]['img2'] ?>" style="display:none;"></input>
                            <input name="img3" value="<?= $products[$i]['img3'] ?>" style="display:none;"></input>
                            <input name="img4" value="<?= $products[$i]['img4'] ?>" style="display:none;"></input>
                            <?php $i = $i; ?>
                        </div>
                        <input type="submit" name="submit" value="Product Detail" class="txt"></input>
                    </form>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<script>
    /*! Elastic Slider (c) 2014 // Taron Mehrabyan // Ruben Sargsyan
     */
    window.addEventListener('load', onWndLoad, false);

    function onWndLoad() {

        var slider = document.querySelector('.slider');
        var sliders = slider.children;
        var initX = null;
        var transX = 0;
        var rotZ = 0;
        var transY = 0;
        var curSlide = null;
        var Z_DIS = 50;
        var Y_DIS = 10;
        var TRANS_DUR = 0.4;

        var images = document.querySelectorAll('img');
        for (var i = 0; i < images.length; i++) {
            images[i].onmousemove = function(e) {
                e.preventDefault()
            }
            images[i].ondragstart = function(e) {
                return false;
            }
        }

        function init() {
            var z = 0,
                y = 0;
            for (var i = sliders.length - 1; i >= 0; i--) {
                sliders[i].style.transform = 'translateZ(' + z + 'px) translateY(' + y + 'px)';
                z -= Z_DIS;
                y += Y_DIS;
            }

            attachEvents(sliders[sliders.length - 1]);
        }

        function attachEvents(elem) {
            curSlide = elem;

            curSlide.addEventListener('mousedown', slideMouseDown, false);
            curSlide.addEventListener('touchstart', slideMouseDown, false);
        }
        init();

        function slideMouseDown(e) {

            if (e.touches) {
                initX = e.touches[0].clientX;
            } else {
                initX = e.pageX;
            }
            document.addEventListener('mousemove', slideMouseMove, false);
            document.addEventListener('touchmove', slideMouseMove, false);
            document.addEventListener('mouseup', slideMouseUp, false);
            document.addEventListener('touchend', slideMouseUp, false);
        }
        var prevSlide = null;

        function slideMouseMove(e) {
            var mouseX;

            if (e.touches) {
                mouseX = e.touches[0].clientX;
            } else {
                mouseX = e.pageX;
            }
            transX += mouseX - initX;
            rotZ = transX / 10;

            transY = -Math.abs(transX / 7);
            curSlide.style.transition = 'none';
            curSlide.style.webkitTransform = 'translateX(' + transX + 'px)' + ' rotateZ(' + rotZ + 'deg)' + ' translateY(' + transY + 'px)';
            curSlide.style.transform = 'translateX(' + transX + 'px)' + ' rotateZ(' + rotZ + 'deg)' + ' translateY(' + transY + 'px)';
            var j = 1;
            //remains elements
            for (var i = sliders.length - 2; i >= 0; i--) {

                sliders[i].style.webkitTransform = 'translateX(' + transX / (2 * j) + 'px)' + ' rotateZ(' + rotZ / (2 * j) + 'deg)' + ' translateY(' + (Y_DIS * j) + 'px)' + ' translateZ(' + (-Z_DIS * j) + 'px)';
                sliders[i].style.transform = 'translateX(' + transX / (2 * j) + 'px)' + ' rotateZ(' + rotZ / (2 * j) + 'deg)' + ' translateY(' + (Y_DIS * j) + 'px)' + ' translateZ(' + (-Z_DIS * j) + 'px)';
                sliders[i].style.transition = 'none';
                j++;
            }
            initX = mouseX;
            e.preventDefault();
            if (Math.abs(transX) >= curSlide.offsetWidth - 500) {

                document.removeEventListener('mousemove', slideMouseMove, false);
                document.removeEventListener('touchmove', slideMouseMove, false);
                curSlide.style.transition = 'ease 0.2s';
                curSlide.style.opacity = 0;
                prevSlide = curSlide;
                attachEvents(sliders[sliders.length - 2]);
                slideMouseUp();
                setTimeout(function() {
                    slider.insertBefore(prevSlide, slider.firstChild);

                    prevSlide.style.transition = 'none';
                    prevSlide.style.opacity = '1';
                    slideMouseUp();

                }, 201);

                return;
            }
        }

        function slideMouseUp() {
            transX = 0;
            rotZ = 0;
            transY = 0;

            curSlide.style.transition = 'cubic-bezier(0,1.95,.49,.73) ' + TRANS_DUR + 's';

            curSlide.style.webkitTransform = 'translateX(' + transX + 'px)' + 'rotateZ(' + rotZ + 'deg)' + ' translateY(' + transY + 'px)';
            curSlide.style.transform = 'translateX(' + transX + 'px)' + 'rotateZ(' + rotZ + 'deg)' + ' translateY(' + transY + 'px)';
            //remains elements
            var j = 1;
            for (var i = sliders.length - 2; i >= 0; i--) {
                sliders[i].style.transition = 'cubic-bezier(0,1.95,.49,.73) ' + TRANS_DUR / (j + 0.9) + 's';
                sliders[i].style.webkitTransform = 'translateX(' + transX + 'px)' + 'rotateZ(' + rotZ + 'deg)' + ' translateY(' + (Y_DIS * j) + 'px)' + ' translateZ(' + (-Z_DIS * j) + 'px)';
                sliders[i].style.transform = 'translateX(' + transX + 'px)' + 'rotateZ(' + rotZ + 'deg)' + ' translateY(' + (Y_DIS * j) + 'px)' + ' translateZ(' + (-Z_DIS * j) + 'px)';

                j++;
            }
            document.removeEventListener('mousemove', slideMouseMove, false);
            document.removeEventListener('touchmove', slideMouseMove, false);

        }
    }
</script>