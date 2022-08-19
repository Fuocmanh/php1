<?php require_once('../config/head.php'); ?>
<title>Đăng Ký Tài Khoản</title>
<body> <div class="body_body">
<div style="line-height: 10px;
    font-size: 10px;
    padding-right: 5px;
       padding-bottom: 6px;
    padding-top: 2px;">
<img height="12" src="https://i.imgur.com/sTU8Zc1.png" style="vertical-align: middle;">
<span style="vertical-align: middle;">Dành cho người chơi trên 12 tuổi. Chơi quá 180 phút mỗi ngày sẽ hại sức khỏe.
</span>
</div>
<div class="left_top"></div><div class="bg_top"><div class="right_top"></div></div>
<div class="body-content">
<div class="a" align="center"><img src="https://i.imgur.com/Rj8bx24.png" height="90"></div>
<div id="top">
<div class="link-more">
<div class="h">
<div class="bg_tree"></div>
<div class="bg_noel"></div>
<div class="menu2" style="">
<table width="100%" border="0" cellspacing="4">
<tbody><tr class="menu">
<td id="selected" style="border: 3px solid #FFAF4D;padding: 2px;"><a href="">Trang Chủ</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="tao-bai-viet">Tạo Bài Viết</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="">Facebook</a></td>
<td style="border: 3px solid #924C31;padding: 2px;">
<a href="">Zalo</a></td>
</tr>
</tbody></table>
</div>
<div class="body">
<div id="box_login_ads">
<div class="body" style="text-align:center">
<div style="font-size:10px;">Sử dụng tài khoản Chú Bé Rồng Online để đăng nhập.</div>
<center>
<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $server = $_POST['server'];
    $gmail = $_POST['gmail'];
    $avt = $_POST['avt'];
    $name = $_POST['name'];
    
$check_username = $tmanh->query("SELECT * FROM users WHERE username = '$username' ");

$check_gmail = $tmanh->query("SELECT * FROM users WHERE email = '$gmail' ");
        
if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { ?>

<div class="alert bg-danger text-white" role="alert">Tên đăng nhập không bao gồm các kí tự đặc biệt và có dấu!</div>

<?php } else if ($check_username->num_rows != 0) { ?>

<div class="alert bg-danger text-white" role="alert">Tên đăng nhập đã tồn tại!</div>

<?php } else if ($check_gmail->num_rows != 0) { ?>

<div class="alert bg-danger text-white" role="alert">Gmail đã tồn tại!</div>

<?php } else {
            
 $tao = $tmanh->query("INSERT INTO `users` SET 
        `avt` = '$avt',
        `fullname` = '$name',
        `password` = '$password',
        `username` = '$username',
        `gmail` = '$gmail',
        `level` = '0',
        `sever` = '$server',
        `ip` = '$ip_address',
        `time` = '$time' ");
$_SESSION['username'] = $gmail;
            if ($tao) { ?>
            <div class="alert bg-success text-white" role="alert">Đăng Ký Thành Công</div>
            
            <?php
            echo '<meta http-equiv="refresh" content="1;url=/">';
            } else { ?>

<div class="alert bg-danger text-white" role="alert">Có gì đó không ổn!</div>

<?php }
        }
}
?>
<form method="post" action="">
<input type="hidden" name="nav" value="" readonly="readonly">
<table>
<tbody>
<tr><td colspan="2"><label for="user">Ảnh Đại Diện:</label></td>
<td colspan="2">
<input type="radio" name="avt" value="avt/734.png" required=""><img src="/avt/734.png" height="50">
<input type="radio" name="avt" value="avt/518.png" required=""><img src="/avt/518.png" height="50">
<input type="radio" name="avt" value="avt/519.png" required=""><img src="/avt/519.png" height="50">
<input type="radio" name="avt" value="avt/520.png" required=""><img src="/avt/520.png" height="50">
<input type="radio" name="avt" value="avt/521.png" required=""><img src="/avt/521.png" height="50">
<input type="radio" name="avt" value="avt/522.png" required=""><img src="/avt/522.png" height="50">
<input type="radio" name="avt" value="avt/523.png" required=""><img src="/avt/523.png" height="50">
<input type="radio" name="avt" value="avt/524.png" required=""><img src="/avt/524.png" height="50">
<input type="radio" name="avt" value="avt/525.png" required=""><img src="/avt/525.png" height="50">
</td></tr>
<tr><td colspan="2"><label for="user">Họ Và Tên:</label></td>
<td colspan="2"><input name="name" type="text" value=""></td></tr>

<tr><td colspan="2"><label for="user">Email:</label></td>
<td colspan="2"><input name="gmail" type="email" value=""></td></tr>

<tr>
<td colspan="2"><label for="user">Tài Khoản:</label></td>
<td colspan="2"><input name="username" type="text" value=""></td></tr>

<tr><td colspan="2"><label for="pass">Mật Khẩu:</label></td>
<td colspan="2"><input name="password" type="password" value=""></td></tr>
</tbody></table>
<table>
<tbody>
<tr align="center">
<td align="center">
<input type="radio" name="server" value="1" required=""> Server 1 sao
<input type="radio" name="server" value="2"> Server 2 sao
<input type="radio" name="server" value="3"> Server 3 sao
<input type="radio" name="server" value="4"> Server 4 sao
</td>
</tr>
<tr align="center">
<td align="center">
<input type="radio" name="server" value="5"> Server 5 sao
<input type="radio" name="server" value="6"> Server 6 sao
<input type="radio" name="server" value="7"> Server 7 sao
<input type="radio" name="server" value="8"> Server 8 sao
<input type="radio" name="server" value="9"> Server 9 sao
</td>
</tr>
</tbody></table>
<button type="submit" class="w3-button w3-red" value="Đăng Ký" name="submit">Đăng Ký</button><br>
<div style="font-size:10px;">
Nếu bạn chưa có tài khoản, vui lòng <a href="login">đăng nhập</a><br>
</form><br>
</center>
</div>
</div>
</div> <br></div>
</div><br>
</div>
</div>
<?php require_once('../config/foot.php'); ?>