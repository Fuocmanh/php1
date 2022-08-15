<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas - Details</title>
    <link rel="stylesheet" href="asm/assets/client/css/details.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <section id="box"></section>
    <?php 
        include "asm/client/include/header.php";
        require 'connect.php';
    ?>
    <form action="" method="GET" style="display:none;">
        <h2>Order</h2>
        <section class="form">
            <section class="form-input">
                <label for="name"><b>Name</b></label>
                <input id="hoTen" type="text" class="form-control" name="usename" placeholder="Enter name">
                <label for="amount" class=""><b>Amount</b></label><br>
                <input id="mail" type="amount" class="form-control" name="amount" placeholder="Enter amount">
                <label for="phone number" class=""><b>Phone number</b></label><br>
                <input id="number" type="number" class="form-control" name="phone" placeholder="Enter your phone number">
                <label for="amount" class=""><b>Address</b></label><br>
                <input id="address" type="address" class="form-control" name="address" placeholder="Enter your address">
                <label for="sex"><b>Size</b></label>
                <section class="sex-hobbies" id="gt">
                    <input type="radio" name="size" value="s"> S
                    <input type="radio" name="size" value="m"> M
                    <input type="radio" name="size" value="l"> L
                    <input type="radio" name="size" value="x"> X
                    <input type="radio" name="size" value="xl"> XL
                </section>
                <h3>NOTE</h3>
                <textarea id="note" class="note" rows="5" cols="50" name="description" placeholder="Please enter a note (No more than 200 characters)"></textarea>
            </section>
            <input type="submit" onclick="hide()" id="form2" name="submit" value="Sign Up" class="SignUp">
        </section>

    </form>
    <div class="boxx" id="form1">
        <div class="left">
            <div class="img_top">
                <img src="<?php if (isset($_GET['img'])) : echo  $_GET['img'];
                            endif; ?>" alt="">
            </div>
            <div class="img_bot">
                <img src="<?php if (isset($_GET['img1'])) : echo  $_GET['img1'];
                            endif; ?>" alt="">
                <img src="<?php if (isset($_GET['img2'])) : echo  $_GET['img2'];
                            endif; ?>" alt="">
                <img src="<?php if (isset($_GET['img3'])) : echo  $_GET['img3'];
                            endif; ?>" alt="">
                <img src="<?php if (isset($_GET['img4'])) : echo  $_GET['img4'];
                            endif; ?>" alt="">
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample" style="padding: 2%;">
                <div class="accordion-item add">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Description
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="box1">
                                <div class="left">
                                    <h2><?php if (isset($_GET['h2'])) : echo  $_GET['h2'];
                                        endif; ?></h2>
                                    <p><?php if (isset($_GET['p'])) : echo  $_GET['p'];
                                        endif; ?></p>
                                </div>
                                <div class="right">
                                    <?php if (isset($_GET['img'])) : ?>
                                        <img src="<?php echo  $_GET['img'] ?>" alt="">
                                    <?php
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Care
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <div class="boxx2">
                                <div class="left">
                                    <h3 class="">Washing instructions</h3>
                                    <ul>
                                        <li><img src="https://www.adidas.com.vn/glass/react/3f7372a/assets/img/washing-instructions/B1.svg" alt="" width="24" height="24">Do not bleach</li>
                                        <li><img src="https://www.adidas.com.vn/glass/react/3f7372a/assets/img/washing-instructions/E1.svg" alt="" width="24" height="24">Do not tumble dry</li>
                                        <li><img src="https://www.adidas.com.vn/glass/react/3f7372a/assets/img/washing-instructions/A5.svg" alt="" width="24" height="24">Do not dry clean</li>
                                        <li><img src="https://www.adidas.com.vn/glass/react/3f7372a/assets/img/washing-instructions/C1.svg" alt="" width="24" height="24">Touch up with cool iron</li>
                                        <li><img src="https://www.adidas.com.vn/glass/react/3f7372a/assets/img/washing-instructions/D2.svg" alt="" width="24" height="24">Machine wash warm</li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <h3>Extra care information</h3>
                                    <ul>
                                        <li>Do not use fabric softener</li>
                                        <li>Wash and iron inside out</li>
                                        <li>Remove immediately</li>
                                        <li>LINE DRY</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Details
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <div class="boxx3">
                                <ul>
                                    <li>Regular fit</li>
                                    <li>Ribbed polo collar with button closure</li>
                                    <li>100% recycled polyester doubleknit</li>
                                    <li>Moisture-absorbing AEROREADY</li>
                                </ul>
                                <ul>
                                    <li>Mesh underarm inserts</li>
                                    <li>Manchester United woven crest</li>
                                    <li>Color: Real Red</li>
                                    <li>Product code: H64049</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="all" style="top: -300.062px;">
                <div class="alll">
                    <div class="pre-header___2xlx4">
                        <div><span>Boys • Football</span></div>

                    </div>
                    <h1><span>
                            <?php
                            if (isset($_GET['name'])) : echo  $_GET['name'];
                            endif; ?></span></h1>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div><?php if (isset($_GET['price'])) : echo  $_GET['price'];
                                            endif; ?><sup>đ</sup></div>
                                </div>
                            </div>
                        </div>
                        <div class="gl-vspace-bpall-small"><?php if (isset($_GET['color'])) : echo  $_GET['color'];
                                                            endif; ?></div>
                    </div>
                </div>
                <div>
                    <div class="size-selector">
                        <div class="sizee"><span>Sizes</span>
                        </div>
                        <div class="size">
                            <button>
                                <span>S</span>
                            </button><button><span>M</span></button><button>
                                <span>L</span>
                            </button><button>
                                <span>XL</span>
                            </button><button>
                                <span>XXL</span>
                            </button>
                        </div>
                    </div>
                    <div id="add-to-bag" tabindex="-1" class="add-to-bag">
                        <button type="button" class="buttom-bannerr" data-auto-id="add-to-bag" title="Add To Bag"><span class="add">Add To Bag <img src="../assets/client/images/right-arrow.png" alt=""></span><svg class="gl-icon gl-cta__icon"><use xlink:href="#arrow-right-long"></use></svg></button><div class="wish"><button  ><img src="../assets/client/images/favorite.png"></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php" ?>
    <script src="./assets/js/app.js"></script>
</body>

</html>