<?php
session_start();
define("DATABASE", "vzgltcgk_binhtools_binh06");
define("USERNAME", "root");
define("PASSWORD", "");
// define("USERNAME", "t1632473955_demo");
// define("PASSWORD", "manh_2004");
define("LOCALHOST", "localhost");
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
$ketnoi->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$_SESSION['session_request'] = time();
$time = date('h:i d-m-Y');
$tmanh = $ketnoi;

if(isset($_SESSION['username'])) {
$username = $_SESSION['username'];

$user = $ketnoi->query("SELECT * FROM `users` WHERE `username` = '$username' ")->fetch_array();

if(empty($user['id'])) {
session_start();
session_destroy();
header('location: /');
}
$capbac = $user['level'];
// $capbac = $user['admin'];

if($capbac == "0") {
$ck_manhdz = "0"; # chiết khấu thành viên
} else if($capbac == "1") {
$ck_manhdz = "10"; # chiết khấu công tác viên
} else  if($capbac == "2") {
$ck_manhdz = "20"; # chiết khấu đại lý
} else if($capbac == "3") {
$ck_manhdz = "70"; # chiết khấu admin
}
}



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
} else {  
$ip_address = $_SERVER['REMOTE_ADDR'];  
}

function tien($price) {
return str_replace(",", ".", number_format($price));
}

function random($string, $int) {  
return substr(str_shuffle($string), 0, $int);
}

function xoadau($strTitle) {
$strTitle=strtolower($strTitle);
$strTitle=trim($strTitle);
$strTitle=str_replace(' ','-',$strTitle);
$strTitle=preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/",'o',$strTitle);
$strTitle=preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/",'o',$strTitle);
$strTitle=preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/",'a',$strTitle);
$strTitle=preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/",'a',$strTitle);
$strTitle=preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/",'e',$strTitle);
$strTitle=preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/",'e',$strTitle);
$strTitle=preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/",'u',$strTitle);
$strTitle=preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/",'u',$strTitle);
$strTitle=preg_replace("/(ì|í|ị|ỉ|ĩ)/",'i',$strTitle);
$strTitle=preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/",'i',$strTitle);
$strTitle=preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/",'y',$strTitle);
$strTitle=preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/",'y',$strTitle);
$strTitle=str_replace('đ','d',$strTitle);
$strTitle=str_replace('Đ','d',$strTitle);
$strTitle=preg_replace("/[^-a-zA-Z0-9]/",'',$strTitle);
return $strTitle;
}
?>