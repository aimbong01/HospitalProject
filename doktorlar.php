<?php
include('kontrol.php');
static $giris;
static $cikis;
if(isset($user_check)){
    $giris="none";
}
else{
    $cikis="none";
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <div id="header">
        <div id="nav-bar">
            <div id="logo">
                <a href="index.php">
                    <img src="img/logo.png" width="128px" height="50px">
                </a>
            </div>
            <div id="nav">
                <ul>
                    <li><a href="index.php">ANASAYFA</a></li>

                    <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>

                    <li><a class="active" href="doktorlar.php">DOKTORLAR</a></li>

                    <li><a href="randevu.php">RANDEVU AL</a></li>

                    <li><a href="randevuiptal.php">RANDEVU İPTAL</a></li>

                    <li><a href="iletisim.php">İLETİŞİM</a></li>
                </ul>
            </div>
            <div id="register">
                <ul style="display: <?php echo $giris; ?>">
                    <li><a href="giris.php">GİRİŞ</a></li>
                    <li><a href="kayit.php">ÜYE OL</a></li>
                </ul>
                <ul style="display: <?php echo $cikis; ?>">
                    <li><?php echo $adsoyad; ?></li>
                    <li><a href="cikis.php">ÇIKIŞ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="content">

        <div id="doctors">


            <?php
            $gizles = '/*';
            $gizlef = '*/';

            $sql="SELECT * FROM doktorlar";
            $result=mysqli_query($baglanti,$sql);

            $row = ceil((mysqli_num_rows($result))/3);

            $result2=mysqli_query($baglanti,$sql);

            for($i=1;$i<=$row;$i++){
                ?>
            <div id="doctor-bar">
                <?php $sonuc1=mysqli_fetch_row($result2);?>
                <div id="doctor1">
                    <div class="top">
                        <img src="img/<?php if(isset($sonuc1[3]))echo $sonuc1[3]; ?>.jpg" width="200px" height="300px">
                        <h2><?php if(isset($sonuc1[1]))echo $sonuc1[1]; ?></h2>

                    </div>
                    <div class="bot">
                        <h3><?php if(isset($sonuc1[2]))echo $sonuc1[2]; ?></h3>
                    </div>
                </div>

                <?php 
                $sonuc2=mysqli_fetch_row($result2); 
                if(isset($sonuc2)) { $gizlef;
                ?>
                <div id="doctor2">
                    <div class="top">
                        <img src="img/<?php if(isset($sonuc2[3]))echo $sonuc2[3]; ?>.jpg" width="200px" height="300px">
                        <h2><?php if(isset($sonuc2[1]))echo $sonuc2[1]; ?></h2>

                    </div>
                    <div class="bot">
                        <h3><?php if(isset($sonuc2[2]))echo $sonuc2[2]; ?></h3>
                    </div>
                </div>

                <?php 
                 $gizles;}
                ?>



                <?php 
                $sonuc3=mysqli_fetch_row($result2); 
                if(isset($sonuc3)) {  $gizlef;
                ?>
                <div id="doctor3">
                    <div class="top">
                        <img src="img/<?php if(isset($sonuc3[3]))echo $sonuc3[3]; ?>.jpg" width="200px" height="300px">
                        <h2><?php if(isset($sonuc3[1]))echo $sonuc3[1]; ?></h2>

                    </div>
                    <div class="bot">
                        <h3><?php if(isset($sonuc3[2]))echo $sonuc3[2]; ?></h3>
                    </div>
                </div>
                <?php 
                  $gizles;}
                ?>
            </div>
            <?php

            }
        

        ?>


        </div>

    </div>
    <div id="footer">
        <div id="copyright">Copyright © 2021 - Tüm hakları ÖZ-DO Hospital şirketine aittir.</div>
        <div id="phone">444 4 565</div>
    </div>


</body>

</html>