<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            width: 100%;
            height: 100%;
            background-image: url('https://i.pinimg.com/originals/b2/b0/2f/b2b02f3b94075334edb07f8e6f8c0d11.gif');
            background-repeat: no-repeat;
            background-size: cover;
        }
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
    </style>
</head>

<body>
    <!-- <pre> -->
    <?php
    require 'include/connect.php';
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
            <form action="edit-action.php" method="post">
                <?php 
                    echo'<div class="in4">';
                    echo '<p>Email:</p><div class="text"><b>'.$_POST['email'].'</b></div>';
                    echo'</div><br>';
                    // echo "<br>";
                ?>
                <input type="hidden" name="user_id" id="" value="<?= $user['use_id'] ?>">
                <input type="hidden" name="name" id="" value="<?= $user['name'] ?>">
                <input type="hidden" name="email" id="" value="<?= $user['email'] ?>">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="" value="<?= $user['pass'] ?>" required>
                <br>
                <button type="submit"  class="btn btn-primary" name="edit">Submit</button>
            </form>
    <?php
    else:
        echo'<p style="margin-top:150px;text-align:center; color:red; font-size:40px;">Entered the wrong code</p>';
        echo'<br><p style="text-align:center; color:blue; font-size:40px;">Please go back to the previous page to re-enter the code</p>';
        endif;
    endif;
    ?>
</body>

</html>