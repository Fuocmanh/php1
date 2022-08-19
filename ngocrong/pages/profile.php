<?php require_once('../config/head.php'); ?>
<?php if(!$username) {
echo '<meta http-equiv="refresh" content="0;url=/login">';
}
?>
<title>Thông Tin Hồ Sơ</title>
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
<td style="border: 3px solid #924C31;padding: 2px;"><a href="tao-bai-viet">Tạo Bài Viết</a></td>
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

<td colspan="5" align="center">
<div class="box_welcome_team"><span>
<img src="<?=$user['avt'];?>" alt="moraikomic"><br>
<b style="color:#ad4105"><?=$username;?></b>
<br>
</span>
</div>
</td>

</tr>
</tbody></table>
</div>
</div>
<div id="box_forums">
<div class="box_list_chuyenmuc">
<div class="box_topss"><span>Thông Tin</span></div>

<table style="margin-left:auto;margin-right:auto;text-align:left;">
<tbody>
<tr class="menu">
<td style="border: 3px solid #924C31;padding: 2px;"><input value="<?=$user['username'];?>"></td>
<td style="border: 3px solid #924C31;padding: 2px;"><input value="<?=$user['gmail'];?>"></td>
<td style="border: 3px solid #924C31;padding: 2px;"><input value="<?=$user['fullname'];?>"></td>

</tr>

<tr class="menu">
<td style="border: 3px solid #924C31;padding: 2px;"><input value="Sever <?=$user['sever'];?>"></td>
<td style="border: 3px solid #924C31;padding: 2px;"><input value="<?=$user['ip'];?>"></td>
<td style="border: 3px solid #924C31;padding: 2px;"><input value="<?=$user['time'];?>"></td>
</tr>


</tbody></table>

</div>
</div>
<div class="clearfix"></div></div><br></div>
</div><br>
</div>
</div>
<?php require_once('../config/foot.php'); ?>
