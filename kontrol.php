<?php
session_start();
include('baglanti.php');


if(isset($_SESSION['username'])){
    $user_check=$_SESSION['username'];
    $adsoyad=$_SESSION['adsoyad'];
    $sql = mysqli_query($baglanti,"SELECT * FROM users WHERE usertc='$user_check' ");
    $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
}
?>