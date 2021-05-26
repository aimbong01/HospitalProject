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

                    <li><a class="active" href="randevu.php">RANDEVU AL</a></li>

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

        <div id="randevu">

            <?php 

            $sql="SELECT * FROM doktorlar";
            $result=mysqli_query($baglanti,$sql);
            $row = mysqli_num_rows($result);
            $result2=mysqli_query($baglanti,$sql);
            

            $sql2="SELECT * FROM randevusaatleri";
            $result3=mysqli_query($baglanti,$sql2);
            $row2 = mysqli_num_rows($result3);
            $result4=mysqli_query($baglanti,$sql2);


            ?>

            <form id="randevuform" name="randevuform" action="randevuisle.php" method="post">
                <table width="259" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="96">T.C Kimlik Numarası<br><br></td>
                            <td width="153"><input type="number" name="tc" id="tc" min="10000000000" max="99999999999"
                                    required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td width="96">Hasta Adı Soyadı<br><br></td>
                            <td width="153"><input type="text" name="hastaadi" id="hastaadi" required><br><br></td>
                        </tr>
                        <tr>
                            <td>Doktor Adı</td>
                            <td>
                                <select name="doktoradi" required>
                                    <option value="">Seçiniz</option>
                                    <?php for($i=1;$i<=$row;$i++){ 
                                        $sonuc1=mysqli_fetch_row($result2);
                                        ?>
                                    <option value="<?php echo $sonuc1[1]; ?>"><?php echo $sonuc1[1]; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Randevu Saati</td>
                            <td>
                                <select name="randevusaati" required>
                                    <option value="">Seçiniz</option>
                                    <?php for($j=1;$j<=$row2;$j++){ 
                                        $sonuc2=mysqli_fetch_row($result4);
                                        ?>
                                    <option value="<?php echo $sonuc2[1]; ?>"><?php echo $sonuc2[1]; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="submit" id="submit" value="Randevu Al"></td>
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