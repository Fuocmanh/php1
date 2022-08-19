<?php require_once('config/head.php'); ?>
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
<td id="selected" style="border: 3px solid #FFAF4D;padding: 2px;"><a href="/">Trang Chủ</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="tao-bai-viet">Tạo Bài Viết</a></td>
<td style="border: 3px solid #924C31;padding: 2px;"><a href="/">Facebook</a></td>
<td style="border: 3px solid #924C31;padding: 2px;">
<a href="">Zalo</a></td>
</tr>
</tbody></table>
</div>
<div class="body">
<div id="box_login_ads">
<div style="width:100%;float:left;">
<table style="margin-left:auto;margin-right:auto;text-align:left;">
<tbody>
<tr>
<td>
</td>
<?php if($username) { ?>
<td colspan="5" align="center">
<div class="box_welcome_team"><span>
<img src="<?=$user['avt'];?>" alt="moraikomic">
<br>
<b style="color:#ad4105"><?=$username;?></b>
<br>
<a class="w3-button w3-red w3-small w3-hover-green" href="logout">Thoát</a>
<a class="w3-button w3-red w3-small w3-hover-green" href="doi-mat-khau" style="font-size:11px;">Đổi MK</a>
<a class="w3-button w3-red w3-small w3-hover-green" href="/profile" style="font-size:11px;">Hồ Sơ</a>
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
<div id="columns" style="text-align:center">
<figure>
<a href="https://27.0.14.78/dl/?c=download&amp;type=jar&amp;id=110&amp;ver=2" title="game bảy viên Chú Bé Rồng Online">
<img height="35" src="https://i.imgur.com/k01jOku.png" alt="game bảy viên Chú Bé Rồng Online"><br>
</a>
<figcaption><span style="color:rgb(209, 9, 50);">202</span> - <a href="https://27.0.14.78/dl/?c=download&amp;type=jad&amp;id=110&amp;ver=2" title="game bảy viên Chú Bé Rồng Online">
JAD
</a> -
1 tháng<br> <br>
</figcaption>
</figure>
<figure>
<a href="https://dl.teamobi.com/drive/get/po" title="game bảy viên Chú Bé Rồng Online">
<img height="35" src="https://i.imgur.com/y5ERq98.png" alt="game bảy viên Chú Bé Rồng Online">
</a>
<figcaption><span style="color:rgb(209, 9, 50);">202</span> -
1 tháng<br><br></figcaption>
</figure>
<figure>
<a href="https://play.google.com/store/apps/details?id=com.bluedragonss.boysss" title="game Chú Bé Rồng Online">
<img height="35" src="https://i.imgur.com/KO5U8RS.png" alt="game Chú Bé Rồng Online">
</a>
<figcaption><span style="color:rgb(209, 9, 50);">201</span> -
3 tháng<br> <br></figcaption>
</figure>
<figure>
<a href="https://dl.teamobi.com/drive/get/pM" title="game Chú Bé Rồng Online">
<img height="35" src="https://i.imgur.com/S8KynO4.png" alt="game Chú Bé Rồng Online">
</a>
<figcaption><span style="color:rgb(209, 9, 50);">202</span> -
1 tháng<br> <br></figcaption>
</figure>
<figure>
<a href="https://itunes.apple.com/us/app/ngoc-rong/id796794370?mt=8" title="game Chú Bé Rồng Online">
<img height="35" src="https://i.imgur.com/qo5Nlez.png" alt="game Chú Bé Rồng Online">
</a>
<figcaption><span style="color:rgb(209, 9, 50);">180</span> -
2 năm<br> <br> </figcaption>
</figure>
<figure>
<a href="https://ngocrongonline.com/?c=download&amp;id=NgocRong-WP" title="game bảy viên Chú Bé Rồng Online"><img src="https://i.imgur.com/PNL0ZAA.png" height="35">
</a>
<figcaption><span style="color:rgb(209, 9, 50);">163</span> -
3 năm<br> <br></figcaption>
</figure>
</div>
<div style="text-align:center;    font-weight: bold;font-size:16px;">
</div>
</div>
<div id="box_forums">
<div class="box_list_chuyenmuc">
<div id="stick">
<?php
$ghim = mysqli_query($ketnoi,"SELECT * FROM `dien_dan` ORDER BY `id` desc ");
while($g = mysqli_fetch_assoc($ghim)) { 
if($g['ghim'] == "1") { ?>
<div class="box_botsss">
<div class="topic_name">
<div style="width:25px;float:left;margin-right: 3px;">
<img style="max-width:100%;max-height:100%;" src="<?=$g['avt'];?>" alt="">
</div>
<div style="height:23px;display: table-cell; vertical-align: middle;">
<a href="forum/<?=$g['id_bai'];?>" title="Mạnh Đẹp Chai"><b><?=$g['title'];?></b> <img src="https://i.imgur.com/Bf2UMRf.gif"></a>
<span><?php if($user['level'] == "3") { ?><a href="?bghim=<?=$g['id'];?>" style="color:white">Bỏ Ghim</a><?php } ?></span>
</div>
</div>
</div>
<?php } }?>
</div>
<br>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `dien_dan` ORDER BY `id` desc ");
while($row = mysqli_fetch_assoc($result)) {
if($row['ghim'] == "1") { } else {?>
<div class="box_botss">
<div class="topic_name" style="">
<div style="width:30px;float:left;margin-right: 3px;">
<img style="max-width:100%;max-height:100%;" src="<?=$row['avt'];?>" alt="">
</div>
<div>
<a href="forum/<?=$row['id_bai'];?>" title="Mạnh Đẹp Chai"><span><?=$row['title'];?></span></a>
<div class="box_name_eman">bởi <?php if($user['level'] == "3") { ?><span style="color: red"><?=$row['username'];?></span>  <a href="?xoa=<?=$row['id'];?>">Xóa</a> <?php if($row['ghim'] == 1) { ?><a href="?bghim=<?=$row['id'];?>">Bỏ Ghim</a><?php } else { ?><a href="?ghim=<?=$row['id'];?>">Ghim</a> <?php } } else { ?><span><?=$row['username'];?></span><?php } ?>
<span style="color:red"></span>
</div>
</div>
</div>
</div>
<br>
<?php } } ?>

<?php if($username) { ?>
<div class="box_topsss" style="background-color: transparent;">
<div style="width:100px;float:left;">
<div class="" style="height:31px;background-color: transparent;height:31px;">
<a class="w3-button w3-red w3-small w3-hover-green" href="tao-bai-viet" type="submit" value="submit">Viết bài mới</a>
</div>
</div>
</div>
<?php } ?>
<span style="float:right">
<div class="pagination">
<span class="pagecurrent">1</span>
<a class="pagelink" href="?p=1">2</a>
<a class="pagelink" href="?=2">3</a>
<a class="pagelink" href="?p=1">&gt;</a></div></span>
<?php
if(isset($_GET['xoa'])) {
$xoa = $_GET['xoa'];

mysqli_query($ketnoi, "DELETE FROM `dien_dan` WHERE `id` = '$xoa' ");

echo '<meta http-equiv="refresh" content="0;url=/">';
}
?>

<?php
if(isset($_GET['ghim'])) {
$ghim = $_GET['ghim'];

mysqli_query($ketnoi,"UPDATE `dien_dan` SET `ghim`= '1' WHERE `id` = '$ghim'");

echo '<meta http-equiv="refresh" content="0;url=/">';
}
?>

<?php
if(isset($_GET['bghim'])) {
$bghim = $_GET['bghim'];

mysqli_query($ketnoi,"UPDATE `dien_dan` SET `ghim`= '0' WHERE `id` = '$bghim'");

echo '<meta http-equiv="refresh" content="0;url=/">';
}
?>
</div>
</div>
<div class="clearfix"></div>
</div> <br></div>
</div><br>
</div>
</div>
<?php require_once('config/foot.php'); ?>
