<?php
include('kontrol.php');
if(!isset($user_check))
{
header("Location: giris.php");
}
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

                    <li><a href="doktorlar.php">DOKTORLAR</a></li>

                    <li><a href="randevu.php">RANDEVU AL</a></li>

                    <li><a class="active" href="randevuiptal.php">RANDEVU İPTAL</a></li>

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

        <div id="randevu">

            <form id="randevuform" name="randevuform" action="randevuiptalisle.php" method="post">
                <table width="259" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="96">T.C Kimlik Numarası<br><br></td>
                            <td width="153"><input type="number" name="tc" id="tc" min="10000000000" max="99999999999"
                                    required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="submit" id="submit" value="Randevu İptal Et"></td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>

    </div>
    <div id="footer">
        <div id="copyright">Copyright © 2021 - Tüm hakları ÖZ-DO Hospital şirketine aittir.</div>
        <div id="phone">444 4 565</div>
    </div>


</body>

</html>