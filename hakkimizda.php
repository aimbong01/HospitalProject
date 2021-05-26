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

                    <li><a class="active" href="hakkimizda.php">HAKKIMIZDA</a></li>

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

        <div id="info">


            <h1>Vizyonumuz</h1><br>
            <p>
                Uzman kadrosu ile en ileri teknolojiyi entegre ederek, geniş kitlelere ulaşabilen ve hasta memnuniyetini
                en üst düzeyde tutabilen örnek, yaygın, entegre bir hizmet sunmak.
            </p>
            <br><br>

            <h1>Misyonumuz</h1><br>
            <p>
                En önemli insani değerlerden biri olan SAĞLIK'ta çağdaş standartlar ve toplumsal değerlere saygılı,
                kaliteye bütünsel bir yaklaşımla hizmet anlayışı sunmak.
            </p>
            <br><br>
            <h1>Değerlerimiz</h1><br>
            <p>
                İnsan, sağlık sektörünün kalbidir. Verdiğimiz hizmetlerin amacı ve ölçüsü insandır. Bilimsel düşünceye
                dayanmak, insanı merkeze koymak, sağlık alanındaki bilgi ve tecrübelerimizle dünyadaki tüm başarıları
                birleştirmek, hasta haklarına ve etik ilkelerine sonuna kadar saygı duymak, çalışkan olmak ve
                yükselecek şekilde öncülük etmek bizi biz yapan
                değerlerden bazılarıdır.

            </p>
            <br><br>

            <img src="img/hospital.jpg" width="800px" height="auto">
        </div>

    </div>
    <div id="footer">
        <div id="copyright">Copyright © 2021 - Tüm hakları ÖZ-DO Hospital şirketine aittir.</div>
        <div id="phone">444 4 565</div>
    </div>


</body>

</html>