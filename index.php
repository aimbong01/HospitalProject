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
                    <li><a class="active" href="index.php">ANASAYFA</a></li>

                    <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>

                    <li><a href="doktorlar.php">DOKTORLAR</a></li>

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

        <div id="banner">
            <img src="img/banner.jpg">
        </div>
        <div id="section-bar">
            <div id="section1">
                <div class="top">
                    <h2>CHECK-UP</h2>
                    <img src="img/health.png" width="auto" height="70px">
                </div>
                <div class="bot">
                    <h3>Yılda en az 1 defa check up yaptırılmalıdır</h3>
                </div>
            </div>
            <div id="section2">
                <div class="top">
                    <h2>COVİD-19</h2>
                    <img src="img/covid.png" width="auto" height="70px">
                </div>
                <div class="bot">
                    <h3>Maske, mesafe ve temizlik kurallarını uyalım</h3>
                </div>
            </div>
            <div id="section3">
                <div class="top">
                    <h2>KAN BAĞIŞI</h2>
                    <img src="img/giveblood.png" width="auto" height="70px">
                </div>
                <div class="bot">
                    <h3>Kan vermek hayat kurtarır</h3>
                </div>
            </div>
        </div>

    </div>
    <div id="footer">
        <div id="copyright">Copyright © 2021 - Tüm hakları ÖZ-DO Hospital şirketine aittir.</div>
        <div id="phone">444 4 565</div>
    </div>


</body>

</html>