<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <style>
        body >p{          
            background-color: rgba(0, 0, 0,0.5);
        }
        form{
            border-radius: .5rem;
            color:white;
            width: 50%;
            margin: 0 auto;
            background-color: rgba(0, 0, 0,0.5);
        }
        .in4{
            margin-top:130px;
            padding-left:10px;
        }
        .text{
            width: 650px;
            height: 38px;
            border:1px solid #ced4da;
            line-height: 38px;
            margin-left: 10px;
            padding-left: 20px;
            border-radius: .25rem;
        }
        .form-control{
            width: 650px!important;
            margin: 0 auto !important;
        }
        label{
            padding-left:10px;
        }
        button{
            margin-bottom:20px !important;
            margin-left: 300px !important;
        }
    </style> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/client/css/LogIn.css">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
</head>

<body>
    <!-- <pre> -->
    <div style="height: 107px"></div>
    <section class="boxall">
        <?php include "../../include/header.php";
        $min=100000;
        $max=999999;
         ?>
        <?php
    require '../../include/connect.php';
    if (isset($_POST['entercode'])) :
        $code = $_POST['code'];
        if ($code == $_POST['codeenter']) :
            $user_name = $_POST['email'];
            
            $query = "SELECT * FROM users
            WHERE email = '$user_name';";
            $users = $conn->query($query);
            // // lay du lieu cho mang user 
            $user = $users->fetch_assoc();

            // print_r($user);
    ?>
            <form action="../action/edit-action.php" method="post">
            <section class="form">
            <section class="form-input">
                <h2>
                    Recovery password
                </h2>
            <hr>
                <?php 
                    echo 'Email:<div class="form-control" style="padding-top:10px;padding-left:10px;"><b>'.$_POST['email'].'</b></div>';
                    echo'<br>';
                    // echo "<br>";
                ?>
                
                <input type="hidden" name="user_id" id="" value="<?= $user['use_id'] ?>">
                <input type="hidden" name="email" id="" value="<?= $user['email'] ?>">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="" placeholder="*****" required>
                <br>
                <button type="submit" class="SignUp"  class="btn btn-primary" name="edit">Submit</button>
        </form>
    <?php
    else:
        echo'<p style="margin-top:150px;text-align:center; color:red; font-size:40px;">Entered the wrong code</p>';
        echo'<br><p style="text-align:center; color:blue; font-size:40px;">Please go back to the previous page to re-enter the code</p>';
        endif;
    endif;
    ?>


    </section>
    <!-- đặng nhập bằng hình thức khác -->
    <p class="or">OR</p>
    <section class="fb">
        <p>FACEBOOK</p>
        <img src="../../../assets/client/images/logofb.png">
    </section>
    <section class="fb">
        <p>INSTAGRAM</p>
        <img src="../../../assets/client/images/logoinsta.png">
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
    <?php include "../../include/footer.php" ?>
    </section>
</body>

</html>