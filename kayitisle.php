<?php
include('baglanti.php');
if (mysqli_connect_errno())
{
    echo "MySQL baðlantýsý baþarýsýz: " . mysqli_connect_error();
}

$tc = $_POST['tc'];
$adsoyad =$_POST['adsoyad'];
$mail = $_POST['mail'];
$sifre = $_POST['sifre'];



$kayit = "INSERT INTO users(usertc, useradsoyad, usermail, usersifre) VALUES ('$tc','$adsoyad','$mail','$sifre')";

$sonuc=mysqli_query($baglanti,$kayit);

if(empty($sonuc)){
    echo "Bu hesap bulunmaktadır";
}
else{
    header("Location: giris.php");
    
}



?>