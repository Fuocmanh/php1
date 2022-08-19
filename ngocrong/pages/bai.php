<?php require_once('../config/head.php'); ?>
<?php if(!$username) {
echo '<meta http-equiv="refresh" content="0;url=/login">';
}
?>
<?php
if(isset($_GET['id'])) {
$id = $_GET['id'];
}
?>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `dien_dan` WHERE `id_bai` = '$id' ");
while($row = mysqli_fetch_assoc($result)) { ?>
<title><?=$row['title'];?></title>
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
<div class="box_list_parent">
<div class="box_parent_list_next"><div class="box_phantrang">
<div class="backlink">
<a style="color:#fff;" href="index.php?for=forum&amp;do=setting&amp;uid=3&amp;p=0&amp;sz=15">Quay lại</a>
</div>
<div class="pagination">
</div></div></div>
<form method="POST" name="UpdateHide">
<div class="box_list_parent_next">
<table cellpadding="0" cellspacing="0" width="99%" border="0" style="table-layout:fixed;word-wrap: break-word;">
<tbody><tr>
<td width="50px;" align="center" class="box_list_c_s">
<img class="avatar" src="<?=$row['avt'];?>" alt="mạnh đẹp chai">
</td>
<td class="box_list_b_s">
    
<div class="box_list_ads">
<div class="box_oxx_member">
<span style="font-weight:normal;color:black;font-size:9px;"><i>
<img style="vertical-align:middle;" title="mạnh đẹp chai" src="https://i.imgur.com/zunNv8s.png" border="0"><?=date('h:i d-m-Y');?></i></span>
<span style="font-weight:normal;color:black;font-size:9px;float:right;"><i>
Mã: <?=$row['id_bai'];?></i></span>
</div>
<div class="box_title_bviet"><?=$row['username'];?></div>
<div class="box_ndung_bviet"><?=$row['note'];?> </div>

<?php
$anh = mysqli_query($ketnoi,"SELECT * FROM `anh_dien_dan` WHERE `code` = '".$row['code']."' ");
while($anh1 = mysqli_fetch_assoc($anh)) { ?>
<div class="box_anh_bviet"><center><img style="vertical-align:middle;" title="mạnh đẹp chai" src="<?=$anh1['anh'];?>" border="0"></center></div>
<?php } ?>

</div>
</td>
</tr>
</tbody></table>
<center><h4><img src="https://i.imgur.com/tvTIaK5.gif"> COMMENT <img src="https://i.imgur.com/tvTIaK5.gif"></h4></center>
<?php
$comment = mysqli_query($ketnoi,"SELECT * FROM `comment` WHERE `id_bai` = '$id' ");
while($cmt = mysqli_fetch_assoc($comment)) { ?>
<table cellpadding="0" cellspacing="0" width="99%" border="0" style="table-layout:fixed;word-wrap: break-word;">
<tbody><tr>
<td width="50px;" align="center" class="box_list_c">
<img class="avatar" src="<?=$cmt['avt'];?>" alt="fizters">
<div class="box_list_b_s" style="background-color: #FFAF4D;">
<div class="box_list_ads">
<div class="box_oxx_member" style="border:none"><span style="font-size:7px;"><?=$cmt['username'];?> <br></span></div>
</div>
</div>
</td>
<td class="box_list_b">
<div class="box_list_ads">
<div class="box_oxx_member"><span> <img style="vertical-align:middle;" title="fizters is offline" src="https://i.imgur.com/zunNv8s.png" border="0">
<span style="font-weight:normal;color:black;font-size:9px;">
<i><?=$cmt['time'];?></i></span></span>
</div>
<div class="box_title_bviet"></div>
<div class="box_ndung_bviet"><?=$cmt['note'];?><br><center></center></div>
<div class="box_timee_bviet" style="padding:3px;"><?php if($user['level'] == "3") { ?><form method="POST"><button name="xoa<?=$cmt['id'];?>">Xóa</a></form><?php } ?>
</div>
</div>
</td>
</tr>
</tbody></table>
<?php
if(isset($_POST['xoa'.$cmt['id']])) {
$xoa = $cmt['id'];

mysqli_query($ketnoi, "DELETE FROM `comment` WHERE `id` = '$xoa' ");

echo '<meta http-equiv="refresh" content="0;url=">';
}
?>
<?php } ?>


</div>
</form></div>

<div class="box_list_chuyenmuc">
<div class="box_midss">
<?php
if(isset($_POST['cmt'])) {
$note = $_POST['note'];

$ketnoi->query("INSERT INTO `comment` SET 
    `id_bai` = '$id',
    `note` = '$note',
    `username` = '$username',
    `avt` = '".$user['avt']."',
    `time` = '$time' ");

echo '<meta http-equiv="refresh" content="0;url=">';

}
?>
<form method="POST">
<div class="box_comment_new">
<table cellpadding="0" cellspacing="0" width="99%" border="0" style="table-layout:fixed;word-wrap: break-word;">
<tbody><tr>
<td width="50px;" align="center" class="box_list_c">
<img class="avatar" src="<?=$user['avt'];?>" alt="">
</td>
<td class="box_list_b">
<div class="box_list_ads">
<div class="box_top_name">
<div class="box_topname"><textarea width="99%" name="note" type="text" rows="5"></textarea></div>
</div>
</div>
</td>
</tr>
<tr>
<td>
</td>
<td>
<button style="width:80px;background-image:none;backgroud-color:#fff;" name="cmt" type="submit" value="Bình Luận">Bình Luận</button>

</td>
<td>
</td>
</tr>
</tbody></table>

</div>
</form>
</div>
</div>


</div>
<div class="clearfix"></div></div><br></div>
</div><br>
</div>
</div>
<?php } ?>
<?php require_once('../config/foot.php'); ?>
