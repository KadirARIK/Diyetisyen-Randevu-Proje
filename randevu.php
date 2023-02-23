<?php
session_start();
include("baglanti.php");

?>
<!DOCTYPE html>
<html lang="en">
<style>
    table{
        border: 1px solid black;
        border-radius: 5px;
    }
body{
  background-image: url('img/image1.jpg');
}
</style>
<link rel="stylesheet"type="text/css" href="css/style.css">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Sayfası</title>
</head>
<body>
<form action="randevu.php " method="Post">
    <center>
<h1>RANDEVU SAYFASI</h1>
<hr>
<table style="background-color:rgb(107, 204, 249);">
    <th>Randevu Al</th>
    <tr>
        <td>
            
<label for="mu_adi">Adı:</label> 
<input type="text" name="muadi" id="mu_adi">
<label for="m_soyadi">Soyadı:</label>
<input type="text" name="msoyad" id="m_soyadi">
<label for="r_tarih">Randevu Tarihi:</label>
<input type="date" name="tarih" id="r_tarih" >
<label for="r_saat">Randevu Saati:</label>
<select name="saat" id="r_saat">
    <option value="9:00-10:00">9:00-10:00</option>
    <option value="10:00-11:00">10:00-11:00</option>
    <option value="11:00-12:00">11:00-12:00</option>
    <option value="13:00-14:00">13:00-14:00</option>
    <option value="14:00-15:00">14:00-15:00</option>
    <option value="15:00-16:00">15:00-16:00</option>
    <option value="16:00-17:00">16:00-17:00</option>

</select>
<input type="submit" name="randevu_gonder" value="Randevu Al">
</form>
   
        </td>

    </tr>
</table>
    
<?php

if (isset($_POST['randevu_gonder'])) { //isset parametre olarak aldığı değişkende parametre tanımlımı diye kontrol eder.
    $isim=$_POST["muadi"];
    $soyisim=$_POST["msoyad"];
    $tarih=$_POST["tarih"];
    $saat=$_POST["saat"];

    if ($tarih&&$saat) {
        $konrol="SELECT*FROM kullanici WHERE tarih='$tarih' and saat='$saat'";
        $calıştır=mysqli_query($baglan,$konrol);
        $randevukonrol=mysqli_num_rows($calıştır);
        if ($randevukonrol!=0) {
            echo"<br>";
            echo "“Bu saatte randevu doludur lütfen başka bir tarih ve saat giriniz.";
            header("Refresh:5");
            mysqli_close($baglanti);
            exit();
        }
        if ($tarih=="2023-01-01"||$tarih=="2023-01-08"||$tarih=="2023-01-15"||$tarih=="2023-01-22"||$tarih=="2023-01-29") {
            echo "Bu tarihleri seçemessiniz.";
            header("Refresh:1");
            mysqli_close($baglanti);
            exit();
        }
    }
    $ekle="INSERT INTO kullanici(isim, soyisim,tarih,saat) VALUES ('$isim','$soyisim','$tarih','$saat')";
    $calıştırekle=mysqli_query($baglan,$ekle);
    if ($calıştırekle) {
        echo " Randevunuz başarı ile alınmıştır";
        header("Refresh:5");
        


    }
    else {
        echo "Randevu oluşturulamadı yeniden deneyiniz.";
        header("Refresh:5, url:http://localhost/DiyetisyenProje/randevu.php");
    }


}
   

?>
</center>
</body>
</html>