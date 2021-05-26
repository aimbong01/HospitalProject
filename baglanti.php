<?php

$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"12345";
$veritabani        =	"db";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL basarisiz: " . mysqli_connect_error();
}
?>