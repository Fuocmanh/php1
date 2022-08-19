<header>
    <section class="thongbao">
        <p class="tb1">FREE DELIVERY OVER ₫1.3M</p>
        <p class="tb2">EASY RETURNS</p>
        <p class="tb3">CREDIT CARD PAYMENT NOW AVAILABLE!</p>
    </section>
    <section class="menu-logo">
        <nav class="t">
            <ul class="dropdownn">
                <li class="dropbtn" id="logo">
                    <a href="../index.php"><img src="https://pngimg.com/uploads/adidas/adidas_PNG17.png"></a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="products.php">Products</a>
                        </li>
                        <li>
                            <a href="aboutus.php">About us</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                        <li>
                            <a href="Cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>
                        </li>
                        <?php if (!isset($_SESSION['user'])) :
                        ?>
                            <li>
                                <ul style="margin-left: 30px !important;" class="dropdown">
                                    <li class="dropbt" href="#" id="tv">Account <i class="fa fa-caret-down"></i>
                                        <ul class="dropdown-contentt">
                                            <li>
                                                <a href="./client/SignUp.php">Sign Up</a>
                                            </li>
                                            <li><a href="./client/LogIn.php">Log in</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        else : ?>
                            <li style=" font-size: 16px; ">
                                <a style="width:100%;margin:0 !important; height:100%;font-size: 16px; "><?= $_SESSION['user'] ?></a>
                                <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg></a>
                            </li>
                        <?php
                        endif;
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="n">
            <ul>
                <a href="../index.php"><img src="https://pngimg.com/uploads/adidas/adidas_PNG17.png"></a>
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="products.php">Products</a>
                </li>
                <li>
                    <a href="aboutus.php">About us</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li>
                <li>
                    <a href="Cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>
                </li>
                <?php if (!isset($_SESSION['user'])) :
                ?>
                    <!-- <li> -->
                    <!-- <ul class="dropdown"> -->
                    <li><a style="font-size:16px; margin-left:0px !important;" href="SignUp.php">Sign Up</a>/<a style="font-size:16px;margin-left:0px !important;" href="LogIn.php">Log in</a>
                        <br>
                        <from style="height:28px;display:flex; margin-left:-50px !important">
                        <input style="height:28px;  margin:0 1px;" name="search" type="text">
                        <button style="background-color:black; width: 28px; height:28px; position: relative; border-radius:5px;color:white;" type="submit" name="submit" >
                            <svg style="margin:auto;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        </from>
                    </li>
                        <!-- <ul class="dropdown-content">
                                    <li>
                                        <a href="SignUp.php">Sign Up</a>
                                    </li>
                                    <li><a href="LogIn.php">Log in</a></li>
                                 </ul>
                        </ul> -->
                        <!-- </li> -->
                    <?php
                else : ?>
                    <li style=" font-size: 16px; ">
                        <a href="list-bill.php" style="font-size: 16px; margin:0px !important;"><?= $_SESSION['user'] ?></a>
                        <a style=" margin-left:0;" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg></a>
                            <br>
                            <from style="height:28px;display:flex; margin-left:-50px !important">
                        <input name="search" style="height:28px;  margin:0 1px;" type="text">
                        <button style="background-color:black; width: 28px; height:28px; position: relative; border-radius:5px;color:white;" type="submit" name="submit"><svg style="margin-top:-5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" /></svg></button>
                    </from>
                    </li>
                <?php
                endif;
                ?>
            </ul>
        </nav>
    </section>
</header>