<?php require_once('../config/head.php'); ?>
<title>Đổi mật Khẩu Website</title>
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
<td style="border: 3px solid #924C31;padding: 2px;"><a href="">Trang Chủ</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="/tao-bai-viet">Tạo Bài Viết</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="">Facebook</a></td>
<td style="border: 3px solid #924C31;padding: 2px;">
<a href="">Zalo</a></td>
</tr>
</tbody></table>
</div>
<div class="body">
<div id="box_login_ads">
<div class="body" style="text-align:center">
<center>
<?php
if(isset($_POST['doipass'])) {
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
   
    if ($password == "" || $password1 =="" || $password2 =="") { ?>
    
    <div class="alert alert-danger text-center" role="alert"><strong>Vui Lòng Nhập Đầy Đủ Thông Tin!</strong></div>
       
    <?php } else if($password != $user['password']) { ?>
        <div class="alert alert-danger text-center" role="alert"><strong>Mật Khẩu Cũ Không Chính Xác!</strong></div>
   <?php } else if($password1 != $password2) { ?>
       <div class="alert alert-danger text-center" role="alert"><strong>2 Mật Khẩu Không Trùng Nhau!</strong></div>
   <?php } else {
        
        
        $ketnoi->query("INSERT INTO `log` SET 
        `note` = 'Đổi mật khẩu tài khoản ! ',
        `time` = '$time',
        `username` = '".$user['username']."' ");
        
         echo '<meta http-equiv="refresh" content="1;url=">';
    }
}
?>
<form method="post" action="">
<input type="hidden" name="nav" value="" readonly="readonly">
<table>
<tbody><tr>
<td colspan="2"><label for="user">Mật Khẩu Hiện Tại:</label></td>
<td colspan="2"><input name="password" type="password" value=""></td></tr>


<tr><td colspan="2"><label for="pass">Mật Khẩu Mới:</label></td>
<td colspan="2"><input name="password1" type="password" value=""></td></tr>
<tr><td colspan="2"><label for="pass">Nhập Lại Mật Khẩu Mới:</label></td>
<td colspan="2"><input name="password2" type="password" value=""></td></tr>
</tbody></table>
<button type="submit" class="w3-button w3-red" value="Đăng nhập" name="doipass">Đổi Ngay</button><br>
</form><br>
</center>
</div>
</div> <br></div>
</div><br>
</div>
</div>
<?php require_once('../config/foot.php'); ?>