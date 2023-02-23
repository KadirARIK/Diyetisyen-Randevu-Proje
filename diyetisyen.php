<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
    #customers{
        font-family:Arial,helvetica,sans-serif;
        border-collapse:collapse;
        width: 100%;

    
    }
    #customers th,#customers td{
        border: 2px solid black;
        padding: 8px;
    }



    
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diyetisyen Çizelge</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
    <form>
    <center>

    <h1>RANDEVU LİSTESİ</h1>
        

<table id="customers" style="background-color:rgb(107, 204, 249);">
      <tr>
        <th>Müşteri Adı</th>
        <th>Müşteri Soyadı</th>
        <th>Randevu Tarihi</th>
        <th>Randevu Saati</th>
      </tr>
      </center>    
</form>
</body>
</html>
<?php

    include("baglanti.php");
    $sec="Select*From kullanici";
    $sonuc=$baglan->query($sec);
    if ($sonuc->num_rows>0) {
        while ($cek=$sonuc->fetch_assoc()) {
            echo "
            
            <tr>
                <td>".$cek['isim']."</td>
                <td>".$cek['soyisim']."</td>
                <td>".$cek['tarih']."</td>
                <td>".$cek['saat']."</td>


            </tr>

            
            
            ";
            
        }
    }
    else{
        echo    "Veri Tabanında kayıtlı hiçbir veri bulunamamıştır.";
    }



?>


 