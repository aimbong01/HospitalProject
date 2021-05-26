<?php
include('baglanti.php');
if (mysqli_connect_errno())
{
    echo "MySQL baglantisi basarisiz: " . mysqli_connect_error();
}

$tc = $_POST['tc'];
$hastaadi = $_POST['hastaadi'];
$doktoradi = $_POST['doktoradi'];
$randevusaati = $_POST['randevusaati'];



$sql="SELECT * FROM doktorlar where doktoradi='$doktoradi'";
$sorgu=mysqli_query($baglanti,$sql);
$sonuc=mysqli_fetch_row($sorgu);


$sql2="SELECT * FROM randevusaatleri where randevusaati='$randevusaati'";
$sorgu2=mysqli_query($baglanti,$sql2);
$sonuc2=mysqli_fetch_row($sorgu2);

$sql3="SELECT * FROM randevu where doktorid='$sonuc[0]' and randevusaatiid='$sonuc2[0]'";
$sorgu3=mysqli_query($baglanti,$sql3);
$sonuc3=mysqli_fetch_row($sorgu3);
if(empty($sonuc3[0])){
    $kayit = "INSERT INTO randevu(hastatc, hastaadi, doktorid, randevusaatiid) VALUES ('$tc','$hastaadi','$sonuc[0]','$sonuc2[0]')";
    $sonuc4=mysqli_query($baglanti,$kayit);
}



if(empty($sonuc4)){
    echo "Seçtiğiniz randevu saati dolu. Lütfen başka bir randevu saati seçin...";
}
else{
    echo "Randevunuz başarıyla alınmıştır";
    
}

header( "refresh:5;url=randevu.php" ); 
    
?>