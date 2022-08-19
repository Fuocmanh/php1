<link rel="stylesheet" href="css/LogIn.css">
<section class="boxall">
        <!-- form đăng nhập -->
        <form name="f1" id="f" action="login-action.php" method="post">
            <h2>LOG IN</h2>
            <a href="">Forgotten Your Password?</a>
            <hr>
            <section class="form">
                <section class="form-input">
                    <label for="email"><b>Email</b></label>
                    <input id="mail" class="form-control"  type="email" placeholder="Enter email" name="email" required>
                    <label for="password"><b>Password</b></label>
                    <input id="pass" class="form-control" type="password" placeholder="Enter password" name="password" required>
                    <section class="nhodn">
                        <input type="checkbox" name="remember">
                        <label for="nhodn">Remember to sign in</label>
                    </section>
                    <br>
                    <input type="submit" class="form-control" name="login" value="Login" style="width:20%; height:50px; background-color:rgba(255,255,255,0.5);">
        </form>
    </section>