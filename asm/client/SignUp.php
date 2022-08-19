<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adidas Official - Sign up</title>
  <link rel="stylesheet" href="../assets/client/css/SignUp.css">
  <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script type="text/javascript" src="../assets/client/javascript/signup.js">
    
  </script>
   <link rel="stylesheet" href="../assets/client/css/header.css">
</head>

<body>
  <div style="height: 107px"></div>

  <section class="boxall">
    <?php include "include/header.php" ?>
    <!-- form đăng kí -->
    <form name="f1" method="post" action="module/action/signUp-action.php">
      <h2>Register</h2>
      <section class="form">
        <section class="form-input">
          <label for="name"><b>Your name</b></label>
          <input id="hoTen" type="text" class="form-control" name="usename" placeholder="Your name" required>
          <label for="email" class=""><b>Email</b></label><br>
          <input id="mail" type="email" class="form-control" name="email" placeholder="Email" required>
          <label for="email" class=""><b>Phone</b></label><br>
          <input id="mail" type="number" class="form-control" name="phone" placeholder="Your phone">
          <label for="email" class=""><b>Address</b></label><br>
          <input id="mail" type="text" class="form-control" name="address" placeholder="Your address">
          <label for="password" class=""><b>Password</b></label><br>
          <input id="password" type="password" class="form-control"  required name="password" placeholder="Password">
          <label for="confirm" class=""><b>Confirm password:</b></label><br>
          <input id="confirm" type="password" required class="form-control" name="confirm" placeholder="Confirm password:">

        </section>
        <input type="submit" name="register" value="Sign Up" class="SignUp">
      </section>
    </form>
    <section class="createpro">
      <section class="create">
        <h2>CREATE AN ACCOUNT</h2>
        Your Global Login will give you access to:<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        A single global login to interact with adidas products and services<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Checkout faster<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        View your personal order history<br><br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALVJREFUSEvtlNENgzAMBY8NugkdgU7UEWg3YCM6QtmkI6AngeQGGhsKf8kXKOFOfnaoOHlVJ/MpAjfhEtEc0QW4A880syMiErwHrpPgYSX/Cix8ABrgc5TAhUu0t4IQ3BMoyy4tGQjDcwLBW+AN3IxkEzwnEOgF1Eai8/O0rDZ07VrnepBK9L1GMQz3eqB9K9H7JnhEYCV6Xsy597eLjqkq0fq6RB48WkGE8/NMtILdkiJwoxsBhvUmGXE1+WEAAAAASUVORK5CYII=" />
        Add or change email preferences<br><br>
      </section>
    </section>
  </section>
  <!-- giới thiệu về lợi ích của việc đăng kí tài khoảng -->
  <?php
  include 'include/footer.php';
  ?>
</body>

</html>