<?php
session_start();
include("baglanti.php"); 


$tc=$_POST['tcno'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE usertc='$tc' and usersifre='$password'";
$result=mysqli_query($baglanti,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$result2=mysqli_query($baglanti,$sql);
$sorgu = mysqli_fetch_row($result2);
if(isset($sorgu)){
    $_SESSION['adsoyad'] = $sorgu[2];
}


if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $tc;

header("location: index.php");
}else
{
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>"."<a href=giris.php>GERİ DÖN</a>"."</center>";
}
?>