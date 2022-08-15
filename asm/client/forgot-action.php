<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/client/css/LogIn.css">

</head>

<body>
    <?php
    require('include/connect.php');
    if (isset($_POST['forgot'])) :
        $email = $_POST['email'];
        $code = $_POST['code'];
        include('include/sendmail.php');
    ?>
         <div style="height: 107px"></div>


<section class="boxall">
    <?php include "include/header.php" ;?>
    <!-- form đăng nhập -->
    <form name="f1" id="f" action="edit.php" method="post">
        <h2>Recover password</h2>
        <hr>
        <section class="form">
        <section class="form-input">
                            <label for="email"><b>Code</b></label>
                            <input type="hidden" value="<?=$code?>" name="code">
                            <input type="hidden" value="<?=$email?>" name="email">
                            <input id="mail" class="form-control" type="text" name="codeenter" placeholder="Enter the code received via email" >
                            <input style="margin-bottom:30px;" type="submit" name="entercode" value="Submit" class="SignUp">
                        
    </form>
</section>
<!-- đặng nhập bằng hình thức khác -->
<p class="or">OR</p>
<section class="fb">
    <p>FACEBOOK</p>
    <img src="../assets/client/images/logofb.png">
</section>
<section class="fb">
    <p>INSTAGRAM</p>
    <img src="../assets/client/images/logoinsta.png">
</section>
</section>
<!-- giới thiệu về đăng kí tài khoảng cho trường hợp chưa có tài khoảng -->
<section class="createpro">
    <section class="create">
        <h2>CREATE AN ACCOUNT</h2>
        Creating an account is easy. Enter your email address and fill in the form on the next page and enjoy
        the benefits of having an account.<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Simple overview of your personal information<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />Faster
        checkout<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        A single global login to interact with adidas products and services<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Exclusive offers and promotions<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Latest products arrivals<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        New season and limited collections<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Upcoming events<br><br>
        <a href="./SignUp.php">
            <p class="buttom">Sign Up Now <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvl1MENwjAMheHfG7BJGQE2YKMyApswAh0BNmGDhyKVQ6Si2A45IHpt9T7Zeakx+LHB+fwpIOkMXMzs2VpxeEVr+AzcgWMLyQA7YAEmDxIGykokuZEUEEHSgBfpAjxIBUhSq3aO91W7RgAP4PCu77dWdAP2QBVepu0C1rp+DO8CPOFpwBueAiLhWeAEXLcOdKvCqUOWVJCl9SdNTeC4aNUnqQkiyO8DL9f1XhkHzI6MAAAAAElFTkSuQmCC" />
            </p>
        </a>
    </section>
</section>
</section>
<?php include "include/footer.php" ?>
</section>
    <?php
    endif;
    ?>
</body>

</html>