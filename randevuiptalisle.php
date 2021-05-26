<?php

include('baglanti.php');

if (mysqli_connect_errno())
{
    echo "MySQL baglantisi basarisiz: " . mysqli_connect_error();
}

$tc = $_POST['tc'];
$sql = "SELECT * FROM randevu WHERE hastatc='$tc'";
$sorgu = mysqli_query($baglanti,$sql);
$sonuc=mysqli_fetch_row($sorgu);
if(!isset($sonuc)){

    echo "Yazılı T.C kimlik bilgileri için randevu bulunamamıştır...";
}
else{

    $sql2 = "DELETE FROM randevu WHERE hastatc='$tc'";
    $sonuc2=mysqli_query($baglanti,$sql2);
    echo "Randevunuz başarıyla iptal edilmiştir...";
    
}



header( "refresh:5;url=randevu.php" ); 
    
?>