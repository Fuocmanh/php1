<?php require_once('../config/head.php'); ?>
<?php if(!$username) {
echo '<meta http-equiv="refresh" content="0;url=/login">';
}
?>
<title>Chú Bé Rồng Online - Ngọc Rồng Online - Ngọc Rồng Online</title>
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
<td id="selected" style="border: 3px solid #FFAF4D;padding: 2px;"><a href="tao-bai-viet">Tạo Bài Viết</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="">Facebook</a></td>
<td style="border: 3px solid #924C31;padding: 2px;">
<a href="">Zalo</a></td>
</tr>
</tbody></table>
</div>
<div class="body">
<div id="box_login_ads">
<div style="width:100%;float:left;">
<table style="margin-left:auto;margin-right:auto;text-align:left;">
<tbody><tr>
<td>
</td>
<?php if($username) { ?>
<td colspan="5" align="center">
<div class="box_welcome_team"><span>
<img src="<?=$user['avt'];?>" alt="moraikomic"><br>
<b style="color:#ad4105"><?=$username;?></b>
<br>
<a class="w3-button w3-red w3-small w3-hover-green" href="logout">Thoát</a>
<a class="w3-button w3-red w3-small w3-hover-green" href="doi-mat-khau" style="font-size:11px;">Đổi MK</a>
<a class="w3-button w3-red w3-small w3-hover-green" href="profile" style="font-size:11px;">Hồ Sơ</a>
</span>
</div>
</td>
<?php } else { ?>
<td colspan="5" align="center">
<div class="box_welcome_team"><span>
<a class="w3-button w3-red w3-small w3-hover-green" href="login">Đăng Nhập</a>
<a class="w3-button w3-red w3-small w3-hover-green" href="signup">Đăng ký</a>
</span>
</div>
</td>
<?php } ?>

</tr>
</tbody></table>
</div>
</div>
<div id="box_forums">
<div class="box_list_chuyenmuc">
<div class="box_topss"><span>Viết bài mới</span></div>
<div class="box_midss">
<?php if(isset($_POST['submit'])) {
$name = array();
$tmp_name = array();
$error = array();
$ext = array();
$size = array();

foreach ($_FILES['file']['name'] as $file) {
$name[] = $file;
}
foreach ($_FILES['file']['tmp_name'] as $file){
$tmp_name[] = $file;
}

for ($i=0;$i<count($name);$i++){
if ($error[$i] > 0){
echo $error[$i];
} else {
$number_random = random('1234567890', 4);
$title = $_POST['title'];
$note = $_POST['note'];
$random = random('1234567890', 7);
$code = xoadau($title);

$temp = preg_split('/[\/\\\\]+/', $name[$i]);
$filename = $temp[count($temp)-1];
$upload_dir = "../anh/";
$upload_file = $upload_dir . "BC_".$number_random.".png";
if (file_exists($upload_file)){ ?>
<div class="alert alert-danger text-center" role="alert"><strong>Thất Bại, Ảnh Đã Tồn Tại</strong></div>
<?php echo '<meta http-equiv="refresh" content="2;url=">';
}
if (move_uploaded_file($tmp_name[$i], $upload_file) ) {
$duong_lik = "/anh/BC_".$number_random.".png";
$getanh = explode(PHP_EOL,$duong_lik);
$countupdate = 0;

foreach($getanh as $row) {
$ketnoi->query("INSERT INTO `anh_dien_dan` SET 
`code` = '$code',
`anh` = '$row' ");
$countupdate++;
}

}
}
}



$ketnoi->query("INSERT INTO `dien_dan` SET 
    `code` = '$code',
    `id_bai` = '$random',
    `title` = '$title',
    `note` = '$note',
    `avt` = '".$user['avt']."',
    `username` = '".$user['username']."' ");



echo '<meta http-equiv="refresh" content="1;url=/">';
}
?>
<form enctype="multipart/form-data" action="" method="post">
<div class="textbox">
<div class="box_test">Tiêu đề : </div>
<div class="box_inputs">
&nbsp;&nbsp;&nbsp;&nbsp;<input name="title" type="text" required="">
</div>
</div>
<div class="textbox">
<div class="box_test">Nội dung : </div>
<div class="box_inputs">
&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="note" type="text" rows="3" required=""></textarea>
</div>
</div>

<div class="textbox">
<div class="box_test">Hình Ảnh : </div>
<div class="box_inputs">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="file" name="file[]" multiple="" required="">
</div>
</div>

<br><br>
<div class="textbox">
<div class="box_inputs">
<center><button class="w3-button w3-red w3-small w3-hover-green" name="submit" type="submit">Gửi</button></center>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="clearfix"></div></div><br></div>
</div><br>
</div>
</div>
<?php require_once('../config/foot.php'); ?>
