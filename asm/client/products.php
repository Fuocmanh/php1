
<?php 
require('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Products</title>
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/client/css/products.css">
</head>

<body>
    <?php include "include/header.php" ?>
    <section id="box"></section>
    <section class="sanpham" id="sanpham">
        <h1 class="heading"> Sản Phẩm Mới </h1>
        <form action="" method="get" style="column-count:5;">
            <?php
            $d = 'checked';
            $c = null;

            include 'include/varproducts.php';
            for ($i = 0; $i <  count($check); $i++) :
            ?>
                <div style="width:max-content;margin:0 auto; display:flex; line-height:25px; ">
                    <?php
                    if ($i <= 3) :
                        echo '<label class="toggler-wrapper style-20">';
                        echo '<input type="checkbox" name="id[]" value="' . $check[$i] . '"';
                        if ($i == 0) :
                            echo "$d>";
                        // echo ">";
                        else :
                            echo ">";
                        endif;
                    else :
                        echo '';
                        echo ' <input class="sub" type="submit" value="Submit" name="submit">';
                    endif;

                    ?>

                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                    </label>
                    <div class="badge" style="width:max-content;padding-left:5px; font-size:20px; "><?= $check[$i] ?></div>
                </div>

            <?php endfor ?>
        </form>
      <?php 
      require('include/tagproducts.php');
?>

     
    </section>
    <?php
    
    
    include 'include/footer.php';
         
    ?>
    </section>
</body>

</html>