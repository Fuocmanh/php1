<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/client/css/LogIn.css">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <script type="text/javascript" src="../assets/client/javascript/login.js"> </script>
</head>

<body>
    <audio autoplay>
        <source src="./audio/Action-Rock.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div style="height: 107px"></div>


    <section class="boxall">
        <?php include "include/header.php" ?>
        <!-- form đăng nhập -->
        <form name="f1" id="f" action="login-action.php" method="post">
            <h2>LOG IN</h2>
            <a href="forgot.php">Forgotten Your Password?</a>
            <hr>
            <section class="form">
                <section class="form-input">
                    <label for="email"><b>Email</b></label>
                    <input id="mail" class="form-control"  type="email" placeholder="Enter email" name="email">
                    <label for="password"><b>Password</b></label>
                    <input id="pass" class="form-control" type="password" placeholder="Enter password" name="password">
                    <section class="nhodn">
                        <input type="checkbox" name="remember">
                        <label for="nhodn">Remember to sign in</label>
                    </section>
                    <input type="submit" name="login" value="LogIn" class="SignUp">
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
</body>

</html>