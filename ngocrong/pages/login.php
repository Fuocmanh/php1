<?php require_once('../config/head.php'); ?>
<title>Đăng Nhập Website</title>
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
    $gmail = $_POST['username'];
    $password = $_POST['password'];
    $server = $_POST['server'];
    
    
    $query = $ketnoi->query("SELECT * FROM `users` WHERE `gmail` = '$gmail' ")->fetch_array();
    
    if ($gmail == "" || $password =="") { ?>
    
    <div class="alert alert-danger text-center" role="alert"><strong>Vui Lòng Nhập Đầy Đủ Thông Tin!</strong></div>
       
    <?php } else if(empty($query)) { ?>
        <div class="alert alert-danger text-center" role="alert"><strong>Tài Không Không Tồn Tại!</strong></div>
   <?php } else if($password != $query['password']) { ?>
        <div class="alert alert-danger text-center" role="alert"><strong>Mật Khẩu Không Chính Xác!</strong></div>
   <?php } else if($server != $query['sever']) { ?>
       <div class="alert alert-danger text-center" role="alert"><strong>Không Có Tài Khoản Nào ở Sever <?=$server;?>!</strong></div>
   <?php } else {
        
        $_SESSION['username'] = $query['username'];
        
        
        
        $ketnoi->query("INSERT INTO `log` SET 
        `note` = 'Đăng nhập vào hệ thống ! ',
        `time` = '$time',
        `username` = '".$query['username']."' ");
        
         echo '<meta http-equiv="refresh" content="1;url=/">';
    }
}
?>
<form method="post" action="">
<input type="hidden" name="nav" value="" readonly="readonly">
<table>
<tbody><tr>
<td colspan="2"><label for="user">Email:</label></td>
<td colspan="2"><input name="username" type="text" value=""></td></tr>


<tr><td colspan="2"><label for="pass">Mật Khẩu:</label></td>
<td colspan="2"><input name="password" type="password" value=""></td></tr>
</tbody></table>
<table>
<tbody>
<tr align="center">
<td>
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
<button type="submit" class="w3-button w3-red" value="Đăng nhập" name="submit">Đăng nhập</button><br>
<div style="font-size:10px;">
Nếu bạn chưa có tài khoản, vui lòng <a href="signup">đăng ký</a><br>
</form><br>
</center>
</div>
</div>
</div> <br></div>
</div><br>
</div>
</div>
<?php require_once('../config/foot.php'); ?>